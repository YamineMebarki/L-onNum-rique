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

/* vendor/zendframework/zend-eventmanager/src/ResponseCollection.php */
class __TwigTemplate_519365ba1be072dc95cc7251d74f43b041b5cb8d040cd8666a692710acb8ff0a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-eventmanager/src/ResponseCollection.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-eventmanager/src/ResponseCollection.php"));

        // line 1
        echo "<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zend-eventmanager for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   https://github.com/zendframework/zend-eventmanager/blob/master/LICENSE.md
 */

namespace Zend\\EventManager;

use SplStack;

/**
 * Collection of signal handler return values
 */
class ResponseCollection extends SplStack
{
    protected \$stopped = false;

    /**
     * Did the last response provided trigger a short circuit of the stack?
     *
     * @return bool
     */
    public function stopped()
    {
        return \$this->stopped;
    }

    /**
     * Mark the collection as stopped (or its opposite)
     *
     * @param  bool \$flag
     */
    public function setStopped(\$flag)
    {
        \$this->stopped = (bool) \$flag;
    }

    /**
     * Convenient access to the first handler return value.
     *
     * @return mixed The first handler return value
     */
    public function first()
    {
        return parent::bottom();
    }

    /**
     * Convenient access to the last handler return value.
     *
     * If the collection is empty, returns null. Otherwise, returns value
     * returned by last handler.
     *
     * @return mixed The last handler return value
     */
    public function last()
    {
        if (count(\$this) === 0) {
            return;
        }
        return parent::top();
    }

    /**
     * Check if any of the responses match the given value.
     *
     * @param  mixed \$value The value to look for among responses
     * @return bool
     */
    public function contains(\$value)
    {
        foreach (\$this as \$response) {
            if (\$response === \$value) {
                return true;
            }
        }
        return false;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/zendframework/zend-eventmanager/src/ResponseCollection.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zend-eventmanager for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   https://github.com/zendframework/zend-eventmanager/blob/master/LICENSE.md
 */

namespace Zend\\EventManager;

use SplStack;

/**
 * Collection of signal handler return values
 */
class ResponseCollection extends SplStack
{
    protected \$stopped = false;

    /**
     * Did the last response provided trigger a short circuit of the stack?
     *
     * @return bool
     */
    public function stopped()
    {
        return \$this->stopped;
    }

    /**
     * Mark the collection as stopped (or its opposite)
     *
     * @param  bool \$flag
     */
    public function setStopped(\$flag)
    {
        \$this->stopped = (bool) \$flag;
    }

    /**
     * Convenient access to the first handler return value.
     *
     * @return mixed The first handler return value
     */
    public function first()
    {
        return parent::bottom();
    }

    /**
     * Convenient access to the last handler return value.
     *
     * If the collection is empty, returns null. Otherwise, returns value
     * returned by last handler.
     *
     * @return mixed The last handler return value
     */
    public function last()
    {
        if (count(\$this) === 0) {
            return;
        }
        return parent::top();
    }

    /**
     * Check if any of the responses match the given value.
     *
     * @param  mixed \$value The value to look for among responses
     * @return bool
     */
    public function contains(\$value)
    {
        foreach (\$this as \$response) {
            if (\$response === \$value) {
                return true;
            }
        }
        return false;
    }
}
", "vendor/zendframework/zend-eventmanager/src/ResponseCollection.php", "/var/www/public/DevLaon/templates/vendor/zendframework/zend-eventmanager/src/ResponseCollection.php");
    }
}
