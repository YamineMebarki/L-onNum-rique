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

/* vendor/doctrine/cache/lib/Doctrine/Common/Cache/ClearableCache.php */
class __TwigTemplate_51e3c6d23098feb478f990f541e8f684c125afa4e93ff766874707d52b0ce328 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/cache/lib/Doctrine/Common/Cache/ClearableCache.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/cache/lib/Doctrine/Common/Cache/ClearableCache.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\Cache;

/**
 * Interface for cache that can be flushed.
 *
 * Intended to be used for partial clearing of a cache namespace. For a more
 * global \"flushing\", see {@see FlushableCache}.
 *
 * @link   www.doctrine-project.org
 */
interface ClearableCache
{
    /**
     * Deletes all cache entries in the current cache namespace.
     *
     * @return bool TRUE if the cache entries were successfully deleted, FALSE otherwise.
     */
    public function deleteAll();
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/cache/lib/Doctrine/Common/Cache/ClearableCache.php";
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
 * Interface for cache that can be flushed.
 *
 * Intended to be used for partial clearing of a cache namespace. For a more
 * global \"flushing\", see {@see FlushableCache}.
 *
 * @link   www.doctrine-project.org
 */
interface ClearableCache
{
    /**
     * Deletes all cache entries in the current cache namespace.
     *
     * @return bool TRUE if the cache entries were successfully deleted, FALSE otherwise.
     */
    public function deleteAll();
}
", "vendor/doctrine/cache/lib/Doctrine/Common/Cache/ClearableCache.php", "/var/www/public/DevLaon/templates/vendor/doctrine/cache/lib/Doctrine/Common/Cache/ClearableCache.php");
    }
}
