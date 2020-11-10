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

/* vendor/symfony/console/Descriptor/XmlDescriptor.php */
class __TwigTemplate_c9477080807eeb2a6b85dd62eb9c8077b2e6e2c0573b7f0ccdd875a52f0e8e9e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Descriptor/XmlDescriptor.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Descriptor/XmlDescriptor.php"));

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
 * XML descriptor.
 *
 * @author Jean-François Simon <contact@jfsimon.fr>
 *
 * @internal
 */
class XmlDescriptor extends Descriptor
{
    /**
     * @return \\DOMDocument
     */
    public function getInputDefinitionDocument(InputDefinition \$definition)
    {
        \$dom = new \\DOMDocument('1.0', 'UTF-8');
        \$dom->appendChild(\$definitionXML = \$dom->createElement('definition'));

        \$definitionXML->appendChild(\$argumentsXML = \$dom->createElement('arguments'));
        foreach (\$definition->getArguments() as \$argument) {
            \$this->appendDocument(\$argumentsXML, \$this->getInputArgumentDocument(\$argument));
        }

        \$definitionXML->appendChild(\$optionsXML = \$dom->createElement('options'));
        foreach (\$definition->getOptions() as \$option) {
            \$this->appendDocument(\$optionsXML, \$this->getInputOptionDocument(\$option));
        }

        return \$dom;
    }

