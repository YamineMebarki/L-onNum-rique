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

/* vendor/symfony/http-client-contracts/ResponseInterface.php */
class __TwigTemplate_cbc6bbd3b609ae3aaa2443806f1ce2efe014a3fc8bff3c9de13ad0d48c72ac7d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-client-contracts/ResponseInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-client-contracts/ResponseInterface.php"));

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

use Symfony\\Contracts\\HttpClient\\Exception\\ClientExceptionInterface;
use Symfony\\Contracts\\HttpClient\\Exception\\DecodingExceptionInterface;
use Symfony\\Contracts\\HttpClient\\Exception\\ExceptionInterface;
use Symfony\\Contracts\\HttpClient\\Exception\\RedirectionExceptionInterface;
use Symfony\\Contracts\\HttpClient\\Exception\\ServerExceptionInterface;
use Symfony\\Contracts\\HttpClient\\Exception\\TransportExceptionInterface;

/**
 * A (lazily retrieved) HTTP response.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @experimental in 1.1
 */
interface ResponseInterface
{
    /**
     * Gets the HTTP status code of the response.
     *
     * @throws TransportExceptionInterface when a network error occurs
     */
    public function getStatusCode(): int;

    /**
     * Gets the HTTP headers of the response.
     *
     * @param bool \$throw Whether an exception should be thrown on 3/4/5xx status codes
     *
     * @return string[][] The headers of the response keyed by header names in lowercase
     *
     * @throws TransportExceptionInterface   When a network error occurs
     * @throws RedirectionExceptionInterface On a 3xx when \$throw is true and the \"max_redirects\" option has been reached
     * @throws ClientExceptionInterface      On a 4xx when \$throw is true
     * @throws ServerExceptionInterface      On a 5xx when \$throw is true
     */
    public function getHeaders(bool \$throw = true): array;

    /**
     * Gets the response body as a string.
     *
     * @param bool \$throw Whether an exception should be thrown on 3/4/5xx status codes
     *
     * @throws TransportExceptionInterface   When a network error occurs
     * @throws RedirectionExceptionInterface On a 3xx when \$throw is true and the \"max_redirects\" option has been reached
     * @throws ClientExceptionInterface      On a 4xx when \$throw is true
     * @throws ServerExceptionInterface      On a 5xx when \$throw is true
     */
    public function getContent(bool \$throw = true): string;

    /**
     * Gets the response body decoded as array, typically from a JSON payload.
     *
     * @param bool \$throw Whether an exception should be thrown on 3/4/5xx status codes
     *
     * @throws DecodingExceptionInterface    When the body cannot be decoded to an array
     * @throws TransportExceptionInterface   When a network error occurs
     * @throws RedirectionExceptionInterface On a 3xx when \$throw is true and the \"max_redirects\" option has been reached
     * @throws ClientExceptionInterface      On a 4xx when \$throw is true
     * @throws ServerExceptionInterface      On a 5xx when \$throw is true
     */
    public function toArray(bool \$throw = true): array;

    /**
     * Closes the response stream and all related buffers.
     *
     * No further chunk will be yielded after this method has been called.
     */
    public function cancel(): void;

    /**
     * Returns info coming from the transport layer.
     *
     * This method SHOULD NOT throw any ExceptionInterface and SHOULD be non-blocking.
     * The returned info is \"live\": it can be empty and can change from one call to
     * another, as the request/response progresses.
     *
     * The following info MUST be returned:
     *  - response_headers - an array modelled after the special \$http_response_header variable
     *  - redirect_count - the number of redirects followed while executing the request
     *  - redirect_url - the resolved location of redirect responses, null otherwise
     *  - start_time - the time when the request was sent or 0.0 when it's pending
     *  - http_method - the HTTP verb of the last request
     *  - http_code - the last response code or 0 when it is not known yet
     *  - error - the error message when the transfer was aborted, null otherwise
     *  - user_data - the value of the \"user_data\" request option, null if not set
     *  - url - the last effective URL of the request
     *
     * When the \"capture_peer_cert_chain\" option is true, the \"peer_certificate_chain\"
     * attribute SHOULD list the peer certificates as an array of OpenSSL X.509 resources.
     *
     * Other info SHOULD be named after curl_getinfo()'s associative return value.
     *
     * @return array|mixed|null An array of all available info, or one of them when \$type is
     *                          provided, or null when an unsupported type is requested
     */
    public function getInfo(string \$type = null);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-client-contracts/ResponseInterface.php";
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

use Symfony\\Contracts\\HttpClient\\Exception\\ClientExceptionInterface;
use Symfony\\Contracts\\HttpClient\\Exception\\DecodingExceptionInterface;
use Symfony\\Contracts\\HttpClient\\Exception\\ExceptionInterface;
use Symfony\\Contracts\\HttpClient\\Exception\\RedirectionExceptionInterface;
use Symfony\\Contracts\\HttpClient\\Exception\\ServerExceptionInterface;
use Symfony\\Contracts\\HttpClient\\Exception\\TransportExceptionInterface;

/**
 * A (lazily retrieved) HTTP response.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @experimental in 1.1
 */
interface ResponseInterface
{
    /**
     * Gets the HTTP status code of the response.
     *
     * @throws TransportExceptionInterface when a network error occurs
     */
    public function getStatusCode(): int;

