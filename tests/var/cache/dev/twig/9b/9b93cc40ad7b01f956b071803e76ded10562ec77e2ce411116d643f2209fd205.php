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

/* vendor/doctrine/orm/lib/Doctrine/ORM/Utility/HierarchyDiscriminatorResolver.php */
class __TwigTemplate_61ed0f44a7b45d02700f34a310100ad6b79ea38580cd19918badf10f814d1959 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Utility/HierarchyDiscriminatorResolver.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Utility/HierarchyDiscriminatorResolver.php"));

        // line 1
        echo "<?php

namespace Doctrine\\ORM\\Utility;

use Doctrine\\Common\\Persistence\\Mapping\\ClassMetadata;
use Doctrine\\ORM\\EntityManagerInterface;

/**
 * @internal This class exists only to avoid code duplication, do not reuse it externally
 */
final class HierarchyDiscriminatorResolver
{
    private function __construct()
    {
    }

    /**
     * This method is needed to make INSTANCEOF work correctly with inheritance: if the class at hand has inheritance,
     * it extracts all the discriminators from the child classes and returns them
     */
    public static function resolveDiscriminatorsForClass(
        ClassMetadata \$rootClassMetadata,
        EntityManagerInterface \$entityManager
    ): array {
        \$hierarchyClasses = \$rootClassMetadata->subClasses;
        \$hierarchyClasses[] = \$rootClassMetadata->name;

        \$discriminators = [];

        foreach (\$hierarchyClasses as \$class) {
            \$currentMetadata = \$entityManager->getClassMetadata(\$class);
            \$currentDiscriminator = \$currentMetadata->discriminatorValue;

            if (null !== \$currentDiscriminator) {
                \$discriminators[\$currentDiscriminator] = null;
            }
        }

        return \$discriminators;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/lib/Doctrine/ORM/Utility/HierarchyDiscriminatorResolver.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\ORM\\Utility;

use Doctrine\\Common\\Persistence\\Mapping\\ClassMetadata;
use Doctrine\\ORM\\EntityManagerInterface;

/**
 * @internal This class exists only to avoid code duplication, do not reuse it externally
 */
final class HierarchyDiscriminatorResolver
{
    private function __construct()
    {
    }

    /**
     * This method is needed to make INSTANCEOF work correctly with inheritance: if the class at hand has inheritance,
     * it extracts all the discriminators from the child classes and returns them
     */
    public static function resolveDiscriminatorsForClass(
        ClassMetadata \$rootClassMetadata,
        EntityManagerInterface \$entityManager
    ): array {
        \$hierarchyClasses = \$rootClassMetadata->subClasses;
        \$hierarchyClasses[] = \$rootClassMetadata->name;

        \$discriminators = [];

        foreach (\$hierarchyClasses as \$class) {
            \$currentMetadata = \$entityManager->getClassMetadata(\$class);
            \$currentDiscriminator = \$currentMetadata->discriminatorValue;

            if (null !== \$currentDiscriminator) {
                \$discriminators[\$currentDiscriminator] = null;
            }
        }

        return \$discriminators;
    }
}
", "vendor/doctrine/orm/lib/Doctrine/ORM/Utility/HierarchyDiscriminatorResolver.php", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/lib/Doctrine/ORM/Utility/HierarchyDiscriminatorResolver.php");
    }
}
