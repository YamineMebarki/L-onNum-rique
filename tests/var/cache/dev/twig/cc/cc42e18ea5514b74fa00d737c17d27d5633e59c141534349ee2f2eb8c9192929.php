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

/* vendor/symfony/http-client/Exception/HttpExceptionTrait.php */
class __TwigTemplate_cf9a383033b34facbffde737b8272f73c9df9db69bcd9b2b47e43617308673a6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-client/Exception/HttpExceptionTrait.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-client/Exception/HttpExceptionTrait.php"));

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

namespace Symfony\\Component\\HttpClient\\Exception;

use Symfony\\Contracts\\HttpClient\\ResponseInterface;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
trait HttpExceptionTrait
{
    private \$response;

    public function __construct(ResponseInterface \$response)
    {
        \$this->response = \$response;
        \$code = \$response->getInfo('http_code');
        \$url = \$response->getInfo('url');
        \$message = sprintf('HTTP %d returned for \"%s\".', \$code, \$url);

        \$httpCodeFound = false;
        \$isJson = false;
        foreach (array_reverse(\$response->getInfo('response_headers')) as \$h) {
            if (0 === strpos(\$h, 'HTTP/')) {
                if (\$httpCodeFound) {
                    break;
                }

                \$message = sprintf('%s returned for \"%s\".', \$h, \$url);
                \$httpCodeFound = true;
            }

            if (0 === stripos(\$h, 'content-type:')) {
                if (preg_match('/\\bjson\\b/i', \$h)) {
                    \$isJson = true;
                }

                if (\$httpCodeFound) {
                    break;
                }
            }
        }

        // Try to guess a better error message using common API error formats
        // The MIME type isn't explicitly checked because some formats inherit from others
        // Ex: JSON:API follows RFC 7807 semantics, Hydra can be used in any JSON-LD-compatible format
        if (\$isJson && \$body = json_decode(\$response->getContent(false), true)) {
            if (isset(\$body['hydra:title']) || isset(\$body['hydra:description'])) {
                // see http://www.hydra-cg.com/spec/latest/core/#description-of-http-status-codes-and-errors
                \$separator = isset(\$body['hydra:title'], \$body['hydra:description']) ? \"\\n\\n\" : '';
                \$message = (\$body['hydra:title'] ?? '').\$separator.(\$body['hydra:description'] ?? '');
            } elseif (isset(\$body['title']) || isset(\$body['detail'])) {
                // see RFC 7807 and https://jsonapi.org/format/#error-objects
                \$separator = isset(\$body['title'], \$body['detail']) ? \"\\n\\n\" : '';
                \$message = (\$body['title'] ?? '').\$separator.(\$body['detail'] ?? '');
            }
        }

        parent::__construct(\$message, \$code);
    }

    public function getResponse(): ResponseInterface
    {
        return \$this->response;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-client/Exception/HttpExceptionTrait.php";
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

namespace Symfony\\Component\\HttpClient\\Exception;

use Symfony\\Contracts\\HttpClient\\ResponseInterface;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
trait HttpExceptionTrait
{
    private \$response;

    public function __construct(ResponseInterface \$response)
    {
        \$this->response = \$response;
        \$code = \$response->getInfo('http_code');
        \$url = \$response->getInfo('url');
        \$message = sprintf('HTTP %d returned for \"%s\".', \$code, \$url);

        \$httpCodeFound = false;
        \$isJson = false;
        foreach (array_reverse(\$response->getInfo('response_headers')) as \$h) {
            if (0 === strpos(\$h, 'HTTP/')) {
                if (\$httpCodeFound) {
                    break;
                }

                \$message = sprintf('%s returned for \"%s\".', \$h, \$url);
                \$httpCodeFound = true;
            }

            if (0 === stripos(\$h, 'content-type:')) {
                if (preg_match('/\\bjson\\b/i', \$h)) {
                    \$isJson = true;
                }

                if (\$httpCodeFound) {
                    break;
                }
            }
        }

        // Try to guess a better error message using common API error formats
        // The MIME type isn't explicitly checked because some formats inherit from others
        // Ex: JSON:API follows RFC 7807 semantics, Hydra can be used in any JSON-LD-compatible format
        if (\$isJson && \$body = json_decode(\$response->getContent(false), true)) {
            if (isset(\$body['hydra:title']) || isset(\$body['hydra:description'])) {
                // see http://www.hydra-cg.com/spec/latest/core/#description-of-http-status-codes-and-errors
                \$separator = isset(\$body['hydra:title'], \$body['hydra:description']) ? \"\\n\\n\" : '';
                \$message = (\$body['hydra:title'] ?? '').\$separator.(\$body['hydra:description'] ?? '');
            } elseif (isset(\$body['title']) || isset(\$body['detail'])) {
                // see RFC 7807 and https://jsonapi.org/format/#error-objects
                \$separator = isset(\$body['title'], \$body['detail']) ? \"\\n\\n\" : '';
                \$message = (\$body['title'] ?? '').\$separator.(\$body['detail'] ?? '');
            }
        }

        parent::__construct(\$message, \$code);
    }

    public function getResponse(): ResponseInterface
    {
        return \$this->response;
    }
}
", "vendor/symfony/http-client/Exception/HttpExceptionTrait.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-client/Exception/HttpExceptionTrait.php");
    }
}
