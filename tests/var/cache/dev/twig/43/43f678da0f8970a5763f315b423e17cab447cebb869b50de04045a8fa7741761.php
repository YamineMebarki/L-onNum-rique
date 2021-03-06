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

/* vendor/symfony/css-selector/Parser/Handler/StringHandler.php */
class __TwigTemplate_68718f5108f0d0ab141af02de54a866951822a1016259e79a6c73662d0abd3c3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/Parser/Handler/StringHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/Parser/Handler/StringHandler.php"));

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

namespace Symfony\\Component\\CssSelector\\Parser\\Handler;

use Symfony\\Component\\CssSelector\\Exception\\InternalErrorException;
use Symfony\\Component\\CssSelector\\Exception\\SyntaxErrorException;
use Symfony\\Component\\CssSelector\\Parser\\Reader;
use Symfony\\Component\\CssSelector\\Parser\\Token;
use Symfony\\Component\\CssSelector\\Parser\\Tokenizer\\TokenizerEscaping;
use Symfony\\Component\\CssSelector\\Parser\\Tokenizer\\TokenizerPatterns;
use Symfony\\Component\\CssSelector\\Parser\\TokenStream;

/**
 * CSS selector comment handler.
 *
 * This component is a port of the Python cssselect library,
 * which is copyright Ian Bicking, @see https://github.com/SimonSapin/cssselect.
 *
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
class StringHandler implements HandlerInterface
{
    private \$patterns;
    private \$escaping;

    public function __construct(TokenizerPatterns \$patterns, TokenizerEscaping \$escaping)
    {
        \$this->patterns = \$patterns;
        \$this->escaping = \$escaping;
    }

    /**
     * {@inheritdoc}
     */
    public function handle(Reader \$reader, TokenStream \$stream): bool
    {
        \$quote = \$reader->getSubstring(1);

        if (!\\in_array(\$quote, [\"'\", '\"'])) {
            return false;
        }

        \$reader->moveForward(1);
        \$match = \$reader->findPattern(\$this->patterns->getQuotedStringPattern(\$quote));

        if (!\$match) {
            throw new InternalErrorException(sprintf('Should have found at least an empty match at %s.', \$reader->getPosition()));
        }

        // check unclosed strings
        if (\\strlen(\$match[0]) === \$reader->getRemainingLength()) {
            throw SyntaxErrorException::unclosedString(\$reader->getPosition() - 1);
        }

        // check quotes pairs validity
        if (\$quote !== \$reader->getSubstring(1, \\strlen(\$match[0]))) {
            throw SyntaxErrorException::unclosedString(\$reader->getPosition() - 1);
        }

        \$string = \$this->escaping->escapeUnicodeAndNewLine(\$match[0]);
        \$stream->push(new Token(Token::TYPE_STRING, \$string, \$reader->getPosition()));
        \$reader->moveForward(\\strlen(\$match[0]) + 1);

        return true;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/css-selector/Parser/Handler/StringHandler.php";
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

namespace Symfony\\Component\\CssSelector\\Parser\\Handler;

use Symfony\\Component\\CssSelector\\Exception\\InternalErrorException;
use Symfony\\Component\\CssSelector\\Exception\\SyntaxErrorException;
use Symfony\\Component\\CssSelector\\Parser\\Reader;
use Symfony\\Component\\CssSelector\\Parser\\Token;
use Symfony\\Component\\CssSelector\\Parser\\Tokenizer\\TokenizerEscaping;
use Symfony\\Component\\CssSelector\\Parser\\Tokenizer\\TokenizerPatterns;
use Symfony\\Component\\CssSelector\\Parser\\TokenStream;

/**
 * CSS selector comment handler.
 *
 * This component is a port of the Python cssselect library,
 * which is copyright Ian Bicking, @see https://github.com/SimonSapin/cssselect.
 *
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
class StringHandler implements HandlerInterface
{
    private \$patterns;
    private \$escaping;

    public function __construct(TokenizerPatterns \$patterns, TokenizerEscaping \$escaping)
    {
        \$this->patterns = \$patterns;
        \$this->escaping = \$escaping;
    }

    /**
     * {@inheritdoc}
     */
    public function handle(Reader \$reader, TokenStream \$stream): bool
    {
        \$quote = \$reader->getSubstring(1);

        if (!\\in_array(\$quote, [\"'\", '\"'])) {
            return false;
        }

        \$reader->moveForward(1);
        \$match = \$reader->findPattern(\$this->patterns->getQuotedStringPattern(\$quote));

        if (!\$match) {
            throw new InternalErrorException(sprintf('Should have found at least an empty match at %s.', \$reader->getPosition()));
        }

        // check unclosed strings
        if (\\strlen(\$match[0]) === \$reader->getRemainingLength()) {
            throw SyntaxErrorException::unclosedString(\$reader->getPosition() - 1);
        }

        // check quotes pairs validity
        if (\$quote !== \$reader->getSubstring(1, \\strlen(\$match[0]))) {
            throw SyntaxErrorException::unclosedString(\$reader->getPosition() - 1);
        }

        \$string = \$this->escaping->escapeUnicodeAndNewLine(\$match[0]);
        \$stream->push(new Token(Token::TYPE_STRING, \$string, \$reader->getPosition()));
        \$reader->moveForward(\\strlen(\$match[0]) + 1);

        return true;
    }
}
", "vendor/symfony/css-selector/Parser/Handler/StringHandler.php", "/var/www/public/DevLaon/templates/vendor/symfony/css-selector/Parser/Handler/StringHandler.php");
    }
}
