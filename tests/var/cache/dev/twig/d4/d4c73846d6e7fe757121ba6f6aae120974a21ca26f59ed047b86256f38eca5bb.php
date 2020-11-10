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

/* vendor/doctrine/doctrine-fixtures-bundle/Tests/Command/LoadDataFixturesDoctrineCommandTest.php */
class __TwigTemplate_b5bfbcdd3aab549c3b2469ce77a0bb95369e4dfce86c4c33183b27669aa6dc42 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-fixtures-bundle/Tests/Command/LoadDataFixturesDoctrineCommandTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-fixtures-bundle/Tests/Command/LoadDataFixturesDoctrineCommandTest.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Bundle\\FixturesBundle\\Tests\\Command;

use Doctrine\\Bundle\\FixturesBundle\\Command\\LoadDataFixturesDoctrineCommand;
use Doctrine\\Bundle\\FixturesBundle\\Loader\\SymfonyFixturesLoader;
use Doctrine\\Common\\Persistence\\ManagerRegistry;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\Container;

class LoadDataFixturesDoctrineCommandTest extends TestCase
{
    /**
     * @group legacy
     * @expectedDeprecation The \"Doctrine\\Bundle\\FixturesBundle\\Command\\LoadDataFixturesDoctrineCommand\" constructor expects a \"Doctrine\\Common\\Persistence\\ManagerRegistry\" instance as second argument, not passing it will throw a \\TypeError in DoctrineFixturesBundle 4.0.
     */
    public function testInstantiatingWithoutManagerRegistry() : void
    {
        \$loader = new SymfonyFixturesLoader(new Container());

        new LoadDataFixturesDoctrineCommand(\$loader);
    }

    /**
     * @doesNotPerformAssertions
     */
    public function testInstantiatingWithManagerRegistry() : void
    {
        \$registry = \$this->createMock(ManagerRegistry::class);
        \$loader   = new SymfonyFixturesLoader(new Container());

        new LoadDataFixturesDoctrineCommand(\$loader, \$registry);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/doctrine-fixtures-bundle/Tests/Command/LoadDataFixturesDoctrineCommandTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Bundle\\FixturesBundle\\Tests\\Command;

use Doctrine\\Bundle\\FixturesBundle\\Command\\LoadDataFixturesDoctrineCommand;
use Doctrine\\Bundle\\FixturesBundle\\Loader\\SymfonyFixturesLoader;
use Doctrine\\Common\\Persistence\\ManagerRegistry;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\Container;

class LoadDataFixturesDoctrineCommandTest extends TestCase
{
    /**
     * @group legacy
     * @expectedDeprecation The \"Doctrine\\Bundle\\FixturesBundle\\Command\\LoadDataFixturesDoctrineCommand\" constructor expects a \"Doctrine\\Common\\Persistence\\ManagerRegistry\" instance as second argument, not passing it will throw a \\TypeError in DoctrineFixturesBundle 4.0.
     */
    public function testInstantiatingWithoutManagerRegistry() : void
    {
        \$loader = new SymfonyFixturesLoader(new Container());

        new LoadDataFixturesDoctrineCommand(\$loader);
    }

    /**
     * @doesNotPerformAssertions
     */
    public function testInstantiatingWithManagerRegistry() : void
    {
        \$registry = \$this->createMock(ManagerRegistry::class);
        \$loader   = new SymfonyFixturesLoader(new Container());

        new LoadDataFixturesDoctrineCommand(\$loader, \$registry);
    }
}
", "vendor/doctrine/doctrine-fixtures-bundle/Tests/Command/LoadDataFixturesDoctrineCommandTest.php", "/var/www/public/DevLaon/templates/vendor/doctrine/doctrine-fixtures-bundle/Tests/Command/LoadDataFixturesDoctrineCommandTest.php");
    }
}
