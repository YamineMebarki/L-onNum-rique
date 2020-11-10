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

/* vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/ReferenceRepository.php */
class __TwigTemplate_5cc7b3290609c51b2f6776940b60e49588aebd542329a789ddf143614292dc6c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/ReferenceRepository.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/ReferenceRepository.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\DataFixtures;

use Doctrine\\Common\\Persistence\\ObjectManager;
use Doctrine\\ODM\\PHPCR\\DocumentManager as PhpcrDocumentManager;

/**
 * ReferenceRepository class manages references for
 * fixtures in order to easily support the relations
 * between fixtures
 *
 * @author Gediminas Morkevicius <gediminas.morkevicius@gmail.com>
 */
class ReferenceRepository
{
    /**
     * List of named references to the fixture objects
     * gathered during loads of fixtures
     *
     * @var array
     */
    private \$references = [];

    /**
     * List of identifiers stored for references
     * in case if reference gets unmanaged, it will
     * use a proxy referenced by this identity
     *
     * @var array
     */
    private \$identities = [];

    /**
     * Currently used object manager
     *
     * @var ObjectManager
     */
    private \$manager;

    public function __construct(ObjectManager \$manager)
    {
        \$this->manager = \$manager;
    }

    /**
     * Get identifier for a unit of work
     *
     * @param object \$reference Reference object
     * @param object \$uow       Unit of work
     *
     * @return array
     */
    protected function getIdentifier(\$reference, \$uow)
    {
        // In case Reference is not yet managed in UnitOfWork
        if ( ! \$this->hasIdentifier(\$reference)) {
            \$class = \$this->manager->getClassMetadata(get_class(\$reference));

            return \$class->getIdentifierValues(\$reference);
        }

        // Dealing with ORM UnitOfWork
        if (method_exists(\$uow, 'getEntityIdentifier')) {
            return \$uow->getEntityIdentifier(\$reference);
        }

        // PHPCR ODM UnitOfWork
        if (\$this->manager instanceof PhpcrDocumentManager) {
            return \$uow->getDocumentId(\$reference);
        }

        // ODM UnitOfWork
        return \$uow->getDocumentIdentifier(\$reference);
    }

    /**
     * Set the reference entry identified by \$name
     * and referenced to \$reference. If \$name
     * already is set, it overrides it
     *
     * @param string \$name
     * @param object \$reference
     */
    public function setReference(\$name, \$reference)
    {
        \$this->references[\$name] = \$reference;

        if (\$this->hasIdentifier(\$reference)) {
            // in case if reference is set after flush, store its identity
            \$uow = \$this->manager->getUnitOfWork();
            \$this->identities[\$name] = \$this->getIdentifier(\$reference, \$uow);
        }
    }

    /**
     * Store the identifier of a reference
     *
     * @param string \$name
     * @param mixed \$identity
     */
    public function setReferenceIdentity(\$name, \$identity)
    {
        \$this->identities[\$name] = \$identity;
    }

