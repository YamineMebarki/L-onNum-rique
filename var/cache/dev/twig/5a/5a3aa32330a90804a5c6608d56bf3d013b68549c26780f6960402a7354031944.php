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

/* vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/builder_1_public.md */
class __TwigTemplate_2e3c2fbe2960bfc5f9039f2a0a24fca5c48ab465b3daf7946ee0ba669c35059b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/builder_1_public.md"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/builder_1_public.md"));

        // line 1
        echo "Services
========

Definitions
-----------

### definition_1

- Class: `Full\\Qualified\\Class1`
- Public: yes
- Synthetic: no
- Lazy: yes
- Shared: yes
- Abstract: yes
- Autowired: no
- Autoconfigured: no
- Factory Class: `Full\\Qualified\\FactoryClass`
- Factory Method: `get`

### definition_without_class

- Class: ``
- Public: no
- Synthetic: no
- Lazy: no
- Shared: yes
- Abstract: no
- Autowired: no
- Autoconfigured: no

### service_container

- Description: `ContainerInterface is the interface implemented by service container classes.`
- Class: `Symfony\\Component\\DependencyInjection\\ContainerInterface`
- Public: yes
- Synthetic: yes
- Lazy: no
- Shared: yes
- Abstract: no
- Autowired: no
- Autoconfigured: no


Aliases
-------

### alias_1

- Service: `service_1`
- Public: yes

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/builder_1_public.md";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Services
========

Definitions
-----------

### definition_1

- Class: `Full\\Qualified\\Class1`
- Public: yes
- Synthetic: no
- Lazy: yes
- Shared: yes
- Abstract: yes
- Autowired: no
- Autoconfigured: no
- Factory Class: `Full\\Qualified\\FactoryClass`
- Factory Method: `get`

### definition_without_class

- Class: ``
- Public: no
- Synthetic: no
- Lazy: no
- Shared: yes
- Abstract: no
- Autowired: no
- Autoconfigured: no

### service_container

- Description: `ContainerInterface is the interface implemented by service container classes.`
- Class: `Symfony\\Component\\DependencyInjection\\ContainerInterface`
- Public: yes
- Synthetic: yes
- Lazy: no
- Shared: yes
- Abstract: no
- Autowired: no
- Autoconfigured: no


Aliases
-------

### alias_1

- Service: `service_1`
- Public: yes

", "vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/builder_1_public.md", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/builder_1_public.md");
    }
}
