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

/* vendor/swiftmailer/swiftmailer/tests/unit/Swift/Mime/Headers/MailboxHeaderTest.php */
class __TwigTemplate_c2a5f75203460d13d92e7f7b5a97d4477b291bb2ba7bb0263300bf15c27bc5ab extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Mime/Headers/MailboxHeaderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Mime/Headers/MailboxHeaderTest.php"));

        // line 1
        echo "<?php

use Egulias\\EmailValidator\\EmailValidator;

class Swift_Mime_Headers_MailboxHeaderTest extends \\SwiftMailerTestCase
{
    /* -- RFC 2822, 3.6.2 for all tests.
     */

    private \$charset = 'utf-8';

    public function testTypeIsMailboxHeader()
    {
        \$header = \$this->getHeader('To');
        \$this->assertEquals(Swift_Mime_Header::TYPE_MAILBOX, \$header->getFieldType());
    }

    public function testMailboxIsSetForAddress()
    {
        \$header = \$this->getHeader('From');
        \$header->setAddresses('chris@swiftmailer.org');
        \$this->assertEquals(['chris@swiftmailer.org'],
            \$header->getNameAddressStrings()
            );
    }

    public function testMailboxIsRenderedForNameAddress()
    {
        \$header = \$this->getHeader('From');
        \$header->setNameAddresses(['chris@swiftmailer.org' => 'Chris Corbyn']);
        \$this->assertEquals(
            ['Chris Corbyn <chris@swiftmailer.org>'], \$header->getNameAddressStrings()
            );
    }

    public function testAddressCanBeReturnedForAddress()
    {
        \$header = \$this->getHeader('From');
        \$header->setAddresses('chris@swiftmailer.org');
        \$this->assertEquals(['chris@swiftmailer.org'], \$header->getAddresses());
    }

    public function testAddressCanBeReturnedForNameAddress()
    {
        \$header = \$this->getHeader('From');
        \$header->setNameAddresses(['chris@swiftmailer.org' => 'Chris Corbyn']);
        \$this->assertEquals(['chris@swiftmailer.org'], \$header->getAddresses());
    }

    public function testQuotesInNameAreQuoted()
    {
        \$header = \$this->getHeader('From');
        \$header->setNameAddresses([
            'chris@swiftmailer.org' => 'Chris Corbyn, \"DHE\"',
            ]);
        \$this->assertEquals(
            ['\"Chris Corbyn, \\\"DHE\\\"\" <chris@swiftmailer.org>'],
            \$header->getNameAddressStrings()
            );
    }

    public function testEscapeCharsInNameAreQuoted()
    {
        \$header = \$this->getHeader('From');
        \$header->setNameAddresses([
            'chris@swiftmailer.org' => 'Chris Corbyn, \\\\escaped\\\\',
            ]);
        \$this->assertEquals(
            ['\"Chris Corbyn, \\\\\\\\escaped\\\\\\\\\" <chris@swiftmailer.org>'],
            \$header->getNameAddressStrings()
            );
    }

    public function testUtf8CharsInDomainAreIdnEncoded()
    {
        \$header = \$this->getHeader('From');
        \$header->setNameAddresses([
            'chris@swïftmailer.org' => 'Chris Corbyn',
            ]);
        \$this->assertEquals(
            ['Chris Corbyn <chris@xn--swftmailer-78a.org>'],
            \$header->getNameAddressStrings()
            );
    }

    /**
     * @expectedException \\Swift_AddressEncoderException
     */
    public function testUtf8CharsInLocalPartThrows()
    {
        \$header = \$this->getHeader('From');
        \$header->setNameAddresses([
            'chrïs@swiftmailer.org' => 'Chris Corbyn',
            ]);
        \$header->getNameAddressStrings();
    }

    public function testUtf8CharsInEmail()
    {
        \$header = \$this->getHeader('From', null, new Swift_AddressEncoder_Utf8AddressEncoder());
        \$header->setNameAddresses([
            'chrïs@swïftmailer.org' => 'Chris Corbyn',
            ]);
        \$this->assertEquals(
            ['Chris Corbyn <chrïs@swïftmailer.org>'],
            \$header->getNameAddressStrings()
            );
    }

    public function testGetMailboxesReturnsNameValuePairs()
    {
        \$header = \$this->getHeader('From');
        \$header->setNameAddresses([
            'chris@swiftmailer.org' => 'Chris Corbyn, DHE',
            ]);
        \$this->assertEquals(
            ['chris@swiftmailer.org' => 'Chris Corbyn, DHE'], \$header->getNameAddresses()
            );
    }

