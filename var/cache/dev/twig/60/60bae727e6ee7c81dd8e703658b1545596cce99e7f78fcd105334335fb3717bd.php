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

/* vendor/symfony/security-core/Authentication/Token/RememberMeToken.php */
class __TwigTemplate_ec9967423173aa51a00ca36dd6bc2137a0ea68cefbde19b1e830b4534d1f1c2f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Authentication/Token/RememberMeToken.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Authentication/Token/RememberMeToken.php"));

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

use Symfony\\Component\\Security\\Core\\User\\UserInterface;

/**
 * Authentication Token for \"Remember-Me\".
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class RememberMeToken extends AbstractToken
{
    private \$secret;
    private \$providerKey;

    /**
     * @param string \$secret A secret used to make sure the token is created by the app and not by a malicious client
     *
     * @throws \\InvalidArgumentException
     */
    public function __construct(UserInterface \$user, string \$providerKey, string \$secret)
    {
        parent::__construct(\$user->getRoles());

        if (empty(\$secret)) {
            throw new \\InvalidArgumentException('\$secret must not be empty.');
        }

        if (empty(\$providerKey)) {
            throw new \\InvalidArgumentException('\$providerKey must not be empty.');
        }

        \$this->providerKey = \$providerKey;
        \$this->secret = \$secret;

        \$this->setUser(\$user);
        parent::setAuthenticated(true);
    }

    /**
     * {@inheritdoc}
     */
    public function setAuthenticated(\$authenticated)
    {
        if (\$authenticated) {
            throw new \\LogicException('You cannot set this token to authenticated after creation.');
        }

        parent::setAuthenticated(false);
    }

    /**
     * Returns the provider secret.
     *
     * @return string The provider secret
     */
    public function getProviderKey()
    {
        return \$this->providerKey;
    }

    /**
     * Returns the secret.
     *
     * @return string
     */
    public function getSecret()
    {
        return \$this->secret;
    }

    /**
     * {@inheritdoc}
     */
    public function getCredentials()
    {
        return '';
    }

    /**
     * {@inheritdoc}
     */
    public function __serialize(): array
    {
        return [\$this->secret, \$this->providerKey, parent::__serialize()];
    }

    /**
     * {@inheritdoc}
     */
    public function __unserialize(array \$data): void
    {
        [\$this->secret, \$this->providerKey, \$parentData] = \$data;
        parent::__unserialize(\$parentData);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Authentication/Token/RememberMeToken.php";
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

use Symfony\\Component\\Security\\Core\\User\\UserInterface;

/**
 * Authentication Token for \"Remember-Me\".
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class RememberMeToken extends AbstractToken
{
    private \$secret;
    private \$providerKey;

    /**
     * @param string \$secret A secret used to make sure the token is created by the app and not by a malicious client
     *
     * @throws \\InvalidArgumentException
     */
    public function __construct(UserInterface \$user, string \$providerKey, string \$secret)
    {
        parent::__construct(\$user->getRoles());

        if (empty(\$secret)) {
            throw new \\InvalidArgumentException('\$secret must not be empty.');
        }

        if (empty(\$providerKey)) {
            throw new \\InvalidArgumentException('\$providerKey must not be empty.');
        }

        \$this->providerKey = \$providerKey;
        \$this->secret = \$secret;

        \$this->setUser(\$user);
        parent::setAuthenticated(true);
    }

    /**
     * {@inheritdoc}
     */
    public function setAuthenticated(\$authenticated)
    {
        if (\$authenticated) {
            throw new \\LogicException('You cannot set this token to authenticated after creation.');
        }

        parent::setAuthenticated(false);
    }

    /**
     * Returns the provider secret.
     *
     * @return string The provider secret
     */
    public function getProviderKey()
    {
        return \$this->providerKey;
    }

    /**
     * Returns the secret.
     *
     * @return string
     */
    public function getSecret()
    {
        return \$this->secret;
    }

    /**
     * {@inheritdoc}
     */
    public function getCredentials()
    {
        return '';
    }

    /**
     * {@inheritdoc}
     */
    public function __serialize(): array
    {
        return [\$this->secret, \$this->providerKey, parent::__serialize()];
    }

    /**
     * {@inheritdoc}
     */
    public function __unserialize(array \$data): void
    {
        [\$this->secret, \$this->providerKey, \$parentData] = \$data;
        parent::__unserialize(\$parentData);
    }
}
", "vendor/symfony/security-core/Authentication/Token/RememberMeToken.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Authentication/Token/RememberMeToken.php");
    }
}
