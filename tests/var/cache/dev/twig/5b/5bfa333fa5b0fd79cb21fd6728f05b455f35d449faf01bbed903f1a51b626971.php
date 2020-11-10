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

/* vendor/phpdocumentor/reflection-common/phpmd.xml.dist */
class __TwigTemplate_8db8af61ddf4f1b48ee405c679831b6989fa6f46552086d8c94b147729be4109 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/phpdocumentor/reflection-common/phpmd.xml.dist"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/phpdocumentor/reflection-common/phpmd.xml.dist"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>
<ruleset
    name=\"ProxyManager rules\"
    xmlns=\"http://pmd.sf.net/ruleset/1.0.0\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://pmd.sf.net/ruleset/1.0.0 http://pmd.sf.net/ruleset_xml_schema.xsd\"
    xsi:noNamespaceSchemaLocation=\"http://pmd.sf.net/ruleset_xml_schema.xsd\"
>
    <rule ref=\"rulesets/codesize.xml\"/>
    <rule ref=\"rulesets/unusedcode.xml\"/>
    <rule ref=\"rulesets/design.xml\">
        <!-- eval is needed to generate runtime classes -->
        <exclude name=\"EvalExpression\"/>
    </rule>
    <rule ref=\"rulesets/naming.xml\">
        <exclude name=\"LongVariable\"/>
    </rule>
    <rule ref=\"rulesets/naming.xml/LongVariable\">
        <properties>
            <property name=\"minimum\">40</property>
        </properties>
    </rule>
</ruleset>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/phpdocumentor/reflection-common/phpmd.xml.dist";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"UTF-8\" ?>
<ruleset
    name=\"ProxyManager rules\"
    xmlns=\"http://pmd.sf.net/ruleset/1.0.0\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://pmd.sf.net/ruleset/1.0.0 http://pmd.sf.net/ruleset_xml_schema.xsd\"
    xsi:noNamespaceSchemaLocation=\"http://pmd.sf.net/ruleset_xml_schema.xsd\"
>
    <rule ref=\"rulesets/codesize.xml\"/>
    <rule ref=\"rulesets/unusedcode.xml\"/>
    <rule ref=\"rulesets/design.xml\">
        <!-- eval is needed to generate runtime classes -->
        <exclude name=\"EvalExpression\"/>
    </rule>
    <rule ref=\"rulesets/naming.xml\">
        <exclude name=\"LongVariable\"/>
    </rule>
    <rule ref=\"rulesets/naming.xml/LongVariable\">
        <properties>
            <property name=\"minimum\">40</property>
        </properties>
    </rule>
</ruleset>
", "vendor/phpdocumentor/reflection-common/phpmd.xml.dist", "/var/www/public/DevLaon/templates/vendor/phpdocumentor/reflection-common/phpmd.xml.dist");
    }
}
