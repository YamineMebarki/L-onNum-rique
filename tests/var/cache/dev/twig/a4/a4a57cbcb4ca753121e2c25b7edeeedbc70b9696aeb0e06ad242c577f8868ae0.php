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

/* vendor/symfony/security-http/SecurityEvents.php */
class __TwigTemplate_92893cd90ffae025e1cfc6d9aa6726d7255a2c96123f7967ac7163981ea4fc80 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/SecurityEvents.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/SecurityEvents.php"));

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

namespace Symfony\\Component\\Security\\Http;

final class SecurityEvents
{
    /**
     * The INTERACTIVE_LOGIN event occurs after a user has actively logged
     * into your website. It is important to distinguish this action from
     * non-interactive authentication methods, such as:
     *   - authentication based on your session.
     *   - authentication using a HTTP basic or HTTP digest header.
     *
     * @Event(\"Symfony\\Component\\Security\\Http\\Event\\InteractiveLoginEvent\")
     */
    const INTERACTIVE_LOGIN = 'security.interactive_login';

    /**
     * The SWITCH_USER event occurs before switch to another user and
     * before exit from an already switched user.
     *
     * @Event(\"Symfony\\Component\\Security\\Http\\Event\\SwitchUserEvent\")
     */
    const SWITCH_USER = 'security.switch_user';
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-http/SecurityEvents.php";
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

namespace Symfony\\Component\\Security\\Http;

final class SecurityEvents
{
    /**
     * The INTERACTIVE_LOGIN event occurs after a user has actively logged
     * into your website. It is important to distinguish this action from
     * non-interactive authentication methods, such as:
     *   - authentication based on your session.
     *   - authentication using a HTTP basic or HTTP digest header.
     *
     * @Event(\"Symfony\\Component\\Security\\Http\\Event\\InteractiveLoginEvent\")
     */
    const INTERACTIVE_LOGIN = 'security.interactive_login';

    /**
     * The SWITCH_USER event occurs before switch to another user and
     * before exit from an already switched user.
     *
     * @Event(\"Symfony\\Component\\Security\\Http\\Event\\SwitchUserEvent\")
     */
    const SWITCH_USER = 'security.switch_user';
}
", "vendor/symfony/security-http/SecurityEvents.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-http/SecurityEvents.php");
    }
}
