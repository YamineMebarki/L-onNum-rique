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

/* vendor/symfony/serializer/Encoder/YamlEncoder.php */
class __TwigTemplate_63c3f53d91464c1de232a3530ddac49a6add8493bf5c2a876ac0475a1b605275 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Encoder/YamlEncoder.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Encoder/YamlEncoder.php"));

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
use Symfony\\Component\\Yaml\\Dumper;
use Symfony\\Component\\Yaml\\Parser;

/**
 * Encodes YAML data.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class YamlEncoder implements EncoderInterface, DecoderInterface
{
    const FORMAT = 'yaml';
    private const ALTERNATIVE_FORMAT = 'yml';

    private \$dumper;
    private \$parser;
    private \$defaultContext = ['yaml_inline' => 0, 'yaml_indent' => 0, 'yaml_flags' => 0];

    public function __construct(Dumper \$dumper = null, Parser \$parser = null, array \$defaultContext = [])
    {
        if (!class_exists(Dumper::class)) {
            throw new RuntimeException('The YamlEncoder class requires the \"Yaml\" component. Install \"symfony/yaml\" to use it.');
        }

        \$this->dumper = \$dumper ?: new Dumper();
        \$this->parser = \$parser ?: new Parser();
        \$this->defaultContext = array_merge(\$this->defaultContext, \$defaultContext);
    }

    /**
     * {@inheritdoc}
     */
    public function encode(\$data, \$format, array \$context = [])
    {
        \$context = array_merge(\$this->defaultContext, \$context);

        return \$this->dumper->dump(\$data, \$context['yaml_inline'], \$context['yaml_indent'], \$context['yaml_flags']);
    }

    /**
     * {@inheritdoc}
     */
    public function supportsEncoding(\$format)
    {
        return self::FORMAT === \$format || self::ALTERNATIVE_FORMAT === \$format;
    }

    /**
     * {@inheritdoc}
     */
    public function decode(\$data, \$format, array \$context = [])
    {
        \$context = array_merge(\$this->defaultContext, \$context);

        return \$this->parser->parse(\$data, \$context['yaml_flags']);
    }

    /**
     * {@inheritdoc}
     */
    public function supportsDecoding(\$format)
    {
        return self::FORMAT === \$format || self::ALTERNATIVE_FORMAT === \$format;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Encoder/YamlEncoder.php";
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
use Symfony\\Component\\Yaml\\Dumper;
use Symfony\\Component\\Yaml\\Parser;

/**
 * Encodes YAML data.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class YamlEncoder implements EncoderInterface, DecoderInterface
{
    const FORMAT = 'yaml';
    private const ALTERNATIVE_FORMAT = 'yml';

    private \$dumper;
    private \$parser;
    private \$defaultContext = ['yaml_inline' => 0, 'yaml_indent' => 0, 'yaml_flags' => 0];

    public function __construct(Dumper \$dumper = null, Parser \$parser = null, array \$defaultContext = [])
    {
        if (!class_exists(Dumper::class)) {
            throw new RuntimeException('The YamlEncoder class requires the \"Yaml\" component. Install \"symfony/yaml\" to use it.');
        }

        \$this->dumper = \$dumper ?: new Dumper();
        \$this->parser = \$parser ?: new Parser();
        \$this->defaultContext = array_merge(\$this->defaultContext, \$defaultContext);
    }

    /**
     * {@inheritdoc}
     */
    public function encode(\$data, \$format, array \$context = [])
    {
        \$context = array_merge(\$this->defaultContext, \$context);

        return \$this->dumper->dump(\$data, \$context['yaml_inline'], \$context['yaml_indent'], \$context['yaml_flags']);
    }

    /**
     * {@inheritdoc}
     */
    public function supportsEncoding(\$format)
    {
        return self::FORMAT === \$format || self::ALTERNATIVE_FORMAT === \$format;
    }

    /**
     * {@inheritdoc}
     */
    public function decode(\$data, \$format, array \$context = [])
    {
        \$context = array_merge(\$this->defaultContext, \$context);

        return \$this->parser->parse(\$data, \$context['yaml_flags']);
    }

    /**
     * {@inheritdoc}
     */
    public function supportsDecoding(\$format)
    {
        return self::FORMAT === \$format || self::ALTERNATIVE_FORMAT === \$format;
    }
}
", "vendor/symfony/serializer/Encoder/YamlEncoder.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Encoder/YamlEncoder.php");
    }
}
