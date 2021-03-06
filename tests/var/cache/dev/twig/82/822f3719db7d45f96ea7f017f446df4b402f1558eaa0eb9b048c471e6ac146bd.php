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

/* vendor/symfony/doctrine-bridge/Tests/Messenger/DoctrineTransactionMiddlewareTest.php */
class __TwigTemplate_d799e01cd9b104d2871af4cf0fc917247d6e261d44e72419c8b39de57cc3c3a6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Tests/Messenger/DoctrineTransactionMiddlewareTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Tests/Messenger/DoctrineTransactionMiddlewareTest.php"));

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

namespace Symfony\\Bridge\\Doctrine\\Tests\\Messenger;

use Doctrine\\Common\\Persistence\\ManagerRegistry;
use Doctrine\\DBAL\\Connection;
use Doctrine\\ORM\\EntityManagerInterface;
use Symfony\\Bridge\\Doctrine\\Messenger\\DoctrineTransactionMiddleware;
use Symfony\\Component\\Messenger\\Envelope;
use Symfony\\Component\\Messenger\\Exception\\UnrecoverableMessageHandlingException;
use Symfony\\Component\\Messenger\\Test\\Middleware\\MiddlewareTestCase;

class DoctrineTransactionMiddlewareTest extends MiddlewareTestCase
{
    private \$connection;
    private \$entityManager;
    private \$middleware;

    public function setUp(): void
    {
        \$this->connection = \$this->createMock(Connection::class);

        \$this->entityManager = \$this->createMock(EntityManagerInterface::class);
        \$this->entityManager->method('getConnection')->willReturn(\$this->connection);

        \$managerRegistry = \$this->createMock(ManagerRegistry::class);
        \$managerRegistry->method('getManager')->willReturn(\$this->entityManager);

        \$this->middleware = new DoctrineTransactionMiddleware(\$managerRegistry);
    }

    public function testMiddlewareWrapsInTransactionAndFlushes()
    {
        \$this->connection->expects(\$this->once())
            ->method('beginTransaction')
        ;
        \$this->connection->expects(\$this->once())
            ->method('commit')
        ;
        \$this->entityManager->expects(\$this->once())
            ->method('flush')
        ;

        \$this->middleware->handle(new Envelope(new \\stdClass()), \$this->getStackMock());
    }

    public function testTransactionIsRolledBackOnException()
    {
        \$this->expectException('RuntimeException');
        \$this->expectExceptionMessage('Thrown from next middleware.');
        \$this->connection->expects(\$this->once())
            ->method('beginTransaction')
        ;
        \$this->connection->expects(\$this->once())
            ->method('rollBack')
        ;

        \$this->middleware->handle(new Envelope(new \\stdClass()), \$this->getThrowingStackMock());
    }

    public function testInvalidEntityManagerThrowsException()
    {
        \$managerRegistry = \$this->createMock(ManagerRegistry::class);
        \$managerRegistry
            ->method('getManager')
            ->with('unknown_manager')
            ->will(\$this->throwException(new \\InvalidArgumentException()));

        \$middleware = new DoctrineTransactionMiddleware(\$managerRegistry, 'unknown_manager');

        \$this->expectException(UnrecoverableMessageHandlingException::class);

        \$middleware->handle(new Envelope(new \\stdClass()), \$this->getStackMock(false));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/doctrine-bridge/Tests/Messenger/DoctrineTransactionMiddlewareTest.php";
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

namespace Symfony\\Bridge\\Doctrine\\Tests\\Messenger;

use Doctrine\\Common\\Persistence\\ManagerRegistry;
use Doctrine\\DBAL\\Connection;
use Doctrine\\ORM\\EntityManagerInterface;
use Symfony\\Bridge\\Doctrine\\Messenger\\DoctrineTransactionMiddleware;
use Symfony\\Component\\Messenger\\Envelope;
use Symfony\\Component\\Messenger\\Exception\\UnrecoverableMessageHandlingException;
use Symfony\\Component\\Messenger\\Test\\Middleware\\MiddlewareTestCase;

class DoctrineTransactionMiddlewareTest extends MiddlewareTestCase
{
    private \$connection;
    private \$entityManager;
    private \$middleware;

    public function setUp(): void
    {
        \$this->connection = \$this->createMock(Connection::class);

        \$this->entityManager = \$this->createMock(EntityManagerInterface::class);
        \$this->entityManager->method('getConnection')->willReturn(\$this->connection);

        \$managerRegistry = \$this->createMock(ManagerRegistry::class);
        \$managerRegistry->method('getManager')->willReturn(\$this->entityManager);

        \$this->middleware = new DoctrineTransactionMiddleware(\$managerRegistry);
    }

    public function testMiddlewareWrapsInTransactionAndFlushes()
    {
        \$this->connection->expects(\$this->once())
            ->method('beginTransaction')
        ;
        \$this->connection->expects(\$this->once())
            ->method('commit')
        ;
        \$this->entityManager->expects(\$this->once())
            ->method('flush')
        ;

        \$this->middleware->handle(new Envelope(new \\stdClass()), \$this->getStackMock());
    }

    public function testTransactionIsRolledBackOnException()
    {
        \$this->expectException('RuntimeException');
        \$this->expectExceptionMessage('Thrown from next middleware.');
        \$this->connection->expects(\$this->once())
            ->method('beginTransaction')
        ;
        \$this->connection->expects(\$this->once())
            ->method('rollBack')
        ;

        \$this->middleware->handle(new Envelope(new \\stdClass()), \$this->getThrowingStackMock());
    }

    public function testInvalidEntityManagerThrowsException()
    {
        \$managerRegistry = \$this->createMock(ManagerRegistry::class);
        \$managerRegistry
            ->method('getManager')
            ->with('unknown_manager')
            ->will(\$this->throwException(new \\InvalidArgumentException()));

        \$middleware = new DoctrineTransactionMiddleware(\$managerRegistry, 'unknown_manager');

        \$this->expectException(UnrecoverableMessageHandlingException::class);

        \$middleware->handle(new Envelope(new \\stdClass()), \$this->getStackMock(false));
    }
}
", "vendor/symfony/doctrine-bridge/Tests/Messenger/DoctrineTransactionMiddlewareTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/doctrine-bridge/Tests/Messenger/DoctrineTransactionMiddlewareTest.php");
    }
}
