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

/* vendor/swiftmailer/swiftmailer/tests/unit/Swift/Plugins/ThrottlerPluginTest.php */
class __TwigTemplate_16218b084b9585d7a743e7048702c0bf4c356f1ef63d5fdb6781c25e357a3976 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Plugins/ThrottlerPluginTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Plugins/ThrottlerPluginTest.php"));

        // line 1
        echo "<?php

class Swift_Plugins_ThrottlerPluginTest extends \\SwiftMailerTestCase
{
    public function testBytesPerMinuteThrottling()
    {
        \$sleeper = \$this->createSleeper();
        \$timer = \$this->createTimer();

        //10MB/min
        \$plugin = new Swift_Plugins_ThrottlerPlugin(
            10000000, Swift_Plugins_ThrottlerPlugin::BYTES_PER_MINUTE,
            \$sleeper, \$timer
            );

        \$timer->shouldReceive('getTimestamp')->once()->andReturn(0);
        \$timer->shouldReceive('getTimestamp')->once()->andReturn(1); //expected 0.6
        \$timer->shouldReceive('getTimestamp')->once()->andReturn(1); //expected 1.2 (sleep 1)
        \$timer->shouldReceive('getTimestamp')->once()->andReturn(2); //expected 1.8
        \$timer->shouldReceive('getTimestamp')->once()->andReturn(2); //expected 2.4 (sleep 1)
        \$sleeper->shouldReceive('sleep')->twice()->with(1);

        //10,000,000 bytes per minute
        //100,000 bytes per email

        // .: (10,000,000/100,000)/60 emails per second = 1.667 emais/sec

        \$message = \$this->createMessageWithByteCount(100000); //100KB

        \$evt = \$this->createSendEvent(\$message);

        for (\$i = 0; \$i < 5; ++\$i) {
            \$plugin->beforeSendPerformed(\$evt);
            \$plugin->sendPerformed(\$evt);
        }
    }

    public function testMessagesPerMinuteThrottling()
    {
        \$sleeper = \$this->createSleeper();
        \$timer = \$this->createTimer();

        //60/min
        \$plugin = new Swift_Plugins_ThrottlerPlugin(
            60, Swift_Plugins_ThrottlerPlugin::MESSAGES_PER_MINUTE,
            \$sleeper, \$timer
            );

        \$timer->shouldReceive('getTimestamp')->once()->andReturn(0);
        \$timer->shouldReceive('getTimestamp')->once()->andReturn(0); //expected 1 (sleep 1)
        \$timer->shouldReceive('getTimestamp')->once()->andReturn(2); //expected 2
        \$timer->shouldReceive('getTimestamp')->once()->andReturn(2); //expected 3 (sleep 1)
        \$timer->shouldReceive('getTimestamp')->once()->andReturn(4); //expected 4
        \$sleeper->shouldReceive('sleep')->twice()->with(1);

        //60 messages per minute
        //1 message per second

        \$message = \$this->createMessageWithByteCount(10);

        \$evt = \$this->createSendEvent(\$message);

        for (\$i = 0; \$i < 5; ++\$i) {
            \$plugin->beforeSendPerformed(\$evt);
            \$plugin->sendPerformed(\$evt);
        }
    }

    private function createSleeper()
    {
        return \$this->getMockery('Swift_Plugins_Sleeper');
    }

    private function createTimer()
    {
        return \$this->getMockery('Swift_Plugins_Timer');
    }

    private function createMessageWithByteCount(\$bytes)
    {
        \$msg = \$this->getMockery('Swift_Mime_SimpleMessage');
        \$msg->shouldReceive('toByteStream')
            ->zeroOrMoreTimes()
            ->andReturnUsing(function (\$is) use (\$bytes) {
                for (\$i = 0; \$i < \$bytes; ++\$i) {
                    \$is->write('x');
                }
            });

        return \$msg;
    }

