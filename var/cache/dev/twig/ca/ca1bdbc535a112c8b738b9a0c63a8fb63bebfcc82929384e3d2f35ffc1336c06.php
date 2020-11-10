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

/* vendor/symfony/translation/Tests/fixtures/resources-notes-meta.xlf */
class __TwigTemplate_d3b86beb0e15be5a8c331c89b1464e7bdfe9ecfca66d31d5315681b813a78543 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/fixtures/resources-notes-meta.xlf"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/fixtures/resources-notes-meta.xlf"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<xliff xmlns=\"urn:oasis:names:tc:xliff:document:2.0\" version=\"2.0\" srcLang=\"fr-FR\" trgLang=\"en-US\">
  <file id=\"messages.en_US\">
    <unit id=\"LCa0a2j\" name=\"foo\">
      <notes>
        <note category=\"state\">new</note>
        <note category=\"approved\">true</note>
        <note category=\"section\" priority=\"1\">user login</note>
      </notes>
      <segment>
        <source>foo</source>
        <target>bar</target>
      </segment>
    </unit>
    <unit id=\"uqWglk0\" name=\"baz\">
      <notes>
        <note id=\"x\">x_content</note>
        <note appliesTo=\"target\" category=\"quality\">Fuzzy</note>
      </notes>
      <segment>
        <source>baz</source>
        <target>biz</target>
      </segment>
    </unit>
  </file>
</xliff>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/Tests/fixtures/resources-notes-meta.xlf";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"utf-8\"?>
<xliff xmlns=\"urn:oasis:names:tc:xliff:document:2.0\" version=\"2.0\" srcLang=\"fr-FR\" trgLang=\"en-US\">
  <file id=\"messages.en_US\">
    <unit id=\"LCa0a2j\" name=\"foo\">
      <notes>
        <note category=\"state\">new</note>
        <note category=\"approved\">true</note>
        <note category=\"section\" priority=\"1\">user login</note>
      </notes>
      <segment>
        <source>foo</source>
        <target>bar</target>
      </segment>
    </unit>
    <unit id=\"uqWglk0\" name=\"baz\">
      <notes>
        <note id=\"x\">x_content</note>
        <note appliesTo=\"target\" category=\"quality\">Fuzzy</note>
      </notes>
      <segment>
        <source>baz</source>
        <target>biz</target>
      </segment>
    </unit>
  </file>
</xliff>
", "vendor/symfony/translation/Tests/fixtures/resources-notes-meta.xlf", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Tests/fixtures/resources-notes-meta.xlf");
    }
}
