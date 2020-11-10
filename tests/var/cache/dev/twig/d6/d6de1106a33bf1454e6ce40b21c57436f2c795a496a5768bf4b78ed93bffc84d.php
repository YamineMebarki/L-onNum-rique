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

/* vendor/fzaninotto/faker/src/Faker/Provider/es_ES/Person.php */
class __TwigTemplate_262fa88870249901eb8b3d85bdc4dcd0ea5279947e4a3aaf73902d5ed0d5dd21 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/es_ES/Person.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/es_ES/Person.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\es_ES;

class Person extends \\Faker\\Provider\\Person
{
    private static \$crcMap=array('T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E', 'T');

    protected static \$maleNameFormats = array(
        '";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 10, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 11, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 12, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 13, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["titleMale"]) || array_key_exists("titleMale", $context) ? $context["titleMale"] : (function () { throw new RuntimeError('Variable "titleMale" does not exist.', 14, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 14, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["titleMale"]) || array_key_exists("titleMale", $context) ? $context["titleMale"] : (function () { throw new RuntimeError('Variable "titleMale" does not exist.', 15, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 15, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 15, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 16, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 16, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$femaleNameFormats = array(
        '";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 20, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 21, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 22, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 23, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["titleFemale"]) || array_key_exists("titleFemale", $context) ? $context["titleFemale"] : (function () { throw new RuntimeError('Variable "titleFemale" does not exist.', 24, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 24, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 25, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 25, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["titleFemale"]) || array_key_exists("titleFemale", $context) ? $context["titleFemale"] : (function () { throw new RuntimeError('Variable "titleFemale" does not exist.', 26, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 26, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 26, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "',
    );

    /**
     * {@link} http://www.ine.es/daco/daco42/nombyapel/nombyapel.htm
     * Manually added accent marks because the source lacks of them
     */
    protected static \$firstNameMale = array(
        'Aaron', 'Adam', 'Adrián', 'Aitor', 'Alberto', 'Aleix', 'Alejandro', 'Alex', 'Alonso', 'Álvaro', 'Ander', 'Andrés',
        'Ángel', 'Antonio', 'Arnau', 'Asier', 'Biel', 'Bruno', 'Carlos', 'César', 'Cristian', 'Daniel', 'Dario', 'David',
        'Diego', 'Eduardo', 'Enrique', 'Eric', 'Erik', 'Fernando', 'Francisco', 'Francisco Javier', 'Gabriel', 'Gael', 'Gerard', 'Gonzalo',
        'Guillem', 'Guillermo', 'Héctor', 'Hugo', 'Ian', 'Ignacio', 'Iker', 'Isaac', 'Ismael', 'Iván', 'Izan', 'Jaime',
        'Jan', 'Javier', 'Jesús', 'Joel', 'Jon', 'Jordi', 'Jorge', 'José', 'José Antonio', 'José Manuel', 'Juan', 'Juan José',
        'Leo', 'Lucas', 'Luis', 'Manuel', 'Marc', 'Marco', 'Marcos', 'Mario', 'Martín', 'Mateo', 'Miguel', 'Miguel Ángel',
        'Nicolás', 'Oliver', 'Omar', 'Oriol', 'Óscar', 'Pablo', 'Pedro', 'Pol', 'Rafael', 'Raúl', 'Rayan',
        'Roberto', 'Rodrigo', 'Rubén', 'Samuel', 'Santiago', 'Saúl', 'Sergio', 'Unai', 'Víctor', 'Yago', 'Yeray',
    );

    protected static \$firstNameFemale = array(
        'Abril', 'Adriana', 'Africa', 'Aina', 'Ainara', 'Ainhoa', 'Aitana', 'Alba', 'Alejandra', 'Alexandra', 'Alexia', 'Alicia', 'Alma',
        'Ana', 'Andrea', 'Ane', 'Angela', 'Anna', 'Ariadna', 'Aroa', 'Aya', 'Beatriz', 'Berta', 'Blanca', 'Candela',
        'Carla', 'Carlota', 'Carmen', 'Carolina', 'Celia', 'Clara', 'Claudia', 'Cristina', 'Daniela', 'Diana', 'Elena', 'Elsa',
        'Emma', 'Erika', 'Eva', 'Fátima', 'Gabriela', 'Helena', 'Inés', 'Irene', 'Iria', 'Isabel', 'Jana', 'Jimena',
        'Joan', 'Julia', 'Laia', 'Lara', 'Laura', 'Leire', 'Leyre', 'Lidia', 'Lola', 'Lucía', 'Luna', 'Malak',
        'Manuela', 'Mar', 'Mara', 'María', 'Marina', 'Marta', 'Martí', 'Martina', 'Mireia', 'Miriam', 'Nadia', 'Nahia',
        'Naia', 'Naiara', 'Natalia', 'Nayara', 'Nerea', 'Nil', 'Noa', 'Noelia', 'Nora', 'Nuria', 'Olivia', 'Ona',
        'Paola', 'Patricia', 'Pau', 'Paula', 'Raquel', 'Rocío', 'Salma', 'Sandra', 'Sara', 'Silvia', 'Sofía', 'Teresa',
        'Valentina', 'Valeria', 'Vega', 'Vera', 'Victoria', 'Yaiza', 'Zoe',
    );

