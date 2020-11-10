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

/* vendor/symfony/debug-bundle/Resources/config/services.xml */
class __TwigTemplate_da32660489a98539db7cd683cf00be248d9ba36b7a9cd0274853ed7aa4ccfd24 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/debug-bundle/Resources/config/services.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/debug-bundle/Resources/config/services.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">

    <parameters>
        <parameter key=\"env(VAR_DUMPER_SERVER)\">127.0.0.1:9912</parameter>
    </parameters>

    <services>
        <defaults public=\"false\" />

        <service id=\"twig.extension.dump\" class=\"Symfony\\Bridge\\Twig\\Extension\\DumpExtension\">
            <tag name=\"twig.extension\" />
            <argument type=\"service\" id=\"var_dumper.cloner\" />
            <argument type=\"service\" id=\"var_dumper.html_dumper\" />
        </service>

        <service id=\"data_collector.dump\" class=\"Symfony\\Component\\HttpKernel\\DataCollector\\DumpDataCollector\" public=\"true\">
            <tag name=\"data_collector\" id=\"dump\" template=\"@Debug/Profiler/dump.html.twig\" priority=\"240\" />
            <argument type=\"service\" id=\"debug.stopwatch\" on-invalid=\"ignore\" />
            <argument type=\"service\" id=\"debug.file_link_formatter\" on-invalid=\"ignore\"></argument>
            <argument>%kernel.charset%</argument>
            <argument type=\"service\" id=\"request_stack\" />
            <argument>null</argument><!-- var_dumper.cli_dumper or var_dumper.server_connection when debug.dump_destination is set -->
        </service>

        <service id=\"debug.dump_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\DumpListener\">
            <tag name=\"kernel.event_subscriber\" />
            <argument type=\"service\" id=\"var_dumper.cloner\" />
            <argument type=\"service\" id=\"var_dumper.cli_dumper\" />
            <argument>null</argument>
        </service>

        <service id=\"var_dumper.cloner\" class=\"Symfony\\Component\\VarDumper\\Cloner\\VarCloner\" public=\"true\" />
        <service id=\"var_dumper.cli_dumper\" class=\"Symfony\\Component\\VarDumper\\Dumper\\CliDumper\">
            <argument>null</argument><!-- debug.dump_destination -->
            <argument>%kernel.charset%</argument>
            <argument>0</argument> <!-- flags -->
        </service>

        <service id=\"var_dumper.html_dumper\" class=\"Symfony\\Component\\VarDumper\\Dumper\\HtmlDumper\">
            <argument>null</argument>
            <argument>%kernel.charset%</argument>
            <argument>0</argument> <!-- flags -->
            <call method=\"setDisplayOptions\">
                <argument type=\"collection\">
                    <argument key=\"fileLinkFormat\" type=\"service\" id=\"debug.file_link_formatter\" on-invalid=\"ignore\"></argument>
                </argument>
            </call>
        </service>

        <service id=\"var_dumper.server_connection\" class=\"Symfony\\Component\\VarDumper\\Server\\Connection\">
            <argument /> <!-- server host -->
            <argument type=\"collection\">
                <argument type=\"service\" key=\"source\">
                    <service class=\"Symfony\\Component\\VarDumper\\Dumper\\ContextProvider\\SourceContextProvider\">
                        <argument>%kernel.charset%</argument>
                        <argument type=\"string\">%kernel.project_dir%</argument>
                        <argument type=\"service\" id=\"debug.file_link_formatter\" on-invalid=\"null\" />
                    </service>
                </argument>
                <argument type=\"service\" key=\"request\">
                    <service class=\"Symfony\\Component\\VarDumper\\Dumper\\ContextProvider\\RequestContextProvider\">
                        <argument type=\"service\" id=\"request_stack\" />
                    </service>
                </argument>
                <argument type=\"service\" key=\"cli\">
                    <service class=\"Symfony\\Component\\VarDumper\\Dumper\\ContextProvider\\CliContextProvider\" />
                </argument>
            </argument>
        </service>

        <service id=\"var_dumper.dump_server\" class=\"Symfony\\Component\\VarDumper\\Server\\DumpServer\">
            <argument /> <!-- server host -->
            <argument type=\"service\" id=\"logger\" on-invalid=\"null\" />
            <tag name=\"monolog.logger\" channel=\"debug\" />
        </service>

        <service id=\"var_dumper.command.server_dump\" class=\"Symfony\\Component\\VarDumper\\Command\\ServerDumpCommand\">
            <argument type=\"service\" id=\"var_dumper.dump_server\" />
            <argument type=\"collection\">
                <argument type=\"service\" key=\"cli\">
                    <service class=\"Symfony\\Component\\VarDumper\\Command\\Descriptor\\CliDescriptor\">
                        <argument type=\"service\" id=\"var_dumper.cli_dumper\" />
                    </service>
                </argument>
                <argument type=\"service\" key=\"html\">
                    <service class=\"Symfony\\Component\\VarDumper\\Command\\Descriptor\\HtmlDescriptor\">
                        <argument type=\"service\" id=\"var_dumper.html_dumper\" />
                    </service>
                </argument>
            </argument>
            <tag name=\"console.command\" command=\"server:dump\" />
        </service>
    </services>
