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

/* vendor/twig/twig/src/TwigFilter.php */
class __TwigTemplate_38799f25b63c10248ee3d0d3ca24593aacc1d52da4dd32bd3903cf247deaa8ad extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/TwigFilter.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/TwigFilter.php"));

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

use Twig\\Node\\Expression\\FilterExpression;
use Twig\\Node\\Node;

/**
 * Represents a template filter.
 *
 * @final since Twig 2.4.0
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @see https://twig.symfony.com/doc/templates.html#filters
 */
class TwigFilter
{
    private \$name;
    private \$callable;
    private \$options;
    private \$arguments = [];

    /**
     * Creates a template filter.
     *
     * @param string        \$name     Name of this filter
     * @param callable|null \$callable A callable implementing the filter. If null, you need to overwrite the \"node_class\" option to customize compilation.
     * @param array         \$options  Options array
     */
    public function __construct(string \$name, \$callable = null, array \$options = [])
    {
        if (__CLASS__ !== \\get_class(\$this)) {
            @trigger_error('Overriding '.__CLASS__.' is deprecated since Twig 2.4.0 and the class will be final in 3.0.', E_USER_DEPRECATED);
        }

        \$this->name = \$name;
        \$this->callable = \$callable;
        \$this->options = array_merge([
            'needs_environment' => false,
            'needs_context' => false,
            'is_variadic' => false,
            'is_safe' => null,
            'is_safe_callback' => null,
            'pre_escape' => null,
            'preserves_safety' => null,
            'node_class' => FilterExpression::class,
            'deprecated' => false,
            'alternative' => null,
        ], \$options);
    }

    public function getName()
    {
        return \$this->name;
    }

    /**
     * Returns the callable to execute for this filter.
     *
     * @return callable|null
     */
    public function getCallable()
    {
        return \$this->callable;
    }

    public function getNodeClass()
    {
        return \$this->options['node_class'];
    }

    public function setArguments(\$arguments)
    {
        \$this->arguments = \$arguments;
    }

    public function getArguments()
    {
        return \$this->arguments;
    }

    public function needsEnvironment()
    {
        return \$this->options['needs_environment'];
    }

    public function needsContext()
    {
        return \$this->options['needs_context'];
    }

    public function getSafe(Node \$filterArgs)
    {
        if (null !== \$this->options['is_safe']) {
            return \$this->options['is_safe'];
        }

        if (null !== \$this->options['is_safe_callback']) {
            return \$this->options['is_safe_callback'](\$filterArgs);
        }
    }

    public function getPreservesSafety()
    {
        return \$this->options['preserves_safety'];
    }

    public function getPreEscape()
    {
        return \$this->options['pre_escape'];
    }

    public function isVariadic()
    {
        return \$this->options['is_variadic'];
    }

    public function isDeprecated()
    {
        return (bool) \$this->options['deprecated'];
    }

    public function getDeprecatedVersion()
    {
        return \$this->options['deprecated'];
    }

    public function getAlternative()
    {
        return \$this->options['alternative'];
    }
}

// For Twig 1.x compatibility
class_alias('Twig\\TwigFilter', 'Twig_SimpleFilter', false);

class_alias('Twig\\TwigFilter', 'Twig_Filter');

// Ensure that the aliased name is loaded to keep BC for classes implementing the typehint with the old aliased name.
class_exists('Twig\\Node\\Node');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/src/TwigFilter.php";
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

use Twig\\Node\\Expression\\FilterExpression;
use Twig\\Node\\Node;

/**
 * Represents a template filter.
 *
 * @final since Twig 2.4.0
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @see https://twig.symfony.com/doc/templates.html#filters
 */
class TwigFilter
{
    private \$name;
    private \$callable;
    private \$options;
    private \$arguments = [];

    /**
     * Creates a template filter.
     *
     * @param string        \$name     Name of this filter
     * @param callable|null \$callable A callable implementing the filter. If null, you need to overwrite the \"node_class\" option to customize compilation.
     * @param array         \$options  Options array
     */
    public function __construct(string \$name, \$callable = null, array \$options = [])
    {
        if (__CLASS__ !== \\get_class(\$this)) {
            @trigger_error('Overriding '.__CLASS__.' is deprecated since Twig 2.4.0 and the class will be final in 3.0.', E_USER_DEPRECATED);
        }

        \$this->name = \$name;
        \$this->callable = \$callable;
        \$this->options = array_merge([
            'needs_environment' => false,
            'needs_context' => false,
            'is_variadic' => false,
            'is_safe' => null,
            'is_safe_callback' => null,
            'pre_escape' => null,
            'preserves_safety' => null,
            'node_class' => FilterExpression::class,
            'deprecated' => false,
            'alternative' => null,
        ], \$options);
    }

    public function getName()
    {
        return \$this->name;
    }

    /**
     * Returns the callable to execute for this filter.
     *
     * @return callable|null
     */
    public function getCallable()
    {
        return \$this->callable;
    }

    public function getNodeClass()
    {
        return \$this->options['node_class'];
    }

    public function setArguments(\$arguments)
    {
        \$this->arguments = \$arguments;
    }

    public function getArguments()
    {
        return \$this->arguments;
    }

    public function needsEnvironment()
    {
        return \$this->options['needs_environment'];
    }

    public function needsContext()
    {
        return \$this->options['needs_context'];
    }

    public function getSafe(Node \$filterArgs)
    {
        if (null !== \$this->options['is_safe']) {
            return \$this->options['is_safe'];
        }

        if (null !== \$this->options['is_safe_callback']) {
            return \$this->options['is_safe_callback'](\$filterArgs);
        }
    }

    public function getPreservesSafety()
    {
        return \$this->options['preserves_safety'];
    }

    public function getPreEscape()
    {
        return \$this->options['pre_escape'];
    }

    public function isVariadic()
    {
        return \$this->options['is_variadic'];
    }

    public function isDeprecated()
    {
        return (bool) \$this->options['deprecated'];
    }

    public function getDeprecatedVersion()
    {
        return \$this->options['deprecated'];
    }

    public function getAlternative()
    {
        return \$this->options['alternative'];
    }
}

// For Twig 1.x compatibility
class_alias('Twig\\TwigFilter', 'Twig_SimpleFilter', false);

class_alias('Twig\\TwigFilter', 'Twig_Filter');

// Ensure that the aliased name is loaded to keep BC for classes implementing the typehint with the old aliased name.
class_exists('Twig\\Node\\Node');
", "vendor/twig/twig/src/TwigFilter.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/src/TwigFilter.php");
    }
}
