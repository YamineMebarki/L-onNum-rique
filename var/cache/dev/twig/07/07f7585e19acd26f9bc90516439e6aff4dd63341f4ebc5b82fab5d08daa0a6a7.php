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

/* vendor/symfony/translation/Tests/Dumper/XliffFileDumperTest.php */
class __TwigTemplate_14dc1d14c6606ec535b2cf866740b8f488928e6e6fe6e6a974e8001e960b4685 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/Dumper/XliffFileDumperTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/Dumper/XliffFileDumperTest.php"));

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
use Symfony\\Component\\Translation\\Dumper\\XliffFileDumper;
use Symfony\\Component\\Translation\\MessageCatalogue;

class XliffFileDumperTest extends TestCase
{
    public function testFormatCatalogue()
    {
        \$catalogue = new MessageCatalogue('en_US');
        \$catalogue->add([
            'foo' => 'bar',
            'key' => '',
            'key.with.cdata' => '<source> & <target>',
        ]);
        \$catalogue->setMetadata('foo', ['notes' => [['priority' => 1, 'from' => 'bar', 'content' => 'baz']]]);
        \$catalogue->setMetadata('key', ['notes' => [['content' => 'baz'], ['content' => 'qux']]]);

        \$dumper = new XliffFileDumper();

        \$this->assertStringEqualsFile(
            __DIR__.'/../fixtures/resources-clean.xlf',
            \$dumper->formatCatalogue(\$catalogue, 'messages', ['default_locale' => 'fr_FR'])
        );
    }

    public function testFormatCatalogueXliff2()
    {
        \$catalogue = new MessageCatalogue('en_US');
        \$catalogue->add([
            'foo' => 'bar',
            'key' => '',
            'key.with.cdata' => '<source> & <target>',
        ]);
        \$catalogue->setMetadata('key', ['target-attributes' => ['order' => 1]]);

        \$dumper = new XliffFileDumper();

        \$this->assertStringEqualsFile(
            __DIR__.'/../fixtures/resources-2.0-clean.xlf',
            \$dumper->formatCatalogue(\$catalogue, 'messages', ['default_locale' => 'fr_FR', 'xliff_version' => '2.0'])
        );
    }

    public function testFormatIcuCatalogueXliff2()
    {
        \$catalogue = new MessageCatalogue('en_US');
        \$catalogue->add([
            'foo' => 'bar',
        ], 'messages'.MessageCatalogue::INTL_DOMAIN_SUFFIX);

        \$dumper = new XliffFileDumper();

        \$this->assertStringEqualsFile(
            __DIR__.'/../fixtures/resources-2.0+intl-icu.xlf',
            \$dumper->formatCatalogue(\$catalogue, 'messages'.MessageCatalogue::INTL_DOMAIN_SUFFIX, ['default_locale' => 'fr_FR', 'xliff_version' => '2.0'])
        );
    }

    public function testFormatCatalogueWithCustomToolInfo()
    {
        \$options = [
            'default_locale' => 'en_US',
            'tool_info' => ['tool-id' => 'foo', 'tool-name' => 'foo', 'tool-version' => '0.0', 'tool-company' => 'Foo'],
        ];

        \$catalogue = new MessageCatalogue('en_US');
        \$catalogue->add(['foo' => 'bar']);

        \$dumper = new XliffFileDumper();

        \$this->assertStringEqualsFile(
            __DIR__.'/../fixtures/resources-tool-info.xlf',
            \$dumper->formatCatalogue(\$catalogue, 'messages', \$options)
        );
    }

    public function testFormatCatalogueWithTargetAttributesMetadata()
    {
        \$catalogue = new MessageCatalogue('en_US');
        \$catalogue->add([
            'foo' => 'bar',
        ]);
        \$catalogue->setMetadata('foo', ['target-attributes' => ['state' => 'needs-translation']]);

        \$dumper = new XliffFileDumper();

        \$this->assertStringEqualsFile(
            __DIR__.'/../fixtures/resources-target-attributes.xlf',
            \$dumper->formatCatalogue(\$catalogue, 'messages', ['default_locale' => 'fr_FR'])
        );
    }

