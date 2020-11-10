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

/* vendor/symfony/console/Command/LockableTrait.php */
class __TwigTemplate_54bfa923788d96d424cfa66accedd08989d9dd48068184553287c9035dbd7b1d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Command/LockableTrait.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Command/LockableTrait.php"));

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

namespace Symfony\\Component\\Console\\Command;

use Symfony\\Component\\Console\\Exception\\LogicException;
use Symfony\\Component\\Lock\\Factory;
use Symfony\\Component\\Lock\\Lock;
use Symfony\\Component\\Lock\\Store\\FlockStore;
use Symfony\\Component\\Lock\\Store\\SemaphoreStore;

/**
 * Basic lock feature for commands.
 *
 * @author Geoffrey Brier <geoffrey.brier@gmail.com>
 */
trait LockableTrait
{
    /** @var Lock */
    private \$lock;

    /**
     * Locks a command.
     *
     * @return bool
     */
    private function lock(\$name = null, \$blocking = false)
    {
        if (!class_exists(SemaphoreStore::class)) {
            throw new LogicException('To enable the locking feature you must install the symfony/lock component.');
        }

        if (null !== \$this->lock) {
            throw new LogicException('A lock is already in place.');
        }

        if (SemaphoreStore::isSupported()) {
            \$store = new SemaphoreStore();
        } else {
            \$store = new FlockStore();
        }

        \$this->lock = (new Factory(\$store))->createLock(\$name ?: \$this->getName());
        if (!\$this->lock->acquire(\$blocking)) {
            \$this->lock = null;

            return false;
        }

        return true;
    }

    /**
     * Releases the command lock if there is one.
     */
    private function release()
    {
        if (\$this->lock) {
            \$this->lock->release();
            \$this->lock = null;
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Command/LockableTrait.php";
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

namespace Symfony\\Component\\Console\\Command;

use Symfony\\Component\\Console\\Exception\\LogicException;
use Symfony\\Component\\Lock\\Factory;
use Symfony\\Component\\Lock\\Lock;
use Symfony\\Component\\Lock\\Store\\FlockStore;
use Symfony\\Component\\Lock\\Store\\SemaphoreStore;

/**
 * Basic lock feature for commands.
 *
 * @author Geoffrey Brier <geoffrey.brier@gmail.com>
 */
trait LockableTrait
{
    /** @var Lock */
    private \$lock;

    /**
     * Locks a command.
     *
     * @return bool
     */
    private function lock(\$name = null, \$blocking = false)
    {
        if (!class_exists(SemaphoreStore::class)) {
            throw new LogicException('To enable the locking feature you must install the symfony/lock component.');
        }

        if (null !== \$this->lock) {
            throw new LogicException('A lock is already in place.');
        }

        if (SemaphoreStore::isSupported()) {
            \$store = new SemaphoreStore();
        } else {
            \$store = new FlockStore();
        }

        \$this->lock = (new Factory(\$store))->createLock(\$name ?: \$this->getName());
        if (!\$this->lock->acquire(\$blocking)) {
            \$this->lock = null;

            return false;
        }

        return true;
    }

    /**
     * Releases the command lock if there is one.
     */
    private function release()
    {
        if (\$this->lock) {
            \$this->lock->release();
            \$this->lock = null;
        }
    }
}
", "vendor/symfony/console/Command/LockableTrait.php", "/var/www/public/DevLaon/templates/vendor/symfony/console/Command/LockableTrait.php");
    }
}
