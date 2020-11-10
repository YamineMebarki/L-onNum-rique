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

/* vendor/symfony/framework-bundle/Resources/config/collectors.xml */
class __TwigTemplate_08e45507876fa98206573798594e80b73ad7519d0c32eeb766131d4a9f8582c3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Resources/config/collectors.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Resources/config/collectors.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <defaults public=\"false\" />

        <service id=\"data_collector.config\" class=\"Symfony\\Component\\HttpKernel\\DataCollector\\ConfigDataCollector\">
            <tag name=\"data_collector\" template=\"@WebProfiler/Collector/config.html.twig\" id=\"config\" priority=\"-255\" />
            <call method=\"setKernel\"><argument type=\"service\" id=\"kernel\" on-invalid=\"ignore\" /></call>
        </service>

        <service id=\"data_collector.request\" class=\"Symfony\\Component\\HttpKernel\\DataCollector\\RequestDataCollector\">
            <tag name=\"kernel.event_subscriber\" />
            <tag name=\"data_collector\" template=\"@WebProfiler/Collector/request.html.twig\" id=\"request\" priority=\"335\" />
        </service>

        <service id=\"data_collector.ajax\" class=\"Symfony\\Component\\HttpKernel\\DataCollector\\AjaxDataCollector\">
            <tag name=\"data_collector\" template=\"@WebProfiler/Collector/ajax.html.twig\" id=\"ajax\" priority=\"315\" />
        </service>

        <service id=\"data_collector.exception\" class=\"Symfony\\Component\\HttpKernel\\DataCollector\\ExceptionDataCollector\">
            <tag name=\"data_collector\" template=\"@WebProfiler/Collector/exception.html.twig\" id=\"exception\" priority=\"305\" />
        </service>

        <service id=\"data_collector.events\" class=\"Symfony\\Component\\HttpKernel\\DataCollector\\EventDataCollector\">
            <tag name=\"data_collector\" template=\"@WebProfiler/Collector/events.html.twig\" id=\"events\" priority=\"290\" />
            <argument type=\"service\" id=\"debug.event_dispatcher\" on-invalid=\"ignore\" />
            <argument type=\"service\" id=\"request_stack\" on-invalid=\"ignore\" />
        </service>

        <service id=\"data_collector.logger\" class=\"Symfony\\Component\\HttpKernel\\DataCollector\\LoggerDataCollector\">
            <tag name=\"data_collector\" template=\"@WebProfiler/Collector/logger.html.twig\" id=\"logger\" priority=\"300\" />
            <tag name=\"monolog.logger\" channel=\"profiler\" />
            <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\" />
            <argument>%kernel.cache_dir%/%kernel.container_class%</argument>
            <argument type=\"service\" id=\"request_stack\" on-invalid=\"ignore\" />
        </service>

        <service id=\"data_collector.time\" class=\"Symfony\\Component\\HttpKernel\\DataCollector\\TimeDataCollector\">
            <tag name=\"data_collector\" template=\"@WebProfiler/Collector/time.html.twig\" id=\"time\" priority=\"330\" />
            <argument type=\"service\" id=\"kernel\" on-invalid=\"ignore\" />
            <argument type=\"service\" id=\"debug.stopwatch\" on-invalid=\"ignore\" />
        </service>

        <service id=\"data_collector.memory\" class=\"Symfony\\Component\\HttpKernel\\DataCollector\\MemoryDataCollector\">
            <tag name=\"data_collector\" template=\"@WebProfiler/Collector/memory.html.twig\" id=\"memory\" priority=\"325\" />
        </service>

        <service id=\"data_collector.router\" class=\"Symfony\\Bundle\\FrameworkBundle\\DataCollector\\RouterDataCollector\">
            <tag name=\"kernel.event_listener\" event=\"kernel.controller\" method=\"onKernelController\"/>
            <tag name=\"data_collector\" template=\"@WebProfiler/Collector/router.html.twig\" id=\"router\" priority=\"285\" />
        </service>
    </services>
