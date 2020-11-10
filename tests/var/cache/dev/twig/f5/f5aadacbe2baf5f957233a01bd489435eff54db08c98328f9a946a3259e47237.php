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

/* vendor/symfony/config/Loader/Loader.php */
class __TwigTemplate_cac7bd244b4def599feb08814fc92edede281578b9e1bc4495e73c550ab2ce70 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Loader/Loader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Loader/Loader.php"));

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

namespace Symfony\\Component\\Config\\Loader;

use Symfony\\Component\\Config\\Exception\\LoaderLoadException;

/**
 * Loader is the abstract class used by all built-in loaders.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class Loader implements LoaderInterface
{
    protected \$resolver;

    /**
     * {@inheritdoc}
     */
    public function getResolver()
    {
        return \$this->resolver;
    }

    /**
     * {@inheritdoc}
     */
    public function setResolver(LoaderResolverInterface \$resolver)
    {
        \$this->resolver = \$resolver;
    }

    /**
     * Imports a resource.
     *
     * @param mixed       \$resource A resource
     * @param string|null \$type     The resource type or null if unknown
     *
     * @return mixed
     */
    public function import(\$resource, \$type = null)
    {
        return \$this->resolve(\$resource, \$type)->load(\$resource, \$type);
    }

    /**
     * Finds a loader able to load an imported resource.
     *
     * @param mixed       \$resource A resource
     * @param string|null \$type     The resource type or null if unknown
     *
     * @return \$this|LoaderInterface
     *
     * @throws LoaderLoadException If no loader is found
     */
    public function resolve(\$resource, \$type = null)
    {
        if (\$this->supports(\$resource, \$type)) {
            return \$this;
        }

        \$loader = null === \$this->resolver ? false : \$this->resolver->resolve(\$resource, \$type);

        if (false === \$loader) {
            throw new LoaderLoadException(\$resource, null, null, null, \$type);
        }

        return \$loader;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/config/Loader/Loader.php";
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

namespace Symfony\\Component\\Config\\Loader;

use Symfony\\Component\\Config\\Exception\\LoaderLoadException;

/**
 * Loader is the abstract class used by all built-in loaders.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class Loader implements LoaderInterface
{
    protected \$resolver;

    /**
     * {@inheritdoc}
     */
    public function getResolver()
    {
        return \$this->resolver;
    }

    /**
     * {@inheritdoc}
     */
    public function setResolver(LoaderResolverInterface \$resolver)
    {
        \$this->resolver = \$resolver;
    }

    /**
     * Imports a resource.
     *
     * @param mixed       \$resource A resource
     * @param string|null \$type     The resource type or null if unknown
     *
     * @return mixed
     */
    public function import(\$resource, \$type = null)
    {
        return \$this->resolve(\$resource, \$type)->load(\$resource, \$type);
    }

    /**
     * Finds a loader able to load an imported resource.
     *
     * @param mixed       \$resource A resource
     * @param string|null \$type     The resource type or null if unknown
     *
     * @return \$this|LoaderInterface
     *
     * @throws LoaderLoadException If no loader is found
     */
    public function resolve(\$resource, \$type = null)
    {
        if (\$this->supports(\$resource, \$type)) {
            return \$this;
        }

        \$loader = null === \$this->resolver ? false : \$this->resolver->resolve(\$resource, \$type);

        if (false === \$loader) {
            throw new LoaderLoadException(\$resource, null, null, null, \$type);
        }

        return \$loader;
    }
}
", "vendor/symfony/config/Loader/Loader.php", "/var/www/public/DevLaon/templates/vendor/symfony/config/Loader/Loader.php");
    }
}
