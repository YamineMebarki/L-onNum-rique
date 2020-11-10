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

/* vendor/symfony/routing/Matcher/Dumper/CompiledUrlMatcherTrait.php */
class __TwigTemplate_05ac1d1ca2b17212cde582f35eeb2c78a6a2e0b6aec332daa53a5669c17b7e63 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Matcher/Dumper/CompiledUrlMatcherTrait.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Matcher/Dumper/CompiledUrlMatcherTrait.php"));

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

use Symfony\\Component\\Routing\\Exception\\MethodNotAllowedException;
use Symfony\\Component\\Routing\\Exception\\NoConfigurationException;
use Symfony\\Component\\Routing\\Exception\\ResourceNotFoundException;
use Symfony\\Component\\Routing\\Matcher\\RedirectableUrlMatcherInterface;
use Symfony\\Component\\Routing\\RequestContext;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 *
 * @property RequestContext \$context
 */
trait CompiledUrlMatcherTrait
{
    private \$matchHost = false;
    private \$staticRoutes = [];
    private \$regexpList = [];
    private \$dynamicRoutes = [];
    private \$checkCondition;

    public function match(\$pathinfo)
    {
        \$allow = \$allowSchemes = [];
        if (\$ret = \$this->doMatch(\$pathinfo, \$allow, \$allowSchemes)) {
            return \$ret;
        }
        if (\$allow) {
            throw new MethodNotAllowedException(array_keys(\$allow));
        }
        if (!\$this instanceof RedirectableUrlMatcherInterface) {
            throw new ResourceNotFoundException(sprintf('No routes found for \"%s\".', \$pathinfo));
        }
        if (!\\in_array(\$this->context->getMethod(), ['HEAD', 'GET'], true)) {
            // no-op
        } elseif (\$allowSchemes) {
            redirect_scheme:
            \$scheme = \$this->context->getScheme();
            \$this->context->setScheme(key(\$allowSchemes));
            try {
                if (\$ret = \$this->doMatch(\$pathinfo)) {
                    return \$this->redirect(\$pathinfo, \$ret['_route'], \$this->context->getScheme()) + \$ret;
                }
            } finally {
                \$this->context->setScheme(\$scheme);
            }
        } elseif ('/' !== \$trimmedPathinfo = rtrim(\$pathinfo, '/') ?: '/') {
            \$pathinfo = \$trimmedPathinfo === \$pathinfo ? \$pathinfo.'/' : \$trimmedPathinfo;
            if (\$ret = \$this->doMatch(\$pathinfo, \$allow, \$allowSchemes)) {
                return \$this->redirect(\$pathinfo, \$ret['_route']) + \$ret;
            }
            if (\$allowSchemes) {
                goto redirect_scheme;
            }
        }

        throw new ResourceNotFoundException(sprintf('No routes found for \"%s\".', \$pathinfo));
    }

