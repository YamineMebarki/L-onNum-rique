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

/* vendor/symfony/validator/Constraints/Image.php */
class __TwigTemplate_26476a30f4b221d680d786e94035a5fa03f1e672647e6c14f93e1880af6f57c5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/Image.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/Image.php"));

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

namespace Symfony\\Component\\Validator\\Constraints;

/**
 * @Annotation
 * @Target({\"PROPERTY\", \"METHOD\", \"ANNOTATION\"})
 *
 * @author Benjamin Dulau <benjamin.dulau@gmail.com>
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class Image extends File
{
    const SIZE_NOT_DETECTED_ERROR = '6d55c3f4-e58e-4fe3-91ee-74b492199956';
    const TOO_WIDE_ERROR = '7f87163d-878f-47f5-99ba-a8eb723a1ab2';
    const TOO_NARROW_ERROR = '9afbd561-4f90-4a27-be62-1780fc43604a';
    const TOO_HIGH_ERROR = '7efae81c-4877-47ba-aa65-d01ccb0d4645';
    const TOO_LOW_ERROR = 'aef0cb6a-c07f-4894-bc08-1781420d7b4c';
    const TOO_FEW_PIXEL_ERROR = '1b06b97d-ae48-474e-978f-038a74854c43';
    const TOO_MANY_PIXEL_ERROR = 'ee0804e8-44db-4eac-9775-be91aaf72ce1';
    const RATIO_TOO_BIG_ERROR = '70cafca6-168f-41c9-8c8c-4e47a52be643';
    const RATIO_TOO_SMALL_ERROR = '59b8c6ef-bcf2-4ceb-afff-4642ed92f12e';
    const SQUARE_NOT_ALLOWED_ERROR = '5d41425b-facb-47f7-a55a-de9fbe45cb46';
    const LANDSCAPE_NOT_ALLOWED_ERROR = '6f895685-7cf2-4d65-b3da-9029c5581d88';
    const PORTRAIT_NOT_ALLOWED_ERROR = '65608156-77da-4c79-a88c-02ef6d18c782';
    const CORRUPTED_IMAGE_ERROR = '5d4163f3-648f-4e39-87fd-cc5ea7aad2d1';

    // Include the mapping from the base class

    protected static \$errorNames = [
        self::NOT_FOUND_ERROR => 'NOT_FOUND_ERROR',
        self::NOT_READABLE_ERROR => 'NOT_READABLE_ERROR',
        self::EMPTY_ERROR => 'EMPTY_ERROR',
        self::TOO_LARGE_ERROR => 'TOO_LARGE_ERROR',
        self::INVALID_MIME_TYPE_ERROR => 'INVALID_MIME_TYPE_ERROR',
        self::SIZE_NOT_DETECTED_ERROR => 'SIZE_NOT_DETECTED_ERROR',
        self::TOO_WIDE_ERROR => 'TOO_WIDE_ERROR',
        self::TOO_NARROW_ERROR => 'TOO_NARROW_ERROR',
        self::TOO_HIGH_ERROR => 'TOO_HIGH_ERROR',
        self::TOO_LOW_ERROR => 'TOO_LOW_ERROR',
        self::TOO_FEW_PIXEL_ERROR => 'TOO_FEW_PIXEL_ERROR',
        self::TOO_MANY_PIXEL_ERROR => 'TOO_MANY_PIXEL_ERROR',
        self::RATIO_TOO_BIG_ERROR => 'RATIO_TOO_BIG_ERROR',
        self::RATIO_TOO_SMALL_ERROR => 'RATIO_TOO_SMALL_ERROR',
        self::SQUARE_NOT_ALLOWED_ERROR => 'SQUARE_NOT_ALLOWED_ERROR',
        self::LANDSCAPE_NOT_ALLOWED_ERROR => 'LANDSCAPE_NOT_ALLOWED_ERROR',
        self::PORTRAIT_NOT_ALLOWED_ERROR => 'PORTRAIT_NOT_ALLOWED_ERROR',
        self::CORRUPTED_IMAGE_ERROR => 'CORRUPTED_IMAGE_ERROR',
    ];

    public \$mimeTypes = 'image/*';
    public \$minWidth;
    public \$maxWidth;
    public \$maxHeight;
    public \$minHeight;
    public \$maxRatio;
    public \$minRatio;
    public \$minPixels;
    public \$maxPixels;
    public \$allowSquare = true;
    public \$allowLandscape = true;
    public \$allowPortrait = true;
    public \$detectCorrupted = false;

    // The constant for a wrong MIME type is taken from the parent class.
    public \$mimeTypesMessage = 'This file is not a valid image.';
    public \$sizeNotDetectedMessage = 'The size of the image could not be detected.';
    public \$maxWidthMessage = 'The image width is too big (";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 77, $this->source); })()), "html", null, true);
        echo "px). Allowed maximum width is ";
        echo twig_escape_filter($this->env, (isset($context["max_width"]) || array_key_exists("max_width", $context) ? $context["max_width"] : (function () { throw new RuntimeError('Variable "max_width" does not exist.', 77, $this->source); })()), "html", null, true);
        echo "px.';
    public \$minWidthMessage = 'The image width is too small (";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 78, $this->source); })()), "html", null, true);
        echo "px). Minimum width expected is ";
        echo twig_escape_filter($this->env, (isset($context["min_width"]) || array_key_exists("min_width", $context) ? $context["min_width"] : (function () { throw new RuntimeError('Variable "min_width" does not exist.', 78, $this->source); })()), "html", null, true);
        echo "px.';
    public \$maxHeightMessage = 'The image height is too big (";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 79, $this->source); })()), "html", null, true);
        echo "px). Allowed maximum height is ";
        echo twig_escape_filter($this->env, (isset($context["max_height"]) || array_key_exists("max_height", $context) ? $context["max_height"] : (function () { throw new RuntimeError('Variable "max_height" does not exist.', 79, $this->source); })()), "html", null, true);
        echo "px.';
    public \$minHeightMessage = 'The image height is too small (";
        // line 80
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 80, $this->source); })()), "html", null, true);
        echo "px). Minimum height expected is ";
        echo twig_escape_filter($this->env, (isset($context["min_height"]) || array_key_exists("min_height", $context) ? $context["min_height"] : (function () { throw new RuntimeError('Variable "min_height" does not exist.', 80, $this->source); })()), "html", null, true);
        echo "px.';
    public \$minPixelsMessage = 'The image has too few pixels (";
        // line 81
        echo twig_escape_filter($this->env, (isset($context["pixels"]) || array_key_exists("pixels", $context) ? $context["pixels"] : (function () { throw new RuntimeError('Variable "pixels" does not exist.', 81, $this->source); })()), "html", null, true);
        echo " pixels). Minimum amount expected is ";
        echo twig_escape_filter($this->env, (isset($context["min_pixels"]) || array_key_exists("min_pixels", $context) ? $context["min_pixels"] : (function () { throw new RuntimeError('Variable "min_pixels" does not exist.', 81, $this->source); })()), "html", null, true);
        echo " pixels.';
    public \$maxPixelsMessage = 'The image has too many pixels (";
        // line 82
        echo twig_escape_filter($this->env, (isset($context["pixels"]) || array_key_exists("pixels", $context) ? $context["pixels"] : (function () { throw new RuntimeError('Variable "pixels" does not exist.', 82, $this->source); })()), "html", null, true);
        echo " pixels). Maximum amount expected is ";
        echo twig_escape_filter($this->env, (isset($context["max_pixels"]) || array_key_exists("max_pixels", $context) ? $context["max_pixels"] : (function () { throw new RuntimeError('Variable "max_pixels" does not exist.', 82, $this->source); })()), "html", null, true);
        echo " pixels.';
    public \$maxRatioMessage = 'The image ratio is too big (";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["ratio"]) || array_key_exists("ratio", $context) ? $context["ratio"] : (function () { throw new RuntimeError('Variable "ratio" does not exist.', 83, $this->source); })()), "html", null, true);
        echo "). Allowed maximum ratio is ";
        echo twig_escape_filter($this->env, (isset($context["max_ratio"]) || array_key_exists("max_ratio", $context) ? $context["max_ratio"] : (function () { throw new RuntimeError('Variable "max_ratio" does not exist.', 83, $this->source); })()), "html", null, true);
        echo ".';
    public \$minRatioMessage = 'The image ratio is too small (";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["ratio"]) || array_key_exists("ratio", $context) ? $context["ratio"] : (function () { throw new RuntimeError('Variable "ratio" does not exist.', 84, $this->source); })()), "html", null, true);
        echo "). Minimum ratio expected is ";
        echo twig_escape_filter($this->env, (isset($context["min_ratio"]) || array_key_exists("min_ratio", $context) ? $context["min_ratio"] : (function () { throw new RuntimeError('Variable "min_ratio" does not exist.', 84, $this->source); })()), "html", null, true);
        echo ".';
    public \$allowSquareMessage = 'The image is square (";
        // line 85
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 85, $this->source); })()), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 85, $this->source); })()), "html", null, true);
        echo "px). Square images are not allowed.';
    public \$allowLandscapeMessage = 'The image is landscape oriented (";
        // line 86
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 86, $this->source); })()), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 86, $this->source); })()), "html", null, true);
        echo "px). Landscape oriented images are not allowed.';
    public \$allowPortraitMessage = 'The image is portrait oriented (";
        // line 87
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 87, $this->source); })()), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 87, $this->source); })()), "html", null, true);
        echo "px). Portrait oriented images are not allowed.';
    public \$corruptedMessage = 'The image file is corrupted.';
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Constraints/Image.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 87,  175 => 86,  169 => 85,  163 => 84,  157 => 83,  151 => 82,  145 => 81,  139 => 80,  133 => 79,  127 => 78,  121 => 77,  43 => 1,);
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

namespace Symfony\\Component\\Validator\\Constraints;

/**
 * @Annotation
 * @Target({\"PROPERTY\", \"METHOD\", \"ANNOTATION\"})
 *
 * @author Benjamin Dulau <benjamin.dulau@gmail.com>
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class Image extends File
{
    const SIZE_NOT_DETECTED_ERROR = '6d55c3f4-e58e-4fe3-91ee-74b492199956';
    const TOO_WIDE_ERROR = '7f87163d-878f-47f5-99ba-a8eb723a1ab2';
    const TOO_NARROW_ERROR = '9afbd561-4f90-4a27-be62-1780fc43604a';
    const TOO_HIGH_ERROR = '7efae81c-4877-47ba-aa65-d01ccb0d4645';
    const TOO_LOW_ERROR = 'aef0cb6a-c07f-4894-bc08-1781420d7b4c';
    const TOO_FEW_PIXEL_ERROR = '1b06b97d-ae48-474e-978f-038a74854c43';
    const TOO_MANY_PIXEL_ERROR = 'ee0804e8-44db-4eac-9775-be91aaf72ce1';
    const RATIO_TOO_BIG_ERROR = '70cafca6-168f-41c9-8c8c-4e47a52be643';
    const RATIO_TOO_SMALL_ERROR = '59b8c6ef-bcf2-4ceb-afff-4642ed92f12e';
    const SQUARE_NOT_ALLOWED_ERROR = '5d41425b-facb-47f7-a55a-de9fbe45cb46';
    const LANDSCAPE_NOT_ALLOWED_ERROR = '6f895685-7cf2-4d65-b3da-9029c5581d88';
    const PORTRAIT_NOT_ALLOWED_ERROR = '65608156-77da-4c79-a88c-02ef6d18c782';
    const CORRUPTED_IMAGE_ERROR = '5d4163f3-648f-4e39-87fd-cc5ea7aad2d1';

    // Include the mapping from the base class

    protected static \$errorNames = [
        self::NOT_FOUND_ERROR => 'NOT_FOUND_ERROR',
        self::NOT_READABLE_ERROR => 'NOT_READABLE_ERROR',
        self::EMPTY_ERROR => 'EMPTY_ERROR',
        self::TOO_LARGE_ERROR => 'TOO_LARGE_ERROR',
        self::INVALID_MIME_TYPE_ERROR => 'INVALID_MIME_TYPE_ERROR',
        self::SIZE_NOT_DETECTED_ERROR => 'SIZE_NOT_DETECTED_ERROR',
        self::TOO_WIDE_ERROR => 'TOO_WIDE_ERROR',
        self::TOO_NARROW_ERROR => 'TOO_NARROW_ERROR',
        self::TOO_HIGH_ERROR => 'TOO_HIGH_ERROR',
        self::TOO_LOW_ERROR => 'TOO_LOW_ERROR',
        self::TOO_FEW_PIXEL_ERROR => 'TOO_FEW_PIXEL_ERROR',
        self::TOO_MANY_PIXEL_ERROR => 'TOO_MANY_PIXEL_ERROR',
        self::RATIO_TOO_BIG_ERROR => 'RATIO_TOO_BIG_ERROR',
        self::RATIO_TOO_SMALL_ERROR => 'RATIO_TOO_SMALL_ERROR',
        self::SQUARE_NOT_ALLOWED_ERROR => 'SQUARE_NOT_ALLOWED_ERROR',
        self::LANDSCAPE_NOT_ALLOWED_ERROR => 'LANDSCAPE_NOT_ALLOWED_ERROR',
        self::PORTRAIT_NOT_ALLOWED_ERROR => 'PORTRAIT_NOT_ALLOWED_ERROR',
        self::CORRUPTED_IMAGE_ERROR => 'CORRUPTED_IMAGE_ERROR',
    ];

    public \$mimeTypes = 'image/*';
    public \$minWidth;
    public \$maxWidth;
    public \$maxHeight;
    public \$minHeight;
    public \$maxRatio;
    public \$minRatio;
    public \$minPixels;
    public \$maxPixels;
    public \$allowSquare = true;
    public \$allowLandscape = true;
    public \$allowPortrait = true;
    public \$detectCorrupted = false;

    // The constant for a wrong MIME type is taken from the parent class.
    public \$mimeTypesMessage = 'This file is not a valid image.';
    public \$sizeNotDetectedMessage = 'The size of the image could not be detected.';
    public \$maxWidthMessage = 'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.';
    public \$minWidthMessage = 'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.';
    public \$maxHeightMessage = 'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.';
    public \$minHeightMessage = 'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.';
    public \$minPixelsMessage = 'The image has too few pixels ({{ pixels }} pixels). Minimum amount expected is {{ min_pixels }} pixels.';
    public \$maxPixelsMessage = 'The image has too many pixels ({{ pixels }} pixels). Maximum amount expected is {{ max_pixels }} pixels.';
    public \$maxRatioMessage = 'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.';
    public \$minRatioMessage = 'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.';
    public \$allowSquareMessage = 'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.';
    public \$allowLandscapeMessage = 'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.';
    public \$allowPortraitMessage = 'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.';
    public \$corruptedMessage = 'The image file is corrupted.';
}
", "vendor/symfony/validator/Constraints/Image.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Constraints/Image.php");
    }
}
