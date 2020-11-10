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

/* vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/LazyLoadingValueHolderGenerator.php */
class __TwigTemplate_6388265933ca6352cda06a78384dc53c672e0da109d0b88c942bc9d2e077808a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/LazyLoadingValueHolderGenerator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/LazyLoadingValueHolderGenerator.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator;

use ProxyManager\\Exception\\InvalidProxiedClassException;
use ProxyManager\\Generator\\Util\\ClassGeneratorUtils;
use ProxyManager\\Proxy\\VirtualProxyInterface;
use ProxyManager\\ProxyGenerator\\AccessInterceptor\\MethodGenerator\\MagicWakeup;
use ProxyManager\\ProxyGenerator\\Assertion\\CanProxyAssertion;
use ProxyManager\\ProxyGenerator\\LazyLoading\\MethodGenerator\\StaticProxyConstructor;
use ProxyManager\\ProxyGenerator\\LazyLoadingValueHolder\\MethodGenerator\\GetProxyInitializer;
use ProxyManager\\ProxyGenerator\\LazyLoadingValueHolder\\MethodGenerator\\InitializeProxy;
use ProxyManager\\ProxyGenerator\\LazyLoadingValueHolder\\MethodGenerator\\IsProxyInitialized;
use ProxyManager\\ProxyGenerator\\LazyLoadingValueHolder\\MethodGenerator\\LazyLoadingMethodInterceptor;
use ProxyManager\\ProxyGenerator\\LazyLoadingValueHolder\\MethodGenerator\\MagicClone;
use ProxyManager\\ProxyGenerator\\LazyLoadingValueHolder\\MethodGenerator\\MagicGet;
use ProxyManager\\ProxyGenerator\\LazyLoadingValueHolder\\MethodGenerator\\MagicIsset;
use ProxyManager\\ProxyGenerator\\LazyLoadingValueHolder\\MethodGenerator\\MagicSet;
use ProxyManager\\ProxyGenerator\\LazyLoadingValueHolder\\MethodGenerator\\MagicSleep;
use ProxyManager\\ProxyGenerator\\LazyLoadingValueHolder\\MethodGenerator\\MagicUnset;
use ProxyManager\\ProxyGenerator\\LazyLoadingValueHolder\\MethodGenerator\\SetProxyInitializer;
use ProxyManager\\ProxyGenerator\\LazyLoadingValueHolder\\PropertyGenerator\\InitializerProperty;
use ProxyManager\\ProxyGenerator\\LazyLoadingValueHolder\\PropertyGenerator\\ValueHolderProperty;
use ProxyManager\\ProxyGenerator\\PropertyGenerator\\PublicPropertiesMap;
use ProxyManager\\ProxyGenerator\\Util\\Properties;
use ProxyManager\\ProxyGenerator\\Util\\ProxiedMethodsFilter;
use ProxyManager\\ProxyGenerator\\ValueHolder\\MethodGenerator\\Constructor;
use ProxyManager\\ProxyGenerator\\ValueHolder\\MethodGenerator\\GetWrappedValueHolderValue;
use ReflectionClass;
use ReflectionMethod;
use Zend\\Code\\Generator\\ClassGenerator;
use Zend\\Code\\Generator\\MethodGenerator;
use Zend\\Code\\Reflection\\MethodReflection;

