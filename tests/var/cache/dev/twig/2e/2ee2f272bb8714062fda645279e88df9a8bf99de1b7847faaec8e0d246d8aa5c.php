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

/* vendor/symfony/dependency-injection/Tests/Fixtures/xml/namespaces.xml */
class __TwigTemplate_63df658e4a3ac5b42da145a195eaa40f095db36ff0fc2f894a586ed53094c7e0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/xml/namespaces.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/xml/namespaces.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<srv:container xmlns=\"http://symfony.com/schema/dic/doctrine\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xmlns:srv=\"http://symfony.com/schema/dic/services\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd
                        http://symfony.com/schema/dic/doctrine https://symfony.com/schema/dic/doctrine/doctrine-1.0.xsd\">

    <srv:services>
        <srv:service id=\"foo\" class=\"FooClass\">
            <srv:tag name=\"foo.tag\" />
            <srv:call method=\"setBar\">
                <srv:argument>foo</srv:argument>
            </srv:call>
        </srv:service>
    </srv:services>
</srv:container>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Fixtures/xml/namespaces.xml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" ?>

<srv:container xmlns=\"http://symfony.com/schema/dic/doctrine\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xmlns:srv=\"http://symfony.com/schema/dic/services\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd
                        http://symfony.com/schema/dic/doctrine https://symfony.com/schema/dic/doctrine/doctrine-1.0.xsd\">

    <srv:services>
        <srv:service id=\"foo\" class=\"FooClass\">
            <srv:tag name=\"foo.tag\" />
            <srv:call method=\"setBar\">
                <srv:argument>foo</srv:argument>
            </srv:call>
        </srv:service>
    </srv:services>
</srv:container>
", "vendor/symfony/dependency-injection/Tests/Fixtures/xml/namespaces.xml", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Fixtures/xml/namespaces.xml");
    }
}