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

/* vendor/symfony/http-foundation/Tests/Session/Storage/Handler/MigratingSessionHandlerTest.php */
class __TwigTemplate_c96c87362600582c989c82fdb72aefc37feab8a7e3d103f7eb272705473e1e38 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/Session/Storage/Handler/MigratingSessionHandlerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/Session/Storage/Handler/MigratingSessionHandlerTest.php"));

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
use Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\MigratingSessionHandler;

class MigratingSessionHandlerTest extends TestCase
{
    private \$dualHandler;
    private \$currentHandler;
    private \$writeOnlyHandler;

    protected function setUp(): void
    {
        \$this->currentHandler = \$this->createMock(\\SessionHandlerInterface::class);
        \$this->writeOnlyHandler = \$this->createMock(\\SessionHandlerInterface::class);

        \$this->dualHandler = new MigratingSessionHandler(\$this->currentHandler, \$this->writeOnlyHandler);
    }

    public function testInstanceOf()
    {
        \$this->assertInstanceOf(\\SessionHandlerInterface::class, \$this->dualHandler);
        \$this->assertInstanceOf(\\SessionUpdateTimestampHandlerInterface::class, \$this->dualHandler);
    }

    public function testClose()
    {
        \$this->currentHandler->expects(\$this->once())
            ->method('close')
            ->willReturn(true);

        \$this->writeOnlyHandler->expects(\$this->once())
            ->method('close')
            ->willReturn(false);

        \$result = \$this->dualHandler->close();

        \$this->assertTrue(\$result);
    }

    public function testDestroy()
    {
        \$sessionId = 'xyz';

        \$this->currentHandler->expects(\$this->once())
            ->method('destroy')
            ->with(\$sessionId)
            ->willReturn(true);

        \$this->writeOnlyHandler->expects(\$this->once())
            ->method('destroy')
            ->with(\$sessionId)
            ->willReturn(false);

        \$result = \$this->dualHandler->destroy(\$sessionId);

        \$this->assertTrue(\$result);
    }

    public function testGc()
    {
        \$maxlifetime = 357;

        \$this->currentHandler->expects(\$this->once())
            ->method('gc')
            ->with(\$maxlifetime)
            ->willReturn(true);

        \$this->writeOnlyHandler->expects(\$this->once())
            ->method('gc')
            ->with(\$maxlifetime)
            ->willReturn(false);

        \$result = \$this->dualHandler->gc(\$maxlifetime);
        \$this->assertTrue(\$result);
    }

    public function testOpen()
    {
        \$savePath = '/path/to/save/location';
        \$sessionName = 'xyz';

        \$this->currentHandler->expects(\$this->once())
            ->method('open')
            ->with(\$savePath, \$sessionName)
            ->willReturn(true);

        \$this->writeOnlyHandler->expects(\$this->once())
            ->method('open')
            ->with(\$savePath, \$sessionName)
            ->willReturn(false);

        \$result = \$this->dualHandler->open(\$savePath, \$sessionName);

        \$this->assertTrue(\$result);
    }

    public function testRead()
    {
        \$sessionId = 'xyz';
        \$readValue = 'something';

        \$this->currentHandler->expects(\$this->once())
            ->method('read')
            ->with(\$sessionId)
            ->willReturn(\$readValue);

        \$this->writeOnlyHandler->expects(\$this->never())
            ->method('read')
            ->with(\$this->any());

        \$result = \$this->dualHandler->read(\$sessionId);

        \$this->assertSame(\$readValue, \$result);
    }

    public function testWrite()
    {
        \$sessionId = 'xyz';
        \$data = 'my-serialized-data';

        \$this->currentHandler->expects(\$this->once())
            ->method('write')
            ->with(\$sessionId, \$data)
            ->willReturn(true);

        \$this->writeOnlyHandler->expects(\$this->once())
            ->method('write')
            ->with(\$sessionId, \$data)
            ->willReturn(false);

        \$result = \$this->dualHandler->write(\$sessionId, \$data);

        \$this->assertTrue(\$result);
    }

    public function testValidateId()
    {
        \$sessionId = 'xyz';
        \$readValue = 'something';

        \$this->currentHandler->expects(\$this->once())
            ->method('read')
            ->with(\$sessionId)
            ->willReturn(\$readValue);

        \$this->writeOnlyHandler->expects(\$this->never())
            ->method('read')
            ->with(\$this->any());

        \$result = \$this->dualHandler->validateId(\$sessionId);

        \$this->assertTrue(\$result);
    }

