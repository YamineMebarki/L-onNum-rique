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

/* vendor/symfony/form/Tests/Extension/Core/Type/NumberTypeTest.php */
class __TwigTemplate_ddaddf1ca18187857fd3b1fe3275d023ab5cb492987309e1696687dc68f44540 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/Type/NumberTypeTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/Type/NumberTypeTest.php"));

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

namespace Symfony\\Component\\Form\\Tests\\Extension\\Core\\Type;

use Symfony\\Component\\Intl\\Util\\IntlTestHelper;

class NumberTypeTest extends BaseTypeTest
{
    const TESTED_TYPE = 'Symfony\\Component\\Form\\Extension\\Core\\Type\\NumberType';

    private \$defaultLocale;

    protected function setUp(): void
    {
        parent::setUp();

        // we test against \"de_DE\", so we need the full implementation
        IntlTestHelper::requireFullIntl(\$this, false);

        \$this->defaultLocale = \\Locale::getDefault();
        \\Locale::setDefault('de_DE');
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        \\Locale::setDefault(\$this->defaultLocale);
    }

    public function testDefaultFormatting(): void
    {
        \$form = \$this->factory->create(static::TESTED_TYPE);
        \$form->setData('12345.67890');

        \$this->assertSame('12345,679', \$form->createView()->vars['value']);
    }

    public function testDefaultFormattingWithGrouping(): void
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, ['grouping' => true]);
        \$form->setData('12345.67890');

        \$this->assertSame('12.345,679', \$form->createView()->vars['value']);
    }

    public function testDefaultFormattingWithScale(): void
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, ['scale' => 2]);
        \$form->setData('12345.67890');

        \$this->assertSame('12345,68', \$form->createView()->vars['value']);
    }

    public function testDefaultFormattingWithScaleFloat(): void
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, ['scale' => 2]);
        \$form->setData(12345.67890);

        \$this->assertSame('12345,68', \$form->createView()->vars['value']);
    }

    public function testDefaultFormattingWithScaleAndStringInput(): void
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, ['scale' => 2, 'input' => 'string']);
        \$form->setData('12345.67890');

        \$this->assertSame('12345,68', \$form->createView()->vars['value']);
    }

    public function testStringInputWithFloatData(): void
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, 12345.6789, [
            'input' => 'string',
            'scale' => 2,
        ]);

        \$this->assertSame('12345,68', \$form->createView()->vars['value']);
    }

    public function testStringInputWithIntData(): void
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, 12345, [
            'input' => 'string',
            'scale' => 2,
        ]);

        \$this->assertSame('12345,00', \$form->createView()->vars['value']);
    }

    public function testDefaultFormattingWithRounding(): void
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, ['scale' => 0, 'rounding_mode' => \\NumberFormatter::ROUND_UP]);
        \$form->setData('12345.54321');

        \$this->assertSame('12346', \$form->createView()->vars['value']);
    }

    public function testSubmitNull(\$expected = null, \$norm = null, \$view = null)
    {
        parent::testSubmitNull(\$expected, \$norm, '');
    }

    public function testSubmitNullUsesDefaultEmptyData(\$emptyData = '10', \$expectedData = 10.0)
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'empty_data' => \$emptyData,
        ]);
        \$form->submit(null);

        \$this->assertSame(\$emptyData, \$form->getViewData());
        \$this->assertSame(\$expectedData, \$form->getNormData());
        \$this->assertSame(\$expectedData, \$form->getData());
    }

    public function testSubmitNumericInput(): void
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, ['input' => 'number']);
        \$form->submit('1,234');

        \$this->assertSame(1.234, \$form->getData());
        \$this->assertSame(1.234, \$form->getNormData());
        \$this->assertSame('1,234', \$form->getViewData());
    }

    public function testSubmitNumericInputWithScale(): void
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, ['input' => 'number', 'scale' => 2]);
        \$form->submit('1,234');

        \$this->assertSame(1.23, \$form->getData());
        \$this->assertSame(1.23, \$form->getNormData());
        \$this->assertSame('1,23', \$form->getViewData());
    }

    public function testSubmitStringInput(): void
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, ['input' => 'string']);
        \$form->submit('1,234');

        \$this->assertSame('1.234', \$form->getData());
        \$this->assertSame(1.234, \$form->getNormData());
        \$this->assertSame('1,234', \$form->getViewData());
    }

    public function testSubmitStringInputWithScale(): void
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, ['input' => 'string', 'scale' => 2]);
        \$form->submit('1,234');

        \$this->assertSame('1.23', \$form->getData());
        \$this->assertSame(1.23, \$form->getNormData());
        \$this->assertSame('1,23', \$form->getViewData());
    }

    public function testIgnoresDefaultLocaleToRenderHtml5NumberWidgets()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'scale' => 2,
            'rounding_mode' => \\NumberFormatter::ROUND_UP,
            'html5' => true,
        ]);
        \$form->setData(12345.54321);

        \$this->assertSame('12345.55', \$form->createView()->vars['value']);
        \$this->assertSame('12345.55', \$form->getViewData());
    }

    public function testGroupingNotAllowedWithHtml5Widget()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\LogicException');
        \$this->factory->create(static::TESTED_TYPE, null, [
            'grouping' => true,
            'html5' => true,
        ]);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/Extension/Core/Type/NumberTypeTest.php";
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

