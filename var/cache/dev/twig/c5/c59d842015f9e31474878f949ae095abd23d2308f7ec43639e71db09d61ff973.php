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

/* vendor/symfony/validator/Tests/Constraints/LuhnValidatorTest.php */
class __TwigTemplate_016d7c4b723210bb30e95719d7abca6163c37243788e1e177f361c2b5cfb6b3e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/LuhnValidatorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/LuhnValidatorTest.php"));

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

use Symfony\\Component\\Validator\\Constraints\\Luhn;
use Symfony\\Component\\Validator\\Constraints\\LuhnValidator;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;

class LuhnValidatorTest extends ConstraintValidatorTestCase
{
    protected function createValidator()
    {
        return new LuhnValidator();
    }

    public function testNullIsValid()
    {
        \$this->validator->validate(null, new Luhn());

        \$this->assertNoViolation();
    }

    public function testEmptyStringIsValid()
    {
        \$this->validator->validate('', new Luhn());

        \$this->assertNoViolation();
    }

    /**
     * @dataProvider getValidNumbers
     */
    public function testValidNumbers(\$number)
    {
        \$this->validator->validate(\$number, new Luhn());

        \$this->assertNoViolation();
    }

    public function getValidNumbers()
    {
        return [
            ['42424242424242424242'],
            ['378282246310005'],
            ['371449635398431'],
            ['378734493671000'],
            ['5610591081018250'],
            ['30569309025904'],
            ['38520000023237'],
            ['6011111111111117'],
            ['6011000990139424'],
            ['3530111333300000'],
            ['3566002020360505'],
            ['5555555555554444'],
            ['5105105105105100'],
            ['4111111111111111'],
            ['4012888888881881'],
            ['4222222222222'],
            ['5019717010103742'],
            ['6331101999990016'],
        ];
    }

    /**
     * @dataProvider getInvalidNumbers
     */
    public function testInvalidNumbers(\$number, \$code)
    {
        \$constraint = new Luhn([
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$number, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 85
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 85, $this->source); })()), "html", null, true);
        echo "', '\"'.\$number.'\"')
            ->setCode(\$code)
            ->assertRaised();
    }

    public function getInvalidNumbers()
    {
        return [
            ['1234567812345678', Luhn::CHECKSUM_FAILED_ERROR],
            ['4222222222222222', Luhn::CHECKSUM_FAILED_ERROR],
            ['0000000000000000', Luhn::CHECKSUM_FAILED_ERROR],
            ['000000!000000000', Luhn::INVALID_CHARACTERS_ERROR],
            ['42-22222222222222', Luhn::INVALID_CHARACTERS_ERROR],
        ];
    }

    /**
     * @dataProvider getInvalidTypes
     */
    public function testInvalidTypes(\$number)
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\UnexpectedValueException');
        \$constraint = new Luhn();

        \$this->validator->validate(\$number, \$constraint);
    }

    public function getInvalidTypes()
    {
        return [
            [0],
            [123],
            [42424242424242424242],
            [378282246310005],
            [371449635398431],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Constraints/LuhnValidatorTest.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 85,  43 => 1,);
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

use Symfony\\Component\\Validator\\Constraints\\Luhn;
use Symfony\\Component\\Validator\\Constraints\\LuhnValidator;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;

class LuhnValidatorTest extends ConstraintValidatorTestCase
{
    protected function createValidator()
    {
        return new LuhnValidator();
    }

    public function testNullIsValid()
    {
        \$this->validator->validate(null, new Luhn());

        \$this->assertNoViolation();
    }

    public function testEmptyStringIsValid()
    {
        \$this->validator->validate('', new Luhn());

        \$this->assertNoViolation();
    }

    /**
     * @dataProvider getValidNumbers
     */
    public function testValidNumbers(\$number)
    {
        \$this->validator->validate(\$number, new Luhn());

        \$this->assertNoViolation();
    }

    public function getValidNumbers()
    {
        return [
            ['42424242424242424242'],
            ['378282246310005'],
            ['371449635398431'],
            ['378734493671000'],
            ['5610591081018250'],
            ['30569309025904'],
            ['38520000023237'],
            ['6011111111111117'],
            ['6011000990139424'],
            ['3530111333300000'],
            ['3566002020360505'],
            ['5555555555554444'],
            ['5105105105105100'],
            ['4111111111111111'],
            ['4012888888881881'],
            ['4222222222222'],
            ['5019717010103742'],
            ['6331101999990016'],
        ];
    }

    /**
     * @dataProvider getInvalidNumbers
     */
    public function testInvalidNumbers(\$number, \$code)
    {
        \$constraint = new Luhn([
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$number, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ value }}', '\"'.\$number.'\"')
            ->setCode(\$code)
            ->assertRaised();
    }

    public function getInvalidNumbers()
    {
        return [
            ['1234567812345678', Luhn::CHECKSUM_FAILED_ERROR],
            ['4222222222222222', Luhn::CHECKSUM_FAILED_ERROR],
            ['0000000000000000', Luhn::CHECKSUM_FAILED_ERROR],
            ['000000!000000000', Luhn::INVALID_CHARACTERS_ERROR],
            ['42-22222222222222', Luhn::INVALID_CHARACTERS_ERROR],
        ];
    }

    /**
     * @dataProvider getInvalidTypes
     */
    public function testInvalidTypes(\$number)
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\UnexpectedValueException');
        \$constraint = new Luhn();

        \$this->validator->validate(\$number, \$constraint);
    }

    public function getInvalidTypes()
    {
        return [
            [0],
            [123],
            [42424242424242424242],
            [378282246310005],
            [371449635398431],
        ];
    }
}
", "vendor/symfony/validator/Tests/Constraints/LuhnValidatorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Constraints/LuhnValidatorTest.php");
    }
}
