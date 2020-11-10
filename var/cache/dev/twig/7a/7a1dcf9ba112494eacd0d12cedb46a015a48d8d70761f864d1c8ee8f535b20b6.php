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

/* vendor/symfony/http-foundation/Tests/ServerBagTest.php */
class __TwigTemplate_6cb801bab58bbb920b7280dd225e048d089117a628f8e2f49464e2f9279ea5a4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/ServerBagTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/ServerBagTest.php"));

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

namespace Symfony\\Component\\HttpFoundation\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\ServerBag;

/**
 * ServerBagTest.
 *
 * @author Bulat Shakirzyanov <mallluhuct@gmail.com>
 */
class ServerBagTest extends TestCase
{
    public function testShouldExtractHeadersFromServerArray()
    {
        \$server = [
            'SOME_SERVER_VARIABLE' => 'value',
            'SOME_SERVER_VARIABLE2' => 'value',
            'ROOT' => 'value',
            'HTTP_CONTENT_TYPE' => 'text/html',
            'HTTP_CONTENT_LENGTH' => '0',
            'HTTP_ETAG' => 'asdf',
            'PHP_AUTH_USER' => 'foo',
            'PHP_AUTH_PW' => 'bar',
        ];

        \$bag = new ServerBag(\$server);

        \$this->assertEquals([
            'CONTENT_TYPE' => 'text/html',
            'CONTENT_LENGTH' => '0',
            'ETAG' => 'asdf',
            'AUTHORIZATION' => 'Basic '.base64_encode('foo:bar'),
            'PHP_AUTH_USER' => 'foo',
            'PHP_AUTH_PW' => 'bar',
        ], \$bag->getHeaders());
    }

    public function testHttpPasswordIsOptional()
    {
        \$bag = new ServerBag(['PHP_AUTH_USER' => 'foo']);

        \$this->assertEquals([
            'AUTHORIZATION' => 'Basic '.base64_encode('foo:'),
            'PHP_AUTH_USER' => 'foo',
            'PHP_AUTH_PW' => '',
        ], \$bag->getHeaders());
    }

    public function testHttpBasicAuthWithPhpCgi()
    {
        \$bag = new ServerBag(['HTTP_AUTHORIZATION' => 'Basic '.base64_encode('foo:bar')]);

        \$this->assertEquals([
            'AUTHORIZATION' => 'Basic '.base64_encode('foo:bar'),
            'PHP_AUTH_USER' => 'foo',
            'PHP_AUTH_PW' => 'bar',
        ], \$bag->getHeaders());
    }

    public function testHttpBasicAuthWithPhpCgiBogus()
    {
        \$bag = new ServerBag(['HTTP_AUTHORIZATION' => 'Basic_'.base64_encode('foo:bar')]);

        // Username and passwords should not be set as the header is bogus
        \$headers = \$bag->getHeaders();
        \$this->assertArrayNotHasKey('PHP_AUTH_USER', \$headers);
        \$this->assertArrayNotHasKey('PHP_AUTH_PW', \$headers);
    }

    public function testHttpBasicAuthWithPhpCgiRedirect()
    {
        \$bag = new ServerBag(['REDIRECT_HTTP_AUTHORIZATION' => 'Basic '.base64_encode('username:pass:word')]);

        \$this->assertEquals([
            'AUTHORIZATION' => 'Basic '.base64_encode('username:pass:word'),
            'PHP_AUTH_USER' => 'username',
            'PHP_AUTH_PW' => 'pass:word',
        ], \$bag->getHeaders());
    }

    public function testHttpBasicAuthWithPhpCgiEmptyPassword()
    {
        \$bag = new ServerBag(['HTTP_AUTHORIZATION' => 'Basic '.base64_encode('foo:')]);

        \$this->assertEquals([
            'AUTHORIZATION' => 'Basic '.base64_encode('foo:'),
            'PHP_AUTH_USER' => 'foo',
            'PHP_AUTH_PW' => '',
        ], \$bag->getHeaders());
    }

    public function testHttpDigestAuthWithPhpCgi()
    {
        \$digest = 'Digest username=\"foo\", realm=\"acme\", nonce=\"'.md5('secret').'\", uri=\"/protected, qop=\"auth\"';
        \$bag = new ServerBag(['HTTP_AUTHORIZATION' => \$digest]);

        \$this->assertEquals([
            'AUTHORIZATION' => \$digest,
            'PHP_AUTH_DIGEST' => \$digest,
        ], \$bag->getHeaders());
    }

