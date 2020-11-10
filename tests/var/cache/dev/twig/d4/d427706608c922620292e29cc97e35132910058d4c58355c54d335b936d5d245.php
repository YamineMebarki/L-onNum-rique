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

/* vendor/symfony/doctrine-bridge/Validator/Constraints/UniqueEntityValidator.php */
class __TwigTemplate_ead113b8e8ad36c8a42b69ef073eae0c15cd14f0fb6f2091b3f9f9329dacbdb4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Validator/Constraints/UniqueEntityValidator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Validator/Constraints/UniqueEntityValidator.php"));

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

namespace Symfony\\Bridge\\Doctrine\\Validator\\Constraints;

use Doctrine\\Common\\Persistence\\ManagerRegistry;
use Doctrine\\Common\\Persistence\\Mapping\\ClassMetadata;
use Doctrine\\Common\\Persistence\\ObjectManager;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\ConstraintValidator;
use Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException;
use Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException;

/**
 * Unique Entity Validator checks if one or a set of fields contain unique values.
 *
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 */
class UniqueEntityValidator extends ConstraintValidator
{
    private \$registry;

    public function __construct(ManagerRegistry \$registry)
    {
        \$this->registry = \$registry;
    }

    /**
     * @param object \$entity
     *
     * @throws UnexpectedTypeException
     * @throws ConstraintDefinitionException
     */
    public function validate(\$entity, Constraint \$constraint)
    {
        if (!\$constraint instanceof UniqueEntity) {
            throw new UnexpectedTypeException(\$constraint, __NAMESPACE__.'\\UniqueEntity');
        }

        if (!\\is_array(\$constraint->fields) && !\\is_string(\$constraint->fields)) {
            throw new UnexpectedTypeException(\$constraint->fields, 'array');
        }

        if (null !== \$constraint->errorPath && !\\is_string(\$constraint->errorPath)) {
            throw new UnexpectedTypeException(\$constraint->errorPath, 'string or null');
        }

        \$fields = (array) \$constraint->fields;

        if (0 === \\count(\$fields)) {
            throw new ConstraintDefinitionException('At least one field has to be specified.');
        }

        if (null === \$entity) {
            return;
        }

        if (\$constraint->em) {
            \$em = \$this->registry->getManager(\$constraint->em);

            if (!\$em) {
                throw new ConstraintDefinitionException(sprintf('Object manager \"%s\" does not exist.', \$constraint->em));
            }
        } else {
            \$em = \$this->registry->getManagerForClass(\\get_class(\$entity));

            if (!\$em) {
                throw new ConstraintDefinitionException(sprintf('Unable to find the object manager associated with an entity of class \"%s\".', \\get_class(\$entity)));
            }
        }

        \$class = \$em->getClassMetadata(\\get_class(\$entity));
        /* @var \$class \\Doctrine\\Common\\Persistence\\Mapping\\ClassMetadata */

        \$criteria = [];
        \$hasNullValue = false;

        foreach (\$fields as \$fieldName) {
            if (!\$class->hasField(\$fieldName) && !\$class->hasAssociation(\$fieldName)) {
                throw new ConstraintDefinitionException(sprintf('The field \"%s\" is not mapped by Doctrine, so it cannot be validated for uniqueness.', \$fieldName));
            }

            \$fieldValue = \$class->reflFields[\$fieldName]->getValue(\$entity);

            if (null === \$fieldValue) {
                \$hasNullValue = true;
            }

            if (\$constraint->ignoreNull && null === \$fieldValue) {
                continue;
            }

            \$criteria[\$fieldName] = \$fieldValue;

            if (null !== \$criteria[\$fieldName] && \$class->hasAssociation(\$fieldName)) {
                /* Ensure the Proxy is initialized before using reflection to
                 * read its identifiers. This is necessary because the wrapped
                 * getter methods in the Proxy are being bypassed.
                 */
                \$em->initializeObject(\$criteria[\$fieldName]);
            }
        }

        // validation doesn't fail if one of the fields is null and if null values should be ignored
        if (\$hasNullValue && \$constraint->ignoreNull) {
            return;
        }

        // skip validation if there are no criteria (this can happen when the
        // \"ignoreNull\" option is enabled and fields to be checked are null
        if (empty(\$criteria)) {
            return;
        }

        if (null !== \$constraint->entityClass) {
            /* Retrieve repository from given entity name.
             * We ensure the retrieved repository can handle the entity
             * by checking the entity is the same, or subclass of the supported entity.
             */
            \$repository = \$em->getRepository(\$constraint->entityClass);
            \$supportedClass = \$repository->getClassName();

            if (!\$entity instanceof \$supportedClass) {
                throw new ConstraintDefinitionException(sprintf('The \"%s\" entity repository does not support the \"%s\" entity. The entity should be an instance of or extend \"%s\".', \$constraint->entityClass, \$class->getName(), \$supportedClass));
            }
        } else {
            \$repository = \$em->getRepository(\\get_class(\$entity));
        }

        \$result = \$repository->{\$constraint->repositoryMethod}(\$criteria);

        if (\$result instanceof \\IteratorAggregate) {
            \$result = \$result->getIterator();
        }

        /* If the result is a MongoCursor, it must be advanced to the first
         * element. Rewinding should have no ill effect if \$result is another
         * iterator implementation.
         */
        if (\$result instanceof \\Iterator) {
            \$result->rewind();
            if (\$result instanceof \\Countable && 1 < \\count(\$result)) {
                \$result = [\$result->current(), \$result->current()];
            } else {
                \$result = \$result->current();
                \$result = null === \$result ? [] : [\$result];
            }
        } elseif (\\is_array(\$result)) {
            reset(\$result);
        } else {
            \$result = null === \$result ? [] : [\$result];
        }

        /* If no entity matched the query criteria or a single entity matched,
         * which is the same as the entity being validated, the criteria is
         * unique.
         */
        if (!\$result || (1 === \\count(\$result) && current(\$result) === \$entity)) {
            return;
        }

        \$errorPath = null !== \$constraint->errorPath ? \$constraint->errorPath : \$fields[0];
        \$invalidValue = isset(\$criteria[\$errorPath]) ? \$criteria[\$errorPath] : \$criteria[\$fields[0]];

        \$this->context->buildViolation(\$constraint->message)
            ->atPath(\$errorPath)
            ->setParameter('";
        // line 175
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 175, $this->source); })()), "html", null, true);
        echo "', \$this->formatWithIdentifiers(\$em, \$class, \$invalidValue))
            ->setInvalidValue(\$invalidValue)
            ->setCode(UniqueEntity::NOT_UNIQUE_ERROR)
            ->setCause(\$result)
            ->addViolation();
    }

    private function formatWithIdentifiers(ObjectManager \$em, ClassMetadata \$class, \$value)
    {
        if (!\\is_object(\$value) || \$value instanceof \\DateTimeInterface) {
            return \$this->formatValue(\$value, self::PRETTY_DATE);
        }

        if (method_exists(\$value, '__toString')) {
            return (string) \$value;
        }

        if (\$class->getName() !== \$idClass = \\get_class(\$value)) {
            // non unique value might be a composite PK that consists of other entity objects
            if (\$em->getMetadataFactory()->hasMetadataFor(\$idClass)) {
                \$identifiers = \$em->getClassMetadata(\$idClass)->getIdentifierValues(\$value);
            } else {
                // this case might happen if the non unique column has a custom doctrine type and its value is an object
                // in which case we cannot get any identifiers for it
                \$identifiers = [];
            }
        } else {
            \$identifiers = \$class->getIdentifierValues(\$value);
        }

        if (!\$identifiers) {
            return sprintf('object(\"%s\")', \$idClass);
        }

        array_walk(\$identifiers, function (&\$id, \$field) {
            if (!\\is_object(\$id) || \$id instanceof \\DateTimeInterface) {
                \$idAsString = \$this->formatValue(\$id, self::PRETTY_DATE);
            } else {
                \$idAsString = sprintf('object(\"%s\")', \\get_class(\$id));
            }

            \$id = sprintf('%s => %s', \$field, \$idAsString);
        });

        return sprintf('object(\"%s\") identified by (%s)', \$idClass, implode(', ', \$identifiers));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/doctrine-bridge/Validator/Constraints/UniqueEntityValidator.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 175,  43 => 1,);
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

