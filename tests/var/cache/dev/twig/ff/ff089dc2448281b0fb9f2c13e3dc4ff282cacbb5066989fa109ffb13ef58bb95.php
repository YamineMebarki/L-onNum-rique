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

/* vendor/symfony/dependency-injection/Tests/Fixtures/graphviz/services_inline.dot */
class __TwigTemplate_55ee5f2fdf890b69f24d9361d4f70e276a1278c7e5ab5f65fccc62ea35fc65e7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/graphviz/services_inline.dot"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/graphviz/services_inline.dot"));

        // line 1
        echo "digraph sc {
  ratio=\"compress\"
  node [fontsize=\"11\" fontname=\"Arial\" shape=\"record\"];
  edge [fontsize=\"9\" fontname=\"Arial\" color=\"grey\" arrowhead=\"open\" arrowsize=\"0.5\"];

  node_service_container [label=\"service_container (Psr\\Container\\ContainerInterface, Symfony\\Component\\DependencyInjection\\ContainerInterface)\\nSymfony\\\\Component\\\\DependencyInjection\\\\ContainerInterface\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_foo [label=\"foo\\nstdClass\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_bar [label=\"bar\\nstdClass\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_foo -> node_bar [label=\"\" style=\"filled\"];
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Fixtures/graphviz/services_inline.dot";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("digraph sc {
  ratio=\"compress\"
  node [fontsize=\"11\" fontname=\"Arial\" shape=\"record\"];
  edge [fontsize=\"9\" fontname=\"Arial\" color=\"grey\" arrowhead=\"open\" arrowsize=\"0.5\"];

  node_service_container [label=\"service_container (Psr\\Container\\ContainerInterface, Symfony\\Component\\DependencyInjection\\ContainerInterface)\\nSymfony\\\\Component\\\\DependencyInjection\\\\ContainerInterface\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_foo [label=\"foo\\nstdClass\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_bar [label=\"bar\\nstdClass\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_foo -> node_bar [label=\"\" style=\"filled\"];
}
", "vendor/symfony/dependency-injection/Tests/Fixtures/graphviz/services_inline.dot", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Fixtures/graphviz/services_inline.dot");
    }
}
