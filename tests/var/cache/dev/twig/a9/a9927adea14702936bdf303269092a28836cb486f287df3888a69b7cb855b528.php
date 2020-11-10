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

/* vendor/symfony/form/Tests/Extension/Core/EventListener/MergeCollectionListenerTest.php */
class __TwigTemplate_78af52715dbbbeedcd492eb2545d4e14d5df33819f898a5f65df567748484283 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/EventListener/MergeCollectionListenerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/EventListener/MergeCollectionListenerTest.php"));

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

namespace Symfony\\Component\\Form\\Tests\\Extension\\Core\\EventListener;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Form\\Extension\\Core\\EventListener\\MergeCollectionListener;
use Symfony\\Component\\Form\\FormEvent;

abstract class MergeCollectionListenerTest extends TestCase
{
    protected \$form;

    protected function setUp(): void
    {
        \$this->form = \$this->getForm('axes');
    }

    protected function tearDown(): void
    {
        \$this->form = null;
    }

    abstract protected function getBuilder(\$name = 'name');

    protected function getForm(\$name = 'name', \$propertyPath = null)
    {
        \$propertyPath = \$propertyPath ?: \$name;

        return \$this->getBuilder(\$name)->setAttribute('property_path', \$propertyPath)->getForm();
    }

    public function getBooleanMatrix1()
    {
        return [
            [true],
            [false],
        ];
    }

    public function getBooleanMatrix2()
    {
        return [
            [true, true],
            [true, false],
            [false, true],
            [false, false],
        ];
    }

    abstract protected function getData(array \$data);

    /**
     * @dataProvider getBooleanMatrix1
     */
    public function testAddExtraEntriesIfAllowAdd(\$allowDelete)
    {
        \$originalData = \$this->getData([1 => 'second']);
        \$newData = \$this->getData([0 => 'first', 1 => 'second', 2 => 'third']);

        \$listener = new MergeCollectionListener(true, \$allowDelete);

        \$this->form->setData(\$originalData);

        \$event = new FormEvent(\$this->form, \$newData);
        \$listener->onSubmit(\$event);

        // The original object was modified
        if (\\is_object(\$originalData)) {
            \$this->assertSame(\$originalData, \$event->getData());
        }

        // The original object matches the new object
        \$this->assertEquals(\$newData, \$event->getData());
    }

    /**
     * @dataProvider getBooleanMatrix1
     */
    public function testAddExtraEntriesIfAllowAddDontOverwriteExistingIndices(\$allowDelete)
    {
        \$originalData = \$this->getData([1 => 'first']);
        \$newData = \$this->getData([0 => 'first', 1 => 'second']);

        \$listener = new MergeCollectionListener(true, \$allowDelete);

        \$this->form->setData(\$originalData);

        \$event = new FormEvent(\$this->form, \$newData);
        \$listener->onSubmit(\$event);

        // The original object was modified
        if (\\is_object(\$originalData)) {
            \$this->assertSame(\$originalData, \$event->getData());
        }

        // The original object matches the new object
        \$this->assertEquals(\$this->getData([1 => 'first', 2 => 'second']), \$event->getData());
    }

    /**
     * @dataProvider getBooleanMatrix1
     */
    public function testDoNothingIfNotAllowAdd(\$allowDelete)
    {
        \$originalDataArray = [1 => 'second'];
        \$originalData = \$this->getData(\$originalDataArray);
        \$newData = \$this->getData([0 => 'first', 1 => 'second', 2 => 'third']);

        \$listener = new MergeCollectionListener(false, \$allowDelete);

        \$this->form->setData(\$originalData);

        \$event = new FormEvent(\$this->form, \$newData);
        \$listener->onSubmit(\$event);

        // We still have the original object
        if (\\is_object(\$originalData)) {
            \$this->assertSame(\$originalData, \$event->getData());
        }

        // Nothing was removed
        \$this->assertEquals(\$this->getData(\$originalDataArray), \$event->getData());
    }

    /**
     * @dataProvider getBooleanMatrix1
     */
    public function testRemoveMissingEntriesIfAllowDelete(\$allowAdd)
    {
        \$originalData = \$this->getData([0 => 'first', 1 => 'second', 2 => 'third']);
        \$newData = \$this->getData([1 => 'second']);

        \$listener = new MergeCollectionListener(\$allowAdd, true);

        \$this->form->setData(\$originalData);

        \$event = new FormEvent(\$this->form, \$newData);
        \$listener->onSubmit(\$event);

        // The original object was modified
        if (\\is_object(\$originalData)) {
            \$this->assertSame(\$originalData, \$event->getData());
        }

        // The original object matches the new object
        \$this->assertEquals(\$newData, \$event->getData());
    }

