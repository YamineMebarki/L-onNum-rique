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

/* vendor/symfony/http-foundation/Tests/Session/Storage/Handler/StrictSessionHandlerTest.php */
class __TwigTemplate_4c958c8568b9b717b9474bafd3c85e3b865fdcda2ab64161078900f4b87add37 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/Session/Storage/Handler/StrictSessionHandlerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/Session/Storage/Handler/StrictSessionHandlerTest.php"));

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

namespace Symfony\\Component\\HttpFoundation\\Tests\\Session\\Storage\\Handler;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\AbstractSessionHandler;
use Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\StrictSessionHandler;

class StrictSessionHandlerTest extends TestCase
{
    public function testOpen()
    {
        \$handler = \$this->getMockBuilder('SessionHandlerInterface')->getMock();
        \$handler->expects(\$this->once())->method('open')
            ->with('path', 'name')->willReturn(true);
        \$proxy = new StrictSessionHandler(\$handler);

        \$this->assertInstanceOf('SessionUpdateTimestampHandlerInterface', \$proxy);
        \$this->assertInstanceOf(AbstractSessionHandler::class, \$proxy);
        \$this->assertTrue(\$proxy->open('path', 'name'));
    }

    public function testCloseSession()
    {
        \$handler = \$this->getMockBuilder('SessionHandlerInterface')->getMock();
        \$handler->expects(\$this->once())->method('close')
            ->willReturn(true);
        \$proxy = new StrictSessionHandler(\$handler);

        \$this->assertTrue(\$proxy->close());
    }

    public function testValidateIdOK()
    {
        \$handler = \$this->getMockBuilder('SessionHandlerInterface')->getMock();
        \$handler->expects(\$this->once())->method('read')
            ->with('id')->willReturn('data');
        \$proxy = new StrictSessionHandler(\$handler);

        \$this->assertTrue(\$proxy->validateId('id'));
    }

    public function testValidateIdKO()
    {
        \$handler = \$this->getMockBuilder('SessionHandlerInterface')->getMock();
        \$handler->expects(\$this->once())->method('read')
            ->with('id')->willReturn('');
        \$proxy = new StrictSessionHandler(\$handler);

        \$this->assertFalse(\$proxy->validateId('id'));
    }

    public function testRead()
    {
        \$handler = \$this->getMockBuilder('SessionHandlerInterface')->getMock();
        \$handler->expects(\$this->once())->method('read')
            ->with('id')->willReturn('data');
        \$proxy = new StrictSessionHandler(\$handler);

        \$this->assertSame('data', \$proxy->read('id'));
    }

    public function testReadWithValidateIdOK()
    {
        \$handler = \$this->getMockBuilder('SessionHandlerInterface')->getMock();
        \$handler->expects(\$this->once())->method('read')
            ->with('id')->willReturn('data');
        \$proxy = new StrictSessionHandler(\$handler);

        \$this->assertTrue(\$proxy->validateId('id'));
        \$this->assertSame('data', \$proxy->read('id'));
    }

    public function testReadWithValidateIdMismatch()
    {
        \$handler = \$this->getMockBuilder('SessionHandlerInterface')->getMock();
        \$handler->expects(\$this->exactly(2))->method('read')
            ->withConsecutive(['id1'], ['id2'])
            ->will(\$this->onConsecutiveCalls('data1', 'data2'));
        \$proxy = new StrictSessionHandler(\$handler);

        \$this->assertTrue(\$proxy->validateId('id1'));
        \$this->assertSame('data2', \$proxy->read('id2'));
    }

    public function testUpdateTimestamp()
    {
        \$handler = \$this->getMockBuilder('SessionHandlerInterface')->getMock();
        \$handler->expects(\$this->once())->method('write')
            ->with('id', 'data')->willReturn(true);
        \$proxy = new StrictSessionHandler(\$handler);

        \$this->assertTrue(\$proxy->updateTimestamp('id', 'data'));
    }

    public function testWrite()
    {
        \$handler = \$this->getMockBuilder('SessionHandlerInterface')->getMock();
        \$handler->expects(\$this->once())->method('write')
            ->with('id', 'data')->willReturn(true);
        \$proxy = new StrictSessionHandler(\$handler);

        \$this->assertTrue(\$proxy->write('id', 'data'));
    }

    public function testWriteEmptyNewSession()
    {
        \$handler = \$this->getMockBuilder('SessionHandlerInterface')->getMock();
        \$handler->expects(\$this->once())->method('read')
            ->with('id')->willReturn('');
        \$handler->expects(\$this->never())->method('write');
        \$handler->expects(\$this->once())->method('destroy')->willReturn(true);
        \$proxy = new StrictSessionHandler(\$handler);

        \$this->assertFalse(\$proxy->validateId('id'));
        \$this->assertSame('', \$proxy->read('id'));
        \$this->assertTrue(\$proxy->write('id', ''));
    }

