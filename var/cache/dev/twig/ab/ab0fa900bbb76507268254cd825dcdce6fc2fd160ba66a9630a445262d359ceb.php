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

/* vendor/symfony/service-contracts/ServiceLocatorTrait.php */
class __TwigTemplate_a9caebb0f1f199bb6817fca43ba0d6e642e8287f013cea5855851628f1296134 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/service-contracts/ServiceLocatorTrait.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/service-contracts/ServiceLocatorTrait.php"));

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

use Psr\\Container\\ContainerExceptionInterface;
use Psr\\Container\\NotFoundExceptionInterface;

/**
 * A trait to help implement ServiceProviderInterface.
 *
 * @author Robin Chalas <robin.chalas@gmail.com>
 * @author Nicolas Grekas <p@tchwork.com>
 */
trait ServiceLocatorTrait
{
    private \$factories;
    private \$loading = [];
    private \$providedTypes;

    /**
     * @param callable[] \$factories
     */
    public function __construct(array \$factories)
    {
        \$this->factories = \$factories;
    }

    /**
     * {@inheritdoc}
     *
     * @return bool
     */
    public function has(\$id)
    {
        return isset(\$this->factories[\$id]);
    }

    /**
     * {@inheritdoc}
     */
    public function get(\$id)
    {
        if (!isset(\$this->factories[\$id])) {
            throw \$this->createNotFoundException(\$id);
        }

        if (isset(\$this->loading[\$id])) {
            \$ids = array_values(\$this->loading);
            \$ids = \\array_slice(\$this->loading, array_search(\$id, \$ids));
            \$ids[] = \$id;

            throw \$this->createCircularReferenceException(\$id, \$ids);
        }

        \$this->loading[\$id] = \$id;
        try {
            return \$this->factories[\$id](\$this);
        } finally {
            unset(\$this->loading[\$id]);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getProvidedServices(): array
    {
        if (null === \$this->providedTypes) {
            \$this->providedTypes = [];

            foreach (\$this->factories as \$name => \$factory) {
                if (!\\is_callable(\$factory)) {
                    \$this->providedTypes[\$name] = '?';
                } else {
                    \$type = (new \\ReflectionFunction(\$factory))->getReturnType();

                    \$this->providedTypes[\$name] = \$type ? (\$type->allowsNull() ? '?' : '').\$type->getName() : '?';
                }
            }
        }

        return \$this->providedTypes;
    }

    private function createNotFoundException(string \$id): NotFoundExceptionInterface
    {
        if (!\$alternatives = array_keys(\$this->factories)) {
            \$message = 'is empty...';
        } else {
            \$last = array_pop(\$alternatives);
            if (\$alternatives) {
                \$message = sprintf('only knows about the \"%s\" and \"%s\" services.', implode('\", \"', \$alternatives), \$last);
            } else {
                \$message = sprintf('only knows about the \"%s\" service.', \$last);
            }
        }

        if (\$this->loading) {
            \$message = sprintf('The service \"%s\" has a dependency on a non-existent service \"%s\". This locator %s', end(\$this->loading), \$id, \$message);
        } else {
            \$message = sprintf('Service \"%s\" not found: the current service locator %s', \$id, \$message);
        }

        return new class(\$message) extends \\InvalidArgumentException implements NotFoundExceptionInterface {
        };
    }

    private function createCircularReferenceException(string \$id, array \$path): ContainerExceptionInterface
    {
        return new class(sprintf('Circular reference detected for service \"%s\", path: \"%s\".', \$id, implode(' -> ', \$path))) extends \\RuntimeException implements ContainerExceptionInterface {
        };
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/service-contracts/ServiceLocatorTrait.php";
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

use Psr\\Container\\ContainerExceptionInterface;
use Psr\\Container\\NotFoundExceptionInterface;

/**
 * A trait to help implement ServiceProviderInterface.
 *
 * @author Robin Chalas <robin.chalas@gmail.com>
 * @author Nicolas Grekas <p@tchwork.com>
 */
trait ServiceLocatorTrait
{
    private \$factories;
    private \$loading = [];
    private \$providedTypes;

    /**
     * @param callable[] \$factories
     */
    public function __construct(array \$factories)
    {
        \$this->factories = \$factories;
    }

    /**
     * {@inheritdoc}
     *
     * @return bool
     */
    public function has(\$id)
    {
        return isset(\$this->factories[\$id]);
    }

    /**
     * {@inheritdoc}
     */
    public function get(\$id)
    {
        if (!isset(\$this->factories[\$id])) {
            throw \$this->createNotFoundException(\$id);
        }

        if (isset(\$this->loading[\$id])) {
            \$ids = array_values(\$this->loading);
            \$ids = \\array_slice(\$this->loading, array_search(\$id, \$ids));
            \$ids[] = \$id;

            throw \$this->createCircularReferenceException(\$id, \$ids);
        }

        \$this->loading[\$id] = \$id;
        try {
            return \$this->factories[\$id](\$this);
        } finally {
            unset(\$this->loading[\$id]);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getProvidedServices(): array
    {
        if (null === \$this->providedTypes) {
            \$this->providedTypes = [];

            foreach (\$this->factories as \$name => \$factory) {
                if (!\\is_callable(\$factory)) {
                    \$this->providedTypes[\$name] = '?';
                } else {
                    \$type = (new \\ReflectionFunction(\$factory))->getReturnType();

                    \$this->providedTypes[\$name] = \$type ? (\$type->allowsNull() ? '?' : '').\$type->getName() : '?';
                }
            }
        }

        return \$this->providedTypes;
    }

    private function createNotFoundException(string \$id): NotFoundExceptionInterface
    {
        if (!\$alternatives = array_keys(\$this->factories)) {
            \$message = 'is empty...';
        } else {
            \$last = array_pop(\$alternatives);
            if (\$alternatives) {
                \$message = sprintf('only knows about the \"%s\" and \"%s\" services.', implode('\", \"', \$alternatives), \$last);
            } else {
                \$message = sprintf('only knows about the \"%s\" service.', \$last);
            }
        }

        if (\$this->loading) {
            \$message = sprintf('The service \"%s\" has a dependency on a non-existent service \"%s\". This locator %s', end(\$this->loading), \$id, \$message);
        } else {
            \$message = sprintf('Service \"%s\" not found: the current service locator %s', \$id, \$message);
        }

        return new class(\$message) extends \\InvalidArgumentException implements NotFoundExceptionInterface {
        };
    }

    private function createCircularReferenceException(string \$id, array \$path): ContainerExceptionInterface
    {
        return new class(sprintf('Circular reference detected for service \"%s\", path: \"%s\".', \$id, implode(' -> ', \$path))) extends \\RuntimeException implements ContainerExceptionInterface {
        };
    }
}
", "vendor/symfony/service-contracts/ServiceLocatorTrait.php", "/var/www/public/DevLaon/templates/vendor/symfony/service-contracts/ServiceLocatorTrait.php");
    }
}
