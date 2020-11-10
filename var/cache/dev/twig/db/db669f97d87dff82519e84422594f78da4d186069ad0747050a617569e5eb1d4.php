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

/* vendor/symfony/property-access/Tests/Fixtures/TypeHinted.php */
class __TwigTemplate_137bf0ef01bd5fd653fca2e3d620be587bd3a5d6cd4fc7a35dd5656728cd082d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/property-access/Tests/Fixtures/TypeHinted.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/property-access/Tests/Fixtures/TypeHinted.php"));

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

namespace Symfony\\Component\\PropertyAccess\\Tests\\Fixtures;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class TypeHinted
{
    private \$date;

    /**
     * @var \\Countable
     */
    private \$countable;

    public function setDate(\\DateTime \$date)
    {
        \$this->date = \$date;
    }

    public function getDate()
    {
        return \$this->date;
    }

    /**
     * @return \\Countable
     */
    public function getCountable()
    {
        return \$this->countable;
    }

    /**
     * @param \\Countable \$countable
     */
    public function setCountable(\\Countable \$countable)
    {
        \$this->countable = \$countable;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/property-access/Tests/Fixtures/TypeHinted.php";
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

namespace Symfony\\Component\\PropertyAccess\\Tests\\Fixtures;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class TypeHinted
{
    private \$date;

    /**
     * @var \\Countable
     */
    private \$countable;

    public function setDate(\\DateTime \$date)
    {
        \$this->date = \$date;
    }

    public function getDate()
    {
        return \$this->date;
    }

    /**
     * @return \\Countable
     */
    public function getCountable()
    {
        return \$this->countable;
    }

    /**
     * @param \\Countable \$countable
     */
    public function setCountable(\\Countable \$countable)
    {
        \$this->countable = \$countable;
    }
}
", "vendor/symfony/property-access/Tests/Fixtures/TypeHinted.php", "/var/www/public/DevLaon/templates/vendor/symfony/property-access/Tests/Fixtures/TypeHinted.php");
    }
}
