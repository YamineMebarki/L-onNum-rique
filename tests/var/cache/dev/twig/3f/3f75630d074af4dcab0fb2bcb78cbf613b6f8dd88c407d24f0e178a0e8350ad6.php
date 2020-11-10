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

/* vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug38Test.php */
class __TwigTemplate_4048bb36771dee8605fa82e1fe6cfc9387e20c04852478db1603664ef1fd8af2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug38Test.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug38Test.php"));

        // line 1
        echo "<?php

class Swift_Bug38Test extends \\PHPUnit\\Framework\\TestCase
{
    private \$attFile;
    private \$attFileName;
    private \$attFileType;

    protected function setUp()
    {
        \$this->attFileName = 'data.AideTxt';
        \$this->attFileType = 'text/plain';
        \$this->attFile = __DIR__.'/../../_samples/files/data.AideTxt';
        Swift_Preferences::getInstance()->setCharset('utf-8');
    }

    public function testWritingMessageToByteStreamProducesCorrectStructure()
    {
        \$message = new Swift_Message();
        \$message->setSubject('test subject');
        \$message->setTo('user@domain.tld');
        \$message->setCc('other@domain.tld');
        \$message->setFrom('user@domain.tld');

        \$image = new Swift_Image('<data>', 'image.gif', 'image/gif');

        \$cid = \$message->embed(\$image);
        \$message->setBody('HTML part', 'text/html');

        \$id = \$message->getId();
        \$date = preg_quote(\$message->getDate()->format('r'), '~');
        \$boundary = \$message->getBoundary();
        \$imgId = \$image->getId();

        \$stream = new Swift_ByteStream_ArrayByteStream();

        \$message->toByteStream(\$stream);

        \$this->assertPatternInStream(
            '~^'.
            'Message-ID: <'.\$id.'>'.\"\\r\\n\".
            'Date: '.\$date.\"\\r\\n\".
            'Subject: test subject'.\"\\r\\n\".
            'From: user@domain.tld'.\"\\r\\n\".
            'To: user@domain.tld'.\"\\r\\n\".
            'Cc: other@domain.tld'.\"\\r\\n\".
            'MIME-Version: 1.0'.\"\\r\\n\".
            'Content-Type: multipart/related;'.\"\\r\\n\".
            ' boundary=\"'.\$boundary.'\"'.\"\\r\\n\".
            \"\\r\\n\\r\\n\".
            '--'.\$boundary.\"\\r\\n\".
            'Content-Type: text/html; charset=utf-8'.\"\\r\\n\".
            'Content-Transfer-Encoding: quoted-printable'.\"\\r\\n\".
            \"\\r\\n\".
            'HTML part'.
            \"\\r\\n\\r\\n\".
            '--'.\$boundary.\"\\r\\n\".
            'Content-Type: image/gif; name=image.gif'.\"\\r\\n\".
            'Content-Transfer-Encoding: base64'.\"\\r\\n\".
            'Content-ID: <'.preg_quote(\$imgId, '~').'>'.\"\\r\\n\".
            'Content-Disposition: inline; filename=image.gif'.\"\\r\\n\".
            \"\\r\\n\".
            preg_quote(base64_encode('<data>'), '~').
            \"\\r\\n\\r\\n\".
            '--'.\$boundary.'--'.\"\\r\\n\".
            '\$~D',
            \$stream
        );
    }

