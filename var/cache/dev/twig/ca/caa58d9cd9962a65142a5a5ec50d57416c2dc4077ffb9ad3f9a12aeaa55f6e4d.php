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

/* vendor/symfony/dom-crawler/Tests/NativeParserCrawlerTest.php */
class __TwigTemplate_f3be7679b56bb6d07522f201c0e7ed267d5d59ba9b38e6f0dfe5d5974d4b7cc4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dom-crawler/Tests/NativeParserCrawlerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dom-crawler/Tests/NativeParserCrawlerTest.php"));

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

namespace Symfony\\Component\\DomCrawler\\Tests;

class NativeParserCrawlerTest extends AbstractCrawlerTest
{
    public function getDoctype(): string
    {
        return '<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">';
    }

    public function testAddHtmlContentWithErrors()
    {
        \$internalErrors = libxml_use_internal_errors(true);

        \$crawler = \$this->createCrawler();
        \$crawler->addHtmlContent(<<<'EOF'
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html>
    <head>
    </head>
    <body>
        <nav><a href=\"#\"><a href=\"#\"></nav>
    </body>
</html>
EOF
            , 'UTF-8');

        \$errors = libxml_get_errors();
        \$this->assertCount(1, \$errors);
        \$this->assertEquals(\"Tag nav invalid\\n\", \$errors[0]->message);

        libxml_clear_errors();
        libxml_use_internal_errors(\$internalErrors);
    }

    public function testAddXmlContentWithErrors()
    {
        \$internalErrors = libxml_use_internal_errors(true);

        \$crawler = \$this->createCrawler();
        \$crawler->addXmlContent(<<<'EOF'
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html>
    <head>
    </head>
    <body>
        <nav><a href=\"#\"><a href=\"#\"></nav>
    </body>
</html>
EOF
            , 'UTF-8');

        \$this->assertGreaterThan(1, libxml_get_errors());

        libxml_clear_errors();
        libxml_use_internal_errors(\$internalErrors);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dom-crawler/Tests/NativeParserCrawlerTest.php";
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

namespace Symfony\\Component\\DomCrawler\\Tests;

class NativeParserCrawlerTest extends AbstractCrawlerTest
{
    public function getDoctype(): string
    {
        return '<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">';
    }

    public function testAddHtmlContentWithErrors()
    {
        \$internalErrors = libxml_use_internal_errors(true);

        \$crawler = \$this->createCrawler();
        \$crawler->addHtmlContent(<<<'EOF'
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html>
    <head>
    </head>
    <body>
        <nav><a href=\"#\"><a href=\"#\"></nav>
    </body>
</html>
EOF
            , 'UTF-8');

        \$errors = libxml_get_errors();
        \$this->assertCount(1, \$errors);
        \$this->assertEquals(\"Tag nav invalid\\n\", \$errors[0]->message);

        libxml_clear_errors();
        libxml_use_internal_errors(\$internalErrors);
    }

    public function testAddXmlContentWithErrors()
    {
        \$internalErrors = libxml_use_internal_errors(true);

        \$crawler = \$this->createCrawler();
        \$crawler->addXmlContent(<<<'EOF'
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html>
    <head>
    </head>
    <body>
        <nav><a href=\"#\"><a href=\"#\"></nav>
    </body>
</html>
EOF
            , 'UTF-8');

        \$this->assertGreaterThan(1, libxml_get_errors());

        libxml_clear_errors();
        libxml_use_internal_errors(\$internalErrors);
    }
}
", "vendor/symfony/dom-crawler/Tests/NativeParserCrawlerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/dom-crawler/Tests/NativeParserCrawlerTest.php");
    }
}
