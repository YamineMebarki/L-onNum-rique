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

/* vendor/symfony/dependency-injection/Compiler/RepeatedPass.php */
class __TwigTemplate_8a77e28b9c1e92f706d8ef53e166c138661e09c836e92babc4be8a60e65c9bcf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Compiler/RepeatedPass.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Compiler/RepeatedPass.php"));

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

@trigger_error(sprintf('The \"%s\" class is deprecated since Symfony 4.2.', RepeatedPass::class), E_USER_DEPRECATED);

use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;

/**
 * A pass that might be run repeatedly.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 *
 * @deprecated since Symfony 4.2.
 */
class RepeatedPass implements CompilerPassInterface
{
    /**
     * @var bool
     */
    private \$repeat = false;

    private \$passes;

    /**
     * @param RepeatablePassInterface[] \$passes An array of RepeatablePassInterface objects
     *
     * @throws InvalidArgumentException when the passes don't implement RepeatablePassInterface
     */
    public function __construct(array \$passes)
    {
        foreach (\$passes as \$pass) {
            if (!\$pass instanceof RepeatablePassInterface) {
                throw new InvalidArgumentException('\$passes must be an array of RepeatablePassInterface.');
            }

            \$pass->setRepeatedPass(\$this);
        }

        \$this->passes = \$passes;
    }

    /**
     * Process the repeatable passes that run more than once.
     */
    public function process(ContainerBuilder \$container)
    {
        do {
            \$this->repeat = false;
            foreach (\$this->passes as \$pass) {
                \$pass->process(\$container);
            }
        } while (\$this->repeat);
    }

    /**
     * Sets if the pass should repeat.
     */
    public function setRepeat()
    {
        \$this->repeat = true;
    }

    /**
     * Returns the passes.
     *
     * @return RepeatablePassInterface[] An array of RepeatablePassInterface objects
     */
    public function getPasses()
    {
        return \$this->passes;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Compiler/RepeatedPass.php";
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

@trigger_error(sprintf('The \"%s\" class is deprecated since Symfony 4.2.', RepeatedPass::class), E_USER_DEPRECATED);

use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;

/**
 * A pass that might be run repeatedly.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 *
 * @deprecated since Symfony 4.2.
 */
class RepeatedPass implements CompilerPassInterface
{
    /**
     * @var bool
     */
    private \$repeat = false;

    private \$passes;

    /**
     * @param RepeatablePassInterface[] \$passes An array of RepeatablePassInterface objects
     *
     * @throws InvalidArgumentException when the passes don't implement RepeatablePassInterface
     */
    public function __construct(array \$passes)
    {
        foreach (\$passes as \$pass) {
            if (!\$pass instanceof RepeatablePassInterface) {
                throw new InvalidArgumentException('\$passes must be an array of RepeatablePassInterface.');
            }

            \$pass->setRepeatedPass(\$this);
        }

        \$this->passes = \$passes;
    }

    /**
     * Process the repeatable passes that run more than once.
     */
    public function process(ContainerBuilder \$container)
    {
        do {
            \$this->repeat = false;
            foreach (\$this->passes as \$pass) {
                \$pass->process(\$container);
            }
        } while (\$this->repeat);
    }

    /**
     * Sets if the pass should repeat.
     */
    public function setRepeat()
    {
        \$this->repeat = true;
    }

    /**
     * Returns the passes.
     *
     * @return RepeatablePassInterface[] An array of RepeatablePassInterface objects
     */
    public function getPasses()
    {
        return \$this->passes;
    }
}
", "vendor/symfony/dependency-injection/Compiler/RepeatedPass.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Compiler/RepeatedPass.php");
    }
}
