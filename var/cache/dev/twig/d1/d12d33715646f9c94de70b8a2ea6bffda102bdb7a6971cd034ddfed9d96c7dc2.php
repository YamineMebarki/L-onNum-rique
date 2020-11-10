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

/* vendor/symfony/validator/Validator/RecursiveValidator.php */
class __TwigTemplate_665b81428431a3fdebc1be08b3ec7b2ae2a4124d13d08223762727605a45aecc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Validator/RecursiveValidator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Validator/RecursiveValidator.php"));

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

namespace Symfony\\Component\\Validator\\Validator;

use Symfony\\Component\\Validator\\ConstraintValidatorFactoryInterface;
use Symfony\\Component\\Validator\\Context\\ExecutionContextFactoryInterface;
use Symfony\\Component\\Validator\\Context\\ExecutionContextInterface;
use Symfony\\Component\\Validator\\Mapping\\Factory\\MetadataFactoryInterface;
use Symfony\\Component\\Validator\\ObjectInitializerInterface;

/**
 * Recursive implementation of {@link ValidatorInterface}.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class RecursiveValidator implements ValidatorInterface
{
    protected \$contextFactory;
    protected \$metadataFactory;
    protected \$validatorFactory;
    protected \$objectInitializers;

    /**
     * Creates a new validator.
     *
     * @param ExecutionContextFactoryInterface    \$contextFactory     The factory for
     *                                                                creating new contexts
     * @param MetadataFactoryInterface            \$metadataFactory    The factory for
     *                                                                fetching the metadata
     *                                                                of validated objects
     * @param ConstraintValidatorFactoryInterface \$validatorFactory   The factory for creating
     *                                                                constraint validators
     * @param ObjectInitializerInterface[]        \$objectInitializers The object initializers
     */
    public function __construct(ExecutionContextFactoryInterface \$contextFactory, MetadataFactoryInterface \$metadataFactory, ConstraintValidatorFactoryInterface \$validatorFactory, array \$objectInitializers = [])
    {
        \$this->contextFactory = \$contextFactory;
        \$this->metadataFactory = \$metadataFactory;
        \$this->validatorFactory = \$validatorFactory;
        \$this->objectInitializers = \$objectInitializers;
    }

    /**
     * {@inheritdoc}
     */
    public function startContext(\$root = null)
    {
        return new RecursiveContextualValidator(
            \$this->contextFactory->createContext(\$this, \$root),
            \$this->metadataFactory,
            \$this->validatorFactory,
            \$this->objectInitializers
        );
    }

    /**
     * {@inheritdoc}
     */
    public function inContext(ExecutionContextInterface \$context)
    {
        return new RecursiveContextualValidator(
            \$context,
            \$this->metadataFactory,
            \$this->validatorFactory,
            \$this->objectInitializers
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getMetadataFor(\$object)
    {
        return \$this->metadataFactory->getMetadataFor(\$object);
    }

    /**
     * {@inheritdoc}
     */
    public function hasMetadataFor(\$object)
    {
        return \$this->metadataFactory->hasMetadataFor(\$object);
    }

    /**
     * {@inheritdoc}
     */
    public function validate(\$value, \$constraints = null, \$groups = null)
    {
        return \$this->startContext(\$value)
            ->validate(\$value, \$constraints, \$groups)
            ->getViolations();
    }

    /**
     * {@inheritdoc}
     */
    public function validateProperty(\$object, \$propertyName, \$groups = null)
    {
        return \$this->startContext(\$object)
            ->validateProperty(\$object, \$propertyName, \$groups)
            ->getViolations();
    }

    /**
     * {@inheritdoc}
     */
    public function validatePropertyValue(\$objectOrClass, \$propertyName, \$value, \$groups = null)
    {
        // If a class name is passed, take \$value as root
        return \$this->startContext(\\is_object(\$objectOrClass) ? \$objectOrClass : \$value)
            ->validatePropertyValue(\$objectOrClass, \$propertyName, \$value, \$groups)
            ->getViolations();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Validator/RecursiveValidator.php";
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

namespace Symfony\\Component\\Validator\\Validator;

use Symfony\\Component\\Validator\\ConstraintValidatorFactoryInterface;
use Symfony\\Component\\Validator\\Context\\ExecutionContextFactoryInterface;
use Symfony\\Component\\Validator\\Context\\ExecutionContextInterface;
use Symfony\\Component\\Validator\\Mapping\\Factory\\MetadataFactoryInterface;
use Symfony\\Component\\Validator\\ObjectInitializerInterface;

/**
 * Recursive implementation of {@link ValidatorInterface}.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class RecursiveValidator implements ValidatorInterface
{
    protected \$contextFactory;
    protected \$metadataFactory;
    protected \$validatorFactory;
    protected \$objectInitializers;

    /**
     * Creates a new validator.
     *
     * @param ExecutionContextFactoryInterface    \$contextFactory     The factory for
     *                                                                creating new contexts
     * @param MetadataFactoryInterface            \$metadataFactory    The factory for
     *                                                                fetching the metadata
     *                                                                of validated objects
     * @param ConstraintValidatorFactoryInterface \$validatorFactory   The factory for creating
     *                                                                constraint validators
     * @param ObjectInitializerInterface[]        \$objectInitializers The object initializers
     */
    public function __construct(ExecutionContextFactoryInterface \$contextFactory, MetadataFactoryInterface \$metadataFactory, ConstraintValidatorFactoryInterface \$validatorFactory, array \$objectInitializers = [])
    {
        \$this->contextFactory = \$contextFactory;
        \$this->metadataFactory = \$metadataFactory;
        \$this->validatorFactory = \$validatorFactory;
        \$this->objectInitializers = \$objectInitializers;
    }

    /**
     * {@inheritdoc}
     */
    public function startContext(\$root = null)
    {
        return new RecursiveContextualValidator(
            \$this->contextFactory->createContext(\$this, \$root),
            \$this->metadataFactory,
            \$this->validatorFactory,
            \$this->objectInitializers
        );
    }

    /**
     * {@inheritdoc}
     */
    public function inContext(ExecutionContextInterface \$context)
    {
        return new RecursiveContextualValidator(
            \$context,
            \$this->metadataFactory,
            \$this->validatorFactory,
            \$this->objectInitializers
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getMetadataFor(\$object)
    {
        return \$this->metadataFactory->getMetadataFor(\$object);
    }

    /**
     * {@inheritdoc}
     */
    public function hasMetadataFor(\$object)
    {
        return \$this->metadataFactory->hasMetadataFor(\$object);
    }

    /**
     * {@inheritdoc}
     */
    public function validate(\$value, \$constraints = null, \$groups = null)
    {
        return \$this->startContext(\$value)
            ->validate(\$value, \$constraints, \$groups)
            ->getViolations();
    }

    /**
     * {@inheritdoc}
     */
    public function validateProperty(\$object, \$propertyName, \$groups = null)
    {
        return \$this->startContext(\$object)
            ->validateProperty(\$object, \$propertyName, \$groups)
            ->getViolations();
    }

    /**
     * {@inheritdoc}
     */
    public function validatePropertyValue(\$objectOrClass, \$propertyName, \$value, \$groups = null)
    {
        // If a class name is passed, take \$value as root
        return \$this->startContext(\\is_object(\$objectOrClass) ? \$objectOrClass : \$value)
            ->validatePropertyValue(\$objectOrClass, \$propertyName, \$value, \$groups)
            ->getViolations();
    }
}
", "vendor/symfony/validator/Validator/RecursiveValidator.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Validator/RecursiveValidator.php");
    }
}
