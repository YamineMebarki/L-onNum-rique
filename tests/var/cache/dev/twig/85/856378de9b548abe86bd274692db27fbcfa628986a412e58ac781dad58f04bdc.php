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

/* vendor/symfony/property-info/Tests/Extractor/PhpDocExtractorTest.php */
class __TwigTemplate_c66dcf856995f7dbfb76d09c6461c9b157e01b86434c182229d0193485e12867 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/property-info/Tests/Extractor/PhpDocExtractorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/property-info/Tests/Extractor/PhpDocExtractorTest.php"));

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

namespace Symfony\\Component\\PropertyInfo\\Tests\\PhpDocExtractor;

use phpDocumentor\\Reflection\\Types\\Collection;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\PropertyInfo\\Extractor\\PhpDocExtractor;
use Symfony\\Component\\PropertyInfo\\Type;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class PhpDocExtractorTest extends TestCase
{
    /**
     * @var PhpDocExtractor
     */
    private \$extractor;

    protected function setUp(): void
    {
        \$this->extractor = new PhpDocExtractor();
    }

    /**
     * @dataProvider typesProvider
     */
    public function testExtract(\$property, array \$type = null, \$shortDescription, \$longDescription)
    {
        \$this->assertEquals(\$type, \$this->extractor->getTypes('Symfony\\Component\\PropertyInfo\\Tests\\Fixtures\\Dummy', \$property));
        \$this->assertSame(\$shortDescription, \$this->extractor->getShortDescription('Symfony\\Component\\PropertyInfo\\Tests\\Fixtures\\Dummy', \$property));
        \$this->assertSame(\$longDescription, \$this->extractor->getLongDescription('Symfony\\Component\\PropertyInfo\\Tests\\Fixtures\\Dummy', \$property));
    }

    public function testParamTagTypeIsOmitted()
    {
        \$this->assertNull(\$this->extractor->getTypes(OmittedParamTagTypeDocBlock::class, 'omittedType'));
    }

    /**
     * @dataProvider typesWithNoPrefixesProvider
     */
    public function testExtractTypesWithNoPrefixes(\$property, array \$type = null)
    {
        \$noPrefixExtractor = new PhpDocExtractor(null, [], [], []);

        \$this->assertEquals(\$type, \$noPrefixExtractor->getTypes('Symfony\\Component\\PropertyInfo\\Tests\\Fixtures\\Dummy', \$property));
    }

    public function typesProvider()
    {
        return [
            ['foo', null, 'Short description.', 'Long description.'],
            ['bar', [new Type(Type::BUILTIN_TYPE_STRING)], 'This is bar', null],
            ['baz', [new Type(Type::BUILTIN_TYPE_INT)], 'Should be used.', null],
            ['foo2', [new Type(Type::BUILTIN_TYPE_FLOAT)], null, null],
            ['foo3', [new Type(Type::BUILTIN_TYPE_CALLABLE)], null, null],
            ['foo4', [new Type(Type::BUILTIN_TYPE_NULL)], null, null],
            ['foo5', null, null, null],
            [
                'files',
                [
                    new Type(Type::BUILTIN_TYPE_ARRAY, false, null, true, new Type(Type::BUILTIN_TYPE_INT), new Type(Type::BUILTIN_TYPE_OBJECT, false, 'SplFileInfo')),
                    new Type(Type::BUILTIN_TYPE_RESOURCE),
                ],
                null,
                null,
            ],
            ['bal', [new Type(Type::BUILTIN_TYPE_OBJECT, false, 'DateTime')], null, null],
            ['parent', [new Type(Type::BUILTIN_TYPE_OBJECT, false, 'Symfony\\Component\\PropertyInfo\\Tests\\Fixtures\\ParentDummy')], null, null],
            ['collection', [new Type(Type::BUILTIN_TYPE_ARRAY, false, null, true, new Type(Type::BUILTIN_TYPE_INT), new Type(Type::BUILTIN_TYPE_OBJECT, false, 'DateTime'))], null, null],
            ['nestedCollection', [new Type(Type::BUILTIN_TYPE_ARRAY, false, null, true, new Type(Type::BUILTIN_TYPE_INT), new Type(Type::BUILTIN_TYPE_ARRAY, false, null, true, new Type(Type::BUILTIN_TYPE_INT), new Type(Type::BUILTIN_TYPE_STRING, false)))], null, null],
            ['mixedCollection', [new Type(Type::BUILTIN_TYPE_ARRAY, false, null, true, null, null)], null, null],
            ['a', [new Type(Type::BUILTIN_TYPE_INT)], 'A.', null],
            ['b', [new Type(Type::BUILTIN_TYPE_OBJECT, true, 'Symfony\\Component\\PropertyInfo\\Tests\\Fixtures\\ParentDummy')], 'B.', null],
            ['c', [new Type(Type::BUILTIN_TYPE_BOOL, true)], null, null],
            ['d', [new Type(Type::BUILTIN_TYPE_BOOL)], null, null],
            ['e', [new Type(Type::BUILTIN_TYPE_ARRAY, false, null, true, new Type(Type::BUILTIN_TYPE_INT), new Type(Type::BUILTIN_TYPE_RESOURCE))], null, null],
            ['f', [new Type(Type::BUILTIN_TYPE_ARRAY, false, null, true, new Type(Type::BUILTIN_TYPE_INT), new Type(Type::BUILTIN_TYPE_OBJECT, false, 'DateTime'))], null, null],
            ['g', [new Type(Type::BUILTIN_TYPE_ARRAY, true, null, true)], 'Nullable array.', null],
            ['h', [new Type(Type::BUILTIN_TYPE_STRING, true)], null, null],
            ['i', [new Type(Type::BUILTIN_TYPE_STRING, true), new Type(Type::BUILTIN_TYPE_INT, true)], null, null],
            ['j', [new Type(Type::BUILTIN_TYPE_OBJECT, true, 'DateTime')], null, null],
            ['donotexist', null, null, null],
            ['staticGetter', null, null, null],
            ['staticSetter', null, null, null],
            ['emptyVar', null, null, null],
        ];
    }

    /**
     * @dataProvider provideCollectionTypes
     */
    public function testExtractCollection(\$property, array \$type = null, \$shortDescription, \$longDescription)
    {
        if (!class_exists(Collection::class)) {
            \$this->markTestSkipped('Collections are not implemented in current phpdocumentor/type-resolver version');
        }

        \$this->testExtract(\$property, \$type, \$shortDescription, \$longDescription);
    }

    public function provideCollectionTypes()
    {
        return [
            ['iteratorCollection', [new Type(Type::BUILTIN_TYPE_OBJECT, false, 'Iterator', true, null, new Type(Type::BUILTIN_TYPE_STRING))], null, null],
            ['iteratorCollectionWithKey', [new Type(Type::BUILTIN_TYPE_OBJECT, false, 'Iterator', true, new Type(Type::BUILTIN_TYPE_INT), new Type(Type::BUILTIN_TYPE_STRING))], null, null],
            [
                'nestedIterators',
                [new Type(
                    Type::BUILTIN_TYPE_OBJECT,
                    false,
                    'Iterator',
                    true,
                    new Type(Type::BUILTIN_TYPE_INT),
                    new Type(Type::BUILTIN_TYPE_OBJECT, false, 'Iterator', true, new Type(Type::BUILTIN_TYPE_INT), new Type(Type::BUILTIN_TYPE_STRING))
                )],
                null,
                null,
            ],
        ];
    }

    /**
     * @dataProvider typesWithCustomPrefixesProvider
     */
    public function testExtractTypesWithCustomPrefixes(\$property, array \$type = null)
    {
        \$customExtractor = new PhpDocExtractor(null, ['add', 'remove'], ['is', 'can']);

        \$this->assertEquals(\$type, \$customExtractor->getTypes('Symfony\\Component\\PropertyInfo\\Tests\\Fixtures\\Dummy', \$property));
    }

    public function typesWithCustomPrefixesProvider()
    {
        return [
            ['foo', null, 'Short description.', 'Long description.'],
            ['bar', [new Type(Type::BUILTIN_TYPE_STRING)], 'This is bar', null],
            ['baz', [new Type(Type::BUILTIN_TYPE_INT)], 'Should be used.', null],
            ['foo2', [new Type(Type::BUILTIN_TYPE_FLOAT)], null, null],
            ['foo3', [new Type(Type::BUILTIN_TYPE_CALLABLE)], null, null],
            ['foo4', [new Type(Type::BUILTIN_TYPE_NULL)], null, null],
            ['foo5', null, null, null],
            [
                'files',
                [
                    new Type(Type::BUILTIN_TYPE_ARRAY, false, null, true, new Type(Type::BUILTIN_TYPE_INT), new Type(Type::BUILTIN_TYPE_OBJECT, false, 'SplFileInfo')),
                    new Type(Type::BUILTIN_TYPE_RESOURCE),
                ],
                null,
                null,
            ],
            ['bal', [new Type(Type::BUILTIN_TYPE_OBJECT, false, 'DateTime')], null, null],
            ['parent', [new Type(Type::BUILTIN_TYPE_OBJECT, false, 'Symfony\\Component\\PropertyInfo\\Tests\\Fixtures\\ParentDummy')], null, null],
            ['collection', [new Type(Type::BUILTIN_TYPE_ARRAY, false, null, true, new Type(Type::BUILTIN_TYPE_INT), new Type(Type::BUILTIN_TYPE_OBJECT, false, 'DateTime'))], null, null],
            ['nestedCollection', [new Type(Type::BUILTIN_TYPE_ARRAY, false, null, true, new Type(Type::BUILTIN_TYPE_INT), new Type(Type::BUILTIN_TYPE_ARRAY, false, null, true, new Type(Type::BUILTIN_TYPE_INT), new Type(Type::BUILTIN_TYPE_STRING, false)))], null, null],
            ['mixedCollection', [new Type(Type::BUILTIN_TYPE_ARRAY, false, null, true, null, null)], null, null],
            ['a', null, 'A.', null],
            ['b', null, 'B.', null],
            ['c', [new Type(Type::BUILTIN_TYPE_BOOL, true)], null, null],
            ['d', [new Type(Type::BUILTIN_TYPE_BOOL)], null, null],
            ['e', [new Type(Type::BUILTIN_TYPE_ARRAY, false, null, true, new Type(Type::BUILTIN_TYPE_INT), new Type(Type::BUILTIN_TYPE_RESOURCE))], null, null],
            ['f', [new Type(Type::BUILTIN_TYPE_ARRAY, false, null, true, new Type(Type::BUILTIN_TYPE_INT), new Type(Type::BUILTIN_TYPE_OBJECT, false, 'DateTime'))], null, null],
            ['g', [new Type(Type::BUILTIN_TYPE_ARRAY, true, null, true)], 'Nullable array.', null],
            ['h', [new Type(Type::BUILTIN_TYPE_STRING, true)], null, null],
            ['i', [new Type(Type::BUILTIN_TYPE_STRING, true), new Type(Type::BUILTIN_TYPE_INT, true)], null, null],
            ['j', [new Type(Type::BUILTIN_TYPE_OBJECT, true, 'DateTime')], null, null],
            ['donotexist', null, null, null],
            ['staticGetter', null, null, null],
            ['staticSetter', null, null, null],
        ];
    }

    public function typesWithNoPrefixesProvider()
    {
        return [
            ['foo', null, 'Short description.', 'Long description.'],
            ['bar', [new Type(Type::BUILTIN_TYPE_STRING)], 'This is bar', null],
            ['baz', [new Type(Type::BUILTIN_TYPE_INT)], 'Should be used.', null],
            ['foo2', [new Type(Type::BUILTIN_TYPE_FLOAT)], null, null],
            ['foo3', [new Type(Type::BUILTIN_TYPE_CALLABLE)], null, null],
            ['foo4', [new Type(Type::BUILTIN_TYPE_NULL)], null, null],
            ['foo5', null, null, null],
            [
                'files',
                [
                    new Type(Type::BUILTIN_TYPE_ARRAY, false, null, true, new Type(Type::BUILTIN_TYPE_INT), new Type(Type::BUILTIN_TYPE_OBJECT, false, 'SplFileInfo')),
                    new Type(Type::BUILTIN_TYPE_RESOURCE),
                ],
                null,
                null,
            ],
            ['bal', [new Type(Type::BUILTIN_TYPE_OBJECT, false, 'DateTime')], null, null],
            ['parent', [new Type(Type::BUILTIN_TYPE_OBJECT, false, 'Symfony\\Component\\PropertyInfo\\Tests\\Fixtures\\ParentDummy')], null, null],
            ['collection', [new Type(Type::BUILTIN_TYPE_ARRAY, false, null, true, new Type(Type::BUILTIN_TYPE_INT), new Type(Type::BUILTIN_TYPE_OBJECT, false, 'DateTime'))], null, null],
            ['nestedCollection', [new Type(Type::BUILTIN_TYPE_ARRAY, false, null, true, new Type(Type::BUILTIN_TYPE_INT), new Type(Type::BUILTIN_TYPE_ARRAY, false, null, true, new Type(Type::BUILTIN_TYPE_INT), new Type(Type::BUILTIN_TYPE_STRING, false)))], null, null],
            ['mixedCollection', [new Type(Type::BUILTIN_TYPE_ARRAY, false, null, true, null, null)], null, null],
            ['a', null, 'A.', null],
            ['b', null, 'B.', null],
            ['c', null, null, null],
            ['d', null, null, null],
            ['e', null, null, null],
            ['f', null, null, null],
            ['g', [new Type(Type::BUILTIN_TYPE_ARRAY, true, null, true)], 'Nullable array.', null],
            ['h', [new Type(Type::BUILTIN_TYPE_STRING, true)], null, null],
            ['i', [new Type(Type::BUILTIN_TYPE_STRING, true), new Type(Type::BUILTIN_TYPE_INT, true)], null, null],
            ['j', [new Type(Type::BUILTIN_TYPE_OBJECT, true, 'DateTime')], null, null],
            ['donotexist', null, null, null],
            ['staticGetter', null, null, null],
            ['staticSetter', null, null, null],
        ];
    }

    public function testReturnNullOnEmptyDocBlock()
    {
        \$this->assertNull(\$this->extractor->getShortDescription(EmptyDocBlock::class, 'foo'));
    }

    public function dockBlockFallbackTypesProvider()
    {
        return [
            'pub' => [
                'pub', [new Type(Type::BUILTIN_TYPE_STRING)],
            ],
            'protAcc' => [
                'protAcc', [new Type(Type::BUILTIN_TYPE_INT)],
            ],
            'protMut' => [
                'protMut', [new Type(Type::BUILTIN_TYPE_BOOL)],
            ],
        ];
    }

    /**
     * @dataProvider dockBlockFallbackTypesProvider
     */
    public function testDocBlockFallback(\$property, \$types)
    {
        \$this->assertEquals(\$types, \$this->extractor->getTypes('Symfony\\Component\\PropertyInfo\\Tests\\Fixtures\\DockBlockFallback', \$property));
    }
}

