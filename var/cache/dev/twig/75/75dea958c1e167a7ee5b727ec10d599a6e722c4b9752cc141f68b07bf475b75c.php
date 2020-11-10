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

/* vendor/symfony/routing/Generator/CompiledUrlGenerator.php */
class __TwigTemplate_5ddbe82ffb8b243dbdb7ecfe94db7d27e17341b316f0d5c72d337846b7fd181f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Generator/CompiledUrlGenerator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Generator/CompiledUrlGenerator.php"));

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

namespace Symfony\\Component\\Routing\\Generator;

use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\Routing\\Exception\\RouteNotFoundException;
use Symfony\\Component\\Routing\\RequestContext;

/**
 * Generates URLs based on rules dumped by CompiledUrlGeneratorDumper.
 */
class CompiledUrlGenerator extends UrlGenerator
{
    private \$compiledRoutes = [];
    private \$defaultLocale;

    public function __construct(array \$compiledRoutes, RequestContext \$context, LoggerInterface \$logger = null, string \$defaultLocale = null)
    {
        \$this->compiledRoutes = \$compiledRoutes;
        \$this->context = \$context;
        \$this->logger = \$logger;
        \$this->defaultLocale = \$defaultLocale;
    }

    public function generate(\$name, \$parameters = [], \$referenceType = self::ABSOLUTE_PATH)
    {
        \$locale = \$parameters['_locale']
            ?? \$this->context->getParameter('_locale')
            ?: \$this->defaultLocale;

        if (null !== \$locale) {
            do {
                if ((\$this->compiledRoutes[\$name.'.'.\$locale][1]['_canonical_route'] ?? null) === \$name) {
                    unset(\$parameters['_locale']);
                    \$name .= '.'.\$locale;
                    break;
                }
            } while (false !== \$locale = strstr(\$locale, '_', true));
        }

        if (!isset(\$this->compiledRoutes[\$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route \"%s\" as such route does not exist.', \$name));
        }

        list(\$variables, \$defaults, \$requirements, \$tokens, \$hostTokens, \$requiredSchemes) = \$this->compiledRoutes[\$name];

        return \$this->doGenerate(\$variables, \$defaults, \$requirements, \$tokens, \$parameters, \$name, \$referenceType, \$hostTokens, \$requiredSchemes);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/routing/Generator/CompiledUrlGenerator.php";
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

namespace Symfony\\Component\\Routing\\Generator;

use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\Routing\\Exception\\RouteNotFoundException;
use Symfony\\Component\\Routing\\RequestContext;

/**
 * Generates URLs based on rules dumped by CompiledUrlGeneratorDumper.
 */
class CompiledUrlGenerator extends UrlGenerator
{
    private \$compiledRoutes = [];
    private \$defaultLocale;

    public function __construct(array \$compiledRoutes, RequestContext \$context, LoggerInterface \$logger = null, string \$defaultLocale = null)
    {
        \$this->compiledRoutes = \$compiledRoutes;
        \$this->context = \$context;
        \$this->logger = \$logger;
        \$this->defaultLocale = \$defaultLocale;
    }

    public function generate(\$name, \$parameters = [], \$referenceType = self::ABSOLUTE_PATH)
    {
        \$locale = \$parameters['_locale']
            ?? \$this->context->getParameter('_locale')
            ?: \$this->defaultLocale;

        if (null !== \$locale) {
            do {
                if ((\$this->compiledRoutes[\$name.'.'.\$locale][1]['_canonical_route'] ?? null) === \$name) {
                    unset(\$parameters['_locale']);
                    \$name .= '.'.\$locale;
                    break;
                }
            } while (false !== \$locale = strstr(\$locale, '_', true));
        }

        if (!isset(\$this->compiledRoutes[\$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route \"%s\" as such route does not exist.', \$name));
        }

        list(\$variables, \$defaults, \$requirements, \$tokens, \$hostTokens, \$requiredSchemes) = \$this->compiledRoutes[\$name];

        return \$this->doGenerate(\$variables, \$defaults, \$requirements, \$tokens, \$parameters, \$name, \$referenceType, \$hostTokens, \$requiredSchemes);
    }
}
", "vendor/symfony/routing/Generator/CompiledUrlGenerator.php", "/var/www/public/DevLaon/templates/vendor/symfony/routing/Generator/CompiledUrlGenerator.php");
    }
}
