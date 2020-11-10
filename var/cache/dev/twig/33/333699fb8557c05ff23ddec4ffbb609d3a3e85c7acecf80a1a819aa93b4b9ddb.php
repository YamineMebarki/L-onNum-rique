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

/* vendor/symfony/http-foundation/Tests/schema/http-status-codes.rng */
class __TwigTemplate_c17e1fcaec2435fd7b45ca28fa1f2bb5e4f1e120d4ed2d9dc71182ea5989db19 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/schema/http-status-codes.rng"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/schema/http-status-codes.rng"));

        // line 1
        echo "<?xml version='1.0'?>
<grammar xmlns=\"http://relaxng.org/ns/structure/1.0\"
  datatypeLibrary=\"http://www.w3.org/2001/XMLSchema-datatypes\"
  ns=\"http://www.iana.org/assignments\">

  <include href=\"iana-registry.rng\"/>

  <start>
    <element name=\"registry\">
      <ref name=\"registryMeta\"/>
      <element name=\"registry\">
        <ref name=\"registryMeta\"/>
        <zeroOrMore>
          <element name=\"record\">
            <optional>
              <attribute name=\"date\"><ref name=\"genericDate\"/></attribute>
            </optional>
            <optional>
              <attribute name=\"updated\"><ref name=\"genericDate\"/></attribute>
            </optional>
            <element name=\"value\"><ref name=\"genericRange\"/></element>
            <element name=\"description\"><text/></element>
            <ref name=\"references\"/>
          </element>
        </zeroOrMore>
      </element>
      <ref name=\"people\"/>
    </element>
  </start>

</grammar>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/Tests/schema/http-status-codes.rng";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version='1.0'?>
<grammar xmlns=\"http://relaxng.org/ns/structure/1.0\"
  datatypeLibrary=\"http://www.w3.org/2001/XMLSchema-datatypes\"
  ns=\"http://www.iana.org/assignments\">

  <include href=\"iana-registry.rng\"/>

  <start>
    <element name=\"registry\">
      <ref name=\"registryMeta\"/>
      <element name=\"registry\">
        <ref name=\"registryMeta\"/>
        <zeroOrMore>
          <element name=\"record\">
            <optional>
              <attribute name=\"date\"><ref name=\"genericDate\"/></attribute>
            </optional>
            <optional>
              <attribute name=\"updated\"><ref name=\"genericDate\"/></attribute>
            </optional>
            <element name=\"value\"><ref name=\"genericRange\"/></element>
            <element name=\"description\"><text/></element>
            <ref name=\"references\"/>
          </element>
        </zeroOrMore>
      </element>
      <ref name=\"people\"/>
    </element>
  </start>

</grammar>
", "vendor/symfony/http-foundation/Tests/schema/http-status-codes.rng", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/Tests/schema/http-status-codes.rng");
    }
}
