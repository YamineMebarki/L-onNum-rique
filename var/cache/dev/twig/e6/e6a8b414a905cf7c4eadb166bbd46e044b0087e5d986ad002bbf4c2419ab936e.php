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

/* vendor/symfony/translation/Tests/Writer/TranslationWriterTest.php */
class __TwigTemplate_dd6c17aa97407a323c04acb68e6ebc7094e0b728bd4b8a4c9762d9f5c6220bcc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/Writer/TranslationWriterTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/Writer/TranslationWriterTest.php"));

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

namespace Symfony\\Component\\Translation\\Tests\\Writer;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Translation\\Dumper\\DumperInterface;
use Symfony\\Component\\Translation\\MessageCatalogue;
use Symfony\\Component\\Translation\\Writer\\TranslationWriter;

class TranslationWriterTest extends TestCase
{
    public function testWrite()
    {
        \$dumper = \$this->getMockBuilder('Symfony\\Component\\Translation\\Dumper\\DumperInterface')->getMock();
        \$dumper
            ->expects(\$this->once())
            ->method('dump');

        \$writer = new TranslationWriter();
        \$writer->addDumper('test', \$dumper);
        \$writer->write(new MessageCatalogue('en'), 'test');
    }

    /**
     * @group legacy
     */
    public function testDisableBackup()
    {
        \$nonBackupDumper = new NonBackupDumper();
        \$backupDumper = new BackupDumper();

        \$writer = new TranslationWriter();
        \$writer->addDumper('non_backup', \$nonBackupDumper);
        \$writer->addDumper('backup', \$backupDumper);
        \$writer->disableBackup();

        \$this->assertFalse(\$backupDumper->backup, 'backup can be disabled if setBackup() method does exist');
    }
}

class NonBackupDumper implements DumperInterface
{
    public function dump(MessageCatalogue \$messages, \$options = [])
    {
    }
}

class BackupDumper implements DumperInterface
{
    public \$backup = true;

    public function dump(MessageCatalogue \$messages, \$options = [])
    {
    }

    public function setBackup(\$backup)
    {
        \$this->backup = \$backup;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/Tests/Writer/TranslationWriterTest.php";
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

namespace Symfony\\Component\\Translation\\Tests\\Writer;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Translation\\Dumper\\DumperInterface;
use Symfony\\Component\\Translation\\MessageCatalogue;
use Symfony\\Component\\Translation\\Writer\\TranslationWriter;

class TranslationWriterTest extends TestCase
{
    public function testWrite()
    {
        \$dumper = \$this->getMockBuilder('Symfony\\Component\\Translation\\Dumper\\DumperInterface')->getMock();
        \$dumper
            ->expects(\$this->once())
            ->method('dump');

        \$writer = new TranslationWriter();
        \$writer->addDumper('test', \$dumper);
        \$writer->write(new MessageCatalogue('en'), 'test');
    }

    /**
     * @group legacy
     */
    public function testDisableBackup()
    {
        \$nonBackupDumper = new NonBackupDumper();
        \$backupDumper = new BackupDumper();

        \$writer = new TranslationWriter();
        \$writer->addDumper('non_backup', \$nonBackupDumper);
        \$writer->addDumper('backup', \$backupDumper);
        \$writer->disableBackup();

        \$this->assertFalse(\$backupDumper->backup, 'backup can be disabled if setBackup() method does exist');
    }
}

class NonBackupDumper implements DumperInterface
{
    public function dump(MessageCatalogue \$messages, \$options = [])
    {
    }
}

class BackupDumper implements DumperInterface
{
    public \$backup = true;

    public function dump(MessageCatalogue \$messages, \$options = [])
    {
    }

    public function setBackup(\$backup)
    {
        \$this->backup = \$backup;
    }
}
", "vendor/symfony/translation/Tests/Writer/TranslationWriterTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Tests/Writer/TranslationWriterTest.php");
    }
}
