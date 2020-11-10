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

/* vendor/fzaninotto/faker/test/Faker/Provider/BarcodeTest.php */
class __TwigTemplate_83805b90c4378865ddbec6165fa433392367e7235f3931411aadbf05ea2d43b4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/BarcodeTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/BarcodeTest.php"));

        // line 1
        echo "<?php

namespace Faker\\Test\\Provider;

use Faker\\Generator;
use Faker\\Provider\\Barcode;
use PHPUnit\\Framework\\TestCase;

class BarcodeTest extends TestCase
{
    private \$faker;

    public function setUp()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Barcode(\$faker));
        \$faker->seed(0);
        \$this->faker = \$faker;
    }

    public function testEan8()
    {
        \$code = \$this->faker->ean8();
        \$this->assertRegExp('/^\\d{8}\$/i', \$code);
        \$codeWithoutChecksum = substr(\$code, 0, -1);
        \$checksum = substr(\$code, -1);
        \$this->assertEquals(TestableBarcode::eanChecksum(\$codeWithoutChecksum), \$checksum);
    }

    public function testEan13()
    {
        \$code = \$this->faker->ean13();
        \$this->assertRegExp('/^\\d{13}\$/i', \$code);
        \$codeWithoutChecksum = substr(\$code, 0, -1);
        \$checksum = substr(\$code, -1);
        \$this->assertEquals(TestableBarcode::eanChecksum(\$codeWithoutChecksum), \$checksum);
    }
}

class TestableBarcode extends Barcode
{
    public static function eanChecksum(\$input)
    {
        return parent::eanChecksum(\$input);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/Provider/BarcodeTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Test\\Provider;

use Faker\\Generator;
use Faker\\Provider\\Barcode;
use PHPUnit\\Framework\\TestCase;

class BarcodeTest extends TestCase
{
    private \$faker;

    public function setUp()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Barcode(\$faker));
        \$faker->seed(0);
        \$this->faker = \$faker;
    }

    public function testEan8()
    {
        \$code = \$this->faker->ean8();
        \$this->assertRegExp('/^\\d{8}\$/i', \$code);
        \$codeWithoutChecksum = substr(\$code, 0, -1);
        \$checksum = substr(\$code, -1);
        \$this->assertEquals(TestableBarcode::eanChecksum(\$codeWithoutChecksum), \$checksum);
    }

    public function testEan13()
    {
        \$code = \$this->faker->ean13();
        \$this->assertRegExp('/^\\d{13}\$/i', \$code);
        \$codeWithoutChecksum = substr(\$code, 0, -1);
        \$checksum = substr(\$code, -1);
        \$this->assertEquals(TestableBarcode::eanChecksum(\$codeWithoutChecksum), \$checksum);
    }
}

class TestableBarcode extends Barcode
{
    public static function eanChecksum(\$input)
    {
        return parent::eanChecksum(\$input);
    }
}
", "vendor/fzaninotto/faker/test/Faker/Provider/BarcodeTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Provider/BarcodeTest.php");
    }
}
