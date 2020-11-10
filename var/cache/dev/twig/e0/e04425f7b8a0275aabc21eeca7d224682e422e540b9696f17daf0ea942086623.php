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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Sharding/PoolingShardConnection.php */
class __TwigTemplate_124138ad1a583f94bd60e4eaaad424c817a1f30264cf88a44de38582f9839992 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Sharding/PoolingShardConnection.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Sharding/PoolingShardConnection.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Sharding;

use Doctrine\\Common\\EventManager;
use Doctrine\\DBAL\\Configuration;
use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\Driver;
use Doctrine\\DBAL\\Driver\\Connection as DriverConnection;
use Doctrine\\DBAL\\Event\\ConnectionEventArgs;
use Doctrine\\DBAL\\Events;
use Doctrine\\DBAL\\Sharding\\ShardChoser\\ShardChoser;
use InvalidArgumentException;
use function array_merge;
use function is_numeric;
use function is_string;

/**
 * Sharding implementation that pools many different connections
 * internally and serves data from the currently active connection.
 *
 * The internals of this class are:
 *
 * - All sharding clients are specified and given a shard-id during
 *   configuration.
 * - By default, the global shard is selected. If no global shard is configured
 *   an exception is thrown on access.
 * - Selecting a shard by distribution value delegates the mapping
 *   \"distributionValue\" => \"client\" to the ShardChooser interface.
 * - An exception is thrown if trying to switch shards during an open
 *   transaction.
 *
 * Instantiation through the DriverManager looks like:
 *
 * @example
 *
 * \$conn = DriverManager::getConnection(array(
 *    'wrapperClass' => 'Doctrine\\DBAL\\Sharding\\PoolingShardConnection',
 *    'driver' => 'pdo_mysql',
 *    'global' => array('user' => '', 'password' => '', 'host' => '', 'dbname' => ''),
 *    'shards' => array(
 *        array('id' => 1, 'user' => 'slave1', 'password', 'host' => '', 'dbname' => ''),
 *        array('id' => 2, 'user' => 'slave2', 'password', 'host' => '', 'dbname' => ''),
 *    ),
 *    'shardChoser' => 'Doctrine\\DBAL\\Sharding\\ShardChoser\\MultiTenantShardChoser',
 * ));
 * \$shardManager = \$conn->getShardManager();
 * \$shardManager->selectGlobal();
 * \$shardManager->selectShard(\$value);
 */
class PoolingShardConnection extends Connection
{
    /** @var DriverConnection[] */
    private \$activeConnections = [];

    /** @var int|null */
    private \$activeShardId;

    /** @var mixed[] */
    private \$connectionParameters = [];

