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

/* vendor/symfony/serializer/Tests/Normalizer/Features/IgnoredAttributesTestTrait.php */
class __TwigTemplate_2c40be337878e6f2c20607440335156934e77b706ffc9e9889fe7afafc001c87 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Normalizer/Features/IgnoredAttributesTestTrait.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Normalizer/Features/IgnoredAttributesTestTrait.php"));

        // line 1
        echo "<?php

namespace Symfony\\Component\\Serializer\\Tests\\Normalizer\\Features;

use Symfony\\Component\\Serializer\\Normalizer\\DenormalizerInterface;
use Symfony\\Component\\Serializer\\Normalizer\\NormalizerInterface;

/**
 * DevLaon AbstractNormalizer::IGNORED_ATTRIBUTES.
 */
trait IgnoredAttributesTestTrait
{
    abstract protected function getNormalizerForIgnoredAttributes(): NormalizerInterface;

    abstract protected function getDenormalizerForIgnoredAttributes(): DenormalizerInterface;

    public function testIgnoredAttributesNormalize()
    {
        \$normalizer = \$this->getNormalizerForIgnoredAttributes();

        \$objectInner = new ObjectInner();
        \$objectInner->foo = 'innerFoo';
        \$objectInner->bar = 'innerBar';

        \$objectOuter = new ObjectOuter();
        \$objectOuter->foo = 'foo';
        \$objectOuter->bar = 'bar';
        \$objectOuter->setInner(\$objectInner);

        \$context = ['ignored_attributes' => ['bar']];
        \$this->assertEquals(
            [
                'foo' => 'foo',
                'inner' => ['foo' => 'innerFoo'],
                'date' => null,
                'inners' => null,
            ],
            \$normalizer->normalize(\$objectOuter, null, \$context)
        );

        \$this->markTestIncomplete('AbstractObjectNormalizer::getAttributes caches attributes by class instead of by class+context, reusing the normalizer with different config therefore fails. This is being fixed in https://github.com/symfony/symfony/pull/30907');

        \$context = ['ignored_attributes' => ['foo', 'inner']];
        \$this->assertEquals(
            [
                'bar' => 'bar',
                'date' => null,
                'inners' => null,
            ],
            \$normalizer->normalize(\$objectOuter, null, \$context)
        );
    }

    public function testIgnoredAttributesContextDenormalize()
    {
        \$normalizer = \$this->getDenormalizerForIgnoredAttributes();

        \$objectOuter = new ObjectOuter();
        \$objectOuter->bar = 'bar';

        \$context = ['ignored_attributes' => ['foo', 'inner']];
        \$this->assertEquals(\$objectOuter, \$normalizer->denormalize(
            [
                'foo' => 'foo',
                'bar' => 'bar',
                'inner' => ['foo' => 'innerFoo', 'bar' => 'innerBar'],
            ], ObjectOuter::class, null, \$context));
    }

    public function testIgnoredAttributesContextDenormalizeInherit()
    {
        \$normalizer = \$this->getDenormalizerForIgnoredAttributes();

        \$objectInner = new ObjectInner();
        \$objectInner->foo = 'innerFoo';

        \$objectOuter = new ObjectOuter();
        \$objectOuter->foo = 'foo';
        \$objectOuter->setInner(\$objectInner);

        \$context = ['ignored_attributes' => ['bar']];
        \$this->assertEquals(\$objectOuter, \$normalizer->denormalize(
            [
                'foo' => 'foo',
                'bar' => 'bar',
                'inner' => ['foo' => 'innerFoo', 'bar' => 'innerBar'],
            ], ObjectOuter::class, null, \$context));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Tests/Normalizer/Features/IgnoredAttributesTestTrait.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Symfony\\Component\\Serializer\\Tests\\Normalizer\\Features;

use Symfony\\Component\\Serializer\\Normalizer\\DenormalizerInterface;
use Symfony\\Component\\Serializer\\Normalizer\\NormalizerInterface;

/**
 * DevLaon AbstractNormalizer::IGNORED_ATTRIBUTES.
 */
trait IgnoredAttributesTestTrait
{
    abstract protected function getNormalizerForIgnoredAttributes(): NormalizerInterface;

    abstract protected function getDenormalizerForIgnoredAttributes(): DenormalizerInterface;

    public function testIgnoredAttributesNormalize()
    {
        \$normalizer = \$this->getNormalizerForIgnoredAttributes();

        \$objectInner = new ObjectInner();
        \$objectInner->foo = 'innerFoo';
        \$objectInner->bar = 'innerBar';

        \$objectOuter = new ObjectOuter();
        \$objectOuter->foo = 'foo';
        \$objectOuter->bar = 'bar';
        \$objectOuter->setInner(\$objectInner);

        \$context = ['ignored_attributes' => ['bar']];
        \$this->assertEquals(
            [
                'foo' => 'foo',
                'inner' => ['foo' => 'innerFoo'],
                'date' => null,
                'inners' => null,
            ],
            \$normalizer->normalize(\$objectOuter, null, \$context)
        );

        \$this->markTestIncomplete('AbstractObjectNormalizer::getAttributes caches attributes by class instead of by class+context, reusing the normalizer with different config therefore fails. This is being fixed in https://github.com/symfony/symfony/pull/30907');

        \$context = ['ignored_attributes' => ['foo', 'inner']];
        \$this->assertEquals(
            [
                'bar' => 'bar',
                'date' => null,
                'inners' => null,
            ],
            \$normalizer->normalize(\$objectOuter, null, \$context)
        );
    }

    public function testIgnoredAttributesContextDenormalize()
    {
        \$normalizer = \$this->getDenormalizerForIgnoredAttributes();

        \$objectOuter = new ObjectOuter();
        \$objectOuter->bar = 'bar';

        \$context = ['ignored_attributes' => ['foo', 'inner']];
        \$this->assertEquals(\$objectOuter, \$normalizer->denormalize(
            [
                'foo' => 'foo',
                'bar' => 'bar',
                'inner' => ['foo' => 'innerFoo', 'bar' => 'innerBar'],
            ], ObjectOuter::class, null, \$context));
    }

    public function testIgnoredAttributesContextDenormalizeInherit()
    {
        \$normalizer = \$this->getDenormalizerForIgnoredAttributes();

        \$objectInner = new ObjectInner();
        \$objectInner->foo = 'innerFoo';

        \$objectOuter = new ObjectOuter();
        \$objectOuter->foo = 'foo';
        \$objectOuter->setInner(\$objectInner);

        \$context = ['ignored_attributes' => ['bar']];
        \$this->assertEquals(\$objectOuter, \$normalizer->denormalize(
            [
                'foo' => 'foo',
                'bar' => 'bar',
                'inner' => ['foo' => 'innerFoo', 'bar' => 'innerBar'],
            ], ObjectOuter::class, null, \$context));
    }
}
", "vendor/symfony/serializer/Tests/Normalizer/Features/IgnoredAttributesTestTrait.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Tests/Normalizer/Features/IgnoredAttributesTestTrait.php");
    }
}
