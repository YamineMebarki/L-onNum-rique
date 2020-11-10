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

/* vendor/symfony/expression-language/Tests/ParserTest.php */
class __TwigTemplate_58f3cf56a93165b8f9f960f1bb42d2ccea927c7461d2ccd323b3d42e0a25e36f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/expression-language/Tests/ParserTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/expression-language/Tests/ParserTest.php"));

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
use Symfony\\Component\\ExpressionLanguage\\Node;
use Symfony\\Component\\ExpressionLanguage\\Parser;

class ParserTest extends TestCase
{
    public function testParseWithInvalidName()
    {
        \$this->expectException('Symfony\\Component\\ExpressionLanguage\\SyntaxError');
        \$this->expectExceptionMessage('Variable \"foo\" is not valid around position 1 for expression `foo`.');
        \$lexer = new Lexer();
        \$parser = new Parser([]);
        \$parser->parse(\$lexer->tokenize('foo'));
    }

    public function testParseWithZeroInNames()
    {
        \$this->expectException('Symfony\\Component\\ExpressionLanguage\\SyntaxError');
        \$this->expectExceptionMessage('Variable \"foo\" is not valid around position 1 for expression `foo`.');
        \$lexer = new Lexer();
        \$parser = new Parser([]);
        \$parser->parse(\$lexer->tokenize('foo'), [0]);
    }

    /**
     * @dataProvider getParseData
     */
    public function testParse(\$node, \$expression, \$names = [])
    {
        \$lexer = new Lexer();
        \$parser = new Parser([]);
        \$this->assertEquals(\$node, \$parser->parse(\$lexer->tokenize(\$expression), \$names));
    }

    public function getParseData()
    {
        \$arguments = new Node\\ArgumentsNode();
        \$arguments->addElement(new Node\\ConstantNode('arg1'));
        \$arguments->addElement(new Node\\ConstantNode(2));
        \$arguments->addElement(new Node\\ConstantNode(true));

        return [
            [
                new Node\\NameNode('a'),
                'a',
                ['a'],
            ],
            [
                new Node\\ConstantNode('a'),
                '\"a\"',
            ],
            [
                new Node\\ConstantNode(3),
                '3',
            ],
            [
                new Node\\ConstantNode(false),
                'false',
            ],
            [
                new Node\\ConstantNode(true),
                'true',
            ],
            [
                new Node\\ConstantNode(null),
                'null',
            ],
            [
                new Node\\UnaryNode('-', new Node\\ConstantNode(3)),
                '-3',
            ],
            [
                new Node\\BinaryNode('-', new Node\\ConstantNode(3), new Node\\ConstantNode(3)),
                '3 - 3',
            ],
            [
                new Node\\BinaryNode('*',
                    new Node\\BinaryNode('-', new Node\\ConstantNode(3), new Node\\ConstantNode(3)),
                    new Node\\ConstantNode(2)
                ),
                '(3 - 3) * 2',
            ],
            [
                new Node\\GetAttrNode(new Node\\NameNode('foo'), new Node\\ConstantNode('bar', true), new Node\\ArgumentsNode(), Node\\GetAttrNode::PROPERTY_CALL),
                'foo.bar',
                ['foo'],
            ],
            [
                new Node\\GetAttrNode(new Node\\NameNode('foo'), new Node\\ConstantNode('bar', true), new Node\\ArgumentsNode(), Node\\GetAttrNode::METHOD_CALL),
                'foo.bar()',
                ['foo'],
            ],
            [
                new Node\\GetAttrNode(new Node\\NameNode('foo'), new Node\\ConstantNode('not', true), new Node\\ArgumentsNode(), Node\\GetAttrNode::METHOD_CALL),
                'foo.not()',
                ['foo'],
            ],
            [
                new Node\\GetAttrNode(
                    new Node\\NameNode('foo'),
                    new Node\\ConstantNode('bar', true),
                    \$arguments,
                    Node\\GetAttrNode::METHOD_CALL
                ),
                'foo.bar(\"arg1\", 2, true)',
                ['foo'],
            ],
            [
                new Node\\GetAttrNode(new Node\\NameNode('foo'), new Node\\ConstantNode(3), new Node\\ArgumentsNode(), Node\\GetAttrNode::ARRAY_CALL),
                'foo[3]',
                ['foo'],
            ],
            [
                new Node\\ConditionalNode(new Node\\ConstantNode(true), new Node\\ConstantNode(true), new Node\\ConstantNode(false)),
                'true ? true : false',
            ],
            [
                new Node\\BinaryNode('matches', new Node\\ConstantNode('foo'), new Node\\ConstantNode('/foo/')),
                '\"foo\" matches \"/foo/\"',
            ],

            // chained calls
            [
                \$this->createGetAttrNode(
                    \$this->createGetAttrNode(
                        \$this->createGetAttrNode(
                            \$this->createGetAttrNode(new Node\\NameNode('foo'), 'bar', Node\\GetAttrNode::METHOD_CALL),
                            'foo', Node\\GetAttrNode::METHOD_CALL),
                        'baz', Node\\GetAttrNode::PROPERTY_CALL),
                    '3', Node\\GetAttrNode::ARRAY_CALL),
                'foo.bar().foo().baz[3]',
                ['foo'],
            ],

            [
                new Node\\NameNode('foo'),
                'bar',
                ['foo' => 'bar'],
            ],
        ];
    }

