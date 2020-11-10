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

/* vendor/symfony/mime/Tests/Header/UnstructuredHeaderTest.php */
class __TwigTemplate_941d7de33ffa8aa48c933129f7d8733396b42e4c41d6e769127527527e5bd9af extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Tests/Header/UnstructuredHeaderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Tests/Header/UnstructuredHeaderTest.php"));

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

namespace Symfony\\Component\\Mime\\Tests\\Header;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Mime\\Header\\UnstructuredHeader;

class UnstructuredHeaderTest extends TestCase
{
    private \$charset = 'utf-8';

    public function testGetNameReturnsNameVerbatim()
    {
        \$header = new UnstructuredHeader('Subject', '');
        \$this->assertEquals('Subject', \$header->getName());
    }

    public function testGetValueReturnsValueVerbatim()
    {
        \$header = new UnstructuredHeader('Subject', 'DevLaon');
        \$this->assertEquals('DevLaon', \$header->getValue());
    }

    public function testBasicStructureIsKeyValuePair()
    {
        /* -- RFC 2822, 2.2
        Header fields are lines composed of a field name, followed by a colon
        (\":\"), followed by a field body, and terminated by CRLF.
        */
        \$header = new UnstructuredHeader('Subject', 'DevLaon');
        \$this->assertEquals('Subject: DevLaon', \$header->toString());
    }

    public function testLongHeadersAreFoldedAtWordBoundary()
    {
        /* -- RFC 2822, 2.2.3
        Each header field is logically a single line of characters comprising
        the field name, the colon, and the field body.  For convenience
        however, and to deal with the 998/78 character limitations per line,
        the field body portion of a header field can be split into a multiple
        line representation; this is called \"folding\".  The general rule is
        that wherever this standard allows for folding white space (not
        simply WSP characters), a CRLF may be inserted before any WSP.
        */

        \$value = 'The quick brown fox jumped over the fence, he was a very very '.
            'scary brown fox with a bushy tail';
        \$header = new UnstructuredHeader('X-Custom-Header', \$value);
        /*
            X-Custom-Header: The quick brown fox jumped over the fence, he was a very very
            scary brown fox with a bushy tail
        */
        \$this->assertEquals(
            'X-Custom-Header: The quick brown fox jumped over the fence, he was a'.
            ' very'.\"\\r\\n\".//Folding
            ' very scary brown fox with a bushy tail',
            \$header->toString(), '%s: The header should have been folded at 76th char'
        );
    }

    public function testPrintableAsciiOnlyAppearsInHeaders()
    {
        /* -- RFC 2822, 2.2.
        A field name MUST be composed of printable US-ASCII characters (i.e.,
        characters that have values between 33 and 126, inclusive), except
        colon.  A field body may be composed of any US-ASCII characters,
        except for CR and LF.
        */

        \$nonAsciiChar = pack('C', 0x8F);
        \$header = new UnstructuredHeader('X-DevLaon', \$nonAsciiChar);
        \$this->assertRegExp('~^[^:\\x00-\\x20\\x80-\\xFF]+: [^\\x80-\\xFF\\r\\n]+\$~s', \$header->toString());
    }

    public function testEncodedWordsFollowGeneralStructure()
    {
        /* -- RFC 2047, 1.
        Generally, an \"encoded-word\" is a sequence of printable ASCII
        characters that begins with \"=?\", ends with \"?=\", and has two \"?\"s in
        between.
        */

        \$nonAsciiChar = pack('C', 0x8F);
        \$header = new UnstructuredHeader('X-DevLaon', \$nonAsciiChar);
        \$this->assertRegExp('~^X-DevLaon: \\=?.*?\\?.*?\\?.*?\\?=\$~s', \$header->toString());
    }

    public function testEncodedWordIncludesCharsetAndEncodingMethodAndText()
    {
        /* -- RFC 2047, 2.
        An 'encoded-word' is defined by the following ABNF grammar.  The
        notation of RFC 822 is used, with the exception that white space
        characters MUST NOT appear between components of an 'encoded-word'.

        encoded-word = \"=?\" charset \"?\" encoding \"?\" encoded-text \"?=\"
        */

        \$nonAsciiChar = pack('C', 0x8F);
        \$header = new UnstructuredHeader('X-DevLaon', \$nonAsciiChar);
        \$header->setCharset('iso-8859-1');
        \$this->assertEquals('X-DevLaon: =?'.\$header->getCharset().'?Q?=8F?=', \$header->toString());
    }

