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

/* vendor/symfony/asset/Package.php */
class __TwigTemplate_84f7db00ab05d54ad4457f4fcf2b11dad423ad76f40ef2546921ed07c52e275d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/asset/Package.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/asset/Package.php"));

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
use Symfony\\Component\\Asset\\Context\\NullContext;
use Symfony\\Component\\Asset\\VersionStrategy\\VersionStrategyInterface;

/**
 * Basic package that adds a version to asset URLs.
 *
 * @author Kris Wallsmith <kris@symfony.com>
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Package implements PackageInterface
{
    private \$versionStrategy;
    private \$context;

    public function __construct(VersionStrategyInterface \$versionStrategy, ContextInterface \$context = null)
    {
        \$this->versionStrategy = \$versionStrategy;
        \$this->context = \$context ?: new NullContext();
    }

    /**
     * {@inheritdoc}
     */
    public function getVersion(\$path)
    {
        return \$this->versionStrategy->getVersion(\$path);
    }

    /**
     * {@inheritdoc}
     */
    public function getUrl(\$path)
    {
        if (\$this->isAbsoluteUrl(\$path)) {
            return \$path;
        }

        return \$this->versionStrategy->applyVersion(\$path);
    }

    /**
     * @return ContextInterface
     */
    protected function getContext()
    {
        return \$this->context;
    }

    /**
     * @return VersionStrategyInterface
     */
    protected function getVersionStrategy()
    {
        return \$this->versionStrategy;
    }

    protected function isAbsoluteUrl(\$url)
    {
        return false !== strpos(\$url, '://') || '//' === substr(\$url, 0, 2);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/asset/Package.php";
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
use Symfony\\Component\\Asset\\Context\\NullContext;
use Symfony\\Component\\Asset\\VersionStrategy\\VersionStrategyInterface;

/**
 * Basic package that adds a version to asset URLs.
 *
 * @author Kris Wallsmith <kris@symfony.com>
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Package implements PackageInterface
{
    private \$versionStrategy;
    private \$context;

    public function __construct(VersionStrategyInterface \$versionStrategy, ContextInterface \$context = null)
    {
        \$this->versionStrategy = \$versionStrategy;
        \$this->context = \$context ?: new NullContext();
    }

    /**
     * {@inheritdoc}
     */
    public function getVersion(\$path)
    {
        return \$this->versionStrategy->getVersion(\$path);
    }

    /**
     * {@inheritdoc}
     */
    public function getUrl(\$path)
    {
        if (\$this->isAbsoluteUrl(\$path)) {
            return \$path;
        }

        return \$this->versionStrategy->applyVersion(\$path);
    }

    /**
     * @return ContextInterface
     */
    protected function getContext()
    {
        return \$this->context;
    }

    /**
     * @return VersionStrategyInterface
     */
    protected function getVersionStrategy()
    {
        return \$this->versionStrategy;
    }

    protected function isAbsoluteUrl(\$url)
    {
        return false !== strpos(\$url, '://') || '//' === substr(\$url, 0, 2);
    }
}
", "vendor/symfony/asset/Package.php", "/var/www/public/DevLaon/templates/vendor/symfony/asset/Package.php");
    }
}
