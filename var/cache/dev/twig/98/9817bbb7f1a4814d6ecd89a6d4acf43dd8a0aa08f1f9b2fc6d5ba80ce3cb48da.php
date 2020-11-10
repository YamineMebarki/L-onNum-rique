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

/* vendor/nikic/php-parser/lib/PhpParser/ErrorHandler/Collecting.php */
class __TwigTemplate_f76d5a4dc64c247783b9bef50876d514bd3818e648987f3123a98f64bed671fc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/ErrorHandler/Collecting.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/ErrorHandler/Collecting.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\ErrorHandler;

use PhpParser\\Error;
use PhpParser\\ErrorHandler;

/**
 * Error handler that collects all errors into an array.
 *
 * This allows graceful handling of errors.
 */
class Collecting implements ErrorHandler
{
    /** @var Error[] Collected errors */
    private \$errors = [];

    public function handleError(Error \$error) {
        \$this->errors[] = \$error;
    }

    /**
     * Get collected errors.
     *
     * @return Error[]
     */
    public function getErrors() : array {
        return \$this->errors;
    }

    /**
     * Check whether there are any errors.
     *
     * @return bool
     */
    public function hasErrors() : bool {
        return !empty(\$this->errors);
    }

    /**
     * Reset/clear collected errors.
     */
    public function clearErrors() {
        \$this->errors = [];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/nikic/php-parser/lib/PhpParser/ErrorHandler/Collecting.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php declare(strict_types=1);

namespace PhpParser\\ErrorHandler;

use PhpParser\\Error;
use PhpParser\\ErrorHandler;

/**
 * Error handler that collects all errors into an array.
 *
 * This allows graceful handling of errors.
 */
class Collecting implements ErrorHandler
{
    /** @var Error[] Collected errors */
    private \$errors = [];

    public function handleError(Error \$error) {
        \$this->errors[] = \$error;
    }

    /**
     * Get collected errors.
     *
     * @return Error[]
     */
    public function getErrors() : array {
        return \$this->errors;
    }

    /**
     * Check whether there are any errors.
     *
     * @return bool
     */
    public function hasErrors() : bool {
        return !empty(\$this->errors);
    }

    /**
     * Reset/clear collected errors.
     */
    public function clearErrors() {
        \$this->errors = [];
    }
}
", "vendor/nikic/php-parser/lib/PhpParser/ErrorHandler/Collecting.php", "/var/www/public/DevLaon/templates/vendor/nikic/php-parser/lib/PhpParser/ErrorHandler/Collecting.php");
    }
}
