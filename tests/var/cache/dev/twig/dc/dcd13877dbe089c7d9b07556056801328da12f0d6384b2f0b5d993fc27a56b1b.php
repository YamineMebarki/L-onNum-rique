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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Portability/Statement.php */
class __TwigTemplate_6c4aa9fde779f98872bd34ff3555591e63104ee705d7ab8d35956cf4b4913c4f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Portability/Statement.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Portability/Statement.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Portability;

use Doctrine\\DBAL\\Driver\\Statement as DriverStatement;
use Doctrine\\DBAL\\Driver\\StatementIterator;
use Doctrine\\DBAL\\FetchMode;
use Doctrine\\DBAL\\ParameterType;
use IteratorAggregate;
use PDO;
use function array_change_key_case;
use function is_string;
use function rtrim;

/**
 * Portability wrapper for a Statement.
 */
class Statement implements IteratorAggregate, DriverStatement
{
    /** @var int */
    private \$portability;

    /** @var DriverStatement */
    private \$stmt;

    /** @var int */
    private \$case;

    /** @var int */
    private \$defaultFetchMode = FetchMode::MIXED;

    /**
     * Wraps <tt>Statement</tt> and applies portability measures.
     *
     * @param DriverStatement \$stmt
     */
    public function __construct(\$stmt, Connection \$conn)
    {
        \$this->stmt        = \$stmt;
        \$this->portability = \$conn->getPortability();
        \$this->case        = \$conn->getFetchCase();
    }

    /**
     * {@inheritdoc}
     */
    public function bindParam(\$column, &\$variable, \$type = ParameterType::STRING, \$length = null)
    {
        return \$this->stmt->bindParam(\$column, \$variable, \$type, \$length);
    }

    /**
     * {@inheritdoc}
     */
    public function bindValue(\$param, \$value, \$type = ParameterType::STRING)
    {
        return \$this->stmt->bindValue(\$param, \$value, \$type);
    }

    /**
     * {@inheritdoc}
     */
    public function closeCursor()
    {
        return \$this->stmt->closeCursor();
    }

    /**
     * {@inheritdoc}
     */
    public function columnCount()
    {
        return \$this->stmt->columnCount();
    }

    /**
     * {@inheritdoc}
     */
    public function errorCode()
    {
        return \$this->stmt->errorCode();
    }

    /**
     * {@inheritdoc}
     */
    public function errorInfo()
    {
        return \$this->stmt->errorInfo();
    }

    /**
     * {@inheritdoc}
     */
    public function execute(\$params = null)
    {
        return \$this->stmt->execute(\$params);
    }

    /**
     * {@inheritdoc}
     */
    public function setFetchMode(\$fetchMode, \$arg1 = null, \$arg2 = null)
    {
        \$this->defaultFetchMode = \$fetchMode;

        return \$this->stmt->setFetchMode(\$fetchMode, \$arg1, \$arg2);
    }

    /**
     * {@inheritdoc}
     */
    public function getIterator()
    {
        return new StatementIterator(\$this);
    }

    /**
     * {@inheritdoc}
     */
    public function fetch(\$fetchMode = null, \$cursorOrientation = PDO::FETCH_ORI_NEXT, \$cursorOffset = 0)
    {
        \$fetchMode = \$fetchMode ?: \$this->defaultFetchMode;

        \$row = \$this->stmt->fetch(\$fetchMode);

        \$iterateRow = \$this->portability & (Connection::PORTABILITY_EMPTY_TO_NULL|Connection::PORTABILITY_RTRIM);
        \$fixCase    = \$this->case !== null
            && (\$fetchMode === FetchMode::ASSOCIATIVE || \$fetchMode === FetchMode::MIXED)
            && (\$this->portability & Connection::PORTABILITY_FIX_CASE);

        \$row = \$this->fixRow(\$row, \$iterateRow, \$fixCase);

        return \$row;
    }

