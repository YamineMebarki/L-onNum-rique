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

/* vendor/symfony/http-kernel/DependencyInjection/ResettableServicePass.php */
class __TwigTemplate_a2086f2a1290cf0b6720541e801bd893d096f232b1f80ff200c4af03a770fd5a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/DependencyInjection/ResettableServicePass.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/DependencyInjection/ResettableServicePass.php"));

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

namespace Symfony\\Component\\HttpKernel\\DependencyInjection;

use Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * @author Alexander M. Turek <me@derrabus.de>
 */
class ResettableServicePass implements CompilerPassInterface
{
    private \$tagName;

    public function __construct(string \$tagName = 'kernel.reset')
    {
        \$this->tagName = \$tagName;
    }

    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder \$container)
    {
        if (!\$container->has('services_resetter')) {
            return;
        }

        \$services = \$methods = [];

        foreach (\$container->findTaggedServiceIds(\$this->tagName, true) as \$id => \$tags) {
            \$services[\$id] = new Reference(\$id, ContainerInterface::IGNORE_ON_UNINITIALIZED_REFERENCE);
            \$attributes = \$tags[0];

            if (!isset(\$attributes['method'])) {
                throw new RuntimeException(sprintf('Tag %s requires the \"method\" attribute to be set.', \$this->tagName));
            }

            \$methods[\$id] = \$attributes['method'];
        }

        if (empty(\$services)) {
            \$container->removeAlias('services_resetter');
            \$container->removeDefinition('services_resetter');

            return;
        }

        \$container->findDefinition('services_resetter')
            ->setArgument(0, new IteratorArgument(\$services))
            ->setArgument(1, \$methods);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/DependencyInjection/ResettableServicePass.php";
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

namespace Symfony\\Component\\HttpKernel\\DependencyInjection;

use Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * @author Alexander M. Turek <me@derrabus.de>
 */
class ResettableServicePass implements CompilerPassInterface
{
    private \$tagName;

    public function __construct(string \$tagName = 'kernel.reset')
    {
        \$this->tagName = \$tagName;
    }

    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder \$container)
    {
        if (!\$container->has('services_resetter')) {
            return;
        }

        \$services = \$methods = [];

        foreach (\$container->findTaggedServiceIds(\$this->tagName, true) as \$id => \$tags) {
            \$services[\$id] = new Reference(\$id, ContainerInterface::IGNORE_ON_UNINITIALIZED_REFERENCE);
            \$attributes = \$tags[0];

            if (!isset(\$attributes['method'])) {
                throw new RuntimeException(sprintf('Tag %s requires the \"method\" attribute to be set.', \$this->tagName));
            }

            \$methods[\$id] = \$attributes['method'];
        }

        if (empty(\$services)) {
            \$container->removeAlias('services_resetter');
            \$container->removeDefinition('services_resetter');

            return;
        }

        \$container->findDefinition('services_resetter')
            ->setArgument(0, new IteratorArgument(\$services))
            ->setArgument(1, \$methods);
    }
}
", "vendor/symfony/http-kernel/DependencyInjection/ResettableServicePass.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/DependencyInjection/ResettableServicePass.php");
    }
}
