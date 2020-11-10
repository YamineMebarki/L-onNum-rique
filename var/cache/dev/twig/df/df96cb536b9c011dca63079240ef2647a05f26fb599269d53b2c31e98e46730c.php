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

/* vendor/symfony/polyfill-mbstring/bootstrap.php */
class __TwigTemplate_97fcb4bf9abb57235c2339f51cd15acdcc33c773adb45c565983a8170cbbeb99 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/polyfill-mbstring/bootstrap.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/polyfill-mbstring/bootstrap.php"));

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

use Symfony\\Polyfill\\Mbstring as p;

if (!function_exists('mb_strlen')) {
    define('MB_CASE_UPPER', 0);
    define('MB_CASE_LOWER', 1);
    define('MB_CASE_TITLE', 2);

    function mb_convert_encoding(\$s, \$to, \$from = null) { return p\\Mbstring::mb_convert_encoding(\$s, \$to, \$from); }
    function mb_decode_mimeheader(\$s) { return p\\Mbstring::mb_decode_mimeheader(\$s); }
    function mb_encode_mimeheader(\$s, \$charset = null, \$transferEnc = null, \$lf = null, \$indent = null) { return p\\Mbstring::mb_encode_mimeheader(\$s, \$charset, \$transferEnc, \$lf, \$indent); }
    function mb_decode_numericentity(\$s, \$convmap, \$enc = null) { return p\\Mbstring::mb_decode_numericentity(\$s, \$convmap, \$enc); }
    function mb_encode_numericentity(\$s, \$convmap, \$enc = null, \$is_hex = false) { return p\\Mbstring::mb_encode_numericentity(\$s, \$convmap, \$enc, \$is_hex); }
    function mb_convert_case(\$s, \$mode, \$enc = null) { return p\\Mbstring::mb_convert_case(\$s, \$mode, \$enc); }
    function mb_internal_encoding(\$enc = null) { return p\\Mbstring::mb_internal_encoding(\$enc); }
    function mb_language(\$lang = null) { return p\\Mbstring::mb_language(\$lang); }
    function mb_list_encodings() { return p\\Mbstring::mb_list_encodings(); }
    function mb_encoding_aliases(\$encoding) { return p\\Mbstring::mb_encoding_aliases(\$encoding); }
    function mb_check_encoding(\$var = null, \$encoding = null) { return p\\Mbstring::mb_check_encoding(\$var, \$encoding); }
    function mb_detect_encoding(\$str, \$encodingList = null, \$strict = false) { return p\\Mbstring::mb_detect_encoding(\$str, \$encodingList, \$strict); }
    function mb_detect_order(\$encodingList = null) { return p\\Mbstring::mb_detect_order(\$encodingList); }
    function mb_parse_str(\$s, &\$result = array()) { parse_str(\$s, \$result); }
    function mb_strlen(\$s, \$enc = null) { return p\\Mbstring::mb_strlen(\$s, \$enc); }
    function mb_strpos(\$s, \$needle, \$offset = 0, \$enc = null) { return p\\Mbstring::mb_strpos(\$s, \$needle, \$offset, \$enc); }
    function mb_strtolower(\$s, \$enc = null) { return p\\Mbstring::mb_strtolower(\$s, \$enc); }
    function mb_strtoupper(\$s, \$enc = null) { return p\\Mbstring::mb_strtoupper(\$s, \$enc); }
    function mb_substitute_character(\$char = null) { return p\\Mbstring::mb_substitute_character(\$char); }
    function mb_substr(\$s, \$start, \$length = 2147483647, \$enc = null) { return p\\Mbstring::mb_substr(\$s, \$start, \$length, \$enc); }
    function mb_stripos(\$s, \$needle, \$offset = 0, \$enc = null) { return p\\Mbstring::mb_stripos(\$s, \$needle, \$offset, \$enc); }
    function mb_stristr(\$s, \$needle, \$part = false, \$enc = null) { return p\\Mbstring::mb_stristr(\$s, \$needle, \$part, \$enc); }
    function mb_strrchr(\$s, \$needle, \$part = false, \$enc = null) { return p\\Mbstring::mb_strrchr(\$s, \$needle, \$part, \$enc); }
    function mb_strrichr(\$s, \$needle, \$part = false, \$enc = null) { return p\\Mbstring::mb_strrichr(\$s, \$needle, \$part, \$enc); }
    function mb_strripos(\$s, \$needle, \$offset = 0, \$enc = null) { return p\\Mbstring::mb_strripos(\$s, \$needle, \$offset, \$enc); }
    function mb_strrpos(\$s, \$needle, \$offset = 0, \$enc = null) { return p\\Mbstring::mb_strrpos(\$s, \$needle, \$offset, \$enc); }
    function mb_strstr(\$s, \$needle, \$part = false, \$enc = null) { return p\\Mbstring::mb_strstr(\$s, \$needle, \$part, \$enc); }
    function mb_get_info(\$type = 'all') { return p\\Mbstring::mb_get_info(\$type); }
    function mb_http_output(\$enc = null) { return p\\Mbstring::mb_http_output(\$enc); }
    function mb_strwidth(\$s, \$enc = null) { return p\\Mbstring::mb_strwidth(\$s, \$enc); }
    function mb_substr_count(\$haystack, \$needle, \$enc = null) { return p\\Mbstring::mb_substr_count(\$haystack, \$needle, \$enc); }
    function mb_output_handler(\$contents, \$status) { return p\\Mbstring::mb_output_handler(\$contents, \$status); }
    function mb_http_input(\$type = '') { return p\\Mbstring::mb_http_input(\$type); }
    function mb_convert_variables(\$toEncoding, \$fromEncoding, &\$a = null, &\$b = null, &\$c = null, &\$d = null, &\$e = null, &\$f = null) { return p\\Mbstring::mb_convert_variables(\$toEncoding, \$fromEncoding, \$a, \$b, \$c, \$d, \$e, \$f); }
}
if (!function_exists('mb_chr')) {
    function mb_ord(\$s, \$enc = null) { return p\\Mbstring::mb_ord(\$s, \$enc); }
    function mb_chr(\$code, \$enc = null) { return p\\Mbstring::mb_chr(\$code, \$enc); }
    function mb_scrub(\$s, \$enc = null) { \$enc = null === \$enc ? mb_internal_encoding() : \$enc; return mb_convert_encoding(\$s, \$enc, \$enc); }
}

