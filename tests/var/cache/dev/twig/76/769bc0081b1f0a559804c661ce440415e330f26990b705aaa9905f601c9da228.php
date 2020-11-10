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

/* vendor/symfony/framework-bundle/Tests/Fixtures/Validation/Resources/person.xml */
class __TwigTemplate_9dec9998b17a314081fce5c9395cb1e4ba243d95d2645f8716939007ca2198f7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Fixtures/Validation/Resources/person.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Fixtures/Validation/Resources/person.xml"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>
<constraint-mapping xmlns=\"http://symfony.com/schema/dic/constraint-mapping\"
                    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
                    xsi:schemaLocation=\"http://symfony.com/schema/dic/constraint-mapping https://symfony.com/schema/dic/constraint-mapping/constraint-mapping-1.0.xsd\">

    <class name=\"Symfony\\Bundle\\FrameworkBundle\\Tests\\Fixtures\\Validation\\Person\">
        <property name=\"eyeColor\">
            <constraint name=\"Choice\">
                <option name=\"choices\">
                    <value>brown</value>
                    <value>green</value>
                    <value>blue</value>
                </option>
                <option name=\"message\">Choose a valid eye color.</option>
            </constraint>
        </property>
    </class>

    <class name=\"Symfony\\Bundle\\FrameworkBundle\\Tests\\Fixtures\\Validation\\Article\">
        <property name=\"category\">
            <constraint name=\"Choice\">
                <option name=\"choices\">
                    <value>other</value>
                </option>
                <option name=\"message\">This should be ignored.</option>
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
        return "vendor/symfony/framework-bundle/Tests/Fixtures/Validation/Resources/person.xml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"UTF-8\" ?>
<constraint-mapping xmlns=\"http://symfony.com/schema/dic/constraint-mapping\"
                    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
                    xsi:schemaLocation=\"http://symfony.com/schema/dic/constraint-mapping https://symfony.com/schema/dic/constraint-mapping/constraint-mapping-1.0.xsd\">

    <class name=\"Symfony\\Bundle\\FrameworkBundle\\Tests\\Fixtures\\Validation\\Person\">
        <property name=\"eyeColor\">
            <constraint name=\"Choice\">
                <option name=\"choices\">
                    <value>brown</value>
                    <value>green</value>
                    <value>blue</value>
                </option>
                <option name=\"message\">Choose a valid eye color.</option>
            </constraint>
        </property>
    </class>

    <class name=\"Symfony\\Bundle\\FrameworkBundle\\Tests\\Fixtures\\Validation\\Article\">
        <property name=\"category\">
            <constraint name=\"Choice\">
                <option name=\"choices\">
                    <value>other</value>
                </option>
                <option name=\"message\">This should be ignored.</option>
            </constraint>
        </property>
    </class>
</constraint-mapping>
", "vendor/symfony/framework-bundle/Tests/Fixtures/Validation/Resources/person.xml", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Fixtures/Validation/Resources/person.xml");
    }
}
