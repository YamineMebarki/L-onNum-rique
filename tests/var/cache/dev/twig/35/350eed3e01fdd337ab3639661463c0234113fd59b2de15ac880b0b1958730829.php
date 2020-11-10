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

/* vendor/twig/twig/doc/tags/spaceless.rst */
class __TwigTemplate_272873b21d22921e9deaaa0ea411e30408e254a65b8fd87b9267a4598b0c0e43 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/tags/spaceless.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/tags/spaceless.rst"));

        // line 1
        echo "``spaceless``
=============

.. tip::

    As of Twig 1.38, use the :doc:`spaceless <../filters/spaceless>` filter instead.

Use the ``spaceless`` tag to remove whitespace *between HTML tags*, not
whitespace within HTML tags or whitespace in plain text:

.. code-block:: twig

    ";
        // line 13
        ob_start();
        // line 14
        echo "        <div>
            <strong>foo</strong>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 18
        echo "
    ";
        // line 20
        echo "
This tag is not meant to \"optimize\" the size of the generated HTML content but
merely to avoid extra whitespace between HTML tags to avoid browser rendering
quirks under some circumstances.

.. tip::

    If you want to optimize the size of the generated HTML content, gzip
    compress the output instead.

.. tip::

    If you want to create a tag that actually removes all extra whitespace in
    an HTML string, be warned that this is not as easy as it seems to be
    (think of ``textarea`` or ``pre`` tags for instance). Using a third-party
    library like Tidy is probably a better idea.

.. tip::

    For more information on whitespace control, read the
    :ref:`dedicated section <templates-whitespace-control>` of the documentation and learn how
    you can also use the whitespace control modifier on your tags.
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/doc/tags/spaceless.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 20,  65 => 18,  59 => 14,  57 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``spaceless``
=============

.. tip::

    As of Twig 1.38, use the :doc:`spaceless <../filters/spaceless>` filter instead.

Use the ``spaceless`` tag to remove whitespace *between HTML tags*, not
whitespace within HTML tags or whitespace in plain text:

.. code-block:: twig

    {% spaceless %}
        <div>
            <strong>foo</strong>
        </div>
    {% endspaceless %}

    {# output will be <div><strong>foo</strong></div> #}

This tag is not meant to \"optimize\" the size of the generated HTML content but
merely to avoid extra whitespace between HTML tags to avoid browser rendering
quirks under some circumstances.

.. tip::

    If you want to optimize the size of the generated HTML content, gzip
    compress the output instead.

.. tip::

    If you want to create a tag that actually removes all extra whitespace in
    an HTML string, be warned that this is not as easy as it seems to be
    (think of ``textarea`` or ``pre`` tags for instance). Using a third-party
    library like Tidy is probably a better idea.

.. tip::

    For more information on whitespace control, read the
    :ref:`dedicated section <templates-whitespace-control>` of the documentation and learn how
    you can also use the whitespace control modifier on your tags.
", "vendor/twig/twig/doc/tags/spaceless.rst", "/var/www/public/DevLaon/templates/vendor/twig/twig/doc/tags/spaceless.rst");
    }
}
