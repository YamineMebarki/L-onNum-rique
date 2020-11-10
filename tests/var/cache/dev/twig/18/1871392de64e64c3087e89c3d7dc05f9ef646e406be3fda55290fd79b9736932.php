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

/* vendor/symfony/debug/Tests/phpt/fatal_with_nested_handlers.phpt */
class __TwigTemplate_1dd08dd1f0513d64f7979351a5fe2241df3cca0b46d92e6c0f69cd72d6774526 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/debug/Tests/phpt/fatal_with_nested_handlers.phpt"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/debug/Tests/phpt/fatal_with_nested_handlers.phpt"));

        // line 1
        echo "--TEST--
Test catching fatal errors when handlers are nested
--FILE--
<?php

namespace Symfony\\Component\\Debug;

\$vendor = __DIR__;
while (!file_exists(\$vendor.'/vendor')) {
    \$vendor = \\dirname(\$vendor);
}
require \$vendor.'/vendor/autoload.php';

Debug::enable();
ini_set('display_errors', 0);

\$eHandler = set_error_handler('var_dump');
\$xHandler = set_exception_handler('var_dump');

var_dump([
    \$eHandler[0] === \$xHandler[0] ? 'Error and exception handlers do match' : 'Error and exception handlers are different',
]);

\$eHandler[0]->setExceptionHandler('print_r');

if (true) {
    class Broken implements \\JsonSerializable
    {
    }
}

?>
--EXPECTF--
array(1) {
  [0]=>
  string(37) \"Error and exception handlers do match\"
}
object(Symfony\\Component\\Debug\\Exception\\FatalErrorException)#%d (%d) {
  [\"message\":protected]=>
  string(179) \"Error: Class Symfony\\Component\\Debug\\Broken contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (JsonSerializable::jsonSerialize)\"
%a
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/debug/Tests/phpt/fatal_with_nested_handlers.phpt";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("--TEST--
Test catching fatal errors when handlers are nested
--FILE--
<?php

namespace Symfony\\Component\\Debug;

\$vendor = __DIR__;
while (!file_exists(\$vendor.'/vendor')) {
    \$vendor = \\dirname(\$vendor);
}
require \$vendor.'/vendor/autoload.php';

Debug::enable();
ini_set('display_errors', 0);

\$eHandler = set_error_handler('var_dump');
\$xHandler = set_exception_handler('var_dump');

var_dump([
    \$eHandler[0] === \$xHandler[0] ? 'Error and exception handlers do match' : 'Error and exception handlers are different',
]);

\$eHandler[0]->setExceptionHandler('print_r');

if (true) {
    class Broken implements \\JsonSerializable
    {
    }
}

?>
--EXPECTF--
array(1) {
  [0]=>
  string(37) \"Error and exception handlers do match\"
}
object(Symfony\\Component\\Debug\\Exception\\FatalErrorException)#%d (%d) {
  [\"message\":protected]=>
  string(179) \"Error: Class Symfony\\Component\\Debug\\Broken contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (JsonSerializable::jsonSerialize)\"
%a
}
", "vendor/symfony/debug/Tests/phpt/fatal_with_nested_handlers.phpt", "/var/www/public/DevLaon/templates/vendor/symfony/debug/Tests/phpt/fatal_with_nested_handlers.phpt");
    }
}
