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

/* vendor/symfony/maker-bundle/src/Maker/MakeForm.php */
class __TwigTemplate_948db6d5e9322bd28ea9b5cf819c26fc9778cb55346a6a6879fa17965ad1a342 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Maker/MakeForm.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Maker/MakeForm.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bundle\\MakerBundle\\Maker;

use Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle;
use Symfony\\Bundle\\MakerBundle\\ConsoleStyle;
use Symfony\\Bundle\\MakerBundle\\DependencyBuilder;
use Symfony\\Bundle\\MakerBundle\\Doctrine\\DoctrineHelper;
use Symfony\\Bundle\\MakerBundle\\Generator;
use Symfony\\Bundle\\MakerBundle\\InputConfiguration;
use Symfony\\Bundle\\MakerBundle\\Renderer\\FormTypeRenderer;
use Symfony\\Bundle\\MakerBundle\\Str;
use Symfony\\Bundle\\MakerBundle\\Util\\ClassDetails;
use Symfony\\Bundle\\MakerBundle\\Validator;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Question\\Question;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Validator\\Validation;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 * @author Ryan Weaver <weaverryan@gmail.com>
 */
final class MakeForm extends AbstractMaker
{
    private \$entityHelper;
    private \$formTypeRenderer;

    public function __construct(DoctrineHelper \$entityHelper, FormTypeRenderer \$formTypeRenderer)
    {
        \$this->entityHelper = \$entityHelper;
        \$this->formTypeRenderer = \$formTypeRenderer;
    }

    public static function getCommandName(): string
    {
        return 'make:form';
    }

    public function configureCommand(Command \$command, InputConfiguration \$inputConf)
    {
        \$command
            ->setDescription('Creates a new form class')
            ->addArgument('name', InputArgument::OPTIONAL, sprintf('The name of the form class (e.g. <fg=yellow>%sType</>)', Str::asClassName(Str::getRandomTerm())))
            ->addArgument('bound-class', InputArgument::OPTIONAL, 'The name of Entity or fully qualified model class name that the new form will be bound to (empty for none)')
            ->setHelp(file_get_contents(__DIR__.'/../Resources/help/MakeForm.txt'))
        ;

        \$inputConf->setArgumentAsNonInteractive('bound-class');
    }

    public function interact(InputInterface \$input, ConsoleStyle \$io, Command \$command)
    {
        if (null === \$input->getArgument('bound-class')) {
            \$argument = \$command->getDefinition()->getArgument('bound-class');

            \$entities = \$this->entityHelper->getEntitiesForAutocomplete();

            \$question = new Question(\$argument->getDescription());
            \$question->setValidator(function (\$answer) use (\$entities) {return Validator::existsOrNull(\$answer, \$entities); });
            \$question->setAutocompleterValues(\$entities);
            \$question->setMaxAttempts(3);

            \$input->setArgument('bound-class', \$io->askQuestion(\$question));
        }
    }

    public function generate(InputInterface \$input, ConsoleStyle \$io, Generator \$generator)
    {
        \$formClassNameDetails = \$generator->createClassNameDetails(
            \$input->getArgument('name'),
            'Form\\\\',
            'Type'
        );

        \$formFields = ['field_name' => null];

        \$boundClass = \$input->getArgument('bound-class');
        \$boundClassDetails = null;

        if (null !== \$boundClass) {
            \$boundClassDetails = \$generator->createClassNameDetails(
                \$boundClass,
                'Entity\\\\'
            );

            \$doctrineEntityDetails = \$this->entityHelper->createDoctrineDetails(\$boundClassDetails->getFullName());

            if (null !== \$doctrineEntityDetails) {
                \$formFields = \$doctrineEntityDetails->getFormFields();
            } else {
                \$classDetails = new ClassDetails(\$boundClassDetails->getFullName());
                \$formFields = \$classDetails->getFormFields();
            }
        }

        \$this->formTypeRenderer->render(
            \$formClassNameDetails,
            \$formFields,
            \$boundClassDetails
        );

        \$generator->writeChanges();

        \$this->writeSuccessMessage(\$io);

        \$io->text([
            'Next: Add fields to your form and start using it.',
            'Find the documentation at <fg=yellow>https://symfony.com/doc/current/forms.html</>',
        ]);
    }