    protected static \$lastName = array(
        'Abad', 'Abeyta', 'Abrego', 'Abreu', 'Acevedo', 'Acosta', 'Acuña', 'Adame', 'Adorno', 'Agosto', 'Aguado', 'Aguayo', 'Aguilar', 'Aguilera', 'Aguirre', 'Alanis', 'Alaniz', 'Alarcón', 'Alba', 'Alcala', 'Alcaráz', 'Alcántar', 'Alejandro', 'Alemán', 'Alfaro', 'Alfonso', 'Alicea', 'Almanza', 'Almaráz', 'Almonte', 'Alonso', 'Alonzo', 'Altamirano', 'Alva', 'Alvarado', 'Amador', 'Amaya', 'Anaya', 'Andreu', 'Andrés', 'Anguiano', 'Angulo', 'Antón', 'Aparicio', 'Apodaca', 'Aponte', 'Aragón', 'Aranda', 'Araña', 'Arce', 'Archuleta', 'Arellano', 'Arenas', 'Arevalo', 'Arguello', 'Arias', 'Armas', 'Armendáriz', 'Armenta', 'Armijo', 'Arredondo', 'Arreola', 'Arriaga', 'Arribas', 'Arroyo', 'Arteaga', 'Asensio', 'Atencio', 'Avilés', 'Ayala', 'Baca', 'Badillo', 'Baeza', 'Bahena', 'Balderas', 'Ballesteros', 'Banda', 'Barajas', 'Barela', 'Barragán', 'Barraza', 'Barrera', 'Barreto', 'Barrientos', 'Barrios', 'Barroso', 'Batista', 'Bautista', 'Bañuelos', 'Becerra', 'Beltrán', 'Benavides', 'Benavídez', 'Benito', 'Benítez', 'Bermejo', 'Bermúdez', 'Bernal', 'Berríos', 'Blanco', 'Blasco', 'Blázquez', 'Bonilla', 'Borrego', 'Botello', 'Bravo', 'Briones', 'Briseño', 'Brito', 'Bueno', 'Burgos', 'Bustamante', 'Bustos', 'Báez', 'Betancourt', 'Caballero', 'Cabello', 'Cabrera', 'Cabán', 'Cadena', 'Caldera', 'Calderón', 'Calero', 'Calvillo', 'Calvo', 'Camacho', 'Camarillo', 'Campos', 'Canales', 'Candelaria', 'Cano', 'Cantú', 'Caraballo', 'Carbajal', 'Carballo', 'Carbonell', 'Cárdenas', 'Cardona', 'Carmona', 'Caro', 'Carranza', 'Carrasco', 'Carrasquillo', 'Carrera', 'Carrero', 'Carretero', 'Carreón', 'Carrillo', 'Carrión', 'Carvajal', 'Casado', 'Casanova', 'Casares', 'Casas', 'Casillas', 'Castañeda', 'Castaño', 'Castellano', 'Castellanos', 'Castillo', 'Castro', 'Casárez', 'Cavazos', 'Cazares', 'Ceballos', 'Cedillo', 'Ceja', 'Centeno', 'Cepeda', 'Cerda', 'Cervantes', 'Cervántez', 'Chacón', 'Chapa', 'Chavarría', 'Chávez', 'Cintrón', 'Cisneros', 'Clemente', 'Cobo', 'Collado', 'Collazo', 'Colunga', 'Colón', 'Concepción', 'Conde', 'Contreras', 'Cordero', 'Cornejo', 'Corona', 'Coronado', 'Corral', 'Corrales', 'Correa', 'Cortés', 'Cortez', 'Cortés', 'Costa', 'Cotto', 'Covarrubias', 'Crespo', 'Cruz', 'Cuellar', 'Cuenca', 'Cuesta', 'Cuevas', 'Curiel', 'Córdoba', 'Córdova', 'De la Cruz', 'De la Fuente', 'De la Torre', 'Del Río', 'Delacrúz', 'Delafuente', 'Delagarza', 'Delao', 'Delapaz', 'Delarosa', 'Delatorre', 'Deleón', 'Delgadillo', 'Delgado', 'Delrío', 'Delvalle', 'Díez', 'Domenech', 'Domingo', 'Domínguez', 'Domínquez', 'Duarte', 'Dueñas', 'Duran', 'Dávila', 'Díaz', 'Echevarría', 'Elizondo', 'Enríquez', 'Escalante', 'Escamilla', 'Escobar', 'Escobedo', 'Escribano', 'Escudero', 'Esparza', 'Espinal', 'Espino', 'Espinosa', 'Espinoza', 'Esquibel', 'Esquivel', 'Esteban', 'Esteve', 'Estrada', 'Estévez', 'Expósito', 'Fajardo', 'Farías', 'Feliciano', 'Fernández', 'Ferrer', 'Fierro', 'Figueroa', 'Flores', 'Flórez', 'Fonseca', 'Font', 'Franco', 'Frías', 'Fuentes', 'Gaitán', 'Galarza', 'Galindo', 'Gallardo', 'Gallego', 'Gallegos', 'Galván', 'Galán', 'Gamboa', 'Gámez', 'Gaona', 'Garay', 'García', 'Garibay', 'Garica', 'Garrido', 'Garza', 'Gastélum', 'Gaytán', 'Gil', 'Gimeno', 'Giménez', 'Girón', 'Godoy', 'Godínez', 'Gonzáles', 'González', 'Gracia', 'Granado', 'Granados', 'Griego', 'Grijalva', 'Guajardo', 'Guardado', 'Guerra', 'Guerrero', 'Guevara', 'Guillen', 'Gurule', 'Gutiérrez', 'Guzmán', 'Gálvez', 'Gómez', 'Haro', 'Henríquez', 'Heredia', 'Hernándes', 'Hernando', 'Hernádez', 'Hernández', 'Herrera', 'Herrero', 'Hidalgo', 'Hinojosa', 'Holguín', 'Huerta', 'Hurtado', 'Ibarra', 'Ibáñez', 'Iglesias', 'Irizarry', 'Izquierdo', 'Jaime', 'Jaimes', 'Jaramillo', 'Jasso', 'Jiménez', 'Jimínez', 'Juan', 'Jurado', 'Juárez', 'Jáquez', 'Laboy', 'Lara', 'Laureano', 'Leal', 'Lebrón', 'Ledesma', 'Leiva', 'Lemus', 'Lerma', 'Leyva', 'León', 'Limón', 'Linares', 'Lira', 'Llamas', 'Llorente', 'Loera', 'Lomeli', 'Longoria', 'Lorente', 'Lorenzo', 'Lovato', 'Loya', 'Lozada', 'Lozano', 'Lucas', 'Lucero', 'Lucio', 'Luevano', 'Lugo', 'Luis', 'Luján', 'Luna', 'Luque', 'Lázaro', 'López', 'Macias', 'Macías', 'Madera', 'Madrid', 'Madrigal', 'Maestas', 'Magaña', 'Malave', 'Maldonado', 'Manzanares', 'Manzano', 'Marco', 'Marcos', 'Mares', 'Marrero', 'Marroquín', 'Martos', 'Martí', 'Martín', 'Martínez', 'Marín', 'Más', 'Mascareñas', 'Mata', 'Mateo', 'Mateos', 'Matos', 'Matías', 'Maya', 'Mayorga', 'Medina', 'Medrano', 'Mejía', 'Melgar', 'Meléndez', 'Mena', 'Menchaca', 'Mendoza', 'Menéndez', 'Meraz', 'Mercado', 'Merino', 'Mesa', 'Meza', 'Miguel', 'Millán', 'Miramontes', 'Miranda', 'Mireles', 'Mojica', 'Molina', 'Mondragón', 'Monroy', 'Montalvo', 'Montañez', 'Montaño', 'Montemayor', 'Montenegro', 'Montero', 'Montes', 'Montez', 'Montoya', 'Mora', 'Moral', 'Morales', 'Morán', 'Moreno', 'Mota', 'Moya', 'Munguía', 'Murillo', 'Muro', 'Muñiz', 'Muñoz', 'Márquez', 'Méndez', 'Naranjo', 'Narváez', 'Nava', 'Navarrete', 'Navarro', 'Navas', 'Nazario', 'Negrete', 'Negrón', 'Nevárez', 'Nieto', 'Nieves', 'Niño', 'Noriega', 'Nájera', 'Núñez', 'Ocampo', 'Ocasio', 'Ochoa', 'Ojeda', 'Oliva', 'Olivares', 'Olivas', 'Oliver', 'Olivera', 'Olivo', 'Olivárez', 'Olmos', 'Olvera', 'Ontiveros', 'Oquendo', 'Ordoñez', 'Ordóñez', 'Orellana', 'Ornelas', 'Orosco', 'Orozco', 'Orta', 'Ortega', 'Ortíz', 'Osorio', 'Otero', 'Ozuna', 'Pabón', 'Pacheco', 'Padilla', 'Padrón', 'Pagan', 'Palacios', 'Palomino', 'Palomo', 'Pantoja', 'Pardo', 'Paredes', 'Parra', 'Partida', 'Pascual', 'Pastor', 'Patiño', 'Paz', 'Pedraza', 'Pedroza', 'Pelayo', 'Peláez', 'Perales', 'Peralta', 'Perea', 'Pereira', 'Peres', 'Peña', 'Pichardo', 'Pineda', 'Pizarro', 'Piña', 'Piñeiro', 'Plaza', 'Polanco', 'Polo', 'Ponce', 'Pons', 'Porras', 'Portillo', 'Posada', 'Pozo', 'Prado', 'Preciado', 'Prieto', 'Puente', 'Puga', 'Puig', 'Pulido', 'Páez', 'Pérez', 'Quesada', 'Quezada', 'Quintana', 'Quintanilla', 'Quintero', 'Quiroz', 'Quiñones', 'Quiñónez', 'Rael', 'Ramos', 'Ramírez', 'Ramón', 'Rangel', 'Rascón', 'Raya', 'Razo', 'Redondo', 'Regalado', 'Reina', 'Rendón', 'Rentería', 'Requena', 'Reséndez', 'Rey', 'Reyes', 'Reyna', 'Reynoso', 'Rico', 'Riera', 'Rincón', 'Riojas', 'Rivas', 'Rivera', 'Rivero', 'Robledo', 'Robles', 'Roca', 'Rocha', 'Rodarte', 'Rodrigo', 'Rodríguez', 'Rodríquez', 'Roig', 'Rojas', 'Rojo', 'Roldán', 'Rolón', 'Romero', 'Romo', 'Román', 'Roque', 'Ros', 'Rosa', 'Rosado', 'Rosales', 'Rosario', 'Rosas', 'Roybal', 'Rubio', 'Rueda', 'Ruelas', 'Ruiz', 'Ruvalcaba', 'Ruíz', 'Ríos', 'Saavedra', 'Saiz', 'Salas', 'Salazar', 'Salcedo', 'Salcido', 'Saldaña', 'Saldivar', 'Salgado', 'Salinas', 'Salvador', 'Samaniego', 'Sanabria', 'Sánchez', 'Sancho', 'Sandoval', 'Santacruz', 'Santamaría', 'Santana', 'Santiago', 'Santillán', 'Santos', 'Sanz', 'Sarabia', 'Sauceda', 'Saucedo', 'Sedillo', 'Segovia', 'Segura', 'Sepúlveda', 'Serna', 'Serra', 'Serrano', 'Serrato', 'Sevilla', 'Sierra', 'Silva', 'Simón', 'Sisneros', 'Sola', 'Solano', 'Soler', 'Soliz', 'Solorio', 'Solorzano', 'Solís', 'Soria', 'Soriano', 'Sosa', 'Sotelo', 'Soto', 'Suárez', 'Sáenz', 'Sáez', 'Sánchez', 'Tafoya', 'Tamayo', 'Tamez', 'Tapia', 'Tejada', 'Tejeda', 'Tello', 'Terrazas', 'Terán', 'Tijerina', 'Tirado', 'Toledo', 'Toro', 'Torres', 'Tovar', 'Trejo', 'Treviño', 'Trujillo', 'Téllez', 'Tórrez', 'Ulibarri', 'Ulloa', 'Urbina', 'Ureña', 'Uribe', 'Urrutia', 'Urías', 'Vaca', 'Valadez', 'Valdez', 'Valdivia', 'Valdés', 'Valencia', 'Valentín', 'Valenzuela', 'Valero', 'Valladares', 'Valle', 'Vallejo', 'Valles', 'Valverde', 'Vanegas', 'Varela', 'Vargas', 'Vega', 'Vela', 'Velasco', 'Velásquez', 'Velázquez', 'Venegas', 'Vera', 'Verdugo', 'Verduzco', 'Vergara', 'Vicente', 'Vidal', 'Viera', 'Vigil', 'Vila', 'Villa', 'Villagómez', 'Villalba', 'Villalobos', 'Villalpando', 'Villanueva', 'Villar', 'Villareal', 'Villarreal', 'Villaseñor', 'Villegas', 'Vásquez', 'Vázquez', 'Vélez', 'Véliz', 'Ybarra', 'Yáñez', 'Zambrano', 'Zamora', 'Zamudio', 'Zapata', 'Zaragoza', 'Zarate', 'Zavala', 'Zayas', 'Zelaya', 'Zepeda', 'Zúñiga', 'de Anda', 'de Jesús', 'Águilar', 'Álvarez', 'Ávalos', 'Ávila'
    );

