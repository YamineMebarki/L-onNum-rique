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

/* vendor/fzaninotto/faker/test/Faker/Provider/ImageTest.php */
class __TwigTemplate_e906c694f8fefbdc11a8338f2b5d69f05bfbf2a35c891be0e9c2f4797e5dfbc5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/ImageTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/ImageTest.php"));

        // line 1
        echo "<?php

namespace Faker\\Test\\Provider;

use Faker\\Provider\\Image;
use PHPUnit\\Framework\\TestCase;

class ImageTest extends TestCase
{
    public function testImageUrlUses640x680AsTheDefaultSize()
    {
        \$this->assertRegExp('#^https://lorempixel.com/640/480/#', Image::imageUrl());
    }

    public function testImageUrlAcceptsCustomWidthAndHeight()
    {
        \$this->assertRegExp('#^https://lorempixel.com/800/400/#', Image::imageUrl(800, 400));
    }

    public function testImageUrlAcceptsCustomCategory()
    {
        \$this->assertRegExp('#^https://lorempixel.com/800/400/nature/#', Image::imageUrl(800, 400, 'nature'));
    }

    public function testImageUrlAcceptsCustomText()
    {
        \$this->assertRegExp('#^https://lorempixel.com/800/400/nature/Faker#', Image::imageUrl(800, 400, 'nature', false, 'Faker'));
    }

    public function testImageUrlAddsARandomGetParameterByDefault()
    {
        \$url = Image::imageUrl(800, 400);
        \$splitUrl = preg_split('/\\?/', \$url);

        \$this->assertEquals(count(\$splitUrl), 2);
        \$this->assertRegexp('#\\d{5}#', \$splitUrl[1]);
    }

    /**
     * @expectedException \\InvalidArgumentException
     */
    public function testUrlWithDimensionsAndBadCategory()
    {
        Image::imageUrl(800, 400, 'bullhonky');
    }

    public function testDownloadWithDefaults()
    {
        \$url = \"http://lorempixel.com/\";
        \$curlPing = curl_init(\$url);
        curl_setopt(\$curlPing, CURLOPT_TIMEOUT, 5);
        curl_setopt(\$curlPing, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt(\$curlPing, CURLOPT_RETURNTRANSFER, true);
        \$data = curl_exec(\$curlPing);
        \$httpCode = curl_getinfo(\$curlPing, CURLINFO_HTTP_CODE);
        curl_close(\$curlPing);

        if (\$httpCode < 200 | \$httpCode > 300) {
            \$this->markTestSkipped(\"LoremPixel is offline, skipping image download\");
        }

        \$file = Image::image(sys_get_temp_dir());
        \$this->assertFileExists(\$file);
        if (function_exists('getimagesize')) {
            list(\$width, \$height, \$type, \$attr) = getimagesize(\$file);
            \$this->assertEquals(640, \$width);
            \$this->assertEquals(480, \$height);
            \$this->assertEquals(constant('IMAGETYPE_JPEG'), \$type);
        } else {
            \$this->assertEquals('jpg', pathinfo(\$file, PATHINFO_EXTENSION));
        }
        if (file_exists(\$file)) {
            unlink(\$file);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/Provider/ImageTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Test\\Provider;

use Faker\\Provider\\Image;
use PHPUnit\\Framework\\TestCase;

class ImageTest extends TestCase
{
    public function testImageUrlUses640x680AsTheDefaultSize()
    {
        \$this->assertRegExp('#^https://lorempixel.com/640/480/#', Image::imageUrl());
    }

    public function testImageUrlAcceptsCustomWidthAndHeight()
    {
        \$this->assertRegExp('#^https://lorempixel.com/800/400/#', Image::imageUrl(800, 400));
    }

    public function testImageUrlAcceptsCustomCategory()
    {
        \$this->assertRegExp('#^https://lorempixel.com/800/400/nature/#', Image::imageUrl(800, 400, 'nature'));
    }

    public function testImageUrlAcceptsCustomText()
    {
        \$this->assertRegExp('#^https://lorempixel.com/800/400/nature/Faker#', Image::imageUrl(800, 400, 'nature', false, 'Faker'));
    }

    public function testImageUrlAddsARandomGetParameterByDefault()
    {
        \$url = Image::imageUrl(800, 400);
        \$splitUrl = preg_split('/\\?/', \$url);

        \$this->assertEquals(count(\$splitUrl), 2);
        \$this->assertRegexp('#\\d{5}#', \$splitUrl[1]);
    }

    /**
     * @expectedException \\InvalidArgumentException
     */
    public function testUrlWithDimensionsAndBadCategory()
    {
        Image::imageUrl(800, 400, 'bullhonky');
    }

    public function testDownloadWithDefaults()
    {
        \$url = \"http://lorempixel.com/\";
        \$curlPing = curl_init(\$url);
        curl_setopt(\$curlPing, CURLOPT_TIMEOUT, 5);
        curl_setopt(\$curlPing, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt(\$curlPing, CURLOPT_RETURNTRANSFER, true);
        \$data = curl_exec(\$curlPing);
        \$httpCode = curl_getinfo(\$curlPing, CURLINFO_HTTP_CODE);
        curl_close(\$curlPing);

        if (\$httpCode < 200 | \$httpCode > 300) {
            \$this->markTestSkipped(\"LoremPixel is offline, skipping image download\");
        }

        \$file = Image::image(sys_get_temp_dir());
        \$this->assertFileExists(\$file);
        if (function_exists('getimagesize')) {
            list(\$width, \$height, \$type, \$attr) = getimagesize(\$file);
            \$this->assertEquals(640, \$width);
            \$this->assertEquals(480, \$height);
            \$this->assertEquals(constant('IMAGETYPE_JPEG'), \$type);
        } else {
            \$this->assertEquals('jpg', pathinfo(\$file, PATHINFO_EXTENSION));
        }
        if (file_exists(\$file)) {
            unlink(\$file);
        }
    }
}
", "vendor/fzaninotto/faker/test/Faker/Provider/ImageTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Provider/ImageTest.php");
    }
}
