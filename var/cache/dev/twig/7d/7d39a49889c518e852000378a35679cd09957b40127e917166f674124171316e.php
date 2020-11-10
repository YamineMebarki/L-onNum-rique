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

/* vendor/symfony/framework-bundle/Command/ConfigDebugCommand.php */
class __TwigTemplate_d0933e027b991b75f84b943e5dc61a2931aee8961bf5e8683494dc6d5ae38346 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Command/ConfigDebugCommand.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Command/ConfigDebugCommand.php"));

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

use Symfony\\Component\\Console\\Exception\\LogicException;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;
use Symfony\\Component\\DependencyInjection\\Compiler\\ValidateEnvPlaceholdersPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\Yaml\\Yaml;

/**
 * A console command for dumping available configuration reference.
 *
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 *
 * @final
 */
class ConfigDebugCommand extends AbstractConfigCommand
{
    protected static \$defaultName = 'debug:config';

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this
            ->setDefinition([
                new InputArgument('name', InputArgument::OPTIONAL, 'The bundle name or the extension alias'),
                new InputArgument('path', InputArgument::OPTIONAL, 'The configuration option path'),
            ])
            ->setDescription('Dumps the current configuration for an extension')
            ->setHelp(<<<'EOF'
The <info>%command.name%</info> command dumps the current configuration for an
extension/bundle.

Either the extension alias or bundle name can be used:

  <info>php %command.full_name% framework</info>
  <info>php %command.full_name% FrameworkBundle</info>

For dumping a specific option, add its path as second argument:

  <info>php %command.full_name% framework serializer.enabled</info>

EOF
            )
        ;
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$io = new SymfonyStyle(\$input, \$output);
        \$errorIo = \$io->getErrorStyle();

        if (null === \$name = \$input->getArgument('name')) {
            \$this->listBundles(\$errorIo);
            \$errorIo->comment('Provide the name of a bundle as the first argument of this command to dump its configuration. (e.g. <comment>debug:config FrameworkBundle</comment>)');
            \$errorIo->comment('For dumping a specific option, add its path as the second argument of this command. (e.g. <comment>debug:config FrameworkBundle serializer</comment> to dump the <comment>framework.serializer</comment> configuration)');

            return;
        }

        \$extension = \$this->findExtension(\$name);
        \$container = \$this->compileContainer();

        \$extensionAlias = \$extension->getAlias();
        \$extensionConfig = [];
        foreach (\$container->getCompilerPassConfig()->getPasses() as \$pass) {
            if (\$pass instanceof ValidateEnvPlaceholdersPass) {
                \$extensionConfig = \$pass->getExtensionConfig();
                break;
            }
        }

        if (!isset(\$extensionConfig[\$extensionAlias])) {
            throw new \\LogicException(sprintf('The extension with alias \"%s\" does not have configuration.', \$extensionAlias));
        }

        \$config = \$container->resolveEnvPlaceholders(\$extensionConfig[\$extensionAlias]);

        if (null === \$path = \$input->getArgument('path')) {
            \$io->title(
                sprintf('Current configuration for %s', (\$name === \$extensionAlias ? sprintf('extension with alias \"%s\"', \$extensionAlias) : sprintf('\"%s\"', \$name)))
            );

            \$io->writeln(Yaml::dump([\$extensionAlias => \$config], 10));

            return;
        }

        try {
            \$config = \$this->getConfigForPath(\$config, \$path, \$extensionAlias);
        } catch (LogicException \$e) {
            \$errorIo->error(\$e->getMessage());

            return 1;
        }

        \$io->title(sprintf('Current configuration for \"%s.%s\"', \$extensionAlias, \$path));

