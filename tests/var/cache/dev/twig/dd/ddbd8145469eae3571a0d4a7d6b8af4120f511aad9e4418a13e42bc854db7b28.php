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

/* vendor/doctrine/orm/docs/en/tutorials/override-field-association-mappings-in-subclasses.rst */
class __TwigTemplate_23ddd0f2383cd83c0debb00949b19832245ab7dabae3c16255ac14686a2aae7f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/docs/en/tutorials/override-field-association-mappings-in-subclasses.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/docs/en/tutorials/override-field-association-mappings-in-subclasses.rst"));

        // line 1
        echo "Override Field Association Mappings In Subclasses
-------------------------------------------------

Sometimes there is a need to persist entities but override all or part of the
mapping metadata. Sometimes also the mapping to override comes from entities
using traits where the traits have mapping metadata.
This tutorial explains how to override mapping metadata,
i.e. attributes and associations metadata in particular. The example here shows
the overriding of a class that uses a trait but is similar when extending a base
class as shown at the end of this tutorial.

Suppose we have a class ExampleEntityWithOverride. This class uses trait ExampleTrait:

.. code-block:: php

    <?php
    /**
     * @Entity
     *
     * @AttributeOverrides({
     *      @AttributeOverride(name=\"foo\",
     *          column=@Column(
     *              name     = \"foo_overridden\",
     *              type     = \"integer\",
     *              length   = 140,
     *              nullable = false,
     *              unique   = false
     *          )
     *      )
     * })
     *
     * @AssociationOverrides({
     *      @AssociationOverride(name=\"bar\",
     *          joinColumns=@JoinColumn(
     *              name=\"example_entity_overridden_bar_id\", referencedColumnName=\"id\"
     *          )
     *      )
     * })
     */
    class ExampleEntityWithOverride
    {
        use ExampleTrait;
    }

    /**
     * @Entity
     */
    class Bar
    {
        /** @Id @Column(type=\"string\") */
        private \$id;
    }

The docblock is showing metadata override of the attribute and association type. It
basically changes the names of the columns mapped for a property ``foo`` and for
the association ``bar`` which relates to Bar class shown above. Here is the trait
which has mapping metadata that is overridden by the annotation above:

.. code-block:: php

    <?php
    /**
     * Trait class
     */
    trait ExampleTrait
    {
        /** @Id @Column(type=\"string\") */
        private \$id;

        /**
         * @Column(name=\"trait_foo\", type=\"integer\", length=100, nullable=true, unique=true)
         */
        protected \$foo;

        /**
         * @OneToOne(targetEntity=\"Bar\", cascade={\"persist\", \"merge\"})
         * @JoinColumn(name=\"example_trait_bar_id\", referencedColumnName=\"id\")
         */
        protected \$bar;
    }

The case for just extending a class would be just the same but:

.. code-block:: php

    <?php
    class ExampleEntityWithOverride extends BaseEntityWithSomeMapping
    {
        // ...
    }

Overriding is also supported via XML and YAML (:ref:`examples <inheritence_mapping_overrides>`).
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/docs/en/tutorials/override-field-association-mappings-in-subclasses.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Override Field Association Mappings In Subclasses
-------------------------------------------------

Sometimes there is a need to persist entities but override all or part of the
mapping metadata. Sometimes also the mapping to override comes from entities
using traits where the traits have mapping metadata.
This tutorial explains how to override mapping metadata,
i.e. attributes and associations metadata in particular. The example here shows
the overriding of a class that uses a trait but is similar when extending a base
class as shown at the end of this tutorial.

Suppose we have a class ExampleEntityWithOverride. This class uses trait ExampleTrait:

.. code-block:: php

    <?php
    /**
     * @Entity
     *
     * @AttributeOverrides({
     *      @AttributeOverride(name=\"foo\",
     *          column=@Column(
     *              name     = \"foo_overridden\",
     *              type     = \"integer\",
     *              length   = 140,
     *              nullable = false,
     *              unique   = false
     *          )
     *      )
     * })
     *
     * @AssociationOverrides({
     *      @AssociationOverride(name=\"bar\",
     *          joinColumns=@JoinColumn(
     *              name=\"example_entity_overridden_bar_id\", referencedColumnName=\"id\"
     *          )
     *      )
     * })
     */
    class ExampleEntityWithOverride
    {
        use ExampleTrait;
    }

    /**
     * @Entity
     */
    class Bar
    {
        /** @Id @Column(type=\"string\") */
        private \$id;
    }

The docblock is showing metadata override of the attribute and association type. It
basically changes the names of the columns mapped for a property ``foo`` and for
the association ``bar`` which relates to Bar class shown above. Here is the trait
which has mapping metadata that is overridden by the annotation above:

.. code-block:: php

    <?php
    /**
     * Trait class
     */
    trait ExampleTrait
    {
        /** @Id @Column(type=\"string\") */
        private \$id;

        /**
         * @Column(name=\"trait_foo\", type=\"integer\", length=100, nullable=true, unique=true)
         */
        protected \$foo;

        /**
         * @OneToOne(targetEntity=\"Bar\", cascade={\"persist\", \"merge\"})
         * @JoinColumn(name=\"example_trait_bar_id\", referencedColumnName=\"id\")
         */
        protected \$bar;
    }

The case for just extending a class would be just the same but:

.. code-block:: php

    <?php
    class ExampleEntityWithOverride extends BaseEntityWithSomeMapping
    {
        // ...
    }

Overriding is also supported via XML and YAML (:ref:`examples <inheritence_mapping_overrides>`).
", "vendor/doctrine/orm/docs/en/tutorials/override-field-association-mappings-in-subclasses.rst", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/docs/en/tutorials/override-field-association-mappings-in-subclasses.rst");
    }
}
