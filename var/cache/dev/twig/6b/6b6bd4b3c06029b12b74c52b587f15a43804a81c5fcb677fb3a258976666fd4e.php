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

/* vendor/symfony/serializer/Tests/Mapping/Loader/XmlFileLoaderTest.php */
class __TwigTemplate_3ef09af4bb6955fc86ee377c4f2cbe0c2750f5292b1abcc788fa96befb1c30cd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Mapping/Loader/XmlFileLoaderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Mapping/Loader/XmlFileLoaderTest.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\Serializer\\Tests\\Mapping\\Loader;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Serializer\\Mapping\\AttributeMetadata;
use Symfony\\Component\\Serializer\\Mapping\\ClassDiscriminatorMapping;
use Symfony\\Component\\Serializer\\Mapping\\ClassMetadata;
use Symfony\\Component\\Serializer\\Mapping\\Loader\\XmlFileLoader;
use Symfony\\Component\\Serializer\\Tests\\Fixtures\\AbstractDummy;
use Symfony\\Component\\Serializer\\Tests\\Fixtures\\AbstractDummyFirstChild;
use Symfony\\Component\\Serializer\\Tests\\Fixtures\\AbstractDummySecondChild;
use Symfony\\Component\\Serializer\\Tests\\Mapping\\TestClassMetadataFactory;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class XmlFileLoaderTest extends TestCase
{
    /**
     * @var XmlFileLoader
     */
    private \$loader;
    /**
     * @var ClassMetadata
     */
    private \$metadata;

    protected function setUp(): void
    {
        \$this->loader = new XmlFileLoader(__DIR__.'/../../Fixtures/serialization.xml');
        \$this->metadata = new ClassMetadata('Symfony\\Component\\Serializer\\Tests\\Fixtures\\GroupDummy');
    }

    public function testInterface()
    {
        \$this->assertInstanceOf('Symfony\\Component\\Serializer\\Mapping\\Loader\\LoaderInterface', \$this->loader);
    }

    public function testLoadClassMetadataReturnsTrueIfSuccessful()
    {
        \$this->assertTrue(\$this->loader->loadClassMetadata(\$this->metadata));
    }

    public function testLoadClassMetadata()
    {
        \$this->loader->loadClassMetadata(\$this->metadata);

        \$this->assertEquals(TestClassMetadataFactory::createXmlCLassMetadata(), \$this->metadata);
    }

    public function testMaxDepth()
    {
        \$classMetadata = new ClassMetadata('Symfony\\Component\\Serializer\\Tests\\Fixtures\\MaxDepthDummy');
        \$this->loader->loadClassMetadata(\$classMetadata);

        \$attributesMetadata = \$classMetadata->getAttributesMetadata();
        \$this->assertEquals(2, \$attributesMetadata['foo']->getMaxDepth());
        \$this->assertEquals(3, \$attributesMetadata['bar']->getMaxDepth());
    }

    public function testSerializedName()
    {
        \$classMetadata = new ClassMetadata('Symfony\\Component\\Serializer\\Tests\\Fixtures\\SerializedNameDummy');
        \$this->loader->loadClassMetadata(\$classMetadata);

        \$attributesMetadata = \$classMetadata->getAttributesMetadata();
        \$this->assertEquals('baz', \$attributesMetadata['foo']->getSerializedName());
        \$this->assertEquals('qux', \$attributesMetadata['bar']->getSerializedName());
    }

    public function testLoadDiscriminatorMap()
    {
        \$classMetadata = new ClassMetadata(AbstractDummy::class);
        \$this->loader->loadClassMetadata(\$classMetadata);

        \$expected = new ClassMetadata(AbstractDummy::class, new ClassDiscriminatorMapping('type', [
            'first' => AbstractDummyFirstChild::class,
            'second' => AbstractDummySecondChild::class,
        ]));

        \$expected->addAttributeMetadata(new AttributeMetadata('foo'));

        \$this->assertEquals(\$expected, \$classMetadata);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Tests/Mapping/Loader/XmlFileLoaderTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\Serializer\\Tests\\Mapping\\Loader;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Serializer\\Mapping\\AttributeMetadata;
use Symfony\\Component\\Serializer\\Mapping\\ClassDiscriminatorMapping;
use Symfony\\Component\\Serializer\\Mapping\\ClassMetadata;
use Symfony\\Component\\Serializer\\Mapping\\Loader\\XmlFileLoader;
use Symfony\\Component\\Serializer\\Tests\\Fixtures\\AbstractDummy;
use Symfony\\Component\\Serializer\\Tests\\Fixtures\\AbstractDummyFirstChild;
use Symfony\\Component\\Serializer\\Tests\\Fixtures\\AbstractDummySecondChild;
use Symfony\\Component\\Serializer\\Tests\\Mapping\\TestClassMetadataFactory;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class XmlFileLoaderTest extends TestCase
{
    /**
     * @var XmlFileLoader
     */
    private \$loader;
    /**
     * @var ClassMetadata
     */
    private \$metadata;

    protected function setUp(): void
    {
        \$this->loader = new XmlFileLoader(__DIR__.'/../../Fixtures/serialization.xml');
        \$this->metadata = new ClassMetadata('Symfony\\Component\\Serializer\\Tests\\Fixtures\\GroupDummy');
    }

    public function testInterface()
    {
        \$this->assertInstanceOf('Symfony\\Component\\Serializer\\Mapping\\Loader\\LoaderInterface', \$this->loader);
    }

    public function testLoadClassMetadataReturnsTrueIfSuccessful()
    {
        \$this->assertTrue(\$this->loader->loadClassMetadata(\$this->metadata));
    }

    public function testLoadClassMetadata()
    {
        \$this->loader->loadClassMetadata(\$this->metadata);

        \$this->assertEquals(TestClassMetadataFactory::createXmlCLassMetadata(), \$this->metadata);
    }

    public function testMaxDepth()
    {
        \$classMetadata = new ClassMetadata('Symfony\\Component\\Serializer\\Tests\\Fixtures\\MaxDepthDummy');
        \$this->loader->loadClassMetadata(\$classMetadata);

        \$attributesMetadata = \$classMetadata->getAttributesMetadata();
        \$this->assertEquals(2, \$attributesMetadata['foo']->getMaxDepth());
        \$this->assertEquals(3, \$attributesMetadata['bar']->getMaxDepth());
    }

    public function testSerializedName()
    {
        \$classMetadata = new ClassMetadata('Symfony\\Component\\Serializer\\Tests\\Fixtures\\SerializedNameDummy');
        \$this->loader->loadClassMetadata(\$classMetadata);

        \$attributesMetadata = \$classMetadata->getAttributesMetadata();
        \$this->assertEquals('baz', \$attributesMetadata['foo']->getSerializedName());
        \$this->assertEquals('qux', \$attributesMetadata['bar']->getSerializedName());
    }

    public function testLoadDiscriminatorMap()
    {
        \$classMetadata = new ClassMetadata(AbstractDummy::class);
        \$this->loader->loadClassMetadata(\$classMetadata);

        \$expected = new ClassMetadata(AbstractDummy::class, new ClassDiscriminatorMapping('type', [
            'first' => AbstractDummyFirstChild::class,
            'second' => AbstractDummySecondChild::class,
        ]));

        \$expected->addAttributeMetadata(new AttributeMetadata('foo'));

        \$this->assertEquals(\$expected, \$classMetadata);
    }
}
", "vendor/symfony/serializer/Tests/Mapping/Loader/XmlFileLoaderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Tests/Mapping/Loader/XmlFileLoaderTest.php");
    }
}
