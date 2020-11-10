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

/* vendor/symfony/form/FormFactoryBuilderInterface.php */
class __TwigTemplate_50dce7c198ab40b0995a25a1ae579c18d0a66cfddf6427120d439f2ffcb888ac extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/FormFactoryBuilderInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/FormFactoryBuilderInterface.php"));

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
 * A builder for FormFactoryInterface objects.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
interface FormFactoryBuilderInterface
{
    /**
     * Sets the factory for creating ResolvedFormTypeInterface instances.
     *
     * @return \$this
     */
    public function setResolvedTypeFactory(ResolvedFormTypeFactoryInterface \$resolvedTypeFactory);

    /**
     * Adds an extension to be loaded by the factory.
     *
     * @return \$this
     */
    public function addExtension(FormExtensionInterface \$extension);

    /**
     * Adds a list of extensions to be loaded by the factory.
     *
     * @param FormExtensionInterface[] \$extensions The extensions
     *
     * @return \$this
     */
    public function addExtensions(array \$extensions);

    /**
     * Adds a form type to the factory.
     *
     * @return \$this
     */
    public function addType(FormTypeInterface \$type);

    /**
     * Adds a list of form types to the factory.
     *
     * @param FormTypeInterface[] \$types The form types
     *
     * @return \$this
     */
    public function addTypes(array \$types);

    /**
     * Adds a form type extension to the factory.
     *
     * @return \$this
     */
    public function addTypeExtension(FormTypeExtensionInterface \$typeExtension);

    /**
     * Adds a list of form type extensions to the factory.
     *
     * @param FormTypeExtensionInterface[] \$typeExtensions The form type extensions
     *
     * @return \$this
     */
    public function addTypeExtensions(array \$typeExtensions);

    /**
     * Adds a type guesser to the factory.
     *
     * @return \$this
     */
    public function addTypeGuesser(FormTypeGuesserInterface \$typeGuesser);

    /**
     * Adds a list of type guessers to the factory.
     *
     * @param FormTypeGuesserInterface[] \$typeGuessers The type guessers
     *
     * @return \$this
     */
    public function addTypeGuessers(array \$typeGuessers);

    /**
     * Builds and returns the factory.
     *
     * @return FormFactoryInterface The form factory
     */
    public function getFormFactory();
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/FormFactoryBuilderInterface.php";
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
 * A builder for FormFactoryInterface objects.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
interface FormFactoryBuilderInterface
{
    /**
     * Sets the factory for creating ResolvedFormTypeInterface instances.
     *
     * @return \$this
     */
    public function setResolvedTypeFactory(ResolvedFormTypeFactoryInterface \$resolvedTypeFactory);

    /**
     * Adds an extension to be loaded by the factory.
     *
     * @return \$this
     */
    public function addExtension(FormExtensionInterface \$extension);

    /**
     * Adds a list of extensions to be loaded by the factory.
     *
     * @param FormExtensionInterface[] \$extensions The extensions
     *
     * @return \$this
     */
    public function addExtensions(array \$extensions);

    /**
     * Adds a form type to the factory.
     *
     * @return \$this
     */
    public function addType(FormTypeInterface \$type);

    /**
     * Adds a list of form types to the factory.
     *
     * @param FormTypeInterface[] \$types The form types
     *
     * @return \$this
     */
    public function addTypes(array \$types);

    /**
     * Adds a form type extension to the factory.
     *
     * @return \$this
     */
    public function addTypeExtension(FormTypeExtensionInterface \$typeExtension);

    /**
     * Adds a list of form type extensions to the factory.
     *
     * @param FormTypeExtensionInterface[] \$typeExtensions The form type extensions
     *
     * @return \$this
     */
    public function addTypeExtensions(array \$typeExtensions);

    /**
     * Adds a type guesser to the factory.
     *
     * @return \$this
     */
    public function addTypeGuesser(FormTypeGuesserInterface \$typeGuesser);

    /**
     * Adds a list of type guessers to the factory.
     *
     * @param FormTypeGuesserInterface[] \$typeGuessers The type guessers
     *
     * @return \$this
     */
    public function addTypeGuessers(array \$typeGuessers);

    /**
     * Builds and returns the factory.
     *
     * @return FormFactoryInterface The form factory
     */
    public function getFormFactory();
}
", "vendor/symfony/form/FormFactoryBuilderInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/FormFactoryBuilderInterface.php");
    }
}
