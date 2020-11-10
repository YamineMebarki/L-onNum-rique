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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/PostgreSQL91Keywords.php */
class __TwigTemplate_5fc5035133c1bf2b31e6f955e26dd1f10cf5b70157ccee8cf50d8c40510804e7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/PostgreSQL91Keywords.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/PostgreSQL91Keywords.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Platforms\\Keywords;

/**
 * PostgreSQL 9.1 reserved keywords list.
 */
class PostgreSQL91Keywords extends PostgreSQLKeywords
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'PostgreSQL91';
    }

    /**
     * {@inheritdoc}
     *
     * @link http://www.postgresql.org/docs/9.1/static/sql-keywords-appendix.html
     */
    protected function getKeywords()
    {
        return [
            'ALL',
            'ANALYSE',
            'ANALYZE',
            'AND',
            'ANY',
            'ARRAY',
            'AS',
            'ASC',
            'ASYMMETRIC',
            'AUTHORIZATION',
            'BINARY',
            'BOTH',
            'CASE',
            'CAST',
            'CHECK',
            'COLLATE',
            'COLUMN',
            'CONCURRENTLY',
            'CONSTRAINT',
            'CREATE',
            'CROSS',
            'CURRENT_CATALOG',
            'CURRENT_DATE',
            'CURRENT_ROLE',
            'CURRENT_SCHEMA',
            'CURRENT_TIME',
            'CURRENT_TIMESTAMP',
            'CURRENT_USER',
            'DEFAULT',
            'DEFERRABLE',
            'DESC',
            'DISTINCT',
            'DO',
            'ELSE',
            'END',
            'EXCEPT',
            'FALSE',
            'FETCH',
            'FOR',
            'FOREIGN',
            'FREEZE',
            'FROM',
            'FULL',
            'GRANT',
            'GROUP',
            'HAVING',
            'ILIKE',
            'IN',
            'INITIALLY',
            'INNER',
            'INTERSECT',
            'INTO',
            'IS',
            'ISNULL',
            'JOIN',
            'LEADING',
            'LEFT',
            'LIKE',
            'LIMIT',
            'LOCALTIME',
            'LOCALTIMESTAMP',
            'NATURAL',
            'NOT',
            'NOTNULL',
            'NULL',
            'OFFSET',
            'ON',
            'ONLY',
            'OR',
            'ORDER',
            'OUTER',
            'OVER',
            'OVERLAPS',
            'PLACING',
            'PRIMARY',
            'REFERENCES',
            'RETURNING',
            'RIGHT',
            'SELECT',
            'SESSION_USER',
            'SIMILAR',
            'SOME',
            'SYMMETRIC',
            'TABLE',
            'THEN',
            'TO',
            'TRAILING',
            'TRUE',
            'UNION',
            'UNIQUE',
            'USER',
            'USING',
            'VARIADIC',
            'VERBOSE',
            'WHEN',
            'WHERE',
            'WINDOW',
            'WITH',
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/PostgreSQL91Keywords.php";
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
 * PostgreSQL 9.1 reserved keywords list.
 */
class PostgreSQL91Keywords extends PostgreSQLKeywords
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'PostgreSQL91';
    }

    /**
     * {@inheritdoc}
     *
     * @link http://www.postgresql.org/docs/9.1/static/sql-keywords-appendix.html
     */
    protected function getKeywords()
    {
        return [
            'ALL',
            'ANALYSE',
            'ANALYZE',
            'AND',
            'ANY',
            'ARRAY',
            'AS',
            'ASC',
            'ASYMMETRIC',
            'AUTHORIZATION',
            'BINARY',
            'BOTH',
            'CASE',
            'CAST',
            'CHECK',
            'COLLATE',
            'COLUMN',
            'CONCURRENTLY',
            'CONSTRAINT',
            'CREATE',
            'CROSS',
            'CURRENT_CATALOG',
            'CURRENT_DATE',
            'CURRENT_ROLE',
            'CURRENT_SCHEMA',
            'CURRENT_TIME',
            'CURRENT_TIMESTAMP',
            'CURRENT_USER',
            'DEFAULT',
            'DEFERRABLE',
            'DESC',
            'DISTINCT',
            'DO',
            'ELSE',
            'END',
            'EXCEPT',
            'FALSE',
            'FETCH',
            'FOR',
            'FOREIGN',
            'FREEZE',
            'FROM',
            'FULL',
            'GRANT',
            'GROUP',
            'HAVING',
            'ILIKE',
            'IN',
            'INITIALLY',
            'INNER',
            'INTERSECT',
            'INTO',
            'IS',
            'ISNULL',
            'JOIN',
            'LEADING',
            'LEFT',
            'LIKE',
            'LIMIT',
            'LOCALTIME',
            'LOCALTIMESTAMP',
            'NATURAL',
            'NOT',
            'NOTNULL',
            'NULL',
            'OFFSET',
            'ON',
            'ONLY',
            'OR',
            'ORDER',
            'OUTER',
            'OVER',
            'OVERLAPS',
            'PLACING',
            'PRIMARY',
            'REFERENCES',
            'RETURNING',
            'RIGHT',
            'SELECT',
            'SESSION_USER',
            'SIMILAR',
            'SOME',
            'SYMMETRIC',
            'TABLE',
            'THEN',
            'TO',
            'TRAILING',
            'TRUE',
            'UNION',
            'UNIQUE',
            'USER',
            'USING',
            'VARIADIC',
            'VERBOSE',
            'WHEN',
            'WHERE',
            'WINDOW',
            'WITH',
        ];
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/PostgreSQL91Keywords.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/PostgreSQL91Keywords.php");
    }
}
