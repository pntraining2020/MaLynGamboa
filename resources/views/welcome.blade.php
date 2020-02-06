<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PN-Training Exam</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body style="margin-left:10%"><br>
    <div class="container">
        <div class="card" style="width:800px">
            <div class="card-body">
            <form method="GET" action="{{route('/welcome')}}">
            @csrf
            
                <h4 class="card-title">Time Tracker</h4>
                    <div class="form-group">
                        <label for="names">Names</label>
                            <select class="form-control" name="users" id="names">
                            @foreach($users as $user)
                                <option>{{$user['fullname']}}</option>
                            @endforeach
                            </select>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-outline-primary" id="clockin">Clock In</button>
                            <input type="text" class="form-control" id="timein">
                    </div>
                    <center><div class="card" style="width:400px;text-align:center" >
                        <div class="card-body">
                            <div class="form-group">
                                <button class="btn btn-outline-primary" id="start">Start</button>
                                <input type="text" class="form-control" id="started">
                            </div>
                                <div class="form-group">
                                    <button class="btn btn-outline-primary" id="start">End</button>
                                    <input type="text" class="form-control" id="ended">
                            </div>
                        </div>
                    </center>
                    <div class="form-group">
                        <button class="btn btn-outline-primary" id="clockout">Clock Out</button>
                        <input type="clock in" class="form-control" id="timeout">
                    </div>
                    <div class="form-group">
                        <label for="totaltimeworked">Total Time Worked</label>
                        <input type="clock in" class="form-control" id="totaltimeworked">
                    </div>
                    <div class="form-group">
                        <label for="hoursleft">Hours Left Before Timeout</label>
                        <input type="clock in" class="form-control" id="hoursleft">
                    </div>
                    <div class="form-group">
                        <label for="breaksused">Total breaks used</label>
                        <input type="clock in" class="form-control" id="breaksused">
                    </div>
                </form> 
            </div>
        </div>
    </div>
</body>
<script>
    $('#clockin').click(function(){
        var dt = new Date();
        var time = dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();
        $('#timein').val(time);
        $('#clockin').attr("disabled", true);
        
    })
    $('#start').click(function(){
        var dt = new Date();
        var time = dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();
        $('#started').val(time);
        $('#start').attr("disabled", true);
        
    })
    $('#end').click(function(){
        var dt = new Date();
        var time = dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();
        $('#ended').val(time);
        $('#end').attr("disabled", true);
        
    })

    $('#clockout').click(function(){
        var dt = new Date();
        var time = dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();
        $('#timeout').val(time);
    })
</script>
</html>
