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

/* vendor/jdorn/sql-formatter/README.md */
class __TwigTemplate_0027f4bce34ed5c345efdf970f7e5889e5fcbe1f24207bb0353358cae2245a1a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/jdorn/sql-formatter/README.md"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/jdorn/sql-formatter/README.md"));

        // line 1
        echo "SqlFormatter
=============

A lightweight php class for formatting sql statements.

It can automatically indent and add line breaks in addition to syntax highlighting.

History
============

I found myself having to debug auto-generated SQL statements all the time and
wanted some way to easily output formatted HTML without having to include a 
huge library or copy and paste into online formatters.

I was originally planning to extract the formatting code from PhpMyAdmin,
but that was 10,000+ lines of code and used global variables.

I saw that other people had the same problem and used Stack Overflow user 
losif's answer as a starting point.  http://stackoverflow.com/a/3924147

Usage
============

The SqlFormatter class has a static method 'format' which takes a SQL string  
as input and returns a formatted HTML block inside a pre tag. 

Sample usage:

```php
<?php
require_once('SqlFormatter.php');

\$query = \"SELECT count(*),`Column1`,`Testing`, `Testing Three` FROM `Table1`
    WHERE Column1 = 'testing' AND ( (`Column2` = `Column3` OR Column4 >= NOW()) )
    GROUP BY Column1 ORDER BY Column3 DESC LIMIT 5,10\";

echo SqlFormatter::format(\$query);
```

Output:

