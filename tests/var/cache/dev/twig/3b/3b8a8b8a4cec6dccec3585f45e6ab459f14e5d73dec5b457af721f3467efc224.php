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

/* vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/LazyLoadingGhostGenerator.php */
class __TwigTemplate_5d28da0dd16000920fb633b2b68f8691ce9cb55d26c20eb806ca86b4d2e201cd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/LazyLoadingGhostGenerator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/LazyLoadingGhostGenerator.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator;

use ProxyManager\\Exception\\InvalidProxiedClassException;
use ProxyManager\\Generator\\MethodGenerator as ProxyManagerMethodGenerator;
use ProxyManager\\Generator\\Util\\ClassGeneratorUtils;
use ProxyManager\\Proxy\\GhostObjectInterface;
use ProxyManager\\ProxyGenerator\\Assertion\\CanProxyAssertion;
use ProxyManager\\ProxyGenerator\\LazyLoading\\MethodGenerator\\StaticProxyConstructor;
use ProxyManager\\ProxyGenerator\\LazyLoadingGhost\\MethodGenerator\\CallInitializer;
use ProxyManager\\ProxyGenerator\\LazyLoadingGhost\\MethodGenerator\\GetProxyInitializer;
use ProxyManager\\ProxyGenerator\\LazyLoadingGhost\\MethodGenerator\\InitializeProxy;
use ProxyManager\\ProxyGenerator\\LazyLoadingGhost\\MethodGenerator\\IsProxyInitialized;
use ProxyManager\\ProxyGenerator\\LazyLoadingGhost\\MethodGenerator\\MagicClone;
use ProxyManager\\ProxyGenerator\\LazyLoadingGhost\\MethodGenerator\\MagicGet;
use ProxyManager\\ProxyGenerator\\LazyLoadingGhost\\MethodGenerator\\MagicIsset;
use ProxyManager\\ProxyGenerator\\LazyLoadingGhost\\MethodGenerator\\MagicSet;
use ProxyManager\\ProxyGenerator\\LazyLoadingGhost\\MethodGenerator\\MagicSleep;
use ProxyManager\\ProxyGenerator\\LazyLoadingGhost\\MethodGenerator\\MagicUnset;
use ProxyManager\\ProxyGenerator\\LazyLoadingGhost\\MethodGenerator\\SetProxyInitializer;
use ProxyManager\\ProxyGenerator\\LazyLoadingGhost\\PropertyGenerator\\InitializationTracker;
use ProxyManager\\ProxyGenerator\\LazyLoadingGhost\\PropertyGenerator\\InitializerProperty;
use ProxyManager\\ProxyGenerator\\LazyLoadingGhost\\PropertyGenerator\\PrivatePropertiesMap;
use ProxyManager\\ProxyGenerator\\LazyLoadingGhost\\PropertyGenerator\\ProtectedPropertiesMap;
use ProxyManager\\ProxyGenerator\\PropertyGenerator\\PublicPropertiesMap;
use ProxyManager\\ProxyGenerator\\Util\\Properties;
use ProxyManager\\ProxyGenerator\\Util\\ProxiedMethodsFilter;
use ReflectionClass;
use ReflectionMethod;
use Zend\\Code\\Generator\\ClassGenerator;
use Zend\\Code\\Generator\\MethodGenerator;
use Zend\\Code\\Reflection\\MethodReflection;

