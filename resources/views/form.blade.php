<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">

        <form action="{{ URL::to('/save-contact') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <?php $message=Session::get('message');
                        if($message){
                            echo $message;
                            Session::put('message',null);
                        }  ?> 
          
          <div class="form-group">
            <label for="exampleInputName">Họ và Tên</label>
            <input type="text" class="form-control" id="exampleInputName" placeholder="Họ và Tên" name="fullname">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          </div>
          <div class="form-group">
            <label for="exampleInputPhone">Số điện thoại</label>
            <input type="text" name="phone" class="form-control" id="exampleInputPhone" aria-describedby="emailHelp" placeholder="Số điện thoại">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          </div>
          
          <div class="form-group">
                <label for="exampleFormControlTextarea1">Nội dung liên hệ</label>
                <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
          <input type="submit" class="btn btn-primary" name="btn-submit"></input>
          <input type="reset" class="btn btn-danger" value="Clear"></input>
        </form>
    </div>
</body>
</html>