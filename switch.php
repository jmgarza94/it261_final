<?php
//Switches


date_default_timezone_set('America/Los_Angeles');

if (isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}
// echo '<br>';
switch ($today) {

    case 'Monday':
        $pic = 'quetzalcoatl.jpg';
        $deity = 'Monday\'s Aztec God is Quetzalcoatl';
        $alt = "Quetzalcoatl";
        $content = '<p class="content">The Feathered Serpent was a prominent supernatural entity
         or deity, found in many Mesoamerican religions.
         It is still called Quetzalcoatl among the Aztecs, Kukulkan among the Yucatec Maya,
         and Q\'uq\'umatz and Tohil among the K\'iche\' Maya.
        The double symbolism used by the Feathered Serpent is considered allegoric to the dual nature of
         the deity, where being feathered represents its divine nature or
         ability to fly to reach the skies and being a serpent represents its human nature or ability to 
         creep on the ground among other animals of the Earth, a dualism very common in Mesoamerican deities.</p>';
        $background = 'green';
        break;

    case 'Tuesday':
        $pic = 'huitzilopochtli.jpg';
        $deity = 'Tuesday\'s Aztec God is Huitzilopochtli';
        $alt = "Huitzilopochtli";
        $content = '<p class="content">Huitzilopochtli or \'Hummingbird of the South\' or \'Blue Hummingbird on the Left\'
        was one of the most important deities in the Aztec pantheon and for the Méxica he was the supreme god.
        He was the god of the sun and war, considered the patron of the Aztec capital Tenochtitlán and associated with gold,
        warriors and rulers. His calendar name was Ce Técpatl (1 Flint) and his nagual or animal spirit was the eagle.
        Unlike many other Aztec deities, Huitzilopochtli has no clear equivalents from earlier Mesoamerican cultures.
        In Aztec mythology Huitzilopochtli was the son of Omecίhuatl and Ometecuhtli, respectively, the female and male
        aspects of the androgynous primordial god Ometeotl. In an alternative version, the god is the offspring of Coatlίcue,
        the supreme earth goddess. Huitzilopochtli was also considered the brother of those other great Mesoamerican gods Quetzalcoatl, Tezcatlipoca and Xipe Totec. 
        </p>';
        $background = 'red';
        break;


    case 'Wednesday':
        $pic = 'tlaloc.jpg';
        $deity = 'Wednesday\'s Aztec God is Tlaloc';
        $alt = "Tlaloc";
        $content = '<p class="content">Tlaloc is a member of the pantheon of gods in Mexica religion. 
        As supreme god of the rain, Tlaloc is also a god of earthly fertility and of water.
        He was widely worshipped as a beneficent giver of life and sustenance. However, he was also 
        feared for his ability to send hail, thunder, and lightning, and for being the lord of the powerful
        element of water. Tlaloc is also associated with caves, springs, and mountains, most specifically 
        the sacred mountain in which he was believed to reside. His animal forms include herons and water-dwelling
        creatures such as amphibians, snails, and possibly sea creatures, particularly shellfish. The Mexican marigold,
        Tagetes lucida, known to the Aztecs as yauhtli, was another important symbol of the god, and was burned as a
        ritual incense in native religious ceremonies. The cult of Tlaloc is one of the oldest and most universal in 
        ancient Mexico. Although the name Tlaloc is specifically Aztec, worship of a storm god like Tlaloc, associated
        with mountaintop shrines and with life-giving rain, is as at least as old as Teotihuacan and likely was adopted
        from the Maya god Chaac or vice versa, or perhaps he was ultimately derived from an earlier Olmec precursor.
        An underground Tlaloc shrine has been found at Teotihuacan.</p>';
        $background = 'blue';
        break;

    case 'Thursday':
        $pic = 'xolotl.jpg';
        $deity = 'Thursday\'s Aztec God is Xolotl.';
        $alt = "Xolotl";
        $content = '<p class="content">In Aztec mythology, Xolotl was a god of fire and lightning.
        He was commonly depicted as a dog-headed man and was a soul-guide for the dead. He was
        also god of twins, monsters, misfortune, sickness, and deformities. Xolotl is the canine
        brother and twin of Quetzalcoatl, the pair being sons of the virgin Coatlicue. He is the
        dark personification of Venus, the evening star, and was associated with heavenly fire.
            
        Xolotl was the sinister god of monstrosities who wears the spirally-twisted wind jewel and
        the ear ornaments of Quetzalcoatl.[5] His job was to protect the sun from the dangers of the
        underworld. As a double of Quetzalcoatl, he carries his conch-like ehecailacacozcatl or wind
        jewel. Xolotl accompanied Quetzalcoatl to Mictlan, the land of the dead, or the underworld,
        to retrieve the bones from those who inhabited the previous world (Nahui Atl) to create new
        life for the present world, Nahui Ollin, the sun of movement. In a sense, this re-creation
        of life is reenacted every night when Xolotl guides the sun through the underworld. In the
        tonalpohualli, Xolotl rules over day Ollin (movement) and over trecena 1-Cozcacuauhtli (vulture)</p>';
        $background = 'grey';
        break;

    case 'Friday':
        $pic = 'xipetotec.jpg';
        $deity = 'Friday\'s Aztec God is Xipe Totec';
        $alt = "Xipe Totec";
        $content = '<p class="content">
        In Aztec mythology and religion, Xipe Totec ("Our Lord the Flayed One") was a life-death-rebirth deity,
        god of agriculture, vegetation, the east , spring, goldsmiths, silversmiths, liberation, and the seasons.
        Xipe Totec was also known by various other names, including Tlatlauhca, Tlatlauhqui Tezcatlipoca ("Red Smoking Mirror")
        and Youalahuan ("the Night Drinker"). The Tlaxcaltecs and the Huexotzincas worshipped a version 
        of the deity under the name of Camaxtli, and the god has been identified with Yopi, a Zapotec god 
        represented on Classic Period urns. The female equivalent of Xipe Totec was the goddess Xilonen-Chicomecoatl.</p>';
        $background = 'tan';
        break;

    case 'Saturday':
        $pic = 'cihuacoatl.jpg';
        $deity = 'Saturday\'s Aztec God is Cihuacoatl';
        $alt = "Cihuacoatl";
        $content = '<p class="content">In Aztec mythology, Cihuacoatl was one of a number of motherhood and fertility
        goddesses. Cihuacoatl was sometimes known as Quilaztli.
        Cihuacoatl was especially associated with midwives, and with
        the sweatbaths where midwives practiced. She is paired with
        Quilaztli and was considered a protectress of the Chalmeca
        people and patroness of the city of Culhuacan. She helped Quetzalcoatl
        create the current race of humanity by grinding up bones from the previous ages,
        and mixing it with his blood. She is also the mother of Mixcoatl, whom she abandoned 
        at a crossroads. Tradition says that she often returns there to weep for her lost son, 
        only to find a sacrificial knife. Although she was sometimes depicted as a young woman, 
        similar to Xōchiquetzal, she is more often shown as a fierce skull-faced old woman carrying
        the spears and shield of a warrior. Childbirth was sometimes compared to warfare and the 
        women who died in childbirth were honored as fallen warriors. Their spirits, the Cihuateteo, 
        were depicted with skeletal faces like Cihuacōātl. Like her, the Cihuateteo were thought to haunt 
        crossroads at night to steal children</p>';
        $background = 'pink';
        break;

    case 'Sunday':
        $pic = 'tezcatlipoca.jpg';
        $deity = 'Sunday\'s Aztec God is Tezcatlipoca';
        $alt = "Tezcatlipoca";
        $content = '
        <p class="content">Tezcatlipoca was a central deity in Aztec religion, and his main festival
        was the Toxcatl ceremony celebrated in the month of May. One of the four sons of Ometecuhtli
        and Omecihuatl, he is associated with a wide range of concepts, including the night sky, the
        night winds, hurricanes, the north, the earth, obsidian, enmity, discord, rulership, divination,
        temptation, jaguars, sorcery, beauty, war, and strife. His name in the Nahuatl language is often
        translated as "Smoking Mirror" and alludes to his connection to obsidian, the material from 
        which mirrors were made in Mesoamerica and which were used for shamanic rituals and prophecy.
        Another talisman related to Tezcatlipoca was a disc worn as a chest pectoral. This talisman was
        carved out of abalone shell and depicted on the chest of both Huitzilopochtli and Tezcatlipoca in codex illustrations.</p>';
        $background = 'yellow';
        break;
}

