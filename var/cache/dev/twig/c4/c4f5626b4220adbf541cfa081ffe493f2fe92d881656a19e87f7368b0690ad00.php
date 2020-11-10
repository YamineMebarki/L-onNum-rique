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

/* vendor/symfony/framework-bundle/Resources/config/templating_php.xml */
class __TwigTemplate_488e2e8df3d3938e5876171c6b31b1da8315f1a2f8c0c155224a8f1d0554408f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Resources/config/templating_php.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Resources/config/templating_php.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <defaults public=\"false\" />

        <service id=\"templating.engine.php\" class=\"Symfony\\Bundle\\FrameworkBundle\\Templating\\PhpEngine\">
            <argument type=\"service\" id=\"templating.name_parser\" />
            <argument type=\"service\" id=\"templating.engine.php.helpers_locator\" />
            <argument type=\"service\" id=\"templating.loader\" />
            <argument type=\"service\" id=\"templating.globals\" />
            <call method=\"setCharset\"><argument>%kernel.charset%</argument></call>

            <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.3 and will be removed in 5.0.</deprecated>
        </service>

        <service id=\"templating.engine.php.helpers_locator\">
            <tag name=\"container.service_locator\" />
            <argument type=\"collection\" />
        </service>

        <service id=\"templating.helper.slots\" class=\"Symfony\\Component\\Templating\\Helper\\SlotsHelper\">
            <tag name=\"templating.helper\" alias=\"slots\" />

            <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.3 and will be removed in 5.0.</deprecated>
        </service>

        <service id=\"templating.helper.request\" class=\"Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RequestHelper\">
            <tag name=\"templating.helper\" alias=\"request\" />
            <argument type=\"service\" id=\"request_stack\" />

            <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.3 and will be removed in 5.0.</deprecated>
        </service>

        <service id=\"templating.helper.session\" class=\"Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\SessionHelper\">
            <tag name=\"templating.helper\" alias=\"session\" />
            <argument type=\"service\" id=\"request_stack\" />

            <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.3 and will be removed in 5.0.</deprecated>
        </service>

        <service id=\"templating.helper.router\" class=\"Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RouterHelper\">
            <tag name=\"templating.helper\" alias=\"router\" />
            <argument type=\"service\" id=\"router\" />

            <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.3 and will be removed in 5.0.</deprecated>
        </service>

        <service id=\"templating.helper.assets\" class=\"Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\AssetsHelper\">
            <tag name=\"templating.helper\" alias=\"assets\" />
            <argument /> <!-- packages -->

            <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.3 and will be removed in 5.0.</deprecated>
        </service>

        <service id=\"templating.helper.actions\" class=\"Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\ActionsHelper\">
            <tag name=\"templating.helper\" alias=\"actions\" />
            <argument type=\"service\" id=\"fragment.handler\" />

            <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.3 and will be removed in 5.0.</deprecated>
        </service>

        <service id=\"templating.helper.code\" class=\"Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\CodeHelper\">
            <tag name=\"templating.helper\" alias=\"code\" />
            <argument type=\"service\" id=\"debug.file_link_formatter\"></argument>
            <argument>%kernel.project_dir%</argument>
            <argument>%kernel.charset%</argument>

            <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.3 and will be removed in 5.0.</deprecated>
        </service>

        <service id=\"templating.helper.translator\" class=\"Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\TranslatorHelper\">
            <tag name=\"templating.helper\" alias=\"translator\" />
            <argument type=\"service\" id=\"translator\" on-invalid=\"null\" />

            <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.3 and will be removed in 5.0.</deprecated>
        </service>

        <service id=\"templating.helper.form\" class=\"Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\FormHelper\">
            <tag name=\"templating.helper\" alias=\"form\" />
            <argument type=\"service\" id=\"templating.form.renderer\" />

            <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.3 and will be removed in 5.0.</deprecated>
        </service>

        <service id=\"templating.helper.stopwatch\" class=\"Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\StopwatchHelper\">
            <tag name=\"templating.helper\" alias=\"stopwatch\" />
            <argument type=\"service\" id=\"debug.stopwatch\" on-invalid=\"ignore\" />

            <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.3 and will be removed in 5.0.</deprecated>
        </service>

        <service id=\"templating.form.engine\" class=\"Symfony\\Component\\Form\\Extension\\Templating\\TemplatingRendererEngine\">
            <argument type=\"service\" id=\"templating.engine.php\" />
            <argument>%templating.helper.form.resources%</argument>

            <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.3 and will be removed in 5.0.</deprecated>
        </service>

        <service id=\"templating.form.renderer\" class=\"Symfony\\Component\\Form\\FormRenderer\">
            <argument type=\"service\" id=\"templating.form.engine\" />
            <argument type=\"service\" id=\"security.csrf.token_manager\" on-invalid=\"null\" />

            <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.3 and will be removed in 5.0.</deprecated>
        </service>

        <service id=\"templating.globals\" class=\"Symfony\\Bundle\\FrameworkBundle\\Templating\\GlobalVariables\">
            <argument type=\"service\" id=\"service_container\" />

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
        return "vendor/symfony/framework-bundle/Resources/config/templating_php.xml";
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

        <service id=\"templating.engine.php\" class=\"Symfony\\Bundle\\FrameworkBundle\\Templating\\PhpEngine\">
            <argument type=\"service\" id=\"templating.name_parser\" />
            <argument type=\"service\" id=\"templating.engine.php.helpers_locator\" />
            <argument type=\"service\" id=\"templating.loader\" />
            <argument type=\"service\" id=\"templating.globals\" />
            <call method=\"setCharset\"><argument>%kernel.charset%</argument></call>

            <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.3 and will be removed in 5.0.</deprecated>
        </service>

        <service id=\"templating.engine.php.helpers_locator\">
            <tag name=\"container.service_locator\" />
            <argument type=\"collection\" />
        </service>

        <service id=\"templating.helper.slots\" class=\"Symfony\\Component\\Templating\\Helper\\SlotsHelper\">
            <tag name=\"templating.helper\" alias=\"slots\" />

            <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.3 and will be removed in 5.0.</deprecated>
        </service>

        <service id=\"templating.helper.request\" class=\"Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RequestHelper\">
            <tag name=\"templating.helper\" alias=\"request\" />
            <argument type=\"service\" id=\"request_stack\" />

            <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.3 and will be removed in 5.0.</deprecated>
        </service>

        <service id=\"templating.helper.session\" class=\"Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\SessionHelper\">
            <tag name=\"templating.helper\" alias=\"session\" />
            <argument type=\"service\" id=\"request_stack\" />

            <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.3 and will be removed in 5.0.</deprecated>
        </service>

        <service id=\"templating.helper.router\" class=\"Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RouterHelper\">
            <tag name=\"templating.helper\" alias=\"router\" />
            <argument type=\"service\" id=\"router\" />

            <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.3 and will be removed in 5.0.</deprecated>
        </service>

        <service id=\"templating.helper.assets\" class=\"Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\AssetsHelper\">
            <tag name=\"templating.helper\" alias=\"assets\" />
            <argument /> <!-- packages -->

            <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.3 and will be removed in 5.0.</deprecated>
        </service>

        <service id=\"templating.helper.actions\" class=\"Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\ActionsHelper\">
            <tag name=\"templating.helper\" alias=\"actions\" />
            <argument type=\"service\" id=\"fragment.handler\" />

            <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.3 and will be removed in 5.0.</deprecated>
        </service>

        <service id=\"templating.helper.code\" class=\"Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\CodeHelper\">
            <tag name=\"templating.helper\" alias=\"code\" />
            <argument type=\"service\" id=\"debug.file_link_formatter\"></argument>
            <argument>%kernel.project_dir%</argument>
            <argument>%kernel.charset%</argument>

            <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.3 and will be removed in 5.0.</deprecated>
        </service>

        <service id=\"templating.helper.translator\" class=\"Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\TranslatorHelper\">
            <tag name=\"templating.helper\" alias=\"translator\" />
            <argument type=\"service\" id=\"translator\" on-invalid=\"null\" />

            <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.3 and will be removed in 5.0.</deprecated>
        </service>

        <service id=\"templating.helper.form\" class=\"Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\FormHelper\">
            <tag name=\"templating.helper\" alias=\"form\" />
            <argument type=\"service\" id=\"templating.form.renderer\" />

            <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.3 and will be removed in 5.0.</deprecated>
        </service>

        <service id=\"templating.helper.stopwatch\" class=\"Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\StopwatchHelper\">
            <tag name=\"templating.helper\" alias=\"stopwatch\" />
            <argument type=\"service\" id=\"debug.stopwatch\" on-invalid=\"ignore\" />

            <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.3 and will be removed in 5.0.</deprecated>
        </service>

        <service id=\"templating.form.engine\" class=\"Symfony\\Component\\Form\\Extension\\Templating\\TemplatingRendererEngine\">
            <argument type=\"service\" id=\"templating.engine.php\" />
            <argument>%templating.helper.form.resources%</argument>

            <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.3 and will be removed in 5.0.</deprecated>
        </service>

        <service id=\"templating.form.renderer\" class=\"Symfony\\Component\\Form\\FormRenderer\">
            <argument type=\"service\" id=\"templating.form.engine\" />
            <argument type=\"service\" id=\"security.csrf.token_manager\" on-invalid=\"null\" />

            <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.3 and will be removed in 5.0.</deprecated>
        </service>

        <service id=\"templating.globals\" class=\"Symfony\\Bundle\\FrameworkBundle\\Templating\\GlobalVariables\">
            <argument type=\"service\" id=\"service_container\" />

            <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.3 and will be removed in 5.0.</deprecated>
        </service>
    </services>
</container>
", "vendor/symfony/framework-bundle/Resources/config/templating_php.xml", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Resources/config/templating_php.xml");
    }
}
