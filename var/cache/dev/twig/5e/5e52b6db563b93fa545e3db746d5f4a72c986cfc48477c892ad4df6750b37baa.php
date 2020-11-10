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

/* vendor/symfony/debug/Tests/phpt/exception_rethrown.phpt */
class __TwigTemplate_18dc5636aeb2a777042ca9cf1cc928933ca79dacce1e96732623fcdbd6cd8ce8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/debug/Tests/phpt/exception_rethrown.phpt"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/debug/Tests/phpt/exception_rethrown.phpt"));

        // line 1
        echo "--TEST--
Test rethrowing in custom exception handler
--FILE--
<?php

namespace Symfony\\Component\\Debug;

\$vendor = __DIR__;
while (!file_exists(\$vendor.'/vendor')) {
    \$vendor = \\dirname(\$vendor);
}
require \$vendor.'/vendor/autoload.php';

if (true) {
    class TestLogger extends \\Psr\\Log\\AbstractLogger
    {
        public function log(\$level, \$message, array \$context = [])
        {
            echo \$message, \"\\n\";
        }
    }
}

set_exception_handler(function (\$e) { echo 123; throw \$e; });
ErrorHandler::register()->setDefaultLogger(new TestLogger());
ini_set('display_errors', 1);

throw new \\Exception('foo');
?>
--EXPECTF--
Uncaught Exception: foo
123
Fatal error: Uncaught %s:25
Stack trace:
%a
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/debug/Tests/phpt/exception_rethrown.phpt";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("--TEST--
Test rethrowing in custom exception handler
--FILE--
<?php

namespace Symfony\\Component\\Debug;

\$vendor = __DIR__;
while (!file_exists(\$vendor.'/vendor')) {
    \$vendor = \\dirname(\$vendor);
}
require \$vendor.'/vendor/autoload.php';

if (true) {
    class TestLogger extends \\Psr\\Log\\AbstractLogger
    {
        public function log(\$level, \$message, array \$context = [])
        {
            echo \$message, \"\\n\";
        }
    }
}

set_exception_handler(function (\$e) { echo 123; throw \$e; });
ErrorHandler::register()->setDefaultLogger(new TestLogger());
ini_set('display_errors', 1);

throw new \\Exception('foo');
?>
--EXPECTF--
Uncaught Exception: foo
123
Fatal error: Uncaught %s:25
Stack trace:
%a
", "vendor/symfony/debug/Tests/phpt/exception_rethrown.phpt", "/var/www/public/DevLaon/templates/vendor/symfony/debug/Tests/phpt/exception_rethrown.phpt");
    }
}
