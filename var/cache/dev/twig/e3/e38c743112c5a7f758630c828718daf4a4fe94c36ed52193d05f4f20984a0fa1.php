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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/CharacterReader.php */
class __TwigTemplate_e7619d77dd457767510da46652064360827e5646a94e8e3245f6fee7df0023c0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/CharacterReader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/CharacterReader.php"));

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
 * Analyzes characters for a specific character set.
 *
 * @author Chris Corbyn
 * @author Xavier De Cock <xdecock@gmail.com>
 */
interface Swift_CharacterReader
{
    const MAP_TYPE_INVALID = 0x01;
    const MAP_TYPE_FIXED_LEN = 0x02;
    const MAP_TYPE_POSITIONS = 0x03;

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
    public function getCharPositions(\$string, \$startOffset, &\$currentMap, &\$ignoredChars);

    /**
     * Returns the mapType, see constants.
     *
     * @return int
     */
    public function getMapType();

    /**
     * Returns an integer which specifies how many more bytes to read.
     *
     * A positive integer indicates the number of more bytes to fetch before invoking
     * this method again.
     *
     * A value of zero means this is already a valid character.
     * A value of -1 means this cannot possibly be a valid character.
     *
     * @param int[] \$bytes
     * @param int   \$size
     *
     * @return int
     */
    public function validateByteSequence(\$bytes, \$size);

    /**
     * Returns the number of bytes which should be read to start each character.
     *
     * For fixed width character sets this should be the number of octets-per-character.
     * For multibyte character sets this will probably be 1.
     *
     * @return int
     */
    public function getInitialByteSize();
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/CharacterReader.php";
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
 * Analyzes characters for a specific character set.
 *
 * @author Chris Corbyn
 * @author Xavier De Cock <xdecock@gmail.com>
 */
interface Swift_CharacterReader
{
    const MAP_TYPE_INVALID = 0x01;
    const MAP_TYPE_FIXED_LEN = 0x02;
    const MAP_TYPE_POSITIONS = 0x03;

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
    public function getCharPositions(\$string, \$startOffset, &\$currentMap, &\$ignoredChars);

    /**
     * Returns the mapType, see constants.
     *
     * @return int
     */
    public function getMapType();

    /**
     * Returns an integer which specifies how many more bytes to read.
     *
     * A positive integer indicates the number of more bytes to fetch before invoking
     * this method again.
     *
     * A value of zero means this is already a valid character.
     * A value of -1 means this cannot possibly be a valid character.
     *
     * @param int[] \$bytes
     * @param int   \$size
     *
     * @return int
     */
    public function validateByteSequence(\$bytes, \$size);

    /**
     * Returns the number of bytes which should be read to start each character.
     *
     * For fixed width character sets this should be the number of octets-per-character.
     * For multibyte character sets this will probably be 1.
     *
     * @return int
     */
    public function getInitialByteSize();
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/CharacterReader.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/CharacterReader.php");
    }
}
