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

/* vendor/symfony/dependency-injection/Compiler/ResolveParameterPlaceHoldersPass.php */
class __TwigTemplate_66f7259ad17718b13b317748db6075194b3e20ceed55bd740a23e7aab2914273 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Compiler/ResolveParameterPlaceHoldersPass.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Compiler/ResolveParameterPlaceHoldersPass.php"));

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
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Exception\\ParameterNotFoundException;

/**
 * Resolves all parameter placeholders \"%somevalue%\" to their real values.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class ResolveParameterPlaceHoldersPass extends AbstractRecursivePass
{
    private \$bag;
    private \$resolveArrays;

    public function __construct(bool \$resolveArrays = true)
    {
        \$this->resolveArrays = \$resolveArrays;
    }

    /**
     * {@inheritdoc}
     *
     * @throws ParameterNotFoundException
     */
    public function process(ContainerBuilder \$container)
    {
        \$this->bag = \$container->getParameterBag();

        try {
            parent::process(\$container);

            \$aliases = [];
            foreach (\$container->getAliases() as \$name => \$target) {
                \$this->currentId = \$name;
                \$aliases[\$this->bag->resolveValue(\$name)] = \$target;
            }
            \$container->setAliases(\$aliases);
        } catch (ParameterNotFoundException \$e) {
            \$e->setSourceId(\$this->currentId);

            throw \$e;
        }

        \$this->bag->resolve();
        \$this->bag = null;
    }

    protected function processValue(\$value, \$isRoot = false)
    {
        if (\\is_string(\$value)) {
            \$v = \$this->bag->resolveValue(\$value);

            return \$this->resolveArrays || !\$v || !\\is_array(\$v) ? \$v : \$value;
        }
        if (\$value instanceof Definition) {
            \$value->setBindings(\$this->processValue(\$value->getBindings()));
            \$changes = \$value->getChanges();
            if (isset(\$changes['class'])) {
                \$value->setClass(\$this->bag->resolveValue(\$value->getClass()));
            }
            if (isset(\$changes['file'])) {
                \$value->setFile(\$this->bag->resolveValue(\$value->getFile()));
            }
        }

        \$value = parent::processValue(\$value, \$isRoot);

        if (\$value && \\is_array(\$value)) {
            \$value = array_combine(\$this->bag->resolveValue(array_keys(\$value)), \$value);
        }

        return \$value;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Compiler/ResolveParameterPlaceHoldersPass.php";
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
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Exception\\ParameterNotFoundException;

/**
 * Resolves all parameter placeholders \"%somevalue%\" to their real values.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class ResolveParameterPlaceHoldersPass extends AbstractRecursivePass
{
    private \$bag;
    private \$resolveArrays;

    public function __construct(bool \$resolveArrays = true)
    {
        \$this->resolveArrays = \$resolveArrays;
    }

    /**
     * {@inheritdoc}
     *
     * @throws ParameterNotFoundException
     */
    public function process(ContainerBuilder \$container)
    {
        \$this->bag = \$container->getParameterBag();

        try {
            parent::process(\$container);

            \$aliases = [];
            foreach (\$container->getAliases() as \$name => \$target) {
                \$this->currentId = \$name;
                \$aliases[\$this->bag->resolveValue(\$name)] = \$target;
            }
            \$container->setAliases(\$aliases);
        } catch (ParameterNotFoundException \$e) {
            \$e->setSourceId(\$this->currentId);

            throw \$e;
        }

        \$this->bag->resolve();
        \$this->bag = null;
    }

    protected function processValue(\$value, \$isRoot = false)
    {
        if (\\is_string(\$value)) {
            \$v = \$this->bag->resolveValue(\$value);

            return \$this->resolveArrays || !\$v || !\\is_array(\$v) ? \$v : \$value;
        }
        if (\$value instanceof Definition) {
            \$value->setBindings(\$this->processValue(\$value->getBindings()));
            \$changes = \$value->getChanges();
            if (isset(\$changes['class'])) {
                \$value->setClass(\$this->bag->resolveValue(\$value->getClass()));
            }
            if (isset(\$changes['file'])) {
                \$value->setFile(\$this->bag->resolveValue(\$value->getFile()));
            }
        }

        \$value = parent::processValue(\$value, \$isRoot);

        if (\$value && \\is_array(\$value)) {
            \$value = array_combine(\$this->bag->resolveValue(array_keys(\$value)), \$value);
        }

        return \$value;
    }
}
", "vendor/symfony/dependency-injection/Compiler/ResolveParameterPlaceHoldersPass.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Compiler/ResolveParameterPlaceHoldersPass.php");
    }
}
