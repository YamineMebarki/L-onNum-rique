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

/* vendor/symfony/form/FormTypeGuesserInterface.php */
class __TwigTemplate_c0748dd8c8099cb8c4ad46a239beb032c696ffa7631fae655388af6b3e8b23eb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/FormTypeGuesserInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/FormTypeGuesserInterface.php"));

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
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
interface FormTypeGuesserInterface
{
    /**
     * Returns a field guess for a property name of a class.
     *
     * @param string \$class    The fully qualified class name
     * @param string \$property The name of the property to guess for
     *
     * @return Guess\\TypeGuess|null A guess for the field's type and options
     */
    public function guessType(\$class, \$property);

    /**
     * Returns a guess whether a property of a class is required.
     *
     * @param string \$class    The fully qualified class name
     * @param string \$property The name of the property to guess for
     *
     * @return Guess\\ValueGuess|null A guess for the field's required setting
     */
    public function guessRequired(\$class, \$property);

    /**
     * Returns a guess about the field's maximum length.
     *
     * @param string \$class    The fully qualified class name
     * @param string \$property The name of the property to guess for
     *
     * @return Guess\\ValueGuess|null A guess for the field's maximum length
     */
    public function guessMaxLength(\$class, \$property);

    /**
     * Returns a guess about the field's pattern.
     *
     * - When you have a min value, you guess a min length of this min (LOW_CONFIDENCE)
     * - Then line below, if this value is a float type, this is wrong so you guess null with MEDIUM_CONFIDENCE to override the previous guess.
     * Example:
     *  You want a float greater than 5, 4.512313 is not valid but length(4.512314) > length(5)
     *
     * @see https://github.com/symfony/symfony/pull/3927
     *
     * @param string \$class    The fully qualified class name
     * @param string \$property The name of the property to guess for
     *
     * @return Guess\\ValueGuess|null A guess for the field's required pattern
     */
    public function guessPattern(\$class, \$property);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/FormTypeGuesserInterface.php";
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
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
interface FormTypeGuesserInterface
{
    /**
     * Returns a field guess for a property name of a class.
     *
     * @param string \$class    The fully qualified class name
     * @param string \$property The name of the property to guess for
     *
     * @return Guess\\TypeGuess|null A guess for the field's type and options
     */
    public function guessType(\$class, \$property);

    /**
     * Returns a guess whether a property of a class is required.
     *
     * @param string \$class    The fully qualified class name
     * @param string \$property The name of the property to guess for
     *
     * @return Guess\\ValueGuess|null A guess for the field's required setting
     */
    public function guessRequired(\$class, \$property);

    /**
     * Returns a guess about the field's maximum length.
     *
     * @param string \$class    The fully qualified class name
     * @param string \$property The name of the property to guess for
     *
     * @return Guess\\ValueGuess|null A guess for the field's maximum length
     */
    public function guessMaxLength(\$class, \$property);

    /**
     * Returns a guess about the field's pattern.
     *
     * - When you have a min value, you guess a min length of this min (LOW_CONFIDENCE)
     * - Then line below, if this value is a float type, this is wrong so you guess null with MEDIUM_CONFIDENCE to override the previous guess.
     * Example:
     *  You want a float greater than 5, 4.512313 is not valid but length(4.512314) > length(5)
     *
     * @see https://github.com/symfony/symfony/pull/3927
     *
     * @param string \$class    The fully qualified class name
     * @param string \$property The name of the property to guess for
     *
     * @return Guess\\ValueGuess|null A guess for the field's required pattern
     */
    public function guessPattern(\$class, \$property);
}
", "vendor/symfony/form/FormTypeGuesserInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/FormTypeGuesserInterface.php");
    }
}
