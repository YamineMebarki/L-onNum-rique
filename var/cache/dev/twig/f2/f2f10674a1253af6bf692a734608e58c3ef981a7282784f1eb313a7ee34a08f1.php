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

/* vendor/swiftmailer/swiftmailer/tests/unit/Swift/Mime/SimpleHeaderFactoryTest.php */
class __TwigTemplate_e5e418ee7e7d5555c02bad41ba796fc3ac6e1428c9d6ce0c09472ec36c33cf26 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Mime/SimpleHeaderFactoryTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Mime/SimpleHeaderFactoryTest.php"));

        // line 1
        echo "<?php

use Egulias\\EmailValidator\\EmailValidator;

class Swift_Mime_SimpleHeaderFactoryTest extends \\PHPUnit\\Framework\\TestCase
{
    private \$factory;

    protected function setUp()
    {
        \$this->factory = \$this->createFactory();
    }

    public function testMailboxHeaderIsCorrectType()
    {
        \$header = \$this->factory->createMailboxHeader('X-Foo');
        \$this->assertInstanceOf('Swift_Mime_Headers_MailboxHeader', \$header);
    }

    public function testMailboxHeaderHasCorrectName()
    {
        \$header = \$this->factory->createMailboxHeader('X-Foo');
        \$this->assertEquals('X-Foo', \$header->getFieldName());
    }

    public function testMailboxHeaderHasCorrectModel()
    {
        \$header = \$this->factory->createMailboxHeader('X-Foo',
            ['foo@bar' => 'FooBar']
            );
        \$this->assertEquals(['foo@bar' => 'FooBar'], \$header->getFieldBodyModel());
    }

    public function testDateHeaderHasCorrectType()
    {
        \$header = \$this->factory->createDateHeader('X-Date');
        \$this->assertInstanceOf('Swift_Mime_Headers_DateHeader', \$header);
    }

    public function testDateHeaderHasCorrectName()
    {
        \$header = \$this->factory->createDateHeader('X-Date');
        \$this->assertEquals('X-Date', \$header->getFieldName());
    }

    public function testDateHeaderHasCorrectModel()
    {
        \$dateTime = new \\DateTimeImmutable();
        \$header = \$this->factory->createDateHeader('X-Date', \$dateTime);
        \$this->assertEquals(\$dateTime, \$header->getFieldBodyModel());
    }

    public function testTextHeaderHasCorrectType()
    {
        \$header = \$this->factory->createTextHeader('X-Foo');
        \$this->assertInstanceOf('Swift_Mime_Headers_UnstructuredHeader', \$header);
    }

    public function testTextHeaderHasCorrectName()
    {
        \$header = \$this->factory->createTextHeader('X-Foo');
        \$this->assertEquals('X-Foo', \$header->getFieldName());
    }

    public function testTextHeaderHasCorrectModel()
    {
        \$header = \$this->factory->createTextHeader('X-Foo', 'bar');
        \$this->assertEquals('bar', \$header->getFieldBodyModel());
    }

    public function testParameterizedHeaderHasCorrectType()
    {
        \$header = \$this->factory->createParameterizedHeader('X-Foo');
        \$this->assertInstanceOf('Swift_Mime_Headers_ParameterizedHeader', \$header);
    }

    public function testParameterizedHeaderHasCorrectName()
    {
        \$header = \$this->factory->createParameterizedHeader('X-Foo');
        \$this->assertEquals('X-Foo', \$header->getFieldName());
    }

    public function testParameterizedHeaderHasCorrectModel()
    {
        \$header = \$this->factory->createParameterizedHeader('X-Foo', 'bar');
        \$this->assertEquals('bar', \$header->getFieldBodyModel());
    }

    public function testParameterizedHeaderHasCorrectParams()
    {
        \$header = \$this->factory->createParameterizedHeader('X-Foo', 'bar',
            ['zip' => 'button']
            );
        \$this->assertEquals(['zip' => 'button'], \$header->getParameters());
    }

    public function testIdHeaderHasCorrectType()
    {
        \$header = \$this->factory->createIdHeader('X-ID');
        \$this->assertInstanceOf('Swift_Mime_Headers_IdentificationHeader', \$header);
    }

