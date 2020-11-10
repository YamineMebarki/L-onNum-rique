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

/* vendor/doctrine/migrations/docs/en/reference/version-numbers.rst */
class __TwigTemplate_c9d5116149697f14288468a4ac6c2bab9ba33c4208a4dab6dc9e7087e5cb0441 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/docs/en/reference/version-numbers.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/docs/en/reference/version-numbers.rst"));

        // line 1
        echo "Version Numbers
===============

When :doc:`Generating Migrations <generating-migrations>` the newly created
classes are generated with the name ``Version{date}`` with ``{date}`` having a
``YmdHis`` `format <http://php.net/manual/en/function.date.php>`_. This format
is important as it allows the migrations to be correctly ordered.

.. note::

    Starting with version 1.5 when loading migration classes, Doctrine does a
    ``sort(\$versions, SORT_STRING)`` on version numbers. This can cause
    problems with custom version numbers:

.. code-block:: php

    <?php

    \$versions = [
        'Version1',
        'Version2',
        // ...
        'Version10',
    ];

    sort(\$versions, SORT_STRING);

    var_dump(\$versions);

    /*
    array(3) {
      [0] =>
      string(8) \"Version1\"
      [1] =>
      string(9) \"Version10\"
      [2] =>
      string(8) \"Version2\"
    }
    */

The custom version numbers above end up out of order which may cause damage to a database.

It is **strongly recommended** that the ``Version{date}`` migration class name format is used and that the various
:doc:`tools for generating migrations <generating-migrations>` are used.

Should some custom migration numbers be necessary, keeping the version number the same length as the date format
(14 total characters) and padding it to the left with zeros should work.

.. code-block:: php

    <?php

    \$versions = [
        'Version00000000000001',
        'Version00000000000002',
        // ...
        'Version00000000000010',
        'Version20180107070000', // generated version
    ];

    sort(\$versions, SORT_STRING);

    var_dump(\$versions);
    /*
    array(4) {
      [0] =>
      string(21) \"Version00000000000001\"
      [1] =>
      string(21) \"Version00000000000002\"
      [2] =>
      string(21) \"Version00000000000010\"
      [3] =>
      string(21) \"Version20180107070000\"
    }
    */

Please note that migrating to this new, zero-padded format may require
:ref:`manual version table intervention <managing-migrations#managing-the-version-table>` if the
versions have previously been applied.

:ref:`Next Chapter: Integrations <integrations>`
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/migrations/docs/en/reference/version-numbers.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Version Numbers
===============

When :doc:`Generating Migrations <generating-migrations>` the newly created
classes are generated with the name ``Version{date}`` with ``{date}`` having a
``YmdHis`` `format <http://php.net/manual/en/function.date.php>`_. This format
is important as it allows the migrations to be correctly ordered.

.. note::

    Starting with version 1.5 when loading migration classes, Doctrine does a
    ``sort(\$versions, SORT_STRING)`` on version numbers. This can cause
    problems with custom version numbers:

.. code-block:: php

    <?php

    \$versions = [
        'Version1',
        'Version2',
        // ...
        'Version10',
    ];

    sort(\$versions, SORT_STRING);

    var_dump(\$versions);

    /*
    array(3) {
      [0] =>
      string(8) \"Version1\"
      [1] =>
      string(9) \"Version10\"
      [2] =>
      string(8) \"Version2\"
    }
    */

The custom version numbers above end up out of order which may cause damage to a database.

It is **strongly recommended** that the ``Version{date}`` migration class name format is used and that the various
:doc:`tools for generating migrations <generating-migrations>` are used.

Should some custom migration numbers be necessary, keeping the version number the same length as the date format
(14 total characters) and padding it to the left with zeros should work.

.. code-block:: php

    <?php

    \$versions = [
        'Version00000000000001',
        'Version00000000000002',
        // ...
        'Version00000000000010',
        'Version20180107070000', // generated version
    ];

    sort(\$versions, SORT_STRING);

    var_dump(\$versions);
    /*
    array(4) {
      [0] =>
      string(21) \"Version00000000000001\"
      [1] =>
      string(21) \"Version00000000000002\"
      [2] =>
      string(21) \"Version00000000000010\"
      [3] =>
      string(21) \"Version20180107070000\"
    }
    */

Please note that migrating to this new, zero-padded format may require
:ref:`manual version table intervention <managing-migrations#managing-the-version-table>` if the
versions have previously been applied.

:ref:`Next Chapter: Integrations <integrations>`
", "vendor/doctrine/migrations/docs/en/reference/version-numbers.rst", "/var/www/public/DevLaon/templates/vendor/doctrine/migrations/docs/en/reference/version-numbers.rst");
    }
}
