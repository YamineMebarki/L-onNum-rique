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

/* vendor/symfony/event-dispatcher/Tests/LegacyEventDispatcherTest.php */
class __TwigTemplate_aabbedcd05ae79384490a0b22a763c1a0f8b677d526783786c9004d3214f908f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/event-dispatcher/Tests/LegacyEventDispatcherTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/event-dispatcher/Tests/LegacyEventDispatcherTest.php"));

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

use Symfony\\Component\\EventDispatcher\\Event;
use Symfony\\Component\\EventDispatcher\\EventDispatcher;
use Symfony\\Component\\EventDispatcher\\LegacyEventDispatcherProxy;
use Symfony\\Contracts\\EventDispatcher\\Event as ContractsEvent;

/**
 * @group legacy
 */
class LegacyEventDispatcherTest extends EventDispatcherTest
{
    /**
     * @group legacy
     * @expectedDeprecation The signature of the \"Symfony\\Component\\EventDispatcher\\Tests\\TestLegacyEventDispatcher::dispatch()\" method should be updated to \"dispatch(\$event, string \$eventName = null)\", not doing so is deprecated since Symfony 4.3.
     * @expectedDeprecation Calling the \"Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface::dispatch()\" method with the event name as the first argument is deprecated since Symfony 4.3, pass it as the second argument and provide the event object as the first argument instead.
     */
    public function testLegacySignatureWithoutEvent()
    {
        \$this->createEventDispatcher()->dispatch('foo');
    }

    /**
     * @group legacy
     * @expectedDeprecation The signature of the \"Symfony\\Component\\EventDispatcher\\Tests\\TestLegacyEventDispatcher::dispatch()\" method should be updated to \"dispatch(\$event, string \$eventName = null)\", not doing so is deprecated since Symfony 4.3.
     * @expectedDeprecation Calling the \"Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface::dispatch()\" method with the event name as the first argument is deprecated since Symfony 4.3, pass it as the second argument and provide the event object as the first argument instead.
     */
    public function testLegacySignatureWithEvent()
    {
        \$this->createEventDispatcher()->dispatch('foo', new Event());
    }

    public function testLegacySignatureWithNewEventObject()
    {
        \$this->expectException('TypeError');
        \$this->expectExceptionMessage('Argument 1 passed to \"Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface::dispatch()\" must be an object, string given.');
        \$this->createEventDispatcher()->dispatch('foo', new ContractsEvent());
    }

    protected function createEventDispatcher()
    {
        return LegacyEventDispatcherProxy::decorate(new TestLegacyEventDispatcher());
    }
}

class TestLegacyEventDispatcher extends EventDispatcher
{
    public function dispatch(\$eventName, Event \$event = null)
    {
        return parent::dispatch(\$event, \$eventName);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/event-dispatcher/Tests/LegacyEventDispatcherTest.php";
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

use Symfony\\Component\\EventDispatcher\\Event;
use Symfony\\Component\\EventDispatcher\\EventDispatcher;
use Symfony\\Component\\EventDispatcher\\LegacyEventDispatcherProxy;
use Symfony\\Contracts\\EventDispatcher\\Event as ContractsEvent;

/**
 * @group legacy
 */
class LegacyEventDispatcherTest extends EventDispatcherTest
{
    /**
     * @group legacy
     * @expectedDeprecation The signature of the \"Symfony\\Component\\EventDispatcher\\Tests\\TestLegacyEventDispatcher::dispatch()\" method should be updated to \"dispatch(\$event, string \$eventName = null)\", not doing so is deprecated since Symfony 4.3.
     * @expectedDeprecation Calling the \"Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface::dispatch()\" method with the event name as the first argument is deprecated since Symfony 4.3, pass it as the second argument and provide the event object as the first argument instead.
     */
    public function testLegacySignatureWithoutEvent()
    {
        \$this->createEventDispatcher()->dispatch('foo');
    }

    /**
     * @group legacy
     * @expectedDeprecation The signature of the \"Symfony\\Component\\EventDispatcher\\Tests\\TestLegacyEventDispatcher::dispatch()\" method should be updated to \"dispatch(\$event, string \$eventName = null)\", not doing so is deprecated since Symfony 4.3.
     * @expectedDeprecation Calling the \"Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface::dispatch()\" method with the event name as the first argument is deprecated since Symfony 4.3, pass it as the second argument and provide the event object as the first argument instead.
     */
    public function testLegacySignatureWithEvent()
    {
        \$this->createEventDispatcher()->dispatch('foo', new Event());
    }

    public function testLegacySignatureWithNewEventObject()
    {
        \$this->expectException('TypeError');
        \$this->expectExceptionMessage('Argument 1 passed to \"Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface::dispatch()\" must be an object, string given.');
        \$this->createEventDispatcher()->dispatch('foo', new ContractsEvent());
    }

    protected function createEventDispatcher()
    {
        return LegacyEventDispatcherProxy::decorate(new TestLegacyEventDispatcher());
    }
}

class TestLegacyEventDispatcher extends EventDispatcher
{
    public function dispatch(\$eventName, Event \$event = null)
    {
        return parent::dispatch(\$event, \$eventName);
    }
}
", "vendor/symfony/event-dispatcher/Tests/LegacyEventDispatcherTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/event-dispatcher/Tests/LegacyEventDispatcherTest.php");
    }
}
