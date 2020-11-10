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

/* vendor/swiftmailer/swiftmailer/tests/unit/Swift/CharacterReader/Utf8ReaderTest.php */
class __TwigTemplate_0b353ff85d4173b77e190bb8eb3da20ad8478d7e21bc9c9b84c51df8a5c01211 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/CharacterReader/Utf8ReaderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/CharacterReader/Utf8ReaderTest.php"));

        // line 1
        echo "<?php

class Swift_CharacterReader_Utf8ReaderTest extends \\PHPUnit\\Framework\\TestCase
{
    private \$reader;

    protected function setUp()
    {
        \$this->reader = new Swift_CharacterReader_Utf8Reader();
    }

    public function testLeading7BitOctetCausesReturnZero()
    {
        for (\$ordinal = 0x00; \$ordinal <= 0x7F; ++\$ordinal) {
            \$this->assertSame(
                0, \$this->reader->validateByteSequence([\$ordinal], 1)
                );
        }
    }

    public function testLeadingByteOf2OctetCharCausesReturn1()
    {
        for (\$octet = 0xC0; \$octet <= 0xDF; ++\$octet) {
            \$this->assertSame(
                1, \$this->reader->validateByteSequence([\$octet], 1)
                );
        }
    }

    public function testLeadingByteOf3OctetCharCausesReturn2()
    {
        for (\$octet = 0xE0; \$octet <= 0xEF; ++\$octet) {
            \$this->assertSame(
                2, \$this->reader->validateByteSequence([\$octet], 1)
                );
        }
    }

    public function testLeadingByteOf4OctetCharCausesReturn3()
    {
        for (\$octet = 0xF0; \$octet <= 0xF7; ++\$octet) {
            \$this->assertSame(
                3, \$this->reader->validateByteSequence([\$octet], 1)
                );
        }
    }

    public function testLeadingByteOf5OctetCharCausesReturn4()
    {
        for (\$octet = 0xF8; \$octet <= 0xFB; ++\$octet) {
            \$this->assertSame(
                4, \$this->reader->validateByteSequence([\$octet], 1)
                );
        }
    }

    public function testLeadingByteOf6OctetCharCausesReturn5()
    {
        for (\$octet = 0xFC; \$octet <= 0xFD; ++\$octet) {
            \$this->assertSame(
                5, \$this->reader->validateByteSequence([\$octet], 1)
                );
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/unit/Swift/CharacterReader/Utf8ReaderTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

class Swift_CharacterReader_Utf8ReaderTest extends \\PHPUnit\\Framework\\TestCase
{
    private \$reader;

    protected function setUp()
    {
        \$this->reader = new Swift_CharacterReader_Utf8Reader();
    }

    public function testLeading7BitOctetCausesReturnZero()
    {
        for (\$ordinal = 0x00; \$ordinal <= 0x7F; ++\$ordinal) {
            \$this->assertSame(
                0, \$this->reader->validateByteSequence([\$ordinal], 1)
                );
        }
    }

    public function testLeadingByteOf2OctetCharCausesReturn1()
    {
        for (\$octet = 0xC0; \$octet <= 0xDF; ++\$octet) {
            \$this->assertSame(
                1, \$this->reader->validateByteSequence([\$octet], 1)
                );
        }
    }

    public function testLeadingByteOf3OctetCharCausesReturn2()
    {
        for (\$octet = 0xE0; \$octet <= 0xEF; ++\$octet) {
            \$this->assertSame(
                2, \$this->reader->validateByteSequence([\$octet], 1)
                );
        }
    }

    public function testLeadingByteOf4OctetCharCausesReturn3()
    {
        for (\$octet = 0xF0; \$octet <= 0xF7; ++\$octet) {
            \$this->assertSame(
                3, \$this->reader->validateByteSequence([\$octet], 1)
                );
        }
    }

    public function testLeadingByteOf5OctetCharCausesReturn4()
    {
        for (\$octet = 0xF8; \$octet <= 0xFB; ++\$octet) {
            \$this->assertSame(
                4, \$this->reader->validateByteSequence([\$octet], 1)
                );
        }
    }

    public function testLeadingByteOf6OctetCharCausesReturn5()
    {
        for (\$octet = 0xFC; \$octet <= 0xFD; ++\$octet) {
            \$this->assertSame(
                5, \$this->reader->validateByteSequence([\$octet], 1)
                );
        }
    }
}
", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/CharacterReader/Utf8ReaderTest.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/unit/Swift/CharacterReader/Utf8ReaderTest.php");
    }
}
