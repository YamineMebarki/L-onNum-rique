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

/* vendor/symfony/form/ResolvedFormTypeFactoryInterface.php */
class __TwigTemplate_986569a946847b667944269eefb80f509abb6990b29ee0445292f7b33463d86d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/ResolvedFormTypeFactoryInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/ResolvedFormTypeFactoryInterface.php"));

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

/**
 * Creates ResolvedFormTypeInterface instances.
 *
 * This interface allows you to use your custom ResolvedFormTypeInterface
 * implementation, within which you can customize the concrete FormBuilderInterface
 * implementations or FormView subclasses that are used by the framework.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
interface ResolvedFormTypeFactoryInterface
{
    /**
     * Resolves a form type.
     *
     * @param FormTypeExtensionInterface[] \$typeExtensions
     *
     * @return ResolvedFormTypeInterface
     *
     * @throws Exception\\UnexpectedTypeException  if the types parent {@link FormTypeInterface::getParent()} is not a string
     * @throws Exception\\InvalidArgumentException if the types parent can not be retrieved from any extension
     */
    public function createResolvedType(FormTypeInterface \$type, array \$typeExtensions, ResolvedFormTypeInterface \$parent = null);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/ResolvedFormTypeFactoryInterface.php";
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

/**
 * Creates ResolvedFormTypeInterface instances.
 *
 * This interface allows you to use your custom ResolvedFormTypeInterface
 * implementation, within which you can customize the concrete FormBuilderInterface
 * implementations or FormView subclasses that are used by the framework.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
interface ResolvedFormTypeFactoryInterface
{
    /**
     * Resolves a form type.
     *
     * @param FormTypeExtensionInterface[] \$typeExtensions
     *
     * @return ResolvedFormTypeInterface
     *
     * @throws Exception\\UnexpectedTypeException  if the types parent {@link FormTypeInterface::getParent()} is not a string
     * @throws Exception\\InvalidArgumentException if the types parent can not be retrieved from any extension
     */
    public function createResolvedType(FormTypeInterface \$type, array \$typeExtensions, ResolvedFormTypeInterface \$parent = null);
}
", "vendor/symfony/form/ResolvedFormTypeFactoryInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/ResolvedFormTypeFactoryInterface.php");
    }
}
