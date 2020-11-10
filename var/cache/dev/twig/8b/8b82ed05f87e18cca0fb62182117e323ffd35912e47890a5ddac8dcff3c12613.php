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

/* vendor/fzaninotto/faker/src/Faker/Provider/Color.php */
class __TwigTemplate_7163a66319ea11f548797b3fa62c3e6f57181bb5348a2429c85dba34417d1520 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/Color.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/Color.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider;

/**
 * @author lsv
 */
class Color extends Base
{
    protected static \$safeColorNames = array(
        'black', 'maroon', 'green', 'navy', 'olive',
        'purple', 'teal', 'lime', 'blue', 'silver',
        'gray', 'yellow', 'fuchsia', 'aqua', 'white'
    );

    protected static \$allColorNames = array(
        'AliceBlue', 'AntiqueWhite', 'Aqua', 'Aquamarine',
        'Azure', 'Beige', 'Bisque', 'Black', 'BlanchedAlmond',
        'Blue', 'BlueViolet', 'Brown', 'BurlyWood', 'CadetBlue',
        'Chartreuse', 'Chocolate', 'Coral', 'CornflowerBlue',
        'Cornsilk', 'Crimson', 'Cyan', 'DarkBlue', 'DarkCyan',
        'DarkGoldenRod', 'DarkGray', 'DarkGreen', 'DarkKhaki',
        'DarkMagenta', 'DarkOliveGreen', 'Darkorange', 'DarkOrchid',
        'DarkRed', 'DarkSalmon', 'DarkSeaGreen', 'DarkSlateBlue',
        'DarkSlateGray', 'DarkTurquoise', 'DarkViolet', 'DeepPink',
        'DeepSkyBlue', 'DimGray', 'DimGrey', 'DodgerBlue', 'FireBrick',
        'FloralWhite', 'ForestGreen', 'Fuchsia', 'Gainsboro', 'GhostWhite',
        'Gold', 'GoldenRod', 'Gray', 'Green', 'GreenYellow', 'HoneyDew',
        'HotPink', 'IndianRed', 'Indigo', 'Ivory', 'Khaki', 'Lavender',
        'LavenderBlush', 'LawnGreen', 'LemonChiffon', 'LightBlue', 'LightCoral',
        'LightCyan', 'LightGoldenRodYellow', 'LightGray', 'LightGreen', 'LightPink',
        'LightSalmon', 'LightSeaGreen', 'LightSkyBlue', 'LightSlateGray', 'LightSteelBlue',
        'LightYellow', 'Lime', 'LimeGreen', 'Linen', 'Magenta', 'Maroon', 'MediumAquaMarine',
        'MediumBlue', 'MediumOrchid', 'MediumPurple', 'MediumSeaGreen', 'MediumSlateBlue',
        'MediumSpringGreen', 'MediumTurquoise', 'MediumVioletRed', 'MidnightBlue',
        'MintCream', 'MistyRose', 'Moccasin', 'NavajoWhite', 'Navy', 'OldLace', 'Olive',
        'OliveDrab', 'Orange', 'OrangeRed', 'Orchid', 'PaleGoldenRod', 'PaleGreen',
        'PaleTurquoise', 'PaleVioletRed', 'PapayaWhip', 'PeachPuff', 'Peru', 'Pink', 'Plum',
        'PowderBlue', 'Purple', 'Red', 'RosyBrown', 'RoyalBlue', 'SaddleBrown', 'Salmon',
        'SandyBrown', 'SeaGreen', 'SeaShell', 'Sienna', 'Silver', 'SkyBlue', 'SlateBlue',
        'SlateGray', 'Snow', 'SpringGreen', 'SteelBlue', 'Tan', 'Teal', 'Thistle', 'Tomato',
        'Turquoise', 'Violet', 'Wheat', 'White', 'WhiteSmoke', 'Yellow', 'YellowGreen'
    );

    /**
     * @example '#fa3cc2'
     */
    public static function hexColor()
    {
        return '#' . str_pad(dechex(mt_rand(1, 16777215)), 6, '0', STR_PAD_LEFT);
    }

    /**
     * @example '#ff0044'
     */
    public static function safeHexColor()
    {
        \$color = str_pad(dechex(mt_rand(0, 255)), 3, '0', STR_PAD_LEFT);

        return '#' . \$color[0] . \$color[0] . \$color[1] . \$color[1] . \$color[2] . \$color[2];
    }

    /**
     * @example 'array(0,255,122)'
     */
    public static function rgbColorAsArray()
    {
        \$color = static::hexColor();

        return array(
            hexdec(substr(\$color, 1, 2)),
            hexdec(substr(\$color, 3, 2)),
            hexdec(substr(\$color, 5, 2))
        );
    }

    /**
     * @example '0,255,122'
     */
    public static function rgbColor()
    {
        return implode(',', static::rgbColorAsArray());
    }

    /**
     * @example 'rgb(0,255,122)'
     */
    public static function rgbCssColor()
    {
        return 'rgb(' . static::rgbColor() . ')';
    }

    /**
     * @example 'rgba(0,255,122,0.8)'
     */
    public static function rgbaCssColor()
    {
        return 'rgba(' . static::rgbColor() . ',' . static::randomFloat(1, 0, 1) . ')';
    }

    /**
     * @example 'blue'
     */
    public static function safeColorName()
    {
        return static::randomElement(static::\$safeColorNames);
    }

