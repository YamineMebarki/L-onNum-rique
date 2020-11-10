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

/* vendor/symfony/cache/Traits/AbstractAdapterTrait.php */
class __TwigTemplate_babaf3875695bf566bf5b3f4fa5ce31fe09003842fc3fa368735ab16a7e10566 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Traits/AbstractAdapterTrait.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Traits/AbstractAdapterTrait.php"));

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

use Psr\\Cache\\CacheItemInterface;
use Symfony\\Component\\Cache\\CacheItem;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
trait AbstractAdapterTrait
{
    use AbstractTrait;

    /**
     * @var \\Closure needs to be set by class, signature is function(string <key>, mixed <value>, bool <isHit>)
     */
    private \$createCacheItem;

    /**
     * @var \\Closure needs to be set by class, signature is function(array <deferred>, string <namespace>, array <&expiredIds>)
     */
    private \$mergeByLifetime;

    /**
     * {@inheritdoc}
     */
    public function getItem(\$key)
    {
        if (\$this->deferred) {
            \$this->commit();
        }
        \$id = \$this->getId(\$key);

        \$f = \$this->createCacheItem;
        \$isHit = false;
        \$value = null;

        try {
            foreach (\$this->doFetch([\$id]) as \$value) {
                \$isHit = true;
            }
        } catch (\\Exception \$e) {
            CacheItem::log(\$this->logger, 'Failed to fetch key \"{key}\": '.\$e->getMessage(), ['key' => \$key, 'exception' => \$e]);
        }

        return \$f(\$key, \$value, \$isHit);
    }

    /**
     * {@inheritdoc}
     */
    public function getItems(array \$keys = [])
    {
        if (\$this->deferred) {
            \$this->commit();
        }
        \$ids = [];

        foreach (\$keys as \$key) {
            \$ids[] = \$this->getId(\$key);
        }
        try {
            \$items = \$this->doFetch(\$ids);
        } catch (\\Exception \$e) {
            CacheItem::log(\$this->logger, 'Failed to fetch items: '.\$e->getMessage(), ['keys' => \$keys, 'exception' => \$e]);
            \$items = [];
        }
        \$ids = array_combine(\$ids, \$keys);

        return \$this->generateItems(\$items, \$ids);
    }

    /**
     * {@inheritdoc}
     */
    public function save(CacheItemInterface \$item)
    {
        if (!\$item instanceof CacheItem) {
            return false;
        }
        \$this->deferred[\$item->getKey()] = \$item;

        return \$this->commit();
    }

    /**
     * {@inheritdoc}
     */
    public function saveDeferred(CacheItemInterface \$item)
    {
        if (!\$item instanceof CacheItem) {
            return false;
        }
        \$this->deferred[\$item->getKey()] = \$item;

        return true;
    }

    public function __destruct()
    {
        if (\$this->deferred) {
            \$this->commit();
        }
    }

    private function generateItems(\$items, &\$keys)
    {
        \$f = \$this->createCacheItem;

        try {
            foreach (\$items as \$id => \$value) {
                if (!isset(\$keys[\$id])) {
                    \$id = key(\$keys);
                }
                \$key = \$keys[\$id];
                unset(\$keys[\$id]);
                yield \$key => \$f(\$key, \$value, true);
            }
        } catch (\\Exception \$e) {
            CacheItem::log(\$this->logger, 'Failed to fetch items: '.\$e->getMessage(), ['keys' => array_values(\$keys), 'exception' => \$e]);
        }

        foreach (\$keys as \$key) {
            yield \$key => \$f(\$key, null, false);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/cache/Traits/AbstractAdapterTrait.php";
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

use Psr\\Cache\\CacheItemInterface;
use Symfony\\Component\\Cache\\CacheItem;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
trait AbstractAdapterTrait
{
    use AbstractTrait;

    /**
     * @var \\Closure needs to be set by class, signature is function(string <key>, mixed <value>, bool <isHit>)
     */
    private \$createCacheItem;

    /**
     * @var \\Closure needs to be set by class, signature is function(array <deferred>, string <namespace>, array <&expiredIds>)
     */
    private \$mergeByLifetime;

    /**
     * {@inheritdoc}
     */
    public function getItem(\$key)
    {
        if (\$this->deferred) {
            \$this->commit();
        }
        \$id = \$this->getId(\$key);

        \$f = \$this->createCacheItem;
        \$isHit = false;
        \$value = null;

        try {
            foreach (\$this->doFetch([\$id]) as \$value) {
                \$isHit = true;
            }
        } catch (\\Exception \$e) {
            CacheItem::log(\$this->logger, 'Failed to fetch key \"{key}\": '.\$e->getMessage(), ['key' => \$key, 'exception' => \$e]);
        }

        return \$f(\$key, \$value, \$isHit);
    }

    /**
     * {@inheritdoc}
     */
    public function getItems(array \$keys = [])
    {
        if (\$this->deferred) {
            \$this->commit();
        }
        \$ids = [];

        foreach (\$keys as \$key) {
            \$ids[] = \$this->getId(\$key);
        }
        try {
            \$items = \$this->doFetch(\$ids);
        } catch (\\Exception \$e) {
            CacheItem::log(\$this->logger, 'Failed to fetch items: '.\$e->getMessage(), ['keys' => \$keys, 'exception' => \$e]);
            \$items = [];
        }
        \$ids = array_combine(\$ids, \$keys);

        return \$this->generateItems(\$items, \$ids);
    }

    /**
     * {@inheritdoc}
     */
    public function save(CacheItemInterface \$item)
    {
        if (!\$item instanceof CacheItem) {
            return false;
        }
        \$this->deferred[\$item->getKey()] = \$item;

        return \$this->commit();
    }

    /**
     * {@inheritdoc}
     */
    public function saveDeferred(CacheItemInterface \$item)
    {
        if (!\$item instanceof CacheItem) {
            return false;
        }
        \$this->deferred[\$item->getKey()] = \$item;

        return true;
    }

    public function __destruct()
    {
        if (\$this->deferred) {
            \$this->commit();
        }
    }

    private function generateItems(\$items, &\$keys)
    {
        \$f = \$this->createCacheItem;

        try {
            foreach (\$items as \$id => \$value) {
                if (!isset(\$keys[\$id])) {
                    \$id = key(\$keys);
                }
                \$key = \$keys[\$id];
                unset(\$keys[\$id]);
                yield \$key => \$f(\$key, \$value, true);
            }
        } catch (\\Exception \$e) {
            CacheItem::log(\$this->logger, 'Failed to fetch items: '.\$e->getMessage(), ['keys' => array_values(\$keys), 'exception' => \$e]);
        }

        foreach (\$keys as \$key) {
            yield \$key => \$f(\$key, null, false);
        }
    }
}
", "vendor/symfony/cache/Traits/AbstractAdapterTrait.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache/Traits/AbstractAdapterTrait.php");
    }
}
