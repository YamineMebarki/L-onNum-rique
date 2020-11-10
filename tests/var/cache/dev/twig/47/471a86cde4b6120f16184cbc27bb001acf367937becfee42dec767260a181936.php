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

/* vendor/symfony/form/Extension/Core/DataTransformer/BooleanToStringTransformer.php */
class __TwigTemplate_2148f2d704acfbd227a25c945910928e6bf43bd2fcbde59e6baa1a5887b625a6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/DataTransformer/BooleanToStringTransformer.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/DataTransformer/BooleanToStringTransformer.php"));

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

use Symfony\\Component\\Form\\DataTransformerInterface;
use Symfony\\Component\\Form\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Form\\Exception\\TransformationFailedException;

/**
 * Transforms between a Boolean and a string.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 * @author Florian Eckerstorfer <florian@eckerstorfer.org>
 */
class BooleanToStringTransformer implements DataTransformerInterface
{
    private \$trueValue;

    private \$falseValues;

    /**
     * @param string \$trueValue The value emitted upon transform if the input is true
     */
    public function __construct(string \$trueValue, array \$falseValues = [null])
    {
        \$this->trueValue = \$trueValue;
        \$this->falseValues = \$falseValues;
        if (\\in_array(\$this->trueValue, \$this->falseValues, true)) {
            throw new InvalidArgumentException('The specified \"true\" value is contained in the false-values');
        }
    }

    /**
     * Transforms a Boolean into a string.
     *
     * @param bool \$value Boolean value
     *
     * @return string|null String value
     *
     * @throws TransformationFailedException if the given value is not a Boolean
     */
    public function transform(\$value)
    {
        if (null === \$value) {
            return null;
        }

        if (!\\is_bool(\$value)) {
            throw new TransformationFailedException('Expected a Boolean.');
        }

        return \$value ? \$this->trueValue : null;
    }

    /**
     * Transforms a string into a Boolean.
     *
     * @param string \$value String value
     *
     * @return bool Boolean value
     *
     * @throws TransformationFailedException if the given value is not a string
     */
    public function reverseTransform(\$value)
    {
        if (\\in_array(\$value, \$this->falseValues, true)) {
            return false;
        }

        if (!\\is_string(\$value)) {
            throw new TransformationFailedException('Expected a string.');
        }

        return true;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Extension/Core/DataTransformer/BooleanToStringTransformer.php";
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

use Symfony\\Component\\Form\\DataTransformerInterface;
use Symfony\\Component\\Form\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Form\\Exception\\TransformationFailedException;

/**
 * Transforms between a Boolean and a string.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 * @author Florian Eckerstorfer <florian@eckerstorfer.org>
 */
class BooleanToStringTransformer implements DataTransformerInterface
{
    private \$trueValue;

    private \$falseValues;

    /**
     * @param string \$trueValue The value emitted upon transform if the input is true
     */
    public function __construct(string \$trueValue, array \$falseValues = [null])
    {
        \$this->trueValue = \$trueValue;
        \$this->falseValues = \$falseValues;
        if (\\in_array(\$this->trueValue, \$this->falseValues, true)) {
            throw new InvalidArgumentException('The specified \"true\" value is contained in the false-values');
        }
    }

    /**
     * Transforms a Boolean into a string.
     *
     * @param bool \$value Boolean value
     *
     * @return string|null String value
     *
     * @throws TransformationFailedException if the given value is not a Boolean
     */
    public function transform(\$value)
    {
        if (null === \$value) {
            return null;
        }

        if (!\\is_bool(\$value)) {
            throw new TransformationFailedException('Expected a Boolean.');
        }

        return \$value ? \$this->trueValue : null;
    }

    /**
     * Transforms a string into a Boolean.
     *
     * @param string \$value String value
     *
     * @return bool Boolean value
     *
     * @throws TransformationFailedException if the given value is not a string
     */
    public function reverseTransform(\$value)
    {
        if (\\in_array(\$value, \$this->falseValues, true)) {
            return false;
        }

        if (!\\is_string(\$value)) {
            throw new TransformationFailedException('Expected a string.');
        }

        return true;
    }
}
", "vendor/symfony/form/Extension/Core/DataTransformer/BooleanToStringTransformer.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Extension/Core/DataTransformer/BooleanToStringTransformer.php");
    }
}
