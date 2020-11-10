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

/* vendor/symfony/serializer/Mapping/Factory/ClassMetadataFactoryInterface.php */
class __TwigTemplate_ea8f05e928c71fd53856218d2b0367abeacdc3692ab95be521c7b8670c117e3e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Mapping/Factory/ClassMetadataFactoryInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Mapping/Factory/ClassMetadataFactoryInterface.php"));

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

use Symfony\\Component\\Serializer\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Serializer\\Mapping\\ClassMetadataInterface;

/**
 * Returns a {@see ClassMetadataInterface}.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
interface ClassMetadataFactoryInterface
{
    /**
     * If the method was called with the same class name (or an object of that
     * class) before, the same metadata instance is returned.
     *
     * If the factory was configured with a cache, this method will first look
     * for an existing metadata instance in the cache. If an existing instance
     * is found, it will be returned without further ado.
     *
     * Otherwise, a new metadata instance is created. If the factory was
     * configured with a loader, the metadata is passed to the
     * {@link \\Symfony\\Component\\Serializer\\Mapping\\Loader\\LoaderInterface::loadClassMetadata()} method for further
     * configuration. At last, the new object is returned.
     *
     * @param string|object \$value
     *
     * @return ClassMetadataInterface
     *
     * @throws InvalidArgumentException
     */
    public function getMetadataFor(\$value);

    /**
     * Checks if class has metadata.
     *
     * @param mixed \$value
     *
     * @return bool
     */
    public function hasMetadataFor(\$value);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Mapping/Factory/ClassMetadataFactoryInterface.php";
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

use Symfony\\Component\\Serializer\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Serializer\\Mapping\\ClassMetadataInterface;

/**
 * Returns a {@see ClassMetadataInterface}.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
interface ClassMetadataFactoryInterface
{
    /**
     * If the method was called with the same class name (or an object of that
     * class) before, the same metadata instance is returned.
     *
     * If the factory was configured with a cache, this method will first look
     * for an existing metadata instance in the cache. If an existing instance
     * is found, it will be returned without further ado.
     *
     * Otherwise, a new metadata instance is created. If the factory was
     * configured with a loader, the metadata is passed to the
     * {@link \\Symfony\\Component\\Serializer\\Mapping\\Loader\\LoaderInterface::loadClassMetadata()} method for further
     * configuration. At last, the new object is returned.
     *
     * @param string|object \$value
     *
     * @return ClassMetadataInterface
     *
     * @throws InvalidArgumentException
     */
    public function getMetadataFor(\$value);

    /**
     * Checks if class has metadata.
     *
     * @param mixed \$value
     *
     * @return bool
     */
    public function hasMetadataFor(\$value);
}
", "vendor/symfony/serializer/Mapping/Factory/ClassMetadataFactoryInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Mapping/Factory/ClassMetadataFactoryInterface.php");
    }
}
