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

/* vendor/symfony/routing/Tests/Fixtures/scalar_defaults.xml */
class __TwigTemplate_12710ebe76445ab5916b010239171379f315c2f1986f749ee561aeddac78dc6f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Tests/Fixtures/scalar_defaults.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Tests/Fixtures/scalar_defaults.xml"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>
<routes xmlns=\"http://symfony.com/schema/routing\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/routing
        https://symfony.com/schema/routing/routing-1.0.xsd\">

    <route id=\"blog\" path=\"/blog\">
        <default key=\"_controller\">
            <string>AcmeBlogBundle:Blog:index</string>
        </default>
        <default key=\"slug\" xsi:nil=\"true\" />
        <default key=\"published\">
            <bool>true</bool>
        </default>
        <default key=\"page\">
            <int>1</int>
        </default>
        <default key=\"price\">
            <float>3.5</float>
        </default>
        <default key=\"archived\">
            <bool>false</bool>
        </default>
        <default key=\"free\">
            <bool>1</bool>
        </default>
        <default key=\"locked\">
            <bool>0</bool>
        </default>
        <default key=\"foo\" xsi:nil=\"true\" />
        <default key=\"bar\" xsi:nil=\"1\" />
    </route>
</routes>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/routing/Tests/Fixtures/scalar_defaults.xml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"UTF-8\" ?>
<routes xmlns=\"http://symfony.com/schema/routing\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/routing
        https://symfony.com/schema/routing/routing-1.0.xsd\">

    <route id=\"blog\" path=\"/blog\">
        <default key=\"_controller\">
            <string>AcmeBlogBundle:Blog:index</string>
        </default>
        <default key=\"slug\" xsi:nil=\"true\" />
        <default key=\"published\">
            <bool>true</bool>
        </default>
        <default key=\"page\">
            <int>1</int>
        </default>
        <default key=\"price\">
            <float>3.5</float>
        </default>
        <default key=\"archived\">
            <bool>false</bool>
        </default>
        <default key=\"free\">
            <bool>1</bool>
        </default>
        <default key=\"locked\">
            <bool>0</bool>
        </default>
        <default key=\"foo\" xsi:nil=\"true\" />
        <default key=\"bar\" xsi:nil=\"1\" />
    </route>
</routes>
", "vendor/symfony/routing/Tests/Fixtures/scalar_defaults.xml", "/var/www/public/DevLaon/templates/vendor/symfony/routing/Tests/Fixtures/scalar_defaults.xml");
    }
}
