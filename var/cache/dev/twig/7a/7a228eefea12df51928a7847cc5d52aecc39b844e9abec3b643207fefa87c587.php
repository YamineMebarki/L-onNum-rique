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

/* vendor/symfony/console/Helper/TableCell.php */
class __TwigTemplate_f32609d0a25c5024460d0b802f8d616c8c92b154d3c6a0b5bcdf01fe5e88e2b6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Helper/TableCell.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Helper/TableCell.php"));

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

namespace Symfony\\Component\\Console\\Helper;

use Symfony\\Component\\Console\\Exception\\InvalidArgumentException;

/**
 * @author Abdellatif Ait boudad <a.aitboudad@gmail.com>
 */
class TableCell
{
    private \$value;
    private \$options = [
        'rowspan' => 1,
        'colspan' => 1,
    ];

    public function __construct(string \$value = '', array \$options = [])
    {
        \$this->value = \$value;

        // check option names
        if (\$diff = array_diff(array_keys(\$options), array_keys(\$this->options))) {
            throw new InvalidArgumentException(sprintf('The TableCell does not support the following options: \\'%s\\'.', implode('\\', \\'', \$diff)));
        }

        \$this->options = array_merge(\$this->options, \$options);
    }

    /**
     * Returns the cell value.
     *
     * @return string
     */
    public function __toString()
    {
        return \$this->value;
    }

    /**
     * Gets number of colspan.
     *
     * @return int
     */
    public function getColspan()
    {
        return (int) \$this->options['colspan'];
    }

    /**
     * Gets number of rowspan.
     *
     * @return int
     */
    public function getRowspan()
    {
        return (int) \$this->options['rowspan'];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Helper/TableCell.php";
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

namespace Symfony\\Component\\Console\\Helper;

use Symfony\\Component\\Console\\Exception\\InvalidArgumentException;

/**
 * @author Abdellatif Ait boudad <a.aitboudad@gmail.com>
 */
class TableCell
{
    private \$value;
    private \$options = [
        'rowspan' => 1,
        'colspan' => 1,
    ];

    public function __construct(string \$value = '', array \$options = [])
    {
        \$this->value = \$value;

        // check option names
        if (\$diff = array_diff(array_keys(\$options), array_keys(\$this->options))) {
            throw new InvalidArgumentException(sprintf('The TableCell does not support the following options: \\'%s\\'.', implode('\\', \\'', \$diff)));
        }

        \$this->options = array_merge(\$this->options, \$options);
    }

    /**
     * Returns the cell value.
     *
     * @return string
     */
    public function __toString()
    {
        return \$this->value;
    }

    /**
     * Gets number of colspan.
     *
     * @return int
     */
    public function getColspan()
    {
        return (int) \$this->options['colspan'];
    }

    /**
     * Gets number of rowspan.
     *
     * @return int
     */
    public function getRowspan()
    {
        return (int) \$this->options['rowspan'];
    }
}
", "vendor/symfony/console/Helper/TableCell.php", "/var/www/public/DevLaon/templates/vendor/symfony/console/Helper/TableCell.php");
    }
}
