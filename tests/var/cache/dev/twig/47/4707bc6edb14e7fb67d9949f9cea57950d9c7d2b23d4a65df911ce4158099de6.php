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

/* vendor/symfony/finder/Iterator/DepthRangeFilterIterator.php */
class __TwigTemplate_350f7518461566735d1c0ac7dc7a239442727e33f93f5eaaec3457e1e1d8fe2f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/finder/Iterator/DepthRangeFilterIterator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/finder/Iterator/DepthRangeFilterIterator.php"));

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

/**
 * DepthRangeFilterIterator limits the directory depth.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class DepthRangeFilterIterator extends \\FilterIterator
{
    private \$minDepth = 0;

    /**
     * @param \\RecursiveIteratorIterator \$iterator The Iterator to filter
     * @param int                        \$minDepth The min depth
     * @param int                        \$maxDepth The max depth
     */
    public function __construct(\\RecursiveIteratorIterator \$iterator, int \$minDepth = 0, int \$maxDepth = PHP_INT_MAX)
    {
        \$this->minDepth = \$minDepth;
        \$iterator->setMaxDepth(PHP_INT_MAX === \$maxDepth ? -1 : \$maxDepth);

        parent::__construct(\$iterator);
    }

    /**
     * Filters the iterator values.
     *
     * @return bool true if the value should be kept, false otherwise
     */
    public function accept()
    {
        return \$this->getInnerIterator()->getDepth() >= \$this->minDepth;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/finder/Iterator/DepthRangeFilterIterator.php";
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

/**
 * DepthRangeFilterIterator limits the directory depth.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class DepthRangeFilterIterator extends \\FilterIterator
{
    private \$minDepth = 0;

    /**
     * @param \\RecursiveIteratorIterator \$iterator The Iterator to filter
     * @param int                        \$minDepth The min depth
     * @param int                        \$maxDepth The max depth
     */
    public function __construct(\\RecursiveIteratorIterator \$iterator, int \$minDepth = 0, int \$maxDepth = PHP_INT_MAX)
    {
        \$this->minDepth = \$minDepth;
        \$iterator->setMaxDepth(PHP_INT_MAX === \$maxDepth ? -1 : \$maxDepth);

        parent::__construct(\$iterator);
    }

    /**
     * Filters the iterator values.
     *
     * @return bool true if the value should be kept, false otherwise
     */
    public function accept()
    {
        return \$this->getInnerIterator()->getDepth() >= \$this->minDepth;
    }
}
", "vendor/symfony/finder/Iterator/DepthRangeFilterIterator.php", "/var/www/public/DevLaon/templates/vendor/symfony/finder/Iterator/DepthRangeFilterIterator.php");
    }
}
