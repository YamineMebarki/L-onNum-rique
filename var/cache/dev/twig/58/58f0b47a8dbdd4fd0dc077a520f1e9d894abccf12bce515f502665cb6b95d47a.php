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

/* vendor/symfony/doctrine-bridge/Messenger/DoctrinePingConnectionMiddleware.php */
class __TwigTemplate_4f4ba20784720b6a98840687ff636d3ffeb7ccdc20c50d44a6e3d1c35d6a5d40 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Messenger/DoctrinePingConnectionMiddleware.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Messenger/DoctrinePingConnectionMiddleware.php"));

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
use Symfony\\Component\\Messenger\\Exception\\UnrecoverableMessageHandlingException;
use Symfony\\Component\\Messenger\\Middleware\\MiddlewareInterface;
use Symfony\\Component\\Messenger\\Middleware\\StackInterface;

/**
 * Checks whether the connection is still open or reconnects otherwise.
 *
 * @author Fuong <insidestyles@gmail.com>
 *
 * @experimental in 4.3
 */
class DoctrinePingConnectionMiddleware implements MiddlewareInterface
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

        \$connection = \$entityManager->getConnection();

        if (!\$connection->ping()) {
            \$connection->close();
            \$connection->connect();
        }

        if (!\$entityManager->isOpen()) {
            \$this->managerRegistry->resetManager(\$this->entityManagerName);
        }

        return \$stack->next()->handle(\$envelope, \$stack);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/doctrine-bridge/Messenger/DoctrinePingConnectionMiddleware.php";
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
use Symfony\\Component\\Messenger\\Exception\\UnrecoverableMessageHandlingException;
use Symfony\\Component\\Messenger\\Middleware\\MiddlewareInterface;
use Symfony\\Component\\Messenger\\Middleware\\StackInterface;

/**
 * Checks whether the connection is still open or reconnects otherwise.
 *
 * @author Fuong <insidestyles@gmail.com>
 *
 * @experimental in 4.3
 */
class DoctrinePingConnectionMiddleware implements MiddlewareInterface
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

        \$connection = \$entityManager->getConnection();

        if (!\$connection->ping()) {
            \$connection->close();
            \$connection->connect();
        }

        if (!\$entityManager->isOpen()) {
            \$this->managerRegistry->resetManager(\$this->entityManagerName);
        }

        return \$stack->next()->handle(\$envelope, \$stack);
    }
}
", "vendor/symfony/doctrine-bridge/Messenger/DoctrinePingConnectionMiddleware.php", "/var/www/public/DevLaon/templates/vendor/symfony/doctrine-bridge/Messenger/DoctrinePingConnectionMiddleware.php");
    }
}
