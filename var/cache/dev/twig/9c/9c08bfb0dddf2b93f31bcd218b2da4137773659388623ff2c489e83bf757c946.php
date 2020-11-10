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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/Encoder/Rfc2231Encoder.php */
class __TwigTemplate_cb3c936cf97e4b9f228572ee4aed8f4ee39f9aa6840cef4e693d8f4714e95d89 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Encoder/Rfc2231Encoder.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Encoder/Rfc2231Encoder.php"));

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
 * Handles RFC 2231 specified Encoding in Swift Mailer.
 *
 * @author Chris Corbyn
 */
class Swift_Encoder_Rfc2231Encoder implements Swift_Encoder
{
    /**
     * A character stream to use when reading a string as characters instead of bytes.
     *
     * @var Swift_CharacterStream
     */
    private \$charStream;

    /**
     * Creates a new Rfc2231Encoder using the given character stream instance.
     */
    public function __construct(Swift_CharacterStream \$charStream)
    {
        \$this->charStream = \$charStream;
    }

    /**
     * Takes an unencoded string and produces a string encoded according to
     * RFC 2231 from it.
     *
     * @param string \$string
     * @param int    \$firstLineOffset
     * @param int    \$maxLineLength   optional, 0 indicates the default of 75 bytes
     *
     * @return string
     */
    public function encodeString(\$string, \$firstLineOffset = 0, \$maxLineLength = 0)
    {
        \$lines = [];
        \$lineCount = 0;
        \$lines[] = '';
        \$currentLine = &\$lines[\$lineCount++];

        if (0 >= \$maxLineLength) {
            \$maxLineLength = 75;
        }

        \$this->charStream->flushContents();
        \$this->charStream->importString(\$string);

        \$thisLineLength = \$maxLineLength - \$firstLineOffset;

        while (false !== \$char = \$this->charStream->read(4)) {
            \$encodedChar = rawurlencode(\$char);
            if (0 != strlen(\$currentLine)
                && strlen(\$currentLine.\$encodedChar) > \$thisLineLength) {
                \$lines[] = '';
                \$currentLine = &\$lines[\$lineCount++];
                \$thisLineLength = \$maxLineLength;
            }
            \$currentLine .= \$encodedChar;
        }

        return implode(\"\\r\\n\", \$lines);
    }

    /**
     * Updates the charset used.
     *
     * @param string \$charset
     */
    public function charsetChanged(\$charset)
    {
        \$this->charStream->setCharacterSet(\$charset);
    }

    /**
     * Make a deep copy of object.
     */
    public function __clone()
    {
        \$this->charStream = clone \$this->charStream;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Encoder/Rfc2231Encoder.php";
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
 * Handles RFC 2231 specified Encoding in Swift Mailer.
 *
 * @author Chris Corbyn
 */
class Swift_Encoder_Rfc2231Encoder implements Swift_Encoder
{
    /**
     * A character stream to use when reading a string as characters instead of bytes.
     *
     * @var Swift_CharacterStream
     */
    private \$charStream;

    /**
     * Creates a new Rfc2231Encoder using the given character stream instance.
     */
    public function __construct(Swift_CharacterStream \$charStream)
    {
        \$this->charStream = \$charStream;
    }

    /**
     * Takes an unencoded string and produces a string encoded according to
     * RFC 2231 from it.
     *
     * @param string \$string
     * @param int    \$firstLineOffset
     * @param int    \$maxLineLength   optional, 0 indicates the default of 75 bytes
     *
     * @return string
     */
    public function encodeString(\$string, \$firstLineOffset = 0, \$maxLineLength = 0)
    {
        \$lines = [];
        \$lineCount = 0;
        \$lines[] = '';
        \$currentLine = &\$lines[\$lineCount++];

        if (0 >= \$maxLineLength) {
            \$maxLineLength = 75;
        }

        \$this->charStream->flushContents();
        \$this->charStream->importString(\$string);

        \$thisLineLength = \$maxLineLength - \$firstLineOffset;

        while (false !== \$char = \$this->charStream->read(4)) {
            \$encodedChar = rawurlencode(\$char);
            if (0 != strlen(\$currentLine)
                && strlen(\$currentLine.\$encodedChar) > \$thisLineLength) {
                \$lines[] = '';
                \$currentLine = &\$lines[\$lineCount++];
                \$thisLineLength = \$maxLineLength;
            }
            \$currentLine .= \$encodedChar;
        }

        return implode(\"\\r\\n\", \$lines);
    }

    /**
     * Updates the charset used.
     *
     * @param string \$charset
     */
    public function charsetChanged(\$charset)
    {
        \$this->charStream->setCharacterSet(\$charset);
    }

    /**
     * Make a deep copy of object.
     */
    public function __clone()
    {
        \$this->charStream = clone \$this->charStream;
    }
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Encoder/Rfc2231Encoder.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Encoder/Rfc2231Encoder.php");
    }
}