    public function testEncodedWordsAreUsedToEncodedNonPrintableAscii()
    {
        // SPACE and TAB permitted
        \$nonPrintableBytes = array_merge(range(0x00, 0x08), range(0x10, 0x19), [0x7F]);
        foreach (\$nonPrintableBytes as \$byte) {
            \$char = pack('C', \$byte);
            \$encodedChar = sprintf('=%02X', \$byte);
            \$header = new UnstructuredHeader('X-A', \$char);
            \$header->setCharset('iso-8859-1');
            \$this->assertEquals('X-A: =?'.\$header->getCharset().'?Q?'.\$encodedChar.'?=', \$header->toString(), 'Non-printable ascii should be encoded');
        }
    }

    public function testEncodedWordsAreUsedToEncode8BitOctets()
    {
        foreach (range(0x80, 0xFF) as \$byte) {
            \$char = pack('C', \$byte);
            \$encodedChar = sprintf('=%02X', \$byte);
            \$header = new UnstructuredHeader('X-A', \$char);
            \$header->setCharset('iso-8859-1');
            \$this->assertEquals('X-A: =?'.\$header->getCharset().'?Q?'.\$encodedChar.'?=', \$header->toString(), '8-bit octets should be encoded');
        }
    }

    public function testEncodedWordsAreNoMoreThan75CharsPerLine()
    {
        /* -- RFC 2047, 2.
        An 'encoded-word' may not be more than 75 characters long, including
        'charset', 'encoding', 'encoded-text', and delimiters.

        ... SNIP ...

        While there is no limit to the length of a multiple-line header
        field, each line of a header field that contains one or more
        'encoded-word's is limited to 76 characters.
        */

        \$nonAsciiChar = pack('C', 0x8F);

        //Note that multi-line headers begin with LWSP which makes 75 + 1 = 76
        //Note also that =?utf-8?q??= is 12 chars which makes 75 - 12 = 63

        //* X-DevLaon: is 8 chars
        \$header = new UnstructuredHeader('X-DevLaon', \$nonAsciiChar);
        \$header->setCharset('iso-8859-1');
        \$this->assertEquals('X-DevLaon: =?'.\$header->getCharset().'?Q?=8F?=', \$header->toString());
    }

