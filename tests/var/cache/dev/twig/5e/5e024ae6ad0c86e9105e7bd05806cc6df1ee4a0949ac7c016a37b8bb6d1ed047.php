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

/* vendor/symfony/twig-bundle/Tests/DependencyInjection/Fixtures/xml/full.xml */
class __TwigTemplate_8c15fedab399c425aec0fe836293423c66014557a3c1bbbcacb0ed84bb67175f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bundle/Tests/DependencyInjection/Fixtures/xml/full.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bundle/Tests/DependencyInjection/Fixtures/xml/full.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xmlns:twig=\"http://symfony.com/schema/dic/twig\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd
                        http://symfony.com/schema/dic/twig https://symfony.com/schema/dic/twig/twig-1.0.xsd\">

    <twig:config auto-reload=\"true\" autoescape=\"true\" base-template-class=\"stdClass\" cache=\"/tmp\" charset=\"ISO-8859-1\" debug=\"true\" strict-variables=\"true\" default-path=\"%kernel.project_dir%/Fixtures/templates\">
        <twig:form-theme>MyBundle::form.html.twig</twig:form-theme>
        <twig:global key=\"foo\" id=\"bar\" type=\"service\" />
        <twig:global key=\"baz\">@@qux</twig:global>
        <twig:global key=\"pi\">3.14</twig:global>
        <twig:path>path1</twig:path>
        <twig:path>path2</twig:path>
        <twig:path namespace=\"namespace1\">namespaced_path1</twig:path>
        <twig:path namespace=\"namespace2\">namespaced_path2</twig:path>
    </twig:config>
</container>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bundle/Tests/DependencyInjection/Fixtures/xml/full.xml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xmlns:twig=\"http://symfony.com/schema/dic/twig\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd
                        http://symfony.com/schema/dic/twig https://symfony.com/schema/dic/twig/twig-1.0.xsd\">

    <twig:config auto-reload=\"true\" autoescape=\"true\" base-template-class=\"stdClass\" cache=\"/tmp\" charset=\"ISO-8859-1\" debug=\"true\" strict-variables=\"true\" default-path=\"%kernel.project_dir%/Fixtures/templates\">
        <twig:form-theme>MyBundle::form.html.twig</twig:form-theme>
        <twig:global key=\"foo\" id=\"bar\" type=\"service\" />
        <twig:global key=\"baz\">@@qux</twig:global>
        <twig:global key=\"pi\">3.14</twig:global>
        <twig:path>path1</twig:path>
        <twig:path>path2</twig:path>
        <twig:path namespace=\"namespace1\">namespaced_path1</twig:path>
        <twig:path namespace=\"namespace2\">namespaced_path2</twig:path>
    </twig:config>
</container>
", "vendor/symfony/twig-bundle/Tests/DependencyInjection/Fixtures/xml/full.xml", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bundle/Tests/DependencyInjection/Fixtures/xml/full.xml");
    }
}
