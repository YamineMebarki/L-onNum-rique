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

/* vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptorValueHolderGenerator.php */
class __TwigTemplate_2ce4eda9b887f0508683db7463a1b2b1f082a0dd36c72b1f9411b6be256399fd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptorValueHolderGenerator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptorValueHolderGenerator.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator;

use ProxyManager\\Exception\\InvalidProxiedClassException;
use ProxyManager\\Generator\\Util\\ClassGeneratorUtils;
use ProxyManager\\Proxy\\AccessInterceptorValueHolderInterface;
use ProxyManager\\ProxyGenerator\\AccessInterceptor\\MethodGenerator\\MagicWakeup;
use ProxyManager\\ProxyGenerator\\AccessInterceptor\\MethodGenerator\\SetMethodPrefixInterceptor;
use ProxyManager\\ProxyGenerator\\AccessInterceptor\\MethodGenerator\\SetMethodSuffixInterceptor;
use ProxyManager\\ProxyGenerator\\AccessInterceptor\\PropertyGenerator\\MethodPrefixInterceptors;
use ProxyManager\\ProxyGenerator\\AccessInterceptor\\PropertyGenerator\\MethodSuffixInterceptors;
use ProxyManager\\ProxyGenerator\\AccessInterceptorValueHolder\\MethodGenerator\\InterceptedMethod;
use ProxyManager\\ProxyGenerator\\AccessInterceptorValueHolder\\MethodGenerator\\MagicClone;
use ProxyManager\\ProxyGenerator\\AccessInterceptorValueHolder\\MethodGenerator\\MagicGet;
use ProxyManager\\ProxyGenerator\\AccessInterceptorValueHolder\\MethodGenerator\\MagicIsset;
use ProxyManager\\ProxyGenerator\\AccessInterceptorValueHolder\\MethodGenerator\\MagicSet;
use ProxyManager\\ProxyGenerator\\AccessInterceptorValueHolder\\MethodGenerator\\MagicUnset;
use ProxyManager\\ProxyGenerator\\AccessInterceptorValueHolder\\MethodGenerator\\StaticProxyConstructor;
use ProxyManager\\ProxyGenerator\\Assertion\\CanProxyAssertion;
use ProxyManager\\ProxyGenerator\\LazyLoadingValueHolder\\PropertyGenerator\\ValueHolderProperty;
use ProxyManager\\ProxyGenerator\\PropertyGenerator\\PublicPropertiesMap;
use ProxyManager\\ProxyGenerator\\Util\\Properties;
use ProxyManager\\ProxyGenerator\\Util\\ProxiedMethodsFilter;
use ProxyManager\\ProxyGenerator\\ValueHolder\\MethodGenerator\\Constructor;
use ProxyManager\\ProxyGenerator\\ValueHolder\\MethodGenerator\\GetWrappedValueHolderValue;
use ProxyManager\\ProxyGenerator\\ValueHolder\\MethodGenerator\\MagicSleep;
use ReflectionClass;
use ReflectionMethod;
use Zend\\Code\\Generator\\ClassGenerator;
use Zend\\Code\\Generator\\MethodGenerator;
use Zend\\Code\\Reflection\\MethodReflection;

