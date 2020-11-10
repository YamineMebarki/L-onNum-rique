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

/* vendor/symfony/framework-bundle/Templating/Helper/RouterHelper.php */
class __TwigTemplate_48ce9450d063fcd67ffc7ae9f980b22e97c8ad7a2e154100e90374358a374e46 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Templating/Helper/RouterHelper.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Templating/Helper/RouterHelper.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper;

@trigger_error('The '.RouterHelper::class.' class is deprecated since version 4.3 and will be removed in 5.0; use Twig instead.', E_USER_DEPRECATED);

use Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface;
use Symfony\\Component\\Templating\\Helper\\Helper;

/**
 * RouterHelper manages links between pages in a template context.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @deprecated since version 4.3, to be removed in 5.0; use Twig instead.
 */
class RouterHelper extends Helper
{
    protected \$generator;

    public function __construct(UrlGeneratorInterface \$router)
    {
        \$this->generator = \$router;
    }

    /**
     * Generates a URL reference (as an absolute or relative path) to the route with the given parameters.
     *
     * @param string \$name       The name of the route
     * @param mixed  \$parameters An array of parameters
     * @param bool   \$relative   Whether to generate a relative or absolute path
     *
     * @return string The generated URL reference
     *
     * @see UrlGeneratorInterface
     */
    public function path(\$name, \$parameters = [], \$relative = false)
    {
        return \$this->generator->generate(\$name, \$parameters, \$relative ? UrlGeneratorInterface::RELATIVE_PATH : UrlGeneratorInterface::ABSOLUTE_PATH);
    }

    /**
     * Generates a URL reference (as an absolute URL or network path) to the route with the given parameters.
     *
     * @param string \$name           The name of the route
     * @param mixed  \$parameters     An array of parameters
     * @param bool   \$schemeRelative Whether to omit the scheme in the generated URL reference
     *
     * @return string The generated URL reference
     *
     * @see UrlGeneratorInterface
     */
    public function url(\$name, \$parameters = [], \$schemeRelative = false)
    {
        return \$this->generator->generate(\$name, \$parameters, \$schemeRelative ? UrlGeneratorInterface::NETWORK_PATH : UrlGeneratorInterface::ABSOLUTE_URL);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'router';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Templating/Helper/RouterHelper.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper;

@trigger_error('The '.RouterHelper::class.' class is deprecated since version 4.3 and will be removed in 5.0; use Twig instead.', E_USER_DEPRECATED);

use Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface;
use Symfony\\Component\\Templating\\Helper\\Helper;

/**
 * RouterHelper manages links between pages in a template context.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @deprecated since version 4.3, to be removed in 5.0; use Twig instead.
 */
class RouterHelper extends Helper
{
    protected \$generator;

    public function __construct(UrlGeneratorInterface \$router)
    {
        \$this->generator = \$router;
    }

    /**
     * Generates a URL reference (as an absolute or relative path) to the route with the given parameters.
     *
     * @param string \$name       The name of the route
     * @param mixed  \$parameters An array of parameters
     * @param bool   \$relative   Whether to generate a relative or absolute path
     *
     * @return string The generated URL reference
     *
     * @see UrlGeneratorInterface
     */
    public function path(\$name, \$parameters = [], \$relative = false)
    {
        return \$this->generator->generate(\$name, \$parameters, \$relative ? UrlGeneratorInterface::RELATIVE_PATH : UrlGeneratorInterface::ABSOLUTE_PATH);
    }

    /**
     * Generates a URL reference (as an absolute URL or network path) to the route with the given parameters.
     *
     * @param string \$name           The name of the route
     * @param mixed  \$parameters     An array of parameters
     * @param bool   \$schemeRelative Whether to omit the scheme in the generated URL reference
     *
     * @return string The generated URL reference
     *
     * @see UrlGeneratorInterface
     */
    public function url(\$name, \$parameters = [], \$schemeRelative = false)
    {
        return \$this->generator->generate(\$name, \$parameters, \$schemeRelative ? UrlGeneratorInterface::NETWORK_PATH : UrlGeneratorInterface::ABSOLUTE_URL);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'router';
    }
}
", "vendor/symfony/framework-bundle/Templating/Helper/RouterHelper.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Templating/Helper/RouterHelper.php");
    }
}
