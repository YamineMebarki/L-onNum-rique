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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/Encoder/Base64Encoder.php */
class __TwigTemplate_6fb0190350cad39b496c7a1dacc2c4425d221ec750075f1dab0ef636334c3629 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Encoder/Base64Encoder.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Encoder/Base64Encoder.php"));

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
 * Handles Base 64 Encoding in Swift Mailer.
 *
 * @author Chris Corbyn
 */
class Swift_Encoder_Base64Encoder implements Swift_Encoder
{
    /**
     * Takes an unencoded string and produces a Base64 encoded string from it.
     *
     * Base64 encoded strings have a maximum line length of 76 characters.
     * If the first line needs to be shorter, indicate the difference with
     * \$firstLineOffset.
     *
     * @param string \$string          to encode
     * @param int    \$firstLineOffset
     * @param int    \$maxLineLength   optional, 0 indicates the default of 76 bytes
     *
     * @return string
     */
    public function encodeString(\$string, \$firstLineOffset = 0, \$maxLineLength = 0)
    {
        if (0 >= \$maxLineLength || 76 < \$maxLineLength) {
            \$maxLineLength = 76;
        }

        \$encodedString = base64_encode(\$string);
        \$firstLine = '';

        if (0 != \$firstLineOffset) {
            \$firstLine = substr(
                \$encodedString, 0, \$maxLineLength - \$firstLineOffset
                ).\"\\r\\n\";
            \$encodedString = substr(
                \$encodedString, \$maxLineLength - \$firstLineOffset
                );
        }

        return \$firstLine.trim(chunk_split(\$encodedString, \$maxLineLength, \"\\r\\n\"));
    }

    /**
     * Does nothing.
     */
    public function charsetChanged(\$charset)
    {
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Encoder/Base64Encoder.php";
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
 * Handles Base 64 Encoding in Swift Mailer.
 *
 * @author Chris Corbyn
 */
class Swift_Encoder_Base64Encoder implements Swift_Encoder
{
    /**
     * Takes an unencoded string and produces a Base64 encoded string from it.
     *
     * Base64 encoded strings have a maximum line length of 76 characters.
     * If the first line needs to be shorter, indicate the difference with
     * \$firstLineOffset.
     *
     * @param string \$string          to encode
     * @param int    \$firstLineOffset
     * @param int    \$maxLineLength   optional, 0 indicates the default of 76 bytes
     *
     * @return string
     */
    public function encodeString(\$string, \$firstLineOffset = 0, \$maxLineLength = 0)
    {
        if (0 >= \$maxLineLength || 76 < \$maxLineLength) {
            \$maxLineLength = 76;
        }

        \$encodedString = base64_encode(\$string);
        \$firstLine = '';

        if (0 != \$firstLineOffset) {
            \$firstLine = substr(
                \$encodedString, 0, \$maxLineLength - \$firstLineOffset
                ).\"\\r\\n\";
            \$encodedString = substr(
                \$encodedString, \$maxLineLength - \$firstLineOffset
                );
        }

        return \$firstLine.trim(chunk_split(\$encodedString, \$maxLineLength, \"\\r\\n\"));
    }

    /**
     * Does nothing.
     */
    public function charsetChanged(\$charset)
    {
    }
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Encoder/Base64Encoder.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Encoder/Base64Encoder.php");
    }
}
