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

/* vendor/doctrine/orm/docs/en/reference/security.rst */
class __TwigTemplate_d44b81cab87eb10706f4316a6a996dbac91fea0f107dfa5f4bdb990504aea358 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/docs/en/reference/security.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/docs/en/reference/security.rst"));

        // line 1
        echo "Security
========

The Doctrine library is operating very close to your database and as such needs
to handle and make assumptions about SQL injection vulnerabilities.

It is vital that you understand how Doctrine approaches security, because
we cannot protect you from SQL injection.

Please also read the documentation chapter on Security in Doctrine DBAL. This
page only handles Security issues in the ORM.

- `DBAL Security Page <http://www.doctrine-project.org/projects/doctrine-dbal/en/current/reference/security.html>`

If you find a Security bug in Doctrine, please report it on Jira and change the
Security Level to \"Security Issues\". It will be visible to Doctrine Core
developers and you only.

User input and Doctrine ORM
---------------------------

The ORM is much better at protecting against SQL injection than the DBAL alone.
You can consider the following APIs to be safe from SQL injection:

- ``\\Doctrine\\ORM\\EntityManager#find()`` and ``getReference()``.
- All values on Objects inserted and updated through ``Doctrine\\ORM\\EntityManager#persist()``
- All find methods on ``Doctrine\\ORM\\EntityRepository``.
- User Input set to DQL Queries or QueryBuilder methods through
    - ``setParameter()`` or variants
    - ``setMaxResults()``
    - ``setFirstResult()``
- Queries through the Criteria API on ``Doctrine\\ORM\\PersistentCollection`` and
  ``Doctrine\\ORM\\EntityRepository``.

You are **NOT** safe from SQL injection when using user input with:

- Expression API of ``Doctrine\\ORM\\QueryBuilder``
- Concatenating user input into DQL SELECT, UPDATE or DELETE statements or
  Native SQL.

This means SQL injections can only occur with Doctrine ORM when working with
Query Objects of any kind. The safe rule is to always use prepared statement
parameters for user objects when using a Query object.

.. warning::

    Insecure code follows, don't copy paste this.

The following example shows insecure DQL usage:

.. code-block:: php

    <?php

    // INSECURE
    \$dql = \"SELECT u
              FROM MyProject\\Entity\\User u
             WHERE u.status = '\" .  \$_GET['status'] . \"'
         ORDER BY \" . \$_GET['orderField'] . \" ASC\";

For Doctrine there is absolutely no way to find out which parts of ``\$dql`` are
from user input and which are not, even if we have our own parsing process
this is technically impossible. The correct way is:

.. code-block:: php

    <?php

    \$orderFieldWhitelist = array('email', 'username');
    \$orderField = \"email\";

    if (in_array(\$_GET['orderField'], \$orderFieldWhitelist)) {
        \$orderField = \$_GET['orderField'];
    }

    \$dql = \"SELECT u
              FROM MyProject\\Entity\\User u
             WHERE u.status = ?1
         ORDER BY u.\" . \$orderField . \" ASC\";

    \$query = \$entityManager->createQuery(\$dql);
    \$query->setParameter(1, \$_GET['status']);


Preventing Mass Assignment Vulnerabilities
------------------------------------------

ORMs are very convenient for CRUD applications and Doctrine is no exception.
However CRUD apps are often vulnerable to mass assignment security problems
when implemented naively.

Doctrine is not vulnerable to this problem out of the box, but you can easily
make your entities vulnerable to mass assignment when you add methods of
the kind ``updateFromArray()`` or ``updateFromJson()`` to them. A vulnerable
entity might look like this:

.. code-block:: php

    <?php

    /**
     * @Entity
     */
    class InsecureEntity
    {
        /** @Id @Column(type=\"integer\") @GeneratedValue */
        private \$id;
        /** @Column */
        private \$email;
        /** @Column(type=\"boolean\") */
        private \$isAdmin;

        public function fromArray(array \$userInput)
        {
            foreach (\$userInput as \$key => \$value) {
                \$this->\$key = \$value;
            }
        }
    }

Now the possiblity of mass-asignment exists on this entity and can
be exploited by attackers to set the \"isAdmin\" flag to true on any
object when you pass the whole request data to this method like:

.. code-block:: php

    <?php
    \$entity = new InsecureEntity();
    \$entity->fromArray(\$_POST);

    \$entityManager->persist(\$entity);
    \$entityManager->flush();

You can spot this problem in this very simple example easily. However
in combination with frameworks and form libraries it might not be
so obvious when this issue arises. Be careful to avoid this
kind of mistake.

How to fix this problem? You should always have a whitelist
of allowed key to set via mass assignment functions.

.. code-block:: php

    public function fromArray(array \$userInput, \$allowedFields = array())
    {
        foreach (\$userInput as \$key => \$value) {
            if (in_array(\$key, \$allowedFields)) {
                \$this->\$key = \$value;
            }
        }
    }
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/docs/en/reference/security.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Security
========