    public function testIdHeaderHasCorrectName()
    {
        \$header = \$this->factory->createIdHeader('X-ID');
        \$this->assertEquals('X-ID', \$header->getFieldName());
    }

    public function testIdHeaderHasCorrectModel()
    {
        \$header = \$this->factory->createIdHeader('X-ID', 'xyz@abc');
        \$this->assertEquals(['xyz@abc'], \$header->getFieldBodyModel());
    }

    public function testPathHeaderHasCorrectType()
    {
        \$header = \$this->factory->createPathHeader('X-Path');
        \$this->assertInstanceOf('Swift_Mime_Headers_PathHeader', \$header);
    }

    public function testPathHeaderHasCorrectName()
    {
        \$header = \$this->factory->createPathHeader('X-Path');
        \$this->assertEquals('X-Path', \$header->getFieldName());
    }

    public function testPathHeaderHasCorrectModel()
    {
        \$header = \$this->factory->createPathHeader('X-Path', 'foo@bar');
        \$this->assertEquals('foo@bar', \$header->getFieldBodyModel());
    }

    public function testCharsetChangeNotificationNotifiesEncoders()
    {
        \$encoder = \$this->createHeaderEncoder();
        \$encoder->expects(\$this->once())
                ->method('charsetChanged')
                ->with('utf-8');
        \$paramEncoder = \$this->createParamEncoder();
        \$paramEncoder->expects(\$this->once())
                     ->method('charsetChanged')
                     ->with('utf-8');

        \$factory = \$this->createFactory(\$encoder, \$paramEncoder);

        \$factory->charsetChanged('utf-8');
    }

    private function createFactory(\$encoder = null, \$paramEncoder = null)
    {
        return new Swift_Mime_SimpleHeaderFactory(
            \$encoder
                ? \$encoder : \$this->createHeaderEncoder(),
            \$paramEncoder
                ? \$paramEncoder : \$this->createParamEncoder(),
            new EmailValidator()
            );
    }

    private function createHeaderEncoder()
    {
        return \$this->getMockBuilder('Swift_Mime_HeaderEncoder')->getMock();
    }

