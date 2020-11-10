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

/* vendor/symfony/asset/VersionStrategy/StaticVersionStrategy.php */
class __TwigTemplate_dace0d7d7b5b4c2a4b4d9f846d4c1e0cb6803785f03c3ec2d8cc397f37f7bad2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/asset/VersionStrategy/StaticVersionStrategy.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/asset/VersionStrategy/StaticVersionStrategy.php"));

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

namespace Symfony\\Component\\Asset\\VersionStrategy;

/**
 * Returns the same version for all assets.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class StaticVersionStrategy implements VersionStrategyInterface
{
    private \$version;
    private \$format;

    /**
     * @param string \$version Version number
     * @param string \$format  Url format
     */
    public function __construct(string \$version, string \$format = null)
    {
        \$this->version = \$version;
        \$this->format = \$format ?: '%s?%s';
    }

    /**
     * {@inheritdoc}
     */
    public function getVersion(\$path)
    {
        return \$this->version;
    }

    /**
     * {@inheritdoc}
     */
    public function applyVersion(\$path)
    {
        \$versionized = sprintf(\$this->format, ltrim(\$path, '/'), \$this->getVersion(\$path));

        if (\$path && '/' == \$path[0]) {
            return '/'.\$versionized;
        }

        return \$versionized;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/asset/VersionStrategy/StaticVersionStrategy.php";
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

namespace Symfony\\Component\\Asset\\VersionStrategy;

/**
 * Returns the same version for all assets.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class StaticVersionStrategy implements VersionStrategyInterface
{
    private \$version;
    private \$format;

    /**
     * @param string \$version Version number
     * @param string \$format  Url format
     */
    public function __construct(string \$version, string \$format = null)
    {
        \$this->version = \$version;
        \$this->format = \$format ?: '%s?%s';
    }

    /**
     * {@inheritdoc}
     */
    public function getVersion(\$path)
    {
        return \$this->version;
    }

    /**
     * {@inheritdoc}
     */
    public function applyVersion(\$path)
    {
        \$versionized = sprintf(\$this->format, ltrim(\$path, '/'), \$this->getVersion(\$path));

        if (\$path && '/' == \$path[0]) {
            return '/'.\$versionized;
        }

        return \$versionized;
    }
}
", "vendor/symfony/asset/VersionStrategy/StaticVersionStrategy.php", "/var/www/public/DevLaon/templates/vendor/symfony/asset/VersionStrategy/StaticVersionStrategy.php");
    }
}
