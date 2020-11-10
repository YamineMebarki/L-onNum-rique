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

/* vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/Transport/StreamBuffer/ProcessAcceptanceTest.php */
class __TwigTemplate_69d5261a525998f3b5c47abc7635f319389ca28ac1dfd92920526675040e19c6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/Transport/StreamBuffer/ProcessAcceptanceTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/Transport/StreamBuffer/ProcessAcceptanceTest.php"));

        // line 1
        echo "<?php

require_once __DIR__.'/AbstractStreamBufferAcceptanceTest.php';

class Swift_Transport_StreamBuffer_ProcessAcceptanceTest extends Swift_Transport_StreamBuffer_AbstractStreamBufferAcceptanceTest
{
    protected function setUp()
    {
        if (!defined('SWIFT_SENDMAIL_PATH')) {
            \$this->markTestSkipped(
                'Cannot run test without a path to sendmail (define '.
                'SWIFT_SENDMAIL_PATH in tests/acceptance.conf.php if you wish to run this test)'
             );
        }

        parent::setUp();
    }

    protected function initializeBuffer()
    {
        \$this->buffer->initialize([
            'type' => Swift_Transport_IoBuffer::TYPE_PROCESS,
            'command' => SWIFT_SENDMAIL_PATH.' -bs',
        ]);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/Transport/StreamBuffer/ProcessAcceptanceTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

require_once __DIR__.'/AbstractStreamBufferAcceptanceTest.php';

class Swift_Transport_StreamBuffer_ProcessAcceptanceTest extends Swift_Transport_StreamBuffer_AbstractStreamBufferAcceptanceTest
{
    protected function setUp()
    {
        if (!defined('SWIFT_SENDMAIL_PATH')) {
            \$this->markTestSkipped(
                'Cannot run test without a path to sendmail (define '.
                'SWIFT_SENDMAIL_PATH in tests/acceptance.conf.php if you wish to run this test)'
             );
        }

        parent::setUp();
    }

    protected function initializeBuffer()
    {
        \$this->buffer->initialize([
            'type' => Swift_Transport_IoBuffer::TYPE_PROCESS,
            'command' => SWIFT_SENDMAIL_PATH.' -bs',
        ]);
    }
}
", "vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/Transport/StreamBuffer/ProcessAcceptanceTest.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/Transport/StreamBuffer/ProcessAcceptanceTest.php");
    }
}
