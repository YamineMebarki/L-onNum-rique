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

/* vendor/doctrine/migrations/docs/en/reference/introduction.rst */
class __TwigTemplate_2db04ca113b38e3081c688cfc59dd803d196c3a6372b85c01b6e148558345b98 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/docs/en/reference/introduction.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/docs/en/reference/introduction.rst"));

        // line 1
        echo "Introduction
============

The Doctrine Migrations project offers additional functionality on top of the
DBAL_ and ORM_ for versioning your database schema. It makes it easy and safe
to deploy changes to it in a way that can be reviewed and tested before being
deployed to production.

Installation
------------

You can use the Doctrine Migrations project by installing it with Composer_ or by downloading
the latest PHAR from the releases_ page on GitHub.

For this documentation exercise we will assume you are starting a new project so create a new folder to work in:

.. code-block:: sh

    \$ mkdir /data/doctrine/migrations-docs-example
    \$ cd /data/doctrine/migrations-docs-example

Composer
~~~~~~~~

Now to install with Composer it is as simple as running the following command in your project.

.. code-block:: sh

    composer require doctrine/migrations:2.0

Now you will have a file in ``vendor/bin`` available to run the migrations console application:

.. code-block:: sh

    ./vendor/bin/doctrine-migrations

PHAR
~~~~

To install by downloading the PHAR, you just need to download the latest PHAR file from the
releases_ page on GitHub.

Here is an example using the ``2.0.0`` release:

.. code-block:: sh

    wget https://github.com/doctrine/migrations/releases/download/v2.0.0/doctrine-migrations.phar

Now you can execute the PHAR like this:

.. code-block:: sh

    php doctrine-migrations.phar

:ref:`Next Chapter: Configuration <configuration>`

.. _Composer: https://getcomposer.org/
.. _DBAL: https://www.doctrine-project.org/projects/dbal.html
.. _ORM: https://www.doctrine-project.org/projects/orm.html
.. _releases: https://github.com/doctrine/migrations/releases
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/migrations/docs/en/reference/introduction.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Introduction
============

The Doctrine Migrations project offers additional functionality on top of the
DBAL_ and ORM_ for versioning your database schema. It makes it easy and safe
to deploy changes to it in a way that can be reviewed and tested before being
deployed to production.

Installation
------------

You can use the Doctrine Migrations project by installing it with Composer_ or by downloading
the latest PHAR from the releases_ page on GitHub.

For this documentation exercise we will assume you are starting a new project so create a new folder to work in:

.. code-block:: sh

    \$ mkdir /data/doctrine/migrations-docs-example
    \$ cd /data/doctrine/migrations-docs-example

Composer
~~~~~~~~

Now to install with Composer it is as simple as running the following command in your project.

.. code-block:: sh

    composer require doctrine/migrations:2.0

Now you will have a file in ``vendor/bin`` available to run the migrations console application:

.. code-block:: sh

    ./vendor/bin/doctrine-migrations

PHAR
~~~~

To install by downloading the PHAR, you just need to download the latest PHAR file from the
releases_ page on GitHub.

Here is an example using the ``2.0.0`` release:

.. code-block:: sh

    wget https://github.com/doctrine/migrations/releases/download/v2.0.0/doctrine-migrations.phar

Now you can execute the PHAR like this:

.. code-block:: sh

    php doctrine-migrations.phar

:ref:`Next Chapter: Configuration <configuration>`

.. _Composer: https://getcomposer.org/
.. _DBAL: https://www.doctrine-project.org/projects/dbal.html
.. _ORM: https://www.doctrine-project.org/projects/orm.html
.. _releases: https://github.com/doctrine/migrations/releases
", "vendor/doctrine/migrations/docs/en/reference/introduction.rst", "/var/www/public/DevLaon/templates/vendor/doctrine/migrations/docs/en/reference/introduction.rst");
    }
}
