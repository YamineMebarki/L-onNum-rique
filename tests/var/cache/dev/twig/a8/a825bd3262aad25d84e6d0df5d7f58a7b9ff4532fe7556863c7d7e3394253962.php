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

/* vendor/symfony/doctrine-bridge/Tests/ContainerAwareEventManagerTest.php */
class __TwigTemplate_f8a0634ef08204dea550ac9048663335acc719dbc1d718975ae75b18a034f30e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Tests/ContainerAwareEventManagerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Tests/ContainerAwareEventManagerTest.php"));

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

namespace Symfony\\Bridge\\Doctrine\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager;
use Symfony\\Component\\DependencyInjection\\Container;

class ContainerAwareEventManagerTest extends TestCase
{
    private \$container;
    private \$evm;

    protected function setUp(): void
    {
        \$this->container = new Container();
        \$this->evm = new ContainerAwareEventManager(\$this->container);
    }

    public function testDispatchEvent()
    {
        \$this->container->set('lazy', \$listener1 = new MyListener());
        \$this->evm->addEventListener('foo', 'lazy');
        \$this->evm->addEventListener('foo', \$listener2 = new MyListener());

        \$this->evm->dispatchEvent('foo');

        \$this->assertTrue(\$listener1->called);
        \$this->assertTrue(\$listener2->called);
    }

    public function testAddEventListenerAfterDispatchEvent()
    {
        \$this->container->set('lazy1', \$listener1 = new MyListener());
        \$this->evm->addEventListener('foo', 'lazy1');
        \$this->evm->addEventListener('foo', \$listener2 = new MyListener());

        \$this->evm->dispatchEvent('foo');

        \$this->container->set('lazy2', \$listener3 = new MyListener());
        \$this->evm->addEventListener('foo', 'lazy2');
        \$this->evm->addEventListener('foo', \$listener4 = new MyListener());

        \$this->evm->dispatchEvent('foo');

        \$this->assertTrue(\$listener1->called);
        \$this->assertTrue(\$listener2->called);
        \$this->assertTrue(\$listener3->called);
        \$this->assertTrue(\$listener4->called);
    }

    public function testGetListenersForEvent()
    {
        \$this->container->set('lazy', \$listener1 = new MyListener());
        \$this->evm->addEventListener('foo', 'lazy');
        \$this->evm->addEventListener('foo', \$listener2 = new MyListener());

        \$this->assertSame([\$listener1, \$listener2], array_values(\$this->evm->getListeners('foo')));
    }

    public function testGetListeners()
    {
        \$this->container->set('lazy', \$listener1 = new MyListener());
        \$this->evm->addEventListener('foo', 'lazy');
        \$this->evm->addEventListener('foo', \$listener2 = new MyListener());

        \$this->assertSame([\$listener1, \$listener2], array_values(\$this->evm->getListeners()['foo']));
    }

    public function testRemoveEventListener()
    {
        \$this->container->set('lazy', \$listener1 = new MyListener());
        \$this->evm->addEventListener('foo', 'lazy');
        \$this->evm->addEventListener('foo', \$listener2 = new MyListener());

        \$this->evm->removeEventListener('foo', \$listener2);
        \$this->assertSame([\$listener1], array_values(\$this->evm->getListeners('foo')));

        \$this->evm->removeEventListener('foo', 'lazy');
        \$this->assertSame([], \$this->evm->getListeners('foo'));
    }

    public function testRemoveEventListenerAfterDispatchEvent()
    {
        \$this->container->set('lazy', \$listener1 = new MyListener());
        \$this->evm->addEventListener('foo', 'lazy');
        \$this->evm->addEventListener('foo', \$listener2 = new MyListener());

        \$this->evm->dispatchEvent('foo');

        \$this->evm->removeEventListener('foo', \$listener2);
        \$this->assertSame([\$listener1], array_values(\$this->evm->getListeners('foo')));

        \$this->evm->removeEventListener('foo', 'lazy');
        \$this->assertSame([], \$this->evm->getListeners('foo'));
    }
}

