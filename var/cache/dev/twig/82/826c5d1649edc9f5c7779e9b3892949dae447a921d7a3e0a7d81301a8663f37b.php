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

/* vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/ValueHolder/MethodGenerator/Constructor.php */
class __TwigTemplate_5b58d4cfe3c6721008a2ed5d6312f1e9139fa3446ac174ba0c9ce8786c5ba982 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/ValueHolder/MethodGenerator/Constructor.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/ValueHolder/MethodGenerator/Constructor.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\ValueHolder\\MethodGenerator;

use ProxyManager\\Generator\\MethodGenerator;
use ProxyManager\\ProxyGenerator\\Util\\Properties;
use ProxyManager\\ProxyGenerator\\Util\\UnsetPropertiesGenerator;
use ReflectionClass;
use Zend\\Code\\Generator\\PropertyGenerator;
use Zend\\Code\\Reflection\\MethodReflection;
use Zend\\Code\\Reflection\\ParameterReflection;

/**
 * The `__construct` implementation for lazy loading proxies
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class Constructor extends MethodGenerator
{
    /**
     * @throws \\Zend\\Code\\Generator\\Exception\\InvalidArgumentException
     */
    public static function generateMethod(ReflectionClass \$originalClass, PropertyGenerator \$valueHolder) : self
    {
        \$originalConstructor = self::getConstructor(\$originalClass);

        /* @var \$constructor self */
        \$constructor = \$originalConstructor
            ? self::fromReflectionWithoutBodyAndDocBlock(\$originalConstructor)
            : new self('__construct');

        \$constructor->setBody(
            'static \$reflection;' . \"\\n\\n\"
            . 'if (! \$this->' . \$valueHolder->getName() . ') {' . \"\\n\"
            . '    \$reflection = \$reflection ?: new \\ReflectionClass('
            . var_export(\$originalClass->getName(), true)
            . \");\\n\"
            . '    \$this->' . \$valueHolder->getName() . ' = \$reflection->newInstanceWithoutConstructor();' . \"\\n\"
            . UnsetPropertiesGenerator::generateSnippet(Properties::fromReflectionClass(\$originalClass), 'this')
            . '}'
            . (\$originalConstructor ? self::generateOriginalConstructorCall(\$originalConstructor, \$valueHolder) : '')
        );

        return \$constructor;
    }

    private static function generateOriginalConstructorCall(
        MethodReflection \$originalConstructor,
        PropertyGenerator \$valueHolder
    ) : string {
        return \"\\n\\n\"
            . '\$this->' . \$valueHolder->getName() . '->' . \$originalConstructor->getName() . '('
            . implode(
                ', ',
                array_map(
                    function (ParameterReflection \$parameter) : string {
                        return (\$parameter->isVariadic() ? '...' : '') . '\$' . \$parameter->getName();
                    },
                    \$originalConstructor->getParameters()
                )
            )
            . ');';
    }

    /**
     * @param ReflectionClass \$class
     *
     * @return MethodReflection|null
     */
    private static function getConstructor(ReflectionClass \$class)
    {
        \$constructors = array_map(
            function (\\ReflectionMethod \$method) : MethodReflection {
                return new MethodReflection(
                    \$method->getDeclaringClass()->getName(),
                    \$method->getName()
                );
            },
            array_filter(
                \$class->getMethods(),
                function (\\ReflectionMethod \$method) : bool {
                    return \$method->isConstructor();
                }
            )
        );

        return reset(\$constructors) ?: null;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/ValueHolder/MethodGenerator/Constructor.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\ValueHolder\\MethodGenerator;

use ProxyManager\\Generator\\MethodGenerator;
use ProxyManager\\ProxyGenerator\\Util\\Properties;
use ProxyManager\\ProxyGenerator\\Util\\UnsetPropertiesGenerator;
use ReflectionClass;
use Zend\\Code\\Generator\\PropertyGenerator;
use Zend\\Code\\Reflection\\MethodReflection;
use Zend\\Code\\Reflection\\ParameterReflection;

/**
 * The `__construct` implementation for lazy loading proxies
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class Constructor extends MethodGenerator
{
    /**
     * @throws \\Zend\\Code\\Generator\\Exception\\InvalidArgumentException
     */
    public static function generateMethod(ReflectionClass \$originalClass, PropertyGenerator \$valueHolder) : self
    {
        \$originalConstructor = self::getConstructor(\$originalClass);

        /* @var \$constructor self */
        \$constructor = \$originalConstructor
            ? self::fromReflectionWithoutBodyAndDocBlock(\$originalConstructor)
            : new self('__construct');

        \$constructor->setBody(
            'static \$reflection;' . \"\\n\\n\"
            . 'if (! \$this->' . \$valueHolder->getName() . ') {' . \"\\n\"
            . '    \$reflection = \$reflection ?: new \\ReflectionClass('
            . var_export(\$originalClass->getName(), true)
            . \");\\n\"
            . '    \$this->' . \$valueHolder->getName() . ' = \$reflection->newInstanceWithoutConstructor();' . \"\\n\"
            . UnsetPropertiesGenerator::generateSnippet(Properties::fromReflectionClass(\$originalClass), 'this')
            . '}'
            . (\$originalConstructor ? self::generateOriginalConstructorCall(\$originalConstructor, \$valueHolder) : '')
        );

        return \$constructor;
    }

    private static function generateOriginalConstructorCall(
        MethodReflection \$originalConstructor,
        PropertyGenerator \$valueHolder
    ) : string {
        return \"\\n\\n\"
            . '\$this->' . \$valueHolder->getName() . '->' . \$originalConstructor->getName() . '('
            . implode(
                ', ',
                array_map(
                    function (ParameterReflection \$parameter) : string {
                        return (\$parameter->isVariadic() ? '...' : '') . '\$' . \$parameter->getName();
                    },
                    \$originalConstructor->getParameters()
                )
            )
            . ');';
    }

    /**
     * @param ReflectionClass \$class
     *
     * @return MethodReflection|null
     */
    private static function getConstructor(ReflectionClass \$class)
    {
        \$constructors = array_map(
            function (\\ReflectionMethod \$method) : MethodReflection {
                return new MethodReflection(
                    \$method->getDeclaringClass()->getName(),
                    \$method->getName()
                );
            },
            array_filter(
                \$class->getMethods(),
                function (\\ReflectionMethod \$method) : bool {
                    return \$method->isConstructor();
                }
            )
        );

        return reset(\$constructors) ?: null;
    }
}
", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/ValueHolder/MethodGenerator/Constructor.php", "/var/www/public/DevLaon/templates/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/ValueHolder/MethodGenerator/Constructor.php");
    }
}
