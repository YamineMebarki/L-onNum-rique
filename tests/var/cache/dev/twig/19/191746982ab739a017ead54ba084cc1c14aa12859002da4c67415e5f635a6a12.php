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

/* vendor/symfony/debug/Tests/Fixtures/LoggerThatSetAnErrorHandler.php */
class __TwigTemplate_1f5775d4c63a49015be26e6f8641eaca8bb913e55202d8cca1a5e9cbd79b4e7b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/debug/Tests/Fixtures/LoggerThatSetAnErrorHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/debug/Tests/Fixtures/LoggerThatSetAnErrorHandler.php"));

        // line 1
        echo "<?php

namespace Symfony\\Component\\Debug\\Tests\\Fixtures;

use Symfony\\Component\\Debug\\BufferingLogger;

class LoggerThatSetAnErrorHandler extends BufferingLogger
{
    public function log(\$level, \$message, array \$context = [])
    {
        set_error_handler('is_string');
        parent::log(\$level, \$message, \$context);
        restore_error_handler();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/debug/Tests/Fixtures/LoggerThatSetAnErrorHandler.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Symfony\\Component\\Debug\\Tests\\Fixtures;

use Symfony\\Component\\Debug\\BufferingLogger;

class LoggerThatSetAnErrorHandler extends BufferingLogger
{
    public function log(\$level, \$message, array \$context = [])
    {
        set_error_handler('is_string');
        parent::log(\$level, \$message, \$context);
        restore_error_handler();
    }
}
", "vendor/symfony/debug/Tests/Fixtures/LoggerThatSetAnErrorHandler.php", "/var/www/public/DevLaon/templates/vendor/symfony/debug/Tests/Fixtures/LoggerThatSetAnErrorHandler.php");
    }
}
