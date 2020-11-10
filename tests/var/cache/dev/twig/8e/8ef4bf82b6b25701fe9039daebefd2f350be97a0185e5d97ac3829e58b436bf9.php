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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/CharacterReader/GenericFixedWidthReader.php */
class __TwigTemplate_6d54a83960a5ad37495bf5b77f8f4861d0b5fc801729546b09bf633547acaf36 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/CharacterReader/GenericFixedWidthReader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/CharacterReader/GenericFixedWidthReader.php"));

        // line 1
        echo "<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Provides fixed-width byte sizes for reading fixed-width character sets.
 *
 * @author     Chris Corbyn
 * @author     Xavier De Cock <xdecock@gmail.com>
 */
class Swift_CharacterReader_GenericFixedWidthReader implements Swift_CharacterReader
{
    /**
     * The number of bytes in a single character.
     *
     * @var int
     */
    private \$width;

    /**
     * Creates a new GenericFixedWidthReader using \$width bytes per character.
     *
     * @param int \$width
     */
    public function __construct(\$width)
    {
        \$this->width = \$width;
    }

    /**
     * Returns the complete character map.
     *
     * @param string \$string
     * @param int    \$startOffset
     * @param array  \$currentMap
     * @param mixed  \$ignoredChars
     *
     * @return int
     */
    public function getCharPositions(\$string, \$startOffset, &\$currentMap, &\$ignoredChars)
    {
        \$strlen = strlen(\$string);
        // % and / are CPU intensive, so, maybe find a better way
        \$ignored = \$strlen % \$this->width;
        \$ignoredChars = \$ignored ? substr(\$string, -\$ignored) : '';
        \$currentMap = \$this->width;

        return (\$strlen - \$ignored) / \$this->width;
    }

    /**
     * Returns the mapType.
     *
     * @return int
     */
    public function getMapType()
    {
        return self::MAP_TYPE_FIXED_LEN;
    }

    /**
     * Returns an integer which specifies how many more bytes to read.
     *
     * A positive integer indicates the number of more bytes to fetch before invoking
     * this method again.
     *
     * A value of zero means this is already a valid character.
     * A value of -1 means this cannot possibly be a valid character.
     *
     * @param string \$bytes
     * @param int    \$size
     *
     * @return int
     */
    public function validateByteSequence(\$bytes, \$size)
    {
        \$needed = \$this->width - \$size;

        return \$needed > -1 ? \$needed : -1;
    }

    /**
     * Returns the number of bytes which should be read to start each character.
     *
     * @return int
     */
    public function getInitialByteSize()
    {
        return \$this->width;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/CharacterReader/GenericFixedWidthReader.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Provides fixed-width byte sizes for reading fixed-width character sets.
 *
 * @author     Chris Corbyn
 * @author     Xavier De Cock <xdecock@gmail.com>
 */
class Swift_CharacterReader_GenericFixedWidthReader implements Swift_CharacterReader
{
    /**
     * The number of bytes in a single character.
     *
     * @var int
     */
    private \$width;

    /**
     * Creates a new GenericFixedWidthReader using \$width bytes per character.
     *
     * @param int \$width
     */
    public function __construct(\$width)
    {
        \$this->width = \$width;
    }

    /**
     * Returns the complete character map.
     *
     * @param string \$string
     * @param int    \$startOffset
     * @param array  \$currentMap
     * @param mixed  \$ignoredChars
     *
     * @return int
     */
    public function getCharPositions(\$string, \$startOffset, &\$currentMap, &\$ignoredChars)
    {
        \$strlen = strlen(\$string);
        // % and / are CPU intensive, so, maybe find a better way
        \$ignored = \$strlen % \$this->width;
        \$ignoredChars = \$ignored ? substr(\$string, -\$ignored) : '';
        \$currentMap = \$this->width;

        return (\$strlen - \$ignored) / \$this->width;
    }

    /**
     * Returns the mapType.
     *
     * @return int
     */
    public function getMapType()
    {
        return self::MAP_TYPE_FIXED_LEN;
    }

    /**
     * Returns an integer which specifies how many more bytes to read.
     *
     * A positive integer indicates the number of more bytes to fetch before invoking
     * this method again.
     *
     * A value of zero means this is already a valid character.
     * A value of -1 means this cannot possibly be a valid character.
     *
     * @param string \$bytes
     * @param int    \$size
     *
     * @return int
     */
    public function validateByteSequence(\$bytes, \$size)
    {
        \$needed = \$this->width - \$size;

        return \$needed > -1 ? \$needed : -1;
    }

    /**
     * Returns the number of bytes which should be read to start each character.
     *
     * @return int
     */
    public function getInitialByteSize()
    {
        return \$this->width;
    }
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/CharacterReader/GenericFixedWidthReader.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/CharacterReader/GenericFixedWidthReader.php");
    }
}
