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

/* vendor/symfony/twig-bridge/Extension/FormExtension.php */
class __TwigTemplate_e517c94403914a884e1bad92350f05c0f1361d3a55526af6f7328cdd013eecd3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Extension/FormExtension.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Extension/FormExtension.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bridge\\Twig\\Extension;

use Symfony\\Bridge\\Twig\\TokenParser\\FormThemeTokenParser;
use Symfony\\Component\\Form\\ChoiceList\\View\\ChoiceView;
use Symfony\\Component\\Form\\FormView;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFilter;
use Twig\\TwigFunction;
use Twig\\TwigTest;

/**
 * FormExtension extends Twig with form capabilities.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class FormExtension extends AbstractExtension
{
    /**
     * {@inheritdoc}
     */
    public function getTokenParsers()
    {
        return [
            // ";
        // line 36
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), [0 => "SomeBundle::widgets.twig"], true);
        // line 37
        echo "            new FormThemeTokenParser(),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('form_widget', null, ['node_class' => 'Symfony\\Bridge\\Twig\\Node\\SearchAndRenderBlockNode', 'is_safe' => ['html']]),
            new TwigFunction('form_errors', null, ['node_class' => 'Symfony\\Bridge\\Twig\\Node\\SearchAndRenderBlockNode', 'is_safe' => ['html']]),
            new TwigFunction('form_label', null, ['node_class' => 'Symfony\\Bridge\\Twig\\Node\\SearchAndRenderBlockNode', 'is_safe' => ['html']]),
            new TwigFunction('form_help', null, ['node_class' => 'Symfony\\Bridge\\Twig\\Node\\SearchAndRenderBlockNode', 'is_safe' => ['html']]),
            new TwigFunction('form_row', null, ['node_class' => 'Symfony\\Bridge\\Twig\\Node\\SearchAndRenderBlockNode', 'is_safe' => ['html']]),
            new TwigFunction('form_rest', null, ['node_class' => 'Symfony\\Bridge\\Twig\\Node\\SearchAndRenderBlockNode', 'is_safe' => ['html']]),
            new TwigFunction('form', null, ['node_class' => 'Symfony\\Bridge\\Twig\\Node\\RenderBlockNode', 'is_safe' => ['html']]),
            new TwigFunction('form_start', null, ['node_class' => 'Symfony\\Bridge\\Twig\\Node\\RenderBlockNode', 'is_safe' => ['html']]),
            new TwigFunction('form_end', null, ['node_class' => 'Symfony\\Bridge\\Twig\\Node\\RenderBlockNode', 'is_safe' => ['html']]),
            new TwigFunction('csrf_token', ['Symfony\\Component\\Form\\FormRenderer', 'renderCsrfToken']),
            new TwigFunction('form_parent', 'Symfony\\Bridge\\Twig\\Extension\\twig_get_form_parent'),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getFilters()
    {
        return [
            new TwigFilter('humanize', ['Symfony\\Component\\Form\\FormRenderer', 'humanize']),
            new TwigFilter('form_encode_currency', ['Symfony\\Component\\Form\\FormRenderer', 'encodeCurrency'], ['is_safe' => ['html'], 'needs_environment' => true]),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getTests()
    {
        return [
            new TwigTest('selectedchoice', 'Symfony\\Bridge\\Twig\\Extension\\twig_is_selected_choice'),
            new TwigTest('rootform', 'Symfony\\Bridge\\Twig\\Extension\\twig_is_root_form'),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'form';
    }
}

/**
 * Returns whether a choice is selected for a given form value.
 *
 * This is a function and not callable due to performance reasons.
 *
 * @param string|array \$selectedValue The selected value to compare
 *
 * @return bool Whether the choice is selected
 *
 * @see ChoiceView::isSelected()
 */
function twig_is_selected_choice(ChoiceView \$choice, \$selectedValue)
{
    if (\\is_array(\$selectedValue)) {
        return \\in_array(\$choice->value, \$selectedValue, true);
    }

    return \$choice->value === \$selectedValue;
}

/**
 * @internal
 */
function twig_is_root_form(FormView \$formView)
{
    return null === \$formView->parent;
}

/**
 * @internal
 */
function twig_get_form_parent(FormView \$formView): ?FormView
{
    return \$formView->parent;
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bridge/Extension/FormExtension.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 37,  80 => 36,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bridge\\Twig\\Extension;

use Symfony\\Bridge\\Twig\\TokenParser\\FormThemeTokenParser;
use Symfony\\Component\\Form\\ChoiceList\\View\\ChoiceView;
use Symfony\\Component\\Form\\FormView;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFilter;
use Twig\\TwigFunction;
use Twig\\TwigTest;

/**
 * FormExtension extends Twig with form capabilities.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class FormExtension extends AbstractExtension
{
    /**
     * {@inheritdoc}
     */
    public function getTokenParsers()
    {
        return [
            // {% form_theme form \"SomeBundle::widgets.twig\" %}
            new FormThemeTokenParser(),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('form_widget', null, ['node_class' => 'Symfony\\Bridge\\Twig\\Node\\SearchAndRenderBlockNode', 'is_safe' => ['html']]),
            new TwigFunction('form_errors', null, ['node_class' => 'Symfony\\Bridge\\Twig\\Node\\SearchAndRenderBlockNode', 'is_safe' => ['html']]),
            new TwigFunction('form_label', null, ['node_class' => 'Symfony\\Bridge\\Twig\\Node\\SearchAndRenderBlockNode', 'is_safe' => ['html']]),
            new TwigFunction('form_help', null, ['node_class' => 'Symfony\\Bridge\\Twig\\Node\\SearchAndRenderBlockNode', 'is_safe' => ['html']]),
            new TwigFunction('form_row', null, ['node_class' => 'Symfony\\Bridge\\Twig\\Node\\SearchAndRenderBlockNode', 'is_safe' => ['html']]),
            new TwigFunction('form_rest', null, ['node_class' => 'Symfony\\Bridge\\Twig\\Node\\SearchAndRenderBlockNode', 'is_safe' => ['html']]),
            new TwigFunction('form', null, ['node_class' => 'Symfony\\Bridge\\Twig\\Node\\RenderBlockNode', 'is_safe' => ['html']]),
            new TwigFunction('form_start', null, ['node_class' => 'Symfony\\Bridge\\Twig\\Node\\RenderBlockNode', 'is_safe' => ['html']]),
            new TwigFunction('form_end', null, ['node_class' => 'Symfony\\Bridge\\Twig\\Node\\RenderBlockNode', 'is_safe' => ['html']]),
            new TwigFunction('csrf_token', ['Symfony\\Component\\Form\\FormRenderer', 'renderCsrfToken']),
            new TwigFunction('form_parent', 'Symfony\\Bridge\\Twig\\Extension\\twig_get_form_parent'),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getFilters()
    {
        return [
            new TwigFilter('humanize', ['Symfony\\Component\\Form\\FormRenderer', 'humanize']),
            new TwigFilter('form_encode_currency', ['Symfony\\Component\\Form\\FormRenderer', 'encodeCurrency'], ['is_safe' => ['html'], 'needs_environment' => true]),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getTests()
    {
        return [
            new TwigTest('selectedchoice', 'Symfony\\Bridge\\Twig\\Extension\\twig_is_selected_choice'),
            new TwigTest('rootform', 'Symfony\\Bridge\\Twig\\Extension\\twig_is_root_form'),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'form';
    }
}

/**
 * Returns whether a choice is selected for a given form value.
 *
 * This is a function and not callable due to performance reasons.
 *
 * @param string|array \$selectedValue The selected value to compare
 *
 * @return bool Whether the choice is selected
 *
 * @see ChoiceView::isSelected()
 */
function twig_is_selected_choice(ChoiceView \$choice, \$selectedValue)
{
    if (\\is_array(\$selectedValue)) {
        return \\in_array(\$choice->value, \$selectedValue, true);
    }

    return \$choice->value === \$selectedValue;
}

/**
 * @internal
 */
function twig_is_root_form(FormView \$formView)
{
    return null === \$formView->parent;
}

/**
 * @internal
 */
function twig_get_form_parent(FormView \$formView): ?FormView
{
    return \$formView->parent;
}
", "vendor/symfony/twig-bridge/Extension/FormExtension.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bridge/Extension/FormExtension.php");
    }
}
