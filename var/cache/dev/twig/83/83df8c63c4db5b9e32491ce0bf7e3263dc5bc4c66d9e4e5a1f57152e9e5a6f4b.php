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

/* vendor/symfony/serializer/Encoder/ChainEncoder.php */
class __TwigTemplate_973d02a960322d5eaa08aef32313bc0dab3e7066a586655464dfb061cab625e6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Encoder/ChainEncoder.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Encoder/ChainEncoder.php"));

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
 * Encoder delegating the decoding to a chain of encoders.
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 * @author Lukas Kahwe Smith <smith@pooteeweet.org>
 *
 * @final
 */
class ChainEncoder implements ContextAwareEncoderInterface
{
    protected \$encoders = [];
    protected \$encoderByFormat = [];

    public function __construct(array \$encoders = [])
    {
        \$this->encoders = \$encoders;
    }

    /**
     * {@inheritdoc}
     */
    final public function encode(\$data, \$format, array \$context = [])
    {
        return \$this->getEncoder(\$format, \$context)->encode(\$data, \$format, \$context);
    }

    /**
     * {@inheritdoc}
     */
    public function supportsEncoding(\$format, array \$context = [])
    {
        try {
            \$this->getEncoder(\$format, \$context);
        } catch (RuntimeException \$e) {
            return false;
        }

        return true;
    }

    /**
     * Checks whether the normalization is needed for the given format.
     *
     * @param string \$format
     *
     * @return bool
     */
    public function needsNormalization(\$format, array \$context = [])
    {
        \$encoder = \$this->getEncoder(\$format, \$context);

        if (!\$encoder instanceof NormalizationAwareInterface) {
            return true;
        }

        if (\$encoder instanceof self) {
            return \$encoder->needsNormalization(\$format, \$context);
        }

        return false;
    }

    /**
     * Gets the encoder supporting the format.
     *
     * @throws RuntimeException if no encoder is found
     */
    private function getEncoder(string \$format, array \$context): EncoderInterface
    {
        if (isset(\$this->encoderByFormat[\$format])
            && isset(\$this->encoders[\$this->encoderByFormat[\$format]])
        ) {
            return \$this->encoders[\$this->encoderByFormat[\$format]];
        }

        foreach (\$this->encoders as \$i => \$encoder) {
            if (\$encoder->supportsEncoding(\$format, \$context)) {
                \$this->encoderByFormat[\$format] = \$i;

                return \$encoder;
            }
        }

        throw new RuntimeException(sprintf('No encoder found for format \"%s\".', \$format));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Encoder/ChainEncoder.php";
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
 * Encoder delegating the decoding to a chain of encoders.
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 * @author Lukas Kahwe Smith <smith@pooteeweet.org>
 *
 * @final
 */
class ChainEncoder implements ContextAwareEncoderInterface
{
    protected \$encoders = [];
    protected \$encoderByFormat = [];

    public function __construct(array \$encoders = [])
    {
        \$this->encoders = \$encoders;
    }

    /**
     * {@inheritdoc}
     */
    final public function encode(\$data, \$format, array \$context = [])
    {
        return \$this->getEncoder(\$format, \$context)->encode(\$data, \$format, \$context);
    }

    /**
     * {@inheritdoc}
     */
    public function supportsEncoding(\$format, array \$context = [])
    {
        try {
            \$this->getEncoder(\$format, \$context);
        } catch (RuntimeException \$e) {
            return false;
        }

        return true;
    }

    /**
     * Checks whether the normalization is needed for the given format.
     *
     * @param string \$format
     *
     * @return bool
     */
    public function needsNormalization(\$format, array \$context = [])
    {
        \$encoder = \$this->getEncoder(\$format, \$context);

        if (!\$encoder instanceof NormalizationAwareInterface) {
            return true;
        }

        if (\$encoder instanceof self) {
            return \$encoder->needsNormalization(\$format, \$context);
        }

        return false;
    }

    /**
     * Gets the encoder supporting the format.
     *
     * @throws RuntimeException if no encoder is found
     */
    private function getEncoder(string \$format, array \$context): EncoderInterface
    {
        if (isset(\$this->encoderByFormat[\$format])
            && isset(\$this->encoders[\$this->encoderByFormat[\$format]])
        ) {
            return \$this->encoders[\$this->encoderByFormat[\$format]];
        }

        foreach (\$this->encoders as \$i => \$encoder) {
            if (\$encoder->supportsEncoding(\$format, \$context)) {
                \$this->encoderByFormat[\$format] = \$i;

                return \$encoder;
            }
        }

        throw new RuntimeException(sprintf('No encoder found for format \"%s\".', \$format));
    }
}
", "vendor/symfony/serializer/Encoder/ChainEncoder.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Encoder/ChainEncoder.php");
    }
}
