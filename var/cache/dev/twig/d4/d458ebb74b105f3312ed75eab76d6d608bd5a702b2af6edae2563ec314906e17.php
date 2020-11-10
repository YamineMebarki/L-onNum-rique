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

/* vendor/symfony/serializer/Mapping/ClassMetadataInterface.php */
class __TwigTemplate_cb1c81ac2908a9cc71f8ef33227db7dd09821d37cca6a53cb2f2ac5efd9900a8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Mapping/ClassMetadataInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Mapping/ClassMetadataInterface.php"));

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

namespace Symfony\\Component\\Serializer\\Mapping;

/**
 * Stores metadata needed for serializing and deserializing objects of specific class.
 *
 * Primarily, the metadata stores the set of attributes to serialize or deserialize.
 *
 * There may only exist one metadata for each attribute according to its name.
 *
 * @internal
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
interface ClassMetadataInterface
{
    /**
     * Returns the name of the backing PHP class.
     *
     * @return string The name of the backing class
     */
    public function getName();

    /**
     * Adds an {@link AttributeMetadataInterface}.
     */
    public function addAttributeMetadata(AttributeMetadataInterface \$attributeMetadata);

    /**
     * Gets the list of {@link AttributeMetadataInterface}.
     *
     * @return AttributeMetadataInterface[]
     */
    public function getAttributesMetadata();

    /**
     * Merges a {@link ClassMetadataInterface} in the current one.
     */
    public function merge(self \$classMetadata);

    /**
     * Returns a {@link \\ReflectionClass} instance for this class.
     *
     * @return \\ReflectionClass
     */
    public function getReflectionClass();

    /**
     * @return ClassDiscriminatorMapping|null
     */
    public function getClassDiscriminatorMapping();

    public function setClassDiscriminatorMapping(ClassDiscriminatorMapping \$mapping = null);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Mapping/ClassMetadataInterface.php";
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

namespace Symfony\\Component\\Serializer\\Mapping;

/**
 * Stores metadata needed for serializing and deserializing objects of specific class.
 *
 * Primarily, the metadata stores the set of attributes to serialize or deserialize.
 *
 * There may only exist one metadata for each attribute according to its name.
 *
 * @internal
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
interface ClassMetadataInterface
{
    /**
     * Returns the name of the backing PHP class.
     *
     * @return string The name of the backing class
     */
    public function getName();

    /**
     * Adds an {@link AttributeMetadataInterface}.
     */
    public function addAttributeMetadata(AttributeMetadataInterface \$attributeMetadata);

    /**
     * Gets the list of {@link AttributeMetadataInterface}.
     *
     * @return AttributeMetadataInterface[]
     */
    public function getAttributesMetadata();

    /**
     * Merges a {@link ClassMetadataInterface} in the current one.
     */
    public function merge(self \$classMetadata);

    /**
     * Returns a {@link \\ReflectionClass} instance for this class.
     *
     * @return \\ReflectionClass
     */
    public function getReflectionClass();

    /**
     * @return ClassDiscriminatorMapping|null
     */
    public function getClassDiscriminatorMapping();

    public function setClassDiscriminatorMapping(ClassDiscriminatorMapping \$mapping = null);
}
", "vendor/symfony/serializer/Mapping/ClassMetadataInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Mapping/ClassMetadataInterface.php");
    }
}