/**
 * Generator for proxies implementing {@see \\ProxyManager\\Proxy\\ValueHolderInterface}
 * and {@see \\ProxyManager\\Proxy\\AccessInterceptorInterface}
 *
 * {@inheritDoc}
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class AccessInterceptorValueHolderGenerator implements ProxyGeneratorInterface
{
    /**
     * {@inheritDoc}
     *
     * @throws \\InvalidArgumentException
     * @throws InvalidProxiedClassException
     * @throws \\Zend\\Code\\Generator\\Exception\\InvalidArgumentException
     */
    public function generate(ReflectionClass \$originalClass, ClassGenerator \$classGenerator)
    {
        CanProxyAssertion::assertClassCanBeProxied(\$originalClass);

        \$publicProperties = new PublicPropertiesMap(Properties::fromReflectionClass(\$originalClass));
        \$interfaces       = [AccessInterceptorValueHolderInterface::class];

        if (\$originalClass->isInterface()) {
            \$interfaces[] = \$originalClass->getName();
        } else {
            \$classGenerator->setExtendedClass(\$originalClass->getName());
        }

        \$classGenerator->setImplementedInterfaces(\$interfaces);
        \$classGenerator->addPropertyFromGenerator(\$valueHolder = new ValueHolderProperty());
        \$classGenerator->addPropertyFromGenerator(\$prefixInterceptors = new MethodPrefixInterceptors());
        \$classGenerator->addPropertyFromGenerator(\$suffixInterceptors = new MethodSuffixInterceptors());
        \$classGenerator->addPropertyFromGenerator(\$publicProperties);

        array_map(
            function (MethodGenerator \$generatedMethod) use (\$originalClass, \$classGenerator) {
                ClassGeneratorUtils::addMethodIfNotFinal(\$originalClass, \$classGenerator, \$generatedMethod);
            },
            array_merge(
                array_map(
                    \$this->buildMethodInterceptor(\$prefixInterceptors, \$suffixInterceptors, \$valueHolder),
                    ProxiedMethodsFilter::getProxiedMethods(\$originalClass)
                ),
                [
                    Constructor::generateMethod(\$originalClass, \$valueHolder),
                    new StaticProxyConstructor(\$originalClass, \$valueHolder, \$prefixInterceptors, \$suffixInterceptors),
                    new GetWrappedValueHolderValue(\$valueHolder),
                    new SetMethodPrefixInterceptor(\$prefixInterceptors),
                    new SetMethodSuffixInterceptor(\$suffixInterceptors),
                    new MagicGet(
                        \$originalClass,
                        \$valueHolder,
                        \$prefixInterceptors,
                        \$suffixInterceptors,
                        \$publicProperties
                    ),
                    new MagicSet(
                        \$originalClass,
                        \$valueHolder,
                        \$prefixInterceptors,
                        \$suffixInterceptors,
                        \$publicProperties
                    ),
                    new MagicIsset(
                        \$originalClass,
                        \$valueHolder,
                        \$prefixInterceptors,
                        \$suffixInterceptors,
                        \$publicProperties
                    ),
                    new MagicUnset(
                        \$originalClass,
                        \$valueHolder,
                        \$prefixInterceptors,
                        \$suffixInterceptors,
                        \$publicProperties
                    ),
                    new MagicClone(\$originalClass, \$valueHolder, \$prefixInterceptors, \$suffixInterceptors),
                    new MagicSleep(\$originalClass, \$valueHolder),
                    new MagicWakeup(\$originalClass),
                ]
            )
        );
    }

    private function buildMethodInterceptor(
        MethodPrefixInterceptors \$prefixes,
        MethodSuffixInterceptors \$suffixes,
        ValueHolderProperty \$valueHolder
    ) : callable {
        return function (ReflectionMethod \$method) use (\$prefixes, \$suffixes, \$valueHolder) : InterceptedMethod {
            return InterceptedMethod::generateMethod(
                new MethodReflection(\$method->getDeclaringClass()->getName(), \$method->getName()),
                \$valueHolder,
                \$prefixes,
                \$suffixes
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
        return "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptorValueHolderGenerator.php";
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
use ProxyManager\\Proxy\\AccessInterceptorValueHolderInterface;
use ProxyManager\\ProxyGenerator\\AccessInterceptor\\MethodGenerator\\MagicWakeup;
use ProxyManager\\ProxyGenerator\\AccessInterceptor\\MethodGenerator\\SetMethodPrefixInterceptor;
use ProxyManager\\ProxyGenerator\\AccessInterceptor\\MethodGenerator\\SetMethodSuffixInterceptor;
use ProxyManager\\ProxyGenerator\\AccessInterceptor\\PropertyGenerator\\MethodPrefixInterceptors;
use ProxyManager\\ProxyGenerator\\AccessInterceptor\\PropertyGenerator\\MethodSuffixInterceptors;
use ProxyManager\\ProxyGenerator\\AccessInterceptorValueHolder\\MethodGenerator\\InterceptedMethod;
use ProxyManager\\ProxyGenerator\\AccessInterceptorValueHolder\\MethodGenerator\\MagicClone;
use ProxyManager\\ProxyGenerator\\AccessInterceptorValueHolder\\MethodGenerator\\MagicGet;
use ProxyManager\\ProxyGenerator\\AccessInterceptorValueHolder\\MethodGenerator\\MagicIsset;
use ProxyManager\\ProxyGenerator\\AccessInterceptorValueHolder\\MethodGenerator\\MagicSet;
use ProxyManager\\ProxyGenerator\\AccessInterceptorValueHolder\\MethodGenerator\\MagicUnset;
use ProxyManager\\ProxyGenerator\\AccessInterceptorValueHolder\\MethodGenerator\\StaticProxyConstructor;
use ProxyManager\\ProxyGenerator\\Assertion\\CanProxyAssertion;
use ProxyManager\\ProxyGenerator\\LazyLoadingValueHolder\\PropertyGenerator\\ValueHolderProperty;
use ProxyManager\\ProxyGenerator\\PropertyGenerator\\PublicPropertiesMap;
use ProxyManager\\ProxyGenerator\\Util\\Properties;
use ProxyManager\\ProxyGenerator\\Util\\ProxiedMethodsFilter;
use ProxyManager\\ProxyGenerator\\ValueHolder\\MethodGenerator\\Constructor;
use ProxyManager\\ProxyGenerator\\ValueHolder\\MethodGenerator\\GetWrappedValueHolderValue;
use ProxyManager\\ProxyGenerator\\ValueHolder\\MethodGenerator\\MagicSleep;
use ReflectionClass;
use ReflectionMethod;
use Zend\\Code\\Generator\\ClassGenerator;
use Zend\\Code\\Generator\\MethodGenerator;
use Zend\\Code\\Reflection\\MethodReflection;

/**
 * Generator for proxies implementing {@see \\ProxyManager\\Proxy\\ValueHolderInterface}
 * and {@see \\ProxyManager\\Proxy\\AccessInterceptorInterface}
 *
 * {@inheritDoc}
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class AccessInterceptorValueHolderGenerator implements ProxyGeneratorInterface
{
    /**
     * {@inheritDoc}
     *
     * @throws \\InvalidArgumentException
     * @throws InvalidProxiedClassException
     * @throws \\Zend\\Code\\Generator\\Exception\\InvalidArgumentException
     */
    public function generate(ReflectionClass \$originalClass, ClassGenerator \$classGenerator)
    {
        CanProxyAssertion::assertClassCanBeProxied(\$originalClass);

        \$publicProperties = new PublicPropertiesMap(Properties::fromReflectionClass(\$originalClass));
        \$interfaces       = [AccessInterceptorValueHolderInterface::class];

        if (\$originalClass->isInterface()) {
            \$interfaces[] = \$originalClass->getName();
        } else {
            \$classGenerator->setExtendedClass(\$originalClass->getName());
        }

        \$classGenerator->setImplementedInterfaces(\$interfaces);
        \$classGenerator->addPropertyFromGenerator(\$valueHolder = new ValueHolderProperty());
        \$classGenerator->addPropertyFromGenerator(\$prefixInterceptors = new MethodPrefixInterceptors());
        \$classGenerator->addPropertyFromGenerator(\$suffixInterceptors = new MethodSuffixInterceptors());
        \$classGenerator->addPropertyFromGenerator(\$publicProperties);

        array_map(
            function (MethodGenerator \$generatedMethod) use (\$originalClass, \$classGenerator) {
                ClassGeneratorUtils::addMethodIfNotFinal(\$originalClass, \$classGenerator, \$generatedMethod);
            },
            array_merge(
                array_map(
                    \$this->buildMethodInterceptor(\$prefixInterceptors, \$suffixInterceptors, \$valueHolder),
                    ProxiedMethodsFilter::getProxiedMethods(\$originalClass)
                ),
                [
                    Constructor::generateMethod(\$originalClass, \$valueHolder),
                    new StaticProxyConstructor(\$originalClass, \$valueHolder, \$prefixInterceptors, \$suffixInterceptors),
                    new GetWrappedValueHolderValue(\$valueHolder),
                    new SetMethodPrefixInterceptor(\$prefixInterceptors),
                    new SetMethodSuffixInterceptor(\$suffixInterceptors),
                    new MagicGet(
                        \$originalClass,
                        \$valueHolder,
                        \$prefixInterceptors,
                        \$suffixInterceptors,
                        \$publicProperties
                    ),
                    new MagicSet(
                        \$originalClass,
                        \$valueHolder,
                        \$prefixInterceptors,
                        \$suffixInterceptors,
                        \$publicProperties
                    ),
                    new MagicIsset(
                        \$originalClass,
                        \$valueHolder,
                        \$prefixInterceptors,
                        \$suffixInterceptors,
                        \$publicProperties
                    ),
                    new MagicUnset(
                        \$originalClass,
                        \$valueHolder,
                        \$prefixInterceptors,
                        \$suffixInterceptors,
                        \$publicProperties
                    ),
                    new MagicClone(\$originalClass, \$valueHolder, \$prefixInterceptors, \$suffixInterceptors),
                    new MagicSleep(\$originalClass, \$valueHolder),
                    new MagicWakeup(\$originalClass),
                ]
            )
        );
    }

    private function buildMethodInterceptor(
        MethodPrefixInterceptors \$prefixes,
        MethodSuffixInterceptors \$suffixes,
        ValueHolderProperty \$valueHolder
    ) : callable {
        return function (ReflectionMethod \$method) use (\$prefixes, \$suffixes, \$valueHolder) : InterceptedMethod {
            return InterceptedMethod::generateMethod(
                new MethodReflection(\$method->getDeclaringClass()->getName(), \$method->getName()),
                \$valueHolder,
                \$prefixes,
                \$suffixes
            );
        };
    }
}
", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptorValueHolderGenerator.php", "/var/www/public/DevLaon/templates/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptorValueHolderGenerator.php");
    }
}
