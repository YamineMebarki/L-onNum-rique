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

/* vendor/zendframework/zend-code/src/Scanner/ParameterScanner.php */
class __TwigTemplate_c0eb36558d831655d3fc595395583e647d716b31aa28b9e6ca4def0b6eec00a8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-code/src/Scanner/ParameterScanner.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-code/src/Scanner/ParameterScanner.php"));

        // line 1
        echo "<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\\Code\\Scanner;

use Zend\\Code\\NameInformation;

use function current;
use function is_string;
use function ltrim;
use function next;
use function reset;
use function trim;

class ParameterScanner
{
    /**
     * @var bool
     */
    protected \$isScanned = false;

    /**
     * @var null|ClassScanner
     */
    protected \$declaringScannerClass;

    /**
     * @var null|string
     */
    protected \$declaringClass;

    /**
     * @var null|MethodScanner
     */
    protected \$declaringScannerFunction;

    /**
     * @var null|string
     */
    protected \$declaringFunction;

    /**
     * @var null|string
     */
    protected \$defaultValue;

    /**
     * @var null|string
     */
    protected \$class;

    /**
     * @var null|string
     */
    protected \$name;

    /**
     * @var null|int
     */
    protected \$position;

    /**
     * @var bool
     */
    protected \$isArray = false;

    /**
     * @var bool
     */
    protected \$isDefaultValueAvailable = false;

    /**
     * @var bool
     */
    protected \$isOptional = false;

    /**
     * @var bool
     */
    protected \$isPassedByReference = false;

    /**
     * @var array|null
     */
    protected \$tokens;

    /**
     * @var null|NameInformation
     */
    protected \$nameInformation;

    /**
     * @param  array \$parameterTokens
     * @param  NameInformation \$nameInformation
     */
    public function __construct(array \$parameterTokens, NameInformation \$nameInformation = null)
    {
        \$this->tokens          = \$parameterTokens;
        \$this->nameInformation = \$nameInformation;
    }

    /**
     * Set declaring class
     *
     * @param  string \$class
     * @return void
     */
    public function setDeclaringClass(\$class)
    {
        \$this->declaringClass = (string) \$class;
    }

    /**
     * Set declaring scanner class
     *
     * @param  ClassScanner \$scannerClass
     * @return void
     */
    public function setDeclaringScannerClass(ClassScanner \$scannerClass)
    {
        \$this->declaringScannerClass = \$scannerClass;
    }

    /**
     * Set declaring function
     *
     * @param  string \$function
     * @return void
     */
    public function setDeclaringFunction(\$function)
    {
        \$this->declaringFunction = \$function;
    }

    /**
     * Set declaring scanner function
     *
     * @param  MethodScanner \$scannerFunction
     * @return void
     */
    public function setDeclaringScannerFunction(MethodScanner \$scannerFunction)
    {
        \$this->declaringScannerFunction = \$scannerFunction;
    }

    /**
     * Set position
     *
     * @param  int \$position
     * @return void
     */
    public function setPosition(\$position)
    {
        \$this->position = \$position;
    }

    /**
     * Scan
     *
     * @return void
     */
    protected function scan()
    {
        if (\$this->isScanned) {
            return;
        }

        \$tokens = &\$this->tokens;

        reset(\$tokens);

        SCANNER_TOP:

        \$token = current(\$tokens);

        if (is_string(\$token)) {
            // check pass by ref
            if (\$token === '&') {
                \$this->isPassedByReference = true;
                goto SCANNER_CONTINUE;
            }
            if (\$token === '=') {
                \$this->isOptional              = true;
                \$this->isDefaultValueAvailable = true;
                goto SCANNER_CONTINUE;
            }
        } else {
            if (\$this->name === null && (\$token[0] === T_STRING || \$token[0] === T_NS_SEPARATOR)) {
                \$this->class .= \$token[1];
                goto SCANNER_CONTINUE;
            }
            if (\$token[0] === T_VARIABLE) {
                \$this->name = ltrim(\$token[1], '\$');
                goto SCANNER_CONTINUE;
            }
        }

        if (\$this->name !== null) {
            \$this->defaultValue .= trim(is_string(\$token) ? \$token : \$token[1]);
        }

        SCANNER_CONTINUE:

        if (next(\$this->tokens) === false) {
            goto SCANNER_END;
        }
        goto SCANNER_TOP;

        SCANNER_END:

        if (\$this->class && \$this->nameInformation) {
            \$this->class = \$this->nameInformation->resolveName(\$this->class);
        }

        \$this->isScanned = true;
    }

