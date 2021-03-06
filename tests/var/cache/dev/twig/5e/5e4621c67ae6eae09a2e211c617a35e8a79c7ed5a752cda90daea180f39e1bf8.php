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

/* vendor/swiftmailer/swiftmailer/tests/unit/Swift/Plugins/Loggers/ArrayLoggerTest.php */
class __TwigTemplate_664fad9f81aad64b4ad660889392a30c35f92068147dc17eba2939de8da8f67b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Plugins/Loggers/ArrayLoggerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Plugins/Loggers/ArrayLoggerTest.php"));

        // line 1
        echo "<?php

class Swift_Plugins_Loggers_ArrayLoggerTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testAddingSingleEntryDumpsSingleLine()
    {
        \$logger = new Swift_Plugins_Loggers_ArrayLogger();
        \$logger->add(\">> Foo\\r\\n\");
        \$this->assertEquals(\">> Foo\\r\\n\", \$logger->dump());
    }

    public function testAddingMultipleEntriesDumpsMultipleLines()
    {
        \$logger = new Swift_Plugins_Loggers_ArrayLogger();
        \$logger->add(\">> FOO\\r\\n\");
        \$logger->add(\"<< 502 That makes no sense\\r\\n\");
        \$logger->add(\">> RSET\\r\\n\");
        \$logger->add(\"<< 250 OK\\r\\n\");

        \$this->assertEquals(
            \">> FOO\\r\\n\".PHP_EOL.
            \"<< 502 That makes no sense\\r\\n\".PHP_EOL.
            \">> RSET\\r\\n\".PHP_EOL.
            \"<< 250 OK\\r\\n\",
            \$logger->dump()
            );
    }

    public function testLogCanBeCleared()
    {
        \$logger = new Swift_Plugins_Loggers_ArrayLogger();
        \$logger->add(\">> FOO\\r\\n\");
        \$logger->add(\"<< 502 That makes no sense\\r\\n\");
        \$logger->add(\">> RSET\\r\\n\");
        \$logger->add(\"<< 250 OK\\r\\n\");

        \$this->assertEquals(
            \">> FOO\\r\\n\".PHP_EOL.
            \"<< 502 That makes no sense\\r\\n\".PHP_EOL.
            \">> RSET\\r\\n\".PHP_EOL.
            \"<< 250 OK\\r\\n\",
            \$logger->dump()
            );

        \$logger->clear();

        \$this->assertEquals('', \$logger->dump());
    }

    public function testLengthCanBeTruncated()
    {
        \$logger = new Swift_Plugins_Loggers_ArrayLogger(2);
        \$logger->add(\">> FOO\\r\\n\");
        \$logger->add(\"<< 502 That makes no sense\\r\\n\");
        \$logger->add(\">> RSET\\r\\n\");
        \$logger->add(\"<< 250 OK\\r\\n\");

        \$this->assertEquals(
            \">> RSET\\r\\n\".PHP_EOL.
            \"<< 250 OK\\r\\n\",
            \$logger->dump(),
            '%s: Log should be truncated to last 2 entries'
            );
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Plugins/Loggers/ArrayLoggerTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

class Swift_Plugins_Loggers_ArrayLoggerTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testAddingSingleEntryDumpsSingleLine()
    {
        \$logger = new Swift_Plugins_Loggers_ArrayLogger();
        \$logger->add(\">> Foo\\r\\n\");
        \$this->assertEquals(\">> Foo\\r\\n\", \$logger->dump());
    }

    public function testAddingMultipleEntriesDumpsMultipleLines()
    {
        \$logger = new Swift_Plugins_Loggers_ArrayLogger();
        \$logger->add(\">> FOO\\r\\n\");
        \$logger->add(\"<< 502 That makes no sense\\r\\n\");
        \$logger->add(\">> RSET\\r\\n\");
        \$logger->add(\"<< 250 OK\\r\\n\");

        \$this->assertEquals(
            \">> FOO\\r\\n\".PHP_EOL.
            \"<< 502 That makes no sense\\r\\n\".PHP_EOL.
            \">> RSET\\r\\n\".PHP_EOL.
            \"<< 250 OK\\r\\n\",
            \$logger->dump()
            );
    }

    public function testLogCanBeCleared()
    {
        \$logger = new Swift_Plugins_Loggers_ArrayLogger();
        \$logger->add(\">> FOO\\r\\n\");
        \$logger->add(\"<< 502 That makes no sense\\r\\n\");
        \$logger->add(\">> RSET\\r\\n\");
        \$logger->add(\"<< 250 OK\\r\\n\");

        \$this->assertEquals(
            \">> FOO\\r\\n\".PHP_EOL.
            \"<< 502 That makes no sense\\r\\n\".PHP_EOL.
            \">> RSET\\r\\n\".PHP_EOL.
            \"<< 250 OK\\r\\n\",
            \$logger->dump()
            );

        \$logger->clear();

        \$this->assertEquals('', \$logger->dump());
    }

    public function testLengthCanBeTruncated()
    {
        \$logger = new Swift_Plugins_Loggers_ArrayLogger(2);
        \$logger->add(\">> FOO\\r\\n\");
        \$logger->add(\"<< 502 That makes no sense\\r\\n\");
        \$logger->add(\">> RSET\\r\\n\");
        \$logger->add(\"<< 250 OK\\r\\n\");

        \$this->assertEquals(
            \">> RSET\\r\\n\".PHP_EOL.
            \"<< 250 OK\\r\\n\",
            \$logger->dump(),
            '%s: Log should be truncated to last 2 entries'
            );
    }
}
", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Plugins/Loggers/ArrayLoggerTest.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/unit/Swift/Plugins/Loggers/ArrayLoggerTest.php");
    }
}
