<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The R One - Contactus</title>
    
    <?php require("inc/links.php"); ?>
    <style>
        .h-line{
        width: 150px;
        margin: 0 auto ;
        height: 1.7px ;
    }
        .pop:hover{
            border-top-color: var(--teal) !important;
            transform: scale(1.03);
            transition: all 0.3s;
        }
    </style>
    
</head>
<body class="bg-light">

    <?php require('inc/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-blod h-font text-center">
            Contact us
        </h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab quisquam repellat, <br> ipsa harum nihil sit eligendi alias suscipit laboriosam voluptas!
        </p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.061085350478!2d73.54050061457951!3d4.208322596940591!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b3f7f5b4cdbfbbb%3A0xf0e7e0b3cba4e5b5!2s20%20Nirolhu%20Magu%2C%20Mal%C3%A9%2C%20Maldives!5e0!3m2!1sen!2sin!4v1680632770409!5m2!1sen!2sin"
                        height="320px" 
                        class="w-100 rounded"
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                    <h5 class="">Address</h5>
                    <a href="https://goo.gl/maps/wjRt2yG2C5kbekGi7" class="d-inline-block text-decoration-none text-dark mb-2">
                        <i class="bi bi-geo-alt-fill" target="_blank"></i>Lot 11056, Nirolhu Mangu 20, Huhumale, Republic of Maldives
                    </a>

                    <h5 class="mt-4">
                            call us
                    </h5>
                    <a href="tel: +9609781546" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> +960-9781546
                    </a>
                    <br>
                    <a href="tel: +9609781546" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> +960-9781546
                    </a>

                    <h5 class="mt-4">Email</h5>
                    <a href="mailto: therone.male@gmail.com" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-envelope-at-fill"></i>therone.male@gmail.com
                    </a>

                    <h5 class="mt-4">
                        Follow us
                    </h5>
                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-twitter m-1"></i>
                    </a>
                    
                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-facebook m-1"></i>
                    </a> 
                
                    <a href="#" class="d-inline-block text-dark fs-5">
                        <i class="bi bi-instagram m-1"></i>
                    </a> 
                 
                </div>
            </div>
            <div class="col-lg-6 col-md-6 px-4">
                <div class="bg-white rounded shadow p-4">
                    <form>
                        <h5 class="" style="font-weight: 500;">Send a message</h5>

                        <div class="mt-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control shadow-none">
                        </div>

                        <div class="mt-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control shadow-none">
                        </div>

                        <div class="mt-3">
                            <label class="form-label">Phone Number</label>
                            <input type="number" class="form-control shadow-none">
                        </div>

                        <div class="mt-3">
                            <label class="form-label">Phone Number</label>
                            <input type="number" class="form-control shadow-none">
                        </div>

                        <div class="mt-3">
                            <label class="form-label">Subject</label>
                            <input type="text" class="form-control shadow-none">
                        </div>

                        <div class="mt-3">
                            <label class="form-label">Message</label>
                            <textarea class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
                        </div>

                        <button type="submit" class="btn text-white custom-bg mt-3 h-font">
                            Send
                        </button>
                    </form>
                </div>
            </div>
            
        </div>
    </div>

    <?php require("inc/footer.php"); ?>

</body>
</html>