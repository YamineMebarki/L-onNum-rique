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

/* vendor/symfony/cache/Adapter/Psr16Adapter.php */
class __TwigTemplate_06b8171db192f8fdbd1e6c458b732dfe769faa9d21ec932024ea29b91fdb354b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Adapter/Psr16Adapter.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Adapter/Psr16Adapter.php"));

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

use Psr\\SimpleCache\\CacheInterface;
use Symfony\\Component\\Cache\\PruneableInterface;
use Symfony\\Component\\Cache\\ResettableInterface;
use Symfony\\Component\\Cache\\Traits\\ProxyTrait;

/**
 * Turns a PSR-16 cache into a PSR-6 one.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class Psr16Adapter extends AbstractAdapter implements PruneableInterface, ResettableInterface
{
    /**
     * @internal
     */
    protected const NS_SEPARATOR = '_';

    use ProxyTrait;

    private \$miss;

    public function __construct(CacheInterface \$pool, string \$namespace = '', int \$defaultLifetime = 0)
    {
        parent::__construct(\$namespace, \$defaultLifetime);

        \$this->pool = \$pool;
        \$this->miss = new \\stdClass();
    }

    /**
     * {@inheritdoc}
     */
    protected function doFetch(array \$ids)
    {
        foreach (\$this->pool->getMultiple(\$ids, \$this->miss) as \$key => \$value) {
            if (\$this->miss !== \$value) {
                yield \$key => \$value;
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function doHave(\$id)
    {
        return \$this->pool->has(\$id);
    }

    /**
     * {@inheritdoc}
     */
    protected function doClear(\$namespace)
    {
        return \$this->pool->clear();
    }

    /**
     * {@inheritdoc}
     */
    protected function doDelete(array \$ids)
    {
        return \$this->pool->deleteMultiple(\$ids);
    }

    /**
     * {@inheritdoc}
     */
    protected function doSave(array \$values, \$lifetime)
    {
        return \$this->pool->setMultiple(\$values, 0 === \$lifetime ? null : \$lifetime);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/cache/Adapter/Psr16Adapter.php";
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

use Psr\\SimpleCache\\CacheInterface;
use Symfony\\Component\\Cache\\PruneableInterface;
use Symfony\\Component\\Cache\\ResettableInterface;
use Symfony\\Component\\Cache\\Traits\\ProxyTrait;

/**
 * Turns a PSR-16 cache into a PSR-6 one.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class Psr16Adapter extends AbstractAdapter implements PruneableInterface, ResettableInterface
{
    /**
     * @internal
     */
    protected const NS_SEPARATOR = '_';

    use ProxyTrait;

    private \$miss;

    public function __construct(CacheInterface \$pool, string \$namespace = '', int \$defaultLifetime = 0)
    {
        parent::__construct(\$namespace, \$defaultLifetime);

        \$this->pool = \$pool;
        \$this->miss = new \\stdClass();
    }

    /**
     * {@inheritdoc}
     */
    protected function doFetch(array \$ids)
    {
        foreach (\$this->pool->getMultiple(\$ids, \$this->miss) as \$key => \$value) {
            if (\$this->miss !== \$value) {
                yield \$key => \$value;
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function doHave(\$id)
    {
        return \$this->pool->has(\$id);
    }

    /**
     * {@inheritdoc}
     */
    protected function doClear(\$namespace)
    {
        return \$this->pool->clear();
    }

    /**
     * {@inheritdoc}
     */
    protected function doDelete(array \$ids)
    {
        return \$this->pool->deleteMultiple(\$ids);
    }

    /**
     * {@inheritdoc}
     */
    protected function doSave(array \$values, \$lifetime)
    {
        return \$this->pool->setMultiple(\$values, 0 === \$lifetime ? null : \$lifetime);
    }
}
", "vendor/symfony/cache/Adapter/Psr16Adapter.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache/Adapter/Psr16Adapter.php");
    }
}
