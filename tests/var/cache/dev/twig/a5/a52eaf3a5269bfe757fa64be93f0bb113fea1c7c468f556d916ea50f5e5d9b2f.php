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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Configuration.php */
class __TwigTemplate_5116f97880fbbe0dcd458b5b302ce2a88c12ba5890056ad7a5bafcb283725969 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Configuration.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Configuration.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL;

use Doctrine\\Common\\Cache\\Cache;
use Doctrine\\DBAL\\Logging\\SQLLogger;
use Doctrine\\DBAL\\Schema\\AbstractAsset;
use function preg_match;

/**
 * Configuration container for the Doctrine DBAL.
 *
 * @internal When adding a new configuration option just write a getter/setter
 *           pair and add the option to the _attributes array with a proper default value.
 */
class Configuration
{
    /**
     * The attributes that are contained in the configuration.
     * Values are default values.
     *
     * @var mixed[]
     */
    protected \$_attributes = [];

    /**
     * Sets the SQL logger to use. Defaults to NULL which means SQL logging is disabled.
     *
     * @return void
     */
    public function setSQLLogger(?SQLLogger \$logger = null)
    {
        \$this->_attributes['sqlLogger'] = \$logger;
    }

    /**
     * Gets the SQL logger that is used.
     *
     * @return SQLLogger|null
     */
    public function getSQLLogger()
    {
        return \$this->_attributes['sqlLogger'] ?? null;
    }

    /**
     * Gets the cache driver implementation that is used for query result caching.
     *
     * @return Cache|null
     */
    public function getResultCacheImpl()
    {
        return \$this->_attributes['resultCacheImpl'] ?? null;
    }

    /**
     * Sets the cache driver implementation that is used for query result caching.
     *
     * @return void
     */
    public function setResultCacheImpl(Cache \$cacheImpl)
    {
        \$this->_attributes['resultCacheImpl'] = \$cacheImpl;
    }

    /**
     * Sets the filter schema assets expression.
     *
     * Only include tables/sequences matching the filter expression regexp in
     * schema instances generated for the active connection when calling
     * {AbstractSchemaManager#createSchema()}.
     *
     * @deprecated Use Configuration::setSchemaAssetsFilter() instead
     *
     * @param string \$filterExpression
     *
     * @return void
     */
    public function setFilterSchemaAssetsExpression(\$filterExpression)
    {
        \$this->_attributes['filterSchemaAssetsExpression'] = \$filterExpression;
        if (\$filterExpression) {
            \$this->_attributes['filterSchemaAssetsExpressionCallable'] = \$this->buildSchemaAssetsFilterFromExpression(\$filterExpression);
        } else {
            \$this->_attributes['filterSchemaAssetsExpressionCallable'] = null;
        }
    }

    /**
     * Returns filter schema assets expression.
     *
     * @deprecated Use Configuration::getSchemaAssetsFilter() instead
     *
     * @return string|null
     */
    public function getFilterSchemaAssetsExpression()
    {
        return \$this->_attributes['filterSchemaAssetsExpression'] ?? null;
    }

    /**
     * @param string \$filterExpression
     */
    private function buildSchemaAssetsFilterFromExpression(\$filterExpression) : callable
    {
        return static function (\$assetName) use (\$filterExpression) {
            if (\$assetName instanceof AbstractAsset) {
                \$assetName = \$assetName->getName();
            }
            return preg_match(\$filterExpression, \$assetName);
        };
    }

    /**
     * Sets the callable to use to filter schema assets.
     */
    public function setSchemaAssetsFilter(?callable \$callable = null) : ?callable
    {
        \$this->_attributes['filterSchemaAssetsExpression']                = null;
        return \$this->_attributes['filterSchemaAssetsExpressionCallable'] = \$callable;
    }

    /**
     * Returns the callable to use to filter schema assets.
     */
    public function getSchemaAssetsFilter() : ?callable
    {
        return \$this->_attributes['filterSchemaAssetsExpressionCallable'] ?? null;
    }

    /**
     * Sets the default auto-commit mode for connections.
     *
     * If a connection is in auto-commit mode, then all its SQL statements will be executed and committed as individual
     * transactions. Otherwise, its SQL statements are grouped into transactions that are terminated by a call to either
     * the method commit or the method rollback. By default, new connections are in auto-commit mode.
     *
     * @see   getAutoCommit
     *
     * @param bool \$autoCommit True to enable auto-commit mode; false to disable it.
     */
    public function setAutoCommit(\$autoCommit)
    {
        \$this->_attributes['autoCommit'] = (bool) \$autoCommit;
    }

