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

/* vendor/egulias/email-validator/EmailValidator/EmailValidator.php */
class __TwigTemplate_18e47ed198360f01a37fa29bb8abdf596c2ec21c712c055103bddfa98e9d9284 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/egulias/email-validator/EmailValidator/EmailValidator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/egulias/email-validator/EmailValidator/EmailValidator.php"));

        // line 1
        echo "<?php

namespace Egulias\\EmailValidator;

use Egulias\\EmailValidator\\Exception\\InvalidEmail;
use Egulias\\EmailValidator\\Validation\\EmailValidation;

class EmailValidator
{
    /**
     * @var EmailLexer
     */
    private \$lexer;

    /**
     * @var array
     */
    protected \$warnings;

    /**
     * @var InvalidEmail
     */
    protected \$error;

    public function __construct()
    {
        \$this->lexer = new EmailLexer();
    }

    /**
     * @param string          \$email
     * @param EmailValidation \$emailValidation
     * @return bool
     */
    public function isValid(\$email, EmailValidation \$emailValidation)
    {
        \$isValid = \$emailValidation->isValid(\$email, \$this->lexer);
        \$this->warnings = \$emailValidation->getWarnings();
        \$this->error = \$emailValidation->getError();

        return \$isValid;
    }

    /**
     * @return boolean
     */
    public function hasWarnings()
    {
        return !empty(\$this->warnings);
    }

    /**
     * @return array
     */
    public function getWarnings()
    {
        return \$this->warnings;
    }

    /**
     * @return InvalidEmail
     */
    public function getError()
    {
        return \$this->error;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/egulias/email-validator/EmailValidator/EmailValidator.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Egulias\\EmailValidator;

use Egulias\\EmailValidator\\Exception\\InvalidEmail;
use Egulias\\EmailValidator\\Validation\\EmailValidation;

class EmailValidator
{
    /**
     * @var EmailLexer
     */
    private \$lexer;

    /**
     * @var array
     */
    protected \$warnings;

    /**
     * @var InvalidEmail
     */
    protected \$error;

    public function __construct()
    {
        \$this->lexer = new EmailLexer();
    }

    /**
     * @param string          \$email
     * @param EmailValidation \$emailValidation
     * @return bool
     */
    public function isValid(\$email, EmailValidation \$emailValidation)
    {
        \$isValid = \$emailValidation->isValid(\$email, \$this->lexer);
        \$this->warnings = \$emailValidation->getWarnings();
        \$this->error = \$emailValidation->getError();

        return \$isValid;
    }

    /**
     * @return boolean
     */
    public function hasWarnings()
    {
        return !empty(\$this->warnings);
    }

    /**
     * @return array
     */
    public function getWarnings()
    {
        return \$this->warnings;
    }

    /**
     * @return InvalidEmail
     */
    public function getError()
    {
        return \$this->error;
    }
}
", "vendor/egulias/email-validator/EmailValidator/EmailValidator.php", "/var/www/public/DevLaon/templates/vendor/egulias/email-validator/EmailValidator/EmailValidator.php");
    }
}
