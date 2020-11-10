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

/* vendor/symfony/console/Descriptor/JsonDescriptor.php */
class __TwigTemplate_69d92182fabf72a94a6e8e9b87275a5f3b52eb414946583009ccc4d96dc063d7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Descriptor/JsonDescriptor.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Descriptor/JsonDescriptor.php"));

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
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputDefinition;
use Symfony\\Component\\Console\\Input\\InputOption;

/**
 * JSON descriptor.
 *
 * @author Jean-François Simon <contact@jfsimon.fr>
 *
 * @internal
 */
class JsonDescriptor extends Descriptor
{
    /**
     * {@inheritdoc}
     */
    protected function describeInputArgument(InputArgument \$argument, array \$options = [])
    {
        \$this->writeData(\$this->getInputArgumentData(\$argument), \$options);
    }

    /**
     * {@inheritdoc}
     */
    protected function describeInputOption(InputOption \$option, array \$options = [])
    {
        \$this->writeData(\$this->getInputOptionData(\$option), \$options);
    }

    /**
     * {@inheritdoc}
     */
    protected function describeInputDefinition(InputDefinition \$definition, array \$options = [])
    {
        \$this->writeData(\$this->getInputDefinitionData(\$definition), \$options);
    }

    /**
     * {@inheritdoc}
     */
    protected function describeCommand(Command \$command, array \$options = [])
    {
        \$this->writeData(\$this->getCommandData(\$command), \$options);
    }

    /**
     * {@inheritdoc}
     */
    protected function describeApplication(Application \$application, array \$options = [])
    {
        \$describedNamespace = isset(\$options['namespace']) ? \$options['namespace'] : null;
        \$description = new ApplicationDescription(\$application, \$describedNamespace, true);
        \$commands = [];

        foreach (\$description->getCommands() as \$command) {
            \$commands[] = \$this->getCommandData(\$command);
        }

        \$data = [];
        if ('UNKNOWN' !== \$application->getName()) {
            \$data['application']['name'] = \$application->getName();
            if ('UNKNOWN' !== \$application->getVersion()) {
                \$data['application']['version'] = \$application->getVersion();
            }
        }

        \$data['commands'] = \$commands;

        if (\$describedNamespace) {
            \$data['namespace'] = \$describedNamespace;
        } else {
            \$data['namespaces'] = array_values(\$description->getNamespaces());
        }

        \$this->writeData(\$data, \$options);
    }

    /**
     * Writes data as json.
     */
    private function writeData(array \$data, array \$options)
    {
        \$flags = isset(\$options['json_encoding']) ? \$options['json_encoding'] : 0;

        \$this->write(json_encode(\$data, \$flags));
    }

    /**
     * @return array
     */
    private function getInputArgumentData(InputArgument \$argument)
    {
        return [
            'name' => \$argument->getName(),
            'is_required' => \$argument->isRequired(),
            'is_array' => \$argument->isArray(),
            'description' => preg_replace('/\\s*[\\r\\n]\\s*/', ' ', \$argument->getDescription()),
            'default' => INF === \$argument->getDefault() ? 'INF' : \$argument->getDefault(),
        ];
    }

    /**
     * @return array
     */
    private function getInputOptionData(InputOption \$option)
    {
        return [
            'name' => '--'.\$option->getName(),
            'shortcut' => \$option->getShortcut() ? '-'.str_replace('|', '|-', \$option->getShortcut()) : '',
            'accept_value' => \$option->acceptValue(),
            'is_value_required' => \$option->isValueRequired(),
            'is_multiple' => \$option->isArray(),
            'description' => preg_replace('/\\s*[\\r\\n]\\s*/', ' ', \$option->getDescription()),
            'default' => INF === \$option->getDefault() ? 'INF' : \$option->getDefault(),
        ];
    }

    /**
     * @return array
     */
    private function getInputDefinitionData(InputDefinition \$definition)
    {
        \$inputArguments = [];
        foreach (\$definition->getArguments() as \$name => \$argument) {
            \$inputArguments[\$name] = \$this->getInputArgumentData(\$argument);
        }

        \$inputOptions = [];
        foreach (\$definition->getOptions() as \$name => \$option) {
            \$inputOptions[\$name] = \$this->getInputOptionData(\$option);
        }

        return ['arguments' => \$inputArguments, 'options' => \$inputOptions];
    }

