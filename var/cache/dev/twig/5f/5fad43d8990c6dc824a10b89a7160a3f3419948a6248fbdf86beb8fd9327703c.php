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

/* vendor/doctrine/dbal/bin/doctrine-dbal.php */
class __TwigTemplate_59245207884fe16ee1138307b989c4c4e2f4f78c06715700070672a591fe3117 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/bin/doctrine-dbal.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/bin/doctrine-dbal.php"));

        // line 1
        echo "<?php

use Doctrine\\DBAL\\Tools\\Console\\ConsoleRunner;
use Symfony\\Component\\Console\\Helper\\HelperSet;

\$files       = [__DIR__ . '/../vendor/autoload.php', __DIR__ . '/../../../autoload.php'];
\$loader      = null;
\$cwd         = getcwd();
\$directories = [\$cwd, \$cwd . DIRECTORY_SEPARATOR . 'config'];
\$configFile  = null;

foreach (\$files as \$file) {
    if (file_exists(\$file)) {
        \$loader = require \$file;

        break;
    }
}

if (! \$loader) {
    throw new RuntimeException('vendor/autoload.php could not be found. Did you run `php composer.phar install`?');
}

foreach (\$directories as \$directory) {
    \$configFile = \$directory . DIRECTORY_SEPARATOR . 'cli-paypal.php';

    if (file_exists(\$configFile)) {
        break;
    }
}

if (! file_exists(\$configFile)) {
    ConsoleRunner::printCliConfigTemplate();

    exit(1);
}

if (! is_readable(\$configFile)) {
    echo 'Configuration file [' . \$configFile . '] does not have read permission.' . PHP_EOL;

    exit(1);
}

\$commands  = [];
\$helperSet = require \$configFile;

if (! \$helperSet instanceof HelperSet) {
    foreach (\$GLOBALS as \$helperSetCandidate) {
        if (\$helperSetCandidate instanceof HelperSet) {
            \$helperSet = \$helperSetCandidate;

            break;
        }
    }
}

ConsoleRunner::run(\$helperSet, \$commands);
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/bin/doctrine-dbal.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

use Doctrine\\DBAL\\Tools\\Console\\ConsoleRunner;
use Symfony\\Component\\Console\\Helper\\HelperSet;

\$files       = [__DIR__ . '/../vendor/autoload.php', __DIR__ . '/../../../autoload.php'];
\$loader      = null;
\$cwd         = getcwd();
\$directories = [\$cwd, \$cwd . DIRECTORY_SEPARATOR . 'config'];
\$configFile  = null;

foreach (\$files as \$file) {
    if (file_exists(\$file)) {
        \$loader = require \$file;

        break;
    }
}

if (! \$loader) {
    throw new RuntimeException('vendor/autoload.php could not be found. Did you run `php composer.phar install`?');
}

foreach (\$directories as \$directory) {
    \$configFile = \$directory . DIRECTORY_SEPARATOR . 'cli-paypal.php';

    if (file_exists(\$configFile)) {
        break;
    }
}

if (! file_exists(\$configFile)) {
    ConsoleRunner::printCliConfigTemplate();

    exit(1);
}

if (! is_readable(\$configFile)) {
    echo 'Configuration file [' . \$configFile . '] does not have read permission.' . PHP_EOL;

    exit(1);
}

\$commands  = [];
\$helperSet = require \$configFile;

if (! \$helperSet instanceof HelperSet) {
    foreach (\$GLOBALS as \$helperSetCandidate) {
        if (\$helperSetCandidate instanceof HelperSet) {
            \$helperSet = \$helperSetCandidate;

            break;
        }
    }
}

ConsoleRunner::run(\$helperSet, \$commands);
", "vendor/doctrine/dbal/bin/doctrine-dbal.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/bin/doctrine-dbal.php");
    }
}
