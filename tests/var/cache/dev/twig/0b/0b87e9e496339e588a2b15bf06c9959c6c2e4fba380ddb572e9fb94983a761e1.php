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

/* vendor/egulias/email-validator/EmailValidator/Parser/Parser.php */
class __TwigTemplate_38a8cd72fd23f7ccd98ce6c3f79b79e9aa5f19f1e6ded15857f360320cc0bb37 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/egulias/email-validator/EmailValidator/Parser/Parser.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/egulias/email-validator/EmailValidator/Parser/Parser.php"));

        // line 1
        echo "<?php

namespace Egulias\\EmailValidator\\Parser;

use Egulias\\EmailValidator\\EmailLexer;
use Egulias\\EmailValidator\\Exception\\AtextAfterCFWS;
use Egulias\\EmailValidator\\Exception\\ConsecutiveDot;
use Egulias\\EmailValidator\\Exception\\CRLFAtTheEnd;
use Egulias\\EmailValidator\\Exception\\CRLFX2;
use Egulias\\EmailValidator\\Exception\\CRNoLF;
use Egulias\\EmailValidator\\Exception\\ExpectingQPair;
use Egulias\\EmailValidator\\Exception\\ExpectingATEXT;
use Egulias\\EmailValidator\\Exception\\ExpectingCTEXT;
use Egulias\\EmailValidator\\Exception\\UnclosedComment;
use Egulias\\EmailValidator\\Exception\\UnclosedQuotedString;
use Egulias\\EmailValidator\\Warning\\CFWSNearAt;
use Egulias\\EmailValidator\\Warning\\CFWSWithFWS;
use Egulias\\EmailValidator\\Warning\\Comment;
use Egulias\\EmailValidator\\Warning\\QuotedPart;
use Egulias\\EmailValidator\\Warning\\QuotedString;

abstract class Parser
{
    protected \$warnings = [];
    protected \$lexer;
    protected \$openedParenthesis = 0;

    public function __construct(EmailLexer \$lexer)
    {
        \$this->lexer = \$lexer;
    }

    public function getWarnings()
    {
        return \$this->warnings;
    }

    abstract public function parse(\$str);

    /** @return int */
    public function getOpenedParenthesis()
    {
        return \$this->openedParenthesis;
    }

    /**
     * validateQuotedPair
     */
    protected function validateQuotedPair()
    {
        if (!(\$this->lexer->token['type'] === EmailLexer::INVALID
            || \$this->lexer->token['type'] === EmailLexer::C_DEL)) {
            throw new ExpectingQPair();
        }

        \$this->warnings[QuotedPart::CODE] =
            new QuotedPart(\$this->lexer->getPrevious()['type'], \$this->lexer->token['type']);
    }

    protected function parseComments()
    {
        \$this->openedParenthesis = 1;
        \$this->isUnclosedComment();
        \$this->warnings[Comment::CODE] = new Comment();
        while (!\$this->lexer->isNextToken(EmailLexer::S_CLOSEPARENTHESIS)) {
            if (\$this->lexer->isNextToken(EmailLexer::S_OPENPARENTHESIS)) {
                \$this->openedParenthesis++;
            }
            \$this->warnEscaping();
            \$this->lexer->moveNext();
        }

        \$this->lexer->moveNext();
        if (\$this->lexer->isNextTokenAny(array(EmailLexer::GENERIC, EmailLexer::S_EMPTY))) {
            throw new ExpectingATEXT();
        }

        if (\$this->lexer->isNextToken(EmailLexer::S_AT)) {
            \$this->warnings[CFWSNearAt::CODE] = new CFWSNearAt();
        }
    }

    protected function isUnclosedComment()
    {
        try {
            \$this->lexer->find(EmailLexer::S_CLOSEPARENTHESIS);
            return true;
        } catch (\\RuntimeException \$e) {
            throw new UnclosedComment();
        }
    }