    public function testMultipleAddressesCanBeSetAndFetched()
    {
        \$header = \$this->getHeader('From');
        \$header->setAddresses([
            'chris@swiftmailer.org', 'mark@swiftmailer.org',
            ]);
        \$this->assertEquals(
            ['chris@swiftmailer.org', 'mark@swiftmailer.org'],
            \$header->getAddresses()
            );
    }

    public function testMultipleAddressesAsMailboxes()
    {
        \$header = \$this->getHeader('From');
        \$header->setAddresses([
            'chris@swiftmailer.org', 'mark@swiftmailer.org',
            ]);
        \$this->assertEquals(
            ['chris@swiftmailer.org' => null, 'mark@swiftmailer.org' => null],
            \$header->getNameAddresses()
            );
    }

    public function testMultipleAddressesAsMailboxStrings()
    {
        \$header = \$this->getHeader('From');
        \$header->setAddresses([
            'chris@swiftmailer.org', 'mark@swiftmailer.org',
            ]);
        \$this->assertEquals(
            ['chris@swiftmailer.org', 'mark@swiftmailer.org'],
            \$header->getNameAddressStrings()
            );
    }

    public function testMultipleNamedMailboxesReturnsMultipleAddresses()
    {
        \$header = \$this->getHeader('From');
        \$header->setNameAddresses([
            'chris@swiftmailer.org' => 'Chris Corbyn',
            'mark@swiftmailer.org' => 'Mark Corbyn',
            ]);
        \$this->assertEquals(
            ['chris@swiftmailer.org', 'mark@swiftmailer.org'],
            \$header->getAddresses()
            );
    }

    public function testMultipleNamedMailboxesReturnsMultipleMailboxes()
    {
        \$header = \$this->getHeader('From');
        \$header->setNameAddresses([
            'chris@swiftmailer.org' => 'Chris Corbyn',
            'mark@swiftmailer.org' => 'Mark Corbyn',
            ]);
        \$this->assertEquals([
                'chris@swiftmailer.org' => 'Chris Corbyn',
                'mark@swiftmailer.org' => 'Mark Corbyn',
                ],
            \$header->getNameAddresses()
            );
    }

    public function testMultipleMailboxesProducesMultipleMailboxStrings()
    {
        \$header = \$this->getHeader('From');
        \$header->setNameAddresses([
            'chris@swiftmailer.org' => 'Chris Corbyn',
            'mark@swiftmailer.org' => 'Mark Corbyn',
            ]);
        \$this->assertEquals([
                'Chris Corbyn <chris@swiftmailer.org>',
                'Mark Corbyn <mark@swiftmailer.org>',
                ],
            \$header->getNameAddressStrings()
            );
    }

    public function testSetAddressesOverwritesAnyMailboxes()
    {
        \$header = \$this->getHeader('From');
        \$header->setNameAddresses([
            'chris@swiftmailer.org' => 'Chris Corbyn',
            'mark@swiftmailer.org' => 'Mark Corbyn',
            ]);
        \$this->assertEquals(
            ['chris@swiftmailer.org' => 'Chris Corbyn',
            'mark@swiftmailer.org' => 'Mark Corbyn', ],
            \$header->getNameAddresses()
            );
        \$this->assertEquals(
            ['chris@swiftmailer.org', 'mark@swiftmailer.org'],
            \$header->getAddresses()
            );

        \$header->setAddresses(['chris@swiftmailer.org', 'mark@swiftmailer.org']);

        \$this->assertEquals(
            ['chris@swiftmailer.org' => null, 'mark@swiftmailer.org' => null],
            \$header->getNameAddresses()
            );
        \$this->assertEquals(
            ['chris@swiftmailer.org', 'mark@swiftmailer.org'],
            \$header->getAddresses()
            );
    }

    public function testNameIsEncodedIfNonAscii()
    {
        \$name = 'C'.pack('C', 0x8F).'rbyn';

        \$encoder = \$this->getEncoder('Q');
        \$encoder->shouldReceive('encodeString')
                ->once()
                ->with(\$name, \\Mockery::any(), \\Mockery::any(), \\Mockery::any())
                ->andReturn('C=8Frbyn');

        \$header = \$this->getHeader('From', \$encoder);
        \$header->setNameAddresses(['chris@swiftmailer.org' => 'Chris '.\$name]);

        \$addresses = \$header->getNameAddressStrings();
        \$this->assertEquals(
            'Chris =?'.\$this->charset.'?Q?C=8Frbyn?= <chris@swiftmailer.org>',
            array_shift(\$addresses)
            );
    }

