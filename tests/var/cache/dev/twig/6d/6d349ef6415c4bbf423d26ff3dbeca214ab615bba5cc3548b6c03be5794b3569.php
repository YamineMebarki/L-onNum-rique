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

/* vendor/symfony/flex/src/Command/SyncRecipesCommand.php */
class __TwigTemplate_f9b84b7cae27a401fc120c619283dc46e35055f249980908f9d70708e2232967 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/flex/src/Command/SyncRecipesCommand.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/flex/src/Command/SyncRecipesCommand.php"));

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
use Composer\\DependencyResolver\\Operation\\InstallOperation;
use Composer\\Factory;
use Symfony\\Component\\Console\\Exception\\RuntimeException;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Flex\\Event\\UpdateEvent;
use Symfony\\Flex\\Lock;

class SyncRecipesCommand extends BaseCommand
{
    private \$flex;
    private \$rootDir;

    public function __construct(/* cannot be type-hinted */ \$flex, string \$rootDir)
    {
        \$this->flex = \$flex;
        \$this->rootDir = \$rootDir;

        parent::__construct();
    }

    protected function configure()
    {
        \$this->setName('symfony:sync-recipes')
            ->setAliases(['sync-recipes', 'fix-recipes'])
            ->setDescription('Installs or reinstalls recipes for already installed packages.')
            ->addOption('force', null, InputOption::VALUE_NONE, 'Ignore the \"symfony.lock\" file and overwrite existing files')
        ;
    }

    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$win = '\\\\' === \\DIRECTORY_SEPARATOR;
        \$force = \$input->getOption('force');

        if (\$force && !@is_executable(strtok(exec(\$win ? 'where git' : 'command -v git'), PHP_EOL))) {
            throw new RuntimeException('Cannot run \"sync-recipes --force\": git not found.');
        }

        \$symfonyLock = new Lock(getenv('SYMFONY_LOCKFILE') ?: str_replace('composer.json', 'symfony.lock', Factory::getComposerFile()));
        \$composer = \$this->getComposer();
        \$locker = \$composer->getLocker();
        \$lockData = \$locker->getLockData();

        \$packages = [];
        foreach (\$lockData['packages'] as \$pkg) {
            if (\$force || !\$symfonyLock->has(\$pkg['name'])) {
                \$packages[] = \$pkg['name'];
            }
        }
        foreach (\$lockData['packages-dev'] as \$pkg) {
            if (\$force || !\$symfonyLock->has(\$pkg['name'])) {
                \$packages[] = \$pkg['name'];
            }
        }

        if (!\$packages) {
            return;
        }

        \$composer = \$this->getComposer();
        \$installedRepo = \$composer->getRepositoryManager()->getLocalRepository();
        \$io = \$this->getIO();

        \$operations = [];
        foreach (\$packages as \$package) {
            if (null === \$pkg = \$installedRepo->findPackage(\$package, '*')) {
                \$io->writeError(sprintf('<error>Package %s is not installed</>', \$package));

                return 1;
            }

            \$operations[] = new InstallOperation(\$pkg);
        }

        if (\$createEnvLocal = \$force && file_exists(\$this->rootDir.'/.env_GogolejokeVoice') && file_exists(\$this->rootDir.'/.env_GogolejokeVoice.dist') && !file_exists(\$this->rootDir.'/.env_GogolejokeVoice.local')) {
            rename(\$this->rootDir.'/.env_GogolejokeVoice', \$this->rootDir.'/.env_GogolejokeVoice.local');
            \$pipes = [];
            proc_close(proc_open(sprintf('git mv .env_GogolejokeVoice.dist .env_GogolejokeVoice > %s 2>&1 || %s .env_GogolejokeVoice.dist .env_GogolejokeVoice', \$win ? 'NUL' : '/dev/null', \$win ? 'rename' : 'mv'), \$pipes, \$pipes, \$this->rootDir));
            if (file_exists(\$this->rootDir.'/phpunit.xml.dist')) {
                touch(\$this->rootDir.'/.env_GogolejokeVoice.test');
            }
        }

        \$this->flex->update(new UpdateEvent(\$force), \$operations);

