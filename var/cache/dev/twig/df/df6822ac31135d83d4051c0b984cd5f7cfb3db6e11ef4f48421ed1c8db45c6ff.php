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

/* vendor/symfony/http-foundation/Tests/Session/Storage/Handler/Fixtures/with_samesite.php */
class __TwigTemplate_c1f3fdf90bc563e736df40dc3fc4c6163af2846ad117e84ef1df410e1b8f8517 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/Session/Storage/Handler/Fixtures/with_samesite.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/Session/Storage/Handler/Fixtures/with_samesite.php"));

        // line 1
        echo "<?php

require __DIR__.'/common.inc';

use Symfony\\Component\\HttpFoundation\\Session\\Storage\\NativeSessionStorage;

\$storage = new NativeSessionStorage(['cookie_samesite' => 'lax']);
\$storage->setSaveHandler(new TestSessionHandler());
\$storage->start();

\$_SESSION = ['foo' => 'bar'];

ob_start(function (\$buffer) { return str_replace(session_id(), 'random_session_id', \$buffer); });
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/Tests/Session/Storage/Handler/Fixtures/with_samesite.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

require __DIR__.'/common.inc';

use Symfony\\Component\\HttpFoundation\\Session\\Storage\\NativeSessionStorage;

\$storage = new NativeSessionStorage(['cookie_samesite' => 'lax']);
\$storage->setSaveHandler(new TestSessionHandler());
\$storage->start();

\$_SESSION = ['foo' => 'bar'];

ob_start(function (\$buffer) { return str_replace(session_id(), 'random_session_id', \$buffer); });
", "vendor/symfony/http-foundation/Tests/Session/Storage/Handler/Fixtures/with_samesite.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/Tests/Session/Storage/Handler/Fixtures/with_samesite.php");
    }
}
