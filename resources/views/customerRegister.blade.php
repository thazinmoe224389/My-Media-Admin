<!DOCTYPE html>
<html>
    <head>
        <title>Document</title>
    </head>
    <body>
        Customer Register Page
        <hr>
        <form action="{{route('customerPostTest',10)}}" method="POST">
            @csrf
            Name : <input type="text" name="userName"><br><br>
            Age  : <input type="number" name="userAge"><br><br>
            Address:<input type="text" name="userAddress"><br><br>
            Gender :
            <select name="userGender">
                <option value="M">Male</option>
                <option value="F">Female</option>

            </select>
            <input type="submit" value="Save">
        </form>
    </body>
</html>