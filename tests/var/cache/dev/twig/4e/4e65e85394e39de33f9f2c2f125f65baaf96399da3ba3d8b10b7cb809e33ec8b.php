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

/* vendor/symfony/security-core/Encoder/EncoderFactory.php */
class __TwigTemplate_3bb4a4f2acce3092bb2b696b68b93651bf9e225d6f6a0fd904771da47116008e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Encoder/EncoderFactory.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Encoder/EncoderFactory.php"));

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

/**
 * A generic encoder factory implementation.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class EncoderFactory implements EncoderFactoryInterface
{
    private \$encoders;

    public function __construct(array \$encoders)
    {
        \$this->encoders = \$encoders;
    }

    /**
     * {@inheritdoc}
     */
    public function getEncoder(\$user)
    {
        \$encoderKey = null;

        if (\$user instanceof EncoderAwareInterface && (null !== \$encoderName = \$user->getEncoderName())) {
            if (!\\array_key_exists(\$encoderName, \$this->encoders)) {
                throw new \\RuntimeException(sprintf('The encoder \"%s\" was not configured.', \$encoderName));
            }

            \$encoderKey = \$encoderName;
        } else {
            foreach (\$this->encoders as \$class => \$encoder) {
                if ((\\is_object(\$user) && \$user instanceof \$class) || (!\\is_object(\$user) && (is_subclass_of(\$user, \$class) || \$user == \$class))) {
                    \$encoderKey = \$class;
                    break;
                }
            }
        }

        if (null === \$encoderKey) {
            throw new \\RuntimeException(sprintf('No encoder has been configured for account \"%s\".', \\is_object(\$user) ? \\get_class(\$user) : \$user));
        }

        if (!\$this->encoders[\$encoderKey] instanceof PasswordEncoderInterface) {
            \$this->encoders[\$encoderKey] = \$this->createEncoder(\$this->encoders[\$encoderKey]);
        }

        return \$this->encoders[\$encoderKey];
    }

    /**
     * Creates the actual encoder instance.
     *
     * @return PasswordEncoderInterface
     *
     * @throws \\InvalidArgumentException
     */
    private function createEncoder(array \$config)
    {
        if (isset(\$config['algorithm'])) {
            \$config = \$this->getEncoderConfigFromAlgorithm(\$config);
        }
        if (!isset(\$config['class'])) {
            throw new \\InvalidArgumentException(sprintf('\"class\" must be set in %s.', json_encode(\$config)));
        }
        if (!isset(\$config['arguments'])) {
            throw new \\InvalidArgumentException(sprintf('\"arguments\" must be set in %s.', json_encode(\$config)));
        }

        \$reflection = new \\ReflectionClass(\$config['class']);

        return \$reflection->newInstanceArgs(\$config['arguments']);
    }

    private function getEncoderConfigFromAlgorithm(\$config)
    {
        if ('auto' === \$config['algorithm']) {
            \$config['algorithm'] = SodiumPasswordEncoder::isSupported() ? 'sodium' : 'native';
        }

        switch (\$config['algorithm']) {
            case 'plaintext':
                return [
                    'class' => PlaintextPasswordEncoder::class,
                    'arguments' => [\$config['ignore_case']],
                ];

            case 'pbkdf2':
                return [
                    'class' => Pbkdf2PasswordEncoder::class,
                    'arguments' => [
                        \$config['hash_algorithm'],
                        \$config['encode_as_base64'],
                        \$config['iterations'],
                        \$config['key_length'],
                    ],
                ];

            /* @deprecated since Symfony 4.3 */
            case 'bcrypt':
                return [
                    'class' => BCryptPasswordEncoder::class,
                    'arguments' => [\$config['cost']],
                ];

            case 'native':
                return [
                    'class' => NativePasswordEncoder::class,
                    'arguments' => [
                        \$config['time_cost'] ?? null,
                        ((\$config['memory_cost'] ?? 0) << 10) ?: null,
                        \$config['cost'] ?? null,
                    ],
                ];

            case 'sodium':
                return [
                    'class' => SodiumPasswordEncoder::class,
                    'arguments' => [
                        \$config['time_cost'] ?? null,
                        ((\$config['memory_cost'] ?? 0) << 10) ?: null,
                    ],
                ];

            /* @deprecated since Symfony 4.3 */
            case 'argon2i':
                return [
                    'class' => Argon2iPasswordEncoder::class,
                    'arguments' => [
                        \$config['memory_cost'],
                        \$config['time_cost'],
                        \$config['threads'],
                    ],
                ];
        }

        return [
            'class' => MessageDigestPasswordEncoder::class,
            'arguments' => [
                \$config['algorithm'],
                \$config['encode_as_base64'],
                \$config['iterations'],
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
        return "vendor/symfony/security-core/Encoder/EncoderFactory.php";
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

/**
 * A generic encoder factory implementation.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class EncoderFactory implements EncoderFactoryInterface
{
    private \$encoders;

    public function __construct(array \$encoders)
    {
        \$this->encoders = \$encoders;
    }

    /**
     * {@inheritdoc}
     */
    public function getEncoder(\$user)
    {
        \$encoderKey = null;

        if (\$user instanceof EncoderAwareInterface && (null !== \$encoderName = \$user->getEncoderName())) {
            if (!\\array_key_exists(\$encoderName, \$this->encoders)) {
                throw new \\RuntimeException(sprintf('The encoder \"%s\" was not configured.', \$encoderName));
            }

            \$encoderKey = \$encoderName;
        } else {
            foreach (\$this->encoders as \$class => \$encoder) {
                if ((\\is_object(\$user) && \$user instanceof \$class) || (!\\is_object(\$user) && (is_subclass_of(\$user, \$class) || \$user == \$class))) {
                    \$encoderKey = \$class;
                    break;
                }
            }
        }

        if (null === \$encoderKey) {
            throw new \\RuntimeException(sprintf('No encoder has been configured for account \"%s\".', \\is_object(\$user) ? \\get_class(\$user) : \$user));
        }

        if (!\$this->encoders[\$encoderKey] instanceof PasswordEncoderInterface) {
            \$this->encoders[\$encoderKey] = \$this->createEncoder(\$this->encoders[\$encoderKey]);
        }

        return \$this->encoders[\$encoderKey];
    }

    /**
     * Creates the actual encoder instance.
     *
     * @return PasswordEncoderInterface
     *
     * @throws \\InvalidArgumentException
     */
    private function createEncoder(array \$config)
    {
        if (isset(\$config['algorithm'])) {
            \$config = \$this->getEncoderConfigFromAlgorithm(\$config);
        }
        if (!isset(\$config['class'])) {
            throw new \\InvalidArgumentException(sprintf('\"class\" must be set in %s.', json_encode(\$config)));
        }
        if (!isset(\$config['arguments'])) {
            throw new \\InvalidArgumentException(sprintf('\"arguments\" must be set in %s.', json_encode(\$config)));
        }

        \$reflection = new \\ReflectionClass(\$config['class']);

        return \$reflection->newInstanceArgs(\$config['arguments']);
    }

    private function getEncoderConfigFromAlgorithm(\$config)
    {
        if ('auto' === \$config['algorithm']) {
            \$config['algorithm'] = SodiumPasswordEncoder::isSupported() ? 'sodium' : 'native';
        }

        switch (\$config['algorithm']) {
            case 'plaintext':
                return [
                    'class' => PlaintextPasswordEncoder::class,
                    'arguments' => [\$config['ignore_case']],
                ];

            case 'pbkdf2':
                return [
                    'class' => Pbkdf2PasswordEncoder::class,
                    'arguments' => [
                        \$config['hash_algorithm'],
                        \$config['encode_as_base64'],
                        \$config['iterations'],
                        \$config['key_length'],
                    ],
                ];

            /* @deprecated since Symfony 4.3 */
            case 'bcrypt':
                return [
                    'class' => BCryptPasswordEncoder::class,
                    'arguments' => [\$config['cost']],
                ];

            case 'native':
                return [
                    'class' => NativePasswordEncoder::class,
                    'arguments' => [
                        \$config['time_cost'] ?? null,
                        ((\$config['memory_cost'] ?? 0) << 10) ?: null,
                        \$config['cost'] ?? null,
                    ],
                ];

            case 'sodium':
                return [
                    'class' => SodiumPasswordEncoder::class,
                    'arguments' => [
                        \$config['time_cost'] ?? null,
                        ((\$config['memory_cost'] ?? 0) << 10) ?: null,
                    ],
                ];

            /* @deprecated since Symfony 4.3 */
            case 'argon2i':
                return [
                    'class' => Argon2iPasswordEncoder::class,
                    'arguments' => [
                        \$config['memory_cost'],
                        \$config['time_cost'],
                        \$config['threads'],
                    ],
                ];
        }

        return [
            'class' => MessageDigestPasswordEncoder::class,
            'arguments' => [
                \$config['algorithm'],
                \$config['encode_as_base64'],
                \$config['iterations'],
            ],
        ];
    }
}
", "vendor/symfony/security-core/Encoder/EncoderFactory.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Encoder/EncoderFactory.php");
    }
}
