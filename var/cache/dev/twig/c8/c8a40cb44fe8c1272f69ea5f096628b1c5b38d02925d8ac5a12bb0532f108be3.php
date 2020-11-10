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

/* vendor/symfony/serializer/Encoder/ChainDecoder.php */
class __TwigTemplate_4a76ed98998bf8c6f126cccf6b4f9e7fef223c4dea2511575a3eea6c996c38b9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Encoder/ChainDecoder.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Encoder/ChainDecoder.php"));

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

use Symfony\\Component\\Serializer\\Exception\\RuntimeException;

/**
 * Decoder delegating the decoding to a chain of decoders.
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 * @author Lukas Kahwe Smith <smith@pooteeweet.org>
 *
 * @final
 */
class ChainDecoder implements ContextAwareDecoderInterface
{
    protected \$decoders = [];
    protected \$decoderByFormat = [];

    public function __construct(array \$decoders = [])
    {
        \$this->decoders = \$decoders;
    }

    /**
     * {@inheritdoc}
     */
    final public function decode(\$data, \$format, array \$context = [])
    {
        return \$this->getDecoder(\$format, \$context)->decode(\$data, \$format, \$context);
    }

    /**
     * {@inheritdoc}
     */
    public function supportsDecoding(\$format, array \$context = [])
    {
        try {
            \$this->getDecoder(\$format, \$context);
        } catch (RuntimeException \$e) {
            return false;
        }

        return true;
    }

    /**
     * Gets the decoder supporting the format.
     *
     * @throws RuntimeException if no decoder is found
     */
    private function getDecoder(string \$format, array \$context): DecoderInterface
    {
        if (isset(\$this->decoderByFormat[\$format])
            && isset(\$this->decoders[\$this->decoderByFormat[\$format]])
        ) {
            return \$this->decoders[\$this->decoderByFormat[\$format]];
        }

        foreach (\$this->decoders as \$i => \$decoder) {
            if (\$decoder->supportsDecoding(\$format, \$context)) {
                \$this->decoderByFormat[\$format] = \$i;

                return \$decoder;
            }
        }

        throw new RuntimeException(sprintf('No decoder found for format \"%s\".', \$format));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Encoder/ChainDecoder.php";
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

use Symfony\\Component\\Serializer\\Exception\\RuntimeException;

/**
 * Decoder delegating the decoding to a chain of decoders.
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 * @author Lukas Kahwe Smith <smith@pooteeweet.org>
 *
 * @final
 */
class ChainDecoder implements ContextAwareDecoderInterface
{
    protected \$decoders = [];
    protected \$decoderByFormat = [];

    public function __construct(array \$decoders = [])
    {
        \$this->decoders = \$decoders;
    }

    /**
     * {@inheritdoc}
     */
    final public function decode(\$data, \$format, array \$context = [])
    {
        return \$this->getDecoder(\$format, \$context)->decode(\$data, \$format, \$context);
    }

    /**
     * {@inheritdoc}
     */
    public function supportsDecoding(\$format, array \$context = [])
    {
        try {
            \$this->getDecoder(\$format, \$context);
        } catch (RuntimeException \$e) {
            return false;
        }

        return true;
    }

    /**
     * Gets the decoder supporting the format.
     *
     * @throws RuntimeException if no decoder is found
     */
    private function getDecoder(string \$format, array \$context): DecoderInterface
    {
        if (isset(\$this->decoderByFormat[\$format])
            && isset(\$this->decoders[\$this->decoderByFormat[\$format]])
        ) {
            return \$this->decoders[\$this->decoderByFormat[\$format]];
        }

        foreach (\$this->decoders as \$i => \$decoder) {
            if (\$decoder->supportsDecoding(\$format, \$context)) {
                \$this->decoderByFormat[\$format] = \$i;

                return \$decoder;
            }
        }

        throw new RuntimeException(sprintf('No decoder found for format \"%s\".', \$format));
    }
}
", "vendor/symfony/serializer/Encoder/ChainDecoder.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Encoder/ChainDecoder.php");
    }
}
