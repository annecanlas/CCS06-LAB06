<style>
    h1 {
        font-family: Roboto;
        font-size: 32px;
    }

    input[type=text], [type=date], [type=email], select {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        resize: vertical;
    }

    input[type=range]{
        width: 10%;
        height: 1%;
        padding: 0px;
        border: 1px solid #ccc;
    }

    input[type=color]{
        width: 10%;
        padding: 0px;
        border: 1px solid #ccc;
    }

    button {
        background-color: #9645ff;
        border: none;
        border-radius: 10px;
        color: white;
        padding: 16px 32px;
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;
        position: absolute;
        top: 50%;
        left: 50%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }
</style>

<h1>PROFILE FORM</h1>

<form method="POST" action="profile-form.php">

    Complete Name: <input type="text" name="complete_name" /><br /><br />

    Birthdate: <input type="date" name="birthdate" /><br /><br />

    Email Address: <input type="email" name="email" /><br /><br />

    Program:
    <select name="program">
    <option value="BSCS">Bachelor of Science in Computer Science</option>
    <option value="BSIT">Bachelor of Science in Information Technology</option>
    </select>
    <br /><br />

    Favorite Color: <input type="color" name="favorite_color" /><br /><br />

    Superpower Level: <input type="range" name="superpower_level" min="1" max="1000000" step="5000" /><br /><br />

    <button>Submit</button>
</form>