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

/* vendor/symfony/security-csrf/TokenStorage/SessionTokenStorage.php */
class __TwigTemplate_26a1d5d79750589778ec411c2c63e9eaf6c83721783db084e9c1d002532164f0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-csrf/TokenStorage/SessionTokenStorage.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-csrf/TokenStorage/SessionTokenStorage.php"));

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

namespace Symfony\\Component\\Security\\Csrf\\TokenStorage;

use Symfony\\Component\\HttpFoundation\\Session\\SessionInterface;
use Symfony\\Component\\Security\\Csrf\\Exception\\TokenNotFoundException;

/**
 * Token storage that uses a Symfony Session object.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class SessionTokenStorage implements ClearableTokenStorageInterface
{
    /**
     * The namespace used to store values in the session.
     */
    const SESSION_NAMESPACE = '_csrf';

    private \$session;
    private \$namespace;

    /**
     * Initializes the storage with a Session object and a session namespace.
     *
     * @param SessionInterface \$session   The user session from which the session ID is returned
     * @param string           \$namespace The namespace under which the token is stored in the session
     */
    public function __construct(SessionInterface \$session, string \$namespace = self::SESSION_NAMESPACE)
    {
        \$this->session = \$session;
        \$this->namespace = \$namespace;
    }

    /**
     * {@inheritdoc}
     */
    public function getToken(\$tokenId)
    {
        if (!\$this->session->isStarted()) {
            \$this->session->start();
        }

        if (!\$this->session->has(\$this->namespace.'/'.\$tokenId)) {
            throw new TokenNotFoundException('The CSRF token with ID '.\$tokenId.' does not exist.');
        }

        return (string) \$this->session->get(\$this->namespace.'/'.\$tokenId);
    }

    /**
     * {@inheritdoc}
     */
    public function setToken(\$tokenId, \$token)
    {
        if (!\$this->session->isStarted()) {
            \$this->session->start();
        }

        \$this->session->set(\$this->namespace.'/'.\$tokenId, (string) \$token);
    }

    /**
     * {@inheritdoc}
     */
    public function hasToken(\$tokenId)
    {
        if (!\$this->session->isStarted()) {
            \$this->session->start();
        }

        return \$this->session->has(\$this->namespace.'/'.\$tokenId);
    }

    /**
     * {@inheritdoc}
     */
    public function removeToken(\$tokenId)
    {
        if (!\$this->session->isStarted()) {
            \$this->session->start();
        }

        return \$this->session->remove(\$this->namespace.'/'.\$tokenId);
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        foreach (array_keys(\$this->session->all()) as \$key) {
            if (0 === strpos(\$key, \$this->namespace.'/')) {
                \$this->session->remove(\$key);
            }
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-csrf/TokenStorage/SessionTokenStorage.php";
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

namespace Symfony\\Component\\Security\\Csrf\\TokenStorage;

use Symfony\\Component\\HttpFoundation\\Session\\SessionInterface;
use Symfony\\Component\\Security\\Csrf\\Exception\\TokenNotFoundException;

/**
 * Token storage that uses a Symfony Session object.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class SessionTokenStorage implements ClearableTokenStorageInterface
{
    /**
     * The namespace used to store values in the session.
     */
    const SESSION_NAMESPACE = '_csrf';

    private \$session;
    private \$namespace;

    /**
     * Initializes the storage with a Session object and a session namespace.
     *
     * @param SessionInterface \$session   The user session from which the session ID is returned
     * @param string           \$namespace The namespace under which the token is stored in the session
     */
    public function __construct(SessionInterface \$session, string \$namespace = self::SESSION_NAMESPACE)
    {
        \$this->session = \$session;
        \$this->namespace = \$namespace;
    }

    /**
     * {@inheritdoc}
     */
    public function getToken(\$tokenId)
    {
        if (!\$this->session->isStarted()) {
            \$this->session->start();
        }

        if (!\$this->session->has(\$this->namespace.'/'.\$tokenId)) {
            throw new TokenNotFoundException('The CSRF token with ID '.\$tokenId.' does not exist.');
        }

        return (string) \$this->session->get(\$this->namespace.'/'.\$tokenId);
    }

    /**
     * {@inheritdoc}
     */
    public function setToken(\$tokenId, \$token)
    {
        if (!\$this->session->isStarted()) {
            \$this->session->start();
        }

        \$this->session->set(\$this->namespace.'/'.\$tokenId, (string) \$token);
    }

    /**
     * {@inheritdoc}
     */
    public function hasToken(\$tokenId)
    {
        if (!\$this->session->isStarted()) {
            \$this->session->start();
        }

        return \$this->session->has(\$this->namespace.'/'.\$tokenId);
    }

    /**
     * {@inheritdoc}
     */
    public function removeToken(\$tokenId)
    {
        if (!\$this->session->isStarted()) {
            \$this->session->start();
        }

        return \$this->session->remove(\$this->namespace.'/'.\$tokenId);
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        foreach (array_keys(\$this->session->all()) as \$key) {
            if (0 === strpos(\$key, \$this->namespace.'/')) {
                \$this->session->remove(\$key);
            }
        }
    }
}
", "vendor/symfony/security-csrf/TokenStorage/SessionTokenStorage.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-csrf/TokenStorage/SessionTokenStorage.php");
    }
}
