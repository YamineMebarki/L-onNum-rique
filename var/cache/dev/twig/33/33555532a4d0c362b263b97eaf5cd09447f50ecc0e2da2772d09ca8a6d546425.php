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

/* vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/Transport/StreamBuffer/AbstractStreamBufferAcceptanceTest.php */
class __TwigTemplate_1abc7a378a5ff9279a0a6973cb4eb86e2962338ed9856514cc6e2ba3eb34c931 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/Transport/StreamBuffer/AbstractStreamBufferAcceptanceTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/Transport/StreamBuffer/AbstractStreamBufferAcceptanceTest.php"));

        // line 1
        echo "<?php

abstract class Swift_Transport_StreamBuffer_AbstractStreamBufferAcceptanceTest extends \\PHPUnit\\Framework\\TestCase
{
    protected \$buffer;

    abstract protected function initializeBuffer();

    protected function setUp()
    {
        if (true == getenv('TRAVIS')) {
            \$this->markTestSkipped(
                'Will fail on travis-ci if not skipped due to travis blocking '.
                'socket mailing tcp connections.'
             );
        }

        \$this->buffer = new Swift_Transport_StreamBuffer(
            \$this->getMockBuilder('Swift_ReplacementFilterFactory')->getMock()
        );
    }

    public function testReadLine()
    {
        \$this->initializeBuffer();

        \$line = \$this->buffer->readLine(0);
        \$this->assertRegExp('/^[0-9]{3}.*?\\r\\n\$/D', \$line);
        \$seq = \$this->buffer->write(\"QUIT\\r\\n\");
        \$this->assertTrue((bool) \$seq);
        \$line = \$this->buffer->readLine(\$seq);
        \$this->assertRegExp('/^[0-9]{3}.*?\\r\\n\$/D', \$line);
        \$this->buffer->terminate();
    }

    public function testWrite()
    {
        \$this->initializeBuffer();

        \$line = \$this->buffer->readLine(0);
        \$this->assertRegExp('/^[0-9]{3}.*?\\r\\n\$/D', \$line);

        \$seq = \$this->buffer->write(\"HELO foo\\r\\n\");
        \$this->assertTrue((bool) \$seq);
        \$line = \$this->buffer->readLine(\$seq);
        \$this->assertRegExp('/^[0-9]{3}.*?\\r\\n\$/D', \$line);

        \$seq = \$this->buffer->write(\"QUIT\\r\\n\");
        \$this->assertTrue((bool) \$seq);
        \$line = \$this->buffer->readLine(\$seq);
        \$this->assertRegExp('/^[0-9]{3}.*?\\r\\n\$/D', \$line);
        \$this->buffer->terminate();
    }

    public function testBindingOtherStreamsMirrorsWriteOperations()
    {
        \$this->initializeBuffer();

        \$is1 = \$this->createMockInputStream();
        \$is2 = \$this->createMockInputStream();

        \$is1->expects(\$this->at(0))
            ->method('write')
            ->with('x');
        \$is1->expects(\$this->at(1))
            ->method('write')
            ->with('y');
        \$is2->expects(\$this->at(0))
            ->method('write')
            ->with('x');
        \$is2->expects(\$this->at(1))
            ->method('write')
            ->with('y');

        \$this->buffer->bind(\$is1);
        \$this->buffer->bind(\$is2);

        \$this->buffer->write('x');
        \$this->buffer->write('y');
    }

    public function testBindingOtherStreamsMirrorsFlushOperations()
    {
        \$this->initializeBuffer();

        \$is1 = \$this->createMockInputStream();
        \$is2 = \$this->createMockInputStream();

        \$is1->expects(\$this->once())
            ->method('flushBuffers');
        \$is2->expects(\$this->once())
            ->method('flushBuffers');

        \$this->buffer->bind(\$is1);
        \$this->buffer->bind(\$is2);

        \$this->buffer->flushBuffers();
    }

    public function testUnbindingStreamPreventsFurtherWrites()
    {
        \$this->initializeBuffer();

        \$is1 = \$this->createMockInputStream();
        \$is2 = \$this->createMockInputStream();

        \$is1->expects(\$this->at(0))
            ->method('write')
            ->with('x');
        \$is1->expects(\$this->at(1))
            ->method('write')
            ->with('y');
        \$is2->expects(\$this->once())
            ->method('write')
            ->with('x');

        \$this->buffer->bind(\$is1);
        \$this->buffer->bind(\$is2);

        \$this->buffer->write('x');

        \$this->buffer->unbind(\$is2);

        \$this->buffer->write('y');
    }

    private function createMockInputStream()
    {
        return \$this->getMockBuilder('Swift_InputByteStream')->getMock();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/Transport/StreamBuffer/AbstractStreamBufferAcceptanceTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

abstract class Swift_Transport_StreamBuffer_AbstractStreamBufferAcceptanceTest extends \\PHPUnit\\Framework\\TestCase
{
    protected \$buffer;

    abstract protected function initializeBuffer();

    protected function setUp()
    {
        if (true == getenv('TRAVIS')) {
            \$this->markTestSkipped(
                'Will fail on travis-ci if not skipped due to travis blocking '.
                'socket mailing tcp connections.'
             );
        }

        \$this->buffer = new Swift_Transport_StreamBuffer(
            \$this->getMockBuilder('Swift_ReplacementFilterFactory')->getMock()
        );
    }

    public function testReadLine()
    {
        \$this->initializeBuffer();

        \$line = \$this->buffer->readLine(0);
        \$this->assertRegExp('/^[0-9]{3}.*?\\r\\n\$/D', \$line);
        \$seq = \$this->buffer->write(\"QUIT\\r\\n\");
        \$this->assertTrue((bool) \$seq);
        \$line = \$this->buffer->readLine(\$seq);
        \$this->assertRegExp('/^[0-9]{3}.*?\\r\\n\$/D', \$line);
        \$this->buffer->terminate();
    }

    public function testWrite()
    {
        \$this->initializeBuffer();

        \$line = \$this->buffer->readLine(0);
        \$this->assertRegExp('/^[0-9]{3}.*?\\r\\n\$/D', \$line);

        \$seq = \$this->buffer->write(\"HELO foo\\r\\n\");
        \$this->assertTrue((bool) \$seq);
        \$line = \$this->buffer->readLine(\$seq);
        \$this->assertRegExp('/^[0-9]{3}.*?\\r\\n\$/D', \$line);

        \$seq = \$this->buffer->write(\"QUIT\\r\\n\");
        \$this->assertTrue((bool) \$seq);
        \$line = \$this->buffer->readLine(\$seq);
        \$this->assertRegExp('/^[0-9]{3}.*?\\r\\n\$/D', \$line);
        \$this->buffer->terminate();
    }

    public function testBindingOtherStreamsMirrorsWriteOperations()
    {
        \$this->initializeBuffer();

        \$is1 = \$this->createMockInputStream();
        \$is2 = \$this->createMockInputStream();

        \$is1->expects(\$this->at(0))
            ->method('write')
            ->with('x');
        \$is1->expects(\$this->at(1))
            ->method('write')
            ->with('y');
        \$is2->expects(\$this->at(0))
            ->method('write')
            ->with('x');
        \$is2->expects(\$this->at(1))
            ->method('write')
            ->with('y');

        \$this->buffer->bind(\$is1);
        \$this->buffer->bind(\$is2);

        \$this->buffer->write('x');
        \$this->buffer->write('y');
    }

    public function testBindingOtherStreamsMirrorsFlushOperations()
    {
        \$this->initializeBuffer();

        \$is1 = \$this->createMockInputStream();
        \$is2 = \$this->createMockInputStream();

        \$is1->expects(\$this->once())
            ->method('flushBuffers');
        \$is2->expects(\$this->once())
            ->method('flushBuffers');

        \$this->buffer->bind(\$is1);
        \$this->buffer->bind(\$is2);

        \$this->buffer->flushBuffers();
    }

    public function testUnbindingStreamPreventsFurtherWrites()
    {
        \$this->initializeBuffer();

        \$is1 = \$this->createMockInputStream();
        \$is2 = \$this->createMockInputStream();

        \$is1->expects(\$this->at(0))
            ->method('write')
            ->with('x');
        \$is1->expects(\$this->at(1))
            ->method('write')
            ->with('y');
        \$is2->expects(\$this->once())
            ->method('write')
            ->with('x');

        \$this->buffer->bind(\$is1);
        \$this->buffer->bind(\$is2);

        \$this->buffer->write('x');

        \$this->buffer->unbind(\$is2);

        \$this->buffer->write('y');
    }

    private function createMockInputStream()
    {
        return \$this->getMockBuilder('Swift_InputByteStream')->getMock();
    }
}
", "vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/Transport/StreamBuffer/AbstractStreamBufferAcceptanceTest.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/Transport/StreamBuffer/AbstractStreamBufferAcceptanceTest.php");
    }
}
