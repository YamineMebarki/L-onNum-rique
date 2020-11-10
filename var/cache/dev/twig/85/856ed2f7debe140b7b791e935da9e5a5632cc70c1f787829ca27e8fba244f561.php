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

/* vendor/symfony/validator/Test/ConstraintValidatorTestCase.php */
class __TwigTemplate_04d19a9ed629c22e61c54cfb49e4467396bab8189d11941a78b9b76c46917e9c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Test/ConstraintValidatorTestCase.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Test/ConstraintValidatorTestCase.php"));

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

namespace Symfony\\Component\\Validator\\Test;

use PHPUnit\\Framework\\Assert;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\Constraints\\NotNull;
use Symfony\\Component\\Validator\\ConstraintValidatorInterface;
use Symfony\\Component\\Validator\\ConstraintViolation;
use Symfony\\Component\\Validator\\Context\\ExecutionContext;
use Symfony\\Component\\Validator\\Context\\ExecutionContextInterface;
use Symfony\\Component\\Validator\\Mapping\\ClassMetadata;
use Symfony\\Component\\Validator\\Mapping\\PropertyMetadata;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

/**
 * A test case to ease testing Constraint Validators.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
abstract class ConstraintValidatorTestCase extends TestCase
{
    use ForwardCompatTestTrait;

    /**
     * @var ExecutionContextInterface
     */
    protected \$context;

    /**
     * @var ConstraintValidatorInterface
     */
    protected \$validator;

    protected \$group;
    protected \$metadata;
    protected \$object;
    protected \$value;
    protected \$root;
    protected \$propertyPath;
    protected \$constraint;
    protected \$defaultTimezone;

    private function doSetUp()
    {
        \$this->group = 'MyGroup';
        \$this->metadata = null;
        \$this->object = null;
        \$this->value = 'InvalidValue';
        \$this->root = 'root';
        \$this->propertyPath = 'property.path';

        // Initialize the context with some constraint so that we can
        // successfully build a violation.
        \$this->constraint = new NotNull();

        \$this->context = \$this->createContext();
        \$this->validator = \$this->createValidator();
        \$this->validator->initialize(\$this->context);

        \\Locale::setDefault('en');

        \$this->setDefaultTimezone('UTC');
    }

    private function doTearDown()
    {
        \$this->restoreDefaultTimezone();
    }

    protected function setDefaultTimezone(\$defaultTimezone)
    {
        // Make sure this method can not be called twice before calling
        // also restoreDefaultTimezone()
        if (null === \$this->defaultTimezone) {
            \$this->defaultTimezone = date_default_timezone_get();
            date_default_timezone_set(\$defaultTimezone);
        }
    }

    protected function restoreDefaultTimezone()
    {
        if (null !== \$this->defaultTimezone) {
            date_default_timezone_set(\$this->defaultTimezone);
            \$this->defaultTimezone = null;
        }
    }

    protected function createContext()
    {
        \$translator = \$this->getMockBuilder(TranslatorInterface::class)->getMock();
        \$validator = \$this->getMockBuilder('Symfony\\Component\\Validator\\Validator\\ValidatorInterface')->getMock();
        \$contextualValidator = \$this->getMockBuilder('Symfony\\Component\\Validator\\Validator\\ContextualValidatorInterface')->getMock();

        \$context = new ExecutionContext(\$validator, \$this->root, \$translator);
        \$context->setGroup(\$this->group);
        \$context->setNode(\$this->value, \$this->object, \$this->metadata, \$this->propertyPath);
        \$context->setConstraint(\$this->constraint);

        \$validator->expects(\$this->any())
            ->method('inContext')
            ->with(\$context)
            ->willReturn(\$contextualValidator);

        return \$context;
    }

    protected function setGroup(\$group)
    {
        \$this->group = \$group;
        \$this->context->setGroup(\$group);
    }

    protected function setObject(\$object)
    {
        \$this->object = \$object;
        \$this->metadata = \\is_object(\$object)
            ? new ClassMetadata(\\get_class(\$object))
            : null;

        \$this->context->setNode(\$this->value, \$this->object, \$this->metadata, \$this->propertyPath);
    }

    protected function setProperty(\$object, \$property)
    {
        \$this->object = \$object;
        \$this->metadata = \\is_object(\$object)
            ? new PropertyMetadata(\\get_class(\$object), \$property)
            : null;

        \$this->context->setNode(\$this->value, \$this->object, \$this->metadata, \$this->propertyPath);
    }

    protected function setValue(\$value)
    {
        \$this->value = \$value;
        \$this->context->setNode(\$this->value, \$this->object, \$this->metadata, \$this->propertyPath);
    }

    protected function setRoot(\$root)
    {
        \$this->root = \$root;
        \$this->context = \$this->createContext();
        \$this->validator->initialize(\$this->context);
    }

    protected function setPropertyPath(\$propertyPath)
    {
        \$this->propertyPath = \$propertyPath;
        \$this->context->setNode(\$this->value, \$this->object, \$this->metadata, \$this->propertyPath);
    }

    protected function expectNoValidate()
    {
        \$validator = \$this->context->getValidator()->inContext(\$this->context);
        \$validator->expects(\$this->never())
            ->method('atPath');
        \$validator->expects(\$this->never())
            ->method('validate');
    }

    protected function expectValidateAt(\$i, \$propertyPath, \$value, \$group)
    {
        \$validator = \$this->context->getValidator()->inContext(\$this->context);
        \$validator->expects(\$this->at(2 * \$i))
            ->method('atPath')
            ->with(\$propertyPath)
            ->willReturn(\$validator);
        \$validator->expects(\$this->at(2 * \$i + 1))
            ->method('validate')
            ->with(\$value, \$this->logicalOr(null, [], \$this->isInstanceOf('\\Symfony\\Component\\Validator\\Constraints\\Valid')), \$group);
    }

    protected function expectValidateValueAt(\$i, \$propertyPath, \$value, \$constraints, \$group = null)
    {
        \$contextualValidator = \$this->context->getValidator()->inContext(\$this->context);
        \$contextualValidator->expects(\$this->at(2 * \$i))
            ->method('atPath')
            ->with(\$propertyPath)
            ->willReturn(\$contextualValidator);
        \$contextualValidator->expects(\$this->at(2 * \$i + 1))
            ->method('validate')
            ->with(\$value, \$constraints, \$group);
    }

    protected function assertNoViolation()
    {
        \$this->assertSame(0, \$violationsCount = \\count(\$this->context->getViolations()), sprintf('0 violation expected. Got %u.', \$violationsCount));
    }

    /**
     * @param \$message
     *
     * @return ConstraintViolationAssertion
     */
    protected function buildViolation(\$message)
    {
        return new ConstraintViolationAssertion(\$this->context, \$message, \$this->constraint);
    }

    abstract protected function createValidator();
}

