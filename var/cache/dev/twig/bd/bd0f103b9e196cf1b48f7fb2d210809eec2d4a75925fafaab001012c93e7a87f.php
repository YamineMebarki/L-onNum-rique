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

/* vendor/symfony/serializer/Mapping/Factory/ClassMetadataFactory.php */
class __TwigTemplate_83bace676f05e7a268ec19cdb0085b4c3c28de91417f2ba4aadf1a336332c78a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Mapping/Factory/ClassMetadataFactory.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Mapping/Factory/ClassMetadataFactory.php"));

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

namespace Symfony\\Component\\Serializer\\Mapping\\Factory;

use Symfony\\Component\\Serializer\\Mapping\\ClassMetadata;
use Symfony\\Component\\Serializer\\Mapping\\Loader\\LoaderInterface;

/**
 * Returns a {@link ClassMetadata}.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class ClassMetadataFactory implements ClassMetadataFactoryInterface
{
    use ClassResolverTrait;

    private \$loader;

    /**
     * @var array
     */
    private \$loadedClasses;

    public function __construct(LoaderInterface \$loader)
    {
        \$this->loader = \$loader;
    }

    /**
     * {@inheritdoc}
     */
    public function getMetadataFor(\$value)
    {
        \$class = \$this->getClass(\$value);

        if (isset(\$this->loadedClasses[\$class])) {
            return \$this->loadedClasses[\$class];
        }

        \$classMetadata = new ClassMetadata(\$class);
        \$this->loader->loadClassMetadata(\$classMetadata);

        \$reflectionClass = \$classMetadata->getReflectionClass();

        // Include metadata from the parent class
        if (\$parent = \$reflectionClass->getParentClass()) {
            \$classMetadata->merge(\$this->getMetadataFor(\$parent->name));
        }

        // Include metadata from all implemented interfaces
        foreach (\$reflectionClass->getInterfaces() as \$interface) {
            \$classMetadata->merge(\$this->getMetadataFor(\$interface->name));
        }

        return \$this->loadedClasses[\$class] = \$classMetadata;
    }

    /**
     * {@inheritdoc}
     */
    public function hasMetadataFor(\$value)
    {
        return \\is_object(\$value) || (\\is_string(\$value) && (class_exists(\$value) || interface_exists(\$value, false)));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Mapping/Factory/ClassMetadataFactory.php";
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

namespace Symfony\\Component\\Serializer\\Mapping\\Factory;

use Symfony\\Component\\Serializer\\Mapping\\ClassMetadata;
use Symfony\\Component\\Serializer\\Mapping\\Loader\\LoaderInterface;

/**
 * Returns a {@link ClassMetadata}.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class ClassMetadataFactory implements ClassMetadataFactoryInterface
{
    use ClassResolverTrait;

    private \$loader;

    /**
     * @var array
     */
    private \$loadedClasses;

    public function __construct(LoaderInterface \$loader)
    {
        \$this->loader = \$loader;
    }

    /**
     * {@inheritdoc}
     */
    public function getMetadataFor(\$value)
    {
        \$class = \$this->getClass(\$value);

        if (isset(\$this->loadedClasses[\$class])) {
            return \$this->loadedClasses[\$class];
        }

        \$classMetadata = new ClassMetadata(\$class);
        \$this->loader->loadClassMetadata(\$classMetadata);

        \$reflectionClass = \$classMetadata->getReflectionClass();

        // Include metadata from the parent class
        if (\$parent = \$reflectionClass->getParentClass()) {
            \$classMetadata->merge(\$this->getMetadataFor(\$parent->name));
        }

        // Include metadata from all implemented interfaces
        foreach (\$reflectionClass->getInterfaces() as \$interface) {
            \$classMetadata->merge(\$this->getMetadataFor(\$interface->name));
        }

        return \$this->loadedClasses[\$class] = \$classMetadata;
    }

    /**
     * {@inheritdoc}
     */
    public function hasMetadataFor(\$value)
    {
        return \\is_object(\$value) || (\\is_string(\$value) && (class_exists(\$value) || interface_exists(\$value, false)));
    }
}
", "vendor/symfony/serializer/Mapping/Factory/ClassMetadataFactory.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Mapping/Factory/ClassMetadataFactory.php");
    }
}
