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

/* vendor/symfony/security-bundle/Command/UserPasswordEncoderCommand.php */
class __TwigTemplate_2f085af1425be595480ab07b9e3fca19c9ec312fac906e9f7c6bf8aaa693bae6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Command/UserPasswordEncoderCommand.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Command/UserPasswordEncoderCommand.php"));

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

namespace Symfony\\Bundle\\SecurityBundle\\Command;

use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Console\\Exception\\RuntimeException;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\ConsoleOutputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Question\\Question;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;
use Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactoryInterface;
use Symfony\\Component\\Security\\Core\\Encoder\\SelfSaltingEncoderInterface;

/**
 * Encode a user's password.
 *
 * @author Sarah Khalil <mkhalil.sarah@gmail.com>
 *
 * @final
 */
class UserPasswordEncoderCommand extends Command
{
    protected static \$defaultName = 'security:encode-password';

    private \$encoderFactory;
    private \$userClasses;

    public function __construct(EncoderFactoryInterface \$encoderFactory, array \$userClasses = [])
    {
        \$this->encoderFactory = \$encoderFactory;
        \$this->userClasses = \$userClasses;

        parent::__construct();
    }

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this
            ->setDescription('Encodes a password.')
            ->addArgument('password', InputArgument::OPTIONAL, 'The plain password to encode.')
            ->addArgument('user-class', InputArgument::OPTIONAL, 'The User entity class path associated with the encoder used to encode the password.')
            ->addOption('empty-salt', null, InputOption::VALUE_NONE, 'Do not generate a salt or let the encoder generate one.')
            ->setHelp(<<<EOF

The <info>%command.name%</info> command encodes passwords according to your
security configuration. This command is mainly used to generate passwords for
the <comment>in_memory</comment> user provider type and for changing passwords
in the database while developing the application.

Suppose that you have the following security configuration in your application:

<comment>
# app/config/security.yml
security:
    encoders:
        Symfony\\Component\\Security\\Core\\User\\User: plaintext
        App\\Entity\\User: auto
</comment>

If you execute the command non-interactively, the first available configured
user class under the <comment>security.encoders</comment> key is used and a random salt is
generated to encode the password:

  <info>php %command.full_name% --no-interaction [password]</info>

Pass the full user class path as the second argument to encode passwords for
your own entities:

  <info>php %command.full_name% --no-interaction [password] App\\Entity\\User</info>

Executing the command interactively allows you to generate a random salt for
encoding the password:

  <info>php %command.full_name% [password] App\\Entity\\User</info>

In case your encoder doesn't require a salt, add the <comment>empty-salt</comment> option:

  <info>php %command.full_name% --empty-salt [password] App\\Entity\\User</info>

EOF
            )
        ;
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$io = new SymfonyStyle(\$input, \$output);
        \$errorIo = \$output instanceof ConsoleOutputInterface ? new SymfonyStyle(\$input, \$output->getErrorOutput()) : \$io;

        \$input->isInteractive() ? \$errorIo->title('Symfony Password Encoder Utility') : \$errorIo->newLine();

        \$password = \$input->getArgument('password');
        \$userClass = \$this->getUserClass(\$input, \$io);
        \$emptySalt = \$input->getOption('empty-salt');

        \$encoder = \$this->encoderFactory->getEncoder(\$userClass);
        \$saltlessWithoutEmptySalt = !\$emptySalt && \$encoder instanceof SelfSaltingEncoderInterface;

        if (\$saltlessWithoutEmptySalt) {
            \$emptySalt = true;
        }

        if (!\$password) {
            if (!\$input->isInteractive()) {
                \$errorIo->error('The password must not be empty.');

                return 1;
            }
            \$passwordQuestion = \$this->createPasswordQuestion();
            \$password = \$errorIo->askQuestion(\$passwordQuestion);
        }

        \$salt = null;

