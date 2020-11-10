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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Tools/Dumper.php */
class __TwigTemplate_27f14ca5abef2d613e43bef169a51831693cec90dd297f377d6f929d4695ad1e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Tools/Dumper.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Tools/Dumper.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Tools;

use ArrayIterator;
use ArrayObject;
use DateTimeInterface;
use Doctrine\\Common\\Collections\\Collection;
use Doctrine\\Common\\Persistence\\Proxy;
use stdClass;
use function array_keys;
use function class_exists;
use function count;
use function end;
use function explode;
use function extension_loaded;
use function get_class;
use function html_entity_decode;
use function ini_get;
use function ini_set;
use function is_array;
use function is_object;
use function ob_get_clean;
use function ob_start;
use function strip_tags;
use function strrpos;
use function substr;
use function var_dump;

/**
 * Static class used to dump the variable to be used on output.
 * Simplified port of Util\\Debug from doctrine/common.
 *
 * @internal
 */
final class Dumper
{
    /**
     * Private constructor (prevents instantiation).
     */
    private function __construct()
    {
    }

    /**
     * Returns a dump of the public, protected and private properties of \$var.
     *
     * @link https://xdebug.org/
     *
     * @param mixed \$var      The variable to dump.
     * @param int   \$maxDepth The maximum nesting level for object properties.
     */
    public static function dump(\$var, int \$maxDepth = 2) : string
    {
        \$html = ini_get('html_errors');

        if (\$html !== true) {
            ini_set('html_errors', true);
        }

        if (extension_loaded('xdebug')) {
            ini_set('xdebug.var_display_max_depth', \$maxDepth);
        }

        \$var = self::export(\$var, \$maxDepth);

        ob_start();
        var_dump(\$var);

        try {
            return strip_tags(html_entity_decode(ob_get_clean()));
        } finally {
            ini_set('html_errors', \$html);
        }
    }

    /**
     * @param mixed \$var
     *
     * @return mixed
     */
    public static function export(\$var, int \$maxDepth)
    {
        \$return = null;
        \$isObj  = is_object(\$var);

        if (\$var instanceof Collection) {
            \$var = \$var->toArray();
        }

        if (\$maxDepth === 0) {
            return is_object(\$var) ? get_class(\$var)
                : (is_array(\$var) ? 'Array(' . count(\$var) . ')' : \$var);
        }

        if (is_array(\$var)) {
            \$return = [];

            foreach (\$var as \$k => \$v) {
                \$return[\$k] = self::export(\$v, \$maxDepth - 1);
            }

            return \$return;
        }

        if (! \$isObj) {
            return \$var;
        }

        \$return = new stdClass();
        if (\$var instanceof DateTimeInterface) {
            \$return->__CLASS__ = get_class(\$var);
            \$return->date      = \$var->format('c');
            \$return->timezone  = \$var->getTimezone()->getName();

            return \$return;
        }

        \$return->__CLASS__ = self::getClass(\$var);

        if (\$var instanceof Proxy) {
            \$return->__IS_PROXY__          = true;
            \$return->__PROXY_INITIALIZED__ = \$var->__isInitialized();
        }

        if (\$var instanceof ArrayObject || \$var instanceof ArrayIterator) {
            \$return->__STORAGE__ = self::export(\$var->getArrayCopy(), \$maxDepth - 1);
        }

        return self::fillReturnWithClassAttributes(\$var, \$return, \$maxDepth);
    }

