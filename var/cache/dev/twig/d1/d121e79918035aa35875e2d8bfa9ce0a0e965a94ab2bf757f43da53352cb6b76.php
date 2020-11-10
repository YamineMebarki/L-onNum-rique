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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/ContentEncoder/QpContentEncoderProxy.php */
class __TwigTemplate_c51de5c87aa69cf1b7c528e5d75d259804347e9f6f6203dd675d01b4691e260b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/ContentEncoder/QpContentEncoderProxy.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/ContentEncoder/QpContentEncoderProxy.php"));

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
 * Proxy for quoted-printable content encoders.
 *
 * Switches on the best QP encoder implementation for current charset.
 *
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 */
class Swift_Mime_ContentEncoder_QpContentEncoderProxy implements Swift_Mime_ContentEncoder
{
    /**
     * @var Swift_Mime_ContentEncoder_QpContentEncoder
     */
    private \$safeEncoder;

    /**
     * @var Swift_Mime_ContentEncoder_NativeQpContentEncoder
     */
    private \$nativeEncoder;

    /**
     * @var null|string
     */
    private \$charset;

    /**
     * Constructor.
     *
     * @param string|null \$charset
     */
    public function __construct(Swift_Mime_ContentEncoder_QpContentEncoder \$safeEncoder, Swift_Mime_ContentEncoder_NativeQpContentEncoder \$nativeEncoder, \$charset)
    {
        \$this->safeEncoder = \$safeEncoder;
        \$this->nativeEncoder = \$nativeEncoder;
        \$this->charset = \$charset;
    }

    /**
     * Make a deep copy of object.
     */
    public function __clone()
    {
        \$this->safeEncoder = clone \$this->safeEncoder;
        \$this->nativeEncoder = clone \$this->nativeEncoder;
    }

    /**
     * {@inheritdoc}
     */
    public function charsetChanged(\$charset)
    {
        \$this->charset = \$charset;
        \$this->safeEncoder->charsetChanged(\$charset);
    }

    /**
     * {@inheritdoc}
     */
    public function encodeByteStream(Swift_OutputByteStream \$os, Swift_InputByteStream \$is, \$firstLineOffset = 0, \$maxLineLength = 0)
    {
        \$this->getEncoder()->encodeByteStream(\$os, \$is, \$firstLineOffset, \$maxLineLength);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'quoted-printable';
    }

    /**
     * {@inheritdoc}
     */
    public function encodeString(\$string, \$firstLineOffset = 0, \$maxLineLength = 0)
    {
        return \$this->getEncoder()->encodeString(\$string, \$firstLineOffset, \$maxLineLength);
    }

    /**
     * @return Swift_Mime_ContentEncoder
     */
    private function getEncoder()
    {
        return 'utf-8' === \$this->charset ? \$this->nativeEncoder : \$this->safeEncoder;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/ContentEncoder/QpContentEncoderProxy.php";
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
 * Proxy for quoted-printable content encoders.
 *
 * Switches on the best QP encoder implementation for current charset.
 *
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 */
class Swift_Mime_ContentEncoder_QpContentEncoderProxy implements Swift_Mime_ContentEncoder
{
    /**
     * @var Swift_Mime_ContentEncoder_QpContentEncoder
     */
    private \$safeEncoder;

    /**
     * @var Swift_Mime_ContentEncoder_NativeQpContentEncoder
     */
    private \$nativeEncoder;

    /**
     * @var null|string
     */
    private \$charset;

    /**
     * Constructor.
     *
     * @param string|null \$charset
     */
    public function __construct(Swift_Mime_ContentEncoder_QpContentEncoder \$safeEncoder, Swift_Mime_ContentEncoder_NativeQpContentEncoder \$nativeEncoder, \$charset)
    {
        \$this->safeEncoder = \$safeEncoder;
        \$this->nativeEncoder = \$nativeEncoder;
        \$this->charset = \$charset;
    }

    /**
     * Make a deep copy of object.
     */
    public function __clone()
    {
        \$this->safeEncoder = clone \$this->safeEncoder;
        \$this->nativeEncoder = clone \$this->nativeEncoder;
    }

    /**
     * {@inheritdoc}
     */
    public function charsetChanged(\$charset)
    {
        \$this->charset = \$charset;
        \$this->safeEncoder->charsetChanged(\$charset);
    }

    /**
     * {@inheritdoc}
     */
    public function encodeByteStream(Swift_OutputByteStream \$os, Swift_InputByteStream \$is, \$firstLineOffset = 0, \$maxLineLength = 0)
    {
        \$this->getEncoder()->encodeByteStream(\$os, \$is, \$firstLineOffset, \$maxLineLength);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'quoted-printable';
    }

    /**
     * {@inheritdoc}
     */
    public function encodeString(\$string, \$firstLineOffset = 0, \$maxLineLength = 0)
    {
        return \$this->getEncoder()->encodeString(\$string, \$firstLineOffset, \$maxLineLength);
    }

    /**
     * @return Swift_Mime_ContentEncoder
     */
    private function getEncoder()
    {
        return 'utf-8' === \$this->charset ? \$this->nativeEncoder : \$this->safeEncoder;
    }
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/ContentEncoder/QpContentEncoderProxy.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/ContentEncoder/QpContentEncoderProxy.php");
    }
}
