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

/* vendor/symfony/dependency-injection/Loader/Configurator/ReferenceConfigurator.php */
class __TwigTemplate_fa452eaa1dd15d8746797e72e6cd36972e9c23ebf597b349e33f0246b8c1d32a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Loader/Configurator/ReferenceConfigurator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Loader/Configurator/ReferenceConfigurator.php"));

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

namespace Symfony\\Component\\DependencyInjection\\Loader\\Configurator;

use Symfony\\Component\\DependencyInjection\\ContainerInterface;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class ReferenceConfigurator extends AbstractConfigurator
{
    /** @internal */
    protected \$id;

    /** @internal */
    protected \$invalidBehavior = ContainerInterface::EXCEPTION_ON_INVALID_REFERENCE;

    public function __construct(string \$id)
    {
        \$this->id = \$id;
    }

    /**
     * @return \$this
     */
    final public function ignoreOnInvalid()
    {
        \$this->invalidBehavior = ContainerInterface::IGNORE_ON_INVALID_REFERENCE;

        return \$this;
    }

    /**
     * @return \$this
     */
    final public function nullOnInvalid()
    {
        \$this->invalidBehavior = ContainerInterface::NULL_ON_INVALID_REFERENCE;

        return \$this;
    }

    /**
     * @return \$this
     */
    final public function ignoreOnUninitialized()
    {
        \$this->invalidBehavior = ContainerInterface::IGNORE_ON_UNINITIALIZED_REFERENCE;

        return \$this;
    }

    public function __toString()
    {
        return \$this->id;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Loader/Configurator/ReferenceConfigurator.php";
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

namespace Symfony\\Component\\DependencyInjection\\Loader\\Configurator;

use Symfony\\Component\\DependencyInjection\\ContainerInterface;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class ReferenceConfigurator extends AbstractConfigurator
{
    /** @internal */
    protected \$id;

    /** @internal */
    protected \$invalidBehavior = ContainerInterface::EXCEPTION_ON_INVALID_REFERENCE;

    public function __construct(string \$id)
    {
        \$this->id = \$id;
    }

    /**
     * @return \$this
     */
    final public function ignoreOnInvalid()
    {
        \$this->invalidBehavior = ContainerInterface::IGNORE_ON_INVALID_REFERENCE;

        return \$this;
    }

    /**
     * @return \$this
     */
    final public function nullOnInvalid()
    {
        \$this->invalidBehavior = ContainerInterface::NULL_ON_INVALID_REFERENCE;

        return \$this;
    }

    /**
     * @return \$this
     */
    final public function ignoreOnUninitialized()
    {
        \$this->invalidBehavior = ContainerInterface::IGNORE_ON_UNINITIALIZED_REFERENCE;

        return \$this;
    }

    public function __toString()
    {
        return \$this->id;
    }
}
", "vendor/symfony/dependency-injection/Loader/Configurator/ReferenceConfigurator.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Loader/Configurator/ReferenceConfigurator.php");
    }
}
