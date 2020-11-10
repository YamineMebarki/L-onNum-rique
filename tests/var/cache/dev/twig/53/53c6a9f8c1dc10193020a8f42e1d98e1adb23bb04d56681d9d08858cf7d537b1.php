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

/* vendor/symfony/security-bundle/Resources/config/templating_php.xml */
class __TwigTemplate_e025cbf79c9b12f977fa12178cb9403a7d2f911e25fda8252e6ea281e9c20dae extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Resources/config/templating_php.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Resources/config/templating_php.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <defaults public=\"false\" />

        <service id=\"templating.helper.logout_url\" class=\"Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\LogoutUrlHelper\">
            <tag name=\"templating.helper\" alias=\"logout_url\" />
            <argument type=\"service\" id=\"security.logout_url_generator\" />

            <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.3 and will be removed in 5.0.</deprecated>
        </service>

        <service id=\"templating.helper.security\" class=\"Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\SecurityHelper\">
            <tag name=\"templating.helper\" alias=\"security\" />
            <argument type=\"service\" id=\"security.authorization_checker\" on-invalid=\"ignore\" />

            <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.3 and will be removed in 5.0.</deprecated>
        </service>
    </services>
</container>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/Resources/config/templating_php.xml";
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

    <services>
        <defaults public=\"false\" />

        <service id=\"templating.helper.logout_url\" class=\"Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\LogoutUrlHelper\">
            <tag name=\"templating.helper\" alias=\"logout_url\" />
            <argument type=\"service\" id=\"security.logout_url_generator\" />

            <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.3 and will be removed in 5.0.</deprecated>
        </service>

        <service id=\"templating.helper.security\" class=\"Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\SecurityHelper\">
            <tag name=\"templating.helper\" alias=\"security\" />
            <argument type=\"service\" id=\"security.authorization_checker\" on-invalid=\"ignore\" />

            <deprecated>The \"%service_id%\" service is deprecated since Symfony 4.3 and will be removed in 5.0.</deprecated>
        </service>
    </services>
</container>
", "vendor/symfony/security-bundle/Resources/config/templating_php.xml", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/Resources/config/templating_php.xml");
    }
}