        if (\$force) {
            \$output = [
                '',
                '<bg=blue;fg=white>                                                    </>',
                '<bg=blue;fg=white> Config files are now reset to their initial state. </>',
                '<bg=blue;fg=white>                                                    </>',
                '',
                '  * Use <comment>git diff</comment> to inspect the changes.',
                '',
                '    Not all of the changes will be relevant to your app: you now',
                '    need to selectively add or revert them using e.g. a combination',
                '    of <comment>git add -p</> and <comment>git checkout -p</>',
                '',
            ];

            if (\$createEnvLocal) {
                \$output[] = '    Dotenv files have been renamed: .env_GogolejokeVoice -> .env_GogolejokeVoice.local and .env_GogolejokeVoice.dist -> .env_GogolejokeVoice';
                \$output[] = '    See https://symfony.com/doc/current/configuration/dot-env-changes.html';
                \$output[] = '';
            }

            \$output[] = '  * Use <comment>git checkout .</> to revert the changes.';
            \$output[] = '';

            if (\$createEnvLocal) {
                \$output[] = '    To revert the changes made to .env_GogolejokeVoice files, run';
                \$output[] = sprintf('    <comment>git mv %s.env %1\$s.env.dist</> && <comment>%s %1\$s.env.local %1\$s.env</>', '.' !== \$this->rootDir ? \$this->rootDir.'/' : '', \$win ? 'rename' : 'mv');
                \$output[] = '';
            }

            \$output[] = '    New (untracked) files can be inspected using <comment>git clean --dry-run</>';
            \$output[] = '    Add the new files you want to keep using <comment>git add</>';
            \$output[] = '    then delete the rest using <comment>git clean --force</>';
            \$output[] = '';

            \$io->write(\$output);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/flex/src/Command/SyncRecipesCommand.php";
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
use Composer\\DependencyResolver\\Operation\\InstallOperation;
use Composer\\Factory;
use Symfony\\Component\\Console\\Exception\\RuntimeException;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Flex\\Event\\UpdateEvent;
use Symfony\\Flex\\Lock;

class SyncRecipesCommand extends BaseCommand
{
    private \$flex;
    private \$rootDir;

    public function __construct(/* cannot be type-hinted */ \$flex, string \$rootDir)
    {
        \$this->flex = \$flex;
        \$this->rootDir = \$rootDir;

        parent::__construct();
    }

    protected function configure()
    {
        \$this->setName('symfony:sync-recipes')
            ->setAliases(['sync-recipes', 'fix-recipes'])
            ->setDescription('Installs or reinstalls recipes for already installed packages.')
            ->addOption('force', null, InputOption::VALUE_NONE, 'Ignore the \"symfony.lock\" file and overwrite existing files')
        ;
    }

    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$win = '\\\\' === \\DIRECTORY_SEPARATOR;
        \$force = \$input->getOption('force');

        if (\$force && !@is_executable(strtok(exec(\$win ? 'where git' : 'command -v git'), PHP_EOL))) {
            throw new RuntimeException('Cannot run \"sync-recipes --force\": git not found.');
        }

        \$symfonyLock = new Lock(getenv('SYMFONY_LOCKFILE') ?: str_replace('composer.json', 'symfony.lock', Factory::getComposerFile()));
        \$composer = \$this->getComposer();
        \$locker = \$composer->getLocker();
        \$lockData = \$locker->getLockData();

        \$packages = [];
        foreach (\$lockData['packages'] as \$pkg) {
            if (\$force || !\$symfonyLock->has(\$pkg['name'])) {
                \$packages[] = \$pkg['name'];
            }
        }
        foreach (\$lockData['packages-dev'] as \$pkg) {
            if (\$force || !\$symfonyLock->has(\$pkg['name'])) {
                \$packages[] = \$pkg['name'];
            }
        }

        if (!\$packages) {
            return;
        }

        \$composer = \$this->getComposer();
        \$installedRepo = \$composer->getRepositoryManager()->getLocalRepository();
        \$io = \$this->getIO();

        \$operations = [];
        foreach (\$packages as \$package) {
            if (null === \$pkg = \$installedRepo->findPackage(\$package, '*')) {
                \$io->writeError(sprintf('<error>Package %s is not installed</>', \$package));

                return 1;
            }

            \$operations[] = new InstallOperation(\$pkg);
        }

        if (\$createEnvLocal = \$force && file_exists(\$this->rootDir.'/.env_GogolejokeVoice') && file_exists(\$this->rootDir.'/.env_GogolejokeVoice.dist') && !file_exists(\$this->rootDir.'/.env_GogolejokeVoice.local')) {
            rename(\$this->rootDir.'/.env_GogolejokeVoice', \$this->rootDir.'/.env_GogolejokeVoice.local');
            \$pipes = [];
            proc_close(proc_open(sprintf('git mv .env_GogolejokeVoice.dist .env_GogolejokeVoice > %s 2>&1 || %s .env_GogolejokeVoice.dist .env_GogolejokeVoice', \$win ? 'NUL' : '/dev/null', \$win ? 'rename' : 'mv'), \$pipes, \$pipes, \$this->rootDir));
            if (file_exists(\$this->rootDir.'/phpunit.xml.dist')) {
                touch(\$this->rootDir.'/.env_GogolejokeVoice.test');
            }
        }

        \$this->flex->update(new UpdateEvent(\$force), \$operations);

        if (\$force) {
            \$output = [
                '',
                '<bg=blue;fg=white>                                                    </>',
                '<bg=blue;fg=white> Config files are now reset to their initial state. </>',
                '<bg=blue;fg=white>                                                    </>',
                '',
                '  * Use <comment>git diff</comment> to inspect the changes.',
                '',
                '    Not all of the changes will be relevant to your app: you now',
                '    need to selectively add or revert them using e.g. a combination',
                '    of <comment>git add -p</> and <comment>git checkout -p</>',
                '',
            ];

            if (\$createEnvLocal) {
                \$output[] = '    Dotenv files have been renamed: .env_GogolejokeVoice -> .env_GogolejokeVoice.local and .env_GogolejokeVoice.dist -> .env_GogolejokeVoice';
                \$output[] = '    See https://symfony.com/doc/current/configuration/dot-env-changes.html';
                \$output[] = '';
            }

            \$output[] = '  * Use <comment>git checkout .</> to revert the changes.';
            \$output[] = '';

            if (\$createEnvLocal) {
                \$output[] = '    To revert the changes made to .env_GogolejokeVoice files, run';
                \$output[] = sprintf('    <comment>git mv %s.env %1\$s.env.dist</> && <comment>%s %1\$s.env.local %1\$s.env</>', '.' !== \$this->rootDir ? \$this->rootDir.'/' : '', \$win ? 'rename' : 'mv');
                \$output[] = '';
            }

            \$output[] = '    New (untracked) files can be inspected using <comment>git clean --dry-run</>';
            \$output[] = '    Add the new files you want to keep using <comment>git add</>';
            \$output[] = '    then delete the rest using <comment>git clean --force</>';
            \$output[] = '';

            \$io->write(\$output);
        }
    }
}
", "vendor/symfony/flex/src/Command/SyncRecipesCommand.php", "/var/www/public/DevLaon/templates/vendor/symfony/flex/src/Command/SyncRecipesCommand.php");
    }
}
