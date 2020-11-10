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

/* vendor/symfony/var-dumper/Tests/Fixtures/dumb-var.php */
class __TwigTemplate_2bb9516c545b9339e0737b7b70b28e11d8ee5262ffcaebd1f576569b0a683b42 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Tests/Fixtures/dumb-var.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Tests/Fixtures/dumb-var.php"));

        // line 1
        echo "<?php

namespace Symfony\\Component\\VarDumper\\Tests\\Fixture;

if (!class_exists('Symfony\\Component\\VarDumper\\Tests\\Fixture\\DumbFoo')) {
    class DumbFoo
    {
        public \$foo = 'foo';
    }
}

\$foo = new DumbFoo();
\$foo->bar = 'bar';

\$g = fopen(__FILE__, 'r');

\$var = [
    'number' => 1, null,
    'const' => 1.1, true, false, NAN, INF, -INF, PHP_INT_MAX,
    'str' => \"déjà\\n\", \"\\xE9\\x00test\\t\\ning\",
    '[]' => [],
    'res' => \$g,
    'obj' => \$foo,
    'closure' => function (\$a, \\PDO &\$b = null) {},
    'line' => __LINE__ - 1,
    'nobj' => [(object) []],
];

\$r = [];
\$r[] = &\$r;

\$var['recurs'] = &\$r;
\$var[] = &\$var[0];
\$var['sobj'] = \$var['obj'];
\$var['snobj'] = &\$var['nobj'][0];
\$var['snobj2'] = \$var['nobj'][0];
\$var['file'] = __FILE__;
\$var[\"bin-key-\\xE9\"] = '';

unset(\$g, \$r);
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/var-dumper/Tests/Fixtures/dumb-var.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Symfony\\Component\\VarDumper\\Tests\\Fixture;

if (!class_exists('Symfony\\Component\\VarDumper\\Tests\\Fixture\\DumbFoo')) {
    class DumbFoo
    {
        public \$foo = 'foo';
    }
}

\$foo = new DumbFoo();
\$foo->bar = 'bar';

\$g = fopen(__FILE__, 'r');

\$var = [
    'number' => 1, null,
    'const' => 1.1, true, false, NAN, INF, -INF, PHP_INT_MAX,
    'str' => \"déjà\\n\", \"\\xE9\\x00test\\t\\ning\",
    '[]' => [],
    'res' => \$g,
    'obj' => \$foo,
    'closure' => function (\$a, \\PDO &\$b = null) {},
    'line' => __LINE__ - 1,
    'nobj' => [(object) []],
];

\$r = [];
\$r[] = &\$r;

\$var['recurs'] = &\$r;
\$var[] = &\$var[0];
\$var['sobj'] = \$var['obj'];
\$var['snobj'] = &\$var['nobj'][0];
\$var['snobj2'] = \$var['nobj'][0];
\$var['file'] = __FILE__;
\$var[\"bin-key-\\xE9\"] = '';

unset(\$g, \$r);
", "vendor/symfony/var-dumper/Tests/Fixtures/dumb-var.php", "/var/www/public/DevLaon/templates/vendor/symfony/var-dumper/Tests/Fixtures/dumb-var.php");
    }
}
