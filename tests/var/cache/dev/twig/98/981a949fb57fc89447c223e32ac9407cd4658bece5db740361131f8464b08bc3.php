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

/* vendor/symfony/form/Extension/Validator/EventListener/ValidationListener.php */
class __TwigTemplate_5adc85255a40de02f957b55f0696f2c15f2bad3c3b6a9796d91b9337fc369c61 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Validator/EventListener/ValidationListener.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Validator/EventListener/ValidationListener.php"));

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

namespace Symfony\\Component\\Form\\Extension\\Validator\\EventListener;

use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Form\\Extension\\Validator\\Constraints\\Form;
use Symfony\\Component\\Form\\Extension\\Validator\\ViolationMapper\\ViolationMapperInterface;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;
use Symfony\\Component\\Validator\\Validator\\ValidatorInterface;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class ValidationListener implements EventSubscriberInterface
{
    private \$validator;

    private \$violationMapper;

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [FormEvents::POST_SUBMIT => 'validateForm'];
    }

    public function __construct(ValidatorInterface \$validator, ViolationMapperInterface \$violationMapper)
    {
        \$this->validator = \$validator;
        \$this->violationMapper = \$violationMapper;
    }

    /**
     * Validates the form and its domain object.
     *
     * @param FormEvent \$event The event object
     */
    public function validateForm(FormEvent \$event)
    {
        \$form = \$event->getForm();

        if (\$form->isRoot()) {
            // Form groups are validated internally (FormValidator). Here we don't set groups as they are retrieved into the validator.
            foreach (\$this->validator->validate(\$form) as \$violation) {
                // Allow the \"invalid\" constraint to be put onto
                // non-synchronized forms
                // ConstraintViolation::getConstraint() must not expect to provide a constraint as long as Symfony\\Component\\Validator\\ExecutionContext exists (before 3.0)
                \$allowNonSynchronized = (null === \$violation->getConstraint() || \$violation->getConstraint() instanceof Form) && Form::NOT_SYNCHRONIZED_ERROR === \$violation->getCode();

                \$this->violationMapper->mapViolation(\$violation, \$form, \$allowNonSynchronized);
            }
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Extension/Validator/EventListener/ValidationListener.php";
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

namespace Symfony\\Component\\Form\\Extension\\Validator\\EventListener;

use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Form\\Extension\\Validator\\Constraints\\Form;
use Symfony\\Component\\Form\\Extension\\Validator\\ViolationMapper\\ViolationMapperInterface;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;
use Symfony\\Component\\Validator\\Validator\\ValidatorInterface;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class ValidationListener implements EventSubscriberInterface
{
    private \$validator;

    private \$violationMapper;

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [FormEvents::POST_SUBMIT => 'validateForm'];
    }

    public function __construct(ValidatorInterface \$validator, ViolationMapperInterface \$violationMapper)
    {
        \$this->validator = \$validator;
        \$this->violationMapper = \$violationMapper;
    }

    /**
     * Validates the form and its domain object.
     *
     * @param FormEvent \$event The event object
     */
    public function validateForm(FormEvent \$event)
    {
        \$form = \$event->getForm();

        if (\$form->isRoot()) {
            // Form groups are validated internally (FormValidator). Here we don't set groups as they are retrieved into the validator.
            foreach (\$this->validator->validate(\$form) as \$violation) {
                // Allow the \"invalid\" constraint to be put onto
                // non-synchronized forms
                // ConstraintViolation::getConstraint() must not expect to provide a constraint as long as Symfony\\Component\\Validator\\ExecutionContext exists (before 3.0)
                \$allowNonSynchronized = (null === \$violation->getConstraint() || \$violation->getConstraint() instanceof Form) && Form::NOT_SYNCHRONIZED_ERROR === \$violation->getCode();

                \$this->violationMapper->mapViolation(\$violation, \$form, \$allowNonSynchronized);
            }
        }
    }
}
", "vendor/symfony/form/Extension/Validator/EventListener/ValidationListener.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Extension/Validator/EventListener/ValidationListener.php");
    }
}
