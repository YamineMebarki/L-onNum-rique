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

/* vendor/symfony/validator/Constraints/Count.php */
class __TwigTemplate_f3f8b2f302a1731fc5de2d9036b0e053b930411ff6d8c4d84931f985920d11be extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/Count.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/Count.php"));

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
class Count extends Constraint
{
    const TOO_FEW_ERROR = 'bef8e338-6ae5-4caf-b8e2-50e7b0579e69';
    const TOO_MANY_ERROR = '756b1212-697c-468d-a9ad-50dd783bb169';

    protected static \$errorNames = [
        self::TOO_FEW_ERROR => 'TOO_FEW_ERROR',
        self::TOO_MANY_ERROR => 'TOO_MANY_ERROR',
    ];

    public \$minMessage = 'This collection should contain ";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 33, $this->source); })()), "html", null, true);
        echo " element or more.|This collection should contain ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 33, $this->source); })()), "html", null, true);
        echo " elements or more.';
    public \$maxMessage = 'This collection should contain ";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 34, $this->source); })()), "html", null, true);
        echo " element or less.|This collection should contain ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 34, $this->source); })()), "html", null, true);
        echo " elements or less.';
    public \$exactMessage = 'This collection should contain exactly ";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 35, $this->source); })()), "html", null, true);
        echo " element.|This collection should contain exactly ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 35, $this->source); })()), "html", null, true);
        echo " elements.';
    public \$min;
    public \$max;

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
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Constraints/Count.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 35,  83 => 34,  77 => 33,  43 => 1,);
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
class Count extends Constraint
{
    const TOO_FEW_ERROR = 'bef8e338-6ae5-4caf-b8e2-50e7b0579e69';
    const TOO_MANY_ERROR = '756b1212-697c-468d-a9ad-50dd783bb169';

    protected static \$errorNames = [
        self::TOO_FEW_ERROR => 'TOO_FEW_ERROR',
        self::TOO_MANY_ERROR => 'TOO_MANY_ERROR',
    ];

    public \$minMessage = 'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.';
    public \$maxMessage = 'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.';
    public \$exactMessage = 'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.';
    public \$min;
    public \$max;

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
    }
}
", "vendor/symfony/validator/Constraints/Count.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Constraints/Count.php");
    }
}
