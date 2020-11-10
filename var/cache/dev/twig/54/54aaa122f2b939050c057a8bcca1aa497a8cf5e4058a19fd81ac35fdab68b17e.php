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

/* vendor/jdorn/sql-formatter/tests/SqlFormatterTest.php */
class __TwigTemplate_2af37df5cc9897169272e46344467aa5b5cd43e99c1552b0ce56e35dbd24a21e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/jdorn/sql-formatter/tests/SqlFormatterTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/jdorn/sql-formatter/tests/SqlFormatterTest.php"));

        // line 1
        echo "<?php
require __DIR__.'/../lib/SqlFormatter.php';

// Force SqlFormatter to run in non-CLI mode for tests
SqlFormatter::\$cli = false;

class SqlFormatterTest extends PHPUnit_Framework_TestCase {
\tprotected \$sqlData;
\t
\t/**
\t * @dataProvider formatHighlightData
\t */
\tfunction testFormatHighlight(\$sql, \$html) {
\t\t\$this->assertEquals(trim(\$html), trim(SqlFormatter::format(\$sql)));
\t}
\t/**
\t * @dataProvider formatData
\t */
\tfunction testFormat(\$sql, \$html) {
\t\t\$this->assertEquals(trim(\$html), trim(SqlFormatter::format(\$sql, false)));
\t}
\t/**
\t * @dataProvider highlightData
\t */
\tfunction testHighlight(\$sql, \$html) {
\t\t\$this->assertEquals(trim(\$html), trim(SqlFormatter::highlight(\$sql)));
\t}
\t/**
\t * @dataProvider highlightCliData
\t */
\tfunction testCliHighlight(\$sql, \$html) {
\t\tSqlFormatter::\$cli = true;
\t\t\$this->assertEquals(trim(\$html), trim(SqlFormatter::format(\$sql)));
\t\tSqlFormatter::\$cli = false;
\t}
\t/**
\t * @dataProvider compressData
\t */
\tfunction testCompress(\$sql, \$html) {
\t\t\$this->assertEquals(trim(\$html), trim(SqlFormatter::compress(\$sql)));
\t}
\t
\tfunction testUsePre() {
\t\tSqlFormatter::\$use_pre = false;
\t\t\$actual = SqlFormatter::highlight(\"test\");
\t\t\$expected = '<span style=\"color: #333;\">test</span>';
\t\t\$this->assertEquals(\$actual,\$expected);
\t\t
\t\tSqlFormatter::\$use_pre = true;
\t\t\$actual = SqlFormatter::highlight(\"test\");
\t\t\$expected = '<pre style=\"color: black; background-color: white;\"><span style=\"color: #333;\">test</span></pre>';
\t\t\$this->assertEquals(\$actual,\$expected);
\t}
\t
\tfunction testSplitQuery() {
\t\t\$expected = array(
\t\t\t\"SELECT 'test' FROM MyTable;\",
\t\t\t\"SELECT Column2 FROM SomeOther Table WHERE (test = true);\"
\t\t);
\t\t
\t\t\$actual = SqlFormatter::splitQuery(implode(';',\$expected));
\t\t
\t\t\$this->assertEquals(\$expected, \$actual);
\t}
\t
\tfunction testSplitQueryEmpty() {
\t\t\$sql = \"SELECT 1;SELECT 2;\\n-- This is a comment\\n;SELECT 3\";
\t\t\$expected = array(\"SELECT 1;\",\"SELECT 2;\",\"SELECT 3\");
\t\t\$actual = SqlFormatter::splitQuery(\$sql);
\t\t
\t\t\$this->assertEquals(\$expected, \$actual);
\t}
\t
\tfunction testRemoveComments() {
\t\t\$expected = SqlFormatter::format(\"SELECT\\n * FROM\\n MyTable\",false);
\t\t\$sql = \"/* this is a comment */SELECT#This is another comment\\n * FROM-- One final comment\\n MyTable\";
\t\t\$actual = SqlFormatter::removeComments(\$sql);
\t\t
\t\t\$this->assertEquals(\$expected, \$actual);
\t}
\t
\tfunction testCacheStats() {
\t\t\$stats = SqlFormatter::getCacheStats();
\t\t\$this->assertGreaterThan(1,\$stats['hits']);
\t}
\t
\tfunction formatHighlightData() {
\t\t\$formatHighlightData = explode(\"\\n\\n\",file_get_contents(__DIR__.\"/format-highlight.html\"));
\t\t\$sqlData = \$this->sqlData();
\t\t
\t\t\$return = array();
\t\tforeach(\$formatHighlightData as \$i=>\$data) {
\t\t\t\$return[] = array(
\t\t\t\t\$sqlData[\$i],
\t\t\t\t\$data
\t\t\t);
\t\t}
\t\t
\t\treturn \$return;
\t}
\t
\tfunction highlightCliData() {
\t\t\$clidata = explode(\"\\n\\n\",file_get_contents(__DIR__.\"/clihighlight.html\"));
\t\t\$sqlData = \$this->sqlData();
\t\t
\t\t\$return = array();
\t\tforeach(\$clidata as \$i=>\$data) {
\t\t\t\$return[] = array(
\t\t\t\t\$sqlData[\$i],
\t\t\t\t\$data
\t\t\t);
\t\t}
\t\t
\t\treturn \$return;
\t}
\t
\tfunction formatData() {
\t\t\$formatData = explode(\"\\n\\n\",file_get_contents(__DIR__.\"/format.html\"));
\t\t\$sqlData = \$this->sqlData();
\t\t
\t\t\$return = array();
\t\tforeach(\$formatData as \$i=>\$data) {
\t\t\t\$return[] = array(
\t\t\t\t\$sqlData[\$i],
\t\t\t\t\$data
\t\t\t);
\t\t}
\t\t
\t\treturn \$return;
\t}
\t
\tfunction compressData() {
\t\t\$compressData = explode(\"\\n\\n\",file_get_contents(__DIR__.\"/compress.html\"));
\t\t\$sqlData = \$this->sqlData();
\t\t
\t\t\$return = array();
\t\tforeach(\$compressData as \$i=>\$data) {
\t\t\t\$return[] = array(
\t\t\t\t\$sqlData[\$i],
\t\t\t\t\$data
\t\t\t);
\t\t}
\t\t
\t\treturn \$return;
\t}
\t
\tfunction highlightData() {
\t\t\$highlightData = explode(\"\\n\\n\",file_get_contents(__DIR__.\"/highlight.html\"));
\t\t\$sqlData = \$this->sqlData();
\t\t
\t\t\$return = array();
\t\tforeach(\$highlightData as \$i=>\$data) {
\t\t\t\$return[] = array(
\t\t\t\t\$sqlData[\$i],
\t\t\t\t\$data
\t\t\t);
\t\t}
\t\t
\t\treturn \$return;
\t}
\t
\t
\t
\tfunction sqlData() {
\t\tif(!\$this->sqlData) {
\t\t\t\$this->sqlData = explode(\"\\n\\n\",file_get_contents(__DIR__.\"/sql.sql\"));
\t\t}
\t\t
\t\t/**
\t\t\$formatHighlight = array();
\t\t\$highlight = array();
\t\t\$format = array();
\t\t\$compress = array();
\t\t\$clihighlight = array();
\t\t
\t\tforeach(\$this->sqlData as \$sql) {
\t\t\t\$formatHighlight[] = trim(SqlFormatter::format(\$sql));
\t\t\t\$highlight[] = trim(SqlFormatter::highlight(\$sql));
\t\t\t\$format[] = trim(SqlFormatter::format(\$sql, false));
\t\t\t\$compress[] = trim(SqlFormatter::compress(\$sql));
\t\t\t
\t\t\tSqlFormatter::\$cli = true;
\t\t\t\$clihighlight[] = trim(SqlFormatter::format(\$sql));
\t\t\tSqlFormatter::\$cli = false;
\t\t}
\t\t
\t\tfile_put_contents(__DIR__.\"/format-highlight.html\", implode(\"\\n\\n\",\$formatHighlight));
\t\tfile_put_contents(__DIR__.\"/highlight.html\", implode(\"\\n\\n\",\$highlight));
\t\tfile_put_contents(__DIR__.\"/format.html\", implode(\"\\n\\n\",\$format));
\t\tfile_put_contents(__DIR__.\"/compress.html\", implode(\"\\n\\n\",\$compress));
\t\tfile_put_contents(__DIR__.\"/clihighlight.html\", implode(\"\\n\\n\",\$clihighlight));
\t\t/**/
\t\t
\t\treturn \$this->sqlData;
\t}
\t
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/jdorn/sql-formatter/tests/SqlFormatterTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
require __DIR__.'/../lib/SqlFormatter.php';

// Force SqlFormatter to run in non-CLI mode for tests
SqlFormatter::\$cli = false;

class SqlFormatterTest extends PHPUnit_Framework_TestCase {
\tprotected \$sqlData;
\t
\t/**
\t * @dataProvider formatHighlightData
\t */
\tfunction testFormatHighlight(\$sql, \$html) {
\t\t\$this->assertEquals(trim(\$html), trim(SqlFormatter::format(\$sql)));
\t}
\t/**
\t * @dataProvider formatData
\t */
\tfunction testFormat(\$sql, \$html) {
\t\t\$this->assertEquals(trim(\$html), trim(SqlFormatter::format(\$sql, false)));
\t}
\t/**
\t * @dataProvider highlightData
\t */
\tfunction testHighlight(\$sql, \$html) {
\t\t\$this->assertEquals(trim(\$html), trim(SqlFormatter::highlight(\$sql)));
\t}
\t/**
\t * @dataProvider highlightCliData
\t */
\tfunction testCliHighlight(\$sql, \$html) {
\t\tSqlFormatter::\$cli = true;
\t\t\$this->assertEquals(trim(\$html), trim(SqlFormatter::format(\$sql)));
\t\tSqlFormatter::\$cli = false;
\t}
\t/**
\t * @dataProvider compressData
\t */
\tfunction testCompress(\$sql, \$html) {
\t\t\$this->assertEquals(trim(\$html), trim(SqlFormatter::compress(\$sql)));
\t}
\t
\tfunction testUsePre() {
\t\tSqlFormatter::\$use_pre = false;
\t\t\$actual = SqlFormatter::highlight(\"test\");
\t\t\$expected = '<span style=\"color: #333;\">test</span>';
\t\t\$this->assertEquals(\$actual,\$expected);
\t\t
\t\tSqlFormatter::\$use_pre = true;
\t\t\$actual = SqlFormatter::highlight(\"test\");
\t\t\$expected = '<pre style=\"color: black; background-color: white;\"><span style=\"color: #333;\">test</span></pre>';
\t\t\$this->assertEquals(\$actual,\$expected);
\t}
\t
\tfunction testSplitQuery() {
\t\t\$expected = array(
\t\t\t\"SELECT 'test' FROM MyTable;\",
\t\t\t\"SELECT Column2 FROM SomeOther Table WHERE (test = true);\"
\t\t);
\t\t
\t\t\$actual = SqlFormatter::splitQuery(implode(';',\$expected));
\t\t
\t\t\$this->assertEquals(\$expected, \$actual);
\t}
\t
\tfunction testSplitQueryEmpty() {
\t\t\$sql = \"SELECT 1;SELECT 2;\\n-- This is a comment\\n;SELECT 3\";
\t\t\$expected = array(\"SELECT 1;\",\"SELECT 2;\",\"SELECT 3\");
\t\t\$actual = SqlFormatter::splitQuery(\$sql);
\t\t
\t\t\$this->assertEquals(\$expected, \$actual);
\t}
\t
\tfunction testRemoveComments() {
\t\t\$expected = SqlFormatter::format(\"SELECT\\n * FROM\\n MyTable\",false);
\t\t\$sql = \"/* this is a comment */SELECT#This is another comment\\n * FROM-- One final comment\\n MyTable\";
\t\t\$actual = SqlFormatter::removeComments(\$sql);
\t\t
\t\t\$this->assertEquals(\$expected, \$actual);
\t}
\t
\tfunction testCacheStats() {
\t\t\$stats = SqlFormatter::getCacheStats();
\t\t\$this->assertGreaterThan(1,\$stats['hits']);
\t}
\t
\tfunction formatHighlightData() {
\t\t\$formatHighlightData = explode(\"\\n\\n\",file_get_contents(__DIR__.\"/format-highlight.html\"));
\t\t\$sqlData = \$this->sqlData();
\t\t
\t\t\$return = array();
\t\tforeach(\$formatHighlightData as \$i=>\$data) {
\t\t\t\$return[] = array(
\t\t\t\t\$sqlData[\$i],
\t\t\t\t\$data
\t\t\t);
\t\t}
\t\t
\t\treturn \$return;
\t}
\t
\tfunction highlightCliData() {
\t\t\$clidata = explode(\"\\n\\n\",file_get_contents(__DIR__.\"/clihighlight.html\"));
\t\t\$sqlData = \$this->sqlData();
\t\t
\t\t\$return = array();
\t\tforeach(\$clidata as \$i=>\$data) {
\t\t\t\$return[] = array(
\t\t\t\t\$sqlData[\$i],
\t\t\t\t\$data
\t\t\t);
\t\t}
\t\t
\t\treturn \$return;
\t}
\t
\tfunction formatData() {
\t\t\$formatData = explode(\"\\n\\n\",file_get_contents(__DIR__.\"/format.html\"));
\t\t\$sqlData = \$this->sqlData();
\t\t
\t\t\$return = array();
\t\tforeach(\$formatData as \$i=>\$data) {
\t\t\t\$return[] = array(
\t\t\t\t\$sqlData[\$i],
\t\t\t\t\$data
\t\t\t);
\t\t}
\t\t
\t\treturn \$return;
\t}
\t
\tfunction compressData() {
\t\t\$compressData = explode(\"\\n\\n\",file_get_contents(__DIR__.\"/compress.html\"));
\t\t\$sqlData = \$this->sqlData();
\t\t
\t\t\$return = array();
\t\tforeach(\$compressData as \$i=>\$data) {
\t\t\t\$return[] = array(
\t\t\t\t\$sqlData[\$i],
\t\t\t\t\$data
\t\t\t);
\t\t}
\t\t
\t\treturn \$return;
\t}
\t
\tfunction highlightData() {
\t\t\$highlightData = explode(\"\\n\\n\",file_get_contents(__DIR__.\"/highlight.html\"));
\t\t\$sqlData = \$this->sqlData();
\t\t
\t\t\$return = array();
\t\tforeach(\$highlightData as \$i=>\$data) {
\t\t\t\$return[] = array(
\t\t\t\t\$sqlData[\$i],
\t\t\t\t\$data
\t\t\t);
\t\t}
\t\t
\t\treturn \$return;
\t}
\t
\t
\t
\tfunction sqlData() {
\t\tif(!\$this->sqlData) {
\t\t\t\$this->sqlData = explode(\"\\n\\n\",file_get_contents(__DIR__.\"/sql.sql\"));
\t\t}
\t\t
\t\t/**
\t\t\$formatHighlight = array();
\t\t\$highlight = array();
\t\t\$format = array();
\t\t\$compress = array();
\t\t\$clihighlight = array();
\t\t
\t\tforeach(\$this->sqlData as \$sql) {
\t\t\t\$formatHighlight[] = trim(SqlFormatter::format(\$sql));
\t\t\t\$highlight[] = trim(SqlFormatter::highlight(\$sql));
\t\t\t\$format[] = trim(SqlFormatter::format(\$sql, false));
\t\t\t\$compress[] = trim(SqlFormatter::compress(\$sql));
\t\t\t
\t\t\tSqlFormatter::\$cli = true;
\t\t\t\$clihighlight[] = trim(SqlFormatter::format(\$sql));
\t\t\tSqlFormatter::\$cli = false;
\t\t}
\t\t
\t\tfile_put_contents(__DIR__.\"/format-highlight.html\", implode(\"\\n\\n\",\$formatHighlight));
\t\tfile_put_contents(__DIR__.\"/highlight.html\", implode(\"\\n\\n\",\$highlight));
\t\tfile_put_contents(__DIR__.\"/format.html\", implode(\"\\n\\n\",\$format));
\t\tfile_put_contents(__DIR__.\"/compress.html\", implode(\"\\n\\n\",\$compress));
\t\tfile_put_contents(__DIR__.\"/clihighlight.html\", implode(\"\\n\\n\",\$clihighlight));
\t\t/**/
\t\t
\t\treturn \$this->sqlData;
\t}
\t
}
", "vendor/jdorn/sql-formatter/tests/SqlFormatterTest.php", "/var/www/public/DevLaon/templates/vendor/jdorn/sql-formatter/tests/SqlFormatterTest.php");
    }
}
