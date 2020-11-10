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

/* vendor/symfony/security-bundle/Security/FirewallContext.php */
class __TwigTemplate_404596d33ffc8e26480ee0683e27782953624451270b06e4a6237b359d65ccfd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Security/FirewallContext.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Security/FirewallContext.php"));

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

namespace Symfony\\Bundle\\SecurityBundle\\Security;

use Symfony\\Component\\Security\\Http\\Firewall\\ExceptionListener;
use Symfony\\Component\\Security\\Http\\Firewall\\LogoutListener;

/**
 * This is a wrapper around the actual firewall configuration which allows us
 * to lazy load the context for one specific firewall only when we need it.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class FirewallContext
{
    private \$listeners;
    private \$exceptionListener;
    private \$logoutListener;
    private \$config;

    /**
     * @param LogoutListener|null \$logoutListener
     */
    public function __construct(iterable \$listeners, ExceptionListener \$exceptionListener = null, \$logoutListener = null, FirewallConfig \$config = null)
    {
        \$this->listeners = \$listeners;
        \$this->exceptionListener = \$exceptionListener;
        if (\$logoutListener instanceof FirewallConfig) {
            \$this->config = \$logoutListener;
            @trigger_error(sprintf('Passing an instance of %s as the 3rd argument to \"%s()\" is deprecated since Symfony 4.2. Pass a %s instance instead.', FirewallConfig::class, __METHOD__, LogoutListener::class), E_USER_DEPRECATED);
        } elseif (null === \$logoutListener || \$logoutListener instanceof LogoutListener) {
            \$this->logoutListener = \$logoutListener;
            \$this->config = \$config;
        } else {
            throw new \\TypeError(sprintf('Argument 3 passed to %s() must be instance of %s or null, %s given.', __METHOD__, LogoutListener::class, \\is_object(\$logoutListener) ? \\get_class(\$logoutListener) : \\gettype(\$logoutListener)));
        }
    }

    public function getConfig()
    {
        return \$this->config;
    }

    public function getListeners(): iterable
    {
        return \$this->listeners;
    }

    public function getExceptionListener()
    {
        return \$this->exceptionListener;
    }

    public function getLogoutListener()
    {
        return \$this->logoutListener;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/Security/FirewallContext.php";
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

namespace Symfony\\Bundle\\SecurityBundle\\Security;

use Symfony\\Component\\Security\\Http\\Firewall\\ExceptionListener;
use Symfony\\Component\\Security\\Http\\Firewall\\LogoutListener;

/**
 * This is a wrapper around the actual firewall configuration which allows us
 * to lazy load the context for one specific firewall only when we need it.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class FirewallContext
{
    private \$listeners;
    private \$exceptionListener;
    private \$logoutListener;
    private \$config;

    /**
     * @param LogoutListener|null \$logoutListener
     */
    public function __construct(iterable \$listeners, ExceptionListener \$exceptionListener = null, \$logoutListener = null, FirewallConfig \$config = null)
    {
        \$this->listeners = \$listeners;
        \$this->exceptionListener = \$exceptionListener;
        if (\$logoutListener instanceof FirewallConfig) {
            \$this->config = \$logoutListener;
            @trigger_error(sprintf('Passing an instance of %s as the 3rd argument to \"%s()\" is deprecated since Symfony 4.2. Pass a %s instance instead.', FirewallConfig::class, __METHOD__, LogoutListener::class), E_USER_DEPRECATED);
        } elseif (null === \$logoutListener || \$logoutListener instanceof LogoutListener) {
            \$this->logoutListener = \$logoutListener;
            \$this->config = \$config;
        } else {
            throw new \\TypeError(sprintf('Argument 3 passed to %s() must be instance of %s or null, %s given.', __METHOD__, LogoutListener::class, \\is_object(\$logoutListener) ? \\get_class(\$logoutListener) : \\gettype(\$logoutListener)));
        }
    }

    public function getConfig()
    {
        return \$this->config;
    }

    public function getListeners(): iterable
    {
        return \$this->listeners;
    }

    public function getExceptionListener()
    {
        return \$this->exceptionListener;
    }

    public function getLogoutListener()
    {
        return \$this->logoutListener;
    }
}
", "vendor/symfony/security-bundle/Security/FirewallContext.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/Security/FirewallContext.php");
    }
}
