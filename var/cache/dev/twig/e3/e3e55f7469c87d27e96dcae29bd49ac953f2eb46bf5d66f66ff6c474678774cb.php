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

/* vendor/swiftmailer/swiftmailer/tests/_samples/smime/sign2.crt */
class __TwigTemplate_fc6bfd930dc6328b73e47df448981b1a432624e91c2ea618e3511286bd659d3c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/_samples/smime/sign2.crt"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/_samples/smime/sign2.crt"));

        // line 1
        echo "-----BEGIN CERTIFICATE-----
MIIDGTCCAgECAQEwDQYJKoZIhvcNAQEFBQAwVjEhMB8GA1UEAwwYU3dpZnRtYWls
ZXIgSW50ZXJtZWRpYXRlMRQwEgYDVQQKDAtTd2lmdG1haWxlcjEOMAwGA1UEBwwF
UGFyaXMxCzAJBgNVBAYTAkZSMB4XDTE0MTEyMDEzMjYyNloXDTE4MTExOTEzMjYy
NlowTzEaMBgGA1UEAwwRU3dpZnRtYWlsZXItVXNlcjIxFDASBgNVBAoMC1N3aWZ0
bWFpbGVyMQ4wDAYDVQQHDAVQYXJpczELMAkGA1UEBhMCRlIwggEiMA0GCSqGSIb3
DQEBAQUAA4IBDwAwggEKAoIBAQDbr1m4z/rzFS/DxUUQIhKNx19oAeGYLt3niaEP
twfvBMNB80gMgM9d+XtqrPAMPeY/2C8t5NlChNPKMcR70JBKdmlSH4/aTjaIfWmD
PoZJjvRRXINZgSHNKIt4ZGAN/EPFr19CBisV4iPxzu+lyIbbkaZJ/qtyatlP7m/q
8TnykFRlyxNEveCakpcXeRd3YTFGKWoED+/URhVc0cCPZVjoeSTtPHAYBnC29lG5
VFbq6NBQiyF4tpjOHRarq6G8PtQFH9CpAZg5bPk3bqka9C8mEr5jWfrM4EHtUkTl
CwVLOQRBsz/nMBT27pXZh18GU0hc3geNDN4kqaeqgNBo0mblAgMBAAEwDQYJKoZI
hvcNAQEFBQADggEBAAHDMuv6oxWPsTQWWGWWFIk7QZu3iogMqFuxhhQxg8BE37CT
Vt1mBVEjYGMkWhMSwWBMWuP6yuOZecWtpp6eOie/UKGg1XoW7Y7zq2aQaP7YPug0
8Lgq1jIo7iO2b6gZeMtLiTZrxyte0z1XzS3wy7ZC9mZjYd7QE7mZ+/rzQ0x5zjOp
G8b3msS/yYYJCMN+HtHln++HOGmm6uhvbsHTfvvZvtl7F5vJ5WhGGlUfjhanSEtZ
1RKx+cbgIv1eFOGO1OTuZfEuKdLb0T38d/rjLeI99nVVKEIGtLmX4dj327GHe/D3
aPr2blF2gOvlzkfN9Vz6ZUE2s3rVBeCg2AVseYQ=
-----END CERTIFICATE-----
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/_samples/smime/sign2.crt";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("-----BEGIN CERTIFICATE-----
MIIDGTCCAgECAQEwDQYJKoZIhvcNAQEFBQAwVjEhMB8GA1UEAwwYU3dpZnRtYWls
ZXIgSW50ZXJtZWRpYXRlMRQwEgYDVQQKDAtTd2lmdG1haWxlcjEOMAwGA1UEBwwF
UGFyaXMxCzAJBgNVBAYTAkZSMB4XDTE0MTEyMDEzMjYyNloXDTE4MTExOTEzMjYy
NlowTzEaMBgGA1UEAwwRU3dpZnRtYWlsZXItVXNlcjIxFDASBgNVBAoMC1N3aWZ0
bWFpbGVyMQ4wDAYDVQQHDAVQYXJpczELMAkGA1UEBhMCRlIwggEiMA0GCSqGSIb3
DQEBAQUAA4IBDwAwggEKAoIBAQDbr1m4z/rzFS/DxUUQIhKNx19oAeGYLt3niaEP
twfvBMNB80gMgM9d+XtqrPAMPeY/2C8t5NlChNPKMcR70JBKdmlSH4/aTjaIfWmD
PoZJjvRRXINZgSHNKIt4ZGAN/EPFr19CBisV4iPxzu+lyIbbkaZJ/qtyatlP7m/q
8TnykFRlyxNEveCakpcXeRd3YTFGKWoED+/URhVc0cCPZVjoeSTtPHAYBnC29lG5
VFbq6NBQiyF4tpjOHRarq6G8PtQFH9CpAZg5bPk3bqka9C8mEr5jWfrM4EHtUkTl
CwVLOQRBsz/nMBT27pXZh18GU0hc3geNDN4kqaeqgNBo0mblAgMBAAEwDQYJKoZI
hvcNAQEFBQADggEBAAHDMuv6oxWPsTQWWGWWFIk7QZu3iogMqFuxhhQxg8BE37CT
Vt1mBVEjYGMkWhMSwWBMWuP6yuOZecWtpp6eOie/UKGg1XoW7Y7zq2aQaP7YPug0
8Lgq1jIo7iO2b6gZeMtLiTZrxyte0z1XzS3wy7ZC9mZjYd7QE7mZ+/rzQ0x5zjOp
G8b3msS/yYYJCMN+HtHln++HOGmm6uhvbsHTfvvZvtl7F5vJ5WhGGlUfjhanSEtZ
1RKx+cbgIv1eFOGO1OTuZfEuKdLb0T38d/rjLeI99nVVKEIGtLmX4dj327GHe/D3
aPr2blF2gOvlzkfN9Vz6ZUE2s3rVBeCg2AVseYQ=
-----END CERTIFICATE-----
", "vendor/swiftmailer/swiftmailer/tests/_samples/smime/sign2.crt", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/_samples/smime/sign2.crt");
    }
}
