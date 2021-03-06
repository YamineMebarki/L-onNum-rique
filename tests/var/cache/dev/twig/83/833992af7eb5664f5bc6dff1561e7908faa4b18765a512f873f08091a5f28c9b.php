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

/* vendor/symfony/console/Tests/Fixtures/Style/SymfonyStyle/command/command_5.php */
class __TwigTemplate_2bb7da0d40c8db0efb9f67798f1dceadb1a97e7307599956d89a93e58b2b0e56 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Fixtures/Style/SymfonyStyle/command/command_5.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Fixtures/Style/SymfonyStyle/command/command_5.php"));

        // line 1
        echo "<?php

use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;

//Ensure has proper line ending before outputting a text block like with SymfonyStyle::listing() or SymfonyStyle::text()
return function (InputInterface \$input, OutputInterface \$output) {
    \$output = new SymfonyStyle(\$input, \$output);

    \$output->writeln('Lorem ipsum dolor sit amet');
    \$output->listing([
        'Lorem ipsum dolor sit amet',
        'consectetur adipiscing elit',
    ]);

    //Even using write:
    \$output->write('Lorem ipsum dolor sit amet');
    \$output->listing([
        'Lorem ipsum dolor sit amet',
        'consectetur adipiscing elit',
    ]);

    \$output->write('Lorem ipsum dolor sit amet');
    \$output->text([
        'Lorem ipsum dolor sit amet',
        'consectetur adipiscing elit',
    ]);

    \$output->newLine();

    \$output->write('Lorem ipsum dolor sit amet');
    \$output->comment([
        'Lorem ipsum dolor sit amet',
        'consectetur adipiscing elit',
    ]);
};
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Tests/Fixtures/Style/SymfonyStyle/command/command_5.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;

//Ensure has proper line ending before outputting a text block like with SymfonyStyle::listing() or SymfonyStyle::text()
return function (InputInterface \$input, OutputInterface \$output) {
    \$output = new SymfonyStyle(\$input, \$output);

    \$output->writeln('Lorem ipsum dolor sit amet');
    \$output->listing([
        'Lorem ipsum dolor sit amet',
        'consectetur adipiscing elit',
    ]);

    //Even using write:
    \$output->write('Lorem ipsum dolor sit amet');
    \$output->listing([
        'Lorem ipsum dolor sit amet',
        'consectetur adipiscing elit',
    ]);

    \$output->write('Lorem ipsum dolor sit amet');
    \$output->text([
        'Lorem ipsum dolor sit amet',
        'consectetur adipiscing elit',
    ]);

    \$output->newLine();

    \$output->write('Lorem ipsum dolor sit amet');
    \$output->comment([
        'Lorem ipsum dolor sit amet',
        'consectetur adipiscing elit',
    ]);
};
", "vendor/symfony/console/Tests/Fixtures/Style/SymfonyStyle/command/command_5.php", "/var/www/public/DevLaon/templates/vendor/symfony/console/Tests/Fixtures/Style/SymfonyStyle/command/command_5.php");
    }
}
