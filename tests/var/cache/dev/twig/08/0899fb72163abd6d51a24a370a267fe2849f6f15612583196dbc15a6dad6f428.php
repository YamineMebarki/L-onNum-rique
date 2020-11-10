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

/* vendor/symfony/swiftmailer-bundle/CHANGELOG */
class __TwigTemplate_81d4eadbf3f71a67084a68d208b489efae8de4085f4f61d9ecf9824fdc9ee73f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/swiftmailer-bundle/CHANGELOG"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/swiftmailer-bundle/CHANGELOG"));

        // line 1
        echo "* 3.2.4 (2018-10-27)

 * fixed deprecations for Symfony 4.2
 * made swiftmailer.transport service public

* 3.2.3 (2018-08-29)

 * fixed EmailSenderListener that was not resetting wasExceptionThrown properly

* 3.2.2 (2018-04-03)

 * fixed the profiler panel when To: or From: headers are empty
 * fixed rendered content in the web profiler
 * do not set time/message limit on Configurable Spool if null

* 3.2.1 (2018-03-08)

 * fixed the handling of null as top-level extension config
 * fixed compatibility with the inline_class_loader optimization of the container dumper
 * fixed template variable reference
 * added `command` to the list of parameters that can be set from environment variables and default config values

* 3.2.0 (2018-02-14)

 * improved the Symfony profiler panel
 * fixed missing local_domain config support

* 3.1.6 (2017-10-23)

 * added missing NTLM Authenticator to swiftmailer.xml

* 3.1.5 (2017-10-19)

 * fixed Composer constraints

* 3.1.4 (2017-10-18)

 * fixed deprecations when accessing to private services from container

* 3.1.3 (2017-10-18)

 * fixed Symfony 3.4 support

* 3.1.2 (2017-10-18)

 * fixed Symfony 4 support

* 3.1.1 (2017-10-13)

 * fixed missing reset() method on MessageDataCollector

* 3.1.0 (2017-09-27)

 * changed commands as services
 * added support for Symfony 4

* 3.0.4 (2017-09-10)

 * fixed encryption and auth_mode empty usage when empty in MAILER_URL
 * added support for ntlm auth_mode
 * made sendmail command customizable
 * bumped min PHP version to 7.0 (as this is PHP min version for Swiftmailer 6.0)

* 3.0.3 (2017-06-08)

 * allowed env values for auth_mode

* 3.0.2 (2017-06-05)

 * removed empty delivery_addresses
 * removed usage of deprecated ConsoleExceptionEvent for 3.3+
 * fixed encryption option when using env variable

* 3.0.1 (2017-05-19)

 * removed deprecated delivery_address configuration setting
 * removed class parameters in the container configuration
 * removed obsolete support for the mail transport

* 3.0.0 (2017-05-19)

 * removed the swiftmailer:debug command alias
 * added compatibility with Swiftmailer 6.0

* 2.6.6 (2017-10-19)

  * fixed compat with Symfony < 3.4
  
* 2.6.5 (2017-10-19)

  * fixed a deprecation when accessing the mailer service

* 2.6.3 (2017-07-22)

 * fixed compat with Symfony 3.3+

* 2.6.2 (2017-05-22)

 * fixed Swiftmailer dependency

* 2.6.1 (2017-05-20)

 * reverted support for Swiftmailer 6.0

* 2.6.0 (2017-05-19)

 * added compatibility with Swiftmailer 6.0

* 2.5.4 (2017-03-21)

 * fixed for \"Swiftmailer still sends email if exception is thrown\"
 * added autowiring aliases

* 2.5.3 (2017-03-02)

 * fixed SMTP usage without request context

* 2.5.2 (2017-03-02)

 * fixed deprecated mail transport

* 2.5.1 (2017-03-01)

 * fixed disabling delivery with env vars config

* 2.5.0 (2017-02-23)

 * allow using env variables in transport configuration

* 2.4.2 (2016-12-20)

 * fixed compatibility with Symfony 3.3

* 2.4.1 (2016-12-20)

 * added missing attachments in the web profiler

