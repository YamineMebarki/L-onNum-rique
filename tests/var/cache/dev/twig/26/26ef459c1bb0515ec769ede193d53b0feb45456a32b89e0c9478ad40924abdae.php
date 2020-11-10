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

/* vendor/doctrine/instantiator/phpcs.xml.dist */
class __TwigTemplate_9927a5251019a5c08a6e664b27f8b808dafb2cac44d6fe363cb876cf63e54e92 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/instantiator/phpcs.xml.dist"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/instantiator/phpcs.xml.dist"));

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

    <file>src</file>
    <file>tests</file>

    <rule ref=\"Doctrine\">
        <exclude name=\"SlevomatCodingStandard.TypeHints.DeclareStrictTypes\"/>
        <exclude name=\"SlevomatCodingStandard.TypeHints.TypeHintDeclaration.MissingParameterTypeHint\"/>
        <exclude name=\"SlevomatCodingStandard.TypeHints.TypeHintDeclaration.MissingReturnTypeHint\"/>
        <exclude name=\"SlevomatCodingStandard.Exceptions.ReferenceThrowableOnly.ReferencedGeneralException\"/>
    </rule>

    <rule ref=\"SlevomatCodingStandard.Classes.SuperfluousAbstractClassNaming\">
        <exclude-pattern>tests/DoctrineTest/InstantiatorTestAsset/AbstractClassAsset.php</exclude-pattern>
    </rule>

    <rule ref=\"SlevomatCodingStandard.Classes.SuperfluousExceptionNaming\">
        <exclude-pattern>src/Doctrine/Instantiator/Exception/UnexpectedValueException.php</exclude-pattern>
        <exclude-pattern>src/Doctrine/Instantiator/Exception/InvalidArgumentException.php</exclude-pattern>
    </rule>

    <rule ref=\"SlevomatCodingStandard.Classes.SuperfluousInterfaceNaming\">
        <exclude-pattern>src/Doctrine/Instantiator/Exception/ExceptionInterface.php</exclude-pattern>
        <exclude-pattern>src/Doctrine/Instantiator/InstantiatorInterface.php</exclude-pattern>
    </rule>
</ruleset>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/instantiator/phpcs.xml.dist";
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

    <file>src</file>
    <file>tests</file>

    <rule ref=\"Doctrine\">
        <exclude name=\"SlevomatCodingStandard.TypeHints.DeclareStrictTypes\"/>
        <exclude name=\"SlevomatCodingStandard.TypeHints.TypeHintDeclaration.MissingParameterTypeHint\"/>
        <exclude name=\"SlevomatCodingStandard.TypeHints.TypeHintDeclaration.MissingReturnTypeHint\"/>
        <exclude name=\"SlevomatCodingStandard.Exceptions.ReferenceThrowableOnly.ReferencedGeneralException\"/>
    </rule>

    <rule ref=\"SlevomatCodingStandard.Classes.SuperfluousAbstractClassNaming\">
        <exclude-pattern>tests/DoctrineTest/InstantiatorTestAsset/AbstractClassAsset.php</exclude-pattern>
    </rule>

    <rule ref=\"SlevomatCodingStandard.Classes.SuperfluousExceptionNaming\">
        <exclude-pattern>src/Doctrine/Instantiator/Exception/UnexpectedValueException.php</exclude-pattern>
        <exclude-pattern>src/Doctrine/Instantiator/Exception/InvalidArgumentException.php</exclude-pattern>
    </rule>

    <rule ref=\"SlevomatCodingStandard.Classes.SuperfluousInterfaceNaming\">
        <exclude-pattern>src/Doctrine/Instantiator/Exception/ExceptionInterface.php</exclude-pattern>
        <exclude-pattern>src/Doctrine/Instantiator/InstantiatorInterface.php</exclude-pattern>
    </rule>
</ruleset>
", "vendor/doctrine/instantiator/phpcs.xml.dist", "/var/www/public/DevLaon/templates/vendor/doctrine/instantiator/phpcs.xml.dist");
    }
}
