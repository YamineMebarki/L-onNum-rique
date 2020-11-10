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

/* vendor/symfony/framework-bundle/Templating/Helper/FormHelper.php */
class __TwigTemplate_ee3001d4fc535fa37e4d9263d4ecb133c475cea10d51aa9ff1bc2052ed789a03 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Templating/Helper/FormHelper.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Templating/Helper/FormHelper.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper;

@trigger_error('The '.FormHelper::class.' class is deprecated since version 4.3 and will be removed in 5.0; use Twig instead.', E_USER_DEPRECATED);

use Symfony\\Component\\Form\\FormRendererInterface;
use Symfony\\Component\\Form\\FormView;
use Symfony\\Component\\Templating\\Helper\\Helper;

/**
 * FormHelper provides helpers to help display forms.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @deprecated since version 4.3, to be removed in 5.0; use Twig instead.
 */
class FormHelper extends Helper
{
    private \$renderer;

    public function __construct(FormRendererInterface \$renderer)
    {
        \$this->renderer = \$renderer;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'form';
    }

    /**
     * Sets a theme for a given view.
     *
     * The theme format is \"<Bundle>:<Controller>\".
     *
     * @param FormView     \$view             A FormView instance
     * @param string|array \$themes           A theme or an array of theme
     * @param bool         \$useDefaultThemes If true, will use default themes defined in the renderer
     */
    public function setTheme(FormView \$view, \$themes, \$useDefaultThemes = true)
    {
        \$this->renderer->setTheme(\$view, \$themes, \$useDefaultThemes);
    }

    /**
     * Renders the HTML for a form.
     *
     * Example usage:
     *
     *     <?php echo view['form']->form(\$form) ?>
     *
     * You can pass options during the call:
     *
     *     <?php echo view['form']->form(\$form, ['attr' => ['class' => 'foo']]) ?>
     *
     *     <?php echo view['form']->form(\$form, ['separator' => '+++++']) ?>
     *
     * This method is mainly intended for prototyping purposes. If you want to
     * control the layout of a form in a more fine-grained manner, you are
     * advised to use the other helper methods for rendering the parts of the
     * form individually. You can also create a custom form theme to adapt
     * the look of the form.
     *
     * @param FormView \$view      The view for which to render the form
     * @param array    \$variables Additional variables passed to the template
     *
     * @return string The HTML markup
     */
    public function form(FormView \$view, array \$variables = [])
    {
        return \$this->renderer->renderBlock(\$view, 'form', \$variables);
    }

    /**
     * Renders the form start tag.
     *
     * Example usage templates:
     *
     *     <?php echo \$view['form']->start(\$form) ?>>
     *
     * @param FormView \$view      The view for which to render the start tag
     * @param array    \$variables Additional variables passed to the template
     *
     * @return string The HTML markup
     */
    public function start(FormView \$view, array \$variables = [])
    {
        return \$this->renderer->renderBlock(\$view, 'form_start', \$variables);
    }

    /**
     * Renders the form end tag.
     *
     * Example usage templates:
     *
     *     <?php echo \$view['form']->end(\$form) ?>>
     *
     * @param FormView \$view      The view for which to render the end tag
     * @param array    \$variables Additional variables passed to the template
     *
     * @return string The HTML markup
     */
    public function end(FormView \$view, array \$variables = [])
    {
        return \$this->renderer->renderBlock(\$view, 'form_end', \$variables);
    }

    /**
     * Renders the HTML for a given view.
     *
     * Example usage:
     *
     *     <?php echo \$view['form']->widget(\$form) ?>
     *
     * You can pass options during the call:
     *
     *     <?php echo \$view['form']->widget(\$form, ['attr' => ['class' => 'foo']]) ?>
     *
     *     <?php echo \$view['form']->widget(\$form, ['separator' => '+++++']) ?>
     *
     * @param FormView \$view      The view for which to render the widget
     * @param array    \$variables Additional variables passed to the template
     *
     * @return string The HTML markup
     */
    public function widget(FormView \$view, array \$variables = [])
    {
        return \$this->renderer->searchAndRenderBlock(\$view, 'widget', \$variables);
    }

