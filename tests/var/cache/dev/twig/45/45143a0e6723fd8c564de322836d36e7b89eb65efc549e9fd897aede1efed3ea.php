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

/* vendor/symfony/maker-bundle/src/Resources/skeleton/authenticator/LoginFormAuthenticator.tpl.php */
class __TwigTemplate_beae1f5119145c5e1832564bc65ee3c3c740aa2e81d29adb441c4dec404bfc7c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Resources/skeleton/authenticator/LoginFormAuthenticator.tpl.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Resources/skeleton/authenticator/LoginFormAuthenticator.tpl.php"));

        // line 1
        echo "<?= \"<?php\\n\" ?>

namespace <?= \$namespace ?>;

<?= \$user_is_entity ? \"use \$user_fully_qualified_class_name;\\n\" : null ?>
<?= \$user_is_entity ? \"use Doctrine\\\\ORM\\\\EntityManagerInterface;\\n\" : null ?>
use Symfony\\Component\\HttpFoundation\\RedirectResponse;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
<?= \$user_needs_encoder ? \"use Symfony\\\\Component\\\\Security\\\\Core\\\\Encoder\\\\UserPasswordEncoderInterface;\\n\" : null ?>
use Symfony\\Component\\Security\\Core\\Exception\\CustomUserMessageAuthenticationException;
use Symfony\\Component\\Security\\Core\\Exception\\InvalidCsrfTokenException;
use Symfony\\Component\\Security\\Core\\Security;
use Symfony\\Component\\Security\\Core\\User\\UserInterface;
use Symfony\\Component\\Security\\Core\\User\\UserProviderInterface;
use Symfony\\Component\\Security\\Csrf\\CsrfToken;
use Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface;
use Symfony\\Component\\Security\\Guard\\Authenticator\\AbstractFormLoginAuthenticator;
<?= (\$password_authenticated = \$user_needs_encoder && interface_exists('Symfony\\Component\\Security\\Guard\\PasswordAuthenticatedInterface')) ? \"use Symfony\\Component\\Security\\Guard\\PasswordAuthenticatedInterface;\\n\" : '' ?>
use Symfony\\Component\\Security\\Http\\Util\\TargetPathTrait;

class <?= \$class_name; ?> extends AbstractFormLoginAuthenticator<?= \$password_authenticated ? \" implements PasswordAuthenticatedInterface\\n\" : \"\\n\" ?>
{
    use TargetPathTrait;

<?= \$user_is_entity ? \"    private \\\$entityManager;\\n\" : null ?>
    private \$urlGenerator;
    private \$csrfTokenManager;
<?= \$user_needs_encoder ? \"    private \\\$passwordEncoder;\\n\" : null ?>

    public function __construct(<?= \$user_is_entity ? 'EntityManagerInterface \$entityManager, ' : null ?>UrlGeneratorInterface \$urlGenerator, CsrfTokenManagerInterface \$csrfTokenManager<?= \$user_needs_encoder ? ', UserPasswordEncoderInterface \$passwordEncoder' : null ?>)
    {
<?= \$user_is_entity ? \"        \\\$this->entityManager = \\\$entityManager;\\n\" : null ?>
        \$this->urlGenerator = \$urlGenerator;
        \$this->csrfTokenManager = \$csrfTokenManager;
<?= \$user_needs_encoder ? \"        \\\$this->passwordEncoder = \\\$passwordEncoder;\\n\" : null ?>
    }

    public function supports(Request \$request)
    {
        return 'app_login' === \$request->attributes->get('_route')
            && \$request->isMethod('POST');
    }

    public function getCredentials(Request \$request)
    {
        \$credentials = [
            '<?= \$username_field ?>' => \$request->request->get('<?= \$username_field ?>'),
            'password' => \$request->request->get('password'),
            'csrf_token' => \$request->request->get('_csrf_token'),
        ];
        \$request->getSession()->set(
            Security::LAST_USERNAME,
            \$credentials['<?= \$username_field ?>']
        );

        return \$credentials;
    }

