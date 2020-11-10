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

/* vendor/symfony/maker-bundle/src/Maker/MakeRegistrationForm.php */
class __TwigTemplate_6584e00af373afef973250f5d51fb248b2d27f18c19bf69ab4f731a16a6f4260 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Maker/MakeRegistrationForm.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Maker/MakeRegistrationForm.php"));

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
use Doctrine\\Common\\Annotations\\Annotation;
use Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntity;
use Symfony\\Bundle\\MakerBundle\\ConsoleStyle;
use Symfony\\Bundle\\MakerBundle\\DependencyBuilder;
use Symfony\\Bundle\\MakerBundle\\Exception\\RuntimeCommandException;
use Symfony\\Bundle\\MakerBundle\\FileManager;
use Symfony\\Bundle\\MakerBundle\\Generator;
use Symfony\\Bundle\\MakerBundle\\InputConfiguration;
use Symfony\\Bundle\\MakerBundle\\Renderer\\FormTypeRenderer;
use Symfony\\Bundle\\MakerBundle\\Security\\InteractiveSecurityHelper;
use Symfony\\Bundle\\MakerBundle\\Str;
use Symfony\\Bundle\\MakerBundle\\Util\\ClassDetails;
use Symfony\\Bundle\\MakerBundle\\Util\\ClassNameDetails;
use Symfony\\Bundle\\MakerBundle\\Util\\ClassSourceManipulator;
use Symfony\\Bundle\\MakerBundle\\Util\\YamlSourceManipulator;
use Symfony\\Bundle\\SecurityBundle\\SecurityBundle;
use Symfony\\Bundle\\TwigBundle\\TwigBundle;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\CheckboxType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\PasswordType;
use Symfony\\Component\\Routing\\RouterInterface;
use Symfony\\Component\\Validator\\Validation;

/**
 * @author Ryan Weaver <ryan@symfonycasts.com>
 *
 * @internal
 */
final class MakeRegistrationForm extends AbstractMaker
{
    private \$fileManager;

    private \$formTypeRenderer;

    private \$router;

    public function __construct(FileManager \$fileManager, FormTypeRenderer \$formTypeRenderer, RouterInterface \$router)
    {
        \$this->fileManager = \$fileManager;
        \$this->formTypeRenderer = \$formTypeRenderer;
        \$this->router = \$router;
    }

    public static function getCommandName(): string
    {
        return 'make:register-form';
    }

    public function configureCommand(Command \$command, InputConfiguration \$inputConf)
    {
        \$command
            ->setDescription('Creates a new register form system')
            ->setHelp(file_get_contents(__DIR__.'/../Resources/help/MakeRegistrationForm.AideTxt'))
        ;
    }

