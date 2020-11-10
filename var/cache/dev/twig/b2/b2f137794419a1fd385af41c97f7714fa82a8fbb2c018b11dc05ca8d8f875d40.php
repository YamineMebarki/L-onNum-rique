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

/* vendor/symfony/validator/Constraints/DivisibleByValidator.php */
class __TwigTemplate_98f9734654ec1d171d3e4b1554b184a1108b749398f5727a5c3526598fbf643a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/DivisibleByValidator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/DivisibleByValidator.php"));

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

namespace Symfony\\Component\\Validator\\Constraints;

use Symfony\\Component\\Validator\\Exception\\UnexpectedValueException;

/**
 * Validates that values are a multiple of the given number.
 *
 * @author Colin O'Dell <colinodell@gmail.com>
 */
class DivisibleByValidator extends AbstractComparisonValidator
{
    /**
     * {@inheritdoc}
     */
    protected function compareValues(\$value1, \$value2)
    {
        if (!is_numeric(\$value1)) {
            throw new UnexpectedValueException(\$value1, 'numeric');
        }

        if (!is_numeric(\$value2)) {
            throw new UnexpectedValueException(\$value2, 'numeric');
        }

        if (!\$value2 = abs(\$value2)) {
            return false;
        }
        if (\\is_int(\$value1 = abs(\$value1)) && \\is_int(\$value2)) {
            return 0 === (\$value1 % \$value2);
        }
        if (!\$remainder = fmod(\$value1, \$value2)) {
            return true;
        }

        return sprintf('%.12e', \$value2) === sprintf('%.12e', \$remainder);
    }

    /**
     * {@inheritdoc}
     */
    protected function getErrorCode()
    {
        return DivisibleBy::NOT_DIVISIBLE_BY;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Constraints/DivisibleByValidator.php";
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

namespace Symfony\\Component\\Validator\\Constraints;

use Symfony\\Component\\Validator\\Exception\\UnexpectedValueException;

/**
 * Validates that values are a multiple of the given number.
 *
 * @author Colin O'Dell <colinodell@gmail.com>
 */
class DivisibleByValidator extends AbstractComparisonValidator
{
    /**
     * {@inheritdoc}
     */
    protected function compareValues(\$value1, \$value2)
    {
        if (!is_numeric(\$value1)) {
            throw new UnexpectedValueException(\$value1, 'numeric');
        }

        if (!is_numeric(\$value2)) {
            throw new UnexpectedValueException(\$value2, 'numeric');
        }

        if (!\$value2 = abs(\$value2)) {
            return false;
        }
        if (\\is_int(\$value1 = abs(\$value1)) && \\is_int(\$value2)) {
            return 0 === (\$value1 % \$value2);
        }
        if (!\$remainder = fmod(\$value1, \$value2)) {
            return true;
        }

        return sprintf('%.12e', \$value2) === sprintf('%.12e', \$remainder);
    }

    /**
     * {@inheritdoc}
     */
    protected function getErrorCode()
    {
        return DivisibleBy::NOT_DIVISIBLE_BY;
    }
}
", "vendor/symfony/validator/Constraints/DivisibleByValidator.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Constraints/DivisibleByValidator.php");
    }
}
