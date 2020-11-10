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

/* vendor/symfony/security-csrf/TokenStorage/NativeSessionTokenStorage.php */
class __TwigTemplate_d1a0d359e17886606b54a4eede8de966ee97fd8c252b61f2685de614eb62d0cc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-csrf/TokenStorage/NativeSessionTokenStorage.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-csrf/TokenStorage/NativeSessionTokenStorage.php"));

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

use Symfony\\Component\\Security\\Csrf\\Exception\\TokenNotFoundException;

/**
 * Token storage that uses PHP's native session handling.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class NativeSessionTokenStorage implements ClearableTokenStorageInterface
{
    /**
     * The namespace used to store values in the session.
     */
    const SESSION_NAMESPACE = '_csrf';

    private \$sessionStarted = false;
    private \$namespace;

    /**
     * Initializes the storage with a session namespace.
     *
     * @param string \$namespace The namespace under which the token is stored in the session
     */
    public function __construct(string \$namespace = self::SESSION_NAMESPACE)
    {
        \$this->namespace = \$namespace;
    }

    /**
     * {@inheritdoc}
     */
    public function getToken(\$tokenId)
    {
        if (!\$this->sessionStarted) {
            \$this->startSession();
        }

        if (!isset(\$_SESSION[\$this->namespace][\$tokenId])) {
            throw new TokenNotFoundException('The CSRF token with ID '.\$tokenId.' does not exist.');
        }

        return (string) \$_SESSION[\$this->namespace][\$tokenId];
    }

    /**
     * {@inheritdoc}
     */
    public function setToken(\$tokenId, \$token)
    {
        if (!\$this->sessionStarted) {
            \$this->startSession();
        }

        \$_SESSION[\$this->namespace][\$tokenId] = (string) \$token;
    }

    /**
     * {@inheritdoc}
     */
    public function hasToken(\$tokenId)
    {
        if (!\$this->sessionStarted) {
            \$this->startSession();
        }

        return isset(\$_SESSION[\$this->namespace][\$tokenId]);
    }

    /**
     * {@inheritdoc}
     */
    public function removeToken(\$tokenId)
    {
        if (!\$this->sessionStarted) {
            \$this->startSession();
        }

        if (!isset(\$_SESSION[\$this->namespace][\$tokenId])) {
            return null;
        }

        \$token = (string) \$_SESSION[\$this->namespace][\$tokenId];

        unset(\$_SESSION[\$this->namespace][\$tokenId]);

        if (!\$_SESSION[\$this->namespace]) {
            unset(\$_SESSION[\$this->namespace]);
        }

        return \$token;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        unset(\$_SESSION[\$this->namespace]);
    }

    private function startSession()
    {
        if (PHP_SESSION_NONE === session_status()) {
            session_start();
        }

        \$this->sessionStarted = true;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-csrf/TokenStorage/NativeSessionTokenStorage.php";
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

use Symfony\\Component\\Security\\Csrf\\Exception\\TokenNotFoundException;

/**
 * Token storage that uses PHP's native session handling.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class NativeSessionTokenStorage implements ClearableTokenStorageInterface
{
    /**
     * The namespace used to store values in the session.
     */
    const SESSION_NAMESPACE = '_csrf';

    private \$sessionStarted = false;
    private \$namespace;

    /**
     * Initializes the storage with a session namespace.
     *
     * @param string \$namespace The namespace under which the token is stored in the session
     */
    public function __construct(string \$namespace = self::SESSION_NAMESPACE)
    {
        \$this->namespace = \$namespace;
    }

    /**
     * {@inheritdoc}
     */
    public function getToken(\$tokenId)
    {
        if (!\$this->sessionStarted) {
            \$this->startSession();
        }

        if (!isset(\$_SESSION[\$this->namespace][\$tokenId])) {
            throw new TokenNotFoundException('The CSRF token with ID '.\$tokenId.' does not exist.');
        }

        return (string) \$_SESSION[\$this->namespace][\$tokenId];
    }

    /**
     * {@inheritdoc}
     */
    public function setToken(\$tokenId, \$token)
    {
        if (!\$this->sessionStarted) {
            \$this->startSession();
        }

        \$_SESSION[\$this->namespace][\$tokenId] = (string) \$token;
    }

    /**
     * {@inheritdoc}
     */
    public function hasToken(\$tokenId)
    {
        if (!\$this->sessionStarted) {
            \$this->startSession();
        }

        return isset(\$_SESSION[\$this->namespace][\$tokenId]);
    }

    /**
     * {@inheritdoc}
     */
    public function removeToken(\$tokenId)
    {
        if (!\$this->sessionStarted) {
            \$this->startSession();
        }

        if (!isset(\$_SESSION[\$this->namespace][\$tokenId])) {
            return null;
        }

        \$token = (string) \$_SESSION[\$this->namespace][\$tokenId];

        unset(\$_SESSION[\$this->namespace][\$tokenId]);

        if (!\$_SESSION[\$this->namespace]) {
            unset(\$_SESSION[\$this->namespace]);
        }

        return \$token;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        unset(\$_SESSION[\$this->namespace]);
    }

    private function startSession()
    {
        if (PHP_SESSION_NONE === session_status()) {
            session_start();
        }

        \$this->sessionStarted = true;
    }
}
", "vendor/symfony/security-csrf/TokenStorage/NativeSessionTokenStorage.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-csrf/TokenStorage/NativeSessionTokenStorage.php");
    }
}
