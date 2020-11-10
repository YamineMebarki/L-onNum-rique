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

/* vendor/symfony/http-client/Psr18Client.php */
class __TwigTemplate_b68f1719a5a9380eb1ba958f44c554c8016fbf89516f7a0bdb2ca89abfbb7288 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-client/Psr18Client.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-client/Psr18Client.php"));

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

namespace Symfony\\Component\\HttpClient;

use Nyholm\\Psr7\\Factory\\Psr17Factory;
use Psr\\Http\\Client\\ClientInterface;
use Psr\\Http\\Client\\NetworkExceptionInterface;
use Psr\\Http\\Client\\RequestExceptionInterface;
use Psr\\Http\\Message\\RequestInterface;
use Psr\\Http\\Message\\ResponseFactoryInterface;
use Psr\\Http\\Message\\ResponseInterface;
use Psr\\Http\\Message\\StreamFactoryInterface;
use Symfony\\Contracts\\HttpClient\\Exception\\TransportExceptionInterface;
use Symfony\\Contracts\\HttpClient\\HttpClientInterface;

if (!interface_exists(ClientInterface::class)) {
    throw new \\LogicException('You cannot use the \"Symfony\\Component\\HttpClient\\Psr18Client\" as the \"psr/http-client\" package is not installed. Try running \"composer require psr/http-client\".');
}

/**
 * An adapter to turn a Symfony HttpClientInterface into a PSR-18 ClientInterface.
 *
 * Run \"composer require psr/http-client\" to install the base ClientInterface. Run
 * \"composer require nyholm/psr7\" to install an efficient implementation of response
 * and stream factories with flex-provided autowiring aliases.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @experimental in 4.3
 */
final class Psr18Client implements ClientInterface
{
    private \$client;
    private \$responseFactory;
    private \$streamFactory;

    public function __construct(HttpClientInterface \$client = null, ResponseFactoryInterface \$responseFactory = null, StreamFactoryInterface \$streamFactory = null)
    {
        \$this->client = \$client ?? HttpClient::create();
        \$this->responseFactory = \$responseFactory;
        \$this->streamFactory = \$streamFactory ?? (\$responseFactory instanceof StreamFactoryInterface ? \$responseFactory : null);

        if (null !== \$this->responseFactory && null !== \$this->streamFactory) {
            return;
        }

        if (!class_exists(Psr17Factory::class)) {
            throw new \\LogicException('You cannot use the \"Symfony\\Component\\HttpClient\\Psr18Client\" as no PSR-17 factories have been provided. Try running \"composer require nyholm/psr7\".');
        }

        \$psr17Factory = new Psr17Factory();
        \$this->responseFactory = \$this->responseFactory ?? \$psr17Factory;
        \$this->streamFactory = \$this->streamFactory ?? \$psr17Factory;
    }

    public function sendRequest(RequestInterface \$request): ResponseInterface
    {
        try {
            \$body = \$request->getBody();

            if (\$body->isSeekable()) {
                \$body->seek(0);
            }

            \$response = \$this->client->request(\$request->getMethod(), (string) \$request->getUri(), [
                'headers' => \$request->getHeaders(),
                'body' => \$body->getContents(),
                'http_version' => '1.0' === \$request->getProtocolVersion() ? '1.0' : null,
            ]);

            \$psrResponse = \$this->responseFactory->createResponse(\$response->getStatusCode());

            foreach (\$response->getHeaders(false) as \$name => \$values) {
                foreach (\$values as \$value) {
                    \$psrResponse = \$psrResponse->withAddedHeader(\$name, \$value);
                }
            }

            \$body = \$this->streamFactory->createStream(\$response->getContent(false));

            if (\$body->isSeekable()) {
                \$body->seek(0);
            }

            return \$psrResponse->withBody(\$body);
        } catch (TransportExceptionInterface \$e) {
            if (\$e instanceof \\InvalidArgumentException) {
                throw new Psr18RequestException(\$e, \$request);
            }

            throw new Psr18NetworkException(\$e, \$request);
        }
    }
}

/**
 * @internal
 */
trait Psr18ExceptionTrait
{
    private \$request;

    public function __construct(TransportExceptionInterface \$e, RequestInterface \$request)
    {
        parent::__construct(\$e->getMessage(), 0, \$e);
        \$this->request = \$request;
    }

    public function getRequest(): RequestInterface
    {
        return \$this->request;
    }
}

/**
 * @internal
 */
class Psr18NetworkException extends \\RuntimeException implements NetworkExceptionInterface
{
    use Psr18ExceptionTrait;
}

/**
 * @internal
 */
