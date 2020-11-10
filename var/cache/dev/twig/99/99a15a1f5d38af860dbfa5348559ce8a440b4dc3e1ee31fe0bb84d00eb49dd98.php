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

/* vendor/symfony/form/Extension/DataCollector/Proxy/ResolvedTypeDataCollectorProxy.php */
class __TwigTemplate_2e7242bebbd23a7c7997031381efcd09ac1c37d49c5e10eeb6d0895cad71f28a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/DataCollector/Proxy/ResolvedTypeDataCollectorProxy.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/DataCollector/Proxy/ResolvedTypeDataCollectorProxy.php"));

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
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormFactoryInterface;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\FormView;
use Symfony\\Component\\Form\\ResolvedFormTypeInterface;

/**
 * Proxy that invokes a data collector when creating a form and its view.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class ResolvedTypeDataCollectorProxy implements ResolvedFormTypeInterface
{
    private \$proxiedType;
    private \$dataCollector;

    public function __construct(ResolvedFormTypeInterface \$proxiedType, FormDataCollectorInterface \$dataCollector)
    {
        \$this->proxiedType = \$proxiedType;
        \$this->dataCollector = \$dataCollector;
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return \$this->proxiedType->getBlockPrefix();
    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return \$this->proxiedType->getParent();
    }

    /**
     * {@inheritdoc}
     */
    public function getInnerType()
    {
        return \$this->proxiedType->getInnerType();
    }

    /**
     * {@inheritdoc}
     */
    public function getTypeExtensions()
    {
        return \$this->proxiedType->getTypeExtensions();
    }

    /**
     * {@inheritdoc}
     */
    public function createBuilder(FormFactoryInterface \$factory, \$name, array \$options = [])
    {
        \$builder = \$this->proxiedType->createBuilder(\$factory, \$name, \$options);

        \$builder->setAttribute('data_collector/passed_options', \$options);
        \$builder->setType(\$this);

        return \$builder;
    }

    /**
     * {@inheritdoc}
     */
    public function createView(FormInterface \$form, FormView \$parent = null)
    {
        return \$this->proxiedType->createView(\$form, \$parent);
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$this->proxiedType->buildForm(\$builder, \$options);
    }

    /**
     * {@inheritdoc}
     */
    public function buildView(FormView \$view, FormInterface \$form, array \$options)
    {
        \$this->proxiedType->buildView(\$view, \$form, \$options);
    }

    /**
     * {@inheritdoc}
     */
    public function finishView(FormView \$view, FormInterface \$form, array \$options)
    {
        \$this->proxiedType->finishView(\$view, \$form, \$options);

        // Remember which view belongs to which form instance, so that we can
        // get the collected data for a view when its form instance is not
        // available (e.g. CSRF token)
        \$this->dataCollector->associateFormWithView(\$form, \$view);

        // Since the CSRF token is only present in the FormView tree, we also
        // need to check the FormView tree instead of calling isRoot() on the
        // FormInterface tree
        if (null === \$view->parent) {
            \$this->dataCollector->collectViewVariables(\$view);

            // Re-assemble data, in case FormView instances were added, for
            // which no FormInterface instances were present (e.g. CSRF token).
            // Since finishView() is called after finishing the views of all
            // children, we can safely assume that information has been
            // collected about the complete form tree.
            \$this->dataCollector->buildFinalFormTree(\$form, \$view);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getOptionsResolver()
    {
        return \$this->proxiedType->getOptionsResolver();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Extension/DataCollector/Proxy/ResolvedTypeDataCollectorProxy.php";
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
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormFactoryInterface;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\FormView;
use Symfony\\Component\\Form\\ResolvedFormTypeInterface;

/**
 * Proxy that invokes a data collector when creating a form and its view.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class ResolvedTypeDataCollectorProxy implements ResolvedFormTypeInterface
{
    private \$proxiedType;
    private \$dataCollector;

    public function __construct(ResolvedFormTypeInterface \$proxiedType, FormDataCollectorInterface \$dataCollector)
    {
        \$this->proxiedType = \$proxiedType;
        \$this->dataCollector = \$dataCollector;
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return \$this->proxiedType->getBlockPrefix();
    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return \$this->proxiedType->getParent();
    }

    /**
     * {@inheritdoc}
     */
    public function getInnerType()
    {
        return \$this->proxiedType->getInnerType();
    }

    /**
     * {@inheritdoc}
     */
    public function getTypeExtensions()
    {
        return \$this->proxiedType->getTypeExtensions();
    }

    /**
     * {@inheritdoc}
     */
    public function createBuilder(FormFactoryInterface \$factory, \$name, array \$options = [])
    {
        \$builder = \$this->proxiedType->createBuilder(\$factory, \$name, \$options);

        \$builder->setAttribute('data_collector/passed_options', \$options);
        \$builder->setType(\$this);

        return \$builder;
    }

    /**
     * {@inheritdoc}
     */
    public function createView(FormInterface \$form, FormView \$parent = null)
    {
        return \$this->proxiedType->createView(\$form, \$parent);
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$this->proxiedType->buildForm(\$builder, \$options);
    }

    /**
     * {@inheritdoc}
     */
    public function buildView(FormView \$view, FormInterface \$form, array \$options)
    {
        \$this->proxiedType->buildView(\$view, \$form, \$options);
    }

    /**
     * {@inheritdoc}
     */
    public function finishView(FormView \$view, FormInterface \$form, array \$options)
    {
        \$this->proxiedType->finishView(\$view, \$form, \$options);

        // Remember which view belongs to which form instance, so that we can
        // get the collected data for a view when its form instance is not
        // available (e.g. CSRF token)
        \$this->dataCollector->associateFormWithView(\$form, \$view);

        // Since the CSRF token is only present in the FormView tree, we also
        // need to check the FormView tree instead of calling isRoot() on the
        // FormInterface tree
        if (null === \$view->parent) {
            \$this->dataCollector->collectViewVariables(\$view);

            // Re-assemble data, in case FormView instances were added, for
            // which no FormInterface instances were present (e.g. CSRF token).
            // Since finishView() is called after finishing the views of all
            // children, we can safely assume that information has been
            // collected about the complete form tree.
            \$this->dataCollector->buildFinalFormTree(\$form, \$view);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getOptionsResolver()
    {
        return \$this->proxiedType->getOptionsResolver();
    }
}
", "vendor/symfony/form/Extension/DataCollector/Proxy/ResolvedTypeDataCollectorProxy.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Extension/DataCollector/Proxy/ResolvedTypeDataCollectorProxy.php");
    }
}
