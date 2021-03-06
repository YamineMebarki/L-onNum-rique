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

/* vendor/swiftmailer/swiftmailer/tests/unit/Swift/Transport/FailoverTransportTest.php */
class __TwigTemplate_3ea1242b03dc6134530d793931041a552327e7ec9780c2b8d538f1d55c92d1d3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Transport/FailoverTransportTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Transport/FailoverTransportTest.php"));

        // line 1
        echo "<?php

class Swift_Transport_FailoverTransportTest extends \\SwiftMailerTestCase
{
    public function testFirstTransportIsUsed()
    {
        \$message1 = \$this->getMockery('Swift_Mime_SimpleMessage');
        \$message2 = \$this->getMockery('Swift_Mime_SimpleMessage');
        \$t1 = \$this->getMockery('Swift_Transport');
        \$t2 = \$this->getMockery('Swift_Transport');
        \$connectionState = false;

        \$t1->shouldReceive('isStarted')
           ->zeroOrMoreTimes()
           ->andReturnUsing(function () use (&\$connectionState) {
               return \$connectionState;
           });
        \$t1->shouldReceive('start')
           ->once()
           ->andReturnUsing(function () use (&\$connectionState) {
               if (!\$connectionState) {
                   \$connectionState = true;
               }
           });
        \$t1->shouldReceive('send')
           ->twice()
           ->with(\\Mockery::anyOf(\$message1, \$message2), \\Mockery::any())
           ->andReturnUsing(function () use (&\$connectionState) {
               if (\$connectionState) {
                   return 1;
               }
           });
        \$t2->shouldReceive('start')->never();
        \$t2->shouldReceive('send')->never();

        \$transport = \$this->getTransport([\$t1, \$t2]);
        \$transport->start();
        \$this->assertEquals(1, \$transport->send(\$message1));
        \$this->assertEquals(1, \$transport->send(\$message2));
    }

    public function testMessageCanBeTriedOnNextTransportIfExceptionThrown()
    {
        \$e = new Swift_TransportException('b0rken');

        \$message = \$this->getMockery('Swift_Mime_SimpleMessage');
        \$t1 = \$this->getMockery('Swift_Transport');
        \$t2 = \$this->getMockery('Swift_Transport');
        \$connectionState1 = false;
        \$connectionState2 = false;

        \$t1->shouldReceive('isStarted')
           ->zeroOrMoreTimes()
           ->andReturnUsing(function () use (&\$connectionState1) {
               return \$connectionState1;
           });
        \$t1->shouldReceive('start')
           ->once()
           ->andReturnUsing(function () use (&\$connectionState1) {
               if (!\$connectionState1) {
                   \$connectionState1 = true;
               }
           });
        \$t1->shouldReceive('send')
           ->once()
           ->with(\$message, \\Mockery::any())
           ->andReturnUsing(function () use (&\$connectionState1, \$e) {
               if (\$connectionState1) {
                   throw \$e;
               }
           });

        \$t2->shouldReceive('isStarted')
           ->zeroOrMoreTimes()
           ->andReturnUsing(function () use (&\$connectionState2) {
               return \$connectionState2;
           });
        \$t2->shouldReceive('start')
           ->once()
           ->andReturnUsing(function () use (&\$connectionState2) {
               if (!\$connectionState2) {
                   \$connectionState2 = true;
               }
           });
        \$t2->shouldReceive('send')
           ->once()
           ->with(\$message, \\Mockery::any())
           ->andReturnUsing(function () use (&\$connectionState2, \$e) {
               if (\$connectionState2) {
                   return 1;
               }
           });

        \$transport = \$this->getTransport([\$t1, \$t2]);
        \$transport->start();
        \$this->assertEquals(1, \$transport->send(\$message));
    }

    public function testZeroIsReturnedIfTransportReturnsZero()
    {
        \$message = \$this->getMockery('Swift_Mime_SimpleMessage')->shouldIgnoreMissing();
        \$t1 = \$this->getMockery('Swift_Transport')->shouldIgnoreMissing();

        \$connectionState = false;
        \$t1->shouldReceive('isStarted')
           ->zeroOrMoreTimes()
           ->andReturnUsing(function () use (&\$connectionState) {
               return \$connectionState;
           });
        \$t1->shouldReceive('start')
           ->once()
           ->andReturnUsing(function () use (&\$connectionState) {
               if (!\$connectionState) {
                   \$connectionState = true;
               }
           });
        \$testCase = \$this;
        \$t1->shouldReceive('send')
           ->once()
           ->with(\$message, \\Mockery::any())
           ->andReturnUsing(function () use (&\$connectionState, \$testCase) {
               if (!\$connectionState) {
                   \$testCase->fail();
               }

               return 0;
           });

        \$transport = \$this->getTransport([\$t1]);
        \$transport->start();
        \$this->assertEquals(0, \$transport->send(\$message));
    }

