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

/* vendor/symfony/intl/Tests/Data/Bundle/Reader/BundleEntryReaderTest.php */
class __TwigTemplate_b2bf3527e5c017b7ffd07e89915aaa4b0877fd7f124c380ef3ea92be6f3fe98f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Tests/Data/Bundle/Reader/BundleEntryReaderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Tests/Data/Bundle/Reader/BundleEntryReaderTest.php"));

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

namespace Symfony\\Component\\Intl\\Tests\\Data\\Bundle\\Reader;

use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Intl\\Data\\Bundle\\Reader\\BundleEntryReader;
use Symfony\\Component\\Intl\\Exception\\ResourceBundleNotFoundException;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class BundleEntryReaderTest extends TestCase
{
    const RES_DIR = '/res/dir';

    /**
     * @var BundleEntryReader
     */
    private \$reader;

    /**
     * @var MockObject
     */
    private \$readerImpl;

    private static \$data = [
        'Entries' => [
            'Foo' => 'Bar',
            'Bar' => 'Baz',
        ],
        'Foo' => 'Bar',
        'Version' => '2.0',
    ];

    private static \$fallbackData = [
        'Entries' => [
            'Foo' => 'Foo',
            'Bam' => 'Lah',
        ],
        'Baz' => 'Foo',
        'Version' => '1.0',
    ];

    private static \$mergedData = [
        // no recursive merging -> too complicated
        'Entries' => [
            'Foo' => 'Bar',
            'Bar' => 'Baz',
        ],
        'Baz' => 'Foo',
        'Version' => '2.0',
        'Foo' => 'Bar',
    ];

    protected function setUp(): void
    {
        \$this->readerImpl = \$this->getMockBuilder('Symfony\\Component\\Intl\\Data\\Bundle\\Reader\\BundleEntryReaderInterface')->getMock();
        \$this->reader = new BundleEntryReader(\$this->readerImpl);
    }

    public function testForwardCallToRead()
    {
        \$this->readerImpl->expects(\$this->once())
            ->method('read')
            ->with(self::RES_DIR, 'root')
            ->willReturn(self::\$data);

        \$this->assertSame(self::\$data, \$this->reader->read(self::RES_DIR, 'root'));
    }

    public function testReadEntireDataFileIfNoIndicesGiven()
    {
        \$this->readerImpl->expects(\$this->at(0))
            ->method('read')
            ->with(self::RES_DIR, 'en')
            ->willReturn(self::\$data);

        \$this->readerImpl->expects(\$this->at(1))
            ->method('read')
            ->with(self::RES_DIR, 'root')
            ->willReturn(self::\$fallbackData);

        \$this->assertSame(self::\$mergedData, \$this->reader->readEntry(self::RES_DIR, 'en', []));
    }

    public function testReadExistingEntry()
    {
        \$this->readerImpl->expects(\$this->once())
            ->method('read')
            ->with(self::RES_DIR, 'root')
            ->willReturn(self::\$data);

        \$this->assertSame('Bar', \$this->reader->readEntry(self::RES_DIR, 'root', ['Entries', 'Foo']));
    }

    public function testReadNonExistingEntry()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MissingResourceException');
        \$this->readerImpl->expects(\$this->once())
            ->method('read')
            ->with(self::RES_DIR, 'root')
            ->willReturn(self::\$data);

        \$this->reader->readEntry(self::RES_DIR, 'root', ['Entries', 'NonExisting']);
    }

    public function testFallbackIfEntryDoesNotExist()
    {
        \$this->readerImpl->expects(\$this->at(0))
            ->method('read')
            ->with(self::RES_DIR, 'en_GB')
            ->willReturn(self::\$data);

        \$this->readerImpl->expects(\$this->at(1))
            ->method('read')
            ->with(self::RES_DIR, 'en')
            ->willReturn(self::\$fallbackData);

        \$this->assertSame('Lah', \$this->reader->readEntry(self::RES_DIR, 'en_GB', ['Entries', 'Bam']));
    }

    public function testDontFallbackIfEntryDoesNotExistAndFallbackDisabled()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MissingResourceException');
        \$this->readerImpl->expects(\$this->once())
            ->method('read')
            ->with(self::RES_DIR, 'en_GB')
            ->willReturn(self::\$data);

        \$this->reader->readEntry(self::RES_DIR, 'en_GB', ['Entries', 'Bam'], false);
    }

    public function testFallbackIfLocaleDoesNotExist()
    {
        \$this->readerImpl->expects(\$this->at(0))
            ->method('read')
            ->with(self::RES_DIR, 'en_GB')
            ->willThrowException(new ResourceBundleNotFoundException());

        \$this->readerImpl->expects(\$this->at(1))
            ->method('read')
            ->with(self::RES_DIR, 'en')
            ->willReturn(self::\$fallbackData);

        \$this->assertSame('Lah', \$this->reader->readEntry(self::RES_DIR, 'en_GB', ['Entries', 'Bam']));
    }

    public function testDontFallbackIfLocaleDoesNotExistAndFallbackDisabled()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MissingResourceException');
        \$this->readerImpl->expects(\$this->once())
            ->method('read')
            ->with(self::RES_DIR, 'en_GB')
            ->willThrowException(new ResourceBundleNotFoundException());

        \$this->reader->readEntry(self::RES_DIR, 'en_GB', ['Entries', 'Bam'], false);
    }

    public function provideMergeableValues()
    {
        return [
            ['foo', null, 'foo'],
            [null, 'foo', 'foo'],
            [['foo', 'bar'], null, ['foo', 'bar']],
            [['foo', 'bar'], [], ['foo', 'bar']],
            [null, ['baz'], ['baz']],
            [[], ['baz'], ['baz']],
            [['foo', 'bar'], ['baz'], ['baz', 'foo', 'bar']],
        ];
    }

    /**
     * @dataProvider provideMergeableValues
     */
    public function testMergeDataWithFallbackData(\$childData, \$parentData, \$result)
    {
        if (null === \$childData || \\is_array(\$childData)) {
            \$this->readerImpl->expects(\$this->at(0))
                ->method('read')
                ->with(self::RES_DIR, 'en')
                ->willReturn(\$childData);

            \$this->readerImpl->expects(\$this->at(1))
                ->method('read')
                ->with(self::RES_DIR, 'root')
                ->willReturn(\$parentData);
        } else {
            \$this->readerImpl->expects(\$this->once())
                ->method('read')
                ->with(self::RES_DIR, 'en')
                ->willReturn(\$childData);
        }

        \$this->assertSame(\$result, \$this->reader->readEntry(self::RES_DIR, 'en', [], true));
    }

    /**
     * @dataProvider provideMergeableValues
     */
    public function testDontMergeDataIfFallbackDisabled(\$childData, \$parentData, \$result)
    {
        \$this->readerImpl->expects(\$this->once())
            ->method('read')
            ->with(self::RES_DIR, 'en_GB')
            ->willReturn(\$childData);

        \$this->assertSame(\$childData, \$this->reader->readEntry(self::RES_DIR, 'en_GB', [], false));
    }

    /**
     * @dataProvider provideMergeableValues
     */
    public function testMergeExistingEntryWithExistingFallbackEntry(\$childData, \$parentData, \$result)
    {
        if (null === \$childData || \\is_array(\$childData)) {
            \$this->readerImpl->expects(\$this->at(0))
                ->method('read')
                ->with(self::RES_DIR, 'en')
                ->willReturn(['Foo' => ['Bar' => \$childData]]);

            \$this->readerImpl->expects(\$this->at(1))
                ->method('read')
                ->with(self::RES_DIR, 'root')
                ->willReturn(['Foo' => ['Bar' => \$parentData]]);
        } else {
            \$this->readerImpl->expects(\$this->once())
                ->method('read')
                ->with(self::RES_DIR, 'en')
                ->willReturn(['Foo' => ['Bar' => \$childData]]);
        }

        \$this->assertSame(\$result, \$this->reader->readEntry(self::RES_DIR, 'en', ['Foo', 'Bar'], true));
    }

    /**
     * @dataProvider provideMergeableValues
     */
    public function testMergeNonExistingEntryWithExistingFallbackEntry(\$childData, \$parentData, \$result)
    {
        \$this->readerImpl->expects(\$this->at(0))
            ->method('read')
            ->with(self::RES_DIR, 'en_GB')
            ->willReturn(['Foo' => 'Baz']);

        \$this->readerImpl->expects(\$this->at(1))
            ->method('read')
            ->with(self::RES_DIR, 'en')
            ->willReturn(['Foo' => ['Bar' => \$parentData]]);

        \$this->assertSame(\$parentData, \$this->reader->readEntry(self::RES_DIR, 'en_GB', ['Foo', 'Bar'], true));
    }

    /**
     * @dataProvider provideMergeableValues
     */
    public function testMergeExistingEntryWithNonExistingFallbackEntry(\$childData, \$parentData, \$result)
    {
        if (null === \$childData || \\is_array(\$childData)) {
            \$this->readerImpl->expects(\$this->at(0))
                ->method('read')
                ->with(self::RES_DIR, 'en_GB')
                ->willReturn(['Foo' => ['Bar' => \$childData]]);

            \$this->readerImpl->expects(\$this->at(1))
                ->method('read')
                ->with(self::RES_DIR, 'en')
                ->willReturn(['Foo' => 'Bar']);
        } else {
            \$this->readerImpl->expects(\$this->once())
                ->method('read')
                ->with(self::RES_DIR, 'en_GB')
                ->willReturn(['Foo' => ['Bar' => \$childData]]);
        }

        \$this->assertSame(\$childData, \$this->reader->readEntry(self::RES_DIR, 'en_GB', ['Foo', 'Bar'], true));
    }

    public function testFailIfEntryFoundNeitherInParentNorChild()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MissingResourceException');
        \$this->readerImpl->expects(\$this->at(0))
            ->method('read')
            ->with(self::RES_DIR, 'en_GB')
            ->willReturn(['Foo' => 'Baz']);

        \$this->readerImpl->expects(\$this->at(1))
            ->method('read')
            ->with(self::RES_DIR, 'en')
            ->willReturn(['Foo' => 'Bar']);

        \$this->reader->readEntry(self::RES_DIR, 'en_GB', ['Foo', 'Bar'], true);
    }

    /**
     * @dataProvider provideMergeableValues
     */
    public function testMergeTraversables(\$childData, \$parentData, \$result)
    {
        \$parentData = \\is_array(\$parentData) ? new \\ArrayObject(\$parentData) : \$parentData;
        \$childData = \\is_array(\$childData) ? new \\ArrayObject(\$childData) : \$childData;

        if (null === \$childData || \$childData instanceof \\ArrayObject) {
            \$this->readerImpl->expects(\$this->at(0))
                ->method('read')
                ->with(self::RES_DIR, 'en_GB')
                ->willReturn(['Foo' => ['Bar' => \$childData]]);

            \$this->readerImpl->expects(\$this->at(1))
                ->method('read')
                ->with(self::RES_DIR, 'en')
                ->willReturn(['Foo' => ['Bar' => \$parentData]]);
        } else {
            \$this->readerImpl->expects(\$this->once())
                ->method('read')
                ->with(self::RES_DIR, 'en_GB')
                ->willReturn(['Foo' => ['Bar' => \$childData]]);
        }

        \$this->assertSame(\$result, \$this->reader->readEntry(self::RES_DIR, 'en_GB', ['Foo', 'Bar'], true));
    }

    /**
     * @dataProvider provideMergeableValues
     */
    public function testFollowLocaleAliases(\$childData, \$parentData, \$result)
    {
        \$this->reader->setLocaleAliases(['mo' => 'ro_MD']);

        if (null === \$childData || \\is_array(\$childData)) {
            \$this->readerImpl->expects(\$this->at(0))
                ->method('read')
                ->with(self::RES_DIR, 'ro_MD')
                ->willReturn(['Foo' => ['Bar' => \$childData]]);

            // Read fallback locale of aliased locale (\"ro_MD\" -> \"ro\")
            \$this->readerImpl->expects(\$this->at(1))
                ->method('read')
                ->with(self::RES_DIR, 'ro')
                ->willReturn(['Foo' => ['Bar' => \$parentData]]);
        } else {
            \$this->readerImpl->expects(\$this->once())
                ->method('read')
                ->with(self::RES_DIR, 'ro_MD')
                ->willReturn(['Foo' => ['Bar' => \$childData]]);
        }

        \$this->assertSame(\$result, \$this->reader->readEntry(self::RES_DIR, 'mo', ['Foo', 'Bar'], true));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Tests/Data/Bundle/Reader/BundleEntryReaderTest.php";
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

namespace Symfony\\Component\\Intl\\Tests\\Data\\Bundle\\Reader;

use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Intl\\Data\\Bundle\\Reader\\BundleEntryReader;
use Symfony\\Component\\Intl\\Exception\\ResourceBundleNotFoundException;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class BundleEntryReaderTest extends TestCase
{
    const RES_DIR = '/res/dir';

    /**
     * @var BundleEntryReader
     */
    private \$reader;

    /**
     * @var MockObject
     */
    private \$readerImpl;

    private static \$data = [
        'Entries' => [
            'Foo' => 'Bar',
            'Bar' => 'Baz',
        ],
        'Foo' => 'Bar',
        'Version' => '2.0',
    ];

    private static \$fallbackData = [
        'Entries' => [
            'Foo' => 'Foo',
            'Bam' => 'Lah',
        ],
        'Baz' => 'Foo',
        'Version' => '1.0',
    ];

    private static \$mergedData = [
        // no recursive merging -> too complicated
        'Entries' => [
            'Foo' => 'Bar',
            'Bar' => 'Baz',
        ],
        'Baz' => 'Foo',
        'Version' => '2.0',
        'Foo' => 'Bar',
    ];

    protected function setUp(): void
    {
        \$this->readerImpl = \$this->getMockBuilder('Symfony\\Component\\Intl\\Data\\Bundle\\Reader\\BundleEntryReaderInterface')->getMock();
        \$this->reader = new BundleEntryReader(\$this->readerImpl);
    }

    public function testForwardCallToRead()
    {
        \$this->readerImpl->expects(\$this->once())
            ->method('read')
            ->with(self::RES_DIR, 'root')
            ->willReturn(self::\$data);

        \$this->assertSame(self::\$data, \$this->reader->read(self::RES_DIR, 'root'));
    }

    public function testReadEntireDataFileIfNoIndicesGiven()
    {
        \$this->readerImpl->expects(\$this->at(0))
            ->method('read')
            ->with(self::RES_DIR, 'en')
            ->willReturn(self::\$data);

        \$this->readerImpl->expects(\$this->at(1))
            ->method('read')
            ->with(self::RES_DIR, 'root')
            ->willReturn(self::\$fallbackData);

        \$this->assertSame(self::\$mergedData, \$this->reader->readEntry(self::RES_DIR, 'en', []));
    }

    public function testReadExistingEntry()
    {
        \$this->readerImpl->expects(\$this->once())
            ->method('read')
            ->with(self::RES_DIR, 'root')
            ->willReturn(self::\$data);

        \$this->assertSame('Bar', \$this->reader->readEntry(self::RES_DIR, 'root', ['Entries', 'Foo']));
    }

    public function testReadNonExistingEntry()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MissingResourceException');
        \$this->readerImpl->expects(\$this->once())
            ->method('read')
            ->with(self::RES_DIR, 'root')
            ->willReturn(self::\$data);

        \$this->reader->readEntry(self::RES_DIR, 'root', ['Entries', 'NonExisting']);
    }

    public function testFallbackIfEntryDoesNotExist()
    {
        \$this->readerImpl->expects(\$this->at(0))
            ->method('read')
            ->with(self::RES_DIR, 'en_GB')
            ->willReturn(self::\$data);

        \$this->readerImpl->expects(\$this->at(1))
            ->method('read')
            ->with(self::RES_DIR, 'en')
            ->willReturn(self::\$fallbackData);

        \$this->assertSame('Lah', \$this->reader->readEntry(self::RES_DIR, 'en_GB', ['Entries', 'Bam']));
    }

    public function testDontFallbackIfEntryDoesNotExistAndFallbackDisabled()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MissingResourceException');
        \$this->readerImpl->expects(\$this->once())
            ->method('read')
            ->with(self::RES_DIR, 'en_GB')
            ->willReturn(self::\$data);

        \$this->reader->readEntry(self::RES_DIR, 'en_GB', ['Entries', 'Bam'], false);
    }

    public function testFallbackIfLocaleDoesNotExist()
    {
        \$this->readerImpl->expects(\$this->at(0))
            ->method('read')
            ->with(self::RES_DIR, 'en_GB')
            ->willThrowException(new ResourceBundleNotFoundException());

        \$this->readerImpl->expects(\$this->at(1))
            ->method('read')
            ->with(self::RES_DIR, 'en')
            ->willReturn(self::\$fallbackData);

        \$this->assertSame('Lah', \$this->reader->readEntry(self::RES_DIR, 'en_GB', ['Entries', 'Bam']));
    }

    public function testDontFallbackIfLocaleDoesNotExistAndFallbackDisabled()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MissingResourceException');
        \$this->readerImpl->expects(\$this->once())
            ->method('read')
            ->with(self::RES_DIR, 'en_GB')
            ->willThrowException(new ResourceBundleNotFoundException());

        \$this->reader->readEntry(self::RES_DIR, 'en_GB', ['Entries', 'Bam'], false);
    }

    public function provideMergeableValues()
    {
        return [
            ['foo', null, 'foo'],
            [null, 'foo', 'foo'],
            [['foo', 'bar'], null, ['foo', 'bar']],
            [['foo', 'bar'], [], ['foo', 'bar']],
            [null, ['baz'], ['baz']],
            [[], ['baz'], ['baz']],
            [['foo', 'bar'], ['baz'], ['baz', 'foo', 'bar']],
        ];
    }

    /**
     * @dataProvider provideMergeableValues
     */
    public function testMergeDataWithFallbackData(\$childData, \$parentData, \$result)
    {
        if (null === \$childData || \\is_array(\$childData)) {
            \$this->readerImpl->expects(\$this->at(0))
                ->method('read')
                ->with(self::RES_DIR, 'en')
                ->willReturn(\$childData);

            \$this->readerImpl->expects(\$this->at(1))
                ->method('read')
                ->with(self::RES_DIR, 'root')
                ->willReturn(\$parentData);
        } else {
            \$this->readerImpl->expects(\$this->once())
                ->method('read')
                ->with(self::RES_DIR, 'en')
                ->willReturn(\$childData);
        }

        \$this->assertSame(\$result, \$this->reader->readEntry(self::RES_DIR, 'en', [], true));
    }

    /**
     * @dataProvider provideMergeableValues
     */
    public function testDontMergeDataIfFallbackDisabled(\$childData, \$parentData, \$result)
    {
        \$this->readerImpl->expects(\$this->once())
            ->method('read')
            ->with(self::RES_DIR, 'en_GB')
            ->willReturn(\$childData);

        \$this->assertSame(\$childData, \$this->reader->readEntry(self::RES_DIR, 'en_GB', [], false));
    }

    /**
     * @dataProvider provideMergeableValues
     */
    public function testMergeExistingEntryWithExistingFallbackEntry(\$childData, \$parentData, \$result)
    {
        if (null === \$childData || \\is_array(\$childData)) {
            \$this->readerImpl->expects(\$this->at(0))
                ->method('read')
                ->with(self::RES_DIR, 'en')
                ->willReturn(['Foo' => ['Bar' => \$childData]]);

            \$this->readerImpl->expects(\$this->at(1))
                ->method('read')
                ->with(self::RES_DIR, 'root')
                ->willReturn(['Foo' => ['Bar' => \$parentData]]);
        } else {
            \$this->readerImpl->expects(\$this->once())
                ->method('read')
                ->with(self::RES_DIR, 'en')
                ->willReturn(['Foo' => ['Bar' => \$childData]]);
        }

        \$this->assertSame(\$result, \$this->reader->readEntry(self::RES_DIR, 'en', ['Foo', 'Bar'], true));
    }

    /**
     * @dataProvider provideMergeableValues
     */
    public function testMergeNonExistingEntryWithExistingFallbackEntry(\$childData, \$parentData, \$result)
    {
        \$this->readerImpl->expects(\$this->at(0))
            ->method('read')
            ->with(self::RES_DIR, 'en_GB')
            ->willReturn(['Foo' => 'Baz']);

        \$this->readerImpl->expects(\$this->at(1))
            ->method('read')
            ->with(self::RES_DIR, 'en')
            ->willReturn(['Foo' => ['Bar' => \$parentData]]);

        \$this->assertSame(\$parentData, \$this->reader->readEntry(self::RES_DIR, 'en_GB', ['Foo', 'Bar'], true));
    }

    /**
     * @dataProvider provideMergeableValues
     */
    public function testMergeExistingEntryWithNonExistingFallbackEntry(\$childData, \$parentData, \$result)
    {
        if (null === \$childData || \\is_array(\$childData)) {
            \$this->readerImpl->expects(\$this->at(0))
                ->method('read')
                ->with(self::RES_DIR, 'en_GB')
                ->willReturn(['Foo' => ['Bar' => \$childData]]);

            \$this->readerImpl->expects(\$this->at(1))
                ->method('read')
                ->with(self::RES_DIR, 'en')
                ->willReturn(['Foo' => 'Bar']);
        } else {
            \$this->readerImpl->expects(\$this->once())
                ->method('read')
                ->with(self::RES_DIR, 'en_GB')
                ->willReturn(['Foo' => ['Bar' => \$childData]]);
        }

        \$this->assertSame(\$childData, \$this->reader->readEntry(self::RES_DIR, 'en_GB', ['Foo', 'Bar'], true));
    }

    public function testFailIfEntryFoundNeitherInParentNorChild()
    {
        \$this->expectException('Symfony\\Component\\Intl\\Exception\\MissingResourceException');
        \$this->readerImpl->expects(\$this->at(0))
            ->method('read')
            ->with(self::RES_DIR, 'en_GB')
            ->willReturn(['Foo' => 'Baz']);

        \$this->readerImpl->expects(\$this->at(1))
            ->method('read')
            ->with(self::RES_DIR, 'en')
            ->willReturn(['Foo' => 'Bar']);

        \$this->reader->readEntry(self::RES_DIR, 'en_GB', ['Foo', 'Bar'], true);
    }

    /**
     * @dataProvider provideMergeableValues
     */
    public function testMergeTraversables(\$childData, \$parentData, \$result)
    {
        \$parentData = \\is_array(\$parentData) ? new \\ArrayObject(\$parentData) : \$parentData;
        \$childData = \\is_array(\$childData) ? new \\ArrayObject(\$childData) : \$childData;

        if (null === \$childData || \$childData instanceof \\ArrayObject) {
            \$this->readerImpl->expects(\$this->at(0))
                ->method('read')
                ->with(self::RES_DIR, 'en_GB')
                ->willReturn(['Foo' => ['Bar' => \$childData]]);

            \$this->readerImpl->expects(\$this->at(1))
                ->method('read')
                ->with(self::RES_DIR, 'en')
                ->willReturn(['Foo' => ['Bar' => \$parentData]]);
        } else {
            \$this->readerImpl->expects(\$this->once())
                ->method('read')
                ->with(self::RES_DIR, 'en_GB')
                ->willReturn(['Foo' => ['Bar' => \$childData]]);
        }

        \$this->assertSame(\$result, \$this->reader->readEntry(self::RES_DIR, 'en_GB', ['Foo', 'Bar'], true));
    }

    /**
     * @dataProvider provideMergeableValues
     */
    public function testFollowLocaleAliases(\$childData, \$parentData, \$result)
    {
        \$this->reader->setLocaleAliases(['mo' => 'ro_MD']);

        if (null === \$childData || \\is_array(\$childData)) {
            \$this->readerImpl->expects(\$this->at(0))
                ->method('read')
                ->with(self::RES_DIR, 'ro_MD')
                ->willReturn(['Foo' => ['Bar' => \$childData]]);

            // Read fallback locale of aliased locale (\"ro_MD\" -> \"ro\")
            \$this->readerImpl->expects(\$this->at(1))
                ->method('read')
                ->with(self::RES_DIR, 'ro')
                ->willReturn(['Foo' => ['Bar' => \$parentData]]);
        } else {
            \$this->readerImpl->expects(\$this->once())
                ->method('read')
                ->with(self::RES_DIR, 'ro_MD')
                ->willReturn(['Foo' => ['Bar' => \$childData]]);
        }

        \$this->assertSame(\$result, \$this->reader->readEntry(self::RES_DIR, 'mo', ['Foo', 'Bar'], true));
    }
}
", "vendor/symfony/intl/Tests/Data/Bundle/Reader/BundleEntryReaderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Tests/Data/Bundle/Reader/BundleEntryReaderTest.php");
    }
}
