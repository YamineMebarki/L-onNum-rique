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

/* vendor/jdorn/sql-formatter/examples/examples.php */
class __TwigTemplate_350ec67c7da7c764367f5543c22f3b42fe7e5f3bffe648196e0228593ebab74f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/jdorn/sql-formatter/examples/examples.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/jdorn/sql-formatter/examples/examples.php"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>SqlFormatter Examples</title>
    <style>
        body {
            font-family: arial;
        }

        table, td, th {
            border: 1px solid #aaa;
        }

        table {
            border-width: 1px 1px 0 0;
            border-spacing: 0;
        }

        td, th {
            border-width: 0 0 1px 1px;
            padding: 5px 10px;
            vertical-align: top;
        }

        pre {
            padding: 0;
            margin: 0;
        }
    </style>
</head>
<body>
<?php

require_once(__DIR__.'/../lib/SqlFormatter.php');

// Example statements for formatting and highlighting
\$statements = array(
    \"SELECT DATE_FORMAT(b.t_create, '%Y-%c-%d') dateID, b.title memo 
    FROM (SELECT id FROM orc_scheme_detail d WHERE d.business=208 
    AND d.type IN (29,30,31,321,33,34,3542,361,327,38,39,40,41,42,431,4422,415,4546,47,48,'a',
    29,30,31,321,33,34,3542,361,327,38,39,40,41,42,431,4422,415,4546,47,48,'a') 
    AND d.title IS NOT NULL AND t_create >= 
    DATE_FORMAT((DATE_SUB(NOW(),INTERVAL 1 DAY)),'%Y-%c-%d') AND t_create 
    < DATE_FORMAT(NOW(), '%Y-%c-%d') ORDER BY d.id LIMIT 2,10) a, 
    orc_scheme_detail b WHERE a.id = b.id\",
    
    \"SELECT * from Table1 LEFT 
    OUTER JOIN Table2 on Table1.id = Table2.id\",
    
    \"SELECT * FROM MyTable WHERE id = 46\",

    \"SELECT count(*),`Column1` as count,`Testing`, `Testing Three` FROM `Table1`
    WHERE Column1 = 'testing' AND ( (`Column2` = `Column3` OR Column4 >= NOW()) )
    GROUP BY Column1 ORDER BY Column3 DESC LIMIT 5,10\",

    \"select * from `Table`, (SELECT group_concat(column1) as col FROM Table2 GROUP BY category)
    Table2, Table3 where Table2.col = (Table3.col2 - `Table`.id)\",

    \"insert ignore into Table3 (column1, column2) VALUES ('test1','test2'), ('test3','test4');\",

    \"UPDATE MyTable SET name='sql', category='databases' WHERE id > '65'\",

    \"delete from MyTable WHERE name LIKE \\\"test%\\\"\",

    \"SELECT * FROM UnmatchedParens WHERE ( A = B)) AND (((DevLaon=1)\",

    \"-- This is a comment
    SELECT
    /* This is another comment
    On more than one line */
    Id #This is one final comment
    as temp, DateCreated as Created FROM MyTable;\",
);

// Example statements for splitting SQL strings into individual queries
\$split_statements = array(
    \"DROP TABLE IF EXISTS MyTable;
    CREATE TABLE MyTable ( id int );
    INSERT INTO MyTable    (id)
        VALUES
        (1),(2),(3),(4);
    SELECT * FROM MyTable;\",

    \"SELECT \\\";\\\"; SELECT \\\";\\\\\\\"; a;\\\";
    SELECT \\\";
        abc\\\";
    SELECT a,b #comment;
    FROM test;\",
    
    \"
    -- Drop the table first if it exists
    DROP TABLE IF EXISTS MyTable;

    -- Create the table
    CREATE TABLE MyTable ( id int );

    -- Insert values
    INSERT INTO MyTable (id)
        VALUES
        (1),(2),(3),(4);

    -- Done\",
);

// Example statements for removing comments
\$comment_statements = array(
    \"-- This is a comment
    SELECT
    /* This is another comment
    On more than one line */
    Id #This is one final comment
    as temp, DateCreated as Created FROM MyTable;\",
);
?>


<h1>Formatting And Syntax Highlighting</h1>

