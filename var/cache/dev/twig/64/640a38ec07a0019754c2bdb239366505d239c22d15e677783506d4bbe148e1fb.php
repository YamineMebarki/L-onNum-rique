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

/* vendor/symfony/validator/Violation/ConstraintViolationBuilderInterface.php */
class __TwigTemplate_928066903154a1edae18d879cb686849f48e41f37f7e31f0b04c97482f3d5adc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Violation/ConstraintViolationBuilderInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Violation/ConstraintViolationBuilderInterface.php"));

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

namespace Symfony\\Component\\Validator\\Violation;

/**
 * Builds {@link \\Symfony\\Component\\Validator\\ConstraintViolationInterface}
 * objects.
 *
 * Use the various methods on this interface to configure the built violation.
 * Finally, call {@link addViolation()} to add the violation to the current
 * execution context.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
interface ConstraintViolationBuilderInterface
{
    /**
     * Stores the property path at which the violation should be generated.
     *
     * The passed path will be appended to the current property path of the
     * execution context.
     *
     * @param string \$path The property path
     *
     * @return \$this
     */
    public function atPath(\$path);

    /**
     * Sets a parameter to be inserted into the violation message.
     *
     * @param string \$key   The name of the parameter
     * @param string \$value The value to be inserted in the parameter's place
     *
     * @return \$this
     */
    public function setParameter(\$key, \$value);

    /**
     * Sets all parameters to be inserted into the violation message.
     *
     * @param array \$parameters An array with the parameter names as keys and
     *                          the values to be inserted in their place as
     *                          values
     *
     * @return \$this
     */
    public function setParameters(array \$parameters);

    /**
     * Sets the translation domain which should be used for translating the
     * violation message.
     *
     * @param string \$translationDomain The translation domain
     *
     * @return \$this
     *
     * @see \\Symfony\\Contracts\\Translation\\TranslatorInterface
     */
    public function setTranslationDomain(\$translationDomain);

    /**
     * Sets the invalid value that caused this violation.
     *
     * @param mixed \$invalidValue The invalid value
     *
     * @return \$this
     */
    public function setInvalidValue(\$invalidValue);

    /**
     * Sets the number which determines how the plural form of the violation
     * message is chosen when it is translated.
     *
     * @param int \$number The number for determining the plural form
     *
     * @return \$this
     *
     * @see \\Symfony\\Contracts\\Translation\\TranslatorInterface::transChoice()
     */
    public function setPlural(\$number);

    /**
     * Sets the violation code.
     *
     * @param string|null \$code The violation code
     *
     * @return \$this
     */
    public function setCode(\$code);

    /**
     * Sets the cause of the violation.
     *
     * @param mixed \$cause The cause of the violation
     *
     * @return \$this
     */
    public function setCause(\$cause);

    /**
     * Adds the violation to the current execution context.
     */
    public function addViolation();
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Violation/ConstraintViolationBuilderInterface.php";
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

namespace Symfony\\Component\\Validator\\Violation;

/**
 * Builds {@link \\Symfony\\Component\\Validator\\ConstraintViolationInterface}
 * objects.
 *
 * Use the various methods on this interface to configure the built violation.
 * Finally, call {@link addViolation()} to add the violation to the current
 * execution context.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
interface ConstraintViolationBuilderInterface
{
    /**
     * Stores the property path at which the violation should be generated.
     *
     * The passed path will be appended to the current property path of the
     * execution context.
     *
     * @param string \$path The property path
     *
     * @return \$this
     */
    public function atPath(\$path);

    /**
     * Sets a parameter to be inserted into the violation message.
     *
     * @param string \$key   The name of the parameter
     * @param string \$value The value to be inserted in the parameter's place
     *
     * @return \$this
     */
    public function setParameter(\$key, \$value);

    /**
     * Sets all parameters to be inserted into the violation message.
     *
     * @param array \$parameters An array with the parameter names as keys and
     *                          the values to be inserted in their place as
     *                          values
     *
     * @return \$this
     */
    public function setParameters(array \$parameters);

    /**
     * Sets the translation domain which should be used for translating the
     * violation message.
     *
     * @param string \$translationDomain The translation domain
     *
     * @return \$this
     *
     * @see \\Symfony\\Contracts\\Translation\\TranslatorInterface
     */
    public function setTranslationDomain(\$translationDomain);

    /**
     * Sets the invalid value that caused this violation.
     *
     * @param mixed \$invalidValue The invalid value
     *
     * @return \$this
     */
    public function setInvalidValue(\$invalidValue);

    /**
     * Sets the number which determines how the plural form of the violation
     * message is chosen when it is translated.
     *
     * @param int \$number The number for determining the plural form
     *
     * @return \$this
     *
     * @see \\Symfony\\Contracts\\Translation\\TranslatorInterface::transChoice()
     */
    public function setPlural(\$number);

    /**
     * Sets the violation code.
     *
     * @param string|null \$code The violation code
     *
     * @return \$this
     */
    public function setCode(\$code);

    /**
     * Sets the cause of the violation.
     *
     * @param mixed \$cause The cause of the violation
     *
     * @return \$this
     */
    public function setCause(\$cause);

    /**
     * Adds the violation to the current execution context.
     */
    public function addViolation();
}
", "vendor/symfony/validator/Violation/ConstraintViolationBuilderInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Violation/ConstraintViolationBuilderInterface.php");
    }
}
