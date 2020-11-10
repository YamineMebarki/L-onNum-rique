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

/* vendor/doctrine/orm/docs/en/cookbook/validation-of-entities.rst */
class __TwigTemplate_338cbe61057aed92e53623890db11a4b1c22d8ddf6ecc8a05d6f71bd5c74c955 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/docs/en/cookbook/validation-of-entities.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/docs/en/cookbook/validation-of-entities.rst"));

        // line 1
        echo "Validation of Entities
======================

.. sectionauthor:: Benjamin Eberlei <kontakt@beberlei.de>

Doctrine 2 does not ship with any internal validators, the reason
being that we think all the frameworks out there already ship with
quite decent ones that can be integrated into your Domain easily.
What we offer are hooks to execute any kind of validation.

.. note::

    You don't need to validate your entities in the lifecycle
    events. Its only one of many options. Of course you can also
    perform validations in value setters or any other method of your
    entities that are used in your code.


Entities can register lifecycle event methods with Doctrine that
are called on different occasions. For validation we would need to
hook into the events called before persisting and updating. Even
though we don't support validation out of the box, the
implementation is even simpler than in Doctrine 1 and you will get
the additional benefit of being able to re-use your validation in
any other part of your domain.

Say we have an ``Order`` with several ``OrderLine`` instances. We
never want to allow any customer to order for a larger sum than he
is allowed to:

.. code-block:: php

    <?php
    class Order
    {
        public function assertCustomerAllowedBuying()
        {
            \$orderLimit = \$this->customer->getOrderLimit();
    
            \$amount = 0;
            foreach (\$this->orderLines as \$line) {
                \$amount += \$line->getAmount();
            }
    
            if (\$amount > \$orderLimit) {
                throw new CustomerOrderLimitExceededException();
            }
        }
    }

Now this is some pretty important piece of business logic in your
code, enforcing it at any time is important so that customers with
a unknown reputation don't owe your business too much money.

We can enforce this constraint in any of the metadata drivers.
First Annotations:

.. code-block:: php

    <?php
    /**
     * @Entity
     * @HasLifecycleCallbacks
     */
    class Order
    {
        /**
         * @PrePersist @PreUpdate
         */
        public function assertCustomerAllowedBuying() {}
    }

In XML Mappings:

.. code-block:: xml

    <doctrine-mapping>
        <entity name=\"Order\">
            <lifecycle-callbacks>
                <lifecycle-callback type=\"prePersist\" method=\"assertCustomerallowedBuying\" />
                <lifecycle-callback type=\"preUpdate\" method=\"assertCustomerallowedBuying\" />
            </lifecycle-callbacks>
        </entity>
    </doctrine-mapping>

YAML needs some little change yet, to allow multiple lifecycle
events for one method, this will happen before Beta 1 though.

Now validation is performed whenever you call
``EntityManager#persist(\$order)`` or when you call
``EntityManager#flush()`` and an order is about to be updated. Any
Exception that happens in the lifecycle callbacks will be caught by
the EntityManager and the current transaction is rolled back.

Of course you can do any type of primitive checks, not null,
email-validation, string size, integer and date ranges in your
validation callbacks.

.. code-block:: php

    <?php
    class Order
    {
        /**
         * @PrePersist @PreUpdate
         */
        public function validate()
        {
            if (!(\$this->plannedShipDate instanceof DateTime)) {
                throw new ValidateException();
            }
    
            if (\$this->plannedShipDate->format('U') < time()) {
                throw new ValidateException();
            }
    
            if (\$this->customer == null) {
                throw new OrderRequiresCustomerException();
            }
        }
    }

What is nice about lifecycle events is, you can also re-use the
methods at other places in your domain, for example in combination
with your form library. Additionally there is no limitation in the
number of methods you register on one particular event, i.e. you
can register multiple methods for validation in \"PrePersist\" or
\"PreUpdate\" or mix and share them in any combinations between those
two events.

There is no limit to what you can and can't validate in
\"PrePersist\" and \"PreUpdate\" as long as you don't create new entity
instances. This was already discussed in the previous blog post on
the Versionable extension, which requires another type of event
called \"onFlush\".

