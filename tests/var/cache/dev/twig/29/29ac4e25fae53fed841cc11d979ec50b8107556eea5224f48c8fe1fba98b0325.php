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

/* vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug34Test.php */
class __TwigTemplate_18883f1b25e9e1eb97d8b47d74c125b733a893a821dda099913e5a205db880f7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug34Test.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug34Test.php"));

        // line 1
        echo "<?php

class Swift_Bug34Test extends \\PHPUnit\\Framework\\TestCase
{
    protected function setUp()
    {
        Swift_Preferences::getInstance()->setCharset('utf-8');
    }

    public function testEmbeddedFilesWithMultipartDataCreateMultipartRelatedContentAsAnAlternative()
    {
        \$message = new Swift_Message();
        \$message->setCharset('utf-8');
        \$message->setSubject('test subject');
        \$message->addPart('plain part', 'text/plain');

        \$image = new Swift_Image('<image data>', 'image.gif', 'image/gif');
        \$cid = \$message->embed(\$image);

        \$message->setBody('<images src=\"'.\$cid.'\" />', 'text/html');

        \$message->setTo(['user@domain.tld' => 'User']);

        \$message->setFrom(['other@domain.tld' => 'Other']);
        \$message->setSender(['other@domain.tld' => 'Other']);

        \$id = \$message->getId();
        \$date = preg_quote(\$message->getDate()->format('r'), '~');
        \$boundary = \$message->getBoundary();
        \$cidVal = \$image->getId();

        \$this->assertRegExp(
        '~^'.
        'Sender: Other <other@domain.tld>'.\"\\r\\n\".
        'Message-ID: <'.\$id.'>'.\"\\r\\n\".
        'Date: '.\$date.\"\\r\\n\".
        'Subject: test subject'.\"\\r\\n\".
        'From: Other <other@domain.tld>'.\"\\r\\n\".
        'To: User <user@domain.tld>'.\"\\r\\n\".
        'MIME-Version: 1.0'.\"\\r\\n\".
        'Content-Type: multipart/alternative;'.\"\\r\\n\".
        ' boundary=\"'.\$boundary.'\"'.\"\\r\\n\".
        \"\\r\\n\\r\\n\".
        '--'.\$boundary.\"\\r\\n\".
        'Content-Type: text/plain; charset=utf-8'.\"\\r\\n\".
        'Content-Transfer-Encoding: quoted-printable'.\"\\r\\n\".
        \"\\r\\n\".
        'plain part'.
        \"\\r\\n\\r\\n\".
        '--'.\$boundary.\"\\r\\n\".
        'Content-Type: multipart/related;'.\"\\r\\n\".
        ' boundary=\"(.*?)\"'.\"\\r\\n\".
        \"\\r\\n\\r\\n\".
        '--\\\\1'.\"\\r\\n\".
        'Content-Type: text/html; charset=utf-8'.\"\\r\\n\".
        'Content-Transfer-Encoding: quoted-printable'.\"\\r\\n\".
        \"\\r\\n\".
        '<images.*?/>'.
        \"\\r\\n\\r\\n\".
        '--\\\\1'.\"\\r\\n\".
        'Content-Type: image/gif; name=image.gif'.\"\\r\\n\".
        'Content-Transfer-Encoding: base64'.\"\\r\\n\".
        'Content-ID: <'.\$cidVal.'>'.\"\\r\\n\".
        'Content-Disposition: inline; filename=image.gif'.\"\\r\\n\".
        \"\\r\\n\".
        preg_quote(base64_encode('<image data>'), '~').
        \"\\r\\n\\r\\n\".
        '--\\\\1--'.\"\\r\\n\".
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
        return "vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug34Test.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

class Swift_Bug34Test extends \\PHPUnit\\Framework\\TestCase
{
    protected function setUp()
    {
        Swift_Preferences::getInstance()->setCharset('utf-8');
    }

    public function testEmbeddedFilesWithMultipartDataCreateMultipartRelatedContentAsAnAlternative()
    {
        \$message = new Swift_Message();
        \$message->setCharset('utf-8');
        \$message->setSubject('test subject');
        \$message->addPart('plain part', 'text/plain');

        \$image = new Swift_Image('<image data>', 'image.gif', 'image/gif');
        \$cid = \$message->embed(\$image);

        \$message->setBody('<images src=\"'.\$cid.'\" />', 'text/html');

        \$message->setTo(['user@domain.tld' => 'User']);

        \$message->setFrom(['other@domain.tld' => 'Other']);
        \$message->setSender(['other@domain.tld' => 'Other']);

        \$id = \$message->getId();
        \$date = preg_quote(\$message->getDate()->format('r'), '~');
        \$boundary = \$message->getBoundary();
        \$cidVal = \$image->getId();

        \$this->assertRegExp(
        '~^'.
        'Sender: Other <other@domain.tld>'.\"\\r\\n\".
        'Message-ID: <'.\$id.'>'.\"\\r\\n\".
        'Date: '.\$date.\"\\r\\n\".
        'Subject: test subject'.\"\\r\\n\".
        'From: Other <other@domain.tld>'.\"\\r\\n\".
        'To: User <user@domain.tld>'.\"\\r\\n\".
        'MIME-Version: 1.0'.\"\\r\\n\".
        'Content-Type: multipart/alternative;'.\"\\r\\n\".
        ' boundary=\"'.\$boundary.'\"'.\"\\r\\n\".
        \"\\r\\n\\r\\n\".
        '--'.\$boundary.\"\\r\\n\".
        'Content-Type: text/plain; charset=utf-8'.\"\\r\\n\".
        'Content-Transfer-Encoding: quoted-printable'.\"\\r\\n\".
        \"\\r\\n\".
        'plain part'.
        \"\\r\\n\\r\\n\".
        '--'.\$boundary.\"\\r\\n\".
        'Content-Type: multipart/related;'.\"\\r\\n\".
        ' boundary=\"(.*?)\"'.\"\\r\\n\".
        \"\\r\\n\\r\\n\".
        '--\\\\1'.\"\\r\\n\".
        'Content-Type: text/html; charset=utf-8'.\"\\r\\n\".
        'Content-Transfer-Encoding: quoted-printable'.\"\\r\\n\".
        \"\\r\\n\".
        '<images.*?/>'.
        \"\\r\\n\\r\\n\".
        '--\\\\1'.\"\\r\\n\".
        'Content-Type: image/gif; name=image.gif'.\"\\r\\n\".
        'Content-Transfer-Encoding: base64'.\"\\r\\n\".
        'Content-ID: <'.\$cidVal.'>'.\"\\r\\n\".
        'Content-Disposition: inline; filename=image.gif'.\"\\r\\n\".
        \"\\r\\n\".
        preg_quote(base64_encode('<image data>'), '~').
        \"\\r\\n\\r\\n\".
        '--\\\\1--'.\"\\r\\n\".
        \"\\r\\n\\r\\n\".
        '--'.\$boundary.'--'.\"\\r\\n\".
        '\$~D',
        \$message->toString()
        );
    }
}
", "vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug34Test.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug34Test.php");
    }
}