    public function testTransportsWhichThrowExceptionsAreNotRetried()
    {
        \$e = new Swift_TransportException('maur b0rken');

        \$message1 = \$this->getMockery('Swift_Mime_SimpleMessage');
        \$message2 = \$this->getMockery('Swift_Mime_SimpleMessage');
        \$message3 = \$this->getMockery('Swift_Mime_SimpleMessage');
        \$message4 = \$this->getMockery('Swift_Mime_SimpleMessage');
        \$t1 = \$this->getMockery('Swift_Transport');
        \$t2 = \$this->getMockery('Swift_Transport');
        \$connectionState1 = false;
        \$connectionState2 = false;

        \$t1->shouldReceive('isStarted')
           ->zeroOrMoreTimes()
           ->andReturnUsing(function () use (&\$connectionState1) {
               return \$connectionState1;
           });
        \$t1->shouldReceive('start')
           ->once()
           ->andReturnUsing(function () use (&\$connectionState1) {
               if (!\$connectionState1) {
                   \$connectionState1 = true;
               }
           });
        \$t1->shouldReceive('send')
           ->once()
           ->with(\$message1, \\Mockery::any())
           ->andReturnUsing(function () use (&\$connectionState1, \$e) {
               if (\$connectionState1) {
                   throw \$e;
               }
           });
        \$t1->shouldReceive('send')
           ->never()
           ->with(\$message2, \\Mockery::any());
        \$t1->shouldReceive('send')
           ->never()
           ->with(\$message3, \\Mockery::any());
        \$t1->shouldReceive('send')
           ->never()
           ->with(\$message4, \\Mockery::any());

        \$t2->shouldReceive('isStarted')
           ->zeroOrMoreTimes()
           ->andReturnUsing(function () use (&\$connectionState2) {
               return \$connectionState2;
           });
        \$t2->shouldReceive('start')
           ->once()
           ->andReturnUsing(function () use (&\$connectionState2) {
               if (!\$connectionState2) {
                   \$connectionState2 = true;
               }
           });
        \$t2->shouldReceive('send')
           ->times(4)
           ->with(\\Mockery::anyOf(\$message1, \$message2, \$message3, \$message4), \\Mockery::any())
           ->andReturnUsing(function () use (&\$connectionState2, \$e) {
               if (\$connectionState2) {
                   return 1;
               }
           });

        \$transport = \$this->getTransport([\$t1, \$t2]);
        \$transport->start();
        \$this->assertEquals(1, \$transport->send(\$message1));
        \$this->assertEquals(1, \$transport->send(\$message2));
        \$this->assertEquals(1, \$transport->send(\$message3));
        \$this->assertEquals(1, \$transport->send(\$message4));
    }

    public function testExceptionIsThrownIfAllTransportsDie()
    {
        \$e = new Swift_TransportException('b0rken');

        \$message = \$this->getMockery('Swift_Mime_SimpleMessage');
        \$t1 = \$this->getMockery('Swift_Transport');
        \$t2 = \$this->getMockery('Swift_Transport');
        \$connectionState1 = false;
        \$connectionState2 = false;

        \$t1->shouldReceive('isStarted')
           ->zeroOrMoreTimes()
           ->andReturnUsing(function () use (&\$connectionState1) {
               return \$connectionState1;
           });
        \$t1->shouldReceive('start')
           ->once()
           ->andReturnUsing(function () use (&\$connectionState1) {
               if (!\$connectionState1) {
                   \$connectionState1 = true;
               }
           });
        \$t1->shouldReceive('send')
           ->once()
           ->with(\$message, \\Mockery::any())
           ->andReturnUsing(function () use (&\$connectionState1, \$e) {
               if (\$connectionState1) {
                   throw \$e;
               }
           });

        \$t2->shouldReceive('isStarted')
           ->zeroOrMoreTimes()
           ->andReturnUsing(function () use (&\$connectionState2) {
               return \$connectionState2;
           });
        \$t2->shouldReceive('start')
           ->once()
           ->andReturnUsing(function () use (&\$connectionState2) {
               if (!\$connectionState2) {
                   \$connectionState2 = true;
               }
           });
        \$t2->shouldReceive('send')
           ->once()
           ->with(\$message, \\Mockery::any())
           ->andReturnUsing(function () use (&\$connectionState2, \$e) {
               if (\$connectionState2) {
                   throw \$e;
               }
           });

        \$transport = \$this->getTransport([\$t1, \$t2]);
        \$transport->start();
        try {
            \$transport->send(\$message);
            \$this->fail('All transports failed so Exception should be thrown');
        } catch (Exception \$e) {
        }
    }

