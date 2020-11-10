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

/* vendor/symfony/validator/Mapping/Cache/CacheInterface.php */
class __TwigTemplate_2e457297ba875824522ee7981b99d7dab93e0361580436fadcede6494d71fb5e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Mapping/Cache/CacheInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Mapping/Cache/CacheInterface.php"));

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

namespace Symfony\\Component\\Validator\\Mapping\\Cache;

use Symfony\\Component\\Validator\\Mapping\\ClassMetadata;

/**
 * Persists ClassMetadata instances in a cache.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
interface CacheInterface
{
    /**
     * Returns whether metadata for the given class exists in the cache.
     *
     * @param string \$class
     */
    public function has(\$class);

    /**
     * Returns the metadata for the given class from the cache.
     *
     * @param string \$class Class Name
     *
     * @return ClassMetadata|false A ClassMetadata instance or false on miss
     */
    public function read(\$class);

    /**
     * Stores a class metadata in the cache.
     */
    public function write(ClassMetadata \$metadata);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Mapping/Cache/CacheInterface.php";
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

namespace Symfony\\Component\\Validator\\Mapping\\Cache;

use Symfony\\Component\\Validator\\Mapping\\ClassMetadata;

/**
 * Persists ClassMetadata instances in a cache.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
interface CacheInterface
{
    /**
     * Returns whether metadata for the given class exists in the cache.
     *
     * @param string \$class
     */
    public function has(\$class);

    /**
     * Returns the metadata for the given class from the cache.
     *
     * @param string \$class Class Name
     *
     * @return ClassMetadata|false A ClassMetadata instance or false on miss
     */
    public function read(\$class);

    /**
     * Stores a class metadata in the cache.
     */
    public function write(ClassMetadata \$metadata);
}
", "vendor/symfony/validator/Mapping/Cache/CacheInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Mapping/Cache/CacheInterface.php");
    }
}
