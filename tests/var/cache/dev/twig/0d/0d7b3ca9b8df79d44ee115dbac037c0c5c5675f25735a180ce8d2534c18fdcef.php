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

/* vendor/doctrine/instantiator/docs/en/index.rst */
class __TwigTemplate_6e58219f8cb4a05f77a750be06373791442198e19db5cbd773d4bb41fa1370e7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/instantiator/docs/en/index.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/instantiator/docs/en/index.rst"));

        // line 1
        echo "Introduction
============

This library provides a way of avoiding usage of constructors when instantiating PHP classes.

Installation
============

The suggested installation method is via `composer`_:

.. code-block:: console

   \$ composer require doctrine/instantiator

Usage
=====

The instantiator is able to create new instances of any class without
using the constructor or any API of the class itself:

.. code-block:: php

    <?php

    use Doctrine\\Instantiator\\Instantiator;
    use App\\Entities\\User;

    \$instantiator = new Instantiator();

    \$user = \$instantiator->instantiate(User::class);

Contributing
============

-  Follow the `Doctrine Coding Standard`_
-  The project will follow strict `object calisthenics`_
-  Any contribution must provide tests for additional introduced
   conditions
-  Any un-confirmed issue needs a failing test case before being
   accepted
-  Pull requests must be sent from a new hotfix/feature branch, not from
   ``master``.

Testing
=======

The PHPUnit version to be used is the one installed as a dev- dependency
via composer:

.. code-block:: console

   \$ ./vendor/bin/phpunit

Accepted coverage for new contributions is 80%. Any contribution not
satisfying this requirement won’t be merged.

Credits
=======

This library was migrated from `ocramius/instantiator`_, which has been
donated to the doctrine organization, and which is now deprecated in
favour of this package.

.. _composer: https://getcomposer.org/
.. _CONTRIBUTING.md: CONTRIBUTING.md
.. _ocramius/instantiator: https://github.com/Ocramius/Instantiator
.. _Doctrine Coding Standard: https://github.com/doctrine/coding-standard
.. _object calisthenics: http://www.slideshare.net/guilhermeblanco/object-calisthenics-applied-to-php
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/instantiator/docs/en/index.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Introduction
============

This library provides a way of avoiding usage of constructors when instantiating PHP classes.

Installation
============

The suggested installation method is via `composer`_:

.. code-block:: console

   \$ composer require doctrine/instantiator

Usage
=====

The instantiator is able to create new instances of any class without
using the constructor or any API of the class itself:

.. code-block:: php

    <?php

    use Doctrine\\Instantiator\\Instantiator;
    use App\\Entities\\User;

    \$instantiator = new Instantiator();

    \$user = \$instantiator->instantiate(User::class);

Contributing
============

-  Follow the `Doctrine Coding Standard`_
-  The project will follow strict `object calisthenics`_
-  Any contribution must provide tests for additional introduced
   conditions
-  Any un-confirmed issue needs a failing test case before being
   accepted
-  Pull requests must be sent from a new hotfix/feature branch, not from
   ``master``.

Testing
=======

The PHPUnit version to be used is the one installed as a dev- dependency
via composer:

.. code-block:: console

   \$ ./vendor/bin/phpunit

Accepted coverage for new contributions is 80%. Any contribution not
satisfying this requirement won’t be merged.

Credits
=======

This library was migrated from `ocramius/instantiator`_, which has been
donated to the doctrine organization, and which is now deprecated in
favour of this package.

.. _composer: https://getcomposer.org/
.. _CONTRIBUTING.md: CONTRIBUTING.md
.. _ocramius/instantiator: https://github.com/Ocramius/Instantiator
.. _Doctrine Coding Standard: https://github.com/doctrine/coding-standard
.. _object calisthenics: http://www.slideshare.net/guilhermeblanco/object-calisthenics-applied-to-php
", "vendor/doctrine/instantiator/docs/en/index.rst", "/var/www/public/DevLaon/templates/vendor/doctrine/instantiator/docs/en/index.rst");
    }
}
