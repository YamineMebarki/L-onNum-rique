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

/* vendor/swiftmailer/swiftmailer/tests/unit/Swift/CharacterReader/GenericFixedWidthReaderTest.php */
class __TwigTemplate_8cc95b3f57c2a4e9c8028f0b9245d1d993ed570813dd34fce59b293bea7b072c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/CharacterReader/GenericFixedWidthReaderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/CharacterReader/GenericFixedWidthReaderTest.php"));

        // line 1
        echo "<?php

class Swift_CharacterReader_GenericFixedWidthReaderTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testInitialByteSizeMatchesWidth()
    {
        \$reader = new Swift_CharacterReader_GenericFixedWidthReader(1);
        \$this->assertSame(1, \$reader->getInitialByteSize());

        \$reader = new Swift_CharacterReader_GenericFixedWidthReader(4);
        \$this->assertSame(4, \$reader->getInitialByteSize());
    }

    public function testValidationValueIsBasedOnOctetCount()
    {
        \$reader = new Swift_CharacterReader_GenericFixedWidthReader(4);

        \$this->assertSame(
            1, \$reader->validateByteSequence([0x01, 0x02, 0x03], 3)
            ); //3 octets

        \$this->assertSame(
            2, \$reader->validateByteSequence([0x01, 0x0A], 2)
            ); //2 octets

        \$this->assertSame(
            3, \$reader->validateByteSequence([0xFE], 1)
            ); //1 octet

        \$this->assertSame(
            0, \$reader->validateByteSequence([0xFE, 0x03, 0x67, 0x9A], 4)
            ); //All 4 octets
    }

    public function testValidationFailsIfTooManyOctets()
    {
        \$reader = new Swift_CharacterReader_GenericFixedWidthReader(6);

        \$this->assertSame(-1, \$reader->validateByteSequence(
            [0xFE, 0x03, 0x67, 0x9A, 0x10, 0x09, 0x85], 7
            )); //7 octets
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/unit/Swift/CharacterReader/GenericFixedWidthReaderTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

class Swift_CharacterReader_GenericFixedWidthReaderTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testInitialByteSizeMatchesWidth()
    {
        \$reader = new Swift_CharacterReader_GenericFixedWidthReader(1);
        \$this->assertSame(1, \$reader->getInitialByteSize());

        \$reader = new Swift_CharacterReader_GenericFixedWidthReader(4);
        \$this->assertSame(4, \$reader->getInitialByteSize());
    }

    public function testValidationValueIsBasedOnOctetCount()
    {
        \$reader = new Swift_CharacterReader_GenericFixedWidthReader(4);

        \$this->assertSame(
            1, \$reader->validateByteSequence([0x01, 0x02, 0x03], 3)
            ); //3 octets

        \$this->assertSame(
            2, \$reader->validateByteSequence([0x01, 0x0A], 2)
            ); //2 octets

        \$this->assertSame(
            3, \$reader->validateByteSequence([0xFE], 1)
            ); //1 octet

        \$this->assertSame(
            0, \$reader->validateByteSequence([0xFE, 0x03, 0x67, 0x9A], 4)
            ); //All 4 octets
    }

    public function testValidationFailsIfTooManyOctets()
    {
        \$reader = new Swift_CharacterReader_GenericFixedWidthReader(6);

        \$this->assertSame(-1, \$reader->validateByteSequence(
            [0xFE, 0x03, 0x67, 0x9A, 0x10, 0x09, 0x85], 7
            )); //7 octets
    }
}
", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/CharacterReader/GenericFixedWidthReaderTest.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/unit/Swift/CharacterReader/GenericFixedWidthReaderTest.php");
    }
}
