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

/* vendor/swiftmailer/swiftmailer/tests/unit/Swift/Encoder/Rfc2231EncoderTest.php */
class __TwigTemplate_bc415dcce21ea489921f3b275f0704ec6ea834ffafa1e434006c993765aafd12 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Encoder/Rfc2231EncoderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Encoder/Rfc2231EncoderTest.php"));

        // line 1
        echo "<?php

class Swift_Encoder_Rfc2231EncoderTest extends \\SwiftMailerTestCase
{
    private \$rfc2045Token = '/^[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2E\\x30-\\x39\\x41-\\x5A\\x5E-\\x7E]+\$/D';

    /* --
    This algorithm is described in RFC 2231, but is barely touched upon except
    for mentioning bytes can be represented as their octet values (e.g. %20 for
    the SPACE character).

    The tests here focus on how to use that representation to always generate text
    which matches RFC 2045's definition of \"token\".
    */

    public function testEncodingAsciiCharactersProducesValidToken()
    {
        \$charStream = \$this->getMockery('Swift_CharacterStream');

        \$string = '';
        foreach (range(0x00, 0x7F) as \$octet) {
            \$char = pack('C', \$octet);
            \$string .= \$char;
            \$charStream->shouldReceive('read')
                       ->once()
                       ->andReturn(\$char);
        }

        \$charStream->shouldReceive('flushContents')
                    ->once();
        \$charStream->shouldReceive('importString')
                    ->once()
                    ->with(\$string);
        \$charStream->shouldReceive('read')
                    ->atLeast()->times(1)
                    ->andReturn(false);

        \$encoder = new Swift_Encoder_Rfc2231Encoder(\$charStream);
        \$encoded = \$encoder->encodeString(\$string);

        foreach (explode(\"\\r\\n\", \$encoded) as \$line) {
            \$this->assertRegExp(\$this->rfc2045Token, \$line,
                '%s: Encoder should always return a valid RFC 2045 token.');
        }
    }

    public function testEncodingNonAsciiCharactersProducesValidToken()
    {
        \$charStream = \$this->getMockery('Swift_CharacterStream');

        \$string = '';
        foreach (range(0x80, 0xFF) as \$octet) {
            \$char = pack('C', \$octet);
            \$string .= \$char;
            \$charStream->shouldReceive('read')
                       ->once()
                       ->andReturn(\$char);
        }
        \$charStream->shouldReceive('flushContents')
                    ->once();
        \$charStream->shouldReceive('importString')
                    ->once()
                    ->with(\$string);
        \$charStream->shouldReceive('read')
                    ->atLeast()->times(1)
                    ->andReturn(false);
        \$encoder = new Swift_Encoder_Rfc2231Encoder(\$charStream);

        \$encoded = \$encoder->encodeString(\$string);

        foreach (explode(\"\\r\\n\", \$encoded) as \$line) {
            \$this->assertRegExp(\$this->rfc2045Token, \$line,
                '%s: Encoder should always return a valid RFC 2045 token.');
        }
    }

    public function testMaximumLineLengthCanBeSet()
    {
        \$charStream = \$this->getMockery('Swift_CharacterStream');

        \$string = '';
        for (\$x = 0; \$x < 200; ++\$x) {
            \$char = 'a';
            \$string .= \$char;
            \$charStream->shouldReceive('read')
                       ->once()
                       ->andReturn(\$char);
        }
        \$charStream->shouldReceive('flushContents')
                    ->once();
        \$charStream->shouldReceive('importString')
                    ->once()
                    ->with(\$string);
        \$charStream->shouldReceive('read')
                    ->atLeast()->times(1)
                    ->andReturn(false);
        \$encoder = new Swift_Encoder_Rfc2231Encoder(\$charStream);

        \$encoded = \$encoder->encodeString(\$string, 0, 75);

        \$this->assertEquals(
            str_repeat('a', 75).\"\\r\\n\".
            str_repeat('a', 75).\"\\r\\n\".
            str_repeat('a', 50),
            \$encoded,
            '%s: Lines should be wrapped at each 75 characters'
            );
    }

    public function testFirstLineCanHaveShorterLength()
    {
        \$charStream = \$this->getMockery('Swift_CharacterStream');

        \$string = '';
        for (\$x = 0; \$x < 200; ++\$x) {
            \$char = 'a';
            \$string .= \$char;
            \$charStream->shouldReceive('read')
                       ->once()
                       ->andReturn(\$char);
        }
        \$charStream->shouldReceive('flushContents')
                    ->once();
        \$charStream->shouldReceive('importString')
                    ->once()
                    ->with(\$string);
        \$charStream->shouldReceive('read')
                    ->atLeast()->times(1)
                    ->andReturn(false);
        \$encoder = new Swift_Encoder_Rfc2231Encoder(\$charStream);
        \$encoded = \$encoder->encodeString(\$string, 25, 75);

        \$this->assertEquals(
            str_repeat('a', 50).\"\\r\\n\".
            str_repeat('a', 75).\"\\r\\n\".
            str_repeat('a', 75),
            \$encoded,
            '%s: First line should be 25 bytes shorter than the others.'
            );
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Encoder/Rfc2231EncoderTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

class Swift_Encoder_Rfc2231EncoderTest extends \\SwiftMailerTestCase
{
    private \$rfc2045Token = '/^[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2E\\x30-\\x39\\x41-\\x5A\\x5E-\\x7E]+\$/D';

    /* --
    This algorithm is described in RFC 2231, but is barely touched upon except
    for mentioning bytes can be represented as their octet values (e.g. %20 for
    the SPACE character).

    The tests here focus on how to use that representation to always generate text
    which matches RFC 2045's definition of \"token\".
    */

    public function testEncodingAsciiCharactersProducesValidToken()
    {
        \$charStream = \$this->getMockery('Swift_CharacterStream');

        \$string = '';
        foreach (range(0x00, 0x7F) as \$octet) {
            \$char = pack('C', \$octet);
            \$string .= \$char;
            \$charStream->shouldReceive('read')
                       ->once()
                       ->andReturn(\$char);
        }

        \$charStream->shouldReceive('flushContents')
                    ->once();
        \$charStream->shouldReceive('importString')
                    ->once()
                    ->with(\$string);
        \$charStream->shouldReceive('read')
                    ->atLeast()->times(1)
                    ->andReturn(false);

        \$encoder = new Swift_Encoder_Rfc2231Encoder(\$charStream);
        \$encoded = \$encoder->encodeString(\$string);

        foreach (explode(\"\\r\\n\", \$encoded) as \$line) {
            \$this->assertRegExp(\$this->rfc2045Token, \$line,
                '%s: Encoder should always return a valid RFC 2045 token.');
        }
    }

    public function testEncodingNonAsciiCharactersProducesValidToken()
    {
        \$charStream = \$this->getMockery('Swift_CharacterStream');

        \$string = '';
        foreach (range(0x80, 0xFF) as \$octet) {
            \$char = pack('C', \$octet);
            \$string .= \$char;
            \$charStream->shouldReceive('read')
                       ->once()
                       ->andReturn(\$char);
        }
        \$charStream->shouldReceive('flushContents')
                    ->once();
        \$charStream->shouldReceive('importString')
                    ->once()
                    ->with(\$string);
        \$charStream->shouldReceive('read')
                    ->atLeast()->times(1)
                    ->andReturn(false);
        \$encoder = new Swift_Encoder_Rfc2231Encoder(\$charStream);

        \$encoded = \$encoder->encodeString(\$string);

        foreach (explode(\"\\r\\n\", \$encoded) as \$line) {
            \$this->assertRegExp(\$this->rfc2045Token, \$line,
                '%s: Encoder should always return a valid RFC 2045 token.');
        }
    }

    public function testMaximumLineLengthCanBeSet()
    {
        \$charStream = \$this->getMockery('Swift_CharacterStream');

        \$string = '';
        for (\$x = 0; \$x < 200; ++\$x) {
            \$char = 'a';
            \$string .= \$char;
            \$charStream->shouldReceive('read')
                       ->once()
                       ->andReturn(\$char);
        }
        \$charStream->shouldReceive('flushContents')
                    ->once();
        \$charStream->shouldReceive('importString')
                    ->once()
                    ->with(\$string);
        \$charStream->shouldReceive('read')
                    ->atLeast()->times(1)
                    ->andReturn(false);
        \$encoder = new Swift_Encoder_Rfc2231Encoder(\$charStream);

        \$encoded = \$encoder->encodeString(\$string, 0, 75);

        \$this->assertEquals(
            str_repeat('a', 75).\"\\r\\n\".
            str_repeat('a', 75).\"\\r\\n\".
            str_repeat('a', 50),
            \$encoded,
            '%s: Lines should be wrapped at each 75 characters'
            );
    }

    public function testFirstLineCanHaveShorterLength()
    {
        \$charStream = \$this->getMockery('Swift_CharacterStream');

        \$string = '';
        for (\$x = 0; \$x < 200; ++\$x) {
            \$char = 'a';
            \$string .= \$char;
            \$charStream->shouldReceive('read')
                       ->once()
                       ->andReturn(\$char);
        }
        \$charStream->shouldReceive('flushContents')
                    ->once();
        \$charStream->shouldReceive('importString')
                    ->once()
                    ->with(\$string);
        \$charStream->shouldReceive('read')
                    ->atLeast()->times(1)
                    ->andReturn(false);
        \$encoder = new Swift_Encoder_Rfc2231Encoder(\$charStream);
        \$encoded = \$encoder->encodeString(\$string, 25, 75);

        \$this->assertEquals(
            str_repeat('a', 50).\"\\r\\n\".
            str_repeat('a', 75).\"\\r\\n\".
            str_repeat('a', 75),
            \$encoded,
            '%s: First line should be 25 bytes shorter than the others.'
            );
    }
}
", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Encoder/Rfc2231EncoderTest.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/unit/Swift/Encoder/Rfc2231EncoderTest.php");
    }
}
