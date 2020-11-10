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

/* vendor/symfony/form/Extension/Core/DataTransformer/IntegerToLocalizedStringTransformer.php */
class __TwigTemplate_02912271b79413ba94cf4c2c467e29e9647c9feea5fc4925d9c62cd11de66841 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/DataTransformer/IntegerToLocalizedStringTransformer.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/DataTransformer/IntegerToLocalizedStringTransformer.php"));

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

namespace Symfony\\Component\\Form\\Extension\\Core\\DataTransformer;

use Symfony\\Component\\Form\\Exception\\TransformationFailedException;

/**
 * Transforms between an integer and a localized number with grouping
 * (each thousand) and comma separators.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class IntegerToLocalizedStringTransformer extends NumberToLocalizedStringTransformer
{
    /**
     * Constructs a transformer.
     *
     * @param bool \$grouping     Whether thousands should be grouped
     * @param int  \$roundingMode One of the ROUND_ constants in this class
     */
    public function __construct(\$grouping = false, \$roundingMode = self::ROUND_DOWN)
    {
        if (\\is_int(\$grouping) || \\is_bool(\$roundingMode) || 2 < \\func_num_args()) {
            @trigger_error(sprintf('Passing a precision as the first value to %s::__construct() is deprecated since Symfony 4.2 and support for it will be dropped in 5.0.', __CLASS__), E_USER_DEPRECATED);

            \$grouping = \$roundingMode;
            \$roundingMode = 2 < \\func_num_args() ? func_get_arg(2) : self::ROUND_DOWN;
        }

        parent::__construct(0, \$grouping, \$roundingMode);
    }

    /**
     * {@inheritdoc}
     */
    public function reverseTransform(\$value)
    {
        \$decimalSeparator = \$this->getNumberFormatter()->getSymbol(\\NumberFormatter::DECIMAL_SEPARATOR_SYMBOL);

        if (\\is_string(\$value) && false !== strpos(\$value, \$decimalSeparator)) {
            throw new TransformationFailedException(sprintf('The value \"%s\" is not a valid integer.', \$value));
        }

        \$result = parent::reverseTransform(\$value);

        return null !== \$result ? (int) \$result : null;
    }

    /**
     * @internal
     */
    protected function castParsedValue(\$value)
    {
        return \$value;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Extension/Core/DataTransformer/IntegerToLocalizedStringTransformer.php";
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

namespace Symfony\\Component\\Form\\Extension\\Core\\DataTransformer;

use Symfony\\Component\\Form\\Exception\\TransformationFailedException;

/**
 * Transforms between an integer and a localized number with grouping
 * (each thousand) and comma separators.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class IntegerToLocalizedStringTransformer extends NumberToLocalizedStringTransformer
{
    /**
     * Constructs a transformer.
     *
     * @param bool \$grouping     Whether thousands should be grouped
     * @param int  \$roundingMode One of the ROUND_ constants in this class
     */
    public function __construct(\$grouping = false, \$roundingMode = self::ROUND_DOWN)
    {
        if (\\is_int(\$grouping) || \\is_bool(\$roundingMode) || 2 < \\func_num_args()) {
            @trigger_error(sprintf('Passing a precision as the first value to %s::__construct() is deprecated since Symfony 4.2 and support for it will be dropped in 5.0.', __CLASS__), E_USER_DEPRECATED);

            \$grouping = \$roundingMode;
            \$roundingMode = 2 < \\func_num_args() ? func_get_arg(2) : self::ROUND_DOWN;
        }

        parent::__construct(0, \$grouping, \$roundingMode);
    }

    /**
     * {@inheritdoc}
     */
    public function reverseTransform(\$value)
    {
        \$decimalSeparator = \$this->getNumberFormatter()->getSymbol(\\NumberFormatter::DECIMAL_SEPARATOR_SYMBOL);

        if (\\is_string(\$value) && false !== strpos(\$value, \$decimalSeparator)) {
            throw new TransformationFailedException(sprintf('The value \"%s\" is not a valid integer.', \$value));
        }

        \$result = parent::reverseTransform(\$value);

        return null !== \$result ? (int) \$result : null;
    }

    /**
     * @internal
     */
    protected function castParsedValue(\$value)
    {
        return \$value;
    }
}
", "vendor/symfony/form/Extension/Core/DataTransformer/IntegerToLocalizedStringTransformer.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Extension/Core/DataTransformer/IntegerToLocalizedStringTransformer.php");
    }
}
