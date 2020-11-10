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

/* vendor/symfony/maker-bundle/src/Doctrine/EntityRelation.php */
class __TwigTemplate_ce13612b47a586c56e1d30cbacb53abbfec96ac30736339e6472ff8882df6714 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Doctrine/EntityRelation.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Doctrine/EntityRelation.php"));

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

/**
 * @internal
 */
final class EntityRelation
{
    const MANY_TO_ONE = 'ManyToOne';
    const ONE_TO_MANY = 'OneToMany';
    const MANY_TO_MANY = 'ManyToMany';
    const ONE_TO_ONE = 'OneToOne';

    private \$type;

    private \$owningClass;

    private \$inverseClass;

    private \$owningProperty;

    private \$inverseProperty;

    private \$isNullable = false;

    private \$isSelfReferencing = false;

    private \$orphanRemoval = false;

    private \$mapInverseRelation = true;

    public function __construct(string \$type, string \$owningClass, string \$inverseClass)
    {
        if (!\\in_array(\$type, self::getValidRelationTypes())) {
            throw new \\Exception(sprintf('Invalid relation type \"%s\"', \$type));
        }

        if (self::ONE_TO_MANY === \$type) {
            throw new \\Exception('Use ManyToOne instead of OneToMany');
        }

        \$this->type = \$type;
        \$this->owningClass = \$owningClass;
        \$this->inverseClass = \$inverseClass;
        \$this->isSelfReferencing = \$owningClass === \$inverseClass;
    }

    public function setOwningProperty(string \$owningProperty)
    {
        \$this->owningProperty = \$owningProperty;
    }

    public function setInverseProperty(string \$inverseProperty)
    {
        if (!\$this->mapInverseRelation) {
            throw new \\Exception('Cannot call setInverseProperty() when the inverse relation will not be mapped.');
        }

        \$this->inverseProperty = \$inverseProperty;
    }

    public function setIsNullable(bool \$isNullable)
    {
        \$this->isNullable = \$isNullable;
    }

    public function setOrphanRemoval(bool \$orphanRemoval)
    {
        \$this->orphanRemoval = \$orphanRemoval;
    }

    public static function getValidRelationTypes(): array
    {
        return [
            self::MANY_TO_ONE,
            self::ONE_TO_MANY,
            self::MANY_TO_MANY,
            self::ONE_TO_ONE,
        ];
    }

    public function getOwningRelation()
    {
        switch (\$this->getType()) {
            case self::MANY_TO_ONE:
                return (new RelationManyToOne())
                    ->setPropertyName(\$this->owningProperty)
                    ->setTargetClassName(\$this->inverseClass)
                    ->setTargetPropertyName(\$this->inverseProperty)
                    ->setIsNullable(\$this->isNullable)
                    ->setIsSelfReferencing(\$this->isSelfReferencing)
                    ->setMapInverseRelation(\$this->mapInverseRelation)
                ;
                break;
            case self::MANY_TO_MANY:
                return (new RelationManyToMany())
                    ->setPropertyName(\$this->owningProperty)
                    ->setTargetClassName(\$this->inverseClass)
                    ->setTargetPropertyName(\$this->inverseProperty)
                    ->setIsOwning(true)->setMapInverseRelation(\$this->mapInverseRelation)
                    ->setIsSelfReferencing(\$this->isSelfReferencing)
                ;
                break;
            case self::ONE_TO_ONE:
                return (new RelationOneToOne())
                    ->setPropertyName(\$this->owningProperty)
                    ->setTargetClassName(\$this->inverseClass)
                    ->setTargetPropertyName(\$this->inverseProperty)
                    ->setIsNullable(\$this->isNullable)
                    ->setIsOwning(true)
                    ->setIsSelfReferencing(\$this->isSelfReferencing)
                    ->setMapInverseRelation(\$this->mapInverseRelation)
                ;
                break;
            default:
                throw new \\InvalidArgumentException('Invalid type');
        }
    }

