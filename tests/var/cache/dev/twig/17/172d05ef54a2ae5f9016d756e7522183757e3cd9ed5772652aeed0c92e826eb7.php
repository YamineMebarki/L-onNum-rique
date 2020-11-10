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

/* vendor/symfony/serializer/Tests/Normalizer/Features/GroupsTestTrait.php */
class __TwigTemplate_a22422a6aceb7b455fe6ab357cfc7f4596f57111615162194e6a6046a6b4bd76 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Normalizer/Features/GroupsTestTrait.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Normalizer/Features/GroupsTestTrait.php"));

        // line 1
        echo "<?php

namespace Symfony\\Component\\Serializer\\Tests\\Normalizer\\Features;

use Symfony\\Component\\Serializer\\Normalizer\\DenormalizerInterface;
use Symfony\\Component\\Serializer\\Normalizer\\NormalizerInterface;
use Symfony\\Component\\Serializer\\Tests\\Fixtures\\GroupDummy;

/**
 * DevLaon AbstractNormalizer::GROUPS.
 */
trait GroupsTestTrait
{
    abstract protected function getNormalizerForGroups(): NormalizerInterface;

    abstract protected function getDenormalizerForGroups(): DenormalizerInterface;

    public function testGroupsNormalize()
    {
        \$normalizer = \$this->getNormalizerForGroups();

        \$obj = new GroupDummy();
        \$obj->setFoo('foo');
        \$obj->setBar('bar');
        \$obj->setFooBar('fooBar');
        \$obj->setSymfony('symfony');
        \$obj->setKevin('kevin');
        \$obj->setCoopTilleuls('coopTilleuls');

        \$this->assertEquals([
            'bar' => 'bar',
        ], \$normalizer->normalize(\$obj, null, ['groups' => ['c']]));

        \$this->assertEquals([
            'symfony' => 'symfony',
            'foo' => 'foo',
            'fooBar' => 'fooBar',
            'bar' => 'bar',
            'kevin' => 'kevin',
            'coopTilleuls' => 'coopTilleuls',
        ], \$normalizer->normalize(\$obj, null, ['groups' => ['a', 'c']]));
    }

    public function testGroupsDenormalize()
    {
        \$normalizer = \$this->getDenormalizerForGroups();

        \$obj = new GroupDummy();
        \$obj->setFoo('foo');

        \$data = ['foo' => 'foo', 'bar' => 'bar'];

        \$normalized = \$normalizer->denormalize(
            \$data,
            GroupDummy::class,
            null,
            ['groups' => ['a']]
        );
        \$this->assertEquals(\$obj, \$normalized);

        \$obj->setBar('bar');

        \$normalized = \$normalizer->denormalize(
            \$data,
            GroupDummy::class,
            null,
            ['groups' => ['a', 'b']]
        );
        \$this->assertEquals(\$obj, \$normalized);
    }

    public function testNormalizeNoPropertyInGroup()
    {
        \$normalizer = \$this->getNormalizerForGroups();

        \$obj = new GroupDummy();
        \$obj->setFoo('foo');

        \$this->assertEquals([], \$normalizer->normalize(\$obj, null, ['groups' => ['notExist']]));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Tests/Normalizer/Features/GroupsTestTrait.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Symfony\\Component\\Serializer\\Tests\\Normalizer\\Features;

use Symfony\\Component\\Serializer\\Normalizer\\DenormalizerInterface;
use Symfony\\Component\\Serializer\\Normalizer\\NormalizerInterface;
use Symfony\\Component\\Serializer\\Tests\\Fixtures\\GroupDummy;

/**
 * DevLaon AbstractNormalizer::GROUPS.
 */
trait GroupsTestTrait
{
    abstract protected function getNormalizerForGroups(): NormalizerInterface;

    abstract protected function getDenormalizerForGroups(): DenormalizerInterface;

    public function testGroupsNormalize()
    {
        \$normalizer = \$this->getNormalizerForGroups();

        \$obj = new GroupDummy();
        \$obj->setFoo('foo');
        \$obj->setBar('bar');
        \$obj->setFooBar('fooBar');
        \$obj->setSymfony('symfony');
        \$obj->setKevin('kevin');
        \$obj->setCoopTilleuls('coopTilleuls');

        \$this->assertEquals([
            'bar' => 'bar',
        ], \$normalizer->normalize(\$obj, null, ['groups' => ['c']]));

        \$this->assertEquals([
            'symfony' => 'symfony',
            'foo' => 'foo',
            'fooBar' => 'fooBar',
            'bar' => 'bar',
            'kevin' => 'kevin',
            'coopTilleuls' => 'coopTilleuls',
        ], \$normalizer->normalize(\$obj, null, ['groups' => ['a', 'c']]));
    }

    public function testGroupsDenormalize()
    {
        \$normalizer = \$this->getDenormalizerForGroups();

        \$obj = new GroupDummy();
        \$obj->setFoo('foo');

        \$data = ['foo' => 'foo', 'bar' => 'bar'];

        \$normalized = \$normalizer->denormalize(
            \$data,
            GroupDummy::class,
            null,
            ['groups' => ['a']]
        );
        \$this->assertEquals(\$obj, \$normalized);

        \$obj->setBar('bar');

        \$normalized = \$normalizer->denormalize(
            \$data,
            GroupDummy::class,
            null,
            ['groups' => ['a', 'b']]
        );
        \$this->assertEquals(\$obj, \$normalized);
    }

    public function testNormalizeNoPropertyInGroup()
    {
        \$normalizer = \$this->getNormalizerForGroups();

        \$obj = new GroupDummy();
        \$obj->setFoo('foo');

        \$this->assertEquals([], \$normalizer->normalize(\$obj, null, ['groups' => ['notExist']]));
    }
}
", "vendor/symfony/serializer/Tests/Normalizer/Features/GroupsTestTrait.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Tests/Normalizer/Features/GroupsTestTrait.php");
    }
}
