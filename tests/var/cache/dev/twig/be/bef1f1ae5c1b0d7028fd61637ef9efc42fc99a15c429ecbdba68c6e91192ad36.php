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

/* vendor/symfony/framework-bundle/Command/DebugAutowiringCommand.php */
class __TwigTemplate_26c822ed6b0e1e3e1ac95948366f3208887b08cc6492f1739060fbb9145349b6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Command/DebugAutowiringCommand.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Command/DebugAutowiringCommand.php"));

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

use Symfony\\Bundle\\FrameworkBundle\\Console\\Descriptor\\Descriptor;
use Symfony\\Component\\Console\\Formatter\\OutputFormatterStyle;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;
use Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter;

/**
 * A console command for autowiring information.
 *
 * @author Ryan Weaver <ryan@knpuniversity.com>
 *
 * @internal
 */
class DebugAutowiringCommand extends ContainerDebugCommand
{
    protected static \$defaultName = 'debug:autowiring';
    private \$supportsHref;
    private \$fileLinkFormatter;

    public function __construct(string \$name = null, FileLinkFormatter \$fileLinkFormatter = null)
    {
        \$this->supportsHref = method_exists(OutputFormatterStyle::class, 'setHref');
        \$this->fileLinkFormatter = \$fileLinkFormatter;
        parent::__construct(\$name);
    }

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this
            ->setDefinition([
                new InputArgument('search', InputArgument::OPTIONAL, 'A search filter'),
                new InputOption('all', null, InputOption::VALUE_NONE, 'Show also services that are not aliased'),
            ])
            ->setDescription('Lists classes/interfaces you can use for autowiring')
            ->setHelp(<<<'EOF'
The <info>%command.name%</info> command displays the classes and interfaces that
you can use as type-hints for autowiring:

  <info>php %command.full_name%</info>

You can also pass a search term to filter the list:

  <info>php %command.full_name% log</info>

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

        \$builder = \$this->getContainerBuilder();
        \$serviceIds = \$builder->getServiceIds();
        \$serviceIds = array_filter(\$serviceIds, [\$this, 'filterToServiceTypes']);

        if (\$search = \$input->getArgument('search')) {
            \$serviceIds = array_filter(\$serviceIds, function (\$serviceId) use (\$search) {
                return false !== stripos(str_replace('\\\\', '', \$serviceId), \$search) && 0 !== strpos(\$serviceId, '.');
            });

            if (empty(\$serviceIds)) {
                \$errorIo->error(sprintf('No autowirable classes or interfaces found matching \"%s\"', \$search));

                return 1;
            }
        }

        uasort(\$serviceIds, 'strnatcmp');

        \$io->title('Autowirable Types');
        \$io->text('The following classes & interfaces can be used as type-hints when autowiring:');
        if (\$search) {
            \$io->text(sprintf('(only showing classes/interfaces matching <comment>%s</comment>)', \$search));
        }
        \$hasAlias = [];
        \$all = \$input->getOption('all');
        \$previousId = '-';
        \$serviceIdsNb = 0;
        foreach (\$serviceIds as \$serviceId) {
            \$text = [];
            if (0 !== strpos(\$serviceId, \$previousId)) {
                \$text[] = '';
                if ('' !== \$description = Descriptor::getClassDescription(\$serviceId, \$serviceId)) {
                    if (isset(\$hasAlias[\$serviceId])) {
                        continue;
                    }
                    \$text[] = \$description;
                }
                \$previousId = \$serviceId.' \$';
            }

            \$serviceLine = sprintf('<fg=yellow>%s</>', \$serviceId);
            if (\$this->supportsHref && '' !== \$fileLink = \$this->getFileLink(\$serviceId)) {
                \$serviceLine = sprintf('<fg=yellow;href=%s>%s</>', \$fileLink, \$serviceId);
            }

            if (\$builder->hasAlias(\$serviceId)) {
                \$hasAlias[\$serviceId] = true;
                \$serviceAlias = \$builder->getAlias(\$serviceId);
                \$serviceLine .= ' <fg=cyan>('.\$serviceAlias.')</>';

                if (\$serviceAlias->isDeprecated()) {
                    \$serviceLine .= ' - <fg=magenta>deprecated</>';
                }
            } elseif (!\$all) {
                ++\$serviceIdsNb;
                continue;
            }
            \$text[] = \$serviceLine;
            \$io->text(\$text);
        }

        \$io->newLine();

        if (0 < \$serviceIdsNb) {
            \$io->text(sprintf('%s more concrete service%s would be displayed when adding the \"--all\" option.', \$serviceIdsNb, \$serviceIdsNb > 1 ? 's' : ''));
        }
        if (\$all) {
            \$io->text('Pro-tip: use interfaces in your type-hints instead of classes to benefit from the dependency inversion principle.');
        }

        \$io->newLine();

        return null;
    }

