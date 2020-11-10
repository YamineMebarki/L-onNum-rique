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

/* vendor/symfony/validator/Mapping/Loader/StaticMethodLoader.php */
class __TwigTemplate_e6b80f2f3607fb11399e2a0ae4f04b35c5739ffcdc16b41112b4769f0a8f36cb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Mapping/Loader/StaticMethodLoader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Mapping/Loader/StaticMethodLoader.php"));

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

namespace Symfony\\Component\\Validator\\Mapping\\Loader;

use Symfony\\Component\\Validator\\Exception\\MappingException;
use Symfony\\Component\\Validator\\Mapping\\ClassMetadata;

/**
 * Loads validation metadata by calling a static method on the loaded class.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class StaticMethodLoader implements LoaderInterface
{
    protected \$methodName;

    /**
     * Creates a new loader.
     *
     * @param string \$methodName The name of the static method to call
     */
    public function __construct(string \$methodName = 'loadValidatorMetadata')
    {
        \$this->methodName = \$methodName;
    }

    /**
     * {@inheritdoc}
     */
    public function loadClassMetadata(ClassMetadata \$metadata)
    {
        /** @var \\ReflectionClass \$reflClass */
        \$reflClass = \$metadata->getReflectionClass();

        if (!\$reflClass->isInterface() && \$reflClass->hasMethod(\$this->methodName)) {
            \$reflMethod = \$reflClass->getMethod(\$this->methodName);

            if (\$reflMethod->isAbstract()) {
                return false;
            }

            if (!\$reflMethod->isStatic()) {
                throw new MappingException(sprintf('The method %s::%s should be static', \$reflClass->name, \$this->methodName));
            }

            if (\$reflMethod->getDeclaringClass()->name != \$reflClass->name) {
                return false;
            }

            \$reflMethod->invoke(null, \$metadata);

            return true;
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
        return "vendor/symfony/validator/Mapping/Loader/StaticMethodLoader.php";
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

namespace Symfony\\Component\\Validator\\Mapping\\Loader;

use Symfony\\Component\\Validator\\Exception\\MappingException;
use Symfony\\Component\\Validator\\Mapping\\ClassMetadata;

/**
 * Loads validation metadata by calling a static method on the loaded class.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class StaticMethodLoader implements LoaderInterface
{
    protected \$methodName;

    /**
     * Creates a new loader.
     *
     * @param string \$methodName The name of the static method to call
     */
    public function __construct(string \$methodName = 'loadValidatorMetadata')
    {
        \$this->methodName = \$methodName;
    }

    /**
     * {@inheritdoc}
     */
    public function loadClassMetadata(ClassMetadata \$metadata)
    {
        /** @var \\ReflectionClass \$reflClass */
        \$reflClass = \$metadata->getReflectionClass();

        if (!\$reflClass->isInterface() && \$reflClass->hasMethod(\$this->methodName)) {
            \$reflMethod = \$reflClass->getMethod(\$this->methodName);

            if (\$reflMethod->isAbstract()) {
                return false;
            }

            if (!\$reflMethod->isStatic()) {
                throw new MappingException(sprintf('The method %s::%s should be static', \$reflClass->name, \$this->methodName));
            }

            if (\$reflMethod->getDeclaringClass()->name != \$reflClass->name) {
                return false;
            }

            \$reflMethod->invoke(null, \$metadata);

            return true;
        }

        return false;
    }
}
", "vendor/symfony/validator/Mapping/Loader/StaticMethodLoader.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Mapping/Loader/StaticMethodLoader.php");
    }
}
