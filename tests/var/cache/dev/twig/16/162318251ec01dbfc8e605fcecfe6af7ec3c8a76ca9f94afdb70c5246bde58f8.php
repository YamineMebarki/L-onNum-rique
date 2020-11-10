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

/* vendor/symfony/translation/Tests/Dumper/FileDumperTest.php */
class __TwigTemplate_a261c960c61b88f2da3bc3bf742605a97d5d05e4701ba531a5a3a3453c0e00ae extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/Dumper/FileDumperTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/Dumper/FileDumperTest.php"));

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
use Symfony\\Component\\Translation\\Dumper\\FileDumper;
use Symfony\\Component\\Translation\\MessageCatalogue;

class FileDumperTest extends TestCase
{
    public function testDump()
    {
        \$tempDir = sys_get_temp_dir();

        \$catalogue = new MessageCatalogue('en');
        \$catalogue->add(['foo' => 'bar']);

        \$dumper = new ConcreteFileDumper();
        \$dumper->dump(\$catalogue, ['path' => \$tempDir]);

        \$this->assertFileExists(\$tempDir.'/messages.en.concrete');

        @unlink(\$tempDir.'/messages.en.concrete');
    }

    public function testDumpIntl()
    {
        \$tempDir = sys_get_temp_dir();

        \$catalogue = new MessageCatalogue('en');
        \$catalogue->add(['foo' => 'bar'], 'd1');
        \$catalogue->add(['bar' => 'foo'], 'd1+intl-icu');
        \$catalogue->add(['bar' => 'foo'], 'd2+intl-icu');

        \$dumper = new ConcreteFileDumper();
        @unlink(\$tempDir.'/d2.en.concrete');
        \$dumper->dump(\$catalogue, ['path' => \$tempDir]);

        \$this->assertStringEqualsFile(\$tempDir.'/d1.en.concrete', 'foo=bar');
        @unlink(\$tempDir.'/d1.en.concrete');

        \$this->assertStringEqualsFile(\$tempDir.'/d1+intl-icu.en.concrete', 'bar=foo');
        @unlink(\$tempDir.'/d1+intl-icu.en.concrete');

        \$this->assertFileNotExists(\$tempDir.'/d2.en.concrete');
        \$this->assertStringEqualsFile(\$tempDir.'/d2+intl-icu.en.concrete', 'bar=foo');
        @unlink(\$tempDir.'/d2+intl-icu.en.concrete');
    }

    public function testDumpCreatesNestedDirectoriesAndFile()
    {
        \$tempDir = sys_get_temp_dir();
        \$translationsDir = \$tempDir.'/test/translations';
        \$file = \$translationsDir.'/messages.en.concrete';

        \$catalogue = new MessageCatalogue('en');
        \$catalogue->add(['foo' => 'bar']);

        \$dumper = new ConcreteFileDumper();
        \$dumper->setRelativePathTemplate('test/translations/%domain%.%locale%.%extension%');
        \$dumper->dump(\$catalogue, ['path' => \$tempDir]);

        \$this->assertFileExists(\$file);

        @unlink(\$file);
        @rmdir(\$translationsDir);
    }
}

class ConcreteFileDumper extends FileDumper
{
    public function formatCatalogue(MessageCatalogue \$messages, \$domain, array \$options = [])
    {
        return http_build_query(\$messages->all(\$domain), '', '&');
    }

    protected function getExtension()
    {
        return 'concrete';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/Tests/Dumper/FileDumperTest.php";
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
use Symfony\\Component\\Translation\\Dumper\\FileDumper;
use Symfony\\Component\\Translation\\MessageCatalogue;

class FileDumperTest extends TestCase
{
    public function testDump()
    {
        \$tempDir = sys_get_temp_dir();

        \$catalogue = new MessageCatalogue('en');
        \$catalogue->add(['foo' => 'bar']);

        \$dumper = new ConcreteFileDumper();
        \$dumper->dump(\$catalogue, ['path' => \$tempDir]);

        \$this->assertFileExists(\$tempDir.'/messages.en.concrete');

        @unlink(\$tempDir.'/messages.en.concrete');
    }

    public function testDumpIntl()
    {
        \$tempDir = sys_get_temp_dir();

        \$catalogue = new MessageCatalogue('en');
        \$catalogue->add(['foo' => 'bar'], 'd1');
        \$catalogue->add(['bar' => 'foo'], 'd1+intl-icu');
        \$catalogue->add(['bar' => 'foo'], 'd2+intl-icu');

        \$dumper = new ConcreteFileDumper();
        @unlink(\$tempDir.'/d2.en.concrete');
        \$dumper->dump(\$catalogue, ['path' => \$tempDir]);

        \$this->assertStringEqualsFile(\$tempDir.'/d1.en.concrete', 'foo=bar');
        @unlink(\$tempDir.'/d1.en.concrete');

        \$this->assertStringEqualsFile(\$tempDir.'/d1+intl-icu.en.concrete', 'bar=foo');
        @unlink(\$tempDir.'/d1+intl-icu.en.concrete');

        \$this->assertFileNotExists(\$tempDir.'/d2.en.concrete');
        \$this->assertStringEqualsFile(\$tempDir.'/d2+intl-icu.en.concrete', 'bar=foo');
        @unlink(\$tempDir.'/d2+intl-icu.en.concrete');
    }

    public function testDumpCreatesNestedDirectoriesAndFile()
    {
        \$tempDir = sys_get_temp_dir();
        \$translationsDir = \$tempDir.'/test/translations';
        \$file = \$translationsDir.'/messages.en.concrete';

        \$catalogue = new MessageCatalogue('en');
        \$catalogue->add(['foo' => 'bar']);

        \$dumper = new ConcreteFileDumper();
        \$dumper->setRelativePathTemplate('test/translations/%domain%.%locale%.%extension%');
        \$dumper->dump(\$catalogue, ['path' => \$tempDir]);

        \$this->assertFileExists(\$file);

        @unlink(\$file);
        @rmdir(\$translationsDir);
    }
}

class ConcreteFileDumper extends FileDumper
{
    public function formatCatalogue(MessageCatalogue \$messages, \$domain, array \$options = [])
    {
        return http_build_query(\$messages->all(\$domain), '', '&');
    }

    protected function getExtension()
    {
        return 'concrete';
    }
}
", "vendor/symfony/translation/Tests/Dumper/FileDumperTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Tests/Dumper/FileDumperTest.php");
    }
}
