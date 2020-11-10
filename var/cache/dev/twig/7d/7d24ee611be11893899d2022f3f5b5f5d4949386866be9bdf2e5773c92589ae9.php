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

/* vendor/symfony/twig-bundle/Resources/config/console.xml */
class __TwigTemplate_6a54586b84526757b2b7229ea46b478257feec8bc89f9ec1e1f31589c6464925 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bundle/Resources/config/console.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bundle/Resources/config/console.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <defaults public=\"false\" />

        <service id=\"twig.command.debug\" class=\"Symfony\\Bridge\\Twig\\Command\\DebugCommand\">
            <argument type=\"service\" id=\"twig\" />
            <argument>%kernel.project_dir%</argument>
            <argument>%kernel.bundles_metadata%</argument>
            <argument>%twig.default_path%</argument>
            <argument>%kernel.root_dir%</argument>
            <argument type=\"service\" id=\"debug.file_link_formatter\" on-invalid=\"null\" />
            <tag name=\"console.command\" command=\"debug:twig\" />
        </service>

        <service id=\"twig.command.lint\" class=\"Symfony\\Bundle\\TwigBundle\\Command\\LintCommand\">
            <argument type=\"service\" id=\"twig\" />
            <tag name=\"console.command\" command=\"lint:twig\" />
        </service>
    </services>
</container>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bundle/Resources/config/console.xml";
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
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <defaults public=\"false\" />

        <service id=\"twig.command.debug\" class=\"Symfony\\Bridge\\Twig\\Command\\DebugCommand\">
            <argument type=\"service\" id=\"twig\" />
            <argument>%kernel.project_dir%</argument>
            <argument>%kernel.bundles_metadata%</argument>
            <argument>%twig.default_path%</argument>
            <argument>%kernel.root_dir%</argument>
            <argument type=\"service\" id=\"debug.file_link_formatter\" on-invalid=\"null\" />
            <tag name=\"console.command\" command=\"debug:twig\" />
        </service>

        <service id=\"twig.command.lint\" class=\"Symfony\\Bundle\\TwigBundle\\Command\\LintCommand\">
            <argument type=\"service\" id=\"twig\" />
            <tag name=\"console.command\" command=\"lint:twig\" />
        </service>
    </services>
</container>
", "vendor/symfony/twig-bundle/Resources/config/console.xml", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bundle/Resources/config/console.xml");
    }
}
