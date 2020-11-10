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

/* vendor/symfony/validator/Tests/Mapping/Factory/LazyLoadingMetadataFactoryTest.php */
class __TwigTemplate_67ef47852256cf4c9f7252461138f1a8c6a5c8f724b778f062197cc172985356 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Mapping/Factory/LazyLoadingMetadataFactoryTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Mapping/Factory/LazyLoadingMetadataFactoryTest.php"));

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

namespace Symfony\\Component\\Validator\\Tests\\Mapping\\Factory;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Cache\\Adapter\\ArrayAdapter;
use Symfony\\Component\\Validator\\Constraints\\Callback;
use Symfony\\Component\\Validator\\Mapping\\Cache\\Psr6Cache;
use Symfony\\Component\\Validator\\Mapping\\ClassMetadata;
use Symfony\\Component\\Validator\\Mapping\\Factory\\LazyLoadingMetadataFactory;
use Symfony\\Component\\Validator\\Mapping\\Loader\\LoaderInterface;
use Symfony\\Component\\Validator\\Tests\\Fixtures\\ConstraintA;

class LazyLoadingMetadataFactoryTest extends TestCase
{
    const CLASS_NAME = 'Symfony\\Component\\Validator\\Tests\\Fixtures\\Entity';
    const PARENT_CLASS = 'Symfony\\Component\\Validator\\Tests\\Fixtures\\EntityParent';
    const INTERFACE_A_CLASS = 'Symfony\\Component\\Validator\\Tests\\Fixtures\\EntityInterfaceA';
    const INTERFACE_B_CLASS = 'Symfony\\Component\\Validator\\Tests\\Fixtures\\EntityInterfaceB';
    const PARENT_INTERFACE_CLASS = 'Symfony\\Component\\Validator\\Tests\\Fixtures\\EntityParentInterface';

    public function testLoadClassMetadataWithInterface()
    {
        \$factory = new LazyLoadingMetadataFactory(new TestLoader());
        \$metadata = \$factory->getMetadataFor(self::PARENT_CLASS);

        \$constraints = [
            new ConstraintA(['groups' => ['Default', 'EntityParent']]),
            new ConstraintA(['groups' => ['Default', 'EntityInterfaceA', 'EntityParent']]),
        ];

        \$this->assertEquals(\$constraints, \$metadata->getConstraints());
    }

    public function testMergeParentConstraints()
    {
        \$factory = new LazyLoadingMetadataFactory(new TestLoader());
        \$metadata = \$factory->getMetadataFor(self::CLASS_NAME);

        \$constraints = [
            new ConstraintA(['groups' => [
                'Default',
                'Entity',
            ]]),
            new ConstraintA(['groups' => [
                'Default',
                'EntityParent',
                'Entity',
            ]]),
            new ConstraintA(['groups' => [
                'Default',
                'EntityInterfaceA',
                'EntityParent',
                'Entity',
            ]]),
            new ConstraintA(['groups' => [
                'Default',
                'EntityInterfaceB',
                'Entity',
            ]]),
            new ConstraintA(['groups' => [
                'Default',
                'EntityParentInterface',
                'EntityInterfaceB',
                'Entity',
            ]]),
        ];

        \$this->assertEquals(\$constraints, \$metadata->getConstraints());
    }

    public function testWriteMetadataToCache()
    {
        \$cache = new Psr6Cache(new ArrayAdapter());
        \$factory = new LazyLoadingMetadataFactory(new TestLoader(), \$cache);

        \$parentClassConstraints = [
            new ConstraintA(['groups' => ['Default', 'EntityParent']]),
            new ConstraintA(['groups' => ['Default', 'EntityInterfaceA', 'EntityParent']]),
        ];

        \$metadata = \$factory->getMetadataFor(self::PARENT_CLASS);

        \$this->assertEquals(self::PARENT_CLASS, \$metadata->getClassName());
        \$this->assertEquals(\$parentClassConstraints, \$metadata->getConstraints());
        \$this->assertInstanceOf(ClassMetadata::class, \$cache->read(self::PARENT_CLASS));
        \$this->assertInstanceOf(ClassMetadata::class, \$cache->read(self::INTERFACE_A_CLASS));
    }

