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

/* vendor/symfony/translation/Tests/fixtures/resources-2.0-multi-segment-unit.xlf */
class __TwigTemplate_20903d46c74193260e01dc5a12c058ea8f121fe28adf8bd9a89d75f0db4f0621 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/fixtures/resources-2.0-multi-segment-unit.xlf"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/fixtures/resources-2.0-multi-segment-unit.xlf"));

        // line 1
        echo "<xliff xmlns=\"urn:oasis:names:tc:xliff:document:2.0\" version=\"2.0\" srcLang=\"en-US\" trgLang=\"en-US\">
    <file id=\"f1\">
        <unit id=\"1\">
            <notes>
                <note category=\"processed\">true</note>
            </notes>
            <segment id=\"id-foo\">
                <source>foo</source>
                <target>foo (translated)</target>
            </segment>
            <segment id=\"id-bar\">
                <source>bar</source>
                <target>bar (translated)</target>
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
        return "vendor/symfony/translation/Tests/fixtures/resources-2.0-multi-segment-unit.xlf";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<xliff xmlns=\"urn:oasis:names:tc:xliff:document:2.0\" version=\"2.0\" srcLang=\"en-US\" trgLang=\"en-US\">
    <file id=\"f1\">
        <unit id=\"1\">
            <notes>
                <note category=\"processed\">true</note>
            </notes>
            <segment id=\"id-foo\">
                <source>foo</source>
                <target>foo (translated)</target>
            </segment>
            <segment id=\"id-bar\">
                <source>bar</source>
                <target>bar (translated)</target>
            </segment>
        </unit>
    </file>
</xliff>
", "vendor/symfony/translation/Tests/fixtures/resources-2.0-multi-segment-unit.xlf", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Tests/fixtures/resources-2.0-multi-segment-unit.xlf");
    }
}
