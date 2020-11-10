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

/* vendor/zendframework/zend-code/src/Reflection/DocBlock/Tag/ThrowsTag.php */
class __TwigTemplate_f2ec81d64c046dfd5f9df35c5779d1fd822e051888232b4a6857e759c42e5ff4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-code/src/Reflection/DocBlock/Tag/ThrowsTag.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-code/src/Reflection/DocBlock/Tag/ThrowsTag.php"));

        // line 1
        echo "<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\\Code\\Reflection\\DocBlock\\Tag;

use function explode;
use function implode;
use function preg_match;

class ThrowsTag implements TagInterface, PhpDocTypedTagInterface
{
    /**
     * @var array
     */
    protected \$types = [];

    /**
     * @var string
     */
    protected \$description;

    /**
     * @return string
     */
    public function getName()
    {
        return 'throws';
    }

    /**
     * @param  string \$tagDocBlockLine
     * @return void
     */
    public function initialize(\$tagDocBlockLine)
    {
        \$matches = [];
        preg_match('#([\\w|\\\\\\]+)(?:\\s+(.*))?#', \$tagDocBlockLine, \$matches);

        \$this->types = explode('|', \$matches[1]);

        if (isset(\$matches[2])) {
            \$this->description = \$matches[2];
        }
    }

    /**
     * Get return variable type
     *
     * @return string
     * @deprecated 2.0.4 use getTypes instead
     */
    public function getType()
    {
        return implode('|', \$this->getTypes());
    }

    /**
     * @return array
     */
    public function getTypes()
    {
        return \$this->types;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return \$this->description;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/zendframework/zend-code/src/Reflection/DocBlock/Tag/ThrowsTag.php";
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

namespace Zend\\Code\\Reflection\\DocBlock\\Tag;

use function explode;
use function implode;
use function preg_match;

class ThrowsTag implements TagInterface, PhpDocTypedTagInterface
{
    /**
     * @var array
     */
    protected \$types = [];

    /**
     * @var string
     */
    protected \$description;

    /**
     * @return string
     */
    public function getName()
    {
        return 'throws';
    }

    /**
     * @param  string \$tagDocBlockLine
     * @return void
     */
    public function initialize(\$tagDocBlockLine)
    {
        \$matches = [];
        preg_match('#([\\w|\\\\\\]+)(?:\\s+(.*))?#', \$tagDocBlockLine, \$matches);

        \$this->types = explode('|', \$matches[1]);

        if (isset(\$matches[2])) {
            \$this->description = \$matches[2];
        }
    }

    /**
     * Get return variable type
     *
     * @return string
     * @deprecated 2.0.4 use getTypes instead
     */
    public function getType()
    {
        return implode('|', \$this->getTypes());
    }

    /**
     * @return array
     */
    public function getTypes()
    {
        return \$this->types;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return \$this->description;
    }
}
", "vendor/zendframework/zend-code/src/Reflection/DocBlock/Tag/ThrowsTag.php", "/var/www/public/DevLaon/templates/vendor/zendframework/zend-code/src/Reflection/DocBlock/Tag/ThrowsTag.php");
    }
}
