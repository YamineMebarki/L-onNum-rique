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

/* vendor/symfony/serializer/Tests/Normalizer/ObjectToPopulateTraitTest.php */
class __TwigTemplate_b1c6f37af73e625b9bd9748d66666c8f25df847234c0dbd2dcc380c92f2e6c97 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Normalizer/ObjectToPopulateTraitTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Normalizer/ObjectToPopulateTraitTest.php"));

        // line 1
        echo "<?php

namespace Symfony\\Component\\Serializer\\Tests\\Normalizer;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Serializer\\Normalizer\\ObjectToPopulateTrait;
use Symfony\\Component\\Serializer\\Tests\\Fixtures\\ProxyDummy;

class ObjectToPopulateTraitTest extends TestCase
{
    use ObjectToPopulateTrait;

    public function testExtractObjectToPopulateReturnsNullWhenKeyIsMissing()
    {
        \$object = \$this->extractObjectToPopulate(ProxyDummy::class, []);

        \$this->assertNull(\$object);
    }

    public function testExtractObjectToPopulateReturnsNullWhenNonObjectIsProvided()
    {
        \$object = \$this->extractObjectToPopulate(ProxyDummy::class, [
            'object_to_populate' => 'not an object',
        ]);

        \$this->assertNull(\$object);
    }

    public function testExtractObjectToPopulateReturnsNullWhenTheClassIsNotAnInstanceOfTheProvidedClass()
    {
        \$object = \$this->extractObjectToPopulate(ProxyDummy::class, [
            'object_to_populate' => new \\stdClass(),
        ]);

        \$this->assertNull(\$object);
    }

    public function testExtractObjectToPopulateReturnsObjectWhenEverythingChecksOut()
    {
        \$expected = new ProxyDummy();
        \$object = \$this->extractObjectToPopulate(ProxyDummy::class, [
            'object_to_populate' => \$expected,
        ]);

        \$this->assertSame(\$expected, \$object);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Tests/Normalizer/ObjectToPopulateTraitTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Symfony\\Component\\Serializer\\Tests\\Normalizer;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Serializer\\Normalizer\\ObjectToPopulateTrait;
use Symfony\\Component\\Serializer\\Tests\\Fixtures\\ProxyDummy;

class ObjectToPopulateTraitTest extends TestCase
{
    use ObjectToPopulateTrait;

    public function testExtractObjectToPopulateReturnsNullWhenKeyIsMissing()
    {
        \$object = \$this->extractObjectToPopulate(ProxyDummy::class, []);

        \$this->assertNull(\$object);
    }

    public function testExtractObjectToPopulateReturnsNullWhenNonObjectIsProvided()
    {
        \$object = \$this->extractObjectToPopulate(ProxyDummy::class, [
            'object_to_populate' => 'not an object',
        ]);

        \$this->assertNull(\$object);
    }

    public function testExtractObjectToPopulateReturnsNullWhenTheClassIsNotAnInstanceOfTheProvidedClass()
    {
        \$object = \$this->extractObjectToPopulate(ProxyDummy::class, [
            'object_to_populate' => new \\stdClass(),
        ]);

        \$this->assertNull(\$object);
    }

    public function testExtractObjectToPopulateReturnsObjectWhenEverythingChecksOut()
    {
        \$expected = new ProxyDummy();
        \$object = \$this->extractObjectToPopulate(ProxyDummy::class, [
            'object_to_populate' => \$expected,
        ]);

        \$this->assertSame(\$expected, \$object);
    }
}
", "vendor/symfony/serializer/Tests/Normalizer/ObjectToPopulateTraitTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Tests/Normalizer/ObjectToPopulateTraitTest.php");
    }
}
