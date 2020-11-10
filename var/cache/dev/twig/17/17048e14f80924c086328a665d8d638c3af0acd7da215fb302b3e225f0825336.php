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

/* vendor/symfony/finder/Tests/Iterator/FilecontentFilterIteratorTest.php */
class __TwigTemplate_ef5c04429363f87f4a1d83d51d49ef9549ff7cf8970525001aba56ac0b9936e7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/finder/Tests/Iterator/FilecontentFilterIteratorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/finder/Tests/Iterator/FilecontentFilterIteratorTest.php"));

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

use Symfony\\Component\\Finder\\Iterator\\FilecontentFilterIterator;

class FilecontentFilterIteratorTest extends IteratorTestCase
{
    public function testAccept()
    {
        \$inner = new MockFileListIterator(['test.txt']);
        \$iterator = new FilecontentFilterIterator(\$inner, [], []);
        \$this->assertIterator(['test.txt'], \$iterator);
    }

    public function testDirectory()
    {
        \$inner = new MockFileListIterator(['directory']);
        \$iterator = new FilecontentFilterIterator(\$inner, ['directory'], []);
        \$this->assertIterator([], \$iterator);
    }

    public function testUnreadableFile()
    {
        \$inner = new MockFileListIterator(['file r-']);
        \$iterator = new FilecontentFilterIterator(\$inner, ['file r-'], []);
        \$this->assertIterator([], \$iterator);
    }

    /**
     * @dataProvider getTestFilterData
     */
    public function testFilter(\\Iterator \$inner, array \$matchPatterns, array \$noMatchPatterns, array \$resultArray)
    {
        \$iterator = new FilecontentFilterIterator(\$inner, \$matchPatterns, \$noMatchPatterns);
        \$this->assertIterator(\$resultArray, \$iterator);
    }

    public function getTestFilterData()
    {
        \$inner = new MockFileListIterator();

        \$inner[] = new MockSplFileInfo([
            'name' => 'a.txt',
            'contents' => 'Lorem ipsum...',
            'type' => 'file',
            'mode' => 'r+', ]
        );

        \$inner[] = new MockSplFileInfo([
            'name' => 'b.yml',
            'contents' => 'dolor sit...',
            'type' => 'file',
            'mode' => 'r+', ]
        );

        \$inner[] = new MockSplFileInfo([
            'name' => 'some/other/dir/third.php',
            'contents' => 'amet...',
            'type' => 'file',
            'mode' => 'r+', ]
        );

        \$inner[] = new MockSplFileInfo([
            'name' => 'unreadable-file.txt',
            'contents' => false,
            'type' => 'file',
            'mode' => 'r+', ]
        );

        return [
            [\$inner, ['.'], [], ['a.txt', 'b.yml', 'some/other/dir/third.php']],
            [\$inner, ['ipsum'], [], ['a.txt']],
            [\$inner, ['i', 'amet'], ['Lorem', 'amet'], ['b.yml']],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/finder/Tests/Iterator/FilecontentFilterIteratorTest.php";
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

use Symfony\\Component\\Finder\\Iterator\\FilecontentFilterIterator;

class FilecontentFilterIteratorTest extends IteratorTestCase
{
    public function testAccept()
    {
        \$inner = new MockFileListIterator(['test.txt']);
        \$iterator = new FilecontentFilterIterator(\$inner, [], []);
        \$this->assertIterator(['test.txt'], \$iterator);
    }

    public function testDirectory()
    {
        \$inner = new MockFileListIterator(['directory']);
        \$iterator = new FilecontentFilterIterator(\$inner, ['directory'], []);
        \$this->assertIterator([], \$iterator);
    }

    public function testUnreadableFile()
    {
        \$inner = new MockFileListIterator(['file r-']);
        \$iterator = new FilecontentFilterIterator(\$inner, ['file r-'], []);
        \$this->assertIterator([], \$iterator);
    }

    /**
     * @dataProvider getTestFilterData
     */
    public function testFilter(\\Iterator \$inner, array \$matchPatterns, array \$noMatchPatterns, array \$resultArray)
    {
        \$iterator = new FilecontentFilterIterator(\$inner, \$matchPatterns, \$noMatchPatterns);
        \$this->assertIterator(\$resultArray, \$iterator);
    }

    public function getTestFilterData()
    {
        \$inner = new MockFileListIterator();

        \$inner[] = new MockSplFileInfo([
            'name' => 'a.txt',
            'contents' => 'Lorem ipsum...',
            'type' => 'file',
            'mode' => 'r+', ]
        );

        \$inner[] = new MockSplFileInfo([
            'name' => 'b.yml',
            'contents' => 'dolor sit...',
            'type' => 'file',
            'mode' => 'r+', ]
        );

        \$inner[] = new MockSplFileInfo([
            'name' => 'some/other/dir/third.php',
            'contents' => 'amet...',
            'type' => 'file',
            'mode' => 'r+', ]
        );

        \$inner[] = new MockSplFileInfo([
            'name' => 'unreadable-file.txt',
            'contents' => false,
            'type' => 'file',
            'mode' => 'r+', ]
        );

        return [
            [\$inner, ['.'], [], ['a.txt', 'b.yml', 'some/other/dir/third.php']],
            [\$inner, ['ipsum'], [], ['a.txt']],
            [\$inner, ['i', 'amet'], ['Lorem', 'amet'], ['b.yml']],
        ];
    }
}
", "vendor/symfony/finder/Tests/Iterator/FilecontentFilterIteratorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/finder/Tests/Iterator/FilecontentFilterIteratorTest.php");
    }
}
