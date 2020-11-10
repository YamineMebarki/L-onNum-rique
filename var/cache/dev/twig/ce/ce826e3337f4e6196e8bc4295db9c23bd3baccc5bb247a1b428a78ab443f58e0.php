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

/* vendor/symfony/var-dumper/Tests/Dumper/FunctionsTest.php */
class __TwigTemplate_fb25ba4b019a8b7ff4953f76764acd8426c24d059c79dbfe14960cdd9860efcd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Tests/Dumper/FunctionsTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Tests/Dumper/FunctionsTest.php"));

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

namespace Symfony\\Component\\VarDumper\\Tests\\Dumper;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\VarDumper\\Cloner\\VarCloner;
use Symfony\\Component\\VarDumper\\Dumper\\CliDumper;
use Symfony\\Component\\VarDumper\\VarDumper;

class FunctionsTest extends TestCase
{
    public function testDumpReturnsFirstArg()
    {
        \$this->setupVarDumper();

        \$var1 = 'a';

        ob_start();
        \$return = dump(\$var1);
        ob_end_clean();

        \$this->assertEquals(\$var1, \$return);
    }

    public function testDumpReturnsAllArgsInArray()
    {
        \$this->setupVarDumper();

        \$var1 = 'a';
        \$var2 = 'b';
        \$var3 = 'c';

        ob_start();
        \$return = dump(\$var1, \$var2, \$var3);
        ob_end_clean();

        \$this->assertEquals([\$var1, \$var2, \$var3], \$return);
    }

    protected function setupVarDumper()
    {
        \$cloner = new VarCloner();
        \$dumper = new CliDumper('php://output');
        VarDumper::setHandler(function (\$var) use (\$cloner, \$dumper) {
            \$dumper->dump(\$cloner->cloneVar(\$var));
        });
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/var-dumper/Tests/Dumper/FunctionsTest.php";
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

namespace Symfony\\Component\\VarDumper\\Tests\\Dumper;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\VarDumper\\Cloner\\VarCloner;
use Symfony\\Component\\VarDumper\\Dumper\\CliDumper;
use Symfony\\Component\\VarDumper\\VarDumper;

class FunctionsTest extends TestCase
{
    public function testDumpReturnsFirstArg()
    {
        \$this->setupVarDumper();

        \$var1 = 'a';

        ob_start();
        \$return = dump(\$var1);
        ob_end_clean();

        \$this->assertEquals(\$var1, \$return);
    }

    public function testDumpReturnsAllArgsInArray()
    {
        \$this->setupVarDumper();

        \$var1 = 'a';
        \$var2 = 'b';
        \$var3 = 'c';

        ob_start();
        \$return = dump(\$var1, \$var2, \$var3);
        ob_end_clean();

        \$this->assertEquals([\$var1, \$var2, \$var3], \$return);
    }

    protected function setupVarDumper()
    {
        \$cloner = new VarCloner();
        \$dumper = new CliDumper('php://output');
        VarDumper::setHandler(function (\$var) use (\$cloner, \$dumper) {
            \$dumper->dump(\$cloner->cloneVar(\$var));
        });
    }
}
", "vendor/symfony/var-dumper/Tests/Dumper/FunctionsTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/var-dumper/Tests/Dumper/FunctionsTest.php");
    }
}
