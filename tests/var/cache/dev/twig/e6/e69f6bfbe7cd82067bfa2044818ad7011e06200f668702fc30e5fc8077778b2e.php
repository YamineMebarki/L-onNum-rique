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

/* vendor/symfony/security-core/Authentication/Token/SwitchUserToken.php */
class __TwigTemplate_af6d7f47b64f67520ba2eedadacfee4aec2ae4e0edf786ae9e8488dfc1fe8d2c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Authentication/Token/SwitchUserToken.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Authentication/Token/SwitchUserToken.php"));

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

namespace Symfony\\Component\\Security\\Core\\Authentication\\Token;

/**
 * Token representing a user who temporarily impersonates another one.
 *
 * @author Christian Flothmann <christian.flothmann@sensiolabs.de>
 */
class SwitchUserToken extends UsernamePasswordToken
{
    private \$originalToken;

    /**
     * @param string|object  \$user          The username (like a nickname, email address, etc.), or a UserInterface instance or an object implementing a __toString method
     * @param mixed          \$credentials   This usually is the password of the user
     * @param string         \$providerKey   The provider key
     * @param string[]       \$roles         An array of roles
     * @param TokenInterface \$originalToken The token of the user who switched to the current user
     *
     * @throws \\InvalidArgumentException
     */
    public function __construct(\$user, \$credentials, string \$providerKey, array \$roles = [], TokenInterface \$originalToken)
    {
        parent::__construct(\$user, \$credentials, \$providerKey, \$roles);

        \$this->originalToken = \$originalToken;
    }

    public function getOriginalToken(): TokenInterface
    {
        return \$this->originalToken;
    }

    /**
     * {@inheritdoc}
     */
    public function __serialize(): array
    {
        return [\$this->originalToken, parent::__serialize()];
    }

    /**
     * {@inheritdoc}
     */
    public function __unserialize(array \$data): void
    {
        [\$this->originalToken, \$parentData] = \$data;
        parent::__unserialize(\$parentData);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Authentication/Token/SwitchUserToken.php";
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

namespace Symfony\\Component\\Security\\Core\\Authentication\\Token;

/**
 * Token representing a user who temporarily impersonates another one.
 *
 * @author Christian Flothmann <christian.flothmann@sensiolabs.de>
 */
class SwitchUserToken extends UsernamePasswordToken
{
    private \$originalToken;

    /**
     * @param string|object  \$user          The username (like a nickname, email address, etc.), or a UserInterface instance or an object implementing a __toString method
     * @param mixed          \$credentials   This usually is the password of the user
     * @param string         \$providerKey   The provider key
     * @param string[]       \$roles         An array of roles
     * @param TokenInterface \$originalToken The token of the user who switched to the current user
     *
     * @throws \\InvalidArgumentException
     */
    public function __construct(\$user, \$credentials, string \$providerKey, array \$roles = [], TokenInterface \$originalToken)
    {
        parent::__construct(\$user, \$credentials, \$providerKey, \$roles);

        \$this->originalToken = \$originalToken;
    }

    public function getOriginalToken(): TokenInterface
    {
        return \$this->originalToken;
    }

    /**
     * {@inheritdoc}
     */
    public function __serialize(): array
    {
        return [\$this->originalToken, parent::__serialize()];
    }

    /**
     * {@inheritdoc}
     */
    public function __unserialize(array \$data): void
    {
        [\$this->originalToken, \$parentData] = \$data;
        parent::__unserialize(\$parentData);
    }
}
", "vendor/symfony/security-core/Authentication/Token/SwitchUserToken.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Authentication/Token/SwitchUserToken.php");
    }
}
