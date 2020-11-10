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

/* vendor/symfony/validator/Tests/ConstraintValidatorTest.php */
class __TwigTemplate_fde61acf5887b4643ddbc1d38f4379ef6ba74636ecce85ad2ed09cc70f577d02 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/ConstraintValidatorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/ConstraintValidatorTest.php"));

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

namespace Symfony\\Component\\Validator\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\ConstraintValidator;

final class ConstraintValidatorTest extends TestCase
{
    /**
     * @dataProvider formatValueProvider
     */
    public function testFormatValue(\$expected, \$value, \$format = 0)
    {
        \$this->assertSame(\$expected, (new TestFormatValueConstraintValidator())->formatValueProxy(\$value, \$format));
    }

    public function formatValueProvider()
    {
        \$data = [
            ['true', true],
            ['false', false],
            ['null', null],
            ['resource', fopen('php://memory', 'r')],
            ['\"foo\"', 'foo'],
            ['array', []],
            ['object', \$toString = new TestToStringObject()],
            ['ccc', \$toString, ConstraintValidator::OBJECT_TO_STRING],
            ['object', \$dateTime = (new \\DateTimeImmutable('@0'))->setTimezone(new \\DateTimeZone('UTC'))],
            [class_exists(\\IntlDateFormatter::class) ? 'Jan 1, 1970, 12:00 AM' : '1970-01-01 00:00:00', \$dateTime, ConstraintValidator::PRETTY_DATE],
        ];

        return \$data;
    }
}

final class TestFormatValueConstraintValidator extends ConstraintValidator
{
    public function validate(\$value, Constraint \$constraint)
    {
    }

    public function formatValueProxy(\$value, \$format)
    {
        return \$this->formatValue(\$value, \$format);
    }
}

final class TestToStringObject
{
    public function __toString()
    {
        return 'ccc';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/ConstraintValidatorTest.php";
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

namespace Symfony\\Component\\Validator\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\ConstraintValidator;

final class ConstraintValidatorTest extends TestCase
{
    /**
     * @dataProvider formatValueProvider
     */
    public function testFormatValue(\$expected, \$value, \$format = 0)
    {
        \$this->assertSame(\$expected, (new TestFormatValueConstraintValidator())->formatValueProxy(\$value, \$format));
    }

    public function formatValueProvider()
    {
        \$data = [
            ['true', true],
            ['false', false],
            ['null', null],
            ['resource', fopen('php://memory', 'r')],
            ['\"foo\"', 'foo'],
            ['array', []],
            ['object', \$toString = new TestToStringObject()],
            ['ccc', \$toString, ConstraintValidator::OBJECT_TO_STRING],
            ['object', \$dateTime = (new \\DateTimeImmutable('@0'))->setTimezone(new \\DateTimeZone('UTC'))],
            [class_exists(\\IntlDateFormatter::class) ? 'Jan 1, 1970, 12:00 AM' : '1970-01-01 00:00:00', \$dateTime, ConstraintValidator::PRETTY_DATE],
        ];

        return \$data;
    }
}

final class TestFormatValueConstraintValidator extends ConstraintValidator
{
    public function validate(\$value, Constraint \$constraint)
    {
    }

    public function formatValueProxy(\$value, \$format)
    {
        return \$this->formatValue(\$value, \$format);
    }
}

final class TestToStringObject
{
    public function __toString()
    {
        return 'ccc';
    }
}
", "vendor/symfony/validator/Tests/ConstraintValidatorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/ConstraintValidatorTest.php");
    }
}