    /**
     * {@inheritdoc}
     */
    public function fetchAll(\$fetchMode = null, \$fetchArgument = null, \$ctorArgs = null)
    {
        \$fetchMode = \$fetchMode ?: \$this->defaultFetchMode;

        if (\$fetchArgument) {
            \$rows = \$this->stmt->fetchAll(\$fetchMode, \$fetchArgument);
        } else {
            \$rows = \$this->stmt->fetchAll(\$fetchMode);
        }

        \$iterateRow = \$this->portability & (Connection::PORTABILITY_EMPTY_TO_NULL|Connection::PORTABILITY_RTRIM);
        \$fixCase    = \$this->case !== null
            && (\$fetchMode === FetchMode::ASSOCIATIVE || \$fetchMode === FetchMode::MIXED)
            && (\$this->portability & Connection::PORTABILITY_FIX_CASE);

        if (! \$iterateRow && ! \$fixCase) {
            return \$rows;
        }

        if (\$fetchMode === FetchMode::COLUMN) {
            foreach (\$rows as \$num => \$row) {
                \$rows[\$num] = [\$row];
            }
        }

        foreach (\$rows as \$num => \$row) {
            \$rows[\$num] = \$this->fixRow(\$row, \$iterateRow, \$fixCase);
        }

        if (\$fetchMode === FetchMode::COLUMN) {
            foreach (\$rows as \$num => \$row) {
                \$rows[\$num] = \$row[0];
            }
        }

        return \$rows;
    }

    /**
     * @param mixed \$row
     * @param int   \$iterateRow
     * @param bool  \$fixCase
     *
     * @return mixed
     */
    protected function fixRow(\$row, \$iterateRow, \$fixCase)
    {
        if (! \$row) {
            return \$row;
        }

        if (\$fixCase) {
            \$row = array_change_key_case(\$row, \$this->case);
        }

        if (\$iterateRow) {
            foreach (\$row as \$k => \$v) {
                if ((\$this->portability & Connection::PORTABILITY_EMPTY_TO_NULL) && \$v === '') {
                    \$row[\$k] = null;
                } elseif ((\$this->portability & Connection::PORTABILITY_RTRIM) && is_string(\$v)) {
                    \$row[\$k] = rtrim(\$v);
                }
            }
        }

        return \$row;
    }

    /**
     * {@inheritdoc}
     */
    public function fetchColumn(\$columnIndex = 0)
    {
        \$value = \$this->stmt->fetchColumn(\$columnIndex);

        if (\$this->portability & (Connection::PORTABILITY_EMPTY_TO_NULL|Connection::PORTABILITY_RTRIM)) {
            if ((\$this->portability & Connection::PORTABILITY_EMPTY_TO_NULL) && \$value === '') {
                \$value = null;
            } elseif ((\$this->portability & Connection::PORTABILITY_RTRIM) && is_string(\$value)) {
                \$value = rtrim(\$value);
            }
        }

        return \$value;
    }

