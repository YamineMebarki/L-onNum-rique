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

/* vendor/symfony/expression-language/Tests/LexerTest.php */
class __TwigTemplate_1f14b942b40294a02478397a2b7d4d2713f6708cf82b45646f78cee648dc2b60 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/expression-language/Tests/LexerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/expression-language/Tests/LexerTest.php"));

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

namespace Symfony\\Component\\ExpressionLanguage\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\ExpressionLanguage\\Lexer;
use Symfony\\Component\\ExpressionLanguage\\Token;
use Symfony\\Component\\ExpressionLanguage\\TokenStream;

class LexerTest extends TestCase
{
    /**
     * @var Lexer
     */
    private \$lexer;

    protected function setUp(): void
    {
        \$this->lexer = new Lexer();
    }

    /**
     * @dataProvider getTokenizeData
     */
    public function testTokenize(\$tokens, \$expression)
    {
        \$tokens[] = new Token('end of expression', null, \\strlen(\$expression) + 1);
        \$this->assertEquals(new TokenStream(\$tokens, \$expression), \$this->lexer->tokenize(\$expression));
    }

    public function testTokenizeThrowsErrorWithMessage()
    {
        \$this->expectException('Symfony\\Component\\ExpressionLanguage\\SyntaxError');
        \$this->expectExceptionMessage('Unexpected character \"\\'\" around position 33 for expression `service(faulty.expression.example\\').dummyMethod()`.');
        \$expression = \"service(faulty.expression.example').dummyMethod()\";
        \$this->lexer->tokenize(\$expression);
    }

    public function testTokenizeThrowsErrorOnUnclosedBrace()
    {
        \$this->expectException('Symfony\\Component\\ExpressionLanguage\\SyntaxError');
        \$this->expectExceptionMessage('Unclosed \"(\" around position 7 for expression `service(unclosed.expression.dummyMethod()`.');
        \$expression = 'service(unclosed.expression.dummyMethod()';
        \$this->lexer->tokenize(\$expression);
    }

    public function getTokenizeData()
    {
        return [
            [
                [new Token('name', 'a', 3)],
                '  a  ',
            ],
            [
                [new Token('name', 'a', 1)],
                'a',
            ],
            [
                [new Token('string', 'foo', 1)],
                '\"foo\"',
            ],
            [
                [new Token('number', '3', 1)],
                '3',
            ],
            [
                [new Token('operator', '+', 1)],
                '+',
            ],
            [
                [new Token('punctuation', '.', 1)],
                '.',
            ],
            [
                [
                    new Token('punctuation', '(', 1),
                    new Token('number', '3', 2),
                    new Token('operator', '+', 4),
                    new Token('number', '5', 6),
                    new Token('punctuation', ')', 7),
                    new Token('operator', '~', 9),
                    new Token('name', 'foo', 11),
                    new Token('punctuation', '(', 14),
                    new Token('string', 'bar', 15),
                    new Token('punctuation', ')', 20),
                    new Token('punctuation', '.', 21),
                    new Token('name', 'baz', 22),
                    new Token('punctuation', '[', 25),
                    new Token('number', '4', 26),
                    new Token('punctuation', ']', 27),
                ],
                '(3 + 5) ~ foo(\"bar\").baz[4]',
            ],
            [
                [new Token('operator', '..', 1)],
                '..',
            ],
            [
                [new Token('string', '#foo', 1)],
                \"'#foo'\",
            ],
            [
                [new Token('string', '#foo', 1)],
                '\"#foo\"',
            ],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/expression-language/Tests/LexerTest.php";
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

namespace Symfony\\Component\\ExpressionLanguage\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\ExpressionLanguage\\Lexer;
use Symfony\\Component\\ExpressionLanguage\\Token;
use Symfony\\Component\\ExpressionLanguage\\TokenStream;

class LexerTest extends TestCase
{
    /**
     * @var Lexer
     */
    private \$lexer;

    protected function setUp(): void
    {
        \$this->lexer = new Lexer();
    }

    /**
     * @dataProvider getTokenizeData
     */
    public function testTokenize(\$tokens, \$expression)
    {
        \$tokens[] = new Token('end of expression', null, \\strlen(\$expression) + 1);
        \$this->assertEquals(new TokenStream(\$tokens, \$expression), \$this->lexer->tokenize(\$expression));
    }

    public function testTokenizeThrowsErrorWithMessage()
    {
        \$this->expectException('Symfony\\Component\\ExpressionLanguage\\SyntaxError');
        \$this->expectExceptionMessage('Unexpected character \"\\'\" around position 33 for expression `service(faulty.expression.example\\').dummyMethod()`.');
        \$expression = \"service(faulty.expression.example').dummyMethod()\";
        \$this->lexer->tokenize(\$expression);
    }

    public function testTokenizeThrowsErrorOnUnclosedBrace()
    {
        \$this->expectException('Symfony\\Component\\ExpressionLanguage\\SyntaxError');
        \$this->expectExceptionMessage('Unclosed \"(\" around position 7 for expression `service(unclosed.expression.dummyMethod()`.');
        \$expression = 'service(unclosed.expression.dummyMethod()';
        \$this->lexer->tokenize(\$expression);
    }

    public function getTokenizeData()
    {
        return [
            [
                [new Token('name', 'a', 3)],
                '  a  ',
            ],
            [
                [new Token('name', 'a', 1)],
                'a',
            ],
            [
                [new Token('string', 'foo', 1)],
                '\"foo\"',
            ],
            [
                [new Token('number', '3', 1)],
                '3',
            ],
            [
                [new Token('operator', '+', 1)],
                '+',
            ],
            [
                [new Token('punctuation', '.', 1)],
                '.',
            ],
            [
                [
                    new Token('punctuation', '(', 1),
                    new Token('number', '3', 2),
                    new Token('operator', '+', 4),
                    new Token('number', '5', 6),
                    new Token('punctuation', ')', 7),
                    new Token('operator', '~', 9),
                    new Token('name', 'foo', 11),
                    new Token('punctuation', '(', 14),
                    new Token('string', 'bar', 15),
                    new Token('punctuation', ')', 20),
                    new Token('punctuation', '.', 21),
                    new Token('name', 'baz', 22),
                    new Token('punctuation', '[', 25),
                    new Token('number', '4', 26),
                    new Token('punctuation', ']', 27),
                ],
                '(3 + 5) ~ foo(\"bar\").baz[4]',
            ],
            [
                [new Token('operator', '..', 1)],
                '..',
            ],
            [
                [new Token('string', '#foo', 1)],
                \"'#foo'\",
            ],
            [
                [new Token('string', '#foo', 1)],
                '\"#foo\"',
            ],
        ];
    }
}
", "vendor/symfony/expression-language/Tests/LexerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/expression-language/Tests/LexerTest.php");
    }
}
