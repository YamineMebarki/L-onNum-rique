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

/* vendor/monolog/monolog/src/Monolog/Handler/SwiftMailerHandler.php */
class __TwigTemplate_70a5a4983536200c08ef4c8e1fcadf4786d8672b1e298c8cf799ef208c9d0c0c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/SwiftMailerHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/SwiftMailerHandler.php"));

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
use Monolog\\Formatter\\FormatterInterface;
use Monolog\\Formatter\\LineFormatter;
use Swift;

/**
 * SwiftMailerHandler uses Swift_Mailer to send the emails
 *
 * @author Gyula Sallai
 */
class SwiftMailerHandler extends MailHandler
{
    protected \$mailer;
    private \$messageTemplate;

    /**
     * @param \\Swift_Mailer           \$mailer  The mailer to use
     * @param callable|\\Swift_Message \$message An example message for real messages, only the body will be replaced
     * @param int                     \$level   The minimum logging level at which this handler will be triggered
     * @param bool                    \$bubble  Whether the messages that are handled can bubble up the stack or not
     */
    public function __construct(\\Swift_Mailer \$mailer, \$message, \$level = Logger::ERROR, \$bubble = true)
    {
        parent::__construct(\$level, \$bubble);

        \$this->mailer = \$mailer;
        \$this->messageTemplate = \$message;
    }

    /**
     * {@inheritdoc}
     */
    protected function send(\$content, array \$records)
    {
        \$this->mailer->send(\$this->buildMessage(\$content, \$records));
    }

    /**
     * Gets the formatter for the Swift_Message subject.
     *
     * @param  string             \$format The format of the subject
     * @return FormatterInterface
     */
    protected function getSubjectFormatter(\$format)
    {
        return new LineFormatter(\$format);
    }

    /**
     * Creates instance of Swift_Message to be sent
     *
     * @param  string         \$content formatted email body to be sent
     * @param  array          \$records Log records that formed the content
     * @return \\Swift_Message
     */
    protected function buildMessage(\$content, array \$records)
    {
        \$message = null;
        if (\$this->messageTemplate instanceof \\Swift_Message) {
            \$message = clone \$this->messageTemplate;
            \$message->generateId();
        } elseif (is_callable(\$this->messageTemplate)) {
            \$message = call_user_func(\$this->messageTemplate, \$content, \$records);
        }

        if (!\$message instanceof \\Swift_Message) {
            throw new \\InvalidArgumentException('Could not resolve message as instance of Swift_Message or a callable returning it');
        }

        if (\$records) {
            \$subjectFormatter = \$this->getSubjectFormatter(\$message->getSubject());
            \$message->setSubject(\$subjectFormatter->format(\$this->getHighestRecord(\$records)));
        }

        \$message->setBody(\$content);
        if (version_compare(Swift::VERSION, '6.0.0', '>=')) {
            \$message->setDate(new \\DateTimeImmutable());
        } else {
            \$message->setDate(time());
        }

        return \$message;
    }

    /**
     * BC getter, to be removed in 2.0
     */
    public function __get(\$name)
    {
        if (\$name === 'message') {
            trigger_error('SwiftMailerHandler->message is deprecated, use ->buildMessage() instead to retrieve the message', E_USER_DEPRECATED);

            return \$this->buildMessage(null, array());
        }

        throw new \\InvalidArgumentException('Invalid property '.\$name);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/monolog/monolog/src/Monolog/Handler/SwiftMailerHandler.php";
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
use Monolog\\Formatter\\FormatterInterface;
use Monolog\\Formatter\\LineFormatter;
use Swift;

/**
 * SwiftMailerHandler uses Swift_Mailer to send the emails
 *
 * @author Gyula Sallai
 */
class SwiftMailerHandler extends MailHandler
{
    protected \$mailer;
    private \$messageTemplate;

    /**
     * @param \\Swift_Mailer           \$mailer  The mailer to use
     * @param callable|\\Swift_Message \$message An example message for real messages, only the body will be replaced
     * @param int                     \$level   The minimum logging level at which this handler will be triggered
     * @param bool                    \$bubble  Whether the messages that are handled can bubble up the stack or not
     */
    public function __construct(\\Swift_Mailer \$mailer, \$message, \$level = Logger::ERROR, \$bubble = true)
    {
        parent::__construct(\$level, \$bubble);

        \$this->mailer = \$mailer;
        \$this->messageTemplate = \$message;
    }

    /**
     * {@inheritdoc}
     */
    protected function send(\$content, array \$records)
    {
        \$this->mailer->send(\$this->buildMessage(\$content, \$records));
    }

    /**
     * Gets the formatter for the Swift_Message subject.
     *
     * @param  string             \$format The format of the subject
     * @return FormatterInterface
     */
    protected function getSubjectFormatter(\$format)
    {
        return new LineFormatter(\$format);
    }

    /**
     * Creates instance of Swift_Message to be sent
     *
     * @param  string         \$content formatted email body to be sent
     * @param  array          \$records Log records that formed the content
     * @return \\Swift_Message
     */
    protected function buildMessage(\$content, array \$records)
    {
        \$message = null;
        if (\$this->messageTemplate instanceof \\Swift_Message) {
            \$message = clone \$this->messageTemplate;
            \$message->generateId();
        } elseif (is_callable(\$this->messageTemplate)) {
            \$message = call_user_func(\$this->messageTemplate, \$content, \$records);
        }

        if (!\$message instanceof \\Swift_Message) {
            throw new \\InvalidArgumentException('Could not resolve message as instance of Swift_Message or a callable returning it');
        }

        if (\$records) {
            \$subjectFormatter = \$this->getSubjectFormatter(\$message->getSubject());
            \$message->setSubject(\$subjectFormatter->format(\$this->getHighestRecord(\$records)));
        }

        \$message->setBody(\$content);
        if (version_compare(Swift::VERSION, '6.0.0', '>=')) {
            \$message->setDate(new \\DateTimeImmutable());
        } else {
            \$message->setDate(time());
        }

        return \$message;
    }

    /**
     * BC getter, to be removed in 2.0
     */
    public function __get(\$name)
    {
        if (\$name === 'message') {
            trigger_error('SwiftMailerHandler->message is deprecated, use ->buildMessage() instead to retrieve the message', E_USER_DEPRECATED);

            return \$this->buildMessage(null, array());
        }

        throw new \\InvalidArgumentException('Invalid property '.\$name);
    }
}
", "vendor/monolog/monolog/src/Monolog/Handler/SwiftMailerHandler.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Handler/SwiftMailerHandler.php");
    }
}