    /**
     * {@inheritdoc}
     */
    public function rowCount()
    {
        return \$this->stmt->rowCount();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Portability/Statement.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Portability;

use Doctrine\\DBAL\\Driver\\Statement as DriverStatement;
use Doctrine\\DBAL\\Driver\\StatementIterator;
use Doctrine\\DBAL\\FetchMode;
use Doctrine\\DBAL\\ParameterType;
use IteratorAggregate;
use PDO;
use function array_change_key_case;
use function is_string;
use function rtrim;

/**
 * Portability wrapper for a Statement.
 */
class Statement implements IteratorAggregate, DriverStatement
{
    /** @var int */
    private \$portability;

    /** @var DriverStatement */
    private \$stmt;

    /** @var int */
    private \$case;

    /** @var int */
    private \$defaultFetchMode = FetchMode::MIXED;

    /**
     * Wraps <tt>Statement</tt> and applies portability measures.
     *
     * @param DriverStatement \$stmt
     */
    public function __construct(\$stmt, Connection \$conn)
    {
        \$this->stmt        = \$stmt;
        \$this->portability = \$conn->getPortability();
        \$this->case        = \$conn->getFetchCase();
    }

    /**
     * {@inheritdoc}
     */
    public function bindParam(\$column, &\$variable, \$type = ParameterType::STRING, \$length = null)
    {
        return \$this->stmt->bindParam(\$column, \$variable, \$type, \$length);
    }

    /**
     * {@inheritdoc}
     */
    public function bindValue(\$param, \$value, \$type = ParameterType::STRING)
    {
        return \$this->stmt->bindValue(\$param, \$value, \$type);
    }

    /**
     * {@inheritdoc}
     */
    public function closeCursor()
    {
        return \$this->stmt->closeCursor();
    }

    /**
     * {@inheritdoc}
     */
    public function columnCount()
    {
        return \$this->stmt->columnCount();
    }

    /**
     * {@inheritdoc}
     */
    public function errorCode()
    {
        return \$this->stmt->errorCode();
    }

    /**
     * {@inheritdoc}
     */
    public function errorInfo()
    {
        return \$this->stmt->errorInfo();
    }

    /**
     * {@inheritdoc}
     */
    public function execute(\$params = null)
    {
        return \$this->stmt->execute(\$params);
    }

    /**
     * {@inheritdoc}
     */
    public function setFetchMode(\$fetchMode, \$arg1 = null, \$arg2 = null)
    {
        \$this->defaultFetchMode = \$fetchMode;

        return \$this->stmt->setFetchMode(\$fetchMode, \$arg1, \$arg2);
    }

    /**
     * {@inheritdoc}
     */
    public function getIterator()
    {
        return new StatementIterator(\$this);
    }

    /**
     * {@inheritdoc}
     */
    public function fetch(\$fetchMode = null, \$cursorOrientation = PDO::FETCH_ORI_NEXT, \$cursorOffset = 0)
    {
        \$fetchMode = \$fetchMode ?: \$this->defaultFetchMode;

        \$row = \$this->stmt->fetch(\$fetchMode);

        \$iterateRow = \$this->portability & (Connection::PORTABILITY_EMPTY_TO_NULL|Connection::PORTABILITY_RTRIM);
        \$fixCase    = \$this->case !== null
            && (\$fetchMode === FetchMode::ASSOCIATIVE || \$fetchMode === FetchMode::MIXED)
            && (\$this->portability & Connection::PORTABILITY_FIX_CASE);

        \$row = \$this->fixRow(\$row, \$iterateRow, \$fixCase);

        return \$row;
    }

    /**
     * {@inheritdoc}
     */
    public function fetchAll(\$fetchMode = null, \$fetchArgument = null, \$ctorArgs = null)
    {
        \$fetchMode = \$fetchMode ?: \$this->defaultFetchMode;

        if (\$fetchArgument) {
            \$rows = \$this->stmt->fetchAll(\$fetchMode, \$fetchArgument);
        } else {
            \$rows = \$this->stmt->fetchAll(\$fetchMode);
        }

        \$iterateRow = \$this->portability & (Connection::PORTABILITY_EMPTY_TO_NULL|Connection::PORTABILITY_RTRIM);
        \$fixCase    = \$this->case !== null
            && (\$fetchMode === FetchMode::ASSOCIATIVE || \$fetchMode === FetchMode::MIXED)
            && (\$this->portability & Connection::PORTABILITY_FIX_CASE);

        if (! \$iterateRow && ! \$fixCase) {
            return \$rows;
        }

        if (\$fetchMode === FetchMode::COLUMN) {
            foreach (\$rows as \$num => \$row) {
                \$rows[\$num] = [\$row];
            }
        }

        foreach (\$rows as \$num => \$row) {
            \$rows[\$num] = \$this->fixRow(\$row, \$iterateRow, \$fixCase);
        }

        if (\$fetchMode === FetchMode::COLUMN) {
            foreach (\$rows as \$num => \$row) {
                \$rows[\$num] = \$row[0];
            }
        }

        return \$rows;
    }

    /**
     * @param mixed \$row
     * @param int   \$iterateRow
     * @param bool  \$fixCase
     *
     * @return mixed
     */
    protected function fixRow(\$row, \$iterateRow, \$fixCase)
    {
        if (! \$row) {
            return \$row;
        }

        if (\$fixCase) {
            \$row = array_change_key_case(\$row, \$this->case);
        }

        if (\$iterateRow) {
            foreach (\$row as \$k => \$v) {
                if ((\$this->portability & Connection::PORTABILITY_EMPTY_TO_NULL) && \$v === '') {
                    \$row[\$k] = null;
                } elseif ((\$this->portability & Connection::PORTABILITY_RTRIM) && is_string(\$v)) {
                    \$row[\$k] = rtrim(\$v);
                }
            }
        }

        return \$row;
    }

    /**
     * {@inheritdoc}
     */
    public function fetchColumn(\$columnIndex = 0)
    {
        \$value = \$this->stmt->fetchColumn(\$columnIndex);

        if (\$this->portability & (Connection::PORTABILITY_EMPTY_TO_NULL|Connection::PORTABILITY_RTRIM)) {
            if ((\$this->portability & Connection::PORTABILITY_EMPTY_TO_NULL) && \$value === '') {
                \$value = null;
            } elseif ((\$this->portability & Connection::PORTABILITY_RTRIM) && is_string(\$value)) {
                \$value = rtrim(\$value);
            }
        }

        return \$value;
    }

    /**
     * {@inheritdoc}
     */
    public function rowCount()
    {
        return \$this->stmt->rowCount();
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Portability/Statement.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Portability/Statement.php");
    }
}
