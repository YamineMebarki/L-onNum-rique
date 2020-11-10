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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/HeaderEncoder/Base64HeaderEncoder.php */
class __TwigTemplate_8e46f44e54caa6647e5089efec9839720fcd8579f27ed203ed701b3d43eb1e43 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/HeaderEncoder/Base64HeaderEncoder.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/HeaderEncoder/Base64HeaderEncoder.php"));

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
 * Handles Base64 (B) Header Encoding in Swift Mailer.
 *
 * @author Chris Corbyn
 */
class Swift_Mime_HeaderEncoder_Base64HeaderEncoder extends Swift_Encoder_Base64Encoder implements Swift_Mime_HeaderEncoder
{
    /**
     * Get the name of this encoding scheme.
     * Returns the string 'B'.
     *
     * @return string
     */
    public function getName()
    {
        return 'B';
    }

    /**
     * Takes an unencoded string and produces a Base64 encoded string from it.
     *
     * If the charset is iso-2022-jp, it uses mb_encode_mimeheader instead of
     * default encodeString, otherwise pass to the parent method.
     *
     * @param string \$string          string to encode
     * @param int    \$firstLineOffset
     * @param int    \$maxLineLength   optional, 0 indicates the default of 76 bytes
     * @param string \$charset
     *
     * @return string
     */
    public function encodeString(\$string, \$firstLineOffset = 0, \$maxLineLength = 0, \$charset = 'utf-8')
    {
        if ('iso-2022-jp' === strtolower(\$charset)) {
            \$old = mb_internal_encoding();
            mb_internal_encoding('utf-8');
            \$newstring = mb_encode_mimeheader(\$string, \$charset, \$this->getName(), \"\\r\\n\");
            mb_internal_encoding(\$old);

            return \$newstring;
        }

        return parent::encodeString(\$string, \$firstLineOffset, \$maxLineLength);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/HeaderEncoder/Base64HeaderEncoder.php";
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
 * Handles Base64 (B) Header Encoding in Swift Mailer.
 *
 * @author Chris Corbyn
 */
class Swift_Mime_HeaderEncoder_Base64HeaderEncoder extends Swift_Encoder_Base64Encoder implements Swift_Mime_HeaderEncoder
{
    /**
     * Get the name of this encoding scheme.
     * Returns the string 'B'.
     *
     * @return string
     */
    public function getName()
    {
        return 'B';
    }

    /**
     * Takes an unencoded string and produces a Base64 encoded string from it.
     *
     * If the charset is iso-2022-jp, it uses mb_encode_mimeheader instead of
     * default encodeString, otherwise pass to the parent method.
     *
     * @param string \$string          string to encode
     * @param int    \$firstLineOffset
     * @param int    \$maxLineLength   optional, 0 indicates the default of 76 bytes
     * @param string \$charset
     *
     * @return string
     */
    public function encodeString(\$string, \$firstLineOffset = 0, \$maxLineLength = 0, \$charset = 'utf-8')
    {
        if ('iso-2022-jp' === strtolower(\$charset)) {
            \$old = mb_internal_encoding();
            mb_internal_encoding('utf-8');
            \$newstring = mb_encode_mimeheader(\$string, \$charset, \$this->getName(), \"\\r\\n\");
            mb_internal_encoding(\$old);

            return \$newstring;
        }

        return parent::encodeString(\$string, \$firstLineOffset, \$maxLineLength);
    }
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/HeaderEncoder/Base64HeaderEncoder.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/HeaderEncoder/Base64HeaderEncoder.php");
    }
}
