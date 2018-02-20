<?php

$contact_instance = new DBConnection();

$conn_contact = $contact_instance->connect();


$table = 'contact';

$query = "SELECT * FROM $table WHERE 1";

$result_contact = mysqli_query($conn_contact, $query);

while ($row_contact = mysqli_fetch_assoc($result_contact)) {

    $email = $row_contact['email'];
    $address = $row_contact['address'];
    $tel = $row_contact['telephone'];
}

?>

<div class="row footer" style="margin-top: 0;">
        <div class="container-flud">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-4">
                        <div class="footerLogo"></div>
                        <div class="footerTitle">
                            <h5>CAMBRIDGE</h5>
                            <h6>INTERNATIONAL SCHOOL</h6>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <table>
                            <tr>
                                <td colspan="2">CONTACT</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="icon-top white-text">
                                        <img src="http://localhost/cmb/Assets/images/icons/address.png" width="30">
                                    </div>
                                </td>
                                <td>
                                    <?php

                                    echo $address;

                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="icon-top white-text">
                                        <img src="http://localhost/cmb/Assets/images/icons/mail.png" width="30">
                                    </div>
                                </td>
                                <td>
                                    <?php

                                    echo '<a href="mailto:' . $email . '">' . $email . '</a>';

                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="icon-top white-text">
                                        <img src="http://localhost/cmb/Assets/images/icons/web.png" width="30">
                                    </div>
                                </td>
                                <td>
                                    <a href="https://cambridge.lk">https://cambridge.lk</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="icon-top white-text">
                                        <img src="http://localhost/cmb/Assets/images/icons/number.png" width="30">
                                    </div>
                                </td>
                                <td>
                                    <?php

                                    echo '<a href="tel:' . $tel . '">' . $tel . '</a>';

                                    ?>
                                </td>
                            </tr>
                            <tr class="socialLinks">
                                <td colspan="2">
                                    <ul class="list-inline list-unstyled">
                                        <li><a href="https://facebook.com/"><img
                                                        src="http://localhost/cmb/Assets/images/icons/facebook.png" width="50"></a></li>
                                        <li><a href="https://twitter.com/"><img src="http://localhost/cmb/Assets/images/icons/twitter.png"
                                                                                width="50"></li>
                                        <li><a href="https://plus.google.com/"><img
                                                        src="http://localhost/cmb/Assets/images/icons/google+.png" width="50"></li>
                                        <li><a href="https://youtube.com/"><img src="http://localhost/cmb/Assets/images/icons/youtube.png"
                                                                                width="50"></li>
                                        <li><a href="https://play.google.com/"><img
                                                        src="http://localhost/cmb/Assets/images/icons/android.png" width="50"></li>
                                        <li><a href="https://store.com/"><img src="http://localhost/cmb/Assets/images/icons/apple.png"
                                                                              width="50"></li>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <?php
                if (!$error == '') {
                    echo '<div class="well well-sm" style="background: #' . $bgColor . '">' . $errorCode . '</div>';
                }
                ?>
                <form action="./controllers/email/sendMessage.php" method="post" onsubmit="return validateForm()"
                      name="contact">
                    <div class="wow fadeInLeft animated" data-wow-offset="30" data-wow-duration="1.5s"
                         data-wow-delay="0.15s">
                        <div class="form-group">
                            <input type="text" class="form-control hidden"
                                   value="<?php echo $specificId; ?>"
                                   name="uniqueId" id="uniqueId"/>

                        </div>
                        <div class="form-group wow fadeInRight animated" data-wow-offset="30" data-wow-duration="1.5s"
                             data-wow-delay="0.15s">
                            <label for="name"><strong>NAME</strong></label>
                            <input type="text" name="name" placeholder="Type Your Name Here" class="form-control"
                                   id="name">
                        </div>
                        <div class="form-group wow fadeInLeft animated" data-wow-offset="30" data-wow-duration="1.5s"
                             data-wow-delay="0.15s">
                            <label for="email"><strong>EMAIL</strong></label>
                            <input type="email" name="email" placeholder="Type Your Email Here" class="form-control"
                                   id="email">
                        </div>

                        <div class="form-group wow fadeInRight animated" data-wow-offset="30" data-wow-duration="1.5s"
                             data-wow-delay="0.15s">
                            <label for="message"><strong>YOUR MESSAGE</strong></label>
                            <textarea style="resize: none;" name="message" class="form-control"
                                      placeholder="Type Your Message Here"
                                      id="message"></textarea>

                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit"
                                    class="btn custom-button wow fadeInLeft animated btn-block"
                                    id="submit"
                                    data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">Send Message
                            </button>
                        </div>


                </form>


            </div>
        </div>
    </div>