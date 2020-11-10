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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/SQLServerKeywords.php */
class __TwigTemplate_065664ed1cd07ee846fdda5af31e0bdc9ef468fcaa6e13613954ce7e13c26f2a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/SQLServerKeywords.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/SQLServerKeywords.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Platforms\\Keywords;

/**
 * Microsoft SQL Server 2000 reserved keyword dictionary.
 *
 * @link    www.doctrine-project.com
 */
class SQLServerKeywords extends KeywordList
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'SQLServer';
    }

    /**
     * {@inheritdoc}
     *
     * @link http://msdn.microsoft.com/en-us/library/aa238507%28v=sql.80%29.aspx
     */
    protected function getKeywords()
    {
        return [
            'ADD',
            'ALL',
            'ALTER',
            'AND',
            'ANY',
            'AS',
            'ASC',
            'AUTHORIZATION',
            'BACKUP',
            'BEGIN',
            'BETWEEN',
            'BREAK',
            'BROWSE',
            'BULK',
            'BY',
            'CASCADE',
            'CASE',
            'CHECK',
            'CHECKPOINT',
            'CLOSE',
            'CLUSTERED',
            'COALESCE',
            'COLLATE',
            'COLUMN',
            'COMMIT',
            'COMPUTE',
            'CONSTRAINT',
            'CONTAINS',
            'CONTAINSTABLE',
            'CONTINUE',
            'CONVERT',
            'CREATE',
            'CROSS',
            'CURRENT',
            'CURRENT_DATE',
            'CURRENT_TIME',
            'CURRENT_TIMESTAMP',
            'CURRENT_USER',
            'CURSOR',
            'DATABASE',
            'DBCC',
            'DEALLOCATE',
            'DECLARE',
            'DEFAULT',
            'DELETE',
            'DENY',
            'DESC',
            'DISK',
            'DISTINCT',
            'DISTRIBUTED',
            'DOUBLE',
            'DROP',
            'DUMP',
            'ELSE',
            'END',
            'ERRLVL',
            'ESCAPE',
            'EXCEPT',
            'EXEC',
            'EXECUTE',
            'EXISTS',
            'EXIT',
            'EXTERNAL',
            'FETCH',
            'FILE',
            'FILLFACTOR',
            'FOR',
            'FOREIGN',
            'FREETEXT',
            'FREETEXTTABLE',
            'FROM',
            'FULL',
            'FUNCTION',
            'GOTO',
            'GRANT',
            'GROUP',
            'HAVING',
            'HOLDLOCK',
            'IDENTITY',
            'IDENTITY_INSERT',
            'IDENTITYCOL',
            'IF',
            'IN',
            'INDEX',
            'INNER',
            'INSERT',
            'INTERSECT',
            'INTO',
            'IS',
            'JOIN',
            'KEY',
            'KILL',
            'LEFT',
            'LIKE',
            'LINENO',
            'LOAD',
            'NATIONAL',
            'NOCHECK ',
            'NONCLUSTERED',
            'NOT',
            'NULL',
            'NULLIF',
            'OF',
            'OFF',
            'OFFSETS',
            'ON',
            'OPEN',
            'OPENDATASOURCE',
            'OPENQUERY',
            'OPENROWSET',
            'OPENXML',
            'OPTION',
            'OR',
            'ORDER',
            'OUTER',
            'OVER',
            'PERCENT',
            'PIVOT',
            'PLAN',
            'PRECISION',
            'PRIMARY',
            'PRINT',
            'PROC',
            'PROCEDURE',
            'PUBLIC',
            'RAISERROR',
            'READ',
            'READTEXT',
            'RECONFIGURE',
            'REFERENCES',
            'REPLICATION',
            'RESTORE',
            'RESTRICT',
            'RETURN',
            'REVERT',
            'REVOKE',
            'RIGHT',
            'ROLLBACK',
            'ROWCOUNT',
            'ROWGUIDCOL',
            'RULE',
            'SAVE',
            'SCHEMA',
            'SECURITYAUDIT',
            'SELECT',
            'SESSION_USER',
            'SET',
            'SETUSER',
            'SHUTDOWN',
            'SOME',
            'STATISTICS',
            'SYSTEM_USER',
            'TABLE',
            'TABLESAMPLE',
            'TEXTSIZE',
            'THEN',
            'TO',
            'TOP',
            'TRAN',
            'TRANSACTION',
            'TRIGGER',
            'TRUNCATE',
            'TSEQUAL',
            'UNION',
            'UNIQUE',
            'UNPIVOT',
            'UPDATE',
            'UPDATETEXT',
            'USE',
            'USER',
            'VALUES',
            'VARYING',
            'VIEW',
            'WAITFOR',
            'WHEN',
            'WHERE',
            'WHILE',
            'WITH',
            'WRITETEXT',
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/SQLServerKeywords.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Platforms\\Keywords;

/**
 * Microsoft SQL Server 2000 reserved keyword dictionary.
 *
 * @link    www.doctrine-project.com
 */
class SQLServerKeywords extends KeywordList
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'SQLServer';
    }

    /**
     * {@inheritdoc}
     *
     * @link http://msdn.microsoft.com/en-us/library/aa238507%28v=sql.80%29.aspx
     */
    protected function getKeywords()
    {
        return [
            'ADD',
            'ALL',
            'ALTER',
            'AND',
            'ANY',
            'AS',
            'ASC',
            'AUTHORIZATION',
            'BACKUP',
            'BEGIN',
            'BETWEEN',
            'BREAK',
            'BROWSE',
            'BULK',
            'BY',
            'CASCADE',
            'CASE',
            'CHECK',
            'CHECKPOINT',
            'CLOSE',
            'CLUSTERED',
            'COALESCE',
            'COLLATE',
            'COLUMN',
            'COMMIT',
            'COMPUTE',
            'CONSTRAINT',
            'CONTAINS',
            'CONTAINSTABLE',
            'CONTINUE',
            'CONVERT',
            'CREATE',
            'CROSS',
            'CURRENT',
            'CURRENT_DATE',
            'CURRENT_TIME',
            'CURRENT_TIMESTAMP',
            'CURRENT_USER',
            'CURSOR',
            'DATABASE',
            'DBCC',
            'DEALLOCATE',
            'DECLARE',
            'DEFAULT',
            'DELETE',
            'DENY',
            'DESC',
            'DISK',
            'DISTINCT',
            'DISTRIBUTED',
            'DOUBLE',
            'DROP',
            'DUMP',
            'ELSE',
            'END',
            'ERRLVL',
            'ESCAPE',
            'EXCEPT',
            'EXEC',
            'EXECUTE',
            'EXISTS',
            'EXIT',
            'EXTERNAL',
            'FETCH',
            'FILE',
            'FILLFACTOR',
            'FOR',
            'FOREIGN',
            'FREETEXT',
            'FREETEXTTABLE',
            'FROM',
            'FULL',
            'FUNCTION',
            'GOTO',
            'GRANT',
            'GROUP',
            'HAVING',
            'HOLDLOCK',
            'IDENTITY',
            'IDENTITY_INSERT',
            'IDENTITYCOL',
            'IF',
            'IN',
            'INDEX',
            'INNER',
            'INSERT',
            'INTERSECT',
            'INTO',
            'IS',
            'JOIN',
            'KEY',
            'KILL',
            'LEFT',
            'LIKE',
            'LINENO',
            'LOAD',
            'NATIONAL',
            'NOCHECK ',
            'NONCLUSTERED',
            'NOT',
            'NULL',
            'NULLIF',
            'OF',
            'OFF',
            'OFFSETS',
            'ON',
            'OPEN',
            'OPENDATASOURCE',
            'OPENQUERY',
            'OPENROWSET',
            'OPENXML',
            'OPTION',
            'OR',
            'ORDER',
            'OUTER',
            'OVER',
            'PERCENT',
            'PIVOT',
            'PLAN',
            'PRECISION',
            'PRIMARY',
            'PRINT',
            'PROC',
            'PROCEDURE',
            'PUBLIC',
            'RAISERROR',
            'READ',
            'READTEXT',
            'RECONFIGURE',
            'REFERENCES',
            'REPLICATION',
            'RESTORE',
            'RESTRICT',
            'RETURN',
            'REVERT',
            'REVOKE',
            'RIGHT',
            'ROLLBACK',
            'ROWCOUNT',
            'ROWGUIDCOL',
            'RULE',
            'SAVE',
            'SCHEMA',
            'SECURITYAUDIT',
            'SELECT',
            'SESSION_USER',
            'SET',
            'SETUSER',
            'SHUTDOWN',
            'SOME',
            'STATISTICS',
            'SYSTEM_USER',
            'TABLE',
            'TABLESAMPLE',
            'TEXTSIZE',
            'THEN',
            'TO',
            'TOP',
            'TRAN',
            'TRANSACTION',
            'TRIGGER',
            'TRUNCATE',
            'TSEQUAL',
            'UNION',
            'UNIQUE',
            'UNPIVOT',
            'UPDATE',
            'UPDATETEXT',
            'USE',
            'USER',
            'VALUES',
            'VARYING',
            'VIEW',
            'WAITFOR',
            'WHEN',
            'WHERE',
            'WHILE',
            'WITH',
            'WRITETEXT',
        ];
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/SQLServerKeywords.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/SQLServerKeywords.php");
    }
}
