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

/* vendor/doctrine/data-fixtures/README.md */
class __TwigTemplate_20df90b85a3255c5b24660eaac6115bb460aca1c286a43df80e6897a78aad355 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/data-fixtures/README.md"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/data-fixtures/README.md"));

        // line 1
        echo "# Doctrine Data Fixtures Extension

[![Build Status](https://travis-ci.org/doctrine/data-fixtures.png)](https://travis-ci.org/doctrine/data-fixtures)

This extension aims to provide a simple way to manage and execute the loading of data fixtures
for the [Doctrine ORM or ODM](http://www.doctrine-project.org/). You can write fixture classes
by implementing the [`Doctrine\\Common\\DataFixtures\\FixtureInterface`](lib/Doctrine/Common/DataFixtures/FixtureInterface.php) interface:

```php
namespace MyDataFixtures;

use Doctrine\\Common\\Persistence\\ObjectManager;
use Doctrine\\Common\\DataFixtures\\FixtureInterface;

class UserFixtureLoader implements FixtureInterface
{
    public function load(ObjectManager \$manager)
    {
        \$user = new User();
        \$user->setUsername('jwage');
        \$user->setPassword('test');

        \$manager->persist(\$user);
        \$manager->flush();
    }
}
```

Now you can begin adding the fixtures to a loader instance:

```php
use Doctrine\\Common\\DataFixtures\\Loader;
use MyDataFixtures\\UserDataLoader;

\$loader = new Loader();
\$loader->addFixture(new UserDataLoader());
```

You can load a set of fixtures from a directory as well:

```php
\$loader->loadFromDirectory('/path/to/MyDataFixtures');
```

Or you can load a set of fixtures from a file:

```php
\$loader->loadFromFile('/path/to/MyDataFixtures/MyFixture1.php');
```

You can get the added fixtures using the getFixtures() method:

```php
\$fixtures = \$loader->getFixtures();
```

Now you can easily execute the fixtures:

```php
use Doctrine\\Common\\DataFixtures\\Executor\\ORMExecutor;
use Doctrine\\Common\\DataFixtures\\Purger\\ORMPurger;

\$purger = new ORMPurger();
\$executor = new ORMExecutor(\$em, \$purger);
\$executor->execute(\$loader->getFixtures());
```

If you want to append the fixtures instead of purging before loading then pass true
to the 2nd argument of execute:

```php
\$executor->execute(\$loader->getFixtures(), true);
```

## Sharing objects between fixtures

In case if fixture objects have relations to other fixtures, it is now possible
to easily add a reference to that object by name and later reference it to form
a relation. Here is an example fixtures for **Role** and **User** relation

```php
namespace MyDataFixtures;

use Doctrine\\Common\\DataFixtures\\AbstractFixture;
use Doctrine\\Common\\Persistence\\ObjectManager;

class UserRoleDataLoader extends AbstractFixture
{
    public function load(ObjectManager \$manager)
    {
        \$adminRole = new Role();
        \$adminRole->setName('admin');

        \$anonymousRole = new Role();
        \$anonymousRole->setName('anonymous');

        \$manager->persist(\$adminRole);
        \$manager->persist(\$anonymousRole);
        \$manager->flush();

        // store reference to admin role for User relation to Role
        \$this->addReference('admin-role', \$adminRole);
    }
}
```

And the **User** data loading fixture:

```php
namespace MyDataFixtures;

use Doctrine\\Common\\DataFixtures\\AbstractFixture;
use Doctrine\\Common\\Persistence\\ObjectManager;

class UserDataLoader extends AbstractFixture
{
    public function load(ObjectManager \$manager)
    {
        \$user = new User();
        \$user->setUsername('jwage');
        \$user->setPassword('test');
        \$user->setRole(
            \$this->getReference('admin-role') // load the stored reference
        );

        \$manager->persist(\$user);
        \$manager->flush();

        // store reference of admin-user for other Fixtures
        \$this->addReference('admin-user', \$user);
    }
}
```

## Fixture ordering
**Notice** that the fixture loading order is important! To handle it manually
implement one of the following interfaces:

### OrderedFixtureInterface

Set the order manually:

```php
namespace MyDataFixtures;

use Doctrine\\Common\\DataFixtures\\AbstractFixture;
use Doctrine\\Common\\DataFixtures\\OrderedFixtureInterface;
use Doctrine\\Common\\Persistence\\ObjectManager;

class MyFixture extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager \$manager)
    {}

    public function getOrder()
    {
        return 10; // number in which order to load fixtures
    }
}
```

### DependentFixtureInterface

Provide an array of fixture class names:

```php
namespace MyDataFixtures;

use Doctrine\\Common\\DataFixtures\\AbstractFixture;
use Doctrine\\Common\\DataFixtures\\DependentFixtureInterface;
use Doctrine\\Common\\Persistence\\ObjectManager;

class MyFixture extends AbstractFixture implements DependentFixtureInterface
{
    public function load(ObjectManager \$manager)
    {}

    public function getDependencies()
    {
        return array('MyDataFixtures\\MyOtherFixture'); // fixture classes fixture is dependent on
    }
}

class MyOtherFixture extends AbstractFixture
{
    public function load(ObjectManager \$manager)
    {}
}
```

**Notice** the ordering is relevant to Loader class.

## Running the tests:

Phpunit is included in the dev requirements of this package.

To setup and run tests follow these steps:

- go to the root directory of data-fixtures
- run: **composer install --dev**
- run: **vendor/bin/phpunit**
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/data-fixtures/README.md";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("# Doctrine Data Fixtures Extension

[![Build Status](https://travis-ci.org/doctrine/data-fixtures.png)](https://travis-ci.org/doctrine/data-fixtures)

This extension aims to provide a simple way to manage and execute the loading of data fixtures
for the [Doctrine ORM or ODM](http://www.doctrine-project.org/). You can write fixture classes
by implementing the [`Doctrine\\Common\\DataFixtures\\FixtureInterface`](lib/Doctrine/Common/DataFixtures/FixtureInterface.php) interface:

```php
namespace MyDataFixtures;

use Doctrine\\Common\\Persistence\\ObjectManager;
use Doctrine\\Common\\DataFixtures\\FixtureInterface;

class UserFixtureLoader implements FixtureInterface
{
    public function load(ObjectManager \$manager)
    {
        \$user = new User();
        \$user->setUsername('jwage');
        \$user->setPassword('test');

        \$manager->persist(\$user);
        \$manager->flush();
    }
}
```

Now you can begin adding the fixtures to a loader instance:

```php
use Doctrine\\Common\\DataFixtures\\Loader;
use MyDataFixtures\\UserDataLoader;

\$loader = new Loader();
\$loader->addFixture(new UserDataLoader());
```

You can load a set of fixtures from a directory as well:

```php
\$loader->loadFromDirectory('/path/to/MyDataFixtures');
```

Or you can load a set of fixtures from a file:

```php
\$loader->loadFromFile('/path/to/MyDataFixtures/MyFixture1.php');
```

You can get the added fixtures using the getFixtures() method:

```php
\$fixtures = \$loader->getFixtures();
```

Now you can easily execute the fixtures:

```php
use Doctrine\\Common\\DataFixtures\\Executor\\ORMExecutor;
use Doctrine\\Common\\DataFixtures\\Purger\\ORMPurger;

\$purger = new ORMPurger();
\$executor = new ORMExecutor(\$em, \$purger);
\$executor->execute(\$loader->getFixtures());
```

If you want to append the fixtures instead of purging before loading then pass true
to the 2nd argument of execute:

```php
\$executor->execute(\$loader->getFixtures(), true);
```

## Sharing objects between fixtures

In case if fixture objects have relations to other fixtures, it is now possible
to easily add a reference to that object by name and later reference it to form
a relation. Here is an example fixtures for **Role** and **User** relation

```php
namespace MyDataFixtures;

use Doctrine\\Common\\DataFixtures\\AbstractFixture;
use Doctrine\\Common\\Persistence\\ObjectManager;

class UserRoleDataLoader extends AbstractFixture
{
    public function load(ObjectManager \$manager)
    {
        \$adminRole = new Role();
        \$adminRole->setName('admin');

        \$anonymousRole = new Role();
        \$anonymousRole->setName('anonymous');

        \$manager->persist(\$adminRole);
        \$manager->persist(\$anonymousRole);
        \$manager->flush();

        // store reference to admin role for User relation to Role
        \$this->addReference('admin-role', \$adminRole);
    }
}
```

And the **User** data loading fixture:

```php
namespace MyDataFixtures;

use Doctrine\\Common\\DataFixtures\\AbstractFixture;
use Doctrine\\Common\\Persistence\\ObjectManager;

class UserDataLoader extends AbstractFixture
{
    public function load(ObjectManager \$manager)
    {
        \$user = new User();
        \$user->setUsername('jwage');
        \$user->setPassword('test');
        \$user->setRole(
            \$this->getReference('admin-role') // load the stored reference
        );

        \$manager->persist(\$user);
        \$manager->flush();

        // store reference of admin-user for other Fixtures
        \$this->addReference('admin-user', \$user);
    }
}
```

## Fixture ordering
**Notice** that the fixture loading order is important! To handle it manually
implement one of the following interfaces:

### OrderedFixtureInterface

Set the order manually:

```php
namespace MyDataFixtures;

use Doctrine\\Common\\DataFixtures\\AbstractFixture;
use Doctrine\\Common\\DataFixtures\\OrderedFixtureInterface;
use Doctrine\\Common\\Persistence\\ObjectManager;

class MyFixture extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager \$manager)
    {}

    public function getOrder()
    {
        return 10; // number in which order to load fixtures
    }
}
```

### DependentFixtureInterface

Provide an array of fixture class names:

```php
namespace MyDataFixtures;

use Doctrine\\Common\\DataFixtures\\AbstractFixture;
use Doctrine\\Common\\DataFixtures\\DependentFixtureInterface;
use Doctrine\\Common\\Persistence\\ObjectManager;

class MyFixture extends AbstractFixture implements DependentFixtureInterface
{
    public function load(ObjectManager \$manager)
    {}

    public function getDependencies()
    {
        return array('MyDataFixtures\\MyOtherFixture'); // fixture classes fixture is dependent on
    }
}

class MyOtherFixture extends AbstractFixture
{
    public function load(ObjectManager \$manager)
    {}
}
```

**Notice** the ordering is relevant to Loader class.

## Running the tests:

Phpunit is included in the dev requirements of this package.

To setup and run tests follow these steps:

- go to the root directory of data-fixtures
- run: **composer install --dev**
- run: **vendor/bin/phpunit**
", "vendor/doctrine/data-fixtures/README.md", "/var/www/public/DevLaon/templates/vendor/doctrine/data-fixtures/README.md");
    }
}
