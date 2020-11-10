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

/* vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptorScopeLocalizer/MethodGenerator/BindProxyProperties.php */
class __TwigTemplate_968f925ac213c65c6a556aac33e8f5a0a8001672381af92d4b0bccf4eeba7c70 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptorScopeLocalizer/MethodGenerator/BindProxyProperties.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptorScopeLocalizer/MethodGenerator/BindProxyProperties.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\AccessInterceptorScopeLocalizer\\MethodGenerator;

use ProxyManager\\Generator\\MethodGenerator;
use Zend\\Code\\Generator\\ParameterGenerator;
use ProxyManager\\ProxyGenerator\\Util\\Properties;
use ReflectionClass;
use Zend\\Code\\Generator\\PropertyGenerator;

/**
 * The `bindProxyProperties` method implementation for access interceptor scope localizers
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class BindProxyProperties extends MethodGenerator
{
    /**
     * Constructor
     *
     * @param ReflectionClass   \$originalClass
     * @param PropertyGenerator \$prefixInterceptors
     * @param PropertyGenerator \$suffixInterceptors
     */
    public function __construct(
        ReflectionClass \$originalClass,
        PropertyGenerator \$prefixInterceptors,
        PropertyGenerator \$suffixInterceptors
    ) {
        parent::__construct(
            'bindProxyProperties',
            [
                new ParameterGenerator('localizedObject', \$originalClass->getName()),
                new ParameterGenerator('prefixInterceptors', 'array', []),
                new ParameterGenerator('suffixInterceptors', 'array', []),
            ],
            static::FLAG_PRIVATE,
            null,
            \"@override constructor to setup interceptors\\n\\n\"
            . \"@param \\\\\" . \$originalClass->getName() . \" \\\$localizedObject\\n\"
            . \"@param \\\\Closure[] \\\$prefixInterceptors method interceptors to be used before method logic\\n\"
            . \"@param \\\\Closure[] \\\$suffixInterceptors method interceptors to be used before method logic\"
        );

        \$localizedProperties = [];

        \$properties = Properties::fromReflectionClass(\$originalClass);

        foreach (\$properties->getAccessibleProperties() as \$property) {
            \$propertyName = \$property->getName();

            \$localizedProperties[] = '\$this->' . \$propertyName . ' = & \$localizedObject->' . \$propertyName . ';';
        }

        foreach (\$properties->getPrivateProperties() as \$property) {
            \$propertyName = \$property->getName();

            \$localizedProperties[] = \"\\\\Closure::bind(function () use (\\\$localizedObject) {\\n    \"
                . '\$this->' . \$propertyName . ' = & \$localizedObject->' . \$propertyName . \";\\n\"
                . '}, \$this, ' . var_export(\$property->getDeclaringClass()->getName(), true)
                . ')->__invoke();';
        }

        \$this->setBody(
            (\$localizedProperties ? implode(\"\\n\\n\", \$localizedProperties) . \"\\n\\n\" : '')
            . '\$this->' . \$prefixInterceptors->getName() . \" = \\\$prefixInterceptors;\\n\"
            . '\$this->' . \$suffixInterceptors->getName() . \" = \\\$suffixInterceptors;\"
        );
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptorScopeLocalizer/MethodGenerator/BindProxyProperties.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\AccessInterceptorScopeLocalizer\\MethodGenerator;

use ProxyManager\\Generator\\MethodGenerator;
use Zend\\Code\\Generator\\ParameterGenerator;
use ProxyManager\\ProxyGenerator\\Util\\Properties;
use ReflectionClass;
use Zend\\Code\\Generator\\PropertyGenerator;

/**
 * The `bindProxyProperties` method implementation for access interceptor scope localizers
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class BindProxyProperties extends MethodGenerator
{
    /**
     * Constructor
     *
     * @param ReflectionClass   \$originalClass
     * @param PropertyGenerator \$prefixInterceptors
     * @param PropertyGenerator \$suffixInterceptors
     */
    public function __construct(
        ReflectionClass \$originalClass,
        PropertyGenerator \$prefixInterceptors,
        PropertyGenerator \$suffixInterceptors
    ) {
        parent::__construct(
            'bindProxyProperties',
            [
                new ParameterGenerator('localizedObject', \$originalClass->getName()),
                new ParameterGenerator('prefixInterceptors', 'array', []),
                new ParameterGenerator('suffixInterceptors', 'array', []),
            ],
            static::FLAG_PRIVATE,
            null,
            \"@override constructor to setup interceptors\\n\\n\"
            . \"@param \\\\\" . \$originalClass->getName() . \" \\\$localizedObject\\n\"
            . \"@param \\\\Closure[] \\\$prefixInterceptors method interceptors to be used before method logic\\n\"
            . \"@param \\\\Closure[] \\\$suffixInterceptors method interceptors to be used before method logic\"
        );

        \$localizedProperties = [];

        \$properties = Properties::fromReflectionClass(\$originalClass);

        foreach (\$properties->getAccessibleProperties() as \$property) {
            \$propertyName = \$property->getName();

            \$localizedProperties[] = '\$this->' . \$propertyName . ' = & \$localizedObject->' . \$propertyName . ';';
        }

        foreach (\$properties->getPrivateProperties() as \$property) {
            \$propertyName = \$property->getName();

            \$localizedProperties[] = \"\\\\Closure::bind(function () use (\\\$localizedObject) {\\n    \"
                . '\$this->' . \$propertyName . ' = & \$localizedObject->' . \$propertyName . \";\\n\"
                . '}, \$this, ' . var_export(\$property->getDeclaringClass()->getName(), true)
                . ')->__invoke();';
        }

        \$this->setBody(
            (\$localizedProperties ? implode(\"\\n\\n\", \$localizedProperties) . \"\\n\\n\" : '')
            . '\$this->' . \$prefixInterceptors->getName() . \" = \\\$prefixInterceptors;\\n\"
            . '\$this->' . \$suffixInterceptors->getName() . \" = \\\$suffixInterceptors;\"
        );
    }
}
", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptorScopeLocalizer/MethodGenerator/BindProxyProperties.php", "/var/www/public/DevLaon/templates/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptorScopeLocalizer/MethodGenerator/BindProxyProperties.php");
    }
}
