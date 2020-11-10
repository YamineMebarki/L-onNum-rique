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

/* vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/Util/PublicScopeSimulator.php */
class __TwigTemplate_afa75b9d6cfb3f49b54c7d0004026c8529f9c44bd87900682df8621cbee5db7f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/Util/PublicScopeSimulator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/Util/PublicScopeSimulator.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\Util;

use Zend\\Code\\Generator\\PropertyGenerator;

/**
 * Generates code necessary to simulate a fatal error in case of unauthorized
 * access to class members in magic methods even when in child classes and dealing
 * with protected members.
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class PublicScopeSimulator
{
    const OPERATION_SET   = 'set';
    const OPERATION_GET   = 'get';
    const OPERATION_ISSET = 'isset';
    const OPERATION_UNSET = 'unset';

    /**
     * Generates code for simulating access to a property from the scope that is accessing a proxy.
     * This is done by introspecting `debug_backtrace()` and then binding a closure to the scope
     * of the parent caller.
     *
     * @param string            \$operationType      operation to execute: one of 'get', 'set', 'isset' or 'unset'
     * @param string            \$nameParameter      name of the `name` parameter of the magic method
     * @param string|null       \$valueParameter     name of the `value` parameter of the magic method
     * @param PropertyGenerator \$valueHolder        name of the property containing the target object from which
     *                                              to read the property. `\$this` if none provided
     * @param string|null       \$returnPropertyName name of the property to which we want to assign the result of
     *                                              the operation. Return directly if none provided
     *
     * @throws \\InvalidArgumentException
     */
    public static function getPublicAccessSimulationCode(
        string \$operationType,
        string \$nameParameter,
        \$valueParameter = null,
        PropertyGenerator \$valueHolder = null,
        \$returnPropertyName = null
    ) : string {
        \$byRef  = self::getByRefReturnValue(\$operationType);
        \$value  = static::OPERATION_SET === \$operationType ? ', \$value' : '';
        \$target = '\$this';

        if (\$valueHolder) {
            \$target = '\$this->' . \$valueHolder->getName();
        }

        return '\$realInstanceReflection = new \\\\ReflectionClass(get_parent_class(\$this));' . \"\\n\\n\"
            . 'if (! \$realInstanceReflection->hasProperty(\$' . \$nameParameter . ')) {'   . \"\\n\"
            . '    \$targetObject = ' . \$target . ';' . \"\\n\\n\"
            . self::getUndefinedPropertyNotice(\$operationType, \$nameParameter)
            . '    ' . self::getOperation(\$operationType, \$nameParameter, \$valueParameter) . \"\\n\"
            . \"    return;\\n\"
            . '}' . \"\\n\\n\"
            . '\$targetObject = ' . self::getTargetObject(\$valueHolder) . \";\\n\"
            . '\$accessor = function ' . \$byRef . '() use (\$targetObject, \$name' . \$value . ') {' . \"\\n\"
            . '    ' . self::getOperation(\$operationType, \$nameParameter, \$valueParameter) . \"\\n\"
            . \"};\\n\"
            . self::getScopeReBind()
            . (
                \$returnPropertyName
                    ? '\$' . \$returnPropertyName . ' = ' . \$byRef . '\$accessor();'
                    : '\$returnValue = ' . \$byRef . '\$accessor();' . \"\\n\\n\" . 'return \$returnValue;'
            );
    }

    /**
     * This will generate code that triggers a notice if access is attempted on a non-existing property
     *
     * @param string \$operationType
     * @param string \$nameParameter
     *
     * @return string
     */
    private static function getUndefinedPropertyNotice(string \$operationType, string \$nameParameter) : string
    {
        if (static::OPERATION_GET !== \$operationType) {
            return '';
        }

        return '    \$backtrace = debug_backtrace(false);' . \"\\n\"
            . '    trigger_error(' . \"\\n\"
            . '        sprintf(' . \"\\n\"
            . '            \\'Undefined property: %s::\$%s in %s on line %s\\',' . \"\\n\"
            . '            get_parent_class(\$this),' . \"\\n\"
            . '            \$' . \$nameParameter . ',' . \"\\n\"
            . '            \$backtrace[0][\\'file\\'],' . \"\\n\"
            . '            \$backtrace[0][\\'line\\']' . \"\\n\"
            . '        ),' . \"\\n\"
            . '        \\E_USER_NOTICE' . \"\\n\"
            . '    );' . \"\\n\";
    }

    /**
     * Defines whether the given operation produces a reference.
     *
     * Note: if the object is a wrapper, the wrapped instance is accessed directly. If the object
     * is a ghost or the proxy has no wrapper, then an instance of the parent class is created via
     * on-the-fly unserialization
     */
    private static function getByRefReturnValue(string \$operationType) : string
    {
        return (static::OPERATION_GET === \$operationType || static::OPERATION_SET === \$operationType) ? '& ' : '';
    }

    /**
     * Retrieves the logic to fetch the object on which access should be attempted
     *
     * @param PropertyGenerator \$valueHolder
     *
     * @return string
     */
    private static function getTargetObject(PropertyGenerator \$valueHolder = null) : string
    {
        if (\$valueHolder) {
            return '\$this->' . \$valueHolder->getName();
        }

        return 'unserialize(sprintf(\\'O:%d:\"%s\":0:{}\\', strlen(get_parent_class(\$this)), get_parent_class(\$this)))';
    }

    /**
     * @throws \\InvalidArgumentException
     */
    private static function getOperation(string \$operationType, string \$nameParameter, ?string \$valueParameter) : string
    {
        switch (\$operationType) {
            case static::OPERATION_GET:
                return 'return \$targetObject->\$' . \$nameParameter . ';';
            case static::OPERATION_SET:
                if (null === \$valueParameter) {
                    throw new \\InvalidArgumentException('Parameter \$valueParameter not provided');
                }

                return 'return \$targetObject->\$' . \$nameParameter . ' = \$' . \$valueParameter . ';';
            case static::OPERATION_ISSET:
                return 'return isset(\$targetObject->\$' . \$nameParameter . ');';
            case static::OPERATION_UNSET:
                return 'unset(\$targetObject->\$' . \$nameParameter . ');';
        }

        throw new \\InvalidArgumentException(sprintf('Invalid operation \"%s\" provided', \$operationType));
    }

    /**
     * Generates code to bind operations to the parent scope
     *
     * @return string
     */
    private static function getScopeReBind() : string
    {
        return '\$backtrace = debug_backtrace(true);' . \"\\n\"
            . '\$scopeObject = isset(\$backtrace[1][\\'object\\'])'
            . ' ? \$backtrace[1][\\'object\\'] : new \\ProxyManager\\Stub\\EmptyClassStub();' . \"\\n\"
            . '\$accessor = \$accessor->bindTo(\$scopeObject, get_class(\$scopeObject));' . \"\\n\";
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/Util/PublicScopeSimulator.php";
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

use Zend\\Code\\Generator\\PropertyGenerator;

/**
 * Generates code necessary to simulate a fatal error in case of unauthorized
 * access to class members in magic methods even when in child classes and dealing
 * with protected members.
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class PublicScopeSimulator
{
    const OPERATION_SET   = 'set';
    const OPERATION_GET   = 'get';
    const OPERATION_ISSET = 'isset';
    const OPERATION_UNSET = 'unset';

    /**
     * Generates code for simulating access to a property from the scope that is accessing a proxy.
     * This is done by introspecting `debug_backtrace()` and then binding a closure to the scope
     * of the parent caller.
     *
     * @param string            \$operationType      operation to execute: one of 'get', 'set', 'isset' or 'unset'
     * @param string            \$nameParameter      name of the `name` parameter of the magic method
     * @param string|null       \$valueParameter     name of the `value` parameter of the magic method
     * @param PropertyGenerator \$valueHolder        name of the property containing the target object from which
     *                                              to read the property. `\$this` if none provided
     * @param string|null       \$returnPropertyName name of the property to which we want to assign the result of
     *                                              the operation. Return directly if none provided
     *
     * @throws \\InvalidArgumentException
     */
    public static function getPublicAccessSimulationCode(
        string \$operationType,
        string \$nameParameter,
        \$valueParameter = null,
        PropertyGenerator \$valueHolder = null,
        \$returnPropertyName = null
    ) : string {
        \$byRef  = self::getByRefReturnValue(\$operationType);
        \$value  = static::OPERATION_SET === \$operationType ? ', \$value' : '';
        \$target = '\$this';

        if (\$valueHolder) {
            \$target = '\$this->' . \$valueHolder->getName();
        }

        return '\$realInstanceReflection = new \\\\ReflectionClass(get_parent_class(\$this));' . \"\\n\\n\"
            . 'if (! \$realInstanceReflection->hasProperty(\$' . \$nameParameter . ')) {'   . \"\\n\"
            . '    \$targetObject = ' . \$target . ';' . \"\\n\\n\"
            . self::getUndefinedPropertyNotice(\$operationType, \$nameParameter)
            . '    ' . self::getOperation(\$operationType, \$nameParameter, \$valueParameter) . \"\\n\"
            . \"    return;\\n\"
            . '}' . \"\\n\\n\"
            . '\$targetObject = ' . self::getTargetObject(\$valueHolder) . \";\\n\"
            . '\$accessor = function ' . \$byRef . '() use (\$targetObject, \$name' . \$value . ') {' . \"\\n\"
            . '    ' . self::getOperation(\$operationType, \$nameParameter, \$valueParameter) . \"\\n\"
            . \"};\\n\"
            . self::getScopeReBind()
            . (
                \$returnPropertyName
                    ? '\$' . \$returnPropertyName . ' = ' . \$byRef . '\$accessor();'
                    : '\$returnValue = ' . \$byRef . '\$accessor();' . \"\\n\\n\" . 'return \$returnValue;'
            );
    }

    /**
     * This will generate code that triggers a notice if access is attempted on a non-existing property
     *
     * @param string \$operationType
     * @param string \$nameParameter
     *
     * @return string
     */
    private static function getUndefinedPropertyNotice(string \$operationType, string \$nameParameter) : string
    {
        if (static::OPERATION_GET !== \$operationType) {
            return '';
        }

        return '    \$backtrace = debug_backtrace(false);' . \"\\n\"
            . '    trigger_error(' . \"\\n\"
            . '        sprintf(' . \"\\n\"
            . '            \\'Undefined property: %s::\$%s in %s on line %s\\',' . \"\\n\"
            . '            get_parent_class(\$this),' . \"\\n\"
            . '            \$' . \$nameParameter . ',' . \"\\n\"
            . '            \$backtrace[0][\\'file\\'],' . \"\\n\"
            . '            \$backtrace[0][\\'line\\']' . \"\\n\"
            . '        ),' . \"\\n\"
            . '        \\E_USER_NOTICE' . \"\\n\"
            . '    );' . \"\\n\";
    }

    /**
     * Defines whether the given operation produces a reference.
     *
     * Note: if the object is a wrapper, the wrapped instance is accessed directly. If the object
     * is a ghost or the proxy has no wrapper, then an instance of the parent class is created via
     * on-the-fly unserialization
     */
    private static function getByRefReturnValue(string \$operationType) : string
    {
        return (static::OPERATION_GET === \$operationType || static::OPERATION_SET === \$operationType) ? '& ' : '';
    }

    /**
     * Retrieves the logic to fetch the object on which access should be attempted
     *
     * @param PropertyGenerator \$valueHolder
     *
     * @return string
     */
    private static function getTargetObject(PropertyGenerator \$valueHolder = null) : string
    {
        if (\$valueHolder) {
            return '\$this->' . \$valueHolder->getName();
        }

        return 'unserialize(sprintf(\\'O:%d:\"%s\":0:{}\\', strlen(get_parent_class(\$this)), get_parent_class(\$this)))';
    }

    /**
     * @throws \\InvalidArgumentException
     */
    private static function getOperation(string \$operationType, string \$nameParameter, ?string \$valueParameter) : string
    {
        switch (\$operationType) {
            case static::OPERATION_GET:
                return 'return \$targetObject->\$' . \$nameParameter . ';';
            case static::OPERATION_SET:
                if (null === \$valueParameter) {
                    throw new \\InvalidArgumentException('Parameter \$valueParameter not provided');
                }

                return 'return \$targetObject->\$' . \$nameParameter . ' = \$' . \$valueParameter . ';';
            case static::OPERATION_ISSET:
                return 'return isset(\$targetObject->\$' . \$nameParameter . ');';
            case static::OPERATION_UNSET:
                return 'unset(\$targetObject->\$' . \$nameParameter . ');';
        }

        throw new \\InvalidArgumentException(sprintf('Invalid operation \"%s\" provided', \$operationType));
    }

    /**
     * Generates code to bind operations to the parent scope
     *
     * @return string
     */
    private static function getScopeReBind() : string
    {
        return '\$backtrace = debug_backtrace(true);' . \"\\n\"
            . '\$scopeObject = isset(\$backtrace[1][\\'object\\'])'
            . ' ? \$backtrace[1][\\'object\\'] : new \\ProxyManager\\Stub\\EmptyClassStub();' . \"\\n\"
            . '\$accessor = \$accessor->bindTo(\$scopeObject, get_class(\$scopeObject));' . \"\\n\";
    }
}
", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/Util/PublicScopeSimulator.php", "/var/www/public/DevLaon/templates/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/Util/PublicScopeSimulator.php");
    }
}
