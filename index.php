<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Home</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
<body>
    <div class="container">
        <br>
        <a href="admin/login.php" class="btn btn-success pull-right">Login Admin</a>
        <br><br/>
        <h1 class="text-center">Web Master Student Management System</h1>
        <br><br/>
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <form action="" method="POST">
                    <table class="table table-bordered">
                        <tr>
                            <td colspan="2" class="text-center"><label>Student Information</label></td>
                        </tr>
                        <tr>
                            <td><label for="choose">Choose Class</label></td>
                            <td>
                                <select class="form-control" name="choose" id="choose">
                                    <option value="">Select</option>
                                    <option value="1st">1st</option>
                                    <option value="2nd">2nd</option>
                                    <option value="3rd">3rd</option>
                                    <option value="4th">4th</option>
                                    <option value="5th">5th</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="roll">Roll</label></td>
                            <td><input class="form-control" type="text" name="roll" id="roll" pattern="[0-9]{6}" placeholder="Roll"></td>
                        </tr>
                        <tr>
                            <td colspan="2" class="text-center"><input class="btn btn-success" type="submit" value="Show Info" name="show_info"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <br>
        <br>

        



    </div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>