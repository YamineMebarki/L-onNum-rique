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

/* vendor/doctrine/doctrine-migrations-bundle/Tests/DependencyInjection/DoctrineMigrationsExtensionTest.php */
class __TwigTemplate_75f26b6ebed38a4e25898a99f78c8988fef1bcf838c41af7dbc0b038c248844f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-migrations-bundle/Tests/DependencyInjection/DoctrineMigrationsExtensionTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-migrations-bundle/Tests/DependencyInjection/DoctrineMigrationsExtensionTest.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Bundle\\MigrationsBundle\\Tests\\DependencyInjection;

use Doctrine\\Bundle\\MigrationsBundle\\DependencyInjection\\DoctrineMigrationsExtension;
use Doctrine\\Migrations\\Configuration\\Configuration;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag;
use function sys_get_temp_dir;

class DoctrineMigrationsExtensionTest extends TestCase
{
    public function testOrganizeMigrations() : void
    {
        \$container = \$this->getContainer();
        \$extension = new DoctrineMigrationsExtension();

        \$config = ['organize_migrations' => 'BY_YEAR'];

        \$extension->load(['doctrine_migrations' => \$config], \$container);

        \$this->assertEquals(
            Configuration::VERSIONS_ORGANIZATION_BY_YEAR,
            \$container->getParameter('doctrine_migrations.organize_migrations')
        );
    }

    private function getContainer() : ContainerBuilder
    {
        return new ContainerBuilder(new ParameterBag([
            'kernel.debug' => false,
            'kernel.bundles' => [],
            'kernel.cache_dir' => sys_get_temp_dir(),
            'kernel.environment' => 'test',
            'kernel.root_dir' => __DIR__ . '/../../', // src dir
        ]));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/doctrine-migrations-bundle/Tests/DependencyInjection/DoctrineMigrationsExtensionTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Bundle\\MigrationsBundle\\Tests\\DependencyInjection;

use Doctrine\\Bundle\\MigrationsBundle\\DependencyInjection\\DoctrineMigrationsExtension;
use Doctrine\\Migrations\\Configuration\\Configuration;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag;
use function sys_get_temp_dir;

class DoctrineMigrationsExtensionTest extends TestCase
{
    public function testOrganizeMigrations() : void
    {
        \$container = \$this->getContainer();
        \$extension = new DoctrineMigrationsExtension();

        \$config = ['organize_migrations' => 'BY_YEAR'];

        \$extension->load(['doctrine_migrations' => \$config], \$container);

        \$this->assertEquals(
            Configuration::VERSIONS_ORGANIZATION_BY_YEAR,
            \$container->getParameter('doctrine_migrations.organize_migrations')
        );
    }

    private function getContainer() : ContainerBuilder
    {
        return new ContainerBuilder(new ParameterBag([
            'kernel.debug' => false,
            'kernel.bundles' => [],
            'kernel.cache_dir' => sys_get_temp_dir(),
            'kernel.environment' => 'test',
            'kernel.root_dir' => __DIR__ . '/../../', // src dir
        ]));
    }
}
", "vendor/doctrine/doctrine-migrations-bundle/Tests/DependencyInjection/DoctrineMigrationsExtensionTest.php", "/var/www/public/DevLaon/templates/vendor/doctrine/doctrine-migrations-bundle/Tests/DependencyInjection/DoctrineMigrationsExtensionTest.php");
    }
}
