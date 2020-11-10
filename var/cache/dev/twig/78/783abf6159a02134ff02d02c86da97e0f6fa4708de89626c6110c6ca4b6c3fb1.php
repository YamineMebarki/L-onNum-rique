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

/* vendor/doctrine/doctrine-cache-bundle/Command/StatsCommand.php */
class __TwigTemplate_2ea1f69d48b2d016981010e8799c8dfbc11f4fea8f187c27f7d857e1e984ab09 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-cache-bundle/Command/StatsCommand.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-cache-bundle/Command/StatsCommand.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Bundle\\DoctrineCacheBundle\\Command;

use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;

/**
 * Get stats from cache provider.
 *
 * @author Alan Doucette <dragonwize@gmail.com>
 */
class StatsCommand extends CacheCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this->setName('doctrine:cache:stats')
            ->setDescription('Get stats on a given cache provider')
            ->addArgument('cache-name', InputArgument::REQUIRED, 'For which cache provider would you like to get stats?');
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$cacheName     = \$input->getArgument('cache-name');
        \$cacheProvider = \$this->getCacheProvider(\$cacheName);
        \$cacheProviderName = get_class(\$cacheProvider);

        \$stats = \$cacheProvider->getStats();

        if (\$stats === null) {
            \$output->writeln(sprintf('Stats were not provided for the <info>%s</info> provider of type <info>%s</info>', \$cacheName, \$cacheProviderName, true));

            return;
        }

        \$formatter = \$this->getHelperSet()->get('formatter');

        \$lines = array();
        foreach (\$stats as \$key => \$stat) {
            \$lines[] = \$formatter->formatSection(\$key, \$stat);
        }

        \$output->writeln(sprintf('Stats for the <info>%s</info> provider of type <info>%s</info>:', \$cacheName, \$cacheProviderName, true));
        \$output->writeln(\$lines);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/doctrine-cache-bundle/Command/StatsCommand.php";
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
 * Get stats from cache provider.
 *
 * @author Alan Doucette <dragonwize@gmail.com>
 */
class StatsCommand extends CacheCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this->setName('doctrine:cache:stats')
            ->setDescription('Get stats on a given cache provider')
            ->addArgument('cache-name', InputArgument::REQUIRED, 'For which cache provider would you like to get stats?');
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$cacheName     = \$input->getArgument('cache-name');
        \$cacheProvider = \$this->getCacheProvider(\$cacheName);
        \$cacheProviderName = get_class(\$cacheProvider);

        \$stats = \$cacheProvider->getStats();

        if (\$stats === null) {
            \$output->writeln(sprintf('Stats were not provided for the <info>%s</info> provider of type <info>%s</info>', \$cacheName, \$cacheProviderName, true));

            return;
        }

        \$formatter = \$this->getHelperSet()->get('formatter');

        \$lines = array();
        foreach (\$stats as \$key => \$stat) {
            \$lines[] = \$formatter->formatSection(\$key, \$stat);
        }

        \$output->writeln(sprintf('Stats for the <info>%s</info> provider of type <info>%s</info>:', \$cacheName, \$cacheProviderName, true));
        \$output->writeln(\$lines);
    }
}
", "vendor/doctrine/doctrine-cache-bundle/Command/StatsCommand.php", "/var/www/public/DevLaon/templates/vendor/doctrine/doctrine-cache-bundle/Command/StatsCommand.php");
    }
}
