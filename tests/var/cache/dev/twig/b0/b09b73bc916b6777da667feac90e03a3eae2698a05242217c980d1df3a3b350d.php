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

/* vendor/symfony/property-access/PropertyPathIterator.php */
class __TwigTemplate_d91d8ff6042f88fe37346e8a9d3a0d975a4f22656ba3559f24f330f4f67edee5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/property-access/PropertyPathIterator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/property-access/PropertyPathIterator.php"));

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

namespace Symfony\\Component\\PropertyAccess;

/**
 * Traverses a property path and provides additional methods to find out
 * information about the current element.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class PropertyPathIterator extends \\ArrayIterator implements PropertyPathIteratorInterface
{
    protected \$path;

    /**
     * @param PropertyPathInterface \$path The property path to traverse
     */
    public function __construct(PropertyPathInterface \$path)
    {
        parent::__construct(\$path->getElements());

        \$this->path = \$path;
    }

    /**
     * {@inheritdoc}
     */
    public function isIndex()
    {
        return \$this->path->isIndex(\$this->key());
    }

    /**
     * {@inheritdoc}
     */
    public function isProperty()
    {
        return \$this->path->isProperty(\$this->key());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/property-access/PropertyPathIterator.php";
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

namespace Symfony\\Component\\PropertyAccess;

/**
 * Traverses a property path and provides additional methods to find out
 * information about the current element.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class PropertyPathIterator extends \\ArrayIterator implements PropertyPathIteratorInterface
{
    protected \$path;

    /**
     * @param PropertyPathInterface \$path The property path to traverse
     */
    public function __construct(PropertyPathInterface \$path)
    {
        parent::__construct(\$path->getElements());

        \$this->path = \$path;
    }

    /**
     * {@inheritdoc}
     */
    public function isIndex()
    {
        return \$this->path->isIndex(\$this->key());
    }

    /**
     * {@inheritdoc}
     */
    public function isProperty()
    {
        return \$this->path->isProperty(\$this->key());
    }
}
", "vendor/symfony/property-access/PropertyPathIterator.php", "/var/www/public/DevLaon/templates/vendor/symfony/property-access/PropertyPathIterator.php");
    }
}