    public function testHttpDigestAuthWithPhpCgiBogus()
    {
        \$digest = 'Digest_username=\"foo\", realm=\"acme\", nonce=\"'.md5('secret').'\", uri=\"/protected, qop=\"auth\"';
        \$bag = new ServerBag(['HTTP_AUTHORIZATION' => \$digest]);

        // Username and passwords should not be set as the header is bogus
        \$headers = \$bag->getHeaders();
        \$this->assertArrayNotHasKey('PHP_AUTH_USER', \$headers);
        \$this->assertArrayNotHasKey('PHP_AUTH_PW', \$headers);
    }

    public function testHttpDigestAuthWithPhpCgiRedirect()
    {
        \$digest = 'Digest username=\"foo\", realm=\"acme\", nonce=\"'.md5('secret').'\", uri=\"/protected, qop=\"auth\"';
        \$bag = new ServerBag(['REDIRECT_HTTP_AUTHORIZATION' => \$digest]);

        \$this->assertEquals([
            'AUTHORIZATION' => \$digest,
            'PHP_AUTH_DIGEST' => \$digest,
        ], \$bag->getHeaders());
    }

    public function testOAuthBearerAuth()
    {
        \$headerContent = 'Bearer L-yLEOr9zhmUYRkzN1jwwxwQ-PBNiKDc8dgfB4hTfvo';
        \$bag = new ServerBag(['HTTP_AUTHORIZATION' => \$headerContent]);

        \$this->assertEquals([
            'AUTHORIZATION' => \$headerContent,
        ], \$bag->getHeaders());
    }

    public function testOAuthBearerAuthWithRedirect()
    {
        \$headerContent = 'Bearer L-yLEOr9zhmUYRkzN1jwwxwQ-PBNiKDc8dgfB4hTfvo';
        \$bag = new ServerBag(['REDIRECT_HTTP_AUTHORIZATION' => \$headerContent]);

        \$this->assertEquals([
            'AUTHORIZATION' => \$headerContent,
        ], \$bag->getHeaders());
    }

