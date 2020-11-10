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

/* vendor/symfony/finder/Tests/Iterator/IteratorTestCase.php */
class __TwigTemplate_c104a857ea310920fafcbba19cd016bbbe865a4be82584d1a969a3697c1e19b6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/finder/Tests/Iterator/IteratorTestCase.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/finder/Tests/Iterator/IteratorTestCase.php"));

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

use PHPUnit\\Framework\\TestCase;

abstract class IteratorTestCase extends TestCase
{
    protected function assertIterator(\$expected, \\Traversable \$iterator)
    {
        // set iterator_to_array \$use_key to false to avoid values merge
        // this made FinderTest::testAppendWithAnArray() fail with GnuFinderAdapter
        \$values = array_map(function (\\SplFileInfo \$fileinfo) { return str_replace('/', \\DIRECTORY_SEPARATOR, \$fileinfo->getPathname()); }, iterator_to_array(\$iterator, false));

        \$expected = array_map(function (\$path) { return str_replace('/', \\DIRECTORY_SEPARATOR, \$path); }, \$expected);

        sort(\$values);
        sort(\$expected);

        \$this->assertEquals(\$expected, array_values(\$values));
    }

    protected function assertOrderedIterator(\$expected, \\Traversable \$iterator)
    {
        \$values = array_map(function (\\SplFileInfo \$fileinfo) { return \$fileinfo->getPathname(); }, iterator_to_array(\$iterator));

        \$this->assertEquals(\$expected, array_values(\$values));
    }

    /**
     *  Same as assertOrderedIterator, but checks the order of groups of
     *  array elements.
     *
     *  @param array \$expected - an array of arrays. For any two subarrays
     *      \$a and \$b such that \$a goes before \$b in \$expected, the method
     *      asserts that any element of \$a goes before any element of \$b
     *      in the sequence generated by \$iterator
     */
    protected function assertOrderedIteratorForGroups(array \$expected, \\Traversable \$iterator)
    {
        \$values = array_values(array_map(function (\\SplFileInfo \$fileinfo) { return \$fileinfo->getPathname(); }, iterator_to_array(\$iterator)));

        foreach (\$expected as \$subarray) {
            \$temp = [];
            while (\\count(\$values) && \\count(\$temp) < \\count(\$subarray)) {
                \$temp[] = array_shift(\$values);
            }
            sort(\$temp);
            sort(\$subarray);
            \$this->assertEquals(\$subarray, \$temp);
        }
    }

    /**
     * Same as IteratorTestCase::assertIterator with foreach usage.
     */
    protected function assertIteratorInForeach(array \$expected, \\Traversable \$iterator)
    {
        \$values = [];
        foreach (\$iterator as \$file) {
            \$this->assertInstanceOf('Symfony\\\\Component\\\\Finder\\\\SplFileInfo', \$file);
            \$values[] = \$file->getPathname();
        }

        sort(\$values);
        sort(\$expected);

        \$this->assertEquals(\$expected, array_values(\$values));
    }

    /**
     * Same as IteratorTestCase::assertOrderedIterator with foreach usage.
     */
    protected function assertOrderedIteratorInForeach(array \$expected, \\Traversable \$iterator)
    {
        \$values = [];
        foreach (\$iterator as \$file) {
            \$this->assertInstanceOf('Symfony\\\\Component\\\\Finder\\\\SplFileInfo', \$file);
            \$values[] = \$file->getPathname();
        }

        \$this->assertEquals(\$expected, array_values(\$values));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/finder/Tests/Iterator/IteratorTestCase.php";
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

use PHPUnit\\Framework\\TestCase;

abstract class IteratorTestCase extends TestCase
{
    protected function assertIterator(\$expected, \\Traversable \$iterator)
    {
        // set iterator_to_array \$use_key to false to avoid values merge
        // this made FinderTest::testAppendWithAnArray() fail with GnuFinderAdapter
        \$values = array_map(function (\\SplFileInfo \$fileinfo) { return str_replace('/', \\DIRECTORY_SEPARATOR, \$fileinfo->getPathname()); }, iterator_to_array(\$iterator, false));

        \$expected = array_map(function (\$path) { return str_replace('/', \\DIRECTORY_SEPARATOR, \$path); }, \$expected);

        sort(\$values);
        sort(\$expected);

        \$this->assertEquals(\$expected, array_values(\$values));
    }

    protected function assertOrderedIterator(\$expected, \\Traversable \$iterator)
    {
        \$values = array_map(function (\\SplFileInfo \$fileinfo) { return \$fileinfo->getPathname(); }, iterator_to_array(\$iterator));

        \$this->assertEquals(\$expected, array_values(\$values));
    }

    /**
     *  Same as assertOrderedIterator, but checks the order of groups of
     *  array elements.
     *
     *  @param array \$expected - an array of arrays. For any two subarrays
     *      \$a and \$b such that \$a goes before \$b in \$expected, the method
     *      asserts that any element of \$a goes before any element of \$b
     *      in the sequence generated by \$iterator
     */
    protected function assertOrderedIteratorForGroups(array \$expected, \\Traversable \$iterator)
    {
        \$values = array_values(array_map(function (\\SplFileInfo \$fileinfo) { return \$fileinfo->getPathname(); }, iterator_to_array(\$iterator)));

        foreach (\$expected as \$subarray) {
            \$temp = [];
            while (\\count(\$values) && \\count(\$temp) < \\count(\$subarray)) {
                \$temp[] = array_shift(\$values);
            }
            sort(\$temp);
            sort(\$subarray);
            \$this->assertEquals(\$subarray, \$temp);
        }
    }

    /**
     * Same as IteratorTestCase::assertIterator with foreach usage.
     */
    protected function assertIteratorInForeach(array \$expected, \\Traversable \$iterator)
    {
        \$values = [];
        foreach (\$iterator as \$file) {
            \$this->assertInstanceOf('Symfony\\\\Component\\\\Finder\\\\SplFileInfo', \$file);
            \$values[] = \$file->getPathname();
        }

        sort(\$values);
        sort(\$expected);

        \$this->assertEquals(\$expected, array_values(\$values));
    }

    /**
     * Same as IteratorTestCase::assertOrderedIterator with foreach usage.
     */
    protected function assertOrderedIteratorInForeach(array \$expected, \\Traversable \$iterator)
    {
        \$values = [];
        foreach (\$iterator as \$file) {
            \$this->assertInstanceOf('Symfony\\\\Component\\\\Finder\\\\SplFileInfo', \$file);
            \$values[] = \$file->getPathname();
        }

        \$this->assertEquals(\$expected, array_values(\$values));
    }
}
", "vendor/symfony/finder/Tests/Iterator/IteratorTestCase.php", "/var/www/public/DevLaon/templates/vendor/symfony/finder/Tests/Iterator/IteratorTestCase.php");
    }
}