![](http://jdorn.github.com/sql-formatter/format-highlight.png)

Formatting Only
-------------------------
If you don't want syntax highlighting and only want the indentations and 
line breaks, pass in false as the second parameter.

This is useful for outputting to error log or other non-html formats.

```php
<?php
echo SqlFormatter::format(\$query, false);
```

Output:

![](http://jdorn.github.com/sql-formatter/format.png)

Syntax Highlighting Only
-------------------------

There is a separate method 'highlight' that preserves all original whitespace
and just adds syntax highlighting.

This is useful for sql that is already well formatted and just needs to be a little
easier to read.

```php
<?php
echo SqlFormatter::highlight(\$query);
```

Output:

![](http://jdorn.github.com/sql-formatter/highlight.png)

Compress Query
--------------------------

The compress method removes all comments and compresses whitespace.

This is useful for outputting queries that can be copy pasted to the command line easily.

```
-- This is a comment
    SELECT
    /* This is another comment
    On more than one line */
    Id #This is one final comment
    as temp, DateCreated as Created FROM MyTable;
```

```php
echo SqlFormatter::compress(\$query)
```

Output:

```
SELECT Id as temp, DateCreated as Created FROM MyTable;
```

Remove Comments
------------------------
If you want to keep all original whitespace formatting and just remove comments, 
you can use the removeComments method instead of compress.

```
-- This is a comment
    SELECT
    /* This is another comment
    On more than one line */
    Id #This is one final comment
    as temp, DateCreated as Created FROM MyTable;
```

```php
<?php
echo SqlFormatter::removeComments(\$query);
```

Output:
```

    SELECT
    
    Id 
    as temp, DateCreated as Created FROM MyTable;
```

Split SQL String into Queries
--------------------------

Another feature, which is unrelated to formatting, is the ability to break up a SQL string into multiple queries.  

For Example:

```sql
DROP TABLE IF EXISTS MyTable;
CREATE TABLE MyTable ( id int );
INSERT INTO MyTable\t(id)
\tVALUES
\t(1),(2),(3),(4);
SELECT * FROM MyTable;
```

```php
<?php
\$queries = SqlFormatter::splitQuery(\$sql);
```

Result:

1.    `DROP TABLE IF EXISTS MyTable`;
2.    `CREATE TABLE MyTable ( id int )`;
3.    `INSERT INTO MyTable (id) VALUES (1),(2),(3),(4)`;
4.    `SELECT * FROM MyTable`;

### Why Not Regular Expressions?

Why not just use `explode(';', \$sql)` or a regular expression?

The following example sql and others like it are _impossible_ to split correctly using regular expressions, no matter how complex.  

```
SELECT \";\"; SELECT \";\\\"; a;\";
SELECT \";
    abc\";
SELECT a,b #comment;
FROM test;
```

SqlFormatter breaks the string into tokens instead of using regular expressions and will correctly produce:

1.    `SELECT \";\"`;
2.    `SELECT \";\\\"; a;\"`;
3.    `SELECT \"; abc\"`;
4.    `SELECT a,b #comment;
FROM test`;

Please note, the splitQuery method will still fail in the following cases:
*    The DELIMITER command can be used to change the delimiter from the default ';' to something else.  
*    The CREATE PROCEDURE command has a ';' in the middle of it
*    The USE command is not terminated with a ';'
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/jdorn/sql-formatter/README.md";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("SqlFormatter
=============

A lightweight php class for formatting sql statements.

It can automatically indent and add line breaks in addition to syntax highlighting.

History
============

I found myself having to debug auto-generated SQL statements all the time and
wanted some way to easily output formatted HTML without having to include a 
huge library or copy and paste into online formatters.

I was originally planning to extract the formatting code from PhpMyAdmin,
but that was 10,000+ lines of code and used global variables.

I saw that other people had the same problem and used Stack Overflow user 
losif's answer as a starting point.  http://stackoverflow.com/a/3924147

Usage
============

The SqlFormatter class has a static method 'format' which takes a SQL string  
as input and returns a formatted HTML block inside a pre tag. 

Sample usage:

```php
<?php
require_once('SqlFormatter.php');

\$query = \"SELECT count(*),`Column1`,`Testing`, `Testing Three` FROM `Table1`
    WHERE Column1 = 'testing' AND ( (`Column2` = `Column3` OR Column4 >= NOW()) )
    GROUP BY Column1 ORDER BY Column3 DESC LIMIT 5,10\";

echo SqlFormatter::format(\$query);
```

Output:

![](http://jdorn.github.com/sql-formatter/format-highlight.png)

Formatting Only
-------------------------
If you don't want syntax highlighting and only want the indentations and 
line breaks, pass in false as the second parameter.

This is useful for outputting to error log or other non-html formats.

```php
<?php
echo SqlFormatter::format(\$query, false);
```

Output:

![](http://jdorn.github.com/sql-formatter/format.png)

Syntax Highlighting Only
-------------------------

There is a separate method 'highlight' that preserves all original whitespace
and just adds syntax highlighting.

This is useful for sql that is already well formatted and just needs to be a little
easier to read.

```php
<?php
echo SqlFormatter::highlight(\$query);
```

Output:

![](http://jdorn.github.com/sql-formatter/highlight.png)

Compress Query
--------------------------

The compress method removes all comments and compresses whitespace.

This is useful for outputting queries that can be copy pasted to the command line easily.

```
-- This is a comment
    SELECT
    /* This is another comment
    On more than one line */
    Id #This is one final comment
    as temp, DateCreated as Created FROM MyTable;
```

```php
echo SqlFormatter::compress(\$query)
```

Output:

```
SELECT Id as temp, DateCreated as Created FROM MyTable;
```

Remove Comments
------------------------
If you want to keep all original whitespace formatting and just remove comments, 
you can use the removeComments method instead of compress.

```
-- This is a comment
    SELECT
    /* This is another comment
    On more than one line */
    Id #This is one final comment
    as temp, DateCreated as Created FROM MyTable;
```

```php
<?php
echo SqlFormatter::removeComments(\$query);
```

Output:
```

    SELECT
    
    Id 
    as temp, DateCreated as Created FROM MyTable;
```

Split SQL String into Queries
--------------------------

Another feature, which is unrelated to formatting, is the ability to break up a SQL string into multiple queries.  

For Example:

```sql
DROP TABLE IF EXISTS MyTable;
CREATE TABLE MyTable ( id int );
INSERT INTO MyTable\t(id)
\tVALUES
\t(1),(2),(3),(4);
SELECT * FROM MyTable;
```

```php
<?php
\$queries = SqlFormatter::splitQuery(\$sql);
```

Result:

1.    `DROP TABLE IF EXISTS MyTable`;
2.    `CREATE TABLE MyTable ( id int )`;
3.    `INSERT INTO MyTable (id) VALUES (1),(2),(3),(4)`;
4.    `SELECT * FROM MyTable`;

### Why Not Regular Expressions?

Why not just use `explode(';', \$sql)` or a regular expression?

The following example sql and others like it are _impossible_ to split correctly using regular expressions, no matter how complex.  

```
SELECT \";\"; SELECT \";\\\"; a;\";
SELECT \";
    abc\";
SELECT a,b #comment;
FROM test;
```

SqlFormatter breaks the string into tokens instead of using regular expressions and will correctly produce:

1.    `SELECT \";\"`;
2.    `SELECT \";\\\"; a;\"`;
3.    `SELECT \"; abc\"`;
4.    `SELECT a,b #comment;
FROM test`;

Please note, the splitQuery method will still fail in the following cases:
*    The DELIMITER command can be used to change the delimiter from the default ';' to something else.  
*    The CREATE PROCEDURE command has a ';' in the middle of it
*    The USE command is not terminated with a ';'
", "vendor/jdorn/sql-formatter/README.md", "/var/www/public/DevLaon/templates/vendor/jdorn/sql-formatter/README.md");
    }
}
