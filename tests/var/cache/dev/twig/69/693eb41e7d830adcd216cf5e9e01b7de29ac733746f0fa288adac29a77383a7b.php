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

/* vendor/symfony/twig-bridge/Extension/AssetExtension.php */
class __TwigTemplate_992fa93b4e189b9f4bc4aea9e62bab025a019414eea3c9eaaf8e2793a0a7ce01 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Extension/AssetExtension.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Extension/AssetExtension.php"));

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

namespace Symfony\\Bridge\\Twig\\Extension;

use Symfony\\Component\\Asset\\Packages;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

/**
 * Twig extension for the Symfony Asset component.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class AssetExtension extends AbstractExtension
{
    private \$packages;

    public function __construct(Packages \$packages)
    {
        \$this->packages = \$packages;
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('asset', [\$this, 'getAssetUrl']),
            new TwigFunction('asset_version', [\$this, 'getAssetVersion']),
        ];
    }

    /**
     * Returns the public url/path of an asset.
     *
     * If the package used to generate the path is an instance of
     * UrlPackage, you will always get a URL and not a path.
     *
     * @param string \$path        A public path
     * @param string \$packageName The name of the asset package to use
     *
     * @return string The public path of the asset
     */
    public function getAssetUrl(\$path, \$packageName = null)
    {
        return \$this->packages->getUrl(\$path, \$packageName);
    }

    /**
     * Returns the version of an asset.
     *
     * @param string \$path        A public path
     * @param string \$packageName The name of the asset package to use
     *
     * @return string The asset version
     */
    public function getAssetVersion(\$path, \$packageName = null)
    {
        return \$this->packages->getVersion(\$path, \$packageName);
    }

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'asset';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bridge/Extension/AssetExtension.php";
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

namespace Symfony\\Bridge\\Twig\\Extension;

use Symfony\\Component\\Asset\\Packages;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

/**
 * Twig extension for the Symfony Asset component.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class AssetExtension extends AbstractExtension
{
    private \$packages;

    public function __construct(Packages \$packages)
    {
        \$this->packages = \$packages;
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('asset', [\$this, 'getAssetUrl']),
            new TwigFunction('asset_version', [\$this, 'getAssetVersion']),
        ];
    }

    /**
     * Returns the public url/path of an asset.
     *
     * If the package used to generate the path is an instance of
     * UrlPackage, you will always get a URL and not a path.
     *
     * @param string \$path        A public path
     * @param string \$packageName The name of the asset package to use
     *
     * @return string The public path of the asset
     */
    public function getAssetUrl(\$path, \$packageName = null)
    {
        return \$this->packages->getUrl(\$path, \$packageName);
    }

    /**
     * Returns the version of an asset.
     *
     * @param string \$path        A public path
     * @param string \$packageName The name of the asset package to use
     *
     * @return string The asset version
     */
    public function getAssetVersion(\$path, \$packageName = null)
    {
        return \$this->packages->getVersion(\$path, \$packageName);
    }

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'asset';
    }
}
", "vendor/symfony/twig-bridge/Extension/AssetExtension.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bridge/Extension/AssetExtension.php");
    }
}
