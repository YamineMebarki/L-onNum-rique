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

/* vendor/symfony/console/Descriptor/MarkdownDescriptor.php */
class __TwigTemplate_31bc67637123fa665581f022d98759be7df79c3ac16680d52490242f960db49c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Descriptor/MarkdownDescriptor.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Descriptor/MarkdownDescriptor.php"));

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

namespace Symfony\\Component\\Console\\Descriptor;

use Symfony\\Component\\Console\\Application;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Helper\\Helper;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputDefinition;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;

/**
 * Markdown descriptor.
 *
 * @author Jean-François Simon <contact@jfsimon.fr>
 *
 * @internal
 */
class MarkdownDescriptor extends Descriptor
{
    /**
     * {@inheritdoc}
     */
    public function describe(OutputInterface \$output, \$object, array \$options = [])
    {
        \$decorated = \$output->isDecorated();
        \$output->setDecorated(false);

        parent::describe(\$output, \$object, \$options);

        \$output->setDecorated(\$decorated);
    }

    /**
     * {@inheritdoc}
     */
    protected function write(\$content, \$decorated = true)
    {
        parent::write(\$content, \$decorated);
    }

    /**
     * {@inheritdoc}
     */
    protected function describeInputArgument(InputArgument \$argument, array \$options = [])
    {
        \$this->write(
            '#### `'.(\$argument->getName() ?: '<none>').\"`\\n\\n\"
            .(\$argument->getDescription() ? preg_replace('/\\s*[\\r\\n]\\s*/', \"\\n\", \$argument->getDescription()).\"\\n\\n\" : '')
            .'* Is required: '.(\$argument->isRequired() ? 'yes' : 'no').\"\\n\"
            .'* Is array: '.(\$argument->isArray() ? 'yes' : 'no').\"\\n\"
            .'* Default: `'.str_replace(\"\\n\", '', var_export(\$argument->getDefault(), true)).'`'
        );
    }

    /**
     * {@inheritdoc}
     */
    protected function describeInputOption(InputOption \$option, array \$options = [])
    {
        \$name = '--'.\$option->getName();
        if (\$option->getShortcut()) {
            \$name .= '|-'.str_replace('|', '|-', \$option->getShortcut()).'';
        }

        \$this->write(
            '#### `'.\$name.'`'.\"\\n\\n\"
            .(\$option->getDescription() ? preg_replace('/\\s*[\\r\\n]\\s*/', \"\\n\", \$option->getDescription()).\"\\n\\n\" : '')
            .'* Accept value: '.(\$option->acceptValue() ? 'yes' : 'no').\"\\n\"
            .'* Is value required: '.(\$option->isValueRequired() ? 'yes' : 'no').\"\\n\"
            .'* Is multiple: '.(\$option->isArray() ? 'yes' : 'no').\"\\n\"
            .'* Default: `'.str_replace(\"\\n\", '', var_export(\$option->getDefault(), true)).'`'
        );
    }

    /**
     * {@inheritdoc}
     */
    protected function describeInputDefinition(InputDefinition \$definition, array \$options = [])
    {
        if (\$showArguments = \\count(\$definition->getArguments()) > 0) {
            \$this->write('### Arguments');
            foreach (\$definition->getArguments() as \$argument) {
                \$this->write(\"\\n\\n\");
                \$this->write(\$this->describeInputArgument(\$argument));
            }
        }

        if (\\count(\$definition->getOptions()) > 0) {
            if (\$showArguments) {
                \$this->write(\"\\n\\n\");
            }

            \$this->write('### Options');
            foreach (\$definition->getOptions() as \$option) {
                \$this->write(\"\\n\\n\");
                \$this->write(\$this->describeInputOption(\$option));
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function describeCommand(Command \$command, array \$options = [])
    {
        \$command->getSynopsis();
        \$command->mergeApplicationDefinition(false);

        \$this->write(
            '`'.\$command->getName().\"`\\n\"
            .str_repeat('-', Helper::strlen(\$command->getName()) + 2).\"\\n\\n\"
            .(\$command->getDescription() ? \$command->getDescription().\"\\n\\n\" : '')
            .'### Usage'.\"\\n\\n\"
            .array_reduce(array_merge([\$command->getSynopsis()], \$command->getAliases(), \$command->getUsages()), function (\$carry, \$usage) {
                return \$carry.'* `'.\$usage.'`'.\"\\n\";
            })
        );

        if (\$help = \$command->getProcessedHelp()) {
            \$this->write(\"\\n\");
            \$this->write(\$help);
        }

        if (\$command->getNativeDefinition()) {
            \$this->write(\"\\n\\n\");
            \$this->describeInputDefinition(\$command->getNativeDefinition());
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function describeApplication(Application \$application, array \$options = [])
    {
        \$describedNamespace = isset(\$options['namespace']) ? \$options['namespace'] : null;
        \$description = new ApplicationDescription(\$application, \$describedNamespace);
        \$title = \$this->getApplicationTitle(\$application);

        \$this->write(\$title.\"\\n\".str_repeat('=', Helper::strlen(\$title)));

        foreach (\$description->getNamespaces() as \$namespace) {
            if (ApplicationDescription::GLOBAL_NAMESPACE !== \$namespace['id']) {
                \$this->write(\"\\n\\n\");
                \$this->write('**'.\$namespace['id'].':**');
            }

            \$this->write(\"\\n\\n\");
            \$this->write(implode(\"\\n\", array_map(function (\$commandName) use (\$description) {
                return sprintf('* [`%s`](#%s)', \$commandName, str_replace(':', '', \$description->getCommand(\$commandName)->getName()));
            }, \$namespace['commands'])));
        }

        foreach (\$description->getCommands() as \$command) {
            \$this->write(\"\\n\\n\");
            \$this->write(\$this->describeCommand(\$command));
        }
    }

    private function getApplicationTitle(Application \$application)
    {
        if ('UNKNOWN' !== \$application->getName()) {
            if ('UNKNOWN' !== \$application->getVersion()) {
                return sprintf('%s %s', \$application->getName(), \$application->getVersion());
            }

            return \$application->getName();
        }

        return 'Console Tool';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Descriptor/MarkdownDescriptor.php";
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

namespace Symfony\\Component\\Console\\Descriptor;

use Symfony\\Component\\Console\\Application;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Helper\\Helper;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputDefinition;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;

/**
 * Markdown descriptor.
 *
 * @author Jean-François Simon <contact@jfsimon.fr>
 *
 * @internal
 */
class MarkdownDescriptor extends Descriptor
{
    /**
     * {@inheritdoc}
     */
    public function describe(OutputInterface \$output, \$object, array \$options = [])
    {
        \$decorated = \$output->isDecorated();
        \$output->setDecorated(false);

        parent::describe(\$output, \$object, \$options);

        \$output->setDecorated(\$decorated);
    }

    /**
     * {@inheritdoc}
     */
    protected function write(\$content, \$decorated = true)
    {
        parent::write(\$content, \$decorated);
    }

    /**
     * {@inheritdoc}
     */
    protected function describeInputArgument(InputArgument \$argument, array \$options = [])
    {
        \$this->write(
            '#### `'.(\$argument->getName() ?: '<none>').\"`\\n\\n\"
            .(\$argument->getDescription() ? preg_replace('/\\s*[\\r\\n]\\s*/', \"\\n\", \$argument->getDescription()).\"\\n\\n\" : '')
            .'* Is required: '.(\$argument->isRequired() ? 'yes' : 'no').\"\\n\"
            .'* Is array: '.(\$argument->isArray() ? 'yes' : 'no').\"\\n\"
            .'* Default: `'.str_replace(\"\\n\", '', var_export(\$argument->getDefault(), true)).'`'
        );
    }

    /**
     * {@inheritdoc}
     */
    protected function describeInputOption(InputOption \$option, array \$options = [])
    {
        \$name = '--'.\$option->getName();
        if (\$option->getShortcut()) {
            \$name .= '|-'.str_replace('|', '|-', \$option->getShortcut()).'';
        }

        \$this->write(
            '#### `'.\$name.'`'.\"\\n\\n\"
            .(\$option->getDescription() ? preg_replace('/\\s*[\\r\\n]\\s*/', \"\\n\", \$option->getDescription()).\"\\n\\n\" : '')
            .'* Accept value: '.(\$option->acceptValue() ? 'yes' : 'no').\"\\n\"
            .'* Is value required: '.(\$option->isValueRequired() ? 'yes' : 'no').\"\\n\"
            .'* Is multiple: '.(\$option->isArray() ? 'yes' : 'no').\"\\n\"
            .'* Default: `'.str_replace(\"\\n\", '', var_export(\$option->getDefault(), true)).'`'
        );
    }

    /**
     * {@inheritdoc}
     */
    protected function describeInputDefinition(InputDefinition \$definition, array \$options = [])
    {
        if (\$showArguments = \\count(\$definition->getArguments()) > 0) {
            \$this->write('### Arguments');
            foreach (\$definition->getArguments() as \$argument) {
                \$this->write(\"\\n\\n\");
                \$this->write(\$this->describeInputArgument(\$argument));
            }
        }

        if (\\count(\$definition->getOptions()) > 0) {
            if (\$showArguments) {
                \$this->write(\"\\n\\n\");
            }

            \$this->write('### Options');
            foreach (\$definition->getOptions() as \$option) {
                \$this->write(\"\\n\\n\");
                \$this->write(\$this->describeInputOption(\$option));
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function describeCommand(Command \$command, array \$options = [])
    {
        \$command->getSynopsis();
        \$command->mergeApplicationDefinition(false);

        \$this->write(
            '`'.\$command->getName().\"`\\n\"
            .str_repeat('-', Helper::strlen(\$command->getName()) + 2).\"\\n\\n\"
            .(\$command->getDescription() ? \$command->getDescription().\"\\n\\n\" : '')
            .'### Usage'.\"\\n\\n\"
            .array_reduce(array_merge([\$command->getSynopsis()], \$command->getAliases(), \$command->getUsages()), function (\$carry, \$usage) {
                return \$carry.'* `'.\$usage.'`'.\"\\n\";
            })
        );

        if (\$help = \$command->getProcessedHelp()) {
            \$this->write(\"\\n\");
            \$this->write(\$help);
        }

        if (\$command->getNativeDefinition()) {
            \$this->write(\"\\n\\n\");
            \$this->describeInputDefinition(\$command->getNativeDefinition());
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function describeApplication(Application \$application, array \$options = [])
    {
        \$describedNamespace = isset(\$options['namespace']) ? \$options['namespace'] : null;
        \$description = new ApplicationDescription(\$application, \$describedNamespace);
        \$title = \$this->getApplicationTitle(\$application);

        \$this->write(\$title.\"\\n\".str_repeat('=', Helper::strlen(\$title)));

        foreach (\$description->getNamespaces() as \$namespace) {
            if (ApplicationDescription::GLOBAL_NAMESPACE !== \$namespace['id']) {
                \$this->write(\"\\n\\n\");
                \$this->write('**'.\$namespace['id'].':**');
            }

            \$this->write(\"\\n\\n\");
            \$this->write(implode(\"\\n\", array_map(function (\$commandName) use (\$description) {
                return sprintf('* [`%s`](#%s)', \$commandName, str_replace(':', '', \$description->getCommand(\$commandName)->getName()));
            }, \$namespace['commands'])));
        }

        foreach (\$description->getCommands() as \$command) {
            \$this->write(\"\\n\\n\");
            \$this->write(\$this->describeCommand(\$command));
        }
    }

    private function getApplicationTitle(Application \$application)
    {
        if ('UNKNOWN' !== \$application->getName()) {
            if ('UNKNOWN' !== \$application->getVersion()) {
                return sprintf('%s %s', \$application->getName(), \$application->getVersion());
            }

            return \$application->getName();
        }

        return 'Console Tool';
    }
}
", "vendor/symfony/console/Descriptor/MarkdownDescriptor.php", "/var/www/public/DevLaon/templates/vendor/symfony/console/Descriptor/MarkdownDescriptor.php");
    }
}
