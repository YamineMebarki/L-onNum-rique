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

/* vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug35Test.php */
class __TwigTemplate_59d3c9b133bec52edf50ec7d8ef1e432cfbfb7a14d4b015e472c4cf282d3e9ec extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug35Test.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug35Test.php"));

        // line 1
        echo "<?php

class Swift_Bug35Test extends \\PHPUnit\\Framework\\TestCase
{
    protected function setUp()
    {
        Swift_Preferences::getInstance()->setCharset('utf-8');
    }

    public function testHTMLPartAppearsLastEvenWhenAttachmentsAdded()
    {
        \$message = new Swift_Message();
        \$message->setCharset('utf-8');
        \$message->setSubject('test subject');
        \$message->addPart('plain part', 'text/plain');

        \$attachment = new Swift_Attachment('<data>', 'image.gif', 'image/gif');
        \$message->attach(\$attachment);

        \$message->setBody('HTML part', 'text/html');

        \$message->setTo(['user@domain.tld' => 'User']);

        \$message->setFrom(['other@domain.tld' => 'Other']);
        \$message->setSender(['other@domain.tld' => 'Other']);

        \$id = \$message->getId();
        \$date = preg_quote(\$message->getDate()->format('r'), '~');
        \$boundary = \$message->getBoundary();

        \$this->assertRegExp(
        '~^'.
        'Sender: Other <other@domain.tld>'.\"\\r\\n\".
        'Message-ID: <'.\$id.'>'.\"\\r\\n\".
        'Date: '.\$date.\"\\r\\n\".
        'Subject: test subject'.\"\\r\\n\".
        'From: Other <other@domain.tld>'.\"\\r\\n\".
        'To: User <user@domain.tld>'.\"\\r\\n\".
        'MIME-Version: 1.0'.\"\\r\\n\".
        'Content-Type: multipart/mixed;'.\"\\r\\n\".
        ' boundary=\"'.\$boundary.'\"'.\"\\r\\n\".
        \"\\r\\n\\r\\n\".
        '--'.\$boundary.\"\\r\\n\".
        'Content-Type: multipart/alternative;'.\"\\r\\n\".
        ' boundary=\"(.*?)\"'.\"\\r\\n\".
        \"\\r\\n\\r\\n\".
        '--\\\\1'.\"\\r\\n\".
        'Content-Type: text/plain; charset=utf-8'.\"\\r\\n\".
        'Content-Transfer-Encoding: quoted-printable'.\"\\r\\n\".
        \"\\r\\n\".
        'plain part'.
        \"\\r\\n\\r\\n\".
        '--\\\\1'.\"\\r\\n\".
        'Content-Type: text/html; charset=utf-8'.\"\\r\\n\".
        'Content-Transfer-Encoding: quoted-printable'.\"\\r\\n\".
        \"\\r\\n\".
        'HTML part'.
        \"\\r\\n\\r\\n\".
        '--\\\\1--'.\"\\r\\n\".
        \"\\r\\n\\r\\n\".
        '--'.\$boundary.\"\\r\\n\".
        'Content-Type: image/gif; name=image.gif'.\"\\r\\n\".
        'Content-Transfer-Encoding: base64'.\"\\r\\n\".
        'Content-Disposition: attachment; filename=image.gif'.\"\\r\\n\".
        \"\\r\\n\".
        preg_quote(base64_encode('<data>'), '~').
        \"\\r\\n\\r\\n\".
        '--'.\$boundary.'--'.\"\\r\\n\".
        '\$~D',
        \$message->toString()
        );
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug35Test.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

class Swift_Bug35Test extends \\PHPUnit\\Framework\\TestCase
{
    protected function setUp()
    {
        Swift_Preferences::getInstance()->setCharset('utf-8');
    }

    public function testHTMLPartAppearsLastEvenWhenAttachmentsAdded()
    {
        \$message = new Swift_Message();
        \$message->setCharset('utf-8');
        \$message->setSubject('test subject');
        \$message->addPart('plain part', 'text/plain');

        \$attachment = new Swift_Attachment('<data>', 'image.gif', 'image/gif');
        \$message->attach(\$attachment);

        \$message->setBody('HTML part', 'text/html');

        \$message->setTo(['user@domain.tld' => 'User']);

        \$message->setFrom(['other@domain.tld' => 'Other']);
        \$message->setSender(['other@domain.tld' => 'Other']);

        \$id = \$message->getId();
        \$date = preg_quote(\$message->getDate()->format('r'), '~');
        \$boundary = \$message->getBoundary();

        \$this->assertRegExp(
        '~^'.
        'Sender: Other <other@domain.tld>'.\"\\r\\n\".
        'Message-ID: <'.\$id.'>'.\"\\r\\n\".
        'Date: '.\$date.\"\\r\\n\".
        'Subject: test subject'.\"\\r\\n\".
        'From: Other <other@domain.tld>'.\"\\r\\n\".
        'To: User <user@domain.tld>'.\"\\r\\n\".
        'MIME-Version: 1.0'.\"\\r\\n\".
        'Content-Type: multipart/mixed;'.\"\\r\\n\".
        ' boundary=\"'.\$boundary.'\"'.\"\\r\\n\".
        \"\\r\\n\\r\\n\".
        '--'.\$boundary.\"\\r\\n\".
        'Content-Type: multipart/alternative;'.\"\\r\\n\".
        ' boundary=\"(.*?)\"'.\"\\r\\n\".
        \"\\r\\n\\r\\n\".
        '--\\\\1'.\"\\r\\n\".
        'Content-Type: text/plain; charset=utf-8'.\"\\r\\n\".
        'Content-Transfer-Encoding: quoted-printable'.\"\\r\\n\".
        \"\\r\\n\".
        'plain part'.
        \"\\r\\n\\r\\n\".
        '--\\\\1'.\"\\r\\n\".
        'Content-Type: text/html; charset=utf-8'.\"\\r\\n\".
        'Content-Transfer-Encoding: quoted-printable'.\"\\r\\n\".
        \"\\r\\n\".
        'HTML part'.
        \"\\r\\n\\r\\n\".
        '--\\\\1--'.\"\\r\\n\".
        \"\\r\\n\\r\\n\".
        '--'.\$boundary.\"\\r\\n\".
        'Content-Type: image/gif; name=image.gif'.\"\\r\\n\".
        'Content-Transfer-Encoding: base64'.\"\\r\\n\".
        'Content-Disposition: attachment; filename=image.gif'.\"\\r\\n\".
        \"\\r\\n\".
        preg_quote(base64_encode('<data>'), '~').
        \"\\r\\n\\r\\n\".
        '--'.\$boundary.'--'.\"\\r\\n\".
        '\$~D',
        \$message->toString()
        );
    }
}
", "vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug35Test.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug35Test.php");
    }
}
