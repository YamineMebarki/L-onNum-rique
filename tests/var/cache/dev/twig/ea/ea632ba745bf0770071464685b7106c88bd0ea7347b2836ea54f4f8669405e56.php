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

/* vendor/symfony/cache/Traits/ArrayTrait.php */
class __TwigTemplate_1a965f7792617b75002cbbf2800d52353710ae84f49dc59a023c3a170f8532f1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Traits/ArrayTrait.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Traits/ArrayTrait.php"));

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

use Psr\\Log\\LoggerAwareTrait;
use Symfony\\Component\\Cache\\CacheItem;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
trait ArrayTrait
{
    use LoggerAwareTrait;

    private \$storeSerialized;
    private \$values = [];
    private \$expiries = [];

    /**
     * Returns all cached values, with cache miss as null.
     *
     * @return array
     */
    public function getValues()
    {
        if (!\$this->storeSerialized) {
            return \$this->values;
        }

        \$values = \$this->values;
        foreach (\$values as \$k => \$v) {
            if (null === \$v || 'N;' === \$v) {
                continue;
            }
            if (!\\is_string(\$v) || !isset(\$v[2]) || ':' !== \$v[1]) {
                \$values[\$k] = serialize(\$v);
            }
        }

        return \$values;
    }

    /**
     * {@inheritdoc}
     */
    public function hasItem(\$key)
    {
        if (\\is_string(\$key) && isset(\$this->expiries[\$key]) && \$this->expiries[\$key] > microtime(true)) {
            return true;
        }
        CacheItem::validateKey(\$key);

        return isset(\$this->expiries[\$key]) && !\$this->deleteItem(\$key);
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        \$this->values = \$this->expiries = [];

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function deleteItem(\$key)
    {
        if (!\\is_string(\$key) || !isset(\$this->expiries[\$key])) {
            CacheItem::validateKey(\$key);
        }
        unset(\$this->values[\$key], \$this->expiries[\$key]);

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function reset()
    {
        \$this->clear();
    }

    private function generateItems(array \$keys, \$now, \$f)
    {
        foreach (\$keys as \$i => \$key) {
            if (!\$isHit = isset(\$this->expiries[\$key]) && (\$this->expiries[\$key] > \$now || !\$this->deleteItem(\$key))) {
                \$this->values[\$key] = \$value = null;
            } else {
                \$value = \$this->storeSerialized ? \$this->unfreeze(\$key, \$isHit) : \$this->values[\$key];
            }
            unset(\$keys[\$i]);

            yield \$key => \$f(\$key, \$value, \$isHit);
        }

        foreach (\$keys as \$key) {
            yield \$key => \$f(\$key, null, false);
        }
    }

    private function freeze(\$value, \$key)
    {
        if (null === \$value) {
            return 'N;';
        }
        if (\\is_string(\$value)) {
            // Serialize strings if they could be confused with serialized objects or arrays
            if ('N;' === \$value || (isset(\$value[2]) && ':' === \$value[1])) {
                return serialize(\$value);
            }
        } elseif (!is_scalar(\$value)) {
            try {
                \$serialized = serialize(\$value);
            } catch (\\Exception \$e) {
                \$type = \\is_object(\$value) ? \\get_class(\$value) : \\gettype(\$value);
                \$message = sprintf('Failed to save key \"{key}\" of type %s: %s', \$type, \$e->getMessage());
                CacheItem::log(\$this->logger, \$message, ['key' => \$key, 'exception' => \$e]);

                return null;
            }
            // Keep value serialized if it contains any objects or any internal references
            if ('C' === \$serialized[0] || 'O' === \$serialized[0] || preg_match('/;[OCRr]:[1-9]/', \$serialized)) {
                return \$serialized;
            }
        }

        return \$value;
    }

    private function unfreeze(string \$key, bool &\$isHit)
    {
        if ('N;' === \$value = \$this->values[\$key]) {
            return null;
        }
        if (\\is_string(\$value) && isset(\$value[2]) && ':' === \$value[1]) {
            try {
                \$value = unserialize(\$value);
            } catch (\\Exception \$e) {
                CacheItem::log(\$this->logger, 'Failed to unserialize key \"{key}\": '.\$e->getMessage(), ['key' => \$key, 'exception' => \$e]);
                \$value = false;
            }
            if (false === \$value) {
                \$this->values[\$key] = \$value = null;
                \$isHit = false;
            }
        }

        return \$value;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/cache/Traits/ArrayTrait.php";
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

use Psr\\Log\\LoggerAwareTrait;
use Symfony\\Component\\Cache\\CacheItem;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
trait ArrayTrait
{
    use LoggerAwareTrait;

    private \$storeSerialized;
    private \$values = [];
    private \$expiries = [];

    /**
     * Returns all cached values, with cache miss as null.
     *
     * @return array
     */
    public function getValues()
    {
        if (!\$this->storeSerialized) {
            return \$this->values;
        }

        \$values = \$this->values;
        foreach (\$values as \$k => \$v) {
            if (null === \$v || 'N;' === \$v) {
                continue;
            }
            if (!\\is_string(\$v) || !isset(\$v[2]) || ':' !== \$v[1]) {
                \$values[\$k] = serialize(\$v);
            }
        }

        return \$values;
    }

    /**
     * {@inheritdoc}
     */
    public function hasItem(\$key)
    {
        if (\\is_string(\$key) && isset(\$this->expiries[\$key]) && \$this->expiries[\$key] > microtime(true)) {
            return true;
        }
        CacheItem::validateKey(\$key);

        return isset(\$this->expiries[\$key]) && !\$this->deleteItem(\$key);
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        \$this->values = \$this->expiries = [];

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function deleteItem(\$key)
    {
        if (!\\is_string(\$key) || !isset(\$this->expiries[\$key])) {
            CacheItem::validateKey(\$key);
        }
        unset(\$this->values[\$key], \$this->expiries[\$key]);

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function reset()
    {
        \$this->clear();
    }

    private function generateItems(array \$keys, \$now, \$f)
    {
        foreach (\$keys as \$i => \$key) {
            if (!\$isHit = isset(\$this->expiries[\$key]) && (\$this->expiries[\$key] > \$now || !\$this->deleteItem(\$key))) {
                \$this->values[\$key] = \$value = null;
            } else {
                \$value = \$this->storeSerialized ? \$this->unfreeze(\$key, \$isHit) : \$this->values[\$key];
            }
            unset(\$keys[\$i]);

            yield \$key => \$f(\$key, \$value, \$isHit);
        }

        foreach (\$keys as \$key) {
            yield \$key => \$f(\$key, null, false);
        }
    }

    private function freeze(\$value, \$key)
    {
        if (null === \$value) {
            return 'N;';
        }
        if (\\is_string(\$value)) {
            // Serialize strings if they could be confused with serialized objects or arrays
            if ('N;' === \$value || (isset(\$value[2]) && ':' === \$value[1])) {
                return serialize(\$value);
            }
        } elseif (!is_scalar(\$value)) {
            try {
                \$serialized = serialize(\$value);
            } catch (\\Exception \$e) {
                \$type = \\is_object(\$value) ? \\get_class(\$value) : \\gettype(\$value);
                \$message = sprintf('Failed to save key \"{key}\" of type %s: %s', \$type, \$e->getMessage());
                CacheItem::log(\$this->logger, \$message, ['key' => \$key, 'exception' => \$e]);

                return null;
            }
            // Keep value serialized if it contains any objects or any internal references
            if ('C' === \$serialized[0] || 'O' === \$serialized[0] || preg_match('/;[OCRr]:[1-9]/', \$serialized)) {
                return \$serialized;
            }
        }

        return \$value;
    }

    private function unfreeze(string \$key, bool &\$isHit)
    {
        if ('N;' === \$value = \$this->values[\$key]) {
            return null;
        }
        if (\\is_string(\$value) && isset(\$value[2]) && ':' === \$value[1]) {
            try {
                \$value = unserialize(\$value);
            } catch (\\Exception \$e) {
                CacheItem::log(\$this->logger, 'Failed to unserialize key \"{key}\": '.\$e->getMessage(), ['key' => \$key, 'exception' => \$e]);
                \$value = false;
            }
            if (false === \$value) {
                \$this->values[\$key] = \$value = null;
                \$isHit = false;
            }
        }

        return \$value;
    }
}
", "vendor/symfony/cache/Traits/ArrayTrait.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache/Traits/ArrayTrait.php");
    }
}
