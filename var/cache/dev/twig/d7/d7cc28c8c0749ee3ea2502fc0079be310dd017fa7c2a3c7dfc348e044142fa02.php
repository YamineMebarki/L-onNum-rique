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

/* vendor/doctrine/common/lib/Doctrine/Common/Util/ClassUtils.php */
class __TwigTemplate_6d0a8e8203542d8bc42bc00824d1cb490a9fcc8ae7dfc0cec2d3ad53226c752a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/common/lib/Doctrine/Common/Util/ClassUtils.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/common/lib/Doctrine/Common/Util/ClassUtils.php"));

        // line 1
        echo "<?php
namespace Doctrine\\Common\\Util;

use Doctrine\\Common\\Persistence\\Proxy;

/**
 * Class and reflection related functionality for objects that
 * might or not be proxy objects at the moment.
 *
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 * @author Johannes Schmitt <schmittjoh@gmail.com>
 *
 * @deprecated The ClassUtils class is deprecated.
 */
class ClassUtils
{
    /**
     * Gets the real class name of a class name that could be a proxy.
     *
     * @param string \$class
     *
     * @return string
     */
    public static function getRealClass(\$class)
    {
        if (false === \$pos = strrpos(\$class, '\\\\' . Proxy::MARKER . '\\\\')) {
            return \$class;
        }

        return substr(\$class, \$pos + Proxy::MARKER_LENGTH + 2);
    }

    /**
     * Gets the real class name of an object (even if its a proxy).
     *
     * @param object \$object
     *
     * @return string
     */
    public static function getClass(\$object)
    {
        return self::getRealClass(get_class(\$object));
    }

    /**
     * Gets the real parent class name of a class or object.
     *
     * @param string \$className
     *
     * @return string
     */
    public static function getParentClass(\$className)
    {
        return get_parent_class(self::getRealClass(\$className));
    }

    /**
     * Creates a new reflection class.
     *
     * @param string \$class
     *
     * @return \\ReflectionClass
     */
    public static function newReflectionClass(\$class)
    {
        return new \\ReflectionClass(self::getRealClass(\$class));
    }

    /**
     * Creates a new reflection object.
     *
     * @param object \$object
     *
     * @return \\ReflectionClass
     */
    public static function newReflectionObject(\$object)
    {
        return self::newReflectionClass(self::getClass(\$object));
    }

    /**
     * Given a class name and a proxy namespace returns the proxy name.
     *
     * @param string \$className
     * @param string \$proxyNamespace
     *
     * @return string
     */
    public static function generateProxyClassName(\$className, \$proxyNamespace)
    {
        return rtrim(\$proxyNamespace, '\\\\') . '\\\\' . Proxy::MARKER . '\\\\' . ltrim(\$className, '\\\\');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/common/lib/Doctrine/Common/Util/ClassUtils.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
namespace Doctrine\\Common\\Util;

use Doctrine\\Common\\Persistence\\Proxy;

/**
 * Class and reflection related functionality for objects that
 * might or not be proxy objects at the moment.
 *
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 * @author Johannes Schmitt <schmittjoh@gmail.com>
 *
 * @deprecated The ClassUtils class is deprecated.
 */
class ClassUtils
{
    /**
     * Gets the real class name of a class name that could be a proxy.
     *
     * @param string \$class
     *
     * @return string
     */
    public static function getRealClass(\$class)
    {
        if (false === \$pos = strrpos(\$class, '\\\\' . Proxy::MARKER . '\\\\')) {
            return \$class;
        }

        return substr(\$class, \$pos + Proxy::MARKER_LENGTH + 2);
    }

    /**
     * Gets the real class name of an object (even if its a proxy).
     *
     * @param object \$object
     *
     * @return string
     */
    public static function getClass(\$object)
    {
        return self::getRealClass(get_class(\$object));
    }

    /**
     * Gets the real parent class name of a class or object.
     *
     * @param string \$className
     *
     * @return string
     */
    public static function getParentClass(\$className)
    {
        return get_parent_class(self::getRealClass(\$className));
    }

    /**
     * Creates a new reflection class.
     *
     * @param string \$class
     *
     * @return \\ReflectionClass
     */
    public static function newReflectionClass(\$class)
    {
        return new \\ReflectionClass(self::getRealClass(\$class));
    }

    /**
     * Creates a new reflection object.
     *
     * @param object \$object
     *
     * @return \\ReflectionClass
     */
    public static function newReflectionObject(\$object)
    {
        return self::newReflectionClass(self::getClass(\$object));
    }

    /**
     * Given a class name and a proxy namespace returns the proxy name.
     *
     * @param string \$className
     * @param string \$proxyNamespace
     *
     * @return string
     */
    public static function generateProxyClassName(\$className, \$proxyNamespace)
    {
        return rtrim(\$proxyNamespace, '\\\\') . '\\\\' . Proxy::MARKER . '\\\\' . ltrim(\$className, '\\\\');
    }
}
", "vendor/doctrine/common/lib/Doctrine/Common/Util/ClassUtils.php", "/var/www/public/DevLaon/templates/vendor/doctrine/common/lib/Doctrine/Common/Util/ClassUtils.php");
    }
}
