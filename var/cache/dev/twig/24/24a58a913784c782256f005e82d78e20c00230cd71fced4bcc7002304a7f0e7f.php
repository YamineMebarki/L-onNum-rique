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

/* vendor/symfony/validator/Tests/Constraints/CurrencyValidatorTest.php */
class __TwigTemplate_73dff03a2c30807e72ce8d991f2cfc537d72d639a35f2545293c4492f0865e8c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/CurrencyValidatorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/CurrencyValidatorTest.php"));

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
use Symfony\\Component\\Validator\\Constraints\\Currency;
use Symfony\\Component\\Validator\\Constraints\\CurrencyValidator;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;

class CurrencyValidatorTest extends ConstraintValidatorTestCase
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
        return new CurrencyValidator();
    }

    public function testNullIsValid()
    {
        \$this->validator->validate(null, new Currency());

        \$this->assertNoViolation();
    }

    public function testEmptyStringIsValid()
    {
        \$this->validator->validate('', new Currency());

        \$this->assertNoViolation();
    }

    public function testExpectsStringCompatibleType()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\UnexpectedValueException');
        \$this->validator->validate(new \\stdClass(), new Currency());
    }

    /**
     * @dataProvider getValidCurrencies
     */
    public function testValidCurrencies(\$currency)
    {
        \$this->validator->validate(\$currency, new Currency());

        \$this->assertNoViolation();
    }

    /**
     * @dataProvider getValidCurrencies
     **/
    public function testValidCurrenciesWithCountrySpecificLocale(\$currency)
    {
        IntlTestHelper::requireFullIntl(\$this, false);

        \\Locale::setDefault('en_GB');

        \$this->validator->validate(\$currency, new Currency());

        \$this->assertNoViolation();
    }

    public function getValidCurrencies()
    {
        return [
            ['EUR'],
            ['USD'],
            ['SIT'],
            ['AUD'],
            ['CAD'],
        ];
    }

    /**
     * @dataProvider getInvalidCurrencies
     */
    public function testInvalidCurrencies(\$currency)
    {
        \$constraint = new Currency([
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$currency, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 109, $this->source); })()), "html", null, true);
        echo "', '\"'.\$currency.'\"')
            ->setCode(Currency::NO_SUCH_CURRENCY_ERROR)
            ->assertRaised();
    }

    public function getInvalidCurrencies()
    {
        return [
            ['EN'],
            ['foobar'],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Constraints/CurrencyValidatorTest.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 109,  43 => 1,);
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
use Symfony\\Component\\Validator\\Constraints\\Currency;
use Symfony\\Component\\Validator\\Constraints\\CurrencyValidator;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;

class CurrencyValidatorTest extends ConstraintValidatorTestCase
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
        return new CurrencyValidator();
    }

    public function testNullIsValid()
    {
        \$this->validator->validate(null, new Currency());

        \$this->assertNoViolation();
    }

    public function testEmptyStringIsValid()
    {
        \$this->validator->validate('', new Currency());

        \$this->assertNoViolation();
    }

    public function testExpectsStringCompatibleType()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\UnexpectedValueException');
        \$this->validator->validate(new \\stdClass(), new Currency());
    }

    /**
     * @dataProvider getValidCurrencies
     */
    public function testValidCurrencies(\$currency)
    {
        \$this->validator->validate(\$currency, new Currency());

        \$this->assertNoViolation();
    }

    /**
     * @dataProvider getValidCurrencies
     **/
    public function testValidCurrenciesWithCountrySpecificLocale(\$currency)
    {
        IntlTestHelper::requireFullIntl(\$this, false);

        \\Locale::setDefault('en_GB');

        \$this->validator->validate(\$currency, new Currency());

        \$this->assertNoViolation();
    }

    public function getValidCurrencies()
    {
        return [
            ['EUR'],
            ['USD'],
            ['SIT'],
            ['AUD'],
            ['CAD'],
        ];
    }

    /**
     * @dataProvider getInvalidCurrencies
     */
    public function testInvalidCurrencies(\$currency)
    {
        \$constraint = new Currency([
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$currency, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ value }}', '\"'.\$currency.'\"')
            ->setCode(Currency::NO_SUCH_CURRENCY_ERROR)
            ->assertRaised();
    }

    public function getInvalidCurrencies()
    {
        return [
            ['EN'],
            ['foobar'],
        ];
    }
}
", "vendor/symfony/validator/Tests/Constraints/CurrencyValidatorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Constraints/CurrencyValidatorTest.php");
    }
}
