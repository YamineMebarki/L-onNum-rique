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

/* vendor/swiftmailer/swiftmailer/tests/_samples/smime/create-cert.sh */
class __TwigTemplate_415bebb2a2844788139f1a0dec0bb96e92fa341cadf921e7efaea67e6b1ba64a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/_samples/smime/create-cert.sh"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/_samples/smime/create-cert.sh"));

        // line 1
        echo "#!/bin/sh

openssl genrsa -out CA.key 2048
openssl req -x509 -new -nodes -key CA.key -days 1460 -subj '/CN=Swiftmailer CA/O=Swiftmailer/L=Paris/C=FR' -out CA.crt
openssl x509 -in CA.crt -clrtrust -out CA.crt

openssl genrsa -out sign.key 2048
openssl req -new -key sign.key -subj '/CN=Swiftmailer-User/O=Swiftmailer/L=Paris/C=FR' -out sign.csr
openssl x509 -req -in sign.csr -CA CA.crt -CAkey CA.key -out sign.crt -days 1460 -addtrust emailProtection
openssl x509 -in sign.crt -clrtrust -out sign.crt

rm sign.csr

openssl genrsa -out intermediate.key 2048
openssl req -new -key intermediate.key -subj '/CN=Swiftmailer Intermediate/O=Swiftmailer/L=Paris/C=FR' -out intermediate.csr
openssl x509 -req -in intermediate.csr -CA CA.crt -CAkey CA.key -set_serial 01 -out intermediate.crt -days 1460
openssl x509 -in intermediate.crt -clrtrust -out intermediate.crt

rm intermediate.csr

openssl genrsa -out sign2.key 2048
openssl req -new -key sign2.key -subj '/CN=Swiftmailer-User2/O=Swiftmailer/L=Paris/C=FR' -out sign2.csr
openssl x509 -req -in sign2.csr -CA intermediate.crt -CAkey intermediate.key -set_serial 01 -out sign2.crt -days 1460 -addtrust emailProtection
openssl x509 -in sign2.crt -clrtrust -out sign2.crt

rm sign2.csr

openssl genrsa -out encrypt.key 2048
openssl req -new -key encrypt.key -subj '/CN=Swiftmailer-User/O=Swiftmailer/L=Paris/C=FR' -out encrypt.csr
openssl x509 -req -in encrypt.csr -CA CA.crt -CAkey CA.key -CAcreateserial -out encrypt.crt -days 1460 -addtrust emailProtection
openssl x509 -in encrypt.crt -clrtrust -out encrypt.crt

rm encrypt.csr

openssl genrsa -out encrypt2.key 2048
openssl req -new -key encrypt2.key -subj '/CN=Swiftmailer-User2/O=Swiftmailer/L=Paris/C=FR' -out encrypt2.csr
openssl x509 -req -in encrypt2.csr -CA CA.crt -CAkey CA.key -CAcreateserial -out encrypt2.crt -days 1460 -addtrust emailProtection
openssl x509 -in encrypt2.crt -clrtrust -out encrypt2.crt

rm encrypt2.csr
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/_samples/smime/create-cert.sh";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("#!/bin/sh

openssl genrsa -out CA.key 2048
openssl req -x509 -new -nodes -key CA.key -days 1460 -subj '/CN=Swiftmailer CA/O=Swiftmailer/L=Paris/C=FR' -out CA.crt
openssl x509 -in CA.crt -clrtrust -out CA.crt

openssl genrsa -out sign.key 2048
openssl req -new -key sign.key -subj '/CN=Swiftmailer-User/O=Swiftmailer/L=Paris/C=FR' -out sign.csr
openssl x509 -req -in sign.csr -CA CA.crt -CAkey CA.key -out sign.crt -days 1460 -addtrust emailProtection
openssl x509 -in sign.crt -clrtrust -out sign.crt

rm sign.csr

openssl genrsa -out intermediate.key 2048
openssl req -new -key intermediate.key -subj '/CN=Swiftmailer Intermediate/O=Swiftmailer/L=Paris/C=FR' -out intermediate.csr
openssl x509 -req -in intermediate.csr -CA CA.crt -CAkey CA.key -set_serial 01 -out intermediate.crt -days 1460
openssl x509 -in intermediate.crt -clrtrust -out intermediate.crt

rm intermediate.csr

openssl genrsa -out sign2.key 2048
openssl req -new -key sign2.key -subj '/CN=Swiftmailer-User2/O=Swiftmailer/L=Paris/C=FR' -out sign2.csr
openssl x509 -req -in sign2.csr -CA intermediate.crt -CAkey intermediate.key -set_serial 01 -out sign2.crt -days 1460 -addtrust emailProtection
openssl x509 -in sign2.crt -clrtrust -out sign2.crt

rm sign2.csr

openssl genrsa -out encrypt.key 2048
openssl req -new -key encrypt.key -subj '/CN=Swiftmailer-User/O=Swiftmailer/L=Paris/C=FR' -out encrypt.csr
openssl x509 -req -in encrypt.csr -CA CA.crt -CAkey CA.key -CAcreateserial -out encrypt.crt -days 1460 -addtrust emailProtection
openssl x509 -in encrypt.crt -clrtrust -out encrypt.crt

rm encrypt.csr

openssl genrsa -out encrypt2.key 2048
openssl req -new -key encrypt2.key -subj '/CN=Swiftmailer-User2/O=Swiftmailer/L=Paris/C=FR' -out encrypt2.csr
openssl x509 -req -in encrypt2.csr -CA CA.crt -CAkey CA.key -CAcreateserial -out encrypt2.crt -days 1460 -addtrust emailProtection
openssl x509 -in encrypt2.crt -clrtrust -out encrypt2.crt

rm encrypt2.csr
", "vendor/swiftmailer/swiftmailer/tests/_samples/smime/create-cert.sh", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/_samples/smime/create-cert.sh");
    }
}
