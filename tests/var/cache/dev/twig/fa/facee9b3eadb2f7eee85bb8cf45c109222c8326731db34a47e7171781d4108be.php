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

/* var/cache/dev/srcApp_KernelDevDebugContainerCompiler.log */
class __TwigTemplate_81664c9384d14c70fd38e2d6e97cc2159efbbab6825d81678b90a536f0d328ed extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/srcApp_KernelDevDebugContainerCompiler.log"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/srcApp_KernelDevDebugContainerCompiler.log"));

        // line 1
        echo "Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \".instanceof.Symfony\\Contracts\\Service\\ServiceSubscriberInterface.0.App\\Controller\\ArticleController\" (parent: .abstract.instanceof.App\\Controller\\ArticleController).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \".instanceof.Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController.0.App\\Controller\\ArticleController\" (parent: .instanceof.Symfony\\Contracts\\Service\\ServiceSubscriberInterface.0.App\\Controller\\ArticleController).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"App\\Controller\\ArticleController\" (parent: .instanceof.Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController.0.App\\Controller\\ArticleController).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \".instanceof.Symfony\\Contracts\\Service\\ServiceSubscriberInterface.0.App\\Controller\\SecurityController\" (parent: .abstract.instanceof.App\\Controller\\SecurityController).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \".instanceof.Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController.0.App\\Controller\\SecurityController\" (parent: .instanceof.Symfony\\Contracts\\Service\\ServiceSubscriberInterface.0.App\\Controller\\SecurityController).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"App\\Controller\\SecurityController\" (parent: .instanceof.Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController.0.App\\Controller\\SecurityController).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \".instanceof.Doctrine\\Bundle\\FixturesBundle\\ORMFixtureInterface.0.App\\DataFixtures\\AppFixtures\" (parent: .abstract.instanceof.App\\DataFixtures\\AppFixtures).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"App\\DataFixtures\\AppFixtures\" (parent: .instanceof.Doctrine\\Bundle\\FixturesBundle\\ORMFixtureInterface.0.App\\DataFixtures\\AppFixtures).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \".instanceof.Symfony\\Component\\Form\\FormTypeInterface.0.App\\Form\\ArticleType\" (parent: .abstract.instanceof.App\\Form\\ArticleType).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"App\\Form\\ArticleType\" (parent: .instanceof.Symfony\\Component\\Form\\FormTypeInterface.0.App\\Form\\ArticleType).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \".instanceof.Symfony\\Component\\Form\\FormTypeInterface.0.App\\Form\\CommentType\" (parent: .abstract.instanceof.App\\Form\\CommentType).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"App\\Form\\CommentType\" (parent: .instanceof.Symfony\\Component\\Form\\FormTypeInterface.0.App\\Form\\CommentType).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \".instanceof.Symfony\\Component\\Form\\FormTypeInterface.0.App\\Form\\RegistrationType\" (parent: .abstract.instanceof.App\\Form\\RegistrationType).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"App\\Form\\RegistrationType\" (parent: .instanceof.Symfony\\Component\\Form\\FormTypeInterface.0.App\\Form\\RegistrationType).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \".instanceof.Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepositoryInterface.0.App\\Repository\\ArticleLikeRepository\" (parent: .abstract.instanceof.App\\Repository\\ArticleLikeRepository).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"App\\Repository\\ArticleLikeRepository\" (parent: .instanceof.Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepositoryInterface.0.App\\Repository\\ArticleLikeRepository).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \".instanceof.Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepositoryInterface.0.App\\Repository\\ArticleRepository\" (parent: .abstract.instanceof.App\\Repository\\ArticleRepository).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"App\\Repository\\ArticleRepository\" (parent: .instanceof.Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepositoryInterface.0.App\\Repository\\ArticleRepository).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \".instanceof.Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepositoryInterface.0.App\\Repository\\CategoryRepository\" (parent: .abstract.instanceof.App\\Repository\\CategoryRepository).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"App\\Repository\\CategoryRepository\" (parent: .instanceof.Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepositoryInterface.0.App\\Repository\\CategoryRepository).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \".instanceof.Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepositoryInterface.0.App\\Repository\\CommentRepository\" (parent: .abstract.instanceof.App\\Repository\\CommentRepository).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"App\\Repository\\CommentRepository\" (parent: .instanceof.Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepositoryInterface.0.App\\Repository\\CommentRepository).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \".instanceof.Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepositoryInterface.0.App\\Repository\\UserRepository\" (parent: .abstract.instanceof.App\\Repository\\UserRepository).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"App\\Repository\\UserRepository\" (parent: .instanceof.Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepositoryInterface.0.App\\Repository\\UserRepository).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"cache.app\" (parent: cache.adapter.filesystem).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"cache.system\" (parent: cache.adapter.system).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"cache.validator\" (parent: cache.system).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"cache.serializer\" (parent: cache.system).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"cache.annotations\" (parent: cache.system).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"cache.property_info\" (parent: cache.system).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"cache.messenger.restart_workers_signal\" (parent: cache.app).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"cache.system_clearer\" (parent: cache.default_clearer).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"cache.global_clearer\" (parent: cache.default_clearer).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"assets._default_package\" (parent: assets.path_package).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"doctrine.dbal.default_connection.configuration\" (parent: doctrine.dbal.connection.configuration).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"doctrine.dbal.logger.profiling.default\" (parent: doctrine.dbal.logger.profiling).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"doctrine.dbal.logger.chain.default\" (parent: doctrine.dbal.logger.chain).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"doctrine.dbal.default_connection.event_manager\" (parent: doctrine.dbal.connection.event_manager).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"doctrine.dbal.default_connection\" (parent: doctrine.dbal.connection).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"doctrine.orm.default_configuration\" (parent: doctrine.orm.configuration).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"doctrine_cache.providers.doctrine.orm.default_metadata_cache\" (parent: doctrine_cache.abstract.array).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"doctrine_cache.providers.doctrine.orm.default_result_cache\" (parent: doctrine_cache.abstract.array).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"doctrine_cache.providers.doctrine.orm.default_query_cache\" (parent: doctrine_cache.abstract.array).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"doctrine.orm.default_manager_configurator\" (parent: doctrine.orm.manager_configurator.abstract).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"doctrine.orm.default_entity_manager\" (parent: doctrine.orm.entity_manager.abstract).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"cache.security_expression_language\" (parent: cache.system).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"security.authentication.listener.form\" (parent: security.authentication.listener.abstract).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"security.authentication.listener.simple_form\" (parent: security.authentication.listener.abstract).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"security.authentication.rememberme.services.persistent\" (parent: security.authentication.rememberme.services.abstract).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"security.authentication.rememberme.services.simplehash\" (parent: security.authentication.rememberme.services.abstract).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"security.user.provider.concrete.our_db_provider\" (parent: doctrine.orm.security.user.provider).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"security.firewall.map.config.main\" (parent: security.firewall.config).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"security.context_listener.0\" (parent: security.context_listener).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"security.logout_listener.main\" (parent: security.logout_listener).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"security.logout.success_handler.main\" (parent: security.logout.success_handler).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"security.authentication.provider.dao.main\" (parent: security.authentication.provider.dao).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"security.authentication.success_handler.main.form_login\" (parent: security.authentication.success_handler).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"security.authentication.failure_handler.main.form_login\" (parent: security.authentication.failure_handler).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"security.authentication.listener.form.main\" (parent: security.authentication.listener.form).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"security.authentication.form_entry_point.main\" (parent: security.authentication.form_entry_point).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"security.authentication.listener.basic.main\" (parent: security.authentication.listener.basic).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"security.authentication.listener.anonymous.main\" (parent: security.authentication.listener.anonymous).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"security.authentication.provider.anonymous.main\" (parent: security.authentication.provider.anonymous).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"security.exception_listener.main\" (parent: security.exception_listener).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"security.firewall.map.context.main\" (parent: security.firewall.context).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"swiftmailer.mailer.default.transport.eventdispatcher\" (parent: swiftmailer.transport.eventdispatcher.abstract).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"swiftmailer.mailer.default\" (parent: swiftmailer.mailer.abstract).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"swiftmailer.mailer.default.spool.memory\" (parent: swiftmailer.spool.memory.abstract).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"swiftmailer.mailer.default.transport.spool\" (parent: swiftmailer.transport.spool.abstract).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"swiftmailer.mailer.default.plugin.messagelogger\" (parent: swiftmailer.plugin.messagelogger.abstract).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"monolog.logger\" (parent: monolog.logger_prototype).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"maker.auto_command.make_auth\" (parent: maker.auto_command.abstract).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"maker.auto_command.make_command\" (parent: maker.auto_command.abstract).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"maker.auto_command.make_controller\" (parent: maker.auto_command.abstract).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"maker.auto_command.make_crud\" (parent: maker.auto_command.abstract).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"maker.auto_command.make_entity\" (parent: maker.auto_command.abstract).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"maker.auto_command.make_fixtures\" (parent: maker.auto_command.abstract).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"maker.auto_command.make_form\" (parent: maker.auto_command.abstract).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"maker.auto_command.make_functional_test\" (parent: maker.auto_command.abstract).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"maker.auto_command.make_registration_form\" (parent: maker.auto_command.abstract).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"maker.auto_command.make_serializer_encoder\" (parent: maker.auto_command.abstract).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"maker.auto_command.make_serializer_normalizer\" (parent: maker.auto_command.abstract).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"maker.auto_command.make_subscriber\" (parent: maker.auto_command.abstract).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"maker.auto_command.make_twig_extension\" (parent: maker.auto_command.abstract).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"maker.auto_command.make_unit_test\" (parent: maker.auto_command.abstract).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"maker.auto_command.make_validator\" (parent: maker.auto_command.abstract).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"maker.auto_command.make_voter\" (parent: maker.auto_command.abstract).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"maker.auto_command.make_user\" (parent: maker.auto_command.abstract).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"maker.auto_command.make_migration\" (parent: maker.auto_command.abstract).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"monolog.logger.request\" (parent: monolog.logger_prototype).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"monolog.logger.console\" (parent: monolog.logger_prototype).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"monolog.logger.cache\" (parent: monolog.logger_prototype).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"monolog.logger.translation\" (parent: monolog.logger_prototype).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"monolog.logger.profiler\" (parent: monolog.logger_prototype).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"monolog.logger.php\" (parent: monolog.logger_prototype).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"monolog.logger.event\" (parent: monolog.logger_prototype).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"monolog.logger.router\" (parent: monolog.logger_prototype).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"monolog.logger.http_client\" (parent: monolog.logger_prototype).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"monolog.logger.doctrine\" (parent: monolog.logger_prototype).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"monolog.logger.security\" (parent: monolog.logger_prototype).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"monolog.logger.debug\" (parent: monolog.logger_prototype).
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Psr\\Container\\ContainerInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\DependencyInjection\\ContainerInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\EventDispatcher\\EventDispatcherInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\HttpKernel\\HttpKernelInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\HttpFoundation\\RequestStack\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\HttpFoundation\\UrlHelper\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\HttpKernel\\KernelInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Filesystem\\Filesystem\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\HttpKernel\\Config\\FileLocator\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\DependencyInjection\\ReverseContainer\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Psr\\Container\\ContainerInterface \$parameterBag\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Psr\\Cache\\CacheItemPoolInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Psr\\SimpleCache\\CacheInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Cache\\Adapter\\AdapterInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Contracts\\Cache\\CacheInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Contracts\\Cache\\TagAwareCacheInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Translation\\TranslatorInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Contracts\\Translation\\TranslatorInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\HttpFoundation\\Session\\SessionInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\HttpFoundation\\Session\\Storage\\SessionStorageInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"SessionHandlerInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBagInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"session.storage.filesystem\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"session.storage\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Security\\Csrf\\TokenGenerator\\TokenGeneratorInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Security\\Csrf\\TokenStorage\\TokenStorageInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Form\\ResolvedFormTypeFactoryInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Form\\FormRegistryInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Form\\FormFactoryInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"form.property_accessor\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"form.choice_list_factory\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Asset\\Packages\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Validator\\Validator\\ValidatorInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"validator.mapping.class_metadata_factory\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Translation\\Reader\\TranslationReaderInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Translation\\Extractor\\ExtractorInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Translation\\Writer\\TranslationWriterInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"translator.formatter\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"cache.default_redis_provider\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"cache.default_memcached_provider\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"cache.default_pdo_provider\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Stopwatch\\Stopwatch\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Routing\\RouterInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Routing\\RequestContextAwareInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Routing\\RequestContext\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"annotation_reader\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Doctrine\\Common\\Annotations\\Reader\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\PropertyAccess\\PropertyAccessorInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Serializer\\SerializerInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Serializer\\Normalizer\\NormalizerInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Serializer\\Normalizer\\DenormalizerInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Serializer\\Encoder\\EncoderInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Serializer\\Encoder\\DecoderInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"serializer.property_accessor\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Serializer\\Mapping\\ClassDiscriminatorResolverInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Serializer\\Normalizer\\ObjectNormalizer\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Serializer\\Mapping\\Factory\\ClassMetadataFactoryInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\PropertyInfo\\PropertyAccessExtractorInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\PropertyInfo\\PropertyDescriptionExtractorInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\PropertyInfo\\PropertyInfoExtractorInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\PropertyInfo\\PropertyTypeExtractorInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\PropertyInfo\\PropertyListExtractorInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\PropertyInfo\\PropertyInitializableExtractorInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Contracts\\HttpClient\\HttpClientInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"sensio_framework_extra.converter.doctrine.orm.expression_language\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"sensio_framework_extra.security.expression_language\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Doctrine\\DBAL\\Driver\\Connection\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Doctrine\\DBAL\\Connection\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Doctrine\\Common\\Persistence\\ManagerRegistry\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Bridge\\Doctrine\\RegistryInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"doctrine.dbal.event_manager\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Doctrine\\Common\\Persistence\\ObjectManager\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Doctrine\\ORM\\EntityManagerInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"doctrine.orm.metadata.annotation_reader\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"doctrine.orm.default_entity_manager.event_manager\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Security\\Core\\Security\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategyInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"security.encoder_factory\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactoryInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Security\\Core\\Encoder\\UserPasswordEncoderInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Security\\Http\\Authentication\\AuthenticationUtils\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManagerInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Security\\Core\\Role\\RoleHierarchyInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Security\\Http\\Firewall\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Security\\Http\\HttpUtils\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Security\\Guard\\GuardAuthenticatorHandler\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"security.firewall\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Security\\Core\\User\\UserProviderInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"security.authentication.session_strategy.main\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"security.user_checker.main\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Security\\Core\\User\\UserCheckerInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"swiftmailer.mailer.default.transport\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"swiftmailer.mailer.default.spool\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"swiftmailer.spool\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"swiftmailer.transport.real\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Swift_Spool\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"swiftmailer.plugin.messagelogger\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"swiftmailer.mailer\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Swift_Mailer\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Swift_Transport\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Twig_Environment\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Twig\\Environment\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"logger\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Psr\\Log\\LoggerInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"argument_resolver.controller_locator\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"twig.loader.filesystem\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"twig.loader\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"translator.data_collector.inner\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"controller_resolver\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"argument_resolver\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"security.access.decision_manager\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"argument_resolver.request_attribute\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"argument_resolver.request\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"argument_resolver.session\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"security.user_value_resolver\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"argument_resolver.service\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"argument_resolver.default\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"argument_resolver.variadic\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"argument_resolver.not_tagged_controller\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \".service_locator.VdFTLMb\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"App\\DataFixtures\\AppFixtures\" previously pointing to \"security.user_password_encoder.generic\" to \"security.password_encoder\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"locale_listener\" previously pointing to \"router.default\" to \"router\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"http_kernel\" previously pointing to \"debug.event_dispatcher\" to \"event_dispatcher\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"services_resetter\" previously pointing to \"debug.validator\" to \"validator\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"services_resetter\" previously pointing to \"debug.event_dispatcher\" to \"event_dispatcher\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"fragment.renderer.inline\" previously pointing to \"debug.event_dispatcher\" to \"event_dispatcher\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"console.command.event_dispatcher_debug\" previously pointing to \"debug.event_dispatcher\" to \"event_dispatcher\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"console.command.router_debug\" previously pointing to \"router.default\" to \"router\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"console.command.router_match\" previously pointing to \"router.default\" to \"router\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"console.command.translation_debug\" previously pointing to \"translator.data_collector\" to \"translator\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"form.type_guesser.validator\" previously pointing to \"debug.validator\" to \"validator\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"form.type.file\" previously pointing to \"translator.data_collector\" to \"translator\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"form.type_extension.form.transformation_failure_handling\" previously pointing to \"translator.data_collector\" to \"translator\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"form.type_extension.form.validator\" previously pointing to \"debug.validator\" to \"validator\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"form.type_extension.upload.validator\" previously pointing to \"translator.data_collector\" to \"translator\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"form.type_extension.csrf\" previously pointing to \"translator.data_collector\" to \"translator\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"validator.builder\" previously pointing to \"translator.data_collector\" to \"translator\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"data_collector.events\" previously pointing to \"debug.event_dispatcher\" to \"event_dispatcher\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"data_collector.validator\" previously pointing to \"debug.validator\" to \"validator\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"data_collector.translation\" previously pointing to \"translator.data_collector\" to \"translator\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"router_listener\" previously pointing to \"router.default\" to \"router\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController\" previously pointing to \"router.default\" to \"router\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"security.authentication.manager\" previously pointing to \"debug.event_dispatcher\" to \"event_dispatcher\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"security.logout_url_generator\" previously pointing to \"router.default\" to \"router\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"security.http_utils\" previously pointing to \"router.default\" to \"router\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"security.http_utils\" previously pointing to \"router.default\" to \"router\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"security.context_listener\" previously pointing to \"debug.event_dispatcher\" to \"event_dispatcher\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"security.authentication.listener.abstract\" previously pointing to \"debug.event_dispatcher\" to \"event_dispatcher\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"security.authentication.listener.form\" previously pointing to \"debug.event_dispatcher\" to \"event_dispatcher\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"security.authentication.listener.simple_form\" previously pointing to \"debug.event_dispatcher\" to \"event_dispatcher\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"security.authentication.listener.simple_preauth\" previously pointing to \"debug.event_dispatcher\" to \"event_dispatcher\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"security.authentication.listener.x509\" previously pointing to \"debug.event_dispatcher\" to \"event_dispatcher\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"security.authentication.listener.json\" previously pointing to \"debug.event_dispatcher\" to \"event_dispatcher\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"security.authentication.listener.remote_user\" previously pointing to \"debug.event_dispatcher\" to \"event_dispatcher\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"security.authentication.switchuser_listener\" previously pointing to \"debug.event_dispatcher\" to \"event_dispatcher\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"security.authentication.listener.rememberme\" previously pointing to \"debug.event_dispatcher\" to \"event_dispatcher\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"security.authentication.guard_handler\" previously pointing to \"debug.event_dispatcher\" to \"event_dispatcher\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"debug.security.firewall\" previously pointing to \"debug.event_dispatcher\" to \"event_dispatcher\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"security.context_listener.0\" previously pointing to \"debug.event_dispatcher\" to \"event_dispatcher\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"security.authentication.listener.form.main\" previously pointing to \"debug.event_dispatcher\" to \"event_dispatcher\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"swiftmailer.mailer.abstract\" previously pointing to \"swiftmailer.mailer.default.transport.spool\" to \"swiftmailer.transport\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"swiftmailer.mailer.default\" previously pointing to \"swiftmailer.mailer.default.transport.spool\" to \"swiftmailer.transport\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"twig.extension.trans\" previously pointing to \"translator.data_collector\" to \"translator\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"twig.extension.routing\" previously pointing to \"router.default\" to \"router\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"web_profiler.controller.profiler\" previously pointing to \"router.default\" to \"router\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"web_profiler.controller.router\" previously pointing to \"router.default\" to \"router\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"debug.file_link_formatter.url_format\" previously pointing to \"router.default\" to \"router\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"web_profiler.debug_toolbar\" previously pointing to \"router.default\" to \"router\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"maker.event_registry\" previously pointing to \"debug.event_dispatcher\" to \"event_dispatcher\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"maker.maker.make_registration_form\" previously pointing to \"router.default\" to \"router\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \".service_locator.czKK4py\" previously pointing to \"security.user_password_encoder.generic\" to \"security.password_encoder\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"debug.security.voter.security.access.authenticated_voter\" previously pointing to \"debug.event_dispatcher\" to \"event_dispatcher\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"debug.security.voter.security.access.role_hierarchy_voter\" previously pointing to \"debug.event_dispatcher\" to \"event_dispatcher\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"debug.security.voter.security.access.expression_voter\" previously pointing to \"debug.event_dispatcher\" to \"event_dispatcher\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \".service_locator.CDOTD6.\" previously pointing to \"router.default\" to \"router\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \".service_locator._pu.0Tb\" previously pointing to \"translator.data_collector\" to \"translator\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \".service_locator.m8PwGkX\" previously pointing to \"router.default\" to \"router\".
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"cache.adapter.system\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"cache.adapter.apcu\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"cache.adapter.doctrine\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"cache.adapter.filesystem\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"cache.adapter.psr6\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"cache.adapter.redis\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"cache.adapter.memcached\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"cache.adapter.pdo\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"cache.adapter.array\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"assets.path_package\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"assets.url_package\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"assets.static_version_strategy\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"assets.json_manifest_version_strategy\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"doctrine_cache.abstract.apc\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"doctrine_cache.abstract.apcu\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"doctrine_cache.abstract.array\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"doctrine_cache.abstract.chain\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"doctrine_cache.abstract.couchbase\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"doctrine_cache.abstract.file_system\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"doctrine_cache.abstract.php_file\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"doctrine_cache.abstract.memcache\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"doctrine_cache.abstract.memcached\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"doctrine_cache.abstract.mongodb\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"doctrine_cache.abstract.redis\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"doctrine_cache.abstract.predis\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"doctrine_cache.abstract.riak\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"doctrine_cache.abstract.sqlite3\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"doctrine_cache.abstract.void\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"doctrine_cache.abstract.wincache\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"doctrine_cache.abstract.xcache\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"doctrine_cache.abstract.zenddata\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"doctrine.dbal.logger.chain\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"doctrine.dbal.logger.profiling\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"doctrine.dbal.logger.backtrace\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"doctrine.dbal.connection\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"doctrine.dbal.connection.event_manager\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"doctrine.dbal.connection.configuration\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"doctrine.dbal.schema_asset_filter_manager\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"doctrine.orm.configuration\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"doctrine.orm.entity_manager.abstract\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"doctrine.orm.manager_configurator.abstract\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"doctrine.orm.security.user.provider\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.firewall.context\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.firewall.config\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.user.provider.missing\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.user.provider.in_memory\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.user.provider.in_memory.user\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.user.provider.ldap\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.user.provider.chain\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.logout_listener\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.logout.handler.cookie_clearing\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.logout.success_handler\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.authentication.form_entry_point\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.authentication.listener.abstract\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.authentication.custom_success_handler\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.authentication.success_handler\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.authentication.custom_failure_handler\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.authentication.failure_handler\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.authentication.listener.form\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.authentication.listener.simple_form\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.authentication.simple_success_failure_handler\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.authentication.listener.simple_preauth\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.authentication.listener.x509\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.authentication.listener.json\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.authentication.listener.remote_user\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.authentication.listener.basic\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.authentication.provider.dao\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.authentication.provider.ldap_bind\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.authentication.provider.simple\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.authentication.provider.pre_authenticated\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.exception_listener\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.authentication.switchuser_listener\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.authentication.listener.rememberme\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.authentication.provider.rememberme\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.authentication.rememberme.services.abstract\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.authentication.rememberme.services.persistent\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.authentication.rememberme.services.simplehash\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.authentication.provider.guard\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.authentication.listener.guard\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"swiftmailer.mailer.abstract\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"swiftmailer.transport.smtp.configurator.abstract\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"swiftmailer.transport.sendmail.abstract\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"swiftmailer.transport.null.abstract\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"swiftmailer.transport.buffer.abstract\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"swiftmailer.transport.authhandler.abstract\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"swiftmailer.transport.eventdispatcher.abstract\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"swiftmailer.plugin.redirecting.abstract\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"swiftmailer.plugin.antiflood.abstract\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"swiftmailer.plugin.impersonate.abstract\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"swiftmailer.plugin.messagelogger.abstract\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"swiftmailer.transport.smtp.abstract\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"swiftmailer.transport.spool.abstract\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"swiftmailer.spool.file.abstract\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"swiftmailer.spool.memory.abstract\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"monolog.logger_prototype\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"monolog.activation_strategy.not_found\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"monolog.handler.fingers_crossed.error_level_activation_strategy\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"maker.auto_command.abstract\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \".instanceof.Symfony\\Contracts\\Service\\ServiceSubscriberInterface.0.App\\Controller\\ArticleController\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \".instanceof.Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController.0.App\\Controller\\ArticleController\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \".abstract.instanceof.App\\Controller\\ArticleController\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \".instanceof.Symfony\\Contracts\\Service\\ServiceSubscriberInterface.0.App\\Controller\\SecurityController\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \".instanceof.Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController.0.App\\Controller\\SecurityController\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \".abstract.instanceof.App\\Controller\\SecurityController\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \".instanceof.Doctrine\\Bundle\\FixturesBundle\\ORMFixtureInterface.0.App\\DataFixtures\\AppFixtures\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \".abstract.instanceof.App\\DataFixtures\\AppFixtures\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \".instanceof.Symfony\\Component\\Form\\FormTypeInterface.0.App\\Form\\ArticleType\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \".abstract.instanceof.App\\Form\\ArticleType\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \".instanceof.Symfony\\Component\\Form\\FormTypeInterface.0.App\\Form\\CommentType\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \".abstract.instanceof.App\\Form\\CommentType\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \".instanceof.Symfony\\Component\\Form\\FormTypeInterface.0.App\\Form\\RegistrationType\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \".abstract.instanceof.App\\Form\\RegistrationType\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \".instanceof.Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepositoryInterface.0.App\\Repository\\ArticleLikeRepository\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \".abstract.instanceof.App\\Repository\\ArticleLikeRepository\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \".instanceof.Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepositoryInterface.0.App\\Repository\\ArticleRepository\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \".abstract.instanceof.App\\Repository\\ArticleRepository\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \".instanceof.Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepositoryInterface.0.App\\Repository\\CategoryRepository\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \".abstract.instanceof.App\\Repository\\CategoryRepository\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \".instanceof.Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepositoryInterface.0.App\\Repository\\CommentRepository\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \".abstract.instanceof.App\\Repository\\CommentRepository\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \".instanceof.Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepositoryInterface.0.App\\Repository\\UserRepository\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \".abstract.instanceof.App\\Repository\\UserRepository\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"EasyCorp\\EasyLog\\EasyLogHandler\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"uri_signer\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"reverse_container\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"cache.app.simple\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"cache.app.taggable\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"translator.selector\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \".1_NativeFileSessionHandler~3b6zW6I\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"session.storage.php_bridge\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"session.storage.mock_file\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"session.handler.native_file\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"session.save_listener\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"assets.empty_package\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \".1_PhpArrayAdapter~KuxLmQc\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"validator.mapping.cache.symfony\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"translator.logging\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \".cache_connection.GD_MSZC\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \".cache_connection.JKE6keX\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"annotations.filesystem_cache\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"serializer.mapping.cache.symfony\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"serializer.name_converter.camel_case_to_snake_case\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \".1_ServiceLocator~4sFtw.I\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"doctrine.orm.listeners.resolve_target_entity\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"doctrine.orm.naming_strategy.default\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"doctrine.orm.quote_strategy.ansi\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"security.helper\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"security.authentication.session_strategy_noop\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"security.authentication.listener.anonymous\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"security.authentication.provider.anonymous\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"security.authentication.basic_entry_point\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"security.context_listener\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"security.rememberme.token.provider.in_memory\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"security.authentication.guard_handler\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \".4_Swift_Transport_Esmtp_Auth_NTLMAuthenticator~Pd9zfs1\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \".3_Swift_Transport_Esmtp_Auth_PlainAuthenticator~Pd9zfs1\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \".2_Swift_Transport_Esmtp_Auth_LoginAuthenticator~Pd9zfs1\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \".1_Swift_Transport_Esmtp_Auth_CramMd5Authenticator~Pd9zfs1\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"swiftmailer.transport.failover\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"swiftmailer.transport.replacementfactory\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"twig.loader.chain\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"twig.extension.debug\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"monolog.formatter.chrome_php\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"monolog.formatter.gelf_message\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"monolog.formatter.html\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"monolog.formatter.json\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"monolog.formatter.line\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"monolog.formatter.loggly\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"monolog.formatter.normalizer\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"monolog.formatter.scalar\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"monolog.formatter.wildfire\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"monolog.formatter.logstash\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"maker.entity_class_generator\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"monolog.logger.translation\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \".service_locator.UwRI0uT\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \".service_locator.jD4_ZG7\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \".service_locator.CDOTD6..App\\Controller\\ArticleController\" to \"App\\Controller\\ArticleController\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \".service_locator.CDOTD6..App\\Controller\\SecurityController\" to \"App\\Controller\\SecurityController\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"debug.controller_resolver\" to \"http_kernel\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"debug.argument_resolver\" to \"http_kernel\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \".service_locator.gmwRZ3h\" to \"fragment.handler\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"monolog.logger.console\" to \"console.error_listener\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"translation.writer\" to \"console.command.translation_update\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"cache.app.recorder_inner\" to \"cache.app\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"cache.system.recorder_inner\" to \"cache.system\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"cache.validator.recorder_inner\" to \"cache.validator\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"cache.serializer.recorder_inner\" to \"cache.serializer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"cache.annotations.recorder_inner\" to \"cache.annotations\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"cache.property_info.recorder_inner\" to \"cache.property_info\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"cache.messenger.restart_workers_signal.recorder_inner\" to \"cache.messenger.restart_workers_signal\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"session.attribute_bag\" to \"session\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"session.flash_bag\" to \"session\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"session.storage.metadata_bag\" to \"session.storage.native\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \".service_locator.WPZmidW\" to \"session_listener\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"security.csrf.token_generator\" to \"security.csrf.token_manager\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \".1_ResolvedFormTypeFactory~O7oXE4I\" to \"form.resolved_type_factory\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"form.extension\" to \"form.registry\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"form.resolved_type_factory\" to \"form.registry\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \".service_locator.cbc17Dc\" to \"form.extension\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"form.choice_list_factory.default\" to \"form.choice_list_factory.property_access\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"form.choice_list_factory.property_access\" to \"form.choice_list_factory.cached\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"form.type_extension.form.request_handler\" to \"form.type_extension.form.http_foundation\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"assets._default_package\" to \"assets.packages\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"assets.empty_version_strategy\" to \"assets._default_package\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"assets.context\" to \"assets._default_package\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"validator.validator_factory\" to \"validator.builder\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"doctrine.orm.validator_initializer\" to \"validator.builder\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"doctrine.orm.default_entity_manager.validator_loader\" to \"validator.builder\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \".service_locator.LtnrEkg\" to \"validator.validator_factory\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"http_client\" to \"validator.not_compromised_password\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \".service_locator.yQVjGlt\" to \"translator.default\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"translator.formatter.default\" to \"translator.default\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"identity_translator\" to \"translator.formatter.default\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"translation.extractor.php\" to \"translation.extractor\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"twig.translation.extractor\" to \"translation.extractor\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"translation.dumper.php\" to \"translation.writer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"translation.dumper.xliff\" to \"translation.writer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"translation.dumper.po\" to \"translation.writer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"translation.dumper.mo\" to \"translation.writer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"translation.dumper.yml\" to \"translation.writer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"translation.dumper.yaml\" to \"translation.writer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"translation.dumper.qt\" to \"translation.writer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"translation.dumper.csv\" to \"translation.writer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"translation.dumper.ini\" to \"translation.writer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"translation.dumper.json\" to \"translation.writer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"translation.dumper.res\" to \"translation.writer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \".service_locator._pu.0Tb.translation.warmer\" to \"translation.warmer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"profiler.storage\" to \"profiler\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"data_collector.time\" to \"profiler\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"data_collector.memory\" to \"profiler\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"data_collector.validator\" to \"profiler\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"data_collector.ajax\" to \"profiler\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"data_collector.exception\" to \"profiler\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"data_collector.logger\" to \"profiler\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"data_collector.events\" to \"profiler\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"data_collector.cache\" to \"profiler\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"data_collector.translation\" to \"profiler\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"data_collector.security\" to \"profiler\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"data_collector.twig\" to \"profiler\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"data_collector.doctrine\" to \"profiler\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"swiftmailer.data_collector\" to \"profiler\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"data_collector.config\" to \"profiler\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"data_collector.form.extractor\" to \"data_collector.form\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"monolog.logger.php\" to \"debug.debug_handlers_listener\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"debug.controller_resolver.inner\" to \"debug.controller_resolver\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"debug.argument_resolver.inner\" to \"debug.argument_resolver\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"routing.loader.xml\" to \"routing.resolver\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"routing.loader.yml\" to \"routing.resolver\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"routing.loader.php\" to \"routing.resolver\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"routing.loader.glob\" to \"routing.resolver\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"routing.loader.directory\" to \"routing.resolver\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"routing.loader.service\" to \"routing.resolver\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"routing.loader.annotation.directory\" to \"routing.resolver\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"routing.loader.annotation.file\" to \"routing.resolver\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"routing.resolver\" to \"routing.loader\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \".service_locator.m8PwGkX.router.cache_warmer\" to \"router.cache_warmer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"annotations.dummy_registry\" to \"annotations.reader\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \".1_ArrayCache~IsFa4SE\" to \"annotations.cached_reader\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \".2_PhpArrayAdapter~IsFa4SE\" to \"annotations.cache\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"cache.property_access\" to \"property_accessor\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"serializer.normalizer.json_serializable\" to \"serializer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"serializer.normalizer.datetime\" to \"serializer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"serializer.normalizer.constraint_violation_list\" to \"serializer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"serializer.normalizer.dateinterval\" to \"serializer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"serializer.normalizer.data_uri\" to \"serializer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"serializer.denormalizer.array\" to \"serializer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"serializer.normalizer.object\" to \"serializer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"serializer.encoder.xml\" to \"serializer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"serializer.encoder.json\" to \"serializer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"serializer.encoder.yaml\" to \"serializer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"serializer.encoder.csv\" to \"serializer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"property_info\" to \"serializer.normalizer.object\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"serializer.mapping.class_discriminator_resolver\" to \"serializer.normalizer.object\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"serializer.mapping.chain_loader\" to \"serializer.mapping.class_metadata_factory\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"monolog.logger.http_client\" to \"http_client\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"sensio_framework_extra.converter.manager\" to \"sensio_framework_extra.converter.listener\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"sensio_framework_extra.converter.doctrine.orm\" to \"sensio_framework_extra.converter.manager\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"framework_extra_bundle.date_time_param_converter\" to \"sensio_framework_extra.converter.manager\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"sensio_framework_extra.converter.doctrine.orm.expression_language.default\" to \"sensio_framework_extra.converter.doctrine.orm\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"sensio_framework_extra.view.guesser\" to \"sensio_framework_extra.view.listener\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"sensio_framework_extra.security.expression_language.default\" to \"sensio_framework_extra.security.listener\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"monolog.logger.doctrine\" to \"doctrine.dbal.logger\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"doctrine.dbal.logger.chain.default\" to \"doctrine.dbal.default_connection.configuration\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"doctrine.dbal.logger\" to \"doctrine.dbal.logger.chain.default\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \".service_locator.Otd28_S\" to \"doctrine.dbal.default_connection.event_manager\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"doctrine.dbal.default_connection.configuration\" to \"doctrine.dbal.default_connection\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"doctrine.dbal.default_connection.event_manager\" to \"doctrine.dbal.default_connection\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"doctrine.dbal.connection_factory\" to \"doctrine.dbal.default_connection\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \".service_locator._ZQxHRQ\" to \"doctrine.orm.container_repository_factory\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"doctrine.orm.default_metadata_driver\" to \"doctrine.orm.default_configuration\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"doctrine.orm.naming_strategy.underscore\" to \"doctrine.orm.default_configuration\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"doctrine.orm.quote_strategy.default\" to \"doctrine.orm.default_configuration\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"doctrine.orm.default_entity_listener_resolver\" to \"doctrine.orm.default_configuration\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"doctrine.orm.container_repository_factory\" to \"doctrine.orm.default_configuration\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"doctrine.orm.default_annotation_metadata_driver\" to \"doctrine.orm.default_metadata_driver\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"doctrine.orm.default_configuration\" to \"doctrine.orm.default_entity_manager\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"doctrine.orm.default_manager_configurator\" to \"doctrine.orm.default_entity_manager\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"security.expression_language\" to \"security.access.expression_voter\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \".service_locator.h018nLA\" to \"security.firewall.map\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"cache.security_expression_language.recorder_inner\" to \"cache.security_expression_language\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"security.authentication.retry_entry_point\" to \"security.channel_listener\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \".security.request_matcher.5dJADCx\" to \"security.access_map\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \".security.request_matcher.NDUbcWM\" to \"security.access_map\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"debug.security.access.decision_manager.inner\" to \"debug.security.access.decision_manager\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"security.logout.success_handler.main\" to \"security.logout_listener.main\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"security.logout.handler.csrf_token_clearing\" to \"security.logout_listener.main\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"security.logout.handler.session\" to \"security.logout_listener.main\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"security.user_checker\" to \"security.authentication.provider.dao.main\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"security.authentication.success_handler.main.form_login\" to \"security.authentication.listener.form.main\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"security.authentication.failure_handler.main.form_login\" to \"security.authentication.listener.form.main\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"security.exception_listener.main\" to \"security.firewall.map.context.main\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"security.logout_listener.main\" to \"security.firewall.map.context.main\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"security.firewall.map.config.main\" to \"security.firewall.map.context.main\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"twig.loader.native_filesystem\" to \"twig\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"twig.extension.security_csrf\" to \"twig\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"twig.extension.logout_url\" to \"twig\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"twig.extension.security\" to \"twig\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"twig.extension.profiler\" to \"twig\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"twig.extension.trans\" to \"twig\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"twig.extension.assets\" to \"twig\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"twig.extension.code\" to \"twig\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"twig.extension.routing\" to \"twig\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"twig.extension.yaml\" to \"twig\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"twig.extension.debug.stopwatch\" to \"twig\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"twig.extension.expression\" to \"twig\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"twig.extension.httpkernel\" to \"twig\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"twig.extension.httpfoundation\" to \"twig\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"twig.extension.weblink\" to \"twig\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"twig.extension.form\" to \"twig\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"twig.extension.dump\" to \"twig\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"doctrine.twig.doctrine_extension\" to \"twig\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"twig.extension.webprofiler\" to \"twig\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"twig.app_variable\" to \"twig\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"twig.runtime_loader\" to \"twig\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"twig.configurator.environment\" to \"twig\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \".service_locator.lSIKWsr.twig.cache_warmer\" to \"twig.cache_warmer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \".service_locator.lSIKWsr.twig.template_cache_warmer\" to \"twig.template_cache_warmer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"twig.template_iterator\" to \"twig.template_cache_warmer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"assets.packages\" to \"twig.extension.assets\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"fragment.handler\" to \"twig.runtime.httpkernel\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"url_helper\" to \"twig.extension.httpfoundation\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \".service_locator.uxa.tru\" to \"twig.runtime_loader\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"twig.form.engine\" to \"twig.form.renderer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \".1_NonceGenerator~9ucJZUH\" to \"web_profiler.csp.handler\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \".2_HtmlDumper~9ucJZUH\" to \"twig.extension.webprofiler\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"monolog.processor.psr_log_message\" to \"monolog.handler.main\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \".1_SourceContextProvider~w5sUpF9\" to \"var_dumper.server_connection\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \".2_RequestContextProvider~w5sUpF9\" to \"var_dumper.server_connection\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \".3_CliContextProvider~w5sUpF9\" to \"var_dumper.server_connection\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"monolog.logger.debug\" to \"var_dumper.dump_server\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"var_dumper.dump_server\" to \"var_dumper.command.server_dump\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \".4_CliDescriptor~w5sUpF9\" to \"var_dumper.command.server_dump\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \".5_HtmlDescriptor~w5sUpF9\" to \"var_dumper.command.server_dump\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"maker.autoloader_util\" to \"maker.file_manager\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"maker.autoloader_finder\" to \"maker.autoloader_util\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"maker.event_registry\" to \"maker.maker.make_subscriber\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"maker.user_class_builder\" to \"maker.maker.make_user\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"doctrine.fixtures.loader\" to \"doctrine.fixtures_load_command\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"App\\DataFixtures\\AppFixtures\" to \"doctrine.fixtures.loader\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"maker.maker.make_authenticator\" to \"maker.auto_command.make_auth\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"maker.maker.make_command\" to \"maker.auto_command.make_command\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"maker.maker.make_controller\" to \"maker.auto_command.make_controller\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"maker.maker.make_crud\" to \"maker.auto_command.make_crud\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"maker.maker.make_entity\" to \"maker.auto_command.make_entity\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"maker.maker.make_fixtures\" to \"maker.auto_command.make_fixtures\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"maker.maker.make_form\" to \"maker.auto_command.make_form\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"maker.maker.make_functional_test\" to \"maker.auto_command.make_functional_test\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"maker.maker.make_registration_form\" to \"maker.auto_command.make_registration_form\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"maker.maker.make_serializer_encoder\" to \"maker.auto_command.make_serializer_encoder\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"maker.maker.make_serializer_normalizer\" to \"maker.auto_command.make_serializer_normalizer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"maker.maker.make_subscriber\" to \"maker.auto_command.make_subscriber\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"maker.maker.make_twig_extension\" to \"maker.auto_command.make_twig_extension\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"maker.maker.make_unit_test\" to \"maker.auto_command.make_unit_test\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"maker.maker.make_validator\" to \"maker.auto_command.make_validator\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"maker.maker.make_voter\" to \"maker.auto_command.make_voter\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"maker.maker.make_user\" to \"maker.auto_command.make_user\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"maker.maker.make_migration\" to \"maker.auto_command.make_migration\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"debug.argument_resolver.request_attribute.inner\" to \"debug.argument_resolver.request_attribute\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"debug.argument_resolver.request.inner\" to \"debug.argument_resolver.request\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"debug.argument_resolver.session.inner\" to \"debug.argument_resolver.session\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"debug.security.user_value_resolver.inner\" to \"debug.security.user_value_resolver\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"debug.argument_resolver.service.inner\" to \"debug.argument_resolver.service\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"debug.argument_resolver.default.inner\" to \"debug.argument_resolver.default\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"debug.argument_resolver.variadic.inner\" to \"debug.argument_resolver.variadic\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"debug.argument_resolver.not_tagged_controller.inner\" to \"debug.argument_resolver.not_tagged_controller\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"security.access.authenticated_voter\" to \"debug.security.voter.security.access.authenticated_voter\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"security.access.role_hierarchy_voter\" to \"debug.security.voter.security.access.role_hierarchy_voter\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"security.access.expression_voter\" to \"debug.security.voter.security.access.expression_voter\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"monolog.handler.null_internal\" to \"monolog.logger.event\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \".service_locator._pu.0Tb\" to \".service_locator._pu.0Tb.translation.warmer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \".service_locator.kbKiEzc\" to \".service_locator.kbKiEzc.router.default\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \".service_locator.m8PwGkX\" to \".service_locator.m8PwGkX.router.cache_warmer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \".service_locator.JgKnBZT\" to \"console.command_loader\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \".service_locator.kbKiEzc.router.default\" to \"router\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"monolog.logger.router\" to \"router\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"swiftmailer.mailer.default.spool.memory\" to \"swiftmailer.transport\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"debug.validator.inner\" to \"validator\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"debug.event_dispatcher.inner\" to \"event_dispatcher\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"monolog.logger.event\" to \"event_dispatcher\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"monolog.logger.profiler\" to \"profiler\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"monolog.logger.profiler\" to \"profiler\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"file_locator\" to \"routing.loader\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"file_locator\" to \"routing.loader\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"file_locator\" to \"routing.loader\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"file_locator\" to \"routing.loader\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"file_locator\" to \"routing.loader\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"routing.loader.annotation\" to \"routing.loader\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"file_locator\" to \"routing.loader\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"routing.loader.annotation\" to \"routing.loader\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"file_locator\" to \"routing.loader\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"routing.loader.annotation\" to \"routing.loader\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"serializer.name_converter.metadata_aware\" to \"serializer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"serializer.name_converter.metadata_aware\" to \"serializer\".";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "var/cache/dev/srcApp_KernelDevDebugContainerCompiler.log";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \".instanceof.Symfony\\Contracts\\Service\\ServiceSubscriberInterface.0.App\\Controller\\ArticleController\" (parent: .abstract.instanceof.App\\Controller\\ArticleController).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \".instanceof.Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController.0.App\\Controller\\ArticleController\" (parent: .instanceof.Symfony\\Contracts\\Service\\ServiceSubscriberInterface.0.App\\Controller\\ArticleController).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"App\\Controller\\ArticleController\" (parent: .instanceof.Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController.0.App\\Controller\\ArticleController).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \".instanceof.Symfony\\Contracts\\Service\\ServiceSubscriberInterface.0.App\\Controller\\SecurityController\" (parent: .abstract.instanceof.App\\Controller\\SecurityController).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \".instanceof.Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController.0.App\\Controller\\SecurityController\" (parent: .instanceof.Symfony\\Contracts\\Service\\ServiceSubscriberInterface.0.App\\Controller\\SecurityController).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"App\\Controller\\SecurityController\" (parent: .instanceof.Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController.0.App\\Controller\\SecurityController).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \".instanceof.Doctrine\\Bundle\\FixturesBundle\\ORMFixtureInterface.0.App\\DataFixtures\\AppFixtures\" (parent: .abstract.instanceof.App\\DataFixtures\\AppFixtures).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"App\\DataFixtures\\AppFixtures\" (parent: .instanceof.Doctrine\\Bundle\\FixturesBundle\\ORMFixtureInterface.0.App\\DataFixtures\\AppFixtures).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \".instanceof.Symfony\\Component\\Form\\FormTypeInterface.0.App\\Form\\ArticleType\" (parent: .abstract.instanceof.App\\Form\\ArticleType).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"App\\Form\\ArticleType\" (parent: .instanceof.Symfony\\Component\\Form\\FormTypeInterface.0.App\\Form\\ArticleType).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \".instanceof.Symfony\\Component\\Form\\FormTypeInterface.0.App\\Form\\CommentType\" (parent: .abstract.instanceof.App\\Form\\CommentType).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"App\\Form\\CommentType\" (parent: .instanceof.Symfony\\Component\\Form\\FormTypeInterface.0.App\\Form\\CommentType).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \".instanceof.Symfony\\Component\\Form\\FormTypeInterface.0.App\\Form\\RegistrationType\" (parent: .abstract.instanceof.App\\Form\\RegistrationType).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"App\\Form\\RegistrationType\" (parent: .instanceof.Symfony\\Component\\Form\\FormTypeInterface.0.App\\Form\\RegistrationType).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \".instanceof.Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepositoryInterface.0.App\\Repository\\ArticleLikeRepository\" (parent: .abstract.instanceof.App\\Repository\\ArticleLikeRepository).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"App\\Repository\\ArticleLikeRepository\" (parent: .instanceof.Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepositoryInterface.0.App\\Repository\\ArticleLikeRepository).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \".instanceof.Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepositoryInterface.0.App\\Repository\\ArticleRepository\" (parent: .abstract.instanceof.App\\Repository\\ArticleRepository).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"App\\Repository\\ArticleRepository\" (parent: .instanceof.Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepositoryInterface.0.App\\Repository\\ArticleRepository).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \".instanceof.Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepositoryInterface.0.App\\Repository\\CategoryRepository\" (parent: .abstract.instanceof.App\\Repository\\CategoryRepository).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"App\\Repository\\CategoryRepository\" (parent: .instanceof.Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepositoryInterface.0.App\\Repository\\CategoryRepository).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \".instanceof.Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepositoryInterface.0.App\\Repository\\CommentRepository\" (parent: .abstract.instanceof.App\\Repository\\CommentRepository).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"App\\Repository\\CommentRepository\" (parent: .instanceof.Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepositoryInterface.0.App\\Repository\\CommentRepository).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \".instanceof.Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepositoryInterface.0.App\\Repository\\UserRepository\" (parent: .abstract.instanceof.App\\Repository\\UserRepository).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"App\\Repository\\UserRepository\" (parent: .instanceof.Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepositoryInterface.0.App\\Repository\\UserRepository).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"cache.app\" (parent: cache.adapter.filesystem).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"cache.system\" (parent: cache.adapter.system).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"cache.validator\" (parent: cache.system).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"cache.serializer\" (parent: cache.system).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"cache.annotations\" (parent: cache.system).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"cache.property_info\" (parent: cache.system).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"cache.messenger.restart_workers_signal\" (parent: cache.app).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"cache.system_clearer\" (parent: cache.default_clearer).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"cache.global_clearer\" (parent: cache.default_clearer).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"assets._default_package\" (parent: assets.path_package).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"doctrine.dbal.default_connection.configuration\" (parent: doctrine.dbal.connection.configuration).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"doctrine.dbal.logger.profiling.default\" (parent: doctrine.dbal.logger.profiling).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"doctrine.dbal.logger.chain.default\" (parent: doctrine.dbal.logger.chain).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"doctrine.dbal.default_connection.event_manager\" (parent: doctrine.dbal.connection.event_manager).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"doctrine.dbal.default_connection\" (parent: doctrine.dbal.connection).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"doctrine.orm.default_configuration\" (parent: doctrine.orm.configuration).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"doctrine_cache.providers.doctrine.orm.default_metadata_cache\" (parent: doctrine_cache.abstract.array).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"doctrine_cache.providers.doctrine.orm.default_result_cache\" (parent: doctrine_cache.abstract.array).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"doctrine_cache.providers.doctrine.orm.default_query_cache\" (parent: doctrine_cache.abstract.array).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"doctrine.orm.default_manager_configurator\" (parent: doctrine.orm.manager_configurator.abstract).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"doctrine.orm.default_entity_manager\" (parent: doctrine.orm.entity_manager.abstract).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"cache.security_expression_language\" (parent: cache.system).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"security.authentication.listener.form\" (parent: security.authentication.listener.abstract).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"security.authentication.listener.simple_form\" (parent: security.authentication.listener.abstract).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"security.authentication.rememberme.services.persistent\" (parent: security.authentication.rememberme.services.abstract).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"security.authentication.rememberme.services.simplehash\" (parent: security.authentication.rememberme.services.abstract).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"security.user.provider.concrete.our_db_provider\" (parent: doctrine.orm.security.user.provider).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"security.firewall.map.config.main\" (parent: security.firewall.config).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"security.context_listener.0\" (parent: security.context_listener).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"security.logout_listener.main\" (parent: security.logout_listener).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"security.logout.success_handler.main\" (parent: security.logout.success_handler).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"security.authentication.provider.dao.main\" (parent: security.authentication.provider.dao).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"security.authentication.success_handler.main.form_login\" (parent: security.authentication.success_handler).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"security.authentication.failure_handler.main.form_login\" (parent: security.authentication.failure_handler).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"security.authentication.listener.form.main\" (parent: security.authentication.listener.form).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"security.authentication.form_entry_point.main\" (parent: security.authentication.form_entry_point).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"security.authentication.listener.basic.main\" (parent: security.authentication.listener.basic).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"security.authentication.listener.anonymous.main\" (parent: security.authentication.listener.anonymous).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"security.authentication.provider.anonymous.main\" (parent: security.authentication.provider.anonymous).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"security.exception_listener.main\" (parent: security.exception_listener).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"security.firewall.map.context.main\" (parent: security.firewall.context).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"swiftmailer.mailer.default.transport.eventdispatcher\" (parent: swiftmailer.transport.eventdispatcher.abstract).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"swiftmailer.mailer.default\" (parent: swiftmailer.mailer.abstract).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"swiftmailer.mailer.default.spool.memory\" (parent: swiftmailer.spool.memory.abstract).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"swiftmailer.mailer.default.transport.spool\" (parent: swiftmailer.transport.spool.abstract).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"swiftmailer.mailer.default.plugin.messagelogger\" (parent: swiftmailer.plugin.messagelogger.abstract).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"monolog.logger\" (parent: monolog.logger_prototype).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"maker.auto_command.make_auth\" (parent: maker.auto_command.abstract).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"maker.auto_command.make_command\" (parent: maker.auto_command.abstract).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"maker.auto_command.make_controller\" (parent: maker.auto_command.abstract).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"maker.auto_command.make_crud\" (parent: maker.auto_command.abstract).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"maker.auto_command.make_entity\" (parent: maker.auto_command.abstract).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"maker.auto_command.make_fixtures\" (parent: maker.auto_command.abstract).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"maker.auto_command.make_form\" (parent: maker.auto_command.abstract).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"maker.auto_command.make_functional_test\" (parent: maker.auto_command.abstract).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"maker.auto_command.make_registration_form\" (parent: maker.auto_command.abstract).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"maker.auto_command.make_serializer_encoder\" (parent: maker.auto_command.abstract).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"maker.auto_command.make_serializer_normalizer\" (parent: maker.auto_command.abstract).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"maker.auto_command.make_subscriber\" (parent: maker.auto_command.abstract).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"maker.auto_command.make_twig_extension\" (parent: maker.auto_command.abstract).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"maker.auto_command.make_unit_test\" (parent: maker.auto_command.abstract).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"maker.auto_command.make_validator\" (parent: maker.auto_command.abstract).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"maker.auto_command.make_voter\" (parent: maker.auto_command.abstract).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"maker.auto_command.make_user\" (parent: maker.auto_command.abstract).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"maker.auto_command.make_migration\" (parent: maker.auto_command.abstract).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"monolog.logger.request\" (parent: monolog.logger_prototype).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"monolog.logger.console\" (parent: monolog.logger_prototype).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"monolog.logger.cache\" (parent: monolog.logger_prototype).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"monolog.logger.translation\" (parent: monolog.logger_prototype).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"monolog.logger.profiler\" (parent: monolog.logger_prototype).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"monolog.logger.php\" (parent: monolog.logger_prototype).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"monolog.logger.event\" (parent: monolog.logger_prototype).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"monolog.logger.router\" (parent: monolog.logger_prototype).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"monolog.logger.http_client\" (parent: monolog.logger_prototype).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"monolog.logger.doctrine\" (parent: monolog.logger_prototype).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"monolog.logger.security\" (parent: monolog.logger_prototype).
Symfony\\Component\\DependencyInjection\\Compiler\\ResolveChildDefinitionsPass: Resolving inheritance for \"monolog.logger.debug\" (parent: monolog.logger_prototype).
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Psr\\Container\\ContainerInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\DependencyInjection\\ContainerInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\EventDispatcher\\EventDispatcherInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\HttpKernel\\HttpKernelInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\HttpFoundation\\RequestStack\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\HttpFoundation\\UrlHelper\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\HttpKernel\\KernelInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Filesystem\\Filesystem\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\HttpKernel\\Config\\FileLocator\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\DependencyInjection\\ReverseContainer\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Psr\\Container\\ContainerInterface \$parameterBag\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Psr\\Cache\\CacheItemPoolInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Psr\\SimpleCache\\CacheInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Cache\\Adapter\\AdapterInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Contracts\\Cache\\CacheInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Contracts\\Cache\\TagAwareCacheInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Translation\\TranslatorInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Contracts\\Translation\\TranslatorInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\HttpFoundation\\Session\\SessionInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\HttpFoundation\\Session\\Storage\\SessionStorageInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"SessionHandlerInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBagInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"session.storage.filesystem\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"session.storage\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Security\\Csrf\\TokenGenerator\\TokenGeneratorInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Security\\Csrf\\TokenStorage\\TokenStorageInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Form\\ResolvedFormTypeFactoryInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Form\\FormRegistryInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Form\\FormFactoryInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"form.property_accessor\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"form.choice_list_factory\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Asset\\Packages\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Validator\\Validator\\ValidatorInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"validator.mapping.class_metadata_factory\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Translation\\Reader\\TranslationReaderInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Translation\\Extractor\\ExtractorInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Translation\\Writer\\TranslationWriterInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"translator.formatter\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"cache.default_redis_provider\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"cache.default_memcached_provider\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"cache.default_pdo_provider\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Stopwatch\\Stopwatch\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Routing\\RouterInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Routing\\RequestContextAwareInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Routing\\RequestContext\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"annotation_reader\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Doctrine\\Common\\Annotations\\Reader\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\PropertyAccess\\PropertyAccessorInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Serializer\\SerializerInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Serializer\\Normalizer\\NormalizerInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Serializer\\Normalizer\\DenormalizerInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Serializer\\Encoder\\EncoderInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Serializer\\Encoder\\DecoderInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"serializer.property_accessor\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Serializer\\Mapping\\ClassDiscriminatorResolverInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Serializer\\Normalizer\\ObjectNormalizer\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Serializer\\Mapping\\Factory\\ClassMetadataFactoryInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\PropertyInfo\\PropertyAccessExtractorInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\PropertyInfo\\PropertyDescriptionExtractorInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\PropertyInfo\\PropertyInfoExtractorInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\PropertyInfo\\PropertyTypeExtractorInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\PropertyInfo\\PropertyListExtractorInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\PropertyInfo\\PropertyInitializableExtractorInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Contracts\\HttpClient\\HttpClientInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"sensio_framework_extra.converter.doctrine.orm.expression_language\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"sensio_framework_extra.security.expression_language\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Doctrine\\DBAL\\Driver\\Connection\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Doctrine\\DBAL\\Connection\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Doctrine\\Common\\Persistence\\ManagerRegistry\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Bridge\\Doctrine\\RegistryInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"doctrine.dbal.event_manager\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Doctrine\\Common\\Persistence\\ObjectManager\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Doctrine\\ORM\\EntityManagerInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"doctrine.orm.metadata.annotation_reader\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"doctrine.orm.default_entity_manager.event_manager\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Security\\Core\\Security\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategyInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"security.encoder_factory\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactoryInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Security\\Core\\Encoder\\UserPasswordEncoderInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Security\\Http\\Authentication\\AuthenticationUtils\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManagerInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Security\\Core\\Role\\RoleHierarchyInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Security\\Http\\Firewall\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Security\\Http\\HttpUtils\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Security\\Guard\\GuardAuthenticatorHandler\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"security.firewall\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Security\\Core\\User\\UserProviderInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"security.authentication.session_strategy.main\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"security.user_checker.main\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Symfony\\Component\\Security\\Core\\User\\UserCheckerInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"swiftmailer.mailer.default.transport\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"swiftmailer.mailer.default.spool\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"swiftmailer.spool\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"swiftmailer.transport.real\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Swift_Spool\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"swiftmailer.plugin.messagelogger\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"swiftmailer.mailer\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Swift_Mailer\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Swift_Transport\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Twig_Environment\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Twig\\Environment\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"logger\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"Psr\\Log\\LoggerInterface\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"argument_resolver.controller_locator\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"twig.loader.filesystem\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"twig.loader\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"translator.data_collector.inner\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"controller_resolver\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"argument_resolver\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"security.access.decision_manager\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"argument_resolver.request_attribute\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"argument_resolver.request\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"argument_resolver.session\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"security.user_value_resolver\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"argument_resolver.service\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"argument_resolver.default\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"argument_resolver.variadic\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \"argument_resolver.not_tagged_controller\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\RemovePrivateAliasesPass: Removed service \".service_locator.VdFTLMb\"; reason: private alias.
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"App\\DataFixtures\\AppFixtures\" previously pointing to \"security.user_password_encoder.generic\" to \"security.password_encoder\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"locale_listener\" previously pointing to \"router.default\" to \"router\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"http_kernel\" previously pointing to \"debug.event_dispatcher\" to \"event_dispatcher\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"services_resetter\" previously pointing to \"debug.validator\" to \"validator\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"services_resetter\" previously pointing to \"debug.event_dispatcher\" to \"event_dispatcher\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"fragment.renderer.inline\" previously pointing to \"debug.event_dispatcher\" to \"event_dispatcher\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"console.command.event_dispatcher_debug\" previously pointing to \"debug.event_dispatcher\" to \"event_dispatcher\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"console.command.router_debug\" previously pointing to \"router.default\" to \"router\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"console.command.router_match\" previously pointing to \"router.default\" to \"router\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"console.command.translation_debug\" previously pointing to \"translator.data_collector\" to \"translator\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"form.type_guesser.validator\" previously pointing to \"debug.validator\" to \"validator\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"form.type.file\" previously pointing to \"translator.data_collector\" to \"translator\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"form.type_extension.form.transformation_failure_handling\" previously pointing to \"translator.data_collector\" to \"translator\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"form.type_extension.form.validator\" previously pointing to \"debug.validator\" to \"validator\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"form.type_extension.upload.validator\" previously pointing to \"translator.data_collector\" to \"translator\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"form.type_extension.csrf\" previously pointing to \"translator.data_collector\" to \"translator\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"validator.builder\" previously pointing to \"translator.data_collector\" to \"translator\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"data_collector.events\" previously pointing to \"debug.event_dispatcher\" to \"event_dispatcher\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"data_collector.validator\" previously pointing to \"debug.validator\" to \"validator\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"data_collector.translation\" previously pointing to \"translator.data_collector\" to \"translator\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"router_listener\" previously pointing to \"router.default\" to \"router\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController\" previously pointing to \"router.default\" to \"router\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"security.authentication.manager\" previously pointing to \"debug.event_dispatcher\" to \"event_dispatcher\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"security.logout_url_generator\" previously pointing to \"router.default\" to \"router\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"security.http_utils\" previously pointing to \"router.default\" to \"router\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"security.http_utils\" previously pointing to \"router.default\" to \"router\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"security.context_listener\" previously pointing to \"debug.event_dispatcher\" to \"event_dispatcher\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"security.authentication.listener.abstract\" previously pointing to \"debug.event_dispatcher\" to \"event_dispatcher\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"security.authentication.listener.form\" previously pointing to \"debug.event_dispatcher\" to \"event_dispatcher\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"security.authentication.listener.simple_form\" previously pointing to \"debug.event_dispatcher\" to \"event_dispatcher\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"security.authentication.listener.simple_preauth\" previously pointing to \"debug.event_dispatcher\" to \"event_dispatcher\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"security.authentication.listener.x509\" previously pointing to \"debug.event_dispatcher\" to \"event_dispatcher\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"security.authentication.listener.json\" previously pointing to \"debug.event_dispatcher\" to \"event_dispatcher\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"security.authentication.listener.remote_user\" previously pointing to \"debug.event_dispatcher\" to \"event_dispatcher\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"security.authentication.switchuser_listener\" previously pointing to \"debug.event_dispatcher\" to \"event_dispatcher\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"security.authentication.listener.rememberme\" previously pointing to \"debug.event_dispatcher\" to \"event_dispatcher\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"security.authentication.guard_handler\" previously pointing to \"debug.event_dispatcher\" to \"event_dispatcher\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"debug.security.firewall\" previously pointing to \"debug.event_dispatcher\" to \"event_dispatcher\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"security.context_listener.0\" previously pointing to \"debug.event_dispatcher\" to \"event_dispatcher\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"security.authentication.listener.form.main\" previously pointing to \"debug.event_dispatcher\" to \"event_dispatcher\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"swiftmailer.mailer.abstract\" previously pointing to \"swiftmailer.mailer.default.transport.spool\" to \"swiftmailer.transport\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"swiftmailer.mailer.default\" previously pointing to \"swiftmailer.mailer.default.transport.spool\" to \"swiftmailer.transport\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"twig.extension.trans\" previously pointing to \"translator.data_collector\" to \"translator\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"twig.extension.routing\" previously pointing to \"router.default\" to \"router\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"web_profiler.controller.profiler\" previously pointing to \"router.default\" to \"router\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"web_profiler.controller.router\" previously pointing to \"router.default\" to \"router\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"debug.file_link_formatter.url_format\" previously pointing to \"router.default\" to \"router\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"web_profiler.debug_toolbar\" previously pointing to \"router.default\" to \"router\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"maker.event_registry\" previously pointing to \"debug.event_dispatcher\" to \"event_dispatcher\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"maker.maker.make_registration_form\" previously pointing to \"router.default\" to \"router\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \".service_locator.czKK4py\" previously pointing to \"security.user_password_encoder.generic\" to \"security.password_encoder\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"debug.security.voter.security.access.authenticated_voter\" previously pointing to \"debug.event_dispatcher\" to \"event_dispatcher\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"debug.security.voter.security.access.role_hierarchy_voter\" previously pointing to \"debug.event_dispatcher\" to \"event_dispatcher\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \"debug.security.voter.security.access.expression_voter\" previously pointing to \"debug.event_dispatcher\" to \"event_dispatcher\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \".service_locator.CDOTD6.\" previously pointing to \"router.default\" to \"router\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \".service_locator._pu.0Tb\" previously pointing to \"translator.data_collector\" to \"translator\".
Symfony\\Component\\DependencyInjection\\Compiler\\ReplaceAliasByActualDefinitionPass: Changed reference of service \".service_locator.m8PwGkX\" previously pointing to \"router.default\" to \"router\".
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"cache.adapter.system\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"cache.adapter.apcu\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"cache.adapter.doctrine\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"cache.adapter.filesystem\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"cache.adapter.psr6\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"cache.adapter.redis\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"cache.adapter.memcached\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"cache.adapter.pdo\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"cache.adapter.array\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"assets.path_package\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"assets.url_package\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"assets.static_version_strategy\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"assets.json_manifest_version_strategy\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"doctrine_cache.abstract.apc\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"doctrine_cache.abstract.apcu\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"doctrine_cache.abstract.array\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"doctrine_cache.abstract.chain\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"doctrine_cache.abstract.couchbase\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"doctrine_cache.abstract.file_system\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"doctrine_cache.abstract.php_file\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"doctrine_cache.abstract.memcache\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"doctrine_cache.abstract.memcached\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"doctrine_cache.abstract.mongodb\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"doctrine_cache.abstract.redis\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"doctrine_cache.abstract.predis\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"doctrine_cache.abstract.riak\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"doctrine_cache.abstract.sqlite3\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"doctrine_cache.abstract.void\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"doctrine_cache.abstract.wincache\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"doctrine_cache.abstract.xcache\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"doctrine_cache.abstract.zenddata\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"doctrine.dbal.logger.chain\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"doctrine.dbal.logger.profiling\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"doctrine.dbal.logger.backtrace\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"doctrine.dbal.connection\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"doctrine.dbal.connection.event_manager\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"doctrine.dbal.connection.configuration\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"doctrine.dbal.schema_asset_filter_manager\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"doctrine.orm.configuration\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"doctrine.orm.entity_manager.abstract\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"doctrine.orm.manager_configurator.abstract\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"doctrine.orm.security.user.provider\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.firewall.context\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.firewall.config\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.user.provider.missing\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.user.provider.in_memory\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.user.provider.in_memory.user\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.user.provider.ldap\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.user.provider.chain\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.logout_listener\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.logout.handler.cookie_clearing\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.logout.success_handler\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.authentication.form_entry_point\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.authentication.listener.abstract\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.authentication.custom_success_handler\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.authentication.success_handler\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.authentication.custom_failure_handler\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.authentication.failure_handler\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.authentication.listener.form\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.authentication.listener.simple_form\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.authentication.simple_success_failure_handler\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.authentication.listener.simple_preauth\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.authentication.listener.x509\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.authentication.listener.json\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.authentication.listener.remote_user\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.authentication.listener.basic\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.authentication.provider.dao\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.authentication.provider.ldap_bind\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.authentication.provider.simple\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.authentication.provider.pre_authenticated\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.exception_listener\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.authentication.switchuser_listener\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.authentication.listener.rememberme\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.authentication.provider.rememberme\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.authentication.rememberme.services.abstract\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.authentication.rememberme.services.persistent\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.authentication.rememberme.services.simplehash\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.authentication.provider.guard\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"security.authentication.listener.guard\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"swiftmailer.mailer.abstract\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"swiftmailer.transport.smtp.configurator.abstract\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"swiftmailer.transport.sendmail.abstract\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"swiftmailer.transport.null.abstract\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"swiftmailer.transport.buffer.abstract\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"swiftmailer.transport.authhandler.abstract\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"swiftmailer.transport.eventdispatcher.abstract\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"swiftmailer.plugin.redirecting.abstract\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"swiftmailer.plugin.antiflood.abstract\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"swiftmailer.plugin.impersonate.abstract\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"swiftmailer.plugin.messagelogger.abstract\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"swiftmailer.transport.smtp.abstract\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"swiftmailer.transport.spool.abstract\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"swiftmailer.spool.file.abstract\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"swiftmailer.spool.memory.abstract\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"monolog.logger_prototype\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"monolog.activation_strategy.not_found\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"monolog.handler.fingers_crossed.error_level_activation_strategy\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \"maker.auto_command.abstract\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \".instanceof.Symfony\\Contracts\\Service\\ServiceSubscriberInterface.0.App\\Controller\\ArticleController\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \".instanceof.Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController.0.App\\Controller\\ArticleController\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \".abstract.instanceof.App\\Controller\\ArticleController\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \".instanceof.Symfony\\Contracts\\Service\\ServiceSubscriberInterface.0.App\\Controller\\SecurityController\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \".instanceof.Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController.0.App\\Controller\\SecurityController\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \".abstract.instanceof.App\\Controller\\SecurityController\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \".instanceof.Doctrine\\Bundle\\FixturesBundle\\ORMFixtureInterface.0.App\\DataFixtures\\AppFixtures\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \".abstract.instanceof.App\\DataFixtures\\AppFixtures\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \".instanceof.Symfony\\Component\\Form\\FormTypeInterface.0.App\\Form\\ArticleType\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \".abstract.instanceof.App\\Form\\ArticleType\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \".instanceof.Symfony\\Component\\Form\\FormTypeInterface.0.App\\Form\\CommentType\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \".abstract.instanceof.App\\Form\\CommentType\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \".instanceof.Symfony\\Component\\Form\\FormTypeInterface.0.App\\Form\\RegistrationType\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \".abstract.instanceof.App\\Form\\RegistrationType\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \".instanceof.Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepositoryInterface.0.App\\Repository\\ArticleLikeRepository\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \".abstract.instanceof.App\\Repository\\ArticleLikeRepository\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \".instanceof.Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepositoryInterface.0.App\\Repository\\ArticleRepository\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \".abstract.instanceof.App\\Repository\\ArticleRepository\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \".instanceof.Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepositoryInterface.0.App\\Repository\\CategoryRepository\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \".abstract.instanceof.App\\Repository\\CategoryRepository\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \".instanceof.Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepositoryInterface.0.App\\Repository\\CommentRepository\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \".abstract.instanceof.App\\Repository\\CommentRepository\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \".instanceof.Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepositoryInterface.0.App\\Repository\\UserRepository\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveAbstractDefinitionsPass: Removed service \".abstract.instanceof.App\\Repository\\UserRepository\"; reason: abstract.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"EasyCorp\\EasyLog\\EasyLogHandler\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"uri_signer\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"reverse_container\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"cache.app.simple\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"cache.app.taggable\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"translator.selector\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \".1_NativeFileSessionHandler~3b6zW6I\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"session.storage.php_bridge\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"session.storage.mock_file\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"session.handler.native_file\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"session.save_listener\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"assets.empty_package\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \".1_PhpArrayAdapter~KuxLmQc\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"validator.mapping.cache.symfony\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"translator.logging\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \".cache_connection.GD_MSZC\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \".cache_connection.JKE6keX\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"annotations.filesystem_cache\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"serializer.mapping.cache.symfony\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"serializer.name_converter.camel_case_to_snake_case\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \".1_ServiceLocator~4sFtw.I\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"doctrine.orm.listeners.resolve_target_entity\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"doctrine.orm.naming_strategy.default\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"doctrine.orm.quote_strategy.ansi\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"security.helper\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"security.authentication.session_strategy_noop\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"security.authentication.listener.anonymous\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"security.authentication.provider.anonymous\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"security.authentication.basic_entry_point\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"security.context_listener\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"security.rememberme.token.provider.in_memory\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"security.authentication.guard_handler\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \".4_Swift_Transport_Esmtp_Auth_NTLMAuthenticator~Pd9zfs1\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \".3_Swift_Transport_Esmtp_Auth_PlainAuthenticator~Pd9zfs1\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \".2_Swift_Transport_Esmtp_Auth_LoginAuthenticator~Pd9zfs1\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \".1_Swift_Transport_Esmtp_Auth_CramMd5Authenticator~Pd9zfs1\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"swiftmailer.transport.failover\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"swiftmailer.transport.replacementfactory\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"twig.loader.chain\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"twig.extension.debug\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"monolog.formatter.chrome_php\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"monolog.formatter.gelf_message\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"monolog.formatter.html\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"monolog.formatter.json\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"monolog.formatter.line\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"monolog.formatter.loggly\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"monolog.formatter.normalizer\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"monolog.formatter.scalar\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"monolog.formatter.wildfire\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"monolog.formatter.logstash\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"maker.entity_class_generator\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \"monolog.logger.translation\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \".service_locator.UwRI0uT\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\RemoveUnusedDefinitionsPass: Removed service \".service_locator.jD4_ZG7\"; reason: unused.
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \".service_locator.CDOTD6..App\\Controller\\ArticleController\" to \"App\\Controller\\ArticleController\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \".service_locator.CDOTD6..App\\Controller\\SecurityController\" to \"App\\Controller\\SecurityController\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"debug.controller_resolver\" to \"http_kernel\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"debug.argument_resolver\" to \"http_kernel\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \".service_locator.gmwRZ3h\" to \"fragment.handler\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"monolog.logger.console\" to \"console.error_listener\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"translation.writer\" to \"console.command.translation_update\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"cache.app.recorder_inner\" to \"cache.app\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"cache.system.recorder_inner\" to \"cache.system\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"cache.validator.recorder_inner\" to \"cache.validator\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"cache.serializer.recorder_inner\" to \"cache.serializer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"cache.annotations.recorder_inner\" to \"cache.annotations\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"cache.property_info.recorder_inner\" to \"cache.property_info\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"cache.messenger.restart_workers_signal.recorder_inner\" to \"cache.messenger.restart_workers_signal\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"session.attribute_bag\" to \"session\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"session.flash_bag\" to \"session\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"session.storage.metadata_bag\" to \"session.storage.native\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \".service_locator.WPZmidW\" to \"session_listener\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"security.csrf.token_generator\" to \"security.csrf.token_manager\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \".1_ResolvedFormTypeFactory~O7oXE4I\" to \"form.resolved_type_factory\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"form.extension\" to \"form.registry\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"form.resolved_type_factory\" to \"form.registry\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \".service_locator.cbc17Dc\" to \"form.extension\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"form.choice_list_factory.default\" to \"form.choice_list_factory.property_access\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"form.choice_list_factory.property_access\" to \"form.choice_list_factory.cached\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"form.type_extension.form.request_handler\" to \"form.type_extension.form.http_foundation\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"assets._default_package\" to \"assets.packages\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"assets.empty_version_strategy\" to \"assets._default_package\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"assets.context\" to \"assets._default_package\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"validator.validator_factory\" to \"validator.builder\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"doctrine.orm.validator_initializer\" to \"validator.builder\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"doctrine.orm.default_entity_manager.validator_loader\" to \"validator.builder\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \".service_locator.LtnrEkg\" to \"validator.validator_factory\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"http_client\" to \"validator.not_compromised_password\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \".service_locator.yQVjGlt\" to \"translator.default\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"translator.formatter.default\" to \"translator.default\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"identity_translator\" to \"translator.formatter.default\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"translation.extractor.php\" to \"translation.extractor\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"twig.translation.extractor\" to \"translation.extractor\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"translation.dumper.php\" to \"translation.writer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"translation.dumper.xliff\" to \"translation.writer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"translation.dumper.po\" to \"translation.writer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"translation.dumper.mo\" to \"translation.writer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"translation.dumper.yml\" to \"translation.writer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"translation.dumper.yaml\" to \"translation.writer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"translation.dumper.qt\" to \"translation.writer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"translation.dumper.csv\" to \"translation.writer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"translation.dumper.ini\" to \"translation.writer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"translation.dumper.json\" to \"translation.writer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"translation.dumper.res\" to \"translation.writer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \".service_locator._pu.0Tb.translation.warmer\" to \"translation.warmer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"profiler.storage\" to \"profiler\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"data_collector.time\" to \"profiler\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"data_collector.memory\" to \"profiler\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"data_collector.validator\" to \"profiler\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"data_collector.ajax\" to \"profiler\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"data_collector.exception\" to \"profiler\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"data_collector.logger\" to \"profiler\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"data_collector.events\" to \"profiler\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"data_collector.cache\" to \"profiler\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"data_collector.translation\" to \"profiler\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"data_collector.security\" to \"profiler\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"data_collector.twig\" to \"profiler\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"data_collector.doctrine\" to \"profiler\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"swiftmailer.data_collector\" to \"profiler\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"data_collector.config\" to \"profiler\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"data_collector.form.extractor\" to \"data_collector.form\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"monolog.logger.php\" to \"debug.debug_handlers_listener\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"debug.controller_resolver.inner\" to \"debug.controller_resolver\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"debug.argument_resolver.inner\" to \"debug.argument_resolver\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"routing.loader.xml\" to \"routing.resolver\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"routing.loader.yml\" to \"routing.resolver\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"routing.loader.php\" to \"routing.resolver\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"routing.loader.glob\" to \"routing.resolver\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"routing.loader.directory\" to \"routing.resolver\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"routing.loader.service\" to \"routing.resolver\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"routing.loader.annotation.directory\" to \"routing.resolver\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"routing.loader.annotation.file\" to \"routing.resolver\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"routing.resolver\" to \"routing.loader\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \".service_locator.m8PwGkX.router.cache_warmer\" to \"router.cache_warmer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"annotations.dummy_registry\" to \"annotations.reader\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \".1_ArrayCache~IsFa4SE\" to \"annotations.cached_reader\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \".2_PhpArrayAdapter~IsFa4SE\" to \"annotations.cache\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"cache.property_access\" to \"property_accessor\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"serializer.normalizer.json_serializable\" to \"serializer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"serializer.normalizer.datetime\" to \"serializer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"serializer.normalizer.constraint_violation_list\" to \"serializer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"serializer.normalizer.dateinterval\" to \"serializer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"serializer.normalizer.data_uri\" to \"serializer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"serializer.denormalizer.array\" to \"serializer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"serializer.normalizer.object\" to \"serializer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"serializer.encoder.xml\" to \"serializer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"serializer.encoder.json\" to \"serializer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"serializer.encoder.yaml\" to \"serializer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"serializer.encoder.csv\" to \"serializer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"property_info\" to \"serializer.normalizer.object\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"serializer.mapping.class_discriminator_resolver\" to \"serializer.normalizer.object\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"serializer.mapping.chain_loader\" to \"serializer.mapping.class_metadata_factory\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"monolog.logger.http_client\" to \"http_client\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"sensio_framework_extra.converter.manager\" to \"sensio_framework_extra.converter.listener\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"sensio_framework_extra.converter.doctrine.orm\" to \"sensio_framework_extra.converter.manager\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"framework_extra_bundle.date_time_param_converter\" to \"sensio_framework_extra.converter.manager\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"sensio_framework_extra.converter.doctrine.orm.expression_language.default\" to \"sensio_framework_extra.converter.doctrine.orm\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"sensio_framework_extra.view.guesser\" to \"sensio_framework_extra.view.listener\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"sensio_framework_extra.security.expression_language.default\" to \"sensio_framework_extra.security.listener\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"monolog.logger.doctrine\" to \"doctrine.dbal.logger\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"doctrine.dbal.logger.chain.default\" to \"doctrine.dbal.default_connection.configuration\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"doctrine.dbal.logger\" to \"doctrine.dbal.logger.chain.default\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \".service_locator.Otd28_S\" to \"doctrine.dbal.default_connection.event_manager\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"doctrine.dbal.default_connection.configuration\" to \"doctrine.dbal.default_connection\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"doctrine.dbal.default_connection.event_manager\" to \"doctrine.dbal.default_connection\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"doctrine.dbal.connection_factory\" to \"doctrine.dbal.default_connection\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \".service_locator._ZQxHRQ\" to \"doctrine.orm.container_repository_factory\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"doctrine.orm.default_metadata_driver\" to \"doctrine.orm.default_configuration\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"doctrine.orm.naming_strategy.underscore\" to \"doctrine.orm.default_configuration\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"doctrine.orm.quote_strategy.default\" to \"doctrine.orm.default_configuration\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"doctrine.orm.default_entity_listener_resolver\" to \"doctrine.orm.default_configuration\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"doctrine.orm.container_repository_factory\" to \"doctrine.orm.default_configuration\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"doctrine.orm.default_annotation_metadata_driver\" to \"doctrine.orm.default_metadata_driver\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"doctrine.orm.default_configuration\" to \"doctrine.orm.default_entity_manager\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"doctrine.orm.default_manager_configurator\" to \"doctrine.orm.default_entity_manager\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"security.expression_language\" to \"security.access.expression_voter\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \".service_locator.h018nLA\" to \"security.firewall.map\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"cache.security_expression_language.recorder_inner\" to \"cache.security_expression_language\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"security.authentication.retry_entry_point\" to \"security.channel_listener\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \".security.request_matcher.5dJADCx\" to \"security.access_map\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \".security.request_matcher.NDUbcWM\" to \"security.access_map\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"debug.security.access.decision_manager.inner\" to \"debug.security.access.decision_manager\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"security.logout.success_handler.main\" to \"security.logout_listener.main\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"security.logout.handler.csrf_token_clearing\" to \"security.logout_listener.main\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"security.logout.handler.session\" to \"security.logout_listener.main\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"security.user_checker\" to \"security.authentication.provider.dao.main\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"security.authentication.success_handler.main.form_login\" to \"security.authentication.listener.form.main\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"security.authentication.failure_handler.main.form_login\" to \"security.authentication.listener.form.main\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"security.exception_listener.main\" to \"security.firewall.map.context.main\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"security.logout_listener.main\" to \"security.firewall.map.context.main\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"security.firewall.map.config.main\" to \"security.firewall.map.context.main\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"twig.loader.native_filesystem\" to \"twig\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"twig.extension.security_csrf\" to \"twig\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"twig.extension.logout_url\" to \"twig\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"twig.extension.security\" to \"twig\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"twig.extension.profiler\" to \"twig\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"twig.extension.trans\" to \"twig\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"twig.extension.assets\" to \"twig\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"twig.extension.code\" to \"twig\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"twig.extension.routing\" to \"twig\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"twig.extension.yaml\" to \"twig\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"twig.extension.debug.stopwatch\" to \"twig\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"twig.extension.expression\" to \"twig\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"twig.extension.httpkernel\" to \"twig\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"twig.extension.httpfoundation\" to \"twig\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"twig.extension.weblink\" to \"twig\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"twig.extension.form\" to \"twig\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"twig.extension.dump\" to \"twig\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"doctrine.twig.doctrine_extension\" to \"twig\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"twig.extension.webprofiler\" to \"twig\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"twig.app_variable\" to \"twig\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"twig.runtime_loader\" to \"twig\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"twig.configurator.environment\" to \"twig\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \".service_locator.lSIKWsr.twig.cache_warmer\" to \"twig.cache_warmer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \".service_locator.lSIKWsr.twig.template_cache_warmer\" to \"twig.template_cache_warmer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"twig.template_iterator\" to \"twig.template_cache_warmer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"assets.packages\" to \"twig.extension.assets\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"fragment.handler\" to \"twig.runtime.httpkernel\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"url_helper\" to \"twig.extension.httpfoundation\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \".service_locator.uxa.tru\" to \"twig.runtime_loader\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"twig.form.engine\" to \"twig.form.renderer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \".1_NonceGenerator~9ucJZUH\" to \"web_profiler.csp.handler\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \".2_HtmlDumper~9ucJZUH\" to \"twig.extension.webprofiler\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"monolog.processor.psr_log_message\" to \"monolog.handler.main\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \".1_SourceContextProvider~w5sUpF9\" to \"var_dumper.server_connection\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \".2_RequestContextProvider~w5sUpF9\" to \"var_dumper.server_connection\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \".3_CliContextProvider~w5sUpF9\" to \"var_dumper.server_connection\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"monolog.logger.debug\" to \"var_dumper.dump_server\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"var_dumper.dump_server\" to \"var_dumper.command.server_dump\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \".4_CliDescriptor~w5sUpF9\" to \"var_dumper.command.server_dump\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \".5_HtmlDescriptor~w5sUpF9\" to \"var_dumper.command.server_dump\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"maker.autoloader_util\" to \"maker.file_manager\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"maker.autoloader_finder\" to \"maker.autoloader_util\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"maker.event_registry\" to \"maker.maker.make_subscriber\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"maker.user_class_builder\" to \"maker.maker.make_user\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"doctrine.fixtures.loader\" to \"doctrine.fixtures_load_command\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"App\\DataFixtures\\AppFixtures\" to \"doctrine.fixtures.loader\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"maker.maker.make_authenticator\" to \"maker.auto_command.make_auth\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"maker.maker.make_command\" to \"maker.auto_command.make_command\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"maker.maker.make_controller\" to \"maker.auto_command.make_controller\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"maker.maker.make_crud\" to \"maker.auto_command.make_crud\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"maker.maker.make_entity\" to \"maker.auto_command.make_entity\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"maker.maker.make_fixtures\" to \"maker.auto_command.make_fixtures\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"maker.maker.make_form\" to \"maker.auto_command.make_form\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"maker.maker.make_functional_test\" to \"maker.auto_command.make_functional_test\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"maker.maker.make_registration_form\" to \"maker.auto_command.make_registration_form\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"maker.maker.make_serializer_encoder\" to \"maker.auto_command.make_serializer_encoder\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"maker.maker.make_serializer_normalizer\" to \"maker.auto_command.make_serializer_normalizer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"maker.maker.make_subscriber\" to \"maker.auto_command.make_subscriber\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"maker.maker.make_twig_extension\" to \"maker.auto_command.make_twig_extension\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"maker.maker.make_unit_test\" to \"maker.auto_command.make_unit_test\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"maker.maker.make_validator\" to \"maker.auto_command.make_validator\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"maker.maker.make_voter\" to \"maker.auto_command.make_voter\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"maker.maker.make_user\" to \"maker.auto_command.make_user\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"maker.maker.make_migration\" to \"maker.auto_command.make_migration\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"debug.argument_resolver.request_attribute.inner\" to \"debug.argument_resolver.request_attribute\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"debug.argument_resolver.request.inner\" to \"debug.argument_resolver.request\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"debug.argument_resolver.session.inner\" to \"debug.argument_resolver.session\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"debug.security.user_value_resolver.inner\" to \"debug.security.user_value_resolver\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"debug.argument_resolver.service.inner\" to \"debug.argument_resolver.service\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"debug.argument_resolver.default.inner\" to \"debug.argument_resolver.default\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"debug.argument_resolver.variadic.inner\" to \"debug.argument_resolver.variadic\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"debug.argument_resolver.not_tagged_controller.inner\" to \"debug.argument_resolver.not_tagged_controller\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"security.access.authenticated_voter\" to \"debug.security.voter.security.access.authenticated_voter\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"security.access.role_hierarchy_voter\" to \"debug.security.voter.security.access.role_hierarchy_voter\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"security.access.expression_voter\" to \"debug.security.voter.security.access.expression_voter\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"monolog.handler.null_internal\" to \"monolog.logger.event\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \".service_locator._pu.0Tb\" to \".service_locator._pu.0Tb.translation.warmer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \".service_locator.kbKiEzc\" to \".service_locator.kbKiEzc.router.default\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \".service_locator.m8PwGkX\" to \".service_locator.m8PwGkX.router.cache_warmer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \".service_locator.JgKnBZT\" to \"console.command_loader\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \".service_locator.kbKiEzc.router.default\" to \"router\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"monolog.logger.router\" to \"router\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"swiftmailer.mailer.default.spool.memory\" to \"swiftmailer.transport\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"debug.validator.inner\" to \"validator\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"debug.event_dispatcher.inner\" to \"event_dispatcher\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"monolog.logger.event\" to \"event_dispatcher\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"monolog.logger.profiler\" to \"profiler\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"monolog.logger.profiler\" to \"profiler\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"file_locator\" to \"routing.loader\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"file_locator\" to \"routing.loader\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"file_locator\" to \"routing.loader\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"file_locator\" to \"routing.loader\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"file_locator\" to \"routing.loader\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"routing.loader.annotation\" to \"routing.loader\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"file_locator\" to \"routing.loader\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"routing.loader.annotation\" to \"routing.loader\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"file_locator\" to \"routing.loader\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"routing.loader.annotation\" to \"routing.loader\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"serializer.name_converter.metadata_aware\" to \"serializer\".
Symfony\\Component\\DependencyInjection\\Compiler\\InlineServiceDefinitionsPass: Inlined service \"serializer.name_converter.metadata_aware\" to \"serializer\".", "var/cache/dev/srcApp_KernelDevDebugContainerCompiler.log", "/var/www/public/DevLaon/templates/var/cache/dev/srcApp_KernelDevDebugContainerCompiler.log");
    }
}
