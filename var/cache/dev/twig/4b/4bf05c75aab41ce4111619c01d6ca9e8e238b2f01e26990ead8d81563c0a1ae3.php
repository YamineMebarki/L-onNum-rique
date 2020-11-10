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

/* vendor/symfony/inflector/Tests/InflectorTest.php */
class __TwigTemplate_4a9f130313f9dbca3ebf3ac2af73643c443e3695087198749bf03357dfcedad2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/inflector/Tests/InflectorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/inflector/Tests/InflectorTest.php"));

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

namespace Symfony\\Component\\Inflector\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Inflector\\Inflector;

class InflectorTest extends TestCase
{
    public function singularizeProvider()
    {
        // see http://english-zone.com/spelling/plurals.html
        // see http://www.scribd.com/doc/3271143/List-of-100-Irregular-Plural-Nouns-in-English
        return [
            ['accesses', 'access'],
            ['addresses', 'address'],
            ['agendas', 'agenda'],
            ['alumnae', 'alumna'],
            ['alumni', 'alumnus'],
            ['analyses', ['analys', 'analyse', 'analysis']],
            ['antennae', 'antenna'],
            ['antennas', 'antenna'],
            ['appendices', ['appendex', 'appendix', 'appendice']],
            ['arches', ['arch', 'arche']],
            ['atlases', ['atlas', 'atlase', 'atlasis']],
            ['axes', ['ax', 'axe', 'axis']],
            ['babies', 'baby'],
            ['bacteria', ['bacterion', 'bacterium']],
            ['bases', ['bas', 'base', 'basis']],
            ['batches', ['batch', 'batche']],
            ['beaux', 'beau'],
            ['bees', 'bee'],
            ['boxes', 'box'],
            ['boys', 'boy'],
            ['bureaus', 'bureau'],
            ['bureaux', 'bureau'],
            ['buses', ['bus', 'buse', 'busis']],
            ['bushes', ['bush', 'bushe']],
            ['calves', ['calf', 'calve', 'calff']],
            ['cars', 'car'],
            ['cassettes', ['cassett', 'cassette']],
            ['caves', ['caf', 'cave', 'caff']],
            ['chateaux', 'chateau'],
            ['cheeses', ['chees', 'cheese', 'cheesis']],
            ['children', 'child'],
            ['circuses', ['circus', 'circuse', 'circusis']],
            ['cliffs', 'cliff'],
            ['committee', 'committee'],
            ['crises', ['cris', 'crise', 'crisis']],
            ['criteria', ['criterion', 'criterium']],
            ['cups', 'cup'],
            ['data', 'data'],
            ['days', 'day'],
            ['discos', 'disco'],
            ['devices', ['devex', 'devix', 'device']],
            ['drives', 'drive'],
            ['drivers', 'driver'],
            ['dwarves', ['dwarf', 'dwarve', 'dwarff']],
            ['echoes', ['echo', 'echoe']],
            ['elves', ['elf', 'elve', 'elff']],
            ['emphases', ['emphas', 'emphase', 'emphasis']],
            ['employees', 'employee'],
            ['faxes', 'fax'],
            ['fees', 'fee'],
            ['feet', 'foot'],
            ['feedback', 'feedback'],
            ['foci', 'focus'],
            ['focuses', ['focus', 'focuse', 'focusis']],
            ['formulae', 'formula'],
            ['formulas', 'formula'],
            ['fungi', 'fungus'],
            ['funguses', ['fungus', 'funguse', 'fungusis']],
            ['garages', ['garag', 'garage']],
            ['geese', 'goose'],
            ['halves', ['half', 'halve', 'halff']],
            ['hats', 'hat'],
            ['heroes', ['hero', 'heroe']],
            ['hippopotamuses', ['hippopotamus', 'hippopotamuse', 'hippopotamusis']], //hippopotami
            ['hoaxes', 'hoax'],
            ['hooves', ['hoof', 'hoove', 'hooff']],
            ['houses', ['hous', 'house', 'housis']],
            ['indexes', 'index'],
            ['indices', ['index', 'indix', 'indice']],
            ['ions', 'ion'],
            ['irises', ['iris', 'irise', 'irisis']],
            ['kisses', 'kiss'],
            ['knives', 'knife'],
            ['lamps', 'lamp'],
            ['lessons', 'lesson'],
            ['leaves', ['leaf', 'leave', 'leaff']],
            ['lice', 'louse'],
            ['lives', 'life'],
            ['matrices', ['matrex', 'matrix', 'matrice']],
            ['matrixes', 'matrix'],
            ['men', 'man'],
            ['mice', 'mouse'],
            ['moves', 'move'],
            ['movies', 'movie'],
            ['nebulae', 'nebula'],
            ['neuroses', ['neuros', 'neurose', 'neurosis']],
            ['news', 'news'],
            ['oases', ['oas', 'oase', 'oasis']],
            ['objectives', 'objective'],
            ['oxen', 'ox'],
            ['parties', 'party'],
            ['people', 'person'],
            ['persons', 'person'],
            ['phenomena', ['phenomenon', 'phenomenum']],
            ['photos', 'photo'],
            ['pianos', 'piano'],
            ['plateaux', 'plateau'],
            ['poisons', 'poison'],
            ['poppies', 'poppy'],
            ['prices', ['prex', 'prix', 'price']],
            ['quizzes', 'quiz'],
            ['radii', 'radius'],
            ['roofs', 'roof'],
            ['roses', ['ros', 'rose', 'rosis']],
            ['sandwiches', ['sandwich', 'sandwiche']],
            ['scarves', ['scarf', 'scarve', 'scarff']],
            ['schemas', 'schema'], //schemata
            ['seasons', 'season'],
            ['selfies', 'selfie'],
            ['series', 'series'],
            ['services', 'service'],
            ['sheriffs', 'sheriff'],
            ['shoes', ['sho', 'shoe']],
            ['spies', 'spy'],
            ['staves', ['staf', 'stave', 'staff']],
            ['stories', 'story'],
            ['strata', ['straton', 'stratum']],
            ['suitcases', ['suitcas', 'suitcase', 'suitcasis']],
            ['syllabi', 'syllabus'],
            ['tags', 'tag'],
            ['teeth', 'tooth'],
            ['theses', ['thes', 'these', 'thesis']],
            ['thieves', ['thief', 'thieve', 'thieff']],
            ['treasons', 'treason'],
            ['trees', 'tree'],
            ['waltzes', ['waltz', 'waltze']],
            ['wives', 'wife'],

            // test casing: if the first letter was uppercase, it should remain so
            ['Men', 'Man'],
            ['GrandChildren', 'GrandChild'],
            ['SubTrees', 'SubTree'],

            // Known issues
            //['insignia', 'insigne'],
            //['insignias', 'insigne'],
            //['rattles', 'rattle'],
        ];
    }

