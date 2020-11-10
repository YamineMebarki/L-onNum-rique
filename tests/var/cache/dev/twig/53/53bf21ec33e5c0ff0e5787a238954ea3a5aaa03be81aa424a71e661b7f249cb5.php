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

/* vendor/symfony/dependency-injection/Loader/Configurator/Traits/BindTrait.php */
class __TwigTemplate_a8277872e9054d2de2289d00522a4ee9a81797b773c416a2fce0a5894569bf3b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Loader/Configurator/Traits/BindTrait.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Loader/Configurator/Traits/BindTrait.php"));

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

namespace Symfony\\Component\\DependencyInjection\\Loader\\Configurator\\Traits;

use Symfony\\Component\\DependencyInjection\\Argument\\BoundArgument;
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;
use Symfony\\Component\\DependencyInjection\\Loader\\Configurator\\DefaultsConfigurator;
use Symfony\\Component\\DependencyInjection\\Loader\\Configurator\\InstanceofConfigurator;
use Symfony\\Component\\DependencyInjection\\Reference;

trait BindTrait
{
    /**
     * Sets bindings.
     *
     * Bindings map \$named or FQCN arguments to values that should be
     * injected in the matching parameters (of the constructor, of methods
     * called and of controller actions).
     *
     * @param string \$nameOrFqcn A parameter name with its \"\$\" prefix, or a FQCN
     * @param mixed  \$valueOrRef The value or reference to bind
     *
     * @return \$this
     */
    final public function bind(\$nameOrFqcn, \$valueOrRef)
    {
        \$valueOrRef = static::processValue(\$valueOrRef, true);
        if (!preg_match('/^(?:(?:array|bool|float|int|string)[ \\t]*+)?\\\$/', \$nameOrFqcn) && !\$valueOrRef instanceof Reference) {
            throw new InvalidArgumentException(sprintf('Invalid binding for service \"%s\": named arguments must start with a \"\$\", and FQCN must map to references. Neither applies to binding \"%s\".', \$this->id, \$nameOrFqcn));
        }
        \$bindings = \$this->definition->getBindings();
        \$type = \$this instanceof DefaultsConfigurator ? BoundArgument::DEFAULTS_BINDING : (\$this instanceof InstanceofConfigurator ? BoundArgument::INSTANCEOF_BINDING : BoundArgument::SERVICE_BINDING);
        \$bindings[\$nameOrFqcn] = new BoundArgument(\$valueOrRef, true, \$type, \$this->path ?? null);
        \$this->definition->setBindings(\$bindings);

        return \$this;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Loader/Configurator/Traits/BindTrait.php";
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

namespace Symfony\\Component\\DependencyInjection\\Loader\\Configurator\\Traits;

use Symfony\\Component\\DependencyInjection\\Argument\\BoundArgument;
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;
use Symfony\\Component\\DependencyInjection\\Loader\\Configurator\\DefaultsConfigurator;
use Symfony\\Component\\DependencyInjection\\Loader\\Configurator\\InstanceofConfigurator;
use Symfony\\Component\\DependencyInjection\\Reference;

trait BindTrait
{
    /**
     * Sets bindings.
     *
     * Bindings map \$named or FQCN arguments to values that should be
     * injected in the matching parameters (of the constructor, of methods
     * called and of controller actions).
     *
     * @param string \$nameOrFqcn A parameter name with its \"\$\" prefix, or a FQCN
     * @param mixed  \$valueOrRef The value or reference to bind
     *
     * @return \$this
     */
    final public function bind(\$nameOrFqcn, \$valueOrRef)
    {
        \$valueOrRef = static::processValue(\$valueOrRef, true);
        if (!preg_match('/^(?:(?:array|bool|float|int|string)[ \\t]*+)?\\\$/', \$nameOrFqcn) && !\$valueOrRef instanceof Reference) {
            throw new InvalidArgumentException(sprintf('Invalid binding for service \"%s\": named arguments must start with a \"\$\", and FQCN must map to references. Neither applies to binding \"%s\".', \$this->id, \$nameOrFqcn));
        }
        \$bindings = \$this->definition->getBindings();
        \$type = \$this instanceof DefaultsConfigurator ? BoundArgument::DEFAULTS_BINDING : (\$this instanceof InstanceofConfigurator ? BoundArgument::INSTANCEOF_BINDING : BoundArgument::SERVICE_BINDING);
        \$bindings[\$nameOrFqcn] = new BoundArgument(\$valueOrRef, true, \$type, \$this->path ?? null);
        \$this->definition->setBindings(\$bindings);

        return \$this;
    }
}
", "vendor/symfony/dependency-injection/Loader/Configurator/Traits/BindTrait.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Loader/Configurator/Traits/BindTrait.php");
    }
}
