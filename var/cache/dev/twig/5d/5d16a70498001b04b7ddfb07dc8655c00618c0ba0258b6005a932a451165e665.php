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

/* vendor/symfony/twig-bridge/Tests/Extension/WorkflowExtensionTest.php */
class __TwigTemplate_26e9804250344790ca915e2e334832dac5d6e9c04ef763e64d7af1e81d2988bf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Tests/Extension/WorkflowExtensionTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Tests/Extension/WorkflowExtensionTest.php"));

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

namespace Symfony\\Bridge\\Twig\\Tests\\Extension;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Twig\\Extension\\WorkflowExtension;
use Symfony\\Component\\Workflow\\Definition;
use Symfony\\Component\\Workflow\\MarkingStore\\MethodMarkingStore;
use Symfony\\Component\\Workflow\\Metadata\\InMemoryMetadataStore;
use Symfony\\Component\\Workflow\\Registry;
use Symfony\\Component\\Workflow\\SupportStrategy\\ClassInstanceSupportStrategy;
use Symfony\\Component\\Workflow\\SupportStrategy\\InstanceOfSupportStrategy;
use Symfony\\Component\\Workflow\\Transition;
use Symfony\\Component\\Workflow\\TransitionBlockerList;
use Symfony\\Component\\Workflow\\Workflow;

class WorkflowExtensionTest extends TestCase
{
    private \$extension;
    private \$t1;

    protected function setUp(): void
    {
        if (!class_exists(Workflow::class)) {
            \$this->markTestSkipped('The Workflow component is needed to run tests for this extension.');
        }

        \$places = ['ordered', 'waiting_for_payment', 'processed'];
        \$transitions = [
            \$this->t1 = new Transition('t1', 'ordered', 'waiting_for_payment'),
            new Transition('t2', 'waiting_for_payment', 'processed'),
        ];

        \$metadataStore = null;
        if (class_exists(InMemoryMetadataStore::class)) {
            \$transitionsMetadata = new \\SplObjectStorage();
            \$transitionsMetadata->attach(\$this->t1, ['title' => 't1 title']);
            \$metadataStore = new InMemoryMetadataStore(
                ['title' => 'workflow title'],
                ['orderer' => ['title' => 'ordered title']],
                \$transitionsMetadata
            );
        }
        \$definition = new Definition(\$places, \$transitions, null, \$metadataStore);
        \$workflow = new Workflow(\$definition, new MethodMarkingStore());

        \$registry = new Registry();
        \$addWorkflow = method_exists(\$registry, 'addWorkflow') ? 'addWorkflow' : 'add';
        \$supportStrategy = class_exists(InstanceOfSupportStrategy::class)
            ? new InstanceOfSupportStrategy(Subject::class)
            : new ClassInstanceSupportStrategy(Subject::class);
        \$registry->\$addWorkflow(\$workflow, \$supportStrategy);
        \$this->extension = new WorkflowExtension(\$registry);
    }

    public function testCanTransition()
    {
        \$subject = new Subject();

        \$this->assertTrue(\$this->extension->canTransition(\$subject, 't1'));
        \$this->assertFalse(\$this->extension->canTransition(\$subject, 't2'));
    }

    public function testGetEnabledTransitions()
    {
        \$subject = new Subject();

        \$transitions = \$this->extension->getEnabledTransitions(\$subject);

        \$this->assertCount(1, \$transitions);
        \$this->assertInstanceOf(Transition::class, \$transitions[0]);
        \$this->assertSame('t1', \$transitions[0]->getName());
    }

    public function testHasMarkedPlace()
    {
        \$subject = new Subject(['ordered' => 1, 'waiting_for_payment' => 1]);

        \$this->assertTrue(\$this->extension->hasMarkedPlace(\$subject, 'ordered'));
        \$this->assertTrue(\$this->extension->hasMarkedPlace(\$subject, 'waiting_for_payment'));
        \$this->assertFalse(\$this->extension->hasMarkedPlace(\$subject, 'processed'));
    }

    public function testGetMarkedPlaces()
    {
        \$subject = new Subject(['ordered' => 1, 'waiting_for_payment' => 1]);

        \$this->assertSame(['ordered', 'waiting_for_payment'], \$this->extension->getMarkedPlaces(\$subject));
        \$this->assertSame(\$subject->getMarking(), \$this->extension->getMarkedPlaces(\$subject, false));
    }

    public function testGetMetadata()
    {
        if (!class_exists(InMemoryMetadataStore::class)) {
            \$this->markTestSkipped('This test requires symfony/workflow:4.1.');
        }
        \$subject = new Subject();

        \$this->assertSame('workflow title', \$this->extension->getMetadata(\$subject, 'title'));
        \$this->assertSame('ordered title', \$this->extension->getMetadata(\$subject, 'title', 'orderer'));
        \$this->assertSame('t1 title', \$this->extension->getMetadata(\$subject, 'title', \$this->t1));
        \$this->assertNull(\$this->extension->getMetadata(\$subject, 'not found'));
        \$this->assertNull(\$this->extension->getMetadata(\$subject, 'not found', \$this->t1));
    }

    public function testbuildTransitionBlockerList()
    {
        if (!class_exists(TransitionBlockerList::class)) {
            \$this->markTestSkipped('This test requires symfony/workflow:4.1.');
        }
        \$subject = new Subject();

        \$list = \$this->extension->buildTransitionBlockerList(\$subject, 't1');
        \$this->assertInstanceOf(TransitionBlockerList::class, \$list);
        \$this->assertTrue(\$list->isEmpty());
    }
}

final class Subject
{
    private \$marking;

    public function __construct(\$marking = null)
    {
        \$this->marking = \$marking;
    }

