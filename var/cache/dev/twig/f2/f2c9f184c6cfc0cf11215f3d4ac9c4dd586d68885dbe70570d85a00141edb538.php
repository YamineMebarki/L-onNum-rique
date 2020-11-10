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

/* vendor/symfony/doctrine-bridge/Tests/Resources/validator/BaseUser.xml */
class __TwigTemplate_ef21cee1f1d33b48c3c0311df57069d07d94e20151d219858cfbc18d675f8dd8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Tests/Resources/validator/BaseUser.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Tests/Resources/validator/BaseUser.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>
<constraint-mapping xmlns=\"http://symfony.com/schema/dic/constraint-mapping\"
                    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
                    xsi:schemaLocation=\"http://symfony.com/schema/dic/constraint-mapping
        http://symfony.com/schema/dic/constraint-mapping/constraint-mapping-1.0.xsd\">

    <class name=\"Symfony\\Bridge\\Doctrine\\Tests\\Fixtures\\BaseUser\">
        <property name=\"username\">
            <constraint name=\"NotBlank\">
                <option name=\"groups\">Registration</option>
            </constraint>
            <constraint name=\"Length\">
                <option name=\"min\">2</option>
                <option name=\"max\">120</option>
                <option name=\"groups\">Registration</option>
            </constraint>
        </property>
    </class>
</constraint-mapping>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/doctrine-bridge/Tests/Resources/validator/BaseUser.xml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" ?>
<constraint-mapping xmlns=\"http://symfony.com/schema/dic/constraint-mapping\"
                    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
                    xsi:schemaLocation=\"http://symfony.com/schema/dic/constraint-mapping
        http://symfony.com/schema/dic/constraint-mapping/constraint-mapping-1.0.xsd\">

    <class name=\"Symfony\\Bridge\\Doctrine\\Tests\\Fixtures\\BaseUser\">
        <property name=\"username\">
            <constraint name=\"NotBlank\">
                <option name=\"groups\">Registration</option>
            </constraint>
            <constraint name=\"Length\">
                <option name=\"min\">2</option>
                <option name=\"max\">120</option>
                <option name=\"groups\">Registration</option>
            </constraint>
        </property>
    </class>
</constraint-mapping>
", "vendor/symfony/doctrine-bridge/Tests/Resources/validator/BaseUser.xml", "/var/www/public/DevLaon/templates/vendor/symfony/doctrine-bridge/Tests/Resources/validator/BaseUser.xml");
    }
}
