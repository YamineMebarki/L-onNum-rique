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

/* vendor/doctrine/collections/psalm.xml.dist */
class __TwigTemplate_1ed445bace62843c4a21809fb26b0c76bf9c5a22e94af97164e6a46e51d48f5b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/collections/psalm.xml.dist"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/collections/psalm.xml.dist"));

        // line 1
        echo "<?xml version=\"1.0\"?>
<psalm
    totallyTyped=\"false\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xmlns=\"https://getpsalm.org/schema/config\"
    xsi:schemaLocation=\"https://getpsalm.org/schema/config vendor/vimeo/psalm/config.xsd\"
>
    <projectFiles>
        <directory name=\"lib\" />
        <ignoreFiles>
            <directory name=\"vendor\" />
            <directory name=\"lib/Doctrine/Common/Collections/Expr\"/>
        </ignoreFiles>
    </projectFiles>

    <issueHandlers>
        <LessSpecificReturnType errorLevel=\"info\" />

        <!-- level 3 issues - slightly lazy code writing, but provably low false-negatives -->

        <DeprecatedMethod errorLevel=\"info\" />
        <DeprecatedProperty errorLevel=\"info\" />
        <DeprecatedClass errorLevel=\"info\" />
        <DeprecatedConstant errorLevel=\"info\" />
        <DeprecatedInterface errorLevel=\"info\" />
        <DeprecatedTrait errorLevel=\"info\" />

        <InternalMethod errorLevel=\"info\" />
        <InternalProperty errorLevel=\"info\" />
        <InternalClass errorLevel=\"info\" />

        <MissingClosureReturnType errorLevel=\"info\" />
        <MissingReturnType errorLevel=\"info\" />
        <MissingPropertyType errorLevel=\"info\" />
        <InvalidDocblock errorLevel=\"info\" />
        <MisplacedRequiredParam errorLevel=\"info\" />

        <PropertyNotSetInConstructor errorLevel=\"info\" />
        <MissingConstructor errorLevel=\"info\" />
        <MissingClosureParamType errorLevel=\"info\" />
        <MissingParamType errorLevel=\"info\" />

        <RedundantCondition errorLevel=\"info\" />

        <DocblockTypeContradiction errorLevel=\"info\" />
        <RedundantConditionGivenDocblockType errorLevel=\"info\" />

        <UnresolvableInclude errorLevel=\"info\" />

        <RawObjectIteration errorLevel=\"info\" />

        <InvalidStringClass errorLevel=\"info\" />
    </issueHandlers>
</psalm>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/collections/psalm.xml.dist";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\"?>
<psalm
    totallyTyped=\"false\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xmlns=\"https://getpsalm.org/schema/config\"
    xsi:schemaLocation=\"https://getpsalm.org/schema/config vendor/vimeo/psalm/config.xsd\"
>
    <projectFiles>
        <directory name=\"lib\" />
        <ignoreFiles>
            <directory name=\"vendor\" />
            <directory name=\"lib/Doctrine/Common/Collections/Expr\"/>
        </ignoreFiles>
    </projectFiles>

    <issueHandlers>
        <LessSpecificReturnType errorLevel=\"info\" />

        <!-- level 3 issues - slightly lazy code writing, but provably low false-negatives -->

        <DeprecatedMethod errorLevel=\"info\" />
        <DeprecatedProperty errorLevel=\"info\" />
        <DeprecatedClass errorLevel=\"info\" />
        <DeprecatedConstant errorLevel=\"info\" />
        <DeprecatedInterface errorLevel=\"info\" />
        <DeprecatedTrait errorLevel=\"info\" />

        <InternalMethod errorLevel=\"info\" />
        <InternalProperty errorLevel=\"info\" />
        <InternalClass errorLevel=\"info\" />

        <MissingClosureReturnType errorLevel=\"info\" />
        <MissingReturnType errorLevel=\"info\" />
        <MissingPropertyType errorLevel=\"info\" />
        <InvalidDocblock errorLevel=\"info\" />
        <MisplacedRequiredParam errorLevel=\"info\" />

        <PropertyNotSetInConstructor errorLevel=\"info\" />
        <MissingConstructor errorLevel=\"info\" />
        <MissingClosureParamType errorLevel=\"info\" />
        <MissingParamType errorLevel=\"info\" />

        <RedundantCondition errorLevel=\"info\" />

        <DocblockTypeContradiction errorLevel=\"info\" />
        <RedundantConditionGivenDocblockType errorLevel=\"info\" />

        <UnresolvableInclude errorLevel=\"info\" />

        <RawObjectIteration errorLevel=\"info\" />

        <InvalidStringClass errorLevel=\"info\" />
    </issueHandlers>
</psalm>
", "vendor/doctrine/collections/psalm.xml.dist", "/var/www/public/DevLaon/templates/vendor/doctrine/collections/psalm.xml.dist");
    }
}
