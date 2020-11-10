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

/* vendor/symfony/serializer/Tests/Normalizer/Features/ConstructorArgumentsTestTrait.php */
class __TwigTemplate_853d07fe8bbcd9d2bd525df84449bdb60292e6635b068bba1b60608406bf9326 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Normalizer/Features/ConstructorArgumentsTestTrait.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Normalizer/Features/ConstructorArgumentsTestTrait.php"));

        // line 1
        echo "<?php

namespace Symfony\\Component\\Serializer\\Tests\\Normalizer\\Features;

use Symfony\\Component\\Serializer\\Exception\\MissingConstructorArgumentsException;
use Symfony\\Component\\Serializer\\Normalizer\\DenormalizerInterface;
use Symfony\\Component\\Serializer\\Tests\\Fixtures\\NotSerializedConstructorArgumentDummy;

trait ConstructorArgumentsTestTrait
{
    abstract protected function getDenormalizerForConstructArguments(): DenormalizerInterface;

    public function testDefaultConstructorArguments()
    {
        \$data = [
            'foo' => 10,
        ];

        \$denormalizer = \$this->getDenormalizerForConstructArguments();

        \$result = \$denormalizer->denormalize(\$data, ConstructorArgumentsObject::class, 'json', [
            'default_constructor_arguments' => [
                ConstructorArgumentsObject::class => ['foo' => '', 'bar' => '', 'baz' => null],
            ],
        ]);

        \$this->assertEquals(new ConstructorArgumentsObject(10, '', null), \$result);
    }

    public function testMetadataAwareNameConvertorWithNotSerializedConstructorParameter()
    {
        \$denormalizer = \$this->getDenormalizerForConstructArguments();

        \$obj = new NotSerializedConstructorArgumentDummy('buz');
        \$obj->setBar('xyz');

        \$this->assertEquals(
            \$obj,
            \$denormalizer->denormalize(['bar' => 'xyz'],
                NotSerializedConstructorArgumentDummy::class,
                null,
                ['default_constructor_arguments' => [
                    NotSerializedConstructorArgumentDummy::class => ['foo' => 'buz'],
                ]]
            )
        );
    }

    public function testConstructorWithMissingData()
    {
        \$data = [
            'foo' => 10,
        ];

        \$normalizer = \$this->getDenormalizerForConstructArguments();

        \$this->expectException(MissingConstructorArgumentsException::class);
        \$this->expectExceptionMessage('Cannot create an instance of '.ConstructorArgumentsObject::class.' from serialized data because its constructor requires parameter \"bar\" to be present.');
        \$normalizer->denormalize(\$data, ConstructorArgumentsObject::class);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Tests/Normalizer/Features/ConstructorArgumentsTestTrait.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Symfony\\Component\\Serializer\\Tests\\Normalizer\\Features;

use Symfony\\Component\\Serializer\\Exception\\MissingConstructorArgumentsException;
use Symfony\\Component\\Serializer\\Normalizer\\DenormalizerInterface;
use Symfony\\Component\\Serializer\\Tests\\Fixtures\\NotSerializedConstructorArgumentDummy;

trait ConstructorArgumentsTestTrait
{
    abstract protected function getDenormalizerForConstructArguments(): DenormalizerInterface;

    public function testDefaultConstructorArguments()
    {
        \$data = [
            'foo' => 10,
        ];

        \$denormalizer = \$this->getDenormalizerForConstructArguments();

        \$result = \$denormalizer->denormalize(\$data, ConstructorArgumentsObject::class, 'json', [
            'default_constructor_arguments' => [
                ConstructorArgumentsObject::class => ['foo' => '', 'bar' => '', 'baz' => null],
            ],
        ]);

        \$this->assertEquals(new ConstructorArgumentsObject(10, '', null), \$result);
    }

    public function testMetadataAwareNameConvertorWithNotSerializedConstructorParameter()
    {
        \$denormalizer = \$this->getDenormalizerForConstructArguments();

        \$obj = new NotSerializedConstructorArgumentDummy('buz');
        \$obj->setBar('xyz');

        \$this->assertEquals(
            \$obj,
            \$denormalizer->denormalize(['bar' => 'xyz'],
                NotSerializedConstructorArgumentDummy::class,
                null,
                ['default_constructor_arguments' => [
                    NotSerializedConstructorArgumentDummy::class => ['foo' => 'buz'],
                ]]
            )
        );
    }

    public function testConstructorWithMissingData()
    {
        \$data = [
            'foo' => 10,
        ];

        \$normalizer = \$this->getDenormalizerForConstructArguments();

        \$this->expectException(MissingConstructorArgumentsException::class);
        \$this->expectExceptionMessage('Cannot create an instance of '.ConstructorArgumentsObject::class.' from serialized data because its constructor requires parameter \"bar\" to be present.');
        \$normalizer->denormalize(\$data, ConstructorArgumentsObject::class);
    }
}
", "vendor/symfony/serializer/Tests/Normalizer/Features/ConstructorArgumentsTestTrait.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Tests/Normalizer/Features/ConstructorArgumentsTestTrait.php");
    }
}
