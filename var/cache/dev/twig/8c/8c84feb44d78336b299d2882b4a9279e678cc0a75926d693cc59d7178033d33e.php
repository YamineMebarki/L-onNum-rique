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

/* vendor/doctrine/doctrine-fixtures-bundle/phpcs.xml.dist */
class __TwigTemplate_2c0148bc432c08c81cf3d0e52f6be5b3a18ff4623d9b8f74efc37602916f59c1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-fixtures-bundle/phpcs.xml.dist"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-fixtures-bundle/phpcs.xml.dist"));

        // line 1
        echo "<?xml version=\"1.0\"?>
<ruleset>
    <arg name=\"basepath\" value=\".\"/>
    <arg name=\"extensions\" value=\"php\"/>
    <arg name=\"parallel\" value=\"45\"/>
    <arg name=\"cache\" value=\".phpcs-cache\"/>
    <arg name=\"colors\"/>

     <!-- Ignore warnings and show progress of the run -->
    <arg value=\"np\"/>

    <file>.</file>
    <exclude-pattern>/vendor</exclude-pattern>

    <rule ref=\"Doctrine\">
        <!-- Traversable type hints often end up as mixed[], so we skip them for now -->
        <exclude name=\"SlevomatCodingStandard.TypeHints.TypeHintDeclaration.MissingTraversablePropertyTypeHintSpecification\"/>
        <exclude name=\"SlevomatCodingStandard.TypeHints.TypeHintDeclaration.MissingTraversableParameterTypeHintSpecification\"/>
        <exclude name=\"SlevomatCodingStandard.TypeHints.TypeHintDeclaration.MissingTraversableReturnTypeHintSpecification\"/>
    </rule>

    <rule ref=\"SlevomatCodingStandard.Classes.SuperfluousInterfaceNaming.SuperfluousSuffix\">
        <exclude-pattern>FixtureGroupInterface.php</exclude-pattern>
        <exclude-pattern>ORMFixtureInterface.php</exclude-pattern>
    </rule>
    <rule ref=\"SlevomatCodingStandard.TypeHints.TypeHintDeclaration.MissingParameterTypeHint\">
        <exclude-pattern>Loader/SymfonyFixturesLoader.php</exclude-pattern>
    </rule>
    <rule ref=\"PSR1.Classes.ClassDeclaration.MultipleClasses\">
        <exclude-pattern>Tests/IntegrationTest.php</exclude-pattern>
    </rule>
    <rule ref=\"Squiz.Classes.ClassFileName.NoMatch\">
        <exclude-pattern>Tests/IntegrationTest.php</exclude-pattern>
    </rule>
</ruleset>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/doctrine-fixtures-bundle/phpcs.xml.dist";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\"?>
<ruleset>
    <arg name=\"basepath\" value=\".\"/>
    <arg name=\"extensions\" value=\"php\"/>
    <arg name=\"parallel\" value=\"45\"/>
    <arg name=\"cache\" value=\".phpcs-cache\"/>
    <arg name=\"colors\"/>

     <!-- Ignore warnings and show progress of the run -->
    <arg value=\"np\"/>

    <file>.</file>
    <exclude-pattern>/vendor</exclude-pattern>

    <rule ref=\"Doctrine\">
        <!-- Traversable type hints often end up as mixed[], so we skip them for now -->
        <exclude name=\"SlevomatCodingStandard.TypeHints.TypeHintDeclaration.MissingTraversablePropertyTypeHintSpecification\"/>
        <exclude name=\"SlevomatCodingStandard.TypeHints.TypeHintDeclaration.MissingTraversableParameterTypeHintSpecification\"/>
        <exclude name=\"SlevomatCodingStandard.TypeHints.TypeHintDeclaration.MissingTraversableReturnTypeHintSpecification\"/>
    </rule>

    <rule ref=\"SlevomatCodingStandard.Classes.SuperfluousInterfaceNaming.SuperfluousSuffix\">
        <exclude-pattern>FixtureGroupInterface.php</exclude-pattern>
        <exclude-pattern>ORMFixtureInterface.php</exclude-pattern>
    </rule>
    <rule ref=\"SlevomatCodingStandard.TypeHints.TypeHintDeclaration.MissingParameterTypeHint\">
        <exclude-pattern>Loader/SymfonyFixturesLoader.php</exclude-pattern>
    </rule>
    <rule ref=\"PSR1.Classes.ClassDeclaration.MultipleClasses\">
        <exclude-pattern>Tests/IntegrationTest.php</exclude-pattern>
    </rule>
    <rule ref=\"Squiz.Classes.ClassFileName.NoMatch\">
        <exclude-pattern>Tests/IntegrationTest.php</exclude-pattern>
    </rule>
</ruleset>
", "vendor/doctrine/doctrine-fixtures-bundle/phpcs.xml.dist", "/var/www/public/DevLaon/templates/vendor/doctrine/doctrine-fixtures-bundle/phpcs.xml.dist");
    }
}
