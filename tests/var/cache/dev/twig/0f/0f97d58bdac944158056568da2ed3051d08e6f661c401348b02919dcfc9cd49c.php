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

/* vendor/symfony/form/Extension/Templating/TemplatingRendererEngine.php */
class __TwigTemplate_868c146aed90ac5dbab66a44c27d6689eae197741517eb134ce61e19e25a05ca extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Templating/TemplatingRendererEngine.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Templating/TemplatingRendererEngine.php"));

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

namespace Symfony\\Component\\Form\\Extension\\Templating;

@trigger_error('The '.TemplatingRendererEngine::class.' class is deprecated since version 4.3 and will be removed in 5.0; use Twig instead.', E_USER_DEPRECATED);

use Symfony\\Component\\Form\\AbstractRendererEngine;
use Symfony\\Component\\Form\\FormView;
use Symfony\\Component\\Templating\\EngineInterface;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @deprecated since version 4.3, to be removed in 5.0; use Twig instead.
 */
class TemplatingRendererEngine extends AbstractRendererEngine
{
    private \$engine;

    public function __construct(EngineInterface \$engine, array \$defaultThemes = [])
    {
        parent::__construct(\$defaultThemes);

        \$this->engine = \$engine;
    }

    /**
     * {@inheritdoc}
     */
    public function renderBlock(FormView \$view, \$resource, \$blockName, array \$variables = [])
    {
        return trim(\$this->engine->render(\$resource, \$variables));
    }

    /**
     * Loads the cache with the resource for a given block name.
     *
     * This implementation tries to load as few blocks as possible, since each block
     * is represented by a template on the file system.
     *
     * @see getResourceForBlock()
     *
     * @param string   \$cacheKey  The cache key of the form view
     * @param FormView \$view      The form view for finding the applying themes
     * @param string   \$blockName The name of the block to load
     *
     * @return bool True if the resource could be loaded, false otherwise
     */
    protected function loadResourceForBlockName(\$cacheKey, FormView \$view, \$blockName)
    {
        // Recursively try to find the block in the themes assigned to \$view,
        // then of its parent form, then of the parent form of the parent and so on.
        // When the root form is reached in this recursion, also the default
        // themes are taken into account.

        // Check each theme whether it contains the searched block
        if (isset(\$this->themes[\$cacheKey])) {
            for (\$i = \\count(\$this->themes[\$cacheKey]) - 1; \$i >= 0; --\$i) {
                if (\$this->loadResourceFromTheme(\$cacheKey, \$blockName, \$this->themes[\$cacheKey][\$i])) {
                    return true;
                }
            }
        }

        // Check the default themes once we reach the root form without success
        if (!\$view->parent) {
            if (!isset(\$this->useDefaultThemes[\$cacheKey]) || \$this->useDefaultThemes[\$cacheKey]) {
                for (\$i = \\count(\$this->defaultThemes) - 1; \$i >= 0; --\$i) {
                    if (\$this->loadResourceFromTheme(\$cacheKey, \$blockName, \$this->defaultThemes[\$i])) {
                        return true;
                    }
                }
            }
        }

        // If we did not find anything in the themes of the current view, proceed
        // with the themes of the parent view
        if (\$view->parent) {
            \$parentCacheKey = \$view->parent->vars[self::CACHE_KEY_VAR];

            if (!isset(\$this->resources[\$parentCacheKey][\$blockName])) {
                \$this->loadResourceForBlockName(\$parentCacheKey, \$view->parent, \$blockName);
            }

            // If a template exists in the parent themes, cache that template
            // for the current theme as well to speed up further accesses
            if (\$this->resources[\$parentCacheKey][\$blockName]) {
                \$this->resources[\$cacheKey][\$blockName] = \$this->resources[\$parentCacheKey][\$blockName];

                return true;
            }
        }

        // Cache that we didn't find anything to speed up further accesses
        \$this->resources[\$cacheKey][\$blockName] = false;

        return false;
    }

