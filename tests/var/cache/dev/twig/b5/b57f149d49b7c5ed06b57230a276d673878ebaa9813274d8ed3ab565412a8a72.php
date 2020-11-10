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

/* vendor/symfony/routing/Loader/DirectoryLoader.php */
class __TwigTemplate_0a3b8dede1e782ef4093323cfc18eb1f50c1abc0adb0169aab981cbec2958402 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Loader/DirectoryLoader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Loader/DirectoryLoader.php"));

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

namespace Symfony\\Component\\Routing\\Loader;

use Symfony\\Component\\Config\\Loader\\FileLoader;
use Symfony\\Component\\Config\\Resource\\DirectoryResource;
use Symfony\\Component\\Routing\\RouteCollection;

class DirectoryLoader extends FileLoader
{
    /**
     * {@inheritdoc}
     */
    public function load(\$file, \$type = null)
    {
        \$path = \$this->locator->locate(\$file);

        \$collection = new RouteCollection();
        \$collection->addResource(new DirectoryResource(\$path));

        foreach (scandir(\$path) as \$dir) {
            if ('.' !== \$dir[0]) {
                \$this->setCurrentDir(\$path);
                \$subPath = \$path.'/'.\$dir;
                \$subType = null;

                if (is_dir(\$subPath)) {
                    \$subPath .= '/';
                    \$subType = 'directory';
                }

                \$subCollection = \$this->import(\$subPath, \$subType, false, \$path);
                \$collection->addCollection(\$subCollection);
            }
        }

        return \$collection;
    }

    /**
     * {@inheritdoc}
     */
    public function supports(\$resource, \$type = null)
    {
        // only when type is forced to directory, not to conflict with AnnotationLoader

        return 'directory' === \$type;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/routing/Loader/DirectoryLoader.php";
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

namespace Symfony\\Component\\Routing\\Loader;

use Symfony\\Component\\Config\\Loader\\FileLoader;
use Symfony\\Component\\Config\\Resource\\DirectoryResource;
use Symfony\\Component\\Routing\\RouteCollection;

class DirectoryLoader extends FileLoader
{
    /**
     * {@inheritdoc}
     */
    public function load(\$file, \$type = null)
    {
        \$path = \$this->locator->locate(\$file);

        \$collection = new RouteCollection();
        \$collection->addResource(new DirectoryResource(\$path));

        foreach (scandir(\$path) as \$dir) {
            if ('.' !== \$dir[0]) {
                \$this->setCurrentDir(\$path);
                \$subPath = \$path.'/'.\$dir;
                \$subType = null;

                if (is_dir(\$subPath)) {
                    \$subPath .= '/';
                    \$subType = 'directory';
                }

                \$subCollection = \$this->import(\$subPath, \$subType, false, \$path);
                \$collection->addCollection(\$subCollection);
            }
        }

        return \$collection;
    }

    /**
     * {@inheritdoc}
     */
    public function supports(\$resource, \$type = null)
    {
        // only when type is forced to directory, not to conflict with AnnotationLoader

        return 'directory' === \$type;
    }
}
", "vendor/symfony/routing/Loader/DirectoryLoader.php", "/var/www/public/DevLaon/templates/vendor/symfony/routing/Loader/DirectoryLoader.php");
    }
}
