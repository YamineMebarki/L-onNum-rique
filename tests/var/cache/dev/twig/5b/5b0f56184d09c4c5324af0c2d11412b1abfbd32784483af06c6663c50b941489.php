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

/* vendor/symfony/http-foundation/Tests/Fixtures/response-functional/cookie_urlencode.php */
class __TwigTemplate_6c4735bcc192ebf11afee4ecf5d55699dc58ceb45f2c03217432c05bf741a480 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/Fixtures/response-functional/cookie_urlencode.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/Fixtures/response-functional/cookie_urlencode.php"));

        // line 1
        echo "<?php

use Symfony\\Component\\HttpFoundation\\Cookie;

\$r = require __DIR__.'/common.inc';

\$str1 = \"=,; \\t\\r\\n\\v\\f\";
\$r->headers->setCookie(new Cookie(\$str1, \$str1, 0, '', null, false, false, false, null));

\$str2 = '?*():@&+\$/%#[]';

\$r->headers->setCookie(new Cookie(\$str2, \$str2, 0, '', null, false, false, false, null));
\$r->sendHeaders();

setcookie(\$str2, \$str2, 0, '/');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/Tests/Fixtures/response-functional/cookie_urlencode.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

use Symfony\\Component\\HttpFoundation\\Cookie;

\$r = require __DIR__.'/common.inc';

\$str1 = \"=,; \\t\\r\\n\\v\\f\";
\$r->headers->setCookie(new Cookie(\$str1, \$str1, 0, '', null, false, false, false, null));

\$str2 = '?*():@&+\$/%#[]';

\$r->headers->setCookie(new Cookie(\$str2, \$str2, 0, '', null, false, false, false, null));
\$r->sendHeaders();

setcookie(\$str2, \$str2, 0, '/');
", "vendor/symfony/http-foundation/Tests/Fixtures/response-functional/cookie_urlencode.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/Tests/Fixtures/response-functional/cookie_urlencode.php");
    }
}