    public function testReadMetadataFromCache()
    {
        \$loader = \$this->getMockBuilder('Symfony\\Component\\Validator\\Mapping\\Loader\\LoaderInterface')->getMock();
        \$cache = \$this->getMockBuilder('Symfony\\Component\\Validator\\Mapping\\Cache\\CacheInterface')->getMock();
        \$factory = new LazyLoadingMetadataFactory(\$loader, \$cache);

        \$metadata = new ClassMetadata(self::PARENT_CLASS);
        \$metadata->addConstraint(new ConstraintA());

        \$parentClass = self::PARENT_CLASS;
        \$interfaceClass = self::INTERFACE_A_CLASS;

        \$loader->expects(\$this->never())
               ->method('loadClassMetadata');

        \$cache->expects(\$this->never())
              ->method('has');
        \$cache->expects(\$this->exactly(2))
              ->method('read')
              ->withConsecutive(
                  [self::PARENT_CLASS],
                  [self::INTERFACE_A_CLASS]
              )
              ->willReturnCallback(function (\$name) use (\$metadata, \$parentClass, \$interfaceClass) {
                  if (\$parentClass == \$name) {
                      return \$metadata;
                  }

                  return new ClassMetadata(\$interfaceClass);
              });

        \$this->assertEquals(\$metadata, \$factory->getMetadataFor(self::PARENT_CLASS));
    }

    public function testNonClassNameStringValues()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\NoSuchMetadataException');
        \$testedValue = 'error@example.com';
        \$loader = \$this->getMockBuilder('Symfony\\Component\\Validator\\Mapping\\Loader\\LoaderInterface')->getMock();
        \$cache = \$this->getMockBuilder('Symfony\\Component\\Validator\\Mapping\\Cache\\CacheInterface')->getMock();
        \$factory = new LazyLoadingMetadataFactory(\$loader, \$cache);
        \$cache
            ->expects(\$this->never())
            ->method('read');
        \$factory->getMetadataFor(\$testedValue);
    }

    public function testMetadataCacheWithRuntimeConstraint()
    {
        \$cache = \$this->getMockBuilder('Symfony\\Component\\Validator\\Mapping\\Cache\\CacheInterface')->getMock();
        \$factory = new LazyLoadingMetadataFactory(new TestLoader(), \$cache);

        \$cache
            ->expects(\$this->any())
            ->method('write')
            ->willReturnCallback(function (\$metadata) { serialize(\$metadata); })
        ;

        \$cache->expects(\$this->any())
            ->method('read')
            ->willReturn(false);

        \$metadata = \$factory->getMetadataFor(self::PARENT_CLASS);
        \$metadata->addConstraint(new Callback(function () {}));

        \$this->assertCount(3, \$metadata->getConstraints());

        \$metadata = \$factory->getMetadataFor(self::CLASS_NAME);

        \$this->assertCount(6, \$metadata->getConstraints());
    }

    public function testGroupsFromParent()
    {
        \$reader = new \\Symfony\\Component\\Validator\\Mapping\\Loader\\StaticMethodLoader();
        \$factory = new LazyLoadingMetadataFactory(\$reader);
        \$metadata = \$factory->getMetadataFor('Symfony\\Component\\Validator\\Tests\\Fixtures\\EntityStaticCarTurbo');
        \$groups = [];

        foreach (\$metadata->getPropertyMetadata('wheels') as \$propertyMetadata) {
            \$constraints = \$propertyMetadata->getConstraints();
            \$groups = array_replace(\$groups, \$constraints[0]->groups);
        }

        \$this->assertCount(4, \$groups);
        \$this->assertContains('Default', \$groups);
        \$this->assertContains('EntityStaticCarTurbo', \$groups);
        \$this->assertContains('EntityStaticCar', \$groups);
        \$this->assertContains('EntityStaticVehicle', \$groups);
    }
}

