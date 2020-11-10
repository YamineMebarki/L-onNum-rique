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

/* vendor/symfony/http-foundation/Tests/Session/Storage/Proxy/SessionHandlerProxyTest.php */
class __TwigTemplate_aa755c8c23c8b2671141ee3ef8ac7c831ce9ff823553495ce25ecd248e181ed0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/Session/Storage/Proxy/SessionHandlerProxyTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/Session/Storage/Proxy/SessionHandlerProxyTest.php"));

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
use Symfony\\Component\\HttpFoundation\\Session\\Storage\\Proxy\\SessionHandlerProxy;

/**
 * Tests for SessionHandlerProxy class.
 *
 * @author Drak <drak@zikula.org>
 *
 * @runTestsInSeparateProcesses
 * @preserveGlobalState disabled
 */
class SessionHandlerProxyTest extends TestCase
{
    /**
     * @var \\PHPUnit\\Framework\\MockObject\\Matcher
     */
    private \$mock;

    /**
     * @var SessionHandlerProxy
     */
    private \$proxy;

    protected function setUp(): void
    {
        \$this->mock = \$this->getMockBuilder('SessionHandlerInterface')->getMock();
        \$this->proxy = new SessionHandlerProxy(\$this->mock);
    }

    protected function tearDown(): void
    {
        \$this->mock = null;
        \$this->proxy = null;
    }

    public function testOpenTrue()
    {
        \$this->mock->expects(\$this->once())
            ->method('open')
            ->willReturn(true);

        \$this->assertFalse(\$this->proxy->isActive());
        \$this->proxy->open('name', 'id');
        \$this->assertFalse(\$this->proxy->isActive());
    }

    public function testOpenFalse()
    {
        \$this->mock->expects(\$this->once())
            ->method('open')
            ->willReturn(false);

        \$this->assertFalse(\$this->proxy->isActive());
        \$this->proxy->open('name', 'id');
        \$this->assertFalse(\$this->proxy->isActive());
    }

    public function testClose()
    {
        \$this->mock->expects(\$this->once())
            ->method('close')
            ->willReturn(true);

        \$this->assertFalse(\$this->proxy->isActive());
        \$this->proxy->close();
        \$this->assertFalse(\$this->proxy->isActive());
    }

    public function testCloseFalse()
    {
        \$this->mock->expects(\$this->once())
            ->method('close')
            ->willReturn(false);

        \$this->assertFalse(\$this->proxy->isActive());
        \$this->proxy->close();
        \$this->assertFalse(\$this->proxy->isActive());
    }

    public function testRead()
    {
        \$this->mock->expects(\$this->once())
            ->method('read');

        \$this->proxy->read('id');
    }

    public function testWrite()
    {
        \$this->mock->expects(\$this->once())
            ->method('write');

        \$this->proxy->write('id', 'data');
    }

    public function testDestroy()
    {
        \$this->mock->expects(\$this->once())
            ->method('destroy');

        \$this->proxy->destroy('id');
    }

    public function testGc()
    {
        \$this->mock->expects(\$this->once())
            ->method('gc');

        \$this->proxy->gc(86400);
    }

    /**
     * @requires PHPUnit 5.1
     */
    public function testValidateId()
    {
        \$mock = \$this->getMockBuilder(['SessionHandlerInterface', 'SessionUpdateTimestampHandlerInterface'])->getMock();
        \$mock->expects(\$this->once())
            ->method('validateId');

        \$proxy = new SessionHandlerProxy(\$mock);
        \$proxy->validateId('id');

        \$this->assertTrue(\$this->proxy->validateId('id'));
    }

