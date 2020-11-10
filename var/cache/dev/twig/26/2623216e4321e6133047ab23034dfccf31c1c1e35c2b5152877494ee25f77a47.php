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

/* vendor/symfony/flex/src/Command/UnpackCommand.php */
class __TwigTemplate_a7631584f6171a4acd119440f75abeaea6b0c0b77da778ac60c895a9b9b1aa51 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/flex/src/Command/UnpackCommand.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/flex/src/Command/UnpackCommand.php"));

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
use Composer\\Config\\JsonConfigSource;
use Composer\\Factory;
use Composer\\Installer;
use Composer\\Json\\JsonFile;
use Composer\\Package\\Locker;
use Composer\\Package\\Version\\VersionParser;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Flex\\PackageResolver;
use Symfony\\Flex\\Unpack\\Operation;
use Symfony\\Flex\\Unpacker;

class UnpackCommand extends BaseCommand
{
    public function __construct(PackageResolver \$resolver)
    {
        \$this->resolver = \$resolver;

        parent::__construct();
    }

    protected function configure()
    {
        \$this->setName('symfony:unpack')
            ->setAliases(['unpack'])
            ->setDescription('Unpacks a Symfony pack.')
            ->setDefinition([
                new InputArgument('packages', InputArgument::IS_ARRAY | InputArgument::REQUIRED, 'Installed packages to unpack.'),
                new InputOption('sort-packages', null, InputOption::VALUE_NONE, 'Sorts packages'),
            ])
        ;
    }

    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$composer = \$this->getComposer();
        \$packages = \$this->resolver->resolve(\$input->getArgument('packages'), true);
        \$io = \$this->getIO();
        \$json = new JsonFile(Factory::getComposerFile());
        \$manipulator = new JsonConfigSource(\$json);
        \$locker = \$composer->getLocker();
        \$lockData = \$locker->getLockData();
        \$installedRepo = \$composer->getRepositoryManager()->getLocalRepository();
        \$versionParser = new VersionParser();

        \$op = new Operation(true, \$input->getOption('sort-packages') || \$composer->getConfig()->get('sort-packages'));
        foreach (\$versionParser->parseNameVersionPairs(\$packages) as \$package) {
            if (null === \$pkg = \$installedRepo->findPackage(\$package['name'], '*')) {
                \$io->writeError(sprintf('<error>Package %s is not installed</>', \$package['name']));

                return 1;
            }

            \$dev = false;
            foreach (\$lockData['packages-dev'] as \$p) {
                if (\$package['name'] === \$p['name']) {
                    \$dev = true;

                    break;
                }
            }

            \$op->addPackage(\$pkg->getName(), \$pkg->getVersion(), \$dev);
        }

        \$unpacker = new Unpacker(\$composer, \$this->resolver);
        \$result = \$unpacker->unpack(\$op);

        // remove the packages themselves
        if (!\$result->getUnpacked()) {
            \$io->writeError('<info>Nothing to unpack</>');

            return;
        }

        foreach (\$result->getUnpacked() as \$pkg) {
            \$io->writeError(sprintf('<info>Unpacked %s dependencies</>', \$pkg->getName()));
        }

        foreach (\$result->getUnpacked() as \$package) {
            \$manipulator->removeLink('require-dev', \$package->getName());
            foreach (\$lockData['packages-dev'] as \$i => \$pkg) {
                if (\$package->getName() === \$pkg['name']) {
                    unset(\$lockData['packages-dev'][\$i]);
                }
            }
            \$manipulator->removeLink('require', \$package->getName());
            foreach (\$lockData['packages'] as \$i => \$pkg) {
                if (\$package->getName() === \$pkg['name']) {
                    unset(\$lockData['packages'][\$i]);
                }
            }
        }
        \$lockData['packages'] = array_values(\$lockData['packages']);
        \$lockData['packages-dev'] = array_values(\$lockData['packages-dev']);
        \$lockData['content-hash'] = \$locker->getContentHash(file_get_contents(\$json->getPath()));
        \$lockFile = new JsonFile(substr(\$json->getPath(), 0, -4).'lock', null, \$io);
        \$lockFile->write(\$lockData);

        // force removal of files under vendor/
        \$locker = new Locker(\$io, \$lockFile, \$composer->getRepositoryManager(), \$composer->getInstallationManager(), file_get_contents(\$json->getPath()));
        \$composer->setLocker(\$locker);
        \$install = Installer::create(\$io, \$composer);
        \$install
            ->setDevMode(true)
            ->setDumpAutoloader(false)
            ->setRunScripts(false)
            ->setSkipSuggest(true)
            ->setIgnorePlatformRequirements(true)
        ;

