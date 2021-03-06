STG CAS Bundle
==================
Central Authentication Service en Symfony 2 - Basado en Rizeway Bundle


Installation
---------------

1). Agregar el repositorio en donde se encuentra el bundle a instalar. Si no 
    existe la clave "repositories" debe ser creada en el primer nivel del 
    archivo composer.json.

    {
    ...

        "repositories": [
            {
              "type": "composer",
              "url": "http://app.santafe.gov.ar/archivist"
            }
         ],

    ...
    }

2). Agregar en el archivo composer.json el nombre y la versión del bundle:

    {
        ...

        "require": {
            ...

            "stg/cas-bundle": "1.*"

            ...
        }

        ...
    }

    Versiones:
        - dev-trunk (rama principal de desarrollo, no utilizar en producción)
        - 1.0
        - 1.1
        - 1.1.1
        - 1.2

3). Registrar el bundle en el archivo AppKernel.php:

    public function registerBundles()
    {
        ...

        $bundles = array(
            ...

            new STG\DEIM\Security\Bundle\CasBundle\CasBundle(),

            ...
        );

        ...
    }


4). Agregar en el archivo config.yml la configuración del endpoint a utilizar:

    cas:
        # desarrollo/testing
        url: https://tsso.santafe.gov.ar/service-auth
        server: https://tsso.santafe.gov.ar/service-auth # (only if different from the url, for server to server requests)
        cert: false # false to bypass (opcional)
        username_attribute: user  # (opcional)
        proxy: false # if you want to active the proxy cas mode (opcional)


5). Instalar y/o actualizar el bundle:

    $ composer install
    $ composer update


6). Ajustar la configuración de seguridad (security.yml)

    providers:
	in_memory:
            memory:
               users:
                   tuNetIDenCAS:  { password: noSeUsa, roles: [ 'ROLE_USER' ] }

# Para trabajar con entidades, definir el siguiente provider en lugar del anterior
        #usuarios:
        #   entity: { class: STG\DEIM\UsuarioBundle\Entity\Usuario, property: nombre }

        firewalls:
            dev:
                pattern:  ^/(_(profiler|wdt)|css|images|js)/
                security: false

            secured_area:
                pattern:  ^/demo/secured/

	# Si define su propio provider, especifiquelo de la siguiente forma:
                #provider: usuarios

        # Indicar que se va a usar la autenticación por cas
                cas:
                    check_path: _demo_login
                    failure_path: _demo
                logout:
                    path:   _demo_logout
                    target: _demo
                    invalidate_session: false

7). Agregar las rutas vacias para login check y logout en app/config/routing.yml 

    _demo_login:
        pattern: /demo/secured/loginCAS
        defaults: 

    _demo_logout:
        pattern: /demo/secured/logoutCAS
        defaults: 