    /**
     * Renders the entire form field \"row\".
     *
     * @param FormView \$view      The view for which to render the row
     * @param array    \$variables Additional variables passed to the template
     *
     * @return string The HTML markup
     */
    public function row(FormView \$view, array \$variables = [])
    {
        return \$this->renderer->searchAndRenderBlock(\$view, 'row', \$variables);
    }

    /**
     * Renders the label of the given view.
     *
     * @param FormView \$view      The view for which to render the label
     * @param string   \$label     The label
     * @param array    \$variables Additional variables passed to the template
     *
     * @return string The HTML markup
     */
    public function label(FormView \$view, \$label = null, array \$variables = [])
    {
        if (null !== \$label) {
            \$variables += ['label' => \$label];
        }

        return \$this->renderer->searchAndRenderBlock(\$view, 'label', \$variables);
    }

    /**
     * Renders the help of the given view.
     *
     * @param FormView \$view The parent view
     *
     * @return string The HTML markup
     */
    public function help(FormView \$view): string
    {
        return \$this->renderer->searchAndRenderBlock(\$view, 'help');
    }

    /**
     * Renders the errors of the given view.
     *
     * @return string The HTML markup
     */
    public function errors(FormView \$view)
    {
        return \$this->renderer->searchAndRenderBlock(\$view, 'errors');
    }

    /**
     * Renders views which have not already been rendered.
     *
     * @param FormView \$view      The parent view
     * @param array    \$variables An array of variables
     *
     * @return string The HTML markup
     */
    public function rest(FormView \$view, array \$variables = [])
    {
        return \$this->renderer->searchAndRenderBlock(\$view, 'rest', \$variables);
    }

    /**
     * Renders a block of the template.
     *
     * @param FormView \$view      The view for determining the used themes
     * @param string   \$blockName The name of the block to render
     * @param array    \$variables The variable to pass to the template
     *
     * @return string The HTML markup
     */
    public function block(FormView \$view, \$blockName, array \$variables = [])
    {
        return \$this->renderer->renderBlock(\$view, \$blockName, \$variables);
    }

    /**
     * Returns a CSRF token.
     *
     * Use this helper for CSRF protection without the overhead of creating a
     * form.
     *
     *     echo \$view['form']->csrfToken('rm_user_'.\$user->getId());
     *
     * Check the token in your action using the same CSRF token id.
     *
     *     // \$csrfProvider being an instance of Symfony\\Component\\Security\\Csrf\\TokenGenerator\\TokenGeneratorInterface
     *     if (!\$csrfProvider->isCsrfTokenValid('rm_user_'.\$user->getId(), \$token)) {
     *         throw new \\RuntimeException('CSRF attack detected.');
     *     }
     *
     * @param string \$tokenId The CSRF token id of the protected action
     *
     * @return string A CSRF token
     *
     * @throws \\BadMethodCallException when no CSRF provider was injected in the constructor
     */
    public function csrfToken(\$tokenId)
    {
        return \$this->renderer->renderCsrfToken(\$tokenId);
    }

    public function humanize(\$text)
    {
        return \$this->renderer->humanize(\$text);
    }

    /**
     * @internal
     */
    public function formEncodeCurrency(\$text, \$widget = '')
    {
        if ('UTF-8' === \$charset = \$this->getCharset()) {
            \$text = htmlspecialchars(\$text, ENT_QUOTES | (\\defined('ENT_SUBSTITUTE') ? ENT_SUBSTITUTE : 0), 'UTF-8');
        } else {
            \$text = htmlentities(\$text, ENT_QUOTES | (\\defined('ENT_SUBSTITUTE') ? ENT_SUBSTITUTE : 0), 'UTF-8');
            \$text = iconv('UTF-8', \$charset, \$text);
            \$widget = iconv('UTF-8', \$charset, \$widget);
        }

        return str_replace('";
        // line 269
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 269, $this->source); })()), "html", null, true);
        echo "', \$widget, \$text);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Templating/Helper/FormHelper.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 269,  43 => 1,);
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

