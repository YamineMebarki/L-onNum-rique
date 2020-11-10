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

/* vendor/symfony/form/Tests/Extension/Core/Type/CurrencyTypeTest.php */
class __TwigTemplate_607ccbc184f801f9dfc9e726dc8f90224ab01482c0c33f899dc2975a9357c131 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/Type/CurrencyTypeTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/Type/CurrencyTypeTest.php"));

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

use Symfony\\Component\\Form\\ChoiceList\\View\\ChoiceView;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\CurrencyType;
use Symfony\\Component\\Intl\\Util\\IntlTestHelper;

class CurrencyTypeTest extends BaseTypeTest
{
    const TESTED_TYPE = 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CurrencyType';

    protected function setUp(): void
    {
        IntlTestHelper::requireIntl(\$this, false);

        parent::setUp();
    }

    public function testCurrenciesAreSelectable()
    {
        \$choices = \$this->factory->create(static::TESTED_TYPE)
            ->createView()->vars['choices'];

        \$this->assertContainsEquals(new ChoiceView('EUR', 'EUR', 'Euro'), \$choices);
        \$this->assertContainsEquals(new ChoiceView('USD', 'USD', 'US Dollar'), \$choices);
        \$this->assertContainsEquals(new ChoiceView('SIT', 'SIT', 'Slovenian Tolar'), \$choices);
    }

    /**
     * @requires extension intl
     */
    public function testChoiceTranslationLocaleOption()
    {
        \$choices = \$this->factory
            ->create(static::TESTED_TYPE, null, [
                'choice_translation_locale' => 'uk',
            ])
            ->createView()->vars['choices'];

        // Don't check objects for identity
        \$this->assertContainsEquals(new ChoiceView('EUR', 'EUR', 'євро'), \$choices);
        \$this->assertContainsEquals(new ChoiceView('USD', 'USD', 'долар США'), \$choices);
        \$this->assertContainsEquals(new ChoiceView('SIT', 'SIT', 'словенський толар'), \$choices);
    }

    public function testSubmitNull(\$expected = null, \$norm = null, \$view = null)
    {
        parent::testSubmitNull(\$expected, \$norm, '');
    }

    public function testSubmitNullUsesDefaultEmptyData(\$emptyData = 'EUR', \$expectedData = 'EUR')
    {
        parent::testSubmitNullUsesDefaultEmptyData(\$emptyData, \$expectedData);
    }

    /**
     * @group legacy
     */
    public function testInvalidChoiceValuesAreDropped()
    {
        \$type = new CurrencyType();

        \$this->assertSame([], \$type->loadChoicesForValues(['foo']));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/Extension/Core/Type/CurrencyTypeTest.php";
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

use Symfony\\Component\\Form\\ChoiceList\\View\\ChoiceView;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\CurrencyType;
use Symfony\\Component\\Intl\\Util\\IntlTestHelper;

class CurrencyTypeTest extends BaseTypeTest
{
    const TESTED_TYPE = 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CurrencyType';

    protected function setUp(): void
    {
        IntlTestHelper::requireIntl(\$this, false);

        parent::setUp();
    }

    public function testCurrenciesAreSelectable()
    {
        \$choices = \$this->factory->create(static::TESTED_TYPE)
            ->createView()->vars['choices'];

        \$this->assertContainsEquals(new ChoiceView('EUR', 'EUR', 'Euro'), \$choices);
        \$this->assertContainsEquals(new ChoiceView('USD', 'USD', 'US Dollar'), \$choices);
        \$this->assertContainsEquals(new ChoiceView('SIT', 'SIT', 'Slovenian Tolar'), \$choices);
    }

    /**
     * @requires extension intl
     */
    public function testChoiceTranslationLocaleOption()
    {
        \$choices = \$this->factory
            ->create(static::TESTED_TYPE, null, [
                'choice_translation_locale' => 'uk',
            ])
            ->createView()->vars['choices'];

        // Don't check objects for identity
        \$this->assertContainsEquals(new ChoiceView('EUR', 'EUR', 'євро'), \$choices);
        \$this->assertContainsEquals(new ChoiceView('USD', 'USD', 'долар США'), \$choices);
        \$this->assertContainsEquals(new ChoiceView('SIT', 'SIT', 'словенський толар'), \$choices);
    }

    public function testSubmitNull(\$expected = null, \$norm = null, \$view = null)
    {
        parent::testSubmitNull(\$expected, \$norm, '');
    }

    public function testSubmitNullUsesDefaultEmptyData(\$emptyData = 'EUR', \$expectedData = 'EUR')
    {
        parent::testSubmitNullUsesDefaultEmptyData(\$emptyData, \$expectedData);
    }

    /**
     * @group legacy
     */
    public function testInvalidChoiceValuesAreDropped()
    {
        \$type = new CurrencyType();

        \$this->assertSame([], \$type->loadChoicesForValues(['foo']));
    }
}
", "vendor/symfony/form/Tests/Extension/Core/Type/CurrencyTypeTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/Extension/Core/Type/CurrencyTypeTest.php");
    }
}
