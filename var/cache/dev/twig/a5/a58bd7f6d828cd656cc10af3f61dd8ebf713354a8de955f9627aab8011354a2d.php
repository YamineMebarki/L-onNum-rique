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

/* vendor/symfony/routing/Generator/Dumper/PhpGeneratorDumper.php */
class __TwigTemplate_d466f89c6b5b5f1ed4bae2b61352dcb6cf97e8acb2c5886b4395860512380e59 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Generator/Dumper/PhpGeneratorDumper.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Generator/Dumper/PhpGeneratorDumper.php"));

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

namespace Symfony\\Component\\Routing\\Generator\\Dumper;

@trigger_error(sprintf('The \"%s\" class is deprecated since Symfony 4.3, use \"CompiledUrlGeneratorDumper\" instead.', PhpGeneratorDumper::class), E_USER_DEPRECATED);

use Symfony\\Component\\Routing\\Matcher\\Dumper\\CompiledUrlMatcherDumper;

/**
 * PhpGeneratorDumper creates a PHP class able to generate URLs for a given set of routes.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Tobias Schultze <http://tobion.de>
 *
 * @deprecated since Symfony 4.3, use CompiledUrlGeneratorDumper instead.
 */
class PhpGeneratorDumper extends GeneratorDumper
{
    /**
     * Dumps a set of routes to a PHP class.
     *
     * Available options:
     *
     *  * class:      The class name
     *  * base_class: The base class name
     *
     * @param array \$options An array of options
     *
     * @return string A PHP class representing the generator class
     */
    public function dump(array \$options = [])
    {
        \$options = array_merge([
            'class' => 'ProjectUrlGenerator',
            'base_class' => 'Symfony\\\\Component\\\\Routing\\\\Generator\\\\UrlGenerator',
        ], \$options);

        return <<<EOF
<?php

use Symfony\\Component\\Routing\\RequestContext;
use Symfony\\Component\\Routing\\Exception\\RouteNotFoundException;
use Psr\\Log\\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class {\$options['class']} extends {\$options['base_class']}
{
    private static \\\$declaredRoutes;
    private \\\$defaultLocale;

    public function __construct(RequestContext \\\$context, LoggerInterface \\\$logger = null, string \\\$defaultLocale = null)
    {
        \\\$this->context = \\\$context;
        \\\$this->logger = \\\$logger;
        \\\$this->defaultLocale = \\\$defaultLocale;
        if (null === self::\\\$declaredRoutes) {
            self::\\\$declaredRoutes = {\$this->generateDeclaredRoutes()};
        }
    }

{\$this->generateGenerateMethod()}
}

EOF;
    }

