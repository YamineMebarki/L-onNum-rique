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

/* vendor/symfony/serializer/Tests/Normalizer/Features/AttributesTestTrait.php */
class __TwigTemplate_9764284c6692b0728d5d82362aecfcb1b82a59e171176101537670cd700e3a31 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Normalizer/Features/AttributesTestTrait.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Normalizer/Features/AttributesTestTrait.php"));

        // line 1
        echo "<?php

namespace Symfony\\Component\\Serializer\\Tests\\Normalizer\\Features;

use Symfony\\Component\\Serializer\\Exception\\ExtraAttributesException;
use Symfony\\Component\\Serializer\\Normalizer\\DenormalizerInterface;
use Symfony\\Component\\Serializer\\Normalizer\\NormalizerInterface;

/**
 * DevLaon AbstractNormalizer::ATTRIBUTES and AbstractNormalizer::ALLOW_EXTRA_ATTRIBUTES.
 */
trait AttributesTestTrait
{
    abstract protected function getNormalizerForAttributes(): NormalizerInterface;

    abstract protected function getDenormalizerForAttributes(): DenormalizerInterface;

    public function testAttributesNormalize()
    {
        \$normalizer = \$this->getNormalizerForAttributes();

        \$objectInner = new ObjectInner();
        \$objectInner->foo = 'innerFoo';
        \$objectInner->bar = 'innerBar';

        \$objectDummy = new ObjectDummy();
        \$objectDummy->setFoo('foo');
        \$objectDummy->setBaz(true);
        \$objectDummy->setObject(\$objectInner);

        \$context = ['attributes' => ['foo', 'baz', 'object' => ['foo']]];
        \$this->assertEquals(
            [
                'foo' => 'foo',
                'baz' => true,
                'object' => ['foo' => 'innerFoo'],
            ],
            \$normalizer->normalize(\$objectDummy, null, \$context)
        );

        \$context = ['attributes' => ['foo', 'baz', 'object']];
        \$this->assertEquals(
            [
                'foo' => 'foo',
                'baz' => true,
                'object' => ['foo' => 'innerFoo', 'bar' => 'innerBar'],
            ],
            \$normalizer->normalize(\$objectDummy, null, \$context)
        );
    }

    public function testAttributesContextDenormalize()
    {
        \$normalizer = \$this->getDenormalizerForAttributes();

        \$objectInner = new ObjectInner();
        \$objectInner->foo = 'innerFoo';

        \$objectOuter = new ObjectOuter();
        \$objectOuter->bar = 'bar';
        \$objectOuter->setInner(\$objectInner);

        \$context = ['attributes' => ['bar', 'inner' => ['foo']]];
        \$this->assertEquals(\$objectOuter, \$normalizer->denormalize(
            [
                'foo' => 'foo',
                'bar' => 'bar',
                'date' => '2017-02-03',
                'inner' => ['foo' => 'innerFoo', 'bar' => 'innerBar'],
            ], ObjectOuter::class, null, \$context));
    }

    public function testAttributesContextDenormalizeIgnoreExtraAttributes()
    {
        \$normalizer = \$this->getDenormalizerForAttributes();

        \$objectInner = new ObjectInner();
        \$objectInner->foo = 'innerFoo';

        \$objectOuter = new ObjectOuter();
        \$objectOuter->setInner(\$objectInner);

        \$context = ['attributes' => ['inner' => ['foo']]];
        \$this->assertEquals(\$objectOuter, \$normalizer->denormalize(
            [
                'foo' => 'foo',
                'bar' => 'changed',
                'date' => '2017-02-03',
                'inner' => ['foo' => 'innerFoo', 'bar' => 'innerBar'],
            ], ObjectOuter::class, null, \$context));
    }

