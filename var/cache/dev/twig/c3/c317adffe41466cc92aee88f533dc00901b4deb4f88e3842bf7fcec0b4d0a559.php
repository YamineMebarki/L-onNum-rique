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

/* vendor/doctrine/orm/docs/en/tutorials/pagination.rst */
class __TwigTemplate_d9d4a0ae50546a40d616bbb36eb75f8f6c535f6ccd98ff4430ef8969be236666 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/docs/en/tutorials/pagination.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/docs/en/tutorials/pagination.rst"));

        // line 1
        echo "Pagination
==========

.. versionadded:: 2.2

Starting with version 2.2 Doctrine ships with a Paginator for DQL queries. It
has a very simple API and implements the SPL interfaces ``Countable`` and
``IteratorAggregate``.

.. code-block:: php

    <?php
    use Doctrine\\ORM\\Tools\\Pagination\\Paginator;

    \$dql = \"SELECT p, c FROM BlogPost p JOIN p.comments c\";
    \$query = \$entityManager->createQuery(\$dql)
                           ->setFirstResult(0)
                           ->setMaxResults(100);

    \$paginator = new Paginator(\$query, \$fetchJoinCollection = true);

    \$c = count(\$paginator);
    foreach (\$paginator as \$post) {
        echo \$post->getHeadline() . \"\\n\";
    }

Paginating Doctrine queries is not as simple as you might think in the
beginning. If you have complex fetch-join scenarios with one-to-many or
many-to-many associations using the \"default\" LIMIT functionality of database
vendors is not sufficient to get the correct results.

By default the pagination extension does the following steps to compute the
correct result:

- Perform a Count query using `DISTINCT` keyword.
- Perform a Limit Subquery with `DISTINCT` to find all ids of the entity in from on the current page.
- Perform a WHERE IN query to get all results for the current page.

This behavior is only necessary if you actually fetch join a to-many
collection. You can disable this behavior by setting the
``\$fetchJoinCollection`` flag to ``false``; in that case only 2 instead of the 3 queries
described are executed. We hope to automate the detection for this in
the future.
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/docs/en/tutorials/pagination.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Pagination
==========

.. versionadded:: 2.2

Starting with version 2.2 Doctrine ships with a Paginator for DQL queries. It
has a very simple API and implements the SPL interfaces ``Countable`` and
``IteratorAggregate``.

.. code-block:: php

    <?php
    use Doctrine\\ORM\\Tools\\Pagination\\Paginator;

    \$dql = \"SELECT p, c FROM BlogPost p JOIN p.comments c\";
    \$query = \$entityManager->createQuery(\$dql)
                           ->setFirstResult(0)
                           ->setMaxResults(100);

    \$paginator = new Paginator(\$query, \$fetchJoinCollection = true);

    \$c = count(\$paginator);
    foreach (\$paginator as \$post) {
        echo \$post->getHeadline() . \"\\n\";
    }

Paginating Doctrine queries is not as simple as you might think in the
beginning. If you have complex fetch-join scenarios with one-to-many or
many-to-many associations using the \"default\" LIMIT functionality of database
vendors is not sufficient to get the correct results.

By default the pagination extension does the following steps to compute the
correct result:

- Perform a Count query using `DISTINCT` keyword.
- Perform a Limit Subquery with `DISTINCT` to find all ids of the entity in from on the current page.
- Perform a WHERE IN query to get all results for the current page.

This behavior is only necessary if you actually fetch join a to-many
collection. You can disable this behavior by setting the
``\$fetchJoinCollection`` flag to ``false``; in that case only 2 instead of the 3 queries
described are executed. We hope to automate the detection for this in
the future.
", "vendor/doctrine/orm/docs/en/tutorials/pagination.rst", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/docs/en/tutorials/pagination.rst");
    }
}
