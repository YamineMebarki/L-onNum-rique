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

/* vendor/swiftmailer/swiftmailer/tests/unit/Swift/Mime/Headers/DateHeaderTest.php */
class __TwigTemplate_1a330e42c2a3ac069be3b1604e127622ae913bd6fd27a456f3dcb2f692f0bd98 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Mime/Headers/DateHeaderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Mime/Headers/DateHeaderTest.php"));

        // line 1
        echo "<?php

class Swift_Mime_Headers_DateHeaderTest extends \\PHPUnit\\Framework\\TestCase
{
    /* --
    The following tests refer to RFC 2822, section 3.6.1 and 3.3.
    */

    public function testTypeIsDateHeader()
    {
        \$header = \$this->getHeader('Date');
        \$this->assertEquals(Swift_Mime_Header::TYPE_DATE, \$header->getFieldType());
    }

    public function testGetDateTime()
    {
        \$dateTime = new DateTimeImmutable();
        \$header = \$this->getHeader('Date');
        \$header->setDateTime(\$dateTime);
        \$this->assertSame(\$dateTime, \$header->getDateTime());
    }

    public function testDateTimeCanBeSetBySetter()
    {
        \$dateTime = new DateTimeImmutable();
        \$header = \$this->getHeader('Date');
        \$header->setDateTime(\$dateTime);
        \$this->assertSame(\$dateTime, \$header->getDateTime());
    }

    public function testDateTimeIsConvertedToImmutable()
    {
        \$dateTime = new DateTime();
        \$header = \$this->getHeader('Date');
        \$header->setDateTime(\$dateTime);
        \$this->assertInstanceOf('DateTimeImmutable', \$header->getDateTime());
        \$this->assertEquals(\$dateTime->getTimestamp(), \$header->getDateTime()->getTimestamp());
        \$this->assertEquals(\$dateTime->getTimezone(), \$header->getDateTime()->getTimezone());
    }

    public function testDateTimeIsImmutable()
    {
        \$dateTime = new DateTime('2000-01-01 12:00:00 Europe/Berlin');
        \$header = \$this->getHeader('Date');
        \$header->setDateTime(\$dateTime);

        \$dateTime->setDate(2002, 2, 2);
        \$this->assertEquals('Sat, 01 Jan 2000 12:00:00 +0100', \$header->getDateTime()->format('r'));
        \$this->assertEquals('Sat, 01 Jan 2000 12:00:00 +0100', \$header->getFieldBody());
    }

    public function testDateTimeIsConvertedToRfc2822Date()
    {
        \$dateTime = new DateTimeImmutable('2000-01-01 12:00:00 Europe/Berlin');
        \$header = \$this->getHeader('Date');
        \$header->setDateTime(\$dateTime);
        \$this->assertEquals('Sat, 01 Jan 2000 12:00:00 +0100', \$header->getFieldBody());
    }

    public function testSetBodyModel()
    {
        \$dateTime = new DateTimeImmutable();
        \$header = \$this->getHeader('Date');
        \$header->setFieldBodyModel(\$dateTime);
        \$this->assertEquals(\$dateTime->format('r'), \$header->getFieldBody());
    }

    public function testGetBodyModel()
    {
        \$dateTime = new DateTimeImmutable();
        \$header = \$this->getHeader('Date');
        \$header->setDateTime(\$dateTime);
        \$this->assertEquals(\$dateTime, \$header->getFieldBodyModel());
    }

    public function testToString()
    {
        \$dateTime = new DateTimeImmutable('2000-01-01 12:00:00 Europe/Berlin');
        \$header = \$this->getHeader('Date');
        \$header->setDateTime(\$dateTime);
        \$this->assertEquals(\"Date: Sat, 01 Jan 2000 12:00:00 +0100\\r\\n\",
            \$header->toString()
            );
    }

    private function getHeader(\$name)
    {
        return new Swift_Mime_Headers_DateHeader(\$name);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Mime/Headers/DateHeaderTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

class Swift_Mime_Headers_DateHeaderTest extends \\PHPUnit\\Framework\\TestCase
{
    /* --
    The following tests refer to RFC 2822, section 3.6.1 and 3.3.
    */

    public function testTypeIsDateHeader()
    {
        \$header = \$this->getHeader('Date');
        \$this->assertEquals(Swift_Mime_Header::TYPE_DATE, \$header->getFieldType());
    }

    public function testGetDateTime()
    {
        \$dateTime = new DateTimeImmutable();
        \$header = \$this->getHeader('Date');
        \$header->setDateTime(\$dateTime);
        \$this->assertSame(\$dateTime, \$header->getDateTime());
    }

    public function testDateTimeCanBeSetBySetter()
    {
        \$dateTime = new DateTimeImmutable();
        \$header = \$this->getHeader('Date');
        \$header->setDateTime(\$dateTime);
        \$this->assertSame(\$dateTime, \$header->getDateTime());
    }

    public function testDateTimeIsConvertedToImmutable()
    {
        \$dateTime = new DateTime();
        \$header = \$this->getHeader('Date');
        \$header->setDateTime(\$dateTime);
        \$this->assertInstanceOf('DateTimeImmutable', \$header->getDateTime());
        \$this->assertEquals(\$dateTime->getTimestamp(), \$header->getDateTime()->getTimestamp());
        \$this->assertEquals(\$dateTime->getTimezone(), \$header->getDateTime()->getTimezone());
    }

    public function testDateTimeIsImmutable()
    {
        \$dateTime = new DateTime('2000-01-01 12:00:00 Europe/Berlin');
        \$header = \$this->getHeader('Date');
        \$header->setDateTime(\$dateTime);

        \$dateTime->setDate(2002, 2, 2);
        \$this->assertEquals('Sat, 01 Jan 2000 12:00:00 +0100', \$header->getDateTime()->format('r'));
        \$this->assertEquals('Sat, 01 Jan 2000 12:00:00 +0100', \$header->getFieldBody());
    }

    public function testDateTimeIsConvertedToRfc2822Date()
    {
        \$dateTime = new DateTimeImmutable('2000-01-01 12:00:00 Europe/Berlin');
        \$header = \$this->getHeader('Date');
        \$header->setDateTime(\$dateTime);
        \$this->assertEquals('Sat, 01 Jan 2000 12:00:00 +0100', \$header->getFieldBody());
    }

    public function testSetBodyModel()
    {
        \$dateTime = new DateTimeImmutable();
        \$header = \$this->getHeader('Date');
        \$header->setFieldBodyModel(\$dateTime);
        \$this->assertEquals(\$dateTime->format('r'), \$header->getFieldBody());
    }

    public function testGetBodyModel()
    {
        \$dateTime = new DateTimeImmutable();
        \$header = \$this->getHeader('Date');
        \$header->setDateTime(\$dateTime);
        \$this->assertEquals(\$dateTime, \$header->getFieldBodyModel());
    }

    public function testToString()
    {
        \$dateTime = new DateTimeImmutable('2000-01-01 12:00:00 Europe/Berlin');
        \$header = \$this->getHeader('Date');
        \$header->setDateTime(\$dateTime);
        \$this->assertEquals(\"Date: Sat, 01 Jan 2000 12:00:00 +0100\\r\\n\",
            \$header->toString()
            );
    }

    private function getHeader(\$name)
    {
        return new Swift_Mime_Headers_DateHeader(\$name);
    }
}
", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Mime/Headers/DateHeaderTest.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/unit/Swift/Mime/Headers/DateHeaderTest.php");
    }
}