Further readings: :ref:`reference-events-lifecycle-events`
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/docs/en/cookbook/validation-of-entities.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Validation of Entities
======================

.. sectionauthor:: Benjamin Eberlei <kontakt@beberlei.de>

Doctrine 2 does not ship with any internal validators, the reason
being that we think all the frameworks out there already ship with
quite decent ones that can be integrated into your Domain easily.
What we offer are hooks to execute any kind of validation.

.. note::

    You don't need to validate your entities in the lifecycle
    events. Its only one of many options. Of course you can also
    perform validations in value setters or any other method of your
    entities that are used in your code.


Entities can register lifecycle event methods with Doctrine that
are called on different occasions. For validation we would need to
hook into the events called before persisting and updating. Even
though we don't support validation out of the box, the
implementation is even simpler than in Doctrine 1 and you will get
the additional benefit of being able to re-use your validation in
any other part of your domain.

Say we have an ``Order`` with several ``OrderLine`` instances. We
never want to allow any customer to order for a larger sum than he
is allowed to:

.. code-block:: php

    <?php
    class Order
    {
        public function assertCustomerAllowedBuying()
        {
            \$orderLimit = \$this->customer->getOrderLimit();
    
            \$amount = 0;
            foreach (\$this->orderLines as \$line) {
                \$amount += \$line->getAmount();
            }
    
            if (\$amount > \$orderLimit) {
                throw new CustomerOrderLimitExceededException();
            }
        }
    }

Now this is some pretty important piece of business logic in your
code, enforcing it at any time is important so that customers with
a unknown reputation don't owe your business too much money.

We can enforce this constraint in any of the metadata drivers.
First Annotations:

.. code-block:: php

    <?php
    /**
     * @Entity
     * @HasLifecycleCallbacks
     */
    class Order
    {
        /**
         * @PrePersist @PreUpdate
         */
        public function assertCustomerAllowedBuying() {}
    }

In XML Mappings:

.. code-block:: xml

    <doctrine-mapping>
        <entity name=\"Order\">
            <lifecycle-callbacks>
                <lifecycle-callback type=\"prePersist\" method=\"assertCustomerallowedBuying\" />
                <lifecycle-callback type=\"preUpdate\" method=\"assertCustomerallowedBuying\" />
            </lifecycle-callbacks>
        </entity>
    </doctrine-mapping>

YAML needs some little change yet, to allow multiple lifecycle
events for one method, this will happen before Beta 1 though.

Now validation is performed whenever you call
``EntityManager#persist(\$order)`` or when you call
``EntityManager#flush()`` and an order is about to be updated. Any
Exception that happens in the lifecycle callbacks will be caught by
the EntityManager and the current transaction is rolled back.

Of course you can do any type of primitive checks, not null,
email-validation, string size, integer and date ranges in your
validation callbacks.

.. code-block:: php

    <?php
    class Order
    {
        /**
         * @PrePersist @PreUpdate
         */
        public function validate()
        {
            if (!(\$this->plannedShipDate instanceof DateTime)) {
                throw new ValidateException();
            }
    
            if (\$this->plannedShipDate->format('U') < time()) {
                throw new ValidateException();
            }
    
            if (\$this->customer == null) {
                throw new OrderRequiresCustomerException();
            }
        }
    }

What is nice about lifecycle events is, you can also re-use the
methods at other places in your domain, for example in combination
with your form library. Additionally there is no limitation in the
number of methods you register on one particular event, i.e. you
can register multiple methods for validation in \"PrePersist\" or
\"PreUpdate\" or mix and share them in any combinations between those
two events.

There is no limit to what you can and can't validate in
\"PrePersist\" and \"PreUpdate\" as long as you don't create new entity
instances. This was already discussed in the previous blog post on
the Versionable extension, which requires another type of event
called \"onFlush\".

Further readings: :ref:`reference-events-lifecycle-events`
", "vendor/doctrine/orm/docs/en/cookbook/validation-of-entities.rst", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/docs/en/cookbook/validation-of-entities.rst");
    }
}