    public function pluralizeProvider()
    {
        // see http://english-zone.com/spelling/plurals.html
        // see http://www.scribd.com/doc/3271143/List-of-100-Irregular-Plural-Nouns-in-English
        return [
            ['access', 'accesses'],
            ['address', 'addresses'],
            ['agenda', 'agendas'],
            ['alumnus', 'alumni'],
            ['analysis', 'analyses'],
            ['antenna', 'antennas'], //antennae
            ['appendix', ['appendicies', 'appendixes']],
            ['arch', 'arches'],
            ['atlas', 'atlases'],
            ['axe', 'axes'],
            ['baby', 'babies'],
            ['bacterium', 'bacteria'],
            ['base', 'bases'],
            ['batch', 'batches'],
            ['beau', ['beaus', 'beaux']],
            ['bee', 'bees'],
            ['box', 'boxes'],
            ['boy', 'boys'],
            ['bureau', ['bureaus', 'bureaux']],
            ['bus', 'buses'],
            ['bush', 'bushes'],
            ['calf', ['calfs', 'calves']],
            ['car', 'cars'],
            ['cassette', 'cassettes'],
            ['cave', 'caves'],
            ['chateau', ['chateaus', 'chateaux']],
            ['cheese', 'cheeses'],
            ['child', 'children'],
            ['circus', 'circuses'],
            ['cliff', 'cliffs'],
            ['committee', 'committees'],
            ['crisis', 'crises'],
            ['criteria', 'criterion'],
            ['cup', 'cups'],
            ['data', 'data'],
            ['day', 'days'],
            ['disco', 'discos'],
            ['device', 'devices'],
            ['drive', 'drives'],
            ['driver', 'drivers'],
            ['dwarf', ['dwarfs', 'dwarves']],
            ['echo', 'echoes'],
            ['elf', ['elfs', 'elves']],
            ['emphasis', 'emphases'],
            ['fax', ['facies', 'faxes']],
            ['feedback', 'feedback'],
            ['focus', 'focuses'],
            ['foot', 'feet'],
            ['formula', 'formulas'], //formulae
            ['fungus', 'fungi'],
            ['garage', 'garages'],
            ['goose', 'geese'],
            ['half', ['halfs', 'halves']],
            ['hat', 'hats'],
            ['hero', 'heroes'],
            ['hippopotamus', 'hippopotami'], //hippopotamuses
            ['hoax', 'hoaxes'],
            ['hoof', ['hoofs', 'hooves']],
            ['house', 'houses'],
            ['index', ['indicies', 'indexes']],
            ['ion', 'ions'],
            ['iris', 'irises'],
            ['kiss', 'kisses'],
            ['knife', 'knives'],
            ['lamp', 'lamps'],
            ['leaf', ['leafs', 'leaves']],
            ['lesson', 'lessons'],
            ['life', 'lives'],
            ['louse', 'lice'],
            ['man', 'men'],
            ['matrix', ['matricies', 'matrixes']],
            ['mouse', 'mice'],
            ['move', 'moves'],
            ['movie', 'movies'],
            ['nebula', 'nebulae'],
            ['neurosis', 'neuroses'],
            ['news', 'news'],
            ['oasis', 'oases'],
            ['objective', 'objectives'],
            ['ox', 'oxen'],
            ['party', 'parties'],
            ['person', ['persons', 'people']],
            ['phenomenon', 'phenomena'],
            ['photo', 'photos'],
            ['piano', 'pianos'],
            ['plateau', ['plateaus', 'plateaux']],
            ['poison', 'poisons'],
            ['poppy', 'poppies'],
            ['price', 'prices'],
            ['quiz', 'quizzes'],
            ['radius', 'radii'],
            ['roof', ['roofs', 'rooves']],
            ['rose', 'roses'],
            ['sandwich', 'sandwiches'],
            ['scarf', ['scarfs', 'scarves']],
            ['schema', 'schemas'], //schemata
            ['season', 'seasons'],
            ['selfie', 'selfies'],
            ['series', 'series'],
            ['service', 'services'],
            ['sheriff', 'sheriffs'],
            ['shoe', 'shoes'],
            ['spy', 'spies'],
            ['staff', 'staves'],
            ['story', 'stories'],
            ['stratum', 'strata'],
            ['suitcase', 'suitcases'],
            ['syllabus', 'syllabi'],
            ['tag', 'tags'],
            ['thief', ['thiefs', 'thieves']],
            ['tooth', 'teeth'],
            ['treason', 'treasons'],
            ['tree', 'trees'],
            ['waltz', 'waltzes'],
            ['wife', 'wives'],

            // test casing: if the first letter was uppercase, it should remain so
            ['Man', 'Men'],
            ['GrandChild', 'GrandChildren'],
            ['SubTree', 'SubTrees'],
        ];
    }

