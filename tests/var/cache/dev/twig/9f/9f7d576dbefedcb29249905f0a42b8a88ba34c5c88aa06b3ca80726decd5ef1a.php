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

/* vendor/symfony/validator/Tests/Constraints/ExpressionValidatorTest.php */
class __TwigTemplate_139efab2da0c49e757975954139cca3bb679cbda3060c3c22b1bf6c149be30fb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/ExpressionValidatorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/ExpressionValidatorTest.php"));

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

use Symfony\\Component\\Validator\\Constraints\\Expression;
use Symfony\\Component\\Validator\\Constraints\\ExpressionValidator;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;
use Symfony\\Component\\Validator\\Tests\\Fixtures\\Entity;
use Symfony\\Component\\Validator\\Tests\\Fixtures\\ToString;

class ExpressionValidatorTest extends ConstraintValidatorTestCase
{
    protected function createValidator()
    {
        return new ExpressionValidator();
    }

    public function testExpressionIsEvaluatedWithNullValue()
    {
        \$constraint = new Expression([
            'expression' => 'false',
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(null, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 37, $this->source); })()), "html", null, true);
        echo "', 'null')
            ->setCode(Expression::EXPRESSION_FAILED_ERROR)
            ->assertRaised();
    }

    public function testExpressionIsEvaluatedWithEmptyStringValue()
    {
        \$constraint = new Expression([
            'expression' => 'false',
            'message' => 'myMessage',
        ]);

        \$this->validator->validate('', \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 52, $this->source); })()), "html", null, true);
        echo "', '\"\"')
            ->setCode(Expression::EXPRESSION_FAILED_ERROR)
            ->assertRaised();
    }

    public function testSucceedingExpressionAtObjectLevel()
    {
        \$constraint = new Expression('this.data == 1');

        \$object = new Entity();
        \$object->data = '1';

        \$this->setObject(\$object);

        \$this->validator->validate(\$object, \$constraint);

        \$this->assertNoViolation();
    }

    public function testFailingExpressionAtObjectLevel()
    {
        \$constraint = new Expression([
            'expression' => 'this.data == 1',
            'message' => 'myMessage',
        ]);

        \$object = new Entity();
        \$object->data = '2';

        \$this->setObject(\$object);

        \$this->validator->validate(\$object, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 86
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 86, $this->source); })()), "html", null, true);
        echo "', 'object')
            ->setCode(Expression::EXPRESSION_FAILED_ERROR)
            ->assertRaised();
    }

    public function testSucceedingExpressionAtObjectLevelWithToString()
    {
        \$constraint = new Expression('this.data == 1');

        \$object = new ToString();
        \$object->data = '1';

        \$this->setObject(\$object);

        \$this->validator->validate(\$object, \$constraint);

        \$this->assertNoViolation();
    }

    public function testFailingExpressionAtObjectLevelWithToString()
    {
        \$constraint = new Expression([
            'expression' => 'this.data == 1',
            'message' => 'myMessage',
        ]);

        \$object = new ToString();
        \$object->data = '2';

        \$this->setObject(\$object);

        \$this->validator->validate(\$object, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 120
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 120, $this->source); })()), "html", null, true);
        echo "', 'toString')
            ->setCode(Expression::EXPRESSION_FAILED_ERROR)
            ->assertRaised();
    }

    public function testSucceedingExpressionAtPropertyLevel()
    {
        \$constraint = new Expression('value == this.data');

        \$object = new Entity();
        \$object->data = '1';

        \$this->setRoot(\$object);
        \$this->setPropertyPath('data');
        \$this->setProperty(\$object, 'data');

        \$this->validator->validate('1', \$constraint);

        \$this->assertNoViolation();
    }

    public function testFailingExpressionAtPropertyLevel()
    {
        \$constraint = new Expression([
            'expression' => 'value == this.data',
            'message' => 'myMessage',
        ]);

        \$object = new Entity();
        \$object->data = '1';

        \$this->setRoot(\$object);
        \$this->setPropertyPath('data');
        \$this->setProperty(\$object, 'data');

        \$this->validator->validate('2', \$constraint);

        \$this->buildViolation('myMessage')
            ->atPath('data')
            ->setParameter('";
        // line 159
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 159, $this->source); })()), "html", null, true);
        echo "', '\"2\"')
            ->setCode(Expression::EXPRESSION_FAILED_ERROR)
            ->assertRaised();
    }

    public function testSucceedingExpressionAtNestedPropertyLevel()
    {
        \$constraint = new Expression('value == this.data');

        \$object = new Entity();
        \$object->data = '1';

        \$root = new Entity();
        \$root->reference = \$object;

        \$this->setRoot(\$root);
        \$this->setPropertyPath('reference.data');
        \$this->setProperty(\$object, 'data');

        \$this->validator->validate('1', \$constraint);

        \$this->assertNoViolation();
    }

    public function testFailingExpressionAtNestedPropertyLevel()
    {
        \$constraint = new Expression([
            'expression' => 'value == this.data',
            'message' => 'myMessage',
        ]);

        \$object = new Entity();
        \$object->data = '1';

        \$root = new Entity();
        \$root->reference = \$object;

        \$this->setRoot(\$root);
        \$this->setPropertyPath('reference.data');
        \$this->setProperty(\$object, 'data');

        \$this->validator->validate('2', \$constraint);

        \$this->buildViolation('myMessage')
            ->atPath('reference.data')
            ->setParameter('";
        // line 204
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 204, $this->source); })()), "html", null, true);
        echo "', '\"2\"')
            ->setCode(Expression::EXPRESSION_FAILED_ERROR)
            ->assertRaised();
    }

    /**
     * When validatePropertyValue() is called with a class name
     * https://github.com/symfony/symfony/pull/11498.
     */
    public function testSucceedingExpressionAtPropertyLevelWithoutRoot()
    {
        \$constraint = new Expression('value == \"1\"');

        \$this->setRoot('1');
        \$this->setPropertyPath('');
        \$this->setProperty(null, 'property');

        \$this->validator->validate('1', \$constraint);

        \$this->assertNoViolation();
    }

    /**
     * When validatePropertyValue() is called with a class name
     * https://github.com/symfony/symfony/pull/11498.
     */
    public function testFailingExpressionAtPropertyLevelWithoutRoot()
    {
        \$constraint = new Expression([
            'expression' => 'value == \"1\"',
            'message' => 'myMessage',
        ]);

        \$this->setRoot('2');
        \$this->setPropertyPath('');
        \$this->setProperty(null, 'property');

        \$this->validator->validate('2', \$constraint);

        \$this->buildViolation('myMessage')
            ->atPath('')
            ->setParameter('";
        // line 245
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 245, $this->source); })()), "html", null, true);
        echo "', '\"2\"')
            ->setCode(Expression::EXPRESSION_FAILED_ERROR)
            ->assertRaised();
    }

    public function testExpressionLanguageUsage()
    {
        \$constraint = new Expression([
            'expression' => 'false',
        ]);

        \$expressionLanguage = \$this->getMockBuilder('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')->getMock();

        \$used = false;

        \$expressionLanguage->method('evaluate')
            ->willReturnCallback(function () use (&\$used) {
                \$used = true;

                return true;
            });

        \$validator = new ExpressionValidator(null, \$expressionLanguage);
        \$validator->initialize(\$this->createContext());
        \$validator->validate(null, \$constraint);

        \$this->assertTrue(\$used, 'Failed asserting that custom ExpressionLanguage instance is used.');
    }

    public function testPassingCustomValues()
    {
        \$constraint = new Expression([
            'expression' => 'value + custom == 2',
            'values' => [
                'custom' => 1,
            ],
        ]);

        \$this->validator->validate(1, \$constraint);

        \$this->assertNoViolation();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Constraints/ExpressionValidatorTest.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 245,  263 => 204,  215 => 159,  173 => 120,  136 => 86,  99 => 52,  81 => 37,  43 => 1,);
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

