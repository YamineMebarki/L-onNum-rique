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

/* vendor/swiftmailer/swiftmailer/tests/unit/Swift/Plugins/Reporters/HtmlReporterTest.php */
class __TwigTemplate_77c034d8e1230d4642200ab5a56986006121dfbcec296b3db3d05b675e4e74f0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Plugins/Reporters/HtmlReporterTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Plugins/Reporters/HtmlReporterTest.php"));

        // line 1
        echo "<?php

class Swift_Plugins_Reporters_HtmlReporterTest extends \\PHPUnit\\Framework\\TestCase
{
    private \$html;
    private \$message;

    protected function setUp()
    {
        \$this->html = new Swift_Plugins_Reporters_HtmlReporter();
        \$this->message = \$this->getMockBuilder('Swift_Mime_SimpleMessage')->disableOriginalConstructor()->getMock();
    }

    public function testReportingPass()
    {
        ob_start();
        \$this->html->notify(\$this->message, 'foo@bar.tld',
            Swift_Plugins_Reporter::RESULT_PASS
            );
        \$html = ob_get_clean();

        \$this->assertRegExp('~ok|pass~i', \$html, '%s: Reporter should indicate pass');
        \$this->assertRegExp('~foo@bar\\.tld~', \$html, '%s: Reporter should show address');
    }

    public function testReportingFail()
    {
        ob_start();
        \$this->html->notify(\$this->message, 'zip@button',
            Swift_Plugins_Reporter::RESULT_FAIL
            );
        \$html = ob_get_clean();

        \$this->assertRegExp('~fail~i', \$html, '%s: Reporter should indicate fail');
        \$this->assertRegExp('~zip@button~', \$html, '%s: Reporter should show address');
    }

    public function testMultipleReports()
    {
        ob_start();
        \$this->html->notify(\$this->message, 'foo@bar.tld',
            Swift_Plugins_Reporter::RESULT_PASS
            );
        \$this->html->notify(\$this->message, 'zip@button',
            Swift_Plugins_Reporter::RESULT_FAIL
            );
        \$html = ob_get_clean();

        \$this->assertRegExp('~ok|pass~i', \$html, '%s: Reporter should indicate pass');
        \$this->assertRegExp('~foo@bar\\.tld~', \$html, '%s: Reporter should show address');
        \$this->assertRegExp('~fail~i', \$html, '%s: Reporter should indicate fail');
        \$this->assertRegExp('~zip@button~', \$html, '%s: Reporter should show address');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Plugins/Reporters/HtmlReporterTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

class Swift_Plugins_Reporters_HtmlReporterTest extends \\PHPUnit\\Framework\\TestCase
{
    private \$html;
    private \$message;

    protected function setUp()
    {
        \$this->html = new Swift_Plugins_Reporters_HtmlReporter();
        \$this->message = \$this->getMockBuilder('Swift_Mime_SimpleMessage')->disableOriginalConstructor()->getMock();
    }

    public function testReportingPass()
    {
        ob_start();
        \$this->html->notify(\$this->message, 'foo@bar.tld',
            Swift_Plugins_Reporter::RESULT_PASS
            );
        \$html = ob_get_clean();

        \$this->assertRegExp('~ok|pass~i', \$html, '%s: Reporter should indicate pass');
        \$this->assertRegExp('~foo@bar\\.tld~', \$html, '%s: Reporter should show address');
    }

    public function testReportingFail()
    {
        ob_start();
        \$this->html->notify(\$this->message, 'zip@button',
            Swift_Plugins_Reporter::RESULT_FAIL
            );
        \$html = ob_get_clean();

        \$this->assertRegExp('~fail~i', \$html, '%s: Reporter should indicate fail');
        \$this->assertRegExp('~zip@button~', \$html, '%s: Reporter should show address');
    }

    public function testMultipleReports()
    {
        ob_start();
        \$this->html->notify(\$this->message, 'foo@bar.tld',
            Swift_Plugins_Reporter::RESULT_PASS
            );
        \$this->html->notify(\$this->message, 'zip@button',
            Swift_Plugins_Reporter::RESULT_FAIL
            );
        \$html = ob_get_clean();

        \$this->assertRegExp('~ok|pass~i', \$html, '%s: Reporter should indicate pass');
        \$this->assertRegExp('~foo@bar\\.tld~', \$html, '%s: Reporter should show address');
        \$this->assertRegExp('~fail~i', \$html, '%s: Reporter should indicate fail');
        \$this->assertRegExp('~zip@button~', \$html, '%s: Reporter should show address');
    }
}
", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Plugins/Reporters/HtmlReporterTest.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/unit/Swift/Plugins/Reporters/HtmlReporterTest.php");
    }
}
