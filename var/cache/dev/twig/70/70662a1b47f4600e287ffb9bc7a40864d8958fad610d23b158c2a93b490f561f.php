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

/* vendor/symfony/swiftmailer-bundle/Command/SendEmailCommand.php */
class __TwigTemplate_e5f68df24a6caafebc1842a1a441e5bcebb4502f0248b58e5929622d1acecbab extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/swiftmailer-bundle/Command/SendEmailCommand.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/swiftmailer-bundle/Command/SendEmailCommand.php"));

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

namespace Symfony\\Bundle\\SwiftmailerBundle\\Command;

use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;

/**
 * Send Emails from the spool.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Clément JOBEILI <clement.jobeili@gmail.com>
 * @author Toni Uebernickel <tuebernickel@gmail.com>
 */
class SendEmailCommand extends AbstractSwiftMailerCommand
{
    protected static \$defaultName = 'swiftmailer:spool:send';

    /** @var SymfonyStyle */
    private \$io;

    protected function configure()
    {
        \$this
            ->setName(static::\$defaultName) // BC with 2.7
            ->setDescription('Sends emails from the spool')
            ->addOption('message-limit', null, InputOption::VALUE_REQUIRED, 'The maximum number of messages to send.')
            ->addOption('time-limit', null, InputOption::VALUE_REQUIRED, 'The time limit for sending messages (in seconds).')
            ->addOption('recover-timeout', null, InputOption::VALUE_REQUIRED, 'The timeout for recovering messages that have taken too long to send (in seconds).')
            ->addOption('mailer', null, InputOption::VALUE_REQUIRED, 'The mailer name.')
            ->addOption('transport', null, InputOption::VALUE_REQUIRED, 'The service of the transport to use to send the messages.')
            ->setHelp(
                <<<EOF
The <info>%command.name%</info> command sends all emails from the spool.

<info>php %command.full_name% --message-limit=10 --time-limit=10 --recover-timeout=900 --mailer=default</info>

EOF
            )
        ;
    }

    /**
     * @return int
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$this->io = new SymfonyStyle(\$input, \$output);

        \$name = \$input->getOption('mailer');
        if (\$name) {
            \$this->processMailer(\$name, \$input, \$output);
        } else {
            \$mailers = array_keys(\$this->getContainer()->getParameter('swiftmailer.mailers'));
            foreach (\$mailers as \$name) {
                \$this->processMailer(\$name, \$input, \$output);
            }
        }

        return 0;
    }

    private function processMailer(\$name, InputInterface \$input, OutputInterface \$output)
    {
        if (!\$this->getContainer()->has(sprintf('swiftmailer.mailer.%s', \$name))) {
            throw new \\InvalidArgumentException(sprintf('The mailer \"%s\" does not exist.', \$name));
        }

        \$this->io->text(sprintf('<info>[%s]</info> Processing <info>%s</info> mailer spool... ', date('Y-m-d H:i:s'), \$name));
        if (\$this->getContainer()->getParameter(sprintf('swiftmailer.mailer.%s.spool.enabled', \$name))) {
            \$mailer = \$this->getContainer()->get(sprintf('swiftmailer.mailer.%s', \$name));
            \$transport = \$mailer->getTransport();

            if (\$transport instanceof \\Swift_Transport_LoadBalancedTransport) {
                foreach (\$transport->getTransports() as \$eachTransport) {
                    \$this->recoverSpool(\$name, \$eachTransport, \$input, \$output);
                }
            } else {
                \$this->recoverSpool(\$name, \$transport, \$input, \$output);
            }
        } else {
            \$this->io->warning('There are no emails to send because the spool is disabled.');
        }
    }

    private function recoverSpool(\$name, \\Swift_Transport \$transport, InputInterface \$input)
    {
        if (\$transport instanceof \\Swift_Transport_SpoolTransport) {
            \$spool = \$transport->getSpool();
            if (\$spool instanceof \\Swift_ConfigurableSpool) {
                if (null !== \$input->getOption('message-limit')) {
                    \$spool->setMessageLimit(\$input->getOption('message-limit'));
                }
                if (null !== \$input->getOption('time-limit')) {
                    \$spool->setTimeLimit(\$input->getOption('time-limit'));
                }
            }

            if (\$spool instanceof \\Swift_FileSpool) {
                if (null !== \$input->getOption('recover-timeout')) {
                    \$spool->recover(\$input->getOption('recover-timeout'));
                } else {
                    \$spool->recover();
                }
            }

            \$transportService = \$input->getOption('transport') ?: sprintf('swiftmailer.mailer.%s.transport.real', \$name);
            \$sent = \$spool->flushQueue(\$this->getContainer()->get(\$transportService));

            \$this->io->text(sprintf('<comment>%d</comment> emails sent', \$sent));
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/swiftmailer-bundle/Command/SendEmailCommand.php";
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

namespace Symfony\\Bundle\\SwiftmailerBundle\\Command;

use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;

/**
 * Send Emails from the spool.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Clément JOBEILI <clement.jobeili@gmail.com>
 * @author Toni Uebernickel <tuebernickel@gmail.com>
 */
class SendEmailCommand extends AbstractSwiftMailerCommand
{
    protected static \$defaultName = 'swiftmailer:spool:send';

