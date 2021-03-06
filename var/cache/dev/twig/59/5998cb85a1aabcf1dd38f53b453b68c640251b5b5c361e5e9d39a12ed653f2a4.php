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

/* var/cache/dev/twig/8c/8ca08ead6b1f13b6d6303faab4c6b4934152a1bbd2da7bd0b4c55e619a831f9e.php */
class __TwigTemplate_0e1af76da393c4a3f1f85c0f14e581c793ce0c5365356dc984a89df5318f2d5e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/twig/8c/8ca08ead6b1f13b6d6303faab4c6b4934152a1bbd2da7bd0b4c55e619a831f9e.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/twig/8c/8ca08ead6b1f13b6d6303faab4c6b4934152a1bbd2da7bd0b4c55e619a831f9e.php"));

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

/* @Framework/Form/choice_widget_options.html.php */
class __TwigTemplate_62ae99cc9f7ea65fa42e0661291cf37ee8092e50ae9a82e69e4486f50f956687 extends \\Twig\\Template
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
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@Framework/Form/choice_widget_options.html.php\"));

        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = \$this->extensions[\"Symfony\\\\Bridge\\\\Twig\\\\Extension\\\\ProfilerExtension\"];
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@Framework/Form/choice_widget_options.html.php\"));

        // line 1
        echo \"<?php use Symfony\\\\Component\\\\Form\\\\ChoiceList\\\\View\\\\ChoiceGroupView;

\\\$translatorHelper = \\\$view['translator']; // outside of the loop for performance reasons! ?>
<?php \\\$formHelper = \\\$view['form']; ?>
<?php foreach (\\\$choices as \\\$group_label => \\\$choice): ?>
    <?php if (is_array(\\\$choice) || \\\$choice instanceof ChoiceGroupView): ?>
        <optgroup label=\\\"<?php echo \\\$view->escape(false !== \\\$choice_translation_domain ? \\\$translatorHelper->trans(\\\$group_label, [], \\\$choice_translation_domain) : \\\$group_label) ?>\\\">
            <?php echo \\\$formHelper->block(\\\$form, 'choice_widget_options', ['choices' => \\\$choice]) ?>
        </optgroup>
    <?php else: ?>
        <option value=\\\"<?php echo \\\$view->escape(\\\$choice->value) ?>\\\" <?php echo \\\$formHelper->block(\\\$form, 'choice_attributes', ['choice_attr' => \\\$choice->attr]) ?><?php if (\\\$is_selected(\\\$choice->value, \\\$value)): ?> selected=\\\"selected\\\"<?php endif?>><?php echo \\\$view->escape(false !== \\\$choice_translation_domain ? \\\$translatorHelper->trans(\\\$choice->label, [], \\\$choice_translation_domain) : \\\$choice->label) ?></option>
    <?php endif ?>
<?php endforeach ?>
\";
        
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return \"@Framework/Form/choice_widget_options.html.php\";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(\"<?php use Symfony\\\\Component\\\\Form\\\\ChoiceList\\\\View\\\\ChoiceGroupView;

\\\$translatorHelper = \\\$view['translator']; // outside of the loop for performance reasons! ?>
<?php \\\$formHelper = \\\$view['form']; ?>
<?php foreach (\\\$choices as \\\$group_label => \\\$choice): ?>
    <?php if (is_array(\\\$choice) || \\\$choice instanceof ChoiceGroupView): ?>
        <optgroup label=\\\"<?php echo \\\$view->escape(false !== \\\$choice_translation_domain ? \\\$translatorHelper->trans(\\\$group_label, [], \\\$choice_translation_domain) : \\\$group_label) ?>\\\">
            <?php echo \\\$formHelper->block(\\\$form, 'choice_widget_options', ['choices' => \\\$choice]) ?>
        </optgroup>
    <?php else: ?>
        <option value=\\\"<?php echo \\\$view->escape(\\\$choice->value) ?>\\\" <?php echo \\\$formHelper->block(\\\$form, 'choice_attributes', ['choice_attr' => \\\$choice->attr]) ?><?php if (\\\$is_selected(\\\$choice->value, \\\$value)): ?> selected=\\\"selected\\\"<?php endif?>><?php echo \\\$view->escape(false !== \\\$choice_translation_domain ? \\\$translatorHelper->trans(\\\$choice->label, [], \\\$choice_translation_domain) : \\\$choice->label) ?></option>
    <?php endif ?>
<?php endforeach ?>
\", \"@Framework/Form/choice_widget_options.html.php\", \"/var/www/public/DevLaon/vendor/symfony/framework-bundle/Resources/views/Form/choice_widget_options.html.php\");
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "var/cache/dev/twig/8c/8ca08ead6b1f13b6d6303faab4c6b4934152a1bbd2da7bd0b4c55e619a831f9e.php";
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

/* @Framework/Form/choice_widget_options.html.php */
class __TwigTemplate_62ae99cc9f7ea65fa42e0661291cf37ee8092e50ae9a82e69e4486f50f956687 extends \\Twig\\Template
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
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@Framework/Form/choice_widget_options.html.php\"));

        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = \$this->extensions[\"Symfony\\\\Bridge\\\\Twig\\\\Extension\\\\ProfilerExtension\"];
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@Framework/Form/choice_widget_options.html.php\"));

        // line 1
        echo \"<?php use Symfony\\\\Component\\\\Form\\\\ChoiceList\\\\View\\\\ChoiceGroupView;

\\\$translatorHelper = \\\$view['translator']; // outside of the loop for performance reasons! ?>
<?php \\\$formHelper = \\\$view['form']; ?>
<?php foreach (\\\$choices as \\\$group_label => \\\$choice): ?>
    <?php if (is_array(\\\$choice) || \\\$choice instanceof ChoiceGroupView): ?>
        <optgroup label=\\\"<?php echo \\\$view->escape(false !== \\\$choice_translation_domain ? \\\$translatorHelper->trans(\\\$group_label, [], \\\$choice_translation_domain) : \\\$group_label) ?>\\\">
            <?php echo \\\$formHelper->block(\\\$form, 'choice_widget_options', ['choices' => \\\$choice]) ?>
        </optgroup>
    <?php else: ?>
        <option value=\\\"<?php echo \\\$view->escape(\\\$choice->value) ?>\\\" <?php echo \\\$formHelper->block(\\\$form, 'choice_attributes', ['choice_attr' => \\\$choice->attr]) ?><?php if (\\\$is_selected(\\\$choice->value, \\\$value)): ?> selected=\\\"selected\\\"<?php endif?>><?php echo \\\$view->escape(false !== \\\$choice_translation_domain ? \\\$translatorHelper->trans(\\\$choice->label, [], \\\$choice_translation_domain) : \\\$choice->label) ?></option>
    <?php endif ?>
<?php endforeach ?>
\";
        
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return \"@Framework/Form/choice_widget_options.html.php\";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(\"<?php use Symfony\\\\Component\\\\Form\\\\ChoiceList\\\\View\\\\ChoiceGroupView;

\\\$translatorHelper = \\\$view['translator']; // outside of the loop for performance reasons! ?>
<?php \\\$formHelper = \\\$view['form']; ?>
<?php foreach (\\\$choices as \\\$group_label => \\\$choice): ?>
    <?php if (is_array(\\\$choice) || \\\$choice instanceof ChoiceGroupView): ?>
        <optgroup label=\\\"<?php echo \\\$view->escape(false !== \\\$choice_translation_domain ? \\\$translatorHelper->trans(\\\$group_label, [], \\\$choice_translation_domain) : \\\$group_label) ?>\\\">
            <?php echo \\\$formHelper->block(\\\$form, 'choice_widget_options', ['choices' => \\\$choice]) ?>
        </optgroup>
    <?php else: ?>
        <option value=\\\"<?php echo \\\$view->escape(\\\$choice->value) ?>\\\" <?php echo \\\$formHelper->block(\\\$form, 'choice_attributes', ['choice_attr' => \\\$choice->attr]) ?><?php if (\\\$is_selected(\\\$choice->value, \\\$value)): ?> selected=\\\"selected\\\"<?php endif?>><?php echo \\\$view->escape(false !== \\\$choice_translation_domain ? \\\$translatorHelper->trans(\\\$choice->label, [], \\\$choice_translation_domain) : \\\$choice->label) ?></option>
    <?php endif ?>
<?php endforeach ?>
\", \"@Framework/Form/choice_widget_options.html.php\", \"/var/www/public/DevLaon/vendor/symfony/framework-bundle/Resources/views/Form/choice_widget_options.html.php\");
    }
}
", "var/cache/dev/twig/8c/8ca08ead6b1f13b6d6303faab4c6b4934152a1bbd2da7bd0b4c55e619a831f9e.php", "/var/www/public/DevLaon/templates/var/cache/dev/twig/8c/8ca08ead6b1f13b6d6303faab4c6b4934152a1bbd2da7bd0b4c55e619a831f9e.php");
    }
}
