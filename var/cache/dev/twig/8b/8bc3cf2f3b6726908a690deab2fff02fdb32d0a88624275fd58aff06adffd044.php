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

/* vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/CharacterReaderFactory/SimpleCharacterReaderFactoryAcceptanceTest.php */
class __TwigTemplate_71309e28e7cd74d225deb7a28d1cfacef0ed13de8fd88e813a0a81a65f9b3102 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/CharacterReaderFactory/SimpleCharacterReaderFactoryAcceptanceTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/CharacterReaderFactory/SimpleCharacterReaderFactoryAcceptanceTest.php"));

        // line 1
        echo "<?php

class Swift_CharacterReaderFactory_SimpleCharacterReaderFactoryAcceptanceTest extends \\PHPUnit\\Framework\\TestCase
{
    private \$factory;
    private \$prefix = 'Swift_CharacterReader_';

    protected function setUp()
    {
        \$this->factory = new Swift_CharacterReaderFactory_SimpleCharacterReaderFactory();
    }

    public function testCreatingUtf8Reader()
    {
        foreach (['utf8', 'utf-8', 'UTF-8', 'UTF8'] as \$utf8) {
            \$reader = \$this->factory->getReaderFor(\$utf8);
            \$this->assertInstanceOf(\$this->prefix.'Utf8Reader', \$reader);
        }
    }

    public function testCreatingIso8859XReaders()
    {
        \$charsets = [];
        foreach (range(1, 16) as \$number) {
            foreach (['iso', 'iec'] as \$body) {
                \$charsets[] = \$body.'-8859-'.\$number;
                \$charsets[] = \$body.'8859-'.\$number;
                \$charsets[] = strtoupper(\$body).'-8859-'.\$number;
                \$charsets[] = strtoupper(\$body).'8859-'.\$number;
            }
        }

        foreach (\$charsets as \$charset) {
            \$reader = \$this->factory->getReaderFor(\$charset);
            \$this->assertInstanceOf(\$this->prefix.'GenericFixedWidthReader', \$reader);
            \$this->assertEquals(1, \$reader->getInitialByteSize());
        }
    }

    public function testCreatingWindows125XReaders()
    {
        \$charsets = [];
        foreach (range(0, 8) as \$number) {
            \$charsets[] = 'windows-125'.\$number;
            \$charsets[] = 'windows125'.\$number;
            \$charsets[] = 'WINDOWS-125'.\$number;
            \$charsets[] = 'WINDOWS125'.\$number;
        }

        foreach (\$charsets as \$charset) {
            \$reader = \$this->factory->getReaderFor(\$charset);
            \$this->assertInstanceOf(\$this->prefix.'GenericFixedWidthReader', \$reader);
            \$this->assertEquals(1, \$reader->getInitialByteSize());
        }
    }

    public function testCreatingCodePageReaders()
    {
        \$charsets = [];
        foreach (range(0, 8) as \$number) {
            \$charsets[] = 'cp-125'.\$number;
            \$charsets[] = 'cp125'.\$number;
            \$charsets[] = 'CP-125'.\$number;
            \$charsets[] = 'CP125'.\$number;
        }

        foreach ([437, 737, 850, 855, 857, 858, 860,
            861, 863, 865, 866, 869, ] as \$number) {
            \$charsets[] = 'cp-'.\$number;
            \$charsets[] = 'cp'.\$number;
            \$charsets[] = 'CP-'.\$number;
            \$charsets[] = 'CP'.\$number;
        }

        foreach (\$charsets as \$charset) {
            \$reader = \$this->factory->getReaderFor(\$charset);
            \$this->assertInstanceOf(\$this->prefix.'GenericFixedWidthReader', \$reader);
            \$this->assertEquals(1, \$reader->getInitialByteSize());
        }
    }

