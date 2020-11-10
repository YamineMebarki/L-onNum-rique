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

/* vendor/symfony/serializer/Tests/NameConverter/MetadataAwareNameConverterTest.php */
class __TwigTemplate_b06d2dcf66fd21887d04760b3c593687e23ce086aa964e8bb3132a706bd9efb2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/NameConverter/MetadataAwareNameConverterTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/NameConverter/MetadataAwareNameConverterTest.php"));

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

namespace Symfony\\Component\\Serializer\\Tests\\NameConverter;

use Doctrine\\Common\\Annotations\\AnnotationReader;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Serializer\\Mapping\\Factory\\ClassMetadataFactory;
use Symfony\\Component\\Serializer\\Mapping\\Factory\\ClassMetadataFactoryInterface;
use Symfony\\Component\\Serializer\\Mapping\\Loader\\AnnotationLoader;
use Symfony\\Component\\Serializer\\NameConverter\\MetadataAwareNameConverter;
use Symfony\\Component\\Serializer\\NameConverter\\NameConverterInterface;
use Symfony\\Component\\Serializer\\Tests\\Fixtures\\SerializedNameDummy;

/**
 * @author Fabien Bourigault <bourigaultfabien@gmail.com>
 */
final class MetadataAwareNameConverterTest extends TestCase
{
    public function testInterface()
    {
        \$classMetadataFactory = \$this->createMock(ClassMetadataFactoryInterface::class);
        \$nameConverter = new MetadataAwareNameConverter(\$classMetadataFactory);
        \$this->assertInstanceOf('Symfony\\Component\\Serializer\\NameConverter\\NameConverterInterface', \$nameConverter);
    }

