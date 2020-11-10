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

/* vendor/symfony/var-dumper/Caster/ClassStub.php */
class __TwigTemplate_ce0d6225d0ce7022909b89c49725c14901126c969761bd5c0643d772774bc669 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Caster/ClassStub.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Caster/ClassStub.php"));

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

namespace Symfony\\Component\\VarDumper\\Caster;

use Symfony\\Component\\VarDumper\\Cloner\\Stub;

/**
 * Represents a PHP class identifier.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class ClassStub extends ConstStub
{
    /**
     * @param string   \$identifier A PHP identifier, e.g. a class, method, interface, etc. name
     * @param callable \$callable   The callable targeted by the identifier when it is ambiguous or not a real PHP identifier
     */
    public function __construct(string \$identifier, \$callable = null)
    {
        \$this->value = \$identifier;

        try {
            if (null !== \$callable) {
                if (\$callable instanceof \\Closure) {
                    \$r = new \\ReflectionFunction(\$callable);
                } elseif (\\is_object(\$callable)) {
                    \$r = [\$callable, '__invoke'];
                } elseif (\\is_array(\$callable)) {
                    \$r = \$callable;
                } elseif (false !== \$i = strpos(\$callable, '::')) {
                    \$r = [substr(\$callable, 0, \$i), substr(\$callable, 2 + \$i)];
                } else {
                    \$r = new \\ReflectionFunction(\$callable);
                }
            } elseif (0 < \$i = strpos(\$identifier, '::') ?: strpos(\$identifier, '->')) {
                \$r = [substr(\$identifier, 0, \$i), substr(\$identifier, 2 + \$i)];
            } else {
                \$r = new \\ReflectionClass(\$identifier);
            }

            if (\\is_array(\$r)) {
                try {
                    \$r = new \\ReflectionMethod(\$r[0], \$r[1]);
                } catch (\\ReflectionException \$e) {
                    \$r = new \\ReflectionClass(\$r[0]);
                }
            }

            if (false !== strpos(\$identifier, \"class@anonymous\\0\")) {
                \$this->value = \$identifier = preg_replace_callback('/class@anonymous\\x00.*?\\.php0x?[0-9a-fA-F]++/', function (\$m) {
                    return class_exists(\$m[0], false) ? get_parent_class(\$m[0]).'@anonymous' : \$m[0];
                }, \$identifier);
            }

            if (null !== \$callable && \$r instanceof \\ReflectionFunctionAbstract) {
                \$s = ReflectionCaster::castFunctionAbstract(\$r, [], new Stub(), true);
                \$s = ReflectionCaster::getSignature(\$s);

                if ('()' === substr(\$identifier, -2)) {
                    \$this->value = substr_replace(\$identifier, \$s, -2);
                } else {
                    \$this->value .= \$s;
                }
            }
        } catch (\\ReflectionException \$e) {
            return;
        } finally {
            if (0 < \$i = strrpos(\$this->value, '\\\\')) {
                \$this->attr['ellipsis'] = \\strlen(\$this->value) - \$i;
                \$this->attr['ellipsis-type'] = 'class';
                \$this->attr['ellipsis-tail'] = 1;
            }
        }

        if (\$f = \$r->getFileName()) {
            \$this->attr['file'] = \$f;
            \$this->attr['line'] = \$r->getStartLine();
        }
    }

    public static function wrapCallable(\$callable)
    {
        if (\\is_object(\$callable) || !\\is_callable(\$callable)) {
            return \$callable;
        }

        if (!\\is_array(\$callable)) {
            \$callable = new static(\$callable, \$callable);
        } elseif (\\is_string(\$callable[0])) {
            \$callable[0] = new static(\$callable[0], \$callable);
        } else {
            \$callable[1] = new static(\$callable[1], \$callable);
        }

        return \$callable;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/var-dumper/Caster/ClassStub.php";
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

namespace Symfony\\Component\\VarDumper\\Caster;

use Symfony\\Component\\VarDumper\\Cloner\\Stub;

/**
 * Represents a PHP class identifier.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class ClassStub extends ConstStub
{
    /**
     * @param string   \$identifier A PHP identifier, e.g. a class, method, interface, etc. name
     * @param callable \$callable   The callable targeted by the identifier when it is ambiguous or not a real PHP identifier
     */
    public function __construct(string \$identifier, \$callable = null)
    {
        \$this->value = \$identifier;

        try {
            if (null !== \$callable) {
                if (\$callable instanceof \\Closure) {
                    \$r = new \\ReflectionFunction(\$callable);
                } elseif (\\is_object(\$callable)) {
                    \$r = [\$callable, '__invoke'];
                } elseif (\\is_array(\$callable)) {
                    \$r = \$callable;
                } elseif (false !== \$i = strpos(\$callable, '::')) {
                    \$r = [substr(\$callable, 0, \$i), substr(\$callable, 2 + \$i)];
                } else {
                    \$r = new \\ReflectionFunction(\$callable);
                }
            } elseif (0 < \$i = strpos(\$identifier, '::') ?: strpos(\$identifier, '->')) {
                \$r = [substr(\$identifier, 0, \$i), substr(\$identifier, 2 + \$i)];
            } else {
                \$r = new \\ReflectionClass(\$identifier);
            }

            if (\\is_array(\$r)) {
                try {
                    \$r = new \\ReflectionMethod(\$r[0], \$r[1]);
                } catch (\\ReflectionException \$e) {
                    \$r = new \\ReflectionClass(\$r[0]);
                }
            }

            if (false !== strpos(\$identifier, \"class@anonymous\\0\")) {
                \$this->value = \$identifier = preg_replace_callback('/class@anonymous\\x00.*?\\.php0x?[0-9a-fA-F]++/', function (\$m) {
                    return class_exists(\$m[0], false) ? get_parent_class(\$m[0]).'@anonymous' : \$m[0];
                }, \$identifier);
            }

            if (null !== \$callable && \$r instanceof \\ReflectionFunctionAbstract) {
                \$s = ReflectionCaster::castFunctionAbstract(\$r, [], new Stub(), true);
                \$s = ReflectionCaster::getSignature(\$s);

                if ('()' === substr(\$identifier, -2)) {
                    \$this->value = substr_replace(\$identifier, \$s, -2);
                } else {
                    \$this->value .= \$s;
                }
            }
        } catch (\\ReflectionException \$e) {
            return;
        } finally {
            if (0 < \$i = strrpos(\$this->value, '\\\\')) {
                \$this->attr['ellipsis'] = \\strlen(\$this->value) - \$i;
                \$this->attr['ellipsis-type'] = 'class';
                \$this->attr['ellipsis-tail'] = 1;
            }
        }

        if (\$f = \$r->getFileName()) {
            \$this->attr['file'] = \$f;
            \$this->attr['line'] = \$r->getStartLine();
        }
    }

    public static function wrapCallable(\$callable)
    {
        if (\\is_object(\$callable) || !\\is_callable(\$callable)) {
            return \$callable;
        }

        if (!\\is_array(\$callable)) {
            \$callable = new static(\$callable, \$callable);
        } elseif (\\is_string(\$callable[0])) {
            \$callable[0] = new static(\$callable[0], \$callable);
        } else {
            \$callable[1] = new static(\$callable[1], \$callable);
        }

        return \$callable;
    }
}
", "vendor/symfony/var-dumper/Caster/ClassStub.php", "/var/www/public/DevLaon/templates/vendor/symfony/var-dumper/Caster/ClassStub.php");
    }
}
