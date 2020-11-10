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

/* vendor/symfony/serializer/Normalizer/CustomNormalizer.php */
class __TwigTemplate_dac7108eba915db5bb4a7129731cec10a5cf9cee20b503e72aded487f76ac6b9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Normalizer/CustomNormalizer.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Normalizer/CustomNormalizer.php"));

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

namespace Symfony\\Component\\Serializer\\Normalizer;

use Symfony\\Component\\Serializer\\SerializerAwareInterface;
use Symfony\\Component\\Serializer\\SerializerAwareTrait;

/**
 * @author Jordi Boggiano <j.boggiano@seld.be>
 */
class CustomNormalizer implements NormalizerInterface, DenormalizerInterface, SerializerAwareInterface, CacheableSupportsMethodInterface
{
    use ObjectToPopulateTrait;
    use SerializerAwareTrait;

    /**
     * {@inheritdoc}
     */
    public function normalize(\$object, \$format = null, array \$context = [])
    {
        return \$object->normalize(\$this->serializer, \$format, \$context);
    }

    /**
     * {@inheritdoc}
     */
    public function denormalize(\$data, \$type, \$format = null, array \$context = [])
    {
        \$object = \$this->extractObjectToPopulate(\$type, \$context) ?: new \$type();
        \$object->denormalize(\$this->serializer, \$data, \$format, \$context);

        return \$object;
    }

    /**
     * Checks if the given class implements the NormalizableInterface.
     *
     * @param mixed  \$data   Data to normalize
     * @param string \$format The format being (de-)serialized from or into
     *
     * @return bool
     */
    public function supportsNormalization(\$data, \$format = null)
    {
        return \$data instanceof NormalizableInterface;
    }

    /**
     * Checks if the given class implements the DenormalizableInterface.
     *
     * @param mixed  \$data   Data to denormalize from
     * @param string \$type   The class to which the data should be denormalized
     * @param string \$format The format being deserialized from
     *
     * @return bool
     */
    public function supportsDenormalization(\$data, \$type, \$format = null)
    {
        return is_subclass_of(\$type, DenormalizableInterface::class);
    }

    /**
     * {@inheritdoc}
     */
    public function hasCacheableSupportsMethod(): bool
    {
        return __CLASS__ === \\get_class(\$this);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Normalizer/CustomNormalizer.php";
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

namespace Symfony\\Component\\Serializer\\Normalizer;

use Symfony\\Component\\Serializer\\SerializerAwareInterface;
use Symfony\\Component\\Serializer\\SerializerAwareTrait;

/**
 * @author Jordi Boggiano <j.boggiano@seld.be>
 */
class CustomNormalizer implements NormalizerInterface, DenormalizerInterface, SerializerAwareInterface, CacheableSupportsMethodInterface
{
    use ObjectToPopulateTrait;
    use SerializerAwareTrait;

    /**
     * {@inheritdoc}
     */
    public function normalize(\$object, \$format = null, array \$context = [])
    {
        return \$object->normalize(\$this->serializer, \$format, \$context);
    }

    /**
     * {@inheritdoc}
     */
    public function denormalize(\$data, \$type, \$format = null, array \$context = [])
    {
        \$object = \$this->extractObjectToPopulate(\$type, \$context) ?: new \$type();
        \$object->denormalize(\$this->serializer, \$data, \$format, \$context);

        return \$object;
    }

    /**
     * Checks if the given class implements the NormalizableInterface.
     *
     * @param mixed  \$data   Data to normalize
     * @param string \$format The format being (de-)serialized from or into
     *
     * @return bool
     */
    public function supportsNormalization(\$data, \$format = null)
    {
        return \$data instanceof NormalizableInterface;
    }

    /**
     * Checks if the given class implements the DenormalizableInterface.
     *
     * @param mixed  \$data   Data to denormalize from
     * @param string \$type   The class to which the data should be denormalized
     * @param string \$format The format being deserialized from
     *
     * @return bool
     */
    public function supportsDenormalization(\$data, \$type, \$format = null)
    {
        return is_subclass_of(\$type, DenormalizableInterface::class);
    }

    /**
     * {@inheritdoc}
     */
    public function hasCacheableSupportsMethod(): bool
    {
        return __CLASS__ === \\get_class(\$this);
    }
}
", "vendor/symfony/serializer/Normalizer/CustomNormalizer.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Normalizer/CustomNormalizer.php");
    }
}
