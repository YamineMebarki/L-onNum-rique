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

/* vendor/symfony/flex/src/Unpack/Result.php */
class __TwigTemplate_600f8248fdebabc0df72382082042ae2b687fb2477195de3911865e8e46b30e7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/flex/src/Unpack/Result.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/flex/src/Unpack/Result.php"));

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

namespace Symfony\\Flex\\Unpack;

use Composer\\Package\\PackageInterface;

class Result
{
    private \$unpacked = [];
    private \$required = [];

    public function addUnpacked(PackageInterface \$package)
    {
        \$this->unpacked[] = \$package;
    }

    /**
     * @return PackageInterface[]
     */
    public function getUnpacked(): array
    {
        return \$this->unpacked;
    }

    public function addRequired(string \$package)
    {
        \$this->required[] = \$package;
    }

    /**
     * @return string[]
     */
    public function getRequired(): array
    {
        // we need at least one package for the command to work properly
        return \$this->required ?: ['symfony/flex'];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/flex/src/Unpack/Result.php";
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

namespace Symfony\\Flex\\Unpack;

use Composer\\Package\\PackageInterface;

class Result
{
    private \$unpacked = [];
    private \$required = [];

    public function addUnpacked(PackageInterface \$package)
    {
        \$this->unpacked[] = \$package;
    }

    /**
     * @return PackageInterface[]
     */
    public function getUnpacked(): array
    {
        return \$this->unpacked;
    }

    public function addRequired(string \$package)
    {
        \$this->required[] = \$package;
    }

    /**
     * @return string[]
     */
    public function getRequired(): array
    {
        // we need at least one package for the command to work properly
        return \$this->required ?: ['symfony/flex'];
    }
}
", "vendor/symfony/flex/src/Unpack/Result.php", "/var/www/public/DevLaon/templates/vendor/symfony/flex/src/Unpack/Result.php");
    }
}
