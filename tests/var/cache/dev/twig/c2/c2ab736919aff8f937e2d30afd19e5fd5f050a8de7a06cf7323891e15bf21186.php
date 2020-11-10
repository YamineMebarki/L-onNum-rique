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

/* vendor/symfony/polyfill-php72/bootstrap.php */
class __TwigTemplate_f52d389659a5dfb86c748ad283591e6596d56fe70b24c066f21f6155ffd9e346 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/polyfill-php72/bootstrap.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/polyfill-php72/bootstrap.php"));

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

use Symfony\\Polyfill\\Php72 as p;

if (PHP_VERSION_ID < 70200) {
    if ('\\\\' === DIRECTORY_SEPARATOR && !function_exists('sapi_windows_vt100_support')) {
        function sapi_windows_vt100_support(\$stream, \$enable = null) { return p\\Php72::sapi_windows_vt100_support(\$stream, \$enable); }
    }
    if (!function_exists('stream_isatty')) {
        function stream_isatty(\$stream) { return p\\Php72::stream_isatty(\$stream); }
    }
    if (!function_exists('utf8_encode')) {
        function utf8_encode(\$s) { return p\\Php72::utf8_encode(\$s); }
        function utf8_decode(\$s) { return p\\Php72::utf8_decode(\$s); }
    }
    if (!function_exists('spl_object_id')) {
        function spl_object_id(\$s) { return p\\Php72::spl_object_id(\$s); }
    }
    if (!defined('PHP_OS_FAMILY')) {
        define('PHP_OS_FAMILY', p\\Php72::php_os_family());
    }
    if (!function_exists('mb_chr')) {
        function mb_ord(\$s, \$enc = null) { return p\\Php72::mb_ord(\$s, \$enc); }
        function mb_chr(\$code, \$enc = null) { return p\\Php72::mb_chr(\$code, \$enc); }
        function mb_scrub(\$s, \$enc = null) { \$enc = null === \$enc ? mb_internal_encoding() : \$enc; return mb_convert_encoding(\$s, \$enc, \$enc); }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/polyfill-php72/bootstrap.php";
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

use Symfony\\Polyfill\\Php72 as p;

if (PHP_VERSION_ID < 70200) {
    if ('\\\\' === DIRECTORY_SEPARATOR && !function_exists('sapi_windows_vt100_support')) {
        function sapi_windows_vt100_support(\$stream, \$enable = null) { return p\\Php72::sapi_windows_vt100_support(\$stream, \$enable); }
    }
    if (!function_exists('stream_isatty')) {
        function stream_isatty(\$stream) { return p\\Php72::stream_isatty(\$stream); }
    }
    if (!function_exists('utf8_encode')) {
        function utf8_encode(\$s) { return p\\Php72::utf8_encode(\$s); }
        function utf8_decode(\$s) { return p\\Php72::utf8_decode(\$s); }
    }
    if (!function_exists('spl_object_id')) {
        function spl_object_id(\$s) { return p\\Php72::spl_object_id(\$s); }
    }
    if (!defined('PHP_OS_FAMILY')) {
        define('PHP_OS_FAMILY', p\\Php72::php_os_family());
    }
    if (!function_exists('mb_chr')) {
        function mb_ord(\$s, \$enc = null) { return p\\Php72::mb_ord(\$s, \$enc); }
        function mb_chr(\$code, \$enc = null) { return p\\Php72::mb_chr(\$code, \$enc); }
        function mb_scrub(\$s, \$enc = null) { \$enc = null === \$enc ? mb_internal_encoding() : \$enc; return mb_convert_encoding(\$s, \$enc, \$enc); }
    }
}
", "vendor/symfony/polyfill-php72/bootstrap.php", "/var/www/public/DevLaon/templates/vendor/symfony/polyfill-php72/bootstrap.php");
    }
}
