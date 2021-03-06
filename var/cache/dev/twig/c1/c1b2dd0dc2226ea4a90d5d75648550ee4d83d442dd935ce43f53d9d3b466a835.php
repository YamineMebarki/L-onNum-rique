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

/* vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/RemoteObject/MethodGenerator/RemoteObjectMethod.php */
class __TwigTemplate_5c28677c0ecfd55367367d37a50b382d6ec59e41087fe0527b754cc5777437f2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/RemoteObject/MethodGenerator/RemoteObjectMethod.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/RemoteObject/MethodGenerator/RemoteObjectMethod.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\RemoteObject\\MethodGenerator;

use ProxyManager\\Generator\\MethodGenerator;
use ProxyManager\\Generator\\Util\\ProxiedMethodReturnExpression;
use ReflectionClass;
use Zend\\Code\\Generator\\PropertyGenerator;
use Zend\\Code\\Reflection\\MethodReflection;
use function var_export;

/**
 * Method decorator for remote objects
 */
class RemoteObjectMethod extends MethodGenerator
{
    /**
     *
     * @return self|static
     */
    public static function generateMethod(
        MethodReflection \$originalMethod,
        PropertyGenerator \$adapterProperty,
        ReflectionClass \$originalClass
    ) : self {
        /** @var self \$method */
        \$method = static::fromReflectionWithoutBodyAndDocBlock(\$originalMethod);

        \$method->setBody(
            '\$return = \$this->' . \$adapterProperty->getName()
            . '->call(' . var_export(\$originalClass->getName(), true)
            . ', ' . var_export(\$originalMethod->getName(), true) . ', \\func_get_args());' . \"\\n\\n\"
            . ProxiedMethodReturnExpression::generate('\$return', \$originalMethod)
        );

        return \$method;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/RemoteObject/MethodGenerator/RemoteObjectMethod.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\RemoteObject\\MethodGenerator;

use ProxyManager\\Generator\\MethodGenerator;
use ProxyManager\\Generator\\Util\\ProxiedMethodReturnExpression;
use ReflectionClass;
use Zend\\Code\\Generator\\PropertyGenerator;
use Zend\\Code\\Reflection\\MethodReflection;
use function var_export;

/**
 * Method decorator for remote objects
 */
class RemoteObjectMethod extends MethodGenerator
{
    /**
     *
     * @return self|static
     */
    public static function generateMethod(
        MethodReflection \$originalMethod,
        PropertyGenerator \$adapterProperty,
        ReflectionClass \$originalClass
    ) : self {
        /** @var self \$method */
        \$method = static::fromReflectionWithoutBodyAndDocBlock(\$originalMethod);

        \$method->setBody(
            '\$return = \$this->' . \$adapterProperty->getName()
            . '->call(' . var_export(\$originalClass->getName(), true)
            . ', ' . var_export(\$originalMethod->getName(), true) . ', \\func_get_args());' . \"\\n\\n\"
            . ProxiedMethodReturnExpression::generate('\$return', \$originalMethod)
        );

        return \$method;
    }
}
", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/RemoteObject/MethodGenerator/RemoteObjectMethod.php", "/var/www/public/DevLaon/templates/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/RemoteObject/MethodGenerator/RemoteObjectMethod.php");
    }
}
