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

/* vendor/symfony/http-kernel/Profiler/Profile.php */
class __TwigTemplate_5faf1bd3ae6e65dbe7717ab58905e6027bfa243e973ef94a9714c37332e819f5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Profiler/Profile.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Profiler/Profile.php"));

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

use Symfony\\Component\\HttpKernel\\DataCollector\\DataCollectorInterface;

/**
 * Profile.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Profile
{
    private \$token;

    /**
     * @var DataCollectorInterface[]
     */
    private \$collectors = [];

    private \$ip;
    private \$method;
    private \$url;
    private \$time;
    private \$statusCode;

    /**
     * @var Profile
     */
    private \$parent;

    /**
     * @var Profile[]
     */
    private \$children = [];

    public function __construct(string \$token)
    {
        \$this->token = \$token;
    }

    /**
     * Sets the token.
     *
     * @param string \$token The token
     */
    public function setToken(\$token)
    {
        \$this->token = \$token;
    }

    /**
     * Gets the token.
     *
     * @return string The token
     */
    public function getToken()
    {
        return \$this->token;
    }

    /**
     * Sets the parent token.
     */
    public function setParent(self \$parent)
    {
        \$this->parent = \$parent;
    }

    /**
     * Returns the parent profile.
     *
     * @return self
     */
    public function getParent()
    {
        return \$this->parent;
    }

    /**
     * Returns the parent token.
     *
     * @return string|null The parent token
     */
    public function getParentToken()
    {
        return \$this->parent ? \$this->parent->getToken() : null;
    }

    /**
     * Returns the IP.
     *
     * @return string|null The IP
     */
    public function getIp()
    {
        return \$this->ip;
    }

    /**
     * Sets the IP.
     *
     * @param string \$ip
     */
    public function setIp(\$ip)
    {
        \$this->ip = \$ip;
    }

    /**
     * Returns the request method.
     *
     * @return string|null The request method
     */
    public function getMethod()
    {
        return \$this->method;
    }

    public function setMethod(\$method)
    {
        \$this->method = \$method;
    }

    /**
     * Returns the URL.
     *
     * @return string|null The URL
     */
    public function getUrl()
    {
        return \$this->url;
    }

    /**
     * @param string \$url
     */
    public function setUrl(\$url)
    {
        \$this->url = \$url;
    }

    /**
     * Returns the time.
     *
     * @return int The time
     */
    public function getTime()
    {
        if (null === \$this->time) {
            return 0;
        }

        return \$this->time;
    }

    /**
     * @param int \$time The time
     */
    public function setTime(\$time)
    {
        \$this->time = \$time;
    }

    /**
     * @param int \$statusCode
     */
    public function setStatusCode(\$statusCode)
    {
        \$this->statusCode = \$statusCode;
    }

    /**
     * @return int|null
     */
    public function getStatusCode()
    {
        return \$this->statusCode;
    }

    /**
     * Finds children profilers.
     *
     * @return self[]
     */
    public function getChildren()
    {
        return \$this->children;
    }

    /**
     * Sets children profiler.
     *
     * @param Profile[] \$children
     */
    public function setChildren(array \$children)
    {
        \$this->children = [];
        foreach (\$children as \$child) {
            \$this->addChild(\$child);
        }
    }

    /**
     * Adds the child token.
     */
    public function addChild(self \$child)
    {
        \$this->children[] = \$child;
        \$child->setParent(\$this);
    }

    public function getChildByToken(string \$token): ?self
    {
        foreach (\$this->children as \$child) {
            if (\$token === \$child->getToken()) {
                return \$child;
            }
        }

        return null;
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
    public function getCollector(\$name)
    {
        if (!isset(\$this->collectors[\$name])) {
            throw new \\InvalidArgumentException(sprintf('Collector \"%s\" does not exist.', \$name));
        }

        return \$this->collectors[\$name];
    }

    /**
     * Gets the Collectors associated with this profile.
     *
     * @return DataCollectorInterface[]
     */
    public function getCollectors()
    {
        return \$this->collectors;
    }

    /**
     * Sets the Collectors associated with this profile.
     *
     * @param DataCollectorInterface[] \$collectors
     */
    public function setCollectors(array \$collectors)
    {
        \$this->collectors = [];
        foreach (\$collectors as \$collector) {
            \$this->addCollector(\$collector);
        }
    }

    /**
     * Adds a Collector.
     */
    public function addCollector(DataCollectorInterface \$collector)
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
    public function hasCollector(\$name)
    {
        return isset(\$this->collectors[\$name]);
    }

    public function __sleep()
    {
        return ['token', 'parent', 'children', 'collectors', 'ip', 'method', 'url', 'time', 'statusCode'];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Profiler/Profile.php";
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

use Symfony\\Component\\HttpKernel\\DataCollector\\DataCollectorInterface;

/**
 * Profile.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Profile
{
    private \$token;

    /**
     * @var DataCollectorInterface[]
     */
    private \$collectors = [];

    private \$ip;
    private \$method;
    private \$url;
    private \$time;
    private \$statusCode;

    /**
     * @var Profile
     */
    private \$parent;

    /**
     * @var Profile[]
     */
    private \$children = [];

    public function __construct(string \$token)
    {
        \$this->token = \$token;
    }

    /**
     * Sets the token.
     *
     * @param string \$token The token
     */
    public function setToken(\$token)
    {
        \$this->token = \$token;
    }

    /**
     * Gets the token.
     *
     * @return string The token
     */
    public function getToken()
    {
        return \$this->token;
    }

    /**
     * Sets the parent token.
     */
    public function setParent(self \$parent)
    {
        \$this->parent = \$parent;
    }

    /**
     * Returns the parent profile.
     *
     * @return self
     */
    public function getParent()
    {
        return \$this->parent;
    }

    /**
     * Returns the parent token.
     *
     * @return string|null The parent token
     */
    public function getParentToken()
    {
        return \$this->parent ? \$this->parent->getToken() : null;
    }

    /**
     * Returns the IP.
     *
     * @return string|null The IP
     */
    public function getIp()
    {
        return \$this->ip;
    }

    /**
     * Sets the IP.
     *
     * @param string \$ip
     */
    public function setIp(\$ip)
    {
        \$this->ip = \$ip;
    }

    /**
     * Returns the request method.
     *
     * @return string|null The request method
     */
    public function getMethod()
    {
        return \$this->method;
    }

    public function setMethod(\$method)
    {
        \$this->method = \$method;
    }

    /**
     * Returns the URL.
     *
     * @return string|null The URL
     */
    public function getUrl()
    {
        return \$this->url;
    }

    /**
     * @param string \$url
     */
    public function setUrl(\$url)
    {
        \$this->url = \$url;
    }

    /**
     * Returns the time.
     *
     * @return int The time
     */
    public function getTime()
    {
        if (null === \$this->time) {
            return 0;
        }

        return \$this->time;
    }

    /**
     * @param int \$time The time
     */
    public function setTime(\$time)
    {
        \$this->time = \$time;
    }

    /**
     * @param int \$statusCode
     */
    public function setStatusCode(\$statusCode)
    {
        \$this->statusCode = \$statusCode;
    }

    /**
     * @return int|null
     */
    public function getStatusCode()
    {
        return \$this->statusCode;
    }

    /**
     * Finds children profilers.
     *
     * @return self[]
     */
    public function getChildren()
    {
        return \$this->children;
    }

    /**
     * Sets children profiler.
     *
     * @param Profile[] \$children
     */
    public function setChildren(array \$children)
    {
        \$this->children = [];
        foreach (\$children as \$child) {
            \$this->addChild(\$child);
        }
    }

    /**
     * Adds the child token.
     */
    public function addChild(self \$child)
    {
        \$this->children[] = \$child;
        \$child->setParent(\$this);
    }

    public function getChildByToken(string \$token): ?self
    {
        foreach (\$this->children as \$child) {
            if (\$token === \$child->getToken()) {
                return \$child;
            }
        }

        return null;
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
    public function getCollector(\$name)
    {
        if (!isset(\$this->collectors[\$name])) {
            throw new \\InvalidArgumentException(sprintf('Collector \"%s\" does not exist.', \$name));
        }

        return \$this->collectors[\$name];
    }

    /**
     * Gets the Collectors associated with this profile.
     *
     * @return DataCollectorInterface[]
     */
    public function getCollectors()
    {
        return \$this->collectors;
    }

    /**
     * Sets the Collectors associated with this profile.
     *
     * @param DataCollectorInterface[] \$collectors
     */
    public function setCollectors(array \$collectors)
    {
        \$this->collectors = [];
        foreach (\$collectors as \$collector) {
            \$this->addCollector(\$collector);
        }
    }

    /**
     * Adds a Collector.
     */
    public function addCollector(DataCollectorInterface \$collector)
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
    public function hasCollector(\$name)
    {
        return isset(\$this->collectors[\$name]);
    }

    public function __sleep()
    {
        return ['token', 'parent', 'children', 'collectors', 'ip', 'method', 'url', 'time', 'statusCode'];
    }
}
", "vendor/symfony/http-kernel/Profiler/Profile.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Profiler/Profile.php");
    }
}
