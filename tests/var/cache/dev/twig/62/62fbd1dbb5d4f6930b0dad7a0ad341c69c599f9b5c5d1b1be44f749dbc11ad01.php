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

/* vendor/symfony/translation/Tests/Dumper/PoFileDumperTest.php */
class __TwigTemplate_c42efeac2db2e2e0a2b202119ccd2455068c2053239cac51b616343257c48715 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/Dumper/PoFileDumperTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/Dumper/PoFileDumperTest.php"));

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

namespace Symfony\\Component\\Translation\\Tests\\Dumper;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Translation\\Dumper\\PoFileDumper;
use Symfony\\Component\\Translation\\MessageCatalogue;

class PoFileDumperTest extends TestCase
{
    public function testFormatCatalogue()
    {
        \$catalogue = new MessageCatalogue('en');
        \$catalogue->add(['foo' => 'bar', 'bar' => 'foo', 'foo_bar' => 'foobar', 'bar_foo' => 'barfoo']);
        \$catalogue->setMetadata('foo_bar', [
            'comments' => [
                'Comment 1',
                'Comment 2',
            ],
            'flags' => [
                'fuzzy',
                'another',
            ],
            'sources' => [
                'src/file_1',
                'src/file_2:50',
            ],
        ]);
        \$catalogue->setMetadata('bar_foo', [
            'comments' => 'Comment',
            'flags' => 'fuzzy',
            'sources' => 'src/file_1',
        ]);

        \$dumper = new PoFileDumper();

        \$this->assertStringEqualsFile(__DIR__.'/../fixtures/resources.po', \$dumper->formatCatalogue(\$catalogue, 'messages'));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/Tests/Dumper/PoFileDumperTest.php";
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

namespace Symfony\\Component\\Translation\\Tests\\Dumper;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Translation\\Dumper\\PoFileDumper;
use Symfony\\Component\\Translation\\MessageCatalogue;

class PoFileDumperTest extends TestCase
{
    public function testFormatCatalogue()
    {
        \$catalogue = new MessageCatalogue('en');
        \$catalogue->add(['foo' => 'bar', 'bar' => 'foo', 'foo_bar' => 'foobar', 'bar_foo' => 'barfoo']);
        \$catalogue->setMetadata('foo_bar', [
            'comments' => [
                'Comment 1',
                'Comment 2',
            ],
            'flags' => [
                'fuzzy',
                'another',
            ],
            'sources' => [
                'src/file_1',
                'src/file_2:50',
            ],
        ]);
        \$catalogue->setMetadata('bar_foo', [
            'comments' => 'Comment',
            'flags' => 'fuzzy',
            'sources' => 'src/file_1',
        ]);

        \$dumper = new PoFileDumper();

        \$this->assertStringEqualsFile(__DIR__.'/../fixtures/resources.po', \$dumper->formatCatalogue(\$catalogue, 'messages'));
    }
}
", "vendor/symfony/translation/Tests/Dumper/PoFileDumperTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Tests/Dumper/PoFileDumperTest.php");
    }
}