    /**
     * @dataProvider getBooleanMatrix1
     */
    public function testDoNothingIfNotAllowDelete(\$allowAdd)
    {
        \$originalDataArray = [0 => 'first', 1 => 'second', 2 => 'third'];
        \$originalData = \$this->getData(\$originalDataArray);
        \$newData = \$this->getData([1 => 'second']);

        \$listener = new MergeCollectionListener(\$allowAdd, false);

        \$this->form->setData(\$originalData);

        \$event = new FormEvent(\$this->form, \$newData);
        \$listener->onSubmit(\$event);

        // We still have the original object
        if (\\is_object(\$originalData)) {
            \$this->assertSame(\$originalData, \$event->getData());
        }

        // Nothing was removed
        \$this->assertEquals(\$this->getData(\$originalDataArray), \$event->getData());
    }

    /**
     * @dataProvider getBooleanMatrix2
     */
    public function testRequireArrayOrTraversable(\$allowAdd, \$allowDelete)
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\UnexpectedTypeException');
        \$newData = 'no array or traversable';
        \$event = new FormEvent(\$this->form, \$newData);
        \$listener = new MergeCollectionListener(\$allowAdd, \$allowDelete);
        \$listener->onSubmit(\$event);
    }

    public function testDealWithNullData()
    {
        \$originalData = \$this->getData([0 => 'first', 1 => 'second', 2 => 'third']);
        \$newData = null;

        \$listener = new MergeCollectionListener(false, false);

        \$this->form->setData(\$originalData);

        \$event = new FormEvent(\$this->form, \$newData);
        \$listener->onSubmit(\$event);

        \$this->assertSame(\$originalData, \$event->getData());
    }

    /**
     * @dataProvider getBooleanMatrix1
     */
    public function testDealWithNullOriginalDataIfAllowAdd(\$allowDelete)
    {
        \$originalData = null;
        \$newData = \$this->getData([0 => 'first', 1 => 'second', 2 => 'third']);

        \$listener = new MergeCollectionListener(true, \$allowDelete);

        \$this->form->setData(\$originalData);

        \$event = new FormEvent(\$this->form, \$newData);
        \$listener->onSubmit(\$event);

        \$this->assertSame(\$newData, \$event->getData());
    }

    /**
     * @dataProvider getBooleanMatrix1
     */
    public function testDontDealWithNullOriginalDataIfNotAllowAdd(\$allowDelete)
    {
        \$originalData = null;
        \$newData = \$this->getData([0 => 'first', 1 => 'second', 2 => 'third']);

        \$listener = new MergeCollectionListener(false, \$allowDelete);

        \$this->form->setData(\$originalData);

        \$event = new FormEvent(\$this->form, \$newData);
        \$listener->onSubmit(\$event);

        \$this->assertNull(\$event->getData());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/Extension/Core/EventListener/MergeCollectionListenerTest.php";
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

namespace Symfony\\Component\\Form\\Tests\\Extension\\Core\\EventListener;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Form\\Extension\\Core\\EventListener\\MergeCollectionListener;
use Symfony\\Component\\Form\\FormEvent;

abstract class MergeCollectionListenerTest extends TestCase
{
    protected \$form;

    protected function setUp(): void
    {
        \$this->form = \$this->getForm('axes');
    }

    protected function tearDown(): void
    {
        \$this->form = null;
    }

    abstract protected function getBuilder(\$name = 'name');

    protected function getForm(\$name = 'name', \$propertyPath = null)
    {
        \$propertyPath = \$propertyPath ?: \$name;

        return \$this->getBuilder(\$name)->setAttribute('property_path', \$propertyPath)->getForm();
    }

    public function getBooleanMatrix1()
    {
        return [
            [true],
            [false],
        ];
    }

    public function getBooleanMatrix2()
    {
        return [
            [true, true],
            [true, false],
            [false, true],
            [false, false],
        ];
    }

    abstract protected function getData(array \$data);

    /**
     * @dataProvider getBooleanMatrix1
     */
    public function testAddExtraEntriesIfAllowAdd(\$allowDelete)
    {
        \$originalData = \$this->getData([1 => 'second']);
        \$newData = \$this->getData([0 => 'first', 1 => 'second', 2 => 'third']);

        \$listener = new MergeCollectionListener(true, \$allowDelete);

        \$this->form->setData(\$originalData);

        \$event = new FormEvent(\$this->form, \$newData);
        \$listener->onSubmit(\$event);

        // The original object was modified
        if (\\is_object(\$originalData)) {
            \$this->assertSame(\$originalData, \$event->getData());
        }

        // The original object matches the new object
        \$this->assertEquals(\$newData, \$event->getData());
    }

    /**
     * @dataProvider getBooleanMatrix1
     */
    public function testAddExtraEntriesIfAllowAddDontOverwriteExistingIndices(\$allowDelete)
    {
        \$originalData = \$this->getData([1 => 'first']);
        \$newData = \$this->getData([0 => 'first', 1 => 'second']);

        \$listener = new MergeCollectionListener(true, \$allowDelete);

        \$this->form->setData(\$originalData);

        \$event = new FormEvent(\$this->form, \$newData);
        \$listener->onSubmit(\$event);

        // The original object was modified
        if (\\is_object(\$originalData)) {
            \$this->assertSame(\$originalData, \$event->getData());
        }

        // The original object matches the new object
        \$this->assertEquals(\$this->getData([1 => 'first', 2 => 'second']), \$event->getData());
    }

    /**
     * @dataProvider getBooleanMatrix1
     */
    public function testDoNothingIfNotAllowAdd(\$allowDelete)
    {
        \$originalDataArray = [1 => 'second'];
        \$originalData = \$this->getData(\$originalDataArray);
        \$newData = \$this->getData([0 => 'first', 1 => 'second', 2 => 'third']);

        \$listener = new MergeCollectionListener(false, \$allowDelete);

        \$this->form->setData(\$originalData);

        \$event = new FormEvent(\$this->form, \$newData);
        \$listener->onSubmit(\$event);

        // We still have the original object
        if (\\is_object(\$originalData)) {
            \$this->assertSame(\$originalData, \$event->getData());
        }

        // Nothing was removed
        \$this->assertEquals(\$this->getData(\$originalDataArray), \$event->getData());
    }

    /**
     * @dataProvider getBooleanMatrix1
     */
    public function testRemoveMissingEntriesIfAllowDelete(\$allowAdd)
    {
        \$originalData = \$this->getData([0 => 'first', 1 => 'second', 2 => 'third']);
        \$newData = \$this->getData([1 => 'second']);

        \$listener = new MergeCollectionListener(\$allowAdd, true);

        \$this->form->setData(\$originalData);

        \$event = new FormEvent(\$this->form, \$newData);
        \$listener->onSubmit(\$event);

        // The original object was modified
        if (\\is_object(\$originalData)) {
            \$this->assertSame(\$originalData, \$event->getData());
        }

        // The original object matches the new object
        \$this->assertEquals(\$newData, \$event->getData());
    }

    /**
     * @dataProvider getBooleanMatrix1
     */
    public function testDoNothingIfNotAllowDelete(\$allowAdd)
    {
        \$originalDataArray = [0 => 'first', 1 => 'second', 2 => 'third'];
        \$originalData = \$this->getData(\$originalDataArray);
        \$newData = \$this->getData([1 => 'second']);

        \$listener = new MergeCollectionListener(\$allowAdd, false);

        \$this->form->setData(\$originalData);

        \$event = new FormEvent(\$this->form, \$newData);
        \$listener->onSubmit(\$event);

        // We still have the original object
        if (\\is_object(\$originalData)) {
            \$this->assertSame(\$originalData, \$event->getData());
        }

        // Nothing was removed
        \$this->assertEquals(\$this->getData(\$originalDataArray), \$event->getData());
    }

    /**
     * @dataProvider getBooleanMatrix2
     */
    public function testRequireArrayOrTraversable(\$allowAdd, \$allowDelete)
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\UnexpectedTypeException');
        \$newData = 'no array or traversable';
        \$event = new FormEvent(\$this->form, \$newData);
        \$listener = new MergeCollectionListener(\$allowAdd, \$allowDelete);
        \$listener->onSubmit(\$event);
    }

    public function testDealWithNullData()
    {
        \$originalData = \$this->getData([0 => 'first', 1 => 'second', 2 => 'third']);
        \$newData = null;

        \$listener = new MergeCollectionListener(false, false);

        \$this->form->setData(\$originalData);

        \$event = new FormEvent(\$this->form, \$newData);
        \$listener->onSubmit(\$event);

        \$this->assertSame(\$originalData, \$event->getData());
    }

    /**
     * @dataProvider getBooleanMatrix1
     */
    public function testDealWithNullOriginalDataIfAllowAdd(\$allowDelete)
    {
        \$originalData = null;
        \$newData = \$this->getData([0 => 'first', 1 => 'second', 2 => 'third']);

        \$listener = new MergeCollectionListener(true, \$allowDelete);

        \$this->form->setData(\$originalData);

        \$event = new FormEvent(\$this->form, \$newData);
        \$listener->onSubmit(\$event);

        \$this->assertSame(\$newData, \$event->getData());
    }

    /**
     * @dataProvider getBooleanMatrix1
     */
    public function testDontDealWithNullOriginalDataIfNotAllowAdd(\$allowDelete)
    {
        \$originalData = null;
        \$newData = \$this->getData([0 => 'first', 1 => 'second', 2 => 'third']);

        \$listener = new MergeCollectionListener(false, \$allowDelete);

        \$this->form->setData(\$originalData);

        \$event = new FormEvent(\$this->form, \$newData);
        \$listener->onSubmit(\$event);

        \$this->assertNull(\$event->getData());
    }
}
", "vendor/symfony/form/Tests/Extension/Core/EventListener/MergeCollectionListenerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/Extension/Core/EventListener/MergeCollectionListenerTest.php");
    }
}
