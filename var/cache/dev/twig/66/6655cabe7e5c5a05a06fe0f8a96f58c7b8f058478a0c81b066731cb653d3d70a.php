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

/* vendor/symfony/var-dumper/Tests/Caster/PdoCasterTest.php */
class __TwigTemplate_8d11b66537290b82e6f3271516453fb0d9df4710d7d4763bab4b89f2fef980c7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Tests/Caster/PdoCasterTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Tests/Caster/PdoCasterTest.php"));

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
use Symfony\\Component\\VarDumper\\Caster\\PdoCaster;
use Symfony\\Component\\VarDumper\\Cloner\\Stub;
use Symfony\\Component\\VarDumper\\Test\\VarDumperTestTrait;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class PdoCasterTest extends TestCase
{
    use VarDumperTestTrait;

    /**
     * @requires extension pdo_sqlite
     */
    public function testCastPdo()
    {
        \$pdo = new \\PDO('sqlite::memory:');
        \$pdo->setAttribute(\\PDO::ATTR_STATEMENT_CLASS, ['PDOStatement', [\$pdo]]);

        \$cast = PdoCaster::castPdo(\$pdo, [], new Stub(), false);

        \$this->assertInstanceOf('Symfony\\Component\\VarDumper\\Caster\\EnumStub', \$cast[\"\\0~\\0attributes\"]);

        \$attr = \$cast[\"\\0~\\0attributes\"] = \$cast[\"\\0~\\0attributes\"]->value;
        \$this->assertInstanceOf('Symfony\\Component\\VarDumper\\Caster\\ConstStub', \$attr['CASE']);
        \$this->assertSame('NATURAL', \$attr['CASE']->class);
        \$this->assertSame('BOTH', \$attr['DEFAULT_FETCH_MODE']->class);

        \$xDump = <<<'EODUMP'
array:2 [
  \"\\x00~\\x00inTransaction\" => false
  \"\\x00~\\x00attributes\" => array:9 [
    \"CASE\" => NATURAL
    \"ERRMODE\" => SILENT
    \"PERSISTENT\" => false
    \"DRIVER_NAME\" => \"sqlite\"
    \"ORACLE_NULLS\" => NATURAL
    \"CLIENT_VERSION\" => \"%s\"
    \"SERVER_VERSION\" => \"%s\"
    \"STATEMENT_CLASS\" => array:%d [
      0 => \"PDOStatement\"%A
    ]
    \"DEFAULT_FETCH_MODE\" => BOTH
  ]
]
EODUMP;

        \$this->assertDumpMatchesFormat(\$xDump, \$cast);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/var-dumper/Tests/Caster/PdoCasterTest.php";
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
use Symfony\\Component\\VarDumper\\Caster\\PdoCaster;
use Symfony\\Component\\VarDumper\\Cloner\\Stub;
use Symfony\\Component\\VarDumper\\Test\\VarDumperTestTrait;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class PdoCasterTest extends TestCase
{
    use VarDumperTestTrait;

    /**
     * @requires extension pdo_sqlite
     */
    public function testCastPdo()
    {
        \$pdo = new \\PDO('sqlite::memory:');
        \$pdo->setAttribute(\\PDO::ATTR_STATEMENT_CLASS, ['PDOStatement', [\$pdo]]);

        \$cast = PdoCaster::castPdo(\$pdo, [], new Stub(), false);

        \$this->assertInstanceOf('Symfony\\Component\\VarDumper\\Caster\\EnumStub', \$cast[\"\\0~\\0attributes\"]);

        \$attr = \$cast[\"\\0~\\0attributes\"] = \$cast[\"\\0~\\0attributes\"]->value;
        \$this->assertInstanceOf('Symfony\\Component\\VarDumper\\Caster\\ConstStub', \$attr['CASE']);
        \$this->assertSame('NATURAL', \$attr['CASE']->class);
        \$this->assertSame('BOTH', \$attr['DEFAULT_FETCH_MODE']->class);

        \$xDump = <<<'EODUMP'
array:2 [
  \"\\x00~\\x00inTransaction\" => false
  \"\\x00~\\x00attributes\" => array:9 [
    \"CASE\" => NATURAL
    \"ERRMODE\" => SILENT
    \"PERSISTENT\" => false
    \"DRIVER_NAME\" => \"sqlite\"
    \"ORACLE_NULLS\" => NATURAL
    \"CLIENT_VERSION\" => \"%s\"
    \"SERVER_VERSION\" => \"%s\"
    \"STATEMENT_CLASS\" => array:%d [
      0 => \"PDOStatement\"%A
    ]
    \"DEFAULT_FETCH_MODE\" => BOTH
  ]
]
EODUMP;

        \$this->assertDumpMatchesFormat(\$xDump, \$cast);
    }
}
", "vendor/symfony/var-dumper/Tests/Caster/PdoCasterTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/var-dumper/Tests/Caster/PdoCasterTest.php");
    }
}
