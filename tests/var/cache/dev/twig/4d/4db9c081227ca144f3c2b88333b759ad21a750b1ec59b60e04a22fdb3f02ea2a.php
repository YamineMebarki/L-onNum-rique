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

/* vendor/symfony/security-http/Util/TargetPathTrait.php */
class __TwigTemplate_7f7ad05b966caeb8e8886d7c2f3d1d7971ac6f83761267b082cb2ec30f6d4e4e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Util/TargetPathTrait.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Util/TargetPathTrait.php"));

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

namespace Symfony\\Component\\Security\\Http\\Util;

use Symfony\\Component\\HttpFoundation\\Session\\SessionInterface;

/**
 * Trait to get (and set) the URL the user last visited before being forced to authenticate.
 */
trait TargetPathTrait
{
    /**
     * Sets the target path the user should be redirected to after authentication.
     *
     * Usually, you do not need to set this directly.
     *
     * @param string \$providerKey The name of your firewall
     * @param string \$uri         The URI to set as the target path
     */
    private function saveTargetPath(SessionInterface \$session, \$providerKey, \$uri)
    {
        \$session->set('_security.'.\$providerKey.'.target_path', \$uri);
    }

    /**
     * Returns the URL (if any) the user visited that forced them to login.
     *
     * @param string \$providerKey The name of your firewall
     *
     * @return string|null
     */
    private function getTargetPath(SessionInterface \$session, \$providerKey)
    {
        return \$session->get('_security.'.\$providerKey.'.target_path');
    }

    /**
     * Removes the target path from the session.
     *
     * @param string \$providerKey The name of your firewall
     */
    private function removeTargetPath(SessionInterface \$session, \$providerKey)
    {
        \$session->remove('_security.'.\$providerKey.'.target_path');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-http/Util/TargetPathTrait.php";
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

namespace Symfony\\Component\\Security\\Http\\Util;

use Symfony\\Component\\HttpFoundation\\Session\\SessionInterface;

/**
 * Trait to get (and set) the URL the user last visited before being forced to authenticate.
 */
trait TargetPathTrait
{
    /**
     * Sets the target path the user should be redirected to after authentication.
     *
     * Usually, you do not need to set this directly.
     *
     * @param string \$providerKey The name of your firewall
     * @param string \$uri         The URI to set as the target path
     */
    private function saveTargetPath(SessionInterface \$session, \$providerKey, \$uri)
    {
        \$session->set('_security.'.\$providerKey.'.target_path', \$uri);
    }

    /**
     * Returns the URL (if any) the user visited that forced them to login.
     *
     * @param string \$providerKey The name of your firewall
     *
     * @return string|null
     */
    private function getTargetPath(SessionInterface \$session, \$providerKey)
    {
        return \$session->get('_security.'.\$providerKey.'.target_path');
    }

    /**
     * Removes the target path from the session.
     *
     * @param string \$providerKey The name of your firewall
     */
    private function removeTargetPath(SessionInterface \$session, \$providerKey)
    {
        \$session->remove('_security.'.\$providerKey.'.target_path');
    }
}
", "vendor/symfony/security-http/Util/TargetPathTrait.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-http/Util/TargetPathTrait.php");
    }
}
