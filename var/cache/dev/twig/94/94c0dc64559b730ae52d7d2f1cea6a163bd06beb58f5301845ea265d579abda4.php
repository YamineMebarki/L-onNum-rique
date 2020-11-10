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

/* vendor/symfony/mime/Tests/Header/MailboxListHeaderTest.php */
class __TwigTemplate_2d5fd1c69b58e4bdbfe136570334e8c1feee2f4805823f46e9c81b8506dd8862 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Tests/Header/MailboxListHeaderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Tests/Header/MailboxListHeaderTest.php"));

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
use Symfony\\Component\\Mime\\Address;
use Symfony\\Component\\Mime\\Header\\MailboxListHeader;
use Symfony\\Component\\Mime\\NamedAddress;

class MailboxListHeaderTest extends TestCase
{
    // RFC 2822, 3.6.2 for all tests

    public function testMailboxIsSetForAddress()
    {
        \$header = new MailboxListHeader('From', [new Address('chris@swiftmailer.org')]);
        \$this->assertEquals(['chris@swiftmailer.org'], \$header->getAddressStrings());
    }

    public function testMailboxIsRenderedForNameAddress()
    {
        \$header = new MailboxListHeader('From', [new NamedAddress('chris@swiftmailer.org', 'Chris Corbyn')]);
        \$this->assertEquals(['Chris Corbyn <chris@swiftmailer.org>'], \$header->getAddressStrings());
    }

    public function testAddressCanBeReturnedForAddress()
    {
        \$header = new MailboxListHeader('From', \$addresses = [new Address('chris@swiftmailer.org')]);
        \$this->assertEquals(\$addresses, \$header->getAddresses());
    }

    public function testQuotesInNameAreQuoted()
    {
        \$header = new MailboxListHeader('From', [new NamedAddress('chris@swiftmailer.org', 'Chris Corbyn, \"DHE\"')]);
        \$this->assertEquals(['\"Chris Corbyn, \\\"DHE\\\"\" <chris@swiftmailer.org>'], \$header->getAddressStrings());
    }

    public function testEscapeCharsInNameAreQuoted()
    {
        \$header = new MailboxListHeader('From', [new NamedAddress('chris@swiftmailer.org', 'Chris Corbyn, \\\\escaped\\\\')]);
        \$this->assertEquals(['\"Chris Corbyn, \\\\\\\\escaped\\\\\\\\\" <chris@swiftmailer.org>'], \$header->getAddressStrings());
    }

    public function testUtf8CharsInDomainAreIdnEncoded()
    {
        \$header = new MailboxListHeader('From', [new NamedAddress('chris@swïftmailer.org', 'Chris Corbyn')]);
        \$this->assertEquals(['Chris Corbyn <chris@xn--swftmailer-78a.org>'], \$header->getAddressStrings());
    }

    public function testUtf8CharsInLocalPartThrows()
    {
        \$this->expectException('Symfony\\Component\\Mime\\Exception\\AddressEncoderException');
        \$header = new MailboxListHeader('From', [new NamedAddress('chrïs@swiftmailer.org', 'Chris Corbyn')]);
        \$header->getAddressStrings();
    }

    public function testGetMailboxesReturnsNameValuePairs()
    {
        \$header = new MailboxListHeader('From', \$addresses = [new NamedAddress('chris@swiftmailer.org', 'Chris Corbyn, DHE')]);
        \$this->assertEquals(\$addresses, \$header->getAddresses());
    }

    public function testMultipleAddressesAsMailboxStrings()
    {
        \$header = new MailboxListHeader('From', [new Address('chris@swiftmailer.org'), new Address('mark@swiftmailer.org')]);
        \$this->assertEquals(['chris@swiftmailer.org', 'mark@swiftmailer.org'], \$header->getAddressStrings());
    }

    public function testNameIsEncodedIfNonAscii()
    {
        \$name = 'C'.pack('C', 0x8F).'rbyn';
        \$header = new MailboxListHeader('From', [new NamedAddress('chris@swiftmailer.org', 'Chris '.\$name)]);
        \$header->setCharset('iso-8859-1');
        \$addresses = \$header->getAddressStrings();
        \$this->assertEquals('Chris =?'.\$header->getCharset().'?Q?C=8Frbyn?= <chris@swiftmailer.org>', array_shift(\$addresses));
    }

