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

/* vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/definition_arguments_2.xml */
class __TwigTemplate_a84d7350f3b77be2b30f13ddc370b0ee560c29b3a1bdb8ba6026b796a8a0a1a5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/definition_arguments_2.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/definition_arguments_2.xml"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<definition class=\"Full\\Qualified\\Class2\" public=\"false\" synthetic=\"true\" lazy=\"false\" shared=\"true\" abstract=\"false\" autowired=\"false\" autoconfigured=\"false\" file=\"/path/to/file\">
  <factory service=\"factory.service\" method=\"get\"/>
  <calls>
    <call method=\"setMailer\"/>
  </calls>
  <tags>
    <tag name=\"tag1\">
      <parameter name=\"attr1\">val1</parameter>
      <parameter name=\"attr2\">val2</parameter>
    </tag>
    <tag name=\"tag1\">
      <parameter name=\"attr3\">val3</parameter>
    </tag>
    <tag name=\"tag2\"/>
  </tags>
</definition>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/definition_arguments_2.xml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<definition class=\"Full\\Qualified\\Class2\" public=\"false\" synthetic=\"true\" lazy=\"false\" shared=\"true\" abstract=\"false\" autowired=\"false\" autoconfigured=\"false\" file=\"/path/to/file\">
  <factory service=\"factory.service\" method=\"get\"/>
  <calls>
    <call method=\"setMailer\"/>
  </calls>
  <tags>
    <tag name=\"tag1\">
      <parameter name=\"attr1\">val1</parameter>
      <parameter name=\"attr2\">val2</parameter>
    </tag>
    <tag name=\"tag1\">
      <parameter name=\"attr3\">val3</parameter>
    </tag>
    <tag name=\"tag2\"/>
  </tags>
</definition>
", "vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/definition_arguments_2.xml", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/definition_arguments_2.xml");
    }
}