    private function createGetAttrNode(\$node, \$item, \$type)
    {
        return new Node\\GetAttrNode(\$node, new Node\\ConstantNode(\$item, Node\\GetAttrNode::ARRAY_CALL !== \$type), new Node\\ArgumentsNode(), \$type);
    }

    /**
     * @dataProvider getInvalidPostfixData
     */
    public function testParseWithInvalidPostfixData(\$expr, \$names = [])
    {
        \$this->expectException('Symfony\\Component\\ExpressionLanguage\\SyntaxError');
        \$lexer = new Lexer();
        \$parser = new Parser([]);
        \$parser->parse(\$lexer->tokenize(\$expr), \$names);
    }

    public function getInvalidPostfixData()
    {
        return [
            [
                'foo.\"#\"',
                ['foo'],
            ],
            [
                'foo.\"bar\"',
                ['foo'],
            ],
            [
                'foo.**',
                ['foo'],
            ],
            [
                'foo.123',
                ['foo'],
            ],
        ];
    }

    public function testNameProposal()
    {
        \$this->expectException('Symfony\\Component\\ExpressionLanguage\\SyntaxError');
        \$this->expectExceptionMessage('Did you mean \"baz\"?');
        \$lexer = new Lexer();
        \$parser = new Parser([]);

        \$parser->parse(\$lexer->tokenize('foo > bar'), ['foo', 'baz']);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/expression-language/Tests/ParserTest.php";
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
use Symfony\\Component\\ExpressionLanguage\\Node;
use Symfony\\Component\\ExpressionLanguage\\Parser;

class ParserTest extends TestCase
{
    public function testParseWithInvalidName()
    {
        \$this->expectException('Symfony\\Component\\ExpressionLanguage\\SyntaxError');
        \$this->expectExceptionMessage('Variable \"foo\" is not valid around position 1 for expression `foo`.');
        \$lexer = new Lexer();
        \$parser = new Parser([]);
        \$parser->parse(\$lexer->tokenize('foo'));
    }

    public function testParseWithZeroInNames()
    {
        \$this->expectException('Symfony\\Component\\ExpressionLanguage\\SyntaxError');
        \$this->expectExceptionMessage('Variable \"foo\" is not valid around position 1 for expression `foo`.');
        \$lexer = new Lexer();
        \$parser = new Parser([]);
        \$parser->parse(\$lexer->tokenize('foo'), [0]);
    }

    /**
     * @dataProvider getParseData
     */
    public function testParse(\$node, \$expression, \$names = [])
    {
        \$lexer = new Lexer();
        \$parser = new Parser([]);
        \$this->assertEquals(\$node, \$parser->parse(\$lexer->tokenize(\$expression), \$names));
    }

    public function getParseData()
    {
        \$arguments = new Node\\ArgumentsNode();
        \$arguments->addElement(new Node\\ConstantNode('arg1'));
        \$arguments->addElement(new Node\\ConstantNode(2));
        \$arguments->addElement(new Node\\ConstantNode(true));

        return [
            [
                new Node\\NameNode('a'),
                'a',
                ['a'],
            ],
            [
                new Node\\ConstantNode('a'),
                '\"a\"',
            ],
            [
                new Node\\ConstantNode(3),
                '3',
            ],
            [
                new Node\\ConstantNode(false),
                'false',
            ],
            [
                new Node\\ConstantNode(true),
                'true',
            ],
            [
                new Node\\ConstantNode(null),
                'null',
            ],
            [
                new Node\\UnaryNode('-', new Node\\ConstantNode(3)),
                '-3',
            ],
            [
                new Node\\BinaryNode('-', new Node\\ConstantNode(3), new Node\\ConstantNode(3)),
                '3 - 3',
            ],
            [
                new Node\\BinaryNode('*',
                    new Node\\BinaryNode('-', new Node\\ConstantNode(3), new Node\\ConstantNode(3)),
                    new Node\\ConstantNode(2)
                ),
                '(3 - 3) * 2',
            ],
            [
                new Node\\GetAttrNode(new Node\\NameNode('foo'), new Node\\ConstantNode('bar', true), new Node\\ArgumentsNode(), Node\\GetAttrNode::PROPERTY_CALL),
                'foo.bar',
                ['foo'],
            ],
            [
                new Node\\GetAttrNode(new Node\\NameNode('foo'), new Node\\ConstantNode('bar', true), new Node\\ArgumentsNode(), Node\\GetAttrNode::METHOD_CALL),
                'foo.bar()',
                ['foo'],
            ],
            [
                new Node\\GetAttrNode(new Node\\NameNode('foo'), new Node\\ConstantNode('not', true), new Node\\ArgumentsNode(), Node\\GetAttrNode::METHOD_CALL),
                'foo.not()',
                ['foo'],
            ],
            [
                new Node\\GetAttrNode(
                    new Node\\NameNode('foo'),
                    new Node\\ConstantNode('bar', true),
                    \$arguments,
                    Node\\GetAttrNode::METHOD_CALL
                ),
                'foo.bar(\"arg1\", 2, true)',
                ['foo'],
            ],
            [
                new Node\\GetAttrNode(new Node\\NameNode('foo'), new Node\\ConstantNode(3), new Node\\ArgumentsNode(), Node\\GetAttrNode::ARRAY_CALL),
                'foo[3]',
                ['foo'],
            ],
            [
                new Node\\ConditionalNode(new Node\\ConstantNode(true), new Node\\ConstantNode(true), new Node\\ConstantNode(false)),
                'true ? true : false',
            ],
            [
                new Node\\BinaryNode('matches', new Node\\ConstantNode('foo'), new Node\\ConstantNode('/foo/')),
                '\"foo\" matches \"/foo/\"',
            ],

            // chained calls
            [
                \$this->createGetAttrNode(
                    \$this->createGetAttrNode(
                        \$this->createGetAttrNode(
                            \$this->createGetAttrNode(new Node\\NameNode('foo'), 'bar', Node\\GetAttrNode::METHOD_CALL),
                            'foo', Node\\GetAttrNode::METHOD_CALL),
                        'baz', Node\\GetAttrNode::PROPERTY_CALL),
                    '3', Node\\GetAttrNode::ARRAY_CALL),
                'foo.bar().foo().baz[3]',
                ['foo'],
            ],

            [
                new Node\\NameNode('foo'),
                'bar',
                ['foo' => 'bar'],
            ],
        ];
    }

    private function createGetAttrNode(\$node, \$item, \$type)
    {
        return new Node\\GetAttrNode(\$node, new Node\\ConstantNode(\$item, Node\\GetAttrNode::ARRAY_CALL !== \$type), new Node\\ArgumentsNode(), \$type);
    }

    /**
     * @dataProvider getInvalidPostfixData
     */
    public function testParseWithInvalidPostfixData(\$expr, \$names = [])
    {
        \$this->expectException('Symfony\\Component\\ExpressionLanguage\\SyntaxError');
        \$lexer = new Lexer();
        \$parser = new Parser([]);
        \$parser->parse(\$lexer->tokenize(\$expr), \$names);
    }

    public function getInvalidPostfixData()
    {
        return [
            [
                'foo.\"#\"',
                ['foo'],
            ],
            [
                'foo.\"bar\"',
                ['foo'],
            ],
            [
                'foo.**',
                ['foo'],
            ],
            [
                'foo.123',
                ['foo'],
            ],
        ];
    }

    public function testNameProposal()
    {
        \$this->expectException('Symfony\\Component\\ExpressionLanguage\\SyntaxError');
        \$this->expectExceptionMessage('Did you mean \"baz\"?');
        \$lexer = new Lexer();
        \$parser = new Parser([]);

        \$parser->parse(\$lexer->tokenize('foo > bar'), ['foo', 'baz']);
    }
}
", "vendor/symfony/expression-language/Tests/ParserTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/expression-language/Tests/ParserTest.php");
    }
}