    public function testAttributesContextDenormalizeExceptionExtraAttributes()
    {
        \$normalizer = \$this->getDenormalizerForAttributes();

        \$context = [
            'attributes' => ['bar', 'inner' => ['foo']],
            'allow_extra_attributes' => false,
        ];
        \$this->expectException(ExtraAttributesException::class);
        \$normalizer->denormalize(
            [
                'bar' => 'bar',
                'inner' => ['foo' => 'innerFoo', 'bar' => 'innerBar'],
            ], ObjectOuter::class, null, \$context);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Tests/Normalizer/Features/AttributesTestTrait.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Symfony\\Component\\Serializer\\Tests\\Normalizer\\Features;

use Symfony\\Component\\Serializer\\Exception\\ExtraAttributesException;
use Symfony\\Component\\Serializer\\Normalizer\\DenormalizerInterface;
use Symfony\\Component\\Serializer\\Normalizer\\NormalizerInterface;

/**
 * DevLaon AbstractNormalizer::ATTRIBUTES and AbstractNormalizer::ALLOW_EXTRA_ATTRIBUTES.
 */
trait AttributesTestTrait
{
    abstract protected function getNormalizerForAttributes(): NormalizerInterface;

    abstract protected function getDenormalizerForAttributes(): DenormalizerInterface;

    public function testAttributesNormalize()
    {
        \$normalizer = \$this->getNormalizerForAttributes();

        \$objectInner = new ObjectInner();
        \$objectInner->foo = 'innerFoo';
        \$objectInner->bar = 'innerBar';

        \$objectDummy = new ObjectDummy();
        \$objectDummy->setFoo('foo');
        \$objectDummy->setBaz(true);
        \$objectDummy->setObject(\$objectInner);

        \$context = ['attributes' => ['foo', 'baz', 'object' => ['foo']]];
        \$this->assertEquals(
            [
                'foo' => 'foo',
                'baz' => true,
                'object' => ['foo' => 'innerFoo'],
            ],
            \$normalizer->normalize(\$objectDummy, null, \$context)
        );

        \$context = ['attributes' => ['foo', 'baz', 'object']];
        \$this->assertEquals(
            [
                'foo' => 'foo',
                'baz' => true,
                'object' => ['foo' => 'innerFoo', 'bar' => 'innerBar'],
            ],
            \$normalizer->normalize(\$objectDummy, null, \$context)
        );
    }

    public function testAttributesContextDenormalize()
    {
        \$normalizer = \$this->getDenormalizerForAttributes();

        \$objectInner = new ObjectInner();
        \$objectInner->foo = 'innerFoo';

        \$objectOuter = new ObjectOuter();
        \$objectOuter->bar = 'bar';
        \$objectOuter->setInner(\$objectInner);

        \$context = ['attributes' => ['bar', 'inner' => ['foo']]];
        \$this->assertEquals(\$objectOuter, \$normalizer->denormalize(
            [
                'foo' => 'foo',
                'bar' => 'bar',
                'date' => '2017-02-03',
                'inner' => ['foo' => 'innerFoo', 'bar' => 'innerBar'],
            ], ObjectOuter::class, null, \$context));
    }

    public function testAttributesContextDenormalizeIgnoreExtraAttributes()
    {
        \$normalizer = \$this->getDenormalizerForAttributes();

        \$objectInner = new ObjectInner();
        \$objectInner->foo = 'innerFoo';

        \$objectOuter = new ObjectOuter();
        \$objectOuter->setInner(\$objectInner);

        \$context = ['attributes' => ['inner' => ['foo']]];
        \$this->assertEquals(\$objectOuter, \$normalizer->denormalize(
            [
                'foo' => 'foo',
                'bar' => 'changed',
                'date' => '2017-02-03',
                'inner' => ['foo' => 'innerFoo', 'bar' => 'innerBar'],
            ], ObjectOuter::class, null, \$context));
    }

    public function testAttributesContextDenormalizeExceptionExtraAttributes()
    {
        \$normalizer = \$this->getDenormalizerForAttributes();

        \$context = [
            'attributes' => ['bar', 'inner' => ['foo']],
            'allow_extra_attributes' => false,
        ];
        \$this->expectException(ExtraAttributesException::class);
        \$normalizer->denormalize(
            [
                'bar' => 'bar',
                'inner' => ['foo' => 'innerFoo', 'bar' => 'innerBar'],
            ], ObjectOuter::class, null, \$context);
    }
}
", "vendor/symfony/serializer/Tests/Normalizer/Features/AttributesTestTrait.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Tests/Normalizer/Features/AttributesTestTrait.php");
    }
}
