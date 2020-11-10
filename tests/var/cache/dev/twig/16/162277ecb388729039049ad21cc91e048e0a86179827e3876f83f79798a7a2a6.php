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

/* vendor/doctrine/doctrine-cache-bundle/Command/FlushCommand.php */
class __TwigTemplate_288d7b3ba48e78a55d0ad15c86a1767c4371011847f101876d28298bd6723c9c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-cache-bundle/Command/FlushCommand.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-cache-bundle/Command/FlushCommand.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Bundle\\DoctrineCacheBundle\\Command;

use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;

/**
 * Flush a cache provider.
 *
 * @author Alan Doucette <dragonwize@gmail.com>
 */
class FlushCommand extends CacheCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this->setName('doctrine:cache:flush')
            ->setAliases(array('doctrine:cache:clear'))
            ->setDescription('Flush a given cache')
            ->addArgument('cache-name', InputArgument::REQUIRED, 'Which cache provider to flush?');
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$cacheName     = \$input->getArgument('cache-name');
        \$cacheProvider = \$this->getCacheProvider(\$cacheName);

        if ( ! method_exists(\$cacheProvider, 'flushAll')) {
            throw new \\RuntimeException('Cache provider does not implement a flushAll method.');
        }

        \$cacheProviderName = get_class(\$cacheProvider);
        \$output->writeln(sprintf('Clearing the cache for the <info>%s</info> provider of type <info>%s</info>', \$cacheName, \$cacheProviderName, true));
        \$cacheProvider->flushAll();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/doctrine-cache-bundle/Command/FlushCommand.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Bundle\\DoctrineCacheBundle\\Command;

use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;

/**
 * Flush a cache provider.
 *
 * @author Alan Doucette <dragonwize@gmail.com>
 */
class FlushCommand extends CacheCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this->setName('doctrine:cache:flush')
            ->setAliases(array('doctrine:cache:clear'))
            ->setDescription('Flush a given cache')
            ->addArgument('cache-name', InputArgument::REQUIRED, 'Which cache provider to flush?');
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$cacheName     = \$input->getArgument('cache-name');
        \$cacheProvider = \$this->getCacheProvider(\$cacheName);

        if ( ! method_exists(\$cacheProvider, 'flushAll')) {
            throw new \\RuntimeException('Cache provider does not implement a flushAll method.');
        }

        \$cacheProviderName = get_class(\$cacheProvider);
        \$output->writeln(sprintf('Clearing the cache for the <info>%s</info> provider of type <info>%s</info>', \$cacheName, \$cacheProviderName, true));
        \$cacheProvider->flushAll();
    }
}
", "vendor/doctrine/doctrine-cache-bundle/Command/FlushCommand.php", "/var/www/public/DevLaon/templates/vendor/doctrine/doctrine-cache-bundle/Command/FlushCommand.php");
    }
}
