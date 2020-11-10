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

/* vendor/symfony/finder/Tests/Iterator/RecursiveDirectoryIteratorTest.php */
class __TwigTemplate_961ef50bf4e33b61ba13cf5125f4cd02c9d0bf685e6d812afc1a0ae1afb7ce44 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/finder/Tests/Iterator/RecursiveDirectoryIteratorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/finder/Tests/Iterator/RecursiveDirectoryIteratorTest.php"));

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

namespace Symfony\\Component\\Finder\\Tests\\Iterator;

use Symfony\\Component\\Finder\\Iterator\\RecursiveDirectoryIterator;

class RecursiveDirectoryIteratorTest extends IteratorTestCase
{
    /**
     * @group network
     */
    public function testRewindOnFtp()
    {
        try {
            \$i = new RecursiveDirectoryIterator('ftp://speedtest.tele2.net/', \\RecursiveDirectoryIterator::SKIP_DOTS);
        } catch (\\UnexpectedValueException \$e) {
            \$this->markTestSkipped('Unsupported stream \"ftp\".');
        }

        \$i->rewind();

        \$this->assertTrue(true);
    }

    /**
     * @group network
     */
    public function testSeekOnFtp()
    {
        try {
            \$i = new RecursiveDirectoryIterator('ftp://speedtest.tele2.net/', \\RecursiveDirectoryIterator::SKIP_DOTS);
        } catch (\\UnexpectedValueException \$e) {
            \$this->markTestSkipped('Unsupported stream \"ftp\".');
        }

        \$contains = [
            'ftp://speedtest.tele2.net'.\\DIRECTORY_SEPARATOR.'1000GB.zip',
            'ftp://speedtest.tele2.net'.\\DIRECTORY_SEPARATOR.'100GB.zip',
        ];
        \$actual = [];

        \$i->seek(0);
        \$actual[] = \$i->getPathname();

        \$i->seek(1);
        \$actual[] = \$i->getPathname();

        \$this->assertEquals(\$contains, \$actual);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/finder/Tests/Iterator/RecursiveDirectoryIteratorTest.php";
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

namespace Symfony\\Component\\Finder\\Tests\\Iterator;

use Symfony\\Component\\Finder\\Iterator\\RecursiveDirectoryIterator;

class RecursiveDirectoryIteratorTest extends IteratorTestCase
{
    /**
     * @group network
     */
    public function testRewindOnFtp()
    {
        try {
            \$i = new RecursiveDirectoryIterator('ftp://speedtest.tele2.net/', \\RecursiveDirectoryIterator::SKIP_DOTS);
        } catch (\\UnexpectedValueException \$e) {
            \$this->markTestSkipped('Unsupported stream \"ftp\".');
        }

        \$i->rewind();

        \$this->assertTrue(true);
    }

    /**
     * @group network
     */
    public function testSeekOnFtp()
    {
        try {
            \$i = new RecursiveDirectoryIterator('ftp://speedtest.tele2.net/', \\RecursiveDirectoryIterator::SKIP_DOTS);
        } catch (\\UnexpectedValueException \$e) {
            \$this->markTestSkipped('Unsupported stream \"ftp\".');
        }

        \$contains = [
            'ftp://speedtest.tele2.net'.\\DIRECTORY_SEPARATOR.'1000GB.zip',
            'ftp://speedtest.tele2.net'.\\DIRECTORY_SEPARATOR.'100GB.zip',
        ];
        \$actual = [];

        \$i->seek(0);
        \$actual[] = \$i->getPathname();

        \$i->seek(1);
        \$actual[] = \$i->getPathname();

        \$this->assertEquals(\$contains, \$actual);
    }
}
", "vendor/symfony/finder/Tests/Iterator/RecursiveDirectoryIteratorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/finder/Tests/Iterator/RecursiveDirectoryIteratorTest.php");
    }
}
