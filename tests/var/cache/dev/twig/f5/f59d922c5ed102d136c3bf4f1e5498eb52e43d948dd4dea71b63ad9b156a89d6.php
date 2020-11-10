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

/* vendor/swiftmailer/swiftmailer/tests/unit/Swift/Mime/Headers/PathHeaderTest.php */
class __TwigTemplate_b35250f29cbd2cbdb67e9e348cd4430b3a44c18fbd781ca180b130ef6741d40b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Mime/Headers/PathHeaderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Mime/Headers/PathHeaderTest.php"));

        // line 1
        echo "<?php

use Egulias\\EmailValidator\\EmailValidator;

class Swift_Mime_Headers_PathHeaderTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testTypeIsPathHeader()
    {
        \$header = \$this->getHeader('Return-Path');
        \$this->assertEquals(Swift_Mime_Header::TYPE_PATH, \$header->getFieldType());
    }

    public function testSingleAddressCanBeSetAndFetched()
    {
        \$header = \$this->getHeader('Return-Path');
        \$header->setAddress('chris@swiftmailer.org');
        \$this->assertEquals('chris@swiftmailer.org', \$header->getAddress());
    }

    /**
     * @expectedException \\Exception
     */
    public function testAddressMustComplyWithRfc2822()
    {
        \$header = \$this->getHeader('Return-Path');
        \$header->setAddress('chr is@swiftmailer.org');
    }

    public function testValueIsAngleAddrWithValidAddress()
    {
        /* -- RFC 2822, 3.6.7.

            return          =       \"Return-Path:\" path CRLF

            path            =       ([CFWS] \"<\" ([CFWS] / addr-spec) \">\" [CFWS]) /
                                                            obs-path
     */

        \$header = \$this->getHeader('Return-Path');
        \$header->setAddress('chris@swiftmailer.org');
        \$this->assertEquals('<chris@swiftmailer.org>', \$header->getFieldBody());
    }

    public function testAddressIsIdnEncoded()
    {
        \$header = \$this->getHeader('Return-Path');
        \$header->setAddress('chris@swïftmailer.org');
        \$this->assertEquals('<chris@xn--swftmailer-78a.org>', \$header->getFieldBody());
    }

    /**
     * @expectedException \\Swift_AddressEncoderException
     */
    public function testAddressMustBeEncodable()
    {
        \$header = \$this->getHeader('Return-Path');
        \$header->setAddress('chrïs@swiftmailer.org');
        \$header->getFieldBody();
    }

    public function testValueIsEmptyAngleBracketsIfEmptyAddressSet()
    {
        \$header = \$this->getHeader('Return-Path');
        \$header->setAddress('');
        \$this->assertEquals('<>', \$header->getFieldBody());
    }

    public function testSetBodyModel()
    {
        \$header = \$this->getHeader('Return-Path');
        \$header->setFieldBodyModel('foo@bar.tld');
        \$this->assertEquals('foo@bar.tld', \$header->getAddress());
    }

    public function testGetBodyModel()
    {
        \$header = \$this->getHeader('Return-Path');
        \$header->setAddress('foo@bar.tld');
        \$this->assertEquals('foo@bar.tld', \$header->getFieldBodyModel());
    }

    public function testToString()
    {
        \$header = \$this->getHeader('Return-Path');
        \$header->setAddress('chris@swiftmailer.org');
        \$this->assertEquals('Return-Path: <chris@swiftmailer.org>'.\"\\r\\n\",
            \$header->toString()
            );
    }

    private function getHeader(\$name)
    {
        return new Swift_Mime_Headers_PathHeader(\$name, new EmailValidator(), new Swift_AddressEncoder_IdnAddressEncoder());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Mime/Headers/PathHeaderTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

use Egulias\\EmailValidator\\EmailValidator;

class Swift_Mime_Headers_PathHeaderTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testTypeIsPathHeader()
    {
        \$header = \$this->getHeader('Return-Path');
        \$this->assertEquals(Swift_Mime_Header::TYPE_PATH, \$header->getFieldType());
    }

    public function testSingleAddressCanBeSetAndFetched()
    {
        \$header = \$this->getHeader('Return-Path');
        \$header->setAddress('chris@swiftmailer.org');
        \$this->assertEquals('chris@swiftmailer.org', \$header->getAddress());
    }

    /**
     * @expectedException \\Exception
     */
    public function testAddressMustComplyWithRfc2822()
    {
        \$header = \$this->getHeader('Return-Path');
        \$header->setAddress('chr is@swiftmailer.org');
    }

    public function testValueIsAngleAddrWithValidAddress()
    {
        /* -- RFC 2822, 3.6.7.

            return          =       \"Return-Path:\" path CRLF

            path            =       ([CFWS] \"<\" ([CFWS] / addr-spec) \">\" [CFWS]) /
                                                            obs-path
     */

        \$header = \$this->getHeader('Return-Path');
        \$header->setAddress('chris@swiftmailer.org');
        \$this->assertEquals('<chris@swiftmailer.org>', \$header->getFieldBody());
    }

    public function testAddressIsIdnEncoded()
    {
        \$header = \$this->getHeader('Return-Path');
        \$header->setAddress('chris@swïftmailer.org');
        \$this->assertEquals('<chris@xn--swftmailer-78a.org>', \$header->getFieldBody());
    }

    /**
     * @expectedException \\Swift_AddressEncoderException
     */
    public function testAddressMustBeEncodable()
    {
        \$header = \$this->getHeader('Return-Path');
        \$header->setAddress('chrïs@swiftmailer.org');
        \$header->getFieldBody();
    }

    public function testValueIsEmptyAngleBracketsIfEmptyAddressSet()
    {
        \$header = \$this->getHeader('Return-Path');
        \$header->setAddress('');
        \$this->assertEquals('<>', \$header->getFieldBody());
    }

    public function testSetBodyModel()
    {
        \$header = \$this->getHeader('Return-Path');
        \$header->setFieldBodyModel('foo@bar.tld');
        \$this->assertEquals('foo@bar.tld', \$header->getAddress());
    }

    public function testGetBodyModel()
    {
        \$header = \$this->getHeader('Return-Path');
        \$header->setAddress('foo@bar.tld');
        \$this->assertEquals('foo@bar.tld', \$header->getFieldBodyModel());
    }

    public function testToString()
    {
        \$header = \$this->getHeader('Return-Path');
        \$header->setAddress('chris@swiftmailer.org');
        \$this->assertEquals('Return-Path: <chris@swiftmailer.org>'.\"\\r\\n\",
            \$header->toString()
            );
    }

    private function getHeader(\$name)
    {
        return new Swift_Mime_Headers_PathHeader(\$name, new EmailValidator(), new Swift_AddressEncoder_IdnAddressEncoder());
    }
}
", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Mime/Headers/PathHeaderTest.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/unit/Swift/Mime/Headers/PathHeaderTest.php");
    }
}