    /**
     * @dataProvider singularizeProvider
     */
    public function testSingularize(\$plural, \$singular)
    {
        \$single = Inflector::singularize(\$plural);
        if (\\is_string(\$singular) && \\is_array(\$single)) {
            \$this->fail(\"--- Expected\\n`string`: \".\$singular.\"\\n+++ Actual\\n`array`: \".implode(', ', \$single));
        } elseif (\\is_array(\$singular) && \\is_string(\$single)) {
            \$this->fail(\"--- Expected\\n`array`: \".implode(', ', \$singular).\"\\n+++ Actual\\n`string`: \".\$single);
        }

        \$this->assertEquals(\$singular, \$single);
    }

    /**
     * @dataProvider pluralizeProvider
     */
    public function testPluralize(\$plural, \$singular)
    {
        \$single = Inflector::pluralize(\$plural);
        if (\\is_string(\$singular) && \\is_array(\$single)) {
            \$this->fail(\"--- Expected\\n`string`: \".\$singular.\"\\n+++ Actual\\n`array`: \".implode(', ', \$single));
        } elseif (\\is_array(\$singular) && \\is_string(\$single)) {
            \$this->fail(\"--- Expected\\n`array`: \".implode(', ', \$singular).\"\\n+++ Actual\\n`string`: \".\$single);
        }

        \$this->assertEquals(\$singular, \$single);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/inflector/Tests/InflectorTest.php";
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

namespace Symfony\\Component\\Inflector\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Inflector\\Inflector;

class InflectorTest extends TestCase
{
    public function singularizeProvider()
    {
        // see http://english-zone.com/spelling/plurals.html
        // see http://www.scribd.com/doc/3271143/List-of-100-Irregular-Plural-Nouns-in-English
        return [
            ['accesses', 'access'],
            ['addresses', 'address'],
            ['agendas', 'agenda'],
            ['alumnae', 'alumna'],
            ['alumni', 'alumnus'],
            ['analyses', ['analys', 'analyse', 'analysis']],
            ['antennae', 'antenna'],
            ['antennas', 'antenna'],
            ['appendices', ['appendex', 'appendix', 'appendice']],
            ['arches', ['arch', 'arche']],
            ['atlases', ['atlas', 'atlase', 'atlasis']],
            ['axes', ['ax', 'axe', 'axis']],
            ['babies', 'baby'],
            ['bacteria', ['bacterion', 'bacterium']],
            ['bases', ['bas', 'base', 'basis']],
            ['batches', ['batch', 'batche']],
            ['beaux', 'beau'],
            ['bees', 'bee'],
            ['boxes', 'box'],
            ['boys', 'boy'],
            ['bureaus', 'bureau'],
            ['bureaux', 'bureau'],
            ['buses', ['bus', 'buse', 'busis']],
            ['bushes', ['bush', 'bushe']],
            ['calves', ['calf', 'calve', 'calff']],
            ['cars', 'car'],
            ['cassettes', ['cassett', 'cassette']],
            ['caves', ['caf', 'cave', 'caff']],
            ['chateaux', 'chateau'],
            ['cheeses', ['chees', 'cheese', 'cheesis']],
            ['children', 'child'],
            ['circuses', ['circus', 'circuse', 'circusis']],
            ['cliffs', 'cliff'],
            ['committee', 'committee'],
            ['crises', ['cris', 'crise', 'crisis']],
            ['criteria', ['criterion', 'criterium']],
            ['cups', 'cup'],
            ['data', 'data'],
            ['days', 'day'],
            ['discos', 'disco'],
            ['devices', ['devex', 'devix', 'device']],
            ['drives', 'drive'],
            ['drivers', 'driver'],
            ['dwarves', ['dwarf', 'dwarve', 'dwarff']],
            ['echoes', ['echo', 'echoe']],
            ['elves', ['elf', 'elve', 'elff']],
            ['emphases', ['emphas', 'emphase', 'emphasis']],
            ['employees', 'employee'],
            ['faxes', 'fax'],
            ['fees', 'fee'],
            ['feet', 'foot'],
            ['feedback', 'feedback'],
            ['foci', 'focus'],
            ['focuses', ['focus', 'focuse', 'focusis']],
            ['formulae', 'formula'],
            ['formulas', 'formula'],
            ['fungi', 'fungus'],
            ['funguses', ['fungus', 'funguse', 'fungusis']],
            ['garages', ['garag', 'garage']],
            ['geese', 'goose'],
            ['halves', ['half', 'halve', 'halff']],
            ['hats', 'hat'],
            ['heroes', ['hero', 'heroe']],
            ['hippopotamuses', ['hippopotamus', 'hippopotamuse', 'hippopotamusis']], //hippopotami
            ['hoaxes', 'hoax'],
            ['hooves', ['hoof', 'hoove', 'hooff']],
            ['houses', ['hous', 'house', 'housis']],
            ['indexes', 'index'],
            ['indices', ['index', 'indix', 'indice']],
            ['ions', 'ion'],
            ['irises', ['iris', 'irise', 'irisis']],
            ['kisses', 'kiss'],
            ['knives', 'knife'],
            ['lamps', 'lamp'],
            ['lessons', 'lesson'],
            ['leaves', ['leaf', 'leave', 'leaff']],
            ['lice', 'louse'],
            ['lives', 'life'],
            ['matrices', ['matrex', 'matrix', 'matrice']],
            ['matrixes', 'matrix'],
            ['men', 'man'],
            ['mice', 'mouse'],
            ['moves', 'move'],
            ['movies', 'movie'],
            ['nebulae', 'nebula'],
            ['neuroses', ['neuros', 'neurose', 'neurosis']],
            ['news', 'news'],
            ['oases', ['oas', 'oase', 'oasis']],
            ['objectives', 'objective'],
            ['oxen', 'ox'],
            ['parties', 'party'],
            ['people', 'person'],
            ['persons', 'person'],
            ['phenomena', ['phenomenon', 'phenomenum']],
            ['photos', 'photo'],
            ['pianos', 'piano'],
            ['plateaux', 'plateau'],
            ['poisons', 'poison'],
            ['poppies', 'poppy'],
            ['prices', ['prex', 'prix', 'price']],
            ['quizzes', 'quiz'],
            ['radii', 'radius'],
            ['roofs', 'roof'],
            ['roses', ['ros', 'rose', 'rosis']],
            ['sandwiches', ['sandwich', 'sandwiche']],
            ['scarves', ['scarf', 'scarve', 'scarff']],
            ['schemas', 'schema'], //schemata
            ['seasons', 'season'],
            ['selfies', 'selfie'],
            ['series', 'series'],
            ['services', 'service'],
            ['sheriffs', 'sheriff'],
            ['shoes', ['sho', 'shoe']],
            ['spies', 'spy'],
            ['staves', ['staf', 'stave', 'staff']],
            ['stories', 'story'],
            ['strata', ['straton', 'stratum']],
            ['suitcases', ['suitcas', 'suitcase', 'suitcasis']],
            ['syllabi', 'syllabus'],
            ['tags', 'tag'],
            ['teeth', 'tooth'],
            ['theses', ['thes', 'these', 'thesis']],
            ['thieves', ['thief', 'thieve', 'thieff']],
            ['treasons', 'treason'],
            ['trees', 'tree'],
            ['waltzes', ['waltz', 'waltze']],
            ['wives', 'wife'],

            // test casing: if the first letter was uppercase, it should remain so
            ['Men', 'Man'],
            ['GrandChildren', 'GrandChild'],
            ['SubTrees', 'SubTree'],

            // Known issues
            //['insignia', 'insigne'],
            //['insignias', 'insigne'],
            //['rattles', 'rattle'],
        ];
    }

    public function pluralizeProvider()
    {
        // see http://english-zone.com/spelling/plurals.html
        // see http://www.scribd.com/doc/3271143/List-of-100-Irregular-Plural-Nouns-in-English
        return [
            ['access', 'accesses'],
            ['address', 'addresses'],
            ['agenda', 'agendas'],
            ['alumnus', 'alumni'],
            ['analysis', 'analyses'],
            ['antenna', 'antennas'], //antennae
            ['appendix', ['appendicies', 'appendixes']],
            ['arch', 'arches'],
            ['atlas', 'atlases'],
            ['axe', 'axes'],
            ['baby', 'babies'],
            ['bacterium', 'bacteria'],
            ['base', 'bases'],
            ['batch', 'batches'],
            ['beau', ['beaus', 'beaux']],
            ['bee', 'bees'],
            ['box', 'boxes'],
            ['boy', 'boys'],
            ['bureau', ['bureaus', 'bureaux']],
            ['bus', 'buses'],
            ['bush', 'bushes'],
            ['calf', ['calfs', 'calves']],
            ['car', 'cars'],
            ['cassette', 'cassettes'],
            ['cave', 'caves'],
            ['chateau', ['chateaus', 'chateaux']],
            ['cheese', 'cheeses'],
            ['child', 'children'],
            ['circus', 'circuses'],
            ['cliff', 'cliffs'],
            ['committee', 'committees'],
            ['crisis', 'crises'],
            ['criteria', 'criterion'],
            ['cup', 'cups'],
            ['data', 'data'],
            ['day', 'days'],
            ['disco', 'discos'],
            ['device', 'devices'],
            ['drive', 'drives'],
            ['driver', 'drivers'],
            ['dwarf', ['dwarfs', 'dwarves']],
            ['echo', 'echoes'],
            ['elf', ['elfs', 'elves']],
            ['emphasis', 'emphases'],
            ['fax', ['facies', 'faxes']],
            ['feedback', 'feedback'],
            ['focus', 'focuses'],
            ['foot', 'feet'],
            ['formula', 'formulas'], //formulae
            ['fungus', 'fungi'],
            ['garage', 'garages'],
            ['goose', 'geese'],
            ['half', ['halfs', 'halves']],
            ['hat', 'hats'],
            ['hero', 'heroes'],
            ['hippopotamus', 'hippopotami'], //hippopotamuses
            ['hoax', 'hoaxes'],
            ['hoof', ['hoofs', 'hooves']],
            ['house', 'houses'],
            ['index', ['indicies', 'indexes']],
            ['ion', 'ions'],
            ['iris', 'irises'],
            ['kiss', 'kisses'],
            ['knife', 'knives'],
            ['lamp', 'lamps'],
            ['leaf', ['leafs', 'leaves']],
            ['lesson', 'lessons'],
            ['life', 'lives'],
            ['louse', 'lice'],
            ['man', 'men'],
            ['matrix', ['matricies', 'matrixes']],
            ['mouse', 'mice'],
            ['move', 'moves'],
            ['movie', 'movies'],
            ['nebula', 'nebulae'],
            ['neurosis', 'neuroses'],
            ['news', 'news'],
            ['oasis', 'oases'],
            ['objective', 'objectives'],
            ['ox', 'oxen'],
            ['party', 'parties'],
            ['person', ['persons', 'people']],
            ['phenomenon', 'phenomena'],
            ['photo', 'photos'],
            ['piano', 'pianos'],
            ['plateau', ['plateaus', 'plateaux']],
            ['poison', 'poisons'],
            ['poppy', 'poppies'],
            ['price', 'prices'],
            ['quiz', 'quizzes'],
            ['radius', 'radii'],
            ['roof', ['roofs', 'rooves']],
            ['rose', 'roses'],
            ['sandwich', 'sandwiches'],
            ['scarf', ['scarfs', 'scarves']],
            ['schema', 'schemas'], //schemata
            ['season', 'seasons'],
            ['selfie', 'selfies'],
            ['series', 'series'],
            ['service', 'services'],
            ['sheriff', 'sheriffs'],
            ['shoe', 'shoes'],
            ['spy', 'spies'],
            ['staff', 'staves'],
            ['story', 'stories'],
            ['stratum', 'strata'],
            ['suitcase', 'suitcases'],
            ['syllabus', 'syllabi'],
            ['tag', 'tags'],
            ['thief', ['thiefs', 'thieves']],
            ['tooth', 'teeth'],
            ['treason', 'treasons'],
            ['tree', 'trees'],
            ['waltz', 'waltzes'],
            ['wife', 'wives'],

            // test casing: if the first letter was uppercase, it should remain so
            ['Man', 'Men'],
            ['GrandChild', 'GrandChildren'],
            ['SubTree', 'SubTrees'],
        ];
    }

    /**
     * @dataProvider singularizeProvider
     */
    public function testSingularize(\$plural, \$singular)
    {
        \$single = Inflector::singularize(\$plural);
        if (\\is_string(\$singular) && \\is_array(\$single)) {
            \$this->fail(\"--- Expected\\n`string`: \".\$singular.\"\\n+++ Actual\\n`array`: \".implode(', ', \$single));
        } elseif (\\is_array(\$singular) && \\is_string(\$single)) {
            \$this->fail(\"--- Expected\\n`array`: \".implode(', ', \$singular).\"\\n+++ Actual\\n`string`: \".\$single);
        }

        \$this->assertEquals(\$singular, \$single);
    }

    /**
     * @dataProvider pluralizeProvider
     */
    public function testPluralize(\$plural, \$singular)
    {
        \$single = Inflector::pluralize(\$plural);
        if (\\is_string(\$singular) && \\is_array(\$single)) {
            \$this->fail(\"--- Expected\\n`string`: \".\$singular.\"\\n+++ Actual\\n`array`: \".implode(', ', \$single));
        } elseif (\\is_array(\$singular) && \\is_string(\$single)) {
            \$this->fail(\"--- Expected\\n`array`: \".implode(', ', \$singular).\"\\n+++ Actual\\n`string`: \".\$single);
        }

        \$this->assertEquals(\$singular, \$single);
    }
}
", "vendor/symfony/inflector/Tests/InflectorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/inflector/Tests/InflectorTest.php");
    }
}
