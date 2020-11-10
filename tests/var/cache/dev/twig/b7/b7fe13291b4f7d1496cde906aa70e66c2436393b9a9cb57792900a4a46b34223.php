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

/* vendor/symfony/validator/Mapping/GetterMetadata.php */
class __TwigTemplate_733bf78d70c7c9495aae131e0ca6f890ddf87fd381c128f3063c62ce018e2bd3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Mapping/GetterMetadata.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Mapping/GetterMetadata.php"));

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

namespace Symfony\\Component\\Validator\\Mapping;

use Symfony\\Component\\Validator\\Exception\\ValidatorException;

/**
 * Stores all metadata needed for validating a class property via its getter
 * method.
 *
 * A property getter is any method that is equal to the property's name,
 * prefixed with either \"get\" or \"is\". That method will be used to access the
 * property's value.
 *
 * The getter will be invoked by reflection, so the access of private and
 * protected getters is supported.
 *
 * This class supports serialization and cloning.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @see PropertyMetadataInterface
 */
class GetterMetadata extends MemberMetadata
{
    /**
     * @param string      \$class    The class the getter is defined on
     * @param string      \$property The property which the getter returns
     * @param string|null \$method   The method that is called to retrieve the value being validated (null for auto-detection)
     *
     * @throws ValidatorException
     */
    public function __construct(string \$class, string \$property, string \$method = null)
    {
        if (null === \$method) {
            \$getMethod = 'get'.ucfirst(\$property);
            \$isMethod = 'is'.ucfirst(\$property);
            \$hasMethod = 'has'.ucfirst(\$property);

            if (method_exists(\$class, \$getMethod)) {
                \$method = \$getMethod;
            } elseif (method_exists(\$class, \$isMethod)) {
                \$method = \$isMethod;
            } elseif (method_exists(\$class, \$hasMethod)) {
                \$method = \$hasMethod;
            } else {
                throw new ValidatorException(sprintf('Neither of these methods exist in class %s: %s, %s, %s', \$class, \$getMethod, \$isMethod, \$hasMethod));
            }
        } elseif (!method_exists(\$class, \$method)) {
            throw new ValidatorException(sprintf('The %s() method does not exist in class %s.', \$method, \$class));
        }

        parent::__construct(\$class, \$method, \$property);
    }

    /**
     * {@inheritdoc}
     */
    public function getPropertyValue(\$object)
    {
        return \$this->newReflectionMember(\$object)->invoke(\$object);
    }

    /**
     * {@inheritdoc}
     */
    protected function newReflectionMember(\$objectOrClassName)
    {
        return new \\ReflectionMethod(\$objectOrClassName, \$this->getName());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Mapping/GetterMetadata.php";
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

namespace Symfony\\Component\\Validator\\Mapping;

use Symfony\\Component\\Validator\\Exception\\ValidatorException;

/**
 * Stores all metadata needed for validating a class property via its getter
 * method.
 *
 * A property getter is any method that is equal to the property's name,
 * prefixed with either \"get\" or \"is\". That method will be used to access the
 * property's value.
 *
 * The getter will be invoked by reflection, so the access of private and
 * protected getters is supported.
 *
 * This class supports serialization and cloning.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @see PropertyMetadataInterface
 */
class GetterMetadata extends MemberMetadata
{
    /**
     * @param string      \$class    The class the getter is defined on
     * @param string      \$property The property which the getter returns
     * @param string|null \$method   The method that is called to retrieve the value being validated (null for auto-detection)
     *
     * @throws ValidatorException
     */
    public function __construct(string \$class, string \$property, string \$method = null)
    {
        if (null === \$method) {
            \$getMethod = 'get'.ucfirst(\$property);
            \$isMethod = 'is'.ucfirst(\$property);
            \$hasMethod = 'has'.ucfirst(\$property);

            if (method_exists(\$class, \$getMethod)) {
                \$method = \$getMethod;
            } elseif (method_exists(\$class, \$isMethod)) {
                \$method = \$isMethod;
            } elseif (method_exists(\$class, \$hasMethod)) {
                \$method = \$hasMethod;
            } else {
                throw new ValidatorException(sprintf('Neither of these methods exist in class %s: %s, %s, %s', \$class, \$getMethod, \$isMethod, \$hasMethod));
            }
        } elseif (!method_exists(\$class, \$method)) {
            throw new ValidatorException(sprintf('The %s() method does not exist in class %s.', \$method, \$class));
        }

        parent::__construct(\$class, \$method, \$property);
    }

    /**
     * {@inheritdoc}
     */
    public function getPropertyValue(\$object)
    {
        return \$this->newReflectionMember(\$object)->invoke(\$object);
    }

    /**
     * {@inheritdoc}
     */
    protected function newReflectionMember(\$objectOrClassName)
    {
        return new \\ReflectionMethod(\$objectOrClassName, \$this->getName());
    }
}
", "vendor/symfony/validator/Mapping/GetterMetadata.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Mapping/GetterMetadata.php");
    }
}
