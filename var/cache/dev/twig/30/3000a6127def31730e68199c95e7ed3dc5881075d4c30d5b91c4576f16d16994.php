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

/* vendor/symfony/swiftmailer-bundle/Command/NewEmailCommand.php */
class __TwigTemplate_ebd0cfacb004aeb42074e53bfcd2839a841ab365be2347a60d06475303f3946b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/swiftmailer-bundle/Command/NewEmailCommand.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/swiftmailer-bundle/Command/NewEmailCommand.php"));

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
 * A console command for creating and sending simple emails.
 *
 * @author Gusakov Nikita <dev@nkt.me>
 */
class NewEmailCommand extends AbstractSwiftMailerCommand
{
    protected static \$defaultName = 'swiftmailer:email:send';

    /** @var SymfonyStyle */
    private \$io;

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this
            ->setName(static::\$defaultName) // BC with 2.7
            ->setDescription('Send simple email message')
            ->addOption('from', null, InputOption::VALUE_REQUIRED, 'The from address of the message')
            ->addOption('to', null, InputOption::VALUE_REQUIRED, 'The to address of the message')
            ->addOption('subject', null, InputOption::VALUE_REQUIRED, 'The subject of the message')
            ->addOption('body', null, InputOption::VALUE_REQUIRED, 'The body of the message')
            ->addOption('mailer', null, InputOption::VALUE_REQUIRED, 'The mailer name', 'default')
            ->addOption('content-type', null, InputOption::VALUE_REQUIRED, 'The body content type of the message', 'text/html')
            ->addOption('charset', null, InputOption::VALUE_REQUIRED, 'The body charset of the message', 'UTF8')
            ->addOption('body-source', null, InputOption::VALUE_REQUIRED, 'The source where body come from [stdin|file]', 'stdin')
            ->setHelp(
                <<<EOF
The <info>%command.name%</info> command creates and sends a simple email message.

<info>php %command.full_name% --mailer=custom_mailer --content-type=text/xml</info>

You can get body of message from a file:
<info>php %command.full_name% --body-source=file --body=/path/to/file</info>

EOF
            );
    }

    /**
     * {@inheritdoc}
     */
    protected function initialize(InputInterface \$input, OutputInterface \$output)
    {
        \$this->io = new SymfonyStyle(\$input, \$output);
        \$this->io->title('SwiftMailer\\'s Interactive Email Sender');
    }

    /**
     * @return int
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$mailerServiceName = sprintf('swiftmailer.mailer.%s', \$input->getOption('mailer'));
        if (!\$this->getContainer()->has(\$mailerServiceName)) {
            throw new \\InvalidArgumentException(sprintf('The mailer \"%s\" does not exist.', \$input->getOption('mailer')));
        }

        switch (\$input->getOption('body-source')) {
            case 'file':
                \$filename = \$input->getOption('body');
                \$content = file_get_contents(\$filename);
                if (false === \$content) {
                    throw new \\Exception(sprintf('Could not get contents from \"%s\".', \$filename));
                }
                \$input->setOption('body', \$content);
                break;
            case 'stdin':
                break;
            default:
                throw new \\InvalidArgumentException('Body-input option should be \"stdin\" or \"file\".');
        }

        \$message = \$this->createMessage(\$input);
        \$mailer = \$this->getContainer()->get(\$mailerServiceName);
        \$sentMessages = \$mailer->send(\$message);

        \$this->io->success(sprintf('%s emails were successfully sent.', \$sentMessages));

        return 0;
    }

    /**
     * {@inheritdoc}
     */
    protected function interact(InputInterface \$input, OutputInterface \$output)
    {
        foreach (\$input->getOptions() as \$option => \$value) {
            if (null === \$value) {
                \$input->setOption(\$option, \$this->io->ask(sprintf('%s', ucfirst(\$option))));
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isEnabled()
    {
        return \$this->getContainer()->has('mailer');
    }

    /**
     * Creates new message from input options.
     *
     * @param InputInterface \$input An InputInterface instance
     *
     * @return \\Swift_Message New message
     */
    private function createMessage(InputInterface \$input)
    {
        \$message = new \\Swift_Message(
            \$input->getOption('subject'),
            \$input->getOption('body'),
            \$input->getOption('content-type'),
            \$input->getOption('charset')
        );
        \$message->setFrom(\$input->getOption('from'));
        \$message->setTo(\$input->getOption('to'));

        return \$message;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/swiftmailer-bundle/Command/NewEmailCommand.php";
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
 * A console command for creating and sending simple emails.
 *
 * @author Gusakov Nikita <dev@nkt.me>
 */
class NewEmailCommand extends AbstractSwiftMailerCommand
{
    protected static \$defaultName = 'swiftmailer:email:send';

    /** @var SymfonyStyle */
    private \$io;

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this
            ->setName(static::\$defaultName) // BC with 2.7
            ->setDescription('Send simple email message')
            ->addOption('from', null, InputOption::VALUE_REQUIRED, 'The from address of the message')
            ->addOption('to', null, InputOption::VALUE_REQUIRED, 'The to address of the message')
            ->addOption('subject', null, InputOption::VALUE_REQUIRED, 'The subject of the message')
            ->addOption('body', null, InputOption::VALUE_REQUIRED, 'The body of the message')
            ->addOption('mailer', null, InputOption::VALUE_REQUIRED, 'The mailer name', 'default')
            ->addOption('content-type', null, InputOption::VALUE_REQUIRED, 'The body content type of the message', 'text/html')
            ->addOption('charset', null, InputOption::VALUE_REQUIRED, 'The body charset of the message', 'UTF8')
            ->addOption('body-source', null, InputOption::VALUE_REQUIRED, 'The source where body come from [stdin|file]', 'stdin')
            ->setHelp(
                <<<EOF
The <info>%command.name%</info> command creates and sends a simple email message.

<info>php %command.full_name% --mailer=custom_mailer --content-type=text/xml</info>

You can get body of message from a file:
<info>php %command.full_name% --body-source=file --body=/path/to/file</info>

EOF
            );
    }

    /**
     * {@inheritdoc}
     */
    protected function initialize(InputInterface \$input, OutputInterface \$output)
    {
        \$this->io = new SymfonyStyle(\$input, \$output);
        \$this->io->title('SwiftMailer\\'s Interactive Email Sender');
    }

    /**
     * @return int
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$mailerServiceName = sprintf('swiftmailer.mailer.%s', \$input->getOption('mailer'));
        if (!\$this->getContainer()->has(\$mailerServiceName)) {
            throw new \\InvalidArgumentException(sprintf('The mailer \"%s\" does not exist.', \$input->getOption('mailer')));
        }

        switch (\$input->getOption('body-source')) {
            case 'file':
                \$filename = \$input->getOption('body');
                \$content = file_get_contents(\$filename);
                if (false === \$content) {
                    throw new \\Exception(sprintf('Could not get contents from \"%s\".', \$filename));
                }
                \$input->setOption('body', \$content);
                break;
            case 'stdin':
                break;
            default:
                throw new \\InvalidArgumentException('Body-input option should be \"stdin\" or \"file\".');
        }

        \$message = \$this->createMessage(\$input);
        \$mailer = \$this->getContainer()->get(\$mailerServiceName);
        \$sentMessages = \$mailer->send(\$message);

        \$this->io->success(sprintf('%s emails were successfully sent.', \$sentMessages));

        return 0;
    }

    /**
     * {@inheritdoc}
     */
    protected function interact(InputInterface \$input, OutputInterface \$output)
    {
        foreach (\$input->getOptions() as \$option => \$value) {
            if (null === \$value) {
                \$input->setOption(\$option, \$this->io->ask(sprintf('%s', ucfirst(\$option))));
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isEnabled()
    {
        return \$this->getContainer()->has('mailer');
    }

    /**
     * Creates new message from input options.
     *
     * @param InputInterface \$input An InputInterface instance
     *
     * @return \\Swift_Message New message
     */
    private function createMessage(InputInterface \$input)
    {
        \$message = new \\Swift_Message(
            \$input->getOption('subject'),
            \$input->getOption('body'),
            \$input->getOption('content-type'),
            \$input->getOption('charset')
        );
        \$message->setFrom(\$input->getOption('from'));
        \$message->setTo(\$input->getOption('to'));

        return \$message;
    }
}
", "vendor/symfony/swiftmailer-bundle/Command/NewEmailCommand.php", "/var/www/public/DevLaon/templates/vendor/symfony/swiftmailer-bundle/Command/NewEmailCommand.php");
    }
}
