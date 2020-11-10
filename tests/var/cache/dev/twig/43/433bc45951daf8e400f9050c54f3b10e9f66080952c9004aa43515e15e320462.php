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

/* vendor/symfony/finder/Tests/Iterator/PathFilterIteratorTest.php */
class __TwigTemplate_699a2e29ca508d54c61f18f1f9f4f21fa3e85bd76b4788a97e0ea53c2556e84b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/finder/Tests/Iterator/PathFilterIteratorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/finder/Tests/Iterator/PathFilterIteratorTest.php"));

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

use Symfony\\Component\\Finder\\Iterator\\PathFilterIterator;

class PathFilterIteratorTest extends IteratorTestCase
{
    /**
     * @dataProvider getTestFilterData
     */
    public function testFilter(\\Iterator \$inner, array \$matchPatterns, array \$noMatchPatterns, array \$resultArray)
    {
        \$iterator = new PathFilterIterator(\$inner, \$matchPatterns, \$noMatchPatterns);
        \$this->assertIterator(\$resultArray, \$iterator);
    }

    public function getTestFilterData()
    {
        \$inner = new MockFileListIterator();

        //PATH:   A/B/C/abc.dat
        \$inner[] = new MockSplFileInfo([
            'name' => 'abc.dat',
            'relativePathname' => 'A'.\\DIRECTORY_SEPARATOR.'B'.\\DIRECTORY_SEPARATOR.'C'.\\DIRECTORY_SEPARATOR.'abc.dat',
        ]);

        //PATH:   A/B/ab.dat
        \$inner[] = new MockSplFileInfo([
            'name' => 'ab.dat',
            'relativePathname' => 'A'.\\DIRECTORY_SEPARATOR.'B'.\\DIRECTORY_SEPARATOR.'ab.dat',
        ]);

        //PATH:   A/a.dat
        \$inner[] = new MockSplFileInfo([
            'name' => 'a.dat',
            'relativePathname' => 'A'.\\DIRECTORY_SEPARATOR.'a.dat',
        ]);

        //PATH:   copy/A/B/C/abc.dat.copy
        \$inner[] = new MockSplFileInfo([
            'name' => 'abc.dat.copy',
            'relativePathname' => 'copy'.\\DIRECTORY_SEPARATOR.'A'.\\DIRECTORY_SEPARATOR.'B'.\\DIRECTORY_SEPARATOR.'C'.\\DIRECTORY_SEPARATOR.'abc.dat',
        ]);

        //PATH:   copy/A/B/ab.dat.copy
        \$inner[] = new MockSplFileInfo([
            'name' => 'ab.dat.copy',
            'relativePathname' => 'copy'.\\DIRECTORY_SEPARATOR.'A'.\\DIRECTORY_SEPARATOR.'B'.\\DIRECTORY_SEPARATOR.'ab.dat',
        ]);

        //PATH:   copy/A/a.dat.copy
        \$inner[] = new MockSplFileInfo([
            'name' => 'a.dat.copy',
            'relativePathname' => 'copy'.\\DIRECTORY_SEPARATOR.'A'.\\DIRECTORY_SEPARATOR.'a.dat',
        ]);

        return [
            [\$inner, ['/^A/'],       [], ['abc.dat', 'ab.dat', 'a.dat']],
            [\$inner, ['/^A\\/B/'],    [], ['abc.dat', 'ab.dat']],
            [\$inner, ['/^A\\/B\\/C/'], [], ['abc.dat']],
            [\$inner, ['/A\\/B\\/C/'], [], ['abc.dat', 'abc.dat.copy']],

            [\$inner, ['A'],      [], ['abc.dat', 'ab.dat', 'a.dat', 'abc.dat.copy', 'ab.dat.copy', 'a.dat.copy']],
            [\$inner, ['A/B'],    [], ['abc.dat', 'ab.dat', 'abc.dat.copy', 'ab.dat.copy']],
            [\$inner, ['A/B/C'], [], ['abc.dat', 'abc.dat.copy']],

            [\$inner, ['copy/A'],      [], ['abc.dat.copy', 'ab.dat.copy', 'a.dat.copy']],
            [\$inner, ['copy/A/B'],    [], ['abc.dat.copy', 'ab.dat.copy']],
            [\$inner, ['copy/A/B/C'], [], ['abc.dat.copy']],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/finder/Tests/Iterator/PathFilterIteratorTest.php";
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

use Symfony\\Component\\Finder\\Iterator\\PathFilterIterator;

class PathFilterIteratorTest extends IteratorTestCase
{
    /**
     * @dataProvider getTestFilterData
     */
    public function testFilter(\\Iterator \$inner, array \$matchPatterns, array \$noMatchPatterns, array \$resultArray)
    {
        \$iterator = new PathFilterIterator(\$inner, \$matchPatterns, \$noMatchPatterns);
        \$this->assertIterator(\$resultArray, \$iterator);
    }

    public function getTestFilterData()
    {
        \$inner = new MockFileListIterator();

        //PATH:   A/B/C/abc.dat
        \$inner[] = new MockSplFileInfo([
            'name' => 'abc.dat',
            'relativePathname' => 'A'.\\DIRECTORY_SEPARATOR.'B'.\\DIRECTORY_SEPARATOR.'C'.\\DIRECTORY_SEPARATOR.'abc.dat',
        ]);

        //PATH:   A/B/ab.dat
        \$inner[] = new MockSplFileInfo([
            'name' => 'ab.dat',
            'relativePathname' => 'A'.\\DIRECTORY_SEPARATOR.'B'.\\DIRECTORY_SEPARATOR.'ab.dat',
        ]);

        //PATH:   A/a.dat
        \$inner[] = new MockSplFileInfo([
            'name' => 'a.dat',
            'relativePathname' => 'A'.\\DIRECTORY_SEPARATOR.'a.dat',
        ]);

        //PATH:   copy/A/B/C/abc.dat.copy
        \$inner[] = new MockSplFileInfo([
            'name' => 'abc.dat.copy',
            'relativePathname' => 'copy'.\\DIRECTORY_SEPARATOR.'A'.\\DIRECTORY_SEPARATOR.'B'.\\DIRECTORY_SEPARATOR.'C'.\\DIRECTORY_SEPARATOR.'abc.dat',
        ]);

        //PATH:   copy/A/B/ab.dat.copy
        \$inner[] = new MockSplFileInfo([
            'name' => 'ab.dat.copy',
            'relativePathname' => 'copy'.\\DIRECTORY_SEPARATOR.'A'.\\DIRECTORY_SEPARATOR.'B'.\\DIRECTORY_SEPARATOR.'ab.dat',
        ]);

        //PATH:   copy/A/a.dat.copy
        \$inner[] = new MockSplFileInfo([
            'name' => 'a.dat.copy',
            'relativePathname' => 'copy'.\\DIRECTORY_SEPARATOR.'A'.\\DIRECTORY_SEPARATOR.'a.dat',
        ]);

        return [
            [\$inner, ['/^A/'],       [], ['abc.dat', 'ab.dat', 'a.dat']],
            [\$inner, ['/^A\\/B/'],    [], ['abc.dat', 'ab.dat']],
            [\$inner, ['/^A\\/B\\/C/'], [], ['abc.dat']],
            [\$inner, ['/A\\/B\\/C/'], [], ['abc.dat', 'abc.dat.copy']],

            [\$inner, ['A'],      [], ['abc.dat', 'ab.dat', 'a.dat', 'abc.dat.copy', 'ab.dat.copy', 'a.dat.copy']],
            [\$inner, ['A/B'],    [], ['abc.dat', 'ab.dat', 'abc.dat.copy', 'ab.dat.copy']],
            [\$inner, ['A/B/C'], [], ['abc.dat', 'abc.dat.copy']],

            [\$inner, ['copy/A'],      [], ['abc.dat.copy', 'ab.dat.copy', 'a.dat.copy']],
            [\$inner, ['copy/A/B'],    [], ['abc.dat.copy', 'ab.dat.copy']],
            [\$inner, ['copy/A/B/C'], [], ['abc.dat.copy']],
        ];
    }
}
", "vendor/symfony/finder/Tests/Iterator/PathFilterIteratorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/finder/Tests/Iterator/PathFilterIteratorTest.php");
    }
}
