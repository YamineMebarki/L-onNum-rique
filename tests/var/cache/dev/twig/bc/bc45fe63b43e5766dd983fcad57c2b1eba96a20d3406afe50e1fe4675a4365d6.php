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

/* vendor/symfony/framework-bundle/Command/AboutCommand.php */
class __TwigTemplate_44e5d7129acbb5c2ca1f436455697908cf1083efe840a4a9dda729d82e3c4359 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Command/AboutCommand.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Command/AboutCommand.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Command;

use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Helper\\Helper;
use Symfony\\Component\\Console\\Helper\\TableSeparator;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;
use Symfony\\Component\\HttpKernel\\Kernel;
use Symfony\\Component\\HttpKernel\\KernelInterface;

/**
 * A console command to display information about the current installation.
 *
 * @author Roland Franssen <franssen.roland@gmail.com>
 *
 * @final
 */
class AboutCommand extends Command
{
    protected static \$defaultName = 'about';

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this
            ->setDescription('Displays information about the current project')
            ->setHelp(<<<'EOT'
The <info>%command.name%</info> command displays information about the current Symfony project.

The <info>PHP</info> section displays important configuration that could affect your application. The values might
be different between web and CLI.

The <info>Environment</info> section displays the current environment variables managed by Symfony Dotenv. It will not
be shown if no variables were found. The values might be different between web and CLI.
EOT
            )
        ;
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$io = new SymfonyStyle(\$input, \$output);

        /** @var KernelInterface \$kernel */
        \$kernel = \$this->getApplication()->getKernel();

