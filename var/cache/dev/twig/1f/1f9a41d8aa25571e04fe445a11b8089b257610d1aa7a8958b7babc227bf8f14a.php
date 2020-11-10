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

/* vendor/symfony/maker-bundle/src/Resources/skeleton/serializer/Encoder.tpl.php */
class __TwigTemplate_cda5304a2969f04e7f9642c429f154230e2e32e3222359632366c8b5128d6014 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Resources/skeleton/serializer/Encoder.tpl.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Resources/skeleton/serializer/Encoder.tpl.php"));

        // line 1
        echo "<?= \"<?php\\n\" ?>

namespace <?= \$namespace; ?>;

use Symfony\\Component\\Serializer\\Encoder\\DecoderInterface;
use Symfony\\Component\\Serializer\\Encoder\\EncoderInterface;

class <?= \$class_name ?> implements EncoderInterface, DecoderInterface
{
    const FORMAT = '<?= \$format ?>';

    public function encode(\$data, \$format, array \$context = [])
    {
        // Todo: return your encoded data
        return '';
    }

    public function supportsEncoding(\$format): bool
    {
        return self::FORMAT === \$format;
    }

    public function decode(\$data, \$format, array \$context = [])
    {
        // Todo: return your decoded data
        return '';
    }

    public function supportsDecoding(\$format): bool
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
        return "vendor/symfony/maker-bundle/src/Resources/skeleton/serializer/Encoder.tpl.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?= \"<?php\\n\" ?>

namespace <?= \$namespace; ?>;

use Symfony\\Component\\Serializer\\Encoder\\DecoderInterface;
use Symfony\\Component\\Serializer\\Encoder\\EncoderInterface;

class <?= \$class_name ?> implements EncoderInterface, DecoderInterface
{
    const FORMAT = '<?= \$format ?>';

    public function encode(\$data, \$format, array \$context = [])
    {
        // Todo: return your encoded data
        return '';
    }

    public function supportsEncoding(\$format): bool
    {
        return self::FORMAT === \$format;
    }

    public function decode(\$data, \$format, array \$context = [])
    {
        // Todo: return your decoded data
        return '';
    }

    public function supportsDecoding(\$format): bool
    {
        return self::FORMAT === \$format;
    }
}
", "vendor/symfony/maker-bundle/src/Resources/skeleton/serializer/Encoder.tpl.php", "/var/www/public/DevLaon/templates/vendor/symfony/maker-bundle/src/Resources/skeleton/serializer/Encoder.tpl.php");
    }
}
