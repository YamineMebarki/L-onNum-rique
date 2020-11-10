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

/* vendor/doctrine/doctrine-fixtures-bundle/Tests/Fixtures/FooBundle/DataFixtures/WithDependenciesFixtures.php */
class __TwigTemplate_6adea38c5389149c92aca69abd2697091715c4c76f594721acc3fe138d55e83e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-fixtures-bundle/Tests/Fixtures/FooBundle/DataFixtures/WithDependenciesFixtures.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-fixtures-bundle/Tests/Fixtures/FooBundle/DataFixtures/WithDependenciesFixtures.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Bundle\\FixturesBundle\\Tests\\Fixtures\\FooBundle\\DataFixtures;

use Doctrine\\Bundle\\FixturesBundle\\FixtureGroupInterface;
use Doctrine\\Bundle\\FixturesBundle\\ORMFixtureInterface;
use Doctrine\\Common\\DataFixtures\\DependentFixtureInterface;
use Doctrine\\Common\\Persistence\\ObjectManager;

class WithDependenciesFixtures implements ORMFixtureInterface, DependentFixtureInterface, FixtureGroupInterface
{
    public function load(ObjectManager \$manager) : void
    {
        // ...
    }

    public function getDependencies() : array
    {
        return [OtherFixtures::class];
    }

    public static function getGroups() : array
    {
        return ['missingDependencyGroup', 'fulfilledDependencyGroup'];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/doctrine-fixtures-bundle/Tests/Fixtures/FooBundle/DataFixtures/WithDependenciesFixtures.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Bundle\\FixturesBundle\\Tests\\Fixtures\\FooBundle\\DataFixtures;

use Doctrine\\Bundle\\FixturesBundle\\FixtureGroupInterface;
use Doctrine\\Bundle\\FixturesBundle\\ORMFixtureInterface;
use Doctrine\\Common\\DataFixtures\\DependentFixtureInterface;
use Doctrine\\Common\\Persistence\\ObjectManager;

class WithDependenciesFixtures implements ORMFixtureInterface, DependentFixtureInterface, FixtureGroupInterface
{
    public function load(ObjectManager \$manager) : void
    {
        // ...
    }

    public function getDependencies() : array
    {
        return [OtherFixtures::class];
    }

    public static function getGroups() : array
    {
        return ['missingDependencyGroup', 'fulfilledDependencyGroup'];
    }
}
", "vendor/doctrine/doctrine-fixtures-bundle/Tests/Fixtures/FooBundle/DataFixtures/WithDependenciesFixtures.php", "/var/www/public/DevLaon/templates/vendor/doctrine/doctrine-fixtures-bundle/Tests/Fixtures/FooBundle/DataFixtures/WithDependenciesFixtures.php");
    }
}
