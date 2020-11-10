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

/* vendor/symfony/validator/Tests/Constraints/ImageValidatorTest.php */
class __TwigTemplate_486be0d7ae4fb8838ba1424a5e2b7ed7b03f05c0861f8d4f925e822f519854c4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/ImageValidatorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/ImageValidatorTest.php"));

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

namespace Symfony\\Component\\Validator\\Tests\\Constraints;

use Symfony\\Component\\Validator\\Constraints\\Image;
use Symfony\\Component\\Validator\\Constraints\\ImageValidator;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;

/**
 * @requires extension fileinfo
 */
class ImageValidatorTest extends ConstraintValidatorTestCase
{
    protected \$context;

    /**
     * @var ImageValidator
     */
    protected \$validator;

    protected \$path;
    protected \$image;
    protected \$imageLandscape;
    protected \$imagePortrait;
    protected \$image4By3;
    protected \$imageCorrupted;

    protected function createValidator()
    {
        return new ImageValidator();
    }

    protected function setUp(): void
    {
        parent::setUp();

        \$this->image = __DIR__.'/Fixtures/test.gif';
        \$this->imageLandscape = __DIR__.'/Fixtures/test_landscape.gif';
        \$this->imagePortrait = __DIR__.'/Fixtures/test_portrait.gif';
        \$this->image4By3 = __DIR__.'/Fixtures/test_4by3.gif';
        \$this->imageCorrupted = __DIR__.'/Fixtures/test_corrupted.gif';
    }

    public function testNullIsValid()
    {
        \$this->validator->validate(null, new Image());

        \$this->assertNoViolation();
    }

    public function testEmptyStringIsValid()
    {
        \$this->validator->validate('', new Image());

        \$this->assertNoViolation();
    }

    public function testValidImage()
    {
        \$this->validator->validate(\$this->image, new Image());

        \$this->assertNoViolation();
    }

