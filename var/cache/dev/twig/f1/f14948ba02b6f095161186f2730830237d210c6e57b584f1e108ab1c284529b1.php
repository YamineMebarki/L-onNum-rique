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

/* vendor/symfony/dependency-injection/Tests/Fixtures/includes/ProjectExtension.php */
class __TwigTemplate_2b7affcabcba256b24712087176c26f7c85fe3c319233a8dd5fff13112565f63 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/includes/ProjectExtension.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/includes/ProjectExtension.php"));

        // line 1
        echo "<?php

use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface;

class ProjectExtension implements ExtensionInterface
{
    public function load(array \$configs, ContainerBuilder \$configuration)
    {
        \$configuration->setParameter('project.configs', \$configs);
        \$configs = array_filter(\$configs);

        if (\$configs) {
            \$config = array_merge(...\$configs);
        } else {
            \$config = [];
        }

        \$configuration->register('project.service.bar', 'FooClass')->setPublic(true);
        \$configuration->setParameter('project.parameter.bar', isset(\$config['foo']) ? \$config['foo'] : 'foobar');

        \$configuration->register('project.service.foo', 'FooClass')->setPublic(true);
        \$configuration->setParameter('project.parameter.foo', isset(\$config['foo']) ? \$config['foo'] : 'foobar');

        return \$configuration;
    }

    public function getXsdValidationBasePath()
    {
        return false;
    }

    public function getNamespace()
    {
        return 'http://www.example.com/schema/project';
    }

    public function getAlias()
    {
        return 'project';
    }

    public function getConfiguration(array \$config, ContainerBuilder \$container)
    {
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Fixtures/includes/ProjectExtension.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface;

class ProjectExtension implements ExtensionInterface
{
    public function load(array \$configs, ContainerBuilder \$configuration)
    {
        \$configuration->setParameter('project.configs', \$configs);
        \$configs = array_filter(\$configs);

        if (\$configs) {
            \$config = array_merge(...\$configs);
        } else {
            \$config = [];
        }

        \$configuration->register('project.service.bar', 'FooClass')->setPublic(true);
        \$configuration->setParameter('project.parameter.bar', isset(\$config['foo']) ? \$config['foo'] : 'foobar');

        \$configuration->register('project.service.foo', 'FooClass')->setPublic(true);
        \$configuration->setParameter('project.parameter.foo', isset(\$config['foo']) ? \$config['foo'] : 'foobar');

        return \$configuration;
    }

    public function getXsdValidationBasePath()
    {
        return false;
    }

    public function getNamespace()
    {
        return 'http://www.example.com/schema/project';
    }

    public function getAlias()
    {
        return 'project';
    }

    public function getConfiguration(array \$config, ContainerBuilder \$container)
    {
    }
}
", "vendor/symfony/dependency-injection/Tests/Fixtures/includes/ProjectExtension.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Fixtures/includes/ProjectExtension.php");
    }
}
