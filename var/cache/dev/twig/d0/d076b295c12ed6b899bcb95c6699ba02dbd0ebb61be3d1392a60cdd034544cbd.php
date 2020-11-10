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

/* vendor/symfony/http-client/MockHttpClient.php */
class __TwigTemplate_c9945edaa570383385880f3254fbdf8e6af3eeb1cdf1fde1aff169bca425f00c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-client/MockHttpClient.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-client/MockHttpClient.php"));

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

use Symfony\\Component\\HttpClient\\Exception\\TransportException;
use Symfony\\Component\\HttpClient\\Response\\MockResponse;
use Symfony\\Component\\HttpClient\\Response\\ResponseStream;
use Symfony\\Contracts\\HttpClient\\HttpClientInterface;
use Symfony\\Contracts\\HttpClient\\ResponseInterface;
use Symfony\\Contracts\\HttpClient\\ResponseStreamInterface;

/**
 * A test-friendly HttpClient that doesn't make actual HTTP requests.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class MockHttpClient implements HttpClientInterface
{
    use HttpClientTrait;

    private \$responseFactory;
    private \$baseUri;

    /**
     * @param callable|ResponseInterface|ResponseInterface[]|iterable|null \$responseFactory
     */
    public function __construct(\$responseFactory = null, string \$baseUri = null)
    {
        if (\$responseFactory instanceof ResponseInterface) {
            \$responseFactory = [\$responseFactory];
        }

        if (!\$responseFactory instanceof \\Iterator && null !== \$responseFactory && !\\is_callable(\$responseFactory)) {
            \$responseFactory = (static function () use (\$responseFactory) {
                yield from \$responseFactory;
            })();
        }

        \$this->responseFactory = \$responseFactory;
        \$this->baseUri = \$baseUri;
    }

    /**
     * {@inheritdoc}
     */
    public function request(string \$method, string \$url, array \$options = []): ResponseInterface
    {
        [\$url, \$options] = \$this->prepareRequest(\$method, \$url, \$options, ['base_uri' => \$this->baseUri], true);
        \$url = implode('', \$url);

        if (null === \$this->responseFactory) {
            \$response = new MockResponse();
        } elseif (\\is_callable(\$this->responseFactory)) {
            \$response = (\$this->responseFactory)(\$method, \$url, \$options);
        } elseif (!\$this->responseFactory->valid()) {
            throw new TransportException('The response factory iterator passed to MockHttpClient is empty.');
        } else {
            \$response = \$this->responseFactory->current();
            \$this->responseFactory->next();
        }

        return MockResponse::fromRequest(\$method, \$url, \$options, \$response);
    }

    /**
     * {@inheritdoc}
     */
    public function stream(\$responses, float \$timeout = null): ResponseStreamInterface
    {
        if (\$responses instanceof ResponseInterface) {
            \$responses = [\$responses];
        } elseif (!is_iterable(\$responses)) {
            throw new \\TypeError(sprintf('%s() expects parameter 1 to be an iterable of MockResponse objects, %s given.', __METHOD__, \\is_object(\$responses) ? \\get_class(\$responses) : \\gettype(\$responses)));
        }

        return new ResponseStream(MockResponse::stream(\$responses, \$timeout));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-client/MockHttpClient.php";
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

use Symfony\\Component\\HttpClient\\Exception\\TransportException;
use Symfony\\Component\\HttpClient\\Response\\MockResponse;
use Symfony\\Component\\HttpClient\\Response\\ResponseStream;
use Symfony\\Contracts\\HttpClient\\HttpClientInterface;
use Symfony\\Contracts\\HttpClient\\ResponseInterface;
use Symfony\\Contracts\\HttpClient\\ResponseStreamInterface;

/**
 * A test-friendly HttpClient that doesn't make actual HTTP requests.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class MockHttpClient implements HttpClientInterface
{
    use HttpClientTrait;

    private \$responseFactory;
    private \$baseUri;

    /**
     * @param callable|ResponseInterface|ResponseInterface[]|iterable|null \$responseFactory
     */
    public function __construct(\$responseFactory = null, string \$baseUri = null)
    {
        if (\$responseFactory instanceof ResponseInterface) {
            \$responseFactory = [\$responseFactory];
        }

        if (!\$responseFactory instanceof \\Iterator && null !== \$responseFactory && !\\is_callable(\$responseFactory)) {
            \$responseFactory = (static function () use (\$responseFactory) {
                yield from \$responseFactory;
            })();
        }

        \$this->responseFactory = \$responseFactory;
        \$this->baseUri = \$baseUri;
    }

    /**
     * {@inheritdoc}
     */
    public function request(string \$method, string \$url, array \$options = []): ResponseInterface
    {
        [\$url, \$options] = \$this->prepareRequest(\$method, \$url, \$options, ['base_uri' => \$this->baseUri], true);
        \$url = implode('', \$url);

        if (null === \$this->responseFactory) {
            \$response = new MockResponse();
        } elseif (\\is_callable(\$this->responseFactory)) {
            \$response = (\$this->responseFactory)(\$method, \$url, \$options);
        } elseif (!\$this->responseFactory->valid()) {
            throw new TransportException('The response factory iterator passed to MockHttpClient is empty.');
        } else {
            \$response = \$this->responseFactory->current();
            \$this->responseFactory->next();
        }

        return MockResponse::fromRequest(\$method, \$url, \$options, \$response);
    }

    /**
     * {@inheritdoc}
     */
    public function stream(\$responses, float \$timeout = null): ResponseStreamInterface
    {
        if (\$responses instanceof ResponseInterface) {
            \$responses = [\$responses];
        } elseif (!is_iterable(\$responses)) {
            throw new \\TypeError(sprintf('%s() expects parameter 1 to be an iterable of MockResponse objects, %s given.', __METHOD__, \\is_object(\$responses) ? \\get_class(\$responses) : \\gettype(\$responses)));
        }

        return new ResponseStream(MockResponse::stream(\$responses, \$timeout));
    }
}
", "vendor/symfony/http-client/MockHttpClient.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-client/MockHttpClient.php");
    }
}
