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

/* vendor/symfony/validator/Constraints/DivisibleBy.php */
class __TwigTemplate_31c48535866c6cb8f878ab94d82cc204803f696d36cd8bf86af4365b23a68be9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/DivisibleBy.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/DivisibleBy.php"));

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

/**
 * @Annotation
 * @Target({\"PROPERTY\", \"METHOD\", \"ANNOTATION\"})
 *
 * @author Colin O'Dell <colinodell@gmail.com>
 */
class DivisibleBy extends AbstractComparison
{
    const NOT_DIVISIBLE_BY = '6d99d6c3-1464-4ccf-bdc7-14d083cf455c';

    protected static \$errorNames = [
        self::NOT_DIVISIBLE_BY => 'NOT_DIVISIBLE_BY',
    ];

    public \$message = 'This value should be a multiple of ";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 28, $this->source); })()), "html", null, true);
        echo ".';
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Constraints/DivisibleBy.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 28,  43 => 1,);
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

/**
 * @Annotation
 * @Target({\"PROPERTY\", \"METHOD\", \"ANNOTATION\"})
 *
 * @author Colin O'Dell <colinodell@gmail.com>
 */
class DivisibleBy extends AbstractComparison
{
    const NOT_DIVISIBLE_BY = '6d99d6c3-1464-4ccf-bdc7-14d083cf455c';

    protected static \$errorNames = [
        self::NOT_DIVISIBLE_BY => 'NOT_DIVISIBLE_BY',
    ];

    public \$message = 'This value should be a multiple of {{ compared_value }}.';
}
", "vendor/symfony/validator/Constraints/DivisibleBy.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Constraints/DivisibleBy.php");
    }
}