    public function interact(InputInterface \$input, ConsoleStyle \$io, Command \$command)
    {
        // initialize arguments & commands that are internal (i.e. meant only to be asked)
        \$command
            ->addArgument('user-class')
            ->addArgument('username-field')
            ->addArgument('password-field')
            ->addOption('auto-login-authenticator')
            ->addOption('firewall-name')
            ->addOption('redirect-route-name')
            ->addOption('add-unique-entity-constraint')
        ;

        \$interactiveSecurityHelper = new InteractiveSecurityHelper();

        if (!\$this->fileManager->fileExists(\$path = 'config/packages/security.yaml')) {
            throw new RuntimeCommandException('The file \"config/packages/security.yaml\" does not exist. This command needs that file to accurately build your register form.');
        }

        \$manipulator = new YamlSourceManipulator(\$this->fileManager->getFileContents(\$path));
        \$securityData = \$manipulator->getData();
        \$providersData = \$securityData['security']['providers'] ?? [];

        \$input->setArgument(
            'user-class',
            \$userClass = \$interactiveSecurityHelper->guessUserClass(
                \$io,
                \$providersData,
                'Enter the User class that you want to create during register (e.g. <fg=yellow>App\\\\Entity\\\\User</>)'
            )
        );
        \$io->text(sprintf('Creating a register form for <info>%s</info>', \$userClass));

        \$input->setArgument(
            'username-field',
            \$interactiveSecurityHelper->guessUserNameField(\$io, \$userClass, \$providersData)
        );

        \$input->setArgument(
            'password-field',
            \$interactiveSecurityHelper->guessPasswordField(\$io, \$userClass)
        );

        // see if it makes sense to add the UniqueEntity constraint
        \$userClassDetails = new ClassDetails(\$userClass);
        \$addAnnotation = false;
        if (!\$userClassDetails->doesDocBlockContainAnnotation('@UniqueEntity')) {
            \$addAnnotation = \$io->confirm(sprintf('Do you want to add a <comment>@UniqueEntity</comment> validation annotation on your <comment>%s</comment> class to make sure duplicate accounts aren\\'t created?', Str::getShortClassName(\$userClass)));
        }
        \$input->setOption(
            'add-unique-entity-constraint',
            \$addAnnotation
        );

        if (\$io->confirm('Do you want to automatically authenticate the user after register?')) {
            \$this->interactAuthenticatorQuestions(
                \$input,
                \$io,
                \$interactiveSecurityHelper,
                \$securityData,
                \$command
            );
        } else {
            \$routeNames = array_keys(\$this->router->getRouteCollection()->all());
            \$input->setOption(
                'redirect-route-name',
                \$io->choice(
                    'What route should the user be redirected to after register?',
                    \$routeNames
                )
            );
        }
    }

    private function interactAuthenticatorQuestions(InputInterface \$input, ConsoleStyle \$io, InteractiveSecurityHelper \$interactiveSecurityHelper, array \$securityData, Command \$command)
    {
        \$firewallsData = \$securityData['security']['firewalls'] ?? [];
        \$firewallName = \$interactiveSecurityHelper->guessFirewallName(
            \$io,
            \$securityData,
            'Which firewall key in security.yaml holds the authenticator you want to use for logging in?'
        );

        if (!isset(\$firewallsData[\$firewallName])) {
            \$io->note('No firewalls found - skipping authentication after register. You might want to configure your security before running this command.');

            return;
        }

        \$input->setOption('firewall-name', \$firewallName);

        // get list of guard authenticators
        \$authenticatorClasses = \$interactiveSecurityHelper->getAuthenticatorClasses(\$firewallsData[\$firewallName]);
        if (empty(\$authenticatorClasses)) {
            \$io->note('No Guard authenticators found - so your user won\\'t be automatically authenticated after registering.');
        } else {
            \$input->setOption(
                'auto-login-authenticator',
                1 === \\count(\$authenticatorClasses) ? \$authenticatorClasses[0] : \$io->choice(
                    'Which authenticator\\'s onAuthenticationSuccess() should be used after logging in?',
                    \$authenticatorClasses
                )
            );
        }
    }

    public function generate(InputInterface \$input, ConsoleStyle \$io, Generator \$generator)
    {
        \$userClass = \$input->getArgument('user-class');
        \$userClassNameDetails = \$generator->createClassNameDetails(
            '\\\\'.\$userClass,
            'Entity\\\\'
        );

        // 1) Generate the form class
        \$usernameField = \$input->getArgument('username-field');
        \$formClassDetails = \$this->generateFormClass(
            \$userClassNameDetails,
            \$generator,
            \$usernameField
        );

        // 2) Generate the controller
        \$controllerClassNameDetails = \$generator->createClassNameDetails(
            'RegistrationController',
            'Controller\\\\'
        );

        \$authenticatorClassName = \$input->getOption('auto-login-authenticator');
        \$generator->generateController(
            \$controllerClassNameDetails->getFullName(),
            'register/RegistrationController.tpl.php',
            [
                'route_path' => '/register',
                'route_name' => 'app_register',
                'form_class_name' => \$formClassDetails->getShortName(),
                'form_full_class_name' => \$formClassDetails->getFullName(),
                'user_class_name' => \$userClassNameDetails->getShortName(),
                'user_full_class_name' => \$userClassNameDetails->getFullName(),
                'password_field' => \$input->getArgument('password-field'),
                'authenticator_class_name' => \$authenticatorClassName ? Str::getShortClassName(\$authenticatorClassName) : null,
                'authenticator_full_class_name' => \$authenticatorClassName,
                'firewall_name' => \$input->getOption('firewall-name'),
                'redirect_route_name' => \$input->getOption('redirect-route-name'),
            ]
        );

        // 3) Generate the template
        \$generator->generateTemplate(
            'register/register.html.twig',
            'register/twig_template.tpl.php',
            [
                'username_field' => \$usernameField,
            ]
        );

        // 4) Update the User class if necessary
        if (\$input->getOption('add-unique-entity-constraint')) {
            \$classDetails = new ClassDetails(\$userClass);
            \$userManipulator = new ClassSourceManipulator(
                file_get_contents(\$classDetails->getPath())
            );
            \$userManipulator->setIo(\$io);

            \$userManipulator->addAnnotationToClass(
                UniqueEntity::class,
                [
                    'fields' => [\$usernameField],
                    'message' => sprintf('There is already an account with this '.\$usernameField),
                ]
            );
            \$this->fileManager->dumpFile(\$classDetails->getPath(), \$userManipulator->getSourceCode());
        }

        \$generator->writeChanges();

        \$this->writeSuccessMessage(\$io);
        \$io->text('Next: Go to /register to check out your new form!');
        \$io->text('Make any changes you need to the form, controller & template.');
    }

    public function configureDependencies(DependencyBuilder \$dependencies)
    {
        \$dependencies->addClassDependency(
            Annotation::class,
            'doctrine/annotations'
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
            SecurityBundle::class,
            'security'
        );
    }

    private function generateFormClass(ClassNameDetails \$userClassDetails, Generator \$generator, string \$usernameField)
    {
        \$formClassDetails = \$generator->createClassNameDetails(
            'RegistrationFormType',
            'Form\\\\'
        );

        \$formFields = [
            \$usernameField => null,
            'agreeTerms' => [
                'type' => CheckboxType::class,
                'options_code' => <<<EOF
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'You should agree to our terms.',
                    ]),
                ],
EOF
            ],
            'plainPassword' => [
                'type' => PasswordType::class,
                'options_code' => <<<EOF
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'mapped' => false,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a password',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Your password should be at least ";
        // line 319
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 319, $this->source); })()), "html", null, true);
        echo " characters',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                ],
