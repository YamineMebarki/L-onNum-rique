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

/* vendor/symfony/framework-bundle/Command/CachePoolClearCommand.php */
class __TwigTemplate_d36321769a80b41d6efce286b979f0575849dd87f51c0ed524a7c151ac3c9e6c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Command/CachePoolClearCommand.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Command/CachePoolClearCommand.php"));

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

use Psr\\Cache\\CacheItemPoolInterface;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;
use Symfony\\Component\\HttpKernel\\CacheClearer\\Psr6CacheClearer;

/**
 * Clear cache pools.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
final class CachePoolClearCommand extends Command
{
    protected static \$defaultName = 'cache:pool:clear';

    private \$poolClearer;

    public function __construct(Psr6CacheClearer \$poolClearer)
    {
        parent::__construct();

        \$this->poolClearer = \$poolClearer;
    }

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this
            ->setDefinition([
                new InputArgument('pools', InputArgument::IS_ARRAY | InputArgument::REQUIRED, 'A list of cache pools or cache pool clearers'),
            ])
            ->setDescription('Clears cache pools')
            ->setHelp(<<<'EOF'
The <info>%command.name%</info> command clears the given cache pools or cache pool clearers.

    %command.full_name% <cache pool or clearer 1> [...<cache pool or clearer N>]
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
        \$kernel = \$this->getApplication()->getKernel();
        \$pools = [];
        \$clearers = [];

        foreach (\$input->getArgument('pools') as \$id) {
            if (\$this->poolClearer->hasPool(\$id)) {
                \$pools[\$id] = \$id;
            } else {
                \$pool = \$kernel->getContainer()->get(\$id);

                if (\$pool instanceof CacheItemPoolInterface) {
                    \$pools[\$id] = \$pool;
                } elseif (\$pool instanceof Psr6CacheClearer) {
                    \$clearers[\$id] = \$pool;
                } else {
                    throw new InvalidArgumentException(sprintf('\"%s\" is not a cache pool nor a cache clearer.', \$id));
                }
            }
        }

        foreach (\$clearers as \$id => \$clearer) {
            \$io->comment(sprintf('Calling cache clearer: <info>%s</info>', \$id));
            \$clearer->clear(\$kernel->getContainer()->getParameter('kernel.cache_dir'));
        }

        foreach (\$pools as \$id => \$pool) {
            \$io->comment(sprintf('Clearing cache pool: <info>%s</info>', \$id));

            if (\$pool instanceof CacheItemPoolInterface) {
                \$pool->clear();
            } else {
                \$this->poolClearer->clearPool(\$id);
            }
        }

        \$io->success('Cache was successfully cleared.');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Command/CachePoolClearCommand.php";
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

use Psr\\Cache\\CacheItemPoolInterface;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;
use Symfony\\Component\\HttpKernel\\CacheClearer\\Psr6CacheClearer;

/**
 * Clear cache pools.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
final class CachePoolClearCommand extends Command
{
    protected static \$defaultName = 'cache:pool:clear';

    private \$poolClearer;

    public function __construct(Psr6CacheClearer \$poolClearer)
    {
        parent::__construct();

        \$this->poolClearer = \$poolClearer;
    }

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this
            ->setDefinition([
                new InputArgument('pools', InputArgument::IS_ARRAY | InputArgument::REQUIRED, 'A list of cache pools or cache pool clearers'),
            ])
            ->setDescription('Clears cache pools')
            ->setHelp(<<<'EOF'
The <info>%command.name%</info> command clears the given cache pools or cache pool clearers.

    %command.full_name% <cache pool or clearer 1> [...<cache pool or clearer N>]
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
        \$kernel = \$this->getApplication()->getKernel();
        \$pools = [];
        \$clearers = [];

        foreach (\$input->getArgument('pools') as \$id) {
            if (\$this->poolClearer->hasPool(\$id)) {
                \$pools[\$id] = \$id;
            } else {
                \$pool = \$kernel->getContainer()->get(\$id);

                if (\$pool instanceof CacheItemPoolInterface) {
                    \$pools[\$id] = \$pool;
                } elseif (\$pool instanceof Psr6CacheClearer) {
                    \$clearers[\$id] = \$pool;
                } else {
                    throw new InvalidArgumentException(sprintf('\"%s\" is not a cache pool nor a cache clearer.', \$id));
                }
            }
        }

        foreach (\$clearers as \$id => \$clearer) {
            \$io->comment(sprintf('Calling cache clearer: <info>%s</info>', \$id));
            \$clearer->clear(\$kernel->getContainer()->getParameter('kernel.cache_dir'));
        }

        foreach (\$pools as \$id => \$pool) {
            \$io->comment(sprintf('Clearing cache pool: <info>%s</info>', \$id));

            if (\$pool instanceof CacheItemPoolInterface) {
                \$pool->clear();
            } else {
                \$this->poolClearer->clearPool(\$id);
            }
        }

        \$io->success('Cache was successfully cleared.');
    }
}
", "vendor/symfony/framework-bundle/Command/CachePoolClearCommand.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Command/CachePoolClearCommand.php");
    }
}
