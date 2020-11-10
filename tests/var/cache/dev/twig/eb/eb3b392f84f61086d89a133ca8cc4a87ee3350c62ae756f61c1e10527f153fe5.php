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

/* vendor/monolog/monolog/src/Monolog/Handler/NativeMailerHandler.php */
class __TwigTemplate_09b0e3b1ee9a2dedbe64ac3862c03c275468cc831dad9217b95e404a12a45a86 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/NativeMailerHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/NativeMailerHandler.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Monolog package.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Monolog\\Handler;

use Monolog\\Logger;
use Monolog\\Formatter\\LineFormatter;

/**
 * NativeMailerHandler uses the mail() function to send the emails
 *
 * @author Christophe Coevoet <stof@notk.org>
 * @author Mark Garrett <mark@moderndeveloperllc.com>
 */
class NativeMailerHandler extends MailHandler
{
    /**
     * The email addresses to which the message will be sent
     * @var array
     */
    protected \$to;

    /**
     * The subject of the email
     * @var string
     */
    protected \$subject;

    /**
     * Optional headers for the message
     * @var array
     */
    protected \$headers = array();

    /**
     * Optional parameters for the message
     * @var array
     */
    protected \$parameters = array();

    /**
     * The wordwrap length for the message
     * @var int
     */
    protected \$maxColumnWidth;

    /**
     * The Content-type for the message
     * @var string
     */
    protected \$contentType = 'text/plain';

    /**
     * The encoding for the message
     * @var string
     */
    protected \$encoding = 'utf-8';

    /**
     * @param string|array \$to             The receiver of the mail
     * @param string       \$subject        The subject of the mail
     * @param string       \$from           The sender of the mail
     * @param int          \$level          The minimum logging level at which this handler will be triggered
     * @param bool         \$bubble         Whether the messages that are handled can bubble up the stack or not
     * @param int          \$maxColumnWidth The maximum column width that the message lines will have
     */
    public function __construct(\$to, \$subject, \$from, \$level = Logger::ERROR, \$bubble = true, \$maxColumnWidth = 70)
    {
        parent::__construct(\$level, \$bubble);
        \$this->to = is_array(\$to) ? \$to : array(\$to);
        \$this->subject = \$subject;
        \$this->addHeader(sprintf('From: %s', \$from));
        \$this->maxColumnWidth = \$maxColumnWidth;
    }

