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

/* vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiGetCache.php */
class __TwigTemplate_424ffa860e60fc34134a61d5e646f9c428d9d491a4d8543acb916c25153d3ae6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiGetCache.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiGetCache.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\Cache;

/**
 * Interface for cache drivers that allows to get many items at once.
 *
 * @link   www.doctrine-project.org
 * @deprecated
 */
interface MultiGetCache
{
    /**
     * Returns an associative array of values for keys is found in cache.
     *
     * @param string[] \$keys Array of keys to retrieve from cache
     * @return mixed[] Array of retrieved values, indexed by the specified keys.
     *                 Values that couldn't be retrieved are not contained in this array.
     */
    public function fetchMultiple(array \$keys);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiGetCache.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\Cache;

/**
 * Interface for cache drivers that allows to get many items at once.
 *
 * @link   www.doctrine-project.org
 * @deprecated
 */
interface MultiGetCache
{
    /**
     * Returns an associative array of values for keys is found in cache.
     *
     * @param string[] \$keys Array of keys to retrieve from cache
     * @return mixed[] Array of retrieved values, indexed by the specified keys.
     *                 Values that couldn't be retrieved are not contained in this array.
     */
    public function fetchMultiple(array \$keys);
}
", "vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiGetCache.php", "/var/www/public/DevLaon/templates/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiGetCache.php");
    }
}
