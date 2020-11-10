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

/* vendor/symfony/validator/Tests/Constraints/CardSchemeValidatorTest.php */
class __TwigTemplate_a4a97e8b074b95a18e4ab89cb0e22bd45a26ab6d816d8da10eb551146f15e8f2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/CardSchemeValidatorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/CardSchemeValidatorTest.php"));

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

use Symfony\\Component\\Validator\\Constraints\\CardScheme;
use Symfony\\Component\\Validator\\Constraints\\CardSchemeValidator;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;

class CardSchemeValidatorTest extends ConstraintValidatorTestCase
{
    protected function createValidator()
    {
        return new CardSchemeValidator();
    }

    public function testNullIsValid()
    {
        \$this->validator->validate(null, new CardScheme(['schemes' => []]));

        \$this->assertNoViolation();
    }

    public function testEmptyStringIsValid()
    {
        \$this->validator->validate('', new CardScheme(['schemes' => []]));

        \$this->assertNoViolation();
    }

    /**
     * @dataProvider getValidNumbers
     */
    public function testValidNumbers(\$scheme, \$number)
    {
        \$this->validator->validate(\$number, new CardScheme(['schemes' => \$scheme]));

        \$this->assertNoViolation();
    }

    /**
     * @dataProvider getInvalidNumbers
     */
    public function testInvalidNumbers(\$scheme, \$number, \$code)
    {
        \$constraint = new CardScheme([
            'schemes' => \$scheme,
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$number, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 62, $this->source); })()), "html", null, true);
        echo "', \\is_string(\$number) ? '\"'.\$number.'\"' : \$number)
            ->setCode(\$code)
            ->assertRaised();
    }

    public function getValidNumbers()
    {
        return [
            ['AMEX', '378282246310005'],
            ['AMEX', '371449635398431'],
            ['AMEX', '378734493671000'],
            ['AMEX', '347298508610146'],
            ['CHINA_UNIONPAY', '6228888888888888'],
            ['CHINA_UNIONPAY', '62288888888888888'],
            ['CHINA_UNIONPAY', '622888888888888888'],
            ['CHINA_UNIONPAY', '6228888888888888888'],
            ['DINERS', '30569309025904'],
            ['DINERS', '36088894118515'],
            ['DINERS', '38520000023237'],
            ['DISCOVER', '6011111111111117'],
            ['DISCOVER', '6011000990139424'],
            ['INSTAPAYMENT', '6372476031350068'],
            ['INSTAPAYMENT', '6385537775789749'],
            ['INSTAPAYMENT', '6393440808445746'],
            ['JCB', '3530111333300000'],
            ['JCB', '3566002020360505'],
            ['JCB', '213112345678901'],
            ['JCB', '180012345678901'],
            ['LASER', '6304678107004080'],
            ['LASER', '6706440607428128629'],
            ['LASER', '6771656738314582216'],
            ['MAESTRO', '6759744069209'],
            ['MAESTRO', '5020507657408074712'],
            ['MAESTRO', '5612559223580173965'],
            ['MAESTRO', '6759744069209'],
            ['MAESTRO', '6594371785970435599'],
            ['MASTERCARD', '5555555555554444'],
            ['MASTERCARD', '5105105105105100'],
            ['MASTERCARD', '2221005555554444'],
            ['MASTERCARD', '2230000000000000'],
            ['MASTERCARD', '2300000000000000'],
            ['MASTERCARD', '2699999999999999'],
            ['MASTERCARD', '2709999999999999'],
            ['MASTERCARD', '2720995105105100'],
            ['MIR', '2200381427330082'],
            ['UATP', '110165309696173'],
            ['VISA', '4111111111111111'],
            ['VISA', '4012888888881881'],
            ['VISA', '4222222222222'],
            ['VISA', '4917610000000000003'],
            [['AMEX', 'VISA'], '4111111111111111'],
            [['AMEX', 'VISA'], '378282246310005'],
            [['JCB', 'MASTERCARD'], '5105105105105100'],
            [['VISA', 'MASTERCARD'], '5105105105105100'],
        ];
    }

    public function getInvalidNumbers()
    {
        return [
            ['VISA', '42424242424242424242', CardScheme::INVALID_FORMAT_ERROR],
            ['AMEX', '357298508610146', CardScheme::INVALID_FORMAT_ERROR],
            ['DINERS', '31569309025904', CardScheme::INVALID_FORMAT_ERROR],
            ['DINERS', '37088894118515', CardScheme::INVALID_FORMAT_ERROR],
            ['INSTAPAYMENT', '6313440808445746', CardScheme::INVALID_FORMAT_ERROR],
            ['CHINA_UNIONPAY', '622888888888888', CardScheme::INVALID_FORMAT_ERROR],
            ['CHINA_UNIONPAY', '62288888888888888888', CardScheme::INVALID_FORMAT_ERROR],
            ['AMEX', '30569309025904', CardScheme::INVALID_FORMAT_ERROR], // DINERS number
            ['AMEX', 'invalid', CardScheme::NOT_NUMERIC_ERROR], // A string
            ['AMEX', 0, CardScheme::INVALID_FORMAT_ERROR], // a lone number
            ['AMEX', '0', CardScheme::INVALID_FORMAT_ERROR], // a lone number
            ['AMEX', '000000000000', CardScheme::INVALID_FORMAT_ERROR], // a lone number
            ['DINERS', '3056930', CardScheme::INVALID_FORMAT_ERROR], // only first part of the number
            ['DISCOVER', '1117', CardScheme::INVALID_FORMAT_ERROR], // only last 4 digits
            ['MASTERCARD', '2721001234567890', CardScheme::INVALID_FORMAT_ERROR], // Not assigned yet
            ['MASTERCARD', '2220991234567890', CardScheme::INVALID_FORMAT_ERROR], // Not assigned yet
            ['UATP', '11016530969617', CardScheme::INVALID_FORMAT_ERROR], // invalid length
            ['MIR', '22003814273300821', CardScheme::INVALID_FORMAT_ERROR], // invalid length
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Constraints/CardSchemeValidatorTest.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 62,  43 => 1,);
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

use Symfony\\Component\\Validator\\Constraints\\CardScheme;
use Symfony\\Component\\Validator\\Constraints\\CardSchemeValidator;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;

class CardSchemeValidatorTest extends ConstraintValidatorTestCase
{
    protected function createValidator()
    {
        return new CardSchemeValidator();
    }

    public function testNullIsValid()
    {
        \$this->validator->validate(null, new CardScheme(['schemes' => []]));

        \$this->assertNoViolation();
    }

    public function testEmptyStringIsValid()
    {
        \$this->validator->validate('', new CardScheme(['schemes' => []]));

        \$this->assertNoViolation();
    }

    /**
     * @dataProvider getValidNumbers
     */
    public function testValidNumbers(\$scheme, \$number)
    {
        \$this->validator->validate(\$number, new CardScheme(['schemes' => \$scheme]));

        \$this->assertNoViolation();
    }

    /**
     * @dataProvider getInvalidNumbers
     */
    public function testInvalidNumbers(\$scheme, \$number, \$code)
    {
        \$constraint = new CardScheme([
            'schemes' => \$scheme,
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$number, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ value }}', \\is_string(\$number) ? '\"'.\$number.'\"' : \$number)
            ->setCode(\$code)
            ->assertRaised();
    }

    public function getValidNumbers()
    {
        return [
            ['AMEX', '378282246310005'],
            ['AMEX', '371449635398431'],
            ['AMEX', '378734493671000'],
            ['AMEX', '347298508610146'],
            ['CHINA_UNIONPAY', '6228888888888888'],
            ['CHINA_UNIONPAY', '62288888888888888'],
            ['CHINA_UNIONPAY', '622888888888888888'],
            ['CHINA_UNIONPAY', '6228888888888888888'],
            ['DINERS', '30569309025904'],
            ['DINERS', '36088894118515'],
            ['DINERS', '38520000023237'],
            ['DISCOVER', '6011111111111117'],
            ['DISCOVER', '6011000990139424'],
            ['INSTAPAYMENT', '6372476031350068'],
            ['INSTAPAYMENT', '6385537775789749'],
            ['INSTAPAYMENT', '6393440808445746'],
            ['JCB', '3530111333300000'],
            ['JCB', '3566002020360505'],
            ['JCB', '213112345678901'],
            ['JCB', '180012345678901'],
            ['LASER', '6304678107004080'],
            ['LASER', '6706440607428128629'],
            ['LASER', '6771656738314582216'],
            ['MAESTRO', '6759744069209'],
            ['MAESTRO', '5020507657408074712'],
            ['MAESTRO', '5612559223580173965'],
            ['MAESTRO', '6759744069209'],
            ['MAESTRO', '6594371785970435599'],
            ['MASTERCARD', '5555555555554444'],
            ['MASTERCARD', '5105105105105100'],
            ['MASTERCARD', '2221005555554444'],
            ['MASTERCARD', '2230000000000000'],
            ['MASTERCARD', '2300000000000000'],
            ['MASTERCARD', '2699999999999999'],
            ['MASTERCARD', '2709999999999999'],
            ['MASTERCARD', '2720995105105100'],
            ['MIR', '2200381427330082'],
            ['UATP', '110165309696173'],
            ['VISA', '4111111111111111'],
            ['VISA', '4012888888881881'],
            ['VISA', '4222222222222'],
            ['VISA', '4917610000000000003'],
            [['AMEX', 'VISA'], '4111111111111111'],
            [['AMEX', 'VISA'], '378282246310005'],
            [['JCB', 'MASTERCARD'], '5105105105105100'],
            [['VISA', 'MASTERCARD'], '5105105105105100'],
        ];
    }

    public function getInvalidNumbers()
    {
        return [
            ['VISA', '42424242424242424242', CardScheme::INVALID_FORMAT_ERROR],
            ['AMEX', '357298508610146', CardScheme::INVALID_FORMAT_ERROR],
            ['DINERS', '31569309025904', CardScheme::INVALID_FORMAT_ERROR],
            ['DINERS', '37088894118515', CardScheme::INVALID_FORMAT_ERROR],
            ['INSTAPAYMENT', '6313440808445746', CardScheme::INVALID_FORMAT_ERROR],
            ['CHINA_UNIONPAY', '622888888888888', CardScheme::INVALID_FORMAT_ERROR],
            ['CHINA_UNIONPAY', '62288888888888888888', CardScheme::INVALID_FORMAT_ERROR],
            ['AMEX', '30569309025904', CardScheme::INVALID_FORMAT_ERROR], // DINERS number
            ['AMEX', 'invalid', CardScheme::NOT_NUMERIC_ERROR], // A string
            ['AMEX', 0, CardScheme::INVALID_FORMAT_ERROR], // a lone number
            ['AMEX', '0', CardScheme::INVALID_FORMAT_ERROR], // a lone number
            ['AMEX', '000000000000', CardScheme::INVALID_FORMAT_ERROR], // a lone number
            ['DINERS', '3056930', CardScheme::INVALID_FORMAT_ERROR], // only first part of the number
            ['DISCOVER', '1117', CardScheme::INVALID_FORMAT_ERROR], // only last 4 digits
            ['MASTERCARD', '2721001234567890', CardScheme::INVALID_FORMAT_ERROR], // Not assigned yet
            ['MASTERCARD', '2220991234567890', CardScheme::INVALID_FORMAT_ERROR], // Not assigned yet
            ['UATP', '11016530969617', CardScheme::INVALID_FORMAT_ERROR], // invalid length
            ['MIR', '22003814273300821', CardScheme::INVALID_FORMAT_ERROR], // invalid length
        ];
    }
}
", "vendor/symfony/validator/Tests/Constraints/CardSchemeValidatorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Constraints/CardSchemeValidatorTest.php");
    }
}