    public function testWriteEmptyExistingSession()
    {
        \$handler = \$this->getMockBuilder('SessionHandlerInterface')->getMock();
        \$handler->expects(\$this->once())->method('read')
            ->with('id')->willReturn('data');
        \$handler->expects(\$this->never())->method('write');
        \$handler->expects(\$this->once())->method('destroy')->willReturn(true);
        \$proxy = new StrictSessionHandler(\$handler);

        \$this->assertSame('data', \$proxy->read('id'));
        \$this->assertTrue(\$proxy->write('id', ''));
    }

    public function testDestroy()
    {
        \$handler = \$this->getMockBuilder('SessionHandlerInterface')->getMock();
        \$handler->expects(\$this->once())->method('destroy')
            ->with('id')->willReturn(true);
        \$proxy = new StrictSessionHandler(\$handler);

        \$this->assertTrue(\$proxy->destroy('id'));
    }

    public function testDestroyNewSession()
    {
        \$handler = \$this->getMockBuilder('SessionHandlerInterface')->getMock();
        \$handler->expects(\$this->once())->method('read')
            ->with('id')->willReturn('');
        \$handler->expects(\$this->once())->method('destroy')->willReturn(true);
        \$proxy = new StrictSessionHandler(\$handler);

        \$this->assertSame('', \$proxy->read('id'));
        \$this->assertTrue(\$proxy->destroy('id'));
    }

    public function testDestroyNonEmptyNewSession()
    {
        \$handler = \$this->getMockBuilder('SessionHandlerInterface')->getMock();
        \$handler->expects(\$this->once())->method('read')
            ->with('id')->willReturn('');
        \$handler->expects(\$this->once())->method('write')
            ->with('id', 'data')->willReturn(true);
        \$handler->expects(\$this->once())->method('destroy')
            ->with('id')->willReturn(true);
        \$proxy = new StrictSessionHandler(\$handler);

        \$this->assertSame('', \$proxy->read('id'));
        \$this->assertTrue(\$proxy->write('id', 'data'));
        \$this->assertTrue(\$proxy->destroy('id'));
    }

