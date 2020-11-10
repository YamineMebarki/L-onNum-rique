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

/* vendor/symfony/twig-bridge/Extension/RoutingExtension.php */
class __TwigTemplate_f0abc04c721cf0571a0c1cdf3b2d8e77f94a670608706ec58966ed56d0adcca8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Extension/RoutingExtension.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Extension/RoutingExtension.php"));

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

use Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface;
use Twig\\Extension\\AbstractExtension;
use Twig\\Node\\Expression\\ArrayExpression;
use Twig\\Node\\Expression\\ConstantExpression;
use Twig\\Node\\Node;
use Twig\\TwigFunction;

/**
 * Provides integration of the Routing component with Twig.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class RoutingExtension extends AbstractExtension
{
    private \$generator;

    public function __construct(UrlGeneratorInterface \$generator)
    {
        \$this->generator = \$generator;
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('url', [\$this, 'getUrl'], ['is_safe_callback' => [\$this, 'isUrlGenerationSafe']]),
            new TwigFunction('path', [\$this, 'getPath'], ['is_safe_callback' => [\$this, 'isUrlGenerationSafe']]),
        ];
    }

    /**
     * @param string \$name
     * @param array  \$parameters
     * @param bool   \$relative
     *
     * @return string
     */
    public function getPath(\$name, \$parameters = [], \$relative = false)
    {
        return \$this->generator->generate(\$name, \$parameters, \$relative ? UrlGeneratorInterface::RELATIVE_PATH : UrlGeneratorInterface::ABSOLUTE_PATH);
    }

    /**
     * @param string \$name
     * @param array  \$parameters
     * @param bool   \$schemeRelative
     *
     * @return string
     */
    public function getUrl(\$name, \$parameters = [], \$schemeRelative = false)
    {
        return \$this->generator->generate(\$name, \$parameters, \$schemeRelative ? UrlGeneratorInterface::NETWORK_PATH : UrlGeneratorInterface::ABSOLUTE_URL);
    }

    /**
     * Determines at compile time whether the generated URL will be safe and thus
     * saving the unneeded automatic escaping for performance reasons.
     *
     * The URL generation process percent encodes non-alphanumeric characters. So there is no risk
     * that malicious/invalid characters are part of the URL. The only character within an URL that
     * must be escaped in html is the ampersand (\"&\") which separates query params. So we cannot mark
     * the URL generation as always safe, but only when we are sure there won't be multiple query
     * params. This is the case when there are none or only one constant parameter given.
     * E.g. we know beforehand this will be safe:
     * - path('route')
     * - path('route', {'param': 'value'})
     * But the following may not:
     * - path('route', var)
     * - path('route', {'param': ['val1', 'val2'] }) // a sub-array
     * - path('route', {'param1': 'value1', 'param2': 'value2'})
     * If param1 and param2 reference placeholder in the route, it would still be safe. But we don't know.
     *
     * @param Node \$argsNode The arguments of the path/url function
     *
     * @return array An array with the contexts the URL is safe
     *
     * @final
     */
    public function isUrlGenerationSafe(Node \$argsNode)
    {
        // support named arguments
        \$paramsNode = \$argsNode->hasNode('parameters') ? \$argsNode->getNode('parameters') : (
            \$argsNode->hasNode(1) ? \$argsNode->getNode(1) : null
        );

        if (null === \$paramsNode || \$paramsNode instanceof ArrayExpression && \\count(\$paramsNode) <= 2 &&
            (!\$paramsNode->hasNode(1) || \$paramsNode->getNode(1) instanceof ConstantExpression)
        ) {
            return ['html'];
        }

        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'routing';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bridge/Extension/RoutingExtension.php";
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

namespace Symfony\\Bridge\\Twig\\Extension;

use Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface;
use Twig\\Extension\\AbstractExtension;
use Twig\\Node\\Expression\\ArrayExpression;
use Twig\\Node\\Expression\\ConstantExpression;
use Twig\\Node\\Node;
use Twig\\TwigFunction;

/**
 * Provides integration of the Routing component with Twig.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class RoutingExtension extends AbstractExtension
{
    private \$generator;

    public function __construct(UrlGeneratorInterface \$generator)
    {
        \$this->generator = \$generator;
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('url', [\$this, 'getUrl'], ['is_safe_callback' => [\$this, 'isUrlGenerationSafe']]),
            new TwigFunction('path', [\$this, 'getPath'], ['is_safe_callback' => [\$this, 'isUrlGenerationSafe']]),
        ];
    }

    /**
     * @param string \$name
     * @param array  \$parameters
     * @param bool   \$relative
     *
     * @return string
     */
    public function getPath(\$name, \$parameters = [], \$relative = false)
    {
        return \$this->generator->generate(\$name, \$parameters, \$relative ? UrlGeneratorInterface::RELATIVE_PATH : UrlGeneratorInterface::ABSOLUTE_PATH);
    }

    /**
     * @param string \$name
     * @param array  \$parameters
     * @param bool   \$schemeRelative
     *
     * @return string
     */
    public function getUrl(\$name, \$parameters = [], \$schemeRelative = false)
    {
        return \$this->generator->generate(\$name, \$parameters, \$schemeRelative ? UrlGeneratorInterface::NETWORK_PATH : UrlGeneratorInterface::ABSOLUTE_URL);
    }

    /**
     * Determines at compile time whether the generated URL will be safe and thus
     * saving the unneeded automatic escaping for performance reasons.
     *
     * The URL generation process percent encodes non-alphanumeric characters. So there is no risk
     * that malicious/invalid characters are part of the URL. The only character within an URL that
     * must be escaped in html is the ampersand (\"&\") which separates query params. So we cannot mark
     * the URL generation as always safe, but only when we are sure there won't be multiple query
     * params. This is the case when there are none or only one constant parameter given.
     * E.g. we know beforehand this will be safe:
     * - path('route')
     * - path('route', {'param': 'value'})
     * But the following may not:
     * - path('route', var)
     * - path('route', {'param': ['val1', 'val2'] }) // a sub-array
     * - path('route', {'param1': 'value1', 'param2': 'value2'})
     * If param1 and param2 reference placeholder in the route, it would still be safe. But we don't know.
     *
     * @param Node \$argsNode The arguments of the path/url function
     *
     * @return array An array with the contexts the URL is safe
     *
     * @final
     */
    public function isUrlGenerationSafe(Node \$argsNode)
    {
        // support named arguments
        \$paramsNode = \$argsNode->hasNode('parameters') ? \$argsNode->getNode('parameters') : (
            \$argsNode->hasNode(1) ? \$argsNode->getNode(1) : null
        );

        if (null === \$paramsNode || \$paramsNode instanceof ArrayExpression && \\count(\$paramsNode) <= 2 &&
            (!\$paramsNode->hasNode(1) || \$paramsNode->getNode(1) instanceof ConstantExpression)
        ) {
            return ['html'];
        }

        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'routing';
    }
}
", "vendor/symfony/twig-bridge/Extension/RoutingExtension.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bridge/Extension/RoutingExtension.php");
    }
}
