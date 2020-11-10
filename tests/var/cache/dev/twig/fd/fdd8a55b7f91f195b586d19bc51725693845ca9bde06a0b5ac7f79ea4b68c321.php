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

/* vendor/symfony/validator/Tests/Constraints/JsonValidatorTest.php */
class __TwigTemplate_58ca0daa019c02ba37ec781ee0e0ddd73a5707f144e91760f799f438c4d8f24a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/JsonValidatorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/JsonValidatorTest.php"));

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

use Symfony\\Component\\Validator\\Constraints\\Json;
use Symfony\\Component\\Validator\\Constraints\\JsonValidator;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;

class JsonValidatorTest extends ConstraintValidatorTestCase
{
    protected function createValidator()
    {
        return new JsonValidator();
    }

    /**
     * @dataProvider getValidValues
     */
    public function testJsonIsValid(\$value)
    {
        \$this->validator->validate(\$value, new Json());

        \$this->assertNoViolation();
    }

    /**
     * @dataProvider getInvalidValues
     */
    public function testInvalidValues(\$value)
    {
        \$constraint = new Json([
            'message' => 'myMessageTest',
        ]);

        \$this->validator->validate(\$value, \$constraint);

        \$this->buildViolation('myMessageTest')
            ->setParameter('";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 47, $this->source); })()), "html", null, true);
        echo "', '\"'.\$value.'\"')
            ->setCode(Json::INVALID_JSON_ERROR)
            ->assertRaised();
    }

    public function getValidValues()
    {
        return [
            ['{\"planet\":\"earth\", \"country\": \"Morocco\",\"city\": \"Rabat\" ,\"postcode\" : 10160, \"is_great\": true,
\t\t\t  \"img\" : null, \"area\": 118.5, \"foo\": 15 }'],
            [null],
            [''],
            ['\"null\"'],
            ['null'],
            ['\"string\"'],
            ['1'],
            ['true'],
            [1],
        ];
    }

    public function getInvalidValues()
    {
        return [
            ['{\"foo\": 3 \"bar\": 4}'],
            ['{\"foo\": 3 ,\"bar\": 4'],
            ['{foo\": 3, \"bar\": 4}'],
            ['foo'],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Constraints/JsonValidatorTest.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 47,  43 => 1,);
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

use Symfony\\Component\\Validator\\Constraints\\Json;
use Symfony\\Component\\Validator\\Constraints\\JsonValidator;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;

class JsonValidatorTest extends ConstraintValidatorTestCase
{
    protected function createValidator()
    {
        return new JsonValidator();
    }

    /**
     * @dataProvider getValidValues
     */
    public function testJsonIsValid(\$value)
    {
        \$this->validator->validate(\$value, new Json());

        \$this->assertNoViolation();
    }

    /**
     * @dataProvider getInvalidValues
     */
    public function testInvalidValues(\$value)
    {
        \$constraint = new Json([
            'message' => 'myMessageTest',
        ]);

        \$this->validator->validate(\$value, \$constraint);

        \$this->buildViolation('myMessageTest')
            ->setParameter('{{ value }}', '\"'.\$value.'\"')
            ->setCode(Json::INVALID_JSON_ERROR)
            ->assertRaised();
    }

    public function getValidValues()
    {
        return [
            ['{\"planet\":\"earth\", \"country\": \"Morocco\",\"city\": \"Rabat\" ,\"postcode\" : 10160, \"is_great\": true,
\t\t\t  \"img\" : null, \"area\": 118.5, \"foo\": 15 }'],
            [null],
            [''],
            ['\"null\"'],
            ['null'],
            ['\"string\"'],
            ['1'],
            ['true'],
            [1],
        ];
    }

    public function getInvalidValues()
    {
        return [
            ['{\"foo\": 3 \"bar\": 4}'],
            ['{\"foo\": 3 ,\"bar\": 4'],
            ['{foo\": 3, \"bar\": 4}'],
            ['foo'],
        ];
    }
}
", "vendor/symfony/validator/Tests/Constraints/JsonValidatorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Constraints/JsonValidatorTest.php");
    }
}
