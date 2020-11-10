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

/* vendor/symfony/mime/Tests/Part/Multipart/RelatedPartTest.php */
class __TwigTemplate_e741a328a4392cc4f6044d03d0baa4b216156a50c3b13769ef10a24661726127 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Tests/Part/Multipart/RelatedPartTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Tests/Part/Multipart/RelatedPartTest.php"));

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

namespace Symfony\\Component\\Mime\\Tests\\Part\\Multipart;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Mime\\Part\\Multipart\\RelatedPart;
use Symfony\\Component\\Mime\\Part\\TextPart;

class RelatedPartTest extends TestCase
{
    public function testConstructor()
    {
        \$r = new RelatedPart(\$a = new TextPart('content'), \$b = new TextPart('HTML content', 'utf-8', 'html'), \$c = new TextPart('HTML content again', 'utf-8', 'html'));
        \$this->assertEquals('multipart', \$r->getMediaType());
        \$this->assertEquals('related', \$r->getMediaSubtype());
        \$this->assertEquals([\$a, \$b, \$c], \$r->getParts());
        \$this->assertFalse(\$a->getHeaders()->has('Content-ID'));
        \$this->assertTrue(\$b->getHeaders()->has('Content-ID'));
        \$this->assertTrue(\$c->getHeaders()->has('Content-ID'));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/mime/Tests/Part/Multipart/RelatedPartTest.php";
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

namespace Symfony\\Component\\Mime\\Tests\\Part\\Multipart;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Mime\\Part\\Multipart\\RelatedPart;
use Symfony\\Component\\Mime\\Part\\TextPart;

class RelatedPartTest extends TestCase
{
    public function testConstructor()
    {
        \$r = new RelatedPart(\$a = new TextPart('content'), \$b = new TextPart('HTML content', 'utf-8', 'html'), \$c = new TextPart('HTML content again', 'utf-8', 'html'));
        \$this->assertEquals('multipart', \$r->getMediaType());
        \$this->assertEquals('related', \$r->getMediaSubtype());
        \$this->assertEquals([\$a, \$b, \$c], \$r->getParts());
        \$this->assertFalse(\$a->getHeaders()->has('Content-ID'));
        \$this->assertTrue(\$b->getHeaders()->has('Content-ID'));
        \$this->assertTrue(\$c->getHeaders()->has('Content-ID'));
    }
}
", "vendor/symfony/mime/Tests/Part/Multipart/RelatedPartTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/mime/Tests/Part/Multipart/RelatedPartTest.php");
    }
}
