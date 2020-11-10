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

/* vendor/swiftmailer/swiftmailer/tests/unit/Swift/Plugins/ReporterPluginTest.php */
class __TwigTemplate_2ec3b89b5ea9149e4eb683fc2ac3c4cdb7e2295844df202f9d4cd63f99a249a9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Plugins/ReporterPluginTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Plugins/ReporterPluginTest.php"));

        // line 1
        echo "<?php

class Swift_Plugins_ReporterPluginTest extends \\SwiftMailerTestCase
{
    public function testReportingPasses()
    {
        \$message = \$this->createMessage();
        \$evt = \$this->createSendEvent();
        \$reporter = \$this->createReporter();

        \$message->shouldReceive('getTo')->zeroOrMoreTimes()->andReturn(['foo@bar.tld' => 'Foo']);
        \$evt->shouldReceive('getMessage')->zeroOrMoreTimes()->andReturn(\$message);
        \$evt->shouldReceive('getFailedRecipients')->zeroOrMoreTimes()->andReturn([]);
        \$reporter->shouldReceive('notify')->once()->with(\$message, 'foo@bar.tld', Swift_Plugins_Reporter::RESULT_PASS);

        \$plugin = new Swift_Plugins_ReporterPlugin(\$reporter);
        \$plugin->sendPerformed(\$evt);
    }

    public function testReportingFailedTo()
    {
        \$message = \$this->createMessage();
        \$evt = \$this->createSendEvent();
        \$reporter = \$this->createReporter();

        \$message->shouldReceive('getTo')->zeroOrMoreTimes()->andReturn(['foo@bar.tld' => 'Foo', 'zip@button' => 'Zip']);
        \$evt->shouldReceive('getMessage')->zeroOrMoreTimes()->andReturn(\$message);
        \$evt->shouldReceive('getFailedRecipients')->zeroOrMoreTimes()->andReturn(['zip@button']);
        \$reporter->shouldReceive('notify')->once()->with(\$message, 'foo@bar.tld', Swift_Plugins_Reporter::RESULT_PASS);
        \$reporter->shouldReceive('notify')->once()->with(\$message, 'zip@button', Swift_Plugins_Reporter::RESULT_FAIL);

        \$plugin = new Swift_Plugins_ReporterPlugin(\$reporter);
        \$plugin->sendPerformed(\$evt);
    }

    public function testReportingFailedCc()
    {
        \$message = \$this->createMessage();
        \$evt = \$this->createSendEvent();
        \$reporter = \$this->createReporter();

        \$message->shouldReceive('getTo')->zeroOrMoreTimes()->andReturn(['foo@bar.tld' => 'Foo']);
        \$message->shouldReceive('getCc')->zeroOrMoreTimes()->andReturn(['zip@button' => 'Zip', 'test@test.com' => 'DevLaon']);
        \$evt->shouldReceive('getMessage')->zeroOrMoreTimes()->andReturn(\$message);
        \$evt->shouldReceive('getFailedRecipients')->zeroOrMoreTimes()->andReturn(['zip@button']);
        \$reporter->shouldReceive('notify')->once()->with(\$message, 'foo@bar.tld', Swift_Plugins_Reporter::RESULT_PASS);
        \$reporter->shouldReceive('notify')->once()->with(\$message, 'zip@button', Swift_Plugins_Reporter::RESULT_FAIL);
        \$reporter->shouldReceive('notify')->once()->with(\$message, 'test@test.com', Swift_Plugins_Reporter::RESULT_PASS);

        \$plugin = new Swift_Plugins_ReporterPlugin(\$reporter);
        \$plugin->sendPerformed(\$evt);
    }

    public function testReportingFailedBcc()
    {
        \$message = \$this->createMessage();
        \$evt = \$this->createSendEvent();
        \$reporter = \$this->createReporter();

        \$message->shouldReceive('getTo')->zeroOrMoreTimes()->andReturn(['foo@bar.tld' => 'Foo']);
        \$message->shouldReceive('getBcc')->zeroOrMoreTimes()->andReturn(['zip@button' => 'Zip', 'test@test.com' => 'DevLaon']);
        \$evt->shouldReceive('getMessage')->zeroOrMoreTimes()->andReturn(\$message);
        \$evt->shouldReceive('getFailedRecipients')->zeroOrMoreTimes()->andReturn(['zip@button']);
        \$reporter->shouldReceive('notify')->once()->with(\$message, 'foo@bar.tld', Swift_Plugins_Reporter::RESULT_PASS);
        \$reporter->shouldReceive('notify')->once()->with(\$message, 'zip@button', Swift_Plugins_Reporter::RESULT_FAIL);
        \$reporter->shouldReceive('notify')->once()->with(\$message, 'test@test.com', Swift_Plugins_Reporter::RESULT_PASS);

        \$plugin = new Swift_Plugins_ReporterPlugin(\$reporter);
        \$plugin->sendPerformed(\$evt);
    }

    private function createMessage()
    {
        return \$this->getMockery('Swift_Mime_SimpleMessage')->shouldIgnoreMissing();
    }

    private function createSendEvent()
    {
        return \$this->getMockery('Swift_Events_SendEvent')->shouldIgnoreMissing();
    }

