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

/* vendor/symfony/asset/Packages.php */
class __TwigTemplate_0f29aba4b2d3419a9bde6f3a92bd85ddcc9a9c4db493ce055154533500b9779d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/asset/Packages.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/asset/Packages.php"));

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

namespace Symfony\\Component\\Asset;

use Symfony\\Component\\Asset\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Asset\\Exception\\LogicException;

/**
 * Helps manage asset URLs.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Kris Wallsmith <kris@symfony.com>
 */
class Packages
{
    private \$defaultPackage;
    private \$packages = [];

    /**
     * @param PackageInterface   \$defaultPackage The default package
     * @param PackageInterface[] \$packages       Additional packages indexed by name
     */
    public function __construct(PackageInterface \$defaultPackage = null, array \$packages = [])
    {
        \$this->defaultPackage = \$defaultPackage;

        foreach (\$packages as \$name => \$package) {
            \$this->addPackage(\$name, \$package);
        }
    }

    public function setDefaultPackage(PackageInterface \$defaultPackage)
    {
        \$this->defaultPackage = \$defaultPackage;
    }

    /**
     * Adds a  package.
     *
     * @param string           \$name    The package name
     * @param PackageInterface \$package The package
     */
    public function addPackage(\$name, PackageInterface \$package)
    {
        \$this->packages[\$name] = \$package;
    }

    /**
     * Returns an asset package.
     *
     * @param string \$name The name of the package or null for the default package
     *
     * @return PackageInterface An asset package
     *
     * @throws InvalidArgumentException If there is no package by that name
     * @throws LogicException           If no default package is defined
     */
    public function getPackage(\$name = null)
    {
        if (null === \$name) {
            if (null === \$this->defaultPackage) {
                throw new LogicException('There is no default asset package, configure one first.');
            }

            return \$this->defaultPackage;
        }

        if (!isset(\$this->packages[\$name])) {
            throw new InvalidArgumentException(sprintf('There is no \"%s\" asset package.', \$name));
        }

        return \$this->packages[\$name];
    }

    /**
     * Gets the version to add to public URL.
     *
     * @param string \$path        A public path
     * @param string \$packageName A package name
     *
     * @return string The current version
     */
    public function getVersion(\$path, \$packageName = null)
    {
        return \$this->getPackage(\$packageName)->getVersion(\$path);
    }

    /**
     * Returns the public path.
     *
     * Absolute paths (i.e. http://...) are returned unmodified.
     *
     * @param string \$path        A public path
     * @param string \$packageName The name of the asset package to use
     *
     * @return string A public path which takes into account the base path and URL path
     */
    public function getUrl(\$path, \$packageName = null)
    {
        return \$this->getPackage(\$packageName)->getUrl(\$path);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/asset/Packages.php";
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

namespace Symfony\\Component\\Asset;

use Symfony\\Component\\Asset\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Asset\\Exception\\LogicException;

/**
 * Helps manage asset URLs.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Kris Wallsmith <kris@symfony.com>
 */
class Packages
{
    private \$defaultPackage;
    private \$packages = [];

    /**
     * @param PackageInterface   \$defaultPackage The default package
     * @param PackageInterface[] \$packages       Additional packages indexed by name
     */
    public function __construct(PackageInterface \$defaultPackage = null, array \$packages = [])
    {
        \$this->defaultPackage = \$defaultPackage;

        foreach (\$packages as \$name => \$package) {
            \$this->addPackage(\$name, \$package);
        }
    }

    public function setDefaultPackage(PackageInterface \$defaultPackage)
    {
        \$this->defaultPackage = \$defaultPackage;
    }

    /**
     * Adds a  package.
     *
     * @param string           \$name    The package name
     * @param PackageInterface \$package The package
     */
    public function addPackage(\$name, PackageInterface \$package)
    {
        \$this->packages[\$name] = \$package;
    }

    /**
     * Returns an asset package.
     *
     * @param string \$name The name of the package or null for the default package
     *
     * @return PackageInterface An asset package
     *
     * @throws InvalidArgumentException If there is no package by that name
     * @throws LogicException           If no default package is defined
     */
    public function getPackage(\$name = null)
    {
        if (null === \$name) {
            if (null === \$this->defaultPackage) {
                throw new LogicException('There is no default asset package, configure one first.');
            }

            return \$this->defaultPackage;
        }

        if (!isset(\$this->packages[\$name])) {
            throw new InvalidArgumentException(sprintf('There is no \"%s\" asset package.', \$name));
        }

        return \$this->packages[\$name];
    }

    /**
     * Gets the version to add to public URL.
     *
     * @param string \$path        A public path
     * @param string \$packageName A package name
     *
     * @return string The current version
     */
    public function getVersion(\$path, \$packageName = null)
    {
        return \$this->getPackage(\$packageName)->getVersion(\$path);
    }

    /**
     * Returns the public path.
     *
     * Absolute paths (i.e. http://...) are returned unmodified.
     *
     * @param string \$path        A public path
     * @param string \$packageName The name of the asset package to use
     *
     * @return string A public path which takes into account the base path and URL path
     */
    public function getUrl(\$path, \$packageName = null)
    {
        return \$this->getPackage(\$packageName)->getUrl(\$path);
    }
}
", "vendor/symfony/asset/Packages.php", "/var/www/public/DevLaon/templates/vendor/symfony/asset/Packages.php");
    }
}
