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

/* vendor/symfony/translation/Tests/fixtures/plurals.mo */
class __TwigTemplate_d0d29a6a090e7976ee5dca9b3659f077801b7436d3ecd827bbeb332b828caf74 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/fixtures/plurals.mo"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/fixtures/plurals.mo"));

        // line 1
        echo "Þ•\000\000\000\000\000\000\000\000\000\0004\000\000\000\000\000\000L\000\000\000\000\000\000\000`\000\000\000\000\000\000a\000\000\000 \000\000\000j\000\000\000
\000\000‹\000\000\000\000\000\000–\000\000 \000\000\000Ÿ\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000foo\000foos\000{0} no foos|one foo|%count% foos\000Plural-Forms: nplurals=2; plural=(n != 1);
Project-Id-Version: 
POT-Creation-Date: 
PO-Revision-Date: 
Last-Translator: 
Language-Team: 
MIME-Version: 1.0
Content-Type: text/plain; charset=UTF-8
Content-Transfer-Encoding: 8bit
Language: en
X-Generator: Poedit 2.2.1
\000bar\000bars\000{0} no bars|one bar|%count% bars\000";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/Tests/fixtures/plurals.mo";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Þ•\000\000\000\000\000\000\000\000\000\0004\000\000\000\000\000\000L\000\000\000\000\000\000\000`\000\000\000\000\000\000a\000\000\000 \000\000\000j\000\000\000
\000\000‹\000\000\000\000\000\000–\000\000 \000\000\000Ÿ\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000foo\000foos\000{0} no foos|one foo|%count% foos\000Plural-Forms: nplurals=2; plural=(n != 1);
Project-Id-Version: 
POT-Creation-Date: 
PO-Revision-Date: 
Last-Translator: 
Language-Team: 
MIME-Version: 1.0
Content-Type: text/plain; charset=UTF-8
Content-Transfer-Encoding: 8bit
Language: en
X-Generator: Poedit 2.2.1
\000bar\000bars\000{0} no bars|one bar|%count% bars\000", "vendor/symfony/translation/Tests/fixtures/plurals.mo", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Tests/fixtures/plurals.mo");
    }
}
