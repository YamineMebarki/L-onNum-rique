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

/* vendor/twig/twig/src/Cache/CacheInterface.php */
class __TwigTemplate_f1964c32877ecfe7bc2fdb4f74472b7855a4fbac299f5346b5a12cd9cf9f539c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Cache/CacheInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Cache/CacheInterface.php"));

        // line 1
        echo "<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\\Cache;

/**
 * Interface implemented by cache classes.
 *
 * It is highly recommended to always store templates on the filesystem to
 * benefit from the PHP opcode cache. This interface is mostly useful if you
 * need to implement a custom strategy for storing templates on the filesystem.
 *
 * @author Andrew Tch <andrew@noop.lv>
 */
interface CacheInterface
{
    /**
     * Generates a cache key for the given template class name.
     *
     * @param string \$name      The template name
     * @param string \$className The template class name
     *
     * @return string
     */
    public function generateKey(\$name, \$className);

    /**
     * Writes the compiled template to cache.
     *
     * @param string \$key     The cache key
     * @param string \$content The template representation as a PHP class
     */
    public function write(\$key, \$content);

    /**
     * Loads a template from the cache.
     *
     * @param string \$key The cache key
     */
    public function load(\$key);

    /**
     * Returns the modification timestamp of a key.
     *
     * @param string \$key The cache key
     *
     * @return int
     */
    public function getTimestamp(\$key);
}

class_alias('Twig\\Cache\\CacheInterface', 'Twig_CacheInterface');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/src/Cache/CacheInterface.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\\Cache;

/**
 * Interface implemented by cache classes.
 *
 * It is highly recommended to always store templates on the filesystem to
 * benefit from the PHP opcode cache. This interface is mostly useful if you
 * need to implement a custom strategy for storing templates on the filesystem.
 *
 * @author Andrew Tch <andrew@noop.lv>
 */
interface CacheInterface
{
    /**
     * Generates a cache key for the given template class name.
     *
     * @param string \$name      The template name
     * @param string \$className The template class name
     *
     * @return string
     */
    public function generateKey(\$name, \$className);

    /**
     * Writes the compiled template to cache.
     *
     * @param string \$key     The cache key
     * @param string \$content The template representation as a PHP class
     */
    public function write(\$key, \$content);

    /**
     * Loads a template from the cache.
     *
     * @param string \$key The cache key
     */
    public function load(\$key);

    /**
     * Returns the modification timestamp of a key.
     *
     * @param string \$key The cache key
     *
     * @return int
     */
    public function getTimestamp(\$key);
}

class_alias('Twig\\Cache\\CacheInterface', 'Twig_CacheInterface');
", "vendor/twig/twig/src/Cache/CacheInterface.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/src/Cache/CacheInterface.php");
    }
}
