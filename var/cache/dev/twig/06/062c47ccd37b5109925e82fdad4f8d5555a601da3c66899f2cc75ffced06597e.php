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

/* vendor/doctrine/collections/docs/en/derived-collections.rst */
class __TwigTemplate_260bb63e7d9059160f6d78dd1e5c405cb5197b152b58a20c59cc47a581214062 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/collections/docs/en/derived-collections.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/collections/docs/en/derived-collections.rst"));

        // line 1
        echo "Derived Collections
===================

You can create custom collection classes by extending the
``Doctrine\\Common\\Collections\\ArrayCollection`` class. If the
``__construct`` semantics are different from the default ``ArrayCollection``
you can override the ``createFrom`` method:

.. code-block:: php
    final class DerivedArrayCollection extends ArrayCollection
    {
        /** @var \\stdClass */
        private \$foo;

        public function __construct(\\stdClass \$foo, array \$elements = [])
        {
            \$this->foo = \$foo;

            parent::__construct(\$elements);
        }

        protected function createFrom(array \$elements) : self
        {
            return new static(\$this->foo, \$elements);
        }
    }
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/collections/docs/en/derived-collections.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Derived Collections
===================

You can create custom collection classes by extending the
``Doctrine\\Common\\Collections\\ArrayCollection`` class. If the
``__construct`` semantics are different from the default ``ArrayCollection``
you can override the ``createFrom`` method:

.. code-block:: php
    final class DerivedArrayCollection extends ArrayCollection
    {
        /** @var \\stdClass */
        private \$foo;

        public function __construct(\\stdClass \$foo, array \$elements = [])
        {
            \$this->foo = \$foo;

            parent::__construct(\$elements);
        }

        protected function createFrom(array \$elements) : self
        {
            return new static(\$this->foo, \$elements);
        }
    }
", "vendor/doctrine/collections/docs/en/derived-collections.rst", "/var/www/public/DevLaon/templates/vendor/doctrine/collections/docs/en/derived-collections.rst");
    }
}
