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

/* vendor/symfony/security-core/Authentication/Token/AnonymousToken.php */
class __TwigTemplate_0b1f5b86bb41a5cee62b0a0bc5e41b8c25d772d61ccd856002d059dc6a876f0c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Authentication/Token/AnonymousToken.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Authentication/Token/AnonymousToken.php"));

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
 * AnonymousToken represents an anonymous token.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class AnonymousToken extends AbstractToken
{
    private \$secret;

    /**
     * @param string        \$secret A secret used to make sure the token is created by the app and not by a malicious client
     * @param string|object \$user   The user can be a UserInterface instance, or an object implementing a __toString method or the username as a regular string
     * @param string[]      \$roles  An array of roles
     */
    public function __construct(string \$secret, \$user, array \$roles = [])
    {
        parent::__construct(\$roles);

        \$this->secret = \$secret;
        \$this->setUser(\$user);
        \$this->setAuthenticated(true);
    }

    /**
     * {@inheritdoc}
     */
    public function getCredentials()
    {
        return '';
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
    public function __serialize(): array
    {
        return [\$this->secret, parent::__serialize()];
    }

    /**
     * {@inheritdoc}
     */
    public function __unserialize(array \$data): void
    {
        [\$this->secret, \$parentData] = \$data;
        parent::__unserialize(\$parentData);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Authentication/Token/AnonymousToken.php";
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
 * AnonymousToken represents an anonymous token.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class AnonymousToken extends AbstractToken
{
    private \$secret;

    /**
     * @param string        \$secret A secret used to make sure the token is created by the app and not by a malicious client
     * @param string|object \$user   The user can be a UserInterface instance, or an object implementing a __toString method or the username as a regular string
     * @param string[]      \$roles  An array of roles
     */
    public function __construct(string \$secret, \$user, array \$roles = [])
    {
        parent::__construct(\$roles);

        \$this->secret = \$secret;
        \$this->setUser(\$user);
        \$this->setAuthenticated(true);
    }

    /**
     * {@inheritdoc}
     */
    public function getCredentials()
    {
        return '';
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
    public function __serialize(): array
    {
        return [\$this->secret, parent::__serialize()];
    }

    /**
     * {@inheritdoc}
     */
    public function __unserialize(array \$data): void
    {
        [\$this->secret, \$parentData] = \$data;
        parent::__unserialize(\$parentData);
    }
}
", "vendor/symfony/security-core/Authentication/Token/AnonymousToken.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Authentication/Token/AnonymousToken.php");
    }
}
