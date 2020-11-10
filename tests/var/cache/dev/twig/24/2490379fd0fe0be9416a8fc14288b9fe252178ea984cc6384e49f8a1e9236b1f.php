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

/* vendor/symfony/swiftmailer-bundle/Tests/DependencyInjection/SwiftmailerTransportFactoryTest.php */
class __TwigTemplate_ae1c195827e89c993a3b349cd96a33e1a22dc581320a144c543b7127401e7782 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/swiftmailer-bundle/Tests/DependencyInjection/SwiftmailerTransportFactoryTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/swiftmailer-bundle/Tests/DependencyInjection/SwiftmailerTransportFactoryTest.php"));

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

namespace Symfony\\Bundle\\SwiftmailerBundle\\Tests\\DependencyInjection;

use Symfony\\Bundle\\SwiftmailerBundle\\DependencyInjection\\SwiftmailerTransportFactory;
use Symfony\\Component\\Routing\\RequestContext;

class SwiftmailerTransportFactoryTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testCreateTransportWithSmtp()
    {
        \$options = [
            'transport' => 'smtp',
            'username' => 'user',
            'password' => 'pass',
            'host' => 'host',
            'port' => 1234,
            'timeout' => 42,
            'source_ip' => 'source_ip',
            'local_domain' => 'local_domain',
            'encryption' => 'tls',
            'auth_mode' => 'plain',
        ];

        \$transport = SwiftmailerTransportFactory::createTransport(
            \$options,
            new RequestContext(),
            new \\Swift_Events_SimpleEventDispatcher()
        );
        \$this->assertInstanceOf('Swift_Transport_EsmtpTransport', \$transport);
        \$this->assertSame(\$transport->getHost(), \$options['host']);
        \$this->assertSame(\$transport->getPort(), \$options['port']);
        \$this->assertSame(\$transport->getEncryption(), \$options['encryption']);
        \$this->assertSame(\$transport->getTimeout(), \$options['timeout']);
        \$this->assertSame(\$transport->getSourceIp(), \$options['source_ip']);
        \$this->assertSame(\$transport->getLocalDomain(), \$options['local_domain']);

        \$authHandler = current(\$transport->getExtensionHandlers());
        \$this->assertSame(\$authHandler->getUsername(), \$options['username']);
        \$this->assertSame(\$authHandler->getPassword(), \$options['password']);
        \$this->assertSame(\$authHandler->getAuthMode(), \$options['auth_mode']);
    }

    public function testCreateTransportWithSendmail()
    {
        \$options = [
            'transport' => 'sendmail',
            'command' => '/usr/sbin/sendmail -bs',
        ];

        \$transport = SwiftmailerTransportFactory::createTransport(
            \$options,
            new RequestContext(),
            new \\Swift_Events_SimpleEventDispatcher()
        );
        \$this->assertInstanceOf('Swift_Transport_SendmailTransport', \$transport);
    }

    public function testCreateTransportWithNull()
    {
        \$options = [
            'transport' => 'null',
        ];

        \$transport = SwiftmailerTransportFactory::createTransport(
            \$options,
            new RequestContext(),
            new \\Swift_Events_SimpleEventDispatcher()
        );
        \$this->assertInstanceOf('Swift_Transport_NullTransport', \$transport);
    }

    public function testCreateTransportWithWrongEncryption()
    {
        \$this->expectException(\\InvalidArgumentException::class);
        \$this->expectExceptionMessage('The fake_encryption encryption is not supported');

        SwiftmailerTransportFactory::createTransport(
            [
                'transport' => 'smtp',
                'username' => 'user',
                'password' => 'pass',
                'host' => 'host',
                'port' => 1234,
                'timeout' => 42,
                'source_ip' => 'source_ip',
                'local_domain' => 'local_domain',
                'encryption' => 'fake_encryption',
                'auth_mode' => 'auth_mode',
            ],
            new RequestContext(),
            new \\Swift_Events_SimpleEventDispatcher()
        );
    }

    public function testCreateTransportWithWrongAuthMode()
    {
        \$this->expectException(\\InvalidArgumentException::class);
        \$this->expectExceptionMessage('The fake_auth authentication mode is not supported');

        SwiftmailerTransportFactory::createTransport(
            [
                'transport' => 'smtp',
                'username' => 'user',
                'password' => 'pass',
                'host' => 'host',
                'port' => 1234,
                'timeout' => 42,
                'source_ip' => 'source_ip',
                'local_domain' => 'local_domain',
                'encryption' => 'tls',
                'auth_mode' => 'fake_auth',
            ],
            new RequestContext(),
            new \\Swift_Events_SimpleEventDispatcher()
        );
    }

    public function testCreateTransportWithSmtpAndWithoutRequestContext()
    {
        \$options = [
            'transport' => 'smtp',
            'username' => 'user',
            'password' => 'pass',
            'host' => 'host',
            'port' => 1234,
            'timeout' => 42,
            'source_ip' => 'source_ip',
            'local_domain' => 'local_domain',
            'encryption' => 'tls',
            'auth_mode' => 'plain',
        ];

        \$transport = SwiftmailerTransportFactory::createTransport(
            \$options,
            null,
            new \\Swift_Events_SimpleEventDispatcher()
        );
        \$this->assertInstanceOf('Swift_Transport_EsmtpTransport', \$transport);
        \$this->assertSame(\$transport->getHost(), \$options['host']);
        \$this->assertSame(\$transport->getPort(), \$options['port']);
        \$this->assertSame(\$transport->getEncryption(), \$options['encryption']);
        \$this->assertSame(\$transport->getTimeout(), \$options['timeout']);
        \$this->assertSame(\$transport->getSourceIp(), \$options['source_ip']);
        \$this->assertSame(\$transport->getLocalDomain(), \$options['local_domain']);

        \$authHandler = current(\$transport->getExtensionHandlers());
        \$this->assertSame(\$authHandler->getUsername(), \$options['username']);
        \$this->assertSame(\$authHandler->getPassword(), \$options['password']);
        \$this->assertSame(\$authHandler->getAuthMode(), \$options['auth_mode']);
    }

    public function testCreateTransportWithBadURLFormat()
    {
        \$this->expectException(\\InvalidArgumentException::class);
        \$this->expectExceptionMessage('The Swiftmailer URL \"smtp://localhost:25&auth_mode=cra-md5\" is not valid.');

        \$options = [
            'url' => 'smtp://localhost:25&auth_mode=cra-md5',
            'transport' => 'smtp',
            'username' => null,
            'password' => null,
            'host' => 'localhost',
            'port' => null,
            'timeout' => 30,
            'source_ip' => null,
            'local_domain' => null,
            'encryption' => null,
            'auth_mode' => null,
        ];

        SwiftmailerTransportFactory::createTransport(\$options, null, new \\Swift_Events_SimpleEventDispatcher());
    }

    /**
     * @dataProvider optionsAndResultExpected
     */
    public function testResolveOptions(\$options, \$expected)
    {
        \$result = SwiftmailerTransportFactory::resolveOptions(\$options);
        \$this->assertEquals(\$expected, \$result);
    }

    public function optionsAndResultExpected()
    {
        return [
            [
                [
                    'url' => '',
                ],
                [
                    'transport' => 'null',
                    'username' => null,
                    'password' => null,
                    'command' => null,
                    'host' => null,
                    'port' => 25,
                    'timeout' => null,
                    'source_ip' => null,
                    'local_domain' => null,
                    'encryption' => null,
                    'auth_mode' => null,
                    'url' => '',
                ],
            ],
            [
                [
                    'url' => 'smtp://user:pass@host:1234',
                ],
                [
                    'transport' => 'smtp',
                    'username' => 'user',
                    'password' => 'pass',
                    'command' => null,
                    'host' => 'host',
                    'port' => 1234,
                    'timeout' => null,
                    'source_ip' => null,
                    'local_domain' => null,
                    'encryption' => null,
                    'auth_mode' => null,
                    'url' => 'smtp://user:pass@host:1234',
                ],
            ],
            [
                [
                    'url' => 'smtp://user:pass@host:1234?transport=sendmail&username=username&password=password&host=example.com&port=5678',
                ],
                [
                    'transport' => 'sendmail',
                    'username' => 'username',
                    'password' => 'password',
                    'command' => null,
                    'host' => 'example.com',
                    'port' => 5678,
                    'timeout' => null,
                    'source_ip' => null,
                    'local_domain' => null,
                    'encryption' => null,
                    'auth_mode' => null,
                    'url' => 'smtp://user:pass@host:1234?transport=sendmail&username=username&password=password&host=example.com&port=5678',
                ],
            ],
            [
                [
                    'url' => 'smtp://user:pass@host:1234?timeout=42&source_ip=source_ip&local_domain=local_domain&encryption=encryption&auth_mode=auth_mode',
                ],
                [
                    'transport' => 'smtp',
                    'username' => 'user',
                    'password' => 'pass',
                    'command' => null,
                    'host' => 'host',
                    'port' => 1234,
                    'timeout' => 42,
                    'source_ip' => 'source_ip',
                    'local_domain' => 'local_domain',
                    'encryption' => 'encryption',
                    'auth_mode' => 'auth_mode',
                    'url' => 'smtp://user:pass@host:1234?timeout=42&source_ip=source_ip&local_domain=local_domain&encryption=encryption&auth_mode=auth_mode',
                ],
            ],
            [
                [],
                [
                    'transport' => 'null',
                    'username' => null,
                    'password' => null,
                    'command' => null,
                    'host' => null,
                    'port' => 25,
                    'timeout' => null,
                    'source_ip' => null,
                    'local_domain' => null,
                    'encryption' => null,
                    'auth_mode' => null,
                ],
            ],
            [
                [
                    'transport' => 'smtp',
                ],
                [
                    'transport' => 'smtp',
                    'username' => null,
                    'password' => null,
                    'command' => null,
                    'host' => null,
                    'port' => 25,
                    'timeout' => null,
                    'source_ip' => null,
                    'local_domain' => null,
                    'encryption' => null,
                    'auth_mode' => null,
                ],
            ],
            [
                [
                    'transport' => 'gmail',
                ],
                [
                    'transport' => 'smtp',
                    'username' => null,
                    'password' => null,
                    'command' => null,
                    'host' => 'smtp.gmail.com',
                    'port' => 465,
                    'timeout' => null,
                    'source_ip' => null,
                    'local_domain' => null,
                    'encryption' => 'ssl',
                    'auth_mode' => 'login',
                ],
            ],
            [
                [
                    'transport' => 'sendmail',
                ],
                [
                    'transport' => 'sendmail',
                    'username' => null,
                    'password' => null,
                    'command' => null,
                    'host' => null,
                    'port' => 25,
                    'timeout' => null,
                    'source_ip' => null,
                    'local_domain' => null,
                    'encryption' => null,
                    'auth_mode' => null,
                ],
            ],
            [
                [
                    'encryption' => 'ssl',
                ],
                [
                    'transport' => 'null',
                    'username' => null,
                    'password' => null,
                    'command' => null,
                    'host' => null,
                    'port' => 465,
                    'timeout' => null,
                    'source_ip' => null,
                    'local_domain' => null,
                    'encryption' => 'ssl',
                    'auth_mode' => null,
                ],
            ],
            [
                [
                    'port' => 42,
                ],
                [
                    'transport' => 'null',
                    'username' => null,
                    'password' => null,
                    'command' => null,
                    'host' => null,
                    'port' => 42,
                    'timeout' => null,
                    'source_ip' => null,
                    'local_domain' => null,
                    'encryption' => null,
                    'auth_mode' => null,
                ],
            ],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/swiftmailer-bundle/Tests/DependencyInjection/SwiftmailerTransportFactoryTest.php";
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

namespace Symfony\\Bundle\\SwiftmailerBundle\\Tests\\DependencyInjection;

use Symfony\\Bundle\\SwiftmailerBundle\\DependencyInjection\\SwiftmailerTransportFactory;
use Symfony\\Component\\Routing\\RequestContext;

class SwiftmailerTransportFactoryTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testCreateTransportWithSmtp()
    {
        \$options = [
            'transport' => 'smtp',
            'username' => 'user',
            'password' => 'pass',
            'host' => 'host',
            'port' => 1234,
            'timeout' => 42,
            'source_ip' => 'source_ip',
            'local_domain' => 'local_domain',
            'encryption' => 'tls',
            'auth_mode' => 'plain',
        ];

        \$transport = SwiftmailerTransportFactory::createTransport(
            \$options,
            new RequestContext(),
            new \\Swift_Events_SimpleEventDispatcher()
        );
        \$this->assertInstanceOf('Swift_Transport_EsmtpTransport', \$transport);
        \$this->assertSame(\$transport->getHost(), \$options['host']);
        \$this->assertSame(\$transport->getPort(), \$options['port']);
        \$this->assertSame(\$transport->getEncryption(), \$options['encryption']);
        \$this->assertSame(\$transport->getTimeout(), \$options['timeout']);
        \$this->assertSame(\$transport->getSourceIp(), \$options['source_ip']);
        \$this->assertSame(\$transport->getLocalDomain(), \$options['local_domain']);

        \$authHandler = current(\$transport->getExtensionHandlers());
        \$this->assertSame(\$authHandler->getUsername(), \$options['username']);
        \$this->assertSame(\$authHandler->getPassword(), \$options['password']);
        \$this->assertSame(\$authHandler->getAuthMode(), \$options['auth_mode']);
    }

    public function testCreateTransportWithSendmail()
    {
        \$options = [
            'transport' => 'sendmail',
            'command' => '/usr/sbin/sendmail -bs',
        ];

        \$transport = SwiftmailerTransportFactory::createTransport(
            \$options,
            new RequestContext(),
            new \\Swift_Events_SimpleEventDispatcher()
        );
        \$this->assertInstanceOf('Swift_Transport_SendmailTransport', \$transport);
    }

    public function testCreateTransportWithNull()
    {
        \$options = [
            'transport' => 'null',
        ];

        \$transport = SwiftmailerTransportFactory::createTransport(
            \$options,
            new RequestContext(),
            new \\Swift_Events_SimpleEventDispatcher()
        );
        \$this->assertInstanceOf('Swift_Transport_NullTransport', \$transport);
    }

    public function testCreateTransportWithWrongEncryption()
    {
        \$this->expectException(\\InvalidArgumentException::class);
        \$this->expectExceptionMessage('The fake_encryption encryption is not supported');

        SwiftmailerTransportFactory::createTransport(
            [
                'transport' => 'smtp',
                'username' => 'user',
                'password' => 'pass',
                'host' => 'host',
                'port' => 1234,
                'timeout' => 42,
                'source_ip' => 'source_ip',
                'local_domain' => 'local_domain',
                'encryption' => 'fake_encryption',
                'auth_mode' => 'auth_mode',
            ],
            new RequestContext(),
            new \\Swift_Events_SimpleEventDispatcher()
        );
    }

    public function testCreateTransportWithWrongAuthMode()
    {
        \$this->expectException(\\InvalidArgumentException::class);
        \$this->expectExceptionMessage('The fake_auth authentication mode is not supported');

        SwiftmailerTransportFactory::createTransport(
            [
                'transport' => 'smtp',
                'username' => 'user',
                'password' => 'pass',
                'host' => 'host',
                'port' => 1234,
                'timeout' => 42,
                'source_ip' => 'source_ip',
                'local_domain' => 'local_domain',
                'encryption' => 'tls',
                'auth_mode' => 'fake_auth',
            ],
            new RequestContext(),
            new \\Swift_Events_SimpleEventDispatcher()
        );
    }

    public function testCreateTransportWithSmtpAndWithoutRequestContext()
    {
        \$options = [
            'transport' => 'smtp',
            'username' => 'user',
            'password' => 'pass',
            'host' => 'host',
            'port' => 1234,
            'timeout' => 42,
            'source_ip' => 'source_ip',
            'local_domain' => 'local_domain',
            'encryption' => 'tls',
            'auth_mode' => 'plain',
        ];

        \$transport = SwiftmailerTransportFactory::createTransport(
            \$options,
            null,
            new \\Swift_Events_SimpleEventDispatcher()
        );
        \$this->assertInstanceOf('Swift_Transport_EsmtpTransport', \$transport);
        \$this->assertSame(\$transport->getHost(), \$options['host']);
        \$this->assertSame(\$transport->getPort(), \$options['port']);
        \$this->assertSame(\$transport->getEncryption(), \$options['encryption']);
        \$this->assertSame(\$transport->getTimeout(), \$options['timeout']);
        \$this->assertSame(\$transport->getSourceIp(), \$options['source_ip']);
        \$this->assertSame(\$transport->getLocalDomain(), \$options['local_domain']);

        \$authHandler = current(\$transport->getExtensionHandlers());
        \$this->assertSame(\$authHandler->getUsername(), \$options['username']);
        \$this->assertSame(\$authHandler->getPassword(), \$options['password']);
        \$this->assertSame(\$authHandler->getAuthMode(), \$options['auth_mode']);
    }

    public function testCreateTransportWithBadURLFormat()
    {
        \$this->expectException(\\InvalidArgumentException::class);
        \$this->expectExceptionMessage('The Swiftmailer URL \"smtp://localhost:25&auth_mode=cra-md5\" is not valid.');

        \$options = [
            'url' => 'smtp://localhost:25&auth_mode=cra-md5',
            'transport' => 'smtp',
            'username' => null,
            'password' => null,
            'host' => 'localhost',
            'port' => null,
            'timeout' => 30,
            'source_ip' => null,
            'local_domain' => null,
            'encryption' => null,
            'auth_mode' => null,
        ];

        SwiftmailerTransportFactory::createTransport(\$options, null, new \\Swift_Events_SimpleEventDispatcher());
    }

    /**
     * @dataProvider optionsAndResultExpected
     */
    public function testResolveOptions(\$options, \$expected)
    {
        \$result = SwiftmailerTransportFactory::resolveOptions(\$options);
        \$this->assertEquals(\$expected, \$result);
    }

    public function optionsAndResultExpected()
    {
        return [
            [
                [
                    'url' => '',
                ],
                [
                    'transport' => 'null',
                    'username' => null,
                    'password' => null,
                    'command' => null,
                    'host' => null,
                    'port' => 25,
                    'timeout' => null,
                    'source_ip' => null,
                    'local_domain' => null,
                    'encryption' => null,
                    'auth_mode' => null,
                    'url' => '',
                ],
            ],
            [
                [
                    'url' => 'smtp://user:pass@host:1234',
                ],
                [
                    'transport' => 'smtp',
                    'username' => 'user',
                    'password' => 'pass',
                    'command' => null,
                    'host' => 'host',
                    'port' => 1234,
                    'timeout' => null,
                    'source_ip' => null,
                    'local_domain' => null,
                    'encryption' => null,
                    'auth_mode' => null,
                    'url' => 'smtp://user:pass@host:1234',
                ],
            ],
            [
                [
                    'url' => 'smtp://user:pass@host:1234?transport=sendmail&username=username&password=password&host=example.com&port=5678',
                ],
                [
                    'transport' => 'sendmail',
                    'username' => 'username',
                    'password' => 'password',
                    'command' => null,
                    'host' => 'example.com',
                    'port' => 5678,
                    'timeout' => null,
                    'source_ip' => null,
                    'local_domain' => null,
                    'encryption' => null,
                    'auth_mode' => null,
                    'url' => 'smtp://user:pass@host:1234?transport=sendmail&username=username&password=password&host=example.com&port=5678',
                ],
            ],
            [
                [
                    'url' => 'smtp://user:pass@host:1234?timeout=42&source_ip=source_ip&local_domain=local_domain&encryption=encryption&auth_mode=auth_mode',
                ],
                [
                    'transport' => 'smtp',
                    'username' => 'user',
                    'password' => 'pass',
                    'command' => null,
                    'host' => 'host',
                    'port' => 1234,
                    'timeout' => 42,
                    'source_ip' => 'source_ip',
                    'local_domain' => 'local_domain',
                    'encryption' => 'encryption',
                    'auth_mode' => 'auth_mode',
                    'url' => 'smtp://user:pass@host:1234?timeout=42&source_ip=source_ip&local_domain=local_domain&encryption=encryption&auth_mode=auth_mode',
                ],
            ],
            [
                [],
                [
                    'transport' => 'null',
                    'username' => null,
                    'password' => null,
                    'command' => null,
                    'host' => null,
                    'port' => 25,
                    'timeout' => null,
                    'source_ip' => null,
                    'local_domain' => null,
                    'encryption' => null,
                    'auth_mode' => null,
                ],
            ],
            [
                [
                    'transport' => 'smtp',
                ],
                [
                    'transport' => 'smtp',
                    'username' => null,
                    'password' => null,
                    'command' => null,
                    'host' => null,
                    'port' => 25,
                    'timeout' => null,
                    'source_ip' => null,
                    'local_domain' => null,
                    'encryption' => null,
                    'auth_mode' => null,
                ],
            ],
            [
                [
                    'transport' => 'gmail',
                ],
                [
                    'transport' => 'smtp',
                    'username' => null,
                    'password' => null,
                    'command' => null,
                    'host' => 'smtp.gmail.com',
                    'port' => 465,
                    'timeout' => null,
                    'source_ip' => null,
                    'local_domain' => null,
                    'encryption' => 'ssl',
                    'auth_mode' => 'login',
                ],
            ],
            [
                [
                    'transport' => 'sendmail',
                ],
                [
                    'transport' => 'sendmail',
                    'username' => null,
                    'password' => null,
                    'command' => null,
                    'host' => null,
                    'port' => 25,
                    'timeout' => null,
                    'source_ip' => null,
                    'local_domain' => null,
                    'encryption' => null,
                    'auth_mode' => null,
                ],
            ],
            [
                [
                    'encryption' => 'ssl',
                ],
                [
                    'transport' => 'null',
                    'username' => null,
                    'password' => null,
                    'command' => null,
                    'host' => null,
                    'port' => 465,
                    'timeout' => null,
                    'source_ip' => null,
                    'local_domain' => null,
                    'encryption' => 'ssl',
                    'auth_mode' => null,
                ],
            ],
            [
                [
                    'port' => 42,
                ],
                [
                    'transport' => 'null',
                    'username' => null,
                    'password' => null,
                    'command' => null,
                    'host' => null,
                    'port' => 42,
                    'timeout' => null,
                    'source_ip' => null,
                    'local_domain' => null,
                    'encryption' => null,
                    'auth_mode' => null,
                ],
            ],
        ];
    }
}
", "vendor/symfony/swiftmailer-bundle/Tests/DependencyInjection/SwiftmailerTransportFactoryTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/swiftmailer-bundle/Tests/DependencyInjection/SwiftmailerTransportFactoryTest.php");
    }
}