    public function getInverseRelation()
    {
        switch (\$this->getType()) {
            case self::MANY_TO_ONE:
                return (new RelationOneToMany())
                    ->setPropertyName(\$this->inverseProperty)
                    ->setTargetClassName(\$this->owningClass)
                    ->setTargetPropertyName(\$this->owningProperty)
                    ->setOrphanRemoval(\$this->orphanRemoval)
                    ->setIsSelfReferencing(\$this->isSelfReferencing)
                ;
                break;
            case self::MANY_TO_MANY:
                return (new RelationManyToMany())
                    ->setPropertyName(\$this->inverseProperty)
                    ->setTargetClassName(\$this->owningClass)
                    ->setTargetPropertyName(\$this->owningProperty)
                    ->setIsOwning(false)
                    ->setIsSelfReferencing(\$this->isSelfReferencing)
                ;
                break;
            case self::ONE_TO_ONE:
                return (new RelationOneToOne())
                    ->setPropertyName(\$this->inverseProperty)
                    ->setTargetClassName(\$this->owningClass)
                    ->setTargetPropertyName(\$this->owningProperty)
                    ->setIsNullable(\$this->isNullable)
                    ->setIsOwning(false)
                    ->setIsSelfReferencing(\$this->isSelfReferencing)
                ;
                break;
            default:
                throw new \\InvalidArgumentException('Invalid type');
        }
    }

    public function getType(): string
    {
        return \$this->type;
    }

    public function getOwningClass(): string
    {
        return \$this->owningClass;
    }

    public function getInverseClass(): string
    {
        return \$this->inverseClass;
    }

    public function getOwningProperty()
    {
        return \$this->owningProperty;
    }

    public function getInverseProperty(): string
    {
        return \$this->inverseProperty;
    }

    public function isNullable(): bool
    {
        return \$this->isNullable;
    }

    public function isSelfReferencing(): bool
    {
        return \$this->isSelfReferencing;
    }

    public function getMapInverseRelation(): bool
    {
        return \$this->mapInverseRelation;
    }

