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

/* vendor/twig/twig/doc/filters/spaceless.rst */
class __TwigTemplate_d92e26a332084eeaea8337c23b87edb441107542d094f3a643d473f7aa2c8705 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/filters/spaceless.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/doc/filters/spaceless.rst"));

        // line 1
        echo "``spaceless``
=============

.. versionadded:: 1.38

    The ``spaceless`` filter was added in Twig 1.38.

Use the ``spaceless`` filter to remove whitespace *between HTML tags*, not
whitespace within HTML tags or whitespace in plain text:

.. code-block:: twig

    ";
        // line 13
        echo twig_spaceless("<div>
            <strong>foo</strong>
        </div>
        ");
        // line 17
        echo "

    ";
        // line 20
        echo "
You can combine ``spaceless`` with the ``apply`` tag to apply the transformation
on large amounts of HTML:

.. code-block:: twig

    ";
        // line 26
        $___internal_e589beb111dca1b4ecde61d8b9effadb203073ae217e6f22635531f6a7ba14f5_ = ('' === $tmp = "        <div>
            <strong>foo</strong>
        </div>
    ") ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_spaceless($___internal_e589beb111dca1b4ecde61d8b9effadb203073ae217e6f22635531f6a7ba14f5_);
        // line 31
        echo "
    ";
        // line 33
        echo "
.. note::

    The ``apply`` tag was introduced in Twig 2.9; use the ``filter`` tag with
    previous versions.

This tag is not meant to \"optimize\" the size of the generated HTML content but
merely to avoid extra whitespace between HTML tags to avoid browser rendering
quirks under some circumstances.

.. caution::

    As the filter uses a regular expression behind the scenes, its performance
    is directly related to the text size you are working on (remember that
    filters are executed at runtime).

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
        return "vendor/twig/twig/doc/filters/spaceless.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 33,  80 => 31,  74 => 26,  66 => 20,  62 => 17,  57 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``spaceless``
=============

.. versionadded:: 1.38

    The ``spaceless`` filter was added in Twig 1.38.

Use the ``spaceless`` filter to remove whitespace *between HTML tags*, not
whitespace within HTML tags or whitespace in plain text:

.. code-block:: twig

    {{
        \"<div>
            <strong>foo</strong>
        </div>
        \"|spaceless }}

    {# output will be <div><strong>foo</strong></div> #}

You can combine ``spaceless`` with the ``apply`` tag to apply the transformation
on large amounts of HTML:

.. code-block:: twig

    {% apply spaceless %}
        <div>
            <strong>foo</strong>
        </div>
    {% endapply %}

    {# output will be <div><strong>foo</strong></div> #}

.. note::

    The ``apply`` tag was introduced in Twig 2.9; use the ``filter`` tag with
    previous versions.

This tag is not meant to \"optimize\" the size of the generated HTML content but
merely to avoid extra whitespace between HTML tags to avoid browser rendering
quirks under some circumstances.

.. caution::

    As the filter uses a regular expression behind the scenes, its performance
    is directly related to the text size you are working on (remember that
    filters are executed at runtime).

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
", "vendor/twig/twig/doc/filters/spaceless.rst", "/var/www/public/DevLaon/templates/vendor/twig/twig/doc/filters/spaceless.rst");
    }
}
