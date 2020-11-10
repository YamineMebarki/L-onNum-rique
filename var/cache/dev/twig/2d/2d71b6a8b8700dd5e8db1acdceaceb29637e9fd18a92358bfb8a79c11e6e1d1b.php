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

/* vendor/phpdocumentor/type-resolver/phpcs.xml.dist */
class __TwigTemplate_b0b7a678700ccd05868f9fd373cdcdee85a1d9a72d64139b7a4e4b40d1d5cec8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/phpdocumentor/type-resolver/phpcs.xml.dist"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/phpdocumentor/type-resolver/phpcs.xml.dist"));

        // line 1
        echo "<?xml version=\"1.0\"?>
<ruleset name=\"phpDocumentor\">
 <description>The coding standard for phpDocumentor.</description>

    <file>src</file>
    <file>tests/unit</file>
    <exclude-pattern>*/tests/unit/Types/ContextFactoryTest.php</exclude-pattern>
    <arg value=\"p\"/>
    <rule ref=\"PSR2\">
        <include-pattern>*\\.php</include-pattern>
    </rule>

    <rule ref=\"Doctrine\">
        <exclude name=\"SlevomatCodingStandard.TypeHints.UselessConstantTypeHint.UselessDocComment\" />
    </rule>

    <rule ref=\"Squiz.Classes.ValidClassName.NotCamelCaps\">
        <exclude-pattern>*/src/*_.php</exclude-pattern>
    </rule>

    <rule ref=\"SlevomatCodingStandard.Classes.SuperfluousAbstractClassNaming.SuperfluousPrefix\">
        <exclude-pattern>*/src/*/Abstract*.php</exclude-pattern>
    </rule>

    <rule ref=\"Generic.Formatting.SpaceAfterNot\">
        <properties>
            <property name=\"spacing\" value=\"0\" />
        </properties>
    </rule>
</ruleset>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/phpdocumentor/type-resolver/phpcs.xml.dist";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\"?>
<ruleset name=\"phpDocumentor\">
 <description>The coding standard for phpDocumentor.</description>

    <file>src</file>
    <file>tests/unit</file>
    <exclude-pattern>*/tests/unit/Types/ContextFactoryTest.php</exclude-pattern>
    <arg value=\"p\"/>
    <rule ref=\"PSR2\">
        <include-pattern>*\\.php</include-pattern>
    </rule>

    <rule ref=\"Doctrine\">
        <exclude name=\"SlevomatCodingStandard.TypeHints.UselessConstantTypeHint.UselessDocComment\" />
    </rule>

    <rule ref=\"Squiz.Classes.ValidClassName.NotCamelCaps\">
        <exclude-pattern>*/src/*_.php</exclude-pattern>
    </rule>

    <rule ref=\"SlevomatCodingStandard.Classes.SuperfluousAbstractClassNaming.SuperfluousPrefix\">
        <exclude-pattern>*/src/*/Abstract*.php</exclude-pattern>
    </rule>

    <rule ref=\"Generic.Formatting.SpaceAfterNot\">
        <properties>
            <property name=\"spacing\" value=\"0\" />
        </properties>
    </rule>
</ruleset>
", "vendor/phpdocumentor/type-resolver/phpcs.xml.dist", "/var/www/public/DevLaon/templates/vendor/phpdocumentor/type-resolver/phpcs.xml.dist");
    }
}
