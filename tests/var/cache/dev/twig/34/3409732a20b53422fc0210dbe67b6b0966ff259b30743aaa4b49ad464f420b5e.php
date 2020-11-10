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

/* vendor/symfony/swiftmailer-bundle/Command/DebugCommand.php */
class __TwigTemplate_4bc3bdafcf1f096f072653d91513d3c1849bcabe1154d97a869c9bd0d325c28f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/swiftmailer-bundle/Command/DebugCommand.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/swiftmailer-bundle/Command/DebugCommand.php"));

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

use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;
use Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException;

/**
 * A console command for retrieving information about mailers.
 *
 * @author Jérémy Romey <jeremy@free-agent.fr>
 */
class DebugCommand extends AbstractSwiftMailerCommand
{
    protected static \$defaultName = 'debug:swiftmailer';

    /** @var SymfonyStyle */
    private \$io;

    /**
     * @see Command
     */
    protected function configure()
    {
        \$this
            ->setName(static::\$defaultName) // BC with 2.7
            ->setDefinition([
                new InputArgument('name', InputArgument::OPTIONAL, 'A mailer name'),
            ])
            ->setDescription('Displays current mailers for an application')
            ->setHelp(
                <<<EOF
The <info>%command.name%</info> displays the configured mailers:

  <info>php %command.full_name% mailer-name</info>
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
        \$name = \$input->getArgument('name');

        if (\$name) {
            \$this->outputMailer(\$name);
        } else {
            \$this->outputMailers();
        }

        return 0;
    }

    protected function outputMailers(\$routes = null)
    {
        \$this->io->title('Configured SwiftMailer Mailers');

        \$tableHeaders = ['Name', 'Transport', 'Spool', 'Delivery', 'Single Address'];
        \$tableRows = [];

        \$mailers = \$this->getContainer()->getParameter('swiftmailer.mailers');
        foreach (\$mailers as \$name => \$mailer) {
            \$transport = \$this->getContainer()->getParameter(sprintf('swiftmailer.mailer.%s.transport.name', \$name));
            \$spool = \$this->getContainer()->getParameter(sprintf('swiftmailer.mailer.%s.spool.enabled', \$name)) ? 'YES' : 'NO';
            \$delivery = \$this->getContainer()->getParameter(sprintf('swiftmailer.mailer.%s.delivery.enabled', \$name)) ? 'YES' : 'NO';
            \$singleAddress = \$this->getContainer()->getParameter(sprintf('swiftmailer.mailer.%s.single_address', \$name));

            if (\$this->isDefaultMailer(\$name)) {
                \$name = sprintf('%s (default mailer)', \$name);
            }

            \$tableRows[] = [\$name, \$transport, \$spool, \$delivery, \$singleAddress];
        }

        \$this->io->table(\$tableHeaders, \$tableRows);
    }

    /**
     * @throws \\InvalidArgumentException When route does not exist
     */
    protected function outputMailer(\$name)
    {
        try {
            \$service = sprintf('swiftmailer.mailer.%s', \$name);
            \$mailer = \$this->getContainer()->get(\$service);
        } catch (ServiceNotFoundException \$e) {
            throw new \\InvalidArgumentException(sprintf('The mailer \"%s\" does not exist.', \$name));
        }

        \$tableHeaders = ['Property', 'Value'];
        \$tableRows = [];

        \$transport = \$mailer->getTransport();
        \$spool = \$this->getContainer()->getParameter(sprintf('swiftmailer.mailer.%s.spool.enabled', \$name)) ? 'YES' : 'NO';
        \$delivery = \$this->getContainer()->getParameter(sprintf('swiftmailer.mailer.%s.delivery.enabled', \$name)) ? 'YES' : 'NO';
        \$singleAddress = \$this->getContainer()->getParameter(sprintf('swiftmailer.mailer.%s.single_address', \$name));

        \$this->io->title(sprintf('Configuration of the Mailer \"%s\"', \$name));
        if (\$this->isDefaultMailer(\$name)) {
            \$this->io->comment('This is the default mailer');
        }

        \$tableRows[] = ['Name', \$name];
        \$tableRows[] = ['Service', \$service];
        \$tableRows[] = ['Class', \\get_class(\$mailer)];
        \$tableRows[] = ['Transport', sprintf('%s (%s)', sprintf('swiftmailer.mailer.%s.transport.name', \$name), \\get_class(\$transport))];
        \$tableRows[] = ['Spool', \$spool];
        if (\$this->getContainer()->hasParameter(sprintf('swiftmailer.spool.%s.file.path', \$name))) {
            \$tableRows[] = ['Spool file', \$this->getContainer()->getParameter(sprintf('swiftmailer.spool.%s.file.path', \$name))];
        }
        \$tableRows[] = ['Delivery', \$delivery];
        \$tableRows[] = ['Single Address', \$singleAddress];

        \$this->io->table(\$tableHeaders, \$tableRows);
    }

    private function isDefaultMailer(\$name)
    {
        return \$this->getContainer()->getParameter('swiftmailer.default_mailer') === \$name || 'default' === \$name;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/swiftmailer-bundle/Command/DebugCommand.php";
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

use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;
use Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException;

/**
 * A console command for retrieving information about mailers.
 *
 * @author Jérémy Romey <jeremy@free-agent.fr>
 */
class DebugCommand extends AbstractSwiftMailerCommand
{
    protected static \$defaultName = 'debug:swiftmailer';

    /** @var SymfonyStyle */
    private \$io;

    /**
     * @see Command
     */
    protected function configure()
    {
        \$this
            ->setName(static::\$defaultName) // BC with 2.7
            ->setDefinition([
                new InputArgument('name', InputArgument::OPTIONAL, 'A mailer name'),
            ])
            ->setDescription('Displays current mailers for an application')
            ->setHelp(
                <<<EOF
The <info>%command.name%</info> displays the configured mailers:

  <info>php %command.full_name% mailer-name</info>
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
        \$name = \$input->getArgument('name');

        if (\$name) {
            \$this->outputMailer(\$name);
        } else {
            \$this->outputMailers();
        }

        return 0;
    }

    protected function outputMailers(\$routes = null)
    {
        \$this->io->title('Configured SwiftMailer Mailers');

        \$tableHeaders = ['Name', 'Transport', 'Spool', 'Delivery', 'Single Address'];
        \$tableRows = [];

        \$mailers = \$this->getContainer()->getParameter('swiftmailer.mailers');
        foreach (\$mailers as \$name => \$mailer) {
            \$transport = \$this->getContainer()->getParameter(sprintf('swiftmailer.mailer.%s.transport.name', \$name));
            \$spool = \$this->getContainer()->getParameter(sprintf('swiftmailer.mailer.%s.spool.enabled', \$name)) ? 'YES' : 'NO';
            \$delivery = \$this->getContainer()->getParameter(sprintf('swiftmailer.mailer.%s.delivery.enabled', \$name)) ? 'YES' : 'NO';
            \$singleAddress = \$this->getContainer()->getParameter(sprintf('swiftmailer.mailer.%s.single_address', \$name));

            if (\$this->isDefaultMailer(\$name)) {
                \$name = sprintf('%s (default mailer)', \$name);
            }

            \$tableRows[] = [\$name, \$transport, \$spool, \$delivery, \$singleAddress];
        }

        \$this->io->table(\$tableHeaders, \$tableRows);
    }

    /**
     * @throws \\InvalidArgumentException When route does not exist
     */
    protected function outputMailer(\$name)
    {
        try {
            \$service = sprintf('swiftmailer.mailer.%s', \$name);
            \$mailer = \$this->getContainer()->get(\$service);
        } catch (ServiceNotFoundException \$e) {
            throw new \\InvalidArgumentException(sprintf('The mailer \"%s\" does not exist.', \$name));
        }

        \$tableHeaders = ['Property', 'Value'];
        \$tableRows = [];

        \$transport = \$mailer->getTransport();
        \$spool = \$this->getContainer()->getParameter(sprintf('swiftmailer.mailer.%s.spool.enabled', \$name)) ? 'YES' : 'NO';
        \$delivery = \$this->getContainer()->getParameter(sprintf('swiftmailer.mailer.%s.delivery.enabled', \$name)) ? 'YES' : 'NO';
        \$singleAddress = \$this->getContainer()->getParameter(sprintf('swiftmailer.mailer.%s.single_address', \$name));

        \$this->io->title(sprintf('Configuration of the Mailer \"%s\"', \$name));
        if (\$this->isDefaultMailer(\$name)) {
            \$this->io->comment('This is the default mailer');
        }

        \$tableRows[] = ['Name', \$name];
        \$tableRows[] = ['Service', \$service];
        \$tableRows[] = ['Class', \\get_class(\$mailer)];
        \$tableRows[] = ['Transport', sprintf('%s (%s)', sprintf('swiftmailer.mailer.%s.transport.name', \$name), \\get_class(\$transport))];
        \$tableRows[] = ['Spool', \$spool];
        if (\$this->getContainer()->hasParameter(sprintf('swiftmailer.spool.%s.file.path', \$name))) {
            \$tableRows[] = ['Spool file', \$this->getContainer()->getParameter(sprintf('swiftmailer.spool.%s.file.path', \$name))];
        }
        \$tableRows[] = ['Delivery', \$delivery];
        \$tableRows[] = ['Single Address', \$singleAddress];

        \$this->io->table(\$tableHeaders, \$tableRows);
    }

    private function isDefaultMailer(\$name)
    {
        return \$this->getContainer()->getParameter('swiftmailer.default_mailer') === \$name || 'default' === \$name;
    }
}
", "vendor/symfony/swiftmailer-bundle/Command/DebugCommand.php", "/var/www/public/DevLaon/templates/vendor/symfony/swiftmailer-bundle/Command/DebugCommand.php");
    }
}