<div>
    Usage:
    <pre>
    <?php highlight_string('<?php' . \"\\n\" . '\$formatted = SqlFormatter::format(\$sql);' . \"\\n\" . '?>'); ?>
    </pre>
</div>
<table>
    <tr>
        <th>Original</th>
        <th>Formatted And Highlighted</th>
    </tr>
    <?php foreach (\$statements as \$sql) { ?>
    <tr>
        <td>
            <pre><?php echo \$sql; ?></pre>
        </td>
        <td><?php echo SqlFormatter::format(\$sql); ?></td>
    </tr>
    <?php }    ?>
</table>


<h1>Formatting Only</h1>

<div>
    Usage:
    <pre>
    <?php highlight_string('<?php' . \"\\n\" . '\$formatted = SqlFormatter::format(\$sql, false);' . \"\\n\" . '?>'); ?>
    </pre>
</div>
<table>
    <tr>
        <th>Original</th>
        <th>Formatted</th>
    </tr>
    <?php foreach (\$statements as \$sql) { ?>
    <tr>
        <td>
            <pre><?php echo \$sql; ?></pre>
        </td>
        <td><pre><?php echo htmlentities(SqlFormatter::format(\$sql,false)); ?></pre></td>
    </tr>
    <?php }    ?>
</table>


<h1>Syntax Highlighting Only</h1>

<div>
    Usage:
    <pre>
    <?php highlight_string('<?php' . \"\\n\" . '\$highlighted = SqlFormatter::highlight(\$sql);' . \"\\n\" . '?>'); ?>
    </pre>
</div>
<table>
    <tr>
        <th>Original</th>
        <th>Highlighted</th>
    </tr>
    <?php foreach (\$statements as \$sql) { ?>
    <tr>
        <td>
            <pre><?php echo \$sql; ?></pre>
        </td>
        <td><?php echo SqlFormatter::highlight(\$sql); ?></td>
    </tr>
    <?php }    ?>
</table>


<h1>Compress Query</h1>

<div>
    Usage:
    <pre>
    <?php highlight_string('<?php' . \"\\n\" . '\$compressed = SqlFormatter::compress(\$sql);' . \"\\n\" . '?>'); ?>
    </pre>
</div>
<table>
    <tr>
        <th>Original</th>
        <th>Compressed</th>
    </tr>
    <?php foreach (\$statements as \$sql) { ?>
    <tr>
        <td>
            <pre><?php echo \$sql; ?></pre>
        </td>
        <td><pre><?php echo SqlFormatter::compress(\$sql); ?></pre></td>
    </tr>
    <?php }    ?>
</table>


<h1>Splitting SQL Strings Into Individual Queries</h1>

<div>
    Usage:
    <pre>
    <?php highlight_string('<?php' . \"\\n\" . '\$queries = SqlFormatter::splitQuery(\$sql);' . \"\\n\" . '?>'); ?>
    </pre>
</div>
<table>
    <tr>
        <th>Original</th>
        <th>Split</th>
    </tr>
    <?php foreach (\$split_statements as \$sql) { ?>
    <tr>
        <td>
            <pre><?php echo SqlFormatter::highlight(\$sql); ?></pre>
        </td>
        <td><?php
            \$queries = SqlFormatter::splitQuery(\$sql);
            echo \"<ol>\";
            foreach (\$queries as \$query) {
                echo \"<li><pre>\" . SqlFormatter::highlight(\$query) . \"</pre></li>\";
            }
            echo \"</ol>\";
            ?></td>
    </tr>
    <?php }    ?>
</table>


<h1>Removing Comments</h1>

<div>
    Usage:
    <pre>
    <?php highlight_string('<?php' . \"\\n\" . '\$nocomments = SqlFormatter::removeComments(\$sql);' . \"\\n\" . '?>'); ?>
    </pre>
</div>
<table>
    <tr>
        <th>Original</th>
        <th>Comments Removed</th>
    </tr>
    <?php foreach (\$comment_statements as \$sql) { ?>
    <tr>
        <td>
            <pre><?php echo SqlFormatter::highlight(\$sql); ?></pre>
        </td>
        <td>
            <pre><?php echo SqlFormatter::highlight(SqlFormatter::removeComments(\$sql)) ?></pre>
        </td>
    </tr>
    <?php }    ?>
</table>

</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/jdorn/sql-formatter/examples/examples.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <title>SqlFormatter Examples</title>
    <style>
        body {
            font-family: arial;
        }

        table, td, th {
            border: 1px solid #aaa;
        }

        table {
            border-width: 1px 1px 0 0;
            border-spacing: 0;
        }

        td, th {
            border-width: 0 0 1px 1px;
            padding: 5px 10px;
            vertical-align: top;
        }

        pre {
            padding: 0;
            margin: 0;
        }
    </style>
</head>
<body>
<?php

require_once(__DIR__.'/../lib/SqlFormatter.php');

// Example statements for formatting and highlighting
\$statements = array(
    \"SELECT DATE_FORMAT(b.t_create, '%Y-%c-%d') dateID, b.title memo 
    FROM (SELECT id FROM orc_scheme_detail d WHERE d.business=208 
    AND d.type IN (29,30,31,321,33,34,3542,361,327,38,39,40,41,42,431,4422,415,4546,47,48,'a',
    29,30,31,321,33,34,3542,361,327,38,39,40,41,42,431,4422,415,4546,47,48,'a') 
    AND d.title IS NOT NULL AND t_create >= 
    DATE_FORMAT((DATE_SUB(NOW(),INTERVAL 1 DAY)),'%Y-%c-%d') AND t_create 
    < DATE_FORMAT(NOW(), '%Y-%c-%d') ORDER BY d.id LIMIT 2,10) a, 
    orc_scheme_detail b WHERE a.id = b.id\",
    
    \"SELECT * from Table1 LEFT 
    OUTER JOIN Table2 on Table1.id = Table2.id\",
    
    \"SELECT * FROM MyTable WHERE id = 46\",

    \"SELECT count(*),`Column1` as count,`Testing`, `Testing Three` FROM `Table1`
    WHERE Column1 = 'testing' AND ( (`Column2` = `Column3` OR Column4 >= NOW()) )
    GROUP BY Column1 ORDER BY Column3 DESC LIMIT 5,10\",

    \"select * from `Table`, (SELECT group_concat(column1) as col FROM Table2 GROUP BY category)
    Table2, Table3 where Table2.col = (Table3.col2 - `Table`.id)\",

    \"insert ignore into Table3 (column1, column2) VALUES ('test1','test2'), ('test3','test4');\",

    \"UPDATE MyTable SET name='sql', category='databases' WHERE id > '65'\",

    \"delete from MyTable WHERE name LIKE \\\"test%\\\"\",

    \"SELECT * FROM UnmatchedParens WHERE ( A = B)) AND (((DevLaon=1)\",

    \"-- This is a comment
    SELECT
    /* This is another comment
    On more than one line */
    Id #This is one final comment
    as temp, DateCreated as Created FROM MyTable;\",
);

// Example statements for splitting SQL strings into individual queries
\$split_statements = array(
    \"DROP TABLE IF EXISTS MyTable;
    CREATE TABLE MyTable ( id int );
    INSERT INTO MyTable    (id)
        VALUES
        (1),(2),(3),(4);
    SELECT * FROM MyTable;\",

    \"SELECT \\\";\\\"; SELECT \\\";\\\\\\\"; a;\\\";
    SELECT \\\";
        abc\\\";
    SELECT a,b #comment;
    FROM test;\",
    
    \"
    -- Drop the table first if it exists
    DROP TABLE IF EXISTS MyTable;

    -- Create the table
    CREATE TABLE MyTable ( id int );

    -- Insert values
    INSERT INTO MyTable (id)
        VALUES
        (1),(2),(3),(4);

    -- Done\",
);

// Example statements for removing comments
\$comment_statements = array(
    \"-- This is a comment
    SELECT
    /* This is another comment
    On more than one line */
    Id #This is one final comment
    as temp, DateCreated as Created FROM MyTable;\",
);
?>


<h1>Formatting And Syntax Highlighting</h1>

<div>
    Usage:
    <pre>
    <?php highlight_string('<?php' . \"\\n\" . '\$formatted = SqlFormatter::format(\$sql);' . \"\\n\" . '?>'); ?>
    </pre>
</div>
<table>
    <tr>
        <th>Original</th>
        <th>Formatted And Highlighted</th>
    </tr>
    <?php foreach (\$statements as \$sql) { ?>
    <tr>
        <td>
            <pre><?php echo \$sql; ?></pre>
        </td>
        <td><?php echo SqlFormatter::format(\$sql); ?></td>
    </tr>
    <?php }    ?>
</table>


<h1>Formatting Only</h1>

<div>
    Usage:
    <pre>
    <?php highlight_string('<?php' . \"\\n\" . '\$formatted = SqlFormatter::format(\$sql, false);' . \"\\n\" . '?>'); ?>
    </pre>
</div>
<table>
    <tr>
        <th>Original</th>
        <th>Formatted</th>
    </tr>
    <?php foreach (\$statements as \$sql) { ?>
    <tr>
        <td>
            <pre><?php echo \$sql; ?></pre>
        </td>
        <td><pre><?php echo htmlentities(SqlFormatter::format(\$sql,false)); ?></pre></td>
    </tr>
    <?php }    ?>
</table>


<h1>Syntax Highlighting Only</h1>

<div>
    Usage:
    <pre>
    <?php highlight_string('<?php' . \"\\n\" . '\$highlighted = SqlFormatter::highlight(\$sql);' . \"\\n\" . '?>'); ?>
    </pre>
</div>
<table>
    <tr>
        <th>Original</th>
        <th>Highlighted</th>
    </tr>
    <?php foreach (\$statements as \$sql) { ?>
    <tr>
        <td>
            <pre><?php echo \$sql; ?></pre>
        </td>
        <td><?php echo SqlFormatter::highlight(\$sql); ?></td>
    </tr>
    <?php }    ?>
</table>


<h1>Compress Query</h1>

<div>
    Usage:
    <pre>
    <?php highlight_string('<?php' . \"\\n\" . '\$compressed = SqlFormatter::compress(\$sql);' . \"\\n\" . '?>'); ?>
    </pre>
</div>
<table>
    <tr>
        <th>Original</th>
        <th>Compressed</th>
    </tr>
    <?php foreach (\$statements as \$sql) { ?>
    <tr>
        <td>
            <pre><?php echo \$sql; ?></pre>
        </td>
        <td><pre><?php echo SqlFormatter::compress(\$sql); ?></pre></td>
    </tr>
    <?php }    ?>
</table>


<h1>Splitting SQL Strings Into Individual Queries</h1>

<div>
    Usage:
    <pre>
    <?php highlight_string('<?php' . \"\\n\" . '\$queries = SqlFormatter::splitQuery(\$sql);' . \"\\n\" . '?>'); ?>
    </pre>
</div>
<table>
    <tr>
        <th>Original</th>
        <th>Split</th>
    </tr>
    <?php foreach (\$split_statements as \$sql) { ?>
    <tr>
        <td>
            <pre><?php echo SqlFormatter::highlight(\$sql); ?></pre>
        </td>
        <td><?php
            \$queries = SqlFormatter::splitQuery(\$sql);
            echo \"<ol>\";
            foreach (\$queries as \$query) {
                echo \"<li><pre>\" . SqlFormatter::highlight(\$query) . \"</pre></li>\";
            }
            echo \"</ol>\";
            ?></td>
    </tr>
    <?php }    ?>
</table>


<h1>Removing Comments</h1>

<div>
    Usage:
    <pre>
    <?php highlight_string('<?php' . \"\\n\" . '\$nocomments = SqlFormatter::removeComments(\$sql);' . \"\\n\" . '?>'); ?>
    </pre>
</div>
<table>
    <tr>
        <th>Original</th>
        <th>Comments Removed</th>
    </tr>
    <?php foreach (\$comment_statements as \$sql) { ?>
    <tr>
        <td>
            <pre><?php echo SqlFormatter::highlight(\$sql); ?></pre>
        </td>
        <td>
            <pre><?php echo SqlFormatter::highlight(SqlFormatter::removeComments(\$sql)) ?></pre>
        </td>
    </tr>
    <?php }    ?>
</table>

</body>
</html>
", "vendor/jdorn/sql-formatter/examples/examples.php", "/var/www/public/DevLaon/templates/vendor/jdorn/sql-formatter/examples/examples.php");
    }
}
