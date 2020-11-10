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

/* vendor/symfony/var-exporter/Instantiator.php */
class __TwigTemplate_abbd2ceb0ee3f9bd6239062e8efbe8c8c9b8056be74f4fa2895bfad8196b02ec extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-exporter/Instantiator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-exporter/Instantiator.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\VarExporter;

use Symfony\\Component\\VarExporter\\Exception\\ExceptionInterface;
use Symfony\\Component\\VarExporter\\Exception\\NotInstantiableTypeException;
use Symfony\\Component\\VarExporter\\Internal\\Hydrator;
use Symfony\\Component\\VarExporter\\Internal\\Registry;

/**
 * A utility class to create objects without calling their constructor.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
final class Instantiator
{
    /**
     * Creates an object and sets its properties without calling its constructor nor any other methods.
     *
     * For example:
     *
     *     // creates an empty instance of Foo
     *     Instantiator::instantiate(Foo::class);
     *
     *     // creates a Foo instance and sets one of its properties
     *     Instantiator::instantiate(Foo::class, ['propertyName' => \$propertyValue]);
     *
     *     // creates a Foo instance and sets a private property defined on its parent Bar class
     *     Instantiator::instantiate(Foo::class, [], [
     *         Bar::class => ['privateBarProperty' => \$propertyValue],
     *     ]);
     *
     * Instances of ArrayObject, ArrayIterator and SplObjectHash can be created
     * by using the special \"\\0\" property name to define their internal value:
     *
     *     // creates an SplObjectHash where \$info1 is attached to \$obj1, etc.
     *     Instantiator::instantiate(SplObjectStorage::class, [\"\\0\" => [\$obj1, \$info1, \$obj2, \$info2...]]);
     *
     *     // creates an ArrayObject populated with \$inputArray
     *     Instantiator::instantiate(ArrayObject::class, [\"\\0\" => [\$inputArray]]);
     *
     * @param string \$class             The class of the instance to create
     * @param array  \$properties        The properties to set on the instance
     * @param array  \$privateProperties The private properties to set on the instance,
     *                                  keyed by their declaring class
     *
     * @return object The created instance
     *
     * @throws ExceptionInterface When the instance cannot be created
     */
    public static function instantiate(string \$class, array \$properties = [], array \$privateProperties = [])
    {
        \$reflector = Registry::\$reflectors[\$class] ?? Registry::getClassReflector(\$class);

        if (Registry::\$cloneable[\$class]) {
            \$wrappedInstance = [clone Registry::\$prototypes[\$class]];
        } elseif (Registry::\$instantiableWithoutConstructor[\$class]) {
            \$wrappedInstance = [\$reflector->newInstanceWithoutConstructor()];
        } elseif (null === Registry::\$prototypes[\$class]) {
            throw new NotInstantiableTypeException(\$class);
        } elseif (\$reflector->implementsInterface('Serializable') && (\\PHP_VERSION_ID < 70400 || !method_exists(\$class, '__unserialize'))) {
            \$wrappedInstance = [unserialize('C:'.\\strlen(\$class).':\"'.\$class.'\":0:{}')];
        } else {
            \$wrappedInstance = [unserialize('O:'.\\strlen(\$class).':\"'.\$class.'\":0:{}')];
        }

        if (\$properties) {
            \$privateProperties[\$class] = isset(\$privateProperties[\$class]) ? \$properties + \$privateProperties[\$class] : \$properties;
        }

        foreach (\$privateProperties as \$class => \$properties) {
            if (!\$properties) {
                continue;
            }
            foreach (\$properties as \$name => \$value) {
                // because they're also used for \"unserialization\", hydrators
                // deal with array of instances, so we need to wrap values
                \$properties[\$name] = [\$value];
            }
            (Hydrator::\$hydrators[\$class] ?? Hydrator::getHydrator(\$class))(\$properties, \$wrappedInstance);
        }

        return \$wrappedInstance[0];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/var-exporter/Instantiator.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\VarExporter;

use Symfony\\Component\\VarExporter\\Exception\\ExceptionInterface;
use Symfony\\Component\\VarExporter\\Exception\\NotInstantiableTypeException;
use Symfony\\Component\\VarExporter\\Internal\\Hydrator;
use Symfony\\Component\\VarExporter\\Internal\\Registry;

/**
 * A utility class to create objects without calling their constructor.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
final class Instantiator
{
    /**
     * Creates an object and sets its properties without calling its constructor nor any other methods.
     *
     * For example:
     *
     *     // creates an empty instance of Foo
     *     Instantiator::instantiate(Foo::class);
     *
     *     // creates a Foo instance and sets one of its properties
     *     Instantiator::instantiate(Foo::class, ['propertyName' => \$propertyValue]);
     *
     *     // creates a Foo instance and sets a private property defined on its parent Bar class
     *     Instantiator::instantiate(Foo::class, [], [
     *         Bar::class => ['privateBarProperty' => \$propertyValue],
     *     ]);
     *
     * Instances of ArrayObject, ArrayIterator and SplObjectHash can be created
     * by using the special \"\\0\" property name to define their internal value:
     *
     *     // creates an SplObjectHash where \$info1 is attached to \$obj1, etc.
     *     Instantiator::instantiate(SplObjectStorage::class, [\"\\0\" => [\$obj1, \$info1, \$obj2, \$info2...]]);
     *
     *     // creates an ArrayObject populated with \$inputArray
     *     Instantiator::instantiate(ArrayObject::class, [\"\\0\" => [\$inputArray]]);
     *
     * @param string \$class             The class of the instance to create
     * @param array  \$properties        The properties to set on the instance
     * @param array  \$privateProperties The private properties to set on the instance,
     *                                  keyed by their declaring class
     *
     * @return object The created instance
     *
     * @throws ExceptionInterface When the instance cannot be created
     */
    public static function instantiate(string \$class, array \$properties = [], array \$privateProperties = [])
    {
        \$reflector = Registry::\$reflectors[\$class] ?? Registry::getClassReflector(\$class);

        if (Registry::\$cloneable[\$class]) {
            \$wrappedInstance = [clone Registry::\$prototypes[\$class]];
        } elseif (Registry::\$instantiableWithoutConstructor[\$class]) {
            \$wrappedInstance = [\$reflector->newInstanceWithoutConstructor()];
        } elseif (null === Registry::\$prototypes[\$class]) {
            throw new NotInstantiableTypeException(\$class);
        } elseif (\$reflector->implementsInterface('Serializable') && (\\PHP_VERSION_ID < 70400 || !method_exists(\$class, '__unserialize'))) {
            \$wrappedInstance = [unserialize('C:'.\\strlen(\$class).':\"'.\$class.'\":0:{}')];
        } else {
            \$wrappedInstance = [unserialize('O:'.\\strlen(\$class).':\"'.\$class.'\":0:{}')];
        }

        if (\$properties) {
            \$privateProperties[\$class] = isset(\$privateProperties[\$class]) ? \$properties + \$privateProperties[\$class] : \$properties;
        }

        foreach (\$privateProperties as \$class => \$properties) {
            if (!\$properties) {
                continue;
            }
            foreach (\$properties as \$name => \$value) {
                // because they're also used for \"unserialization\", hydrators
                // deal with array of instances, so we need to wrap values
                \$properties[\$name] = [\$value];
            }
            (Hydrator::\$hydrators[\$class] ?? Hydrator::getHydrator(\$class))(\$properties, \$wrappedInstance);
        }

        return \$wrappedInstance[0];
    }
}
", "vendor/symfony/var-exporter/Instantiator.php", "/var/www/public/DevLaon/templates/vendor/symfony/var-exporter/Instantiator.php");
    }
}