    public function testGc()
    {
        \$handler = \$this->getMockBuilder('SessionHandlerInterface')->getMock();
        \$handler->expects(\$this->once())->method('gc')
            ->with(123)->willReturn(true);
        \$proxy = new StrictSessionHandler(\$handler);

        \$this->assertTrue(\$proxy->gc(123));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/Tests/Session/Storage/Handler/StrictSessionHandlerTest.php";
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

namespace Symfony\\Component\\HttpFoundation\\Tests\\Session\\Storage\\Handler;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\AbstractSessionHandler;
use Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\StrictSessionHandler;

class StrictSessionHandlerTest extends TestCase
{
    public function testOpen()
    {
        \$handler = \$this->getMockBuilder('SessionHandlerInterface')->getMock();
        \$handler->expects(\$this->once())->method('open')
            ->with('path', 'name')->willReturn(true);
        \$proxy = new StrictSessionHandler(\$handler);

        \$this->assertInstanceOf('SessionUpdateTimestampHandlerInterface', \$proxy);
        \$this->assertInstanceOf(AbstractSessionHandler::class, \$proxy);
        \$this->assertTrue(\$proxy->open('path', 'name'));
    }

    public function testCloseSession()
    {
        \$handler = \$this->getMockBuilder('SessionHandlerInterface')->getMock();
        \$handler->expects(\$this->once())->method('close')
            ->willReturn(true);
        \$proxy = new StrictSessionHandler(\$handler);

        \$this->assertTrue(\$proxy->close());
    }

    public function testValidateIdOK()
    {
        \$handler = \$this->getMockBuilder('SessionHandlerInterface')->getMock();
        \$handler->expects(\$this->once())->method('read')
            ->with('id')->willReturn('data');
        \$proxy = new StrictSessionHandler(\$handler);

        \$this->assertTrue(\$proxy->validateId('id'));
    }

    public function testValidateIdKO()
    {
        \$handler = \$this->getMockBuilder('SessionHandlerInterface')->getMock();
        \$handler->expects(\$this->once())->method('read')
            ->with('id')->willReturn('');
        \$proxy = new StrictSessionHandler(\$handler);

        \$this->assertFalse(\$proxy->validateId('id'));
    }

    public function testRead()
    {
        \$handler = \$this->getMockBuilder('SessionHandlerInterface')->getMock();
        \$handler->expects(\$this->once())->method('read')
            ->with('id')->willReturn('data');
        \$proxy = new StrictSessionHandler(\$handler);

        \$this->assertSame('data', \$proxy->read('id'));
    }

    public function testReadWithValidateIdOK()
    {
        \$handler = \$this->getMockBuilder('SessionHandlerInterface')->getMock();
        \$handler->expects(\$this->once())->method('read')
            ->with('id')->willReturn('data');
        \$proxy = new StrictSessionHandler(\$handler);

        \$this->assertTrue(\$proxy->validateId('id'));
        \$this->assertSame('data', \$proxy->read('id'));
    }

    public function testReadWithValidateIdMismatch()
    {
        \$handler = \$this->getMockBuilder('SessionHandlerInterface')->getMock();
        \$handler->expects(\$this->exactly(2))->method('read')
            ->withConsecutive(['id1'], ['id2'])
            ->will(\$this->onConsecutiveCalls('data1', 'data2'));
        \$proxy = new StrictSessionHandler(\$handler);

        \$this->assertTrue(\$proxy->validateId('id1'));
        \$this->assertSame('data2', \$proxy->read('id2'));
    }

    public function testUpdateTimestamp()
    {
        \$handler = \$this->getMockBuilder('SessionHandlerInterface')->getMock();
        \$handler->expects(\$this->once())->method('write')
            ->with('id', 'data')->willReturn(true);
        \$proxy = new StrictSessionHandler(\$handler);

        \$this->assertTrue(\$proxy->updateTimestamp('id', 'data'));
    }

    public function testWrite()
    {
        \$handler = \$this->getMockBuilder('SessionHandlerInterface')->getMock();
        \$handler->expects(\$this->once())->method('write')
            ->with('id', 'data')->willReturn(true);
        \$proxy = new StrictSessionHandler(\$handler);

        \$this->assertTrue(\$proxy->write('id', 'data'));
    }

    public function testWriteEmptyNewSession()
    {
        \$handler = \$this->getMockBuilder('SessionHandlerInterface')->getMock();
        \$handler->expects(\$this->once())->method('read')
            ->with('id')->willReturn('');
        \$handler->expects(\$this->never())->method('write');
        \$handler->expects(\$this->once())->method('destroy')->willReturn(true);
        \$proxy = new StrictSessionHandler(\$handler);

        \$this->assertFalse(\$proxy->validateId('id'));
        \$this->assertSame('', \$proxy->read('id'));
        \$this->assertTrue(\$proxy->write('id', ''));
    }

    public function testWriteEmptyExistingSession()
    {
        \$handler = \$this->getMockBuilder('SessionHandlerInterface')->getMock();
        \$handler->expects(\$this->once())->method('read')
            ->with('id')->willReturn('data');
        \$handler->expects(\$this->never())->method('write');
        \$handler->expects(\$this->once())->method('destroy')->willReturn(true);
        \$proxy = new StrictSessionHandler(\$handler);

        \$this->assertSame('data', \$proxy->read('id'));
        \$this->assertTrue(\$proxy->write('id', ''));
    }

    public function testDestroy()
    {
        \$handler = \$this->getMockBuilder('SessionHandlerInterface')->getMock();
        \$handler->expects(\$this->once())->method('destroy')
            ->with('id')->willReturn(true);
        \$proxy = new StrictSessionHandler(\$handler);

        \$this->assertTrue(\$proxy->destroy('id'));
    }

    public function testDestroyNewSession()
    {
        \$handler = \$this->getMockBuilder('SessionHandlerInterface')->getMock();
        \$handler->expects(\$this->once())->method('read')
            ->with('id')->willReturn('');
        \$handler->expects(\$this->once())->method('destroy')->willReturn(true);
        \$proxy = new StrictSessionHandler(\$handler);

        \$this->assertSame('', \$proxy->read('id'));
        \$this->assertTrue(\$proxy->destroy('id'));
    }

    public function testDestroyNonEmptyNewSession()
    {
        \$handler = \$this->getMockBuilder('SessionHandlerInterface')->getMock();
        \$handler->expects(\$this->once())->method('read')
            ->with('id')->willReturn('');
        \$handler->expects(\$this->once())->method('write')
            ->with('id', 'data')->willReturn(true);
        \$handler->expects(\$this->once())->method('destroy')
            ->with('id')->willReturn(true);
        \$proxy = new StrictSessionHandler(\$handler);

        \$this->assertSame('', \$proxy->read('id'));
        \$this->assertTrue(\$proxy->write('id', 'data'));
        \$this->assertTrue(\$proxy->destroy('id'));
    }

    public function testGc()
    {
        \$handler = \$this->getMockBuilder('SessionHandlerInterface')->getMock();
        \$handler->expects(\$this->once())->method('gc')
            ->with(123)->willReturn(true);
        \$proxy = new StrictSessionHandler(\$handler);

        \$this->assertTrue(\$proxy->gc(123));
    }
}
", "vendor/symfony/http-foundation/Tests/Session/Storage/Handler/StrictSessionHandlerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/Tests/Session/Storage/Handler/StrictSessionHandlerTest.php");
    }
}
