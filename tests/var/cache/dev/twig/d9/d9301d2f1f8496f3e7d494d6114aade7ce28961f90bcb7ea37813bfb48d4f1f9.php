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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/SimpleHeaderFactory.php */
class __TwigTemplate_a8c495680b99faf63348b37529070426ed4b7ebf3428b4d2cd00f53938b0ccd5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/SimpleHeaderFactory.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/SimpleHeaderFactory.php"));

        // line 1
        echo "<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Egulias\\EmailValidator\\EmailValidator;

/**
 * Creates MIME headers.
 *
 * @author Chris Corbyn
 */
class Swift_Mime_SimpleHeaderFactory implements Swift_Mime_CharsetObserver
{
    /** The HeaderEncoder used by these headers */
    private \$encoder;

    /** The Encoder used by parameters */
    private \$paramEncoder;

    /** Strict EmailValidator */
    private \$emailValidator;

    /** The charset of created Headers */
    private \$charset;

    /** Swift_AddressEncoder */
    private \$addressEncoder;

    /**
     * Creates a new SimpleHeaderFactory using \$encoder and \$paramEncoder.
     *
     * @param string|null \$charset
     */
    public function __construct(Swift_Mime_HeaderEncoder \$encoder, Swift_Encoder \$paramEncoder, EmailValidator \$emailValidator, \$charset = null, Swift_AddressEncoder \$addressEncoder = null)
    {
        \$this->encoder = \$encoder;
        \$this->paramEncoder = \$paramEncoder;
        \$this->emailValidator = \$emailValidator;
        \$this->charset = \$charset;
        \$this->addressEncoder = \$addressEncoder ?? new Swift_AddressEncoder_IdnAddressEncoder();
    }

    /**
     * Create a new Mailbox Header with a list of \$addresses.
     *
     * @param string            \$name
     * @param array|string|null \$addresses
     *
     * @return Swift_Mime_Header
     */
    public function createMailboxHeader(\$name, \$addresses = null)
    {
        \$header = new Swift_Mime_Headers_MailboxHeader(\$name, \$this->encoder, \$this->emailValidator, \$this->addressEncoder);
        if (isset(\$addresses)) {
            \$header->setFieldBodyModel(\$addresses);
        }
        \$this->setHeaderCharset(\$header);

        return \$header;
    }

    /**
     * Create a new Date header using \$dateTime.
     *
     * @param string                 \$name
     * @param DateTimeInterface|null \$dateTime
     *
     * @return Swift_Mime_Header
     */
    public function createDateHeader(\$name, DateTimeInterface \$dateTime = null)
    {
        \$header = new Swift_Mime_Headers_DateHeader(\$name);
        if (isset(\$dateTime)) {
            \$header->setFieldBodyModel(\$dateTime);
        }
        \$this->setHeaderCharset(\$header);

        return \$header;
    }

    /**
     * Create a new basic text header with \$name and \$value.
     *
     * @param string \$name
     * @param string \$value
     *
     * @return Swift_Mime_Header
     */
    public function createTextHeader(\$name, \$value = null)
    {
        \$header = new Swift_Mime_Headers_UnstructuredHeader(\$name, \$this->encoder);
        if (isset(\$value)) {
            \$header->setFieldBodyModel(\$value);
        }
        \$this->setHeaderCharset(\$header);

        return \$header;
    }

    /**
     * Create a new ParameterizedHeader with \$name, \$value and \$params.
     *
     * @param string \$name
     * @param string \$value
     * @param array  \$params
     *
     * @return Swift_Mime_Headers_ParameterizedHeader
     */
    public function createParameterizedHeader(\$name, \$value = null, \$params = [])
    {
        \$header = new Swift_Mime_Headers_ParameterizedHeader(\$name, \$this->encoder, ('content-disposition' == strtolower(\$name)) ? \$this->paramEncoder : null);
        if (isset(\$value)) {
            \$header->setFieldBodyModel(\$value);
        }
        foreach (\$params as \$k => \$v) {
            \$header->setParameter(\$k, \$v);
        }
        \$this->setHeaderCharset(\$header);

        return \$header;
    }

    /**
     * Create a new ID header for Message-ID or Content-ID.
     *
     * @param string       \$name
     * @param string|array \$ids
     *
     * @return Swift_Mime_Header
     */
    public function createIdHeader(\$name, \$ids = null)
    {
        \$header = new Swift_Mime_Headers_IdentificationHeader(\$name, \$this->emailValidator);
        if (isset(\$ids)) {
            \$header->setFieldBodyModel(\$ids);
        }
        \$this->setHeaderCharset(\$header);

        return \$header;
    }

    /**
     * Create a new Path header with an address (path) in it.
     *
     * @param string \$name
     * @param string \$path
     *
     * @return Swift_Mime_Header
     */
    public function createPathHeader(\$name, \$path = null)
    {
        \$header = new Swift_Mime_Headers_PathHeader(\$name, \$this->emailValidator);
        if (isset(\$path)) {
            \$header->setFieldBodyModel(\$path);
        }
        \$this->setHeaderCharset(\$header);

        return \$header;
    }

    /**
     * Notify this observer that the entity's charset has changed.
     *
     * @param string \$charset
     */
    public function charsetChanged(\$charset)
    {
        \$this->charset = \$charset;
        \$this->encoder->charsetChanged(\$charset);
        \$this->paramEncoder->charsetChanged(\$charset);
    }

    /**
     * Make a deep copy of object.
     */
    public function __clone()
    {
        \$this->encoder = clone \$this->encoder;
        \$this->paramEncoder = clone \$this->paramEncoder;
    }

