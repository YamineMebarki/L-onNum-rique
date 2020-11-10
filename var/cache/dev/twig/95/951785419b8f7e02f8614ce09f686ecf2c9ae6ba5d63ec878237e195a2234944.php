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

/* vendor/zendframework/zend-code/src/Generator/DocBlock/Tag/AbstractTypeableTag.php */
class __TwigTemplate_5cf025e7902b1980032778a4dbff0147ec4a86f49870f9291d6b688177d6a394 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-code/src/Generator/DocBlock/Tag/AbstractTypeableTag.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-code/src/Generator/DocBlock/Tag/AbstractTypeableTag.php"));

        // line 1
        echo "<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\\Code\\Generator\\DocBlock\\Tag;

use Zend\\Code\\Generator\\AbstractGenerator;

use function explode;
use function implode;
use function is_string;

/**
 * This abstract class can be used as parent for all tags
 * that use a type part in their content.
 *
 * @see http://www.phpdoc.org/docs/latest/for-users/phpdoc/types.html
 */
abstract class AbstractTypeableTag extends AbstractGenerator
{
    /**
     * @var string
     */
    protected \$description;

    /**
     * @var array
     */
    protected \$types = [];

    /**
     * @param string|string[] \$types
     * @param string          \$description
     */
    public function __construct(\$types = [], \$description = null)
    {
        if (! empty(\$types)) {
            \$this->setTypes(\$types);
        }

        if (! empty(\$description)) {
            \$this->setDescription(\$description);
        }
    }

    /**
     * @param string \$description
     * @return AbstractTypeableTag
     */
    public function setDescription(\$description)
    {
        \$this->description = \$description;
        return \$this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return \$this->description;
    }

    /**
     * Array of types or string with types delimited by pipe (|)
     * e.g. array('int', 'null') or \"int|null\"
     *
     * @param array|string \$types
     * @return AbstractTypeableTag
     */
    public function setTypes(\$types)
    {
        if (is_string(\$types)) {
            \$types = explode('|', \$types);
        }
        \$this->types = \$types;
        return \$this;
    }

    /**
     * @return array
     */
    public function getTypes()
    {
        return \$this->types;
    }

    /**
     * @param string \$delimiter
     * @return string
     */
    public function getTypesAsString(\$delimiter = '|')
    {
        return implode(\$delimiter, \$this->types);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/zendframework/zend-code/src/Generator/DocBlock/Tag/AbstractTypeableTag.php";
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

namespace Zend\\Code\\Generator\\DocBlock\\Tag;

use Zend\\Code\\Generator\\AbstractGenerator;

use function explode;
use function implode;
use function is_string;

/**
 * This abstract class can be used as parent for all tags
 * that use a type part in their content.
 *
 * @see http://www.phpdoc.org/docs/latest/for-users/phpdoc/types.html
 */
abstract class AbstractTypeableTag extends AbstractGenerator
{
    /**
     * @var string
     */
    protected \$description;

    /**
     * @var array
     */
    protected \$types = [];

    /**
     * @param string|string[] \$types
     * @param string          \$description
     */
    public function __construct(\$types = [], \$description = null)
    {
        if (! empty(\$types)) {
            \$this->setTypes(\$types);
        }

        if (! empty(\$description)) {
            \$this->setDescription(\$description);
        }
    }

    /**
     * @param string \$description
     * @return AbstractTypeableTag
     */
    public function setDescription(\$description)
    {
        \$this->description = \$description;
        return \$this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return \$this->description;
    }

    /**
     * Array of types or string with types delimited by pipe (|)
     * e.g. array('int', 'null') or \"int|null\"
     *
     * @param array|string \$types
     * @return AbstractTypeableTag
     */
    public function setTypes(\$types)
    {
        if (is_string(\$types)) {
            \$types = explode('|', \$types);
        }
        \$this->types = \$types;
        return \$this;
    }

    /**
     * @return array
     */
    public function getTypes()
    {
        return \$this->types;
    }

    /**
     * @param string \$delimiter
     * @return string
     */
    public function getTypesAsString(\$delimiter = '|')
    {
        return implode(\$delimiter, \$this->types);
    }
}
", "vendor/zendframework/zend-code/src/Generator/DocBlock/Tag/AbstractTypeableTag.php", "/var/www/public/DevLaon/templates/vendor/zendframework/zend-code/src/Generator/DocBlock/Tag/AbstractTypeableTag.php");
    }
}
