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

/* bin/console */
class __TwigTemplate_e4a751532fc919dcff155dea7c27fad11bd3e0ccce1eafa22753e9a1e9d7d6c5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bin/console"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bin/console"));

        // line 1
        echo "#!/usr/bin/env php
<?php

use App\\Kernel;
use Symfony\\Bundle\\FrameworkBundle\\Console\\Application;
use Symfony\\Component\\Console\\Input\\ArgvInput;
use Symfony\\Component\\Debug\\Debug;

if (false === in_array(\\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true)) {
    echo 'Warning: The console should be invoked via the CLI version of PHP, not the '.\\PHP_SAPI.' SAPI'.\\PHP_EOL;
}

set_time_limit(0);

require dirname(__DIR__).'/vendor/autoload.php';

if (!class_exists(Application::class)) {
    throw new RuntimeException('You need to add \"symfony/framework-bundle\" as a Composer dependency.');
}

\$input = new ArgvInput();
if (null !== \$env = \$input->getParameterOption(['--env', '-e'], null, true)) {
    putenv('APP_ENV='.\$_SERVER['APP_ENV'] = \$_ENV['APP_ENV'] = \$env);
}

if (\$input->hasParameterOption('--no-debug', true)) {
    putenv('APP_DEBUG='.\$_SERVER['APP_DEBUG'] = \$_ENV['APP_DEBUG'] = '0');
}

require dirname(__DIR__).'/config/bootstrap.php';

if (\$_SERVER['APP_DEBUG']) {
    umask(0000);

    if (class_exists(Debug::class)) {
        Debug::enable();
    }
}

\$kernel = new Kernel(\$_SERVER['APP_ENV'], (bool) \$_SERVER['APP_DEBUG']);
\$application = new Application(\$kernel);
\$application->run(\$input);
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "bin/console";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("#!/usr/bin/env php
<?php

use App\\Kernel;
use Symfony\\Bundle\\FrameworkBundle\\Console\\Application;
use Symfony\\Component\\Console\\Input\\ArgvInput;
use Symfony\\Component\\Debug\\Debug;

if (false === in_array(\\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true)) {
    echo 'Warning: The console should be invoked via the CLI version of PHP, not the '.\\PHP_SAPI.' SAPI'.\\PHP_EOL;
}

set_time_limit(0);

require dirname(__DIR__).'/vendor/autoload.php';

if (!class_exists(Application::class)) {
    throw new RuntimeException('You need to add \"symfony/framework-bundle\" as a Composer dependency.');
}

\$input = new ArgvInput();
if (null !== \$env = \$input->getParameterOption(['--env', '-e'], null, true)) {
    putenv('APP_ENV='.\$_SERVER['APP_ENV'] = \$_ENV['APP_ENV'] = \$env);
}

if (\$input->hasParameterOption('--no-debug', true)) {
    putenv('APP_DEBUG='.\$_SERVER['APP_DEBUG'] = \$_ENV['APP_DEBUG'] = '0');
}

require dirname(__DIR__).'/config/bootstrap.php';

if (\$_SERVER['APP_DEBUG']) {
    umask(0000);

    if (class_exists(Debug::class)) {
        Debug::enable();
    }
}

\$kernel = new Kernel(\$_SERVER['APP_ENV'], (bool) \$_SERVER['APP_DEBUG']);
\$application = new Application(\$kernel);
\$application->run(\$input);
", "bin/console", "/var/www/public/DevLaon/templates/bin/console");
    }
}