    public function testCreatingAnsiReader()
    {
        foreach (['ansi', 'ANSI'] as \$ansi) {
            \$reader = \$this->factory->getReaderFor(\$ansi);
            \$this->assertInstanceOf(\$this->prefix.'GenericFixedWidthReader', \$reader);
            \$this->assertEquals(1, \$reader->getInitialByteSize());
        }
    }

    public function testCreatingMacintoshReader()
    {
        foreach (['macintosh', 'MACINTOSH'] as \$mac) {
            \$reader = \$this->factory->getReaderFor(\$mac);
            \$this->assertInstanceOf(\$this->prefix.'GenericFixedWidthReader', \$reader);
            \$this->assertEquals(1, \$reader->getInitialByteSize());
        }
    }

    public function testCreatingKOIReaders()
    {
        \$charsets = [];
        foreach (['7', '8-r', '8-u', '8u', '8r'] as \$end) {
            \$charsets[] = 'koi-'.\$end;
            \$charsets[] = 'koi'.\$end;
            \$charsets[] = 'KOI-'.\$end;
            \$charsets[] = 'KOI'.\$end;
        }

        foreach (\$charsets as \$charset) {
            \$reader = \$this->factory->getReaderFor(\$charset);
            \$this->assertInstanceOf(\$this->prefix.'GenericFixedWidthReader', \$reader);
            \$this->assertEquals(1, \$reader->getInitialByteSize());
        }
    }

    public function testCreatingIsciiReaders()
    {
        foreach (['iscii', 'ISCII', 'viscii', 'VISCII'] as \$charset) {
            \$reader = \$this->factory->getReaderFor(\$charset);
            \$this->assertInstanceOf(\$this->prefix.'GenericFixedWidthReader', \$reader);
            \$this->assertEquals(1, \$reader->getInitialByteSize());
        }
    }

    public function testCreatingMIKReader()
    {
        foreach (['mik', 'MIK'] as \$charset) {
            \$reader = \$this->factory->getReaderFor(\$charset);
            \$this->assertInstanceOf(\$this->prefix.'GenericFixedWidthReader', \$reader);
            \$this->assertEquals(1, \$reader->getInitialByteSize());
        }
    }

    public function testCreatingCorkReader()
    {
        foreach (['cork', 'CORK', 't1', 'T1'] as \$charset) {
            \$reader = \$this->factory->getReaderFor(\$charset);
            \$this->assertInstanceOf(\$this->prefix.'GenericFixedWidthReader', \$reader);
            \$this->assertEquals(1, \$reader->getInitialByteSize());
        }
    }

    public function testCreatingUcs2Reader()
    {
        foreach (['ucs-2', 'UCS-2', 'ucs2', 'UCS2'] as \$charset) {
            \$reader = \$this->factory->getReaderFor(\$charset);
            \$this->assertInstanceOf(\$this->prefix.'GenericFixedWidthReader', \$reader);
            \$this->assertEquals(2, \$reader->getInitialByteSize());
        }
    }

    public function testCreatingUtf16Reader()
    {
        foreach (['utf-16', 'UTF-16', 'utf16', 'UTF16'] as \$charset) {
            \$reader = \$this->factory->getReaderFor(\$charset);
            \$this->assertInstanceOf(\$this->prefix.'GenericFixedWidthReader', \$reader);
            \$this->assertEquals(2, \$reader->getInitialByteSize());
        }
    }

    public function testCreatingUcs4Reader()
    {
        foreach (['ucs-4', 'UCS-4', 'ucs4', 'UCS4'] as \$charset) {
            \$reader = \$this->factory->getReaderFor(\$charset);
            \$this->assertInstanceOf(\$this->prefix.'GenericFixedWidthReader', \$reader);
            \$this->assertEquals(4, \$reader->getInitialByteSize());
        }
    }

