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

/* vendor/symfony/web-link/Tests/HttpHeaderSerializerTest.php */
class __TwigTemplate_1f5ae86fc86ae80416f1b86b5cc09965c828c2839133c7a263b083c9d621bfb2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/web-link/Tests/HttpHeaderSerializerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/web-link/Tests/HttpHeaderSerializerTest.php"));

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

namespace Symfony\\Component\\WebLink\\Tests;

use Fig\\Link\\Link;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\WebLink\\HttpHeaderSerializer;

class HttpHeaderSerializerTest extends TestCase
{
    /**
     * @var HttpHeaderSerializer
     */
    private \$serializer;

    protected function setUp(): void
    {
        \$this->serializer = new HttpHeaderSerializer();
    }

    public function testSerialize()
    {
        \$links = [
            new Link('prerender', '/1'),
            (new Link('dns-prefetch', '/2'))->withAttribute('pr', 0.7),
            (new Link('preload', '/3'))->withAttribute('as', 'script')->withAttribute('nopush', false),
            (new Link('preload', '/4'))->withAttribute('as', 'image')->withAttribute('nopush', true),
            (new Link('alternate', '/5'))->withRel('next')->withAttribute('hreflang', ['fr', 'de'])->withAttribute('title', 'Hello'),
        ];

        \$this->assertEquals('</1>; rel=\"prerender\",</2>; rel=\"dns-prefetch\"; pr=\"0.7\",</3>; rel=\"preload\"; as=\"script\",</4>; rel=\"preload\"; as=\"image\"; nopush,</5>; rel=\"alternate next\"; hreflang=\"fr\"; hreflang=\"de\"; title=\"Hello\"', \$this->serializer->serialize(\$links));
    }

    public function testSerializeEmpty()
    {
        \$this->assertNull(\$this->serializer->serialize([]));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/web-link/Tests/HttpHeaderSerializerTest.php";
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

namespace Symfony\\Component\\WebLink\\Tests;

use Fig\\Link\\Link;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\WebLink\\HttpHeaderSerializer;

class HttpHeaderSerializerTest extends TestCase
{
    /**
     * @var HttpHeaderSerializer
     */
    private \$serializer;

    protected function setUp(): void
    {
        \$this->serializer = new HttpHeaderSerializer();
    }

    public function testSerialize()
    {
        \$links = [
            new Link('prerender', '/1'),
            (new Link('dns-prefetch', '/2'))->withAttribute('pr', 0.7),
            (new Link('preload', '/3'))->withAttribute('as', 'script')->withAttribute('nopush', false),
            (new Link('preload', '/4'))->withAttribute('as', 'image')->withAttribute('nopush', true),
            (new Link('alternate', '/5'))->withRel('next')->withAttribute('hreflang', ['fr', 'de'])->withAttribute('title', 'Hello'),
        ];

        \$this->assertEquals('</1>; rel=\"prerender\",</2>; rel=\"dns-prefetch\"; pr=\"0.7\",</3>; rel=\"preload\"; as=\"script\",</4>; rel=\"preload\"; as=\"image\"; nopush,</5>; rel=\"alternate next\"; hreflang=\"fr\"; hreflang=\"de\"; title=\"Hello\"', \$this->serializer->serialize(\$links));
    }

    public function testSerializeEmpty()
    {
        \$this->assertNull(\$this->serializer->serialize([]));
    }
}
", "vendor/symfony/web-link/Tests/HttpHeaderSerializerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/web-link/Tests/HttpHeaderSerializerTest.php");
    }
}
