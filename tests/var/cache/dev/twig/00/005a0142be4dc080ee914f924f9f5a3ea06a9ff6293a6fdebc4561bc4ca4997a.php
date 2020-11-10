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

/* var/cache/dev/twig/c0/c0d1cb2f538224a3fd7688b57d5eb881093933d131bd15ee20d3901a16157b55.php */
class __TwigTemplate_52d0ca5f87bb0f5f642c2b8fddff09f96a20433a4bd6c0fdad78519fa20682d8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/twig/c0/c0d1cb2f538224a3fd7688b57d5eb881093933d131bd15ee20d3901a16157b55.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/twig/c0/c0d1cb2f538224a3fd7688b57d5eb881093933d131bd15ee20d3901a16157b55.php"));

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

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_f70519b9851bdab9cbe0621e60fa9f5ed6c4e3946edec8f28ed48984c6775eab extends \\Twig\\Template
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
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@Framework/Form/time_widget.html.php\"));

        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = \$this->extensions[\"Symfony\\\\Bridge\\\\Twig\\\\Extension\\\\ProfilerExtension\"];
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@Framework/Form/time_widget.html.php\"));

        // line 1
        echo \"<?php if (\\\$widget == 'single_text'): ?>
    <?php echo \\\$view['form']->block(\\\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \\\$vars = \\\$widget == 'text' ? ['attr' => ['size' => 1]] : [] ?>
    <div <?php echo \\\$view['form']->block(\\\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \\\$view['form']->widget(\\\$form['hour'], \\\$vars);

            if (\\\$with_minutes) {
                echo ':';
                echo \\\$view['form']->widget(\\\$form['minute'], \\\$vars);
            }

            if (\\\$with_seconds) {
                echo ':';
                echo \\\$view['form']->widget(\\\$form['second'], \\\$vars);
            }
        ?>
    </div>
<?php endif ?>
\";
        
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return \"@Framework/Form/time_widget.html.php\";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(\"<?php if (\\\$widget == 'single_text'): ?>
    <?php echo \\\$view['form']->block(\\\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \\\$vars = \\\$widget == 'text' ? ['attr' => ['size' => 1]] : [] ?>
    <div <?php echo \\\$view['form']->block(\\\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \\\$view['form']->widget(\\\$form['hour'], \\\$vars);

            if (\\\$with_minutes) {
                echo ':';
                echo \\\$view['form']->widget(\\\$form['minute'], \\\$vars);
            }

            if (\\\$with_seconds) {
                echo ':';
                echo \\\$view['form']->widget(\\\$form['second'], \\\$vars);
            }
        ?>
    </div>
<?php endif ?>
\", \"@Framework/Form/time_widget.html.php\", \"/var/www/public/DevLaon/vendor/symfony/framework-bundle/Resources/views/Form/time_widget.html.php\");
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "var/cache/dev/twig/c0/c0d1cb2f538224a3fd7688b57d5eb881093933d131bd15ee20d3901a16157b55.php";
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

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_f70519b9851bdab9cbe0621e60fa9f5ed6c4e3946edec8f28ed48984c6775eab extends \\Twig\\Template
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
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@Framework/Form/time_widget.html.php\"));

        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = \$this->extensions[\"Symfony\\\\Bridge\\\\Twig\\\\Extension\\\\ProfilerExtension\"];
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@Framework/Form/time_widget.html.php\"));

        // line 1
        echo \"<?php if (\\\$widget == 'single_text'): ?>
    <?php echo \\\$view['form']->block(\\\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \\\$vars = \\\$widget == 'text' ? ['attr' => ['size' => 1]] : [] ?>
    <div <?php echo \\\$view['form']->block(\\\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \\\$view['form']->widget(\\\$form['hour'], \\\$vars);

            if (\\\$with_minutes) {
                echo ':';
                echo \\\$view['form']->widget(\\\$form['minute'], \\\$vars);
            }

            if (\\\$with_seconds) {
                echo ':';
                echo \\\$view['form']->widget(\\\$form['second'], \\\$vars);
            }
        ?>
    </div>
<?php endif ?>
\";
        
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return \"@Framework/Form/time_widget.html.php\";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(\"<?php if (\\\$widget == 'single_text'): ?>
    <?php echo \\\$view['form']->block(\\\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \\\$vars = \\\$widget == 'text' ? ['attr' => ['size' => 1]] : [] ?>
    <div <?php echo \\\$view['form']->block(\\\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \\\$view['form']->widget(\\\$form['hour'], \\\$vars);

            if (\\\$with_minutes) {
                echo ':';
                echo \\\$view['form']->widget(\\\$form['minute'], \\\$vars);
            }

            if (\\\$with_seconds) {
                echo ':';
                echo \\\$view['form']->widget(\\\$form['second'], \\\$vars);
            }
        ?>
    </div>
<?php endif ?>
\", \"@Framework/Form/time_widget.html.php\", \"/var/www/public/DevLaon/vendor/symfony/framework-bundle/Resources/views/Form/time_widget.html.php\");
    }
}
", "var/cache/dev/twig/c0/c0d1cb2f538224a3fd7688b57d5eb881093933d131bd15ee20d3901a16157b55.php", "/var/www/public/DevLaon/templates/var/cache/dev/twig/c0/c0d1cb2f538224a3fd7688b57d5eb881093933d131bd15ee20d3901a16157b55.php");
    }
}