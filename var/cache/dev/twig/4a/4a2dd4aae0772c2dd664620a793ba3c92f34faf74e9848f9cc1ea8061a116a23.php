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

/* vendor/symfony/css-selector/Parser/Parser.php */
class __TwigTemplate_dab63048adf2e19327809e8df3751bc466c0f0f4c5d6d9851d88713bebed5435 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/Parser/Parser.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/Parser/Parser.php"));

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

namespace Symfony\\Component\\CssSelector\\Parser;

use Symfony\\Component\\CssSelector\\Exception\\SyntaxErrorException;
use Symfony\\Component\\CssSelector\\Node;
use Symfony\\Component\\CssSelector\\Parser\\Tokenizer\\Tokenizer;

/**
 * CSS selector parser.
 *
 * This component is a port of the Python cssselect library,
 * which is copyright Ian Bicking, @see https://github.com/SimonSapin/cssselect.
 *
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
class Parser implements ParserInterface
{
    private \$tokenizer;

    public function __construct(Tokenizer \$tokenizer = null)
    {
        \$this->tokenizer = \$tokenizer ?: new Tokenizer();
    }

    /**
     * {@inheritdoc}
     */
    public function parse(string \$source): array
    {
        \$reader = new Reader(\$source);
        \$stream = \$this->tokenizer->tokenize(\$reader);

        return \$this->parseSelectorList(\$stream);
    }

    /**
     * Parses the arguments for \":nth-child()\" and friends.
     *
     * @param Token[] \$tokens
     *
     * @throws SyntaxErrorException
     */
    public static function parseSeries(array \$tokens): array
    {
        foreach (\$tokens as \$token) {
            if (\$token->isString()) {
                throw SyntaxErrorException::stringAsFunctionArgument();
            }
        }

        \$joined = trim(implode('', array_map(function (Token \$token) {
            return \$token->getValue();
        }, \$tokens)));

        \$int = function (\$string) {
            if (!is_numeric(\$string)) {
                throw SyntaxErrorException::stringAsFunctionArgument();
            }

            return (int) \$string;
        };

        switch (true) {
            case 'odd' === \$joined:
                return [2, 1];
            case 'even' === \$joined:
                return [2, 0];
            case 'n' === \$joined:
                return [1, 0];
            case false === strpos(\$joined, 'n'):
                return [0, \$int(\$joined)];
        }

        \$split = explode('n', \$joined);
        \$first = isset(\$split[0]) ? \$split[0] : null;

        return [
            \$first ? ('-' === \$first || '+' === \$first ? \$int(\$first.'1') : \$int(\$first)) : 1,
            isset(\$split[1]) && \$split[1] ? \$int(\$split[1]) : 0,
        ];
    }

    private function parseSelectorList(TokenStream \$stream): array
    {
        \$stream->skipWhitespace();
        \$selectors = [];

        while (true) {
            \$selectors[] = \$this->parserSelectorNode(\$stream);

            if (\$stream->getPeek()->isDelimiter([','])) {
                \$stream->getNext();
                \$stream->skipWhitespace();
            } else {
                break;
            }
        }

        return \$selectors;
    }

    private function parserSelectorNode(TokenStream \$stream): Node\\SelectorNode
    {
        list(\$result, \$pseudoElement) = \$this->parseSimpleSelector(\$stream);

        while (true) {
            \$stream->skipWhitespace();
            \$peek = \$stream->getPeek();

            if (\$peek->isFileEnd() || \$peek->isDelimiter([','])) {
                break;
            }

            if (null !== \$pseudoElement) {
                throw SyntaxErrorException::pseudoElementFound(\$pseudoElement, 'not at the end of a selector');
            }

            if (\$peek->isDelimiter(['+', '>', '~'])) {
                \$combinator = \$stream->getNext()->getValue();
                \$stream->skipWhitespace();
            } else {
                \$combinator = ' ';
            }

            list(\$nextSelector, \$pseudoElement) = \$this->parseSimpleSelector(\$stream);
            \$result = new Node\\CombinedSelectorNode(\$result, \$combinator, \$nextSelector);
        }

        return new Node\\SelectorNode(\$result, \$pseudoElement);
    }

    /**
     * Parses next simple node (hash, class, pseudo, negation).
     *
     * @throws SyntaxErrorException
     */
    private function parseSimpleSelector(TokenStream \$stream, bool \$insideNegation = false): array
    {
        \$stream->skipWhitespace();

        \$selectorStart = \\count(\$stream->getUsed());
        \$result = \$this->parseElementNode(\$stream);
        \$pseudoElement = null;

        while (true) {
            \$peek = \$stream->getPeek();
            if (\$peek->isWhitespace()
                || \$peek->isFileEnd()
                || \$peek->isDelimiter([',', '+', '>', '~'])
                || (\$insideNegation && \$peek->isDelimiter([')']))
            ) {
                break;
            }

            if (null !== \$pseudoElement) {
                throw SyntaxErrorException::pseudoElementFound(\$pseudoElement, 'not at the end of a selector');
            }

            if (\$peek->isHash()) {
                \$result = new Node\\HashNode(\$result, \$stream->getNext()->getValue());
            } elseif (\$peek->isDelimiter(['.'])) {
                \$stream->getNext();
                \$result = new Node\\ClassNode(\$result, \$stream->getNextIdentifier());
            } elseif (\$peek->isDelimiter(['['])) {
                \$stream->getNext();
                \$result = \$this->parseAttributeNode(\$result, \$stream);
            } elseif (\$peek->isDelimiter([':'])) {
                \$stream->getNext();

                if (\$stream->getPeek()->isDelimiter([':'])) {
                    \$stream->getNext();
                    \$pseudoElement = \$stream->getNextIdentifier();

                    continue;
                }

                \$identifier = \$stream->getNextIdentifier();
                if (\\in_array(strtolower(\$identifier), ['first-line', 'first-letter', 'before', 'after'])) {
                    // Special case: CSS 2.1 pseudo-elements can have a single ':'.
                    // Any new pseudo-element must have two.
                    \$pseudoElement = \$identifier;

                    continue;
                }

                if (!\$stream->getPeek()->isDelimiter(['('])) {
                    \$result = new Node\\PseudoNode(\$result, \$identifier);

                    continue;
                }

                \$stream->getNext();
                \$stream->skipWhitespace();

                if ('not' === strtolower(\$identifier)) {
                    if (\$insideNegation) {
                        throw SyntaxErrorException::nestedNot();
                    }

                    list(\$argument, \$argumentPseudoElement) = \$this->parseSimpleSelector(\$stream, true);
                    \$next = \$stream->getNext();

                    if (null !== \$argumentPseudoElement) {
                        throw SyntaxErrorException::pseudoElementFound(\$argumentPseudoElement, 'inside ::not()');
                    }

                    if (!\$next->isDelimiter([')'])) {
                        throw SyntaxErrorException::unexpectedToken('\")\"', \$next);
                    }

                    \$result = new Node\\NegationNode(\$result, \$argument);
                } else {
                    \$arguments = [];
                    \$next = null;

                    while (true) {
                        \$stream->skipWhitespace();
                        \$next = \$stream->getNext();

                        if (\$next->isIdentifier()
                            || \$next->isString()
                            || \$next->isNumber()
                            || \$next->isDelimiter(['+', '-'])
                        ) {
                            \$arguments[] = \$next;
                        } elseif (\$next->isDelimiter([')'])) {
                            break;
                        } else {
                            throw SyntaxErrorException::unexpectedToken('an argument', \$next);
                        }
                    }

                    if (empty(\$arguments)) {
                        throw SyntaxErrorException::unexpectedToken('at least one argument', \$next);
                    }

                    \$result = new Node\\FunctionNode(\$result, \$identifier, \$arguments);
                }
            } else {
                throw SyntaxErrorException::unexpectedToken('selector', \$peek);
            }
        }

        if (\\count(\$stream->getUsed()) === \$selectorStart) {
            throw SyntaxErrorException::unexpectedToken('selector', \$stream->getPeek());
        }

        return [\$result, \$pseudoElement];
    }

    private function parseElementNode(TokenStream \$stream): Node\\ElementNode
    {
        \$peek = \$stream->getPeek();

        if (\$peek->isIdentifier() || \$peek->isDelimiter(['*'])) {
            if (\$peek->isIdentifier()) {
                \$namespace = \$stream->getNext()->getValue();
            } else {
                \$stream->getNext();
                \$namespace = null;
            }

            if (\$stream->getPeek()->isDelimiter(['|'])) {
                \$stream->getNext();
                \$element = \$stream->getNextIdentifierOrStar();
            } else {
                \$element = \$namespace;
                \$namespace = null;
            }
        } else {
            \$element = \$namespace = null;
        }

        return new Node\\ElementNode(\$namespace, \$element);
    }

    private function parseAttributeNode(Node\\NodeInterface \$selector, TokenStream \$stream): Node\\AttributeNode
    {
        \$stream->skipWhitespace();
        \$attribute = \$stream->getNextIdentifierOrStar();

        if (null === \$attribute && !\$stream->getPeek()->isDelimiter(['|'])) {
            throw SyntaxErrorException::unexpectedToken('\"|\"', \$stream->getPeek());
        }

        if (\$stream->getPeek()->isDelimiter(['|'])) {
            \$stream->getNext();

            if (\$stream->getPeek()->isDelimiter(['='])) {
                \$namespace = null;
                \$stream->getNext();
                \$operator = '|=';
            } else {
                \$namespace = \$attribute;
                \$attribute = \$stream->getNextIdentifier();
                \$operator = null;
            }
        } else {
            \$namespace = \$operator = null;
        }

        if (null === \$operator) {
            \$stream->skipWhitespace();
            \$next = \$stream->getNext();

            if (\$next->isDelimiter([']'])) {
                return new Node\\AttributeNode(\$selector, \$namespace, \$attribute, 'exists', null);
            } elseif (\$next->isDelimiter(['='])) {
                \$operator = '=';
            } elseif (\$next->isDelimiter(['^', '\$', '*', '~', '|', '!'])
                && \$stream->getPeek()->isDelimiter(['='])
            ) {
                \$operator = \$next->getValue().'=';
                \$stream->getNext();
            } else {
                throw SyntaxErrorException::unexpectedToken('operator', \$next);
            }
        }

        \$stream->skipWhitespace();
        \$value = \$stream->getNext();

        if (\$value->isNumber()) {
            // if the value is a number, it's casted into a string
            \$value = new Token(Token::TYPE_STRING, (string) \$value->getValue(), \$value->getPosition());
        }

        if (!(\$value->isIdentifier() || \$value->isString())) {
            throw SyntaxErrorException::unexpectedToken('string or identifier', \$value);
        }

        \$stream->skipWhitespace();
        \$next = \$stream->getNext();

        if (!\$next->isDelimiter([']'])) {
            throw SyntaxErrorException::unexpectedToken('\"]\"', \$next);
        }

        return new Node\\AttributeNode(\$selector, \$namespace, \$attribute, \$operator, \$value->getValue());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/css-selector/Parser/Parser.php";
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

namespace Symfony\\Component\\CssSelector\\Parser;

use Symfony\\Component\\CssSelector\\Exception\\SyntaxErrorException;
use Symfony\\Component\\CssSelector\\Node;
use Symfony\\Component\\CssSelector\\Parser\\Tokenizer\\Tokenizer;

/**
 * CSS selector parser.
 *
 * This component is a port of the Python cssselect library,
 * which is copyright Ian Bicking, @see https://github.com/SimonSapin/cssselect.
 *
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
class Parser implements ParserInterface
{
    private \$tokenizer;

    public function __construct(Tokenizer \$tokenizer = null)
    {
        \$this->tokenizer = \$tokenizer ?: new Tokenizer();
    }

    /**
     * {@inheritdoc}
     */
    public function parse(string \$source): array
    {
        \$reader = new Reader(\$source);
        \$stream = \$this->tokenizer->tokenize(\$reader);

        return \$this->parseSelectorList(\$stream);
    }

    /**
     * Parses the arguments for \":nth-child()\" and friends.
     *
     * @param Token[] \$tokens
     *
     * @throws SyntaxErrorException
     */
    public static function parseSeries(array \$tokens): array
    {
        foreach (\$tokens as \$token) {
            if (\$token->isString()) {
                throw SyntaxErrorException::stringAsFunctionArgument();
            }
        }

        \$joined = trim(implode('', array_map(function (Token \$token) {
            return \$token->getValue();
        }, \$tokens)));

        \$int = function (\$string) {
            if (!is_numeric(\$string)) {
                throw SyntaxErrorException::stringAsFunctionArgument();
            }

            return (int) \$string;
        };

        switch (true) {
            case 'odd' === \$joined:
                return [2, 1];
            case 'even' === \$joined:
                return [2, 0];
            case 'n' === \$joined:
                return [1, 0];
            case false === strpos(\$joined, 'n'):
                return [0, \$int(\$joined)];
        }

        \$split = explode('n', \$joined);
        \$first = isset(\$split[0]) ? \$split[0] : null;

        return [
            \$first ? ('-' === \$first || '+' === \$first ? \$int(\$first.'1') : \$int(\$first)) : 1,
            isset(\$split[1]) && \$split[1] ? \$int(\$split[1]) : 0,
        ];
    }

    private function parseSelectorList(TokenStream \$stream): array
    {
        \$stream->skipWhitespace();
        \$selectors = [];

        while (true) {
            \$selectors[] = \$this->parserSelectorNode(\$stream);

            if (\$stream->getPeek()->isDelimiter([','])) {
                \$stream->getNext();
                \$stream->skipWhitespace();
            } else {
                break;
            }
        }

        return \$selectors;
    }

    private function parserSelectorNode(TokenStream \$stream): Node\\SelectorNode
    {
        list(\$result, \$pseudoElement) = \$this->parseSimpleSelector(\$stream);

        while (true) {
            \$stream->skipWhitespace();
            \$peek = \$stream->getPeek();

            if (\$peek->isFileEnd() || \$peek->isDelimiter([','])) {
                break;
            }

            if (null !== \$pseudoElement) {
                throw SyntaxErrorException::pseudoElementFound(\$pseudoElement, 'not at the end of a selector');
            }

            if (\$peek->isDelimiter(['+', '>', '~'])) {
                \$combinator = \$stream->getNext()->getValue();
                \$stream->skipWhitespace();
            } else {
                \$combinator = ' ';
            }

            list(\$nextSelector, \$pseudoElement) = \$this->parseSimpleSelector(\$stream);
            \$result = new Node\\CombinedSelectorNode(\$result, \$combinator, \$nextSelector);
        }

        return new Node\\SelectorNode(\$result, \$pseudoElement);
    }

    /**
     * Parses next simple node (hash, class, pseudo, negation).
     *
     * @throws SyntaxErrorException
     */
    private function parseSimpleSelector(TokenStream \$stream, bool \$insideNegation = false): array
    {
        \$stream->skipWhitespace();

        \$selectorStart = \\count(\$stream->getUsed());
        \$result = \$this->parseElementNode(\$stream);
        \$pseudoElement = null;

        while (true) {
            \$peek = \$stream->getPeek();
            if (\$peek->isWhitespace()
                || \$peek->isFileEnd()
                || \$peek->isDelimiter([',', '+', '>', '~'])
                || (\$insideNegation && \$peek->isDelimiter([')']))
            ) {
                break;
            }

            if (null !== \$pseudoElement) {
                throw SyntaxErrorException::pseudoElementFound(\$pseudoElement, 'not at the end of a selector');
            }

            if (\$peek->isHash()) {
                \$result = new Node\\HashNode(\$result, \$stream->getNext()->getValue());
            } elseif (\$peek->isDelimiter(['.'])) {
                \$stream->getNext();
                \$result = new Node\\ClassNode(\$result, \$stream->getNextIdentifier());
            } elseif (\$peek->isDelimiter(['['])) {
                \$stream->getNext();
                \$result = \$this->parseAttributeNode(\$result, \$stream);
            } elseif (\$peek->isDelimiter([':'])) {
                \$stream->getNext();

                if (\$stream->getPeek()->isDelimiter([':'])) {
                    \$stream->getNext();
                    \$pseudoElement = \$stream->getNextIdentifier();

                    continue;
                }

                \$identifier = \$stream->getNextIdentifier();
                if (\\in_array(strtolower(\$identifier), ['first-line', 'first-letter', 'before', 'after'])) {
                    // Special case: CSS 2.1 pseudo-elements can have a single ':'.
                    // Any new pseudo-element must have two.
                    \$pseudoElement = \$identifier;

                    continue;
                }

                if (!\$stream->getPeek()->isDelimiter(['('])) {
                    \$result = new Node\\PseudoNode(\$result, \$identifier);

                    continue;
                }

                \$stream->getNext();
                \$stream->skipWhitespace();

                if ('not' === strtolower(\$identifier)) {
                    if (\$insideNegation) {
                        throw SyntaxErrorException::nestedNot();
                    }

                    list(\$argument, \$argumentPseudoElement) = \$this->parseSimpleSelector(\$stream, true);
                    \$next = \$stream->getNext();

                    if (null !== \$argumentPseudoElement) {
                        throw SyntaxErrorException::pseudoElementFound(\$argumentPseudoElement, 'inside ::not()');
                    }

                    if (!\$next->isDelimiter([')'])) {
                        throw SyntaxErrorException::unexpectedToken('\")\"', \$next);
                    }

                    \$result = new Node\\NegationNode(\$result, \$argument);
                } else {
                    \$arguments = [];
                    \$next = null;

                    while (true) {
                        \$stream->skipWhitespace();
                        \$next = \$stream->getNext();

                        if (\$next->isIdentifier()
                            || \$next->isString()
                            || \$next->isNumber()
                            || \$next->isDelimiter(['+', '-'])
                        ) {
                            \$arguments[] = \$next;
                        } elseif (\$next->isDelimiter([')'])) {
                            break;
                        } else {
                            throw SyntaxErrorException::unexpectedToken('an argument', \$next);
                        }
                    }

                    if (empty(\$arguments)) {
                        throw SyntaxErrorException::unexpectedToken('at least one argument', \$next);
                    }

                    \$result = new Node\\FunctionNode(\$result, \$identifier, \$arguments);
                }
            } else {
                throw SyntaxErrorException::unexpectedToken('selector', \$peek);
            }
        }

        if (\\count(\$stream->getUsed()) === \$selectorStart) {
            throw SyntaxErrorException::unexpectedToken('selector', \$stream->getPeek());
        }

        return [\$result, \$pseudoElement];
    }

    private function parseElementNode(TokenStream \$stream): Node\\ElementNode
    {
        \$peek = \$stream->getPeek();

        if (\$peek->isIdentifier() || \$peek->isDelimiter(['*'])) {
            if (\$peek->isIdentifier()) {
                \$namespace = \$stream->getNext()->getValue();
            } else {
                \$stream->getNext();
                \$namespace = null;
            }

            if (\$stream->getPeek()->isDelimiter(['|'])) {
                \$stream->getNext();
                \$element = \$stream->getNextIdentifierOrStar();
            } else {
                \$element = \$namespace;
                \$namespace = null;
            }
        } else {
            \$element = \$namespace = null;
        }

        return new Node\\ElementNode(\$namespace, \$element);
    }

    private function parseAttributeNode(Node\\NodeInterface \$selector, TokenStream \$stream): Node\\AttributeNode
    {
        \$stream->skipWhitespace();
        \$attribute = \$stream->getNextIdentifierOrStar();

        if (null === \$attribute && !\$stream->getPeek()->isDelimiter(['|'])) {
            throw SyntaxErrorException::unexpectedToken('\"|\"', \$stream->getPeek());
        }

        if (\$stream->getPeek()->isDelimiter(['|'])) {
            \$stream->getNext();

            if (\$stream->getPeek()->isDelimiter(['='])) {
                \$namespace = null;
                \$stream->getNext();
                \$operator = '|=';
            } else {
                \$namespace = \$attribute;
                \$attribute = \$stream->getNextIdentifier();
                \$operator = null;
            }
        } else {
            \$namespace = \$operator = null;
        }

        if (null === \$operator) {
            \$stream->skipWhitespace();
            \$next = \$stream->getNext();

            if (\$next->isDelimiter([']'])) {
                return new Node\\AttributeNode(\$selector, \$namespace, \$attribute, 'exists', null);
            } elseif (\$next->isDelimiter(['='])) {
                \$operator = '=';
            } elseif (\$next->isDelimiter(['^', '\$', '*', '~', '|', '!'])
                && \$stream->getPeek()->isDelimiter(['='])
            ) {
                \$operator = \$next->getValue().'=';
                \$stream->getNext();
            } else {
                throw SyntaxErrorException::unexpectedToken('operator', \$next);
            }
        }

        \$stream->skipWhitespace();
        \$value = \$stream->getNext();

        if (\$value->isNumber()) {
            // if the value is a number, it's casted into a string
            \$value = new Token(Token::TYPE_STRING, (string) \$value->getValue(), \$value->getPosition());
        }

        if (!(\$value->isIdentifier() || \$value->isString())) {
            throw SyntaxErrorException::unexpectedToken('string or identifier', \$value);
        }

        \$stream->skipWhitespace();
        \$next = \$stream->getNext();

        if (!\$next->isDelimiter([']'])) {
            throw SyntaxErrorException::unexpectedToken('\"]\"', \$next);
        }

        return new Node\\AttributeNode(\$selector, \$namespace, \$attribute, \$operator, \$value->getValue());
    }
}
", "vendor/symfony/css-selector/Parser/Parser.php", "/var/www/public/DevLaon/templates/vendor/symfony/css-selector/Parser/Parser.php");
    }
}
