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

/* vendor/symfony/form/AbstractTypeExtension.php */
class __TwigTemplate_9964a97e727333e39335d09fd269a0b970fa8c37d83bae46abea00a1b6501ee4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/AbstractTypeExtension.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/AbstractTypeExtension.php"));

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

namespace Symfony\\Component\\Form;

use Symfony\\Component\\Form\\Exception\\LogicException;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
abstract class AbstractTypeExtension implements FormTypeExtensionInterface
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function buildView(FormView \$view, FormInterface \$form, array \$options)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function finishView(FormView \$view, FormInterface \$form, array \$options)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver \$resolver)
    {
    }

    /**
     * {@inheritdoc}
     *
     * @deprecated since Symfony 4.2, use getExtendedTypes() instead.
     */
    public function getExtendedType()
    {
        if (!method_exists(\$this, 'getExtendedTypes')) {
            throw new LogicException(sprintf('You need to implement the static getExtendedTypes() method when implementing the %s in %s.', FormTypeExtensionInterface::class, static::class));
        }

        @trigger_error(sprintf('The %s::getExtendedType() method is deprecated since Symfony 4.2 and will be removed in 5.0. Use getExtendedTypes() instead.', \\get_class(\$this)), E_USER_DEPRECATED);

        foreach (static::getExtendedTypes() as \$extendedType) {
            return \$extendedType;
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/AbstractTypeExtension.php";
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

namespace Symfony\\Component\\Form;

use Symfony\\Component\\Form\\Exception\\LogicException;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
abstract class AbstractTypeExtension implements FormTypeExtensionInterface
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function buildView(FormView \$view, FormInterface \$form, array \$options)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function finishView(FormView \$view, FormInterface \$form, array \$options)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver \$resolver)
    {
    }

    /**
     * {@inheritdoc}
     *
     * @deprecated since Symfony 4.2, use getExtendedTypes() instead.
     */
    public function getExtendedType()
    {
        if (!method_exists(\$this, 'getExtendedTypes')) {
            throw new LogicException(sprintf('You need to implement the static getExtendedTypes() method when implementing the %s in %s.', FormTypeExtensionInterface::class, static::class));
        }

        @trigger_error(sprintf('The %s::getExtendedType() method is deprecated since Symfony 4.2 and will be removed in 5.0. Use getExtendedTypes() instead.', \\get_class(\$this)), E_USER_DEPRECATED);

        foreach (static::getExtendedTypes() as \$extendedType) {
            return \$extendedType;
        }
    }
}
", "vendor/symfony/form/AbstractTypeExtension.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/AbstractTypeExtension.php");
    }
}