</container>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Resources/config/collectors.xml";
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

        <service id=\"data_collector.config\" class=\"Symfony\\Component\\HttpKernel\\DataCollector\\ConfigDataCollector\">
            <tag name=\"data_collector\" template=\"@WebProfiler/Collector/config.html.twig\" id=\"config\" priority=\"-255\" />
            <call method=\"setKernel\"><argument type=\"service\" id=\"kernel\" on-invalid=\"ignore\" /></call>
        </service>

        <service id=\"data_collector.request\" class=\"Symfony\\Component\\HttpKernel\\DataCollector\\RequestDataCollector\">
            <tag name=\"kernel.event_subscriber\" />
            <tag name=\"data_collector\" template=\"@WebProfiler/Collector/request.html.twig\" id=\"request\" priority=\"335\" />
        </service>

        <service id=\"data_collector.ajax\" class=\"Symfony\\Component\\HttpKernel\\DataCollector\\AjaxDataCollector\">
            <tag name=\"data_collector\" template=\"@WebProfiler/Collector/ajax.html.twig\" id=\"ajax\" priority=\"315\" />
        </service>

        <service id=\"data_collector.exception\" class=\"Symfony\\Component\\HttpKernel\\DataCollector\\ExceptionDataCollector\">
            <tag name=\"data_collector\" template=\"@WebProfiler/Collector/exception.html.twig\" id=\"exception\" priority=\"305\" />
        </service>

        <service id=\"data_collector.events\" class=\"Symfony\\Component\\HttpKernel\\DataCollector\\EventDataCollector\">
            <tag name=\"data_collector\" template=\"@WebProfiler/Collector/events.html.twig\" id=\"events\" priority=\"290\" />
            <argument type=\"service\" id=\"debug.event_dispatcher\" on-invalid=\"ignore\" />
            <argument type=\"service\" id=\"request_stack\" on-invalid=\"ignore\" />
        </service>

        <service id=\"data_collector.logger\" class=\"Symfony\\Component\\HttpKernel\\DataCollector\\LoggerDataCollector\">
            <tag name=\"data_collector\" template=\"@WebProfiler/Collector/logger.html.twig\" id=\"logger\" priority=\"300\" />
            <tag name=\"monolog.logger\" channel=\"profiler\" />
            <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\" />
            <argument>%kernel.cache_dir%/%kernel.container_class%</argument>
            <argument type=\"service\" id=\"request_stack\" on-invalid=\"ignore\" />
        </service>

        <service id=\"data_collector.time\" class=\"Symfony\\Component\\HttpKernel\\DataCollector\\TimeDataCollector\">
            <tag name=\"data_collector\" template=\"@WebProfiler/Collector/time.html.twig\" id=\"time\" priority=\"330\" />
            <argument type=\"service\" id=\"kernel\" on-invalid=\"ignore\" />
            <argument type=\"service\" id=\"debug.stopwatch\" on-invalid=\"ignore\" />
        </service>

        <service id=\"data_collector.memory\" class=\"Symfony\\Component\\HttpKernel\\DataCollector\\MemoryDataCollector\">
            <tag name=\"data_collector\" template=\"@WebProfiler/Collector/memory.html.twig\" id=\"memory\" priority=\"325\" />
        </service>

        <service id=\"data_collector.router\" class=\"Symfony\\Bundle\\FrameworkBundle\\DataCollector\\RouterDataCollector\">
            <tag name=\"kernel.event_listener\" event=\"kernel.controller\" method=\"onKernelController\"/>
            <tag name=\"data_collector\" template=\"@WebProfiler/Collector/router.html.twig\" id=\"router\" priority=\"285\" />
        </service>
    </services>
</container>
", "vendor/symfony/framework-bundle/Resources/config/collectors.xml", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Resources/config/collectors.xml");
    }
}
