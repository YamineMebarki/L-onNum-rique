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

/* vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug51Test.php */
class __TwigTemplate_8cf74d77cddbd650bb833b3e4da17fb4affde4b6cc0265df8c03082f12b5b965 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug51Test.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug51Test.php"));

        // line 1
        echo "<?php

class Swift_Bug51Test extends \\SwiftMailerTestCase
{
    private \$attachmentFile;
    private \$outputFile;

    protected function setUp()
    {
        \$this->attachmentFile = sys_get_temp_dir().'/attach.rand.bin';
        file_put_contents(\$this->attachmentFile, '');

        \$this->outputFile = sys_get_temp_dir().'/attach.out.bin';
        file_put_contents(\$this->outputFile, '');
    }

    protected function tearDown()
    {
        unlink(\$this->attachmentFile);
        unlink(\$this->outputFile);
    }

    public function testAttachmentsDoNotGetTruncatedUsingToByteStream()
    {
        //Run 100 times with 10KB attachments
        for (\$i = 0; \$i < 10; ++\$i) {
            \$message = \$this->createMessageWithRandomAttachment(
                10000, \$this->attachmentFile
            );

            file_put_contents(\$this->outputFile, '');
            \$message->toByteStream(
                new Swift_ByteStream_FileByteStream(\$this->outputFile, true)
            );

            \$emailSource = file_get_contents(\$this->outputFile);

            \$this->assertAttachmentFromSourceMatches(
                file_get_contents(\$this->attachmentFile),
                \$emailSource
            );
        }
    }

    public function testAttachmentsDoNotGetTruncatedUsingToString()
    {
        //Run 100 times with 10KB attachments
        for (\$i = 0; \$i < 10; ++\$i) {
            \$message = \$this->createMessageWithRandomAttachment(
                10000, \$this->attachmentFile
            );

            \$emailSource = \$message->toString();

            \$this->assertAttachmentFromSourceMatches(
                file_get_contents(\$this->attachmentFile),
                \$emailSource
            );
        }
    }

    public function assertAttachmentFromSourceMatches(\$attachmentData, \$source)
    {
        \$encHeader = 'Content-Transfer-Encoding: base64';
        \$base64declaration = strpos(\$source, \$encHeader);

        \$attachmentDataStart = strpos(\$source, \"\\r\\n\\r\\n\", \$base64declaration);
        \$attachmentDataEnd = strpos(\$source, \"\\r\\n--\", \$attachmentDataStart);

        if (false === \$attachmentDataEnd) {
            \$attachmentBase64 = trim(substr(\$source, \$attachmentDataStart));
        } else {
            \$attachmentBase64 = trim(substr(
                \$source, \$attachmentDataStart,
                \$attachmentDataEnd - \$attachmentDataStart
            ));
        }

        \$this->assertIdenticalBinary(\$attachmentData, base64_decode(\$attachmentBase64));
    }

    private function fillFileWithRandomBytes(\$byteCount, \$file)
    {
        // I was going to use dd with if=/dev/random but this way seems more
        // cross platform even if a hella expensive!!

        file_put_contents(\$file, '');
        \$fp = fopen(\$file, 'wb');
        for (\$i = 0; \$i < \$byteCount; ++\$i) {
            \$byteVal = random_int(0, 255);
            fwrite(\$fp, pack('i', \$byteVal));
        }
        fclose(\$fp);
    }

    private function createMessageWithRandomAttachment(\$size, \$attachmentPath)
    {
        \$this->fillFileWithRandomBytes(\$size, \$attachmentPath);

        \$message = (new Swift_Message())
            ->setSubject('test')
            ->setBody('test')
            ->setFrom('a@b.c')
            ->setTo('d@e.f')
            ->attach(Swift_Attachment::fromPath(\$attachmentPath))
            ;

        return \$message;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug51Test.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

class Swift_Bug51Test extends \\SwiftMailerTestCase
{
    private \$attachmentFile;
    private \$outputFile;

    protected function setUp()
    {
        \$this->attachmentFile = sys_get_temp_dir().'/attach.rand.bin';
        file_put_contents(\$this->attachmentFile, '');

        \$this->outputFile = sys_get_temp_dir().'/attach.out.bin';
        file_put_contents(\$this->outputFile, '');
    }

    protected function tearDown()
    {
        unlink(\$this->attachmentFile);
        unlink(\$this->outputFile);
    }

    public function testAttachmentsDoNotGetTruncatedUsingToByteStream()
    {
        //Run 100 times with 10KB attachments
        for (\$i = 0; \$i < 10; ++\$i) {
            \$message = \$this->createMessageWithRandomAttachment(
                10000, \$this->attachmentFile
            );

            file_put_contents(\$this->outputFile, '');
            \$message->toByteStream(
                new Swift_ByteStream_FileByteStream(\$this->outputFile, true)
            );

            \$emailSource = file_get_contents(\$this->outputFile);

            \$this->assertAttachmentFromSourceMatches(
                file_get_contents(\$this->attachmentFile),
                \$emailSource
            );
        }
    }

    public function testAttachmentsDoNotGetTruncatedUsingToString()
    {
        //Run 100 times with 10KB attachments
        for (\$i = 0; \$i < 10; ++\$i) {
            \$message = \$this->createMessageWithRandomAttachment(
                10000, \$this->attachmentFile
            );

            \$emailSource = \$message->toString();

            \$this->assertAttachmentFromSourceMatches(
                file_get_contents(\$this->attachmentFile),
                \$emailSource
            );
        }
    }

    public function assertAttachmentFromSourceMatches(\$attachmentData, \$source)
    {
        \$encHeader = 'Content-Transfer-Encoding: base64';
        \$base64declaration = strpos(\$source, \$encHeader);

        \$attachmentDataStart = strpos(\$source, \"\\r\\n\\r\\n\", \$base64declaration);
        \$attachmentDataEnd = strpos(\$source, \"\\r\\n--\", \$attachmentDataStart);

        if (false === \$attachmentDataEnd) {
            \$attachmentBase64 = trim(substr(\$source, \$attachmentDataStart));
        } else {
            \$attachmentBase64 = trim(substr(
                \$source, \$attachmentDataStart,
                \$attachmentDataEnd - \$attachmentDataStart
            ));
        }

        \$this->assertIdenticalBinary(\$attachmentData, base64_decode(\$attachmentBase64));
    }

    private function fillFileWithRandomBytes(\$byteCount, \$file)
    {
        // I was going to use dd with if=/dev/random but this way seems more
        // cross platform even if a hella expensive!!

        file_put_contents(\$file, '');
        \$fp = fopen(\$file, 'wb');
        for (\$i = 0; \$i < \$byteCount; ++\$i) {
            \$byteVal = random_int(0, 255);
            fwrite(\$fp, pack('i', \$byteVal));
        }
        fclose(\$fp);
    }

    private function createMessageWithRandomAttachment(\$size, \$attachmentPath)
    {
        \$this->fillFileWithRandomBytes(\$size, \$attachmentPath);

        \$message = (new Swift_Message())
            ->setSubject('test')
            ->setBody('test')
            ->setFrom('a@b.c')
            ->setTo('d@e.f')
            ->attach(Swift_Attachment::fromPath(\$attachmentPath))
            ;

        return \$message;
    }
}
", "vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug51Test.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/bug/Swift/Bug51Test.php");
    }
}
