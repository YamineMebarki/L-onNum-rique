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

/* vendor/symfony/validator/Tests/Mapping/Cache/Psr6CacheTest.php */
class __TwigTemplate_56a58bf4a8e42a035a72ed26216c88ab1d79d88125237c5349f1528200d42d09 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Mapping/Cache/Psr6CacheTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Mapping/Cache/Psr6CacheTest.php"));

        // line 1
        echo "<?php

namespace Symfony\\Component\\Validator\\Tests\\Mapping\\Cache;

use Symfony\\Component\\Cache\\Adapter\\ArrayAdapter;
use Symfony\\Component\\Validator\\Mapping\\Cache\\Psr6Cache;
use Symfony\\Component\\Validator\\Mapping\\ClassMetadata;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class Psr6CacheTest extends AbstractCacheTest
{
    protected function setUp(): void
    {
        \$this->cache = new Psr6Cache(new ArrayAdapter());
    }

    public function testNameCollision()
    {
        \$metadata = new ClassMetadata('Foo\\\\Bar');

        \$this->cache->write(\$metadata);
        \$this->assertFalse(\$this->cache->has('Foo_Bar'));
    }

    public function testNameWithInvalidChars()
    {
        \$metadata = new ClassMetadata('class@anonymous/path/file');

        \$this->cache->write(\$metadata);
        \$this->assertTrue(\$this->cache->has('class@anonymous/path/file'));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Mapping/Cache/Psr6CacheTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Symfony\\Component\\Validator\\Tests\\Mapping\\Cache;

use Symfony\\Component\\Cache\\Adapter\\ArrayAdapter;
use Symfony\\Component\\Validator\\Mapping\\Cache\\Psr6Cache;
use Symfony\\Component\\Validator\\Mapping\\ClassMetadata;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class Psr6CacheTest extends AbstractCacheTest
{
    protected function setUp(): void
    {
        \$this->cache = new Psr6Cache(new ArrayAdapter());
    }

    public function testNameCollision()
    {
        \$metadata = new ClassMetadata('Foo\\\\Bar');

        \$this->cache->write(\$metadata);
        \$this->assertFalse(\$this->cache->has('Foo_Bar'));
    }

    public function testNameWithInvalidChars()
    {
        \$metadata = new ClassMetadata('class@anonymous/path/file');

        \$this->cache->write(\$metadata);
        \$this->assertTrue(\$this->cache->has('class@anonymous/path/file'));
    }
}
", "vendor/symfony/validator/Tests/Mapping/Cache/Psr6CacheTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Mapping/Cache/Psr6CacheTest.php");
    }
}
