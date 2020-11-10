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

/* vendor/doctrine/doctrine-fixtures-bundle/DependencyInjection/DoctrineFixturesExtension.php */
class __TwigTemplate_1e214fbf20abba086a2fb4ecf60961e80d78eb93f8cebab4b2247827055604f3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-fixtures-bundle/DependencyInjection/DoctrineFixturesExtension.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-fixtures-bundle/DependencyInjection/DoctrineFixturesExtension.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Bundle\\FixturesBundle\\DependencyInjection;

use Doctrine\\Bundle\\FixturesBundle\\DependencyInjection\\CompilerPass\\FixturesCompilerPass;
use Doctrine\\Bundle\\FixturesBundle\\ORMFixtureInterface;
use Symfony\\Component\\Config\\FileLocator;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader;
use Symfony\\Component\\HttpKernel\\DependencyInjection\\Extension;
use function dirname;

class DoctrineFixturesExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array \$configs, ContainerBuilder \$container)
    {
        \$loader = new XmlFileLoader(\$container, new FileLocator(dirname(__DIR__) . '/Resources/config'));

        \$loader->load('services.xml');

        \$container->registerForAutoconfiguration(ORMFixtureInterface::class)
            ->addTag(FixturesCompilerPass::FIXTURE_TAG);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/doctrine-fixtures-bundle/DependencyInjection/DoctrineFixturesExtension.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Bundle\\FixturesBundle\\DependencyInjection;

use Doctrine\\Bundle\\FixturesBundle\\DependencyInjection\\CompilerPass\\FixturesCompilerPass;
use Doctrine\\Bundle\\FixturesBundle\\ORMFixtureInterface;
use Symfony\\Component\\Config\\FileLocator;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader;
use Symfony\\Component\\HttpKernel\\DependencyInjection\\Extension;
use function dirname;

class DoctrineFixturesExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array \$configs, ContainerBuilder \$container)
    {
        \$loader = new XmlFileLoader(\$container, new FileLocator(dirname(__DIR__) . '/Resources/config'));

        \$loader->load('services.xml');

        \$container->registerForAutoconfiguration(ORMFixtureInterface::class)
            ->addTag(FixturesCompilerPass::FIXTURE_TAG);
    }
}
", "vendor/doctrine/doctrine-fixtures-bundle/DependencyInjection/DoctrineFixturesExtension.php", "/var/www/public/DevLaon/templates/vendor/doctrine/doctrine-fixtures-bundle/DependencyInjection/DoctrineFixturesExtension.php");
    }
}
