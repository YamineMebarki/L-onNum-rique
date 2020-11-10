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

/* var/cache/dev/twig/fc/fc32542cf232cf717cf71caaada49e8899d27835728aeee9fb9da5b91103cf6f.php */
class __TwigTemplate_605453d8611dfe10a10dac712147747ab374a563ef60af55efb0d991f0be7573 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/twig/fc/fc32542cf232cf717cf71caaada49e8899d27835728aeee9fb9da5b91103cf6f.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/twig/fc/fc32542cf232cf717cf71caaada49e8899d27835728aeee9fb9da5b91103cf6f.php"));

        // line 1
        echo "<?php

use Twig\\Environment;
use Twig\\Error\\LoaderError;
use Twig\\Error\\RuntimeError;
use Twig\\Extension\\SandboxExtension;
use Twig\\Markup;
use Twig\\Sandbox\\SecurityError;
use Twig\\Sandbox\\SecurityNotAllowedTagError;
use Twig\\Sandbox\\SecurityNotAllowedFilterError;
use Twig\\Sandbox\\SecurityNotAllowedFunctionError;
use Twig\\Source;
use Twig\\Template;

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_78be3ada011e72ae7c922a59be6f3810477a1f2f1cf97cdd36caec426f773778 extends \\Twig\\Template
{
    private \$source;
    private \$macros = [];

    public function __construct(Environment \$env)
    {
        parent::__construct(\$env);

        \$this->source = \$this->getSourceContext();

        \$this->parent = false;

        \$this->blocks = [
        ];
    }

    protected function doDisplay(array \$context, array \$blocks = [])
    {
        \$macros = \$this->macros;
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = \$this->extensions[\"Symfony\\\\Bundle\\\\WebProfilerBundle\\\\Twig\\\\WebProfilerExtension\"];
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@Framework/Form/attributes.html.php\"));

        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = \$this->extensions[\"Symfony\\\\Bridge\\\\Twig\\\\Extension\\\\ProfilerExtension\"];
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@Framework/Form/attributes.html.php\"));

        // line 1
        echo \"<?php foreach (\\\$attr as \\\$k => \\\$v): ?>
<?php if ('placeholder' === \\\$k || 'title' === \\\$k): ?>
<?php printf('%s=\\\"%s\\\" ', \\\$view->escape(\\\$k), \\\$view->escape(false !== \\\$translation_domain ? \\\$view['translator']->trans(\\\$v, \\\$attr_translation_parameters, \\\$translation_domain) : \\\$v)) ?>
<?php elseif (true === \\\$v): ?>
<?php printf('%s=\\\"%s\\\" ', \\\$view->escape(\\\$k), \\\$view->escape(\\\$k)) ?>
<?php elseif (false !== \\\$v): ?>
<?php printf('%s=\\\"%s\\\" ', \\\$view->escape(\\\$k), \\\$view->escape(\\\$v)) ?>
<?php endif ?>
<?php endforeach ?>
\";
        
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return \"@Framework/Form/attributes.html.php\";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(\"<?php foreach (\\\$attr as \\\$k => \\\$v): ?>
<?php if ('placeholder' === \\\$k || 'title' === \\\$k): ?>
<?php printf('%s=\\\"%s\\\" ', \\\$view->escape(\\\$k), \\\$view->escape(false !== \\\$translation_domain ? \\\$view['translator']->trans(\\\$v, \\\$attr_translation_parameters, \\\$translation_domain) : \\\$v)) ?>
<?php elseif (true === \\\$v): ?>
<?php printf('%s=\\\"%s\\\" ', \\\$view->escape(\\\$k), \\\$view->escape(\\\$k)) ?>
<?php elseif (false !== \\\$v): ?>
<?php printf('%s=\\\"%s\\\" ', \\\$view->escape(\\\$k), \\\$view->escape(\\\$v)) ?>
<?php endif ?>
<?php endforeach ?>
\", \"@Framework/Form/attributes.html.php\", \"/var/www/public/DevLaon/vendor/symfony/framework-bundle/Resources/views/Form/attributes.html.php\");
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "var/cache/dev/twig/fc/fc32542cf232cf717cf71caaada49e8899d27835728aeee9fb9da5b91103cf6f.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

use Twig\\Environment;
use Twig\\Error\\LoaderError;
use Twig\\Error\\RuntimeError;
use Twig\\Extension\\SandboxExtension;
use Twig\\Markup;
use Twig\\Sandbox\\SecurityError;
use Twig\\Sandbox\\SecurityNotAllowedTagError;
use Twig\\Sandbox\\SecurityNotAllowedFilterError;
use Twig\\Sandbox\\SecurityNotAllowedFunctionError;
use Twig\\Source;
use Twig\\Template;

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_78be3ada011e72ae7c922a59be6f3810477a1f2f1cf97cdd36caec426f773778 extends \\Twig\\Template
{
    private \$source;
    private \$macros = [];

    public function __construct(Environment \$env)
    {
        parent::__construct(\$env);

        \$this->source = \$this->getSourceContext();

        \$this->parent = false;

        \$this->blocks = [
        ];
    }

    protected function doDisplay(array \$context, array \$blocks = [])
    {
        \$macros = \$this->macros;
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = \$this->extensions[\"Symfony\\\\Bundle\\\\WebProfilerBundle\\\\Twig\\\\WebProfilerExtension\"];
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@Framework/Form/attributes.html.php\"));

        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = \$this->extensions[\"Symfony\\\\Bridge\\\\Twig\\\\Extension\\\\ProfilerExtension\"];
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@Framework/Form/attributes.html.php\"));

        // line 1
        echo \"<?php foreach (\\\$attr as \\\$k => \\\$v): ?>
<?php if ('placeholder' === \\\$k || 'title' === \\\$k): ?>
<?php printf('%s=\\\"%s\\\" ', \\\$view->escape(\\\$k), \\\$view->escape(false !== \\\$translation_domain ? \\\$view['translator']->trans(\\\$v, \\\$attr_translation_parameters, \\\$translation_domain) : \\\$v)) ?>
<?php elseif (true === \\\$v): ?>
<?php printf('%s=\\\"%s\\\" ', \\\$view->escape(\\\$k), \\\$view->escape(\\\$k)) ?>
<?php elseif (false !== \\\$v): ?>
<?php printf('%s=\\\"%s\\\" ', \\\$view->escape(\\\$k), \\\$view->escape(\\\$v)) ?>
<?php endif ?>
<?php endforeach ?>
\";
        
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return \"@Framework/Form/attributes.html.php\";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(\"<?php foreach (\\\$attr as \\\$k => \\\$v): ?>
<?php if ('placeholder' === \\\$k || 'title' === \\\$k): ?>
<?php printf('%s=\\\"%s\\\" ', \\\$view->escape(\\\$k), \\\$view->escape(false !== \\\$translation_domain ? \\\$view['translator']->trans(\\\$v, \\\$attr_translation_parameters, \\\$translation_domain) : \\\$v)) ?>
<?php elseif (true === \\\$v): ?>
<?php printf('%s=\\\"%s\\\" ', \\\$view->escape(\\\$k), \\\$view->escape(\\\$k)) ?>
<?php elseif (false !== \\\$v): ?>
<?php printf('%s=\\\"%s\\\" ', \\\$view->escape(\\\$k), \\\$view->escape(\\\$v)) ?>
<?php endif ?>
<?php endforeach ?>
\", \"@Framework/Form/attributes.html.php\", \"/var/www/public/DevLaon/vendor/symfony/framework-bundle/Resources/views/Form/attributes.html.php\");
    }
}
", "var/cache/dev/twig/fc/fc32542cf232cf717cf71caaada49e8899d27835728aeee9fb9da5b91103cf6f.php", "/var/www/public/DevLaon/templates/var/cache/dev/twig/fc/fc32542cf232cf717cf71caaada49e8899d27835728aeee9fb9da5b91103cf6f.php");
    }
}
