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

/* vendor/symfony/var-dumper/Caster/ArgsStub.php */
class __TwigTemplate_76108a565c1af10d0ce1d8f3e45d7faba2424745545d65f3dc37b99eb22a8ce6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Caster/ArgsStub.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Caster/ArgsStub.php"));

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
 * Represents a list of function arguments.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class ArgsStub extends EnumStub
{
    private static \$parameters = [];

    public function __construct(array \$args, string \$function, ?string \$class)
    {
        list(\$variadic, \$params) = self::getParameters(\$function, \$class);

        \$values = [];
        foreach (\$args as \$k => \$v) {
            \$values[\$k] = !is_scalar(\$v) && !\$v instanceof Stub ? new CutStub(\$v) : \$v;
        }
        if (null === \$params) {
            parent::__construct(\$values, false);

            return;
        }
        if (\\count(\$values) < \\count(\$params)) {
            \$params = \\array_slice(\$params, 0, \\count(\$values));
        } elseif (\\count(\$values) > \\count(\$params)) {
            \$values[] = new EnumStub(array_splice(\$values, \\count(\$params)), false);
            \$params[] = \$variadic;
        }
        if (['...'] === \$params) {
            \$this->dumpKeys = false;
            \$this->value = \$values[0]->value;
        } else {
            \$this->value = array_combine(\$params, \$values);
        }
    }

    private static function getParameters(\$function, \$class)
    {
        if (isset(self::\$parameters[\$k = \$class.'::'.\$function])) {
            return self::\$parameters[\$k];
        }

        try {
            \$r = null !== \$class ? new \\ReflectionMethod(\$class, \$function) : new \\ReflectionFunction(\$function);
        } catch (\\ReflectionException \$e) {
            return [null, null];
        }

        \$variadic = '...';
        \$params = [];
        foreach (\$r->getParameters() as \$v) {
            \$k = '\$'.\$v->name;
            if (\$v->isPassedByReference()) {
                \$k = '&'.\$k;
            }
            if (\$v->isVariadic()) {
                \$variadic .= \$k;
            } else {
                \$params[] = \$k;
            }
        }

        return self::\$parameters[\$k] = [\$variadic, \$params];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/var-dumper/Caster/ArgsStub.php";
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
 * Represents a list of function arguments.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class ArgsStub extends EnumStub
{
    private static \$parameters = [];

    public function __construct(array \$args, string \$function, ?string \$class)
    {
        list(\$variadic, \$params) = self::getParameters(\$function, \$class);

        \$values = [];
        foreach (\$args as \$k => \$v) {
            \$values[\$k] = !is_scalar(\$v) && !\$v instanceof Stub ? new CutStub(\$v) : \$v;
        }
        if (null === \$params) {
            parent::__construct(\$values, false);

            return;
        }
        if (\\count(\$values) < \\count(\$params)) {
            \$params = \\array_slice(\$params, 0, \\count(\$values));
        } elseif (\\count(\$values) > \\count(\$params)) {
            \$values[] = new EnumStub(array_splice(\$values, \\count(\$params)), false);
            \$params[] = \$variadic;
        }
        if (['...'] === \$params) {
            \$this->dumpKeys = false;
            \$this->value = \$values[0]->value;
        } else {
            \$this->value = array_combine(\$params, \$values);
        }
    }

    private static function getParameters(\$function, \$class)
    {
        if (isset(self::\$parameters[\$k = \$class.'::'.\$function])) {
            return self::\$parameters[\$k];
        }

        try {
            \$r = null !== \$class ? new \\ReflectionMethod(\$class, \$function) : new \\ReflectionFunction(\$function);
        } catch (\\ReflectionException \$e) {
            return [null, null];
        }

        \$variadic = '...';
        \$params = [];
        foreach (\$r->getParameters() as \$v) {
            \$k = '\$'.\$v->name;
            if (\$v->isPassedByReference()) {
                \$k = '&'.\$k;
            }
            if (\$v->isVariadic()) {
                \$variadic .= \$k;
            } else {
                \$params[] = \$k;
            }
        }

        return self::\$parameters[\$k] = [\$variadic, \$params];
    }
}
", "vendor/symfony/var-dumper/Caster/ArgsStub.php", "/var/www/public/DevLaon/templates/vendor/symfony/var-dumper/Caster/ArgsStub.php");
    }
}
