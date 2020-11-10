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

/* vendor/symfony/http-foundation/Session/Flash/FlashBag.php */
class __TwigTemplate_0d89a5768affe85a6512f17d56774b2e2bf4decdb54f05d8627c22df12895898 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Session/Flash/FlashBag.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Session/Flash/FlashBag.php"));

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

namespace Symfony\\Component\\HttpFoundation\\Session\\Flash;

/**
 * FlashBag flash message container.
 *
 * @author Drak <drak@zikula.org>
 */
class FlashBag implements FlashBagInterface
{
    private \$name = 'flashes';
    private \$flashes = [];
    private \$storageKey;

    /**
     * @param string \$storageKey The key used to store flashes in the session
     */
    public function __construct(string \$storageKey = '_symfony_flashes')
    {
        \$this->storageKey = \$storageKey;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return \$this->name;
    }

    public function setName(\$name)
    {
        \$this->name = \$name;
    }

    /**
     * {@inheritdoc}
     */
    public function initialize(array &\$flashes)
    {
        \$this->flashes = &\$flashes;
    }

    /**
     * {@inheritdoc}
     */
    public function add(\$type, \$message)
    {
        \$this->flashes[\$type][] = \$message;
    }

    /**
     * {@inheritdoc}
     */
    public function peek(\$type, array \$default = [])
    {
        return \$this->has(\$type) ? \$this->flashes[\$type] : \$default;
    }

    /**
     * {@inheritdoc}
     */
    public function peekAll()
    {
        return \$this->flashes;
    }

    /**
     * {@inheritdoc}
     */
    public function get(\$type, array \$default = [])
    {
        if (!\$this->has(\$type)) {
            return \$default;
        }

        \$return = \$this->flashes[\$type];

        unset(\$this->flashes[\$type]);

        return \$return;
    }

    /**
     * {@inheritdoc}
     */
    public function all()
    {
        \$return = \$this->peekAll();
        \$this->flashes = [];

        return \$return;
    }

    /**
     * {@inheritdoc}
     */
    public function set(\$type, \$messages)
    {
        \$this->flashes[\$type] = (array) \$messages;
    }

    /**
     * {@inheritdoc}
     */
    public function setAll(array \$messages)
    {
        \$this->flashes = \$messages;
    }

    /**
     * {@inheritdoc}
     */
    public function has(\$type)
    {
        return \\array_key_exists(\$type, \$this->flashes) && \$this->flashes[\$type];
    }

    /**
     * {@inheritdoc}
     */
    public function keys()
    {
        return array_keys(\$this->flashes);
    }

    /**
     * {@inheritdoc}
     */
    public function getStorageKey()
    {
        return \$this->storageKey;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        return \$this->all();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/Session/Flash/FlashBag.php";
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

namespace Symfony\\Component\\HttpFoundation\\Session\\Flash;

/**
 * FlashBag flash message container.
 *
 * @author Drak <drak@zikula.org>
 */
class FlashBag implements FlashBagInterface
{
    private \$name = 'flashes';
    private \$flashes = [];
    private \$storageKey;

    /**
     * @param string \$storageKey The key used to store flashes in the session
     */
    public function __construct(string \$storageKey = '_symfony_flashes')
    {
        \$this->storageKey = \$storageKey;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return \$this->name;
    }

    public function setName(\$name)
    {
        \$this->name = \$name;
    }

    /**
     * {@inheritdoc}
     */
    public function initialize(array &\$flashes)
    {
        \$this->flashes = &\$flashes;
    }

    /**
     * {@inheritdoc}
     */
    public function add(\$type, \$message)
    {
        \$this->flashes[\$type][] = \$message;
    }

    /**
     * {@inheritdoc}
     */
    public function peek(\$type, array \$default = [])
    {
        return \$this->has(\$type) ? \$this->flashes[\$type] : \$default;
    }

    /**
     * {@inheritdoc}
     */
    public function peekAll()
    {
        return \$this->flashes;
    }

    /**
     * {@inheritdoc}
     */
    public function get(\$type, array \$default = [])
    {
        if (!\$this->has(\$type)) {
            return \$default;
        }

        \$return = \$this->flashes[\$type];

        unset(\$this->flashes[\$type]);

        return \$return;
    }

    /**
     * {@inheritdoc}
     */
    public function all()
    {
        \$return = \$this->peekAll();
        \$this->flashes = [];

        return \$return;
    }

    /**
     * {@inheritdoc}
     */
    public function set(\$type, \$messages)
    {
        \$this->flashes[\$type] = (array) \$messages;
    }

    /**
     * {@inheritdoc}
     */
    public function setAll(array \$messages)
    {
        \$this->flashes = \$messages;
    }

    /**
     * {@inheritdoc}
     */
    public function has(\$type)
    {
        return \\array_key_exists(\$type, \$this->flashes) && \$this->flashes[\$type];
    }

    /**
     * {@inheritdoc}
     */
    public function keys()
    {
        return array_keys(\$this->flashes);
    }

    /**
     * {@inheritdoc}
     */
    public function getStorageKey()
    {
        return \$this->storageKey;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        return \$this->all();
    }
}
", "vendor/symfony/http-foundation/Session/Flash/FlashBag.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/Session/Flash/FlashBag.php");
    }
}
