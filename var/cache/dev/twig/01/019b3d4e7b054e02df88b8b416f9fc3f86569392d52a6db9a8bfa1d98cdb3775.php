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

/* vendor/symfony/http-client-contracts/Test/Fixtures/web/index.php */
class __TwigTemplate_f74e662c6c50d6925d017cb4167d570bd299b0c7dc58285fd87f899d48bb718e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-client-contracts/Test/Fixtures/web/index.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-client-contracts/Test/Fixtures/web/index.php"));

        // line 1
        echo "<?php

if ('cli-server' !== \\PHP_SAPI) {
    // safe guard against unwanted execution
    throw new \\Exception(\"You cannot run this script directly, it's a fixture for TestHttpServer.\");
}

\$vars = [];

if (!\$_POST) {
    \$_POST = json_decode(file_get_contents('php://input'), true);
    \$_POST['content-type'] = \$_SERVER['HTTP_CONTENT_TYPE'] ?? '?';
}

foreach (\$_SERVER as \$k => \$v) {
    switch (\$k) {
        default:
            if (0 !== strpos(\$k, 'HTTP_')) {
                continue 2;
            }
            // no break
        case 'SERVER_NAME':
        case 'SERVER_PROTOCOL':
        case 'REQUEST_URI':
        case 'REQUEST_METHOD':
        case 'PHP_AUTH_USER':
        case 'PHP_AUTH_PW':
            \$vars[\$k] = \$v;
    }
}

switch (\$vars['REQUEST_URI']) {
    default:
        exit;

    case '/':
    case '/?a=a&b=b':
    case 'http://127.0.0.1:8057/':
    case 'http://localhost:8057/':
        header('Content-Type: application/json');
        ob_start('ob_gzhandler');
        break;

    case '/103':
        header('HTTP/1.1 103 Early Hints');
        header('Link: </css.css>; rel=preload; as=style', false);
        header('Link: </script.js>; rel=preload; as=script', false);
        flush();
        usleep(1000);
        echo \"HTTP/1.1 200 OK\\r\\n\";
        echo \"Date: Fri, 26 May 2017 10:02:11 GMT\\r\\n\";
        echo \"Content-Length: 13\\r\\n\";
        echo \"\\r\\n\";
        echo 'Here the body';
        exit;

    case '/404':
        header('Content-Type: application/json', true, 404);
        break;

    case '/301':
        if ('Basic Zm9vOmJhcg==' === \$vars['HTTP_AUTHORIZATION']) {
            header('Location: http://127.0.0.1:8057/302', true, 301);
        }
        break;

    case '/301/bad-tld':
        header('Location: http://foo.example.', true, 301);
        break;

    case '/301/invalid':
        header('Location: //?foo=bar', true, 301);
        break;

    case '/302':
        if (!isset(\$vars['HTTP_AUTHORIZATION'])) {
            header('Location: http://localhost:8057/', true, 302);
        }
        break;

    case '/302/relative':
        header('Location: ..', true, 302);
        break;

    case '/307':
        header('Location: http://localhost:8057/post', true, 307);
        break;

    case '/length-broken':
        header('Content-Length: 1000');
        break;

    case '/post':
        \$output = json_encode(\$_POST + ['REQUEST_METHOD' => \$vars['REQUEST_METHOD']], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        header('Content-Type: application/json', true);
        header('Content-Length: '.strlen(\$output));
        echo \$output;
        exit;

    case '/timeout-header':
        usleep(300000);
        break;

    case '/timeout-body':
        echo '<1>';
        @ob_flush();
        flush();
        usleep(500000);
        echo '<2>';
        exit;

    case '/timeout-long':
        ignore_user_abort(false);
        sleep(1);
        while (true) {
            echo '<1>';
            @ob_flush();
            flush();
            usleep(500);
        }
        exit;

    case '/chunked':
        header('Transfer-Encoding: chunked');
        echo \"8\\r\\nSymfony \\r\\n5\\r\\nis aw\\r\\n6\\r\\nesome!\\r\\n0\\r\\n\\r\\n\";
        exit;

    case '/chunked-broken':
        header('Transfer-Encoding: chunked');
        echo \"8\\r\\nSymfony \\r\\n5\\r\\nis aw\\r\\n6\\r\\ne\";
        exit;

    case '/gzip-broken':
        header('Content-Encoding: gzip');
        echo str_repeat('-', 1000);
        exit;

    case '/max-duration':
        ignore_user_abort(false);
        while (true) {
            echo '<1>';
            @ob_flush();
            flush();
            usleep(500);
        }
        exit;
}

header('Content-Type: application/json', true);

echo json_encode(\$vars, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-client-contracts/Test/Fixtures/web/index.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

if ('cli-server' !== \\PHP_SAPI) {
    // safe guard against unwanted execution
    throw new \\Exception(\"You cannot run this script directly, it's a fixture for TestHttpServer.\");
}

\$vars = [];

if (!\$_POST) {
    \$_POST = json_decode(file_get_contents('php://input'), true);
    \$_POST['content-type'] = \$_SERVER['HTTP_CONTENT_TYPE'] ?? '?';
}

foreach (\$_SERVER as \$k => \$v) {
    switch (\$k) {
        default:
            if (0 !== strpos(\$k, 'HTTP_')) {
                continue 2;
            }
            // no break
        case 'SERVER_NAME':
        case 'SERVER_PROTOCOL':
        case 'REQUEST_URI':
        case 'REQUEST_METHOD':
        case 'PHP_AUTH_USER':
        case 'PHP_AUTH_PW':
            \$vars[\$k] = \$v;
    }
}

switch (\$vars['REQUEST_URI']) {
    default:
        exit;

    case '/':
    case '/?a=a&b=b':
    case 'http://127.0.0.1:8057/':
    case 'http://localhost:8057/':
        header('Content-Type: application/json');
        ob_start('ob_gzhandler');
        break;

    case '/103':
        header('HTTP/1.1 103 Early Hints');
        header('Link: </css.css>; rel=preload; as=style', false);
        header('Link: </script.js>; rel=preload; as=script', false);
        flush();
        usleep(1000);
        echo \"HTTP/1.1 200 OK\\r\\n\";
        echo \"Date: Fri, 26 May 2017 10:02:11 GMT\\r\\n\";
        echo \"Content-Length: 13\\r\\n\";
        echo \"\\r\\n\";
        echo 'Here the body';
        exit;

    case '/404':
        header('Content-Type: application/json', true, 404);
        break;

    case '/301':
        if ('Basic Zm9vOmJhcg==' === \$vars['HTTP_AUTHORIZATION']) {
            header('Location: http://127.0.0.1:8057/302', true, 301);
        }
        break;

    case '/301/bad-tld':
        header('Location: http://foo.example.', true, 301);
        break;

    case '/301/invalid':
        header('Location: //?foo=bar', true, 301);
        break;

    case '/302':
        if (!isset(\$vars['HTTP_AUTHORIZATION'])) {
            header('Location: http://localhost:8057/', true, 302);
        }
        break;

    case '/302/relative':
        header('Location: ..', true, 302);
        break;

    case '/307':
        header('Location: http://localhost:8057/post', true, 307);
        break;

    case '/length-broken':
        header('Content-Length: 1000');
        break;

    case '/post':
        \$output = json_encode(\$_POST + ['REQUEST_METHOD' => \$vars['REQUEST_METHOD']], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        header('Content-Type: application/json', true);
        header('Content-Length: '.strlen(\$output));
        echo \$output;
        exit;

    case '/timeout-header':
        usleep(300000);
        break;

    case '/timeout-body':
        echo '<1>';
        @ob_flush();
        flush();
        usleep(500000);
        echo '<2>';
        exit;

    case '/timeout-long':
        ignore_user_abort(false);
        sleep(1);
        while (true) {
            echo '<1>';
            @ob_flush();
            flush();
            usleep(500);
        }
        exit;

    case '/chunked':
        header('Transfer-Encoding: chunked');
        echo \"8\\r\\nSymfony \\r\\n5\\r\\nis aw\\r\\n6\\r\\nesome!\\r\\n0\\r\\n\\r\\n\";
        exit;

    case '/chunked-broken':
        header('Transfer-Encoding: chunked');
        echo \"8\\r\\nSymfony \\r\\n5\\r\\nis aw\\r\\n6\\r\\ne\";
        exit;

    case '/gzip-broken':
        header('Content-Encoding: gzip');
        echo str_repeat('-', 1000);
        exit;

    case '/max-duration':
        ignore_user_abort(false);
        while (true) {
            echo '<1>';
            @ob_flush();
            flush();
            usleep(500);
        }
        exit;
}

header('Content-Type: application/json', true);

echo json_encode(\$vars, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
", "vendor/symfony/http-client-contracts/Test/Fixtures/web/index.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-client-contracts/Test/Fixtures/web/index.php");
    }
}