/**
 * @internal
 */
class ConstraintViolationAssertion
{
    /**
     * @var ExecutionContextInterface
     */
    private \$context;

    /**
     * @var ConstraintViolationAssertion[]
     */
    private \$assertions;

    private \$message;
    private \$parameters = [];
    private \$invalidValue = 'InvalidValue';
    private \$propertyPath = 'property.path';
    private \$plural;
    private \$code;
    private \$constraint;
    private \$cause;

    public function __construct(ExecutionContextInterface \$context, \$message, Constraint \$constraint = null, array \$assertions = [])
    {
        \$this->context = \$context;
        \$this->message = \$message;
        \$this->constraint = \$constraint;
        \$this->assertions = \$assertions;
    }

    public function atPath(\$path)
    {
        \$this->propertyPath = \$path;

        return \$this;
    }

    public function setParameter(\$key, \$value)
    {
        \$this->parameters[\$key] = \$value;

        return \$this;
    }

    public function setParameters(array \$parameters)
    {
        \$this->parameters = \$parameters;

        return \$this;
    }

    public function setTranslationDomain(\$translationDomain)
    {
        // no-op for BC

        return \$this;
    }

    public function setInvalidValue(\$invalidValue)
    {
        \$this->invalidValue = \$invalidValue;

        return \$this;
    }

    public function setPlural(\$number)
    {
        \$this->plural = \$number;

        return \$this;
    }

    public function setCode(\$code)
    {
        \$this->code = \$code;

        return \$this;
    }

    public function setCause(\$cause)
    {
        \$this->cause = \$cause;

        return \$this;
    }

    public function buildNextViolation(\$message)
    {
        \$assertions = \$this->assertions;
        \$assertions[] = \$this;

        return new self(\$this->context, \$message, \$this->constraint, \$assertions);
    }

    public function assertRaised()
    {
        \$expected = [];
        foreach (\$this->assertions as \$assertion) {
            \$expected[] = \$assertion->getViolation();
        }
        \$expected[] = \$this->getViolation();

        \$violations = iterator_to_array(\$this->context->getViolations());

        Assert::assertSame(\$expectedCount = \\count(\$expected), \$violationsCount = \\count(\$violations), sprintf('%u violation(s) expected. Got %u.', \$expectedCount, \$violationsCount));

        reset(\$violations);

        foreach (\$expected as \$violation) {
            Assert::assertEquals(\$violation, current(\$violations));
            next(\$violations);
        }
    }

