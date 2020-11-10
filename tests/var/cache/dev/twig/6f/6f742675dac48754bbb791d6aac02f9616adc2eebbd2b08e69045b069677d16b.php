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

/* vendor/symfony/security-bundle/Tests/DependencyInjection/Fixtures/php/container1.php */
class __TwigTemplate_acfd864547bcc52944bd4fbadce4a030e230bc6e93a0ae7c872b48350c30ae91 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/DependencyInjection/Fixtures/php/container1.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/DependencyInjection/Fixtures/php/container1.php"));

        // line 1
        echo "<?php

\$container->loadFromExtension('security', [
    'encoders' => [
        'JMS\\FooBundle\\Entity\\User1' => 'plaintext',
        'JMS\\FooBundle\\Entity\\User2' => [
            'algorithm' => 'sha1',
            'encode_as_base64' => false,
            'iterations' => 5,
        ],
        'JMS\\FooBundle\\Entity\\User3' => [
            'algorithm' => 'md5',
        ],
        'JMS\\FooBundle\\Entity\\User4' => [
            'id' => 'security.encoder.foo',
        ],
        'JMS\\FooBundle\\Entity\\User5' => [
            'algorithm' => 'pbkdf2',
            'hash_algorithm' => 'sha1',
            'encode_as_base64' => false,
            'iterations' => 5,
            'key_length' => 30,
        ],
        'JMS\\FooBundle\\Entity\\User6' => [
            'algorithm' => 'native',
            'time_cost' => 8,
            'memory_cost' => 100,
            'cost' => 15,
        ],
        'JMS\\FooBundle\\Entity\\User7' => [
            'algorithm' => 'auto',
        ],
    ],
    'providers' => [
        'default' => [
            'memory' => [
                'users' => [
                    'foo' => ['password' => 'foo', 'roles' => 'ROLE_USER'],
                ],
            ],
        ],
        'digest' => [
            'memory' => [
                'users' => [
                    'foo' => ['password' => 'foo', 'roles' => 'ROLE_USER, ROLE_ADMIN'],
                ],
            ],
        ],
        'basic' => [
            'memory' => [
                'users' => [
                    'foo' => ['password' => '0beec7b5ea3f0fdbc95d0dd47f3c5bc275da8a33', 'roles' => 'ROLE_SUPER_ADMIN'],
                    'bar' => ['password' => '0beec7b5ea3f0fdbc95d0dd47f3c5bc275da8a33', 'roles' => ['ROLE_USER', 'ROLE_ADMIN']],
                ],
            ],
        ],
        'service' => [
            'id' => 'user.manager',
        ],
        'chain' => [
            'chain' => [
                'providers' => ['service', 'basic'],
            ],
        ],
    ],

    'firewalls' => [
        'simple' => ['provider' => 'default', 'pattern' => '/login', 'security' => false],
        'secure' => ['stateless' => true,
            'provider' => 'default',
            'http_basic' => true,
            'form_login' => true,
            'anonymous' => true,
            'switch_user' => true,
            'x509' => true,
            'remote_user' => true,
            'logout' => true,
            'remember_me' => ['secret' => 'TheSecret'],
            'user_checker' => null,
        ],
        'host' => [
            'provider' => 'default',
            'pattern' => '/test',
            'host' => 'foo\\\\.example\\\\.org',
            'methods' => ['GET', 'POST'],
            'anonymous' => true,
            'http_basic' => true,
        ],
        'with_user_checker' => [
            'provider' => 'default',
            'user_checker' => 'app.user_checker',
            'anonymous' => true,
            'http_basic' => true,
        ],
    ],

    'access_control' => [
        ['path' => '/blog/524', 'role' => 'ROLE_USER', 'requires_channel' => 'https', 'methods' => ['get', 'POST'], 'port' => 8000],
        ['path' => '/blog/.*', 'role' => 'IS_AUTHENTICATED_ANONYMOUSLY'],
        ['path' => '/blog/524', 'role' => 'IS_AUTHENTICATED_ANONYMOUSLY', 'allow_if' => \"token.getUsername() matches '/^admin/'\"],
    ],

    'role_hierarchy' => [
        'ROLE_ADMIN' => 'ROLE_USER',
        'ROLE_SUPER_ADMIN' => ['ROLE_USER', 'ROLE_ADMIN', 'ROLE_ALLOWED_TO_SWITCH'],
        'ROLE_REMOTE' => 'ROLE_USER,ROLE_ADMIN',
    ],
]);
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/Tests/DependencyInjection/Fixtures/php/container1.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

\$container->loadFromExtension('security', [
    'encoders' => [
        'JMS\\FooBundle\\Entity\\User1' => 'plaintext',
        'JMS\\FooBundle\\Entity\\User2' => [
            'algorithm' => 'sha1',
            'encode_as_base64' => false,
            'iterations' => 5,
        ],
        'JMS\\FooBundle\\Entity\\User3' => [
            'algorithm' => 'md5',
        ],
        'JMS\\FooBundle\\Entity\\User4' => [
            'id' => 'security.encoder.foo',
        ],
        'JMS\\FooBundle\\Entity\\User5' => [
            'algorithm' => 'pbkdf2',
            'hash_algorithm' => 'sha1',
            'encode_as_base64' => false,
            'iterations' => 5,
            'key_length' => 30,
        ],
        'JMS\\FooBundle\\Entity\\User6' => [
            'algorithm' => 'native',
            'time_cost' => 8,
            'memory_cost' => 100,
            'cost' => 15,
        ],
        'JMS\\FooBundle\\Entity\\User7' => [
            'algorithm' => 'auto',
        ],
    ],
    'providers' => [
        'default' => [
            'memory' => [
                'users' => [
                    'foo' => ['password' => 'foo', 'roles' => 'ROLE_USER'],
                ],
            ],
        ],
        'digest' => [
            'memory' => [
                'users' => [
                    'foo' => ['password' => 'foo', 'roles' => 'ROLE_USER, ROLE_ADMIN'],
                ],
            ],
        ],
        'basic' => [
            'memory' => [
                'users' => [
                    'foo' => ['password' => '0beec7b5ea3f0fdbc95d0dd47f3c5bc275da8a33', 'roles' => 'ROLE_SUPER_ADMIN'],
                    'bar' => ['password' => '0beec7b5ea3f0fdbc95d0dd47f3c5bc275da8a33', 'roles' => ['ROLE_USER', 'ROLE_ADMIN']],
                ],
            ],
        ],
        'service' => [
            'id' => 'user.manager',
        ],
        'chain' => [
            'chain' => [
                'providers' => ['service', 'basic'],
            ],
        ],
    ],

    'firewalls' => [
        'simple' => ['provider' => 'default', 'pattern' => '/login', 'security' => false],
        'secure' => ['stateless' => true,
            'provider' => 'default',
            'http_basic' => true,
            'form_login' => true,
            'anonymous' => true,
            'switch_user' => true,
            'x509' => true,
            'remote_user' => true,
            'logout' => true,
            'remember_me' => ['secret' => 'TheSecret'],
            'user_checker' => null,
        ],
        'host' => [
            'provider' => 'default',
            'pattern' => '/test',
            'host' => 'foo\\\\.example\\\\.org',
            'methods' => ['GET', 'POST'],
            'anonymous' => true,
            'http_basic' => true,
        ],
        'with_user_checker' => [
            'provider' => 'default',
            'user_checker' => 'app.user_checker',
            'anonymous' => true,
            'http_basic' => true,
        ],
    ],

    'access_control' => [
        ['path' => '/blog/524', 'role' => 'ROLE_USER', 'requires_channel' => 'https', 'methods' => ['get', 'POST'], 'port' => 8000],
        ['path' => '/blog/.*', 'role' => 'IS_AUTHENTICATED_ANONYMOUSLY'],
        ['path' => '/blog/524', 'role' => 'IS_AUTHENTICATED_ANONYMOUSLY', 'allow_if' => \"token.getUsername() matches '/^admin/'\"],
    ],

    'role_hierarchy' => [
        'ROLE_ADMIN' => 'ROLE_USER',
        'ROLE_SUPER_ADMIN' => ['ROLE_USER', 'ROLE_ADMIN', 'ROLE_ALLOWED_TO_SWITCH'],
        'ROLE_REMOTE' => 'ROLE_USER,ROLE_ADMIN',
    ],
]);
", "vendor/symfony/security-bundle/Tests/DependencyInjection/Fixtures/php/container1.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/Tests/DependencyInjection/Fixtures/php/container1.php");
    }
}