if (!function_exists('mb_str_split')) {
    function mb_str_split(\$string, \$split_length = 1, \$encoding = null) { return p\\Mbstring::mb_str_split(\$string, \$split_length, \$encoding); }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/polyfill-mbstring/bootstrap.php";
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

use Symfony\\Polyfill\\Mbstring as p;

if (!function_exists('mb_strlen')) {
    define('MB_CASE_UPPER', 0);
    define('MB_CASE_LOWER', 1);
    define('MB_CASE_TITLE', 2);

    function mb_convert_encoding(\$s, \$to, \$from = null) { return p\\Mbstring::mb_convert_encoding(\$s, \$to, \$from); }
    function mb_decode_mimeheader(\$s) { return p\\Mbstring::mb_decode_mimeheader(\$s); }
    function mb_encode_mimeheader(\$s, \$charset = null, \$transferEnc = null, \$lf = null, \$indent = null) { return p\\Mbstring::mb_encode_mimeheader(\$s, \$charset, \$transferEnc, \$lf, \$indent); }
    function mb_decode_numericentity(\$s, \$convmap, \$enc = null) { return p\\Mbstring::mb_decode_numericentity(\$s, \$convmap, \$enc); }
    function mb_encode_numericentity(\$s, \$convmap, \$enc = null, \$is_hex = false) { return p\\Mbstring::mb_encode_numericentity(\$s, \$convmap, \$enc, \$is_hex); }
    function mb_convert_case(\$s, \$mode, \$enc = null) { return p\\Mbstring::mb_convert_case(\$s, \$mode, \$enc); }
    function mb_internal_encoding(\$enc = null) { return p\\Mbstring::mb_internal_encoding(\$enc); }
    function mb_language(\$lang = null) { return p\\Mbstring::mb_language(\$lang); }
    function mb_list_encodings() { return p\\Mbstring::mb_list_encodings(); }
    function mb_encoding_aliases(\$encoding) { return p\\Mbstring::mb_encoding_aliases(\$encoding); }
    function mb_check_encoding(\$var = null, \$encoding = null) { return p\\Mbstring::mb_check_encoding(\$var, \$encoding); }
    function mb_detect_encoding(\$str, \$encodingList = null, \$strict = false) { return p\\Mbstring::mb_detect_encoding(\$str, \$encodingList, \$strict); }
    function mb_detect_order(\$encodingList = null) { return p\\Mbstring::mb_detect_order(\$encodingList); }
    function mb_parse_str(\$s, &\$result = array()) { parse_str(\$s, \$result); }
    function mb_strlen(\$s, \$enc = null) { return p\\Mbstring::mb_strlen(\$s, \$enc); }
    function mb_strpos(\$s, \$needle, \$offset = 0, \$enc = null) { return p\\Mbstring::mb_strpos(\$s, \$needle, \$offset, \$enc); }
    function mb_strtolower(\$s, \$enc = null) { return p\\Mbstring::mb_strtolower(\$s, \$enc); }
    function mb_strtoupper(\$s, \$enc = null) { return p\\Mbstring::mb_strtoupper(\$s, \$enc); }
    function mb_substitute_character(\$char = null) { return p\\Mbstring::mb_substitute_character(\$char); }
    function mb_substr(\$s, \$start, \$length = 2147483647, \$enc = null) { return p\\Mbstring::mb_substr(\$s, \$start, \$length, \$enc); }
    function mb_stripos(\$s, \$needle, \$offset = 0, \$enc = null) { return p\\Mbstring::mb_stripos(\$s, \$needle, \$offset, \$enc); }
    function mb_stristr(\$s, \$needle, \$part = false, \$enc = null) { return p\\Mbstring::mb_stristr(\$s, \$needle, \$part, \$enc); }
    function mb_strrchr(\$s, \$needle, \$part = false, \$enc = null) { return p\\Mbstring::mb_strrchr(\$s, \$needle, \$part, \$enc); }
    function mb_strrichr(\$s, \$needle, \$part = false, \$enc = null) { return p\\Mbstring::mb_strrichr(\$s, \$needle, \$part, \$enc); }
    function mb_strripos(\$s, \$needle, \$offset = 0, \$enc = null) { return p\\Mbstring::mb_strripos(\$s, \$needle, \$offset, \$enc); }
    function mb_strrpos(\$s, \$needle, \$offset = 0, \$enc = null) { return p\\Mbstring::mb_strrpos(\$s, \$needle, \$offset, \$enc); }
    function mb_strstr(\$s, \$needle, \$part = false, \$enc = null) { return p\\Mbstring::mb_strstr(\$s, \$needle, \$part, \$enc); }
    function mb_get_info(\$type = 'all') { return p\\Mbstring::mb_get_info(\$type); }
    function mb_http_output(\$enc = null) { return p\\Mbstring::mb_http_output(\$enc); }
    function mb_strwidth(\$s, \$enc = null) { return p\\Mbstring::mb_strwidth(\$s, \$enc); }
    function mb_substr_count(\$haystack, \$needle, \$enc = null) { return p\\Mbstring::mb_substr_count(\$haystack, \$needle, \$enc); }
    function mb_output_handler(\$contents, \$status) { return p\\Mbstring::mb_output_handler(\$contents, \$status); }
    function mb_http_input(\$type = '') { return p\\Mbstring::mb_http_input(\$type); }
    function mb_convert_variables(\$toEncoding, \$fromEncoding, &\$a = null, &\$b = null, &\$c = null, &\$d = null, &\$e = null, &\$f = null) { return p\\Mbstring::mb_convert_variables(\$toEncoding, \$fromEncoding, \$a, \$b, \$c, \$d, \$e, \$f); }
}
if (!function_exists('mb_chr')) {
    function mb_ord(\$s, \$enc = null) { return p\\Mbstring::mb_ord(\$s, \$enc); }
    function mb_chr(\$code, \$enc = null) { return p\\Mbstring::mb_chr(\$code, \$enc); }
    function mb_scrub(\$s, \$enc = null) { \$enc = null === \$enc ? mb_internal_encoding() : \$enc; return mb_convert_encoding(\$s, \$enc, \$enc); }
}

if (!function_exists('mb_str_split')) {
    function mb_str_split(\$string, \$split_length = 1, \$encoding = null) { return p\\Mbstring::mb_str_split(\$string, \$split_length, \$encoding); }
}
", "vendor/symfony/polyfill-mbstring/bootstrap.php", "/var/www/public/DevLaon/templates/vendor/symfony/polyfill-mbstring/bootstrap.php");
    }
}
