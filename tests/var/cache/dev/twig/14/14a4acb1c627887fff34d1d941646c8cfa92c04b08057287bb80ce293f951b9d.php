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

/* vendor/bin/var-dump-server */
class __TwigTemplate_b3cce6eae3017d59f1b57e9ea96320a37d8092df4c0f32178953c1e1ca2dd92b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/bin/var-dump-server"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/bin/var-dump-server"));

        // line 1
        echo "#!/usr/bin/env php
<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Starts a dump server to collect and output dumps on a single place with multiple formats support.
 *
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */

use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\Console\\Application;
use Symfony\\Component\\Console\\Input\\ArgvInput;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Logger\\ConsoleLogger;
use Symfony\\Component\\Console\\Output\\ConsoleOutput;
use Symfony\\Component\\VarDumper\\Command\\ServerDumpCommand;
use Symfony\\Component\\VarDumper\\Server\\DumpServer;

function includeIfExists(string \$file): bool
{
    return file_exists(\$file) && include \$file;
}

if (
    !includeIfExists(__DIR__ . '/../../../../autoload.php') &&
    !includeIfExists(__DIR__ . '/../../vendor/autoload.php') &&
    !includeIfExists(__DIR__ . '/../../../../../../vendor/autoload.php')
) {
    fwrite(STDERR, 'Install dependencies using Composer.'.PHP_EOL);
    exit(1);
}

if (!class_exists(Application::class)) {
    fwrite(STDERR, 'You need the \"symfony/console\" component in order to run the VarDumper server.'.PHP_EOL);
    exit(1);
}

\$input = new ArgvInput();
\$output = new ConsoleOutput();
\$defaultHost = '127.0.0.1:9912';
\$host = \$input->getParameterOption(['--host'], \$_SERVER['VAR_DUMPER_SERVER'] ?? \$defaultHost, true);
\$logger = interface_exists(LoggerInterface::class) ? new ConsoleLogger(\$output->getErrorOutput()) : null;

\$app = new Application();

\$app->getDefinition()->addOption(
    new InputOption('--host', null, InputOption::VALUE_REQUIRED, 'The address the server should listen to', \$defaultHost)
);

\$app->add(\$command = new ServerDumpCommand(new DumpServer(\$host, \$logger)))
    ->getApplication()
    ->setDefaultCommand(\$command->getName(), true)
    ->run(\$input, \$output)
;
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/bin/var-dump-server";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("#!/usr/bin/env php
<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Starts a dump server to collect and output dumps on a single place with multiple formats support.
 *
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */

use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\Console\\Application;
use Symfony\\Component\\Console\\Input\\ArgvInput;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Logger\\ConsoleLogger;
use Symfony\\Component\\Console\\Output\\ConsoleOutput;
use Symfony\\Component\\VarDumper\\Command\\ServerDumpCommand;
use Symfony\\Component\\VarDumper\\Server\\DumpServer;

function includeIfExists(string \$file): bool
{
    return file_exists(\$file) && include \$file;
}

if (
    !includeIfExists(__DIR__ . '/../../../../autoload.php') &&
    !includeIfExists(__DIR__ . '/../../vendor/autoload.php') &&
    !includeIfExists(__DIR__ . '/../../../../../../vendor/autoload.php')
) {
    fwrite(STDERR, 'Install dependencies using Composer.'.PHP_EOL);
    exit(1);
}

if (!class_exists(Application::class)) {
    fwrite(STDERR, 'You need the \"symfony/console\" component in order to run the VarDumper server.'.PHP_EOL);
    exit(1);
}

\$input = new ArgvInput();
\$output = new ConsoleOutput();
\$defaultHost = '127.0.0.1:9912';
\$host = \$input->getParameterOption(['--host'], \$_SERVER['VAR_DUMPER_SERVER'] ?? \$defaultHost, true);
\$logger = interface_exists(LoggerInterface::class) ? new ConsoleLogger(\$output->getErrorOutput()) : null;

\$app = new Application();

\$app->getDefinition()->addOption(
    new InputOption('--host', null, InputOption::VALUE_REQUIRED, 'The address the server should listen to', \$defaultHost)
);

\$app->add(\$command = new ServerDumpCommand(new DumpServer(\$host, \$logger)))
    ->getApplication()
    ->setDefaultCommand(\$command->getName(), true)
    ->run(\$input, \$output)
;
", "vendor/bin/var-dump-server", "/var/www/public/DevLaon/templates/vendor/bin/var-dump-server");
    }
}
