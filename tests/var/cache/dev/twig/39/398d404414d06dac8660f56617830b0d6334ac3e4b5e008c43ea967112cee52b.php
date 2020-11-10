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

/* vendor/symfony/serializer/Encoder/JsonEncoder.php */
class __TwigTemplate_e45ccdc766ae27d7b3f79aceb77bb82bee3319f29542c9bb8efb04eb5ea7d17f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Encoder/JsonEncoder.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Encoder/JsonEncoder.php"));

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

/**
 * Encodes JSON data.
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 */
class JsonEncoder implements EncoderInterface, DecoderInterface
{
    const FORMAT = 'json';

    protected \$encodingImpl;
    protected \$decodingImpl;

    public function __construct(JsonEncode \$encodingImpl = null, JsonDecode \$decodingImpl = null)
    {
        \$this->encodingImpl = \$encodingImpl ?: new JsonEncode();
        \$this->decodingImpl = \$decodingImpl ?: new JsonDecode([JsonDecode::ASSOCIATIVE => true]);
    }

    /**
     * {@inheritdoc}
     */
    public function encode(\$data, \$format, array \$context = [])
    {
        return \$this->encodingImpl->encode(\$data, self::FORMAT, \$context);
    }

    /**
     * {@inheritdoc}
     */
    public function decode(\$data, \$format, array \$context = [])
    {
        return \$this->decodingImpl->decode(\$data, self::FORMAT, \$context);
    }

    /**
     * {@inheritdoc}
     */
    public function supportsEncoding(\$format)
    {
        return self::FORMAT === \$format;
    }

    /**
     * {@inheritdoc}
     */
    public function supportsDecoding(\$format)
    {
        return self::FORMAT === \$format;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Encoder/JsonEncoder.php";
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

/**
 * Encodes JSON data.
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 */
class JsonEncoder implements EncoderInterface, DecoderInterface
{
    const FORMAT = 'json';

    protected \$encodingImpl;
    protected \$decodingImpl;

    public function __construct(JsonEncode \$encodingImpl = null, JsonDecode \$decodingImpl = null)
    {
        \$this->encodingImpl = \$encodingImpl ?: new JsonEncode();
        \$this->decodingImpl = \$decodingImpl ?: new JsonDecode([JsonDecode::ASSOCIATIVE => true]);
    }

    /**
     * {@inheritdoc}
     */
    public function encode(\$data, \$format, array \$context = [])
    {
        return \$this->encodingImpl->encode(\$data, self::FORMAT, \$context);
    }

    /**
     * {@inheritdoc}
     */
    public function decode(\$data, \$format, array \$context = [])
    {
        return \$this->decodingImpl->decode(\$data, self::FORMAT, \$context);
    }

    /**
     * {@inheritdoc}
     */
    public function supportsEncoding(\$format)
    {
        return self::FORMAT === \$format;
    }

    /**
     * {@inheritdoc}
     */
    public function supportsDecoding(\$format)
    {
        return self::FORMAT === \$format;
    }
}
", "vendor/symfony/serializer/Encoder/JsonEncoder.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Encoder/JsonEncoder.php");
    }
}
