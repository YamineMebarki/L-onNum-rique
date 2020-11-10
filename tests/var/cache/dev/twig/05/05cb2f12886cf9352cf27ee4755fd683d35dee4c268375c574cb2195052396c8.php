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

/* vendor/swiftmailer/swiftmailer/tests/smoke/Swift/Smoke/HtmlWithAttachmentSmokeTest.php */
class __TwigTemplate_6e375c619ea827ca2af239af1b873c0cf850a9222c62112dd76efde102914d91 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/smoke/Swift/Smoke/HtmlWithAttachmentSmokeTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/smoke/Swift/Smoke/HtmlWithAttachmentSmokeTest.php"));

        // line 1
        echo "<?php

/**
 * @group smoke
 */
class Swift_Smoke_HtmlWithAttachmentSmokeTest extends SwiftMailerSmokeTestCase
{
    private \$attFile;

    protected function setUp()
    {
        parent::setUp();

        \$this->attFile = __DIR__.'/../../../_samples/files/textfile.zip';
    }

    public function testAttachmentSending()
    {
        \$mailer = \$this->getMailer();
        \$message = (new Swift_Message('[Swift Mailer] HtmlWithAttachmentSmokeTest'))
            ->setFrom([SWIFT_SMOKE_EMAIL_ADDRESS => 'Swift Mailer'])
            ->setTo(SWIFT_SMOKE_EMAIL_ADDRESS)
            ->attach(Swift_Attachment::fromPath(\$this->attFile))
            ->setBody('<p>This HTML-formatted message should contain an attached ZIP file (named \"textfile.zip\").'.PHP_EOL.
                'When unzipped, the archive should produce a text file which reads:</p>'.PHP_EOL.
                '<p><q>This is part of a Swift Mailer smoke test.</q></p>', 'text/html'
            )
            ;
        \$this->assertEquals(1, \$mailer->send(\$message),
            '%s: The smoke test should send a single message'
            );
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/smoke/Swift/Smoke/HtmlWithAttachmentSmokeTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/**
 * @group smoke
 */
class Swift_Smoke_HtmlWithAttachmentSmokeTest extends SwiftMailerSmokeTestCase
{
    private \$attFile;

    protected function setUp()
    {
        parent::setUp();

        \$this->attFile = __DIR__.'/../../../_samples/files/textfile.zip';
    }

    public function testAttachmentSending()
    {
        \$mailer = \$this->getMailer();
        \$message = (new Swift_Message('[Swift Mailer] HtmlWithAttachmentSmokeTest'))
            ->setFrom([SWIFT_SMOKE_EMAIL_ADDRESS => 'Swift Mailer'])
            ->setTo(SWIFT_SMOKE_EMAIL_ADDRESS)
            ->attach(Swift_Attachment::fromPath(\$this->attFile))
            ->setBody('<p>This HTML-formatted message should contain an attached ZIP file (named \"textfile.zip\").'.PHP_EOL.
                'When unzipped, the archive should produce a text file which reads:</p>'.PHP_EOL.
                '<p><q>This is part of a Swift Mailer smoke test.</q></p>', 'text/html'
            )
            ;
        \$this->assertEquals(1, \$mailer->send(\$message),
            '%s: The smoke test should send a single message'
            );
    }
}
", "vendor/swiftmailer/swiftmailer/tests/smoke/Swift/Smoke/HtmlWithAttachmentSmokeTest.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/smoke/Swift/Smoke/HtmlWithAttachmentSmokeTest.php");
    }
}
