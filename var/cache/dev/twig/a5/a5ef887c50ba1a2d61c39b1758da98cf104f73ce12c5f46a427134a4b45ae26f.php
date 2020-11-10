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

/* vendor/symfony/finder/Tests/Iterator/FilenameFilterIteratorTest.php */
class __TwigTemplate_474ad59b8c5393cf67823e01381c81072006d4a5070d9a163dc07a1078748fb4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/finder/Tests/Iterator/FilenameFilterIteratorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/finder/Tests/Iterator/FilenameFilterIteratorTest.php"));

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

use Symfony\\Component\\Finder\\Iterator\\FilenameFilterIterator;

class FilenameFilterIteratorTest extends IteratorTestCase
{
    /**
     * @dataProvider getAcceptData
     */
    public function testAccept(\$matchPatterns, \$noMatchPatterns, \$expected)
    {
        \$inner = new InnerNameIterator(['test.php', 'test.py', 'foo.php']);

        \$iterator = new FilenameFilterIterator(\$inner, \$matchPatterns, \$noMatchPatterns);

        \$this->assertIterator(\$expected, \$iterator);
    }

    public function getAcceptData()
    {
        return [
            [['test.*'], [], ['test.php', 'test.py']],
            [[], ['test.*'], ['foo.php']],
            [['*.php'], ['test.*'], ['foo.php']],
            [['*.php', '*.py'], ['foo.*'], ['test.php', 'test.py']],
            [['/\\.php\$/'], [], ['test.php', 'foo.php']],
            [[], ['/\\.php\$/'], ['test.py']],
        ];
    }
}

class InnerNameIterator extends \\ArrayIterator
{
    public function current()
    {
        return new \\SplFileInfo(parent::current());
    }

    public function getFilename()
    {
        return parent::current();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/finder/Tests/Iterator/FilenameFilterIteratorTest.php";
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

use Symfony\\Component\\Finder\\Iterator\\FilenameFilterIterator;

class FilenameFilterIteratorTest extends IteratorTestCase
{
    /**
     * @dataProvider getAcceptData
     */
    public function testAccept(\$matchPatterns, \$noMatchPatterns, \$expected)
    {
        \$inner = new InnerNameIterator(['test.php', 'test.py', 'foo.php']);

        \$iterator = new FilenameFilterIterator(\$inner, \$matchPatterns, \$noMatchPatterns);

        \$this->assertIterator(\$expected, \$iterator);
    }

    public function getAcceptData()
    {
        return [
            [['test.*'], [], ['test.php', 'test.py']],
            [[], ['test.*'], ['foo.php']],
            [['*.php'], ['test.*'], ['foo.php']],
            [['*.php', '*.py'], ['foo.*'], ['test.php', 'test.py']],
            [['/\\.php\$/'], [], ['test.php', 'foo.php']],
            [[], ['/\\.php\$/'], ['test.py']],
        ];
    }
}

class InnerNameIterator extends \\ArrayIterator
{
    public function current()
    {
        return new \\SplFileInfo(parent::current());
    }

    public function getFilename()
    {
        return parent::current();
    }
}
", "vendor/symfony/finder/Tests/Iterator/FilenameFilterIteratorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/finder/Tests/Iterator/FilenameFilterIteratorTest.php");
    }
}
