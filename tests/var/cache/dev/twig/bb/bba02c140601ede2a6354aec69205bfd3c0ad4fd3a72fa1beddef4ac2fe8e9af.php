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

/* vendor/symfony/validator/Tests/Constraints/CallbackValidatorTest.php */
class __TwigTemplate_65cbd52ab0543a7cc49d877820c0b240f7e348195bec1c66f0ac2543f4c5f9a0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/CallbackValidatorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/CallbackValidatorTest.php"));

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

use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\Constraints\\Callback;
use Symfony\\Component\\Validator\\Constraints\\CallbackValidator;
use Symfony\\Component\\Validator\\Context\\ExecutionContextInterface;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;

class CallbackValidatorTest_Class
{
    public static function validateCallback(\$object, ExecutionContextInterface \$context)
    {
        \$context->addViolation('Callback message', ['";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "' => 'foobar']);

        return false;
    }
}

class CallbackValidatorTest_Object
{
    public function validate(ExecutionContextInterface \$context)
    {
        \$context->addViolation('My message', ['";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "' => 'foobar']);

        return false;
    }

    public static function validateStatic(\$object, ExecutionContextInterface \$context)
    {
        \$context->addViolation('Static message', ['";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 41, $this->source); })()), "html", null, true);
        echo "' => 'baz']);

        return false;
    }
}

class CallbackValidatorTest extends ConstraintValidatorTestCase
{
    protected function createValidator()
    {
        return new CallbackValidator();
    }

    public function testNullIsValid()
    {
        \$this->validator->validate(null, new Callback());

        \$this->assertNoViolation();
    }

    public function testSingleMethod()
    {
        \$object = new CallbackValidatorTest_Object();
        \$constraint = new Callback('validate');

        \$this->validator->validate(\$object, \$constraint);

        \$this->buildViolation('My message')
            ->setParameter('";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 69, $this->source); })()), "html", null, true);
        echo "', 'foobar')
            ->assertRaised();
    }

    public function testSingleMethodExplicitName()
    {
        \$object = new CallbackValidatorTest_Object();
        \$constraint = new Callback(['callback' => 'validate']);

        \$this->validator->validate(\$object, \$constraint);

        \$this->buildViolation('My message')
            ->setParameter('";
        // line 81
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 81, $this->source); })()), "html", null, true);
        echo "', 'foobar')
            ->assertRaised();
    }

    public function testSingleStaticMethod()
    {
        \$object = new CallbackValidatorTest_Object();
        \$constraint = new Callback('validateStatic');

        \$this->validator->validate(\$object, \$constraint);

        \$this->buildViolation('Static message')
            ->setParameter('";
        // line 93
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 93, $this->source); })()), "html", null, true);
        echo "', 'baz')
            ->assertRaised();
    }

    public function testClosure()
    {
        \$object = new CallbackValidatorTest_Object();
        \$constraint = new Callback(function (\$object, ExecutionContextInterface \$context) {
            \$context->addViolation('My message', ['";
        // line 101
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 101, $this->source); })()), "html", null, true);
        echo "' => 'foobar']);

            return false;
        });

        \$this->validator->validate(\$object, \$constraint);

        \$this->buildViolation('My message')
            ->setParameter('";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 109, $this->source); })()), "html", null, true);
        echo "', 'foobar')
            ->assertRaised();
    }

    public function testClosureNullObject()
    {
        \$constraint = new Callback(function (\$object, ExecutionContextInterface \$context) {
            \$context->addViolation('My message', ['";
        // line 116
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 116, $this->source); })()), "html", null, true);
        echo "' => 'foobar']);

            return false;
        });

        \$this->validator->validate(null, \$constraint);

        \$this->buildViolation('My message')
            ->setParameter('";
        // line 124
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 124, $this->source); })()), "html", null, true);
        echo "', 'foobar')
            ->assertRaised();
    }

    public function testClosureExplicitName()
    {
        \$object = new CallbackValidatorTest_Object();
        \$constraint = new Callback([
            'callback' => function (\$object, ExecutionContextInterface \$context) {
                \$context->addViolation('My message', ['";
        // line 133
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 133, $this->source); })()), "html", null, true);
        echo "' => 'foobar']);

                return false;
            },
        ]);

        \$this->validator->validate(\$object, \$constraint);

        \$this->buildViolation('My message')
            ->setParameter('";
        // line 142
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 142, $this->source); })()), "html", null, true);
        echo "', 'foobar')
            ->assertRaised();
    }

    public function testArrayCallable()
    {
        \$object = new CallbackValidatorTest_Object();
        \$constraint = new Callback([__CLASS__.'_Class', 'validateCallback']);

        \$this->validator->validate(\$object, \$constraint);

        \$this->buildViolation('Callback message')
            ->setParameter('";
        // line 154
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 154, $this->source); })()), "html", null, true);
        echo "', 'foobar')
            ->assertRaised();
    }

    public function testArrayCallableNullObject()
    {
        \$constraint = new Callback([__CLASS__.'_Class', 'validateCallback']);

        \$this->validator->validate(null, \$constraint);

        \$this->buildViolation('Callback message')
            ->setParameter('";
        // line 165
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 165, $this->source); })()), "html", null, true);
        echo "', 'foobar')
            ->assertRaised();
    }

    public function testArrayCallableExplicitName()
    {
        \$object = new CallbackValidatorTest_Object();
        \$constraint = new Callback([
            'callback' => [__CLASS__.'_Class', 'validateCallback'],
        ]);

        \$this->validator->validate(\$object, \$constraint);

        \$this->buildViolation('Callback message')
            ->setParameter('";
        // line 179
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 179, $this->source); })()), "html", null, true);
        echo "', 'foobar')
            ->assertRaised();
    }

    public function testExpectValidMethods()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        \$object = new CallbackValidatorTest_Object();

        \$this->validator->validate(\$object, new Callback(['callback' => ['foobar']]));
    }

    public function testExpectValidCallbacks()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        \$object = new CallbackValidatorTest_Object();

        \$this->validator->validate(\$object, new Callback(['callback' => ['foo', 'bar']]));
    }

    public function testConstraintGetTargets()
    {
        \$constraint = new Callback([]);
        \$targets = [Constraint::CLASS_CONSTRAINT, Constraint::PROPERTY_CONSTRAINT];

        \$this->assertEquals(\$targets, \$constraint->getTargets());
    }

    // Should succeed. Needed when defining constraints as annotations.
    public function testNoConstructorArguments()
    {
        \$constraint = new Callback();

        \$this->assertSame([Constraint::CLASS_CONSTRAINT, Constraint::PROPERTY_CONSTRAINT], \$constraint->getTargets());
    }

    public function testAnnotationInvocationSingleValued()
    {
        \$constraint = new Callback(['value' => 'validateStatic']);

        \$this->assertEquals(new Callback('validateStatic'), \$constraint);
    }

    public function testAnnotationInvocationMultiValued()
    {
        \$constraint = new Callback(['value' => [__CLASS__.'_Class', 'validateCallback']]);

        \$this->assertEquals(new Callback([__CLASS__.'_Class', 'validateCallback']), \$constraint);
    }

    public function testPayloadIsPassedToCallback()
    {
        \$object = new \\stdClass();
        \$payloadCopy = null;

        \$constraint = new Callback([
            'callback' => function (\$object, ExecutionContextInterface \$constraint, \$payload) use (&\$payloadCopy) {
                \$payloadCopy = \$payload;
            },
            'payload' => 'Hello world!',
        ]);
        \$this->validator->validate(\$object, \$constraint);
        \$this->assertEquals('Hello world!', \$payloadCopy);

        \$payloadCopy = null;
        \$constraint = new Callback([
            'callback' => function (\$object, ExecutionContextInterface \$constraint, \$payload) use (&\$payloadCopy) {
                \$payloadCopy = \$payload;
            },
        ]);
        \$this->validator->validate(\$object, \$constraint);
        \$this->assertNull(\$payloadCopy);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Constraints/CallbackValidatorTest.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 179,  248 => 165,  234 => 154,  219 => 142,  207 => 133,  195 => 124,  184 => 116,  174 => 109,  163 => 101,  152 => 93,  137 => 81,  122 => 69,  91 => 41,  81 => 34,  68 => 24,  43 => 1,);
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

