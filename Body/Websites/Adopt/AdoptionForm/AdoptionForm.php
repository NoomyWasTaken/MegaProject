<?php?>
<!DOCTYPE html>
<html>
<head>
    <title>Adopt</title>
    <link rel="stylesheet" type="text/css" href="/../MegaProject/Body/BodyLayout/BodyLayout.css">
    <link rel="stylesheet" type="text/css" href="/../MegaProject/Body/Header/header.css">
    <link rel="stylesheet" type="text/css" href="/../MegaProject/Body/Footer/footer.css">
    <link rel="stylesheet" type="text/css" href="AdoptionForm.css">


<body>

<?php
$pageTitle = 'Adoption Form';
include('../../Header/header.php'); ?>

<main>

    <div class="Confirm">
        <section id="inside">
            <h1>Adoption Form</h1>

            <form method="POST" action="SignIn.php">

        <h2>Terms and Conditions</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut aliquet finibus orci vel rhoncus. Quisque sed blandit justo. Aliquam in arcu felis. Nunc et tristique dui. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu ante non turpis congue vulputate. Cras et sem eu quam euismod ultrices nec eu tortor. Nullam aliquet volutpat ipsum, at commodo dui dictum eu.

            Sed pretium justo eu orci maximus, quis imperdiet odio efficitur. Ut fringilla a eros sed mattis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In venenatis leo quis mi venenatis volutpat. Suspendisse faucibus molestie tempus. Ut mi lectus, suscipit quis hendrerit vitae, facilisis et mauris. Praesent accumsan varius risus nec hendrerit. Sed sit amet mauris mattis, tincidunt leo ac, suscipit magna. Sed odio arcu, mattis in feugiat et, pellentesque quis lacus. Fusce laoreet augue in arcu consectetur luctus. Pellentesque vestibulum turpis metus. Ut non libero eu magna rhoncus sollicitudin ut quis magna. Sed arcu ante, auctor in sapien sit amet, commodo ullamcorper justo.

            Sed lacinia, nibh id tristique dignissim, massa lorem lobortis tellus, id condimentum augue diam et leo. Sed ultricies sollicitudin erat nec tempus. Maecenas pellentesque gravida justo, sed consectetur erat iaculis sed. Aliquam fermentum ut sapien vitae varius. Praesent ultrices convallis lobortis. Duis tristique at urna et rutrum. Pellentesque quam magna, tempus vel dui eget, placerat maximus leo. Sed a luctus tortor. Suspendisse et velit eu augue ultrices malesuada nec vel ante.

            Praesent non mi in augue pharetra luctus. Sed gravida auctor turpis ac venenatis. Donec nibh mi, varius a augue vel, ultricies tempus est. Sed sit amet ligula tincidunt, volutpat elit sit amet, feugiat ipsum. Cras cursus elit leo, id mollis tortor pellentesque ac. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed eu enim non mi facilisis scelerisque. Lorem ipsum dolor sit amet, consectetur adipiscing elit.

            Nunc ac porttitor enim. Aenean dapibus mauris id velit tempus commodo. Donec eget felis nec orci mattis tincidunt. Pellentesque ornare placerat justo nec condimentum. Aenean tristique facilisis vulputate. Sed vestibulum urna id orci consectetur accumsan. Phasellus ut dui id urna porttitor rutrum. In ipsum erat, consectetur quis elit eu, auctor dictum mauris. Vestibulum tempus elementum augue eget rhoncus. Curabitur ut venenatis sem. Integer quis vulputate dui, non porta dui.</p>


        <input type="checkbox" id="tamdm" name="tandm" value="tandm">
            <label for="vehicle1">by reading the form above I accept the Terms and conditions of adopting this pet</label><br>

            <p> you will be contacted by the team as soon as your Adoption request gets reviewed</p>

            <div class="whitedogbone">
                <section>
                    <button class="bone_btn" id="boooone">
                        <div class="c1"></div>
                        <div class="c2"></div>
                        <div class="c3"></div>
                        <div class="c4"></div>
                        <div class="b1">
                            <div class="b2">
                                <input style="float: right; font-size: 14pt" type="submit" value="request" />
                            </div>
                        </div>
                    </button>
                </section>
            </div>

        </form>

    </div>
    </section>
</main>

<?php include('/../MegaProject/Body/Website/Footer/footer.php'); ?>

</body>
</html>
