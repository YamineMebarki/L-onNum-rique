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

/* vendor/symfony/http-foundation/Tests/Fixtures/response-functional/common.inc */
class __TwigTemplate_a47a9a2c95dd3afa6b3c039584ce915b5541fabfb65c5c32587714a70aeefb2a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/Fixtures/response-functional/common.inc"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/Fixtures/response-functional/common.inc"));

        // line 1
        echo "<?php

use Symfony\\Component\\HttpFoundation\\Response;

\$parent = __DIR__;
while (!@file_exists(\$parent.'/vendor/autoload.php')) {
    if (!@file_exists(\$parent)) {
        // open_basedir restriction in effect
        break;
    }
    if (\$parent === dirname(\$parent)) {
        echo \"vendor/autoload.php not found\\n\";
        exit(1);
    }

    \$parent = dirname(\$parent);
}

require \$parent.'/vendor/autoload.php';

error_reporting(-1);
ini_set('html_errors', 0);
ini_set('display_errors', 1);

if (filter_var(ini_get('xdebug.default_enable'), FILTER_VALIDATE_BOOLEAN)) {
    xdebug_disable();
}

header_remove('X-Powered-By');
header('Content-Type: text/plain; charset=utf-8');

register_shutdown_function(function () {
    echo \"\\n\";
    session_write_close();
    print_r(headers_list());
    echo \"shutdown\\n\";
});
ob_start();

\$r = new Response();
\$r->headers->set('Date', 'Sat, 12 Nov 1955 20:04:00 GMT');

return \$r;
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/Tests/Fixtures/response-functional/common.inc";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

use Symfony\\Component\\HttpFoundation\\Response;

\$parent = __DIR__;
while (!@file_exists(\$parent.'/vendor/autoload.php')) {
    if (!@file_exists(\$parent)) {
        // open_basedir restriction in effect
        break;
    }
    if (\$parent === dirname(\$parent)) {
        echo \"vendor/autoload.php not found\\n\";
        exit(1);
    }

    \$parent = dirname(\$parent);
}

require \$parent.'/vendor/autoload.php';

error_reporting(-1);
ini_set('html_errors', 0);
ini_set('display_errors', 1);

if (filter_var(ini_get('xdebug.default_enable'), FILTER_VALIDATE_BOOLEAN)) {
    xdebug_disable();
}

header_remove('X-Powered-By');
header('Content-Type: text/plain; charset=utf-8');

register_shutdown_function(function () {
    echo \"\\n\";
    session_write_close();
    print_r(headers_list());
    echo \"shutdown\\n\";
});
ob_start();

\$r = new Response();
\$r->headers->set('Date', 'Sat, 12 Nov 1955 20:04:00 GMT');

return \$r;
", "vendor/symfony/http-foundation/Tests/Fixtures/response-functional/common.inc", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/Tests/Fixtures/response-functional/common.inc");
    }
}
