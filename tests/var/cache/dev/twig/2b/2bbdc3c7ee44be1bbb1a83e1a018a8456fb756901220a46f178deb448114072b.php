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

/* vendor/swiftmailer/swiftmailer/tests/unit/Swift/Plugins/Loggers/EchoLoggerTest.php */
class __TwigTemplate_0f00ec67f87c1a7cbc1baca4414d01c3136714249af053a5a5a8c7ae55178aef extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Plugins/Loggers/EchoLoggerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Plugins/Loggers/EchoLoggerTest.php"));

        // line 1
        echo "<?php

class Swift_Plugins_Loggers_EchoLoggerTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testAddingEntryDumpsSingleLineWithoutHtml()
    {
        \$logger = new Swift_Plugins_Loggers_EchoLogger(false);
        ob_start();
        \$logger->add('>> Foo');
        \$data = ob_get_clean();

        \$this->assertEquals('>> Foo'.PHP_EOL, \$data);
    }

    public function testAddingEntryDumpsEscapedLineWithHtml()
    {
        \$logger = new Swift_Plugins_Loggers_EchoLogger(true);
        ob_start();
        \$logger->add('>> Foo');
        \$data = ob_get_clean();

        \$this->assertEquals('&gt;&gt; Foo<br />'.PHP_EOL, \$data);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Plugins/Loggers/EchoLoggerTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

class Swift_Plugins_Loggers_EchoLoggerTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testAddingEntryDumpsSingleLineWithoutHtml()
    {
        \$logger = new Swift_Plugins_Loggers_EchoLogger(false);
        ob_start();
        \$logger->add('>> Foo');
        \$data = ob_get_clean();

        \$this->assertEquals('>> Foo'.PHP_EOL, \$data);
    }

    public function testAddingEntryDumpsEscapedLineWithHtml()
    {
        \$logger = new Swift_Plugins_Loggers_EchoLogger(true);
        ob_start();
        \$logger->add('>> Foo');
        \$data = ob_get_clean();

        \$this->assertEquals('&gt;&gt; Foo<br />'.PHP_EOL, \$data);
    }
}
", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Plugins/Loggers/EchoLoggerTest.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/unit/Swift/Plugins/Loggers/EchoLoggerTest.php");
    }
}
