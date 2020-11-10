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

/* vendor/symfony/validator/Constraints/Choice.php */
class __TwigTemplate_89655d3fab96b6e6bb9f0697e534d0898e82892bf07ea388d43f0896c64896f1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/Choice.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/Choice.php"));

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

/**
 * @Annotation
 * @Target({\"PROPERTY\", \"METHOD\", \"ANNOTATION\"})
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class Choice extends Constraint
{
    const NO_SUCH_CHOICE_ERROR = '8e179f1b-97aa-4560-a02f-2a8b42e49df7';
    const TOO_FEW_ERROR = '11edd7eb-5872-4b6e-9f12-89923999fd0e';
    const TOO_MANY_ERROR = '9bd98e49-211c-433f-8630-fd1c2d0f08c3';

    protected static \$errorNames = [
        self::NO_SUCH_CHOICE_ERROR => 'NO_SUCH_CHOICE_ERROR',
        self::TOO_FEW_ERROR => 'TOO_FEW_ERROR',
        self::TOO_MANY_ERROR => 'TOO_MANY_ERROR',
    ];

    public \$choices;
    public \$callback;
    public \$multiple = false;
    public \$strict = true;
    public \$min;
    public \$max;
    public \$message = 'The value you selected is not a valid choice.';
    public \$multipleMessage = 'One or more of the given values is invalid.';
    public \$minMessage = 'You must select at least ";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 42, $this->source); })()), "html", null, true);
        echo " choice.|You must select at least ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 42, $this->source); })()), "html", null, true);
        echo " choices.';
    public \$maxMessage = 'You must select at most ";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 43, $this->source); })()), "html", null, true);
        echo " choice.|You must select at most ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 43, $this->source); })()), "html", null, true);
        echo " choices.';

    /**
     * {@inheritdoc}
     */
    public function getDefaultOption()
    {
        return 'choices';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Constraints/Choice.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 43,  86 => 42,  43 => 1,);
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

/**
 * @Annotation
 * @Target({\"PROPERTY\", \"METHOD\", \"ANNOTATION\"})
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class Choice extends Constraint
{
    const NO_SUCH_CHOICE_ERROR = '8e179f1b-97aa-4560-a02f-2a8b42e49df7';
    const TOO_FEW_ERROR = '11edd7eb-5872-4b6e-9f12-89923999fd0e';
    const TOO_MANY_ERROR = '9bd98e49-211c-433f-8630-fd1c2d0f08c3';

    protected static \$errorNames = [
        self::NO_SUCH_CHOICE_ERROR => 'NO_SUCH_CHOICE_ERROR',
        self::TOO_FEW_ERROR => 'TOO_FEW_ERROR',
        self::TOO_MANY_ERROR => 'TOO_MANY_ERROR',
    ];

    public \$choices;
    public \$callback;
    public \$multiple = false;
    public \$strict = true;
    public \$min;
    public \$max;
    public \$message = 'The value you selected is not a valid choice.';
    public \$multipleMessage = 'One or more of the given values is invalid.';
    public \$minMessage = 'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.';
    public \$maxMessage = 'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.';

    /**
     * {@inheritdoc}
     */
    public function getDefaultOption()
    {
        return 'choices';
    }
}
", "vendor/symfony/validator/Constraints/Choice.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Constraints/Choice.php");
    }
}
