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

/* vendor/symfony/finder/Tests/Iterator/SortableIteratorTest.php */
class __TwigTemplate_4c3de208f47908c6c9e7ae6ec1fb358b1cf3607b6a15cb668da523ddbe3ace12 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/finder/Tests/Iterator/SortableIteratorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/finder/Tests/Iterator/SortableIteratorTest.php"));

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

namespace Symfony\\Component\\Finder\\Tests\\Iterator;

use Symfony\\Component\\Finder\\Iterator\\SortableIterator;

class SortableIteratorTest extends RealIteratorTestCase
{
    public function testConstructor()
    {
        try {
            new SortableIterator(new Iterator([]), 'foobar');
            \$this->fail('__construct() throws an \\InvalidArgumentException exception if the mode is not valid');
        } catch (\\Exception \$e) {
            \$this->assertInstanceOf('InvalidArgumentException', \$e, '__construct() throws an \\InvalidArgumentException exception if the mode is not valid');
        }
    }

    /**
     * @dataProvider getAcceptData
     */
    public function testAccept(\$mode, \$expected)
    {
        if (!\\is_callable(\$mode)) {
            switch (\$mode) {
                case SortableIterator::SORT_BY_ACCESSED_TIME:
                    touch(self::toAbsolute('.git'));
                    sleep(1);
                    file_get_contents(self::toAbsolute('.bar'));
                    break;
                case SortableIterator::SORT_BY_CHANGED_TIME:
                    file_put_contents(self::toAbsolute('test.php'), 'foo');
                    sleep(1);
                    file_put_contents(self::toAbsolute('test.py'), 'foo');
                    break;
                case SortableIterator::SORT_BY_MODIFIED_TIME:
                    file_put_contents(self::toAbsolute('test.php'), 'foo');
                    sleep(1);
                    file_put_contents(self::toAbsolute('test.py'), 'foo');
                    break;
            }
        }

        \$inner = new Iterator(self::\$files);

        \$iterator = new SortableIterator(\$inner, \$mode);

        if (SortableIterator::SORT_BY_ACCESSED_TIME === \$mode
            || SortableIterator::SORT_BY_CHANGED_TIME === \$mode
            || SortableIterator::SORT_BY_MODIFIED_TIME === \$mode
        ) {
            if ('\\\\' === \\DIRECTORY_SEPARATOR && SortableIterator::SORT_BY_MODIFIED_TIME !== \$mode) {
                \$this->markTestSkipped('Sorting by atime or ctime is not supported on Windows');
            }
            \$this->assertOrderedIteratorForGroups(\$expected, \$iterator);
        } else {
            \$this->assertOrderedIterator(\$expected, \$iterator);
        }
    }

