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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Id/TableGenerator.php */
class __TwigTemplate_f2750ecd7afe3e21982f8cc059ec0c77a0926df3d5938791563a90912ed5e2a8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Id/TableGenerator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Id/TableGenerator.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Id;

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\DBALException;
use Doctrine\\DBAL\\DriverManager;
use Doctrine\\DBAL\\FetchMode;
use Doctrine\\DBAL\\LockMode;
use Throwable;
use const CASE_LOWER;
use function array_change_key_case;

/**
 * Table ID Generator for those poor languages that are missing sequences.
 *
 * WARNING: The Table Id Generator clones a second independent database
 * connection to work correctly. This means using the generator requests that
 * generate IDs will have two open database connections. This is necessary to
 * be safe from transaction failures in the main connection. Make sure to only
 * ever use one TableGenerator otherwise you end up with many connections.
 *
 * TableID Generator does not work with SQLite.
 *
 * The TableGenerator does not take care of creating the SQL Table itself. You
 * should look at the `TableGeneratorSchemaVisitor` to do this for you.
 * Otherwise the schema for a table looks like:
 *
 * CREATE sequences (
 *   sequence_name VARCHAR(255) NOT NULL,
 *   sequence_value INT NOT NULL DEFAULT 1,
 *   sequence_increment_by INT NOT NULL DEFAULT 1,
 *   PRIMARY KEY (sequence_name)
 * );
 *
 * Technically this generator works as follows:
 *
 * 1. Use a robust transaction serialization level.
 * 2. Open transaction
 * 3. Acquire a read lock on the table row (SELECT .. FOR UPDATE)
 * 4. Increment current value by one and write back to database
 * 5. Commit transaction
 *
 * If you are using a sequence_increment_by value that is larger than one the
 * ID Generator will keep incrementing values until it hits the incrementation
 * gap before issuing another query.
 *
 * If no row is present for a given sequence a new one will be created with the
 * default values 'value' = 1 and 'increment_by' = 1
 */
class TableGenerator
{
    /** @var Connection */
    private \$conn;

    /** @var string */
    private \$generatorTableName;

    /** @var mixed[][] */
    private \$sequences = [];

    /**
     * @param string \$generatorTableName
     *
     * @throws DBALException
     */
    public function __construct(Connection \$conn, \$generatorTableName = 'sequences')
    {
        \$params = \$conn->getParams();
        if (\$params['driver'] === 'pdo_sqlite') {
            throw new DBALException('Cannot use TableGenerator with SQLite.');
        }
        \$this->conn               = DriverManager::getConnection(\$params, \$conn->getConfiguration(), \$conn->getEventManager());
        \$this->generatorTableName = \$generatorTableName;
    }

