<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Image scan</title>
	<link rel="stylesheet" href="css/main.css">
    <link rel="icon" type="image/png" sizes="16x16" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAACxMAAAsTAQCanBgAAAMoSURBVDhPZVPfaxxVFP7u/Mjszsya7KbbRNJ00xehWLCbQvGlfWj/gj4oCHlQH1aEin+Czz7mQdBiiiColD7oi1ow26gVKmqChobmRzXRupWku7PJ7M7s3J+eGVREL3PnXoY553zn+77D8J919eMvmsaYltH6ktZ6TisF2rtaqrbW6tp7Lz239tevxfonwWufLPvGYFEr+fLjbs/qHR4iHgxheS4qlQCh46JsOxpKXVdKvf7R1ReTPM7OX1TVh8FncRxfWb+/xRJmoXpqDokw8CYnEcxMg40HGKmMIR3NG6kuzM2fv7H9dVtYeQKCu0jBF3/a2oEuh2CVCUT9AeCOwQkD+LUqJk7OYvqZMyg9NQuh+cVsEC/msezVm583jTY/rK7fY6rkw6lOAjwDY9Sd7WBydgr1E3X4T/gIxym54uh8+x067btGpKNzFhHV2j84YBkR4IYV2JKDUWVjUXdSwC95ODtdR3WigkrgoeaNIfpxFQc795nkWcsidi93H/fguB6CSohjT06BaQWivmhhLCih79ko8RQbH97Eu88vYOWtt/Hw3jpkll12lBSNJCVC/RA8TWFy2dIhtOUSw4RKpFh9/wNs3P4Sw24X0cY6FBcUrCA4b1hKylxnKCGQ9A9xuH8APhxCxEdIOg9x550lrN1aQf/3PxBtbhLhBsym9iwLWnBQArHnOQ5UNiq2HBzRyYuTkxcU4RhFEZJHvxWuYdRqfvGCEJKLPSvt9ZZLzEAM4iKjJiSKTn7Ux7Czh/jnLbpHcMdrsIgTy3ULBEHtGCGXy/apc892ILLWo+1NlnQJfpIR9D2M6C6pFfIIPN9H5Xi9UCYvZOfyzpw0MOYV69M331hTnC/NTE8R7AFEtE8KGHIXPSQtGQJOuYz66adJVknVc280cg8tba7cWius3Jg/v8xgLpQdpxFHPchcDWrDkCcMBYlhjOjBNhR9r9aPY8wrfUXQFnq//iKKBLvf3xUnzjRvEEdTYbl0linJ/ibVECe20SgReePVmrZse4mwLTz45nYxTP8b5+aVF5payhbJe4lOGudC5l1ybJuqXtu50/7XOAN/Ar01xcqF8C92AAAAAElFTkSuQmCC" />
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" crossorigin="anonymous">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- MDB -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
    <!-- Datatables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css" crossorigin="anonymous">
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>

</head>
<body>

    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid"><a href="/index.php" >
            <span class="navbar-brand">
                <i class="fab fa-superpowers mr-3"></i>Image Scanner 
            </span></a>
            <span>
				<a href="/index.php" >
                    <button class="btn btn-sm btn-primary rounded-pill"><i class="fas fa-expand mr-3"></i> Trang chủ</button>
                </a>
                <button class="btn btn-sm btn-secondary rounded-pill"  onclick="showPopup()"><i class="fab fa-superpowers mr-3"></i> Giới thiệu</button>
            </span>
        </div>
    </nav>

	<div class="jumbotron p-3 text-white" style="background-color:#6c757d">
        <div class="container-intro">
            <h1>Kết quả phân tích</h1>
            <!-- <p style="font-size: 24px;">
                <b>Tất cả những gì bạn cần làm là tải ảnh lên và công cụ này sẽ phân tích thông tin ảnh cho bạn.</b> <br></p>
            
            </p> -->
        </div>
    </div>

	<div class="container" style="margin-top:30px">
		<h2>Thông tin ảnh </h2>
        <?php echo $_SESSION['context'] ?>
</div>
	<script type = "text/javascript" src="js/main.js"></script>
</body>

</html>



