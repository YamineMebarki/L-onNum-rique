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

/* vendor/symfony/validator/ContainerConstraintValidatorFactory.php */
class __TwigTemplate_0b5366813deda03991bb7452fad6dd8c648fd0e2526d90925bec0570db0a182c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/ContainerConstraintValidatorFactory.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/ContainerConstraintValidatorFactory.php"));

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

namespace Symfony\\Component\\Validator;

use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException;
use Symfony\\Component\\Validator\\Exception\\ValidatorException;

/**
 * Uses a service container to create constraint validators.
 *
 * @author Kris Wallsmith <kris@symfony.com>
 */
class ContainerConstraintValidatorFactory implements ConstraintValidatorFactoryInterface
{
    private \$container;
    private \$validators;

    public function __construct(ContainerInterface \$container)
    {
        \$this->container = \$container;
        \$this->validators = [];
    }

    /**
     * {@inheritdoc}
     *
     * @throws ValidatorException      When the validator class does not exist
     * @throws UnexpectedTypeException When the validator is not an instance of ConstraintValidatorInterface
     */
    public function getInstance(Constraint \$constraint)
    {
        \$name = \$constraint->validatedBy();

        if (!isset(\$this->validators[\$name])) {
            if (\$this->container->has(\$name)) {
                \$this->validators[\$name] = \$this->container->get(\$name);
            } else {
                if (!class_exists(\$name)) {
                    throw new ValidatorException(sprintf('Constraint validator \"%s\" does not exist or is not enabled. Check the \"validatedBy\" method in your constraint class \"%s\".', \$name, \\get_class(\$constraint)));
                }

                \$this->validators[\$name] = new \$name();
            }
        }

        if (!\$this->validators[\$name] instanceof ConstraintValidatorInterface) {
            throw new UnexpectedTypeException(\$this->validators[\$name], ConstraintValidatorInterface::class);
        }

        return \$this->validators[\$name];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/ContainerConstraintValidatorFactory.php";
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

namespace Symfony\\Component\\Validator;

use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException;
use Symfony\\Component\\Validator\\Exception\\ValidatorException;

/**
 * Uses a service container to create constraint validators.
 *
 * @author Kris Wallsmith <kris@symfony.com>
 */
class ContainerConstraintValidatorFactory implements ConstraintValidatorFactoryInterface
{
    private \$container;
    private \$validators;

    public function __construct(ContainerInterface \$container)
    {
        \$this->container = \$container;
        \$this->validators = [];
    }

    /**
     * {@inheritdoc}
     *
     * @throws ValidatorException      When the validator class does not exist
     * @throws UnexpectedTypeException When the validator is not an instance of ConstraintValidatorInterface
     */
    public function getInstance(Constraint \$constraint)
    {
        \$name = \$constraint->validatedBy();

        if (!isset(\$this->validators[\$name])) {
            if (\$this->container->has(\$name)) {
                \$this->validators[\$name] = \$this->container->get(\$name);
            } else {
                if (!class_exists(\$name)) {
                    throw new ValidatorException(sprintf('Constraint validator \"%s\" does not exist or is not enabled. Check the \"validatedBy\" method in your constraint class \"%s\".', \$name, \\get_class(\$constraint)));
                }

                \$this->validators[\$name] = new \$name();
            }
        }

        if (!\$this->validators[\$name] instanceof ConstraintValidatorInterface) {
            throw new UnexpectedTypeException(\$this->validators[\$name], ConstraintValidatorInterface::class);
        }

        return \$this->validators[\$name];
    }
}
", "vendor/symfony/validator/ContainerConstraintValidatorFactory.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/ContainerConstraintValidatorFactory.php");
    }
}
