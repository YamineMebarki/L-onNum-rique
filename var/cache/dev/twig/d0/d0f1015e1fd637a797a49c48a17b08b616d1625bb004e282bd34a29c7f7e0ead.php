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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/HeaderEncoder/QpHeaderEncoder.php */
class __TwigTemplate_0fa8a5143304eed65fc26c1cbf733f785e1e6f255fb4bbb8aeebdbc9bc58a75f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/HeaderEncoder/QpHeaderEncoder.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/HeaderEncoder/QpHeaderEncoder.php"));

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
 * Handles Quoted Printable (Q) Header Encoding in Swift Mailer.
 *
 * @author Chris Corbyn
 */
class Swift_Mime_HeaderEncoder_QpHeaderEncoder extends Swift_Encoder_QpEncoder implements Swift_Mime_HeaderEncoder
{
    /**
     * Creates a new QpHeaderEncoder for the given CharacterStream.
     *
     * @param Swift_CharacterStream \$charStream to use for reading characters
     */
    public function __construct(Swift_CharacterStream \$charStream)
    {
        parent::__construct(\$charStream);
    }

    protected function initSafeMap()
    {
        foreach (array_merge(
            range(0x61, 0x7A), range(0x41, 0x5A),
            range(0x30, 0x39), [0x20, 0x21, 0x2A, 0x2B, 0x2D, 0x2F]
        ) as \$byte) {
            \$this->safeMap[\$byte] = chr(\$byte);
        }
    }

    /**
     * Get the name of this encoding scheme.
     *
     * Returns the string 'Q'.
     *
     * @return string
     */
    public function getName()
    {
        return 'Q';
    }

    /**
     * Takes an unencoded string and produces a QP encoded string from it.
     *
     * @param string \$string          string to encode
     * @param int    \$firstLineOffset optional
     * @param int    \$maxLineLength   optional, 0 indicates the default of 76 chars
     *
     * @return string
     */
    public function encodeString(\$string, \$firstLineOffset = 0, \$maxLineLength = 0)
    {
        return str_replace([' ', '=20', \"=\\r\\n\"], ['_', '_', \"\\r\\n\"],
            parent::encodeString(\$string, \$firstLineOffset, \$maxLineLength)
        );
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/HeaderEncoder/QpHeaderEncoder.php";
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
 * Handles Quoted Printable (Q) Header Encoding in Swift Mailer.
 *
 * @author Chris Corbyn
 */
class Swift_Mime_HeaderEncoder_QpHeaderEncoder extends Swift_Encoder_QpEncoder implements Swift_Mime_HeaderEncoder
{
    /**
     * Creates a new QpHeaderEncoder for the given CharacterStream.
     *
     * @param Swift_CharacterStream \$charStream to use for reading characters
     */
    public function __construct(Swift_CharacterStream \$charStream)
    {
        parent::__construct(\$charStream);
    }

    protected function initSafeMap()
    {
        foreach (array_merge(
            range(0x61, 0x7A), range(0x41, 0x5A),
            range(0x30, 0x39), [0x20, 0x21, 0x2A, 0x2B, 0x2D, 0x2F]
        ) as \$byte) {
            \$this->safeMap[\$byte] = chr(\$byte);
        }
    }

    /**
     * Get the name of this encoding scheme.
     *
     * Returns the string 'Q'.
     *
     * @return string
     */
    public function getName()
    {
        return 'Q';
    }

    /**
     * Takes an unencoded string and produces a QP encoded string from it.
     *
     * @param string \$string          string to encode
     * @param int    \$firstLineOffset optional
     * @param int    \$maxLineLength   optional, 0 indicates the default of 76 chars
     *
     * @return string
     */
    public function encodeString(\$string, \$firstLineOffset = 0, \$maxLineLength = 0)
    {
        return str_replace([' ', '=20', \"=\\r\\n\"], ['_', '_', \"\\r\\n\"],
            parent::encodeString(\$string, \$firstLineOffset, \$maxLineLength)
        );
    }
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/HeaderEncoder/QpHeaderEncoder.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/HeaderEncoder/QpHeaderEncoder.php");
    }
}