    public function testStoppingTransportStopsAllDelegates()
    {
        \$t1 = \$this->getMockery('Swift_Transport');
        \$t2 = \$this->getMockery('Swift_Transport');

        \$connectionState1 = true;
        \$connectionState2 = true;

        \$t1->shouldReceive('isStarted')
           ->zeroOrMoreTimes()
           ->andReturnUsing(function () use (&\$connectionState1) {
               return \$connectionState1;
           });
        \$t1->shouldReceive('stop')
           ->once()
           ->andReturnUsing(function () use (&\$connectionState1) {
               if (\$connectionState1) {
                   \$connectionState1 = false;
               }
           });

        \$t2->shouldReceive('isStarted')
           ->zeroOrMoreTimes()
           ->andReturnUsing(function () use (&\$connectionState2) {
               return \$connectionState2;
           });
        \$t2->shouldReceive('stop')
           ->once()
           ->andReturnUsing(function () use (&\$connectionState2) {
               if (\$connectionState2) {
                   \$connectionState2 = false;
               }
           });

        \$transport = \$this->getTransport([\$t1, \$t2]);
        \$transport->start();
        \$transport->stop();
    }

    public function testTransportShowsAsNotStartedIfAllDelegatesDead()
    {
        \$e = new Swift_TransportException('b0rken');

        \$message = \$this->getMockery('Swift_Mime_SimpleMessage');
        \$t1 = \$this->getMockery('Swift_Transport');
        \$t2 = \$this->getMockery('Swift_Transport');

        \$connectionState1 = false;
        \$connectionState2 = false;

        \$t1->shouldReceive('isStarted')
           ->zeroOrMoreTimes()
           ->andReturnUsing(function () use (&\$connectionState1) {
               return \$connectionState1;
           });
        \$t1->shouldReceive('start')
           ->once()
           ->andReturnUsing(function () use (&\$connectionState1) {
               if (!\$connectionState1) {
                   \$connectionState1 = true;
               }
           });
        \$t1->shouldReceive('send')
           ->once()
           ->with(\$message, \\Mockery::any())
           ->andReturnUsing(function () use (&\$connectionState1, \$e) {
               if (\$connectionState1) {
                   \$connectionState1 = false;
                   throw \$e;
               }
           });

        \$t2->shouldReceive('isStarted')
           ->zeroOrMoreTimes()
           ->andReturnUsing(function () use (&\$connectionState2) {
               return \$connectionState2;
           });
        \$t2->shouldReceive('start')
           ->once()
           ->andReturnUsing(function () use (&\$connectionState2) {
               if (!\$connectionState2) {
                   \$connectionState2 = true;
               }
           });
        \$t2->shouldReceive('send')
           ->once()
           ->with(\$message, \\Mockery::any())
           ->andReturnUsing(function () use (&\$connectionState2, \$e) {
               if (\$connectionState2) {
                   \$connectionState2 = false;
                   throw \$e;
               }
           });

        \$transport = \$this->getTransport([\$t1, \$t2]);
        \$transport->start();
        \$this->assertTrue(\$transport->isStarted());
        try {
            \$transport->send(\$message);
            \$this->fail('All transports failed so Exception should be thrown');
        } catch (Exception \$e) {
            \$this->assertFalse(\$transport->isStarted());
        }
    }

    public function testRestartingTransportRestartsDeadDelegates()
    {
        \$e = new Swift_TransportException('b0rken');

        \$message1 = \$this->getMockery('Swift_Mime_SimpleMessage');
        \$message2 = \$this->getMockery('Swift_Mime_SimpleMessage');
        \$t1 = \$this->getMockery('Swift_Transport');
        \$t2 = \$this->getMockery('Swift_Transport');

        \$connectionState1 = false;
        \$connectionState2 = false;

        \$t1->shouldReceive('isStarted')
           ->zeroOrMoreTimes()
           ->andReturnUsing(function () use (&\$connectionState1) {
               return \$connectionState1;
           });
        \$t1->shouldReceive('start')
           ->twice()
           ->andReturnUsing(function () use (&\$connectionState1) {
               if (!\$connectionState1) {
                   \$connectionState1 = true;
               }
           });
        \$t1->shouldReceive('send')
           ->once()
           ->with(\$message1, \\Mockery::any())
           ->andReturnUsing(function () use (&\$connectionState1, \$e) {
               if (\$connectionState1) {
                   \$connectionState1 = false;
                   throw \$e;
               }
           });
        \$t1->shouldReceive('send')
           ->once()
           ->with(\$message2, \\Mockery::any())
           ->andReturnUsing(function () use (&\$connectionState1) {
               if (\$connectionState1) {
                   return 10;
               }
           });

        \$t2->shouldReceive('isStarted')
           ->zeroOrMoreTimes()
           ->andReturnUsing(function () use (&\$connectionState2) {
               return \$connectionState2;
           });
        \$t2->shouldReceive('start')
           ->once()
           ->andReturnUsing(function () use (&\$connectionState2) {
               if (!\$connectionState2) {
                   \$connectionState2 = true;
               }
           });
        \$t2->shouldReceive('send')
           ->once()
           ->with(\$message1, \\Mockery::any())
           ->andReturnUsing(function () use (&\$connectionState2, \$e) {
               if (\$connectionState2) {
                   \$connectionState2 = false;
                   throw \$e;
               }
           });
        \$t2->shouldReceive('send')
           ->never()
           ->with(\$message2, \\Mockery::any());

        \$transport = \$this->getTransport([\$t1, \$t2]);
        \$transport->start();
        \$this->assertTrue(\$transport->isStarted());
        try {
            \$transport->send(\$message1);
            \$this->fail('All transports failed so Exception should be thrown');
        } catch (Exception \$e) {
            \$this->assertFalse(\$transport->isStarted());
        }
        //Restart and re-try
        \$transport->start();
        \$this->assertTrue(\$transport->isStarted());
        \$this->assertEquals(10, \$transport->send(\$message2));
    }