        \$io->writeln(Yaml::dump(\$config, 10));
    }

    private function compileContainer(): ContainerBuilder
    {
        \$kernel = clone \$this->getApplication()->getKernel();
        \$kernel->boot();

        \$method = new \\ReflectionMethod(\$kernel, 'buildContainer');
        \$method->setAccessible(true);
        \$container = \$method->invoke(\$kernel);
        \$container->getCompiler()->compile(\$container);

        return \$container;
    }

    /**
     * Iterate over configuration until the last step of the given path.
     *
     * @throws LogicException If the configuration does not exist
     *
     * @return mixed
     */
    private function getConfigForPath(array \$config, string \$path, string \$alias)
    {
        \$steps = explode('.', \$path);

        foreach (\$steps as \$step) {
            if (!\\array_key_exists(\$step, \$config)) {
                throw new LogicException(sprintf('Unable to find configuration for \"%s.%s\"', \$alias, \$path));
            }

            \$config = \$config[\$step];
        }

        return \$config;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Command/ConfigDebugCommand.php";
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

use Symfony\\Component\\Console\\Exception\\LogicException;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;
use Symfony\\Component\\DependencyInjection\\Compiler\\ValidateEnvPlaceholdersPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\Yaml\\Yaml;

/**
 * A console command for dumping available configuration reference.
 *
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 *
 * @final
 */
class ConfigDebugCommand extends AbstractConfigCommand
{
    protected static \$defaultName = 'debug:config';

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this
            ->setDefinition([
                new InputArgument('name', InputArgument::OPTIONAL, 'The bundle name or the extension alias'),
                new InputArgument('path', InputArgument::OPTIONAL, 'The configuration option path'),
            ])
            ->setDescription('Dumps the current configuration for an extension')
            ->setHelp(<<<'EOF'
The <info>%command.name%</info> command dumps the current configuration for an
extension/bundle.

Either the extension alias or bundle name can be used:

  <info>php %command.full_name% framework</info>
  <info>php %command.full_name% FrameworkBundle</info>

For dumping a specific option, add its path as second argument:

  <info>php %command.full_name% framework serializer.enabled</info>

EOF
            )
        ;
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$io = new SymfonyStyle(\$input, \$output);
        \$errorIo = \$io->getErrorStyle();

        if (null === \$name = \$input->getArgument('name')) {
            \$this->listBundles(\$errorIo);
            \$errorIo->comment('Provide the name of a bundle as the first argument of this command to dump its configuration. (e.g. <comment>debug:config FrameworkBundle</comment>)');
            \$errorIo->comment('For dumping a specific option, add its path as the second argument of this command. (e.g. <comment>debug:config FrameworkBundle serializer</comment> to dump the <comment>framework.serializer</comment> configuration)');

            return;
        }

        \$extension = \$this->findExtension(\$name);
        \$container = \$this->compileContainer();

        \$extensionAlias = \$extension->getAlias();
        \$extensionConfig = [];
        foreach (\$container->getCompilerPassConfig()->getPasses() as \$pass) {
            if (\$pass instanceof ValidateEnvPlaceholdersPass) {
                \$extensionConfig = \$pass->getExtensionConfig();
                break;
            }
        }

        if (!isset(\$extensionConfig[\$extensionAlias])) {
            throw new \\LogicException(sprintf('The extension with alias \"%s\" does not have configuration.', \$extensionAlias));
        }

        \$config = \$container->resolveEnvPlaceholders(\$extensionConfig[\$extensionAlias]);

        if (null === \$path = \$input->getArgument('path')) {
            \$io->title(
                sprintf('Current configuration for %s', (\$name === \$extensionAlias ? sprintf('extension with alias \"%s\"', \$extensionAlias) : sprintf('\"%s\"', \$name)))
            );

            \$io->writeln(Yaml::dump([\$extensionAlias => \$config], 10));

            return;
        }

        try {
            \$config = \$this->getConfigForPath(\$config, \$path, \$extensionAlias);
        } catch (LogicException \$e) {
            \$errorIo->error(\$e->getMessage());

            return 1;
        }

        \$io->title(sprintf('Current configuration for \"%s.%s\"', \$extensionAlias, \$path));

        \$io->writeln(Yaml::dump(\$config, 10));
    }

    private function compileContainer(): ContainerBuilder
    {
        \$kernel = clone \$this->getApplication()->getKernel();
        \$kernel->boot();

        \$method = new \\ReflectionMethod(\$kernel, 'buildContainer');
        \$method->setAccessible(true);
        \$container = \$method->invoke(\$kernel);
        \$container->getCompiler()->compile(\$container);

        return \$container;
    }

    /**
     * Iterate over configuration until the last step of the given path.
     *
     * @throws LogicException If the configuration does not exist
     *
     * @return mixed
     */
    private function getConfigForPath(array \$config, string \$path, string \$alias)
    {
        \$steps = explode('.', \$path);

        foreach (\$steps as \$step) {
            if (!\\array_key_exists(\$step, \$config)) {
                throw new LogicException(sprintf('Unable to find configuration for \"%s.%s\"', \$alias, \$path));
            }

            \$config = \$config[\$step];
        }

        return \$config;
    }
}
", "vendor/symfony/framework-bundle/Command/ConfigDebugCommand.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Command/ConfigDebugCommand.php");
    }
}