    /**
     * Gets the HTTP headers of the response.
     *
     * @param bool \$throw Whether an exception should be thrown on 3/4/5xx status codes
     *
     * @return string[][] The headers of the response keyed by header names in lowercase
     *
     * @throws TransportExceptionInterface   When a network error occurs
     * @throws RedirectionExceptionInterface On a 3xx when \$throw is true and the \"max_redirects\" option has been reached
     * @throws ClientExceptionInterface      On a 4xx when \$throw is true
     * @throws ServerExceptionInterface      On a 5xx when \$throw is true
     */
    public function getHeaders(bool \$throw = true): array;

    /**
     * Gets the response body as a string.
     *
     * @param bool \$throw Whether an exception should be thrown on 3/4/5xx status codes
     *
     * @throws TransportExceptionInterface   When a network error occurs
     * @throws RedirectionExceptionInterface On a 3xx when \$throw is true and the \"max_redirects\" option has been reached
     * @throws ClientExceptionInterface      On a 4xx when \$throw is true
     * @throws ServerExceptionInterface      On a 5xx when \$throw is true
     */
    public function getContent(bool \$throw = true): string;

    /**
     * Gets the response body decoded as array, typically from a JSON payload.
     *
     * @param bool \$throw Whether an exception should be thrown on 3/4/5xx status codes
     *
     * @throws DecodingExceptionInterface    When the body cannot be decoded to an array
     * @throws TransportExceptionInterface   When a network error occurs
     * @throws RedirectionExceptionInterface On a 3xx when \$throw is true and the \"max_redirects\" option has been reached
     * @throws ClientExceptionInterface      On a 4xx when \$throw is true
     * @throws ServerExceptionInterface      On a 5xx when \$throw is true
     */
    public function toArray(bool \$throw = true): array;

    /**
     * Closes the response stream and all related buffers.
     *
     * No further chunk will be yielded after this method has been called.
     */
    public function cancel(): void;

    /**
     * Returns info coming from the transport layer.
     *
     * This method SHOULD NOT throw any ExceptionInterface and SHOULD be non-blocking.
     * The returned info is \"live\": it can be empty and can change from one call to
     * another, as the request/response progresses.
     *
     * The following info MUST be returned:
     *  - response_headers - an array modelled after the special \$http_response_header variable
     *  - redirect_count - the number of redirects followed while executing the request
     *  - redirect_url - the resolved location of redirect responses, null otherwise
     *  - start_time - the time when the request was sent or 0.0 when it's pending
     *  - http_method - the HTTP verb of the last request
     *  - http_code - the last response code or 0 when it is not known yet
     *  - error - the error message when the transfer was aborted, null otherwise
     *  - user_data - the value of the \"user_data\" request option, null if not set
     *  - url - the last effective URL of the request
     *
     * When the \"capture_peer_cert_chain\" option is true, the \"peer_certificate_chain\"
     * attribute SHOULD list the peer certificates as an array of OpenSSL X.509 resources.
     *
     * Other info SHOULD be named after curl_getinfo()'s associative return value.
     *
     * @return array|mixed|null An array of all available info, or one of them when \$type is
     *                          provided, or null when an unsupported type is requested
     */
    public function getInfo(string \$type = null);
}
", "vendor/symfony/http-client-contracts/ResponseInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-client-contracts/ResponseInterface.php");
    }
}
