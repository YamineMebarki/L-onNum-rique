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

/* vendor/symfony/serializer/Tests/Normalizer/Features/TypeEnforcementTestTrait.php */
class __TwigTemplate_9ea444181c0c014abce80720600e780d75f1cd055b64339e808d55cfd78eb34b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Normalizer/Features/TypeEnforcementTestTrait.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Normalizer/Features/TypeEnforcementTestTrait.php"));

        // line 1
        echo "<?php

namespace Symfony\\Component\\Serializer\\Tests\\Normalizer\\Features;

use Symfony\\Component\\Serializer\\Exception\\UnexpectedValueException;
use Symfony\\Component\\Serializer\\Normalizer\\AbstractObjectNormalizer;
use Symfony\\Component\\Serializer\\Normalizer\\DenormalizerInterface;

/**
 * DevLaon type mismatches with a denormalizer that is aware of types.
 * Covers AbstractObjectNormalizer::DISABLE_TYPE_ENFORCEMENT.
 */
trait TypeEnforcementTestTrait
{
    abstract protected function getDenormalizerForTypeEnforcement(): DenormalizerInterface;

    public function testRejectInvalidType()
    {
        \$denormalizer = \$this->getDenormalizerForTypeEnforcement();

        \$this->expectException(UnexpectedValueException::class);
        \$this->expectExceptionMessage('The type of the \"date\" attribute for class \"'.ObjectOuter::class.'\" must be one of \"DateTimeInterface\" (\"string\" given).');
        \$denormalizer->denormalize(['date' => 'foo'], ObjectOuter::class);
    }

    public function testRejectInvalidKey()
    {
        \$denormalizer = \$this->getDenormalizerForTypeEnforcement();

        \$this->expectException(UnexpectedValueException::class);
        \$this->expectExceptionMessage('The type of the key \"a\" must be \"int\" (\"string\" given).');
        \$denormalizer->denormalize(['inners' => ['a' => ['foo' => 1]]], ObjectOuter::class);
    }

    public function testDoNotRejectInvalidTypeOnDisableTypeEnforcementContextOption()
    {
        \$denormalizer = \$this->getDenormalizerForTypeEnforcement();

        \$this->assertSame('foo', \$denormalizer->denormalize(
            ['number' => 'foo'],
            TypeEnforcementNumberObject::class,
            null,
            [AbstractObjectNormalizer::DISABLE_TYPE_ENFORCEMENT => true]
        )->number);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Tests/Normalizer/Features/TypeEnforcementTestTrait.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Symfony\\Component\\Serializer\\Tests\\Normalizer\\Features;

use Symfony\\Component\\Serializer\\Exception\\UnexpectedValueException;
use Symfony\\Component\\Serializer\\Normalizer\\AbstractObjectNormalizer;
use Symfony\\Component\\Serializer\\Normalizer\\DenormalizerInterface;

/**
 * DevLaon type mismatches with a denormalizer that is aware of types.
 * Covers AbstractObjectNormalizer::DISABLE_TYPE_ENFORCEMENT.
 */
trait TypeEnforcementTestTrait
{
    abstract protected function getDenormalizerForTypeEnforcement(): DenormalizerInterface;

    public function testRejectInvalidType()
    {
        \$denormalizer = \$this->getDenormalizerForTypeEnforcement();

        \$this->expectException(UnexpectedValueException::class);
        \$this->expectExceptionMessage('The type of the \"date\" attribute for class \"'.ObjectOuter::class.'\" must be one of \"DateTimeInterface\" (\"string\" given).');
        \$denormalizer->denormalize(['date' => 'foo'], ObjectOuter::class);
    }

    public function testRejectInvalidKey()
    {
        \$denormalizer = \$this->getDenormalizerForTypeEnforcement();

        \$this->expectException(UnexpectedValueException::class);
        \$this->expectExceptionMessage('The type of the key \"a\" must be \"int\" (\"string\" given).');
        \$denormalizer->denormalize(['inners' => ['a' => ['foo' => 1]]], ObjectOuter::class);
    }

    public function testDoNotRejectInvalidTypeOnDisableTypeEnforcementContextOption()
    {
        \$denormalizer = \$this->getDenormalizerForTypeEnforcement();

        \$this->assertSame('foo', \$denormalizer->denormalize(
            ['number' => 'foo'],
            TypeEnforcementNumberObject::class,
            null,
            [AbstractObjectNormalizer::DISABLE_TYPE_ENFORCEMENT => true]
        )->number);
    }
}
", "vendor/symfony/serializer/Tests/Normalizer/Features/TypeEnforcementTestTrait.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Tests/Normalizer/Features/TypeEnforcementTestTrait.php");
    }
}
