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

/* vendor/symfony/validator/Violation/ConstraintViolationBuilder.php */
class __TwigTemplate_1f6128606814255e76ed5ab2356258c1bf1d7aa9e0550fd5fccc7efed6dd6c55 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Violation/ConstraintViolationBuilder.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Violation/ConstraintViolationBuilder.php"));

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

namespace Symfony\\Component\\Validator\\Violation;

use Symfony\\Component\\Translation\\TranslatorInterface as LegacyTranslatorInterface;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\ConstraintViolation;
use Symfony\\Component\\Validator\\ConstraintViolationList;
use Symfony\\Component\\Validator\\Util\\PropertyPath;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

/**
 * Default implementation of {@link ConstraintViolationBuilderInterface}.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @internal since version 2.5. Code against ConstraintViolationBuilderInterface instead.
 */
class ConstraintViolationBuilder implements ConstraintViolationBuilderInterface
{
    private \$violations;
    private \$message;
    private \$parameters;
    private \$root;
    private \$invalidValue;
    private \$propertyPath;
    private \$translator;
    private \$translationDomain;
    private \$plural;
    private \$constraint;
    private \$code;

    /**
     * @var mixed
     */
    private \$cause;

    /**
     * @param TranslatorInterface \$translator
     */
    public function __construct(ConstraintViolationList \$violations, Constraint \$constraint, \$message, array \$parameters, \$root, \$propertyPath, \$invalidValue, \$translator, \$translationDomain = null)
    {
        if (!\$translator instanceof LegacyTranslatorInterface && !\$translator instanceof TranslatorInterface) {
            throw new \\TypeError(sprintf('Argument 8 passed to %s() must be an instance of %s, %s given.', __METHOD__, TranslatorInterface::class, \\is_object(\$translator) ? \\get_class(\$translator) : \\gettype(\$translator)));
        }
        \$this->violations = \$violations;
        \$this->message = \$message;
        \$this->parameters = \$parameters;
        \$this->root = \$root;
        \$this->propertyPath = \$propertyPath;
        \$this->invalidValue = \$invalidValue;
        \$this->translator = \$translator;
        \$this->translationDomain = \$translationDomain;
        \$this->constraint = \$constraint;
    }

