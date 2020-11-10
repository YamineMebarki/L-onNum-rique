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

/* vendor/symfony/css-selector/Parser/TokenStream.php */
class __TwigTemplate_4f16b8210399912e16de448c0adb5f0b1c4b3aa1f5787ac5f8fb752036c0e276 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/Parser/TokenStream.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/Parser/TokenStream.php"));

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

use Symfony\\Component\\CssSelector\\Exception\\InternalErrorException;
use Symfony\\Component\\CssSelector\\Exception\\SyntaxErrorException;

/**
 * CSS selector token stream.
 *
 * This component is a port of the Python cssselect library,
 * which is copyright Ian Bicking, @see https://github.com/SimonSapin/cssselect.
 *
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
class TokenStream
{
    /**
     * @var Token[]
     */
    private \$tokens = [];

    /**
     * @var Token[]
     */
    private \$used = [];

    /**
     * @var int
     */
    private \$cursor = 0;

    /**
     * @var Token|null
     */
    private \$peeked;

    /**
     * @var bool
     */
    private \$peeking = false;

    /**
     * Pushes a token.
     *
     * @return \$this
     */
    public function push(Token \$token)
    {
        \$this->tokens[] = \$token;

        return \$this;
    }

    /**
     * Freezes stream.
     *
     * @return \$this
     */
    public function freeze()
    {
        return \$this;
    }

    /**
     * Returns next token.
     *
     * @return Token
     *
     * @throws InternalErrorException If there is no more token
     */
    public function getNext()
    {
        if (\$this->peeking) {
            \$this->peeking = false;
            \$this->used[] = \$this->peeked;

            return \$this->peeked;
        }

        if (!isset(\$this->tokens[\$this->cursor])) {
            throw new InternalErrorException('Unexpected token stream end.');
        }

        return \$this->tokens[\$this->cursor++];
    }

    /**
     * Returns peeked token.
     *
     * @return Token
     */
    public function getPeek()
    {
        if (!\$this->peeking) {
            \$this->peeked = \$this->getNext();
            \$this->peeking = true;
        }

        return \$this->peeked;
    }

    /**
     * Returns used tokens.
     *
     * @return Token[]
     */
    public function getUsed()
    {
        return \$this->used;
    }

    /**
     * Returns nex identifier token.
     *
     * @return string The identifier token value
     *
     * @throws SyntaxErrorException If next token is not an identifier
     */
    public function getNextIdentifier()
    {
        \$next = \$this->getNext();

        if (!\$next->isIdentifier()) {
            throw SyntaxErrorException::unexpectedToken('identifier', \$next);
        }

        return \$next->getValue();
    }

    /**
     * Returns nex identifier or star delimiter token.
     *
     * @return string|null The identifier token value or null if star found
     *
     * @throws SyntaxErrorException If next token is not an identifier or a star delimiter
     */
    public function getNextIdentifierOrStar()
    {
        \$next = \$this->getNext();

        if (\$next->isIdentifier()) {
            return \$next->getValue();
        }

        if (\$next->isDelimiter(['*'])) {
            return null;
        }

        throw SyntaxErrorException::unexpectedToken('identifier or \"*\"', \$next);
    }

    /**
     * Skips next whitespace if any.
     */
    public function skipWhitespace()
    {
        \$peek = \$this->getPeek();

        if (\$peek->isWhitespace()) {
            \$this->getNext();
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/css-selector/Parser/TokenStream.php";
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

use Symfony\\Component\\CssSelector\\Exception\\InternalErrorException;
use Symfony\\Component\\CssSelector\\Exception\\SyntaxErrorException;

/**
 * CSS selector token stream.
 *
 * This component is a port of the Python cssselect library,
 * which is copyright Ian Bicking, @see https://github.com/SimonSapin/cssselect.
 *
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
class TokenStream
{
    /**
     * @var Token[]
     */
    private \$tokens = [];

    /**
     * @var Token[]
     */
    private \$used = [];

    /**
     * @var int
     */
    private \$cursor = 0;

    /**
     * @var Token|null
     */
    private \$peeked;

    /**
     * @var bool
     */
    private \$peeking = false;

    /**
     * Pushes a token.
     *
     * @return \$this
     */
    public function push(Token \$token)
    {
        \$this->tokens[] = \$token;

        return \$this;
    }

    /**
     * Freezes stream.
     *
     * @return \$this
     */
    public function freeze()
    {
        return \$this;
    }

    /**
     * Returns next token.
     *
     * @return Token
     *
     * @throws InternalErrorException If there is no more token
     */
    public function getNext()
    {
        if (\$this->peeking) {
            \$this->peeking = false;
            \$this->used[] = \$this->peeked;

            return \$this->peeked;
        }

        if (!isset(\$this->tokens[\$this->cursor])) {
            throw new InternalErrorException('Unexpected token stream end.');
        }

        return \$this->tokens[\$this->cursor++];
    }

    /**
     * Returns peeked token.
     *
     * @return Token
     */
    public function getPeek()
    {
        if (!\$this->peeking) {
            \$this->peeked = \$this->getNext();
            \$this->peeking = true;
        }

        return \$this->peeked;
    }

    /**
     * Returns used tokens.
     *
     * @return Token[]
     */
    public function getUsed()
    {
        return \$this->used;
    }

    /**
     * Returns nex identifier token.
     *
     * @return string The identifier token value
     *
     * @throws SyntaxErrorException If next token is not an identifier
     */
    public function getNextIdentifier()
    {
        \$next = \$this->getNext();

        if (!\$next->isIdentifier()) {
            throw SyntaxErrorException::unexpectedToken('identifier', \$next);
        }

        return \$next->getValue();
    }

    /**
     * Returns nex identifier or star delimiter token.
     *
     * @return string|null The identifier token value or null if star found
     *
     * @throws SyntaxErrorException If next token is not an identifier or a star delimiter
     */
    public function getNextIdentifierOrStar()
    {
        \$next = \$this->getNext();

        if (\$next->isIdentifier()) {
            return \$next->getValue();
        }

        if (\$next->isDelimiter(['*'])) {
            return null;
        }

        throw SyntaxErrorException::unexpectedToken('identifier or \"*\"', \$next);
    }

    /**
     * Skips next whitespace if any.
     */
    public function skipWhitespace()
    {
        \$peek = \$this->getPeek();

        if (\$peek->isWhitespace()) {
            \$this->getNext();
        }
    }
}
", "vendor/symfony/css-selector/Parser/TokenStream.php", "/var/www/public/DevLaon/templates/vendor/symfony/css-selector/Parser/TokenStream.php");
    }
}
