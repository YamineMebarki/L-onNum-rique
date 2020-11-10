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

/* vendor/symfony/security-http/Event/DeauthenticatedEvent.php */
class __TwigTemplate_c8a8195e46aa3b8056b2bafd152fa7f9255b65a6489296b19dc53ba2d25b2963 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Event/DeauthenticatedEvent.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Event/DeauthenticatedEvent.php"));

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

use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Contracts\\EventDispatcher\\Event;

/**
 * Deauthentication happens in case the user has changed when trying to refresh the token.
 *
 * @author Hamza Amrouche <hamza.simperfit@gmail.com>
 */
class DeauthenticatedEvent extends Event
{
    private \$originalToken;
    private \$refreshedToken;

    public function __construct(TokenInterface \$originalToken, TokenInterface \$refreshedToken)
    {
        \$this->originalToken = \$originalToken;
        \$this->refreshedToken = \$refreshedToken;
    }

    public function getRefreshedToken(): TokenInterface
    {
        return \$this->refreshedToken;
    }

    public function getOriginalToken(): TokenInterface
    {
        return \$this->originalToken;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-http/Event/DeauthenticatedEvent.php";
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

use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Contracts\\EventDispatcher\\Event;

/**
 * Deauthentication happens in case the user has changed when trying to refresh the token.
 *
 * @author Hamza Amrouche <hamza.simperfit@gmail.com>
 */
class DeauthenticatedEvent extends Event
{
    private \$originalToken;
    private \$refreshedToken;

    public function __construct(TokenInterface \$originalToken, TokenInterface \$refreshedToken)
    {
        \$this->originalToken = \$originalToken;
        \$this->refreshedToken = \$refreshedToken;
    }

    public function getRefreshedToken(): TokenInterface
    {
        return \$this->refreshedToken;
    }

    public function getOriginalToken(): TokenInterface
    {
        return \$this->originalToken;
    }
}
", "vendor/symfony/security-http/Event/DeauthenticatedEvent.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-http/Event/DeauthenticatedEvent.php");
    }
}
