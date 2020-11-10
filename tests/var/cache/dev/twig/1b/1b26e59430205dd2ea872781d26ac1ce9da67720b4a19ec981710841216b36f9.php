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

/* vendor/symfony/doctrine-bridge/Tests/Messenger/DoctrineCloseConnectionMiddlewareTest.php */
class __TwigTemplate_850cb89b22fbde5abfc113db1569d210f1ae079f705ef0bb8abc588cc8e4f3b3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Tests/Messenger/DoctrineCloseConnectionMiddlewareTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Tests/Messenger/DoctrineCloseConnectionMiddlewareTest.php"));

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
use Symfony\\Bridge\\Doctrine\\Messenger\\DoctrineCloseConnectionMiddleware;
use Symfony\\Component\\Messenger\\Envelope;
use Symfony\\Component\\Messenger\\Exception\\UnrecoverableMessageHandlingException;
use Symfony\\Component\\Messenger\\Test\\Middleware\\MiddlewareTestCase;

class DoctrineCloseConnectionMiddlewareTest extends MiddlewareTestCase
{
    private \$connection;
    private \$entityManager;
    private \$managerRegistry;
    private \$middleware;
    private \$entityManagerName = 'default';

    protected function setUp(): void
    {
        \$this->connection = \$this->createMock(Connection::class);

        \$this->entityManager = \$this->createMock(EntityManagerInterface::class);
        \$this->entityManager->method('getConnection')->willReturn(\$this->connection);

        \$this->managerRegistry = \$this->createMock(ManagerRegistry::class);
        \$this->managerRegistry->method('getManager')->willReturn(\$this->entityManager);

        \$this->middleware = new DoctrineCloseConnectionMiddleware(
            \$this->managerRegistry,
            \$this->entityManagerName
        );
    }

    public function testMiddlewareCloseConnection()
    {
        \$this->connection->expects(\$this->once())
            ->method('close')
        ;

        \$this->middleware->handle(new Envelope(new \\stdClass()), \$this->getStackMock());
    }

    public function testInvalidEntityManagerThrowsException()
    {
        \$managerRegistry = \$this->createMock(ManagerRegistry::class);
        \$managerRegistry
            ->method('getManager')
            ->with('unknown_manager')
            ->will(\$this->throwException(new \\InvalidArgumentException()));

        \$middleware = new DoctrineCloseConnectionMiddleware(\$managerRegistry, 'unknown_manager');

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
        return "vendor/symfony/doctrine-bridge/Tests/Messenger/DoctrineCloseConnectionMiddlewareTest.php";
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
use Symfony\\Bridge\\Doctrine\\Messenger\\DoctrineCloseConnectionMiddleware;
use Symfony\\Component\\Messenger\\Envelope;
use Symfony\\Component\\Messenger\\Exception\\UnrecoverableMessageHandlingException;
use Symfony\\Component\\Messenger\\Test\\Middleware\\MiddlewareTestCase;

class DoctrineCloseConnectionMiddlewareTest extends MiddlewareTestCase
{
    private \$connection;
    private \$entityManager;
    private \$managerRegistry;
    private \$middleware;
    private \$entityManagerName = 'default';

    protected function setUp(): void
    {
        \$this->connection = \$this->createMock(Connection::class);

        \$this->entityManager = \$this->createMock(EntityManagerInterface::class);
        \$this->entityManager->method('getConnection')->willReturn(\$this->connection);

        \$this->managerRegistry = \$this->createMock(ManagerRegistry::class);
        \$this->managerRegistry->method('getManager')->willReturn(\$this->entityManager);

        \$this->middleware = new DoctrineCloseConnectionMiddleware(
            \$this->managerRegistry,
            \$this->entityManagerName
        );
    }

    public function testMiddlewareCloseConnection()
    {
        \$this->connection->expects(\$this->once())
            ->method('close')
        ;

        \$this->middleware->handle(new Envelope(new \\stdClass()), \$this->getStackMock());
    }

    public function testInvalidEntityManagerThrowsException()
    {
        \$managerRegistry = \$this->createMock(ManagerRegistry::class);
        \$managerRegistry
            ->method('getManager')
            ->with('unknown_manager')
            ->will(\$this->throwException(new \\InvalidArgumentException()));

        \$middleware = new DoctrineCloseConnectionMiddleware(\$managerRegistry, 'unknown_manager');

        \$this->expectException(UnrecoverableMessageHandlingException::class);

        \$middleware->handle(new Envelope(new \\stdClass()), \$this->getStackMock(false));
    }
}
", "vendor/symfony/doctrine-bridge/Tests/Messenger/DoctrineCloseConnectionMiddlewareTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/doctrine-bridge/Tests/Messenger/DoctrineCloseConnectionMiddlewareTest.php");
    }
}
