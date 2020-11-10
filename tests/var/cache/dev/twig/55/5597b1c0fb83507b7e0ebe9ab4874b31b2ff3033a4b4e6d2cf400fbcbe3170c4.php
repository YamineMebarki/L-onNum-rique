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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/LoggerChain.php */
class __TwigTemplate_a10f089b6ed196a1100bcd38e453150e60982b81cac64cfe6ea677ef506f028a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/LoggerChain.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/LoggerChain.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Logging;

/**
 * Chains multiple SQLLogger.
 */
class LoggerChain implements SQLLogger
{
    /** @var SQLLogger[] */
    private \$loggers = [];

    /**
     * Adds a logger in the chain.
     *
     * @return void
     */
    public function addLogger(SQLLogger \$logger)
    {
        \$this->loggers[] = \$logger;
    }

    /**
     * {@inheritdoc}
     */
    public function startQuery(\$sql, ?array \$params = null, ?array \$types = null)
    {
        foreach (\$this->loggers as \$logger) {
            \$logger->startQuery(\$sql, \$params, \$types);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function stopQuery()
    {
        foreach (\$this->loggers as \$logger) {
            \$logger->stopQuery();
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/LoggerChain.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Logging;

/**
 * Chains multiple SQLLogger.
 */
class LoggerChain implements SQLLogger
{
    /** @var SQLLogger[] */
    private \$loggers = [];

    /**
     * Adds a logger in the chain.
     *
     * @return void
     */
    public function addLogger(SQLLogger \$logger)
    {
        \$this->loggers[] = \$logger;
    }

    /**
     * {@inheritdoc}
     */
    public function startQuery(\$sql, ?array \$params = null, ?array \$types = null)
    {
        foreach (\$this->loggers as \$logger) {
            \$logger->startQuery(\$sql, \$params, \$types);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function stopQuery()
    {
        foreach (\$this->loggers as \$logger) {
            \$logger->stopQuery();
        }
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/LoggerChain.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/LoggerChain.php");
    }
}
