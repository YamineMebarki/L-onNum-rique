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

/* vendor/symfony/cache/Tests/Adapter/TagAwareAndProxyAdapterIntegrationTest.php */
class __TwigTemplate_7b68d76d14dbdfd408539fc5ac40c64b4d45179684343b99354a0919f0809efa extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/Adapter/TagAwareAndProxyAdapterIntegrationTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/Adapter/TagAwareAndProxyAdapterIntegrationTest.php"));

        // line 1
        echo "<?php

namespace Symfony\\Component\\Cache\\Tests\\Adapter;

use PHPUnit\\Framework\\TestCase;
use Psr\\Cache\\CacheItemPoolInterface;
use Symfony\\Component\\Cache\\Adapter\\ArrayAdapter;
use Symfony\\Component\\Cache\\Adapter\\ProxyAdapter;
use Symfony\\Component\\Cache\\Adapter\\TagAwareAdapter;
use Symfony\\Component\\Cache\\Tests\\Fixtures\\ExternalAdapter;

class TagAwareAndProxyAdapterIntegrationTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testIntegrationUsingProxiedAdapter(CacheItemPoolInterface \$proxiedAdapter)
    {
        \$cache = new TagAwareAdapter(new ProxyAdapter(\$proxiedAdapter));

        \$item = \$cache->getItem('foo');
        \$item->tag(['tag1', 'tag2']);
        \$item->set('bar');
        \$cache->save(\$item);

        \$this->assertSame('bar', \$cache->getItem('foo')->get());
    }

    public function dataProvider()
    {
        return [
            [new ArrayAdapter()],
            // also testing with a non-AdapterInterface implementation
            // because the ProxyAdapter behaves slightly different for those
            [new ExternalAdapter()],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/cache/Tests/Adapter/TagAwareAndProxyAdapterIntegrationTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Symfony\\Component\\Cache\\Tests\\Adapter;

use PHPUnit\\Framework\\TestCase;
use Psr\\Cache\\CacheItemPoolInterface;
use Symfony\\Component\\Cache\\Adapter\\ArrayAdapter;
use Symfony\\Component\\Cache\\Adapter\\ProxyAdapter;
use Symfony\\Component\\Cache\\Adapter\\TagAwareAdapter;
use Symfony\\Component\\Cache\\Tests\\Fixtures\\ExternalAdapter;

class TagAwareAndProxyAdapterIntegrationTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testIntegrationUsingProxiedAdapter(CacheItemPoolInterface \$proxiedAdapter)
    {
        \$cache = new TagAwareAdapter(new ProxyAdapter(\$proxiedAdapter));

        \$item = \$cache->getItem('foo');
        \$item->tag(['tag1', 'tag2']);
        \$item->set('bar');
        \$cache->save(\$item);

        \$this->assertSame('bar', \$cache->getItem('foo')->get());
    }

    public function dataProvider()
    {
        return [
            [new ArrayAdapter()],
            // also testing with a non-AdapterInterface implementation
            // because the ProxyAdapter behaves slightly different for those
            [new ExternalAdapter()],
        ];
    }
}
", "vendor/symfony/cache/Tests/Adapter/TagAwareAndProxyAdapterIntegrationTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache/Tests/Adapter/TagAwareAndProxyAdapterIntegrationTest.php");
    }
}
