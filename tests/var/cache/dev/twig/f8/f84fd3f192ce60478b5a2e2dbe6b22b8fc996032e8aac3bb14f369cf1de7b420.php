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

/* vendor/symfony/dependency-injection/Tests/Fixtures/graphviz/services9.dot */
class __TwigTemplate_87f67f15e5e31c9a36041837f42da52cf9318d136d85ab8414d283536efe1e18 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/graphviz/services9.dot"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/graphviz/services9.dot"));

        // line 1
        echo "digraph sc {
  ratio=\"compress\"
  node [fontsize=\"11\" fontname=\"Arial\" shape=\"record\"];
  edge [fontsize=\"9\" fontname=\"Arial\" color=\"grey\" arrowhead=\"open\" arrowsize=\"0.5\"];

  node_service_container [label=\"service_container (Psr\\Container\\ContainerInterface, Symfony\\Component\\DependencyInjection\\ContainerInterface)\\nSymfony\\\\Component\\\\DependencyInjection\\\\ContainerInterface\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_foo [label=\"foo (alias_for_foo)\\nBar\\\\FooClass\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_foo_baz [label=\"foo.baz\\nBazClass\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_bar [label=\"bar\\nBar\\\\FooClass\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_foo_bar [label=\"foo_bar\\nBar\\\\FooClass\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"dotted\"];
  node_method_call1 [label=\"method_call1\\nBar\\\\FooClass\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_foo_with_inline [label=\"foo_with_inline\\nFoo\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_inlined [label=\"inlined\\nBar\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_baz [label=\"baz\\nBaz\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_request [label=\"request\\nRequest\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_configurator_service [label=\"configurator_service\\nConfClass\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_configured_service [label=\"configured_service\\nstdClass\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_configurator_service_simple [label=\"configurator_service_simple\\nConfClass\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_configured_service_simple [label=\"configured_service_simple\\nstdClass\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_decorated [label=\"decorated\\nstdClass\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_decorator_service [label=\"decorator_service\\nstdClass\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_decorator_service_with_name [label=\"decorator_service_with_name\\nstdClass\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_deprecated_service [label=\"deprecated_service\\nstdClass\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_new_factory [label=\"new_factory\\nFactoryClass\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_factory_service [label=\"factory_service\\nBar\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_new_factory_service [label=\"new_factory_service\\nFooBarBaz\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_service_from_static_method [label=\"service_from_static_method\\nBar\\\\FooClass\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_factory_simple [label=\"factory_simple\\nSimpleFactoryClass\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_factory_service_simple [label=\"factory_service_simple\\nBar\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_lazy_context [label=\"lazy_context\\nLazyContext\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_lazy_context_ignore_invalid_ref [label=\"lazy_context_ignore_invalid_ref\\nLazyContext\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_BAR [label=\"BAR\\nstdClass\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_bar2 [label=\"bar2\\nstdClass\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_BAR2 [label=\"BAR2\\nstdClass\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_tagged_iterator_foo [label=\"tagged_iterator_foo\\nBar\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_tagged_iterator [label=\"tagged_iterator\\nBar\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_runtime_error [label=\"runtime_error\\nstdClass\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_errored_definition [label=\"errored_definition\\nstdClass\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_foo2 [label=\"foo2\\n\\n\", shape=record, fillcolor=\"#ff9999\", style=\"filled\"];
  node_foo3 [label=\"foo3\\n\\n\", shape=record, fillcolor=\"#ff9999\", style=\"filled\"];
  node_foobaz [label=\"foobaz\\n\\n\", shape=record, fillcolor=\"#ff9999\", style=\"filled\"];
  node_invalid [label=\"invalid\\n\\n\", shape=record, fillcolor=\"#ff9999\", style=\"filled\"];
  node_foo -> node_foo_baz [label=\"\" style=\"filled\"];
  node_foo -> node_service_container [label=\"\" style=\"filled\"];
  node_foo -> node_foo_baz [label=\"\" style=\"dashed\"];
  node_foo -> node_bar [label=\"setBar()\" style=\"dashed\"];
  node_bar -> node_foo_baz [label=\"\" style=\"filled\"];
  node_foo_bar -> node_deprecated_service [label=\"\" style=\"filled\"];
  node_method_call1 -> node_foo [label=\"setBar()\" style=\"dashed\"];
  node_method_call1 -> node_foo2 [label=\"setBar()\" style=\"dashed\"];
  node_method_call1 -> node_foo3 [label=\"setBar()\" style=\"dashed\"];
  node_method_call1 -> node_foobaz [label=\"setBar()\" style=\"dashed\"];
  node_foo_with_inline -> node_inlined [label=\"setBar()\" style=\"dashed\"];
  node_inlined -> node_baz [label=\"setBaz()\" style=\"dashed\"];
  node_baz -> node_foo_with_inline [label=\"setFoo()\" style=\"dashed\"];
  node_configurator_service -> node_baz [label=\"setFoo()\" style=\"dashed\"];
  node_lazy_context -> node_foo_baz [label=\"\" style=\"filled\" color=\"#9999ff\"];
  node_lazy_context -> node_service_container [label=\"\" style=\"filled\" color=\"#9999ff\"];
  node_lazy_context_ignore_invalid_ref -> node_foo_baz [label=\"\" style=\"filled\" color=\"#9999ff\"];
  node_lazy_context_ignore_invalid_ref -> node_invalid [label=\"\" style=\"filled\" color=\"#9999ff\"];
  node_BAR -> node_bar [label=\"\" style=\"dashed\"];
  node_runtime_error -> node_errored_definition [label=\"\" style=\"filled\"];
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Fixtures/graphviz/services9.dot";
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
  node_foo [label=\"foo (alias_for_foo)\\nBar\\\\FooClass\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_foo_baz [label=\"foo.baz\\nBazClass\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_bar [label=\"bar\\nBar\\\\FooClass\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_foo_bar [label=\"foo_bar\\nBar\\\\FooClass\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"dotted\"];
  node_method_call1 [label=\"method_call1\\nBar\\\\FooClass\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_foo_with_inline [label=\"foo_with_inline\\nFoo\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_inlined [label=\"inlined\\nBar\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_baz [label=\"baz\\nBaz\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_request [label=\"request\\nRequest\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_configurator_service [label=\"configurator_service\\nConfClass\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_configured_service [label=\"configured_service\\nstdClass\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_configurator_service_simple [label=\"configurator_service_simple\\nConfClass\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_configured_service_simple [label=\"configured_service_simple\\nstdClass\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_decorated [label=\"decorated\\nstdClass\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_decorator_service [label=\"decorator_service\\nstdClass\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_decorator_service_with_name [label=\"decorator_service_with_name\\nstdClass\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_deprecated_service [label=\"deprecated_service\\nstdClass\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_new_factory [label=\"new_factory\\nFactoryClass\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_factory_service [label=\"factory_service\\nBar\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_new_factory_service [label=\"new_factory_service\\nFooBarBaz\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_service_from_static_method [label=\"service_from_static_method\\nBar\\\\FooClass\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_factory_simple [label=\"factory_simple\\nSimpleFactoryClass\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_factory_service_simple [label=\"factory_service_simple\\nBar\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_lazy_context [label=\"lazy_context\\nLazyContext\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_lazy_context_ignore_invalid_ref [label=\"lazy_context_ignore_invalid_ref\\nLazyContext\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_BAR [label=\"BAR\\nstdClass\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_bar2 [label=\"bar2\\nstdClass\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_BAR2 [label=\"BAR2\\nstdClass\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_tagged_iterator_foo [label=\"tagged_iterator_foo\\nBar\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_tagged_iterator [label=\"tagged_iterator\\nBar\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_runtime_error [label=\"runtime_error\\nstdClass\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_errored_definition [label=\"errored_definition\\nstdClass\\n\", shape=record, fillcolor=\"#eeeeee\", style=\"filled\"];
  node_foo2 [label=\"foo2\\n\\n\", shape=record, fillcolor=\"#ff9999\", style=\"filled\"];
  node_foo3 [label=\"foo3\\n\\n\", shape=record, fillcolor=\"#ff9999\", style=\"filled\"];
  node_foobaz [label=\"foobaz\\n\\n\", shape=record, fillcolor=\"#ff9999\", style=\"filled\"];
  node_invalid [label=\"invalid\\n\\n\", shape=record, fillcolor=\"#ff9999\", style=\"filled\"];
  node_foo -> node_foo_baz [label=\"\" style=\"filled\"];
  node_foo -> node_service_container [label=\"\" style=\"filled\"];
  node_foo -> node_foo_baz [label=\"\" style=\"dashed\"];
  node_foo -> node_bar [label=\"setBar()\" style=\"dashed\"];
  node_bar -> node_foo_baz [label=\"\" style=\"filled\"];
  node_foo_bar -> node_deprecated_service [label=\"\" style=\"filled\"];
  node_method_call1 -> node_foo [label=\"setBar()\" style=\"dashed\"];
  node_method_call1 -> node_foo2 [label=\"setBar()\" style=\"dashed\"];
  node_method_call1 -> node_foo3 [label=\"setBar()\" style=\"dashed\"];
  node_method_call1 -> node_foobaz [label=\"setBar()\" style=\"dashed\"];
  node_foo_with_inline -> node_inlined [label=\"setBar()\" style=\"dashed\"];
  node_inlined -> node_baz [label=\"setBaz()\" style=\"dashed\"];
  node_baz -> node_foo_with_inline [label=\"setFoo()\" style=\"dashed\"];
  node_configurator_service -> node_baz [label=\"setFoo()\" style=\"dashed\"];
  node_lazy_context -> node_foo_baz [label=\"\" style=\"filled\" color=\"#9999ff\"];
  node_lazy_context -> node_service_container [label=\"\" style=\"filled\" color=\"#9999ff\"];
  node_lazy_context_ignore_invalid_ref -> node_foo_baz [label=\"\" style=\"filled\" color=\"#9999ff\"];
  node_lazy_context_ignore_invalid_ref -> node_invalid [label=\"\" style=\"filled\" color=\"#9999ff\"];
  node_BAR -> node_bar [label=\"\" style=\"dashed\"];
  node_runtime_error -> node_errored_definition [label=\"\" style=\"filled\"];
}
", "vendor/symfony/dependency-injection/Tests/Fixtures/graphviz/services9.dot", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Fixtures/graphviz/services9.dot");
    }
}
