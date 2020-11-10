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

/* vendor/symfony/validator/Tests/Constraints/UniqueValidatorTest.php */
class __TwigTemplate_0bda606f7c44deaf7014aa23a45a1beb5c498df24f25a46392d28baceefae779 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/UniqueValidatorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/UniqueValidatorTest.php"));

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

use Symfony\\Component\\Validator\\Constraints\\Unique;
use Symfony\\Component\\Validator\\Constraints\\UniqueValidator;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;

class UniqueValidatorTest extends ConstraintValidatorTestCase
{
    protected function createValidator()
    {
        return new UniqueValidator();
    }

    public function testExpectsUniqueConstraintCompatibleType()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\UnexpectedValueException');
        \$this->validator->validate('', new Unique());
    }

    /**
     * @dataProvider getValidValues
     */
    public function testValidValues(\$value)
    {
        \$this->validator->validate(\$value, new Unique());

        \$this->assertNoViolation();
    }

    public function getValidValues()
    {
        return [
            yield 'null' => [[null]],
            yield 'empty array' => [[]],
            yield 'single integer' => [[5]],
            yield 'single string' => [['a']],
            yield 'single object' => [[new \\stdClass()]],
            yield 'unique booleans' => [[true, false]],
            yield 'unique integers' => [[1, 2, 3, 4, 5, 6]],
            yield 'unique floats' => [[0.1, 0.2, 0.3]],
            yield 'unique strings' => [['a', 'b', 'c']],
            yield 'unique arrays' => [[[1, 2], [2, 4], [4, 6]]],
            yield 'unique objects' => [[new \\stdClass(), new \\stdClass()]],
        ];
    }

    /**
     * @dataProvider getInvalidValues
     */
    public function testInvalidValues(\$value)
    {
        \$constraint = new Unique([
            'message' => 'myMessage',
        ]);
        \$this->validator->validate(\$value, \$constraint);

        \$this->buildViolation('myMessage')
             ->setParameter('";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 69, $this->source); })()), "html", null, true);
        echo "', 'array')
             ->setCode(Unique::IS_NOT_UNIQUE)
             ->assertRaised();
    }

    public function getInvalidValues()
    {
        \$object = new \\stdClass();

        return [
            yield 'not unique booleans' => [[true, true]],
            yield 'not unique integers' => [[1, 2, 3, 3]],
            yield 'not unique floats' => [[0.1, 0.2, 0.1]],
            yield 'not unique string' => [['a', 'b', 'a']],
            yield 'not unique arrays' => [[[1, 1], [2, 3], [1, 1]]],
            yield 'not unique objects' => [[\$object, \$object]],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Constraints/UniqueValidatorTest.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 69,  43 => 1,);
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

use Symfony\\Component\\Validator\\Constraints\\Unique;
use Symfony\\Component\\Validator\\Constraints\\UniqueValidator;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;

class UniqueValidatorTest extends ConstraintValidatorTestCase
{
    protected function createValidator()
    {
        return new UniqueValidator();
    }

    public function testExpectsUniqueConstraintCompatibleType()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\UnexpectedValueException');
        \$this->validator->validate('', new Unique());
    }

    /**
     * @dataProvider getValidValues
     */
    public function testValidValues(\$value)
    {
        \$this->validator->validate(\$value, new Unique());

        \$this->assertNoViolation();
    }

    public function getValidValues()
    {
        return [
            yield 'null' => [[null]],
            yield 'empty array' => [[]],
            yield 'single integer' => [[5]],
            yield 'single string' => [['a']],
            yield 'single object' => [[new \\stdClass()]],
            yield 'unique booleans' => [[true, false]],
            yield 'unique integers' => [[1, 2, 3, 4, 5, 6]],
            yield 'unique floats' => [[0.1, 0.2, 0.3]],
            yield 'unique strings' => [['a', 'b', 'c']],
            yield 'unique arrays' => [[[1, 2], [2, 4], [4, 6]]],
            yield 'unique objects' => [[new \\stdClass(), new \\stdClass()]],
        ];
    }

    /**
     * @dataProvider getInvalidValues
     */
    public function testInvalidValues(\$value)
    {
        \$constraint = new Unique([
            'message' => 'myMessage',
        ]);
        \$this->validator->validate(\$value, \$constraint);

        \$this->buildViolation('myMessage')
             ->setParameter('{{ value }}', 'array')
             ->setCode(Unique::IS_NOT_UNIQUE)
             ->assertRaised();
    }

    public function getInvalidValues()
    {
        \$object = new \\stdClass();

        return [
            yield 'not unique booleans' => [[true, true]],
            yield 'not unique integers' => [[1, 2, 3, 3]],
            yield 'not unique floats' => [[0.1, 0.2, 0.1]],
            yield 'not unique string' => [['a', 'b', 'a']],
            yield 'not unique arrays' => [[[1, 1], [2, 3], [1, 1]]],
            yield 'not unique objects' => [[\$object, \$object]],
        ];
    }
}
", "vendor/symfony/validator/Tests/Constraints/UniqueValidatorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Constraints/UniqueValidatorTest.php");
    }
}