    public function testFailureReferenceIsPassedToDelegates()
    {
        \$failures = [];

        \$message = \$this->getMockery('Swift_Mime_SimpleMessage');
        \$t1 = \$this->getMockery('Swift_Transport');

        \$connectionState = false;

        \$t1->shouldReceive('isStarted')
           ->zeroOrMoreTimes()
           ->andReturnUsing(function () use (\$connectionState) {
               return \$connectionState;
           });
        \$t1->shouldReceive('start')
           ->once()
           ->andReturnUsing(function () use (\$connectionState) {
               if (!\$connectionState) {
                   \$connectionState = true;
               }
           });
        \$t1->shouldReceive('send')
           ->once()
           ->with(\$message, \$failures)
           ->andReturnUsing(function () use (\$connectionState) {
               if (\$connectionState) {
                   return 1;
               }
           });

        \$transport = \$this->getTransport([\$t1]);
        \$transport->start();
        \$transport->send(\$message, \$failures);
    }

    public function testRegisterPluginDelegatesToLoadedTransports()
    {
        \$plugin = \$this->createPlugin();

        \$t1 = \$this->getMockery('Swift_Transport');
        \$t2 = \$this->getMockery('Swift_Transport');
        \$t1->shouldReceive('registerPlugin')
           ->once()
           ->with(\$plugin);
        \$t2->shouldReceive('registerPlugin')
           ->once()
           ->with(\$plugin);

        \$transport = \$this->getTransport([\$t1, \$t2]);
        \$transport->registerPlugin(\$plugin);
    }

    public function testEachDelegateIsPinged()
    {
        \$t1 = \$this->getMockery('Swift_Transport');
        \$t2 = \$this->getMockery('Swift_Transport');
        \$connectionState1 = false;
        \$connectionState2 = false;

        \$testCase = \$this;
        \$t1->shouldReceive('isStarted')
           ->zeroOrMoreTimes()
           ->andReturnUsing(function () use (&\$connectionState1) {
               return \$connectionState1;
           });
        \$t1->shouldReceive('ping')
           ->once()
           ->andReturn(true);

        \$transport = \$this->getTransport([\$t1, \$t2]);
        \$this->assertTrue(\$transport->isStarted());
        \$this->assertTrue(\$transport->ping());
    }

    public function testDelegateIsKilledWhenPingFails()
    {
        \$t1 = \$this->getMockery('Swift_Transport');
        \$t2 = \$this->getMockery('Swift_Transport');

        \$testCase = \$this;
        \$t1->shouldReceive('isStarted')
           ->zeroOrMoreTimes()
           ->andReturnUsing(function () use (&\$connectionState1) {
               return \$connectionState1;
           });
        \$t1->shouldReceive('ping')
           ->once()
           ->andReturn(false);

        \$t2->shouldReceive('isStarted')
           ->zeroOrMoreTimes()
           ->andReturnUsing(function () use (&\$connectionState2) {
               return \$connectionState2;
           });
        \$t2->shouldReceive('ping')
           ->twice()
           ->andReturn(true);

        \$transport = \$this->getTransport([\$t1, \$t2]);
        \$this->assertTrue(\$transport->ping());
        \$this->assertTrue(\$transport->ping());
        \$this->assertTrue(\$transport->isStarted());
    }

    public function XtestTransportShowsAsNotStartedIfAllPingFails()
    {
        \$t1 = \$this->getMockery('Swift_Transport');
        \$t2 = \$this->getMockery('Swift_Transport');

        \$testCase = \$this;
        \$t1->shouldReceive('isStarted')
           ->zeroOrMoreTimes()
           ->andReturnUsing(function () use (&\$connectionState1) {
               return \$connectionState1;
           });
        \$t1->shouldReceive('ping')
           ->once()
           ->andReturn(false);

        \$t2->shouldReceive('isStarted')
           ->zeroOrMoreTimes()
           ->andReturnUsing(function () use (&\$connectionState2) {
               return \$connectionState2;
           });
        \$t2->shouldReceive('ping')
           ->once()
           ->andReturn(false);

        \$transport = \$this->getTransport([\$t1, \$t2]);
        \$this->assertFalse(\$transport->ping());
        \$this->assertFalse(\$transport->isStarted());
        \$this->assertFalse(\$transport->ping());
    }

    private function getTransport(array \$transports)
    {
        \$transport = new Swift_Transport_FailoverTransport();
        \$transport->setTransports(\$transports);

        return \$transport;
    }

