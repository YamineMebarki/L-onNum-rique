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

/* vendor/swiftmailer/swiftmailer/tests/SwiftMailerSmokeTestCase.php */
class __TwigTemplate_ad1b6400b88fa9dd5854cd3539e780fda6736b0d85c7f753c1d331e8ea2f16b9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/SwiftMailerSmokeTestCase.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/SwiftMailerSmokeTestCase.php"));

        // line 1
        echo "<?php

/**
 * Base test for smoke tests.
 *
 * @author Rouven Weßling
 */
class SwiftMailerSmokeTestCase extends SwiftMailerTestCase
{
    protected function setUp()
    {
        if (!defined('SWIFT_SMOKE_TRANSPORT_TYPE')) {
            \$this->markTestSkipped(
                'Smoke tests are skipped if tests/smoke.conf.php is not edited'
             );
        }
    }

    protected function getMailer()
    {
        switch (SWIFT_SMOKE_TRANSPORT_TYPE) {
            case 'smtp':
                \$transport = Swift_DependencyContainer::getInstance()->lookup('transport.smtp')
                    ->setHost(SWIFT_SMOKE_SMTP_HOST)
                    ->setPort(SWIFT_SMOKE_SMTP_PORT)
                    ->setUsername(SWIFT_SMOKE_SMTP_USER)
                    ->setPassword(SWIFT_SMOKE_SMTP_PASS)
                    ->setEncryption(SWIFT_SMOKE_SMTP_ENCRYPTION)
                    ;
                break;
            case 'sendmail':
                \$transport = Swift_DependencyContainer::getInstance()->lookup('transport.sendmail')
                    ->setCommand(SWIFT_SMOKE_SENDMAIL_COMMAND)
                    ;
                break;
            case 'mail':
            case 'nativemail':
                \$transport = Swift_DependencyContainer::getInstance()->lookup('transport.mail');
                break;
            default:
                throw new Exception('Undefined transport ['.SWIFT_SMOKE_TRANSPORT_TYPE.']');
        }

        return new Swift_Mailer(\$transport);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/SwiftMailerSmokeTestCase.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/**
 * Base test for smoke tests.
 *
 * @author Rouven Weßling
 */
class SwiftMailerSmokeTestCase extends SwiftMailerTestCase
{
    protected function setUp()
    {
        if (!defined('SWIFT_SMOKE_TRANSPORT_TYPE')) {
            \$this->markTestSkipped(
                'Smoke tests are skipped if tests/smoke.conf.php is not edited'
             );
        }
    }

    protected function getMailer()
    {
        switch (SWIFT_SMOKE_TRANSPORT_TYPE) {
            case 'smtp':
                \$transport = Swift_DependencyContainer::getInstance()->lookup('transport.smtp')
                    ->setHost(SWIFT_SMOKE_SMTP_HOST)
                    ->setPort(SWIFT_SMOKE_SMTP_PORT)
                    ->setUsername(SWIFT_SMOKE_SMTP_USER)
                    ->setPassword(SWIFT_SMOKE_SMTP_PASS)
                    ->setEncryption(SWIFT_SMOKE_SMTP_ENCRYPTION)
                    ;
                break;
            case 'sendmail':
                \$transport = Swift_DependencyContainer::getInstance()->lookup('transport.sendmail')
                    ->setCommand(SWIFT_SMOKE_SENDMAIL_COMMAND)
                    ;
                break;
            case 'mail':
            case 'nativemail':
                \$transport = Swift_DependencyContainer::getInstance()->lookup('transport.mail');
                break;
            default:
                throw new Exception('Undefined transport ['.SWIFT_SMOKE_TRANSPORT_TYPE.']');
        }

        return new Swift_Mailer(\$transport);
    }
}
", "vendor/swiftmailer/swiftmailer/tests/SwiftMailerSmokeTestCase.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/SwiftMailerSmokeTestCase.php");
    }
}
