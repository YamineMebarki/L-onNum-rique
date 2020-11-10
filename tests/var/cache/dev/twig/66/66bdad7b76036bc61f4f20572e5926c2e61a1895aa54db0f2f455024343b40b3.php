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

/* vendor/symfony/http-foundation/Tests/Session/Storage/Proxy/AbstractProxyTest.php */
class __TwigTemplate_c26e323b3334029f35f00ef5bec1286146872d98feed7d4c3698da41fcb5bfbb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/Session/Storage/Proxy/AbstractProxyTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/Session/Storage/Proxy/AbstractProxyTest.php"));

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

namespace Symfony\\Component\\HttpFoundation\\Tests\\Session\\Storage\\Proxy;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Session\\Storage\\Proxy\\AbstractProxy;
use Symfony\\Component\\HttpFoundation\\Session\\Storage\\Proxy\\SessionHandlerProxy;

/**
 * DevLaon class for AbstractProxy.
 *
 * @author Drak <drak@zikula.org>
 */
class AbstractProxyTest extends TestCase
{
    /**
     * @var AbstractProxy
     */
    protected \$proxy;

    protected function setUp(): void
    {
        \$this->proxy = \$this->getMockForAbstractClass(AbstractProxy::class);
    }

    protected function tearDown(): void
    {
        \$this->proxy = null;
    }

    public function testGetSaveHandlerName()
    {
        \$this->assertNull(\$this->proxy->getSaveHandlerName());
    }

    public function testIsSessionHandlerInterface()
    {
        \$this->assertFalse(\$this->proxy->isSessionHandlerInterface());
        \$sh = new SessionHandlerProxy(new \\SessionHandler());
        \$this->assertTrue(\$sh->isSessionHandlerInterface());
    }

    public function testIsWrapper()
    {
        \$this->assertFalse(\$this->proxy->isWrapper());
    }

    /**
     * @runInSeparateProcess
     * @preserveGlobalState disabled
     */
    public function testIsActive()
    {
        \$this->assertFalse(\$this->proxy->isActive());
        session_start();
        \$this->assertTrue(\$this->proxy->isActive());
    }

    /**
     * @runInSeparateProcess
     * @preserveGlobalState disabled
     */
    public function testName()
    {
        \$this->assertEquals(session_name(), \$this->proxy->getName());
        \$this->proxy->setName('foo');
        \$this->assertEquals('foo', \$this->proxy->getName());
        \$this->assertEquals(session_name(), \$this->proxy->getName());
    }

    /**
     * @runInSeparateProcess
     * @preserveGlobalState disabled
     */
    public function testNameException()
    {
        \$this->expectException('LogicException');
        session_start();
        \$this->proxy->setName('foo');
    }

    /**
     * @runInSeparateProcess
     * @preserveGlobalState disabled
     */
    public function testId()
    {
        \$this->assertEquals(session_id(), \$this->proxy->getId());
        \$this->proxy->setId('foo');
        \$this->assertEquals('foo', \$this->proxy->getId());
        \$this->assertEquals(session_id(), \$this->proxy->getId());
    }

    /**
     * @runInSeparateProcess
     * @preserveGlobalState disabled
     */
    public function testIdException()
    {
        \$this->expectException('LogicException');
        session_start();
        \$this->proxy->setId('foo');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/Tests/Session/Storage/Proxy/AbstractProxyTest.php";
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

namespace Symfony\\Component\\HttpFoundation\\Tests\\Session\\Storage\\Proxy;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Session\\Storage\\Proxy\\AbstractProxy;
use Symfony\\Component\\HttpFoundation\\Session\\Storage\\Proxy\\SessionHandlerProxy;

/**
 * DevLaon class for AbstractProxy.
 *
 * @author Drak <drak@zikula.org>
 */
class AbstractProxyTest extends TestCase
{
    /**
     * @var AbstractProxy
     */
    protected \$proxy;

    protected function setUp(): void
    {
        \$this->proxy = \$this->getMockForAbstractClass(AbstractProxy::class);
    }

    protected function tearDown(): void
    {
        \$this->proxy = null;
    }

    public function testGetSaveHandlerName()
    {
        \$this->assertNull(\$this->proxy->getSaveHandlerName());
    }

    public function testIsSessionHandlerInterface()
    {
        \$this->assertFalse(\$this->proxy->isSessionHandlerInterface());
        \$sh = new SessionHandlerProxy(new \\SessionHandler());
        \$this->assertTrue(\$sh->isSessionHandlerInterface());
    }

    public function testIsWrapper()
    {
        \$this->assertFalse(\$this->proxy->isWrapper());
    }

    /**
     * @runInSeparateProcess
     * @preserveGlobalState disabled
     */
    public function testIsActive()
    {
        \$this->assertFalse(\$this->proxy->isActive());
        session_start();
        \$this->assertTrue(\$this->proxy->isActive());
    }

    /**
     * @runInSeparateProcess
     * @preserveGlobalState disabled
     */
    public function testName()
    {
        \$this->assertEquals(session_name(), \$this->proxy->getName());
        \$this->proxy->setName('foo');
        \$this->assertEquals('foo', \$this->proxy->getName());
        \$this->assertEquals(session_name(), \$this->proxy->getName());
    }

    /**
     * @runInSeparateProcess
     * @preserveGlobalState disabled
     */
    public function testNameException()
    {
        \$this->expectException('LogicException');
        session_start();
        \$this->proxy->setName('foo');
    }

    /**
     * @runInSeparateProcess
     * @preserveGlobalState disabled
     */
    public function testId()
    {
        \$this->assertEquals(session_id(), \$this->proxy->getId());
        \$this->proxy->setId('foo');
        \$this->assertEquals('foo', \$this->proxy->getId());
        \$this->assertEquals(session_id(), \$this->proxy->getId());
    }

    /**
     * @runInSeparateProcess
     * @preserveGlobalState disabled
     */
    public function testIdException()
    {
        \$this->expectException('LogicException');
        session_start();
        \$this->proxy->setId('foo');
    }
}
", "vendor/symfony/http-foundation/Tests/Session/Storage/Proxy/AbstractProxyTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/Tests/Session/Storage/Proxy/AbstractProxyTest.php");
    }
}
