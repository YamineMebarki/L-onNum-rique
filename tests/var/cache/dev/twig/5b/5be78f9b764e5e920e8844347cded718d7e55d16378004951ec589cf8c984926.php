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

/* vendor/symfony/form/Extension/Core/DataTransformer/MoneyToLocalizedStringTransformer.php */
class __TwigTemplate_ef91af2ef85e335da507e5011cc1f0c1a93136fdda63962912ef9ed496283f1b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/DataTransformer/MoneyToLocalizedStringTransformer.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/DataTransformer/MoneyToLocalizedStringTransformer.php"));

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
 * Transforms between a normalized format and a localized money string.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 * @author Florian Eckerstorfer <florian@eckerstorfer.org>
 */
class MoneyToLocalizedStringTransformer extends NumberToLocalizedStringTransformer
{
    private \$divisor;

    public function __construct(?int \$scale = 2, ?bool \$grouping = true, ?int \$roundingMode = self::ROUND_HALF_UP, ?int \$divisor = 1)
    {
        if (null === \$grouping) {
            \$grouping = true;
        }

        if (null === \$scale) {
            \$scale = 2;
        }

        parent::__construct(\$scale, \$grouping, \$roundingMode);

        if (null === \$divisor) {
            \$divisor = 1;
        }

        \$this->divisor = \$divisor;
    }

    /**
     * Transforms a normalized format into a localized money string.
     *
     * @param int|float \$value Normalized number
     *
     * @return string Localized money string
     *
     * @throws TransformationFailedException if the given value is not numeric or
     *                                       if the value can not be transformed
     */
    public function transform(\$value)
    {
        if (null !== \$value && 1 !== \$this->divisor) {
            if (!is_numeric(\$value)) {
                throw new TransformationFailedException('Expected a numeric.');
            }
            \$value /= \$this->divisor;
        }

        return parent::transform(\$value);
    }

    /**
     * Transforms a localized money string into a normalized format.
     *
     * @param string \$value Localized money string
     *
     * @return int|float Normalized number
     *
     * @throws TransformationFailedException if the given value is not a string
     *                                       or if the value can not be transformed
     */
    public function reverseTransform(\$value)
    {
        \$value = parent::reverseTransform(\$value);
        if (null !== \$value && 1 !== \$this->divisor) {
            \$value = (float) (string) (\$value * \$this->divisor);
        }

        return \$value;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Extension/Core/DataTransformer/MoneyToLocalizedStringTransformer.php";
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
 * Transforms between a normalized format and a localized money string.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 * @author Florian Eckerstorfer <florian@eckerstorfer.org>
 */
class MoneyToLocalizedStringTransformer extends NumberToLocalizedStringTransformer
{
    private \$divisor;

    public function __construct(?int \$scale = 2, ?bool \$grouping = true, ?int \$roundingMode = self::ROUND_HALF_UP, ?int \$divisor = 1)
    {
        if (null === \$grouping) {
            \$grouping = true;
        }

        if (null === \$scale) {
            \$scale = 2;
        }

        parent::__construct(\$scale, \$grouping, \$roundingMode);

        if (null === \$divisor) {
            \$divisor = 1;
        }

        \$this->divisor = \$divisor;
    }

    /**
     * Transforms a normalized format into a localized money string.
     *
     * @param int|float \$value Normalized number
     *
     * @return string Localized money string
     *
     * @throws TransformationFailedException if the given value is not numeric or
     *                                       if the value can not be transformed
     */
    public function transform(\$value)
    {
        if (null !== \$value && 1 !== \$this->divisor) {
            if (!is_numeric(\$value)) {
                throw new TransformationFailedException('Expected a numeric.');
            }
            \$value /= \$this->divisor;
        }

        return parent::transform(\$value);
    }

    /**
     * Transforms a localized money string into a normalized format.
     *
     * @param string \$value Localized money string
     *
     * @return int|float Normalized number
     *
     * @throws TransformationFailedException if the given value is not a string
     *                                       or if the value can not be transformed
     */
    public function reverseTransform(\$value)
    {
        \$value = parent::reverseTransform(\$value);
        if (null !== \$value && 1 !== \$this->divisor) {
            \$value = (float) (string) (\$value * \$this->divisor);
        }

        return \$value;
    }
}
", "vendor/symfony/form/Extension/Core/DataTransformer/MoneyToLocalizedStringTransformer.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Extension/Core/DataTransformer/MoneyToLocalizedStringTransformer.php");
    }
}
