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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/Header.php */
class __TwigTemplate_455c3d649df970809a23d7b3270985fb66900619b2619a30851e3d99ef3e19ce extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/Header.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/Header.php"));

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
 * A MIME Header.
 *
 * @author Chris Corbyn
 */
interface Swift_Mime_Header
{
    /** Text headers */
    const TYPE_TEXT = 2;

    /**  headers (text + params) */
    const TYPE_PARAMETERIZED = 6;

    /** Mailbox and address headers */
    const TYPE_MAILBOX = 8;

    /** Date and time headers */
    const TYPE_DATE = 16;

    /** Identification headers */
    const TYPE_ID = 32;

    /** Address path headers */
    const TYPE_PATH = 64;

    /**
     * Get the type of Header that this instance represents.
     *
     * @see TYPE_TEXT, TYPE_PARAMETERIZED, TYPE_MAILBOX
     * @see TYPE_DATE, TYPE_ID, TYPE_PATH
     *
     * @return int
     */
    public function getFieldType();

    /**
     * Set the model for the field body.
     *
     * The actual types needed will vary depending upon the type of Header.
     *
     * @param mixed \$model
     */
    public function setFieldBodyModel(\$model);

    /**
     * Set the charset used when rendering the Header.
     *
     * @param string \$charset
     */
    public function setCharset(\$charset);

    /**
     * Get the model for the field body.
     *
     * The return type depends on the specifics of the Header.
     *
     * @return mixed
     */
    public function getFieldBodyModel();

    /**
     * Get the name of this header (e.g. Subject).
     *
     * The name is an identifier and as such will be immutable.
     *
     * @return string
     */
    public function getFieldName();

    /**
     * Get the field body, prepared for folding into a final header value.
     *
     * @return string
     */
    public function getFieldBody();

    /**
     * Get this Header rendered as a compliant string, including trailing CRLF.
     *
     * @return string
     */
    public function toString();
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/Header.php";
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
 * A MIME Header.
 *
 * @author Chris Corbyn
 */
interface Swift_Mime_Header
{
    /** Text headers */
    const TYPE_TEXT = 2;

    /**  headers (text + params) */
    const TYPE_PARAMETERIZED = 6;

    /** Mailbox and address headers */
    const TYPE_MAILBOX = 8;

    /** Date and time headers */
    const TYPE_DATE = 16;

    /** Identification headers */
    const TYPE_ID = 32;

    /** Address path headers */
    const TYPE_PATH = 64;

    /**
     * Get the type of Header that this instance represents.
     *
     * @see TYPE_TEXT, TYPE_PARAMETERIZED, TYPE_MAILBOX
     * @see TYPE_DATE, TYPE_ID, TYPE_PATH
     *
     * @return int
     */
    public function getFieldType();

    /**
     * Set the model for the field body.
     *
     * The actual types needed will vary depending upon the type of Header.
     *
     * @param mixed \$model
     */
    public function setFieldBodyModel(\$model);

    /**
     * Set the charset used when rendering the Header.
     *
     * @param string \$charset
     */
    public function setCharset(\$charset);

    /**
     * Get the model for the field body.
     *
     * The return type depends on the specifics of the Header.
     *
     * @return mixed
     */
    public function getFieldBodyModel();

    /**
     * Get the name of this header (e.g. Subject).
     *
     * The name is an identifier and as such will be immutable.
     *
     * @return string
     */
    public function getFieldName();

    /**
     * Get the field body, prepared for folding into a final header value.
     *
     * @return string
     */
    public function getFieldBody();

    /**
     * Get this Header rendered as a compliant string, including trailing CRLF.
     *
     * @return string
     */
    public function toString();
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/Header.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/Header.php");
    }
}
