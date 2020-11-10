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

/* vendor/symfony/framework-bundle/Test/TestContainer.php */
class __TwigTemplate_56cc03ec461dddb3e725bb90e8cf568ec7ee185db657138186b3023753ee0661 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Test/TestContainer.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Test/TestContainer.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Test;

use Symfony\\Component\\DependencyInjection\\Container;
use Symfony\\Component\\HttpKernel\\KernelInterface;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
class TestContainer extends Container
{
    private \$kernel;
    private \$privateServicesLocatorId;

    public function __construct(KernelInterface \$kernel, string \$privateServicesLocatorId)
    {
        \$this->kernel = \$kernel;
        \$this->privateServicesLocatorId = \$privateServicesLocatorId;
    }

    /**
     * {@inheritdoc}
     */
    public function compile()
    {
        \$this->getPublicContainer()->compile();
    }

    /**
     * {@inheritdoc}
     */
    public function isCompiled()
    {
        return \$this->getPublicContainer()->isCompiled();
    }

    /**
     * {@inheritdoc}
     */
    public function getParameterBag()
    {
        return \$this->getPublicContainer()->getParameterBag();
    }

    /**
     * {@inheritdoc}
     */
    public function getParameter(\$name)
    {
        return \$this->getPublicContainer()->getParameter(\$name);
    }

    /**
     * {@inheritdoc}
     */
    public function hasParameter(\$name)
    {
        return \$this->getPublicContainer()->hasParameter(\$name);
    }

    /**
     * {@inheritdoc}
     */
    public function setParameter(\$name, \$value)
    {
        \$this->getPublicContainer()->setParameter(\$name, \$value);
    }

    /**
     * {@inheritdoc}
     */
    public function set(\$id, \$service)
    {
        \$this->getPublicContainer()->set(\$id, \$service);
    }

    /**
     * {@inheritdoc}
     */
    public function has(\$id)
    {
        return \$this->getPublicContainer()->has(\$id) || \$this->getPrivateContainer()->has(\$id);
    }

    /**
     * {@inheritdoc}
     */
    public function get(\$id, \$invalidBehavior = /* self::EXCEPTION_ON_INVALID_REFERENCE */ 1)
    {
        return \$this->getPrivateContainer()->has(\$id) ? \$this->getPrivateContainer()->get(\$id) : \$this->getPublicContainer()->get(\$id, \$invalidBehavior);
    }

    /**
     * {@inheritdoc}
     */
    public function initialized(\$id)
    {
        return \$this->getPublicContainer()->initialized(\$id);
    }

    /**
     * {@inheritdoc}
     */
    public function reset()
    {
        \$this->getPublicContainer()->reset();
    }

    /**
     * {@inheritdoc}
     */
    public function getServiceIds()
    {
        return \$this->getPublicContainer()->getServiceIds();
    }

    /**
     * {@inheritdoc}
     */
    public function getRemovedIds()
    {
        return \$this->getPublicContainer()->getRemovedIds();
    }

    private function getPublicContainer()
    {
        if (null === \$container = \$this->kernel->getContainer()) {
            throw new \\LogicException('Cannot access the container on a non-booted kernel. Did you forget to boot it?');
        }

        return \$container;
    }

    private function getPrivateContainer()
    {
        return \$this->getPublicContainer()->get(\$this->privateServicesLocatorId);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Test/TestContainer.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Test;

use Symfony\\Component\\DependencyInjection\\Container;
use Symfony\\Component\\HttpKernel\\KernelInterface;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
class TestContainer extends Container
{
    private \$kernel;
    private \$privateServicesLocatorId;

    public function __construct(KernelInterface \$kernel, string \$privateServicesLocatorId)
    {
        \$this->kernel = \$kernel;
        \$this->privateServicesLocatorId = \$privateServicesLocatorId;
    }

    /**
     * {@inheritdoc}
     */
    public function compile()
    {
        \$this->getPublicContainer()->compile();
    }

    /**
     * {@inheritdoc}
     */
    public function isCompiled()
    {
        return \$this->getPublicContainer()->isCompiled();
    }

    /**
     * {@inheritdoc}
     */
    public function getParameterBag()
    {
        return \$this->getPublicContainer()->getParameterBag();
    }

    /**
     * {@inheritdoc}
     */
    public function getParameter(\$name)
    {
        return \$this->getPublicContainer()->getParameter(\$name);
    }

    /**
     * {@inheritdoc}
     */
    public function hasParameter(\$name)
    {
        return \$this->getPublicContainer()->hasParameter(\$name);
    }

    /**
     * {@inheritdoc}
     */
    public function setParameter(\$name, \$value)
    {
        \$this->getPublicContainer()->setParameter(\$name, \$value);
    }

    /**
     * {@inheritdoc}
     */
    public function set(\$id, \$service)
    {
        \$this->getPublicContainer()->set(\$id, \$service);
    }

    /**
     * {@inheritdoc}
     */
    public function has(\$id)
    {
        return \$this->getPublicContainer()->has(\$id) || \$this->getPrivateContainer()->has(\$id);
    }

    /**
     * {@inheritdoc}
     */
    public function get(\$id, \$invalidBehavior = /* self::EXCEPTION_ON_INVALID_REFERENCE */ 1)
    {
        return \$this->getPrivateContainer()->has(\$id) ? \$this->getPrivateContainer()->get(\$id) : \$this->getPublicContainer()->get(\$id, \$invalidBehavior);
    }

    /**
     * {@inheritdoc}
     */
    public function initialized(\$id)
    {
        return \$this->getPublicContainer()->initialized(\$id);
    }

    /**
     * {@inheritdoc}
     */
    public function reset()
    {
        \$this->getPublicContainer()->reset();
    }

    /**
     * {@inheritdoc}
     */
    public function getServiceIds()
    {
        return \$this->getPublicContainer()->getServiceIds();
    }

    /**
     * {@inheritdoc}
     */
    public function getRemovedIds()
    {
        return \$this->getPublicContainer()->getRemovedIds();
    }

    private function getPublicContainer()
    {
        if (null === \$container = \$this->kernel->getContainer()) {
            throw new \\LogicException('Cannot access the container on a non-booted kernel. Did you forget to boot it?');
        }

        return \$container;
    }

    private function getPrivateContainer()
    {
        return \$this->getPublicContainer()->get(\$this->privateServicesLocatorId);
    }
}
", "vendor/symfony/framework-bundle/Test/TestContainer.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Test/TestContainer.php");
    }
}
