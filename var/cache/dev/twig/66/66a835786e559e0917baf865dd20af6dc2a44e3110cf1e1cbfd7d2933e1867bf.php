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

/* vendor/symfony/service-contracts/ServiceSubscriberTrait.php */
class __TwigTemplate_390d8412eb2833e90b879862fd3540ef4c0daa40e8afb9e1d403bb5b2ba27d63 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/service-contracts/ServiceSubscriberTrait.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/service-contracts/ServiceSubscriberTrait.php"));

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

namespace Symfony\\Contracts\\Service;

use Psr\\Container\\ContainerInterface;

/**
 * Implementation of ServiceSubscriberInterface that determines subscribed services from
 * private method return types. Service ids are available as \"ClassName::methodName\".
 *
 * @author Kevin Bond <kevinbond@gmail.com>
 */
trait ServiceSubscriberTrait
{
    /** @var ContainerInterface */
    protected \$container;

    public static function getSubscribedServices(): array
    {
        static \$services;

        if (null !== \$services) {
            return \$services;
        }

        \$services = \\is_callable(['parent', __FUNCTION__]) ? parent::getSubscribedServices() : [];

        foreach ((new \\ReflectionClass(self::class))->getMethods() as \$method) {
            if (\$method->isStatic() || \$method->isAbstract() || \$method->isGenerator() || \$method->isInternal() || \$method->getNumberOfRequiredParameters()) {
                continue;
            }

            if (self::class === \$method->getDeclaringClass()->name && (\$returnType = \$method->getReturnType()) && !\$returnType->isBuiltin()) {
                \$services[self::class.'::'.\$method->name] = '?'.\$returnType->getName();
            }
        }

        return \$services;
    }

    /**
     * @required
     */
    public function setContainer(ContainerInterface \$container)
    {
        \$this->container = \$container;

        if (\\is_callable(['parent', __FUNCTION__])) {
            return parent::setContainer(\$container);
        }

        return null;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/service-contracts/ServiceSubscriberTrait.php";
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

namespace Symfony\\Contracts\\Service;

use Psr\\Container\\ContainerInterface;

/**
 * Implementation of ServiceSubscriberInterface that determines subscribed services from
 * private method return types. Service ids are available as \"ClassName::methodName\".
 *
 * @author Kevin Bond <kevinbond@gmail.com>
 */
trait ServiceSubscriberTrait
{
    /** @var ContainerInterface */
    protected \$container;

    public static function getSubscribedServices(): array
    {
        static \$services;

        if (null !== \$services) {
            return \$services;
        }

        \$services = \\is_callable(['parent', __FUNCTION__]) ? parent::getSubscribedServices() : [];

        foreach ((new \\ReflectionClass(self::class))->getMethods() as \$method) {
            if (\$method->isStatic() || \$method->isAbstract() || \$method->isGenerator() || \$method->isInternal() || \$method->getNumberOfRequiredParameters()) {
                continue;
            }

            if (self::class === \$method->getDeclaringClass()->name && (\$returnType = \$method->getReturnType()) && !\$returnType->isBuiltin()) {
                \$services[self::class.'::'.\$method->name] = '?'.\$returnType->getName();
            }
        }

        return \$services;
    }

    /**
     * @required
     */
    public function setContainer(ContainerInterface \$container)
    {
        \$this->container = \$container;

        if (\\is_callable(['parent', __FUNCTION__])) {
            return parent::setContainer(\$container);
        }

        return null;
    }
}
", "vendor/symfony/service-contracts/ServiceSubscriberTrait.php", "/var/www/public/DevLaon/templates/vendor/symfony/service-contracts/ServiceSubscriberTrait.php");
    }
}
