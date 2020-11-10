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

/* vendor/symfony/doctrine-bridge/Tests/Form/EventListener/MergeDoctrineCollectionListenerTest.php */
class __TwigTemplate_b2bb62727da12dd59ff0b0971fd67859763afee7a5b1c1a27c2235035b5d64d8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Tests/Form/EventListener/MergeDoctrineCollectionListenerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Tests/Form/EventListener/MergeDoctrineCollectionListenerTest.php"));

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

namespace Symfony\\Bridge\\Doctrine\\Tests\\Form\\EventListener;

use Doctrine\\Common\\Collections\\ArrayCollection;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Doctrine\\Form\\EventListener\\MergeDoctrineCollectionListener;
use Symfony\\Component\\EventDispatcher\\EventDispatcher;
use Symfony\\Component\\Form\\FormBuilder;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;

class MergeDoctrineCollectionListenerTest extends TestCase
{
    /** @var \\Doctrine\\Common\\Collections\\ArrayCollection */
    private \$collection;
    /** @var \\Symfony\\Component\\EventDispatcher\\EventDispatcher */
    private \$dispatcher;
    private \$factory;
    private \$form;

    protected function setUp(): void
    {
        \$this->collection = new ArrayCollection(['test']);
        \$this->dispatcher = new EventDispatcher();
        \$this->factory = \$this->getMockBuilder('Symfony\\Component\\Form\\FormFactoryInterface')->getMock();
        \$this->form = \$this->getBuilder()
            ->getForm();
    }

    protected function tearDown(): void
    {
        \$this->collection = null;
        \$this->dispatcher = null;
        \$this->factory = null;
        \$this->form = null;
    }

    protected function getBuilder()
    {
        return new FormBuilder('name', null, \$this->dispatcher, \$this->factory);
    }

    protected function getForm()
    {
        return \$this->getBuilder()
            ->setData(\$this->collection)
            ->addEventSubscriber(new MergeDoctrineCollectionListener())
            ->getForm();
    }

    public function testOnSubmitDoNothing()
    {
        \$submittedData = ['test'];
        \$event = new FormEvent(\$this->getForm(), \$submittedData);

        \$this->dispatcher->dispatch(\$event, FormEvents::SUBMIT);

        \$this->assertTrue(\$this->collection->contains('test'));
        \$this->assertSame(1, \$this->collection->count());
    }

    public function testOnSubmitNullClearCollection()
    {
        \$submittedData = [];
        \$event = new FormEvent(\$this->getForm(), \$submittedData);

        \$this->dispatcher->dispatch(\$event, FormEvents::SUBMIT);

        \$this->assertTrue(\$this->collection->isEmpty());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/doctrine-bridge/Tests/Form/EventListener/MergeDoctrineCollectionListenerTest.php";
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

namespace Symfony\\Bridge\\Doctrine\\Tests\\Form\\EventListener;

use Doctrine\\Common\\Collections\\ArrayCollection;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Doctrine\\Form\\EventListener\\MergeDoctrineCollectionListener;
use Symfony\\Component\\EventDispatcher\\EventDispatcher;
use Symfony\\Component\\Form\\FormBuilder;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;

class MergeDoctrineCollectionListenerTest extends TestCase
{
    /** @var \\Doctrine\\Common\\Collections\\ArrayCollection */
    private \$collection;
    /** @var \\Symfony\\Component\\EventDispatcher\\EventDispatcher */
    private \$dispatcher;
    private \$factory;
    private \$form;

    protected function setUp(): void
    {
        \$this->collection = new ArrayCollection(['test']);
        \$this->dispatcher = new EventDispatcher();
        \$this->factory = \$this->getMockBuilder('Symfony\\Component\\Form\\FormFactoryInterface')->getMock();
        \$this->form = \$this->getBuilder()
            ->getForm();
    }

    protected function tearDown(): void
    {
        \$this->collection = null;
        \$this->dispatcher = null;
        \$this->factory = null;
        \$this->form = null;
    }

    protected function getBuilder()
    {
        return new FormBuilder('name', null, \$this->dispatcher, \$this->factory);
    }

    protected function getForm()
    {
        return \$this->getBuilder()
            ->setData(\$this->collection)
            ->addEventSubscriber(new MergeDoctrineCollectionListener())
            ->getForm();
    }

    public function testOnSubmitDoNothing()
    {
        \$submittedData = ['test'];
        \$event = new FormEvent(\$this->getForm(), \$submittedData);

        \$this->dispatcher->dispatch(\$event, FormEvents::SUBMIT);

        \$this->assertTrue(\$this->collection->contains('test'));
        \$this->assertSame(1, \$this->collection->count());
    }

    public function testOnSubmitNullClearCollection()
    {
        \$submittedData = [];
        \$event = new FormEvent(\$this->getForm(), \$submittedData);

        \$this->dispatcher->dispatch(\$event, FormEvents::SUBMIT);

        \$this->assertTrue(\$this->collection->isEmpty());
    }
}
", "vendor/symfony/doctrine-bridge/Tests/Form/EventListener/MergeDoctrineCollectionListenerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/doctrine-bridge/Tests/Form/EventListener/MergeDoctrineCollectionListenerTest.php");
    }
}
