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

/* vendor/egulias/email-validator/EmailValidator/Validation/MultipleErrors.php */
class __TwigTemplate_e59d66039414819c6a56369489ec30304549a490661c63d158dad5586525bc42 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/egulias/email-validator/EmailValidator/Validation/MultipleErrors.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/egulias/email-validator/EmailValidator/Validation/MultipleErrors.php"));

        // line 1
        echo "<?php

namespace Egulias\\EmailValidator\\Validation;

use Egulias\\EmailValidator\\Exception\\InvalidEmail;

class MultipleErrors extends InvalidEmail
{
    const CODE = 999;
    const REASON = \"Accumulated errors for multiple validations\";
    /**
     * @var array
     */
    private \$errors = [];

    public function __construct(array \$errors)
    {
        \$this->errors = \$errors;
        parent::__construct();
    }

    public function getErrors()
    {
        return \$this->errors;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/egulias/email-validator/EmailValidator/Validation/MultipleErrors.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Egulias\\EmailValidator\\Validation;

use Egulias\\EmailValidator\\Exception\\InvalidEmail;

class MultipleErrors extends InvalidEmail
{
    const CODE = 999;
    const REASON = \"Accumulated errors for multiple validations\";
    /**
     * @var array
     */
    private \$errors = [];

    public function __construct(array \$errors)
    {
        \$this->errors = \$errors;
        parent::__construct();
    }

    public function getErrors()
    {
        return \$this->errors;
    }
}
", "vendor/egulias/email-validator/EmailValidator/Validation/MultipleErrors.php", "/var/www/public/DevLaon/templates/vendor/egulias/email-validator/EmailValidator/Validation/MultipleErrors.php");
    }
}