    public function testUpdateTimestamp()
    {
        \$sessionId = 'xyz';
        \$data = 'my-serialized-data';

        \$this->currentHandler->expects(\$this->once())
            ->method('write')
            ->with(\$sessionId, \$data)
            ->willReturn(true);

        \$this->writeOnlyHandler->expects(\$this->once())
            ->method('write')
            ->with(\$sessionId, \$data)
            ->willReturn(false);

        \$result = \$this->dualHandler->updateTimestamp(\$sessionId, \$data);

        \$this->assertTrue(\$result);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/Tests/Session/Storage/Handler/MigratingSessionHandlerTest.php";
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
use Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\MigratingSessionHandler;

class MigratingSessionHandlerTest extends TestCase
{
    private \$dualHandler;
    private \$currentHandler;
    private \$writeOnlyHandler;

    protected function setUp(): void
    {
        \$this->currentHandler = \$this->createMock(\\SessionHandlerInterface::class);
        \$this->writeOnlyHandler = \$this->createMock(\\SessionHandlerInterface::class);

        \$this->dualHandler = new MigratingSessionHandler(\$this->currentHandler, \$this->writeOnlyHandler);
    }

    public function testInstanceOf()
    {
        \$this->assertInstanceOf(\\SessionHandlerInterface::class, \$this->dualHandler);
        \$this->assertInstanceOf(\\SessionUpdateTimestampHandlerInterface::class, \$this->dualHandler);
    }

    public function testClose()
    {
        \$this->currentHandler->expects(\$this->once())
            ->method('close')
            ->willReturn(true);

        \$this->writeOnlyHandler->expects(\$this->once())
            ->method('close')
            ->willReturn(false);

        \$result = \$this->dualHandler->close();

        \$this->assertTrue(\$result);
    }

    public function testDestroy()
    {
        \$sessionId = 'xyz';

        \$this->currentHandler->expects(\$this->once())
            ->method('destroy')
            ->with(\$sessionId)
            ->willReturn(true);

        \$this->writeOnlyHandler->expects(\$this->once())
            ->method('destroy')
            ->with(\$sessionId)
            ->willReturn(false);

        \$result = \$this->dualHandler->destroy(\$sessionId);

        \$this->assertTrue(\$result);
    }

    public function testGc()
    {
        \$maxlifetime = 357;

        \$this->currentHandler->expects(\$this->once())
            ->method('gc')
            ->with(\$maxlifetime)
            ->willReturn(true);

        \$this->writeOnlyHandler->expects(\$this->once())
            ->method('gc')
            ->with(\$maxlifetime)
            ->willReturn(false);

        \$result = \$this->dualHandler->gc(\$maxlifetime);
        \$this->assertTrue(\$result);
    }

    public function testOpen()
    {
        \$savePath = '/path/to/save/location';
        \$sessionName = 'xyz';

        \$this->currentHandler->expects(\$this->once())
            ->method('open')
            ->with(\$savePath, \$sessionName)
            ->willReturn(true);

        \$this->writeOnlyHandler->expects(\$this->once())
            ->method('open')
            ->with(\$savePath, \$sessionName)
            ->willReturn(false);

        \$result = \$this->dualHandler->open(\$savePath, \$sessionName);

        \$this->assertTrue(\$result);
    }

    public function testRead()
    {
        \$sessionId = 'xyz';
        \$readValue = 'something';

        \$this->currentHandler->expects(\$this->once())
            ->method('read')
            ->with(\$sessionId)
            ->willReturn(\$readValue);

        \$this->writeOnlyHandler->expects(\$this->never())
            ->method('read')
            ->with(\$this->any());

        \$result = \$this->dualHandler->read(\$sessionId);

        \$this->assertSame(\$readValue, \$result);
    }

    public function testWrite()
    {
        \$sessionId = 'xyz';
        \$data = 'my-serialized-data';

        \$this->currentHandler->expects(\$this->once())
            ->method('write')
            ->with(\$sessionId, \$data)
            ->willReturn(true);

        \$this->writeOnlyHandler->expects(\$this->once())
            ->method('write')
            ->with(\$sessionId, \$data)
            ->willReturn(false);

        \$result = \$this->dualHandler->write(\$sessionId, \$data);

        \$this->assertTrue(\$result);
    }

    public function testValidateId()
    {
        \$sessionId = 'xyz';
        \$readValue = 'something';

        \$this->currentHandler->expects(\$this->once())
            ->method('read')
            ->with(\$sessionId)
            ->willReturn(\$readValue);

        \$this->writeOnlyHandler->expects(\$this->never())
            ->method('read')
            ->with(\$this->any());

        \$result = \$this->dualHandler->validateId(\$sessionId);

        \$this->assertTrue(\$result);
    }

    public function testUpdateTimestamp()
    {
        \$sessionId = 'xyz';
        \$data = 'my-serialized-data';

        \$this->currentHandler->expects(\$this->once())
            ->method('write')
            ->with(\$sessionId, \$data)
            ->willReturn(true);

        \$this->writeOnlyHandler->expects(\$this->once())
            ->method('write')
            ->with(\$sessionId, \$data)
            ->willReturn(false);

        \$result = \$this->dualHandler->updateTimestamp(\$sessionId, \$data);

        \$this->assertTrue(\$result);
    }
}
", "vendor/symfony/http-foundation/Tests/Session/Storage/Handler/MigratingSessionHandlerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/Tests/Session/Storage/Handler/MigratingSessionHandlerTest.php");
    }
}
