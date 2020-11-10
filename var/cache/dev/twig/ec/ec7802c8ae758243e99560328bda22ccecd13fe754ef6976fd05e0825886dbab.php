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

/* vendor/symfony/security-http/Tests/Logout/CookieClearingLogoutHandlerTest.php */
class __TwigTemplate_c546ebb954be48eb4e309e09909d72b7b44235b38617004479b3789f16c636ab extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Tests/Logout/CookieClearingLogoutHandlerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Tests/Logout/CookieClearingLogoutHandlerTest.php"));

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

namespace Symfony\\Component\\Security\\Http\\Tests\\Logout;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpFoundation\\ResponseHeaderBag;
use Symfony\\Component\\Security\\Http\\Logout\\CookieClearingLogoutHandler;

class CookieClearingLogoutHandlerTest extends TestCase
{
    public function testLogout()
    {
        \$request = new Request();
        \$response = new Response();
        \$token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();

        \$handler = new CookieClearingLogoutHandler(['foo' => ['path' => '/foo', 'domain' => 'foo.foo'], 'foo2' => ['path' => null, 'domain' => null]]);

        \$cookies = \$response->headers->getCookies();
        \$this->assertCount(0, \$cookies);

        \$handler->logout(\$request, \$response, \$token);

        \$cookies = \$response->headers->getCookies(ResponseHeaderBag::COOKIES_ARRAY);
        \$this->assertCount(2, \$cookies);

        \$cookie = \$cookies['foo.foo']['/foo']['foo'];
        \$this->assertEquals('foo', \$cookie->getName());
        \$this->assertEquals('/foo', \$cookie->getPath());
        \$this->assertEquals('foo.foo', \$cookie->getDomain());
        \$this->assertTrue(\$cookie->isCleared());

        \$cookie = \$cookies['']['/']['foo2'];
        \$this->assertStringStartsWith('foo2', \$cookie->getName());
        \$this->assertEquals('/', \$cookie->getPath());
        \$this->assertNull(\$cookie->getDomain());
        \$this->assertTrue(\$cookie->isCleared());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-http/Tests/Logout/CookieClearingLogoutHandlerTest.php";
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

namespace Symfony\\Component\\Security\\Http\\Tests\\Logout;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpFoundation\\ResponseHeaderBag;
use Symfony\\Component\\Security\\Http\\Logout\\CookieClearingLogoutHandler;

class CookieClearingLogoutHandlerTest extends TestCase
{
    public function testLogout()
    {
        \$request = new Request();
        \$response = new Response();
        \$token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();

        \$handler = new CookieClearingLogoutHandler(['foo' => ['path' => '/foo', 'domain' => 'foo.foo'], 'foo2' => ['path' => null, 'domain' => null]]);

        \$cookies = \$response->headers->getCookies();
        \$this->assertCount(0, \$cookies);

        \$handler->logout(\$request, \$response, \$token);

        \$cookies = \$response->headers->getCookies(ResponseHeaderBag::COOKIES_ARRAY);
        \$this->assertCount(2, \$cookies);

        \$cookie = \$cookies['foo.foo']['/foo']['foo'];
        \$this->assertEquals('foo', \$cookie->getName());
        \$this->assertEquals('/foo', \$cookie->getPath());
        \$this->assertEquals('foo.foo', \$cookie->getDomain());
        \$this->assertTrue(\$cookie->isCleared());

        \$cookie = \$cookies['']['/']['foo2'];
        \$this->assertStringStartsWith('foo2', \$cookie->getName());
        \$this->assertEquals('/', \$cookie->getPath());
        \$this->assertNull(\$cookie->getDomain());
        \$this->assertTrue(\$cookie->isCleared());
    }
}
", "vendor/symfony/security-http/Tests/Logout/CookieClearingLogoutHandlerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-http/Tests/Logout/CookieClearingLogoutHandlerTest.php");
    }
}