    private function createReporter()
    {
        return \$this->getMockery('Swift_Plugins_Reporter')->shouldIgnoreMissing();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Plugins/ReporterPluginTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

class Swift_Plugins_ReporterPluginTest extends \\SwiftMailerTestCase
{
    public function testReportingPasses()
    {
        \$message = \$this->createMessage();
        \$evt = \$this->createSendEvent();
        \$reporter = \$this->createReporter();

        \$message->shouldReceive('getTo')->zeroOrMoreTimes()->andReturn(['foo@bar.tld' => 'Foo']);
        \$evt->shouldReceive('getMessage')->zeroOrMoreTimes()->andReturn(\$message);
        \$evt->shouldReceive('getFailedRecipients')->zeroOrMoreTimes()->andReturn([]);
        \$reporter->shouldReceive('notify')->once()->with(\$message, 'foo@bar.tld', Swift_Plugins_Reporter::RESULT_PASS);

        \$plugin = new Swift_Plugins_ReporterPlugin(\$reporter);
        \$plugin->sendPerformed(\$evt);
    }

    public function testReportingFailedTo()
    {
        \$message = \$this->createMessage();
        \$evt = \$this->createSendEvent();
        \$reporter = \$this->createReporter();

        \$message->shouldReceive('getTo')->zeroOrMoreTimes()->andReturn(['foo@bar.tld' => 'Foo', 'zip@button' => 'Zip']);
        \$evt->shouldReceive('getMessage')->zeroOrMoreTimes()->andReturn(\$message);
        \$evt->shouldReceive('getFailedRecipients')->zeroOrMoreTimes()->andReturn(['zip@button']);
        \$reporter->shouldReceive('notify')->once()->with(\$message, 'foo@bar.tld', Swift_Plugins_Reporter::RESULT_PASS);
        \$reporter->shouldReceive('notify')->once()->with(\$message, 'zip@button', Swift_Plugins_Reporter::RESULT_FAIL);

        \$plugin = new Swift_Plugins_ReporterPlugin(\$reporter);
        \$plugin->sendPerformed(\$evt);
    }

    public function testReportingFailedCc()
    {
        \$message = \$this->createMessage();
        \$evt = \$this->createSendEvent();
        \$reporter = \$this->createReporter();

        \$message->shouldReceive('getTo')->zeroOrMoreTimes()->andReturn(['foo@bar.tld' => 'Foo']);
        \$message->shouldReceive('getCc')->zeroOrMoreTimes()->andReturn(['zip@button' => 'Zip', 'test@test.com' => 'DevLaon']);
        \$evt->shouldReceive('getMessage')->zeroOrMoreTimes()->andReturn(\$message);
        \$evt->shouldReceive('getFailedRecipients')->zeroOrMoreTimes()->andReturn(['zip@button']);
        \$reporter->shouldReceive('notify')->once()->with(\$message, 'foo@bar.tld', Swift_Plugins_Reporter::RESULT_PASS);
        \$reporter->shouldReceive('notify')->once()->with(\$message, 'zip@button', Swift_Plugins_Reporter::RESULT_FAIL);
        \$reporter->shouldReceive('notify')->once()->with(\$message, 'test@test.com', Swift_Plugins_Reporter::RESULT_PASS);

        \$plugin = new Swift_Plugins_ReporterPlugin(\$reporter);
        \$plugin->sendPerformed(\$evt);
    }

    public function testReportingFailedBcc()
    {
        \$message = \$this->createMessage();
        \$evt = \$this->createSendEvent();
        \$reporter = \$this->createReporter();

        \$message->shouldReceive('getTo')->zeroOrMoreTimes()->andReturn(['foo@bar.tld' => 'Foo']);
        \$message->shouldReceive('getBcc')->zeroOrMoreTimes()->andReturn(['zip@button' => 'Zip', 'test@test.com' => 'DevLaon']);
        \$evt->shouldReceive('getMessage')->zeroOrMoreTimes()->andReturn(\$message);
        \$evt->shouldReceive('getFailedRecipients')->zeroOrMoreTimes()->andReturn(['zip@button']);
        \$reporter->shouldReceive('notify')->once()->with(\$message, 'foo@bar.tld', Swift_Plugins_Reporter::RESULT_PASS);
        \$reporter->shouldReceive('notify')->once()->with(\$message, 'zip@button', Swift_Plugins_Reporter::RESULT_FAIL);
        \$reporter->shouldReceive('notify')->once()->with(\$message, 'test@test.com', Swift_Plugins_Reporter::RESULT_PASS);

        \$plugin = new Swift_Plugins_ReporterPlugin(\$reporter);
        \$plugin->sendPerformed(\$evt);
    }

    private function createMessage()
    {
        return \$this->getMockery('Swift_Mime_SimpleMessage')->shouldIgnoreMissing();
    }

    private function createSendEvent()
    {
        return \$this->getMockery('Swift_Events_SendEvent')->shouldIgnoreMissing();
    }

    private function createReporter()
    {
        return \$this->getMockery('Swift_Plugins_Reporter')->shouldIgnoreMissing();
    }
}
", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Plugins/ReporterPluginTest.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/unit/Swift/Plugins/ReporterPluginTest.php");
    }
}
