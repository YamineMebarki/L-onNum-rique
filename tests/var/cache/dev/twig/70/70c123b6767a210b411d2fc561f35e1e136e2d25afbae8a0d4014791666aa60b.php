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

/* vendor/swiftmailer/swiftmailer/tests/unit/Swift/CharacterReader/UsAsciiReaderTest.php */
class __TwigTemplate_408fc40ee1788c2a0c4d7f19dfadbcd72603a1e90729befd5624d0f5f3be09a7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/CharacterReader/UsAsciiReaderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/CharacterReader/UsAsciiReaderTest.php"));

        // line 1
        echo "<?php

class Swift_CharacterReader_UsAsciiReaderTest extends \\PHPUnit\\Framework\\TestCase
{
    /*

    for (\$c = '', \$size = 1; false !== \$bytes = \$os->read(\$size); ) {
        \$c .= \$bytes;
        \$size = \$v->validateCharacter(\$c);
        if (-1 == \$size) {
            throw new Exception( ... invalid char .. );
        } elseif (0 == \$size) {
            return \$c; //next character in \$os
        }
    }

    */

    private \$reader;

    protected function setUp()
    {
        \$this->reader = new Swift_CharacterReader_UsAsciiReader();
    }

    public function testAllValidAsciiCharactersReturnZero()
    {
        for (\$ordinal = 0x00; \$ordinal <= 0x7F; ++\$ordinal) {
            \$this->assertSame(
                0, \$this->reader->validateByteSequence([\$ordinal], 1)
                );
        }
    }

    public function testMultipleBytesAreInvalid()
    {
        for (\$ordinal = 0x00; \$ordinal <= 0x7F; \$ordinal += 2) {
            \$this->assertSame(
                -1, \$this->reader->validateByteSequence([\$ordinal, \$ordinal + 1], 2)
                );
        }
    }

    public function testBytesAboveAsciiRangeAreInvalid()
    {
        for (\$ordinal = 0x80; \$ordinal <= 0xFF; ++\$ordinal) {
            \$this->assertSame(
                -1, \$this->reader->validateByteSequence([\$ordinal], 1)
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
        return "vendor/swiftmailer/swiftmailer/tests/unit/Swift/CharacterReader/UsAsciiReaderTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

class Swift_CharacterReader_UsAsciiReaderTest extends \\PHPUnit\\Framework\\TestCase
{
    /*

    for (\$c = '', \$size = 1; false !== \$bytes = \$os->read(\$size); ) {
        \$c .= \$bytes;
        \$size = \$v->validateCharacter(\$c);
        if (-1 == \$size) {
            throw new Exception( ... invalid char .. );
        } elseif (0 == \$size) {
            return \$c; //next character in \$os
        }
    }

    */

    private \$reader;

    protected function setUp()
    {
        \$this->reader = new Swift_CharacterReader_UsAsciiReader();
    }

    public function testAllValidAsciiCharactersReturnZero()
    {
        for (\$ordinal = 0x00; \$ordinal <= 0x7F; ++\$ordinal) {
            \$this->assertSame(
                0, \$this->reader->validateByteSequence([\$ordinal], 1)
                );
        }
    }

    public function testMultipleBytesAreInvalid()
    {
        for (\$ordinal = 0x00; \$ordinal <= 0x7F; \$ordinal += 2) {
            \$this->assertSame(
                -1, \$this->reader->validateByteSequence([\$ordinal, \$ordinal + 1], 2)
                );
        }
    }

    public function testBytesAboveAsciiRangeAreInvalid()
    {
        for (\$ordinal = 0x80; \$ordinal <= 0xFF; ++\$ordinal) {
            \$this->assertSame(
                -1, \$this->reader->validateByteSequence([\$ordinal], 1)
                );
        }
    }
}
", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/CharacterReader/UsAsciiReaderTest.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/unit/Swift/CharacterReader/UsAsciiReaderTest.php");
    }
}
