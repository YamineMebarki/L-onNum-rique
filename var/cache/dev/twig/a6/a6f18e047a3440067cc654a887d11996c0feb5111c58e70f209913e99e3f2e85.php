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

/* vendor/symfony/form/Tests/ChoiceList/Factory/CachingFactoryDecoratorTest.php */
class __TwigTemplate_cc3dd9932747b89120310f90d0cc4faddfc7e95500e208eb0311f0a941cbfeec extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/ChoiceList/Factory/CachingFactoryDecoratorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/ChoiceList/Factory/CachingFactoryDecoratorTest.php"));

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

namespace Symfony\\Component\\Form\\Tests\\ChoiceList\\Factory;

use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Form\\ChoiceList\\ArrayChoiceList;
use Symfony\\Component\\Form\\ChoiceList\\Factory\\CachingFactoryDecorator;
use Symfony\\Component\\Form\\ChoiceList\\View\\ChoiceListView;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class CachingFactoryDecoratorTest extends TestCase
{
    /**
     * @var MockObject
     */
    private \$decoratedFactory;

    /**
     * @var CachingFactoryDecorator
     */
    private \$factory;

    protected function setUp(): void
    {
        \$this->decoratedFactory = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\Factory\\ChoiceListFactoryInterface')->getMock();
        \$this->factory = new CachingFactoryDecorator(\$this->decoratedFactory);
    }

    public function testCreateFromChoicesEmpty()
    {
        \$list = new ArrayChoiceList([]);

        \$this->decoratedFactory->expects(\$this->once())
            ->method('createListFromChoices')
            ->with([])
            ->willReturn(\$list);

        \$this->assertSame(\$list, \$this->factory->createListFromChoices([]));
        \$this->assertSame(\$list, \$this->factory->createListFromChoices([]));
    }

    public function testCreateFromChoicesComparesTraversableChoicesAsArray()
    {
        // The top-most traversable is converted to an array
        \$choices1 = new \\ArrayIterator(['A' => 'a']);
        \$choices2 = ['A' => 'a'];
        \$list = new ArrayChoiceList([]);

        \$this->decoratedFactory->expects(\$this->once())
            ->method('createListFromChoices')
            ->with(\$choices2)
            ->willReturn(\$list);

        \$this->assertSame(\$list, \$this->factory->createListFromChoices(\$choices1));
        \$this->assertSame(\$list, \$this->factory->createListFromChoices(\$choices2));
    }

    public function testCreateFromChoicesGroupedChoices()
    {
        \$choices1 = ['key' => ['A' => 'a']];
        \$choices2 = ['A' => 'a'];
        \$list1 = new ArrayChoiceList([]);
        \$list2 = new ArrayChoiceList([]);

        \$this->decoratedFactory->expects(\$this->at(0))
            ->method('createListFromChoices')
            ->with(\$choices1)
            ->willReturn(\$list1);
        \$this->decoratedFactory->expects(\$this->at(1))
            ->method('createListFromChoices')
            ->with(\$choices2)
            ->willReturn(\$list2);

        \$this->assertSame(\$list1, \$this->factory->createListFromChoices(\$choices1));
        \$this->assertSame(\$list2, \$this->factory->createListFromChoices(\$choices2));
    }

    /**
     * @dataProvider provideSameChoices
     */
    public function testCreateFromChoicesSameChoices(\$choice1, \$choice2)
    {
        \$choices1 = [\$choice1];
        \$choices2 = [\$choice2];
        \$list = new ArrayChoiceList([]);

        \$this->decoratedFactory->expects(\$this->once())
            ->method('createListFromChoices')
            ->with(\$choices1)
            ->willReturn(\$list);

        \$this->assertSame(\$list, \$this->factory->createListFromChoices(\$choices1));
        \$this->assertSame(\$list, \$this->factory->createListFromChoices(\$choices2));
    }

    /**
     * @dataProvider provideDistinguishedChoices
     */
    public function testCreateFromChoicesDifferentChoices(\$choice1, \$choice2)
    {
        \$choices1 = [\$choice1];
        \$choices2 = [\$choice2];
        \$list1 = new ArrayChoiceList([]);
        \$list2 = new ArrayChoiceList([]);

        \$this->decoratedFactory->expects(\$this->at(0))
            ->method('createListFromChoices')
            ->with(\$choices1)
            ->willReturn(\$list1);
        \$this->decoratedFactory->expects(\$this->at(1))
            ->method('createListFromChoices')
            ->with(\$choices2)
            ->willReturn(\$list2);

        \$this->assertSame(\$list1, \$this->factory->createListFromChoices(\$choices1));
        \$this->assertSame(\$list2, \$this->factory->createListFromChoices(\$choices2));
    }

    public function testCreateFromChoicesSameValueClosure()
    {
        \$choices = [1];
        \$list = new ArrayChoiceList([]);
        \$closure = function () {};

        \$this->decoratedFactory->expects(\$this->once())
            ->method('createListFromChoices')
            ->with(\$choices, \$closure)
            ->willReturn(\$list);

        \$this->assertSame(\$list, \$this->factory->createListFromChoices(\$choices, \$closure));
        \$this->assertSame(\$list, \$this->factory->createListFromChoices(\$choices, \$closure));
    }

    public function testCreateFromChoicesDifferentValueClosure()
    {
        \$choices = [1];
        \$list1 = new ArrayChoiceList([]);
        \$list2 = new ArrayChoiceList([]);
        \$closure1 = function () {};
        \$closure2 = function () {};

        \$this->decoratedFactory->expects(\$this->at(0))
            ->method('createListFromChoices')
            ->with(\$choices, \$closure1)
            ->willReturn(\$list1);
        \$this->decoratedFactory->expects(\$this->at(1))
            ->method('createListFromChoices')
            ->with(\$choices, \$closure2)
            ->willReturn(\$list2);

        \$this->assertSame(\$list1, \$this->factory->createListFromChoices(\$choices, \$closure1));
        \$this->assertSame(\$list2, \$this->factory->createListFromChoices(\$choices, \$closure2));
    }

    public function testCreateFromLoaderSameLoader()
    {
        \$loader = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\Loader\\ChoiceLoaderInterface')->getMock();
        \$list = new ArrayChoiceList([]);

        \$this->decoratedFactory->expects(\$this->once())
            ->method('createListFromLoader')
            ->with(\$loader)
            ->willReturn(\$list);

        \$this->assertSame(\$list, \$this->factory->createListFromLoader(\$loader));
        \$this->assertSame(\$list, \$this->factory->createListFromLoader(\$loader));
    }

    public function testCreateFromLoaderDifferentLoader()
    {
        \$loader1 = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\Loader\\ChoiceLoaderInterface')->getMock();
        \$loader2 = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\Loader\\ChoiceLoaderInterface')->getMock();
        \$list1 = new ArrayChoiceList([]);
        \$list2 = new ArrayChoiceList([]);

        \$this->decoratedFactory->expects(\$this->at(0))
            ->method('createListFromLoader')
            ->with(\$loader1)
            ->willReturn(\$list1);
        \$this->decoratedFactory->expects(\$this->at(1))
            ->method('createListFromLoader')
            ->with(\$loader2)
            ->willReturn(\$list2);

        \$this->assertSame(\$list1, \$this->factory->createListFromLoader(\$loader1));
        \$this->assertSame(\$list2, \$this->factory->createListFromLoader(\$loader2));
    }

    public function testCreateFromLoaderSameValueClosure()
    {
        \$loader = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\Loader\\ChoiceLoaderInterface')->getMock();
        \$list = new ArrayChoiceList([]);
        \$closure = function () {};

        \$this->decoratedFactory->expects(\$this->once())
            ->method('createListFromLoader')
            ->with(\$loader, \$closure)
            ->willReturn(\$list);

        \$this->assertSame(\$list, \$this->factory->createListFromLoader(\$loader, \$closure));
        \$this->assertSame(\$list, \$this->factory->createListFromLoader(\$loader, \$closure));
    }

    public function testCreateFromLoaderDifferentValueClosure()
    {
        \$loader = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\Loader\\ChoiceLoaderInterface')->getMock();
        \$list1 = new ArrayChoiceList([]);
        \$list2 = new ArrayChoiceList([]);
        \$closure1 = function () {};
        \$closure2 = function () {};

        \$this->decoratedFactory->expects(\$this->at(0))
            ->method('createListFromLoader')
            ->with(\$loader, \$closure1)
            ->willReturn(\$list1);
        \$this->decoratedFactory->expects(\$this->at(1))
            ->method('createListFromLoader')
            ->with(\$loader, \$closure2)
            ->willReturn(\$list2);

        \$this->assertSame(\$list1, \$this->factory->createListFromLoader(\$loader, \$closure1));
        \$this->assertSame(\$list2, \$this->factory->createListFromLoader(\$loader, \$closure2));
    }

    public function testCreateViewSamePreferredChoices()
    {
        \$preferred = ['a'];
        \$list = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface')->getMock();
        \$view = new ChoiceListView();

        \$this->decoratedFactory->expects(\$this->once())
            ->method('createView')
            ->with(\$list, \$preferred)
            ->willReturn(\$view);

        \$this->assertSame(\$view, \$this->factory->createView(\$list, \$preferred));
        \$this->assertSame(\$view, \$this->factory->createView(\$list, \$preferred));
    }

    public function testCreateViewDifferentPreferredChoices()
    {
        \$preferred1 = ['a'];
        \$preferred2 = ['b'];
        \$list = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface')->getMock();
        \$view1 = new ChoiceListView();
        \$view2 = new ChoiceListView();

        \$this->decoratedFactory->expects(\$this->at(0))
            ->method('createView')
            ->with(\$list, \$preferred1)
            ->willReturn(\$view1);
        \$this->decoratedFactory->expects(\$this->at(1))
            ->method('createView')
            ->with(\$list, \$preferred2)
            ->willReturn(\$view2);

        \$this->assertSame(\$view1, \$this->factory->createView(\$list, \$preferred1));
        \$this->assertSame(\$view2, \$this->factory->createView(\$list, \$preferred2));
    }

    public function testCreateViewSamePreferredChoicesClosure()
    {
        \$preferred = function () {};
        \$list = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface')->getMock();
        \$view = new ChoiceListView();

        \$this->decoratedFactory->expects(\$this->once())
            ->method('createView')
            ->with(\$list, \$preferred)
            ->willReturn(\$view);

        \$this->assertSame(\$view, \$this->factory->createView(\$list, \$preferred));
        \$this->assertSame(\$view, \$this->factory->createView(\$list, \$preferred));
    }

    public function testCreateViewDifferentPreferredChoicesClosure()
    {
        \$preferred1 = function () {};
        \$preferred2 = function () {};
        \$list = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface')->getMock();
        \$view1 = new ChoiceListView();
        \$view2 = new ChoiceListView();

        \$this->decoratedFactory->expects(\$this->at(0))
            ->method('createView')
            ->with(\$list, \$preferred1)
            ->willReturn(\$view1);
        \$this->decoratedFactory->expects(\$this->at(1))
            ->method('createView')
            ->with(\$list, \$preferred2)
            ->willReturn(\$view2);

        \$this->assertSame(\$view1, \$this->factory->createView(\$list, \$preferred1));
        \$this->assertSame(\$view2, \$this->factory->createView(\$list, \$preferred2));
    }

    public function testCreateViewSameLabelClosure()
    {
        \$labels = function () {};
        \$list = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface')->getMock();
        \$view = new ChoiceListView();

        \$this->decoratedFactory->expects(\$this->once())
            ->method('createView')
            ->with(\$list, null, \$labels)
            ->willReturn(\$view);

        \$this->assertSame(\$view, \$this->factory->createView(\$list, null, \$labels));
        \$this->assertSame(\$view, \$this->factory->createView(\$list, null, \$labels));
    }

    public function testCreateViewDifferentLabelClosure()
    {
        \$labels1 = function () {};
        \$labels2 = function () {};
        \$list = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface')->getMock();
        \$view1 = new ChoiceListView();
        \$view2 = new ChoiceListView();

        \$this->decoratedFactory->expects(\$this->at(0))
            ->method('createView')
            ->with(\$list, null, \$labels1)
            ->willReturn(\$view1);
        \$this->decoratedFactory->expects(\$this->at(1))
            ->method('createView')
            ->with(\$list, null, \$labels2)
            ->willReturn(\$view2);

        \$this->assertSame(\$view1, \$this->factory->createView(\$list, null, \$labels1));
        \$this->assertSame(\$view2, \$this->factory->createView(\$list, null, \$labels2));
    }

    public function testCreateViewSameIndexClosure()
    {
        \$index = function () {};
        \$list = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface')->getMock();
        \$view = new ChoiceListView();

        \$this->decoratedFactory->expects(\$this->once())
            ->method('createView')
            ->with(\$list, null, null, \$index)
            ->willReturn(\$view);

        \$this->assertSame(\$view, \$this->factory->createView(\$list, null, null, \$index));
        \$this->assertSame(\$view, \$this->factory->createView(\$list, null, null, \$index));
    }

    public function testCreateViewDifferentIndexClosure()
    {
        \$index1 = function () {};
        \$index2 = function () {};
        \$list = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface')->getMock();
        \$view1 = new ChoiceListView();
        \$view2 = new ChoiceListView();

        \$this->decoratedFactory->expects(\$this->at(0))
            ->method('createView')
            ->with(\$list, null, null, \$index1)
            ->willReturn(\$view1);
        \$this->decoratedFactory->expects(\$this->at(1))
            ->method('createView')
            ->with(\$list, null, null, \$index2)
            ->willReturn(\$view2);

        \$this->assertSame(\$view1, \$this->factory->createView(\$list, null, null, \$index1));
        \$this->assertSame(\$view2, \$this->factory->createView(\$list, null, null, \$index2));
    }

    public function testCreateViewSameGroupByClosure()
    {
        \$groupBy = function () {};
        \$list = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface')->getMock();
        \$view = new ChoiceListView();

        \$this->decoratedFactory->expects(\$this->once())
            ->method('createView')
            ->with(\$list, null, null, null, \$groupBy)
            ->willReturn(\$view);

        \$this->assertSame(\$view, \$this->factory->createView(\$list, null, null, null, \$groupBy));
        \$this->assertSame(\$view, \$this->factory->createView(\$list, null, null, null, \$groupBy));
    }

    public function testCreateViewDifferentGroupByClosure()
    {
        \$groupBy1 = function () {};
        \$groupBy2 = function () {};
        \$list = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface')->getMock();
        \$view1 = new ChoiceListView();
        \$view2 = new ChoiceListView();

        \$this->decoratedFactory->expects(\$this->at(0))
            ->method('createView')
            ->with(\$list, null, null, null, \$groupBy1)
            ->willReturn(\$view1);
        \$this->decoratedFactory->expects(\$this->at(1))
            ->method('createView')
            ->with(\$list, null, null, null, \$groupBy2)
            ->willReturn(\$view2);

        \$this->assertSame(\$view1, \$this->factory->createView(\$list, null, null, null, \$groupBy1));
        \$this->assertSame(\$view2, \$this->factory->createView(\$list, null, null, null, \$groupBy2));
    }

    public function testCreateViewSameAttributes()
    {
        \$attr = ['class' => 'foobar'];
        \$list = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface')->getMock();
        \$view = new ChoiceListView();

        \$this->decoratedFactory->expects(\$this->once())
            ->method('createView')
            ->with(\$list, null, null, null, null, \$attr)
            ->willReturn(\$view);

        \$this->assertSame(\$view, \$this->factory->createView(\$list, null, null, null, null, \$attr));
        \$this->assertSame(\$view, \$this->factory->createView(\$list, null, null, null, null, \$attr));
    }

    public function testCreateViewDifferentAttributes()
    {
        \$attr1 = ['class' => 'foobar1'];
        \$attr2 = ['class' => 'foobar2'];
        \$list = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface')->getMock();
        \$view1 = new ChoiceListView();
        \$view2 = new ChoiceListView();

        \$this->decoratedFactory->expects(\$this->at(0))
            ->method('createView')
            ->with(\$list, null, null, null, null, \$attr1)
            ->willReturn(\$view1);
        \$this->decoratedFactory->expects(\$this->at(1))
            ->method('createView')
            ->with(\$list, null, null, null, null, \$attr2)
            ->willReturn(\$view2);

        \$this->assertSame(\$view1, \$this->factory->createView(\$list, null, null, null, null, \$attr1));
        \$this->assertSame(\$view2, \$this->factory->createView(\$list, null, null, null, null, \$attr2));
    }

    public function testCreateViewSameAttributesClosure()
    {
        \$attr = function () {};
        \$list = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface')->getMock();
        \$view = new ChoiceListView();

        \$this->decoratedFactory->expects(\$this->once())
            ->method('createView')
            ->with(\$list, null, null, null, null, \$attr)
            ->willReturn(\$view);

        \$this->assertSame(\$view, \$this->factory->createView(\$list, null, null, null, null, \$attr));
        \$this->assertSame(\$view, \$this->factory->createView(\$list, null, null, null, null, \$attr));
    }

    public function testCreateViewDifferentAttributesClosure()
    {
        \$attr1 = function () {};
        \$attr2 = function () {};
        \$list = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface')->getMock();
        \$view1 = new ChoiceListView();
        \$view2 = new ChoiceListView();

        \$this->decoratedFactory->expects(\$this->at(0))
            ->method('createView')
            ->with(\$list, null, null, null, null, \$attr1)
            ->willReturn(\$view1);
        \$this->decoratedFactory->expects(\$this->at(1))
            ->method('createView')
            ->with(\$list, null, null, null, null, \$attr2)
            ->willReturn(\$view2);

        \$this->assertSame(\$view1, \$this->factory->createView(\$list, null, null, null, null, \$attr1));
        \$this->assertSame(\$view2, \$this->factory->createView(\$list, null, null, null, null, \$attr2));
    }

    public function provideSameChoices()
    {
        \$object = (object) ['foo' => 'bar'];

        return [
            [0, 0],
            ['a', 'a'],
            // https://github.com/symfony/symfony/issues/10409
            [\\chr(181).'meter', \\chr(181).'meter'], // UTF-8
            [\$object, \$object],
        ];
    }

    public function provideDistinguishedChoices()
    {
        return [
            [0, false],
            [0, null],
            [0, '0'],
            [0, ''],
            [1, true],
            [1, '1'],
            [1, 'a'],
            ['', false],
            ['', null],
            [false, null],
            // Same properties, but not identical
            [(object) ['foo' => 'bar'], (object) ['foo' => 'bar']],
        ];
    }

    public function provideSameKeyChoices()
    {
        // Only test types here that can be used as array keys
        return [
            [0, 0],
            [0, '0'],
            ['a', 'a'],
            [\\chr(181).'meter', \\chr(181).'meter'],
        ];
    }

    public function provideDistinguishedKeyChoices()
    {
        // Only test types here that can be used as array keys
        return [
            [0, ''],
            [1, 'a'],
            ['', 'a'],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/ChoiceList/Factory/CachingFactoryDecoratorTest.php";
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

namespace Symfony\\Component\\Form\\Tests\\ChoiceList\\Factory;

use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Form\\ChoiceList\\ArrayChoiceList;
use Symfony\\Component\\Form\\ChoiceList\\Factory\\CachingFactoryDecorator;
use Symfony\\Component\\Form\\ChoiceList\\View\\ChoiceListView;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class CachingFactoryDecoratorTest extends TestCase
{
    /**
     * @var MockObject
     */
    private \$decoratedFactory;

    /**
     * @var CachingFactoryDecorator
     */
    private \$factory;

    protected function setUp(): void
    {
        \$this->decoratedFactory = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\Factory\\ChoiceListFactoryInterface')->getMock();
        \$this->factory = new CachingFactoryDecorator(\$this->decoratedFactory);
    }

    public function testCreateFromChoicesEmpty()
    {
        \$list = new ArrayChoiceList([]);

        \$this->decoratedFactory->expects(\$this->once())
            ->method('createListFromChoices')
            ->with([])
            ->willReturn(\$list);

        \$this->assertSame(\$list, \$this->factory->createListFromChoices([]));
        \$this->assertSame(\$list, \$this->factory->createListFromChoices([]));
    }

    public function testCreateFromChoicesComparesTraversableChoicesAsArray()
    {
        // The top-most traversable is converted to an array
        \$choices1 = new \\ArrayIterator(['A' => 'a']);
        \$choices2 = ['A' => 'a'];
        \$list = new ArrayChoiceList([]);

        \$this->decoratedFactory->expects(\$this->once())
            ->method('createListFromChoices')
            ->with(\$choices2)
            ->willReturn(\$list);

        \$this->assertSame(\$list, \$this->factory->createListFromChoices(\$choices1));
        \$this->assertSame(\$list, \$this->factory->createListFromChoices(\$choices2));
    }

    public function testCreateFromChoicesGroupedChoices()
    {
        \$choices1 = ['key' => ['A' => 'a']];
        \$choices2 = ['A' => 'a'];
        \$list1 = new ArrayChoiceList([]);
        \$list2 = new ArrayChoiceList([]);

        \$this->decoratedFactory->expects(\$this->at(0))
            ->method('createListFromChoices')
            ->with(\$choices1)
            ->willReturn(\$list1);
        \$this->decoratedFactory->expects(\$this->at(1))
            ->method('createListFromChoices')
            ->with(\$choices2)
            ->willReturn(\$list2);

        \$this->assertSame(\$list1, \$this->factory->createListFromChoices(\$choices1));
        \$this->assertSame(\$list2, \$this->factory->createListFromChoices(\$choices2));
    }

    /**
     * @dataProvider provideSameChoices
     */
    public function testCreateFromChoicesSameChoices(\$choice1, \$choice2)
    {
        \$choices1 = [\$choice1];
        \$choices2 = [\$choice2];
        \$list = new ArrayChoiceList([]);

        \$this->decoratedFactory->expects(\$this->once())
            ->method('createListFromChoices')
            ->with(\$choices1)
            ->willReturn(\$list);

        \$this->assertSame(\$list, \$this->factory->createListFromChoices(\$choices1));
        \$this->assertSame(\$list, \$this->factory->createListFromChoices(\$choices2));
    }

    /**
     * @dataProvider provideDistinguishedChoices
     */
    public function testCreateFromChoicesDifferentChoices(\$choice1, \$choice2)
    {
        \$choices1 = [\$choice1];
        \$choices2 = [\$choice2];
        \$list1 = new ArrayChoiceList([]);
        \$list2 = new ArrayChoiceList([]);

        \$this->decoratedFactory->expects(\$this->at(0))
            ->method('createListFromChoices')
            ->with(\$choices1)
            ->willReturn(\$list1);
        \$this->decoratedFactory->expects(\$this->at(1))
            ->method('createListFromChoices')
            ->with(\$choices2)
            ->willReturn(\$list2);

        \$this->assertSame(\$list1, \$this->factory->createListFromChoices(\$choices1));
        \$this->assertSame(\$list2, \$this->factory->createListFromChoices(\$choices2));
    }

    public function testCreateFromChoicesSameValueClosure()
    {
        \$choices = [1];
        \$list = new ArrayChoiceList([]);
        \$closure = function () {};

        \$this->decoratedFactory->expects(\$this->once())
            ->method('createListFromChoices')
            ->with(\$choices, \$closure)
            ->willReturn(\$list);

        \$this->assertSame(\$list, \$this->factory->createListFromChoices(\$choices, \$closure));
        \$this->assertSame(\$list, \$this->factory->createListFromChoices(\$choices, \$closure));
    }

    public function testCreateFromChoicesDifferentValueClosure()
    {
        \$choices = [1];
        \$list1 = new ArrayChoiceList([]);
        \$list2 = new ArrayChoiceList([]);
        \$closure1 = function () {};
        \$closure2 = function () {};

        \$this->decoratedFactory->expects(\$this->at(0))
            ->method('createListFromChoices')
            ->with(\$choices, \$closure1)
            ->willReturn(\$list1);
        \$this->decoratedFactory->expects(\$this->at(1))
            ->method('createListFromChoices')
            ->with(\$choices, \$closure2)
            ->willReturn(\$list2);

        \$this->assertSame(\$list1, \$this->factory->createListFromChoices(\$choices, \$closure1));
        \$this->assertSame(\$list2, \$this->factory->createListFromChoices(\$choices, \$closure2));
    }

    public function testCreateFromLoaderSameLoader()
    {
        \$loader = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\Loader\\ChoiceLoaderInterface')->getMock();
        \$list = new ArrayChoiceList([]);

        \$this->decoratedFactory->expects(\$this->once())
            ->method('createListFromLoader')
            ->with(\$loader)
            ->willReturn(\$list);

        \$this->assertSame(\$list, \$this->factory->createListFromLoader(\$loader));
        \$this->assertSame(\$list, \$this->factory->createListFromLoader(\$loader));
    }

    public function testCreateFromLoaderDifferentLoader()
    {
        \$loader1 = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\Loader\\ChoiceLoaderInterface')->getMock();
        \$loader2 = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\Loader\\ChoiceLoaderInterface')->getMock();
        \$list1 = new ArrayChoiceList([]);
        \$list2 = new ArrayChoiceList([]);

        \$this->decoratedFactory->expects(\$this->at(0))
            ->method('createListFromLoader')
            ->with(\$loader1)
            ->willReturn(\$list1);
        \$this->decoratedFactory->expects(\$this->at(1))
            ->method('createListFromLoader')
            ->with(\$loader2)
            ->willReturn(\$list2);

        \$this->assertSame(\$list1, \$this->factory->createListFromLoader(\$loader1));
        \$this->assertSame(\$list2, \$this->factory->createListFromLoader(\$loader2));
    }

    public function testCreateFromLoaderSameValueClosure()
    {
        \$loader = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\Loader\\ChoiceLoaderInterface')->getMock();
        \$list = new ArrayChoiceList([]);
        \$closure = function () {};

        \$this->decoratedFactory->expects(\$this->once())
            ->method('createListFromLoader')
            ->with(\$loader, \$closure)
            ->willReturn(\$list);

        \$this->assertSame(\$list, \$this->factory->createListFromLoader(\$loader, \$closure));
        \$this->assertSame(\$list, \$this->factory->createListFromLoader(\$loader, \$closure));
    }

    public function testCreateFromLoaderDifferentValueClosure()
    {
        \$loader = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\Loader\\ChoiceLoaderInterface')->getMock();
        \$list1 = new ArrayChoiceList([]);
        \$list2 = new ArrayChoiceList([]);
        \$closure1 = function () {};
        \$closure2 = function () {};

        \$this->decoratedFactory->expects(\$this->at(0))
            ->method('createListFromLoader')
            ->with(\$loader, \$closure1)
            ->willReturn(\$list1);
        \$this->decoratedFactory->expects(\$this->at(1))
            ->method('createListFromLoader')
            ->with(\$loader, \$closure2)
            ->willReturn(\$list2);

        \$this->assertSame(\$list1, \$this->factory->createListFromLoader(\$loader, \$closure1));
        \$this->assertSame(\$list2, \$this->factory->createListFromLoader(\$loader, \$closure2));
    }

    public function testCreateViewSamePreferredChoices()
    {
        \$preferred = ['a'];
        \$list = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface')->getMock();
        \$view = new ChoiceListView();

        \$this->decoratedFactory->expects(\$this->once())
            ->method('createView')
            ->with(\$list, \$preferred)
            ->willReturn(\$view);

        \$this->assertSame(\$view, \$this->factory->createView(\$list, \$preferred));
        \$this->assertSame(\$view, \$this->factory->createView(\$list, \$preferred));
    }

    public function testCreateViewDifferentPreferredChoices()
    {
        \$preferred1 = ['a'];
        \$preferred2 = ['b'];
        \$list = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface')->getMock();
        \$view1 = new ChoiceListView();
        \$view2 = new ChoiceListView();

        \$this->decoratedFactory->expects(\$this->at(0))
            ->method('createView')
            ->with(\$list, \$preferred1)
            ->willReturn(\$view1);
        \$this->decoratedFactory->expects(\$this->at(1))
            ->method('createView')
            ->with(\$list, \$preferred2)
            ->willReturn(\$view2);

        \$this->assertSame(\$view1, \$this->factory->createView(\$list, \$preferred1));
        \$this->assertSame(\$view2, \$this->factory->createView(\$list, \$preferred2));
    }

    public function testCreateViewSamePreferredChoicesClosure()
    {
        \$preferred = function () {};
        \$list = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface')->getMock();
        \$view = new ChoiceListView();

        \$this->decoratedFactory->expects(\$this->once())
            ->method('createView')
            ->with(\$list, \$preferred)
            ->willReturn(\$view);

        \$this->assertSame(\$view, \$this->factory->createView(\$list, \$preferred));
        \$this->assertSame(\$view, \$this->factory->createView(\$list, \$preferred));
    }

    public function testCreateViewDifferentPreferredChoicesClosure()
    {
        \$preferred1 = function () {};
        \$preferred2 = function () {};
        \$list = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface')->getMock();
        \$view1 = new ChoiceListView();
        \$view2 = new ChoiceListView();

        \$this->decoratedFactory->expects(\$this->at(0))
            ->method('createView')
            ->with(\$list, \$preferred1)
            ->willReturn(\$view1);
        \$this->decoratedFactory->expects(\$this->at(1))
            ->method('createView')
            ->with(\$list, \$preferred2)
            ->willReturn(\$view2);

        \$this->assertSame(\$view1, \$this->factory->createView(\$list, \$preferred1));
        \$this->assertSame(\$view2, \$this->factory->createView(\$list, \$preferred2));
    }

    public function testCreateViewSameLabelClosure()
    {
        \$labels = function () {};
        \$list = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface')->getMock();
        \$view = new ChoiceListView();

        \$this->decoratedFactory->expects(\$this->once())
            ->method('createView')
            ->with(\$list, null, \$labels)
            ->willReturn(\$view);

        \$this->assertSame(\$view, \$this->factory->createView(\$list, null, \$labels));
        \$this->assertSame(\$view, \$this->factory->createView(\$list, null, \$labels));
    }

    public function testCreateViewDifferentLabelClosure()
    {
        \$labels1 = function () {};
        \$labels2 = function () {};
        \$list = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface')->getMock();
        \$view1 = new ChoiceListView();
        \$view2 = new ChoiceListView();

        \$this->decoratedFactory->expects(\$this->at(0))
            ->method('createView')
            ->with(\$list, null, \$labels1)
            ->willReturn(\$view1);
        \$this->decoratedFactory->expects(\$this->at(1))
            ->method('createView')
            ->with(\$list, null, \$labels2)
            ->willReturn(\$view2);

        \$this->assertSame(\$view1, \$this->factory->createView(\$list, null, \$labels1));
        \$this->assertSame(\$view2, \$this->factory->createView(\$list, null, \$labels2));
    }

    public function testCreateViewSameIndexClosure()
    {
        \$index = function () {};
        \$list = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface')->getMock();
        \$view = new ChoiceListView();

        \$this->decoratedFactory->expects(\$this->once())
            ->method('createView')
            ->with(\$list, null, null, \$index)
            ->willReturn(\$view);

        \$this->assertSame(\$view, \$this->factory->createView(\$list, null, null, \$index));
        \$this->assertSame(\$view, \$this->factory->createView(\$list, null, null, \$index));
    }

    public function testCreateViewDifferentIndexClosure()
    {
        \$index1 = function () {};
        \$index2 = function () {};
        \$list = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface')->getMock();
        \$view1 = new ChoiceListView();
        \$view2 = new ChoiceListView();

        \$this->decoratedFactory->expects(\$this->at(0))
            ->method('createView')
            ->with(\$list, null, null, \$index1)
            ->willReturn(\$view1);
        \$this->decoratedFactory->expects(\$this->at(1))
            ->method('createView')
            ->with(\$list, null, null, \$index2)
            ->willReturn(\$view2);

        \$this->assertSame(\$view1, \$this->factory->createView(\$list, null, null, \$index1));
        \$this->assertSame(\$view2, \$this->factory->createView(\$list, null, null, \$index2));
    }

    public function testCreateViewSameGroupByClosure()
    {
        \$groupBy = function () {};
        \$list = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface')->getMock();
        \$view = new ChoiceListView();

        \$this->decoratedFactory->expects(\$this->once())
            ->method('createView')
            ->with(\$list, null, null, null, \$groupBy)
            ->willReturn(\$view);

        \$this->assertSame(\$view, \$this->factory->createView(\$list, null, null, null, \$groupBy));
        \$this->assertSame(\$view, \$this->factory->createView(\$list, null, null, null, \$groupBy));
    }

    public function testCreateViewDifferentGroupByClosure()
    {
        \$groupBy1 = function () {};
        \$groupBy2 = function () {};
        \$list = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface')->getMock();
        \$view1 = new ChoiceListView();
        \$view2 = new ChoiceListView();

        \$this->decoratedFactory->expects(\$this->at(0))
            ->method('createView')
            ->with(\$list, null, null, null, \$groupBy1)
            ->willReturn(\$view1);
        \$this->decoratedFactory->expects(\$this->at(1))
            ->method('createView')
            ->with(\$list, null, null, null, \$groupBy2)
            ->willReturn(\$view2);

        \$this->assertSame(\$view1, \$this->factory->createView(\$list, null, null, null, \$groupBy1));
        \$this->assertSame(\$view2, \$this->factory->createView(\$list, null, null, null, \$groupBy2));
    }

    public function testCreateViewSameAttributes()
    {
        \$attr = ['class' => 'foobar'];
        \$list = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface')->getMock();
        \$view = new ChoiceListView();

        \$this->decoratedFactory->expects(\$this->once())
            ->method('createView')
            ->with(\$list, null, null, null, null, \$attr)
            ->willReturn(\$view);

        \$this->assertSame(\$view, \$this->factory->createView(\$list, null, null, null, null, \$attr));
        \$this->assertSame(\$view, \$this->factory->createView(\$list, null, null, null, null, \$attr));
    }

    public function testCreateViewDifferentAttributes()
    {
        \$attr1 = ['class' => 'foobar1'];
        \$attr2 = ['class' => 'foobar2'];
        \$list = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface')->getMock();
        \$view1 = new ChoiceListView();
        \$view2 = new ChoiceListView();

        \$this->decoratedFactory->expects(\$this->at(0))
            ->method('createView')
            ->with(\$list, null, null, null, null, \$attr1)
            ->willReturn(\$view1);
        \$this->decoratedFactory->expects(\$this->at(1))
            ->method('createView')
            ->with(\$list, null, null, null, null, \$attr2)
            ->willReturn(\$view2);

        \$this->assertSame(\$view1, \$this->factory->createView(\$list, null, null, null, null, \$attr1));
        \$this->assertSame(\$view2, \$this->factory->createView(\$list, null, null, null, null, \$attr2));
    }

    public function testCreateViewSameAttributesClosure()
    {
        \$attr = function () {};
        \$list = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface')->getMock();
        \$view = new ChoiceListView();

        \$this->decoratedFactory->expects(\$this->once())
            ->method('createView')
            ->with(\$list, null, null, null, null, \$attr)
            ->willReturn(\$view);

        \$this->assertSame(\$view, \$this->factory->createView(\$list, null, null, null, null, \$attr));
        \$this->assertSame(\$view, \$this->factory->createView(\$list, null, null, null, null, \$attr));
    }

    public function testCreateViewDifferentAttributesClosure()
    {
        \$attr1 = function () {};
        \$attr2 = function () {};
        \$list = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface')->getMock();
        \$view1 = new ChoiceListView();
        \$view2 = new ChoiceListView();

        \$this->decoratedFactory->expects(\$this->at(0))
            ->method('createView')
            ->with(\$list, null, null, null, null, \$attr1)
            ->willReturn(\$view1);
        \$this->decoratedFactory->expects(\$this->at(1))
            ->method('createView')
            ->with(\$list, null, null, null, null, \$attr2)
            ->willReturn(\$view2);

        \$this->assertSame(\$view1, \$this->factory->createView(\$list, null, null, null, null, \$attr1));
        \$this->assertSame(\$view2, \$this->factory->createView(\$list, null, null, null, null, \$attr2));
    }

    public function provideSameChoices()
    {
        \$object = (object) ['foo' => 'bar'];

        return [
            [0, 0],
            ['a', 'a'],
            // https://github.com/symfony/symfony/issues/10409
            [\\chr(181).'meter', \\chr(181).'meter'], // UTF-8
            [\$object, \$object],
        ];
    }

    public function provideDistinguishedChoices()
    {
        return [
            [0, false],
            [0, null],
            [0, '0'],
            [0, ''],
            [1, true],
            [1, '1'],
            [1, 'a'],
            ['', false],
            ['', null],
            [false, null],
            // Same properties, but not identical
            [(object) ['foo' => 'bar'], (object) ['foo' => 'bar']],
        ];
    }

    public function provideSameKeyChoices()
    {
        // Only test types here that can be used as array keys
        return [
            [0, 0],
            [0, '0'],
            ['a', 'a'],
            [\\chr(181).'meter', \\chr(181).'meter'],
        ];
    }

    public function provideDistinguishedKeyChoices()
    {
        // Only test types here that can be used as array keys
        return [
            [0, ''],
            [1, 'a'],
            ['', 'a'],
        ];
    }
}
", "vendor/symfony/form/Tests/ChoiceList/Factory/CachingFactoryDecoratorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/ChoiceList/Factory/CachingFactoryDecoratorTest.php");
    }
}
