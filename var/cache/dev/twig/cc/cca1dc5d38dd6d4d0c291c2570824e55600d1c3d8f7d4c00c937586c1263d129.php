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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/ContentEncoder/Base64ContentEncoder.php */
class __TwigTemplate_eac56b7d3f62d75a0e0cf0333c11155ab2e91d86f2b436b9899f76e9b013b528 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/ContentEncoder/Base64ContentEncoder.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/ContentEncoder/Base64ContentEncoder.php"));

        // line 1
        echo "<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Handles Base 64 Transfer Encoding in Swift Mailer.
 *
 * @author Chris Corbyn
 */
class Swift_Mime_ContentEncoder_Base64ContentEncoder extends Swift_Encoder_Base64Encoder implements Swift_Mime_ContentEncoder
{
    /**
     * Encode stream \$in to stream \$out.
     *
     * @param int \$firstLineOffset
     */
    public function encodeByteStream(Swift_OutputByteStream \$os, Swift_InputByteStream \$is, \$firstLineOffset = 0, \$maxLineLength = 0)
    {
        if (0 >= \$maxLineLength || 76 < \$maxLineLength) {
            \$maxLineLength = 76;
        }

        \$remainder = 0;
        \$base64ReadBufferRemainderBytes = null;

        // To reduce memory usage, the output buffer is streamed to the input buffer like so:
        //   Output Stream => base64encode => wrap line length => Input Stream
        // HOWEVER it's important to note that base64_encode() should only be passed whole triplets of data (except for the final chunk of data)
        // otherwise it will assume the input data has *ended* and it will incorrectly pad/terminate the base64 data mid-stream.
        // We use \$base64ReadBufferRemainderBytes to carry over 1-2 \"remainder\" bytes from the each chunk from OutputStream and pre-pend those onto the
        // chunk of bytes read in the next iteration.
        // When the OutputStream is empty, we must flush any remainder bytes.
        while (true) {
            \$readBytes = \$os->read(8192);
            \$atEOF = (false === \$readBytes);

            if (\$atEOF) {
                \$streamTheseBytes = \$base64ReadBufferRemainderBytes;
            } else {
                \$streamTheseBytes = \$base64ReadBufferRemainderBytes.\$readBytes;
            }
            \$base64ReadBufferRemainderBytes = null;
            \$bytesLength = strlen(\$streamTheseBytes);

            if (0 === \$bytesLength) { // no data left to encode
                break;
            }

            // if we're not on the last block of the ouput stream, make sure \$streamTheseBytes ends with a complete triplet of data
            // and carry over remainder 1-2 bytes to the next loop iteration
            if (!\$atEOF) {
                \$excessBytes = \$bytesLength % 3;
                if (0 !== \$excessBytes) {
                    \$base64ReadBufferRemainderBytes = substr(\$streamTheseBytes, -\$excessBytes);
                    \$streamTheseBytes = substr(\$streamTheseBytes, 0, \$bytesLength - \$excessBytes);
                }
            }

            \$encoded = base64_encode(\$streamTheseBytes);
            \$encodedTransformed = '';
            \$thisMaxLineLength = \$maxLineLength - \$remainder - \$firstLineOffset;

            while (\$thisMaxLineLength < strlen(\$encoded)) {
                \$encodedTransformed .= substr(\$encoded, 0, \$thisMaxLineLength).\"\\r\\n\";
                \$firstLineOffset = 0;
                \$encoded = substr(\$encoded, \$thisMaxLineLength);
                \$thisMaxLineLength = \$maxLineLength;
                \$remainder = 0;
            }

            if (0 < \$remainingLength = strlen(\$encoded)) {
                \$remainder += \$remainingLength;
                \$encodedTransformed .= \$encoded;
                \$encoded = null;
            }

            \$is->write(\$encodedTransformed);

            if (\$atEOF) {
                break;
            }
        }
    }

    /**
     * Get the name of this encoding scheme.
     * Returns the string 'base64'.
     *
     * @return string
     */
    public function getName()
    {
        return 'base64';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/ContentEncoder/Base64ContentEncoder.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Handles Base 64 Transfer Encoding in Swift Mailer.
 *
 * @author Chris Corbyn
 */
class Swift_Mime_ContentEncoder_Base64ContentEncoder extends Swift_Encoder_Base64Encoder implements Swift_Mime_ContentEncoder
{
    /**
     * Encode stream \$in to stream \$out.
     *
     * @param int \$firstLineOffset
     */
    public function encodeByteStream(Swift_OutputByteStream \$os, Swift_InputByteStream \$is, \$firstLineOffset = 0, \$maxLineLength = 0)
    {
        if (0 >= \$maxLineLength || 76 < \$maxLineLength) {
            \$maxLineLength = 76;
        }

        \$remainder = 0;
        \$base64ReadBufferRemainderBytes = null;

        // To reduce memory usage, the output buffer is streamed to the input buffer like so:
        //   Output Stream => base64encode => wrap line length => Input Stream
        // HOWEVER it's important to note that base64_encode() should only be passed whole triplets of data (except for the final chunk of data)
        // otherwise it will assume the input data has *ended* and it will incorrectly pad/terminate the base64 data mid-stream.
        // We use \$base64ReadBufferRemainderBytes to carry over 1-2 \"remainder\" bytes from the each chunk from OutputStream and pre-pend those onto the
        // chunk of bytes read in the next iteration.
        // When the OutputStream is empty, we must flush any remainder bytes.
        while (true) {
            \$readBytes = \$os->read(8192);
            \$atEOF = (false === \$readBytes);

            if (\$atEOF) {
                \$streamTheseBytes = \$base64ReadBufferRemainderBytes;
            } else {
                \$streamTheseBytes = \$base64ReadBufferRemainderBytes.\$readBytes;
            }
            \$base64ReadBufferRemainderBytes = null;
            \$bytesLength = strlen(\$streamTheseBytes);

            if (0 === \$bytesLength) { // no data left to encode
                break;
            }

            // if we're not on the last block of the ouput stream, make sure \$streamTheseBytes ends with a complete triplet of data
            // and carry over remainder 1-2 bytes to the next loop iteration
            if (!\$atEOF) {
                \$excessBytes = \$bytesLength % 3;
                if (0 !== \$excessBytes) {
                    \$base64ReadBufferRemainderBytes = substr(\$streamTheseBytes, -\$excessBytes);
                    \$streamTheseBytes = substr(\$streamTheseBytes, 0, \$bytesLength - \$excessBytes);
                }
            }

            \$encoded = base64_encode(\$streamTheseBytes);
            \$encodedTransformed = '';
            \$thisMaxLineLength = \$maxLineLength - \$remainder - \$firstLineOffset;

            while (\$thisMaxLineLength < strlen(\$encoded)) {
                \$encodedTransformed .= substr(\$encoded, 0, \$thisMaxLineLength).\"\\r\\n\";
                \$firstLineOffset = 0;
                \$encoded = substr(\$encoded, \$thisMaxLineLength);
                \$thisMaxLineLength = \$maxLineLength;
                \$remainder = 0;
            }

            if (0 < \$remainingLength = strlen(\$encoded)) {
                \$remainder += \$remainingLength;
                \$encodedTransformed .= \$encoded;
                \$encoded = null;
            }

            \$is->write(\$encodedTransformed);

            if (\$atEOF) {
                break;
            }
        }
    }

    /**
     * Get the name of this encoding scheme.
     * Returns the string 'base64'.
     *
     * @return string
     */
    public function getName()
    {
        return 'base64';
    }
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/ContentEncoder/Base64ContentEncoder.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/ContentEncoder/Base64ContentEncoder.php");
    }
}
