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

/* vendor/swiftmailer/swiftmailer/lib/dependency_maps/transport_deps.php */
class __TwigTemplate_f766d5340f4eb22c7e7775d8c4b10d69d5332b71c4b01dfe1fdc050aad9efc08 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/dependency_maps/transport_deps.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/dependency_maps/transport_deps.php"));

        // line 1
        echo "<?php

Swift_DependencyContainer::getInstance()
    ->register('transport.localdomain')
    // As SERVER_NAME can come from the user in certain configurations, check that
    // it does not contain forbidden characters (see RFC 952 and RFC 2181). Use
    // preg_replace() instead of preg_match() to prevent DoS attacks with long host names.
    ->asValue(!empty(\$_SERVER['SERVER_NAME']) && '' === preg_replace('/(?:^\\[)?[a-zA-Z0-9-:\\]_]+\\.?/', '', \$_SERVER['SERVER_NAME']) ? trim(\$_SERVER['SERVER_NAME'], '[]') : '127.0.0.1')

    ->register('transport.smtp')
    ->asNewInstanceOf('Swift_Transport_EsmtpTransport')
    ->withDependencies([
        'transport.buffer',
        'transport.smtphandlers',
        'transport.eventdispatcher',
        'transport.localdomain',
        'address.idnaddressencoder',
    ])

    ->register('transport.sendmail')
    ->asNewInstanceOf('Swift_Transport_SendmailTransport')
    ->withDependencies([
        'transport.buffer',
        'transport.eventdispatcher',
        'transport.localdomain',
    ])

    ->register('transport.loadbalanced')
    ->asNewInstanceOf('Swift_Transport_LoadBalancedTransport')

    ->register('transport.failover')
    ->asNewInstanceOf('Swift_Transport_FailoverTransport')

    ->register('transport.spool')
    ->asNewInstanceOf('Swift_Transport_SpoolTransport')
    ->withDependencies(['transport.eventdispatcher'])

    ->register('transport.null')
    ->asNewInstanceOf('Swift_Transport_NullTransport')
    ->withDependencies(['transport.eventdispatcher'])

    ->register('transport.buffer')
    ->asNewInstanceOf('Swift_Transport_StreamBuffer')
    ->withDependencies(['transport.replacementfactory'])

    ->register('transport.smtphandlers')
    ->asArray()
    ->withDependencies(['transport.authhandler'])

    ->register('transport.authhandler')
    ->asNewInstanceOf('Swift_Transport_Esmtp_AuthHandler')
    ->withDependencies(['transport.authhandlers'])

    ->register('transport.authhandlers')
    ->asArray()
    ->withDependencies([
        'transport.crammd5auth',
        'transport.loginauth',
        'transport.plainauth',
        'transport.ntlmauth',
        'transport.xoauth2auth',
    ])

    ->register('transport.smtputf8handler')
    ->asNewInstanceOf('Swift_Transport_Esmtp_SmtpUtf8Handler')

    ->register('transport.8bitmimehandler')
    ->asNewInstanceOf('Swift_Transport_Esmtp_EightBitMimeHandler')
    ->addConstructorValue('8BITMIME')

    ->register('transport.crammd5auth')
    ->asNewInstanceOf('Swift_Transport_Esmtp_Auth_CramMd5Authenticator')

    ->register('transport.loginauth')
    ->asNewInstanceOf('Swift_Transport_Esmtp_Auth_LoginAuthenticator')

    ->register('transport.plainauth')
    ->asNewInstanceOf('Swift_Transport_Esmtp_Auth_PlainAuthenticator')

    ->register('transport.xoauth2auth')
    ->asNewInstanceOf('Swift_Transport_Esmtp_Auth_XOAuth2Authenticator')

    ->register('transport.ntlmauth')
    ->asNewInstanceOf('Swift_Transport_Esmtp_Auth_NTLMAuthenticator')

    ->register('transport.eventdispatcher')
    ->asNewInstanceOf('Swift_Events_SimpleEventDispatcher')

    ->register('transport.replacementfactory')
    ->asSharedInstanceOf('Swift_StreamFilters_StringReplacementFilterFactory')

    ->register('address.idnaddressencoder')
    ->asNewInstanceOf('Swift_AddressEncoder_IdnAddressEncoder')

    ->register('address.utf8addressencoder')
    ->asNewInstanceOf('Swift_AddressEncoder_Utf8AddressEncoder')