    public function testFWSPIsUsedWhenEncoderReturnsMultipleLines()
    {
        /* --RFC 2047, 2.
        If it is desirable to encode more text than will fit in an 'encoded-word' of
        75 characters, multiple 'encoded-word's (separated by CRLF SPACE) may
        be used.
        */

        // Note that multi-line headers begin with LWSP which makes 75 + 1 = 76
        // Note also that =?utf-8?q??= is 12 chars which makes 75 - 12 = 63

        //* X-DevLaon: is 8 chars
        \$header = new UnstructuredHeader('X-DevLaon', pack('C', 0x8F).'line_one_here'.\"\\r\\n\".'line_two_here');
        \$header->setCharset('iso-8859-1');
        \$this->assertEquals('X-DevLaon: =?'.\$header->getCharset().'?Q?=8Fline=5Fone=5Fhere?='.\"\\r\\n\".' =?'.\$header->getCharset().'?Q?line=5Ftwo=5Fhere?=', \$header->toString());
    }

    public function testAdjacentWordsAreEncodedTogether()
    {
        /* -- RFC 2047, 5 (1)
         Ordinary ASCII text and 'encoded-word's may appear together in the
        same header field.  However, an 'encoded-word' that appears in a
        header field defined as '*text' MUST be separated from any adjacent
        'encoded-word' or 'text' by 'linear-white-space'.

         -- RFC 2047, 2.
         IMPORTANT: 'encoded-word's are designed to be recognized as 'atom's
        by an RFC 822 parser.  As a consequence, unencoded white space
        characters (such as SPACE and HTAB) are FORBIDDEN within an
        'encoded-word'.
        */

        // It would be valid to encode all words needed, however it's probably
        // easiest to encode the longest amount required at a time

        \$word = 'w'.pack('C', 0x8F).'rd';
        \$text = 'start '.\$word.' '.\$word.' then '.\$word;
        // 'start', ' word word', ' and end', ' word'

        \$header = new UnstructuredHeader('X-DevLaon', \$text);
        \$header->setCharset('iso-8859-1');
        \$this->assertEquals('X-DevLaon: start =?'.\$header->getCharset().'?Q?'.
            'w=8Frd_w=8Frd?= then =?'.\$header->getCharset().'?Q?'.
            'w=8Frd?=', \$header->toString(),
            'Adjacent encoded words should appear grouped with WSP encoded'
        );
    }

    public function testLanguageInformationAppearsInEncodedWords()
    {
        /* -- RFC 2231, 5.
        5.  Language specification in Encoded Words

        RFC 2047 provides support for non-US-ASCII character sets in RFC 822
        message header comments, phrases, and any unstructured text field.
        This is done by defining an encoded word construct which can appear
        in any of these places.  Given that these are fields intended for
        display, it is sometimes necessary to associate language information
        with encoded words as well as just the character set.  This
        specification extends the definition of an encoded word to allow the
        inclusion of such information.  This is simply done by suffixing the
        character set specification with an asterisk followed by the language
        tag.  For example:

                    From: =?US-ASCII*EN?Q?Keith_Moore?= <moore@cs.utk.edu>
        */

        \$value = 'fo'.pack('C', 0x8F).'bar';
        \$header = new UnstructuredHeader('Subject', \$value);
        \$header->setLanguage('en');
        \$header->setCharset('iso-8859-1');
        \$this->assertEquals('Subject: =?iso-8859-1*en?Q?fo=8Fbar?=', \$header->toString());
    }

    public function testSetBody()
    {
        \$header = new UnstructuredHeader('X-DevLaon', '');
        \$header->setBody('test');
        \$this->assertEquals('test', \$header->getValue());
    }

    public function testGetBody()
    {
        \$header = new UnstructuredHeader('Subject', 'test');
        \$this->assertEquals('test', \$header->getBody());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/mime/Tests/Header/UnstructuredHeaderTest.php";
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

namespace Symfony\\Component\\Mime\\Tests\\Header;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Mime\\Header\\UnstructuredHeader;

class UnstructuredHeaderTest extends TestCase
{
    private \$charset = 'utf-8';

    public function testGetNameReturnsNameVerbatim()
    {
        \$header = new UnstructuredHeader('Subject', '');
        \$this->assertEquals('Subject', \$header->getName());
    }

    public function testGetValueReturnsValueVerbatim()
    {
        \$header = new UnstructuredHeader('Subject', 'DevLaon');
        \$this->assertEquals('DevLaon', \$header->getValue());
    }

    public function testBasicStructureIsKeyValuePair()
    {
        /* -- RFC 2822, 2.2
        Header fields are lines composed of a field name, followed by a colon
        (\":\"), followed by a field body, and terminated by CRLF.
        */
        \$header = new UnstructuredHeader('Subject', 'DevLaon');
        \$this->assertEquals('Subject: DevLaon', \$header->toString());
    }

    public function testLongHeadersAreFoldedAtWordBoundary()
    {
        /* -- RFC 2822, 2.2.3
        Each header field is logically a single line of characters comprising
        the field name, the colon, and the field body.  For convenience
        however, and to deal with the 998/78 character limitations per line,
        the field body portion of a header field can be split into a multiple
        line representation; this is called \"folding\".  The general rule is
        that wherever this standard allows for folding white space (not
        simply WSP characters), a CRLF may be inserted before any WSP.
        */

        \$value = 'The quick brown fox jumped over the fence, he was a very very '.
            'scary brown fox with a bushy tail';
        \$header = new UnstructuredHeader('X-Custom-Header', \$value);
        /*
            X-Custom-Header: The quick brown fox jumped over the fence, he was a very very
            scary brown fox with a bushy tail
        */
        \$this->assertEquals(
            'X-Custom-Header: The quick brown fox jumped over the fence, he was a'.
            ' very'.\"\\r\\n\".//Folding
            ' very scary brown fox with a bushy tail',
            \$header->toString(), '%s: The header should have been folded at 76th char'
        );
    }

    public function testPrintableAsciiOnlyAppearsInHeaders()
    {
        /* -- RFC 2822, 2.2.
        A field name MUST be composed of printable US-ASCII characters (i.e.,
        characters that have values between 33 and 126, inclusive), except
        colon.  A field body may be composed of any US-ASCII characters,
        except for CR and LF.
        */

        \$nonAsciiChar = pack('C', 0x8F);
        \$header = new UnstructuredHeader('X-DevLaon', \$nonAsciiChar);
        \$this->assertRegExp('~^[^:\\x00-\\x20\\x80-\\xFF]+: [^\\x80-\\xFF\\r\\n]+\$~s', \$header->toString());
    }

    public function testEncodedWordsFollowGeneralStructure()
    {
        /* -- RFC 2047, 1.
        Generally, an \"encoded-word\" is a sequence of printable ASCII
        characters that begins with \"=?\", ends with \"?=\", and has two \"?\"s in
        between.
        */

        \$nonAsciiChar = pack('C', 0x8F);
        \$header = new UnstructuredHeader('X-DevLaon', \$nonAsciiChar);
        \$this->assertRegExp('~^X-DevLaon: \\=?.*?\\?.*?\\?.*?\\?=\$~s', \$header->toString());
    }

    public function testEncodedWordIncludesCharsetAndEncodingMethodAndText()
    {
        /* -- RFC 2047, 2.
        An 'encoded-word' is defined by the following ABNF grammar.  The
        notation of RFC 822 is used, with the exception that white space
        characters MUST NOT appear between components of an 'encoded-word'.

        encoded-word = \"=?\" charset \"?\" encoding \"?\" encoded-text \"?=\"
        */

        \$nonAsciiChar = pack('C', 0x8F);
        \$header = new UnstructuredHeader('X-DevLaon', \$nonAsciiChar);
        \$header->setCharset('iso-8859-1');
        \$this->assertEquals('X-DevLaon: =?'.\$header->getCharset().'?Q?=8F?=', \$header->toString());
    }

    public function testEncodedWordsAreUsedToEncodedNonPrintableAscii()
    {
        // SPACE and TAB permitted
        \$nonPrintableBytes = array_merge(range(0x00, 0x08), range(0x10, 0x19), [0x7F]);
        foreach (\$nonPrintableBytes as \$byte) {
            \$char = pack('C', \$byte);
            \$encodedChar = sprintf('=%02X', \$byte);
            \$header = new UnstructuredHeader('X-A', \$char);
            \$header->setCharset('iso-8859-1');
            \$this->assertEquals('X-A: =?'.\$header->getCharset().'?Q?'.\$encodedChar.'?=', \$header->toString(), 'Non-printable ascii should be encoded');
        }
    }

    public function testEncodedWordsAreUsedToEncode8BitOctets()
    {
        foreach (range(0x80, 0xFF) as \$byte) {
            \$char = pack('C', \$byte);
            \$encodedChar = sprintf('=%02X', \$byte);
            \$header = new UnstructuredHeader('X-A', \$char);
            \$header->setCharset('iso-8859-1');
            \$this->assertEquals('X-A: =?'.\$header->getCharset().'?Q?'.\$encodedChar.'?=', \$header->toString(), '8-bit octets should be encoded');
        }
    }

    public function testEncodedWordsAreNoMoreThan75CharsPerLine()
    {
        /* -- RFC 2047, 2.
        An 'encoded-word' may not be more than 75 characters long, including
        'charset', 'encoding', 'encoded-text', and delimiters.

        ... SNIP ...

        While there is no limit to the length of a multiple-line header
        field, each line of a header field that contains one or more
        'encoded-word's is limited to 76 characters.
        */

        \$nonAsciiChar = pack('C', 0x8F);

        //Note that multi-line headers begin with LWSP which makes 75 + 1 = 76
        //Note also that =?utf-8?q??= is 12 chars which makes 75 - 12 = 63

        //* X-DevLaon: is 8 chars
        \$header = new UnstructuredHeader('X-DevLaon', \$nonAsciiChar);
        \$header->setCharset('iso-8859-1');
        \$this->assertEquals('X-DevLaon: =?'.\$header->getCharset().'?Q?=8F?=', \$header->toString());
    }

    public function testFWSPIsUsedWhenEncoderReturnsMultipleLines()
    {
        /* --RFC 2047, 2.
        If it is desirable to encode more text than will fit in an 'encoded-word' of
        75 characters, multiple 'encoded-word's (separated by CRLF SPACE) may
        be used.
        */

        // Note that multi-line headers begin with LWSP which makes 75 + 1 = 76
        // Note also that =?utf-8?q??= is 12 chars which makes 75 - 12 = 63

        //* X-DevLaon: is 8 chars
        \$header = new UnstructuredHeader('X-DevLaon', pack('C', 0x8F).'line_one_here'.\"\\r\\n\".'line_two_here');
        \$header->setCharset('iso-8859-1');
        \$this->assertEquals('X-DevLaon: =?'.\$header->getCharset().'?Q?=8Fline=5Fone=5Fhere?='.\"\\r\\n\".' =?'.\$header->getCharset().'?Q?line=5Ftwo=5Fhere?=', \$header->toString());
    }

    public function testAdjacentWordsAreEncodedTogether()
    {
        /* -- RFC 2047, 5 (1)
         Ordinary ASCII text and 'encoded-word's may appear together in the
        same header field.  However, an 'encoded-word' that appears in a
        header field defined as '*text' MUST be separated from any adjacent
        'encoded-word' or 'text' by 'linear-white-space'.

         -- RFC 2047, 2.
         IMPORTANT: 'encoded-word's are designed to be recognized as 'atom's
        by an RFC 822 parser.  As a consequence, unencoded white space
        characters (such as SPACE and HTAB) are FORBIDDEN within an
        'encoded-word'.
        */

        // It would be valid to encode all words needed, however it's probably
        // easiest to encode the longest amount required at a time

        \$word = 'w'.pack('C', 0x8F).'rd';
        \$text = 'start '.\$word.' '.\$word.' then '.\$word;
        // 'start', ' word word', ' and end', ' word'

        \$header = new UnstructuredHeader('X-DevLaon', \$text);
        \$header->setCharset('iso-8859-1');
        \$this->assertEquals('X-DevLaon: start =?'.\$header->getCharset().'?Q?'.
            'w=8Frd_w=8Frd?= then =?'.\$header->getCharset().'?Q?'.
            'w=8Frd?=', \$header->toString(),
            'Adjacent encoded words should appear grouped with WSP encoded'
        );
    }

    public function testLanguageInformationAppearsInEncodedWords()
    {
        /* -- RFC 2231, 5.
        5.  Language specification in Encoded Words

        RFC 2047 provides support for non-US-ASCII character sets in RFC 822
        message header comments, phrases, and any unstructured text field.
        This is done by defining an encoded word construct which can appear
        in any of these places.  Given that these are fields intended for
        display, it is sometimes necessary to associate language information
        with encoded words as well as just the character set.  This
        specification extends the definition of an encoded word to allow the
        inclusion of such information.  This is simply done by suffixing the
        character set specification with an asterisk followed by the language
        tag.  For example:

                    From: =?US-ASCII*EN?Q?Keith_Moore?= <moore@cs.utk.edu>
        */

        \$value = 'fo'.pack('C', 0x8F).'bar';
        \$header = new UnstructuredHeader('Subject', \$value);
        \$header->setLanguage('en');
        \$header->setCharset('iso-8859-1');
        \$this->assertEquals('Subject: =?iso-8859-1*en?Q?fo=8Fbar?=', \$header->toString());
    }

    public function testSetBody()
    {
        \$header = new UnstructuredHeader('X-DevLaon', '');
        \$header->setBody('test');
        \$this->assertEquals('test', \$header->getValue());
    }

    public function testGetBody()
    {
        \$header = new UnstructuredHeader('Subject', 'test');
        \$this->assertEquals('test', \$header->getBody());
    }
}
", "vendor/symfony/mime/Tests/Header/UnstructuredHeaderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/mime/Tests/Header/UnstructuredHeaderTest.php");
    }
}
