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

/* vendor/symfony/doctrine-bridge/Tests/PropertyInfo/DoctrineExtractorTest.php */
class __TwigTemplate_1d6301a55a399bf912e039e710522e702258969391d4b28f67bbc077503ca06a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Tests/PropertyInfo/DoctrineExtractorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Tests/PropertyInfo/DoctrineExtractorTest.php"));

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

namespace Symfony\\Bridge\\Doctrine\\Tests\\PropertyInfo;

use Doctrine\\DBAL\\Types\\Type as DBALType;
use Doctrine\\ORM\\EntityManager;
use Doctrine\\ORM\\Tools\\Setup;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Doctrine\\PropertyInfo\\DoctrineExtractor;
use Symfony\\Bridge\\Doctrine\\Tests\\PropertyInfo\\Fixtures\\DoctrineGeneratedValue;
use Symfony\\Component\\PropertyInfo\\Type;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class DoctrineExtractorTest extends TestCase
{
    private function createExtractor(bool \$legacy = false)
    {
        \$config = Setup::createAnnotationMetadataConfiguration([__DIR__.\\DIRECTORY_SEPARATOR.'Fixtures'], true);
        \$entityManager = EntityManager::create(['driver' => 'pdo_sqlite'], \$config);

        if (!DBALType::hasType('foo')) {
            DBALType::addType('foo', 'Symfony\\Bridge\\Doctrine\\Tests\\PropertyInfo\\Fixtures\\DoctrineFooType');
            \$entityManager->getConnection()->getDatabasePlatform()->registerDoctrineTypeMapping('custom_foo', 'foo');
        }

        return new DoctrineExtractor(\$legacy ? \$entityManager->getMetadataFactory() : \$entityManager);
    }

    public function testGetProperties()
    {
        \$this->doTestGetProperties(false);
    }

    public function testLegacyGetProperties()
    {
        \$this->doTestGetProperties(true);
    }

    private function doTestGetProperties(bool \$legacy)
    {
        \$this->assertEquals(
             [
                'id',
                'guid',
                'time',
                'timeImmutable',
                'dateInterval',
                'json',
                'simpleArray',
                'float',
                'decimal',
                'bool',
                'binary',
                'customFoo',
                'bigint',
                'foo',
                'bar',
                'indexedBar',
                'indexedFoo',
            ],
            \$this->createExtractor(\$legacy)->getProperties('Symfony\\Bridge\\Doctrine\\Tests\\PropertyInfo\\Fixtures\\DoctrineDummy')
        );
    }

    public function testTestGetPropertiesWithEmbedded()
    {
        \$this->doTestGetPropertiesWithEmbedded(false);
    }

    public function testLegacyTestGetPropertiesWithEmbedded()
    {
        \$this->doTestGetPropertiesWithEmbedded(true);
    }

    private function doTestGetPropertiesWithEmbedded(bool \$legacy)
    {
        if (!class_exists('Doctrine\\ORM\\Mapping\\Embedded')) {
            \$this->markTestSkipped('@Embedded is not available in Doctrine ORM lower than 2.5.');
        }

        \$this->assertEquals(
            [
                'id',
                'embedded',
            ],
            \$this->createExtractor(\$legacy)->getProperties('Symfony\\Bridge\\Doctrine\\Tests\\PropertyInfo\\Fixtures\\DoctrineWithEmbedded')
        );
    }

    /**
     * @dataProvider typesProvider
     */
    public function testExtract(\$property, array \$type = null)
    {
        \$this->doTestExtract(false, \$property, \$type);
    }

    /**
     * @dataProvider typesProvider
     */
    public function testLegacyExtract(\$property, array \$type = null)
    {
        \$this->doTestExtract(true, \$property, \$type);
    }

    private function doTestExtract(bool \$legacy, \$property, array \$type = null)
    {
        \$this->assertEquals(\$type, \$this->createExtractor(\$legacy)->getTypes('Symfony\\Bridge\\Doctrine\\Tests\\PropertyInfo\\Fixtures\\DoctrineDummy', \$property, []));
    }

    public function testExtractWithEmbedded()
    {
        \$this->doTestExtractWithEmbedded(false);
    }

    public function testLegacyExtractWithEmbedded()
    {
        \$this->doTestExtractWithEmbedded(true);
    }

    private function doTestExtractWithEmbedded(bool \$legacy)
    {
        if (!class_exists('Doctrine\\ORM\\Mapping\\Embedded')) {
            \$this->markTestSkipped('@Embedded is not available in Doctrine ORM lower than 2.5.');
        }

        \$expectedTypes = [new Type(
            Type::BUILTIN_TYPE_OBJECT,
            false,
            'Symfony\\Bridge\\Doctrine\\Tests\\PropertyInfo\\Fixtures\\DoctrineEmbeddable'
        )];

        \$actualTypes = \$this->createExtractor(\$legacy)->getTypes(
            'Symfony\\Bridge\\Doctrine\\Tests\\PropertyInfo\\Fixtures\\DoctrineWithEmbedded',
            'embedded',
            []
        );

        \$this->assertEquals(\$expectedTypes, \$actualTypes);
    }

    public function typesProvider()
    {
        return [
            ['id', [new Type(Type::BUILTIN_TYPE_INT)]],
            ['guid', [new Type(Type::BUILTIN_TYPE_STRING)]],
            ['bigint', [new Type(Type::BUILTIN_TYPE_STRING)]],
            ['time', [new Type(Type::BUILTIN_TYPE_OBJECT, false, 'DateTime')]],
            ['timeImmutable', [new Type(Type::BUILTIN_TYPE_OBJECT, false, 'DateTimeImmutable')]],
            ['dateInterval', [new Type(Type::BUILTIN_TYPE_OBJECT, false, 'DateInterval')]],
            ['float', [new Type(Type::BUILTIN_TYPE_FLOAT)]],
            ['decimal', [new Type(Type::BUILTIN_TYPE_STRING)]],
            ['bool', [new Type(Type::BUILTIN_TYPE_BOOL)]],
            ['binary', [new Type(Type::BUILTIN_TYPE_RESOURCE)]],
            ['json', [new Type(Type::BUILTIN_TYPE_ARRAY, false, null, true)]],
            ['foo', [new Type(Type::BUILTIN_TYPE_OBJECT, true, 'Symfony\\Bridge\\Doctrine\\Tests\\PropertyInfo\\Fixtures\\DoctrineRelation')]],
            ['bar', [new Type(
                Type::BUILTIN_TYPE_OBJECT,
                false,
                'Doctrine\\Common\\Collections\\Collection',
                true,
                new Type(Type::BUILTIN_TYPE_INT),
                new Type(Type::BUILTIN_TYPE_OBJECT, false, 'Symfony\\Bridge\\Doctrine\\Tests\\PropertyInfo\\Fixtures\\DoctrineRelation')
            )]],
            ['indexedBar', [new Type(
                Type::BUILTIN_TYPE_OBJECT,
                false,
                'Doctrine\\Common\\Collections\\Collection',
                true,
                new Type(Type::BUILTIN_TYPE_STRING),
                new Type(Type::BUILTIN_TYPE_OBJECT, false, 'Symfony\\Bridge\\Doctrine\\Tests\\PropertyInfo\\Fixtures\\DoctrineRelation')
            )]],
            ['indexedFoo', [new Type(
                Type::BUILTIN_TYPE_OBJECT,
                false,
                'Doctrine\\Common\\Collections\\Collection',
                true,
                new Type(Type::BUILTIN_TYPE_STRING),
                new Type(Type::BUILTIN_TYPE_OBJECT, false, 'Symfony\\Bridge\\Doctrine\\Tests\\PropertyInfo\\Fixtures\\DoctrineRelation')
            )]],
            ['simpleArray', [new Type(Type::BUILTIN_TYPE_ARRAY, false, null, true, new Type(Type::BUILTIN_TYPE_INT), new Type(Type::BUILTIN_TYPE_STRING))]],
            ['customFoo', null],
            ['notMapped', null],
        ];
    }

    public function testGetPropertiesCatchException()
    {
        \$this->doTestGetPropertiesCatchException(false);
    }

    public function testLegacyGetPropertiesCatchException()
    {
        \$this->doTestGetPropertiesCatchException(true);
    }

    private function doTestGetPropertiesCatchException(bool \$legacy)
    {
        \$this->assertNull(\$this->createExtractor(\$legacy)->getProperties('Not\\Exist'));
    }

    public function testGetTypesCatchException()
    {
        return \$this->doTestGetTypesCatchException(false);
    }

    public function testLegacyGetTypesCatchException()
    {
        return \$this->doTestGetTypesCatchException(true);
    }

    private function doTestGetTypesCatchException(bool \$legacy)
    {
        \$this->assertNull(\$this->createExtractor(\$legacy)->getTypes('Not\\Exist', 'baz'));
    }

    public function testGeneratedValueNotWritable()
    {
        \$extractor = \$this->createExtractor();
        \$this->assertFalse(\$extractor->isWritable(DoctrineGeneratedValue::class, 'id'));
        \$this->assertNull(\$extractor->isReadable(DoctrineGeneratedValue::class, 'id'));
        \$this->assertNull(\$extractor->isWritable(DoctrineGeneratedValue::class, 'foo'));
        \$this->assertNull(\$extractor->isReadable(DoctrineGeneratedValue::class, 'foo'));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/doctrine-bridge/Tests/PropertyInfo/DoctrineExtractorTest.php";
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

namespace Symfony\\Bridge\\Doctrine\\Tests\\PropertyInfo;

use Doctrine\\DBAL\\Types\\Type as DBALType;
use Doctrine\\ORM\\EntityManager;
use Doctrine\\ORM\\Tools\\Setup;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Doctrine\\PropertyInfo\\DoctrineExtractor;
use Symfony\\Bridge\\Doctrine\\Tests\\PropertyInfo\\Fixtures\\DoctrineGeneratedValue;
use Symfony\\Component\\PropertyInfo\\Type;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class DoctrineExtractorTest extends TestCase
{
    private function createExtractor(bool \$legacy = false)
    {
        \$config = Setup::createAnnotationMetadataConfiguration([__DIR__.\\DIRECTORY_SEPARATOR.'Fixtures'], true);
        \$entityManager = EntityManager::create(['driver' => 'pdo_sqlite'], \$config);

        if (!DBALType::hasType('foo')) {
            DBALType::addType('foo', 'Symfony\\Bridge\\Doctrine\\Tests\\PropertyInfo\\Fixtures\\DoctrineFooType');
            \$entityManager->getConnection()->getDatabasePlatform()->registerDoctrineTypeMapping('custom_foo', 'foo');
        }

        return new DoctrineExtractor(\$legacy ? \$entityManager->getMetadataFactory() : \$entityManager);
    }

    public function testGetProperties()
    {
        \$this->doTestGetProperties(false);
    }

    public function testLegacyGetProperties()
    {
        \$this->doTestGetProperties(true);
    }

    private function doTestGetProperties(bool \$legacy)
    {
        \$this->assertEquals(
             [
                'id',
                'guid',
                'time',
                'timeImmutable',
                'dateInterval',
                'json',
                'simpleArray',
                'float',
                'decimal',
                'bool',
                'binary',
                'customFoo',
                'bigint',
                'foo',
                'bar',
                'indexedBar',
                'indexedFoo',
            ],
            \$this->createExtractor(\$legacy)->getProperties('Symfony\\Bridge\\Doctrine\\Tests\\PropertyInfo\\Fixtures\\DoctrineDummy')
        );
    }

    public function testTestGetPropertiesWithEmbedded()
    {
        \$this->doTestGetPropertiesWithEmbedded(false);
    }

    public function testLegacyTestGetPropertiesWithEmbedded()
    {
        \$this->doTestGetPropertiesWithEmbedded(true);
    }

    private function doTestGetPropertiesWithEmbedded(bool \$legacy)
    {
        if (!class_exists('Doctrine\\ORM\\Mapping\\Embedded')) {
            \$this->markTestSkipped('@Embedded is not available in Doctrine ORM lower than 2.5.');
        }

        \$this->assertEquals(
            [
                'id',
                'embedded',
            ],
            \$this->createExtractor(\$legacy)->getProperties('Symfony\\Bridge\\Doctrine\\Tests\\PropertyInfo\\Fixtures\\DoctrineWithEmbedded')
        );
    }

    /**
     * @dataProvider typesProvider
     */
    public function testExtract(\$property, array \$type = null)
    {
        \$this->doTestExtract(false, \$property, \$type);
    }

    /**
     * @dataProvider typesProvider
     */
    public function testLegacyExtract(\$property, array \$type = null)
    {
        \$this->doTestExtract(true, \$property, \$type);
    }

    private function doTestExtract(bool \$legacy, \$property, array \$type = null)
    {
        \$this->assertEquals(\$type, \$this->createExtractor(\$legacy)->getTypes('Symfony\\Bridge\\Doctrine\\Tests\\PropertyInfo\\Fixtures\\DoctrineDummy', \$property, []));
    }

    public function testExtractWithEmbedded()
    {
        \$this->doTestExtractWithEmbedded(false);
    }

    public function testLegacyExtractWithEmbedded()
    {
        \$this->doTestExtractWithEmbedded(true);
    }

    private function doTestExtractWithEmbedded(bool \$legacy)
    {
        if (!class_exists('Doctrine\\ORM\\Mapping\\Embedded')) {
            \$this->markTestSkipped('@Embedded is not available in Doctrine ORM lower than 2.5.');
        }

        \$expectedTypes = [new Type(
            Type::BUILTIN_TYPE_OBJECT,
            false,
            'Symfony\\Bridge\\Doctrine\\Tests\\PropertyInfo\\Fixtures\\DoctrineEmbeddable'
        )];

        \$actualTypes = \$this->createExtractor(\$legacy)->getTypes(
            'Symfony\\Bridge\\Doctrine\\Tests\\PropertyInfo\\Fixtures\\DoctrineWithEmbedded',
            'embedded',
            []
        );

        \$this->assertEquals(\$expectedTypes, \$actualTypes);
    }

    public function typesProvider()
    {
        return [
            ['id', [new Type(Type::BUILTIN_TYPE_INT)]],
            ['guid', [new Type(Type::BUILTIN_TYPE_STRING)]],
            ['bigint', [new Type(Type::BUILTIN_TYPE_STRING)]],
            ['time', [new Type(Type::BUILTIN_TYPE_OBJECT, false, 'DateTime')]],
            ['timeImmutable', [new Type(Type::BUILTIN_TYPE_OBJECT, false, 'DateTimeImmutable')]],
            ['dateInterval', [new Type(Type::BUILTIN_TYPE_OBJECT, false, 'DateInterval')]],
            ['float', [new Type(Type::BUILTIN_TYPE_FLOAT)]],
            ['decimal', [new Type(Type::BUILTIN_TYPE_STRING)]],
            ['bool', [new Type(Type::BUILTIN_TYPE_BOOL)]],
            ['binary', [new Type(Type::BUILTIN_TYPE_RESOURCE)]],
            ['json', [new Type(Type::BUILTIN_TYPE_ARRAY, false, null, true)]],
            ['foo', [new Type(Type::BUILTIN_TYPE_OBJECT, true, 'Symfony\\Bridge\\Doctrine\\Tests\\PropertyInfo\\Fixtures\\DoctrineRelation')]],
            ['bar', [new Type(
                Type::BUILTIN_TYPE_OBJECT,
                false,
                'Doctrine\\Common\\Collections\\Collection',
                true,
                new Type(Type::BUILTIN_TYPE_INT),
                new Type(Type::BUILTIN_TYPE_OBJECT, false, 'Symfony\\Bridge\\Doctrine\\Tests\\PropertyInfo\\Fixtures\\DoctrineRelation')
            )]],
            ['indexedBar', [new Type(
                Type::BUILTIN_TYPE_OBJECT,
                false,
                'Doctrine\\Common\\Collections\\Collection',
                true,
                new Type(Type::BUILTIN_TYPE_STRING),
                new Type(Type::BUILTIN_TYPE_OBJECT, false, 'Symfony\\Bridge\\Doctrine\\Tests\\PropertyInfo\\Fixtures\\DoctrineRelation')
            )]],
            ['indexedFoo', [new Type(
                Type::BUILTIN_TYPE_OBJECT,
                false,
                'Doctrine\\Common\\Collections\\Collection',
                true,
                new Type(Type::BUILTIN_TYPE_STRING),
                new Type(Type::BUILTIN_TYPE_OBJECT, false, 'Symfony\\Bridge\\Doctrine\\Tests\\PropertyInfo\\Fixtures\\DoctrineRelation')
            )]],
            ['simpleArray', [new Type(Type::BUILTIN_TYPE_ARRAY, false, null, true, new Type(Type::BUILTIN_TYPE_INT), new Type(Type::BUILTIN_TYPE_STRING))]],
            ['customFoo', null],
            ['notMapped', null],
        ];
    }

    public function testGetPropertiesCatchException()
    {
        \$this->doTestGetPropertiesCatchException(false);
    }

    public function testLegacyGetPropertiesCatchException()
    {
        \$this->doTestGetPropertiesCatchException(true);
    }

    private function doTestGetPropertiesCatchException(bool \$legacy)
    {
        \$this->assertNull(\$this->createExtractor(\$legacy)->getProperties('Not\\Exist'));
    }

    public function testGetTypesCatchException()
    {
        return \$this->doTestGetTypesCatchException(false);
    }

    public function testLegacyGetTypesCatchException()
    {
        return \$this->doTestGetTypesCatchException(true);
    }

    private function doTestGetTypesCatchException(bool \$legacy)
    {
        \$this->assertNull(\$this->createExtractor(\$legacy)->getTypes('Not\\Exist', 'baz'));
    }

    public function testGeneratedValueNotWritable()
    {
        \$extractor = \$this->createExtractor();
        \$this->assertFalse(\$extractor->isWritable(DoctrineGeneratedValue::class, 'id'));
        \$this->assertNull(\$extractor->isReadable(DoctrineGeneratedValue::class, 'id'));
        \$this->assertNull(\$extractor->isWritable(DoctrineGeneratedValue::class, 'foo'));
        \$this->assertNull(\$extractor->isReadable(DoctrineGeneratedValue::class, 'foo'));
    }
}
", "vendor/symfony/doctrine-bridge/Tests/PropertyInfo/DoctrineExtractorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/doctrine-bridge/Tests/PropertyInfo/DoctrineExtractorTest.php");
    }
}
