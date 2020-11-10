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

/* vendor/symfony/serializer/Tests/Normalizer/Features/ObjectToPopulateTestTrait.php */
class __TwigTemplate_0987f4fba22629850406397022157ed29c02101a9a86e6a14a6d6d7bf5fe5c8c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Normalizer/Features/ObjectToPopulateTestTrait.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Normalizer/Features/ObjectToPopulateTestTrait.php"));

        // line 1
        echo "<?php

namespace Symfony\\Component\\Serializer\\Tests\\Normalizer\\Features;

use Symfony\\Component\\Serializer\\Normalizer\\DenormalizerInterface;
use Symfony\\Component\\Serializer\\Tests\\Fixtures\\DeepObjectPopulateChildDummy;
use Symfony\\Component\\Serializer\\Tests\\Fixtures\\DeepObjectPopulateParentDummy;
use Symfony\\Component\\Serializer\\Tests\\Fixtures\\ProxyDummy;
use Symfony\\Component\\Serializer\\Tests\\Fixtures\\ToBeProxyfiedDummy;

trait ObjectToPopulateTestTrait
{
    abstract protected function getDenormalizerForObjectToPopulate(): DenormalizerInterface;

    public function testObjectToPopulate()
    {
        \$dummy = new ObjectDummy();
        \$dummy->bar = 'bar';

        \$denormalizer = \$this->getDenormalizerForObjectToPopulate();

        \$obj = \$denormalizer->denormalize(
            ['foo' => 'foo'],
            ObjectDummy::class,
            null,
            ['object_to_populate' => \$dummy]
        );

        \$this->assertEquals(\$dummy, \$obj);
        \$this->assertEquals('foo', \$obj->getFoo());
        \$this->assertEquals('bar', \$obj->bar);
    }

    public function testObjectToPopulateWithProxy()
    {
        \$proxyDummy = new ProxyDummy();

        \$context = ['object_to_populate' => \$proxyDummy];

        \$denormalizer = \$this->getDenormalizerForObjectToPopulate();
        \$denormalizer->denormalize(['foo' => 'bar'], ToBeProxyfiedDummy::class, null, \$context);

        \$this->assertSame('bar', \$proxyDummy->getFoo());
    }

    public function testObjectToPopulateNoMatch()
    {
        \$this->markTestSkipped('something broken here!');
        \$denormalizer = \$this->getDenormalizerForObjectToPopulate();

        \$objectToPopulate = new ObjectInner();
        \$objectToPopulate->foo = 'foo';

        \$outer = \$denormalizer->denormalize([
            'foo' => 'foo',
            'inner' => [
                'bar' => 'bar',
            ],
        ], ObjectOuter::class, null, ['object_to_popuplate' => \$objectToPopulate]);

        \$this->assertInstanceOf(ObjectOuter::class, \$outer);
        \$inner = \$outer->getInner();
        \$this->assertInstanceOf(ObjectInner::class, \$inner);
        \$this->assertNotSame(\$objectToPopulate, \$inner);
        \$this->assertSame('bar', \$inner->bar);
        \$this->assertNull(\$inner->foo);
    }

