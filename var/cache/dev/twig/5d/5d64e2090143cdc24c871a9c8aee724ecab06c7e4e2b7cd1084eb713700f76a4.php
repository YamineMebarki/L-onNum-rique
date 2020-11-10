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

/* vendor/symfony/var-exporter/Internal/Hydrator.php */
class __TwigTemplate_df69bbd19f7b42b288d9f5e3bffe56f9f4a5fac3fb58e97b6477ebfba71ba206 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-exporter/Internal/Hydrator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-exporter/Internal/Hydrator.php"));

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

/**
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
class Hydrator
{
    public static \$hydrators = [];

    public \$registry;
    public \$values;
    public \$properties;
    public \$value;
    public \$wakeups;

    public function __construct(?Registry \$registry, ?Values \$values, array \$properties, \$value, array \$wakeups)
    {
        \$this->registry = \$registry;
        \$this->values = \$values;
        \$this->properties = \$properties;
        \$this->value = \$value;
        \$this->wakeups = \$wakeups;
    }

    public static function hydrate(\$objects, \$values, \$properties, \$value, \$wakeups)
    {
        foreach (\$properties as \$class => \$vars) {
            (self::\$hydrators[\$class] ?? self::getHydrator(\$class))(\$vars, \$objects);
        }
        foreach (\$wakeups as \$k => \$v) {
            if (\\is_array(\$v)) {
                \$objects[-\$k]->__unserialize(\$v);
            } else {
                \$objects[\$v]->__wakeup();
            }
        }

        return \$value;
    }

    public static function getHydrator(\$class)
    {
        if ('stdClass' === \$class) {
            return self::\$hydrators[\$class] = static function (\$properties, \$objects) {
                foreach (\$properties as \$name => \$values) {
                    foreach (\$values as \$i => \$v) {
                        \$objects[\$i]->\$name = \$v;
                    }
                }
            };
        }

        if (!class_exists(\$class) && !interface_exists(\$class, false) && !trait_exists(\$class, false)) {
            throw new ClassNotFoundException(\$class);
        }
        \$classReflector = new \\ReflectionClass(\$class);

        if (!\$classReflector->isInternal()) {
            return self::\$hydrators[\$class] = (self::\$hydrators['stdClass'] ?? self::getHydrator('stdClass'))->bindTo(null, \$class);
        }

        if (\$classReflector->name !== \$class) {
            return self::\$hydrators[\$classReflector->name] ?? self::getHydrator(\$classReflector->name);
        }

        switch (\$class) {
            case 'ArrayIterator':
            case 'ArrayObject':
                \$constructor = \\Closure::fromCallable([\$classReflector->getConstructor(), 'invokeArgs']);

                return self::\$hydrators[\$class] = static function (\$properties, \$objects) use (\$constructor) {
                    foreach (\$properties as \$name => \$values) {
                        if (\"\\0\" !== \$name) {
                            foreach (\$values as \$i => \$v) {
                                \$objects[\$i]->\$name = \$v;
                            }
                        }
                    }
                    foreach (\$properties[\"\\0\"] ?? [] as \$i => \$v) {
                        \$constructor(\$objects[\$i], \$v);
                    }
                };

            case 'ErrorException':
                return self::\$hydrators[\$class] = (self::\$hydrators['stdClass'] ?? self::getHydrator('stdClass'))->bindTo(null, new class() extends \\ErrorException {
                });

            case 'TypeError':
                return self::\$hydrators[\$class] = (self::\$hydrators['stdClass'] ?? self::getHydrator('stdClass'))->bindTo(null, new class() extends \\Error {
                });

            case 'SplObjectStorage':
                return self::\$hydrators[\$class] = static function (\$properties, \$objects) {
                    foreach (\$properties as \$name => \$values) {
                        if (\"\\0\" === \$name) {
                            foreach (\$values as \$i => \$v) {
                                for (\$j = 0; \$j < \\count(\$v); ++\$j) {
                                    \$objects[\$i]->attach(\$v[\$j], \$v[++\$j]);
                                }
                            }
                            continue;
                        }
                        foreach (\$values as \$i => \$v) {
                            \$objects[\$i]->\$name = \$v;
                        }
                    }
                };
        }

        \$propertySetters = [];
        foreach (\$classReflector->getProperties() as \$propertyReflector) {
            if (!\$propertyReflector->isStatic()) {
                \$propertyReflector->setAccessible(true);
                \$propertySetters[\$propertyReflector->name] = \\Closure::fromCallable([\$propertyReflector, 'setValue']);
            }
        }

        if (!\$propertySetters) {
            return self::\$hydrators[\$class] = self::\$hydrators['stdClass'] ?? self::getHydrator('stdClass');
        }

        return self::\$hydrators[\$class] = static function (\$properties, \$objects) use (\$propertySetters) {
            foreach (\$properties as \$name => \$values) {
                if (\$setValue = \$propertySetters[\$name] ?? null) {
                    foreach (\$values as \$i => \$v) {
                        \$setValue(\$objects[\$i], \$v);
                    }
                    continue;
                }
                foreach (\$values as \$i => \$v) {
                    \$objects[\$i]->\$name = \$v;
                }
            }
        };
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/var-exporter/Internal/Hydrator.php";
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

/**
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
class Hydrator
{
    public static \$hydrators = [];

    public \$registry;
    public \$values;
    public \$properties;
    public \$value;
    public \$wakeups;

    public function __construct(?Registry \$registry, ?Values \$values, array \$properties, \$value, array \$wakeups)
    {
        \$this->registry = \$registry;
        \$this->values = \$values;
        \$this->properties = \$properties;
        \$this->value = \$value;
        \$this->wakeups = \$wakeups;
    }

    public static function hydrate(\$objects, \$values, \$properties, \$value, \$wakeups)
    {
        foreach (\$properties as \$class => \$vars) {
            (self::\$hydrators[\$class] ?? self::getHydrator(\$class))(\$vars, \$objects);
        }
        foreach (\$wakeups as \$k => \$v) {
            if (\\is_array(\$v)) {
                \$objects[-\$k]->__unserialize(\$v);
            } else {
                \$objects[\$v]->__wakeup();
            }
        }

        return \$value;
    }

    public static function getHydrator(\$class)
    {
        if ('stdClass' === \$class) {
            return self::\$hydrators[\$class] = static function (\$properties, \$objects) {
                foreach (\$properties as \$name => \$values) {
                    foreach (\$values as \$i => \$v) {
                        \$objects[\$i]->\$name = \$v;
                    }
                }
            };
        }

        if (!class_exists(\$class) && !interface_exists(\$class, false) && !trait_exists(\$class, false)) {
            throw new ClassNotFoundException(\$class);
        }
        \$classReflector = new \\ReflectionClass(\$class);

        if (!\$classReflector->isInternal()) {
            return self::\$hydrators[\$class] = (self::\$hydrators['stdClass'] ?? self::getHydrator('stdClass'))->bindTo(null, \$class);
        }

        if (\$classReflector->name !== \$class) {
            return self::\$hydrators[\$classReflector->name] ?? self::getHydrator(\$classReflector->name);
        }

        switch (\$class) {
            case 'ArrayIterator':
            case 'ArrayObject':
                \$constructor = \\Closure::fromCallable([\$classReflector->getConstructor(), 'invokeArgs']);

                return self::\$hydrators[\$class] = static function (\$properties, \$objects) use (\$constructor) {
                    foreach (\$properties as \$name => \$values) {
                        if (\"\\0\" !== \$name) {
                            foreach (\$values as \$i => \$v) {
                                \$objects[\$i]->\$name = \$v;
                            }
                        }
                    }
                    foreach (\$properties[\"\\0\"] ?? [] as \$i => \$v) {
                        \$constructor(\$objects[\$i], \$v);
                    }
                };

            case 'ErrorException':
                return self::\$hydrators[\$class] = (self::\$hydrators['stdClass'] ?? self::getHydrator('stdClass'))->bindTo(null, new class() extends \\ErrorException {
                });

            case 'TypeError':
                return self::\$hydrators[\$class] = (self::\$hydrators['stdClass'] ?? self::getHydrator('stdClass'))->bindTo(null, new class() extends \\Error {
                });

            case 'SplObjectStorage':
                return self::\$hydrators[\$class] = static function (\$properties, \$objects) {
                    foreach (\$properties as \$name => \$values) {
                        if (\"\\0\" === \$name) {
                            foreach (\$values as \$i => \$v) {
                                for (\$j = 0; \$j < \\count(\$v); ++\$j) {
                                    \$objects[\$i]->attach(\$v[\$j], \$v[++\$j]);
                                }
                            }
                            continue;
                        }
                        foreach (\$values as \$i => \$v) {
                            \$objects[\$i]->\$name = \$v;
                        }
                    }
                };
        }

        \$propertySetters = [];
        foreach (\$classReflector->getProperties() as \$propertyReflector) {
            if (!\$propertyReflector->isStatic()) {
                \$propertyReflector->setAccessible(true);
                \$propertySetters[\$propertyReflector->name] = \\Closure::fromCallable([\$propertyReflector, 'setValue']);
            }
        }

        if (!\$propertySetters) {
            return self::\$hydrators[\$class] = self::\$hydrators['stdClass'] ?? self::getHydrator('stdClass');
        }

        return self::\$hydrators[\$class] = static function (\$properties, \$objects) use (\$propertySetters) {
            foreach (\$properties as \$name => \$values) {
                if (\$setValue = \$propertySetters[\$name] ?? null) {
                    foreach (\$values as \$i => \$v) {
                        \$setValue(\$objects[\$i], \$v);
                    }
                    continue;
                }
                foreach (\$values as \$i => \$v) {
                    \$objects[\$i]->\$name = \$v;
                }
            }
        };
    }
}
", "vendor/symfony/var-exporter/Internal/Hydrator.php", "/var/www/public/DevLaon/templates/vendor/symfony/var-exporter/Internal/Hydrator.php");
    }
}