    protected static \$titleMale = array('Sr.', 'Dn.', 'Dr.', 'Lic.', 'Ing.');

    protected static \$titleFemale = array('Sra.', 'Srita.', 'Dr.', 'Lic.', 'Ing.');

    private static \$suffix = array('Hijo', 'Segundo', 'Tercero');

    protected static \$licenceCodes = array('AM', 'A1', 'A2', 'A','B', 'B+E', 'C1', 'C1+E', 'C', 'C+E', 'D1', 'D1+E', 'D', 'D+E');

    /**
     * @example 'Hijo'
     */
    public static function suffix()
    {
        return static::randomElement(static::\$suffix);
    }

    /**
     * Generate a Documento Nacional de Identidad (DNI) number
     *
     * @example '77446565E'
     *
     * @link https://es.wikibooks.org/wiki/Algoritmo_para_obtener_la_letra_del_NIF#Algoritmo
     */
    public static function dni()
    {
        \$number = static::numerify('########');
        \$letter = self::\$crcMap[\$number%23];

        return \$number . \$letter;
    }

    /**
     * @see https://sede.dgt.gob.es/es/tramites-y-multas/permiso-de-conduccion/obtencion-permiso-licencia-conduccion/clases-permiso-conduccion-edad.shtml
     *
     * @return string
     */
    public function licenceCode()
    {
        return static::randomElement(static::\$licenceCodes);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/es_ES/Person.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 26,  139 => 25,  131 => 24,  125 => 23,  119 => 22,  113 => 21,  107 => 20,  96 => 16,  86 => 15,  78 => 14,  72 => 13,  66 => 12,  60 => 11,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\es_ES;

class Person extends \\Faker\\Provider\\Person
{
    private static \$crcMap=array('T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E', 'T');

    protected static \$maleNameFormats = array(
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}} {{suffix}}',
        '{{firstNameMale}} {{lastName}} {{suffix}}',
    );

