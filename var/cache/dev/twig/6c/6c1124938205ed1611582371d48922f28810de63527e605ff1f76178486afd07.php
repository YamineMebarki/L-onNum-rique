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

/* vendor/symfony/event-dispatcher/Tests/GenericEventTest.php */
class __TwigTemplate_ef08529058e67c83f77c201299fe6dfb0f529498270fc6e211e715d76fa07052 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/event-dispatcher/Tests/GenericEventTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/event-dispatcher/Tests/GenericEventTest.php"));

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

namespace Symfony\\Component\\EventDispatcher\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\EventDispatcher\\GenericEvent;

/**
 * DevLaon class for Event.
 */
class GenericEventTest extends TestCase
{
    /**
     * @var GenericEvent
     */
    private \$event;

    private \$subject;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp(): void
    {
        \$this->subject = new \\stdClass();
        \$this->event = new GenericEvent(\$this->subject, ['name' => 'Event']);
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown(): void
    {
        \$this->subject = null;
        \$this->event = null;
    }

    public function testConstruct()
    {
        \$this->assertEquals(\$this->event, new GenericEvent(\$this->subject, ['name' => 'Event']));
    }

    /**
     * Tests Event->getArgs().
     */
    public function testGetArguments()
    {
        // test getting all
        \$this->assertSame(['name' => 'Event'], \$this->event->getArguments());
    }

    public function testSetArguments()
    {
        \$result = \$this->event->setArguments(['foo' => 'bar']);
        \$this->assertSame(['foo' => 'bar'], \$this->event->getArguments());
        \$this->assertSame(\$this->event, \$result);
    }

    public function testSetArgument()
    {
        \$result = \$this->event->setArgument('foo2', 'bar2');
        \$this->assertSame(['name' => 'Event', 'foo2' => 'bar2'], \$this->event->getArguments());
        \$this->assertEquals(\$this->event, \$result);
    }

    public function testGetArgument()
    {
        // test getting key
        \$this->assertEquals('Event', \$this->event->getArgument('name'));
    }

    public function testGetArgException()
    {
        \$this->expectException('\\InvalidArgumentException');
        \$this->event->getArgument('nameNotExist');
    }

    public function testOffsetGet()
    {
        // test getting key
        \$this->assertEquals('Event', \$this->event['name']);

        // test getting invalid arg
        \$this->expectException('InvalidArgumentException');
        \$this->assertFalse(\$this->event['nameNotExist']);
    }

    public function testOffsetSet()
    {
        \$this->event['foo2'] = 'bar2';
        \$this->assertSame(['name' => 'Event', 'foo2' => 'bar2'], \$this->event->getArguments());
    }

    public function testOffsetUnset()
    {
        unset(\$this->event['name']);
        \$this->assertSame([], \$this->event->getArguments());
    }

    public function testOffsetIsset()
    {
        \$this->assertArrayHasKey('name', \$this->event);
        \$this->assertArrayNotHasKey('nameNotExist', \$this->event);
    }

    public function testHasArgument()
    {
        \$this->assertTrue(\$this->event->hasArgument('name'));
        \$this->assertFalse(\$this->event->hasArgument('nameNotExist'));
    }

    public function testGetSubject()
    {
        \$this->assertSame(\$this->subject, \$this->event->getSubject());
    }

    public function testHasIterator()
    {
        \$data = [];
        foreach (\$this->event as \$key => \$value) {
            \$data[\$key] = \$value;
        }
        \$this->assertEquals(['name' => 'Event'], \$data);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/event-dispatcher/Tests/GenericEventTest.php";
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

namespace Symfony\\Component\\EventDispatcher\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\EventDispatcher\\GenericEvent;

/**
 * DevLaon class for Event.
 */
class GenericEventTest extends TestCase
{
    /**
     * @var GenericEvent
     */
    private \$event;

    private \$subject;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp(): void
    {
        \$this->subject = new \\stdClass();
        \$this->event = new GenericEvent(\$this->subject, ['name' => 'Event']);
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown(): void
    {
        \$this->subject = null;
        \$this->event = null;
    }

    public function testConstruct()
    {
        \$this->assertEquals(\$this->event, new GenericEvent(\$this->subject, ['name' => 'Event']));
    }

    /**
     * Tests Event->getArgs().
     */
    public function testGetArguments()
    {
        // test getting all
        \$this->assertSame(['name' => 'Event'], \$this->event->getArguments());
    }

    public function testSetArguments()
    {
        \$result = \$this->event->setArguments(['foo' => 'bar']);
        \$this->assertSame(['foo' => 'bar'], \$this->event->getArguments());
        \$this->assertSame(\$this->event, \$result);
    }

    public function testSetArgument()
    {
        \$result = \$this->event->setArgument('foo2', 'bar2');
        \$this->assertSame(['name' => 'Event', 'foo2' => 'bar2'], \$this->event->getArguments());
        \$this->assertEquals(\$this->event, \$result);
    }

    public function testGetArgument()
    {
        // test getting key
        \$this->assertEquals('Event', \$this->event->getArgument('name'));
    }

    public function testGetArgException()
    {
        \$this->expectException('\\InvalidArgumentException');
        \$this->event->getArgument('nameNotExist');
    }

    public function testOffsetGet()
    {
        // test getting key
        \$this->assertEquals('Event', \$this->event['name']);

        // test getting invalid arg
        \$this->expectException('InvalidArgumentException');
        \$this->assertFalse(\$this->event['nameNotExist']);
    }

    public function testOffsetSet()
    {
        \$this->event['foo2'] = 'bar2';
        \$this->assertSame(['name' => 'Event', 'foo2' => 'bar2'], \$this->event->getArguments());
    }

    public function testOffsetUnset()
    {
        unset(\$this->event['name']);
        \$this->assertSame([], \$this->event->getArguments());
    }

    public function testOffsetIsset()
    {
        \$this->assertArrayHasKey('name', \$this->event);
        \$this->assertArrayNotHasKey('nameNotExist', \$this->event);
    }

    public function testHasArgument()
    {
        \$this->assertTrue(\$this->event->hasArgument('name'));
        \$this->assertFalse(\$this->event->hasArgument('nameNotExist'));
    }

    public function testGetSubject()
    {
        \$this->assertSame(\$this->subject, \$this->event->getSubject());
    }

    public function testHasIterator()
    {
        \$data = [];
        foreach (\$this->event as \$key => \$value) {
            \$data[\$key] = \$value;
        }
        \$this->assertEquals(['name' => 'Event'], \$data);
    }
}
", "vendor/symfony/event-dispatcher/Tests/GenericEventTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/event-dispatcher/Tests/GenericEventTest.php");
    }
}