The Doctrine library is operating very close to your database and as such needs
to handle and make assumptions about SQL injection vulnerabilities.

It is vital that you understand how Doctrine approaches security, because
we cannot protect you from SQL injection.

Please also read the documentation chapter on Security in Doctrine DBAL. This
page only handles Security issues in the ORM.

- `DBAL Security Page <http://www.doctrine-project.org/projects/doctrine-dbal/en/current/reference/security.html>`

If you find a Security bug in Doctrine, please report it on Jira and change the
Security Level to \"Security Issues\". It will be visible to Doctrine Core
developers and you only.

User input and Doctrine ORM
---------------------------

The ORM is much better at protecting against SQL injection than the DBAL alone.
You can consider the following APIs to be safe from SQL injection:

- ``\\Doctrine\\ORM\\EntityManager#find()`` and ``getReference()``.
- All values on Objects inserted and updated through ``Doctrine\\ORM\\EntityManager#persist()``
- All find methods on ``Doctrine\\ORM\\EntityRepository``.
- User Input set to DQL Queries or QueryBuilder methods through
    - ``setParameter()`` or variants
    - ``setMaxResults()``
    - ``setFirstResult()``
- Queries through the Criteria API on ``Doctrine\\ORM\\PersistentCollection`` and
  ``Doctrine\\ORM\\EntityRepository``.

You are **NOT** safe from SQL injection when using user input with:

- Expression API of ``Doctrine\\ORM\\QueryBuilder``
- Concatenating user input into DQL SELECT, UPDATE or DELETE statements or
  Native SQL.

This means SQL injections can only occur with Doctrine ORM when working with
Query Objects of any kind. The safe rule is to always use prepared statement
parameters for user objects when using a Query object.

.. warning::

    Insecure code follows, don't copy paste this.

The following example shows insecure DQL usage:

.. code-block:: php

    <?php

    // INSECURE
    \$dql = \"SELECT u
              FROM MyProject\\Entity\\User u
             WHERE u.status = '\" .  \$_GET['status'] . \"'
         ORDER BY \" . \$_GET['orderField'] . \" ASC\";

For Doctrine there is absolutely no way to find out which parts of ``\$dql`` are
from user input and which are not, even if we have our own parsing process
this is technically impossible. The correct way is:

.. code-block:: php

    <?php

    \$orderFieldWhitelist = array('email', 'username');
    \$orderField = \"email\";

    if (in_array(\$_GET['orderField'], \$orderFieldWhitelist)) {
        \$orderField = \$_GET['orderField'];
    }

    \$dql = \"SELECT u
              FROM MyProject\\Entity\\User u
             WHERE u.status = ?1
         ORDER BY u.\" . \$orderField . \" ASC\";

    \$query = \$entityManager->createQuery(\$dql);
    \$query->setParameter(1, \$_GET['status']);


Preventing Mass Assignment Vulnerabilities
------------------------------------------

ORMs are very convenient for CRUD applications and Doctrine is no exception.
However CRUD apps are often vulnerable to mass assignment security problems
when implemented naively.

Doctrine is not vulnerable to this problem out of the box, but you can easily
make your entities vulnerable to mass assignment when you add methods of
the kind ``updateFromArray()`` or ``updateFromJson()`` to them. A vulnerable
entity might look like this:

.. code-block:: php

    <?php

    /**
     * @Entity
     */
    class InsecureEntity
    {
        /** @Id @Column(type=\"integer\") @GeneratedValue */
        private \$id;
        /** @Column */
        private \$email;
        /** @Column(type=\"boolean\") */
        private \$isAdmin;

        public function fromArray(array \$userInput)
        {
            foreach (\$userInput as \$key => \$value) {
                \$this->\$key = \$value;
            }
        }
    }

Now the possiblity of mass-asignment exists on this entity and can
be exploited by attackers to set the \"isAdmin\" flag to true on any
object when you pass the whole request data to this method like:

.. code-block:: php

    <?php
    \$entity = new InsecureEntity();
    \$entity->fromArray(\$_POST);

    \$entityManager->persist(\$entity);
    \$entityManager->flush();

You can spot this problem in this very simple example easily. However
in combination with frameworks and form libraries it might not be
so obvious when this issue arises. Be careful to avoid this
kind of mistake.

How to fix this problem? You should always have a whitelist
of allowed key to set via mass assignment functions.

.. code-block:: php

    public function fromArray(array \$userInput, \$allowedFields = array())
    {
        foreach (\$userInput as \$key => \$value) {
            if (in_array(\$key, \$allowedFields)) {
                \$this->\$key = \$value;
            }
        }
    }
", "vendor/doctrine/orm/docs/en/reference/security.rst", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/docs/en/reference/security.rst");
    }
}