namespace Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper;

@trigger_error('The '.FormHelper::class.' class is deprecated since version 4.3 and will be removed in 5.0; use Twig instead.', E_USER_DEPRECATED);

use Symfony\\Component\\Form\\FormRendererInterface;
use Symfony\\Component\\Form\\FormView;
use Symfony\\Component\\Templating\\Helper\\Helper;

/**
 * FormHelper provides helpers to help display forms.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @deprecated since version 4.3, to be removed in 5.0; use Twig instead.
 */
class FormHelper extends Helper
{
    private \$renderer;

    public function __construct(FormRendererInterface \$renderer)
    {
        \$this->renderer = \$renderer;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'form';
    }

    /**
     * Sets a theme for a given view.
     *
     * The theme format is \"<Bundle>:<Controller>\".
     *
     * @param FormView     \$view             A FormView instance
     * @param string|array \$themes           A theme or an array of theme
     * @param bool         \$useDefaultThemes If true, will use default themes defined in the renderer
     */
    public function setTheme(FormView \$view, \$themes, \$useDefaultThemes = true)
    {
        \$this->renderer->setTheme(\$view, \$themes, \$useDefaultThemes);
    }

    /**
     * Renders the HTML for a form.
     *
     * Example usage:
     *
     *     <?php echo view['form']->form(\$form) ?>
     *
     * You can pass options during the call:
     *
     *     <?php echo view['form']->form(\$form, ['attr' => ['class' => 'foo']]) ?>
     *
     *     <?php echo view['form']->form(\$form, ['separator' => '+++++']) ?>
     *
     * This method is mainly intended for prototyping purposes. If you want to
     * control the layout of a form in a more fine-grained manner, you are
     * advised to use the other helper methods for rendering the parts of the
     * form individually. You can also create a custom form theme to adapt
     * the look of the form.
     *
     * @param FormView \$view      The view for which to render the form
     * @param array    \$variables Additional variables passed to the template
     *
     * @return string The HTML markup
     */
    public function form(FormView \$view, array \$variables = [])
    {
        return \$this->renderer->renderBlock(\$view, 'form', \$variables);
    }

    /**
     * Renders the form start tag.
     *
     * Example usage templates:
     *
     *     <?php echo \$view['form']->start(\$form) ?>>
     *
     * @param FormView \$view      The view for which to render the start tag
     * @param array    \$variables Additional variables passed to the template
     *
     * @return string The HTML markup
     */
    public function start(FormView \$view, array \$variables = [])
    {
        return \$this->renderer->renderBlock(\$view, 'form_start', \$variables);
    }

    /**
     * Renders the form end tag.
     *
     * Example usage templates:
     *
     *     <?php echo \$view['form']->end(\$form) ?>>
     *
     * @param FormView \$view      The view for which to render the end tag
     * @param array    \$variables Additional variables passed to the template
     *
     * @return string The HTML markup
     */
    public function end(FormView \$view, array \$variables = [])
    {
        return \$this->renderer->renderBlock(\$view, 'form_end', \$variables);
    }

    /**
     * Renders the HTML for a given view.
     *
     * Example usage:
     *
     *     <?php echo \$view['form']->widget(\$form) ?>
     *
     * You can pass options during the call:
     *
     *     <?php echo \$view['form']->widget(\$form, ['attr' => ['class' => 'foo']]) ?>
     *
     *     <?php echo \$view['form']->widget(\$form, ['separator' => '+++++']) ?>
     *
     * @param FormView \$view      The view for which to render the widget
     * @param array    \$variables Additional variables passed to the template
     *
     * @return string The HTML markup
     */
    public function widget(FormView \$view, array \$variables = [])
    {
        return \$this->renderer->searchAndRenderBlock(\$view, 'widget', \$variables);
    }

