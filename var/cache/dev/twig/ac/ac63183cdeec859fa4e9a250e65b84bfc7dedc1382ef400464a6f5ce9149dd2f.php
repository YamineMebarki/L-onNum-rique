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

/* vendor/symfony/http-foundation/Tests/RedirectResponseTest.php */
class __TwigTemplate_f4d1dcdfa87fe607197c0f37d5eef6dd1aa913a032bc679820ca80b5f28d22c9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/RedirectResponseTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/RedirectResponseTest.php"));

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
use Symfony\\Component\\HttpFoundation\\RedirectResponse;

class RedirectResponseTest extends TestCase
{
    public function testGenerateMetaRedirect()
    {
        \$response = new RedirectResponse('foo.bar');

        \$this->assertEquals(1, preg_match(
            '#<meta http-equiv=\"refresh\" content=\"\\d+;url=foo\\.bar\" />#',
            preg_replace(['/\\s+/', '/\\'/'], [' ', '\"'], \$response->getContent())
        ));
    }

    public function testRedirectResponseConstructorNullUrl()
    {
        \$this->expectException('InvalidArgumentException');
        \$response = new RedirectResponse(null);
    }

    public function testRedirectResponseConstructorWrongStatusCode()
    {
        \$this->expectException('InvalidArgumentException');
        \$response = new RedirectResponse('foo.bar', 404);
    }

    public function testGenerateLocationHeader()
    {
        \$response = new RedirectResponse('foo.bar');

        \$this->assertTrue(\$response->headers->has('Location'));
        \$this->assertEquals('foo.bar', \$response->headers->get('Location'));
    }

    public function testGetTargetUrl()
    {
        \$response = new RedirectResponse('foo.bar');

        \$this->assertEquals('foo.bar', \$response->getTargetUrl());
    }

    public function testSetTargetUrl()
    {
        \$response = new RedirectResponse('foo.bar');
        \$response->setTargetUrl('baz.beep');

        \$this->assertEquals('baz.beep', \$response->getTargetUrl());
    }

    public function testSetTargetUrlNull()
    {
        \$this->expectException('InvalidArgumentException');
        \$response = new RedirectResponse('foo.bar');
        \$response->setTargetUrl(null);
    }

    public function testCreate()
    {
        \$response = RedirectResponse::create('foo', 301);

        \$this->assertInstanceOf('Symfony\\Component\\HttpFoundation\\RedirectResponse', \$response);
        \$this->assertEquals(301, \$response->getStatusCode());
    }

    public function testCacheHeaders()
    {
        \$response = new RedirectResponse('foo.bar', 301);
        \$this->assertFalse(\$response->headers->hasCacheControlDirective('no-cache'));

        \$response = new RedirectResponse('foo.bar', 301, ['cache-control' => 'max-age=86400']);
        \$this->assertFalse(\$response->headers->hasCacheControlDirective('no-cache'));
        \$this->assertTrue(\$response->headers->hasCacheControlDirective('max-age'));

        \$response = new RedirectResponse('foo.bar', 301, ['Cache-Control' => 'max-age=86400']);
        \$this->assertFalse(\$response->headers->hasCacheControlDirective('no-cache'));
        \$this->assertTrue(\$response->headers->hasCacheControlDirective('max-age'));

        \$response = new RedirectResponse('foo.bar', 302);
        \$this->assertTrue(\$response->headers->hasCacheControlDirective('no-cache'));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/Tests/RedirectResponseTest.php";
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
use Symfony\\Component\\HttpFoundation\\RedirectResponse;

class RedirectResponseTest extends TestCase
{
    public function testGenerateMetaRedirect()
    {
        \$response = new RedirectResponse('foo.bar');

        \$this->assertEquals(1, preg_match(
            '#<meta http-equiv=\"refresh\" content=\"\\d+;url=foo\\.bar\" />#',
            preg_replace(['/\\s+/', '/\\'/'], [' ', '\"'], \$response->getContent())
        ));
    }

    public function testRedirectResponseConstructorNullUrl()
    {
        \$this->expectException('InvalidArgumentException');
        \$response = new RedirectResponse(null);
    }

    public function testRedirectResponseConstructorWrongStatusCode()
    {
        \$this->expectException('InvalidArgumentException');
        \$response = new RedirectResponse('foo.bar', 404);
    }

    public function testGenerateLocationHeader()
    {
        \$response = new RedirectResponse('foo.bar');

        \$this->assertTrue(\$response->headers->has('Location'));
        \$this->assertEquals('foo.bar', \$response->headers->get('Location'));
    }

    public function testGetTargetUrl()
    {
        \$response = new RedirectResponse('foo.bar');

        \$this->assertEquals('foo.bar', \$response->getTargetUrl());
    }

    public function testSetTargetUrl()
    {
        \$response = new RedirectResponse('foo.bar');
        \$response->setTargetUrl('baz.beep');

        \$this->assertEquals('baz.beep', \$response->getTargetUrl());
    }

    public function testSetTargetUrlNull()
    {
        \$this->expectException('InvalidArgumentException');
        \$response = new RedirectResponse('foo.bar');
        \$response->setTargetUrl(null);
    }

    public function testCreate()
    {
        \$response = RedirectResponse::create('foo', 301);

        \$this->assertInstanceOf('Symfony\\Component\\HttpFoundation\\RedirectResponse', \$response);
        \$this->assertEquals(301, \$response->getStatusCode());
    }

    public function testCacheHeaders()
    {
        \$response = new RedirectResponse('foo.bar', 301);
        \$this->assertFalse(\$response->headers->hasCacheControlDirective('no-cache'));

        \$response = new RedirectResponse('foo.bar', 301, ['cache-control' => 'max-age=86400']);
        \$this->assertFalse(\$response->headers->hasCacheControlDirective('no-cache'));
        \$this->assertTrue(\$response->headers->hasCacheControlDirective('max-age'));

        \$response = new RedirectResponse('foo.bar', 301, ['Cache-Control' => 'max-age=86400']);
        \$this->assertFalse(\$response->headers->hasCacheControlDirective('no-cache'));
        \$this->assertTrue(\$response->headers->hasCacheControlDirective('max-age'));

        \$response = new RedirectResponse('foo.bar', 302);
        \$this->assertTrue(\$response->headers->hasCacheControlDirective('no-cache'));
    }
}
", "vendor/symfony/http-foundation/Tests/RedirectResponseTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/Tests/RedirectResponseTest.php");
    }
}
