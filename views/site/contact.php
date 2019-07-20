<?php include ROOT . '/views/layouts/header.php'; ?>
    <section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="titie-section wow fadeInDown animated ">
                    <h1>Отправить письмо нам</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 wow fadeInLeft animated">
                <div class="left-content">
                    <h1>Контакты:</h1>
                    <h3>ТЕЛЕФОНЫ:<br>
                        <br>Сыктывкар. +7 (912) 862-42-02
                        <br>Служба сервиса: +7 (912) 868-25-38</h3>
                        <h3>АДРЕС :<br>

                        <br>Сыктывкар,
                        <br>улица Куратова, д. 73/1
                        <br>(магазин Бенилюкс) , 1 этаж
                        </h3>
                    <div class="contact-info">
                        <p><b>Phone:</b> +7(912) 862-42-02</p>
                        <p><b>Email:</b> bekker@mail.ru</p>
                    </div>
                    <div class="social-media">
                        <ul>
                            <li><a href="https://vk.com/potoloknl"><i class="fa fa-vk"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 wow fadeInRight animated">
<?php if ($result): ?>
    <p>Сообщение отправлено! Мы ответим Вам на указанный email.</p>
<?php else: ?>
    <?php if (isset($errors) && is_array($errors)): ?>
        <ul>
            <?php foreach ($errors as $error): ?>
                <li> - <?php echo $error; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
                <form action="" method="post" class="contact-form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" class="form-control" id="name" placeholder="Your Name" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="email" class="form-control" name="userEmail" placeholder="E-mail" value="<?php echo $userEmail; ?>"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" class="form-control" id="name" placeholder="Subject">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" class="form-control" id="name" placeholder="Website URL">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group">
                                <textarea name="userText" class="form-control" cols="30" rows="5" placeholder="Your Message..." value="<?php echo $userText; ?>"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group">
                                <input type="submit" class="contact-submit" value="Send" />
                            </div>
                        </div>
                    </div>
                </form>
<?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php include ROOT . '/views/layouts/footer.php'; ?>