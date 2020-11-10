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

/* vendor/swiftmailer/swiftmailer/tests/bootstrap.php */
class __TwigTemplate_56c2591b7c6258dcf58a3d04ced39258dc72d2fce2e149483b31d6f02f5cf0ba extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/bootstrap.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/bootstrap.php"));

        // line 1
        echo "<?php

require_once dirname(__DIR__).'/vendor/autoload.php';

// Disable garbage collector to prevent segfaults
gc_disable();

set_include_path(get_include_path().PATH_SEPARATOR.dirname(__DIR__).'/lib');

Mockery::getConfiguration()->allowMockingNonExistentMethods(true);

if (is_file(__DIR__.'/acceptance.conf.php')) {
    require_once __DIR__.'/acceptance.conf.php';
}
if (is_file(__DIR__.'/smoke.conf.php')) {
    require_once __DIR__.'/smoke.conf.php';
}
require_once __DIR__.'/StreamCollector.php';
require_once __DIR__.'/IdenticalBinaryConstraint.php';
require_once __DIR__.'/SwiftMailerTestCase.php';
require_once __DIR__.'/SwiftMailerSmokeTestCase.php';
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/bootstrap.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

require_once dirname(__DIR__).'/vendor/autoload.php';

// Disable garbage collector to prevent segfaults
gc_disable();

set_include_path(get_include_path().PATH_SEPARATOR.dirname(__DIR__).'/lib');

Mockery::getConfiguration()->allowMockingNonExistentMethods(true);

if (is_file(__DIR__.'/acceptance.conf.php')) {
    require_once __DIR__.'/acceptance.conf.php';
}
if (is_file(__DIR__.'/smoke.conf.php')) {
    require_once __DIR__.'/smoke.conf.php';
}
require_once __DIR__.'/StreamCollector.php';
require_once __DIR__.'/IdenticalBinaryConstraint.php';
require_once __DIR__.'/SwiftMailerTestCase.php';
require_once __DIR__.'/SwiftMailerSmokeTestCase.php';
", "vendor/swiftmailer/swiftmailer/tests/bootstrap.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/bootstrap.php");
    }
}
