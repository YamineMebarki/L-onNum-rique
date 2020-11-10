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

/* vendor/doctrine/doctrine-fixtures-bundle/DependencyInjection/CompilerPass/FixturesCompilerPass.php */
class __TwigTemplate_8b4371f070dd3f14972824b40b463ca33c2a2dc2aa321b4b484f29bc8cd8eea0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-fixtures-bundle/DependencyInjection/CompilerPass/FixturesCompilerPass.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-fixtures-bundle/DependencyInjection/CompilerPass/FixturesCompilerPass.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Bundle\\FixturesBundle\\DependencyInjection\\CompilerPass;

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

final class FixturesCompilerPass implements CompilerPassInterface
{
    public const FIXTURE_TAG = 'doctrine.fixture.orm';

    public function process(ContainerBuilder \$container) : void
    {
        \$definition     = \$container->getDefinition('doctrine.fixtures.loader');
        \$taggedServices = \$container->findTaggedServiceIds(self::FIXTURE_TAG);

        \$fixtures = [];
        foreach (\$taggedServices as \$serviceId => \$tags) {
            \$groups = [];
            foreach (\$tags as \$tagData) {
                if (! isset(\$tagData['group'])) {
                    continue;
                }

                \$groups[] = \$tagData['group'];
            }

            \$fixtures[] = [
                'fixture' => new Reference(\$serviceId),
                'groups' => \$groups,
            ];
        }

        \$definition->addMethodCall('addFixtures', [\$fixtures]);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/doctrine-fixtures-bundle/DependencyInjection/CompilerPass/FixturesCompilerPass.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Bundle\\FixturesBundle\\DependencyInjection\\CompilerPass;

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

final class FixturesCompilerPass implements CompilerPassInterface
{
    public const FIXTURE_TAG = 'doctrine.fixture.orm';

    public function process(ContainerBuilder \$container) : void
    {
        \$definition     = \$container->getDefinition('doctrine.fixtures.loader');
        \$taggedServices = \$container->findTaggedServiceIds(self::FIXTURE_TAG);

        \$fixtures = [];
        foreach (\$taggedServices as \$serviceId => \$tags) {
            \$groups = [];
            foreach (\$tags as \$tagData) {
                if (! isset(\$tagData['group'])) {
                    continue;
                }

                \$groups[] = \$tagData['group'];
            }

            \$fixtures[] = [
                'fixture' => new Reference(\$serviceId),
                'groups' => \$groups,
            ];
        }

        \$definition->addMethodCall('addFixtures', [\$fixtures]);
    }
}
", "vendor/doctrine/doctrine-fixtures-bundle/DependencyInjection/CompilerPass/FixturesCompilerPass.php", "/var/www/public/DevLaon/templates/vendor/doctrine/doctrine-fixtures-bundle/DependencyInjection/CompilerPass/FixturesCompilerPass.php");
    }
}
