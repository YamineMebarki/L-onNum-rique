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

/* vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/Transport/StreamBuffer/SocketTimeoutTest.php */
class __TwigTemplate_c010084cbef459d9d010a7c86992727793cccebc046ee7b8bc6b8405741491f0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/Transport/StreamBuffer/SocketTimeoutTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/Transport/StreamBuffer/SocketTimeoutTest.php"));

        // line 1
        echo "<?php

class Swift_Transport_StreamBuffer_SocketTimeoutTest extends \\PHPUnit\\Framework\\TestCase
{
    protected \$buffer;
    protected \$server;
    protected \$randomHighPort;

    protected function setUp()
    {
        if (!defined('SWIFT_SMTP_HOST')) {
            \$this->markTestSkipped(
                'Cannot run test without an SMTP host to connect to (define '.
                'SWIFT_SMTP_HOST in tests/acceptance.conf.php if you wish to run this test)'
             );
        }

        \$serverStarted = false;
        for (\$i = 0; \$i < 5; ++\$i) {
            \$this->randomHighPort = random_int(50000, 65000);
            \$this->server = stream_socket_server('tcp://127.0.0.1:'.\$this->randomHighPort);
            if (\$this->server) {
                \$serverStarted = true;
            }
        }

        \$this->buffer = new Swift_Transport_StreamBuffer(
            \$this->getMockBuilder('Swift_ReplacementFilterFactory')->getMock()
        );
    }

    protected function initializeBuffer()
    {
        \$host = '127.0.0.1';
        \$port = \$this->randomHighPort;

        \$this->buffer->initialize([
            'type' => Swift_Transport_IoBuffer::TYPE_SOCKET,
            'host' => \$host,
            'port' => \$port,
            'protocol' => 'tcp',
            'blocking' => 1,
            'timeout' => 1,
        ]);
    }

    public function testTimeoutException()
    {
        \$this->initializeBuffer();
        \$e = null;
        try {
            \$line = \$this->buffer->readLine(0);
        } catch (Exception \$e) {
        }
        \$this->assertInstanceOf('Swift_IoException', \$e, 'IO Exception Not Thrown On Connection Timeout');
        \$this->assertRegExp('/Connection to .* Timed Out/', \$e->getMessage());
    }

    protected function tearDown()
    {
        if (\$this->server) {
            stream_socket_shutdown(\$this->server, STREAM_SHUT_RDWR);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/Transport/StreamBuffer/SocketTimeoutTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

class Swift_Transport_StreamBuffer_SocketTimeoutTest extends \\PHPUnit\\Framework\\TestCase
{
    protected \$buffer;
    protected \$server;
    protected \$randomHighPort;

    protected function setUp()
    {
        if (!defined('SWIFT_SMTP_HOST')) {
            \$this->markTestSkipped(
                'Cannot run test without an SMTP host to connect to (define '.
                'SWIFT_SMTP_HOST in tests/acceptance.conf.php if you wish to run this test)'
             );
        }

        \$serverStarted = false;
        for (\$i = 0; \$i < 5; ++\$i) {
            \$this->randomHighPort = random_int(50000, 65000);
            \$this->server = stream_socket_server('tcp://127.0.0.1:'.\$this->randomHighPort);
            if (\$this->server) {
                \$serverStarted = true;
            }
        }

        \$this->buffer = new Swift_Transport_StreamBuffer(
            \$this->getMockBuilder('Swift_ReplacementFilterFactory')->getMock()
        );
    }

    protected function initializeBuffer()
    {
        \$host = '127.0.0.1';
        \$port = \$this->randomHighPort;

        \$this->buffer->initialize([
            'type' => Swift_Transport_IoBuffer::TYPE_SOCKET,
            'host' => \$host,
            'port' => \$port,
            'protocol' => 'tcp',
            'blocking' => 1,
            'timeout' => 1,
        ]);
    }

    public function testTimeoutException()
    {
        \$this->initializeBuffer();
        \$e = null;
        try {
            \$line = \$this->buffer->readLine(0);
        } catch (Exception \$e) {
        }
        \$this->assertInstanceOf('Swift_IoException', \$e, 'IO Exception Not Thrown On Connection Timeout');
        \$this->assertRegExp('/Connection to .* Timed Out/', \$e->getMessage());
    }

    protected function tearDown()
    {
        if (\$this->server) {
            stream_socket_shutdown(\$this->server, STREAM_SHUT_RDWR);
        }
    }
}
", "vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/Transport/StreamBuffer/SocketTimeoutTest.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/Transport/StreamBuffer/SocketTimeoutTest.php");
    }
}
