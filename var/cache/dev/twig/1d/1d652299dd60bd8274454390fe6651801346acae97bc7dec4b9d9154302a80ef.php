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

/* vendor/zendframework/zend-code/src/Generic/Prototype/PrototypeClassFactory.php */
class __TwigTemplate_11fda289a166b2e4ba3c916ba8c69a524c34319ca4afe78151bdd5de245c38c1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-code/src/Generic/Prototype/PrototypeClassFactory.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-code/src/Generic/Prototype/PrototypeClassFactory.php"));

        // line 1
        echo "<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\\Code\\Generic\\Prototype;

use Zend\\Code\\Reflection\\Exception;

use function str_replace;

/**
 * This is a factory for classes which are identified by name.
 *
 * All classes that this factory can supply need to
 * be registered before (prototypes). This prototypes need to implement
 * an interface which ensures every prototype has a name.
 *
 * If the factory can not supply the class someone is asking for
 * it tries to fallback on a generic default prototype, which would
 * have need to be set before.
 */
class PrototypeClassFactory
{
    /**
     * @var array
     */
    protected \$prototypes = [];

    /**
     * @var PrototypeGenericInterface
     */
    protected \$genericPrototype;

    /**
     * @param PrototypeInterface[] \$prototypes
     * @param PrototypeGenericInterface \$genericPrototype
     */
    public function __construct(\$prototypes = [], PrototypeGenericInterface \$genericPrototype = null)
    {
        foreach ((array) \$prototypes as \$prototype) {
            \$this->addPrototype(\$prototype);
        }

        if (\$genericPrototype) {
            \$this->setGenericPrototype(\$genericPrototype);
        }
    }

    /**
     * @param PrototypeInterface \$prototype
     * @throws Exception\\InvalidArgumentException
     */
    public function addPrototype(PrototypeInterface \$prototype)
    {
        \$prototypeName = \$this->normalizeName(\$prototype->getName());

        if (isset(\$this->prototypes[\$prototypeName])) {
            throw new Exception\\InvalidArgumentException('A prototype with this name already exists in this manager');
        }

        \$this->prototypes[\$prototypeName] = \$prototype;
    }

    /**
     * @param PrototypeGenericInterface \$prototype
     * @throws Exception\\InvalidArgumentException
     */
    public function setGenericPrototype(PrototypeGenericInterface \$prototype)
    {
        if (isset(\$this->genericPrototype)) {
            throw new Exception\\InvalidArgumentException('A default prototype is already set');
        }

        \$this->genericPrototype = \$prototype;
    }

    /**
     * @param string \$name
     * @return string
     */
    protected function normalizeName(\$name)
    {
        return str_replace(['-', '_'], '', \$name);
    }

    /**
     * @param string \$name
     * @return bool
     */
    public function hasPrototype(\$name)
    {
        \$name = \$this->normalizeName(\$name);
        return isset(\$this->prototypes[\$name]);
    }

    /**
     * @param  string \$prototypeName
     * @return PrototypeInterface
     * @throws Exception\\RuntimeException
     */
    public function getClonedPrototype(\$prototypeName)
    {
        \$prototypeName = \$this->normalizeName(\$prototypeName);

        if (! \$this->hasPrototype(\$prototypeName) && ! isset(\$this->genericPrototype)) {
            throw new Exception\\RuntimeException('This tag name is not supported by this tag manager');
        }

        if (! \$this->hasPrototype(\$prototypeName)) {
            \$newPrototype = clone \$this->genericPrototype;
            \$newPrototype->setName(\$prototypeName);
        } else {
            \$newPrototype = clone \$this->prototypes[\$prototypeName];
        }

        return \$newPrototype;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/zendframework/zend-code/src/Generic/Prototype/PrototypeClassFactory.php";
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

namespace Zend\\Code\\Generic\\Prototype;

use Zend\\Code\\Reflection\\Exception;

use function str_replace;

/**
 * This is a factory for classes which are identified by name.
 *
 * All classes that this factory can supply need to
 * be registered before (prototypes). This prototypes need to implement
 * an interface which ensures every prototype has a name.
 *
 * If the factory can not supply the class someone is asking for
 * it tries to fallback on a generic default prototype, which would
 * have need to be set before.
 */
class PrototypeClassFactory
{
    /**
     * @var array
     */
    protected \$prototypes = [];

    /**
     * @var PrototypeGenericInterface
     */
    protected \$genericPrototype;

    /**
     * @param PrototypeInterface[] \$prototypes
     * @param PrototypeGenericInterface \$genericPrototype
     */
    public function __construct(\$prototypes = [], PrototypeGenericInterface \$genericPrototype = null)
    {
        foreach ((array) \$prototypes as \$prototype) {
            \$this->addPrototype(\$prototype);
        }

        if (\$genericPrototype) {
            \$this->setGenericPrototype(\$genericPrototype);
        }
    }

    /**
     * @param PrototypeInterface \$prototype
     * @throws Exception\\InvalidArgumentException
     */
    public function addPrototype(PrototypeInterface \$prototype)
    {
        \$prototypeName = \$this->normalizeName(\$prototype->getName());

        if (isset(\$this->prototypes[\$prototypeName])) {
            throw new Exception\\InvalidArgumentException('A prototype with this name already exists in this manager');
        }

        \$this->prototypes[\$prototypeName] = \$prototype;
    }

    /**
     * @param PrototypeGenericInterface \$prototype
     * @throws Exception\\InvalidArgumentException
     */
    public function setGenericPrototype(PrototypeGenericInterface \$prototype)
    {
        if (isset(\$this->genericPrototype)) {
            throw new Exception\\InvalidArgumentException('A default prototype is already set');
        }

        \$this->genericPrototype = \$prototype;
    }

    /**
     * @param string \$name
     * @return string
     */
    protected function normalizeName(\$name)
    {
        return str_replace(['-', '_'], '', \$name);
    }

    /**
     * @param string \$name
     * @return bool
     */
    public function hasPrototype(\$name)
    {
        \$name = \$this->normalizeName(\$name);
        return isset(\$this->prototypes[\$name]);
    }

    /**
     * @param  string \$prototypeName
     * @return PrototypeInterface
     * @throws Exception\\RuntimeException
     */
    public function getClonedPrototype(\$prototypeName)
    {
        \$prototypeName = \$this->normalizeName(\$prototypeName);

        if (! \$this->hasPrototype(\$prototypeName) && ! isset(\$this->genericPrototype)) {
            throw new Exception\\RuntimeException('This tag name is not supported by this tag manager');
        }

        if (! \$this->hasPrototype(\$prototypeName)) {
            \$newPrototype = clone \$this->genericPrototype;
            \$newPrototype->setName(\$prototypeName);
        } else {
            \$newPrototype = clone \$this->prototypes[\$prototypeName];
        }

        return \$newPrototype;
    }
}
", "vendor/zendframework/zend-code/src/Generic/Prototype/PrototypeClassFactory.php", "/var/www/public/DevLaon/templates/vendor/zendframework/zend-code/src/Generic/Prototype/PrototypeClassFactory.php");
    }
}
