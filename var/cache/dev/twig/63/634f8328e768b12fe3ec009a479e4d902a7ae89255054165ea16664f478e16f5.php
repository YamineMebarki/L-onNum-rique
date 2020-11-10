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

/* vendor/zendframework/zend-code/src/Scanner/Util.php */
class __TwigTemplate_4076a2b5d438bb2c44bb6a1290177af1b32d11142f76dc08518c07e1b3122374 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-code/src/Scanner/Util.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-code/src/Scanner/Util.php"));

        // line 1
        echo "<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\\Code\\Scanner;

use stdClass;
use Zend\\Code\\Exception;

use function array_key_exists;
use function is_object;
use function ltrim;
use function property_exists;
use function sprintf;
use function strlen;
use function strpos;
use function substr;
use function substr_replace;

/**
 * Shared utility methods used by scanners
 */
class Util
{
    /**
     * Resolve imports
     *
     * @param  string \$value
     * @param  null|string \$key
     * @param  \\stdClass \$data
     * @return void
     * @throws Exception\\InvalidArgumentException
     */
    public static function resolveImports(&\$value, \$key = null, stdClass \$data = null)
    {
        if (! is_object(\$data)
            || ! property_exists(\$data, 'uses')
            || ! property_exists(\$data, 'namespace')
        ) {
            throw new Exception\\InvalidArgumentException(sprintf(
                '%s expects a data object containing \"uses\" and \"namespace\" properties; on or both missing',
                __METHOD__
            ));
        }

        if (\$data->namespace && ! \$data->uses && strlen(\$value) > 0 && \$value[0] != '\\\\') {
            \$value = \$data->namespace . '\\\\' . \$value;

            return;
        }

        if (! \$data->uses || strlen(\$value) <= 0 || \$value[0] == '\\\\') {
            \$value = ltrim(\$value, '\\\\');

            return;
        }

        if (\$data->namespace || \$data->uses) {
            \$firstPart = \$value;
            if ((\$firstPartEnd = strpos(\$firstPart, '\\\\')) !== false) {
                \$firstPart = substr(\$firstPart, 0, \$firstPartEnd);
            } else {
                \$firstPartEnd = strlen(\$firstPart);
            }

            if (array_key_exists(\$firstPart, \$data->uses)) {
                \$value = substr_replace(\$value, \$data->uses[\$firstPart], 0, \$firstPartEnd);

                return;
            }

            if (\$data->namespace) {
                \$value = \$data->namespace . '\\\\' . \$value;

                return;
            }
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/zendframework/zend-code/src/Scanner/Util.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\\Code\\Scanner;

use stdClass;
use Zend\\Code\\Exception;

use function array_key_exists;
use function is_object;
use function ltrim;
use function property_exists;
use function sprintf;
use function strlen;
use function strpos;
use function substr;
use function substr_replace;

/**
 * Shared utility methods used by scanners
 */
class Util
{
    /**
     * Resolve imports
     *
     * @param  string \$value
     * @param  null|string \$key
     * @param  \\stdClass \$data
     * @return void
     * @throws Exception\\InvalidArgumentException
     */
    public static function resolveImports(&\$value, \$key = null, stdClass \$data = null)
    {
        if (! is_object(\$data)
            || ! property_exists(\$data, 'uses')
            || ! property_exists(\$data, 'namespace')
        ) {
            throw new Exception\\InvalidArgumentException(sprintf(
                '%s expects a data object containing \"uses\" and \"namespace\" properties; on or both missing',
                __METHOD__
            ));
        }

        if (\$data->namespace && ! \$data->uses && strlen(\$value) > 0 && \$value[0] != '\\\\') {
            \$value = \$data->namespace . '\\\\' . \$value;

            return;
        }

        if (! \$data->uses || strlen(\$value) <= 0 || \$value[0] == '\\\\') {
            \$value = ltrim(\$value, '\\\\');

            return;
        }

        if (\$data->namespace || \$data->uses) {
            \$firstPart = \$value;
            if ((\$firstPartEnd = strpos(\$firstPart, '\\\\')) !== false) {
                \$firstPart = substr(\$firstPart, 0, \$firstPartEnd);
            } else {
                \$firstPartEnd = strlen(\$firstPart);
            }

            if (array_key_exists(\$firstPart, \$data->uses)) {
                \$value = substr_replace(\$value, \$data->uses[\$firstPart], 0, \$firstPartEnd);

                return;
            }

            if (\$data->namespace) {
                \$value = \$data->namespace . '\\\\' . \$value;

                return;
            }
        }
    }
}
", "vendor/zendframework/zend-code/src/Scanner/Util.php", "/var/www/public/DevLaon/templates/vendor/zendframework/zend-code/src/Scanner/Util.php");
    }
}
