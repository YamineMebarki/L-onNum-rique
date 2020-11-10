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

/* var/cache/dev/twig/11/11c53d46ed390b8e2e225c1239a29df7cdbfbf6565478cf386118804434351e5.php */
class __TwigTemplate_3123deaaab59292f4b4d9137b735ce75b637567608d22ae12b139b7272e5c04a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/twig/11/11c53d46ed390b8e2e225c1239a29df7cdbfbf6565478cf386118804434351e5.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/twig/11/11c53d46ed390b8e2e225c1239a29df7cdbfbf6565478cf386118804434351e5.php"));

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

/* @Framework/Form/form_help.html.php */
class __TwigTemplate_f0e9e2d2bd90ecbbaca87552152c6f1c8a238458ef54dae8e9db1518072ef496 extends \\Twig\\Template
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
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@Framework/Form/form_help.html.php\"));

        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = \$this->extensions[\"Symfony\\\\Bridge\\\\Twig\\\\Extension\\\\ProfilerExtension\"];
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@Framework/Form/form_help.html.php\"));

        // line 1
        echo \"<?php if (!empty(\\\$help)): ?>
    <?php \\\$help_attr['class'] = isset(\\\$help_attr['class']) ? trim(\\\$help_attr['class'].' help-text') : 'help-text'; ?>
    <?php \\\$help = false !== \\\$translation_domain ? \\\$view['translator']->trans(\\\$help, \\\$help_translation_parameters, \\\$translation_domain) : \\\$help; ?>
    <?php \\\$help = false === \\\$help_html ? \\\$view->escape(\\\$help) : \\\$help ?>
    <p id=\\\"<?php echo \\\$view->escape(\\\$id); ?>_help\\\" <?php echo ' '.\\\$view['form']->block(\\\$form, 'attributes', ['attr' => \\\$help_attr]); ?>><?php echo \\\$help; ?></p>
<?php endif; ?>
\";
        
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return \"@Framework/Form/form_help.html.php\";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(\"<?php if (!empty(\\\$help)): ?>
    <?php \\\$help_attr['class'] = isset(\\\$help_attr['class']) ? trim(\\\$help_attr['class'].' help-text') : 'help-text'; ?>
    <?php \\\$help = false !== \\\$translation_domain ? \\\$view['translator']->trans(\\\$help, \\\$help_translation_parameters, \\\$translation_domain) : \\\$help; ?>
    <?php \\\$help = false === \\\$help_html ? \\\$view->escape(\\\$help) : \\\$help ?>
    <p id=\\\"<?php echo \\\$view->escape(\\\$id); ?>_help\\\" <?php echo ' '.\\\$view['form']->block(\\\$form, 'attributes', ['attr' => \\\$help_attr]); ?>><?php echo \\\$help; ?></p>
<?php endif; ?>
\", \"@Framework/Form/form_help.html.php\", \"/var/www/public/DevLaon/vendor/symfony/framework-bundle/Resources/views/Form/form_help.html.php\");
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "var/cache/dev/twig/11/11c53d46ed390b8e2e225c1239a29df7cdbfbf6565478cf386118804434351e5.php";
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

/* @Framework/Form/form_help.html.php */
class __TwigTemplate_f0e9e2d2bd90ecbbaca87552152c6f1c8a238458ef54dae8e9db1518072ef496 extends \\Twig\\Template
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
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@Framework/Form/form_help.html.php\"));

        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = \$this->extensions[\"Symfony\\\\Bridge\\\\Twig\\\\Extension\\\\ProfilerExtension\"];
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@Framework/Form/form_help.html.php\"));

        // line 1
        echo \"<?php if (!empty(\\\$help)): ?>
    <?php \\\$help_attr['class'] = isset(\\\$help_attr['class']) ? trim(\\\$help_attr['class'].' help-text') : 'help-text'; ?>
    <?php \\\$help = false !== \\\$translation_domain ? \\\$view['translator']->trans(\\\$help, \\\$help_translation_parameters, \\\$translation_domain) : \\\$help; ?>
    <?php \\\$help = false === \\\$help_html ? \\\$view->escape(\\\$help) : \\\$help ?>
    <p id=\\\"<?php echo \\\$view->escape(\\\$id); ?>_help\\\" <?php echo ' '.\\\$view['form']->block(\\\$form, 'attributes', ['attr' => \\\$help_attr]); ?>><?php echo \\\$help; ?></p>
<?php endif; ?>
\";
        
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return \"@Framework/Form/form_help.html.php\";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(\"<?php if (!empty(\\\$help)): ?>
    <?php \\\$help_attr['class'] = isset(\\\$help_attr['class']) ? trim(\\\$help_attr['class'].' help-text') : 'help-text'; ?>
    <?php \\\$help = false !== \\\$translation_domain ? \\\$view['translator']->trans(\\\$help, \\\$help_translation_parameters, \\\$translation_domain) : \\\$help; ?>
    <?php \\\$help = false === \\\$help_html ? \\\$view->escape(\\\$help) : \\\$help ?>
    <p id=\\\"<?php echo \\\$view->escape(\\\$id); ?>_help\\\" <?php echo ' '.\\\$view['form']->block(\\\$form, 'attributes', ['attr' => \\\$help_attr]); ?>><?php echo \\\$help; ?></p>
<?php endif; ?>
\", \"@Framework/Form/form_help.html.php\", \"/var/www/public/DevLaon/vendor/symfony/framework-bundle/Resources/views/Form/form_help.html.php\");
    }
}
", "var/cache/dev/twig/11/11c53d46ed390b8e2e225c1239a29df7cdbfbf6565478cf386118804434351e5.php", "/var/www/public/DevLaon/templates/var/cache/dev/twig/11/11c53d46ed390b8e2e225c1239a29df7cdbfbf6565478cf386118804434351e5.php");
    }
}
