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

/* vendor/symfony/http-kernel/HttpClientKernel.php */
class __TwigTemplate_e7e5d4589a7dd939e6f66a120282bc118190d5e05aab5eb6373a911a58335840 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/HttpClientKernel.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/HttpClientKernel.php"));

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

namespace Symfony\\Component\\HttpKernel;

use Symfony\\Component\\HttpClient\\HttpClient;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpFoundation\\ResponseHeaderBag;
use Symfony\\Component\\Mime\\Part\\AbstractPart;
use Symfony\\Component\\Mime\\Part\\DataPart;
use Symfony\\Component\\Mime\\Part\\Multipart\\FormDataPart;
use Symfony\\Component\\Mime\\Part\\TextPart;
use Symfony\\Contracts\\HttpClient\\HttpClientInterface;

/**
 * An implementation of a Symfony HTTP kernel using a \"real\" HTTP client.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class HttpClientKernel implements HttpKernelInterface
{
    private \$client;

    public function __construct(HttpClientInterface \$client = null)
    {
        if (!class_exists(HttpClient::class)) {
            throw new \\LogicException(sprintf('You cannot use \"%s\" as the HttpClient component is not installed. Try running \"composer require symfony/http-client\".', __CLASS__));
        }

        \$this->client = \$client ?? HttpClient::create();
    }

    public function handle(Request \$request, \$type = HttpKernelInterface::MASTER_REQUEST, \$catch = true)
    {
        \$headers = \$this->getHeaders(\$request);
        \$body = '';
        if (null !== \$part = \$this->getBody(\$request)) {
            \$headers = array_merge(\$headers, \$part->getPreparedHeaders()->toArray());
            \$body = \$part->bodyToIterable();
        }
        \$response = \$this->client->request(\$request->getMethod(), \$request->getUri(), [
            'headers' => \$headers,
            'body' => \$body,
            'max_redirects' => 0,
        ] + \$request->attributes->get('http_client_options', []));

        \$response = new Response(\$response->getContent(!\$catch), \$response->getStatusCode(), \$response->getHeaders(!\$catch));

        \$response->headers = new class(\$response->headers->all()) extends ResponseHeaderBag {
            protected function computeCacheControlValue()
            {
                return \$this->getCacheControlHeader(); // preserve the original value
            }
        };

        return \$response;
    }

    private function getBody(Request \$request): ?AbstractPart
    {
        if (\\in_array(\$request->getMethod(), ['GET', 'HEAD'])) {
            return null;
        }

        if (!class_exists(AbstractPart::class)) {
            throw new \\LogicException('You cannot pass non-empty bodies as the Mime component is not installed. Try running \"composer require symfony/mime\".');
        }

        if (\$content = \$request->getContent()) {
            return new TextPart(\$content, 'utf-8', 'plain', '8bit');
        }

        \$fields = \$request->request->all();
        foreach (\$request->files->all() as \$name => \$file) {
            \$fields[\$name] = DataPart::fromPath(\$file->getPathname(), \$file->getClientOriginalName(), \$file->getClientMimeType());
        }

        return new FormDataPart(\$fields);
    }

    private function getHeaders(Request \$request): array
    {
        \$headers = [];
        foreach (\$request->headers as \$key => \$value) {
            \$headers[\$key] = \$value;
        }
        \$cookies = [];
        foreach (\$request->cookies->all() as \$name => \$value) {
            \$cookies[] = \$name.'='.\$value;
        }
        if (\$cookies) {
            \$headers['cookie'] = implode('; ', \$cookies);
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
        return "vendor/symfony/http-kernel/HttpClientKernel.php";
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

namespace Symfony\\Component\\HttpKernel;

use Symfony\\Component\\HttpClient\\HttpClient;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpFoundation\\ResponseHeaderBag;
use Symfony\\Component\\Mime\\Part\\AbstractPart;
use Symfony\\Component\\Mime\\Part\\DataPart;
use Symfony\\Component\\Mime\\Part\\Multipart\\FormDataPart;
use Symfony\\Component\\Mime\\Part\\TextPart;
use Symfony\\Contracts\\HttpClient\\HttpClientInterface;

/**
 * An implementation of a Symfony HTTP kernel using a \"real\" HTTP client.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class HttpClientKernel implements HttpKernelInterface
{
    private \$client;

    public function __construct(HttpClientInterface \$client = null)
    {
        if (!class_exists(HttpClient::class)) {
            throw new \\LogicException(sprintf('You cannot use \"%s\" as the HttpClient component is not installed. Try running \"composer require symfony/http-client\".', __CLASS__));
        }

        \$this->client = \$client ?? HttpClient::create();
    }

    public function handle(Request \$request, \$type = HttpKernelInterface::MASTER_REQUEST, \$catch = true)
    {
        \$headers = \$this->getHeaders(\$request);
        \$body = '';
        if (null !== \$part = \$this->getBody(\$request)) {
            \$headers = array_merge(\$headers, \$part->getPreparedHeaders()->toArray());
            \$body = \$part->bodyToIterable();
        }
        \$response = \$this->client->request(\$request->getMethod(), \$request->getUri(), [
            'headers' => \$headers,
            'body' => \$body,
            'max_redirects' => 0,
        ] + \$request->attributes->get('http_client_options', []));

        \$response = new Response(\$response->getContent(!\$catch), \$response->getStatusCode(), \$response->getHeaders(!\$catch));

        \$response->headers = new class(\$response->headers->all()) extends ResponseHeaderBag {
            protected function computeCacheControlValue()
            {
                return \$this->getCacheControlHeader(); // preserve the original value
            }
        };

        return \$response;
    }

    private function getBody(Request \$request): ?AbstractPart
    {
        if (\\in_array(\$request->getMethod(), ['GET', 'HEAD'])) {
            return null;
        }

        if (!class_exists(AbstractPart::class)) {
            throw new \\LogicException('You cannot pass non-empty bodies as the Mime component is not installed. Try running \"composer require symfony/mime\".');
        }

        if (\$content = \$request->getContent()) {
            return new TextPart(\$content, 'utf-8', 'plain', '8bit');
        }

        \$fields = \$request->request->all();
        foreach (\$request->files->all() as \$name => \$file) {
            \$fields[\$name] = DataPart::fromPath(\$file->getPathname(), \$file->getClientOriginalName(), \$file->getClientMimeType());
        }

        return new FormDataPart(\$fields);
    }

    private function getHeaders(Request \$request): array
    {
        \$headers = [];
        foreach (\$request->headers as \$key => \$value) {
            \$headers[\$key] = \$value;
        }
        \$cookies = [];
        foreach (\$request->cookies->all() as \$name => \$value) {
            \$cookies[] = \$name.'='.\$value;
        }
        if (\$cookies) {
            \$headers['cookie'] = implode('; ', \$cookies);
        }

        return \$headers;
    }
}
", "vendor/symfony/http-kernel/HttpClientKernel.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/HttpClientKernel.php");
    }
}
