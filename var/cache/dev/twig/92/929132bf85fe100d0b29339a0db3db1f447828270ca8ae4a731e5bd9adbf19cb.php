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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/DebugStack.php */
class __TwigTemplate_67bca43f4c66a5b2520c9fb7bf915533a79c47be88e184c842a8db712bd82497 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/DebugStack.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/DebugStack.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Logging;

use function microtime;

/**
 * Includes executed SQLs in a Debug Stack.
 */
class DebugStack implements SQLLogger
{
    /**
     * Executed SQL queries.
     *
     * @var mixed[][]
     */
    public \$queries = [];

    /**
     * If Debug Stack is enabled (log queries) or not.
     *
     * @var bool
     */
    public \$enabled = true;

    /** @var float|null */
    public \$start = null;

    /** @var int */
    public \$currentQuery = 0;

    /**
     * {@inheritdoc}
     */
    public function startQuery(\$sql, ?array \$params = null, ?array \$types = null)
    {
        if (! \$this->enabled) {
            return;
        }

        \$this->start                          = microtime(true);
        \$this->queries[++\$this->currentQuery] = ['sql' => \$sql, 'params' => \$params, 'types' => \$types, 'executionMS' => 0];
    }

    /**
     * {@inheritdoc}
     */
    public function stopQuery()
    {
        if (! \$this->enabled) {
            return;
        }

        \$this->queries[\$this->currentQuery]['executionMS'] = microtime(true) - \$this->start;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/DebugStack.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Logging;

use function microtime;

/**
 * Includes executed SQLs in a Debug Stack.
 */
class DebugStack implements SQLLogger
{
    /**
     * Executed SQL queries.
     *
     * @var mixed[][]
     */
    public \$queries = [];

    /**
     * If Debug Stack is enabled (log queries) or not.
     *
     * @var bool
     */
    public \$enabled = true;

    /** @var float|null */
    public \$start = null;

    /** @var int */
    public \$currentQuery = 0;

    /**
     * {@inheritdoc}
     */
    public function startQuery(\$sql, ?array \$params = null, ?array \$types = null)
    {
        if (! \$this->enabled) {
            return;
        }

        \$this->start                          = microtime(true);
        \$this->queries[++\$this->currentQuery] = ['sql' => \$sql, 'params' => \$params, 'types' => \$types, 'executionMS' => 0];
    }

    /**
     * {@inheritdoc}
     */
    public function stopQuery()
    {
        if (! \$this->enabled) {
            return;
        }

        \$this->queries[\$this->currentQuery]['executionMS'] = microtime(true) - \$this->start;
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/DebugStack.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/DebugStack.php");
    }
}