    /**
     * Returns the default auto-commit mode for connections.
     *
     * @see    setAutoCommit
     *
     * @return bool True if auto-commit mode is enabled by default for connections, false otherwise.
     */
    public function getAutoCommit()
    {
        return \$this->_attributes['autoCommit'] ?? true;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Configuration.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL;

use Doctrine\\Common\\Cache\\Cache;
use Doctrine\\DBAL\\Logging\\SQLLogger;
use Doctrine\\DBAL\\Schema\\AbstractAsset;
use function preg_match;

/**
 * Configuration container for the Doctrine DBAL.
 *
 * @internal When adding a new configuration option just write a getter/setter
 *           pair and add the option to the _attributes array with a proper default value.
 */
class Configuration
{
    /**
     * The attributes that are contained in the configuration.
     * Values are default values.
     *
     * @var mixed[]
     */
    protected \$_attributes = [];

    /**
     * Sets the SQL logger to use. Defaults to NULL which means SQL logging is disabled.
     *
     * @return void
     */
    public function setSQLLogger(?SQLLogger \$logger = null)
    {
        \$this->_attributes['sqlLogger'] = \$logger;
    }

    /**
     * Gets the SQL logger that is used.
     *
     * @return SQLLogger|null
     */
    public function getSQLLogger()
    {
        return \$this->_attributes['sqlLogger'] ?? null;
    }

    /**
     * Gets the cache driver implementation that is used for query result caching.
     *
     * @return Cache|null
     */
    public function getResultCacheImpl()
    {
        return \$this->_attributes['resultCacheImpl'] ?? null;
    }

    /**
     * Sets the cache driver implementation that is used for query result caching.
     *
     * @return void
     */
    public function setResultCacheImpl(Cache \$cacheImpl)
    {
        \$this->_attributes['resultCacheImpl'] = \$cacheImpl;
    }

    /**
     * Sets the filter schema assets expression.
     *
     * Only include tables/sequences matching the filter expression regexp in
     * schema instances generated for the active connection when calling
     * {AbstractSchemaManager#createSchema()}.
     *
     * @deprecated Use Configuration::setSchemaAssetsFilter() instead
     *
     * @param string \$filterExpression
     *
     * @return void
     */
    public function setFilterSchemaAssetsExpression(\$filterExpression)
    {
        \$this->_attributes['filterSchemaAssetsExpression'] = \$filterExpression;
        if (\$filterExpression) {
            \$this->_attributes['filterSchemaAssetsExpressionCallable'] = \$this->buildSchemaAssetsFilterFromExpression(\$filterExpression);
        } else {
            \$this->_attributes['filterSchemaAssetsExpressionCallable'] = null;
        }
    }

    /**
     * Returns filter schema assets expression.
     *
     * @deprecated Use Configuration::getSchemaAssetsFilter() instead
     *
     * @return string|null
     */
    public function getFilterSchemaAssetsExpression()
    {
        return \$this->_attributes['filterSchemaAssetsExpression'] ?? null;
    }

    /**
     * @param string \$filterExpression
     */
    private function buildSchemaAssetsFilterFromExpression(\$filterExpression) : callable
    {
        return static function (\$assetName) use (\$filterExpression) {
            if (\$assetName instanceof AbstractAsset) {
                \$assetName = \$assetName->getName();
            }
            return preg_match(\$filterExpression, \$assetName);
        };
    }

    /**
     * Sets the callable to use to filter schema assets.
     */
    public function setSchemaAssetsFilter(?callable \$callable = null) : ?callable
    {
        \$this->_attributes['filterSchemaAssetsExpression']                = null;
        return \$this->_attributes['filterSchemaAssetsExpressionCallable'] = \$callable;
    }

    /**
     * Returns the callable to use to filter schema assets.
     */
    public function getSchemaAssetsFilter() : ?callable
    {
        return \$this->_attributes['filterSchemaAssetsExpressionCallable'] ?? null;
    }

    /**
     * Sets the default auto-commit mode for connections.
     *
     * If a connection is in auto-commit mode, then all its SQL statements will be executed and committed as individual
     * transactions. Otherwise, its SQL statements are grouped into transactions that are terminated by a call to either
     * the method commit or the method rollback. By default, new connections are in auto-commit mode.
     *
     * @see   getAutoCommit
     *
     * @param bool \$autoCommit True to enable auto-commit mode; false to disable it.
     */
    public function setAutoCommit(\$autoCommit)
    {
        \$this->_attributes['autoCommit'] = (bool) \$autoCommit;
    }

    /**
     * Returns the default auto-commit mode for connections.
     *
     * @see    setAutoCommit
     *
     * @return bool True if auto-commit mode is enabled by default for connections, false otherwise.
     */
    public function getAutoCommit()
    {
        return \$this->_attributes['autoCommit'] ?? true;
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Configuration.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Configuration.php");
    }
}
