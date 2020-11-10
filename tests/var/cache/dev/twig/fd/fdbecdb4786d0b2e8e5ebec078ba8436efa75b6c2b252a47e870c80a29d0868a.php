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

/* vendor/symfony/mime/Tests/Header/HeadersTest.php */
class __TwigTemplate_896a6644aeea9915ceb29d9f4322b58c0d831b1128d9efe234337a8c6d29dbea extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Tests/Header/HeadersTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Tests/Header/HeadersTest.php"));

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
use Symfony\\Component\\Mime\\Header\\Headers;
use Symfony\\Component\\Mime\\Header\\IdentificationHeader;
use Symfony\\Component\\Mime\\Header\\MailboxListHeader;
use Symfony\\Component\\Mime\\Header\\UnstructuredHeader;

class HeadersTest extends TestCase
{
    public function testAddMailboxListHeaderDelegatesToFactory()
    {
        \$headers = new Headers();
        \$headers->addMailboxListHeader('From', ['person@domain']);
        \$this->assertNotNull(\$headers->get('From'));
    }

    public function testAddDateHeaderDelegatesToFactory()
    {
        \$dateTime = new \\DateTimeImmutable();
        \$headers = new Headers();
        \$headers->addDateHeader('Date', \$dateTime);
        \$this->assertNotNull(\$headers->get('Date'));
    }

    public function testAddTextHeaderDelegatesToFactory()
    {
        \$headers = new Headers();
        \$headers->addTextHeader('Subject', 'some text');
        \$this->assertNotNull(\$headers->get('Subject'));
    }

    public function testAddParameterizedHeaderDelegatesToFactory()
    {
        \$headers = new Headers();
        \$headers->addParameterizedHeader('Content-Type', 'text/plain', ['charset' => 'utf-8']);
        \$this->assertNotNull(\$headers->get('Content-Type'));
    }

    public function testAddIdHeaderDelegatesToFactory()
    {
        \$headers = new Headers();
        \$headers->addIdHeader('Message-ID', 'some@id');
        \$this->assertNotNull(\$headers->get('Message-ID'));
    }

    public function testAddPathHeaderDelegatesToFactory()
    {
        \$headers = new Headers();
        \$headers->addPathHeader('Return-Path', 'some@path');
        \$this->assertNotNull(\$headers->get('Return-Path'));
    }

    public function testHasReturnsFalseWhenNoHeaders()
    {
        \$headers = new Headers();
        \$this->assertFalse(\$headers->has('Some-Header'));
    }

    public function testAddedMailboxListHeaderIsSeenByHas()
    {
        \$headers = new Headers();
        \$headers->addMailboxListHeader('From', ['person@domain']);
        \$this->assertTrue(\$headers->has('From'));
    }

    public function testAddedDateHeaderIsSeenByHas()
    {
        \$dateTime = new \\DateTimeImmutable();
        \$headers = new Headers();
        \$headers->addDateHeader('Date', \$dateTime);
        \$this->assertTrue(\$headers->has('Date'));
    }

    public function testAddedTextHeaderIsSeenByHas()
    {
        \$headers = new Headers();
        \$headers->addTextHeader('Subject', 'some text');
        \$this->assertTrue(\$headers->has('Subject'));
    }

    public function testAddedParameterizedHeaderIsSeenByHas()
    {
        \$headers = new Headers();
        \$headers->addParameterizedHeader('Content-Type', 'text/plain', ['charset' => 'utf-8']);
        \$this->assertTrue(\$headers->has('Content-Type'));
    }

    public function testAddedIdHeaderIsSeenByHas()
    {
        \$headers = new Headers();
        \$headers->addIdHeader('Message-ID', 'some@id');
        \$this->assertTrue(\$headers->has('Message-ID'));
    }

    public function testAddedPathHeaderIsSeenByHas()
    {
        \$headers = new Headers();
        \$headers->addPathHeader('Return-Path', 'some@path');
        \$this->assertTrue(\$headers->has('Return-Path'));
    }

    public function testNewlySetHeaderIsSeenByHas()
    {
        \$headers = new Headers();
        \$headers->add(new UnstructuredHeader('X-Foo', 'bar'));
        \$this->assertTrue(\$headers->has('X-Foo'));
    }

    public function testHasCanDistinguishMultipleHeaders()
    {
        \$headers = new Headers();
        \$headers->addTextHeader('X-DevLaon', 'some@id');
        \$headers->addTextHeader('X-DevLaon', 'other@id');
        \$this->assertTrue(\$headers->has('X-DevLaon'));
    }

