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

/* vendor/symfony/dependency-injection/Loader/Configurator/Traits/ParentTrait.php */
class __TwigTemplate_62c34c7eea6ea89a5128b118916df8ce14a0069f0eef31638f82196b9c6bad90 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Loader/Configurator/Traits/ParentTrait.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Loader/Configurator/Traits/ParentTrait.php"));

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

use Symfony\\Component\\DependencyInjection\\ChildDefinition;
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;

trait ParentTrait
{
    /**
     * Sets the Definition to inherit from.
     *
     * @return \$this
     *
     * @throws InvalidArgumentException when parent cannot be set
     */
    final public function parent(string \$parent)
    {
        if (!\$this->allowParent) {
            throw new InvalidArgumentException(sprintf('A parent cannot be defined when either \"_instanceof\" or \"_defaults\" are also defined for service prototype \"%s\".', \$this->id));
        }

        if (\$this->definition instanceof ChildDefinition) {
            \$this->definition->setParent(\$parent);
        } elseif (\$this->definition->isAutoconfigured()) {
            throw new InvalidArgumentException(sprintf('The service \"%s\" cannot have a \"parent\" and also have \"autoconfigure\". Try disabling autoconfiguration for the service.', \$this->id));
        } elseif (\$this->definition->getBindings()) {
            throw new InvalidArgumentException(sprintf('The service \"%s\" cannot have a \"parent\" and also \"bind\" arguments.', \$this->id));
        } else {
            // cast Definition to ChildDefinition
            \$definition = serialize(\$this->definition);
            \$definition = substr_replace(\$definition, '53', 2, 2);
            \$definition = substr_replace(\$definition, 'Child', 44, 0);
            \$definition = unserialize(\$definition);

            \$this->definition = \$definition->setParent(\$parent);
        }

        return \$this;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Loader/Configurator/Traits/ParentTrait.php";
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

use Symfony\\Component\\DependencyInjection\\ChildDefinition;
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;

trait ParentTrait
{
    /**
     * Sets the Definition to inherit from.
     *
     * @return \$this
     *
     * @throws InvalidArgumentException when parent cannot be set
     */
    final public function parent(string \$parent)
    {
        if (!\$this->allowParent) {
            throw new InvalidArgumentException(sprintf('A parent cannot be defined when either \"_instanceof\" or \"_defaults\" are also defined for service prototype \"%s\".', \$this->id));
        }

        if (\$this->definition instanceof ChildDefinition) {
            \$this->definition->setParent(\$parent);
        } elseif (\$this->definition->isAutoconfigured()) {
            throw new InvalidArgumentException(sprintf('The service \"%s\" cannot have a \"parent\" and also have \"autoconfigure\". Try disabling autoconfiguration for the service.', \$this->id));
        } elseif (\$this->definition->getBindings()) {
            throw new InvalidArgumentException(sprintf('The service \"%s\" cannot have a \"parent\" and also \"bind\" arguments.', \$this->id));
        } else {
            // cast Definition to ChildDefinition
            \$definition = serialize(\$this->definition);
            \$definition = substr_replace(\$definition, '53', 2, 2);
            \$definition = substr_replace(\$definition, 'Child', 44, 0);
            \$definition = unserialize(\$definition);

            \$this->definition = \$definition->setParent(\$parent);
        }

        return \$this;
    }
}
", "vendor/symfony/dependency-injection/Loader/Configurator/Traits/ParentTrait.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Loader/Configurator/Traits/ParentTrait.php");
    }
}