use Symfony\\Component\\Validator\\Constraints\\Expression;
use Symfony\\Component\\Validator\\Constraints\\ExpressionValidator;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;
use Symfony\\Component\\Validator\\Tests\\Fixtures\\Entity;
use Symfony\\Component\\Validator\\Tests\\Fixtures\\ToString;

class ExpressionValidatorTest extends ConstraintValidatorTestCase
{
    protected function createValidator()
    {
        return new ExpressionValidator();
    }

    public function testExpressionIsEvaluatedWithNullValue()
    {
        \$constraint = new Expression([
            'expression' => 'false',
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(null, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ value }}', 'null')
            ->setCode(Expression::EXPRESSION_FAILED_ERROR)
            ->assertRaised();
    }

    public function testExpressionIsEvaluatedWithEmptyStringValue()
    {
        \$constraint = new Expression([
            'expression' => 'false',
            'message' => 'myMessage',
        ]);

        \$this->validator->validate('', \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ value }}', '\"\"')
            ->setCode(Expression::EXPRESSION_FAILED_ERROR)
            ->assertRaised();
    }

    public function testSucceedingExpressionAtObjectLevel()
    {
        \$constraint = new Expression('this.data == 1');

        \$object = new Entity();
        \$object->data = '1';

        \$this->setObject(\$object);

        \$this->validator->validate(\$object, \$constraint);

        \$this->assertNoViolation();
    }

