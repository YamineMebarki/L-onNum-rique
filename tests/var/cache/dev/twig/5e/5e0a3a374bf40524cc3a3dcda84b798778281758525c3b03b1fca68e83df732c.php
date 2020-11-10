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

/* vendor/fzaninotto/faker/test/Faker/Provider/UuidTest.php */
class __TwigTemplate_1e549c72ea5da0c183f38685bd8cbd43933db5b3677599451a5c9dd91af03017 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/UuidTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/UuidTest.php"));

        // line 1
        echo "<?php

namespace Faker\\Test\\Provider;

use Faker\\Generator;
use Faker\\Provider\\Uuid as BaseProvider;
use PHPUnit\\Framework\\TestCase;

class UuidTest extends TestCase
{
    public function testUuidReturnsUuid()
    {
        \$uuid = BaseProvider::uuid();
        \$this->assertTrue(\$this->isUuid(\$uuid));
    }

    public function testUuidExpectedSeed()
    {
        if (pack('L', 0x6162797A) == pack('N', 0x6162797A)) {
            \$this->markTestSkipped('Big Endian');
        }
        \$faker = new Generator();
        \$faker->seed(123);
        \$this->assertEquals(\"8e2e0c84-50dd-367c-9e66-f3ab455c78d6\", BaseProvider::uuid());
        \$this->assertEquals(\"073eb60a-902c-30ab-93d0-a94db371f6c8\", BaseProvider::uuid());
    }

    protected function isUuid(\$uuid)
    {
        return is_string(\$uuid) && (bool) preg_match('/^[a-f0-9]{8,8}-(?:[a-f0-9]{4,4}-){3,3}[a-f0-9]{12,12}\$/i', \$uuid);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/Provider/UuidTest.php";
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
use Faker\\Provider\\Uuid as BaseProvider;
use PHPUnit\\Framework\\TestCase;

class UuidTest extends TestCase
{
    public function testUuidReturnsUuid()
    {
        \$uuid = BaseProvider::uuid();
        \$this->assertTrue(\$this->isUuid(\$uuid));
    }

    public function testUuidExpectedSeed()
    {
        if (pack('L', 0x6162797A) == pack('N', 0x6162797A)) {
            \$this->markTestSkipped('Big Endian');
        }
        \$faker = new Generator();
        \$faker->seed(123);
        \$this->assertEquals(\"8e2e0c84-50dd-367c-9e66-f3ab455c78d6\", BaseProvider::uuid());
        \$this->assertEquals(\"073eb60a-902c-30ab-93d0-a94db371f6c8\", BaseProvider::uuid());
    }

    protected function isUuid(\$uuid)
    {
        return is_string(\$uuid) && (bool) preg_match('/^[a-f0-9]{8,8}-(?:[a-f0-9]{4,4}-){3,3}[a-f0-9]{12,12}\$/i', \$uuid);
    }
}
", "vendor/fzaninotto/faker/test/Faker/Provider/UuidTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Provider/UuidTest.php");
    }
}
