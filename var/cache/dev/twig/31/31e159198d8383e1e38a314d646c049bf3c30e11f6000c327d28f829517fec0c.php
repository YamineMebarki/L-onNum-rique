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

/* vendor/doctrine/doctrine-bundle/Command/Proxy/DelegateCommand.php */
class __TwigTemplate_3f8912766e1ad752b2d4bedeff6499d2af46d69eb508e59d453dbfde3019cd1f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-bundle/Command/Proxy/DelegateCommand.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-bundle/Command/Proxy/DelegateCommand.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy;

use Doctrine\\ORM\\Version;
use RuntimeException;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;

/**
 * Command Delegate.
 */
abstract class DelegateCommand extends Command
{
    /** @var Command */
    protected \$command;

    /**
     * @return Command
     */
    abstract protected function createCommand();

    /**
     * @return string
     */
    protected function getMinimalVersion()
    {
        return '2.3.0-DEV';
    }

    /**
     * @return bool
     */
    private function isVersionCompatible()
    {
        return version_compare(Version::VERSION, \$this->getMinimalVersion()) >= 0;
    }

    /**
     * {@inheritDoc}
     */
    public function isEnabled()
    {
        return \$this->isVersionCompatible();
    }

    /**
     * @param string \$entityManagerName
     *
     * @return Command
     */
    protected function wrapCommand(\$entityManagerName)
    {
        if (! \$this->isVersionCompatible()) {
            throw new RuntimeException(sprintf('\"%s\" requires doctrine-orm \"%s\" or newer', \$this->getName(), \$this->getMinimalVersion()));
        }

        DoctrineCommandHelper::setApplicationEntityManager(\$this->getApplication(), \$entityManagerName);
        \$this->command->setApplication(\$this->getApplication());

        return \$this->command;
    }

    /**
     * {@inheritDoc}
     */
    protected function configure()
    {
        if (\$this->isVersionCompatible()) {
            \$this->command = \$this->createCommand();

            \$this->setHelp(\$this->command->getHelp());
            \$this->setDefinition(\$this->command->getDefinition());
            \$this->setDescription(\$this->command->getDescription());
        }

        \$this->addOption('em', null, InputOption::VALUE_OPTIONAL, 'The entity manager to use for this command');
    }

    /**
     * {@inheritDoc}
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        return \$this->wrapCommand(\$input->getOption('em'))->execute(\$input, \$output);
    }

    /**
     * {@inheritDoc}
     */
    protected function interact(InputInterface \$input, OutputInterface \$output)
    {
        \$this->wrapCommand(\$input->getOption('em'))->interact(\$input, \$output);
    }

    /**
     * {@inheritDoc}
     */
    protected function initialize(InputInterface \$input, OutputInterface \$output)
    {
        \$this->wrapCommand(\$input->getOption('em'))->initialize(\$input, \$output);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/doctrine-bundle/Command/Proxy/DelegateCommand.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy;

use Doctrine\\ORM\\Version;
use RuntimeException;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;

/**
 * Command Delegate.
 */
abstract class DelegateCommand extends Command
{
    /** @var Command */
    protected \$command;

    /**
     * @return Command
     */
    abstract protected function createCommand();

    /**
     * @return string
     */
    protected function getMinimalVersion()
    {
        return '2.3.0-DEV';
    }

    /**
     * @return bool
     */
    private function isVersionCompatible()
    {
        return version_compare(Version::VERSION, \$this->getMinimalVersion()) >= 0;
    }

    /**
     * {@inheritDoc}
     */
    public function isEnabled()
    {
        return \$this->isVersionCompatible();
    }

    /**
     * @param string \$entityManagerName
     *
     * @return Command
     */
    protected function wrapCommand(\$entityManagerName)
    {
        if (! \$this->isVersionCompatible()) {
            throw new RuntimeException(sprintf('\"%s\" requires doctrine-orm \"%s\" or newer', \$this->getName(), \$this->getMinimalVersion()));
        }

        DoctrineCommandHelper::setApplicationEntityManager(\$this->getApplication(), \$entityManagerName);
        \$this->command->setApplication(\$this->getApplication());

        return \$this->command;
    }

    /**
     * {@inheritDoc}
     */
    protected function configure()
    {
        if (\$this->isVersionCompatible()) {
            \$this->command = \$this->createCommand();

            \$this->setHelp(\$this->command->getHelp());
            \$this->setDefinition(\$this->command->getDefinition());
            \$this->setDescription(\$this->command->getDescription());
        }

        \$this->addOption('em', null, InputOption::VALUE_OPTIONAL, 'The entity manager to use for this command');
    }

    /**
     * {@inheritDoc}
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        return \$this->wrapCommand(\$input->getOption('em'))->execute(\$input, \$output);
    }

    /**
     * {@inheritDoc}
     */
    protected function interact(InputInterface \$input, OutputInterface \$output)
    {
        \$this->wrapCommand(\$input->getOption('em'))->interact(\$input, \$output);
    }

    /**
     * {@inheritDoc}
     */
    protected function initialize(InputInterface \$input, OutputInterface \$output)
    {
        \$this->wrapCommand(\$input->getOption('em'))->initialize(\$input, \$output);
    }
}
", "vendor/doctrine/doctrine-bundle/Command/Proxy/DelegateCommand.php", "/var/www/public/DevLaon/templates/vendor/doctrine/doctrine-bundle/Command/Proxy/DelegateCommand.php");
    }
}