    protected function parseFWS()
    {
        \$previous = \$this->lexer->getPrevious();

        \$this->checkCRLFInFWS();

        if (\$this->lexer->token['type'] === EmailLexer::S_CR) {
            throw new CRNoLF();
        }

        if (\$this->lexer->isNextToken(EmailLexer::GENERIC) && \$previous['type']  !== EmailLexer::S_AT) {
            throw new AtextAfterCFWS();
        }

        if (\$this->lexer->token['type'] === EmailLexer::S_LF || \$this->lexer->token['type'] === EmailLexer::C_NUL) {
            throw new ExpectingCTEXT();
        }

        if (\$this->lexer->isNextToken(EmailLexer::S_AT) || \$previous['type']  === EmailLexer::S_AT) {
            \$this->warnings[CFWSNearAt::CODE] = new CFWSNearAt();
        } else {
            \$this->warnings[CFWSWithFWS::CODE] = new CFWSWithFWS();
        }
    }

    protected function checkConsecutiveDots()
    {
        if (\$this->lexer->token['type'] === EmailLexer::S_DOT && \$this->lexer->isNextToken(EmailLexer::S_DOT)) {
            throw new ConsecutiveDot();
        }
    }

    protected function isFWS()
    {
        if (\$this->escaped()) {
            return false;
        }

        if (\$this->lexer->token['type'] === EmailLexer::S_SP ||
            \$this->lexer->token['type'] === EmailLexer::S_HTAB ||
            \$this->lexer->token['type'] === EmailLexer::S_CR ||
            \$this->lexer->token['type'] === EmailLexer::S_LF ||
            \$this->lexer->token['type'] === EmailLexer::CRLF
        ) {
            return true;
        }

        return false;
    }

    protected function escaped()
    {
        \$previous = \$this->lexer->getPrevious();

        if (\$previous['type'] === EmailLexer::S_BACKSLASH
            &&
            \$this->lexer->token['type'] !== EmailLexer::GENERIC
        ) {
            return true;
        }

        return false;
    }

    protected function warnEscaping()
    {
        if (\$this->lexer->token['type'] !== EmailLexer::S_BACKSLASH) {
            return false;
        }

        if (\$this->lexer->isNextToken(EmailLexer::GENERIC)) {
            throw new ExpectingATEXT();
        }

        if (!\$this->lexer->isNextTokenAny(array(EmailLexer::S_SP, EmailLexer::S_HTAB, EmailLexer::C_DEL))) {
            return false;
        }

        \$this->warnings[QuotedPart::CODE] =
            new QuotedPart(\$this->lexer->getPrevious()['type'], \$this->lexer->token['type']);
        return true;

    }

    protected function checkDQUOTE(\$hasClosingQuote)
    {
        if (\$this->lexer->token['type'] !== EmailLexer::S_DQUOTE) {
            return \$hasClosingQuote;
        }
        if (\$hasClosingQuote) {
            return \$hasClosingQuote;
        }
        \$previous = \$this->lexer->getPrevious();
        if (\$this->lexer->isNextToken(EmailLexer::GENERIC) && \$previous['type'] === EmailLexer::GENERIC) {
            throw new ExpectingATEXT();
        }

        try {
            \$this->lexer->find(EmailLexer::S_DQUOTE);
            \$hasClosingQuote = true;
        } catch (\\Exception \$e) {
            throw new UnclosedQuotedString();
        }
        \$this->warnings[QuotedString::CODE] = new QuotedString(\$previous['value'], \$this->lexer->token['value']);

        return \$hasClosingQuote;
    }

