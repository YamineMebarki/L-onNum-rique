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

/* vendor/symfony/http-foundation/Session/Storage/Handler/AbstractSessionHandler.php */
class __TwigTemplate_4e858c257101df71f5ab8d7b4d7472a402248a988da1f9563595088bf98cd693 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Session/Storage/Handler/AbstractSessionHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Session/Storage/Handler/AbstractSessionHandler.php"));

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

namespace Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler;

use Symfony\\Component\\HttpFoundation\\Session\\SessionUtils;

/**
 * This abstract session handler provides a generic implementation
 * of the PHP 7.0 SessionUpdateTimestampHandlerInterface,
 * enabling strict and lazy session handling.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
abstract class AbstractSessionHandler implements \\SessionHandlerInterface, \\SessionUpdateTimestampHandlerInterface
{
    private \$sessionName;
    private \$prefetchId;
    private \$prefetchData;
    private \$newSessionId;
    private \$igbinaryEmptyData;

    /**
     * {@inheritdoc}
     */
    public function open(\$savePath, \$sessionName)
    {
        \$this->sessionName = \$sessionName;
        if (!headers_sent() && !ini_get('session.cache_limiter') && '0' !== ini_get('session.cache_limiter')) {
            header(sprintf('Cache-Control: max-age=%d, private, must-revalidate', 60 * (int) ini_get('session.cache_expire')));
        }

        return true;
    }

    /**
     * @param string \$sessionId
     *
     * @return string
     */
    abstract protected function doRead(\$sessionId);

    /**
     * @param string \$sessionId
     * @param string \$data
     *
     * @return bool
     */
    abstract protected function doWrite(\$sessionId, \$data);

    /**
     * @param string \$sessionId
     *
     * @return bool
     */
    abstract protected function doDestroy(\$sessionId);

    /**
     * {@inheritdoc}
     */
    public function validateId(\$sessionId)
    {
        \$this->prefetchData = \$this->read(\$sessionId);
        \$this->prefetchId = \$sessionId;

        return '' !== \$this->prefetchData;
    }

    /**
     * {@inheritdoc}
     */
    public function read(\$sessionId)
    {
        if (null !== \$this->prefetchId) {
            \$prefetchId = \$this->prefetchId;
            \$prefetchData = \$this->prefetchData;
            \$this->prefetchId = \$this->prefetchData = null;

            if (\$prefetchId === \$sessionId || '' === \$prefetchData) {
                \$this->newSessionId = '' === \$prefetchData ? \$sessionId : null;

                return \$prefetchData;
            }
        }

        \$data = \$this->doRead(\$sessionId);
        \$this->newSessionId = '' === \$data ? \$sessionId : null;

        return \$data;
    }

    /**
     * {@inheritdoc}
     */
    public function write(\$sessionId, \$data)
    {
        if (null === \$this->igbinaryEmptyData) {
            // see https://github.com/igbinary/igbinary/issues/146
            \$this->igbinaryEmptyData = \\function_exists('igbinary_serialize') ? igbinary_serialize([]) : '';
        }
        if ('' === \$data || \$this->igbinaryEmptyData === \$data) {
            return \$this->destroy(\$sessionId);
        }
        \$this->newSessionId = null;

        return \$this->doWrite(\$sessionId, \$data);
    }

    /**
     * {@inheritdoc}
     */
    public function destroy(\$sessionId)
    {
        if (!headers_sent() && filter_var(ini_get('session.use_cookies'), FILTER_VALIDATE_BOOLEAN)) {
            if (!\$this->sessionName) {
                throw new \\LogicException(sprintf('Session name cannot be empty, did you forget to call \"parent::open()\" in \"%s\"?.', \\get_class(\$this)));
            }
            \$cookie = SessionUtils::popSessionCookie(\$this->sessionName, \$sessionId);

            /*
             * We send an invalidation Set-Cookie header (zero lifetime)
             * when either the session was started or a cookie with
             * the session name was sent by the client (in which case
             * we know it's invalid as a valid session cookie would've
             * started the session).
             */
            if (null === \$cookie || isset(\$_COOKIE[\$this->sessionName])) {
                if (\\PHP_VERSION_ID < 70300) {
                    setcookie(\$this->sessionName, '', 0, ini_get('session.cookie_path'), ini_get('session.cookie_domain'), filter_var(ini_get('session.cookie_secure'), FILTER_VALIDATE_BOOLEAN), filter_var(ini_get('session.cookie_httponly'), FILTER_VALIDATE_BOOLEAN));
                } else {
                    \$params = session_get_cookie_params();
                    unset(\$params['lifetime']);
                    setcookie(\$this->sessionName, '', \$params);
                }
            }
        }

        return \$this->newSessionId === \$sessionId || \$this->doDestroy(\$sessionId);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/Session/Storage/Handler/AbstractSessionHandler.php";
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

namespace Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler;

use Symfony\\Component\\HttpFoundation\\Session\\SessionUtils;

/**
 * This abstract session handler provides a generic implementation
 * of the PHP 7.0 SessionUpdateTimestampHandlerInterface,
 * enabling strict and lazy session handling.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
abstract class AbstractSessionHandler implements \\SessionHandlerInterface, \\SessionUpdateTimestampHandlerInterface
{
    private \$sessionName;
    private \$prefetchId;
    private \$prefetchData;
    private \$newSessionId;
    private \$igbinaryEmptyData;

    /**
     * {@inheritdoc}
     */
    public function open(\$savePath, \$sessionName)
    {
        \$this->sessionName = \$sessionName;
        if (!headers_sent() && !ini_get('session.cache_limiter') && '0' !== ini_get('session.cache_limiter')) {
            header(sprintf('Cache-Control: max-age=%d, private, must-revalidate', 60 * (int) ini_get('session.cache_expire')));
        }

        return true;
    }

    /**
     * @param string \$sessionId
     *
     * @return string
     */
    abstract protected function doRead(\$sessionId);

    /**
     * @param string \$sessionId
     * @param string \$data
     *
     * @return bool
     */
    abstract protected function doWrite(\$sessionId, \$data);

    /**
     * @param string \$sessionId
     *
     * @return bool
     */
    abstract protected function doDestroy(\$sessionId);

    /**
     * {@inheritdoc}
     */
    public function validateId(\$sessionId)
    {
        \$this->prefetchData = \$this->read(\$sessionId);
        \$this->prefetchId = \$sessionId;

        return '' !== \$this->prefetchData;
    }

    /**
     * {@inheritdoc}
     */
    public function read(\$sessionId)
    {
        if (null !== \$this->prefetchId) {
            \$prefetchId = \$this->prefetchId;
            \$prefetchData = \$this->prefetchData;
            \$this->prefetchId = \$this->prefetchData = null;

            if (\$prefetchId === \$sessionId || '' === \$prefetchData) {
                \$this->newSessionId = '' === \$prefetchData ? \$sessionId : null;

                return \$prefetchData;
            }
        }

        \$data = \$this->doRead(\$sessionId);
        \$this->newSessionId = '' === \$data ? \$sessionId : null;

        return \$data;
    }

    /**
     * {@inheritdoc}
     */
    public function write(\$sessionId, \$data)
    {
        if (null === \$this->igbinaryEmptyData) {
            // see https://github.com/igbinary/igbinary/issues/146
            \$this->igbinaryEmptyData = \\function_exists('igbinary_serialize') ? igbinary_serialize([]) : '';
        }
        if ('' === \$data || \$this->igbinaryEmptyData === \$data) {
            return \$this->destroy(\$sessionId);
        }
        \$this->newSessionId = null;

        return \$this->doWrite(\$sessionId, \$data);
    }

    /**
     * {@inheritdoc}
     */
    public function destroy(\$sessionId)
    {
        if (!headers_sent() && filter_var(ini_get('session.use_cookies'), FILTER_VALIDATE_BOOLEAN)) {
            if (!\$this->sessionName) {
                throw new \\LogicException(sprintf('Session name cannot be empty, did you forget to call \"parent::open()\" in \"%s\"?.', \\get_class(\$this)));
            }
            \$cookie = SessionUtils::popSessionCookie(\$this->sessionName, \$sessionId);

            /*
             * We send an invalidation Set-Cookie header (zero lifetime)
             * when either the session was started or a cookie with
             * the session name was sent by the client (in which case
             * we know it's invalid as a valid session cookie would've
             * started the session).
             */
            if (null === \$cookie || isset(\$_COOKIE[\$this->sessionName])) {
                if (\\PHP_VERSION_ID < 70300) {
                    setcookie(\$this->sessionName, '', 0, ini_get('session.cookie_path'), ini_get('session.cookie_domain'), filter_var(ini_get('session.cookie_secure'), FILTER_VALIDATE_BOOLEAN), filter_var(ini_get('session.cookie_httponly'), FILTER_VALIDATE_BOOLEAN));
                } else {
                    \$params = session_get_cookie_params();
                    unset(\$params['lifetime']);
                    setcookie(\$this->sessionName, '', \$params);
                }
            }
        }

        return \$this->newSessionId === \$sessionId || \$this->doDestroy(\$sessionId);
    }
}
", "vendor/symfony/http-foundation/Session/Storage/Handler/AbstractSessionHandler.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/Session/Storage/Handler/AbstractSessionHandler.php");
    }
}
