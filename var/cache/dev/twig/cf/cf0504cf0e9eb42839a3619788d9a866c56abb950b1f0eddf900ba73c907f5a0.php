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

/* vendor/symfony/security-http/Tests/Logout/CsrfTokenClearingLogoutHandlerTest.php */
class __TwigTemplate_35a65125cd9f8227d476c258b7673d2507d35f46dec37b7dc111bca36d065ba0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Tests/Logout/CsrfTokenClearingLogoutHandlerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Tests/Logout/CsrfTokenClearingLogoutHandlerTest.php"));

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
use Symfony\\Component\\HttpFoundation\\Session\\Session;
use Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockArraySessionStorage;
use Symfony\\Component\\Security\\Csrf\\TokenStorage\\SessionTokenStorage;
use Symfony\\Component\\Security\\Http\\Logout\\CsrfTokenClearingLogoutHandler;

class CsrfTokenClearingLogoutHandlerTest extends TestCase
{
    private \$session;
    private \$csrfTokenStorage;
    private \$csrfTokenClearingLogoutHandler;

    protected function setUp(): void
    {
        \$this->session = new Session(new MockArraySessionStorage());
        \$this->csrfTokenStorage = new SessionTokenStorage(\$this->session, 'foo');
        \$this->csrfTokenStorage->setToken('foo', 'bar');
        \$this->csrfTokenStorage->setToken('foobar', 'baz');
        \$this->csrfTokenClearingLogoutHandler = new CsrfTokenClearingLogoutHandler(\$this->csrfTokenStorage);
    }

    public function testCsrfTokenCookieWithSameNamespaceIsRemoved()
    {
        \$this->assertSame('bar', \$this->session->get('foo/foo'));
        \$this->assertSame('baz', \$this->session->get('foo/foobar'));

        \$this->csrfTokenClearingLogoutHandler->logout(new Request(), new Response(), \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock());

        \$this->assertFalse(\$this->csrfTokenStorage->hasToken('foo'));
        \$this->assertFalse(\$this->csrfTokenStorage->hasToken('foobar'));

        \$this->assertFalse(\$this->session->has('foo/foo'));
        \$this->assertFalse(\$this->session->has('foo/foobar'));
    }

    public function testCsrfTokenCookieWithDifferentNamespaceIsNotRemoved()
    {
        \$barNamespaceCsrfSessionStorage = new SessionTokenStorage(\$this->session, 'bar');
        \$barNamespaceCsrfSessionStorage->setToken('foo', 'bar');
        \$barNamespaceCsrfSessionStorage->setToken('foobar', 'baz');

        \$this->assertSame('bar', \$this->session->get('foo/foo'));
        \$this->assertSame('baz', \$this->session->get('foo/foobar'));
        \$this->assertSame('bar', \$this->session->get('bar/foo'));
        \$this->assertSame('baz', \$this->session->get('bar/foobar'));

        \$this->csrfTokenClearingLogoutHandler->logout(new Request(), new Response(), \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock());

        \$this->assertTrue(\$barNamespaceCsrfSessionStorage->hasToken('foo'));
        \$this->assertTrue(\$barNamespaceCsrfSessionStorage->hasToken('foobar'));
        \$this->assertSame('bar', \$barNamespaceCsrfSessionStorage->getToken('foo'));
        \$this->assertSame('baz', \$barNamespaceCsrfSessionStorage->getToken('foobar'));
        \$this->assertFalse(\$this->csrfTokenStorage->hasToken('foo'));
        \$this->assertFalse(\$this->csrfTokenStorage->hasToken('foobar'));

        \$this->assertFalse(\$this->session->has('foo/foo'));
        \$this->assertFalse(\$this->session->has('foo/foobar'));
        \$this->assertSame('bar', \$this->session->get('bar/foo'));
        \$this->assertSame('baz', \$this->session->get('bar/foobar'));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-http/Tests/Logout/CsrfTokenClearingLogoutHandlerTest.php";
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
use Symfony\\Component\\HttpFoundation\\Session\\Session;
use Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockArraySessionStorage;
use Symfony\\Component\\Security\\Csrf\\TokenStorage\\SessionTokenStorage;
use Symfony\\Component\\Security\\Http\\Logout\\CsrfTokenClearingLogoutHandler;

class CsrfTokenClearingLogoutHandlerTest extends TestCase
{
    private \$session;
    private \$csrfTokenStorage;
    private \$csrfTokenClearingLogoutHandler;

    protected function setUp(): void
    {
        \$this->session = new Session(new MockArraySessionStorage());
        \$this->csrfTokenStorage = new SessionTokenStorage(\$this->session, 'foo');
        \$this->csrfTokenStorage->setToken('foo', 'bar');
        \$this->csrfTokenStorage->setToken('foobar', 'baz');
        \$this->csrfTokenClearingLogoutHandler = new CsrfTokenClearingLogoutHandler(\$this->csrfTokenStorage);
    }

    public function testCsrfTokenCookieWithSameNamespaceIsRemoved()
    {
        \$this->assertSame('bar', \$this->session->get('foo/foo'));
        \$this->assertSame('baz', \$this->session->get('foo/foobar'));

        \$this->csrfTokenClearingLogoutHandler->logout(new Request(), new Response(), \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock());

        \$this->assertFalse(\$this->csrfTokenStorage->hasToken('foo'));
        \$this->assertFalse(\$this->csrfTokenStorage->hasToken('foobar'));

        \$this->assertFalse(\$this->session->has('foo/foo'));
        \$this->assertFalse(\$this->session->has('foo/foobar'));
    }

    public function testCsrfTokenCookieWithDifferentNamespaceIsNotRemoved()
    {
        \$barNamespaceCsrfSessionStorage = new SessionTokenStorage(\$this->session, 'bar');
        \$barNamespaceCsrfSessionStorage->setToken('foo', 'bar');
        \$barNamespaceCsrfSessionStorage->setToken('foobar', 'baz');

        \$this->assertSame('bar', \$this->session->get('foo/foo'));
        \$this->assertSame('baz', \$this->session->get('foo/foobar'));
        \$this->assertSame('bar', \$this->session->get('bar/foo'));
        \$this->assertSame('baz', \$this->session->get('bar/foobar'));

        \$this->csrfTokenClearingLogoutHandler->logout(new Request(), new Response(), \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock());

        \$this->assertTrue(\$barNamespaceCsrfSessionStorage->hasToken('foo'));
        \$this->assertTrue(\$barNamespaceCsrfSessionStorage->hasToken('foobar'));
        \$this->assertSame('bar', \$barNamespaceCsrfSessionStorage->getToken('foo'));
        \$this->assertSame('baz', \$barNamespaceCsrfSessionStorage->getToken('foobar'));
        \$this->assertFalse(\$this->csrfTokenStorage->hasToken('foo'));
        \$this->assertFalse(\$this->csrfTokenStorage->hasToken('foobar'));

        \$this->assertFalse(\$this->session->has('foo/foo'));
        \$this->assertFalse(\$this->session->has('foo/foobar'));
        \$this->assertSame('bar', \$this->session->get('bar/foo'));
        \$this->assertSame('baz', \$this->session->get('bar/foobar'));
    }
}
", "vendor/symfony/security-http/Tests/Logout/CsrfTokenClearingLogoutHandlerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-http/Tests/Logout/CsrfTokenClearingLogoutHandlerTest.php");
    }
}
