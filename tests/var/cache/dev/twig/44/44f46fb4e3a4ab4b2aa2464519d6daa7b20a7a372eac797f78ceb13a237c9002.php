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

/* vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/builder_1_tags.xml */
class __TwigTemplate_eac4ea9daac0b877eb5db785ea7883d873303f80bf3964131d3e8535041464f2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/builder_1_tags.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/builder_1_tags.xml"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<container>
  <tag name=\"tag1\">
    <definition id=\".definition_2\" class=\"Full\\Qualified\\Class2\" public=\"false\" synthetic=\"true\" lazy=\"false\" shared=\"true\" abstract=\"false\" autowired=\"false\" autoconfigured=\"false\" file=\"/path/to/file\">
      <factory service=\"factory.service\" method=\"get\"/>
      <calls>
        <call method=\"setMailer\"/>
      </calls>
    </definition>
  </tag>
  <tag name=\"tag2\">
    <definition id=\".definition_2\" class=\"Full\\Qualified\\Class2\" public=\"false\" synthetic=\"true\" lazy=\"false\" shared=\"true\" abstract=\"false\" autowired=\"false\" autoconfigured=\"false\" file=\"/path/to/file\">
      <factory service=\"factory.service\" method=\"get\"/>
      <calls>
        <call method=\"setMailer\"/>
      </calls>
    </definition>
  </tag>
</container>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/builder_1_tags.xml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<container>
  <tag name=\"tag1\">
    <definition id=\".definition_2\" class=\"Full\\Qualified\\Class2\" public=\"false\" synthetic=\"true\" lazy=\"false\" shared=\"true\" abstract=\"false\" autowired=\"false\" autoconfigured=\"false\" file=\"/path/to/file\">
      <factory service=\"factory.service\" method=\"get\"/>
      <calls>
        <call method=\"setMailer\"/>
      </calls>
    </definition>
  </tag>
  <tag name=\"tag2\">
    <definition id=\".definition_2\" class=\"Full\\Qualified\\Class2\" public=\"false\" synthetic=\"true\" lazy=\"false\" shared=\"true\" abstract=\"false\" autowired=\"false\" autoconfigured=\"false\" file=\"/path/to/file\">
      <factory service=\"factory.service\" method=\"get\"/>
      <calls>
        <call method=\"setMailer\"/>
      </calls>
    </definition>
  </tag>
</container>
", "vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/builder_1_tags.xml", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/builder_1_tags.xml");
    }
}