namespace Symfony\\Component\\Form\\Tests\\Extension\\Core\\Type;

use Symfony\\Component\\Intl\\Util\\IntlTestHelper;

class NumberTypeTest extends BaseTypeTest
{
    const TESTED_TYPE = 'Symfony\\Component\\Form\\Extension\\Core\\Type\\NumberType';

    private \$defaultLocale;

    protected function setUp(): void
    {
        parent::setUp();

        // we test against \"de_DE\", so we need the full implementation
        IntlTestHelper::requireFullIntl(\$this, false);

        \$this->defaultLocale = \\Locale::getDefault();
        \\Locale::setDefault('de_DE');
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        \\Locale::setDefault(\$this->defaultLocale);
    }

    public function testDefaultFormatting(): void
    {
        \$form = \$this->factory->create(static::TESTED_TYPE);
        \$form->setData('12345.67890');

        \$this->assertSame('12345,679', \$form->createView()->vars['value']);
    }

    public function testDefaultFormattingWithGrouping(): void
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, ['grouping' => true]);
        \$form->setData('12345.67890');

        \$this->assertSame('12.345,679', \$form->createView()->vars['value']);
    }

    public function testDefaultFormattingWithScale(): void
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, ['scale' => 2]);
        \$form->setData('12345.67890');

        \$this->assertSame('12345,68', \$form->createView()->vars['value']);
    }

    public function testDefaultFormattingWithScaleFloat(): void
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, ['scale' => 2]);
        \$form->setData(12345.67890);

        \$this->assertSame('12345,68', \$form->createView()->vars['value']);
    }

    public function testDefaultFormattingWithScaleAndStringInput(): void
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, ['scale' => 2, 'input' => 'string']);
        \$form->setData('12345.67890');

        \$this->assertSame('12345,68', \$form->createView()->vars['value']);
    }

    public function testStringInputWithFloatData(): void
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, 12345.6789, [
            'input' => 'string',
            'scale' => 2,
        ]);

        \$this->assertSame('12345,68', \$form->createView()->vars['value']);
    }

    public function testStringInputWithIntData(): void
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, 12345, [
            'input' => 'string',
            'scale' => 2,
        ]);

        \$this->assertSame('12345,00', \$form->createView()->vars['value']);
    }

    public function testDefaultFormattingWithRounding(): void
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, ['scale' => 0, 'rounding_mode' => \\NumberFormatter::ROUND_UP]);
        \$form->setData('12345.54321');

        \$this->assertSame('12346', \$form->createView()->vars['value']);
    }

    public function testSubmitNull(\$expected = null, \$norm = null, \$view = null)
    {
        parent::testSubmitNull(\$expected, \$norm, '');
    }

    public function testSubmitNullUsesDefaultEmptyData(\$emptyData = '10', \$expectedData = 10.0)
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'empty_data' => \$emptyData,
        ]);
        \$form->submit(null);

        \$this->assertSame(\$emptyData, \$form->getViewData());
        \$this->assertSame(\$expectedData, \$form->getNormData());
        \$this->assertSame(\$expectedData, \$form->getData());
    }

    public function testSubmitNumericInput(): void
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, ['input' => 'number']);
        \$form->submit('1,234');

        \$this->assertSame(1.234, \$form->getData());
        \$this->assertSame(1.234, \$form->getNormData());
        \$this->assertSame('1,234', \$form->getViewData());
    }

    public function testSubmitNumericInputWithScale(): void
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, ['input' => 'number', 'scale' => 2]);
        \$form->submit('1,234');

        \$this->assertSame(1.23, \$form->getData());
        \$this->assertSame(1.23, \$form->getNormData());
        \$this->assertSame('1,23', \$form->getViewData());
    }

    public function testSubmitStringInput(): void
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, ['input' => 'string']);
        \$form->submit('1,234');

        \$this->assertSame('1.234', \$form->getData());
        \$this->assertSame(1.234, \$form->getNormData());
        \$this->assertSame('1,234', \$form->getViewData());
    }

    public function testSubmitStringInputWithScale(): void
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, ['input' => 'string', 'scale' => 2]);
        \$form->submit('1,234');

        \$this->assertSame('1.23', \$form->getData());
        \$this->assertSame(1.23, \$form->getNormData());
        \$this->assertSame('1,23', \$form->getViewData());
    }

    public function testIgnoresDefaultLocaleToRenderHtml5NumberWidgets()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'scale' => 2,
            'rounding_mode' => \\NumberFormatter::ROUND_UP,
            'html5' => true,
        ]);
        \$form->setData(12345.54321);

        \$this->assertSame('12345.55', \$form->createView()->vars['value']);
        \$this->assertSame('12345.55', \$form->getViewData());
    }

    public function testGroupingNotAllowedWithHtml5Widget()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\LogicException');
        \$this->factory->create(static::TESTED_TYPE, null, [
            'grouping' => true,
            'html5' => true,
        ]);
    }
}
", "vendor/symfony/form/Tests/Extension/Core/Type/NumberTypeTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/Extension/Core/Type/NumberTypeTest.php");
    }
}
