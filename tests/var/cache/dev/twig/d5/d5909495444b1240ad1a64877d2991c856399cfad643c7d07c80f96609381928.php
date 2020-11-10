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

/* vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Logging/CacheLoggerChain.php */
class __TwigTemplate_27a7876554ed3e14c19b9993cb6487df0286917f9afe03ac406b67135e421e70 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Logging/CacheLoggerChain.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Logging/CacheLoggerChain.php"));

        // line 1
        echo "<?php

/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * \"AS IS\" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license. For more information, see
 * <http://www.doctrine-project.org>.
 */

namespace Doctrine\\ORM\\Cache\\Logging;

use Doctrine\\ORM\\Cache\\CollectionCacheKey;
use Doctrine\\ORM\\Cache\\EntityCacheKey;
use Doctrine\\ORM\\Cache\\QueryCacheKey;

/**
 * Cache logger chain
 *
 * @since   2.5
 * @author  Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
class CacheLoggerChain implements CacheLogger
{
    /**
     * @var array<\\Doctrine\\ORM\\Cache\\Logging\\CacheLogger>
     */
    private \$loggers = [];

    /**
     * @param string                                  \$name
     * @param \\Doctrine\\ORM\\Cache\\Logging\\CacheLogger \$logger
     */
    public function setLogger(\$name, CacheLogger \$logger)
    {
        \$this->loggers[\$name] = \$logger;
    }

    /**
     * @param string \$name
     *
     * @return \\Doctrine\\ORM\\Cache\\Logging\\CacheLogger|null
     */
    public function getLogger(\$name)
    {
        return isset(\$this->loggers[\$name]) ? \$this->loggers[\$name] : null;
    }

    /**
     * @return array<\\Doctrine\\ORM\\Cache\\Logging\\CacheLogger>
     */
    public function getLoggers()
    {
        return \$this->loggers;
    }

    /**
     * {@inheritdoc}
     */
    public function collectionCacheHit(\$regionName, CollectionCacheKey \$key)
    {
        foreach (\$this->loggers as \$logger) {
            \$logger->collectionCacheHit(\$regionName, \$key);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function collectionCacheMiss(\$regionName, CollectionCacheKey \$key)
    {
        foreach (\$this->loggers as \$logger) {
            \$logger->collectionCacheMiss(\$regionName, \$key);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function collectionCachePut(\$regionName, CollectionCacheKey \$key)
    {
        foreach (\$this->loggers as \$logger) {
            \$logger->collectionCachePut(\$regionName, \$key);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function entityCacheHit(\$regionName, EntityCacheKey \$key)
    {
        foreach (\$this->loggers as \$logger) {
            \$logger->entityCacheHit(\$regionName, \$key);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function entityCacheMiss(\$regionName, EntityCacheKey \$key)
    {
        foreach (\$this->loggers as \$logger) {
            \$logger->entityCacheMiss(\$regionName, \$key);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function entityCachePut(\$regionName, EntityCacheKey \$key)
    {
        foreach (\$this->loggers as \$logger) {
            \$logger->entityCachePut(\$regionName, \$key);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function queryCacheHit(\$regionName, QueryCacheKey \$key)
    {
        foreach (\$this->loggers as \$logger) {
            \$logger->queryCacheHit(\$regionName, \$key);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function queryCacheMiss(\$regionName, QueryCacheKey \$key)
    {
        foreach (\$this->loggers as \$logger) {
            \$logger->queryCacheMiss(\$regionName, \$key);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function queryCachePut(\$regionName, QueryCacheKey \$key)
    {
        foreach (\$this->loggers as \$logger) {
            \$logger->queryCachePut(\$regionName, \$key);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Logging/CacheLoggerChain.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * \"AS IS\" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license. For more information, see
 * <http://www.doctrine-project.org>.
 */

namespace Doctrine\\ORM\\Cache\\Logging;

use Doctrine\\ORM\\Cache\\CollectionCacheKey;
use Doctrine\\ORM\\Cache\\EntityCacheKey;
use Doctrine\\ORM\\Cache\\QueryCacheKey;

/**
 * Cache logger chain
 *
 * @since   2.5
 * @author  Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
class CacheLoggerChain implements CacheLogger
{
    /**
     * @var array<\\Doctrine\\ORM\\Cache\\Logging\\CacheLogger>
     */
    private \$loggers = [];

    /**
     * @param string                                  \$name
     * @param \\Doctrine\\ORM\\Cache\\Logging\\CacheLogger \$logger
     */
    public function setLogger(\$name, CacheLogger \$logger)
    {
        \$this->loggers[\$name] = \$logger;
    }

    /**
     * @param string \$name
     *
     * @return \\Doctrine\\ORM\\Cache\\Logging\\CacheLogger|null
     */
    public function getLogger(\$name)
    {
        return isset(\$this->loggers[\$name]) ? \$this->loggers[\$name] : null;
    }

    /**
     * @return array<\\Doctrine\\ORM\\Cache\\Logging\\CacheLogger>
     */
    public function getLoggers()
    {
        return \$this->loggers;
    }

    /**
     * {@inheritdoc}
     */
    public function collectionCacheHit(\$regionName, CollectionCacheKey \$key)
    {
        foreach (\$this->loggers as \$logger) {
            \$logger->collectionCacheHit(\$regionName, \$key);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function collectionCacheMiss(\$regionName, CollectionCacheKey \$key)
    {
        foreach (\$this->loggers as \$logger) {
            \$logger->collectionCacheMiss(\$regionName, \$key);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function collectionCachePut(\$regionName, CollectionCacheKey \$key)
    {
        foreach (\$this->loggers as \$logger) {
            \$logger->collectionCachePut(\$regionName, \$key);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function entityCacheHit(\$regionName, EntityCacheKey \$key)
    {
        foreach (\$this->loggers as \$logger) {
            \$logger->entityCacheHit(\$regionName, \$key);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function entityCacheMiss(\$regionName, EntityCacheKey \$key)
    {
        foreach (\$this->loggers as \$logger) {
            \$logger->entityCacheMiss(\$regionName, \$key);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function entityCachePut(\$regionName, EntityCacheKey \$key)
    {
        foreach (\$this->loggers as \$logger) {
            \$logger->entityCachePut(\$regionName, \$key);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function queryCacheHit(\$regionName, QueryCacheKey \$key)
    {
        foreach (\$this->loggers as \$logger) {
            \$logger->queryCacheHit(\$regionName, \$key);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function queryCacheMiss(\$regionName, QueryCacheKey \$key)
    {
        foreach (\$this->loggers as \$logger) {
            \$logger->queryCacheMiss(\$regionName, \$key);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function queryCachePut(\$regionName, QueryCacheKey \$key)
    {
        foreach (\$this->loggers as \$logger) {
            \$logger->queryCachePut(\$regionName, \$key);
        }
    }
}
", "vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Logging/CacheLoggerChain.php", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Logging/CacheLoggerChain.php");
    }
}
