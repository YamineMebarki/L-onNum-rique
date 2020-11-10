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

/* vendor/symfony/serializer/Mapping/AttributeMetadataInterface.php */
class __TwigTemplate_356f5e49d89b48dce2d8bb93feb881029b2ce1d9a16c71b870f6a2084cd8806d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Mapping/AttributeMetadataInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Mapping/AttributeMetadataInterface.php"));

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
 * Stores metadata needed for serializing and deserializing attributes.
 *
 * Primarily, the metadata stores serialization groups.
 *
 * @internal
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
interface AttributeMetadataInterface
{
    /**
     * Gets the attribute name.
     *
     * @return string
     */
    public function getName();

    /**
     * Adds this attribute to the given group.
     *
     * @param string \$group
     */
    public function addGroup(\$group);

    /**
     * Gets groups of this attribute.
     *
     * @return string[]
     */
    public function getGroups();

    /**
     * Sets the serialization max depth for this attribute.
     *
     * @param int|null \$maxDepth
     */
    public function setMaxDepth(\$maxDepth);

    /**
     * Gets the serialization max depth for this attribute.
     *
     * @return int|null
     */
    public function getMaxDepth();

    /**
     * Sets the serialization name for this attribute.
     */
    public function setSerializedName(string \$serializedName = null);

    /**
     * Gets the serialization name for this attribute.
     */
    public function getSerializedName(): ?string;

    /**
     * Merges an {@see AttributeMetadataInterface} with in the current one.
     */
    public function merge(self \$attributeMetadata);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Mapping/AttributeMetadataInterface.php";
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
 * Stores metadata needed for serializing and deserializing attributes.
 *
 * Primarily, the metadata stores serialization groups.
 *
 * @internal
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
interface AttributeMetadataInterface
{
    /**
     * Gets the attribute name.
     *
     * @return string
     */
    public function getName();

    /**
     * Adds this attribute to the given group.
     *
     * @param string \$group
     */
    public function addGroup(\$group);

    /**
     * Gets groups of this attribute.
     *
     * @return string[]
     */
    public function getGroups();

    /**
     * Sets the serialization max depth for this attribute.
     *
     * @param int|null \$maxDepth
     */
    public function setMaxDepth(\$maxDepth);

    /**
     * Gets the serialization max depth for this attribute.
     *
     * @return int|null
     */
    public function getMaxDepth();

    /**
     * Sets the serialization name for this attribute.
     */
    public function setSerializedName(string \$serializedName = null);

    /**
     * Gets the serialization name for this attribute.
     */
    public function getSerializedName(): ?string;

    /**
     * Merges an {@see AttributeMetadataInterface} with in the current one.
     */
    public function merge(self \$attributeMetadata);
}
", "vendor/symfony/serializer/Mapping/AttributeMetadataInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Mapping/AttributeMetadataInterface.php");
    }
}
