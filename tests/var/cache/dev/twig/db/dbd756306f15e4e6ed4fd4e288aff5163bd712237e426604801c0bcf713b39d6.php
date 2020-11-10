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

/* vendor/symfony/security-guard/Token/PostAuthenticationGuardToken.php */
class __TwigTemplate_428b1757706f2169e84609d05a395c675d5163bcaaa5c56755ca6b11d442c7f1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-guard/Token/PostAuthenticationGuardToken.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-guard/Token/PostAuthenticationGuardToken.php"));

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

namespace Symfony\\Component\\Security\\Guard\\Token;

use Symfony\\Component\\Security\\Core\\Authentication\\Token\\AbstractToken;
use Symfony\\Component\\Security\\Core\\User\\UserInterface;

/**
 * Used as an \"authenticated\" token, though it could be set to not-authenticated later.
 *
 * If you're using Guard authentication, you *must* use a class that implements
 * GuardTokenInterface as your authenticated token (like this class).
 *
 * @author Ryan Weaver <ryan@knpuniversity.com>
 */
class PostAuthenticationGuardToken extends AbstractToken implements GuardTokenInterface
{
    private \$providerKey;

    /**
     * @param UserInterface \$user        The user!
     * @param string        \$providerKey The provider (firewall) key
     * @param string[]      \$roles       An array of roles
     *
     * @throws \\InvalidArgumentException
     */
    public function __construct(UserInterface \$user, string \$providerKey, array \$roles)
    {
        parent::__construct(\$roles);

        if (empty(\$providerKey)) {
            throw new \\InvalidArgumentException('\$providerKey (i.e. firewall key) must not be empty.');
        }

        \$this->setUser(\$user);
        \$this->providerKey = \$providerKey;

        // this token is meant to be used after authentication success, so it is always authenticated
        // you could set it as non authenticated later if you need to
        \$this->setAuthenticated(true);
    }

    /**
     * This is meant to be only an authenticated token, where credentials
     * have already been used and are thus cleared.
     *
     * {@inheritdoc}
     */
    public function getCredentials()
    {
        return [];
    }

    /**
     * Returns the provider (firewall) key.
     *
     * @return string
     */
    public function getProviderKey()
    {
        return \$this->providerKey;
    }

    /**
     * {@inheritdoc}
     */
    public function __serialize(): array
    {
        return [\$this->providerKey, parent::__serialize()];
    }

    /**
     * {@inheritdoc}
     */
    public function __unserialize(array \$data): void
    {
        [\$this->providerKey, \$parentData] = \$data;
        parent::__unserialize(\$parentData);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-guard/Token/PostAuthenticationGuardToken.php";
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

namespace Symfony\\Component\\Security\\Guard\\Token;

use Symfony\\Component\\Security\\Core\\Authentication\\Token\\AbstractToken;
use Symfony\\Component\\Security\\Core\\User\\UserInterface;

/**
 * Used as an \"authenticated\" token, though it could be set to not-authenticated later.
 *
 * If you're using Guard authentication, you *must* use a class that implements
 * GuardTokenInterface as your authenticated token (like this class).
 *
 * @author Ryan Weaver <ryan@knpuniversity.com>
 */
class PostAuthenticationGuardToken extends AbstractToken implements GuardTokenInterface
{
    private \$providerKey;

    /**
     * @param UserInterface \$user        The user!
     * @param string        \$providerKey The provider (firewall) key
     * @param string[]      \$roles       An array of roles
     *
     * @throws \\InvalidArgumentException
     */
    public function __construct(UserInterface \$user, string \$providerKey, array \$roles)
    {
        parent::__construct(\$roles);

        if (empty(\$providerKey)) {
            throw new \\InvalidArgumentException('\$providerKey (i.e. firewall key) must not be empty.');
        }

        \$this->setUser(\$user);
        \$this->providerKey = \$providerKey;

        // this token is meant to be used after authentication success, so it is always authenticated
        // you could set it as non authenticated later if you need to
        \$this->setAuthenticated(true);
    }

    /**
     * This is meant to be only an authenticated token, where credentials
     * have already been used and are thus cleared.
     *
     * {@inheritdoc}
     */
    public function getCredentials()
    {
        return [];
    }

    /**
     * Returns the provider (firewall) key.
     *
     * @return string
     */
    public function getProviderKey()
    {
        return \$this->providerKey;
    }

    /**
     * {@inheritdoc}
     */
    public function __serialize(): array
    {
        return [\$this->providerKey, parent::__serialize()];
    }

    /**
     * {@inheritdoc}
     */
    public function __unserialize(array \$data): void
    {
        [\$this->providerKey, \$parentData] = \$data;
        parent::__unserialize(\$parentData);
    }
}
", "vendor/symfony/security-guard/Token/PostAuthenticationGuardToken.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-guard/Token/PostAuthenticationGuardToken.php");
    }
}
