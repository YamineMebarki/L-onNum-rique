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

/* vendor/symfony/css-selector/Node/Specificity.php */
class __TwigTemplate_a813f7c9e4f20b4347da1af0154d1ceea6ca7c02c7c1e15f922a8b0f10683edb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/Node/Specificity.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/Node/Specificity.php"));

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

namespace Symfony\\Component\\CssSelector\\Node;

/**
 * Represents a node specificity.
 *
 * This component is a port of the Python cssselect library,
 * which is copyright Ian Bicking, @see https://github.com/SimonSapin/cssselect.
 *
 * @see http://www.w3.org/TR/selectors/#specificity
 *
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
class Specificity
{
    const A_FACTOR = 100;
    const B_FACTOR = 10;
    const C_FACTOR = 1;

    private \$a;
    private \$b;
    private \$c;

    public function __construct(int \$a, int \$b, int \$c)
    {
        \$this->a = \$a;
        \$this->b = \$b;
        \$this->c = \$c;
    }

    public function plus(self \$specificity): self
    {
        return new self(\$this->a + \$specificity->a, \$this->b + \$specificity->b, \$this->c + \$specificity->c);
    }

    public function getValue(): int
    {
        return \$this->a * self::A_FACTOR + \$this->b * self::B_FACTOR + \$this->c * self::C_FACTOR;
    }

    /**
     * Returns -1 if the object specificity is lower than the argument,
     * 0 if they are equal, and 1 if the argument is lower.
     *
     * @return int
     */
    public function compareTo(self \$specificity)
    {
        if (\$this->a !== \$specificity->a) {
            return \$this->a > \$specificity->a ? 1 : -1;
        }

        if (\$this->b !== \$specificity->b) {
            return \$this->b > \$specificity->b ? 1 : -1;
        }

        if (\$this->c !== \$specificity->c) {
            return \$this->c > \$specificity->c ? 1 : -1;
        }

        return 0;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/css-selector/Node/Specificity.php";
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

namespace Symfony\\Component\\CssSelector\\Node;

/**
 * Represents a node specificity.
 *
 * This component is a port of the Python cssselect library,
 * which is copyright Ian Bicking, @see https://github.com/SimonSapin/cssselect.
 *
 * @see http://www.w3.org/TR/selectors/#specificity
 *
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
class Specificity
{
    const A_FACTOR = 100;
    const B_FACTOR = 10;
    const C_FACTOR = 1;

    private \$a;
    private \$b;
    private \$c;

    public function __construct(int \$a, int \$b, int \$c)
    {
        \$this->a = \$a;
        \$this->b = \$b;
        \$this->c = \$c;
    }

    public function plus(self \$specificity): self
    {
        return new self(\$this->a + \$specificity->a, \$this->b + \$specificity->b, \$this->c + \$specificity->c);
    }

    public function getValue(): int
    {
        return \$this->a * self::A_FACTOR + \$this->b * self::B_FACTOR + \$this->c * self::C_FACTOR;
    }

    /**
     * Returns -1 if the object specificity is lower than the argument,
     * 0 if they are equal, and 1 if the argument is lower.
     *
     * @return int
     */
    public function compareTo(self \$specificity)
    {
        if (\$this->a !== \$specificity->a) {
            return \$this->a > \$specificity->a ? 1 : -1;
        }

        if (\$this->b !== \$specificity->b) {
            return \$this->b > \$specificity->b ? 1 : -1;
        }

        if (\$this->c !== \$specificity->c) {
            return \$this->c > \$specificity->c ? 1 : -1;
        }

        return 0;
    }
}
", "vendor/symfony/css-selector/Node/Specificity.php", "/var/www/public/DevLaon/templates/vendor/symfony/css-selector/Node/Specificity.php");
    }
}
