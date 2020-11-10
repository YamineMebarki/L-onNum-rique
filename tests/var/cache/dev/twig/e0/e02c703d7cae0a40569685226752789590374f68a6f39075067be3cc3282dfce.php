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

/* vendor/symfony/security-core/Authorization/AccessDecisionManagerInterface.php */
class __TwigTemplate_7426260a41fa74f62b212a74a79f4af311155394e69880f53f492fc6522111bf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Authorization/AccessDecisionManagerInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Authorization/AccessDecisionManagerInterface.php"));

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

namespace Symfony\\Component\\Security\\Core\\Authorization;

use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;

/**
 * AccessDecisionManagerInterface makes authorization decisions.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface AccessDecisionManagerInterface
{
    /**
     * Decides whether the access is possible or not.
     *
     * @param TokenInterface \$token      A TokenInterface instance
     * @param array          \$attributes An array of attributes associated with the method being invoked
     * @param object         \$object     The object to secure
     *
     * @return bool true if the access is granted, false otherwise
     */
    public function decide(TokenInterface \$token, array \$attributes, \$object = null);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Authorization/AccessDecisionManagerInterface.php";
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

namespace Symfony\\Component\\Security\\Core\\Authorization;

use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;

/**
 * AccessDecisionManagerInterface makes authorization decisions.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface AccessDecisionManagerInterface
{
    /**
     * Decides whether the access is possible or not.
     *
     * @param TokenInterface \$token      A TokenInterface instance
     * @param array          \$attributes An array of attributes associated with the method being invoked
     * @param object         \$object     The object to secure
     *
     * @return bool true if the access is granted, false otherwise
     */
    public function decide(TokenInterface \$token, array \$attributes, \$object = null);
}
", "vendor/symfony/security-core/Authorization/AccessDecisionManagerInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Authorization/AccessDecisionManagerInterface.php");
    }
}
