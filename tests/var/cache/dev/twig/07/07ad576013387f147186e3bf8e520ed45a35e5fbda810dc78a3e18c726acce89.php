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

/* vendor/fzaninotto/faker/src/Faker/Provider/Image.php */
class __TwigTemplate_c9956ef42760e74612ee698bbe8b2c93735e5e722259745fed7e36994bb55050 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/Image.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/Image.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider;

/**
 * Depends on image generation from http://lorempixel.com/
 */
class Image extends Base
{
    protected static \$categories = array(
        'abstract', 'animals', 'business', 'cats', 'city', 'food', 'nightlife',
        'fashion', 'people', 'nature', 'sports', 'technics', 'transport'
    );

    /**
     * Generate the URL that will return a random image
     *
     * Set randomize to false to remove the random GET parameter at the end of the url.
     *
     * @example 'http://lorempixel.com/640/480/?12345'
     *
     * @param integer \$width
     * @param integer \$height
     * @param string|null \$category
     * @param bool \$randomize
     * @param string|null \$word
     * @param bool \$gray
     *
     * @return string
     */
    public static function imageUrl(\$width = 640, \$height = 480, \$category = null, \$randomize = true, \$word = null, \$gray = false)
    {
        \$baseUrl = \"https://lorempixel.com/\";
        \$url = \"{\$width}/{\$height}/\";

        if (\$gray) {
            \$url = \"gray/\" . \$url;
        }

        if (\$category) {
            if (!in_array(\$category, static::\$categories)) {
                throw new \\InvalidArgumentException(sprintf('Unknown image category \"%s\"', \$category));
            }
            \$url .= \"{\$category}/\";
            if (\$word) {
                \$url .= \"{\$word}/\";
            }
        }

        if (\$randomize) {
            \$url .= '?' . static::randomNumber(5, true);
        }

        return \$baseUrl . \$url;
    }

    /**
     * Download a remote random image to disk and return its location
     *
     * Requires curl, or allow_url_fopen to be on in php.ini.
     *
     * @example '/path/to/dir/13b73edae8443990be1aa8f1a483bc27.jpg'
     */
    public static function image(\$dir = null, \$width = 640, \$height = 480, \$category = null, \$fullPath = true, \$randomize = true, \$word = null)
    {
        \$dir = is_null(\$dir) ? sys_get_temp_dir() : \$dir; // GNU/Linux / OS X / Windows compatible
        // Validate directory path
        if (!is_dir(\$dir) || !is_writable(\$dir)) {
            throw new \\InvalidArgumentException(sprintf('Cannot write to directory \"%s\"', \$dir));
        }

        // Generate a random filename. Use the server address so that a file
        // generated at the same time on a different server won't have a collision.
        \$name = md5(uniqid(empty(\$_SERVER['SERVER_ADDR']) ? '' : \$_SERVER['SERVER_ADDR'], true));
        \$filename = \$name .'.jpg';
        \$filepath = \$dir . DIRECTORY_SEPARATOR . \$filename;

        \$url = static::imageUrl(\$width, \$height, \$category, \$randomize, \$word);

        // save file
        if (function_exists('curl_exec')) {
            // use cURL
            \$fp = fopen(\$filepath, 'w');
            \$ch = curl_init(\$url);
            curl_setopt(\$ch, CURLOPT_FILE, \$fp);
            \$success = curl_exec(\$ch) && curl_getinfo(\$ch, CURLINFO_HTTP_CODE) === 200;
            fclose(\$fp);
            curl_close(\$ch);

            if (!\$success) {
                unlink(\$filepath);

                // could not contact the distant URL or HTTP error - fail silently.
                return false;
            }
        } elseif (ini_get('allow_url_fopen')) {
            // use remote fopen() via copy()
            \$success = copy(\$url, \$filepath);
        } else {
            return new \\RuntimeException('The image formatter downloads an image from a remote HTTP server. Therefore, it requires that PHP can request remote hosts, either via cURL or fopen()');
        }

        return \$fullPath ? \$filepath : \$filename;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/Image.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider;

/**
 * Depends on image generation from http://lorempixel.com/
 */
class Image extends Base
{
    protected static \$categories = array(
        'abstract', 'animals', 'business', 'cats', 'city', 'food', 'nightlife',
        'fashion', 'people', 'nature', 'sports', 'technics', 'transport'
    );

    /**
     * Generate the URL that will return a random image
     *
     * Set randomize to false to remove the random GET parameter at the end of the url.
     *
     * @example 'http://lorempixel.com/640/480/?12345'
     *
     * @param integer \$width
     * @param integer \$height
     * @param string|null \$category
     * @param bool \$randomize
     * @param string|null \$word
     * @param bool \$gray
     *
     * @return string
     */
    public static function imageUrl(\$width = 640, \$height = 480, \$category = null, \$randomize = true, \$word = null, \$gray = false)
    {
        \$baseUrl = \"https://lorempixel.com/\";
        \$url = \"{\$width}/{\$height}/\";

        if (\$gray) {
            \$url = \"gray/\" . \$url;
        }

        if (\$category) {
            if (!in_array(\$category, static::\$categories)) {
                throw new \\InvalidArgumentException(sprintf('Unknown image category \"%s\"', \$category));
            }
            \$url .= \"{\$category}/\";
            if (\$word) {
                \$url .= \"{\$word}/\";
            }
        }

        if (\$randomize) {
            \$url .= '?' . static::randomNumber(5, true);
        }

        return \$baseUrl . \$url;
    }

    /**
     * Download a remote random image to disk and return its location
     *
     * Requires curl, or allow_url_fopen to be on in php.ini.
     *
     * @example '/path/to/dir/13b73edae8443990be1aa8f1a483bc27.jpg'
     */
    public static function image(\$dir = null, \$width = 640, \$height = 480, \$category = null, \$fullPath = true, \$randomize = true, \$word = null)
    {
        \$dir = is_null(\$dir) ? sys_get_temp_dir() : \$dir; // GNU/Linux / OS X / Windows compatible
        // Validate directory path
        if (!is_dir(\$dir) || !is_writable(\$dir)) {
            throw new \\InvalidArgumentException(sprintf('Cannot write to directory \"%s\"', \$dir));
        }

        // Generate a random filename. Use the server address so that a file
        // generated at the same time on a different server won't have a collision.
        \$name = md5(uniqid(empty(\$_SERVER['SERVER_ADDR']) ? '' : \$_SERVER['SERVER_ADDR'], true));
        \$filename = \$name .'.jpg';
        \$filepath = \$dir . DIRECTORY_SEPARATOR . \$filename;

        \$url = static::imageUrl(\$width, \$height, \$category, \$randomize, \$word);

        // save file
        if (function_exists('curl_exec')) {
            // use cURL
            \$fp = fopen(\$filepath, 'w');
            \$ch = curl_init(\$url);
            curl_setopt(\$ch, CURLOPT_FILE, \$fp);
            \$success = curl_exec(\$ch) && curl_getinfo(\$ch, CURLINFO_HTTP_CODE) === 200;
            fclose(\$fp);
            curl_close(\$ch);

            if (!\$success) {
                unlink(\$filepath);

                // could not contact the distant URL or HTTP error - fail silently.
                return false;
            }
        } elseif (ini_get('allow_url_fopen')) {
            // use remote fopen() via copy()
            \$success = copy(\$url, \$filepath);
        } else {
            return new \\RuntimeException('The image formatter downloads an image from a remote HTTP server. Therefore, it requires that PHP can request remote hosts, either via cURL or fopen()');
        }

        return \$fullPath ? \$filepath : \$filename;
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/Image.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/Image.php");
    }
}
