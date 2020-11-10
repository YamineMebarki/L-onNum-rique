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

/* vendor/symfony/serializer/Tests/Normalizer/Features/CircularReferenceTestTrait.php */
class __TwigTemplate_37620eec78b040600f0f00c17ba7e7d460037d67c314cc207eede0f1ff94a03e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Normalizer/Features/CircularReferenceTestTrait.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Normalizer/Features/CircularReferenceTestTrait.php"));

        // line 1
        echo "<?php

namespace Symfony\\Component\\Serializer\\Tests\\Normalizer\\Features;

use Symfony\\Component\\Serializer\\Exception\\CircularReferenceException;
use Symfony\\Component\\Serializer\\Normalizer\\NormalizerInterface;

/**
 * Test AbstractNormalizer::CIRCULAR_REFERENCE_LIMIT and AbstractNormalizer::CIRCULAR_REFERENCE_HANDLER.
 */
trait CircularReferenceTestTrait
{
    abstract protected function getNormalizerForCircularReference(): NormalizerInterface;

    abstract protected function getSelfReferencingModel();

    public function testUnableToNormalizeCircularReference()
    {
        \$normalizer = \$this->getNormalizerForCircularReference();

        \$obj = \$this->getSelfReferencingModel();

        \$this->expectException(CircularReferenceException::class);
        \$normalizer->normalize(\$obj, null, ['circular_reference_limit' => 2]);
    }

    public function testCircularReferenceHandler()
    {
        \$normalizer = \$this->getNormalizerForCircularReference();

        \$obj = \$this->getSelfReferencingModel();
        \$expected = ['me' => \\get_class(\$obj)];

        \$context = [
            'circular_reference_handler' => function (\$actualObj, string \$format, array \$context) use (\$obj) {
                \$this->assertInstanceOf(\\get_class(\$obj), \$actualObj);
                \$this->assertSame('test', \$format);
                \$this->assertArrayHasKey('foo', \$context);

                return \\get_class(\$actualObj);
            },
            'foo' => 'bar',
        ];
        \$this->assertEquals(\$expected, \$normalizer->normalize(\$obj, 'test', \$context));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Tests/Normalizer/Features/CircularReferenceTestTrait.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Symfony\\Component\\Serializer\\Tests\\Normalizer\\Features;

use Symfony\\Component\\Serializer\\Exception\\CircularReferenceException;
use Symfony\\Component\\Serializer\\Normalizer\\NormalizerInterface;

/**
 * Test AbstractNormalizer::CIRCULAR_REFERENCE_LIMIT and AbstractNormalizer::CIRCULAR_REFERENCE_HANDLER.
 */
trait CircularReferenceTestTrait
{
    abstract protected function getNormalizerForCircularReference(): NormalizerInterface;

    abstract protected function getSelfReferencingModel();

    public function testUnableToNormalizeCircularReference()
    {
        \$normalizer = \$this->getNormalizerForCircularReference();

        \$obj = \$this->getSelfReferencingModel();

        \$this->expectException(CircularReferenceException::class);
        \$normalizer->normalize(\$obj, null, ['circular_reference_limit' => 2]);
    }

    public function testCircularReferenceHandler()
    {
        \$normalizer = \$this->getNormalizerForCircularReference();

        \$obj = \$this->getSelfReferencingModel();
        \$expected = ['me' => \\get_class(\$obj)];

        \$context = [
            'circular_reference_handler' => function (\$actualObj, string \$format, array \$context) use (\$obj) {
                \$this->assertInstanceOf(\\get_class(\$obj), \$actualObj);
                \$this->assertSame('test', \$format);
                \$this->assertArrayHasKey('foo', \$context);

                return \\get_class(\$actualObj);
            },
            'foo' => 'bar',
        ];
        \$this->assertEquals(\$expected, \$normalizer->normalize(\$obj, 'test', \$context));
    }
}
", "vendor/symfony/serializer/Tests/Normalizer/Features/CircularReferenceTestTrait.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Tests/Normalizer/Features/CircularReferenceTestTrait.php");
    }
}