    private function getFileLink(string \$class): string
    {
        if (null === \$this->fileLinkFormatter
            || (null === \$r = \$this->getContainerBuilder()->getReflectionClass(\$class, false))) {
            return '';
        }

        return (string) \$this->fileLinkFormatter->format(\$r->getFileName(), \$r->getStartLine());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Command/DebugAutowiringCommand.php";
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

use Symfony\\Bundle\\FrameworkBundle\\Console\\Descriptor\\Descriptor;
use Symfony\\Component\\Console\\Formatter\\OutputFormatterStyle;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;
use Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter;

/**
 * A console command for autowiring information.
 *
 * @author Ryan Weaver <ryan@knpuniversity.com>
 *
 * @internal
 */
class DebugAutowiringCommand extends ContainerDebugCommand
{
    protected static \$defaultName = 'debug:autowiring';
    private \$supportsHref;
    private \$fileLinkFormatter;

    public function __construct(string \$name = null, FileLinkFormatter \$fileLinkFormatter = null)
    {
        \$this->supportsHref = method_exists(OutputFormatterStyle::class, 'setHref');
        \$this->fileLinkFormatter = \$fileLinkFormatter;
        parent::__construct(\$name);
    }

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this
            ->setDefinition([
                new InputArgument('search', InputArgument::OPTIONAL, 'A search filter'),
                new InputOption('all', null, InputOption::VALUE_NONE, 'Show also services that are not aliased'),
            ])
            ->setDescription('Lists classes/interfaces you can use for autowiring')
            ->setHelp(<<<'EOF'
The <info>%command.name%</info> command displays the classes and interfaces that
you can use as type-hints for autowiring:

  <info>php %command.full_name%</info>

You can also pass a search term to filter the list:

  <info>php %command.full_name% log</info>

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

        \$builder = \$this->getContainerBuilder();
        \$serviceIds = \$builder->getServiceIds();
        \$serviceIds = array_filter(\$serviceIds, [\$this, 'filterToServiceTypes']);

        if (\$search = \$input->getArgument('search')) {
            \$serviceIds = array_filter(\$serviceIds, function (\$serviceId) use (\$search) {
                return false !== stripos(str_replace('\\\\', '', \$serviceId), \$search) && 0 !== strpos(\$serviceId, '.');
            });

            if (empty(\$serviceIds)) {
                \$errorIo->error(sprintf('No autowirable classes or interfaces found matching \"%s\"', \$search));

                return 1;
            }
        }

        uasort(\$serviceIds, 'strnatcmp');

        \$io->title('Autowirable Types');
        \$io->text('The following classes & interfaces can be used as type-hints when autowiring:');
        if (\$search) {
            \$io->text(sprintf('(only showing classes/interfaces matching <comment>%s</comment>)', \$search));
        }
        \$hasAlias = [];
        \$all = \$input->getOption('all');
        \$previousId = '-';
        \$serviceIdsNb = 0;
        foreach (\$serviceIds as \$serviceId) {
            \$text = [];
            if (0 !== strpos(\$serviceId, \$previousId)) {
                \$text[] = '';
                if ('' !== \$description = Descriptor::getClassDescription(\$serviceId, \$serviceId)) {
                    if (isset(\$hasAlias[\$serviceId])) {
                        continue;
                    }
                    \$text[] = \$description;
                }
                \$previousId = \$serviceId.' \$';
            }

            \$serviceLine = sprintf('<fg=yellow>%s</>', \$serviceId);
            if (\$this->supportsHref && '' !== \$fileLink = \$this->getFileLink(\$serviceId)) {
                \$serviceLine = sprintf('<fg=yellow;href=%s>%s</>', \$fileLink, \$serviceId);
            }

            if (\$builder->hasAlias(\$serviceId)) {
                \$hasAlias[\$serviceId] = true;
                \$serviceAlias = \$builder->getAlias(\$serviceId);
                \$serviceLine .= ' <fg=cyan>('.\$serviceAlias.')</>';

                if (\$serviceAlias->isDeprecated()) {
                    \$serviceLine .= ' - <fg=magenta>deprecated</>';
                }
            } elseif (!\$all) {
                ++\$serviceIdsNb;
                continue;
            }
            \$text[] = \$serviceLine;
            \$io->text(\$text);
        }

        \$io->newLine();

        if (0 < \$serviceIdsNb) {
            \$io->text(sprintf('%s more concrete service%s would be displayed when adding the \"--all\" option.', \$serviceIdsNb, \$serviceIdsNb > 1 ? 's' : ''));
        }
        if (\$all) {
            \$io->text('Pro-tip: use interfaces in your type-hints instead of classes to benefit from the dependency inversion principle.');
        }

        \$io->newLine();

        return null;
    }

    private function getFileLink(string \$class): string
    {
        if (null === \$this->fileLinkFormatter
            || (null === \$r = \$this->getContainerBuilder()->getReflectionClass(\$class, false))) {
            return '';
        }

        return (string) \$this->fileLinkFormatter->format(\$r->getFileName(), \$r->getStartLine());
    }
}
", "vendor/symfony/framework-bundle/Command/DebugAutowiringCommand.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Command/DebugAutowiringCommand.php");
    }
}
