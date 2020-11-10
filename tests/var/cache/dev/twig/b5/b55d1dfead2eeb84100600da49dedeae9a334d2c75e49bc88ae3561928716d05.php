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

/* vendor/symfony/routing/Matcher/Dumper/StaticPrefixCollection.php */
class __TwigTemplate_7a5a5e4490a4f2222b5f83c6cc8a7ae804c25bdfa7656e81b32b28d573a8bcde extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Matcher/Dumper/StaticPrefixCollection.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Matcher/Dumper/StaticPrefixCollection.php"));

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

namespace Symfony\\Component\\Routing\\Matcher\\Dumper;

use Symfony\\Component\\Routing\\RouteCollection;

/**
 * Prefix tree of routes preserving routes order.
 *
 * @author Frank de Jonge <info@frankdejonge.nl>
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
class StaticPrefixCollection
{
    private \$prefix;

    /**
     * @var string[]
     */
    private \$staticPrefixes = [];

    /**
     * @var string[]
     */
    private \$prefixes = [];

    /**
     * @var array[]|self[]
     */
    private \$items = [];

    public function __construct(string \$prefix = '/')
    {
        \$this->prefix = \$prefix;
    }

    public function getPrefix(): string
    {
        return \$this->prefix;
    }

    /**
     * @return array[]|self[]
     */
    public function getRoutes(): array
    {
        return \$this->items;
    }

    /**
     * Adds a route to a group.
     *
     * @param array|self \$route
     */
    public function addRoute(string \$prefix, \$route)
    {
        list(\$prefix, \$staticPrefix) = \$this->getCommonPrefix(\$prefix, \$prefix);

        for (\$i = \\count(\$this->items) - 1; 0 <= \$i; --\$i) {
            \$item = \$this->items[\$i];

            list(\$commonPrefix, \$commonStaticPrefix) = \$this->getCommonPrefix(\$prefix, \$this->prefixes[\$i]);

            if (\$this->prefix === \$commonPrefix) {
                // the new route and a previous one have no common prefix, let's see if they are exclusive to each others

                if (\$this->prefix !== \$staticPrefix && \$this->prefix !== \$this->staticPrefixes[\$i]) {
                    // the new route and the previous one have exclusive static prefixes
                    continue;
                }

                if (\$this->prefix === \$staticPrefix && \$this->prefix === \$this->staticPrefixes[\$i]) {
                    // the new route and the previous one have no static prefix
                    break;
                }

                if (\$this->prefixes[\$i] !== \$this->staticPrefixes[\$i] && \$this->prefix === \$this->staticPrefixes[\$i]) {
                    // the previous route is non-static and has no static prefix
                    break;
                }

                if (\$prefix !== \$staticPrefix && \$this->prefix === \$staticPrefix) {
                    // the new route is non-static and has no static prefix
                    break;
                }

                continue;
            }

            if (\$item instanceof self && \$this->prefixes[\$i] === \$commonPrefix) {
                // the new route is a child of a previous one, let's nest it
                \$item->addRoute(\$prefix, \$route);
            } else {
                // the new route and a previous one have a common prefix, let's merge them
                \$child = new self(\$commonPrefix);
                list(\$child->prefixes[0], \$child->staticPrefixes[0]) = \$child->getCommonPrefix(\$this->prefixes[\$i], \$this->prefixes[\$i]);
                list(\$child->prefixes[1], \$child->staticPrefixes[1]) = \$child->getCommonPrefix(\$prefix, \$prefix);
                \$child->items = [\$this->items[\$i], \$route];

                \$this->staticPrefixes[\$i] = \$commonStaticPrefix;
                \$this->prefixes[\$i] = \$commonPrefix;
                \$this->items[\$i] = \$child;
            }

            return;
        }

        // No optimised case was found, in this case we simple add the route for possible
        // grouping when new routes are added.
        \$this->staticPrefixes[] = \$staticPrefix;
        \$this->prefixes[] = \$prefix;
        \$this->items[] = \$route;
    }

    /**
     * Linearizes back a set of nested routes into a collection.
     */
    public function populateCollection(RouteCollection \$routes): RouteCollection
    {
        foreach (\$this->items as \$route) {
            if (\$route instanceof self) {
                \$route->populateCollection(\$routes);
            } else {
                \$routes->add(...\$route);
            }
        }

        return \$routes;
    }

    /**
     * Gets the full and static common prefixes between two route patterns.
     *
     * The static prefix stops at last at the first opening bracket.
     */
    private function getCommonPrefix(string \$prefix, string \$anotherPrefix): array
    {
        \$baseLength = \\strlen(\$this->prefix);
        \$end = min(\\strlen(\$prefix), \\strlen(\$anotherPrefix));
        \$staticLength = null;
        set_error_handler([__CLASS__, 'handleError']);

        for (\$i = \$baseLength; \$i < \$end && \$prefix[\$i] === \$anotherPrefix[\$i]; ++\$i) {
            if ('(' === \$prefix[\$i]) {
                \$staticLength = \$staticLength ?? \$i;
                for (\$j = 1 + \$i, \$n = 1; \$j < \$end && 0 < \$n; ++\$j) {
                    if (\$prefix[\$j] !== \$anotherPrefix[\$j]) {
                        break 2;
                    }
                    if ('(' === \$prefix[\$j]) {
                        ++\$n;
                    } elseif (')' === \$prefix[\$j]) {
                        --\$n;
                    } elseif ('\\\\' === \$prefix[\$j] && (++\$j === \$end || \$prefix[\$j] !== \$anotherPrefix[\$j])) {
                        --\$j;
                        break;
                    }
                }
                if (0 < \$n) {
                    break;
                }
                if (('?' === (\$prefix[\$j] ?? '') || '?' === (\$anotherPrefix[\$j] ?? '')) && (\$prefix[\$j] ?? '') !== (\$anotherPrefix[\$j] ?? '')) {
                    break;
                }
                \$subPattern = substr(\$prefix, \$i, \$j - \$i);
                if (\$prefix !== \$anotherPrefix && !preg_match('/^\\(\\[[^\\]]++\\]\\+\\+\\)\$/', \$subPattern) && !preg_match('{(?<!'.\$subPattern.')}', '')) {
                    // sub-patterns of variable length are not considered as common prefixes because their greediness would break in-order matching
                    break;
                }
                \$i = \$j - 1;
            } elseif ('\\\\' === \$prefix[\$i] && (++\$i === \$end || \$prefix[\$i] !== \$anotherPrefix[\$i])) {
                --\$i;
                break;
            }
        }
        restore_error_handler();
        if (\$i < \$end && 0b10 === (\\ord(\$prefix[\$i]) >> 6) && preg_match('//u', \$prefix.' '.\$anotherPrefix)) {
            do {
                // Prevent cutting in the middle of an UTF-8 characters
                --\$i;
            } while (0b10 === (\\ord(\$prefix[\$i]) >> 6));
        }

        return [substr(\$prefix, 0, \$i), substr(\$prefix, 0, \$staticLength ?? \$i)];
    }

    public static function handleError(\$type, \$msg)
    {
        return false !== strpos(\$msg, 'Compilation failed: lookbehind assertion is not fixed length');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/routing/Matcher/Dumper/StaticPrefixCollection.php";
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

namespace Symfony\\Component\\Routing\\Matcher\\Dumper;

use Symfony\\Component\\Routing\\RouteCollection;

/**
 * Prefix tree of routes preserving routes order.
 *
 * @author Frank de Jonge <info@frankdejonge.nl>
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
class StaticPrefixCollection
{
    private \$prefix;

    /**
     * @var string[]
     */
    private \$staticPrefixes = [];

    /**
     * @var string[]
     */
    private \$prefixes = [];

    /**
     * @var array[]|self[]
     */
    private \$items = [];

    public function __construct(string \$prefix = '/')
    {
        \$this->prefix = \$prefix;
    }

    public function getPrefix(): string
    {
        return \$this->prefix;
    }

    /**
     * @return array[]|self[]
     */
    public function getRoutes(): array
    {
        return \$this->items;
    }

    /**
     * Adds a route to a group.
     *
     * @param array|self \$route
     */
    public function addRoute(string \$prefix, \$route)
    {
        list(\$prefix, \$staticPrefix) = \$this->getCommonPrefix(\$prefix, \$prefix);

        for (\$i = \\count(\$this->items) - 1; 0 <= \$i; --\$i) {
            \$item = \$this->items[\$i];

            list(\$commonPrefix, \$commonStaticPrefix) = \$this->getCommonPrefix(\$prefix, \$this->prefixes[\$i]);

            if (\$this->prefix === \$commonPrefix) {
                // the new route and a previous one have no common prefix, let's see if they are exclusive to each others

                if (\$this->prefix !== \$staticPrefix && \$this->prefix !== \$this->staticPrefixes[\$i]) {
                    // the new route and the previous one have exclusive static prefixes
                    continue;
                }

                if (\$this->prefix === \$staticPrefix && \$this->prefix === \$this->staticPrefixes[\$i]) {
                    // the new route and the previous one have no static prefix
                    break;
                }

                if (\$this->prefixes[\$i] !== \$this->staticPrefixes[\$i] && \$this->prefix === \$this->staticPrefixes[\$i]) {
                    // the previous route is non-static and has no static prefix
                    break;
                }

                if (\$prefix !== \$staticPrefix && \$this->prefix === \$staticPrefix) {
                    // the new route is non-static and has no static prefix
                    break;
                }

                continue;
            }

            if (\$item instanceof self && \$this->prefixes[\$i] === \$commonPrefix) {
                // the new route is a child of a previous one, let's nest it
                \$item->addRoute(\$prefix, \$route);
            } else {
                // the new route and a previous one have a common prefix, let's merge them
                \$child = new self(\$commonPrefix);
                list(\$child->prefixes[0], \$child->staticPrefixes[0]) = \$child->getCommonPrefix(\$this->prefixes[\$i], \$this->prefixes[\$i]);
                list(\$child->prefixes[1], \$child->staticPrefixes[1]) = \$child->getCommonPrefix(\$prefix, \$prefix);
                \$child->items = [\$this->items[\$i], \$route];

                \$this->staticPrefixes[\$i] = \$commonStaticPrefix;
                \$this->prefixes[\$i] = \$commonPrefix;
                \$this->items[\$i] = \$child;
            }

            return;
        }

        // No optimised case was found, in this case we simple add the route for possible
        // grouping when new routes are added.
        \$this->staticPrefixes[] = \$staticPrefix;
        \$this->prefixes[] = \$prefix;
        \$this->items[] = \$route;
    }

    /**
     * Linearizes back a set of nested routes into a collection.
     */
    public function populateCollection(RouteCollection \$routes): RouteCollection
    {
        foreach (\$this->items as \$route) {
            if (\$route instanceof self) {
                \$route->populateCollection(\$routes);
            } else {
                \$routes->add(...\$route);
            }
        }

        return \$routes;
    }

    /**
     * Gets the full and static common prefixes between two route patterns.
     *
     * The static prefix stops at last at the first opening bracket.
     */
    private function getCommonPrefix(string \$prefix, string \$anotherPrefix): array
    {
        \$baseLength = \\strlen(\$this->prefix);
        \$end = min(\\strlen(\$prefix), \\strlen(\$anotherPrefix));
        \$staticLength = null;
        set_error_handler([__CLASS__, 'handleError']);

        for (\$i = \$baseLength; \$i < \$end && \$prefix[\$i] === \$anotherPrefix[\$i]; ++\$i) {
            if ('(' === \$prefix[\$i]) {
                \$staticLength = \$staticLength ?? \$i;
                for (\$j = 1 + \$i, \$n = 1; \$j < \$end && 0 < \$n; ++\$j) {
                    if (\$prefix[\$j] !== \$anotherPrefix[\$j]) {
                        break 2;
                    }
                    if ('(' === \$prefix[\$j]) {
                        ++\$n;
                    } elseif (')' === \$prefix[\$j]) {
                        --\$n;
                    } elseif ('\\\\' === \$prefix[\$j] && (++\$j === \$end || \$prefix[\$j] !== \$anotherPrefix[\$j])) {
                        --\$j;
                        break;
                    }
                }
                if (0 < \$n) {
                    break;
                }
                if (('?' === (\$prefix[\$j] ?? '') || '?' === (\$anotherPrefix[\$j] ?? '')) && (\$prefix[\$j] ?? '') !== (\$anotherPrefix[\$j] ?? '')) {
                    break;
                }
                \$subPattern = substr(\$prefix, \$i, \$j - \$i);
                if (\$prefix !== \$anotherPrefix && !preg_match('/^\\(\\[[^\\]]++\\]\\+\\+\\)\$/', \$subPattern) && !preg_match('{(?<!'.\$subPattern.')}', '')) {
                    // sub-patterns of variable length are not considered as common prefixes because their greediness would break in-order matching
                    break;
                }
                \$i = \$j - 1;
            } elseif ('\\\\' === \$prefix[\$i] && (++\$i === \$end || \$prefix[\$i] !== \$anotherPrefix[\$i])) {
                --\$i;
                break;
            }
        }
        restore_error_handler();
        if (\$i < \$end && 0b10 === (\\ord(\$prefix[\$i]) >> 6) && preg_match('//u', \$prefix.' '.\$anotherPrefix)) {
            do {
                // Prevent cutting in the middle of an UTF-8 characters
                --\$i;
            } while (0b10 === (\\ord(\$prefix[\$i]) >> 6));
        }

        return [substr(\$prefix, 0, \$i), substr(\$prefix, 0, \$staticLength ?? \$i)];
    }

    public static function handleError(\$type, \$msg)
    {
        return false !== strpos(\$msg, 'Compilation failed: lookbehind assertion is not fixed length');
    }
}
", "vendor/symfony/routing/Matcher/Dumper/StaticPrefixCollection.php", "/var/www/public/DevLaon/templates/vendor/symfony/routing/Matcher/Dumper/StaticPrefixCollection.php");
    }
}
