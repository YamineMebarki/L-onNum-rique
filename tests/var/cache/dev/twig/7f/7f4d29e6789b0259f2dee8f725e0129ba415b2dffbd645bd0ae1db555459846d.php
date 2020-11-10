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

/* vendor/doctrine/doctrine-bundle/phpcs.xml.dist */
class __TwigTemplate_251c9ab3ce0adb5bfd49a319d7d92ff3d8c488c98cb8ff40da0f9ec893fd318f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-bundle/phpcs.xml.dist"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-bundle/phpcs.xml.dist"));

        // line 1
        echo "<?xml version=\"1.0\"?>
<ruleset>
    <arg name=\"basepath\" value=\".\"/>
    <arg name=\"extensions\" value=\"php\"/>
    <arg name=\"parallel\" value=\"80\"/>
    <arg name=\"cache\" value=\".phpcs-cache\"/>
    <arg name=\"colors\"/>

    <!-- Ignore warnings, show progress of the run and show sniff names -->
    <arg value=\"nps\"/>

    <file>.</file>
    <exclude-pattern>vendor/*</exclude-pattern>

    <rule ref=\"Doctrine\">
        <exclude name=\"SlevomatCodingStandard.Classes.ClassConstantVisibility\"/>
        <exclude name=\"SlevomatCodingStandard.Exceptions.ReferenceThrowableOnly\"/>
        <exclude name=\"SlevomatCodingStandard.Namespaces.ReferenceUsedNamesOnly.ReferenceViaFallbackGlobalName\"/>
        <exclude name=\"SlevomatCodingStandard.TypeHints.DeclareStrictTypes\"/>
        <exclude name=\"SlevomatCodingStandard.TypeHints.NullableTypeForNullDefaultValue\"/>
        <exclude name=\"SlevomatCodingStandard.TypeHints.TypeHintDeclaration.MissingParameterTypeHint\"/>
        <exclude name=\"SlevomatCodingStandard.TypeHints.TypeHintDeclaration.MissingReturnTypeHint\"/>
        <exclude name=\"SlevomatCodingStandard.TypeHints.TypeHintDeclaration.MissingReturnTypeHint\"/>
        <exclude name=\"SlevomatCodingStandard.ControlStructures.RequireNullCoalesceOperator.NullCoalesceOperatorNotUsed\"/>
        <exclude name=\"SlevomatCodingStandard.Classes.SuperfluousInterfaceNaming.SuperfluousSuffix\"/>
        <exclude name=\"SlevomatCodingStandard.Classes.SuperfluousAbstractClassNaming.SuperfluousPrefix\"/>
    </rule>

    <rule ref=\"PSR1.Classes.ClassDeclaration.MultipleClasses\">
        <exclude-pattern>Tests/*</exclude-pattern>
    </rule>
    <rule ref=\"Squiz.Classes.ClassFileName.NoMatch\">
        <exclude-pattern>Tests/*</exclude-pattern>
    </rule>
    <rule ref=\"SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty\">
        <exclude-pattern>Tests/DependencyInjection/Fixtures/*</exclude-pattern>
    </rule>
    <rule ref=\"SlevomatCodingStandard.TypeHints.TypeHintDeclaration.MissingTraversableParameterTypeHintSpecification\">
        <exclude-pattern>DependencyInjection/*</exclude-pattern>
        <exclude-pattern>Twig/DoctrineExtension.php</exclude-pattern>
        <exclude-pattern>Tests/*</exclude-pattern>
    </rule>
    <rule ref=\"SlevomatCodingStandard.TypeHints.TypeHintDeclaration.MissingTraversablePropertyTypeHintSpecification\">
        <exclude-pattern>DependencyInjection/*</exclude-pattern>
        <exclude-pattern>Twig/DoctrineExtension.php</exclude-pattern>
        <exclude-pattern>Tests/*</exclude-pattern>
    </rule>
    <rule ref=\"SlevomatCodingStandard.TypeHints.TypeHintDeclaration.MissingTraversableReturnTypeHintSpecification\">
        <exclude-pattern>DependencyInjection/*</exclude-pattern>
        <exclude-pattern>Twig/DoctrineExtension.php</exclude-pattern>
        <exclude-pattern>Tests/*</exclude-pattern>
    </rule>
</ruleset>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/doctrine-bundle/phpcs.xml.dist";
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
    <arg name=\"parallel\" value=\"80\"/>
    <arg name=\"cache\" value=\".phpcs-cache\"/>
    <arg name=\"colors\"/>

    <!-- Ignore warnings, show progress of the run and show sniff names -->
    <arg value=\"nps\"/>

    <file>.</file>
    <exclude-pattern>vendor/*</exclude-pattern>

    <rule ref=\"Doctrine\">
        <exclude name=\"SlevomatCodingStandard.Classes.ClassConstantVisibility\"/>
        <exclude name=\"SlevomatCodingStandard.Exceptions.ReferenceThrowableOnly\"/>
        <exclude name=\"SlevomatCodingStandard.Namespaces.ReferenceUsedNamesOnly.ReferenceViaFallbackGlobalName\"/>
        <exclude name=\"SlevomatCodingStandard.TypeHints.DeclareStrictTypes\"/>
        <exclude name=\"SlevomatCodingStandard.TypeHints.NullableTypeForNullDefaultValue\"/>
        <exclude name=\"SlevomatCodingStandard.TypeHints.TypeHintDeclaration.MissingParameterTypeHint\"/>
        <exclude name=\"SlevomatCodingStandard.TypeHints.TypeHintDeclaration.MissingReturnTypeHint\"/>
        <exclude name=\"SlevomatCodingStandard.TypeHints.TypeHintDeclaration.MissingReturnTypeHint\"/>
        <exclude name=\"SlevomatCodingStandard.ControlStructures.RequireNullCoalesceOperator.NullCoalesceOperatorNotUsed\"/>
        <exclude name=\"SlevomatCodingStandard.Classes.SuperfluousInterfaceNaming.SuperfluousSuffix\"/>
        <exclude name=\"SlevomatCodingStandard.Classes.SuperfluousAbstractClassNaming.SuperfluousPrefix\"/>
    </rule>

    <rule ref=\"PSR1.Classes.ClassDeclaration.MultipleClasses\">
        <exclude-pattern>Tests/*</exclude-pattern>
    </rule>
    <rule ref=\"Squiz.Classes.ClassFileName.NoMatch\">
        <exclude-pattern>Tests/*</exclude-pattern>
    </rule>
    <rule ref=\"SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty\">
        <exclude-pattern>Tests/DependencyInjection/Fixtures/*</exclude-pattern>
    </rule>
    <rule ref=\"SlevomatCodingStandard.TypeHints.TypeHintDeclaration.MissingTraversableParameterTypeHintSpecification\">
        <exclude-pattern>DependencyInjection/*</exclude-pattern>
        <exclude-pattern>Twig/DoctrineExtension.php</exclude-pattern>
        <exclude-pattern>Tests/*</exclude-pattern>
    </rule>
    <rule ref=\"SlevomatCodingStandard.TypeHints.TypeHintDeclaration.MissingTraversablePropertyTypeHintSpecification\">
        <exclude-pattern>DependencyInjection/*</exclude-pattern>
        <exclude-pattern>Twig/DoctrineExtension.php</exclude-pattern>
        <exclude-pattern>Tests/*</exclude-pattern>
    </rule>
    <rule ref=\"SlevomatCodingStandard.TypeHints.TypeHintDeclaration.MissingTraversableReturnTypeHintSpecification\">
        <exclude-pattern>DependencyInjection/*</exclude-pattern>
        <exclude-pattern>Twig/DoctrineExtension.php</exclude-pattern>
        <exclude-pattern>Tests/*</exclude-pattern>
    </rule>
</ruleset>
", "vendor/doctrine/doctrine-bundle/phpcs.xml.dist", "/var/www/public/DevLaon/templates/vendor/doctrine/doctrine-bundle/phpcs.xml.dist");
    }
}