        \$rows = [
            ['<info>Symfony</>'],
            new TableSeparator(),
            ['Version', Kernel::VERSION],
            ['End of maintenance', Kernel::END_OF_MAINTENANCE.(self::isExpired(Kernel::END_OF_MAINTENANCE) ? ' <error>Expired</>' : '')],
            ['End of life', Kernel::END_OF_LIFE.(self::isExpired(Kernel::END_OF_LIFE) ? ' <error>Expired</>' : '')],
            new TableSeparator(),
            ['<info>Kernel</>'],
            new TableSeparator(),
            ['Type', \\get_class(\$kernel)],
            ['Environment', \$kernel->getEnvironment()],
            ['Debug', \$kernel->isDebug() ? 'true' : 'false'],
            ['Charset', \$kernel->getCharset()],
            ['Cache directory', self::formatPath(\$kernel->getCacheDir(), \$kernel->getProjectDir()).' (<comment>'.self::formatFileSize(\$kernel->getCacheDir()).'</>)'],
            ['Log directory', self::formatPath(\$kernel->getLogDir(), \$kernel->getProjectDir()).' (<comment>'.self::formatFileSize(\$kernel->getLogDir()).'</>)'],
            new TableSeparator(),
            ['<info>PHP</>'],
            new TableSeparator(),
            ['Version', PHP_VERSION],
            ['Architecture', (PHP_INT_SIZE * 8).' bits'],
            ['Intl locale', class_exists('Locale', false) && \\Locale::getDefault() ? \\Locale::getDefault() : 'n/a'],
            ['Timezone', date_default_timezone_get().' (<comment>'.(new \\DateTime())->format(\\DateTime::W3C).'</>)'],
            ['OPcache', \\extension_loaded('Zend OPcache') && filter_var(ini_get('opcache.enable'), FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false'],
            ['APCu', \\extension_loaded('apcu') && filter_var(ini_get('apc.enabled'), FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false'],
            ['Xdebug', \\extension_loaded('xdebug') ? 'true' : 'false'],
        ];

        if (\$dotenv = self::getDotenvVars()) {
            \$rows = array_merge(\$rows, [
                new TableSeparator(),
                ['<info>Environment (.env_GogolejokeVoice)</>'],
                new TableSeparator(),
            ], array_map(function (\$value, \$name) {
                return [\$name, \$value];
            }, \$dotenv, array_keys(\$dotenv)));
        }

        \$io->table([], \$rows);
    }

    private static function formatPath(string \$path, string \$baseDir): string
    {
        return preg_replace('~^'.preg_quote(\$baseDir, '~').'~', '.', \$path);
    }

    private static function formatFileSize(string \$path): string
    {
        if (is_file(\$path)) {
            \$size = filesize(\$path) ?: 0;
        } else {
            \$size = 0;
            foreach (new \\RecursiveIteratorIterator(new \\RecursiveDirectoryIterator(\$path, \\RecursiveDirectoryIterator::SKIP_DOTS | \\RecursiveDirectoryIterator::FOLLOW_SYMLINKS)) as \$file) {
                \$size += \$file->getSize();
            }
        }

        return Helper::formatMemory(\$size);
    }

    private static function isExpired(string \$date): bool
    {
        \$date = \\DateTime::createFromFormat('m/Y', \$date);

        return false !== \$date && new \\DateTime() > \$date->modify('last day of this month 23:59:59');
    }

    private static function getDotenvVars(): array
    {
        \$vars = [];
        foreach (explode(',', \$_SERVER['SYMFONY_DOTENV_VARS'] ?? \$_ENV['SYMFONY_DOTENV_VARS'] ?? '') as \$name) {
            if ('' !== \$name && isset(\$_ENV[\$name])) {
                \$vars[\$name] = \$_ENV[\$name];
            }
        }

        return \$vars;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Command/AboutCommand.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Command;

use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Helper\\Helper;
use Symfony\\Component\\Console\\Helper\\TableSeparator;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;
use Symfony\\Component\\HttpKernel\\Kernel;
use Symfony\\Component\\HttpKernel\\KernelInterface;

/**
 * A console command to display information about the current installation.
 *
 * @author Roland Franssen <franssen.roland@gmail.com>
 *
 * @final
 */
class AboutCommand extends Command
{
    protected static \$defaultName = 'about';

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this
            ->setDescription('Displays information about the current project')
            ->setHelp(<<<'EOT'
The <info>%command.name%</info> command displays information about the current Symfony project.

The <info>PHP</info> section displays important configuration that could affect your application. The values might
be different between web and CLI.

The <info>Environment</info> section displays the current environment variables managed by Symfony Dotenv. It will not
be shown if no variables were found. The values might be different between web and CLI.
EOT
            )
        ;
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$io = new SymfonyStyle(\$input, \$output);

        /** @var KernelInterface \$kernel */
        \$kernel = \$this->getApplication()->getKernel();

        \$rows = [
            ['<info>Symfony</>'],
            new TableSeparator(),
            ['Version', Kernel::VERSION],
            ['End of maintenance', Kernel::END_OF_MAINTENANCE.(self::isExpired(Kernel::END_OF_MAINTENANCE) ? ' <error>Expired</>' : '')],
            ['End of life', Kernel::END_OF_LIFE.(self::isExpired(Kernel::END_OF_LIFE) ? ' <error>Expired</>' : '')],
            new TableSeparator(),
            ['<info>Kernel</>'],
            new TableSeparator(),
            ['Type', \\get_class(\$kernel)],
            ['Environment', \$kernel->getEnvironment()],
            ['Debug', \$kernel->isDebug() ? 'true' : 'false'],
            ['Charset', \$kernel->getCharset()],
            ['Cache directory', self::formatPath(\$kernel->getCacheDir(), \$kernel->getProjectDir()).' (<comment>'.self::formatFileSize(\$kernel->getCacheDir()).'</>)'],
            ['Log directory', self::formatPath(\$kernel->getLogDir(), \$kernel->getProjectDir()).' (<comment>'.self::formatFileSize(\$kernel->getLogDir()).'</>)'],
            new TableSeparator(),
            ['<info>PHP</>'],
            new TableSeparator(),
            ['Version', PHP_VERSION],
            ['Architecture', (PHP_INT_SIZE * 8).' bits'],
            ['Intl locale', class_exists('Locale', false) && \\Locale::getDefault() ? \\Locale::getDefault() : 'n/a'],
            ['Timezone', date_default_timezone_get().' (<comment>'.(new \\DateTime())->format(\\DateTime::W3C).'</>)'],
            ['OPcache', \\extension_loaded('Zend OPcache') && filter_var(ini_get('opcache.enable'), FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false'],
            ['APCu', \\extension_loaded('apcu') && filter_var(ini_get('apc.enabled'), FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false'],
            ['Xdebug', \\extension_loaded('xdebug') ? 'true' : 'false'],
        ];

        if (\$dotenv = self::getDotenvVars()) {
            \$rows = array_merge(\$rows, [
                new TableSeparator(),
                ['<info>Environment (.env_GogolejokeVoice)</>'],
                new TableSeparator(),
            ], array_map(function (\$value, \$name) {
                return [\$name, \$value];
            }, \$dotenv, array_keys(\$dotenv)));
        }

        \$io->table([], \$rows);
    }

    private static function formatPath(string \$path, string \$baseDir): string
    {
        return preg_replace('~^'.preg_quote(\$baseDir, '~').'~', '.', \$path);
    }

    private static function formatFileSize(string \$path): string
    {
        if (is_file(\$path)) {
            \$size = filesize(\$path) ?: 0;
        } else {
            \$size = 0;
            foreach (new \\RecursiveIteratorIterator(new \\RecursiveDirectoryIterator(\$path, \\RecursiveDirectoryIterator::SKIP_DOTS | \\RecursiveDirectoryIterator::FOLLOW_SYMLINKS)) as \$file) {
                \$size += \$file->getSize();
            }
        }

        return Helper::formatMemory(\$size);
    }

    private static function isExpired(string \$date): bool
    {
        \$date = \\DateTime::createFromFormat('m/Y', \$date);

        return false !== \$date && new \\DateTime() > \$date->modify('last day of this month 23:59:59');
    }

    private static function getDotenvVars(): array
    {
        \$vars = [];
        foreach (explode(',', \$_SERVER['SYMFONY_DOTENV_VARS'] ?? \$_ENV['SYMFONY_DOTENV_VARS'] ?? '') as \$name) {
            if ('' !== \$name && isset(\$_ENV[\$name])) {
                \$vars[\$name] = \$_ENV[\$name];
            }
        }

        return \$vars;
    }
}
", "vendor/symfony/framework-bundle/Command/AboutCommand.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Command/AboutCommand.php");
    }
}
