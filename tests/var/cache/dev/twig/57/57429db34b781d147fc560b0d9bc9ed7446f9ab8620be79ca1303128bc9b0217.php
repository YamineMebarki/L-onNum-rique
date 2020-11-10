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

/* vendor/symfony/var-dumper/Tests/Caster/XmlReaderCasterTest.php */
class __TwigTemplate_baddbd8cbeee2b9398cf18c0a458510b0bea1b96f1f0ffe1051ff6aafc2773cd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Tests/Caster/XmlReaderCasterTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Tests/Caster/XmlReaderCasterTest.php"));

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

namespace Symfony\\Component\\VarDumper\\Tests\\Caster;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\VarDumper\\Test\\VarDumperTestTrait;

/**
 * @author Baptiste Clavié <clavie.b@gmail.com>
 */
class XmlReaderCasterTest extends TestCase
{
    use VarDumperTestTrait;

    /** @var \\XmlReader */
    private \$reader;

    protected function setUp(): void
    {
        \$this->reader = new \\XmlReader();
        \$this->reader->open(__DIR__.'/../Fixtures/xml_reader.xml');
    }

    protected function tearDown(): void
    {
        \$this->reader->close();
    }

    public function testParserProperty()
    {
        \$this->reader->setParserProperty(\\XMLReader::SUBST_ENTITIES, true);

        \$expectedDump = <<<'EODUMP'
XMLReader {
  +nodeType: NONE
  parserProperties: {
    SUBST_ENTITIES: true
     …3
  }
   …12
}
EODUMP;

        \$this->assertDumpMatchesFormat(\$expectedDump, \$this->reader);
    }

    /**
     * @dataProvider provideNodes
     */
    public function testNodes(\$seek, \$expectedDump)
    {
        while (\$seek--) {
            \$this->reader->read();
        }
        \$this->assertDumpMatchesFormat(\$expectedDump, \$this->reader);
    }

