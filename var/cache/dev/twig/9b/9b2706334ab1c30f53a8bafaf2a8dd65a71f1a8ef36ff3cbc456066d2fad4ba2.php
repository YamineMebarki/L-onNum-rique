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

/* vendor/symfony/serializer/Encoder/JsonEncode.php */
class __TwigTemplate_e1e55bb53525bd9dbcf9822adcd806cc6eda9296268dd7c5b058d81f8e64e81a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Encoder/JsonEncode.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Encoder/JsonEncode.php"));

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

namespace Symfony\\Component\\Serializer\\Encoder;

use Symfony\\Component\\Serializer\\Exception\\NotEncodableValueException;

/**
 * Encodes JSON data.
 *
 * @author Sander Coolen <sander@jibber.nl>
 */
class JsonEncode implements EncoderInterface
{
    const OPTIONS = 'json_encode_options';

    private \$defaultContext = [
        self::OPTIONS => 0,
    ];

    /**
     * @param array \$defaultContext
     */
    public function __construct(\$defaultContext = [])
    {
        if (!\\is_array(\$defaultContext)) {
            @trigger_error(sprintf('Passing an integer as first parameter of the \"%s()\" method is deprecated since Symfony 4.2, use the \"json_encode_options\" key of the context instead.', __METHOD__), E_USER_DEPRECATED);

            \$this->defaultContext[self::OPTIONS] = (int) \$defaultContext;
        } else {
            \$this->defaultContext = array_merge(\$this->defaultContext, \$defaultContext);
        }
    }

    /**
     * Encodes PHP data to a JSON string.
     *
     * {@inheritdoc}
     */
    public function encode(\$data, \$format, array \$context = [])
    {
        \$options = \$context[self::OPTIONS] ?? \$this->defaultContext[self::OPTIONS];

        try {
            \$encodedJson = json_encode(\$data, \$options);
        } catch (\\JsonException \$e) {
            throw new NotEncodableValueException(\$e->getMessage(), 0, \$e);
        }

        if (\\PHP_VERSION_ID >= 70300 && (JSON_THROW_ON_ERROR & \$options)) {
            return \$encodedJson;
        }

        if (JSON_ERROR_NONE !== json_last_error() && (false === \$encodedJson || !(\$options & JSON_PARTIAL_OUTPUT_ON_ERROR))) {
            throw new NotEncodableValueException(json_last_error_msg());
        }

        return \$encodedJson;
    }

    /**
     * {@inheritdoc}
     */
    public function supportsEncoding(\$format)
    {
        return JsonEncoder::FORMAT === \$format;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Encoder/JsonEncode.php";
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

namespace Symfony\\Component\\Serializer\\Encoder;

use Symfony\\Component\\Serializer\\Exception\\NotEncodableValueException;

/**
 * Encodes JSON data.
 *
 * @author Sander Coolen <sander@jibber.nl>
 */
class JsonEncode implements EncoderInterface
{
    const OPTIONS = 'json_encode_options';

    private \$defaultContext = [
        self::OPTIONS => 0,
    ];

    /**
     * @param array \$defaultContext
     */
    public function __construct(\$defaultContext = [])
    {
        if (!\\is_array(\$defaultContext)) {
            @trigger_error(sprintf('Passing an integer as first parameter of the \"%s()\" method is deprecated since Symfony 4.2, use the \"json_encode_options\" key of the context instead.', __METHOD__), E_USER_DEPRECATED);

            \$this->defaultContext[self::OPTIONS] = (int) \$defaultContext;
        } else {
            \$this->defaultContext = array_merge(\$this->defaultContext, \$defaultContext);
        }
    }

    /**
     * Encodes PHP data to a JSON string.
     *
     * {@inheritdoc}
     */
    public function encode(\$data, \$format, array \$context = [])
    {
        \$options = \$context[self::OPTIONS] ?? \$this->defaultContext[self::OPTIONS];

        try {
            \$encodedJson = json_encode(\$data, \$options);
        } catch (\\JsonException \$e) {
            throw new NotEncodableValueException(\$e->getMessage(), 0, \$e);
        }

        if (\\PHP_VERSION_ID >= 70300 && (JSON_THROW_ON_ERROR & \$options)) {
            return \$encodedJson;
        }

        if (JSON_ERROR_NONE !== json_last_error() && (false === \$encodedJson || !(\$options & JSON_PARTIAL_OUTPUT_ON_ERROR))) {
            throw new NotEncodableValueException(json_last_error_msg());
        }

        return \$encodedJson;
    }

    /**
     * {@inheritdoc}
     */
    public function supportsEncoding(\$format)
    {
        return JsonEncoder::FORMAT === \$format;
    }
}
", "vendor/symfony/serializer/Encoder/JsonEncode.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Encoder/JsonEncode.php");
    }
}
