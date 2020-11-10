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

/* var/cache/dev/twig/53/53300cb4e5adb975891eda0f0d11d6ba85d678a9d9baf0482ca256c119c22de3.php */
class __TwigTemplate_ffa4e6c8d886a768dcf43668ee59fd98ddabec185a970947b104a55fc1855c24 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/twig/53/53300cb4e5adb975891eda0f0d11d6ba85d678a9d9baf0482ca256c119c22de3.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/twig/53/53300cb4e5adb975891eda0f0d11d6ba85d678a9d9baf0482ca256c119c22de3.php"));

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

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_e00d7bd7e9c02d5c13bef13f91312e5aa244e1da4de17e814d02157b2af66b85 extends \\Twig\\Template
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
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@Framework/Form/form_start.html.php\"));

        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = \$this->extensions[\"Symfony\\\\Bridge\\\\Twig\\\\Extension\\\\ProfilerExtension\"];
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@Framework/Form/form_start.html.php\"));

        // line 1
        echo \"<?php \\\$method = strtoupper(\\\$method) ?>
<?php \\\$form_method = \\\$method === 'GET' || \\\$method === 'POST' ? \\\$method : 'POST' ?>
<form name=\\\"<?php echo \\\$name ?>\\\" method=\\\"<?php echo strtolower(\\\$form_method) ?>\\\"<?php if (\\\$action !== ''): ?> action=\\\"<?php echo \\\$view->escape(\\\$action) ?>\\\"<?php endif ?><?php foreach (\\\$attr as \\\$k => \\\$v) { printf(' %s=\\\"%s\\\"', \\\$view->escape(\\\$k), \\\$view->escape(\\\$v)); } ?><?php if (\\\$multipart): ?> enctype=\\\"multipart/form-data\\\"<?php endif ?>>
<?php if (\\\$form_method !== \\\$method): ?>
    <input type=\\\"hidden\\\" name=\\\"_method\\\" value=\\\"<?php echo \\\$view->escape(\\\$method) ?>\\\" />
<?php endif ?>
\";
        
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return \"@Framework/Form/form_start.html.php\";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(\"<?php \\\$method = strtoupper(\\\$method) ?>
<?php \\\$form_method = \\\$method === 'GET' || \\\$method === 'POST' ? \\\$method : 'POST' ?>
<form name=\\\"<?php echo \\\$name ?>\\\" method=\\\"<?php echo strtolower(\\\$form_method) ?>\\\"<?php if (\\\$action !== ''): ?> action=\\\"<?php echo \\\$view->escape(\\\$action) ?>\\\"<?php endif ?><?php foreach (\\\$attr as \\\$k => \\\$v) { printf(' %s=\\\"%s\\\"', \\\$view->escape(\\\$k), \\\$view->escape(\\\$v)); } ?><?php if (\\\$multipart): ?> enctype=\\\"multipart/form-data\\\"<?php endif ?>>
<?php if (\\\$form_method !== \\\$method): ?>
    <input type=\\\"hidden\\\" name=\\\"_method\\\" value=\\\"<?php echo \\\$view->escape(\\\$method) ?>\\\" />
<?php endif ?>
\", \"@Framework/Form/form_start.html.php\", \"/var/www/public/DevLaon/vendor/symfony/framework-bundle/Resources/views/Form/form_start.html.php\");
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "var/cache/dev/twig/53/53300cb4e5adb975891eda0f0d11d6ba85d678a9d9baf0482ca256c119c22de3.php";
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

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_e00d7bd7e9c02d5c13bef13f91312e5aa244e1da4de17e814d02157b2af66b85 extends \\Twig\\Template
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
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@Framework/Form/form_start.html.php\"));

        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = \$this->extensions[\"Symfony\\\\Bridge\\\\Twig\\\\Extension\\\\ProfilerExtension\"];
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@Framework/Form/form_start.html.php\"));

        // line 1
        echo \"<?php \\\$method = strtoupper(\\\$method) ?>
<?php \\\$form_method = \\\$method === 'GET' || \\\$method === 'POST' ? \\\$method : 'POST' ?>
<form name=\\\"<?php echo \\\$name ?>\\\" method=\\\"<?php echo strtolower(\\\$form_method) ?>\\\"<?php if (\\\$action !== ''): ?> action=\\\"<?php echo \\\$view->escape(\\\$action) ?>\\\"<?php endif ?><?php foreach (\\\$attr as \\\$k => \\\$v) { printf(' %s=\\\"%s\\\"', \\\$view->escape(\\\$k), \\\$view->escape(\\\$v)); } ?><?php if (\\\$multipart): ?> enctype=\\\"multipart/form-data\\\"<?php endif ?>>
<?php if (\\\$form_method !== \\\$method): ?>
    <input type=\\\"hidden\\\" name=\\\"_method\\\" value=\\\"<?php echo \\\$view->escape(\\\$method) ?>\\\" />
<?php endif ?>
\";
        
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return \"@Framework/Form/form_start.html.php\";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(\"<?php \\\$method = strtoupper(\\\$method) ?>
<?php \\\$form_method = \\\$method === 'GET' || \\\$method === 'POST' ? \\\$method : 'POST' ?>
<form name=\\\"<?php echo \\\$name ?>\\\" method=\\\"<?php echo strtolower(\\\$form_method) ?>\\\"<?php if (\\\$action !== ''): ?> action=\\\"<?php echo \\\$view->escape(\\\$action) ?>\\\"<?php endif ?><?php foreach (\\\$attr as \\\$k => \\\$v) { printf(' %s=\\\"%s\\\"', \\\$view->escape(\\\$k), \\\$view->escape(\\\$v)); } ?><?php if (\\\$multipart): ?> enctype=\\\"multipart/form-data\\\"<?php endif ?>>
<?php if (\\\$form_method !== \\\$method): ?>
    <input type=\\\"hidden\\\" name=\\\"_method\\\" value=\\\"<?php echo \\\$view->escape(\\\$method) ?>\\\" />
<?php endif ?>
\", \"@Framework/Form/form_start.html.php\", \"/var/www/public/DevLaon/vendor/symfony/framework-bundle/Resources/views/Form/form_start.html.php\");
    }
}
", "var/cache/dev/twig/53/53300cb4e5adb975891eda0f0d11d6ba85d678a9d9baf0482ca256c119c22de3.php", "/var/www/public/DevLaon/templates/var/cache/dev/twig/53/53300cb4e5adb975891eda0f0d11d6ba85d678a9d9baf0482ca256c119c22de3.php");
    }
}
