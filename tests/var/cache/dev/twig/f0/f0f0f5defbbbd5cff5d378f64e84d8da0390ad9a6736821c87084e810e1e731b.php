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

/* vendor/symfony/finder/Iterator/SizeRangeFilterIterator.php */
class __TwigTemplate_368a3688895cd01520d4edc1364374e1b2cfea6917c10e28b5cae0db96101356 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/finder/Iterator/SizeRangeFilterIterator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/finder/Iterator/SizeRangeFilterIterator.php"));

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

namespace Symfony\\Component\\Finder\\Iterator;

use Symfony\\Component\\Finder\\Comparator\\NumberComparator;

/**
 * SizeRangeFilterIterator filters out files that are not in the given size range.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class SizeRangeFilterIterator extends \\FilterIterator
{
    private \$comparators = [];

    /**
     * @param \\Iterator          \$iterator    The Iterator to filter
     * @param NumberComparator[] \$comparators An array of NumberComparator instances
     */
    public function __construct(\\Iterator \$iterator, array \$comparators)
    {
        \$this->comparators = \$comparators;

        parent::__construct(\$iterator);
    }

    /**
     * Filters the iterator values.
     *
     * @return bool true if the value should be kept, false otherwise
     */
    public function accept()
    {
        \$fileinfo = \$this->current();
        if (!\$fileinfo->isFile()) {
            return true;
        }

        \$filesize = \$fileinfo->getSize();
        foreach (\$this->comparators as \$compare) {
            if (!\$compare->test(\$filesize)) {
                return false;
            }
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
        return "vendor/symfony/finder/Iterator/SizeRangeFilterIterator.php";
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

namespace Symfony\\Component\\Finder\\Iterator;

use Symfony\\Component\\Finder\\Comparator\\NumberComparator;

/**
 * SizeRangeFilterIterator filters out files that are not in the given size range.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class SizeRangeFilterIterator extends \\FilterIterator
{
    private \$comparators = [];

    /**
     * @param \\Iterator          \$iterator    The Iterator to filter
     * @param NumberComparator[] \$comparators An array of NumberComparator instances
     */
    public function __construct(\\Iterator \$iterator, array \$comparators)
    {
        \$this->comparators = \$comparators;

        parent::__construct(\$iterator);
    }

    /**
     * Filters the iterator values.
     *
     * @return bool true if the value should be kept, false otherwise
     */
    public function accept()
    {
        \$fileinfo = \$this->current();
        if (!\$fileinfo->isFile()) {
            return true;
        }

        \$filesize = \$fileinfo->getSize();
        foreach (\$this->comparators as \$compare) {
            if (!\$compare->test(\$filesize)) {
                return false;
            }
        }

        return true;
    }
}
", "vendor/symfony/finder/Iterator/SizeRangeFilterIterator.php", "/var/www/public/DevLaon/templates/vendor/symfony/finder/Iterator/SizeRangeFilterIterator.php");
    }
}
