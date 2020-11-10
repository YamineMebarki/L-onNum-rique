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

/* bin/phpunit */
class __TwigTemplate_a0294aeda844c62e408d4ffad442ecde3406cdcee1fe3d516676fa67ba097de6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bin/phpunit"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bin/phpunit"));

        // line 1
        echo "#!/usr/bin/env php
<?php

if (!file_exists(dirname(__DIR__).'/vendor/symfony/phpunit-bridge/bin/simple-phpunit.php')) {
    echo \"Unable to find the `simple-phpunit.php` script in `vendor/symfony/phpunit-bridge/bin/`.\\n\";
    exit(1);
}

if (false === getenv('SYMFONY_PHPUNIT_DIR')) {
    putenv('SYMFONY_PHPUNIT_DIR='.__DIR__.'/.phpunit');
}

require dirname(__DIR__).'/vendor/symfony/phpunit-bridge/bin/simple-phpunit.php';
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "bin/phpunit";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("#!/usr/bin/env php
<?php

if (!file_exists(dirname(__DIR__).'/vendor/symfony/phpunit-bridge/bin/simple-phpunit.php')) {
    echo \"Unable to find the `simple-phpunit.php` script in `vendor/symfony/phpunit-bridge/bin/`.\\n\";
    exit(1);
}

if (false === getenv('SYMFONY_PHPUNIT_DIR')) {
    putenv('SYMFONY_PHPUNIT_DIR='.__DIR__.'/.phpunit');
}

require dirname(__DIR__).'/vendor/symfony/phpunit-bridge/bin/simple-phpunit.php';
", "bin/phpunit", "/var/www/public/DevLaon/templates/bin/phpunit");
    }
}
