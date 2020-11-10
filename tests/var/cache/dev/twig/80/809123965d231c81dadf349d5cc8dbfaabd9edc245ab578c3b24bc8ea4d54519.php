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

/* vendor/twig/twig/doc/tests/constant.rst */
class __TwigTemplate_345c02fe15bb7a799632cd8c4bee1d25c68ef67de91b30284ed2e716552ce6e2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/tests/constant.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/tests/constant.rst"));

        // line 1
        echo "``constant``
============

``constant`` checks if a variable has the exact same value as a constant. You
can use either global constants or class constants:

.. code-block:: twig

    ";
        // line 9
        if ((twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 9, $this->source); })()), "status", [], "any", false, false, false, 9) === constant("Post::PUBLISHED"))) {
            // line 10
            echo "        the status attribute is exactly the same as Post::PUBLISHED
    ";
        }
        // line 12
        echo "
You can test constants from object instances as well:

.. code-block:: twig

    ";
        // line 17
        if ((twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 17, $this->source); })()), "status", [], "any", false, false, false, 17) === constant(get_class((isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 17, $this->source); })()))."::"."PUBLISHED"))) {
            // line 18
            echo "        the status attribute is exactly the same as Post::PUBLISHED
    ";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/doc/tests/constant.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 18,  66 => 17,  59 => 12,  55 => 10,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``constant``
============

``constant`` checks if a variable has the exact same value as a constant. You
can use either global constants or class constants:

.. code-block:: twig

    {% if post.status is constant('Post::PUBLISHED') %}
        the status attribute is exactly the same as Post::PUBLISHED
    {% endif %}

You can test constants from object instances as well:

.. code-block:: twig

    {% if post.status is constant('PUBLISHED', post) %}
        the status attribute is exactly the same as Post::PUBLISHED
    {% endif %}
", "vendor/twig/twig/doc/tests/constant.rst", "/var/www/public/DevLaon/templates/vendor/twig/twig/doc/tests/constant.rst");
    }
}
