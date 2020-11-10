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

/* vendor/symfony/swiftmailer-bundle/EventListener/EmailSenderListener.php */
class __TwigTemplate_9f67054ccc2846a7404224887b4cc1b02eedeb521a6e579081a960cddddc17d6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/swiftmailer-bundle/EventListener/EmailSenderListener.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/swiftmailer-bundle/EventListener/EmailSenderListener.php"));

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

namespace Symfony\\Bundle\\SwiftmailerBundle\\EventListener;

use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;
use Symfony\\Component\\HttpKernel\\KernelEvents;
use Symfony\\Component\\Console\\ConsoleEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

/**
 * Sends emails for the memory spool.
 *
 * Emails are sent on the kernel.terminate event.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class EmailSenderListener implements EventSubscriberInterface
{
    private \$container;

    private \$logger;

    private \$wasExceptionThrown = false;

    public function __construct(ContainerInterface \$container, LoggerInterface \$logger = null)
    {
        \$this->container = \$container;
        \$this->logger = \$logger;
    }

    public function onException()
    {
        \$this->wasExceptionThrown = true;
    }

    public function onTerminate()
    {
        if (!\$this->container->has('mailer') || \$this->wasExceptionThrown) {
            return;
        }
        \$mailers = array_keys(\$this->container->getParameter('swiftmailer.mailers'));
        foreach (\$mailers as \$name) {
            if (method_exists(\$this->container, 'initialized') ? \$this->container->initialized(sprintf('swiftmailer.mailer.%s', \$name)) : true) {
                if (\$this->container->getParameter(sprintf('swiftmailer.mailer.%s.spool.enabled', \$name))) {
                    \$mailer = \$this->container->get(sprintf('swiftmailer.mailer.%s', \$name));
                    \$transport = \$mailer->getTransport();
                    if (\$transport instanceof \\Swift_Transport_SpoolTransport) {
                        \$spool = \$transport->getSpool();
                        if (\$spool instanceof \\Swift_MemorySpool) {
                            try {
                                \$spool->flushQueue(\$this->container->get(sprintf('swiftmailer.mailer.%s.transport.real', \$name)));
                            } catch (\\Swift_TransportException \$exception) {
                                if (null !== \$this->logger) {
                                    \$this->logger->error(sprintf('Exception occurred while flushing email queue: %s', \$exception->getMessage()));
                                }
                            }
                        }
                    }
                }
            }
        }
    }

    public static function getSubscribedEvents()
    {
        \$listeners = [
            KernelEvents::EXCEPTION => 'onException',
            KernelEvents::TERMINATE => 'onTerminate',
        ];

        if (class_exists('Symfony\\Component\\Console\\ConsoleEvents')) {
            \$listeners[class_exists('Symfony\\Component\\Console\\Event\\ConsoleErrorEvent') ? ConsoleEvents::ERROR : ConsoleEvents::EXCEPTION] = 'onException';
            \$listeners[ConsoleEvents::TERMINATE] = 'onTerminate';
        }

        return \$listeners;
    }

    public function reset()
    {
        \$this->wasExceptionThrown = false;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/swiftmailer-bundle/EventListener/EmailSenderListener.php";
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

namespace Symfony\\Bundle\\SwiftmailerBundle\\EventListener;

use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;
use Symfony\\Component\\HttpKernel\\KernelEvents;
use Symfony\\Component\\Console\\ConsoleEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

/**
 * Sends emails for the memory spool.
 *
 * Emails are sent on the kernel.terminate event.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class EmailSenderListener implements EventSubscriberInterface
{
    private \$container;

    private \$logger;

    private \$wasExceptionThrown = false;

    public function __construct(ContainerInterface \$container, LoggerInterface \$logger = null)
    {
        \$this->container = \$container;
        \$this->logger = \$logger;
    }

    public function onException()
    {
        \$this->wasExceptionThrown = true;
    }

    public function onTerminate()
    {
        if (!\$this->container->has('mailer') || \$this->wasExceptionThrown) {
            return;
        }
        \$mailers = array_keys(\$this->container->getParameter('swiftmailer.mailers'));
        foreach (\$mailers as \$name) {
            if (method_exists(\$this->container, 'initialized') ? \$this->container->initialized(sprintf('swiftmailer.mailer.%s', \$name)) : true) {
                if (\$this->container->getParameter(sprintf('swiftmailer.mailer.%s.spool.enabled', \$name))) {
                    \$mailer = \$this->container->get(sprintf('swiftmailer.mailer.%s', \$name));
                    \$transport = \$mailer->getTransport();
                    if (\$transport instanceof \\Swift_Transport_SpoolTransport) {
                        \$spool = \$transport->getSpool();
                        if (\$spool instanceof \\Swift_MemorySpool) {
                            try {
                                \$spool->flushQueue(\$this->container->get(sprintf('swiftmailer.mailer.%s.transport.real', \$name)));
                            } catch (\\Swift_TransportException \$exception) {
                                if (null !== \$this->logger) {
                                    \$this->logger->error(sprintf('Exception occurred while flushing email queue: %s', \$exception->getMessage()));
                                }
                            }
                        }
                    }
                }
            }
        }
    }

    public static function getSubscribedEvents()
    {
        \$listeners = [
            KernelEvents::EXCEPTION => 'onException',
            KernelEvents::TERMINATE => 'onTerminate',
        ];

        if (class_exists('Symfony\\Component\\Console\\ConsoleEvents')) {
            \$listeners[class_exists('Symfony\\Component\\Console\\Event\\ConsoleErrorEvent') ? ConsoleEvents::ERROR : ConsoleEvents::EXCEPTION] = 'onException';
            \$listeners[ConsoleEvents::TERMINATE] = 'onTerminate';
        }

        return \$listeners;
    }

    public function reset()
    {
        \$this->wasExceptionThrown = false;
    }
}
", "vendor/symfony/swiftmailer-bundle/EventListener/EmailSenderListener.php", "/var/www/public/DevLaon/templates/vendor/symfony/swiftmailer-bundle/EventListener/EmailSenderListener.php");
    }
}
