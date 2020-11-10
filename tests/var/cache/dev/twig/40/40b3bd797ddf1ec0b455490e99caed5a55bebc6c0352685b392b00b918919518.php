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

/* vendor/symfony/form/Tests/Extension/Validator/Constraints/FormValidatorTest.php */
class __TwigTemplate_a8de8d23dbb620c6d063c68ee58868aee7088a39900c48b03c8ff17974049695 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Validator/Constraints/FormValidatorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Validator/Constraints/FormValidatorTest.php"));

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

namespace Symfony\\Component\\Form\\Tests\\Extension\\Validator\\Constraints;

use Symfony\\Component\\EventDispatcher\\EventDispatcher;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Form\\CallbackTransformer;
use Symfony\\Component\\Form\\Exception\\TransformationFailedException;
use Symfony\\Component\\Form\\Extension\\Core\\DataMapper\\PropertyPathMapper;
use Symfony\\Component\\Form\\Extension\\Validator\\Constraints\\Form;
use Symfony\\Component\\Form\\Extension\\Validator\\Constraints\\FormValidator;
use Symfony\\Component\\Form\\FormBuilder;
use Symfony\\Component\\Form\\FormFactoryBuilder;
use Symfony\\Component\\Form\\FormFactoryInterface;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\SubmitButtonBuilder;
use Symfony\\Component\\Translation\\IdentityTranslator;
use Symfony\\Component\\Validator\\Constraints\\Collection;
use Symfony\\Component\\Validator\\Constraints\\GroupSequence;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;
use Symfony\\Component\\Validator\\Constraints\\NotNull;
use Symfony\\Component\\Validator\\Constraints\\Valid;
use Symfony\\Component\\Validator\\Context\\ExecutionContext;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;
use Symfony\\Component\\Validator\\Validation;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class FormValidatorTest extends ConstraintValidatorTestCase
{
    /**
     * @var EventDispatcherInterface
     */
    private \$dispatcher;

    /**
     * @var FormFactoryInterface
     */
    private \$factory;

    protected function setUp(): void
    {
        \$this->dispatcher = new EventDispatcher();
        \$this->factory = (new FormFactoryBuilder())->getFormFactory();

        parent::setUp();

        \$this->constraint = new Form();
    }

    public function testValidate()
    {
        \$object = new \\stdClass();
        \$options = ['validation_groups' => ['group1', 'group2']];
        \$form = \$this->getCompoundForm(\$object, \$options);
        \$form->submit([]);

        \$this->expectValidateAt(0, 'data', \$object, ['group1', 'group2']);

        \$this->validator->validate(\$form, new Form());

        \$this->assertNoViolation();
    }

    public function testValidateConstraints()
    {
        \$object = new \\stdClass();
        \$constraint1 = new NotNull(['groups' => ['group1', 'group2']]);
        \$constraint2 = new NotBlank(['groups' => 'group2']);

        \$options = [
            'validation_groups' => ['group1', 'group2'],
            'constraints' => [\$constraint1, \$constraint2],
        ];
        \$form = \$this->getCompoundForm(\$object, \$options);
        \$form->submit([]);

        // First default constraints
        \$this->expectValidateAt(0, 'data', \$object, ['group1', 'group2']);

        // Then custom constraints
        \$this->expectValidateValueAt(1, 'data', \$object, \$constraint1, 'group1');
        \$this->expectValidateValueAt(2, 'data', \$object, \$constraint2, 'group2');

        \$this->validator->validate(\$form, new Form());

        \$this->assertNoViolation();
    }

    public function testValidateChildIfValidConstraint()
    {
        \$object = new \\stdClass();

        \$parent = \$this->getBuilder('parent')
            ->setCompound(true)
            ->setDataMapper(new PropertyPathMapper())
            ->getForm();
        \$options = [
            'validation_groups' => ['group1', 'group2'],
            'constraints' => [new Valid()],
        ];
        \$form = \$this->getCompoundForm(\$object, \$options);
        \$parent->add(\$form);
        \$parent->submit([]);

        \$this->expectValidateAt(0, 'data', \$object, ['group1', 'group2']);

        \$this->validator->validate(\$form, new Form());

        \$this->assertNoViolation();
    }

    public function testDontValidateIfParentWithoutValidConstraint()
    {
        \$object = new \\stdClass();

        \$parent = \$this->getBuilder('parent', null)
            ->setCompound(true)
            ->setDataMapper(new PropertyPathMapper())
            ->getForm();
        \$options = ['validation_groups' => ['group1', 'group2']];
        \$form = \$this->getBuilder('name', '\\stdClass', \$options)->getForm();
        \$parent->add(\$form);

        \$form->setData(\$object);

        \$this->expectNoValidate();

        \$this->validator->validate(\$form, new Form());

        \$this->assertNoViolation();
    }

    public function testMissingConstraintIndex()
    {
        \$object = new \\stdClass();
        \$form = \$this->getCompoundForm(\$object);
        \$form->submit([]);

        \$this->expectValidateAt(0, 'data', \$object, ['Default']);

        \$this->validator->validate(\$form, new Form());

        \$this->assertNoViolation();
    }

    public function testValidateConstraintsOptionEvenIfNoValidConstraint()
    {
        \$object = new \\stdClass();
        \$constraint1 = new NotNull(['groups' => ['group1', 'group2']]);
        \$constraint2 = new NotBlank(['groups' => 'group2']);

        \$parent = \$this->getBuilder('parent', null)
            ->setCompound(true)
            ->setDataMapper(new PropertyPathMapper())
            ->getForm();
        \$options = [
            'validation_groups' => ['group1', 'group2'],
            'constraints' => [\$constraint1, \$constraint2],
        ];
        \$form = \$this->getCompoundForm(\$object, \$options);
        \$parent->add(\$form);
        \$parent->submit([]);

        \$this->expectValidateValueAt(0, 'data', \$object, \$constraint1, 'group1');
        \$this->expectValidateValueAt(1, 'data', \$object, \$constraint2, 'group2');

        \$this->validator->validate(\$form, new Form());

        \$this->assertNoViolation();
    }

    public function testDontValidateIfNoValidationGroups()
    {
        \$object = new \\stdClass();

        \$form = \$this->getBuilder('name', '\\stdClass', [
                'validation_groups' => [],
            ])
            ->setData(\$object)
            ->getForm();

        \$form->setData(\$object);

        \$this->expectNoValidate();

        \$this->validator->validate(\$form, new Form());

        \$this->assertNoViolation();
    }

    public function testDontValidateConstraintsIfNoValidationGroups()
    {
        \$object = new \\stdClass();

        \$options = [
            'validation_groups' => [],
            'constraints' => [new NotBlank(), new NotNull()],
        ];
        \$form = \$this->getBuilder('name', '\\stdClass', \$options)
            ->setData(\$object)
            ->getForm();

        // Launch transformer
        \$form->submit('foo');

        \$this->expectNoValidate();

        \$this->validator->validate(\$form, new Form());

        \$this->assertNoViolation();
    }

    public function testDontValidateChildConstraintsIfCallableNoValidationGroups()
    {
        \$formOptions = [
            'constraints' => [new Valid()],
            'validation_groups' => [],
        ];
        \$form = \$this->getBuilder('name', null, \$formOptions)
            ->setCompound(true)
            ->setDataMapper(new PropertyPathMapper())
            ->getForm();
        \$childOptions = ['constraints' => [new NotBlank()]];
        \$child = \$this->getCompoundForm(new \\stdClass(), \$childOptions);
        \$form->add(\$child);
        \$form->submit([]);

        \$this->expectNoValidate();

        \$this->validator->validate(\$form, new Form());

        \$this->assertNoViolation();
    }

    public function testDontValidateIfNotSynchronized()
    {
        \$object = new \\stdClass();

        \$form = \$this->getBuilder('name', '\\stdClass', [
                'invalid_message' => 'invalid_message_key',
                // Invalid message parameters must be supported, because the
                // invalid message can be a translation key
                // see https://github.com/symfony/symfony/issues/5144
                'invalid_message_parameters' => ['";
        // line 255
        echo twig_escape_filter($this->env, (isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 255, $this->source); })()), "html", null, true);
        echo "' => 'bar'],
            ])
            ->setData(\$object)
            ->addViewTransformer(new CallbackTransformer(
                function (\$data) { return \$data; },
                function () { throw new TransformationFailedException(); }
            ))
            ->getForm();

        // Launch transformer
        \$form->submit('foo');

        \$this->expectNoValidate();

        \$this->validator->validate(\$form, new Form());

        \$this->buildViolation('invalid_message_key')
            ->setParameter('";
        // line 272
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 272, $this->source); })()), "html", null, true);
        echo "', 'foo')
            ->setParameter('";
        // line 273
        echo twig_escape_filter($this->env, (isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 273, $this->source); })()), "html", null, true);
        echo "', 'bar')
            ->setInvalidValue('foo')
            ->setCode(Form::NOT_SYNCHRONIZED_ERROR)
            ->setCause(\$form->getTransformationFailure())
            ->assertRaised();
    }

    public function testAddInvalidErrorEvenIfNoValidationGroups()
    {
        \$object = new \\stdClass();

        \$form = \$this->getBuilder('name', '\\stdClass', [
                'invalid_message' => 'invalid_message_key',
                // Invalid message parameters must be supported, because the
                // invalid message can be a translation key
                // see https://github.com/symfony/symfony/issues/5144
                'invalid_message_parameters' => ['";
        // line 289
        echo twig_escape_filter($this->env, (isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 289, $this->source); })()), "html", null, true);
        echo "' => 'bar'],
                'validation_groups' => [],
            ])
            ->setData(\$object)
            ->addViewTransformer(new CallbackTransformer(
                    function (\$data) { return \$data; },
                    function () { throw new TransformationFailedException(); }
                ))
            ->getForm();

        // Launch transformer
        \$form->submit('foo');

        \$this->expectNoValidate();

        \$this->validator->validate(\$form, new Form());

        \$this->buildViolation('invalid_message_key')
            ->setParameter('";
        // line 307
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 307, $this->source); })()), "html", null, true);
        echo "', 'foo')
            ->setParameter('";
        // line 308
        echo twig_escape_filter($this->env, (isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 308, $this->source); })()), "html", null, true);
        echo "', 'bar')
            ->setInvalidValue('foo')
            ->setCode(Form::NOT_SYNCHRONIZED_ERROR)
            ->setCause(\$form->getTransformationFailure())
            ->assertRaised();
    }

    public function testDontValidateConstraintsIfNotSynchronized()
    {
        \$object = new \\stdClass();

        \$options = [
            'invalid_message' => 'invalid_message_key',
            'validation_groups' => ['group1', 'group2'],
            'constraints' => [new NotBlank(), new NotBlank()],
        ];
        \$form = \$this->getBuilder('name', '\\stdClass', \$options)
            ->setData(\$object)
            ->addViewTransformer(new CallbackTransformer(
                function (\$data) { return \$data; },
                function () { throw new TransformationFailedException(); }
            ))
            ->getForm();

        // Launch transformer
        \$form->submit('foo');

        \$this->expectNoValidate();

        \$this->validator->validate(\$form, new Form());

        \$this->buildViolation('invalid_message_key')
            ->setParameter('";
        // line 340
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 340, $this->source); })()), "html", null, true);
        echo "', 'foo')
            ->setInvalidValue('foo')
            ->setCode(Form::NOT_SYNCHRONIZED_ERROR)
            ->setCause(\$form->getTransformationFailure())
            ->assertRaised();
    }

    public function testTransformationFailedExceptionInvalidMessageIsUsed()
    {
        \$object = \$this->createMock('\\stdClass');

        \$form = \$this
            ->getBuilder('name', '\\stdClass', [
                'invalid_message' => 'invalid_message_key',
                'invalid_message_parameters' => ['";
        // line 354
        echo twig_escape_filter($this->env, (isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 354, $this->source); })()), "html", null, true);
        echo "' => 'foo'],
            ])
            ->setData(\$object)
            ->addViewTransformer(new CallbackTransformer(
                function (\$data) { return \$data; },
                function () {
                    \$failure = new TransformationFailedException();
                    \$failure->setInvalidMessage('safe message to be used', ['";
        // line 361
        echo twig_escape_filter($this->env, (isset($context["bar"]) || array_key_exists("bar", $context) ? $context["bar"] : (function () { throw new RuntimeError('Variable "bar" does not exist.', 361, $this->source); })()), "html", null, true);
        echo "' => 'bar']);

                    throw \$failure;
                }
            ))
            ->getForm()
        ;

        \$form->submit('value');

        \$this->expectNoValidate();

        \$this->validator->validate(\$form, new Form());

        \$this->buildViolation('safe message to be used')
            ->setParameters([
                '";
        // line 377
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 377, $this->source); })()), "html", null, true);
        echo "' => 'value',
                '";
        // line 378
        echo twig_escape_filter($this->env, (isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 378, $this->source); })()), "html", null, true);
        echo "' => 'foo',
                '";
        // line 379
        echo twig_escape_filter($this->env, (isset($context["bar"]) || array_key_exists("bar", $context) ? $context["bar"] : (function () { throw new RuntimeError('Variable "bar" does not exist.', 379, $this->source); })()), "html", null, true);
        echo "' => 'bar',
            ])
            ->setInvalidValue('value')
            ->setCode(Form::NOT_SYNCHRONIZED_ERROR)
            ->setCause(\$form->getTransformationFailure())
            ->assertRaised()
        ;
    }

    // https://github.com/symfony/symfony/issues/4359
    public function testDontMarkInvalidIfAnyChildIsNotSynchronized()
    {
        \$object = new \\stdClass();
        \$object->child = 'bar';

        \$failingTransformer = new CallbackTransformer(
            function (\$data) { return \$data; },
            function () { throw new TransformationFailedException(); }
        );

        \$form = \$this->getBuilder('name', '\\stdClass')
            ->setData(\$object)
            ->addViewTransformer(\$failingTransformer)
            ->setCompound(true)
            ->setDataMapper(new PropertyPathMapper())
            ->add(
                \$this->getBuilder('child')
                    ->addViewTransformer(\$failingTransformer)
            )
            ->getForm();

        // Launch transformer
        \$form->submit(['child' => 'foo']);

        \$this->expectNoValidate();

        \$this->validator->validate(\$form, new Form());

        \$this->assertNoViolation();
    }

    public function testHandleGroupSequenceValidationGroups()
    {
        \$object = new \\stdClass();
        \$options = ['validation_groups' => new GroupSequence(['group1', 'group2'])];
        \$form = \$this->getCompoundForm(\$object, \$options);
        \$form->submit([]);

        \$this->expectValidateAt(0, 'data', \$object, new GroupSequence(['group1', 'group2']));
        \$this->expectValidateAt(1, 'data', \$object, new GroupSequence(['group1', 'group2']));

        \$this->validator->validate(\$form, new Form());

        \$this->assertNoViolation();
    }

    public function testHandleCallbackValidationGroups()
    {
        \$object = new \\stdClass();
        \$options = ['validation_groups' => [\$this, 'getValidationGroups']];
        \$form = \$this->getCompoundForm(\$object, \$options);
        \$form->submit([]);

        \$this->expectValidateAt(0, 'data', \$object, ['group1', 'group2']);

        \$this->validator->validate(\$form, new Form());

        \$this->assertNoViolation();
    }

    public function testDontExecuteFunctionNames()
    {
        \$object = new \\stdClass();
        \$options = ['validation_groups' => 'header'];
        \$form = \$this->getCompoundForm(\$object, \$options);
        \$form->submit([]);

        \$this->expectValidateAt(0, 'data', \$object, ['header']);

        \$this->validator->validate(\$form, new Form());

        \$this->assertNoViolation();
    }

    public function testHandleClosureValidationGroups()
    {
        \$object = new \\stdClass();
        \$options = ['validation_groups' => function (FormInterface \$form) {
            return ['group1', 'group2'];
        }];
        \$form = \$this->getCompoundForm(\$object, \$options);
        \$form->submit([]);

        \$this->expectValidateAt(0, 'data', \$object, ['group1', 'group2']);

        \$this->validator->validate(\$form, new Form());

        \$this->assertNoViolation();
    }

    public function testUseValidationGroupOfClickedButton()
    {
        \$object = new \\stdClass();

        \$parent = \$this->getBuilder('parent')
            ->setCompound(true)
            ->setDataMapper(new PropertyPathMapper())
            ->getForm();
        \$form = \$this->getForm('name', '\\stdClass', [
            'validation_groups' => 'form_group',
            'constraints' => [new Valid()],
        ]);

        \$parent->add(\$form);
        \$parent->add(\$this->getSubmitButton('submit', [
            'validation_groups' => 'button_group',
        ]));

        \$parent->submit(['name' => \$object, 'submit' => '']);

        \$this->expectValidateAt(0, 'data', \$object, ['button_group']);

        \$this->validator->validate(\$form, new Form());

        \$this->assertNoViolation();
    }

    public function testDontUseValidationGroupOfUnclickedButton()
    {
        \$object = new \\stdClass();

        \$parent = \$this->getBuilder('parent')
            ->setCompound(true)
            ->setDataMapper(new PropertyPathMapper())
            ->getForm();
        \$form = \$this->getCompoundForm(\$object, [
            'validation_groups' => 'form_group',
            'constraints' => [new Valid()],
        ]);

        \$parent->add(\$form);
        \$parent->add(\$this->getSubmitButton('submit', [
            'validation_groups' => 'button_group',
        ]));

        \$parent->submit([]);

        \$this->expectValidateAt(0, 'data', \$object, ['form_group']);

        \$this->validator->validate(\$form, new Form());

        \$this->assertNoViolation();
    }

    public function testUseInheritedValidationGroup()
    {
        \$object = new \\stdClass();

        \$parentOptions = ['validation_groups' => 'group'];
        \$parent = \$this->getBuilder('parent', null, \$parentOptions)
            ->setCompound(true)
            ->setDataMapper(new PropertyPathMapper())
            ->getForm();
        \$formOptions = ['constraints' => [new Valid()]];
        \$form = \$this->getCompoundForm(\$object, \$formOptions);
        \$parent->add(\$form);
        \$parent->submit([]);

        \$this->expectValidateAt(0, 'data', \$object, ['group']);

        \$this->validator->validate(\$form, new Form());

        \$this->assertNoViolation();
    }

    public function testUseInheritedCallbackValidationGroup()
    {
        \$object = new \\stdClass();

        \$parentOptions = ['validation_groups' => [\$this, 'getValidationGroups']];
        \$parent = \$this->getBuilder('parent', null, \$parentOptions)
            ->setCompound(true)
            ->setDataMapper(new PropertyPathMapper())
            ->getForm();
        \$formOptions = ['constraints' => [new Valid()]];
        \$form = \$this->getCompoundForm(\$object, \$formOptions);
        \$parent->add(\$form);
        \$parent->submit([]);

        \$this->expectValidateAt(0, 'data', \$object, ['group1', 'group2']);

        \$this->validator->validate(\$form, new Form());

        \$this->assertNoViolation();
    }

    public function testUseInheritedClosureValidationGroup()
    {
        \$object = new \\stdClass();

        \$parentOptions = [
            'validation_groups' => function () {
                return ['group1', 'group2'];
            },
        ];
        \$parent = \$this->getBuilder('parent', null, \$parentOptions)
            ->setCompound(true)
            ->setDataMapper(new PropertyPathMapper())
            ->getForm();
        \$formOptions = ['constraints' => [new Valid()]];
        \$form = \$this->getCompoundForm(\$object, \$formOptions);
        \$parent->add(\$form);
        \$parent->submit([]);

        \$this->expectValidateAt(0, 'data', \$object, ['group1', 'group2']);

        \$this->validator->validate(\$form, new Form());

        \$this->assertNoViolation();
    }

    public function testAppendPropertyPath()
    {
        \$object = new \\stdClass();
        \$form = \$this->getCompoundForm(\$object);
        \$form->submit([]);

        \$this->expectValidateAt(0, 'data', \$object, ['Default']);

        \$this->validator->validate(\$form, new Form());

        \$this->assertNoViolation();
    }

    public function testDontWalkScalars()
    {
        \$form = \$this->getBuilder()
            ->setData('scalar')
            ->getForm();

        \$this->expectNoValidate();

        \$this->validator->validate(\$form, new Form());

        \$this->assertNoViolation();
    }

    public function testViolationIfExtraData()
    {
        \$form = \$this->getBuilder('parent', null, ['extra_fields_message' => 'Extra!'])
            ->setCompound(true)
            ->setDataMapper(new PropertyPathMapper())
            ->add(\$this->getBuilder('child'))
            ->getForm();

        \$form->submit(['foo' => 'bar']);

        \$this->expectNoValidate();

        \$this->validator->validate(\$form, new Form());

        \$this->buildViolation('Extra!')
            ->setParameter('";
        // line 641
        echo twig_escape_filter($this->env, (isset($context["extra_fields"]) || array_key_exists("extra_fields", $context) ? $context["extra_fields"] : (function () { throw new RuntimeError('Variable "extra_fields" does not exist.', 641, $this->source); })()), "html", null, true);
        echo "', '\"foo\"')
            ->setInvalidValue(['foo' => 'bar'])
            ->setCode(Form::NO_SUCH_FIELD_ERROR)
            ->assertRaised();
    }

    public function testViolationFormatIfMultipleExtraFields()
    {
        \$form = \$this->getBuilder('parent', null, ['extra_fields_message' => 'Extra!'])
            ->setCompound(true)
            ->setDataMapper(new PropertyPathMapper())
            ->add(\$this->getBuilder('child'))
            ->getForm();

        \$form->submit(['foo' => 'bar', 'baz' => 'qux', 'quux' => 'quuz']);

        \$this->expectNoValidate();

        \$this->validator->validate(\$form, new Form());

        \$this->buildViolation('Extra!')
            ->setParameter('";
        // line 662
        echo twig_escape_filter($this->env, (isset($context["extra_fields"]) || array_key_exists("extra_fields", $context) ? $context["extra_fields"] : (function () { throw new RuntimeError('Variable "extra_fields" does not exist.', 662, $this->source); })()), "html", null, true);
        echo "', '\"foo\", \"baz\", \"quux\"')
            ->setInvalidValue(['foo' => 'bar', 'baz' => 'qux', 'quux' => 'quuz'])
            ->setCode(Form::NO_SUCH_FIELD_ERROR)
            ->assertRaised();
    }

    public function testNoViolationIfAllowExtraData()
    {
        \$form = \$this
            ->getBuilder('parent', null, ['allow_extra_fields' => true])
            ->setCompound(true)
            ->setDataMapper(new PropertyPathMapper())
            ->add(\$this->getBuilder('child'))
            ->getForm();

        \$context = new ExecutionContext(Validation::createValidator(), \$form, new IdentityTranslator());

        \$form->submit(['foo' => 'bar']);

        \$this->validator->initialize(\$context);
        \$this->validator->validate(\$form, new Form());

        \$this->assertCount(0, \$context->getViolations());
    }

    /**
     * Access has to be public, as this method is called via callback array
     * in {@link testValidateFormDataCanHandleCallbackValidationGroups()}
     * and {@link testValidateFormDataUsesInheritedCallbackValidationGroup()}.
     */
    public function getValidationGroups(FormInterface \$form)
    {
        return ['group1', 'group2'];
    }

    public function testCauseForNotAllowedExtraFieldsIsTheFormConstraint()
    {
        \$form = \$this
            ->getBuilder('form', null, ['constraints' => [new NotBlank(['groups' => ['foo']])]])
            ->setCompound(true)
            ->setDataMapper(new PropertyPathMapper())
            ->getForm();
        \$form->submit([
            'extra_data' => 'foo',
        ]);

        \$context = new ExecutionContext(Validation::createValidator(), \$form, new IdentityTranslator());
        \$constraint = new Form();

        \$this->validator->initialize(\$context);
        \$this->validator->validate(\$form, \$constraint);

        \$this->assertCount(1, \$context->getViolations());
        \$this->assertSame(\$constraint, \$context->getViolations()->get(0)->getConstraint());
    }

    public function testNonCompositeConstraintValidatedOnce()
    {
        \$form = \$this
            ->getBuilder('form', null, [
                'constraints' => [new NotBlank(['groups' => ['foo', 'bar']])],
                'validation_groups' => ['foo', 'bar'],
            ])
            ->setCompound(false)
            ->getForm();
        \$form->submit('');

        \$context = new ExecutionContext(Validation::createValidator(), \$form, new IdentityTranslator());
        \$this->validator->initialize(\$context);
        \$this->validator->validate(\$form, new Form());

        \$this->assertCount(1, \$context->getViolations());
        \$this->assertSame('This value should not be blank.', \$context->getViolations()[0]->getMessage());
        \$this->assertSame('data', \$context->getViolations()[0]->getPropertyPath());
    }

    public function testCompositeConstraintValidatedInEachGroup()
    {
        \$form = \$this->getBuilder('form', null, [
                'constraints' => [
                    new Collection([
                        'field1' => new NotBlank([
                            'groups' => ['field1'],
                        ]),
                        'field2' => new NotBlank([
                            'groups' => ['field2'],
                        ]),
                    ]),
                ],
                'validation_groups' => ['field1', 'field2'],
            ])
            ->setData([])
            ->setCompound(true)
            ->setDataMapper(new PropertyPathMapper())
            ->getForm();
        \$form->add(\$this->getForm('field1'));
        \$form->add(\$this->getForm('field2'));
        \$form->submit([
            'field1' => '',
            'field2' => '',
        ]);

        \$context = new ExecutionContext(Validation::createValidator(), \$form, new IdentityTranslator());
        \$this->validator->initialize(\$context);
        \$this->validator->validate(\$form, new Form());

        \$this->assertCount(2, \$context->getViolations());
        \$this->assertSame('This value should not be blank.', \$context->getViolations()[0]->getMessage());
        \$this->assertSame('data[field1]', \$context->getViolations()[0]->getPropertyPath());
        \$this->assertSame('This value should not be blank.', \$context->getViolations()[1]->getMessage());
        \$this->assertSame('data[field2]', \$context->getViolations()[1]->getPropertyPath());
    }

    protected function createValidator()
    {
        return new FormValidator();
    }

    private function getBuilder(string \$name = 'name', string \$dataClass = null, array \$options = []): FormBuilder
    {
        \$options = array_replace([
            'constraints' => [],
            'invalid_message_parameters' => [],
        ], \$options);

        return new FormBuilder(\$name, \$dataClass, \$this->dispatcher, \$this->factory, \$options);
    }

    private function getForm(\$name = 'name', \$dataClass = null, array \$options = [])
    {
        return \$this->getBuilder(\$name, \$dataClass, \$options)->getForm();
    }

    private function getCompoundForm(\$data, array \$options = [])
    {
        return \$this->getBuilder('name', \\get_class(\$data), \$options)
            ->setData(\$data)
            ->setCompound(true)
            ->setDataMapper(new PropertyPathMapper())
            ->getForm();
    }

    private function getSubmitButton(\$name = 'name', array \$options = [])
    {
        \$builder = new SubmitButtonBuilder(\$name, \$options);

        return \$builder->getForm();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/Extension/Validator/Constraints/FormValidatorTest.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  745 => 662,  721 => 641,  456 => 379,  452 => 378,  448 => 377,  429 => 361,  419 => 354,  402 => 340,  367 => 308,  363 => 307,  342 => 289,  323 => 273,  319 => 272,  299 => 255,  43 => 1,);
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

namespace Symfony\\Component\\Form\\Tests\\Extension\\Validator\\Constraints;

use Symfony\\Component\\EventDispatcher\\EventDispatcher;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Form\\CallbackTransformer;
use Symfony\\Component\\Form\\Exception\\TransformationFailedException;
use Symfony\\Component\\Form\\Extension\\Core\\DataMapper\\PropertyPathMapper;
use Symfony\\Component\\Form\\Extension\\Validator\\Constraints\\Form;
use Symfony\\Component\\Form\\Extension\\Validator\\Constraints\\FormValidator;
use Symfony\\Component\\Form\\FormBuilder;
use Symfony\\Component\\Form\\FormFactoryBuilder;
use Symfony\\Component\\Form\\FormFactoryInterface;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\SubmitButtonBuilder;
use Symfony\\Component\\Translation\\IdentityTranslator;
use Symfony\\Component\\Validator\\Constraints\\Collection;
use Symfony\\Component\\Validator\\Constraints\\GroupSequence;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;
use Symfony\\Component\\Validator\\Constraints\\NotNull;
use Symfony\\Component\\Validator\\Constraints\\Valid;
use Symfony\\Component\\Validator\\Context\\ExecutionContext;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;
use Symfony\\Component\\Validator\\Validation;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class FormValidatorTest extends ConstraintValidatorTestCase
{
    /**
     * @var EventDispatcherInterface
     */
    private \$dispatcher;

    /**
     * @var FormFactoryInterface
     */
    private \$factory;

    protected function setUp(): void
    {
        \$this->dispatcher = new EventDispatcher();
        \$this->factory = (new FormFactoryBuilder())->getFormFactory();

        parent::setUp();

        \$this->constraint = new Form();
    }

    public function testValidate()
    {
        \$object = new \\stdClass();
        \$options = ['validation_groups' => ['group1', 'group2']];
        \$form = \$this->getCompoundForm(\$object, \$options);
        \$form->submit([]);

        \$this->expectValidateAt(0, 'data', \$object, ['group1', 'group2']);

        \$this->validator->validate(\$form, new Form());

        \$this->assertNoViolation();
    }

    public function testValidateConstraints()
    {
        \$object = new \\stdClass();
        \$constraint1 = new NotNull(['groups' => ['group1', 'group2']]);
        \$constraint2 = new NotBlank(['groups' => 'group2']);

        \$options = [
            'validation_groups' => ['group1', 'group2'],
            'constraints' => [\$constraint1, \$constraint2],
        ];
        \$form = \$this->getCompoundForm(\$object, \$options);
        \$form->submit([]);

        // First default constraints
        \$this->expectValidateAt(0, 'data', \$object, ['group1', 'group2']);

        // Then custom constraints
        \$this->expectValidateValueAt(1, 'data', \$object, \$constraint1, 'group1');
        \$this->expectValidateValueAt(2, 'data', \$object, \$constraint2, 'group2');

        \$this->validator->validate(\$form, new Form());

        \$this->assertNoViolation();
    }

    public function testValidateChildIfValidConstraint()
    {
        \$object = new \\stdClass();

        \$parent = \$this->getBuilder('parent')
            ->setCompound(true)
            ->setDataMapper(new PropertyPathMapper())
            ->getForm();
        \$options = [
            'validation_groups' => ['group1', 'group2'],
            'constraints' => [new Valid()],
        ];
        \$form = \$this->getCompoundForm(\$object, \$options);
        \$parent->add(\$form);
        \$parent->submit([]);

        \$this->expectValidateAt(0, 'data', \$object, ['group1', 'group2']);

        \$this->validator->validate(\$form, new Form());

        \$this->assertNoViolation();
    }

    public function testDontValidateIfParentWithoutValidConstraint()
    {
        \$object = new \\stdClass();

        \$parent = \$this->getBuilder('parent', null)
            ->setCompound(true)
            ->setDataMapper(new PropertyPathMapper())
            ->getForm();
        \$options = ['validation_groups' => ['group1', 'group2']];
        \$form = \$this->getBuilder('name', '\\stdClass', \$options)->getForm();
        \$parent->add(\$form);

        \$form->setData(\$object);

        \$this->expectNoValidate();

        \$this->validator->validate(\$form, new Form());

        \$this->assertNoViolation();
    }

    public function testMissingConstraintIndex()
    {
        \$object = new \\stdClass();
        \$form = \$this->getCompoundForm(\$object);
        \$form->submit([]);

        \$this->expectValidateAt(0, 'data', \$object, ['Default']);

        \$this->validator->validate(\$form, new Form());

        \$this->assertNoViolation();
    }

    public function testValidateConstraintsOptionEvenIfNoValidConstraint()
    {
        \$object = new \\stdClass();
        \$constraint1 = new NotNull(['groups' => ['group1', 'group2']]);
        \$constraint2 = new NotBlank(['groups' => 'group2']);

        \$parent = \$this->getBuilder('parent', null)
            ->setCompound(true)
            ->setDataMapper(new PropertyPathMapper())
            ->getForm();
        \$options = [
            'validation_groups' => ['group1', 'group2'],
            'constraints' => [\$constraint1, \$constraint2],
        ];
        \$form = \$this->getCompoundForm(\$object, \$options);
        \$parent->add(\$form);
        \$parent->submit([]);

        \$this->expectValidateValueAt(0, 'data', \$object, \$constraint1, 'group1');
        \$this->expectValidateValueAt(1, 'data', \$object, \$constraint2, 'group2');

        \$this->validator->validate(\$form, new Form());

        \$this->assertNoViolation();
    }

    public function testDontValidateIfNoValidationGroups()
    {
        \$object = new \\stdClass();

        \$form = \$this->getBuilder('name', '\\stdClass', [
                'validation_groups' => [],
            ])
            ->setData(\$object)
            ->getForm();

        \$form->setData(\$object);

        \$this->expectNoValidate();

        \$this->validator->validate(\$form, new Form());

        \$this->assertNoViolation();
    }

    public function testDontValidateConstraintsIfNoValidationGroups()
    {
        \$object = new \\stdClass();

        \$options = [
            'validation_groups' => [],
            'constraints' => [new NotBlank(), new NotNull()],
        ];
        \$form = \$this->getBuilder('name', '\\stdClass', \$options)
            ->setData(\$object)
            ->getForm();

        // Launch transformer
        \$form->submit('foo');

        \$this->expectNoValidate();

        \$this->validator->validate(\$form, new Form());

        \$this->assertNoViolation();
    }

    public function testDontValidateChildConstraintsIfCallableNoValidationGroups()
    {
        \$formOptions = [
            'constraints' => [new Valid()],
            'validation_groups' => [],
        ];
        \$form = \$this->getBuilder('name', null, \$formOptions)
            ->setCompound(true)
            ->setDataMapper(new PropertyPathMapper())
            ->getForm();
        \$childOptions = ['constraints' => [new NotBlank()]];
        \$child = \$this->getCompoundForm(new \\stdClass(), \$childOptions);
        \$form->add(\$child);
        \$form->submit([]);

        \$this->expectNoValidate();

        \$this->validator->validate(\$form, new Form());

        \$this->assertNoViolation();
    }

    public function testDontValidateIfNotSynchronized()
    {
        \$object = new \\stdClass();

        \$form = \$this->getBuilder('name', '\\stdClass', [
                'invalid_message' => 'invalid_message_key',
                // Invalid message parameters must be supported, because the
                // invalid message can be a translation key
                // see https://github.com/symfony/symfony/issues/5144
                'invalid_message_parameters' => ['{{ foo }}' => 'bar'],
            ])
            ->setData(\$object)
            ->addViewTransformer(new CallbackTransformer(
                function (\$data) { return \$data; },
                function () { throw new TransformationFailedException(); }
            ))
            ->getForm();

        // Launch transformer
        \$form->submit('foo');

        \$this->expectNoValidate();

        \$this->validator->validate(\$form, new Form());

        \$this->buildViolation('invalid_message_key')
            ->setParameter('{{ value }}', 'foo')
            ->setParameter('{{ foo }}', 'bar')
            ->setInvalidValue('foo')
            ->setCode(Form::NOT_SYNCHRONIZED_ERROR)
            ->setCause(\$form->getTransformationFailure())
            ->assertRaised();
    }

    public function testAddInvalidErrorEvenIfNoValidationGroups()
    {
        \$object = new \\stdClass();

        \$form = \$this->getBuilder('name', '\\stdClass', [
                'invalid_message' => 'invalid_message_key',
                // Invalid message parameters must be supported, because the
                // invalid message can be a translation key
                // see https://github.com/symfony/symfony/issues/5144
                'invalid_message_parameters' => ['{{ foo }}' => 'bar'],
                'validation_groups' => [],
            ])
            ->setData(\$object)
            ->addViewTransformer(new CallbackTransformer(
                    function (\$data) { return \$data; },
                    function () { throw new TransformationFailedException(); }
                ))
            ->getForm();

        // Launch transformer
        \$form->submit('foo');

        \$this->expectNoValidate();

        \$this->validator->validate(\$form, new Form());

        \$this->buildViolation('invalid_message_key')
            ->setParameter('{{ value }}', 'foo')
            ->setParameter('{{ foo }}', 'bar')
            ->setInvalidValue('foo')
            ->setCode(Form::NOT_SYNCHRONIZED_ERROR)
            ->setCause(\$form->getTransformationFailure())
            ->assertRaised();
    }

    public function testDontValidateConstraintsIfNotSynchronized()
    {
        \$object = new \\stdClass();

        \$options = [
            'invalid_message' => 'invalid_message_key',
            'validation_groups' => ['group1', 'group2'],
            'constraints' => [new NotBlank(), new NotBlank()],
        ];
        \$form = \$this->getBuilder('name', '\\stdClass', \$options)
            ->setData(\$object)
            ->addViewTransformer(new CallbackTransformer(
                function (\$data) { return \$data; },
                function () { throw new TransformationFailedException(); }
            ))
            ->getForm();

        // Launch transformer
        \$form->submit('foo');

        \$this->expectNoValidate();

        \$this->validator->validate(\$form, new Form());

        \$this->buildViolation('invalid_message_key')
            ->setParameter('{{ value }}', 'foo')
            ->setInvalidValue('foo')
            ->setCode(Form::NOT_SYNCHRONIZED_ERROR)
            ->setCause(\$form->getTransformationFailure())
            ->assertRaised();
    }

    public function testTransformationFailedExceptionInvalidMessageIsUsed()
    {
        \$object = \$this->createMock('\\stdClass');

        \$form = \$this
            ->getBuilder('name', '\\stdClass', [
                'invalid_message' => 'invalid_message_key',
                'invalid_message_parameters' => ['{{ foo }}' => 'foo'],
            ])
            ->setData(\$object)
            ->addViewTransformer(new CallbackTransformer(
                function (\$data) { return \$data; },
                function () {
                    \$failure = new TransformationFailedException();
                    \$failure->setInvalidMessage('safe message to be used', ['{{ bar }}' => 'bar']);

                    throw \$failure;
                }
            ))
            ->getForm()
        ;

        \$form->submit('value');

        \$this->expectNoValidate();

        \$this->validator->validate(\$form, new Form());

        \$this->buildViolation('safe message to be used')
            ->setParameters([
                '{{ value }}' => 'value',
                '{{ foo }}' => 'foo',
                '{{ bar }}' => 'bar',
            ])
            ->setInvalidValue('value')
            ->setCode(Form::NOT_SYNCHRONIZED_ERROR)
            ->setCause(\$form->getTransformationFailure())
            ->assertRaised()
        ;
    }

    // https://github.com/symfony/symfony/issues/4359
    public function testDontMarkInvalidIfAnyChildIsNotSynchronized()
    {
        \$object = new \\stdClass();
        \$object->child = 'bar';

        \$failingTransformer = new CallbackTransformer(
            function (\$data) { return \$data; },
            function () { throw new TransformationFailedException(); }
        );

        \$form = \$this->getBuilder('name', '\\stdClass')
            ->setData(\$object)
            ->addViewTransformer(\$failingTransformer)
            ->setCompound(true)
            ->setDataMapper(new PropertyPathMapper())
            ->add(
                \$this->getBuilder('child')
                    ->addViewTransformer(\$failingTransformer)
            )
            ->getForm();

        // Launch transformer
        \$form->submit(['child' => 'foo']);

        \$this->expectNoValidate();

        \$this->validator->validate(\$form, new Form());

        \$this->assertNoViolation();
    }

    public function testHandleGroupSequenceValidationGroups()
    {
        \$object = new \\stdClass();
        \$options = ['validation_groups' => new GroupSequence(['group1', 'group2'])];
        \$form = \$this->getCompoundForm(\$object, \$options);
        \$form->submit([]);

        \$this->expectValidateAt(0, 'data', \$object, new GroupSequence(['group1', 'group2']));
        \$this->expectValidateAt(1, 'data', \$object, new GroupSequence(['group1', 'group2']));

        \$this->validator->validate(\$form, new Form());

        \$this->assertNoViolation();
    }

    public function testHandleCallbackValidationGroups()
    {
        \$object = new \\stdClass();
        \$options = ['validation_groups' => [\$this, 'getValidationGroups']];
        \$form = \$this->getCompoundForm(\$object, \$options);
        \$form->submit([]);

        \$this->expectValidateAt(0, 'data', \$object, ['group1', 'group2']);

        \$this->validator->validate(\$form, new Form());

        \$this->assertNoViolation();
    }

    public function testDontExecuteFunctionNames()
    {
        \$object = new \\stdClass();
        \$options = ['validation_groups' => 'header'];
        \$form = \$this->getCompoundForm(\$object, \$options);
        \$form->submit([]);

        \$this->expectValidateAt(0, 'data', \$object, ['header']);

        \$this->validator->validate(\$form, new Form());

        \$this->assertNoViolation();
    }

    public function testHandleClosureValidationGroups()
    {
        \$object = new \\stdClass();
        \$options = ['validation_groups' => function (FormInterface \$form) {
            return ['group1', 'group2'];
        }];
        \$form = \$this->getCompoundForm(\$object, \$options);
        \$form->submit([]);

        \$this->expectValidateAt(0, 'data', \$object, ['group1', 'group2']);

        \$this->validator->validate(\$form, new Form());

        \$this->assertNoViolation();
    }

    public function testUseValidationGroupOfClickedButton()
    {
        \$object = new \\stdClass();

        \$parent = \$this->getBuilder('parent')
            ->setCompound(true)
            ->setDataMapper(new PropertyPathMapper())
            ->getForm();
        \$form = \$this->getForm('name', '\\stdClass', [
            'validation_groups' => 'form_group',
            'constraints' => [new Valid()],
        ]);

        \$parent->add(\$form);
        \$parent->add(\$this->getSubmitButton('submit', [
            'validation_groups' => 'button_group',
        ]));

        \$parent->submit(['name' => \$object, 'submit' => '']);

        \$this->expectValidateAt(0, 'data', \$object, ['button_group']);

        \$this->validator->validate(\$form, new Form());

        \$this->assertNoViolation();
    }

    public function testDontUseValidationGroupOfUnclickedButton()
    {
        \$object = new \\stdClass();

        \$parent = \$this->getBuilder('parent')
            ->setCompound(true)
            ->setDataMapper(new PropertyPathMapper())
            ->getForm();
        \$form = \$this->getCompoundForm(\$object, [
            'validation_groups' => 'form_group',
            'constraints' => [new Valid()],
        ]);

        \$parent->add(\$form);
        \$parent->add(\$this->getSubmitButton('submit', [
            'validation_groups' => 'button_group',
        ]));

        \$parent->submit([]);

        \$this->expectValidateAt(0, 'data', \$object, ['form_group']);

        \$this->validator->validate(\$form, new Form());

        \$this->assertNoViolation();
    }

    public function testUseInheritedValidationGroup()
    {
        \$object = new \\stdClass();

        \$parentOptions = ['validation_groups' => 'group'];
        \$parent = \$this->getBuilder('parent', null, \$parentOptions)
            ->setCompound(true)
            ->setDataMapper(new PropertyPathMapper())
            ->getForm();
        \$formOptions = ['constraints' => [new Valid()]];
        \$form = \$this->getCompoundForm(\$object, \$formOptions);
        \$parent->add(\$form);
        \$parent->submit([]);

        \$this->expectValidateAt(0, 'data', \$object, ['group']);

        \$this->validator->validate(\$form, new Form());

        \$this->assertNoViolation();
    }

    public function testUseInheritedCallbackValidationGroup()
    {
        \$object = new \\stdClass();

        \$parentOptions = ['validation_groups' => [\$this, 'getValidationGroups']];
        \$parent = \$this->getBuilder('parent', null, \$parentOptions)
            ->setCompound(true)
            ->setDataMapper(new PropertyPathMapper())
            ->getForm();
        \$formOptions = ['constraints' => [new Valid()]];
        \$form = \$this->getCompoundForm(\$object, \$formOptions);
        \$parent->add(\$form);
        \$parent->submit([]);

        \$this->expectValidateAt(0, 'data', \$object, ['group1', 'group2']);

        \$this->validator->validate(\$form, new Form());

        \$this->assertNoViolation();
    }

    public function testUseInheritedClosureValidationGroup()
    {
        \$object = new \\stdClass();

        \$parentOptions = [
            'validation_groups' => function () {
                return ['group1', 'group2'];
            },
        ];
        \$parent = \$this->getBuilder('parent', null, \$parentOptions)
            ->setCompound(true)
            ->setDataMapper(new PropertyPathMapper())
            ->getForm();
        \$formOptions = ['constraints' => [new Valid()]];
        \$form = \$this->getCompoundForm(\$object, \$formOptions);
        \$parent->add(\$form);
        \$parent->submit([]);

        \$this->expectValidateAt(0, 'data', \$object, ['group1', 'group2']);

        \$this->validator->validate(\$form, new Form());

        \$this->assertNoViolation();
    }

    public function testAppendPropertyPath()
    {
        \$object = new \\stdClass();
        \$form = \$this->getCompoundForm(\$object);
        \$form->submit([]);

        \$this->expectValidateAt(0, 'data', \$object, ['Default']);

        \$this->validator->validate(\$form, new Form());

        \$this->assertNoViolation();
    }

    public function testDontWalkScalars()
    {
        \$form = \$this->getBuilder()
            ->setData('scalar')
            ->getForm();

        \$this->expectNoValidate();

        \$this->validator->validate(\$form, new Form());

        \$this->assertNoViolation();
    }

    public function testViolationIfExtraData()
    {
        \$form = \$this->getBuilder('parent', null, ['extra_fields_message' => 'Extra!'])
            ->setCompound(true)
            ->setDataMapper(new PropertyPathMapper())
            ->add(\$this->getBuilder('child'))
            ->getForm();

        \$form->submit(['foo' => 'bar']);

        \$this->expectNoValidate();

        \$this->validator->validate(\$form, new Form());

        \$this->buildViolation('Extra!')
            ->setParameter('{{ extra_fields }}', '\"foo\"')
            ->setInvalidValue(['foo' => 'bar'])
            ->setCode(Form::NO_SUCH_FIELD_ERROR)
            ->assertRaised();
    }

    public function testViolationFormatIfMultipleExtraFields()
    {
        \$form = \$this->getBuilder('parent', null, ['extra_fields_message' => 'Extra!'])
            ->setCompound(true)
            ->setDataMapper(new PropertyPathMapper())
            ->add(\$this->getBuilder('child'))
            ->getForm();

        \$form->submit(['foo' => 'bar', 'baz' => 'qux', 'quux' => 'quuz']);

        \$this->expectNoValidate();

        \$this->validator->validate(\$form, new Form());

        \$this->buildViolation('Extra!')
            ->setParameter('{{ extra_fields }}', '\"foo\", \"baz\", \"quux\"')
            ->setInvalidValue(['foo' => 'bar', 'baz' => 'qux', 'quux' => 'quuz'])
            ->setCode(Form::NO_SUCH_FIELD_ERROR)
            ->assertRaised();
    }

    public function testNoViolationIfAllowExtraData()
    {
        \$form = \$this
            ->getBuilder('parent', null, ['allow_extra_fields' => true])
            ->setCompound(true)
            ->setDataMapper(new PropertyPathMapper())
            ->add(\$this->getBuilder('child'))
            ->getForm();

        \$context = new ExecutionContext(Validation::createValidator(), \$form, new IdentityTranslator());

        \$form->submit(['foo' => 'bar']);

        \$this->validator->initialize(\$context);
        \$this->validator->validate(\$form, new Form());

        \$this->assertCount(0, \$context->getViolations());
    }

    /**
     * Access has to be public, as this method is called via callback array
     * in {@link testValidateFormDataCanHandleCallbackValidationGroups()}
     * and {@link testValidateFormDataUsesInheritedCallbackValidationGroup()}.
     */
    public function getValidationGroups(FormInterface \$form)
    {
        return ['group1', 'group2'];
    }

    public function testCauseForNotAllowedExtraFieldsIsTheFormConstraint()
    {
        \$form = \$this
            ->getBuilder('form', null, ['constraints' => [new NotBlank(['groups' => ['foo']])]])
            ->setCompound(true)
            ->setDataMapper(new PropertyPathMapper())
            ->getForm();
        \$form->submit([
            'extra_data' => 'foo',
        ]);

        \$context = new ExecutionContext(Validation::createValidator(), \$form, new IdentityTranslator());
        \$constraint = new Form();

        \$this->validator->initialize(\$context);
        \$this->validator->validate(\$form, \$constraint);

        \$this->assertCount(1, \$context->getViolations());
        \$this->assertSame(\$constraint, \$context->getViolations()->get(0)->getConstraint());
    }

    public function testNonCompositeConstraintValidatedOnce()
    {
        \$form = \$this
            ->getBuilder('form', null, [
                'constraints' => [new NotBlank(['groups' => ['foo', 'bar']])],
                'validation_groups' => ['foo', 'bar'],
            ])
            ->setCompound(false)
            ->getForm();
        \$form->submit('');

        \$context = new ExecutionContext(Validation::createValidator(), \$form, new IdentityTranslator());
        \$this->validator->initialize(\$context);
        \$this->validator->validate(\$form, new Form());

        \$this->assertCount(1, \$context->getViolations());
        \$this->assertSame('This value should not be blank.', \$context->getViolations()[0]->getMessage());
        \$this->assertSame('data', \$context->getViolations()[0]->getPropertyPath());
    }

    public function testCompositeConstraintValidatedInEachGroup()
    {
        \$form = \$this->getBuilder('form', null, [
                'constraints' => [
                    new Collection([
                        'field1' => new NotBlank([
                            'groups' => ['field1'],
                        ]),
                        'field2' => new NotBlank([
                            'groups' => ['field2'],
                        ]),
                    ]),
                ],
                'validation_groups' => ['field1', 'field2'],
            ])
            ->setData([])
            ->setCompound(true)
            ->setDataMapper(new PropertyPathMapper())
            ->getForm();
        \$form->add(\$this->getForm('field1'));
        \$form->add(\$this->getForm('field2'));
        \$form->submit([
            'field1' => '',
            'field2' => '',
        ]);

        \$context = new ExecutionContext(Validation::createValidator(), \$form, new IdentityTranslator());
        \$this->validator->initialize(\$context);
        \$this->validator->validate(\$form, new Form());

        \$this->assertCount(2, \$context->getViolations());
        \$this->assertSame('This value should not be blank.', \$context->getViolations()[0]->getMessage());
        \$this->assertSame('data[field1]', \$context->getViolations()[0]->getPropertyPath());
        \$this->assertSame('This value should not be blank.', \$context->getViolations()[1]->getMessage());
        \$this->assertSame('data[field2]', \$context->getViolations()[1]->getPropertyPath());
    }

    protected function createValidator()
    {
        return new FormValidator();
    }

    private function getBuilder(string \$name = 'name', string \$dataClass = null, array \$options = []): FormBuilder
    {
        \$options = array_replace([
            'constraints' => [],
            'invalid_message_parameters' => [],
        ], \$options);

        return new FormBuilder(\$name, \$dataClass, \$this->dispatcher, \$this->factory, \$options);
    }

    private function getForm(\$name = 'name', \$dataClass = null, array \$options = [])
    {
        return \$this->getBuilder(\$name, \$dataClass, \$options)->getForm();
    }

    private function getCompoundForm(\$data, array \$options = [])
    {
        return \$this->getBuilder('name', \\get_class(\$data), \$options)
            ->setData(\$data)
            ->setCompound(true)
            ->setDataMapper(new PropertyPathMapper())
            ->getForm();
    }

    private function getSubmitButton(\$name = 'name', array \$options = [])
    {
        \$builder = new SubmitButtonBuilder(\$name, \$options);

        return \$builder->getForm();
    }
}
", "vendor/symfony/form/Tests/Extension/Validator/Constraints/FormValidatorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/Extension/Validator/Constraints/FormValidatorTest.php");
    }
}
