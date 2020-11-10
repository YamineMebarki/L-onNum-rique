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

/* vendor/symfony/validator/Tests/Constraints/TimeValidatorTest.php */
class __TwigTemplate_5cd11840798bd6a3e299371e7788667cb6ec6a619645b8c94d9f922ee92eb4b9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/TimeValidatorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/TimeValidatorTest.php"));

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

use Symfony\\Component\\Validator\\Constraints\\Time;
use Symfony\\Component\\Validator\\Constraints\\TimeValidator;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;

class TimeValidatorTest extends ConstraintValidatorTestCase
{
    protected function createValidator()
    {
        return new TimeValidator();
    }

    public function testNullIsValid()
    {
        \$this->validator->validate(null, new Time());

        \$this->assertNoViolation();
    }

    public function testEmptyStringIsValid()
    {
        \$this->validator->validate('', new Time());

        \$this->assertNoViolation();
    }

    /**
     * @group legacy
     * @expectedDeprecation Validating a \\DateTimeInterface with \"Symfony\\Component\\Validator\\Constraints\\Time\" is deprecated since version 4.2. Use \"Symfony\\Component\\Validator\\Constraints\\Type\" instead or remove the constraint if the underlying model is already type hinted to \\DateTimeInterface.
     */
    public function testDateTimeClassIsValid()
    {
        \$this->validator->validate(new \\DateTime(), new Time());

        \$this->assertNoViolation();
    }

    public function testExpectsStringCompatibleType()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\UnexpectedValueException');
        \$this->validator->validate(new \\stdClass(), new Time());
    }

    /**
     * @dataProvider getValidTimes
     */
    public function testValidTimes(\$time)
    {
        \$this->validator->validate(\$time, new Time());

        \$this->assertNoViolation();
    }

    public function getValidTimes()
    {
        return [
            ['01:02:03'],
            ['00:00:00'],
            ['23:59:59'],
        ];
    }

    /**
     * @dataProvider getInvalidTimes
     */
    public function testInvalidTimes(\$time, \$code)
    {
        \$constraint = new Time([
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$time, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 87
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 87, $this->source); })()), "html", null, true);
        echo "', '\"'.\$time.'\"')
            ->setCode(\$code)
            ->assertRaised();
    }

    public function getInvalidTimes()
    {
        return [
            ['foobar', Time::INVALID_FORMAT_ERROR],
            ['foobar 12:34:56', Time::INVALID_FORMAT_ERROR],
            ['12:34:56 foobar', Time::INVALID_FORMAT_ERROR],
            ['00:00', Time::INVALID_FORMAT_ERROR],
            ['24:00:00', Time::INVALID_TIME_ERROR],
            ['00:60:00', Time::INVALID_TIME_ERROR],
            ['00:00:60', Time::INVALID_TIME_ERROR],
        ];
    }

    /**
     * @group legacy
     * @expectedDeprecation Validating a \\DateTimeInterface with \"Symfony\\Component\\Validator\\Constraints\\Time\" is deprecated since version 4.2. Use \"Symfony\\Component\\Validator\\Constraints\\Type\" instead or remove the constraint if the underlying model is already type hinted to \\DateTimeInterface.
     */
    public function testDateTimeImmutableIsValid()
    {
        \$this->validator->validate(new \\DateTimeImmutable(), new Time());

        \$this->assertNoViolation();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Constraints/TimeValidatorTest.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 87,  43 => 1,);
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

use Symfony\\Component\\Validator\\Constraints\\Time;
use Symfony\\Component\\Validator\\Constraints\\TimeValidator;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;

class TimeValidatorTest extends ConstraintValidatorTestCase
{
    protected function createValidator()
    {
        return new TimeValidator();
    }

    public function testNullIsValid()
    {
        \$this->validator->validate(null, new Time());

        \$this->assertNoViolation();
    }

    public function testEmptyStringIsValid()
    {
        \$this->validator->validate('', new Time());

        \$this->assertNoViolation();
    }

    /**
     * @group legacy
     * @expectedDeprecation Validating a \\DateTimeInterface with \"Symfony\\Component\\Validator\\Constraints\\Time\" is deprecated since version 4.2. Use \"Symfony\\Component\\Validator\\Constraints\\Type\" instead or remove the constraint if the underlying model is already type hinted to \\DateTimeInterface.
     */
    public function testDateTimeClassIsValid()
    {
        \$this->validator->validate(new \\DateTime(), new Time());

        \$this->assertNoViolation();
    }

    public function testExpectsStringCompatibleType()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\UnexpectedValueException');
        \$this->validator->validate(new \\stdClass(), new Time());
    }

    /**
     * @dataProvider getValidTimes
     */
    public function testValidTimes(\$time)
    {
        \$this->validator->validate(\$time, new Time());

        \$this->assertNoViolation();
    }

    public function getValidTimes()
    {
        return [
            ['01:02:03'],
            ['00:00:00'],
            ['23:59:59'],
        ];
    }

    /**
     * @dataProvider getInvalidTimes
     */
    public function testInvalidTimes(\$time, \$code)
    {
        \$constraint = new Time([
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$time, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ value }}', '\"'.\$time.'\"')
            ->setCode(\$code)
            ->assertRaised();
    }

    public function getInvalidTimes()
    {
        return [
            ['foobar', Time::INVALID_FORMAT_ERROR],
            ['foobar 12:34:56', Time::INVALID_FORMAT_ERROR],
            ['12:34:56 foobar', Time::INVALID_FORMAT_ERROR],
            ['00:00', Time::INVALID_FORMAT_ERROR],
            ['24:00:00', Time::INVALID_TIME_ERROR],
            ['00:60:00', Time::INVALID_TIME_ERROR],
            ['00:00:60', Time::INVALID_TIME_ERROR],
        ];
    }

    /**
     * @group legacy
     * @expectedDeprecation Validating a \\DateTimeInterface with \"Symfony\\Component\\Validator\\Constraints\\Time\" is deprecated since version 4.2. Use \"Symfony\\Component\\Validator\\Constraints\\Type\" instead or remove the constraint if the underlying model is already type hinted to \\DateTimeInterface.
     */
    public function testDateTimeImmutableIsValid()
    {
        \$this->validator->validate(new \\DateTimeImmutable(), new Time());

        \$this->assertNoViolation();
    }
}
", "vendor/symfony/validator/Tests/Constraints/TimeValidatorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Constraints/TimeValidatorTest.php");
    }
}
