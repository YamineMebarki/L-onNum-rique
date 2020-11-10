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

/* vendor/symfony/framework-bundle/Resources/config/templating_debug.xml */
class __TwigTemplate_c9b70e96cb7de00004170a9607c61d09cb566486566e25b9202532e0dc893497 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Resources/config/templating_debug.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Resources/config/templating_debug.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <defaults public=\"false\" />

        <service id=\"debug.templating.engine.php\" class=\"Symfony\\Bundle\\FrameworkBundle\\Templating\\TimedPhpEngine\">
            <argument type=\"service\" id=\"templating.name_parser\" />
            <argument type=\"service\" id=\"templating.engine.php.helpers_locator\" />
            <argument type=\"service\" id=\"templating.loader\" />
            <argument type=\"service\" id=\"debug.stopwatch\" />
            <argument type=\"service\" id=\"templating.globals\" />
            <call method=\"setCharset\"><argument>%kernel.charset%</argument></call>

            <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.3 and will be removed in 5.0.</deprecated>
        </service>
    </services>
</container>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Resources/config/templating_debug.xml";
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

        <service id=\"debug.templating.engine.php\" class=\"Symfony\\Bundle\\FrameworkBundle\\Templating\\TimedPhpEngine\">
            <argument type=\"service\" id=\"templating.name_parser\" />
            <argument type=\"service\" id=\"templating.engine.php.helpers_locator\" />
            <argument type=\"service\" id=\"templating.loader\" />
            <argument type=\"service\" id=\"debug.stopwatch\" />
            <argument type=\"service\" id=\"templating.globals\" />
            <call method=\"setCharset\"><argument>%kernel.charset%</argument></call>

            <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.3 and will be removed in 5.0.</deprecated>
        </service>
    </services>
</container>
", "vendor/symfony/framework-bundle/Resources/config/templating_debug.xml", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Resources/config/templating_debug.xml");
    }
}