EOF
            ],
        ];

        \$this->formTypeRenderer->render(
            \$formClassDetails,
            \$formFields,
            \$userClassDetails,
            [
                'Symfony\\Component\\Validator\\Constraints\\IsTrue',
                'Symfony\\Component\\Validator\\Constraints\\Length',
                'Symfony\\Component\\Validator\\Constraints\\NotBlank',
            ]
        );

        return \$formClassDetails;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/maker-bundle/src/Maker/MakeRegistrationForm.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  363 => 319,  43 => 1,);
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
use Doctrine\\Common\\Annotations\\Annotation;
use Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntity;
use Symfony\\Bundle\\MakerBundle\\ConsoleStyle;
use Symfony\\Bundle\\MakerBundle\\DependencyBuilder;
use Symfony\\Bundle\\MakerBundle\\Exception\\RuntimeCommandException;
use Symfony\\Bundle\\MakerBundle\\FileManager;
use Symfony\\Bundle\\MakerBundle\\Generator;
use Symfony\\Bundle\\MakerBundle\\InputConfiguration;
use Symfony\\Bundle\\MakerBundle\\Renderer\\FormTypeRenderer;
use Symfony\\Bundle\\MakerBundle\\Security\\InteractiveSecurityHelper;
use Symfony\\Bundle\\MakerBundle\\Str;
use Symfony\\Bundle\\MakerBundle\\Util\\ClassDetails;
use Symfony\\Bundle\\MakerBundle\\Util\\ClassNameDetails;
use Symfony\\Bundle\\MakerBundle\\Util\\ClassSourceManipulator;
use Symfony\\Bundle\\MakerBundle\\Util\\YamlSourceManipulator;
use Symfony\\Bundle\\SecurityBundle\\SecurityBundle;
use Symfony\\Bundle\\TwigBundle\\TwigBundle;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\CheckboxType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\PasswordType;
use Symfony\\Component\\Routing\\RouterInterface;
use Symfony\\Component\\Validator\\Validation;

/**
 * @author Ryan Weaver <ryan@symfonycasts.com>
 *
 * @internal
 */
final class MakeRegistrationForm extends AbstractMaker
{
    private \$fileManager;

    private \$formTypeRenderer;

    private \$router;

    public function __construct(FileManager \$fileManager, FormTypeRenderer \$formTypeRenderer, RouterInterface \$router)
    {
        \$this->fileManager = \$fileManager;
        \$this->formTypeRenderer = \$formTypeRenderer;
        \$this->router = \$router;
    }

    public static function getCommandName(): string
    {
        return 'make:register-form';
    }

