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

/* vendor/symfony/form/Tests/Extension/Core/Type/ExtendedChoiceTypeTest.php */
class __TwigTemplate_cb02b702619fc211f675c375954b798c838318e1f75fd9712e0fe0040b47aa4c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/Type/ExtendedChoiceTypeTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/Type/ExtendedChoiceTypeTest.php"));

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

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Form\\Forms;
use Symfony\\Component\\Form\\Tests\\Fixtures\\ChoiceTypeExtension;
use Symfony\\Component\\Form\\Tests\\Fixtures\\LazyChoiceTypeExtension;

class ExtendedChoiceTypeTest extends TestCase
{
    /**
     * @dataProvider provideTestedTypes
     */
    public function testChoicesAreOverridden(\$type)
    {
        ChoiceTypeExtension::\$extendedType = \$type;
        \$factory = Forms::createFormFactoryBuilder()
            ->addTypeExtension(new ChoiceTypeExtension())
            ->getFormFactory()
        ;

        \$choices = \$factory->create(\$type, null, ['choice_loader' => null])->createView()->vars['choices'];

        \$this->assertCount(2, \$choices);
        \$this->assertSame('A', \$choices[0]->label);
        \$this->assertSame('a', \$choices[0]->value);
        \$this->assertSame('B', \$choices[1]->label);
        \$this->assertSame('b', \$choices[1]->value);
    }

    /**
     * @dataProvider provideTestedTypes
     */
    public function testChoiceLoaderIsOverridden(\$type)
    {
        LazyChoiceTypeExtension::\$extendedType = \$type;
        \$factory = Forms::createFormFactoryBuilder()
            ->addTypeExtension(new LazyChoiceTypeExtension())
            ->getFormFactory()
        ;

        \$choices = \$factory->create(\$type)->createView()->vars['choices'];

        \$this->assertCount(2, \$choices);
        \$this->assertSame('Lazy A', \$choices[0]->label);
        \$this->assertSame('lazy_a', \$choices[0]->value);
        \$this->assertSame('Lazy B', \$choices[1]->label);
        \$this->assertSame('lazy_b', \$choices[1]->value);
    }

    public function provideTestedTypes()
    {
        yield [CountryTypeTest::TESTED_TYPE];
        yield [CurrencyTypeTest::TESTED_TYPE];
        yield [LanguageTypeTest::TESTED_TYPE];
        yield [LocaleTypeTest::TESTED_TYPE];
        yield [TimezoneTypeTest::TESTED_TYPE];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/Extension/Core/Type/ExtendedChoiceTypeTest.php";
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

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Form\\Forms;
use Symfony\\Component\\Form\\Tests\\Fixtures\\ChoiceTypeExtension;
use Symfony\\Component\\Form\\Tests\\Fixtures\\LazyChoiceTypeExtension;

class ExtendedChoiceTypeTest extends TestCase
{
    /**
     * @dataProvider provideTestedTypes
     */
    public function testChoicesAreOverridden(\$type)
    {
        ChoiceTypeExtension::\$extendedType = \$type;
        \$factory = Forms::createFormFactoryBuilder()
            ->addTypeExtension(new ChoiceTypeExtension())
            ->getFormFactory()
        ;

        \$choices = \$factory->create(\$type, null, ['choice_loader' => null])->createView()->vars['choices'];

        \$this->assertCount(2, \$choices);
        \$this->assertSame('A', \$choices[0]->label);
        \$this->assertSame('a', \$choices[0]->value);
        \$this->assertSame('B', \$choices[1]->label);
        \$this->assertSame('b', \$choices[1]->value);
    }

    /**
     * @dataProvider provideTestedTypes
     */
    public function testChoiceLoaderIsOverridden(\$type)
    {
        LazyChoiceTypeExtension::\$extendedType = \$type;
        \$factory = Forms::createFormFactoryBuilder()
            ->addTypeExtension(new LazyChoiceTypeExtension())
            ->getFormFactory()
        ;

        \$choices = \$factory->create(\$type)->createView()->vars['choices'];

        \$this->assertCount(2, \$choices);
        \$this->assertSame('Lazy A', \$choices[0]->label);
        \$this->assertSame('lazy_a', \$choices[0]->value);
        \$this->assertSame('Lazy B', \$choices[1]->label);
        \$this->assertSame('lazy_b', \$choices[1]->value);
    }

    public function provideTestedTypes()
    {
        yield [CountryTypeTest::TESTED_TYPE];
        yield [CurrencyTypeTest::TESTED_TYPE];
        yield [LanguageTypeTest::TESTED_TYPE];
        yield [LocaleTypeTest::TESTED_TYPE];
        yield [TimezoneTypeTest::TESTED_TYPE];
    }
}
", "vendor/symfony/form/Tests/Extension/Core/Type/ExtendedChoiceTypeTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/Extension/Core/Type/ExtendedChoiceTypeTest.php");
    }
}
