<?php
$modo="claro";
if(isset($_GET["modo"])){
    $modo=$_GET["modo"];
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
    if($modo=="claro") {
        echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.css">';
    }
    else {
        echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">';
    }
    ?>
</head>
<body>
<h1>Elija el modo de trabajo</h1>
<form action="index.php" method="get">
    <input type="radio" id="claro" name="modo" value="claro">
    <label for="claro">Claro</label>
    <input type="radio" id="oscuro" name="modo" value="oscuro">
    <label for="oscuro">Oscuro</label>
    <button>Enviar</button>
</form>
<p><a href="siguiente.php?modo=<?=$modo?>">Ir a la siguiente página</a></p>
<h1>Texto de prueba</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum laudantium repudiandae veritatis voluptatem. A
    architecto deserunt eos error id iure minus nesciunt odio, quae ratione sapiente sint sit veniam voluptas.</p>
<p>Accusantium doloribus est illo inventore iure, quibusdam sit? Accusamus asperiores cumque delectus, ea error illo
    ipsa iure iusto labore laboriosam libero magnam necessitatibus neque nulla perspiciatis praesentium rem sed
    tenetur.</p>
<p>Incidunt, necessitatibus quod? A ab aliquid consectetur cumque deserunt dolore et eveniet fuga illo ipsam iure magnam
    maiores obcaecati odit, qui quos rem repudiandae sed tenetur ullam veritatis voluptatem voluptatibus.</p>
<p>Aperiam dolor dolorem esse explicabo fugit id, ipsum iusto magni minima porro, quae quasi qui ratione repellendus
    repudiandae sint suscipit, vero. A animi aut minus necessitatibus officia provident qui repudiandae?</p>
<p>Consequatur consequuntur cum, cupiditate eaque eius eveniet fugit ipsa, neque officiis quas quo repudiandae
    similique! Amet at deleniti deserunt dolores fuga nesciunt repellat! Consectetur cumque dolor excepturi hic quae
    rem?</p>
<p>Corporis eum fugit laborum pariatur quidem sequi temporibus totam? Architecto asperiores autem culpa dicta earum
    eligendi excepturi fugit harum iste iusto molestiae porro quia, quis quos reprehenderit, sit velit veniam.</p>
<p>Esse libero nostrum odio perspiciatis porro repellat sunt. Accusamus dolores id omnis possimus quos! Amet architecto
    aspernatur dolorum incidunt magnam mollitia quisquam sapiente. Asperiores commodi delectus eaque earum, minus
    unde!</p>
<p>Blanditiis consequatur dolores ea, esse expedita, illum ipsa iste laudantium, magnam nihil quasi quia quod repellat
    soluta tempore. Assumenda beatae consectetur et eum facere in maiores recusandae, rem veniam voluptatum?</p>
<p>Ad, dignissimos, tempora? Assumenda beatae blanditiis, hic maxime minima optio possimus quis quos temporibus, ullam,
    voluptas voluptatum? Cumque cupiditate dignissimos, doloremque eum explicabo incidunt pariatur porro quae vero
    voluptatibus! Dolorem?</p>
<p>Corporis delectus dignissimos enim explicabo facere fugiat laudantium neque odio quidem, reiciendis, repellat,
    tenetur totam voluptatum! Asperiores corporis cupiditate dicta dolores hic impedit, iste, iure nostrum officia quam
    suscipit voluptatibus.</p>
<p>Consequatur, doloremque nam. Ad, corporis cumque, cupiditate deserunt earum eius eos eveniet ex expedita fugit modi
    nam nostrum odio, officiis quam rerum saepe sint tempore unde veritatis. Dicta, eveniet itaque?</p>
<p>A, et eveniet hic nesciunt quos repellendus sint soluta unde voluptatum. Animi doloremque libero molestias non
    perspiciatis ratione, rerum! Ab deleniti eaque eius id quam qui. Eos facilis illo quidem?</p>
<p>Ad beatae delectus distinctio eius eligendi est excepturi hic ipsum laudantium mollitia necessitatibus porro quae
    rem, saepe sunt tempora temporibus voluptates? A commodi eius facilis inventore neque officia possimus sed.</p>
<p>Accusantium architecto blanditiis consectetur cum distinctio ducimus minima ratione repellat vel voluptas! Amet atque
    corporis doloremque ducimus eaque est expedita hic iste iure non odit quas, quo reiciendis reprehenderit rerum?</p>
<p>Ea, fugiat iusto modi nemo provident quisquam repellendus tempore! Aspernatur cum dicta error est, illo laudantium
    maxime voluptatibus! Cum, quae, totam. Dicta doloribus ex ipsam magnam minus officia possimus provident?</p>
<p>Consectetur et ipsa laudantium sapiente velit! Adipisci architecto autem corporis, ducimus eligendi enim facilis
    maiores nobis odio officia, quae repellat similique temporibus. At doloribus enim, eveniet harum laboriosam nobis
    officiis!</p>
<p>Ad asperiores cupiditate delectus distinctio dolorum eaque est exercitationem ipsam necessitatibus officiis pariatur
    quis quod quos, rem repudiandae sed sequi suscipit voluptatibus? Animi assumenda laudantium nulla quos vel. Ex,
    quam.</p>
<p>Alias autem delectus dolores earum laudantium magni, nisi officia quis sunt veniam. Adipisci aperiam asperiores
    aspernatur blanditiis dolore eos esse excepturi, fugiat inventore ipsa iure maiores omnis pariatur qui
    quibusdam?</p>
<p>Dolorem dolores eligendi in libero quam quas quasi quibusdam quisquam, suscipit. Debitis dicta dolores, dolorum eum
    exercitationem illo ipsum itaque molestiae mollitia pariatur porro quidem quod, repellat repudiandae soluta
    vitae.</p>
<p>Accusantium aperiam commodi deserunt explicabo hic illo maiores mollitia necessitatibus rerum sint, totam, vero!
    Animi consequuntur cum, dolore fuga in, labore libero minima nemo neque nihil nisi porro, voluptas voluptatum?</p>
<p>Consectetur esse harum illum quam quas repellendus similique vero. Alias beatae deleniti doloremque ducimus ea
    exercitationem explicabo facere hic impedit iusto laudantium nihil non, odio pariatur praesentium, quidem ratione.
    Consequatur.</p>
<p>Adipisci autem debitis doloribus eius, iusto laboriosam neque obcaecati optio quasi sit. Accusantium aspernatur eius
    ex expedita explicabo impedit laudantium magni quo, sed vero? Dolor doloribus explicabo facere iure repellat.</p>
<p>Dicta enim modi nobis officiis quos, temporibus vitae. Accusantium amet aspernatur assumenda commodi consequuntur cum
    deleniti dolore doloremque earum eos error hic magnam perspiciatis, placeat ratione recusandae veritatis vero
    voluptatibus!</p>
<p>Adipisci aliquam aspernatur aut, beatae commodi eveniet fuga harum iste, laborum maiores officiis perspiciatis,
    quibusdam sapiente sit tempora voluptas voluptatum. Dignissimos eveniet molestias pariatur quia quod, sapiente sint
    vero voluptatem!</p>
<p>A adipisci, amet aperiam consequuntur culpa dolor facilis harum molestias nulla porro quisquam quod quos reiciendis,
    reprehenderit sequi veniam voluptate voluptates voluptatum. Asperiores beatae dignissimos minus nulla odit
    perferendis reprehenderit!</p>
<p>Accusantium adipisci aliquid asperiores assumenda commodi culpa debitis, delectus, ducimus earum enim error ipsam
    itaque labore molestiae necessitatibus nesciunt nulla odio perferendis provident reiciendis saepe similique, totam?
    Ea et, necessitatibus.</p>
<p>Assumenda consectetur cumque distinctio dolores enim illum impedit in iure mollitia, nemo pariatur placeat quidem
    quis recusandae totam? Autem eveniet excepturi fugit laudantium molestiae mollitia nemo nulla sint tempora
    temporibus.</p>
<p>Architecto enim hic incidunt labore minima, molestias quod quos ullam. Accusamus, aperiam architecto blanditiis
    delectus esse eveniet expedita hic laborum modi molestias natus nobis, officia quia reprehenderit temporibus totam,
    vitae!</p>
<p>Aperiam atque consectetur, dignissimos ea enim eum impedit inventore, ipsum iusto modi neque nostrum nulla numquam
    quaerat quasi quo recusandae repellendus sint suscipit tempora totam voluptate voluptates? Dolorum, ducimus,
    eos!</p>
<p>Blanditiis cum dicta expedita facilis itaque maiores perspiciatis quibusdam voluptas. Asperiores aut cupiditate ea
    error expedita iure nulla officia quaerat totam veniam voluptatem, voluptatibus? Amet consectetur mollitia
    necessitatibus quisquam ratione.</p>
<p>Ad autem blanditiis corporis dicta distinctio doloremque dolores eligendi est, eveniet inventore ipsum iste
    laudantium molestiae nesciunt odit porro quaerat quas quidem quis repellendus rerum sapiente sint ullam unde
    veniam.</p>
<p>Adipisci, autem blanditiis corporis cumque dolores ducimus eaque harum, impedit laborum laudantium mollitia non
    obcaecati quos repudiandae sequi soluta, vel velit voluptates. Consequuntur doloremque ea expedita, minima quam
    tenetur veniam.</p>
<p>Aliquam blanditiis eos est excepturi hic magnam maxime molestiae nam numquam voluptatem. Blanditiis cupiditate nisi
    non nostrum quae quas quibusdam repudiandae similique temporibus. Enim harum iusto neque quidem tenetur
    voluptates?</p>
<p>Consectetur culpa delectus eaque earum ipsum laudantium natus, nihil obcaecati, odio officia quae quidem quisquam
    sed? A adipisci eius hic nihil repellat sequi totam. Doloribus esse nulla tenetur? Ad, excepturi?</p>
<p>A asperiores assumenda at cupiditate, deserunt dicta dignissimos, dolorem facere impedit incidunt inventore
    laboriosam laudantium minus, necessitatibus praesentium quae quisquam rem repellat reprehenderit similique tenetur
    veniam vitae voluptas voluptatem voluptatibus!</p>
<p>Adipisci expedita explicabo odit! Ad alias aliquid animi blanditiis consequatur dolor dolorem ducimus eaque, eligendi
    eos harum, id impedit iure laboriosam magnam nemo numquam optio quasi quibusdam reiciendis repellat sit.</p>
<p>Commodi deserunt dolor, dolorem eos ipsam labore nam quam qui quibusdam, sapiente similique voluptatem. Aliquam cum
    distinctio dolore enim esse eum incidunt iste natus, odit, optio pariatur quo ratione rerum!</p>
<p>Alias cumque debitis dolore ipsum libero, necessitatibus odit quibusdam recusandae! Cum deserunt, enim maxime
    molestiae neque officia perferendis praesentium ratione recusandae sapiente similique suscipit ullam, ut, veritatis
    vero. Quos, rem?</p>
<p>Ad, alias error eveniet fugiat laudantium nostrum perspiciatis quas quod ratione sit velit voluptas voluptatem!
    Doloribus impedit necessitatibus quia quisquam? Consequuntur delectus dolorum earum illo modi numquam omnis quis
    vero?</p>
<p>Accusantium dolorem ducimus nam perferendis quod recusandae velit? Ducimus expedita id ipsa ipsum minus recusandae
    veritatis. Dicta dolores esse illum nam nihil temporibus tenetur? Autem deleniti dolores eum odio rerum?</p>
<p>At beatae consectetur, doloremque iure labore minus natus necessitatibus nemo nisi nulla officia pariatur possimus
    quasi qui, quidem similique soluta ullam ut velit voluptatum. Incidunt quam repudiandae sed! Laboriosam, minima!</p>
<p>A aliquid beatae consequuntur culpa cum cupiditate debitis dicta dignissimos doloribus eaque enim, ex libero magni
    non odio officia optio perspiciatis porro ratione reiciendis repellat repellendus suscipit tempora vitae,
    voluptatum.</p>
<p>Eaque exercitationem iste, neque odit possimus repellendus reprehenderit vero! Amet atque corporis distinctio, earum,
    eius expedita laborum molestiae natus nulla pariatur quam, quisquam recusandae repellat sapiente tempore! Dolorum,
    ipsa, sapiente!</p>
<p>Ab adipisci consectetur culpa dolor dolorum eaque earum eius est eum fuga hic iure molestiae natus necessitatibus
    nihil, non nostrum nulla obcaecati quia quidem quos repudiandae rerum sed tempora unde.</p>
<p>Adipisci assumenda commodi cum ea excepturi harum, minima nulla odit, officia possimus rem reprehenderit similique
    suscipit temporibus unde. Incidunt iure maiores quia! Amet aperiam dignissimos earum illo non ullam voluptates.</p>
<p>Accusamus alias at, consequatur, cum cumque distinctio earum et harum impedit ipsam iste itaque mollitia nam
    necessitatibus neque nesciunt nihil perferendis perspiciatis provident quas repudiandae sequi similique ut veniam,
    voluptas!</p>
<p>Aliquid, amet architecto consequuntur deserunt dolores eius eligendi enim harum illo incidunt ipsa magni minus modi
    molestiae molestias natus nemo nostrum nulla obcaecati omnis placeat rem repellat sed sequi veniam.</p>
<p>Accusantium amet beatae, consequuntur corporis culpa distinctio ea eos error, exercitationem incidunt itaque labore
    mollitia, non odit repudiandae sed tempora tenetur voluptates. Blanditiis ea error magnam molestias natus obcaecati
    quidem?</p>
<p>Ad alias atque commodi corporis cupiditate doloremque doloribus earum eius enim, est excepturi exercitationem ipsum
    itaque iusto natus nihil non, obcaecati omnis pariatur perferendis porro quia sapiente ut, vitae voluptatibus?</p>
<p>A asperiores assumenda autem, beatae commodi dignissimos eligendi error et eum eveniet fuga fugit harum, laudantium
    libero molestias nam nesciunt nulla officiis pariatur quas ratione reiciendis rem rerum sit vel.</p>
</body>
</html>