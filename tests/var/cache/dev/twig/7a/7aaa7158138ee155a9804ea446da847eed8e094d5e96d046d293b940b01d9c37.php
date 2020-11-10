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

/* vendor/symfony/security-bundle/Tests/DependencyInjection/Fixtures/xml/argon2i_encoder.xml */
class __TwigTemplate_a3ab112e4574b7bc9bb7eda9f8478a059458ce0bd636d9b44d259f87caf9b5dc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/DependencyInjection/Fixtures/xml/argon2i_encoder.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/DependencyInjection/Fixtures/xml/argon2i_encoder.xml"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
   xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
   xmlns:sec=\"http://symfony.com/schema/dic/security\"
   xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">

    <imports>
        <import resource=\"container1.xml\"/>
    </imports>

    <sec:config>
        <sec:encoder class=\"JMS\\FooBundle\\Entity\\User7\" algorithm=\"argon2i\" memory_cost=\"256\" time_cost=\"1\" threads=\"2\" />
    </sec:config>

</container>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/Tests/DependencyInjection/Fixtures/xml/argon2i_encoder.xml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"UTF-8\"?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
   xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
   xmlns:sec=\"http://symfony.com/schema/dic/security\"
   xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">

    <imports>
        <import resource=\"container1.xml\"/>
    </imports>

    <sec:config>
        <sec:encoder class=\"JMS\\FooBundle\\Entity\\User7\" algorithm=\"argon2i\" memory_cost=\"256\" time_cost=\"1\" threads=\"2\" />
    </sec:config>

</container>
", "vendor/symfony/security-bundle/Tests/DependencyInjection/Fixtures/xml/argon2i_encoder.xml", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/Tests/DependencyInjection/Fixtures/xml/argon2i_encoder.xml");
    }
}
