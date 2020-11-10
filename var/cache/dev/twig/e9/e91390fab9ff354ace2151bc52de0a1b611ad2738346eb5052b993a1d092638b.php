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

/* vendor/fig/link-util/phpcs.xml */
class __TwigTemplate_17020ba2291513ddc28102b029829d6c630e23857c1ef504b1b4590e226c31ca extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fig/link-util/phpcs.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fig/link-util/phpcs.xml"));

        // line 1
        echo "<?xml version=\"1.0\"?>
<ruleset name=\"PSR-2 coding standard\">
    <description>PSR-2 coding standards</description>

    <!-- display progress -->
    <arg value=\"p\"/>
    <arg name=\"colors\"/>

    <!-- inherit rules from: -->
    <rule ref=\"PSR2\"/>
    <rule ref=\"Generic.Arrays.DisallowLongArraySyntax\"/>
    <rule ref=\"Squiz.WhiteSpace.SuperfluousWhitespace\">
        <properties>
            <property name=\"ignoreBlankLines\" value=\"false\"/>
        </properties>
    </rule>

    <!-- Paths to check -->
    <file>src</file>
    <file>test</file>
</ruleset>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fig/link-util/phpcs.xml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\"?>
<ruleset name=\"PSR-2 coding standard\">
    <description>PSR-2 coding standards</description>

    <!-- display progress -->
    <arg value=\"p\"/>
    <arg name=\"colors\"/>

    <!-- inherit rules from: -->
    <rule ref=\"PSR2\"/>
    <rule ref=\"Generic.Arrays.DisallowLongArraySyntax\"/>
    <rule ref=\"Squiz.WhiteSpace.SuperfluousWhitespace\">
        <properties>
            <property name=\"ignoreBlankLines\" value=\"false\"/>
        </properties>
    </rule>

    <!-- Paths to check -->
    <file>src</file>
    <file>test</file>
</ruleset>
", "vendor/fig/link-util/phpcs.xml", "/var/www/public/DevLaon/templates/vendor/fig/link-util/phpcs.xml");
    }
}
