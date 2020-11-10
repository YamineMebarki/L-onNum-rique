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

/* vendor/doctrine/orm/docs/en/cookbook/working-with-datetime.rst */
class __TwigTemplate_b81631a7c844cbd4994a3d58059193b11fadf5b838e3ac4129191790f54fdb5e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/docs/en/cookbook/working-with-datetime.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/docs/en/cookbook/working-with-datetime.rst"));

        // line 1
        echo "Working with DateTime Instances
===============================

There are many nitty gritty details when working with PHPs DateTime instances. You have to know their inner
workings pretty well not to make mistakes with date handling. This cookbook entry holds several
interesting pieces of information on how to work with PHP DateTime instances in Doctrine 2.

DateTime changes are detected by Reference
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

When calling ``EntityManager#flush()`` Doctrine computes the changesets of all the currently managed entities
and saves the differences to the database. In case of object properties (@Column(type=\"datetime\") or @Column(type=\"object\"))
these comparisons are always made **BY REFERENCE**. That means the following change will **NOT** be saved into the database:

.. code-block:: php

    <?php
    /** @Entity */
    class Article
    {
        /** @Column(type=\"datetime\") */
        private \$updated;

        public function setUpdated()
        {
            // will NOT be saved in the database
            \$this->updated->modify(\"now\");
        }
    }

The way to go would be:

.. code-block:: php

    <?php
    class Article
    {
        public function setUpdated()
        {
            // WILL be saved in the database
            \$this->updated = new \\DateTime(\"now\");
        }
    }

Default Timezone Gotcha
~~~~~~~~~~~~~~~~~~~~~~~

By default Doctrine assumes that you are working with a default timezone. Each DateTime instance that
is created by Doctrine will be assigned the timezone that is currently the default, either through
the ``date.timezone`` ini setting or by calling ``date_default_timezone_set()``.

This is very important to handle correctly if your application runs on different servers or is moved from one to another server
(with different timezone settings). You have to make sure that the timezone is the correct one
on all this systems.

Handling different Timezones with the DateTime Type
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

If you first come across the requirement to save different timezones you may be still optimistic about how
to manage this mess,
however let me crush your expectations fast. There is not a single database out there (supported by Doctrine 2)
that supports timezones correctly. Correctly here means that you can cover all the use-cases that
can come up with timezones. If you don't believe me you should read up on `Storing DateTime
in Databases <http://derickrethans.nl/storing-date-time-in-database.html>`_.

The problem is simple. Not a single database vendor saves the timezone, only the differences to UTC.
However with frequent daylight saving and political timezone changes you can have a UTC offset that moves
in different offset directions depending on the real location.

The solution for this dilemma is simple. Don't use timezones with DateTime and Doctrine 2. However there is a workaround
that even allows correct date-time handling with timezones:

1. Always convert any DateTime instance to UTC.
2. Only set Timezones for displaying purposes
3. Save the Timezone in the Entity for persistence.

Say we have an application for an international postal company and employees insert events regarding postal-package
around the world, in their current timezones. To determine the exact time an event occurred means to save both
the UTC time at the time of the booking and the timezone the event happened in.

.. code-block:: php

    <?php

    namespace DoctrineExtensions\\DBAL\\Types;

    use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
    use Doctrine\\DBAL\\Types\\ConversionException;
    use Doctrine\\DBAL\\Types\\DateTimeType;

    class UTCDateTimeType extends DateTimeType
    {
        static private \$utc;

        public function convertToDatabaseValue(\$value, AbstractPlatform \$platform)
        {
            if (\$value instanceof \\DateTime) {
                \$value->setTimezone(self::getUtc());
            }

            return parent::convertToDatabaseValue(\$value, \$platform);
        }

        public function convertToPHPValue(\$value, AbstractPlatform \$platform)
        {
            if (null === \$value || \$value instanceof \\DateTime) {
                return \$value;
            }

            \$converted = \\DateTime::createFromFormat(
                \$platform->getDateTimeFormatString(),
                \$value,
                self::\$utc ? self::\$utc : self::\$utc = new \\DateTimeZone('UTC')
            );

            if (! \$converted) {
                throw ConversionException::conversionFailedFormat(
                    \$value,
                    \$this->getName(),
                    \$platform->getDateTimeFormatString()
                );
            }

            return \$converted;
        }
    }

This database type makes sure that every DateTime instance is always saved in UTC, relative
to the current timezone that the passed DateTime instance has.

To actually use this new type instead of the default ``datetime`` type, you need to run following
code before bootstrapping the ORM:

.. code-block:: php

    <?php

    use Doctrine\\DBAL\\Types\\Type;
    use DoctrineExtensions\\DBAL\\Types\\UTCDateTimeType;

    Type::overrideType('datetime', UTCDateTimeType::class);
    Type::overrideType('datetimetz', UTCDateTimeType::class);


To be able to transform these values
back into their real timezone you have to save the timezone in a separate field of the entity
requiring timezoned datetimes:

.. code-block:: php

    <?php
    namespace Shipping;

    /**
     * @Entity
     */
    class Event
    {
        /** @Column(type=\"datetime\") */
        private \$created;

        /** @Column(type=\"string\") */
        private \$timezone;

        /**
         * @var bool
         */
        private \$localized = false;

        public function __construct(\\DateTime \$createDate)
        {
            \$this->localized = true;
            \$this->created = \$createDate;
            \$this->timezone = \$createDate->getTimeZone()->getName();
        }

        public function getCreated()
        {
            if (!\$this->localized) {
                \$this->created->setTimeZone(new \\DateTimeZone(\$this->timezone));
            }
            return \$this->created;
        }
    }

This snippet makes use of the previously discussed \"changeset by reference only\" property of
objects. That means a new DateTime will only be used during updating if the reference
changes between retrieval and flush operation. This means we can easily go and modify
the instance by setting the previous local timezone.
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/docs/en/cookbook/working-with-datetime.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Working with DateTime Instances
===============================

There are many nitty gritty details when working with PHPs DateTime instances. You have to know their inner
workings pretty well not to make mistakes with date handling. This cookbook entry holds several
interesting pieces of information on how to work with PHP DateTime instances in Doctrine 2.

DateTime changes are detected by Reference
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

When calling ``EntityManager#flush()`` Doctrine computes the changesets of all the currently managed entities
and saves the differences to the database. In case of object properties (@Column(type=\"datetime\") or @Column(type=\"object\"))
these comparisons are always made **BY REFERENCE**. That means the following change will **NOT** be saved into the database:

.. code-block:: php

    <?php
    /** @Entity */
    class Article
    {
        /** @Column(type=\"datetime\") */
        private \$updated;

        public function setUpdated()
        {
            // will NOT be saved in the database
            \$this->updated->modify(\"now\");
        }
    }

The way to go would be:

.. code-block:: php

    <?php
    class Article
    {
        public function setUpdated()
        {
            // WILL be saved in the database
            \$this->updated = new \\DateTime(\"now\");
        }
    }

Default Timezone Gotcha
~~~~~~~~~~~~~~~~~~~~~~~

By default Doctrine assumes that you are working with a default timezone. Each DateTime instance that
is created by Doctrine will be assigned the timezone that is currently the default, either through
the ``date.timezone`` ini setting or by calling ``date_default_timezone_set()``.

This is very important to handle correctly if your application runs on different servers or is moved from one to another server
(with different timezone settings). You have to make sure that the timezone is the correct one
on all this systems.

Handling different Timezones with the DateTime Type
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

If you first come across the requirement to save different timezones you may be still optimistic about how
to manage this mess,
however let me crush your expectations fast. There is not a single database out there (supported by Doctrine 2)
that supports timezones correctly. Correctly here means that you can cover all the use-cases that
can come up with timezones. If you don't believe me you should read up on `Storing DateTime
in Databases <http://derickrethans.nl/storing-date-time-in-database.html>`_.

The problem is simple. Not a single database vendor saves the timezone, only the differences to UTC.
However with frequent daylight saving and political timezone changes you can have a UTC offset that moves
in different offset directions depending on the real location.

The solution for this dilemma is simple. Don't use timezones with DateTime and Doctrine 2. However there is a workaround
that even allows correct date-time handling with timezones:

1. Always convert any DateTime instance to UTC.
2. Only set Timezones for displaying purposes
3. Save the Timezone in the Entity for persistence.

Say we have an application for an international postal company and employees insert events regarding postal-package
around the world, in their current timezones. To determine the exact time an event occurred means to save both
the UTC time at the time of the booking and the timezone the event happened in.

.. code-block:: php

    <?php

    namespace DoctrineExtensions\\DBAL\\Types;

    use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
    use Doctrine\\DBAL\\Types\\ConversionException;
    use Doctrine\\DBAL\\Types\\DateTimeType;

    class UTCDateTimeType extends DateTimeType
    {
        static private \$utc;

        public function convertToDatabaseValue(\$value, AbstractPlatform \$platform)
        {
            if (\$value instanceof \\DateTime) {
                \$value->setTimezone(self::getUtc());
            }

            return parent::convertToDatabaseValue(\$value, \$platform);
        }

        public function convertToPHPValue(\$value, AbstractPlatform \$platform)
        {
            if (null === \$value || \$value instanceof \\DateTime) {
                return \$value;
            }

            \$converted = \\DateTime::createFromFormat(
                \$platform->getDateTimeFormatString(),
                \$value,
                self::\$utc ? self::\$utc : self::\$utc = new \\DateTimeZone('UTC')
            );

            if (! \$converted) {
                throw ConversionException::conversionFailedFormat(
                    \$value,
                    \$this->getName(),
                    \$platform->getDateTimeFormatString()
                );
            }

            return \$converted;
        }
    }

This database type makes sure that every DateTime instance is always saved in UTC, relative
to the current timezone that the passed DateTime instance has.

To actually use this new type instead of the default ``datetime`` type, you need to run following
code before bootstrapping the ORM:

.. code-block:: php

    <?php

    use Doctrine\\DBAL\\Types\\Type;
    use DoctrineExtensions\\DBAL\\Types\\UTCDateTimeType;

    Type::overrideType('datetime', UTCDateTimeType::class);
    Type::overrideType('datetimetz', UTCDateTimeType::class);


To be able to transform these values
back into their real timezone you have to save the timezone in a separate field of the entity
requiring timezoned datetimes:

.. code-block:: php

    <?php
    namespace Shipping;

    /**
     * @Entity
     */
    class Event
    {
        /** @Column(type=\"datetime\") */
        private \$created;

        /** @Column(type=\"string\") */
        private \$timezone;

        /**
         * @var bool
         */
        private \$localized = false;

        public function __construct(\\DateTime \$createDate)
        {
            \$this->localized = true;
            \$this->created = \$createDate;
            \$this->timezone = \$createDate->getTimeZone()->getName();
        }

        public function getCreated()
        {
            if (!\$this->localized) {
                \$this->created->setTimeZone(new \\DateTimeZone(\$this->timezone));
            }
            return \$this->created;
        }
    }

This snippet makes use of the previously discussed \"changeset by reference only\" property of
objects. That means a new DateTime will only be used during updating if the reference
changes between retrieval and flush operation. This means we can easily go and modify
the instance by setting the previous local timezone.
", "vendor/doctrine/orm/docs/en/cookbook/working-with-datetime.rst", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/docs/en/cookbook/working-with-datetime.rst");
    }
}