    protected function checkCRLFInFWS()
    {
        if (\$this->lexer->token['type'] !== EmailLexer::CRLF) {
            return;
        }

        if (!\$this->lexer->isNextTokenAny(array(EmailLexer::S_SP, EmailLexer::S_HTAB))) {
            throw new CRLFX2();
        }

        if (!\$this->lexer->isNextTokenAny(array(EmailLexer::S_SP, EmailLexer::S_HTAB))) {
            throw new CRLFAtTheEnd();
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/egulias/email-validator/EmailValidator/Parser/Parser.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Egulias\\EmailValidator\\Parser;

use Egulias\\EmailValidator\\EmailLexer;
use Egulias\\EmailValidator\\Exception\\AtextAfterCFWS;
use Egulias\\EmailValidator\\Exception\\ConsecutiveDot;
use Egulias\\EmailValidator\\Exception\\CRLFAtTheEnd;
use Egulias\\EmailValidator\\Exception\\CRLFX2;
use Egulias\\EmailValidator\\Exception\\CRNoLF;
use Egulias\\EmailValidator\\Exception\\ExpectingQPair;
use Egulias\\EmailValidator\\Exception\\ExpectingATEXT;
use Egulias\\EmailValidator\\Exception\\ExpectingCTEXT;
use Egulias\\EmailValidator\\Exception\\UnclosedComment;
use Egulias\\EmailValidator\\Exception\\UnclosedQuotedString;
use Egulias\\EmailValidator\\Warning\\CFWSNearAt;
use Egulias\\EmailValidator\\Warning\\CFWSWithFWS;
use Egulias\\EmailValidator\\Warning\\Comment;
use Egulias\\EmailValidator\\Warning\\QuotedPart;
use Egulias\\EmailValidator\\Warning\\QuotedString;

abstract class Parser
{
    protected \$warnings = [];
    protected \$lexer;
    protected \$openedParenthesis = 0;

    public function __construct(EmailLexer \$lexer)
    {
        \$this->lexer = \$lexer;
    }

    public function getWarnings()
    {
        return \$this->warnings;
    }

    abstract public function parse(\$str);

    /** @return int */
    public function getOpenedParenthesis()
    {
        return \$this->openedParenthesis;
    }

    /**
     * validateQuotedPair
     */
    protected function validateQuotedPair()
    {
        if (!(\$this->lexer->token['type'] === EmailLexer::INVALID
            || \$this->lexer->token['type'] === EmailLexer::C_DEL)) {
            throw new ExpectingQPair();
        }

        \$this->warnings[QuotedPart::CODE] =
            new QuotedPart(\$this->lexer->getPrevious()['type'], \$this->lexer->token['type']);
    }

    protected function parseComments()
    {
        \$this->openedParenthesis = 1;
        \$this->isUnclosedComment();
        \$this->warnings[Comment::CODE] = new Comment();
        while (!\$this->lexer->isNextToken(EmailLexer::S_CLOSEPARENTHESIS)) {
            if (\$this->lexer->isNextToken(EmailLexer::S_OPENPARENTHESIS)) {
                \$this->openedParenthesis++;
            }
            \$this->warnEscaping();
            \$this->lexer->moveNext();
        }

        \$this->lexer->moveNext();
        if (\$this->lexer->isNextTokenAny(array(EmailLexer::GENERIC, EmailLexer::S_EMPTY))) {
            throw new ExpectingATEXT();
        }

        if (\$this->lexer->isNextToken(EmailLexer::S_AT)) {
            \$this->warnings[CFWSNearAt::CODE] = new CFWSNearAt();
        }
    }

    protected function isUnclosedComment()
    {
        try {
            \$this->lexer->find(EmailLexer::S_CLOSEPARENTHESIS);
            return true;
        } catch (\\RuntimeException \$e) {
            throw new UnclosedComment();
        }
    }

    protected function parseFWS()
    {
        \$previous = \$this->lexer->getPrevious();

        \$this->checkCRLFInFWS();

        if (\$this->lexer->token['type'] === EmailLexer::S_CR) {
            throw new CRNoLF();
        }

        if (\$this->lexer->isNextToken(EmailLexer::GENERIC) && \$previous['type']  !== EmailLexer::S_AT) {
            throw new AtextAfterCFWS();
        }

        if (\$this->lexer->token['type'] === EmailLexer::S_LF || \$this->lexer->token['type'] === EmailLexer::C_NUL) {
            throw new ExpectingCTEXT();
        }

        if (\$this->lexer->isNextToken(EmailLexer::S_AT) || \$previous['type']  === EmailLexer::S_AT) {
            \$this->warnings[CFWSNearAt::CODE] = new CFWSNearAt();
        } else {
            \$this->warnings[CFWSWithFWS::CODE] = new CFWSWithFWS();
        }
    }

    protected function checkConsecutiveDots()
    {
        if (\$this->lexer->token['type'] === EmailLexer::S_DOT && \$this->lexer->isNextToken(EmailLexer::S_DOT)) {
            throw new ConsecutiveDot();
        }
    }

    protected function isFWS()
    {
        if (\$this->escaped()) {
            return false;
        }

        if (\$this->lexer->token['type'] === EmailLexer::S_SP ||
            \$this->lexer->token['type'] === EmailLexer::S_HTAB ||
            \$this->lexer->token['type'] === EmailLexer::S_CR ||
            \$this->lexer->token['type'] === EmailLexer::S_LF ||
            \$this->lexer->token['type'] === EmailLexer::CRLF
        ) {
            return true;
        }

        return false;
    }

    protected function escaped()
    {
        \$previous = \$this->lexer->getPrevious();

        if (\$previous['type'] === EmailLexer::S_BACKSLASH
            &&
            \$this->lexer->token['type'] !== EmailLexer::GENERIC
        ) {
            return true;
        }

        return false;
    }

    protected function warnEscaping()
    {
        if (\$this->lexer->token['type'] !== EmailLexer::S_BACKSLASH) {
            return false;
        }

        if (\$this->lexer->isNextToken(EmailLexer::GENERIC)) {
            throw new ExpectingATEXT();
        }

        if (!\$this->lexer->isNextTokenAny(array(EmailLexer::S_SP, EmailLexer::S_HTAB, EmailLexer::C_DEL))) {
            return false;
        }

        \$this->warnings[QuotedPart::CODE] =
            new QuotedPart(\$this->lexer->getPrevious()['type'], \$this->lexer->token['type']);
        return true;

    }

    protected function checkDQUOTE(\$hasClosingQuote)
    {
        if (\$this->lexer->token['type'] !== EmailLexer::S_DQUOTE) {
            return \$hasClosingQuote;
        }
        if (\$hasClosingQuote) {
            return \$hasClosingQuote;
        }
        \$previous = \$this->lexer->getPrevious();
        if (\$this->lexer->isNextToken(EmailLexer::GENERIC) && \$previous['type'] === EmailLexer::GENERIC) {
            throw new ExpectingATEXT();
        }

        try {
            \$this->lexer->find(EmailLexer::S_DQUOTE);
            \$hasClosingQuote = true;
        } catch (\\Exception \$e) {
            throw new UnclosedQuotedString();
        }
        \$this->warnings[QuotedString::CODE] = new QuotedString(\$previous['value'], \$this->lexer->token['value']);

        return \$hasClosingQuote;
    }

    protected function checkCRLFInFWS()
    {
        if (\$this->lexer->token['type'] !== EmailLexer::CRLF) {
            return;
        }

        if (!\$this->lexer->isNextTokenAny(array(EmailLexer::S_SP, EmailLexer::S_HTAB))) {
            throw new CRLFX2();
        }

        if (!\$this->lexer->isNextTokenAny(array(EmailLexer::S_SP, EmailLexer::S_HTAB))) {
            throw new CRLFAtTheEnd();
        }
    }
}
", "vendor/egulias/email-validator/EmailValidator/Parser/Parser.php", "/var/www/public/DevLaon/templates/vendor/egulias/email-validator/EmailValidator/Parser/Parser.php");
    }
}