    /**
     * {@inheritDoc}
     *
     * @throws InvalidArgumentException
     */
    public function __construct(array \$params, Driver \$driver, ?Configuration \$config = null, ?EventManager \$eventManager = null)
    {
        if (! isset(\$params['global'], \$params['shards'])) {
            throw new InvalidArgumentException(\"Connection Parameters require 'global' and 'shards' configurations.\");
        }

        if (! isset(\$params['shardChoser'])) {
            throw new InvalidArgumentException(\"Missing Shard Choser configuration 'shardChoser'\");
        }

        if (is_string(\$params['shardChoser'])) {
            \$params['shardChoser'] = new \$params['shardChoser']();
        }

        if (! (\$params['shardChoser'] instanceof ShardChoser)) {
            throw new InvalidArgumentException(\"The 'shardChoser' configuration is not a valid instance of Doctrine\\DBAL\\Sharding\\ShardChoser\\ShardChoser\");
        }

        \$this->connectionParameters[0] = array_merge(\$params, \$params['global']);

        foreach (\$params['shards'] as \$shard) {
            if (! isset(\$shard['id'])) {
                throw new InvalidArgumentException(\"Missing 'id' for one configured shard. Please specify a unique shard-id.\");
            }

            if (! is_numeric(\$shard['id']) || \$shard['id'] < 1) {
                throw new InvalidArgumentException('Shard Id has to be a non-negative number.');
            }

            if (isset(\$this->connectionParameters[\$shard['id']])) {
                throw new InvalidArgumentException('Shard ' . \$shard['id'] . ' is duplicated in the configuration.');
            }

            \$this->connectionParameters[\$shard['id']] = array_merge(\$params, \$shard);
        }

        parent::__construct(\$params, \$driver, \$config, \$eventManager);
    }

    /**
     * Get active shard id.
     *
     * @return int
     */
    public function getActiveShardId()
    {
        return \$this->activeShardId;
    }

    /**
     * {@inheritdoc}
     */
    public function getParams()
    {
        return \$this->activeShardId ? \$this->connectionParameters[\$this->activeShardId] : \$this->connectionParameters[0];
    }

    /**
     * {@inheritdoc}
     */
    public function getHost()
    {
        \$params = \$this->getParams();

        return \$params['host'] ?? parent::getHost();
    }

    /**
     * {@inheritdoc}
     */
    public function getPort()
    {
        \$params = \$this->getParams();

        return \$params['port'] ?? parent::getPort();
    }

    /**
     * {@inheritdoc}
     */
    public function getUsername()
    {
        \$params = \$this->getParams();

        return \$params['user'] ?? parent::getUsername();
    }

    /**
     * {@inheritdoc}
     */
    public function getPassword()
    {
        \$params = \$this->getParams();

        return \$params['password'] ?? parent::getPassword();
    }

    /**
     * Connects to a given shard.
     *
     * @param mixed \$shardId
     *
     * @return bool
     *
     * @throws ShardingException
     */
    public function connect(\$shardId = null)
    {
        if (\$shardId === null && \$this->_conn) {
            return false;
        }

        if (\$shardId !== null && \$shardId === \$this->activeShardId) {
            return false;
        }

        if (\$this->getTransactionNestingLevel() > 0) {
            throw new ShardingException('Cannot switch shard when transaction is active.');
        }

        \$this->activeShardId = (int) \$shardId;

        if (isset(\$this->activeConnections[\$this->activeShardId])) {
            \$this->_conn = \$this->activeConnections[\$this->activeShardId];

            return false;
        }

        \$this->_conn = \$this->activeConnections[\$this->activeShardId] = \$this->connectTo(\$this->activeShardId);

        if (\$this->_eventManager->hasListeners(Events::postConnect)) {
            \$eventArgs = new ConnectionEventArgs(\$this);
            \$this->_eventManager->dispatchEvent(Events::postConnect, \$eventArgs);
        }

        return true;
    }

    /**
     * Connects to a specific connection.
     *
     * @param string \$shardId
     *
     * @return \\Doctrine\\DBAL\\Driver\\Connection
     */
    protected function connectTo(\$shardId)
    {
        \$params = \$this->getParams();

        \$driverOptions = \$params['driverOptions'] ?? [];

        \$connectionParams = \$this->connectionParameters[\$shardId];

        \$user     = \$connectionParams['user'] ?? null;
        \$password = \$connectionParams['password'] ?? null;

        return \$this->_driver->connect(\$connectionParams, \$user, \$password, \$driverOptions);
    }

    /**
     * @param string|null \$shardId
     *
     * @return bool
     */
    public function isConnected(\$shardId = null)
    {
        if (\$shardId === null) {
            return \$this->_conn !== null;
        }

        return isset(\$this->activeConnections[\$shardId]);
    }

    /**
     * @return void
     */
    public function close()
    {
        \$this->_conn             = null;
        \$this->activeConnections = [];
        \$this->activeShardId     = null;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Sharding/PoolingShardConnection.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Sharding;

use Doctrine\\Common\\EventManager;
use Doctrine\\DBAL\\Configuration;
use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\Driver;
use Doctrine\\DBAL\\Driver\\Connection as DriverConnection;
use Doctrine\\DBAL\\Event\\ConnectionEventArgs;
use Doctrine\\DBAL\\Events;
use Doctrine\\DBAL\\Sharding\\ShardChoser\\ShardChoser;
use InvalidArgumentException;
use function array_merge;
use function is_numeric;
use function is_string;

/**
 * Sharding implementation that pools many different connections
 * internally and serves data from the currently active connection.
 *
 * The internals of this class are:
 *
 * - All sharding clients are specified and given a shard-id during
 *   configuration.
 * - By default, the global shard is selected. If no global shard is configured
 *   an exception is thrown on access.
 * - Selecting a shard by distribution value delegates the mapping
 *   \"distributionValue\" => \"client\" to the ShardChooser interface.
 * - An exception is thrown if trying to switch shards during an open
 *   transaction.
 *
 * Instantiation through the DriverManager looks like:
 *
 * @example
 *
 * \$conn = DriverManager::getConnection(array(
 *    'wrapperClass' => 'Doctrine\\DBAL\\Sharding\\PoolingShardConnection',
 *    'driver' => 'pdo_mysql',
 *    'global' => array('user' => '', 'password' => '', 'host' => '', 'dbname' => ''),
 *    'shards' => array(
 *        array('id' => 1, 'user' => 'slave1', 'password', 'host' => '', 'dbname' => ''),
 *        array('id' => 2, 'user' => 'slave2', 'password', 'host' => '', 'dbname' => ''),
 *    ),
 *    'shardChoser' => 'Doctrine\\DBAL\\Sharding\\ShardChoser\\MultiTenantShardChoser',
 * ));
 * \$shardManager = \$conn->getShardManager();
 * \$shardManager->selectGlobal();
 * \$shardManager->selectShard(\$value);
 */
class PoolingShardConnection extends Connection
{
    /** @var DriverConnection[] */
    private \$activeConnections = [];

    /** @var int|null */
    private \$activeShardId;

    /** @var mixed[] */
    private \$connectionParameters = [];

    /**
     * {@inheritDoc}
     *
     * @throws InvalidArgumentException
     */
    public function __construct(array \$params, Driver \$driver, ?Configuration \$config = null, ?EventManager \$eventManager = null)
    {
        if (! isset(\$params['global'], \$params['shards'])) {
            throw new InvalidArgumentException(\"Connection Parameters require 'global' and 'shards' configurations.\");
        }

        if (! isset(\$params['shardChoser'])) {
            throw new InvalidArgumentException(\"Missing Shard Choser configuration 'shardChoser'\");
        }

        if (is_string(\$params['shardChoser'])) {
            \$params['shardChoser'] = new \$params['shardChoser']();
        }

        if (! (\$params['shardChoser'] instanceof ShardChoser)) {
            throw new InvalidArgumentException(\"The 'shardChoser' configuration is not a valid instance of Doctrine\\DBAL\\Sharding\\ShardChoser\\ShardChoser\");
        }

        \$this->connectionParameters[0] = array_merge(\$params, \$params['global']);

        foreach (\$params['shards'] as \$shard) {
            if (! isset(\$shard['id'])) {
                throw new InvalidArgumentException(\"Missing 'id' for one configured shard. Please specify a unique shard-id.\");
            }

            if (! is_numeric(\$shard['id']) || \$shard['id'] < 1) {
                throw new InvalidArgumentException('Shard Id has to be a non-negative number.');
            }

            if (isset(\$this->connectionParameters[\$shard['id']])) {
                throw new InvalidArgumentException('Shard ' . \$shard['id'] . ' is duplicated in the configuration.');
            }

            \$this->connectionParameters[\$shard['id']] = array_merge(\$params, \$shard);
        }

        parent::__construct(\$params, \$driver, \$config, \$eventManager);
    }

    /**
     * Get active shard id.
     *
     * @return int
     */
    public function getActiveShardId()
    {
        return \$this->activeShardId;
    }

    /**
     * {@inheritdoc}
     */
    public function getParams()
    {
        return \$this->activeShardId ? \$this->connectionParameters[\$this->activeShardId] : \$this->connectionParameters[0];
    }

    /**
     * {@inheritdoc}
     */
    public function getHost()
    {
        \$params = \$this->getParams();

        return \$params['host'] ?? parent::getHost();
    }

    /**
     * {@inheritdoc}
     */
    public function getPort()
    {
        \$params = \$this->getParams();

        return \$params['port'] ?? parent::getPort();
    }

    /**
     * {@inheritdoc}
     */
    public function getUsername()
    {
        \$params = \$this->getParams();

        return \$params['user'] ?? parent::getUsername();
    }

    /**
     * {@inheritdoc}
     */
    public function getPassword()
    {
        \$params = \$this->getParams();

        return \$params['password'] ?? parent::getPassword();
    }

    /**
     * Connects to a given shard.
     *
     * @param mixed \$shardId
     *
     * @return bool
     *
     * @throws ShardingException
     */
    public function connect(\$shardId = null)
    {
        if (\$shardId === null && \$this->_conn) {
            return false;
        }

        if (\$shardId !== null && \$shardId === \$this->activeShardId) {
            return false;
        }

        if (\$this->getTransactionNestingLevel() > 0) {
            throw new ShardingException('Cannot switch shard when transaction is active.');
        }

        \$this->activeShardId = (int) \$shardId;

        if (isset(\$this->activeConnections[\$this->activeShardId])) {
            \$this->_conn = \$this->activeConnections[\$this->activeShardId];

            return false;
        }

        \$this->_conn = \$this->activeConnections[\$this->activeShardId] = \$this->connectTo(\$this->activeShardId);

        if (\$this->_eventManager->hasListeners(Events::postConnect)) {
            \$eventArgs = new ConnectionEventArgs(\$this);
            \$this->_eventManager->dispatchEvent(Events::postConnect, \$eventArgs);
        }

        return true;
    }

    /**
     * Connects to a specific connection.
     *
     * @param string \$shardId
     *
     * @return \\Doctrine\\DBAL\\Driver\\Connection
     */
    protected function connectTo(\$shardId)
    {
        \$params = \$this->getParams();

        \$driverOptions = \$params['driverOptions'] ?? [];

        \$connectionParams = \$this->connectionParameters[\$shardId];

        \$user     = \$connectionParams['user'] ?? null;
        \$password = \$connectionParams['password'] ?? null;

        return \$this->_driver->connect(\$connectionParams, \$user, \$password, \$driverOptions);
    }

    /**
     * @param string|null \$shardId
     *
     * @return bool
     */
    public function isConnected(\$shardId = null)
    {
        if (\$shardId === null) {
            return \$this->_conn !== null;
        }

        return isset(\$this->activeConnections[\$shardId]);
    }

    /**
     * @return void
     */
    public function close()
    {
        \$this->_conn             = null;
        \$this->activeConnections = [];
        \$this->activeShardId     = null;
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Sharding/PoolingShardConnection.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Sharding/PoolingShardConnection.php");
    }
}
