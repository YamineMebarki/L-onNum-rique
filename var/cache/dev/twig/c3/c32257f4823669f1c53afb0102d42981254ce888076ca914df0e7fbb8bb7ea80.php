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

/* vendor/symfony/dependency-injection/Tests/Fixtures/xml/extensions/services1.xml */
class __TwigTemplate_86892e037d9d817edb07d4a9904cae2eb2e09f3f8143f4bd7c191482c15ca98e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/xml/extensions/services1.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/xml/extensions/services1.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:project=\"http://www.example.com/schema/project\">

    <parameters>
        <parameter key=\"project.parameter.foo\">BAR</parameter>
    </parameters>

    <services>
        <service id=\"project.service.foo\" class=\"BAR\" public=\"true\"/>
    </services>

    <project:bar babar=\"babar\">
        <another />
        <another2>%project.parameter.foo%</another2>
    </project:bar>

</container>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Fixtures/xml/extensions/services1.xml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:project=\"http://www.example.com/schema/project\">

    <parameters>
        <parameter key=\"project.parameter.foo\">BAR</parameter>
    </parameters>

    <services>
        <service id=\"project.service.foo\" class=\"BAR\" public=\"true\"/>
    </services>

    <project:bar babar=\"babar\">
        <another />
        <another2>%project.parameter.foo%</another2>
    </project:bar>

</container>
", "vendor/symfony/dependency-injection/Tests/Fixtures/xml/extensions/services1.xml", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Fixtures/xml/extensions/services1.xml");
    }
}