    private function getViolation()
    {
        return new ConstraintViolation(
            null,
            \$this->message,
            \$this->parameters,
            \$this->context->getRoot(),
            \$this->propertyPath,
            \$this->invalidValue,
            \$this->plural,
            \$this->code,
            \$this->constraint,
            \$this->cause
        );
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Test/ConstraintValidatorTestCase.php";
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

namespace Symfony\\Component\\Validator\\Test;

use PHPUnit\\Framework\\Assert;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\Constraints\\NotNull;
use Symfony\\Component\\Validator\\ConstraintValidatorInterface;
use Symfony\\Component\\Validator\\ConstraintViolation;
use Symfony\\Component\\Validator\\Context\\ExecutionContext;
use Symfony\\Component\\Validator\\Context\\ExecutionContextInterface;
use Symfony\\Component\\Validator\\Mapping\\ClassMetadata;
use Symfony\\Component\\Validator\\Mapping\\PropertyMetadata;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

/**
 * A test case to ease testing Constraint Validators.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
abstract class ConstraintValidatorTestCase extends TestCase
{
    use ForwardCompatTestTrait;

    /**
     * @var ExecutionContextInterface
     */
    protected \$context;

    /**
     * @var ConstraintValidatorInterface
     */
    protected \$validator;

    protected \$group;
    protected \$metadata;
    protected \$object;
    protected \$value;
    protected \$root;
    protected \$propertyPath;
    protected \$constraint;
    protected \$defaultTimezone;

    private function doSetUp()
    {
        \$this->group = 'MyGroup';
        \$this->metadata = null;
        \$this->object = null;
        \$this->value = 'InvalidValue';
        \$this->root = 'root';
        \$this->propertyPath = 'property.path';

        // Initialize the context with some constraint so that we can
        // successfully build a violation.
        \$this->constraint = new NotNull();

        \$this->context = \$this->createContext();
        \$this->validator = \$this->createValidator();
        \$this->validator->initialize(\$this->context);

        \\Locale::setDefault('en');

        \$this->setDefaultTimezone('UTC');
    }

    private function doTearDown()
    {
        \$this->restoreDefaultTimezone();
    }

    protected function setDefaultTimezone(\$defaultTimezone)
    {
        // Make sure this method can not be called twice before calling
        // also restoreDefaultTimezone()
        if (null === \$this->defaultTimezone) {
            \$this->defaultTimezone = date_default_timezone_get();
            date_default_timezone_set(\$defaultTimezone);
        }
    }

    protected function restoreDefaultTimezone()
    {
        if (null !== \$this->defaultTimezone) {
            date_default_timezone_set(\$this->defaultTimezone);
            \$this->defaultTimezone = null;
        }
    }

    protected function createContext()
    {
        \$translator = \$this->getMockBuilder(TranslatorInterface::class)->getMock();
        \$validator = \$this->getMockBuilder('Symfony\\Component\\Validator\\Validator\\ValidatorInterface')->getMock();
        \$contextualValidator = \$this->getMockBuilder('Symfony\\Component\\Validator\\Validator\\ContextualValidatorInterface')->getMock();

        \$context = new ExecutionContext(\$validator, \$this->root, \$translator);
        \$context->setGroup(\$this->group);
        \$context->setNode(\$this->value, \$this->object, \$this->metadata, \$this->propertyPath);
        \$context->setConstraint(\$this->constraint);

        \$validator->expects(\$this->any())
            ->method('inContext')
            ->with(\$context)
            ->willReturn(\$contextualValidator);

        return \$context;
    }

    protected function setGroup(\$group)
    {
        \$this->group = \$group;
        \$this->context->setGroup(\$group);
    }

    protected function setObject(\$object)
    {
        \$this->object = \$object;
        \$this->metadata = \\is_object(\$object)
            ? new ClassMetadata(\\get_class(\$object))
            : null;

        \$this->context->setNode(\$this->value, \$this->object, \$this->metadata, \$this->propertyPath);
    }

    protected function setProperty(\$object, \$property)
    {
        \$this->object = \$object;
        \$this->metadata = \\is_object(\$object)
            ? new PropertyMetadata(\\get_class(\$object), \$property)
            : null;

        \$this->context->setNode(\$this->value, \$this->object, \$this->metadata, \$this->propertyPath);
    }

    protected function setValue(\$value)
    {
        \$this->value = \$value;
        \$this->context->setNode(\$this->value, \$this->object, \$this->metadata, \$this->propertyPath);
    }

    protected function setRoot(\$root)
    {
        \$this->root = \$root;
        \$this->context = \$this->createContext();
        \$this->validator->initialize(\$this->context);
    }

    protected function setPropertyPath(\$propertyPath)
    {
        \$this->propertyPath = \$propertyPath;
        \$this->context->setNode(\$this->value, \$this->object, \$this->metadata, \$this->propertyPath);
    }

    protected function expectNoValidate()
    {
        \$validator = \$this->context->getValidator()->inContext(\$this->context);
        \$validator->expects(\$this->never())
            ->method('atPath');
        \$validator->expects(\$this->never())
            ->method('validate');
    }

    protected function expectValidateAt(\$i, \$propertyPath, \$value, \$group)
    {
        \$validator = \$this->context->getValidator()->inContext(\$this->context);
        \$validator->expects(\$this->at(2 * \$i))
            ->method('atPath')
            ->with(\$propertyPath)
            ->willReturn(\$validator);
        \$validator->expects(\$this->at(2 * \$i + 1))
            ->method('validate')
            ->with(\$value, \$this->logicalOr(null, [], \$this->isInstanceOf('\\Symfony\\Component\\Validator\\Constraints\\Valid')), \$group);
    }

    protected function expectValidateValueAt(\$i, \$propertyPath, \$value, \$constraints, \$group = null)
    {
        \$contextualValidator = \$this->context->getValidator()->inContext(\$this->context);
        \$contextualValidator->expects(\$this->at(2 * \$i))
            ->method('atPath')
            ->with(\$propertyPath)
            ->willReturn(\$contextualValidator);
        \$contextualValidator->expects(\$this->at(2 * \$i + 1))
            ->method('validate')
            ->with(\$value, \$constraints, \$group);
    }

    protected function assertNoViolation()
    {
        \$this->assertSame(0, \$violationsCount = \\count(\$this->context->getViolations()), sprintf('0 violation expected. Got %u.', \$violationsCount));
    }

    /**
     * @param \$message
     *
     * @return ConstraintViolationAssertion
     */
    protected function buildViolation(\$message)
    {
        return new ConstraintViolationAssertion(\$this->context, \$message, \$this->constraint);
    }

    abstract protected function createValidator();
}

/**
 * @internal
 */
class ConstraintViolationAssertion
{
    /**
     * @var ExecutionContextInterface
     */
    private \$context;

