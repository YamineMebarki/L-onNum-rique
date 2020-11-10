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

/* vendor/symfony/security-http/Event/SwitchUserEvent.php */
class __TwigTemplate_ebcbc9b12cbe9893d2bfde03738be3ec707e830f4540c9f384f36ea770ab5deb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Event/SwitchUserEvent.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Event/SwitchUserEvent.php"));

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

namespace Symfony\\Component\\Security\\Http\\Event;

use Symfony\\Component\\EventDispatcher\\Event;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\User\\UserInterface;

/**
 * SwitchUserEvent.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class SwitchUserEvent extends Event
{
    private \$request;
    private \$targetUser;
    private \$token;

    public function __construct(Request \$request, UserInterface \$targetUser, TokenInterface \$token = null)
    {
        \$this->request = \$request;
        \$this->targetUser = \$targetUser;
        \$this->token = \$token;
    }

    /**
     * @return Request
     */
    public function getRequest()
    {
        return \$this->request;
    }

    /**
     * @return UserInterface
     */
    public function getTargetUser()
    {
        return \$this->targetUser;
    }

    /**
     * @return TokenInterface|null
     */
    public function getToken()
    {
        return \$this->token;
    }

    public function setToken(TokenInterface \$token)
    {
        \$this->token = \$token;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-http/Event/SwitchUserEvent.php";
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

namespace Symfony\\Component\\Security\\Http\\Event;

use Symfony\\Component\\EventDispatcher\\Event;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\User\\UserInterface;

/**
 * SwitchUserEvent.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class SwitchUserEvent extends Event
{
    private \$request;
    private \$targetUser;
    private \$token;

    public function __construct(Request \$request, UserInterface \$targetUser, TokenInterface \$token = null)
    {
        \$this->request = \$request;
        \$this->targetUser = \$targetUser;
        \$this->token = \$token;
    }

    /**
     * @return Request
     */
    public function getRequest()
    {
        return \$this->request;
    }

    /**
     * @return UserInterface
     */
    public function getTargetUser()
    {
        return \$this->targetUser;
    }

    /**
     * @return TokenInterface|null
     */
    public function getToken()
    {
        return \$this->token;
    }

    public function setToken(TokenInterface \$token)
    {
        \$this->token = \$token;
    }
}
", "vendor/symfony/security-http/Event/SwitchUserEvent.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-http/Event/SwitchUserEvent.php");
    }
}