    public function testWritingMessageToByteStreamTwiceProducesCorrectStructure()
    {
        \$message = new Swift_Message();
        \$message->setSubject('test subject');
        \$message->setTo('user@domain.tld');
        \$message->setCc('other@domain.tld');
        \$message->setFrom('user@domain.tld');

        \$image = new Swift_Image('<data>', 'image.gif', 'image/gif');

        \$cid = \$message->embed(\$image);
        \$message->setBody('HTML part', 'text/html');

        \$id = \$message->getId();
        \$date = preg_quote(\$message->getDate()->format('r'), '~');
        \$boundary = \$message->getBoundary();
        \$imgId = \$image->getId();

        \$pattern = '~^'.
        'Message-ID: <'.\$id.'>'.\"\\r\\n\".
        'Date: '.\$date.\"\\r\\n\".
        'Subject: test subject'.\"\\r\\n\".
        'From: user@domain.tld'.\"\\r\\n\".
        'To: user@domain.tld'.\"\\r\\n\".
        'Cc: other@domain.tld'.\"\\r\\n\".
        'MIME-Version: 1.0'.\"\\r\\n\".
        'Content-Type: multipart/related;'.\"\\r\\n\".
        ' boundary=\"'.\$boundary.'\"'.\"\\r\\n\".
        \"\\r\\n\\r\\n\".
        '--'.\$boundary.\"\\r\\n\".
        'Content-Type: text/html; charset=utf-8'.\"\\r\\n\".
        'Content-Transfer-Encoding: quoted-printable'.\"\\r\\n\".
        \"\\r\\n\".
        'HTML part'.
        \"\\r\\n\\r\\n\".
        '--'.\$boundary.\"\\r\\n\".
        'Content-Type: image/gif; name=image.gif'.\"\\r\\n\".
        'Content-Transfer-Encoding: base64'.\"\\r\\n\".
        'Content-ID: <'.preg_quote(\$imgId, '~').'>'.\"\\r\\n\".
        'Content-Disposition: inline; filename=image.gif'.\"\\r\\n\".
        \"\\r\\n\".
        preg_quote(base64_encode('<data>'), '~').
        \"\\r\\n\\r\\n\".
        '--'.\$boundary.'--'.\"\\r\\n\".
        '\$~D'
        ;

        \$streamA = new Swift_ByteStream_ArrayByteStream();
        \$streamB = new Swift_ByteStream_ArrayByteStream();

        \$message->toByteStream(\$streamA);
        \$message->toByteStream(\$streamB);

        \$this->assertPatternInStream(\$pattern, \$streamA);
        \$this->assertPatternInStream(\$pattern, \$streamB);
    }

    public function testWritingMessageToByteStreamTwiceUsingAFileAttachment()
    {
        \$message = new Swift_Message();
        \$message->setSubject('test subject');
        \$message->setTo('user@domain.tld');
        \$message->setCc('other@domain.tld');
        \$message->setFrom('user@domain.tld');

        \$attachment = Swift_Attachment::fromPath(\$this->attFile);

        \$message->attach(\$attachment);

        \$message->setBody('HTML part', 'text/html');

        \$id = \$message->getId();
        \$date = preg_quote(\$message->getDate()->format('r'), '~');
        \$boundary = \$message->getBoundary();

        \$streamA = new Swift_ByteStream_ArrayByteStream();
        \$streamB = new Swift_ByteStream_ArrayByteStream();

        \$pattern = '~^'.
            'Message-ID: <'.\$id.'>'.\"\\r\\n\".
            'Date: '.\$date.\"\\r\\n\".
            'Subject: test subject'.\"\\r\\n\".
            'From: user@domain.tld'.\"\\r\\n\".
            'To: user@domain.tld'.\"\\r\\n\".
            'Cc: other@domain.tld'.\"\\r\\n\".
            'MIME-Version: 1.0'.\"\\r\\n\".
            'Content-Type: multipart/mixed;'.\"\\r\\n\".
            ' boundary=\"'.\$boundary.'\"'.\"\\r\\n\".
            \"\\r\\n\\r\\n\".
            '--'.\$boundary.\"\\r\\n\".
            'Content-Type: text/html; charset=utf-8'.\"\\r\\n\".
            'Content-Transfer-Encoding: quoted-printable'.\"\\r\\n\".
            \"\\r\\n\".
            'HTML part'.
            \"\\r\\n\\r\\n\".
            '--'.\$boundary.\"\\r\\n\".
            'Content-Type: '.\$this->attFileType.'; name='.\$this->attFileName.\"\\r\\n\".
            'Content-Transfer-Encoding: base64'.\"\\r\\n\".
            'Content-Disposition: attachment; filename='.\$this->attFileName.\"\\r\\n\".
            \"\\r\\n\".
            preg_quote(base64_encode(file_get_contents(\$this->attFile)), '~').
            \"\\r\\n\\r\\n\".
            '--'.\$boundary.'--'.\"\\r\\n\".
            '\$~D'
            ;

        \$message->toByteStream(\$streamA);
        \$message->toByteStream(\$streamB);

        \$this->assertPatternInStream(\$pattern, \$streamA);
        \$this->assertPatternInStream(\$pattern, \$streamB);
    }

