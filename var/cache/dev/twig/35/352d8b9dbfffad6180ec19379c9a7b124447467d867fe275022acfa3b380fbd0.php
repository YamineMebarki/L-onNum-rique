<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* vendor/symfony/http-foundation/ServerBag.php */
class __TwigTemplate_3416bf2041573fff09b57de810365c712a2d4302757d75164faf5601b1a66800 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/ServerBag.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/ServerBag.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\HttpFoundation;

/**
 * ServerBag is a container for HTTP headers from the \$_SERVER variable.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Bulat Shakirzyanov <mallluhuct@gmail.com>
 * @author Robert Kiss <kepten@gmail.com>
 */
class ServerBag extends ParameterBag
{
    /**
     * Gets the HTTP headers.
     *
     * @return array
     */
    public function getHeaders()
    {
        \$headers = [];
        \$contentHeaders = ['CONTENT_LENGTH' => true, 'CONTENT_MD5' => true, 'CONTENT_TYPE' => true];
        foreach (\$this->parameters as \$key => \$value) {
            if (0 === strpos(\$key, 'HTTP_')) {
                \$headers[substr(\$key, 5)] = \$value;
            }
            // CONTENT_* are not prefixed with HTTP_
            elseif (isset(\$contentHeaders[\$key])) {
                \$headers[\$key] = \$value;
            }
        }

        if (isset(\$this->parameters['PHP_AUTH_USER'])) {
            \$headers['PHP_AUTH_USER'] = \$this->parameters['PHP_AUTH_USER'];
            \$headers['PHP_AUTH_PW'] = isset(\$this->parameters['PHP_AUTH_PW']) ? \$this->parameters['PHP_AUTH_PW'] : '';
        } else {
            /*
             * php-cgi under Apache does not pass HTTP Basic user/pass to PHP by default
             * For this workaround to work, add these lines to your .htaccess file:
             * RewriteCond %{HTTP:Authorization} ^(.+)\$
             * RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]
             *
             * A sample .htaccess file:
             * RewriteEngine On
             * RewriteCond %{HTTP:Authorization} ^(.+)\$
             * RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]
             * RewriteCond %{REQUEST_FILENAME} !-f
             * RewriteRule ^(.*)\$ app.php [QSA,L]
             */

            \$authorizationHeader = null;
            if (isset(\$this->parameters['HTTP_AUTHORIZATION'])) {
                \$authorizationHeader = \$this->parameters['HTTP_AUTHORIZATION'];
            } elseif (isset(\$this->parameters['REDIRECT_HTTP_AUTHORIZATION'])) {
                \$authorizationHeader = \$this->parameters['REDIRECT_HTTP_AUTHORIZATION'];
            }

            if (null !== \$authorizationHeader) {
                if (0 === stripos(\$authorizationHeader, 'basic ')) {
                    // Decode AUTHORIZATION header into PHP_AUTH_USER and PHP_AUTH_PW when authorization header is basic
                    \$exploded = explode(':', base64_decode(substr(\$authorizationHeader, 6)), 2);
                    if (2 == \\count(\$exploded)) {
                        list(\$headers['PHP_AUTH_USER'], \$headers['PHP_AUTH_PW']) = \$exploded;
                    }
                } elseif (empty(\$this->parameters['PHP_AUTH_DIGEST']) && (0 === stripos(\$authorizationHeader, 'digest '))) {
                    // In some circumstances PHP_AUTH_DIGEST needs to be set
                    \$headers['PHP_AUTH_DIGEST'] = \$authorizationHeader;
                    \$this->parameters['PHP_AUTH_DIGEST'] = \$authorizationHeader;
                } elseif (0 === stripos(\$authorizationHeader, 'bearer ')) {
                    /*
                     * XXX: Since there is no PHP_AUTH_BEARER in PHP predefined variables,
                     *      I'll just set \$headers['AUTHORIZATION'] here.
                     *      https://php.net/reserved.variables.server
                     */
                    \$headers['AUTHORIZATION'] = \$authorizationHeader;
                }
            }
        }

        if (isset(\$headers['AUTHORIZATION'])) {
            return \$headers;
        }

        // PHP_AUTH_USER/PHP_AUTH_PW
        if (isset(\$headers['PHP_AUTH_USER'])) {
            \$headers['AUTHORIZATION'] = 'Basic '.base64_encode(\$headers['PHP_AUTH_USER'].':'.\$headers['PHP_AUTH_PW']);
        } elseif (isset(\$headers['PHP_AUTH_DIGEST'])) {
            \$headers['AUTHORIZATION'] = \$headers['PHP_AUTH_DIGEST'];
        }

        return \$headers;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/ServerBag.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\HttpFoundation;

/**
 * ServerBag is a container for HTTP headers from the \$_SERVER variable.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Bulat Shakirzyanov <mallluhuct@gmail.com>
 * @author Robert Kiss <kepten@gmail.com>
 */
class ServerBag extends ParameterBag
{
    /**
     * Gets the HTTP headers.
     *
     * @return array
     */
    public function getHeaders()
    {
        \$headers = [];
        \$contentHeaders = ['CONTENT_LENGTH' => true, 'CONTENT_MD5' => true, 'CONTENT_TYPE' => true];
        foreach (\$this->parameters as \$key => \$value) {
            if (0 === strpos(\$key, 'HTTP_')) {
                \$headers[substr(\$key, 5)] = \$value;
            }
            // CONTENT_* are not prefixed with HTTP_
            elseif (isset(\$contentHeaders[\$key])) {
                \$headers[\$key] = \$value;
            }
        }

        if (isset(\$this->parameters['PHP_AUTH_USER'])) {
            \$headers['PHP_AUTH_USER'] = \$this->parameters['PHP_AUTH_USER'];
            \$headers['PHP_AUTH_PW'] = isset(\$this->parameters['PHP_AUTH_PW']) ? \$this->parameters['PHP_AUTH_PW'] : '';
        } else {
            /*
             * php-cgi under Apache does not pass HTTP Basic user/pass to PHP by default
             * For this workaround to work, add these lines to your .htaccess file:
             * RewriteCond %{HTTP:Authorization} ^(.+)\$
             * RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]
             *
             * A sample .htaccess file:
             * RewriteEngine On
             * RewriteCond %{HTTP:Authorization} ^(.+)\$
             * RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]
             * RewriteCond %{REQUEST_FILENAME} !-f
             * RewriteRule ^(.*)\$ app.php [QSA,L]
             */

            \$authorizationHeader = null;
            if (isset(\$this->parameters['HTTP_AUTHORIZATION'])) {
                \$authorizationHeader = \$this->parameters['HTTP_AUTHORIZATION'];
            } elseif (isset(\$this->parameters['REDIRECT_HTTP_AUTHORIZATION'])) {
                \$authorizationHeader = \$this->parameters['REDIRECT_HTTP_AUTHORIZATION'];
            }

            if (null !== \$authorizationHeader) {
                if (0 === stripos(\$authorizationHeader, 'basic ')) {
                    // Decode AUTHORIZATION header into PHP_AUTH_USER and PHP_AUTH_PW when authorization header is basic
                    \$exploded = explode(':', base64_decode(substr(\$authorizationHeader, 6)), 2);
                    if (2 == \\count(\$exploded)) {
                        list(\$headers['PHP_AUTH_USER'], \$headers['PHP_AUTH_PW']) = \$exploded;
                    }
                } elseif (empty(\$this->parameters['PHP_AUTH_DIGEST']) && (0 === stripos(\$authorizationHeader, 'digest '))) {
                    // In some circumstances PHP_AUTH_DIGEST needs to be set
                    \$headers['PHP_AUTH_DIGEST'] = \$authorizationHeader;
                    \$this->parameters['PHP_AUTH_DIGEST'] = \$authorizationHeader;
                } elseif (0 === stripos(\$authorizationHeader, 'bearer ')) {
                    /*
                     * XXX: Since there is no PHP_AUTH_BEARER in PHP predefined variables,
                     *      I'll just set \$headers['AUTHORIZATION'] here.
                     *      https://php.net/reserved.variables.server
                     */
                    \$headers['AUTHORIZATION'] = \$authorizationHeader;
                }
            }
        }

        if (isset(\$headers['AUTHORIZATION'])) {
            return \$headers;
        }

        // PHP_AUTH_USER/PHP_AUTH_PW
        if (isset(\$headers['PHP_AUTH_USER'])) {
            \$headers['AUTHORIZATION'] = 'Basic '.base64_encode(\$headers['PHP_AUTH_USER'].':'.\$headers['PHP_AUTH_PW']);
        } elseif (isset(\$headers['PHP_AUTH_DIGEST'])) {
            \$headers['AUTHORIZATION'] = \$headers['PHP_AUTH_DIGEST'];
        }

        return \$headers;
    }
}
", "vendor/symfony/http-foundation/ServerBag.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/ServerBag.php");
    }
}