    /** @var SymfonyStyle */
    private \$io;

    protected function configure()
    {
        \$this
            ->setName(static::\$defaultName) // BC with 2.7
            ->setDescription('Sends emails from the spool')
            ->addOption('message-limit', null, InputOption::VALUE_REQUIRED, 'The maximum number of messages to send.')
            ->addOption('time-limit', null, InputOption::VALUE_REQUIRED, 'The time limit for sending messages (in seconds).')
            ->addOption('recover-timeout', null, InputOption::VALUE_REQUIRED, 'The timeout for recovering messages that have taken too long to send (in seconds).')
            ->addOption('mailer', null, InputOption::VALUE_REQUIRED, 'The mailer name.')
            ->addOption('transport', null, InputOption::VALUE_REQUIRED, 'The service of the transport to use to send the messages.')
            ->setHelp(
                <<<EOF
The <info>%command.name%</info> command sends all emails from the spool.

<info>php %command.full_name% --message-limit=10 --time-limit=10 --recover-timeout=900 --mailer=default</info>

EOF
            )
        ;
    }

    /**
     * @return int
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$this->io = new SymfonyStyle(\$input, \$output);

        \$name = \$input->getOption('mailer');
        if (\$name) {
            \$this->processMailer(\$name, \$input, \$output);
        } else {
            \$mailers = array_keys(\$this->getContainer()->getParameter('swiftmailer.mailers'));
            foreach (\$mailers as \$name) {
                \$this->processMailer(\$name, \$input, \$output);
            }
        }

        return 0;
    }

    private function processMailer(\$name, InputInterface \$input, OutputInterface \$output)
    {
        if (!\$this->getContainer()->has(sprintf('swiftmailer.mailer.%s', \$name))) {
            throw new \\InvalidArgumentException(sprintf('The mailer \"%s\" does not exist.', \$name));
        }

        \$this->io->text(sprintf('<info>[%s]</info> Processing <info>%s</info> mailer spool... ', date('Y-m-d H:i:s'), \$name));
        if (\$this->getContainer()->getParameter(sprintf('swiftmailer.mailer.%s.spool.enabled', \$name))) {
            \$mailer = \$this->getContainer()->get(sprintf('swiftmailer.mailer.%s', \$name));
            \$transport = \$mailer->getTransport();

            if (\$transport instanceof \\Swift_Transport_LoadBalancedTransport) {
                foreach (\$transport->getTransports() as \$eachTransport) {
                    \$this->recoverSpool(\$name, \$eachTransport, \$input, \$output);
                }
            } else {
                \$this->recoverSpool(\$name, \$transport, \$input, \$output);
            }
        } else {
            \$this->io->warning('There are no emails to send because the spool is disabled.');
        }
    }

    private function recoverSpool(\$name, \\Swift_Transport \$transport, InputInterface \$input)
    {
        if (\$transport instanceof \\Swift_Transport_SpoolTransport) {
            \$spool = \$transport->getSpool();
            if (\$spool instanceof \\Swift_ConfigurableSpool) {
                if (null !== \$input->getOption('message-limit')) {
                    \$spool->setMessageLimit(\$input->getOption('message-limit'));
                }
                if (null !== \$input->getOption('time-limit')) {
                    \$spool->setTimeLimit(\$input->getOption('time-limit'));
                }
            }

            if (\$spool instanceof \\Swift_FileSpool) {
                if (null !== \$input->getOption('recover-timeout')) {
                    \$spool->recover(\$input->getOption('recover-timeout'));
                } else {
                    \$spool->recover();
                }
            }

            \$transportService = \$input->getOption('transport') ?: sprintf('swiftmailer.mailer.%s.transport.real', \$name);
            \$sent = \$spool->flushQueue(\$this->getContainer()->get(\$transportService));

            \$this->io->text(sprintf('<comment>%d</comment> emails sent', \$sent));
        }
    }
}
", "vendor/symfony/swiftmailer-bundle/Command/SendEmailCommand.php", "/var/www/public/DevLaon/templates/vendor/symfony/swiftmailer-bundle/Command/SendEmailCommand.php");
    }
}
