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

/* vendor/symfony/var-exporter/Internal/Registry.php */
class __TwigTemplate_7808f4ca90342d3820833c451629cb29a11351a5be9d29e7e4486054bdbf71a1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-exporter/Internal/Registry.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-exporter/Internal/Registry.php"));

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

namespace Symfony\\Component\\VarExporter\\Internal;

use Symfony\\Component\\VarExporter\\Exception\\ClassNotFoundException;
use Symfony\\Component\\VarExporter\\Exception\\NotInstantiableTypeException;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
class Registry
{
    public static \$reflectors = [];
    public static \$prototypes = [];
    public static \$factories = [];
    public static \$cloneable = [];
    public static \$instantiableWithoutConstructor = [];

    public function __construct(array \$classes)
    {
        foreach (\$classes as \$i => \$class) {
            \$this->\$i = \$class;
        }
    }

    public static function unserialize(\$objects, \$serializables)
    {
        \$unserializeCallback = ini_set('unserialize_callback_func', __CLASS__.'::getClassReflector');

        try {
            foreach (\$serializables as \$k => \$v) {
                \$objects[\$k] = unserialize(\$v);
            }
        } finally {
            ini_set('unserialize_callback_func', \$unserializeCallback);
        }

        return \$objects;
    }

    public static function p(\$class)
    {
        self::getClassReflector(\$class, true, true);

        return self::\$prototypes[\$class];
    }

    public static function f(\$class)
    {
        \$reflector = self::\$reflectors[\$class] ?? self::getClassReflector(\$class, true, false);

        return self::\$factories[\$class] = \\Closure::fromCallable([\$reflector, 'newInstanceWithoutConstructor']);
    }

