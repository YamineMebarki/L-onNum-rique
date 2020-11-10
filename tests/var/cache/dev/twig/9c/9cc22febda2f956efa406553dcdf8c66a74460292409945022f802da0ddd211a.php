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

/* vendor/symfony/validator/Constraints/Range.php */
class __TwigTemplate_8a76874e555b3868bd8e04841296ef00e704ebb9bea7695026e98af5564d7e01 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/Range.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/Range.php"));

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

use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\Exception\\MissingOptionsException;

/**
 * @Annotation
 * @Target({\"PROPERTY\", \"METHOD\", \"ANNOTATION\"})
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class Range extends Constraint
{
    const INVALID_CHARACTERS_ERROR = 'ad9a9798-7a99-4df7-8ce9-46e416a1e60b';
    const TOO_HIGH_ERROR = '2d28afcb-e32e-45fb-a815-01c431a86a69';
    const TOO_LOW_ERROR = '76454e69-502c-46c5-9643-f447d837c4d5';

    protected static \$errorNames = [
        self::INVALID_CHARACTERS_ERROR => 'INVALID_CHARACTERS_ERROR',
        self::TOO_HIGH_ERROR => 'TOO_HIGH_ERROR',
        self::TOO_LOW_ERROR => 'TOO_LOW_ERROR',
    ];

    public \$minMessage = 'This value should be ";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 35, $this->source); })()), "html", null, true);
        echo " or more.';
    public \$maxMessage = 'This value should be ";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 36, $this->source); })()), "html", null, true);
        echo " or less.';
    public \$invalidMessage = 'This value should be a valid number.';
    public \$min;
    public \$max;

    public function __construct(\$options = null)
    {
        parent::__construct(\$options);

        if (null === \$this->min && null === \$this->max) {
            throw new MissingOptionsException(sprintf('Either option \"min\" or \"max\" must be given for constraint %s', __CLASS__), ['min', 'max']);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Constraints/Range.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 36,  79 => 35,  43 => 1,);
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

use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\Exception\\MissingOptionsException;

/**
 * @Annotation
 * @Target({\"PROPERTY\", \"METHOD\", \"ANNOTATION\"})
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class Range extends Constraint
{
    const INVALID_CHARACTERS_ERROR = 'ad9a9798-7a99-4df7-8ce9-46e416a1e60b';
    const TOO_HIGH_ERROR = '2d28afcb-e32e-45fb-a815-01c431a86a69';
    const TOO_LOW_ERROR = '76454e69-502c-46c5-9643-f447d837c4d5';

    protected static \$errorNames = [
        self::INVALID_CHARACTERS_ERROR => 'INVALID_CHARACTERS_ERROR',
        self::TOO_HIGH_ERROR => 'TOO_HIGH_ERROR',
        self::TOO_LOW_ERROR => 'TOO_LOW_ERROR',
    ];

    public \$minMessage = 'This value should be {{ limit }} or more.';
    public \$maxMessage = 'This value should be {{ limit }} or less.';
    public \$invalidMessage = 'This value should be a valid number.';
    public \$min;
    public \$max;

    public function __construct(\$options = null)
    {
        parent::__construct(\$options);

        if (null === \$this->min && null === \$this->max) {
            throw new MissingOptionsException(sprintf('Either option \"min\" or \"max\" must be given for constraint %s', __CLASS__), ['min', 'max']);
        }
    }
}
", "vendor/symfony/validator/Constraints/Range.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Constraints/Range.php");
    }
}