class EmptyDocBlock
{
    public \$foo;
}

class OmittedParamTagTypeDocBlock
{
    /**
     * The type is omitted here to ensure that the extractor doesn't choke on missing types.
     *
     * @param \$omittedTagType
     */
    public function setOmittedType(array \$omittedTagType)
    {
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/property-info/Tests/Extractor/PhpDocExtractorTest.php";
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

namespace Symfony\\Component\\PropertyInfo\\Tests\\PhpDocExtractor;

use phpDocumentor\\Reflection\\Types\\Collection;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\PropertyInfo\\Extractor\\PhpDocExtractor;
use Symfony\\Component\\PropertyInfo\\Type;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class PhpDocExtractorTest extends TestCase
{
    /**
     * @var PhpDocExtractor
     */
    private \$extractor;

    protected function setUp(): void
    {
        \$this->extractor = new PhpDocExtractor();
    }

    /**
     * @dataProvider typesProvider
     */
    public function testExtract(\$property, array \$type = null, \$shortDescription, \$longDescription)
    {
        \$this->assertEquals(\$type, \$this->extractor->getTypes('Symfony\\Component\\PropertyInfo\\Tests\\Fixtures\\Dummy', \$property));
        \$this->assertSame(\$shortDescription, \$this->extractor->getShortDescription('Symfony\\Component\\PropertyInfo\\Tests\\Fixtures\\Dummy', \$property));
        \$this->assertSame(\$longDescription, \$this->extractor->getLongDescription('Symfony\\Component\\PropertyInfo\\Tests\\Fixtures\\Dummy', \$property));
    }

    public function testParamTagTypeIsOmitted()
    {
        \$this->assertNull(\$this->extractor->getTypes(OmittedParamTagTypeDocBlock::class, 'omittedType'));
    }

    /**
     * @dataProvider typesWithNoPrefixesProvider
     */
    public function testExtractTypesWithNoPrefixes(\$property, array \$type = null)
    {
        \$noPrefixExtractor = new PhpDocExtractor(null, [], [], []);

        \$this->assertEquals(\$type, \$noPrefixExtractor->getTypes('Symfony\\Component\\PropertyInfo\\Tests\\Fixtures\\Dummy', \$property));
    }

    public function typesProvider()
    {
        return [
            ['foo', null, 'Short description.', 'Long description.'],
            ['bar', [new Type(Type::BUILTIN_TYPE_STRING)], 'This is bar', null],
            ['baz', [new Type(Type::BUILTIN_TYPE_INT)], 'Should be used.', null],
            ['foo2', [new Type(Type::BUILTIN_TYPE_FLOAT)], null, null],
            ['foo3', [new Type(Type::BUILTIN_TYPE_CALLABLE)], null, null],
            ['foo4', [new Type(Type::BUILTIN_TYPE_NULL)], null, null],
            ['foo5', null, null, null],
            [
                'files',
                [
                    new Type(Type::BUILTIN_TYPE_ARRAY, false, null, true, new Type(Type::BUILTIN_TYPE_INT), new Type(Type::BUILTIN_TYPE_OBJECT, false, 'SplFileInfo')),
                    new Type(Type::BUILTIN_TYPE_RESOURCE),
                ],
                null,
                null,
            ],
            ['bal', [new Type(Type::BUILTIN_TYPE_OBJECT, false, 'DateTime')], null, null],
            ['parent', [new Type(Type::BUILTIN_TYPE_OBJECT, false, 'Symfony\\Component\\PropertyInfo\\Tests\\Fixtures\\ParentDummy')], null, null],
            ['collection', [new Type(Type::BUILTIN_TYPE_ARRAY, false, null, true, new Type(Type::BUILTIN_TYPE_INT), new Type(Type::BUILTIN_TYPE_OBJECT, false, 'DateTime'))], null, null],
            ['nestedCollection', [new Type(Type::BUILTIN_TYPE_ARRAY, false, null, true, new Type(Type::BUILTIN_TYPE_INT), new Type(Type::BUILTIN_TYPE_ARRAY, false, null, true, new Type(Type::BUILTIN_TYPE_INT), new Type(Type::BUILTIN_TYPE_STRING, false)))], null, null],
            ['mixedCollection', [new Type(Type::BUILTIN_TYPE_ARRAY, false, null, true, null, null)], null, null],
            ['a', [new Type(Type::BUILTIN_TYPE_INT)], 'A.', null],
            ['b', [new Type(Type::BUILTIN_TYPE_OBJECT, true, 'Symfony\\Component\\PropertyInfo\\Tests\\Fixtures\\ParentDummy')], 'B.', null],
            ['c', [new Type(Type::BUILTIN_TYPE_BOOL, true)], null, null],
            ['d', [new Type(Type::BUILTIN_TYPE_BOOL)], null, null],
            ['e', [new Type(Type::BUILTIN_TYPE_ARRAY, false, null, true, new Type(Type::BUILTIN_TYPE_INT), new Type(Type::BUILTIN_TYPE_RESOURCE))], null, null],
            ['f', [new Type(Type::BUILTIN_TYPE_ARRAY, false, null, true, new Type(Type::BUILTIN_TYPE_INT), new Type(Type::BUILTIN_TYPE_OBJECT, false, 'DateTime'))], null, null],
            ['g', [new Type(Type::BUILTIN_TYPE_ARRAY, true, null, true)], 'Nullable array.', null],
            ['h', [new Type(Type::BUILTIN_TYPE_STRING, true)], null, null],
            ['i', [new Type(Type::BUILTIN_TYPE_STRING, true), new Type(Type::BUILTIN_TYPE_INT, true)], null, null],
            ['j', [new Type(Type::BUILTIN_TYPE_OBJECT, true, 'DateTime')], null, null],
            ['donotexist', null, null, null],
            ['staticGetter', null, null, null],
            ['staticSetter', null, null, null],
            ['emptyVar', null, null, null],
        ];
    }

    /**
     * @dataProvider provideCollectionTypes
     */
    public function testExtractCollection(\$property, array \$type = null, \$shortDescription, \$longDescription)
    {
        if (!class_exists(Collection::class)) {
            \$this->markTestSkipped('Collections are not implemented in current phpdocumentor/type-resolver version');
        }

        \$this->testExtract(\$property, \$type, \$shortDescription, \$longDescription);
    }

    public function provideCollectionTypes()
    {
        return [
            ['iteratorCollection', [new Type(Type::BUILTIN_TYPE_OBJECT, false, 'Iterator', true, null, new Type(Type::BUILTIN_TYPE_STRING))], null, null],
            ['iteratorCollectionWithKey', [new Type(Type::BUILTIN_TYPE_OBJECT, false, 'Iterator', true, new Type(Type::BUILTIN_TYPE_INT), new Type(Type::BUILTIN_TYPE_STRING))], null, null],
            [
                'nestedIterators',
                [new Type(
                    Type::BUILTIN_TYPE_OBJECT,
                    false,
                    'Iterator',
                    true,
                    new Type(Type::BUILTIN_TYPE_INT),
                    new Type(Type::BUILTIN_TYPE_OBJECT, false, 'Iterator', true, new Type(Type::BUILTIN_TYPE_INT), new Type(Type::BUILTIN_TYPE_STRING))
                )],
                null,
                null,
            ],
        ];
    }

    /**
     * @dataProvider typesWithCustomPrefixesProvider
     */
    public function testExtractTypesWithCustomPrefixes(\$property, array \$type = null)
    {
        \$customExtractor = new PhpDocExtractor(null, ['add', 'remove'], ['is', 'can']);

        \$this->assertEquals(\$type, \$customExtractor->getTypes('Symfony\\Component\\PropertyInfo\\Tests\\Fixtures\\Dummy', \$property));
    }

    public function typesWithCustomPrefixesProvider()
    {
        return [
            ['foo', null, 'Short description.', 'Long description.'],
            ['bar', [new Type(Type::BUILTIN_TYPE_STRING)], 'This is bar', null],
            ['baz', [new Type(Type::BUILTIN_TYPE_INT)], 'Should be used.', null],
            ['foo2', [new Type(Type::BUILTIN_TYPE_FLOAT)], null, null],
            ['foo3', [new Type(Type::BUILTIN_TYPE_CALLABLE)], null, null],
            ['foo4', [new Type(Type::BUILTIN_TYPE_NULL)], null, null],
            ['foo5', null, null, null],
            [
                'files',
                [
                    new Type(Type::BUILTIN_TYPE_ARRAY, false, null, true, new Type(Type::BUILTIN_TYPE_INT), new Type(Type::BUILTIN_TYPE_OBJECT, false, 'SplFileInfo')),
                    new Type(Type::BUILTIN_TYPE_RESOURCE),
                ],
                null,
                null,
            ],
            ['bal', [new Type(Type::BUILTIN_TYPE_OBJECT, false, 'DateTime')], null, null],
            ['parent', [new Type(Type::BUILTIN_TYPE_OBJECT, false, 'Symfony\\Component\\PropertyInfo\\Tests\\Fixtures\\ParentDummy')], null, null],
            ['collection', [new Type(Type::BUILTIN_TYPE_ARRAY, false, null, true, new Type(Type::BUILTIN_TYPE_INT), new Type(Type::BUILTIN_TYPE_OBJECT, false, 'DateTime'))], null, null],
            ['nestedCollection', [new Type(Type::BUILTIN_TYPE_ARRAY, false, null, true, new Type(Type::BUILTIN_TYPE_INT), new Type(Type::BUILTIN_TYPE_ARRAY, false, null, true, new Type(Type::BUILTIN_TYPE_INT), new Type(Type::BUILTIN_TYPE_STRING, false)))], null, null],
            ['mixedCollection', [new Type(Type::BUILTIN_TYPE_ARRAY, false, null, true, null, null)], null, null],
            ['a', null, 'A.', null],
            ['b', null, 'B.', null],
            ['c', [new Type(Type::BUILTIN_TYPE_BOOL, true)], null, null],
            ['d', [new Type(Type::BUILTIN_TYPE_BOOL)], null, null],
            ['e', [new Type(Type::BUILTIN_TYPE_ARRAY, false, null, true, new Type(Type::BUILTIN_TYPE_INT), new Type(Type::BUILTIN_TYPE_RESOURCE))], null, null],
            ['f', [new Type(Type::BUILTIN_TYPE_ARRAY, false, null, true, new Type(Type::BUILTIN_TYPE_INT), new Type(Type::BUILTIN_TYPE_OBJECT, false, 'DateTime'))], null, null],
            ['g', [new Type(Type::BUILTIN_TYPE_ARRAY, true, null, true)], 'Nullable array.', null],
            ['h', [new Type(Type::BUILTIN_TYPE_STRING, true)], null, null],
            ['i', [new Type(Type::BUILTIN_TYPE_STRING, true), new Type(Type::BUILTIN_TYPE_INT, true)], null, null],
            ['j', [new Type(Type::BUILTIN_TYPE_OBJECT, true, 'DateTime')], null, null],
            ['donotexist', null, null, null],
            ['staticGetter', null, null, null],
            ['staticSetter', null, null, null],
        ];
    }

    public function typesWithNoPrefixesProvider()
    {
        return [
            ['foo', null, 'Short description.', 'Long description.'],
            ['bar', [new Type(Type::BUILTIN_TYPE_STRING)], 'This is bar', null],
            ['baz', [new Type(Type::BUILTIN_TYPE_INT)], 'Should be used.', null],
            ['foo2', [new Type(Type::BUILTIN_TYPE_FLOAT)], null, null],
            ['foo3', [new Type(Type::BUILTIN_TYPE_CALLABLE)], null, null],
            ['foo4', [new Type(Type::BUILTIN_TYPE_NULL)], null, null],
            ['foo5', null, null, null],
            [
                'files',
                [
                    new Type(Type::BUILTIN_TYPE_ARRAY, false, null, true, new Type(Type::BUILTIN_TYPE_INT), new Type(Type::BUILTIN_TYPE_OBJECT, false, 'SplFileInfo')),
                    new Type(Type::BUILTIN_TYPE_RESOURCE),
                ],
                null,
                null,
            ],
            ['bal', [new Type(Type::BUILTIN_TYPE_OBJECT, false, 'DateTime')], null, null],
            ['parent', [new Type(Type::BUILTIN_TYPE_OBJECT, false, 'Symfony\\Component\\PropertyInfo\\Tests\\Fixtures\\ParentDummy')], null, null],
            ['collection', [new Type(Type::BUILTIN_TYPE_ARRAY, false, null, true, new Type(Type::BUILTIN_TYPE_INT), new Type(Type::BUILTIN_TYPE_OBJECT, false, 'DateTime'))], null, null],
            ['nestedCollection', [new Type(Type::BUILTIN_TYPE_ARRAY, false, null, true, new Type(Type::BUILTIN_TYPE_INT), new Type(Type::BUILTIN_TYPE_ARRAY, false, null, true, new Type(Type::BUILTIN_TYPE_INT), new Type(Type::BUILTIN_TYPE_STRING, false)))], null, null],
            ['mixedCollection', [new Type(Type::BUILTIN_TYPE_ARRAY, false, null, true, null, null)], null, null],
            ['a', null, 'A.', null],
            ['b', null, 'B.', null],
            ['c', null, null, null],
            ['d', null, null, null],
            ['e', null, null, null],
            ['f', null, null, null],
            ['g', [new Type(Type::BUILTIN_TYPE_ARRAY, true, null, true)], 'Nullable array.', null],
            ['h', [new Type(Type::BUILTIN_TYPE_STRING, true)], null, null],
            ['i', [new Type(Type::BUILTIN_TYPE_STRING, true), new Type(Type::BUILTIN_TYPE_INT, true)], null, null],
            ['j', [new Type(Type::BUILTIN_TYPE_OBJECT, true, 'DateTime')], null, null],
            ['donotexist', null, null, null],
            ['staticGetter', null, null, null],
            ['staticSetter', null, null, null],
        ];
    }

    public function testReturnNullOnEmptyDocBlock()
    {
        \$this->assertNull(\$this->extractor->getShortDescription(EmptyDocBlock::class, 'foo'));
    }

    public function dockBlockFallbackTypesProvider()
    {
        return [
            'pub' => [
                'pub', [new Type(Type::BUILTIN_TYPE_STRING)],
            ],
            'protAcc' => [
                'protAcc', [new Type(Type::BUILTIN_TYPE_INT)],
            ],
            'protMut' => [
                'protMut', [new Type(Type::BUILTIN_TYPE_BOOL)],
            ],
        ];
    }

    /**
     * @dataProvider dockBlockFallbackTypesProvider
     */
    public function testDocBlockFallback(\$property, \$types)
    {
        \$this->assertEquals(\$types, \$this->extractor->getTypes('Symfony\\Component\\PropertyInfo\\Tests\\Fixtures\\DockBlockFallback', \$property));
    }
}

class EmptyDocBlock
{
    public \$foo;
}

class OmittedParamTagTypeDocBlock
{
    /**
     * The type is omitted here to ensure that the extractor doesn't choke on missing types.
     *
     * @param \$omittedTagType
     */
    public function setOmittedType(array \$omittedTagType)
    {
    }
}
", "vendor/symfony/property-info/Tests/Extractor/PhpDocExtractorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/property-info/Tests/Extractor/PhpDocExtractorTest.php");
    }
}
