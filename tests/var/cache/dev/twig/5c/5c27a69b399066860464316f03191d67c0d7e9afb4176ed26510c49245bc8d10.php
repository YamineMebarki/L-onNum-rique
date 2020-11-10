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

/* vendor/doctrine/orm/docs/en/reference/yaml-mapping.rst */
class __TwigTemplate_44c85d6c9dec05fe1527b1c78dc0eb83c3415a843ab8440abc751d65f0600f4c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/docs/en/reference/yaml-mapping.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/docs/en/reference/yaml-mapping.rst"));

        // line 1
        echo "YAML Mapping
============

.. note::
    The YAML driver is deprecated and will be removed in version 3.0.
    It is strongly recommended to switch to one of the other mappings.

The YAML mapping driver enables you to provide the ORM metadata in
form of YAML documents.

The YAML mapping document of a class is loaded on-demand the first
time it is requested and subsequently stored in the metadata cache.
In order to work, this requires certain conventions:


-  Each entity/mapped superclass must get its own dedicated YAML
   mapping document.
-  The name of the mapping document must consist of the fully
   qualified name of the class, where namespace separators are
   replaced by dots (.).
-  All mapping documents should get the extension \".dcm.yml\" to
   identify it as a Doctrine mapping file. This is more of a
   convention and you are not forced to do this. You can change the
   file extension easily enough.

.. code-block:: php

    <?php
    \$driver->setFileExtension('.yml');

It is recommended to put all YAML mapping documents in a single
folder but you can spread the documents over several folders if you
want to. In order to tell the YamlDriver where to look for your
mapping documents, supply an array of paths as the first argument
of the constructor, like this:

.. code-block:: php

    <?php
    use Doctrine\\ORM\\Mapping\\Driver\\YamlDriver;

    // \$config instanceof Doctrine\\ORM\\Configuration
    \$driver = new YamlDriver(array('/path/to/files'));
    \$config->setMetadataDriverImpl(\$driver);

Simplified YAML Driver
~~~~~~~~~~~~~~~~~~~~~~

The Symfony project sponsored a driver that simplifies usage of the YAML Driver.
The changes between the original driver are:

- File Extension is .orm.yml
- Filenames are shortened, \"MyProject\\\\Entities\\\\User\" will become User.orm.yml
- You can add a global file and add multiple entities in this file.

Configuration of this client works a little bit different:

.. code-block:: php

    <?php
    \$namespaces = array(
        '/path/to/files1' => 'MyProject\\Entities',
        '/path/to/files2' => 'OtherProject\\Entities'
    );
    \$driver = new \\Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver(\$namespaces);
    \$driver->setGlobalBasename('global'); // global.orm.yml

Example
-------

As a quick start, here is a small example document that makes use
of several common elements:

.. code-block:: yaml

    # Doctrine.Tests.ORM.Mapping.User.dcm.yml
    Doctrine\\Tests\\ORM\\Mapping\\User:
      type: entity
      repositoryClass: Doctrine\\Tests\\ORM\\Mapping\\UserRepository
      table: cms_users
      schema: schema_name # The schema the table lies in, for platforms that support schemas (Optional, >= 2.5)
      readOnly: true
      indexes:
        name_index:
          columns: [ name ]
      id:
        id:
          type: integer
          generator:
            strategy: AUTO
      fields:
        name:
          type: string
          length: 50
        email:
          type: string
          length: 32
          column: user_email
          unique: true
          options:
            fixed: true
            comment: User's email address
        loginCount:
          type: integer
          column: login_count
          nullable: false
          options:
            unsigned: true
            default: 0
      oneToOne:
        address:
          targetEntity: Address
          joinColumn:
            name: address_id
            referencedColumnName: id
            onDelete: CASCADE
      oneToMany:
        phonenumbers:
          targetEntity: Phonenumber
          mappedBy: user
          cascade: [\"persist\", \"merge\"]
      manyToMany:
        groups:
          targetEntity: Group
          joinTable:
            name: cms_users_groups
            joinColumns:
              user_id:
                referencedColumnName: id
            inverseJoinColumns:
              group_id:
                referencedColumnName: id
      lifecycleCallbacks:
        prePersist: [ doStuffOnPrePersist, doOtherStuffOnPrePersistToo ]
        postPersist: [ doStuffOnPostPersist ]

Be aware that class-names specified in the YAML files should be
fully qualified.

Reference
~~~~~~~~~~~~~~~~~~~~~~

Unique Constraints
------------------

It is possible to define unique constraints by the following declaration:

.. code-block:: yaml

    # ECommerceProduct.orm.yml
    ECommerceProduct:
      type: entity
      fields:
        # definition of some fields
      uniqueConstraints:
        search_idx:
          columns: [ name, email ]

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/docs/en/reference/yaml-mapping.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("YAML Mapping
============

.. note::
    The YAML driver is deprecated and will be removed in version 3.0.
    It is strongly recommended to switch to one of the other mappings.

The YAML mapping driver enables you to provide the ORM metadata in
form of YAML documents.

The YAML mapping document of a class is loaded on-demand the first
time it is requested and subsequently stored in the metadata cache.
In order to work, this requires certain conventions:


-  Each entity/mapped superclass must get its own dedicated YAML
   mapping document.
-  The name of the mapping document must consist of the fully
   qualified name of the class, where namespace separators are
   replaced by dots (.).
-  All mapping documents should get the extension \".dcm.yml\" to
   identify it as a Doctrine mapping file. This is more of a
   convention and you are not forced to do this. You can change the
   file extension easily enough.

.. code-block:: php

    <?php
    \$driver->setFileExtension('.yml');

It is recommended to put all YAML mapping documents in a single
folder but you can spread the documents over several folders if you
want to. In order to tell the YamlDriver where to look for your
mapping documents, supply an array of paths as the first argument
of the constructor, like this:

.. code-block:: php

    <?php
    use Doctrine\\ORM\\Mapping\\Driver\\YamlDriver;

    // \$config instanceof Doctrine\\ORM\\Configuration
    \$driver = new YamlDriver(array('/path/to/files'));
    \$config->setMetadataDriverImpl(\$driver);

Simplified YAML Driver
~~~~~~~~~~~~~~~~~~~~~~

The Symfony project sponsored a driver that simplifies usage of the YAML Driver.
The changes between the original driver are:

- File Extension is .orm.yml
- Filenames are shortened, \"MyProject\\\\Entities\\\\User\" will become User.orm.yml
- You can add a global file and add multiple entities in this file.

Configuration of this client works a little bit different:

.. code-block:: php

    <?php
    \$namespaces = array(
        '/path/to/files1' => 'MyProject\\Entities',
        '/path/to/files2' => 'OtherProject\\Entities'
    );
    \$driver = new \\Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver(\$namespaces);
    \$driver->setGlobalBasename('global'); // global.orm.yml

Example
-------

As a quick start, here is a small example document that makes use
of several common elements:

.. code-block:: yaml

    # Doctrine.Tests.ORM.Mapping.User.dcm.yml
    Doctrine\\Tests\\ORM\\Mapping\\User:
      type: entity
      repositoryClass: Doctrine\\Tests\\ORM\\Mapping\\UserRepository
      table: cms_users
      schema: schema_name # The schema the table lies in, for platforms that support schemas (Optional, >= 2.5)
      readOnly: true
      indexes:
        name_index:
          columns: [ name ]
      id:
        id:
          type: integer
          generator:
            strategy: AUTO
      fields:
        name:
          type: string
          length: 50
        email:
          type: string
          length: 32
          column: user_email
          unique: true
          options:
            fixed: true
            comment: User's email address
        loginCount:
          type: integer
          column: login_count
          nullable: false
          options:
            unsigned: true
            default: 0
      oneToOne:
        address:
          targetEntity: Address
          joinColumn:
            name: address_id
            referencedColumnName: id
            onDelete: CASCADE
      oneToMany:
        phonenumbers:
          targetEntity: Phonenumber
          mappedBy: user
          cascade: [\"persist\", \"merge\"]
      manyToMany:
        groups:
          targetEntity: Group
          joinTable:
            name: cms_users_groups
            joinColumns:
              user_id:
                referencedColumnName: id
            inverseJoinColumns:
              group_id:
                referencedColumnName: id
      lifecycleCallbacks:
        prePersist: [ doStuffOnPrePersist, doOtherStuffOnPrePersistToo ]
        postPersist: [ doStuffOnPostPersist ]

Be aware that class-names specified in the YAML files should be
fully qualified.

Reference
~~~~~~~~~~~~~~~~~~~~~~

Unique Constraints
------------------

It is possible to define unique constraints by the following declaration:

.. code-block:: yaml

    # ECommerceProduct.orm.yml
    ECommerceProduct:
      type: entity
      fields:
        # definition of some fields
      uniqueConstraints:
        search_idx:
          columns: [ name, email ]

", "vendor/doctrine/orm/docs/en/reference/yaml-mapping.rst", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/docs/en/reference/yaml-mapping.rst");
    }
}