    /**
     * Tries to load the resource for a block from a theme.
     *
     * @param string \$cacheKey  The cache key for storing the resource
     * @param string \$blockName The name of the block to load a resource for
     * @param mixed  \$theme     The theme to load the block from
     *
     * @return bool True if the resource could be loaded, false otherwise
     */
    protected function loadResourceFromTheme(\$cacheKey, \$blockName, \$theme)
    {
        if (\$this->engine->exists(\$templateName = \$theme.':'.\$blockName.'.html.php')) {
            \$this->resources[\$cacheKey][\$blockName] = \$templateName;

            return true;
        }

        return false;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Extension/Templating/TemplatingRendererEngine.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
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

namespace Symfony\\Component\\Form\\Extension\\Templating;

@trigger_error('The '.TemplatingRendererEngine::class.' class is deprecated since version 4.3 and will be removed in 5.0; use Twig instead.', E_USER_DEPRECATED);

use Symfony\\Component\\Form\\AbstractRendererEngine;
use Symfony\\Component\\Form\\FormView;
use Symfony\\Component\\Templating\\EngineInterface;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @deprecated since version 4.3, to be removed in 5.0; use Twig instead.
 */
class TemplatingRendererEngine extends AbstractRendererEngine
{
    private \$engine;

    public function __construct(EngineInterface \$engine, array \$defaultThemes = [])
    {
        parent::__construct(\$defaultThemes);

        \$this->engine = \$engine;
    }

    /**
     * {@inheritdoc}
     */
    public function renderBlock(FormView \$view, \$resource, \$blockName, array \$variables = [])
    {
        return trim(\$this->engine->render(\$resource, \$variables));
    }

    /**
     * Loads the cache with the resource for a given block name.
     *
     * This implementation tries to load as few blocks as possible, since each block
     * is represented by a template on the file system.
     *
     * @see getResourceForBlock()
     *
     * @param string   \$cacheKey  The cache key of the form view
     * @param FormView \$view      The form view for finding the applying themes
     * @param string   \$blockName The name of the block to load
     *
     * @return bool True if the resource could be loaded, false otherwise
     */
    protected function loadResourceForBlockName(\$cacheKey, FormView \$view, \$blockName)
    {
        // Recursively try to find the block in the themes assigned to \$view,
        // then of its parent form, then of the parent form of the parent and so on.
        // When the root form is reached in this recursion, also the default
        // themes are taken into account.

        // Check each theme whether it contains the searched block
        if (isset(\$this->themes[\$cacheKey])) {
            for (\$i = \\count(\$this->themes[\$cacheKey]) - 1; \$i >= 0; --\$i) {
                if (\$this->loadResourceFromTheme(\$cacheKey, \$blockName, \$this->themes[\$cacheKey][\$i])) {
                    return true;
                }
            }
        }

        // Check the default themes once we reach the root form without success
        if (!\$view->parent) {
            if (!isset(\$this->useDefaultThemes[\$cacheKey]) || \$this->useDefaultThemes[\$cacheKey]) {
                for (\$i = \\count(\$this->defaultThemes) - 1; \$i >= 0; --\$i) {
                    if (\$this->loadResourceFromTheme(\$cacheKey, \$blockName, \$this->defaultThemes[\$i])) {
                        return true;
                    }
                }
            }
        }

        // If we did not find anything in the themes of the current view, proceed
        // with the themes of the parent view
        if (\$view->parent) {
            \$parentCacheKey = \$view->parent->vars[self::CACHE_KEY_VAR];

            if (!isset(\$this->resources[\$parentCacheKey][\$blockName])) {
                \$this->loadResourceForBlockName(\$parentCacheKey, \$view->parent, \$blockName);
            }

            // If a template exists in the parent themes, cache that template
            // for the current theme as well to speed up further accesses
            if (\$this->resources[\$parentCacheKey][\$blockName]) {
                \$this->resources[\$cacheKey][\$blockName] = \$this->resources[\$parentCacheKey][\$blockName];

                return true;
            }
        }

        // Cache that we didn't find anything to speed up further accesses
        \$this->resources[\$cacheKey][\$blockName] = false;

        return false;
    }

    /**
     * Tries to load the resource for a block from a theme.
     *
     * @param string \$cacheKey  The cache key for storing the resource
     * @param string \$blockName The name of the block to load a resource for
     * @param mixed  \$theme     The theme to load the block from
     *
     * @return bool True if the resource could be loaded, false otherwise
     */
    protected function loadResourceFromTheme(\$cacheKey, \$blockName, \$theme)
    {
        if (\$this->engine->exists(\$templateName = \$theme.':'.\$blockName.'.html.php')) {
            \$this->resources[\$cacheKey][\$blockName] = \$templateName;

            return true;
        }

        return false;
    }
}
", "vendor/symfony/form/Extension/Templating/TemplatingRendererEngine.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Extension/Templating/TemplatingRendererEngine.php");
    }
}
