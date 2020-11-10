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

/* vendor/twig/twig/src/TemplateWrapper.php */
class __TwigTemplate_9678ea88b033fb38690cde55366a4464c4d297b5e6ad6b074c1c65e29e82bda2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/TemplateWrapper.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/TemplateWrapper.php"));

        // line 1
        echo "<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig;

/**
 * Exposes a template to userland.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class TemplateWrapper
{
    private \$env;
    private \$template;

    /**
     * This method is for internal use only and should never be called
     * directly (use Twig\\Environment::load() instead).
     *
     * @internal
     */
    public function __construct(Environment \$env, Template \$template)
    {
        \$this->env = \$env;
        \$this->template = \$template;
    }

    /**
     * Renders the template.
     *
     * @param array \$context An array of parameters to pass to the template
     */
    public function render(array \$context = []): string
    {
        // using func_get_args() allows to not expose the blocks argument
        // as it should only be used by internal code
        return \$this->template->render(\$context, \\func_get_args()[1] ?? []);
    }

    /**
     * Displays the template.
     *
     * @param array \$context An array of parameters to pass to the template
     */
    public function display(array \$context = [])
    {
        // using func_get_args() allows to not expose the blocks argument
        // as it should only be used by internal code
        \$this->template->display(\$context, \\func_get_args()[1] ?? []);
    }

    /**
     * Checks if a block is defined.
     *
     * @param string \$name    The block name
     * @param array  \$context An array of parameters to pass to the template
     */
    public function hasBlock(string \$name, array \$context = []): bool
    {
        return \$this->template->hasBlock(\$name, \$context);
    }

    /**
     * Returns defined block names in the template.
     *
     * @param array \$context An array of parameters to pass to the template
     *
     * @return string[] An array of defined template block names
     */
    public function getBlockNames(array \$context = []): array
    {
        return \$this->template->getBlockNames(\$context);
    }

    /**
     * Renders a template block.
     *
     * @param string \$name    The block name to render
     * @param array  \$context An array of parameters to pass to the template
     *
     * @return string The rendered block
     */
    public function renderBlock(string \$name, array \$context = []): string
    {
        \$context = \$this->env->mergeGlobals(\$context);
        \$level = ob_get_level();
        if (\$this->env->isDebug()) {
            ob_start();
        } else {
            ob_start(function () { return ''; });
        }
        try {
            \$this->template->displayBlock(\$name, \$context);
        } catch (\\Throwable \$e) {
            while (ob_get_level() > \$level) {
                ob_end_clean();
            }

            throw \$e;
        }

        return ob_get_clean();
    }

    /**
     * Displays a template block.
     *
     * @param string \$name    The block name to render
     * @param array  \$context An array of parameters to pass to the template
     */
    public function displayBlock(string \$name, array \$context = [])
    {
        \$this->template->displayBlock(\$name, \$this->env->mergeGlobals(\$context));
    }

    public function getSourceContext(): Source
    {
        return \$this->template->getSourceContext();
    }

    public function getTemplateName(): string
    {
        return \$this->template->getTemplateName();
    }

    /**
     * @internal
     *
     * @return Template
     */
    public function unwrap()
    {
        return \$this->template;
    }
}

class_alias('Twig\\TemplateWrapper', 'Twig_TemplateWrapper');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/src/TemplateWrapper.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig;

/**
 * Exposes a template to userland.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class TemplateWrapper
{
    private \$env;
    private \$template;

    /**
     * This method is for internal use only and should never be called
     * directly (use Twig\\Environment::load() instead).
     *
     * @internal
     */
    public function __construct(Environment \$env, Template \$template)
    {
        \$this->env = \$env;
        \$this->template = \$template;
    }

    /**
     * Renders the template.
     *
     * @param array \$context An array of parameters to pass to the template
     */
    public function render(array \$context = []): string
    {
        // using func_get_args() allows to not expose the blocks argument
        // as it should only be used by internal code
        return \$this->template->render(\$context, \\func_get_args()[1] ?? []);
    }

    /**
     * Displays the template.
     *
     * @param array \$context An array of parameters to pass to the template
     */
    public function display(array \$context = [])
    {
        // using func_get_args() allows to not expose the blocks argument
        // as it should only be used by internal code
        \$this->template->display(\$context, \\func_get_args()[1] ?? []);
    }

    /**
     * Checks if a block is defined.
     *
     * @param string \$name    The block name
     * @param array  \$context An array of parameters to pass to the template
     */
    public function hasBlock(string \$name, array \$context = []): bool
    {
        return \$this->template->hasBlock(\$name, \$context);
    }

    /**
     * Returns defined block names in the template.
     *
     * @param array \$context An array of parameters to pass to the template
     *
     * @return string[] An array of defined template block names
     */
    public function getBlockNames(array \$context = []): array
    {
        return \$this->template->getBlockNames(\$context);
    }

    /**
     * Renders a template block.
     *
     * @param string \$name    The block name to render
     * @param array  \$context An array of parameters to pass to the template
     *
     * @return string The rendered block
     */
    public function renderBlock(string \$name, array \$context = []): string
    {
        \$context = \$this->env->mergeGlobals(\$context);
        \$level = ob_get_level();
        if (\$this->env->isDebug()) {
            ob_start();
        } else {
            ob_start(function () { return ''; });
        }
        try {
            \$this->template->displayBlock(\$name, \$context);
        } catch (\\Throwable \$e) {
            while (ob_get_level() > \$level) {
                ob_end_clean();
            }

            throw \$e;
        }

        return ob_get_clean();
    }

    /**
     * Displays a template block.
     *
     * @param string \$name    The block name to render
     * @param array  \$context An array of parameters to pass to the template
     */
    public function displayBlock(string \$name, array \$context = [])
    {
        \$this->template->displayBlock(\$name, \$this->env->mergeGlobals(\$context));
    }

    public function getSourceContext(): Source
    {
        return \$this->template->getSourceContext();
    }

    public function getTemplateName(): string
    {
        return \$this->template->getTemplateName();
    }

    /**
     * @internal
     *
     * @return Template
     */
    public function unwrap()
    {
        return \$this->template;
    }
}

class_alias('Twig\\TemplateWrapper', 'Twig_TemplateWrapper');
", "vendor/twig/twig/src/TemplateWrapper.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/src/TemplateWrapper.php");
    }
}
