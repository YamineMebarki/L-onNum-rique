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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/SQLServer2012Platform.php */
class __TwigTemplate_4dd6b9835eb92a756eb3fbcd870fd23eee1f25f0be512f23267059b3c8ce032a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/SQLServer2012Platform.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/SQLServer2012Platform.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Platforms;

use Doctrine\\DBAL\\Schema\\Sequence;
use const PREG_OFFSET_CAPTURE;
use function preg_match;
use function preg_match_all;
use function substr_count;

/**
 * Platform to ensure compatibility of Doctrine with Microsoft SQL Server 2012 version.
 *
 * Differences to SQL Server 2008 and before are that sequences are introduced,
 * and support for the new OFFSET... FETCH syntax for result pagination has been added.
 */
class SQLServer2012Platform extends SQLServer2008Platform
{
    /**
     * {@inheritdoc}
     */
    public function getAlterSequenceSQL(Sequence \$sequence)
    {
        return 'ALTER SEQUENCE ' . \$sequence->getQuotedName(\$this) .
               ' INCREMENT BY ' . \$sequence->getAllocationSize();
    }

    /**
     * {@inheritdoc}
     */
    public function getCreateSequenceSQL(Sequence \$sequence)
    {
        return 'CREATE SEQUENCE ' . \$sequence->getQuotedName(\$this) .
               ' START WITH ' . \$sequence->getInitialValue() .
               ' INCREMENT BY ' . \$sequence->getAllocationSize() .
               ' MINVALUE ' . \$sequence->getInitialValue();
    }

    /**
     * {@inheritdoc}
     */
    public function getDropSequenceSQL(\$sequence)
    {
        if (\$sequence instanceof Sequence) {
            \$sequence = \$sequence->getQuotedName(\$this);
        }

        return 'DROP SEQUENCE ' . \$sequence;
    }

    /**
     * {@inheritdoc}
     */
    public function getListSequencesSQL(\$database)
    {
        return 'SELECT seq.name,
                       CAST(
                           seq.increment AS VARCHAR(MAX)
                       ) AS increment, -- CAST avoids driver error for sql_variant type
                       CAST(
                           seq.start_value AS VARCHAR(MAX)
                       ) AS start_value -- CAST avoids driver error for sql_variant type
                FROM   sys.sequences AS seq';
    }

    /**
     * {@inheritdoc}
     */
    public function getSequenceNextValSQL(\$sequenceName)
    {
        return 'SELECT NEXT VALUE FOR ' . \$sequenceName;
    }

    /**
     * {@inheritdoc}
     */
    public function supportsSequences()
    {
        return true;
    }

    /**
     * {@inheritdoc}
     *
     * Returns Microsoft SQL Server 2012 specific keywords class
     */
    protected function getReservedKeywordsClass()
    {
        return Keywords\\SQLServer2012Keywords::class;
    }

