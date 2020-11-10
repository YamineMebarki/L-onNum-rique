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

/* vendor/swiftmailer/swiftmailer/tests/_samples/smime/ca.crt */
class __TwigTemplate_cacc1650e81acfb705a5e7477800c504dba6fbaebc9640a9775208bb75b9f3cf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/_samples/smime/ca.crt"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/_samples/smime/ca.crt"));

        // line 1
        echo "-----BEGIN CERTIFICATE-----
MIIDazCCAlOgAwIBAgIJAKJCGQYLxWT1MA0GCSqGSIb3DQEBBQUAMEwxFzAVBgNV
BAMMDlN3aWZ0bWFpbGVyIENBMRQwEgYDVQQKDAtTd2lmdG1haWxlcjEOMAwGA1UE
BwwFUGFyaXMxCzAJBgNVBAYTAkZSMB4XDTEzMTEyNzA4MzkxMFoXDTE3MTEyNjA4
MzkxMFowTDEXMBUGA1UEAwwOU3dpZnRtYWlsZXIgQ0ExFDASBgNVBAoMC1N3aWZ0
bWFpbGVyMQ4wDAYDVQQHDAVQYXJpczELMAkGA1UEBhMCRlIwggEiMA0GCSqGSIb3
DQEBAQUAA4IBDwAwggEKAoIBAQC7RLdHE3OWo9aZwv1xA/cYyPui/gegxpTqClRp
gGcVQ+jxIfnJQDQndyoAvFDiqOiZ+gAjZGJeUHDp9C/2IZp05MLh+omt9N8pBykm
3nj/3ZwPXOAO0uyDPAOHhISITAxEuZCqDnq7iYujywtwfQ7bpW1hCK9PfNZYMStM
kw7LsGr5BqcKkPuOWTvxE3+NqK8HxydYolsoApEGhgonyImVh1Pg1Kjkt5ojvwAX
zOdjfw5poY5NArwuLORUH+XocetRo8DC6S42HkU/MoqcYxa9EuRuwuQh7GtE6baR
PgrDsEYaY4Asy43sK81V51F/8Q1bHZKN/goQdxQwzv+/nOLTAgMBAAGjUDBOMB0G
A1UdDgQWBBRHgqkl543tKhsVAvcx1I0JFU7JuDAfBgNVHSMEGDAWgBRHgqkl543t
KhsVAvcx1I0JFU7JuDAMBgNVHRMEBTADAQH/MA0GCSqGSIb3DQEBBQUAA4IBAQAz
OJiEQcygKGkkXXDiXGBvP/cSznj3nG9FolON0yHUBgdvLfNnctRMStGzPke0siLt
RJvjqiL0Uw+blmLJU8lgMyLJ9ctXkiLJ/WflabN7VzmwYRWe5HzafGQJAg5uFjae
VtAAHQgvbmdXB6brWvcMQmB8di7wjVedeigZvkt1z2V0FtBy8ybJaT5H6bX9Bf5C
dS9r4mLhk/0ThthpRhRxsmupSL6e49nJaIk9q0UTEQVnorJXPcs4SPTIY51bCp6u
cOebhNgndSxCiy0zSD7vRjNiyB/YNGZ9Uv/3DNTLleMZ9kZgfoKVpwYKrRL0IFT/
cfS2OV1wxRxq668qaOfK
-----END CERTIFICATE-----
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/_samples/smime/ca.crt";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("-----BEGIN CERTIFICATE-----
MIIDazCCAlOgAwIBAgIJAKJCGQYLxWT1MA0GCSqGSIb3DQEBBQUAMEwxFzAVBgNV
BAMMDlN3aWZ0bWFpbGVyIENBMRQwEgYDVQQKDAtTd2lmdG1haWxlcjEOMAwGA1UE
BwwFUGFyaXMxCzAJBgNVBAYTAkZSMB4XDTEzMTEyNzA4MzkxMFoXDTE3MTEyNjA4
MzkxMFowTDEXMBUGA1UEAwwOU3dpZnRtYWlsZXIgQ0ExFDASBgNVBAoMC1N3aWZ0
bWFpbGVyMQ4wDAYDVQQHDAVQYXJpczELMAkGA1UEBhMCRlIwggEiMA0GCSqGSIb3
DQEBAQUAA4IBDwAwggEKAoIBAQC7RLdHE3OWo9aZwv1xA/cYyPui/gegxpTqClRp
gGcVQ+jxIfnJQDQndyoAvFDiqOiZ+gAjZGJeUHDp9C/2IZp05MLh+omt9N8pBykm
3nj/3ZwPXOAO0uyDPAOHhISITAxEuZCqDnq7iYujywtwfQ7bpW1hCK9PfNZYMStM
kw7LsGr5BqcKkPuOWTvxE3+NqK8HxydYolsoApEGhgonyImVh1Pg1Kjkt5ojvwAX
zOdjfw5poY5NArwuLORUH+XocetRo8DC6S42HkU/MoqcYxa9EuRuwuQh7GtE6baR
PgrDsEYaY4Asy43sK81V51F/8Q1bHZKN/goQdxQwzv+/nOLTAgMBAAGjUDBOMB0G
A1UdDgQWBBRHgqkl543tKhsVAvcx1I0JFU7JuDAfBgNVHSMEGDAWgBRHgqkl543t
KhsVAvcx1I0JFU7JuDAMBgNVHRMEBTADAQH/MA0GCSqGSIb3DQEBBQUAA4IBAQAz
OJiEQcygKGkkXXDiXGBvP/cSznj3nG9FolON0yHUBgdvLfNnctRMStGzPke0siLt
RJvjqiL0Uw+blmLJU8lgMyLJ9ctXkiLJ/WflabN7VzmwYRWe5HzafGQJAg5uFjae
VtAAHQgvbmdXB6brWvcMQmB8di7wjVedeigZvkt1z2V0FtBy8ybJaT5H6bX9Bf5C
dS9r4mLhk/0ThthpRhRxsmupSL6e49nJaIk9q0UTEQVnorJXPcs4SPTIY51bCp6u
cOebhNgndSxCiy0zSD7vRjNiyB/YNGZ9Uv/3DNTLleMZ9kZgfoKVpwYKrRL0IFT/
cfS2OV1wxRxq668qaOfK
-----END CERTIFICATE-----
", "vendor/swiftmailer/swiftmailer/tests/_samples/smime/ca.crt", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/_samples/smime/ca.crt");
    }
}
