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

/* vendor/symfony/security-bundle/Tests/Functional/Bundle/CsrfFormLoginBundle/Form/UserLoginType.php */
class __TwigTemplate_fe52922000374380fef2b3fe0b6a1cff29ce252f578f46220c1f8e0b246dfbc9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/Functional/Bundle/CsrfFormLoginBundle/Form/UserLoginType.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/Functional/Bundle/CsrfFormLoginBundle/Form/UserLoginType.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bundle\\SecurityBundle\\Tests\\Functional\\Bundle\\CsrfFormLoginBundle\\Form;

use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormError;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Component\\Security\\Core\\Security;

/**
 * Form type for use with the Security component's form-based authentication
 * listener.
 *
 * @author Henrik Bjornskov <henrik@bjrnskov.dk>
 * @author Jeremy Mikola <jmikola@gmail.com>
 */
class UserLoginType extends AbstractType
{
    private \$requestStack;

    public function __construct(RequestStack \$requestStack)
    {
        \$this->requestStack = \$requestStack;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder
            ->add('username', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType')
            ->add('password', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\PasswordType')
            ->add('_target_path', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType')
        ;

        \$request = \$this->requestStack->getCurrentRequest();

        /* Note: since the Security component's form login listener intercepts
         * the POST request, this form will never really be bound to the
         * request; however, we can match the expected behavior by checking the
         * session for an authentication error and last username.
         */
        \$builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent \$event) use (\$request) {
            if (\$request->attributes->has(Security::AUTHENTICATION_ERROR)) {
                \$error = \$request->attributes->get(Security::AUTHENTICATION_ERROR);
            } else {
                \$error = \$request->getSession()->get(Security::AUTHENTICATION_ERROR);
            }

            if (\$error) {
                \$event->getForm()->addError(new FormError(\$error->getMessage()));
            }

            \$event->setData(array_replace((array) \$event->getData(), [
                'username' => \$request->getSession()->get(Security::LAST_USERNAME),
            ]));
        });
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver \$resolver)
    {
        /* Note: the form's csrf_token_id must correspond to that for the form login
         * listener in order for the CSRF token to validate successfully.
         */

        \$resolver->setDefaults([
            'csrf_token_id' => 'authenticate',
        ]);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/Tests/Functional/Bundle/CsrfFormLoginBundle/Form/UserLoginType.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bundle\\SecurityBundle\\Tests\\Functional\\Bundle\\CsrfFormLoginBundle\\Form;

use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormError;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Component\\Security\\Core\\Security;

/**
 * Form type for use with the Security component's form-based authentication
 * listener.
 *
 * @author Henrik Bjornskov <henrik@bjrnskov.dk>
 * @author Jeremy Mikola <jmikola@gmail.com>
 */
class UserLoginType extends AbstractType
{
    private \$requestStack;

    public function __construct(RequestStack \$requestStack)
    {
        \$this->requestStack = \$requestStack;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder
            ->add('username', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType')
            ->add('password', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\PasswordType')
            ->add('_target_path', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType')
        ;

        \$request = \$this->requestStack->getCurrentRequest();

        /* Note: since the Security component's form login listener intercepts
         * the POST request, this form will never really be bound to the
         * request; however, we can match the expected behavior by checking the
         * session for an authentication error and last username.
         */
        \$builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent \$event) use (\$request) {
            if (\$request->attributes->has(Security::AUTHENTICATION_ERROR)) {
                \$error = \$request->attributes->get(Security::AUTHENTICATION_ERROR);
            } else {
                \$error = \$request->getSession()->get(Security::AUTHENTICATION_ERROR);
            }

            if (\$error) {
                \$event->getForm()->addError(new FormError(\$error->getMessage()));
            }

            \$event->setData(array_replace((array) \$event->getData(), [
                'username' => \$request->getSession()->get(Security::LAST_USERNAME),
            ]));
        });
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver \$resolver)
    {
        /* Note: the form's csrf_token_id must correspond to that for the form login
         * listener in order for the CSRF token to validate successfully.
         */

        \$resolver->setDefaults([
            'csrf_token_id' => 'authenticate',
        ]);
    }
}
", "vendor/symfony/security-bundle/Tests/Functional/Bundle/CsrfFormLoginBundle/Form/UserLoginType.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/Tests/Functional/Bundle/CsrfFormLoginBundle/Form/UserLoginType.php");
    }
}
