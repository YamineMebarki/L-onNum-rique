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

/* vendor/symfony/framework-bundle/Routing/RedirectableUrlMatcher.php */
class __TwigTemplate_02d7afe88fa6fe9fab1fd69ccbed47192724baf0cdfd6a4f1383582d7fb69095 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Routing/RedirectableUrlMatcher.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Routing/RedirectableUrlMatcher.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Routing;

@trigger_error(sprintf('The \"%s\" class is deprecated since Symfony 4.3.', RedirectableUrlMatcher::class), E_USER_DEPRECATED);

use Symfony\\Component\\Routing\\Matcher\\RedirectableUrlMatcher as BaseMatcher;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @deprecated since Symfony 4.3
 */
class RedirectableUrlMatcher extends BaseMatcher
{
    /**
     * Redirects the user to another URL.
     *
     * @param string \$path   The path info to redirect to
     * @param string \$route  The route that matched
     * @param string \$scheme The URL scheme (null to keep the current one)
     *
     * @return array An array of parameters
     */
    public function redirect(\$path, \$route, \$scheme = null)
    {
        return [
            '_controller' => 'Symfony\\\\Bundle\\\\FrameworkBundle\\\\Controller\\\\RedirectController::urlRedirectAction',
            'path' => \$path,
            'permanent' => true,
            'scheme' => \$scheme,
            'httpPort' => \$this->context->getHttpPort(),
            'httpsPort' => \$this->context->getHttpsPort(),
            '_route' => \$route,
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Routing/RedirectableUrlMatcher.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Routing;

@trigger_error(sprintf('The \"%s\" class is deprecated since Symfony 4.3.', RedirectableUrlMatcher::class), E_USER_DEPRECATED);

use Symfony\\Component\\Routing\\Matcher\\RedirectableUrlMatcher as BaseMatcher;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @deprecated since Symfony 4.3
 */
class RedirectableUrlMatcher extends BaseMatcher
{
    /**
     * Redirects the user to another URL.
     *
     * @param string \$path   The path info to redirect to
     * @param string \$route  The route that matched
     * @param string \$scheme The URL scheme (null to keep the current one)
     *
     * @return array An array of parameters
     */
    public function redirect(\$path, \$route, \$scheme = null)
    {
        return [
            '_controller' => 'Symfony\\\\Bundle\\\\FrameworkBundle\\\\Controller\\\\RedirectController::urlRedirectAction',
            'path' => \$path,
            'permanent' => true,
            'scheme' => \$scheme,
            'httpPort' => \$this->context->getHttpPort(),
            'httpsPort' => \$this->context->getHttpsPort(),
            '_route' => \$route,
        ];
    }
}
", "vendor/symfony/framework-bundle/Routing/RedirectableUrlMatcher.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Routing/RedirectableUrlMatcher.php");
    }
}