    private function doMatch(string \$pathinfo, array &\$allow = [], array &\$allowSchemes = []): array
    {
        \$allow = \$allowSchemes = [];
        \$pathinfo = rawurldecode(\$pathinfo) ?: '/';
        \$trimmedPathinfo = rtrim(\$pathinfo, '/') ?: '/';
        \$context = \$this->context;
        \$requestMethod = \$canonicalMethod = \$context->getMethod();

        if (\$this->matchHost) {
            \$host = strtolower(\$context->getHost());
        }

        if ('HEAD' === \$requestMethod) {
            \$canonicalMethod = 'GET';
        }
        \$supportsRedirections = 'GET' === \$canonicalMethod && \$this instanceof RedirectableUrlMatcherInterface;

        foreach (\$this->staticRoutes[\$trimmedPathinfo] ?? [] as list(\$ret, \$requiredHost, \$requiredMethods, \$requiredSchemes, \$hasTrailingSlash, , \$condition)) {
            if (\$condition && !(\$this->checkCondition)(\$condition, \$context, 0 < \$condition ? \$request ?? \$request = \$this->request ?: \$this->createRequest(\$pathinfo) : null)) {
                continue;
            }

            if (\$requiredHost) {
                if ('#' !== \$requiredHost[0] ? \$requiredHost !== \$host : !preg_match(\$requiredHost, \$host, \$hostMatches)) {
                    continue;
                }
                if ('#' === \$requiredHost[0] && \$hostMatches) {
                    \$hostMatches['_route'] = \$ret['_route'];
                    \$ret = \$this->mergeDefaults(\$hostMatches, \$ret);
                }
            }

            if ('/' !== \$pathinfo && \$hasTrailingSlash === (\$trimmedPathinfo === \$pathinfo)) {
                if (\$supportsRedirections && (!\$requiredMethods || isset(\$requiredMethods['GET']))) {
                    return \$allow = \$allowSchemes = [];
                }
                continue;
            }

            \$hasRequiredScheme = !\$requiredSchemes || isset(\$requiredSchemes[\$context->getScheme()]);
            if (\$hasRequiredScheme && \$requiredMethods && !isset(\$requiredMethods[\$canonicalMethod]) && !isset(\$requiredMethods[\$requestMethod])) {
                \$allow += \$requiredMethods;
                continue;
            }

            if (!\$hasRequiredScheme) {
                \$allowSchemes += \$requiredSchemes;
                continue;
            }

            return \$ret;
        }

        \$matchedPathinfo = \$this->matchHost ? \$host.'.'.\$pathinfo : \$pathinfo;

        foreach (\$this->regexpList as \$offset => \$regex) {
            while (preg_match(\$regex, \$matchedPathinfo, \$matches)) {
                foreach (\$this->dynamicRoutes[\$m = (int) \$matches['MARK']] as list(\$ret, \$vars, \$requiredMethods, \$requiredSchemes, \$hasTrailingSlash, \$hasTrailingVar, \$condition)) {
                    if (null !== \$condition) {
                        if (0 === \$condition) { // marks the last route in the regexp
                            continue 3;
                        }
                        if (!(\$this->checkCondition)(\$condition, \$context, 0 < \$condition ? \$request ?? \$request = \$this->request ?: \$this->createRequest(\$pathinfo) : null)) {
                            continue;
                        }
                    }

                    \$hasTrailingVar = \$trimmedPathinfo !== \$pathinfo && \$hasTrailingVar;

                    if (\$hasTrailingVar && (\$hasTrailingSlash || (null === \$n = \$matches[\\count(\$vars)] ?? null) || '/' !== (\$n[-1] ?? '/')) && preg_match(\$regex, \$this->matchHost ? \$host.'.'.\$trimmedPathinfo : \$trimmedPathinfo, \$n) && \$m === (int) \$n['MARK']) {
                        if (\$hasTrailingSlash) {
                            \$matches = \$n;
                        } else {
                            \$hasTrailingVar = false;
                        }
                    }

                    if ('/' !== \$pathinfo && !\$hasTrailingVar && \$hasTrailingSlash === (\$trimmedPathinfo === \$pathinfo)) {
                        if (\$supportsRedirections && (!\$requiredMethods || isset(\$requiredMethods['GET']))) {
                            return \$allow = \$allowSchemes = [];
                        }
                        continue;
                    }

                    foreach (\$vars as \$i => \$v) {
                        if (isset(\$matches[1 + \$i])) {
                            \$ret[\$v] = \$matches[1 + \$i];
                        }
                    }

                    if (\$requiredSchemes && !isset(\$requiredSchemes[\$context->getScheme()])) {
                        \$allowSchemes += \$requiredSchemes;
                        continue;
                    }

                    if (\$requiredMethods && !isset(\$requiredMethods[\$canonicalMethod]) && !isset(\$requiredMethods[\$requestMethod])) {
                        \$allow += \$requiredMethods;
                        continue;
                    }

                    return \$ret;
                }

                \$regex = substr_replace(\$regex, 'F', \$m - \$offset, 1 + \\strlen(\$m));
                \$offset += \\strlen(\$m);
            }
        }

        if ('/' === \$pathinfo && !\$allow && !\$allowSchemes) {
            throw new NoConfigurationException();
        }

        return [];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/routing/Matcher/Dumper/CompiledUrlMatcherTrait.php";
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

use Symfony\\Component\\Routing\\Exception\\MethodNotAllowedException;
use Symfony\\Component\\Routing\\Exception\\NoConfigurationException;
use Symfony\\Component\\Routing\\Exception\\ResourceNotFoundException;
use Symfony\\Component\\Routing\\Matcher\\RedirectableUrlMatcherInterface;
use Symfony\\Component\\Routing\\RequestContext;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 *
 * @property RequestContext \$context
 */
trait CompiledUrlMatcherTrait
{
    private \$matchHost = false;
    private \$staticRoutes = [];
    private \$regexpList = [];
    private \$dynamicRoutes = [];
    private \$checkCondition;

    public function match(\$pathinfo)
    {
        \$allow = \$allowSchemes = [];
        if (\$ret = \$this->doMatch(\$pathinfo, \$allow, \$allowSchemes)) {
            return \$ret;
        }
        if (\$allow) {
            throw new MethodNotAllowedException(array_keys(\$allow));
        }
        if (!\$this instanceof RedirectableUrlMatcherInterface) {
            throw new ResourceNotFoundException(sprintf('No routes found for \"%s\".', \$pathinfo));
        }
        if (!\\in_array(\$this->context->getMethod(), ['HEAD', 'GET'], true)) {
            // no-op
        } elseif (\$allowSchemes) {
            redirect_scheme:
            \$scheme = \$this->context->getScheme();
            \$this->context->setScheme(key(\$allowSchemes));
            try {
                if (\$ret = \$this->doMatch(\$pathinfo)) {
                    return \$this->redirect(\$pathinfo, \$ret['_route'], \$this->context->getScheme()) + \$ret;
                }
            } finally {
                \$this->context->setScheme(\$scheme);
            }
        } elseif ('/' !== \$trimmedPathinfo = rtrim(\$pathinfo, '/') ?: '/') {
            \$pathinfo = \$trimmedPathinfo === \$pathinfo ? \$pathinfo.'/' : \$trimmedPathinfo;
            if (\$ret = \$this->doMatch(\$pathinfo, \$allow, \$allowSchemes)) {
                return \$this->redirect(\$pathinfo, \$ret['_route']) + \$ret;
            }
            if (\$allowSchemes) {
                goto redirect_scheme;
            }
        }

        throw new ResourceNotFoundException(sprintf('No routes found for \"%s\".', \$pathinfo));
    }

    private function doMatch(string \$pathinfo, array &\$allow = [], array &\$allowSchemes = []): array
    {
        \$allow = \$allowSchemes = [];
        \$pathinfo = rawurldecode(\$pathinfo) ?: '/';
        \$trimmedPathinfo = rtrim(\$pathinfo, '/') ?: '/';
        \$context = \$this->context;
        \$requestMethod = \$canonicalMethod = \$context->getMethod();

        if (\$this->matchHost) {
            \$host = strtolower(\$context->getHost());
        }

        if ('HEAD' === \$requestMethod) {
            \$canonicalMethod = 'GET';
        }
        \$supportsRedirections = 'GET' === \$canonicalMethod && \$this instanceof RedirectableUrlMatcherInterface;

        foreach (\$this->staticRoutes[\$trimmedPathinfo] ?? [] as list(\$ret, \$requiredHost, \$requiredMethods, \$requiredSchemes, \$hasTrailingSlash, , \$condition)) {
            if (\$condition && !(\$this->checkCondition)(\$condition, \$context, 0 < \$condition ? \$request ?? \$request = \$this->request ?: \$this->createRequest(\$pathinfo) : null)) {
                continue;
            }

            if (\$requiredHost) {
                if ('#' !== \$requiredHost[0] ? \$requiredHost !== \$host : !preg_match(\$requiredHost, \$host, \$hostMatches)) {
                    continue;
                }
                if ('#' === \$requiredHost[0] && \$hostMatches) {
                    \$hostMatches['_route'] = \$ret['_route'];
                    \$ret = \$this->mergeDefaults(\$hostMatches, \$ret);
                }
            }

            if ('/' !== \$pathinfo && \$hasTrailingSlash === (\$trimmedPathinfo === \$pathinfo)) {
                if (\$supportsRedirections && (!\$requiredMethods || isset(\$requiredMethods['GET']))) {
                    return \$allow = \$allowSchemes = [];
                }
                continue;
            }

            \$hasRequiredScheme = !\$requiredSchemes || isset(\$requiredSchemes[\$context->getScheme()]);
            if (\$hasRequiredScheme && \$requiredMethods && !isset(\$requiredMethods[\$canonicalMethod]) && !isset(\$requiredMethods[\$requestMethod])) {
                \$allow += \$requiredMethods;
                continue;
            }

            if (!\$hasRequiredScheme) {
                \$allowSchemes += \$requiredSchemes;
                continue;
            }

            return \$ret;
        }

        \$matchedPathinfo = \$this->matchHost ? \$host.'.'.\$pathinfo : \$pathinfo;

        foreach (\$this->regexpList as \$offset => \$regex) {
            while (preg_match(\$regex, \$matchedPathinfo, \$matches)) {
                foreach (\$this->dynamicRoutes[\$m = (int) \$matches['MARK']] as list(\$ret, \$vars, \$requiredMethods, \$requiredSchemes, \$hasTrailingSlash, \$hasTrailingVar, \$condition)) {
                    if (null !== \$condition) {
                        if (0 === \$condition) { // marks the last route in the regexp
                            continue 3;
                        }
                        if (!(\$this->checkCondition)(\$condition, \$context, 0 < \$condition ? \$request ?? \$request = \$this->request ?: \$this->createRequest(\$pathinfo) : null)) {
                            continue;
                        }
                    }

                    \$hasTrailingVar = \$trimmedPathinfo !== \$pathinfo && \$hasTrailingVar;

                    if (\$hasTrailingVar && (\$hasTrailingSlash || (null === \$n = \$matches[\\count(\$vars)] ?? null) || '/' !== (\$n[-1] ?? '/')) && preg_match(\$regex, \$this->matchHost ? \$host.'.'.\$trimmedPathinfo : \$trimmedPathinfo, \$n) && \$m === (int) \$n['MARK']) {
                        if (\$hasTrailingSlash) {
                            \$matches = \$n;
                        } else {
                            \$hasTrailingVar = false;
                        }
                    }

                    if ('/' !== \$pathinfo && !\$hasTrailingVar && \$hasTrailingSlash === (\$trimmedPathinfo === \$pathinfo)) {
                        if (\$supportsRedirections && (!\$requiredMethods || isset(\$requiredMethods['GET']))) {
                            return \$allow = \$allowSchemes = [];
                        }
                        continue;
                    }

                    foreach (\$vars as \$i => \$v) {
                        if (isset(\$matches[1 + \$i])) {
                            \$ret[\$v] = \$matches[1 + \$i];
                        }
                    }

                    if (\$requiredSchemes && !isset(\$requiredSchemes[\$context->getScheme()])) {
                        \$allowSchemes += \$requiredSchemes;
                        continue;
                    }

                    if (\$requiredMethods && !isset(\$requiredMethods[\$canonicalMethod]) && !isset(\$requiredMethods[\$requestMethod])) {
                        \$allow += \$requiredMethods;
                        continue;
                    }

                    return \$ret;
                }

                \$regex = substr_replace(\$regex, 'F', \$m - \$offset, 1 + \\strlen(\$m));
                \$offset += \\strlen(\$m);
            }
        }

        if ('/' === \$pathinfo && !\$allow && !\$allowSchemes) {
            throw new NoConfigurationException();
        }

        return [];
    }
}
", "vendor/symfony/routing/Matcher/Dumper/CompiledUrlMatcherTrait.php", "/var/www/public/DevLaon/templates/vendor/symfony/routing/Matcher/Dumper/CompiledUrlMatcherTrait.php");
    }
}
