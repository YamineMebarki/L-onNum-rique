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

/* vendor/symfony/form/Extension/Validator/Constraints/FormValidator.php */
class __TwigTemplate_f5123845f674b4e726387f45db78d353f0fe412b6e5bd18b37a9a77656d2f6db extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Validator/Constraints/FormValidator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Validator/Constraints/FormValidator.php"));

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

namespace Symfony\\Component\\Form\\Extension\\Validator\\Constraints;

use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\Constraints\\Composite;
use Symfony\\Component\\Validator\\Constraints\\GroupSequence;
use Symfony\\Component\\Validator\\Constraints\\Valid;
use Symfony\\Component\\Validator\\ConstraintValidator;
use Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class FormValidator extends ConstraintValidator
{
    /**
     * {@inheritdoc}
     */
    public function validate(\$form, Constraint \$formConstraint)
    {
        if (!\$formConstraint instanceof Form) {
            throw new UnexpectedTypeException(\$formConstraint, __NAMESPACE__.'\\Form');
        }

        if (!\$form instanceof FormInterface) {
            return;
        }

        /* @var FormInterface \$form */
        \$config = \$form->getConfig();

        \$validator = \$this->context->getValidator()->inContext(\$this->context);

        if (\$form->isSubmitted() && \$form->isSynchronized()) {
            // Validate the form data only if transformation succeeded
            \$groups = self::getValidationGroups(\$form);

            if (!\$groups) {
                return;
            }

            \$data = \$form->getData();

            // Validate the data against its own constraints
            if (\$form->isRoot() && (\\is_object(\$data) || \\is_array(\$data))) {
                if ((\$groups && \\is_array(\$groups)) || (\$groups instanceof GroupSequence && \$groups->groups)) {
                    \$validator->atPath('data')->validate(\$form->getData(), null, \$groups);
                }
            }

            // Validate the data against the constraints defined
            // in the form
            \$constraints = \$config->getOption('constraints', []);

            if (\$groups instanceof GroupSequence) {
                \$validator->atPath('data')->validate(\$form->getData(), \$constraints, \$groups);
                // Otherwise validate a constraint only once for the first
                // matching group
                foreach (\$groups as \$group) {
                    if (\\in_array(\$group, \$formConstraint->groups)) {
                        \$validator->atPath('data')->validate(\$form->getData(), \$formConstraint, \$group);
                        if (\\count(\$this->context->getViolations()) > 0) {
                            break;
                        }
                    }
                }
            } else {
                foreach (\$constraints as \$constraint) {
                    // For the \"Valid\" constraint, validate the data in all groups
                    if (\$constraint instanceof Valid) {
                        \$validator->atPath('data')->validate(\$form->getData(), \$constraint, \$groups);

                        continue;
                    }

                    // Otherwise validate a constraint only once for the first
                    // matching group
                    foreach (\$groups as \$group) {
                        if (\\in_array(\$group, \$constraint->groups)) {
                            \$validator->atPath('data')->validate(\$form->getData(), \$constraint, \$group);

                            // Prevent duplicate validation
                            if (!\$constraint instanceof Composite) {
                                continue 2;
                            }
                        }
                    }
                }
            }
        } elseif (!\$form->isSynchronized()) {
            \$childrenSynchronized = true;

            /** @var FormInterface \$child */
            foreach (\$form as \$child) {
                if (!\$child->isSynchronized()) {
                    \$childrenSynchronized = false;
                    break;
                }
            }

            // Mark the form with an error if it is not synchronized BUT all
            // of its children are synchronized. If any child is not
            // synchronized, an error is displayed there already and showing
            // a second error in its parent form is pointless, or worse, may
            // lead to duplicate errors if error bubbling is enabled on the
            // child.
            // See also https://github.com/symfony/symfony/issues/4359
            if (\$childrenSynchronized) {
                \$clientDataAsString = is_scalar(\$form->getViewData())
                    ? (string) \$form->getViewData()
                    : \\gettype(\$form->getViewData());

                \$failure = \$form->getTransformationFailure();

                \$this->context->setConstraint(\$formConstraint);
                \$this->context->buildViolation(\$failure->getInvalidMessage() ?? \$config->getOption('invalid_message'))
                    ->setParameters(array_replace(
                        ['";
        // line 129
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 129, $this->source); })()), "html", null, true);
        echo "' => \$clientDataAsString],
                        \$config->getOption('invalid_message_parameters'),
                        \$failure->getInvalidMessageParameters()
                    ))
                    ->setInvalidValue(\$form->getViewData())
                    ->setCode(Form::NOT_SYNCHRONIZED_ERROR)
                    ->setCause(\$failure)
                    ->addViolation();
            }
        }

        // Mark the form with an error if it contains extra fields
        if (!\$config->getOption('allow_extra_fields') && \\count(\$form->getExtraData()) > 0) {
            \$this->context->setConstraint(\$formConstraint);
            \$this->context->buildViolation(\$config->getOption('extra_fields_message'))
                ->setParameter('";
        // line 144
        echo twig_escape_filter($this->env, (isset($context["extra_fields"]) || array_key_exists("extra_fields", $context) ? $context["extra_fields"] : (function () { throw new RuntimeError('Variable "extra_fields" does not exist.', 144, $this->source); })()), "html", null, true);
        echo "', '\"'.implode('\", \"', array_keys(\$form->getExtraData())).'\"')
                ->setInvalidValue(\$form->getExtraData())
                ->setCode(Form::NO_SUCH_FIELD_ERROR)
                ->addViolation();
        }
    }

    /**
     * Returns the validation groups of the given form.
     *
     * @return string|GroupSequence|(string|GroupSequence)[] The validation groups
     */
    private static function getValidationGroups(FormInterface \$form)
    {
        // Determine the clicked button of the complete form tree
        \$clickedButton = null;

        if (method_exists(\$form, 'getClickedButton')) {
            \$clickedButton = \$form->getClickedButton();
        }

        if (null !== \$clickedButton) {
            \$groups = \$clickedButton->getConfig()->getOption('validation_groups');

            if (null !== \$groups) {
                return self::resolveValidationGroups(\$groups, \$form);
            }
        }

        do {
            \$groups = \$form->getConfig()->getOption('validation_groups');

            if (null !== \$groups) {
                return self::resolveValidationGroups(\$groups, \$form);
            }

            \$form = \$form->getParent();
        } while (null !== \$form);

        return [Constraint::DEFAULT_GROUP];
    }

    /**
     * Post-processes the validation groups option for a given form.
     *
     * @param string|GroupSequence|(string|GroupSequence)[]|callable \$groups The validation groups
     * @param FormInterface                                          \$form   The validated form
     *
     * @return (string|GroupSequence)[] The validation groups
     */
    private static function resolveValidationGroups(\$groups, FormInterface \$form)
    {
        if (!\\is_string(\$groups) && \\is_callable(\$groups)) {
            \$groups = \$groups(\$form);
        }

        if (\$groups instanceof GroupSequence) {
            return \$groups;
        }

        return (array) \$groups;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Extension/Validator/Constraints/FormValidator.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 144,  173 => 129,  43 => 1,);
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

