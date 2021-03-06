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

/* vendor/symfony/maker-bundle/src/Doctrine/BaseRelation.php */
class __TwigTemplate_152ff5947436549e73b89f485004cd5a98b3f04ea7360560024d61e9263d2e6a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Doctrine/BaseRelation.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Doctrine/BaseRelation.php"));

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
abstract class BaseRelation
{
    private \$propertyName;
    private \$targetClassName;
    private \$targetPropertyName;
    private \$isSelfReferencing = false;
    private \$mapInverseRelation = true;

    abstract public function isOwning(): bool;

    public function getPropertyName()
    {
        return \$this->propertyName;
    }

    public function setPropertyName(\$propertyName)
    {
        \$this->propertyName = \$propertyName;

        return \$this;
    }

    public function getTargetClassName()
    {
        return \$this->targetClassName;
    }

    public function setTargetClassName(\$targetClassName)
    {
        \$this->targetClassName = \$targetClassName;

        return \$this;
    }

    public function getTargetPropertyName()
    {
        return \$this->targetPropertyName;
    }

    public function setTargetPropertyName(\$targetPropertyName)
    {
        \$this->targetPropertyName = \$targetPropertyName;

        return \$this;
    }

    public function isSelfReferencing(): bool
    {
        return \$this->isSelfReferencing;
    }

    public function setIsSelfReferencing(bool \$isSelfReferencing)
    {
        \$this->isSelfReferencing = \$isSelfReferencing;

        return \$this;
    }

    public function getMapInverseRelation(): bool
    {
        return \$this->mapInverseRelation;
    }

    public function setMapInverseRelation(bool \$mapInverseRelation)
    {
        \$this->mapInverseRelation = \$mapInverseRelation;

        return \$this;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/maker-bundle/src/Doctrine/BaseRelation.php";
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
abstract class BaseRelation
{
    private \$propertyName;
    private \$targetClassName;
    private \$targetPropertyName;
    private \$isSelfReferencing = false;
    private \$mapInverseRelation = true;

    abstract public function isOwning(): bool;

    public function getPropertyName()
    {
        return \$this->propertyName;
    }

    public function setPropertyName(\$propertyName)
    {
        \$this->propertyName = \$propertyName;

        return \$this;
    }

    public function getTargetClassName()
    {
        return \$this->targetClassName;
    }

    public function setTargetClassName(\$targetClassName)
    {
        \$this->targetClassName = \$targetClassName;

        return \$this;
    }

    public function getTargetPropertyName()
    {
        return \$this->targetPropertyName;
    }

    public function setTargetPropertyName(\$targetPropertyName)
    {
        \$this->targetPropertyName = \$targetPropertyName;

        return \$this;
    }

    public function isSelfReferencing(): bool
    {
        return \$this->isSelfReferencing;
    }

    public function setIsSelfReferencing(bool \$isSelfReferencing)
    {
        \$this->isSelfReferencing = \$isSelfReferencing;

        return \$this;
    }

    public function getMapInverseRelation(): bool
    {
        return \$this->mapInverseRelation;
    }

    public function setMapInverseRelation(bool \$mapInverseRelation)
    {
        \$this->mapInverseRelation = \$mapInverseRelation;

        return \$this;
    }
}
", "vendor/symfony/maker-bundle/src/Doctrine/BaseRelation.php", "/var/www/public/DevLaon/templates/vendor/symfony/maker-bundle/src/Doctrine/BaseRelation.php");
    }
}