    public function testDeepObjectToPopulate()
    {
        \$child = new DeepObjectPopulateChildDummy();
        \$child->bar = 'bar-old';
        \$child->foo = 'foo-old';

        \$parent = new DeepObjectPopulateParentDummy();
        \$parent->setChild(\$child);

        \$context = [
            'object_to_populate' => \$parent,
            'deep_object_to_populate' => true,
        ];

        \$normalizer = \$this->getDenormalizerForObjectToPopulate();

        \$newChild = new DeepObjectPopulateChildDummy();
        \$newChild->bar = 'bar-new';
        \$newChild->foo = 'foo-old';

        \$normalizer->denormalize([
            'child' => [
                'bar' => 'bar-new',
            ],
        ], DeepObjectPopulateParentDummy::class, null, \$context);

        \$this->assertSame('bar-new', \$parent->getChild()->bar);
        \$this->assertSame('foo-old', \$parent->getChild()->foo);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Tests/Normalizer/Features/ObjectToPopulateTestTrait.php";
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
use Symfony\\Component\\Serializer\\Tests\\Fixtures\\DeepObjectPopulateChildDummy;
use Symfony\\Component\\Serializer\\Tests\\Fixtures\\DeepObjectPopulateParentDummy;
use Symfony\\Component\\Serializer\\Tests\\Fixtures\\ProxyDummy;
use Symfony\\Component\\Serializer\\Tests\\Fixtures\\ToBeProxyfiedDummy;

trait ObjectToPopulateTestTrait
{
    abstract protected function getDenormalizerForObjectToPopulate(): DenormalizerInterface;

    public function testObjectToPopulate()
    {
        \$dummy = new ObjectDummy();
        \$dummy->bar = 'bar';

        \$denormalizer = \$this->getDenormalizerForObjectToPopulate();

        \$obj = \$denormalizer->denormalize(
            ['foo' => 'foo'],
            ObjectDummy::class,
            null,
            ['object_to_populate' => \$dummy]
        );

        \$this->assertEquals(\$dummy, \$obj);
        \$this->assertEquals('foo', \$obj->getFoo());
        \$this->assertEquals('bar', \$obj->bar);
    }

    public function testObjectToPopulateWithProxy()
    {
        \$proxyDummy = new ProxyDummy();

        \$context = ['object_to_populate' => \$proxyDummy];

        \$denormalizer = \$this->getDenormalizerForObjectToPopulate();
        \$denormalizer->denormalize(['foo' => 'bar'], ToBeProxyfiedDummy::class, null, \$context);

        \$this->assertSame('bar', \$proxyDummy->getFoo());
    }

    public function testObjectToPopulateNoMatch()
    {
        \$this->markTestSkipped('something broken here!');
        \$denormalizer = \$this->getDenormalizerForObjectToPopulate();

        \$objectToPopulate = new ObjectInner();
        \$objectToPopulate->foo = 'foo';

        \$outer = \$denormalizer->denormalize([
            'foo' => 'foo',
            'inner' => [
                'bar' => 'bar',
            ],
        ], ObjectOuter::class, null, ['object_to_popuplate' => \$objectToPopulate]);

        \$this->assertInstanceOf(ObjectOuter::class, \$outer);
        \$inner = \$outer->getInner();
        \$this->assertInstanceOf(ObjectInner::class, \$inner);
        \$this->assertNotSame(\$objectToPopulate, \$inner);
        \$this->assertSame('bar', \$inner->bar);
        \$this->assertNull(\$inner->foo);
    }

    public function testDeepObjectToPopulate()
    {
        \$child = new DeepObjectPopulateChildDummy();
        \$child->bar = 'bar-old';
        \$child->foo = 'foo-old';

        \$parent = new DeepObjectPopulateParentDummy();
        \$parent->setChild(\$child);

        \$context = [
            'object_to_populate' => \$parent,
            'deep_object_to_populate' => true,
        ];

        \$normalizer = \$this->getDenormalizerForObjectToPopulate();

        \$newChild = new DeepObjectPopulateChildDummy();
        \$newChild->bar = 'bar-new';
        \$newChild->foo = 'foo-old';

        \$normalizer->denormalize([
            'child' => [
                'bar' => 'bar-new',
            ],
        ], DeepObjectPopulateParentDummy::class, null, \$context);

        \$this->assertSame('bar-new', \$parent->getChild()->bar);
        \$this->assertSame('foo-old', \$parent->getChild()->foo);
    }
}
", "vendor/symfony/serializer/Tests/Normalizer/Features/ObjectToPopulateTestTrait.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Tests/Normalizer/Features/ObjectToPopulateTestTrait.php");
    }
}
