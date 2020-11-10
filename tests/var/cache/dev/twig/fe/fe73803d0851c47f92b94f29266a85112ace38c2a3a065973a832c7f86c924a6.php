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

/* vendor/symfony/dependency-injection/Compiler/ResolveHotPathPass.php */
class __TwigTemplate_44a1f193fed043560957344e4f2c26819727eb4fb6b68a4de2f129d8b505b4d2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Compiler/ResolveHotPathPass.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Compiler/ResolveHotPathPass.php"));

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

namespace Symfony\\Component\\DependencyInjection\\Compiler;

use Symfony\\Component\\DependencyInjection\\Argument\\ArgumentInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Propagate \"container.hot_path\" tags to referenced services.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class ResolveHotPathPass extends AbstractRecursivePass
{
    private \$tagName;
    private \$resolvedIds = [];

    public function __construct(\$tagName = 'container.hot_path')
    {
        \$this->tagName = \$tagName;
    }

    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder \$container)
    {
        try {
            parent::process(\$container);
            \$container->getDefinition('service_container')->clearTag(\$this->tagName);
        } finally {
            \$this->resolvedIds = [];
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function processValue(\$value, \$isRoot = false)
    {
        if (\$value instanceof ArgumentInterface) {
            return \$value;
        }
        if (\$value instanceof Definition && \$isRoot && (isset(\$this->resolvedIds[\$this->currentId]) || !\$value->hasTag(\$this->tagName) || \$value->isDeprecated())) {
            return \$value->isDeprecated() ? \$value->clearTag(\$this->tagName) : \$value;
        }
        if (\$value instanceof Reference && ContainerBuilder::IGNORE_ON_UNINITIALIZED_REFERENCE !== \$value->getInvalidBehavior() && \$this->container->has(\$id = (string) \$value)) {
            \$definition = \$this->container->findDefinition(\$id);
            if (!\$definition->hasTag(\$this->tagName) && !\$definition->isDeprecated()) {
                \$this->resolvedIds[\$id] = true;
                \$definition->addTag(\$this->tagName);
                parent::processValue(\$definition, false);
            }

            return \$value;
        }

        return parent::processValue(\$value, \$isRoot);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Compiler/ResolveHotPathPass.php";
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

namespace Symfony\\Component\\DependencyInjection\\Compiler;

use Symfony\\Component\\DependencyInjection\\Argument\\ArgumentInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Propagate \"container.hot_path\" tags to referenced services.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class ResolveHotPathPass extends AbstractRecursivePass
{
    private \$tagName;
    private \$resolvedIds = [];

    public function __construct(\$tagName = 'container.hot_path')
    {
        \$this->tagName = \$tagName;
    }

    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder \$container)
    {
        try {
            parent::process(\$container);
            \$container->getDefinition('service_container')->clearTag(\$this->tagName);
        } finally {
            \$this->resolvedIds = [];
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function processValue(\$value, \$isRoot = false)
    {
        if (\$value instanceof ArgumentInterface) {
            return \$value;
        }
        if (\$value instanceof Definition && \$isRoot && (isset(\$this->resolvedIds[\$this->currentId]) || !\$value->hasTag(\$this->tagName) || \$value->isDeprecated())) {
            return \$value->isDeprecated() ? \$value->clearTag(\$this->tagName) : \$value;
        }
        if (\$value instanceof Reference && ContainerBuilder::IGNORE_ON_UNINITIALIZED_REFERENCE !== \$value->getInvalidBehavior() && \$this->container->has(\$id = (string) \$value)) {
            \$definition = \$this->container->findDefinition(\$id);
            if (!\$definition->hasTag(\$this->tagName) && !\$definition->isDeprecated()) {
                \$this->resolvedIds[\$id] = true;
                \$definition->addTag(\$this->tagName);
                parent::processValue(\$definition, false);
            }

            return \$value;
        }

        return parent::processValue(\$value, \$isRoot);
    }
}
", "vendor/symfony/dependency-injection/Compiler/ResolveHotPathPass.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Compiler/ResolveHotPathPass.php");
    }
}