// include('includes/config.php');
// include('includes/header.php');


?>

<!doctype html>
<html lang="en">

<head>
    <title>Switch</title>
    <link rel="stylesheet" href="css/switch.css" />
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <meta charset="UTF-8">

</head>

<body class="<?php echo $background; ?>">
    <div class="wrapper">
        <header>
            <div class="banner">
                <h1>Final: Switch</h1>
            </div>
            <div class="navbar">
                <a href="index.php">Home</a>
                <a href="about.php">About</a>
                <a href="switch.php">Switch</a>
                <a href="db.php">Database</a>
                <a href="contact.php">Contact</a>
                <a href="../index.php">Portal Page</a>
            </div>
        </header>

        <h1> <?php echo $deity; ?> </h1>
        <div class="mainContainer">
            <img src="images/<?php echo $pic; ?>" alt="<?php echo $alt; ?>">
            <?php echo $content; ?>

            <div class="daySwitch">
                <h2>Check out our other Aztec Gods</h2>
                <h3>Click the links below:</h3>
                <ul>
                    <li><a style="color:<?php if ($today == 'Monday') {
                                            echo 'green';
                                        } else {
                                            echo 'blue';
                                        }; ?>" href="switch.php?today=Monday">Monday</a></li>
                    <li><a style="color:<?php if ($today == 'Tuesday') {
                                            echo 'red';
                                        } else {
                                            echo 'blue';
                                        }; ?>" href="switch.php?today=Tuesday">Tuesday</a></li>
                    <li><a style="color:<?php if ($today == 'Wednesday') {
                                            echo 'cyan';
                                        } else {
                                            echo 'blue';
                                        }; ?>" href="switch.php?today=Wednesday">Wednesday</a></li>
                    <li><a style="color:<?php if ($today == 'Thursday') {
                                            echo 'grey';
                                        } else {
                                            echo 'blue';
                                        }; ?>" href="switch.php?today=Thursday">Thursday</a></li>
                    <li><a style="color:<?php if ($today == 'Friday') {
                                            echo 'tan';
                                        } else {
                                            echo 'blue';
                                        }; ?>" href="switch.php?today=Friday">Friday</a></li>
                    <li><a style="color:<?php if ($today == 'Saturday') {
                                            echo 'pink';
                                        } else {
                                            echo 'blue';
                                        }; ?>" href="switch.php?today=Saturday">Saturday</a></li>
                    <li><a style="color:<?php if ($today == 'Sunday') {
                                            echo 'yellow';
                                        } else {
                                            echo 'blue';
                                        }; ?>" href="switch.php?today=Sunday">Sunday</a></li>
                </ul>
            </div>
        </div>

        <?php include('includes/footer.php');  ?>