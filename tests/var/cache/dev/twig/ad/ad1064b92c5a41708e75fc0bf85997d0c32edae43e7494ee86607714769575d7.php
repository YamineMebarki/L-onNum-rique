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

/* vendor/symfony/console/Tests/Command/LockableTraitTest.php */
class __TwigTemplate_37f226c8d3cb8286acf44cdec79bc265d3e4709b659f86b1451847684cd0adbf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Command/LockableTraitTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Command/LockableTraitTest.php"));

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

namespace Symfony\\Component\\Console\\Tests\\Command;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Console\\Tester\\CommandTester;
use Symfony\\Component\\Lock\\Factory;
use Symfony\\Component\\Lock\\Store\\FlockStore;
use Symfony\\Component\\Lock\\Store\\SemaphoreStore;

class LockableTraitTest extends TestCase
{
    protected static \$fixturesPath;

    public static function setUpBeforeClass(): void
    {
        self::\$fixturesPath = __DIR__.'/../Fixtures/';
        require_once self::\$fixturesPath.'/FooLockCommand.php';
        require_once self::\$fixturesPath.'/FooLock2Command.php';
    }

    public function testLockIsReleased()
    {
        \$command = new \\FooLockCommand();

        \$tester = new CommandTester(\$command);
        \$this->assertSame(2, \$tester->execute([]));
        \$this->assertSame(2, \$tester->execute([]));
    }

    public function testLockReturnsFalseIfAlreadyLockedByAnotherCommand()
    {
        \$command = new \\FooLockCommand();

        if (SemaphoreStore::isSupported()) {
            \$store = new SemaphoreStore();
        } else {
            \$store = new FlockStore();
        }

        \$lock = (new Factory(\$store))->createLock(\$command->getName());
        \$lock->acquire();

        \$tester = new CommandTester(\$command);
        \$this->assertSame(1, \$tester->execute([]));

        \$lock->release();
        \$this->assertSame(2, \$tester->execute([]));
    }

    public function testMultipleLockCallsThrowLogicException()
    {
        \$command = new \\FooLock2Command();

        \$tester = new CommandTester(\$command);
        \$this->assertSame(1, \$tester->execute([]));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Tests/Command/LockableTraitTest.php";
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

namespace Symfony\\Component\\Console\\Tests\\Command;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Console\\Tester\\CommandTester;
use Symfony\\Component\\Lock\\Factory;
use Symfony\\Component\\Lock\\Store\\FlockStore;
use Symfony\\Component\\Lock\\Store\\SemaphoreStore;

class LockableTraitTest extends TestCase
{
    protected static \$fixturesPath;

    public static function setUpBeforeClass(): void
    {
        self::\$fixturesPath = __DIR__.'/../Fixtures/';
        require_once self::\$fixturesPath.'/FooLockCommand.php';
        require_once self::\$fixturesPath.'/FooLock2Command.php';
    }

    public function testLockIsReleased()
    {
        \$command = new \\FooLockCommand();

        \$tester = new CommandTester(\$command);
        \$this->assertSame(2, \$tester->execute([]));
        \$this->assertSame(2, \$tester->execute([]));
    }

    public function testLockReturnsFalseIfAlreadyLockedByAnotherCommand()
    {
        \$command = new \\FooLockCommand();

        if (SemaphoreStore::isSupported()) {
            \$store = new SemaphoreStore();
        } else {
            \$store = new FlockStore();
        }

        \$lock = (new Factory(\$store))->createLock(\$command->getName());
        \$lock->acquire();

        \$tester = new CommandTester(\$command);
        \$this->assertSame(1, \$tester->execute([]));

        \$lock->release();
        \$this->assertSame(2, \$tester->execute([]));
    }

    public function testMultipleLockCallsThrowLogicException()
    {
        \$command = new \\FooLock2Command();

        \$tester = new CommandTester(\$command);
        \$this->assertSame(1, \$tester->execute([]));
    }
}
", "vendor/symfony/console/Tests/Command/LockableTraitTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/console/Tests/Command/LockableTraitTest.php");
    }
}
