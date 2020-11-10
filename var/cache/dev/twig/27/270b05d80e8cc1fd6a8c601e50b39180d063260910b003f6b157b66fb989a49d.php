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

/* vendor/symfony/css-selector/Tests/CssSelectorConverterTest.php */
class __TwigTemplate_74529c1250f5002dda9b18f0b27fd9cf8ec6646df9bdb4235164907a8ad63bde extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/Tests/CssSelectorConverterTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/Tests/CssSelectorConverterTest.php"));

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

namespace Symfony\\Component\\CssSelector\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\CssSelector\\CssSelectorConverter;

class CssSelectorConverterTest extends TestCase
{
    public function testCssToXPath()
    {
        \$converter = new CssSelectorConverter();

        \$this->assertEquals('descendant-or-self::*', \$converter->toXPath(''));
        \$this->assertEquals('descendant-or-self::h1', \$converter->toXPath('h1'));
        \$this->assertEquals(\"descendant-or-self::h1[@id = 'foo']\", \$converter->toXPath('h1#foo'));
        \$this->assertEquals(\"descendant-or-self::h1[@class and contains(concat(' ', normalize-space(@class), ' '), ' foo ')]\", \$converter->toXPath('h1.foo'));
        \$this->assertEquals('descendant-or-self::foo:h1', \$converter->toXPath('foo|h1'));
        \$this->assertEquals('descendant-or-self::h1', \$converter->toXPath('H1'));
    }

    public function testCssToXPathXml()
    {
        \$converter = new CssSelectorConverter(false);

        \$this->assertEquals('descendant-or-self::H1', \$converter->toXPath('H1'));
    }

    public function testParseExceptions()
    {
        \$this->expectException('Symfony\\Component\\CssSelector\\Exception\\ParseException');
        \$this->expectExceptionMessage('Expected identifier, but <eof at 3> found.');
        \$converter = new CssSelectorConverter();
        \$converter->toXPath('h1:');
    }

    /** @dataProvider getCssToXPathWithoutPrefixTestData */
    public function testCssToXPathWithoutPrefix(\$css, \$xpath)
    {
        \$converter = new CssSelectorConverter();

        \$this->assertEquals(\$xpath, \$converter->toXPath(\$css, ''), '->parse() parses an input string and returns a node');
    }

    public function getCssToXPathWithoutPrefixTestData()
    {
        return [
            ['h1', 'h1'],
            ['foo|h1', 'foo:h1'],
            ['h1, h2, h3', 'h1 | h2 | h3'],
            ['h1:nth-child(3n+1)', \"*/*[(name() = 'h1') and (position() - 1 >= 0 and (position() - 1) mod 3 = 0)]\"],
            ['h1 > p', 'h1/p'],
            ['h1#foo', \"h1[@id = 'foo']\"],
            ['h1.foo', \"h1[@class and contains(concat(' ', normalize-space(@class), ' '), ' foo ')]\"],
            ['h1[class*=\"foo bar\"]', \"h1[@class and contains(@class, 'foo bar')]\"],
            ['h1[foo|class*=\"foo bar\"]', \"h1[@foo:class and contains(@foo:class, 'foo bar')]\"],
            ['h1[class]', 'h1[@class]'],
            ['h1 .foo', \"h1/descendant-or-self::*/*[@class and contains(concat(' ', normalize-space(@class), ' '), ' foo ')]\"],
            ['h1 #foo', \"h1/descendant-or-self::*/*[@id = 'foo']\"],
            ['h1 [class*=foo]', \"h1/descendant-or-self::*/*[@class and contains(@class, 'foo')]\"],
            ['div>.foo', \"div/*[@class and contains(concat(' ', normalize-space(@class), ' '), ' foo ')]\"],
            ['div > .foo', \"div/*[@class and contains(concat(' ', normalize-space(@class), ' '), ' foo ')]\"],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/css-selector/Tests/CssSelectorConverterTest.php";
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

namespace Symfony\\Component\\CssSelector\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\CssSelector\\CssSelectorConverter;

class CssSelectorConverterTest extends TestCase
{
    public function testCssToXPath()
    {
        \$converter = new CssSelectorConverter();

        \$this->assertEquals('descendant-or-self::*', \$converter->toXPath(''));
        \$this->assertEquals('descendant-or-self::h1', \$converter->toXPath('h1'));
        \$this->assertEquals(\"descendant-or-self::h1[@id = 'foo']\", \$converter->toXPath('h1#foo'));
        \$this->assertEquals(\"descendant-or-self::h1[@class and contains(concat(' ', normalize-space(@class), ' '), ' foo ')]\", \$converter->toXPath('h1.foo'));
        \$this->assertEquals('descendant-or-self::foo:h1', \$converter->toXPath('foo|h1'));
        \$this->assertEquals('descendant-or-self::h1', \$converter->toXPath('H1'));
    }

    public function testCssToXPathXml()
    {
        \$converter = new CssSelectorConverter(false);

        \$this->assertEquals('descendant-or-self::H1', \$converter->toXPath('H1'));
    }

    public function testParseExceptions()
    {
        \$this->expectException('Symfony\\Component\\CssSelector\\Exception\\ParseException');
        \$this->expectExceptionMessage('Expected identifier, but <eof at 3> found.');
        \$converter = new CssSelectorConverter();
        \$converter->toXPath('h1:');
    }

    /** @dataProvider getCssToXPathWithoutPrefixTestData */
    public function testCssToXPathWithoutPrefix(\$css, \$xpath)
    {
        \$converter = new CssSelectorConverter();

        \$this->assertEquals(\$xpath, \$converter->toXPath(\$css, ''), '->parse() parses an input string and returns a node');
    }

    public function getCssToXPathWithoutPrefixTestData()
    {
        return [
            ['h1', 'h1'],
            ['foo|h1', 'foo:h1'],
            ['h1, h2, h3', 'h1 | h2 | h3'],
            ['h1:nth-child(3n+1)', \"*/*[(name() = 'h1') and (position() - 1 >= 0 and (position() - 1) mod 3 = 0)]\"],
            ['h1 > p', 'h1/p'],
            ['h1#foo', \"h1[@id = 'foo']\"],
            ['h1.foo', \"h1[@class and contains(concat(' ', normalize-space(@class), ' '), ' foo ')]\"],
            ['h1[class*=\"foo bar\"]', \"h1[@class and contains(@class, 'foo bar')]\"],
            ['h1[foo|class*=\"foo bar\"]', \"h1[@foo:class and contains(@foo:class, 'foo bar')]\"],
            ['h1[class]', 'h1[@class]'],
            ['h1 .foo', \"h1/descendant-or-self::*/*[@class and contains(concat(' ', normalize-space(@class), ' '), ' foo ')]\"],
            ['h1 #foo', \"h1/descendant-or-self::*/*[@id = 'foo']\"],
            ['h1 [class*=foo]', \"h1/descendant-or-self::*/*[@class and contains(@class, 'foo')]\"],
            ['div>.foo', \"div/*[@class and contains(concat(' ', normalize-space(@class), ' '), ' foo ')]\"],
            ['div > .foo', \"div/*[@class and contains(concat(' ', normalize-space(@class), ' '), ' foo ')]\"],
        ];
    }
}
", "vendor/symfony/css-selector/Tests/CssSelectorConverterTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/css-selector/Tests/CssSelectorConverterTest.php");
    }
}