    private function createSendEvent(\$message)
    {
        \$evt = \$this->getMockery('Swift_Events_SendEvent');
        \$evt->shouldReceive('getMessage')
            ->zeroOrMoreTimes()
            ->andReturn(\$message);

        return \$evt;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Plugins/ThrottlerPluginTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

class Swift_Plugins_ThrottlerPluginTest extends \\SwiftMailerTestCase
{
    public function testBytesPerMinuteThrottling()
    {
        \$sleeper = \$this->createSleeper();
        \$timer = \$this->createTimer();

        //10MB/min
        \$plugin = new Swift_Plugins_ThrottlerPlugin(
            10000000, Swift_Plugins_ThrottlerPlugin::BYTES_PER_MINUTE,
            \$sleeper, \$timer
            );

        \$timer->shouldReceive('getTimestamp')->once()->andReturn(0);
        \$timer->shouldReceive('getTimestamp')->once()->andReturn(1); //expected 0.6
        \$timer->shouldReceive('getTimestamp')->once()->andReturn(1); //expected 1.2 (sleep 1)
        \$timer->shouldReceive('getTimestamp')->once()->andReturn(2); //expected 1.8
        \$timer->shouldReceive('getTimestamp')->once()->andReturn(2); //expected 2.4 (sleep 1)
        \$sleeper->shouldReceive('sleep')->twice()->with(1);

        //10,000,000 bytes per minute
        //100,000 bytes per email

        // .: (10,000,000/100,000)/60 emails per second = 1.667 emais/sec

        \$message = \$this->createMessageWithByteCount(100000); //100KB

        \$evt = \$this->createSendEvent(\$message);

        for (\$i = 0; \$i < 5; ++\$i) {
            \$plugin->beforeSendPerformed(\$evt);
            \$plugin->sendPerformed(\$evt);
        }
    }

    public function testMessagesPerMinuteThrottling()
    {
        \$sleeper = \$this->createSleeper();
        \$timer = \$this->createTimer();

        //60/min
        \$plugin = new Swift_Plugins_ThrottlerPlugin(
            60, Swift_Plugins_ThrottlerPlugin::MESSAGES_PER_MINUTE,
            \$sleeper, \$timer
            );

        \$timer->shouldReceive('getTimestamp')->once()->andReturn(0);
        \$timer->shouldReceive('getTimestamp')->once()->andReturn(0); //expected 1 (sleep 1)
        \$timer->shouldReceive('getTimestamp')->once()->andReturn(2); //expected 2
        \$timer->shouldReceive('getTimestamp')->once()->andReturn(2); //expected 3 (sleep 1)
        \$timer->shouldReceive('getTimestamp')->once()->andReturn(4); //expected 4
        \$sleeper->shouldReceive('sleep')->twice()->with(1);

        //60 messages per minute
        //1 message per second

        \$message = \$this->createMessageWithByteCount(10);

        \$evt = \$this->createSendEvent(\$message);

        for (\$i = 0; \$i < 5; ++\$i) {
            \$plugin->beforeSendPerformed(\$evt);
            \$plugin->sendPerformed(\$evt);
        }
    }

    private function createSleeper()
    {
        return \$this->getMockery('Swift_Plugins_Sleeper');
    }

    private function createTimer()
    {
        return \$this->getMockery('Swift_Plugins_Timer');
    }

    private function createMessageWithByteCount(\$bytes)
    {
        \$msg = \$this->getMockery('Swift_Mime_SimpleMessage');
        \$msg->shouldReceive('toByteStream')
            ->zeroOrMoreTimes()
            ->andReturnUsing(function (\$is) use (\$bytes) {
                for (\$i = 0; \$i < \$bytes; ++\$i) {
                    \$is->write('x');
                }
            });

        return \$msg;
    }

    private function createSendEvent(\$message)
    {
        \$evt = \$this->getMockery('Swift_Events_SendEvent');
        \$evt->shouldReceive('getMessage')
            ->zeroOrMoreTimes()
            ->andReturn(\$message);

        return \$evt;
    }
}
", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Plugins/ThrottlerPluginTest.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/unit/Swift/Plugins/ThrottlerPluginTest.php");
    }
}
