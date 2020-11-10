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

/* vendor/symfony/monolog-bundle/Tests/DependencyInjection/Fixtures/xml/handlers_with_channels.xml */
class __TwigTemplate_ad8ddd5270a2fa0d70d648b0c6c2ef7c77f2d2011e0bd1d63408e35fcca1728e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bundle/Tests/DependencyInjection/Fixtures/xml/handlers_with_channels.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bundle/Tests/DependencyInjection/Fixtures/xml/handlers_with_channels.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xmlns:monolog=\"http://symfony.com/schema/dic/monolog\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd
                        http://symfony.com/schema/dic/monolog http://symfony.com/schema/dic/monolog/monolog-1.0.xsd\">

    <services>
        <service id=\"security_logger\" class=\"Foo\">
            <tag name=\"monolog.logger\" channel=\"security\" />
        </service>

        <service id=\"doctrine_logger\" class=\"Foo\">
            <tag name=\"monolog.logger\" channel=\"doctrine\" />
        </service>

        <service id=\"foo_logger\" class=\"Foo\">
            <tag name=\"monolog.logger\" channel=\"foo\" />
        </service>

        <service id=\"bar_logger\" class=\"Foo\">
            <tag name=\"monolog.logger\" channel=\"bar\" />
        </service>
    </services>

    <monolog:config>
        <monolog:handler name=\"custom\" type=\"stream\" path=\"/tmp/symfony.log\" bubble=\"false\" level=\"ERROR\">
            <monolog:channels>
                <monolog:channel>foo</monolog:channel>
            </monolog:channels>
        </monolog:handler>
        <monolog:handler name=\"main\" type=\"group\" handler=\"nested\">
            <monolog:member>nested</monolog:member>
            <monolog:channels>
                <monolog:channel>!foo</monolog:channel>
                <monolog:channel>!bar</monolog:channel>
            </monolog:channels>
        </monolog:handler>
        <monolog:handler name=\"nested\" type=\"stream\" />
        <monolog:handler name=\"extra\" type=\"syslog\" ident=\"monolog\" facility=\"user\" level=\"ALERT\" />
        <monolog:handler name=\"more\" type=\"native_mailer\" to-email=\"monitoring@example.org\" from-email=\"webmaster@example.org\" subject=\"Monolog report\" level=\"CRITICAL\">
            <monolog:channels type=\"inclusive\">
                <monolog:channel>security</monolog:channel>
                <monolog:channel>doctrine</monolog:channel>
            </monolog:channels>
        </monolog:handler>
    </monolog:config>
</container>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/monolog-bundle/Tests/DependencyInjection/Fixtures/xml/handlers_with_channels.xml";
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
    xmlns:monolog=\"http://symfony.com/schema/dic/monolog\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd
                        http://symfony.com/schema/dic/monolog http://symfony.com/schema/dic/monolog/monolog-1.0.xsd\">

    <services>
        <service id=\"security_logger\" class=\"Foo\">
            <tag name=\"monolog.logger\" channel=\"security\" />
        </service>

        <service id=\"doctrine_logger\" class=\"Foo\">
            <tag name=\"monolog.logger\" channel=\"doctrine\" />
        </service>

        <service id=\"foo_logger\" class=\"Foo\">
            <tag name=\"monolog.logger\" channel=\"foo\" />
        </service>

        <service id=\"bar_logger\" class=\"Foo\">
            <tag name=\"monolog.logger\" channel=\"bar\" />
        </service>
    </services>

    <monolog:config>
        <monolog:handler name=\"custom\" type=\"stream\" path=\"/tmp/symfony.log\" bubble=\"false\" level=\"ERROR\">
            <monolog:channels>
                <monolog:channel>foo</monolog:channel>
            </monolog:channels>
        </monolog:handler>
        <monolog:handler name=\"main\" type=\"group\" handler=\"nested\">
            <monolog:member>nested</monolog:member>
            <monolog:channels>
                <monolog:channel>!foo</monolog:channel>
                <monolog:channel>!bar</monolog:channel>
            </monolog:channels>
        </monolog:handler>
        <monolog:handler name=\"nested\" type=\"stream\" />
        <monolog:handler name=\"extra\" type=\"syslog\" ident=\"monolog\" facility=\"user\" level=\"ALERT\" />
        <monolog:handler name=\"more\" type=\"native_mailer\" to-email=\"monitoring@example.org\" from-email=\"webmaster@example.org\" subject=\"Monolog report\" level=\"CRITICAL\">
            <monolog:channels type=\"inclusive\">
                <monolog:channel>security</monolog:channel>
                <monolog:channel>doctrine</monolog:channel>
            </monolog:channels>
        </monolog:handler>
    </monolog:config>
</container>
", "vendor/symfony/monolog-bundle/Tests/DependencyInjection/Fixtures/xml/handlers_with_channels.xml", "/var/www/public/DevLaon/templates/vendor/symfony/monolog-bundle/Tests/DependencyInjection/Fixtures/xml/handlers_with_channels.xml");
    }
}
