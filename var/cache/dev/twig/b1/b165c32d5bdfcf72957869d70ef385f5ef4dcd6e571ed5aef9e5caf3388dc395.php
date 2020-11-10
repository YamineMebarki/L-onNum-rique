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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/MimePart.php */
class __TwigTemplate_f82b8ccbfdbc29eef753937dde98ef34fbf60d8d8bd70e34eb18e815082abe56 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/MimePart.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/MimePart.php"));

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
 * A MIME part, in a multipart message.
 *
 * @author Chris Corbyn
 */
class Swift_Mime_MimePart extends Swift_Mime_SimpleMimeEntity
{
    /** The format parameter last specified by the user */
    protected \$userFormat;

    /** The charset last specified by the user */
    protected \$userCharset;

    /** The delsp parameter last specified by the user */
    protected \$userDelSp;

    /** The nesting level of this MimePart */
    private \$nestingLevel = self::LEVEL_ALTERNATIVE;

    /**
     * Create a new MimePart with \$headers, \$encoder and \$cache.
     *
     * @param string \$charset
     */
    public function __construct(Swift_Mime_SimpleHeaderSet \$headers, Swift_Mime_ContentEncoder \$encoder, Swift_KeyCache \$cache, Swift_IdGenerator \$idGenerator, \$charset = null)
    {
        parent::__construct(\$headers, \$encoder, \$cache, \$idGenerator);
        \$this->setContentType('text/plain');
        if (null !== \$charset) {
            \$this->setCharset(\$charset);
        }
    }

    /**
     * Set the body of this entity, either as a string, or as an instance of
     * {@link Swift_OutputByteStream}.
     *
     * @param mixed  \$body
     * @param string \$contentType optional
     * @param string \$charset     optional
     *
     * @return \$this
     */
    public function setBody(\$body, \$contentType = null, \$charset = null)
    {
        if (isset(\$charset)) {
            \$this->setCharset(\$charset);
        }
        \$body = \$this->convertString(\$body);

        parent::setBody(\$body, \$contentType);

        return \$this;
    }

    /**
     * Get the character set of this entity.
     *
     * @return string
     */
    public function getCharset()
    {
        return \$this->getHeaderParameter('Content-Type', 'charset');
    }

    /**
     * Set the character set of this entity.
     *
     * @param string \$charset
     *
     * @return \$this
     */
    public function setCharset(\$charset)
    {
        \$this->setHeaderParameter('Content-Type', 'charset', \$charset);
        if (\$charset !== \$this->userCharset) {
            \$this->clearCache();
        }
        \$this->userCharset = \$charset;
        parent::charsetChanged(\$charset);

        return \$this;
    }

    /**
     * Get the format of this entity (i.e. flowed or fixed).
     *
     * @return string
     */
    public function getFormat()
    {
        return \$this->getHeaderParameter('Content-Type', 'format');
    }

    /**
     * Set the format of this entity (flowed or fixed).
     *
     * @param string \$format
     *
     * @return \$this
     */
    public function setFormat(\$format)
    {
        \$this->setHeaderParameter('Content-Type', 'format', \$format);
        \$this->userFormat = \$format;

        return \$this;
    }

    /**
     * DevLaon if delsp is being used for this entity.
     *
     * @return bool
     */
    public function getDelSp()
    {
        return 'yes' === \$this->getHeaderParameter('Content-Type', 'delsp');
    }

    /**
     * Turn delsp on or off for this entity.
     *
     * @param bool \$delsp
     *
     * @return \$this
     */
    public function setDelSp(\$delsp = true)
    {
        \$this->setHeaderParameter('Content-Type', 'delsp', \$delsp ? 'yes' : null);
        \$this->userDelSp = \$delsp;

        return \$this;
    }

    /**
     * Get the nesting level of this entity.
     *
     * @see LEVEL_TOP, LEVEL_ALTERNATIVE, LEVEL_MIXED, LEVEL_RELATED
     *
     * @return int
     */
    public function getNestingLevel()
    {
        return \$this->nestingLevel;
    }

    /**
     * Receive notification that the charset has changed on this document, or a
     * parent document.
     *
     * @param string \$charset
     */
    public function charsetChanged(\$charset)
    {
        \$this->setCharset(\$charset);
    }

    /** Fix the content-type and encoding of this entity */
    protected function fixHeaders()
    {
        parent::fixHeaders();
        if (count(\$this->getChildren())) {
            \$this->setHeaderParameter('Content-Type', 'charset', null);
            \$this->setHeaderParameter('Content-Type', 'format', null);
            \$this->setHeaderParameter('Content-Type', 'delsp', null);
        } else {
            \$this->setCharset(\$this->userCharset);
            \$this->setFormat(\$this->userFormat);
            \$this->setDelSp(\$this->userDelSp);
        }
    }

    /** Set the nesting level of this entity */
    protected function setNestingLevel(\$level)
    {
        \$this->nestingLevel = \$level;
    }

