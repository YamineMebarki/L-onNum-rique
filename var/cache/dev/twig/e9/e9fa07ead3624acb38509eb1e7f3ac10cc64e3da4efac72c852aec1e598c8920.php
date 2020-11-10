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

/* vendor/symfony/validator/Tests/Constraints/RegexValidatorTest.php */
class __TwigTemplate_13bb02674425053a62585ad64bdedc217118f04fba0251c1f0181b130d8b8149 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/RegexValidatorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/RegexValidatorTest.php"));

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

use Symfony\\Component\\Validator\\Constraints\\Regex;
use Symfony\\Component\\Validator\\Constraints\\RegexValidator;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;

class RegexValidatorTest extends ConstraintValidatorTestCase
{
    protected function createValidator()
    {
        return new RegexValidator();
    }

    public function testNullIsValid()
    {
        \$this->validator->validate(null, new Regex(['pattern' => '/^[0-9]+\$/']));

        \$this->assertNoViolation();
    }

    public function testEmptyStringIsValid()
    {
        \$this->validator->validate('', new Regex(['pattern' => '/^[0-9]+\$/']));

        \$this->assertNoViolation();
    }

    public function testExpectsStringCompatibleType()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\UnexpectedValueException');
        \$this->validator->validate(new \\stdClass(), new Regex(['pattern' => '/^[0-9]+\$/']));
    }

    /**
     * @dataProvider getValidValues
     */
    public function testValidValues(\$value)
    {
        \$constraint = new Regex(['pattern' => '/^[0-9]+\$/']);
        \$this->validator->validate(\$value, \$constraint);

        \$this->assertNoViolation();
    }

    /**
     * @dataProvider getValidValuesWithWhitespaces
     */
    public function testValidValuesWithWhitespaces(\$value)
    {
        \$constraint = new Regex(['pattern' => '/^[0-9]+\$/', 'normalizer' => 'trim']);
        \$this->validator->validate(\$value, \$constraint);

        \$this->assertNoViolation();
    }

    public function getValidValues()
    {
        return [
            [0],
            ['0'],
            ['090909'],
            [90909],
            [new class() {
                public function __toString()
                {
                    return '090909';
                }
            }],
        ];
    }

    public function getValidValuesWithWhitespaces()
    {
        return [
            [\"\\x207\"],
            [\"\\x09\\x09070707\\x09\\x09\"],
            [\"70707\\x0A\"],
            [\"7\\x0D\\x0D\"],
            [\"\\x00070707\\x00\"],
            [\"\\x0B\\x0B70707\\x0B\\x0B\"],
        ];
    }

    /**
     * @dataProvider getInvalidValues
     */
    public function testInvalidValues(\$value)
    {
        \$constraint = new Regex([
            'pattern' => '/^[0-9]+\$/',
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$value, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 108
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 108, $this->source); })()), "html", null, true);
        echo "', '\"'.\$value.'\"')
            ->setCode(Regex::REGEX_FAILED_ERROR)
            ->assertRaised();
    }

    public function getInvalidValues()
    {
        return [
            ['abcd'],
            ['090foo'],
            [new class() {
                public function __toString()
                {
                    return 'abcd';
                }
            }],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Constraints/RegexValidatorTest.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 108,  43 => 1,);
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

use Symfony\\Component\\Validator\\Constraints\\Regex;
use Symfony\\Component\\Validator\\Constraints\\RegexValidator;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;

class RegexValidatorTest extends ConstraintValidatorTestCase
{
    protected function createValidator()
    {
        return new RegexValidator();
    }

    public function testNullIsValid()
    {
        \$this->validator->validate(null, new Regex(['pattern' => '/^[0-9]+\$/']));

        \$this->assertNoViolation();
    }

    public function testEmptyStringIsValid()
    {
        \$this->validator->validate('', new Regex(['pattern' => '/^[0-9]+\$/']));

        \$this->assertNoViolation();
    }

    public function testExpectsStringCompatibleType()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\UnexpectedValueException');
        \$this->validator->validate(new \\stdClass(), new Regex(['pattern' => '/^[0-9]+\$/']));
    }

    /**
     * @dataProvider getValidValues
     */
    public function testValidValues(\$value)
    {
        \$constraint = new Regex(['pattern' => '/^[0-9]+\$/']);
        \$this->validator->validate(\$value, \$constraint);

        \$this->assertNoViolation();
    }

    /**
     * @dataProvider getValidValuesWithWhitespaces
     */
    public function testValidValuesWithWhitespaces(\$value)
    {
        \$constraint = new Regex(['pattern' => '/^[0-9]+\$/', 'normalizer' => 'trim']);
        \$this->validator->validate(\$value, \$constraint);

        \$this->assertNoViolation();
    }

    public function getValidValues()
    {
        return [
            [0],
            ['0'],
            ['090909'],
            [90909],
            [new class() {
                public function __toString()
                {
                    return '090909';
                }
            }],
        ];
    }

    public function getValidValuesWithWhitespaces()
    {
        return [
            [\"\\x207\"],
            [\"\\x09\\x09070707\\x09\\x09\"],
            [\"70707\\x0A\"],
            [\"7\\x0D\\x0D\"],
            [\"\\x00070707\\x00\"],
            [\"\\x0B\\x0B70707\\x0B\\x0B\"],
        ];
    }

    /**
     * @dataProvider getInvalidValues
     */
    public function testInvalidValues(\$value)
    {
        \$constraint = new Regex([
            'pattern' => '/^[0-9]+\$/',
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$value, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ value }}', '\"'.\$value.'\"')
            ->setCode(Regex::REGEX_FAILED_ERROR)
            ->assertRaised();
    }

    public function getInvalidValues()
    {
        return [
            ['abcd'],
            ['090foo'],
            [new class() {
                public function __toString()
                {
                    return 'abcd';
                }
            }],
        ];
    }
}
", "vendor/symfony/validator/Tests/Constraints/RegexValidatorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Constraints/RegexValidatorTest.php");
    }
}
