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

/* vendor/symfony/swiftmailer-bundle/Tests/DependencyInjection/Fixtures/config/xml/many_mailers.xml */
class __TwigTemplate_762b677b52b89a13a82cd0ca01a568f76e142974f1c38cb5b18476165d82a2e3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/swiftmailer-bundle/Tests/DependencyInjection/Fixtures/config/xml/many_mailers.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/swiftmailer-bundle/Tests/DependencyInjection/Fixtures/config/xml/many_mailers.xml"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>
<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xmlns:swiftmailer=\"http://symfony.com/schema/dic/swiftmailer\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd
                        http://symfony.com/schema/dic/swiftmailer http://symfony.com/schema/dic/swiftmailer/swiftmailer-1.0.xsd\">

    <swiftmailer:config default-mailer=\"secondary_mailer\">
        <swiftmailer:mailer name=\"first_mailer\"
            transport=\"smtp\"
            username=\"user_first\"
            password=\"pass_first\"
            host=\"example.org\"
            port=\"12345\"
            encryption=\"tls\"
            auth-mode=\"login\"
            timeout=\"1000\"
            source-ip=\"127.0.0.1\"
            local-domain=\"first.example.org\"
            logging=\"true\">
            <swiftmailer:antiflood/>
            <swiftmailer:delivery-address>single@host.com</swiftmailer:delivery-address>
        </swiftmailer:mailer>
        <swiftmailer:mailer name=\"secondary_mailer\"
            transport=\"smtp\"
            username=\"user_secondary\"
            password=\"pass_secondary\"
            host=\"example.org\"
            port=\"54321\"
            encryption=\"tls\"
            auth-mode=\"login\"
            timeout=\"1000\"
            source-ip=\"127.0.0.1\"
            local-domain=\"second.example.org\"
            logging=\"true\">
            <swiftmailer:spool type=\"memory\"/>
            <swiftmailer:delivery-address>single@host.com</swiftmailer:delivery-address>
        </swiftmailer:mailer>
        <swiftmailer:mailer name=\"third_mailer\"
            transport=\"smtp\"
            username=\"user_third\"
            password=\"pass_third\"
            host=\"example.org\"
            port=\"12345\"
            encryption=\"tls\"
            auth-mode=\"login\"
            timeout=\"1000\"
            source-ip=\"127.0.0.1\"
            local-domain=\"third.example.org\"
            logging=\"true\">
            <swiftmailer:delivery-address>single@host.com</swiftmailer:delivery-address>
        </swiftmailer:mailer>
    </swiftmailer:config>
</container>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/swiftmailer-bundle/Tests/DependencyInjection/Fixtures/config/xml/many_mailers.xml";
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
    xmlns:swiftmailer=\"http://symfony.com/schema/dic/swiftmailer\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd
                        http://symfony.com/schema/dic/swiftmailer http://symfony.com/schema/dic/swiftmailer/swiftmailer-1.0.xsd\">

    <swiftmailer:config default-mailer=\"secondary_mailer\">
        <swiftmailer:mailer name=\"first_mailer\"
            transport=\"smtp\"
            username=\"user_first\"
            password=\"pass_first\"
            host=\"example.org\"
            port=\"12345\"
            encryption=\"tls\"
            auth-mode=\"login\"
            timeout=\"1000\"
            source-ip=\"127.0.0.1\"
            local-domain=\"first.example.org\"
            logging=\"true\">
            <swiftmailer:antiflood/>
            <swiftmailer:delivery-address>single@host.com</swiftmailer:delivery-address>
        </swiftmailer:mailer>
        <swiftmailer:mailer name=\"secondary_mailer\"
            transport=\"smtp\"
            username=\"user_secondary\"
            password=\"pass_secondary\"
            host=\"example.org\"
            port=\"54321\"
            encryption=\"tls\"
            auth-mode=\"login\"
            timeout=\"1000\"
            source-ip=\"127.0.0.1\"
            local-domain=\"second.example.org\"
            logging=\"true\">
            <swiftmailer:spool type=\"memory\"/>
            <swiftmailer:delivery-address>single@host.com</swiftmailer:delivery-address>
        </swiftmailer:mailer>
        <swiftmailer:mailer name=\"third_mailer\"
            transport=\"smtp\"
            username=\"user_third\"
            password=\"pass_third\"
            host=\"example.org\"
            port=\"12345\"
            encryption=\"tls\"
            auth-mode=\"login\"
            timeout=\"1000\"
            source-ip=\"127.0.0.1\"
            local-domain=\"third.example.org\"
            logging=\"true\">
            <swiftmailer:delivery-address>single@host.com</swiftmailer:delivery-address>
        </swiftmailer:mailer>
    </swiftmailer:config>
</container>
", "vendor/symfony/swiftmailer-bundle/Tests/DependencyInjection/Fixtures/config/xml/many_mailers.xml", "/var/www/public/DevLaon/templates/vendor/symfony/swiftmailer-bundle/Tests/DependencyInjection/Fixtures/config/xml/many_mailers.xml");
    }
}
