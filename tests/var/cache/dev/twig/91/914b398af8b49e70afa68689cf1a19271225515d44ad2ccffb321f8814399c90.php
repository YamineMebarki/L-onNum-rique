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

/* vendor/symfony/flex/tests/bootstrap.php */
class __TwigTemplate_92340ec967b6d6955e402c5511089a2032b0defe227222699b101c693c786421 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/flex/tests/bootstrap.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/flex/tests/bootstrap.php"));

        // line 1
        echo "<?php

require __DIR__.'/../vendor/autoload.php';

define('FLEX_TEST_DIR', dirname(__DIR__).'/build');

if (is_dir(\$buildDir = FLEX_TEST_DIR)) {
    \$files = new \\RecursiveIteratorIterator(
        new \\RecursiveDirectoryIterator(\$buildDir, \\RecursiveDirectoryIterator::SKIP_DOTS),
        \\RecursiveIteratorIterator::CHILD_FIRST
    );

    foreach (\$files as \$fileinfo) {
        (\$fileinfo->isDir() ? 'rmdir' : 'unlink')(\$fileinfo->getRealPath());
    }

    rmdir(\$buildDir);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/flex/tests/bootstrap.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

require __DIR__.'/../vendor/autoload.php';

define('FLEX_TEST_DIR', dirname(__DIR__).'/build');

if (is_dir(\$buildDir = FLEX_TEST_DIR)) {
    \$files = new \\RecursiveIteratorIterator(
        new \\RecursiveDirectoryIterator(\$buildDir, \\RecursiveDirectoryIterator::SKIP_DOTS),
        \\RecursiveIteratorIterator::CHILD_FIRST
    );

    foreach (\$files as \$fileinfo) {
        (\$fileinfo->isDir() ? 'rmdir' : 'unlink')(\$fileinfo->getRealPath());
    }

    rmdir(\$buildDir);
}
", "vendor/symfony/flex/tests/bootstrap.php", "/var/www/public/DevLaon/templates/vendor/symfony/flex/tests/bootstrap.php");
    }
}