    /**
     * Fill the \$return variable with class attributes
     * Based on obj2array function from {@see https://secure.php.net/manual/en/function.get-object-vars.php#47075}
     *
     * @param object \$var
     *
     * @return mixed
     */
    private static function fillReturnWithClassAttributes(\$var, stdClass \$return, int \$maxDepth)
    {
        \$clone = (array) \$var;

        foreach (array_keys(\$clone) as \$key) {
            \$aux  = explode(\"\\0\", \$key);
            \$name = end(\$aux);
            if (\$aux[0] === '') {
                \$name .= ':' . (\$aux[1] === '*' ? 'protected' : \$aux[1] . ':private');
            }
            \$return->\$name = self::export(\$clone[\$key], \$maxDepth - 1);
        }

        return \$return;
    }

    /**
     * @param object \$object
     */
    private static function getClass(\$object) : string
    {
        \$class = get_class(\$object);

        if (! class_exists(Proxy::class)) {
            return \$class;
        }

        \$pos = strrpos(\$class, '\\\\' . Proxy::MARKER . '\\\\');

        if (\$pos === false) {
            return \$class;
        }

        return substr(\$class, \$pos + Proxy::MARKER_LENGTH + 2);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Tools/Dumper.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Tools;

use ArrayIterator;
use ArrayObject;
use DateTimeInterface;
use Doctrine\\Common\\Collections\\Collection;
use Doctrine\\Common\\Persistence\\Proxy;
use stdClass;
use function array_keys;
use function class_exists;
use function count;
use function end;
use function explode;
use function extension_loaded;
use function get_class;
use function html_entity_decode;
use function ini_get;
use function ini_set;
use function is_array;
use function is_object;
use function ob_get_clean;
use function ob_start;
use function strip_tags;
use function strrpos;
use function substr;
use function var_dump;

/**
 * Static class used to dump the variable to be used on output.
 * Simplified port of Util\\Debug from doctrine/common.
 *
 * @internal
 */
final class Dumper
{
    /**
     * Private constructor (prevents instantiation).
     */
    private function __construct()
    {
    }

    /**
     * Returns a dump of the public, protected and private properties of \$var.
     *
     * @link https://xdebug.org/
     *
     * @param mixed \$var      The variable to dump.
     * @param int   \$maxDepth The maximum nesting level for object properties.
     */
    public static function dump(\$var, int \$maxDepth = 2) : string
    {
        \$html = ini_get('html_errors');

        if (\$html !== true) {
            ini_set('html_errors', true);
        }

        if (extension_loaded('xdebug')) {
            ini_set('xdebug.var_display_max_depth', \$maxDepth);
        }

        \$var = self::export(\$var, \$maxDepth);

        ob_start();
        var_dump(\$var);

        try {
            return strip_tags(html_entity_decode(ob_get_clean()));
        } finally {
            ini_set('html_errors', \$html);
        }
    }

    /**
     * @param mixed \$var
     *
     * @return mixed
     */
    public static function export(\$var, int \$maxDepth)
    {
        \$return = null;
        \$isObj  = is_object(\$var);

        if (\$var instanceof Collection) {
            \$var = \$var->toArray();
        }

        if (\$maxDepth === 0) {
            return is_object(\$var) ? get_class(\$var)
                : (is_array(\$var) ? 'Array(' . count(\$var) . ')' : \$var);
        }

        if (is_array(\$var)) {
            \$return = [];

            foreach (\$var as \$k => \$v) {
                \$return[\$k] = self::export(\$v, \$maxDepth - 1);
            }

            return \$return;
        }

        if (! \$isObj) {
            return \$var;
        }

        \$return = new stdClass();
        if (\$var instanceof DateTimeInterface) {
            \$return->__CLASS__ = get_class(\$var);
            \$return->date      = \$var->format('c');
            \$return->timezone  = \$var->getTimezone()->getName();

            return \$return;
        }

        \$return->__CLASS__ = self::getClass(\$var);

        if (\$var instanceof Proxy) {
            \$return->__IS_PROXY__          = true;
            \$return->__PROXY_INITIALIZED__ = \$var->__isInitialized();
        }

        if (\$var instanceof ArrayObject || \$var instanceof ArrayIterator) {
            \$return->__STORAGE__ = self::export(\$var->getArrayCopy(), \$maxDepth - 1);
        }

        return self::fillReturnWithClassAttributes(\$var, \$return, \$maxDepth);
    }

    /**
     * Fill the \$return variable with class attributes
     * Based on obj2array function from {@see https://secure.php.net/manual/en/function.get-object-vars.php#47075}
     *
     * @param object \$var
     *
     * @return mixed
     */
    private static function fillReturnWithClassAttributes(\$var, stdClass \$return, int \$maxDepth)
    {
        \$clone = (array) \$var;

        foreach (array_keys(\$clone) as \$key) {
            \$aux  = explode(\"\\0\", \$key);
            \$name = end(\$aux);
            if (\$aux[0] === '') {
                \$name .= ':' . (\$aux[1] === '*' ? 'protected' : \$aux[1] . ':private');
            }
            \$return->\$name = self::export(\$clone[\$key], \$maxDepth - 1);
        }

        return \$return;
    }

    /**
     * @param object \$object
     */
    private static function getClass(\$object) : string
    {
        \$class = get_class(\$object);

        if (! class_exists(Proxy::class)) {
            return \$class;
        }

        \$pos = strrpos(\$class, '\\\\' . Proxy::MARKER . '\\\\');

        if (\$pos === false) {
            return \$class;
        }

        return substr(\$class, \$pos + Proxy::MARKER_LENGTH + 2);
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Tools/Dumper.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Tools/Dumper.php");
    }
}
