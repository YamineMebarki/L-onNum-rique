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

/* vendor/symfony/mime/Tests/Encoder/Rfc2231EncoderTest.php */
class __TwigTemplate_7206a5ac086b451059a3577c35bea08d15186b0d85ae58e9e5a0ac7d7f42cf70 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Tests/Encoder/Rfc2231EncoderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Tests/Encoder/Rfc2231EncoderTest.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\Mime\\Tests\\Encoder;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Mime\\Encoder\\Rfc2231Encoder;

class Rfc2231EncoderTest extends TestCase
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
        \$string = '';
        foreach (range(0x00, 0x7F) as \$octet) {
            \$char = pack('C', \$octet);
            \$string .= \$char;
        }
        \$encoder = new Rfc2231Encoder();
        \$encoded = \$encoder->encodeString(\$string);

        foreach (explode(\"\\r\\n\", \$encoded) as \$line) {
            \$this->assertRegExp(\$this->rfc2045Token, \$line, 'Encoder should always return a valid RFC 2045 token.');
        }
    }

    public function testEncodingNonAsciiCharactersProducesValidToken()
    {
        \$string = '';
        foreach (range(0x80, 0xFF) as \$octet) {
            \$char = pack('C', \$octet);
            \$string .= \$char;
        }
        \$encoder = new Rfc2231Encoder();
        \$encoded = \$encoder->encodeString(\$string);

        foreach (explode(\"\\r\\n\", \$encoded) as \$line) {
            \$this->assertRegExp(\$this->rfc2045Token, \$line, 'Encoder should always return a valid RFC 2045 token.');
        }
    }

    public function testMaximumLineLengthCanBeSet()
    {
        \$string = '';
        for (\$x = 0; \$x < 200; ++\$x) {
            \$char = 'a';
            \$string .= \$char;
        }
        \$encoder = new Rfc2231Encoder();
        \$encoded = \$encoder->encodeString(\$string, 'utf-8', 0, 75);

        // 72 here and not 75 as we read 4 chars at a time
        \$this->assertEquals(
            str_repeat('a', 72).\"\\r\\n\".
            str_repeat('a', 72).\"\\r\\n\".
            str_repeat('a', 56),
            \$encoded,
            'Lines should be wrapped at each 72 characters'
        );
    }

    public function testFirstLineCanHaveShorterLength()
    {
        \$string = '';
        for (\$x = 0; \$x < 200; ++\$x) {
            \$char = 'a';
            \$string .= \$char;
        }
        \$encoder = new Rfc2231Encoder();
        \$encoded = \$encoder->encodeString(\$string, 'utf-8', 24, 72);

        \$this->assertEquals(
            str_repeat('a', 48).\"\\r\\n\".
            str_repeat('a', 72).\"\\r\\n\".
            str_repeat('a', 72).\"\\r\\n\".
            str_repeat('a', 8),
            \$encoded,
            'First line should be 24 bytes shorter than the others.'
        );
    }

    public function testEncodingAndDecodingSamples()
    {
        \$dir = realpath(__DIR__.'/../Fixtures/samples/charsets');
        \$sampleFp = opendir(\$dir);
        while (false !== \$encoding = readdir(\$sampleFp)) {
            if ('.' == substr(\$encoding, 0, 1)) {
                continue;
            }

            \$encoder = new Rfc2231Encoder();
            if (is_dir(\$dir.'/'.\$encoding)) {
                \$fileFp = opendir(\$dir.'/'.\$encoding);
                while (false !== \$sampleFile = readdir(\$fileFp)) {
                    if ('.' == substr(\$sampleFile, 0, 1)) {
                        continue;
                    }

                    \$text = file_get_contents(\$dir.'/'.\$encoding.'/'.\$sampleFile);
                    \$encodedText = \$encoder->encodeString(\$text, \$encoding);
                    \$this->assertEquals(
                        urldecode(implode('', explode(\"\\r\\n\", \$encodedText))), \$text,
                        'Encoded string should decode back to original string for sample '.\$dir.'/'.\$encoding.'/'.\$sampleFile
                    );
                }
                closedir(\$fileFp);
            }
        }
        closedir(\$sampleFp);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/mime/Tests/Encoder/Rfc2231EncoderTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\Mime\\Tests\\Encoder;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Mime\\Encoder\\Rfc2231Encoder;

class Rfc2231EncoderTest extends TestCase
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
        \$string = '';
        foreach (range(0x00, 0x7F) as \$octet) {
            \$char = pack('C', \$octet);
            \$string .= \$char;
        }
        \$encoder = new Rfc2231Encoder();
        \$encoded = \$encoder->encodeString(\$string);

        foreach (explode(\"\\r\\n\", \$encoded) as \$line) {
            \$this->assertRegExp(\$this->rfc2045Token, \$line, 'Encoder should always return a valid RFC 2045 token.');
        }
    }

    public function testEncodingNonAsciiCharactersProducesValidToken()
    {
        \$string = '';
        foreach (range(0x80, 0xFF) as \$octet) {
            \$char = pack('C', \$octet);
            \$string .= \$char;
        }
        \$encoder = new Rfc2231Encoder();
        \$encoded = \$encoder->encodeString(\$string);

        foreach (explode(\"\\r\\n\", \$encoded) as \$line) {
            \$this->assertRegExp(\$this->rfc2045Token, \$line, 'Encoder should always return a valid RFC 2045 token.');
        }
    }

    public function testMaximumLineLengthCanBeSet()
    {
        \$string = '';
        for (\$x = 0; \$x < 200; ++\$x) {
            \$char = 'a';
            \$string .= \$char;
        }
        \$encoder = new Rfc2231Encoder();
        \$encoded = \$encoder->encodeString(\$string, 'utf-8', 0, 75);

        // 72 here and not 75 as we read 4 chars at a time
        \$this->assertEquals(
            str_repeat('a', 72).\"\\r\\n\".
            str_repeat('a', 72).\"\\r\\n\".
            str_repeat('a', 56),
            \$encoded,
            'Lines should be wrapped at each 72 characters'
        );
    }

    public function testFirstLineCanHaveShorterLength()
    {
        \$string = '';
        for (\$x = 0; \$x < 200; ++\$x) {
            \$char = 'a';
            \$string .= \$char;
        }
        \$encoder = new Rfc2231Encoder();
        \$encoded = \$encoder->encodeString(\$string, 'utf-8', 24, 72);

        \$this->assertEquals(
            str_repeat('a', 48).\"\\r\\n\".
            str_repeat('a', 72).\"\\r\\n\".
            str_repeat('a', 72).\"\\r\\n\".
            str_repeat('a', 8),
            \$encoded,
            'First line should be 24 bytes shorter than the others.'
        );
    }

    public function testEncodingAndDecodingSamples()
    {
        \$dir = realpath(__DIR__.'/../Fixtures/samples/charsets');
        \$sampleFp = opendir(\$dir);
        while (false !== \$encoding = readdir(\$sampleFp)) {
            if ('.' == substr(\$encoding, 0, 1)) {
                continue;
            }

            \$encoder = new Rfc2231Encoder();
            if (is_dir(\$dir.'/'.\$encoding)) {
                \$fileFp = opendir(\$dir.'/'.\$encoding);
                while (false !== \$sampleFile = readdir(\$fileFp)) {
                    if ('.' == substr(\$sampleFile, 0, 1)) {
                        continue;
                    }

                    \$text = file_get_contents(\$dir.'/'.\$encoding.'/'.\$sampleFile);
                    \$encodedText = \$encoder->encodeString(\$text, \$encoding);
                    \$this->assertEquals(
                        urldecode(implode('', explode(\"\\r\\n\", \$encodedText))), \$text,
                        'Encoded string should decode back to original string for sample '.\$dir.'/'.\$encoding.'/'.\$sampleFile
                    );
                }
                closedir(\$fileFp);
            }
        }
        closedir(\$sampleFp);
    }
}
", "vendor/symfony/mime/Tests/Encoder/Rfc2231EncoderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/mime/Tests/Encoder/Rfc2231EncoderTest.php");
    }
}
