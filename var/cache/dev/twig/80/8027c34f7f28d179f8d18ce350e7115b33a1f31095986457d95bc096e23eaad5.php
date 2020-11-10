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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Cache/ResultCacheStatement.php */
class __TwigTemplate_f082d901f106bc7a18c4d99b75db5a0da0dbbb76f11a389080b2f232a104e8ff extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Cache/ResultCacheStatement.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Cache/ResultCacheStatement.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Cache;

use ArrayIterator;
use Doctrine\\Common\\Cache\\Cache;
use Doctrine\\DBAL\\Driver\\ResultStatement;
use Doctrine\\DBAL\\Driver\\Statement;
use Doctrine\\DBAL\\FetchMode;
use InvalidArgumentException;
use IteratorAggregate;
use PDO;
use function array_merge;
use function array_values;
use function reset;

/**
 * Cache statement for SQL results.
 *
 * A result is saved in multiple cache keys, there is the originally specified
 * cache key which is just pointing to result rows by key. The following things
 * have to be ensured:
 *
 * 1. lifetime of the original key has to be longer than that of all the individual rows keys
 * 2. if any one row key is missing the query has to be re-executed.
 *
 * Also you have to realize that the cache will load the whole result into memory at once to ensure 2.
 * This means that the memory usage for cached results might increase by using this feature.
 */
class ResultCacheStatement implements IteratorAggregate, ResultStatement
{
    /** @var Cache */
    private \$resultCache;

    /** @var string */
    private \$cacheKey;

    /** @var string */
    private \$realKey;

    /** @var int */
    private \$lifetime;

    /** @var Statement */
    private \$statement;

    /**
     * Did we reach the end of the statement?
     *
     * @var bool
     */
    private \$emptied = false;

    /** @var mixed[] */
    private \$data;

    /** @var int */
    private \$defaultFetchMode = FetchMode::MIXED;

    /**
     * @param string \$cacheKey
     * @param string \$realKey
     * @param int    \$lifetime
     */
    public function __construct(Statement \$stmt, Cache \$resultCache, \$cacheKey, \$realKey, \$lifetime)
    {
        \$this->statement   = \$stmt;
        \$this->resultCache = \$resultCache;
        \$this->cacheKey    = \$cacheKey;
        \$this->realKey     = \$realKey;
        \$this->lifetime    = \$lifetime;
    }

