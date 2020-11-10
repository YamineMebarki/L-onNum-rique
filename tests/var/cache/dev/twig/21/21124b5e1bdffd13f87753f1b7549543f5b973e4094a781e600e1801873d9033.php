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

/* vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/Transport/StreamBuffer/TlsSocketAcceptanceTest.php */
class __TwigTemplate_1d94b1d62a11ef708acb962eaf83b86aee0fa4c645133feeaa1b18a77e50c852 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/Transport/StreamBuffer/TlsSocketAcceptanceTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/Transport/StreamBuffer/TlsSocketAcceptanceTest.php"));

        // line 1
        echo "<?php

require_once __DIR__.'/AbstractStreamBufferAcceptanceTest.php';

class Swift_Transport_StreamBuffer_TlsSocketAcceptanceTest extends Swift_Transport_StreamBuffer_AbstractStreamBufferAcceptanceTest
{
    protected function setUp()
    {
        \$streams = stream_get_transports();
        if (!in_array('tls', \$streams)) {
            \$this->markTestSkipped(
                'TLS is not configured for your system.  It is not possible to run this test'
             );
        }
        if (!defined('SWIFT_TLS_HOST')) {
            \$this->markTestSkipped(
                'Cannot run test without a TLS enabled SMTP host to connect to (define '.
                'SWIFT_TLS_HOST in tests/acceptance.conf.php if you wish to run this test)'
             );
        }
        parent::setUp();
    }

    protected function initializeBuffer()
    {
        \$parts = explode(':', SWIFT_TLS_HOST);
        \$host = \$parts[0];
        \$port = \$parts[1] ?? 25;

        \$this->buffer->initialize([
            'type' => Swift_Transport_IoBuffer::TYPE_SOCKET,
            'host' => \$host,
            'port' => \$port,
            'protocol' => 'tls',
            'blocking' => 1,
            'timeout' => 15,
            ]);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/Transport/StreamBuffer/TlsSocketAcceptanceTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

require_once __DIR__.'/AbstractStreamBufferAcceptanceTest.php';

class Swift_Transport_StreamBuffer_TlsSocketAcceptanceTest extends Swift_Transport_StreamBuffer_AbstractStreamBufferAcceptanceTest
{
    protected function setUp()
    {
        \$streams = stream_get_transports();
        if (!in_array('tls', \$streams)) {
            \$this->markTestSkipped(
                'TLS is not configured for your system.  It is not possible to run this test'
             );
        }
        if (!defined('SWIFT_TLS_HOST')) {
            \$this->markTestSkipped(
                'Cannot run test without a TLS enabled SMTP host to connect to (define '.
                'SWIFT_TLS_HOST in tests/acceptance.conf.php if you wish to run this test)'
             );
        }
        parent::setUp();
    }

    protected function initializeBuffer()
    {
        \$parts = explode(':', SWIFT_TLS_HOST);
        \$host = \$parts[0];
        \$port = \$parts[1] ?? 25;

        \$this->buffer->initialize([
            'type' => Swift_Transport_IoBuffer::TYPE_SOCKET,
            'host' => \$host,
            'port' => \$port,
            'protocol' => 'tls',
            'blocking' => 1,
            'timeout' => 15,
            ]);
    }
}
", "vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/Transport/StreamBuffer/TlsSocketAcceptanceTest.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/Transport/StreamBuffer/TlsSocketAcceptanceTest.php");
    }
}
