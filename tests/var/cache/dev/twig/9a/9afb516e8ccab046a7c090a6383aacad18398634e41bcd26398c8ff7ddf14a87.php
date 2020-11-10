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

/* vendor/symfony/security-bundle/Templating/Helper/LogoutUrlHelper.php */
class __TwigTemplate_0eb38de17dd7218da20f8c913e2a8807dea281273a765e36bcc69fa9b988dbbe extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Templating/Helper/LogoutUrlHelper.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Templating/Helper/LogoutUrlHelper.php"));

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

namespace Symfony\\Bundle\\SecurityBundle\\Templating\\Helper;

@trigger_error('The '.LogoutUrlHelper::class.' class is deprecated since version 4.3 and will be removed in 5.0; use Twig instead.', E_USER_DEPRECATED);

use Symfony\\Component\\Security\\Http\\Logout\\LogoutUrlGenerator;
use Symfony\\Component\\Templating\\Helper\\Helper;

/**
 * LogoutUrlHelper provides generator functions for the logout URL.
 *
 * @author Jeremy Mikola <jmikola@gmail.com>
 *
 * @deprecated since version 4.3, to be removed in 5.0; use Twig instead.
 */
class LogoutUrlHelper extends Helper
{
    private \$generator;

    public function __construct(LogoutUrlGenerator \$generator)
    {
        \$this->generator = \$generator;
    }

    /**
     * Generates the absolute logout path for the firewall.
     *
     * @param string|null \$key The firewall key or null to use the current firewall key
     *
     * @return string The logout path
     */
    public function getLogoutPath(\$key)
    {
        return \$this->generator->getLogoutPath(\$key);
    }

    /**
     * Generates the absolute logout URL for the firewall.
     *
     * @param string|null \$key The firewall key or null to use the current firewall key
     *
     * @return string The logout URL
     */
    public function getLogoutUrl(\$key)
    {
        return \$this->generator->getLogoutUrl(\$key);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'logout_url';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/Templating/Helper/LogoutUrlHelper.php";
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

namespace Symfony\\Bundle\\SecurityBundle\\Templating\\Helper;

@trigger_error('The '.LogoutUrlHelper::class.' class is deprecated since version 4.3 and will be removed in 5.0; use Twig instead.', E_USER_DEPRECATED);

use Symfony\\Component\\Security\\Http\\Logout\\LogoutUrlGenerator;
use Symfony\\Component\\Templating\\Helper\\Helper;

/**
 * LogoutUrlHelper provides generator functions for the logout URL.
 *
 * @author Jeremy Mikola <jmikola@gmail.com>
 *
 * @deprecated since version 4.3, to be removed in 5.0; use Twig instead.
 */
class LogoutUrlHelper extends Helper
{
    private \$generator;

    public function __construct(LogoutUrlGenerator \$generator)
    {
        \$this->generator = \$generator;
    }

    /**
     * Generates the absolute logout path for the firewall.
     *
     * @param string|null \$key The firewall key or null to use the current firewall key
     *
     * @return string The logout path
     */
    public function getLogoutPath(\$key)
    {
        return \$this->generator->getLogoutPath(\$key);
    }

    /**
     * Generates the absolute logout URL for the firewall.
     *
     * @param string|null \$key The firewall key or null to use the current firewall key
     *
     * @return string The logout URL
     */
    public function getLogoutUrl(\$key)
    {
        return \$this->generator->getLogoutUrl(\$key);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'logout_url';
    }
}
", "vendor/symfony/security-bundle/Templating/Helper/LogoutUrlHelper.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/Templating/Helper/LogoutUrlHelper.php");
    }
}
