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

/* vendor/symfony/form/Extension/DataCollector/Proxy/ResolvedTypeFactoryDataCollectorProxy.php */
class __TwigTemplate_fd90a034acfab8fad5e3cddf8dced74c6d0ea2866202e80a88a6dfbf3ce09728 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/DataCollector/Proxy/ResolvedTypeFactoryDataCollectorProxy.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/DataCollector/Proxy/ResolvedTypeFactoryDataCollectorProxy.php"));

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

namespace Symfony\\Component\\Form\\Extension\\DataCollector\\Proxy;

use Symfony\\Component\\Form\\Extension\\DataCollector\\FormDataCollectorInterface;
use Symfony\\Component\\Form\\FormTypeInterface;
use Symfony\\Component\\Form\\ResolvedFormTypeFactoryInterface;
use Symfony\\Component\\Form\\ResolvedFormTypeInterface;

/**
 * Proxy that wraps resolved types into {@link ResolvedTypeDataCollectorProxy}
 * instances.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class ResolvedTypeFactoryDataCollectorProxy implements ResolvedFormTypeFactoryInterface
{
    private \$proxiedFactory;
    private \$dataCollector;

    public function __construct(ResolvedFormTypeFactoryInterface \$proxiedFactory, FormDataCollectorInterface \$dataCollector)
    {
        \$this->proxiedFactory = \$proxiedFactory;
        \$this->dataCollector = \$dataCollector;
    }

    /**
     * {@inheritdoc}
     */
    public function createResolvedType(FormTypeInterface \$type, array \$typeExtensions, ResolvedFormTypeInterface \$parent = null)
    {
        return new ResolvedTypeDataCollectorProxy(
            \$this->proxiedFactory->createResolvedType(\$type, \$typeExtensions, \$parent),
            \$this->dataCollector
        );
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Extension/DataCollector/Proxy/ResolvedTypeFactoryDataCollectorProxy.php";
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

namespace Symfony\\Component\\Form\\Extension\\DataCollector\\Proxy;

use Symfony\\Component\\Form\\Extension\\DataCollector\\FormDataCollectorInterface;
use Symfony\\Component\\Form\\FormTypeInterface;
use Symfony\\Component\\Form\\ResolvedFormTypeFactoryInterface;
use Symfony\\Component\\Form\\ResolvedFormTypeInterface;

/**
 * Proxy that wraps resolved types into {@link ResolvedTypeDataCollectorProxy}
 * instances.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class ResolvedTypeFactoryDataCollectorProxy implements ResolvedFormTypeFactoryInterface
{
    private \$proxiedFactory;
    private \$dataCollector;

    public function __construct(ResolvedFormTypeFactoryInterface \$proxiedFactory, FormDataCollectorInterface \$dataCollector)
    {
        \$this->proxiedFactory = \$proxiedFactory;
        \$this->dataCollector = \$dataCollector;
    }

    /**
     * {@inheritdoc}
     */
    public function createResolvedType(FormTypeInterface \$type, array \$typeExtensions, ResolvedFormTypeInterface \$parent = null)
    {
        return new ResolvedTypeDataCollectorProxy(
            \$this->proxiedFactory->createResolvedType(\$type, \$typeExtensions, \$parent),
            \$this->dataCollector
        );
    }
}
", "vendor/symfony/form/Extension/DataCollector/Proxy/ResolvedTypeFactoryDataCollectorProxy.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Extension/DataCollector/Proxy/ResolvedTypeFactoryDataCollectorProxy.php");
    }
}