    public function testEncodingLineLengthCalculations()
    {
        /* -- RFC 2047, 2.
        An 'encoded-word' may not be more than 75 characters long, including
        'charset', 'encoding', 'encoded-text', and delimiters.
        */

        \$name = 'C'.pack('C', 0x8F).'rbyn';
        \$header = new MailboxListHeader('From', [new NamedAddress('chris@swiftmailer.org', 'Chris '.\$name)]);
        \$header->setCharset('iso-8859-1');
        \$addresses = \$header->getAddressStrings();
        \$this->assertEquals('Chris =?'.\$header->getCharset().'?Q?C=8Frbyn?= <chris@swiftmailer.org>', array_shift(\$addresses));
    }

    public function testGetValueReturnsMailboxStringValue()
    {
        \$header = new MailboxListHeader('From', [new NamedAddress('chris@swiftmailer.org', 'Chris Corbyn')]);
        \$this->assertEquals('Chris Corbyn <chris@swiftmailer.org>', \$header->getBodyAsString());
    }

    public function testGetValueReturnsMailboxStringValueForMultipleMailboxes()
    {
        \$header = new MailboxListHeader('From', [new NamedAddress('chris@swiftmailer.org', 'Chris Corbyn'), new NamedAddress('mark@swiftmailer.org', 'Mark Corbyn')]);
        \$this->assertEquals('Chris Corbyn <chris@swiftmailer.org>, Mark Corbyn <mark@swiftmailer.org>', \$header->getBodyAsString());
    }

    public function testSetBody()
    {
        \$header = new MailboxListHeader('From', []);
        \$header->setBody(\$addresses = [new Address('chris@swiftmailer.org')]);
        \$this->assertEquals(\$addresses, \$header->getAddresses());
    }

    public function testGetBody()
    {
        \$header = new MailboxListHeader('From', \$addresses = [new Address('chris@swiftmailer.org')]);
        \$this->assertEquals(\$addresses, \$header->getBody());
    }