    /**
     * Renders the entire form field \"row\".
     *
     * @param FormView \$view      The view for which to render the row
     * @param array    \$variables Additional variables passed to the template
     *
     * @return string The HTML markup
     */
    public function row(FormView \$view, array \$variables = [])
    {
        return \$this->renderer->searchAndRenderBlock(\$view, 'row', \$variables);
    }

    /**
     * Renders the label of the given view.
     *
     * @param FormView \$view      The view for which to render the label
     * @param string   \$label     The label
     * @param array    \$variables Additional variables passed to the template
     *
     * @return string The HTML markup
     */
    public function label(FormView \$view, \$label = null, array \$variables = [])
    {
        if (null !== \$label) {
            \$variables += ['label' => \$label];
        }

        return \$this->renderer->searchAndRenderBlock(\$view, 'label', \$variables);
    }

    /**
     * Renders the help of the given view.
     *
     * @param FormView \$view The parent view
     *
     * @return string The HTML markup
     */
    public function help(FormView \$view): string
    {
        return \$this->renderer->searchAndRenderBlock(\$view, 'help');
    }

    /**
     * Renders the errors of the given view.
     *
     * @return string The HTML markup
     */
    public function errors(FormView \$view)
    {
        return \$this->renderer->searchAndRenderBlock(\$view, 'errors');
    }

    /**
     * Renders views which have not already been rendered.
     *
     * @param FormView \$view      The parent view
     * @param array    \$variables An array of variables
     *
     * @return string The HTML markup
     */
    public function rest(FormView \$view, array \$variables = [])
    {
        return \$this->renderer->searchAndRenderBlock(\$view, 'rest', \$variables);
    }

    /**
     * Renders a block of the template.
     *
     * @param FormView \$view      The view for determining the used themes
     * @param string   \$blockName The name of the block to render
     * @param array    \$variables The variable to pass to the template
     *
     * @return string The HTML markup
     */
    public function block(FormView \$view, \$blockName, array \$variables = [])
    {
        return \$this->renderer->renderBlock(\$view, \$blockName, \$variables);
    }

    /**
     * Returns a CSRF token.
     *
     * Use this helper for CSRF protection without the overhead of creating a
     * form.
     *
     *     echo \$view['form']->csrfToken('rm_user_'.\$user->getId());
     *
     * Check the token in your action using the same CSRF token id.
     *
     *     // \$csrfProvider being an instance of Symfony\\Component\\Security\\Csrf\\TokenGenerator\\TokenGeneratorInterface
     *     if (!\$csrfProvider->isCsrfTokenValid('rm_user_'.\$user->getId(), \$token)) {
     *         throw new \\RuntimeException('CSRF attack detected.');
     *     }
     *
     * @param string \$tokenId The CSRF token id of the protected action
     *
     * @return string A CSRF token
     *
     * @throws \\BadMethodCallException when no CSRF provider was injected in the constructor
     */
    public function csrfToken(\$tokenId)
    {
        return \$this->renderer->renderCsrfToken(\$tokenId);
    }

    public function humanize(\$text)
    {
        return \$this->renderer->humanize(\$text);
    }

    /**
     * @internal
     */
    public function formEncodeCurrency(\$text, \$widget = '')
    {
        if ('UTF-8' === \$charset = \$this->getCharset()) {
            \$text = htmlspecialchars(\$text, ENT_QUOTES | (\\defined('ENT_SUBSTITUTE') ? ENT_SUBSTITUTE : 0), 'UTF-8');
        } else {
            \$text = htmlentities(\$text, ENT_QUOTES | (\\defined('ENT_SUBSTITUTE') ? ENT_SUBSTITUTE : 0), 'UTF-8');
            \$text = iconv('UTF-8', \$charset, \$text);
            \$widget = iconv('UTF-8', \$charset, \$widget);
        }

        return str_replace('{{ widget }}', \$widget, \$text);
    }
}
", "vendor/symfony/framework-bundle/Templating/Helper/FormHelper.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Templating/Helper/FormHelper.php");
    }
}
