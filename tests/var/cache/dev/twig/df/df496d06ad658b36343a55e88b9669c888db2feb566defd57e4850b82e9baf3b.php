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

/* vendor/symfony/dependency-injection/Config/ContainerParametersResourceChecker.php */
class __TwigTemplate_4fe009696784f675e6e10152fef222339509ea2c137ae9b46e419f1572001835 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Config/ContainerParametersResourceChecker.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Config/ContainerParametersResourceChecker.php"));

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

namespace Symfony\\Component\\DependencyInjection\\Config;

use Symfony\\Component\\Config\\Resource\\ResourceInterface;
use Symfony\\Component\\Config\\ResourceCheckerInterface;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;

/**
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */
class ContainerParametersResourceChecker implements ResourceCheckerInterface
{
    /** @var ContainerInterface */
    private \$container;

    public function __construct(ContainerInterface \$container)
    {
        \$this->container = \$container;
    }

    /**
     * {@inheritdoc}
     */
    public function supports(ResourceInterface \$metadata)
    {
        return \$metadata instanceof ContainerParametersResource;
    }

    /**
     * {@inheritdoc}
     */
    public function isFresh(ResourceInterface \$resource, \$timestamp)
    {
        foreach (\$resource->getParameters() as \$key => \$value) {
            if (!\$this->container->hasParameter(\$key) || \$this->container->getParameter(\$key) !== \$value) {
                return false;
            }
        }

        return true;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Config/ContainerParametersResourceChecker.php";
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

namespace Symfony\\Component\\DependencyInjection\\Config;

use Symfony\\Component\\Config\\Resource\\ResourceInterface;
use Symfony\\Component\\Config\\ResourceCheckerInterface;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;

/**
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */
class ContainerParametersResourceChecker implements ResourceCheckerInterface
{
    /** @var ContainerInterface */
    private \$container;

    public function __construct(ContainerInterface \$container)
    {
        \$this->container = \$container;
    }

    /**
     * {@inheritdoc}
     */
    public function supports(ResourceInterface \$metadata)
    {
        return \$metadata instanceof ContainerParametersResource;
    }

    /**
     * {@inheritdoc}
     */
    public function isFresh(ResourceInterface \$resource, \$timestamp)
    {
        foreach (\$resource->getParameters() as \$key => \$value) {
            if (!\$this->container->hasParameter(\$key) || \$this->container->getParameter(\$key) !== \$value) {
                return false;
            }
        }

        return true;
    }
}
", "vendor/symfony/dependency-injection/Config/ContainerParametersResourceChecker.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Config/ContainerParametersResourceChecker.php");
    }
}
