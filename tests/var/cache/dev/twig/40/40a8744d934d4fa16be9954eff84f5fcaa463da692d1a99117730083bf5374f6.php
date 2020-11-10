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

/* vendor/symfony/doctrine-bridge/Messenger/DoctrineTransactionMiddleware.php */
class __TwigTemplate_25f8fc17d6c47e81a16afdee964f23ea731237210aea14fed8dcf438c15391ce extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Messenger/DoctrineTransactionMiddleware.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Messenger/DoctrineTransactionMiddleware.php"));

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

namespace Symfony\\Bridge\\Doctrine\\Messenger;

use Doctrine\\Common\\Persistence\\ManagerRegistry;
use Symfony\\Component\\Messenger\\Envelope;
use Symfony\\Component\\Messenger\\Exception\\HandlerFailedException;
use Symfony\\Component\\Messenger\\Exception\\UnrecoverableMessageHandlingException;
use Symfony\\Component\\Messenger\\Middleware\\MiddlewareInterface;
use Symfony\\Component\\Messenger\\Middleware\\StackInterface;
use Symfony\\Component\\Messenger\\Stamp\\HandledStamp;

/**
 * Wraps all handlers in a single doctrine transaction.
 *
 * @author Tobias Nyholm <tobias.nyholm@gmail.com>
 *
 * @experimental in 4.3
 */
class DoctrineTransactionMiddleware implements MiddlewareInterface
{
    private \$managerRegistry;
    private \$entityManagerName;

    public function __construct(ManagerRegistry \$managerRegistry, string \$entityManagerName = null)
    {
        \$this->managerRegistry = \$managerRegistry;
        \$this->entityManagerName = \$entityManagerName;
    }

    /**
     * {@inheritdoc}
     */
    public function handle(Envelope \$envelope, StackInterface \$stack): Envelope
    {
        try {
            \$entityManager = \$this->managerRegistry->getManager(\$this->entityManagerName);
        } catch (\\InvalidArgumentException \$e) {
            throw new UnrecoverableMessageHandlingException(\$e->getMessage(), 0, \$e);
        }

        \$entityManager->getConnection()->beginTransaction();
        try {
            \$envelope = \$stack->next()->handle(\$envelope, \$stack);
            \$entityManager->flush();
            \$entityManager->getConnection()->commit();

            return \$envelope;
        } catch (\\Throwable \$exception) {
            \$entityManager->getConnection()->rollBack();

            if (\$exception instanceof HandlerFailedException) {
                // Remove all HandledStamp from the envelope so the retry will execute all handlers again.
                // When a handler fails, the queries of allegedly successful previous handlers just got rolled back.
                throw new HandlerFailedException(\$exception->getEnvelope()->withoutAll(HandledStamp::class), \$exception->getNestedExceptions());
            }

            throw \$exception;
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/doctrine-bridge/Messenger/DoctrineTransactionMiddleware.php";
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

namespace Symfony\\Bridge\\Doctrine\\Messenger;

use Doctrine\\Common\\Persistence\\ManagerRegistry;
use Symfony\\Component\\Messenger\\Envelope;
use Symfony\\Component\\Messenger\\Exception\\HandlerFailedException;
use Symfony\\Component\\Messenger\\Exception\\UnrecoverableMessageHandlingException;
use Symfony\\Component\\Messenger\\Middleware\\MiddlewareInterface;
use Symfony\\Component\\Messenger\\Middleware\\StackInterface;
use Symfony\\Component\\Messenger\\Stamp\\HandledStamp;

/**
 * Wraps all handlers in a single doctrine transaction.
 *
 * @author Tobias Nyholm <tobias.nyholm@gmail.com>
 *
 * @experimental in 4.3
 */
class DoctrineTransactionMiddleware implements MiddlewareInterface
{
    private \$managerRegistry;
    private \$entityManagerName;

    public function __construct(ManagerRegistry \$managerRegistry, string \$entityManagerName = null)
    {
        \$this->managerRegistry = \$managerRegistry;
        \$this->entityManagerName = \$entityManagerName;
    }

    /**
     * {@inheritdoc}
     */
    public function handle(Envelope \$envelope, StackInterface \$stack): Envelope
    {
        try {
            \$entityManager = \$this->managerRegistry->getManager(\$this->entityManagerName);
        } catch (\\InvalidArgumentException \$e) {
            throw new UnrecoverableMessageHandlingException(\$e->getMessage(), 0, \$e);
        }

        \$entityManager->getConnection()->beginTransaction();
        try {
            \$envelope = \$stack->next()->handle(\$envelope, \$stack);
            \$entityManager->flush();
            \$entityManager->getConnection()->commit();

            return \$envelope;
        } catch (\\Throwable \$exception) {
            \$entityManager->getConnection()->rollBack();

            if (\$exception instanceof HandlerFailedException) {
                // Remove all HandledStamp from the envelope so the retry will execute all handlers again.
                // When a handler fails, the queries of allegedly successful previous handlers just got rolled back.
                throw new HandlerFailedException(\$exception->getEnvelope()->withoutAll(HandledStamp::class), \$exception->getNestedExceptions());
            }

            throw \$exception;
        }
    }
}
", "vendor/symfony/doctrine-bridge/Messenger/DoctrineTransactionMiddleware.php", "/var/www/public/DevLaon/templates/vendor/symfony/doctrine-bridge/Messenger/DoctrineTransactionMiddleware.php");
    }
}
