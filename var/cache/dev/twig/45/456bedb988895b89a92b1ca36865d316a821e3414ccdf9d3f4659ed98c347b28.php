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

/* vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/Util/Properties.php */
class __TwigTemplate_dedb711f7929f35644126d5e991298bf08418a35be4f2a42470febd5268a599a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/Util/Properties.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/Util/Properties.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\Util;

use ReflectionClass;
use ReflectionProperty;

/**
 * DTO containing the list of all non-static proxy properties and utility methods to access them
 * in various formats/collections
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
final class Properties
{
    /**
     * @var array|\\ReflectionProperty[]
     */
    private \$properties;

    /**
     * @param ReflectionProperty[] \$properties
     */
    private function __construct(array \$properties)
    {
        \$this->properties = \$properties;
    }

    public static function fromReflectionClass(ReflectionClass \$reflection) : self
    {
        \$class      = \$reflection;
        \$properties = [];

        do {
            \$properties = array_merge(
                \$properties,
                array_values(array_filter(
                    \$class->getProperties(),
                    function (ReflectionProperty \$property) use (\$class) : bool {
                        return \$class->getName() === \$property->getDeclaringClass()->getName()
                            && ! \$property->isStatic();
                    }
                ))
            );
        } while (\$class = \$class->getParentClass());

        return new self(\$properties);
    }

    /**
     * @param string[] \$excludedProperties
     */
    public function filter(array \$excludedProperties) : self
    {
        \$properties = \$this->getInstanceProperties();

        foreach (\$excludedProperties as \$propertyName) {
            unset(\$properties[\$propertyName]);
        }

        return new self(\$properties);
    }

    /**
     * @return ReflectionProperty[] indexed by the property internal visibility-aware name
     */
    public function getPublicProperties() : array
    {
        \$publicProperties = [];

        foreach (\$this->properties as \$property) {
            if (\$property->isPublic()) {
                \$publicProperties[\$property->getName()] = \$property;
            }
        }

        return \$publicProperties;
    }

    /**
     * @return ReflectionProperty[] indexed by the property internal visibility-aware name (\\0*\\0propertyName)
     */
    public function getProtectedProperties() : array
    {
        \$protectedProperties = [];

        foreach (\$this->properties as \$property) {
            if (\$property->isProtected()) {
                \$protectedProperties[\"\\0*\\0\" . \$property->getName()] = \$property;
            }
        }

        return \$protectedProperties;
    }

    /**
     * @return ReflectionProperty[] indexed by the property internal visibility-aware name (\\0ClassName\\0propertyName)
     */
    public function getPrivateProperties() : array
    {
        \$privateProperties = [];

        foreach (\$this->properties as \$property) {
            if (\$property->isPrivate()) {
                \$declaringClass = \$property->getDeclaringClass()->getName();

                \$privateProperties[\"\\0\" . \$declaringClass . \"\\0\" . \$property->getName()] = \$property;
            }
        }

        return \$privateProperties;
    }

    /**
     * @return ReflectionProperty[] indexed by the property internal visibility-aware name (\\0*\\0propertyName)
     */
    public function getAccessibleProperties() : array
    {
        return array_merge(\$this->getPublicProperties(), \$this->getProtectedProperties());
    }

    /**
     * @return ReflectionProperty[][] indexed by class name and property name
     */
    public function getGroupedPrivateProperties() : array
    {
        \$propertiesMap = [];

        foreach (\$this->getPrivateProperties() as \$property) {
            \$class = & \$propertiesMap[\$property->getDeclaringClass()->getName()];

            \$class[\$property->getName()] = \$property;
        }

        return \$propertiesMap;
    }

    /**
     * @return ReflectionProperty[] indexed by the property internal visibility-aware name (\\0*\\0propertyName)
     */
    public function getInstanceProperties() : array
    {
        return array_merge(\$this->getAccessibleProperties(), \$this->getPrivateProperties());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/Util/Properties.php";
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

use ReflectionClass;
use ReflectionProperty;

/**
 * DTO containing the list of all non-static proxy properties and utility methods to access them
 * in various formats/collections
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
final class Properties
{
    /**
     * @var array|\\ReflectionProperty[]
     */
    private \$properties;

    /**
     * @param ReflectionProperty[] \$properties
     */
    private function __construct(array \$properties)
    {
        \$this->properties = \$properties;
    }

    public static function fromReflectionClass(ReflectionClass \$reflection) : self
    {
        \$class      = \$reflection;
        \$properties = [];

        do {
            \$properties = array_merge(
                \$properties,
                array_values(array_filter(
                    \$class->getProperties(),
                    function (ReflectionProperty \$property) use (\$class) : bool {
                        return \$class->getName() === \$property->getDeclaringClass()->getName()
                            && ! \$property->isStatic();
                    }
                ))
            );
        } while (\$class = \$class->getParentClass());

        return new self(\$properties);
    }

    /**
     * @param string[] \$excludedProperties
     */
    public function filter(array \$excludedProperties) : self
    {
        \$properties = \$this->getInstanceProperties();

        foreach (\$excludedProperties as \$propertyName) {
            unset(\$properties[\$propertyName]);
        }

        return new self(\$properties);
    }

    /**
     * @return ReflectionProperty[] indexed by the property internal visibility-aware name
     */
    public function getPublicProperties() : array
    {
        \$publicProperties = [];

        foreach (\$this->properties as \$property) {
            if (\$property->isPublic()) {
                \$publicProperties[\$property->getName()] = \$property;
            }
        }

        return \$publicProperties;
    }

    /**
     * @return ReflectionProperty[] indexed by the property internal visibility-aware name (\\0*\\0propertyName)
     */
    public function getProtectedProperties() : array
    {
        \$protectedProperties = [];

        foreach (\$this->properties as \$property) {
            if (\$property->isProtected()) {
                \$protectedProperties[\"\\0*\\0\" . \$property->getName()] = \$property;
            }
        }

        return \$protectedProperties;
    }

    /**
     * @return ReflectionProperty[] indexed by the property internal visibility-aware name (\\0ClassName\\0propertyName)
     */
    public function getPrivateProperties() : array
    {
        \$privateProperties = [];

        foreach (\$this->properties as \$property) {
            if (\$property->isPrivate()) {
                \$declaringClass = \$property->getDeclaringClass()->getName();

                \$privateProperties[\"\\0\" . \$declaringClass . \"\\0\" . \$property->getName()] = \$property;
            }
        }

        return \$privateProperties;
    }

    /**
     * @return ReflectionProperty[] indexed by the property internal visibility-aware name (\\0*\\0propertyName)
     */
    public function getAccessibleProperties() : array
    {
        return array_merge(\$this->getPublicProperties(), \$this->getProtectedProperties());
    }

    /**
     * @return ReflectionProperty[][] indexed by class name and property name
     */
    public function getGroupedPrivateProperties() : array
    {
        \$propertiesMap = [];

        foreach (\$this->getPrivateProperties() as \$property) {
            \$class = & \$propertiesMap[\$property->getDeclaringClass()->getName()];

            \$class[\$property->getName()] = \$property;
        }

        return \$propertiesMap;
    }

    /**
     * @return ReflectionProperty[] indexed by the property internal visibility-aware name (\\0*\\0propertyName)
     */
    public function getInstanceProperties() : array
    {
        return array_merge(\$this->getAccessibleProperties(), \$this->getPrivateProperties());
    }
}
", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/Util/Properties.php", "/var/www/public/DevLaon/templates/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/Util/Properties.php");
    }
}
