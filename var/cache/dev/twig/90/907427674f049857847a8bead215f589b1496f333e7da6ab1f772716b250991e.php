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

/* vendor/doctrine/orm/docs/en/cookbook/implementing-the-notify-changetracking-policy.rst */
class __TwigTemplate_d413d336236ecb6e7e0248a9b66ae3de8727bd1d89d7c9887c9e755b319d8ed9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/docs/en/cookbook/implementing-the-notify-changetracking-policy.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/docs/en/cookbook/implementing-the-notify-changetracking-policy.rst"));

        // line 1
        echo "Implementing the Notify ChangeTracking Policy
=============================================

.. sectionauthor:: Roman Borschel (roman@code-factory.org)

The NOTIFY change-tracking policy is the most effective
change-tracking policy provided by Doctrine but it requires some
boilerplate code. This recipe will show you how this boilerplate
code should look like. We will implement it on a
`Layer Supertype <http://martinfowler.com/eaaCatalog/layerSupertype.html>`_
for all our domain objects.

Implementing NotifyPropertyChanged
----------------------------------

The NOTIFY policy is based on the assumption that the entities
notify interested listeners of changes to their properties. For
that purpose, a class that wants to use this policy needs to
implement the ``NotifyPropertyChanged`` interface from the
``Doctrine\\Common`` namespace.

.. code-block:: php

    <?php
    use Doctrine\\Common\\NotifyPropertyChanged;
    use Doctrine\\Common\\PropertyChangedListener;
    
    abstract class DomainObject implements NotifyPropertyChanged
    {
        private \$listeners = array();
    
        public function addPropertyChangedListener(PropertyChangedListener \$listener) {
            \$this->listeners[] = \$listener;
        }
    
        /** Notifies listeners of a change. */
        protected function onPropertyChanged(\$propName, \$oldValue, \$newValue) {
            if (\$this->listeners) {
                foreach (\$this->listeners as \$listener) {
                    \$listener->propertyChanged(\$this, \$propName, \$oldValue, \$newValue);
                }
            }
        }
    }

Then, in each property setter of concrete, derived domain classes,
you need to invoke onPropertyChanged as follows to notify
listeners:

.. code-block:: php

    <?php
    // Mapping not shown, either in annotations, xml or yaml as usual
    class MyEntity extends DomainObject
    {
        private \$data;
        // ... other fields as usual
    
        public function setData(\$data) {
            if (\$data != \$this->data) { // check: is it actually modified?
                \$this->onPropertyChanged('data', \$this->data, \$data);
                \$this->data = \$data;
            }
        }
    }

The check whether the new value is different from the old one is
not mandatory but recommended. That way you can avoid unnecessary
updates and also have full control over when you consider a
property changed.


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/docs/en/cookbook/implementing-the-notify-changetracking-policy.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Implementing the Notify ChangeTracking Policy
=============================================

.. sectionauthor:: Roman Borschel (roman@code-factory.org)

The NOTIFY change-tracking policy is the most effective
change-tracking policy provided by Doctrine but it requires some
boilerplate code. This recipe will show you how this boilerplate
code should look like. We will implement it on a
`Layer Supertype <http://martinfowler.com/eaaCatalog/layerSupertype.html>`_
for all our domain objects.

Implementing NotifyPropertyChanged
----------------------------------

The NOTIFY policy is based on the assumption that the entities
notify interested listeners of changes to their properties. For
that purpose, a class that wants to use this policy needs to
implement the ``NotifyPropertyChanged`` interface from the
``Doctrine\\Common`` namespace.

.. code-block:: php

    <?php
    use Doctrine\\Common\\NotifyPropertyChanged;
    use Doctrine\\Common\\PropertyChangedListener;
    
    abstract class DomainObject implements NotifyPropertyChanged
    {
        private \$listeners = array();
    
        public function addPropertyChangedListener(PropertyChangedListener \$listener) {
            \$this->listeners[] = \$listener;
        }
    
        /** Notifies listeners of a change. */
        protected function onPropertyChanged(\$propName, \$oldValue, \$newValue) {
            if (\$this->listeners) {
                foreach (\$this->listeners as \$listener) {
                    \$listener->propertyChanged(\$this, \$propName, \$oldValue, \$newValue);
                }
            }
        }
    }

Then, in each property setter of concrete, derived domain classes,
you need to invoke onPropertyChanged as follows to notify
listeners:

.. code-block:: php

    <?php
    // Mapping not shown, either in annotations, xml or yaml as usual
    class MyEntity extends DomainObject
    {
        private \$data;
        // ... other fields as usual
    
        public function setData(\$data) {
            if (\$data != \$this->data) { // check: is it actually modified?
                \$this->onPropertyChanged('data', \$this->data, \$data);
                \$this->data = \$data;
            }
        }
    }

The check whether the new value is different from the old one is
not mandatory but recommended. That way you can avoid unnecessary
updates and also have full control over when you consider a
property changed.


", "vendor/doctrine/orm/docs/en/cookbook/implementing-the-notify-changetracking-policy.rst", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/docs/en/cookbook/implementing-the-notify-changetracking-policy.rst");
    }
}
