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

/* vendor/symfony/http-kernel/Profiler/Profiler.php */
class __TwigTemplate_895073c68138a87b1598ccb5b93549ed94dc9651f5a8be89e4ba7f08fbe49eb0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Profiler/Profiler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Profiler/Profiler.php"));

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

namespace Symfony\\Component\\HttpKernel\\Profiler;

use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\DataCollector\\DataCollectorInterface;
use Symfony\\Component\\HttpKernel\\DataCollector\\LateDataCollectorInterface;
use Symfony\\Contracts\\Service\\ResetInterface;

/**
 * Profiler.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Profiler implements ResetInterface
{
    private \$storage;

    /**
     * @var DataCollectorInterface[]
     */
    private \$collectors = [];

    private \$logger;
    private \$initiallyEnabled = true;
    private \$enabled = true;

    public function __construct(ProfilerStorageInterface \$storage, LoggerInterface \$logger = null, bool \$enable = true)
    {
        \$this->storage = \$storage;
        \$this->logger = \$logger;
        \$this->initiallyEnabled = \$this->enabled = \$enable;
    }

    /**
     * Disables the profiler.
     */
    public function disable()
    {
        \$this->enabled = false;
    }

    /**
     * Enables the profiler.
     */
    public function enable()
    {
        \$this->enabled = true;
    }

    /**
     * Loads the Profile for the given Response.
     *
     * @return Profile|null A Profile instance
     */
    public function loadProfileFromResponse(Response \$response)
    {
        if (!\$token = \$response->headers->get('X-Debug-Token')) {
            return null;
        }

        return \$this->loadProfile(\$token);
    }

    /**
     * Loads the Profile for the given token.
     *
     * @param string \$token A token
     *
     * @return Profile|null A Profile instance
     */
    public function loadProfile(\$token)
    {
        return \$this->storage->read(\$token);
    }

    /**
     * Saves a Profile.
     *
     * @return bool
     */
    public function saveProfile(Profile \$profile)
    {
        // late collect
        foreach (\$profile->getCollectors() as \$collector) {
            if (\$collector instanceof LateDataCollectorInterface) {
                \$collector->lateCollect();
            }
        }

        if (!(\$ret = \$this->storage->write(\$profile)) && null !== \$this->logger) {
            \$this->logger->warning('Unable to store the profiler information.', ['configured_storage' => \\get_class(\$this->storage)]);
        }

        return \$ret;
    }

    /**
     * Purges all data from the storage.
     */
    public function purge()
    {
        \$this->storage->purge();
    }

    /**
     * Finds profiler tokens for the given criteria.
     *
     * @param string \$ip         The IP
     * @param string \$url        The URL
     * @param string \$limit      The maximum number of tokens to return
     * @param string \$method     The request method
     * @param string \$start      The start date to search from
     * @param string \$end        The end date to search to
     * @param string \$statusCode The request status code
     *
     * @return array An array of tokens
     *
     * @see https://php.net/datetime.formats for the supported date/time formats
     */
    public function find(\$ip, \$url, \$limit, \$method, \$start, \$end, \$statusCode = null)
    {
        return \$this->storage->find(\$ip, \$url, \$limit, \$method, \$this->getTimestamp(\$start), \$this->getTimestamp(\$end), \$statusCode);
    }

    /**
     * Collects data for the given Response.
     *
     * @return Profile|null A Profile instance or null if the profiler is disabled
     */
    public function collect(Request \$request, Response \$response, \\Exception \$exception = null)
    {
        if (false === \$this->enabled) {
            return null;
        }

        \$profile = new Profile(substr(hash('sha256', uniqid(mt_rand(), true)), 0, 6));
        \$profile->setTime(time());
        \$profile->setUrl(\$request->getUri());
        \$profile->setMethod(\$request->getMethod());
        \$profile->setStatusCode(\$response->getStatusCode());
        try {
            \$profile->setIp(\$request->getClientIp());
        } catch (ConflictingHeadersException \$e) {
            \$profile->setIp('Unknown');
        }

        if (\$prevToken = \$response->headers->get('X-Debug-Token')) {
            \$response->headers->set('X-Previous-Debug-Token', \$prevToken);
        }

        \$response->headers->set('X-Debug-Token', \$profile->getToken());

        foreach (\$this->collectors as \$collector) {
            \$collector->collect(\$request, \$response, \$exception);

            // we need to clone for sub-requests
            \$profile->addCollector(clone \$collector);
        }

        return \$profile;
    }

    public function reset()
    {
        foreach (\$this->collectors as \$collector) {
            \$collector->reset();
        }
        \$this->enabled = \$this->initiallyEnabled;
    }

    /**
     * Gets the Collectors associated with this profiler.
     *
     * @return array An array of collectors
     */
    public function all()
    {
        return \$this->collectors;
    }

    /**
     * Sets the Collectors associated with this profiler.
     *
     * @param DataCollectorInterface[] \$collectors An array of collectors
     */
    public function set(array \$collectors = [])
    {
        \$this->collectors = [];
        foreach (\$collectors as \$collector) {
            \$this->add(\$collector);
        }
    }

    /**
     * Adds a Collector.
     */
    public function add(DataCollectorInterface \$collector)
    {
        \$this->collectors[\$collector->getName()] = \$collector;
    }

    /**
     * Returns true if a Collector for the given name exists.
     *
     * @param string \$name A collector name
     *
     * @return bool
     */
    public function has(\$name)
    {
        return isset(\$this->collectors[\$name]);
    }

    /**
     * Gets a Collector by name.
     *
     * @param string \$name A collector name
     *
     * @return DataCollectorInterface A DataCollectorInterface instance
     *
     * @throws \\InvalidArgumentException if the collector does not exist
     */
    public function get(\$name)
    {
        if (!isset(\$this->collectors[\$name])) {
            throw new \\InvalidArgumentException(sprintf('Collector \"%s\" does not exist.', \$name));
        }

        return \$this->collectors[\$name];
    }

    private function getTimestamp(?string \$value): ?int
    {
        if (null === \$value || '' === \$value) {
            return null;
        }

        try {
            \$value = new \\DateTime(is_numeric(\$value) ? '@'.\$value : \$value);
        } catch (\\Exception \$e) {
            return null;
        }

        return \$value->getTimestamp();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Profiler/Profiler.php";
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

namespace Symfony\\Component\\HttpKernel\\Profiler;

use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\DataCollector\\DataCollectorInterface;
use Symfony\\Component\\HttpKernel\\DataCollector\\LateDataCollectorInterface;
use Symfony\\Contracts\\Service\\ResetInterface;

/**
 * Profiler.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Profiler implements ResetInterface
{
    private \$storage;

    /**
     * @var DataCollectorInterface[]
     */
    private \$collectors = [];

    private \$logger;
    private \$initiallyEnabled = true;
    private \$enabled = true;

    public function __construct(ProfilerStorageInterface \$storage, LoggerInterface \$logger = null, bool \$enable = true)
    {
        \$this->storage = \$storage;
        \$this->logger = \$logger;
        \$this->initiallyEnabled = \$this->enabled = \$enable;
    }

    /**
     * Disables the profiler.
     */
    public function disable()
    {
        \$this->enabled = false;
    }

    /**
     * Enables the profiler.
     */
    public function enable()
    {
        \$this->enabled = true;
    }

    /**
     * Loads the Profile for the given Response.
     *
     * @return Profile|null A Profile instance
     */
    public function loadProfileFromResponse(Response \$response)
    {
        if (!\$token = \$response->headers->get('X-Debug-Token')) {
            return null;
        }

        return \$this->loadProfile(\$token);
    }

    /**
     * Loads the Profile for the given token.
     *
     * @param string \$token A token
     *
     * @return Profile|null A Profile instance
     */
    public function loadProfile(\$token)
    {
        return \$this->storage->read(\$token);
    }

    /**
     * Saves a Profile.
     *
     * @return bool
     */
    public function saveProfile(Profile \$profile)
    {
        // late collect
        foreach (\$profile->getCollectors() as \$collector) {
            if (\$collector instanceof LateDataCollectorInterface) {
                \$collector->lateCollect();
            }
        }

        if (!(\$ret = \$this->storage->write(\$profile)) && null !== \$this->logger) {
            \$this->logger->warning('Unable to store the profiler information.', ['configured_storage' => \\get_class(\$this->storage)]);
        }

        return \$ret;
    }

    /**
     * Purges all data from the storage.
     */
    public function purge()
    {
        \$this->storage->purge();
    }

    /**
     * Finds profiler tokens for the given criteria.
     *
     * @param string \$ip         The IP
     * @param string \$url        The URL
     * @param string \$limit      The maximum number of tokens to return
     * @param string \$method     The request method
     * @param string \$start      The start date to search from
     * @param string \$end        The end date to search to
     * @param string \$statusCode The request status code
     *
     * @return array An array of tokens
     *
     * @see https://php.net/datetime.formats for the supported date/time formats
     */
    public function find(\$ip, \$url, \$limit, \$method, \$start, \$end, \$statusCode = null)
    {
        return \$this->storage->find(\$ip, \$url, \$limit, \$method, \$this->getTimestamp(\$start), \$this->getTimestamp(\$end), \$statusCode);
    }

    /**
     * Collects data for the given Response.
     *
     * @return Profile|null A Profile instance or null if the profiler is disabled
     */
    public function collect(Request \$request, Response \$response, \\Exception \$exception = null)
    {
        if (false === \$this->enabled) {
            return null;
        }

        \$profile = new Profile(substr(hash('sha256', uniqid(mt_rand(), true)), 0, 6));
        \$profile->setTime(time());
        \$profile->setUrl(\$request->getUri());
        \$profile->setMethod(\$request->getMethod());
        \$profile->setStatusCode(\$response->getStatusCode());
        try {
            \$profile->setIp(\$request->getClientIp());
        } catch (ConflictingHeadersException \$e) {
            \$profile->setIp('Unknown');
        }

        if (\$prevToken = \$response->headers->get('X-Debug-Token')) {
            \$response->headers->set('X-Previous-Debug-Token', \$prevToken);
        }

        \$response->headers->set('X-Debug-Token', \$profile->getToken());

        foreach (\$this->collectors as \$collector) {
            \$collector->collect(\$request, \$response, \$exception);

            // we need to clone for sub-requests
            \$profile->addCollector(clone \$collector);
        }

        return \$profile;
    }

    public function reset()
    {
        foreach (\$this->collectors as \$collector) {
            \$collector->reset();
        }
        \$this->enabled = \$this->initiallyEnabled;
    }

    /**
     * Gets the Collectors associated with this profiler.
     *
     * @return array An array of collectors
     */
    public function all()
    {
        return \$this->collectors;
    }

    /**
     * Sets the Collectors associated with this profiler.
     *
     * @param DataCollectorInterface[] \$collectors An array of collectors
     */
    public function set(array \$collectors = [])
    {
        \$this->collectors = [];
        foreach (\$collectors as \$collector) {
            \$this->add(\$collector);
        }
    }

    /**
     * Adds a Collector.
     */
    public function add(DataCollectorInterface \$collector)
    {
        \$this->collectors[\$collector->getName()] = \$collector;
    }

    /**
     * Returns true if a Collector for the given name exists.
     *
     * @param string \$name A collector name
     *
     * @return bool
     */
    public function has(\$name)
    {
        return isset(\$this->collectors[\$name]);
    }

    /**
     * Gets a Collector by name.
     *
     * @param string \$name A collector name
     *
     * @return DataCollectorInterface A DataCollectorInterface instance
     *
     * @throws \\InvalidArgumentException if the collector does not exist
     */
    public function get(\$name)
    {
        if (!isset(\$this->collectors[\$name])) {
            throw new \\InvalidArgumentException(sprintf('Collector \"%s\" does not exist.', \$name));
        }

        return \$this->collectors[\$name];
    }

    private function getTimestamp(?string \$value): ?int
    {
        if (null === \$value || '' === \$value) {
            return null;
        }

        try {
            \$value = new \\DateTime(is_numeric(\$value) ? '@'.\$value : \$value);
        } catch (\\Exception \$e) {
            return null;
        }

        return \$value->getTimestamp();
    }
}
", "vendor/symfony/http-kernel/Profiler/Profiler.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Profiler/Profiler.php");
    }
}
