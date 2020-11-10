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

/* vendor/symfony/serializer/Normalizer/ConstraintViolationListNormalizer.php */
class __TwigTemplate_dd8e7d78745b1265025eace8126dfb738e556283cfc87d53ccf3210e00bd6a75 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Normalizer/ConstraintViolationListNormalizer.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Normalizer/ConstraintViolationListNormalizer.php"));

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

use Symfony\\Component\\Serializer\\NameConverter\\NameConverterInterface;
use Symfony\\Component\\Validator\\ConstraintViolationListInterface;

/**
 * A normalizer that normalizes a ConstraintViolationListInterface instance.
 *
 * This Normalizer implements RFC7807 {@link https://tools.ietf.org/html/rfc7807}.
 *
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class ConstraintViolationListNormalizer implements NormalizerInterface, CacheableSupportsMethodInterface
{
    const INSTANCE = 'instance';
    const STATUS = 'status';
    const TITLE = 'title';
    const TYPE = 'type';

    private \$defaultContext;
    private \$nameConverter;

    public function __construct(\$defaultContext = [], NameConverterInterface \$nameConverter = null)
    {
        \$this->defaultContext = \$defaultContext;
        \$this->nameConverter = \$nameConverter;
    }

    /**
     * {@inheritdoc}
     */
    public function normalize(\$object, \$format = null, array \$context = [])
    {
        \$violations = [];
        \$messages = [];
        foreach (\$object as \$violation) {
            \$propertyPath = \$this->nameConverter ? \$this->nameConverter->normalize(\$violation->getPropertyPath(), null, \$format, \$context) : \$violation->getPropertyPath();

            \$violationEntry = [
                'propertyPath' => \$propertyPath,
                'title' => \$violation->getMessage(),
                'parameters' => \$violation->getParameters(),
            ];
            if (null !== \$code = \$violation->getCode()) {
                \$violationEntry['type'] = sprintf('urn:uuid:%s', \$code);
            }

            \$violations[] = \$violationEntry;

            \$prefix = \$propertyPath ? sprintf('%s: ', \$propertyPath) : '';
            \$messages[] = \$prefix.\$violation->getMessage();
        }

        \$result = [
            'type' => \$context[self::TYPE] ?? \$this->defaultContext[self::TYPE] ?? 'https://symfony.com/errors/validation',
            'title' => \$context[self::TITLE] ?? \$this->defaultContext[self::TITLE] ?? 'Validation Failed',
        ];
        if (null !== \$status = (\$context[self::STATUS] ?? \$this->defaultContext[self::STATUS] ?? null)) {
            \$result['status'] = \$status;
        }
        if (\$messages) {
            \$result['detail'] = implode(\"\\n\", \$messages);
        }
        if (null !== \$instance = (\$context[self::INSTANCE] ?? \$this->defaultContext[self::INSTANCE] ?? null)) {
            \$result['instance'] = \$instance;
        }

        return \$result + ['violations' => \$violations];
    }

    /**
     * {@inheritdoc}
     */
    public function supportsNormalization(\$data, \$format = null)
    {
        return \$data instanceof ConstraintViolationListInterface;
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
        return "vendor/symfony/serializer/Normalizer/ConstraintViolationListNormalizer.php";
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

use Symfony\\Component\\Serializer\\NameConverter\\NameConverterInterface;
use Symfony\\Component\\Validator\\ConstraintViolationListInterface;

/**
 * A normalizer that normalizes a ConstraintViolationListInterface instance.
 *
 * This Normalizer implements RFC7807 {@link https://tools.ietf.org/html/rfc7807}.
 *
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class ConstraintViolationListNormalizer implements NormalizerInterface, CacheableSupportsMethodInterface
{
    const INSTANCE = 'instance';
    const STATUS = 'status';
    const TITLE = 'title';
    const TYPE = 'type';

    private \$defaultContext;
    private \$nameConverter;

    public function __construct(\$defaultContext = [], NameConverterInterface \$nameConverter = null)
    {
        \$this->defaultContext = \$defaultContext;
        \$this->nameConverter = \$nameConverter;
    }

    /**
     * {@inheritdoc}
     */
    public function normalize(\$object, \$format = null, array \$context = [])
    {
        \$violations = [];
        \$messages = [];
        foreach (\$object as \$violation) {
            \$propertyPath = \$this->nameConverter ? \$this->nameConverter->normalize(\$violation->getPropertyPath(), null, \$format, \$context) : \$violation->getPropertyPath();

            \$violationEntry = [
                'propertyPath' => \$propertyPath,
                'title' => \$violation->getMessage(),
                'parameters' => \$violation->getParameters(),
            ];
            if (null !== \$code = \$violation->getCode()) {
                \$violationEntry['type'] = sprintf('urn:uuid:%s', \$code);
            }

            \$violations[] = \$violationEntry;

            \$prefix = \$propertyPath ? sprintf('%s: ', \$propertyPath) : '';
            \$messages[] = \$prefix.\$violation->getMessage();
        }

        \$result = [
            'type' => \$context[self::TYPE] ?? \$this->defaultContext[self::TYPE] ?? 'https://symfony.com/errors/validation',
            'title' => \$context[self::TITLE] ?? \$this->defaultContext[self::TITLE] ?? 'Validation Failed',
        ];
        if (null !== \$status = (\$context[self::STATUS] ?? \$this->defaultContext[self::STATUS] ?? null)) {
            \$result['status'] = \$status;
        }
        if (\$messages) {
            \$result['detail'] = implode(\"\\n\", \$messages);
        }
        if (null !== \$instance = (\$context[self::INSTANCE] ?? \$this->defaultContext[self::INSTANCE] ?? null)) {
            \$result['instance'] = \$instance;
        }

        return \$result + ['violations' => \$violations];
    }

    /**
     * {@inheritdoc}
     */
    public function supportsNormalization(\$data, \$format = null)
    {
        return \$data instanceof ConstraintViolationListInterface;
    }

    /**
     * {@inheritdoc}
     */
    public function hasCacheableSupportsMethod(): bool
    {
        return __CLASS__ === \\get_class(\$this);
    }
}
", "vendor/symfony/serializer/Normalizer/ConstraintViolationListNormalizer.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Normalizer/ConstraintViolationListNormalizer.php");
    }
}
