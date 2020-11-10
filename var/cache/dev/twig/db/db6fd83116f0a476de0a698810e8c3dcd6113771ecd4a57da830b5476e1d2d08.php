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

/* vendor/symfony/form/Tests/ChoiceList/LazyChoiceListTest.php */
class __TwigTemplate_2a80ac13f0fd4905d4321afe0615485271036a68a5b2d6816983703695de3787 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/ChoiceList/LazyChoiceListTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/ChoiceList/LazyChoiceListTest.php"));

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

namespace Symfony\\Component\\Form\\Tests\\ChoiceList;

use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Form\\ChoiceList\\LazyChoiceList;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class LazyChoiceListTest extends TestCase
{
    /**
     * @var LazyChoiceList
     */
    private \$list;

    /**
     * @var MockObject
     */
    private \$loadedList;

    /**
     * @var MockObject
     */
    private \$loader;

    private \$value;

    protected function setUp(): void
    {
        \$this->loadedList = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface')->getMock();
        \$this->loader = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\Loader\\ChoiceLoaderInterface')->getMock();
        \$this->value = function () {};
        \$this->list = new LazyChoiceList(\$this->loader, \$this->value);
    }

    public function testGetChoiceLoadersLoadsLoadedListOnFirstCall()
    {
        \$this->loader->expects(\$this->exactly(2))
            ->method('loadChoiceList')
            ->with(\$this->value)
            ->willReturn(\$this->loadedList);

        // The same list is returned by the loader
        \$this->loadedList->expects(\$this->exactly(2))
            ->method('getChoices')
            ->willReturn(['RESULT']);

        \$this->assertSame(['RESULT'], \$this->list->getChoices());
        \$this->assertSame(['RESULT'], \$this->list->getChoices());
    }

    public function testGetValuesLoadsLoadedListOnFirstCall()
    {
        \$this->loader->expects(\$this->exactly(2))
            ->method('loadChoiceList')
            ->with(\$this->value)
            ->willReturn(\$this->loadedList);

        // The same list is returned by the loader
        \$this->loadedList->expects(\$this->exactly(2))
            ->method('getValues')
            ->willReturn(['RESULT']);

        \$this->assertSame(['RESULT'], \$this->list->getValues());
        \$this->assertSame(['RESULT'], \$this->list->getValues());
    }

    public function testGetStructuredValuesLoadsLoadedListOnFirstCall()
    {
        \$this->loader->expects(\$this->exactly(2))
            ->method('loadChoiceList')
            ->with(\$this->value)
            ->willReturn(\$this->loadedList);

        // The same list is returned by the loader
        \$this->loadedList->expects(\$this->exactly(2))
            ->method('getStructuredValues')
            ->willReturn(['RESULT']);

        \$this->assertSame(['RESULT'], \$this->list->getStructuredValues());
        \$this->assertSame(['RESULT'], \$this->list->getStructuredValues());
    }

    public function testGetOriginalKeysLoadsLoadedListOnFirstCall()
    {
        \$this->loader->expects(\$this->exactly(2))
            ->method('loadChoiceList')
            ->with(\$this->value)
            ->willReturn(\$this->loadedList);

        // The same list is returned by the loader
        \$this->loadedList->expects(\$this->exactly(2))
            ->method('getOriginalKeys')
            ->willReturn(['RESULT']);

        \$this->assertSame(['RESULT'], \$this->list->getOriginalKeys());
        \$this->assertSame(['RESULT'], \$this->list->getOriginalKeys());
    }

    public function testGetChoicesForValuesForwardsCallIfListNotLoaded()
    {
        \$this->loader->expects(\$this->exactly(2))
            ->method('loadChoicesForValues')
            ->with(['a', 'b'])
            ->willReturn(['RESULT']);

        \$this->assertSame(['RESULT'], \$this->list->getChoicesForValues(['a', 'b']));
        \$this->assertSame(['RESULT'], \$this->list->getChoicesForValues(['a', 'b']));
    }

    public function testGetChoicesForValuesUsesLoadedList()
    {
        \$this->loader->expects(\$this->exactly(1))
            ->method('loadChoiceList')
            ->with(\$this->value)
            ->willReturn(\$this->loadedList);

        \$this->loader->expects(\$this->exactly(2))
            ->method('loadChoicesForValues')
            ->with(['a', 'b'])
            ->willReturn(['RESULT']);

        // load choice list
        \$this->list->getChoices();

        \$this->assertSame(['RESULT'], \$this->list->getChoicesForValues(['a', 'b']));
        \$this->assertSame(['RESULT'], \$this->list->getChoicesForValues(['a', 'b']));
    }

    public function testGetValuesForChoicesUsesLoadedList()
    {
        \$this->loader->expects(\$this->exactly(1))
            ->method('loadChoiceList')
            ->with(\$this->value)
            ->willReturn(\$this->loadedList);

        \$this->loader->expects(\$this->exactly(2))
            ->method('loadValuesForChoices')
            ->with(['a', 'b'])
            ->willReturn(['RESULT']);

        // load choice list
        \$this->list->getChoices();

        \$this->assertSame(['RESULT'], \$this->list->getValuesForChoices(['a', 'b']));
        \$this->assertSame(['RESULT'], \$this->list->getValuesForChoices(['a', 'b']));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/ChoiceList/LazyChoiceListTest.php";
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

namespace Symfony\\Component\\Form\\Tests\\ChoiceList;

use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Form\\ChoiceList\\LazyChoiceList;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class LazyChoiceListTest extends TestCase
{
    /**
     * @var LazyChoiceList
     */
    private \$list;

    /**
     * @var MockObject
     */
    private \$loadedList;

    /**
     * @var MockObject
     */
    private \$loader;

    private \$value;

    protected function setUp(): void
    {
        \$this->loadedList = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface')->getMock();
        \$this->loader = \$this->getMockBuilder('Symfony\\Component\\Form\\ChoiceList\\Loader\\ChoiceLoaderInterface')->getMock();
        \$this->value = function () {};
        \$this->list = new LazyChoiceList(\$this->loader, \$this->value);
    }

    public function testGetChoiceLoadersLoadsLoadedListOnFirstCall()
    {
        \$this->loader->expects(\$this->exactly(2))
            ->method('loadChoiceList')
            ->with(\$this->value)
            ->willReturn(\$this->loadedList);

        // The same list is returned by the loader
        \$this->loadedList->expects(\$this->exactly(2))
            ->method('getChoices')
            ->willReturn(['RESULT']);

        \$this->assertSame(['RESULT'], \$this->list->getChoices());
        \$this->assertSame(['RESULT'], \$this->list->getChoices());
    }

    public function testGetValuesLoadsLoadedListOnFirstCall()
    {
        \$this->loader->expects(\$this->exactly(2))
            ->method('loadChoiceList')
            ->with(\$this->value)
            ->willReturn(\$this->loadedList);

        // The same list is returned by the loader
        \$this->loadedList->expects(\$this->exactly(2))
            ->method('getValues')
            ->willReturn(['RESULT']);

        \$this->assertSame(['RESULT'], \$this->list->getValues());
        \$this->assertSame(['RESULT'], \$this->list->getValues());
    }

    public function testGetStructuredValuesLoadsLoadedListOnFirstCall()
    {
        \$this->loader->expects(\$this->exactly(2))
            ->method('loadChoiceList')
            ->with(\$this->value)
            ->willReturn(\$this->loadedList);

        // The same list is returned by the loader
        \$this->loadedList->expects(\$this->exactly(2))
            ->method('getStructuredValues')
            ->willReturn(['RESULT']);

        \$this->assertSame(['RESULT'], \$this->list->getStructuredValues());
        \$this->assertSame(['RESULT'], \$this->list->getStructuredValues());
    }

    public function testGetOriginalKeysLoadsLoadedListOnFirstCall()
    {
        \$this->loader->expects(\$this->exactly(2))
            ->method('loadChoiceList')
            ->with(\$this->value)
            ->willReturn(\$this->loadedList);

        // The same list is returned by the loader
        \$this->loadedList->expects(\$this->exactly(2))
            ->method('getOriginalKeys')
            ->willReturn(['RESULT']);

        \$this->assertSame(['RESULT'], \$this->list->getOriginalKeys());
        \$this->assertSame(['RESULT'], \$this->list->getOriginalKeys());
    }

    public function testGetChoicesForValuesForwardsCallIfListNotLoaded()
    {
        \$this->loader->expects(\$this->exactly(2))
            ->method('loadChoicesForValues')
            ->with(['a', 'b'])
            ->willReturn(['RESULT']);

        \$this->assertSame(['RESULT'], \$this->list->getChoicesForValues(['a', 'b']));
        \$this->assertSame(['RESULT'], \$this->list->getChoicesForValues(['a', 'b']));
    }

    public function testGetChoicesForValuesUsesLoadedList()
    {
        \$this->loader->expects(\$this->exactly(1))
            ->method('loadChoiceList')
            ->with(\$this->value)
            ->willReturn(\$this->loadedList);

        \$this->loader->expects(\$this->exactly(2))
            ->method('loadChoicesForValues')
            ->with(['a', 'b'])
            ->willReturn(['RESULT']);

        // load choice list
        \$this->list->getChoices();

        \$this->assertSame(['RESULT'], \$this->list->getChoicesForValues(['a', 'b']));
        \$this->assertSame(['RESULT'], \$this->list->getChoicesForValues(['a', 'b']));
    }

    public function testGetValuesForChoicesUsesLoadedList()
    {
        \$this->loader->expects(\$this->exactly(1))
            ->method('loadChoiceList')
            ->with(\$this->value)
            ->willReturn(\$this->loadedList);

        \$this->loader->expects(\$this->exactly(2))
            ->method('loadValuesForChoices')
            ->with(['a', 'b'])
            ->willReturn(['RESULT']);

        // load choice list
        \$this->list->getChoices();

        \$this->assertSame(['RESULT'], \$this->list->getValuesForChoices(['a', 'b']));
        \$this->assertSame(['RESULT'], \$this->list->getValuesForChoices(['a', 'b']));
    }
}
", "vendor/symfony/form/Tests/ChoiceList/LazyChoiceListTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/ChoiceList/LazyChoiceListTest.php");
    }
}