    public function testToString()
    {
        \$header = new MailboxListHeader('From', [new NamedAddress('chris@example.org', 'Chris Corbyn'), new NamedAddress('mark@example.org', 'Mark Corbyn')]);
        \$this->assertEquals('From: Chris Corbyn <chris@example.org>, Mark Corbyn <mark@example.org>', \$header->toString());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/mime/Tests/Header/MailboxListHeaderTest.php";
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
use Symfony\\Component\\Mime\\Address;
use Symfony\\Component\\Mime\\Header\\MailboxListHeader;
use Symfony\\Component\\Mime\\NamedAddress;

class MailboxListHeaderTest extends TestCase
{
    // RFC 2822, 3.6.2 for all tests

    public function testMailboxIsSetForAddress()
    {
        \$header = new MailboxListHeader('From', [new Address('chris@swiftmailer.org')]);
        \$this->assertEquals(['chris@swiftmailer.org'], \$header->getAddressStrings());
    }

    public function testMailboxIsRenderedForNameAddress()
    {
        \$header = new MailboxListHeader('From', [new NamedAddress('chris@swiftmailer.org', 'Chris Corbyn')]);
        \$this->assertEquals(['Chris Corbyn <chris@swiftmailer.org>'], \$header->getAddressStrings());
    }

    public function testAddressCanBeReturnedForAddress()
    {
        \$header = new MailboxListHeader('From', \$addresses = [new Address('chris@swiftmailer.org')]);
        \$this->assertEquals(\$addresses, \$header->getAddresses());
    }

    public function testQuotesInNameAreQuoted()
    {
        \$header = new MailboxListHeader('From', [new NamedAddress('chris@swiftmailer.org', 'Chris Corbyn, \"DHE\"')]);
        \$this->assertEquals(['\"Chris Corbyn, \\\"DHE\\\"\" <chris@swiftmailer.org>'], \$header->getAddressStrings());
    }

    public function testEscapeCharsInNameAreQuoted()
    {
        \$header = new MailboxListHeader('From', [new NamedAddress('chris@swiftmailer.org', 'Chris Corbyn, \\\\escaped\\\\')]);
        \$this->assertEquals(['\"Chris Corbyn, \\\\\\\\escaped\\\\\\\\\" <chris@swiftmailer.org>'], \$header->getAddressStrings());
    }

    public function testUtf8CharsInDomainAreIdnEncoded()
    {
        \$header = new MailboxListHeader('From', [new NamedAddress('chris@swïftmailer.org', 'Chris Corbyn')]);
        \$this->assertEquals(['Chris Corbyn <chris@xn--swftmailer-78a.org>'], \$header->getAddressStrings());
    }

    public function testUtf8CharsInLocalPartThrows()
    {
        \$this->expectException('Symfony\\Component\\Mime\\Exception\\AddressEncoderException');
        \$header = new MailboxListHeader('From', [new NamedAddress('chrïs@swiftmailer.org', 'Chris Corbyn')]);
        \$header->getAddressStrings();
    }

    public function testGetMailboxesReturnsNameValuePairs()
    {
        \$header = new MailboxListHeader('From', \$addresses = [new NamedAddress('chris@swiftmailer.org', 'Chris Corbyn, DHE')]);
        \$this->assertEquals(\$addresses, \$header->getAddresses());
    }

    public function testMultipleAddressesAsMailboxStrings()
    {
        \$header = new MailboxListHeader('From', [new Address('chris@swiftmailer.org'), new Address('mark@swiftmailer.org')]);
        \$this->assertEquals(['chris@swiftmailer.org', 'mark@swiftmailer.org'], \$header->getAddressStrings());
    }

    public function testNameIsEncodedIfNonAscii()
    {
        \$name = 'C'.pack('C', 0x8F).'rbyn';
        \$header = new MailboxListHeader('From', [new NamedAddress('chris@swiftmailer.org', 'Chris '.\$name)]);
        \$header->setCharset('iso-8859-1');
        \$addresses = \$header->getAddressStrings();
        \$this->assertEquals('Chris =?'.\$header->getCharset().'?Q?C=8Frbyn?= <chris@swiftmailer.org>', array_shift(\$addresses));
    }

    public function testEncodingLineLengthCalculations()
    {
        /* -- RFC 2047, 2.
        An 'encoded-word' may not be more than 75 characters long, including
        'charset', 'encoding', 'encoded-text', and delimiters.
        */

        \$name = 'C'.pack('C', 0x8F).'rbyn';
        \$header = new MailboxListHeader('From', [new NamedAddress('chris@swiftmailer.org', 'Chris '.\$name)]);
        \$header->setCharset('iso-8859-1');
        \$addresses = \$header->getAddressStrings();
        \$this->assertEquals('Chris =?'.\$header->getCharset().'?Q?C=8Frbyn?= <chris@swiftmailer.org>', array_shift(\$addresses));
    }

    public function testGetValueReturnsMailboxStringValue()
    {
        \$header = new MailboxListHeader('From', [new NamedAddress('chris@swiftmailer.org', 'Chris Corbyn')]);
        \$this->assertEquals('Chris Corbyn <chris@swiftmailer.org>', \$header->getBodyAsString());
    }

    public function testGetValueReturnsMailboxStringValueForMultipleMailboxes()
    {
        \$header = new MailboxListHeader('From', [new NamedAddress('chris@swiftmailer.org', 'Chris Corbyn'), new NamedAddress('mark@swiftmailer.org', 'Mark Corbyn')]);
        \$this->assertEquals('Chris Corbyn <chris@swiftmailer.org>, Mark Corbyn <mark@swiftmailer.org>', \$header->getBodyAsString());
    }

    public function testSetBody()
    {
        \$header = new MailboxListHeader('From', []);
        \$header->setBody(\$addresses = [new Address('chris@swiftmailer.org')]);
        \$this->assertEquals(\$addresses, \$header->getAddresses());
    }

    public function testGetBody()
    {
        \$header = new MailboxListHeader('From', \$addresses = [new Address('chris@swiftmailer.org')]);
        \$this->assertEquals(\$addresses, \$header->getBody());
    }

    public function testToString()
    {
        \$header = new MailboxListHeader('From', [new NamedAddress('chris@example.org', 'Chris Corbyn'), new NamedAddress('mark@example.org', 'Mark Corbyn')]);
        \$this->assertEquals('From: Chris Corbyn <chris@example.org>, Mark Corbyn <mark@example.org>', \$header->toString());
    }
}
", "vendor/symfony/mime/Tests/Header/MailboxListHeaderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/mime/Tests/Header/MailboxListHeaderTest.php");
    }
}