        if (\$input->isInteractive() && !\$emptySalt) {
            \$emptySalt = true;

            \$errorIo->note('The command will take care of generating a salt for you. Be aware that some encoders advise to let them generate their own salt. If you\\'re using one of those encoders, please answer \\'no\\' to the question below. '.PHP_EOL.'Provide the \\'empty-salt\\' option in order to let the encoder handle the generation itself.');

            if (\$errorIo->confirm('Confirm salt generation ?')) {
                \$salt = \$this->generateSalt();
                \$emptySalt = false;
            }
        } elseif (!\$emptySalt) {
            \$salt = \$this->generateSalt();
        }

        \$encodedPassword = \$encoder->encodePassword(\$password, \$salt);

        \$rows = [
            ['Encoder used', \\get_class(\$encoder)],
            ['Encoded password', \$encodedPassword],
        ];
        if (!\$emptySalt) {
            \$rows[] = ['Generated salt', \$salt];
        }
        \$io->table(['Key', 'Value'], \$rows);

        if (!\$emptySalt) {
            \$errorIo->note(sprintf('Make sure that your salt storage field fits the salt length: %s chars', \\strlen(\$salt)));
        } elseif (\$saltlessWithoutEmptySalt) {
            \$errorIo->note('Self-salting encoder used: the encoder generated its own built-in salt.');
        }

        \$errorIo->success('Password encoding succeeded');

        return null;
    }

    /**
     * Create the password question to ask the user for the password to be encoded.
     */
    private function createPasswordQuestion(): Question
    {
        \$passwordQuestion = new Question('Type in your password to be encoded');

        return \$passwordQuestion->setValidator(function (\$value) {
            if ('' === trim(\$value)) {
                throw new InvalidArgumentException('The password must not be empty.');
            }

            return \$value;
        })->setHidden(true)->setMaxAttempts(20);
    }

    private function generateSalt()
    {
        return base64_encode(random_bytes(30));
    }

