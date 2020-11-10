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

/* vendor/doctrine/doctrine-bundle/DependencyInjection/Compiler/ServiceRepositoryCompilerPass.php */
class __TwigTemplate_386f8589510757f34624d2cd12ef04291a8d00ee6339f52a4edcad715d6009f2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-bundle/DependencyInjection/Compiler/ServiceRepositoryCompilerPass.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-bundle/DependencyInjection/Compiler/ServiceRepositoryCompilerPass.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Bundle\\DoctrineBundle\\DependencyInjection\\Compiler;

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\Compiler\\ServiceLocatorTagPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

final class ServiceRepositoryCompilerPass implements CompilerPassInterface
{
    const REPOSITORY_SERVICE_TAG = 'doctrine.repository_service';

    public function process(ContainerBuilder \$container)
    {
        // when ORM is not enabled
        if (! \$container->hasDefinition('doctrine.orm.container_repository_factory')) {
            return;
        }

        \$locatorDef = \$container->getDefinition('doctrine.orm.container_repository_factory');

        \$repoServiceIds = array_keys(\$container->findTaggedServiceIds(self::REPOSITORY_SERVICE_TAG));

        \$repoReferences = array_map(static function (\$id) {
            return new Reference(\$id);
        }, \$repoServiceIds);

        \$ref = ServiceLocatorTagPass::register(\$container, array_combine(\$repoServiceIds, \$repoReferences));
        \$locatorDef->replaceArgument(0, \$ref);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/doctrine-bundle/DependencyInjection/Compiler/ServiceRepositoryCompilerPass.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Bundle\\DoctrineBundle\\DependencyInjection\\Compiler;

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\Compiler\\ServiceLocatorTagPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

final class ServiceRepositoryCompilerPass implements CompilerPassInterface
{
    const REPOSITORY_SERVICE_TAG = 'doctrine.repository_service';

    public function process(ContainerBuilder \$container)
    {
        // when ORM is not enabled
        if (! \$container->hasDefinition('doctrine.orm.container_repository_factory')) {
            return;
        }

        \$locatorDef = \$container->getDefinition('doctrine.orm.container_repository_factory');

        \$repoServiceIds = array_keys(\$container->findTaggedServiceIds(self::REPOSITORY_SERVICE_TAG));

        \$repoReferences = array_map(static function (\$id) {
            return new Reference(\$id);
        }, \$repoServiceIds);

        \$ref = ServiceLocatorTagPass::register(\$container, array_combine(\$repoServiceIds, \$repoReferences));
        \$locatorDef->replaceArgument(0, \$ref);
    }
}
", "vendor/doctrine/doctrine-bundle/DependencyInjection/Compiler/ServiceRepositoryCompilerPass.php", "/var/www/public/DevLaon/templates/vendor/doctrine/doctrine-bundle/DependencyInjection/Compiler/ServiceRepositoryCompilerPass.php");
    }
}
