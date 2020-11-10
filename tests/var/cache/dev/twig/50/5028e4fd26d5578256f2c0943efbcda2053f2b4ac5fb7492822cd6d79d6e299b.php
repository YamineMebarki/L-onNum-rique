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

/* vendor/doctrine/doctrine-fixtures-bundle/UPGRADE.md */
class __TwigTemplate_5c193872fc214dba1d551b286a42f0dc244edf7c3e67d2c167ed112e00fba459 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-fixtures-bundle/UPGRADE.md"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-fixtures-bundle/UPGRADE.md"));

        // line 1
        echo "UPGRADE to 3.0
==============

* The automatic loading of fixtures in a directory (e.g.
    AppBundle\\DataFixtures\\ORM) was removed. Instead, register
    your fixture classes as services and tag them with `doctrine.fixture.orm`,
    like this:
```yaml
# src/AppBundle/Resources/config/dataFixture.yml
services:
  _defaults:
    tags: ['doctrine.fixture.orm']
    autowire: true # if you need dependency injection, see next bullet point

  AppBundle\\DataFixtures\\ORM\\:
    resource: '../../DataFixtures/ORM/*'
```

  This will happen automatically if you're using the Symfony 3.3
    or higher **default service configuration** and your fixture classes
    extend the normal ``Doctrine\\Bundle\\FixturesBundle\\Fixture`` class,
    or implement the new ``Doctrine\\Bundle\\FixturesBundle\\ORMFixtureInterface``.

* The base ``Fixture`` class no longer implements ``ContainerAwareInterface``
    and so no longer have a ``\$this->container`` property. You *can* manually
    implement this interface. Or, a better idea is to update your fixtures
    to use dependency injection:
    
```diff
class MyFixture extends Fixture
{
+     private \$someService;

+     public function __construct(SomeService \$someService)
+     {
+         \$this->someService = \$someService;
+     }

    public function load(ObjectManager \$manager)
    {
-         \$this->container->get('some_service')->someMethod();
+         \$this->someService->someMethod();
    }
}
```

* The base ``Fixture`` class no longer implements ``DependentFixtureInterface``.
    If you want to have a ``getDependencies()`` method, be sure to implement
    this interface explicitly:
    
```diff
+ use Doctrine\\Common\\DataFixtures\\DependentFixtureInterface;

- class MyFixture extends Fixture
+ class MyFixture extends Fixture implements DependentFixtureInterface
```
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/doctrine-fixtures-bundle/UPGRADE.md";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("UPGRADE to 3.0
==============

* The automatic loading of fixtures in a directory (e.g.
    AppBundle\\DataFixtures\\ORM) was removed. Instead, register
    your fixture classes as services and tag them with `doctrine.fixture.orm`,
    like this:
```yaml
# src/AppBundle/Resources/config/dataFixture.yml
services:
  _defaults:
    tags: ['doctrine.fixture.orm']
    autowire: true # if you need dependency injection, see next bullet point

  AppBundle\\DataFixtures\\ORM\\:
    resource: '../../DataFixtures/ORM/*'
```

  This will happen automatically if you're using the Symfony 3.3
    or higher **default service configuration** and your fixture classes
    extend the normal ``Doctrine\\Bundle\\FixturesBundle\\Fixture`` class,
    or implement the new ``Doctrine\\Bundle\\FixturesBundle\\ORMFixtureInterface``.

* The base ``Fixture`` class no longer implements ``ContainerAwareInterface``
    and so no longer have a ``\$this->container`` property. You *can* manually
    implement this interface. Or, a better idea is to update your fixtures
    to use dependency injection:
    
```diff
class MyFixture extends Fixture
{
+     private \$someService;

+     public function __construct(SomeService \$someService)
+     {
+         \$this->someService = \$someService;
+     }

    public function load(ObjectManager \$manager)
    {
-         \$this->container->get('some_service')->someMethod();
+         \$this->someService->someMethod();
    }
}
```

* The base ``Fixture`` class no longer implements ``DependentFixtureInterface``.
    If you want to have a ``getDependencies()`` method, be sure to implement
    this interface explicitly:
    
```diff
+ use Doctrine\\Common\\DataFixtures\\DependentFixtureInterface;

- class MyFixture extends Fixture
+ class MyFixture extends Fixture implements DependentFixtureInterface
```
", "vendor/doctrine/doctrine-fixtures-bundle/UPGRADE.md", "/var/www/public/DevLaon/templates/vendor/doctrine/doctrine-fixtures-bundle/UPGRADE.md");
    }
}