    /**
     * @return \\DOMDocument
     */
    public function getCommandDocument(Command \$command)
    {
        \$dom = new \\DOMDocument('1.0', 'UTF-8');
        \$dom->appendChild(\$commandXML = \$dom->createElement('command'));

        \$command->getSynopsis();
        \$command->mergeApplicationDefinition(false);

        \$commandXML->setAttribute('id', \$command->getName());
        \$commandXML->setAttribute('name', \$command->getName());
        \$commandXML->setAttribute('hidden', \$command->isHidden() ? 1 : 0);

        \$commandXML->appendChild(\$usagesXML = \$dom->createElement('usages'));

        foreach (array_merge([\$command->getSynopsis()], \$command->getAliases(), \$command->getUsages()) as \$usage) {
            \$usagesXML->appendChild(\$dom->createElement('usage', \$usage));
        }

        \$commandXML->appendChild(\$descriptionXML = \$dom->createElement('description'));
        \$descriptionXML->appendChild(\$dom->createTextNode(str_replace(\"\\n\", \"\\n \", \$command->getDescription())));

        \$commandXML->appendChild(\$helpXML = \$dom->createElement('help'));
        \$helpXML->appendChild(\$dom->createTextNode(str_replace(\"\\n\", \"\\n \", \$command->getProcessedHelp())));

        \$definitionXML = \$this->getInputDefinitionDocument(\$command->getNativeDefinition());
        \$this->appendDocument(\$commandXML, \$definitionXML->getElementsByTagName('definition')->item(0));

        return \$dom;
    }

    /**
     * @param string|null \$namespace
     *
     * @return \\DOMDocument
     */
    public function getApplicationDocument(Application \$application, \$namespace = null)
    {
        \$dom = new \\DOMDocument('1.0', 'UTF-8');
        \$dom->appendChild(\$rootXml = \$dom->createElement('symfony'));

        if ('UNKNOWN' !== \$application->getName()) {
            \$rootXml->setAttribute('name', \$application->getName());
            if ('UNKNOWN' !== \$application->getVersion()) {
                \$rootXml->setAttribute('version', \$application->getVersion());
            }
        }

        \$rootXml->appendChild(\$commandsXML = \$dom->createElement('commands'));

        \$description = new ApplicationDescription(\$application, \$namespace, true);

        if (\$namespace) {
            \$commandsXML->setAttribute('namespace', \$namespace);
        }

        foreach (\$description->getCommands() as \$command) {
            \$this->appendDocument(\$commandsXML, \$this->getCommandDocument(\$command));
        }

        if (!\$namespace) {
            \$rootXml->appendChild(\$namespacesXML = \$dom->createElement('namespaces'));

            foreach (\$description->getNamespaces() as \$namespaceDescription) {
                \$namespacesXML->appendChild(\$namespaceArrayXML = \$dom->createElement('namespace'));
                \$namespaceArrayXML->setAttribute('id', \$namespaceDescription['id']);

                foreach (\$namespaceDescription['commands'] as \$name) {
                    \$namespaceArrayXML->appendChild(\$commandXML = \$dom->createElement('command'));
                    \$commandXML->appendChild(\$dom->createTextNode(\$name));
                }
            }
        }

        return \$dom;
    }

    /**
     * {@inheritdoc}
     */
    protected function describeInputArgument(InputArgument \$argument, array \$options = [])
    {
        \$this->writeDocument(\$this->getInputArgumentDocument(\$argument));
    }

    /**
     * {@inheritdoc}
     */
    protected function describeInputOption(InputOption \$option, array \$options = [])
    {
        \$this->writeDocument(\$this->getInputOptionDocument(\$option));
    }

    /**
     * {@inheritdoc}
     */
    protected function describeInputDefinition(InputDefinition \$definition, array \$options = [])
    {
        \$this->writeDocument(\$this->getInputDefinitionDocument(\$definition));
    }

    /**
     * {@inheritdoc}
     */
    protected function describeCommand(Command \$command, array \$options = [])
    {
        \$this->writeDocument(\$this->getCommandDocument(\$command));
    }

    /**
     * {@inheritdoc}
     */
    protected function describeApplication(Application \$application, array \$options = [])
    {
        \$this->writeDocument(\$this->getApplicationDocument(\$application, isset(\$options['namespace']) ? \$options['namespace'] : null));
    }

    /**
     * Appends document children to parent node.
     */
    private function appendDocument(\\DOMNode \$parentNode, \\DOMNode \$importedParent)
    {
        foreach (\$importedParent->childNodes as \$childNode) {
            \$parentNode->appendChild(\$parentNode->ownerDocument->importNode(\$childNode, true));
        }
    }

    /**
     * Writes DOM document.
     */
    private function writeDocument(\\DOMDocument \$dom)
    {
        \$dom->formatOutput = true;
        \$this->write(\$dom->saveXML());
    }

    private function getInputArgumentDocument(InputArgument \$argument): \\DOMDocument
    {
        \$dom = new \\DOMDocument('1.0', 'UTF-8');

        \$dom->appendChild(\$objectXML = \$dom->createElement('argument'));
        \$objectXML->setAttribute('name', \$argument->getName());
        \$objectXML->setAttribute('is_required', \$argument->isRequired() ? 1 : 0);
        \$objectXML->setAttribute('is_array', \$argument->isArray() ? 1 : 0);
        \$objectXML->appendChild(\$descriptionXML = \$dom->createElement('description'));
        \$descriptionXML->appendChild(\$dom->createTextNode(\$argument->getDescription()));

        \$objectXML->appendChild(\$defaultsXML = \$dom->createElement('defaults'));
        \$defaults = \\is_array(\$argument->getDefault()) ? \$argument->getDefault() : (\\is_bool(\$argument->getDefault()) ? [var_export(\$argument->getDefault(), true)] : (\$argument->getDefault() ? [\$argument->getDefault()] : []));
        foreach (\$defaults as \$default) {
            \$defaultsXML->appendChild(\$defaultXML = \$dom->createElement('default'));
            \$defaultXML->appendChild(\$dom->createTextNode(\$default));
        }

        return \$dom;
    }

    private function getInputOptionDocument(InputOption \$option): \\DOMDocument
    {
        \$dom = new \\DOMDocument('1.0', 'UTF-8');

        \$dom->appendChild(\$objectXML = \$dom->createElement('option'));
        \$objectXML->setAttribute('name', '--'.\$option->getName());
        \$pos = strpos(\$option->getShortcut(), '|');
        if (false !== \$pos) {
            \$objectXML->setAttribute('shortcut', '-'.substr(\$option->getShortcut(), 0, \$pos));
            \$objectXML->setAttribute('shortcuts', '-'.str_replace('|', '|-', \$option->getShortcut()));
        } else {
            \$objectXML->setAttribute('shortcut', \$option->getShortcut() ? '-'.\$option->getShortcut() : '');
        }
        \$objectXML->setAttribute('accept_value', \$option->acceptValue() ? 1 : 0);
        \$objectXML->setAttribute('is_value_required', \$option->isValueRequired() ? 1 : 0);
        \$objectXML->setAttribute('is_multiple', \$option->isArray() ? 1 : 0);
        \$objectXML->appendChild(\$descriptionXML = \$dom->createElement('description'));
        \$descriptionXML->appendChild(\$dom->createTextNode(\$option->getDescription()));

        if (\$option->acceptValue()) {
            \$defaults = \\is_array(\$option->getDefault()) ? \$option->getDefault() : (\\is_bool(\$option->getDefault()) ? [var_export(\$option->getDefault(), true)] : (\$option->getDefault() ? [\$option->getDefault()] : []));
            \$objectXML->appendChild(\$defaultsXML = \$dom->createElement('defaults'));

            if (!empty(\$defaults)) {
                foreach (\$defaults as \$default) {
                    \$defaultsXML->appendChild(\$defaultXML = \$dom->createElement('default'));
                    \$defaultXML->appendChild(\$dom->createTextNode(\$default));
                }
            }
        }

        return \$dom;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Descriptor/XmlDescriptor.php";
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
 * XML descriptor.
 *
 * @author Jean-François Simon <contact@jfsimon.fr>
 *
 * @internal
 */
class XmlDescriptor extends Descriptor
{
    /**
     * @return \\DOMDocument
     */
    public function getInputDefinitionDocument(InputDefinition \$definition)
    {
        \$dom = new \\DOMDocument('1.0', 'UTF-8');
        \$dom->appendChild(\$definitionXML = \$dom->createElement('definition'));

        \$definitionXML->appendChild(\$argumentsXML = \$dom->createElement('arguments'));
        foreach (\$definition->getArguments() as \$argument) {
            \$this->appendDocument(\$argumentsXML, \$this->getInputArgumentDocument(\$argument));
        }

        \$definitionXML->appendChild(\$optionsXML = \$dom->createElement('options'));
        foreach (\$definition->getOptions() as \$option) {
            \$this->appendDocument(\$optionsXML, \$this->getInputOptionDocument(\$option));
        }

        return \$dom;
    }

    /**
     * @return \\DOMDocument
     */
    public function getCommandDocument(Command \$command)
    {
        \$dom = new \\DOMDocument('1.0', 'UTF-8');
        \$dom->appendChild(\$commandXML = \$dom->createElement('command'));

        \$command->getSynopsis();
        \$command->mergeApplicationDefinition(false);

        \$commandXML->setAttribute('id', \$command->getName());
        \$commandXML->setAttribute('name', \$command->getName());
        \$commandXML->setAttribute('hidden', \$command->isHidden() ? 1 : 0);

        \$commandXML->appendChild(\$usagesXML = \$dom->createElement('usages'));

        foreach (array_merge([\$command->getSynopsis()], \$command->getAliases(), \$command->getUsages()) as \$usage) {
            \$usagesXML->appendChild(\$dom->createElement('usage', \$usage));
        }

        \$commandXML->appendChild(\$descriptionXML = \$dom->createElement('description'));
        \$descriptionXML->appendChild(\$dom->createTextNode(str_replace(\"\\n\", \"\\n \", \$command->getDescription())));

        \$commandXML->appendChild(\$helpXML = \$dom->createElement('help'));
        \$helpXML->appendChild(\$dom->createTextNode(str_replace(\"\\n\", \"\\n \", \$command->getProcessedHelp())));

        \$definitionXML = \$this->getInputDefinitionDocument(\$command->getNativeDefinition());
        \$this->appendDocument(\$commandXML, \$definitionXML->getElementsByTagName('definition')->item(0));

        return \$dom;
    }

    /**
     * @param string|null \$namespace
     *
     * @return \\DOMDocument
     */
    public function getApplicationDocument(Application \$application, \$namespace = null)
    {
        \$dom = new \\DOMDocument('1.0', 'UTF-8');
        \$dom->appendChild(\$rootXml = \$dom->createElement('symfony'));

        if ('UNKNOWN' !== \$application->getName()) {
            \$rootXml->setAttribute('name', \$application->getName());
            if ('UNKNOWN' !== \$application->getVersion()) {
                \$rootXml->setAttribute('version', \$application->getVersion());
            }
        }

        \$rootXml->appendChild(\$commandsXML = \$dom->createElement('commands'));

        \$description = new ApplicationDescription(\$application, \$namespace, true);

        if (\$namespace) {
            \$commandsXML->setAttribute('namespace', \$namespace);
        }

        foreach (\$description->getCommands() as \$command) {
            \$this->appendDocument(\$commandsXML, \$this->getCommandDocument(\$command));
        }

        if (!\$namespace) {
            \$rootXml->appendChild(\$namespacesXML = \$dom->createElement('namespaces'));

            foreach (\$description->getNamespaces() as \$namespaceDescription) {
                \$namespacesXML->appendChild(\$namespaceArrayXML = \$dom->createElement('namespace'));
                \$namespaceArrayXML->setAttribute('id', \$namespaceDescription['id']);

                foreach (\$namespaceDescription['commands'] as \$name) {
                    \$namespaceArrayXML->appendChild(\$commandXML = \$dom->createElement('command'));
                    \$commandXML->appendChild(\$dom->createTextNode(\$name));
                }
            }
        }

        return \$dom;
    }

    /**
     * {@inheritdoc}
     */
    protected function describeInputArgument(InputArgument \$argument, array \$options = [])
    {
        \$this->writeDocument(\$this->getInputArgumentDocument(\$argument));
    }

    /**
     * {@inheritdoc}
     */
    protected function describeInputOption(InputOption \$option, array \$options = [])
    {
        \$this->writeDocument(\$this->getInputOptionDocument(\$option));
    }

    /**
     * {@inheritdoc}
     */
    protected function describeInputDefinition(InputDefinition \$definition, array \$options = [])
    {
        \$this->writeDocument(\$this->getInputDefinitionDocument(\$definition));
    }

    /**
     * {@inheritdoc}
     */
    protected function describeCommand(Command \$command, array \$options = [])
    {
        \$this->writeDocument(\$this->getCommandDocument(\$command));
    }

    /**
     * {@inheritdoc}
     */
    protected function describeApplication(Application \$application, array \$options = [])
    {
        \$this->writeDocument(\$this->getApplicationDocument(\$application, isset(\$options['namespace']) ? \$options['namespace'] : null));
    }

    /**
     * Appends document children to parent node.
     */
    private function appendDocument(\\DOMNode \$parentNode, \\DOMNode \$importedParent)
    {
        foreach (\$importedParent->childNodes as \$childNode) {
            \$parentNode->appendChild(\$parentNode->ownerDocument->importNode(\$childNode, true));
        }
    }

    /**
     * Writes DOM document.
     */
    private function writeDocument(\\DOMDocument \$dom)
    {
        \$dom->formatOutput = true;
        \$this->write(\$dom->saveXML());
    }

    private function getInputArgumentDocument(InputArgument \$argument): \\DOMDocument
    {
        \$dom = new \\DOMDocument('1.0', 'UTF-8');

        \$dom->appendChild(\$objectXML = \$dom->createElement('argument'));
        \$objectXML->setAttribute('name', \$argument->getName());
        \$objectXML->setAttribute('is_required', \$argument->isRequired() ? 1 : 0);
        \$objectXML->setAttribute('is_array', \$argument->isArray() ? 1 : 0);
        \$objectXML->appendChild(\$descriptionXML = \$dom->createElement('description'));
        \$descriptionXML->appendChild(\$dom->createTextNode(\$argument->getDescription()));

        \$objectXML->appendChild(\$defaultsXML = \$dom->createElement('defaults'));
        \$defaults = \\is_array(\$argument->getDefault()) ? \$argument->getDefault() : (\\is_bool(\$argument->getDefault()) ? [var_export(\$argument->getDefault(), true)] : (\$argument->getDefault() ? [\$argument->getDefault()] : []));
        foreach (\$defaults as \$default) {
            \$defaultsXML->appendChild(\$defaultXML = \$dom->createElement('default'));
            \$defaultXML->appendChild(\$dom->createTextNode(\$default));
        }

        return \$dom;
    }

    private function getInputOptionDocument(InputOption \$option): \\DOMDocument
    {
        \$dom = new \\DOMDocument('1.0', 'UTF-8');

        \$dom->appendChild(\$objectXML = \$dom->createElement('option'));
        \$objectXML->setAttribute('name', '--'.\$option->getName());
        \$pos = strpos(\$option->getShortcut(), '|');
        if (false !== \$pos) {
            \$objectXML->setAttribute('shortcut', '-'.substr(\$option->getShortcut(), 0, \$pos));
            \$objectXML->setAttribute('shortcuts', '-'.str_replace('|', '|-', \$option->getShortcut()));
        } else {
            \$objectXML->setAttribute('shortcut', \$option->getShortcut() ? '-'.\$option->getShortcut() : '');
        }
        \$objectXML->setAttribute('accept_value', \$option->acceptValue() ? 1 : 0);
        \$objectXML->setAttribute('is_value_required', \$option->isValueRequired() ? 1 : 0);
        \$objectXML->setAttribute('is_multiple', \$option->isArray() ? 1 : 0);
        \$objectXML->appendChild(\$descriptionXML = \$dom->createElement('description'));
        \$descriptionXML->appendChild(\$dom->createTextNode(\$option->getDescription()));

        if (\$option->acceptValue()) {
            \$defaults = \\is_array(\$option->getDefault()) ? \$option->getDefault() : (\\is_bool(\$option->getDefault()) ? [var_export(\$option->getDefault(), true)] : (\$option->getDefault() ? [\$option->getDefault()] : []));
            \$objectXML->appendChild(\$defaultsXML = \$dom->createElement('defaults'));

            if (!empty(\$defaults)) {
                foreach (\$defaults as \$default) {
                    \$defaultsXML->appendChild(\$defaultXML = \$dom->createElement('default'));
                    \$defaultXML->appendChild(\$dom->createTextNode(\$default));
                }
            }
        }

        return \$dom;
    }
}
", "vendor/symfony/console/Descriptor/XmlDescriptor.php", "/var/www/public/DevLaon/templates/vendor/symfony/console/Descriptor/XmlDescriptor.php");
    }
}
