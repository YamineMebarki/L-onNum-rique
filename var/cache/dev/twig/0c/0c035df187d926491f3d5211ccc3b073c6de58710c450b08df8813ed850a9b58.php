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

/* vendor/symfony/validator/Tests/Constraints/DateTimeValidatorTest.php */
class __TwigTemplate_01b212697dd6a17db3d5114e89c988b3b4bd9c5c14b0ad79bf288efdc0fdd9ea extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/DateTimeValidatorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/DateTimeValidatorTest.php"));

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

use Symfony\\Component\\Validator\\Constraints\\DateTime;
use Symfony\\Component\\Validator\\Constraints\\DateTimeValidator;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;

class DateTimeValidatorTest extends ConstraintValidatorTestCase
{
    protected function createValidator()
    {
        return new DateTimeValidator();
    }

    public function testNullIsValid()
    {
        \$this->validator->validate(null, new DateTime());

        \$this->assertNoViolation();
    }

    public function testEmptyStringIsValid()
    {
        \$this->validator->validate('', new DateTime());

        \$this->assertNoViolation();
    }

    /**
     * @group legacy
     * @expectedDeprecation Validating a \\DateTimeInterface with \"Symfony\\Component\\Validator\\Constraints\\DateTime\" is deprecated since version 4.2. Use \"Symfony\\Component\\Validator\\Constraints\\Type\" instead or remove the constraint if the underlying model is already type hinted to \\DateTimeInterface.
     */
    public function testDateTimeClassIsValid()
    {
        \$this->validator->validate(new \\DateTime(), new DateTime());

        \$this->assertNoViolation();
    }

    /**
     * @group legacy
     * @expectedDeprecation Validating a \\DateTimeInterface with \"Symfony\\Component\\Validator\\Constraints\\DateTime\" is deprecated since version 4.2. Use \"Symfony\\Component\\Validator\\Constraints\\Type\" instead or remove the constraint if the underlying model is already type hinted to \\DateTimeInterface.
     */
    public function testDateTimeImmutableClassIsValid()
    {
        \$this->validator->validate(new \\DateTimeImmutable(), new DateTime());

        \$this->assertNoViolation();
    }

