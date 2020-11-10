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

/* vendor/symfony/swiftmailer-bundle/Resources/config/swiftmailer.xml */
class __TwigTemplate_c8e59d0ae173a60e6e2b79d2c883145e169872486b8c8dd019bd03fa3b10683b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/swiftmailer-bundle/Resources/config/swiftmailer.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/swiftmailer-bundle/Resources/config/swiftmailer.xml"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <service id=\"swiftmailer.mailer.abstract\" class=\"Swift_Mailer\" public=\"true\" abstract=\"true\">
            <argument type=\"service\" id=\"swiftmailer.transport\" />
        </service>

        <service id=\"swiftmailer.transport.smtp.configurator.abstract\" class=\"Symfony\\Bundle\\SwiftmailerBundle\\DependencyInjection\\SmtpTransportConfigurator\" abstract=\"true\" public=\"false\" />

        <service id=\"swiftmailer.transport.sendmail.abstract\" class=\"Swift_Transport_SendmailTransport\" abstract=\"true\" public=\"false\" />

        <service id=\"swiftmailer.transport.null.abstract\" class=\"Swift_Transport_NullTransport\" abstract=\"true\" public=\"false\">
        </service>

        <service id=\"swiftmailer.transport.failover\" class=\"Swift_Transport_FailoverTransport\" public=\"false\" />

        <service id=\"swiftmailer.transport.buffer.abstract\" class=\"Swift_Transport_StreamBuffer\" abstract=\"true\" public=\"false\">
            <argument type=\"service\" id=\"swiftmailer.transport.replacementfactory\" />
        </service>

        <service id=\"swiftmailer.transport.authhandler.abstract\" class=\"Swift_Transport_Esmtp_AuthHandler\" abstract=\"true\" public=\"false\">
            <argument type=\"collection\">
                <argument type=\"service\"><service class=\"Swift_Transport_Esmtp_Auth_CramMd5Authenticator\" public=\"false\" /></argument>
                <argument type=\"service\"><service class=\"Swift_Transport_Esmtp_Auth_LoginAuthenticator\" public=\"false\" /></argument>
                <argument type=\"service\"><service class=\"Swift_Transport_Esmtp_Auth_PlainAuthenticator\" public=\"false\" /></argument>
                <argument type=\"service\"><service class=\"Swift_Transport_Esmtp_Auth_NTLMAuthenticator\" public=\"false\" /></argument>
            </argument>
        </service>

        <service id=\"swiftmailer.transport.eventdispatcher.abstract\" class=\"Swift_Events_SimpleEventDispatcher\" abstract=\"true\" public=\"false\" />

        <service id=\"swiftmailer.transport.replacementfactory\" class=\"Swift_StreamFilters_StringReplacementFilterFactory\" public=\"false\" />

        <service id=\"swiftmailer.plugin.redirecting.abstract\" class=\"Swift_Plugins_RedirectingPlugin\" abstract=\"true\" public=\"false\" />

        <service id=\"swiftmailer.plugin.antiflood.abstract\" class=\"Swift_Plugins_AntiFloodPlugin\" abstract=\"true\" public=\"false\" />

        <service id=\"swiftmailer.plugin.impersonate.abstract\" class=\"Swift_Plugins_ImpersonatePlugin\" abstract=\"true\" public=\"false\" />

        <service id=\"swiftmailer.plugin.messagelogger.abstract\" class=\"Swift_Plugins_MessageLogger\" abstract=\"true\" />

        <service id=\"swiftmailer.transport.smtp.abstract\" class=\"Swift_Transport_EsmtpTransport\" public=\"false\" abstract=\"true\" />

        <service id=\"swiftmailer.transport.spool.abstract\" class=\"Swift_Transport_SpoolTransport\" public=\"false\" abstract=\"true\" />

        <service id=\"swiftmailer.spool.file.abstract\" class=\"Swift_FileSpool\" public=\"false\" abstract=\"true\">
            <argument>%kernel.root_dir%/../data/swiftmailer/spool</argument>
        </service>

        <service id=\"swiftmailer.spool.memory.abstract\" class=\"Swift_MemorySpool\" public=\"false\" abstract=\"true\" />

        <service id=\"swiftmailer.email_sender.listener\" class=\"Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener\">
            <tag name=\"kernel.event_subscriber\" />
            <tag name=\"kernel.reset\" method=\"reset\" />
            <argument type=\"service\" id=\"service_container\" />
            <argument type=\"service\" id=\"logger\" on-invalid=\"null\" />
        </service>

        <service id=\"swiftmailer.data_collector\" class=\"Symfony\\Bundle\\SwiftmailerBundle\\DataCollector\\MessageDataCollector\" public=\"false\">
            <argument type=\"service\" id=\"service_container\" />
        </service>

    </services>
