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

/* vendor/symfony/translation/Tests/fixtures/resources-2.0-clean.xlf */
class __TwigTemplate_ababc9c0aeff43e8250fcb2d4fbe076cf53e907ab94ff8b1b536dc2a9cb6219c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/fixtures/resources-2.0-clean.xlf"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/fixtures/resources-2.0-clean.xlf"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<xliff xmlns=\"urn:oasis:names:tc:xliff:document:2.0\" version=\"2.0\" srcLang=\"fr-FR\" trgLang=\"en-US\">
  <file id=\"messages.en_US\">
    <unit id=\"LCa0a2j\" name=\"foo\">
      <segment>
        <source>foo</source>
        <target>bar</target>
      </segment>
    </unit>
    <unit id=\"LHDhK3o\" name=\"key\">
      <segment>
        <source>key</source>
        <target order=\"1\"></target>
      </segment>
    </unit>
    <unit id=\"2DA_bnh\" name=\"key.with.cdata\">
      <segment>
        <source>key.with.cdata</source>
        <target><![CDATA[<source> & <target>]]></target>
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
        return "vendor/symfony/translation/Tests/fixtures/resources-2.0-clean.xlf";
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
      <segment>
        <source>foo</source>
        <target>bar</target>
      </segment>
    </unit>
    <unit id=\"LHDhK3o\" name=\"key\">
      <segment>
        <source>key</source>
        <target order=\"1\"></target>
      </segment>
    </unit>
    <unit id=\"2DA_bnh\" name=\"key.with.cdata\">
      <segment>
        <source>key.with.cdata</source>
        <target><![CDATA[<source> & <target>]]></target>
      </segment>
    </unit>
  </file>
</xliff>
", "vendor/symfony/translation/Tests/fixtures/resources-2.0-clean.xlf", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Tests/fixtures/resources-2.0-clean.xlf");
    }
}
