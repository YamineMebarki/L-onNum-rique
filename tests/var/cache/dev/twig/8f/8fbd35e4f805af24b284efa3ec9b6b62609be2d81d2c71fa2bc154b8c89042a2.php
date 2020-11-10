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

/* vendor/doctrine/doctrine-migrations-bundle/DependencyInjection/DoctrineMigrationsExtension.php */
class __TwigTemplate_06fc099a7477e2d026fe16d327e4063cca917efe9642fc25ecced6b98c294ee9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-migrations-bundle/DependencyInjection/DoctrineMigrationsExtension.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-migrations-bundle/DependencyInjection/DoctrineMigrationsExtension.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Bundle\\MigrationsBundle\\DependencyInjection;

use Symfony\\Component\\Config\\FileLocator;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader;
use Symfony\\Component\\HttpKernel\\DependencyInjection\\Extension;

/**
 * DoctrineMigrationsExtension.
 */
class DoctrineMigrationsExtension extends Extension
{
    /**
     * Responds to the migrations configuration parameter.
     *
     * @param string[][] \$configs
     */
    public function load(array \$configs, ContainerBuilder \$container) : void
    {
        \$configuration = new Configuration();

        \$config = \$this->processConfiguration(\$configuration, \$configs);

        foreach (\$config as \$key => \$value) {
            \$container->setParameter(\$this->getAlias() . '.' . \$key, \$value);
        }

        \$locator = new FileLocator(__DIR__ . '/../Resources/config/');
        \$loader  = new XmlFileLoader(\$container, \$locator);

        \$loader->load('services.xml');
    }

    /**
     * Returns the base path for the XSD files.
     *
     * @return string The XSD base path
     */
    public function getXsdValidationBasePath() : string
    {
        return __DIR__ . '/../Resources/config/schema';
    }

    public function getNamespace() : string
    {
        return 'http://symfony.com/schema/dic/doctrine/migrations';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/doctrine-migrations-bundle/DependencyInjection/DoctrineMigrationsExtension.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Bundle\\MigrationsBundle\\DependencyInjection;

use Symfony\\Component\\Config\\FileLocator;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader;
use Symfony\\Component\\HttpKernel\\DependencyInjection\\Extension;

/**
 * DoctrineMigrationsExtension.
 */
class DoctrineMigrationsExtension extends Extension
{
    /**
     * Responds to the migrations configuration parameter.
     *
     * @param string[][] \$configs
     */
    public function load(array \$configs, ContainerBuilder \$container) : void
    {
        \$configuration = new Configuration();

        \$config = \$this->processConfiguration(\$configuration, \$configs);

        foreach (\$config as \$key => \$value) {
            \$container->setParameter(\$this->getAlias() . '.' . \$key, \$value);
        }

        \$locator = new FileLocator(__DIR__ . '/../Resources/config/');
        \$loader  = new XmlFileLoader(\$container, \$locator);

        \$loader->load('services.xml');
    }

    /**
     * Returns the base path for the XSD files.
     *
     * @return string The XSD base path
     */
    public function getXsdValidationBasePath() : string
    {
        return __DIR__ . '/../Resources/config/schema';
    }

    public function getNamespace() : string
    {
        return 'http://symfony.com/schema/dic/doctrine/migrations';
    }
}
", "vendor/doctrine/doctrine-migrations-bundle/DependencyInjection/DoctrineMigrationsExtension.php", "/var/www/public/DevLaon/templates/vendor/doctrine/doctrine-migrations-bundle/DependencyInjection/DoctrineMigrationsExtension.php");
    }
}
