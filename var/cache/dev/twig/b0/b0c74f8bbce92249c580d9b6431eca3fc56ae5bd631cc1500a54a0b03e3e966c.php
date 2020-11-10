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

/* vendor/symfony/validator/Mapping/PropertyMetadata.php */
class __TwigTemplate_ae1aba8c7214ed673a698470354c4ebbd7f8cac1c8c1fa4d239a8bddde9572b0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Mapping/PropertyMetadata.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Mapping/PropertyMetadata.php"));

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
 * Stores all metadata needed for validating a class property.
 *
 * The value of the property is obtained by directly accessing the property.
 * The property will be accessed by reflection, so the access of private and
 * protected properties is supported.
 *
 * This class supports serialization and cloning.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @see PropertyMetadataInterface
 */
class PropertyMetadata extends MemberMetadata
{
    /**
     * @param string \$class The class this property is defined on
     * @param string \$name  The name of this property
     *
     * @throws ValidatorException
     */
    public function __construct(string \$class, string \$name)
    {
        if (!property_exists(\$class, \$name)) {
            throw new ValidatorException(sprintf('Property \"%s\" does not exist in class \"%s\"', \$name, \$class));
        }

        parent::__construct(\$class, \$name, \$name);
    }

    /**
     * {@inheritdoc}
     */
    public function getPropertyValue(\$object)
    {
        return \$this->getReflectionMember(\$object)->getValue(\$object);
    }

    /**
     * {@inheritdoc}
     */
    protected function newReflectionMember(\$objectOrClassName)
    {
        \$originalClass = \\is_string(\$objectOrClassName) ? \$objectOrClassName : \\get_class(\$objectOrClassName);

        while (!property_exists(\$objectOrClassName, \$this->getName())) {
            \$objectOrClassName = get_parent_class(\$objectOrClassName);

            if (false === \$objectOrClassName) {
                throw new ValidatorException(sprintf('Property \"%s\" does not exist in class \"%s\".', \$this->getName(), \$originalClass));
            }
        }

        \$member = new \\ReflectionProperty(\$objectOrClassName, \$this->getName());
        \$member->setAccessible(true);

        return \$member;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Mapping/PropertyMetadata.php";
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
 * Stores all metadata needed for validating a class property.
 *
 * The value of the property is obtained by directly accessing the property.
 * The property will be accessed by reflection, so the access of private and
 * protected properties is supported.
 *
 * This class supports serialization and cloning.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @see PropertyMetadataInterface
 */
class PropertyMetadata extends MemberMetadata
{
    /**
     * @param string \$class The class this property is defined on
     * @param string \$name  The name of this property
     *
     * @throws ValidatorException
     */
    public function __construct(string \$class, string \$name)
    {
        if (!property_exists(\$class, \$name)) {
            throw new ValidatorException(sprintf('Property \"%s\" does not exist in class \"%s\"', \$name, \$class));
        }

        parent::__construct(\$class, \$name, \$name);
    }

    /**
     * {@inheritdoc}
     */
    public function getPropertyValue(\$object)
    {
        return \$this->getReflectionMember(\$object)->getValue(\$object);
    }

    /**
     * {@inheritdoc}
     */
    protected function newReflectionMember(\$objectOrClassName)
    {
        \$originalClass = \\is_string(\$objectOrClassName) ? \$objectOrClassName : \\get_class(\$objectOrClassName);

        while (!property_exists(\$objectOrClassName, \$this->getName())) {
            \$objectOrClassName = get_parent_class(\$objectOrClassName);

            if (false === \$objectOrClassName) {
                throw new ValidatorException(sprintf('Property \"%s\" does not exist in class \"%s\".', \$this->getName(), \$originalClass));
            }
        }

        \$member = new \\ReflectionProperty(\$objectOrClassName, \$this->getName());
        \$member->setAccessible(true);

        return \$member;
    }
}
", "vendor/symfony/validator/Mapping/PropertyMetadata.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Mapping/PropertyMetadata.php");
    }
}
