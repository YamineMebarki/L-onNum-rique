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

/* vendor/symfony/form/Tests/Extension/Core/Type/LocaleTypeTest.php */
class __TwigTemplate_1b166aeda947f32ee4eafe270a03ad2f9830e3df692bac3311ba430319ffbc89 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/Type/LocaleTypeTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/Type/LocaleTypeTest.php"));

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
use Symfony\\Component\\Form\\Extension\\Core\\Type\\LocaleType;
use Symfony\\Component\\Intl\\Util\\IntlTestHelper;

class LocaleTypeTest extends BaseTypeTest
{
    const TESTED_TYPE = 'Symfony\\Component\\Form\\Extension\\Core\\Type\\LocaleType';

    protected function setUp(): void
    {
        IntlTestHelper::requireIntl(\$this, false);

        parent::setUp();
    }

    public function testLocalesAreSelectable()
    {
        \$choices = \$this->factory->create(static::TESTED_TYPE)
            ->createView()->vars['choices'];

        \$this->assertContainsEquals(new ChoiceView('en', 'en', 'English'), \$choices);
        \$this->assertContainsEquals(new ChoiceView('en_GB', 'en_GB', 'English (United Kingdom)'), \$choices);
        \$this->assertContainsEquals(new ChoiceView('zh_Hant_HK', 'zh_Hant_HK', 'Chinese (Traditional, Hong Kong SAR China)'), \$choices);
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
        \$this->assertContainsEquals(new ChoiceView('en', 'en', 'англійська'), \$choices);
        \$this->assertContainsEquals(new ChoiceView('en_GB', 'en_GB', 'англійська (Велика Британія)'), \$choices);
        \$this->assertContainsEquals(new ChoiceView('zh_Hant_MO', 'zh_Hant_MO', 'китайська (традиційна, Макао, О.А.Р Китаю)'), \$choices);
    }

    public function testSubmitNull(\$expected = null, \$norm = null, \$view = null)
    {
        parent::testSubmitNull(\$expected, \$norm, '');
    }

    public function testSubmitNullUsesDefaultEmptyData(\$emptyData = 'en', \$expectedData = 'en')
    {
        parent::testSubmitNullUsesDefaultEmptyData(\$emptyData, \$expectedData);
    }

    /**
     * @group legacy
     */
    public function testInvalidChoiceValuesAreDropped()
    {
        \$type = new LocaleType();

        \$this->assertSame([], \$type->loadChoicesForValues(['foo']));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/Extension/Core/Type/LocaleTypeTest.php";
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
use Symfony\\Component\\Form\\Extension\\Core\\Type\\LocaleType;
use Symfony\\Component\\Intl\\Util\\IntlTestHelper;

class LocaleTypeTest extends BaseTypeTest
{
    const TESTED_TYPE = 'Symfony\\Component\\Form\\Extension\\Core\\Type\\LocaleType';

    protected function setUp(): void
    {
        IntlTestHelper::requireIntl(\$this, false);

        parent::setUp();
    }

    public function testLocalesAreSelectable()
    {
        \$choices = \$this->factory->create(static::TESTED_TYPE)
            ->createView()->vars['choices'];

        \$this->assertContainsEquals(new ChoiceView('en', 'en', 'English'), \$choices);
        \$this->assertContainsEquals(new ChoiceView('en_GB', 'en_GB', 'English (United Kingdom)'), \$choices);
        \$this->assertContainsEquals(new ChoiceView('zh_Hant_HK', 'zh_Hant_HK', 'Chinese (Traditional, Hong Kong SAR China)'), \$choices);
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
        \$this->assertContainsEquals(new ChoiceView('en', 'en', 'англійська'), \$choices);
        \$this->assertContainsEquals(new ChoiceView('en_GB', 'en_GB', 'англійська (Велика Британія)'), \$choices);
        \$this->assertContainsEquals(new ChoiceView('zh_Hant_MO', 'zh_Hant_MO', 'китайська (традиційна, Макао, О.А.Р Китаю)'), \$choices);
    }

    public function testSubmitNull(\$expected = null, \$norm = null, \$view = null)
    {
        parent::testSubmitNull(\$expected, \$norm, '');
    }

    public function testSubmitNullUsesDefaultEmptyData(\$emptyData = 'en', \$expectedData = 'en')
    {
        parent::testSubmitNullUsesDefaultEmptyData(\$emptyData, \$expectedData);
    }

    /**
     * @group legacy
     */
    public function testInvalidChoiceValuesAreDropped()
    {
        \$type = new LocaleType();

        \$this->assertSame([], \$type->loadChoicesForValues(['foo']));
    }
}
", "vendor/symfony/form/Tests/Extension/Core/Type/LocaleTypeTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/Extension/Core/Type/LocaleTypeTest.php");
    }
}