    /** Encode charset when charset is not utf-8 */
    protected function convertString(\$string)
    {
        \$charset = strtolower(\$this->getCharset());
        if (!in_array(\$charset, ['utf-8', 'iso-8859-1', 'iso-8859-15', ''])) {
            return mb_convert_encoding(\$string, \$charset, 'utf-8');
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
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/MimePart.php";
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
 * A MIME part, in a multipart message.
 *
 * @author Chris Corbyn
 */
class Swift_Mime_MimePart extends Swift_Mime_SimpleMimeEntity
{
    /** The format parameter last specified by the user */
    protected \$userFormat;

    /** The charset last specified by the user */
    protected \$userCharset;

    /** The delsp parameter last specified by the user */
    protected \$userDelSp;

    /** The nesting level of this MimePart */
    private \$nestingLevel = self::LEVEL_ALTERNATIVE;

    /**
     * Create a new MimePart with \$headers, \$encoder and \$cache.
     *
     * @param string \$charset
     */
    public function __construct(Swift_Mime_SimpleHeaderSet \$headers, Swift_Mime_ContentEncoder \$encoder, Swift_KeyCache \$cache, Swift_IdGenerator \$idGenerator, \$charset = null)
    {
        parent::__construct(\$headers, \$encoder, \$cache, \$idGenerator);
        \$this->setContentType('text/plain');
        if (null !== \$charset) {
            \$this->setCharset(\$charset);
        }
    }

    /**
     * Set the body of this entity, either as a string, or as an instance of
     * {@link Swift_OutputByteStream}.
     *
     * @param mixed  \$body
     * @param string \$contentType optional
     * @param string \$charset     optional
     *
     * @return \$this
     */
    public function setBody(\$body, \$contentType = null, \$charset = null)
    {
        if (isset(\$charset)) {
            \$this->setCharset(\$charset);
        }
        \$body = \$this->convertString(\$body);

        parent::setBody(\$body, \$contentType);

        return \$this;
    }

    /**
     * Get the character set of this entity.
     *
     * @return string
     */
    public function getCharset()
    {
        return \$this->getHeaderParameter('Content-Type', 'charset');
    }

    /**
     * Set the character set of this entity.
     *
     * @param string \$charset
     *
     * @return \$this
     */
    public function setCharset(\$charset)
    {
        \$this->setHeaderParameter('Content-Type', 'charset', \$charset);
        if (\$charset !== \$this->userCharset) {
            \$this->clearCache();
        }
        \$this->userCharset = \$charset;
        parent::charsetChanged(\$charset);

        return \$this;
    }

    /**
     * Get the format of this entity (i.e. flowed or fixed).
     *
     * @return string
     */
    public function getFormat()
    {
        return \$this->getHeaderParameter('Content-Type', 'format');
    }

    /**
     * Set the format of this entity (flowed or fixed).
     *
     * @param string \$format
     *
     * @return \$this
     */
    public function setFormat(\$format)
    {
        \$this->setHeaderParameter('Content-Type', 'format', \$format);
        \$this->userFormat = \$format;

        return \$this;
    }

    /**
     * DevLaon if delsp is being used for this entity.
     *
     * @return bool
     */
    public function getDelSp()
    {
        return 'yes' === \$this->getHeaderParameter('Content-Type', 'delsp');
    }

    /**
     * Turn delsp on or off for this entity.
     *
     * @param bool \$delsp
     *
     * @return \$this
     */
    public function setDelSp(\$delsp = true)
    {
        \$this->setHeaderParameter('Content-Type', 'delsp', \$delsp ? 'yes' : null);
        \$this->userDelSp = \$delsp;

        return \$this;
    }

    /**
     * Get the nesting level of this entity.
     *
     * @see LEVEL_TOP, LEVEL_ALTERNATIVE, LEVEL_MIXED, LEVEL_RELATED
     *
     * @return int
     */
    public function getNestingLevel()
    {
        return \$this->nestingLevel;
    }

    /**
     * Receive notification that the charset has changed on this document, or a
     * parent document.
     *
     * @param string \$charset
     */
    public function charsetChanged(\$charset)
    {
        \$this->setCharset(\$charset);
    }

    /** Fix the content-type and encoding of this entity */
    protected function fixHeaders()
    {
        parent::fixHeaders();
        if (count(\$this->getChildren())) {
            \$this->setHeaderParameter('Content-Type', 'charset', null);
            \$this->setHeaderParameter('Content-Type', 'format', null);
            \$this->setHeaderParameter('Content-Type', 'delsp', null);
        } else {
            \$this->setCharset(\$this->userCharset);
            \$this->setFormat(\$this->userFormat);
            \$this->setDelSp(\$this->userDelSp);
        }
    }

    /** Set the nesting level of this entity */
    protected function setNestingLevel(\$level)
    {
        \$this->nestingLevel = \$level;
    }

    /** Encode charset when charset is not utf-8 */
    protected function convertString(\$string)
    {
        \$charset = strtolower(\$this->getCharset());
        if (!in_array(\$charset, ['utf-8', 'iso-8859-1', 'iso-8859-15', ''])) {
            return mb_convert_encoding(\$string, \$charset, 'utf-8');
        }

        return \$string;
    }
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/MimePart.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/MimePart.php");
    }
}