    private function createPlugin()
    {
        return \$this->getMockery('Swift_Events_EventListener');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Transport/FailoverTransportTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

class Swift_Transport_FailoverTransportTest extends \\SwiftMailerTestCase
{
    public function testFirstTransportIsUsed()
    {
        \$message1 = \$this->getMockery('Swift_Mime_SimpleMessage');
        \$message2 = \$this->getMockery('Swift_Mime_SimpleMessage');
        \$t1 = \$this->getMockery('Swift_Transport');
        \$t2 = \$this->getMockery('Swift_Transport');
        \$connectionState = false;

        \$t1->shouldReceive('isStarted')
           ->zeroOrMoreTimes()
           ->andReturnUsing(function () use (&\$connectionState) {
               return \$connectionState;
           });
        \$t1->shouldReceive('start')
           ->once()
           ->andReturnUsing(function () use (&\$connectionState) {
               if (!\$connectionState) {
                   \$connectionState = true;
               }
           });
        \$t1->shouldReceive('send')
           ->twice()
           ->with(\\Mockery::anyOf(\$message1, \$message2), \\Mockery::any())
           ->andReturnUsing(function () use (&\$connectionState) {
               if (\$connectionState) {
                   return 1;
               }
           });
        \$t2->shouldReceive('start')->never();
        \$t2->shouldReceive('send')->never();

        \$transport = \$this->getTransport([\$t1, \$t2]);
        \$transport->start();
        \$this->assertEquals(1, \$transport->send(\$message1));
        \$this->assertEquals(1, \$transport->send(\$message2));
    }

    public function testMessageCanBeTriedOnNextTransportIfExceptionThrown()
    {
        \$e = new Swift_TransportException('b0rken');

        \$message = \$this->getMockery('Swift_Mime_SimpleMessage');
        \$t1 = \$this->getMockery('Swift_Transport');
        \$t2 = \$this->getMockery('Swift_Transport');
        \$connectionState1 = false;
        \$connectionState2 = false;

        \$t1->shouldReceive('isStarted')
           ->zeroOrMoreTimes()
           ->andReturnUsing(function () use (&\$connectionState1) {
               return \$connectionState1;
           });
        \$t1->shouldReceive('start')
           ->once()
           ->andReturnUsing(function () use (&\$connectionState1) {
               if (!\$connectionState1) {
                   \$connectionState1 = true;
               }
           });
        \$t1->shouldReceive('send')
           ->once()
           ->with(\$message, \\Mockery::any())
           ->andReturnUsing(function () use (&\$connectionState1, \$e) {
               if (\$connectionState1) {
                   throw \$e;
               }
           });

        \$t2->shouldReceive('isStarted')
           ->zeroOrMoreTimes()
           ->andReturnUsing(function () use (&\$connectionState2) {
               return \$connectionState2;
           });
        \$t2->shouldReceive('start')
           ->once()
           ->andReturnUsing(function () use (&\$connectionState2) {
               if (!\$connectionState2) {
                   \$connectionState2 = true;
               }
           });
        \$t2->shouldReceive('send')
           ->once()
           ->with(\$message, \\Mockery::any())
           ->andReturnUsing(function () use (&\$connectionState2, \$e) {
               if (\$connectionState2) {
                   return 1;
               }
           });

        \$transport = \$this->getTransport([\$t1, \$t2]);
        \$transport->start();
        \$this->assertEquals(1, \$transport->send(\$message));
    }

    public function testZeroIsReturnedIfTransportReturnsZero()
    {
        \$message = \$this->getMockery('Swift_Mime_SimpleMessage')->shouldIgnoreMissing();
        \$t1 = \$this->getMockery('Swift_Transport')->shouldIgnoreMissing();

        \$connectionState = false;
        \$t1->shouldReceive('isStarted')
           ->zeroOrMoreTimes()
           ->andReturnUsing(function () use (&\$connectionState) {
               return \$connectionState;
           });
        \$t1->shouldReceive('start')
           ->once()
           ->andReturnUsing(function () use (&\$connectionState) {
               if (!\$connectionState) {
                   \$connectionState = true;
               }
           });
        \$testCase = \$this;
        \$t1->shouldReceive('send')
           ->once()
           ->with(\$message, \\Mockery::any())
           ->andReturnUsing(function () use (&\$connectionState, \$testCase) {
               if (!\$connectionState) {
                   \$testCase->fail();
               }

               return 0;
           });

        \$transport = \$this->getTransport([\$t1]);
        \$transport->start();
        \$this->assertEquals(0, \$transport->send(\$message));
    }

    public function testTransportsWhichThrowExceptionsAreNotRetried()
    {
        \$e = new Swift_TransportException('maur b0rken');

        \$message1 = \$this->getMockery('Swift_Mime_SimpleMessage');
        \$message2 = \$this->getMockery('Swift_Mime_SimpleMessage');
        \$message3 = \$this->getMockery('Swift_Mime_SimpleMessage');
        \$message4 = \$this->getMockery('Swift_Mime_SimpleMessage');
        \$t1 = \$this->getMockery('Swift_Transport');
        \$t2 = \$this->getMockery('Swift_Transport');
        \$connectionState1 = false;
        \$connectionState2 = false;

        \$t1->shouldReceive('isStarted')
           ->zeroOrMoreTimes()
           ->andReturnUsing(function () use (&\$connectionState1) {
               return \$connectionState1;
           });
        \$t1->shouldReceive('start')
           ->once()
           ->andReturnUsing(function () use (&\$connectionState1) {
               if (!\$connectionState1) {
                   \$connectionState1 = true;
               }
           });
        \$t1->shouldReceive('send')
           ->once()
           ->with(\$message1, \\Mockery::any())
           ->andReturnUsing(function () use (&\$connectionState1, \$e) {
               if (\$connectionState1) {
                   throw \$e;
               }
           });
        \$t1->shouldReceive('send')
           ->never()
           ->with(\$message2, \\Mockery::any());
        \$t1->shouldReceive('send')
           ->never()
           ->with(\$message3, \\Mockery::any());
        \$t1->shouldReceive('send')
           ->never()
           ->with(\$message4, \\Mockery::any());

        \$t2->shouldReceive('isStarted')
           ->zeroOrMoreTimes()
           ->andReturnUsing(function () use (&\$connectionState2) {
               return \$connectionState2;
           });
        \$t2->shouldReceive('start')
           ->once()
           ->andReturnUsing(function () use (&\$connectionState2) {
               if (!\$connectionState2) {
                   \$connectionState2 = true;
               }
           });
        \$t2->shouldReceive('send')
           ->times(4)
           ->with(\\Mockery::anyOf(\$message1, \$message2, \$message3, \$message4), \\Mockery::any())
           ->andReturnUsing(function () use (&\$connectionState2, \$e) {
               if (\$connectionState2) {
                   return 1;
               }
           });

        \$transport = \$this->getTransport([\$t1, \$t2]);
        \$transport->start();
        \$this->assertEquals(1, \$transport->send(\$message1));
        \$this->assertEquals(1, \$transport->send(\$message2));
        \$this->assertEquals(1, \$transport->send(\$message3));
        \$this->assertEquals(1, \$transport->send(\$message4));
    }

    public function testExceptionIsThrownIfAllTransportsDie()
    {
        \$e = new Swift_TransportException('b0rken');

        \$message = \$this->getMockery('Swift_Mime_SimpleMessage');
        \$t1 = \$this->getMockery('Swift_Transport');
        \$t2 = \$this->getMockery('Swift_Transport');
        \$connectionState1 = false;
        \$connectionState2 = false;

        \$t1->shouldReceive('isStarted')
           ->zeroOrMoreTimes()
           ->andReturnUsing(function () use (&\$connectionState1) {
               return \$connectionState1;
           });
        \$t1->shouldReceive('start')
           ->once()
           ->andReturnUsing(function () use (&\$connectionState1) {
               if (!\$connectionState1) {
                   \$connectionState1 = true;
               }
           });
        \$t1->shouldReceive('send')
           ->once()
           ->with(\$message, \\Mockery::any())
           ->andReturnUsing(function () use (&\$connectionState1, \$e) {
               if (\$connectionState1) {
                   throw \$e;
               }
           });

        \$t2->shouldReceive('isStarted')
           ->zeroOrMoreTimes()
           ->andReturnUsing(function () use (&\$connectionState2) {
               return \$connectionState2;
           });
        \$t2->shouldReceive('start')
           ->once()
           ->andReturnUsing(function () use (&\$connectionState2) {
               if (!\$connectionState2) {
                   \$connectionState2 = true;
               }
           });
        \$t2->shouldReceive('send')
           ->once()
           ->with(\$message, \\Mockery::any())
           ->andReturnUsing(function () use (&\$connectionState2, \$e) {
               if (\$connectionState2) {
                   throw \$e;
               }
           });

        \$transport = \$this->getTransport([\$t1, \$t2]);
        \$transport->start();
        try {
            \$transport->send(\$message);
            \$this->fail('All transports failed so Exception should be thrown');
        } catch (Exception \$e) {
        }
    }

    public function testStoppingTransportStopsAllDelegates()
    {
        \$t1 = \$this->getMockery('Swift_Transport');
        \$t2 = \$this->getMockery('Swift_Transport');

        \$connectionState1 = true;
        \$connectionState2 = true;

        \$t1->shouldReceive('isStarted')
           ->zeroOrMoreTimes()
           ->andReturnUsing(function () use (&\$connectionState1) {
               return \$connectionState1;
           });
        \$t1->shouldReceive('stop')
           ->once()
           ->andReturnUsing(function () use (&\$connectionState1) {
               if (\$connectionState1) {
                   \$connectionState1 = false;
               }
           });

        \$t2->shouldReceive('isStarted')
           ->zeroOrMoreTimes()
           ->andReturnUsing(function () use (&\$connectionState2) {
               return \$connectionState2;
           });
        \$t2->shouldReceive('stop')
           ->once()
           ->andReturnUsing(function () use (&\$connectionState2) {
               if (\$connectionState2) {
                   \$connectionState2 = false;
               }
           });

        \$transport = \$this->getTransport([\$t1, \$t2]);
        \$transport->start();
        \$transport->stop();
    }

    public function testTransportShowsAsNotStartedIfAllDelegatesDead()
    {
        \$e = new Swift_TransportException('b0rken');

        \$message = \$this->getMockery('Swift_Mime_SimpleMessage');
        \$t1 = \$this->getMockery('Swift_Transport');
        \$t2 = \$this->getMockery('Swift_Transport');

        \$connectionState1 = false;
        \$connectionState2 = false;

        \$t1->shouldReceive('isStarted')
           ->zeroOrMoreTimes()
           ->andReturnUsing(function () use (&\$connectionState1) {
               return \$connectionState1;
           });
        \$t1->shouldReceive('start')
           ->once()
           ->andReturnUsing(function () use (&\$connectionState1) {
               if (!\$connectionState1) {
                   \$connectionState1 = true;
               }
           });
        \$t1->shouldReceive('send')
           ->once()
           ->with(\$message, \\Mockery::any())
           ->andReturnUsing(function () use (&\$connectionState1, \$e) {
               if (\$connectionState1) {
                   \$connectionState1 = false;
                   throw \$e;
               }
           });

        \$t2->shouldReceive('isStarted')
           ->zeroOrMoreTimes()
           ->andReturnUsing(function () use (&\$connectionState2) {
               return \$connectionState2;
           });
        \$t2->shouldReceive('start')
           ->once()
           ->andReturnUsing(function () use (&\$connectionState2) {
               if (!\$connectionState2) {
                   \$connectionState2 = true;
               }
           });
        \$t2->shouldReceive('send')
           ->once()
           ->with(\$message, \\Mockery::any())
           ->andReturnUsing(function () use (&\$connectionState2, \$e) {
               if (\$connectionState2) {
                   \$connectionState2 = false;
                   throw \$e;
               }
           });

        \$transport = \$this->getTransport([\$t1, \$t2]);
        \$transport->start();
        \$this->assertTrue(\$transport->isStarted());
        try {
            \$transport->send(\$message);
            \$this->fail('All transports failed so Exception should be thrown');
        } catch (Exception \$e) {
            \$this->assertFalse(\$transport->isStarted());
        }
    }

    public function testRestartingTransportRestartsDeadDelegates()
    {
        \$e = new Swift_TransportException('b0rken');

        \$message1 = \$this->getMockery('Swift_Mime_SimpleMessage');
        \$message2 = \$this->getMockery('Swift_Mime_SimpleMessage');
        \$t1 = \$this->getMockery('Swift_Transport');
        \$t2 = \$this->getMockery('Swift_Transport');

        \$connectionState1 = false;
        \$connectionState2 = false;

        \$t1->shouldReceive('isStarted')
           ->zeroOrMoreTimes()
           ->andReturnUsing(function () use (&\$connectionState1) {
               return \$connectionState1;
           });
        \$t1->shouldReceive('start')
           ->twice()
           ->andReturnUsing(function () use (&\$connectionState1) {
               if (!\$connectionState1) {
                   \$connectionState1 = true;
               }
           });
        \$t1->shouldReceive('send')
           ->once()
           ->with(\$message1, \\Mockery::any())
           ->andReturnUsing(function () use (&\$connectionState1, \$e) {
               if (\$connectionState1) {
                   \$connectionState1 = false;
                   throw \$e;
               }
           });
        \$t1->shouldReceive('send')
           ->once()
           ->with(\$message2, \\Mockery::any())
           ->andReturnUsing(function () use (&\$connectionState1) {
               if (\$connectionState1) {
                   return 10;
               }
           });

        \$t2->shouldReceive('isStarted')
           ->zeroOrMoreTimes()
           ->andReturnUsing(function () use (&\$connectionState2) {
               return \$connectionState2;
           });
        \$t2->shouldReceive('start')
           ->once()
           ->andReturnUsing(function () use (&\$connectionState2) {
               if (!\$connectionState2) {
                   \$connectionState2 = true;
               }
           });
        \$t2->shouldReceive('send')
           ->once()
           ->with(\$message1, \\Mockery::any())
           ->andReturnUsing(function () use (&\$connectionState2, \$e) {
               if (\$connectionState2) {
                   \$connectionState2 = false;
                   throw \$e;
               }
           });
        \$t2->shouldReceive('send')
           ->never()
           ->with(\$message2, \\Mockery::any());

        \$transport = \$this->getTransport([\$t1, \$t2]);
        \$transport->start();
        \$this->assertTrue(\$transport->isStarted());
        try {
            \$transport->send(\$message1);
            \$this->fail('All transports failed so Exception should be thrown');
        } catch (Exception \$e) {
            \$this->assertFalse(\$transport->isStarted());
        }
        //Restart and re-try
        \$transport->start();
        \$this->assertTrue(\$transport->isStarted());
        \$this->assertEquals(10, \$transport->send(\$message2));
    }

    public function testFailureReferenceIsPassedToDelegates()
    {
        \$failures = [];

        \$message = \$this->getMockery('Swift_Mime_SimpleMessage');
        \$t1 = \$this->getMockery('Swift_Transport');

        \$connectionState = false;

        \$t1->shouldReceive('isStarted')
           ->zeroOrMoreTimes()
           ->andReturnUsing(function () use (\$connectionState) {
               return \$connectionState;
           });
        \$t1->shouldReceive('start')
           ->once()
           ->andReturnUsing(function () use (\$connectionState) {
               if (!\$connectionState) {
                   \$connectionState = true;
               }
           });
        \$t1->shouldReceive('send')
           ->once()
           ->with(\$message, \$failures)
           ->andReturnUsing(function () use (\$connectionState) {
               if (\$connectionState) {
                   return 1;
               }
           });

        \$transport = \$this->getTransport([\$t1]);
        \$transport->start();
        \$transport->send(\$message, \$failures);
    }

    public function testRegisterPluginDelegatesToLoadedTransports()
    {
        \$plugin = \$this->createPlugin();

        \$t1 = \$this->getMockery('Swift_Transport');
        \$t2 = \$this->getMockery('Swift_Transport');
        \$t1->shouldReceive('registerPlugin')
           ->once()
           ->with(\$plugin);
        \$t2->shouldReceive('registerPlugin')
           ->once()
           ->with(\$plugin);

        \$transport = \$this->getTransport([\$t1, \$t2]);
        \$transport->registerPlugin(\$plugin);
    }

    public function testEachDelegateIsPinged()
    {
        \$t1 = \$this->getMockery('Swift_Transport');
        \$t2 = \$this->getMockery('Swift_Transport');
        \$connectionState1 = false;
        \$connectionState2 = false;

        \$testCase = \$this;
        \$t1->shouldReceive('isStarted')
           ->zeroOrMoreTimes()
           ->andReturnUsing(function () use (&\$connectionState1) {
               return \$connectionState1;
           });
        \$t1->shouldReceive('ping')
           ->once()
           ->andReturn(true);

        \$transport = \$this->getTransport([\$t1, \$t2]);
        \$this->assertTrue(\$transport->isStarted());
        \$this->assertTrue(\$transport->ping());
    }

    public function testDelegateIsKilledWhenPingFails()
    {
        \$t1 = \$this->getMockery('Swift_Transport');
        \$t2 = \$this->getMockery('Swift_Transport');

        \$testCase = \$this;
        \$t1->shouldReceive('isStarted')
           ->zeroOrMoreTimes()
           ->andReturnUsing(function () use (&\$connectionState1) {
               return \$connectionState1;
           });
        \$t1->shouldReceive('ping')
           ->once()
           ->andReturn(false);

        \$t2->shouldReceive('isStarted')
           ->zeroOrMoreTimes()
           ->andReturnUsing(function () use (&\$connectionState2) {
               return \$connectionState2;
           });
        \$t2->shouldReceive('ping')
           ->twice()
           ->andReturn(true);

        \$transport = \$this->getTransport([\$t1, \$t2]);
        \$this->assertTrue(\$transport->ping());
        \$this->assertTrue(\$transport->ping());
        \$this->assertTrue(\$transport->isStarted());
    }

    public function XtestTransportShowsAsNotStartedIfAllPingFails()
    {
        \$t1 = \$this->getMockery('Swift_Transport');
        \$t2 = \$this->getMockery('Swift_Transport');

        \$testCase = \$this;
        \$t1->shouldReceive('isStarted')
           ->zeroOrMoreTimes()
           ->andReturnUsing(function () use (&\$connectionState1) {
               return \$connectionState1;
           });
        \$t1->shouldReceive('ping')
           ->once()
           ->andReturn(false);

        \$t2->shouldReceive('isStarted')
           ->zeroOrMoreTimes()
           ->andReturnUsing(function () use (&\$connectionState2) {
               return \$connectionState2;
           });
        \$t2->shouldReceive('ping')
           ->once()
           ->andReturn(false);

        \$transport = \$this->getTransport([\$t1, \$t2]);
        \$this->assertFalse(\$transport->ping());
        \$this->assertFalse(\$transport->isStarted());
        \$this->assertFalse(\$transport->ping());
    }

    private function getTransport(array \$transports)
    {
        \$transport = new Swift_Transport_FailoverTransport();
        \$transport->setTransports(\$transports);

        return \$transport;
    }

    private function createPlugin()
    {
        return \$this->getMockery('Swift_Events_EventListener');
    }
}
", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Transport/FailoverTransportTest.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/unit/Swift/Transport/FailoverTransportTest.php");
    }
}
