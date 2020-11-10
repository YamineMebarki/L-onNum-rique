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

/* vendor/swiftmailer/swiftmailer/tests/unit/Swift/Mime/MimePartTest.php */
class __TwigTemplate_509279fc519f51cbf1131d812a65a3a5aa4db84d403caaba3f46af00b6b18f63 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Mime/MimePartTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Mime/MimePartTest.php"));

        // line 1
        echo "<?php


class Swift_Mime_MimePartTest extends Swift_Mime_AbstractMimeEntityTest
{
    public function testNestingLevelIsSubpart()
    {
        \$part = \$this->createMimePart(\$this->createHeaderSet(),
            \$this->createEncoder(), \$this->createCache()
            );
        \$this->assertEquals(
            Swift_Mime_SimpleMimeEntity::LEVEL_ALTERNATIVE, \$part->getNestingLevel()
            );
    }

    public function testCharsetIsReturnedFromHeader()
    {
        /* -- RFC 2046, 4.1.2.
        A critical parameter that may be specified in the Content-Type field
        for \"text/plain\" data is the character set.  This is specified with a
        \"charset\" parameter, as in:

     Content-type: text/plain; charset=iso-8859-1

        Unlike some other parameter values, the values of the charset
        parameter are NOT case sensitive.  The default character set, which
        must be assumed in the absence of a charset parameter, is US-ASCII.
        */

        \$cType = \$this->createHeader('Content-Type', 'text/plain',
            ['charset' => 'iso-8859-1']
            );
        \$part = \$this->createMimePart(\$this->createHeaderSet([
            'Content-Type' => \$cType, ]),
            \$this->createEncoder(), \$this->createCache()
            );
        \$this->assertEquals('iso-8859-1', \$part->getCharset());
    }

    public function testCharsetIsSetInHeader()
    {
        \$cType = \$this->createHeader('Content-Type', 'text/plain',
            ['charset' => 'iso-8859-1'], false
            );
        \$cType->shouldReceive('setParameter')->once()->with('charset', 'utf-8');

        \$part = \$this->createMimePart(\$this->createHeaderSet([
            'Content-Type' => \$cType, ]),
            \$this->createEncoder(), \$this->createCache()
            );
        \$part->setCharset('utf-8');
    }

    public function testCharsetIsSetInHeaderIfPassedToSetBody()
    {
        \$cType = \$this->createHeader('Content-Type', 'text/plain',
            ['charset' => 'iso-8859-1'], false
            );
        \$cType->shouldReceive('setParameter')->once()->with('charset', 'utf-8');

        \$part = \$this->createMimePart(\$this->createHeaderSet([
            'Content-Type' => \$cType, ]),
            \$this->createEncoder(), \$this->createCache()
            );
        \$part->setBody('', 'text/plian', 'utf-8');
    }

    public function testSettingCharsetNotifiesEncoder()
    {
        \$encoder = \$this->createEncoder('quoted-printable', false);
        \$encoder->expects(\$this->once())
                ->method('charsetChanged')
                ->with('utf-8');

        \$part = \$this->createMimePart(\$this->createHeaderSet(),
            \$encoder, \$this->createCache()
            );
        \$part->setCharset('utf-8');
    }

    public function testSettingCharsetNotifiesHeaders()
    {
        \$headers = \$this->createHeaderSet([], false);
        \$headers->shouldReceive('charsetChanged')
                ->zeroOrMoreTimes()
                ->with('utf-8');

        \$part = \$this->createMimePart(\$headers, \$this->createEncoder(),
            \$this->createCache()
            );
        \$part->setCharset('utf-8');
    }

    public function testSettingCharsetNotifiesChildren()
    {
        \$child = \$this->createChild(0, '', false);
        \$child->shouldReceive('charsetChanged')
              ->once()
              ->with('windows-874');

        \$part = \$this->createMimePart(\$this->createHeaderSet(),
            \$this->createEncoder(), \$this->createCache()
            );
        \$part->setChildren([\$child]);
        \$part->setCharset('windows-874');
    }