    /**
     * @dataProvider attributeProvider
     */
    public function testNormalize(\$propertyName, \$expected)
    {
        \$classMetadataFactory = new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()));

        \$nameConverter = new MetadataAwareNameConverter(\$classMetadataFactory);

        \$this->assertEquals(\$expected, \$nameConverter->normalize(\$propertyName, SerializedNameDummy::class));
    }

    /**
     * @dataProvider fallbackAttributeProvider
     */
    public function testNormalizeWithFallback(\$propertyName, \$expected)
    {
        \$classMetadataFactory = new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()));

        \$fallback = \$this->createMock(NameConverterInterface::class);
        \$fallback
            ->method('normalize')
            ->willReturnCallback(function (\$propertyName) {
                return strtoupper(\$propertyName);
            })
        ;

        \$nameConverter = new MetadataAwareNameConverter(\$classMetadataFactory, \$fallback);

        \$this->assertEquals(\$expected, \$nameConverter->normalize(\$propertyName, SerializedNameDummy::class));
    }

    /**
     * @dataProvider attributeProvider
     */
    public function testDenormalize(\$expected, \$propertyName)
    {
        \$classMetadataFactory = new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()));

        \$nameConverter = new MetadataAwareNameConverter(\$classMetadataFactory);

        \$this->assertEquals(\$expected, \$nameConverter->denormalize(\$propertyName, SerializedNameDummy::class));
    }

    /**
     * @dataProvider fallbackAttributeProvider
     */
    public function testDenormalizeWithFallback(\$expected, \$propertyName)
    {
        \$classMetadataFactory = new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()));

        \$fallback = \$this->createMock(NameConverterInterface::class);
        \$fallback
            ->method('denormalize')
            ->willReturnCallback(function (\$propertyName) {
                return strtolower(\$propertyName);
            })
        ;

        \$nameConverter = new MetadataAwareNameConverter(\$classMetadataFactory, \$fallback);

        \$this->assertEquals(\$expected, \$nameConverter->denormalize(\$propertyName, SerializedNameDummy::class));
    }

    public function attributeProvider()
    {
        return [
            ['foo', 'baz'],
            ['bar', 'qux'],
            ['quux', 'quux'],
            [0, 0],
        ];
    }

    public function fallbackAttributeProvider()
    {
        return [
            ['foo', 'baz'],
            ['bar', 'qux'],
            ['quux', 'QUUX'],
            [0, 0],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Tests/NameConverter/MetadataAwareNameConverterTest.php";
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

namespace Symfony\\Component\\Serializer\\Tests\\NameConverter;

use Doctrine\\Common\\Annotations\\AnnotationReader;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Serializer\\Mapping\\Factory\\ClassMetadataFactory;
use Symfony\\Component\\Serializer\\Mapping\\Factory\\ClassMetadataFactoryInterface;
use Symfony\\Component\\Serializer\\Mapping\\Loader\\AnnotationLoader;
use Symfony\\Component\\Serializer\\NameConverter\\MetadataAwareNameConverter;
use Symfony\\Component\\Serializer\\NameConverter\\NameConverterInterface;
use Symfony\\Component\\Serializer\\Tests\\Fixtures\\SerializedNameDummy;

/**
 * @author Fabien Bourigault <bourigaultfabien@gmail.com>
 */
final class MetadataAwareNameConverterTest extends TestCase
{
    public function testInterface()
    {
        \$classMetadataFactory = \$this->createMock(ClassMetadataFactoryInterface::class);
        \$nameConverter = new MetadataAwareNameConverter(\$classMetadataFactory);
        \$this->assertInstanceOf('Symfony\\Component\\Serializer\\NameConverter\\NameConverterInterface', \$nameConverter);
    }

    /**
     * @dataProvider attributeProvider
     */
    public function testNormalize(\$propertyName, \$expected)
    {
        \$classMetadataFactory = new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()));

        \$nameConverter = new MetadataAwareNameConverter(\$classMetadataFactory);

        \$this->assertEquals(\$expected, \$nameConverter->normalize(\$propertyName, SerializedNameDummy::class));
    }

    /**
     * @dataProvider fallbackAttributeProvider
     */
    public function testNormalizeWithFallback(\$propertyName, \$expected)
    {
        \$classMetadataFactory = new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()));

        \$fallback = \$this->createMock(NameConverterInterface::class);
        \$fallback
            ->method('normalize')
            ->willReturnCallback(function (\$propertyName) {
                return strtoupper(\$propertyName);
            })
        ;

        \$nameConverter = new MetadataAwareNameConverter(\$classMetadataFactory, \$fallback);

        \$this->assertEquals(\$expected, \$nameConverter->normalize(\$propertyName, SerializedNameDummy::class));
    }

    /**
     * @dataProvider attributeProvider
     */
    public function testDenormalize(\$expected, \$propertyName)
    {
        \$classMetadataFactory = new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()));

        \$nameConverter = new MetadataAwareNameConverter(\$classMetadataFactory);

        \$this->assertEquals(\$expected, \$nameConverter->denormalize(\$propertyName, SerializedNameDummy::class));
    }

    /**
     * @dataProvider fallbackAttributeProvider
     */
    public function testDenormalizeWithFallback(\$expected, \$propertyName)
    {
        \$classMetadataFactory = new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()));

        \$fallback = \$this->createMock(NameConverterInterface::class);
        \$fallback
            ->method('denormalize')
            ->willReturnCallback(function (\$propertyName) {
                return strtolower(\$propertyName);
            })
        ;

        \$nameConverter = new MetadataAwareNameConverter(\$classMetadataFactory, \$fallback);

        \$this->assertEquals(\$expected, \$nameConverter->denormalize(\$propertyName, SerializedNameDummy::class));
    }

    public function attributeProvider()
    {
        return [
            ['foo', 'baz'],
            ['bar', 'qux'],
            ['quux', 'quux'],
            [0, 0],
        ];
    }

    public function fallbackAttributeProvider()
    {
        return [
            ['foo', 'baz'],
            ['bar', 'qux'],
            ['quux', 'QUUX'],
            [0, 0],
        ];
    }
}
", "vendor/symfony/serializer/Tests/NameConverter/MetadataAwareNameConverterTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Tests/NameConverter/MetadataAwareNameConverterTest.php");
    }
}
