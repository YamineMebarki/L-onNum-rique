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

/* src/Controller/SecurityController.php */
class __TwigTemplate_fb047bfbd3408c631072cc06b9c20b96608a8e253f4b6f0304b1189308025d3b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "src/Controller/SecurityController.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "src/Controller/SecurityController.php"));

        // line 1
        echo "<?php

namespace App\\Controller;

use Doctrine\\Common\\Persistence\\ObjectManager;
use Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Routing\\Annotation\\Route;
use App\\Entity\\User;
use App\\Form\\RegistrationType;
use Symfony\\Component\\Security\\Core\\Encoder\\UserPasswordEncoderInterface;

class SecurityController extends AbstractController
{

    /**
     * @Route(\"/inscription\", name=\"security_registration\")
     */
    public function register (Request \$request, ObjectManager \$manager, UserPasswordEncoderInterface \$encoder)
    {
        \$user = new User();
        \$form =\$this->createForm( RegistrationType::class, \$user);
        \$form->handleRequest(\$request);

        if (\$form->isSubmitted() && \$form->isValid())
        {
            \$hash = \$encoder->encodePassword(\$user, \$user->getPassword());
            \$user->setPassword(\$hash);
            \$user->setRole('user');

            \$mail = htmlspecialchars(\$user->getEmail());
            \$name = htmlspecialchars(\$user->getUsername());
            \$str =  '' .\$user->getUsername().' Bienvenue sur L@nNumérique Forum de partages de savoir-faire sur le Web , servez vous de vos compétences afin de créer un article qui sera disponible à toute la communautée.';
            \$msg = htmlspecialchars(\$str);
            \$headers = \"MIME-Version: 1.0\\r\\n\";
            \$headers = \"From: L@nNumérique\" . PHP_EOL;
            \$headers .= 'Content-type: text/html; charset=utf-8' . PHP_EOL;
            mail(\$mail, \$name, \$msg, \$headers);

            \$manager->persist(\$user);
            \$manager->flush();

            return \$this->redirectToRoute('security_login');
        }

        return \$this->render('security/register.html.twig', [
            'form' => \$form->createView()
        ]);
    }

    /**
     * @Route(\"/login\", name=\"security_login\")
     * @return \\Symfony\\Component\\HttpFoundation\\Response
     */
    public function login()
    {
        return \$this->render('security/login.html.twig');
    }

    /**
     * @Route(\"/logout\", name=\"security_logout\")
     */
    public function logout()
    {

    }

    /**
      * @Route(\"/RGPD\", name=\"rgpd\")
      * @return \\Symfony\\Component\\HttpFoundation\\Response
     */
    public function rgpd()
    {
      return  \$this->render('security/confidential.html.twig');
    }

    /**
     * @Route(\"/mentions\", name=\"mention_legal\")
     * @return \\Symfony\\Component\\HttpFoundation\\Response
     */
    public function mentions()
    {
       return \$this->render('security/mention_legal.html.twig');
    }

    /**
     * @Route(\"/404\", name=\"404\")
     */
    public function notFound()
    {
        return \$this->render('security/site.html.twig');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "src/Controller/SecurityController.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace App\\Controller;

use Doctrine\\Common\\Persistence\\ObjectManager;
use Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Routing\\Annotation\\Route;
use App\\Entity\\User;
use App\\Form\\RegistrationType;
use Symfony\\Component\\Security\\Core\\Encoder\\UserPasswordEncoderInterface;

class SecurityController extends AbstractController
{

    /**
     * @Route(\"/inscription\", name=\"security_registration\")
     */
    public function register (Request \$request, ObjectManager \$manager, UserPasswordEncoderInterface \$encoder)
    {
        \$user = new User();
        \$form =\$this->createForm( RegistrationType::class, \$user);
        \$form->handleRequest(\$request);

        if (\$form->isSubmitted() && \$form->isValid())
        {
            \$hash = \$encoder->encodePassword(\$user, \$user->getPassword());
            \$user->setPassword(\$hash);
            \$user->setRole('user');

            \$mail = htmlspecialchars(\$user->getEmail());
            \$name = htmlspecialchars(\$user->getUsername());
            \$str =  '' .\$user->getUsername().' Bienvenue sur L@nNumérique Forum de partages de savoir-faire sur le Web , servez vous de vos compétences afin de créer un article qui sera disponible à toute la communautée.';
            \$msg = htmlspecialchars(\$str);
            \$headers = \"MIME-Version: 1.0\\r\\n\";
            \$headers = \"From: L@nNumérique\" . PHP_EOL;
            \$headers .= 'Content-type: text/html; charset=utf-8' . PHP_EOL;
            mail(\$mail, \$name, \$msg, \$headers);

            \$manager->persist(\$user);
            \$manager->flush();

            return \$this->redirectToRoute('security_login');
        }

        return \$this->render('security/register.html.twig', [
            'form' => \$form->createView()
        ]);
    }

    /**
     * @Route(\"/login\", name=\"security_login\")
     * @return \\Symfony\\Component\\HttpFoundation\\Response
     */
    public function login()
    {
        return \$this->render('security/login.html.twig');
    }

    /**
     * @Route(\"/logout\", name=\"security_logout\")
     */
    public function logout()
    {

    }

    /**
      * @Route(\"/RGPD\", name=\"rgpd\")
      * @return \\Symfony\\Component\\HttpFoundation\\Response
     */
    public function rgpd()
    {
      return  \$this->render('security/confidential.html.twig');
    }

    /**
     * @Route(\"/mentions\", name=\"mention_legal\")
     * @return \\Symfony\\Component\\HttpFoundation\\Response
     */
    public function mentions()
    {
       return \$this->render('security/mention_legal.html.twig');
    }

    /**
     * @Route(\"/404\", name=\"404\")
     */
    public function notFound()
    {
        return \$this->render('security/site.html.twig');
    }
}
", "src/Controller/SecurityController.php", "/var/www/public/DevLaon/templates/src/Controller/SecurityController.php");
    }
}