    public function testGet()
    {
        \$header = new IdentificationHeader('Message-ID', 'some@id');
        \$headers = new Headers();
        \$headers->addIdHeader('Message-ID', 'some@id');
        \$this->assertEquals(\$header->toString(), \$headers->get('Message-ID')->toString());
    }

    public function testGetReturnsNullIfHeaderNotSet()
    {
        \$headers = new Headers();
        \$this->assertNull(\$headers->get('Message-ID'));
    }

    public function testAllReturnsAllHeadersMatchingName()
    {
        \$header0 = new UnstructuredHeader('X-DevLaon', 'some@id');
        \$header1 = new UnstructuredHeader('X-DevLaon', 'other@id');
        \$header2 = new UnstructuredHeader('X-DevLaon', 'more@id');
        \$headers = new Headers();
        \$headers->addTextHeader('X-DevLaon', 'some@id');
        \$headers->addTextHeader('X-DevLaon', 'other@id');
        \$headers->addTextHeader('X-DevLaon', 'more@id');
        \$this->assertEquals([\$header0, \$header1, \$header2], iterator_to_array(\$headers->all('X-DevLaon')));
    }

    public function testAllReturnsAllHeadersIfNoArguments()
    {
        \$header0 = new IdentificationHeader('Message-ID', 'some@id');
        \$header1 = new UnstructuredHeader('Subject', 'thing');
        \$header2 = new MailboxListHeader('To', [new Address('person@example.org')]);
        \$headers = new Headers();
        \$headers->addIdHeader('Message-ID', 'some@id');
        \$headers->addTextHeader('Subject', 'thing');
        \$headers->addMailboxListHeader('To', [new Address('person@example.org')]);
        \$this->assertEquals(['message-id' => \$header0, 'subject' => \$header1, 'to' => \$header2], iterator_to_array(\$headers->all()));
    }

    public function testAllReturnsEmptyArrayIfNoneSet()
    {
        \$headers = new Headers();
        \$this->assertEquals([], iterator_to_array(\$headers->all('Received')));
    }

    public function testRemoveRemovesAllHeadersWithName()
    {
        \$header0 = new UnstructuredHeader('X-DevLaon', 'some@id');
        \$header1 = new UnstructuredHeader('X-DevLaon', 'other@id');
        \$headers = new Headers();
        \$headers->addIdHeader('X-DevLaon', 'some@id');
        \$headers->addIdHeader('X-DevLaon', 'other@id');
        \$headers->remove('X-DevLaon');
        \$this->assertFalse(\$headers->has('X-DevLaon'));
        \$this->assertFalse(\$headers->has('X-DevLaon'));
    }

    public function testHasIsNotCaseSensitive()
    {
        \$header = new IdentificationHeader('Message-ID', 'some@id');
        \$headers = new Headers();
        \$headers->addIdHeader('Message-ID', 'some@id');
        \$this->assertTrue(\$headers->has('message-id'));
    }

    public function testGetIsNotCaseSensitive()
    {
        \$header = new IdentificationHeader('Message-ID', 'some@id');
        \$headers = new Headers();
        \$headers->addIdHeader('Message-ID', 'some@id');
        \$this->assertEquals(\$header, \$headers->get('message-id'));
    }

    public function testAllIsNotCaseSensitive()
    {
        \$header = new IdentificationHeader('Message-ID', 'some@id');
        \$headers = new Headers();
        \$headers->addIdHeader('Message-ID', 'some@id');
        \$this->assertEquals([\$header], iterator_to_array(\$headers->all('message-id')));
    }

    public function testRemoveIsNotCaseSensitive()
    {
        \$header = new IdentificationHeader('Message-ID', 'some@id');
        \$headers = new Headers();
        \$headers->addIdHeader('Message-ID', 'some@id');
        \$headers->remove('message-id');
        \$this->assertFalse(\$headers->has('Message-ID'));
    }

