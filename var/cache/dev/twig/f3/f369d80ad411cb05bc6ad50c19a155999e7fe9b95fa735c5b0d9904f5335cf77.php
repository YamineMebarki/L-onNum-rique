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

/* vendor/swiftmailer/swiftmailer/tests/unit/Swift/Mime/Headers/IdentificationHeaderTest.php */
class __TwigTemplate_91edf5b18214a063d66de58e9fa3528a906884004d196ead88ea75018c4a1ca8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Mime/Headers/IdentificationHeaderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Mime/Headers/IdentificationHeaderTest.php"));

        // line 1
        echo "<?php

use Egulias\\EmailValidator\\EmailValidator;

class Swift_Mime_Headers_IdentificationHeaderTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testTypeIsIdHeader()
    {
        \$header = \$this->getHeader('Message-ID');
        \$this->assertEquals(Swift_Mime_Header::TYPE_ID, \$header->getFieldType());
    }

    public function testValueMatchesMsgIdSpec()
    {
        /* -- RFC 2822, 3.6.4.
     message-id      =       \"Message-ID:\" msg-id CRLF

     in-reply-to     =       \"In-Reply-To:\" 1*msg-id CRLF

     references      =       \"References:\" 1*msg-id CRLF

     msg-id          =       [CFWS] \"<\" id-left \"@\" id-right \">\" [CFWS]

     id-left         =       dot-atom-text / no-fold-quote / obs-id-left

     id-right        =       dot-atom-text / no-fold-literal / obs-id-right

     no-fold-quote   =       DQUOTE *(qtext / quoted-pair) DQUOTE

     no-fold-literal =       \"[\" *(dtext / quoted-pair) \"]\"
     */

        \$header = \$this->getHeader('Message-ID');
        \$header->setId('id-left@id-right');
        \$this->assertEquals('<id-left@id-right>', \$header->getFieldBody());
    }

    public function testIdCanBeRetrievedVerbatim()
    {
        \$header = \$this->getHeader('Message-ID');
        \$header->setId('id-left@id-right');
        \$this->assertEquals('id-left@id-right', \$header->getId());
    }

    public function testMultipleIdsCanBeSet()
    {
        \$header = \$this->getHeader('References');
        \$header->setIds(['a@b', 'x@y']);
        \$this->assertEquals(['a@b', 'x@y'], \$header->getIds());
    }

    public function testSettingMultipleIdsProducesAListValue()
    {
        /* -- RFC 2822, 3.6.4.
     The \"References:\" and \"In-Reply-To:\" field each contain one or more
     unique message identifiers, optionally separated by CFWS.

     .. SNIP ..

     in-reply-to     =       \"In-Reply-To:\" 1*msg-id CRLF

     references      =       \"References:\" 1*msg-id CRLF
     */

        \$header = \$this->getHeader('References');
        \$header->setIds(['a@b', 'x@y']);
        \$this->assertEquals('<a@b> <x@y>', \$header->getFieldBody());
    }

    public function testIdLeftCanBeQuoted()
    {
        /* -- RFC 2822, 3.6.4.
     id-left         =       dot-atom-text / no-fold-quote / obs-id-left
     */

        \$header = \$this->getHeader('References');
        \$header->setId('\"ab\"@c');
        \$this->assertEquals('\"ab\"@c', \$header->getId());
        \$this->assertEquals('<\"ab\"@c>', \$header->getFieldBody());
    }

    public function testIdLeftCanContainAnglesAsQuotedPairs()
    {
        /* -- RFC 2822, 3.6.4.
     no-fold-quote   =       DQUOTE *(qtext / quoted-pair) DQUOTE
     */

        \$header = \$this->getHeader('References');
        \$header->setId('\"a\\\\<\\\\>b\"@c');
        \$this->assertEquals('\"a\\\\<\\\\>b\"@c', \$header->getId());
        \$this->assertEquals('<\"a\\\\<\\\\>b\"@c>', \$header->getFieldBody());
    }

    public function testIdLeftCanBeDotAtom()
    {
        \$header = \$this->getHeader('References');
        \$header->setId('a.b+&%\$.c@d');
        \$this->assertEquals('a.b+&%\$.c@d', \$header->getId());
        \$this->assertEquals('<a.b+&%\$.c@d>', \$header->getFieldBody());
    }

    /**
     * @expectedException \\Exception
     * @expectedMessageException \"a b c\" is not valid id-left
     */
    public function testInvalidIdLeftThrowsException()
    {
        \$header = \$this->getHeader('References');
        \$header->setId('a b c@d');
    }

    public function testIdRightCanBeDotAtom()
    {
        /* -- RFC 2822, 3.6.4.
     id-right        =       dot-atom-text / no-fold-literal / obs-id-right
     */

        \$header = \$this->getHeader('References');
        \$header->setId('a@b.c+&%\$.d');
        \$this->assertEquals('a@b.c+&%\$.d', \$header->getId());
        \$this->assertEquals('<a@b.c+&%\$.d>', \$header->getFieldBody());
    }

    public function testIdRightCanBeLiteral()
    {
        /* -- RFC 2822, 3.6.4.
     no-fold-literal =       \"[\" *(dtext / quoted-pair) \"]\"
     */

        \$header = \$this->getHeader('References');
        \$header->setId('a@[1.2.3.4]');
        \$this->assertEquals('a@[1.2.3.4]', \$header->getId());
        \$this->assertEquals('<a@[1.2.3.4]>', \$header->getFieldBody());
    }

    public function testIdRigthIsIdnEncoded()
    {
        \$header = \$this->getHeader('References');
        \$header->setId('a@ä');
        \$this->assertEquals('a@ä', \$header->getId());
        \$this->assertEquals('<a@xn--4ca>', \$header->getFieldBody());
    }

    /**
     * @expectedException \\Exception
     * @expectedMessageException \"b c d\" is not valid id-right
     */
    public function testInvalidIdRightThrowsException()
    {
        \$header = \$this->getHeader('References');
        \$header->setId('a@b c d');
    }

    /**
     * @expectedException \\Exception
     * @expectedMessageException \"abc\" is does not contain @
     */
    public function testMissingAtSignThrowsException()
    {
        /* -- RFC 2822, 3.6.4.
     msg-id          =       [CFWS] \"<\" id-left \"@\" id-right \">\" [CFWS]
     */
        \$header = \$this->getHeader('References');
        \$header->setId('abc');
    }

    public function testSetBodyModel()
    {
        \$header = \$this->getHeader('Message-ID');
        \$header->setFieldBodyModel('a@b');
        \$this->assertEquals(['a@b'], \$header->getIds());
    }

    public function testGetBodyModel()
    {
        \$header = \$this->getHeader('Message-ID');
        \$header->setId('a@b');
        \$this->assertEquals(['a@b'], \$header->getFieldBodyModel());
    }

    public function testStringValue()
    {
        \$header = \$this->getHeader('References');
        \$header->setIds(['a@b', 'x@y']);
        \$this->assertEquals('References: <a@b> <x@y>'.\"\\r\\n\", \$header->toString());
    }

    private function getHeader(\$name)
    {
        return new Swift_Mime_Headers_IdentificationHeader(\$name, new EmailValidator(), new Swift_AddressEncoder_IdnAddressEncoder());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Mime/Headers/IdentificationHeaderTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

use Egulias\\EmailValidator\\EmailValidator;

class Swift_Mime_Headers_IdentificationHeaderTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testTypeIsIdHeader()
    {
        \$header = \$this->getHeader('Message-ID');
        \$this->assertEquals(Swift_Mime_Header::TYPE_ID, \$header->getFieldType());
    }

    public function testValueMatchesMsgIdSpec()
    {
        /* -- RFC 2822, 3.6.4.
     message-id      =       \"Message-ID:\" msg-id CRLF

     in-reply-to     =       \"In-Reply-To:\" 1*msg-id CRLF

     references      =       \"References:\" 1*msg-id CRLF

     msg-id          =       [CFWS] \"<\" id-left \"@\" id-right \">\" [CFWS]

     id-left         =       dot-atom-text / no-fold-quote / obs-id-left

     id-right        =       dot-atom-text / no-fold-literal / obs-id-right

     no-fold-quote   =       DQUOTE *(qtext / quoted-pair) DQUOTE

     no-fold-literal =       \"[\" *(dtext / quoted-pair) \"]\"
     */

        \$header = \$this->getHeader('Message-ID');
        \$header->setId('id-left@id-right');
        \$this->assertEquals('<id-left@id-right>', \$header->getFieldBody());
    }

    public function testIdCanBeRetrievedVerbatim()
    {
        \$header = \$this->getHeader('Message-ID');
        \$header->setId('id-left@id-right');
        \$this->assertEquals('id-left@id-right', \$header->getId());
    }

    public function testMultipleIdsCanBeSet()
    {
        \$header = \$this->getHeader('References');
        \$header->setIds(['a@b', 'x@y']);
        \$this->assertEquals(['a@b', 'x@y'], \$header->getIds());
    }

    public function testSettingMultipleIdsProducesAListValue()
    {
        /* -- RFC 2822, 3.6.4.
     The \"References:\" and \"In-Reply-To:\" field each contain one or more
     unique message identifiers, optionally separated by CFWS.

     .. SNIP ..

     in-reply-to     =       \"In-Reply-To:\" 1*msg-id CRLF

     references      =       \"References:\" 1*msg-id CRLF
     */

        \$header = \$this->getHeader('References');
        \$header->setIds(['a@b', 'x@y']);
        \$this->assertEquals('<a@b> <x@y>', \$header->getFieldBody());
    }

    public function testIdLeftCanBeQuoted()
    {
        /* -- RFC 2822, 3.6.4.
     id-left         =       dot-atom-text / no-fold-quote / obs-id-left
     */

        \$header = \$this->getHeader('References');
        \$header->setId('\"ab\"@c');
        \$this->assertEquals('\"ab\"@c', \$header->getId());
        \$this->assertEquals('<\"ab\"@c>', \$header->getFieldBody());
    }

    public function testIdLeftCanContainAnglesAsQuotedPairs()
    {
        /* -- RFC 2822, 3.6.4.
     no-fold-quote   =       DQUOTE *(qtext / quoted-pair) DQUOTE
     */

        \$header = \$this->getHeader('References');
        \$header->setId('\"a\\\\<\\\\>b\"@c');
        \$this->assertEquals('\"a\\\\<\\\\>b\"@c', \$header->getId());
        \$this->assertEquals('<\"a\\\\<\\\\>b\"@c>', \$header->getFieldBody());
    }

    public function testIdLeftCanBeDotAtom()
    {
        \$header = \$this->getHeader('References');
        \$header->setId('a.b+&%\$.c@d');
        \$this->assertEquals('a.b+&%\$.c@d', \$header->getId());
        \$this->assertEquals('<a.b+&%\$.c@d>', \$header->getFieldBody());
    }

    /**
     * @expectedException \\Exception
     * @expectedMessageException \"a b c\" is not valid id-left
     */
    public function testInvalidIdLeftThrowsException()
    {
        \$header = \$this->getHeader('References');
        \$header->setId('a b c@d');
    }

    public function testIdRightCanBeDotAtom()
    {
        /* -- RFC 2822, 3.6.4.
     id-right        =       dot-atom-text / no-fold-literal / obs-id-right
     */

        \$header = \$this->getHeader('References');
        \$header->setId('a@b.c+&%\$.d');
        \$this->assertEquals('a@b.c+&%\$.d', \$header->getId());
        \$this->assertEquals('<a@b.c+&%\$.d>', \$header->getFieldBody());
    }

    public function testIdRightCanBeLiteral()
    {
        /* -- RFC 2822, 3.6.4.
     no-fold-literal =       \"[\" *(dtext / quoted-pair) \"]\"
     */

        \$header = \$this->getHeader('References');
        \$header->setId('a@[1.2.3.4]');
        \$this->assertEquals('a@[1.2.3.4]', \$header->getId());
        \$this->assertEquals('<a@[1.2.3.4]>', \$header->getFieldBody());
    }

    public function testIdRigthIsIdnEncoded()
    {
        \$header = \$this->getHeader('References');
        \$header->setId('a@ä');
        \$this->assertEquals('a@ä', \$header->getId());
        \$this->assertEquals('<a@xn--4ca>', \$header->getFieldBody());
    }

    /**
     * @expectedException \\Exception
     * @expectedMessageException \"b c d\" is not valid id-right
     */
    public function testInvalidIdRightThrowsException()
    {
        \$header = \$this->getHeader('References');
        \$header->setId('a@b c d');
    }

    /**
     * @expectedException \\Exception
     * @expectedMessageException \"abc\" is does not contain @
     */
    public function testMissingAtSignThrowsException()
    {
        /* -- RFC 2822, 3.6.4.
     msg-id          =       [CFWS] \"<\" id-left \"@\" id-right \">\" [CFWS]
     */
        \$header = \$this->getHeader('References');
        \$header->setId('abc');
    }

    public function testSetBodyModel()
    {
        \$header = \$this->getHeader('Message-ID');
        \$header->setFieldBodyModel('a@b');
        \$this->assertEquals(['a@b'], \$header->getIds());
    }

    public function testGetBodyModel()
    {
        \$header = \$this->getHeader('Message-ID');
        \$header->setId('a@b');
        \$this->assertEquals(['a@b'], \$header->getFieldBodyModel());
    }

    public function testStringValue()
    {
        \$header = \$this->getHeader('References');
        \$header->setIds(['a@b', 'x@y']);
        \$this->assertEquals('References: <a@b> <x@y>'.\"\\r\\n\", \$header->toString());
    }

    private function getHeader(\$name)
    {
        return new Swift_Mime_Headers_IdentificationHeader(\$name, new EmailValidator(), new Swift_AddressEncoder_IdnAddressEncoder());
    }
}
", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Mime/Headers/IdentificationHeaderTest.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/unit/Swift/Mime/Headers/IdentificationHeaderTest.php");
    }
}
