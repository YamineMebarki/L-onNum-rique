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

/* vendor/twig/twig/src/Loader/ArrayLoader.php */
class __TwigTemplate_ceb5295681ea6aa778f9ccce0f06c76ceb9336372f4f17ff78210a2a1fd1bf3d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Loader/ArrayLoader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Loader/ArrayLoader.php"));

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
 * Loads a template from an array.
 *
 * When using this loader with a cache mechanism, you should know that a new cache
 * key is generated each time a template content \"changes\" (the cache key being the
 * source code of the template). If you don't want to see your cache grows out of
 * control, you need to take care of clearing the old cache file by yourself.
 *
 * This loader should only be used for unit testing.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class ArrayLoader implements LoaderInterface, ExistsLoaderInterface, SourceContextLoaderInterface
{
    private \$templates = [];

    /**
     * @param array \$templates An array of templates (keys are the names, and values are the source code)
     */
    public function __construct(array \$templates = [])
    {
        \$this->templates = \$templates;
    }

    /**
     * Adds or overrides a template.
     *
     * @param string \$name     The template name
     * @param string \$template The template source
     */
    public function setTemplate(\$name, \$template)
    {
        \$this->templates[\$name] = \$template;
    }

    public function getSourceContext(\$name)
    {
        \$name = (string) \$name;
        if (!isset(\$this->templates[\$name])) {
            throw new LoaderError(sprintf('Template \"%s\" is not defined.', \$name));
        }

        return new Source(\$this->templates[\$name], \$name);
    }

    public function exists(\$name)
    {
        return isset(\$this->templates[\$name]);
    }

    public function getCacheKey(\$name)
    {
        if (!isset(\$this->templates[\$name])) {
            throw new LoaderError(sprintf('Template \"%s\" is not defined.', \$name));
        }

        return \$name.':'.\$this->templates[\$name];
    }

    public function isFresh(\$name, \$time)
    {
        if (!isset(\$this->templates[\$name])) {
            throw new LoaderError(sprintf('Template \"%s\" is not defined.', \$name));
        }

        return true;
    }
}

class_alias('Twig\\Loader\\ArrayLoader', 'Twig_Loader_Array');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/src/Loader/ArrayLoader.php";
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
 * Loads a template from an array.
 *
 * When using this loader with a cache mechanism, you should know that a new cache
 * key is generated each time a template content \"changes\" (the cache key being the
 * source code of the template). If you don't want to see your cache grows out of
 * control, you need to take care of clearing the old cache file by yourself.
 *
 * This loader should only be used for unit testing.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class ArrayLoader implements LoaderInterface, ExistsLoaderInterface, SourceContextLoaderInterface
{
    private \$templates = [];

    /**
     * @param array \$templates An array of templates (keys are the names, and values are the source code)
     */
    public function __construct(array \$templates = [])
    {
        \$this->templates = \$templates;
    }

    /**
     * Adds or overrides a template.
     *
     * @param string \$name     The template name
     * @param string \$template The template source
     */
    public function setTemplate(\$name, \$template)
    {
        \$this->templates[\$name] = \$template;
    }

    public function getSourceContext(\$name)
    {
        \$name = (string) \$name;
        if (!isset(\$this->templates[\$name])) {
            throw new LoaderError(sprintf('Template \"%s\" is not defined.', \$name));
        }

        return new Source(\$this->templates[\$name], \$name);
    }

    public function exists(\$name)
    {
        return isset(\$this->templates[\$name]);
    }

    public function getCacheKey(\$name)
    {
        if (!isset(\$this->templates[\$name])) {
            throw new LoaderError(sprintf('Template \"%s\" is not defined.', \$name));
        }

        return \$name.':'.\$this->templates[\$name];
    }

    public function isFresh(\$name, \$time)
    {
        if (!isset(\$this->templates[\$name])) {
            throw new LoaderError(sprintf('Template \"%s\" is not defined.', \$name));
        }

        return true;
    }
}

class_alias('Twig\\Loader\\ArrayLoader', 'Twig_Loader_Array');
", "vendor/twig/twig/src/Loader/ArrayLoader.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/src/Loader/ArrayLoader.php");
    }
}
