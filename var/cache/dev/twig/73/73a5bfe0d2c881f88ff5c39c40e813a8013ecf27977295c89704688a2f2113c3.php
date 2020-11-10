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

/* vendor/symfony/cache/Adapter/NullAdapter.php */
class __TwigTemplate_fc28d35b65a63ade7e23f3c61e84e8bac9862a2791602a9564eaf555490a1286 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Adapter/NullAdapter.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Adapter/NullAdapter.php"));

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

namespace Symfony\\Component\\Cache\\Adapter;

use Psr\\Cache\\CacheItemInterface;
use Symfony\\Component\\Cache\\CacheItem;
use Symfony\\Contracts\\Cache\\CacheInterface;

/**
 * @author Titouan Galopin <galopintitouan@gmail.com>
 */
class NullAdapter implements AdapterInterface, CacheInterface
{
    private \$createCacheItem;

    public function __construct()
    {
        \$this->createCacheItem = \\Closure::bind(
            function (\$key) {
                \$item = new CacheItem();
                \$item->key = \$key;
                \$item->isHit = false;

                return \$item;
            },
            \$this,
            CacheItem::class
        );
    }

    /**
     * {@inheritdoc}
     */
    public function get(string \$key, callable \$callback, float \$beta = null, array &\$metadata = null)
    {
        \$save = true;

        return \$callback((\$this->createCacheItem)(\$key), \$save);
    }

    /**
     * {@inheritdoc}
     */
    public function getItem(\$key)
    {
        \$f = \$this->createCacheItem;

        return \$f(\$key);
    }

    /**
     * {@inheritdoc}
     */
    public function getItems(array \$keys = [])
    {
        return \$this->generateItems(\$keys);
    }

    /**
     * {@inheritdoc}
     */
    public function hasItem(\$key)
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function deleteItem(\$key)
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function deleteItems(array \$keys)
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function save(CacheItemInterface \$item)
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function saveDeferred(CacheItemInterface \$item)
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function commit()
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function delete(string \$key): bool
    {
        return \$this->deleteItem(\$key);
    }

    private function generateItems(array \$keys)
    {
        \$f = \$this->createCacheItem;

        foreach (\$keys as \$key) {
            yield \$key => \$f(\$key);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/cache/Adapter/NullAdapter.php";
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

namespace Symfony\\Component\\Cache\\Adapter;

use Psr\\Cache\\CacheItemInterface;
use Symfony\\Component\\Cache\\CacheItem;
use Symfony\\Contracts\\Cache\\CacheInterface;

/**
 * @author Titouan Galopin <galopintitouan@gmail.com>
 */
class NullAdapter implements AdapterInterface, CacheInterface
{
    private \$createCacheItem;

    public function __construct()
    {
        \$this->createCacheItem = \\Closure::bind(
            function (\$key) {
                \$item = new CacheItem();
                \$item->key = \$key;
                \$item->isHit = false;

                return \$item;
            },
            \$this,
            CacheItem::class
        );
    }

    /**
     * {@inheritdoc}
     */
    public function get(string \$key, callable \$callback, float \$beta = null, array &\$metadata = null)
    {
        \$save = true;

        return \$callback((\$this->createCacheItem)(\$key), \$save);
    }

    /**
     * {@inheritdoc}
     */
    public function getItem(\$key)
    {
        \$f = \$this->createCacheItem;

        return \$f(\$key);
    }

    /**
     * {@inheritdoc}
     */
    public function getItems(array \$keys = [])
    {
        return \$this->generateItems(\$keys);
    }

    /**
     * {@inheritdoc}
     */
    public function hasItem(\$key)
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function deleteItem(\$key)
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function deleteItems(array \$keys)
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function save(CacheItemInterface \$item)
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function saveDeferred(CacheItemInterface \$item)
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function commit()
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function delete(string \$key): bool
    {
        return \$this->deleteItem(\$key);
    }

    private function generateItems(array \$keys)
    {
        \$f = \$this->createCacheItem;

        foreach (\$keys as \$key) {
            yield \$key => \$f(\$key);
        }
    }
}
", "vendor/symfony/cache/Adapter/NullAdapter.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache/Adapter/NullAdapter.php");
    }
}
