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

/* vendor/symfony/flex/src/Command/DumpEnvCommand.php */
class __TwigTemplate_6dd9b7fd76de171daa9b9b3e3c3099754b1c432befd36ee0d1bd8adacbca214d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/flex/src/Command/DumpEnvCommand.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/flex/src/Command/DumpEnvCommand.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Flex\\Command;

use Composer\\Command\\BaseCommand;
use Composer\\Config;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Dotenv\\Dotenv;
use Symfony\\Flex\\Options;

class DumpEnvCommand extends BaseCommand
{
    private \$config;
    private \$options;

    public function __construct(Config \$config, Options \$options)
    {
        \$this->config = \$config;
        \$this->options = \$options;

        parent::__construct();
    }

    protected function configure()
    {
        \$this->setName('symfony:dump-env')
            ->setAliases(['dump-env'])
            ->setDescription('Compiles .env_GogolejokeVoice files to .env_GogolejokeVoice.local.php.')
            ->setDefinition([
                new InputArgument('env', InputArgument::REQUIRED, 'The application environment to dump .env_GogolejokeVoice files for - e.g. \"prod\".'),
            ])
            ->addOption('empty', null, InputOption::VALUE_NONE, 'Ignore the content of .env_GogolejokeVoice files')
        ;
    }

    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$_SERVER['APP_ENV'] = \$env = \$input->getArgument('env');
        \$path = \$this->options->get('root-dir').'/.env_GogolejokeVoice';

        \$vars = \$input->getOption('empty') ? ['APP_ENV' => \$env] : \$this->loadEnv(\$path, \$env);
        \$vars = var_export(\$vars, true);
        \$vars = <<<EOF
<?php

// This file was generated by running \"composer dump-env \$env\"

return \$vars;

EOF;
        file_put_contents(\$path.'.local.php', \$vars, LOCK_EX);

