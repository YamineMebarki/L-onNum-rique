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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/ContentEncoder/NativeQpContentEncoder.php */
class __TwigTemplate_9ba6a625c033806c260b41dfca9d32ee96c3fd468b3664bb0a00ab3a06f001f8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/ContentEncoder/NativeQpContentEncoder.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/ContentEncoder/NativeQpContentEncoder.php"));

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
 * Handles Quoted Printable (QP) Transfer Encoding in Swift Mailer using the PHP core function.
 *
 * @author Lars Strojny
 */
class Swift_Mime_ContentEncoder_NativeQpContentEncoder implements Swift_Mime_ContentEncoder
{
    /**
     * @var null|string
     */
    private \$charset;

    /**
     * @param null|string \$charset
     */
    public function __construct(\$charset = null)
    {
        \$this->charset = \$charset ? \$charset : 'utf-8';
    }

    /**
     * Notify this observer that the entity's charset has changed.
     *
     * @param string \$charset
     */
    public function charsetChanged(\$charset)
    {
        \$this->charset = \$charset;
    }

    /**
     * Encode \$in to \$out.
     *
     * @param Swift_OutputByteStream \$os              to read from
     * @param Swift_InputByteStream  \$is              to write to
     * @param int                    \$firstLineOffset
     * @param int                    \$maxLineLength   0 indicates the default length for this encoding
     *
     * @throws RuntimeException
     */
    public function encodeByteStream(Swift_OutputByteStream \$os, Swift_InputByteStream \$is, \$firstLineOffset = 0, \$maxLineLength = 0)
    {
        if ('utf-8' !== \$this->charset) {
            throw new RuntimeException(
                sprintf('Charset \"%s\" not supported. NativeQpContentEncoder only supports \"utf-8\"', \$this->charset));
        }

        \$string = '';

        while (false !== \$bytes = \$os->read(8192)) {
            \$string .= \$bytes;
        }

        \$is->write(\$this->encodeString(\$string));
    }

    /**
     * Get the MIME name of this content encoding scheme.
     *
     * @return string
     */
    public function getName()
    {
        return 'quoted-printable';
    }

    /**
     * Encode a given string to produce an encoded string.
     *
     * @param string \$string
     * @param int    \$firstLineOffset if first line needs to be shorter
     * @param int    \$maxLineLength   0 indicates the default length for this encoding
     *
     * @throws RuntimeException
     *
     * @return string
     */
    public function encodeString(\$string, \$firstLineOffset = 0, \$maxLineLength = 0)
    {
        if ('utf-8' !== \$this->charset) {
            throw new RuntimeException(
                sprintf('Charset \"%s\" not supported. NativeQpContentEncoder only supports \"utf-8\"', \$this->charset));
        }

        return \$this->standardize(quoted_printable_encode(\$string));
    }

    /**
     * Make sure CRLF is correct and HT/SPACE are in valid places.
     *
     * @param string \$string
     *
     * @return string
     */
    protected function standardize(\$string)
    {
        // transform CR or LF to CRLF
        \$string = preg_replace('~=0D(?!=0A)|(?<!=0D)=0A~', '=0D=0A', \$string);
        // transform =0D=0A to CRLF
        \$string = str_replace([\"\\t=0D=0A\", ' =0D=0A', '=0D=0A'], [\"=09\\r\\n\", \"=20\\r\\n\", \"\\r\\n\"], \$string);

        switch (ord(substr(\$string, -1))) {
            case 0x09:
                \$string = substr_replace(\$string, '=09', -1);
                break;
            case 0x20:
                \$string = substr_replace(\$string, '=20', -1);
                break;
        }

        return \$string;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/ContentEncoder/NativeQpContentEncoder.php";
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
 * Handles Quoted Printable (QP) Transfer Encoding in Swift Mailer using the PHP core function.
 *
 * @author Lars Strojny
 */
class Swift_Mime_ContentEncoder_NativeQpContentEncoder implements Swift_Mime_ContentEncoder
{
    /**
     * @var null|string
     */
    private \$charset;

    /**
     * @param null|string \$charset
     */
    public function __construct(\$charset = null)
    {
        \$this->charset = \$charset ? \$charset : 'utf-8';
    }

    /**
     * Notify this observer that the entity's charset has changed.
     *
     * @param string \$charset
     */
    public function charsetChanged(\$charset)
    {
        \$this->charset = \$charset;
    }

    /**
     * Encode \$in to \$out.
     *
     * @param Swift_OutputByteStream \$os              to read from
     * @param Swift_InputByteStream  \$is              to write to
     * @param int                    \$firstLineOffset
     * @param int                    \$maxLineLength   0 indicates the default length for this encoding
     *
     * @throws RuntimeException
     */
    public function encodeByteStream(Swift_OutputByteStream \$os, Swift_InputByteStream \$is, \$firstLineOffset = 0, \$maxLineLength = 0)
    {
        if ('utf-8' !== \$this->charset) {
            throw new RuntimeException(
                sprintf('Charset \"%s\" not supported. NativeQpContentEncoder only supports \"utf-8\"', \$this->charset));
        }

        \$string = '';

        while (false !== \$bytes = \$os->read(8192)) {
            \$string .= \$bytes;
        }

        \$is->write(\$this->encodeString(\$string));
    }

    /**
     * Get the MIME name of this content encoding scheme.
     *
     * @return string
     */
    public function getName()
    {
        return 'quoted-printable';
    }

    /**
     * Encode a given string to produce an encoded string.
     *
     * @param string \$string
     * @param int    \$firstLineOffset if first line needs to be shorter
     * @param int    \$maxLineLength   0 indicates the default length for this encoding
     *
     * @throws RuntimeException
     *
     * @return string
     */
    public function encodeString(\$string, \$firstLineOffset = 0, \$maxLineLength = 0)
    {
        if ('utf-8' !== \$this->charset) {
            throw new RuntimeException(
                sprintf('Charset \"%s\" not supported. NativeQpContentEncoder only supports \"utf-8\"', \$this->charset));
        }

        return \$this->standardize(quoted_printable_encode(\$string));
    }

    /**
     * Make sure CRLF is correct and HT/SPACE are in valid places.
     *
     * @param string \$string
     *
     * @return string
     */
    protected function standardize(\$string)
    {
        // transform CR or LF to CRLF
        \$string = preg_replace('~=0D(?!=0A)|(?<!=0D)=0A~', '=0D=0A', \$string);
        // transform =0D=0A to CRLF
        \$string = str_replace([\"\\t=0D=0A\", ' =0D=0A', '=0D=0A'], [\"=09\\r\\n\", \"=20\\r\\n\", \"\\r\\n\"], \$string);

        switch (ord(substr(\$string, -1))) {
            case 0x09:
                \$string = substr_replace(\$string, '=09', -1);
                break;
            case 0x20:
                \$string = substr_replace(\$string, '=20', -1);
                break;
        }

        return \$string;
    }
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/ContentEncoder/NativeQpContentEncoder.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/ContentEncoder/NativeQpContentEncoder.php");
    }
}
