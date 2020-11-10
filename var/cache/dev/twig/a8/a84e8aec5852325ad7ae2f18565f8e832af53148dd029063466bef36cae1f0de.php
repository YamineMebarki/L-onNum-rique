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

/* vendor/symfony/monolog-bundle/Resources/config/monolog.xml */
class __TwigTemplate_e455d1280da079d6294cc0fc64da53fdea1f5d08ce46944524de1da82a5216b3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bundle/Resources/config/monolog.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bundle/Resources/config/monolog.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <service id=\"monolog.logger\" parent=\"monolog.logger_prototype\" public=\"false\">
            <argument index=\"0\">app</argument>
            <call method=\"useMicrosecondTimestamps\">
                <argument>%monolog.use_microseconds%</argument>
            </call>
        </service>

        <service id=\"logger\" alias=\"monolog.logger\" />

        <service id=\"Psr\\Log\\LoggerInterface\" alias=\"logger\" public=\"false\" />

        <service id=\"monolog.logger_prototype\" class=\"Symfony\\Bridge\\Monolog\\Logger\" abstract=\"true\">
            <argument /><!-- Channel -->
        </service>

        <service id=\"monolog.activation_strategy.not_found\" class=\"Symfony\\Bridge\\Monolog\\Handler\\FingersCrossed\\NotFoundActivationStrategy\" abstract=\"true\" />
        <service id=\"monolog.handler.fingers_crossed.error_level_activation_strategy\" class=\"Monolog\\Handler\\FingersCrossed\\ErrorLevelActivationStrategy\" abstract=\"true\" />

        <!-- Formatters -->
        <service id=\"monolog.formatter.chrome_php\" class=\"Monolog\\Formatter\\ChromePHPFormatter\" public=\"false\" />
        <service id=\"monolog.formatter.gelf_message\" class=\"Monolog\\Formatter\\GelfMessageFormatter\" public=\"false\" />
        <service id=\"monolog.formatter.html\" class=\"Monolog\\Formatter\\HtmlFormatter\" public=\"false\" />
        <service id=\"monolog.formatter.json\" class=\"Monolog\\Formatter\\JsonFormatter\" public=\"false\" />
        <service id=\"monolog.formatter.line\" class=\"Monolog\\Formatter\\LineFormatter\" public=\"false\" />
        <service id=\"monolog.formatter.loggly\" class=\"Monolog\\Formatter\\LogglyFormatter\" public=\"false\" />
        <service id=\"monolog.formatter.normalizer\" class=\"Monolog\\Formatter\\NormalizerFormatter\" public=\"false\" />
        <service id=\"monolog.formatter.scalar\" class=\"Monolog\\Formatter\\ScalarFormatter\" public=\"false\" />
        <service id=\"monolog.formatter.wildfire\" class=\"Monolog\\Formatter\\WildfireFormatter\" public=\"false\" />
        <service id=\"monolog.formatter.logstash\" class=\"Monolog\\Formatter\\LogstashFormatter\" public=\"false\">
            <argument index=\"0\">app</argument>
        </service>
    </services>
</container>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/monolog-bundle/Resources/config/monolog.xml";
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
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <service id=\"monolog.logger\" parent=\"monolog.logger_prototype\" public=\"false\">
            <argument index=\"0\">app</argument>
            <call method=\"useMicrosecondTimestamps\">
                <argument>%monolog.use_microseconds%</argument>
            </call>
        </service>

        <service id=\"logger\" alias=\"monolog.logger\" />

        <service id=\"Psr\\Log\\LoggerInterface\" alias=\"logger\" public=\"false\" />

        <service id=\"monolog.logger_prototype\" class=\"Symfony\\Bridge\\Monolog\\Logger\" abstract=\"true\">
            <argument /><!-- Channel -->
        </service>

        <service id=\"monolog.activation_strategy.not_found\" class=\"Symfony\\Bridge\\Monolog\\Handler\\FingersCrossed\\NotFoundActivationStrategy\" abstract=\"true\" />
        <service id=\"monolog.handler.fingers_crossed.error_level_activation_strategy\" class=\"Monolog\\Handler\\FingersCrossed\\ErrorLevelActivationStrategy\" abstract=\"true\" />

        <!-- Formatters -->
        <service id=\"monolog.formatter.chrome_php\" class=\"Monolog\\Formatter\\ChromePHPFormatter\" public=\"false\" />
        <service id=\"monolog.formatter.gelf_message\" class=\"Monolog\\Formatter\\GelfMessageFormatter\" public=\"false\" />
        <service id=\"monolog.formatter.html\" class=\"Monolog\\Formatter\\HtmlFormatter\" public=\"false\" />
        <service id=\"monolog.formatter.json\" class=\"Monolog\\Formatter\\JsonFormatter\" public=\"false\" />
        <service id=\"monolog.formatter.line\" class=\"Monolog\\Formatter\\LineFormatter\" public=\"false\" />
        <service id=\"monolog.formatter.loggly\" class=\"Monolog\\Formatter\\LogglyFormatter\" public=\"false\" />
        <service id=\"monolog.formatter.normalizer\" class=\"Monolog\\Formatter\\NormalizerFormatter\" public=\"false\" />
        <service id=\"monolog.formatter.scalar\" class=\"Monolog\\Formatter\\ScalarFormatter\" public=\"false\" />
        <service id=\"monolog.formatter.wildfire\" class=\"Monolog\\Formatter\\WildfireFormatter\" public=\"false\" />
        <service id=\"monolog.formatter.logstash\" class=\"Monolog\\Formatter\\LogstashFormatter\" public=\"false\">
            <argument index=\"0\">app</argument>
        </service>
    </services>
</container>
", "vendor/symfony/monolog-bundle/Resources/config/monolog.xml", "/var/www/public/DevLaon/templates/vendor/symfony/monolog-bundle/Resources/config/monolog.xml");
    }
}
