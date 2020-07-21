<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <title>Analytics Fox Softwares</title>
</head>
<style>
    th,
    td {
        padding: 0% !important;
    }
</style>

<body>
    <main class="container">
        <div id="response"></div>
        <table class="table">
            <thead>
                <tr class="indigo white-text">
                    <th scope="col" class="indigo white-text">#</th>
                    <th scope="col"></th>
                    <th scope="col">Name</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Info</th>
                </tr>
            </thead>
            <tbody id="userList">
                <tr> <input type="text" class="filterSearch w-100 my-2 form-control" placeholder="Search..."> </tr>
                <?php for ($i = 0; $i <= 15; $i++) { ?>
                    <tr class="removeAfterLoad">
                        <th scope="col"></th>
                        <th scope="col">
                            <div class="spinner-border text-light" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </th>
                        <th scope="col">
                            <div class="spinner-border text-light" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </th>
                        <th scope="col">
                            <div class="spinner-border text-light" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </th>
                        <th scope="col">
                            <div class="spinner-border text-light" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </th>
                        <th scope="col">
                            <div class="spinner-border text-light" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </th>
                    </tr>
                <?php } ?>
            </tbody>

        </table>
        <button class="btn float-right btn-lg indigo white-text py-2" id="saveUsers"><i class="fas fa-save"></i>
            Save</button>
        <div class='modal fade' id='userModal'>
            <div class='modal-dialog' role='document'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title'></h5>
                        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>
                    <div class='modal-body'>
                        <div class="text-center">
                            <div class="preloader-wrapper big active">
                                <div class="spinner-border text-primary" role="status" style="height: 20vh; width: 10vw;">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div class="modal fade mt-5 pt-3 " id="popUpMessage" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content transparent mt-5 z-depth-0">
                <div class='modal-header'>
                    <h5 class='modal-title'>Congratulations &#x1F609;</h5>
                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>
                <div class='modal-body'>
                    <p class="text-center">User Data has been saved to console log in object format.</p class="text-center">
                </div>
            </div>
        </div>
    </div>
    <footer>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
        <script src="response.js"></script>
    </footer>
</body>

</html>