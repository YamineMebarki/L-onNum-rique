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

/* vendor/symfony/css-selector/Tests/Parser/ReaderTest.php */
class __TwigTemplate_acb6160aa407f26acb579ddfba0a91b39683ef3d07bad82aba0685f0e2cf28c3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/Tests/Parser/ReaderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/Tests/Parser/ReaderTest.php"));

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

namespace Symfony\\Component\\CssSelector\\Tests\\Parser;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\CssSelector\\Parser\\Reader;

class ReaderTest extends TestCase
{
    public function testIsEOF()
    {
        \$reader = new Reader('');
        \$this->assertTrue(\$reader->isEOF());

        \$reader = new Reader('hello');
        \$this->assertFalse(\$reader->isEOF());

        \$this->assignPosition(\$reader, 2);
        \$this->assertFalse(\$reader->isEOF());

        \$this->assignPosition(\$reader, 5);
        \$this->assertTrue(\$reader->isEOF());
    }

    public function testGetRemainingLength()
    {
        \$reader = new Reader('hello');
        \$this->assertEquals(5, \$reader->getRemainingLength());

        \$this->assignPosition(\$reader, 2);
        \$this->assertEquals(3, \$reader->getRemainingLength());

        \$this->assignPosition(\$reader, 5);
        \$this->assertEquals(0, \$reader->getRemainingLength());
    }

    public function testGetSubstring()
    {
        \$reader = new Reader('hello');
        \$this->assertEquals('he', \$reader->getSubstring(2));
        \$this->assertEquals('el', \$reader->getSubstring(2, 1));

        \$this->assignPosition(\$reader, 2);
        \$this->assertEquals('ll', \$reader->getSubstring(2));
        \$this->assertEquals('lo', \$reader->getSubstring(2, 1));
    }

    public function testGetOffset()
    {
        \$reader = new Reader('hello');
        \$this->assertEquals(2, \$reader->getOffset('ll'));
        \$this->assertFalse(\$reader->getOffset('w'));

        \$this->assignPosition(\$reader, 2);
        \$this->assertEquals(0, \$reader->getOffset('ll'));
        \$this->assertFalse(\$reader->getOffset('he'));
    }

    public function testFindPattern()
    {
        \$reader = new Reader('hello');

        \$this->assertFalse(\$reader->findPattern('/world/'));
        \$this->assertEquals(['hello', 'h'], \$reader->findPattern('/^([a-z]).*/'));

        \$this->assignPosition(\$reader, 2);
        \$this->assertFalse(\$reader->findPattern('/^h.*/'));
        \$this->assertEquals(['llo'], \$reader->findPattern('/^llo\$/'));
    }

    public function testMoveForward()
    {
        \$reader = new Reader('hello');
        \$this->assertEquals(0, \$reader->getPosition());

        \$reader->moveForward(2);
        \$this->assertEquals(2, \$reader->getPosition());
    }

    public function testToEnd()
    {
        \$reader = new Reader('hello');
        \$reader->moveToEnd();
        \$this->assertTrue(\$reader->isEOF());
    }

    private function assignPosition(Reader \$reader, \$value)
    {
        \$position = new \\ReflectionProperty(\$reader, 'position');
        \$position->setAccessible(true);
        \$position->setValue(\$reader, \$value);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/css-selector/Tests/Parser/ReaderTest.php";
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

namespace Symfony\\Component\\CssSelector\\Tests\\Parser;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\CssSelector\\Parser\\Reader;

class ReaderTest extends TestCase
{
    public function testIsEOF()
    {
        \$reader = new Reader('');
        \$this->assertTrue(\$reader->isEOF());

        \$reader = new Reader('hello');
        \$this->assertFalse(\$reader->isEOF());

        \$this->assignPosition(\$reader, 2);
        \$this->assertFalse(\$reader->isEOF());

        \$this->assignPosition(\$reader, 5);
        \$this->assertTrue(\$reader->isEOF());
    }

    public function testGetRemainingLength()
    {
        \$reader = new Reader('hello');
        \$this->assertEquals(5, \$reader->getRemainingLength());

        \$this->assignPosition(\$reader, 2);
        \$this->assertEquals(3, \$reader->getRemainingLength());

        \$this->assignPosition(\$reader, 5);
        \$this->assertEquals(0, \$reader->getRemainingLength());
    }

    public function testGetSubstring()
    {
        \$reader = new Reader('hello');
        \$this->assertEquals('he', \$reader->getSubstring(2));
        \$this->assertEquals('el', \$reader->getSubstring(2, 1));

        \$this->assignPosition(\$reader, 2);
        \$this->assertEquals('ll', \$reader->getSubstring(2));
        \$this->assertEquals('lo', \$reader->getSubstring(2, 1));
    }

    public function testGetOffset()
    {
        \$reader = new Reader('hello');
        \$this->assertEquals(2, \$reader->getOffset('ll'));
        \$this->assertFalse(\$reader->getOffset('w'));

        \$this->assignPosition(\$reader, 2);
        \$this->assertEquals(0, \$reader->getOffset('ll'));
        \$this->assertFalse(\$reader->getOffset('he'));
    }

    public function testFindPattern()
    {
        \$reader = new Reader('hello');

        \$this->assertFalse(\$reader->findPattern('/world/'));
        \$this->assertEquals(['hello', 'h'], \$reader->findPattern('/^([a-z]).*/'));

        \$this->assignPosition(\$reader, 2);
        \$this->assertFalse(\$reader->findPattern('/^h.*/'));
        \$this->assertEquals(['llo'], \$reader->findPattern('/^llo\$/'));
    }

    public function testMoveForward()
    {
        \$reader = new Reader('hello');
        \$this->assertEquals(0, \$reader->getPosition());

        \$reader->moveForward(2);
        \$this->assertEquals(2, \$reader->getPosition());
    }

    public function testToEnd()
    {
        \$reader = new Reader('hello');
        \$reader->moveToEnd();
        \$this->assertTrue(\$reader->isEOF());
    }

    private function assignPosition(Reader \$reader, \$value)
    {
        \$position = new \\ReflectionProperty(\$reader, 'position');
        \$position->setAccessible(true);
        \$position->setValue(\$reader, \$value);
    }
}
", "vendor/symfony/css-selector/Tests/Parser/ReaderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/css-selector/Tests/Parser/ReaderTest.php");
    }
}
