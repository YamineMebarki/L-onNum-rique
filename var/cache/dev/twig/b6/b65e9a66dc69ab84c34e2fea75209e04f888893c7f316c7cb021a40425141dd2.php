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

/* vendor/twig/twig/src/Loader/LoaderInterface.php */
class __TwigTemplate_48bacf5655cfee59dcff4945604f151b49322b18d8fdf70354a891878fb620d9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Loader/LoaderInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Loader/LoaderInterface.php"));

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

namespace Twig\\Loader;

use Twig\\Error\\LoaderError;
use Twig\\Source;

/**
 * Interface all loaders must implement.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface LoaderInterface
{
    /**
     * Returns the source context for a given template logical name.
     *
     * @param string \$name The template logical name
     *
     * @return Source
     *
     * @throws LoaderError When \$name is not found
     */
    public function getSourceContext(\$name);

    /**
     * Gets the cache key to use for the cache for a given template name.
     *
     * @param string \$name The name of the template to load
     *
     * @return string The cache key
     *
     * @throws LoaderError When \$name is not found
     */
    public function getCacheKey(\$name);

    /**
     * Returns true if the template is still fresh.
     *
     * @param string \$name The template name
     * @param int    \$time Timestamp of the last modification time of the
     *                     cached template
     *
     * @return bool true if the template is fresh, false otherwise
     *
     * @throws LoaderError When \$name is not found
     */
    public function isFresh(\$name, \$time);

    /**
     * Check if we have the source code of a template, given its name.
     *
     * @param string \$name The name of the template to check if we can load
     *
     * @return bool If the template source code is handled by this loader or not
     */
    public function exists(\$name);
}

class_alias('Twig\\Loader\\LoaderInterface', 'Twig_LoaderInterface');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/src/Loader/LoaderInterface.php";
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

namespace Twig\\Loader;

use Twig\\Error\\LoaderError;
use Twig\\Source;

/**
 * Interface all loaders must implement.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface LoaderInterface
{
    /**
     * Returns the source context for a given template logical name.
     *
     * @param string \$name The template logical name
     *
     * @return Source
     *
     * @throws LoaderError When \$name is not found
     */
    public function getSourceContext(\$name);

    /**
     * Gets the cache key to use for the cache for a given template name.
     *
     * @param string \$name The name of the template to load
     *
     * @return string The cache key
     *
     * @throws LoaderError When \$name is not found
     */
    public function getCacheKey(\$name);

    /**
     * Returns true if the template is still fresh.
     *
     * @param string \$name The template name
     * @param int    \$time Timestamp of the last modification time of the
     *                     cached template
     *
     * @return bool true if the template is fresh, false otherwise
     *
     * @throws LoaderError When \$name is not found
     */
    public function isFresh(\$name, \$time);

    /**
     * Check if we have the source code of a template, given its name.
     *
     * @param string \$name The name of the template to check if we can load
     *
     * @return bool If the template source code is handled by this loader or not
     */
    public function exists(\$name);
}

class_alias('Twig\\Loader\\LoaderInterface', 'Twig_LoaderInterface');
", "vendor/twig/twig/src/Loader/LoaderInterface.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/src/Loader/LoaderInterface.php");
    }
}
