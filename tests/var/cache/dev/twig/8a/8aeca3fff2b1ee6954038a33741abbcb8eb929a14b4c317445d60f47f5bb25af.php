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

/* vendor/doctrine/cache/lib/Doctrine/Common/Cache/ZendDataCache.php */
class __TwigTemplate_84e910826781ea5e4460cf89b0bb08544458c6cc2aef6c9ad0faa9d314010439 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/cache/lib/Doctrine/Common/Cache/ZendDataCache.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/cache/lib/Doctrine/Common/Cache/ZendDataCache.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\Cache;

use function zend_shm_cache_clear;
use function zend_shm_cache_delete;
use function zend_shm_cache_fetch;
use function zend_shm_cache_store;

/**
 * Zend Data Cache cache driver.
 *
 * @link   www.doctrine-project.org
 */
class ZendDataCache extends CacheProvider
{
    /**
     * {@inheritdoc}
     */
    protected function doFetch(\$id)
    {
        return zend_shm_cache_fetch(\$id);
    }

    /**
     * {@inheritdoc}
     */
    protected function doContains(\$id)
    {
        return zend_shm_cache_fetch(\$id) !== false;
    }

    /**
     * {@inheritdoc}
     */
    protected function doSave(\$id, \$data, \$lifeTime = 0)
    {
        return zend_shm_cache_store(\$id, \$data, \$lifeTime);
    }

    /**
     * {@inheritdoc}
     */
    protected function doDelete(\$id)
    {
        return zend_shm_cache_delete(\$id);
    }

    /**
     * {@inheritdoc}
     */
    protected function doFlush()
    {
        \$namespace = \$this->getNamespace();
        if (empty(\$namespace)) {
            return zend_shm_cache_clear();
        }
        return zend_shm_cache_clear(\$namespace);
    }

    /**
     * {@inheritdoc}
     */
    protected function doGetStats()
    {
        return null;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/cache/lib/Doctrine/Common/Cache/ZendDataCache.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\Cache;

use function zend_shm_cache_clear;
use function zend_shm_cache_delete;
use function zend_shm_cache_fetch;
use function zend_shm_cache_store;

/**
 * Zend Data Cache cache driver.
 *
 * @link   www.doctrine-project.org
 */
class ZendDataCache extends CacheProvider
{
    /**
     * {@inheritdoc}
     */
    protected function doFetch(\$id)
    {
        return zend_shm_cache_fetch(\$id);
    }

    /**
     * {@inheritdoc}
     */
    protected function doContains(\$id)
    {
        return zend_shm_cache_fetch(\$id) !== false;
    }

    /**
     * {@inheritdoc}
     */
    protected function doSave(\$id, \$data, \$lifeTime = 0)
    {
        return zend_shm_cache_store(\$id, \$data, \$lifeTime);
    }

    /**
     * {@inheritdoc}
     */
    protected function doDelete(\$id)
    {
        return zend_shm_cache_delete(\$id);
    }

    /**
     * {@inheritdoc}
     */
    protected function doFlush()
    {
        \$namespace = \$this->getNamespace();
        if (empty(\$namespace)) {
            return zend_shm_cache_clear();
        }
        return zend_shm_cache_clear(\$namespace);
    }

    /**
     * {@inheritdoc}
     */
    protected function doGetStats()
    {
        return null;
    }
}
", "vendor/doctrine/cache/lib/Doctrine/Common/Cache/ZendDataCache.php", "/var/www/public/DevLaon/templates/vendor/doctrine/cache/lib/Doctrine/Common/Cache/ZendDataCache.php");
    }
}
