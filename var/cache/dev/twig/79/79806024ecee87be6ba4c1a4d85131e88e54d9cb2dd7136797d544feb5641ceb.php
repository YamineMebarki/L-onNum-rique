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

/* vendor/symfony/cache/Traits/ApcuTrait.php */
class __TwigTemplate_7c0cc48c3fe57a9d51322f3a69d7f1f93cd5fdd3c94d279947626ad8b2950c99 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Traits/ApcuTrait.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Traits/ApcuTrait.php"));

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

use Symfony\\Component\\Cache\\CacheItem;
use Symfony\\Component\\Cache\\Exception\\CacheException;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
trait ApcuTrait
{
    public static function isSupported()
    {
        return \\function_exists('apcu_fetch') && filter_var(ini_get('apc.enabled'), FILTER_VALIDATE_BOOLEAN);
    }

    private function init(\$namespace, \$defaultLifetime, \$version)
    {
        if (!static::isSupported()) {
            throw new CacheException('APCu is not enabled');
        }
        if ('cli' === \\PHP_SAPI) {
            ini_set('apc.use_request_time', 0);
        }
        parent::__construct(\$namespace, \$defaultLifetime);

        if (null !== \$version) {
            CacheItem::validateKey(\$version);

            if (!apcu_exists(\$version.'@'.\$namespace)) {
                \$this->doClear(\$namespace);
                apcu_add(\$version.'@'.\$namespace, null);
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function doFetch(array \$ids)
    {
        \$unserializeCallbackHandler = ini_set('unserialize_callback_func', __CLASS__.'::handleUnserializeCallback');
        try {
            \$values = [];
            foreach (apcu_fetch(\$ids, \$ok) ?: [] as \$k => \$v) {
                if (null !== \$v || \$ok) {
                    \$values[\$k] = \$v;
                }
            }

            return \$values;
        } catch (\\Error \$e) {
            throw new \\ErrorException(\$e->getMessage(), \$e->getCode(), E_ERROR, \$e->getFile(), \$e->getLine());
        } finally {
            ini_set('unserialize_callback_func', \$unserializeCallbackHandler);
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function doHave(\$id)
    {
        return apcu_exists(\$id);
    }

    /**
     * {@inheritdoc}
     */
    protected function doClear(\$namespace)
    {
        return isset(\$namespace[0]) && class_exists('APCuIterator', false) && ('cli' !== \\PHP_SAPI || filter_var(ini_get('apc.enable_cli'), FILTER_VALIDATE_BOOLEAN))
            ? apcu_delete(new \\APCuIterator(sprintf('/^%s/', preg_quote(\$namespace, '/')), APC_ITER_KEY))
            : apcu_clear_cache();
    }

    /**
     * {@inheritdoc}
     */
    protected function doDelete(array \$ids)
    {
        foreach (\$ids as \$id) {
            apcu_delete(\$id);
        }

        return true;
    }

    /**
     * {@inheritdoc}
     */
    protected function doSave(array \$values, \$lifetime)
    {
        try {
            if (false === \$failures = apcu_store(\$values, null, \$lifetime)) {
                \$failures = \$values;
            }

            return array_keys(\$failures);
        } catch (\\Throwable \$e) {
            if (1 === \\count(\$values)) {
                // Workaround https://github.com/krakjoe/apcu/issues/170
                apcu_delete(key(\$values));
            }

            throw \$e;
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/cache/Traits/ApcuTrait.php";
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

use Symfony\\Component\\Cache\\CacheItem;
use Symfony\\Component\\Cache\\Exception\\CacheException;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
trait ApcuTrait
{
    public static function isSupported()
    {
        return \\function_exists('apcu_fetch') && filter_var(ini_get('apc.enabled'), FILTER_VALIDATE_BOOLEAN);
    }

    private function init(\$namespace, \$defaultLifetime, \$version)
    {
        if (!static::isSupported()) {
            throw new CacheException('APCu is not enabled');
        }
        if ('cli' === \\PHP_SAPI) {
            ini_set('apc.use_request_time', 0);
        }
        parent::__construct(\$namespace, \$defaultLifetime);

        if (null !== \$version) {
            CacheItem::validateKey(\$version);

            if (!apcu_exists(\$version.'@'.\$namespace)) {
                \$this->doClear(\$namespace);
                apcu_add(\$version.'@'.\$namespace, null);
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function doFetch(array \$ids)
    {
        \$unserializeCallbackHandler = ini_set('unserialize_callback_func', __CLASS__.'::handleUnserializeCallback');
        try {
            \$values = [];
            foreach (apcu_fetch(\$ids, \$ok) ?: [] as \$k => \$v) {
                if (null !== \$v || \$ok) {
                    \$values[\$k] = \$v;
                }
            }

            return \$values;
        } catch (\\Error \$e) {
            throw new \\ErrorException(\$e->getMessage(), \$e->getCode(), E_ERROR, \$e->getFile(), \$e->getLine());
        } finally {
            ini_set('unserialize_callback_func', \$unserializeCallbackHandler);
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function doHave(\$id)
    {
        return apcu_exists(\$id);
    }

    /**
     * {@inheritdoc}
     */
    protected function doClear(\$namespace)
    {
        return isset(\$namespace[0]) && class_exists('APCuIterator', false) && ('cli' !== \\PHP_SAPI || filter_var(ini_get('apc.enable_cli'), FILTER_VALIDATE_BOOLEAN))
            ? apcu_delete(new \\APCuIterator(sprintf('/^%s/', preg_quote(\$namespace, '/')), APC_ITER_KEY))
            : apcu_clear_cache();
    }

    /**
     * {@inheritdoc}
     */
    protected function doDelete(array \$ids)
    {
        foreach (\$ids as \$id) {
            apcu_delete(\$id);
        }

        return true;
    }

    /**
     * {@inheritdoc}
     */
    protected function doSave(array \$values, \$lifetime)
    {
        try {
            if (false === \$failures = apcu_store(\$values, null, \$lifetime)) {
                \$failures = \$values;
            }

            return array_keys(\$failures);
        } catch (\\Throwable \$e) {
            if (1 === \\count(\$values)) {
                // Workaround https://github.com/krakjoe/apcu/issues/170
                apcu_delete(key(\$values));
            }

            throw \$e;
        }
    }
}
", "vendor/symfony/cache/Traits/ApcuTrait.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache/Traits/ApcuTrait.php");
    }
}