    public function testFileNotFound()
    {
        // Check that the logic from FileValidator still works
        \$constraint = new Image([
            'notFoundMessage' => 'myMessage',
        ]);

        \$this->validator->validate('foobar', \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 84, $this->source); })()), "html", null, true);
        echo "', '\"foobar\"')
            ->setCode(Image::NOT_FOUND_ERROR)
            ->assertRaised();
    }

    public function testValidSize()
    {
        \$constraint = new Image([
            'minWidth' => 1,
            'maxWidth' => 2,
            'minHeight' => 1,
            'maxHeight' => 2,
        ]);

        \$this->validator->validate(\$this->image, \$constraint);

        \$this->assertNoViolation();
    }

    public function testWidthTooSmall()
    {
        \$constraint = new Image([
            'minWidth' => 3,
            'minWidthMessage' => 'myMessage',
        ]);

        \$this->validator->validate(\$this->image, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 113, $this->source); })()), "html", null, true);
        echo "', '2')
            ->setParameter('";
        // line 114
        echo twig_escape_filter($this->env, (isset($context["min_width"]) || array_key_exists("min_width", $context) ? $context["min_width"] : (function () { throw new RuntimeError('Variable "min_width" does not exist.', 114, $this->source); })()), "html", null, true);
        echo "', '3')
            ->setCode(Image::TOO_NARROW_ERROR)
            ->assertRaised();
    }

    public function testWidthTooBig()
    {
        \$constraint = new Image([
            'maxWidth' => 1,
            'maxWidthMessage' => 'myMessage',
        ]);

        \$this->validator->validate(\$this->image, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 129
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 129, $this->source); })()), "html", null, true);
        echo "', '2')
            ->setParameter('";
        // line 130
        echo twig_escape_filter($this->env, (isset($context["max_width"]) || array_key_exists("max_width", $context) ? $context["max_width"] : (function () { throw new RuntimeError('Variable "max_width" does not exist.', 130, $this->source); })()), "html", null, true);
        echo "', '1')
            ->setCode(Image::TOO_WIDE_ERROR)
            ->assertRaised();
    }

    public function testHeightTooSmall()
    {
        \$constraint = new Image([
            'minHeight' => 3,
            'minHeightMessage' => 'myMessage',
        ]);

        \$this->validator->validate(\$this->image, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 145
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 145, $this->source); })()), "html", null, true);
        echo "', '2')
            ->setParameter('";
        // line 146
        echo twig_escape_filter($this->env, (isset($context["min_height"]) || array_key_exists("min_height", $context) ? $context["min_height"] : (function () { throw new RuntimeError('Variable "min_height" does not exist.', 146, $this->source); })()), "html", null, true);
        echo "', '3')
            ->setCode(Image::TOO_LOW_ERROR)
            ->assertRaised();
    }

    public function testHeightTooBig()
    {
        \$constraint = new Image([
            'maxHeight' => 1,
            'maxHeightMessage' => 'myMessage',
        ]);

        \$this->validator->validate(\$this->image, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 161
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 161, $this->source); })()), "html", null, true);
        echo "', '2')
            ->setParameter('";
        // line 162
        echo twig_escape_filter($this->env, (isset($context["max_height"]) || array_key_exists("max_height", $context) ? $context["max_height"] : (function () { throw new RuntimeError('Variable "max_height" does not exist.', 162, $this->source); })()), "html", null, true);
        echo "', '1')
            ->setCode(Image::TOO_HIGH_ERROR)
            ->assertRaised();
    }

    public function testPixelsTooFew()
    {
        \$constraint = new Image([
            'minPixels' => 5,
            'minPixelsMessage' => 'myMessage',
        ]);

        \$this->validator->validate(\$this->image, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 177
        echo twig_escape_filter($this->env, (isset($context["pixels"]) || array_key_exists("pixels", $context) ? $context["pixels"] : (function () { throw new RuntimeError('Variable "pixels" does not exist.', 177, $this->source); })()), "html", null, true);
        echo "', '4')
            ->setParameter('";
        // line 178
        echo twig_escape_filter($this->env, (isset($context["min_pixels"]) || array_key_exists("min_pixels", $context) ? $context["min_pixels"] : (function () { throw new RuntimeError('Variable "min_pixels" does not exist.', 178, $this->source); })()), "html", null, true);
        echo "', '5')
            ->setParameter('";
        // line 179
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 179, $this->source); })()), "html", null, true);
        echo "', '2')
            ->setParameter('";
        // line 180
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 180, $this->source); })()), "html", null, true);
        echo "', '2')
            ->setCode(Image::TOO_FEW_PIXEL_ERROR)
            ->assertRaised();
    }

    public function testPixelsTooMany()
    {
        \$constraint = new Image([
            'maxPixels' => 3,
            'maxPixelsMessage' => 'myMessage',
        ]);

        \$this->validator->validate(\$this->image, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 195
        echo twig_escape_filter($this->env, (isset($context["pixels"]) || array_key_exists("pixels", $context) ? $context["pixels"] : (function () { throw new RuntimeError('Variable "pixels" does not exist.', 195, $this->source); })()), "html", null, true);
        echo "', '4')
            ->setParameter('";
        // line 196
        echo twig_escape_filter($this->env, (isset($context["max_pixels"]) || array_key_exists("max_pixels", $context) ? $context["max_pixels"] : (function () { throw new RuntimeError('Variable "max_pixels" does not exist.', 196, $this->source); })()), "html", null, true);
        echo "', '3')
            ->setParameter('";
        // line 197
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 197, $this->source); })()), "html", null, true);
        echo "', '2')
            ->setParameter('";
        // line 198
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 198, $this->source); })()), "html", null, true);
        echo "', '2')
            ->setCode(Image::TOO_MANY_PIXEL_ERROR)
            ->assertRaised();
    }

    public function testInvalidMinWidth()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        \$constraint = new Image([
            'minWidth' => '1abc',
        ]);

        \$this->validator->validate(\$this->image, \$constraint);
    }

    public function testInvalidMaxWidth()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        \$constraint = new Image([
            'maxWidth' => '1abc',
        ]);

        \$this->validator->validate(\$this->image, \$constraint);
    }

    public function testInvalidMinHeight()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        \$constraint = new Image([
            'minHeight' => '1abc',
        ]);

        \$this->validator->validate(\$this->image, \$constraint);
    }

    public function testInvalidMaxHeight()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        \$constraint = new Image([
            'maxHeight' => '1abc',
        ]);

        \$this->validator->validate(\$this->image, \$constraint);
    }

    public function testInvalidMinPixels()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        \$constraint = new Image([
            'minPixels' => '1abc',
        ]);

        \$this->validator->validate(\$this->image, \$constraint);
    }

    public function testInvalidMaxPixels()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        \$constraint = new Image([
            'maxPixels' => '1abc',
        ]);

        \$this->validator->validate(\$this->image, \$constraint);
    }

    public function testRatioTooSmall()
    {
        \$constraint = new Image([
            'minRatio' => 2,
            'minRatioMessage' => 'myMessage',
        ]);

        \$this->validator->validate(\$this->image, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 273
        echo twig_escape_filter($this->env, (isset($context["ratio"]) || array_key_exists("ratio", $context) ? $context["ratio"] : (function () { throw new RuntimeError('Variable "ratio" does not exist.', 273, $this->source); })()), "html", null, true);
        echo "', 1)
            ->setParameter('";
        // line 274
        echo twig_escape_filter($this->env, (isset($context["min_ratio"]) || array_key_exists("min_ratio", $context) ? $context["min_ratio"] : (function () { throw new RuntimeError('Variable "min_ratio" does not exist.', 274, $this->source); })()), "html", null, true);
        echo "', 2)
            ->setCode(Image::RATIO_TOO_SMALL_ERROR)
            ->assertRaised();
    }

    public function testRatioTooBig()
    {
        \$constraint = new Image([
            'maxRatio' => 0.5,
            'maxRatioMessage' => 'myMessage',
        ]);

        \$this->validator->validate(\$this->image, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 289
        echo twig_escape_filter($this->env, (isset($context["ratio"]) || array_key_exists("ratio", $context) ? $context["ratio"] : (function () { throw new RuntimeError('Variable "ratio" does not exist.', 289, $this->source); })()), "html", null, true);
        echo "', 1)
            ->setParameter('";
        // line 290
        echo twig_escape_filter($this->env, (isset($context["max_ratio"]) || array_key_exists("max_ratio", $context) ? $context["max_ratio"] : (function () { throw new RuntimeError('Variable "max_ratio" does not exist.', 290, $this->source); })()), "html", null, true);
        echo "', 0.5)
            ->setCode(Image::RATIO_TOO_BIG_ERROR)
            ->assertRaised();
    }

    public function testMaxRatioUsesTwoDecimalsOnly()
    {
        \$constraint = new Image([
            'maxRatio' => 1.33,
        ]);

        \$this->validator->validate(\$this->image4By3, \$constraint);

        \$this->assertNoViolation();
    }

    public function testInvalidMinRatio()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        \$constraint = new Image([
            'minRatio' => '1abc',
        ]);

        \$this->validator->validate(\$this->image, \$constraint);
    }

    public function testInvalidMaxRatio()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        \$constraint = new Image([
            'maxRatio' => '1abc',
        ]);

        \$this->validator->validate(\$this->image, \$constraint);
    }

    public function testSquareNotAllowed()
    {
        \$constraint = new Image([
            'allowSquare' => false,
            'allowSquareMessage' => 'myMessage',
        ]);

        \$this->validator->validate(\$this->image, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 336
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 336, $this->source); })()), "html", null, true);
        echo "', 2)
            ->setParameter('";
        // line 337
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 337, $this->source); })()), "html", null, true);
        echo "', 2)
            ->setCode(Image::SQUARE_NOT_ALLOWED_ERROR)
            ->assertRaised();
    }

    public function testLandscapeNotAllowed()
    {
        \$constraint = new Image([
            'allowLandscape' => false,
            'allowLandscapeMessage' => 'myMessage',
        ]);

        \$this->validator->validate(\$this->imageLandscape, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 352
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 352, $this->source); })()), "html", null, true);
        echo "', 2)
            ->setParameter('";
        // line 353
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 353, $this->source); })()), "html", null, true);
        echo "', 1)
            ->setCode(Image::LANDSCAPE_NOT_ALLOWED_ERROR)
            ->assertRaised();
    }

    public function testPortraitNotAllowed()
    {
        \$constraint = new Image([
            'allowPortrait' => false,
            'allowPortraitMessage' => 'myMessage',
        ]);

        \$this->validator->validate(\$this->imagePortrait, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 368
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 368, $this->source); })()), "html", null, true);
        echo "', 1)
            ->setParameter('";
        // line 369
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 369, $this->source); })()), "html", null, true);
        echo "', 2)
            ->setCode(Image::PORTRAIT_NOT_ALLOWED_ERROR)
            ->assertRaised();
    }

    public function testCorrupted()
    {
        if (!\\function_exists('imagecreatefromstring')) {
            \$this->markTestSkipped('This test require GD extension');
        }

        \$constraint = new Image([
            'detectCorrupted' => true,
            'corruptedMessage' => 'myMessage',
        ]);

        \$this->validator->validate(\$this->image, \$constraint);

        \$this->assertNoViolation();

        \$this->validator->validate(\$this->imageCorrupted, \$constraint);

        \$this->buildViolation('myMessage')
            ->setCode(Image::CORRUPTED_IMAGE_ERROR)
            ->assertRaised();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Constraints/ImageValidatorTest.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  491 => 369,  487 => 368,  469 => 353,  465 => 352,  447 => 337,  443 => 336,  394 => 290,  390 => 289,  372 => 274,  368 => 273,  290 => 198,  286 => 197,  282 => 196,  278 => 195,  260 => 180,  256 => 179,  252 => 178,  248 => 177,  230 => 162,  226 => 161,  208 => 146,  204 => 145,  186 => 130,  182 => 129,  164 => 114,  160 => 113,  128 => 84,  43 => 1,);
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

