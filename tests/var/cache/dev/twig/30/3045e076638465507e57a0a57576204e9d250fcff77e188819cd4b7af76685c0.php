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

/* vendor/symfony/console/Tests/Fixtures/FooCommand.php */
class __TwigTemplate_b24e40aa68dd9f38acd53ecaccd6bbf95f7aa4fed0e061b150425735d004f711 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Fixtures/FooCommand.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Fixtures/FooCommand.php"));

        // line 1
        echo "<?php

use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;

class FooCommand extends Command
{
    public \$input;
    public \$output;

    protected function configure()
    {
        \$this
            ->setName('foo:bar')
            ->setDescription('The foo:bar command')
            ->setAliases(['afoobar'])
        ;
    }

    protected function interact(InputInterface \$input, OutputInterface \$output)
    {
        \$output->writeln('interact called');
    }

    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$this->input = \$input;
        \$this->output = \$output;

        \$output->writeln('called');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Tests/Fixtures/FooCommand.php";
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

class FooCommand extends Command
{
    public \$input;
    public \$output;

    protected function configure()
    {
        \$this
            ->setName('foo:bar')
            ->setDescription('The foo:bar command')
            ->setAliases(['afoobar'])
        ;
    }

    protected function interact(InputInterface \$input, OutputInterface \$output)
    {
        \$output->writeln('interact called');
    }

    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$this->input = \$input;
        \$this->output = \$output;

        \$output->writeln('called');
    }
}
", "vendor/symfony/console/Tests/Fixtures/FooCommand.php", "/var/www/public/DevLaon/templates/vendor/symfony/console/Tests/Fixtures/FooCommand.php");
    }
}