namespace Symfony\\Bridge\\Doctrine\\Validator\\Constraints;

use Doctrine\\Common\\Persistence\\ManagerRegistry;
use Doctrine\\Common\\Persistence\\Mapping\\ClassMetadata;
use Doctrine\\Common\\Persistence\\ObjectManager;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\ConstraintValidator;
use Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException;
use Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException;

/**
 * Unique Entity Validator checks if one or a set of fields contain unique values.
 *
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 */
class UniqueEntityValidator extends ConstraintValidator
{
    private \$registry;

    public function __construct(ManagerRegistry \$registry)
    {
        \$this->registry = \$registry;
    }

    /**
     * @param object \$entity
     *
     * @throws UnexpectedTypeException
     * @throws ConstraintDefinitionException
     */
    public function validate(\$entity, Constraint \$constraint)
    {
        if (!\$constraint instanceof UniqueEntity) {
            throw new UnexpectedTypeException(\$constraint, __NAMESPACE__.'\\UniqueEntity');
        }

        if (!\\is_array(\$constraint->fields) && !\\is_string(\$constraint->fields)) {
            throw new UnexpectedTypeException(\$constraint->fields, 'array');
        }

        if (null !== \$constraint->errorPath && !\\is_string(\$constraint->errorPath)) {
            throw new UnexpectedTypeException(\$constraint->errorPath, 'string or null');
        }

        \$fields = (array) \$constraint->fields;

        if (0 === \\count(\$fields)) {
            throw new ConstraintDefinitionException('At least one field has to be specified.');
        }

        if (null === \$entity) {
            return;
        }

        if (\$constraint->em) {
            \$em = \$this->registry->getManager(\$constraint->em);

            if (!\$em) {
                throw new ConstraintDefinitionException(sprintf('Object manager \"%s\" does not exist.', \$constraint->em));
            }
        } else {
            \$em = \$this->registry->getManagerForClass(\\get_class(\$entity));

            if (!\$em) {
                throw new ConstraintDefinitionException(sprintf('Unable to find the object manager associated with an entity of class \"%s\".', \\get_class(\$entity)));
            }
        }

        \$class = \$em->getClassMetadata(\\get_class(\$entity));
        /* @var \$class \\Doctrine\\Common\\Persistence\\Mapping\\ClassMetadata */

        \$criteria = [];
        \$hasNullValue = false;

        foreach (\$fields as \$fieldName) {
            if (!\$class->hasField(\$fieldName) && !\$class->hasAssociation(\$fieldName)) {
                throw new ConstraintDefinitionException(sprintf('The field \"%s\" is not mapped by Doctrine, so it cannot be validated for uniqueness.', \$fieldName));
            }

            \$fieldValue = \$class->reflFields[\$fieldName]->getValue(\$entity);

            if (null === \$fieldValue) {
                \$hasNullValue = true;
            }

            if (\$constraint->ignoreNull && null === \$fieldValue) {
                continue;
            }

            \$criteria[\$fieldName] = \$fieldValue;

            if (null !== \$criteria[\$fieldName] && \$class->hasAssociation(\$fieldName)) {
                /* Ensure the Proxy is initialized before using reflection to
                 * read its identifiers. This is necessary because the wrapped
                 * getter methods in the Proxy are being bypassed.
                 */
                \$em->initializeObject(\$criteria[\$fieldName]);
            }
        }

        // validation doesn't fail if one of the fields is null and if null values should be ignored
        if (\$hasNullValue && \$constraint->ignoreNull) {
            return;
        }

        // skip validation if there are no criteria (this can happen when the
        // \"ignoreNull\" option is enabled and fields to be checked are null
        if (empty(\$criteria)) {
            return;
        }

        if (null !== \$constraint->entityClass) {
            /* Retrieve repository from given entity name.
             * We ensure the retrieved repository can handle the entity
             * by checking the entity is the same, or subclass of the supported entity.
             */
            \$repository = \$em->getRepository(\$constraint->entityClass);
            \$supportedClass = \$repository->getClassName();

            if (!\$entity instanceof \$supportedClass) {
                throw new ConstraintDefinitionException(sprintf('The \"%s\" entity repository does not support the \"%s\" entity. The entity should be an instance of or extend \"%s\".', \$constraint->entityClass, \$class->getName(), \$supportedClass));
            }
        } else {
            \$repository = \$em->getRepository(\\get_class(\$entity));
        }

        \$result = \$repository->{\$constraint->repositoryMethod}(\$criteria);

        if (\$result instanceof \\IteratorAggregate) {
            \$result = \$result->getIterator();
        }

        /* If the result is a MongoCursor, it must be advanced to the first
         * element. Rewinding should have no ill effect if \$result is another
         * iterator implementation.
         */
        if (\$result instanceof \\Iterator) {
            \$result->rewind();
            if (\$result instanceof \\Countable && 1 < \\count(\$result)) {
                \$result = [\$result->current(), \$result->current()];
            } else {
                \$result = \$result->current();
                \$result = null === \$result ? [] : [\$result];
            }
        } elseif (\\is_array(\$result)) {
            reset(\$result);
        } else {
            \$result = null === \$result ? [] : [\$result];
        }

        /* If no entity matched the query criteria or a single entity matched,
         * which is the same as the entity being validated, the criteria is
         * unique.
         */
        if (!\$result || (1 === \\count(\$result) && current(\$result) === \$entity)) {
            return;
        }

        \$errorPath = null !== \$constraint->errorPath ? \$constraint->errorPath : \$fields[0];
        \$invalidValue = isset(\$criteria[\$errorPath]) ? \$criteria[\$errorPath] : \$criteria[\$fields[0]];

        \$this->context->buildViolation(\$constraint->message)
            ->atPath(\$errorPath)
            ->setParameter('{{ value }}', \$this->formatWithIdentifiers(\$em, \$class, \$invalidValue))
            ->setInvalidValue(\$invalidValue)
            ->setCode(UniqueEntity::NOT_UNIQUE_ERROR)
            ->setCause(\$result)
            ->addViolation();
    }