class TestLoader implements LoaderInterface
{
    public function loadClassMetadata(ClassMetadata \$metadata)
    {
        \$metadata->addConstraint(new ConstraintA());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Mapping/Factory/LazyLoadingMetadataFactoryTest.php";
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

namespace Symfony\\Component\\Validator\\Tests\\Mapping\\Factory;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Cache\\Adapter\\ArrayAdapter;
use Symfony\\Component\\Validator\\Constraints\\Callback;
use Symfony\\Component\\Validator\\Mapping\\Cache\\Psr6Cache;
use Symfony\\Component\\Validator\\Mapping\\ClassMetadata;
use Symfony\\Component\\Validator\\Mapping\\Factory\\LazyLoadingMetadataFactory;
use Symfony\\Component\\Validator\\Mapping\\Loader\\LoaderInterface;
use Symfony\\Component\\Validator\\Tests\\Fixtures\\ConstraintA;

class LazyLoadingMetadataFactoryTest extends TestCase
{
    const CLASS_NAME = 'Symfony\\Component\\Validator\\Tests\\Fixtures\\Entity';
    const PARENT_CLASS = 'Symfony\\Component\\Validator\\Tests\\Fixtures\\EntityParent';
    const INTERFACE_A_CLASS = 'Symfony\\Component\\Validator\\Tests\\Fixtures\\EntityInterfaceA';
    const INTERFACE_B_CLASS = 'Symfony\\Component\\Validator\\Tests\\Fixtures\\EntityInterfaceB';
    const PARENT_INTERFACE_CLASS = 'Symfony\\Component\\Validator\\Tests\\Fixtures\\EntityParentInterface';

    public function testLoadClassMetadataWithInterface()
    {
        \$factory = new LazyLoadingMetadataFactory(new TestLoader());
        \$metadata = \$factory->getMetadataFor(self::PARENT_CLASS);

        \$constraints = [
            new ConstraintA(['groups' => ['Default', 'EntityParent']]),
            new ConstraintA(['groups' => ['Default', 'EntityInterfaceA', 'EntityParent']]),
        ];

        \$this->assertEquals(\$constraints, \$metadata->getConstraints());
    }

    public function testMergeParentConstraints()
    {
        \$factory = new LazyLoadingMetadataFactory(new TestLoader());
        \$metadata = \$factory->getMetadataFor(self::CLASS_NAME);

        \$constraints = [
            new ConstraintA(['groups' => [
                'Default',
                'Entity',
            ]]),
            new ConstraintA(['groups' => [
                'Default',
                'EntityParent',
                'Entity',
            ]]),
            new ConstraintA(['groups' => [
                'Default',
                'EntityInterfaceA',
                'EntityParent',
                'Entity',
            ]]),
            new ConstraintA(['groups' => [
                'Default',
                'EntityInterfaceB',
                'Entity',
            ]]),
            new ConstraintA(['groups' => [
                'Default',
                'EntityParentInterface',
                'EntityInterfaceB',
                'Entity',
            ]]),
        ];

        \$this->assertEquals(\$constraints, \$metadata->getConstraints());
    }

    public function testWriteMetadataToCache()
    {
        \$cache = new Psr6Cache(new ArrayAdapter());
        \$factory = new LazyLoadingMetadataFactory(new TestLoader(), \$cache);

        \$parentClassConstraints = [
            new ConstraintA(['groups' => ['Default', 'EntityParent']]),
            new ConstraintA(['groups' => ['Default', 'EntityInterfaceA', 'EntityParent']]),
        ];

        \$metadata = \$factory->getMetadataFor(self::PARENT_CLASS);

        \$this->assertEquals(self::PARENT_CLASS, \$metadata->getClassName());
        \$this->assertEquals(\$parentClassConstraints, \$metadata->getConstraints());
        \$this->assertInstanceOf(ClassMetadata::class, \$cache->read(self::PARENT_CLASS));
        \$this->assertInstanceOf(ClassMetadata::class, \$cache->read(self::INTERFACE_A_CLASS));
    }

    public function testReadMetadataFromCache()
    {
        \$loader = \$this->getMockBuilder('Symfony\\Component\\Validator\\Mapping\\Loader\\LoaderInterface')->getMock();
        \$cache = \$this->getMockBuilder('Symfony\\Component\\Validator\\Mapping\\Cache\\CacheInterface')->getMock();
        \$factory = new LazyLoadingMetadataFactory(\$loader, \$cache);

        \$metadata = new ClassMetadata(self::PARENT_CLASS);
        \$metadata->addConstraint(new ConstraintA());

        \$parentClass = self::PARENT_CLASS;
        \$interfaceClass = self::INTERFACE_A_CLASS;

        \$loader->expects(\$this->never())
               ->method('loadClassMetadata');

        \$cache->expects(\$this->never())
              ->method('has');
        \$cache->expects(\$this->exactly(2))
              ->method('read')
              ->withConsecutive(
                  [self::PARENT_CLASS],
                  [self::INTERFACE_A_CLASS]
              )
              ->willReturnCallback(function (\$name) use (\$metadata, \$parentClass, \$interfaceClass) {
                  if (\$parentClass == \$name) {
                      return \$metadata;
                  }

                  return new ClassMetadata(\$interfaceClass);
              });

        \$this->assertEquals(\$metadata, \$factory->getMetadataFor(self::PARENT_CLASS));
    }

    public function testNonClassNameStringValues()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\NoSuchMetadataException');
        \$testedValue = 'error@example.com';
        \$loader = \$this->getMockBuilder('Symfony\\Component\\Validator\\Mapping\\Loader\\LoaderInterface')->getMock();
        \$cache = \$this->getMockBuilder('Symfony\\Component\\Validator\\Mapping\\Cache\\CacheInterface')->getMock();
        \$factory = new LazyLoadingMetadataFactory(\$loader, \$cache);
        \$cache
            ->expects(\$this->never())
            ->method('read');
        \$factory->getMetadataFor(\$testedValue);
    }

    public function testMetadataCacheWithRuntimeConstraint()
    {
        \$cache = \$this->getMockBuilder('Symfony\\Component\\Validator\\Mapping\\Cache\\CacheInterface')->getMock();
        \$factory = new LazyLoadingMetadataFactory(new TestLoader(), \$cache);

        \$cache
            ->expects(\$this->any())
            ->method('write')
            ->willReturnCallback(function (\$metadata) { serialize(\$metadata); })
        ;

        \$cache->expects(\$this->any())
            ->method('read')
            ->willReturn(false);

        \$metadata = \$factory->getMetadataFor(self::PARENT_CLASS);
        \$metadata->addConstraint(new Callback(function () {}));

        \$this->assertCount(3, \$metadata->getConstraints());

        \$metadata = \$factory->getMetadataFor(self::CLASS_NAME);

        \$this->assertCount(6, \$metadata->getConstraints());
    }

    public function testGroupsFromParent()
    {
        \$reader = new \\Symfony\\Component\\Validator\\Mapping\\Loader\\StaticMethodLoader();
        \$factory = new LazyLoadingMetadataFactory(\$reader);
        \$metadata = \$factory->getMetadataFor('Symfony\\Component\\Validator\\Tests\\Fixtures\\EntityStaticCarTurbo');
        \$groups = [];

        foreach (\$metadata->getPropertyMetadata('wheels') as \$propertyMetadata) {
            \$constraints = \$propertyMetadata->getConstraints();
            \$groups = array_replace(\$groups, \$constraints[0]->groups);
        }

        \$this->assertCount(4, \$groups);
        \$this->assertContains('Default', \$groups);
        \$this->assertContains('EntityStaticCarTurbo', \$groups);
        \$this->assertContains('EntityStaticCar', \$groups);
        \$this->assertContains('EntityStaticVehicle', \$groups);
    }
}

class TestLoader implements LoaderInterface
{
    public function loadClassMetadata(ClassMetadata \$metadata)
    {
        \$metadata->addConstraint(new ConstraintA());
    }
}
", "vendor/symfony/validator/Tests/Mapping/Factory/LazyLoadingMetadataFactoryTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Mapping/Factory/LazyLoadingMetadataFactoryTest.php");
    }
}