namespace Symfony\\Component\\Form\\Extension\\Validator\\Constraints;

use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\Constraints\\Composite;
use Symfony\\Component\\Validator\\Constraints\\GroupSequence;
use Symfony\\Component\\Validator\\Constraints\\Valid;
use Symfony\\Component\\Validator\\ConstraintValidator;
use Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class FormValidator extends ConstraintValidator
{
    /**
     * {@inheritdoc}
     */
    public function validate(\$form, Constraint \$formConstraint)
    {
        if (!\$formConstraint instanceof Form) {
            throw new UnexpectedTypeException(\$formConstraint, __NAMESPACE__.'\\Form');
        }

        if (!\$form instanceof FormInterface) {
            return;
        }

        /* @var FormInterface \$form */
        \$config = \$form->getConfig();

        \$validator = \$this->context->getValidator()->inContext(\$this->context);

        if (\$form->isSubmitted() && \$form->isSynchronized()) {
            // Validate the form data only if transformation succeeded
            \$groups = self::getValidationGroups(\$form);

            if (!\$groups) {
                return;
            }

            \$data = \$form->getData();

            // Validate the data against its own constraints
            if (\$form->isRoot() && (\\is_object(\$data) || \\is_array(\$data))) {
                if ((\$groups && \\is_array(\$groups)) || (\$groups instanceof GroupSequence && \$groups->groups)) {
                    \$validator->atPath('data')->validate(\$form->getData(), null, \$groups);
                }
            }

            // Validate the data against the constraints defined
            // in the form
            \$constraints = \$config->getOption('constraints', []);

            if (\$groups instanceof GroupSequence) {
                \$validator->atPath('data')->validate(\$form->getData(), \$constraints, \$groups);
                // Otherwise validate a constraint only once for the first
                // matching group
                foreach (\$groups as \$group) {
                    if (\\in_array(\$group, \$formConstraint->groups)) {
                        \$validator->atPath('data')->validate(\$form->getData(), \$formConstraint, \$group);
                        if (\\count(\$this->context->getViolations()) > 0) {
                            break;
                        }
                    }
                }
            } else {
                foreach (\$constraints as \$constraint) {
                    // For the \"Valid\" constraint, validate the data in all groups
                    if (\$constraint instanceof Valid) {
                        \$validator->atPath('data')->validate(\$form->getData(), \$constraint, \$groups);

                        continue;
                    }

                    // Otherwise validate a constraint only once for the first
                    // matching group
                    foreach (\$groups as \$group) {
                        if (\\in_array(\$group, \$constraint->groups)) {
                            \$validator->atPath('data')->validate(\$form->getData(), \$constraint, \$group);

                            // Prevent duplicate validation
                            if (!\$constraint instanceof Composite) {
                                continue 2;
                            }
                        }
                    }
                }
            }
        } elseif (!\$form->isSynchronized()) {
            \$childrenSynchronized = true;

            /** @var FormInterface \$child */
            foreach (\$form as \$child) {
                if (!\$child->isSynchronized()) {
                    \$childrenSynchronized = false;
                    break;
                }
            }

            // Mark the form with an error if it is not synchronized BUT all
            // of its children are synchronized. If any child is not
            // synchronized, an error is displayed there already and showing
            // a second error in its parent form is pointless, or worse, may
            // lead to duplicate errors if error bubbling is enabled on the
            // child.
            // See also https://github.com/symfony/symfony/issues/4359
            if (\$childrenSynchronized) {
                \$clientDataAsString = is_scalar(\$form->getViewData())
                    ? (string) \$form->getViewData()
                    : \\gettype(\$form->getViewData());

                \$failure = \$form->getTransformationFailure();

                \$this->context->setConstraint(\$formConstraint);
                \$this->context->buildViolation(\$failure->getInvalidMessage() ?? \$config->getOption('invalid_message'))
                    ->setParameters(array_replace(
                        ['{{ value }}' => \$clientDataAsString],
                        \$config->getOption('invalid_message_parameters'),
                        \$failure->getInvalidMessageParameters()
                    ))
                    ->setInvalidValue(\$form->getViewData())
                    ->setCode(Form::NOT_SYNCHRONIZED_ERROR)
                    ->setCause(\$failure)
                    ->addViolation();
            }
        }

        // Mark the form with an error if it contains extra fields
        if (!\$config->getOption('allow_extra_fields') && \\count(\$form->getExtraData()) > 0) {
            \$this->context->setConstraint(\$formConstraint);
            \$this->context->buildViolation(\$config->getOption('extra_fields_message'))
                ->setParameter('{{ extra_fields }}', '\"'.implode('\", \"', array_keys(\$form->getExtraData())).'\"')
                ->setInvalidValue(\$form->getExtraData())
                ->setCode(Form::NO_SUCH_FIELD_ERROR)
                ->addViolation();
        }
    }

    /**
     * Returns the validation groups of the given form.
     *
     * @return string|GroupSequence|(string|GroupSequence)[] The validation groups
     */
    private static function getValidationGroups(FormInterface \$form)
    {
        // Determine the clicked button of the complete form tree
        \$clickedButton = null;

        if (method_exists(\$form, 'getClickedButton')) {
            \$clickedButton = \$form->getClickedButton();
        }

        if (null !== \$clickedButton) {
            \$groups = \$clickedButton->getConfig()->getOption('validation_groups');

            if (null !== \$groups) {
                return self::resolveValidationGroups(\$groups, \$form);
            }
        }

        do {
            \$groups = \$form->getConfig()->getOption('validation_groups');

            if (null !== \$groups) {
                return self::resolveValidationGroups(\$groups, \$form);
            }

            \$form = \$form->getParent();
        } while (null !== \$form);

        return [Constraint::DEFAULT_GROUP];
    }

    /**
     * Post-processes the validation groups option for a given form.
     *
     * @param string|GroupSequence|(string|GroupSequence)[]|callable \$groups The validation groups
     * @param FormInterface                                          \$form   The validated form
     *
     * @return (string|GroupSequence)[] The validation groups
     */
    private static function resolveValidationGroups(\$groups, FormInterface \$form)
    {
        if (!\\is_string(\$groups) && \\is_callable(\$groups)) {
            \$groups = \$groups(\$form);
        }

        if (\$groups instanceof GroupSequence) {
            return \$groups;
        }

        return (array) \$groups;
    }
}
", "vendor/symfony/form/Extension/Validator/Constraints/FormValidator.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Extension/Validator/Constraints/FormValidator.php");
    }
}