        \$this->getIO()->writeError('Successfully dumped .env_GogolejokeVoice files in <info>.env_GogolejokeVoice.local.php</>');
    }

    private function loadEnv(string \$path, string \$env): array
    {
        if (!file_exists(\$autoloadFile = \$this->config->get('vendor-dir').'/autoload.php')) {
            throw new \\RuntimeException(sprintf('Please run \"composer install\" before running this command: \"%s\" not found.', \$autoloadFile));
        }

        if (!class_exists(Dotenv::class)) {
            throw new \\RuntimeException('Please run \"composer require symfony/dotenv\" to load the \".env_GogolejokeVoice\" files configuring the application.');
        }

        \$globalsBackup = [\$_SERVER, \$_ENV];
        unset(\$_SERVER['APP_ENV']);
        \$_ENV = ['APP_ENV' => \$env];
        \$_SERVER['SYMFONY_DOTENV_VARS'] = implode(',', array_keys(\$_SERVER));
        putenv('SYMFONY_DOTENV_VARS='.\$_SERVER['SYMFONY_DOTENV_VARS']);

        try {
            \$dotenv = new Dotenv(false);

            if (method_exists(\$dotenv, 'loadEnv')) {
                \$dotenv->loadEnv(\$path);
            } else {
                // fallback code in case your Dotenv component is not 4.2 or higher (when loadEnv() was added)
                \$dotenv->load(file_exists(\$path) || !file_exists(\$p = \"\$path.dist\") ? \$path : \$p);

                if ('test' !== \$env && file_exists(\$p = \"\$path.local\")) {
                    \$dotenv->load(\$p);
                }

                if (file_exists(\$p = \"\$path.\$env\")) {
                    \$dotenv->load(\$p);
                }

                if (file_exists(\$p = \"\$path.\$env.local\")) {
                    \$dotenv->load(\$p);
                }
            }

            unset(\$_ENV['SYMFONY_DOTENV_VARS']);
            \$env = \$_ENV;
        } finally {
            list(\$_SERVER, \$_ENV) = \$globalsBackup;
        }

        return \$env;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/flex/src/Command/DumpEnvCommand.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Flex\\Command;

use Composer\\Command\\BaseCommand;
use Composer\\Config;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Dotenv\\Dotenv;
use Symfony\\Flex\\Options;

class DumpEnvCommand extends BaseCommand
{
    private \$config;
    private \$options;

    public function __construct(Config \$config, Options \$options)
    {
        \$this->config = \$config;
        \$this->options = \$options;

        parent::__construct();
    }

    protected function configure()
    {
        \$this->setName('symfony:dump-env')
            ->setAliases(['dump-env'])
            ->setDescription('Compiles .env_GogolejokeVoice files to .env_GogolejokeVoice.local.php.')
            ->setDefinition([
                new InputArgument('env', InputArgument::REQUIRED, 'The application environment to dump .env_GogolejokeVoice files for - e.g. \"prod\".'),
            ])
            ->addOption('empty', null, InputOption::VALUE_NONE, 'Ignore the content of .env_GogolejokeVoice files')
        ;
    }

    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$_SERVER['APP_ENV'] = \$env = \$input->getArgument('env');
        \$path = \$this->options->get('root-dir').'/.env_GogolejokeVoice';

        \$vars = \$input->getOption('empty') ? ['APP_ENV' => \$env] : \$this->loadEnv(\$path, \$env);
        \$vars = var_export(\$vars, true);
        \$vars = <<<EOF
<?php

// This file was generated by running \"composer dump-env \$env\"

return \$vars;

EOF;
        file_put_contents(\$path.'.local.php', \$vars, LOCK_EX);

        \$this->getIO()->writeError('Successfully dumped .env_GogolejokeVoice files in <info>.env_GogolejokeVoice.local.php</>');
    }

    private function loadEnv(string \$path, string \$env): array
    {
        if (!file_exists(\$autoloadFile = \$this->config->get('vendor-dir').'/autoload.php')) {
            throw new \\RuntimeException(sprintf('Please run \"composer install\" before running this command: \"%s\" not found.', \$autoloadFile));
        }

        if (!class_exists(Dotenv::class)) {
            throw new \\RuntimeException('Please run \"composer require symfony/dotenv\" to load the \".env_GogolejokeVoice\" files configuring the application.');
        }

        \$globalsBackup = [\$_SERVER, \$_ENV];
        unset(\$_SERVER['APP_ENV']);
        \$_ENV = ['APP_ENV' => \$env];
        \$_SERVER['SYMFONY_DOTENV_VARS'] = implode(',', array_keys(\$_SERVER));
        putenv('SYMFONY_DOTENV_VARS='.\$_SERVER['SYMFONY_DOTENV_VARS']);

        try {
            \$dotenv = new Dotenv(false);

            if (method_exists(\$dotenv, 'loadEnv')) {
                \$dotenv->loadEnv(\$path);
            } else {
                // fallback code in case your Dotenv component is not 4.2 or higher (when loadEnv() was added)
                \$dotenv->load(file_exists(\$path) || !file_exists(\$p = \"\$path.dist\") ? \$path : \$p);

                if ('test' !== \$env && file_exists(\$p = \"\$path.local\")) {
                    \$dotenv->load(\$p);
                }

                if (file_exists(\$p = \"\$path.\$env\")) {
                    \$dotenv->load(\$p);
                }

                if (file_exists(\$p = \"\$path.\$env.local\")) {
                    \$dotenv->load(\$p);
                }
            }

            unset(\$_ENV['SYMFONY_DOTENV_VARS']);
            \$env = \$_ENV;
        } finally {
            list(\$_SERVER, \$_ENV) = \$globalsBackup;
        }

        return \$env;
    }
}
", "vendor/symfony/flex/src/Command/DumpEnvCommand.php", "/var/www/public/DevLaon/templates/vendor/symfony/flex/src/Command/DumpEnvCommand.php");
    }
}