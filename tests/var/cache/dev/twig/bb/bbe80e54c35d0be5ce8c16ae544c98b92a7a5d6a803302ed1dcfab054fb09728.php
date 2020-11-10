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

/* vendor/symfony/doctrine-bridge/Form/ChoiceList/IdReader.php */
class __TwigTemplate_24c287feca7eb79f203382e7711e2c2a0a3844fbcccf40f07967028f972a934e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Form/ChoiceList/IdReader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Form/ChoiceList/IdReader.php"));

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

namespace Symfony\\Bridge\\Doctrine\\Form\\ChoiceList;

use Doctrine\\Common\\Persistence\\Mapping\\ClassMetadata;
use Doctrine\\Common\\Persistence\\ObjectManager;
use Symfony\\Component\\Form\\Exception\\RuntimeException;

/**
 * A utility for reading object IDs.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @internal
 */
class IdReader
{
    private \$om;
    private \$classMetadata;
    private \$singleId;
    private \$intId;
    private \$idField;

    /**
     * @var IdReader|null
     */
    private \$associationIdReader;

    public function __construct(ObjectManager \$om, ClassMetadata \$classMetadata)
    {
        \$ids = \$classMetadata->getIdentifierFieldNames();
        \$idType = \$classMetadata->getTypeOfField(current(\$ids));

        \$this->om = \$om;
        \$this->classMetadata = \$classMetadata;
        \$this->singleId = 1 === \\count(\$ids);
        \$this->intId = \$this->singleId && \\in_array(\$idType, ['integer', 'smallint', 'bigint']);
        \$this->idField = current(\$ids);

        // single field association are resolved, since the schema column could be an int
        if (\$this->singleId && \$classMetadata->hasAssociation(\$this->idField)) {
            \$this->associationIdReader = new self(\$om, \$om->getClassMetadata(
                \$classMetadata->getAssociationTargetClass(\$this->idField)
            ));

            \$this->singleId = \$this->associationIdReader->isSingleId();
            \$this->intId = \$this->associationIdReader->isIntId();
        }
    }

    /**
     * Returns whether the class has a single-column ID.
     *
     * @return bool returns `true` if the class has a single-column ID and
     *              `false` otherwise
     */
    public function isSingleId(): bool
    {
        return \$this->singleId;
    }

    /**
     * Returns whether the class has a single-column integer ID.
     *
     * @return bool returns `true` if the class has a single-column integer ID
     *              and `false` otherwise
     */
    public function isIntId(): bool
    {
        return \$this->intId;
    }

    /**
     * Returns the ID value for an object.
     *
     * This method assumes that the object has a single-column ID.
     *
     * @param object \$object The object
     *
     * @return mixed The ID value
     */
    public function getIdValue(\$object)
    {
        if (!\$object) {
            return null;
        }

        if (!\$this->om->contains(\$object)) {
            throw new RuntimeException(sprintf('Entity of type \"%s\" passed to the choice field must be managed. Maybe you forget to persist it in the entity manager?', \\get_class(\$object)));
        }

        \$this->om->initializeObject(\$object);

        \$idValue = current(\$this->classMetadata->getIdentifierValues(\$object));

        if (\$this->associationIdReader) {
            \$idValue = \$this->associationIdReader->getIdValue(\$idValue);
        }

        return \$idValue;
    }

    /**
     * Returns the name of the ID field.
     *
     * This method assumes that the object has a single-column ID.
     *
     * @return string The name of the ID field
     */
    public function getIdField(): string
    {
        return \$this->idField;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/doctrine-bridge/Form/ChoiceList/IdReader.php";
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

namespace Symfony\\Bridge\\Doctrine\\Form\\ChoiceList;

use Doctrine\\Common\\Persistence\\Mapping\\ClassMetadata;
use Doctrine\\Common\\Persistence\\ObjectManager;
use Symfony\\Component\\Form\\Exception\\RuntimeException;

/**
 * A utility for reading object IDs.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @internal
 */
class IdReader
{
    private \$om;
    private \$classMetadata;
    private \$singleId;
    private \$intId;
    private \$idField;

    /**
     * @var IdReader|null
     */
    private \$associationIdReader;

    public function __construct(ObjectManager \$om, ClassMetadata \$classMetadata)
    {
        \$ids = \$classMetadata->getIdentifierFieldNames();
        \$idType = \$classMetadata->getTypeOfField(current(\$ids));

        \$this->om = \$om;
        \$this->classMetadata = \$classMetadata;
        \$this->singleId = 1 === \\count(\$ids);
        \$this->intId = \$this->singleId && \\in_array(\$idType, ['integer', 'smallint', 'bigint']);
        \$this->idField = current(\$ids);

        // single field association are resolved, since the schema column could be an int
        if (\$this->singleId && \$classMetadata->hasAssociation(\$this->idField)) {
            \$this->associationIdReader = new self(\$om, \$om->getClassMetadata(
                \$classMetadata->getAssociationTargetClass(\$this->idField)
            ));

            \$this->singleId = \$this->associationIdReader->isSingleId();
            \$this->intId = \$this->associationIdReader->isIntId();
        }
    }

    /**
     * Returns whether the class has a single-column ID.
     *
     * @return bool returns `true` if the class has a single-column ID and
     *              `false` otherwise
     */
    public function isSingleId(): bool
    {
        return \$this->singleId;
    }

    /**
     * Returns whether the class has a single-column integer ID.
     *
     * @return bool returns `true` if the class has a single-column integer ID
     *              and `false` otherwise
     */
    public function isIntId(): bool
    {
        return \$this->intId;
    }

    /**
     * Returns the ID value for an object.
     *
     * This method assumes that the object has a single-column ID.
     *
     * @param object \$object The object
     *
     * @return mixed The ID value
     */
    public function getIdValue(\$object)
    {
        if (!\$object) {
            return null;
        }

        if (!\$this->om->contains(\$object)) {
            throw new RuntimeException(sprintf('Entity of type \"%s\" passed to the choice field must be managed. Maybe you forget to persist it in the entity manager?', \\get_class(\$object)));
        }

        \$this->om->initializeObject(\$object);

        \$idValue = current(\$this->classMetadata->getIdentifierValues(\$object));

        if (\$this->associationIdReader) {
            \$idValue = \$this->associationIdReader->getIdValue(\$idValue);
        }

        return \$idValue;
    }

    /**
     * Returns the name of the ID field.
     *
     * This method assumes that the object has a single-column ID.
     *
     * @return string The name of the ID field
     */
    public function getIdField(): string
    {
        return \$this->idField;
    }
}
", "vendor/symfony/doctrine-bridge/Form/ChoiceList/IdReader.php", "/var/www/public/DevLaon/templates/vendor/symfony/doctrine-bridge/Form/ChoiceList/IdReader.php");
    }
}
