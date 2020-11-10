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

/* vendor/symfony/validator/Constraints/ImageValidator.php */
class __TwigTemplate_d78041fc752b7a7a5c50f073a9f81eda95b38d561bdd00dde60ba7c98689b1b9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/ImageValidator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/ImageValidator.php"));

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

use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException;
use Symfony\\Component\\Validator\\Exception\\LogicException;
use Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException;

/**
 * Validates whether a value is a valid image file and is valid
 * against minWidth, maxWidth, minHeight and maxHeight constraints.
 *
 * @author Benjamin Dulau <benjamin.dulau@gmail.com>
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class ImageValidator extends FileValidator
{
    /**
     * {@inheritdoc}
     */
    public function validate(\$value, Constraint \$constraint)
    {
        if (!\$constraint instanceof Image) {
            throw new UnexpectedTypeException(\$constraint, __NAMESPACE__.'\\Image');
        }

        \$violations = \\count(\$this->context->getViolations());

        parent::validate(\$value, \$constraint);

        \$failed = \\count(\$this->context->getViolations()) !== \$violations;

        if (\$failed || null === \$value || '' === \$value) {
            return;
        }

        if (null === \$constraint->minWidth && null === \$constraint->maxWidth
            && null === \$constraint->minHeight && null === \$constraint->maxHeight
            && null === \$constraint->minPixels && null === \$constraint->maxPixels
            && null === \$constraint->minRatio && null === \$constraint->maxRatio
            && \$constraint->allowSquare && \$constraint->allowLandscape && \$constraint->allowPortrait
            && !\$constraint->detectCorrupted) {
            return;
        }

        \$size = @getimagesize(\$value);

        if (empty(\$size) || (0 === \$size[0]) || (0 === \$size[1])) {
            \$this->context->buildViolation(\$constraint->sizeNotDetectedMessage)
                ->setCode(Image::SIZE_NOT_DETECTED_ERROR)
                ->addViolation();

            return;
        }

        \$width = \$size[0];
        \$height = \$size[1];

        if (\$constraint->minWidth) {
            if (!ctype_digit((string) \$constraint->minWidth)) {
                throw new ConstraintDefinitionException(sprintf('\"%s\" is not a valid minimum width.', \$constraint->minWidth));
            }

            if (\$width < \$constraint->minWidth) {
                \$this->context->buildViolation(\$constraint->minWidthMessage)
                    ->setParameter('";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 76, $this->source); })()), "html", null, true);
        echo "', \$width)
                    ->setParameter('";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["min_width"]) || array_key_exists("min_width", $context) ? $context["min_width"] : (function () { throw new RuntimeError('Variable "min_width" does not exist.', 77, $this->source); })()), "html", null, true);
        echo "', \$constraint->minWidth)
                    ->setCode(Image::TOO_NARROW_ERROR)
                    ->addViolation();

                return;
            }
        }

        if (\$constraint->maxWidth) {
            if (!ctype_digit((string) \$constraint->maxWidth)) {
                throw new ConstraintDefinitionException(sprintf('\"%s\" is not a valid maximum width.', \$constraint->maxWidth));
            }

            if (\$width > \$constraint->maxWidth) {
                \$this->context->buildViolation(\$constraint->maxWidthMessage)
                    ->setParameter('";
        // line 92
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 92, $this->source); })()), "html", null, true);
        echo "', \$width)
                    ->setParameter('";
        // line 93
        echo twig_escape_filter($this->env, (isset($context["max_width"]) || array_key_exists("max_width", $context) ? $context["max_width"] : (function () { throw new RuntimeError('Variable "max_width" does not exist.', 93, $this->source); })()), "html", null, true);
        echo "', \$constraint->maxWidth)
                    ->setCode(Image::TOO_WIDE_ERROR)
                    ->addViolation();

                return;
            }
        }

        if (\$constraint->minHeight) {
            if (!ctype_digit((string) \$constraint->minHeight)) {
                throw new ConstraintDefinitionException(sprintf('\"%s\" is not a valid minimum height', \$constraint->minHeight));
            }

            if (\$height < \$constraint->minHeight) {
                \$this->context->buildViolation(\$constraint->minHeightMessage)
                    ->setParameter('";
        // line 108
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 108, $this->source); })()), "html", null, true);
        echo "', \$height)
                    ->setParameter('";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["min_height"]) || array_key_exists("min_height", $context) ? $context["min_height"] : (function () { throw new RuntimeError('Variable "min_height" does not exist.', 109, $this->source); })()), "html", null, true);
        echo "', \$constraint->minHeight)
                    ->setCode(Image::TOO_LOW_ERROR)
                    ->addViolation();

                return;
            }
        }

        if (\$constraint->maxHeight) {
            if (!ctype_digit((string) \$constraint->maxHeight)) {
                throw new ConstraintDefinitionException(sprintf('\"%s\" is not a valid maximum height', \$constraint->maxHeight));
            }

            if (\$height > \$constraint->maxHeight) {
                \$this->context->buildViolation(\$constraint->maxHeightMessage)
                    ->setParameter('";
        // line 124
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 124, $this->source); })()), "html", null, true);
        echo "', \$height)
                    ->setParameter('";
        // line 125
        echo twig_escape_filter($this->env, (isset($context["max_height"]) || array_key_exists("max_height", $context) ? $context["max_height"] : (function () { throw new RuntimeError('Variable "max_height" does not exist.', 125, $this->source); })()), "html", null, true);
        echo "', \$constraint->maxHeight)
                    ->setCode(Image::TOO_HIGH_ERROR)
                    ->addViolation();
            }
        }

        \$pixels = \$width * \$height;

        if (null !== \$constraint->minPixels) {
            if (!ctype_digit((string) \$constraint->minPixels)) {
                throw new ConstraintDefinitionException(sprintf('\"%s\" is not a valid minimum amount of pixels', \$constraint->minPixels));
            }

            if (\$pixels < \$constraint->minPixels) {
                \$this->context->buildViolation(\$constraint->minPixelsMessage)
                    ->setParameter('";
        // line 140
        echo twig_escape_filter($this->env, (isset($context["pixels"]) || array_key_exists("pixels", $context) ? $context["pixels"] : (function () { throw new RuntimeError('Variable "pixels" does not exist.', 140, $this->source); })()), "html", null, true);
        echo "', \$pixels)
                    ->setParameter('";
        // line 141
        echo twig_escape_filter($this->env, (isset($context["min_pixels"]) || array_key_exists("min_pixels", $context) ? $context["min_pixels"] : (function () { throw new RuntimeError('Variable "min_pixels" does not exist.', 141, $this->source); })()), "html", null, true);
        echo "', \$constraint->minPixels)
                    ->setParameter('";
        // line 142
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 142, $this->source); })()), "html", null, true);
        echo "', \$height)
                    ->setParameter('";
        // line 143
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 143, $this->source); })()), "html", null, true);
        echo "', \$width)
                    ->setCode(Image::TOO_FEW_PIXEL_ERROR)
                    ->addViolation();
            }
        }

        if (null !== \$constraint->maxPixels) {
            if (!ctype_digit((string) \$constraint->maxPixels)) {
                throw new ConstraintDefinitionException(sprintf('\"%s\" is not a valid maximum amount of pixels', \$constraint->maxPixels));
            }

            if (\$pixels > \$constraint->maxPixels) {
                \$this->context->buildViolation(\$constraint->maxPixelsMessage)
                    ->setParameter('";
        // line 156
        echo twig_escape_filter($this->env, (isset($context["pixels"]) || array_key_exists("pixels", $context) ? $context["pixels"] : (function () { throw new RuntimeError('Variable "pixels" does not exist.', 156, $this->source); })()), "html", null, true);
        echo "', \$pixels)
                    ->setParameter('";
        // line 157
        echo twig_escape_filter($this->env, (isset($context["max_pixels"]) || array_key_exists("max_pixels", $context) ? $context["max_pixels"] : (function () { throw new RuntimeError('Variable "max_pixels" does not exist.', 157, $this->source); })()), "html", null, true);
        echo "', \$constraint->maxPixels)
                    ->setParameter('";
        // line 158
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 158, $this->source); })()), "html", null, true);
        echo "', \$height)
                    ->setParameter('";
        // line 159
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 159, $this->source); })()), "html", null, true);
        echo "', \$width)
                    ->setCode(Image::TOO_MANY_PIXEL_ERROR)
                    ->addViolation();
            }
        }

        \$ratio = round(\$width / \$height, 2);

        if (null !== \$constraint->minRatio) {
            if (!is_numeric((string) \$constraint->minRatio)) {
                throw new ConstraintDefinitionException(sprintf('\"%s\" is not a valid minimum ratio', \$constraint->minRatio));
            }

            if (\$ratio < \$constraint->minRatio) {
                \$this->context->buildViolation(\$constraint->minRatioMessage)
                    ->setParameter('";
        // line 174
        echo twig_escape_filter($this->env, (isset($context["ratio"]) || array_key_exists("ratio", $context) ? $context["ratio"] : (function () { throw new RuntimeError('Variable "ratio" does not exist.', 174, $this->source); })()), "html", null, true);
        echo "', \$ratio)
                    ->setParameter('";
        // line 175
        echo twig_escape_filter($this->env, (isset($context["min_ratio"]) || array_key_exists("min_ratio", $context) ? $context["min_ratio"] : (function () { throw new RuntimeError('Variable "min_ratio" does not exist.', 175, $this->source); })()), "html", null, true);
        echo "', \$constraint->minRatio)
                    ->setCode(Image::RATIO_TOO_SMALL_ERROR)
                    ->addViolation();
            }
        }

        if (null !== \$constraint->maxRatio) {
            if (!is_numeric((string) \$constraint->maxRatio)) {
                throw new ConstraintDefinitionException(sprintf('\"%s\" is not a valid maximum ratio', \$constraint->maxRatio));
            }

            if (\$ratio > \$constraint->maxRatio) {
                \$this->context->buildViolation(\$constraint->maxRatioMessage)
                    ->setParameter('";
        // line 188
        echo twig_escape_filter($this->env, (isset($context["ratio"]) || array_key_exists("ratio", $context) ? $context["ratio"] : (function () { throw new RuntimeError('Variable "ratio" does not exist.', 188, $this->source); })()), "html", null, true);
        echo "', \$ratio)
                    ->setParameter('";
        // line 189
        echo twig_escape_filter($this->env, (isset($context["max_ratio"]) || array_key_exists("max_ratio", $context) ? $context["max_ratio"] : (function () { throw new RuntimeError('Variable "max_ratio" does not exist.', 189, $this->source); })()), "html", null, true);
        echo "', \$constraint->maxRatio)
                    ->setCode(Image::RATIO_TOO_BIG_ERROR)
                    ->addViolation();
            }
        }

        if (!\$constraint->allowSquare && \$width == \$height) {
            \$this->context->buildViolation(\$constraint->allowSquareMessage)
                ->setParameter('";
        // line 197
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 197, $this->source); })()), "html", null, true);
        echo "', \$width)
                ->setParameter('";
        // line 198
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 198, $this->source); })()), "html", null, true);
        echo "', \$height)
                ->setCode(Image::SQUARE_NOT_ALLOWED_ERROR)
                ->addViolation();
        }

        if (!\$constraint->allowLandscape && \$width > \$height) {
            \$this->context->buildViolation(\$constraint->allowLandscapeMessage)
                ->setParameter('";
        // line 205
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 205, $this->source); })()), "html", null, true);
        echo "', \$width)
                ->setParameter('";
        // line 206
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 206, $this->source); })()), "html", null, true);
        echo "', \$height)
                ->setCode(Image::LANDSCAPE_NOT_ALLOWED_ERROR)
                ->addViolation();
        }

        if (!\$constraint->allowPortrait && \$width < \$height) {
            \$this->context->buildViolation(\$constraint->allowPortraitMessage)
                ->setParameter('";
        // line 213
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 213, $this->source); })()), "html", null, true);
        echo "', \$width)
                ->setParameter('";
        // line 214
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 214, $this->source); })()), "html", null, true);
        echo "', \$height)
                ->setCode(Image::PORTRAIT_NOT_ALLOWED_ERROR)
                ->addViolation();
        }

        if (\$constraint->detectCorrupted) {
            if (!\\function_exists('imagecreatefromstring')) {
                throw new LogicException('Corrupted images detection requires installed and enabled GD extension');
            }

            \$resource = @imagecreatefromstring(file_get_contents(\$value));

            if (false === \$resource) {
                \$this->context->buildViolation(\$constraint->corruptedMessage)
                    ->setCode(Image::CORRUPTED_IMAGE_ERROR)
                    ->addViolation();

                return;
            }

            imagedestroy(\$resource);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Constraints/ImageValidator.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  333 => 214,  329 => 213,  319 => 206,  315 => 205,  305 => 198,  301 => 197,  290 => 189,  286 => 188,  270 => 175,  266 => 174,  248 => 159,  244 => 158,  240 => 157,  236 => 156,  220 => 143,  216 => 142,  212 => 141,  208 => 140,  190 => 125,  186 => 124,  168 => 109,  164 => 108,  146 => 93,  142 => 92,  124 => 77,  120 => 76,  43 => 1,);
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

