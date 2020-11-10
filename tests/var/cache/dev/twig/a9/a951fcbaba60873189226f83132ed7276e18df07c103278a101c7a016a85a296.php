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

/* vendor/symfony/polyfill-php73/bootstrap.php */
class __TwigTemplate_d953253b0f1fdea98340fdcf8fc580e5a99ef900df18b8923fe5f6b32bab3600 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/polyfill-php73/bootstrap.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/polyfill-php73/bootstrap.php"));

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

use Symfony\\Polyfill\\Php73 as p;

if (PHP_VERSION_ID < 70300) {
    if (!function_exists('is_countable')) {
        function is_countable(\$var) { return is_array(\$var) || \$var instanceof Countable || \$var instanceof ResourceBundle || \$var instanceof SimpleXmlElement; }
    }

    if (!function_exists('hrtime')) {
        require_once __DIR__.'/Php73.php';
        p\\Php73::\$startAt = (int) microtime(true);
        function hrtime(\$asNum = false) { return p\\Php73::hrtime(\$asNum); }
    }

    if (!function_exists('array_key_first')) {
        function array_key_first(array \$array) { foreach (\$array as \$key => \$value) { return \$key; } }
    }

    if (!function_exists('array_key_last')) {
        function array_key_last(array \$array) { end(\$array); return key(\$array); }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/polyfill-php73/bootstrap.php";
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

use Symfony\\Polyfill\\Php73 as p;

if (PHP_VERSION_ID < 70300) {
    if (!function_exists('is_countable')) {
        function is_countable(\$var) { return is_array(\$var) || \$var instanceof Countable || \$var instanceof ResourceBundle || \$var instanceof SimpleXmlElement; }
    }

    if (!function_exists('hrtime')) {
        require_once __DIR__.'/Php73.php';
        p\\Php73::\$startAt = (int) microtime(true);
        function hrtime(\$asNum = false) { return p\\Php73::hrtime(\$asNum); }
    }

    if (!function_exists('array_key_first')) {
        function array_key_first(array \$array) { foreach (\$array as \$key => \$value) { return \$key; } }
    }

    if (!function_exists('array_key_last')) {
        function array_key_last(array \$array) { end(\$array); return key(\$array); }
    }
}
", "vendor/symfony/polyfill-php73/bootstrap.php", "/var/www/public/DevLaon/templates/vendor/symfony/polyfill-php73/bootstrap.php");
    }
}
