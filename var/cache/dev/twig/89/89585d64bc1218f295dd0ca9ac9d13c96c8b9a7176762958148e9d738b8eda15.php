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

/* var/cache/dev/twig/3c/3cd60e952f2b71a9d06a7cd704cde065059f8ad1bd8e5f0fcfccd4a19588b137.php */
class __TwigTemplate_a8deef502001d9d5ec34dbc9516febfe86e85480c43f6bf02529fdb4ab025e42 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/twig/3c/3cd60e952f2b71a9d06a7cd704cde065059f8ad1bd8e5f0fcfccd4a19588b137.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/twig/3c/3cd60e952f2b71a9d06a7cd704cde065059f8ad1bd8e5f0fcfccd4a19588b137.php"));

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

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_fd70a63c7663c93a64f2edde481fbb109cbd229c84dbf17fd89c5ced4a3b73af extends \\Twig\\Template
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
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@Framework/Form/button_widget.html.php\"));

        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = \$this->extensions[\"Symfony\\\\Bridge\\\\Twig\\\\Extension\\\\ProfilerExtension\"];
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@Framework/Form/button_widget.html.php\"));

        // line 1
        echo \"<?php if (!\\\$label) { \\\$label = isset(\\\$label_format)
    ? strtr(\\\$label_format, ['%name%' => \\\$name, '%id%' => \\\$id])
    : \\\$view['form']->humanize(\\\$name); } ?>
<button type=\\\"<?php echo isset(\\\$type) ? \\\$view->escape(\\\$type) : 'button' ?>\\\" <?php echo \\\$view['form']->block(\\\$form, 'button_attributes') ?>><?php echo \\\$view->escape(false !== \\\$translation_domain ? \\\$view['translator']->trans(\\\$label, \\\$label_translation_parameters, \\\$translation_domain) : \\\$label) ?></button>
\";
        
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return \"@Framework/Form/button_widget.html.php\";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(\"<?php if (!\\\$label) { \\\$label = isset(\\\$label_format)
    ? strtr(\\\$label_format, ['%name%' => \\\$name, '%id%' => \\\$id])
    : \\\$view['form']->humanize(\\\$name); } ?>
<button type=\\\"<?php echo isset(\\\$type) ? \\\$view->escape(\\\$type) : 'button' ?>\\\" <?php echo \\\$view['form']->block(\\\$form, 'button_attributes') ?>><?php echo \\\$view->escape(false !== \\\$translation_domain ? \\\$view['translator']->trans(\\\$label, \\\$label_translation_parameters, \\\$translation_domain) : \\\$label) ?></button>
\", \"@Framework/Form/button_widget.html.php\", \"/var/www/public/DevLaon/vendor/symfony/framework-bundle/Resources/views/Form/button_widget.html.php\");
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "var/cache/dev/twig/3c/3cd60e952f2b71a9d06a7cd704cde065059f8ad1bd8e5f0fcfccd4a19588b137.php";
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

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_fd70a63c7663c93a64f2edde481fbb109cbd229c84dbf17fd89c5ced4a3b73af extends \\Twig\\Template
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
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@Framework/Form/button_widget.html.php\"));

        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = \$this->extensions[\"Symfony\\\\Bridge\\\\Twig\\\\Extension\\\\ProfilerExtension\"];
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@Framework/Form/button_widget.html.php\"));

        // line 1
        echo \"<?php if (!\\\$label) { \\\$label = isset(\\\$label_format)
    ? strtr(\\\$label_format, ['%name%' => \\\$name, '%id%' => \\\$id])
    : \\\$view['form']->humanize(\\\$name); } ?>
<button type=\\\"<?php echo isset(\\\$type) ? \\\$view->escape(\\\$type) : 'button' ?>\\\" <?php echo \\\$view['form']->block(\\\$form, 'button_attributes') ?>><?php echo \\\$view->escape(false !== \\\$translation_domain ? \\\$view['translator']->trans(\\\$label, \\\$label_translation_parameters, \\\$translation_domain) : \\\$label) ?></button>
\";
        
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return \"@Framework/Form/button_widget.html.php\";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(\"<?php if (!\\\$label) { \\\$label = isset(\\\$label_format)
    ? strtr(\\\$label_format, ['%name%' => \\\$name, '%id%' => \\\$id])
    : \\\$view['form']->humanize(\\\$name); } ?>
<button type=\\\"<?php echo isset(\\\$type) ? \\\$view->escape(\\\$type) : 'button' ?>\\\" <?php echo \\\$view['form']->block(\\\$form, 'button_attributes') ?>><?php echo \\\$view->escape(false !== \\\$translation_domain ? \\\$view['translator']->trans(\\\$label, \\\$label_translation_parameters, \\\$translation_domain) : \\\$label) ?></button>
\", \"@Framework/Form/button_widget.html.php\", \"/var/www/public/DevLaon/vendor/symfony/framework-bundle/Resources/views/Form/button_widget.html.php\");
    }
}
", "var/cache/dev/twig/3c/3cd60e952f2b71a9d06a7cd704cde065059f8ad1bd8e5f0fcfccd4a19588b137.php", "/var/www/public/DevLaon/templates/var/cache/dev/twig/3c/3cd60e952f2b71a9d06a7cd704cde065059f8ad1bd8e5f0fcfccd4a19588b137.php");
    }
}