    /**
     * Get declaring scanner class
     *
     * @return ClassScanner
     */
    public function getDeclaringScannerClass()
    {
        return \$this->declaringScannerClass;
    }

    /**
     * Get declaring class
     *
     * @return string
     */
    public function getDeclaringClass()
    {
        return \$this->declaringClass;
    }

    /**
     * Get declaring scanner function
     *
     * @return MethodScanner
     */
    public function getDeclaringScannerFunction()
    {
        return \$this->declaringScannerFunction;
    }

    /**
     * Get declaring function
     *
     * @return string
     */
    public function getDeclaringFunction()
    {
        return \$this->declaringFunction;
    }

    /**
     * Get default value
     *
     * @return string
     */
    public function getDefaultValue()
    {
        \$this->scan();

        return \$this->defaultValue;
    }

    /**
     * Get class
     *
     * @return string
     */
    public function getClass()
    {
        \$this->scan();

        return \$this->class;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        \$this->scan();

        return \$this->name;
    }

    /**
     * Get position
     *
     * @return int
     */
    public function getPosition()
    {
        \$this->scan();

        return \$this->position;
    }

    /**
     * Check if is array
     *
     * @return bool
     */
    public function isArray()
    {
        \$this->scan();

        return \$this->isArray;
    }

    /**
     * Check if default value is available
     *
     * @return bool
     */
    public function isDefaultValueAvailable()
    {
        \$this->scan();

        return \$this->isDefaultValueAvailable;
    }

    /**
     * Check if is optional
     *
     * @return bool
     */
    public function isOptional()
    {
        \$this->scan();

        return \$this->isOptional;
    }