    /**
     * {@inheritdoc}
     */
    public function atPath(\$path)
    {
        \$this->propertyPath = PropertyPath::append(\$this->propertyPath, \$path);

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function setParameter(\$key, \$value)
    {
        \$this->parameters[\$key] = \$value;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function setParameters(array \$parameters)
    {
        \$this->parameters = \$parameters;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function setTranslationDomain(\$translationDomain)
    {
        \$this->translationDomain = \$translationDomain;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function setInvalidValue(\$invalidValue)
    {
        \$this->invalidValue = \$invalidValue;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function setPlural(\$number)
    {
        \$this->plural = \$number;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function setCode(\$code)
    {
        \$this->code = \$code;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function setCause(\$cause)
    {
        \$this->cause = \$cause;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function addViolation()
    {
        if (null === \$this->plural) {
            \$translatedMessage = \$this->translator->trans(
                \$this->message,
                \$this->parameters,
                \$this->translationDomain
            );
        } elseif (\$this->translator instanceof TranslatorInterface) {
            \$translatedMessage = \$this->translator->trans(
                \$this->message,
                ['%count%' => \$this->plural] + \$this->parameters,
                \$this->translationDomain
            );
        } else {
            try {
                \$translatedMessage = \$this->translator->transChoice(
                    \$this->message,
                    \$this->plural,
                    \$this->parameters,
                    \$this->translationDomain
                );
            } catch (\\InvalidArgumentException \$e) {
                \$translatedMessage = \$this->translator->trans(
                    \$this->message,
                    \$this->parameters,
                    \$this->translationDomain
                );
            }
        }

        \$this->violations->add(new ConstraintViolation(
            \$translatedMessage,
            \$this->message,
            \$this->parameters,
            \$this->root,
            \$this->propertyPath,
            \$this->invalidValue,
            \$this->plural,
            \$this->code,
            \$this->constraint,
            \$this->cause
        ));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Violation/ConstraintViolationBuilder.php";
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

namespace Symfony\\Component\\Validator\\Violation;

use Symfony\\Component\\Translation\\TranslatorInterface as LegacyTranslatorInterface;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\ConstraintViolation;
use Symfony\\Component\\Validator\\ConstraintViolationList;
use Symfony\\Component\\Validator\\Util\\PropertyPath;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

/**
 * Default implementation of {@link ConstraintViolationBuilderInterface}.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @internal since version 2.5. Code against ConstraintViolationBuilderInterface instead.
 */
class ConstraintViolationBuilder implements ConstraintViolationBuilderInterface
{
    private \$violations;
    private \$message;
    private \$parameters;
    private \$root;
    private \$invalidValue;
    private \$propertyPath;
    private \$translator;
    private \$translationDomain;
    private \$plural;
    private \$constraint;
    private \$code;

    /**
     * @var mixed
     */
    private \$cause;

    /**
     * @param TranslatorInterface \$translator
     */
    public function __construct(ConstraintViolationList \$violations, Constraint \$constraint, \$message, array \$parameters, \$root, \$propertyPath, \$invalidValue, \$translator, \$translationDomain = null)
    {
        if (!\$translator instanceof LegacyTranslatorInterface && !\$translator instanceof TranslatorInterface) {
            throw new \\TypeError(sprintf('Argument 8 passed to %s() must be an instance of %s, %s given.', __METHOD__, TranslatorInterface::class, \\is_object(\$translator) ? \\get_class(\$translator) : \\gettype(\$translator)));
        }
        \$this->violations = \$violations;
        \$this->message = \$message;
        \$this->parameters = \$parameters;
        \$this->root = \$root;
        \$this->propertyPath = \$propertyPath;
        \$this->invalidValue = \$invalidValue;
        \$this->translator = \$translator;
        \$this->translationDomain = \$translationDomain;
        \$this->constraint = \$constraint;
    }

    /**
     * {@inheritdoc}
     */
    public function atPath(\$path)
    {
        \$this->propertyPath = PropertyPath::append(\$this->propertyPath, \$path);

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function setParameter(\$key, \$value)
    {
        \$this->parameters[\$key] = \$value;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function setParameters(array \$parameters)
    {
        \$this->parameters = \$parameters;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function setTranslationDomain(\$translationDomain)
    {
        \$this->translationDomain = \$translationDomain;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function setInvalidValue(\$invalidValue)
    {
        \$this->invalidValue = \$invalidValue;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function setPlural(\$number)
    {
        \$this->plural = \$number;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function setCode(\$code)
    {
        \$this->code = \$code;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function setCause(\$cause)
    {
        \$this->cause = \$cause;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function addViolation()
    {
        if (null === \$this->plural) {
            \$translatedMessage = \$this->translator->trans(
                \$this->message,
                \$this->parameters,
                \$this->translationDomain
            );
        } elseif (\$this->translator instanceof TranslatorInterface) {
            \$translatedMessage = \$this->translator->trans(
                \$this->message,
                ['%count%' => \$this->plural] + \$this->parameters,
                \$this->translationDomain
            );
        } else {
            try {
                \$translatedMessage = \$this->translator->transChoice(
                    \$this->message,
                    \$this->plural,
                    \$this->parameters,
                    \$this->translationDomain
                );
            } catch (\\InvalidArgumentException \$e) {
                \$translatedMessage = \$this->translator->trans(
                    \$this->message,
                    \$this->parameters,
                    \$this->translationDomain
                );
            }
        }

        \$this->violations->add(new ConstraintViolation(
            \$translatedMessage,
            \$this->message,
            \$this->parameters,
            \$this->root,
            \$this->propertyPath,
            \$this->invalidValue,
            \$this->plural,
            \$this->code,
            \$this->constraint,
            \$this->cause
        ));
    }
}
", "vendor/symfony/validator/Violation/ConstraintViolationBuilder.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Violation/ConstraintViolationBuilder.php");
    }
}
