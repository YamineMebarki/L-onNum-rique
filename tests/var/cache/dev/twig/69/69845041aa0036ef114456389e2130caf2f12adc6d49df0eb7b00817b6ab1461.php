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

/* vendor/egulias/email-validator/EmailValidator/Parser/LocalPart.php */
class __TwigTemplate_a147f1ad90ed9cc3979b7fa3cfe969f4a0e25a6a80113b43ae1a23d1adfb03e1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/egulias/email-validator/EmailValidator/Parser/LocalPart.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/egulias/email-validator/EmailValidator/Parser/LocalPart.php"));

        // line 1
        echo "<?php

namespace Egulias\\EmailValidator\\Parser;

use Egulias\\EmailValidator\\Exception\\DotAtEnd;
use Egulias\\EmailValidator\\Exception\\DotAtStart;
use Egulias\\EmailValidator\\EmailLexer;
use Egulias\\EmailValidator\\EmailValidator;
use Egulias\\EmailValidator\\Exception\\ExpectingAT;
use Egulias\\EmailValidator\\Exception\\ExpectingATEXT;
use Egulias\\EmailValidator\\Exception\\UnclosedQuotedString;
use Egulias\\EmailValidator\\Exception\\UnopenedComment;
use Egulias\\EmailValidator\\Warning\\CFWSWithFWS;
use Egulias\\EmailValidator\\Warning\\LocalTooLong;

class LocalPart extends Parser
{
    public function parse(\$localPart)
    {
        \$parseDQuote = true;
        \$closingQuote = false;
        \$openedParenthesis = 0;

        while (\$this->lexer->token['type'] !== EmailLexer::S_AT && null !== \$this->lexer->token['type']) {
            if (\$this->lexer->token['type'] === EmailLexer::S_DOT && null === \$this->lexer->getPrevious()['type']) {
                throw new DotAtStart();
            }

            \$closingQuote = \$this->checkDQUOTE(\$closingQuote);
            if (\$closingQuote && \$parseDQuote) {
                \$parseDQuote = \$this->parseDoubleQuote();
            }

            if (\$this->lexer->token['type'] === EmailLexer::S_OPENPARENTHESIS) {
                \$this->parseComments();
                \$openedParenthesis += \$this->getOpenedParenthesis();
            }
            if (\$this->lexer->token['type'] === EmailLexer::S_CLOSEPARENTHESIS) {
                if (\$openedParenthesis === 0) {
                    throw new UnopenedComment();
                } else {
                    \$openedParenthesis--;
                }
            }

            \$this->checkConsecutiveDots();

            if (\$this->lexer->token['type'] === EmailLexer::S_DOT &&
                \$this->lexer->isNextToken(EmailLexer::S_AT)
            ) {
                throw new DotAtEnd();
            }

            \$this->warnEscaping();
            \$this->isInvalidToken(\$this->lexer->token, \$closingQuote);

            if (\$this->isFWS()) {
                \$this->parseFWS();
            }

            \$this->lexer->moveNext();
        }

        \$prev = \$this->lexer->getPrevious();
        if (strlen(\$prev['value']) > LocalTooLong::LOCAL_PART_LENGTH) {
            \$this->warnings[LocalTooLong::CODE] = new LocalTooLong();
        }
    }

    protected function parseDoubleQuote()
    {
        \$parseAgain = true;
        \$special = array(
            EmailLexer::S_CR => true,
            EmailLexer::S_HTAB => true,
            EmailLexer::S_LF => true
        );

        \$invalid = array(
            EmailLexer::C_NUL => true,
            EmailLexer::S_HTAB => true,
            EmailLexer::S_CR => true,
            EmailLexer::S_LF => true
        );
        \$setSpecialsWarning = true;

        \$this->lexer->moveNext();

        while (\$this->lexer->token['type'] !== EmailLexer::S_DQUOTE && null !== \$this->lexer->token['type']) {
            \$parseAgain = false;
            if (isset(\$special[\$this->lexer->token['type']]) && \$setSpecialsWarning) {
                \$this->warnings[CFWSWithFWS::CODE] = new CFWSWithFWS();
                \$setSpecialsWarning = false;
            }
            if (\$this->lexer->token['type'] === EmailLexer::S_BACKSLASH && \$this->lexer->isNextToken(EmailLexer::S_DQUOTE)) {
                \$this->lexer->moveNext();
            }

            \$this->lexer->moveNext();

            if (!\$this->escaped() && isset(\$invalid[\$this->lexer->token['type']])) {
                throw new ExpectingATEXT();
            }
        }

        \$prev = \$this->lexer->getPrevious();

        if (\$prev['type'] === EmailLexer::S_BACKSLASH) {
            if (!\$this->checkDQUOTE(false)) {
                throw new UnclosedQuotedString();
            }
        }

        if (!\$this->lexer->isNextToken(EmailLexer::S_AT) && \$prev['type'] !== EmailLexer::S_BACKSLASH) {
            throw new ExpectingAT();
        }

        return \$parseAgain;
    }