    /**
     * @requires PHPUnit 5.1
     */
    public function testUpdateTimestamp()
    {
        \$mock = \$this->getMockBuilder(['SessionHandlerInterface', 'SessionUpdateTimestampHandlerInterface'])->getMock();
        \$mock->expects(\$this->once())
            ->method('updateTimestamp')
            ->willReturn(false);

        \$proxy = new SessionHandlerProxy(\$mock);
        \$proxy->updateTimestamp('id', 'data');

        \$this->mock->expects(\$this->once())
            ->method('write');

        \$this->proxy->updateTimestamp('id', 'data');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/Tests/Session/Storage/Proxy/SessionHandlerProxyTest.php";
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
use Symfony\\Component\\HttpFoundation\\Session\\Storage\\Proxy\\SessionHandlerProxy;

/**
 * Tests for SessionHandlerProxy class.
 *
 * @author Drak <drak@zikula.org>
 *
 * @runTestsInSeparateProcesses
 * @preserveGlobalState disabled
 */
class SessionHandlerProxyTest extends TestCase
{
    /**
     * @var \\PHPUnit\\Framework\\MockObject\\Matcher
     */
    private \$mock;

    /**
     * @var SessionHandlerProxy
     */
    private \$proxy;

    protected function setUp(): void
    {
        \$this->mock = \$this->getMockBuilder('SessionHandlerInterface')->getMock();
        \$this->proxy = new SessionHandlerProxy(\$this->mock);
    }

    protected function tearDown(): void
    {
        \$this->mock = null;
        \$this->proxy = null;
    }

    public function testOpenTrue()
    {
        \$this->mock->expects(\$this->once())
            ->method('open')
            ->willReturn(true);

        \$this->assertFalse(\$this->proxy->isActive());
        \$this->proxy->open('name', 'id');
        \$this->assertFalse(\$this->proxy->isActive());
    }

    public function testOpenFalse()
    {
        \$this->mock->expects(\$this->once())
            ->method('open')
            ->willReturn(false);

        \$this->assertFalse(\$this->proxy->isActive());
        \$this->proxy->open('name', 'id');
        \$this->assertFalse(\$this->proxy->isActive());
    }

    public function testClose()
    {
        \$this->mock->expects(\$this->once())
            ->method('close')
            ->willReturn(true);

        \$this->assertFalse(\$this->proxy->isActive());
        \$this->proxy->close();
        \$this->assertFalse(\$this->proxy->isActive());
    }

    public function testCloseFalse()
    {
        \$this->mock->expects(\$this->once())
            ->method('close')
            ->willReturn(false);

        \$this->assertFalse(\$this->proxy->isActive());
        \$this->proxy->close();
        \$this->assertFalse(\$this->proxy->isActive());
    }

    public function testRead()
    {
        \$this->mock->expects(\$this->once())
            ->method('read');

        \$this->proxy->read('id');
    }

    public function testWrite()
    {
        \$this->mock->expects(\$this->once())
            ->method('write');

        \$this->proxy->write('id', 'data');
    }

    public function testDestroy()
    {
        \$this->mock->expects(\$this->once())
            ->method('destroy');

        \$this->proxy->destroy('id');
    }

    public function testGc()
    {
        \$this->mock->expects(\$this->once())
            ->method('gc');

        \$this->proxy->gc(86400);
    }

    /**
     * @requires PHPUnit 5.1
     */
    public function testValidateId()
    {
        \$mock = \$this->getMockBuilder(['SessionHandlerInterface', 'SessionUpdateTimestampHandlerInterface'])->getMock();
        \$mock->expects(\$this->once())
            ->method('validateId');

        \$proxy = new SessionHandlerProxy(\$mock);
        \$proxy->validateId('id');

        \$this->assertTrue(\$this->proxy->validateId('id'));
    }

    /**
     * @requires PHPUnit 5.1
     */
    public function testUpdateTimestamp()
    {
        \$mock = \$this->getMockBuilder(['SessionHandlerInterface', 'SessionUpdateTimestampHandlerInterface'])->getMock();
        \$mock->expects(\$this->once())
            ->method('updateTimestamp')
            ->willReturn(false);

        \$proxy = new SessionHandlerProxy(\$mock);
        \$proxy->updateTimestamp('id', 'data');

        \$this->mock->expects(\$this->once())
            ->method('write');

        \$this->proxy->updateTimestamp('id', 'data');
    }
}
", "vendor/symfony/http-foundation/Tests/Session/Storage/Proxy/SessionHandlerProxyTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/Tests/Session/Storage/Proxy/SessionHandlerProxyTest.php");
    }
}
