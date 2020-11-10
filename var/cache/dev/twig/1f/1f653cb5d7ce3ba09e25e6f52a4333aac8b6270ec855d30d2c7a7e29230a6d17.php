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

/* vendor/symfony/dom-crawler/Tests/Test/Constraint/CrawlerSelectorTextContainsTest.php */
class __TwigTemplate_d21c63e76810ccee0b6d7710c0302d629fa3d714d09627aae193693b484be387 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dom-crawler/Tests/Test/Constraint/CrawlerSelectorTextContainsTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dom-crawler/Tests/Test/Constraint/CrawlerSelectorTextContainsTest.php"));

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

namespace Symfony\\Component\\DomCrawler\\Tests\\Test\\Constraint;

use PHPUnit\\Framework\\ExpectationFailedException;
use PHPUnit\\Framework\\TestCase;
use PHPUnit\\Framework\\TestFailure;
use Symfony\\Component\\DomCrawler\\Crawler;
use Symfony\\Component\\DomCrawler\\Test\\Constraint\\CrawlerSelectorTextContains;

class CrawlerSelectorTextContainsTest extends TestCase
{
    public function testConstraint(): void
    {
        \$constraint = new CrawlerSelectorTextContains('title', 'Foo');
        \$this->assertTrue(\$constraint->evaluate(new Crawler('<html><head><title>Foobar'), '', true));
        \$this->assertFalse(\$constraint->evaluate(new Crawler('<html><head><title>Bar'), '', true));

        try {
            \$constraint->evaluate(new Crawler('<html><head><title>Bar'));
        } catch (ExpectationFailedException \$e) {
            \$this->assertEquals(\"Failed asserting that the Crawler has a node matching selector \\\"title\\\" with content containing \\\"Foo\\\".\\n\", TestFailure::exceptionToString(\$e));

            return;
        }

        \$this->fail();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dom-crawler/Tests/Test/Constraint/CrawlerSelectorTextContainsTest.php";
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

namespace Symfony\\Component\\DomCrawler\\Tests\\Test\\Constraint;

use PHPUnit\\Framework\\ExpectationFailedException;
use PHPUnit\\Framework\\TestCase;
use PHPUnit\\Framework\\TestFailure;
use Symfony\\Component\\DomCrawler\\Crawler;
use Symfony\\Component\\DomCrawler\\Test\\Constraint\\CrawlerSelectorTextContains;

class CrawlerSelectorTextContainsTest extends TestCase
{
    public function testConstraint(): void
    {
        \$constraint = new CrawlerSelectorTextContains('title', 'Foo');
        \$this->assertTrue(\$constraint->evaluate(new Crawler('<html><head><title>Foobar'), '', true));
        \$this->assertFalse(\$constraint->evaluate(new Crawler('<html><head><title>Bar'), '', true));

        try {
            \$constraint->evaluate(new Crawler('<html><head><title>Bar'));
        } catch (ExpectationFailedException \$e) {
            \$this->assertEquals(\"Failed asserting that the Crawler has a node matching selector \\\"title\\\" with content containing \\\"Foo\\\".\\n\", TestFailure::exceptionToString(\$e));

            return;
        }

        \$this->fail();
    }
}
", "vendor/symfony/dom-crawler/Tests/Test/Constraint/CrawlerSelectorTextContainsTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/dom-crawler/Tests/Test/Constraint/CrawlerSelectorTextContainsTest.php");
    }
}
