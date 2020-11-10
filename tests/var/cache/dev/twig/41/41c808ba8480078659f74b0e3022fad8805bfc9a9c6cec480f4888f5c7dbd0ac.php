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

/* vendor/symfony/mime/Tests/Header/IdentificationHeaderTest.php */
class __TwigTemplate_8cea6821a98e8cf65abd332701fbd162c63f5e75ac51192adbf964622da6f68d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Tests/Header/IdentificationHeaderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Tests/Header/IdentificationHeaderTest.php"));

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
use Symfony\\Component\\Mime\\Header\\IdentificationHeader;

class IdentificationHeaderTest extends TestCase
{
    public function testValueMatchesMsgIdSpec()
    {
        /* -- RFC 2822, 3.6.4.
         message-id      =       \"Message-ID:\" msg-id CRLF

         in-reply-to     =       \"In-Reply-To:\" 1*msg-id CRLF

         references      =       \"References:\" 1*msg-id CRLF

         msg-id          =       [CFWS] \"<\" id-left \"@\" id-right \">\" [CFWS]

         id-left         =       dot-atom-text / no-fold-quote / obs-id-left

         id-right        =       dot-atom-text / no-fold-literal / obs-id-right

         no-fold-quote   =       DQUOTE *(qtext / quoted-pair) DQUOTE

         no-fold-literal =       \"[\" *(dtext / quoted-pair) \"]\"
        */

        \$header = new IdentificationHeader('Message-ID', 'id-left@id-right');
        \$this->assertEquals('<id-left@id-right>', \$header->getBodyAsString());
    }

    public function testIdCanBeRetrievedVerbatim()
    {
        \$header = new IdentificationHeader('Message-ID', 'id-left@id-right');
        \$this->assertEquals('id-left@id-right', \$header->getId());
    }

    public function testMultipleIdsCanBeSet()
    {
        \$header = new IdentificationHeader('References', 'c@d');
        \$header->setIds(['a@b', 'x@y']);
        \$this->assertEquals(['a@b', 'x@y'], \$header->getIds());
    }

    public function testSettingMultipleIdsProducesAListValue()
    {
        /* -- RFC 2822, 3.6.4.
        The \"References:\" and \"In-Reply-To:\" field each contain one or more
        unique message identifiers, optionally separated by CFWS.

         .. SNIP ..

         in-reply-to     =       \"In-Reply-To:\" 1*msg-id CRLF

         references      =       \"References:\" 1*msg-id CRLF
         */

        \$header = new IdentificationHeader('References', ['a@b', 'x@y']);
        \$this->assertEquals('<a@b> <x@y>', \$header->getBodyAsString());
    }

    public function testIdLeftCanBeQuoted()
    {
        /* -- RFC 2822, 3.6.4.
         id-left         =       dot-atom-text / no-fold-quote / obs-id-left
         */

        \$header = new IdentificationHeader('References', '\"ab\"@c');
        \$this->assertEquals('\"ab\"@c', \$header->getId());
        \$this->assertEquals('<\"ab\"@c>', \$header->getBodyAsString());
    }

    public function testIdLeftCanContainAnglesAsQuotedPairs()
    {
        /* -- RFC 2822, 3.6.4.
         no-fold-quote   =       DQUOTE *(qtext / quoted-pair) DQUOTE
         */

        \$header = new IdentificationHeader('References', '\"a\\\\<\\\\>b\"@c');
        \$this->assertEquals('\"a\\\\<\\\\>b\"@c', \$header->getId());
        \$this->assertEquals('<\"a\\\\<\\\\>b\"@c>', \$header->getBodyAsString());
    }

    public function testIdLeftCanBeDotAtom()
    {
        \$header = new IdentificationHeader('References', 'a.b+&%\$.c@d');
        \$this->assertEquals('a.b+&%\$.c@d', \$header->getId());
        \$this->assertEquals('<a.b+&%\$.c@d>', \$header->getBodyAsString());
    }

    public function testInvalidIdLeftThrowsException()
    {
        \$this->expectException('Exception');
        \$this->expectExceptionMessage('Email \"a b c@d\" does not comply with addr-spec of RFC 2822.');
        \$header = new IdentificationHeader('References', 'a b c@d');
    }