    /**
     * {@inheritdoc}
     */
    protected function doModifyLimitQuery(\$query, \$limit, \$offset = null)
    {
        if (\$limit === null && \$offset <= 0) {
            return \$query;
        }

        // Queries using OFFSET... FETCH MUST have an ORDER BY clause
        // Find the position of the last instance of ORDER BY and ensure it is not within a parenthetical statement
        // but can be in a newline
        \$matches      = [];
        \$matchesCount = preg_match_all('/[\\\\s]+order\\\\s+by\\\\s/im', \$query, \$matches, PREG_OFFSET_CAPTURE);
        \$orderByPos   = false;
        if (\$matchesCount > 0) {
            \$orderByPos = \$matches[0][(\$matchesCount - 1)][1];
        }

        if (\$orderByPos === false
            || substr_count(\$query, '(', \$orderByPos) - substr_count(\$query, ')', \$orderByPos)
        ) {
            if (preg_match('/^SELECT\\s+DISTINCT/im', \$query)) {
                // SQL Server won't let us order by a non-selected column in a DISTINCT query,
                // so we have to do this madness. This says, order by the first column in the
                // result. SQL Server's docs say that a nonordered query's result order is non-
                // deterministic anyway, so this won't do anything that a bunch of update and
                // deletes to the table wouldn't do anyway.
                \$query .= ' ORDER BY 1';
            } else {
                // In another DBMS, we could do ORDER BY 0, but SQL Server gets angry if you
                // use constant expressions in the order by list.
                \$query .= ' ORDER BY (SELECT 0)';
            }
        }

        if (\$offset === null) {
            \$offset = 0;
        }

        // This looks somewhat like MYSQL, but limit/offset are in inverse positions
        // Supposedly SQL:2008 core standard.
        // Per TSQL spec, FETCH NEXT n ROWS ONLY is not valid without OFFSET n ROWS.
        \$query .= ' OFFSET ' . (int) \$offset . ' ROWS';

        if (\$limit !== null) {
            \$query .= ' FETCH NEXT ' . (int) \$limit . ' ROWS ONLY';
        }

        return \$query;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/SQLServer2012Platform.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Platforms;

use Doctrine\\DBAL\\Schema\\Sequence;
use const PREG_OFFSET_CAPTURE;
use function preg_match;
use function preg_match_all;
use function substr_count;

/**
 * Platform to ensure compatibility of Doctrine with Microsoft SQL Server 2012 version.
 *
 * Differences to SQL Server 2008 and before are that sequences are introduced,
 * and support for the new OFFSET... FETCH syntax for result pagination has been added.
 */
class SQLServer2012Platform extends SQLServer2008Platform
{
    /**
     * {@inheritdoc}
     */
    public function getAlterSequenceSQL(Sequence \$sequence)
    {
        return 'ALTER SEQUENCE ' . \$sequence->getQuotedName(\$this) .
               ' INCREMENT BY ' . \$sequence->getAllocationSize();
    }

    /**
     * {@inheritdoc}
     */
    public function getCreateSequenceSQL(Sequence \$sequence)
    {
        return 'CREATE SEQUENCE ' . \$sequence->getQuotedName(\$this) .
               ' START WITH ' . \$sequence->getInitialValue() .
               ' INCREMENT BY ' . \$sequence->getAllocationSize() .
               ' MINVALUE ' . \$sequence->getInitialValue();
    }

    /**
     * {@inheritdoc}
     */
    public function getDropSequenceSQL(\$sequence)
    {
        if (\$sequence instanceof Sequence) {
            \$sequence = \$sequence->getQuotedName(\$this);
        }

        return 'DROP SEQUENCE ' . \$sequence;
    }

    /**
     * {@inheritdoc}
     */
    public function getListSequencesSQL(\$database)
    {
        return 'SELECT seq.name,
                       CAST(
                           seq.increment AS VARCHAR(MAX)
                       ) AS increment, -- CAST avoids driver error for sql_variant type
                       CAST(
                           seq.start_value AS VARCHAR(MAX)
                       ) AS start_value -- CAST avoids driver error for sql_variant type
                FROM   sys.sequences AS seq';
    }

    /**
     * {@inheritdoc}
     */
    public function getSequenceNextValSQL(\$sequenceName)
    {
        return 'SELECT NEXT VALUE FOR ' . \$sequenceName;
    }

    /**
     * {@inheritdoc}
     */
    public function supportsSequences()
    {
        return true;
    }

    /**
     * {@inheritdoc}
     *
     * Returns Microsoft SQL Server 2012 specific keywords class
     */
    protected function getReservedKeywordsClass()
    {
        return Keywords\\SQLServer2012Keywords::class;
    }

    /**
     * {@inheritdoc}
     */
    protected function doModifyLimitQuery(\$query, \$limit, \$offset = null)
    {
        if (\$limit === null && \$offset <= 0) {
            return \$query;
        }

        // Queries using OFFSET... FETCH MUST have an ORDER BY clause
        // Find the position of the last instance of ORDER BY and ensure it is not within a parenthetical statement
        // but can be in a newline
        \$matches      = [];
        \$matchesCount = preg_match_all('/[\\\\s]+order\\\\s+by\\\\s/im', \$query, \$matches, PREG_OFFSET_CAPTURE);
        \$orderByPos   = false;
        if (\$matchesCount > 0) {
            \$orderByPos = \$matches[0][(\$matchesCount - 1)][1];
        }

        if (\$orderByPos === false
            || substr_count(\$query, '(', \$orderByPos) - substr_count(\$query, ')', \$orderByPos)
        ) {
            if (preg_match('/^SELECT\\s+DISTINCT/im', \$query)) {
                // SQL Server won't let us order by a non-selected column in a DISTINCT query,
                // so we have to do this madness. This says, order by the first column in the
                // result. SQL Server's docs say that a nonordered query's result order is non-
                // deterministic anyway, so this won't do anything that a bunch of update and
                // deletes to the table wouldn't do anyway.
                \$query .= ' ORDER BY 1';
            } else {
                // In another DBMS, we could do ORDER BY 0, but SQL Server gets angry if you
                // use constant expressions in the order by list.
                \$query .= ' ORDER BY (SELECT 0)';
            }
        }

        if (\$offset === null) {
            \$offset = 0;
        }

        // This looks somewhat like MYSQL, but limit/offset are in inverse positions
        // Supposedly SQL:2008 core standard.
        // Per TSQL spec, FETCH NEXT n ROWS ONLY is not valid without OFFSET n ROWS.
        \$query .= ' OFFSET ' . (int) \$offset . ' ROWS';

        if (\$limit !== null) {
            \$query .= ' FETCH NEXT ' . (int) \$limit . ' ROWS ONLY';
        }

        return \$query;
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/SQLServer2012Platform.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/SQLServer2012Platform.php");
    }
}