    public static function getClassReflector(\$class, \$instantiableWithoutConstructor = false, \$cloneable = null)
    {
        if (!(\$isClass = class_exists(\$class)) && !interface_exists(\$class, false) && !trait_exists(\$class, false)) {
            throw new ClassNotFoundException(\$class);
        }
        \$reflector = new \\ReflectionClass(\$class);

        if (\$instantiableWithoutConstructor) {
            \$proto = \$reflector->newInstanceWithoutConstructor();
        } elseif (!\$isClass || \$reflector->isAbstract()) {
            throw new NotInstantiableTypeException(\$class);
        } elseif (\$reflector->name !== \$class) {
            \$reflector = self::\$reflectors[\$name = \$reflector->name] ?? self::getClassReflector(\$name, false, \$cloneable);
            self::\$cloneable[\$class] = self::\$cloneable[\$name];
            self::\$instantiableWithoutConstructor[\$class] = self::\$instantiableWithoutConstructor[\$name];
            self::\$prototypes[\$class] = self::\$prototypes[\$name];

            return self::\$reflectors[\$class] = \$reflector;
        } else {
            try {
                \$proto = \$reflector->newInstanceWithoutConstructor();
                \$instantiableWithoutConstructor = true;
            } catch (\\ReflectionException \$e) {
                \$proto = \$reflector->implementsInterface('Serializable') && !method_exists(\$class, '__unserialize') ? 'C:' : 'O:';
                if ('C:' === \$proto && !\$reflector->getMethod('unserialize')->isInternal()) {
                    \$proto = null;
                } elseif (false === \$proto = @unserialize(\$proto.\\strlen(\$class).':\"'.\$class.'\":0:{}')) {
                    throw new NotInstantiableTypeException(\$class);
                }
            }
            if (null !== \$proto && !\$proto instanceof \\Throwable && !\$proto instanceof \\Serializable && !method_exists(\$class, '__sleep') && (\\PHP_VERSION_ID < 70400 || !method_exists(\$class, '__serialize'))) {
                try {
                    serialize(\$proto);
                } catch (\\Exception \$e) {
                    throw new NotInstantiableTypeException(\$class, \$e);
                }
            }
        }

        if (null === \$cloneable) {
            if ((\$proto instanceof \\Reflector || \$proto instanceof \\ReflectionGenerator || \$proto instanceof \\ReflectionType || \$proto instanceof \\IteratorIterator || \$proto instanceof \\RecursiveIteratorIterator) && (!\$proto instanceof \\Serializable && !method_exists(\$proto, '__wakeup') && (\\PHP_VERSION_ID < 70400 || !method_exists(\$class, '__unserialize')))) {
                throw new NotInstantiableTypeException(\$class);
            }

            \$cloneable = \$reflector->isCloneable() && !\$reflector->hasMethod('__clone');
        }

        self::\$cloneable[\$class] = \$cloneable;
        self::\$instantiableWithoutConstructor[\$class] = \$instantiableWithoutConstructor;
        self::\$prototypes[\$class] = \$proto;

        if (\$proto instanceof \\Throwable) {
            static \$setTrace;

            if (null === \$setTrace) {
                \$setTrace = [
                    new \\ReflectionProperty(\\Error::class, 'trace'),
                    new \\ReflectionProperty(\\Exception::class, 'trace'),
                ];
                \$setTrace[0]->setAccessible(true);
                \$setTrace[1]->setAccessible(true);
                \$setTrace[0] = \\Closure::fromCallable([\$setTrace[0], 'setValue']);
                \$setTrace[1] = \\Closure::fromCallable([\$setTrace[1], 'setValue']);
            }

            \$setTrace[\$proto instanceof \\Exception](\$proto, []);
        }

        return self::\$reflectors[\$class] = \$reflector;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/var-exporter/Internal/Registry.php";
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

namespace Symfony\\Component\\VarExporter\\Internal;

use Symfony\\Component\\VarExporter\\Exception\\ClassNotFoundException;
use Symfony\\Component\\VarExporter\\Exception\\NotInstantiableTypeException;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
class Registry
{
    public static \$reflectors = [];
    public static \$prototypes = [];
    public static \$factories = [];
    public static \$cloneable = [];
    public static \$instantiableWithoutConstructor = [];

    public function __construct(array \$classes)
    {
        foreach (\$classes as \$i => \$class) {
            \$this->\$i = \$class;
        }
    }

    public static function unserialize(\$objects, \$serializables)
    {
        \$unserializeCallback = ini_set('unserialize_callback_func', __CLASS__.'::getClassReflector');

        try {
            foreach (\$serializables as \$k => \$v) {
                \$objects[\$k] = unserialize(\$v);
            }
        } finally {
            ini_set('unserialize_callback_func', \$unserializeCallback);
        }

        return \$objects;
    }

    public static function p(\$class)
    {
        self::getClassReflector(\$class, true, true);

        return self::\$prototypes[\$class];
    }

    public static function f(\$class)
    {
        \$reflector = self::\$reflectors[\$class] ?? self::getClassReflector(\$class, true, false);

        return self::\$factories[\$class] = \\Closure::fromCallable([\$reflector, 'newInstanceWithoutConstructor']);
    }

    public static function getClassReflector(\$class, \$instantiableWithoutConstructor = false, \$cloneable = null)
    {
        if (!(\$isClass = class_exists(\$class)) && !interface_exists(\$class, false) && !trait_exists(\$class, false)) {
            throw new ClassNotFoundException(\$class);
        }
        \$reflector = new \\ReflectionClass(\$class);

        if (\$instantiableWithoutConstructor) {
            \$proto = \$reflector->newInstanceWithoutConstructor();
        } elseif (!\$isClass || \$reflector->isAbstract()) {
            throw new NotInstantiableTypeException(\$class);
        } elseif (\$reflector->name !== \$class) {
            \$reflector = self::\$reflectors[\$name = \$reflector->name] ?? self::getClassReflector(\$name, false, \$cloneable);
            self::\$cloneable[\$class] = self::\$cloneable[\$name];
            self::\$instantiableWithoutConstructor[\$class] = self::\$instantiableWithoutConstructor[\$name];
            self::\$prototypes[\$class] = self::\$prototypes[\$name];

            return self::\$reflectors[\$class] = \$reflector;
        } else {
            try {
                \$proto = \$reflector->newInstanceWithoutConstructor();
                \$instantiableWithoutConstructor = true;
            } catch (\\ReflectionException \$e) {
                \$proto = \$reflector->implementsInterface('Serializable') && !method_exists(\$class, '__unserialize') ? 'C:' : 'O:';
                if ('C:' === \$proto && !\$reflector->getMethod('unserialize')->isInternal()) {
                    \$proto = null;
                } elseif (false === \$proto = @unserialize(\$proto.\\strlen(\$class).':\"'.\$class.'\":0:{}')) {
                    throw new NotInstantiableTypeException(\$class);
                }
            }
            if (null !== \$proto && !\$proto instanceof \\Throwable && !\$proto instanceof \\Serializable && !method_exists(\$class, '__sleep') && (\\PHP_VERSION_ID < 70400 || !method_exists(\$class, '__serialize'))) {
                try {
                    serialize(\$proto);
                } catch (\\Exception \$e) {
                    throw new NotInstantiableTypeException(\$class, \$e);
                }
            }
        }

        if (null === \$cloneable) {
            if ((\$proto instanceof \\Reflector || \$proto instanceof \\ReflectionGenerator || \$proto instanceof \\ReflectionType || \$proto instanceof \\IteratorIterator || \$proto instanceof \\RecursiveIteratorIterator) && (!\$proto instanceof \\Serializable && !method_exists(\$proto, '__wakeup') && (\\PHP_VERSION_ID < 70400 || !method_exists(\$class, '__unserialize')))) {
                throw new NotInstantiableTypeException(\$class);
            }

            \$cloneable = \$reflector->isCloneable() && !\$reflector->hasMethod('__clone');
        }

        self::\$cloneable[\$class] = \$cloneable;
        self::\$instantiableWithoutConstructor[\$class] = \$instantiableWithoutConstructor;
        self::\$prototypes[\$class] = \$proto;

        if (\$proto instanceof \\Throwable) {
            static \$setTrace;

            if (null === \$setTrace) {
                \$setTrace = [
                    new \\ReflectionProperty(\\Error::class, 'trace'),
                    new \\ReflectionProperty(\\Exception::class, 'trace'),
                ];
                \$setTrace[0]->setAccessible(true);
                \$setTrace[1]->setAccessible(true);
                \$setTrace[0] = \\Closure::fromCallable([\$setTrace[0], 'setValue']);
                \$setTrace[1] = \\Closure::fromCallable([\$setTrace[1], 'setValue']);
            }

            \$setTrace[\$proto instanceof \\Exception](\$proto, []);
        }

        return self::\$reflectors[\$class] = \$reflector;
    }
}
", "vendor/symfony/var-exporter/Internal/Registry.php", "/var/www/public/DevLaon/templates/vendor/symfony/var-exporter/Internal/Registry.php");
    }
}