    public function testIdRightCanBeDotAtom()
    {
        /* -- RFC 2822, 3.6.4.
         id-right        =       dot-atom-text / no-fold-literal / obs-id-right
         */

        \$header = new IdentificationHeader('References', 'a@b.c+&%\$.d');
        \$this->assertEquals('a@b.c+&%\$.d', \$header->getId());
        \$this->assertEquals('<a@b.c+&%\$.d>', \$header->getBodyAsString());
    }

    public function testIdRightCanBeLiteral()
    {
        /* -- RFC 2822, 3.6.4.
         no-fold-literal =       \"[\" *(dtext / quoted-pair) \"]\"
        */

        \$header = new IdentificationHeader('References', 'a@[1.2.3.4]');
        \$this->assertEquals('a@[1.2.3.4]', \$header->getId());
        \$this->assertEquals('<a@[1.2.3.4]>', \$header->getBodyAsString());
    }

    public function testIdRigthIsIdnEncoded()
    {
        \$header = new IdentificationHeader('References', 'a@ä');
        \$this->assertEquals('a@ä', \$header->getId());
        \$this->assertEquals('<a@xn--4ca>', \$header->getBodyAsString());
    }

    public function testInvalidIdRightThrowsException()
    {
        \$this->expectException('Exception');
        \$this->expectExceptionMessage('Email \"a@b c d\" does not comply with addr-spec of RFC 2822.');
        \$header = new IdentificationHeader('References', 'a@b c d');
    }

    public function testMissingAtSignThrowsException()
    {
        \$this->expectException('Exception');
        \$this->expectExceptionMessage('Email \"abc\" does not comply with addr-spec of RFC 2822.');
        /* -- RFC 2822, 3.6.4.
         msg-id          =       [CFWS] \"<\" id-left \"@\" id-right \">\" [CFWS]
         */
        \$header = new IdentificationHeader('References', 'abc');
    }

    public function testSetBody()
    {
        \$header = new IdentificationHeader('Message-ID', 'c@d');
        \$header->setBody('a@b');
        \$this->assertEquals(['a@b'], \$header->getIds());
    }

    public function testGetBody()
    {
        \$header = new IdentificationHeader('Message-ID', 'a@b');
        \$this->assertEquals(['a@b'], \$header->getBody());
    }

