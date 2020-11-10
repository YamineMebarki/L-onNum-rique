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

/* vendor/symfony/debug/Tests/Fixtures/ErrorHandlerThatUsesThePreviousOne.php */
class __TwigTemplate_fc1470d30c90c187ca9494b32a8c6b2b1fb05868f61b803dd9c3efa4ee7f8e80 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/debug/Tests/Fixtures/ErrorHandlerThatUsesThePreviousOne.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/debug/Tests/Fixtures/ErrorHandlerThatUsesThePreviousOne.php"));

        // line 1
        echo "<?php

namespace Symfony\\Component\\Debug\\Tests\\Fixtures;

class ErrorHandlerThatUsesThePreviousOne
{
    private static \$previous;

    public static function register()
    {
        \$handler = new static();

        self::\$previous = set_error_handler([\$handler, 'handleError']);

        return \$handler;
    }

    public function handleError(\$type, \$message, \$file, \$line, \$context)
    {
        return \\call_user_func(self::\$previous, \$type, \$message, \$file, \$line, \$context);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/debug/Tests/Fixtures/ErrorHandlerThatUsesThePreviousOne.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Symfony\\Component\\Debug\\Tests\\Fixtures;

class ErrorHandlerThatUsesThePreviousOne
{
    private static \$previous;

    public static function register()
    {
        \$handler = new static();

        self::\$previous = set_error_handler([\$handler, 'handleError']);

        return \$handler;
    }

    public function handleError(\$type, \$message, \$file, \$line, \$context)
    {
        return \\call_user_func(self::\$previous, \$type, \$message, \$file, \$line, \$context);
    }
}
", "vendor/symfony/debug/Tests/Fixtures/ErrorHandlerThatUsesThePreviousOne.php", "/var/www/public/DevLaon/templates/vendor/symfony/debug/Tests/Fixtures/ErrorHandlerThatUsesThePreviousOne.php");
    }
}
