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

/* vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/xml/assets.xml */
class __TwigTemplate_742e9ed418411d5bcaebc7367809158794c6633c6b0157ba9d931e01d3022276 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/xml/assets.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/xml/assets.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xmlns:framework=\"http://symfony.com/schema/dic/symfony\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd
                        http://symfony.com/schema/dic/symfony https://symfony.com/schema/dic/symfony/symfony-1.0.xsd\">

    <framework:config>
        <framework:assets version=\"SomeVersionScheme\" version-format=\"%%s?version=%%s\">
            <framework:base-url>http://cdn.example.com</framework:base-url>
            <framework:package name=\"images_path\" base-path=\"/foo\" version-format=\"%%s-%%s\" />
            <framework:package name=\"images\" version=\"1.0.0\">
                <framework:base-url>http://images1.example.com</framework:base-url>
                <framework:base-url>http://images2.example.com</framework:base-url>
            </framework:package>
            <framework:package name=\"foo\" version=\"1.0.0\" version-format=\"%%s-%%s\" />
            <framework:package name=\"bar\">
                <framework:base-url>https://bar2.example.com</framework:base-url>
            </framework:package>
            <framework:package name=\"bar_version_strategy\" version-strategy=\"assets.custom_version_strategy\">
                <framework:base-url>https://bar_version_strategy.example.com</framework:base-url>
            </framework:package>
            <framework:package name=\"json_manifest_strategy\" json-manifest-path=\"/path/to/manifest.json\" />
        </framework:assets>
    </framework:config>
</container>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/xml/assets.xml";
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
    xmlns:framework=\"http://symfony.com/schema/dic/symfony\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd
                        http://symfony.com/schema/dic/symfony https://symfony.com/schema/dic/symfony/symfony-1.0.xsd\">

    <framework:config>
        <framework:assets version=\"SomeVersionScheme\" version-format=\"%%s?version=%%s\">
            <framework:base-url>http://cdn.example.com</framework:base-url>
            <framework:package name=\"images_path\" base-path=\"/foo\" version-format=\"%%s-%%s\" />
            <framework:package name=\"images\" version=\"1.0.0\">
                <framework:base-url>http://images1.example.com</framework:base-url>
                <framework:base-url>http://images2.example.com</framework:base-url>
            </framework:package>
            <framework:package name=\"foo\" version=\"1.0.0\" version-format=\"%%s-%%s\" />
            <framework:package name=\"bar\">
                <framework:base-url>https://bar2.example.com</framework:base-url>
            </framework:package>
            <framework:package name=\"bar_version_strategy\" version-strategy=\"assets.custom_version_strategy\">
                <framework:base-url>https://bar_version_strategy.example.com</framework:base-url>
            </framework:package>
            <framework:package name=\"json_manifest_strategy\" json-manifest-path=\"/path/to/manifest.json\" />
        </framework:assets>
    </framework:config>
</container>
", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/xml/assets.xml", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/xml/assets.xml");
    }
}
