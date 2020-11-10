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

/* vendor/symfony/console/Tests/Fixtures/Foo3Command.php */
class __TwigTemplate_548514b778a5713d993b70b3212a9e36251d3bf8263542fbe676fa5651a5518c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Fixtures/Foo3Command.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Fixtures/Foo3Command.php"));

        // line 1
        echo "<?php

use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;

class Foo3Command extends Command
{
    protected function configure()
    {
        \$this
            ->setName('foo3:bar')
            ->setDescription('The foo3:bar command')
        ;
    }

    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        try {
            try {
                throw new \\Exception('First exception <p>this is html</p>');
            } catch (\\Exception \$e) {
                throw new \\Exception('Second exception <comment>comment</comment>', 0, \$e);
            }
        } catch (\\Exception \$e) {
            throw new \\Exception('Third exception <fg=blue;bg=red>comment</>', 404, \$e);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Tests/Fixtures/Foo3Command.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;

class Foo3Command extends Command
{
    protected function configure()
    {
        \$this
            ->setName('foo3:bar')
            ->setDescription('The foo3:bar command')
        ;
    }

    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        try {
            try {
                throw new \\Exception('First exception <p>this is html</p>');
            } catch (\\Exception \$e) {
                throw new \\Exception('Second exception <comment>comment</comment>', 0, \$e);
            }
        } catch (\\Exception \$e) {
            throw new \\Exception('Third exception <fg=blue;bg=red>comment</>', 404, \$e);
        }
    }
}
", "vendor/symfony/console/Tests/Fixtures/Foo3Command.php", "/var/www/public/DevLaon/templates/vendor/symfony/console/Tests/Fixtures/Foo3Command.php");
    }
}
