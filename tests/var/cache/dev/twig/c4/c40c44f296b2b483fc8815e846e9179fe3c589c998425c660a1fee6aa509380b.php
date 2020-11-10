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

/* vendor/symfony/framework-bundle/Command/CachePoolDeleteCommand.php */
class __TwigTemplate_9c9fd063fcc8e6ef7ab3ecef111cd8eeb52f8da31ef47e2018dce1a5199603ea extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Command/CachePoolDeleteCommand.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Command/CachePoolDeleteCommand.php"));

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
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;
use Symfony\\Component\\HttpKernel\\CacheClearer\\Psr6CacheClearer;

/**
 * Delete an item from a cache pool.
 *
 * @author Pierre du Plessis <pdples@gmail.com>
 */
final class CachePoolDeleteCommand extends Command
{
    protected static \$defaultName = 'cache:pool:delete';

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
                new InputArgument('pool', InputArgument::REQUIRED, 'The cache pool from which to delete an item'),
                new InputArgument('key', InputArgument::REQUIRED, 'The cache key to delete from the pool'),
            ])
            ->setDescription('Deletes an item from a cache pool')
            ->setHelp(<<<'EOF'
The <info>%command.name%</info> deletes an item from a given cache pool.

    %command.full_name% <pool> <key>
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
        \$pool = \$input->getArgument('pool');
        \$key = \$input->getArgument('key');
        \$cachePool = \$this->poolClearer->getPool(\$pool);

        if (!\$cachePool->hasItem(\$key)) {
            \$io->note(sprintf('Cache item \"%s\" does not exist in cache pool \"%s\".', \$key, \$pool));

            return;
        }

        if (!\$cachePool->deleteItem(\$key)) {
            throw new \\Exception(sprintf('Cache item \"%s\" could not be deleted.', \$key));
        }

        \$io->success(sprintf('Cache item \"%s\" was successfully deleted.', \$key));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Command/CachePoolDeleteCommand.php";
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
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;
use Symfony\\Component\\HttpKernel\\CacheClearer\\Psr6CacheClearer;

/**
 * Delete an item from a cache pool.
 *
 * @author Pierre du Plessis <pdples@gmail.com>
 */
final class CachePoolDeleteCommand extends Command
{
    protected static \$defaultName = 'cache:pool:delete';

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
                new InputArgument('pool', InputArgument::REQUIRED, 'The cache pool from which to delete an item'),
                new InputArgument('key', InputArgument::REQUIRED, 'The cache key to delete from the pool'),
            ])
            ->setDescription('Deletes an item from a cache pool')
            ->setHelp(<<<'EOF'
The <info>%command.name%</info> deletes an item from a given cache pool.

    %command.full_name% <pool> <key>
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
        \$pool = \$input->getArgument('pool');
        \$key = \$input->getArgument('key');
        \$cachePool = \$this->poolClearer->getPool(\$pool);

        if (!\$cachePool->hasItem(\$key)) {
            \$io->note(sprintf('Cache item \"%s\" does not exist in cache pool \"%s\".', \$key, \$pool));

            return;
        }

        if (!\$cachePool->deleteItem(\$key)) {
            throw new \\Exception(sprintf('Cache item \"%s\" could not be deleted.', \$key));
        }

        \$io->success(sprintf('Cache item \"%s\" was successfully deleted.', \$key));
    }
}
", "vendor/symfony/framework-bundle/Command/CachePoolDeleteCommand.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Command/CachePoolDeleteCommand.php");
    }
}
