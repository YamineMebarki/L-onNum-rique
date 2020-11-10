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

/* vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/MessageAcceptanceTest.php */
class __TwigTemplate_d55d0fca1205d5622cc0d901335871919579bff1751e421229e1fc4d53d4febb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/MessageAcceptanceTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/MessageAcceptanceTest.php"));

        // line 1
        echo "<?php

require_once 'swift_required.php';
require_once __DIR__.'/Mime/SimpleMessageAcceptanceTest.php';

class Swift_MessageAcceptanceTest extends Swift_Mime_SimpleMessageAcceptanceTest
{
    public function testAddPartWrapper()
    {
        \$message = \$this->createMessage();
        \$message->setSubject('just a test subject');
        \$message->setFrom([
            'chris.corbyn@swiftmailer.org' => 'Chris Corbyn', ]);

        \$id = \$message->getId();
        \$date = \$message->getDate();
        \$boundary = \$message->getBoundary();

        \$message->addPart('foo', 'text/plain', 'iso-8859-1');
        \$message->addPart('test <b>foo</b>', 'text/html', 'iso-8859-1');

        \$this->assertEquals(
            'Message-ID: <'.\$id.'>'.\"\\r\\n\".
            'Date: '.\$date->format('r').\"\\r\\n\".
            'Subject: just a test subject'.\"\\r\\n\".
            'From: Chris Corbyn <chris.corbyn@swiftmailer.org>'.\"\\r\\n\".
            'MIME-Version: 1.0'.\"\\r\\n\".
            'Content-Type: multipart/alternative;'.\"\\r\\n\".
            ' boundary=\"'.\$boundary.'\"'.\"\\r\\n\".
            \"\\r\\n\\r\\n\".
            '--'.\$boundary.\"\\r\\n\".
            'Content-Type: text/plain; charset=iso-8859-1'.\"\\r\\n\".
            'Content-Transfer-Encoding: quoted-printable'.\"\\r\\n\".
            \"\\r\\n\".
            'foo'.
            \"\\r\\n\\r\\n\".
            '--'.\$boundary.\"\\r\\n\".
            'Content-Type: text/html; charset=iso-8859-1'.\"\\r\\n\".
            'Content-Transfer-Encoding: quoted-printable'.\"\\r\\n\".
            \"\\r\\n\".
            'test <b>foo</b>'.
            \"\\r\\n\\r\\n\".
            '--'.\$boundary.'--'.\"\\r\\n\",
            \$message->toString()
            );
    }

    protected function createMessage()
    {
        Swift_DependencyContainer::getInstance()
            ->register('properties.charset')->asValue(null);

        return new Swift_Message();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/MessageAcceptanceTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

require_once 'swift_required.php';
require_once __DIR__.'/Mime/SimpleMessageAcceptanceTest.php';

class Swift_MessageAcceptanceTest extends Swift_Mime_SimpleMessageAcceptanceTest
{
    public function testAddPartWrapper()
    {
        \$message = \$this->createMessage();
        \$message->setSubject('just a test subject');
        \$message->setFrom([
            'chris.corbyn@swiftmailer.org' => 'Chris Corbyn', ]);

        \$id = \$message->getId();
        \$date = \$message->getDate();
        \$boundary = \$message->getBoundary();

        \$message->addPart('foo', 'text/plain', 'iso-8859-1');
        \$message->addPart('test <b>foo</b>', 'text/html', 'iso-8859-1');

        \$this->assertEquals(
            'Message-ID: <'.\$id.'>'.\"\\r\\n\".
            'Date: '.\$date->format('r').\"\\r\\n\".
            'Subject: just a test subject'.\"\\r\\n\".
            'From: Chris Corbyn <chris.corbyn@swiftmailer.org>'.\"\\r\\n\".
            'MIME-Version: 1.0'.\"\\r\\n\".
            'Content-Type: multipart/alternative;'.\"\\r\\n\".
            ' boundary=\"'.\$boundary.'\"'.\"\\r\\n\".
            \"\\r\\n\\r\\n\".
            '--'.\$boundary.\"\\r\\n\".
            'Content-Type: text/plain; charset=iso-8859-1'.\"\\r\\n\".
            'Content-Transfer-Encoding: quoted-printable'.\"\\r\\n\".
            \"\\r\\n\".
            'foo'.
            \"\\r\\n\\r\\n\".
            '--'.\$boundary.\"\\r\\n\".
            'Content-Type: text/html; charset=iso-8859-1'.\"\\r\\n\".
            'Content-Transfer-Encoding: quoted-printable'.\"\\r\\n\".
            \"\\r\\n\".
            'test <b>foo</b>'.
            \"\\r\\n\\r\\n\".
            '--'.\$boundary.'--'.\"\\r\\n\",
            \$message->toString()
            );
    }

    protected function createMessage()
    {
        Swift_DependencyContainer::getInstance()
            ->register('properties.charset')->asValue(null);

        return new Swift_Message();
    }
}
", "vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/MessageAcceptanceTest.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/MessageAcceptanceTest.php");
    }
}
