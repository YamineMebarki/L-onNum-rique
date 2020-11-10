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

/* vendor/symfony/validator/Tests/Constraints/LanguageValidatorTest.php */
class __TwigTemplate_21f2d0b19836bbb83b95870b75cd7c0f7aa471e4c1db2ac25e4c33b98ab3c127 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/LanguageValidatorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/LanguageValidatorTest.php"));

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

namespace Symfony\\Component\\Validator\\Tests\\Constraints;

use Symfony\\Component\\Intl\\Util\\IntlTestHelper;
use Symfony\\Component\\Validator\\Constraints\\Language;
use Symfony\\Component\\Validator\\Constraints\\LanguageValidator;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;

class LanguageValidatorTest extends ConstraintValidatorTestCase
{
    private \$defaultLocale;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->defaultLocale = \\Locale::getDefault();
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        \\Locale::setDefault(\$this->defaultLocale);
    }

    protected function createValidator()
    {
        return new LanguageValidator();
    }

    public function testNullIsValid()
    {
        \$this->validator->validate(null, new Language());

        \$this->assertNoViolation();
    }

    public function testEmptyStringIsValid()
    {
        \$this->validator->validate('', new Language());

        \$this->assertNoViolation();
    }

    public function testExpectsStringCompatibleType()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\UnexpectedValueException');
        \$this->validator->validate(new \\stdClass(), new Language());
    }

    /**
     * @dataProvider getValidLanguages
     */
    public function testValidLanguages(\$language)
    {
        \$this->validator->validate(\$language, new Language());

        \$this->assertNoViolation();
    }

    public function getValidLanguages()
    {
        return [
            ['en'],
            ['my'],
        ];
    }

    /**
     * @dataProvider getInvalidLanguages
     */
    public function testInvalidLanguages(\$language)
    {
        \$constraint = new Language([
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$language, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 92
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 92, $this->source); })()), "html", null, true);
        echo "', '\"'.\$language.'\"')
            ->setCode(Language::NO_SUCH_LANGUAGE_ERROR)
            ->assertRaised();
    }

    public function getInvalidLanguages()
    {
        return [
            ['EN'],
            ['foobar'],
        ];
    }

    public function testValidateUsingCountrySpecificLocale()
    {
        IntlTestHelper::requireFullIntl(\$this, false);

        \\Locale::setDefault('fr_FR');
        \$existingLanguage = 'en';

        \$this->validator->validate(\$existingLanguage, new Language([
            'message' => 'aMessage',
        ]));

        \$this->assertNoViolation();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Constraints/LanguageValidatorTest.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 92,  43 => 1,);
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

namespace Symfony\\Component\\Validator\\Tests\\Constraints;

use Symfony\\Component\\Intl\\Util\\IntlTestHelper;
use Symfony\\Component\\Validator\\Constraints\\Language;
use Symfony\\Component\\Validator\\Constraints\\LanguageValidator;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;

class LanguageValidatorTest extends ConstraintValidatorTestCase
{
    private \$defaultLocale;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->defaultLocale = \\Locale::getDefault();
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        \\Locale::setDefault(\$this->defaultLocale);
    }

    protected function createValidator()
    {
        return new LanguageValidator();
    }

    public function testNullIsValid()
    {
        \$this->validator->validate(null, new Language());

        \$this->assertNoViolation();
    }

    public function testEmptyStringIsValid()
    {
        \$this->validator->validate('', new Language());

        \$this->assertNoViolation();
    }

    public function testExpectsStringCompatibleType()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\UnexpectedValueException');
        \$this->validator->validate(new \\stdClass(), new Language());
    }

    /**
     * @dataProvider getValidLanguages
     */
    public function testValidLanguages(\$language)
    {
        \$this->validator->validate(\$language, new Language());

        \$this->assertNoViolation();
    }

    public function getValidLanguages()
    {
        return [
            ['en'],
            ['my'],
        ];
    }

    /**
     * @dataProvider getInvalidLanguages
     */
    public function testInvalidLanguages(\$language)
    {
        \$constraint = new Language([
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$language, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ value }}', '\"'.\$language.'\"')
            ->setCode(Language::NO_SUCH_LANGUAGE_ERROR)
            ->assertRaised();
    }

    public function getInvalidLanguages()
    {
        return [
            ['EN'],
            ['foobar'],
        ];
    }

    public function testValidateUsingCountrySpecificLocale()
    {
        IntlTestHelper::requireFullIntl(\$this, false);

        \\Locale::setDefault('fr_FR');
        \$existingLanguage = 'en';

        \$this->validator->validate(\$existingLanguage, new Language([
            'message' => 'aMessage',
        ]));

        \$this->assertNoViolation();
    }
}
", "vendor/symfony/validator/Tests/Constraints/LanguageValidatorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Constraints/LanguageValidatorTest.php");
    }
}