    public function getUser(\$credentials, UserProviderInterface \$userProvider)
    {
        \$token = new CsrfToken('authenticate', \$credentials['csrf_token']);
        if (!\$this->csrfTokenManager->isTokenValid(\$token)) {
            throw new InvalidCsrfTokenException();
        }

        <?= \$user_is_entity ? \"\\\$user = \\\$this->entityManager->getRepository(\$user_class_name::class)->findOneBy(['\$username_field' => \\\$credentials['\$username_field']]);\\n\"
        : \"// Load / create our user however you need.
        // You can do this by calling the user provider, or with custom logic here.
        \\\$user = \\\$userProvider->loadUserByUsername(\\\$credentials['\$username_field']);\\n\"; ?>

        if (!\$user) {
            // fail authentication with a custom error
            throw new CustomUserMessageAuthenticationException('<?= ucfirst(\$username_field_label) ?> could not be found.');
        }

        return \$user;
    }

    public function checkCredentials(\$credentials, UserInterface \$user)
    {
        <?= \$user_needs_encoder ? \"return \\\$this->passwordEncoder->isPasswordValid(\\\$user, \\\$credentials['password']);\\n\"
        : \"// Check the user's password or other credentials and return true or false
        // If there are no credentials to check, you can just return true
        throw new \\Exception('Todo: check the credentials inside '.__FILE__);\\n\" ?>
    }

<?php if (\$password_authenticated): ?>
    /**
     * Used to upgrade (rehash) the user's password automatically over time.
     */
    public function getPassword(\$credentials): ?string
    {
        return \$credentials['password'];
    }

<?php endif ?>
    public function onAuthenticationSuccess(Request \$request, TokenInterface \$token, \$providerKey)
    {
        if (\$targetPath = \$this->getTargetPath(\$request->getSession(), \$providerKey)) {
            return new RedirectResponse(\$targetPath);
        }

        // For example : return new RedirectResponse(\$this->urlGenerator->generate('some_route'));
        throw new \\Exception('Todo: provide a valid redirect inside '.__FILE__);
    }