    private function getUserClass(InputInterface \$input, SymfonyStyle \$io)
    {
        if (null !== \$userClass = \$input->getArgument('user-class')) {
            return \$userClass;
        }

        if (empty(\$this->userClasses)) {
            throw new RuntimeException('There are no configured encoders for the \"security\" extension.');
        }

        if (!\$input->isInteractive() || 1 === \\count(\$this->userClasses)) {
            return reset(\$this->userClasses);
        }

        \$userClasses = \$this->userClasses;
        natcasesort(\$userClasses);
        \$userClasses = array_values(\$userClasses);

        return \$io->choice('For which user class would you like to encode a password?', \$userClasses, reset(\$userClasses));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/Command/UserPasswordEncoderCommand.php";
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

namespace Symfony\\Bundle\\SecurityBundle\\Command;

use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Console\\Exception\\RuntimeException;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\ConsoleOutputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Question\\Question;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;
use Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactoryInterface;
use Symfony\\Component\\Security\\Core\\Encoder\\SelfSaltingEncoderInterface;

/**
 * Encode a user's password.
 *
 * @author Sarah Khalil <mkhalil.sarah@gmail.com>
 *
 * @final
 */
class UserPasswordEncoderCommand extends Command
{
    protected static \$defaultName = 'security:encode-password';

    private \$encoderFactory;
    private \$userClasses;

    public function __construct(EncoderFactoryInterface \$encoderFactory, array \$userClasses = [])
    {
        \$this->encoderFactory = \$encoderFactory;
        \$this->userClasses = \$userClasses;

        parent::__construct();
    }

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this
            ->setDescription('Encodes a password.')
            ->addArgument('password', InputArgument::OPTIONAL, 'The plain password to encode.')
            ->addArgument('user-class', InputArgument::OPTIONAL, 'The User entity class path associated with the encoder used to encode the password.')
            ->addOption('empty-salt', null, InputOption::VALUE_NONE, 'Do not generate a salt or let the encoder generate one.')
            ->setHelp(<<<EOF

The <info>%command.name%</info> command encodes passwords according to your
security configuration. This command is mainly used to generate passwords for
the <comment>in_memory</comment> user provider type and for changing passwords
in the database while developing the application.

Suppose that you have the following security configuration in your application:

<comment>
# app/config/security.yml
security:
    encoders:
        Symfony\\Component\\Security\\Core\\User\\User: plaintext
        App\\Entity\\User: auto
</comment>

If you execute the command non-interactively, the first available configured
user class under the <comment>security.encoders</comment> key is used and a random salt is
generated to encode the password:

  <info>php %command.full_name% --no-interaction [password]</info>

Pass the full user class path as the second argument to encode passwords for
your own entities:

  <info>php %command.full_name% --no-interaction [password] App\\Entity\\User</info>

Executing the command interactively allows you to generate a random salt for
encoding the password:

  <info>php %command.full_name% [password] App\\Entity\\User</info>

In case your encoder doesn't require a salt, add the <comment>empty-salt</comment> option:

  <info>php %command.full_name% --empty-salt [password] App\\Entity\\User</info>

EOF
            )
        ;
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$io = new SymfonyStyle(\$input, \$output);
        \$errorIo = \$output instanceof ConsoleOutputInterface ? new SymfonyStyle(\$input, \$output->getErrorOutput()) : \$io;

        \$input->isInteractive() ? \$errorIo->title('Symfony Password Encoder Utility') : \$errorIo->newLine();

        \$password = \$input->getArgument('password');
        \$userClass = \$this->getUserClass(\$input, \$io);
        \$emptySalt = \$input->getOption('empty-salt');

        \$encoder = \$this->encoderFactory->getEncoder(\$userClass);
        \$saltlessWithoutEmptySalt = !\$emptySalt && \$encoder instanceof SelfSaltingEncoderInterface;

        if (\$saltlessWithoutEmptySalt) {
            \$emptySalt = true;
        }

        if (!\$password) {
            if (!\$input->isInteractive()) {
                \$errorIo->error('The password must not be empty.');

                return 1;
            }
            \$passwordQuestion = \$this->createPasswordQuestion();
            \$password = \$errorIo->askQuestion(\$passwordQuestion);
        }

        \$salt = null;

        if (\$input->isInteractive() && !\$emptySalt) {
            \$emptySalt = true;

            \$errorIo->note('The command will take care of generating a salt for you. Be aware that some encoders advise to let them generate their own salt. If you\\'re using one of those encoders, please answer \\'no\\' to the question below. '.PHP_EOL.'Provide the \\'empty-salt\\' option in order to let the encoder handle the generation itself.');

            if (\$errorIo->confirm('Confirm salt generation ?')) {
                \$salt = \$this->generateSalt();
                \$emptySalt = false;
            }
        } elseif (!\$emptySalt) {
            \$salt = \$this->generateSalt();
        }

        \$encodedPassword = \$encoder->encodePassword(\$password, \$salt);

        \$rows = [
            ['Encoder used', \\get_class(\$encoder)],
            ['Encoded password', \$encodedPassword],
        ];
        if (!\$emptySalt) {
            \$rows[] = ['Generated salt', \$salt];
        }
        \$io->table(['Key', 'Value'], \$rows);

        if (!\$emptySalt) {
            \$errorIo->note(sprintf('Make sure that your salt storage field fits the salt length: %s chars', \\strlen(\$salt)));
        } elseif (\$saltlessWithoutEmptySalt) {
            \$errorIo->note('Self-salting encoder used: the encoder generated its own built-in salt.');
        }

        \$errorIo->success('Password encoding succeeded');

        return null;
    }

    /**
     * Create the password question to ask the user for the password to be encoded.
     */
    private function createPasswordQuestion(): Question
    {
        \$passwordQuestion = new Question('Type in your password to be encoded');

        return \$passwordQuestion->setValidator(function (\$value) {
            if ('' === trim(\$value)) {
                throw new InvalidArgumentException('The password must not be empty.');
            }

            return \$value;
        })->setHidden(true)->setMaxAttempts(20);
    }

    private function generateSalt()
    {
        return base64_encode(random_bytes(30));
    }

    private function getUserClass(InputInterface \$input, SymfonyStyle \$io)
    {
        if (null !== \$userClass = \$input->getArgument('user-class')) {
            return \$userClass;
        }

        if (empty(\$this->userClasses)) {
            throw new RuntimeException('There are no configured encoders for the \"security\" extension.');
        }

        if (!\$input->isInteractive() || 1 === \\count(\$this->userClasses)) {
            return reset(\$this->userClasses);
        }

        \$userClasses = \$this->userClasses;
        natcasesort(\$userClasses);
        \$userClasses = array_values(\$userClasses);

        return \$io->choice('For which user class would you like to encode a password?', \$userClasses, reset(\$userClasses));
    }
}
", "vendor/symfony/security-bundle/Command/UserPasswordEncoderCommand.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/Command/UserPasswordEncoderCommand.php");
    }
}
