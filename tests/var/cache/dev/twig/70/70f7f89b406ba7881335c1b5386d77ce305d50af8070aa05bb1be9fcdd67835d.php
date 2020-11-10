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

/* vendor/symfony/security-csrf/CsrfTokenManager.php */
class __TwigTemplate_3b747536b5300dce2e86063a85656560b3c3f2d7cdf525183a83a6948163a6e5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-csrf/CsrfTokenManager.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-csrf/CsrfTokenManager.php"));

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

namespace Symfony\\Component\\Security\\Csrf;

use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\Security\\Core\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Security\\Csrf\\TokenGenerator\\TokenGeneratorInterface;
use Symfony\\Component\\Security\\Csrf\\TokenGenerator\\UriSafeTokenGenerator;
use Symfony\\Component\\Security\\Csrf\\TokenStorage\\NativeSessionTokenStorage;
use Symfony\\Component\\Security\\Csrf\\TokenStorage\\TokenStorageInterface;

/**
 * Default implementation of {@link CsrfTokenManagerInterface}.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class CsrfTokenManager implements CsrfTokenManagerInterface
{
    private \$generator;
    private \$storage;
    private \$namespace;

    /**
     * @param string|RequestStack|callable|null \$namespace
     *                                                     * null: generates a namespace using \$_SERVER['HTTPS']
     *                                                     * string: uses the given string
     *                                                     * RequestStack: generates a namespace using the current master request
     *                                                     * callable: uses the result of this callable (must return a string)
     */
    public function __construct(TokenGeneratorInterface \$generator = null, TokenStorageInterface \$storage = null, \$namespace = null)
    {
        \$this->generator = \$generator ?: new UriSafeTokenGenerator();
        \$this->storage = \$storage ?: new NativeSessionTokenStorage();

        \$superGlobalNamespaceGenerator = function () {
            return !empty(\$_SERVER['HTTPS']) && 'off' !== strtolower(\$_SERVER['HTTPS']) ? 'https-' : '';
        };

        if (null === \$namespace) {
            \$this->namespace = \$superGlobalNamespaceGenerator;
        } elseif (\$namespace instanceof RequestStack) {
            \$this->namespace = function () use (\$namespace, \$superGlobalNamespaceGenerator) {
                if (\$request = \$namespace->getMasterRequest()) {
                    return \$request->isSecure() ? 'https-' : '';
                }

                return \$superGlobalNamespaceGenerator();
            };
        } elseif (\\is_callable(\$namespace) || \\is_string(\$namespace)) {
            \$this->namespace = \$namespace;
        } else {
            throw new InvalidArgumentException(sprintf('\$namespace must be a string, a callable returning a string, null or an instance of \"RequestStack\". \"%s\" given.', \\gettype(\$namespace)));
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getToken(\$tokenId)
    {
        \$namespacedId = \$this->getNamespace().\$tokenId;
        if (\$this->storage->hasToken(\$namespacedId)) {
            \$value = \$this->storage->getToken(\$namespacedId);
        } else {
            \$value = \$this->generator->generateToken();

            \$this->storage->setToken(\$namespacedId, \$value);
        }

        return new CsrfToken(\$tokenId, \$value);
    }

    /**
     * {@inheritdoc}
     */
    public function refreshToken(\$tokenId)
    {
        \$namespacedId = \$this->getNamespace().\$tokenId;
        \$value = \$this->generator->generateToken();

        \$this->storage->setToken(\$namespacedId, \$value);

        return new CsrfToken(\$tokenId, \$value);
    }

    /**
     * {@inheritdoc}
     */
    public function removeToken(\$tokenId)
    {
        return \$this->storage->removeToken(\$this->getNamespace().\$tokenId);
    }

    /**
     * {@inheritdoc}
     */
    public function isTokenValid(CsrfToken \$token)
    {
        \$namespacedId = \$this->getNamespace().\$token->getId();
        if (!\$this->storage->hasToken(\$namespacedId)) {
            return false;
        }

        return hash_equals(\$this->storage->getToken(\$namespacedId), \$token->getValue());
    }

    private function getNamespace()
    {
        return \\is_callable(\$ns = \$this->namespace) ? \$ns() : \$ns;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-csrf/CsrfTokenManager.php";
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

namespace Symfony\\Component\\Security\\Csrf;

use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\Security\\Core\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Security\\Csrf\\TokenGenerator\\TokenGeneratorInterface;
use Symfony\\Component\\Security\\Csrf\\TokenGenerator\\UriSafeTokenGenerator;
use Symfony\\Component\\Security\\Csrf\\TokenStorage\\NativeSessionTokenStorage;
use Symfony\\Component\\Security\\Csrf\\TokenStorage\\TokenStorageInterface;

/**
 * Default implementation of {@link CsrfTokenManagerInterface}.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class CsrfTokenManager implements CsrfTokenManagerInterface
{
    private \$generator;
    private \$storage;
    private \$namespace;

    /**
     * @param string|RequestStack|callable|null \$namespace
     *                                                     * null: generates a namespace using \$_SERVER['HTTPS']
     *                                                     * string: uses the given string
     *                                                     * RequestStack: generates a namespace using the current master request
     *                                                     * callable: uses the result of this callable (must return a string)
     */
    public function __construct(TokenGeneratorInterface \$generator = null, TokenStorageInterface \$storage = null, \$namespace = null)
    {
        \$this->generator = \$generator ?: new UriSafeTokenGenerator();
        \$this->storage = \$storage ?: new NativeSessionTokenStorage();

        \$superGlobalNamespaceGenerator = function () {
            return !empty(\$_SERVER['HTTPS']) && 'off' !== strtolower(\$_SERVER['HTTPS']) ? 'https-' : '';
        };

        if (null === \$namespace) {
            \$this->namespace = \$superGlobalNamespaceGenerator;
        } elseif (\$namespace instanceof RequestStack) {
            \$this->namespace = function () use (\$namespace, \$superGlobalNamespaceGenerator) {
                if (\$request = \$namespace->getMasterRequest()) {
                    return \$request->isSecure() ? 'https-' : '';
                }

                return \$superGlobalNamespaceGenerator();
            };
        } elseif (\\is_callable(\$namespace) || \\is_string(\$namespace)) {
            \$this->namespace = \$namespace;
        } else {
            throw new InvalidArgumentException(sprintf('\$namespace must be a string, a callable returning a string, null or an instance of \"RequestStack\". \"%s\" given.', \\gettype(\$namespace)));
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getToken(\$tokenId)
    {
        \$namespacedId = \$this->getNamespace().\$tokenId;
        if (\$this->storage->hasToken(\$namespacedId)) {
            \$value = \$this->storage->getToken(\$namespacedId);
        } else {
            \$value = \$this->generator->generateToken();

            \$this->storage->setToken(\$namespacedId, \$value);
        }

        return new CsrfToken(\$tokenId, \$value);
    }

    /**
     * {@inheritdoc}
     */
    public function refreshToken(\$tokenId)
    {
        \$namespacedId = \$this->getNamespace().\$tokenId;
        \$value = \$this->generator->generateToken();

        \$this->storage->setToken(\$namespacedId, \$value);

        return new CsrfToken(\$tokenId, \$value);
    }

    /**
     * {@inheritdoc}
     */
    public function removeToken(\$tokenId)
    {
        return \$this->storage->removeToken(\$this->getNamespace().\$tokenId);
    }

    /**
     * {@inheritdoc}
     */
    public function isTokenValid(CsrfToken \$token)
    {
        \$namespacedId = \$this->getNamespace().\$token->getId();
        if (!\$this->storage->hasToken(\$namespacedId)) {
            return false;
        }

        return hash_equals(\$this->storage->getToken(\$namespacedId), \$token->getValue());
    }

    private function getNamespace()
    {
        return \\is_callable(\$ns = \$this->namespace) ? \$ns() : \$ns;
    }
}
", "vendor/symfony/security-csrf/CsrfTokenManager.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-csrf/CsrfTokenManager.php");
    }
}
