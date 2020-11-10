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

/* vendor/fzaninotto/faker/test/Faker/Provider/ColorTest.php */
class __TwigTemplate_0fc1a8b9fcea614b0d5c687e396ad36232106138bed405311ddf70a5698087c9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/ColorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/ColorTest.php"));

        // line 1
        echo "<?php

namespace Faker\\Test\\Provider;

use Faker\\Provider\\Color;
use PHPUnit\\Framework\\TestCase;

class ColorTest extends TestCase
{

    public function testHexColor()
    {
        \$this->assertRegExp('/^#[a-f0-9]{6}\$/i', Color::hexColor());
    }

    public function testSafeHexColor()
    {
        \$this->assertRegExp('/^#[a-f0-9]{6}\$/i', Color::safeHexColor());
    }

    public function testRgbColorAsArray()
    {
        \$this->assertEquals(3, count(Color::rgbColorAsArray()));
    }

    public function testRgbColor()
    {
        \$regexp = '([01]?[0-9]?[0-9]|2[0-4][0-9]|25[0-5])';
        \$this->assertRegExp('/^' . \$regexp . ',' . \$regexp . ',' . \$regexp . '\$/i', Color::rgbColor());
    }

    public function testRgbCssColor()
    {
        \$regexp = '([01]?[0-9]?[0-9]|2[0-4][0-9]|25[0-5])';
        \$this->assertRegExp('/^rgb\\(' . \$regexp . ',' . \$regexp . ',' . \$regexp . '\\)\$/i', Color::rgbCssColor());
    }

    public function testRgbaCssColor()
    {
        \$regexp = '([01]?[0-9]?[0-9]|2[0-4][0-9]|25[0-5])';
        \$regexpAlpha = '([01]?(\\.\\d+)?)';
        \$this->assertRegExp('/^rgba\\(' . \$regexp . ',' . \$regexp . ',' . \$regexp . ',' . \$regexpAlpha . '\\)\$/i', Color::rgbaCssColor());
    }

    public function testSafeColorName()
    {
        \$this->assertRegExp('/^[\\w]+\$/', Color::safeColorName());
    }

    public function testColorName()
    {
        \$this->assertRegExp('/^[\\w]+\$/', Color::colorName());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/Provider/ColorTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Test\\Provider;

use Faker\\Provider\\Color;
use PHPUnit\\Framework\\TestCase;

class ColorTest extends TestCase
{

    public function testHexColor()
    {
        \$this->assertRegExp('/^#[a-f0-9]{6}\$/i', Color::hexColor());
    }

    public function testSafeHexColor()
    {
        \$this->assertRegExp('/^#[a-f0-9]{6}\$/i', Color::safeHexColor());
    }

    public function testRgbColorAsArray()
    {
        \$this->assertEquals(3, count(Color::rgbColorAsArray()));
    }

    public function testRgbColor()
    {
        \$regexp = '([01]?[0-9]?[0-9]|2[0-4][0-9]|25[0-5])';
        \$this->assertRegExp('/^' . \$regexp . ',' . \$regexp . ',' . \$regexp . '\$/i', Color::rgbColor());
    }

    public function testRgbCssColor()
    {
        \$regexp = '([01]?[0-9]?[0-9]|2[0-4][0-9]|25[0-5])';
        \$this->assertRegExp('/^rgb\\(' . \$regexp . ',' . \$regexp . ',' . \$regexp . '\\)\$/i', Color::rgbCssColor());
    }

    public function testRgbaCssColor()
    {
        \$regexp = '([01]?[0-9]?[0-9]|2[0-4][0-9]|25[0-5])';
        \$regexpAlpha = '([01]?(\\.\\d+)?)';
        \$this->assertRegExp('/^rgba\\(' . \$regexp . ',' . \$regexp . ',' . \$regexp . ',' . \$regexpAlpha . '\\)\$/i', Color::rgbaCssColor());
    }

    public function testSafeColorName()
    {
        \$this->assertRegExp('/^[\\w]+\$/', Color::safeColorName());
    }

    public function testColorName()
    {
        \$this->assertRegExp('/^[\\w]+\$/', Color::colorName());
    }
}
", "vendor/fzaninotto/faker/test/Faker/Provider/ColorTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Provider/ColorTest.php");
    }
}
