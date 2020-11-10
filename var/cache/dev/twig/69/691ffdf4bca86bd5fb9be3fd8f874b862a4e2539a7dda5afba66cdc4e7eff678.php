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

/* vendor/symfony/dependency-injection/ParameterBag/ContainerBag.php */
class __TwigTemplate_1f97af8b6635078d8adf8538c652de3a2fcb0bc19cb2ecb8f597cdc67b6b1de9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/ParameterBag/ContainerBag.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/ParameterBag/ContainerBag.php"));

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

namespace Symfony\\Component\\DependencyInjection\\ParameterBag;

use Symfony\\Component\\DependencyInjection\\Container;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class ContainerBag extends FrozenParameterBag implements ContainerBagInterface
{
    private \$container;

    public function __construct(Container \$container)
    {
        \$this->container = \$container;
    }

    /**
     * {@inheritdoc}
     */
    public function all()
    {
        return \$this->container->getParameterBag()->all();
    }

    /**
     * {@inheritdoc}
     */
    public function get(\$name)
    {
        return \$this->container->getParameter(\$name);
    }

    /**
     * {@inheritdoc}
     */
    public function has(\$name)
    {
        return \$this->container->hasParameter(\$name);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/ParameterBag/ContainerBag.php";
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

namespace Symfony\\Component\\DependencyInjection\\ParameterBag;

use Symfony\\Component\\DependencyInjection\\Container;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class ContainerBag extends FrozenParameterBag implements ContainerBagInterface
{
    private \$container;

    public function __construct(Container \$container)
    {
        \$this->container = \$container;
    }

    /**
     * {@inheritdoc}
     */
    public function all()
    {
        return \$this->container->getParameterBag()->all();
    }

    /**
     * {@inheritdoc}
     */
    public function get(\$name)
    {
        return \$this->container->getParameter(\$name);
    }

    /**
     * {@inheritdoc}
     */
    public function has(\$name)
    {
        return \$this->container->hasParameter(\$name);
    }
}
", "vendor/symfony/dependency-injection/ParameterBag/ContainerBag.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/ParameterBag/ContainerBag.php");
    }
}
