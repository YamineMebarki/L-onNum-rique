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

/* vendor/symfony/cache-contracts/CacheTrait.php */
class __TwigTemplate_01acb686fb3348f0b67287bcea812d6ef485d7c4be36fe9b84bdf999b96b9647 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache-contracts/CacheTrait.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache-contracts/CacheTrait.php"));

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

use Psr\\Cache\\CacheItemPoolInterface;
use Psr\\Cache\\InvalidArgumentException;
use Psr\\Log\\LoggerInterface;

/**
 * An implementation of CacheInterface for PSR-6 CacheItemPoolInterface classes.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
trait CacheTrait
{
    /**
     * {@inheritdoc}
     */
    public function get(string \$key, callable \$callback, float \$beta = null, array &\$metadata = null)
    {
        return \$this->doGet(\$this, \$key, \$callback, \$beta, \$metadata);
    }

    /**
     * {@inheritdoc}
     */
    public function delete(string \$key): bool
    {
        return \$this->deleteItem(\$key);
    }

    private function doGet(CacheItemPoolInterface \$pool, string \$key, callable \$callback, ?float \$beta, array &\$metadata = null, LoggerInterface \$logger = null)
    {
        if (0 > \$beta = \$beta ?? 1.0) {
            throw new class(sprintf('Argument \"\$beta\" provided to \"%s::get()\" must be a positive number, %f given.', \\get_class(\$this), \$beta)) extends \\InvalidArgumentException implements InvalidArgumentException {
            };
        }

        \$item = \$pool->getItem(\$key);
        \$recompute = !\$item->isHit() || INF === \$beta;
        \$metadata = \$item instanceof ItemInterface ? \$item->getMetadata() : [];

        if (!\$recompute && \$metadata) {
            \$expiry = \$metadata[ItemInterface::METADATA_EXPIRY] ?? false;
            \$ctime = \$metadata[ItemInterface::METADATA_CTIME] ?? false;

            if (\$recompute = \$ctime && \$expiry && \$expiry <= (\$now = microtime(true)) - \$ctime / 1000 * \$beta * log(random_int(1, PHP_INT_MAX) / PHP_INT_MAX)) {
                // force applying defaultLifetime to expiry
                \$item->expiresAt(null);
                \$logger && \$logger->info('Item \"{key}\" elected for early recomputation {delta}s before its expiration', [
                    'key' => \$key,
                    'delta' => sprintf('%.1f', \$expiry - \$now),
                ]);
            }
        }

        if (\$recompute) {
            \$save = true;
            \$item->set(\$callback(\$item, \$save));
            if (\$save) {
                \$pool->save(\$item);
            }
        }

        return \$item->get();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/cache-contracts/CacheTrait.php";
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

use Psr\\Cache\\CacheItemPoolInterface;
use Psr\\Cache\\InvalidArgumentException;
use Psr\\Log\\LoggerInterface;

/**
 * An implementation of CacheInterface for PSR-6 CacheItemPoolInterface classes.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
trait CacheTrait
{
    /**
     * {@inheritdoc}
     */
    public function get(string \$key, callable \$callback, float \$beta = null, array &\$metadata = null)
    {
        return \$this->doGet(\$this, \$key, \$callback, \$beta, \$metadata);
    }

    /**
     * {@inheritdoc}
     */
    public function delete(string \$key): bool
    {
        return \$this->deleteItem(\$key);
    }

    private function doGet(CacheItemPoolInterface \$pool, string \$key, callable \$callback, ?float \$beta, array &\$metadata = null, LoggerInterface \$logger = null)
    {
        if (0 > \$beta = \$beta ?? 1.0) {
            throw new class(sprintf('Argument \"\$beta\" provided to \"%s::get()\" must be a positive number, %f given.', \\get_class(\$this), \$beta)) extends \\InvalidArgumentException implements InvalidArgumentException {
            };
        }

        \$item = \$pool->getItem(\$key);
        \$recompute = !\$item->isHit() || INF === \$beta;
        \$metadata = \$item instanceof ItemInterface ? \$item->getMetadata() : [];

        if (!\$recompute && \$metadata) {
            \$expiry = \$metadata[ItemInterface::METADATA_EXPIRY] ?? false;
            \$ctime = \$metadata[ItemInterface::METADATA_CTIME] ?? false;

            if (\$recompute = \$ctime && \$expiry && \$expiry <= (\$now = microtime(true)) - \$ctime / 1000 * \$beta * log(random_int(1, PHP_INT_MAX) / PHP_INT_MAX)) {
                // force applying defaultLifetime to expiry
                \$item->expiresAt(null);
                \$logger && \$logger->info('Item \"{key}\" elected for early recomputation {delta}s before its expiration', [
                    'key' => \$key,
                    'delta' => sprintf('%.1f', \$expiry - \$now),
                ]);
            }
        }

        if (\$recompute) {
            \$save = true;
            \$item->set(\$callback(\$item, \$save));
            if (\$save) {
                \$pool->save(\$item);
            }
        }

        return \$item->get();
    }
}
", "vendor/symfony/cache-contracts/CacheTrait.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache-contracts/CacheTrait.php");
    }
}