    public function configureCommand(Command \$command, InputConfiguration \$inputConf)
    {
        \$command
            ->setDescription('Creates a new register form system')
            ->setHelp(file_get_contents(__DIR__.'/../Resources/help/MakeRegistrationForm.txt'))
        ;
    }

    public function interact(InputInterface \$input, ConsoleStyle \$io, Command \$command)
    {
        // initialize arguments & commands that are internal (i.e. meant only to be asked)
        \$command
            ->addArgument('user-class')
            ->addArgument('username-field')
            ->addArgument('password-field')
            ->addOption('auto-login-authenticator')
            ->addOption('firewall-name')
            ->addOption('redirect-route-name')
            ->addOption('add-unique-entity-constraint')
        ;

        \$interactiveSecurityHelper = new InteractiveSecurityHelper();

        if (!\$this->fileManager->fileExists(\$path = 'config/packages/security.yaml')) {
            throw new RuntimeCommandException('The file \"config/packages/security.yaml\" does not exist. This command needs that file to accurately build your register form.');
        }

        \$manipulator = new YamlSourceManipulator(\$this->fileManager->getFileContents(\$path));
        \$securityData = \$manipulator->getData();
        \$providersData = \$securityData['security']['providers'] ?? [];

        \$input->setArgument(
            'user-class',
            \$userClass = \$interactiveSecurityHelper->guessUserClass(
                \$io,
                \$providersData,
                'Enter the User class that you want to create during register (e.g. <fg=yellow>App\\\\Entity\\\\User</>)'
            )
        );
        \$io->text(sprintf('Creating a register form for <info>%s</info>', \$userClass));

        \$input->setArgument(
            'username-field',
            \$interactiveSecurityHelper->guessUserNameField(\$io, \$userClass, \$providersData)
        );

        \$input->setArgument(
            'password-field',
            \$interactiveSecurityHelper->guessPasswordField(\$io, \$userClass)
        );

        // see if it makes sense to add the UniqueEntity constraint
        \$userClassDetails = new ClassDetails(\$userClass);
        \$addAnnotation = false;
        if (!\$userClassDetails->doesDocBlockContainAnnotation('@UniqueEntity')) {
            \$addAnnotation = \$io->confirm(sprintf('Do you want to add a <comment>@UniqueEntity</comment> validation annotation on your <comment>%s</comment> class to make sure duplicate accounts aren\\'t created?', Str::getShortClassName(\$userClass)));
        }
        \$input->setOption(
            'add-unique-entity-constraint',
            \$addAnnotation
        );

        if (\$io->confirm('Do you want to automatically authenticate the user after register?')) {
            \$this->interactAuthenticatorQuestions(
                \$input,
                \$io,
                \$interactiveSecurityHelper,
                \$securityData,
                \$command
            );
        } else {
            \$routeNames = array_keys(\$this->router->getRouteCollection()->all());
            \$input->setOption(
                'redirect-route-name',
                \$io->choice(
                    'What route should the user be redirected to after register?',
                    \$routeNames
                )
            );
        }
    }

    private function interactAuthenticatorQuestions(InputInterface \$input, ConsoleStyle \$io, InteractiveSecurityHelper \$interactiveSecurityHelper, array \$securityData, Command \$command)
    {
        \$firewallsData = \$securityData['security']['firewalls'] ?? [];
        \$firewallName = \$interactiveSecurityHelper->guessFirewallName(
            \$io,
            \$securityData,
            'Which firewall key in security.yaml holds the authenticator you want to use for logging in?'
        );

        if (!isset(\$firewallsData[\$firewallName])) {
            \$io->note('No firewalls found - skipping authentication after register. You might want to configure your security before running this command.');

            return;
        }

        \$input->setOption('firewall-name', \$firewallName);

        // get list of guard authenticators
        \$authenticatorClasses = \$interactiveSecurityHelper->getAuthenticatorClasses(\$firewallsData[\$firewallName]);
        if (empty(\$authenticatorClasses)) {
            \$io->note('No Guard authenticators found - so your user won\\'t be automatically authenticated after registering.');
        } else {
            \$input->setOption(
                'auto-login-authenticator',
                1 === \\count(\$authenticatorClasses) ? \$authenticatorClasses[0] : \$io->choice(
                    'Which authenticator\\'s onAuthenticationSuccess() should be used after logging in?',
                    \$authenticatorClasses
                )
            );
        }
    }

    public function generate(InputInterface \$input, ConsoleStyle \$io, Generator \$generator)
    {
        \$userClass = \$input->getArgument('user-class');
        \$userClassNameDetails = \$generator->createClassNameDetails(
            '\\\\'.\$userClass,
            'Entity\\\\'
        );

        // 1) Generate the form class
        \$usernameField = \$input->getArgument('username-field');
        \$formClassDetails = \$this->generateFormClass(
            \$userClassNameDetails,
            \$generator,
            \$usernameField
        );

        // 2) Generate the controller
        \$controllerClassNameDetails = \$generator->createClassNameDetails(
            'RegistrationController',
            'Controller\\\\'
        );

        \$authenticatorClassName = \$input->getOption('auto-login-authenticator');
        \$generator->generateController(
            \$controllerClassNameDetails->getFullName(),
            'register/RegistrationController.tpl.php',
            [
                'route_path' => '/register',
                'route_name' => 'app_register',
                'form_class_name' => \$formClassDetails->getShortName(),
                'form_full_class_name' => \$formClassDetails->getFullName(),
                'user_class_name' => \$userClassNameDetails->getShortName(),
                'user_full_class_name' => \$userClassNameDetails->getFullName(),
                'password_field' => \$input->getArgument('password-field'),
                'authenticator_class_name' => \$authenticatorClassName ? Str::getShortClassName(\$authenticatorClassName) : null,
                'authenticator_full_class_name' => \$authenticatorClassName,
                'firewall_name' => \$input->getOption('firewall-name'),
                'redirect_route_name' => \$input->getOption('redirect-route-name'),
            ]
        );

        // 3) Generate the template
        \$generator->generateTemplate(
            'register/register.html.twig',
            'register/twig_template.tpl.php',
            [
                'username_field' => \$usernameField,
            ]
        );

        // 4) Update the User class if necessary
        if (\$input->getOption('add-unique-entity-constraint')) {
            \$classDetails = new ClassDetails(\$userClass);
            \$userManipulator = new ClassSourceManipulator(
                file_get_contents(\$classDetails->getPath())
            );
            \$userManipulator->setIo(\$io);

            \$userManipulator->addAnnotationToClass(
                UniqueEntity::class,
                [
                    'fields' => [\$usernameField],
                    'message' => sprintf('There is already an account with this '.\$usernameField),
                ]
            );
            \$this->fileManager->dumpFile(\$classDetails->getPath(), \$userManipulator->getSourceCode());
        }

        \$generator->writeChanges();

        \$this->writeSuccessMessage(\$io);
        \$io->text('Next: Go to /register to check out your new form!');
        \$io->text('Make any changes you need to the form, controller & template.');
    }

    public function configureDependencies(DependencyBuilder \$dependencies)
    {
        \$dependencies->addClassDependency(
            Annotation::class,
            'doctrine/annotations'
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
            SecurityBundle::class,
            'security'
        );
    }

    private function generateFormClass(ClassNameDetails \$userClassDetails, Generator \$generator, string \$usernameField)
    {
        \$formClassDetails = \$generator->createClassNameDetails(
            'RegistrationFormType',
            'Form\\\\'
        );

        \$formFields = [
            \$usernameField => null,
            'agreeTerms' => [
                'type' => CheckboxType::class,
                'options_code' => <<<EOF
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'You should agree to our terms.',
                    ]),
                ],
EOF
            ],
            'plainPassword' => [
                'type' => PasswordType::class,
                'options_code' => <<<EOF
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'mapped' => false,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a password',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Your password should be at least {{ limit }} characters',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                ],
EOF
            ],
        ];

        \$this->formTypeRenderer->render(
            \$formClassDetails,
            \$formFields,
            \$userClassDetails,
            [
                'Symfony\\Component\\Validator\\Constraints\\IsTrue',
                'Symfony\\Component\\Validator\\Constraints\\Length',
                'Symfony\\Component\\Validator\\Constraints\\NotBlank',
            ]
        );

        return \$formClassDetails;
    }
}
", "vendor/symfony/maker-bundle/src/Maker/MakeRegistrationForm.php", "/var/www/public/DevLaon/templates/vendor/symfony/maker-bundle/src/Maker/MakeRegistrationForm.php");
    }
}