    public function provideNodes()
    {
        return [
            [0, <<<'EODUMP'
XMLReader {
  +nodeType: NONE
   …13
}
EODUMP
            ],
            [1, <<<'EODUMP'
XMLReader {
  +localName: \"foo\"
  +nodeType: ELEMENT
  +baseURI: \"%sxml_reader.xml\"
   …11
}
EODUMP
            ],
            [2, <<<'EODUMP'
XMLReader {
  +localName: \"#text\"
  +nodeType: SIGNIFICANT_WHITESPACE
  +depth: 1
  +value: \"\"\"
    \\n
        
    \"\"\"
  +baseURI: \"%sxml_reader.xml\"
   …9
}
EODUMP
            ],
            [3, <<<'EODUMP'
XMLReader {
  +localName: \"bar\"
  +nodeType: ELEMENT
  +depth: 1
  +baseURI: \"%sxml_reader.xml\"
   …10
}
EODUMP
            ],
            [4, <<<'EODUMP'
XMLReader {
  +localName: \"bar\"
  +nodeType: END_ELEMENT
  +depth: 1
  +baseURI: \"%sxml_reader.xml\"
   …10
}
EODUMP
            ],
            [6, <<<'EODUMP'
XMLReader {
  +localName: \"bar\"
  +nodeType: ELEMENT
  +depth: 1
  +isEmptyElement: true
  +baseURI: \"%sxml_reader.xml\"
   …9
}
EODUMP
            ],
            [9, <<<'EODUMP'
XMLReader {
  +localName: \"#text\"
  +nodeType: TEXT
  +depth: 2
  +value: \"With text\"
  +baseURI: \"%sxml_reader.xml\"
   …9
}
EODUMP
            ],
            [12, <<<'EODUMP'
XMLReader {
  +localName: \"bar\"
  +nodeType: ELEMENT
  +depth: 1
  +attributeCount: 2
  +baseURI: \"%sxml_reader.xml\"
   …9
}
EODUMP
            ],
            [13, <<<'EODUMP'
XMLReader {
  +localName: \"bar\"
  +nodeType: END_ELEMENT
  +depth: 1
  +baseURI: \"%sxml_reader.xml\"
   …10
}
EODUMP
            ],
            [15, <<<'EODUMP'
XMLReader {
  +localName: \"bar\"
  +nodeType: ELEMENT
  +depth: 1
  +attributeCount: 1
  +baseURI: \"%sxml_reader.xml\"
   …9
}
EODUMP
            ],
            [16, <<<'EODUMP'
XMLReader {
  +localName: \"#text\"
  +nodeType: SIGNIFICANT_WHITESPACE
  +depth: 2
  +value: \"\"\"
    \\n
            
    \"\"\"
  +baseURI: \"%sxml_reader.xml\"
   …9
}
EODUMP
            ],
            [17, <<<'EODUMP'
XMLReader {
  +localName: \"baz\"
  +prefix: \"baz\"
  +nodeType: ELEMENT
  +depth: 2
  +namespaceURI: \"http://symfony.com\"
  +baseURI: \"%sxml_reader.xml\"
   …8
}
EODUMP
            ],
            [18, <<<'EODUMP'
XMLReader {
  +localName: \"baz\"
  +prefix: \"baz\"
  +nodeType: END_ELEMENT
  +depth: 2
  +namespaceURI: \"http://symfony.com\"
  +baseURI: \"%sxml_reader.xml\"
   …8
}
EODUMP
            ],
            [19, <<<'EODUMP'
XMLReader {
  +localName: \"#text\"
  +nodeType: SIGNIFICANT_WHITESPACE
  +depth: 2
  +value: \"\"\"
    \\n
        
    \"\"\"
  +baseURI: \"%sxml_reader.xml\"
   …9
}
EODUMP
            ],
            [21, <<<'EODUMP'
XMLReader {
  +localName: \"#text\"
  +nodeType: SIGNIFICANT_WHITESPACE
  +depth: 1
  +value: \"\\n\"
  +baseURI: \"%sxml_reader.xml\"
   …9
}
EODUMP
            ],
            [22, <<<'EODUMP'
XMLReader {
  +localName: \"foo\"
  +nodeType: END_ELEMENT
  +baseURI: \"%sxml_reader.xml\"
   …11
}
EODUMP
            ],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/var-dumper/Tests/Caster/XmlReaderCasterTest.php";
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

namespace Symfony\\Component\\VarDumper\\Tests\\Caster;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\VarDumper\\Test\\VarDumperTestTrait;

/**
 * @author Baptiste Clavié <clavie.b@gmail.com>
 */
class XmlReaderCasterTest extends TestCase
{
    use VarDumperTestTrait;

    /** @var \\XmlReader */
    private \$reader;

    protected function setUp(): void
    {
        \$this->reader = new \\XmlReader();
        \$this->reader->open(__DIR__.'/../Fixtures/xml_reader.xml');
    }

    protected function tearDown(): void
    {
        \$this->reader->close();
    }

    public function testParserProperty()
    {
        \$this->reader->setParserProperty(\\XMLReader::SUBST_ENTITIES, true);

        \$expectedDump = <<<'EODUMP'
XMLReader {
  +nodeType: NONE
  parserProperties: {
    SUBST_ENTITIES: true
     …3
  }
   …12
}
EODUMP;

        \$this->assertDumpMatchesFormat(\$expectedDump, \$this->reader);
    }

    /**
     * @dataProvider provideNodes
     */
    public function testNodes(\$seek, \$expectedDump)
    {
        while (\$seek--) {
            \$this->reader->read();
        }
        \$this->assertDumpMatchesFormat(\$expectedDump, \$this->reader);
    }

    public function provideNodes()
    {
        return [
            [0, <<<'EODUMP'
XMLReader {
  +nodeType: NONE
   …13
}
EODUMP
            ],
            [1, <<<'EODUMP'
XMLReader {
  +localName: \"foo\"
  +nodeType: ELEMENT
  +baseURI: \"%sxml_reader.xml\"
   …11
}
EODUMP
            ],
            [2, <<<'EODUMP'
XMLReader {
  +localName: \"#text\"
  +nodeType: SIGNIFICANT_WHITESPACE
  +depth: 1
  +value: \"\"\"
    \\n
        
    \"\"\"
  +baseURI: \"%sxml_reader.xml\"
   …9
}
EODUMP
            ],
            [3, <<<'EODUMP'
XMLReader {
  +localName: \"bar\"
  +nodeType: ELEMENT
  +depth: 1
  +baseURI: \"%sxml_reader.xml\"
   …10
}
EODUMP
            ],
            [4, <<<'EODUMP'
XMLReader {
  +localName: \"bar\"
  +nodeType: END_ELEMENT
  +depth: 1
  +baseURI: \"%sxml_reader.xml\"
   …10
}
EODUMP
            ],
            [6, <<<'EODUMP'
XMLReader {
  +localName: \"bar\"
  +nodeType: ELEMENT
  +depth: 1
  +isEmptyElement: true
  +baseURI: \"%sxml_reader.xml\"
   …9
}
EODUMP
            ],
            [9, <<<'EODUMP'
XMLReader {
  +localName: \"#text\"
  +nodeType: TEXT
  +depth: 2
  +value: \"With text\"
  +baseURI: \"%sxml_reader.xml\"
   …9
}
EODUMP
            ],
            [12, <<<'EODUMP'
XMLReader {
  +localName: \"bar\"
  +nodeType: ELEMENT
  +depth: 1
  +attributeCount: 2
  +baseURI: \"%sxml_reader.xml\"
   …9
}
EODUMP
            ],
            [13, <<<'EODUMP'
XMLReader {
  +localName: \"bar\"
  +nodeType: END_ELEMENT
  +depth: 1
  +baseURI: \"%sxml_reader.xml\"
   …10
}
EODUMP
            ],
            [15, <<<'EODUMP'
XMLReader {
  +localName: \"bar\"
  +nodeType: ELEMENT
  +depth: 1
  +attributeCount: 1
  +baseURI: \"%sxml_reader.xml\"
   …9
}
EODUMP
            ],
            [16, <<<'EODUMP'
XMLReader {
  +localName: \"#text\"
  +nodeType: SIGNIFICANT_WHITESPACE
  +depth: 2
  +value: \"\"\"
    \\n
            
    \"\"\"
  +baseURI: \"%sxml_reader.xml\"
   …9
}
EODUMP
            ],
            [17, <<<'EODUMP'
XMLReader {
  +localName: \"baz\"
  +prefix: \"baz\"
  +nodeType: ELEMENT
  +depth: 2
  +namespaceURI: \"http://symfony.com\"
  +baseURI: \"%sxml_reader.xml\"
   …8
}
EODUMP
            ],
            [18, <<<'EODUMP'
XMLReader {
  +localName: \"baz\"
  +prefix: \"baz\"
  +nodeType: END_ELEMENT
  +depth: 2
  +namespaceURI: \"http://symfony.com\"
  +baseURI: \"%sxml_reader.xml\"
   …8
}
EODUMP
            ],
            [19, <<<'EODUMP'
XMLReader {
  +localName: \"#text\"
  +nodeType: SIGNIFICANT_WHITESPACE
  +depth: 2
  +value: \"\"\"
    \\n
        
    \"\"\"
  +baseURI: \"%sxml_reader.xml\"
   …9
}
EODUMP
            ],
            [21, <<<'EODUMP'
XMLReader {
  +localName: \"#text\"
  +nodeType: SIGNIFICANT_WHITESPACE
  +depth: 1
  +value: \"\\n\"
  +baseURI: \"%sxml_reader.xml\"
   …9
}
EODUMP
            ],
            [22, <<<'EODUMP'
XMLReader {
  +localName: \"foo\"
  +nodeType: END_ELEMENT
  +baseURI: \"%sxml_reader.xml\"
   …11
}
EODUMP
            ],
        ];
    }
}
", "vendor/symfony/var-dumper/Tests/Caster/XmlReaderCasterTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/var-dumper/Tests/Caster/XmlReaderCasterTest.php");
    }
}