    public function setMapInverseRelation(bool \$mapInverseRelation)
    {
        if (\$mapInverseRelation && \$this->inverseProperty) {
            throw new \\Exception('Cannot set setMapInverseRelation() to true when the inverse relation property is set.');
        }

        \$this->mapInverseRelation = \$mapInverseRelation;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/maker-bundle/src/Doctrine/EntityRelation.php";
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

/**
 * @internal
 */
final class EntityRelation
{
    const MANY_TO_ONE = 'ManyToOne';
    const ONE_TO_MANY = 'OneToMany';
    const MANY_TO_MANY = 'ManyToMany';
    const ONE_TO_ONE = 'OneToOne';

    private \$type;

    private \$owningClass;

    private \$inverseClass;

    private \$owningProperty;

    private \$inverseProperty;

    private \$isNullable = false;

    private \$isSelfReferencing = false;

    private \$orphanRemoval = false;

    private \$mapInverseRelation = true;

    public function __construct(string \$type, string \$owningClass, string \$inverseClass)
    {
        if (!\\in_array(\$type, self::getValidRelationTypes())) {
            throw new \\Exception(sprintf('Invalid relation type \"%s\"', \$type));
        }

        if (self::ONE_TO_MANY === \$type) {
            throw new \\Exception('Use ManyToOne instead of OneToMany');
        }

        \$this->type = \$type;
        \$this->owningClass = \$owningClass;
        \$this->inverseClass = \$inverseClass;
        \$this->isSelfReferencing = \$owningClass === \$inverseClass;
    }

    public function setOwningProperty(string \$owningProperty)
    {
        \$this->owningProperty = \$owningProperty;
    }

    public function setInverseProperty(string \$inverseProperty)
    {
        if (!\$this->mapInverseRelation) {
            throw new \\Exception('Cannot call setInverseProperty() when the inverse relation will not be mapped.');
        }

        \$this->inverseProperty = \$inverseProperty;
    }

    public function setIsNullable(bool \$isNullable)
    {
        \$this->isNullable = \$isNullable;
    }

    public function setOrphanRemoval(bool \$orphanRemoval)
    {
        \$this->orphanRemoval = \$orphanRemoval;
    }

    public static function getValidRelationTypes(): array
    {
        return [
            self::MANY_TO_ONE,
            self::ONE_TO_MANY,
            self::MANY_TO_MANY,
            self::ONE_TO_ONE,
        ];
    }

    public function getOwningRelation()
    {
        switch (\$this->getType()) {
            case self::MANY_TO_ONE:
                return (new RelationManyToOne())
                    ->setPropertyName(\$this->owningProperty)
                    ->setTargetClassName(\$this->inverseClass)
                    ->setTargetPropertyName(\$this->inverseProperty)
                    ->setIsNullable(\$this->isNullable)
                    ->setIsSelfReferencing(\$this->isSelfReferencing)
                    ->setMapInverseRelation(\$this->mapInverseRelation)
                ;
                break;
            case self::MANY_TO_MANY:
                return (new RelationManyToMany())
                    ->setPropertyName(\$this->owningProperty)
                    ->setTargetClassName(\$this->inverseClass)
                    ->setTargetPropertyName(\$this->inverseProperty)
                    ->setIsOwning(true)->setMapInverseRelation(\$this->mapInverseRelation)
                    ->setIsSelfReferencing(\$this->isSelfReferencing)
                ;
                break;
            case self::ONE_TO_ONE:
                return (new RelationOneToOne())
                    ->setPropertyName(\$this->owningProperty)
                    ->setTargetClassName(\$this->inverseClass)
                    ->setTargetPropertyName(\$this->inverseProperty)
                    ->setIsNullable(\$this->isNullable)
                    ->setIsOwning(true)
                    ->setIsSelfReferencing(\$this->isSelfReferencing)
                    ->setMapInverseRelation(\$this->mapInverseRelation)
                ;
                break;
            default:
                throw new \\InvalidArgumentException('Invalid type');
        }
    }

    public function getInverseRelation()
    {
        switch (\$this->getType()) {
            case self::MANY_TO_ONE:
                return (new RelationOneToMany())
                    ->setPropertyName(\$this->inverseProperty)
                    ->setTargetClassName(\$this->owningClass)
                    ->setTargetPropertyName(\$this->owningProperty)
                    ->setOrphanRemoval(\$this->orphanRemoval)
                    ->setIsSelfReferencing(\$this->isSelfReferencing)
                ;
                break;
            case self::MANY_TO_MANY:
                return (new RelationManyToMany())
                    ->setPropertyName(\$this->inverseProperty)
                    ->setTargetClassName(\$this->owningClass)
                    ->setTargetPropertyName(\$this->owningProperty)
                    ->setIsOwning(false)
                    ->setIsSelfReferencing(\$this->isSelfReferencing)
                ;
                break;
            case self::ONE_TO_ONE:
                return (new RelationOneToOne())
                    ->setPropertyName(\$this->inverseProperty)
                    ->setTargetClassName(\$this->owningClass)
                    ->setTargetPropertyName(\$this->owningProperty)
                    ->setIsNullable(\$this->isNullable)
                    ->setIsOwning(false)
                    ->setIsSelfReferencing(\$this->isSelfReferencing)
                ;
                break;
            default:
                throw new \\InvalidArgumentException('Invalid type');
        }
    }

    public function getType(): string
    {
        return \$this->type;
    }

    public function getOwningClass(): string
    {
        return \$this->owningClass;
    }

    public function getInverseClass(): string
    {
        return \$this->inverseClass;
    }

    public function getOwningProperty()
    {
        return \$this->owningProperty;
    }

    public function getInverseProperty(): string
    {
        return \$this->inverseProperty;
    }

    public function isNullable(): bool
    {
        return \$this->isNullable;
    }

    public function isSelfReferencing(): bool
    {
        return \$this->isSelfReferencing;
    }

    public function getMapInverseRelation(): bool
    {
        return \$this->mapInverseRelation;
    }

    public function setMapInverseRelation(bool \$mapInverseRelation)
    {
        if (\$mapInverseRelation && \$this->inverseProperty) {
            throw new \\Exception('Cannot set setMapInverseRelation() to true when the inverse relation property is set.');
        }

        \$this->mapInverseRelation = \$mapInverseRelation;
    }
}
", "vendor/symfony/maker-bundle/src/Doctrine/EntityRelation.php", "/var/www/public/DevLaon/templates/vendor/symfony/maker-bundle/src/Doctrine/EntityRelation.php");
    }
}