    protected static \$femaleNameFormats = array(
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}} {{suffix}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}} {{suffix}}',
    );

    /**
     * {@link} http://www.ine.es/daco/daco42/nombyapel/nombyapel.htm
     * Manually added accent marks because the source lacks of them
     */
    protected static \$firstNameMale = array(
        'Aaron', 'Adam', 'Adrián', 'Aitor', 'Alberto', 'Aleix', 'Alejandro', 'Alex', 'Alonso', 'Álvaro', 'Ander', 'Andrés',
        'Ángel', 'Antonio', 'Arnau', 'Asier', 'Biel', 'Bruno', 'Carlos', 'César', 'Cristian', 'Daniel', 'Dario', 'David',
        'Diego', 'Eduardo', 'Enrique', 'Eric', 'Erik', 'Fernando', 'Francisco', 'Francisco Javier', 'Gabriel', 'Gael', 'Gerard', 'Gonzalo',
        'Guillem', 'Guillermo', 'Héctor', 'Hugo', 'Ian', 'Ignacio', 'Iker', 'Isaac', 'Ismael', 'Iván', 'Izan', 'Jaime',
        'Jan', 'Javier', 'Jesús', 'Joel', 'Jon', 'Jordi', 'Jorge', 'José', 'José Antonio', 'José Manuel', 'Juan', 'Juan José',
        'Leo', 'Lucas', 'Luis', 'Manuel', 'Marc', 'Marco', 'Marcos', 'Mario', 'Martín', 'Mateo', 'Miguel', 'Miguel Ángel',
        'Nicolás', 'Oliver', 'Omar', 'Oriol', 'Óscar', 'Pablo', 'Pedro', 'Pol', 'Rafael', 'Raúl', 'Rayan',
        'Roberto', 'Rodrigo', 'Rubén', 'Samuel', 'Santiago', 'Saúl', 'Sergio', 'Unai', 'Víctor', 'Yago', 'Yeray',
    );

    protected static \$firstNameFemale = array(
        'Abril', 'Adriana', 'Africa', 'Aina', 'Ainara', 'Ainhoa', 'Aitana', 'Alba', 'Alejandra', 'Alexandra', 'Alexia', 'Alicia', 'Alma',
        'Ana', 'Andrea', 'Ane', 'Angela', 'Anna', 'Ariadna', 'Aroa', 'Aya', 'Beatriz', 'Berta', 'Blanca', 'Candela',
        'Carla', 'Carlota', 'Carmen', 'Carolina', 'Celia', 'Clara', 'Claudia', 'Cristina', 'Daniela', 'Diana', 'Elena', 'Elsa',
        'Emma', 'Erika', 'Eva', 'Fátima', 'Gabriela', 'Helena', 'Inés', 'Irene', 'Iria', 'Isabel', 'Jana', 'Jimena',
        'Joan', 'Julia', 'Laia', 'Lara', 'Laura', 'Leire', 'Leyre', 'Lidia', 'Lola', 'Lucía', 'Luna', 'Malak',
        'Manuela', 'Mar', 'Mara', 'María', 'Marina', 'Marta', 'Martí', 'Martina', 'Mireia', 'Miriam', 'Nadia', 'Nahia',
        'Naia', 'Naiara', 'Natalia', 'Nayara', 'Nerea', 'Nil', 'Noa', 'Noelia', 'Nora', 'Nuria', 'Olivia', 'Ona',
        'Paola', 'Patricia', 'Pau', 'Paula', 'Raquel', 'Rocío', 'Salma', 'Sandra', 'Sara', 'Silvia', 'Sofía', 'Teresa',
        'Valentina', 'Valeria', 'Vega', 'Vera', 'Victoria', 'Yaiza', 'Zoe',
    );

    protected static \$lastName = array(
        'Abad', 'Abeyta', 'Abrego', 'Abreu', 'Acevedo', 'Acosta', 'Acuña', 'Adame', 'Adorno', 'Agosto', 'Aguado', 'Aguayo', 'Aguilar', 'Aguilera', 'Aguirre', 'Alanis', 'Alaniz', 'Alarcón', 'Alba', 'Alcala', 'Alcaráz', 'Alcántar', 'Alejandro', 'Alemán', 'Alfaro', 'Alfonso', 'Alicea', 'Almanza', 'Almaráz', 'Almonte', 'Alonso', 'Alonzo', 'Altamirano', 'Alva', 'Alvarado', 'Amador', 'Amaya', 'Anaya', 'Andreu', 'Andrés', 'Anguiano', 'Angulo', 'Antón', 'Aparicio', 'Apodaca', 'Aponte', 'Aragón', 'Aranda', 'Araña', 'Arce', 'Archuleta', 'Arellano', 'Arenas', 'Arevalo', 'Arguello', 'Arias', 'Armas', 'Armendáriz', 'Armenta', 'Armijo', 'Arredondo', 'Arreola', 'Arriaga', 'Arribas', 'Arroyo', 'Arteaga', 'Asensio', 'Atencio', 'Avilés', 'Ayala', 'Baca', 'Badillo', 'Baeza', 'Bahena', 'Balderas', 'Ballesteros', 'Banda', 'Barajas', 'Barela', 'Barragán', 'Barraza', 'Barrera', 'Barreto', 'Barrientos', 'Barrios', 'Barroso', 'Batista', 'Bautista', 'Bañuelos', 'Becerra', 'Beltrán', 'Benavides', 'Benavídez', 'Benito', 'Benítez', 'Bermejo', 'Bermúdez', 'Bernal', 'Berríos', 'Blanco', 'Blasco', 'Blázquez', 'Bonilla', 'Borrego', 'Botello', 'Bravo', 'Briones', 'Briseño', 'Brito', 'Bueno', 'Burgos', 'Bustamante', 'Bustos', 'Báez', 'Betancourt', 'Caballero', 'Cabello', 'Cabrera', 'Cabán', 'Cadena', 'Caldera', 'Calderón', 'Calero', 'Calvillo', 'Calvo', 'Camacho', 'Camarillo', 'Campos', 'Canales', 'Candelaria', 'Cano', 'Cantú', 'Caraballo', 'Carbajal', 'Carballo', 'Carbonell', 'Cárdenas', 'Cardona', 'Carmona', 'Caro', 'Carranza', 'Carrasco', 'Carrasquillo', 'Carrera', 'Carrero', 'Carretero', 'Carreón', 'Carrillo', 'Carrión', 'Carvajal', 'Casado', 'Casanova', 'Casares', 'Casas', 'Casillas', 'Castañeda', 'Castaño', 'Castellano', 'Castellanos', 'Castillo', 'Castro', 'Casárez', 'Cavazos', 'Cazares', 'Ceballos', 'Cedillo', 'Ceja', 'Centeno', 'Cepeda', 'Cerda', 'Cervantes', 'Cervántez', 'Chacón', 'Chapa', 'Chavarría', 'Chávez', 'Cintrón', 'Cisneros', 'Clemente', 'Cobo', 'Collado', 'Collazo', 'Colunga', 'Colón', 'Concepción', 'Conde', 'Contreras', 'Cordero', 'Cornejo', 'Corona', 'Coronado', 'Corral', 'Corrales', 'Correa', 'Cortés', 'Cortez', 'Cortés', 'Costa', 'Cotto', 'Covarrubias', 'Crespo', 'Cruz', 'Cuellar', 'Cuenca', 'Cuesta', 'Cuevas', 'Curiel', 'Córdoba', 'Córdova', 'De la Cruz', 'De la Fuente', 'De la Torre', 'Del Río', 'Delacrúz', 'Delafuente', 'Delagarza', 'Delao', 'Delapaz', 'Delarosa', 'Delatorre', 'Deleón', 'Delgadillo', 'Delgado', 'Delrío', 'Delvalle', 'Díez', 'Domenech', 'Domingo', 'Domínguez', 'Domínquez', 'Duarte', 'Dueñas', 'Duran', 'Dávila', 'Díaz', 'Echevarría', 'Elizondo', 'Enríquez', 'Escalante', 'Escamilla', 'Escobar', 'Escobedo', 'Escribano', 'Escudero', 'Esparza', 'Espinal', 'Espino', 'Espinosa', 'Espinoza', 'Esquibel', 'Esquivel', 'Esteban', 'Esteve', 'Estrada', 'Estévez', 'Expósito', 'Fajardo', 'Farías', 'Feliciano', 'Fernández', 'Ferrer', 'Fierro', 'Figueroa', 'Flores', 'Flórez', 'Fonseca', 'Font', 'Franco', 'Frías', 'Fuentes', 'Gaitán', 'Galarza', 'Galindo', 'Gallardo', 'Gallego', 'Gallegos', 'Galván', 'Galán', 'Gamboa', 'Gámez', 'Gaona', 'Garay', 'García', 'Garibay', 'Garica', 'Garrido', 'Garza', 'Gastélum', 'Gaytán', 'Gil', 'Gimeno', 'Giménez', 'Girón', 'Godoy', 'Godínez', 'Gonzáles', 'González', 'Gracia', 'Granado', 'Granados', 'Griego', 'Grijalva', 'Guajardo', 'Guardado', 'Guerra', 'Guerrero', 'Guevara', 'Guillen', 'Gurule', 'Gutiérrez', 'Guzmán', 'Gálvez', 'Gómez', 'Haro', 'Henríquez', 'Heredia', 'Hernándes', 'Hernando', 'Hernádez', 'Hernández', 'Herrera', 'Herrero', 'Hidalgo', 'Hinojosa', 'Holguín', 'Huerta', 'Hurtado', 'Ibarra', 'Ibáñez', 'Iglesias', 'Irizarry', 'Izquierdo', 'Jaime', 'Jaimes', 'Jaramillo', 'Jasso', 'Jiménez', 'Jimínez', 'Juan', 'Jurado', 'Juárez', 'Jáquez', 'Laboy', 'Lara', 'Laureano', 'Leal', 'Lebrón', 'Ledesma', 'Leiva', 'Lemus', 'Lerma', 'Leyva', 'León', 'Limón', 'Linares', 'Lira', 'Llamas', 'Llorente', 'Loera', 'Lomeli', 'Longoria', 'Lorente', 'Lorenzo', 'Lovato', 'Loya', 'Lozada', 'Lozano', 'Lucas', 'Lucero', 'Lucio', 'Luevano', 'Lugo', 'Luis', 'Luján', 'Luna', 'Luque', 'Lázaro', 'López', 'Macias', 'Macías', 'Madera', 'Madrid', 'Madrigal', 'Maestas', 'Magaña', 'Malave', 'Maldonado', 'Manzanares', 'Manzano', 'Marco', 'Marcos', 'Mares', 'Marrero', 'Marroquín', 'Martos', 'Martí', 'Martín', 'Martínez', 'Marín', 'Más', 'Mascareñas', 'Mata', 'Mateo', 'Mateos', 'Matos', 'Matías', 'Maya', 'Mayorga', 'Medina', 'Medrano', 'Mejía', 'Melgar', 'Meléndez', 'Mena', 'Menchaca', 'Mendoza', 'Menéndez', 'Meraz', 'Mercado', 'Merino', 'Mesa', 'Meza', 'Miguel', 'Millán', 'Miramontes', 'Miranda', 'Mireles', 'Mojica', 'Molina', 'Mondragón', 'Monroy', 'Montalvo', 'Montañez', 'Montaño', 'Montemayor', 'Montenegro', 'Montero', 'Montes', 'Montez', 'Montoya', 'Mora', 'Moral', 'Morales', 'Morán', 'Moreno', 'Mota', 'Moya', 'Munguía', 'Murillo', 'Muro', 'Muñiz', 'Muñoz', 'Márquez', 'Méndez', 'Naranjo', 'Narváez', 'Nava', 'Navarrete', 'Navarro', 'Navas', 'Nazario', 'Negrete', 'Negrón', 'Nevárez', 'Nieto', 'Nieves', 'Niño', 'Noriega', 'Nájera', 'Núñez', 'Ocampo', 'Ocasio', 'Ochoa', 'Ojeda', 'Oliva', 'Olivares', 'Olivas', 'Oliver', 'Olivera', 'Olivo', 'Olivárez', 'Olmos', 'Olvera', 'Ontiveros', 'Oquendo', 'Ordoñez', 'Ordóñez', 'Orellana', 'Ornelas', 'Orosco', 'Orozco', 'Orta', 'Ortega', 'Ortíz', 'Osorio', 'Otero', 'Ozuna', 'Pabón', 'Pacheco', 'Padilla', 'Padrón', 'Pagan', 'Palacios', 'Palomino', 'Palomo', 'Pantoja', 'Pardo', 'Paredes', 'Parra', 'Partida', 'Pascual', 'Pastor', 'Patiño', 'Paz', 'Pedraza', 'Pedroza', 'Pelayo', 'Peláez', 'Perales', 'Peralta', 'Perea', 'Pereira', 'Peres', 'Peña', 'Pichardo', 'Pineda', 'Pizarro', 'Piña', 'Piñeiro', 'Plaza', 'Polanco', 'Polo', 'Ponce', 'Pons', 'Porras', 'Portillo', 'Posada', 'Pozo', 'Prado', 'Preciado', 'Prieto', 'Puente', 'Puga', 'Puig', 'Pulido', 'Páez', 'Pérez', 'Quesada', 'Quezada', 'Quintana', 'Quintanilla', 'Quintero', 'Quiroz', 'Quiñones', 'Quiñónez', 'Rael', 'Ramos', 'Ramírez', 'Ramón', 'Rangel', 'Rascón', 'Raya', 'Razo', 'Redondo', 'Regalado', 'Reina', 'Rendón', 'Rentería', 'Requena', 'Reséndez', 'Rey', 'Reyes', 'Reyna', 'Reynoso', 'Rico', 'Riera', 'Rincón', 'Riojas', 'Rivas', 'Rivera', 'Rivero', 'Robledo', 'Robles', 'Roca', 'Rocha', 'Rodarte', 'Rodrigo', 'Rodríguez', 'Rodríquez', 'Roig', 'Rojas', 'Rojo', 'Roldán', 'Rolón', 'Romero', 'Romo', 'Román', 'Roque', 'Ros', 'Rosa', 'Rosado', 'Rosales', 'Rosario', 'Rosas', 'Roybal', 'Rubio', 'Rueda', 'Ruelas', 'Ruiz', 'Ruvalcaba', 'Ruíz', 'Ríos', 'Saavedra', 'Saiz', 'Salas', 'Salazar', 'Salcedo', 'Salcido', 'Saldaña', 'Saldivar', 'Salgado', 'Salinas', 'Salvador', 'Samaniego', 'Sanabria', 'Sánchez', 'Sancho', 'Sandoval', 'Santacruz', 'Santamaría', 'Santana', 'Santiago', 'Santillán', 'Santos', 'Sanz', 'Sarabia', 'Sauceda', 'Saucedo', 'Sedillo', 'Segovia', 'Segura', 'Sepúlveda', 'Serna', 'Serra', 'Serrano', 'Serrato', 'Sevilla', 'Sierra', 'Silva', 'Simón', 'Sisneros', 'Sola', 'Solano', 'Soler', 'Soliz', 'Solorio', 'Solorzano', 'Solís', 'Soria', 'Soriano', 'Sosa', 'Sotelo', 'Soto', 'Suárez', 'Sáenz', 'Sáez', 'Sánchez', 'Tafoya', 'Tamayo', 'Tamez', 'Tapia', 'Tejada', 'Tejeda', 'Tello', 'Terrazas', 'Terán', 'Tijerina', 'Tirado', 'Toledo', 'Toro', 'Torres', 'Tovar', 'Trejo', 'Treviño', 'Trujillo', 'Téllez', 'Tórrez', 'Ulibarri', 'Ulloa', 'Urbina', 'Ureña', 'Uribe', 'Urrutia', 'Urías', 'Vaca', 'Valadez', 'Valdez', 'Valdivia', 'Valdés', 'Valencia', 'Valentín', 'Valenzuela', 'Valero', 'Valladares', 'Valle', 'Vallejo', 'Valles', 'Valverde', 'Vanegas', 'Varela', 'Vargas', 'Vega', 'Vela', 'Velasco', 'Velásquez', 'Velázquez', 'Venegas', 'Vera', 'Verdugo', 'Verduzco', 'Vergara', 'Vicente', 'Vidal', 'Viera', 'Vigil', 'Vila', 'Villa', 'Villagómez', 'Villalba', 'Villalobos', 'Villalpando', 'Villanueva', 'Villar', 'Villareal', 'Villarreal', 'Villaseñor', 'Villegas', 'Vásquez', 'Vázquez', 'Vélez', 'Véliz', 'Ybarra', 'Yáñez', 'Zambrano', 'Zamora', 'Zamudio', 'Zapata', 'Zaragoza', 'Zarate', 'Zavala', 'Zayas', 'Zelaya', 'Zepeda', 'Zúñiga', 'de Anda', 'de Jesús', 'Águilar', 'Álvarez', 'Ávalos', 'Ávila'
    );

    protected static \$titleMale = array('Sr.', 'Dn.', 'Dr.', 'Lic.', 'Ing.');

    protected static \$titleFemale = array('Sra.', 'Srita.', 'Dr.', 'Lic.', 'Ing.');

    private static \$suffix = array('Hijo', 'Segundo', 'Tercero');

    protected static \$licenceCodes = array('AM', 'A1', 'A2', 'A','B', 'B+E', 'C1', 'C1+E', 'C', 'C+E', 'D1', 'D1+E', 'D', 'D+E');

    /**
     * @example 'Hijo'
     */
    public static function suffix()
    {
        return static::randomElement(static::\$suffix);
    }

    /**
     * Generate a Documento Nacional de Identidad (DNI) number
     *
     * @example '77446565E'
     *
     * @link https://es.wikibooks.org/wiki/Algoritmo_para_obtener_la_letra_del_NIF#Algoritmo
     */
    public static function dni()
    {
        \$number = static::numerify('########');
        \$letter = self::\$crcMap[\$number%23];

        return \$number . \$letter;
    }

    /**
     * @see https://sede.dgt.gob.es/es/tramites-y-multas/permiso-de-conduccion/obtencion-permiso-licencia-conduccion/clases-permiso-conduccion-edad.shtml
     *
     * @return string
     */
    public function licenceCode()
    {
        return static::randomElement(static::\$licenceCodes);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/es_ES/Person.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/es_ES/Person.php");
    }
}