    public function testCreatingUtf32Reader()
    {
        foreach (['utf-32', 'UTF-32', 'utf32', 'UTF32'] as \$charset) {
            \$reader = \$this->factory->getReaderFor(\$charset);
            \$this->assertInstanceOf(\$this->prefix.'GenericFixedWidthReader', \$reader);
            \$this->assertEquals(4, \$reader->getInitialByteSize());
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/CharacterReaderFactory/SimpleCharacterReaderFactoryAcceptanceTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

class Swift_CharacterReaderFactory_SimpleCharacterReaderFactoryAcceptanceTest extends \\PHPUnit\\Framework\\TestCase
{
    private \$factory;
    private \$prefix = 'Swift_CharacterReader_';

    protected function setUp()
    {
        \$this->factory = new Swift_CharacterReaderFactory_SimpleCharacterReaderFactory();
    }

    public function testCreatingUtf8Reader()
    {
        foreach (['utf8', 'utf-8', 'UTF-8', 'UTF8'] as \$utf8) {
            \$reader = \$this->factory->getReaderFor(\$utf8);
            \$this->assertInstanceOf(\$this->prefix.'Utf8Reader', \$reader);
        }
    }

    public function testCreatingIso8859XReaders()
    {
        \$charsets = [];
        foreach (range(1, 16) as \$number) {
            foreach (['iso', 'iec'] as \$body) {
                \$charsets[] = \$body.'-8859-'.\$number;
                \$charsets[] = \$body.'8859-'.\$number;
                \$charsets[] = strtoupper(\$body).'-8859-'.\$number;
                \$charsets[] = strtoupper(\$body).'8859-'.\$number;
            }
        }

        foreach (\$charsets as \$charset) {
            \$reader = \$this->factory->getReaderFor(\$charset);
            \$this->assertInstanceOf(\$this->prefix.'GenericFixedWidthReader', \$reader);
            \$this->assertEquals(1, \$reader->getInitialByteSize());
        }
    }

    public function testCreatingWindows125XReaders()
    {
        \$charsets = [];
        foreach (range(0, 8) as \$number) {
            \$charsets[] = 'windows-125'.\$number;
            \$charsets[] = 'windows125'.\$number;
            \$charsets[] = 'WINDOWS-125'.\$number;
            \$charsets[] = 'WINDOWS125'.\$number;
        }

        foreach (\$charsets as \$charset) {
            \$reader = \$this->factory->getReaderFor(\$charset);
            \$this->assertInstanceOf(\$this->prefix.'GenericFixedWidthReader', \$reader);
            \$this->assertEquals(1, \$reader->getInitialByteSize());
        }
    }

    public function testCreatingCodePageReaders()
    {
        \$charsets = [];
        foreach (range(0, 8) as \$number) {
            \$charsets[] = 'cp-125'.\$number;
            \$charsets[] = 'cp125'.\$number;
            \$charsets[] = 'CP-125'.\$number;
            \$charsets[] = 'CP125'.\$number;
        }

        foreach ([437, 737, 850, 855, 857, 858, 860,
            861, 863, 865, 866, 869, ] as \$number) {
            \$charsets[] = 'cp-'.\$number;
            \$charsets[] = 'cp'.\$number;
            \$charsets[] = 'CP-'.\$number;
            \$charsets[] = 'CP'.\$number;
        }

        foreach (\$charsets as \$charset) {
            \$reader = \$this->factory->getReaderFor(\$charset);
            \$this->assertInstanceOf(\$this->prefix.'GenericFixedWidthReader', \$reader);
            \$this->assertEquals(1, \$reader->getInitialByteSize());
        }
    }

    public function testCreatingAnsiReader()
    {
        foreach (['ansi', 'ANSI'] as \$ansi) {
            \$reader = \$this->factory->getReaderFor(\$ansi);
            \$this->assertInstanceOf(\$this->prefix.'GenericFixedWidthReader', \$reader);
            \$this->assertEquals(1, \$reader->getInitialByteSize());
        }
    }

    public function testCreatingMacintoshReader()
    {
        foreach (['macintosh', 'MACINTOSH'] as \$mac) {
            \$reader = \$this->factory->getReaderFor(\$mac);
            \$this->assertInstanceOf(\$this->prefix.'GenericFixedWidthReader', \$reader);
            \$this->assertEquals(1, \$reader->getInitialByteSize());
        }
    }

    public function testCreatingKOIReaders()
    {
        \$charsets = [];
        foreach (['7', '8-r', '8-u', '8u', '8r'] as \$end) {
            \$charsets[] = 'koi-'.\$end;
            \$charsets[] = 'koi'.\$end;
            \$charsets[] = 'KOI-'.\$end;
            \$charsets[] = 'KOI'.\$end;
        }

        foreach (\$charsets as \$charset) {
            \$reader = \$this->factory->getReaderFor(\$charset);
            \$this->assertInstanceOf(\$this->prefix.'GenericFixedWidthReader', \$reader);
            \$this->assertEquals(1, \$reader->getInitialByteSize());
        }
    }

    public function testCreatingIsciiReaders()
    {
        foreach (['iscii', 'ISCII', 'viscii', 'VISCII'] as \$charset) {
            \$reader = \$this->factory->getReaderFor(\$charset);
            \$this->assertInstanceOf(\$this->prefix.'GenericFixedWidthReader', \$reader);
            \$this->assertEquals(1, \$reader->getInitialByteSize());
        }
    }

    public function testCreatingMIKReader()
    {
        foreach (['mik', 'MIK'] as \$charset) {
            \$reader = \$this->factory->getReaderFor(\$charset);
            \$this->assertInstanceOf(\$this->prefix.'GenericFixedWidthReader', \$reader);
            \$this->assertEquals(1, \$reader->getInitialByteSize());
        }
    }

    public function testCreatingCorkReader()
    {
        foreach (['cork', 'CORK', 't1', 'T1'] as \$charset) {
            \$reader = \$this->factory->getReaderFor(\$charset);
            \$this->assertInstanceOf(\$this->prefix.'GenericFixedWidthReader', \$reader);
            \$this->assertEquals(1, \$reader->getInitialByteSize());
        }
    }

    public function testCreatingUcs2Reader()
    {
        foreach (['ucs-2', 'UCS-2', 'ucs2', 'UCS2'] as \$charset) {
            \$reader = \$this->factory->getReaderFor(\$charset);
            \$this->assertInstanceOf(\$this->prefix.'GenericFixedWidthReader', \$reader);
            \$this->assertEquals(2, \$reader->getInitialByteSize());
        }
    }

    public function testCreatingUtf16Reader()
    {
        foreach (['utf-16', 'UTF-16', 'utf16', 'UTF16'] as \$charset) {
            \$reader = \$this->factory->getReaderFor(\$charset);
            \$this->assertInstanceOf(\$this->prefix.'GenericFixedWidthReader', \$reader);
            \$this->assertEquals(2, \$reader->getInitialByteSize());
        }
    }

    public function testCreatingUcs4Reader()
    {
        foreach (['ucs-4', 'UCS-4', 'ucs4', 'UCS4'] as \$charset) {
            \$reader = \$this->factory->getReaderFor(\$charset);
            \$this->assertInstanceOf(\$this->prefix.'GenericFixedWidthReader', \$reader);
            \$this->assertEquals(4, \$reader->getInitialByteSize());
        }
    }

    public function testCreatingUtf32Reader()
    {
        foreach (['utf-32', 'UTF-32', 'utf32', 'UTF32'] as \$charset) {
            \$reader = \$this->factory->getReaderFor(\$charset);
            \$this->assertInstanceOf(\$this->prefix.'GenericFixedWidthReader', \$reader);
            \$this->assertEquals(4, \$reader->getInitialByteSize());
        }
    }
}
", "vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/CharacterReaderFactory/SimpleCharacterReaderFactoryAcceptanceTest.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/acceptance/Swift/CharacterReaderFactory/SimpleCharacterReaderFactoryAcceptanceTest.php");
    }
}