    private function formatWithIdentifiers(ObjectManager \$em, ClassMetadata \$class, \$value)
    {
        if (!\\is_object(\$value) || \$value instanceof \\DateTimeInterface) {
            return \$this->formatValue(\$value, self::PRETTY_DATE);
        }

        if (method_exists(\$value, '__toString')) {
            return (string) \$value;
        }

        if (\$class->getName() !== \$idClass = \\get_class(\$value)) {
            // non unique value might be a composite PK that consists of other entity objects
            if (\$em->getMetadataFactory()->hasMetadataFor(\$idClass)) {
                \$identifiers = \$em->getClassMetadata(\$idClass)->getIdentifierValues(\$value);
            } else {
                // this case might happen if the non unique column has a custom doctrine type and its value is an object
                // in which case we cannot get any identifiers for it
                \$identifiers = [];
            }
        } else {
            \$identifiers = \$class->getIdentifierValues(\$value);
        }

        if (!\$identifiers) {
            return sprintf('object(\"%s\")', \$idClass);
        }

        array_walk(\$identifiers, function (&\$id, \$field) {
            if (!\\is_object(\$id) || \$id instanceof \\DateTimeInterface) {
                \$idAsString = \$this->formatValue(\$id, self::PRETTY_DATE);
            } else {
                \$idAsString = sprintf('object(\"%s\")', \\get_class(\$id));
            }

            \$id = sprintf('%s => %s', \$field, \$idAsString);
        });

        return sprintf('object(\"%s\") identified by (%s)', \$idClass, implode(', ', \$identifiers));
    }
}
", "vendor/symfony/doctrine-bridge/Validator/Constraints/UniqueEntityValidator.php", "/var/www/public/DevLaon/templates/vendor/symfony/doctrine-bridge/Validator/Constraints/UniqueEntityValidator.php");
    }
}
