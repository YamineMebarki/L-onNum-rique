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

/* vendor/symfony/css-selector/Tests/XPath/Fixtures/lang.xml */
class __TwigTemplate_6fcd92bafdd522ca4c53336bad57e30f3c43e5abb0ddd6e97ef174371298eb45 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/Tests/XPath/Fixtures/lang.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/Tests/XPath/Fixtures/lang.xml"));

        // line 1
        echo "<test>
  <a id=\"first\" xml:lang=\"en\">a</a>
  <b id=\"second\" xml:lang=\"en-US\">b</b>
  <c id=\"third\" xml:lang=\"en-Nz\">c</c>
  <d id=\"fourth\" xml:lang=\"En-us\">d</d>
  <e id=\"fifth\" xml:lang=\"fr\">e</e>
  <f id=\"sixth\" xml:lang=\"ru\">f</f>
  <g id=\"seventh\" xml:lang=\"de\">
    <h id=\"eighth\" xml:lang=\"zh\"/>
  </g>
</test>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/css-selector/Tests/XPath/Fixtures/lang.xml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<test>
  <a id=\"first\" xml:lang=\"en\">a</a>
  <b id=\"second\" xml:lang=\"en-US\">b</b>
  <c id=\"third\" xml:lang=\"en-Nz\">c</c>
  <d id=\"fourth\" xml:lang=\"En-us\">d</d>
  <e id=\"fifth\" xml:lang=\"fr\">e</e>
  <f id=\"sixth\" xml:lang=\"ru\">f</f>
  <g id=\"seventh\" xml:lang=\"de\">
    <h id=\"eighth\" xml:lang=\"zh\"/>
  </g>
</test>
", "vendor/symfony/css-selector/Tests/XPath/Fixtures/lang.xml", "/var/www/public/DevLaon/templates/vendor/symfony/css-selector/Tests/XPath/Fixtures/lang.xml");
    }
}