    public function testFailingExpressionAtObjectLevel()
    {
        \$constraint = new Expression([
            'expression' => 'this.data == 1',
            'message' => 'myMessage',
        ]);

        \$object = new Entity();
        \$object->data = '2';

        \$this->setObject(\$object);

        \$this->validator->validate(\$object, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ value }}', 'object')
            ->setCode(Expression::EXPRESSION_FAILED_ERROR)
            ->assertRaised();
    }

    public function testSucceedingExpressionAtObjectLevelWithToString()
    {
        \$constraint = new Expression('this.data == 1');

        \$object = new ToString();
        \$object->data = '1';

        \$this->setObject(\$object);

        \$this->validator->validate(\$object, \$constraint);

        \$this->assertNoViolation();
    }

    public function testFailingExpressionAtObjectLevelWithToString()
    {
        \$constraint = new Expression([
            'expression' => 'this.data == 1',
            'message' => 'myMessage',
        ]);

        \$object = new ToString();
        \$object->data = '2';

        \$this->setObject(\$object);

        \$this->validator->validate(\$object, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ value }}', 'toString')
            ->setCode(Expression::EXPRESSION_FAILED_ERROR)
            ->assertRaised();
    }

    public function testSucceedingExpressionAtPropertyLevel()
    {
        \$constraint = new Expression('value == this.data');

        \$object = new Entity();
        \$object->data = '1';

        \$this->setRoot(\$object);
        \$this->setPropertyPath('data');
        \$this->setProperty(\$object, 'data');

        \$this->validator->validate('1', \$constraint);

        \$this->assertNoViolation();
    }

    public function testFailingExpressionAtPropertyLevel()
    {
        \$constraint = new Expression([
            'expression' => 'value == this.data',
            'message' => 'myMessage',
        ]);

        \$object = new Entity();
        \$object->data = '1';

        \$this->setRoot(\$object);
        \$this->setPropertyPath('data');
        \$this->setProperty(\$object, 'data');

        \$this->validator->validate('2', \$constraint);

        \$this->buildViolation('myMessage')
            ->atPath('data')
            ->setParameter('{{ value }}', '\"2\"')
            ->setCode(Expression::EXPRESSION_FAILED_ERROR)
            ->assertRaised();
    }

    public function testSucceedingExpressionAtNestedPropertyLevel()
    {
        \$constraint = new Expression('value == this.data');

        \$object = new Entity();
        \$object->data = '1';

        \$root = new Entity();
        \$root->reference = \$object;

        \$this->setRoot(\$root);
        \$this->setPropertyPath('reference.data');
        \$this->setProperty(\$object, 'data');

        \$this->validator->validate('1', \$constraint);

        \$this->assertNoViolation();
    }

    public function testFailingExpressionAtNestedPropertyLevel()
    {
        \$constraint = new Expression([
            'expression' => 'value == this.data',
            'message' => 'myMessage',
        ]);

        \$object = new Entity();
        \$object->data = '1';

        \$root = new Entity();
        \$root->reference = \$object;

        \$this->setRoot(\$root);
        \$this->setPropertyPath('reference.data');
        \$this->setProperty(\$object, 'data');

        \$this->validator->validate('2', \$constraint);

        \$this->buildViolation('myMessage')
            ->atPath('reference.data')
            ->setParameter('{{ value }}', '\"2\"')
            ->setCode(Expression::EXPRESSION_FAILED_ERROR)
            ->assertRaised();
    }

    /**
     * When validatePropertyValue() is called with a class name
     * https://github.com/symfony/symfony/pull/11498.
     */
    public function testSucceedingExpressionAtPropertyLevelWithoutRoot()
    {
        \$constraint = new Expression('value == \"1\"');

        \$this->setRoot('1');
        \$this->setPropertyPath('');
        \$this->setProperty(null, 'property');

        \$this->validator->validate('1', \$constraint);

        \$this->assertNoViolation();
    }

    /**
     * When validatePropertyValue() is called with a class name
     * https://github.com/symfony/symfony/pull/11498.
     */
    public function testFailingExpressionAtPropertyLevelWithoutRoot()
    {
        \$constraint = new Expression([
            'expression' => 'value == \"1\"',
            'message' => 'myMessage',
        ]);

        \$this->setRoot('2');
        \$this->setPropertyPath('');
        \$this->setProperty(null, 'property');

        \$this->validator->validate('2', \$constraint);

        \$this->buildViolation('myMessage')
            ->atPath('')
            ->setParameter('{{ value }}', '\"2\"')
            ->setCode(Expression::EXPRESSION_FAILED_ERROR)
            ->assertRaised();
    }

    public function testExpressionLanguageUsage()
    {
        \$constraint = new Expression([
            'expression' => 'false',
        ]);

        \$expressionLanguage = \$this->getMockBuilder('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')->getMock();

        \$used = false;

        \$expressionLanguage->method('evaluate')
            ->willReturnCallback(function () use (&\$used) {
                \$used = true;

                return true;
            });

        \$validator = new ExpressionValidator(null, \$expressionLanguage);
        \$validator->initialize(\$this->createContext());
        \$validator->validate(null, \$constraint);

        \$this->assertTrue(\$used, 'Failed asserting that custom ExpressionLanguage instance is used.');
    }

    public function testPassingCustomValues()
    {
        \$constraint = new Expression([
            'expression' => 'value + custom == 2',
            'values' => [
                'custom' => 1,
            ],
        ]);

        \$this->validator->validate(1, \$constraint);

        \$this->assertNoViolation();
    }
}
", "vendor/symfony/validator/Tests/Constraints/ExpressionValidatorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Constraints/ExpressionValidatorTest.php");
    }
}