    public function assertPatternInStream(\$pattern, \$stream, \$message = '%s')
    {
        \$string = '';
        while (false !== \$bytes = \$stream->read(8192)) {
            \$string .= \$bytes;
        }
        \$this->assertRegExp(\$pattern, \$string, \$message);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug38Test.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

class Swift_Bug38Test extends \\PHPUnit\\Framework\\TestCase
{
    private \$attFile;
    private \$attFileName;
    private \$attFileType;

    protected function setUp()
    {
        \$this->attFileName = 'data.AideTxt';
        \$this->attFileType = 'text/plain';
        \$this->attFile = __DIR__.'/../../_samples/files/data.AideTxt';
        Swift_Preferences::getInstance()->setCharset('utf-8');
    }

    public function testWritingMessageToByteStreamProducesCorrectStructure()
    {
        \$message = new Swift_Message();
        \$message->setSubject('test subject');
        \$message->setTo('user@domain.tld');
        \$message->setCc('other@domain.tld');
        \$message->setFrom('user@domain.tld');

        \$image = new Swift_Image('<data>', 'image.gif', 'image/gif');

        \$cid = \$message->embed(\$image);
        \$message->setBody('HTML part', 'text/html');

        \$id = \$message->getId();
        \$date = preg_quote(\$message->getDate()->format('r'), '~');
        \$boundary = \$message->getBoundary();
        \$imgId = \$image->getId();

        \$stream = new Swift_ByteStream_ArrayByteStream();

        \$message->toByteStream(\$stream);

        \$this->assertPatternInStream(
            '~^'.
            'Message-ID: <'.\$id.'>'.\"\\r\\n\".
            'Date: '.\$date.\"\\r\\n\".
            'Subject: test subject'.\"\\r\\n\".
            'From: user@domain.tld'.\"\\r\\n\".
            'To: user@domain.tld'.\"\\r\\n\".
            'Cc: other@domain.tld'.\"\\r\\n\".
            'MIME-Version: 1.0'.\"\\r\\n\".
            'Content-Type: multipart/related;'.\"\\r\\n\".
            ' boundary=\"'.\$boundary.'\"'.\"\\r\\n\".
            \"\\r\\n\\r\\n\".
            '--'.\$boundary.\"\\r\\n\".
            'Content-Type: text/html; charset=utf-8'.\"\\r\\n\".
            'Content-Transfer-Encoding: quoted-printable'.\"\\r\\n\".
            \"\\r\\n\".
            'HTML part'.
            \"\\r\\n\\r\\n\".
            '--'.\$boundary.\"\\r\\n\".
            'Content-Type: image/gif; name=image.gif'.\"\\r\\n\".
            'Content-Transfer-Encoding: base64'.\"\\r\\n\".
            'Content-ID: <'.preg_quote(\$imgId, '~').'>'.\"\\r\\n\".
            'Content-Disposition: inline; filename=image.gif'.\"\\r\\n\".
            \"\\r\\n\".
            preg_quote(base64_encode('<data>'), '~').
            \"\\r\\n\\r\\n\".
            '--'.\$boundary.'--'.\"\\r\\n\".
            '\$~D',
            \$stream
        );
    }

    public function testWritingMessageToByteStreamTwiceProducesCorrectStructure()
    {
        \$message = new Swift_Message();
        \$message->setSubject('test subject');
        \$message->setTo('user@domain.tld');
        \$message->setCc('other@domain.tld');
        \$message->setFrom('user@domain.tld');

        \$image = new Swift_Image('<data>', 'image.gif', 'image/gif');

        \$cid = \$message->embed(\$image);
        \$message->setBody('HTML part', 'text/html');

        \$id = \$message->getId();
        \$date = preg_quote(\$message->getDate()->format('r'), '~');
        \$boundary = \$message->getBoundary();
        \$imgId = \$image->getId();

        \$pattern = '~^'.
        'Message-ID: <'.\$id.'>'.\"\\r\\n\".
        'Date: '.\$date.\"\\r\\n\".
        'Subject: test subject'.\"\\r\\n\".
        'From: user@domain.tld'.\"\\r\\n\".
        'To: user@domain.tld'.\"\\r\\n\".
        'Cc: other@domain.tld'.\"\\r\\n\".
        'MIME-Version: 1.0'.\"\\r\\n\".
        'Content-Type: multipart/related;'.\"\\r\\n\".
        ' boundary=\"'.\$boundary.'\"'.\"\\r\\n\".
        \"\\r\\n\\r\\n\".
        '--'.\$boundary.\"\\r\\n\".
        'Content-Type: text/html; charset=utf-8'.\"\\r\\n\".
        'Content-Transfer-Encoding: quoted-printable'.\"\\r\\n\".
        \"\\r\\n\".
        'HTML part'.
        \"\\r\\n\\r\\n\".
        '--'.\$boundary.\"\\r\\n\".
        'Content-Type: image/gif; name=image.gif'.\"\\r\\n\".
        'Content-Transfer-Encoding: base64'.\"\\r\\n\".
        'Content-ID: <'.preg_quote(\$imgId, '~').'>'.\"\\r\\n\".
        'Content-Disposition: inline; filename=image.gif'.\"\\r\\n\".
        \"\\r\\n\".
        preg_quote(base64_encode('<data>'), '~').
        \"\\r\\n\\r\\n\".
        '--'.\$boundary.'--'.\"\\r\\n\".
        '\$~D'
        ;

        \$streamA = new Swift_ByteStream_ArrayByteStream();
        \$streamB = new Swift_ByteStream_ArrayByteStream();

        \$message->toByteStream(\$streamA);
        \$message->toByteStream(\$streamB);

        \$this->assertPatternInStream(\$pattern, \$streamA);
        \$this->assertPatternInStream(\$pattern, \$streamB);
    }

    public function testWritingMessageToByteStreamTwiceUsingAFileAttachment()
    {
        \$message = new Swift_Message();
        \$message->setSubject('test subject');
        \$message->setTo('user@domain.tld');
        \$message->setCc('other@domain.tld');
        \$message->setFrom('user@domain.tld');

        \$attachment = Swift_Attachment::fromPath(\$this->attFile);

        \$message->attach(\$attachment);

        \$message->setBody('HTML part', 'text/html');

        \$id = \$message->getId();
        \$date = preg_quote(\$message->getDate()->format('r'), '~');
        \$boundary = \$message->getBoundary();

        \$streamA = new Swift_ByteStream_ArrayByteStream();
        \$streamB = new Swift_ByteStream_ArrayByteStream();

        \$pattern = '~^'.
            'Message-ID: <'.\$id.'>'.\"\\r\\n\".
            'Date: '.\$date.\"\\r\\n\".
            'Subject: test subject'.\"\\r\\n\".
            'From: user@domain.tld'.\"\\r\\n\".
            'To: user@domain.tld'.\"\\r\\n\".
            'Cc: other@domain.tld'.\"\\r\\n\".
            'MIME-Version: 1.0'.\"\\r\\n\".
            'Content-Type: multipart/mixed;'.\"\\r\\n\".
            ' boundary=\"'.\$boundary.'\"'.\"\\r\\n\".
            \"\\r\\n\\r\\n\".
            '--'.\$boundary.\"\\r\\n\".
            'Content-Type: text/html; charset=utf-8'.\"\\r\\n\".
            'Content-Transfer-Encoding: quoted-printable'.\"\\r\\n\".
            \"\\r\\n\".
            'HTML part'.
            \"\\r\\n\\r\\n\".
            '--'.\$boundary.\"\\r\\n\".
            'Content-Type: '.\$this->attFileType.'; name='.\$this->attFileName.\"\\r\\n\".
            'Content-Transfer-Encoding: base64'.\"\\r\\n\".
            'Content-Disposition: attachment; filename='.\$this->attFileName.\"\\r\\n\".
            \"\\r\\n\".
            preg_quote(base64_encode(file_get_contents(\$this->attFile)), '~').
            \"\\r\\n\\r\\n\".
            '--'.\$boundary.'--'.\"\\r\\n\".
            '\$~D'
            ;

        \$message->toByteStream(\$streamA);
        \$message->toByteStream(\$streamB);

        \$this->assertPatternInStream(\$pattern, \$streamA);
        \$this->assertPatternInStream(\$pattern, \$streamB);
    }

    public function assertPatternInStream(\$pattern, \$stream, \$message = '%s')
    {
        \$string = '';
        while (false !== \$bytes = \$stream->read(8192)) {
            \$string .= \$bytes;
        }
        \$this->assertRegExp(\$pattern, \$string, \$message);
    }
}
", "vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug38Test.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug38Test.php");
    }
}