    /**
     * @example 'NavajoWhite'
     */
    public static function colorName()
    {
        return static::randomElement(static::\$allColorNames);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/Color.php";
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
 * @author lsv
 */
class Color extends Base
{
    protected static \$safeColorNames = array(
        'black', 'maroon', 'green', 'navy', 'olive',
        'purple', 'teal', 'lime', 'blue', 'silver',
        'gray', 'yellow', 'fuchsia', 'aqua', 'white'
    );

    protected static \$allColorNames = array(
        'AliceBlue', 'AntiqueWhite', 'Aqua', 'Aquamarine',
        'Azure', 'Beige', 'Bisque', 'Black', 'BlanchedAlmond',
        'Blue', 'BlueViolet', 'Brown', 'BurlyWood', 'CadetBlue',
        'Chartreuse', 'Chocolate', 'Coral', 'CornflowerBlue',
        'Cornsilk', 'Crimson', 'Cyan', 'DarkBlue', 'DarkCyan',
        'DarkGoldenRod', 'DarkGray', 'DarkGreen', 'DarkKhaki',
        'DarkMagenta', 'DarkOliveGreen', 'Darkorange', 'DarkOrchid',
        'DarkRed', 'DarkSalmon', 'DarkSeaGreen', 'DarkSlateBlue',
        'DarkSlateGray', 'DarkTurquoise', 'DarkViolet', 'DeepPink',
        'DeepSkyBlue', 'DimGray', 'DimGrey', 'DodgerBlue', 'FireBrick',
        'FloralWhite', 'ForestGreen', 'Fuchsia', 'Gainsboro', 'GhostWhite',
        'Gold', 'GoldenRod', 'Gray', 'Green', 'GreenYellow', 'HoneyDew',
        'HotPink', 'IndianRed', 'Indigo', 'Ivory', 'Khaki', 'Lavender',
        'LavenderBlush', 'LawnGreen', 'LemonChiffon', 'LightBlue', 'LightCoral',
        'LightCyan', 'LightGoldenRodYellow', 'LightGray', 'LightGreen', 'LightPink',
        'LightSalmon', 'LightSeaGreen', 'LightSkyBlue', 'LightSlateGray', 'LightSteelBlue',
        'LightYellow', 'Lime', 'LimeGreen', 'Linen', 'Magenta', 'Maroon', 'MediumAquaMarine',
        'MediumBlue', 'MediumOrchid', 'MediumPurple', 'MediumSeaGreen', 'MediumSlateBlue',
        'MediumSpringGreen', 'MediumTurquoise', 'MediumVioletRed', 'MidnightBlue',
        'MintCream', 'MistyRose', 'Moccasin', 'NavajoWhite', 'Navy', 'OldLace', 'Olive',
        'OliveDrab', 'Orange', 'OrangeRed', 'Orchid', 'PaleGoldenRod', 'PaleGreen',
        'PaleTurquoise', 'PaleVioletRed', 'PapayaWhip', 'PeachPuff', 'Peru', 'Pink', 'Plum',
        'PowderBlue', 'Purple', 'Red', 'RosyBrown', 'RoyalBlue', 'SaddleBrown', 'Salmon',
        'SandyBrown', 'SeaGreen', 'SeaShell', 'Sienna', 'Silver', 'SkyBlue', 'SlateBlue',
        'SlateGray', 'Snow', 'SpringGreen', 'SteelBlue', 'Tan', 'Teal', 'Thistle', 'Tomato',
        'Turquoise', 'Violet', 'Wheat', 'White', 'WhiteSmoke', 'Yellow', 'YellowGreen'
    );

    /**
     * @example '#fa3cc2'
     */
    public static function hexColor()
    {
        return '#' . str_pad(dechex(mt_rand(1, 16777215)), 6, '0', STR_PAD_LEFT);
    }

    /**
     * @example '#ff0044'
     */
    public static function safeHexColor()
    {
        \$color = str_pad(dechex(mt_rand(0, 255)), 3, '0', STR_PAD_LEFT);

        return '#' . \$color[0] . \$color[0] . \$color[1] . \$color[1] . \$color[2] . \$color[2];
    }

    /**
     * @example 'array(0,255,122)'
     */
    public static function rgbColorAsArray()
    {
        \$color = static::hexColor();

        return array(
            hexdec(substr(\$color, 1, 2)),
            hexdec(substr(\$color, 3, 2)),
            hexdec(substr(\$color, 5, 2))
        );
    }

    /**
     * @example '0,255,122'
     */
    public static function rgbColor()
    {
        return implode(',', static::rgbColorAsArray());
    }

    /**
     * @example 'rgb(0,255,122)'
     */
    public static function rgbCssColor()
    {
        return 'rgb(' . static::rgbColor() . ')';
    }

    /**
     * @example 'rgba(0,255,122,0.8)'
     */
    public static function rgbaCssColor()
    {
        return 'rgba(' . static::rgbColor() . ',' . static::randomFloat(1, 0, 1) . ')';
    }

    /**
     * @example 'blue'
     */
    public static function safeColorName()
    {
        return static::randomElement(static::\$safeColorNames);
    }

    /**
     * @example 'NavajoWhite'
     */
    public static function colorName()
    {
        return static::randomElement(static::\$allColorNames);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/Color.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/Color.php");
    }
}
