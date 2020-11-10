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

/* vendor/zendframework/zend-code/src/Annotation/Parser/ParserInterface.php */
class __TwigTemplate_ade3884fe9fa8ecb995adaec239bfab1e927a1c8bb7523218d959797e4620a5d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-code/src/Annotation/Parser/ParserInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-code/src/Annotation/Parser/ParserInterface.php"));

        // line 1
        echo "<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\\Code\\Annotation\\Parser;

use Zend\\EventManager\\EventInterface;

interface ParserInterface
{
    /**
     * Respond to the \"createAnnotation\" event
     *
     * @param  EventInterface  \$e
     * @return false|\\stdClass
     */
    public function onCreateAnnotation(EventInterface \$e);

    /**
     * Register an annotation this parser will accept
     *
     * @param  mixed \$annotation
     * @return void
     */
    public function registerAnnotation(\$annotation);

    /**
     * Register multiple annotations this parser will accept
     *
     * @param  array|\\Traversable \$annotations
     * @return void
     */
    public function registerAnnotations(\$annotations);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/zendframework/zend-code/src/Annotation/Parser/ParserInterface.php";
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
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\\Code\\Annotation\\Parser;

use Zend\\EventManager\\EventInterface;

interface ParserInterface
{
    /**
     * Respond to the \"createAnnotation\" event
     *
     * @param  EventInterface  \$e
     * @return false|\\stdClass
     */
    public function onCreateAnnotation(EventInterface \$e);

    /**
     * Register an annotation this parser will accept
     *
     * @param  mixed \$annotation
     * @return void
     */
    public function registerAnnotation(\$annotation);

    /**
     * Register multiple annotations this parser will accept
     *
     * @param  array|\\Traversable \$annotations
     * @return void
     */
    public function registerAnnotations(\$annotations);
}
", "vendor/zendframework/zend-code/src/Annotation/Parser/ParserInterface.php", "/var/www/public/DevLaon/templates/vendor/zendframework/zend-code/src/Annotation/Parser/ParserInterface.php");
    }
}