</container>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/debug-bundle/Resources/config/services.xml";
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

    <parameters>
        <parameter key=\"env(VAR_DUMPER_SERVER)\">127.0.0.1:9912</parameter>
    </parameters>

    <services>
        <defaults public=\"false\" />

        <service id=\"twig.extension.dump\" class=\"Symfony\\Bridge\\Twig\\Extension\\DumpExtension\">
            <tag name=\"twig.extension\" />
            <argument type=\"service\" id=\"var_dumper.cloner\" />
            <argument type=\"service\" id=\"var_dumper.html_dumper\" />
        </service>

        <service id=\"data_collector.dump\" class=\"Symfony\\Component\\HttpKernel\\DataCollector\\DumpDataCollector\" public=\"true\">
            <tag name=\"data_collector\" id=\"dump\" template=\"@Debug/Profiler/dump.html.twig\" priority=\"240\" />
            <argument type=\"service\" id=\"debug.stopwatch\" on-invalid=\"ignore\" />
            <argument type=\"service\" id=\"debug.file_link_formatter\" on-invalid=\"ignore\"></argument>
            <argument>%kernel.charset%</argument>
            <argument type=\"service\" id=\"request_stack\" />
            <argument>null</argument><!-- var_dumper.cli_dumper or var_dumper.server_connection when debug.dump_destination is set -->
        </service>

        <service id=\"debug.dump_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\DumpListener\">
            <tag name=\"kernel.event_subscriber\" />
            <argument type=\"service\" id=\"var_dumper.cloner\" />
            <argument type=\"service\" id=\"var_dumper.cli_dumper\" />
            <argument>null</argument>
        </service>

        <service id=\"var_dumper.cloner\" class=\"Symfony\\Component\\VarDumper\\Cloner\\VarCloner\" public=\"true\" />
        <service id=\"var_dumper.cli_dumper\" class=\"Symfony\\Component\\VarDumper\\Dumper\\CliDumper\">
            <argument>null</argument><!-- debug.dump_destination -->
            <argument>%kernel.charset%</argument>
            <argument>0</argument> <!-- flags -->
        </service>

        <service id=\"var_dumper.html_dumper\" class=\"Symfony\\Component\\VarDumper\\Dumper\\HtmlDumper\">
            <argument>null</argument>
            <argument>%kernel.charset%</argument>
            <argument>0</argument> <!-- flags -->
            <call method=\"setDisplayOptions\">
                <argument type=\"collection\">
                    <argument key=\"fileLinkFormat\" type=\"service\" id=\"debug.file_link_formatter\" on-invalid=\"ignore\"></argument>
                </argument>
            </call>
        </service>

        <service id=\"var_dumper.server_connection\" class=\"Symfony\\Component\\VarDumper\\Server\\Connection\">
            <argument /> <!-- server host -->
            <argument type=\"collection\">
                <argument type=\"service\" key=\"source\">
                    <service class=\"Symfony\\Component\\VarDumper\\Dumper\\ContextProvider\\SourceContextProvider\">
                        <argument>%kernel.charset%</argument>
                        <argument type=\"string\">%kernel.project_dir%</argument>
                        <argument type=\"service\" id=\"debug.file_link_formatter\" on-invalid=\"null\" />
                    </service>
                </argument>
                <argument type=\"service\" key=\"request\">
                    <service class=\"Symfony\\Component\\VarDumper\\Dumper\\ContextProvider\\RequestContextProvider\">
                        <argument type=\"service\" id=\"request_stack\" />
                    </service>
                </argument>
                <argument type=\"service\" key=\"cli\">
                    <service class=\"Symfony\\Component\\VarDumper\\Dumper\\ContextProvider\\CliContextProvider\" />
                </argument>
            </argument>
        </service>

        <service id=\"var_dumper.dump_server\" class=\"Symfony\\Component\\VarDumper\\Server\\DumpServer\">
            <argument /> <!-- server host -->
            <argument type=\"service\" id=\"logger\" on-invalid=\"null\" />
            <tag name=\"monolog.logger\" channel=\"debug\" />
        </service>

        <service id=\"var_dumper.command.server_dump\" class=\"Symfony\\Component\\VarDumper\\Command\\ServerDumpCommand\">
            <argument type=\"service\" id=\"var_dumper.dump_server\" />
            <argument type=\"collection\">
                <argument type=\"service\" key=\"cli\">
                    <service class=\"Symfony\\Component\\VarDumper\\Command\\Descriptor\\CliDescriptor\">
                        <argument type=\"service\" id=\"var_dumper.cli_dumper\" />
                    </service>
                </argument>
                <argument type=\"service\" key=\"html\">
                    <service class=\"Symfony\\Component\\VarDumper\\Command\\Descriptor\\HtmlDescriptor\">
                        <argument type=\"service\" id=\"var_dumper.html_dumper\" />
                    </service>
                </argument>
            </argument>
            <tag name=\"console.command\" command=\"server:dump\" />
        </service>
    </services>
</container>
", "vendor/symfony/debug-bundle/Resources/config/services.xml", "/var/www/public/DevLaon/templates/vendor/symfony/debug-bundle/Resources/config/services.xml");
    }
}