    protected function isInvalidToken(\$token, \$closingQuote)
    {
        \$forbidden = array(
            EmailLexer::S_COMMA,
            EmailLexer::S_CLOSEBRACKET,
            EmailLexer::S_OPENBRACKET,
            EmailLexer::S_GREATERTHAN,
            EmailLexer::S_LOWERTHAN,
            EmailLexer::S_COLON,
            EmailLexer::S_SEMICOLON,
            EmailLexer::INVALID
        );

        if (in_array(\$token['type'], \$forbidden) && !\$closingQuote) {
            throw new ExpectingATEXT();
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/egulias/email-validator/EmailValidator/Parser/LocalPart.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Egulias\\EmailValidator\\Parser;

use Egulias\\EmailValidator\\Exception\\DotAtEnd;
use Egulias\\EmailValidator\\Exception\\DotAtStart;
use Egulias\\EmailValidator\\EmailLexer;
use Egulias\\EmailValidator\\EmailValidator;
use Egulias\\EmailValidator\\Exception\\ExpectingAT;
use Egulias\\EmailValidator\\Exception\\ExpectingATEXT;
use Egulias\\EmailValidator\\Exception\\UnclosedQuotedString;
use Egulias\\EmailValidator\\Exception\\UnopenedComment;
use Egulias\\EmailValidator\\Warning\\CFWSWithFWS;
use Egulias\\EmailValidator\\Warning\\LocalTooLong;

class LocalPart extends Parser
{
    public function parse(\$localPart)
    {
        \$parseDQuote = true;
        \$closingQuote = false;
        \$openedParenthesis = 0;

        while (\$this->lexer->token['type'] !== EmailLexer::S_AT && null !== \$this->lexer->token['type']) {
            if (\$this->lexer->token['type'] === EmailLexer::S_DOT && null === \$this->lexer->getPrevious()['type']) {
                throw new DotAtStart();
            }

            \$closingQuote = \$this->checkDQUOTE(\$closingQuote);
            if (\$closingQuote && \$parseDQuote) {
                \$parseDQuote = \$this->parseDoubleQuote();
            }

            if (\$this->lexer->token['type'] === EmailLexer::S_OPENPARENTHESIS) {
                \$this->parseComments();
                \$openedParenthesis += \$this->getOpenedParenthesis();
            }
            if (\$this->lexer->token['type'] === EmailLexer::S_CLOSEPARENTHESIS) {
                if (\$openedParenthesis === 0) {
                    throw new UnopenedComment();
                } else {
                    \$openedParenthesis--;
                }
            }

            \$this->checkConsecutiveDots();

            if (\$this->lexer->token['type'] === EmailLexer::S_DOT &&
                \$this->lexer->isNextToken(EmailLexer::S_AT)
            ) {
                throw new DotAtEnd();
            }

            \$this->warnEscaping();
            \$this->isInvalidToken(\$this->lexer->token, \$closingQuote);

            if (\$this->isFWS()) {
                \$this->parseFWS();
            }

            \$this->lexer->moveNext();
        }

        \$prev = \$this->lexer->getPrevious();
        if (strlen(\$prev['value']) > LocalTooLong::LOCAL_PART_LENGTH) {
            \$this->warnings[LocalTooLong::CODE] = new LocalTooLong();
        }
    }

    protected function parseDoubleQuote()
    {
        \$parseAgain = true;
        \$special = array(
            EmailLexer::S_CR => true,
            EmailLexer::S_HTAB => true,
            EmailLexer::S_LF => true
        );

        \$invalid = array(
            EmailLexer::C_NUL => true,
            EmailLexer::S_HTAB => true,
            EmailLexer::S_CR => true,
            EmailLexer::S_LF => true
        );
        \$setSpecialsWarning = true;

        \$this->lexer->moveNext();

        while (\$this->lexer->token['type'] !== EmailLexer::S_DQUOTE && null !== \$this->lexer->token['type']) {
            \$parseAgain = false;
            if (isset(\$special[\$this->lexer->token['type']]) && \$setSpecialsWarning) {
                \$this->warnings[CFWSWithFWS::CODE] = new CFWSWithFWS();
                \$setSpecialsWarning = false;
            }
            if (\$this->lexer->token['type'] === EmailLexer::S_BACKSLASH && \$this->lexer->isNextToken(EmailLexer::S_DQUOTE)) {
                \$this->lexer->moveNext();
            }

            \$this->lexer->moveNext();

            if (!\$this->escaped() && isset(\$invalid[\$this->lexer->token['type']])) {
                throw new ExpectingATEXT();
            }
        }

        \$prev = \$this->lexer->getPrevious();

        if (\$prev['type'] === EmailLexer::S_BACKSLASH) {
            if (!\$this->checkDQUOTE(false)) {
                throw new UnclosedQuotedString();
            }
        }

        if (!\$this->lexer->isNextToken(EmailLexer::S_AT) && \$prev['type'] !== EmailLexer::S_BACKSLASH) {
            throw new ExpectingAT();
        }

        return \$parseAgain;
    }

    protected function isInvalidToken(\$token, \$closingQuote)
    {
        \$forbidden = array(
            EmailLexer::S_COMMA,
            EmailLexer::S_CLOSEBRACKET,
            EmailLexer::S_OPENBRACKET,
            EmailLexer::S_GREATERTHAN,
            EmailLexer::S_LOWERTHAN,
            EmailLexer::S_COLON,
            EmailLexer::S_SEMICOLON,
            EmailLexer::INVALID
        );

        if (in_array(\$token['type'], \$forbidden) && !\$closingQuote) {
            throw new ExpectingATEXT();
        }
    }
}
", "vendor/egulias/email-validator/EmailValidator/Parser/LocalPart.php", "/var/www/public/DevLaon/templates/vendor/egulias/email-validator/EmailValidator/Parser/LocalPart.php");
    }
}
