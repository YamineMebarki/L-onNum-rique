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

/* vendor/symfony/validator/Tests/Constraints/DateValidatorTest.php */
class __TwigTemplate_f8426cfbb42401ca1241b9d99adf08719c2b8f99cc2038af7eebc9772864bbaf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/DateValidatorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/DateValidatorTest.php"));

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

use Symfony\\Component\\Validator\\Constraints\\Date;
use Symfony\\Component\\Validator\\Constraints\\DateValidator;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;

class DateValidatorTest extends ConstraintValidatorTestCase
{
    protected function createValidator()
    {
        return new DateValidator();
    }

    public function testNullIsValid()
    {
        \$this->validator->validate(null, new Date());

        \$this->assertNoViolation();
    }

    public function testEmptyStringIsValid()
    {
        \$this->validator->validate('', new Date());

        \$this->assertNoViolation();
    }

    /**
     * @group legacy
     * @expectedDeprecation Validating a \\DateTimeInterface with \"Symfony\\Component\\Validator\\Constraints\\Date\" is deprecated since version 4.2. Use \"Symfony\\Component\\Validator\\Constraints\\Type\" instead or remove the constraint if the underlying model is already type hinted to \\DateTimeInterface.
     */
    public function testDateTimeClassIsValid()
    {
        \$this->validator->validate(new \\DateTime(), new Date());

        \$this->assertNoViolation();
    }

    /**
     * @group legacy
     * @expectedDeprecation Validating a \\DateTimeInterface with \"Symfony\\Component\\Validator\\Constraints\\Date\" is deprecated since version 4.2. Use \"Symfony\\Component\\Validator\\Constraints\\Type\" instead or remove the constraint if the underlying model is already type hinted to \\DateTimeInterface.
     */
    public function testDateTimeImmutableClassIsValid()
    {
        \$this->validator->validate(new \\DateTimeImmutable(), new Date());

        \$this->assertNoViolation();
    }

    public function testExpectsStringCompatibleType()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\UnexpectedValueException');
        \$this->validator->validate(new \\stdClass(), new Date());
    }

    /**
     * @dataProvider getValidDates
     */
    public function testValidDates(\$date)
    {
        \$this->validator->validate(\$date, new Date());

        \$this->assertNoViolation();
    }

    public function getValidDates()
    {
        return [
            ['2010-01-01'],
            ['1955-12-12'],
            ['2030-05-31'],
        ];
    }

    /**
     * @dataProvider getInvalidDates
     */
    public function testInvalidDates(\$date, \$code)
    {
        \$constraint = new Date([
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$date, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 98
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 98, $this->source); })()), "html", null, true);
        echo "', '\"'.\$date.'\"')
            ->setCode(\$code)
            ->assertRaised();
    }

    public function getInvalidDates()
    {
        return [
            ['foobar', Date::INVALID_FORMAT_ERROR],
            ['foobar 2010-13-01', Date::INVALID_FORMAT_ERROR],
            ['2010-13-01 foobar', Date::INVALID_FORMAT_ERROR],
            ['2010-13-01', Date::INVALID_DATE_ERROR],
            ['2010-04-32', Date::INVALID_DATE_ERROR],
            ['2010-02-29', Date::INVALID_DATE_ERROR],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Constraints/DateValidatorTest.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 98,  43 => 1,);
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

use Symfony\\Component\\Validator\\Constraints\\Date;
use Symfony\\Component\\Validator\\Constraints\\DateValidator;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;

class DateValidatorTest extends ConstraintValidatorTestCase
{
    protected function createValidator()
    {
        return new DateValidator();
    }

    public function testNullIsValid()
    {
        \$this->validator->validate(null, new Date());

        \$this->assertNoViolation();
    }

    public function testEmptyStringIsValid()
    {
        \$this->validator->validate('', new Date());

        \$this->assertNoViolation();
    }

    /**
     * @group legacy
     * @expectedDeprecation Validating a \\DateTimeInterface with \"Symfony\\Component\\Validator\\Constraints\\Date\" is deprecated since version 4.2. Use \"Symfony\\Component\\Validator\\Constraints\\Type\" instead or remove the constraint if the underlying model is already type hinted to \\DateTimeInterface.
     */
    public function testDateTimeClassIsValid()
    {
        \$this->validator->validate(new \\DateTime(), new Date());

        \$this->assertNoViolation();
    }

    /**
     * @group legacy
     * @expectedDeprecation Validating a \\DateTimeInterface with \"Symfony\\Component\\Validator\\Constraints\\Date\" is deprecated since version 4.2. Use \"Symfony\\Component\\Validator\\Constraints\\Type\" instead or remove the constraint if the underlying model is already type hinted to \\DateTimeInterface.
     */
    public function testDateTimeImmutableClassIsValid()
    {
        \$this->validator->validate(new \\DateTimeImmutable(), new Date());

        \$this->assertNoViolation();
    }

    public function testExpectsStringCompatibleType()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\UnexpectedValueException');
        \$this->validator->validate(new \\stdClass(), new Date());
    }

    /**
     * @dataProvider getValidDates
     */
    public function testValidDates(\$date)
    {
        \$this->validator->validate(\$date, new Date());

        \$this->assertNoViolation();
    }

    public function getValidDates()
    {
        return [
            ['2010-01-01'],
            ['1955-12-12'],
            ['2030-05-31'],
        ];
    }

    /**
     * @dataProvider getInvalidDates
     */
    public function testInvalidDates(\$date, \$code)
    {
        \$constraint = new Date([
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$date, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ value }}', '\"'.\$date.'\"')
            ->setCode(\$code)
            ->assertRaised();
    }

    public function getInvalidDates()
    {
        return [
            ['foobar', Date::INVALID_FORMAT_ERROR],
            ['foobar 2010-13-01', Date::INVALID_FORMAT_ERROR],
            ['2010-13-01 foobar', Date::INVALID_FORMAT_ERROR],
            ['2010-13-01', Date::INVALID_DATE_ERROR],
            ['2010-04-32', Date::INVALID_DATE_ERROR],
            ['2010-02-29', Date::INVALID_DATE_ERROR],
        ];
    }
}
", "vendor/symfony/validator/Tests/Constraints/DateValidatorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Constraints/DateValidatorTest.php");
    }
}
