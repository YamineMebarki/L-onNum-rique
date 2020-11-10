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

/* vendor/symfony/var-dumper/Test/VarDumperTestTrait.php */
class __TwigTemplate_44fd62c076524b3d965f6a9ae08707e9280d5e269c1303cbd933c468658a4cbe extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Test/VarDumperTestTrait.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Test/VarDumperTestTrait.php"));

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

namespace Symfony\\Component\\VarDumper\\Test;

use Symfony\\Component\\VarDumper\\Cloner\\VarCloner;
use Symfony\\Component\\VarDumper\\Dumper\\CliDumper;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
trait VarDumperTestTrait
{
    public function assertDumpEquals(\$expected, \$data, \$filter = 0, \$message = '')
    {
        \$this->assertSame(\$this->prepareExpectation(\$expected, \$filter), \$this->getDump(\$data, null, \$filter), \$message);
    }

    public function assertDumpMatchesFormat(\$expected, \$data, \$filter = 0, \$message = '')
    {
        \$this->assertStringMatchesFormat(\$this->prepareExpectation(\$expected, \$filter), \$this->getDump(\$data, null, \$filter), \$message);
    }

    /**
     * @return string|null
     */
    protected function getDump(\$data, \$key = null, \$filter = 0)
    {
        \$flags = getenv('DUMP_LIGHT_ARRAY') ? CliDumper::DUMP_LIGHT_ARRAY : 0;
        \$flags |= getenv('DUMP_STRING_LENGTH') ? CliDumper::DUMP_STRING_LENGTH : 0;
        \$flags |= getenv('DUMP_COMMA_SEPARATOR') ? CliDumper::DUMP_COMMA_SEPARATOR : 0;

        \$cloner = new VarCloner();
        \$cloner->setMaxItems(-1);
        \$dumper = new CliDumper(null, null, \$flags);
        \$dumper->setColors(false);
        \$data = \$cloner->cloneVar(\$data, \$filter)->withRefHandles(false);
        if (null !== \$key && null === \$data = \$data->seek(\$key)) {
            return null;
        }

        return rtrim(\$dumper->dump(\$data, true));
    }

    private function prepareExpectation(\$expected, \$filter)
    {
        if (!\\is_string(\$expected)) {
            \$expected = \$this->getDump(\$expected, null, \$filter);
        }

        return rtrim(\$expected);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/var-dumper/Test/VarDumperTestTrait.php";
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

namespace Symfony\\Component\\VarDumper\\Test;

use Symfony\\Component\\VarDumper\\Cloner\\VarCloner;
use Symfony\\Component\\VarDumper\\Dumper\\CliDumper;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
trait VarDumperTestTrait
{
    public function assertDumpEquals(\$expected, \$data, \$filter = 0, \$message = '')
    {
        \$this->assertSame(\$this->prepareExpectation(\$expected, \$filter), \$this->getDump(\$data, null, \$filter), \$message);
    }

    public function assertDumpMatchesFormat(\$expected, \$data, \$filter = 0, \$message = '')
    {
        \$this->assertStringMatchesFormat(\$this->prepareExpectation(\$expected, \$filter), \$this->getDump(\$data, null, \$filter), \$message);
    }

    /**
     * @return string|null
     */
    protected function getDump(\$data, \$key = null, \$filter = 0)
    {
        \$flags = getenv('DUMP_LIGHT_ARRAY') ? CliDumper::DUMP_LIGHT_ARRAY : 0;
        \$flags |= getenv('DUMP_STRING_LENGTH') ? CliDumper::DUMP_STRING_LENGTH : 0;
        \$flags |= getenv('DUMP_COMMA_SEPARATOR') ? CliDumper::DUMP_COMMA_SEPARATOR : 0;

        \$cloner = new VarCloner();
        \$cloner->setMaxItems(-1);
        \$dumper = new CliDumper(null, null, \$flags);
        \$dumper->setColors(false);
        \$data = \$cloner->cloneVar(\$data, \$filter)->withRefHandles(false);
        if (null !== \$key && null === \$data = \$data->seek(\$key)) {
            return null;
        }

        return rtrim(\$dumper->dump(\$data, true));
    }

    private function prepareExpectation(\$expected, \$filter)
    {
        if (!\\is_string(\$expected)) {
            \$expected = \$this->getDump(\$expected, null, \$filter);
        }

        return rtrim(\$expected);
    }
}
", "vendor/symfony/var-dumper/Test/VarDumperTestTrait.php", "/var/www/public/DevLaon/templates/vendor/symfony/var-dumper/Test/VarDumperTestTrait.php");
    }
}
