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

/* vendor/symfony/finder/Iterator/SortableIterator.php */
class __TwigTemplate_3eb3af77472da7c0c4f1f99e1c83035246b52a1f2f703bbe1c99ddde339fe24d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/finder/Iterator/SortableIterator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/finder/Iterator/SortableIterator.php"));

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
 * SortableIterator applies a sort on a given Iterator.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class SortableIterator implements \\IteratorAggregate
{
    const SORT_BY_NONE = 0;
    const SORT_BY_NAME = 1;
    const SORT_BY_TYPE = 2;
    const SORT_BY_ACCESSED_TIME = 3;
    const SORT_BY_CHANGED_TIME = 4;
    const SORT_BY_MODIFIED_TIME = 5;
    const SORT_BY_NAME_NATURAL = 6;

    private \$iterator;
    private \$sort;

    /**
     * @param \\Traversable \$iterator The Iterator to filter
     * @param int|callable \$sort     The sort type (SORT_BY_NAME, SORT_BY_TYPE, or a PHP callback)
     *
     * @throws \\InvalidArgumentException
     */
    public function __construct(\\Traversable \$iterator, \$sort, bool \$reverseOrder = false)
    {
        \$this->iterator = \$iterator;
        \$order = \$reverseOrder ? -1 : 1;

        if (self::SORT_BY_NAME === \$sort) {
            \$this->sort = static function (\$a, \$b) use (\$order) {
                return \$order * strcmp(\$a->getRealPath() ?: \$a->getPathname(), \$b->getRealPath() ?: \$b->getPathname());
            };
        } elseif (self::SORT_BY_NAME_NATURAL === \$sort) {
            \$this->sort = static function (\$a, \$b) use (\$order) {
                return \$order * strnatcmp(\$a->getRealPath() ?: \$a->getPathname(), \$b->getRealPath() ?: \$b->getPathname());
            };
        } elseif (self::SORT_BY_TYPE === \$sort) {
            \$this->sort = static function (\$a, \$b) use (\$order) {
                if (\$a->isDir() && \$b->isFile()) {
                    return -\$order;
                } elseif (\$a->isFile() && \$b->isDir()) {
                    return \$order;
                }

                return \$order * strcmp(\$a->getRealPath() ?: \$a->getPathname(), \$b->getRealPath() ?: \$b->getPathname());
            };
        } elseif (self::SORT_BY_ACCESSED_TIME === \$sort) {
            \$this->sort = static function (\$a, \$b) use (\$order) {
                return \$order * (\$a->getATime() - \$b->getATime());
            };
        } elseif (self::SORT_BY_CHANGED_TIME === \$sort) {
            \$this->sort = static function (\$a, \$b) use (\$order) {
                return \$order * (\$a->getCTime() - \$b->getCTime());
            };
        } elseif (self::SORT_BY_MODIFIED_TIME === \$sort) {
            \$this->sort = static function (\$a, \$b) use (\$order) {
                return \$order * (\$a->getMTime() - \$b->getMTime());
            };
        } elseif (self::SORT_BY_NONE === \$sort) {
            \$this->sort = \$order;
        } elseif (\\is_callable(\$sort)) {
            \$this->sort = \$reverseOrder ? static function (\$a, \$b) use (\$sort) { return -\$sort(\$a, \$b); } : \$sort;
        } else {
            throw new \\InvalidArgumentException('The SortableIterator takes a PHP callable or a valid built-in sort algorithm as an argument.');
        }
    }

    public function getIterator()
    {
        if (1 === \$this->sort) {
            return \$this->iterator;
        }

        \$array = iterator_to_array(\$this->iterator, true);

        if (-1 === \$this->sort) {
            \$array = array_reverse(\$array);
        } else {
            uasort(\$array, \$this->sort);
        }

        return new \\ArrayIterator(\$array);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/finder/Iterator/SortableIterator.php";
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
 * SortableIterator applies a sort on a given Iterator.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class SortableIterator implements \\IteratorAggregate
{
    const SORT_BY_NONE = 0;
    const SORT_BY_NAME = 1;
    const SORT_BY_TYPE = 2;
    const SORT_BY_ACCESSED_TIME = 3;
    const SORT_BY_CHANGED_TIME = 4;
    const SORT_BY_MODIFIED_TIME = 5;
    const SORT_BY_NAME_NATURAL = 6;

    private \$iterator;
    private \$sort;

    /**
     * @param \\Traversable \$iterator The Iterator to filter
     * @param int|callable \$sort     The sort type (SORT_BY_NAME, SORT_BY_TYPE, or a PHP callback)
     *
     * @throws \\InvalidArgumentException
     */
    public function __construct(\\Traversable \$iterator, \$sort, bool \$reverseOrder = false)
    {
        \$this->iterator = \$iterator;
        \$order = \$reverseOrder ? -1 : 1;

        if (self::SORT_BY_NAME === \$sort) {
            \$this->sort = static function (\$a, \$b) use (\$order) {
                return \$order * strcmp(\$a->getRealPath() ?: \$a->getPathname(), \$b->getRealPath() ?: \$b->getPathname());
            };
        } elseif (self::SORT_BY_NAME_NATURAL === \$sort) {
            \$this->sort = static function (\$a, \$b) use (\$order) {
                return \$order * strnatcmp(\$a->getRealPath() ?: \$a->getPathname(), \$b->getRealPath() ?: \$b->getPathname());
            };
        } elseif (self::SORT_BY_TYPE === \$sort) {
            \$this->sort = static function (\$a, \$b) use (\$order) {
                if (\$a->isDir() && \$b->isFile()) {
                    return -\$order;
                } elseif (\$a->isFile() && \$b->isDir()) {
                    return \$order;
                }

                return \$order * strcmp(\$a->getRealPath() ?: \$a->getPathname(), \$b->getRealPath() ?: \$b->getPathname());
            };
        } elseif (self::SORT_BY_ACCESSED_TIME === \$sort) {
            \$this->sort = static function (\$a, \$b) use (\$order) {
                return \$order * (\$a->getATime() - \$b->getATime());
            };
        } elseif (self::SORT_BY_CHANGED_TIME === \$sort) {
            \$this->sort = static function (\$a, \$b) use (\$order) {
                return \$order * (\$a->getCTime() - \$b->getCTime());
            };
        } elseif (self::SORT_BY_MODIFIED_TIME === \$sort) {
            \$this->sort = static function (\$a, \$b) use (\$order) {
                return \$order * (\$a->getMTime() - \$b->getMTime());
            };
        } elseif (self::SORT_BY_NONE === \$sort) {
            \$this->sort = \$order;
        } elseif (\\is_callable(\$sort)) {
            \$this->sort = \$reverseOrder ? static function (\$a, \$b) use (\$sort) { return -\$sort(\$a, \$b); } : \$sort;
        } else {
            throw new \\InvalidArgumentException('The SortableIterator takes a PHP callable or a valid built-in sort algorithm as an argument.');
        }
    }

    public function getIterator()
    {
        if (1 === \$this->sort) {
            return \$this->iterator;
        }

        \$array = iterator_to_array(\$this->iterator, true);

        if (-1 === \$this->sort) {
            \$array = array_reverse(\$array);
        } else {
            uasort(\$array, \$this->sort);
        }

        return new \\ArrayIterator(\$array);
    }
}
", "vendor/symfony/finder/Iterator/SortableIterator.php", "/var/www/public/DevLaon/templates/vendor/symfony/finder/Iterator/SortableIterator.php");
    }
}
