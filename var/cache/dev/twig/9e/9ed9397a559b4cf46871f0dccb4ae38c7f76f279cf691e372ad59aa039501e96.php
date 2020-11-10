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

/* vendor/symfony/var-dumper/Tests/Fixtures/dump_server.php */
class __TwigTemplate_68abfd2341f3cbfca568d5857e8a5ee230446a7b86251fa209f7d4b511531e11 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Tests/Fixtures/dump_server.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Tests/Fixtures/dump_server.php"));

        // line 1
        echo "<?php

use Symfony\\Component\\VarDumper\\Cloner\\Data;
use Symfony\\Component\\VarDumper\\Cloner\\VarCloner;
use Symfony\\Component\\VarDumper\\Dumper\\CliDumper;
use Symfony\\Component\\VarDumper\\Server\\DumpServer;
use Symfony\\Component\\VarDumper\\VarDumper;

\$componentRoot = \$_SERVER['COMPONENT_ROOT'];

if (!is_file(\$file = \$componentRoot.'/vendor/autoload.php')) {
    \$file = \$componentRoot.'/../../../../vendor/autoload.php';
}

require \$file;

\$cloner = new VarCloner();
\$cloner->setMaxItems(-1);

\$dumper = new CliDumper(null, null, CliDumper::DUMP_LIGHT_ARRAY | CliDumper::DUMP_STRING_LENGTH);
\$dumper->setColors(false);

VarDumper::setHandler(function (\$var) use (\$cloner, \$dumper) {
    \$data = \$cloner->cloneVar(\$var)->withRefHandles(false);
    \$dumper->dump(\$data);
});

\$server = new DumpServer(getenv('VAR_DUMPER_SERVER'));

\$server->start();

echo \"READY\\n\";

\$server->listen(function (Data \$data, array \$context, \$clientId) {
    dump((string) \$data, \$context, \$clientId);

    exit(0);
});
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/var-dumper/Tests/Fixtures/dump_server.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

use Symfony\\Component\\VarDumper\\Cloner\\Data;
use Symfony\\Component\\VarDumper\\Cloner\\VarCloner;
use Symfony\\Component\\VarDumper\\Dumper\\CliDumper;
use Symfony\\Component\\VarDumper\\Server\\DumpServer;
use Symfony\\Component\\VarDumper\\VarDumper;

\$componentRoot = \$_SERVER['COMPONENT_ROOT'];

if (!is_file(\$file = \$componentRoot.'/vendor/autoload.php')) {
    \$file = \$componentRoot.'/../../../../vendor/autoload.php';
}

require \$file;

\$cloner = new VarCloner();
\$cloner->setMaxItems(-1);

\$dumper = new CliDumper(null, null, CliDumper::DUMP_LIGHT_ARRAY | CliDumper::DUMP_STRING_LENGTH);
\$dumper->setColors(false);

VarDumper::setHandler(function (\$var) use (\$cloner, \$dumper) {
    \$data = \$cloner->cloneVar(\$var)->withRefHandles(false);
    \$dumper->dump(\$data);
});

\$server = new DumpServer(getenv('VAR_DUMPER_SERVER'));

\$server->start();

echo \"READY\\n\";

\$server->listen(function (Data \$data, array \$context, \$clientId) {
    dump((string) \$data, \$context, \$clientId);

    exit(0);
});
", "vendor/symfony/var-dumper/Tests/Fixtures/dump_server.php", "/var/www/public/DevLaon/templates/vendor/symfony/var-dumper/Tests/Fixtures/dump_server.php");
    }
}
