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

/* vendor/symfony/maker-bundle/src/Maker/MakeCrud.php */
class __TwigTemplate_1b2db0a960639d93ff80f9585daffd2aa26e8ead566dba64b7f9b8d6ef094d01 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Maker/MakeCrud.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Maker/MakeCrud.php"));

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
use Doctrine\\Common\\Inflector\\Inflector;
use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\ParamConverter;
use Symfony\\Bundle\\MakerBundle\\ConsoleStyle;
use Symfony\\Bundle\\MakerBundle\\DependencyBuilder;
use Symfony\\Bundle\\MakerBundle\\Doctrine\\DoctrineHelper;
use Symfony\\Bundle\\MakerBundle\\Generator;
use Symfony\\Bundle\\MakerBundle\\InputConfiguration;
use Symfony\\Bundle\\MakerBundle\\Renderer\\FormTypeRenderer;
use Symfony\\Bundle\\MakerBundle\\Str;
use Symfony\\Bundle\\MakerBundle\\Validator;
use Symfony\\Bundle\\TwigBundle\\TwigBundle;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Question\\Question;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Routing\\Annotation\\Route;
use Symfony\\Component\\Security\\Csrf\\CsrfTokenManager;
use Symfony\\Component\\Validator\\Validation;

/**
 * @author Sadicov Vladimir <sadikoff@gmail.com>
 */
final class MakeCrud extends AbstractMaker
{
    private \$doctrineHelper;

    private \$formTypeRenderer;

    public function __construct(DoctrineHelper \$doctrineHelper, FormTypeRenderer \$formTypeRenderer)
    {
        \$this->doctrineHelper = \$doctrineHelper;
        \$this->formTypeRenderer = \$formTypeRenderer;
    }

    public static function getCommandName(): string
    {
        return 'make:crud';
    }

    /**
     * {@inheritdoc}
     */
    public function configureCommand(Command \$command, InputConfiguration \$inputConfig)
    {
        \$command
            ->setDescription('Creates CRUD for Doctrine entity class')
            ->addArgument('entity-class', InputArgument::OPTIONAL, sprintf('The class name of the entity to create CRUD (e.g. <fg=yellow>%s</>)', Str::asClassName(Str::getRandomTerm())))
            ->setHelp(file_get_contents(__DIR__.'/../Resources/help/MakeCrud.txt'))
        ;

        \$inputConfig->setArgumentAsNonInteractive('entity-class');
    }

    public function interact(InputInterface \$input, ConsoleStyle \$io, Command \$command)
    {
        if (null === \$input->getArgument('entity-class')) {
            \$argument = \$command->getDefinition()->getArgument('entity-class');

            \$entities = \$this->doctrineHelper->getEntitiesForAutocomplete();

            \$question = new Question(\$argument->getDescription());
            \$question->setAutocompleterValues(\$entities);

            \$value = \$io->askQuestion(\$question);

            \$input->setArgument('entity-class', \$value);
        }
    }