namespace Symfony\\Component\\Validator\\Tests\\Constraints;

use Symfony\\Component\\Validator\\Constraints\\Image;
use Symfony\\Component\\Validator\\Constraints\\ImageValidator;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;

/**
 * @requires extension fileinfo
 */
class ImageValidatorTest extends ConstraintValidatorTestCase
{
    protected \$context;

    /**
     * @var ImageValidator
     */
    protected \$validator;

    protected \$path;
    protected \$image;
    protected \$imageLandscape;
    protected \$imagePortrait;
    protected \$image4By3;
    protected \$imageCorrupted;

    protected function createValidator()
    {
        return new ImageValidator();
    }

    protected function setUp(): void
    {
        parent::setUp();

        \$this->image = __DIR__.'/Fixtures/test.gif';
        \$this->imageLandscape = __DIR__.'/Fixtures/test_landscape.gif';
        \$this->imagePortrait = __DIR__.'/Fixtures/test_portrait.gif';
        \$this->image4By3 = __DIR__.'/Fixtures/test_4by3.gif';
        \$this->imageCorrupted = __DIR__.'/Fixtures/test_corrupted.gif';
    }

    public function testNullIsValid()
    {
        \$this->validator->validate(null, new Image());

        \$this->assertNoViolation();
    }

    public function testEmptyStringIsValid()
    {
        \$this->validator->validate('', new Image());

        \$this->assertNoViolation();
    }

