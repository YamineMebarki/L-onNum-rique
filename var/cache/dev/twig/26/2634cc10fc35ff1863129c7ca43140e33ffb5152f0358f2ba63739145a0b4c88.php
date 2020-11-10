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

/* vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/NullObjectGenerator.php */
class __TwigTemplate_4616431ad4a7714651ff95326cbf120b5c449e63ef674f56acd361b85cc9c3bf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/NullObjectGenerator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/NullObjectGenerator.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator;

use ProxyManager\\Exception\\InvalidProxiedClassException;
use ProxyManager\\Generator\\Util\\ClassGeneratorUtils;
use ProxyManager\\Proxy\\NullObjectInterface;
use ProxyManager\\ProxyGenerator\\Assertion\\CanProxyAssertion;
use ProxyManager\\ProxyGenerator\\NullObject\\MethodGenerator\\NullObjectMethodInterceptor;
use ProxyManager\\ProxyGenerator\\NullObject\\MethodGenerator\\StaticProxyConstructor;
use ProxyManager\\ProxyGenerator\\Util\\ProxiedMethodsFilter;
use ReflectionClass;
use Zend\\Code\\Generator\\ClassGenerator;
use Zend\\Code\\Reflection\\MethodReflection;

/**
 * Generator for proxies implementing {@see \\ProxyManager\\Proxy\\NullObjectInterface}
 *
 * {@inheritDoc}
 *
 * @author Vincent Blanchon <blanchon.vincent@gmail.com>
 * @license MIT
 */
class NullObjectGenerator implements ProxyGeneratorInterface
{
    /**
     * {@inheritDoc}
     *
     * @throws InvalidProxiedClassException
     * @throws \\Zend\\Code\\Generator\\Exception\\InvalidArgumentException
     */
    public function generate(ReflectionClass \$originalClass, ClassGenerator \$classGenerator)
    {
        CanProxyAssertion::assertClassCanBeProxied(\$originalClass);

        \$interfaces = [NullObjectInterface::class];

        if (\$originalClass->isInterface()) {
            \$interfaces[] = \$originalClass->getName();
        } else {
            \$classGenerator->setExtendedClass(\$originalClass->getName());
        }

        \$classGenerator->setImplementedInterfaces(\$interfaces);

        foreach (ProxiedMethodsFilter::getProxiedMethods(\$originalClass, []) as \$method) {
            \$classGenerator->addMethodFromGenerator(
                NullObjectMethodInterceptor::generateMethod(
                    new MethodReflection(\$method->getDeclaringClass()->getName(), \$method->getName())
                )
            );
        }

        ClassGeneratorUtils::addMethodIfNotFinal(
            \$originalClass,
            \$classGenerator,
            new StaticProxyConstructor(\$originalClass)
        );
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/NullObjectGenerator.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator;

use ProxyManager\\Exception\\InvalidProxiedClassException;
use ProxyManager\\Generator\\Util\\ClassGeneratorUtils;
use ProxyManager\\Proxy\\NullObjectInterface;
use ProxyManager\\ProxyGenerator\\Assertion\\CanProxyAssertion;
use ProxyManager\\ProxyGenerator\\NullObject\\MethodGenerator\\NullObjectMethodInterceptor;
use ProxyManager\\ProxyGenerator\\NullObject\\MethodGenerator\\StaticProxyConstructor;
use ProxyManager\\ProxyGenerator\\Util\\ProxiedMethodsFilter;
use ReflectionClass;
use Zend\\Code\\Generator\\ClassGenerator;
use Zend\\Code\\Reflection\\MethodReflection;

/**
 * Generator for proxies implementing {@see \\ProxyManager\\Proxy\\NullObjectInterface}
 *
 * {@inheritDoc}
 *
 * @author Vincent Blanchon <blanchon.vincent@gmail.com>
 * @license MIT
 */
class NullObjectGenerator implements ProxyGeneratorInterface
{
    /**
     * {@inheritDoc}
     *
     * @throws InvalidProxiedClassException
     * @throws \\Zend\\Code\\Generator\\Exception\\InvalidArgumentException
     */
    public function generate(ReflectionClass \$originalClass, ClassGenerator \$classGenerator)
    {
        CanProxyAssertion::assertClassCanBeProxied(\$originalClass);

        \$interfaces = [NullObjectInterface::class];

        if (\$originalClass->isInterface()) {
            \$interfaces[] = \$originalClass->getName();
        } else {
            \$classGenerator->setExtendedClass(\$originalClass->getName());
        }

        \$classGenerator->setImplementedInterfaces(\$interfaces);

        foreach (ProxiedMethodsFilter::getProxiedMethods(\$originalClass, []) as \$method) {
            \$classGenerator->addMethodFromGenerator(
                NullObjectMethodInterceptor::generateMethod(
                    new MethodReflection(\$method->getDeclaringClass()->getName(), \$method->getName())
                )
            );
        }

        ClassGeneratorUtils::addMethodIfNotFinal(
            \$originalClass,
            \$classGenerator,
            new StaticProxyConstructor(\$originalClass)
        );
    }
}
", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/NullObjectGenerator.php", "/var/www/public/DevLaon/templates/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/NullObjectGenerator.php");
    }
}
