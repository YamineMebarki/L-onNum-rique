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

/* vendor/egulias/email-validator/EmailValidator/EmailParser.php */
class __TwigTemplate_08a8abd5958188f97c02f00d9695dc75e36db0d664c1111ca22083fda3b9a4b9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/egulias/email-validator/EmailValidator/EmailParser.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/egulias/email-validator/EmailValidator/EmailParser.php"));

        // line 1
        echo "<?php

namespace Egulias\\EmailValidator;

use Egulias\\EmailValidator\\Exception\\ExpectingATEXT;
use Egulias\\EmailValidator\\Exception\\NoLocalPart;
use Egulias\\EmailValidator\\Parser\\DomainPart;
use Egulias\\EmailValidator\\Parser\\LocalPart;
use Egulias\\EmailValidator\\Warning\\EmailTooLong;

/**
 * EmailParser
 *
 * @author Eduardo Gulias Davis <me@egulias.com>
 */
class EmailParser
{
    const EMAIL_MAX_LENGTH = 254;

    protected \$warnings;
    protected \$domainPart = '';
    protected \$localPart = '';
    protected \$lexer;
    protected \$localPartParser;
    protected \$domainPartParser;

    public function __construct(EmailLexer \$lexer)
    {
        \$this->lexer = \$lexer;
        \$this->localPartParser = new LocalPart(\$this->lexer);
        \$this->domainPartParser = new DomainPart(\$this->lexer);
        \$this->warnings = new \\SplObjectStorage();
    }

    /**
     * @param string \$str
     * @return array
     */
    public function parse(\$str)
    {
        \$this->lexer->setInput(\$str);

        if (!\$this->hasAtToken()) {
            throw new NoLocalPart();
        }


        \$this->localPartParser->parse(\$str);
        \$this->domainPartParser->parse(\$str);

        \$this->setParts(\$str);

        if (\$this->lexer->hasInvalidTokens()) {
            throw new ExpectingATEXT();
        }

        return array('local' => \$this->localPart, 'domain' => \$this->domainPart);
    }

    public function getWarnings()
    {
        \$localPartWarnings = \$this->localPartParser->getWarnings();
        \$domainPartWarnings = \$this->domainPartParser->getWarnings();
        \$this->warnings = array_merge(\$localPartWarnings, \$domainPartWarnings);

        \$this->addLongEmailWarning(\$this->localPart, \$this->domainPart);

        return \$this->warnings;
    }

    public function getParsedDomainPart()
    {
        return \$this->domainPart;
    }

    protected function setParts(\$email)
    {
        \$parts = explode('@', \$email);
        \$this->domainPart = \$this->domainPartParser->getDomainPart();
        \$this->localPart = \$parts[0];
    }

    protected function hasAtToken()
    {
        \$this->lexer->moveNext();
        \$this->lexer->moveNext();
        if (\$this->lexer->token['type'] === EmailLexer::S_AT) {
            return false;
        }

        return true;
    }

    /**
     * @param string \$localPart
     * @param string \$parsedDomainPart
     */
    protected function addLongEmailWarning(\$localPart, \$parsedDomainPart)
    {
        if (strlen(\$localPart . '@' . \$parsedDomainPart) > self::EMAIL_MAX_LENGTH) {
            \$this->warnings[EmailTooLong::CODE] = new EmailTooLong();
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/egulias/email-validator/EmailValidator/EmailParser.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Egulias\\EmailValidator;

use Egulias\\EmailValidator\\Exception\\ExpectingATEXT;
use Egulias\\EmailValidator\\Exception\\NoLocalPart;
use Egulias\\EmailValidator\\Parser\\DomainPart;
use Egulias\\EmailValidator\\Parser\\LocalPart;
use Egulias\\EmailValidator\\Warning\\EmailTooLong;

/**
 * EmailParser
 *
 * @author Eduardo Gulias Davis <me@egulias.com>
 */
class EmailParser
{
    const EMAIL_MAX_LENGTH = 254;

    protected \$warnings;
    protected \$domainPart = '';
    protected \$localPart = '';
    protected \$lexer;
    protected \$localPartParser;
    protected \$domainPartParser;

    public function __construct(EmailLexer \$lexer)
    {
        \$this->lexer = \$lexer;
        \$this->localPartParser = new LocalPart(\$this->lexer);
        \$this->domainPartParser = new DomainPart(\$this->lexer);
        \$this->warnings = new \\SplObjectStorage();
    }

    /**
     * @param string \$str
     * @return array
     */
    public function parse(\$str)
    {
        \$this->lexer->setInput(\$str);

        if (!\$this->hasAtToken()) {
            throw new NoLocalPart();
        }


        \$this->localPartParser->parse(\$str);
        \$this->domainPartParser->parse(\$str);

        \$this->setParts(\$str);

        if (\$this->lexer->hasInvalidTokens()) {
            throw new ExpectingATEXT();
        }

        return array('local' => \$this->localPart, 'domain' => \$this->domainPart);
    }

    public function getWarnings()
    {
        \$localPartWarnings = \$this->localPartParser->getWarnings();
        \$domainPartWarnings = \$this->domainPartParser->getWarnings();
        \$this->warnings = array_merge(\$localPartWarnings, \$domainPartWarnings);

        \$this->addLongEmailWarning(\$this->localPart, \$this->domainPart);

        return \$this->warnings;
    }

    public function getParsedDomainPart()
    {
        return \$this->domainPart;
    }

    protected function setParts(\$email)
    {
        \$parts = explode('@', \$email);
        \$this->domainPart = \$this->domainPartParser->getDomainPart();
        \$this->localPart = \$parts[0];
    }

    protected function hasAtToken()
    {
        \$this->lexer->moveNext();
        \$this->lexer->moveNext();
        if (\$this->lexer->token['type'] === EmailLexer::S_AT) {
            return false;
        }

        return true;
    }

    /**
     * @param string \$localPart
     * @param string \$parsedDomainPart
     */
    protected function addLongEmailWarning(\$localPart, \$parsedDomainPart)
    {
        if (strlen(\$localPart . '@' . \$parsedDomainPart) > self::EMAIL_MAX_LENGTH) {
            \$this->warnings[EmailTooLong::CODE] = new EmailTooLong();
        }
    }
}
", "vendor/egulias/email-validator/EmailValidator/EmailParser.php", "/var/www/public/DevLaon/templates/vendor/egulias/email-validator/EmailValidator/EmailParser.php");
    }
}
