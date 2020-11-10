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

/* vendor/egulias/email-validator/EmailValidator/Validation/MultipleValidationWithAnd.php */
class __TwigTemplate_9106db04752d767afb17b2a97e4e81164ecf7ef31cabc03830a67143e23da7db extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/egulias/email-validator/EmailValidator/Validation/MultipleValidationWithAnd.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/egulias/email-validator/EmailValidator/Validation/MultipleValidationWithAnd.php"));

        // line 1
        echo "<?php

namespace Egulias\\EmailValidator\\Validation;

use Egulias\\EmailValidator\\EmailLexer;
use Egulias\\EmailValidator\\Validation\\Exception\\EmptyValidationList;

class MultipleValidationWithAnd implements EmailValidation
{
    /**
     * If one of validations gets failure skips all succeeding validation.
     * This means MultipleErrors will only contain a single error which first found.
     */
    const STOP_ON_ERROR = 0;

    /**
     * All of validations will be invoked even if one of them got failure.
     * So MultipleErrors will contain all causes.
     */
    const ALLOW_ALL_ERRORS = 1;

    /**
     * @var EmailValidation[]
     */
    private \$validations = [];

    /**
     * @var array
     */
    private \$warnings = [];

    /**
     * @var MultipleErrors
     */
    private \$error;

    /**
     * @var bool
     */
    private \$mode;

    /**
     * @param EmailValidation[] \$validations The validations.
     * @param int               \$mode        The validation mode (one of the constants).
     */
    public function __construct(array \$validations, \$mode = self::ALLOW_ALL_ERRORS)
    {
        if (count(\$validations) == 0) {
            throw new EmptyValidationList();
        }

        \$this->validations = \$validations;
        \$this->mode = \$mode;
    }

    /**
     * {@inheritdoc}
     */
    public function isValid(\$email, EmailLexer \$emailLexer)
    {
        \$result = true;
        \$errors = [];
        foreach (\$this->validations as \$validation) {
            \$emailLexer->reset();
            \$validationResult = \$validation->isValid(\$email, \$emailLexer);
            \$result = \$result && \$validationResult;
            \$this->warnings = array_merge(\$this->warnings, \$validation->getWarnings());
            \$errors = \$this->addNewError(\$validation->getError(), \$errors);

            if (\$this->shouldStop(\$result)) {
                break;
            }
        }

        if (!empty(\$errors)) {
            \$this->error = new MultipleErrors(\$errors);
        }

        return \$result;
    }

    private function addNewError(\$possibleError, array \$errors)
    {
        if (null !== \$possibleError) {
            \$errors[] = \$possibleError;
        }

        return \$errors;
    }

    private function shouldStop(\$result)
    {
        return !\$result && \$this->mode === self::STOP_ON_ERROR;
    }

    /**
     * {@inheritdoc}
     */
    public function getError()
    {
        return \$this->error;
    }

    /**
     * {@inheritdoc}
     */
    public function getWarnings()
    {
        return \$this->warnings;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/egulias/email-validator/EmailValidator/Validation/MultipleValidationWithAnd.php";
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
use Egulias\\EmailValidator\\Validation\\Exception\\EmptyValidationList;

class MultipleValidationWithAnd implements EmailValidation
{
    /**
     * If one of validations gets failure skips all succeeding validation.
     * This means MultipleErrors will only contain a single error which first found.
     */
    const STOP_ON_ERROR = 0;

    /**
     * All of validations will be invoked even if one of them got failure.
     * So MultipleErrors will contain all causes.
     */
    const ALLOW_ALL_ERRORS = 1;

    /**
     * @var EmailValidation[]
     */
    private \$validations = [];

    /**
     * @var array
     */
    private \$warnings = [];

    /**
     * @var MultipleErrors
     */
    private \$error;

    /**
     * @var bool
     */
    private \$mode;

    /**
     * @param EmailValidation[] \$validations The validations.
     * @param int               \$mode        The validation mode (one of the constants).
     */
    public function __construct(array \$validations, \$mode = self::ALLOW_ALL_ERRORS)
    {
        if (count(\$validations) == 0) {
            throw new EmptyValidationList();
        }

        \$this->validations = \$validations;
        \$this->mode = \$mode;
    }

    /**
     * {@inheritdoc}
     */
    public function isValid(\$email, EmailLexer \$emailLexer)
    {
        \$result = true;
        \$errors = [];
        foreach (\$this->validations as \$validation) {
            \$emailLexer->reset();
            \$validationResult = \$validation->isValid(\$email, \$emailLexer);
            \$result = \$result && \$validationResult;
            \$this->warnings = array_merge(\$this->warnings, \$validation->getWarnings());
            \$errors = \$this->addNewError(\$validation->getError(), \$errors);

            if (\$this->shouldStop(\$result)) {
                break;
            }
        }

        if (!empty(\$errors)) {
            \$this->error = new MultipleErrors(\$errors);
        }

        return \$result;
    }

    private function addNewError(\$possibleError, array \$errors)
    {
        if (null !== \$possibleError) {
            \$errors[] = \$possibleError;
        }

        return \$errors;
    }

    private function shouldStop(\$result)
    {
        return !\$result && \$this->mode === self::STOP_ON_ERROR;
    }

    /**
     * {@inheritdoc}
     */
    public function getError()
    {
        return \$this->error;
    }

    /**
     * {@inheritdoc}
     */
    public function getWarnings()
    {
        return \$this->warnings;
    }
}
", "vendor/egulias/email-validator/EmailValidator/Validation/MultipleValidationWithAnd.php", "/var/www/public/DevLaon/templates/vendor/egulias/email-validator/EmailValidator/Validation/MultipleValidationWithAnd.php");
    }
}
