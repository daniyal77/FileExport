<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>

<div class="container">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('file.import.store') }}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="form-group">
                    <label for="file">فایل مورد نظر را انتخاب نمایید</label>
                    <input type="file" id="file" name="file" class="form-control-file">
                </div>
                <button class="btn btn-primary">ثبت</button>
            </form>
        </div>
    </div>
</div>


</body>
</html>