    public function testStringValue()
    {
        \$header = new IdentificationHeader('References', ['a@b', 'x@y']);
        \$this->assertEquals('References: <a@b> <x@y>', \$header->toString());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/mime/Tests/Header/IdentificationHeaderTest.php";
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
use Symfony\\Component\\Mime\\Header\\IdentificationHeader;

class IdentificationHeaderTest extends TestCase
{
    public function testValueMatchesMsgIdSpec()
    {
        /* -- RFC 2822, 3.6.4.
         message-id      =       \"Message-ID:\" msg-id CRLF

         in-reply-to     =       \"In-Reply-To:\" 1*msg-id CRLF

         references      =       \"References:\" 1*msg-id CRLF

         msg-id          =       [CFWS] \"<\" id-left \"@\" id-right \">\" [CFWS]

         id-left         =       dot-atom-text / no-fold-quote / obs-id-left

         id-right        =       dot-atom-text / no-fold-literal / obs-id-right

         no-fold-quote   =       DQUOTE *(qtext / quoted-pair) DQUOTE

         no-fold-literal =       \"[\" *(dtext / quoted-pair) \"]\"
        */

        \$header = new IdentificationHeader('Message-ID', 'id-left@id-right');
        \$this->assertEquals('<id-left@id-right>', \$header->getBodyAsString());
    }

    public function testIdCanBeRetrievedVerbatim()
    {
        \$header = new IdentificationHeader('Message-ID', 'id-left@id-right');
        \$this->assertEquals('id-left@id-right', \$header->getId());
    }

    public function testMultipleIdsCanBeSet()
    {
        \$header = new IdentificationHeader('References', 'c@d');
        \$header->setIds(['a@b', 'x@y']);
        \$this->assertEquals(['a@b', 'x@y'], \$header->getIds());
    }

    public function testSettingMultipleIdsProducesAListValue()
    {
        /* -- RFC 2822, 3.6.4.
        The \"References:\" and \"In-Reply-To:\" field each contain one or more
        unique message identifiers, optionally separated by CFWS.

         .. SNIP ..

         in-reply-to     =       \"In-Reply-To:\" 1*msg-id CRLF

         references      =       \"References:\" 1*msg-id CRLF
         */

        \$header = new IdentificationHeader('References', ['a@b', 'x@y']);
        \$this->assertEquals('<a@b> <x@y>', \$header->getBodyAsString());
    }

    public function testIdLeftCanBeQuoted()
    {
        /* -- RFC 2822, 3.6.4.
         id-left         =       dot-atom-text / no-fold-quote / obs-id-left
         */

        \$header = new IdentificationHeader('References', '\"ab\"@c');
        \$this->assertEquals('\"ab\"@c', \$header->getId());
        \$this->assertEquals('<\"ab\"@c>', \$header->getBodyAsString());
    }

    public function testIdLeftCanContainAnglesAsQuotedPairs()
    {
        /* -- RFC 2822, 3.6.4.
         no-fold-quote   =       DQUOTE *(qtext / quoted-pair) DQUOTE
         */

        \$header = new IdentificationHeader('References', '\"a\\\\<\\\\>b\"@c');
        \$this->assertEquals('\"a\\\\<\\\\>b\"@c', \$header->getId());
        \$this->assertEquals('<\"a\\\\<\\\\>b\"@c>', \$header->getBodyAsString());
    }

    public function testIdLeftCanBeDotAtom()
    {
        \$header = new IdentificationHeader('References', 'a.b+&%\$.c@d');
        \$this->assertEquals('a.b+&%\$.c@d', \$header->getId());
        \$this->assertEquals('<a.b+&%\$.c@d>', \$header->getBodyAsString());
    }

    public function testInvalidIdLeftThrowsException()
    {
        \$this->expectException('Exception');
        \$this->expectExceptionMessage('Email \"a b c@d\" does not comply with addr-spec of RFC 2822.');
        \$header = new IdentificationHeader('References', 'a b c@d');
    }

    public function testIdRightCanBeDotAtom()
    {
        /* -- RFC 2822, 3.6.4.
         id-right        =       dot-atom-text / no-fold-literal / obs-id-right
         */

        \$header = new IdentificationHeader('References', 'a@b.c+&%\$.d');
        \$this->assertEquals('a@b.c+&%\$.d', \$header->getId());
        \$this->assertEquals('<a@b.c+&%\$.d>', \$header->getBodyAsString());
    }

    public function testIdRightCanBeLiteral()
    {
        /* -- RFC 2822, 3.6.4.
         no-fold-literal =       \"[\" *(dtext / quoted-pair) \"]\"
        */

        \$header = new IdentificationHeader('References', 'a@[1.2.3.4]');
        \$this->assertEquals('a@[1.2.3.4]', \$header->getId());
        \$this->assertEquals('<a@[1.2.3.4]>', \$header->getBodyAsString());
    }

    public function testIdRigthIsIdnEncoded()
    {
        \$header = new IdentificationHeader('References', 'a@ä');
        \$this->assertEquals('a@ä', \$header->getId());
        \$this->assertEquals('<a@xn--4ca>', \$header->getBodyAsString());
    }

    public function testInvalidIdRightThrowsException()
    {
        \$this->expectException('Exception');
        \$this->expectExceptionMessage('Email \"a@b c d\" does not comply with addr-spec of RFC 2822.');
        \$header = new IdentificationHeader('References', 'a@b c d');
    }

    public function testMissingAtSignThrowsException()
    {
        \$this->expectException('Exception');
        \$this->expectExceptionMessage('Email \"abc\" does not comply with addr-spec of RFC 2822.');
        /* -- RFC 2822, 3.6.4.
         msg-id          =       [CFWS] \"<\" id-left \"@\" id-right \">\" [CFWS]
         */
        \$header = new IdentificationHeader('References', 'abc');
    }

    public function testSetBody()
    {
        \$header = new IdentificationHeader('Message-ID', 'c@d');
        \$header->setBody('a@b');
        \$this->assertEquals(['a@b'], \$header->getIds());
    }

    public function testGetBody()
    {
        \$header = new IdentificationHeader('Message-ID', 'a@b');
        \$this->assertEquals(['a@b'], \$header->getBody());
    }

    public function testStringValue()
    {
        \$header = new IdentificationHeader('References', ['a@b', 'x@y']);
        \$this->assertEquals('References: <a@b> <x@y>', \$header->toString());
    }
}
", "vendor/symfony/mime/Tests/Header/IdentificationHeaderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/mime/Tests/Header/IdentificationHeaderTest.php");
    }
}
