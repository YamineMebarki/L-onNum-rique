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

/* vendor/egulias/email-validator/EmailValidator/Validation/SpoofCheckValidation.php */
class __TwigTemplate_51684b646c8f02be2ae2f3e7990346043bd83ee787bb4336b87cbc7aacfd3629 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/egulias/email-validator/EmailValidator/Validation/SpoofCheckValidation.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/egulias/email-validator/EmailValidator/Validation/SpoofCheckValidation.php"));

        // line 1
        echo "<?php

namespace Egulias\\EmailValidator\\Validation;

use Egulias\\EmailValidator\\EmailLexer;
use Egulias\\EmailValidator\\Exception\\InvalidEmail;
use Egulias\\EmailValidator\\Validation\\Error\\SpoofEmail;
use \\Spoofchecker;

class SpoofCheckValidation implements EmailValidation
{
    /**
     * @var InvalidEmail
     */
    private \$error;

    public function __construct()
    {
        if (!extension_loaded('intl')) {
            throw new \\LogicException(sprintf('The %s class requires the Intl extension.', __CLASS__));
        }
    }

    public function isValid(\$email, EmailLexer \$emailLexer)
    {
        \$checker = new Spoofchecker();
        \$checker->setChecks(Spoofchecker::SINGLE_SCRIPT);

        if (\$checker->isSuspicious(\$email)) {
            \$this->error = new SpoofEmail();
        }

        return \$this->error === null;
    }

    public function getError()
    {
        return \$this->error;
    }

    public function getWarnings()
    {
        return [];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/egulias/email-validator/EmailValidator/Validation/SpoofCheckValidation.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Egulias\\EmailValidator\\Validation;

use Egulias\\EmailValidator\\EmailLexer;
use Egulias\\EmailValidator\\Exception\\InvalidEmail;
use Egulias\\EmailValidator\\Validation\\Error\\SpoofEmail;
use \\Spoofchecker;

class SpoofCheckValidation implements EmailValidation
{
    /**
     * @var InvalidEmail
     */
    private \$error;

    public function __construct()
    {
        if (!extension_loaded('intl')) {
            throw new \\LogicException(sprintf('The %s class requires the Intl extension.', __CLASS__));
        }
    }

    public function isValid(\$email, EmailLexer \$emailLexer)
    {
        \$checker = new Spoofchecker();
        \$checker->setChecks(Spoofchecker::SINGLE_SCRIPT);

        if (\$checker->isSuspicious(\$email)) {
            \$this->error = new SpoofEmail();
        }

        return \$this->error === null;
    }

    public function getError()
    {
        return \$this->error;
    }

    public function getWarnings()
    {
        return [];
    }
}
", "vendor/egulias/email-validator/EmailValidator/Validation/SpoofCheckValidation.php", "/var/www/public/DevLaon/templates/vendor/egulias/email-validator/EmailValidator/Validation/SpoofCheckValidation.php");
    }
}
