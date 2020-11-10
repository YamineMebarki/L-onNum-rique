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

/* vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptorValueHolder/MethodGenerator/InterceptedMethod.php */
class __TwigTemplate_fcb773b35c2ec4ef620fee185e78ea71078b7c2d520d2554adbae12b7f981162 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptorValueHolder/MethodGenerator/InterceptedMethod.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptorValueHolder/MethodGenerator/InterceptedMethod.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\AccessInterceptorValueHolder\\MethodGenerator;

use ProxyManager\\Generator\\MethodGenerator;
use ProxyManager\\ProxyGenerator\\AccessInterceptorValueHolder\\MethodGenerator\\Util\\InterceptorGenerator;
use Zend\\Code\\Generator\\PropertyGenerator;
use Zend\\Code\\Reflection\\MethodReflection;

/**
 * Method with additional pre- and post- interceptor logic in the body
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class InterceptedMethod extends MethodGenerator
{
    /**
     * @throws \\Zend\\Code\\Generator\\Exception\\InvalidArgumentException
     */
    public static function generateMethod(
        MethodReflection \$originalMethod,
        PropertyGenerator \$valueHolderProperty,
        PropertyGenerator \$prefixInterceptors,
        PropertyGenerator \$suffixInterceptors
    ) : self {
        /* @var \$method self */
        \$method          = static::fromReflectionWithoutBodyAndDocBlock(\$originalMethod);
        \$forwardedParams = [];

        foreach (\$originalMethod->getParameters() as \$parameter) {
            \$forwardedParams[] = (\$parameter->isVariadic() ? '...' : '') . '\$' . \$parameter->getName();
        }

        \$method->setBody(InterceptorGenerator::createInterceptedMethodBody(
            '\$returnValue = \$this->' . \$valueHolderProperty->getName() . '->'
            . \$originalMethod->getName() . '(' . implode(', ', \$forwardedParams) . ');',
            \$method,
            \$valueHolderProperty,
            \$prefixInterceptors,
            \$suffixInterceptors,
            \$originalMethod
        ));

        return \$method;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptorValueHolder/MethodGenerator/InterceptedMethod.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\AccessInterceptorValueHolder\\MethodGenerator;

use ProxyManager\\Generator\\MethodGenerator;
use ProxyManager\\ProxyGenerator\\AccessInterceptorValueHolder\\MethodGenerator\\Util\\InterceptorGenerator;
use Zend\\Code\\Generator\\PropertyGenerator;
use Zend\\Code\\Reflection\\MethodReflection;

/**
 * Method with additional pre- and post- interceptor logic in the body
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class InterceptedMethod extends MethodGenerator
{
    /**
     * @throws \\Zend\\Code\\Generator\\Exception\\InvalidArgumentException
     */
    public static function generateMethod(
        MethodReflection \$originalMethod,
        PropertyGenerator \$valueHolderProperty,
        PropertyGenerator \$prefixInterceptors,
        PropertyGenerator \$suffixInterceptors
    ) : self {
        /* @var \$method self */
        \$method          = static::fromReflectionWithoutBodyAndDocBlock(\$originalMethod);
        \$forwardedParams = [];

        foreach (\$originalMethod->getParameters() as \$parameter) {
            \$forwardedParams[] = (\$parameter->isVariadic() ? '...' : '') . '\$' . \$parameter->getName();
        }

        \$method->setBody(InterceptorGenerator::createInterceptedMethodBody(
            '\$returnValue = \$this->' . \$valueHolderProperty->getName() . '->'
            . \$originalMethod->getName() . '(' . implode(', ', \$forwardedParams) . ');',
            \$method,
            \$valueHolderProperty,
            \$prefixInterceptors,
            \$suffixInterceptors,
            \$originalMethod
        ));

        return \$method;
    }
}
", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptorValueHolder/MethodGenerator/InterceptedMethod.php", "/var/www/public/DevLaon/templates/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptorValueHolder/MethodGenerator/InterceptedMethod.php");
    }
}
