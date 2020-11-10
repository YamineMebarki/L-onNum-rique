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

/* vendor/symfony/framework-bundle/Command/ConfigDumpReferenceCommand.php */
class __TwigTemplate_692c7de456e4de188aaa2306f4d212d8e2789a4b14721eff85b5cdcb7b7576d3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Command/ConfigDumpReferenceCommand.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Command/ConfigDumpReferenceCommand.php"));

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

use Symfony\\Component\\Config\\Definition\\Dumper\\XmlReferenceDumper;
use Symfony\\Component\\Config\\Definition\\Dumper\\YamlReferenceDumper;
use Symfony\\Component\\Console\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;

/**
 * A console command for dumping available configuration reference.
 *
 * @author Kevin Bond <kevinbond@gmail.com>
 * @author Wouter J <waldio.webdesign@gmail.com>
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 *
 * @final
 */
class ConfigDumpReferenceCommand extends AbstractConfigCommand
{
    protected static \$defaultName = 'config:dump-reference';

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this
            ->setDefinition([
                new InputArgument('name', InputArgument::OPTIONAL, 'The Bundle name or the extension alias'),
                new InputArgument('path', InputArgument::OPTIONAL, 'The configuration option path'),
                new InputOption('format', null, InputOption::VALUE_REQUIRED, 'The output format (yaml or xml)', 'yaml'),
            ])
            ->setDescription('Dumps the default configuration for an extension')
            ->setHelp(<<<'EOF'
The <info>%command.name%</info> command dumps the default configuration for an
extension/bundle.

Either the extension alias or bundle name can be used:

  <info>php %command.full_name% framework</info>
  <info>php %command.full_name% FrameworkBundle</info>

With the <info>--format</info> option specifies the format of the configuration,
this is either <comment>yaml</comment> or <comment>xml</comment>.
When the option is not provided, <comment>yaml</comment> is used.

  <info>php %command.full_name% FrameworkBundle --format=xml</info>

For dumping a specific option, add its path as second argument (only available for the yaml format):

  <info>php %command.full_name% framework profiler.matcher</info>

EOF
            )
        ;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \\LogicException
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$io = new SymfonyStyle(\$input, \$output);
        \$errorIo = \$io->getErrorStyle();

        if (null === \$name = \$input->getArgument('name')) {
            \$this->listBundles(\$errorIo);
            \$errorIo->comment([
                'Provide the name of a bundle as the first argument of this command to dump its default configuration. (e.g. <comment>config:dump-reference FrameworkBundle</comment>)',
                'For dumping a specific option, add its path as the second argument of this command. (e.g. <comment>config:dump-reference FrameworkBundle profiler.matcher</comment> to dump the <comment>framework.profiler.matcher</comment> configuration)',
            ]);

            return null;
        }

        \$extension = \$this->findExtension(\$name);

        \$configuration = \$extension->getConfiguration([], \$this->getContainerBuilder());

        \$this->validateConfiguration(\$extension, \$configuration);

        \$format = \$input->getOption('format');
        \$path = \$input->getArgument('path');

        if (null !== \$path && 'yaml' !== \$format) {
            \$errorIo->error('The \"path\" option is only available for the \"yaml\" format.');

            return 1;
        }

        if (\$name === \$extension->getAlias()) {
            \$message = sprintf('Default configuration for extension with alias: \"%s\"', \$name);
        } else {
            \$message = sprintf('Default configuration for \"%s\"', \$name);
        }

        if (null !== \$path) {
            \$message .= sprintf(' at path \"%s\"', \$path);
        }

        switch (\$format) {
            case 'yaml':
                \$io->writeln(sprintf('# %s', \$message));
                \$dumper = new YamlReferenceDumper();
                break;
            case 'xml':
                \$io->writeln(sprintf('<!-- %s -->', \$message));
                \$dumper = new XmlReferenceDumper();
                break;
            default:
                \$io->writeln(\$message);
                throw new InvalidArgumentException('Only the yaml and xml formats are supported.');
        }

        \$io->writeln(null === \$path ? \$dumper->dump(\$configuration, \$extension->getNamespace()) : \$dumper->dumpAtPath(\$configuration, \$path));