/**
 * Generator for proxies implementing {@see \\ProxyManager\\Proxy\\GhostObjectInterface}
 *
 * {@inheritDoc}
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class LazyLoadingGhostGenerator implements ProxyGeneratorInterface
{
    /**
     * {@inheritDoc}
     *
     * @throws InvalidProxiedClassException
     * @throws \\Zend\\Code\\Generator\\Exception\\InvalidArgumentException
     * @throws \\InvalidArgumentException
     */
    public function generate(ReflectionClass \$originalClass, ClassGenerator \$classGenerator, array \$proxyOptions = [])
    {
        CanProxyAssertion::assertClassCanBeProxied(\$originalClass, false);

        \$filteredProperties = Properties::fromReflectionClass(\$originalClass)
            ->filter(\$proxyOptions['skippedProperties'] ?? []);

        \$publicProperties    = new PublicPropertiesMap(\$filteredProperties);
        \$privateProperties   = new PrivatePropertiesMap(\$filteredProperties);
        \$protectedProperties = new ProtectedPropertiesMap(\$filteredProperties);

        \$classGenerator->setExtendedClass(\$originalClass->getName());
        \$classGenerator->setImplementedInterfaces([GhostObjectInterface::class]);
        \$classGenerator->addPropertyFromGenerator(\$initializer = new InitializerProperty());
        \$classGenerator->addPropertyFromGenerator(\$initializationTracker = new InitializationTracker());
        \$classGenerator->addPropertyFromGenerator(\$publicProperties);
        \$classGenerator->addPropertyFromGenerator(\$privateProperties);
        \$classGenerator->addPropertyFromGenerator(\$protectedProperties);

        \$init = new CallInitializer(\$initializer, \$initializationTracker, \$filteredProperties);

        array_map(
            function (MethodGenerator \$generatedMethod) use (\$originalClass, \$classGenerator) {
                ClassGeneratorUtils::addMethodIfNotFinal(\$originalClass, \$classGenerator, \$generatedMethod);
            },
            array_merge(
                \$this->getAbstractProxiedMethods(\$originalClass),
                [
                    \$init,
                    new StaticProxyConstructor(\$initializer, \$filteredProperties),
                    new MagicGet(
                        \$originalClass,
                        \$initializer,
                        \$init,
                        \$publicProperties,
                        \$protectedProperties,
                        \$privateProperties,
                        \$initializationTracker
                    ),
                    new MagicSet(
                        \$originalClass,
                        \$initializer,
                        \$init,
                        \$publicProperties,
                        \$protectedProperties,
                        \$privateProperties
                    ),
                    new MagicIsset(
                        \$originalClass,
                        \$initializer,
                        \$init,
                        \$publicProperties,
                        \$protectedProperties,
                        \$privateProperties
                    ),
                    new MagicUnset(
                        \$originalClass,
                        \$initializer,
                        \$init,
                        \$publicProperties,
                        \$protectedProperties,
                        \$privateProperties
                    ),
                    new MagicClone(\$originalClass, \$initializer, \$init),
                    new MagicSleep(\$originalClass, \$initializer, \$init),
                    new SetProxyInitializer(\$initializer),
                    new GetProxyInitializer(\$initializer),
                    new InitializeProxy(\$initializer, \$init),
                    new IsProxyInitialized(\$initializer),
                ]
            )
        );
    }

    /**
     * Retrieves all abstract methods to be proxied
     *
     * @param ReflectionClass \$originalClass
     *
     * @return MethodGenerator[]
     */
    private function getAbstractProxiedMethods(ReflectionClass \$originalClass) : array
    {
        return array_map(
            function (ReflectionMethod \$method) : ProxyManagerMethodGenerator {
                \$generated = ProxyManagerMethodGenerator::fromReflectionWithoutBodyAndDocBlock(
                    new MethodReflection(\$method->getDeclaringClass()->getName(), \$method->getName())
                );

                \$generated->setAbstract(false);

                return \$generated;
            },
            ProxiedMethodsFilter::getAbstractProxiedMethods(\$originalClass)
        );
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/LazyLoadingGhostGenerator.php";
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
use ProxyManager\\Generator\\MethodGenerator as ProxyManagerMethodGenerator;
use ProxyManager\\Generator\\Util\\ClassGeneratorUtils;
use ProxyManager\\Proxy\\GhostObjectInterface;
use ProxyManager\\ProxyGenerator\\Assertion\\CanProxyAssertion;
use ProxyManager\\ProxyGenerator\\LazyLoading\\MethodGenerator\\StaticProxyConstructor;
use ProxyManager\\ProxyGenerator\\LazyLoadingGhost\\MethodGenerator\\CallInitializer;
use ProxyManager\\ProxyGenerator\\LazyLoadingGhost\\MethodGenerator\\GetProxyInitializer;
use ProxyManager\\ProxyGenerator\\LazyLoadingGhost\\MethodGenerator\\InitializeProxy;
use ProxyManager\\ProxyGenerator\\LazyLoadingGhost\\MethodGenerator\\IsProxyInitialized;
use ProxyManager\\ProxyGenerator\\LazyLoadingGhost\\MethodGenerator\\MagicClone;
use ProxyManager\\ProxyGenerator\\LazyLoadingGhost\\MethodGenerator\\MagicGet;
use ProxyManager\\ProxyGenerator\\LazyLoadingGhost\\MethodGenerator\\MagicIsset;
use ProxyManager\\ProxyGenerator\\LazyLoadingGhost\\MethodGenerator\\MagicSet;
use ProxyManager\\ProxyGenerator\\LazyLoadingGhost\\MethodGenerator\\MagicSleep;
use ProxyManager\\ProxyGenerator\\LazyLoadingGhost\\MethodGenerator\\MagicUnset;
use ProxyManager\\ProxyGenerator\\LazyLoadingGhost\\MethodGenerator\\SetProxyInitializer;
use ProxyManager\\ProxyGenerator\\LazyLoadingGhost\\PropertyGenerator\\InitializationTracker;
use ProxyManager\\ProxyGenerator\\LazyLoadingGhost\\PropertyGenerator\\InitializerProperty;
use ProxyManager\\ProxyGenerator\\LazyLoadingGhost\\PropertyGenerator\\PrivatePropertiesMap;
use ProxyManager\\ProxyGenerator\\LazyLoadingGhost\\PropertyGenerator\\ProtectedPropertiesMap;
use ProxyManager\\ProxyGenerator\\PropertyGenerator\\PublicPropertiesMap;
use ProxyManager\\ProxyGenerator\\Util\\Properties;
use ProxyManager\\ProxyGenerator\\Util\\ProxiedMethodsFilter;
use ReflectionClass;
use ReflectionMethod;
use Zend\\Code\\Generator\\ClassGenerator;
use Zend\\Code\\Generator\\MethodGenerator;
use Zend\\Code\\Reflection\\MethodReflection;

/**
 * Generator for proxies implementing {@see \\ProxyManager\\Proxy\\GhostObjectInterface}
 *
 * {@inheritDoc}
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class LazyLoadingGhostGenerator implements ProxyGeneratorInterface
{
    /**
     * {@inheritDoc}
     *
     * @throws InvalidProxiedClassException
     * @throws \\Zend\\Code\\Generator\\Exception\\InvalidArgumentException
     * @throws \\InvalidArgumentException
     */
    public function generate(ReflectionClass \$originalClass, ClassGenerator \$classGenerator, array \$proxyOptions = [])
    {
        CanProxyAssertion::assertClassCanBeProxied(\$originalClass, false);

        \$filteredProperties = Properties::fromReflectionClass(\$originalClass)
            ->filter(\$proxyOptions['skippedProperties'] ?? []);

        \$publicProperties    = new PublicPropertiesMap(\$filteredProperties);
        \$privateProperties   = new PrivatePropertiesMap(\$filteredProperties);
        \$protectedProperties = new ProtectedPropertiesMap(\$filteredProperties);

        \$classGenerator->setExtendedClass(\$originalClass->getName());
        \$classGenerator->setImplementedInterfaces([GhostObjectInterface::class]);
        \$classGenerator->addPropertyFromGenerator(\$initializer = new InitializerProperty());
        \$classGenerator->addPropertyFromGenerator(\$initializationTracker = new InitializationTracker());
        \$classGenerator->addPropertyFromGenerator(\$publicProperties);
        \$classGenerator->addPropertyFromGenerator(\$privateProperties);
        \$classGenerator->addPropertyFromGenerator(\$protectedProperties);

        \$init = new CallInitializer(\$initializer, \$initializationTracker, \$filteredProperties);

        array_map(
            function (MethodGenerator \$generatedMethod) use (\$originalClass, \$classGenerator) {
                ClassGeneratorUtils::addMethodIfNotFinal(\$originalClass, \$classGenerator, \$generatedMethod);
            },
            array_merge(
                \$this->getAbstractProxiedMethods(\$originalClass),
                [
                    \$init,
                    new StaticProxyConstructor(\$initializer, \$filteredProperties),
                    new MagicGet(
                        \$originalClass,
                        \$initializer,
                        \$init,
                        \$publicProperties,
                        \$protectedProperties,
                        \$privateProperties,
                        \$initializationTracker
                    ),
                    new MagicSet(
                        \$originalClass,
                        \$initializer,
                        \$init,
                        \$publicProperties,
                        \$protectedProperties,
                        \$privateProperties
                    ),
                    new MagicIsset(
                        \$originalClass,
                        \$initializer,
                        \$init,
                        \$publicProperties,
                        \$protectedProperties,
                        \$privateProperties
                    ),
                    new MagicUnset(
                        \$originalClass,
                        \$initializer,
                        \$init,
                        \$publicProperties,
                        \$protectedProperties,
                        \$privateProperties
                    ),
                    new MagicClone(\$originalClass, \$initializer, \$init),
                    new MagicSleep(\$originalClass, \$initializer, \$init),
                    new SetProxyInitializer(\$initializer),
                    new GetProxyInitializer(\$initializer),
                    new InitializeProxy(\$initializer, \$init),
                    new IsProxyInitialized(\$initializer),
                ]
            )
        );
    }

    /**
     * Retrieves all abstract methods to be proxied
     *
     * @param ReflectionClass \$originalClass
     *
     * @return MethodGenerator[]
     */
    private function getAbstractProxiedMethods(ReflectionClass \$originalClass) : array
    {
        return array_map(
            function (ReflectionMethod \$method) : ProxyManagerMethodGenerator {
                \$generated = ProxyManagerMethodGenerator::fromReflectionWithoutBodyAndDocBlock(
                    new MethodReflection(\$method->getDeclaringClass()->getName(), \$method->getName())
                );

                \$generated->setAbstract(false);

                return \$generated;
            },
            ProxiedMethodsFilter::getAbstractProxiedMethods(\$originalClass)
        );
    }
}
", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/LazyLoadingGhostGenerator.php", "/var/www/public/DevLaon/templates/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/LazyLoadingGhostGenerator.php");
    }
}