</container>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/swiftmailer-bundle/Resources/config/swiftmailer.xml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"UTF-8\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <service id=\"swiftmailer.mailer.abstract\" class=\"Swift_Mailer\" public=\"true\" abstract=\"true\">
            <argument type=\"service\" id=\"swiftmailer.transport\" />
        </service>

        <service id=\"swiftmailer.transport.smtp.configurator.abstract\" class=\"Symfony\\Bundle\\SwiftmailerBundle\\DependencyInjection\\SmtpTransportConfigurator\" abstract=\"true\" public=\"false\" />

        <service id=\"swiftmailer.transport.sendmail.abstract\" class=\"Swift_Transport_SendmailTransport\" abstract=\"true\" public=\"false\" />

        <service id=\"swiftmailer.transport.null.abstract\" class=\"Swift_Transport_NullTransport\" abstract=\"true\" public=\"false\">
        </service>

        <service id=\"swiftmailer.transport.failover\" class=\"Swift_Transport_FailoverTransport\" public=\"false\" />

        <service id=\"swiftmailer.transport.buffer.abstract\" class=\"Swift_Transport_StreamBuffer\" abstract=\"true\" public=\"false\">
            <argument type=\"service\" id=\"swiftmailer.transport.replacementfactory\" />
        </service>

        <service id=\"swiftmailer.transport.authhandler.abstract\" class=\"Swift_Transport_Esmtp_AuthHandler\" abstract=\"true\" public=\"false\">
            <argument type=\"collection\">
                <argument type=\"service\"><service class=\"Swift_Transport_Esmtp_Auth_CramMd5Authenticator\" public=\"false\" /></argument>
                <argument type=\"service\"><service class=\"Swift_Transport_Esmtp_Auth_LoginAuthenticator\" public=\"false\" /></argument>
                <argument type=\"service\"><service class=\"Swift_Transport_Esmtp_Auth_PlainAuthenticator\" public=\"false\" /></argument>
                <argument type=\"service\"><service class=\"Swift_Transport_Esmtp_Auth_NTLMAuthenticator\" public=\"false\" /></argument>
            </argument>
        </service>

        <service id=\"swiftmailer.transport.eventdispatcher.abstract\" class=\"Swift_Events_SimpleEventDispatcher\" abstract=\"true\" public=\"false\" />

        <service id=\"swiftmailer.transport.replacementfactory\" class=\"Swift_StreamFilters_StringReplacementFilterFactory\" public=\"false\" />

        <service id=\"swiftmailer.plugin.redirecting.abstract\" class=\"Swift_Plugins_RedirectingPlugin\" abstract=\"true\" public=\"false\" />

        <service id=\"swiftmailer.plugin.antiflood.abstract\" class=\"Swift_Plugins_AntiFloodPlugin\" abstract=\"true\" public=\"false\" />

        <service id=\"swiftmailer.plugin.impersonate.abstract\" class=\"Swift_Plugins_ImpersonatePlugin\" abstract=\"true\" public=\"false\" />

        <service id=\"swiftmailer.plugin.messagelogger.abstract\" class=\"Swift_Plugins_MessageLogger\" abstract=\"true\" />

        <service id=\"swiftmailer.transport.smtp.abstract\" class=\"Swift_Transport_EsmtpTransport\" public=\"false\" abstract=\"true\" />

        <service id=\"swiftmailer.transport.spool.abstract\" class=\"Swift_Transport_SpoolTransport\" public=\"false\" abstract=\"true\" />

        <service id=\"swiftmailer.spool.file.abstract\" class=\"Swift_FileSpool\" public=\"false\" abstract=\"true\">
            <argument>%kernel.root_dir%/../data/swiftmailer/spool</argument>
        </service>

        <service id=\"swiftmailer.spool.memory.abstract\" class=\"Swift_MemorySpool\" public=\"false\" abstract=\"true\" />

        <service id=\"swiftmailer.email_sender.listener\" class=\"Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener\">
            <tag name=\"kernel.event_subscriber\" />
            <tag name=\"kernel.reset\" method=\"reset\" />
            <argument type=\"service\" id=\"service_container\" />
            <argument type=\"service\" id=\"logger\" on-invalid=\"null\" />
        </service>

        <service id=\"swiftmailer.data_collector\" class=\"Symfony\\Bundle\\SwiftmailerBundle\\DataCollector\\MessageDataCollector\" public=\"false\">
            <argument type=\"service\" id=\"service_container\" />
        </service>

    </services>
</container>
", "vendor/symfony/swiftmailer-bundle/Resources/config/swiftmailer.xml", "/var/www/public/DevLaon/templates/vendor/symfony/swiftmailer-bundle/Resources/config/swiftmailer.xml");
    }
}
