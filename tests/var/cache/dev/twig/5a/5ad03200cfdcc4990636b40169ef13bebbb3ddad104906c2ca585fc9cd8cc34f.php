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

/* vendor/symfony/validator/Constraints/Length.php */
class __TwigTemplate_19bb7474710f65278505af753b235274f1e9758459f1456a9d7de2b5944f54f8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/Length.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/Length.php"));

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
use Symfony\\Component\\Validator\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Validator\\Exception\\MissingOptionsException;

/**
 * @Annotation
 * @Target({\"PROPERTY\", \"METHOD\", \"ANNOTATION\"})
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class Length extends Constraint
{
    const TOO_SHORT_ERROR = '9ff3fdc4-b214-49db-8718-39c315e33d45';
    const TOO_LONG_ERROR = 'd94b19cc-114f-4f44-9cc4-4138e80a87b9';
    const INVALID_CHARACTERS_ERROR = '35e6a710-aa2e-4719-b58e-24b35749b767';

    protected static \$errorNames = [
        self::TOO_SHORT_ERROR => 'TOO_SHORT_ERROR',
        self::TOO_LONG_ERROR => 'TOO_LONG_ERROR',
        self::INVALID_CHARACTERS_ERROR => 'INVALID_CHARACTERS_ERROR',
    ];

    public \$maxMessage = 'This value is too long. It should have ";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 36, $this->source); })()), "html", null, true);
        echo " character or less.|This value is too long. It should have ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 36, $this->source); })()), "html", null, true);
        echo " characters or less.';
    public \$minMessage = 'This value is too short. It should have ";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 37, $this->source); })()), "html", null, true);
        echo " character or more.|This value is too short. It should have ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 37, $this->source); })()), "html", null, true);
        echo " characters or more.';
    public \$exactMessage = 'This value should have exactly ";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 38, $this->source); })()), "html", null, true);
        echo " character.|This value should have exactly ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 38, $this->source); })()), "html", null, true);
        echo " characters.';
    public \$charsetMessage = 'This value does not match the expected ";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["charset"]) || array_key_exists("charset", $context) ? $context["charset"] : (function () { throw new RuntimeError('Variable "charset" does not exist.', 39, $this->source); })()), "html", null, true);
        echo " charset.';
    public \$max;
    public \$min;
    public \$charset = 'UTF-8';
    public \$normalizer;

    public function __construct(\$options = null)
    {
        if (null !== \$options && !\\is_array(\$options)) {
            \$options = [
                'min' => \$options,
                'max' => \$options,
            ];
        } elseif (\\is_array(\$options) && isset(\$options['value']) && !isset(\$options['min']) && !isset(\$options['max'])) {
            \$options['min'] = \$options['max'] = \$options['value'];
            unset(\$options['value']);
        }

        parent::__construct(\$options);

        if (null === \$this->min && null === \$this->max) {
            throw new MissingOptionsException(sprintf('Either option \"min\" or \"max\" must be given for constraint %s', __CLASS__), ['min', 'max']);
        }

        if (null !== \$this->normalizer && !\\is_callable(\$this->normalizer)) {
            throw new InvalidArgumentException(sprintf('The \"normalizer\" option must be a valid callable (\"%s\" given).', \\is_object(\$this->normalizer) ? \\get_class(\$this->normalizer) : \\gettype(\$this->normalizer)));
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Constraints/Length.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 39,  92 => 38,  86 => 37,  80 => 36,  43 => 1,);
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
use Symfony\\Component\\Validator\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Validator\\Exception\\MissingOptionsException;

/**
 * @Annotation
 * @Target({\"PROPERTY\", \"METHOD\", \"ANNOTATION\"})
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class Length extends Constraint
{
    const TOO_SHORT_ERROR = '9ff3fdc4-b214-49db-8718-39c315e33d45';
    const TOO_LONG_ERROR = 'd94b19cc-114f-4f44-9cc4-4138e80a87b9';
    const INVALID_CHARACTERS_ERROR = '35e6a710-aa2e-4719-b58e-24b35749b767';

    protected static \$errorNames = [
        self::TOO_SHORT_ERROR => 'TOO_SHORT_ERROR',
        self::TOO_LONG_ERROR => 'TOO_LONG_ERROR',
        self::INVALID_CHARACTERS_ERROR => 'INVALID_CHARACTERS_ERROR',
    ];

    public \$maxMessage = 'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.';
    public \$minMessage = 'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.';
    public \$exactMessage = 'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.';
    public \$charsetMessage = 'This value does not match the expected {{ charset }} charset.';
    public \$max;
    public \$min;
    public \$charset = 'UTF-8';
    public \$normalizer;

    public function __construct(\$options = null)
    {
        if (null !== \$options && !\\is_array(\$options)) {
            \$options = [
                'min' => \$options,
                'max' => \$options,
            ];
        } elseif (\\is_array(\$options) && isset(\$options['value']) && !isset(\$options['min']) && !isset(\$options['max'])) {
            \$options['min'] = \$options['max'] = \$options['value'];
            unset(\$options['value']);
        }

        parent::__construct(\$options);

        if (null === \$this->min && null === \$this->max) {
            throw new MissingOptionsException(sprintf('Either option \"min\" or \"max\" must be given for constraint %s', __CLASS__), ['min', 'max']);
        }

        if (null !== \$this->normalizer && !\\is_callable(\$this->normalizer)) {
            throw new InvalidArgumentException(sprintf('The \"normalizer\" option must be a valid callable (\"%s\" given).', \\is_object(\$this->normalizer) ? \\get_class(\$this->normalizer) : \\gettype(\$this->normalizer)));
        }
    }
}
", "vendor/symfony/validator/Constraints/Length.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Constraints/Length.php");
    }
}
