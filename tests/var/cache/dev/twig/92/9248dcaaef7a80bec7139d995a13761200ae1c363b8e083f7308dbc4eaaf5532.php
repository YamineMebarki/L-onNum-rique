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

/* vendor/symfony/finder/Tests/Iterator/FileTypeFilterIteratorTest.php */
class __TwigTemplate_b20234b1fbabf002915a47f853fdf5f4c8f2e031b3c6a9f5282c6e716b5e0124 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/finder/Tests/Iterator/FileTypeFilterIteratorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/finder/Tests/Iterator/FileTypeFilterIteratorTest.php"));

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

use Symfony\\Component\\Finder\\Iterator\\FileTypeFilterIterator;

class FileTypeFilterIteratorTest extends RealIteratorTestCase
{
    /**
     * @dataProvider getAcceptData
     */
    public function testAccept(\$mode, \$expected)
    {
        \$inner = new InnerTypeIterator(self::\$files);

        \$iterator = new FileTypeFilterIterator(\$inner, \$mode);

        \$this->assertIterator(\$expected, \$iterator);
    }

    public function getAcceptData()
    {
        \$onlyFiles = [
            'test.py',
            'foo/bar.tmp',
            'test.php',
            '.bar',
            '.foo/.bar',
            '.foo/bar',
            'foo bar',
            'qux/baz_100_1.py',
            'qux/baz_1_2.py',
            'qux_0_1.php',
            'qux_1000_1.php',
            'qux_1002_0.php',
            'qux_10_2.php',
            'qux_12_0.php',
            'qux_2_0.php',
        ];

        \$onlyDirectories = [
            '.git',
            'foo',
            'qux',
            'toto',
            'toto/.git',
            '.foo',
        ];

        return [
            [FileTypeFilterIterator::ONLY_FILES, \$this->toAbsolute(\$onlyFiles)],
            [FileTypeFilterIterator::ONLY_DIRECTORIES, \$this->toAbsolute(\$onlyDirectories)],
        ];
    }
}

class InnerTypeIterator extends \\ArrayIterator
{
    public function current()
    {
        return new \\SplFileInfo(parent::current());
    }

    public function isFile()
    {
        return \$this->current()->isFile();
    }

    public function isDir()
    {
        return \$this->current()->isDir();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/finder/Tests/Iterator/FileTypeFilterIteratorTest.php";
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

use Symfony\\Component\\Finder\\Iterator\\FileTypeFilterIterator;

class FileTypeFilterIteratorTest extends RealIteratorTestCase
{
    /**
     * @dataProvider getAcceptData
     */
    public function testAccept(\$mode, \$expected)
    {
        \$inner = new InnerTypeIterator(self::\$files);

        \$iterator = new FileTypeFilterIterator(\$inner, \$mode);

        \$this->assertIterator(\$expected, \$iterator);
    }

    public function getAcceptData()
    {
        \$onlyFiles = [
            'test.py',
            'foo/bar.tmp',
            'test.php',
            '.bar',
            '.foo/.bar',
            '.foo/bar',
            'foo bar',
            'qux/baz_100_1.py',
            'qux/baz_1_2.py',
            'qux_0_1.php',
            'qux_1000_1.php',
            'qux_1002_0.php',
            'qux_10_2.php',
            'qux_12_0.php',
            'qux_2_0.php',
        ];

        \$onlyDirectories = [
            '.git',
            'foo',
            'qux',
            'toto',
            'toto/.git',
            '.foo',
        ];

        return [
            [FileTypeFilterIterator::ONLY_FILES, \$this->toAbsolute(\$onlyFiles)],
            [FileTypeFilterIterator::ONLY_DIRECTORIES, \$this->toAbsolute(\$onlyDirectories)],
        ];
    }
}

class InnerTypeIterator extends \\ArrayIterator
{
    public function current()
    {
        return new \\SplFileInfo(parent::current());
    }

    public function isFile()
    {
        return \$this->current()->isFile();
    }

    public function isDir()
    {
        return \$this->current()->isDir();
    }
}
", "vendor/symfony/finder/Tests/Iterator/FileTypeFilterIteratorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/finder/Tests/Iterator/FileTypeFilterIteratorTest.php");
    }
}
