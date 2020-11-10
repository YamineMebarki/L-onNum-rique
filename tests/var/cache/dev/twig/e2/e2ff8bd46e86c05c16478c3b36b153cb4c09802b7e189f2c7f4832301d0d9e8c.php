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

/* vendor/symfony/routing/Annotation/Route.php */
class __TwigTemplate_36b82fc71f4d6e196f14d51cd035a41bcfad47aaae7c55ac142e18c6daf81c14 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Annotation/Route.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Annotation/Route.php"));

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

namespace Symfony\\Component\\Routing\\Annotation;

/**
 * Annotation class for @Route().
 *
 * @Annotation
 * @Target({\"CLASS\", \"METHOD\"})
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Route
{
    private \$path;
    private \$localizedPaths = [];
    private \$name;
    private \$requirements = [];
    private \$options = [];
    private \$defaults = [];
    private \$host;
    private \$methods = [];
    private \$schemes = [];
    private \$condition;
    private \$locale;
    private \$format;
    private \$utf8;

    /**
     * @param array \$data An array of key/value parameters
     *
     * @throws \\BadMethodCallException
     */
    public function __construct(array \$data)
    {
        if (isset(\$data['localized_paths'])) {
            throw new \\BadMethodCallException(sprintf('Unknown property \"localized_paths\" on annotation \"%s\".', \\get_class(\$this)));
        }

        if (isset(\$data['value'])) {
            \$data[\\is_array(\$data['value']) ? 'localized_paths' : 'path'] = \$data['value'];
            unset(\$data['value']);
        }

        if (isset(\$data['path']) && \\is_array(\$data['path'])) {
            \$data['localized_paths'] = \$data['path'];
            unset(\$data['path']);
        }

        if (isset(\$data['locale'])) {
            \$data['defaults']['_locale'] = \$data['locale'];
            unset(\$data['locale']);
        }

        if (isset(\$data['format'])) {
            \$data['defaults']['_format'] = \$data['format'];
            unset(\$data['format']);
        }

        if (isset(\$data['utf8'])) {
            \$data['options']['utf8'] = filter_var(\$data['utf8'], FILTER_VALIDATE_BOOLEAN) ?: false;
            unset(\$data['utf8']);
        }

        foreach (\$data as \$key => \$value) {
            \$method = 'set'.str_replace('_', '', \$key);
            if (!method_exists(\$this, \$method)) {
                throw new \\BadMethodCallException(sprintf('Unknown property \"%s\" on annotation \"%s\".', \$key, \\get_class(\$this)));
            }
            \$this->\$method(\$value);
        }
    }

    public function setPath(\$path)
    {
        \$this->path = \$path;
    }

    public function getPath()
    {
        return \$this->path;
    }

    public function setLocalizedPaths(array \$localizedPaths)
    {
        \$this->localizedPaths = \$localizedPaths;
    }

    public function getLocalizedPaths(): array
    {
        return \$this->localizedPaths;
    }

    public function setHost(\$pattern)
    {
        \$this->host = \$pattern;
    }

    public function getHost()
    {
        return \$this->host;
    }

    public function setName(\$name)
    {
        \$this->name = \$name;
    }

    public function getName()
    {
        return \$this->name;
    }

    public function setRequirements(\$requirements)
    {
        \$this->requirements = \$requirements;
    }

    public function getRequirements()
    {
        return \$this->requirements;
    }

    public function setOptions(\$options)
    {
        \$this->options = \$options;
    }

    public function getOptions()
    {
        return \$this->options;
    }

    public function setDefaults(\$defaults)
    {
        \$this->defaults = \$defaults;
    }

    public function getDefaults()
    {
        return \$this->defaults;
    }

    public function setSchemes(\$schemes)
    {
        \$this->schemes = \\is_array(\$schemes) ? \$schemes : [\$schemes];
    }

    public function getSchemes()
    {
        return \$this->schemes;
    }

    public function setMethods(\$methods)
    {
        \$this->methods = \\is_array(\$methods) ? \$methods : [\$methods];
    }

    public function getMethods()
    {
        return \$this->methods;
    }

    public function setCondition(\$condition)
    {
        \$this->condition = \$condition;
    }

    public function getCondition()
    {
        return \$this->condition;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/routing/Annotation/Route.php";
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

namespace Symfony\\Component\\Routing\\Annotation;

/**
 * Annotation class for @Route().
 *
 * @Annotation
 * @Target({\"CLASS\", \"METHOD\"})
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Route
{
    private \$path;
    private \$localizedPaths = [];
    private \$name;
    private \$requirements = [];
    private \$options = [];
    private \$defaults = [];
    private \$host;
    private \$methods = [];
    private \$schemes = [];
    private \$condition;
    private \$locale;
    private \$format;
    private \$utf8;

    /**
     * @param array \$data An array of key/value parameters
     *
     * @throws \\BadMethodCallException
     */
    public function __construct(array \$data)
    {
        if (isset(\$data['localized_paths'])) {
            throw new \\BadMethodCallException(sprintf('Unknown property \"localized_paths\" on annotation \"%s\".', \\get_class(\$this)));
        }

        if (isset(\$data['value'])) {
            \$data[\\is_array(\$data['value']) ? 'localized_paths' : 'path'] = \$data['value'];
            unset(\$data['value']);
        }

        if (isset(\$data['path']) && \\is_array(\$data['path'])) {
            \$data['localized_paths'] = \$data['path'];
            unset(\$data['path']);
        }

        if (isset(\$data['locale'])) {
            \$data['defaults']['_locale'] = \$data['locale'];
            unset(\$data['locale']);
        }

        if (isset(\$data['format'])) {
            \$data['defaults']['_format'] = \$data['format'];
            unset(\$data['format']);
        }

        if (isset(\$data['utf8'])) {
            \$data['options']['utf8'] = filter_var(\$data['utf8'], FILTER_VALIDATE_BOOLEAN) ?: false;
            unset(\$data['utf8']);
        }

        foreach (\$data as \$key => \$value) {
            \$method = 'set'.str_replace('_', '', \$key);
            if (!method_exists(\$this, \$method)) {
                throw new \\BadMethodCallException(sprintf('Unknown property \"%s\" on annotation \"%s\".', \$key, \\get_class(\$this)));
            }
            \$this->\$method(\$value);
        }
    }

    public function setPath(\$path)
    {
        \$this->path = \$path;
    }

    public function getPath()
    {
        return \$this->path;
    }

    public function setLocalizedPaths(array \$localizedPaths)
    {
        \$this->localizedPaths = \$localizedPaths;
    }

    public function getLocalizedPaths(): array
    {
        return \$this->localizedPaths;
    }

    public function setHost(\$pattern)
    {
        \$this->host = \$pattern;
    }

    public function getHost()
    {
        return \$this->host;
    }

    public function setName(\$name)
    {
        \$this->name = \$name;
    }

    public function getName()
    {
        return \$this->name;
    }

    public function setRequirements(\$requirements)
    {
        \$this->requirements = \$requirements;
    }

    public function getRequirements()
    {
        return \$this->requirements;
    }

    public function setOptions(\$options)
    {
        \$this->options = \$options;
    }

    public function getOptions()
    {
        return \$this->options;
    }

    public function setDefaults(\$defaults)
    {
        \$this->defaults = \$defaults;
    }

    public function getDefaults()
    {
        return \$this->defaults;
    }

    public function setSchemes(\$schemes)
    {
        \$this->schemes = \\is_array(\$schemes) ? \$schemes : [\$schemes];
    }

    public function getSchemes()
    {
        return \$this->schemes;
    }

    public function setMethods(\$methods)
    {
        \$this->methods = \\is_array(\$methods) ? \$methods : [\$methods];
    }

    public function getMethods()
    {
        return \$this->methods;
    }

    public function setCondition(\$condition)
    {
        \$this->condition = \$condition;
    }

    public function getCondition()
    {
        return \$this->condition;
    }
}
", "vendor/symfony/routing/Annotation/Route.php", "/var/www/public/DevLaon/templates/vendor/symfony/routing/Annotation/Route.php");
    }
}
