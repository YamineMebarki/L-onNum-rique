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

/* vendor/symfony/maker-bundle/src/Doctrine/EntityRegenerator.php */
class __TwigTemplate_4207b33e551beaa23fc93361ea1f96ecec55d186b3dc7b9f034fecee4675688a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Doctrine/EntityRegenerator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Doctrine/EntityRegenerator.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bundle\\MakerBundle\\Doctrine;

use Doctrine\\Common\\Persistence\\Mapping\\MappingException as CommonMappingException;
use Doctrine\\ORM\\Mapping\\ClassMetadata;
use Doctrine\\ORM\\Mapping\\MappingException;
use Symfony\\Bundle\\MakerBundle\\Exception\\RuntimeCommandException;
use Symfony\\Bundle\\MakerBundle\\FileManager;
use Symfony\\Bundle\\MakerBundle\\Generator;
use Symfony\\Bundle\\MakerBundle\\Str;
use Symfony\\Bundle\\MakerBundle\\Util\\ClassSourceManipulator;

/**
 * @internal
 */
final class EntityRegenerator
{
    private \$doctrineHelper;
    private \$fileManager;
    private \$generator;
    private \$overwrite;

    public function __construct(DoctrineHelper \$doctrineHelper, FileManager \$fileManager, Generator \$generator, bool \$overwrite)
    {
        \$this->doctrineHelper = \$doctrineHelper;
        \$this->fileManager = \$fileManager;
        \$this->generator = \$generator;
        \$this->overwrite = \$overwrite;
    }

