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

/* vendor/symfony/debug/Tests/phpt/debug_class_loader.phpt */
class __TwigTemplate_a45ae9ef21b19227157a12c0c22ceff65fb026e97f5c8fd9d273f7621aa6aaff extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/debug/Tests/phpt/debug_class_loader.phpt"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/debug/Tests/phpt/debug_class_loader.phpt"));

        // line 1
        echo "--TEST--
Test DebugClassLoader with previously loaded parents
--FILE--
<?php

namespace Symfony\\Component\\Debug\\Tests\\Fixtures;

use Symfony\\Component\\Debug\\DebugClassLoader;

\$vendor = __DIR__;
while (!file_exists(\$vendor.'/vendor')) {
    \$vendor = \\dirname(\$vendor);
}
require \$vendor.'/vendor/autoload.php';

class_exists(FinalMethod::class);

set_error_handler(function (\$type, \$msg) { echo \$msg, \"\\n\"; });

DebugClassLoader::enable();

class_exists(ExtendedFinalMethod::class);

?>
--EXPECTF--
The \"Symfony\\Component\\Debug\\Tests\\Fixtures\\FinalMethod::finalMethod()\" method is considered final. It may change without further notice as of its next major version. You should not extend it from \"Symfony\\Component\\Debug\\Tests\\Fixtures\\ExtendedFinalMethod\".
The \"Symfony\\Component\\Debug\\Tests\\Fixtures\\FinalMethod::finalMethod2()\" method is considered final. It may change without further notice as of its next major version. You should not extend it from \"Symfony\\Component\\Debug\\Tests\\Fixtures\\ExtendedFinalMethod\".
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/debug/Tests/phpt/debug_class_loader.phpt";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("--TEST--
Test DebugClassLoader with previously loaded parents
--FILE--
<?php

namespace Symfony\\Component\\Debug\\Tests\\Fixtures;

use Symfony\\Component\\Debug\\DebugClassLoader;

\$vendor = __DIR__;
while (!file_exists(\$vendor.'/vendor')) {
    \$vendor = \\dirname(\$vendor);
}
require \$vendor.'/vendor/autoload.php';

class_exists(FinalMethod::class);

set_error_handler(function (\$type, \$msg) { echo \$msg, \"\\n\"; });

DebugClassLoader::enable();

class_exists(ExtendedFinalMethod::class);

?>
--EXPECTF--
The \"Symfony\\Component\\Debug\\Tests\\Fixtures\\FinalMethod::finalMethod()\" method is considered final. It may change without further notice as of its next major version. You should not extend it from \"Symfony\\Component\\Debug\\Tests\\Fixtures\\ExtendedFinalMethod\".
The \"Symfony\\Component\\Debug\\Tests\\Fixtures\\FinalMethod::finalMethod2()\" method is considered final. It may change without further notice as of its next major version. You should not extend it from \"Symfony\\Component\\Debug\\Tests\\Fixtures\\ExtendedFinalMethod\".
", "vendor/symfony/debug/Tests/phpt/debug_class_loader.phpt", "/var/www/public/DevLaon/templates/vendor/symfony/debug/Tests/phpt/debug_class_loader.phpt");
    }
}
