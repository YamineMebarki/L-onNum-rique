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

/* vendor/symfony/form/Tests/Extension/Core/Type/MoneyTypeTest.php */
class __TwigTemplate_d3e0749161c62ffca0ff840c260e9d4dae62fb9f3bc925c42f4e8271f47b6d36 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/Type/MoneyTypeTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/Type/MoneyTypeTest.php"));

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

class MoneyTypeTest extends BaseTypeTest
{
    const TESTED_TYPE = 'Symfony\\Component\\Form\\Extension\\Core\\Type\\MoneyType';

    private \$defaultLocale;

    protected function setUp(): void
    {
        // we test against different locales, so we need the full
        // implementation
        IntlTestHelper::requireFullIntl(\$this, false);

        parent::setUp();

        \$this->defaultLocale = \\Locale::getDefault();
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        \\Locale::setDefault(\$this->defaultLocale);
    }

    public function testPassMoneyPatternToView()
    {
        \\Locale::setDefault('de_DE');

        \$view = \$this->factory->create(static::TESTED_TYPE)
            ->createView();

        \$this->assertSame('";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 47, $this->source); })()), "html", null, true);
        echo " €', \$view->vars['money_pattern']);
    }

    public function testMoneyPatternWorksForYen()
    {
        \\Locale::setDefault('en_US');

        \$view = \$this->factory->create(static::TESTED_TYPE, null, ['currency' => 'JPY'])
            ->createView();

        \$this->assertSame('¥ ";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 57, $this->source); })()), "html", null, true);
        echo "', \$view->vars['money_pattern']);
    }

    // https://github.com/symfony/symfony/issues/5458
    public function testPassDifferentPatternsForDifferentCurrencies()
    {
        \\Locale::setDefault('de_DE');

        \$view1 = \$this->factory->create(static::TESTED_TYPE, null, ['currency' => 'GBP'])->createView();
        \$view2 = \$this->factory->create(static::TESTED_TYPE, null, ['currency' => 'EUR'])->createView();

        \$this->assertSame('";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 68, $this->source); })()), "html", null, true);
        echo " £', \$view1->vars['money_pattern']);
        \$this->assertSame('";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 69, $this->source); })()), "html", null, true);
        echo " €', \$view2->vars['money_pattern']);
    }

    public function testSubmitNull(\$expected = null, \$norm = null, \$view = null)
    {
        parent::testSubmitNull(\$expected, \$norm, '');
    }

    public function testMoneyPatternWithoutCurrency()
    {
        \$view = \$this->factory->create(static::TESTED_TYPE, null, ['currency' => false])
            ->createView();

        \$this->assertSame('";
        // line 82
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 82, $this->source); })()), "html", null, true);
        echo "', \$view->vars['money_pattern']);
    }

    public function testSubmitNullUsesDefaultEmptyData(\$emptyData = '10.00', \$expectedData = 10.0)
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'empty_data' => \$emptyData,
        ]);
        \$form->submit(null);

        \$this->assertSame(\$emptyData, \$form->getViewData());
        \$this->assertSame(\$expectedData, \$form->getNormData());
        \$this->assertSame(\$expectedData, \$form->getData());
    }

    public function testDefaultFormattingWithDefaultRounding()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, ['scale' => 0]);
        \$form->setData('12345.54321');

        \$this->assertSame('12346', \$form->createView()->vars['value']);
    }

    public function testDefaultFormattingWithSpecifiedRounding()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, ['scale' => 0, 'rounding_mode' => \\NumberFormatter::ROUND_DOWN]);
        \$form->setData('12345.54321');

        \$this->assertSame('12345', \$form->createView()->vars['value']);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/Extension/Core/Type/MoneyTypeTest.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 82,  122 => 69,  118 => 68,  104 => 57,  91 => 47,  43 => 1,);
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

class MoneyTypeTest extends BaseTypeTest
{
    const TESTED_TYPE = 'Symfony\\Component\\Form\\Extension\\Core\\Type\\MoneyType';

    private \$defaultLocale;

    protected function setUp(): void
    {
        // we test against different locales, so we need the full
        // implementation
        IntlTestHelper::requireFullIntl(\$this, false);

        parent::setUp();

        \$this->defaultLocale = \\Locale::getDefault();
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        \\Locale::setDefault(\$this->defaultLocale);
    }

    public function testPassMoneyPatternToView()
    {
        \\Locale::setDefault('de_DE');

        \$view = \$this->factory->create(static::TESTED_TYPE)
            ->createView();

        \$this->assertSame('{{ widget }} €', \$view->vars['money_pattern']);
    }

    public function testMoneyPatternWorksForYen()
    {
        \\Locale::setDefault('en_US');

        \$view = \$this->factory->create(static::TESTED_TYPE, null, ['currency' => 'JPY'])
            ->createView();

        \$this->assertSame('¥ {{ widget }}', \$view->vars['money_pattern']);
    }

    // https://github.com/symfony/symfony/issues/5458
    public function testPassDifferentPatternsForDifferentCurrencies()
    {
        \\Locale::setDefault('de_DE');

        \$view1 = \$this->factory->create(static::TESTED_TYPE, null, ['currency' => 'GBP'])->createView();
        \$view2 = \$this->factory->create(static::TESTED_TYPE, null, ['currency' => 'EUR'])->createView();

        \$this->assertSame('{{ widget }} £', \$view1->vars['money_pattern']);
        \$this->assertSame('{{ widget }} €', \$view2->vars['money_pattern']);
    }

    public function testSubmitNull(\$expected = null, \$norm = null, \$view = null)
    {
        parent::testSubmitNull(\$expected, \$norm, '');
    }

    public function testMoneyPatternWithoutCurrency()
    {
        \$view = \$this->factory->create(static::TESTED_TYPE, null, ['currency' => false])
            ->createView();

        \$this->assertSame('{{ widget }}', \$view->vars['money_pattern']);
    }

    public function testSubmitNullUsesDefaultEmptyData(\$emptyData = '10.00', \$expectedData = 10.0)
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'empty_data' => \$emptyData,
        ]);
        \$form->submit(null);

        \$this->assertSame(\$emptyData, \$form->getViewData());
        \$this->assertSame(\$expectedData, \$form->getNormData());
        \$this->assertSame(\$expectedData, \$form->getData());
    }

    public function testDefaultFormattingWithDefaultRounding()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, ['scale' => 0]);
        \$form->setData('12345.54321');

        \$this->assertSame('12346', \$form->createView()->vars['value']);
    }

    public function testDefaultFormattingWithSpecifiedRounding()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, ['scale' => 0, 'rounding_mode' => \\NumberFormatter::ROUND_DOWN]);
        \$form->setData('12345.54321');

        \$this->assertSame('12345', \$form->createView()->vars['value']);
    }
}
", "vendor/symfony/form/Tests/Extension/Core/Type/MoneyTypeTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/Extension/Core/Type/MoneyTypeTest.php");
    }
}