    public function getAcceptData()
    {
        \$sortByName = [
            '.bar',
            '.foo',
            '.foo/.bar',
            '.foo/bar',
            '.git',
            'foo',
            'foo bar',
            'foo/bar.tmp',
            'qux',
            'qux/baz_100_1.py',
            'qux/baz_1_2.py',
            'qux_0_1.php',
            'qux_1000_1.php',
            'qux_1002_0.php',
            'qux_10_2.php',
            'qux_12_0.php',
            'qux_2_0.php',
            'test.php',
            'test.py',
            'toto',
            'toto/.git',
        ];

        \$sortByType = [
            '.foo',
            '.git',
            'foo',
            'qux',
            'toto',
            'toto/.git',
            '.bar',
            '.foo/.bar',
            '.foo/bar',
            'foo bar',
            'foo/bar.tmp',
            'qux/baz_100_1.py',
            'qux/baz_1_2.py',
            'qux_0_1.php',
            'qux_1000_1.php',
            'qux_1002_0.php',
            'qux_10_2.php',
            'qux_12_0.php',
            'qux_2_0.php',
            'test.php',
            'test.py',
        ];

        \$sortByAccessedTime = [
            // For these two files the access time was set to 2005-10-15
            ['foo/bar.tmp', 'test.php'],
            // These files were created more or less at the same time
            [
                '.git',
                '.foo',
                '.foo/.bar',
                '.foo/bar',
                'test.py',
                'foo',
                'toto',
                'toto/.git',
                'foo bar',
                'qux',
                'qux/baz_100_1.py',
                'qux/baz_1_2.py',
                'qux_0_1.php',
                'qux_1000_1.php',
                'qux_1002_0.php',
                'qux_10_2.php',
                'qux_12_0.php',
                'qux_2_0.php',
            ],
            // This file was accessed after sleeping for 1 sec
            ['.bar'],
        ];

        \$sortByChangedTime = [
            [
                '.git',
                '.foo',
                '.foo/.bar',
                '.foo/bar',
                '.bar',
                'foo',
                'foo/bar.tmp',
                'toto',
                'toto/.git',
                'foo bar',
                'qux',
                'qux/baz_100_1.py',
                'qux/baz_1_2.py',
                'qux_0_1.php',
                'qux_1000_1.php',
                'qux_1002_0.php',
                'qux_10_2.php',
                'qux_12_0.php',
                'qux_2_0.php',
            ],
            ['test.php'],
            ['test.py'],
        ];

        \$sortByModifiedTime = [
            [
                '.git',
                '.foo',
                '.foo/.bar',
                '.foo/bar',
                '.bar',
                'foo',
                'foo/bar.tmp',
                'toto',
                'toto/.git',
                'foo bar',
                'qux',
                'qux/baz_100_1.py',
                'qux/baz_1_2.py',
                'qux_0_1.php',
                'qux_1000_1.php',
                'qux_1002_0.php',
                'qux_10_2.php',
                'qux_12_0.php',
                'qux_2_0.php',
            ],
            ['test.php'],
            ['test.py'],
        ];

        \$sortByNameNatural = [
            '.bar',
            '.foo',
            '.foo/.bar',
            '.foo/bar',
            '.git',
            'foo',
            'foo/bar.tmp',
            'foo bar',
            'qux',
            'qux/baz_1_2.py',
            'qux/baz_100_1.py',
            'qux_0_1.php',
            'qux_2_0.php',
            'qux_10_2.php',
            'qux_12_0.php',
            'qux_1000_1.php',
            'qux_1002_0.php',
            'test.php',
            'test.py',
            'toto',
            'toto/.git',
        ];

        \$customComparison = [
            '.bar',
            '.foo',
            '.foo/.bar',
            '.foo/bar',
            '.git',
            'foo',
            'foo bar',
            'foo/bar.tmp',
            'qux',
            'qux/baz_100_1.py',
            'qux/baz_1_2.py',
            'qux_0_1.php',
            'qux_1000_1.php',
            'qux_1002_0.php',
            'qux_10_2.php',
            'qux_12_0.php',
            'qux_2_0.php',
            'test.php',
            'test.py',
            'toto',
            'toto/.git',
        ];

        return [
            [SortableIterator::SORT_BY_NAME, \$this->toAbsolute(\$sortByName)],
            [SortableIterator::SORT_BY_TYPE, \$this->toAbsolute(\$sortByType)],
            [SortableIterator::SORT_BY_ACCESSED_TIME, \$this->toAbsolute(\$sortByAccessedTime)],
            [SortableIterator::SORT_BY_CHANGED_TIME, \$this->toAbsolute(\$sortByChangedTime)],
            [SortableIterator::SORT_BY_MODIFIED_TIME, \$this->toAbsolute(\$sortByModifiedTime)],
            [SortableIterator::SORT_BY_NAME_NATURAL, \$this->toAbsolute(\$sortByNameNatural)],
            [function (\\SplFileInfo \$a, \\SplFileInfo \$b) { return strcmp(\$a->getRealPath(), \$b->getRealPath()); }, \$this->toAbsolute(\$customComparison)],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/finder/Tests/Iterator/SortableIteratorTest.php";
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

namespace Symfony\\Component\\Finder\\Tests\\Iterator;

use Symfony\\Component\\Finder\\Iterator\\SortableIterator;

class SortableIteratorTest extends RealIteratorTestCase
{
    public function testConstructor()
    {
        try {
            new SortableIterator(new Iterator([]), 'foobar');
            \$this->fail('__construct() throws an \\InvalidArgumentException exception if the mode is not valid');
        } catch (\\Exception \$e) {
            \$this->assertInstanceOf('InvalidArgumentException', \$e, '__construct() throws an \\InvalidArgumentException exception if the mode is not valid');
        }
    }

    /**
     * @dataProvider getAcceptData
     */
    public function testAccept(\$mode, \$expected)
    {
        if (!\\is_callable(\$mode)) {
            switch (\$mode) {
                case SortableIterator::SORT_BY_ACCESSED_TIME:
                    touch(self::toAbsolute('.git'));
                    sleep(1);
                    file_get_contents(self::toAbsolute('.bar'));
                    break;
                case SortableIterator::SORT_BY_CHANGED_TIME:
                    file_put_contents(self::toAbsolute('test.php'), 'foo');
                    sleep(1);
                    file_put_contents(self::toAbsolute('test.py'), 'foo');
                    break;
                case SortableIterator::SORT_BY_MODIFIED_TIME:
                    file_put_contents(self::toAbsolute('test.php'), 'foo');
                    sleep(1);
                    file_put_contents(self::toAbsolute('test.py'), 'foo');
                    break;
            }
        }

        \$inner = new Iterator(self::\$files);

        \$iterator = new SortableIterator(\$inner, \$mode);

        if (SortableIterator::SORT_BY_ACCESSED_TIME === \$mode
            || SortableIterator::SORT_BY_CHANGED_TIME === \$mode
            || SortableIterator::SORT_BY_MODIFIED_TIME === \$mode
        ) {
            if ('\\\\' === \\DIRECTORY_SEPARATOR && SortableIterator::SORT_BY_MODIFIED_TIME !== \$mode) {
                \$this->markTestSkipped('Sorting by atime or ctime is not supported on Windows');
            }
            \$this->assertOrderedIteratorForGroups(\$expected, \$iterator);
        } else {
            \$this->assertOrderedIterator(\$expected, \$iterator);
        }
    }

    public function getAcceptData()
    {
        \$sortByName = [
            '.bar',
            '.foo',
            '.foo/.bar',
            '.foo/bar',
            '.git',
            'foo',
            'foo bar',
            'foo/bar.tmp',
            'qux',
            'qux/baz_100_1.py',
            'qux/baz_1_2.py',
            'qux_0_1.php',
            'qux_1000_1.php',
            'qux_1002_0.php',
            'qux_10_2.php',
            'qux_12_0.php',
            'qux_2_0.php',
            'test.php',
            'test.py',
            'toto',
            'toto/.git',
        ];

        \$sortByType = [
            '.foo',
            '.git',
            'foo',
            'qux',
            'toto',
            'toto/.git',
            '.bar',
            '.foo/.bar',
            '.foo/bar',
            'foo bar',
            'foo/bar.tmp',
            'qux/baz_100_1.py',
            'qux/baz_1_2.py',
            'qux_0_1.php',
            'qux_1000_1.php',
            'qux_1002_0.php',
            'qux_10_2.php',
            'qux_12_0.php',
            'qux_2_0.php',
            'test.php',
            'test.py',
        ];

        \$sortByAccessedTime = [
            // For these two files the access time was set to 2005-10-15
            ['foo/bar.tmp', 'test.php'],
            // These files were created more or less at the same time
            [
                '.git',
                '.foo',
                '.foo/.bar',
                '.foo/bar',
                'test.py',
                'foo',
                'toto',
                'toto/.git',
                'foo bar',
                'qux',
                'qux/baz_100_1.py',
                'qux/baz_1_2.py',
                'qux_0_1.php',
                'qux_1000_1.php',
                'qux_1002_0.php',
                'qux_10_2.php',
                'qux_12_0.php',
                'qux_2_0.php',
            ],
            // This file was accessed after sleeping for 1 sec
            ['.bar'],
        ];

        \$sortByChangedTime = [
            [
                '.git',
                '.foo',
                '.foo/.bar',
                '.foo/bar',
                '.bar',
                'foo',
                'foo/bar.tmp',
                'toto',
                'toto/.git',
                'foo bar',
                'qux',
                'qux/baz_100_1.py',
                'qux/baz_1_2.py',
                'qux_0_1.php',
                'qux_1000_1.php',
                'qux_1002_0.php',
                'qux_10_2.php',
                'qux_12_0.php',
                'qux_2_0.php',
            ],
            ['test.php'],
            ['test.py'],
        ];

        \$sortByModifiedTime = [
            [
                '.git',
                '.foo',
                '.foo/.bar',
                '.foo/bar',
                '.bar',
                'foo',
                'foo/bar.tmp',
                'toto',
                'toto/.git',
                'foo bar',
                'qux',
                'qux/baz_100_1.py',
                'qux/baz_1_2.py',
                'qux_0_1.php',
                'qux_1000_1.php',
                'qux_1002_0.php',
                'qux_10_2.php',
                'qux_12_0.php',
                'qux_2_0.php',
            ],
            ['test.php'],
            ['test.py'],
        ];

        \$sortByNameNatural = [
            '.bar',
            '.foo',
            '.foo/.bar',
            '.foo/bar',
            '.git',
            'foo',
            'foo/bar.tmp',
            'foo bar',
            'qux',
            'qux/baz_1_2.py',
            'qux/baz_100_1.py',
            'qux_0_1.php',
            'qux_2_0.php',
            'qux_10_2.php',
            'qux_12_0.php',
            'qux_1000_1.php',
            'qux_1002_0.php',
            'test.php',
            'test.py',
            'toto',
            'toto/.git',
        ];

        \$customComparison = [
            '.bar',
            '.foo',
            '.foo/.bar',
            '.foo/bar',
            '.git',
            'foo',
            'foo bar',
            'foo/bar.tmp',
            'qux',
            'qux/baz_100_1.py',
            'qux/baz_1_2.py',
            'qux_0_1.php',
            'qux_1000_1.php',
            'qux_1002_0.php',
            'qux_10_2.php',
            'qux_12_0.php',
            'qux_2_0.php',
            'test.php',
            'test.py',
            'toto',
            'toto/.git',
        ];

        return [
            [SortableIterator::SORT_BY_NAME, \$this->toAbsolute(\$sortByName)],
            [SortableIterator::SORT_BY_TYPE, \$this->toAbsolute(\$sortByType)],
            [SortableIterator::SORT_BY_ACCESSED_TIME, \$this->toAbsolute(\$sortByAccessedTime)],
            [SortableIterator::SORT_BY_CHANGED_TIME, \$this->toAbsolute(\$sortByChangedTime)],
            [SortableIterator::SORT_BY_MODIFIED_TIME, \$this->toAbsolute(\$sortByModifiedTime)],
            [SortableIterator::SORT_BY_NAME_NATURAL, \$this->toAbsolute(\$sortByNameNatural)],
            [function (\\SplFileInfo \$a, \\SplFileInfo \$b) { return strcmp(\$a->getRealPath(), \$b->getRealPath()); }, \$this->toAbsolute(\$customComparison)],
        ];
    }
}
", "vendor/symfony/finder/Tests/Iterator/SortableIteratorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/finder/Tests/Iterator/SortableIteratorTest.php");
    }
}
