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

/* vendor/symfony/form/Util/InheritDataAwareIterator.php */
class __TwigTemplate_bd3b23fff89af7c620b81028aaea522f3fc98e443ece72d139766f9dfc5b6001 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Util/InheritDataAwareIterator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Util/InheritDataAwareIterator.php"));

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

namespace Symfony\\Component\\Form\\Util;

/**
 * Iterator that traverses an array of forms.
 *
 * Contrary to \\ArrayIterator, this iterator recognizes changes in the original
 * array during iteration.
 *
 * You can wrap the iterator into a {@link \\RecursiveIteratorIterator} in order to
 * enter any child form that inherits its parent's data and iterate the children
 * of that form as well.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class InheritDataAwareIterator extends \\IteratorIterator implements \\RecursiveIterator
{
    /**
     * {@inheritdoc}
     */
    public function getChildren()
    {
        return new static(\$this->current());
    }

    /**
     * {@inheritdoc}
     */
    public function hasChildren()
    {
        return (bool) \$this->current()->getConfig()->getInheritData();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Util/InheritDataAwareIterator.php";
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

namespace Symfony\\Component\\Form\\Util;

/**
 * Iterator that traverses an array of forms.
 *
 * Contrary to \\ArrayIterator, this iterator recognizes changes in the original
 * array during iteration.
 *
 * You can wrap the iterator into a {@link \\RecursiveIteratorIterator} in order to
 * enter any child form that inherits its parent's data and iterate the children
 * of that form as well.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class InheritDataAwareIterator extends \\IteratorIterator implements \\RecursiveIterator
{
    /**
     * {@inheritdoc}
     */
    public function getChildren()
    {
        return new static(\$this->current());
    }

    /**
     * {@inheritdoc}
     */
    public function hasChildren()
    {
        return (bool) \$this->current()->getConfig()->getInheritData();
    }
}
", "vendor/symfony/form/Util/InheritDataAwareIterator.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Util/InheritDataAwareIterator.php");
    }
}
