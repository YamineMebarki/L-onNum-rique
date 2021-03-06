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

/* vendor/symfony/security-core/Authentication/Token/PreAuthenticatedToken.php */
class __TwigTemplate_b4bc577771ad612161b5fde9e0a509a4fc0d5ba1c0567b11cb1c555b94c2d6e2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Authentication/Token/PreAuthenticatedToken.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Authentication/Token/PreAuthenticatedToken.php"));

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
 * PreAuthenticatedToken implements a pre-authenticated token.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class PreAuthenticatedToken extends AbstractToken
{
    private \$credentials;
    private \$providerKey;

    /**
     * @param string|object \$user        The user can be a UserInterface instance, or an object implementing a __toString method or the username as a regular string
     * @param mixed         \$credentials The user credentials
     * @param string        \$providerKey The provider key
     * @param string[]      \$roles       An array of roles
     */
    public function __construct(\$user, \$credentials, string \$providerKey, array \$roles = [])
    {
        parent::__construct(\$roles);

        if (empty(\$providerKey)) {
            throw new \\InvalidArgumentException('\$providerKey must not be empty.');
        }

        \$this->setUser(\$user);
        \$this->credentials = \$credentials;
        \$this->providerKey = \$providerKey;

        if (\$roles) {
            \$this->setAuthenticated(true);
        }
    }

    /**
     * Returns the provider key.
     *
     * @return string The provider key
     */
    public function getProviderKey()
    {
        return \$this->providerKey;
    }

    /**
     * {@inheritdoc}
     */
    public function getCredentials()
    {
        return \$this->credentials;
    }

    /**
     * {@inheritdoc}
     */
    public function eraseCredentials()
    {
        parent::eraseCredentials();

        \$this->credentials = null;
    }

    /**
     * {@inheritdoc}
     */
    public function __serialize(): array
    {
        return [\$this->credentials, \$this->providerKey, parent::__serialize()];
    }

    /**
     * {@inheritdoc}
     */
    public function __unserialize(array \$data): void
    {
        [\$this->credentials, \$this->providerKey, \$parentData] = \$data;
        parent::__unserialize(\$parentData);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Authentication/Token/PreAuthenticatedToken.php";
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
 * PreAuthenticatedToken implements a pre-authenticated token.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class PreAuthenticatedToken extends AbstractToken
{
    private \$credentials;
    private \$providerKey;

    /**
     * @param string|object \$user        The user can be a UserInterface instance, or an object implementing a __toString method or the username as a regular string
     * @param mixed         \$credentials The user credentials
     * @param string        \$providerKey The provider key
     * @param string[]      \$roles       An array of roles
     */
    public function __construct(\$user, \$credentials, string \$providerKey, array \$roles = [])
    {
        parent::__construct(\$roles);

        if (empty(\$providerKey)) {
            throw new \\InvalidArgumentException('\$providerKey must not be empty.');
        }

        \$this->setUser(\$user);
        \$this->credentials = \$credentials;
        \$this->providerKey = \$providerKey;

        if (\$roles) {
            \$this->setAuthenticated(true);
        }
    }

    /**
     * Returns the provider key.
     *
     * @return string The provider key
     */
    public function getProviderKey()
    {
        return \$this->providerKey;
    }

    /**
     * {@inheritdoc}
     */
    public function getCredentials()
    {
        return \$this->credentials;
    }

    /**
     * {@inheritdoc}
     */
    public function eraseCredentials()
    {
        parent::eraseCredentials();

        \$this->credentials = null;
    }

    /**
     * {@inheritdoc}
     */
    public function __serialize(): array
    {
        return [\$this->credentials, \$this->providerKey, parent::__serialize()];
    }

    /**
     * {@inheritdoc}
     */
    public function __unserialize(array \$data): void
    {
        [\$this->credentials, \$this->providerKey, \$parentData] = \$data;
        parent::__unserialize(\$parentData);
    }
}
", "vendor/symfony/security-core/Authentication/Token/PreAuthenticatedToken.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Authentication/Token/PreAuthenticatedToken.php");
    }
}
