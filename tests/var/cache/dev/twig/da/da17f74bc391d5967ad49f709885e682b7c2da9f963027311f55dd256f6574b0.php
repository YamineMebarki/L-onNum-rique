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

/* vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/Util/UnsetPropertiesGenerator.php */
class __TwigTemplate_686c38111b2bc624952116b055cdc2574d3f5ac58a5312b6b63049b4a572aa01 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/Util/UnsetPropertiesGenerator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/Util/UnsetPropertiesGenerator.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\Util;

/**
 * Generates code necessary to unset all the given properties from a particular given instance string name
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
final class UnsetPropertiesGenerator
{
    private static \$closureTemplate = <<<'PHP'
\\Closure::bind(function (\\%s \$instance) {
    %s
}, \$%s, %s)->__invoke(\$%s);
PHP;

    public static function generateSnippet(Properties \$properties, string \$instanceName) : string
    {
        return self::generateUnsetAccessiblePropertiesCode(\$properties, \$instanceName)
            . self::generateUnsetPrivatePropertiesCode(\$properties, \$instanceName);
    }

    private static function generateUnsetAccessiblePropertiesCode(Properties \$properties, string \$instanceName) : string
    {
        \$accessibleProperties = \$properties->getAccessibleProperties();

        if (! \$accessibleProperties) {
            return '';
        }

        return  self::generateUnsetStatement(\$accessibleProperties, \$instanceName) . \"\\n\\n\";
    }

    private static function generateUnsetPrivatePropertiesCode(Properties \$properties, string \$instanceName) : string
    {
        \$groups = \$properties->getGroupedPrivateProperties();

        if (! \$groups) {
            return '';
        }

        \$unsetClosureCalls = [];

        /* @var \$privateProperties \\ReflectionProperty[] */
        foreach (\$groups as \$privateProperties) {
            /* @var \$firstProperty \\ReflectionProperty */
            \$firstProperty  = reset(\$privateProperties);

            \$unsetClosureCalls[] = self::generateUnsetClassPrivatePropertiesBlock(
                \$firstProperty->getDeclaringClass(),
                \$privateProperties,
                \$instanceName
            );
        }

        return implode(\"\\n\\n\", \$unsetClosureCalls) . \"\\n\\n\";
    }

    private static function generateUnsetClassPrivatePropertiesBlock(
        \\ReflectionClass \$declaringClass,
        array \$properties,
        string \$instanceName
    ) : string {
        \$declaringClassName = \$declaringClass->getName();

        return sprintf(
            self::\$closureTemplate,
            \$declaringClassName,
            self::generateUnsetStatement(\$properties, 'instance'),
            \$instanceName,
            var_export(\$declaringClassName, true),
            \$instanceName
        );
    }

    private static function generateUnsetStatement(array \$properties, string \$instanceName) : string
    {
        return 'unset('
            . implode(
                ', ',
                array_map(
                    function (\\ReflectionProperty \$property) use (\$instanceName) : string {
                        return '\$' . \$instanceName . '->' . \$property->getName();
                    },
                    \$properties
                )
            )
            . ');';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/Util/UnsetPropertiesGenerator.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\Util;

/**
 * Generates code necessary to unset all the given properties from a particular given instance string name
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
final class UnsetPropertiesGenerator
{
    private static \$closureTemplate = <<<'PHP'
\\Closure::bind(function (\\%s \$instance) {
    %s
}, \$%s, %s)->__invoke(\$%s);
PHP;

    public static function generateSnippet(Properties \$properties, string \$instanceName) : string
    {
        return self::generateUnsetAccessiblePropertiesCode(\$properties, \$instanceName)
            . self::generateUnsetPrivatePropertiesCode(\$properties, \$instanceName);
    }

    private static function generateUnsetAccessiblePropertiesCode(Properties \$properties, string \$instanceName) : string
    {
        \$accessibleProperties = \$properties->getAccessibleProperties();

        if (! \$accessibleProperties) {
            return '';
        }

        return  self::generateUnsetStatement(\$accessibleProperties, \$instanceName) . \"\\n\\n\";
    }

    private static function generateUnsetPrivatePropertiesCode(Properties \$properties, string \$instanceName) : string
    {
        \$groups = \$properties->getGroupedPrivateProperties();

        if (! \$groups) {
            return '';
        }

        \$unsetClosureCalls = [];

        /* @var \$privateProperties \\ReflectionProperty[] */
        foreach (\$groups as \$privateProperties) {
            /* @var \$firstProperty \\ReflectionProperty */
            \$firstProperty  = reset(\$privateProperties);

            \$unsetClosureCalls[] = self::generateUnsetClassPrivatePropertiesBlock(
                \$firstProperty->getDeclaringClass(),
                \$privateProperties,
                \$instanceName
            );
        }

        return implode(\"\\n\\n\", \$unsetClosureCalls) . \"\\n\\n\";
    }

    private static function generateUnsetClassPrivatePropertiesBlock(
        \\ReflectionClass \$declaringClass,
        array \$properties,
        string \$instanceName
    ) : string {
        \$declaringClassName = \$declaringClass->getName();

        return sprintf(
            self::\$closureTemplate,
            \$declaringClassName,
            self::generateUnsetStatement(\$properties, 'instance'),
            \$instanceName,
            var_export(\$declaringClassName, true),
            \$instanceName
        );
    }

    private static function generateUnsetStatement(array \$properties, string \$instanceName) : string
    {
        return 'unset('
            . implode(
                ', ',
                array_map(
                    function (\\ReflectionProperty \$property) use (\$instanceName) : string {
                        return '\$' . \$instanceName . '->' . \$property->getName();
                    },
                    \$properties
                )
            )
            . ');';
    }
}
", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/Util/UnsetPropertiesGenerator.php", "/var/www/public/DevLaon/templates/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/Util/UnsetPropertiesGenerator.php");
    }
}
