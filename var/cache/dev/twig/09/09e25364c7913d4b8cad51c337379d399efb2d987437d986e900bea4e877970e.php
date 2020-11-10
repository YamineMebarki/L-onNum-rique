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

/* vendor/symfony/finder/Tests/Iterator/DepthRangeFilterIteratorTest.php */
class __TwigTemplate_d1dd362844dcec63ba2b2ec2f56e0d9485e48481e038eb3c0a721365fea4569d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/finder/Tests/Iterator/DepthRangeFilterIteratorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/finder/Tests/Iterator/DepthRangeFilterIteratorTest.php"));

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

use Symfony\\Component\\Finder\\Iterator\\DepthRangeFilterIterator;

class DepthRangeFilterIteratorTest extends RealIteratorTestCase
{
    /**
     * @dataProvider getAcceptData
     */
    public function testAccept(\$minDepth, \$maxDepth, \$expected)
    {
        \$inner = new \\RecursiveIteratorIterator(new \\RecursiveDirectoryIterator(\$this->toAbsolute(), \\FilesystemIterator::SKIP_DOTS), \\RecursiveIteratorIterator::SELF_FIRST);

        \$iterator = new DepthRangeFilterIterator(\$inner, \$minDepth, \$maxDepth);

        \$actual = array_keys(iterator_to_array(\$iterator));
        sort(\$expected);
        sort(\$actual);
        \$this->assertEquals(\$expected, \$actual);
    }

    public function getAcceptData()
    {
        \$lessThan1 = [
            '.gitignore',
            '.git',
            'test.py',
            'foo',
            'test.php',
            'toto',
            '.foo',
            '.bar',
            'foo bar',
            'qux',
            'qux_0_1.php',
            'qux_1000_1.php',
            'qux_1002_0.php',
            'qux_10_2.php',
            'qux_12_0.php',
            'qux_2_0.php',
        ];

        \$lessThanOrEqualTo1 = [
            '.gitignore',
            '.git',
            'test.py',
            'foo',
            'foo/bar.tmp',
            'test.php',
            'toto',
            'toto/.git',
            '.foo',
            '.foo/.bar',
            '.bar',
            'foo bar',
            '.foo/bar',
            'qux',
            'qux/baz_100_1.py',
            'qux/baz_1_2.py',
            'qux_0_1.php',
            'qux_1000_1.php',
            'qux_1002_0.php',
            'qux_10_2.php',
            'qux_12_0.php',
            'qux_2_0.php',
        ];

        \$graterThanOrEqualTo1 = [
            'toto/.git',
            'foo/bar.tmp',
            '.foo/.bar',
            '.foo/bar',
            'qux/baz_100_1.py',
            'qux/baz_1_2.py',
        ];

        \$equalTo1 = [
            'toto/.git',
            'foo/bar.tmp',
            '.foo/.bar',
            '.foo/bar',
            'qux/baz_100_1.py',
            'qux/baz_1_2.py',
        ];

        return [
            [0, 0, \$this->toAbsolute(\$lessThan1)],
            [0, 1, \$this->toAbsolute(\$lessThanOrEqualTo1)],
            [2, PHP_INT_MAX, []],
            [1, PHP_INT_MAX, \$this->toAbsolute(\$graterThanOrEqualTo1)],
            [1, 1, \$this->toAbsolute(\$equalTo1)],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/finder/Tests/Iterator/DepthRangeFilterIteratorTest.php";
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

use Symfony\\Component\\Finder\\Iterator\\DepthRangeFilterIterator;

class DepthRangeFilterIteratorTest extends RealIteratorTestCase
{
    /**
     * @dataProvider getAcceptData
     */
    public function testAccept(\$minDepth, \$maxDepth, \$expected)
    {
        \$inner = new \\RecursiveIteratorIterator(new \\RecursiveDirectoryIterator(\$this->toAbsolute(), \\FilesystemIterator::SKIP_DOTS), \\RecursiveIteratorIterator::SELF_FIRST);

        \$iterator = new DepthRangeFilterIterator(\$inner, \$minDepth, \$maxDepth);

        \$actual = array_keys(iterator_to_array(\$iterator));
        sort(\$expected);
        sort(\$actual);
        \$this->assertEquals(\$expected, \$actual);
    }

    public function getAcceptData()
    {
        \$lessThan1 = [
            '.gitignore',
            '.git',
            'test.py',
            'foo',
            'test.php',
            'toto',
            '.foo',
            '.bar',
            'foo bar',
            'qux',
            'qux_0_1.php',
            'qux_1000_1.php',
            'qux_1002_0.php',
            'qux_10_2.php',
            'qux_12_0.php',
            'qux_2_0.php',
        ];

        \$lessThanOrEqualTo1 = [
            '.gitignore',
            '.git',
            'test.py',
            'foo',
            'foo/bar.tmp',
            'test.php',
            'toto',
            'toto/.git',
            '.foo',
            '.foo/.bar',
            '.bar',
            'foo bar',
            '.foo/bar',
            'qux',
            'qux/baz_100_1.py',
            'qux/baz_1_2.py',
            'qux_0_1.php',
            'qux_1000_1.php',
            'qux_1002_0.php',
            'qux_10_2.php',
            'qux_12_0.php',
            'qux_2_0.php',
        ];

        \$graterThanOrEqualTo1 = [
            'toto/.git',
            'foo/bar.tmp',
            '.foo/.bar',
            '.foo/bar',
            'qux/baz_100_1.py',
            'qux/baz_1_2.py',
        ];

        \$equalTo1 = [
            'toto/.git',
            'foo/bar.tmp',
            '.foo/.bar',
            '.foo/bar',
            'qux/baz_100_1.py',
            'qux/baz_1_2.py',
        ];

        return [
            [0, 0, \$this->toAbsolute(\$lessThan1)],
            [0, 1, \$this->toAbsolute(\$lessThanOrEqualTo1)],
            [2, PHP_INT_MAX, []],
            [1, PHP_INT_MAX, \$this->toAbsolute(\$graterThanOrEqualTo1)],
            [1, 1, \$this->toAbsolute(\$equalTo1)],
        ];
    }
}
", "vendor/symfony/finder/Tests/Iterator/DepthRangeFilterIteratorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/finder/Tests/Iterator/DepthRangeFilterIteratorTest.php");
    }
}