    /**
     * Add headers to the message
     *
     * @param  string|array \$headers Custom added headers
     * @return self
     */
    public function addHeader(\$headers)
    {
        foreach ((array) \$headers as \$header) {
            if (strpos(\$header, \"\\n\") !== false || strpos(\$header, \"\\r\") !== false) {
                throw new \\InvalidArgumentException('Headers can not contain newline characters for security reasons');
            }
            \$this->headers[] = \$header;
        }

        return \$this;
    }

    /**
     * Add parameters to the message
     *
     * @param  string|array \$parameters Custom added parameters
     * @return self
     */
    public function addParameter(\$parameters)
    {
        \$this->parameters = array_merge(\$this->parameters, (array) \$parameters);

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    protected function send(\$content, array \$records)
    {
        \$content = wordwrap(\$content, \$this->maxColumnWidth);
        \$headers = ltrim(implode(\"\\r\\n\", \$this->headers) . \"\\r\\n\", \"\\r\\n\");
        \$headers .= 'Content-type: ' . \$this->getContentType() . '; charset=' . \$this->getEncoding() . \"\\r\\n\";
        if (\$this->getContentType() == 'text/html' && false === strpos(\$headers, 'MIME-Version:')) {
            \$headers .= 'MIME-Version: 1.0' . \"\\r\\n\";
        }

        \$subject = \$this->subject;
        if (\$records) {
            \$subjectFormatter = new LineFormatter(\$this->subject);
            \$subject = \$subjectFormatter->format(\$this->getHighestRecord(\$records));
        }

        \$parameters = implode(' ', \$this->parameters);
        foreach (\$this->to as \$to) {
            mail(\$to, \$subject, \$content, \$headers, \$parameters);
        }
    }

    /**
     * @return string \$contentType
     */
    public function getContentType()
    {
        return \$this->contentType;
    }

    /**
     * @return string \$encoding
     */
    public function getEncoding()
    {
        return \$this->encoding;
    }

    /**
     * @param  string \$contentType The content type of the email - Defaults to text/plain. Use text/html for HTML
     *                             messages.
     * @return self
     */
    public function setContentType(\$contentType)
    {
        if (strpos(\$contentType, \"\\n\") !== false || strpos(\$contentType, \"\\r\") !== false) {
            throw new \\InvalidArgumentException('The content type can not contain newline characters to prevent email header injection');
        }

        \$this->contentType = \$contentType;

        return \$this;
    }

    /**
     * @param  string \$encoding
     * @return self
     */
    public function setEncoding(\$encoding)
    {
        if (strpos(\$encoding, \"\\n\") !== false || strpos(\$encoding, \"\\r\") !== false) {
            throw new \\InvalidArgumentException('The encoding can not contain newline characters to prevent email header injection');
        }

        \$this->encoding = \$encoding;

        return \$this;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/monolog/monolog/src/Monolog/Handler/NativeMailerHandler.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Monolog package.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Monolog\\Handler;

use Monolog\\Logger;
use Monolog\\Formatter\\LineFormatter;

/**
 * NativeMailerHandler uses the mail() function to send the emails
 *
 * @author Christophe Coevoet <stof@notk.org>
 * @author Mark Garrett <mark@moderndeveloperllc.com>
 */
class NativeMailerHandler extends MailHandler
{
    /**
     * The email addresses to which the message will be sent
     * @var array
     */
    protected \$to;

    /**
     * The subject of the email
     * @var string
     */
    protected \$subject;

    /**
     * Optional headers for the message
     * @var array
     */
    protected \$headers = array();

    /**
     * Optional parameters for the message
     * @var array
     */
    protected \$parameters = array();

    /**
     * The wordwrap length for the message
     * @var int
     */
    protected \$maxColumnWidth;

    /**
     * The Content-type for the message
     * @var string
     */
    protected \$contentType = 'text/plain';

    /**
     * The encoding for the message
     * @var string
     */
    protected \$encoding = 'utf-8';

    /**
     * @param string|array \$to             The receiver of the mail
     * @param string       \$subject        The subject of the mail
     * @param string       \$from           The sender of the mail
     * @param int          \$level          The minimum logging level at which this handler will be triggered
     * @param bool         \$bubble         Whether the messages that are handled can bubble up the stack or not
     * @param int          \$maxColumnWidth The maximum column width that the message lines will have
     */
    public function __construct(\$to, \$subject, \$from, \$level = Logger::ERROR, \$bubble = true, \$maxColumnWidth = 70)
    {
        parent::__construct(\$level, \$bubble);
        \$this->to = is_array(\$to) ? \$to : array(\$to);
        \$this->subject = \$subject;
        \$this->addHeader(sprintf('From: %s', \$from));
        \$this->maxColumnWidth = \$maxColumnWidth;
    }

    /**
     * Add headers to the message
     *
     * @param  string|array \$headers Custom added headers
     * @return self
     */
    public function addHeader(\$headers)
    {
        foreach ((array) \$headers as \$header) {
            if (strpos(\$header, \"\\n\") !== false || strpos(\$header, \"\\r\") !== false) {
                throw new \\InvalidArgumentException('Headers can not contain newline characters for security reasons');
            }
            \$this->headers[] = \$header;
        }

        return \$this;
    }

    /**
     * Add parameters to the message
     *
     * @param  string|array \$parameters Custom added parameters
     * @return self
     */
    public function addParameter(\$parameters)
    {
        \$this->parameters = array_merge(\$this->parameters, (array) \$parameters);

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    protected function send(\$content, array \$records)
    {
        \$content = wordwrap(\$content, \$this->maxColumnWidth);
        \$headers = ltrim(implode(\"\\r\\n\", \$this->headers) . \"\\r\\n\", \"\\r\\n\");
        \$headers .= 'Content-type: ' . \$this->getContentType() . '; charset=' . \$this->getEncoding() . \"\\r\\n\";
        if (\$this->getContentType() == 'text/html' && false === strpos(\$headers, 'MIME-Version:')) {
            \$headers .= 'MIME-Version: 1.0' . \"\\r\\n\";
        }

        \$subject = \$this->subject;
        if (\$records) {
            \$subjectFormatter = new LineFormatter(\$this->subject);
            \$subject = \$subjectFormatter->format(\$this->getHighestRecord(\$records));
        }

        \$parameters = implode(' ', \$this->parameters);
        foreach (\$this->to as \$to) {
            mail(\$to, \$subject, \$content, \$headers, \$parameters);
        }
    }

    /**
     * @return string \$contentType
     */
    public function getContentType()
    {
        return \$this->contentType;
    }

    /**
     * @return string \$encoding
     */
    public function getEncoding()
    {
        return \$this->encoding;
    }

    /**
     * @param  string \$contentType The content type of the email - Defaults to text/plain. Use text/html for HTML
     *                             messages.
     * @return self
     */
    public function setContentType(\$contentType)
    {
        if (strpos(\$contentType, \"\\n\") !== false || strpos(\$contentType, \"\\r\") !== false) {
            throw new \\InvalidArgumentException('The content type can not contain newline characters to prevent email header injection');
        }

        \$this->contentType = \$contentType;

        return \$this;
    }

    /**
     * @param  string \$encoding
     * @return self
     */
    public function setEncoding(\$encoding)
    {
        if (strpos(\$encoding, \"\\n\") !== false || strpos(\$encoding, \"\\r\") !== false) {
            throw new \\InvalidArgumentException('The encoding can not contain newline characters to prevent email header injection');
        }

        \$this->encoding = \$encoding;

        return \$this;
    }
}
", "vendor/monolog/monolog/src/Monolog/Handler/NativeMailerHandler.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Handler/NativeMailerHandler.php");
    }
}
