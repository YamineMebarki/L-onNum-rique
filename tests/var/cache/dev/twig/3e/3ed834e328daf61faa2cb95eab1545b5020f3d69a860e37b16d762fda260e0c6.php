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

/* vendor/symfony/finder/Comparator/DateComparator.php */
class __TwigTemplate_537f2a5afb3daa0197faa2fb6ba65258fde6b47f0d0ab5b52490fc35baec9ca3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/finder/Comparator/DateComparator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/finder/Comparator/DateComparator.php"));

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

namespace Symfony\\Component\\Finder\\Comparator;

/**
 * DateCompare compiles date comparisons.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class DateComparator extends Comparator
{
    /**
     * @param string \$test A comparison string
     *
     * @throws \\InvalidArgumentException If the test is not understood
     */
    public function __construct(string \$test)
    {
        if (!preg_match('#^\\s*(==|!=|[<>]=?|after|since|before|until)?\\s*(.+?)\\s*\$#i', \$test, \$matches)) {
            throw new \\InvalidArgumentException(sprintf('Don\\'t understand \"%s\" as a date test.', \$test));
        }

        try {
            \$date = new \\DateTime(\$matches[2]);
            \$target = \$date->format('U');
        } catch (\\Exception \$e) {
            throw new \\InvalidArgumentException(sprintf('\"%s\" is not a valid date.', \$matches[2]));
        }

        \$operator = isset(\$matches[1]) ? \$matches[1] : '==';
        if ('since' === \$operator || 'after' === \$operator) {
            \$operator = '>';
        }

        if ('until' === \$operator || 'before' === \$operator) {
            \$operator = '<';
        }

        \$this->setOperator(\$operator);
        \$this->setTarget(\$target);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/finder/Comparator/DateComparator.php";
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

namespace Symfony\\Component\\Finder\\Comparator;

/**
 * DateCompare compiles date comparisons.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class DateComparator extends Comparator
{
    /**
     * @param string \$test A comparison string
     *
     * @throws \\InvalidArgumentException If the test is not understood
     */
    public function __construct(string \$test)
    {
        if (!preg_match('#^\\s*(==|!=|[<>]=?|after|since|before|until)?\\s*(.+?)\\s*\$#i', \$test, \$matches)) {
            throw new \\InvalidArgumentException(sprintf('Don\\'t understand \"%s\" as a date test.', \$test));
        }

        try {
            \$date = new \\DateTime(\$matches[2]);
            \$target = \$date->format('U');
        } catch (\\Exception \$e) {
            throw new \\InvalidArgumentException(sprintf('\"%s\" is not a valid date.', \$matches[2]));
        }

        \$operator = isset(\$matches[1]) ? \$matches[1] : '==';
        if ('since' === \$operator || 'after' === \$operator) {
            \$operator = '>';
        }

        if ('until' === \$operator || 'before' === \$operator) {
            \$operator = '<';
        }

        \$this->setOperator(\$operator);
        \$this->setTarget(\$target);
    }
}
", "vendor/symfony/finder/Comparator/DateComparator.php", "/var/www/public/DevLaon/templates/vendor/symfony/finder/Comparator/DateComparator.php");
    }
}
