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

/* vendor/symfony/http-client-contracts/HttpClientInterface.php */
class __TwigTemplate_b1bd3b31fdeaf6967aec9a65585188f62b520452d13632f6b96925844aef1a95 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-client-contracts/HttpClientInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-client-contracts/HttpClientInterface.php"));

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

namespace Symfony\\Contracts\\HttpClient;

use Symfony\\Contracts\\HttpClient\\Exception\\TransportExceptionInterface;
use Symfony\\Contracts\\HttpClient\\Test\\HttpClientTestCase;

/**
 * Provides flexible methods for requesting HTTP resources synchronously or asynchronously.
 *
 * @see HttpClientTestCase for a reference test suite
 *
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @experimental in 1.1
 */
interface HttpClientInterface
{
    public const OPTIONS_DEFAULTS = [
        'auth_basic' => null,   // array|string - an array containing the username as first value, and optionally the
                                //   password as the second one; or string like username:password - enabling HTTP Basic
                                //   authentication (RFC 7617)
        'auth_bearer' => null,  // string - a token enabling HTTP Bearer authorization (RFC 6750)
        'query' => [],          // string[] - associative array of query string values to merge with the request's URL
        'headers' => [],        // iterable|string[]|string[][] - headers names provided as keys or as part of values
        'body' => '',           // array|string|resource|\\Traversable|\\Closure - the callback SHOULD yield a string
                                //   smaller than the amount requested as argument; the empty string signals EOF; when
                                //   an array is passed, it is meant as a form payload of field names and values
        'json' => null,         // array|\\JsonSerializable - when set, implementations MUST set the \"body\" option to
                                //   the JSON-encoded value and set the \"content-type\" headers to a JSON-compatible
                                //   value if they are not defined - typically \"application/json\"
        'user_data' => null,    // mixed - any extra data to attach to the request (scalar, callable, object...) that
                                //   MUST be available via \$response->getInfo('user_data') - not used internally
        'max_redirects' => 20,  // int - the maximum number of redirects to follow; a value lower than or equal to 0
                                //   means redirects should not be followed; \"Authorization\" and \"Cookie\" headers MUST
                                //   NOT follow except for the initial host name
        'http_version' => null, // string - defaults to the best supported version, typically 1.1 or 2.0
        'base_uri' => null,     // string - the URI to resolve relative URLs, following rules in RFC 3986, section 2
        'buffer' => true,       // bool - whether the content of the response should be buffered or not
        'on_progress' => null,  // callable(int \$dlNow, int \$dlSize, array \$info) - throwing any exceptions MUST abort
                                //   the request; it MUST be called on DNS resolution, on arrival of headers and on
                                //   completion; it SHOULD be called on upload/download of data and at least 1/s
        'resolve' => [],        // string[] - a map of host to IP address that SHOULD replace DNS resolution
        'proxy' => null,        // string - by default, the proxy-related env vars handled by curl SHOULD be honored
        'no_proxy' => null,     // string - a comma separated list of hosts that do not require a proxy to be reached
        'timeout' => null,      // float - the idle timeout - defaults to ini_get('default_socket_timeout')
        'max_duration' => 0,    // float - the maximum execution time for the request+response as a whole;
                                //   a value lower than or equal to 0 means it is unlimited
        'bindto' => '0',        // string - the interface or the local socket to bind to
        'verify_peer' => true,  // see https://php.net/context.ssl for the following options
        'verify_host' => true,
        'cafile' => null,
        'capath' => null,
        'local_cert' => null,
        'local_pk' => null,
        'passphrase' => null,
        'ciphers' => null,
        'peer_fingerprint' => null,
        'capture_peer_cert_chain' => false,
        'extra' => [],          // array - additional options that can be ignored if unsupported, unlike regular options
    ];

    /**
     * Requests an HTTP resource.
     *
     * Responses MUST be lazy, but their status code MUST be
     * checked even if none of their public methods are called.
     *
     * Implementations are not required to support all options described above; they can also
     * support more custom options; but in any case, they MUST throw a TransportExceptionInterface
     * when an unsupported option is passed.
     *
     * @throws TransportExceptionInterface When an unsupported option is passed
     */
    public function request(string \$method, string \$url, array \$options = []): ResponseInterface;

