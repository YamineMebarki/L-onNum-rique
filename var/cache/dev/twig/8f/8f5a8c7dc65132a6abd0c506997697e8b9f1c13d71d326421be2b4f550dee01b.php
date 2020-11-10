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

/* vendor/symfony/framework-bundle/Templating/GlobalVariables.php */
class __TwigTemplate_3772afbf8befdf0a53c1aa4890f7413894cea116b288dc86b7060a774df0c096 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Templating/GlobalVariables.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Templating/GlobalVariables.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Templating;

@trigger_error('The '.GlobalVariables::class.' class is deprecated since version 4.3 and will be removed in 5.0; use Twig instead.', E_USER_DEPRECATED);

use Symfony\\Component\\DependencyInjection\\ContainerInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Session\\Session;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;

/**
 * GlobalVariables is the entry point for Symfony global variables in PHP templates.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @deprecated since version 4.3, to be removed in 5.0; use Twig instead.
 */
class GlobalVariables
{
    protected \$container;

    public function __construct(ContainerInterface \$container)
    {
        \$this->container = \$container;
    }

    /**
     * @return TokenInterface|null
     */
    public function getToken()
    {
        if (!\$this->container->has('security.token_storage')) {
            return null;
        }

        return \$this->container->get('security.token_storage')->getToken();
    }

    public function getUser()
    {
        if (!\$token = \$this->getToken()) {
            return null;
        }

        \$user = \$token->getUser();

        return \\is_object(\$user) ? \$user : null;
    }

    /**
     * @return Request|null The HTTP request object
     */
    public function getRequest()
    {
        return \$this->container->has('request_stack') ? \$this->container->get('request_stack')->getCurrentRequest() : null;
    }

    /**
     * @return Session|null The session
     */
    public function getSession()
    {
        \$request = \$this->getRequest();

        return \$request && \$request->hasSession() ? \$request->getSession() : null;
    }

    /**
     * @return string The current environment string (e.g 'dev')
     */
    public function getEnvironment()
    {
        return \$this->container->getParameter('kernel.environment');
    }

    /**
     * @return bool The current debug mode
     */
    public function getDebug()
    {
        return (bool) \$this->container->getParameter('kernel.debug');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Templating/GlobalVariables.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Templating;

@trigger_error('The '.GlobalVariables::class.' class is deprecated since version 4.3 and will be removed in 5.0; use Twig instead.', E_USER_DEPRECATED);

use Symfony\\Component\\DependencyInjection\\ContainerInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Session\\Session;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;

/**
 * GlobalVariables is the entry point for Symfony global variables in PHP templates.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @deprecated since version 4.3, to be removed in 5.0; use Twig instead.
 */
class GlobalVariables
{
    protected \$container;

    public function __construct(ContainerInterface \$container)
    {
        \$this->container = \$container;
    }

    /**
     * @return TokenInterface|null
     */
    public function getToken()
    {
        if (!\$this->container->has('security.token_storage')) {
            return null;
        }

        return \$this->container->get('security.token_storage')->getToken();
    }

    public function getUser()
    {
        if (!\$token = \$this->getToken()) {
            return null;
        }

        \$user = \$token->getUser();

        return \\is_object(\$user) ? \$user : null;
    }

    /**
     * @return Request|null The HTTP request object
     */
    public function getRequest()
    {
        return \$this->container->has('request_stack') ? \$this->container->get('request_stack')->getCurrentRequest() : null;
    }

    /**
     * @return Session|null The session
     */
    public function getSession()
    {
        \$request = \$this->getRequest();

        return \$request && \$request->hasSession() ? \$request->getSession() : null;
    }

    /**
     * @return string The current environment string (e.g 'dev')
     */
    public function getEnvironment()
    {
        return \$this->container->getParameter('kernel.environment');
    }

    /**
     * @return bool The current debug mode
     */
    public function getDebug()
    {
        return (bool) \$this->container->getParameter('kernel.debug');
    }
}
", "vendor/symfony/framework-bundle/Templating/GlobalVariables.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Templating/GlobalVariables.php");
    }
}
