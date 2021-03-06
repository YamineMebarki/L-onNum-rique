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

/* vendor/symfony/validator/Mapping/Loader/FilesLoader.php */
class __TwigTemplate_7719b195d5cd439db9a23fa31e80ce167e4ad7000199ffc9c00b8fcab90c11fe extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Mapping/Loader/FilesLoader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Mapping/Loader/FilesLoader.php"));

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

namespace Symfony\\Component\\Validator\\Mapping\\Loader;

/**
 * Base loader for loading validation metadata from a list of files.
 *
 * @author Bulat Shakirzyanov <mallluhuct@gmail.com>
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @see YamlFilesLoader
 * @see XmlFilesLoader
 */
abstract class FilesLoader extends LoaderChain
{
    /**
     * Creates a new loader.
     *
     * @param array \$paths An array of file paths
     */
    public function __construct(array \$paths)
    {
        parent::__construct(\$this->getFileLoaders(\$paths));
    }

    /**
     * Returns an array of file loaders for the given file paths.
     *
     * @param array \$paths An array of file paths
     *
     * @return LoaderInterface[] The metadata loaders
     */
    protected function getFileLoaders(\$paths)
    {
        \$loaders = [];

        foreach (\$paths as \$path) {
            \$loaders[] = \$this->getFileLoaderInstance(\$path);
        }

        return \$loaders;
    }

    /**
     * Creates a loader for the given file path.
     *
     * @param string \$path The file path
     *
     * @return LoaderInterface The created loader
     */
    abstract protected function getFileLoaderInstance(\$path);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Mapping/Loader/FilesLoader.php";
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

namespace Symfony\\Component\\Validator\\Mapping\\Loader;

/**
 * Base loader for loading validation metadata from a list of files.
 *
 * @author Bulat Shakirzyanov <mallluhuct@gmail.com>
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @see YamlFilesLoader
 * @see XmlFilesLoader
 */
abstract class FilesLoader extends LoaderChain
{
    /**
     * Creates a new loader.
     *
     * @param array \$paths An array of file paths
     */
    public function __construct(array \$paths)
    {
        parent::__construct(\$this->getFileLoaders(\$paths));
    }

    /**
     * Returns an array of file loaders for the given file paths.
     *
     * @param array \$paths An array of file paths
     *
     * @return LoaderInterface[] The metadata loaders
     */
    protected function getFileLoaders(\$paths)
    {
        \$loaders = [];

        foreach (\$paths as \$path) {
            \$loaders[] = \$this->getFileLoaderInstance(\$path);
        }

        return \$loaders;
    }

    /**
     * Creates a loader for the given file path.
     *
     * @param string \$path The file path
     *
     * @return LoaderInterface The created loader
     */
    abstract protected function getFileLoaderInstance(\$path);
}
", "vendor/symfony/validator/Mapping/Loader/FilesLoader.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Mapping/Loader/FilesLoader.php");
    }
}
