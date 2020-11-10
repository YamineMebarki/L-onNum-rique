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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/SQLAnywhereKeywords.php */
class __TwigTemplate_b4c121ee38f55cb74c856a3a979375ab50ed22dfcfb46ae0ebd60786b0408d37 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/SQLAnywhereKeywords.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/SQLAnywhereKeywords.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Platforms\\Keywords;

/**
 * SAP Sybase SQL Anywhere 10 reserved keywords list.
 */
class SQLAnywhereKeywords extends KeywordList
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'SQLAnywhere';
    }

    /**
     * {@inheritdoc}
     *
     * @link http://infocenter.sybase.com/help/topic/com.sybase.dbrfen10/pdf/dbrfen10.pdf?noframes=true
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
            'ATTACH',
            'BACKUP',
            'BEGIN',
            'BETWEEN',
            'BIGINT',
            'BINARY',
            'BIT',
            'BOTTOM',
            'BREAK',
            'BY',
            'CALL',
            'CAPABILITY',
            'CASCADE',
            'CASE',
            'CAST',
            'CHAR',
            'CHAR_CONVERT',
            'CHARACTER',
            'CHECK',
            'CHECKPOINT',
            'CLOSE',
            'COMMENT',
            'COMMIT',
            'COMPRESSED',
            'CONFLICT',
            'CONNECT',
            'CONSTRAINT',
            'CONTAINS',
            'CONTINUE',
            'CONVERT',
            'CREATE',
            'CROSS',
            'CUBE',
            'CURRENT',
            'CURRENT_TIMESTAMP',
            'CURRENT_USER',
            'CURSOR',
            'DATE',
            'DBSPACE',
            'DEALLOCATE',
            'DEC',
            'DECIMAL',
            'DECLARE',
            'DEFAULT',
            'DELETE',
            'DELETING',
            'DESC',
            'DETACH',
            'DISTINCT',
            'DO',
            'DOUBLE',
            'DROP',
            'DYNAMIC',
            'ELSE',
            'ELSEIF',
            'ENCRYPTED',
            'END',
            'ENDIF',
            'ESCAPE',
            'EXCEPT',
            'EXCEPTION',
            'EXEC',
            'EXECUTE',
            'EXISTING',
            'EXISTS',
            'EXTERNLOGIN',
            'FETCH',
            'FIRST',
            'FLOAT',
            'FOR',
            'FORCE',
            'FOREIGN',
            'FORWARD',
            'FROM',
            'FULL',
            'GOTO',
            'GRANT',
            'GROUP',
            'HAVING',
            'HOLDLOCK',
            'IDENTIFIED',
            'IF',
            'IN',
            'INDEX',
            'INDEX_LPAREN',
            'INNER',
            'INOUT',
            'INSENSITIVE',
            'INSERT',
            'INSERTING',
            'INSTALL',
            'INSTEAD',
            'INT',
            'INTEGER',
            'INTEGRATED',
            'INTERSECT',
            'INTO',
            'IQ',
            'IS',
            'ISOLATION',
            'JOIN',
            'KERBEROS',
            'KEY',
            'LATERAL',
            'LEFT',
            'LIKE',
            'LOCK',
            'LOGIN',
            'LONG',
            'MATCH',
            'MEMBERSHIP',
            'MESSAGE',
            'MODE',
            'MODIFY',
            'NATURAL',
            'NCHAR',
            'NEW',
            'NO',
            'NOHOLDLOCK',
            'NOT',
            'NOTIFY',
            'NULL',
            'NUMERIC',
            'NVARCHAR',
            'OF',
            'OFF',
            'ON',
            'OPEN',
            'OPTION',
            'OPTIONS',
            'OR',
            'ORDER',
            'OTHERS',
            'OUT',
            'OUTER',
            'OVER',
            'PASSTHROUGH',
            'PRECISION',
            'PREPARE',
            'PRIMARY',
            'PRINT',
            'PRIVILEGES',
            'PROC',
            'PROCEDURE',
            'PUBLICATION',
            'RAISERROR',
            'READTEXT',
            'REAL',
            'REFERENCE',
            'REFERENCES',
            'REFRESH',
            'RELEASE',
            'REMOTE',
            'REMOVE',
            'RENAME',
            'REORGANIZE',
            'RESOURCE',
            'RESTORE',
            'RESTRICT',
            'RETURN',
            'REVOKE',
            'RIGHT',
            'ROLLBACK',
            'ROLLUP',
            'SAVE',
            'SAVEPOINT',
            'SCROLL',
            'SELECT',
            'SENSITIVE',
            'SESSION',
            'SET',
            'SETUSER',
            'SHARE',
            'SMALLINT',
            'SOME',
            'SQLCODE',
            'SQLSTATE',
            'START',
            'STOP',
            'SUBTRANS',
            'SUBTRANSACTION',
            'SYNCHRONIZE',
            'SYNTAX_ERROR',
            'TABLE',
            'TEMPORARY',
            'THEN',
            'TIME',
            'TIMESTAMP',
            'TINYINT',
            'TO',
            'TOP',
            'TRAN',
            'TRIGGER',
            'TRUNCATE',
            'TSEQUAL',
            'UNBOUNDED',
            'UNION',
            'UNIQUE',
            'UNIQUEIDENTIFIER',
            'UNKNOWN',
            'UNSIGNED',
            'UPDATE',
            'UPDATING',
            'USER',
            'USING',
            'VALIDATE',
            'VALUES',
            'VARBINARY',
            'VARBIT',
            'VARCHAR',
            'VARIABLE',
            'VARYING',
            'VIEW',
            'WAIT',
            'WAITFOR',
            'WHEN',
            'WHERE',
            'WHILE',
            'WINDOW',
            'WITH',
            'WITH_CUBE',
            'WITH_LPAREN',
            'WITH_ROLLUP',
            'WITHIN',
            'WORK',
            'WRITETEXT',
            'XML',
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/SQLAnywhereKeywords.php";
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
 * SAP Sybase SQL Anywhere 10 reserved keywords list.
 */
