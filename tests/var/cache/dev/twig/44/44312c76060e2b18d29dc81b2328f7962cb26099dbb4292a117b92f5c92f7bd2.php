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

/* vendor/symfony/swiftmailer-bundle/DataCollector/MessageDataCollector.php */
class __TwigTemplate_9dd61db6ff5fde66a1d61af351ca99f2f1b8ade0348e4f549b97651bb39c7c6c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/swiftmailer-bundle/DataCollector/MessageDataCollector.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/swiftmailer-bundle/DataCollector/MessageDataCollector.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bundle\\SwiftmailerBundle\\DataCollector;

use Symfony\\Component\\HttpKernel\\DataCollector\\DataCollector;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;

/**
 * MessageDataCollector.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Clément JOBEILI <clement.jobeili@gmail.com>
 * @author Jérémy Romey <jeremy@free-agent.fr>
 */
class MessageDataCollector extends DataCollector
{
    private \$container;

    /**
     * We don't inject the message logger and mailer here
     * to avoid the creation of these objects when no emails are sent.
     */
    public function __construct(ContainerInterface \$container)
    {
        \$this->container = \$container;
    }

    /**
     * {@inheritdoc}
     */
    public function collect(Request \$request, Response \$response, \\Exception \$exception = null)
    {
        \$this->reset();

        // only collect when Swiftmailer has already been initialized
        if (class_exists('Swift_Mailer', false)) {
            \$mailers = \$this->container->getParameter('swiftmailer.mailers');
            foreach (\$mailers as \$name => \$mailer) {
                if (\$this->container->getParameter('swiftmailer.default_mailer') == \$name) {
                    \$this->data['defaultMailer'] = \$name;
                }
                \$loggerName = sprintf('swiftmailer.mailer.%s.plugin.messagelogger', \$name);
                if (\$this->container->has(\$loggerName)) {
                    \$logger = \$this->container->get(\$loggerName);
                    \$this->data['mailer'][\$name] = [
                        'messages' => [],
                        'messageCount' => \$logger->countMessages(),
                        'isSpool' => \$this->container->getParameter(sprintf('swiftmailer.mailer.%s.spool.enabled', \$name)),
                    ];

                    foreach (\$logger->getMessages() as \$message) {
                        \$message->__contentType = \$message->getBodyContentType();
                        \$message->__base64EncodedBody = base64_encode(\$message->getBody());
                        if ('text/plain' === \$message->__contentType) {
                            foreach (\$message->getChildren() as \$child) {
                                if ('text/html' === \$child->getContentType()) {
                                    \$message->__contentType = 'text/html';
                                    \$message->__base64EncodedBody = base64_encode(\$child->getBody());
                                    break;
                                }
                            }
                        }
                        \$this->data['mailer'][\$name]['messages'][] = \$message;
                    }

                    \$this->data['messageCount'] += \$logger->countMessages();
                }
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function reset()
    {
        \$this->data = [
            'mailer' => [],
            'messageCount' => 0,
            'defaultMailer' => '',
        ];
    }

    /**
     * Returns the mailer names.
     *
     * @return array the mailer names
     */
    public function getMailers()
    {
        return array_keys(\$this->data['mailer']);
    }

    /**
     * Returns the data collected of a mailer.
     *
     * @return array the data of the mailer
     */
    public function getMailerData(\$name)
    {
        if (!isset(\$this->data['mailer'][\$name])) {
            throw new \\LogicException(sprintf('Missing \"%s\" data in \"%s\".', \$name, \\get_class(\$this)));
        }

        return \$this->data['mailer'][\$name];
    }

    /**
     * Returns the message count of a mailer or the total.
     *
     * @return int the number of messages
     */
    public function getMessageCount(\$name = null)
    {
        if (null === \$name) {
            return \$this->data['messageCount'];
        } elseif (\$data = \$this->getMailerData(\$name)) {
            return \$data['messageCount'];
        }

        return;
    }

    /**
     * Returns the messages of a mailer.
     *
     * @return \\Swift_Message[] the messages
     */
    public function getMessages(\$name = 'default')
    {
        if (\$data = \$this->getMailerData(\$name)) {
            return \$data['messages'];
        }

        return [];
    }

    /**
     * Returns if the mailer has spool.
     *
     * @return bool
     */
    public function isSpool(\$name)
    {
        if (\$data = \$this->getMailerData(\$name)) {
            return \$data['isSpool'];
        }

        return;
    }

    /**
     * Returns if the mailer is the default mailer.
     *
     * @return bool
     */
    public function isDefaultMailer(\$name)
    {
        return \$this->data['defaultMailer'] == \$name;
    }

    public function extractAttachments(\\Swift_Message \$message)
    {
        \$attachments = [];

        foreach (\$message->getChildren() as \$child) {
            if (\$child instanceof \\Swift_Attachment) {
                \$attachments[] = \$child;
            }
        }

        return \$attachments;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'swiftmailer';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/swiftmailer-bundle/DataCollector/MessageDataCollector.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bundle\\SwiftmailerBundle\\DataCollector;

use Symfony\\Component\\HttpKernel\\DataCollector\\DataCollector;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;

/**
 * MessageDataCollector.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Clément JOBEILI <clement.jobeili@gmail.com>
 * @author Jérémy Romey <jeremy@free-agent.fr>
 */
class MessageDataCollector extends DataCollector
{
    private \$container;

    /**
     * We don't inject the message logger and mailer here
     * to avoid the creation of these objects when no emails are sent.
     */
    public function __construct(ContainerInterface \$container)
    {
        \$this->container = \$container;
    }

    /**
     * {@inheritdoc}
     */
    public function collect(Request \$request, Response \$response, \\Exception \$exception = null)
    {
        \$this->reset();

        // only collect when Swiftmailer has already been initialized
        if (class_exists('Swift_Mailer', false)) {
            \$mailers = \$this->container->getParameter('swiftmailer.mailers');
            foreach (\$mailers as \$name => \$mailer) {
                if (\$this->container->getParameter('swiftmailer.default_mailer') == \$name) {
                    \$this->data['defaultMailer'] = \$name;
                }
                \$loggerName = sprintf('swiftmailer.mailer.%s.plugin.messagelogger', \$name);
                if (\$this->container->has(\$loggerName)) {
                    \$logger = \$this->container->get(\$loggerName);
                    \$this->data['mailer'][\$name] = [
                        'messages' => [],
                        'messageCount' => \$logger->countMessages(),
                        'isSpool' => \$this->container->getParameter(sprintf('swiftmailer.mailer.%s.spool.enabled', \$name)),
                    ];

                    foreach (\$logger->getMessages() as \$message) {
                        \$message->__contentType = \$message->getBodyContentType();
                        \$message->__base64EncodedBody = base64_encode(\$message->getBody());
                        if ('text/plain' === \$message->__contentType) {
                            foreach (\$message->getChildren() as \$child) {
                                if ('text/html' === \$child->getContentType()) {
                                    \$message->__contentType = 'text/html';
                                    \$message->__base64EncodedBody = base64_encode(\$child->getBody());
                                    break;
                                }
                            }
                        }
                        \$this->data['mailer'][\$name]['messages'][] = \$message;
                    }

                    \$this->data['messageCount'] += \$logger->countMessages();
                }
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function reset()
    {
        \$this->data = [
            'mailer' => [],
            'messageCount' => 0,
            'defaultMailer' => '',
        ];
    }

    /**
     * Returns the mailer names.
     *
     * @return array the mailer names
     */
    public function getMailers()
    {
        return array_keys(\$this->data['mailer']);
    }

    /**
     * Returns the data collected of a mailer.
     *
     * @return array the data of the mailer
     */
    public function getMailerData(\$name)
    {
        if (!isset(\$this->data['mailer'][\$name])) {
            throw new \\LogicException(sprintf('Missing \"%s\" data in \"%s\".', \$name, \\get_class(\$this)));
        }

        return \$this->data['mailer'][\$name];
    }

    /**
     * Returns the message count of a mailer or the total.
     *
     * @return int the number of messages
     */
    public function getMessageCount(\$name = null)
    {
        if (null === \$name) {
            return \$this->data['messageCount'];
        } elseif (\$data = \$this->getMailerData(\$name)) {
            return \$data['messageCount'];
        }

        return;
    }

    /**
     * Returns the messages of a mailer.
     *
     * @return \\Swift_Message[] the messages
     */
    public function getMessages(\$name = 'default')
    {
        if (\$data = \$this->getMailerData(\$name)) {
            return \$data['messages'];
        }

        return [];
    }

    /**
     * Returns if the mailer has spool.
     *
     * @return bool
     */
    public function isSpool(\$name)
    {
        if (\$data = \$this->getMailerData(\$name)) {
            return \$data['isSpool'];
        }

        return;
    }

    /**
     * Returns if the mailer is the default mailer.
     *
     * @return bool
     */
    public function isDefaultMailer(\$name)
    {
        return \$this->data['defaultMailer'] == \$name;
    }

    public function extractAttachments(\\Swift_Message \$message)
    {
        \$attachments = [];

        foreach (\$message->getChildren() as \$child) {
            if (\$child instanceof \\Swift_Attachment) {
                \$attachments[] = \$child;
            }
        }

        return \$attachments;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'swiftmailer';
    }
}
", "vendor/symfony/swiftmailer-bundle/DataCollector/MessageDataCollector.php", "/var/www/public/DevLaon/templates/vendor/symfony/swiftmailer-bundle/DataCollector/MessageDataCollector.php");
    }
}