    public function getMarking()
    {
        return \$this->marking;
    }

    public function setMarking(\$marking)
    {
        \$this->marking = \$marking;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bridge/Tests/Extension/WorkflowExtensionTest.php";
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

namespace Symfony\\Bridge\\Twig\\Tests\\Extension;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Twig\\Extension\\WorkflowExtension;
use Symfony\\Component\\Workflow\\Definition;
use Symfony\\Component\\Workflow\\MarkingStore\\MethodMarkingStore;
use Symfony\\Component\\Workflow\\Metadata\\InMemoryMetadataStore;
use Symfony\\Component\\Workflow\\Registry;
use Symfony\\Component\\Workflow\\SupportStrategy\\ClassInstanceSupportStrategy;
use Symfony\\Component\\Workflow\\SupportStrategy\\InstanceOfSupportStrategy;
use Symfony\\Component\\Workflow\\Transition;
use Symfony\\Component\\Workflow\\TransitionBlockerList;
use Symfony\\Component\\Workflow\\Workflow;

class WorkflowExtensionTest extends TestCase
{
    private \$extension;
    private \$t1;

    protected function setUp(): void
    {
        if (!class_exists(Workflow::class)) {
            \$this->markTestSkipped('The Workflow component is needed to run tests for this extension.');
        }

        \$places = ['ordered', 'waiting_for_payment', 'processed'];
        \$transitions = [
            \$this->t1 = new Transition('t1', 'ordered', 'waiting_for_payment'),
            new Transition('t2', 'waiting_for_payment', 'processed'),
        ];

        \$metadataStore = null;
        if (class_exists(InMemoryMetadataStore::class)) {
            \$transitionsMetadata = new \\SplObjectStorage();
            \$transitionsMetadata->attach(\$this->t1, ['title' => 't1 title']);
            \$metadataStore = new InMemoryMetadataStore(
                ['title' => 'workflow title'],
                ['orderer' => ['title' => 'ordered title']],
                \$transitionsMetadata
            );
        }
        \$definition = new Definition(\$places, \$transitions, null, \$metadataStore);
        \$workflow = new Workflow(\$definition, new MethodMarkingStore());

        \$registry = new Registry();
        \$addWorkflow = method_exists(\$registry, 'addWorkflow') ? 'addWorkflow' : 'add';
        \$supportStrategy = class_exists(InstanceOfSupportStrategy::class)
            ? new InstanceOfSupportStrategy(Subject::class)
            : new ClassInstanceSupportStrategy(Subject::class);
        \$registry->\$addWorkflow(\$workflow, \$supportStrategy);
        \$this->extension = new WorkflowExtension(\$registry);
    }

    public function testCanTransition()
    {
        \$subject = new Subject();

        \$this->assertTrue(\$this->extension->canTransition(\$subject, 't1'));
        \$this->assertFalse(\$this->extension->canTransition(\$subject, 't2'));
    }

    public function testGetEnabledTransitions()
    {
        \$subject = new Subject();

        \$transitions = \$this->extension->getEnabledTransitions(\$subject);

        \$this->assertCount(1, \$transitions);
        \$this->assertInstanceOf(Transition::class, \$transitions[0]);
        \$this->assertSame('t1', \$transitions[0]->getName());
    }

    public function testHasMarkedPlace()
    {
        \$subject = new Subject(['ordered' => 1, 'waiting_for_payment' => 1]);

        \$this->assertTrue(\$this->extension->hasMarkedPlace(\$subject, 'ordered'));
        \$this->assertTrue(\$this->extension->hasMarkedPlace(\$subject, 'waiting_for_payment'));
        \$this->assertFalse(\$this->extension->hasMarkedPlace(\$subject, 'processed'));
    }

    public function testGetMarkedPlaces()
    {
        \$subject = new Subject(['ordered' => 1, 'waiting_for_payment' => 1]);

        \$this->assertSame(['ordered', 'waiting_for_payment'], \$this->extension->getMarkedPlaces(\$subject));
        \$this->assertSame(\$subject->getMarking(), \$this->extension->getMarkedPlaces(\$subject, false));
    }

    public function testGetMetadata()
    {
        if (!class_exists(InMemoryMetadataStore::class)) {
            \$this->markTestSkipped('This test requires symfony/workflow:4.1.');
        }
        \$subject = new Subject();

        \$this->assertSame('workflow title', \$this->extension->getMetadata(\$subject, 'title'));
        \$this->assertSame('ordered title', \$this->extension->getMetadata(\$subject, 'title', 'orderer'));
        \$this->assertSame('t1 title', \$this->extension->getMetadata(\$subject, 'title', \$this->t1));
        \$this->assertNull(\$this->extension->getMetadata(\$subject, 'not found'));
        \$this->assertNull(\$this->extension->getMetadata(\$subject, 'not found', \$this->t1));
    }

    public function testbuildTransitionBlockerList()
    {
        if (!class_exists(TransitionBlockerList::class)) {
            \$this->markTestSkipped('This test requires symfony/workflow:4.1.');
        }
        \$subject = new Subject();

        \$list = \$this->extension->buildTransitionBlockerList(\$subject, 't1');
        \$this->assertInstanceOf(TransitionBlockerList::class, \$list);
        \$this->assertTrue(\$list->isEmpty());
    }
}

final class Subject
{
    private \$marking;

    public function __construct(\$marking = null)
    {
        \$this->marking = \$marking;
    }

    public function getMarking()
    {
        return \$this->marking;
    }

    public function setMarking(\$marking)
    {
        \$this->marking = \$marking;
    }
}
", "vendor/symfony/twig-bridge/Tests/Extension/WorkflowExtensionTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bridge/Tests/Extension/WorkflowExtensionTest.php");
    }
}
