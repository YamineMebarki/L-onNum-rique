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

/* vendor/symfony/validator/DependencyInjection/AddConstraintValidatorsPass.php */
class __TwigTemplate_334eb7cb602576c57d0aeef458270d0385ec2f2b3b37706889059f67cae08b9b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/DependencyInjection/AddConstraintValidatorsPass.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/DependencyInjection/AddConstraintValidatorsPass.php"));

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

namespace Symfony\\Component\\Validator\\DependencyInjection;

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\Compiler\\ServiceLocatorTagPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 * @author Robin Chalas <robin.chalas@gmail.com>
 */
class AddConstraintValidatorsPass implements CompilerPassInterface
{
    private \$validatorFactoryServiceId;
    private \$constraintValidatorTag;

    public function __construct(string \$validatorFactoryServiceId = 'validator.validator_factory', string \$constraintValidatorTag = 'validator.constraint_validator')
    {
        \$this->validatorFactoryServiceId = \$validatorFactoryServiceId;
        \$this->constraintValidatorTag = \$constraintValidatorTag;
    }

    public function process(ContainerBuilder \$container)
    {
        if (!\$container->hasDefinition(\$this->validatorFactoryServiceId)) {
            return;
        }

        \$validators = [];
        foreach (\$container->findTaggedServiceIds(\$this->constraintValidatorTag, true) as \$id => \$attributes) {
            \$definition = \$container->getDefinition(\$id);

            if (isset(\$attributes[0]['alias'])) {
                \$validators[\$attributes[0]['alias']] = new Reference(\$id);
            }

            \$validators[\$definition->getClass()] = new Reference(\$id);
        }

        \$container
            ->getDefinition(\$this->validatorFactoryServiceId)
            ->replaceArgument(0, ServiceLocatorTagPass::register(\$container, \$validators))
        ;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/DependencyInjection/AddConstraintValidatorsPass.php";
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

namespace Symfony\\Component\\Validator\\DependencyInjection;

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\Compiler\\ServiceLocatorTagPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 * @author Robin Chalas <robin.chalas@gmail.com>
 */
class AddConstraintValidatorsPass implements CompilerPassInterface
{
    private \$validatorFactoryServiceId;
    private \$constraintValidatorTag;

    public function __construct(string \$validatorFactoryServiceId = 'validator.validator_factory', string \$constraintValidatorTag = 'validator.constraint_validator')
    {
        \$this->validatorFactoryServiceId = \$validatorFactoryServiceId;
        \$this->constraintValidatorTag = \$constraintValidatorTag;
    }

    public function process(ContainerBuilder \$container)
    {
        if (!\$container->hasDefinition(\$this->validatorFactoryServiceId)) {
            return;
        }

        \$validators = [];
        foreach (\$container->findTaggedServiceIds(\$this->constraintValidatorTag, true) as \$id => \$attributes) {
            \$definition = \$container->getDefinition(\$id);

            if (isset(\$attributes[0]['alias'])) {
                \$validators[\$attributes[0]['alias']] = new Reference(\$id);
            }

            \$validators[\$definition->getClass()] = new Reference(\$id);
        }

        \$container
            ->getDefinition(\$this->validatorFactoryServiceId)
            ->replaceArgument(0, ServiceLocatorTagPass::register(\$container, \$validators))
        ;
    }
}
", "vendor/symfony/validator/DependencyInjection/AddConstraintValidatorsPass.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/DependencyInjection/AddConstraintValidatorsPass.php");
    }
}