    public function testExpectsStringCompatibleType()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\UnexpectedValueException');
        \$this->validator->validate(new \\stdClass(), new DateTime());
    }

    public function testDateTimeWithDefaultFormat()
    {
        \$this->validator->validate('1995-05-10 19:33:00', new DateTime());

        \$this->assertNoViolation();

        \$this->validator->validate('1995-03-24', new DateTime());

        \$this->buildViolation('This value is not a valid datetime.')
            ->setParameter('";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 76, $this->source); })()), "html", null, true);
        echo "', '\"1995-03-24\"')
            ->setCode(DateTime::INVALID_FORMAT_ERROR)
            ->assertRaised();
    }

    /**
     * @dataProvider getValidDateTimes
     */
    public function testValidDateTimes(\$format, \$dateTime)
    {
        \$constraint = new DateTime([
            'format' => \$format,
        ]);

        \$this->validator->validate(\$dateTime, \$constraint);

        \$this->assertNoViolation();
    }

    public function getValidDateTimes()
    {
        return [
            ['Y-m-d H:i:s e', '1995-03-24 00:00:00 UTC'],
            ['Y-m-d H:i:s', '2010-01-01 01:02:03'],
            ['Y/m/d H:i', '2010/01/01 01:02'],
            ['F d, Y', 'December 31, 1999'],
            ['d-m-Y', '10-05-1995'],
        ];
    }

    /**
     * @dataProvider getInvalidDateTimes
     */
    public function testInvalidDateTimes(\$format, \$dateTime, \$code)
    {
        \$constraint = new DateTime([
            'message' => 'myMessage',
            'format' => \$format,
        ]);

        \$this->validator->validate(\$dateTime, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 119
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 119, $this->source); })()), "html", null, true);
        echo "', '\"'.\$dateTime.'\"')
            ->setCode(\$code)
            ->assertRaised();
    }

    public function getInvalidDateTimes()
    {
        return [
            ['Y-m-d', 'foobar', DateTime::INVALID_FORMAT_ERROR],
            ['H:i', '00:00:00', DateTime::INVALID_FORMAT_ERROR],
            ['Y-m-d', '2010-01-01 00:00', DateTime::INVALID_FORMAT_ERROR],
            ['Y-m-d e', '2010-01-01 TCU', DateTime::INVALID_FORMAT_ERROR],
            ['Y-m-d H:i:s', '2010-13-01 00:00:00', DateTime::INVALID_DATE_ERROR],
            ['Y-m-d H:i:s', '2010-04-32 00:00:00', DateTime::INVALID_DATE_ERROR],
            ['Y-m-d H:i:s', '2010-02-29 00:00:00', DateTime::INVALID_DATE_ERROR],
            ['Y-m-d H:i:s', '2010-01-01 24:00:00', DateTime::INVALID_TIME_ERROR],
            ['Y-m-d H:i:s', '2010-01-01 00:60:00', DateTime::INVALID_TIME_ERROR],
            ['Y-m-d H:i:s', '2010-01-01 00:00:60', DateTime::INVALID_TIME_ERROR],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Constraints/DateTimeValidatorTest.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 119,  120 => 76,  43 => 1,);
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

use Symfony\\Component\\Validator\\Constraints\\DateTime;
use Symfony\\Component\\Validator\\Constraints\\DateTimeValidator;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;

class DateTimeValidatorTest extends ConstraintValidatorTestCase
{
    protected function createValidator()
    {
        return new DateTimeValidator();
    }

    public function testNullIsValid()
    {
        \$this->validator->validate(null, new DateTime());

        \$this->assertNoViolation();
    }

    public function testEmptyStringIsValid()
    {
        \$this->validator->validate('', new DateTime());

        \$this->assertNoViolation();
    }

    /**
     * @group legacy
     * @expectedDeprecation Validating a \\DateTimeInterface with \"Symfony\\Component\\Validator\\Constraints\\DateTime\" is deprecated since version 4.2. Use \"Symfony\\Component\\Validator\\Constraints\\Type\" instead or remove the constraint if the underlying model is already type hinted to \\DateTimeInterface.
     */
    public function testDateTimeClassIsValid()
    {
        \$this->validator->validate(new \\DateTime(), new DateTime());

        \$this->assertNoViolation();
    }

    /**
     * @group legacy
     * @expectedDeprecation Validating a \\DateTimeInterface with \"Symfony\\Component\\Validator\\Constraints\\DateTime\" is deprecated since version 4.2. Use \"Symfony\\Component\\Validator\\Constraints\\Type\" instead or remove the constraint if the underlying model is already type hinted to \\DateTimeInterface.
     */
    public function testDateTimeImmutableClassIsValid()
    {
        \$this->validator->validate(new \\DateTimeImmutable(), new DateTime());

        \$this->assertNoViolation();
    }

    public function testExpectsStringCompatibleType()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\UnexpectedValueException');
        \$this->validator->validate(new \\stdClass(), new DateTime());
    }

    public function testDateTimeWithDefaultFormat()
    {
        \$this->validator->validate('1995-05-10 19:33:00', new DateTime());

        \$this->assertNoViolation();

        \$this->validator->validate('1995-03-24', new DateTime());

        \$this->buildViolation('This value is not a valid datetime.')
            ->setParameter('{{ value }}', '\"1995-03-24\"')
            ->setCode(DateTime::INVALID_FORMAT_ERROR)
            ->assertRaised();
    }

    /**
     * @dataProvider getValidDateTimes
     */
    public function testValidDateTimes(\$format, \$dateTime)
    {
        \$constraint = new DateTime([
            'format' => \$format,
        ]);

        \$this->validator->validate(\$dateTime, \$constraint);

        \$this->assertNoViolation();
    }

    public function getValidDateTimes()
    {
        return [
            ['Y-m-d H:i:s e', '1995-03-24 00:00:00 UTC'],
            ['Y-m-d H:i:s', '2010-01-01 01:02:03'],
            ['Y/m/d H:i', '2010/01/01 01:02'],
            ['F d, Y', 'December 31, 1999'],
            ['d-m-Y', '10-05-1995'],
        ];
    }

    /**
     * @dataProvider getInvalidDateTimes
     */
    public function testInvalidDateTimes(\$format, \$dateTime, \$code)
    {
        \$constraint = new DateTime([
            'message' => 'myMessage',
            'format' => \$format,
        ]);

        \$this->validator->validate(\$dateTime, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ value }}', '\"'.\$dateTime.'\"')
            ->setCode(\$code)
            ->assertRaised();
    }

    public function getInvalidDateTimes()
    {
        return [
            ['Y-m-d', 'foobar', DateTime::INVALID_FORMAT_ERROR],
            ['H:i', '00:00:00', DateTime::INVALID_FORMAT_ERROR],
            ['Y-m-d', '2010-01-01 00:00', DateTime::INVALID_FORMAT_ERROR],
            ['Y-m-d e', '2010-01-01 TCU', DateTime::INVALID_FORMAT_ERROR],
            ['Y-m-d H:i:s', '2010-13-01 00:00:00', DateTime::INVALID_DATE_ERROR],
            ['Y-m-d H:i:s', '2010-04-32 00:00:00', DateTime::INVALID_DATE_ERROR],
            ['Y-m-d H:i:s', '2010-02-29 00:00:00', DateTime::INVALID_DATE_ERROR],
            ['Y-m-d H:i:s', '2010-01-01 24:00:00', DateTime::INVALID_TIME_ERROR],
            ['Y-m-d H:i:s', '2010-01-01 00:60:00', DateTime::INVALID_TIME_ERROR],
            ['Y-m-d H:i:s', '2010-01-01 00:00:60', DateTime::INVALID_TIME_ERROR],
        ];
    }
}
", "vendor/symfony/validator/Tests/Constraints/DateTimeValidatorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Constraints/DateTimeValidatorTest.php");
    }
}
