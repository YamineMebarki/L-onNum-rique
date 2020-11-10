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

/* vendor/symfony/translation/Tests/fixtures/resources-2.0.xlf */
class __TwigTemplate_440836b41779899a838aee80ea2acb56cc735e896828e28b32a35d88d32827c7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/fixtures/resources-2.0.xlf"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/fixtures/resources-2.0.xlf"));

        // line 1
        echo "<xliff xmlns=\"urn:oasis:names:tc:xliff:document:2.0\" version=\"2.0\" srcLang=\"en-US\" trgLang=\"ja-JP\">
    <file id=\"f1\" original=\"Graphic Example.psd\">
        <skeleton href=\"Graphic Example.psd.skl\"/>
        <unit id=\"1\">
            <segment>
                <source>Quetzal</source>
                <target>Quetzal</target>
            </segment>
        </unit>
        <group id=\"1\">
            <unit id=\"2\">
                <segment>
                    <source>foo</source>
                    <target>XLIFF 文書を編集、または処理 するアプリケーションです。</target>
                </segment>
            </unit>
            <unit id=\"3\">
                <segment>
                    <source>bar</source>
                    <target order=\"1\">XLIFF データ・マネージャ</target>
                </segment>
            </unit>
        </group>
    </file>
</xliff>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/Tests/fixtures/resources-2.0.xlf";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<xliff xmlns=\"urn:oasis:names:tc:xliff:document:2.0\" version=\"2.0\" srcLang=\"en-US\" trgLang=\"ja-JP\">
    <file id=\"f1\" original=\"Graphic Example.psd\">
        <skeleton href=\"Graphic Example.psd.skl\"/>
        <unit id=\"1\">
            <segment>
                <source>Quetzal</source>
                <target>Quetzal</target>
            </segment>
        </unit>
        <group id=\"1\">
            <unit id=\"2\">
                <segment>
                    <source>foo</source>
                    <target>XLIFF 文書を編集、または処理 するアプリケーションです。</target>
                </segment>
            </unit>
            <unit id=\"3\">
                <segment>
                    <source>bar</source>
                    <target order=\"1\">XLIFF データ・マネージャ</target>
                </segment>
            </unit>
        </group>
    </file>
</xliff>
", "vendor/symfony/translation/Tests/fixtures/resources-2.0.xlf", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Tests/fixtures/resources-2.0.xlf");
    }
}
