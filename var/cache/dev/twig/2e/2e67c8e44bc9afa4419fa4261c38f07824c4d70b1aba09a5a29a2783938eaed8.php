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

/* vendor/swiftmailer/swiftmailer/tests/unit/Swift/Plugins/AntiFloodPluginTest.php */
class __TwigTemplate_ab5c3c739042a9d0422c04b8d6d6e8a31fa410ea8d81a834a72b17034b3b7035 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Plugins/AntiFloodPluginTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Plugins/AntiFloodPluginTest.php"));

        // line 1
        echo "<?php

class Swift_Plugins_AntiFloodPluginTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testThresholdCanBeSetAndFetched()
    {
        \$plugin = new Swift_Plugins_AntiFloodPlugin(10);
        \$this->assertEquals(10, \$plugin->getThreshold());
        \$plugin->setThreshold(100);
        \$this->assertEquals(100, \$plugin->getThreshold());
    }

    public function testSleepTimeCanBeSetAndFetched()
    {
        \$plugin = new Swift_Plugins_AntiFloodPlugin(10, 5);
        \$this->assertEquals(5, \$plugin->getSleepTime());
        \$plugin->setSleepTime(1);
        \$this->assertEquals(1, \$plugin->getSleepTime());
    }

    public function testPluginStopsConnectionAfterThreshold()
    {
        \$transport = \$this->createTransport();
        \$transport->expects(\$this->once())
                  ->method('start');
        \$transport->expects(\$this->once())
                  ->method('stop');

        \$evt = \$this->createSendEvent(\$transport);

        \$plugin = new Swift_Plugins_AntiFloodPlugin(10);
        for (\$i = 0; \$i < 12; ++\$i) {
            \$plugin->sendPerformed(\$evt);
        }
    }

    public function testPluginCanStopAndStartMultipleTimes()
    {
        \$transport = \$this->createTransport();
        \$transport->expects(\$this->exactly(5))
                  ->method('start');
        \$transport->expects(\$this->exactly(5))
                  ->method('stop');

        \$evt = \$this->createSendEvent(\$transport);

        \$plugin = new Swift_Plugins_AntiFloodPlugin(2);
        for (\$i = 0; \$i < 11; ++\$i) {
            \$plugin->sendPerformed(\$evt);
        }
    }

    public function testPluginCanSleepDuringRestart()
    {
        \$sleeper = \$this->getMockBuilder('Swift_Plugins_Sleeper')->getMock();
        \$sleeper->expects(\$this->once())
                ->method('sleep')
                ->with(10);

        \$transport = \$this->createTransport();
        \$transport->expects(\$this->once())
                  ->method('start');
        \$transport->expects(\$this->once())
                  ->method('stop');

        \$evt = \$this->createSendEvent(\$transport);

        \$plugin = new Swift_Plugins_AntiFloodPlugin(99, 10, \$sleeper);
        for (\$i = 0; \$i < 101; ++\$i) {
            \$plugin->sendPerformed(\$evt);
        }
    }

    private function createTransport()
    {
        return \$this->getMockBuilder('Swift_Transport')->getMock();
    }

    private function createSendEvent(\$transport)
    {
        \$evt = \$this->getMockBuilder('Swift_Events_SendEvent')
                    ->disableOriginalConstructor()
                    ->getMock();
        \$evt->expects(\$this->any())
            ->method('getSource')
            ->will(\$this->returnValue(\$transport));
        \$evt->expects(\$this->any())
            ->method('getTransport')
            ->will(\$this->returnValue(\$transport));

        return \$evt;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Plugins/AntiFloodPluginTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

class Swift_Plugins_AntiFloodPluginTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testThresholdCanBeSetAndFetched()
    {
        \$plugin = new Swift_Plugins_AntiFloodPlugin(10);
        \$this->assertEquals(10, \$plugin->getThreshold());
        \$plugin->setThreshold(100);
        \$this->assertEquals(100, \$plugin->getThreshold());
    }

    public function testSleepTimeCanBeSetAndFetched()
    {
        \$plugin = new Swift_Plugins_AntiFloodPlugin(10, 5);
        \$this->assertEquals(5, \$plugin->getSleepTime());
        \$plugin->setSleepTime(1);
        \$this->assertEquals(1, \$plugin->getSleepTime());
    }

    public function testPluginStopsConnectionAfterThreshold()
    {
        \$transport = \$this->createTransport();
        \$transport->expects(\$this->once())
                  ->method('start');
        \$transport->expects(\$this->once())
                  ->method('stop');

        \$evt = \$this->createSendEvent(\$transport);

        \$plugin = new Swift_Plugins_AntiFloodPlugin(10);
        for (\$i = 0; \$i < 12; ++\$i) {
            \$plugin->sendPerformed(\$evt);
        }
    }

    public function testPluginCanStopAndStartMultipleTimes()
    {
        \$transport = \$this->createTransport();
        \$transport->expects(\$this->exactly(5))
                  ->method('start');
        \$transport->expects(\$this->exactly(5))
                  ->method('stop');

        \$evt = \$this->createSendEvent(\$transport);

        \$plugin = new Swift_Plugins_AntiFloodPlugin(2);
        for (\$i = 0; \$i < 11; ++\$i) {
            \$plugin->sendPerformed(\$evt);
        }
    }

    public function testPluginCanSleepDuringRestart()
    {
        \$sleeper = \$this->getMockBuilder('Swift_Plugins_Sleeper')->getMock();
        \$sleeper->expects(\$this->once())
                ->method('sleep')
                ->with(10);

        \$transport = \$this->createTransport();
        \$transport->expects(\$this->once())
                  ->method('start');
        \$transport->expects(\$this->once())
                  ->method('stop');

        \$evt = \$this->createSendEvent(\$transport);

        \$plugin = new Swift_Plugins_AntiFloodPlugin(99, 10, \$sleeper);
        for (\$i = 0; \$i < 101; ++\$i) {
            \$plugin->sendPerformed(\$evt);
        }
    }

    private function createTransport()
    {
        return \$this->getMockBuilder('Swift_Transport')->getMock();
    }

    private function createSendEvent(\$transport)
    {
        \$evt = \$this->getMockBuilder('Swift_Events_SendEvent')
                    ->disableOriginalConstructor()
                    ->getMock();
        \$evt->expects(\$this->any())
            ->method('getSource')
            ->will(\$this->returnValue(\$transport));
        \$evt->expects(\$this->any())
            ->method('getTransport')
            ->will(\$this->returnValue(\$transport));

        return \$evt;
    }
}
", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Plugins/AntiFloodPluginTest.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/unit/Swift/Plugins/AntiFloodPluginTest.php");
    }
}
