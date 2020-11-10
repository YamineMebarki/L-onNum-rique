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

/* vendor/symfony/framework-bundle/Templating/Helper/AssetsHelper.php */
class __TwigTemplate_74968fb0f5081f26d18e32191d25a270d5e25caebfbdb7363e8fb1136511b287 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Templating/Helper/AssetsHelper.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Templating/Helper/AssetsHelper.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper;

@trigger_error('The '.AssetsHelper::class.' class is deprecated since version 4.3 and will be removed in 5.0; use Twig instead.', E_USER_DEPRECATED);

use Symfony\\Component\\Asset\\Packages;
use Symfony\\Component\\Templating\\Helper\\Helper;

/**
 * AssetsHelper helps manage asset URLs.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @deprecated since version 4.3, to be removed in 5.0; use Twig instead.
 */
class AssetsHelper extends Helper
{
    private \$packages;

    public function __construct(Packages \$packages)
    {
        \$this->packages = \$packages;
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
    public function getUrl(\$path, \$packageName = null)
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
    public function getVersion(\$path, \$packageName = null)
    {
        return \$this->packages->getVersion(\$path, \$packageName);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'assets';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Templating/Helper/AssetsHelper.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper;

@trigger_error('The '.AssetsHelper::class.' class is deprecated since version 4.3 and will be removed in 5.0; use Twig instead.', E_USER_DEPRECATED);

use Symfony\\Component\\Asset\\Packages;
use Symfony\\Component\\Templating\\Helper\\Helper;

/**
 * AssetsHelper helps manage asset URLs.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @deprecated since version 4.3, to be removed in 5.0; use Twig instead.
 */
class AssetsHelper extends Helper
{
    private \$packages;

    public function __construct(Packages \$packages)
    {
        \$this->packages = \$packages;
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
    public function getUrl(\$path, \$packageName = null)
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
    public function getVersion(\$path, \$packageName = null)
    {
        return \$this->packages->getVersion(\$path, \$packageName);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'assets';
    }
}
", "vendor/symfony/framework-bundle/Templating/Helper/AssetsHelper.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Templating/Helper/AssetsHelper.php");
    }
}
