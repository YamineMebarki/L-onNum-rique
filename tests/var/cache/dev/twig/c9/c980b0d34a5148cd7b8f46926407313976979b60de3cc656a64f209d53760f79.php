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

/* vendor/doctrine/orm/lib/Doctrine/ORM/ORMInvalidArgumentException.php */
class __TwigTemplate_ff5a06df80b6eab9dfa26c4713fe2b2922dc25278d6af817da6e8da2edc23a95 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/ORMInvalidArgumentException.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/ORMInvalidArgumentException.php"));

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

namespace Doctrine\\ORM;
use Doctrine\\ORM\\Mapping\\ClassMetadata;

/**
 * Contains exception messages for all invalid lifecycle state exceptions inside UnitOfWork
 *
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 */
class ORMInvalidArgumentException extends \\InvalidArgumentException
{
    /**
     * @param object \$entity
     *
     * @return ORMInvalidArgumentException
     */
    static public function scheduleInsertForManagedEntity(\$entity)
    {
        return new self(\"A managed+dirty entity \" . self::objToStr(\$entity) . \" can not be scheduled for insertion.\");
    }

    /**
     * @param object \$entity
     *
     * @return ORMInvalidArgumentException
     */
    static public function scheduleInsertForRemovedEntity(\$entity)
    {
        return new self(\"Removed entity \" . self::objToStr(\$entity) . \" can not be scheduled for insertion.\");
    }

    /**
     * @param object \$entity
     *
     * @return ORMInvalidArgumentException
     */
    static public function scheduleInsertTwice(\$entity)
    {
        return new self(\"Entity \" . self::objToStr(\$entity) . \" can not be scheduled for insertion twice.\");
    }

    /**
     * @param string \$className
     * @param object \$entity
     *
     * @return ORMInvalidArgumentException
     */
    static public function entityWithoutIdentity(\$className, \$entity)
    {
        return new self(
            \"The given entity of type '\" . \$className . \"' (\".self::objToStr(\$entity).\") has no identity/no \" .
            \"id values set. It cannot be added to the identity map.\"
        );
    }

    /**
     * @param object \$entity
     *
     * @return ORMInvalidArgumentException
     */
    static public function readOnlyRequiresManagedEntity(\$entity)
    {
        return new self(\"Only managed entities can be marked or checked as read only. But \" . self::objToStr(\$entity) . \" is not\");
    }

    /**
     * @param array[][]|object[][] \$newEntitiesWithAssociations non-empty an array
 *                                                              of [array \$associationMapping, object \$entity] pairs
     *
     * @return ORMInvalidArgumentException
     */
    static public function newEntitiesFoundThroughRelationships(\$newEntitiesWithAssociations)
    {
        \$errorMessages = array_map(
            function (array \$newEntityWithAssociation) : string {
                [\$associationMapping, \$entity] = \$newEntityWithAssociation;

                return self::newEntityFoundThroughRelationshipMessage(\$associationMapping, \$entity);
            },
            \$newEntitiesWithAssociations
        );

        if (1 === count(\$errorMessages)) {
            return new self(reset(\$errorMessages));
        }

        return new self(
            'Multiple non-persisted new entities were found through the given association graph:'
            . \"\\n\\n * \"
            . implode(\"\\n * \", \$errorMessages)
        );
    }

    /**
     * @param array  \$associationMapping
     * @param object \$entry
     *
     * @return ORMInvalidArgumentException
     */
    static public function newEntityFoundThroughRelationship(array \$associationMapping, \$entry)
    {
        return new self(self::newEntityFoundThroughRelationshipMessage(\$associationMapping, \$entry));
    }

    /**
     * @param array  \$assoc
     * @param object \$entry
     *
     * @return ORMInvalidArgumentException
     */
    static public function detachedEntityFoundThroughRelationship(array \$assoc, \$entry)
    {
        return new self(\"A detached entity of type \" . \$assoc['targetEntity'] . \" (\" . self::objToStr(\$entry) . \") \"
            . \" was found through the relationship '\" . \$assoc['sourceEntity'] . \"#\" . \$assoc['fieldName'] . \"' \"
            . \"during cascading a persist operation.\");
    }

    /**
     * @param object \$entity
     *
     * @return ORMInvalidArgumentException
     */
    static public function entityNotManaged(\$entity)
    {
        return new self(\"Entity \" . self::objToStr(\$entity) . \" is not managed. An entity is managed if its fetched \" .
            \"from the database or registered as new through EntityManager#persist\");
    }

    /**
     * @param object \$entity
     * @param string \$operation
     *
     * @return ORMInvalidArgumentException
     */
    static public function entityHasNoIdentity(\$entity, \$operation)
    {
        return new self(\"Entity has no identity, therefore \" . \$operation .\" cannot be performed. \" . self::objToStr(\$entity));
    }

    /**
     * @param object \$entity
     * @param string \$operation
     *
     * @return ORMInvalidArgumentException
     */
    static public function entityIsRemoved(\$entity, \$operation)
    {
        return new self(\"Entity is removed, therefore \" . \$operation .\" cannot be performed. \" . self::objToStr(\$entity));
    }

    /**
     * @param object \$entity
     * @param string \$operation
     *
     * @return ORMInvalidArgumentException
     */
    static public function detachedEntityCannot(\$entity, \$operation)
    {
        return new self(\"Detached entity \" . self::objToStr(\$entity) . \" cannot be \" . \$operation);
    }

    /**
     * @param string \$context
     * @param mixed  \$given
     * @param int    \$parameterIndex
     *
     * @return ORMInvalidArgumentException
     */
    public static function invalidObject(\$context, \$given, \$parameterIndex = 1)
    {
        return new self(\$context . ' expects parameter ' . \$parameterIndex .
            ' to be an entity object, '. gettype(\$given) . ' given.');
    }

    /**
     * @return ORMInvalidArgumentException
     */
    public static function invalidCompositeIdentifier()
    {
        return new self(\"Binding an entity with a composite primary key to a query is not supported. \" .
            \"You should split the parameter into the explicit fields and bind them separately.\");
    }

    /**
     * @return ORMInvalidArgumentException
     */
    public static function invalidIdentifierBindingEntity()
    {
        return new self(\"Binding entities to query parameters only allowed for entities that have an identifier.\");
    }

    /**
     * @param ClassMetadata \$targetClass
     * @param array         \$assoc
     * @param mixed         \$actualValue
     *
     * @return self
     */
    public static function invalidAssociation(ClassMetadata \$targetClass, \$assoc, \$actualValue)
    {
        \$expectedType = \$targetClass->getName();

        return new self(sprintf(
            'Expected value of type \"%s\" for association field \"%s#\$%s\", got \"%s\" instead.',
            \$expectedType,
            \$assoc['sourceEntity'],
            \$assoc['fieldName'],
            is_object(\$actualValue) ? get_class(\$actualValue) : gettype(\$actualValue)
        ));
    }

    /**
     * Used when a given entityName hasn't the good type
     *
     * @param mixed \$entityName The given entity (which shouldn't be a string)
     *
     * @return self
     */
    public static function invalidEntityName(\$entityName)
    {
        return new self(sprintf('Entity name must be a string, %s given', gettype(\$entityName)));
    }

    /**
     * Helper method to show an object as string.
     *
     * @param object \$obj
     *
     * @return string
     */
    private static function objToStr(\$obj) : string
    {
        return method_exists(\$obj, '__toString') ? (string) \$obj : get_class(\$obj).'@'.spl_object_hash(\$obj);
    }

    /**
     * @param array  \$associationMapping
     * @param object \$entity
     */
    private static function newEntityFoundThroughRelationshipMessage(array \$associationMapping, \$entity) : string
    {
        return 'A new entity was found through the relationship \\''
            . \$associationMapping['sourceEntity'] . '#' . \$associationMapping['fieldName'] . '\\' that was not'
            . ' configured to cascade persist operations for entity: ' . self::objToStr(\$entity) . '.'
            . ' To solve this issue: Either explicitly call EntityManager#persist()'
            . ' on this unknown entity or configure cascade persist'
            . ' this association in the mapping for example @ManyToOne(..,cascade={\"persist\"}).'
            . (method_exists(\$entity, '__toString')
                ? ''
                : ' If you cannot find out which entity causes the problem implement \\''
                . \$associationMapping['targetEntity'] . '#__toString()\\' to get a clue.'
            );
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/lib/Doctrine/ORM/ORMInvalidArgumentException.php";
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

namespace Doctrine\\ORM;
use Doctrine\\ORM\\Mapping\\ClassMetadata;

/**
 * Contains exception messages for all invalid lifecycle state exceptions inside UnitOfWork
 *
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 */
class ORMInvalidArgumentException extends \\InvalidArgumentException
{
    /**
     * @param object \$entity
     *
     * @return ORMInvalidArgumentException
     */
    static public function scheduleInsertForManagedEntity(\$entity)
    {
        return new self(\"A managed+dirty entity \" . self::objToStr(\$entity) . \" can not be scheduled for insertion.\");
    }

    /**
     * @param object \$entity
     *
     * @return ORMInvalidArgumentException
     */
    static public function scheduleInsertForRemovedEntity(\$entity)
    {
        return new self(\"Removed entity \" . self::objToStr(\$entity) . \" can not be scheduled for insertion.\");
    }

    /**
     * @param object \$entity
     *
     * @return ORMInvalidArgumentException
     */
    static public function scheduleInsertTwice(\$entity)
    {
        return new self(\"Entity \" . self::objToStr(\$entity) . \" can not be scheduled for insertion twice.\");
    }

    /**
     * @param string \$className
     * @param object \$entity
     *
     * @return ORMInvalidArgumentException
     */
    static public function entityWithoutIdentity(\$className, \$entity)
    {
        return new self(
            \"The given entity of type '\" . \$className . \"' (\".self::objToStr(\$entity).\") has no identity/no \" .
            \"id values set. It cannot be added to the identity map.\"
        );
    }

    /**
     * @param object \$entity
     *
     * @return ORMInvalidArgumentException
     */
    static public function readOnlyRequiresManagedEntity(\$entity)
    {
        return new self(\"Only managed entities can be marked or checked as read only. But \" . self::objToStr(\$entity) . \" is not\");
    }

    /**
     * @param array[][]|object[][] \$newEntitiesWithAssociations non-empty an array
 *                                                              of [array \$associationMapping, object \$entity] pairs
     *
     * @return ORMInvalidArgumentException
     */
    static public function newEntitiesFoundThroughRelationships(\$newEntitiesWithAssociations)
    {
        \$errorMessages = array_map(
            function (array \$newEntityWithAssociation) : string {
                [\$associationMapping, \$entity] = \$newEntityWithAssociation;

                return self::newEntityFoundThroughRelationshipMessage(\$associationMapping, \$entity);
            },
            \$newEntitiesWithAssociations
        );

        if (1 === count(\$errorMessages)) {
            return new self(reset(\$errorMessages));
        }

        return new self(
            'Multiple non-persisted new entities were found through the given association graph:'
            . \"\\n\\n * \"
            . implode(\"\\n * \", \$errorMessages)
        );
    }

    /**
     * @param array  \$associationMapping
     * @param object \$entry
     *
     * @return ORMInvalidArgumentException
     */
    static public function newEntityFoundThroughRelationship(array \$associationMapping, \$entry)
    {
        return new self(self::newEntityFoundThroughRelationshipMessage(\$associationMapping, \$entry));
    }

    /**
     * @param array  \$assoc
     * @param object \$entry
     *
     * @return ORMInvalidArgumentException
     */
    static public function detachedEntityFoundThroughRelationship(array \$assoc, \$entry)
    {
        return new self(\"A detached entity of type \" . \$assoc['targetEntity'] . \" (\" . self::objToStr(\$entry) . \") \"
            . \" was found through the relationship '\" . \$assoc['sourceEntity'] . \"#\" . \$assoc['fieldName'] . \"' \"
            . \"during cascading a persist operation.\");
    }

    /**
     * @param object \$entity
     *
     * @return ORMInvalidArgumentException
     */
    static public function entityNotManaged(\$entity)
    {
        return new self(\"Entity \" . self::objToStr(\$entity) . \" is not managed. An entity is managed if its fetched \" .
            \"from the database or registered as new through EntityManager#persist\");
    }

    /**
     * @param object \$entity
     * @param string \$operation
     *
     * @return ORMInvalidArgumentException
     */
    static public function entityHasNoIdentity(\$entity, \$operation)
    {
        return new self(\"Entity has no identity, therefore \" . \$operation .\" cannot be performed. \" . self::objToStr(\$entity));
    }

    /**
     * @param object \$entity
     * @param string \$operation
     *
     * @return ORMInvalidArgumentException
     */
    static public function entityIsRemoved(\$entity, \$operation)
    {
        return new self(\"Entity is removed, therefore \" . \$operation .\" cannot be performed. \" . self::objToStr(\$entity));
    }

    /**
     * @param object \$entity
     * @param string \$operation
     *
     * @return ORMInvalidArgumentException
     */
    static public function detachedEntityCannot(\$entity, \$operation)
    {
        return new self(\"Detached entity \" . self::objToStr(\$entity) . \" cannot be \" . \$operation);
    }

    /**
     * @param string \$context
     * @param mixed  \$given
     * @param int    \$parameterIndex
     *
     * @return ORMInvalidArgumentException
     */
    public static function invalidObject(\$context, \$given, \$parameterIndex = 1)
    {
        return new self(\$context . ' expects parameter ' . \$parameterIndex .
            ' to be an entity object, '. gettype(\$given) . ' given.');
    }

    /**
     * @return ORMInvalidArgumentException
     */
    public static function invalidCompositeIdentifier()
    {
        return new self(\"Binding an entity with a composite primary key to a query is not supported. \" .
            \"You should split the parameter into the explicit fields and bind them separately.\");
    }

    /**
     * @return ORMInvalidArgumentException
     */
    public static function invalidIdentifierBindingEntity()
    {
        return new self(\"Binding entities to query parameters only allowed for entities that have an identifier.\");
    }

    /**
     * @param ClassMetadata \$targetClass
     * @param array         \$assoc
     * @param mixed         \$actualValue
     *
     * @return self
     */
    public static function invalidAssociation(ClassMetadata \$targetClass, \$assoc, \$actualValue)
    {
        \$expectedType = \$targetClass->getName();

        return new self(sprintf(
            'Expected value of type \"%s\" for association field \"%s#\$%s\", got \"%s\" instead.',
            \$expectedType,
            \$assoc['sourceEntity'],
            \$assoc['fieldName'],
            is_object(\$actualValue) ? get_class(\$actualValue) : gettype(\$actualValue)
        ));
    }

    /**
     * Used when a given entityName hasn't the good type
     *
     * @param mixed \$entityName The given entity (which shouldn't be a string)
     *
     * @return self
     */
    public static function invalidEntityName(\$entityName)
    {
        return new self(sprintf('Entity name must be a string, %s given', gettype(\$entityName)));
    }

    /**
     * Helper method to show an object as string.
     *
     * @param object \$obj
     *
     * @return string
     */
    private static function objToStr(\$obj) : string
    {
        return method_exists(\$obj, '__toString') ? (string) \$obj : get_class(\$obj).'@'.spl_object_hash(\$obj);
    }

    /**
     * @param array  \$associationMapping
     * @param object \$entity
     */
    private static function newEntityFoundThroughRelationshipMessage(array \$associationMapping, \$entity) : string
    {
        return 'A new entity was found through the relationship \\''
            . \$associationMapping['sourceEntity'] . '#' . \$associationMapping['fieldName'] . '\\' that was not'
            . ' configured to cascade persist operations for entity: ' . self::objToStr(\$entity) . '.'
            . ' To solve this issue: Either explicitly call EntityManager#persist()'
            . ' on this unknown entity or configure cascade persist'
            . ' this association in the mapping for example @ManyToOne(..,cascade={\"persist\"}).'
            . (method_exists(\$entity, '__toString')
                ? ''
                : ' If you cannot find out which entity causes the problem implement \\''
                . \$associationMapping['targetEntity'] . '#__toString()\\' to get a clue.'
            );
    }
}
", "vendor/doctrine/orm/lib/Doctrine/ORM/ORMInvalidArgumentException.php", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/lib/Doctrine/ORM/ORMInvalidArgumentException.php");
    }
}