class Psr18RequestException extends \\InvalidArgumentException implements RequestExceptionInterface
{
    use Psr18ExceptionTrait;
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-client/Psr18Client.php";
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

namespace Symfony\\Component\\HttpClient;

use Nyholm\\Psr7\\Factory\\Psr17Factory;
use Psr\\Http\\Client\\ClientInterface;
use Psr\\Http\\Client\\NetworkExceptionInterface;
use Psr\\Http\\Client\\RequestExceptionInterface;
use Psr\\Http\\Message\\RequestInterface;
use Psr\\Http\\Message\\ResponseFactoryInterface;
use Psr\\Http\\Message\\ResponseInterface;
use Psr\\Http\\Message\\StreamFactoryInterface;
use Symfony\\Contracts\\HttpClient\\Exception\\TransportExceptionInterface;
use Symfony\\Contracts\\HttpClient\\HttpClientInterface;

if (!interface_exists(ClientInterface::class)) {
    throw new \\LogicException('You cannot use the \"Symfony\\Component\\HttpClient\\Psr18Client\" as the \"psr/http-client\" package is not installed. Try running \"composer require psr/http-client\".');
}

/**
 * An adapter to turn a Symfony HttpClientInterface into a PSR-18 ClientInterface.
 *
 * Run \"composer require psr/http-client\" to install the base ClientInterface. Run
 * \"composer require nyholm/psr7\" to install an efficient implementation of response
 * and stream factories with flex-provided autowiring aliases.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @experimental in 4.3
 */
final class Psr18Client implements ClientInterface
{
    private \$client;
    private \$responseFactory;
    private \$streamFactory;

    public function __construct(HttpClientInterface \$client = null, ResponseFactoryInterface \$responseFactory = null, StreamFactoryInterface \$streamFactory = null)
    {
        \$this->client = \$client ?? HttpClient::create();
        \$this->responseFactory = \$responseFactory;
        \$this->streamFactory = \$streamFactory ?? (\$responseFactory instanceof StreamFactoryInterface ? \$responseFactory : null);

        if (null !== \$this->responseFactory && null !== \$this->streamFactory) {
            return;
        }

        if (!class_exists(Psr17Factory::class)) {
            throw new \\LogicException('You cannot use the \"Symfony\\Component\\HttpClient\\Psr18Client\" as no PSR-17 factories have been provided. Try running \"composer require nyholm/psr7\".');
        }

        \$psr17Factory = new Psr17Factory();
        \$this->responseFactory = \$this->responseFactory ?? \$psr17Factory;
        \$this->streamFactory = \$this->streamFactory ?? \$psr17Factory;
    }

    public function sendRequest(RequestInterface \$request): ResponseInterface
    {
        try {
            \$body = \$request->getBody();

            if (\$body->isSeekable()) {
                \$body->seek(0);
            }

            \$response = \$this->client->request(\$request->getMethod(), (string) \$request->getUri(), [
                'headers' => \$request->getHeaders(),
                'body' => \$body->getContents(),
                'http_version' => '1.0' === \$request->getProtocolVersion() ? '1.0' : null,
            ]);

            \$psrResponse = \$this->responseFactory->createResponse(\$response->getStatusCode());

            foreach (\$response->getHeaders(false) as \$name => \$values) {
                foreach (\$values as \$value) {
                    \$psrResponse = \$psrResponse->withAddedHeader(\$name, \$value);
                }
            }

            \$body = \$this->streamFactory->createStream(\$response->getContent(false));

            if (\$body->isSeekable()) {
                \$body->seek(0);
            }

            return \$psrResponse->withBody(\$body);
        } catch (TransportExceptionInterface \$e) {
            if (\$e instanceof \\InvalidArgumentException) {
                throw new Psr18RequestException(\$e, \$request);
            }

            throw new Psr18NetworkException(\$e, \$request);
        }
    }
}

/**
 * @internal
 */
trait Psr18ExceptionTrait
{
    private \$request;

    public function __construct(TransportExceptionInterface \$e, RequestInterface \$request)
    {
        parent::__construct(\$e->getMessage(), 0, \$e);
        \$this->request = \$request;
    }

    public function getRequest(): RequestInterface
    {
        return \$this->request;
    }
}

/**
 * @internal
 */
class Psr18NetworkException extends \\RuntimeException implements NetworkExceptionInterface
{
    use Psr18ExceptionTrait;
}

/**
 * @internal
 */
class Psr18RequestException extends \\InvalidArgumentException implements RequestExceptionInterface
{
    use Psr18ExceptionTrait;
}
", "vendor/symfony/http-client/Psr18Client.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-client/Psr18Client.php");
    }
}