    /**
     * Yields responses chunk by chunk as they complete.
     *
     * @param ResponseInterface|ResponseInterface[]|iterable \$responses One or more responses created by the current HTTP client
     * @param float|null                                     \$timeout   The idle timeout before yielding timeout chunks
     */
    public function stream(\$responses, float \$timeout = null): ResponseStreamInterface;
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-client-contracts/HttpClientInterface.php";
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

namespace Symfony\\Contracts\\HttpClient;

use Symfony\\Contracts\\HttpClient\\Exception\\TransportExceptionInterface;
use Symfony\\Contracts\\HttpClient\\Test\\HttpClientTestCase;

/**
 * Provides flexible methods for requesting HTTP resources synchronously or asynchronously.
 *
 * @see HttpClientTestCase for a reference test suite
 *
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @experimental in 1.1
 */
interface HttpClientInterface
{
    public const OPTIONS_DEFAULTS = [
        'auth_basic' => null,   // array|string - an array containing the username as first value, and optionally the
                                //   password as the second one; or string like username:password - enabling HTTP Basic
                                //   authentication (RFC 7617)
        'auth_bearer' => null,  // string - a token enabling HTTP Bearer authorization (RFC 6750)
        'query' => [],          // string[] - associative array of query string values to merge with the request's URL
        'headers' => [],        // iterable|string[]|string[][] - headers names provided as keys or as part of values
        'body' => '',           // array|string|resource|\\Traversable|\\Closure - the callback SHOULD yield a string
                                //   smaller than the amount requested as argument; the empty string signals EOF; when
                                //   an array is passed, it is meant as a form payload of field names and values
        'json' => null,         // array|\\JsonSerializable - when set, implementations MUST set the \"body\" option to
                                //   the JSON-encoded value and set the \"content-type\" headers to a JSON-compatible
                                //   value if they are not defined - typically \"application/json\"
        'user_data' => null,    // mixed - any extra data to attach to the request (scalar, callable, object...) that
                                //   MUST be available via \$response->getInfo('user_data') - not used internally
        'max_redirects' => 20,  // int - the maximum number of redirects to follow; a value lower than or equal to 0
                                //   means redirects should not be followed; \"Authorization\" and \"Cookie\" headers MUST
                                //   NOT follow except for the initial host name
        'http_version' => null, // string - defaults to the best supported version, typically 1.1 or 2.0
        'base_uri' => null,     // string - the URI to resolve relative URLs, following rules in RFC 3986, section 2
        'buffer' => true,       // bool - whether the content of the response should be buffered or not
        'on_progress' => null,  // callable(int \$dlNow, int \$dlSize, array \$info) - throwing any exceptions MUST abort
                                //   the request; it MUST be called on DNS resolution, on arrival of headers and on
                                //   completion; it SHOULD be called on upload/download of data and at least 1/s
        'resolve' => [],        // string[] - a map of host to IP address that SHOULD replace DNS resolution
        'proxy' => null,        // string - by default, the proxy-related env vars handled by curl SHOULD be honored
        'no_proxy' => null,     // string - a comma separated list of hosts that do not require a proxy to be reached
        'timeout' => null,      // float - the idle timeout - defaults to ini_get('default_socket_timeout')
        'max_duration' => 0,    // float - the maximum execution time for the request+response as a whole;
                                //   a value lower than or equal to 0 means it is unlimited
        'bindto' => '0',        // string - the interface or the local socket to bind to
        'verify_peer' => true,  // see https://php.net/context.ssl for the following options
        'verify_host' => true,
        'cafile' => null,
        'capath' => null,
        'local_cert' => null,
        'local_pk' => null,
        'passphrase' => null,
        'ciphers' => null,
        'peer_fingerprint' => null,
        'capture_peer_cert_chain' => false,
        'extra' => [],          // array - additional options that can be ignored if unsupported, unlike regular options
    ];

    /**
     * Requests an HTTP resource.
     *
     * Responses MUST be lazy, but their status code MUST be
     * checked even if none of their public methods are called.
     *
     * Implementations are not required to support all options described above; they can also
     * support more custom options; but in any case, they MUST throw a TransportExceptionInterface
     * when an unsupported option is passed.
     *
     * @throws TransportExceptionInterface When an unsupported option is passed
     */
    public function request(string \$method, string \$url, array \$options = []): ResponseInterface;

    /**
     * Yields responses chunk by chunk as they complete.
     *
     * @param ResponseInterface|ResponseInterface[]|iterable \$responses One or more responses created by the current HTTP client
     * @param float|null                                     \$timeout   The idle timeout before yielding timeout chunks
     */
    public function stream(\$responses, float \$timeout = null): ResponseStreamInterface;
}
", "vendor/symfony/http-client-contracts/HttpClientInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-client-contracts/HttpClientInterface.php");
    }
}
