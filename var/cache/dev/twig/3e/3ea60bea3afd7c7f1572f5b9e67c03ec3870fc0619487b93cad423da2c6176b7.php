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

/* vendor/doctrine/cache/lib/Doctrine/Common/Cache/ArrayCache.php */
class __TwigTemplate_12c46774113beaf533de3132a69a0828719ffbe5c2f2cddd22fe51bd5fa1d9a4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/cache/lib/Doctrine/Common/Cache/ArrayCache.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/cache/lib/Doctrine/Common/Cache/ArrayCache.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\Cache;

use function time;

/**
 * Array cache driver.
 *
 * @link   www.doctrine-project.org
 */
class ArrayCache extends CacheProvider
{
    /** @var array[] \$data each element being a tuple of [\$data, \$expiration], where the expiration is int|bool */
    private \$data = [];

    /** @var int */
    private \$hitsCount = 0;

    /** @var int */
    private \$missesCount = 0;

    /** @var int */
    private \$upTime;

    /**
     * {@inheritdoc}
     */
    public function __construct()
    {
        \$this->upTime = time();
    }

    /**
     * {@inheritdoc}
     */
    protected function doFetch(\$id)
    {
        if (! \$this->doContains(\$id)) {
            \$this->missesCount += 1;

            return false;
        }

        \$this->hitsCount += 1;

        return \$this->data[\$id][0];
    }

    /**
     * {@inheritdoc}
     */
    protected function doContains(\$id)
    {
        if (! isset(\$this->data[\$id])) {
            return false;
        }

        \$expiration = \$this->data[\$id][1];

        if (\$expiration && \$expiration < time()) {
            \$this->doDelete(\$id);

            return false;
        }

        return true;
    }

    /**
     * {@inheritdoc}
     */
    protected function doSave(\$id, \$data, \$lifeTime = 0)
    {
        \$this->data[\$id] = [\$data, \$lifeTime ? time() + \$lifeTime : false];

        return true;
    }

    /**
     * {@inheritdoc}
     */
    protected function doDelete(\$id)
    {
        unset(\$this->data[\$id]);

        return true;
    }

    /**
     * {@inheritdoc}
     */
    protected function doFlush()
    {
        \$this->data = [];

        return true;
    }

    /**
     * {@inheritdoc}
     */
    protected function doGetStats()
    {
        return [
            Cache::STATS_HITS             => \$this->hitsCount,
            Cache::STATS_MISSES           => \$this->missesCount,
            Cache::STATS_UPTIME           => \$this->upTime,
            Cache::STATS_MEMORY_USAGE     => null,
            Cache::STATS_MEMORY_AVAILABLE => null,
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/cache/lib/Doctrine/Common/Cache/ArrayCache.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\Cache;

use function time;

/**
 * Array cache driver.
 *
 * @link   www.doctrine-project.org
 */
class ArrayCache extends CacheProvider
{
    /** @var array[] \$data each element being a tuple of [\$data, \$expiration], where the expiration is int|bool */
    private \$data = [];

    /** @var int */
    private \$hitsCount = 0;

    /** @var int */
    private \$missesCount = 0;

    /** @var int */
    private \$upTime;

    /**
     * {@inheritdoc}
     */
    public function __construct()
    {
        \$this->upTime = time();
    }

    /**
     * {@inheritdoc}
     */
    protected function doFetch(\$id)
    {
        if (! \$this->doContains(\$id)) {
            \$this->missesCount += 1;

            return false;
        }

        \$this->hitsCount += 1;

        return \$this->data[\$id][0];
    }

    /**
     * {@inheritdoc}
     */
    protected function doContains(\$id)
    {
        if (! isset(\$this->data[\$id])) {
            return false;
        }

        \$expiration = \$this->data[\$id][1];

        if (\$expiration && \$expiration < time()) {
            \$this->doDelete(\$id);

            return false;
        }

        return true;
    }

    /**
     * {@inheritdoc}
     */
    protected function doSave(\$id, \$data, \$lifeTime = 0)
    {
        \$this->data[\$id] = [\$data, \$lifeTime ? time() + \$lifeTime : false];

        return true;
    }

    /**
     * {@inheritdoc}
     */
    protected function doDelete(\$id)
    {
        unset(\$this->data[\$id]);

        return true;
    }

    /**
     * {@inheritdoc}
     */
    protected function doFlush()
    {
        \$this->data = [];

        return true;
    }

    /**
     * {@inheritdoc}
     */
    protected function doGetStats()
    {
        return [
            Cache::STATS_HITS             => \$this->hitsCount,
            Cache::STATS_MISSES           => \$this->missesCount,
            Cache::STATS_UPTIME           => \$this->upTime,
            Cache::STATS_MEMORY_USAGE     => null,
            Cache::STATS_MEMORY_AVAILABLE => null,
        ];
    }
}
", "vendor/doctrine/cache/lib/Doctrine/Common/Cache/ArrayCache.php", "/var/www/public/DevLaon/templates/vendor/doctrine/cache/lib/Doctrine/Common/Cache/ArrayCache.php");
    }
}