class SQLAnywhereKeywords extends KeywordList
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'SQLAnywhere';
    }

    /**
     * {@inheritdoc}
     *
     * @link http://infocenter.sybase.com/help/topic/com.sybase.dbrfen10/pdf/dbrfen10.pdf?noframes=true
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
            'ATTACH',
            'BACKUP',
            'BEGIN',
            'BETWEEN',
            'BIGINT',
            'BINARY',
            'BIT',
            'BOTTOM',
            'BREAK',
            'BY',
            'CALL',
            'CAPABILITY',
            'CASCADE',
            'CASE',
            'CAST',
            'CHAR',
            'CHAR_CONVERT',
            'CHARACTER',
            'CHECK',
            'CHECKPOINT',
            'CLOSE',
            'COMMENT',
            'COMMIT',
            'COMPRESSED',
            'CONFLICT',
            'CONNECT',
            'CONSTRAINT',
            'CONTAINS',
            'CONTINUE',
            'CONVERT',
            'CREATE',
            'CROSS',
            'CUBE',
            'CURRENT',
            'CURRENT_TIMESTAMP',
            'CURRENT_USER',
            'CURSOR',
            'DATE',
            'DBSPACE',
            'DEALLOCATE',
            'DEC',
            'DECIMAL',
            'DECLARE',
            'DEFAULT',
            'DELETE',
            'DELETING',
            'DESC',
            'DETACH',
            'DISTINCT',
            'DO',
            'DOUBLE',
            'DROP',
            'DYNAMIC',
            'ELSE',
            'ELSEIF',
            'ENCRYPTED',
            'END',
            'ENDIF',
            'ESCAPE',
            'EXCEPT',
            'EXCEPTION',
            'EXEC',
            'EXECUTE',
            'EXISTING',
            'EXISTS',
            'EXTERNLOGIN',
            'FETCH',
            'FIRST',
            'FLOAT',
            'FOR',
            'FORCE',
            'FOREIGN',
            'FORWARD',
            'FROM',
            'FULL',
            'GOTO',
            'GRANT',
            'GROUP',
            'HAVING',
            'HOLDLOCK',
            'IDENTIFIED',
            'IF',
            'IN',
            'INDEX',
            'INDEX_LPAREN',
            'INNER',
            'INOUT',
            'INSENSITIVE',
            'INSERT',
            'INSERTING',
            'INSTALL',
            'INSTEAD',
            'INT',
            'INTEGER',
            'INTEGRATED',
            'INTERSECT',
            'INTO',
            'IQ',
            'IS',
            'ISOLATION',
            'JOIN',
            'KERBEROS',
            'KEY',
            'LATERAL',
            'LEFT',
            'LIKE',
            'LOCK',
            'LOGIN',
            'LONG',
            'MATCH',
            'MEMBERSHIP',
            'MESSAGE',
            'MODE',
            'MODIFY',
            'NATURAL',
            'NCHAR',
            'NEW',
            'NO',
            'NOHOLDLOCK',
            'NOT',
            'NOTIFY',
            'NULL',
            'NUMERIC',
            'NVARCHAR',
            'OF',
            'OFF',
            'ON',
            'OPEN',
            'OPTION',
            'OPTIONS',
            'OR',
            'ORDER',
            'OTHERS',
            'OUT',
            'OUTER',
            'OVER',
            'PASSTHROUGH',
            'PRECISION',
            'PREPARE',
            'PRIMARY',
            'PRINT',
            'PRIVILEGES',
            'PROC',
            'PROCEDURE',
            'PUBLICATION',
            'RAISERROR',
            'READTEXT',
            'REAL',
            'REFERENCE',
            'REFERENCES',
            'REFRESH',
            'RELEASE',
            'REMOTE',
            'REMOVE',
            'RENAME',
            'REORGANIZE',
            'RESOURCE',
            'RESTORE',
            'RESTRICT',
            'RETURN',
            'REVOKE',
            'RIGHT',
            'ROLLBACK',
            'ROLLUP',
            'SAVE',
            'SAVEPOINT',
            'SCROLL',
            'SELECT',
            'SENSITIVE',
            'SESSION',
            'SET',
            'SETUSER',
            'SHARE',
            'SMALLINT',
            'SOME',
            'SQLCODE',
            'SQLSTATE',
            'START',
            'STOP',
            'SUBTRANS',
            'SUBTRANSACTION',
            'SYNCHRONIZE',
            'SYNTAX_ERROR',
            'TABLE',
            'TEMPORARY',
            'THEN',
            'TIME',
            'TIMESTAMP',
            'TINYINT',
            'TO',
            'TOP',
            'TRAN',
            'TRIGGER',
            'TRUNCATE',
            'TSEQUAL',
            'UNBOUNDED',
            'UNION',
            'UNIQUE',
            'UNIQUEIDENTIFIER',
            'UNKNOWN',
            'UNSIGNED',
            'UPDATE',
            'UPDATING',
            'USER',
            'USING',
            'VALIDATE',
            'VALUES',
            'VARBINARY',
            'VARBIT',
            'VARCHAR',
            'VARIABLE',
            'VARYING',
            'VIEW',
            'WAIT',
            'WAITFOR',
            'WHEN',
            'WHERE',
            'WHILE',
            'WINDOW',
            'WITH',
            'WITH_CUBE',
            'WITH_LPAREN',
            'WITH_ROLLUP',
            'WITHIN',
            'WORK',
            'WRITETEXT',
            'XML',
        ];
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/SQLAnywhereKeywords.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/SQLAnywhereKeywords.php");
    }
}