    /**
     * Set the reference entry identified by \$name
     * and referenced to managed \$object. \$name must
     * not be set yet
     *
     * Notice: in case if identifier is generated after
     * the record is inserted, be sure tu use this method
     * after \$object is flushed
     *
     * @param string \$name
     * @param object \$object - managed object
     * @throws \\BadMethodCallException - if repository already has
     *      a reference by \$name
     * @return void
     */
    public function addReference(\$name, \$object)
    {
        if (isset(\$this->references[\$name])) {
            throw new \\BadMethodCallException(\"Reference to: ({\$name}) already exists, use method setReference in order to override it\");
        }
        \$this->setReference(\$name, \$object);
    }

    /**
     * Loads an object using stored reference
     * named by \$name
     *
     * @param string \$name
     * @throws \\OutOfBoundsException - if repository does not exist
     * @return object
     */
    public function getReference(\$name)
    {
        if (!\$this->hasReference(\$name)) {
            throw new \\OutOfBoundsException(\"Reference to: ({\$name}) does not exist\");
        }

        \$reference = \$this->references[\$name];
        \$meta = \$this->manager->getClassMetadata(get_class(\$reference));

        if (!\$this->manager->contains(\$reference) && isset(\$this->identities[\$name])) {
            \$reference = \$this->manager->getReference(
                \$meta->name,
                \$this->identities[\$name]
            );
            \$this->references[\$name] = \$reference; // already in identity map
        }

        return \$reference;
    }

    /**
     * Check if an object is stored using reference
     * named by \$name
     *
     * @param string \$name
     * @return boolean
     */
    public function hasReference(\$name)
    {
        return isset(\$this->references[\$name]);
    }

    /**
     * Searches for reference names in the
     * list of stored references
     *
     * @param object \$reference
     * @return array
     */
    public function getReferenceNames(\$reference)
    {
        return array_keys(\$this->references, \$reference, true);
    }

    /**
     * Checks if reference has identity stored
     *
     * @param string \$name
     */
    public function hasIdentity(\$name)
    {
        return array_key_exists(\$name, \$this->identities);
    }

    /**
     * Get all stored identities
     *
     * @return array
     */
    public function getIdentities()
    {
        return \$this->identities;
    }

    /**
     * Get all stored references
     *
     * @return array
     */
    public function getReferences()
    {
        return \$this->references;
    }

    /**
     * Get object manager
     *
     * @return ObjectManager
     */
    public function getManager()
    {
        return \$this->manager;
    }

    /**
     * Checks if object has identifier already in unit of work.
     *
     * @param \$reference
     *
     * @return bool
     */
    private function hasIdentifier(\$reference)
    {
        // in case if reference is set after flush, store its identity
        \$uow = \$this->manager->getUnitOfWork();

        if (\$this->manager instanceof PhpcrDocumentManager) {
            return \$uow->contains(\$reference);
        } else {
            return \$uow->isInIdentityMap(\$reference);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/ReferenceRepository.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\DataFixtures;

use Doctrine\\Common\\Persistence\\ObjectManager;
use Doctrine\\ODM\\PHPCR\\DocumentManager as PhpcrDocumentManager;

/**
 * ReferenceRepository class manages references for
 * fixtures in order to easily support the relations
 * between fixtures
 *
 * @author Gediminas Morkevicius <gediminas.morkevicius@gmail.com>
 */
class ReferenceRepository
{
    /**
     * List of named references to the fixture objects
     * gathered during loads of fixtures
     *
     * @var array
     */
    private \$references = [];

    /**
     * List of identifiers stored for references
     * in case if reference gets unmanaged, it will
     * use a proxy referenced by this identity
     *
     * @var array
     */
    private \$identities = [];

    /**
     * Currently used object manager
     *
     * @var ObjectManager
     */
    private \$manager;

    public function __construct(ObjectManager \$manager)
    {
        \$this->manager = \$manager;
    }

    /**
     * Get identifier for a unit of work
     *
     * @param object \$reference Reference object
     * @param object \$uow       Unit of work
     *
     * @return array
     */
    protected function getIdentifier(\$reference, \$uow)
    {
        // In case Reference is not yet managed in UnitOfWork
        if ( ! \$this->hasIdentifier(\$reference)) {
            \$class = \$this->manager->getClassMetadata(get_class(\$reference));

            return \$class->getIdentifierValues(\$reference);
        }

        // Dealing with ORM UnitOfWork
        if (method_exists(\$uow, 'getEntityIdentifier')) {
            return \$uow->getEntityIdentifier(\$reference);
        }

        // PHPCR ODM UnitOfWork
        if (\$this->manager instanceof PhpcrDocumentManager) {
            return \$uow->getDocumentId(\$reference);
        }

        // ODM UnitOfWork
        return \$uow->getDocumentIdentifier(\$reference);
    }

    /**
     * Set the reference entry identified by \$name
     * and referenced to \$reference. If \$name
     * already is set, it overrides it
     *
     * @param string \$name
     * @param object \$reference
     */
    public function setReference(\$name, \$reference)
    {
        \$this->references[\$name] = \$reference;

        if (\$this->hasIdentifier(\$reference)) {
            // in case if reference is set after flush, store its identity
            \$uow = \$this->manager->getUnitOfWork();
            \$this->identities[\$name] = \$this->getIdentifier(\$reference, \$uow);
        }
    }

    /**
     * Store the identifier of a reference
     *
     * @param string \$name
     * @param mixed \$identity
     */
    public function setReferenceIdentity(\$name, \$identity)
    {
        \$this->identities[\$name] = \$identity;
    }

    /**
     * Set the reference entry identified by \$name
     * and referenced to managed \$object. \$name must
     * not be set yet
     *
     * Notice: in case if identifier is generated after
     * the record is inserted, be sure tu use this method
     * after \$object is flushed
     *
     * @param string \$name
     * @param object \$object - managed object
     * @throws \\BadMethodCallException - if repository already has
     *      a reference by \$name
     * @return void
     */
    public function addReference(\$name, \$object)
    {
        if (isset(\$this->references[\$name])) {
            throw new \\BadMethodCallException(\"Reference to: ({\$name}) already exists, use method setReference in order to override it\");
        }
        \$this->setReference(\$name, \$object);
    }

    /**
     * Loads an object using stored reference
     * named by \$name
     *
     * @param string \$name
     * @throws \\OutOfBoundsException - if repository does not exist
     * @return object
     */
    public function getReference(\$name)
    {
        if (!\$this->hasReference(\$name)) {
            throw new \\OutOfBoundsException(\"Reference to: ({\$name}) does not exist\");
        }

        \$reference = \$this->references[\$name];
        \$meta = \$this->manager->getClassMetadata(get_class(\$reference));

        if (!\$this->manager->contains(\$reference) && isset(\$this->identities[\$name])) {
            \$reference = \$this->manager->getReference(
                \$meta->name,
                \$this->identities[\$name]
            );
            \$this->references[\$name] = \$reference; // already in identity map
        }

        return \$reference;
    }

    /**
     * Check if an object is stored using reference
     * named by \$name
     *
     * @param string \$name
     * @return boolean
     */
    public function hasReference(\$name)
    {
        return isset(\$this->references[\$name]);
    }

    /**
     * Searches for reference names in the
     * list of stored references
     *
     * @param object \$reference
     * @return array
     */
    public function getReferenceNames(\$reference)
    {
        return array_keys(\$this->references, \$reference, true);
    }

    /**
     * Checks if reference has identity stored
     *
     * @param string \$name
     */
    public function hasIdentity(\$name)
    {
        return array_key_exists(\$name, \$this->identities);
    }

    /**
     * Get all stored identities
     *
     * @return array
     */
    public function getIdentities()
    {
        return \$this->identities;
    }

    /**
     * Get all stored references
     *
     * @return array
     */
    public function getReferences()
    {
        return \$this->references;
    }

    /**
     * Get object manager
     *
     * @return ObjectManager
     */
    public function getManager()
    {
        return \$this->manager;
    }

    /**
     * Checks if object has identifier already in unit of work.
     *
     * @param \$reference
     *
     * @return bool
     */
    private function hasIdentifier(\$reference)
    {
        // in case if reference is set after flush, store its identity
        \$uow = \$this->manager->getUnitOfWork();

        if (\$this->manager instanceof PhpcrDocumentManager) {
            return \$uow->contains(\$reference);
        } else {
            return \$uow->isInIdentityMap(\$reference);
        }
    }
}
", "vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/ReferenceRepository.php", "/var/www/public/DevLaon/templates/vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/ReferenceRepository.php");
    }
}
