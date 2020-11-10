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

/* vendor/symfony/serializer/Normalizer/DateTimeZoneNormalizer.php */
class __TwigTemplate_4f91f58432148cf03cbeb1934032f4dfe518d73bfddc016577d8d173a72e86f5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Normalizer/DateTimeZoneNormalizer.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Normalizer/DateTimeZoneNormalizer.php"));

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

use Symfony\\Component\\Serializer\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Serializer\\Exception\\NotNormalizableValueException;

/**
 * Normalizes a {@see \\DateTimeZone} object to a timezone string.
 *
 * @author Jérôme Desjardins <jewome62@gmail.com>
 */
class DateTimeZoneNormalizer implements NormalizerInterface, DenormalizerInterface, CacheableSupportsMethodInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws InvalidArgumentException
     */
    public function normalize(\$object, \$format = null, array \$context = [])
    {
        if (!\$object instanceof \\DateTimeZone) {
            throw new InvalidArgumentException('The object must be an instance of \"\\DateTimeZone\".');
        }

        return \$object->getName();
    }

    /**
     * {@inheritdoc}
     */
    public function supportsNormalization(\$data, \$format = null)
    {
        return \$data instanceof \\DateTimeZone;
    }

    /**
     * {@inheritdoc}
     *
     * @throws NotNormalizableValueException
     */
    public function denormalize(\$data, \$type, \$format = null, array \$context = [])
    {
        if ('' === \$data || null === \$data) {
            throw new NotNormalizableValueException('The data is either an empty string or null, you should pass a string that can be parsed as a DateTimeZone.');
        }

        try {
            return new \\DateTimeZone(\$data);
        } catch (\\Exception \$e) {
            throw new NotNormalizableValueException(\$e->getMessage(), \$e->getCode(), \$e);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function supportsDenormalization(\$data, \$type, \$format = null)
    {
        return \\DateTimeZone::class === \$type;
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
        return "vendor/symfony/serializer/Normalizer/DateTimeZoneNormalizer.php";
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

use Symfony\\Component\\Serializer\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Serializer\\Exception\\NotNormalizableValueException;

/**
 * Normalizes a {@see \\DateTimeZone} object to a timezone string.
 *
 * @author Jérôme Desjardins <jewome62@gmail.com>
 */
class DateTimeZoneNormalizer implements NormalizerInterface, DenormalizerInterface, CacheableSupportsMethodInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws InvalidArgumentException
     */
    public function normalize(\$object, \$format = null, array \$context = [])
    {
        if (!\$object instanceof \\DateTimeZone) {
            throw new InvalidArgumentException('The object must be an instance of \"\\DateTimeZone\".');
        }

        return \$object->getName();
    }

    /**
     * {@inheritdoc}
     */
    public function supportsNormalization(\$data, \$format = null)
    {
        return \$data instanceof \\DateTimeZone;
    }

    /**
     * {@inheritdoc}
     *
     * @throws NotNormalizableValueException
     */
    public function denormalize(\$data, \$type, \$format = null, array \$context = [])
    {
        if ('' === \$data || null === \$data) {
            throw new NotNormalizableValueException('The data is either an empty string or null, you should pass a string that can be parsed as a DateTimeZone.');
        }

        try {
            return new \\DateTimeZone(\$data);
        } catch (\\Exception \$e) {
            throw new NotNormalizableValueException(\$e->getMessage(), \$e->getCode(), \$e);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function supportsDenormalization(\$data, \$type, \$format = null)
    {
        return \\DateTimeZone::class === \$type;
    }

    /**
     * {@inheritdoc}
     */
    public function hasCacheableSupportsMethod(): bool
    {
        return __CLASS__ === \\get_class(\$this);
    }
}
", "vendor/symfony/serializer/Normalizer/DateTimeZoneNormalizer.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Normalizer/DateTimeZoneNormalizer.php");
    }
}