    public function testValidImage()
    {
        \$this->validator->validate(\$this->image, new Image());

        \$this->assertNoViolation();
    }

    public function testFileNotFound()
    {
        // Check that the logic from FileValidator still works
        \$constraint = new Image([
            'notFoundMessage' => 'myMessage',
        ]);

        \$this->validator->validate('foobar', \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ file }}', '\"foobar\"')
            ->setCode(Image::NOT_FOUND_ERROR)
            ->assertRaised();
    }

    public function testValidSize()
    {
        \$constraint = new Image([
            'minWidth' => 1,
            'maxWidth' => 2,
            'minHeight' => 1,
            'maxHeight' => 2,
        ]);

        \$this->validator->validate(\$this->image, \$constraint);

        \$this->assertNoViolation();
    }

    public function testWidthTooSmall()
    {
        \$constraint = new Image([
            'minWidth' => 3,
            'minWidthMessage' => 'myMessage',
        ]);

        \$this->validator->validate(\$this->image, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ width }}', '2')
            ->setParameter('{{ min_width }}', '3')
            ->setCode(Image::TOO_NARROW_ERROR)
            ->assertRaised();
    }

    public function testWidthTooBig()
    {
        \$constraint = new Image([
            'maxWidth' => 1,
            'maxWidthMessage' => 'myMessage',
        ]);

        \$this->validator->validate(\$this->image, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ width }}', '2')
            ->setParameter('{{ max_width }}', '1')
            ->setCode(Image::TOO_WIDE_ERROR)
            ->assertRaised();
    }

    public function testHeightTooSmall()
    {
        \$constraint = new Image([
            'minHeight' => 3,
            'minHeightMessage' => 'myMessage',
        ]);

        \$this->validator->validate(\$this->image, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ height }}', '2')
            ->setParameter('{{ min_height }}', '3')
            ->setCode(Image::TOO_LOW_ERROR)
            ->assertRaised();
    }

    public function testHeightTooBig()
    {
        \$constraint = new Image([
            'maxHeight' => 1,
            'maxHeightMessage' => 'myMessage',
        ]);

        \$this->validator->validate(\$this->image, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ height }}', '2')
            ->setParameter('{{ max_height }}', '1')
            ->setCode(Image::TOO_HIGH_ERROR)
            ->assertRaised();
    }

    public function testPixelsTooFew()
    {
        \$constraint = new Image([
            'minPixels' => 5,
            'minPixelsMessage' => 'myMessage',
        ]);

        \$this->validator->validate(\$this->image, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ pixels }}', '4')
            ->setParameter('{{ min_pixels }}', '5')
            ->setParameter('{{ height }}', '2')
            ->setParameter('{{ width }}', '2')
            ->setCode(Image::TOO_FEW_PIXEL_ERROR)
            ->assertRaised();
    }

    public function testPixelsTooMany()
    {
        \$constraint = new Image([
            'maxPixels' => 3,
            'maxPixelsMessage' => 'myMessage',
        ]);

        \$this->validator->validate(\$this->image, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ pixels }}', '4')
            ->setParameter('{{ max_pixels }}', '3')
            ->setParameter('{{ height }}', '2')
            ->setParameter('{{ width }}', '2')
            ->setCode(Image::TOO_MANY_PIXEL_ERROR)
            ->assertRaised();
    }

    public function testInvalidMinWidth()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        \$constraint = new Image([
            'minWidth' => '1abc',
        ]);

        \$this->validator->validate(\$this->image, \$constraint);
    }

    public function testInvalidMaxWidth()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        \$constraint = new Image([
            'maxWidth' => '1abc',
        ]);

        \$this->validator->validate(\$this->image, \$constraint);
    }

    public function testInvalidMinHeight()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        \$constraint = new Image([
            'minHeight' => '1abc',
        ]);

        \$this->validator->validate(\$this->image, \$constraint);
    }

    public function testInvalidMaxHeight()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        \$constraint = new Image([
            'maxHeight' => '1abc',
        ]);

        \$this->validator->validate(\$this->image, \$constraint);
    }

    public function testInvalidMinPixels()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        \$constraint = new Image([
            'minPixels' => '1abc',
        ]);

        \$this->validator->validate(\$this->image, \$constraint);
    }

    public function testInvalidMaxPixels()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        \$constraint = new Image([
            'maxPixels' => '1abc',
        ]);

        \$this->validator->validate(\$this->image, \$constraint);
    }

    public function testRatioTooSmall()
    {
        \$constraint = new Image([
            'minRatio' => 2,
            'minRatioMessage' => 'myMessage',
        ]);

        \$this->validator->validate(\$this->image, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ ratio }}', 1)
            ->setParameter('{{ min_ratio }}', 2)
            ->setCode(Image::RATIO_TOO_SMALL_ERROR)
            ->assertRaised();
    }

    public function testRatioTooBig()
    {
        \$constraint = new Image([
            'maxRatio' => 0.5,
            'maxRatioMessage' => 'myMessage',
        ]);

        \$this->validator->validate(\$this->image, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ ratio }}', 1)
            ->setParameter('{{ max_ratio }}', 0.5)
            ->setCode(Image::RATIO_TOO_BIG_ERROR)
            ->assertRaised();
    }

    public function testMaxRatioUsesTwoDecimalsOnly()
    {
        \$constraint = new Image([
            'maxRatio' => 1.33,
        ]);

        \$this->validator->validate(\$this->image4By3, \$constraint);

        \$this->assertNoViolation();
    }

    public function testInvalidMinRatio()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        \$constraint = new Image([
            'minRatio' => '1abc',
        ]);

        \$this->validator->validate(\$this->image, \$constraint);
    }

    public function testInvalidMaxRatio()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        \$constraint = new Image([
            'maxRatio' => '1abc',
        ]);

        \$this->validator->validate(\$this->image, \$constraint);
    }

    public function testSquareNotAllowed()
    {
        \$constraint = new Image([
            'allowSquare' => false,
            'allowSquareMessage' => 'myMessage',
        ]);

        \$this->validator->validate(\$this->image, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ width }}', 2)
            ->setParameter('{{ height }}', 2)
            ->setCode(Image::SQUARE_NOT_ALLOWED_ERROR)
            ->assertRaised();
    }

    public function testLandscapeNotAllowed()
    {
        \$constraint = new Image([
            'allowLandscape' => false,
            'allowLandscapeMessage' => 'myMessage',
        ]);

        \$this->validator->validate(\$this->imageLandscape, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ width }}', 2)
            ->setParameter('{{ height }}', 1)
            ->setCode(Image::LANDSCAPE_NOT_ALLOWED_ERROR)
            ->assertRaised();
    }

    public function testPortraitNotAllowed()
    {
        \$constraint = new Image([
            'allowPortrait' => false,
            'allowPortraitMessage' => 'myMessage',
        ]);

        \$this->validator->validate(\$this->imagePortrait, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ width }}', 1)
            ->setParameter('{{ height }}', 2)
            ->setCode(Image::PORTRAIT_NOT_ALLOWED_ERROR)
            ->assertRaised();
    }

    public function testCorrupted()
    {
        if (!\\function_exists('imagecreatefromstring')) {
            \$this->markTestSkipped('This test require GD extension');
        }

        \$constraint = new Image([
            'detectCorrupted' => true,
            'corruptedMessage' => 'myMessage',
        ]);

        \$this->validator->validate(\$this->image, \$constraint);

        \$this->assertNoViolation();

        \$this->validator->validate(\$this->imageCorrupted, \$constraint);

        \$this->buildViolation('myMessage')
            ->setCode(Image::CORRUPTED_IMAGE_ERROR)
            ->assertRaised();
    }
}
", "vendor/symfony/validator/Tests/Constraints/ImageValidatorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Constraints/ImageValidatorTest.php");
    }
}
