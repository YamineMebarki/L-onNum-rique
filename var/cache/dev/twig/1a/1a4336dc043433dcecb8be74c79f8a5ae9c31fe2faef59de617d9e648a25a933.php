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

/* vendor/symfony/security-bundle/Tests/DependencyInjection/Fixtures/UserProvider/DummyProvider.php */
class __TwigTemplate_8c903a6f893f49386705f1ed2072cea43213f3b6d5286cb92ed004a19e5fd87e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/DependencyInjection/Fixtures/UserProvider/DummyProvider.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/DependencyInjection/Fixtures/UserProvider/DummyProvider.php"));

        // line 1
        echo "<?php

namespace Symfony\\Bundle\\SecurityBundle\\Tests\\DependencyInjection\\Fixtures\\UserProvider;

use Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\Security\\UserProvider\\UserProviderFactoryInterface;
use Symfony\\Component\\Config\\Definition\\Builder\\NodeDefinition;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

class DummyProvider implements UserProviderFactoryInterface
{
    public function create(ContainerBuilder \$container, \$id, \$config)
    {
    }

    public function getKey()
    {
        return 'foo';
    }

    public function addConfiguration(NodeDefinition \$node)
    {
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/Tests/DependencyInjection/Fixtures/UserProvider/DummyProvider.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Symfony\\Bundle\\SecurityBundle\\Tests\\DependencyInjection\\Fixtures\\UserProvider;

use Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\Security\\UserProvider\\UserProviderFactoryInterface;
use Symfony\\Component\\Config\\Definition\\Builder\\NodeDefinition;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

class DummyProvider implements UserProviderFactoryInterface
{
    public function create(ContainerBuilder \$container, \$id, \$config)
    {
    }

    public function getKey()
    {
        return 'foo';
    }

    public function addConfiguration(NodeDefinition \$node)
    {
    }
}
", "vendor/symfony/security-bundle/Tests/DependencyInjection/Fixtures/UserProvider/DummyProvider.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/Tests/DependencyInjection/Fixtures/UserProvider/DummyProvider.php");
    }
}