    public function testEncodingLineLengthCalculations()
    {
        /* -- RFC 2047, 2.
        An 'encoded-word' may not be more than 75 characters long, including
        'charset', 'encoding', 'encoded-text', and delimiters.
        */

        \$name = 'C'.pack('C', 0x8F).'rbyn';

        \$encoder = \$this->getEncoder('Q');
        \$encoder->shouldReceive('encodeString')
                ->once()
                ->with(\$name, \\Mockery::any(), \\Mockery::any(), \\Mockery::any())
                ->andReturn('C=8Frbyn');

        \$header = \$this->getHeader('From', \$encoder);
        \$header->setNameAddresses(['chris@swiftmailer.org' => 'Chris '.\$name]);

        \$header->getNameAddressStrings();
    }

    public function testGetValueReturnsMailboxStringValue()
    {
        \$header = \$this->getHeader('From');
        \$header->setNameAddresses([
            'chris@swiftmailer.org' => 'Chris Corbyn',
            ]);
        \$this->assertEquals(
            'Chris Corbyn <chris@swiftmailer.org>', \$header->getFieldBody()
            );
    }

    public function testGetValueReturnsMailboxStringValueForMultipleMailboxes()
    {
        \$header = \$this->getHeader('From');
        \$header->setNameAddresses([
            'chris@swiftmailer.org' => 'Chris Corbyn',
            'mark@swiftmailer.org' => 'Mark Corbyn',
            ]);
        \$this->assertEquals(
            'Chris Corbyn <chris@swiftmailer.org>, Mark Corbyn <mark@swiftmailer.org>',
            \$header->getFieldBody()
            );
    }

    public function testRemoveAddressesWithSingleValue()
    {
        \$header = \$this->getHeader('From');
        \$header->setNameAddresses([
            'chris@swiftmailer.org' => 'Chris Corbyn',
            'mark@swiftmailer.org' => 'Mark Corbyn',
            ]);
        \$header->removeAddresses('chris@swiftmailer.org');
        \$this->assertEquals(['mark@swiftmailer.org'],
            \$header->getAddresses()
            );
    }

    public function testRemoveAddressesWithList()
    {
        \$header = \$this->getHeader('From');
        \$header->setNameAddresses([
            'chris@swiftmailer.org' => 'Chris Corbyn',
            'mark@swiftmailer.org' => 'Mark Corbyn',
            ]);
        \$header->removeAddresses(
            ['chris@swiftmailer.org', 'mark@swiftmailer.org']
            );
        \$this->assertEquals([], \$header->getAddresses());
    }

    public function testSetBodyModel()
    {
        \$header = \$this->getHeader('From');
        \$header->setFieldBodyModel('chris@swiftmailer.org');
        \$this->assertEquals(['chris@swiftmailer.org' => null], \$header->getNameAddresses());
    }

    public function testGetBodyModel()
    {
        \$header = \$this->getHeader('From');
        \$header->setAddresses(['chris@swiftmailer.org']);
        \$this->assertEquals(['chris@swiftmailer.org' => null], \$header->getFieldBodyModel());
    }

    public function testToString()
    {
        \$header = \$this->getHeader('From');
        \$header->setNameAddresses([
            'chris@swiftmailer.org' => 'Chris Corbyn',
            'mark@swiftmailer.org' => 'Mark Corbyn',
            ]);
        \$this->assertEquals(
            'From: Chris Corbyn <chris@swiftmailer.org>, '.
            'Mark Corbyn <mark@swiftmailer.org>'.\"\\r\\n\",
            \$header->toString()
            );
    }

    private function getHeader(\$name, \$encoder = null, \$addressEncoder = null)
    {
        \$encoder = \$encoder ?? \$this->getEncoder('Q', true);
        \$addressEncoder = \$addressEncoder ?? new Swift_AddressEncoder_IdnAddressEncoder();
        \$header = new Swift_Mime_Headers_MailboxHeader(\$name, \$encoder, new EmailValidator(), \$addressEncoder);
        \$header->setCharset(\$this->charset);

        return \$header;
    }

