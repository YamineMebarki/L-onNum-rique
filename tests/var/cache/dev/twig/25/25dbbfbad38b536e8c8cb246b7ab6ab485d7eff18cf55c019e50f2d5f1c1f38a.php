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

/* var/cache/dev/twig/c3/c3484bb549feaa5f743342f0dc2acf49e5e6a8ac4542d2de7ea13515ee518a03.php */
class __TwigTemplate_9a75ddc1c0a90f19c6e891317f55331e7d814c68591ac88663318fe29341c71b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/twig/c3/c3484bb549feaa5f743342f0dc2acf49e5e6a8ac4542d2de7ea13515ee518a03.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/twig/c3/c3484bb549feaa5f743342f0dc2acf49e5e6a8ac4542d2de7ea13515ee518a03.php"));

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

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_d36d4ee5c8b06fc54ff9bded5f32d6bd274a24953bc2ea2e4e60dcd7ba82422f extends \\Twig\\Template
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
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@Framework/Form/choice_attributes.html.php\"));

        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = \$this->extensions[\"Symfony\\\\Bridge\\\\Twig\\\\Extension\\\\ProfilerExtension\"];
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@Framework/Form/choice_attributes.html.php\"));

        // line 1
        echo \"<?php if (\\\$disabled): ?>disabled=\\\"disabled\\\" <?php endif ?>
<?php foreach (\\\$choice_attr as \\\$k => \\\$v): ?>
<?php if (\\\$v === true): ?>
<?php printf('%s=\\\"%s\\\" ', \\\$view->escape(\\\$k), \\\$view->escape(\\\$k)) ?>
<?php elseif (\\\$v !== false): ?>
<?php printf('%s=\\\"%s\\\" ', \\\$view->escape(\\\$k), \\\$view->escape(\\\$v)) ?>
<?php endif ?>
<?php endforeach ?>
\";
        
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return \"@Framework/Form/choice_attributes.html.php\";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(\"<?php if (\\\$disabled): ?>disabled=\\\"disabled\\\" <?php endif ?>
<?php foreach (\\\$choice_attr as \\\$k => \\\$v): ?>
<?php if (\\\$v === true): ?>
<?php printf('%s=\\\"%s\\\" ', \\\$view->escape(\\\$k), \\\$view->escape(\\\$k)) ?>
<?php elseif (\\\$v !== false): ?>
<?php printf('%s=\\\"%s\\\" ', \\\$view->escape(\\\$k), \\\$view->escape(\\\$v)) ?>
<?php endif ?>
<?php endforeach ?>
\", \"@Framework/Form/choice_attributes.html.php\", \"/var/www/public/DevLaon/vendor/symfony/framework-bundle/Resources/views/Form/choice_attributes.html.php\");
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "var/cache/dev/twig/c3/c3484bb549feaa5f743342f0dc2acf49e5e6a8ac4542d2de7ea13515ee518a03.php";
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

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_d36d4ee5c8b06fc54ff9bded5f32d6bd274a24953bc2ea2e4e60dcd7ba82422f extends \\Twig\\Template
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
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@Framework/Form/choice_attributes.html.php\"));

        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = \$this->extensions[\"Symfony\\\\Bridge\\\\Twig\\\\Extension\\\\ProfilerExtension\"];
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@Framework/Form/choice_attributes.html.php\"));

        // line 1
        echo \"<?php if (\\\$disabled): ?>disabled=\\\"disabled\\\" <?php endif ?>
<?php foreach (\\\$choice_attr as \\\$k => \\\$v): ?>
<?php if (\\\$v === true): ?>
<?php printf('%s=\\\"%s\\\" ', \\\$view->escape(\\\$k), \\\$view->escape(\\\$k)) ?>
<?php elseif (\\\$v !== false): ?>
<?php printf('%s=\\\"%s\\\" ', \\\$view->escape(\\\$k), \\\$view->escape(\\\$v)) ?>
<?php endif ?>
<?php endforeach ?>
\";
        
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return \"@Framework/Form/choice_attributes.html.php\";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(\"<?php if (\\\$disabled): ?>disabled=\\\"disabled\\\" <?php endif ?>
<?php foreach (\\\$choice_attr as \\\$k => \\\$v): ?>
<?php if (\\\$v === true): ?>
<?php printf('%s=\\\"%s\\\" ', \\\$view->escape(\\\$k), \\\$view->escape(\\\$k)) ?>
<?php elseif (\\\$v !== false): ?>
<?php printf('%s=\\\"%s\\\" ', \\\$view->escape(\\\$k), \\\$view->escape(\\\$v)) ?>
<?php endif ?>
<?php endforeach ?>
\", \"@Framework/Form/choice_attributes.html.php\", \"/var/www/public/DevLaon/vendor/symfony/framework-bundle/Resources/views/Form/choice_attributes.html.php\");
    }
}
", "var/cache/dev/twig/c3/c3484bb549feaa5f743342f0dc2acf49e5e6a8ac4542d2de7ea13515ee518a03.php", "/var/www/public/DevLaon/templates/var/cache/dev/twig/c3/c3484bb549feaa5f743342f0dc2acf49e5e6a8ac4542d2de7ea13515ee518a03.php");
    }
}