class MyListener
{
    public \$called = false;

    public function foo()
    {
        \$this->called = true;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/doctrine-bridge/Tests/ContainerAwareEventManagerTest.php";
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

namespace Symfony\\Bridge\\Doctrine\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager;
use Symfony\\Component\\DependencyInjection\\Container;

class ContainerAwareEventManagerTest extends TestCase
{
    private \$container;
    private \$evm;

    protected function setUp(): void
    {
        \$this->container = new Container();
        \$this->evm = new ContainerAwareEventManager(\$this->container);
    }

    public function testDispatchEvent()
    {
        \$this->container->set('lazy', \$listener1 = new MyListener());
        \$this->evm->addEventListener('foo', 'lazy');
        \$this->evm->addEventListener('foo', \$listener2 = new MyListener());

        \$this->evm->dispatchEvent('foo');

        \$this->assertTrue(\$listener1->called);
        \$this->assertTrue(\$listener2->called);
    }

    public function testAddEventListenerAfterDispatchEvent()
    {
        \$this->container->set('lazy1', \$listener1 = new MyListener());
        \$this->evm->addEventListener('foo', 'lazy1');
        \$this->evm->addEventListener('foo', \$listener2 = new MyListener());

        \$this->evm->dispatchEvent('foo');

        \$this->container->set('lazy2', \$listener3 = new MyListener());
        \$this->evm->addEventListener('foo', 'lazy2');
        \$this->evm->addEventListener('foo', \$listener4 = new MyListener());

        \$this->evm->dispatchEvent('foo');

        \$this->assertTrue(\$listener1->called);
        \$this->assertTrue(\$listener2->called);
        \$this->assertTrue(\$listener3->called);
        \$this->assertTrue(\$listener4->called);
    }

    public function testGetListenersForEvent()
    {
        \$this->container->set('lazy', \$listener1 = new MyListener());
        \$this->evm->addEventListener('foo', 'lazy');
        \$this->evm->addEventListener('foo', \$listener2 = new MyListener());

        \$this->assertSame([\$listener1, \$listener2], array_values(\$this->evm->getListeners('foo')));
    }

    public function testGetListeners()
    {
        \$this->container->set('lazy', \$listener1 = new MyListener());
        \$this->evm->addEventListener('foo', 'lazy');
        \$this->evm->addEventListener('foo', \$listener2 = new MyListener());

        \$this->assertSame([\$listener1, \$listener2], array_values(\$this->evm->getListeners()['foo']));
    }

    public function testRemoveEventListener()
    {
        \$this->container->set('lazy', \$listener1 = new MyListener());
        \$this->evm->addEventListener('foo', 'lazy');
        \$this->evm->addEventListener('foo', \$listener2 = new MyListener());

        \$this->evm->removeEventListener('foo', \$listener2);
        \$this->assertSame([\$listener1], array_values(\$this->evm->getListeners('foo')));

        \$this->evm->removeEventListener('foo', 'lazy');
        \$this->assertSame([], \$this->evm->getListeners('foo'));
    }

    public function testRemoveEventListenerAfterDispatchEvent()
    {
        \$this->container->set('lazy', \$listener1 = new MyListener());
        \$this->evm->addEventListener('foo', 'lazy');
        \$this->evm->addEventListener('foo', \$listener2 = new MyListener());

        \$this->evm->dispatchEvent('foo');

        \$this->evm->removeEventListener('foo', \$listener2);
        \$this->assertSame([\$listener1], array_values(\$this->evm->getListeners('foo')));

        \$this->evm->removeEventListener('foo', 'lazy');
        \$this->assertSame([], \$this->evm->getListeners('foo'));
    }
}

class MyListener
{
    public \$called = false;

    public function foo()
    {
        \$this->called = true;
    }
}
", "vendor/symfony/doctrine-bridge/Tests/ContainerAwareEventManagerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/doctrine-bridge/Tests/ContainerAwareEventManagerTest.php");
    }
}