    public function generate(InputInterface \$input, ConsoleStyle \$io, Generator \$generator)
    {
        \$entityClassDetails = \$generator->createClassNameDetails(
            Validator::entityExists(\$input->getArgument('entity-class'), \$this->doctrineHelper->getEntitiesForAutocomplete()),
            'Entity\\\\'
        );

        \$entityDoctrineDetails = \$this->doctrineHelper->createDoctrineDetails(\$entityClassDetails->getFullName());

        \$repositoryVars = [];

        if (null !== \$entityDoctrineDetails->getRepositoryClass()) {
            \$repositoryClassDetails = \$generator->createClassNameDetails(
                '\\\\'.\$entityDoctrineDetails->getRepositoryClass(),
                'Repository\\\\',
                'Repository'
            );

            \$repositoryVars = [
                'repository_full_class_name' => \$repositoryClassDetails->getFullName(),
                'repository_class_name' => \$repositoryClassDetails->getShortName(),
                'repository_var' => lcfirst(Inflector::singularize(\$repositoryClassDetails->getShortName())),
            ];
        }

        \$controllerClassDetails = \$generator->createClassNameDetails(
            \$entityClassDetails->getRelativeNameWithoutSuffix().'Controller',
            'Controller\\\\',
            'Controller'
        );

        \$iter = 0;
        do {
            \$formClassDetails = \$generator->createClassNameDetails(
                \$entityClassDetails->getRelativeNameWithoutSuffix().(\$iter ?: '').'Type',
                'Form\\\\',
                'Type'
            );
            ++\$iter;
        } while (class_exists(\$formClassDetails->getFullName()));

        \$entityVarPlural = lcfirst(Inflector::pluralize(\$entityClassDetails->getShortName()));
        \$entityVarSingular = lcfirst(Inflector::singularize(\$entityClassDetails->getShortName()));

        \$entityTwigVarPlural = Str::asTwigVariable(\$entityVarPlural);
        \$entityTwigVarSingular = Str::asTwigVariable(\$entityVarSingular);

        \$routeName = Str::asRouteName(\$controllerClassDetails->getRelativeNameWithoutSuffix());
        \$templatesPath = Str::asFilePath(\$controllerClassDetails->getRelativeNameWithoutSuffix());

        \$generator->generateController(
            \$controllerClassDetails->getFullName(),
            'crud/controller/Controller.tpl.php',
            array_merge([
                    'entity_full_class_name' => \$entityClassDetails->getFullName(),
                    'entity_class_name' => \$entityClassDetails->getShortName(),
                    'form_full_class_name' => \$formClassDetails->getFullName(),
                    'form_class_name' => \$formClassDetails->getShortName(),
                    'route_path' => Str::asRoutePath(\$controllerClassDetails->getRelativeNameWithoutSuffix()),
                    'route_name' => \$routeName,
                    'templates_path' => \$templatesPath,
                    'entity_var_plural' => \$entityVarPlural,
                    'entity_twig_var_plural' => \$entityTwigVarPlural,
                    'entity_var_singular' => \$entityVarSingular,
                    'entity_twig_var_singular' => \$entityTwigVarSingular,
                    'entity_identifier' => \$entityDoctrineDetails->getIdentifier(),
                ],
                \$repositoryVars
            )
        );

        \$this->formTypeRenderer->render(
            \$formClassDetails,
            \$entityDoctrineDetails->getFormFields(),
            \$entityClassDetails
        );

        \$templates = [
            '_delete_form' => [
                'route_name' => \$routeName,
                'entity_twig_var_singular' => \$entityTwigVarSingular,
                'entity_identifier' => \$entityDoctrineDetails->getIdentifier(),
            ],
            '_form' => [],
            'edit' => [
                'entity_class_name' => \$entityClassDetails->getShortName(),
                'entity_twig_var_singular' => \$entityTwigVarSingular,
                'entity_identifier' => \$entityDoctrineDetails->getIdentifier(),
                'route_name' => \$routeName,
            ],
            'index' => [
                'entity_class_name' => \$entityClassDetails->getShortName(),
                'entity_twig_var_plural' => \$entityTwigVarPlural,
                'entity_twig_var_singular' => \$entityTwigVarSingular,
                'entity_identifier' => \$entityDoctrineDetails->getIdentifier(),
                'entity_fields' => \$entityDoctrineDetails->getDisplayFields(),
                'route_name' => \$routeName,
            ],
            'new' => [
                'entity_class_name' => \$entityClassDetails->getShortName(),
                'route_name' => \$routeName,
            ],
            'show' => [
                'entity_class_name' => \$entityClassDetails->getShortName(),
                'entity_twig_var_singular' => \$entityTwigVarSingular,
                'entity_identifier' => \$entityDoctrineDetails->getIdentifier(),
                'entity_fields' => \$entityDoctrineDetails->getDisplayFields(),
                'route_name' => \$routeName,
            ],
        ];

        foreach (\$templates as \$template => \$variables) {
            \$generator->generateTemplate(
                \$templatesPath.'/'.\$template.'.html.twig',
                'crud/templates/'.\$template.'.tpl.php',
                \$variables
            );
        }

        \$generator->writeChanges();

        \$this->writeSuccessMessage(\$io);

        \$io->text(sprintf('Next: Check your new CRUD by going to <fg=yellow>%s/</>', Str::asRoutePath(\$controllerClassDetails->getRelativeNameWithoutSuffix())));
    }