        return \$install->run();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/flex/src/Command/UnpackCommand.php";
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
use Composer\\Config\\JsonConfigSource;
use Composer\\Factory;
use Composer\\Installer;
use Composer\\Json\\JsonFile;
use Composer\\Package\\Locker;
use Composer\\Package\\Version\\VersionParser;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Flex\\PackageResolver;
use Symfony\\Flex\\Unpack\\Operation;
use Symfony\\Flex\\Unpacker;

class UnpackCommand extends BaseCommand
{
    public function __construct(PackageResolver \$resolver)
    {
        \$this->resolver = \$resolver;

        parent::__construct();
    }

    protected function configure()
    {
        \$this->setName('symfony:unpack')
            ->setAliases(['unpack'])
            ->setDescription('Unpacks a Symfony pack.')
            ->setDefinition([
                new InputArgument('packages', InputArgument::IS_ARRAY | InputArgument::REQUIRED, 'Installed packages to unpack.'),
                new InputOption('sort-packages', null, InputOption::VALUE_NONE, 'Sorts packages'),
            ])
        ;
    }

    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$composer = \$this->getComposer();
        \$packages = \$this->resolver->resolve(\$input->getArgument('packages'), true);
        \$io = \$this->getIO();
        \$json = new JsonFile(Factory::getComposerFile());
        \$manipulator = new JsonConfigSource(\$json);
        \$locker = \$composer->getLocker();
        \$lockData = \$locker->getLockData();
        \$installedRepo = \$composer->getRepositoryManager()->getLocalRepository();
        \$versionParser = new VersionParser();

        \$op = new Operation(true, \$input->getOption('sort-packages') || \$composer->getConfig()->get('sort-packages'));
        foreach (\$versionParser->parseNameVersionPairs(\$packages) as \$package) {
            if (null === \$pkg = \$installedRepo->findPackage(\$package['name'], '*')) {
                \$io->writeError(sprintf('<error>Package %s is not installed</>', \$package['name']));

                return 1;
            }

            \$dev = false;
            foreach (\$lockData['packages-dev'] as \$p) {
                if (\$package['name'] === \$p['name']) {
                    \$dev = true;

                    break;
                }
            }

            \$op->addPackage(\$pkg->getName(), \$pkg->getVersion(), \$dev);
        }

        \$unpacker = new Unpacker(\$composer, \$this->resolver);
        \$result = \$unpacker->unpack(\$op);

        // remove the packages themselves
        if (!\$result->getUnpacked()) {
            \$io->writeError('<info>Nothing to unpack</>');

            return;
        }

        foreach (\$result->getUnpacked() as \$pkg) {
            \$io->writeError(sprintf('<info>Unpacked %s dependencies</>', \$pkg->getName()));
        }

        foreach (\$result->getUnpacked() as \$package) {
            \$manipulator->removeLink('require-dev', \$package->getName());
            foreach (\$lockData['packages-dev'] as \$i => \$pkg) {
                if (\$package->getName() === \$pkg['name']) {
                    unset(\$lockData['packages-dev'][\$i]);
                }
            }
            \$manipulator->removeLink('require', \$package->getName());
            foreach (\$lockData['packages'] as \$i => \$pkg) {
                if (\$package->getName() === \$pkg['name']) {
                    unset(\$lockData['packages'][\$i]);
                }
            }
        }
        \$lockData['packages'] = array_values(\$lockData['packages']);
        \$lockData['packages-dev'] = array_values(\$lockData['packages-dev']);
        \$lockData['content-hash'] = \$locker->getContentHash(file_get_contents(\$json->getPath()));
        \$lockFile = new JsonFile(substr(\$json->getPath(), 0, -4).'lock', null, \$io);
        \$lockFile->write(\$lockData);

        // force removal of files under vendor/
        \$locker = new Locker(\$io, \$lockFile, \$composer->getRepositoryManager(), \$composer->getInstallationManager(), file_get_contents(\$json->getPath()));
        \$composer->setLocker(\$locker);
        \$install = Installer::create(\$io, \$composer);
        \$install
            ->setDevMode(true)
            ->setDumpAutoloader(false)
            ->setRunScripts(false)
            ->setSkipSuggest(true)
            ->setIgnorePlatformRequirements(true)
        ;

        return \$install->run();
    }
}
", "vendor/symfony/flex/src/Command/UnpackCommand.php", "/var/www/public/DevLaon/templates/vendor/symfony/flex/src/Command/UnpackCommand.php");
    }
}