use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\Constraints\\Callback;
use Symfony\\Component\\Validator\\Constraints\\CallbackValidator;
use Symfony\\Component\\Validator\\Context\\ExecutionContextInterface;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;

class CallbackValidatorTest_Class
{
    public static function validateCallback(\$object, ExecutionContextInterface \$context)
    {
        \$context->addViolation('Callback message', ['{{ value }}' => 'foobar']);

        return false;
    }
}

class CallbackValidatorTest_Object
{
    public function validate(ExecutionContextInterface \$context)
    {
        \$context->addViolation('My message', ['{{ value }}' => 'foobar']);

        return false;
    }

    public static function validateStatic(\$object, ExecutionContextInterface \$context)
    {
        \$context->addViolation('Static message', ['{{ value }}' => 'baz']);

        return false;
    }
}

class CallbackValidatorTest extends ConstraintValidatorTestCase
{
    protected function createValidator()
    {
        return new CallbackValidator();
    }

    public function testNullIsValid()
    {
        \$this->validator->validate(null, new Callback());

        \$this->assertNoViolation();
    }

    public function testSingleMethod()
    {
        \$object = new CallbackValidatorTest_Object();
        \$constraint = new Callback('validate');

        \$this->validator->validate(\$object, \$constraint);

        \$this->buildViolation('My message')
            ->setParameter('{{ value }}', 'foobar')
            ->assertRaised();
    }

    public function testSingleMethodExplicitName()
    {
        \$object = new CallbackValidatorTest_Object();
        \$constraint = new Callback(['callback' => 'validate']);

        \$this->validator->validate(\$object, \$constraint);

        \$this->buildViolation('My message')
            ->setParameter('{{ value }}', 'foobar')
            ->assertRaised();
    }

