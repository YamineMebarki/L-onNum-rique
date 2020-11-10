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

/* vendor/symfony/maker-bundle/src/Resources/skeleton/register/RegistrationController.tpl.php */
class __TwigTemplate_301e1aa65af5a48409a2086dda0b8b1f6a51543acb870b8e6ec643f2792a779c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Resources/skeleton/register/RegistrationController.tpl.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Resources/skeleton/register/RegistrationController.tpl.php"));

        // line 1
        echo "<?= \"<?php\\n\" ?>

namespace <?= \$namespace; ?>;

use <?= \$user_full_class_name ?>;
use <?= \$form_full_class_name ?>;
<?php if (\$authenticator_full_class_name): ?>
use <?= \$authenticator_full_class_name; ?>;
<?php endif; ?>
use Symfony\\Bundle\\FrameworkBundle\\Controller\\<?= \$parent_class_name; ?>;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Routing\\Annotation\\Route;
use Symfony\\Component\\Security\\Core\\Encoder\\UserPasswordEncoderInterface;
<?php if (\$authenticator_full_class_name): ?>
use Symfony\\Component\\Security\\Guard\\GuardAuthenticatorHandler;
<?php endif; ?>

class <?= \$class_name; ?> extends <?= \$parent_class_name; ?><?= \"\\n\" ?>
{
    /**
     * @Route(\"<?= \$route_path ?>\", name=\"<?= \$route_name ?>\")
     */
    public function register(Request \$request, UserPasswordEncoderInterface \$passwordEncoder<?= \$authenticator_full_class_name ? sprintf(', GuardAuthenticatorHandler \$guardHandler, %s \$authenticator', \$authenticator_class_name) : '' ?>): Response
    {
        \$user = new <?= \$user_class_name ?>();
        \$form = \$this->createForm(<?= \$form_class_name ?>::class, \$user);
        \$form->handleRequest(\$request);

        if (\$form->isSubmitted() && \$form->isValid()) {
            // encode the plain password
            \$user->set<?= ucfirst(\$password_field) ?>(
                \$passwordEncoder->encodePassword(
                    \$user,
                    \$form->get('plainPassword')->getData()
                )
            );

            \$entityManager = \$this->getDoctrine()->getManager();
            \$entityManager->persist(\$user);
            \$entityManager->flush();

            // do anything else you need here, like send an email

<?php if (\$authenticator_full_class_name): ?>
            return \$guardHandler->authenticateUserAndHandleSuccess(
                \$user,
                \$request,
                \$authenticator,
                '<?= \$firewall_name; ?>' // firewall name in security.yaml
            );
<?php else: ?>
            return \$this->redirectToRoute('<?= \$redirect_route_name ?>');
<?php endif; ?>
        }

        return \$this->render('register/register.html.twig', [
            'registrationForm' => \$form->createView(),
        ]);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/maker-bundle/src/Resources/skeleton/register/RegistrationController.tpl.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?= \"<?php\\n\" ?>

namespace <?= \$namespace; ?>;

use <?= \$user_full_class_name ?>;
use <?= \$form_full_class_name ?>;
<?php if (\$authenticator_full_class_name): ?>
use <?= \$authenticator_full_class_name; ?>;
<?php endif; ?>
use Symfony\\Bundle\\FrameworkBundle\\Controller\\<?= \$parent_class_name; ?>;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Routing\\Annotation\\Route;
use Symfony\\Component\\Security\\Core\\Encoder\\UserPasswordEncoderInterface;
<?php if (\$authenticator_full_class_name): ?>
use Symfony\\Component\\Security\\Guard\\GuardAuthenticatorHandler;
<?php endif; ?>

class <?= \$class_name; ?> extends <?= \$parent_class_name; ?><?= \"\\n\" ?>
{
    /**
     * @Route(\"<?= \$route_path ?>\", name=\"<?= \$route_name ?>\")
     */
    public function register(Request \$request, UserPasswordEncoderInterface \$passwordEncoder<?= \$authenticator_full_class_name ? sprintf(', GuardAuthenticatorHandler \$guardHandler, %s \$authenticator', \$authenticator_class_name) : '' ?>): Response
    {
        \$user = new <?= \$user_class_name ?>();
        \$form = \$this->createForm(<?= \$form_class_name ?>::class, \$user);
        \$form->handleRequest(\$request);

        if (\$form->isSubmitted() && \$form->isValid()) {
            // encode the plain password
            \$user->set<?= ucfirst(\$password_field) ?>(
                \$passwordEncoder->encodePassword(
                    \$user,
                    \$form->get('plainPassword')->getData()
                )
            );

            \$entityManager = \$this->getDoctrine()->getManager();
            \$entityManager->persist(\$user);
            \$entityManager->flush();

            // do anything else you need here, like send an email

<?php if (\$authenticator_full_class_name): ?>
            return \$guardHandler->authenticateUserAndHandleSuccess(
                \$user,
                \$request,
                \$authenticator,
                '<?= \$firewall_name; ?>' // firewall name in security.yaml
            );
<?php else: ?>
            return \$this->redirectToRoute('<?= \$redirect_route_name ?>');
<?php endif; ?>
        }

        return \$this->render('register/register.html.twig', [
            'registrationForm' => \$form->createView(),
        ]);
    }
}
", "vendor/symfony/maker-bundle/src/Resources/skeleton/register/RegistrationController.tpl.php", "/var/www/public/DevLaon/templates/vendor/symfony/maker-bundle/src/Resources/skeleton/register/RegistrationController.tpl.php");
    }
}