    /**
     * {@inheritdoc}
     */
    public function closeCursor()
    {
        \$this->statement->closeCursor();
        if (! \$this->emptied || \$this->data === null) {
            return true;
        }

        \$data = \$this->resultCache->fetch(\$this->cacheKey);
        if (! \$data) {
            \$data = [];
        }
        \$data[\$this->realKey] = \$this->data;

        \$this->resultCache->save(\$this->cacheKey, \$data, \$this->lifetime);
        unset(\$this->data);

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function columnCount()
    {
        return \$this->statement->columnCount();
    }

    /**
     * {@inheritdoc}
     */
    public function setFetchMode(\$fetchMode, \$arg2 = null, \$arg3 = null)
    {
        \$this->defaultFetchMode = \$fetchMode;

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function getIterator()
    {
        \$data = \$this->fetchAll();

        return new ArrayIterator(\$data);
    }

    /**
     * {@inheritdoc}
     */
    public function fetch(\$fetchMode = null, \$cursorOrientation = PDO::FETCH_ORI_NEXT, \$cursorOffset = 0)
    {
        if (\$this->data === null) {
            \$this->data = [];
        }

        \$row = \$this->statement->fetch(FetchMode::ASSOCIATIVE);

        if (\$row) {
            \$this->data[] = \$row;

            \$fetchMode = \$fetchMode ?: \$this->defaultFetchMode;

            if (\$fetchMode === FetchMode::ASSOCIATIVE) {
                return \$row;
            }

            if (\$fetchMode === FetchMode::NUMERIC) {
                return array_values(\$row);
            }

            if (\$fetchMode === FetchMode::MIXED) {
                return array_merge(\$row, array_values(\$row));
            }

            if (\$fetchMode === FetchMode::COLUMN) {
                return reset(\$row);
            }

            throw new InvalidArgumentException('Invalid fetch-style given for caching result.');
        }

        \$this->emptied = true;

        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function fetchAll(\$fetchMode = null, \$fetchArgument = null, \$ctorArgs = null)
    {
        \$this->data    = \$this->statement->fetchAll(\$fetchMode, \$fetchArgument, \$ctorArgs);
        \$this->emptied = true;

        return \$this->data;
    }

    /**
     * {@inheritdoc}
     */
    public function fetchColumn(\$columnIndex = 0)
    {
        \$row = \$this->fetch(FetchMode::NUMERIC);

        // Todo: verify that return false is the correct behavior
        return \$row[\$columnIndex] ?? false;
    }

    /**
     * Returns the number of rows affected by the last DELETE, INSERT, or UPDATE statement
     * executed by the corresponding object.
     *
     * If the last SQL statement executed by the associated Statement object was a SELECT statement,
     * some databases may return the number of rows returned by that statement. However,
     * this behaviour is not guaranteed for all databases and should not be
     * relied on for portable applications.
     *
     * @return int The number of rows.
     */
    public function rowCount()
    {
        return \$this->statement->rowCount();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Cache/ResultCacheStatement.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Cache;

use ArrayIterator;
use Doctrine\\Common\\Cache\\Cache;
use Doctrine\\DBAL\\Driver\\ResultStatement;
use Doctrine\\DBAL\\Driver\\Statement;
use Doctrine\\DBAL\\FetchMode;
use InvalidArgumentException;
use IteratorAggregate;
use PDO;
use function array_merge;
use function array_values;
use function reset;

/**
 * Cache statement for SQL results.
 *
 * A result is saved in multiple cache keys, there is the originally specified
 * cache key which is just pointing to result rows by key. The following things
 * have to be ensured:
 *
 * 1. lifetime of the original key has to be longer than that of all the individual rows keys
 * 2. if any one row key is missing the query has to be re-executed.
 *
 * Also you have to realize that the cache will load the whole result into memory at once to ensure 2.
 * This means that the memory usage for cached results might increase by using this feature.
 */
class ResultCacheStatement implements IteratorAggregate, ResultStatement
{
    /** @var Cache */
    private \$resultCache;

    /** @var string */
    private \$cacheKey;

    /** @var string */
    private \$realKey;

    /** @var int */
    private \$lifetime;

    /** @var Statement */
    private \$statement;

    /**
     * Did we reach the end of the statement?
     *
     * @var bool
     */
    private \$emptied = false;

    /** @var mixed[] */
    private \$data;

    /** @var int */
    private \$defaultFetchMode = FetchMode::MIXED;

    /**
     * @param string \$cacheKey
     * @param string \$realKey
     * @param int    \$lifetime
     */
    public function __construct(Statement \$stmt, Cache \$resultCache, \$cacheKey, \$realKey, \$lifetime)
    {
        \$this->statement   = \$stmt;
        \$this->resultCache = \$resultCache;
        \$this->cacheKey    = \$cacheKey;
        \$this->realKey     = \$realKey;
        \$this->lifetime    = \$lifetime;
    }

    /**
     * {@inheritdoc}
     */
    public function closeCursor()
    {
        \$this->statement->closeCursor();
        if (! \$this->emptied || \$this->data === null) {
            return true;
        }

        \$data = \$this->resultCache->fetch(\$this->cacheKey);
        if (! \$data) {
            \$data = [];
        }
        \$data[\$this->realKey] = \$this->data;

        \$this->resultCache->save(\$this->cacheKey, \$data, \$this->lifetime);
        unset(\$this->data);

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function columnCount()
    {
        return \$this->statement->columnCount();
    }

    /**
     * {@inheritdoc}
     */
    public function setFetchMode(\$fetchMode, \$arg2 = null, \$arg3 = null)
    {
        \$this->defaultFetchMode = \$fetchMode;

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function getIterator()
    {
        \$data = \$this->fetchAll();

        return new ArrayIterator(\$data);
    }

    /**
     * {@inheritdoc}
     */
    public function fetch(\$fetchMode = null, \$cursorOrientation = PDO::FETCH_ORI_NEXT, \$cursorOffset = 0)
    {
        if (\$this->data === null) {
            \$this->data = [];
        }

        \$row = \$this->statement->fetch(FetchMode::ASSOCIATIVE);

        if (\$row) {
            \$this->data[] = \$row;

            \$fetchMode = \$fetchMode ?: \$this->defaultFetchMode;

            if (\$fetchMode === FetchMode::ASSOCIATIVE) {
                return \$row;
            }

            if (\$fetchMode === FetchMode::NUMERIC) {
                return array_values(\$row);
            }

            if (\$fetchMode === FetchMode::MIXED) {
                return array_merge(\$row, array_values(\$row));
            }

            if (\$fetchMode === FetchMode::COLUMN) {
                return reset(\$row);
            }

            throw new InvalidArgumentException('Invalid fetch-style given for caching result.');
        }

        \$this->emptied = true;

        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function fetchAll(\$fetchMode = null, \$fetchArgument = null, \$ctorArgs = null)
    {
        \$this->data    = \$this->statement->fetchAll(\$fetchMode, \$fetchArgument, \$ctorArgs);
        \$this->emptied = true;

        return \$this->data;
    }

    /**
     * {@inheritdoc}
     */
    public function fetchColumn(\$columnIndex = 0)
    {
        \$row = \$this->fetch(FetchMode::NUMERIC);

        // Todo: verify that return false is the correct behavior
        return \$row[\$columnIndex] ?? false;
    }

    /**
     * Returns the number of rows affected by the last DELETE, INSERT, or UPDATE statement
     * executed by the corresponding object.
     *
     * If the last SQL statement executed by the associated Statement object was a SELECT statement,
     * some databases may return the number of rows returned by that statement. However,
     * this behaviour is not guaranteed for all databases and should not be
     * relied on for portable applications.
     *
     * @return int The number of rows.
     */
    public function rowCount()
    {
        return \$this->statement->rowCount();
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Cache/ResultCacheStatement.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Cache/ResultCacheStatement.php");
    }
}
