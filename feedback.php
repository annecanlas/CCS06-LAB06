
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

<form method="POST" action="thankyou.php">

    Complete Name: <input type="text" name="complete_name" /><br /><br />

    Email Address: <input type="email" name="email" /><br /><br />

    Type:
    <select name="type">
    <option value="Inquiry">Inquiry</option>
    <option value="Feedback">Feedback</option>
    <option value="Other">Other</option>
    </select>
    <br /><br />

    Level of Satisfaction: <input type="range" name="satisfaction_level" min="1" max="10" step="1" /><br /><br />

    Feedback Message <input type="text" name="message" /> <br /><br />

    <button>Submit</button>
</form>