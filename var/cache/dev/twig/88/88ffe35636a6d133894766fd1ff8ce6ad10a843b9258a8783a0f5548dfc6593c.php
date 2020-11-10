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

/* vendor/symfony/swiftmailer-bundle/Tests/DependencyInjection/Fixtures/config/xml/sender_address.xml */
class __TwigTemplate_97f2536daef36e86e7fec43a6b026aa74219397b0bdd295cd1552c13fdfabb71 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/swiftmailer-bundle/Tests/DependencyInjection/Fixtures/config/xml/sender_address.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/swiftmailer-bundle/Tests/DependencyInjection/Fixtures/config/xml/sender_address.xml"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>
<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xmlns:swiftmailer=\"http://symfony.com/schema/dic/swiftmailer\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd\">

    <swiftmailer:config
            sender-address=\"noreply@test.com\">
    </swiftmailer:config>
</container>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/swiftmailer-bundle/Tests/DependencyInjection/Fixtures/config/xml/sender_address.xml";
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
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd\">

    <swiftmailer:config
            sender-address=\"noreply@test.com\">
    </swiftmailer:config>
</container>
", "vendor/symfony/swiftmailer-bundle/Tests/DependencyInjection/Fixtures/config/xml/sender_address.xml", "/var/www/public/DevLaon/templates/vendor/symfony/swiftmailer-bundle/Tests/DependencyInjection/Fixtures/config/xml/sender_address.xml");
    }
}