    public function testToStringJoinsHeadersTogether()
    {
        \$headers = new Headers();
        \$headers->addTextHeader('Foo', 'bar');
        \$headers->addTextHeader('Zip', 'buttons');
        \$this->assertEquals(\"Foo: bar\\r\\nZip: buttons\\r\\n\", \$headers->toString());
    }

    public function testHeadersWithoutBodiesAreNotDisplayed()
    {
        \$headers = new Headers();
        \$headers->addTextHeader('Foo', 'bar');
        \$headers->addTextHeader('Zip', '');
        \$this->assertEquals(\"Foo: bar\\r\\n\", \$headers->toString());
    }

    public function testToArray()
    {
        \$headers = new Headers();
        \$headers->addIdHeader('Message-ID', 'some@id');
        \$headers->addTextHeader('Foo', str_repeat('a', 60).pack('C', 0x8F));
        \$this->assertEquals([
            'Message-ID: <some@id>',
            \"Foo: =?utf-8?Q?aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa?=\\r\\n =?utf-8?Q?aaaa?=\",
        ], \$headers->toArray());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/mime/Tests/Header/HeadersTest.php";
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
use Symfony\\Component\\Mime\\Header\\Headers;
use Symfony\\Component\\Mime\\Header\\IdentificationHeader;
use Symfony\\Component\\Mime\\Header\\MailboxListHeader;
use Symfony\\Component\\Mime\\Header\\UnstructuredHeader;

class HeadersTest extends TestCase
{
    public function testAddMailboxListHeaderDelegatesToFactory()
    {
        \$headers = new Headers();
        \$headers->addMailboxListHeader('From', ['person@domain']);
        \$this->assertNotNull(\$headers->get('From'));
    }

    public function testAddDateHeaderDelegatesToFactory()
    {
        \$dateTime = new \\DateTimeImmutable();
        \$headers = new Headers();
        \$headers->addDateHeader('Date', \$dateTime);
        \$this->assertNotNull(\$headers->get('Date'));
    }

    public function testAddTextHeaderDelegatesToFactory()
    {
        \$headers = new Headers();
        \$headers->addTextHeader('Subject', 'some text');
        \$this->assertNotNull(\$headers->get('Subject'));
    }

    public function testAddParameterizedHeaderDelegatesToFactory()
    {
        \$headers = new Headers();
        \$headers->addParameterizedHeader('Content-Type', 'text/plain', ['charset' => 'utf-8']);
        \$this->assertNotNull(\$headers->get('Content-Type'));
    }

    public function testAddIdHeaderDelegatesToFactory()
    {
        \$headers = new Headers();
        \$headers->addIdHeader('Message-ID', 'some@id');
        \$this->assertNotNull(\$headers->get('Message-ID'));
    }

    public function testAddPathHeaderDelegatesToFactory()
    {
        \$headers = new Headers();
        \$headers->addPathHeader('Return-Path', 'some@path');
        \$this->assertNotNull(\$headers->get('Return-Path'));
    }

    public function testHasReturnsFalseWhenNoHeaders()
    {
        \$headers = new Headers();
        \$this->assertFalse(\$headers->has('Some-Header'));
    }

    public function testAddedMailboxListHeaderIsSeenByHas()
    {
        \$headers = new Headers();
        \$headers->addMailboxListHeader('From', ['person@domain']);
        \$this->assertTrue(\$headers->has('From'));
    }

    public function testAddedDateHeaderIsSeenByHas()
    {
        \$dateTime = new \\DateTimeImmutable();
        \$headers = new Headers();
        \$headers->addDateHeader('Date', \$dateTime);
        \$this->assertTrue(\$headers->has('Date'));
    }

    public function testAddedTextHeaderIsSeenByHas()
    {
        \$headers = new Headers();
        \$headers->addTextHeader('Subject', 'some text');
        \$this->assertTrue(\$headers->has('Subject'));
    }

    public function testAddedParameterizedHeaderIsSeenByHas()
    {
        \$headers = new Headers();
        \$headers->addParameterizedHeader('Content-Type', 'text/plain', ['charset' => 'utf-8']);
        \$this->assertTrue(\$headers->has('Content-Type'));
    }

    public function testAddedIdHeaderIsSeenByHas()
    {
        \$headers = new Headers();
        \$headers->addIdHeader('Message-ID', 'some@id');
        \$this->assertTrue(\$headers->has('Message-ID'));
    }

    public function testAddedPathHeaderIsSeenByHas()
    {
        \$headers = new Headers();
        \$headers->addPathHeader('Return-Path', 'some@path');
        \$this->assertTrue(\$headers->has('Return-Path'));
    }

    public function testNewlySetHeaderIsSeenByHas()
    {
        \$headers = new Headers();
        \$headers->add(new UnstructuredHeader('X-Foo', 'bar'));
        \$this->assertTrue(\$headers->has('X-Foo'));
    }

    public function testHasCanDistinguishMultipleHeaders()
    {
        \$headers = new Headers();
        \$headers->addTextHeader('X-DevLaon', 'some@id');
        \$headers->addTextHeader('X-DevLaon', 'other@id');
        \$this->assertTrue(\$headers->has('X-DevLaon'));
    }

    public function testGet()
    {
        \$header = new IdentificationHeader('Message-ID', 'some@id');
        \$headers = new Headers();
        \$headers->addIdHeader('Message-ID', 'some@id');
        \$this->assertEquals(\$header->toString(), \$headers->get('Message-ID')->toString());
    }

    public function testGetReturnsNullIfHeaderNotSet()
    {
        \$headers = new Headers();
        \$this->assertNull(\$headers->get('Message-ID'));
    }

    public function testAllReturnsAllHeadersMatchingName()
    {
        \$header0 = new UnstructuredHeader('X-DevLaon', 'some@id');
        \$header1 = new UnstructuredHeader('X-DevLaon', 'other@id');
        \$header2 = new UnstructuredHeader('X-DevLaon', 'more@id');
        \$headers = new Headers();
        \$headers->addTextHeader('X-DevLaon', 'some@id');
        \$headers->addTextHeader('X-DevLaon', 'other@id');
        \$headers->addTextHeader('X-DevLaon', 'more@id');
        \$this->assertEquals([\$header0, \$header1, \$header2], iterator_to_array(\$headers->all('X-DevLaon')));
    }

    public function testAllReturnsAllHeadersIfNoArguments()
    {
        \$header0 = new IdentificationHeader('Message-ID', 'some@id');
        \$header1 = new UnstructuredHeader('Subject', 'thing');
        \$header2 = new MailboxListHeader('To', [new Address('person@example.org')]);
        \$headers = new Headers();
        \$headers->addIdHeader('Message-ID', 'some@id');
        \$headers->addTextHeader('Subject', 'thing');
        \$headers->addMailboxListHeader('To', [new Address('person@example.org')]);
        \$this->assertEquals(['message-id' => \$header0, 'subject' => \$header1, 'to' => \$header2], iterator_to_array(\$headers->all()));
    }

    public function testAllReturnsEmptyArrayIfNoneSet()
    {
        \$headers = new Headers();
        \$this->assertEquals([], iterator_to_array(\$headers->all('Received')));
    }

    public function testRemoveRemovesAllHeadersWithName()
    {
        \$header0 = new UnstructuredHeader('X-DevLaon', 'some@id');
        \$header1 = new UnstructuredHeader('X-DevLaon', 'other@id');
        \$headers = new Headers();
        \$headers->addIdHeader('X-DevLaon', 'some@id');
        \$headers->addIdHeader('X-DevLaon', 'other@id');
        \$headers->remove('X-DevLaon');
        \$this->assertFalse(\$headers->has('X-DevLaon'));
        \$this->assertFalse(\$headers->has('X-DevLaon'));
    }

    public function testHasIsNotCaseSensitive()
    {
        \$header = new IdentificationHeader('Message-ID', 'some@id');
        \$headers = new Headers();
        \$headers->addIdHeader('Message-ID', 'some@id');
        \$this->assertTrue(\$headers->has('message-id'));
    }

    public function testGetIsNotCaseSensitive()
    {
        \$header = new IdentificationHeader('Message-ID', 'some@id');
        \$headers = new Headers();
        \$headers->addIdHeader('Message-ID', 'some@id');
        \$this->assertEquals(\$header, \$headers->get('message-id'));
    }

    public function testAllIsNotCaseSensitive()
    {
        \$header = new IdentificationHeader('Message-ID', 'some@id');
        \$headers = new Headers();
        \$headers->addIdHeader('Message-ID', 'some@id');
        \$this->assertEquals([\$header], iterator_to_array(\$headers->all('message-id')));
    }

    public function testRemoveIsNotCaseSensitive()
    {
        \$header = new IdentificationHeader('Message-ID', 'some@id');
        \$headers = new Headers();
        \$headers->addIdHeader('Message-ID', 'some@id');
        \$headers->remove('message-id');
        \$this->assertFalse(\$headers->has('Message-ID'));
    }

    public function testToStringJoinsHeadersTogether()
    {
        \$headers = new Headers();
        \$headers->addTextHeader('Foo', 'bar');
        \$headers->addTextHeader('Zip', 'buttons');
        \$this->assertEquals(\"Foo: bar\\r\\nZip: buttons\\r\\n\", \$headers->toString());
    }

    public function testHeadersWithoutBodiesAreNotDisplayed()
    {
        \$headers = new Headers();
        \$headers->addTextHeader('Foo', 'bar');
        \$headers->addTextHeader('Zip', '');
        \$this->assertEquals(\"Foo: bar\\r\\n\", \$headers->toString());
    }

    public function testToArray()
    {
        \$headers = new Headers();
        \$headers->addIdHeader('Message-ID', 'some@id');
        \$headers->addTextHeader('Foo', str_repeat('a', 60).pack('C', 0x8F));
        \$this->assertEquals([
            'Message-ID: <some@id>',
            \"Foo: =?utf-8?Q?aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa?=\\r\\n =?utf-8?Q?aaaa?=\",
        ], \$headers->toArray());
    }
}
", "vendor/symfony/mime/Tests/Header/HeadersTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/mime/Tests/Header/HeadersTest.php");
    }
}
