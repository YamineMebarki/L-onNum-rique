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

/* vendor/symfony/serializer/Normalizer/ArrayDenormalizer.php */
class __TwigTemplate_a53c3c694b13d54d1182de123e601d37ac6621e74eb4c5ac1d43c33642a1a807 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Normalizer/ArrayDenormalizer.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Normalizer/ArrayDenormalizer.php"));

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

use Symfony\\Component\\Serializer\\Exception\\BadMethodCallException;
use Symfony\\Component\\Serializer\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Serializer\\Exception\\NotNormalizableValueException;
use Symfony\\Component\\Serializer\\SerializerAwareInterface;
use Symfony\\Component\\Serializer\\SerializerInterface;

/**
 * Denormalizes arrays of objects.
 *
 * @author Alexander M. Turek <me@derrabus.de>
 *
 * @final
 */
class ArrayDenormalizer implements ContextAwareDenormalizerInterface, SerializerAwareInterface, CacheableSupportsMethodInterface
{
    /**
     * @var SerializerInterface|DenormalizerInterface
     */
    private \$serializer;

    /**
     * {@inheritdoc}
     *
     * @throws NotNormalizableValueException
     */
    public function denormalize(\$data, \$type, \$format = null, array \$context = [])
    {
        if (null === \$this->serializer) {
            throw new BadMethodCallException('Please set a serializer before calling denormalize()!');
        }
        if (!\\is_array(\$data)) {
            throw new InvalidArgumentException('Data expected to be an array, '.\\gettype(\$data).' given.');
        }
        if ('[]' !== substr(\$type, -2)) {
            throw new InvalidArgumentException('Unsupported class: '.\$type);
        }

        \$serializer = \$this->serializer;
        \$type = substr(\$type, 0, -2);

        \$builtinType = isset(\$context['key_type']) ? \$context['key_type']->getBuiltinType() : null;
        foreach (\$data as \$key => \$value) {
            if (null !== \$builtinType && !('is_'.\$builtinType)(\$key)) {
                throw new NotNormalizableValueException(sprintf('The type of the key \"%s\" must be \"%s\" (\"%s\" given).', \$key, \$builtinType, \\gettype(\$key)));
            }

            \$data[\$key] = \$serializer->denormalize(\$value, \$type, \$format, \$context);
        }

        return \$data;
    }

    /**
     * {@inheritdoc}
     */
    public function supportsDenormalization(\$data, \$type, \$format = null, array \$context = [])
    {
        return '[]' === substr(\$type, -2)
            && \$this->serializer->supportsDenormalization(\$data, substr(\$type, 0, -2), \$format, \$context);
    }

    /**
     * {@inheritdoc}
     */
    public function setSerializer(SerializerInterface \$serializer)
    {
        if (!\$serializer instanceof DenormalizerInterface) {
            throw new InvalidArgumentException('Expected a serializer that also implements DenormalizerInterface.');
        }

        \$this->serializer = \$serializer;
    }

    /**
     * {@inheritdoc}
     */
    public function hasCacheableSupportsMethod(): bool
    {
        return \$this->serializer instanceof CacheableSupportsMethodInterface && \$this->serializer->hasCacheableSupportsMethod();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Normalizer/ArrayDenormalizer.php";
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

use Symfony\\Component\\Serializer\\Exception\\BadMethodCallException;
use Symfony\\Component\\Serializer\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Serializer\\Exception\\NotNormalizableValueException;
use Symfony\\Component\\Serializer\\SerializerAwareInterface;
use Symfony\\Component\\Serializer\\SerializerInterface;

/**
 * Denormalizes arrays of objects.
 *
 * @author Alexander M. Turek <me@derrabus.de>
 *
 * @final
 */
class ArrayDenormalizer implements ContextAwareDenormalizerInterface, SerializerAwareInterface, CacheableSupportsMethodInterface
{
    /**
     * @var SerializerInterface|DenormalizerInterface
     */
    private \$serializer;

    /**
     * {@inheritdoc}
     *
     * @throws NotNormalizableValueException
     */
    public function denormalize(\$data, \$type, \$format = null, array \$context = [])
    {
        if (null === \$this->serializer) {
            throw new BadMethodCallException('Please set a serializer before calling denormalize()!');
        }
        if (!\\is_array(\$data)) {
            throw new InvalidArgumentException('Data expected to be an array, '.\\gettype(\$data).' given.');
        }
        if ('[]' !== substr(\$type, -2)) {
            throw new InvalidArgumentException('Unsupported class: '.\$type);
        }

        \$serializer = \$this->serializer;
        \$type = substr(\$type, 0, -2);

        \$builtinType = isset(\$context['key_type']) ? \$context['key_type']->getBuiltinType() : null;
        foreach (\$data as \$key => \$value) {
            if (null !== \$builtinType && !('is_'.\$builtinType)(\$key)) {
                throw new NotNormalizableValueException(sprintf('The type of the key \"%s\" must be \"%s\" (\"%s\" given).', \$key, \$builtinType, \\gettype(\$key)));
            }

            \$data[\$key] = \$serializer->denormalize(\$value, \$type, \$format, \$context);
        }

        return \$data;
    }

    /**
     * {@inheritdoc}
     */
    public function supportsDenormalization(\$data, \$type, \$format = null, array \$context = [])
    {
        return '[]' === substr(\$type, -2)
            && \$this->serializer->supportsDenormalization(\$data, substr(\$type, 0, -2), \$format, \$context);
    }

    /**
     * {@inheritdoc}
     */
    public function setSerializer(SerializerInterface \$serializer)
    {
        if (!\$serializer instanceof DenormalizerInterface) {
            throw new InvalidArgumentException('Expected a serializer that also implements DenormalizerInterface.');
        }

        \$this->serializer = \$serializer;
    }

    /**
     * {@inheritdoc}
     */
    public function hasCacheableSupportsMethod(): bool
    {
        return \$this->serializer instanceof CacheableSupportsMethodInterface && \$this->serializer->hasCacheableSupportsMethod();
    }
}
", "vendor/symfony/serializer/Normalizer/ArrayDenormalizer.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Normalizer/ArrayDenormalizer.php");
    }
}
