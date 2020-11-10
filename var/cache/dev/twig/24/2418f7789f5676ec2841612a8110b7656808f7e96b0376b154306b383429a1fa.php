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

/* vendor/symfony/flex/src/Lock.php */
class __TwigTemplate_a97459813308772351f3a8878d7d1c100992d0c04f13fcf42c1d6ed5cf8b8bcc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/flex/src/Lock.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/flex/src/Lock.php"));

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

namespace Symfony\\Flex;

use Composer\\Json\\JsonFile;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Lock
{
    private \$json;
    private \$lock = [];
    private \$changed = false;

    public function __construct(\$lockFile)
    {
        \$this->json = new JsonFile(\$lockFile);
        if (\$this->json->exists()) {
            \$this->lock = \$this->json->read();
        }
    }

    public function has(\$name): bool
    {
        return \\array_key_exists(\$name, \$this->lock);
    }

    public function add(\$name, \$data)
    {
        \$current = \$this->lock[\$name] ?? [];
        \$this->lock[\$name] = array_merge(\$current, \$data);
        \$this->changed = true;
    }

    public function get(\$name)
    {
        return \$this->lock[\$name] ?? null;
    }

    public function set(\$name, \$data)
    {
        \$this->lock[\$name] = \$data;
        \$this->changed = true;
    }

    public function remove(\$name)
    {
        unset(\$this->lock[\$name]);
        \$this->changed = true;
    }

    public function write()
    {
        if (!\$this->changed) {
            return;
        }

        if (\$this->lock) {
            ksort(\$this->lock);
            \$this->json->write(\$this->lock);
        } elseif (\$this->json->exists()) {
            @unlink(\$this->json->getPath());
        }
    }

    public function all(): array
    {
        return \$this->lock;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/flex/src/Lock.php";
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

namespace Symfony\\Flex;

use Composer\\Json\\JsonFile;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Lock
{
    private \$json;
    private \$lock = [];
    private \$changed = false;

    public function __construct(\$lockFile)
    {
        \$this->json = new JsonFile(\$lockFile);
        if (\$this->json->exists()) {
            \$this->lock = \$this->json->read();
        }
    }

    public function has(\$name): bool
    {
        return \\array_key_exists(\$name, \$this->lock);
    }

    public function add(\$name, \$data)
    {
        \$current = \$this->lock[\$name] ?? [];
        \$this->lock[\$name] = array_merge(\$current, \$data);
        \$this->changed = true;
    }

    public function get(\$name)
    {
        return \$this->lock[\$name] ?? null;
    }

    public function set(\$name, \$data)
    {
        \$this->lock[\$name] = \$data;
        \$this->changed = true;
    }

    public function remove(\$name)
    {
        unset(\$this->lock[\$name]);
        \$this->changed = true;
    }

    public function write()
    {
        if (!\$this->changed) {
            return;
        }

        if (\$this->lock) {
            ksort(\$this->lock);
            \$this->json->write(\$this->lock);
        } elseif (\$this->json->exists()) {
            @unlink(\$this->json->getPath());
        }
    }

    public function all(): array
    {
        return \$this->lock;
    }
}
", "vendor/symfony/flex/src/Lock.php", "/var/www/public/DevLaon/templates/vendor/symfony/flex/src/Lock.php");
    }
}