    /** Apply the charset to the Header */
    private function setHeaderCharset(Swift_Mime_Header \$header)
    {
        if (isset(\$this->charset)) {
            \$header->setCharset(\$this->charset);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/SimpleHeaderFactory.php";
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

use Egulias\\EmailValidator\\EmailValidator;

/**
 * Creates MIME headers.
 *
 * @author Chris Corbyn
 */
class Swift_Mime_SimpleHeaderFactory implements Swift_Mime_CharsetObserver
{
    /** The HeaderEncoder used by these headers */
    private \$encoder;

    /** The Encoder used by parameters */
    private \$paramEncoder;

    /** Strict EmailValidator */
    private \$emailValidator;

    /** The charset of created Headers */
    private \$charset;

    /** Swift_AddressEncoder */
    private \$addressEncoder;

    /**
     * Creates a new SimpleHeaderFactory using \$encoder and \$paramEncoder.
     *
     * @param string|null \$charset
     */
    public function __construct(Swift_Mime_HeaderEncoder \$encoder, Swift_Encoder \$paramEncoder, EmailValidator \$emailValidator, \$charset = null, Swift_AddressEncoder \$addressEncoder = null)
    {
        \$this->encoder = \$encoder;
        \$this->paramEncoder = \$paramEncoder;
        \$this->emailValidator = \$emailValidator;
        \$this->charset = \$charset;
        \$this->addressEncoder = \$addressEncoder ?? new Swift_AddressEncoder_IdnAddressEncoder();
    }

    /**
     * Create a new Mailbox Header with a list of \$addresses.
     *
     * @param string            \$name
     * @param array|string|null \$addresses
     *
     * @return Swift_Mime_Header
     */
    public function createMailboxHeader(\$name, \$addresses = null)
    {
        \$header = new Swift_Mime_Headers_MailboxHeader(\$name, \$this->encoder, \$this->emailValidator, \$this->addressEncoder);
        if (isset(\$addresses)) {
            \$header->setFieldBodyModel(\$addresses);
        }
        \$this->setHeaderCharset(\$header);

        return \$header;
    }

    /**
     * Create a new Date header using \$dateTime.
     *
     * @param string                 \$name
     * @param DateTimeInterface|null \$dateTime
     *
     * @return Swift_Mime_Header
     */
    public function createDateHeader(\$name, DateTimeInterface \$dateTime = null)
    {
        \$header = new Swift_Mime_Headers_DateHeader(\$name);
        if (isset(\$dateTime)) {
            \$header->setFieldBodyModel(\$dateTime);
        }
        \$this->setHeaderCharset(\$header);

        return \$header;
    }

    /**
     * Create a new basic text header with \$name and \$value.
     *
     * @param string \$name
     * @param string \$value
     *
     * @return Swift_Mime_Header
     */
    public function createTextHeader(\$name, \$value = null)
    {
        \$header = new Swift_Mime_Headers_UnstructuredHeader(\$name, \$this->encoder);
        if (isset(\$value)) {
            \$header->setFieldBodyModel(\$value);
        }
        \$this->setHeaderCharset(\$header);

        return \$header;
    }

    /**
     * Create a new ParameterizedHeader with \$name, \$value and \$params.
     *
     * @param string \$name
     * @param string \$value
     * @param array  \$params
     *
     * @return Swift_Mime_Headers_ParameterizedHeader
     */
    public function createParameterizedHeader(\$name, \$value = null, \$params = [])
    {
        \$header = new Swift_Mime_Headers_ParameterizedHeader(\$name, \$this->encoder, ('content-disposition' == strtolower(\$name)) ? \$this->paramEncoder : null);
        if (isset(\$value)) {
            \$header->setFieldBodyModel(\$value);
        }
        foreach (\$params as \$k => \$v) {
            \$header->setParameter(\$k, \$v);
        }
        \$this->setHeaderCharset(\$header);

        return \$header;
    }

    /**
     * Create a new ID header for Message-ID or Content-ID.
     *
     * @param string       \$name
     * @param string|array \$ids
     *
     * @return Swift_Mime_Header
     */
    public function createIdHeader(\$name, \$ids = null)
    {
        \$header = new Swift_Mime_Headers_IdentificationHeader(\$name, \$this->emailValidator);
        if (isset(\$ids)) {
            \$header->setFieldBodyModel(\$ids);
        }
        \$this->setHeaderCharset(\$header);

        return \$header;
    }

    /**
     * Create a new Path header with an address (path) in it.
     *
     * @param string \$name
     * @param string \$path
     *
     * @return Swift_Mime_Header
     */
    public function createPathHeader(\$name, \$path = null)
    {
        \$header = new Swift_Mime_Headers_PathHeader(\$name, \$this->emailValidator);
        if (isset(\$path)) {
            \$header->setFieldBodyModel(\$path);
        }
        \$this->setHeaderCharset(\$header);

        return \$header;
    }

    /**
     * Notify this observer that the entity's charset has changed.
     *
     * @param string \$charset
     */
    public function charsetChanged(\$charset)
    {
        \$this->charset = \$charset;
        \$this->encoder->charsetChanged(\$charset);
        \$this->paramEncoder->charsetChanged(\$charset);
    }

    /**
     * Make a deep copy of object.
     */
    public function __clone()
    {
        \$this->encoder = clone \$this->encoder;
        \$this->paramEncoder = clone \$this->paramEncoder;
    }

    /** Apply the charset to the Header */
    private function setHeaderCharset(Swift_Mime_Header \$header)
    {
        if (isset(\$this->charset)) {
            \$header->setCharset(\$this->charset);
        }
    }
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/SimpleHeaderFactory.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/SimpleHeaderFactory.php");
    }
}
