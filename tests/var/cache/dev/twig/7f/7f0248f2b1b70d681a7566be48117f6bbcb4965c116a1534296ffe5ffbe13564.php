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

/* vendor/zendframework/zend-code/src/Generator/AbstractGenerator.php */
class __TwigTemplate_dc4cf43a764c0855f6e8d09ecfd31e2e306633e2a3b402a2668ccd3cd7cdb694 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-code/src/Generator/AbstractGenerator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-code/src/Generator/AbstractGenerator.php"));

        // line 1
        echo "<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\\Code\\Generator;

use Traversable;

use function get_class;
use function gettype;
use function is_array;
use function is_object;
use function method_exists;
use function sprintf;

abstract class AbstractGenerator implements GeneratorInterface
{
    /**
     * Line feed to use in place of EOL
     */
    const LINE_FEED = \"\\n\";

    /**
     * @var bool
     */
    protected \$isSourceDirty = true;

    /**
     * @var int|string 4 spaces by default
     */
    protected \$indentation = '    ';

    /**
     * @var string
     */
    protected \$sourceContent;

    /**
     * @param  array \$options
     */
    public function __construct(\$options = [])
    {
        if (\$options) {
            \$this->setOptions(\$options);
        }
    }

    /**
     * @param  bool \$isSourceDirty
     * @return AbstractGenerator
     */
    public function setSourceDirty(\$isSourceDirty = true)
    {
        \$this->isSourceDirty = (bool) \$isSourceDirty;
        return \$this;
    }

    /**
     * @return bool
     */
    public function isSourceDirty()
    {
        return \$this->isSourceDirty;
    }

    /**
     * @param  string \$indentation
     * @return AbstractGenerator
     */
    public function setIndentation(\$indentation)
    {
        \$this->indentation = (string) \$indentation;
        return \$this;
    }

    /**
     * @return string
     */
    public function getIndentation()
    {
        return \$this->indentation;
    }

    /**
     * @param  string \$sourceContent
     * @return AbstractGenerator
     */
    public function setSourceContent(\$sourceContent)
    {
        \$this->sourceContent = (string) \$sourceContent;
        return \$this;
    }

    /**
     * @return string
     */
    public function getSourceContent()
    {
        return \$this->sourceContent;
    }

    /**
     * @param  array|Traversable \$options
     * @throws Exception\\InvalidArgumentException
     * @return AbstractGenerator
     */
    public function setOptions(\$options)
    {
        if (! is_array(\$options) && ! \$options instanceof Traversable) {
            throw new Exception\\InvalidArgumentException(sprintf(
                '%s expects an array or Traversable object; received \"%s\"',
                __METHOD__,
                is_object(\$options) ? get_class(\$options) : gettype(\$options)
            ));
        }

        foreach (\$options as \$optionName => \$optionValue) {
            \$methodName = 'set' . \$optionName;
            if (method_exists(\$this, \$methodName)) {
                \$this->{\$methodName}(\$optionValue);
            }
        }

        return \$this;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/zendframework/zend-code/src/Generator/AbstractGenerator.php";
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

namespace Zend\\Code\\Generator;

use Traversable;

use function get_class;
use function gettype;
use function is_array;
use function is_object;
use function method_exists;
use function sprintf;

abstract class AbstractGenerator implements GeneratorInterface
{
    /**
     * Line feed to use in place of EOL
     */
    const LINE_FEED = \"\\n\";

    /**
     * @var bool
     */
    protected \$isSourceDirty = true;

    /**
     * @var int|string 4 spaces by default
     */
    protected \$indentation = '    ';

    /**
     * @var string
     */
    protected \$sourceContent;

    /**
     * @param  array \$options
     */
    public function __construct(\$options = [])
    {
        if (\$options) {
            \$this->setOptions(\$options);
        }
    }

    /**
     * @param  bool \$isSourceDirty
     * @return AbstractGenerator
     */
    public function setSourceDirty(\$isSourceDirty = true)
    {
        \$this->isSourceDirty = (bool) \$isSourceDirty;
        return \$this;
    }

    /**
     * @return bool
     */
    public function isSourceDirty()
    {
        return \$this->isSourceDirty;
    }

    /**
     * @param  string \$indentation
     * @return AbstractGenerator
     */
    public function setIndentation(\$indentation)
    {
        \$this->indentation = (string) \$indentation;
        return \$this;
    }

    /**
     * @return string
     */
    public function getIndentation()
    {
        return \$this->indentation;
    }

    /**
     * @param  string \$sourceContent
     * @return AbstractGenerator
     */
    public function setSourceContent(\$sourceContent)
    {
        \$this->sourceContent = (string) \$sourceContent;
        return \$this;
    }

    /**
     * @return string
     */
    public function getSourceContent()
    {
        return \$this->sourceContent;
    }

    /**
     * @param  array|Traversable \$options
     * @throws Exception\\InvalidArgumentException
     * @return AbstractGenerator
     */
    public function setOptions(\$options)
    {
        if (! is_array(\$options) && ! \$options instanceof Traversable) {
            throw new Exception\\InvalidArgumentException(sprintf(
                '%s expects an array or Traversable object; received \"%s\"',
                __METHOD__,
                is_object(\$options) ? get_class(\$options) : gettype(\$options)
            ));
        }

        foreach (\$options as \$optionName => \$optionValue) {
            \$methodName = 'set' . \$optionName;
            if (method_exists(\$this, \$methodName)) {
                \$this->{\$methodName}(\$optionValue);
            }
        }

        return \$this;
    }
}
", "vendor/zendframework/zend-code/src/Generator/AbstractGenerator.php", "/var/www/public/DevLaon/templates/vendor/zendframework/zend-code/src/Generator/AbstractGenerator.php");
    }
}