    private function createParamEncoder()
    {
        return \$this->getMockBuilder('Swift_Encoder')->getMock();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Mime/SimpleHeaderFactoryTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

use Egulias\\EmailValidator\\EmailValidator;

class Swift_Mime_SimpleHeaderFactoryTest extends \\PHPUnit\\Framework\\TestCase
{
    private \$factory;

    protected function setUp()
    {
        \$this->factory = \$this->createFactory();
    }

    public function testMailboxHeaderIsCorrectType()
    {
        \$header = \$this->factory->createMailboxHeader('X-Foo');
        \$this->assertInstanceOf('Swift_Mime_Headers_MailboxHeader', \$header);
    }

    public function testMailboxHeaderHasCorrectName()
    {
        \$header = \$this->factory->createMailboxHeader('X-Foo');
        \$this->assertEquals('X-Foo', \$header->getFieldName());
    }

    public function testMailboxHeaderHasCorrectModel()
    {
        \$header = \$this->factory->createMailboxHeader('X-Foo',
            ['foo@bar' => 'FooBar']
            );
        \$this->assertEquals(['foo@bar' => 'FooBar'], \$header->getFieldBodyModel());
    }

    public function testDateHeaderHasCorrectType()
    {
        \$header = \$this->factory->createDateHeader('X-Date');
        \$this->assertInstanceOf('Swift_Mime_Headers_DateHeader', \$header);
    }

    public function testDateHeaderHasCorrectName()
    {
        \$header = \$this->factory->createDateHeader('X-Date');
        \$this->assertEquals('X-Date', \$header->getFieldName());
    }

    public function testDateHeaderHasCorrectModel()
    {
        \$dateTime = new \\DateTimeImmutable();
        \$header = \$this->factory->createDateHeader('X-Date', \$dateTime);
        \$this->assertEquals(\$dateTime, \$header->getFieldBodyModel());
    }

    public function testTextHeaderHasCorrectType()
    {
        \$header = \$this->factory->createTextHeader('X-Foo');
        \$this->assertInstanceOf('Swift_Mime_Headers_UnstructuredHeader', \$header);
    }

    public function testTextHeaderHasCorrectName()
    {
        \$header = \$this->factory->createTextHeader('X-Foo');
        \$this->assertEquals('X-Foo', \$header->getFieldName());
    }

    public function testTextHeaderHasCorrectModel()
    {
        \$header = \$this->factory->createTextHeader('X-Foo', 'bar');
        \$this->assertEquals('bar', \$header->getFieldBodyModel());
    }

    public function testParameterizedHeaderHasCorrectType()
    {
        \$header = \$this->factory->createParameterizedHeader('X-Foo');
        \$this->assertInstanceOf('Swift_Mime_Headers_ParameterizedHeader', \$header);
    }

    public function testParameterizedHeaderHasCorrectName()
    {
        \$header = \$this->factory->createParameterizedHeader('X-Foo');
        \$this->assertEquals('X-Foo', \$header->getFieldName());
    }

    public function testParameterizedHeaderHasCorrectModel()
    {
        \$header = \$this->factory->createParameterizedHeader('X-Foo', 'bar');
        \$this->assertEquals('bar', \$header->getFieldBodyModel());
    }

    public function testParameterizedHeaderHasCorrectParams()
    {
        \$header = \$this->factory->createParameterizedHeader('X-Foo', 'bar',
            ['zip' => 'button']
            );
        \$this->assertEquals(['zip' => 'button'], \$header->getParameters());
    }

    public function testIdHeaderHasCorrectType()
    {
        \$header = \$this->factory->createIdHeader('X-ID');
        \$this->assertInstanceOf('Swift_Mime_Headers_IdentificationHeader', \$header);
    }

    public function testIdHeaderHasCorrectName()
    {
        \$header = \$this->factory->createIdHeader('X-ID');
        \$this->assertEquals('X-ID', \$header->getFieldName());
    }

    public function testIdHeaderHasCorrectModel()
    {
        \$header = \$this->factory->createIdHeader('X-ID', 'xyz@abc');
        \$this->assertEquals(['xyz@abc'], \$header->getFieldBodyModel());
    }

    public function testPathHeaderHasCorrectType()
    {
        \$header = \$this->factory->createPathHeader('X-Path');
        \$this->assertInstanceOf('Swift_Mime_Headers_PathHeader', \$header);
    }

    public function testPathHeaderHasCorrectName()
    {
        \$header = \$this->factory->createPathHeader('X-Path');
        \$this->assertEquals('X-Path', \$header->getFieldName());
    }

    public function testPathHeaderHasCorrectModel()
    {
        \$header = \$this->factory->createPathHeader('X-Path', 'foo@bar');
        \$this->assertEquals('foo@bar', \$header->getFieldBodyModel());
    }

    public function testCharsetChangeNotificationNotifiesEncoders()
    {
        \$encoder = \$this->createHeaderEncoder();
        \$encoder->expects(\$this->once())
                ->method('charsetChanged')
                ->with('utf-8');
        \$paramEncoder = \$this->createParamEncoder();
        \$paramEncoder->expects(\$this->once())
                     ->method('charsetChanged')
                     ->with('utf-8');

        \$factory = \$this->createFactory(\$encoder, \$paramEncoder);

        \$factory->charsetChanged('utf-8');
    }

    private function createFactory(\$encoder = null, \$paramEncoder = null)
    {
        return new Swift_Mime_SimpleHeaderFactory(
            \$encoder
                ? \$encoder : \$this->createHeaderEncoder(),
            \$paramEncoder
                ? \$paramEncoder : \$this->createParamEncoder(),
            new EmailValidator()
            );
    }

    private function createHeaderEncoder()
    {
        return \$this->getMockBuilder('Swift_Mime_HeaderEncoder')->getMock();
    }

    private function createParamEncoder()
    {
        return \$this->getMockBuilder('Swift_Encoder')->getMock();
    }
}
", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Mime/SimpleHeaderFactoryTest.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/unit/Swift/Mime/SimpleHeaderFactoryTest.php");
    }
}