/**
 * Generator for proxies implementing {@see \\ProxyManager\\Proxy\\VirtualProxyInterface}
 *
 * {@inheritDoc}
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class LazyLoadingValueHolderGenerator implements ProxyGeneratorInterface
{
    /**
     * {@inheritDoc}
     *
     * @throws InvalidProxiedClassException
     * @throws \\Zend\\Code\\Generator\\Exception\\InvalidArgumentException
     * @throws \\InvalidArgumentException
     */
    public function generate(ReflectionClass \$originalClass, ClassGenerator \$classGenerator)
    {
        CanProxyAssertion::assertClassCanBeProxied(\$originalClass);

        \$interfaces          = [VirtualProxyInterface::class];
        \$publicProperties    = new PublicPropertiesMap(Properties::fromReflectionClass(\$originalClass));

        if (\$originalClass->isInterface()) {
            \$interfaces[] = \$originalClass->getName();
        } else {
            \$classGenerator->setExtendedClass(\$originalClass->getName());
        }

        \$classGenerator->setImplementedInterfaces(\$interfaces);
        \$classGenerator->addPropertyFromGenerator(\$valueHolder = new ValueHolderProperty());
        \$classGenerator->addPropertyFromGenerator(\$initializer = new InitializerProperty());
        \$classGenerator->addPropertyFromGenerator(\$publicProperties);

        array_map(
            function (MethodGenerator \$generatedMethod) use (\$originalClass, \$classGenerator) {
                ClassGeneratorUtils::addMethodIfNotFinal(\$originalClass, \$classGenerator, \$generatedMethod);
            },
            array_merge(
                array_map(
                    \$this->buildLazyLoadingMethodInterceptor(\$initializer, \$valueHolder),
                    ProxiedMethodsFilter::getProxiedMethods(\$originalClass)
                ),
                [
                    new StaticProxyConstructor(\$initializer, Properties::fromReflectionClass(\$originalClass)),
                    Constructor::generateMethod(\$originalClass, \$valueHolder),
                    new MagicGet(\$originalClass, \$initializer, \$valueHolder, \$publicProperties),
                    new MagicSet(\$originalClass, \$initializer, \$valueHolder, \$publicProperties),
                    new MagicIsset(\$originalClass, \$initializer, \$valueHolder, \$publicProperties),
                    new MagicUnset(\$originalClass, \$initializer, \$valueHolder, \$publicProperties),
                    new MagicClone(\$originalClass, \$initializer, \$valueHolder),
                    new MagicSleep(\$originalClass, \$initializer, \$valueHolder),
                    new MagicWakeup(\$originalClass),
                    new SetProxyInitializer(\$initializer),
                    new GetProxyInitializer(\$initializer),
                    new InitializeProxy(\$initializer, \$valueHolder),
                    new IsProxyInitialized(\$valueHolder),
                    new GetWrappedValueHolderValue(\$valueHolder),
                ]
            )
        );
    }

    private function buildLazyLoadingMethodInterceptor(
        InitializerProperty \$initializer,
        ValueHolderProperty \$valueHolder
    ) : callable {
        return function (ReflectionMethod \$method) use (\$initializer, \$valueHolder) : LazyLoadingMethodInterceptor {
            return LazyLoadingMethodInterceptor::generateMethod(
                new MethodReflection(\$method->getDeclaringClass()->getName(), \$method->getName()),
                \$initializer,
                \$valueHolder
            );
        };
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/LazyLoadingValueHolderGenerator.php";
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
use ProxyManager\\Proxy\\VirtualProxyInterface;
use ProxyManager\\ProxyGenerator\\AccessInterceptor\\MethodGenerator\\MagicWakeup;
use ProxyManager\\ProxyGenerator\\Assertion\\CanProxyAssertion;
use ProxyManager\\ProxyGenerator\\LazyLoading\\MethodGenerator\\StaticProxyConstructor;
use ProxyManager\\ProxyGenerator\\LazyLoadingValueHolder\\MethodGenerator\\GetProxyInitializer;
use ProxyManager\\ProxyGenerator\\LazyLoadingValueHolder\\MethodGenerator\\InitializeProxy;
use ProxyManager\\ProxyGenerator\\LazyLoadingValueHolder\\MethodGenerator\\IsProxyInitialized;
use ProxyManager\\ProxyGenerator\\LazyLoadingValueHolder\\MethodGenerator\\LazyLoadingMethodInterceptor;
use ProxyManager\\ProxyGenerator\\LazyLoadingValueHolder\\MethodGenerator\\MagicClone;
use ProxyManager\\ProxyGenerator\\LazyLoadingValueHolder\\MethodGenerator\\MagicGet;
use ProxyManager\\ProxyGenerator\\LazyLoadingValueHolder\\MethodGenerator\\MagicIsset;
use ProxyManager\\ProxyGenerator\\LazyLoadingValueHolder\\MethodGenerator\\MagicSet;
use ProxyManager\\ProxyGenerator\\LazyLoadingValueHolder\\MethodGenerator\\MagicSleep;
use ProxyManager\\ProxyGenerator\\LazyLoadingValueHolder\\MethodGenerator\\MagicUnset;
use ProxyManager\\ProxyGenerator\\LazyLoadingValueHolder\\MethodGenerator\\SetProxyInitializer;
use ProxyManager\\ProxyGenerator\\LazyLoadingValueHolder\\PropertyGenerator\\InitializerProperty;
use ProxyManager\\ProxyGenerator\\LazyLoadingValueHolder\\PropertyGenerator\\ValueHolderProperty;
use ProxyManager\\ProxyGenerator\\PropertyGenerator\\PublicPropertiesMap;
use ProxyManager\\ProxyGenerator\\Util\\Properties;
use ProxyManager\\ProxyGenerator\\Util\\ProxiedMethodsFilter;
use ProxyManager\\ProxyGenerator\\ValueHolder\\MethodGenerator\\Constructor;
use ProxyManager\\ProxyGenerator\\ValueHolder\\MethodGenerator\\GetWrappedValueHolderValue;
use ReflectionClass;
use ReflectionMethod;
use Zend\\Code\\Generator\\ClassGenerator;
use Zend\\Code\\Generator\\MethodGenerator;
use Zend\\Code\\Reflection\\MethodReflection;

/**
 * Generator for proxies implementing {@see \\ProxyManager\\Proxy\\VirtualProxyInterface}
 *
 * {@inheritDoc}
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class LazyLoadingValueHolderGenerator implements ProxyGeneratorInterface
{
    /**
     * {@inheritDoc}
     *
     * @throws InvalidProxiedClassException
     * @throws \\Zend\\Code\\Generator\\Exception\\InvalidArgumentException
     * @throws \\InvalidArgumentException
     */
    public function generate(ReflectionClass \$originalClass, ClassGenerator \$classGenerator)
    {
        CanProxyAssertion::assertClassCanBeProxied(\$originalClass);

        \$interfaces          = [VirtualProxyInterface::class];
        \$publicProperties    = new PublicPropertiesMap(Properties::fromReflectionClass(\$originalClass));

        if (\$originalClass->isInterface()) {
            \$interfaces[] = \$originalClass->getName();
        } else {
            \$classGenerator->setExtendedClass(\$originalClass->getName());
        }

        \$classGenerator->setImplementedInterfaces(\$interfaces);
        \$classGenerator->addPropertyFromGenerator(\$valueHolder = new ValueHolderProperty());
        \$classGenerator->addPropertyFromGenerator(\$initializer = new InitializerProperty());
        \$classGenerator->addPropertyFromGenerator(\$publicProperties);

        array_map(
            function (MethodGenerator \$generatedMethod) use (\$originalClass, \$classGenerator) {
                ClassGeneratorUtils::addMethodIfNotFinal(\$originalClass, \$classGenerator, \$generatedMethod);
            },
            array_merge(
                array_map(
                    \$this->buildLazyLoadingMethodInterceptor(\$initializer, \$valueHolder),
                    ProxiedMethodsFilter::getProxiedMethods(\$originalClass)
                ),
                [
                    new StaticProxyConstructor(\$initializer, Properties::fromReflectionClass(\$originalClass)),
                    Constructor::generateMethod(\$originalClass, \$valueHolder),
                    new MagicGet(\$originalClass, \$initializer, \$valueHolder, \$publicProperties),
                    new MagicSet(\$originalClass, \$initializer, \$valueHolder, \$publicProperties),
                    new MagicIsset(\$originalClass, \$initializer, \$valueHolder, \$publicProperties),
                    new MagicUnset(\$originalClass, \$initializer, \$valueHolder, \$publicProperties),
                    new MagicClone(\$originalClass, \$initializer, \$valueHolder),
                    new MagicSleep(\$originalClass, \$initializer, \$valueHolder),
                    new MagicWakeup(\$originalClass),
                    new SetProxyInitializer(\$initializer),
                    new GetProxyInitializer(\$initializer),
                    new InitializeProxy(\$initializer, \$valueHolder),
                    new IsProxyInitialized(\$valueHolder),
                    new GetWrappedValueHolderValue(\$valueHolder),
                ]
            )
        );
    }

    private function buildLazyLoadingMethodInterceptor(
        InitializerProperty \$initializer,
        ValueHolderProperty \$valueHolder
    ) : callable {
        return function (ReflectionMethod \$method) use (\$initializer, \$valueHolder) : LazyLoadingMethodInterceptor {
            return LazyLoadingMethodInterceptor::generateMethod(
                new MethodReflection(\$method->getDeclaringClass()->getName(), \$method->getName()),
                \$initializer,
                \$valueHolder
            );
        };
    }
}
", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/LazyLoadingValueHolderGenerator.php", "/var/www/public/DevLaon/templates/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/LazyLoadingValueHolderGenerator.php");
    }
}
