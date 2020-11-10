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

/* vendor/symfony/css-selector/Tests/Parser/TokenStreamTest.php */
class __TwigTemplate_ddf7d82b276a0d4a9993787e6cc0030e4374a557d0310b9505c673ed2f1ee274 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/Tests/Parser/TokenStreamTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/Tests/Parser/TokenStreamTest.php"));

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
use Symfony\\Component\\CssSelector\\Parser\\Token;
use Symfony\\Component\\CssSelector\\Parser\\TokenStream;

class TokenStreamTest extends TestCase
{
    public function testGetNext()
    {
        \$stream = new TokenStream();
        \$stream->push(\$t1 = new Token(Token::TYPE_IDENTIFIER, 'h1', 0));
        \$stream->push(\$t2 = new Token(Token::TYPE_DELIMITER, '.', 2));
        \$stream->push(\$t3 = new Token(Token::TYPE_IDENTIFIER, 'title', 3));

        \$this->assertSame(\$t1, \$stream->getNext());
        \$this->assertSame(\$t2, \$stream->getNext());
        \$this->assertSame(\$t3, \$stream->getNext());
    }

    public function testGetPeek()
    {
        \$stream = new TokenStream();
        \$stream->push(\$t1 = new Token(Token::TYPE_IDENTIFIER, 'h1', 0));
        \$stream->push(\$t2 = new Token(Token::TYPE_DELIMITER, '.', 2));
        \$stream->push(\$t3 = new Token(Token::TYPE_IDENTIFIER, 'title', 3));

        \$this->assertSame(\$t1, \$stream->getPeek());
        \$this->assertSame(\$t1, \$stream->getNext());
        \$this->assertSame(\$t2, \$stream->getPeek());
        \$this->assertSame(\$t2, \$stream->getPeek());
        \$this->assertSame(\$t2, \$stream->getNext());
    }

    public function testGetNextIdentifier()
    {
        \$stream = new TokenStream();
        \$stream->push(new Token(Token::TYPE_IDENTIFIER, 'h1', 0));

        \$this->assertEquals('h1', \$stream->getNextIdentifier());
    }

    public function testFailToGetNextIdentifier()
    {
        \$this->expectException('Symfony\\Component\\CssSelector\\Exception\\SyntaxErrorException');

        \$stream = new TokenStream();
        \$stream->push(new Token(Token::TYPE_DELIMITER, '.', 2));
        \$stream->getNextIdentifier();
    }

    public function testGetNextIdentifierOrStar()
    {
        \$stream = new TokenStream();

        \$stream->push(new Token(Token::TYPE_IDENTIFIER, 'h1', 0));
        \$this->assertEquals('h1', \$stream->getNextIdentifierOrStar());

        \$stream->push(new Token(Token::TYPE_DELIMITER, '*', 0));
        \$this->assertNull(\$stream->getNextIdentifierOrStar());
    }

    public function testFailToGetNextIdentifierOrStar()
    {
        \$this->expectException('Symfony\\Component\\CssSelector\\Exception\\SyntaxErrorException');

        \$stream = new TokenStream();
        \$stream->push(new Token(Token::TYPE_DELIMITER, '.', 2));
        \$stream->getNextIdentifierOrStar();
    }

    public function testSkipWhitespace()
    {
        \$stream = new TokenStream();
        \$stream->push(\$t1 = new Token(Token::TYPE_IDENTIFIER, 'h1', 0));
        \$stream->push(\$t2 = new Token(Token::TYPE_WHITESPACE, ' ', 2));
        \$stream->push(\$t3 = new Token(Token::TYPE_IDENTIFIER, 'h1', 3));

        \$stream->skipWhitespace();
        \$this->assertSame(\$t1, \$stream->getNext());

        \$stream->skipWhitespace();
        \$this->assertSame(\$t3, \$stream->getNext());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/css-selector/Tests/Parser/TokenStreamTest.php";
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
use Symfony\\Component\\CssSelector\\Parser\\Token;
use Symfony\\Component\\CssSelector\\Parser\\TokenStream;

class TokenStreamTest extends TestCase
{
    public function testGetNext()
    {
        \$stream = new TokenStream();
        \$stream->push(\$t1 = new Token(Token::TYPE_IDENTIFIER, 'h1', 0));
        \$stream->push(\$t2 = new Token(Token::TYPE_DELIMITER, '.', 2));
        \$stream->push(\$t3 = new Token(Token::TYPE_IDENTIFIER, 'title', 3));

        \$this->assertSame(\$t1, \$stream->getNext());
        \$this->assertSame(\$t2, \$stream->getNext());
        \$this->assertSame(\$t3, \$stream->getNext());
    }

    public function testGetPeek()
    {
        \$stream = new TokenStream();
        \$stream->push(\$t1 = new Token(Token::TYPE_IDENTIFIER, 'h1', 0));
        \$stream->push(\$t2 = new Token(Token::TYPE_DELIMITER, '.', 2));
        \$stream->push(\$t3 = new Token(Token::TYPE_IDENTIFIER, 'title', 3));

        \$this->assertSame(\$t1, \$stream->getPeek());
        \$this->assertSame(\$t1, \$stream->getNext());
        \$this->assertSame(\$t2, \$stream->getPeek());
        \$this->assertSame(\$t2, \$stream->getPeek());
        \$this->assertSame(\$t2, \$stream->getNext());
    }

    public function testGetNextIdentifier()
    {
        \$stream = new TokenStream();
        \$stream->push(new Token(Token::TYPE_IDENTIFIER, 'h1', 0));

        \$this->assertEquals('h1', \$stream->getNextIdentifier());
    }

    public function testFailToGetNextIdentifier()
    {
        \$this->expectException('Symfony\\Component\\CssSelector\\Exception\\SyntaxErrorException');

        \$stream = new TokenStream();
        \$stream->push(new Token(Token::TYPE_DELIMITER, '.', 2));
        \$stream->getNextIdentifier();
    }

    public function testGetNextIdentifierOrStar()
    {
        \$stream = new TokenStream();

        \$stream->push(new Token(Token::TYPE_IDENTIFIER, 'h1', 0));
        \$this->assertEquals('h1', \$stream->getNextIdentifierOrStar());

        \$stream->push(new Token(Token::TYPE_DELIMITER, '*', 0));
        \$this->assertNull(\$stream->getNextIdentifierOrStar());
    }

    public function testFailToGetNextIdentifierOrStar()
    {
        \$this->expectException('Symfony\\Component\\CssSelector\\Exception\\SyntaxErrorException');

        \$stream = new TokenStream();
        \$stream->push(new Token(Token::TYPE_DELIMITER, '.', 2));
        \$stream->getNextIdentifierOrStar();
    }

    public function testSkipWhitespace()
    {
        \$stream = new TokenStream();
        \$stream->push(\$t1 = new Token(Token::TYPE_IDENTIFIER, 'h1', 0));
        \$stream->push(\$t2 = new Token(Token::TYPE_WHITESPACE, ' ', 2));
        \$stream->push(\$t3 = new Token(Token::TYPE_IDENTIFIER, 'h1', 3));

        \$stream->skipWhitespace();
        \$this->assertSame(\$t1, \$stream->getNext());

        \$stream->skipWhitespace();
        \$this->assertSame(\$t3, \$stream->getNext());
    }
}
", "vendor/symfony/css-selector/Tests/Parser/TokenStreamTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/css-selector/Tests/Parser/TokenStreamTest.php");
    }
}