    /**
     * Generates PHP code representing an array of defined routes
     * together with the routes properties (e.g. requirements).
     *
     * @return string PHP code
     */
    private function generateDeclaredRoutes()
    {
        \$routes = \"[\\n\";
        foreach (\$this->getRoutes()->all() as \$name => \$route) {
            \$compiledRoute = \$route->compile();

            \$properties = [];
            \$properties[] = \$compiledRoute->getVariables();
            \$properties[] = \$route->getDefaults();
            \$properties[] = \$route->getRequirements();
            \$properties[] = \$compiledRoute->getTokens();
            \$properties[] = \$compiledRoute->getHostTokens();
            \$properties[] = \$route->getSchemes();

            \$routes .= sprintf(\"        '%s' => %s,\\n\", \$name, CompiledUrlMatcherDumper::export(\$properties));
        }
        \$routes .= '    ]';

        return \$routes;
    }

    /**
     * Generates PHP code representing the `generate` method that implements the UrlGeneratorInterface.
     *
     * @return string PHP code
     */
    private function generateGenerateMethod()
    {
        return <<<'EOF'
    public function generate(\$name, \$parameters = [], \$referenceType = self::ABSOLUTE_PATH)
    {
        \$locale = \$parameters['_locale']
            ?? \$this->context->getParameter('_locale')
            ?: \$this->defaultLocale;

        if (null !== \$locale && null !== \$name) {
            do {
                if ((self::\$declaredRoutes[\$name.'.'.\$locale][1]['_canonical_route'] ?? null) === \$name) {
                    unset(\$parameters['_locale']);
                    \$name .= '.'.\$locale;
                    break;
                }
            } while (false !== \$locale = strstr(\$locale, '_', true));
        }

        if (!isset(self::\$declaredRoutes[\$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route \"%s\" as such route does not exist.', \$name));
        }

        list(\$variables, \$defaults, \$requirements, \$tokens, \$hostTokens, \$requiredSchemes) = self::\$declaredRoutes[\$name];

        return \$this->doGenerate(\$variables, \$defaults, \$requirements, \$tokens, \$parameters, \$name, \$referenceType, \$hostTokens, \$requiredSchemes);
    }
EOF;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/routing/Generator/Dumper/PhpGeneratorDumper.php";
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

namespace Symfony\\Component\\Routing\\Generator\\Dumper;

@trigger_error(sprintf('The \"%s\" class is deprecated since Symfony 4.3, use \"CompiledUrlGeneratorDumper\" instead.', PhpGeneratorDumper::class), E_USER_DEPRECATED);

use Symfony\\Component\\Routing\\Matcher\\Dumper\\CompiledUrlMatcherDumper;

/**
 * PhpGeneratorDumper creates a PHP class able to generate URLs for a given set of routes.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Tobias Schultze <http://tobion.de>
 *
 * @deprecated since Symfony 4.3, use CompiledUrlGeneratorDumper instead.
 */
class PhpGeneratorDumper extends GeneratorDumper
{
    /**
     * Dumps a set of routes to a PHP class.
     *
     * Available options:
     *
     *  * class:      The class name
     *  * base_class: The base class name
     *
     * @param array \$options An array of options
     *
     * @return string A PHP class representing the generator class
     */
    public function dump(array \$options = [])
    {
        \$options = array_merge([
            'class' => 'ProjectUrlGenerator',
            'base_class' => 'Symfony\\\\Component\\\\Routing\\\\Generator\\\\UrlGenerator',
        ], \$options);

        return <<<EOF
<?php

use Symfony\\Component\\Routing\\RequestContext;
use Symfony\\Component\\Routing\\Exception\\RouteNotFoundException;
use Psr\\Log\\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class {\$options['class']} extends {\$options['base_class']}
{
    private static \\\$declaredRoutes;
    private \\\$defaultLocale;

    public function __construct(RequestContext \\\$context, LoggerInterface \\\$logger = null, string \\\$defaultLocale = null)
    {
        \\\$this->context = \\\$context;
        \\\$this->logger = \\\$logger;
        \\\$this->defaultLocale = \\\$defaultLocale;
        if (null === self::\\\$declaredRoutes) {
            self::\\\$declaredRoutes = {\$this->generateDeclaredRoutes()};
        }
    }

{\$this->generateGenerateMethod()}
}

EOF;
    }

    /**
     * Generates PHP code representing an array of defined routes
     * together with the routes properties (e.g. requirements).
     *
     * @return string PHP code
     */
    private function generateDeclaredRoutes()
    {
        \$routes = \"[\\n\";
        foreach (\$this->getRoutes()->all() as \$name => \$route) {
            \$compiledRoute = \$route->compile();

            \$properties = [];
            \$properties[] = \$compiledRoute->getVariables();
            \$properties[] = \$route->getDefaults();
            \$properties[] = \$route->getRequirements();
            \$properties[] = \$compiledRoute->getTokens();
            \$properties[] = \$compiledRoute->getHostTokens();
            \$properties[] = \$route->getSchemes();

            \$routes .= sprintf(\"        '%s' => %s,\\n\", \$name, CompiledUrlMatcherDumper::export(\$properties));
        }
        \$routes .= '    ]';

        return \$routes;
    }

    /**
     * Generates PHP code representing the `generate` method that implements the UrlGeneratorInterface.
     *
     * @return string PHP code
     */
    private function generateGenerateMethod()
    {
        return <<<'EOF'
    public function generate(\$name, \$parameters = [], \$referenceType = self::ABSOLUTE_PATH)
    {
        \$locale = \$parameters['_locale']
            ?? \$this->context->getParameter('_locale')
            ?: \$this->defaultLocale;

        if (null !== \$locale && null !== \$name) {
            do {
                if ((self::\$declaredRoutes[\$name.'.'.\$locale][1]['_canonical_route'] ?? null) === \$name) {
                    unset(\$parameters['_locale']);
                    \$name .= '.'.\$locale;
                    break;
                }
            } while (false !== \$locale = strstr(\$locale, '_', true));
        }

        if (!isset(self::\$declaredRoutes[\$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route \"%s\" as such route does not exist.', \$name));
        }

        list(\$variables, \$defaults, \$requirements, \$tokens, \$hostTokens, \$requiredSchemes) = self::\$declaredRoutes[\$name];

        return \$this->doGenerate(\$variables, \$defaults, \$requirements, \$tokens, \$parameters, \$name, \$referenceType, \$hostTokens, \$requiredSchemes);
    }
EOF;
    }
}
", "vendor/symfony/routing/Generator/Dumper/PhpGeneratorDumper.php", "/var/www/public/DevLaon/templates/vendor/symfony/routing/Generator/Dumper/PhpGeneratorDumper.php");
    }
}
