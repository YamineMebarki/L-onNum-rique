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

/* vendor/symfony/framework-bundle/Templating/DelegatingEngine.php */
class __TwigTemplate_1b7f17366d88832266cf4ba33ea2f3f022d62d554796b80ec572d1c6d8693264 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Templating/DelegatingEngine.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Templating/DelegatingEngine.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Templating;

@trigger_error('The '.DelegatingEngine::class.' class is deprecated since version 4.3 and will be removed in 5.0; use Twig instead.', E_USER_DEPRECATED);

use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Templating\\DelegatingEngine as BaseDelegatingEngine;

/**
 * DelegatingEngine selects an engine for a given template.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @deprecated since version 4.3, to be removed in 5.0; use Twig instead.
 */
class DelegatingEngine extends BaseDelegatingEngine implements EngineInterface
{
    protected \$container;

    public function __construct(ContainerInterface \$container, array \$engineIds)
    {
        \$this->container = \$container;
        \$this->engines = \$engineIds;
    }

    /**
     * {@inheritdoc}
     */
    public function getEngine(\$name)
    {
        \$this->resolveEngines();

        return parent::getEngine(\$name);
    }

    /**
     * {@inheritdoc}
     */
    public function renderResponse(\$view, array \$parameters = [], Response \$response = null)
    {
        \$engine = \$this->getEngine(\$view);

        if (\$engine instanceof EngineInterface) {
            return \$engine->renderResponse(\$view, \$parameters, \$response);
        }

        if (null === \$response) {
            \$response = new Response();
        }

        \$response->setContent(\$engine->render(\$view, \$parameters));

        return \$response;
    }

    /**
     * Resolved engine ids to their real engine instances from the container.
     */
    private function resolveEngines()
    {
        foreach (\$this->engines as \$i => \$engine) {
            if (\\is_string(\$engine)) {
                \$this->engines[\$i] = \$this->container->get(\$engine);
            }
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Templating/DelegatingEngine.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Templating;

@trigger_error('The '.DelegatingEngine::class.' class is deprecated since version 4.3 and will be removed in 5.0; use Twig instead.', E_USER_DEPRECATED);

use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Templating\\DelegatingEngine as BaseDelegatingEngine;

/**
 * DelegatingEngine selects an engine for a given template.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @deprecated since version 4.3, to be removed in 5.0; use Twig instead.
 */
class DelegatingEngine extends BaseDelegatingEngine implements EngineInterface
{
    protected \$container;

    public function __construct(ContainerInterface \$container, array \$engineIds)
    {
        \$this->container = \$container;
        \$this->engines = \$engineIds;
    }

    /**
     * {@inheritdoc}
     */
    public function getEngine(\$name)
    {
        \$this->resolveEngines();

        return parent::getEngine(\$name);
    }

    /**
     * {@inheritdoc}
     */
    public function renderResponse(\$view, array \$parameters = [], Response \$response = null)
    {
        \$engine = \$this->getEngine(\$view);

        if (\$engine instanceof EngineInterface) {
            return \$engine->renderResponse(\$view, \$parameters, \$response);
        }

        if (null === \$response) {
            \$response = new Response();
        }

        \$response->setContent(\$engine->render(\$view, \$parameters));

        return \$response;
    }

    /**
     * Resolved engine ids to their real engine instances from the container.
     */
    private function resolveEngines()
    {
        foreach (\$this->engines as \$i => \$engine) {
            if (\\is_string(\$engine)) {
                \$this->engines[\$i] = \$this->container->get(\$engine);
            }
        }
    }
}
", "vendor/symfony/framework-bundle/Templating/DelegatingEngine.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Templating/DelegatingEngine.php");
    }
}