use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException;
use Symfony\\Component\\Validator\\Exception\\LogicException;
use Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException;

/**
 * Validates whether a value is a valid image file and is valid
 * against minWidth, maxWidth, minHeight and maxHeight constraints.
 *
 * @author Benjamin Dulau <benjamin.dulau@gmail.com>
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class ImageValidator extends FileValidator
{
    /**
     * {@inheritdoc}
     */
    public function validate(\$value, Constraint \$constraint)
    {
        if (!\$constraint instanceof Image) {
            throw new UnexpectedTypeException(\$constraint, __NAMESPACE__.'\\Image');
        }

        \$violations = \\count(\$this->context->getViolations());

        parent::validate(\$value, \$constraint);

        \$failed = \\count(\$this->context->getViolations()) !== \$violations;

        if (\$failed || null === \$value || '' === \$value) {
            return;
        }

        if (null === \$constraint->minWidth && null === \$constraint->maxWidth
            && null === \$constraint->minHeight && null === \$constraint->maxHeight
            && null === \$constraint->minPixels && null === \$constraint->maxPixels
            && null === \$constraint->minRatio && null === \$constraint->maxRatio
            && \$constraint->allowSquare && \$constraint->allowLandscape && \$constraint->allowPortrait
            && !\$constraint->detectCorrupted) {
            return;
        }

        \$size = @getimagesize(\$value);

        if (empty(\$size) || (0 === \$size[0]) || (0 === \$size[1])) {
            \$this->context->buildViolation(\$constraint->sizeNotDetectedMessage)
                ->setCode(Image::SIZE_NOT_DETECTED_ERROR)
                ->addViolation();

            return;
        }

        \$width = \$size[0];
        \$height = \$size[1];

        if (\$constraint->minWidth) {
            if (!ctype_digit((string) \$constraint->minWidth)) {
                throw new ConstraintDefinitionException(sprintf('\"%s\" is not a valid minimum width.', \$constraint->minWidth));
            }

            if (\$width < \$constraint->minWidth) {
                \$this->context->buildViolation(\$constraint->minWidthMessage)
                    ->setParameter('{{ width }}', \$width)
                    ->setParameter('{{ min_width }}', \$constraint->minWidth)
                    ->setCode(Image::TOO_NARROW_ERROR)
                    ->addViolation();

                return;
            }
        }

        if (\$constraint->maxWidth) {
            if (!ctype_digit((string) \$constraint->maxWidth)) {
                throw new ConstraintDefinitionException(sprintf('\"%s\" is not a valid maximum width.', \$constraint->maxWidth));
            }

            if (\$width > \$constraint->maxWidth) {
                \$this->context->buildViolation(\$constraint->maxWidthMessage)
                    ->setParameter('{{ width }}', \$width)
                    ->setParameter('{{ max_width }}', \$constraint->maxWidth)
                    ->setCode(Image::TOO_WIDE_ERROR)
                    ->addViolation();

                return;
            }
        }

        if (\$constraint->minHeight) {
            if (!ctype_digit((string) \$constraint->minHeight)) {
                throw new ConstraintDefinitionException(sprintf('\"%s\" is not a valid minimum height', \$constraint->minHeight));
            }

            if (\$height < \$constraint->minHeight) {
                \$this->context->buildViolation(\$constraint->minHeightMessage)
                    ->setParameter('{{ height }}', \$height)
                    ->setParameter('{{ min_height }}', \$constraint->minHeight)
                    ->setCode(Image::TOO_LOW_ERROR)
                    ->addViolation();

                return;
            }
        }

        if (\$constraint->maxHeight) {
            if (!ctype_digit((string) \$constraint->maxHeight)) {
                throw new ConstraintDefinitionException(sprintf('\"%s\" is not a valid maximum height', \$constraint->maxHeight));
            }

            if (\$height > \$constraint->maxHeight) {
                \$this->context->buildViolation(\$constraint->maxHeightMessage)
                    ->setParameter('{{ height }}', \$height)
                    ->setParameter('{{ max_height }}', \$constraint->maxHeight)
                    ->setCode(Image::TOO_HIGH_ERROR)
                    ->addViolation();
            }
        }

        \$pixels = \$width * \$height;

        if (null !== \$constraint->minPixels) {
            if (!ctype_digit((string) \$constraint->minPixels)) {
                throw new ConstraintDefinitionException(sprintf('\"%s\" is not a valid minimum amount of pixels', \$constraint->minPixels));
            }

            if (\$pixels < \$constraint->minPixels) {
                \$this->context->buildViolation(\$constraint->minPixelsMessage)
                    ->setParameter('{{ pixels }}', \$pixels)
                    ->setParameter('{{ min_pixels }}', \$constraint->minPixels)
                    ->setParameter('{{ height }}', \$height)
                    ->setParameter('{{ width }}', \$width)
                    ->setCode(Image::TOO_FEW_PIXEL_ERROR)
                    ->addViolation();
            }
        }

        if (null !== \$constraint->maxPixels) {
            if (!ctype_digit((string) \$constraint->maxPixels)) {
                throw new ConstraintDefinitionException(sprintf('\"%s\" is not a valid maximum amount of pixels', \$constraint->maxPixels));
            }

            if (\$pixels > \$constraint->maxPixels) {
                \$this->context->buildViolation(\$constraint->maxPixelsMessage)
                    ->setParameter('{{ pixels }}', \$pixels)
                    ->setParameter('{{ max_pixels }}', \$constraint->maxPixels)
                    ->setParameter('{{ height }}', \$height)
                    ->setParameter('{{ width }}', \$width)
                    ->setCode(Image::TOO_MANY_PIXEL_ERROR)
                    ->addViolation();
            }
        }

        \$ratio = round(\$width / \$height, 2);

        if (null !== \$constraint->minRatio) {
            if (!is_numeric((string) \$constraint->minRatio)) {
                throw new ConstraintDefinitionException(sprintf('\"%s\" is not a valid minimum ratio', \$constraint->minRatio));
            }

            if (\$ratio < \$constraint->minRatio) {
                \$this->context->buildViolation(\$constraint->minRatioMessage)
                    ->setParameter('{{ ratio }}', \$ratio)
                    ->setParameter('{{ min_ratio }}', \$constraint->minRatio)
                    ->setCode(Image::RATIO_TOO_SMALL_ERROR)
                    ->addViolation();
            }
        }

        if (null !== \$constraint->maxRatio) {
            if (!is_numeric((string) \$constraint->maxRatio)) {
                throw new ConstraintDefinitionException(sprintf('\"%s\" is not a valid maximum ratio', \$constraint->maxRatio));
            }

            if (\$ratio > \$constraint->maxRatio) {
                \$this->context->buildViolation(\$constraint->maxRatioMessage)
                    ->setParameter('{{ ratio }}', \$ratio)
                    ->setParameter('{{ max_ratio }}', \$constraint->maxRatio)
                    ->setCode(Image::RATIO_TOO_BIG_ERROR)
                    ->addViolation();
            }
        }

        if (!\$constraint->allowSquare && \$width == \$height) {
            \$this->context->buildViolation(\$constraint->allowSquareMessage)
                ->setParameter('{{ width }}', \$width)
                ->setParameter('{{ height }}', \$height)
                ->setCode(Image::SQUARE_NOT_ALLOWED_ERROR)
                ->addViolation();
        }

        if (!\$constraint->allowLandscape && \$width > \$height) {
            \$this->context->buildViolation(\$constraint->allowLandscapeMessage)
                ->setParameter('{{ width }}', \$width)
                ->setParameter('{{ height }}', \$height)
                ->setCode(Image::LANDSCAPE_NOT_ALLOWED_ERROR)
                ->addViolation();
        }

        if (!\$constraint->allowPortrait && \$width < \$height) {
            \$this->context->buildViolation(\$constraint->allowPortraitMessage)
                ->setParameter('{{ width }}', \$width)
                ->setParameter('{{ height }}', \$height)
                ->setCode(Image::PORTRAIT_NOT_ALLOWED_ERROR)
                ->addViolation();
        }

        if (\$constraint->detectCorrupted) {
            if (!\\function_exists('imagecreatefromstring')) {
                throw new LogicException('Corrupted images detection requires installed and enabled GD extension');
            }

            \$resource = @imagecreatefromstring(file_get_contents(\$value));

            if (false === \$resource) {
                \$this->context->buildViolation(\$constraint->corruptedMessage)
                    ->setCode(Image::CORRUPTED_IMAGE_ERROR)
                    ->addViolation();

                return;
            }

            imagedestroy(\$resource);
        }
    }
}
", "vendor/symfony/validator/Constraints/ImageValidator.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Constraints/ImageValidator.php");
    }
}
