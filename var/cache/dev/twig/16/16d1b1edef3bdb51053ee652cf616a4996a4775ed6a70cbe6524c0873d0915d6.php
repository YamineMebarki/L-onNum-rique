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

/* vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/RemoteObjectGenerator.php */
class __TwigTemplate_8e87478c77fd9501f2a6bdf3a83de58f9071671cf21562fbe60ca1af4b7d1d50 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/RemoteObjectGenerator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/RemoteObjectGenerator.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator;

use ProxyManager\\Exception\\InvalidProxiedClassException;
use ProxyManager\\Generator\\Util\\ClassGeneratorUtils;
use ProxyManager\\Proxy\\RemoteObjectInterface;
use ProxyManager\\ProxyGenerator\\Assertion\\CanProxyAssertion;
use ProxyManager\\ProxyGenerator\\RemoteObject\\MethodGenerator\\MagicGet;
use ProxyManager\\ProxyGenerator\\RemoteObject\\MethodGenerator\\MagicIsset;
use ProxyManager\\ProxyGenerator\\RemoteObject\\MethodGenerator\\MagicSet;
use ProxyManager\\ProxyGenerator\\RemoteObject\\MethodGenerator\\MagicUnset;
use ProxyManager\\ProxyGenerator\\RemoteObject\\MethodGenerator\\RemoteObjectMethod;
use ProxyManager\\ProxyGenerator\\RemoteObject\\MethodGenerator\\StaticProxyConstructor;
use ProxyManager\\ProxyGenerator\\RemoteObject\\PropertyGenerator\\AdapterProperty;
use ProxyManager\\ProxyGenerator\\Util\\ProxiedMethodsFilter;
use ReflectionClass;
use ReflectionMethod;
use Zend\\Code\\Generator\\ClassGenerator;
use Zend\\Code\\Generator\\MethodGenerator;
use Zend\\Code\\Reflection\\MethodReflection;

/**
 * Generator for proxies implementing {@see \\ProxyManager\\Proxy\\RemoteObjectInterface}
 *
 * {@inheritDoc}
 *
 * @author Vincent Blanchon <blanchon.vincent@gmail.com>
 * @license MIT
 */
class RemoteObjectGenerator implements ProxyGeneratorInterface
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

        \$interfaces = [RemoteObjectInterface::class];

        if (\$originalClass->isInterface()) {
            \$interfaces[] = \$originalClass->getName();
        } else {
            \$classGenerator->setExtendedClass(\$originalClass->getName());
        }

        \$classGenerator->setImplementedInterfaces(\$interfaces);
        \$classGenerator->addPropertyFromGenerator(\$adapter = new AdapterProperty());

        array_map(
            function (MethodGenerator \$generatedMethod) use (\$originalClass, \$classGenerator) {
                ClassGeneratorUtils::addMethodIfNotFinal(\$originalClass, \$classGenerator, \$generatedMethod);
            },
            array_merge(
                array_map(
                    function (ReflectionMethod \$method) use (\$adapter, \$originalClass) : RemoteObjectMethod {
                        return RemoteObjectMethod::generateMethod(
                            new MethodReflection(\$method->getDeclaringClass()->getName(), \$method->getName()),
                            \$adapter,
                            \$originalClass
                        );
                    },
                    ProxiedMethodsFilter::getProxiedMethods(
                        \$originalClass,
                        ['__get', '__set', '__isset', '__unset']
                    )
                ),
                [
                    new StaticProxyConstructor(\$originalClass, \$adapter),
                    new MagicGet(\$originalClass, \$adapter),
                    new MagicSet(\$originalClass, \$adapter),
                    new MagicIsset(\$originalClass, \$adapter),
                    new MagicUnset(\$originalClass, \$adapter),
                ]
            )
        );
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/RemoteObjectGenerator.php";
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
use ProxyManager\\Proxy\\RemoteObjectInterface;
use ProxyManager\\ProxyGenerator\\Assertion\\CanProxyAssertion;
use ProxyManager\\ProxyGenerator\\RemoteObject\\MethodGenerator\\MagicGet;
use ProxyManager\\ProxyGenerator\\RemoteObject\\MethodGenerator\\MagicIsset;
use ProxyManager\\ProxyGenerator\\RemoteObject\\MethodGenerator\\MagicSet;
use ProxyManager\\ProxyGenerator\\RemoteObject\\MethodGenerator\\MagicUnset;
use ProxyManager\\ProxyGenerator\\RemoteObject\\MethodGenerator\\RemoteObjectMethod;
use ProxyManager\\ProxyGenerator\\RemoteObject\\MethodGenerator\\StaticProxyConstructor;
use ProxyManager\\ProxyGenerator\\RemoteObject\\PropertyGenerator\\AdapterProperty;
use ProxyManager\\ProxyGenerator\\Util\\ProxiedMethodsFilter;
use ReflectionClass;
use ReflectionMethod;
use Zend\\Code\\Generator\\ClassGenerator;
use Zend\\Code\\Generator\\MethodGenerator;
use Zend\\Code\\Reflection\\MethodReflection;

/**
 * Generator for proxies implementing {@see \\ProxyManager\\Proxy\\RemoteObjectInterface}
 *
 * {@inheritDoc}
 *
 * @author Vincent Blanchon <blanchon.vincent@gmail.com>
 * @license MIT
 */
class RemoteObjectGenerator implements ProxyGeneratorInterface
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

        \$interfaces = [RemoteObjectInterface::class];

        if (\$originalClass->isInterface()) {
            \$interfaces[] = \$originalClass->getName();
        } else {
            \$classGenerator->setExtendedClass(\$originalClass->getName());
        }

        \$classGenerator->setImplementedInterfaces(\$interfaces);
        \$classGenerator->addPropertyFromGenerator(\$adapter = new AdapterProperty());

        array_map(
            function (MethodGenerator \$generatedMethod) use (\$originalClass, \$classGenerator) {
                ClassGeneratorUtils::addMethodIfNotFinal(\$originalClass, \$classGenerator, \$generatedMethod);
            },
            array_merge(
                array_map(
                    function (ReflectionMethod \$method) use (\$adapter, \$originalClass) : RemoteObjectMethod {
                        return RemoteObjectMethod::generateMethod(
                            new MethodReflection(\$method->getDeclaringClass()->getName(), \$method->getName()),
                            \$adapter,
                            \$originalClass
                        );
                    },
                    ProxiedMethodsFilter::getProxiedMethods(
                        \$originalClass,
                        ['__get', '__set', '__isset', '__unset']
                    )
                ),
                [
                    new StaticProxyConstructor(\$originalClass, \$adapter),
                    new MagicGet(\$originalClass, \$adapter),
                    new MagicSet(\$originalClass, \$adapter),
                    new MagicIsset(\$originalClass, \$adapter),
                    new MagicUnset(\$originalClass, \$adapter),
                ]
            )
        );
    }
}
", "vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/RemoteObjectGenerator.php", "/var/www/public/DevLaon/templates/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/RemoteObjectGenerator.php");
    }
}
