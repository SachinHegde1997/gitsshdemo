<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        
    </head>
    <body>
        <form action="{{ url('/work') }}" method="POST">
        @csrf
            <lable for="username">Name</lable>
            <input type="text" name="username" id="username" placeholder="Enter Name"/>
            <lable for="age">Age</lable>
            <input type="number" name="age" id="age" placeholder="Enter Age"/>
            <p>Willing to Work</p>
            <input type="radio" id="yes" name="willingtowork" value="Yes">
            <label for="yes">Yes</label><br>
            <input type="radio" id="no" name="willingtowork" value="No">
            <label for="no">No</label><br>
            <lable for="gender">Gender</lable>
            <select name="gender" id="gender">
                <option value="" disabled selected >Select Gender</option>
                <option value="1">Male</option>
                <option value="2">FeMale</option>
            </select>
<br>
            <lable for="languages">Languages</lable>
            <input type="checkbox" name="languages[]" id="eng" value="English">
            <label for="languages"> English</label><br>
            <input type="checkbox" name="languages[]" id="hin" value="Hindi">
            <label for="languages"> Hindi</label><br>
            <input type="checkbox" name="languages[]" id="kan" value="Kannada">
            <label for="languages"> Kannada</label><br>
            <input type="checkbox" name="languages[]" id="mal" value="Malayalam">
            <label for="lang"> Malayalam</label><br>
            <input type="checkbox" name="languages[]" id="tel" value="Telugu">
            <label for="languages"> Telugu</label><br>
            <input type="submit" value="submit">
        </form>
    </body>
</html>
