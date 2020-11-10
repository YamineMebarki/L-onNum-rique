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

/* vendor/twig/twig/src/Extension/DebugExtension.php */
class __TwigTemplate_e8f6c5b291634a480bd9cd1099ab4b97b01eb2e9cfab8d9ae590556a35e3dc23 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Extension/DebugExtension.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Extension/DebugExtension.php"));

        // line 1
        echo "<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\\Extension {
use Twig\\TwigFunction;

final class DebugExtension extends AbstractExtension
{
    public function getFunctions()
    {
        // dump is safe if var_dump is overridden by xdebug
        \$isDumpOutputHtmlSafe = \\extension_loaded('xdebug')
            // false means that it was not set (and the default is on) or it explicitly enabled
            && (false === ini_get('xdebug.overload_var_dump') || ini_get('xdebug.overload_var_dump'))
            // false means that it was not set (and the default is on) or it explicitly enabled
            // xdebug.overload_var_dump produces HTML only when html_errors is also enabled
            && (false === ini_get('html_errors') || ini_get('html_errors'))
            || 'cli' === \\PHP_SAPI
        ;

        return [
            new TwigFunction('dump', 'twig_var_dump', ['is_safe' => \$isDumpOutputHtmlSafe ? ['html'] : [], 'needs_context' => true, 'needs_environment' => true, 'is_variadic' => true]),
        ];
    }
}

class_alias('Twig\\Extension\\DebugExtension', 'Twig_Extension_Debug');
}

namespace {
use Twig\\Environment;
use Twig\\Template;
use Twig\\TemplateWrapper;

function twig_var_dump(Environment \$env, \$context, ...\$vars)
{
    if (!\$env->isDebug()) {
        return;
    }

    ob_start();

    if (!\$vars) {
        \$vars = [];
        foreach (\$context as \$key => \$value) {
            if (!\$value instanceof Template && !\$value instanceof TemplateWrapper) {
                \$vars[\$key] = \$value;
            }
        }

        var_dump(\$vars);
    } else {
        var_dump(...\$vars);
    }

    return ob_get_clean();
}
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/src/Extension/DebugExtension.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\\Extension {
use Twig\\TwigFunction;

final class DebugExtension extends AbstractExtension
{
    public function getFunctions()
    {
        // dump is safe if var_dump is overridden by xdebug
        \$isDumpOutputHtmlSafe = \\extension_loaded('xdebug')
            // false means that it was not set (and the default is on) or it explicitly enabled
            && (false === ini_get('xdebug.overload_var_dump') || ini_get('xdebug.overload_var_dump'))
            // false means that it was not set (and the default is on) or it explicitly enabled
            // xdebug.overload_var_dump produces HTML only when html_errors is also enabled
            && (false === ini_get('html_errors') || ini_get('html_errors'))
            || 'cli' === \\PHP_SAPI
        ;

        return [
            new TwigFunction('dump', 'twig_var_dump', ['is_safe' => \$isDumpOutputHtmlSafe ? ['html'] : [], 'needs_context' => true, 'needs_environment' => true, 'is_variadic' => true]),
        ];
    }
}

class_alias('Twig\\Extension\\DebugExtension', 'Twig_Extension_Debug');
}

namespace {
use Twig\\Environment;
use Twig\\Template;
use Twig\\TemplateWrapper;

function twig_var_dump(Environment \$env, \$context, ...\$vars)
{
    if (!\$env->isDebug()) {
        return;
    }

    ob_start();

    if (!\$vars) {
        \$vars = [];
        foreach (\$context as \$key => \$value) {
            if (!\$value instanceof Template && !\$value instanceof TemplateWrapper) {
                \$vars[\$key] = \$value;
            }
        }

        var_dump(\$vars);
    } else {
        var_dump(...\$vars);
    }

    return ob_get_clean();
}
}
", "vendor/twig/twig/src/Extension/DebugExtension.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/src/Extension/DebugExtension.php");
    }
}