    /**
     * @var ConstraintViolationAssertion[]
     */
    private \$assertions;

    private \$message;
    private \$parameters = [];
    private \$invalidValue = 'InvalidValue';
    private \$propertyPath = 'property.path';
    private \$plural;
    private \$code;
    private \$constraint;
    private \$cause;

    public function __construct(ExecutionContextInterface \$context, \$message, Constraint \$constraint = null, array \$assertions = [])
    {
        \$this->context = \$context;
        \$this->message = \$message;
        \$this->constraint = \$constraint;
        \$this->assertions = \$assertions;
    }

    public function atPath(\$path)
    {
        \$this->propertyPath = \$path;

        return \$this;
    }

    public function setParameter(\$key, \$value)
    {
        \$this->parameters[\$key] = \$value;

        return \$this;
    }

    public function setParameters(array \$parameters)
    {
        \$this->parameters = \$parameters;

        return \$this;
    }

    public function setTranslationDomain(\$translationDomain)
    {
        // no-op for BC

        return \$this;
    }

    public function setInvalidValue(\$invalidValue)
    {
        \$this->invalidValue = \$invalidValue;

        return \$this;
    }

    public function setPlural(\$number)
    {
        \$this->plural = \$number;

        return \$this;
    }

    public function setCode(\$code)
    {
        \$this->code = \$code;

        return \$this;
    }

    public function setCause(\$cause)
    {
        \$this->cause = \$cause;

        return \$this;
    }

    public function buildNextViolation(\$message)
    {
        \$assertions = \$this->assertions;
        \$assertions[] = \$this;

        return new self(\$this->context, \$message, \$this->constraint, \$assertions);
    }

    public function assertRaised()
    {
        \$expected = [];
        foreach (\$this->assertions as \$assertion) {
            \$expected[] = \$assertion->getViolation();
        }
        \$expected[] = \$this->getViolation();

        \$violations = iterator_to_array(\$this->context->getViolations());

        Assert::assertSame(\$expectedCount = \\count(\$expected), \$violationsCount = \\count(\$violations), sprintf('%u violation(s) expected. Got %u.', \$expectedCount, \$violationsCount));

        reset(\$violations);

        foreach (\$expected as \$violation) {
            Assert::assertEquals(\$violation, current(\$violations));
            next(\$violations);
        }
    }

    private function getViolation()
    {
        return new ConstraintViolation(
            null,
            \$this->message,
            \$this->parameters,
            \$this->context->getRoot(),
            \$this->propertyPath,
            \$this->invalidValue,
            \$this->plural,
            \$this->code,
            \$this->constraint,
            \$this->cause
        );
    }
}
", "vendor/symfony/validator/Test/ConstraintValidatorTestCase.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Test/ConstraintValidatorTestCase.php");
    }
}
