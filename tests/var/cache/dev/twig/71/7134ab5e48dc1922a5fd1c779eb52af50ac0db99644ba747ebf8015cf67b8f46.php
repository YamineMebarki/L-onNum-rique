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

/* vendor/swiftmailer/swiftmailer/tests/_samples/smime/sign.crt */
class __TwigTemplate_ab7988f2a446b9a9d5ef4857b81ab918e08d1965c9dcf94e14a0d8356c93806f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/_samples/smime/sign.crt"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/_samples/smime/sign.crt"));

        // line 1
        echo "-----BEGIN CERTIFICATE-----
MIIDFjCCAf4CCQDULaNM+Q+g3DANBgkqhkiG9w0BAQUFADBMMRcwFQYDVQQDDA5T
d2lmdG1haWxlciBDQTEUMBIGA1UECgwLU3dpZnRtYWlsZXIxDjAMBgNVBAcMBVBh
cmlzMQswCQYDVQQGEwJGUjAeFw0xMzExMjcwODM5MTBaFw0xNzExMjYwODM5MTBa
ME4xGTAXBgNVBAMMEFN3aWZ0bWFpbGVyLVVzZXIxFDASBgNVBAoMC1N3aWZ0bWFp
bGVyMQ4wDAYDVQQHDAVQYXJpczELMAkGA1UEBhMCRlIwggEiMA0GCSqGSIb3DQEB
AQUAA4IBDwAwggEKAoIBAQCTe8ZouyjVGgqlljhaswYqLj7icMoHq+Qg13CE+zJg
tl2/UzyPhAd3WWOIvlQ0lu+E/n0bXrS6+q28DrQ3UgJ9BskzzLz15qUO12b92AvG
vLJ+9kKuiM5KXDljOAsXc7/A9UUGwEFA1D0mkeMmkHuiQavAMkzBLha22hGpg/hz
VbE6W9MGna0szd8yh38IY1M5uR+OZ0dG3KbVZb7H3N0OLOP8j8n+4YtAGAW+Onz/
2CGPfZ1kaDMvY/WTZwyGeA4FwCPy1D8tfeswqKnWDB9Sfl8hns5VxnoJ3dqKQHeX
iC4OMfQ0U4CcuM5sVYJZRNNwP7/TeUh3HegnOnuZ1hy9AgMBAAEwDQYJKoZIhvcN
AQEFBQADggEBAAEPjGt98GIK6ecAEat52aG+8UP7TuZaxoH3cbZdhFTafrP8187F
Rk5G3LCPTeA/QIzbHppA4fPAiS07OVSwVCknpTJbtKKn0gmtTZxThacFHF2NlzTH
XxM5bIbkK3jzIF+WattyTSj34UHHfaNAmvmS7Jyq6MhjSDbcQ+/dZ9eo2tF/AmrC
+MBhyH8aUYwKhTOQQh8yC11niziHhGO99FQ4tpuD9AKlun5snHq4uK9AOFe8VhoR
q2CqX5g5v8OAtdlvzhp50IqD4BNOP+JrUxjGLHDG76BZZIK2Ai1eBz+GhRlIQru/
8EhQzd94mdFEPblGbmuD2QXWLFFKLiYOwOc=
-----END CERTIFICATE-----
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/_samples/smime/sign.crt";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("-----BEGIN CERTIFICATE-----
MIIDFjCCAf4CCQDULaNM+Q+g3DANBgkqhkiG9w0BAQUFADBMMRcwFQYDVQQDDA5T
d2lmdG1haWxlciBDQTEUMBIGA1UECgwLU3dpZnRtYWlsZXIxDjAMBgNVBAcMBVBh
cmlzMQswCQYDVQQGEwJGUjAeFw0xMzExMjcwODM5MTBaFw0xNzExMjYwODM5MTBa
ME4xGTAXBgNVBAMMEFN3aWZ0bWFpbGVyLVVzZXIxFDASBgNVBAoMC1N3aWZ0bWFp
bGVyMQ4wDAYDVQQHDAVQYXJpczELMAkGA1UEBhMCRlIwggEiMA0GCSqGSIb3DQEB
AQUAA4IBDwAwggEKAoIBAQCTe8ZouyjVGgqlljhaswYqLj7icMoHq+Qg13CE+zJg
tl2/UzyPhAd3WWOIvlQ0lu+E/n0bXrS6+q28DrQ3UgJ9BskzzLz15qUO12b92AvG
vLJ+9kKuiM5KXDljOAsXc7/A9UUGwEFA1D0mkeMmkHuiQavAMkzBLha22hGpg/hz
VbE6W9MGna0szd8yh38IY1M5uR+OZ0dG3KbVZb7H3N0OLOP8j8n+4YtAGAW+Onz/
2CGPfZ1kaDMvY/WTZwyGeA4FwCPy1D8tfeswqKnWDB9Sfl8hns5VxnoJ3dqKQHeX
iC4OMfQ0U4CcuM5sVYJZRNNwP7/TeUh3HegnOnuZ1hy9AgMBAAEwDQYJKoZIhvcN
AQEFBQADggEBAAEPjGt98GIK6ecAEat52aG+8UP7TuZaxoH3cbZdhFTafrP8187F
Rk5G3LCPTeA/QIzbHppA4fPAiS07OVSwVCknpTJbtKKn0gmtTZxThacFHF2NlzTH
XxM5bIbkK3jzIF+WattyTSj34UHHfaNAmvmS7Jyq6MhjSDbcQ+/dZ9eo2tF/AmrC
+MBhyH8aUYwKhTOQQh8yC11niziHhGO99FQ4tpuD9AKlun5snHq4uK9AOFe8VhoR
q2CqX5g5v8OAtdlvzhp50IqD4BNOP+JrUxjGLHDG76BZZIK2Ai1eBz+GhRlIQru/
8EhQzd94mdFEPblGbmuD2QXWLFFKLiYOwOc=
-----END CERTIFICATE-----
", "vendor/swiftmailer/swiftmailer/tests/_samples/smime/sign.crt", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/_samples/smime/sign.crt");
    }
}
