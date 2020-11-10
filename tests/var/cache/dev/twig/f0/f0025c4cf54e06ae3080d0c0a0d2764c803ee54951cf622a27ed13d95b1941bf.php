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

/* vendor/doctrine/doctrine-bundle/Command/Proxy/RunDqlDoctrineCommand.php */
class __TwigTemplate_52752eab0fababc554c634acc329352fe1b8a909cc2ec7fc43c76810a541b7d6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-bundle/Command/Proxy/RunDqlDoctrineCommand.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-bundle/Command/Proxy/RunDqlDoctrineCommand.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy;

use Doctrine\\ORM\\Tools\\Console\\Command\\RunDqlCommand;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;

/**
 * Execute a Doctrine DQL query and output the results.
 */
class RunDqlDoctrineCommand extends RunDqlCommand
{
    /**
     * {@inheritDoc}
     */
    protected function configure()
    {
        parent::configure();

        \$this
            ->setName('doctrine:query:dql')
            ->addOption('em', null, InputOption::VALUE_OPTIONAL, 'The entity manager to use for this command')
            ->setHelp(<<<EOT
The <info>%command.name%</info> command executes the given DQL query and
outputs the results:

<info>php %command.full_name% \"SELECT u FROM UserBundle:User u\"</info>

You can also optional specify some additional options like what type of
hydration to use when executing the query:

<info>php %command.full_name% \"SELECT u FROM UserBundle:User u\" --hydrate=array</info>

Additionally you can specify the first result and maximum amount of results to
show:

<info>php %command.full_name% \"SELECT u FROM UserBundle:User u\" --first-result=0 --max-result=30</info>
EOT
        );
    }

    /**
     * {@inheritDoc}
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        DoctrineCommandHelper::setApplicationEntityManager(\$this->getApplication(), \$input->getOption('em'));

        return parent::execute(\$input, \$output);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/doctrine-bundle/Command/Proxy/RunDqlDoctrineCommand.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy;

use Doctrine\\ORM\\Tools\\Console\\Command\\RunDqlCommand;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;

/**
 * Execute a Doctrine DQL query and output the results.
 */
class RunDqlDoctrineCommand extends RunDqlCommand
{
    /**
     * {@inheritDoc}
     */
    protected function configure()
    {
        parent::configure();

        \$this
            ->setName('doctrine:query:dql')
            ->addOption('em', null, InputOption::VALUE_OPTIONAL, 'The entity manager to use for this command')
            ->setHelp(<<<EOT
The <info>%command.name%</info> command executes the given DQL query and
outputs the results:

<info>php %command.full_name% \"SELECT u FROM UserBundle:User u\"</info>

You can also optional specify some additional options like what type of
hydration to use when executing the query:

<info>php %command.full_name% \"SELECT u FROM UserBundle:User u\" --hydrate=array</info>

Additionally you can specify the first result and maximum amount of results to
show:

<info>php %command.full_name% \"SELECT u FROM UserBundle:User u\" --first-result=0 --max-result=30</info>
EOT
        );
    }

    /**
     * {@inheritDoc}
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        DoctrineCommandHelper::setApplicationEntityManager(\$this->getApplication(), \$input->getOption('em'));

        return parent::execute(\$input, \$output);
    }
}
", "vendor/doctrine/doctrine-bundle/Command/Proxy/RunDqlDoctrineCommand.php", "/var/www/public/DevLaon/templates/vendor/doctrine/doctrine-bundle/Command/Proxy/RunDqlDoctrineCommand.php");
    }
}
