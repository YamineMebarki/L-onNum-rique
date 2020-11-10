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

/* vendor/symfony/cache-contracts/CacheInterface.php */
class __TwigTemplate_06651fee653ed32a400168ab51fbd4a843db3f1d8606d852bf803f3b8dfaea0b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache-contracts/CacheInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache-contracts/CacheInterface.php"));

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

namespace Symfony\\Contracts\\Cache;

use Psr\\Cache\\CacheItemInterface;
use Psr\\Cache\\InvalidArgumentException;

/**
 * Covers most simple to advanced caching needs.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
interface CacheInterface
{
    /**
     * Fetches a value from the pool or computes it if not found.
     *
     * On cache misses, a callback is called that should return the missing value.
     * This callback is given a PSR-6 CacheItemInterface instance corresponding to the
     * requested key, that could be used e.g. for expiration control. It could also
     * be an ItemInterface instance when its additional features are needed.
     *
     * @param string                     \$key       The key of the item to retrieve from the cache
     * @param callable|CallbackInterface \$callback  Should return the computed value for the given key/item
     * @param float|null                 \$beta      A float that, as it grows, controls the likeliness of triggering
     *                                              early expiration. 0 disables it, INF forces immediate expiration.
     *                                              The default (or providing null) is implementation dependent but should
     *                                              typically be 1.0, which should provide optimal stampede protection.
     *                                              See https://en.wikipedia.org/wiki/Cache_stampede#Probabilistic_early_expiration
     * @param array                      &\$metadata The metadata of the cached item {@see ItemInterface::getMetadata()}
     *
     * @return mixed The value corresponding to the provided key
     *
     * @throws InvalidArgumentException When \$key is not valid or when \$beta is negative
     */
    public function get(string \$key, callable \$callback, float \$beta = null, array &\$metadata = null);

    /**
     * Removes an item from the pool.
     *
     * @param string \$key The key to delete
     *
     * @throws InvalidArgumentException When \$key is not valid
     *
     * @return bool True if the item was successfully removed, false if there was any error
     */
    public function delete(string \$key): bool;
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/cache-contracts/CacheInterface.php";
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

namespace Symfony\\Contracts\\Cache;

use Psr\\Cache\\CacheItemInterface;
use Psr\\Cache\\InvalidArgumentException;

/**
 * Covers most simple to advanced caching needs.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
interface CacheInterface
{
    /**
     * Fetches a value from the pool or computes it if not found.
     *
     * On cache misses, a callback is called that should return the missing value.
     * This callback is given a PSR-6 CacheItemInterface instance corresponding to the
     * requested key, that could be used e.g. for expiration control. It could also
     * be an ItemInterface instance when its additional features are needed.
     *
     * @param string                     \$key       The key of the item to retrieve from the cache
     * @param callable|CallbackInterface \$callback  Should return the computed value for the given key/item
     * @param float|null                 \$beta      A float that, as it grows, controls the likeliness of triggering
     *                                              early expiration. 0 disables it, INF forces immediate expiration.
     *                                              The default (or providing null) is implementation dependent but should
     *                                              typically be 1.0, which should provide optimal stampede protection.
     *                                              See https://en.wikipedia.org/wiki/Cache_stampede#Probabilistic_early_expiration
     * @param array                      &\$metadata The metadata of the cached item {@see ItemInterface::getMetadata()}
     *
     * @return mixed The value corresponding to the provided key
     *
     * @throws InvalidArgumentException When \$key is not valid or when \$beta is negative
     */
    public function get(string \$key, callable \$callback, float \$beta = null, array &\$metadata = null);

    /**
     * Removes an item from the pool.
     *
     * @param string \$key The key to delete
     *
     * @throws InvalidArgumentException When \$key is not valid
     *
     * @return bool True if the item was successfully removed, false if there was any error
     */
    public function delete(string \$key): bool;
}
", "vendor/symfony/cache-contracts/CacheInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache-contracts/CacheInterface.php");
    }
}
