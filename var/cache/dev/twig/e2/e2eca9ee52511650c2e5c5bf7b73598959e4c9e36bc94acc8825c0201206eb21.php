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

/* vendor/symfony/web-profiler-bundle/Resources/config/profiler.xml */
class __TwigTemplate_5e7dceb670b2066dea9726f07369cd4757db10aa354b3fc76283aa3d49288a29 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/web-profiler-bundle/Resources/config/profiler.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/web-profiler-bundle/Resources/config/profiler.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <defaults public=\"false\" />

        <service id=\"web_profiler.controller.profiler\" class=\"Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController\" public=\"true\">
            <argument type=\"service\" id=\"router\" on-invalid=\"null\" />
            <argument type=\"service\" id=\"profiler\" on-invalid=\"null\" />
            <argument type=\"service\" id=\"twig\" />
            <argument>%data_collector.templates%</argument>
            <argument type=\"service\" id=\"web_profiler.csp.handler\" />
            <argument>%kernel.project_dir%</argument>
        </service>

        <service id=\"web_profiler.controller.router\" class=\"Symfony\\Bundle\\WebProfilerBundle\\Controller\\RouterController\" public=\"true\">
            <argument type=\"service\" id=\"profiler\" on-invalid=\"null\" />
            <argument type=\"service\" id=\"twig\" />
            <argument type=\"service\" id=\"router\" on-invalid=\"null\" />
        </service>

        <service id=\"web_profiler.controller.exception\" class=\"Symfony\\Bundle\\WebProfilerBundle\\Controller\\ExceptionController\" public=\"true\">
            <argument type=\"service\" id=\"profiler\" on-invalid=\"null\" />
            <argument type=\"service\" id=\"twig\" />
            <argument>%kernel.debug%</argument>
            <argument type=\"service\" id=\"debug.file_link_formatter\" />
        </service>

        <service id=\"web_profiler.csp.handler\" class=\"Symfony\\Bundle\\WebProfilerBundle\\Csp\\ContentSecurityPolicyHandler\">
            <argument type=\"service\">
                <service class=\"Symfony\\Bundle\\WebProfilerBundle\\Csp\\NonceGenerator\" />
            </argument>
        </service>

        <service id=\"twig.extension.webprofiler\" class=\"Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension\">
            <tag name=\"twig.extension\" />
            <argument type=\"service\">
                <service class=\"Symfony\\Component\\VarDumper\\Dumper\\HtmlDumper\">
                    <argument>null</argument>
                    <argument>%kernel.charset%</argument>
                    <argument type=\"constant\">Symfony\\Component\\VarDumper\\Dumper\\HtmlDumper::DUMP_LIGHT_ARRAY</argument>
                    <call method=\"setDisplayOptions\">
                        <argument type=\"collection\">
                            <argument key=\"maxStringLength\">4096</argument>
                            <argument key=\"fileLinkFormat\" type=\"service\" id=\"debug.file_link_formatter\"></argument>
                        </argument>
                    </call>
                </service>
            </argument>
        </service>

        <service id=\"debug.file_link_formatter\" class=\"Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter\">
            <argument>%debug.file_link_format%</argument>
            <argument type=\"service\" id=\"request_stack\" on-invalid=\"ignore\" />
            <argument>%kernel.project_dir%</argument>
            <argument>/_profiler/open?file=%%f&amp;line=%%l#line%%l</argument>
        </service>

        <service id=\"debug.file_link_formatter.url_format\" class=\"string\">
            <factory class=\"Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter\" method=\"generateUrlFormat\" />
            <argument type=\"service\" id=\"router\" />
            <argument>_profiler_open_file</argument>
            <argument>?file=%%f&amp;line=%%l#line%%l</argument>
        </service>
    </services>
</container>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/web-profiler-bundle/Resources/config/profiler.xml";
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

        <service id=\"web_profiler.controller.profiler\" class=\"Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController\" public=\"true\">
            <argument type=\"service\" id=\"router\" on-invalid=\"null\" />
            <argument type=\"service\" id=\"profiler\" on-invalid=\"null\" />
            <argument type=\"service\" id=\"twig\" />
            <argument>%data_collector.templates%</argument>
            <argument type=\"service\" id=\"web_profiler.csp.handler\" />
            <argument>%kernel.project_dir%</argument>
        </service>

        <service id=\"web_profiler.controller.router\" class=\"Symfony\\Bundle\\WebProfilerBundle\\Controller\\RouterController\" public=\"true\">
            <argument type=\"service\" id=\"profiler\" on-invalid=\"null\" />
            <argument type=\"service\" id=\"twig\" />
            <argument type=\"service\" id=\"router\" on-invalid=\"null\" />
        </service>

        <service id=\"web_profiler.controller.exception\" class=\"Symfony\\Bundle\\WebProfilerBundle\\Controller\\ExceptionController\" public=\"true\">
            <argument type=\"service\" id=\"profiler\" on-invalid=\"null\" />
            <argument type=\"service\" id=\"twig\" />
            <argument>%kernel.debug%</argument>
            <argument type=\"service\" id=\"debug.file_link_formatter\" />
        </service>

        <service id=\"web_profiler.csp.handler\" class=\"Symfony\\Bundle\\WebProfilerBundle\\Csp\\ContentSecurityPolicyHandler\">
            <argument type=\"service\">
                <service class=\"Symfony\\Bundle\\WebProfilerBundle\\Csp\\NonceGenerator\" />
            </argument>
        </service>

        <service id=\"twig.extension.webprofiler\" class=\"Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension\">
            <tag name=\"twig.extension\" />
            <argument type=\"service\">
                <service class=\"Symfony\\Component\\VarDumper\\Dumper\\HtmlDumper\">
                    <argument>null</argument>
                    <argument>%kernel.charset%</argument>
                    <argument type=\"constant\">Symfony\\Component\\VarDumper\\Dumper\\HtmlDumper::DUMP_LIGHT_ARRAY</argument>
                    <call method=\"setDisplayOptions\">
                        <argument type=\"collection\">
                            <argument key=\"maxStringLength\">4096</argument>
                            <argument key=\"fileLinkFormat\" type=\"service\" id=\"debug.file_link_formatter\"></argument>
                        </argument>
                    </call>
                </service>
            </argument>
        </service>

        <service id=\"debug.file_link_formatter\" class=\"Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter\">
            <argument>%debug.file_link_format%</argument>
            <argument type=\"service\" id=\"request_stack\" on-invalid=\"ignore\" />
            <argument>%kernel.project_dir%</argument>
            <argument>/_profiler/open?file=%%f&amp;line=%%l#line%%l</argument>
        </service>

        <service id=\"debug.file_link_formatter.url_format\" class=\"string\">
            <factory class=\"Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter\" method=\"generateUrlFormat\" />
            <argument type=\"service\" id=\"router\" />
            <argument>_profiler_open_file</argument>
            <argument>?file=%%f&amp;line=%%l#line%%l</argument>
        </service>
    </services>
</container>
", "vendor/symfony/web-profiler-bundle/Resources/config/profiler.xml", "/var/www/public/DevLaon/templates/vendor/symfony/web-profiler-bundle/Resources/config/profiler.xml");
    }
}
