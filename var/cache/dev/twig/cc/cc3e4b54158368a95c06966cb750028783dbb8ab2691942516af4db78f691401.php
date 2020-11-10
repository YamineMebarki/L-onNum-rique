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

/* vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/MappingDescribeCommand.php */
class __TwigTemplate_9116cf0d5e84289acb459c61a1b433aa8d8595a1d928a2799e24fcfbf296b68d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/MappingDescribeCommand.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/MappingDescribeCommand.php"));

        // line 1
        echo "<?php
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * \"AS IS\" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license. For more information, see
 * <http://www.doctrine-project.org>.
 */

namespace Doctrine\\ORM\\Tools\\Console\\Command;

use Doctrine\\Common\\Persistence\\Mapping\\MappingException;
use Doctrine\\ORM\\EntityManagerInterface;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;

/**
 * Show information about mapped entities.
 *
 * @link    www.doctrine-project.org
 * @since   2.4
 * @author  Daniel Leech <daniel@dantleech.com>
 */
final class MappingDescribeCommand extends Command
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this->setName('orm:mapping:describe')
             ->addArgument('entityName', InputArgument::REQUIRED, 'Full or partial name of entity')
             ->setDescription('Display information about mapped objects')
             ->setHelp(<<<EOT
The %command.full_name% command describes the metadata for the given full or partial entity class name.

    <info>%command.full_name%</info> My\\Namespace\\Entity\\MyEntity

Or:

    <info>%command.full_name%</info> MyEntity
EOT
             );
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$ui = new SymfonyStyle(\$input, \$output);

        /* @var \$entityManager \\Doctrine\\ORM\\EntityManagerInterface */
        \$entityManager = \$this->getHelper('em')->getEntityManager();

        \$this->displayEntity(\$input->getArgument('entityName'), \$entityManager, \$ui);

        return 0;
    }

    /**
     * Display all the mapping information for a single Entity.
     *
     * @param string                 \$entityName    Full or partial entity class name
     * @param EntityManagerInterface \$entityManager
     * @param SymfonyStyle           \$ui
     */
    private function displayEntity(\$entityName, EntityManagerInterface \$entityManager, SymfonyStyle \$ui)
    {
        \$metadata = \$this->getClassMetadata(\$entityName, \$entityManager);

        \$ui->table(
            ['Field', 'Value'],
            array_merge(
                [
                    \$this->formatField('Name', \$metadata->name),
                    \$this->formatField('Root entity name', \$metadata->rootEntityName),
                    \$this->formatField('Custom generator definition', \$metadata->customGeneratorDefinition),
                    \$this->formatField('Custom repository class', \$metadata->customRepositoryClassName),
                    \$this->formatField('Mapped super class?', \$metadata->isMappedSuperclass),
                    \$this->formatField('Embedded class?', \$metadata->isEmbeddedClass),
                    \$this->formatField('Parent classes', \$metadata->parentClasses),
                    \$this->formatField('Sub classes', \$metadata->subClasses),
                    \$this->formatField('Embedded classes', \$metadata->subClasses),
                    \$this->formatField('Named queries', \$metadata->namedQueries),
                    \$this->formatField('Named native queries', \$metadata->namedNativeQueries),
                    \$this->formatField('SQL result set mappings', \$metadata->sqlResultSetMappings),
                    \$this->formatField('Identifier', \$metadata->identifier),
                    \$this->formatField('Inheritance type', \$metadata->inheritanceType),
                    \$this->formatField('Discriminator column', \$metadata->discriminatorColumn),
                    \$this->formatField('Discriminator value', \$metadata->discriminatorValue),
                    \$this->formatField('Discriminator map', \$metadata->discriminatorMap),
                    \$this->formatField('Generator type', \$metadata->generatorType),
                    \$this->formatField('Table', \$metadata->table),
                    \$this->formatField('Composite identifier?', \$metadata->isIdentifierComposite),
                    \$this->formatField('Foreign identifier?', \$metadata->containsForeignIdentifier),
                    \$this->formatField('Sequence generator definition', \$metadata->sequenceGeneratorDefinition),
                    \$this->formatField('Table generator definition', \$metadata->tableGeneratorDefinition),
                    \$this->formatField('Change tracking policy', \$metadata->changeTrackingPolicy),
                    \$this->formatField('Versioned?', \$metadata->isVersioned),
                    \$this->formatField('Version field', \$metadata->versionField),
                    \$this->formatField('Read only?', \$metadata->isReadOnly),

                    \$this->formatEntityListeners(\$metadata->entityListeners),
                ],
                [\$this->formatField('Association mappings:', '')],
                \$this->formatMappings(\$metadata->associationMappings),
                [\$this->formatField('Field mappings:', '')],
                \$this->formatMappings(\$metadata->fieldMappings)
            )
        );
    }

    /**
     * Return all mapped entity class names
     *
     * @param EntityManagerInterface \$entityManager
     *
     * @return string[]
     */
    private function getMappedEntities(EntityManagerInterface \$entityManager)
    {
        \$entityClassNames = \$entityManager->getConfiguration()
                                          ->getMetadataDriverImpl()
                                          ->getAllClassNames();

        if ( ! \$entityClassNames) {
            throw new \\InvalidArgumentException(
                'You do not have any mapped Doctrine ORM entities according to the current configuration. '.
                'If you have entities or mapping files you should check your mapping configuration for errors.'
            );
        }

        return \$entityClassNames;
    }

    /**
     * Return the class metadata for the given entity
     * name
     *
     * @param string                 \$entityName    Full or partial entity name
     * @param EntityManagerInterface \$entityManager
     *
     * @return \\Doctrine\\ORM\\Mapping\\ClassMetadata
     */
    private function getClassMetadata(\$entityName, EntityManagerInterface \$entityManager)
    {
        try {
            return \$entityManager->getClassMetadata(\$entityName);
        } catch (MappingException \$e) {
        }

        \$matches = array_filter(
            \$this->getMappedEntities(\$entityManager),
            function (\$mappedEntity) use (\$entityName) {
                return preg_match('{' . preg_quote(\$entityName) . '}', \$mappedEntity);
            }
        );

        if ( ! \$matches) {
            throw new \\InvalidArgumentException(sprintf(
                'Could not find any mapped Entity classes matching \"%s\"',
                \$entityName
            ));
        }

        if (count(\$matches) > 1) {
            throw new \\InvalidArgumentException(sprintf(
                'Entity name \"%s\" is ambiguous, possible matches: \"%s\"',
                \$entityName, implode(', ', \$matches)
            ));
        }

        return \$entityManager->getClassMetadata(current(\$matches));
    }

    /**
     * Format the given value for console output
     *
     * @param mixed \$value
     *
     * @return string
     */
    private function formatValue(\$value)
    {
        if ('' === \$value) {
            return '';
        }

        if (null === \$value) {
            return '<comment>Null</comment>';
        }

        if (is_bool(\$value)) {
            return '<comment>' . (\$value ? 'True' : 'False') . '</comment>';
        }

        if (empty(\$value)) {
            return '<comment>Empty</comment>';
        }

        if (is_array(\$value)) {
            return json_encode(\$value, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        }

        if (is_object(\$value)) {
            return sprintf('<%s>', get_class(\$value));
        }

        if (is_scalar(\$value)) {
            return \$value;
        }

        throw new \\InvalidArgumentException(sprintf('Do not know how to format value \"%s\"', print_r(\$value, true)));
    }

    /**
     * Add the given label and value to the two column table output
     *
     * @param string \$label Label for the value
     * @param mixed  \$value A Value to show
     *
     * @return array
     */
    private function formatField(\$label, \$value)
    {
        if (null === \$value) {
            \$value = '<comment>None</comment>';
        }

        return [sprintf('<info>%s</info>', \$label), \$this->formatValue(\$value)];
    }

    /**
     * Format the association mappings
     *
     * @param array \$propertyMappings
     *
     * @return array
     */
    private function formatMappings(array \$propertyMappings)
    {
        \$output = [];

        foreach (\$propertyMappings as \$propertyName => \$mapping) {
            \$output[] = \$this->formatField(sprintf('  %s', \$propertyName), '');

            foreach (\$mapping as \$field => \$value) {
                \$output[] = \$this->formatField(sprintf('    %s', \$field), \$this->formatValue(\$value));
            }
        }

        return \$output;
    }

    /**
     * Format the entity listeners
     *
     * @param array \$entityListeners
     *
     * @return array
     */
    private function formatEntityListeners(array \$entityListeners)
    {
        return \$this->formatField('Entity listeners', array_map('get_class', \$entityListeners));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/MappingDescribeCommand.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * \"AS IS\" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license. For more information, see
 * <http://www.doctrine-project.org>.
 */

namespace Doctrine\\ORM\\Tools\\Console\\Command;

use Doctrine\\Common\\Persistence\\Mapping\\MappingException;
use Doctrine\\ORM\\EntityManagerInterface;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;

/**
 * Show information about mapped entities.
 *
 * @link    www.doctrine-project.org
 * @since   2.4
 * @author  Daniel Leech <daniel@dantleech.com>
 */
final class MappingDescribeCommand extends Command
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this->setName('orm:mapping:describe')
             ->addArgument('entityName', InputArgument::REQUIRED, 'Full or partial name of entity')
             ->setDescription('Display information about mapped objects')
             ->setHelp(<<<EOT
The %command.full_name% command describes the metadata for the given full or partial entity class name.

    <info>%command.full_name%</info> My\\Namespace\\Entity\\MyEntity

Or:

    <info>%command.full_name%</info> MyEntity
EOT
             );
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$ui = new SymfonyStyle(\$input, \$output);

        /* @var \$entityManager \\Doctrine\\ORM\\EntityManagerInterface */
        \$entityManager = \$this->getHelper('em')->getEntityManager();

        \$this->displayEntity(\$input->getArgument('entityName'), \$entityManager, \$ui);

        return 0;
    }

    /**
     * Display all the mapping information for a single Entity.
     *
     * @param string                 \$entityName    Full or partial entity class name
     * @param EntityManagerInterface \$entityManager
     * @param SymfonyStyle           \$ui
     */
    private function displayEntity(\$entityName, EntityManagerInterface \$entityManager, SymfonyStyle \$ui)
    {
        \$metadata = \$this->getClassMetadata(\$entityName, \$entityManager);

        \$ui->table(
            ['Field', 'Value'],
            array_merge(
                [
                    \$this->formatField('Name', \$metadata->name),
                    \$this->formatField('Root entity name', \$metadata->rootEntityName),
                    \$this->formatField('Custom generator definition', \$metadata->customGeneratorDefinition),
                    \$this->formatField('Custom repository class', \$metadata->customRepositoryClassName),
                    \$this->formatField('Mapped super class?', \$metadata->isMappedSuperclass),
                    \$this->formatField('Embedded class?', \$metadata->isEmbeddedClass),
                    \$this->formatField('Parent classes', \$metadata->parentClasses),
                    \$this->formatField('Sub classes', \$metadata->subClasses),
                    \$this->formatField('Embedded classes', \$metadata->subClasses),
                    \$this->formatField('Named queries', \$metadata->namedQueries),
                    \$this->formatField('Named native queries', \$metadata->namedNativeQueries),
                    \$this->formatField('SQL result set mappings', \$metadata->sqlResultSetMappings),
                    \$this->formatField('Identifier', \$metadata->identifier),
                    \$this->formatField('Inheritance type', \$metadata->inheritanceType),
                    \$this->formatField('Discriminator column', \$metadata->discriminatorColumn),
                    \$this->formatField('Discriminator value', \$metadata->discriminatorValue),
                    \$this->formatField('Discriminator map', \$metadata->discriminatorMap),
                    \$this->formatField('Generator type', \$metadata->generatorType),
                    \$this->formatField('Table', \$metadata->table),
                    \$this->formatField('Composite identifier?', \$metadata->isIdentifierComposite),
                    \$this->formatField('Foreign identifier?', \$metadata->containsForeignIdentifier),
                    \$this->formatField('Sequence generator definition', \$metadata->sequenceGeneratorDefinition),
                    \$this->formatField('Table generator definition', \$metadata->tableGeneratorDefinition),
                    \$this->formatField('Change tracking policy', \$metadata->changeTrackingPolicy),
                    \$this->formatField('Versioned?', \$metadata->isVersioned),
                    \$this->formatField('Version field', \$metadata->versionField),
                    \$this->formatField('Read only?', \$metadata->isReadOnly),

                    \$this->formatEntityListeners(\$metadata->entityListeners),
                ],
                [\$this->formatField('Association mappings:', '')],
                \$this->formatMappings(\$metadata->associationMappings),
                [\$this->formatField('Field mappings:', '')],
                \$this->formatMappings(\$metadata->fieldMappings)
            )
        );
    }

    /**
     * Return all mapped entity class names
     *
     * @param EntityManagerInterface \$entityManager
     *
     * @return string[]
     */
    private function getMappedEntities(EntityManagerInterface \$entityManager)
    {
        \$entityClassNames = \$entityManager->getConfiguration()
                                          ->getMetadataDriverImpl()
                                          ->getAllClassNames();

        if ( ! \$entityClassNames) {
            throw new \\InvalidArgumentException(
                'You do not have any mapped Doctrine ORM entities according to the current configuration. '.
                'If you have entities or mapping files you should check your mapping configuration for errors.'
            );
        }

        return \$entityClassNames;
    }

    /**
     * Return the class metadata for the given entity
     * name
     *
     * @param string                 \$entityName    Full or partial entity name
     * @param EntityManagerInterface \$entityManager
     *
     * @return \\Doctrine\\ORM\\Mapping\\ClassMetadata
     */
    private function getClassMetadata(\$entityName, EntityManagerInterface \$entityManager)
    {
        try {
            return \$entityManager->getClassMetadata(\$entityName);
        } catch (MappingException \$e) {
        }

        \$matches = array_filter(
            \$this->getMappedEntities(\$entityManager),
            function (\$mappedEntity) use (\$entityName) {
                return preg_match('{' . preg_quote(\$entityName) . '}', \$mappedEntity);
            }
        );

        if ( ! \$matches) {
            throw new \\InvalidArgumentException(sprintf(
                'Could not find any mapped Entity classes matching \"%s\"',
                \$entityName
            ));
        }

        if (count(\$matches) > 1) {
            throw new \\InvalidArgumentException(sprintf(
                'Entity name \"%s\" is ambiguous, possible matches: \"%s\"',
                \$entityName, implode(', ', \$matches)
            ));
        }

        return \$entityManager->getClassMetadata(current(\$matches));
    }

    /**
     * Format the given value for console output
     *
     * @param mixed \$value
     *
     * @return string
     */
    private function formatValue(\$value)
    {
        if ('' === \$value) {
            return '';
        }

        if (null === \$value) {
            return '<comment>Null</comment>';
        }

        if (is_bool(\$value)) {
            return '<comment>' . (\$value ? 'True' : 'False') . '</comment>';
        }

        if (empty(\$value)) {
            return '<comment>Empty</comment>';
        }

        if (is_array(\$value)) {
            return json_encode(\$value, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        }

        if (is_object(\$value)) {
            return sprintf('<%s>', get_class(\$value));
        }

        if (is_scalar(\$value)) {
            return \$value;
        }

        throw new \\InvalidArgumentException(sprintf('Do not know how to format value \"%s\"', print_r(\$value, true)));
    }

    /**
     * Add the given label and value to the two column table output
     *
     * @param string \$label Label for the value
     * @param mixed  \$value A Value to show
     *
     * @return array
     */
    private function formatField(\$label, \$value)
    {
        if (null === \$value) {
            \$value = '<comment>None</comment>';
        }

        return [sprintf('<info>%s</info>', \$label), \$this->formatValue(\$value)];
    }

    /**
     * Format the association mappings
     *
     * @param array \$propertyMappings
     *
     * @return array
     */
    private function formatMappings(array \$propertyMappings)
    {
        \$output = [];

        foreach (\$propertyMappings as \$propertyName => \$mapping) {
            \$output[] = \$this->formatField(sprintf('  %s', \$propertyName), '');

            foreach (\$mapping as \$field => \$value) {
                \$output[] = \$this->formatField(sprintf('    %s', \$field), \$this->formatValue(\$value));
            }
        }

        return \$output;
    }

    /**
     * Format the entity listeners
     *
     * @param array \$entityListeners
     *
     * @return array
     */
    private function formatEntityListeners(array \$entityListeners)
    {
        return \$this->formatField('Entity listeners', array_map('get_class', \$entityListeners));
    }
}
", "vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/MappingDescribeCommand.php", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/MappingDescribeCommand.php");
    }
}
