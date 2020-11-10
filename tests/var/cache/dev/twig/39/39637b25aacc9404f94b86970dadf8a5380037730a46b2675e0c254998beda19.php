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

/* vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/builder_1_public.xml */
class __TwigTemplate_09a53aa41d46ad8eaaf4980c3fc5b147070a144d946d7948f037b8f7282bf65b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/builder_1_public.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/builder_1_public.xml"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<container>
  <alias id=\"alias_1\" service=\"service_1\" public=\"true\"/>
  <definition id=\"definition_1\" class=\"Full\\Qualified\\Class1\" public=\"true\" synthetic=\"false\" lazy=\"true\" shared=\"true\" abstract=\"true\" autowired=\"false\" autoconfigured=\"false\" file=\"\">
    <factory class=\"Full\\Qualified\\FactoryClass\" method=\"get\"/>
  </definition>
  <definition id=\"definition_without_class\" class=\"\" public=\"false\" synthetic=\"false\" lazy=\"false\" shared=\"true\" abstract=\"false\" autowired=\"false\" autoconfigured=\"false\" file=\"\"/>
  <definition id=\"service_container\" class=\"Symfony\\Component\\DependencyInjection\\ContainerInterface\" public=\"true\" synthetic=\"true\" lazy=\"false\" shared=\"true\" abstract=\"false\" autowired=\"false\" autoconfigured=\"false\" file=\"\">
    <description><![CDATA[ContainerInterface is the interface implemented by service container classes.]]></description>
  </definition>
</container>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/builder_1_public.xml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<container>
  <alias id=\"alias_1\" service=\"service_1\" public=\"true\"/>
  <definition id=\"definition_1\" class=\"Full\\Qualified\\Class1\" public=\"true\" synthetic=\"false\" lazy=\"true\" shared=\"true\" abstract=\"true\" autowired=\"false\" autoconfigured=\"false\" file=\"\">
    <factory class=\"Full\\Qualified\\FactoryClass\" method=\"get\"/>
  </definition>
  <definition id=\"definition_without_class\" class=\"\" public=\"false\" synthetic=\"false\" lazy=\"false\" shared=\"true\" abstract=\"false\" autowired=\"false\" autoconfigured=\"false\" file=\"\"/>
  <definition id=\"service_container\" class=\"Symfony\\Component\\DependencyInjection\\ContainerInterface\" public=\"true\" synthetic=\"true\" lazy=\"false\" shared=\"true\" abstract=\"false\" autowired=\"false\" autoconfigured=\"false\" file=\"\">
    <description><![CDATA[ContainerInterface is the interface implemented by service container classes.]]></description>
  </definition>
</container>
", "vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/builder_1_public.xml", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/builder_1_public.xml");
    }
}