    protected function getLoginUrl()
    {
        return \$this->urlGenerator->generate('app_login');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/maker-bundle/src/Resources/skeleton/authenticator/LoginFormAuthenticator.tpl.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?= \"<?php\\n\" ?>

namespace <?= \$namespace ?>;

<?= \$user_is_entity ? \"use \$user_fully_qualified_class_name;\\n\" : null ?>
<?= \$user_is_entity ? \"use Doctrine\\\\ORM\\\\EntityManagerInterface;\\n\" : null ?>
use Symfony\\Component\\HttpFoundation\\RedirectResponse;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
<?= \$user_needs_encoder ? \"use Symfony\\\\Component\\\\Security\\\\Core\\\\Encoder\\\\UserPasswordEncoderInterface;\\n\" : null ?>
use Symfony\\Component\\Security\\Core\\Exception\\CustomUserMessageAuthenticationException;
use Symfony\\Component\\Security\\Core\\Exception\\InvalidCsrfTokenException;
use Symfony\\Component\\Security\\Core\\Security;
use Symfony\\Component\\Security\\Core\\User\\UserInterface;
use Symfony\\Component\\Security\\Core\\User\\UserProviderInterface;
use Symfony\\Component\\Security\\Csrf\\CsrfToken;
use Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface;
use Symfony\\Component\\Security\\Guard\\Authenticator\\AbstractFormLoginAuthenticator;
<?= (\$password_authenticated = \$user_needs_encoder && interface_exists('Symfony\\Component\\Security\\Guard\\PasswordAuthenticatedInterface')) ? \"use Symfony\\Component\\Security\\Guard\\PasswordAuthenticatedInterface;\\n\" : '' ?>
use Symfony\\Component\\Security\\Http\\Util\\TargetPathTrait;

class <?= \$class_name; ?> extends AbstractFormLoginAuthenticator<?= \$password_authenticated ? \" implements PasswordAuthenticatedInterface\\n\" : \"\\n\" ?>
{
    use TargetPathTrait;

<?= \$user_is_entity ? \"    private \\\$entityManager;\\n\" : null ?>
    private \$urlGenerator;
    private \$csrfTokenManager;
<?= \$user_needs_encoder ? \"    private \\\$passwordEncoder;\\n\" : null ?>

    public function __construct(<?= \$user_is_entity ? 'EntityManagerInterface \$entityManager, ' : null ?>UrlGeneratorInterface \$urlGenerator, CsrfTokenManagerInterface \$csrfTokenManager<?= \$user_needs_encoder ? ', UserPasswordEncoderInterface \$passwordEncoder' : null ?>)
    {
<?= \$user_is_entity ? \"        \\\$this->entityManager = \\\$entityManager;\\n\" : null ?>
        \$this->urlGenerator = \$urlGenerator;
        \$this->csrfTokenManager = \$csrfTokenManager;
<?= \$user_needs_encoder ? \"        \\\$this->passwordEncoder = \\\$passwordEncoder;\\n\" : null ?>
    }

    public function supports(Request \$request)
    {
        return 'app_login' === \$request->attributes->get('_route')
            && \$request->isMethod('POST');
    }

    public function getCredentials(Request \$request)
    {
        \$credentials = [
            '<?= \$username_field ?>' => \$request->request->get('<?= \$username_field ?>'),
            'password' => \$request->request->get('password'),
            'csrf_token' => \$request->request->get('_csrf_token'),
        ];
        \$request->getSession()->set(
            Security::LAST_USERNAME,
            \$credentials['<?= \$username_field ?>']
        );

        return \$credentials;
    }

    public function getUser(\$credentials, UserProviderInterface \$userProvider)
    {
        \$token = new CsrfToken('authenticate', \$credentials['csrf_token']);
        if (!\$this->csrfTokenManager->isTokenValid(\$token)) {
            throw new InvalidCsrfTokenException();
        }

        <?= \$user_is_entity ? \"\\\$user = \\\$this->entityManager->getRepository(\$user_class_name::class)->findOneBy(['\$username_field' => \\\$credentials['\$username_field']]);\\n\"
        : \"// Load / create our user however you need.
        // You can do this by calling the user provider, or with custom logic here.
        \\\$user = \\\$userProvider->loadUserByUsername(\\\$credentials['\$username_field']);\\n\"; ?>

        if (!\$user) {
            // fail authentication with a custom error
            throw new CustomUserMessageAuthenticationException('<?= ucfirst(\$username_field_label) ?> could not be found.');
        }

        return \$user;
    }

    public function checkCredentials(\$credentials, UserInterface \$user)
    {
        <?= \$user_needs_encoder ? \"return \\\$this->passwordEncoder->isPasswordValid(\\\$user, \\\$credentials['password']);\\n\"
        : \"// Check the user's password or other credentials and return true or false
        // If there are no credentials to check, you can just return true
        throw new \\Exception('Todo: check the credentials inside '.__FILE__);\\n\" ?>
    }

<?php if (\$password_authenticated): ?>
    /**
     * Used to upgrade (rehash) the user's password automatically over time.
     */
    public function getPassword(\$credentials): ?string
    {
        return \$credentials['password'];
    }

<?php endif ?>
    public function onAuthenticationSuccess(Request \$request, TokenInterface \$token, \$providerKey)
    {
        if (\$targetPath = \$this->getTargetPath(\$request->getSession(), \$providerKey)) {
            return new RedirectResponse(\$targetPath);
        }

        // For example : return new RedirectResponse(\$this->urlGenerator->generate('some_route'));
        throw new \\Exception('Todo: provide a valid redirect inside '.__FILE__);
    }

    protected function getLoginUrl()
    {
        return \$this->urlGenerator->generate('app_login');
    }
}
", "vendor/symfony/maker-bundle/src/Resources/skeleton/authenticator/LoginFormAuthenticator.tpl.php", "/var/www/public/DevLaon/templates/vendor/symfony/maker-bundle/src/Resources/skeleton/authenticator/LoginFormAuthenticator.tpl.php");
    }
}