        return null;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Command/ConfigDumpReferenceCommand.php";
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

use Symfony\\Component\\Config\\Definition\\Dumper\\XmlReferenceDumper;
use Symfony\\Component\\Config\\Definition\\Dumper\\YamlReferenceDumper;
use Symfony\\Component\\Console\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;

/**
 * A console command for dumping available configuration reference.
 *
 * @author Kevin Bond <kevinbond@gmail.com>
 * @author Wouter J <waldio.webdesign@gmail.com>
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 *
 * @final
 */
class ConfigDumpReferenceCommand extends AbstractConfigCommand
{
    protected static \$defaultName = 'config:dump-reference';

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this
            ->setDefinition([
                new InputArgument('name', InputArgument::OPTIONAL, 'The Bundle name or the extension alias'),
                new InputArgument('path', InputArgument::OPTIONAL, 'The configuration option path'),
                new InputOption('format', null, InputOption::VALUE_REQUIRED, 'The output format (yaml or xml)', 'yaml'),
            ])
            ->setDescription('Dumps the default configuration for an extension')
            ->setHelp(<<<'EOF'
The <info>%command.name%</info> command dumps the default configuration for an
extension/bundle.

Either the extension alias or bundle name can be used:

  <info>php %command.full_name% framework</info>
  <info>php %command.full_name% FrameworkBundle</info>

With the <info>--format</info> option specifies the format of the configuration,
this is either <comment>yaml</comment> or <comment>xml</comment>.
When the option is not provided, <comment>yaml</comment> is used.

  <info>php %command.full_name% FrameworkBundle --format=xml</info>

For dumping a specific option, add its path as second argument (only available for the yaml format):

  <info>php %command.full_name% framework profiler.matcher</info>

EOF
            )
        ;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \\LogicException
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$io = new SymfonyStyle(\$input, \$output);
        \$errorIo = \$io->getErrorStyle();

        if (null === \$name = \$input->getArgument('name')) {
            \$this->listBundles(\$errorIo);
            \$errorIo->comment([
                'Provide the name of a bundle as the first argument of this command to dump its default configuration. (e.g. <comment>config:dump-reference FrameworkBundle</comment>)',
                'For dumping a specific option, add its path as the second argument of this command. (e.g. <comment>config:dump-reference FrameworkBundle profiler.matcher</comment> to dump the <comment>framework.profiler.matcher</comment> configuration)',
            ]);

            return null;
        }

        \$extension = \$this->findExtension(\$name);

        \$configuration = \$extension->getConfiguration([], \$this->getContainerBuilder());

        \$this->validateConfiguration(\$extension, \$configuration);

        \$format = \$input->getOption('format');
        \$path = \$input->getArgument('path');

        if (null !== \$path && 'yaml' !== \$format) {
            \$errorIo->error('The \"path\" option is only available for the \"yaml\" format.');

            return 1;
        }

        if (\$name === \$extension->getAlias()) {
            \$message = sprintf('Default configuration for extension with alias: \"%s\"', \$name);
        } else {
            \$message = sprintf('Default configuration for \"%s\"', \$name);
        }

        if (null !== \$path) {
            \$message .= sprintf(' at path \"%s\"', \$path);
        }

        switch (\$format) {
            case 'yaml':
                \$io->writeln(sprintf('# %s', \$message));
                \$dumper = new YamlReferenceDumper();
                break;
            case 'xml':
                \$io->writeln(sprintf('<!-- %s -->', \$message));
                \$dumper = new XmlReferenceDumper();
                break;
            default:
                \$io->writeln(\$message);
                throw new InvalidArgumentException('Only the yaml and xml formats are supported.');
        }

        \$io->writeln(null === \$path ? \$dumper->dump(\$configuration, \$extension->getNamespace()) : \$dumper->dumpAtPath(\$configuration, \$path));

        return null;
    }
}
", "vendor/symfony/framework-bundle/Command/ConfigDumpReferenceCommand.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Command/ConfigDumpReferenceCommand.php");
    }
}
