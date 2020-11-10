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

/* vendor/symfony/event-dispatcher/Tests/Debug/WrappedListenerTest.php */
class __TwigTemplate_2035abd7e89742783bf160cb46b790add00a9403c1d00bb58f2d4d5cf9d9d4d8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/event-dispatcher/Tests/Debug/WrappedListenerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/event-dispatcher/Tests/Debug/WrappedListenerTest.php"));

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

namespace Symfony\\Component\\EventDispatcher\\Tests\\Debug;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\EventDispatcher\\Debug\\WrappedListener;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Stopwatch\\Stopwatch;

class WrappedListenerTest extends TestCase
{
    /**
     * @dataProvider provideListenersToDescribe
     */
    public function testListenerDescription(\$listener, \$expected)
    {
        \$wrappedListener = new WrappedListener(\$listener, null, \$this->getMockBuilder(Stopwatch::class)->getMock(), \$this->getMockBuilder(EventDispatcherInterface::class)->getMock());

        \$this->assertStringMatchesFormat(\$expected, \$wrappedListener->getPretty());
    }

    public function provideListenersToDescribe()
    {
        return [
            [new FooListener(), 'Symfony\\Component\\EventDispatcher\\Tests\\Debug\\FooListener::__invoke'],
            [[new FooListener(), 'listen'], 'Symfony\\Component\\EventDispatcher\\Tests\\Debug\\FooListener::listen'],
            [['Symfony\\Component\\EventDispatcher\\Tests\\Debug\\FooListener', 'listenStatic'], 'Symfony\\Component\\EventDispatcher\\Tests\\Debug\\FooListener::listenStatic'],
            [['Symfony\\Component\\EventDispatcher\\Tests\\Debug\\FooListener', 'invalidMethod'], 'Symfony\\Component\\EventDispatcher\\Tests\\Debug\\FooListener::invalidMethod'],
            ['var_dump', 'var_dump'],
            [function () {}, 'closure'],
            [\\Closure::fromCallable([new FooListener(), 'listen']), 'Symfony\\Component\\EventDispatcher\\Tests\\Debug\\FooListener::listen'],
            [\\Closure::fromCallable(['Symfony\\Component\\EventDispatcher\\Tests\\Debug\\FooListener', 'listenStatic']), 'Symfony\\Component\\EventDispatcher\\Tests\\Debug\\FooListener::listenStatic'],
            [\\Closure::fromCallable(function () {}), 'closure'],
        ];
    }
}

class FooListener
{
    public function listen()
    {
    }

    public function __invoke()
    {
    }

    public static function listenStatic()
    {
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/event-dispatcher/Tests/Debug/WrappedListenerTest.php";
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

namespace Symfony\\Component\\EventDispatcher\\Tests\\Debug;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\EventDispatcher\\Debug\\WrappedListener;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Stopwatch\\Stopwatch;

class WrappedListenerTest extends TestCase
{
    /**
     * @dataProvider provideListenersToDescribe
     */
    public function testListenerDescription(\$listener, \$expected)
    {
        \$wrappedListener = new WrappedListener(\$listener, null, \$this->getMockBuilder(Stopwatch::class)->getMock(), \$this->getMockBuilder(EventDispatcherInterface::class)->getMock());

        \$this->assertStringMatchesFormat(\$expected, \$wrappedListener->getPretty());
    }

    public function provideListenersToDescribe()
    {
        return [
            [new FooListener(), 'Symfony\\Component\\EventDispatcher\\Tests\\Debug\\FooListener::__invoke'],
            [[new FooListener(), 'listen'], 'Symfony\\Component\\EventDispatcher\\Tests\\Debug\\FooListener::listen'],
            [['Symfony\\Component\\EventDispatcher\\Tests\\Debug\\FooListener', 'listenStatic'], 'Symfony\\Component\\EventDispatcher\\Tests\\Debug\\FooListener::listenStatic'],
            [['Symfony\\Component\\EventDispatcher\\Tests\\Debug\\FooListener', 'invalidMethod'], 'Symfony\\Component\\EventDispatcher\\Tests\\Debug\\FooListener::invalidMethod'],
            ['var_dump', 'var_dump'],
            [function () {}, 'closure'],
            [\\Closure::fromCallable([new FooListener(), 'listen']), 'Symfony\\Component\\EventDispatcher\\Tests\\Debug\\FooListener::listen'],
            [\\Closure::fromCallable(['Symfony\\Component\\EventDispatcher\\Tests\\Debug\\FooListener', 'listenStatic']), 'Symfony\\Component\\EventDispatcher\\Tests\\Debug\\FooListener::listenStatic'],
            [\\Closure::fromCallable(function () {}), 'closure'],
        ];
    }
}

class FooListener
{
    public function listen()
    {
    }

    public function __invoke()
    {
    }

    public static function listenStatic()
    {
    }
}
", "vendor/symfony/event-dispatcher/Tests/Debug/WrappedListenerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/event-dispatcher/Tests/Debug/WrappedListenerTest.php");
    }
}
