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

/* vendor/symfony/var-dumper/Tests/Fixtures/Twig.php */
class __TwigTemplate_32f026bf8c048c1f4398bb619d78baf2a045b74ca4a2ae58213225a52e56bd12 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Tests/Fixtures/Twig.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Tests/Fixtures/Twig.php"));

        // line 1
        echo "<?php

/* foo.twig */
class __TwigTemplate_VarDumperFixture_u75a09 extends Twig\\Template
{
    private \$path;

    public function __construct(Twig\\Environment \$env = null, \$path = null)
    {
        if (null !== \$env) {
            parent::__construct(\$env);
        }
        \$this->parent = false;
        \$this->blocks = [];
        \$this->path = \$path;
    }

    protected function doDisplay(array \$context, array \$blocks = [])
    {
        // line 2
        throw new \\Exception('Foobar');
    }

    public function getTemplateName()
    {
        return 'foo.twig';
    }

    public function getDebugInfo()
    {
        return [20 => 1, 21 => 2];
    }

    public function getSourceContext()
    {
        return new Twig\\Source(\"   foo bar\\n     twig source\\n\\n\", 'foo.twig', \$this->path ?: __FILE__);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/var-dumper/Tests/Fixtures/Twig.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/* foo.twig */
class __TwigTemplate_VarDumperFixture_u75a09 extends Twig\\Template
{
    private \$path;

    public function __construct(Twig\\Environment \$env = null, \$path = null)
    {
        if (null !== \$env) {
            parent::__construct(\$env);
        }
        \$this->parent = false;
        \$this->blocks = [];
        \$this->path = \$path;
    }

    protected function doDisplay(array \$context, array \$blocks = [])
    {
        // line 2
        throw new \\Exception('Foobar');
    }

    public function getTemplateName()
    {
        return 'foo.twig';
    }

    public function getDebugInfo()
    {
        return [20 => 1, 21 => 2];
    }

    public function getSourceContext()
    {
        return new Twig\\Source(\"   foo bar\\n     twig source\\n\\n\", 'foo.twig', \$this->path ?: __FILE__);
    }
}
", "vendor/symfony/var-dumper/Tests/Fixtures/Twig.php", "/var/www/public/DevLaon/templates/vendor/symfony/var-dumper/Tests/Fixtures/Twig.php");
    }
}
