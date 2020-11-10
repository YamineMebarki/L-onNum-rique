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

/* vendor/symfony/cache/Simple/RedisCache.php */
class __TwigTemplate_6292c49b516f614c5d65fcb59b44fe1aa71e370619adf5d9147974cd3891902c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Simple/RedisCache.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Simple/RedisCache.php"));

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

namespace Symfony\\Component\\Cache\\Simple;

use Symfony\\Component\\Cache\\Adapter\\RedisAdapter;
use Symfony\\Component\\Cache\\Marshaller\\MarshallerInterface;
use Symfony\\Component\\Cache\\Traits\\RedisTrait;
use Symfony\\Contracts\\Cache\\CacheInterface;

@trigger_error(sprintf('The \"%s\" class is deprecated since Symfony 4.3, use \"%s\" and type-hint for \"%s\" instead.', RedisCache::class, RedisAdapter::class, CacheInterface::class), E_USER_DEPRECATED);

/**
 * @deprecated since Symfony 4.3, use RedisAdapter and type-hint for CacheInterface instead.
 */
class RedisCache extends AbstractCache
{
    use RedisTrait;

    /**
     * @param \\Redis|\\RedisArray|\\RedisCluster|\\Predis\\ClientInterface \$redisClient
     */
    public function __construct(\$redisClient, string \$namespace = '', int \$defaultLifetime = 0, MarshallerInterface \$marshaller = null)
    {
        \$this->init(\$redisClient, \$namespace, \$defaultLifetime, \$marshaller);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/cache/Simple/RedisCache.php";
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

namespace Symfony\\Component\\Cache\\Simple;

use Symfony\\Component\\Cache\\Adapter\\RedisAdapter;
use Symfony\\Component\\Cache\\Marshaller\\MarshallerInterface;
use Symfony\\Component\\Cache\\Traits\\RedisTrait;
use Symfony\\Contracts\\Cache\\CacheInterface;

@trigger_error(sprintf('The \"%s\" class is deprecated since Symfony 4.3, use \"%s\" and type-hint for \"%s\" instead.', RedisCache::class, RedisAdapter::class, CacheInterface::class), E_USER_DEPRECATED);

/**
 * @deprecated since Symfony 4.3, use RedisAdapter and type-hint for CacheInterface instead.
 */
class RedisCache extends AbstractCache
{
    use RedisTrait;

    /**
     * @param \\Redis|\\RedisArray|\\RedisCluster|\\Predis\\ClientInterface \$redisClient
     */
    public function __construct(\$redisClient, string \$namespace = '', int \$defaultLifetime = 0, MarshallerInterface \$marshaller = null)
    {
        \$this->init(\$redisClient, \$namespace, \$defaultLifetime, \$marshaller);
    }
}
", "vendor/symfony/cache/Simple/RedisCache.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache/Simple/RedisCache.php");
    }
}