    public function testCharsetChangeUpdatesCharset()
    {
        \$cType = \$this->createHeader('Content-Type', 'text/plain',
            ['charset' => 'iso-8859-1'], false
            );
        \$cType->shouldReceive('setParameter')->once()->with('charset', 'utf-8');

        \$part = \$this->createMimePart(\$this->createHeaderSet([
            'Content-Type' => \$cType, ]),
            \$this->createEncoder(), \$this->createCache()
            );
        \$part->charsetChanged('utf-8');
    }

    public function testSettingCharsetClearsCache()
    {
        \$headers = \$this->createHeaderSet([], false);
        \$headers->shouldReceive('toString')
                ->zeroOrMoreTimes()
                ->andReturn(\"Content-Type: text/plain; charset=utf-8\\r\\n\");

        \$cache = \$this->createCache(false);

        \$entity = \$this->createEntity(\$headers, \$this->createEncoder(),
            \$cache
            );

        \$entity->setBody(\"blah\\r\\nblah!\");
        \$entity->toString();

        // Initialize the expectation here because we only care about what happens in setCharset()
        \$cache->shouldReceive('clearKey')
                ->once()
                ->with(\\Mockery::any(), 'body');

        \$entity->setCharset('iso-2022');
    }

    public function testFormatIsReturnedFromHeader()
    {
        /* -- RFC 3676.
     */

        \$cType = \$this->createHeader('Content-Type', 'text/plain',
            ['format' => 'flowed']
            );
        \$part = \$this->createMimePart(\$this->createHeaderSet([
            'Content-Type' => \$cType, ]),
            \$this->createEncoder(), \$this->createCache()
            );
        \$this->assertEquals('flowed', \$part->getFormat());
    }

    public function testFormatIsSetInHeader()
    {
        \$cType = \$this->createHeader('Content-Type', 'text/plain', [], false);
        \$cType->shouldReceive('setParameter')->once()->with('format', 'fixed');

        \$part = \$this->createMimePart(\$this->createHeaderSet([
            'Content-Type' => \$cType, ]),
            \$this->createEncoder(), \$this->createCache()
            );
        \$part->setFormat('fixed');
    }

    public function testDelSpIsReturnedFromHeader()
    {
        /* -- RFC 3676.
     */

        \$cType = \$this->createHeader('Content-Type', 'text/plain',
            ['delsp' => 'no']
            );
        \$part = \$this->createMimePart(\$this->createHeaderSet([
            'Content-Type' => \$cType, ]),
            \$this->createEncoder(), \$this->createCache()
            );
        \$this->assertFalse(\$part->getDelSp());
    }

    public function testDelSpIsSetInHeader()
    {
        \$cType = \$this->createHeader('Content-Type', 'text/plain', [], false);
        \$cType->shouldReceive('setParameter')->once()->with('delsp', 'yes');

        \$part = \$this->createMimePart(\$this->createHeaderSet([
            'Content-Type' => \$cType, ]),
            \$this->createEncoder(), \$this->createCache()
            );
        \$part->setDelSp(true);
    }

    public function testFluidInterface()
    {
        \$part = \$this->createMimePart(\$this->createHeaderSet(),
            \$this->createEncoder(), \$this->createCache()
            );

        \$this->assertSame(\$part,
            \$part
            ->setContentType('text/plain')
            ->setEncoder(\$this->createEncoder())
            ->setId('foo@bar')
            ->setDescription('my description')
            ->setMaxLineLength(998)
            ->setBody('xx')
            ->setBoundary('xyz')
            ->setChildren([])
            ->setCharset('utf-8')
            ->setFormat('flowed')
            ->setDelSp(true)
            );
    }

    //abstract
    protected function createEntity(\$headers, \$encoder, \$cache)
    {
        return \$this->createMimePart(\$headers, \$encoder, \$cache);
    }

    protected function createMimePart(\$headers, \$encoder, \$cache)
    {
        \$idGenerator = new Swift_Mime_IdGenerator('example.com');

        return new Swift_Mime_MimePart(\$headers, \$encoder, \$cache, \$idGenerator);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Mime/MimePartTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php


class Swift_Mime_MimePartTest extends Swift_Mime_AbstractMimeEntityTest
{
    public function testNestingLevelIsSubpart()
    {
        \$part = \$this->createMimePart(\$this->createHeaderSet(),
            \$this->createEncoder(), \$this->createCache()
            );
        \$this->assertEquals(
            Swift_Mime_SimpleMimeEntity::LEVEL_ALTERNATIVE, \$part->getNestingLevel()
            );
    }

    public function testCharsetIsReturnedFromHeader()
    {
        /* -- RFC 2046, 4.1.2.
        A critical parameter that may be specified in the Content-Type field
        for \"text/plain\" data is the character set.  This is specified with a
        \"charset\" parameter, as in:

     Content-type: text/plain; charset=iso-8859-1

        Unlike some other parameter values, the values of the charset
        parameter are NOT case sensitive.  The default character set, which
        must be assumed in the absence of a charset parameter, is US-ASCII.
        */

        \$cType = \$this->createHeader('Content-Type', 'text/plain',
            ['charset' => 'iso-8859-1']
            );
        \$part = \$this->createMimePart(\$this->createHeaderSet([
            'Content-Type' => \$cType, ]),
            \$this->createEncoder(), \$this->createCache()
            );
        \$this->assertEquals('iso-8859-1', \$part->getCharset());
    }

    public function testCharsetIsSetInHeader()
    {
        \$cType = \$this->createHeader('Content-Type', 'text/plain',
            ['charset' => 'iso-8859-1'], false
            );
        \$cType->shouldReceive('setParameter')->once()->with('charset', 'utf-8');

        \$part = \$this->createMimePart(\$this->createHeaderSet([
            'Content-Type' => \$cType, ]),
            \$this->createEncoder(), \$this->createCache()
            );
        \$part->setCharset('utf-8');
    }

    public function testCharsetIsSetInHeaderIfPassedToSetBody()
    {
        \$cType = \$this->createHeader('Content-Type', 'text/plain',
            ['charset' => 'iso-8859-1'], false
            );
        \$cType->shouldReceive('setParameter')->once()->with('charset', 'utf-8');

        \$part = \$this->createMimePart(\$this->createHeaderSet([
            'Content-Type' => \$cType, ]),
            \$this->createEncoder(), \$this->createCache()
            );
        \$part->setBody('', 'text/plian', 'utf-8');
    }

    public function testSettingCharsetNotifiesEncoder()
    {
        \$encoder = \$this->createEncoder('quoted-printable', false);
        \$encoder->expects(\$this->once())
                ->method('charsetChanged')
                ->with('utf-8');

        \$part = \$this->createMimePart(\$this->createHeaderSet(),
            \$encoder, \$this->createCache()
            );
        \$part->setCharset('utf-8');
    }

    public function testSettingCharsetNotifiesHeaders()
    {
        \$headers = \$this->createHeaderSet([], false);
        \$headers->shouldReceive('charsetChanged')
                ->zeroOrMoreTimes()
                ->with('utf-8');

        \$part = \$this->createMimePart(\$headers, \$this->createEncoder(),
            \$this->createCache()
            );
        \$part->setCharset('utf-8');
    }

    public function testSettingCharsetNotifiesChildren()
    {
        \$child = \$this->createChild(0, '', false);
        \$child->shouldReceive('charsetChanged')
              ->once()
              ->with('windows-874');

        \$part = \$this->createMimePart(\$this->createHeaderSet(),
            \$this->createEncoder(), \$this->createCache()
            );
        \$part->setChildren([\$child]);
        \$part->setCharset('windows-874');
    }

    public function testCharsetChangeUpdatesCharset()
    {
        \$cType = \$this->createHeader('Content-Type', 'text/plain',
            ['charset' => 'iso-8859-1'], false
            );
        \$cType->shouldReceive('setParameter')->once()->with('charset', 'utf-8');

        \$part = \$this->createMimePart(\$this->createHeaderSet([
            'Content-Type' => \$cType, ]),
            \$this->createEncoder(), \$this->createCache()
            );
        \$part->charsetChanged('utf-8');
    }

    public function testSettingCharsetClearsCache()
    {
        \$headers = \$this->createHeaderSet([], false);
        \$headers->shouldReceive('toString')
                ->zeroOrMoreTimes()
                ->andReturn(\"Content-Type: text/plain; charset=utf-8\\r\\n\");

        \$cache = \$this->createCache(false);

        \$entity = \$this->createEntity(\$headers, \$this->createEncoder(),
            \$cache
            );

        \$entity->setBody(\"blah\\r\\nblah!\");
        \$entity->toString();

        // Initialize the expectation here because we only care about what happens in setCharset()
        \$cache->shouldReceive('clearKey')
                ->once()
                ->with(\\Mockery::any(), 'body');

        \$entity->setCharset('iso-2022');
    }

    public function testFormatIsReturnedFromHeader()
    {
        /* -- RFC 3676.
     */

        \$cType = \$this->createHeader('Content-Type', 'text/plain',
            ['format' => 'flowed']
            );
        \$part = \$this->createMimePart(\$this->createHeaderSet([
            'Content-Type' => \$cType, ]),
            \$this->createEncoder(), \$this->createCache()
            );
        \$this->assertEquals('flowed', \$part->getFormat());
    }

    public function testFormatIsSetInHeader()
    {
        \$cType = \$this->createHeader('Content-Type', 'text/plain', [], false);
        \$cType->shouldReceive('setParameter')->once()->with('format', 'fixed');

        \$part = \$this->createMimePart(\$this->createHeaderSet([
            'Content-Type' => \$cType, ]),
            \$this->createEncoder(), \$this->createCache()
            );
        \$part->setFormat('fixed');
    }

    public function testDelSpIsReturnedFromHeader()
    {
        /* -- RFC 3676.
     */

        \$cType = \$this->createHeader('Content-Type', 'text/plain',
            ['delsp' => 'no']
            );
        \$part = \$this->createMimePart(\$this->createHeaderSet([
            'Content-Type' => \$cType, ]),
            \$this->createEncoder(), \$this->createCache()
            );
        \$this->assertFalse(\$part->getDelSp());
    }

    public function testDelSpIsSetInHeader()
    {
        \$cType = \$this->createHeader('Content-Type', 'text/plain', [], false);
        \$cType->shouldReceive('setParameter')->once()->with('delsp', 'yes');

        \$part = \$this->createMimePart(\$this->createHeaderSet([
            'Content-Type' => \$cType, ]),
            \$this->createEncoder(), \$this->createCache()
            );
        \$part->setDelSp(true);
    }

    public function testFluidInterface()
    {
        \$part = \$this->createMimePart(\$this->createHeaderSet(),
            \$this->createEncoder(), \$this->createCache()
            );

        \$this->assertSame(\$part,
            \$part
            ->setContentType('text/plain')
            ->setEncoder(\$this->createEncoder())
            ->setId('foo@bar')
            ->setDescription('my description')
            ->setMaxLineLength(998)
            ->setBody('xx')
            ->setBoundary('xyz')
            ->setChildren([])
            ->setCharset('utf-8')
            ->setFormat('flowed')
            ->setDelSp(true)
            );
    }

    //abstract
    protected function createEntity(\$headers, \$encoder, \$cache)
    {
        return \$this->createMimePart(\$headers, \$encoder, \$cache);
    }

    protected function createMimePart(\$headers, \$encoder, \$cache)
    {
        \$idGenerator = new Swift_Mime_IdGenerator('example.com');

        return new Swift_Mime_MimePart(\$headers, \$encoder, \$cache, \$idGenerator);
    }
}
", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Mime/MimePartTest.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/unit/Swift/Mime/MimePartTest.php");
    }
}
