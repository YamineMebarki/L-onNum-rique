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

/* vendor/symfony/property-info/Extractor/SerializerExtractor.php */
class __TwigTemplate_b0a7d4f78e9a95bf34fc0f11d1aae7916059d4f32497b40f370c5274005b897c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/property-info/Extractor/SerializerExtractor.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/property-info/Extractor/SerializerExtractor.php"));

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

namespace Symfony\\Component\\PropertyInfo\\Extractor;

use Symfony\\Component\\PropertyInfo\\PropertyListExtractorInterface;
use Symfony\\Component\\Serializer\\Mapping\\Factory\\ClassMetadataFactoryInterface;

/**
 * Lists available properties using Symfony Serializer Component metadata.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 *
 * @final
 */
class SerializerExtractor implements PropertyListExtractorInterface
{
    private \$classMetadataFactory;

    public function __construct(ClassMetadataFactoryInterface \$classMetadataFactory)
    {
        \$this->classMetadataFactory = \$classMetadataFactory;
    }

    /**
     * {@inheritdoc}
     */
    public function getProperties(\$class, array \$context = [])
    {
        if (!isset(\$context['serializer_groups']) || !\\is_array(\$context['serializer_groups'])) {
            return null;
        }

        if (!\$this->classMetadataFactory->getMetadataFor(\$class)) {
            return null;
        }

        \$properties = [];
        \$serializerClassMetadata = \$this->classMetadataFactory->getMetadataFor(\$class);

        foreach (\$serializerClassMetadata->getAttributesMetadata() as \$serializerAttributeMetadata) {
            if (array_intersect(\$context['serializer_groups'], \$serializerAttributeMetadata->getGroups())) {
                \$properties[] = \$serializerAttributeMetadata->getName();
            }
        }

        return \$properties;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/property-info/Extractor/SerializerExtractor.php";
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

namespace Symfony\\Component\\PropertyInfo\\Extractor;

use Symfony\\Component\\PropertyInfo\\PropertyListExtractorInterface;
use Symfony\\Component\\Serializer\\Mapping\\Factory\\ClassMetadataFactoryInterface;

/**
 * Lists available properties using Symfony Serializer Component metadata.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 *
 * @final
 */
class SerializerExtractor implements PropertyListExtractorInterface
{
    private \$classMetadataFactory;

    public function __construct(ClassMetadataFactoryInterface \$classMetadataFactory)
    {
        \$this->classMetadataFactory = \$classMetadataFactory;
    }

    /**
     * {@inheritdoc}
     */
    public function getProperties(\$class, array \$context = [])
    {
        if (!isset(\$context['serializer_groups']) || !\\is_array(\$context['serializer_groups'])) {
            return null;
        }

        if (!\$this->classMetadataFactory->getMetadataFor(\$class)) {
            return null;
        }

        \$properties = [];
        \$serializerClassMetadata = \$this->classMetadataFactory->getMetadataFor(\$class);

        foreach (\$serializerClassMetadata->getAttributesMetadata() as \$serializerAttributeMetadata) {
            if (array_intersect(\$context['serializer_groups'], \$serializerAttributeMetadata->getGroups())) {
                \$properties[] = \$serializerAttributeMetadata->getName();
            }
        }

        return \$properties;
    }
}
", "vendor/symfony/property-info/Extractor/SerializerExtractor.php", "/var/www/public/DevLaon/templates/vendor/symfony/property-info/Extractor/SerializerExtractor.php");
    }
}
