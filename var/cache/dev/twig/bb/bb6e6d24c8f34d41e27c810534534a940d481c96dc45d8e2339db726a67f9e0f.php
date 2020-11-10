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

/* vendor/symfony/dependency-injection/Tests/Fixtures/graphviz/services10-1.dot */
class __TwigTemplate_2f420fc31886aa9b14b5ed874a1b95db13534d0c562066705f6b21facbdccc83 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/graphviz/services10-1.dot"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/graphviz/services10-1.dot"));

        // line 1
        echo "digraph sc {
  ratio=\"normal\"
  node [fontsize=\"13\" fontname=\"Verdana\" shape=\"square\"];
  edge [fontsize=\"12\" fontname=\"Verdana\" color=\"white\" arrowhead=\"closed\" arrowsize=\"1\"];

  node_service_container [label=\"service_container (Psr\\Container\\ContainerInterface, Symfony\\Component\\DependencyInjection\\ContainerInterface)\\nSymfony\\\\Component\\\\DependencyInjection\\\\ContainerInterface\\n\", shape=square, fillcolor=\"grey\", style=\"filled\"];
  node_foo [label=\"foo\\nFooClass\\n\", shape=square, fillcolor=\"grey\", style=\"filled\"];
  node_bar [label=\"bar\\n\\n\", shape=square, fillcolor=\"red\", style=\"empty\"];
  node_foo -> node_bar [label=\"\" style=\"filled\"];
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Fixtures/graphviz/services10-1.dot";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("digraph sc {
  ratio=\"normal\"
  node [fontsize=\"13\" fontname=\"Verdana\" shape=\"square\"];
  edge [fontsize=\"12\" fontname=\"Verdana\" color=\"white\" arrowhead=\"closed\" arrowsize=\"1\"];

  node_service_container [label=\"service_container (Psr\\Container\\ContainerInterface, Symfony\\Component\\DependencyInjection\\ContainerInterface)\\nSymfony\\\\Component\\\\DependencyInjection\\\\ContainerInterface\\n\", shape=square, fillcolor=\"grey\", style=\"filled\"];
  node_foo [label=\"foo\\nFooClass\\n\", shape=square, fillcolor=\"grey\", style=\"filled\"];
  node_bar [label=\"bar\\n\\n\", shape=square, fillcolor=\"red\", style=\"empty\"];
  node_foo -> node_bar [label=\"\" style=\"filled\"];
}
", "vendor/symfony/dependency-injection/Tests/Fixtures/graphviz/services10-1.dot", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Fixtures/graphviz/services10-1.dot");
    }
}
