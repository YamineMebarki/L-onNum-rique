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

/* vendor/symfony/dependency-injection/Compiler/RemovePrivateAliasesPass.php */
class __TwigTemplate_098353f612236cb1408c978925551a03e2d558b63eda172c05c990e2d92783e2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Compiler/RemovePrivateAliasesPass.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Compiler/RemovePrivateAliasesPass.php"));

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

use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

/**
 * Remove private aliases from the container. They were only used to establish
 * dependencies between services, and these dependencies have been resolved in
 * one of the previous passes.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class RemovePrivateAliasesPass implements CompilerPassInterface
{
    /**
     * Removes private aliases from the ContainerBuilder.
     */
    public function process(ContainerBuilder \$container)
    {
        foreach (\$container->getAliases() as \$id => \$alias) {
            if (\$alias->isPublic()) {
                continue;
            }

            \$container->removeAlias(\$id);
            \$container->log(\$this, sprintf('Removed service \"%s\"; reason: private alias.', \$id));
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Compiler/RemovePrivateAliasesPass.php";
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

use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

/**
 * Remove private aliases from the container. They were only used to establish
 * dependencies between services, and these dependencies have been resolved in
 * one of the previous passes.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class RemovePrivateAliasesPass implements CompilerPassInterface
{
    /**
     * Removes private aliases from the ContainerBuilder.
     */
    public function process(ContainerBuilder \$container)
    {
        foreach (\$container->getAliases() as \$id => \$alias) {
            if (\$alias->isPublic()) {
                continue;
            }

            \$container->removeAlias(\$id);
            \$container->log(\$this, sprintf('Removed service \"%s\"; reason: private alias.', \$id));
        }
    }
}
", "vendor/symfony/dependency-injection/Compiler/RemovePrivateAliasesPass.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Compiler/RemovePrivateAliasesPass.php");
    }
}
