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

/* vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/LazyLoadingGhost/MethodGenerator/CallInitializer.php */
class __TwigTemplate_d7bfb03ad57950eca26e6d18b9efa1e3a0d8c55d768247d1aeaad83cc05453ed extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/LazyLoadingGhost/MethodGenerator/CallInitializer.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/LazyLoadingGhost/MethodGenerator/CallInitializer.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\LazyLoadingGhost\\MethodGenerator;

use ProxyManager\\Generator\\MethodGenerator;
use ProxyManager\\Generator\\Util\\IdentifierSuffixer;
use ProxyManager\\ProxyGenerator\\Util\\Properties;
use ReflectionProperty;
use Zend\\Code\\Generator\\ParameterGenerator;
use Zend\\Code\\Generator\\PropertyGenerator;

/**
 * Implementation for {@see \\ProxyManager\\Proxy\\LazyLoadingInterface::isProxyInitialized}
 * for lazy loading value holder objects
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class CallInitializer extends MethodGenerator
{
    /**
     * Constructor
     *
     * @param PropertyGenerator \$initializerProperty
     * @param PropertyGenerator \$initTracker
     * @param Properties        \$properties
     */
    public function __construct(
        PropertyGenerator \$initializerProperty,
        PropertyGenerator \$initTracker,
        Properties \$properties
    ) {
        \$docBlock = <<<'DOCBLOCK'
Triggers initialization logic for this ghost object

@param string  \$methodName
@param mixed[] \$parameters

@return mixed
DOCBLOCK;

        parent::__construct(
            IdentifierSuffixer::getIdentifier('callInitializer'),
            [
                new ParameterGenerator('methodName'),
                new ParameterGenerator('parameters', 'array'),
            ],
            static::FLAG_PRIVATE,
            null,
            \$docBlock
        );

        \$initializer    = \$initializerProperty->getName();
        \$initialization = \$initTracker->getName();

        \$bodyTemplate = <<<'PHP'
if (\$this->%s || ! \$this->%s) {
    return;
}

\$this->%s = true;

%s
%s

\$result = \$this->%s->__invoke(\$this, \$methodName, \$parameters, \$this->%s, \$properties);
\$this->%s = false;

return \$result;
PHP;

        \$this->setBody(sprintf(
            \$bodyTemplate,
            \$initialization,
            \$initializer,
            \$initialization,
            \$this->propertiesInitializationCode(\$properties),
            \$this->propertiesReferenceArrayCode(\$properties),
            \$initializer,
            \$initializer,
            \$initialization
        ));
    }

    private function propertiesInitializationCode(Properties \$properties) : string
    {
        \$assignments = [];

        foreach (\$properties->getAccessibleProperties() as \$property) {
            \$assignments[] = '\$this->'
                . \$property->getName()
                . ' = ' . \$this->getExportedPropertyDefaultValue(\$property)
                . ';';
        }

        foreach (\$properties->getGroupedPrivateProperties() as \$className => \$privateProperties) {
            \$cacheKey      = 'cache' . str_replace('\\\\', '_', \$className);
            \$assignments[] = 'static \$' . \$cacheKey . \";\\n\\n\"
                . '\$' . \$cacheKey . ' ?: \$' . \$cacheKey . \" = \\\\Closure::bind(function (\\\$instance) {\\n\"
                . \$this->getPropertyDefaultsAssignments(\$privateProperties) . \"\\n\"
                . '}, null, ' . var_export(\$className, true) . \");\\n\\n\"
                . '\$' . \$cacheKey . \"(\\\$this);\\n\\n\";
        }

        return implode(\"\\n\", \$assignments) . \"\\n\\n\";
    }

    /**
     * @param ReflectionProperty[] \$properties
     */
    private function getPropertyDefaultsAssignments(array \$properties) : string
    {
        return implode(
            \"\\n\",
            array_map(
                function (ReflectionProperty \$property) : string {
                    return '    \$instance->' . \$property->getName()
                        . ' = ' . \$this->getExportedPropertyDefaultValue(\$property) . ';';
                },
                \$properties
            )
        );
    }

    private function propertiesReferenceArrayCode(Properties \$properties) : string
    {
        \$assignments = [];

        foreach (\$properties->getAccessibleProperties() as \$propertyInternalName => \$property) {
            \$assignments[] = '    '
                . var_export(\$propertyInternalName, true) . ' => & \$this->' . \$property->getName()
                . ',';
        }

        \$code = \"\\\$properties = [\\n\" . implode(\"\\n\", \$assignments) . \"\\n];\\n\\n\";

        // must use assignments, as direct reference during array definition causes a fatal error (not sure why)
        foreach (\$properties->getGroupedPrivateProperties() as \$className => \$classPrivateProperties) {
            \$cacheKey  = 'cacheFetch' . str_replace('\\\\', '_', \$className);

            \$code .= 'static \$' . \$cacheKey . \";\\n\\n\"
                . '\$' . \$cacheKey . ' ?: \$' . \$cacheKey
                . \" = \\\\Closure::bind(function (\\\$instance, array & \\\$properties) {\\n\"
                . \$this->generatePrivatePropertiesAssignmentsCode(\$classPrivateProperties)
                . \"}, \\\$this, \" . var_export(\$className, true) . \");\\n\\n\"
                . '\$' . \$cacheKey . \"(\\\$this, \\\$properties);\";
        }

        return \$code;
    }

    /**
     * @param ReflectionProperty[] \$properties indexed by internal name
     *
     * @return string
     */
    private function generatePrivatePropertiesAssignmentsCode(array \$properties) : string
    {
        \$code = '';

        foreach (\$properties as \$property) {
            \$key   = \"\\0\" . \$property->getDeclaringClass()->getName() . \"\\0\" . \$property->getName();
            \$code .= '    \$properties[' . var_export(\$key, true) . '] = '
                . '& \$instance->' . \$property->getName() . \";\\n\";
        }

        return \$code;
    }

    private function getExportedPropertyDefaultValue(ReflectionProperty \$property) : string
    {
        \$name     = \$property->getName();
        \$defaults = \$property->getDeclaringClass()->getDefaultProperties();

        return var_export(\$defaults[\$name] ?? null, true);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/LazyLoadingGhost/MethodGenerator/CallInitializer.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\LazyLoadingGhost\\MethodGenerator;

use ProxyManager\\Generator\\MethodGenerator;
use ProxyManager\\Generator\\Util\\IdentifierSuffixer;
use ProxyManager\\ProxyGenerator\\Util\\Properties;
use ReflectionProperty;
use Zend\\Code\\Generator\\ParameterGenerator;
use Zend\\Code\\Generator\\PropertyGenerator;

/**
 * Implementation for {@see \\ProxyManager\\Proxy\\LazyLoadingInterface::isProxyInitialized}
 * for lazy loading value holder objects
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class CallInitializer extends MethodGenerator
{
    /**
     * Constructor
     *
     * @param PropertyGenerator \$initializerProperty
     * @param PropertyGenerator \$initTracker
     * @param Properties        \$properties
     */
    public function __construct(
        PropertyGenerator \$initializerProperty,
        PropertyGenerator \$initTracker,
        Properties \$properties
    ) {
        \$docBlock = <<<'DOCBLOCK'
Triggers initialization logic for this ghost object

@param string  \$methodName
@param mixed[] \$parameters

@return mixed
DOCBLOCK;

        parent::__construct(
            IdentifierSuffixer::getIdentifier('callInitializer'),
            [
                new ParameterGenerator('methodName'),
                new ParameterGenerator('parameters', 'array'),
            ],
            static::FLAG_PRIVATE,
            null,
            \$docBlock
        );

        \$initializer    = \$initializerProperty->getName();
        \$initialization = \$initTracker->getName();

        \$bodyTemplate = <<<'PHP'
if (\$this->%s || ! \$this->%s) {
    return;
}

\$this->%s = true;

%s
%s

\$result = \$this->%s->__invoke(\$this, \$methodName, \$parameters, \$this->%s, \$properties);
\$this->%s = false;

return \$result;
PHP;

        \$this->setBody(sprintf(
            \$bodyTemplate,
            \$initialization,
            \$initializer,
            \$initialization,
            \$this->propertiesInitializationCode(\$properties),
            \$this->propertiesReferenceArrayCode(\$properties),
            \$initializer,
            \$initializer,
            \$initialization
        ));
    }

    private function propertiesInitializationCode(Properties \$properties) : string
    {
        \$assignments = [];

        foreach (\$properties->getAccessibleProperties() as \$property) {
            \$assignments[] = '\$this->'
                . \$property->getName()
                . ' = ' . \$this->getExportedPropertyDefaultValue(\$property)
                . ';';
        }

        foreach (\$properties->getGroupedPrivateProperties() as \$className => \$privateProperties) {
            \$cacheKey      = 'cache' . str_replace('\\\\', '_', \$className);
            \$assignments[] = 'static \$' . \$cacheKey . \";\\n\\n\"
                . '\$' . \$cacheKey . ' ?: \$' . \$cacheKey . \" = \\\\Closure::bind(function (\\\$instance) {\\n\"
                . \$this->getPropertyDefaultsAssignments(\$privateProperties) . \"\\n\"
                . '}, null, ' . var_export(\$className, true) . \");\\n\\n\"
                . '\$' . \$cacheKey . \"(\\\$this);\\n\\n\";
        }

        return implode(\"\\n\", \$assignments) . \"\\n\\n\";
    }

    /**
     * @param ReflectionProperty[] \$properties
     */
    private function getPropertyDefaultsAssignments(array \$properties) : string
    {
        return implode(
            \"\\n\",
            array_map(
                function (ReflectionProperty \$property) : string {
                    return '    \$instance->' . \$property->getName()
                        . ' = ' . \$this->getExportedPropertyDefaultValue(\$property) . ';';
                },
                \$properties
            )
        );
    }

    private function propertiesReferenceArrayCode(Properties \$properties) : string
    {
        \$assignments = [];

        foreach (\$properties->getAccessibleProperties() as \$propertyInternalName => \$property) {
            \$assignments[] = '    '
                . var_export(\$propertyInternalName, true) . ' => & \$this->' . \$property->getName()
                . ',';
        }

        \$code = \"\\\$properties = [\\n\" . implode(\"\\n\", \$assignments) . \"\\n];\\n\\n\";

        // must use assignments, as direct reference during array definition causes a fatal error (not sure why)
        foreach (\$properties->getGroupedPrivateProperties() as \$className => \$classPrivateProperties) {
            \$cacheKey  = 'cacheFetch' . str_replace('\\\\', '_', \$className);

            \$code .= 'static \$' . \$cacheKey . \";\\n\\n\"
                . '\$' . \$cacheKey . ' ?: \$' . \$cacheKey
                . \" = \\\\Closure::bind(function (\\\$instance, array & \\\$properties) {\\n\"
                . \$this->generatePrivatePropertiesAssignmentsCode(\$classPrivateProperties)
                . \"}, \\\$this, \" . var_export(\$className, true) . \");\\n\\n\"
                . '\$' . \$cacheKey . \"(\\\$this, \\\$properties);\";
        }

        return \$code;
    }

    /**
     * @param ReflectionProperty[] \$properties indexed by internal name
     *
     * @return string
     */
    private function generatePrivatePropertiesAssignmentsCode(array \$properties) : string
    {
        \$code = '';

        foreach (\$properties as \$property) {
            \$key   = \"\\0\" . \$property->getDeclaringClass()->getName() . \"\\0\" . \$property->getName();
            \$code .= '    \$properties[' . var_export(\$key, true) . '] = '
                . '& \$instance->' . \$property->getName() . \";\\n\";
        }

        return \$code;
    }

    private function getExportedPropertyDefaultValue(ReflectionProperty \$property) : string
    {
        \$name     = \$property->getName();
        \$defaults = \$property->getDeclaringClass()->getDefaultProperties();

        return var_export(\$defaults[\$name] ?? null, true);
    }
}
", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/LazyLoadingGhost/MethodGenerator/CallInitializer.php", "/var/www/public/DevLaon/templates/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/LazyLoadingGhost/MethodGenerator/CallInitializer.php");
    }
}