    public function regenerateEntities(string \$classOrNamespace)
    {
        try {
            \$metadata = \$this->doctrineHelper->getMetadata(\$classOrNamespace);
        } catch (MappingException | CommonMappingException \$mappingException) {
            \$metadata = \$this->doctrineHelper->getMetadata(\$classOrNamespace, true);
        }

        if (\$metadata instanceof ClassMetadata) {
            \$metadata = [\$metadata];
        } elseif (class_exists(\$classOrNamespace)) {
            throw new RuntimeCommandException(sprintf('Could not find Doctrine metadata for \"%s\". Is it mapped as an entity?', \$classOrNamespace));
        } elseif (empty(\$metadata)) {
            throw new RuntimeCommandException(sprintf('No entities were found in the \"%s\" namespace.', \$classOrNamespace));
        }

        /** @var ClassSourceManipulator[] \$operations */
        \$operations = [];
        foreach (\$metadata as \$classMetadata) {
            if (!class_exists(\$classMetadata->name)) {
                // the class needs to be generated for the first time!
                \$classPath = \$this->generateClass(\$classMetadata);
            } else {
                \$classPath = \$this->getPathOfClass(\$classMetadata->name);
            }

            \$mappedFields = \$this->getMappedFieldsInEntity(\$classMetadata);

            if (\$classMetadata->customRepositoryClassName) {
                \$this->generateRepository(\$classMetadata);
            }

            \$manipulator = \$this->createClassManipulator(\$classPath);
            \$operations[\$classPath] = \$manipulator;

            \$embeddedClasses = [];

            foreach (\$classMetadata->embeddedClasses as \$fieldName => \$mapping) {
                if (false !== strpos(\$fieldName, '.')) {
                    continue;
                }

                \$className = \$mapping['class'];

                \$embeddedClasses[\$fieldName] = \$this->getPathOfClass(\$className);

                \$operations[\$embeddedClasses[\$fieldName]] = \$this->createClassManipulator(\$embeddedClasses[\$fieldName]);

                \$manipulator->addEmbeddedEntity(\$fieldName, \$className);
            }

            foreach (\$classMetadata->fieldMappings as \$fieldName => \$mapping) {
                // skip embedded fields
                if (false !== strpos(\$fieldName, '.')) {
                    list(\$fieldName, \$embeddedFiledName) = explode('.', \$fieldName);

                    \$operations[\$embeddedClasses[\$fieldName]]->addEntityField(\$embeddedFiledName, \$mapping);

                    continue;
                }

                if (!\\in_array(\$fieldName, \$mappedFields)) {
                    continue;
                }

                \$manipulator->addEntityField(\$fieldName, \$mapping);
            }

            \$getIsNullable = function (array \$mapping) {
                if (!isset(\$mapping['joinColumns'][0]['nullable'])) {
                    // the default for relationships IS nullable
                    return true;
                }

                return \$mapping['joinColumns'][0]['nullable'];
            };

            foreach (\$classMetadata->associationMappings as \$fieldName => \$mapping) {
                if (!\\in_array(\$fieldName, \$mappedFields)) {
                    continue;
                }

                switch (\$mapping['type']) {
                    case ClassMetadata::MANY_TO_ONE:
                        \$relation = (new RelationManyToOne())
                            ->setPropertyName(\$mapping['fieldName'])
                            ->setIsNullable(\$getIsNullable(\$mapping))
                            ->setTargetClassName(\$mapping['targetEntity'])
                            ->setTargetPropertyName(\$mapping['inversedBy'])
                            ->setMapInverseRelation(null !== \$mapping['inversedBy'])
                        ;

                        \$manipulator->addManyToOneRelation(\$relation);

                        break;
                    case ClassMetadata::ONE_TO_MANY:
                        \$relation = (new RelationOneToMany())
                            ->setPropertyName(\$mapping['fieldName'])
                            ->setTargetClassName(\$mapping['targetEntity'])
                            ->setTargetPropertyName(\$mapping['mappedBy'])
                            ->setOrphanRemoval(\$mapping['orphanRemoval'])
                        ;

                        \$manipulator->addOneToManyRelation(\$relation);

                        break;
                    case ClassMetadata::MANY_TO_MANY:
                        \$relation = (new RelationManyToMany())
                            ->setPropertyName(\$mapping['fieldName'])
                            ->setTargetClassName(\$mapping['targetEntity'])
                            ->setTargetPropertyName(\$mapping['mappedBy'])
                            ->setIsOwning(\$mapping['isOwningSide'])
                            ->setMapInverseRelation(\$mapping['isOwningSide'] ? (null !== \$mapping['inversedBy']) : true)
                        ;

                        \$manipulator->addManyToManyRelation(\$relation);

                        break;
                    case ClassMetadata::ONE_TO_ONE:
                        \$relation = (new RelationOneToOne())
                            ->setPropertyName(\$mapping['fieldName'])
                            ->setTargetClassName(\$mapping['targetEntity'])
                            ->setTargetPropertyName(\$mapping['isOwningSide'] ? \$mapping['inversedBy'] : \$mapping['mappedBy'])
                            ->setIsOwning(\$mapping['isOwningSide'])
                            ->setMapInverseRelation(\$mapping['isOwningSide'] ? (null !== \$mapping['inversedBy']) : true)
                            ->setIsNullable(\$getIsNullable(\$mapping))
                        ;

                        \$manipulator->addOneToOneRelation(\$relation);

                        break;
                    default:
                        throw new \\Exception('Unknown association type.');
                }
            }
        }

        foreach (\$operations as \$filename => \$manipulator) {
            \$this->fileManager->dumpFile(
                \$filename,
                \$manipulator->getSourceCode()
            );
        }
    }

    private function generateClass(ClassMetadata \$metadata): string
    {
        \$path = \$this->generator->generateClass(
            \$metadata->name,
            'Class.tpl.php',
            []
        );
        \$this->generator->writeChanges();

        return \$path;
    }

    private function createClassManipulator(string \$classPath): ClassSourceManipulator
    {
        return new ClassSourceManipulator(
            \$this->fileManager->getFileContents(\$classPath),
            \$this->overwrite,
            // use annotations
            // if properties need to be generated then, by definition,
            // some non-annotation config is being used, and so, the
            // properties should not have annotations added to them
            false
        );
    }

