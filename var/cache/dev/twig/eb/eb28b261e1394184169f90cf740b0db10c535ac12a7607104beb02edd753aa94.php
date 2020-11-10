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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/IoBuffer.php */
class __TwigTemplate_f820cc728bde556e6e7dc9c16dd35739900e2d055f09315ae9f71de29a3e1cf1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/IoBuffer.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/IoBuffer.php"));

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
 * Buffers input and output to a resource.
 *
 * @author Chris Corbyn
 */
interface Swift_Transport_IoBuffer extends Swift_InputByteStream, Swift_OutputByteStream
{
    /** A socket buffer over TCP */
    const TYPE_SOCKET = 0x0001;

    /** A process buffer with I/O support */
    const TYPE_PROCESS = 0x0010;

    /**
     * Perform any initialization needed, using the given \$params.
     *
     * Parameters will vary depending upon the type of IoBuffer used.
     *
     * @param array \$params
     */
    public function initialize(array \$params);

    /**
     * Set an individual param on the buffer (e.g. switching to SSL).
     *
     * @param string \$param
     * @param mixed  \$value
     */
    public function setParam(\$param, \$value);

    /**
     * Perform any shutdown logic needed.
     */
    public function terminate();

    /**
     * Set an array of string replacements which should be made on data written
     * to the buffer.
     *
     * This could replace LF with CRLF for example.
     *
     * @param string[] \$replacements
     */
    public function setWriteTranslations(array \$replacements);

    /**
     * Get a line of output (including any CRLF).
     *
     * The \$sequence number comes from any writes and may or may not be used
     * depending upon the implementation.
     *
     * @param int \$sequence of last write to scan from
     *
     * @return string
     */
    public function readLine(\$sequence);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/IoBuffer.php";
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
 * Buffers input and output to a resource.
 *
 * @author Chris Corbyn
 */
interface Swift_Transport_IoBuffer extends Swift_InputByteStream, Swift_OutputByteStream
{
    /** A socket buffer over TCP */
    const TYPE_SOCKET = 0x0001;

    /** A process buffer with I/O support */
    const TYPE_PROCESS = 0x0010;

    /**
     * Perform any initialization needed, using the given \$params.
     *
     * Parameters will vary depending upon the type of IoBuffer used.
     *
     * @param array \$params
     */
    public function initialize(array \$params);

    /**
     * Set an individual param on the buffer (e.g. switching to SSL).
     *
     * @param string \$param
     * @param mixed  \$value
     */
    public function setParam(\$param, \$value);

    /**
     * Perform any shutdown logic needed.
     */
    public function terminate();

    /**
     * Set an array of string replacements which should be made on data written
     * to the buffer.
     *
     * This could replace LF with CRLF for example.
     *
     * @param string[] \$replacements
     */
    public function setWriteTranslations(array \$replacements);

    /**
     * Get a line of output (including any CRLF).
     *
     * The \$sequence number comes from any writes and may or may not be used
     * depending upon the implementation.
     *
     * @param int \$sequence of last write to scan from
     *
     * @return string
     */
    public function readLine(\$sequence);
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/IoBuffer.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/IoBuffer.php");
    }
}