    /**
     * @see https://github.com/symfony/symfony/issues/17345
     */
    public function testItDoesNotOverwriteTheAuthorizationHeaderIfItIsAlreadySet()
    {
        \$headerContent = 'Bearer L-yLEOr9zhmUYRkzN1jwwxwQ-PBNiKDc8dgfB4hTfvo';
        \$bag = new ServerBag(['PHP_AUTH_USER' => 'foo', 'HTTP_AUTHORIZATION' => \$headerContent]);

        \$this->assertEquals([
            'AUTHORIZATION' => \$headerContent,
            'PHP_AUTH_USER' => 'foo',
            'PHP_AUTH_PW' => '',
        ], \$bag->getHeaders());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/Tests/ServerBagTest.php";
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

namespace Symfony\\Component\\HttpFoundation\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\ServerBag;

/**
 * ServerBagTest.
 *
 * @author Bulat Shakirzyanov <mallluhuct@gmail.com>
 */
class ServerBagTest extends TestCase
{
    public function testShouldExtractHeadersFromServerArray()
    {
        \$server = [
            'SOME_SERVER_VARIABLE' => 'value',
            'SOME_SERVER_VARIABLE2' => 'value',
            'ROOT' => 'value',
            'HTTP_CONTENT_TYPE' => 'text/html',
            'HTTP_CONTENT_LENGTH' => '0',
            'HTTP_ETAG' => 'asdf',
            'PHP_AUTH_USER' => 'foo',
            'PHP_AUTH_PW' => 'bar',
        ];

        \$bag = new ServerBag(\$server);

        \$this->assertEquals([
            'CONTENT_TYPE' => 'text/html',
            'CONTENT_LENGTH' => '0',
            'ETAG' => 'asdf',
            'AUTHORIZATION' => 'Basic '.base64_encode('foo:bar'),
            'PHP_AUTH_USER' => 'foo',
            'PHP_AUTH_PW' => 'bar',
        ], \$bag->getHeaders());
    }

    public function testHttpPasswordIsOptional()
    {
        \$bag = new ServerBag(['PHP_AUTH_USER' => 'foo']);

        \$this->assertEquals([
            'AUTHORIZATION' => 'Basic '.base64_encode('foo:'),
            'PHP_AUTH_USER' => 'foo',
            'PHP_AUTH_PW' => '',
        ], \$bag->getHeaders());
    }

    public function testHttpBasicAuthWithPhpCgi()
    {
        \$bag = new ServerBag(['HTTP_AUTHORIZATION' => 'Basic '.base64_encode('foo:bar')]);

        \$this->assertEquals([
            'AUTHORIZATION' => 'Basic '.base64_encode('foo:bar'),
            'PHP_AUTH_USER' => 'foo',
            'PHP_AUTH_PW' => 'bar',
        ], \$bag->getHeaders());
    }

    public function testHttpBasicAuthWithPhpCgiBogus()
    {
        \$bag = new ServerBag(['HTTP_AUTHORIZATION' => 'Basic_'.base64_encode('foo:bar')]);

        // Username and passwords should not be set as the header is bogus
        \$headers = \$bag->getHeaders();
        \$this->assertArrayNotHasKey('PHP_AUTH_USER', \$headers);
        \$this->assertArrayNotHasKey('PHP_AUTH_PW', \$headers);
    }

    public function testHttpBasicAuthWithPhpCgiRedirect()
    {
        \$bag = new ServerBag(['REDIRECT_HTTP_AUTHORIZATION' => 'Basic '.base64_encode('username:pass:word')]);

        \$this->assertEquals([
            'AUTHORIZATION' => 'Basic '.base64_encode('username:pass:word'),
            'PHP_AUTH_USER' => 'username',
            'PHP_AUTH_PW' => 'pass:word',
        ], \$bag->getHeaders());
    }

    public function testHttpBasicAuthWithPhpCgiEmptyPassword()
    {
        \$bag = new ServerBag(['HTTP_AUTHORIZATION' => 'Basic '.base64_encode('foo:')]);

        \$this->assertEquals([
            'AUTHORIZATION' => 'Basic '.base64_encode('foo:'),
            'PHP_AUTH_USER' => 'foo',
            'PHP_AUTH_PW' => '',
        ], \$bag->getHeaders());
    }

    public function testHttpDigestAuthWithPhpCgi()
    {
        \$digest = 'Digest username=\"foo\", realm=\"acme\", nonce=\"'.md5('secret').'\", uri=\"/protected, qop=\"auth\"';
        \$bag = new ServerBag(['HTTP_AUTHORIZATION' => \$digest]);

        \$this->assertEquals([
            'AUTHORIZATION' => \$digest,
            'PHP_AUTH_DIGEST' => \$digest,
        ], \$bag->getHeaders());
    }

    public function testHttpDigestAuthWithPhpCgiBogus()
    {
        \$digest = 'Digest_username=\"foo\", realm=\"acme\", nonce=\"'.md5('secret').'\", uri=\"/protected, qop=\"auth\"';
        \$bag = new ServerBag(['HTTP_AUTHORIZATION' => \$digest]);

        // Username and passwords should not be set as the header is bogus
        \$headers = \$bag->getHeaders();
        \$this->assertArrayNotHasKey('PHP_AUTH_USER', \$headers);
        \$this->assertArrayNotHasKey('PHP_AUTH_PW', \$headers);
    }

    public function testHttpDigestAuthWithPhpCgiRedirect()
    {
        \$digest = 'Digest username=\"foo\", realm=\"acme\", nonce=\"'.md5('secret').'\", uri=\"/protected, qop=\"auth\"';
        \$bag = new ServerBag(['REDIRECT_HTTP_AUTHORIZATION' => \$digest]);

        \$this->assertEquals([
            'AUTHORIZATION' => \$digest,
            'PHP_AUTH_DIGEST' => \$digest,
        ], \$bag->getHeaders());
    }

    public function testOAuthBearerAuth()
    {
        \$headerContent = 'Bearer L-yLEOr9zhmUYRkzN1jwwxwQ-PBNiKDc8dgfB4hTfvo';
        \$bag = new ServerBag(['HTTP_AUTHORIZATION' => \$headerContent]);

        \$this->assertEquals([
            'AUTHORIZATION' => \$headerContent,
        ], \$bag->getHeaders());
    }

    public function testOAuthBearerAuthWithRedirect()
    {
        \$headerContent = 'Bearer L-yLEOr9zhmUYRkzN1jwwxwQ-PBNiKDc8dgfB4hTfvo';
        \$bag = new ServerBag(['REDIRECT_HTTP_AUTHORIZATION' => \$headerContent]);

        \$this->assertEquals([
            'AUTHORIZATION' => \$headerContent,
        ], \$bag->getHeaders());
    }

    /**
     * @see https://github.com/symfony/symfony/issues/17345
     */
    public function testItDoesNotOverwriteTheAuthorizationHeaderIfItIsAlreadySet()
    {
        \$headerContent = 'Bearer L-yLEOr9zhmUYRkzN1jwwxwQ-PBNiKDc8dgfB4hTfvo';
        \$bag = new ServerBag(['PHP_AUTH_USER' => 'foo', 'HTTP_AUTHORIZATION' => \$headerContent]);

        \$this->assertEquals([
            'AUTHORIZATION' => \$headerContent,
            'PHP_AUTH_USER' => 'foo',
            'PHP_AUTH_PW' => '',
        ], \$bag->getHeaders());
    }
}
", "vendor/symfony/http-foundation/Tests/ServerBagTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/Tests/ServerBagTest.php");
    }
}
