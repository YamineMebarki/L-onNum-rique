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

/* vendor/symfony/finder/Tests/Iterator/SizeRangeFilterIteratorTest.php */
class __TwigTemplate_8cd83f6a8c3bfbd19d4641670e2fc3bf8f36f38ddf5ffff3d2f9f094506fec23 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/finder/Tests/Iterator/SizeRangeFilterIteratorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/finder/Tests/Iterator/SizeRangeFilterIteratorTest.php"));

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

use Symfony\\Component\\Finder\\Comparator\\NumberComparator;
use Symfony\\Component\\Finder\\Iterator\\SizeRangeFilterIterator;

class SizeRangeFilterIteratorTest extends RealIteratorTestCase
{
    /**
     * @dataProvider getAcceptData
     */
    public function testAccept(\$size, \$expected)
    {
        \$inner = new InnerSizeIterator(self::\$files);

        \$iterator = new SizeRangeFilterIterator(\$inner, \$size);

        \$this->assertIterator(\$expected, \$iterator);
    }

    public function getAcceptData()
    {
        \$lessThan1KGreaterThan05K = [
            '.foo',
            '.git',
            'foo',
            'qux',
            'test.php',
            'toto',
            'toto/.git',
        ];

        return [
            [[new NumberComparator('< 1K'), new NumberComparator('> 0.5K')], \$this->toAbsolute(\$lessThan1KGreaterThan05K)],
        ];
    }
}

class InnerSizeIterator extends \\ArrayIterator
{
    public function current()
    {
        return new \\SplFileInfo(parent::current());
    }

    public function getFilename()
    {
        return parent::current();
    }

    public function isFile()
    {
        return \$this->current()->isFile();
    }

    public function getSize()
    {
        return \$this->current()->getSize();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/finder/Tests/Iterator/SizeRangeFilterIteratorTest.php";
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

use Symfony\\Component\\Finder\\Comparator\\NumberComparator;
use Symfony\\Component\\Finder\\Iterator\\SizeRangeFilterIterator;

class SizeRangeFilterIteratorTest extends RealIteratorTestCase
{
    /**
     * @dataProvider getAcceptData
     */
    public function testAccept(\$size, \$expected)
    {
        \$inner = new InnerSizeIterator(self::\$files);

        \$iterator = new SizeRangeFilterIterator(\$inner, \$size);

        \$this->assertIterator(\$expected, \$iterator);
    }

    public function getAcceptData()
    {
        \$lessThan1KGreaterThan05K = [
            '.foo',
            '.git',
            'foo',
            'qux',
            'test.php',
            'toto',
            'toto/.git',
        ];

        return [
            [[new NumberComparator('< 1K'), new NumberComparator('> 0.5K')], \$this->toAbsolute(\$lessThan1KGreaterThan05K)],
        ];
    }
}

class InnerSizeIterator extends \\ArrayIterator
{
    public function current()
    {
        return new \\SplFileInfo(parent::current());
    }

    public function getFilename()
    {
        return parent::current();
    }

    public function isFile()
    {
        return \$this->current()->isFile();
    }

    public function getSize()
    {
        return \$this->current()->getSize();
    }
}
", "vendor/symfony/finder/Tests/Iterator/SizeRangeFilterIteratorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/finder/Tests/Iterator/SizeRangeFilterIteratorTest.php");
    }
}