    private function getPathOfClass(string \$class): string
    {
        return (new \\ReflectionClass(\$class))->getFileName();
    }

    private function generateRepository(ClassMetadata \$metadata)
    {
        if (!\$metadata->customRepositoryClassName) {
            return;
        }

        if (class_exists(\$metadata->customRepositoryClassName)) {
            // repository already exists
            return;
        }

        // duplication in MakeEntity
        \$entityClassName = Str::getShortClassName(\$metadata->name);

        \$this->generator->generateClass(
            \$metadata->customRepositoryClassName,
            'doctrine/Repository.tpl.php',
            [
                'entity_full_class_name' => \$metadata->name,
                'entity_class_name' => \$entityClassName,
                'entity_alias' => strtolower(\$entityClassName[0]),
                'with_password_upgrade' => false,
            ]
        );

        \$this->generator->writeChanges();
    }

    private function getMappedFieldsInEntity(ClassMetadata \$classMetadata)
    {
        /* @var \$classReflection \\ReflectionClass */
        \$classReflection = \$classMetadata->reflClass;

        \$targetFields = array_merge(
            array_keys(\$classMetadata->fieldMappings),
            array_keys(\$classMetadata->associationMappings)
        );

        if (\$classReflection) {
            // exclude traits
            \$traitProperties = [];

            foreach (\$classReflection->getTraits() as \$trait) {
                foreach (\$trait->getProperties() as \$property) {
                    \$traitProperties[] = \$property->getName();
                }
            }

            \$targetFields = array_diff(\$targetFields, \$traitProperties);

            // exclude inherited properties
            \$targetFields = array_filter(\$targetFields, function (\$field) use (\$classReflection) {
                return \$classReflection->hasProperty(\$field) &&
                    \$classReflection->getProperty(\$field)->getDeclaringClass()->getName() == \$classReflection->getName();
            });
        }

        return \$targetFields;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/maker-bundle/src/Doctrine/EntityRegenerator.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bundle\\MakerBundle\\Doctrine;

use Doctrine\\Common\\Persistence\\Mapping\\MappingException as CommonMappingException;
use Doctrine\\ORM\\Mapping\\ClassMetadata;
use Doctrine\\ORM\\Mapping\\MappingException;
use Symfony\\Bundle\\MakerBundle\\Exception\\RuntimeCommandException;
use Symfony\\Bundle\\MakerBundle\\FileManager;
use Symfony\\Bundle\\MakerBundle\\Generator;
use Symfony\\Bundle\\MakerBundle\\Str;
use Symfony\\Bundle\\MakerBundle\\Util\\ClassSourceManipulator;

/**
 * @internal
 */
final class EntityRegenerator
{
    private \$doctrineHelper;
    private \$fileManager;
    private \$generator;
    private \$overwrite;

    public function __construct(DoctrineHelper \$doctrineHelper, FileManager \$fileManager, Generator \$generator, bool \$overwrite)
    {
        \$this->doctrineHelper = \$doctrineHelper;
        \$this->fileManager = \$fileManager;
        \$this->generator = \$generator;
        \$this->overwrite = \$overwrite;
    }

    public function regenerateEntities(string \$classOrNamespace)
    {
        try {
            \$metadata = \$this->doctrineHelper->getMetadata(\$classOrNamespace);
        } catch (MappingException | CommonMappingException \$mappingException) {
            \$metadata = \$this->doctrineHelper->getMetadata(\$classOrNamespace, true);
        }

        if (\$metadata instanceof ClassMetadata) {
            \$metadata = [\$metadata];
        } elseif (class_exists(\$classOrNamespace)) {
            throw new RuntimeCommandException(sprintf('Could not find Doctrine metadata for \"%s\". Is it mapped as an entity?', \$classOrNamespace));
        } elseif (empty(\$metadata)) {
            throw new RuntimeCommandException(sprintf('No entities were found in the \"%s\" namespace.', \$classOrNamespace));
        }

        /** @var ClassSourceManipulator[] \$operations */
        \$operations = [];
        foreach (\$metadata as \$classMetadata) {
            if (!class_exists(\$classMetadata->name)) {
                // the class needs to be generated for the first time!
                \$classPath = \$this->generateClass(\$classMetadata);
            } else {
                \$classPath = \$this->getPathOfClass(\$classMetadata->name);
            }

            \$mappedFields = \$this->getMappedFieldsInEntity(\$classMetadata);

            if (\$classMetadata->customRepositoryClassName) {
                \$this->generateRepository(\$classMetadata);
            }

            \$manipulator = \$this->createClassManipulator(\$classPath);
            \$operations[\$classPath] = \$manipulator;

            \$embeddedClasses = [];

            foreach (\$classMetadata->embeddedClasses as \$fieldName => \$mapping) {
                if (false !== strpos(\$fieldName, '.')) {
                    continue;
                }

                \$className = \$mapping['class'];

                \$embeddedClasses[\$fieldName] = \$this->getPathOfClass(\$className);

                \$operations[\$embeddedClasses[\$fieldName]] = \$this->createClassManipulator(\$embeddedClasses[\$fieldName]);

                \$manipulator->addEmbeddedEntity(\$fieldName, \$className);
            }

            foreach (\$classMetadata->fieldMappings as \$fieldName => \$mapping) {
                // skip embedded fields
                if (false !== strpos(\$fieldName, '.')) {
                    list(\$fieldName, \$embeddedFiledName) = explode('.', \$fieldName);

                    \$operations[\$embeddedClasses[\$fieldName]]->addEntityField(\$embeddedFiledName, \$mapping);

                    continue;
                }

                if (!\\in_array(\$fieldName, \$mappedFields)) {
                    continue;
                }

                \$manipulator->addEntityField(\$fieldName, \$mapping);
            }

            \$getIsNullable = function (array \$mapping) {
                if (!isset(\$mapping['joinColumns'][0]['nullable'])) {
                    // the default for relationships IS nullable
                    return true;
                }

                return \$mapping['joinColumns'][0]['nullable'];
            };

            foreach (\$classMetadata->associationMappings as \$fieldName => \$mapping) {
                if (!\\in_array(\$fieldName, \$mappedFields)) {
                    continue;
                }

                switch (\$mapping['type']) {
                    case ClassMetadata::MANY_TO_ONE:
                        \$relation = (new RelationManyToOne())
                            ->setPropertyName(\$mapping['fieldName'])
                            ->setIsNullable(\$getIsNullable(\$mapping))
                            ->setTargetClassName(\$mapping['targetEntity'])
                            ->setTargetPropertyName(\$mapping['inversedBy'])
                            ->setMapInverseRelation(null !== \$mapping['inversedBy'])
                        ;

                        \$manipulator->addManyToOneRelation(\$relation);

                        break;
                    case ClassMetadata::ONE_TO_MANY:
                        \$relation = (new RelationOneToMany())
                            ->setPropertyName(\$mapping['fieldName'])
                            ->setTargetClassName(\$mapping['targetEntity'])
                            ->setTargetPropertyName(\$mapping['mappedBy'])
                            ->setOrphanRemoval(\$mapping['orphanRemoval'])
                        ;

                        \$manipulator->addOneToManyRelation(\$relation);

                        break;
                    case ClassMetadata::MANY_TO_MANY:
                        \$relation = (new RelationManyToMany())
                            ->setPropertyName(\$mapping['fieldName'])
                            ->setTargetClassName(\$mapping['targetEntity'])
                            ->setTargetPropertyName(\$mapping['mappedBy'])
                            ->setIsOwning(\$mapping['isOwningSide'])
                            ->setMapInverseRelation(\$mapping['isOwningSide'] ? (null !== \$mapping['inversedBy']) : true)
                        ;

                        \$manipulator->addManyToManyRelation(\$relation);

                        break;
                    case ClassMetadata::ONE_TO_ONE:
                        \$relation = (new RelationOneToOne())
                            ->setPropertyName(\$mapping['fieldName'])
                            ->setTargetClassName(\$mapping['targetEntity'])
                            ->setTargetPropertyName(\$mapping['isOwningSide'] ? \$mapping['inversedBy'] : \$mapping['mappedBy'])
                            ->setIsOwning(\$mapping['isOwningSide'])
                            ->setMapInverseRelation(\$mapping['isOwningSide'] ? (null !== \$mapping['inversedBy']) : true)
                            ->setIsNullable(\$getIsNullable(\$mapping))
                        ;

                        \$manipulator->addOneToOneRelation(\$relation);

                        break;
                    default:
                        throw new \\Exception('Unknown association type.');
                }
            }
        }

        foreach (\$operations as \$filename => \$manipulator) {
            \$this->fileManager->dumpFile(
                \$filename,
                \$manipulator->getSourceCode()
            );
        }
    }

    private function generateClass(ClassMetadata \$metadata): string
    {
        \$path = \$this->generator->generateClass(
            \$metadata->name,
            'Class.tpl.php',
            []
        );
        \$this->generator->writeChanges();

        return \$path;
    }

    private function createClassManipulator(string \$classPath): ClassSourceManipulator
    {
        return new ClassSourceManipulator(
            \$this->fileManager->getFileContents(\$classPath),
            \$this->overwrite,
            // use annotations
            // if properties need to be generated then, by definition,
            // some non-annotation config is being used, and so, the
            // properties should not have annotations added to them
            false
        );
    }

    private function getPathOfClass(string \$class): string
    {
        return (new \\ReflectionClass(\$class))->getFileName();
    }

    private function generateRepository(ClassMetadata \$metadata)
    {
        if (!\$metadata->customRepositoryClassName) {
            return;
        }

        if (class_exists(\$metadata->customRepositoryClassName)) {
            // repository already exists
            return;
        }

        // duplication in MakeEntity
        \$entityClassName = Str::getShortClassName(\$metadata->name);

        \$this->generator->generateClass(
            \$metadata->customRepositoryClassName,
            'doctrine/Repository.tpl.php',
            [
                'entity_full_class_name' => \$metadata->name,
                'entity_class_name' => \$entityClassName,
                'entity_alias' => strtolower(\$entityClassName[0]),
                'with_password_upgrade' => false,
            ]
        );

        \$this->generator->writeChanges();
    }

    private function getMappedFieldsInEntity(ClassMetadata \$classMetadata)
    {
        /* @var \$classReflection \\ReflectionClass */
        \$classReflection = \$classMetadata->reflClass;

        \$targetFields = array_merge(
            array_keys(\$classMetadata->fieldMappings),
            array_keys(\$classMetadata->associationMappings)
        );

        if (\$classReflection) {
            // exclude traits
            \$traitProperties = [];

            foreach (\$classReflection->getTraits() as \$trait) {
                foreach (\$trait->getProperties() as \$property) {
                    \$traitProperties[] = \$property->getName();
                }
            }

            \$targetFields = array_diff(\$targetFields, \$traitProperties);

            // exclude inherited properties
            \$targetFields = array_filter(\$targetFields, function (\$field) use (\$classReflection) {
                return \$classReflection->hasProperty(\$field) &&
                    \$classReflection->getProperty(\$field)->getDeclaringClass()->getName() == \$classReflection->getName();
            });
        }

        return \$targetFields;
    }
}
", "vendor/symfony/maker-bundle/src/Doctrine/EntityRegenerator.php", "/var/www/public/DevLaon/templates/vendor/symfony/maker-bundle/src/Doctrine/EntityRegenerator.php");
    }
}