    /**
     * Check if is passed by reference
     *
     * @return bool
     */
    public function isPassedByReference()
    {
        \$this->scan();

        return \$this->isPassedByReference;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/zendframework/zend-code/src/Scanner/ParameterScanner.php";
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

namespace Zend\\Code\\Scanner;

use Zend\\Code\\NameInformation;

use function current;
use function is_string;
use function ltrim;
use function next;
use function reset;
use function trim;

class ParameterScanner
{
    /**
     * @var bool
     */
    protected \$isScanned = false;

    /**
     * @var null|ClassScanner
     */
    protected \$declaringScannerClass;

    /**
     * @var null|string
     */
    protected \$declaringClass;

    /**
     * @var null|MethodScanner
     */
    protected \$declaringScannerFunction;

    /**
     * @var null|string
     */
    protected \$declaringFunction;

    /**
     * @var null|string
     */
    protected \$defaultValue;

    /**
     * @var null|string
     */
    protected \$class;

    /**
     * @var null|string
     */
    protected \$name;

    /**
     * @var null|int
     */
    protected \$position;

    /**
     * @var bool
     */
    protected \$isArray = false;

    /**
     * @var bool
     */
    protected \$isDefaultValueAvailable = false;

    /**
     * @var bool
     */
    protected \$isOptional = false;

    /**
     * @var bool
     */
    protected \$isPassedByReference = false;

    /**
     * @var array|null
     */
    protected \$tokens;

    /**
     * @var null|NameInformation
     */
    protected \$nameInformation;

    /**
     * @param  array \$parameterTokens
     * @param  NameInformation \$nameInformation
     */
    public function __construct(array \$parameterTokens, NameInformation \$nameInformation = null)
    {
        \$this->tokens          = \$parameterTokens;
        \$this->nameInformation = \$nameInformation;
    }

    /**
     * Set declaring class
     *
     * @param  string \$class
     * @return void
     */
    public function setDeclaringClass(\$class)
    {
        \$this->declaringClass = (string) \$class;
    }

    /**
     * Set declaring scanner class
     *
     * @param  ClassScanner \$scannerClass
     * @return void
     */
    public function setDeclaringScannerClass(ClassScanner \$scannerClass)
    {
        \$this->declaringScannerClass = \$scannerClass;
    }

    /**
     * Set declaring function
     *
     * @param  string \$function
     * @return void
     */
    public function setDeclaringFunction(\$function)
    {
        \$this->declaringFunction = \$function;
    }

    /**
     * Set declaring scanner function
     *
     * @param  MethodScanner \$scannerFunction
     * @return void
     */
    public function setDeclaringScannerFunction(MethodScanner \$scannerFunction)
    {
        \$this->declaringScannerFunction = \$scannerFunction;
    }

    /**
     * Set position
     *
     * @param  int \$position
     * @return void
     */
    public function setPosition(\$position)
    {
        \$this->position = \$position;
    }

    /**
     * Scan
     *
     * @return void
     */
    protected function scan()
    {
        if (\$this->isScanned) {
            return;
        }

        \$tokens = &\$this->tokens;

        reset(\$tokens);

        SCANNER_TOP:

        \$token = current(\$tokens);

        if (is_string(\$token)) {
            // check pass by ref
            if (\$token === '&') {
                \$this->isPassedByReference = true;
                goto SCANNER_CONTINUE;
            }
            if (\$token === '=') {
                \$this->isOptional              = true;
                \$this->isDefaultValueAvailable = true;
                goto SCANNER_CONTINUE;
            }
        } else {
            if (\$this->name === null && (\$token[0] === T_STRING || \$token[0] === T_NS_SEPARATOR)) {
                \$this->class .= \$token[1];
                goto SCANNER_CONTINUE;
            }
            if (\$token[0] === T_VARIABLE) {
                \$this->name = ltrim(\$token[1], '\$');
                goto SCANNER_CONTINUE;
            }
        }

        if (\$this->name !== null) {
            \$this->defaultValue .= trim(is_string(\$token) ? \$token : \$token[1]);
        }

        SCANNER_CONTINUE:

        if (next(\$this->tokens) === false) {
            goto SCANNER_END;
        }
        goto SCANNER_TOP;

        SCANNER_END:

        if (\$this->class && \$this->nameInformation) {
            \$this->class = \$this->nameInformation->resolveName(\$this->class);
        }

        \$this->isScanned = true;
    }

    /**
     * Get declaring scanner class
     *
     * @return ClassScanner
     */
    public function getDeclaringScannerClass()
    {
        return \$this->declaringScannerClass;
    }

    /**
     * Get declaring class
     *
     * @return string
     */
    public function getDeclaringClass()
    {
        return \$this->declaringClass;
    }

    /**
     * Get declaring scanner function
     *
     * @return MethodScanner
     */
    public function getDeclaringScannerFunction()
    {
        return \$this->declaringScannerFunction;
    }

    /**
     * Get declaring function
     *
     * @return string
     */
    public function getDeclaringFunction()
    {
        return \$this->declaringFunction;
    }

    /**
     * Get default value
     *
     * @return string
     */
    public function getDefaultValue()
    {
        \$this->scan();

        return \$this->defaultValue;
    }

    /**
     * Get class
     *
     * @return string
     */
    public function getClass()
    {
        \$this->scan();

        return \$this->class;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        \$this->scan();

        return \$this->name;
    }

    /**
     * Get position
     *
     * @return int
     */
    public function getPosition()
    {
        \$this->scan();

        return \$this->position;
    }

    /**
     * Check if is array
     *
     * @return bool
     */
    public function isArray()
    {
        \$this->scan();

        return \$this->isArray;
    }

    /**
     * Check if default value is available
     *
     * @return bool
     */
    public function isDefaultValueAvailable()
    {
        \$this->scan();

        return \$this->isDefaultValueAvailable;
    }

    /**
     * Check if is optional
     *
     * @return bool
     */
    public function isOptional()
    {
        \$this->scan();

        return \$this->isOptional;
    }

    /**
     * Check if is passed by reference
     *
     * @return bool
     */
    public function isPassedByReference()
    {
        \$this->scan();

        return \$this->isPassedByReference;
    }
}
", "vendor/zendframework/zend-code/src/Scanner/ParameterScanner.php", "/var/www/public/DevLaon/templates/vendor/zendframework/zend-code/src/Scanner/ParameterScanner.php");
    }
}
