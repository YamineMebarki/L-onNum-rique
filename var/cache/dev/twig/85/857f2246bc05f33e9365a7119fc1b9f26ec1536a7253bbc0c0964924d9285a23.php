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

/* vendor/symfony/http-foundation/Cookie.php */
class __TwigTemplate_c7287caab1a2e4d747b11d18b9f9e670d4df688ec1da7a15e34f84ca4bb13ba9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Cookie.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Cookie.php"));

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

namespace Symfony\\Component\\HttpFoundation;

/**
 * Represents a cookie.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class Cookie
{
    const SAMESITE_NONE = 'none';
    const SAMESITE_LAX = 'lax';
    const SAMESITE_STRICT = 'strict';

    protected \$name;
    protected \$value;
    protected \$domain;
    protected \$expire;
    protected \$path;
    protected \$secure;
    protected \$httpOnly;

    private \$raw;
    private \$sameSite;
    private \$secureDefault = false;

    private static \$reservedCharsList = \"=,; \\t\\r\\n\\v\\f\";
    private static \$reservedCharsFrom = ['=', ',', ';', ' ', \"\\t\", \"\\r\", \"\\n\", \"\\v\", \"\\f\"];
    private static \$reservedCharsTo = ['%3D', '%2C', '%3B', '%20', '%09', '%0D', '%0A', '%0B', '%0C'];

    /**
     * Creates cookie from raw header string.
     *
     * @param string \$cookie
     * @param bool   \$decode
     *
     * @return static
     */
    public static function fromString(\$cookie, \$decode = false)
    {
        \$data = [
            'expires' => 0,
            'path' => '/',
            'domain' => null,
            'secure' => false,
            'httponly' => false,
            'raw' => !\$decode,
            'samesite' => null,
        ];

        \$parts = HeaderUtils::split(\$cookie, ';=');
        \$part = array_shift(\$parts);

        \$name = \$decode ? urldecode(\$part[0]) : \$part[0];
        \$value = isset(\$part[1]) ? (\$decode ? urldecode(\$part[1]) : \$part[1]) : null;

        \$data = HeaderUtils::combine(\$parts) + \$data;

        if (isset(\$data['max-age'])) {
            \$data['expires'] = time() + (int) \$data['max-age'];
        }

        return new static(\$name, \$value, \$data['expires'], \$data['path'], \$data['domain'], \$data['secure'], \$data['httponly'], \$data['raw'], \$data['samesite']);
    }

    public static function create(string \$name, string \$value = null, \$expire = 0, ?string \$path = '/', string \$domain = null, bool \$secure = null, bool \$httpOnly = true, bool \$raw = false, ?string \$sameSite = self::SAMESITE_LAX): self
    {
        return new self(\$name, \$value, \$expire, \$path, \$domain, \$secure, \$httpOnly, \$raw, \$sameSite);
    }

    /**
     * @param string                        \$name     The name of the cookie
     * @param string|null                   \$value    The value of the cookie
     * @param int|string|\\DateTimeInterface \$expire   The time the cookie expires
     * @param string                        \$path     The path on the server in which the cookie will be available on
     * @param string|null                   \$domain   The domain that the cookie is available to
     * @param bool|null                     \$secure   Whether the client should send back the cookie only over HTTPS or null to auto-enable this when the request is already using HTTPS
     * @param bool                          \$httpOnly Whether the cookie will be made accessible only through the HTTP protocol
     * @param bool                          \$raw      Whether the cookie value should be sent with no url encoding
     * @param string|null                   \$sameSite Whether the cookie will be available for cross-site requests
     *
     * @throws \\InvalidArgumentException
     */
    public function __construct(string \$name, string \$value = null, \$expire = 0, ?string \$path = '/', string \$domain = null, ?bool \$secure = false, bool \$httpOnly = true, bool \$raw = false, string \$sameSite = null)
    {
        if (9 > \\func_num_args()) {
            @trigger_error(sprintf('The default value of the \"\$secure\" and \"\$samesite\" arguments of \"%s\"\\'s constructor will respectively change from \"false\" to \"null\" and from \"null\" to \"lax\" in Symfony 5.0, you should define their values explicitly or use \"Cookie::create()\" instead.', __METHOD__), E_USER_DEPRECATED);
        }

        // from PHP source code
        if (\$raw && false !== strpbrk(\$name, self::\$reservedCharsList)) {
            throw new \\InvalidArgumentException(sprintf('The cookie name \"%s\" contains invalid characters.', \$name));
        }

        if (empty(\$name)) {
            throw new \\InvalidArgumentException('The cookie name cannot be empty.');
        }

        // convert expiration time to a Unix timestamp
        if (\$expire instanceof \\DateTimeInterface) {
            \$expire = \$expire->format('U');
        } elseif (!is_numeric(\$expire)) {
            \$expire = strtotime(\$expire);

            if (false === \$expire) {
                throw new \\InvalidArgumentException('The cookie expiration time is not valid.');
            }
        }

        \$this->name = \$name;
        \$this->value = \$value;
        \$this->domain = \$domain;
        \$this->expire = 0 < \$expire ? (int) \$expire : 0;
        \$this->path = empty(\$path) ? '/' : \$path;
        \$this->secure = \$secure;
        \$this->httpOnly = \$httpOnly;
        \$this->raw = \$raw;

        if ('' === \$sameSite) {
            \$sameSite = null;
        } elseif (null !== \$sameSite) {
            \$sameSite = strtolower(\$sameSite);
        }

        if (!\\in_array(\$sameSite, [self::SAMESITE_LAX, self::SAMESITE_STRICT, self::SAMESITE_NONE, null], true)) {
            throw new \\InvalidArgumentException('The \"sameSite\" parameter value is not valid.');
        }

        \$this->sameSite = \$sameSite;
    }

    /**
     * Returns the cookie as a string.
     *
     * @return string The cookie
     */
    public function __toString()
    {
        if (\$this->isRaw()) {
            \$str = \$this->getName();
        } else {
            \$str = str_replace(self::\$reservedCharsFrom, self::\$reservedCharsTo, \$this->getName());
        }

        \$str .= '=';

        if ('' === (string) \$this->getValue()) {
            \$str .= 'deleted; expires='.gmdate('D, d-M-Y H:i:s T', time() - 31536001).'; Max-Age=0';
        } else {
            \$str .= \$this->isRaw() ? \$this->getValue() : rawurlencode(\$this->getValue());

            if (0 !== \$this->getExpiresTime()) {
                \$str .= '; expires='.gmdate('D, d-M-Y H:i:s T', \$this->getExpiresTime()).'; Max-Age='.\$this->getMaxAge();
            }
        }

        if (\$this->getPath()) {
            \$str .= '; path='.\$this->getPath();
        }

        if (\$this->getDomain()) {
            \$str .= '; domain='.\$this->getDomain();
        }

        if (true === \$this->isSecure()) {
            \$str .= '; secure';
        }

        if (true === \$this->isHttpOnly()) {
            \$str .= '; httponly';
        }

        if (null !== \$this->getSameSite()) {
            \$str .= '; samesite='.\$this->getSameSite();
        }

        return \$str;
    }

    /**
     * Gets the name of the cookie.
     *
     * @return string
     */
    public function getName()
    {
        return \$this->name;
    }

    /**
     * Gets the value of the cookie.
     *
     * @return string|null
     */
    public function getValue()
    {
        return \$this->value;
    }

    /**
     * Gets the domain that the cookie is available to.
     *
     * @return string|null
     */
    public function getDomain()
    {
        return \$this->domain;
    }

    /**
     * Gets the time the cookie expires.
     *
     * @return int
     */
    public function getExpiresTime()
    {
        return \$this->expire;
    }

    /**
     * Gets the max-age attribute.
     *
     * @return int
     */
    public function getMaxAge()
    {
        \$maxAge = \$this->expire - time();

        return 0 >= \$maxAge ? 0 : \$maxAge;
    }

    /**
     * Gets the path on the server in which the cookie will be available on.
     *
     * @return string
     */
    public function getPath()
    {
        return \$this->path;
    }

    /**
     * Checks whether the cookie should only be transmitted over a secure HTTPS connection from the client.
     *
     * @return bool
     */
    public function isSecure()
    {
        return \$this->secure ?? \$this->secureDefault;
    }

    /**
     * Checks whether the cookie will be made accessible only through the HTTP protocol.
     *
     * @return bool
     */
    public function isHttpOnly()
    {
        return \$this->httpOnly;
    }

    /**
     * Whether this cookie is about to be cleared.
     *
     * @return bool
     */
    public function isCleared()
    {
        return 0 !== \$this->expire && \$this->expire < time();
    }

    /**
     * Checks if the cookie value should be sent with no url encoding.
     *
     * @return bool
     */
    public function isRaw()
    {
        return \$this->raw;
    }

    /**
     * Gets the SameSite attribute.
     *
     * @return string|null
     */
    public function getSameSite()
    {
        return \$this->sameSite;
    }

    /**
     * @param bool \$default The default value of the \"secure\" flag when it is set to null
     */
    public function setSecureDefault(bool \$default): void
    {
        \$this->secureDefault = \$default;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/Cookie.php";
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

namespace Symfony\\Component\\HttpFoundation;

/**
 * Represents a cookie.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class Cookie
{
    const SAMESITE_NONE = 'none';
    const SAMESITE_LAX = 'lax';
    const SAMESITE_STRICT = 'strict';

    protected \$name;
    protected \$value;
    protected \$domain;
    protected \$expire;
    protected \$path;
    protected \$secure;
    protected \$httpOnly;

    private \$raw;
    private \$sameSite;
    private \$secureDefault = false;

    private static \$reservedCharsList = \"=,; \\t\\r\\n\\v\\f\";
    private static \$reservedCharsFrom = ['=', ',', ';', ' ', \"\\t\", \"\\r\", \"\\n\", \"\\v\", \"\\f\"];
    private static \$reservedCharsTo = ['%3D', '%2C', '%3B', '%20', '%09', '%0D', '%0A', '%0B', '%0C'];

    /**
     * Creates cookie from raw header string.
     *
     * @param string \$cookie
     * @param bool   \$decode
     *
     * @return static
     */
    public static function fromString(\$cookie, \$decode = false)
    {
        \$data = [
            'expires' => 0,
            'path' => '/',
            'domain' => null,
            'secure' => false,
            'httponly' => false,
            'raw' => !\$decode,
            'samesite' => null,
        ];

        \$parts = HeaderUtils::split(\$cookie, ';=');
        \$part = array_shift(\$parts);

        \$name = \$decode ? urldecode(\$part[0]) : \$part[0];
        \$value = isset(\$part[1]) ? (\$decode ? urldecode(\$part[1]) : \$part[1]) : null;

        \$data = HeaderUtils::combine(\$parts) + \$data;

        if (isset(\$data['max-age'])) {
            \$data['expires'] = time() + (int) \$data['max-age'];
        }

        return new static(\$name, \$value, \$data['expires'], \$data['path'], \$data['domain'], \$data['secure'], \$data['httponly'], \$data['raw'], \$data['samesite']);
    }

    public static function create(string \$name, string \$value = null, \$expire = 0, ?string \$path = '/', string \$domain = null, bool \$secure = null, bool \$httpOnly = true, bool \$raw = false, ?string \$sameSite = self::SAMESITE_LAX): self
    {
        return new self(\$name, \$value, \$expire, \$path, \$domain, \$secure, \$httpOnly, \$raw, \$sameSite);
    }

    /**
     * @param string                        \$name     The name of the cookie
     * @param string|null                   \$value    The value of the cookie
     * @param int|string|\\DateTimeInterface \$expire   The time the cookie expires
     * @param string                        \$path     The path on the server in which the cookie will be available on
     * @param string|null                   \$domain   The domain that the cookie is available to
     * @param bool|null                     \$secure   Whether the client should send back the cookie only over HTTPS or null to auto-enable this when the request is already using HTTPS
     * @param bool                          \$httpOnly Whether the cookie will be made accessible only through the HTTP protocol
     * @param bool                          \$raw      Whether the cookie value should be sent with no url encoding
     * @param string|null                   \$sameSite Whether the cookie will be available for cross-site requests
     *
     * @throws \\InvalidArgumentException
     */
    public function __construct(string \$name, string \$value = null, \$expire = 0, ?string \$path = '/', string \$domain = null, ?bool \$secure = false, bool \$httpOnly = true, bool \$raw = false, string \$sameSite = null)
    {
        if (9 > \\func_num_args()) {
            @trigger_error(sprintf('The default value of the \"\$secure\" and \"\$samesite\" arguments of \"%s\"\\'s constructor will respectively change from \"false\" to \"null\" and from \"null\" to \"lax\" in Symfony 5.0, you should define their values explicitly or use \"Cookie::create()\" instead.', __METHOD__), E_USER_DEPRECATED);
        }

        // from PHP source code
        if (\$raw && false !== strpbrk(\$name, self::\$reservedCharsList)) {
            throw new \\InvalidArgumentException(sprintf('The cookie name \"%s\" contains invalid characters.', \$name));
        }

        if (empty(\$name)) {
            throw new \\InvalidArgumentException('The cookie name cannot be empty.');
        }

        // convert expiration time to a Unix timestamp
        if (\$expire instanceof \\DateTimeInterface) {
            \$expire = \$expire->format('U');
        } elseif (!is_numeric(\$expire)) {
            \$expire = strtotime(\$expire);

            if (false === \$expire) {
                throw new \\InvalidArgumentException('The cookie expiration time is not valid.');
            }
        }

        \$this->name = \$name;
        \$this->value = \$value;
        \$this->domain = \$domain;
        \$this->expire = 0 < \$expire ? (int) \$expire : 0;
        \$this->path = empty(\$path) ? '/' : \$path;
        \$this->secure = \$secure;
        \$this->httpOnly = \$httpOnly;
        \$this->raw = \$raw;

        if ('' === \$sameSite) {
            \$sameSite = null;
        } elseif (null !== \$sameSite) {
            \$sameSite = strtolower(\$sameSite);
        }

        if (!\\in_array(\$sameSite, [self::SAMESITE_LAX, self::SAMESITE_STRICT, self::SAMESITE_NONE, null], true)) {
            throw new \\InvalidArgumentException('The \"sameSite\" parameter value is not valid.');
        }

        \$this->sameSite = \$sameSite;
    }

    /**
     * Returns the cookie as a string.
     *
     * @return string The cookie
     */
    public function __toString()
    {
        if (\$this->isRaw()) {
            \$str = \$this->getName();
        } else {
            \$str = str_replace(self::\$reservedCharsFrom, self::\$reservedCharsTo, \$this->getName());
        }

        \$str .= '=';

        if ('' === (string) \$this->getValue()) {
            \$str .= 'deleted; expires='.gmdate('D, d-M-Y H:i:s T', time() - 31536001).'; Max-Age=0';
        } else {
            \$str .= \$this->isRaw() ? \$this->getValue() : rawurlencode(\$this->getValue());

            if (0 !== \$this->getExpiresTime()) {
                \$str .= '; expires='.gmdate('D, d-M-Y H:i:s T', \$this->getExpiresTime()).'; Max-Age='.\$this->getMaxAge();
            }
        }

        if (\$this->getPath()) {
            \$str .= '; path='.\$this->getPath();
        }

        if (\$this->getDomain()) {
            \$str .= '; domain='.\$this->getDomain();
        }

        if (true === \$this->isSecure()) {
            \$str .= '; secure';
        }

        if (true === \$this->isHttpOnly()) {
            \$str .= '; httponly';
        }

        if (null !== \$this->getSameSite()) {
            \$str .= '; samesite='.\$this->getSameSite();
        }

        return \$str;
    }

    /**
     * Gets the name of the cookie.
     *
     * @return string
     */
    public function getName()
    {
        return \$this->name;
    }

    /**
     * Gets the value of the cookie.
     *
     * @return string|null
     */
    public function getValue()
    {
        return \$this->value;
    }

    /**
     * Gets the domain that the cookie is available to.
     *
     * @return string|null
     */
    public function getDomain()
    {
        return \$this->domain;
    }

    /**
     * Gets the time the cookie expires.
     *
     * @return int
     */
    public function getExpiresTime()
    {
        return \$this->expire;
    }

    /**
     * Gets the max-age attribute.
     *
     * @return int
     */
    public function getMaxAge()
    {
        \$maxAge = \$this->expire - time();

        return 0 >= \$maxAge ? 0 : \$maxAge;
    }

    /**
     * Gets the path on the server in which the cookie will be available on.
     *
     * @return string
     */
    public function getPath()
    {
        return \$this->path;
    }

    /**
     * Checks whether the cookie should only be transmitted over a secure HTTPS connection from the client.
     *
     * @return bool
     */
    public function isSecure()
    {
        return \$this->secure ?? \$this->secureDefault;
    }

    /**
     * Checks whether the cookie will be made accessible only through the HTTP protocol.
     *
     * @return bool
     */
    public function isHttpOnly()
    {
        return \$this->httpOnly;
    }

    /**
     * Whether this cookie is about to be cleared.
     *
     * @return bool
     */
    public function isCleared()
    {
        return 0 !== \$this->expire && \$this->expire < time();
    }

    /**
     * Checks if the cookie value should be sent with no url encoding.
     *
     * @return bool
     */
    public function isRaw()
    {
        return \$this->raw;
    }

    /**
     * Gets the SameSite attribute.
     *
     * @return string|null
     */
    public function getSameSite()
    {
        return \$this->sameSite;
    }

    /**
     * @param bool \$default The default value of the \"secure\" flag when it is set to null
     */
    public function setSecureDefault(bool \$default): void
    {
        \$this->secureDefault = \$default;
    }
}
", "vendor/symfony/http-foundation/Cookie.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/Cookie.php");
    }
}
