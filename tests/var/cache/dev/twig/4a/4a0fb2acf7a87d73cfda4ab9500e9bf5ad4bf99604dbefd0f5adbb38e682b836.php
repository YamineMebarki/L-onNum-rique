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

/* vendor/symfony/console/Tests/Fixtures/Style/SymfonyStyle/command/command_4_with_iterators.php */
class __TwigTemplate_b028b0e9b62a6a516b118bc7e3b23c5d6b02f37e3483985de3adfc2fc23af5db extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Fixtures/Style/SymfonyStyle/command/command_4_with_iterators.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Fixtures/Style/SymfonyStyle/command/command_4_with_iterators.php"));

        // line 1
        echo "<?php

use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;

//Ensure has single blank line after any text and a title
return function (InputInterface \$input, OutputInterface \$output) {
    \$output = new SymfonyStyle(\$input, \$output);

    \$output->write('Lorem ipsum dolor sit amet');
    \$output->title('First title');

    \$output->writeln('Lorem ipsum dolor sit amet');
    \$output->title('Second title');

    \$output->write('Lorem ipsum dolor sit amet');
    \$output->write('');
    \$output->title('Third title');

    //Ensure edge case by appending empty strings to history:
    \$output->write('Lorem ipsum dolor sit amet');
    \$output->write(new \\ArrayIterator(['', '', '']));
    \$output->title('Fourth title');

    //Ensure have manual control over number of blank lines:
    \$output->writeln('Lorem ipsum dolor sit amet');
    \$output->writeln(new \\ArrayIterator(['', ''])); //Should append an extra blank line
    \$output->title('Fifth title');

    \$output->writeln('Lorem ipsum dolor sit amet');
    \$output->newLine(2); //Should append an extra blank line
    \$output->title('Fifth title');
};
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Tests/Fixtures/Style/SymfonyStyle/command/command_4_with_iterators.php";
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

//Ensure has single blank line after any text and a title
return function (InputInterface \$input, OutputInterface \$output) {
    \$output = new SymfonyStyle(\$input, \$output);

    \$output->write('Lorem ipsum dolor sit amet');
    \$output->title('First title');

    \$output->writeln('Lorem ipsum dolor sit amet');
    \$output->title('Second title');

    \$output->write('Lorem ipsum dolor sit amet');
    \$output->write('');
    \$output->title('Third title');

    //Ensure edge case by appending empty strings to history:
    \$output->write('Lorem ipsum dolor sit amet');
    \$output->write(new \\ArrayIterator(['', '', '']));
    \$output->title('Fourth title');

    //Ensure have manual control over number of blank lines:
    \$output->writeln('Lorem ipsum dolor sit amet');
    \$output->writeln(new \\ArrayIterator(['', ''])); //Should append an extra blank line
    \$output->title('Fifth title');

    \$output->writeln('Lorem ipsum dolor sit amet');
    \$output->newLine(2); //Should append an extra blank line
    \$output->title('Fifth title');
};
", "vendor/symfony/console/Tests/Fixtures/Style/SymfonyStyle/command/command_4_with_iterators.php", "/var/www/public/DevLaon/templates/vendor/symfony/console/Tests/Fixtures/Style/SymfonyStyle/command/command_4_with_iterators.php");
    }
}
