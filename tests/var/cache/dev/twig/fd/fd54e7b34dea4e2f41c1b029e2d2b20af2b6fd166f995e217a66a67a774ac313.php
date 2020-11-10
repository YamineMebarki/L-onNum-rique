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

/* vendor/symfony/form/FormRegistryInterface.php */
class __TwigTemplate_1edce4fca3481046c4cdc1b209b10a856f266f99d0afe8e6b491dbb5758b6f07 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/FormRegistryInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/FormRegistryInterface.php"));

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
 * The central registry of the Form component.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
interface FormRegistryInterface
{
    /**
     * Returns a form type by name.
     *
     * This methods registers the type extensions from the form extensions.
     *
     * @param string \$name The name of the type
     *
     * @return ResolvedFormTypeInterface The type
     *
     * @throws Exception\\InvalidArgumentException if the type can not be retrieved from any extension
     */
    public function getType(\$name);

    /**
     * Returns whether the given form type is supported.
     *
     * @param string \$name The name of the type
     *
     * @return bool Whether the type is supported
     */
    public function hasType(\$name);

    /**
     * Returns the guesser responsible for guessing types.
     *
     * @return FormTypeGuesserInterface|null
     */
    public function getTypeGuesser();

    /**
     * Returns the extensions loaded by the framework.
     *
     * @return FormExtensionInterface[]
     */
    public function getExtensions();
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/FormRegistryInterface.php";
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
 * The central registry of the Form component.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
interface FormRegistryInterface
{
    /**
     * Returns a form type by name.
     *
     * This methods registers the type extensions from the form extensions.
     *
     * @param string \$name The name of the type
     *
     * @return ResolvedFormTypeInterface The type
     *
     * @throws Exception\\InvalidArgumentException if the type can not be retrieved from any extension
     */
    public function getType(\$name);

    /**
     * Returns whether the given form type is supported.
     *
     * @param string \$name The name of the type
     *
     * @return bool Whether the type is supported
     */
    public function hasType(\$name);

    /**
     * Returns the guesser responsible for guessing types.
     *
     * @return FormTypeGuesserInterface|null
     */
    public function getTypeGuesser();

    /**
     * Returns the extensions loaded by the framework.
     *
     * @return FormExtensionInterface[]
     */
    public function getExtensions();
}
", "vendor/symfony/form/FormRegistryInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/FormRegistryInterface.php");
    }
}
