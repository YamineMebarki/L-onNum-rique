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

/* vendor/symfony/framework-bundle/Command/CachePoolPruneCommand.php */
class __TwigTemplate_43714a2fe586c076e285f73570e8ad81a7f4071ca71be486e17729a306225a65 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Command/CachePoolPruneCommand.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Command/CachePoolPruneCommand.php"));

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

use Symfony\\Component\\Cache\\PruneableInterface;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;

/**
 * Cache pool pruner command.
 *
 * @author Rob Frawley 2nd <rmf@src.run>
 */
final class CachePoolPruneCommand extends Command
{
    protected static \$defaultName = 'cache:pool:prune';

    private \$pools;

    /**
     * @param iterable|PruneableInterface[] \$pools
     */
    public function __construct(iterable \$pools)
    {
        parent::__construct();

        \$this->pools = \$pools;
    }

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this
            ->setDescription('Prunes cache pools')
            ->setHelp(<<<'EOF'
The <info>%command.name%</info> command deletes all expired items from all pruneable pools.

    %command.full_name%
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

        foreach (\$this->pools as \$name => \$pool) {
            \$io->comment(sprintf('Pruning cache pool: <info>%s</info>', \$name));
            \$pool->prune();
        }

        \$io->success('Successfully pruned cache pool(s).');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Command/CachePoolPruneCommand.php";
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

use Symfony\\Component\\Cache\\PruneableInterface;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;

/**
 * Cache pool pruner command.
 *
 * @author Rob Frawley 2nd <rmf@src.run>
 */
final class CachePoolPruneCommand extends Command
{
    protected static \$defaultName = 'cache:pool:prune';

    private \$pools;

    /**
     * @param iterable|PruneableInterface[] \$pools
     */
    public function __construct(iterable \$pools)
    {
        parent::__construct();

        \$this->pools = \$pools;
    }

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this
            ->setDescription('Prunes cache pools')
            ->setHelp(<<<'EOF'
The <info>%command.name%</info> command deletes all expired items from all pruneable pools.

    %command.full_name%
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

        foreach (\$this->pools as \$name => \$pool) {
            \$io->comment(sprintf('Pruning cache pool: <info>%s</info>', \$name));
            \$pool->prune();
        }

        \$io->success('Successfully pruned cache pool(s).');
    }
}
", "vendor/symfony/framework-bundle/Command/CachePoolPruneCommand.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Command/CachePoolPruneCommand.php");
    }
}