    public function testSingleStaticMethod()
    {
        \$object = new CallbackValidatorTest_Object();
        \$constraint = new Callback('validateStatic');

        \$this->validator->validate(\$object, \$constraint);

        \$this->buildViolation('Static message')
            ->setParameter('{{ value }}', 'baz')
            ->assertRaised();
    }

    public function testClosure()
    {
        \$object = new CallbackValidatorTest_Object();
        \$constraint = new Callback(function (\$object, ExecutionContextInterface \$context) {
            \$context->addViolation('My message', ['{{ value }}' => 'foobar']);

            return false;
        });

        \$this->validator->validate(\$object, \$constraint);

        \$this->buildViolation('My message')
            ->setParameter('{{ value }}', 'foobar')
            ->assertRaised();
    }

    public function testClosureNullObject()
    {
        \$constraint = new Callback(function (\$object, ExecutionContextInterface \$context) {
            \$context->addViolation('My message', ['{{ value }}' => 'foobar']);

            return false;
        });

        \$this->validator->validate(null, \$constraint);

        \$this->buildViolation('My message')
            ->setParameter('{{ value }}', 'foobar')
            ->assertRaised();
    }

    public function testClosureExplicitName()
    {
        \$object = new CallbackValidatorTest_Object();
        \$constraint = new Callback([
            'callback' => function (\$object, ExecutionContextInterface \$context) {
                \$context->addViolation('My message', ['{{ value }}' => 'foobar']);

                return false;
            },
        ]);

        \$this->validator->validate(\$object, \$constraint);

        \$this->buildViolation('My message')
            ->setParameter('{{ value }}', 'foobar')
            ->assertRaised();
    }

    public function testArrayCallable()
    {
        \$object = new CallbackValidatorTest_Object();
        \$constraint = new Callback([__CLASS__.'_Class', 'validateCallback']);

        \$this->validator->validate(\$object, \$constraint);

        \$this->buildViolation('Callback message')
            ->setParameter('{{ value }}', 'foobar')
            ->assertRaised();
    }

    public function testArrayCallableNullObject()
    {
        \$constraint = new Callback([__CLASS__.'_Class', 'validateCallback']);

        \$this->validator->validate(null, \$constraint);

        \$this->buildViolation('Callback message')
            ->setParameter('{{ value }}', 'foobar')
            ->assertRaised();
    }

    public function testArrayCallableExplicitName()
    {
        \$object = new CallbackValidatorTest_Object();
        \$constraint = new Callback([
            'callback' => [__CLASS__.'_Class', 'validateCallback'],
        ]);

        \$this->validator->validate(\$object, \$constraint);

        \$this->buildViolation('Callback message')
            ->setParameter('{{ value }}', 'foobar')
            ->assertRaised();
    }

    public function testExpectValidMethods()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        \$object = new CallbackValidatorTest_Object();

        \$this->validator->validate(\$object, new Callback(['callback' => ['foobar']]));
    }

    public function testExpectValidCallbacks()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        \$object = new CallbackValidatorTest_Object();

        \$this->validator->validate(\$object, new Callback(['callback' => ['foo', 'bar']]));
    }

    public function testConstraintGetTargets()
    {
        \$constraint = new Callback([]);
        \$targets = [Constraint::CLASS_CONSTRAINT, Constraint::PROPERTY_CONSTRAINT];

        \$this->assertEquals(\$targets, \$constraint->getTargets());
    }

    // Should succeed. Needed when defining constraints as annotations.
    public function testNoConstructorArguments()
    {
        \$constraint = new Callback();

        \$this->assertSame([Constraint::CLASS_CONSTRAINT, Constraint::PROPERTY_CONSTRAINT], \$constraint->getTargets());
    }

    public function testAnnotationInvocationSingleValued()
    {
        \$constraint = new Callback(['value' => 'validateStatic']);

        \$this->assertEquals(new Callback('validateStatic'), \$constraint);
    }

    public function testAnnotationInvocationMultiValued()
    {
        \$constraint = new Callback(['value' => [__CLASS__.'_Class', 'validateCallback']]);

        \$this->assertEquals(new Callback([__CLASS__.'_Class', 'validateCallback']), \$constraint);
    }

    public function testPayloadIsPassedToCallback()
    {
        \$object = new \\stdClass();
        \$payloadCopy = null;

        \$constraint = new Callback([
            'callback' => function (\$object, ExecutionContextInterface \$constraint, \$payload) use (&\$payloadCopy) {
                \$payloadCopy = \$payload;
            },
            'payload' => 'Hello world!',
        ]);
        \$this->validator->validate(\$object, \$constraint);
        \$this->assertEquals('Hello world!', \$payloadCopy);

        \$payloadCopy = null;
        \$constraint = new Callback([
            'callback' => function (\$object, ExecutionContextInterface \$constraint, \$payload) use (&\$payloadCopy) {
                \$payloadCopy = \$payload;
            },
        ]);
        \$this->validator->validate(\$object, \$constraint);
        \$this->assertNull(\$payloadCopy);
    }
}
", "vendor/symfony/validator/Tests/Constraints/CallbackValidatorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Constraints/CallbackValidatorTest.php");
    }
}