    public function testFormatCatalogueWithNotesMetadata()
    {
        \$catalogue = new MessageCatalogue('en_US');
        \$catalogue->add([
            'foo' => 'bar',
            'baz' => 'biz',
        ]);
        \$catalogue->setMetadata('foo', ['notes' => [
            ['category' => 'state', 'content' => 'new'],
            ['category' => 'approved', 'content' => 'true'],
            ['category' => 'section', 'content' => 'user login', 'priority' => '1'],
        ]]);
        \$catalogue->setMetadata('baz', ['notes' => [
            ['id' => 'x', 'content' => 'x_content'],
            ['appliesTo' => 'target', 'category' => 'quality', 'content' => 'Fuzzy'],
        ]]);

        \$dumper = new XliffFileDumper();

        \$this->assertStringEqualsFile(
            __DIR__.'/../fixtures/resources-notes-meta.xlf',
            \$dumper->formatCatalogue(\$catalogue, 'messages', ['default_locale' => 'fr_FR', 'xliff_version' => '2.0'])
        );
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/Tests/Dumper/XliffFileDumperTest.php";
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
use Symfony\\Component\\Translation\\Dumper\\XliffFileDumper;
use Symfony\\Component\\Translation\\MessageCatalogue;

class XliffFileDumperTest extends TestCase
{
    public function testFormatCatalogue()
    {
        \$catalogue = new MessageCatalogue('en_US');
        \$catalogue->add([
            'foo' => 'bar',
            'key' => '',
            'key.with.cdata' => '<source> & <target>',
        ]);
        \$catalogue->setMetadata('foo', ['notes' => [['priority' => 1, 'from' => 'bar', 'content' => 'baz']]]);
        \$catalogue->setMetadata('key', ['notes' => [['content' => 'baz'], ['content' => 'qux']]]);

        \$dumper = new XliffFileDumper();

        \$this->assertStringEqualsFile(
            __DIR__.'/../fixtures/resources-clean.xlf',
            \$dumper->formatCatalogue(\$catalogue, 'messages', ['default_locale' => 'fr_FR'])
        );
    }

    public function testFormatCatalogueXliff2()
    {
        \$catalogue = new MessageCatalogue('en_US');
        \$catalogue->add([
            'foo' => 'bar',
            'key' => '',
            'key.with.cdata' => '<source> & <target>',
        ]);
        \$catalogue->setMetadata('key', ['target-attributes' => ['order' => 1]]);

        \$dumper = new XliffFileDumper();

        \$this->assertStringEqualsFile(
            __DIR__.'/../fixtures/resources-2.0-clean.xlf',
            \$dumper->formatCatalogue(\$catalogue, 'messages', ['default_locale' => 'fr_FR', 'xliff_version' => '2.0'])
        );
    }

    public function testFormatIcuCatalogueXliff2()
    {
        \$catalogue = new MessageCatalogue('en_US');
        \$catalogue->add([
            'foo' => 'bar',
        ], 'messages'.MessageCatalogue::INTL_DOMAIN_SUFFIX);

        \$dumper = new XliffFileDumper();

        \$this->assertStringEqualsFile(
            __DIR__.'/../fixtures/resources-2.0+intl-icu.xlf',
            \$dumper->formatCatalogue(\$catalogue, 'messages'.MessageCatalogue::INTL_DOMAIN_SUFFIX, ['default_locale' => 'fr_FR', 'xliff_version' => '2.0'])
        );
    }

    public function testFormatCatalogueWithCustomToolInfo()
    {
        \$options = [
            'default_locale' => 'en_US',
            'tool_info' => ['tool-id' => 'foo', 'tool-name' => 'foo', 'tool-version' => '0.0', 'tool-company' => 'Foo'],
        ];

        \$catalogue = new MessageCatalogue('en_US');
        \$catalogue->add(['foo' => 'bar']);

        \$dumper = new XliffFileDumper();

        \$this->assertStringEqualsFile(
            __DIR__.'/../fixtures/resources-tool-info.xlf',
            \$dumper->formatCatalogue(\$catalogue, 'messages', \$options)
        );
    }

    public function testFormatCatalogueWithTargetAttributesMetadata()
    {
        \$catalogue = new MessageCatalogue('en_US');
        \$catalogue->add([
            'foo' => 'bar',
        ]);
        \$catalogue->setMetadata('foo', ['target-attributes' => ['state' => 'needs-translation']]);

        \$dumper = new XliffFileDumper();

        \$this->assertStringEqualsFile(
            __DIR__.'/../fixtures/resources-target-attributes.xlf',
            \$dumper->formatCatalogue(\$catalogue, 'messages', ['default_locale' => 'fr_FR'])
        );
    }

    public function testFormatCatalogueWithNotesMetadata()
    {
        \$catalogue = new MessageCatalogue('en_US');
        \$catalogue->add([
            'foo' => 'bar',
            'baz' => 'biz',
        ]);
        \$catalogue->setMetadata('foo', ['notes' => [
            ['category' => 'state', 'content' => 'new'],
            ['category' => 'approved', 'content' => 'true'],
            ['category' => 'section', 'content' => 'user login', 'priority' => '1'],
        ]]);
        \$catalogue->setMetadata('baz', ['notes' => [
            ['id' => 'x', 'content' => 'x_content'],
            ['appliesTo' => 'target', 'category' => 'quality', 'content' => 'Fuzzy'],
        ]]);

        \$dumper = new XliffFileDumper();

        \$this->assertStringEqualsFile(
            __DIR__.'/../fixtures/resources-notes-meta.xlf',
            \$dumper->formatCatalogue(\$catalogue, 'messages', ['default_locale' => 'fr_FR', 'xliff_version' => '2.0'])
        );
    }
}
", "vendor/symfony/translation/Tests/Dumper/XliffFileDumperTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Tests/Dumper/XliffFileDumperTest.php");
    }
}