* 2.4.0 (2016-10-09)

 * added support for setLocalDomain() and setStreamOptions()
 * updated the styles of the SwiftMailer commands
 * removed support for deprecated versions of Symfony
 * added support for LoadBalancedTransport in SendEmailCommand
 * fixed messagePart.charset not defined in the web profiler
 * fixed performance on Symfony 3 (IntrospectableContainerInterface does not exist anymore)
 * allowed empty transport configs
 * added a priority flag on plugins tag
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/swiftmailer-bundle/CHANGELOG";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("* 3.2.4 (2018-10-27)

 * fixed deprecations for Symfony 4.2
 * made swiftmailer.transport service public

* 3.2.3 (2018-08-29)

 * fixed EmailSenderListener that was not resetting wasExceptionThrown properly

* 3.2.2 (2018-04-03)

 * fixed the profiler panel when To: or From: headers are empty
 * fixed rendered content in the web profiler
 * do not set time/message limit on Configurable Spool if null

* 3.2.1 (2018-03-08)

 * fixed the handling of null as top-level extension config
 * fixed compatibility with the inline_class_loader optimization of the container dumper
 * fixed template variable reference
 * added `command` to the list of parameters that can be set from environment variables and default config values

* 3.2.0 (2018-02-14)

 * improved the Symfony profiler panel
 * fixed missing local_domain config support

* 3.1.6 (2017-10-23)

 * added missing NTLM Authenticator to swiftmailer.xml

* 3.1.5 (2017-10-19)

 * fixed Composer constraints

* 3.1.4 (2017-10-18)

 * fixed deprecations when accessing to private services from container

* 3.1.3 (2017-10-18)

 * fixed Symfony 3.4 support

* 3.1.2 (2017-10-18)

 * fixed Symfony 4 support

* 3.1.1 (2017-10-13)

 * fixed missing reset() method on MessageDataCollector

* 3.1.0 (2017-09-27)

 * changed commands as services
 * added support for Symfony 4

* 3.0.4 (2017-09-10)

 * fixed encryption and auth_mode empty usage when empty in MAILER_URL
 * added support for ntlm auth_mode
 * made sendmail command customizable
 * bumped min PHP version to 7.0 (as this is PHP min version for Swiftmailer 6.0)

* 3.0.3 (2017-06-08)

 * allowed env values for auth_mode

* 3.0.2 (2017-06-05)

 * removed empty delivery_addresses
 * removed usage of deprecated ConsoleExceptionEvent for 3.3+
 * fixed encryption option when using env variable

* 3.0.1 (2017-05-19)

 * removed deprecated delivery_address configuration setting
 * removed class parameters in the container configuration
 * removed obsolete support for the mail transport

* 3.0.0 (2017-05-19)

 * removed the swiftmailer:debug command alias
 * added compatibility with Swiftmailer 6.0

* 2.6.6 (2017-10-19)

  * fixed compat with Symfony < 3.4
  
* 2.6.5 (2017-10-19)

  * fixed a deprecation when accessing the mailer service

* 2.6.3 (2017-07-22)

 * fixed compat with Symfony 3.3+

* 2.6.2 (2017-05-22)

 * fixed Swiftmailer dependency

* 2.6.1 (2017-05-20)

 * reverted support for Swiftmailer 6.0

* 2.6.0 (2017-05-19)

 * added compatibility with Swiftmailer 6.0

* 2.5.4 (2017-03-21)

 * fixed for \"Swiftmailer still sends email if exception is thrown\"
 * added autowiring aliases

* 2.5.3 (2017-03-02)

 * fixed SMTP usage without request context

* 2.5.2 (2017-03-02)

 * fixed deprecated mail transport

* 2.5.1 (2017-03-01)

 * fixed disabling delivery with env vars config

* 2.5.0 (2017-02-23)

 * allow using env variables in transport configuration

* 2.4.2 (2016-12-20)

 * fixed compatibility with Symfony 3.3

* 2.4.1 (2016-12-20)

 * added missing attachments in the web profiler

* 2.4.0 (2016-10-09)

 * added support for setLocalDomain() and setStreamOptions()
 * updated the styles of the SwiftMailer commands
 * removed support for deprecated versions of Symfony
 * added support for LoadBalancedTransport in SendEmailCommand
 * fixed messagePart.charset not defined in the web profiler
 * fixed performance on Symfony 3 (IntrospectableContainerInterface does not exist anymore)
 * allowed empty transport configs
 * added a priority flag on plugins tag
", "vendor/symfony/swiftmailer-bundle/CHANGELOG", "/var/www/public/DevLaon/templates/vendor/symfony/swiftmailer-bundle/CHANGELOG");
    }
}