    private function getEncoder(\$type)
    {
        \$encoder = \$this->getMockery('Swift_Mime_HeaderEncoder')->shouldIgnoreMissing();
        \$encoder->shouldReceive('getName')
                ->zeroOrMoreTimes()
                ->andReturn(\$type);

        return \$encoder;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Mime/Headers/MailboxHeaderTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

use Egulias\\EmailValidator\\EmailValidator;

class Swift_Mime_Headers_MailboxHeaderTest extends \\SwiftMailerTestCase
{
    /* -- RFC 2822, 3.6.2 for all tests.
     */

    private \$charset = 'utf-8';

    public function testTypeIsMailboxHeader()
    {
        \$header = \$this->getHeader('To');
        \$this->assertEquals(Swift_Mime_Header::TYPE_MAILBOX, \$header->getFieldType());
    }

    public function testMailboxIsSetForAddress()
    {
        \$header = \$this->getHeader('From');
        \$header->setAddresses('chris@swiftmailer.org');
        \$this->assertEquals(['chris@swiftmailer.org'],
            \$header->getNameAddressStrings()
            );
    }

    public function testMailboxIsRenderedForNameAddress()
    {
        \$header = \$this->getHeader('From');
        \$header->setNameAddresses(['chris@swiftmailer.org' => 'Chris Corbyn']);
        \$this->assertEquals(
            ['Chris Corbyn <chris@swiftmailer.org>'], \$header->getNameAddressStrings()
            );
    }

    public function testAddressCanBeReturnedForAddress()
    {
        \$header = \$this->getHeader('From');
        \$header->setAddresses('chris@swiftmailer.org');
        \$this->assertEquals(['chris@swiftmailer.org'], \$header->getAddresses());
    }

    public function testAddressCanBeReturnedForNameAddress()
    {
        \$header = \$this->getHeader('From');
        \$header->setNameAddresses(['chris@swiftmailer.org' => 'Chris Corbyn']);
        \$this->assertEquals(['chris@swiftmailer.org'], \$header->getAddresses());
    }

    public function testQuotesInNameAreQuoted()
    {
        \$header = \$this->getHeader('From');
        \$header->setNameAddresses([
            'chris@swiftmailer.org' => 'Chris Corbyn, \"DHE\"',
            ]);
        \$this->assertEquals(
            ['\"Chris Corbyn, \\\"DHE\\\"\" <chris@swiftmailer.org>'],
            \$header->getNameAddressStrings()
            );
    }

    public function testEscapeCharsInNameAreQuoted()
    {
        \$header = \$this->getHeader('From');
        \$header->setNameAddresses([
            'chris@swiftmailer.org' => 'Chris Corbyn, \\\\escaped\\\\',
            ]);
        \$this->assertEquals(
            ['\"Chris Corbyn, \\\\\\\\escaped\\\\\\\\\" <chris@swiftmailer.org>'],
            \$header->getNameAddressStrings()
            );
    }

    public function testUtf8CharsInDomainAreIdnEncoded()
    {
        \$header = \$this->getHeader('From');
        \$header->setNameAddresses([
            'chris@swïftmailer.org' => 'Chris Corbyn',
            ]);
        \$this->assertEquals(
            ['Chris Corbyn <chris@xn--swftmailer-78a.org>'],
            \$header->getNameAddressStrings()
            );
    }

    /**
     * @expectedException \\Swift_AddressEncoderException
     */
    public function testUtf8CharsInLocalPartThrows()
    {
        \$header = \$this->getHeader('From');
        \$header->setNameAddresses([
            'chrïs@swiftmailer.org' => 'Chris Corbyn',
            ]);
        \$header->getNameAddressStrings();
    }

    public function testUtf8CharsInEmail()
    {
        \$header = \$this->getHeader('From', null, new Swift_AddressEncoder_Utf8AddressEncoder());
        \$header->setNameAddresses([
            'chrïs@swïftmailer.org' => 'Chris Corbyn',
            ]);
        \$this->assertEquals(
            ['Chris Corbyn <chrïs@swïftmailer.org>'],
            \$header->getNameAddressStrings()
            );
    }

    public function testGetMailboxesReturnsNameValuePairs()
    {
        \$header = \$this->getHeader('From');
        \$header->setNameAddresses([
            'chris@swiftmailer.org' => 'Chris Corbyn, DHE',
            ]);
        \$this->assertEquals(
            ['chris@swiftmailer.org' => 'Chris Corbyn, DHE'], \$header->getNameAddresses()
            );
    }

    public function testMultipleAddressesCanBeSetAndFetched()
    {
        \$header = \$this->getHeader('From');
        \$header->setAddresses([
            'chris@swiftmailer.org', 'mark@swiftmailer.org',
            ]);
        \$this->assertEquals(
            ['chris@swiftmailer.org', 'mark@swiftmailer.org'],
            \$header->getAddresses()
            );
    }

    public function testMultipleAddressesAsMailboxes()
    {
        \$header = \$this->getHeader('From');
        \$header->setAddresses([
            'chris@swiftmailer.org', 'mark@swiftmailer.org',
            ]);
        \$this->assertEquals(
            ['chris@swiftmailer.org' => null, 'mark@swiftmailer.org' => null],
            \$header->getNameAddresses()
            );
    }

    public function testMultipleAddressesAsMailboxStrings()
    {
        \$header = \$this->getHeader('From');
        \$header->setAddresses([
            'chris@swiftmailer.org', 'mark@swiftmailer.org',
            ]);
        \$this->assertEquals(
            ['chris@swiftmailer.org', 'mark@swiftmailer.org'],
            \$header->getNameAddressStrings()
            );
    }

    public function testMultipleNamedMailboxesReturnsMultipleAddresses()
    {
        \$header = \$this->getHeader('From');
        \$header->setNameAddresses([
            'chris@swiftmailer.org' => 'Chris Corbyn',
            'mark@swiftmailer.org' => 'Mark Corbyn',
            ]);
        \$this->assertEquals(
            ['chris@swiftmailer.org', 'mark@swiftmailer.org'],
            \$header->getAddresses()
            );
    }

    public function testMultipleNamedMailboxesReturnsMultipleMailboxes()
    {
        \$header = \$this->getHeader('From');
        \$header->setNameAddresses([
            'chris@swiftmailer.org' => 'Chris Corbyn',
            'mark@swiftmailer.org' => 'Mark Corbyn',
            ]);
        \$this->assertEquals([
                'chris@swiftmailer.org' => 'Chris Corbyn',
                'mark@swiftmailer.org' => 'Mark Corbyn',
                ],
            \$header->getNameAddresses()
            );
    }

    public function testMultipleMailboxesProducesMultipleMailboxStrings()
    {
        \$header = \$this->getHeader('From');
        \$header->setNameAddresses([
            'chris@swiftmailer.org' => 'Chris Corbyn',
            'mark@swiftmailer.org' => 'Mark Corbyn',
            ]);
        \$this->assertEquals([
                'Chris Corbyn <chris@swiftmailer.org>',
                'Mark Corbyn <mark@swiftmailer.org>',
                ],
            \$header->getNameAddressStrings()
            );
    }

    public function testSetAddressesOverwritesAnyMailboxes()
    {
        \$header = \$this->getHeader('From');
        \$header->setNameAddresses([
            'chris@swiftmailer.org' => 'Chris Corbyn',
            'mark@swiftmailer.org' => 'Mark Corbyn',
            ]);
        \$this->assertEquals(
            ['chris@swiftmailer.org' => 'Chris Corbyn',
            'mark@swiftmailer.org' => 'Mark Corbyn', ],
            \$header->getNameAddresses()
            );
        \$this->assertEquals(
            ['chris@swiftmailer.org', 'mark@swiftmailer.org'],
            \$header->getAddresses()
            );

        \$header->setAddresses(['chris@swiftmailer.org', 'mark@swiftmailer.org']);

        \$this->assertEquals(
            ['chris@swiftmailer.org' => null, 'mark@swiftmailer.org' => null],
            \$header->getNameAddresses()
            );
        \$this->assertEquals(
            ['chris@swiftmailer.org', 'mark@swiftmailer.org'],
            \$header->getAddresses()
            );
    }

    public function testNameIsEncodedIfNonAscii()
    {
        \$name = 'C'.pack('C', 0x8F).'rbyn';

        \$encoder = \$this->getEncoder('Q');
        \$encoder->shouldReceive('encodeString')
                ->once()
                ->with(\$name, \\Mockery::any(), \\Mockery::any(), \\Mockery::any())
                ->andReturn('C=8Frbyn');

        \$header = \$this->getHeader('From', \$encoder);
        \$header->setNameAddresses(['chris@swiftmailer.org' => 'Chris '.\$name]);

        \$addresses = \$header->getNameAddressStrings();
        \$this->assertEquals(
            'Chris =?'.\$this->charset.'?Q?C=8Frbyn?= <chris@swiftmailer.org>',
            array_shift(\$addresses)
            );
    }

    public function testEncodingLineLengthCalculations()
    {
        /* -- RFC 2047, 2.
        An 'encoded-word' may not be more than 75 characters long, including
        'charset', 'encoding', 'encoded-text', and delimiters.
        */

        \$name = 'C'.pack('C', 0x8F).'rbyn';

        \$encoder = \$this->getEncoder('Q');
        \$encoder->shouldReceive('encodeString')
                ->once()
                ->with(\$name, \\Mockery::any(), \\Mockery::any(), \\Mockery::any())
                ->andReturn('C=8Frbyn');

        \$header = \$this->getHeader('From', \$encoder);
        \$header->setNameAddresses(['chris@swiftmailer.org' => 'Chris '.\$name]);

        \$header->getNameAddressStrings();
    }

    public function testGetValueReturnsMailboxStringValue()
    {
        \$header = \$this->getHeader('From');
        \$header->setNameAddresses([
            'chris@swiftmailer.org' => 'Chris Corbyn',
            ]);
        \$this->assertEquals(
            'Chris Corbyn <chris@swiftmailer.org>', \$header->getFieldBody()
            );
    }

    public function testGetValueReturnsMailboxStringValueForMultipleMailboxes()
    {
        \$header = \$this->getHeader('From');
        \$header->setNameAddresses([
            'chris@swiftmailer.org' => 'Chris Corbyn',
            'mark@swiftmailer.org' => 'Mark Corbyn',
            ]);
        \$this->assertEquals(
            'Chris Corbyn <chris@swiftmailer.org>, Mark Corbyn <mark@swiftmailer.org>',
            \$header->getFieldBody()
            );
    }

    public function testRemoveAddressesWithSingleValue()
    {
        \$header = \$this->getHeader('From');
        \$header->setNameAddresses([
            'chris@swiftmailer.org' => 'Chris Corbyn',
            'mark@swiftmailer.org' => 'Mark Corbyn',
            ]);
        \$header->removeAddresses('chris@swiftmailer.org');
        \$this->assertEquals(['mark@swiftmailer.org'],
            \$header->getAddresses()
            );
    }

    public function testRemoveAddressesWithList()
    {
        \$header = \$this->getHeader('From');
        \$header->setNameAddresses([
            'chris@swiftmailer.org' => 'Chris Corbyn',
            'mark@swiftmailer.org' => 'Mark Corbyn',
            ]);
        \$header->removeAddresses(
            ['chris@swiftmailer.org', 'mark@swiftmailer.org']
            );
        \$this->assertEquals([], \$header->getAddresses());
    }

    public function testSetBodyModel()
    {
        \$header = \$this->getHeader('From');
        \$header->setFieldBodyModel('chris@swiftmailer.org');
        \$this->assertEquals(['chris@swiftmailer.org' => null], \$header->getNameAddresses());
    }

    public function testGetBodyModel()
    {
        \$header = \$this->getHeader('From');
        \$header->setAddresses(['chris@swiftmailer.org']);
        \$this->assertEquals(['chris@swiftmailer.org' => null], \$header->getFieldBodyModel());
    }

    public function testToString()
    {
        \$header = \$this->getHeader('From');
        \$header->setNameAddresses([
            'chris@swiftmailer.org' => 'Chris Corbyn',
            'mark@swiftmailer.org' => 'Mark Corbyn',
            ]);
        \$this->assertEquals(
            'From: Chris Corbyn <chris@swiftmailer.org>, '.
            'Mark Corbyn <mark@swiftmailer.org>'.\"\\r\\n\",
            \$header->toString()
            );
    }

    private function getHeader(\$name, \$encoder = null, \$addressEncoder = null)
    {
        \$encoder = \$encoder ?? \$this->getEncoder('Q', true);
        \$addressEncoder = \$addressEncoder ?? new Swift_AddressEncoder_IdnAddressEncoder();
        \$header = new Swift_Mime_Headers_MailboxHeader(\$name, \$encoder, new EmailValidator(), \$addressEncoder);
        \$header->setCharset(\$this->charset);

        return \$header;
    }

    private function getEncoder(\$type)
    {
        \$encoder = \$this->getMockery('Swift_Mime_HeaderEncoder')->shouldIgnoreMissing();
        \$encoder->shouldReceive('getName')
                ->zeroOrMoreTimes()
                ->andReturn(\$type);

        return \$encoder;
    }
}
", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Mime/Headers/MailboxHeaderTest.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/unit/Swift/Mime/Headers/MailboxHeaderTest.php");
    }
}