;
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/dependency_maps/transport_deps.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

Swift_DependencyContainer::getInstance()
    ->register('transport.localdomain')
    // As SERVER_NAME can come from the user in certain configurations, check that
    // it does not contain forbidden characters (see RFC 952 and RFC 2181). Use
    // preg_replace() instead of preg_match() to prevent DoS attacks with long host names.
    ->asValue(!empty(\$_SERVER['SERVER_NAME']) && '' === preg_replace('/(?:^\\[)?[a-zA-Z0-9-:\\]_]+\\.?/', '', \$_SERVER['SERVER_NAME']) ? trim(\$_SERVER['SERVER_NAME'], '[]') : '127.0.0.1')

    ->register('transport.smtp')
    ->asNewInstanceOf('Swift_Transport_EsmtpTransport')
    ->withDependencies([
        'transport.buffer',
        'transport.smtphandlers',
        'transport.eventdispatcher',
        'transport.localdomain',
        'address.idnaddressencoder',
    ])

    ->register('transport.sendmail')
    ->asNewInstanceOf('Swift_Transport_SendmailTransport')
    ->withDependencies([
        'transport.buffer',
        'transport.eventdispatcher',
        'transport.localdomain',
    ])

    ->register('transport.loadbalanced')
    ->asNewInstanceOf('Swift_Transport_LoadBalancedTransport')

    ->register('transport.failover')
    ->asNewInstanceOf('Swift_Transport_FailoverTransport')

    ->register('transport.spool')
    ->asNewInstanceOf('Swift_Transport_SpoolTransport')
    ->withDependencies(['transport.eventdispatcher'])

    ->register('transport.null')
    ->asNewInstanceOf('Swift_Transport_NullTransport')
    ->withDependencies(['transport.eventdispatcher'])

    ->register('transport.buffer')
    ->asNewInstanceOf('Swift_Transport_StreamBuffer')
    ->withDependencies(['transport.replacementfactory'])

    ->register('transport.smtphandlers')
    ->asArray()
    ->withDependencies(['transport.authhandler'])

    ->register('transport.authhandler')
    ->asNewInstanceOf('Swift_Transport_Esmtp_AuthHandler')
    ->withDependencies(['transport.authhandlers'])

    ->register('transport.authhandlers')
    ->asArray()
    ->withDependencies([
        'transport.crammd5auth',
        'transport.loginauth',
        'transport.plainauth',
        'transport.ntlmauth',
        'transport.xoauth2auth',
    ])

    ->register('transport.smtputf8handler')
    ->asNewInstanceOf('Swift_Transport_Esmtp_SmtpUtf8Handler')

    ->register('transport.8bitmimehandler')
    ->asNewInstanceOf('Swift_Transport_Esmtp_EightBitMimeHandler')
    ->addConstructorValue('8BITMIME')

    ->register('transport.crammd5auth')
    ->asNewInstanceOf('Swift_Transport_Esmtp_Auth_CramMd5Authenticator')

    ->register('transport.loginauth')
    ->asNewInstanceOf('Swift_Transport_Esmtp_Auth_LoginAuthenticator')

    ->register('transport.plainauth')
    ->asNewInstanceOf('Swift_Transport_Esmtp_Auth_PlainAuthenticator')

    ->register('transport.xoauth2auth')
    ->asNewInstanceOf('Swift_Transport_Esmtp_Auth_XOAuth2Authenticator')

    ->register('transport.ntlmauth')
    ->asNewInstanceOf('Swift_Transport_Esmtp_Auth_NTLMAuthenticator')

    ->register('transport.eventdispatcher')
    ->asNewInstanceOf('Swift_Events_SimpleEventDispatcher')

    ->register('transport.replacementfactory')
    ->asSharedInstanceOf('Swift_StreamFilters_StringReplacementFilterFactory')

    ->register('address.idnaddressencoder')
    ->asNewInstanceOf('Swift_AddressEncoder_IdnAddressEncoder')

    ->register('address.utf8addressencoder')
    ->asNewInstanceOf('Swift_AddressEncoder_Utf8AddressEncoder')
;
", "vendor/swiftmailer/swiftmailer/lib/dependency_maps/transport_deps.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/dependency_maps/transport_deps.php");
    }
}