    /**
     * @return array
     */
    private function getCommandData(Command \$command)
    {
        \$command->getSynopsis();
        \$command->mergeApplicationDefinition(false);

        return [
            'name' => \$command->getName(),
            'usage' => array_merge([\$command->getSynopsis()], \$command->getUsages(), \$command->getAliases()),
            'description' => \$command->getDescription(),
            'help' => \$command->getProcessedHelp(),
            'definition' => \$this->getInputDefinitionData(\$command->getNativeDefinition()),
            'hidden' => \$command->isHidden(),
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Descriptor/JsonDescriptor.php";
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
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputDefinition;
use Symfony\\Component\\Console\\Input\\InputOption;

/**
 * JSON descriptor.
 *
 * @author Jean-François Simon <contact@jfsimon.fr>
 *
 * @internal
 */
class JsonDescriptor extends Descriptor
{
    /**
     * {@inheritdoc}
     */
    protected function describeInputArgument(InputArgument \$argument, array \$options = [])
    {
        \$this->writeData(\$this->getInputArgumentData(\$argument), \$options);
    }

    /**
     * {@inheritdoc}
     */
    protected function describeInputOption(InputOption \$option, array \$options = [])
    {
        \$this->writeData(\$this->getInputOptionData(\$option), \$options);
    }

    /**
     * {@inheritdoc}
     */
    protected function describeInputDefinition(InputDefinition \$definition, array \$options = [])
    {
        \$this->writeData(\$this->getInputDefinitionData(\$definition), \$options);
    }

    /**
     * {@inheritdoc}
     */
    protected function describeCommand(Command \$command, array \$options = [])
    {
        \$this->writeData(\$this->getCommandData(\$command), \$options);
    }

    /**
     * {@inheritdoc}
     */
    protected function describeApplication(Application \$application, array \$options = [])
    {
        \$describedNamespace = isset(\$options['namespace']) ? \$options['namespace'] : null;
        \$description = new ApplicationDescription(\$application, \$describedNamespace, true);
        \$commands = [];

        foreach (\$description->getCommands() as \$command) {
            \$commands[] = \$this->getCommandData(\$command);
        }

        \$data = [];
        if ('UNKNOWN' !== \$application->getName()) {
            \$data['application']['name'] = \$application->getName();
            if ('UNKNOWN' !== \$application->getVersion()) {
                \$data['application']['version'] = \$application->getVersion();
            }
        }

        \$data['commands'] = \$commands;

        if (\$describedNamespace) {
            \$data['namespace'] = \$describedNamespace;
        } else {
            \$data['namespaces'] = array_values(\$description->getNamespaces());
        }

        \$this->writeData(\$data, \$options);
    }

    /**
     * Writes data as json.
     */
    private function writeData(array \$data, array \$options)
    {
        \$flags = isset(\$options['json_encoding']) ? \$options['json_encoding'] : 0;

        \$this->write(json_encode(\$data, \$flags));
    }

    /**
     * @return array
     */
    private function getInputArgumentData(InputArgument \$argument)
    {
        return [
            'name' => \$argument->getName(),
            'is_required' => \$argument->isRequired(),
            'is_array' => \$argument->isArray(),
            'description' => preg_replace('/\\s*[\\r\\n]\\s*/', ' ', \$argument->getDescription()),
            'default' => INF === \$argument->getDefault() ? 'INF' : \$argument->getDefault(),
        ];
    }

    /**
     * @return array
     */
    private function getInputOptionData(InputOption \$option)
    {
        return [
            'name' => '--'.\$option->getName(),
            'shortcut' => \$option->getShortcut() ? '-'.str_replace('|', '|-', \$option->getShortcut()) : '',
            'accept_value' => \$option->acceptValue(),
            'is_value_required' => \$option->isValueRequired(),
            'is_multiple' => \$option->isArray(),
            'description' => preg_replace('/\\s*[\\r\\n]\\s*/', ' ', \$option->getDescription()),
            'default' => INF === \$option->getDefault() ? 'INF' : \$option->getDefault(),
        ];
    }

    /**
     * @return array
     */
    private function getInputDefinitionData(InputDefinition \$definition)
    {
        \$inputArguments = [];
        foreach (\$definition->getArguments() as \$name => \$argument) {
            \$inputArguments[\$name] = \$this->getInputArgumentData(\$argument);
        }

        \$inputOptions = [];
        foreach (\$definition->getOptions() as \$name => \$option) {
            \$inputOptions[\$name] = \$this->getInputOptionData(\$option);
        }

        return ['arguments' => \$inputArguments, 'options' => \$inputOptions];
    }

    /**
     * @return array
     */
    private function getCommandData(Command \$command)
    {
        \$command->getSynopsis();
        \$command->mergeApplicationDefinition(false);

        return [
            'name' => \$command->getName(),
            'usage' => array_merge([\$command->getSynopsis()], \$command->getUsages(), \$command->getAliases()),
            'description' => \$command->getDescription(),
            'help' => \$command->getProcessedHelp(),
            'definition' => \$this->getInputDefinitionData(\$command->getNativeDefinition()),
            'hidden' => \$command->isHidden(),
        ];
    }
}
", "vendor/symfony/console/Descriptor/JsonDescriptor.php", "/var/www/public/DevLaon/templates/vendor/symfony/console/Descriptor/JsonDescriptor.php");
    }
}
