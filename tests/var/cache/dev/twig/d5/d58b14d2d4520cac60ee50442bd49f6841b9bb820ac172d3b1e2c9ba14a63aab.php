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

/* vendor/symfony/security-core/Authentication/Token/UsernamePasswordToken.php */
class __TwigTemplate_ef75220bcc64a3fcae02335799d266e21701321d696138a31f728a1fffaac2f8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Authentication/Token/UsernamePasswordToken.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Authentication/Token/UsernamePasswordToken.php"));

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
 * UsernamePasswordToken implements a username and password token.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class UsernamePasswordToken extends AbstractToken
{
    private \$credentials;
    private \$providerKey;

    /**
     * @param string|object \$user        The username (like a nickname, email address, etc.), or a UserInterface instance or an object implementing a __toString method
     * @param mixed         \$credentials This usually is the password of the user
     * @param string        \$providerKey The provider key
     * @param string[]      \$roles       An array of roles
     *
     * @throws \\InvalidArgumentException
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

        parent::setAuthenticated(\\count(\$roles) > 0);
    }

    /**
     * {@inheritdoc}
     */
    public function setAuthenticated(\$isAuthenticated)
    {
        if (\$isAuthenticated) {
            throw new \\LogicException('Cannot set this token to trusted after instantiation.');
        }

        parent::setAuthenticated(false);
    }

    /**
     * {@inheritdoc}
     */
    public function getCredentials()
    {
        return \$this->credentials;
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
        return "vendor/symfony/security-core/Authentication/Token/UsernamePasswordToken.php";
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
 * UsernamePasswordToken implements a username and password token.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class UsernamePasswordToken extends AbstractToken
{
    private \$credentials;
    private \$providerKey;

    /**
     * @param string|object \$user        The username (like a nickname, email address, etc.), or a UserInterface instance or an object implementing a __toString method
     * @param mixed         \$credentials This usually is the password of the user
     * @param string        \$providerKey The provider key
     * @param string[]      \$roles       An array of roles
     *
     * @throws \\InvalidArgumentException
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

        parent::setAuthenticated(\\count(\$roles) > 0);
    }

    /**
     * {@inheritdoc}
     */
    public function setAuthenticated(\$isAuthenticated)
    {
        if (\$isAuthenticated) {
            throw new \\LogicException('Cannot set this token to trusted after instantiation.');
        }

        parent::setAuthenticated(false);
    }

    /**
     * {@inheritdoc}
     */
    public function getCredentials()
    {
        return \$this->credentials;
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
", "vendor/symfony/security-core/Authentication/Token/UsernamePasswordToken.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Authentication/Token/UsernamePasswordToken.php");
    }
}
