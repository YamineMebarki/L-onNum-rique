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

/* vendor/doctrine/doctrine-bundle/Mapping/ContainerEntityListenerResolver.php */
class __TwigTemplate_b41da47952e259836a3fd731230b71ca994f0ebff604a5bb6509159b1d7ee398 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-bundle/Mapping/ContainerEntityListenerResolver.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-bundle/Mapping/ContainerEntityListenerResolver.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Bundle\\DoctrineBundle\\Mapping;

use InvalidArgumentException;
use Psr\\Container\\ContainerInterface;
use RuntimeException;

/**
 * @final
 */
class ContainerEntityListenerResolver implements EntityListenerServiceResolver
{
    /** @var ContainerInterface */
    private \$container;

    /** @var object[] Map to store entity listener instances. */
    private \$instances = [];

    /** @var string[] Map to store registered service ids */
    private \$serviceIds = [];

    /**
     * @param ContainerInterface \$container a service locator for listeners
     */
    public function __construct(ContainerInterface \$container)
    {
        \$this->container = \$container;
    }

    /**
     * {@inheritdoc}
     */
    public function clear(\$className = null)
    {
        if (\$className === null) {
            \$this->instances = [];

            return;
        }

        \$className = \$this->normalizeClassName(\$className);

        unset(\$this->instances[\$className]);
    }

    /**
     * {@inheritdoc}
     */
    public function register(\$object)
    {
        if (! is_object(\$object)) {
            throw new InvalidArgumentException(sprintf('An object was expected, but got \"%s\".', gettype(\$object)));
        }

        \$className = \$this->normalizeClassName(get_class(\$object));

        \$this->instances[\$className] = \$object;
    }

    /**
     * {@inheritdoc}
     */
    public function registerService(\$className, \$serviceId)
    {
        \$this->serviceIds[\$this->normalizeClassName(\$className)] = \$serviceId;
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(\$className)
    {
        \$className = \$this->normalizeClassName(\$className);

        if (! isset(\$this->instances[\$className])) {
            if (isset(\$this->serviceIds[\$className])) {
                \$this->instances[\$className] = \$this->resolveService(\$this->serviceIds[\$className]);
            } else {
                \$this->instances[\$className] = new \$className();
            }
        }

        return \$this->instances[\$className];
    }

    /**
     * @return object
     */
    private function resolveService(string \$serviceId)
    {
        if (! \$this->container->has(\$serviceId)) {
            throw new RuntimeException(sprintf('There is no service named \"%s\"', \$serviceId));
        }

        return \$this->container->get(\$serviceId);
    }

    private function normalizeClassName(string \$className) : string
    {
        return trim(\$className, '\\\\');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/doctrine-bundle/Mapping/ContainerEntityListenerResolver.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Bundle\\DoctrineBundle\\Mapping;

use InvalidArgumentException;
use Psr\\Container\\ContainerInterface;
use RuntimeException;

/**
 * @final
 */
class ContainerEntityListenerResolver implements EntityListenerServiceResolver
{
    /** @var ContainerInterface */
    private \$container;

    /** @var object[] Map to store entity listener instances. */
    private \$instances = [];

    /** @var string[] Map to store registered service ids */
    private \$serviceIds = [];

    /**
     * @param ContainerInterface \$container a service locator for listeners
     */
    public function __construct(ContainerInterface \$container)
    {
        \$this->container = \$container;
    }

    /**
     * {@inheritdoc}
     */
    public function clear(\$className = null)
    {
        if (\$className === null) {
            \$this->instances = [];

            return;
        }

        \$className = \$this->normalizeClassName(\$className);

        unset(\$this->instances[\$className]);
    }

    /**
     * {@inheritdoc}
     */
    public function register(\$object)
    {
        if (! is_object(\$object)) {
            throw new InvalidArgumentException(sprintf('An object was expected, but got \"%s\".', gettype(\$object)));
        }

        \$className = \$this->normalizeClassName(get_class(\$object));

        \$this->instances[\$className] = \$object;
    }

    /**
     * {@inheritdoc}
     */
    public function registerService(\$className, \$serviceId)
    {
        \$this->serviceIds[\$this->normalizeClassName(\$className)] = \$serviceId;
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(\$className)
    {
        \$className = \$this->normalizeClassName(\$className);

        if (! isset(\$this->instances[\$className])) {
            if (isset(\$this->serviceIds[\$className])) {
                \$this->instances[\$className] = \$this->resolveService(\$this->serviceIds[\$className]);
            } else {
                \$this->instances[\$className] = new \$className();
            }
        }

        return \$this->instances[\$className];
    }

    /**
     * @return object
     */
    private function resolveService(string \$serviceId)
    {
        if (! \$this->container->has(\$serviceId)) {
            throw new RuntimeException(sprintf('There is no service named \"%s\"', \$serviceId));
        }

        return \$this->container->get(\$serviceId);
    }

    private function normalizeClassName(string \$className) : string
    {
        return trim(\$className, '\\\\');
    }
}
", "vendor/doctrine/doctrine-bundle/Mapping/ContainerEntityListenerResolver.php", "/var/www/public/DevLaon/templates/vendor/doctrine/doctrine-bundle/Mapping/ContainerEntityListenerResolver.php");
    }
}
