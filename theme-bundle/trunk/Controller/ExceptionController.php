<?php
namespace STG\DEIM\Themes\Bundles\AplicativoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkBundle\Templating\TemplateReference;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\FlattenException;
use Symfony\Component\HttpKernel\Log\DebugLoggerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;

/**
 * ExceptionController.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ExceptionController extends Controller
{

    protected $twig;

    protected $debug;

    protected $securityContext;

    protected $router;

    protected $session;

    public function __construct(\Twig_Environment $twig, $debug, $securityContext, $router, $session)
    {
        $this->twig = $twig;
        $this->debug = $debug;
        $this->securityContext = $securityContext;
        $this->router = $router;
        $this->session = $session;
    }

    /**
     * Converts an Exception to a Response.
     *
     * @param Request $request
     *            The request
     * @param FlattenException $exception
     *            A FlattenException instance
     * @param DebugLoggerInterface $logger
     *            A DebugLoggerInterface instance
     * @param string $_format
     *            The format to use for rendering (html, xml, ...)
     *            
     * @return Response
     *
     * @throws \InvalidArgumentException When the exception template does not exist
     */
    public function showAction(Request $request, FlattenException $exception, DebugLoggerInterface $logger = null, $_format = 'html')
    {
        $currentContent = $this->getAndCleanOutputBuffering($request->headers->get('X-Php-Ob-Level', - 1));
        
        $code = $exception->getStatusCode();
        
        return new Response($this->twig->render($this->findTemplate($request, $_format, $code, $this->debug), array(
            'status_code' => $code,
            'status_text' => isset(Response::$statusTexts[$code]) ? Response::$statusTexts[$code] : '',
            'exception' => $exception,
            'logger' => $logger,
            'currentContent' => $currentContent
        )));
    }

    /**
     *
     * @param integer $startObLevel            
     *
     * @return string
     */
    protected function getAndCleanOutputBuffering($startObLevel)
    {
        // ob_get_level() never returns 0 on some Windows configurations, so if
        // the level is the same two times in a row, the loop should be stopped.
        $previousObLevel = null;
        $currentContent = '';
        
        while (($obLevel = ob_get_level()) > $startObLevel && $obLevel !== $previousObLevel) {
            $previousObLevel = $obLevel;
            $currentContent .= ob_get_clean();
        }
        
        return $currentContent;
    }

    /**
     *
     * @param Request $request            
     * @param string $format            
     * @param integer $code
     *            An HTTP response status code
     * @param Boolean $debug            
     *
     * @return TemplateReference
     */
    protected function findTemplate(Request $request, $format, $code, $debug)
    {
        // $this->checkAccessDenied($code);
        $name = $debug ? 'exception' : 'error';
        if ($debug && 'html' == $format) {
            $name = 'exception_full';
        }
        
        // when not in debug, try to find a template for the specific HTTP status code and format
        if (! $debug) {
            $template = new TemplateReference('ThemeAplicativoBundle', 'Exception', $name . $code, $format, 'twig');
            if ($this->templateExists($template)) {
                return $template;
            }
        }
        
        // try to find a template for the given format
        $template = new TemplateReference('ThemeAplicativoBundle', 'Exception', $name, $format, 'twig');
        if ($this->templateExists($template)) {
            return $template;
        }
        
        // default to a generic HTML exception
        $request->setRequestFormat('html');
        
        return new TemplateReference('ThemeAplicativoBundle', 'Exception', $name, 'html', 'twig');
    }
    
    // to be removed when the minimum required version of Twig is >= 2.0
    protected function templateExists($template)
    {
        $loader = $this->twig->getLoader();
        if ($loader instanceof \Twig_ExistsLoaderInterface) {
            return $loader->exists($template);
        }
        
        try {
            $loader->getSource($template);
            
            return true;
        } catch (\Twig_Error_Loader $e) {}
        
        return false;
    }
}
