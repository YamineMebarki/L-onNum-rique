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

/* vendor/symfony/asset/PathPackage.php */
class __TwigTemplate_0770ea536521b1831221a36d22b7cefd8261b2a73d09a54ccb190c55dd0bb784 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/asset/PathPackage.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/asset/PathPackage.php"));

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

use Symfony\\Component\\Asset\\Context\\ContextInterface;
use Symfony\\Component\\Asset\\VersionStrategy\\VersionStrategyInterface;

/**
 * Package that adds a base path to asset URLs in addition to a version.
 *
 * In addition to the provided base path, this package also automatically
 * prepends the current request base path if a Context is available to
 * allow a website to be hosted easily under any given path under the Web
 * Server root directory.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class PathPackage extends Package
{
    private \$basePath;

    /**
     * @param string                   \$basePath        The base path to be prepended to relative paths
     * @param VersionStrategyInterface \$versionStrategy The version strategy
     * @param ContextInterface|null    \$context         The context
     */
    public function __construct(string \$basePath, VersionStrategyInterface \$versionStrategy, ContextInterface \$context = null)
    {
        parent::__construct(\$versionStrategy, \$context);

        if (!\$basePath) {
            \$this->basePath = '/';
        } else {
            if ('/' != \$basePath[0]) {
                \$basePath = '/'.\$basePath;
            }

            \$this->basePath = rtrim(\$basePath, '/').'/';
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getUrl(\$path)
    {
        \$versionedPath = parent::getUrl(\$path);

        // if absolute or begins with /, we're done
        if (\$this->isAbsoluteUrl(\$versionedPath) || (\$versionedPath && '/' === \$versionedPath[0])) {
            return \$versionedPath;
        }

        return \$this->getBasePath().ltrim(\$versionedPath, '/');
    }

    /**
     * Returns the base path.
     *
     * @return string The base path
     */
    public function getBasePath()
    {
        return \$this->getContext()->getBasePath().\$this->basePath;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/asset/PathPackage.php";
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

use Symfony\\Component\\Asset\\Context\\ContextInterface;
use Symfony\\Component\\Asset\\VersionStrategy\\VersionStrategyInterface;

/**
 * Package that adds a base path to asset URLs in addition to a version.
 *
 * In addition to the provided base path, this package also automatically
 * prepends the current request base path if a Context is available to
 * allow a website to be hosted easily under any given path under the Web
 * Server root directory.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class PathPackage extends Package
{
    private \$basePath;

    /**
     * @param string                   \$basePath        The base path to be prepended to relative paths
     * @param VersionStrategyInterface \$versionStrategy The version strategy
     * @param ContextInterface|null    \$context         The context
     */
    public function __construct(string \$basePath, VersionStrategyInterface \$versionStrategy, ContextInterface \$context = null)
    {
        parent::__construct(\$versionStrategy, \$context);

        if (!\$basePath) {
            \$this->basePath = '/';
        } else {
            if ('/' != \$basePath[0]) {
                \$basePath = '/'.\$basePath;
            }

            \$this->basePath = rtrim(\$basePath, '/').'/';
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getUrl(\$path)
    {
        \$versionedPath = parent::getUrl(\$path);

        // if absolute or begins with /, we're done
        if (\$this->isAbsoluteUrl(\$versionedPath) || (\$versionedPath && '/' === \$versionedPath[0])) {
            return \$versionedPath;
        }

        return \$this->getBasePath().ltrim(\$versionedPath, '/');
    }

    /**
     * Returns the base path.
     *
     * @return string The base path
     */
    public function getBasePath()
    {
        return \$this->getContext()->getBasePath().\$this->basePath;
    }
}
", "vendor/symfony/asset/PathPackage.php", "/var/www/public/DevLaon/templates/vendor/symfony/asset/PathPackage.php");
    }
}
