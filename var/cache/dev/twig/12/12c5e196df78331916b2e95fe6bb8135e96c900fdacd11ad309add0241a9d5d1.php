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

/* vendor/doctrine/doctrine-bundle/DependencyInjection/Compiler/DbalSchemaFilterPass.php */
class __TwigTemplate_a7ad92bed2e3a8f406630d03ab95670736aea853b9e35ff49ba49bff7981383c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-bundle/DependencyInjection/Compiler/DbalSchemaFilterPass.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-bundle/DependencyInjection/Compiler/DbalSchemaFilterPass.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Bundle\\DoctrineBundle\\DependencyInjection\\Compiler;

use Doctrine\\DBAL\\Configuration;
use LogicException;
use Symfony\\Component\\DependencyInjection\\ChildDefinition;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Processes the doctrine.dbal.schema_filter
 */
class DbalSchemaFilterPass implements CompilerPassInterface
{
    /**
     * {@inheritDoc}
     */
    public function process(ContainerBuilder \$container)
    {
        \$filters = \$container->findTaggedServiceIds('doctrine.dbal.schema_filter');

        if (count(\$filters) > 0 && ! method_exists(Configuration::class, 'setSchemaAssetsFilter')) {
            throw new LogicException('The doctrine.dbal.schema_filter tag is only supported when using doctrine/dbal 2.9 or higher.');
        }

        \$connectionFilters = [];
        foreach (\$filters as \$id => \$tagAttributes) {
            foreach (\$tagAttributes as \$attributes) {
                \$name = isset(\$attributes['connection']) ? \$attributes['connection'] : \$container->getParameter('doctrine.default_connection');

                if (! isset(\$connectionFilters[\$name])) {
                    \$connectionFilters[\$name] = [];
                }

                \$connectionFilters[\$name][] = new Reference(\$id);
            }
        }

        foreach (\$connectionFilters as \$name => \$references) {
            \$configurationId = sprintf('doctrine.dbal.%s_connection.configuration', \$name);

            if (! \$container->hasDefinition(\$configurationId)) {
                continue;
            }

            \$definition = new ChildDefinition('doctrine.dbal.schema_asset_filter_manager');
            \$definition->setArgument(0, \$references);

            \$id = sprintf('doctrine.dbal.%s_schema_asset_filter_manager', \$name);
            \$container->setDefinition(\$id, \$definition);
            \$container->findDefinition(\$configurationId)
                ->addMethodCall('setSchemaAssetsFilter', [new Reference(\$id)]);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/doctrine-bundle/DependencyInjection/Compiler/DbalSchemaFilterPass.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Bundle\\DoctrineBundle\\DependencyInjection\\Compiler;

use Doctrine\\DBAL\\Configuration;
use LogicException;
use Symfony\\Component\\DependencyInjection\\ChildDefinition;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Processes the doctrine.dbal.schema_filter
 */
class DbalSchemaFilterPass implements CompilerPassInterface
{
    /**
     * {@inheritDoc}
     */
    public function process(ContainerBuilder \$container)
    {
        \$filters = \$container->findTaggedServiceIds('doctrine.dbal.schema_filter');

        if (count(\$filters) > 0 && ! method_exists(Configuration::class, 'setSchemaAssetsFilter')) {
            throw new LogicException('The doctrine.dbal.schema_filter tag is only supported when using doctrine/dbal 2.9 or higher.');
        }

        \$connectionFilters = [];
        foreach (\$filters as \$id => \$tagAttributes) {
            foreach (\$tagAttributes as \$attributes) {
                \$name = isset(\$attributes['connection']) ? \$attributes['connection'] : \$container->getParameter('doctrine.default_connection');

                if (! isset(\$connectionFilters[\$name])) {
                    \$connectionFilters[\$name] = [];
                }

                \$connectionFilters[\$name][] = new Reference(\$id);
            }
        }

        foreach (\$connectionFilters as \$name => \$references) {
            \$configurationId = sprintf('doctrine.dbal.%s_connection.configuration', \$name);

            if (! \$container->hasDefinition(\$configurationId)) {
                continue;
            }

            \$definition = new ChildDefinition('doctrine.dbal.schema_asset_filter_manager');
            \$definition->setArgument(0, \$references);

            \$id = sprintf('doctrine.dbal.%s_schema_asset_filter_manager', \$name);
            \$container->setDefinition(\$id, \$definition);
            \$container->findDefinition(\$configurationId)
                ->addMethodCall('setSchemaAssetsFilter', [new Reference(\$id)]);
        }
    }
}
", "vendor/doctrine/doctrine-bundle/DependencyInjection/Compiler/DbalSchemaFilterPass.php", "/var/www/public/DevLaon/templates/vendor/doctrine/doctrine-bundle/DependencyInjection/Compiler/DbalSchemaFilterPass.php");
    }
}
