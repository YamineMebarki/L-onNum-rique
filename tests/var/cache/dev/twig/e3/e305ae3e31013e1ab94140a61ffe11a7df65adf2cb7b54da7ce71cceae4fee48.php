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

/* vendor/symfony/security-core/Encoder/UserPasswordEncoder.php */
class __TwigTemplate_82a896810945cecf7651d917bb70d8505f5398f4f0dc4877c5223678dcf8a873 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Encoder/UserPasswordEncoder.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Encoder/UserPasswordEncoder.php"));

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

namespace Symfony\\Component\\Security\\Core\\Encoder;

use Symfony\\Component\\Security\\Core\\User\\UserInterface;

/**
 * A generic password encoder.
 *
 * @author Ariel Ferrandini <arielferrandini@gmail.com>
 */
class UserPasswordEncoder implements UserPasswordEncoderInterface
{
    private \$encoderFactory;

    public function __construct(EncoderFactoryInterface \$encoderFactory)
    {
        \$this->encoderFactory = \$encoderFactory;
    }

    /**
     * {@inheritdoc}
     */
    public function encodePassword(UserInterface \$user, \$plainPassword)
    {
        \$encoder = \$this->encoderFactory->getEncoder(\$user);

        return \$encoder->encodePassword(\$plainPassword, \$user->getSalt());
    }

    /**
     * {@inheritdoc}
     */
    public function isPasswordValid(UserInterface \$user, \$raw)
    {
        \$encoder = \$this->encoderFactory->getEncoder(\$user);

        return \$encoder->isPasswordValid(\$user->getPassword(), \$raw, \$user->getSalt());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Encoder/UserPasswordEncoder.php";
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

namespace Symfony\\Component\\Security\\Core\\Encoder;

use Symfony\\Component\\Security\\Core\\User\\UserInterface;

/**
 * A generic password encoder.
 *
 * @author Ariel Ferrandini <arielferrandini@gmail.com>
 */
class UserPasswordEncoder implements UserPasswordEncoderInterface
{
    private \$encoderFactory;

    public function __construct(EncoderFactoryInterface \$encoderFactory)
    {
        \$this->encoderFactory = \$encoderFactory;
    }

    /**
     * {@inheritdoc}
     */
    public function encodePassword(UserInterface \$user, \$plainPassword)
    {
        \$encoder = \$this->encoderFactory->getEncoder(\$user);

        return \$encoder->encodePassword(\$plainPassword, \$user->getSalt());
    }

    /**
     * {@inheritdoc}
     */
    public function isPasswordValid(UserInterface \$user, \$raw)
    {
        \$encoder = \$this->encoderFactory->getEncoder(\$user);

        return \$encoder->isPasswordValid(\$user->getPassword(), \$raw, \$user->getSalt());
    }
}
", "vendor/symfony/security-core/Encoder/UserPasswordEncoder.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Encoder/UserPasswordEncoder.php");
    }
}