    public function configureDependencies(DependencyBuilder \$dependencies)
    {
        \$dependencies->addClassDependency(
            AbstractType::class,
            // technically only form is needed, but the user will *probably* also want validation
            'form'
        );

        \$dependencies->addClassDependency(
            Validation::class,
            'validator',
            // add as an optional dependency: the user *probably* wants validation
            false
        );

        \$dependencies->addClassDependency(
            DoctrineBundle::class,
            'orm',
            false
        );
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/maker-bundle/src/Maker/MakeForm.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bundle\\MakerBundle\\Maker;

use Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle;
use Symfony\\Bundle\\MakerBundle\\ConsoleStyle;
use Symfony\\Bundle\\MakerBundle\\DependencyBuilder;
use Symfony\\Bundle\\MakerBundle\\Doctrine\\DoctrineHelper;
use Symfony\\Bundle\\MakerBundle\\Generator;
use Symfony\\Bundle\\MakerBundle\\InputConfiguration;
use Symfony\\Bundle\\MakerBundle\\Renderer\\FormTypeRenderer;
use Symfony\\Bundle\\MakerBundle\\Str;
use Symfony\\Bundle\\MakerBundle\\Util\\ClassDetails;
use Symfony\\Bundle\\MakerBundle\\Validator;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Question\\Question;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Validator\\Validation;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 * @author Ryan Weaver <weaverryan@gmail.com>
 */
final class MakeForm extends AbstractMaker
{
    private \$entityHelper;
    private \$formTypeRenderer;

    public function __construct(DoctrineHelper \$entityHelper, FormTypeRenderer \$formTypeRenderer)
    {
        \$this->entityHelper = \$entityHelper;
        \$this->formTypeRenderer = \$formTypeRenderer;
    }

    public static function getCommandName(): string
    {
        return 'make:form';
    }

    public function configureCommand(Command \$command, InputConfiguration \$inputConf)
    {
        \$command
            ->setDescription('Creates a new form class')
            ->addArgument('name', InputArgument::OPTIONAL, sprintf('The name of the form class (e.g. <fg=yellow>%sType</>)', Str::asClassName(Str::getRandomTerm())))
            ->addArgument('bound-class', InputArgument::OPTIONAL, 'The name of Entity or fully qualified model class name that the new form will be bound to (empty for none)')
            ->setHelp(file_get_contents(__DIR__.'/../Resources/help/MakeForm.txt'))
        ;

        \$inputConf->setArgumentAsNonInteractive('bound-class');
    }

    public function interact(InputInterface \$input, ConsoleStyle \$io, Command \$command)
    {
        if (null === \$input->getArgument('bound-class')) {
            \$argument = \$command->getDefinition()->getArgument('bound-class');

            \$entities = \$this->entityHelper->getEntitiesForAutocomplete();

            \$question = new Question(\$argument->getDescription());
            \$question->setValidator(function (\$answer) use (\$entities) {return Validator::existsOrNull(\$answer, \$entities); });
            \$question->setAutocompleterValues(\$entities);
            \$question->setMaxAttempts(3);

            \$input->setArgument('bound-class', \$io->askQuestion(\$question));
        }
    }

    public function generate(InputInterface \$input, ConsoleStyle \$io, Generator \$generator)
    {
        \$formClassNameDetails = \$generator->createClassNameDetails(
            \$input->getArgument('name'),
            'Form\\\\',
            'Type'
        );

        \$formFields = ['field_name' => null];

        \$boundClass = \$input->getArgument('bound-class');
        \$boundClassDetails = null;

        if (null !== \$boundClass) {
            \$boundClassDetails = \$generator->createClassNameDetails(
                \$boundClass,
                'Entity\\\\'
            );

            \$doctrineEntityDetails = \$this->entityHelper->createDoctrineDetails(\$boundClassDetails->getFullName());

            if (null !== \$doctrineEntityDetails) {
                \$formFields = \$doctrineEntityDetails->getFormFields();
            } else {
                \$classDetails = new ClassDetails(\$boundClassDetails->getFullName());
                \$formFields = \$classDetails->getFormFields();
            }
        }

        \$this->formTypeRenderer->render(
            \$formClassNameDetails,
            \$formFields,
            \$boundClassDetails
        );

        \$generator->writeChanges();

        \$this->writeSuccessMessage(\$io);

        \$io->text([
            'Next: Add fields to your form and start using it.',
            'Find the documentation at <fg=yellow>https://symfony.com/doc/current/forms.html</>',
        ]);
    }

    public function configureDependencies(DependencyBuilder \$dependencies)
    {
        \$dependencies->addClassDependency(
            AbstractType::class,
            // technically only form is needed, but the user will *probably* also want validation
            'form'
        );

        \$dependencies->addClassDependency(
            Validation::class,
            'validator',
            // add as an optional dependency: the user *probably* wants validation
            false
        );

        \$dependencies->addClassDependency(
            DoctrineBundle::class,
            'orm',
            false
        );
    }
}
", "vendor/symfony/maker-bundle/src/Maker/MakeForm.php", "/var/www/public/DevLaon/templates/vendor/symfony/maker-bundle/src/Maker/MakeForm.php");
    }
}
