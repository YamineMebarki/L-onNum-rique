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

/* vendor/symfony/maker-bundle/src/Resources/skeleton/serializer/Normalizer.tpl.php */
class __TwigTemplate_575de308dfe6033312caf3b5b036448ae9bc2779798eaa78179395255472cc42 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Resources/skeleton/serializer/Normalizer.tpl.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Resources/skeleton/serializer/Normalizer.tpl.php"));

        // line 1
        echo "<?= \"<?php\\n\" ?>

namespace <?= \$namespace; ?>;

<?= (\$cacheable_interface = interface_exists('Symfony\\Component\\Serializer\\Normalizer\\CacheableSupportsMethodInterface')) ? \"use Symfony\\Component\\Serializer\\Normalizer\\CacheableSupportsMethodInterface;\\n\" : '' ?>
use Symfony\\Component\\Serializer\\Normalizer\\NormalizerInterface;
use Symfony\\Component\\Serializer\\Normalizer\\ObjectNormalizer;

class <?= \$class_name ?> implements NormalizerInterface<?= \$cacheable_interface ? ', CacheableSupportsMethodInterface' : '' ?><?= \"\\n\" ?>
{
    private \$normalizer;

    public function __construct(ObjectNormalizer \$normalizer)
    {
        \$this->normalizer = \$normalizer;
    }

    public function normalize(\$object, \$format = null, array \$context = array()): array
    {
        \$data = \$this->normalizer->normalize(\$object, \$format, \$context);

        // Here: add, edit, or delete some data

        return \$data;
    }

    public function supportsNormalization(\$data, \$format = null): bool
    {
        return \$data instanceof \\App\\Entity\\BlogPost;
    }
<?php if (\$cacheable_interface): ?>

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
<?php endif; ?>
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/maker-bundle/src/Resources/skeleton/serializer/Normalizer.tpl.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?= \"<?php\\n\" ?>

namespace <?= \$namespace; ?>;

<?= (\$cacheable_interface = interface_exists('Symfony\\Component\\Serializer\\Normalizer\\CacheableSupportsMethodInterface')) ? \"use Symfony\\Component\\Serializer\\Normalizer\\CacheableSupportsMethodInterface;\\n\" : '' ?>
use Symfony\\Component\\Serializer\\Normalizer\\NormalizerInterface;
use Symfony\\Component\\Serializer\\Normalizer\\ObjectNormalizer;

class <?= \$class_name ?> implements NormalizerInterface<?= \$cacheable_interface ? ', CacheableSupportsMethodInterface' : '' ?><?= \"\\n\" ?>
{
    private \$normalizer;

    public function __construct(ObjectNormalizer \$normalizer)
    {
        \$this->normalizer = \$normalizer;
    }

    public function normalize(\$object, \$format = null, array \$context = array()): array
    {
        \$data = \$this->normalizer->normalize(\$object, \$format, \$context);

        // Here: add, edit, or delete some data

        return \$data;
    }

    public function supportsNormalization(\$data, \$format = null): bool
    {
        return \$data instanceof \\App\\Entity\\BlogPost;
    }
<?php if (\$cacheable_interface): ?>

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
<?php endif; ?>
}
", "vendor/symfony/maker-bundle/src/Resources/skeleton/serializer/Normalizer.tpl.php", "/var/www/public/DevLaon/templates/vendor/symfony/maker-bundle/src/Resources/skeleton/serializer/Normalizer.tpl.php");
    }
}