    /**
     * {@inheritdoc}
     */
    public function configureDependencies(DependencyBuilder \$dependencies)
    {
        \$dependencies->addClassDependency(
            Route::class,
            'router'
        );

        \$dependencies->addClassDependency(
            AbstractType::class,
            'form'
        );

        \$dependencies->addClassDependency(
            Validation::class,
            'validator'
        );

        \$dependencies->addClassDependency(
            TwigBundle::class,
            'twig-bundle'
        );

        \$dependencies->addClassDependency(
            DoctrineBundle::class,
            'orm-pack'
        );

        \$dependencies->addClassDependency(
            CsrfTokenManager::class,
            'security-csrf'
        );

        \$dependencies->addClassDependency(
            ParamConverter::class,
            'annotations'
        );
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/maker-bundle/src/Maker/MakeCrud.php";
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
use Doctrine\\Common\\Inflector\\Inflector;
use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\ParamConverter;
use Symfony\\Bundle\\MakerBundle\\ConsoleStyle;
use Symfony\\Bundle\\MakerBundle\\DependencyBuilder;
use Symfony\\Bundle\\MakerBundle\\Doctrine\\DoctrineHelper;
use Symfony\\Bundle\\MakerBundle\\Generator;
use Symfony\\Bundle\\MakerBundle\\InputConfiguration;
use Symfony\\Bundle\\MakerBundle\\Renderer\\FormTypeRenderer;
use Symfony\\Bundle\\MakerBundle\\Str;
use Symfony\\Bundle\\MakerBundle\\Validator;
use Symfony\\Bundle\\TwigBundle\\TwigBundle;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Question\\Question;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Routing\\Annotation\\Route;
use Symfony\\Component\\Security\\Csrf\\CsrfTokenManager;
use Symfony\\Component\\Validator\\Validation;

/**
 * @author Sadicov Vladimir <sadikoff@gmail.com>
 */
final class MakeCrud extends AbstractMaker
{
    private \$doctrineHelper;

    private \$formTypeRenderer;

    public function __construct(DoctrineHelper \$doctrineHelper, FormTypeRenderer \$formTypeRenderer)
    {
        \$this->doctrineHelper = \$doctrineHelper;
        \$this->formTypeRenderer = \$formTypeRenderer;
    }

    public static function getCommandName(): string
    {
        return 'make:crud';
    }

    /**
     * {@inheritdoc}
     */
    public function configureCommand(Command \$command, InputConfiguration \$inputConfig)
    {
        \$command
            ->setDescription('Creates CRUD for Doctrine entity class')
            ->addArgument('entity-class', InputArgument::OPTIONAL, sprintf('The class name of the entity to create CRUD (e.g. <fg=yellow>%s</>)', Str::asClassName(Str::getRandomTerm())))
            ->setHelp(file_get_contents(__DIR__.'/../Resources/help/MakeCrud.txt'))
        ;

        \$inputConfig->setArgumentAsNonInteractive('entity-class');
    }

    public function interact(InputInterface \$input, ConsoleStyle \$io, Command \$command)
    {
        if (null === \$input->getArgument('entity-class')) {
            \$argument = \$command->getDefinition()->getArgument('entity-class');

            \$entities = \$this->doctrineHelper->getEntitiesForAutocomplete();

            \$question = new Question(\$argument->getDescription());
            \$question->setAutocompleterValues(\$entities);

            \$value = \$io->askQuestion(\$question);

            \$input->setArgument('entity-class', \$value);
        }
    }

    public function generate(InputInterface \$input, ConsoleStyle \$io, Generator \$generator)
    {
        \$entityClassDetails = \$generator->createClassNameDetails(
            Validator::entityExists(\$input->getArgument('entity-class'), \$this->doctrineHelper->getEntitiesForAutocomplete()),
            'Entity\\\\'
        );

        \$entityDoctrineDetails = \$this->doctrineHelper->createDoctrineDetails(\$entityClassDetails->getFullName());

        \$repositoryVars = [];

        if (null !== \$entityDoctrineDetails->getRepositoryClass()) {
            \$repositoryClassDetails = \$generator->createClassNameDetails(
                '\\\\'.\$entityDoctrineDetails->getRepositoryClass(),
                'Repository\\\\',
                'Repository'
            );

            \$repositoryVars = [
                'repository_full_class_name' => \$repositoryClassDetails->getFullName(),
                'repository_class_name' => \$repositoryClassDetails->getShortName(),
                'repository_var' => lcfirst(Inflector::singularize(\$repositoryClassDetails->getShortName())),
            ];
        }

        \$controllerClassDetails = \$generator->createClassNameDetails(
            \$entityClassDetails->getRelativeNameWithoutSuffix().'Controller',
            'Controller\\\\',
            'Controller'
        );

        \$iter = 0;
        do {
            \$formClassDetails = \$generator->createClassNameDetails(
                \$entityClassDetails->getRelativeNameWithoutSuffix().(\$iter ?: '').'Type',
                'Form\\\\',
                'Type'
            );
            ++\$iter;
        } while (class_exists(\$formClassDetails->getFullName()));

        \$entityVarPlural = lcfirst(Inflector::pluralize(\$entityClassDetails->getShortName()));
        \$entityVarSingular = lcfirst(Inflector::singularize(\$entityClassDetails->getShortName()));

        \$entityTwigVarPlural = Str::asTwigVariable(\$entityVarPlural);
        \$entityTwigVarSingular = Str::asTwigVariable(\$entityVarSingular);

        \$routeName = Str::asRouteName(\$controllerClassDetails->getRelativeNameWithoutSuffix());
        \$templatesPath = Str::asFilePath(\$controllerClassDetails->getRelativeNameWithoutSuffix());

        \$generator->generateController(
            \$controllerClassDetails->getFullName(),
            'crud/controller/Controller.tpl.php',
            array_merge([
                    'entity_full_class_name' => \$entityClassDetails->getFullName(),
                    'entity_class_name' => \$entityClassDetails->getShortName(),
                    'form_full_class_name' => \$formClassDetails->getFullName(),
                    'form_class_name' => \$formClassDetails->getShortName(),
                    'route_path' => Str::asRoutePath(\$controllerClassDetails->getRelativeNameWithoutSuffix()),
                    'route_name' => \$routeName,
                    'templates_path' => \$templatesPath,
                    'entity_var_plural' => \$entityVarPlural,
                    'entity_twig_var_plural' => \$entityTwigVarPlural,
                    'entity_var_singular' => \$entityVarSingular,
                    'entity_twig_var_singular' => \$entityTwigVarSingular,
                    'entity_identifier' => \$entityDoctrineDetails->getIdentifier(),
                ],
                \$repositoryVars
            )
        );

        \$this->formTypeRenderer->render(
            \$formClassDetails,
            \$entityDoctrineDetails->getFormFields(),
            \$entityClassDetails
        );

        \$templates = [
            '_delete_form' => [
                'route_name' => \$routeName,
                'entity_twig_var_singular' => \$entityTwigVarSingular,
                'entity_identifier' => \$entityDoctrineDetails->getIdentifier(),
            ],
            '_form' => [],
            'edit' => [
                'entity_class_name' => \$entityClassDetails->getShortName(),
                'entity_twig_var_singular' => \$entityTwigVarSingular,
                'entity_identifier' => \$entityDoctrineDetails->getIdentifier(),
                'route_name' => \$routeName,
            ],
            'index' => [
                'entity_class_name' => \$entityClassDetails->getShortName(),
                'entity_twig_var_plural' => \$entityTwigVarPlural,
                'entity_twig_var_singular' => \$entityTwigVarSingular,
                'entity_identifier' => \$entityDoctrineDetails->getIdentifier(),
                'entity_fields' => \$entityDoctrineDetails->getDisplayFields(),
                'route_name' => \$routeName,
            ],
            'new' => [
                'entity_class_name' => \$entityClassDetails->getShortName(),
                'route_name' => \$routeName,
            ],
            'show' => [
                'entity_class_name' => \$entityClassDetails->getShortName(),
                'entity_twig_var_singular' => \$entityTwigVarSingular,
                'entity_identifier' => \$entityDoctrineDetails->getIdentifier(),
                'entity_fields' => \$entityDoctrineDetails->getDisplayFields(),
                'route_name' => \$routeName,
            ],
        ];

        foreach (\$templates as \$template => \$variables) {
            \$generator->generateTemplate(
                \$templatesPath.'/'.\$template.'.html.twig',
                'crud/templates/'.\$template.'.tpl.php',
                \$variables
            );
        }

        \$generator->writeChanges();

        \$this->writeSuccessMessage(\$io);

        \$io->text(sprintf('Next: Check your new CRUD by going to <fg=yellow>%s/</>', Str::asRoutePath(\$controllerClassDetails->getRelativeNameWithoutSuffix())));
    }

    /**
     * {@inheritdoc}
     */
    public function configureDependencies(DependencyBuilder \$dependencies)
    {
        \$dependencies->addClassDependency(
            Route::class,
            'router'
        );

        \$dependencies->addClassDependency(
            AbstractType::class,
            'form'
        );

        \$dependencies->addClassDependency(
            Validation::class,
            'validator'
        );

        \$dependencies->addClassDependency(
            TwigBundle::class,
            'twig-bundle'
        );

        \$dependencies->addClassDependency(
            DoctrineBundle::class,
            'orm-pack'
        );

        \$dependencies->addClassDependency(
            CsrfTokenManager::class,
            'security-csrf'
        );

        \$dependencies->addClassDependency(
            ParamConverter::class,
            'annotations'
        );
    }
}
", "vendor/symfony/maker-bundle/src/Maker/MakeCrud.php", "/var/www/public/DevLaon/templates/vendor/symfony/maker-bundle/src/Maker/MakeCrud.php");
    }
}
