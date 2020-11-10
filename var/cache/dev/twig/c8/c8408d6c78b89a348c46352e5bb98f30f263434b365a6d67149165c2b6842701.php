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

/* vendor/symfony/http-kernel/DependencyInjection/LazyLoadingFragmentHandler.php */
class __TwigTemplate_c041ec5a7298a5bfcb70251e9494f89820765f671dfae408fe999a170b3ef669 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/DependencyInjection/LazyLoadingFragmentHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/DependencyInjection/LazyLoadingFragmentHandler.php"));

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

namespace Symfony\\Component\\HttpKernel\\DependencyInjection;

use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpKernel\\Fragment\\FragmentHandler;

/**
 * Lazily loads fragment renderers from the dependency injection container.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class LazyLoadingFragmentHandler extends FragmentHandler
{
    private \$container;
    private \$initialized = [];

    public function __construct(ContainerInterface \$container, RequestStack \$requestStack, bool \$debug = false)
    {
        \$this->container = \$container;

        parent::__construct(\$requestStack, [], \$debug);
    }

    /**
     * {@inheritdoc}
     */
    public function render(\$uri, \$renderer = 'inline', array \$options = [])
    {
        if (!isset(\$this->initialized[\$renderer]) && \$this->container->has(\$renderer)) {
            \$this->addRenderer(\$this->container->get(\$renderer));
            \$this->initialized[\$renderer] = true;
        }

        return parent::render(\$uri, \$renderer, \$options);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/DependencyInjection/LazyLoadingFragmentHandler.php";
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

namespace Symfony\\Component\\HttpKernel\\DependencyInjection;

use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpKernel\\Fragment\\FragmentHandler;

/**
 * Lazily loads fragment renderers from the dependency injection container.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class LazyLoadingFragmentHandler extends FragmentHandler
{
    private \$container;
    private \$initialized = [];

    public function __construct(ContainerInterface \$container, RequestStack \$requestStack, bool \$debug = false)
    {
        \$this->container = \$container;

        parent::__construct(\$requestStack, [], \$debug);
    }

    /**
     * {@inheritdoc}
     */
    public function render(\$uri, \$renderer = 'inline', array \$options = [])
    {
        if (!isset(\$this->initialized[\$renderer]) && \$this->container->has(\$renderer)) {
            \$this->addRenderer(\$this->container->get(\$renderer));
            \$this->initialized[\$renderer] = true;
        }

        return parent::render(\$uri, \$renderer, \$options);
    }
}
", "vendor/symfony/http-kernel/DependencyInjection/LazyLoadingFragmentHandler.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/DependencyInjection/LazyLoadingFragmentHandler.php");
    }
}
