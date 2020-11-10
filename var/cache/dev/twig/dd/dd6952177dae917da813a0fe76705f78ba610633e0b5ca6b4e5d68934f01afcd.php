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

/* vendor/symfony/browser-kit/History.php */
class __TwigTemplate_f0a875336ba05eb630ae2aacbc089fed64c2ddd4bc80ee064bff871818b5127f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/browser-kit/History.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/browser-kit/History.php"));

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

namespace Symfony\\Component\\BrowserKit;

/**
 * History.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class History
{
    protected \$stack = [];
    protected \$position = -1;

    /**
     * Clears the history.
     */
    public function clear()
    {
        \$this->stack = [];
        \$this->position = -1;
    }

    /**
     * Adds a Request to the history.
     */
    public function add(Request \$request)
    {
        \$this->stack = \\array_slice(\$this->stack, 0, \$this->position + 1);
        \$this->stack[] = clone \$request;
        \$this->position = \\count(\$this->stack) - 1;
    }

    /**
     * Returns true if the history is empty.
     *
     * @return bool true if the history is empty, false otherwise
     */
    public function isEmpty()
    {
        return 0 == \\count(\$this->stack);
    }

    /**
     * Goes back in the history.
     *
     * @return Request A Request instance
     *
     * @throws \\LogicException if the stack is already on the first page
     */
    public function back()
    {
        if (\$this->position < 1) {
            throw new \\LogicException('You are already on the first page.');
        }

        return clone \$this->stack[--\$this->position];
    }

    /**
     * Goes forward in the history.
     *
     * @return Request A Request instance
     *
     * @throws \\LogicException if the stack is already on the last page
     */
    public function forward()
    {
        if (\$this->position > \\count(\$this->stack) - 2) {
            throw new \\LogicException('You are already on the last page.');
        }

        return clone \$this->stack[++\$this->position];
    }

    /**
     * Returns the current element in the history.
     *
     * @return Request A Request instance
     *
     * @throws \\LogicException if the stack is empty
     */
    public function current()
    {
        if (-1 == \$this->position) {
            throw new \\LogicException('The page history is empty.');
        }

        return clone \$this->stack[\$this->position];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/browser-kit/History.php";
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

namespace Symfony\\Component\\BrowserKit;

/**
 * History.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class History
{
    protected \$stack = [];
    protected \$position = -1;

    /**
     * Clears the history.
     */
    public function clear()
    {
        \$this->stack = [];
        \$this->position = -1;
    }

    /**
     * Adds a Request to the history.
     */
    public function add(Request \$request)
    {
        \$this->stack = \\array_slice(\$this->stack, 0, \$this->position + 1);
        \$this->stack[] = clone \$request;
        \$this->position = \\count(\$this->stack) - 1;
    }

    /**
     * Returns true if the history is empty.
     *
     * @return bool true if the history is empty, false otherwise
     */
    public function isEmpty()
    {
        return 0 == \\count(\$this->stack);
    }

    /**
     * Goes back in the history.
     *
     * @return Request A Request instance
     *
     * @throws \\LogicException if the stack is already on the first page
     */
    public function back()
    {
        if (\$this->position < 1) {
            throw new \\LogicException('You are already on the first page.');
        }

        return clone \$this->stack[--\$this->position];
    }

    /**
     * Goes forward in the history.
     *
     * @return Request A Request instance
     *
     * @throws \\LogicException if the stack is already on the last page
     */
    public function forward()
    {
        if (\$this->position > \\count(\$this->stack) - 2) {
            throw new \\LogicException('You are already on the last page.');
        }

        return clone \$this->stack[++\$this->position];
    }

    /**
     * Returns the current element in the history.
     *
     * @return Request A Request instance
     *
     * @throws \\LogicException if the stack is empty
     */
    public function current()
    {
        if (-1 == \$this->position) {
            throw new \\LogicException('The page history is empty.');
        }

        return clone \$this->stack[\$this->position];
    }
}
", "vendor/symfony/browser-kit/History.php", "/var/www/public/DevLaon/templates/vendor/symfony/browser-kit/History.php");
    }
}
