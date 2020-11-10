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

/* vendor/symfony/form/FormExtensionInterface.php */
class __TwigTemplate_69a543dd766d1e46bc1f2c19c4c653a19c5ce38e0014be5f3c76e4b1959feb99 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/FormExtensionInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/FormExtensionInterface.php"));

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
 * Interface for extensions which provide types, type extensions and a guesser.
 */
interface FormExtensionInterface
{
    /**
     * Returns a type by name.
     *
     * @param string \$name The name of the type
     *
     * @return FormTypeInterface The type
     *
     * @throws Exception\\InvalidArgumentException if the given type is not supported by this extension
     */
    public function getType(\$name);

    /**
     * Returns whether the given type is supported.
     *
     * @param string \$name The name of the type
     *
     * @return bool Whether the type is supported by this extension
     */
    public function hasType(\$name);

    /**
     * Returns the extensions for the given type.
     *
     * @param string \$name The name of the type
     *
     * @return FormTypeExtensionInterface[] An array of extensions as FormTypeExtensionInterface instances
     */
    public function getTypeExtensions(\$name);

    /**
     * Returns whether this extension provides type extensions for the given type.
     *
     * @param string \$name The name of the type
     *
     * @return bool Whether the given type has extensions
     */
    public function hasTypeExtensions(\$name);

    /**
     * Returns the type guesser provided by this extension.
     *
     * @return FormTypeGuesserInterface|null The type guesser
     */
    public function getTypeGuesser();
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/FormExtensionInterface.php";
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
 * Interface for extensions which provide types, type extensions and a guesser.
 */
interface FormExtensionInterface
{
    /**
     * Returns a type by name.
     *
     * @param string \$name The name of the type
     *
     * @return FormTypeInterface The type
     *
     * @throws Exception\\InvalidArgumentException if the given type is not supported by this extension
     */
    public function getType(\$name);

    /**
     * Returns whether the given type is supported.
     *
     * @param string \$name The name of the type
     *
     * @return bool Whether the type is supported by this extension
     */
    public function hasType(\$name);

    /**
     * Returns the extensions for the given type.
     *
     * @param string \$name The name of the type
     *
     * @return FormTypeExtensionInterface[] An array of extensions as FormTypeExtensionInterface instances
     */
    public function getTypeExtensions(\$name);

    /**
     * Returns whether this extension provides type extensions for the given type.
     *
     * @param string \$name The name of the type
     *
     * @return bool Whether the given type has extensions
     */
    public function hasTypeExtensions(\$name);

    /**
     * Returns the type guesser provided by this extension.
     *
     * @return FormTypeGuesserInterface|null The type guesser
     */
    public function getTypeGuesser();
}
", "vendor/symfony/form/FormExtensionInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/FormExtensionInterface.php");
    }
}
