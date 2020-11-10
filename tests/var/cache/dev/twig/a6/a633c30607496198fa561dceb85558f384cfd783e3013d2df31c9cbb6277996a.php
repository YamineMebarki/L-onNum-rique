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

/* vendor/symfony/cache/Traits/MemcachedTrait.php */
class __TwigTemplate_1e3af80c4c4d2d71334c09320b6b159f9eb4a4021e612ac6a52a7736f8fd3510 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Traits/MemcachedTrait.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Traits/MemcachedTrait.php"));

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

namespace Symfony\\Component\\Cache\\Traits;

use Symfony\\Component\\Cache\\Exception\\CacheException;
use Symfony\\Component\\Cache\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Cache\\Marshaller\\DefaultMarshaller;
use Symfony\\Component\\Cache\\Marshaller\\MarshallerInterface;

/**
 * @author Rob Frawley 2nd <rmf@src.run>
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
trait MemcachedTrait
{
    private static \$defaultClientOptions = [
        'persistent_id' => null,
        'username' => null,
        'password' => null,
        \\Memcached::OPT_SERIALIZER => \\Memcached::SERIALIZER_PHP,
    ];

    private \$marshaller;
    private \$client;
    private \$lazyClient;

    public static function isSupported()
    {
        return \\extension_loaded('memcached') && version_compare(phpversion('memcached'), '2.2.0', '>=');
    }

    private function init(\\Memcached \$client, \$namespace, \$defaultLifetime, ?MarshallerInterface \$marshaller)
    {
        if (!static::isSupported()) {
            throw new CacheException('Memcached >= 2.2.0 is required');
        }
        if ('Memcached' === \\get_class(\$client)) {
            \$opt = \$client->getOption(\\Memcached::OPT_SERIALIZER);
            if (\\Memcached::SERIALIZER_PHP !== \$opt && \\Memcached::SERIALIZER_IGBINARY !== \$opt) {
                throw new CacheException('MemcachedAdapter: \"serializer\" option must be \"php\" or \"igbinary\".');
            }
            \$this->maxIdLength -= \\strlen(\$client->getOption(\\Memcached::OPT_PREFIX_KEY));
            \$this->client = \$client;
        } else {
            \$this->lazyClient = \$client;
        }

        parent::__construct(\$namespace, \$defaultLifetime);
        \$this->enableVersioning();
        \$this->marshaller = \$marshaller ?? new DefaultMarshaller();
    }

    /**
     * Creates a Memcached instance.
     *
     * By default, the binary protocol, no block, and libketama compatible options are enabled.
     *
     * Examples for servers:
     * - 'memcached://user:pass@localhost?weight=33'
     * - [['localhost', 11211, 33]]
     *
     * @param array[]|string|string[] \$servers An array of servers, a DSN, or an array of DSNs
     * @param array                   \$options An array of options
     *
     * @return \\Memcached
     *
     * @throws \\ErrorException When invalid options or servers are provided
     */
    public static function createConnection(\$servers, array \$options = [])
    {
        if (\\is_string(\$servers)) {
            \$servers = [\$servers];
        } elseif (!\\is_array(\$servers)) {
            throw new InvalidArgumentException(sprintf('MemcachedAdapter::createClient() expects array or string as first argument, %s given.', \\gettype(\$servers)));
        }
        if (!static::isSupported()) {
            throw new CacheException('Memcached >= 2.2.0 is required');
        }
        set_error_handler(function (\$type, \$msg, \$file, \$line) { throw new \\ErrorException(\$msg, 0, \$type, \$file, \$line); });
        try {
            \$options += static::\$defaultClientOptions;
            \$client = new \\Memcached(\$options['persistent_id']);
            \$username = \$options['username'];
            \$password = \$options['password'];

            // parse any DSN in \$servers
            foreach (\$servers as \$i => \$dsn) {
                if (\\is_array(\$dsn)) {
                    continue;
                }
                if (0 !== strpos(\$dsn, 'memcached:')) {
                    throw new InvalidArgumentException(sprintf('Invalid Memcached DSN: %s does not start with \"memcached:\"', \$dsn));
                }
                \$params = preg_replace_callback('#^memcached:(//)?(?:([^@]*+)@)?#', function (\$m) use (&\$username, &\$password) {
                    if (!empty(\$m[2])) {
                        list(\$username, \$password) = explode(':', \$m[2], 2) + [1 => null];
                    }

                    return 'file:'.(\$m[1] ?? '');
                }, \$dsn);
                if (false === \$params = parse_url(\$params)) {
                    throw new InvalidArgumentException(sprintf('Invalid Memcached DSN: %s', \$dsn));
                }
                \$query = \$hosts = [];
                if (isset(\$params['query'])) {
                    parse_str(\$params['query'], \$query);

                    if (isset(\$query['host'])) {
                        if (!\\is_array(\$hosts = \$query['host'])) {
                            throw new InvalidArgumentException(sprintf('Invalid Memcached DSN: %s', \$dsn));
                        }
                        foreach (\$hosts as \$host => \$weight) {
                            if (false === \$port = strrpos(\$host, ':')) {
                                \$hosts[\$host] = [\$host, 11211, (int) \$weight];
                            } else {
                                \$hosts[\$host] = [substr(\$host, 0, \$port), (int) substr(\$host, 1 + \$port), (int) \$weight];
                            }
                        }
                        \$hosts = array_values(\$hosts);
                        unset(\$query['host']);
                    }
                    if (\$hosts && !isset(\$params['host']) && !isset(\$params['path'])) {
                        unset(\$servers[\$i]);
                        \$servers = array_merge(\$servers, \$hosts);
                        continue;
                    }
                }
                if (!isset(\$params['host']) && !isset(\$params['path'])) {
                    throw new InvalidArgumentException(sprintf('Invalid Memcached DSN: %s', \$dsn));
                }
                if (isset(\$params['path']) && preg_match('#/(\\d+)\$#', \$params['path'], \$m)) {
                    \$params['weight'] = \$m[1];
                    \$params['path'] = substr(\$params['path'], 0, -\\strlen(\$m[0]));
                }
                \$params += [
                    'host' => isset(\$params['host']) ? \$params['host'] : \$params['path'],
                    'port' => isset(\$params['host']) ? 11211 : null,
                    'weight' => 0,
                ];
                if (\$query) {
                    \$params += \$query;
                    \$options = \$query + \$options;
                }

                \$servers[\$i] = [\$params['host'], \$params['port'], \$params['weight']];

                if (\$hosts) {
                    \$servers = array_merge(\$servers, \$hosts);
                }
            }

            // set client's options
            unset(\$options['persistent_id'], \$options['username'], \$options['password'], \$options['weight'], \$options['lazy']);
            \$options = array_change_key_case(\$options, CASE_UPPER);
            \$client->setOption(\\Memcached::OPT_BINARY_PROTOCOL, true);
            \$client->setOption(\\Memcached::OPT_NO_BLOCK, true);
            \$client->setOption(\\Memcached::OPT_TCP_NODELAY, true);
            if (!\\array_key_exists('LIBKETAMA_COMPATIBLE', \$options) && !\\array_key_exists(\\Memcached::OPT_LIBKETAMA_COMPATIBLE, \$options)) {
                \$client->setOption(\\Memcached::OPT_LIBKETAMA_COMPATIBLE, true);
            }
            foreach (\$options as \$name => \$value) {
                if (\\is_int(\$name)) {
                    continue;
                }
                if ('HASH' === \$name || 'SERIALIZER' === \$name || 'DISTRIBUTION' === \$name) {
                    \$value = \\constant('Memcached::'.\$name.'_'.strtoupper(\$value));
                }
                \$opt = \\constant('Memcached::OPT_'.\$name);

                unset(\$options[\$name]);
                \$options[\$opt] = \$value;
            }
            \$client->setOptions(\$options);

            // set client's servers, taking care of persistent connections
            if (!\$client->isPristine()) {
                \$oldServers = [];
                foreach (\$client->getServerList() as \$server) {
                    \$oldServers[] = [\$server['host'], \$server['port']];
                }

                \$newServers = [];
                foreach (\$servers as \$server) {
                    if (1 < \\count(\$server)) {
                        \$server = array_values(\$server);
                        unset(\$server[2]);
                        \$server[1] = (int) \$server[1];
                    }
                    \$newServers[] = \$server;
                }

                if (\$oldServers !== \$newServers) {
                    \$client->resetServerList();
                    \$client->addServers(\$servers);
                }
            } else {
                \$client->addServers(\$servers);
            }

            if (null !== \$username || null !== \$password) {
                if (!method_exists(\$client, 'setSaslAuthData')) {
                    trigger_error('Missing SASL support: the memcached extension must be compiled with --enable-memcached-sasl.');
                }
                \$client->setSaslAuthData(\$username, \$password);
            }

            return \$client;
        } finally {
            restore_error_handler();
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function doSave(array \$values, \$lifetime)
    {
        if (!\$values = \$this->marshaller->marshall(\$values, \$failed)) {
            return \$failed;
        }

        if (\$lifetime && \$lifetime > 30 * 86400) {
            \$lifetime += time();
        }

        \$encodedValues = [];
        foreach (\$values as \$key => \$value) {
            \$encodedValues[rawurlencode(\$key)] = \$value;
        }

        return \$this->checkResultCode(\$this->getClient()->setMulti(\$encodedValues, \$lifetime)) ? \$failed : false;
    }

    /**
     * {@inheritdoc}
     */
    protected function doFetch(array \$ids)
    {
        try {
            \$encodedIds = array_map('rawurlencode', \$ids);

            \$encodedResult = \$this->checkResultCode(\$this->getClient()->getMulti(\$encodedIds));

            \$result = [];
            foreach (\$encodedResult as \$key => \$value) {
                \$result[rawurldecode(\$key)] = \$this->marshaller->unmarshall(\$value);
            }

            return \$result;
        } catch (\\Error \$e) {
            throw new \\ErrorException(\$e->getMessage(), \$e->getCode(), E_ERROR, \$e->getFile(), \$e->getLine());
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function doHave(\$id)
    {
        return false !== \$this->getClient()->get(rawurlencode(\$id)) || \$this->checkResultCode(\\Memcached::RES_SUCCESS === \$this->client->getResultCode());
    }

    /**
     * {@inheritdoc}
     */
    protected function doDelete(array \$ids)
    {
        \$ok = true;
        \$encodedIds = array_map('rawurlencode', \$ids);
        foreach (\$this->checkResultCode(\$this->getClient()->deleteMulti(\$encodedIds)) as \$result) {
            if (\\Memcached::RES_SUCCESS !== \$result && \\Memcached::RES_NOTFOUND !== \$result) {
                \$ok = false;
            }
        }

        return \$ok;
    }

    /**
     * {@inheritdoc}
     */
    protected function doClear(\$namespace)
    {
        return '' === \$namespace && \$this->getClient()->flush();
    }

    private function checkResultCode(\$result)
    {
        \$code = \$this->client->getResultCode();

        if (\\Memcached::RES_SUCCESS === \$code || \\Memcached::RES_NOTFOUND === \$code) {
            return \$result;
        }

        throw new CacheException(sprintf('MemcachedAdapter client error: %s.', strtolower(\$this->client->getResultMessage())));
    }

    /**
     * @return \\Memcached
     */
    private function getClient()
    {
        if (\$this->client) {
            return \$this->client;
        }

        \$opt = \$this->lazyClient->getOption(\\Memcached::OPT_SERIALIZER);
        if (\\Memcached::SERIALIZER_PHP !== \$opt && \\Memcached::SERIALIZER_IGBINARY !== \$opt) {
            throw new CacheException('MemcachedAdapter: \"serializer\" option must be \"php\" or \"igbinary\".');
        }
        if ('' !== \$prefix = (string) \$this->lazyClient->getOption(\\Memcached::OPT_PREFIX_KEY)) {
            throw new CacheException(sprintf('MemcachedAdapter: \"prefix_key\" option must be empty when using proxified connections, \"%s\" given.', \$prefix));
        }

        return \$this->client = \$this->lazyClient;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/cache/Traits/MemcachedTrait.php";
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

namespace Symfony\\Component\\Cache\\Traits;

use Symfony\\Component\\Cache\\Exception\\CacheException;
use Symfony\\Component\\Cache\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Cache\\Marshaller\\DefaultMarshaller;
use Symfony\\Component\\Cache\\Marshaller\\MarshallerInterface;

/**
 * @author Rob Frawley 2nd <rmf@src.run>
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
trait MemcachedTrait
{
    private static \$defaultClientOptions = [
        'persistent_id' => null,
        'username' => null,
        'password' => null,
        \\Memcached::OPT_SERIALIZER => \\Memcached::SERIALIZER_PHP,
    ];

    private \$marshaller;
    private \$client;
    private \$lazyClient;

    public static function isSupported()
    {
        return \\extension_loaded('memcached') && version_compare(phpversion('memcached'), '2.2.0', '>=');
    }

    private function init(\\Memcached \$client, \$namespace, \$defaultLifetime, ?MarshallerInterface \$marshaller)
    {
        if (!static::isSupported()) {
            throw new CacheException('Memcached >= 2.2.0 is required');
        }
        if ('Memcached' === \\get_class(\$client)) {
            \$opt = \$client->getOption(\\Memcached::OPT_SERIALIZER);
            if (\\Memcached::SERIALIZER_PHP !== \$opt && \\Memcached::SERIALIZER_IGBINARY !== \$opt) {
                throw new CacheException('MemcachedAdapter: \"serializer\" option must be \"php\" or \"igbinary\".');
            }
            \$this->maxIdLength -= \\strlen(\$client->getOption(\\Memcached::OPT_PREFIX_KEY));
            \$this->client = \$client;
        } else {
            \$this->lazyClient = \$client;
        }

        parent::__construct(\$namespace, \$defaultLifetime);
        \$this->enableVersioning();
        \$this->marshaller = \$marshaller ?? new DefaultMarshaller();
    }

    /**
     * Creates a Memcached instance.
     *
     * By default, the binary protocol, no block, and libketama compatible options are enabled.
     *
     * Examples for servers:
     * - 'memcached://user:pass@localhost?weight=33'
     * - [['localhost', 11211, 33]]
     *
     * @param array[]|string|string[] \$servers An array of servers, a DSN, or an array of DSNs
     * @param array                   \$options An array of options
     *
     * @return \\Memcached
     *
     * @throws \\ErrorException When invalid options or servers are provided
     */
    public static function createConnection(\$servers, array \$options = [])
    {
        if (\\is_string(\$servers)) {
            \$servers = [\$servers];
        } elseif (!\\is_array(\$servers)) {
            throw new InvalidArgumentException(sprintf('MemcachedAdapter::createClient() expects array or string as first argument, %s given.', \\gettype(\$servers)));
        }
        if (!static::isSupported()) {
            throw new CacheException('Memcached >= 2.2.0 is required');
        }
        set_error_handler(function (\$type, \$msg, \$file, \$line) { throw new \\ErrorException(\$msg, 0, \$type, \$file, \$line); });
        try {
            \$options += static::\$defaultClientOptions;
            \$client = new \\Memcached(\$options['persistent_id']);
            \$username = \$options['username'];
            \$password = \$options['password'];

            // parse any DSN in \$servers
            foreach (\$servers as \$i => \$dsn) {
                if (\\is_array(\$dsn)) {
                    continue;
                }
                if (0 !== strpos(\$dsn, 'memcached:')) {
                    throw new InvalidArgumentException(sprintf('Invalid Memcached DSN: %s does not start with \"memcached:\"', \$dsn));
                }
                \$params = preg_replace_callback('#^memcached:(//)?(?:([^@]*+)@)?#', function (\$m) use (&\$username, &\$password) {
                    if (!empty(\$m[2])) {
                        list(\$username, \$password) = explode(':', \$m[2], 2) + [1 => null];
                    }

                    return 'file:'.(\$m[1] ?? '');
                }, \$dsn);
                if (false === \$params = parse_url(\$params)) {
                    throw new InvalidArgumentException(sprintf('Invalid Memcached DSN: %s', \$dsn));
                }
                \$query = \$hosts = [];
                if (isset(\$params['query'])) {
                    parse_str(\$params['query'], \$query);

                    if (isset(\$query['host'])) {
                        if (!\\is_array(\$hosts = \$query['host'])) {
                            throw new InvalidArgumentException(sprintf('Invalid Memcached DSN: %s', \$dsn));
                        }
                        foreach (\$hosts as \$host => \$weight) {
                            if (false === \$port = strrpos(\$host, ':')) {
                                \$hosts[\$host] = [\$host, 11211, (int) \$weight];
                            } else {
                                \$hosts[\$host] = [substr(\$host, 0, \$port), (int) substr(\$host, 1 + \$port), (int) \$weight];
                            }
                        }
                        \$hosts = array_values(\$hosts);
                        unset(\$query['host']);
                    }
                    if (\$hosts && !isset(\$params['host']) && !isset(\$params['path'])) {
                        unset(\$servers[\$i]);
                        \$servers = array_merge(\$servers, \$hosts);
                        continue;
                    }
                }
                if (!isset(\$params['host']) && !isset(\$params['path'])) {
                    throw new InvalidArgumentException(sprintf('Invalid Memcached DSN: %s', \$dsn));
                }
                if (isset(\$params['path']) && preg_match('#/(\\d+)\$#', \$params['path'], \$m)) {
                    \$params['weight'] = \$m[1];
                    \$params['path'] = substr(\$params['path'], 0, -\\strlen(\$m[0]));
                }
                \$params += [
                    'host' => isset(\$params['host']) ? \$params['host'] : \$params['path'],
                    'port' => isset(\$params['host']) ? 11211 : null,
                    'weight' => 0,
                ];
                if (\$query) {
                    \$params += \$query;
                    \$options = \$query + \$options;
                }

                \$servers[\$i] = [\$params['host'], \$params['port'], \$params['weight']];

                if (\$hosts) {
                    \$servers = array_merge(\$servers, \$hosts);
                }
            }

            // set client's options
            unset(\$options['persistent_id'], \$options['username'], \$options['password'], \$options['weight'], \$options['lazy']);
            \$options = array_change_key_case(\$options, CASE_UPPER);
            \$client->setOption(\\Memcached::OPT_BINARY_PROTOCOL, true);
            \$client->setOption(\\Memcached::OPT_NO_BLOCK, true);
            \$client->setOption(\\Memcached::OPT_TCP_NODELAY, true);
            if (!\\array_key_exists('LIBKETAMA_COMPATIBLE', \$options) && !\\array_key_exists(\\Memcached::OPT_LIBKETAMA_COMPATIBLE, \$options)) {
                \$client->setOption(\\Memcached::OPT_LIBKETAMA_COMPATIBLE, true);
            }
            foreach (\$options as \$name => \$value) {
                if (\\is_int(\$name)) {
                    continue;
                }
                if ('HASH' === \$name || 'SERIALIZER' === \$name || 'DISTRIBUTION' === \$name) {
                    \$value = \\constant('Memcached::'.\$name.'_'.strtoupper(\$value));
                }
                \$opt = \\constant('Memcached::OPT_'.\$name);

                unset(\$options[\$name]);
                \$options[\$opt] = \$value;
            }
            \$client->setOptions(\$options);

            // set client's servers, taking care of persistent connections
            if (!\$client->isPristine()) {
                \$oldServers = [];
                foreach (\$client->getServerList() as \$server) {
                    \$oldServers[] = [\$server['host'], \$server['port']];
                }

                \$newServers = [];
                foreach (\$servers as \$server) {
                    if (1 < \\count(\$server)) {
                        \$server = array_values(\$server);
                        unset(\$server[2]);
                        \$server[1] = (int) \$server[1];
                    }
                    \$newServers[] = \$server;
                }

                if (\$oldServers !== \$newServers) {
                    \$client->resetServerList();
                    \$client->addServers(\$servers);
                }
            } else {
                \$client->addServers(\$servers);
            }

            if (null !== \$username || null !== \$password) {
                if (!method_exists(\$client, 'setSaslAuthData')) {
                    trigger_error('Missing SASL support: the memcached extension must be compiled with --enable-memcached-sasl.');
                }
                \$client->setSaslAuthData(\$username, \$password);
            }

            return \$client;
        } finally {
            restore_error_handler();
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function doSave(array \$values, \$lifetime)
    {
        if (!\$values = \$this->marshaller->marshall(\$values, \$failed)) {
            return \$failed;
        }

        if (\$lifetime && \$lifetime > 30 * 86400) {
            \$lifetime += time();
        }

        \$encodedValues = [];
        foreach (\$values as \$key => \$value) {
            \$encodedValues[rawurlencode(\$key)] = \$value;
        }

        return \$this->checkResultCode(\$this->getClient()->setMulti(\$encodedValues, \$lifetime)) ? \$failed : false;
    }

    /**
     * {@inheritdoc}
     */
    protected function doFetch(array \$ids)
    {
        try {
            \$encodedIds = array_map('rawurlencode', \$ids);

            \$encodedResult = \$this->checkResultCode(\$this->getClient()->getMulti(\$encodedIds));

            \$result = [];
            foreach (\$encodedResult as \$key => \$value) {
                \$result[rawurldecode(\$key)] = \$this->marshaller->unmarshall(\$value);
            }

            return \$result;
        } catch (\\Error \$e) {
            throw new \\ErrorException(\$e->getMessage(), \$e->getCode(), E_ERROR, \$e->getFile(), \$e->getLine());
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function doHave(\$id)
    {
        return false !== \$this->getClient()->get(rawurlencode(\$id)) || \$this->checkResultCode(\\Memcached::RES_SUCCESS === \$this->client->getResultCode());
    }

    /**
     * {@inheritdoc}
     */
    protected function doDelete(array \$ids)
    {
        \$ok = true;
        \$encodedIds = array_map('rawurlencode', \$ids);
        foreach (\$this->checkResultCode(\$this->getClient()->deleteMulti(\$encodedIds)) as \$result) {
            if (\\Memcached::RES_SUCCESS !== \$result && \\Memcached::RES_NOTFOUND !== \$result) {
                \$ok = false;
            }
        }

        return \$ok;
    }

    /**
     * {@inheritdoc}
     */
    protected function doClear(\$namespace)
    {
        return '' === \$namespace && \$this->getClient()->flush();
    }

    private function checkResultCode(\$result)
    {
        \$code = \$this->client->getResultCode();

        if (\\Memcached::RES_SUCCESS === \$code || \\Memcached::RES_NOTFOUND === \$code) {
            return \$result;
        }

        throw new CacheException(sprintf('MemcachedAdapter client error: %s.', strtolower(\$this->client->getResultMessage())));
    }

    /**
     * @return \\Memcached
     */
    private function getClient()
    {
        if (\$this->client) {
            return \$this->client;
        }

        \$opt = \$this->lazyClient->getOption(\\Memcached::OPT_SERIALIZER);
        if (\\Memcached::SERIALIZER_PHP !== \$opt && \\Memcached::SERIALIZER_IGBINARY !== \$opt) {
            throw new CacheException('MemcachedAdapter: \"serializer\" option must be \"php\" or \"igbinary\".');
        }
        if ('' !== \$prefix = (string) \$this->lazyClient->getOption(\\Memcached::OPT_PREFIX_KEY)) {
            throw new CacheException(sprintf('MemcachedAdapter: \"prefix_key\" option must be empty when using proxified connections, \"%s\" given.', \$prefix));
        }

        return \$this->client = \$this->lazyClient;
    }
}
", "vendor/symfony/cache/Traits/MemcachedTrait.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache/Traits/MemcachedTrait.php");
    }
}
