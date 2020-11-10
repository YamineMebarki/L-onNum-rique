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

/* vendor/symfony/property-info/Tests/Fixtures/DockBlockFallback.php */
class __TwigTemplate_7380263e7e9b671241f68285a3ca6a47d98a37e1be83f2e6d466ad40f9401941 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/property-info/Tests/Fixtures/DockBlockFallback.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/property-info/Tests/Fixtures/DockBlockFallback.php"));

        // line 1
        echo "<?php

namespace Symfony\\Component\\PropertyInfo\\Tests\\Fixtures;

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\PropertyInfo\\Tests\\Fixtures;

/**
 * PhpDocExtractor should fallback from property -> accessor -> mutator when looking up dockblocks.
 *
 * @author Martin Rademacher <mano@radebatz.net>
 */
class DockBlockFallback
{
    /** @var string \$pub */
    public \$pub = 'pub';

    protected \$protAcc;
    protected \$protMut;

    public function getPub()
    {
        return \$this->pub;
    }

    public function setPub(\$pub)
    {
        \$this->pub = \$pub;
    }

    /**
     * @return int
     */
    public function getProtAcc()
    {
        return \$this->protAcc;
    }

    public function setProt(\$protAcc)
    {
        \$this->protAcc = \$protAcc;
    }

    public function getProtMut()
    {
        return \$this->protMut;
    }

    /**
     * @param bool \$protMut
     */
    public function setProtMut(\$protMut)
    {
        \$this->protMut = \$protMut;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/property-info/Tests/Fixtures/DockBlockFallback.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Symfony\\Component\\PropertyInfo\\Tests\\Fixtures;

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\PropertyInfo\\Tests\\Fixtures;

/**
 * PhpDocExtractor should fallback from property -> accessor -> mutator when looking up dockblocks.
 *
 * @author Martin Rademacher <mano@radebatz.net>
 */
class DockBlockFallback
{
    /** @var string \$pub */
    public \$pub = 'pub';

    protected \$protAcc;
    protected \$protMut;

    public function getPub()
    {
        return \$this->pub;
    }

    public function setPub(\$pub)
    {
        \$this->pub = \$pub;
    }

    /**
     * @return int
     */
    public function getProtAcc()
    {
        return \$this->protAcc;
    }

    public function setProt(\$protAcc)
    {
        \$this->protAcc = \$protAcc;
    }

    public function getProtMut()
    {
        return \$this->protMut;
    }

    /**
     * @param bool \$protMut
     */
    public function setProtMut(\$protMut)
    {
        \$this->protMut = \$protMut;
    }
}
", "vendor/symfony/property-info/Tests/Fixtures/DockBlockFallback.php", "/var/www/public/DevLaon/templates/vendor/symfony/property-info/Tests/Fixtures/DockBlockFallback.php");
    }
}
