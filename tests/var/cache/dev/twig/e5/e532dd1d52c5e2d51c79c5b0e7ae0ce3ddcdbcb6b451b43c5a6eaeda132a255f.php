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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Sharding/ShardManager.php */
class __TwigTemplate_aff0174ba04db00b6b8d4e6546e818bc6bf0f2f31f5b1efa93a6fe39179c0bd5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Sharding/ShardManager.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Sharding/ShardManager.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Sharding;

/**
 * Sharding Manager gives access to APIs to implementing sharding on top of
 * Doctrine\\DBAL\\Connection instances.
 *
 * For simplicity and developer ease-of-use (and understanding) the sharding
 * API only covers single shard queries, no fan-out support. It is primarily
 * suited for multi-tenant applications.
 *
 * The assumption about sharding here
 * is that a distribution value can be found that gives access to all the
 * necessary data for all use-cases. Switching between shards should be done with
 * caution, especially if lazy loading is implemented. Any query is always
 * executed against the last shard that was selected. If a query is created for
 * a shard Y but then a shard X is selected when its actually executed you
 * will hit the wrong shard.
 */
interface ShardManager
{
    /**
     * Selects global database with global data.
     *
     * This is the default database that is connected when no shard is
     * selected.
     *
     * @return void
     */
    public function selectGlobal();

    /**
     * Selects the shard against which the queries after this statement will be issued.
     *
     * @param string \$distributionValue
     *
     * @return void
     *
     * @throws ShardingException If no value is passed as shard identifier.
     */
    public function selectShard(\$distributionValue);

    /**
     * Gets the distribution value currently used for sharding.
     *
     * @return string|null
     */
    public function getCurrentDistributionValue();

    /**
     * Gets information about the amount of shards and other details.
     *
     * Format is implementation specific, each shard is one element and has an
     * 'id' attribute at least.
     *
     * @return mixed[][]
     */
    public function getShards();

    /**
     * Queries all shards in undefined order and return the results appended to
     * each other. Restore the previous distribution value after execution.
     *
     * Using {@link \\Doctrine\\DBAL\\Connection::fetchAll} to retrieve rows internally.
     *
     * @param string         \$sql
     * @param mixed[]        \$params
     * @param int[]|string[] \$types
     *
     * @return mixed[]
     */
    public function queryAll(\$sql, array \$params, array \$types);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Sharding/ShardManager.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Sharding;

/**
 * Sharding Manager gives access to APIs to implementing sharding on top of
 * Doctrine\\DBAL\\Connection instances.
 *
 * For simplicity and developer ease-of-use (and understanding) the sharding
 * API only covers single shard queries, no fan-out support. It is primarily
 * suited for multi-tenant applications.
 *
 * The assumption about sharding here
 * is that a distribution value can be found that gives access to all the
 * necessary data for all use-cases. Switching between shards should be done with
 * caution, especially if lazy loading is implemented. Any query is always
 * executed against the last shard that was selected. If a query is created for
 * a shard Y but then a shard X is selected when its actually executed you
 * will hit the wrong shard.
 */
interface ShardManager
{
    /**
     * Selects global database with global data.
     *
     * This is the default database that is connected when no shard is
     * selected.
     *
     * @return void
     */
    public function selectGlobal();

    /**
     * Selects the shard against which the queries after this statement will be issued.
     *
     * @param string \$distributionValue
     *
     * @return void
     *
     * @throws ShardingException If no value is passed as shard identifier.
     */
    public function selectShard(\$distributionValue);

    /**
     * Gets the distribution value currently used for sharding.
     *
     * @return string|null
     */
    public function getCurrentDistributionValue();

    /**
     * Gets information about the amount of shards and other details.
     *
     * Format is implementation specific, each shard is one element and has an
     * 'id' attribute at least.
     *
     * @return mixed[][]
     */
    public function getShards();

    /**
     * Queries all shards in undefined order and return the results appended to
     * each other. Restore the previous distribution value after execution.
     *
     * Using {@link \\Doctrine\\DBAL\\Connection::fetchAll} to retrieve rows internally.
     *
     * @param string         \$sql
     * @param mixed[]        \$params
     * @param int[]|string[] \$types
     *
     * @return mixed[]
     */
    public function queryAll(\$sql, array \$params, array \$types);
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Sharding/ShardManager.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Sharding/ShardManager.php");
    }
}
