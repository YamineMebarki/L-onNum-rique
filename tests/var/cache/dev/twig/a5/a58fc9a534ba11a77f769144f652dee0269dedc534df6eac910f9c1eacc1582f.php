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

/* vendor/symfony/dependency-injection/Argument/RewindableGenerator.php */
class __TwigTemplate_130c6d23fc1e50fac8ec07fb73527ad6df47dcb29dfed774c25e11ecda980013 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Argument/RewindableGenerator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Argument/RewindableGenerator.php"));

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

namespace Symfony\\Component\\DependencyInjection\\Argument;

/**
 * @internal
 */
class RewindableGenerator implements \\IteratorAggregate, \\Countable
{
    private \$generator;
    private \$count;

    /**
     * @param int|callable \$count
     */
    public function __construct(callable \$generator, \$count)
    {
        \$this->generator = \$generator;
        \$this->count = \$count;
    }

    public function getIterator()
    {
        \$g = \$this->generator;

        return \$g();
    }

    public function count()
    {
        if (\\is_callable(\$count = \$this->count)) {
            \$this->count = \$count();
        }

        return \$this->count;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Argument/RewindableGenerator.php";
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

namespace Symfony\\Component\\DependencyInjection\\Argument;

/**
 * @internal
 */
class RewindableGenerator implements \\IteratorAggregate, \\Countable
{
    private \$generator;
    private \$count;

    /**
     * @param int|callable \$count
     */
    public function __construct(callable \$generator, \$count)
    {
        \$this->generator = \$generator;
        \$this->count = \$count;
    }

    public function getIterator()
    {
        \$g = \$this->generator;

        return \$g();
    }

    public function count()
    {
        if (\\is_callable(\$count = \$this->count)) {
            \$this->count = \$count();
        }

        return \$this->count;
    }
}
", "vendor/symfony/dependency-injection/Argument/RewindableGenerator.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Argument/RewindableGenerator.php");
    }
}
