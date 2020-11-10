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

/* vendor/symfony/http-client/CachingHttpClient.php */
class __TwigTemplate_1bc320a6e00ee1a0ba9b5bf13854cfa82994a69481e2e692ee8dbff18c710d80 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-client/CachingHttpClient.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-client/CachingHttpClient.php"));

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

use Symfony\\Component\\HttpClient\\Response\\MockResponse;
use Symfony\\Component\\HttpClient\\Response\\ResponseStream;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\HttpCache\\HttpCache;
use Symfony\\Component\\HttpKernel\\HttpCache\\StoreInterface;
use Symfony\\Component\\HttpKernel\\HttpClientKernel;
use Symfony\\Contracts\\HttpClient\\HttpClientInterface;
use Symfony\\Contracts\\HttpClient\\ResponseInterface;
use Symfony\\Contracts\\HttpClient\\ResponseStreamInterface;

/**
 * Adds caching on top of an HTTP client.
 *
 * The implementation buffers responses in memory and doesn't stream directly from the network.
 * You can disable/enable this layer by setting option \"no_cache\" under \"extra\" to true/false.
 * By default, caching is enabled unless the \"buffer\" option is set to false.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class CachingHttpClient implements HttpClientInterface
{
    use HttpClientTrait;

    private \$client;
    private \$cache;
    private \$defaultOptions = self::OPTIONS_DEFAULTS;

    public function __construct(HttpClientInterface \$client, StoreInterface \$store, array \$defaultOptions = [])
    {
        if (!class_exists(HttpClientKernel::class)) {
            throw new \\LogicException(sprintf('Using \"%s\" requires that the HttpKernel component version 4.3 or higher is installed, try running \"composer require symfony/http-kernel:^4.3\".', __CLASS__));
        }

        \$this->client = \$client;
        \$kernel = new HttpClientKernel(\$client);
        \$this->cache = new HttpCache(\$kernel, \$store, null, \$defaultOptions);

        unset(\$defaultOptions['debug']);
        unset(\$defaultOptions['default_ttl']);
        unset(\$defaultOptions['private_headers']);
        unset(\$defaultOptions['allow_reload']);
        unset(\$defaultOptions['allow_revalidate']);
        unset(\$defaultOptions['stale_while_revalidate']);
        unset(\$defaultOptions['stale_if_error']);

        if (\$defaultOptions) {
            [, \$this->defaultOptions] = self::prepareRequest(null, null, \$defaultOptions, \$this->defaultOptions);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function request(string \$method, string \$url, array \$options = []): ResponseInterface
    {
        [\$url, \$options] = \$this->prepareRequest(\$method, \$url, \$options, \$this->defaultOptions, true);
        \$url = implode('', \$url);
        \$options['extra']['no_cache'] = \$options['extra']['no_cache'] ?? !\$options['buffer'];

        if (!empty(\$options['body']) || \$options['extra']['no_cache'] || !\\in_array(\$method, ['GET', 'HEAD', 'OPTIONS'])) {
            return \$this->client->request(\$method, \$url, \$options);
        }

        \$request = Request::create(\$url, \$method);
        \$request->attributes->set('http_client_options', \$options);

        foreach (\$options['normalized_headers'] as \$name => \$values) {
            if ('cookie' !== \$name) {
                foreach (\$values as \$value) {
                    \$request->headers->set(\$name, substr(\$value, 2 + \\strlen(\$name)), false);
                }

                continue;
            }

            foreach (\$values as \$cookies) {
                foreach (explode('; ', substr(\$cookies, \\strlen('Cookie: '))) as \$cookie) {
                    if ('' !== \$cookie) {
                        \$cookie = explode('=', \$cookie, 2);
                        \$request->cookies->set(\$cookie[0], \$cookie[1] ?? '');
                    }
                }
            }
        }

        \$response = \$this->cache->handle(\$request);
        \$response = new MockResponse(\$response->getContent(), [
            'http_code' => \$response->getStatusCode(),
            'response_headers' => \$response->headers->allPreserveCase(),
        ]);

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
            throw new \\TypeError(sprintf('%s() expects parameter 1 to be an iterable of ResponseInterface objects, %s given.', __METHOD__, \\is_object(\$responses) ? \\get_class(\$responses) : \\gettype(\$responses)));
        }

        \$mockResponses = [];
        \$clientResponses = [];

        foreach (\$responses as \$response) {
            if (\$response instanceof MockResponse) {
                \$mockResponses[] = \$response;
            } else {
                \$clientResponses[] = \$response;
            }
        }

        if (!\$mockResponses) {
            return \$this->client->stream(\$clientResponses, \$timeout);
        }

        if (!\$clientResponses) {
            return new ResponseStream(MockResponse::stream(\$mockResponses, \$timeout));
        }

        return new ResponseStream((function () use (\$mockResponses, \$clientResponses, \$timeout) {
            yield from MockResponse::stream(\$mockResponses, \$timeout);
            yield \$this->client->stream(\$clientResponses, \$timeout);
        })());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-client/CachingHttpClient.php";
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

use Symfony\\Component\\HttpClient\\Response\\MockResponse;
use Symfony\\Component\\HttpClient\\Response\\ResponseStream;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\HttpCache\\HttpCache;
use Symfony\\Component\\HttpKernel\\HttpCache\\StoreInterface;
use Symfony\\Component\\HttpKernel\\HttpClientKernel;
use Symfony\\Contracts\\HttpClient\\HttpClientInterface;
use Symfony\\Contracts\\HttpClient\\ResponseInterface;
use Symfony\\Contracts\\HttpClient\\ResponseStreamInterface;

/**
 * Adds caching on top of an HTTP client.
 *
 * The implementation buffers responses in memory and doesn't stream directly from the network.
 * You can disable/enable this layer by setting option \"no_cache\" under \"extra\" to true/false.
 * By default, caching is enabled unless the \"buffer\" option is set to false.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class CachingHttpClient implements HttpClientInterface
{
    use HttpClientTrait;

    private \$client;
    private \$cache;
    private \$defaultOptions = self::OPTIONS_DEFAULTS;

    public function __construct(HttpClientInterface \$client, StoreInterface \$store, array \$defaultOptions = [])
    {
        if (!class_exists(HttpClientKernel::class)) {
            throw new \\LogicException(sprintf('Using \"%s\" requires that the HttpKernel component version 4.3 or higher is installed, try running \"composer require symfony/http-kernel:^4.3\".', __CLASS__));
        }

        \$this->client = \$client;
        \$kernel = new HttpClientKernel(\$client);
        \$this->cache = new HttpCache(\$kernel, \$store, null, \$defaultOptions);

        unset(\$defaultOptions['debug']);
        unset(\$defaultOptions['default_ttl']);
        unset(\$defaultOptions['private_headers']);
        unset(\$defaultOptions['allow_reload']);
        unset(\$defaultOptions['allow_revalidate']);
        unset(\$defaultOptions['stale_while_revalidate']);
        unset(\$defaultOptions['stale_if_error']);

        if (\$defaultOptions) {
            [, \$this->defaultOptions] = self::prepareRequest(null, null, \$defaultOptions, \$this->defaultOptions);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function request(string \$method, string \$url, array \$options = []): ResponseInterface
    {
        [\$url, \$options] = \$this->prepareRequest(\$method, \$url, \$options, \$this->defaultOptions, true);
        \$url = implode('', \$url);
        \$options['extra']['no_cache'] = \$options['extra']['no_cache'] ?? !\$options['buffer'];

        if (!empty(\$options['body']) || \$options['extra']['no_cache'] || !\\in_array(\$method, ['GET', 'HEAD', 'OPTIONS'])) {
            return \$this->client->request(\$method, \$url, \$options);
        }

        \$request = Request::create(\$url, \$method);
        \$request->attributes->set('http_client_options', \$options);

        foreach (\$options['normalized_headers'] as \$name => \$values) {
            if ('cookie' !== \$name) {
                foreach (\$values as \$value) {
                    \$request->headers->set(\$name, substr(\$value, 2 + \\strlen(\$name)), false);
                }

                continue;
            }

            foreach (\$values as \$cookies) {
                foreach (explode('; ', substr(\$cookies, \\strlen('Cookie: '))) as \$cookie) {
                    if ('' !== \$cookie) {
                        \$cookie = explode('=', \$cookie, 2);
                        \$request->cookies->set(\$cookie[0], \$cookie[1] ?? '');
                    }
                }
            }
        }

        \$response = \$this->cache->handle(\$request);
        \$response = new MockResponse(\$response->getContent(), [
            'http_code' => \$response->getStatusCode(),
            'response_headers' => \$response->headers->allPreserveCase(),
        ]);

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
            throw new \\TypeError(sprintf('%s() expects parameter 1 to be an iterable of ResponseInterface objects, %s given.', __METHOD__, \\is_object(\$responses) ? \\get_class(\$responses) : \\gettype(\$responses)));
        }

        \$mockResponses = [];
        \$clientResponses = [];

        foreach (\$responses as \$response) {
            if (\$response instanceof MockResponse) {
                \$mockResponses[] = \$response;
            } else {
                \$clientResponses[] = \$response;
            }
        }

        if (!\$mockResponses) {
            return \$this->client->stream(\$clientResponses, \$timeout);
        }

        if (!\$clientResponses) {
            return new ResponseStream(MockResponse::stream(\$mockResponses, \$timeout));
        }

        return new ResponseStream((function () use (\$mockResponses, \$clientResponses, \$timeout) {
            yield from MockResponse::stream(\$mockResponses, \$timeout);
            yield \$this->client->stream(\$clientResponses, \$timeout);
        })());
    }
}
", "vendor/symfony/http-client/CachingHttpClient.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-client/CachingHttpClient.php");
    }
}