    /**
     * Generates the next unused value for the given sequence name.
     *
     * @param string \$sequenceName
     *
     * @return int
     *
     * @throws DBALException
     */
    public function nextValue(\$sequenceName)
    {
        if (isset(\$this->sequences[\$sequenceName])) {
            \$value = \$this->sequences[\$sequenceName]['value'];
            \$this->sequences[\$sequenceName]['value']++;
            if (\$this->sequences[\$sequenceName]['value'] >= \$this->sequences[\$sequenceName]['max']) {
                unset(\$this->sequences[\$sequenceName]);
            }

            return \$value;
        }

        \$this->conn->beginTransaction();

        try {
            \$platform = \$this->conn->getDatabasePlatform();
            \$sql      = 'SELECT sequence_value, sequence_increment_by'
                . ' FROM ' . \$platform->appendLockHint(\$this->generatorTableName, LockMode::PESSIMISTIC_WRITE)
                . ' WHERE sequence_name = ? ' . \$platform->getWriteLockSQL();
            \$stmt     = \$this->conn->executeQuery(\$sql, [\$sequenceName]);
            \$row      = \$stmt->fetch(FetchMode::ASSOCIATIVE);

            if (\$row !== false) {
                \$row = array_change_key_case(\$row, CASE_LOWER);

                \$value = \$row['sequence_value'];
                \$value++;

                if (\$row['sequence_increment_by'] > 1) {
                    \$this->sequences[\$sequenceName] = [
                        'value' => \$value,
                        'max' => \$row['sequence_value'] + \$row['sequence_increment_by'],
                    ];
                }

                \$sql  = 'UPDATE ' . \$this->generatorTableName . ' ' .
                       'SET sequence_value = sequence_value + sequence_increment_by ' .
                       'WHERE sequence_name = ? AND sequence_value = ?';
                \$rows = \$this->conn->executeUpdate(\$sql, [\$sequenceName, \$row['sequence_value']]);

                if (\$rows !== 1) {
                    throw new DBALException('Race-condition detected while updating sequence. Aborting generation');
                }
            } else {
                \$this->conn->insert(
                    \$this->generatorTableName,
                    ['sequence_name' => \$sequenceName, 'sequence_value' => 1, 'sequence_increment_by' => 1]
                );
                \$value = 1;
            }

            \$this->conn->commit();
        } catch (Throwable \$e) {
            \$this->conn->rollBack();
            throw new DBALException('Error occurred while generating ID with TableGenerator, aborted generation: ' . \$e->getMessage(), 0, \$e);
        }

        return \$value;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Id/TableGenerator.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Id;

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\DBALException;
use Doctrine\\DBAL\\DriverManager;
use Doctrine\\DBAL\\FetchMode;
use Doctrine\\DBAL\\LockMode;
use Throwable;
use const CASE_LOWER;
use function array_change_key_case;

/**
 * Table ID Generator for those poor languages that are missing sequences.
 *
 * WARNING: The Table Id Generator clones a second independent database
 * connection to work correctly. This means using the generator requests that
 * generate IDs will have two open database connections. This is necessary to
 * be safe from transaction failures in the main connection. Make sure to only
 * ever use one TableGenerator otherwise you end up with many connections.
 *
 * TableID Generator does not work with SQLite.
 *
 * The TableGenerator does not take care of creating the SQL Table itself. You
 * should look at the `TableGeneratorSchemaVisitor` to do this for you.
 * Otherwise the schema for a table looks like:
 *
 * CREATE sequences (
 *   sequence_name VARCHAR(255) NOT NULL,
 *   sequence_value INT NOT NULL DEFAULT 1,
 *   sequence_increment_by INT NOT NULL DEFAULT 1,
 *   PRIMARY KEY (sequence_name)
 * );
 *
 * Technically this generator works as follows:
 *
 * 1. Use a robust transaction serialization level.
 * 2. Open transaction
 * 3. Acquire a read lock on the table row (SELECT .. FOR UPDATE)
 * 4. Increment current value by one and write back to database
 * 5. Commit transaction
 *
 * If you are using a sequence_increment_by value that is larger than one the
 * ID Generator will keep incrementing values until it hits the incrementation
 * gap before issuing another query.
 *
 * If no row is present for a given sequence a new one will be created with the
 * default values 'value' = 1 and 'increment_by' = 1
 */
class TableGenerator
{
    /** @var Connection */
    private \$conn;

    /** @var string */
    private \$generatorTableName;

    /** @var mixed[][] */
    private \$sequences = [];

    /**
     * @param string \$generatorTableName
     *
     * @throws DBALException
     */
    public function __construct(Connection \$conn, \$generatorTableName = 'sequences')
    {
        \$params = \$conn->getParams();
        if (\$params['driver'] === 'pdo_sqlite') {
            throw new DBALException('Cannot use TableGenerator with SQLite.');
        }
        \$this->conn               = DriverManager::getConnection(\$params, \$conn->getConfiguration(), \$conn->getEventManager());
        \$this->generatorTableName = \$generatorTableName;
    }

    /**
     * Generates the next unused value for the given sequence name.
     *
     * @param string \$sequenceName
     *
     * @return int
     *
     * @throws DBALException
     */
    public function nextValue(\$sequenceName)
    {
        if (isset(\$this->sequences[\$sequenceName])) {
            \$value = \$this->sequences[\$sequenceName]['value'];
            \$this->sequences[\$sequenceName]['value']++;
            if (\$this->sequences[\$sequenceName]['value'] >= \$this->sequences[\$sequenceName]['max']) {
                unset(\$this->sequences[\$sequenceName]);
            }

            return \$value;
        }

        \$this->conn->beginTransaction();

        try {
            \$platform = \$this->conn->getDatabasePlatform();
            \$sql      = 'SELECT sequence_value, sequence_increment_by'
                . ' FROM ' . \$platform->appendLockHint(\$this->generatorTableName, LockMode::PESSIMISTIC_WRITE)
                . ' WHERE sequence_name = ? ' . \$platform->getWriteLockSQL();
            \$stmt     = \$this->conn->executeQuery(\$sql, [\$sequenceName]);
            \$row      = \$stmt->fetch(FetchMode::ASSOCIATIVE);

            if (\$row !== false) {
                \$row = array_change_key_case(\$row, CASE_LOWER);

                \$value = \$row['sequence_value'];
                \$value++;

                if (\$row['sequence_increment_by'] > 1) {
                    \$this->sequences[\$sequenceName] = [
                        'value' => \$value,
                        'max' => \$row['sequence_value'] + \$row['sequence_increment_by'],
                    ];
                }

                \$sql  = 'UPDATE ' . \$this->generatorTableName . ' ' .
                       'SET sequence_value = sequence_value + sequence_increment_by ' .
                       'WHERE sequence_name = ? AND sequence_value = ?';
                \$rows = \$this->conn->executeUpdate(\$sql, [\$sequenceName, \$row['sequence_value']]);

                if (\$rows !== 1) {
                    throw new DBALException('Race-condition detected while updating sequence. Aborting generation');
                }
            } else {
                \$this->conn->insert(
                    \$this->generatorTableName,
                    ['sequence_name' => \$sequenceName, 'sequence_value' => 1, 'sequence_increment_by' => 1]
                );
                \$value = 1;
            }

            \$this->conn->commit();
        } catch (Throwable \$e) {
            \$this->conn->rollBack();
            throw new DBALException('Error occurred while generating ID with TableGenerator, aborted generation: ' . \$e->getMessage(), 0, \$e);
        }

        return \$value;
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Id/TableGenerator.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Id/TableGenerator.php");
    }
}
