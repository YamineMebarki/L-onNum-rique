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

/* vendor/symfony/form/Tests/ChoiceList/Factory/PropertyAccessDecoratorTest.php */
class __TwigTemplate_3bc5b6451c821c5619033e54b29fe5a79c1907f125ba14440ea74e1e8d096e68 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/ChoiceList/Factory/PropertyAccessDecoratorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/ChoiceList/Factory/PropertyAccessDecoratorTest.php"));

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
use Symfony\\Component\\Form\\ChoiceList\\Factory\\PropertyAccessDecorator;
use Symfony\\Component\\Form\\ChoiceList\\View\\ChoiceListView;
use Symfony\\Component\\PropertyAccess\\PropertyPath;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class PropertyAccessDecoratorTest extends TestCase
{
    /**
     * @var MockObject
     */
    private \$decoratedFactory;

    /**
     * @var PropertyAccessDecorator
     */
    private \$factory;

    protected function setUp(): void
    {
        \$this->decoratedFactory = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\Factory\\ChoiceListFactoryInterface')->getMock();
        \$this->factory = new PropertyAccessDecorator(\$this->decoratedFactory);
    }

    public function testCreateFromChoicesPropertyPath()
    {
        \$choices = [(object) ['property' => 'value']];

        \$this->decoratedFactory->expects(\$this->once())
            ->method('createListFromChoices')
            ->with(\$choices, \$this->isInstanceOf('\\Closure'))
            ->willReturnCallback(function (\$choices, \$callback) {
                return new ArrayChoiceList(array_map(\$callback, \$choices));
            });

        \$this->assertSame(['value' => 'value'], \$this->factory->createListFromChoices(\$choices, 'property')->getChoices());
    }

    public function testCreateFromChoicesPropertyPathInstance()
    {
        \$choices = [(object) ['property' => 'value']];

        \$this->decoratedFactory->expects(\$this->once())
            ->method('createListFromChoices')
            ->with(\$choices, \$this->isInstanceOf('\\Closure'))
            ->willReturnCallback(function (\$choices, \$callback) {
                return new ArrayChoiceList(array_map(\$callback, \$choices));
            });

        \$this->assertSame(['value' => 'value'], \$this->factory->createListFromChoices(\$choices, new PropertyPath('property'))->getChoices());
    }

    public function testCreateFromLoaderPropertyPath()
    {
        \$loader = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\Loader\\ChoiceLoaderInterface')->getMock();

        \$this->decoratedFactory->expects(\$this->once())
            ->method('createListFromLoader')
            ->with(\$loader, \$this->isInstanceOf('\\Closure'))
            ->willReturnCallback(function (\$loader, \$callback) {
                return new ArrayChoiceList((array) \$callback((object) ['property' => 'value']));
            });

        \$this->assertSame(['value' => 'value'], \$this->factory->createListFromLoader(\$loader, 'property')->getChoices());
    }

    // https://github.com/symfony/symfony/issues/5494
    public function testCreateFromChoicesAssumeNullIfValuePropertyPathUnreadable()
    {
        \$choices = [null];

        \$this->decoratedFactory->expects(\$this->once())
            ->method('createListFromChoices')
            ->with(\$choices, \$this->isInstanceOf('\\Closure'))
            ->willReturnCallback(function (\$choices, \$callback) {
                return new ArrayChoiceList(array_map(\$callback, \$choices));
            });

        \$this->assertSame([null], \$this->factory->createListFromChoices(\$choices, 'property')->getChoices());
    }

    // https://github.com/symfony/symfony/issues/5494
    public function testCreateFromChoiceLoaderAssumeNullIfValuePropertyPathUnreadable()
    {
        \$loader = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\Loader\\ChoiceLoaderInterface')->getMock();

        \$this->decoratedFactory->expects(\$this->once())
            ->method('createListFromLoader')
            ->with(\$loader, \$this->isInstanceOf('\\Closure'))
            ->willReturnCallback(function (\$loader, \$callback) {
                return new ArrayChoiceList((array) \$callback(null));
            });

        \$this->assertSame([], \$this->factory->createListFromLoader(\$loader, 'property')->getChoices());
    }

    public function testCreateFromLoaderPropertyPathInstance()
    {
        \$loader = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\Loader\\ChoiceLoaderInterface')->getMock();

        \$this->decoratedFactory->expects(\$this->once())
            ->method('createListFromLoader')
            ->with(\$loader, \$this->isInstanceOf('\\Closure'))
            ->willReturnCallback(function (\$loader, \$callback) {
                return new ArrayChoiceList((array) \$callback((object) ['property' => 'value']));
            });

        \$this->assertSame(['value' => 'value'], \$this->factory->createListFromLoader(\$loader, new PropertyPath('property'))->getChoices());
    }

    public function testCreateViewPreferredChoicesAsPropertyPath()
    {
        \$list = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface')->getMock();

        \$this->decoratedFactory->expects(\$this->once())
            ->method('createView')
            ->with(\$list, \$this->isInstanceOf('\\Closure'))
            ->willReturnCallback(function (\$list, \$preferred) {
                return new ChoiceListView((array) \$preferred((object) ['property' => true]));
            });

        \$this->assertSame([true], \$this->factory->createView(\$list, 'property')->choices);
    }

    public function testCreateViewPreferredChoicesAsPropertyPathInstance()
    {
        \$list = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface')->getMock();

        \$this->decoratedFactory->expects(\$this->once())
            ->method('createView')
            ->with(\$list, \$this->isInstanceOf('\\Closure'))
            ->willReturnCallback(function (\$list, \$preferred) {
                return new ChoiceListView((array) \$preferred((object) ['property' => true]));
            });

        \$this->assertSame([true], \$this->factory->createView(\$list, 'property')->choices);
    }

    // https://github.com/symfony/symfony/issues/5494
    public function testCreateViewAssumeNullIfPreferredChoicesPropertyPathUnreadable()
    {
        \$list = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface')->getMock();

        \$this->decoratedFactory->expects(\$this->once())
            ->method('createView')
            ->with(\$list, \$this->isInstanceOf('\\Closure'))
            ->willReturnCallback(function (\$list, \$preferred) {
                return new ChoiceListView((array) \$preferred((object) ['category' => null]));
            });

        \$this->assertSame([false], \$this->factory->createView(\$list, 'category.preferred')->choices);
    }

    public function testCreateViewLabelsAsPropertyPath()
    {
        \$list = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface')->getMock();

        \$this->decoratedFactory->expects(\$this->once())
            ->method('createView')
            ->with(\$list, null, \$this->isInstanceOf('\\Closure'))
            ->willReturnCallback(function (\$list, \$preferred, \$label) {
                return new ChoiceListView((array) \$label((object) ['property' => 'label']));
            });

        \$this->assertSame(['label'], \$this->factory->createView(\$list, null, 'property')->choices);
    }

    public function testCreateViewLabelsAsPropertyPathInstance()
    {
        \$list = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface')->getMock();

        \$this->decoratedFactory->expects(\$this->once())
            ->method('createView')
            ->with(\$list, null, \$this->isInstanceOf('\\Closure'))
            ->willReturnCallback(function (\$list, \$preferred, \$label) {
                return new ChoiceListView((array) \$label((object) ['property' => 'label']));
            });

        \$this->assertSame(['label'], \$this->factory->createView(\$list, null, new PropertyPath('property'))->choices);
    }

    public function testCreateViewIndicesAsPropertyPath()
    {
        \$list = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface')->getMock();

        \$this->decoratedFactory->expects(\$this->once())
            ->method('createView')
            ->with(\$list, null, null, \$this->isInstanceOf('\\Closure'))
            ->willReturnCallback(function (\$list, \$preferred, \$label, \$index) {
                return new ChoiceListView((array) \$index((object) ['property' => 'index']));
            });

        \$this->assertSame(['index'], \$this->factory->createView(\$list, null, null, 'property')->choices);
    }

    public function testCreateViewIndicesAsPropertyPathInstance()
    {
        \$list = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface')->getMock();

        \$this->decoratedFactory->expects(\$this->once())
            ->method('createView')
            ->with(\$list, null, null, \$this->isInstanceOf('\\Closure'))
            ->willReturnCallback(function (\$list, \$preferred, \$label, \$index) {
                return new ChoiceListView((array) \$index((object) ['property' => 'index']));
            });

        \$this->assertSame(['index'], \$this->factory->createView(\$list, null, null, new PropertyPath('property'))->choices);
    }

    public function testCreateViewGroupsAsPropertyPath()
    {
        \$list = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface')->getMock();

        \$this->decoratedFactory->expects(\$this->once())
            ->method('createView')
            ->with(\$list, null, null, null, \$this->isInstanceOf('\\Closure'))
            ->willReturnCallback(function (\$list, \$preferred, \$label, \$index, \$groupBy) {
                return new ChoiceListView((array) \$groupBy((object) ['property' => 'group']));
            });

        \$this->assertSame(['group'], \$this->factory->createView(\$list, null, null, null, 'property')->choices);
    }

    public function testCreateViewGroupsAsPropertyPathInstance()
    {
        \$list = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface')->getMock();

        \$this->decoratedFactory->expects(\$this->once())
            ->method('createView')
            ->with(\$list, null, null, null, \$this->isInstanceOf('\\Closure'))
            ->willReturnCallback(function (\$list, \$preferred, \$label, \$index, \$groupBy) {
                return new ChoiceListView((array) \$groupBy((object) ['property' => 'group']));
            });

        \$this->assertSame(['group'], \$this->factory->createView(\$list, null, null, null, new PropertyPath('property'))->choices);
    }

    // https://github.com/symfony/symfony/issues/5494
    public function testCreateViewAssumeNullIfGroupsPropertyPathUnreadable()
    {
        \$list = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface')->getMock();

        \$this->decoratedFactory->expects(\$this->once())
            ->method('createView')
            ->with(\$list, null, null, null, \$this->isInstanceOf('\\Closure'))
            ->willReturnCallback(function (\$list, \$preferred, \$label, \$index, \$groupBy) {
                return new ChoiceListView((array) \$groupBy((object) ['group' => null]));
            });

        \$this->assertSame([], \$this->factory->createView(\$list, null, null, null, 'group.name')->choices);
    }

    public function testCreateViewAttrAsPropertyPath()
    {
        \$list = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface')->getMock();

        \$this->decoratedFactory->expects(\$this->once())
            ->method('createView')
            ->with(\$list, null, null, null, null, \$this->isInstanceOf('\\Closure'))
            ->willReturnCallback(function (\$list, \$preferred, \$label, \$index, \$groupBy, \$attr) {
                return new ChoiceListView((array) \$attr((object) ['property' => 'attr']));
            });

        \$this->assertSame(['attr'], \$this->factory->createView(\$list, null, null, null, null, 'property')->choices);
    }

    public function testCreateViewAttrAsPropertyPathInstance()
    {
        \$list = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface')->getMock();

        \$this->decoratedFactory->expects(\$this->once())
            ->method('createView')
            ->with(\$list, null, null, null, null, \$this->isInstanceOf('\\Closure'))
            ->willReturnCallback(function (\$list, \$preferred, \$label, \$index, \$groupBy, \$attr) {
                return new ChoiceListView((array) \$attr((object) ['property' => 'attr']));
            });

        \$this->assertSame(['attr'], \$this->factory->createView(\$list, null, null, null, null, new PropertyPath('property'))->choices);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/ChoiceList/Factory/PropertyAccessDecoratorTest.php";
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
use Symfony\\Component\\Form\\ChoiceList\\Factory\\PropertyAccessDecorator;
use Symfony\\Component\\Form\\ChoiceList\\View\\ChoiceListView;
use Symfony\\Component\\PropertyAccess\\PropertyPath;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class PropertyAccessDecoratorTest extends TestCase
{
    /**
     * @var MockObject
     */
    private \$decoratedFactory;

    /**
     * @var PropertyAccessDecorator
     */
    private \$factory;

    protected function setUp(): void
    {
        \$this->decoratedFactory = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\Factory\\ChoiceListFactoryInterface')->getMock();
        \$this->factory = new PropertyAccessDecorator(\$this->decoratedFactory);
    }

    public function testCreateFromChoicesPropertyPath()
    {
        \$choices = [(object) ['property' => 'value']];

        \$this->decoratedFactory->expects(\$this->once())
            ->method('createListFromChoices')
            ->with(\$choices, \$this->isInstanceOf('\\Closure'))
            ->willReturnCallback(function (\$choices, \$callback) {
                return new ArrayChoiceList(array_map(\$callback, \$choices));
            });

        \$this->assertSame(['value' => 'value'], \$this->factory->createListFromChoices(\$choices, 'property')->getChoices());
    }

    public function testCreateFromChoicesPropertyPathInstance()
    {
        \$choices = [(object) ['property' => 'value']];

        \$this->decoratedFactory->expects(\$this->once())
            ->method('createListFromChoices')
            ->with(\$choices, \$this->isInstanceOf('\\Closure'))
            ->willReturnCallback(function (\$choices, \$callback) {
                return new ArrayChoiceList(array_map(\$callback, \$choices));
            });

        \$this->assertSame(['value' => 'value'], \$this->factory->createListFromChoices(\$choices, new PropertyPath('property'))->getChoices());
    }

    public function testCreateFromLoaderPropertyPath()
    {
        \$loader = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\Loader\\ChoiceLoaderInterface')->getMock();

        \$this->decoratedFactory->expects(\$this->once())
            ->method('createListFromLoader')
            ->with(\$loader, \$this->isInstanceOf('\\Closure'))
            ->willReturnCallback(function (\$loader, \$callback) {
                return new ArrayChoiceList((array) \$callback((object) ['property' => 'value']));
            });

        \$this->assertSame(['value' => 'value'], \$this->factory->createListFromLoader(\$loader, 'property')->getChoices());
    }

    // https://github.com/symfony/symfony/issues/5494
    public function testCreateFromChoicesAssumeNullIfValuePropertyPathUnreadable()
    {
        \$choices = [null];

        \$this->decoratedFactory->expects(\$this->once())
            ->method('createListFromChoices')
            ->with(\$choices, \$this->isInstanceOf('\\Closure'))
            ->willReturnCallback(function (\$choices, \$callback) {
                return new ArrayChoiceList(array_map(\$callback, \$choices));
            });

        \$this->assertSame([null], \$this->factory->createListFromChoices(\$choices, 'property')->getChoices());
    }

    // https://github.com/symfony/symfony/issues/5494
    public function testCreateFromChoiceLoaderAssumeNullIfValuePropertyPathUnreadable()
    {
        \$loader = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\Loader\\ChoiceLoaderInterface')->getMock();

        \$this->decoratedFactory->expects(\$this->once())
            ->method('createListFromLoader')
            ->with(\$loader, \$this->isInstanceOf('\\Closure'))
            ->willReturnCallback(function (\$loader, \$callback) {
                return new ArrayChoiceList((array) \$callback(null));
            });

        \$this->assertSame([], \$this->factory->createListFromLoader(\$loader, 'property')->getChoices());
    }

    public function testCreateFromLoaderPropertyPathInstance()
    {
        \$loader = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\Loader\\ChoiceLoaderInterface')->getMock();

        \$this->decoratedFactory->expects(\$this->once())
            ->method('createListFromLoader')
            ->with(\$loader, \$this->isInstanceOf('\\Closure'))
            ->willReturnCallback(function (\$loader, \$callback) {
                return new ArrayChoiceList((array) \$callback((object) ['property' => 'value']));
            });

        \$this->assertSame(['value' => 'value'], \$this->factory->createListFromLoader(\$loader, new PropertyPath('property'))->getChoices());
    }

    public function testCreateViewPreferredChoicesAsPropertyPath()
    {
        \$list = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface')->getMock();

        \$this->decoratedFactory->expects(\$this->once())
            ->method('createView')
            ->with(\$list, \$this->isInstanceOf('\\Closure'))
            ->willReturnCallback(function (\$list, \$preferred) {
                return new ChoiceListView((array) \$preferred((object) ['property' => true]));
            });

        \$this->assertSame([true], \$this->factory->createView(\$list, 'property')->choices);
    }

    public function testCreateViewPreferredChoicesAsPropertyPathInstance()
    {
        \$list = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface')->getMock();

        \$this->decoratedFactory->expects(\$this->once())
            ->method('createView')
            ->with(\$list, \$this->isInstanceOf('\\Closure'))
            ->willReturnCallback(function (\$list, \$preferred) {
                return new ChoiceListView((array) \$preferred((object) ['property' => true]));
            });

        \$this->assertSame([true], \$this->factory->createView(\$list, 'property')->choices);
    }

    // https://github.com/symfony/symfony/issues/5494
    public function testCreateViewAssumeNullIfPreferredChoicesPropertyPathUnreadable()
    {
        \$list = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface')->getMock();

        \$this->decoratedFactory->expects(\$this->once())
            ->method('createView')
            ->with(\$list, \$this->isInstanceOf('\\Closure'))
            ->willReturnCallback(function (\$list, \$preferred) {
                return new ChoiceListView((array) \$preferred((object) ['category' => null]));
            });

        \$this->assertSame([false], \$this->factory->createView(\$list, 'category.preferred')->choices);
    }

    public function testCreateViewLabelsAsPropertyPath()
    {
        \$list = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface')->getMock();

        \$this->decoratedFactory->expects(\$this->once())
            ->method('createView')
            ->with(\$list, null, \$this->isInstanceOf('\\Closure'))
            ->willReturnCallback(function (\$list, \$preferred, \$label) {
                return new ChoiceListView((array) \$label((object) ['property' => 'label']));
            });

        \$this->assertSame(['label'], \$this->factory->createView(\$list, null, 'property')->choices);
    }

    public function testCreateViewLabelsAsPropertyPathInstance()
    {
        \$list = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface')->getMock();

        \$this->decoratedFactory->expects(\$this->once())
            ->method('createView')
            ->with(\$list, null, \$this->isInstanceOf('\\Closure'))
            ->willReturnCallback(function (\$list, \$preferred, \$label) {
                return new ChoiceListView((array) \$label((object) ['property' => 'label']));
            });

        \$this->assertSame(['label'], \$this->factory->createView(\$list, null, new PropertyPath('property'))->choices);
    }

    public function testCreateViewIndicesAsPropertyPath()
    {
        \$list = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface')->getMock();

        \$this->decoratedFactory->expects(\$this->once())
            ->method('createView')
            ->with(\$list, null, null, \$this->isInstanceOf('\\Closure'))
            ->willReturnCallback(function (\$list, \$preferred, \$label, \$index) {
                return new ChoiceListView((array) \$index((object) ['property' => 'index']));
            });

        \$this->assertSame(['index'], \$this->factory->createView(\$list, null, null, 'property')->choices);
    }

    public function testCreateViewIndicesAsPropertyPathInstance()
    {
        \$list = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface')->getMock();

        \$this->decoratedFactory->expects(\$this->once())
            ->method('createView')
            ->with(\$list, null, null, \$this->isInstanceOf('\\Closure'))
            ->willReturnCallback(function (\$list, \$preferred, \$label, \$index) {
                return new ChoiceListView((array) \$index((object) ['property' => 'index']));
            });

        \$this->assertSame(['index'], \$this->factory->createView(\$list, null, null, new PropertyPath('property'))->choices);
    }

    public function testCreateViewGroupsAsPropertyPath()
    {
        \$list = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface')->getMock();

        \$this->decoratedFactory->expects(\$this->once())
            ->method('createView')
            ->with(\$list, null, null, null, \$this->isInstanceOf('\\Closure'))
            ->willReturnCallback(function (\$list, \$preferred, \$label, \$index, \$groupBy) {
                return new ChoiceListView((array) \$groupBy((object) ['property' => 'group']));
            });

        \$this->assertSame(['group'], \$this->factory->createView(\$list, null, null, null, 'property')->choices);
    }

    public function testCreateViewGroupsAsPropertyPathInstance()
    {
        \$list = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface')->getMock();

        \$this->decoratedFactory->expects(\$this->once())
            ->method('createView')
            ->with(\$list, null, null, null, \$this->isInstanceOf('\\Closure'))
            ->willReturnCallback(function (\$list, \$preferred, \$label, \$index, \$groupBy) {
                return new ChoiceListView((array) \$groupBy((object) ['property' => 'group']));
            });

        \$this->assertSame(['group'], \$this->factory->createView(\$list, null, null, null, new PropertyPath('property'))->choices);
    }

    // https://github.com/symfony/symfony/issues/5494
    public function testCreateViewAssumeNullIfGroupsPropertyPathUnreadable()
    {
        \$list = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface')->getMock();

        \$this->decoratedFactory->expects(\$this->once())
            ->method('createView')
            ->with(\$list, null, null, null, \$this->isInstanceOf('\\Closure'))
            ->willReturnCallback(function (\$list, \$preferred, \$label, \$index, \$groupBy) {
                return new ChoiceListView((array) \$groupBy((object) ['group' => null]));
            });

        \$this->assertSame([], \$this->factory->createView(\$list, null, null, null, 'group.name')->choices);
    }

    public function testCreateViewAttrAsPropertyPath()
    {
        \$list = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface')->getMock();

        \$this->decoratedFactory->expects(\$this->once())
            ->method('createView')
            ->with(\$list, null, null, null, null, \$this->isInstanceOf('\\Closure'))
            ->willReturnCallback(function (\$list, \$preferred, \$label, \$index, \$groupBy, \$attr) {
                return new ChoiceListView((array) \$attr((object) ['property' => 'attr']));
            });

        \$this->assertSame(['attr'], \$this->factory->createView(\$list, null, null, null, null, 'property')->choices);
    }

    public function testCreateViewAttrAsPropertyPathInstance()
    {
        \$list = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface')->getMock();

        \$this->decoratedFactory->expects(\$this->once())
            ->method('createView')
            ->with(\$list, null, null, null, null, \$this->isInstanceOf('\\Closure'))
            ->willReturnCallback(function (\$list, \$preferred, \$label, \$index, \$groupBy, \$attr) {
                return new ChoiceListView((array) \$attr((object) ['property' => 'attr']));
            });

        \$this->assertSame(['attr'], \$this->factory->createView(\$list, null, null, null, null, new PropertyPath('property'))->choices);
    }
}
", "vendor/symfony/form/Tests/ChoiceList/Factory/PropertyAccessDecoratorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/ChoiceList/Factory/PropertyAccessDecoratorTest.php");
    }
}
